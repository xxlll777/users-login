<?php

session_start();
if(isset($_SESSION['username'])){
	echo 'ログイン中';
} else {
	echo 'ログインしてください';
}
//if文で(usename同じemailアドレスで登録している
//userがいるかどうか)判断する。