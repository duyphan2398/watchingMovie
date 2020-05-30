<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- CSS -->
    <link type="text/css" media="all" href="./css/autoptimize_9d0e530217008b35a0953a4ba9883915.css" rel="stylesheet" />
    <!-- Title-Logo -->
    <title>Phim Online</title>
    <link rel="icon" href="./css/images/tpd-b-24px.png" type="image/x-icon" />
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



        <!-- Content -->
        <main>
            <div id="main" class="full-width">
                <div class="wrap cf">
                    <div id="content" role="main">
                        <div class="loop-content switchable-view grid-medium" data-view="grid-medium">
                            <div class="nag cf">
                                <!--  Xử lý Load phim -->
                                <?php 
							require_once('connect.php');
							// Tìm tổng số dòng dữ liệu 
							$res= mysqli_query($connection, 'SELECT count(id_phim) AS total FROM phim');	
							$rows = mysqli_fetch_assoc($res);
       						$total_records = $rows['total'];
       						// Tìm litmit và current page
       						$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        					$limit = 9;
        					// Tính tổng số trang
        					$total_page = ceil($total_records / $limit);
        					// Giới hạn current_page trong khoảng 1 đến total_page
					        if ($current_page > $total_page){
					            $current_page = $total_page;
					        }
					        else if ($current_page < 1){
					            $current_page = 1;
					        }
					        // Tìm Start
					        $start = ($current_page - 1) * $limit;
					        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
					        $result = mysqli_query($connection, "SELECT * FROM phim LIMIT $start, $limit");
   							//Duyệt dữ liệu
    						while($row = $result ->fetch_assoc()){
						 ?>
                                <div style="position: relative" class="item cf item-video">
                                    <div class="thumb">
                                        <a class="clip-link" title="<?=$row["ten_phim"]?>"
                                            href="./watchingMovie.php?id_phim=<?=$row['id_phim']?>">
                                            <span class="clip">
                                                <img src=".<?=$row["anh_phim"]?>" alt="<?=$row["ten_phim"]?>" /><span
                                                    class="vertical-align"></span>

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
						?>
                                <!-- End Xử lý Load phim -->
                            </div>

                            <!-- Phân Trang -->
                            <div class="loop-nav pag-nav">
                                <div class="loop-nav-inner">
                                    <?php 
           						 // PHẦN HIỂN THỊ PHÂN TRANG
            					// nếu current_page > 1 và total_page > 1 mới hiển thị nút Quay Lại
            					if ($current_page > 1 && $total_page > 1){
               						echo '<a  class="prev" href="index.php?page='.($current_page-1).'">Quay Lại</a> | ';
           						}
            					else{
                					echo '<span class="prev">Quay Lại</span> | ';
          						}
            
            					// Lặp khoảng giữa
            					for ($i = 1; $i <= $total_page; $i++){
                					// Nếu là trang hiện tại thì hiển thị thẻ span
                					// ngược lại hiển thị thẻ a
                					if ($i == $current_page){
                    					echo '<span>'.$i.'</span> | ';
                					}
               						else{
                    					echo '<a  href="index.php?page='.$i.'">'.$i.'</a> | ';
                					}
            					}
            
            					// nếu current_page < $total_page và total_page > 1 mới hiển thị nút Xem Thêm
            					if ($current_page < $total_page && $total_page > 1){
                					echo '<a class="next" href="index.php?page='.($current_page+1).'">Xem Thêm</a> | ';
            					}
            					else{
                					echo '<span>Xem Thêm</span> | ';
            					}

          					?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>

        <!-- </footer>  -->
        <?php 
		include("footer.php");
	?>

    </div>
</body>

</html>