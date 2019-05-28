<?php

$dsn = 'mysql:host=localhost;dbname=users';
$username = "root";
$password ="root";
$driver_options = [];

$pdo = new PDO($dsn, $username, $password, $driver_options);
$sql = 'INSERT INTO users(name,email,password) values(:name,:email,:password)';

$stmt = $pdo->prepare($sql);
$stmt->execute(array(
		':name' => $_POST['name'],
		':email' => $_POST['email'],
		':password' => $_POST['password']
	));

header('Location: ./users-thanks.php'); //phpリダイレクト
exit;