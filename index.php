<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Welkom</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welkom, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Je bent succesvol ingelogd.</p>
        <a href="logout.php" class="button">Uitloggen</a>
        <div>
            <h1>JS test</h1>
            <button onclick="zegHoi()">Function</button>
        </div>
    </div>
    <script>
        function zegHoi() {
        alert("Hallo wereld!");
        }
    </script>
</body>
</html>
