<?php
	session_start();
	setcookie("user",$_COOKIE['user'],time()-1);
	session_destroy();
	header('location:index.php');
?>