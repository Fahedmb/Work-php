<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once '../../config.php';
require '../../vendor/autoload.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    $email = htmlspecialchars($_POST['email']);
    $db = config::getConnexion();
    $check = $db->prepare('SELECT email FROM Utilisateur WHERE email = ?');
    $check->execute(array($email));
    $row = $check->rowCount();
    $email = strtolower($email);
    
    if ($row == 0) { 
        header('Location: ../../View/Front Office/forgotpassword.php?err=email_not_found');
        exit();
    }

    $PasswordResetToken = bin2hex(random_bytes(50));
    $update = $db->prepare("UPDATE Utilisateur SET PasswordResetToken = :PasswordResetToken, PRT_time = NOW() WHERE email = :email");
    $update->execute(
        array(
            'PasswordResetToken' => $PasswordResetToken,
            'email' => $email
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
        $mail->addAddress($email);
        $reset_link = 'http://localhost:8080/karim%20user/View/Front%20Office/newpassword.php?PasswordResetToken=' . $PasswordResetToken;
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset Request';
        $mail->Body = 'Hello, we received a password reset request for your account. <a href="' . $reset_link . '">Click here to reset your password</a>';
        
        $mail->send();
        echo 'Reset link has been sent to your email';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    header('Location: ../../View/Front Office/forgotpassword.php?reset=success');
    exit();
} else {
    header('Location: ../../View/Front Office/forgotpassword.php');
    exit();
}
?>