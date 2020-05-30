<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- CSS -->
    <link type="text/css" media="all" href="./css/autoptimize_9d0e530217008b35a0953a4ba9883915.css" rel="stylesheet" />

    <!-- Đặt title -->
    <?php 

	if (isset($_GET["timkiem"])) {

	echo '<!-- Title-Logo -->
	<title>Tìm kiếm | Phim Online</title>';

	}
	?>

    <link rel="icon" href="./logo/free_horizontal_on_white_by_logaster.png" type="image/x-icon" />
    <link rel='stylesheet' id='dp-fonts-css' href='./css/font/font.css' type='text/css' media='all' />



    <!-- Scipt -->
    <script type='text/javascript' src='./js/jquery.js'></script>
    <script type='text/javascript' src='./js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='./js/modernizr.min.js'></script>
    <script type='text/javascript' src='./js/jquery.plugins.min.js'></script>
    <script type='text/javascript' src='./js/jwplayer.js'></script>
    <script type='text/javascript' src='./js/jquery.fitvids.js'></script>
    <script type='text/javascript' src='./js/theme.js'></script>

</head>


<body class="boxed-wrap customize-support ">
    <div id="page">
        <!-- Header -->
        <?php 
		include("header.php");
	?>


        <!-- Thanh menu -->
        <?php 
		include("nav.php");
	?>




        <main>
            <div id="main" class="full-width">
                <div class="wrap cf">
                    <div id="content" role="main">
                        <div class="loop-content switchable-view grid-medium" data-view="grid-medium">
                            <div class="nag cf">
                                <!-- Xử lý Load phim từ cú pháp tìm kiếm -->
                                <?php 
							// Kết nối sql
							require_once('connect.php');
							// Tìm tổng số dòng dữ liệu 
							if (isset($_REQUEST['Search']) or isset($_GET['timkiem'])) 
					        {
					            // Gán hàm addslashes để chống sql injection
					            $search = addslashes($_GET['timkiem']);					 
					            // Nếu $search rỗng thì báo lỗi 
					            if($search == ""){
					           		echo '<p style="color: #f90606b3; font-size: 25px;">*Vui lòng nhập thông tin tìm kiếm</p';
					           		exit;
					            }					            
					            // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu 
					            $query = "SELECT * FROM phim WHERE `ten_phim` like '%$search%'";
				            	// Thực thi câu truy vấn
					            $sql = mysqli_query($connection,$query);				 
					            // Đếm số dòng trả về trong sql.
					            $num = mysqli_num_rows($sql);				 			
					             // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
					            if ($num > 0 and $search != "") 
					               {	
					                    // Dùng $num để đếm số dòng trả về.				 
					                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.				                	
			       						while($row = $sql->fetch_assoc()){
						?>
                                <div style="position: relative" class="item cf item-video">
                                    <div class="thumb">
                                        <a class="clip-link" title="<?=$row["ten_phim"]?>"
                                            href=".<?=$row["url_phim"]?>">
                                            <span class="clip">
                                                <img src=".<?=$row["anh_phim"]?>" alt="<?=$row["ten_phim"]?>" />
                                                <span class="vertical-align"></span>
                                            </span>
                                            <span class="overlay"></span>
                                        </a>
                                    </div>

                                    <div class="data">
                                        <h2 class="entry-title"><a href=".<?=$row["url_phim"]?>" rel="bookmark"
                                                title="<?=$row["ten_phim"]?>"><?= $row["ten_phim"] ?></a></h2>
                                    </div>
                                </div>
                                <?php 
										} 
									}
					                else {
					                    echo '<p style="color: #f90606b3; font-size: 25px;">*Không tìm thấy kết quả</p';
					                }
					            
					        }

						 ?>

                                <!-- End Xử lý LOad phim -->
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        <!-- end #main -->

        <!-- footer -->
        <?php 
		include("footer.php");
	?>
    </div>
    <!-- end #page -->
</body>

</html>