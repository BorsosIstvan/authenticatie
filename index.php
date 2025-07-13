<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "<h2>Welkom, " . htmlspecialchars($_SESSION['username']) . "!</h2>";
    echo '<a href="logout.php">Uitloggen</a>';
} else {
    echo "<h2>Je bent niet ingelogd.</h2>";
    echo '<a href="login.html">Inloggen</a> | <a href="register.html">Aanmelden</a>';
}
?>
