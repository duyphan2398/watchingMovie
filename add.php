<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<style>
    body{
        padding-top: 50px;
    }
    table{

        text-align: center;
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
        text-decoration: none;
    }
    a:hover{
        color: deeppink;
        font-weight: bold;
    }
</style>


<div class="container" style="width: 600px">
    <h2>Thêm phim</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Tên:</label>
            <input type="text" class="form-control"  placeholder="Nhập tên phim" name="ten">
        </div>
        <div class="form-group">
            <label for="">Mô tả:</label>
            <input type="text" class="form-control"  placeholder="Nhập mô tả" name="mota">
        </div>
        <div class="form-group">
            <label for="">ID thể loại: (Viễn tưởng: 1, Kinh dị: 2, Hài: 3, Hành động: 4, Tình cảm: 5, Lịch sử: 6)</label>
            <input type="number" min="1" max="6"class="form-control"  placeholder="Nhập ID thể loại" name="id_theloai">
        </div>
        <div class="form-group">
            <label for="">URL ảnh: (cú pháp: /data/anh/tênảnh.jpg )</label>
            <input type="text" class="form-control"  placeholder="Nhập URL ảnh" name="anh_phim" value="/data/anh/.jpg">
        </div>
        <div class="form-group">
            <label for="">URL phim:(cú pháp:  /data/phim/tênphim.mp4 )</label>
            <input type="text" class="form-control"  placeholder="Nhập URL phim" name="url_phim" value="/data/phim/.mp4">
        </div>
        
        
        <div class="form-group">
        	<input type="submit" class="button" name="submit_them" value="submit">
        </div>
    </form>

    <br>
    <!-- Xử lý add nội dung -->
  	<?php 
    	if (isset($_POST['submit_them'])) {
    		include("connect.php");
    		$ten_phim = $_POST['ten'];
    		$mota_phim = $_POST['mota'];
    		$id_theloai = $_POST['id_theloai'];
    		$anh_phim = $_POST['anh_phim'];
    		$url_phim = $_POST['url_phim'];	 
    		if(!$ten_phim || !$mota_phim || !$id_theloai || !$anh_phim || !$url_phim){
    			echo '<p style="color: #f90606b3; font-size: 25px;">*Vui lòng nhập đầy đủ thông tin</p>';
    			exit;
    		}

    		@$addphim = mysqli_query($connection,"
  						        INSERT INTO phim (
  						            ten_phim,
  						            thongtin_phim,
  						            id_theloai,
  						            anh_phim,
  						            url_phim					         
  						        )
  						        VALUE (
  						            '{$ten_phim}',
  						            '{$mota_phim}',						           
  						            '{$id_theloai}',
  						            '{$anh_phim}',
  						            '{$url_phim}')");

    		if ($addphim){
    			echo '<p style="color: #2cf515; font-size: 25px;">+Thêm thành công</p> <br/> <a href="add.php" class="button" style="font-size: 20px;">Tiếp tục</a> <a href="admin.php" class="button" style="font-size: 20px;">Trở về</a>';
    		}
  		  else {
  			  echo '<p style="color: #f90606b3; font-size: 25px;">*Không thể thêm. Vui lòng kiểm tra lại</p>';
  	    }
      }
  	?>
</div>
</body>
</html>