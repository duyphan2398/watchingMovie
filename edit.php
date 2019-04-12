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
  <!-- kết nối DB và lấy dữ liệu phim -->
  <?php 
    if (isset($_GET['id_phim'])) {
      include("connect.php");
      $id_phim = $_GET['id_phim']; 
      $sql = "SELECT * FROM phim WHERE id_phim=$id_phim"; 
      $query = mysqli_query($connection,$sql);
      $data = mysqli_fetch_assoc($query);
    }

  ?>

<div class="container" style="width: 600px">
    <h2>Thêm phim</h2>
    <form action="" method="post">
         <div class="form-group">
            <label for="">ID PHIM:</label>
            <input type="text" class="form-control"   name="id_phim" value="<?php echo $data['id_phim'] ?>"readonly>
        </div>
        <div class="form-group">
            <label for="">Tên:</label>
            <input type="text" class="form-control"  placeholder="Nhập tên phim" name="ten" value="<?php echo $data['ten_phim'] ?>">
        </div>
        <div class="form-group">
            <label for="">Mô tả:</label>
            <input type="text" class="form-control"  placeholder="Nhập mô tả" name="mota" value="<?php echo $data['thongtin_phim'] ?>">
        </div>
        <div class="form-group">
            <label for="">ID thể loại: (Viễn tưởng: 1, Kinh dị: 2, Hài: 3, Hành động: 4, Tình cảm: 5, Lịch sử: 6)</label>
            <input type="number" min="1" max="6"class="form-control"  placeholder="Nhập ID thể loại" name="id_theloai" value="<?php echo $data['id_theloai'] ?>">
        </div>
        <div class="form-group">
            <label for="">URL ảnh: (cú pháp: /data/anh/tênảnh.jpg )</label>
            <input type="text" class="form-control"  placeholder="Nhập URL ảnh" name="anh_phim" value="<?php echo $data['anh_phim'] ?>">
        </div>
        <div class="form-group">
            <label for="">URL phim:(cú pháp:  /data/phim/tênphim.mp4 )</label>
            <input type="text" class="form-control"  placeholder="Nhập URL phim" name="url_phim" value="<?php echo $data['url_phim'] ?>">
        </div>
        
        
        <div class="form-group">
        	<input type="submit" class="button" name="submit_sua" value="submit">
        </div>
    </form>

    <br>

    <?php 
      if (isset($_POST['submit_sua'])) {
        $id_phim = $_POST['id_phim'];
        $ten_phim = $_POST['ten'];
        $mota_phim = $_POST['mota'];
        $id_theloai = $_POST['id_theloai'];
        $anh_phim = $_POST['anh_phim'];
        $url_phim = $_POST['url_phim'];  
        if(!$ten_phim || !$mota_phim || !$id_theloai || !$anh_phim || !$url_phim){
          echo '<p style="color: #f90606b3; font-size: 25px;">*Vui lòng nhập đầy đủ thông tin</p>';
          exit;
        }
        @$updatephim = mysqli_query($connection,"UPDATE `phim` SET `ten_phim`='$ten_phim',`thongtin_phim`='$mota_phim', `id_theloai`=$id_theloai,`anh_phim`='$anh_phim',`url_phim`='$url_phim'  WHERE `id_phim`=$id_phim");

        if ($updatephim){
          echo '<p style="color: #2cf515; font-size: 25px;">+Update thành công</p> <br/>  <a href="admin.php" class="button" style="font-size: 20px;">Trở về</a>';
        }
        else {
          echo '<p style="color: #f90606b3; font-size: 25px;">*Không thể update. Vui lòng kiểm tra lại</p>';
        }
      } 

    ?> 
</div>
</body>
</html>