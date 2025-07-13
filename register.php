<?php
session_start();

$file = 'users.json';
$users = [];

if (file_exists($file)) {
    $json = file_get_contents($file);
    $users = json_decode($json, true);
}

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username])) {
    echo "Gebruiker bestaat al. <a href='register.html'>Probeer opnieuw</a>";
    exit;
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$users[$username] = $hashed_password;

file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));

// Automatisch inloggen na registratie
$_SESSION['username'] = $username;

header('Location: index.php');
exit;
?>
