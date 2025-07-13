<?php
session_start();

$file = 'users.json';

if (!file_exists($file)) {
    echo "Nog geen gebruikers. <a href='register.html'>Aanmelden</a>";
    exit;
}

$users = json_decode(file_get_contents($file), true);
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username]) && password_verify($password, $users[$username])) {
    $_SESSION['username'] = $username;
    header('Location: index.php');
    exit;
} else {
    echo "Ongeldige gegevens. <a href='login.html'>Opnieuw proberen</a>";
}
?>
