<?php
$dsn = 'mysql:host=localhost;dbname=users';
$username = "root";
$password ="root";
$driver_options = [];

$pdo = new PDO($dsn, $username, $password, $driver_options);

$stmt = $pdo->prepare('SELECT count(*) as cnt FROM users WHERE email = :email AND password = :password');
// :何ちゃら・・・プレイスホルダー・queryではなくprepare
//select from

$stmt->execute(array(

		':email' => $_POST['email'],
		':password' => $_POST['password']

	));
$record = $stmt->fetchAll();
if(0<(int)$record[0]['cnt']){ //select記入したものを取り出している
	echo '成功'; session_start();
	$_SESSION["username"] = $_POST['email'];
	echo $_SESSION[‘username’] ;
	}else{
	echo '失敗';
}
//session 値を保持