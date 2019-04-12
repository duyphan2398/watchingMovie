<?php 
	session_start();
    if(!isset($_COOKIE['user'])){
        echo "Vui lòng đăng nhập <a href='login.php'>tại đây</a>";
        exit;
    }
        
 ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin | Phim Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>
<body>

    <!-- Back to top Button -->
    <script>
    // kéo xuống khoảng cách 500px thì xuất hiện nút Top-up
    var offset = 250;
    // thời gian di trượt 0.75s ( 1000 = 1s )
    var duration = 750;
    $(function(){
    $(window).scroll(function () {
    if ($(this).scrollTop() > offset)
    $('#top-up').fadeIn(duration);else
    $('#top-up').fadeOut(duration);
    });
    $('#top-up').click(function () {
    $('body,html').animate({scrollTop: 0}, duration);
    });
    });
    </script>



    <div title="Về đầu trang" onmouseover="this.style.color='#590059'" onmouseout="this.style.color='#004993'" id="top-up">
    <i class="fa fa-caret-square-o-up"></i></div>
    <style>
    	#top-up {
    		background:none;
    		font-size: 3em;
    		text-shadow:0px 0px 20px #d400fb;
    		cursor: pointer;
    		position: fixed;
    		z-index: 9999;
    		color:#004993;
    		bottom: 20px;
    		right: 15px;
    		display: none;
    		padding-right: 25px;
    		padding-bottom: 20px
    	}
        body{
         padding: 40px;	
            
        }
        table{

            text-align: center;
        }
        td{
            padding: 10px;
        }
        tr.item{
            border-top: 1px solid #5e5e5e;
            border-bottom: 1px solid #5e5e5e;
        }

        tr.item:hover{
            background-color: #d9edf7;
        }

        tr.item td{
            min-width: 150px;
        }

        tr.header{
            font-weight: bold;
        }

        a{
            text-decoration: underline;
        }
        a:hover{
            color: deeppink;
            font-weight: bold;
        }
    </style>


    <ul style="font-size: 20px">	
    				
    	<li><a href="register.php">Đăng ký Admin</a></li>
    	<li><a href="add.php">Thêm Phim</a></li>	
    	<li><a href="logout.php">Log Out</a></li>				
    			
    </ul>




    <table cellpadding="10" cellspacing="10" border="0" style="border-collapse: collapse; margin: auto">

        <tr class="control" style="text-align: center; font-weight: bold; font-size: 20px">
            <td colspan="7" >
                <a href="admin.php" style="align-content: center; color: red;">QUẢN LÝ PHIM : <?= $_COOKIE['user'] ?></a>
            </td>
        </tr>
        <tr class="header">
            <td>ẢNH</td>
            <td>ID</td>
            <td>TÊN</td>
            <td>MÔ TẢ</td>
            <td>ID THỂ LOẠI</td>
            <td> URL PHIM</td>
            <td>THAO TÁC</td>
        </tr>
        <!-- Load phim -->
        <?php
            require_once('connect.php');
            $sql = "SELECT * FROM phim";
            $result = $connection ->query($sql);
            while($row = $result ->fetch_assoc()){
        ?>
        <tr class="item">
            <td><img src=".<?= $row['anh_phim'] ?>" style="max-height: 80px"></td>
            <td><?= $row['id_phim'] ?></td>
            <td><?= $row['ten_phim'] ?></td>
            <td><?= $row['thongtin_phim'] ?></td>
            <td><?= $row['id_theloai'] ?></td>
            <td><a href=".<?= $row['url_phim'] ?>"><img src=".<?= $row['anh_phim'] ?>" style="max-height: 80px"></a></td>
            <td><a href="./edit.php?id_phim=<?=$row['id_phim']?>">Edit</a> | <a href="./delete.php?id_phim=<?=$row['id_phim']?>"  class="delete">Delete</a></td>
        </tr>
        <?php 
            }


         ?>
        <tr class="control" style="text-align: right; font-weight: bold; font-size: 17px">
            <td colspan="5">
                <p>Số lượng phim: <?=$result->num_rows?></p>
            </td>
        </tr>
    </table>







</body>
</html>