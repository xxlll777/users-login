<?php

session_start();
if(isset($_SESSION['username'])){
	echo 'ログイン中';
} else {
	echo 'ログインしてください';
}