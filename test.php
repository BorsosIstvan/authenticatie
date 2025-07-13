<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Scaha hmi en plc</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welkom, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Je bent succesvol ingelogd.</p>
        <a href="logout.php" class="button">Uitloggen</a>
        <a href="login.php" class="button">Inloggen</a>
    </div>

</body>
</html>