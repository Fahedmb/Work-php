<?php
require_once '../../config.php';
session_start();

if (isset($_GET['token'])) {
    $token = htmlspecialchars($_GET['token']);

    $db = config::getConnexion();
    $check = $db->prepare('SELECT email, token_time FROM Utilisateur WHERE token = ?');
    $check->execute(array($token));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row > 0) {
        $token_time = strtotime($data['token_time']);
        $current_time = time();

        if (($current_time - $token_time) <= 3600) { // 1 hour
            $update = $db->prepare('UPDATE Utilisateur SET verified = 1 WHERE token = ?');
            $update->execute(array($token));

            echo '<div style="font-family: Arial, sans-serif; margin: 0 auto; width: 50%; padding: 10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; text-align: center;">';
            echo '<h2>Your email has been verified!</h2>';
            echo '<p><a href="../../View/Front Office/login.php" style="color: #155724;">Click here to login</a></p>';
            echo '</div>';
        } else {
            echo 'Token has expired.';
        }
    } else {
        echo 'Invalid token.';
    }
} else {
    header('Location: ../../View/Front Office/register.php');
    exit();
}
?>