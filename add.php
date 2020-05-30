<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <style>
    body {
        padding-top: 50px;
    }

    table {

        text-align: center;
    }

    tr.item {
        border-top: 1px solid #5e5e5e;
        border-bottom: 1px solid #5e5e5e;
    }

    tr.item:hover {
        background-color: #d9edf7;
    }

    tr.item td {
        min-width: 150px;
    }

    tr.header {
        font-weight: bold;
    }

    a {
        text-decoration: none;
    }

    a:hover {
        color: deeppink;
        font-weight: bold;
    }

    .button {
        display: inline-block;
        padding: 10px 25px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 10px;
        box-shadow: 0 9px #999;
    }

    .button:hover {
        background-color: #3e8e41;
    }

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 4px #666;
        transform: translateY(4px);
    }
    </style>


    <div class="container" style="width: 600px">
        <div class="card bg-dark text-white">
            <div class="card-body">Thêm Danh sách Phim</div>
        </div>
        <br>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Tên:</label>
                <input type="text" class="form-control" placeholder="Nhập tên phim" name="ten">
            </div>
            <div class="form-group">
                <label for="">Mô tả:</label>
                <input type="text" class="form-control" placeholder="Nhập mô tả" name="mota">
            </div>
            <div class="form-group">
                <label for="">ID thể loại: (Viễn tưởng: 1, Kinh dị: 2, Hài: 3, Hành động: 4, Tình cảm: 5, Lịch sử:
                    6)</label>
                <input type="number" min="1" max="6" class="form-control" placeholder="Nhập ID thể loại"
                    name="id_theloai">
            </div>
            <div class="form-group">
                <label for="">URL ảnh: (cú pháp: /data/anh/tênảnh.jpg )</label>
                <input type="text" class="form-control" placeholder="Nhập URL ảnh" name="anh_phim"
                    value="/data/anh/.jpg">
            </div>
            <div class="form-group">
                <label for="">URL phim:(cú pháp: /data/phim/tênphim.mp4 )</label>
                <input type="text" class="form-control" placeholder="Nhập URL phim" name="url_phim"
                    value="/data/phim/.mp4">
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
                echo '<div class="alert alert-danger">
                <strong>Thiếu thông tin!</strong> Vui lòng nhập đầy đủ thông tin!
                </div>';
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
                echo '<div class="alert alert-success"><strong>Thêm thành công!</strong></div> 
                        <br/> 
                        <a href="add.php" class="btn btn-info">Tiếp tục</a>
                        <br/>';
    		}
  		  else {
                echo '<div class="alert alert-warning">
                <strong>Không thể thêm phim!</strong> Vui lòng kiểm tra lại thông tin!</div>';
        }
        echo '<a href="admin.php" class="btn btn-primary">Trở về</a>';
      }
  	?>
    </div>
</body>

</html>