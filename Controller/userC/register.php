<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once '../../config.php';
require '../../vendor/autoload.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    // Patch XSS
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = strtolower(htmlspecialchars($_POST['email']));
    $password = $_POST['password'];
    $password_retype = $_POST['password_retype'];
    $genre = htmlspecialchars($_POST['genre']);
    $numeroTelephone = htmlspecialchars($_POST['numeroTelephone']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $profile_picture = $_FILES['profile_picture'] ?? null;

    // Handle the profile picture upload
    if ($profile_picture) {
        $profile_picture_name = $profile_picture['name'];
        $profile_picture_tmp_name = $profile_picture['tmp_name'];
        $profile_picture_size = $profile_picture['size'];
        $profile_picture_error = $profile_picture['error'];
    
        $profile_picture_ext = pathinfo($profile_picture_name, PATHINFO_EXTENSION);
        $profile_picture_new_name = uniqid() . '.' . $profile_picture_ext;
    
        $profile_picture_destination = '../../uploads/' . $profile_picture_new_name;
    
        if ($profile_picture_error === 0) {
            if ($profile_picture_size > 500000) {
                header('Location: ../../View/Front Office/register.php?reg_err=file_size');
                exit();
            } else {
                move_uploaded_file($profile_picture_tmp_name, $profile_picture_destination);
            }
        } else {
            header('Location: ../../View/Front Office/register.php?reg_err=file_error');
            exit();
        }
    } else {
        $profile_picture_destination = null;
    }   
    $db = config::getConnexion();
    $check = $db->prepare('SELECT email FROM Utilisateur WHERE email = ?');
    $check->execute(array($email));
    $row = $check->rowCount();
    
    $email = strtolower($email); 
    
    if ($row > 0) { 
        header('Location: ../../View/Front Office/register.php?reg_err=exists');
        exit();
    }
    

    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($password) && !empty($password_retype)) {
        if ($password === $password_retype) {
            if (strlen($password) >= 8) {
                $cost = ['cost' => 12];
                $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                $token = bin2hex(random_bytes(50));
                $token_time = date('Y-m-d H:i:s'); 
                $insert = $db->prepare("INSERT INTO Utilisateur (nom, prenom, email, password, genre, numeroTelephone, adresse, role, token, token_time, profile_picture) VALUES (:nom, :prenom, :email, :password, :genre, :numeroTelephone, :adresse, :role, :token, :token_time, :profile_picture)");
                $insert->execute(
                    array(
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'email' => $email,
                        'password' => $password,
                        'genre' => $genre,
                        'numeroTelephone' => $numeroTelephone,
                        'adresse' => $adresse,
                        'role' => "Utilisateur",
                        'token' => $token,
                        'token_time' => $token_time,
                        'profile_picture' => $profile_picture_destination
                    )
                );
                    
                    $mail = new PHPMailer(true);

                    try {
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'choeurproject@gmail.com';
                        $mail->Password = 'oabw kzbc bghm mgeb';
                        $mail->SMTPSecure = 'tls';
                        $mail->Port = 587;

                        $mail->setFrom('choeurproject@gmail.com', 'Mailer');
                        $mail->addAddress($email, $nom . ' ' . $prenom);
                        
                        $verification_link = 'http://localhost:8080/karim%20user/Controller/userC/verify.php?token=' . $token;

                        $mail->isHTML(true);
                        $mail->Subject = 'Registration Successful';
                        $mail->Body = 'Hello ' . $nom . ', Thank you for registering. Your account has been created successfully. <a href="' . $verification_link . '">Click here to verify your email</a>';
                        
                        $mail->send();
                        echo 'Message has been sent';
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }


                header('Location: ../../View/Front Office/register.php?reg_err=success');
                exit();
            } else {
                header('Location: ../../View/Front Office/register.php?reg_err=password_length');
                exit();
            }
            } else {
                header('Location: ../../View/Front Office/register.php?reg_err=password');
                exit();
            }
            } else {
                header('Location: ../../View/Front Office/register.php?reg_err=missing_fields');
                exit();
            }
            } else {
                header('Location: ../../View/Front Office/register.php');
                exit();
            }
?>