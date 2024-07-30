<?php
session_start();
// var_dump($_POST);
include(__DIR__ . '/connexion.php');

$username = $_POST['username'];
$password = $_POST['password'];
$sql_username = "SELECT * FROM `users` WHERE username = ?";
$stmt = $pdo->prepare($sql_username);
$stmt->execute([$username]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Verify that a user is found and the password matches
if ($user && password_verify($password, $user['password'])) {
  $_SESSION['username'] = $username;
  echo ("c'est bon vous êtes connecté");
} else {
  echo('<a href="login.php">Réessayer</a>');
} ?>

<!DOCTYPE>
<html>

<head>
  <title>Vous avez été connecté</title>
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <p>
  </p>
  <a href="index.php">Retour au menu principal</a>
</body>

</html>