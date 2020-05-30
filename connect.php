<?php
	
    $connection = mysqli_connect("localhost:3325", "root", "") or die("Khong the ket noi den database");
    mysqli_select_db($connection, "cinema") or die("Khong tim thay database");
  	mysqli_set_charset($connection, 'UTF8');
	
?>