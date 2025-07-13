<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Test Pagina</title>
  <link rel="stylesheet" href="stijl.css" />
</head>
<body>
  <div class="container">
    <h1>🎯 Test Pagina</h1>

    <?php if (isset($_SESSION['username'])): ?>
      <p>Welkom, <strong><?= htmlspecialchars($_SESSION['username']) ?></strong>!</p>
      <p><a href="php/logout.php">Uitloggen</a></p>
    <?php else: ?>
      <p>Je bent niet ingelogd.</p>
      <p><a href="index.php">Inloggen</a></p>
    <?php endif; ?>
  </div>
</body>
</html>
