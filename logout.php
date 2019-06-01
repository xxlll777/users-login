<?php
session_start();
unset($_SESSION['username']);
//unset：ログアウト

header('Location: ./users-login.html?logout=true');
exit; //redirect