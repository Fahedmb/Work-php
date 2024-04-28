<?php
require_once '../../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $PasswordResetToken = $_POST['PasswordResetToken'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    if ($password == $repeat_password && strlen($password) >= 8) {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $db = config::getConnexion();
        $check = $db->prepare('SELECT email, PRT_time FROM Utilisateur WHERE PasswordResetToken = ?');
        $check->execute(array($PasswordResetToken));
        $data = $check->fetch();
        $row = $check->rowCount();

        if ($row > 0) { 
            $PRT_time = strtotime($data['PRT_time']);
            $current_time = time();

            // Check if the token has expired
            if (($current_time - $PRT_time) <= 3600) { // Token is valid for 1 hour
                $update = $db->prepare("UPDATE Utilisateur SET password = :password, PasswordResetToken = NULL WHERE PasswordResetToken = :PasswordResetToken");
                $update->execute(
                    array(
                        'password' => $hashed_password,
                        'PasswordResetToken' => $PasswordResetToken
                    )
                );
                header('Location: ../../View/Front Office/login.php');
                exit();
            } else {
                header('Location: ../../View/Front Office/newpassword.php?err=token_expired');
                exit();
            }
        } else {
            header('Location: ../../View/Front Office/newpassword.php?err=invalid_PasswordResetToken');
            exit();
        }
    } else {
        header('Location: ../../View/Front Office/newpassword.php?err=password_mismatch');
        exit();
    }
}
?>