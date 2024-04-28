<?php
require_once '../../config.php';
require_once 'utilisateursC.php';

session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

// Check if the user ID is provided in the URL
if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit();
}

// Get the user ID from the URL
$userId = $_GET['id'];

// Delete the user
$utilisateursC = new UtilisateurC();
$utilisateursC->deleteUser($userId);

// Redirect back to the users page
header('Location: ../../View/Back Office/users.php');
exit();
?>
