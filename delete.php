<?php require_once('connect.php');
		$id_phim=$_GET['id_phim'];
		$sql="DELETE FROM phim WHERE id_phim=$id_phim";
		$connection->query($sql);
		header('location: admin.php');
?>