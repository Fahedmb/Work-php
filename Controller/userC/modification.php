<?php 
    require_once '../../config.php'; // Include the database connection
    session_start();

    // If the variables exist and are not empty
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {

        // Patch XSS
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        $genre = htmlspecialchars($_POST['genre']);
        $numeroTelephone = htmlspecialchars($_POST['numeroTelephone']);
        $adresse = htmlspecialchars($_POST['adresse']);

        // Check if the user exists
        $db = config::getConnexion();
        $check = $db->prepare('SELECT * FROM Utilisateur WHERE id = ?');
        $check->execute(array($_SESSION['user_id']));
        $data = $check->fetch();
        $row = $check->rowCount();

        // If the query returns 0, the user does not exist
        if ($row === 0) {
            header('Location: ../../View/Front Office/usermodif.php?reg_err=user_not_found');
            die();
        }

        // Update each field if provided
        $updateQuery = 'UPDATE Utilisateur SET ';
        $updateData = array();
        $updateFields = array();

        if (!empty($nom)) {
            $updateFields[] = 'nom = ?';
            $updateData[] = $nom;
        }

        if (!empty($prenom)) {
            $updateFields[] = 'prenom = ?';
            $updateData[] = $prenom;
        }

        if (!empty($email)) {
            $updateFields[] = 'email = ?';
            $updateData[] = $email;
        }

        if (!empty($password)) {
            if ($password === $password_retype && strlen($password) >= 8) {
                $cost = ['cost' => 12];
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $cost);
                $updateFields[] = 'password = ?';
                $updateData[] = $hashedPassword;
            } else {
                header('Location: ../../View/Front Office/usermodif.php?reg_err=password');
                die();
            }
        }

        if (!empty($genre)) {
            $updateFields[] = 'genre = ?';
            $updateData[] = $genre;
        }

        if (!empty($numeroTelephone)) {
            $updateFields[] = 'numeroTelephone = ?';
            $updateData[] = $numeroTelephone;
        }

        if (!empty($adresse)) {
            $updateFields[] = 'adresse = ?';
            $updateData[] = $adresse;
        }

        // If no fields were provided for update
        if (empty($updateFields)) {
            header('Location: ../../View/Front Office/usermodif.php?reg_err=no_updates');
            die();
        }

        // Construct the update query
        $updateQuery .= implode(', ', $updateFields);
        $updateQuery .= ' WHERE id = ?';
        $updateData[] = $_SESSION['user_id'];

        // Execute the update query
        $updateStatement = $db->prepare($updateQuery);
        $updateStatement->execute($updateData);

        header('Location: ../../View/Front Office/usermodif.php?reg_err=success');
        die();
    }

    // If something went wrong or the request method is not POST
    header('Location: ../../View/Front Office/usermodif.php');
    die();
?>
