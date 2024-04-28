<?php
require_once '../../config.php'; 
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

$recaptcha_secret_key = '6LdTb8kpAAAAANMUWBID18w58DZM2pApmEYHlkBF';
$recaptcha_response = $_POST['g-recaptcha-response'];

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret_key."&response=".$recaptcha_response);
$response_data = json_decode($response);

if (!$response_data->success) {
    $_SESSION['recaptcha_err'] = 'reCAPTCHA check failed!';
    header('Location: ../../View/Front Office/login.php');
    exit();
}


    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $db = config::getConnexion();
    $check = $db->prepare('SELECT id, email, password, role FROM Utilisateur WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();


    if (empty($email) || empty($password)) {
        header('Location: ../../View/Front Office/login.php?login_err=missing_fields');
        exit();
    }


    if (!$data) { 
        header('Location: ../../View/Front Office/login.php?login_err=not_exist');
        exit();
    }

    if (password_verify($password, $data['password'])) {

        $_SESSION['user_id'] = $data['id'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['role'] = $data['role'];

        switch ($data['role']) {
            case 'Administrateur':
                header('Location: ../../View/Front Office/admin/index.php');
                exit();
            case 'Utilisateur':
                header('Location: ../../View/Front Office/index.php');
                exit();
            default:
                header('Location: ../../View/Front Office/login.php?login_err=unknown_role');
                exit();
            }
            } else {
                header('Location: ../../View/Front Office/login.php?login_err=wrong_password');
                exit();
            }
            } else {
                header('Location: ../../View/Front Office/login.php');
                exit();
            }
?>
