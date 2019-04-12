<!DOCTYPE html>
<html lang="en-US">
<head>
	<!-- meta tag -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- CSS -->
	<link type="text/css" media="all" href="./css/autoptimize_9d0e530217008b35a0953a4ba9883915.css" rel="stylesheet" />
	<!-- Title-Logo -->
	<link rel="icon" href="./css/images/tpd-b-24px.png" type="image/x-icon" />	
	<link rel='stylesheet' id='dp-fonts-css'  href='./css/font/font.css' type='text/css' media='all' />
	<!-- Scipt -->
	<script type='text/javascript' src='./js/jquery.js'></script>
	<script type='text/javascript' src='./js/jquery-migrate.min.js'></script>
	<script type='text/javascript' src='./js/modernizr.min.js'></script>
	<script type='text/javascript' src='./js/jquery.plugins.min.js'></script>
	<script type='text/javascript' src='./js/jwplayer.js'></script>
	<script type='text/javascript' src='./js/jquery.fitvids.js'></script>
	<script type='text/javascript' src='./js/theme.js'></script>
</head>

<body class="boxed-wrap customize-support">
	<!-- Plugin FB -->
	<script>
  		window.fbAsyncInit = function() {
    		FB.init({
      		appId      : '2211355402286239',
      		xfbml      : true,
      		version    : 'v3.2'
    		});
    		FB.AppEvents.logPageView();
  		};

  		(function(d, s, id){
     		var js, fjs = d.getElementsByTagName(s)[0];
     		if (d.getElementById(id)) {return;}
     		js = d.createElement(s); js.id = id;
     		js.src = "https://connect.facebook.net/en_US/sdk.js";
     		fjs.parentNode.insertBefore(js, fjs);
   		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=2211355402286239&autoLogAppEvents=1"></script>
	

	<!-- Kết nối CSDL, load video -->
	<?php 
		require_once('connect.php');
		$id_phim = $_GET['id_phim'];
		$query = mysqli_query($connection,"SELECT * FROM phim WHERE id_phim='$id_phim'");
		$row = mysqli_fetch_assoc($query);
		$ten_phim = $row['ten_phim'];
		$id_theloai = $row['id_theloai'];
		switch ($id_theloai) {
		    case 1:
		        $theloai = 'Viễn tưởng';
		        break;
		    case 2:
		        $theloai = 'Kinh dị';
		        break;
		    case 3:
		        $theloai =	'Hài';
		        break;
		    case 4:
		        $theloai = 'Hành động';
		        break;
		    case 5:
		        $theloai = 'Tình cảm';
		        break;
		    default:
		        $theloai = 'Lịch sử';
		        break;
	   
		}
		echo "<title> $ten_phim | Phim Online</title>";
 	?>

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
			<!-- VIDEO -->
			<div id="main" class="full-width">
				<div itemprop="video" id="videos" >
					<div class="wrap cf">
						<div id="content" role="main">						
							<div id="video">
								<div class="playerv2" id="nc3dbfae715" data-pid="294">
									<div class="display">
										<iframe  width="100%" height="500" src=".<?=$row['url_phim']?>" frameborder="0"></iframe>	
									</div>
								</div>
    						</div>
    						<!-- end #video-->
							<!-- Nội dung phim -->
							<div id="details">
								<div id="extras">
									<div class="x-extras" style="font-size: 16px">Tên phim: 
										<h1 itemprop="name" class="title-phim">
											<a href="./watchingMovie.php?id_phim=<?=$row['id_phim']?>"><?=$row['ten_phim']?>
												
											</a>
										</h1>
									</div>
									<br/>
									<div class="x-extras" style="font-size: 16px">Thông tin: 
											<p><?=$row['thongtin_phim']?></p>
									</div>
									<br/>
									<div class="x-extras" style="font-size: 16px">Thể loại: 
										<p> 
											<?= 
												$theloai 
											?>
										</p>
									</div>
								</div>
							</div>						
						</div>
					</div>
				</div>
			</div>


			<!-- Nút like và share -->
			<div
			  class="fb-like"
			  data-share="true"
			  data-width="450"
			  data-show-faces="true"
			  style="background-color: #ffffff; width: 100%; padding-top: 10px">
			</div>
			<!-- Phần cmt -->
			<div class="fb-comments" data-href="http://localhost:8080/watchingMovie.php?id_phim=<?=$id_phim?>" data-numposts="4"  data-width="100%" style="background-color: #ffffff" >
			</div>
			
			
			<!-- Video gợi ý cùng thể loại -->
			<div id="main2" class="full-width"><div class="wrap cf" >
				<div id="content" role="main">					
						<div class="loop-content switchable-view grid-medium" data-view="grid-medium">
							<div class="nag cf">
								<?php 
									$id_theloai = $row['id_theloai'];
									// Tìm tổng số dòng dữ liệu 
									$res= mysqli_query($connection, "SELECT count(id_phim) AS total FROM phim WHERE id_theloai= '$id_theloai'");	
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
							        $result = mysqli_query($connection, "SELECT * FROM phim WHERE id_theloai= '$id_theloai' LIMIT $start, $limit");	
		   							//Duyệt dữ liệu
		    						while($rowss = $result ->fetch_assoc()){
		    							if ($rowss['id_phim'] != $row['id_phim']) {
    							
						 		?>
								<div style="position: relative"  class="item cf item-video">
									<div class="thumb">
										<a class="clip-link" title="<?=$rowss["ten_phim"]?>" href="./watchingMovie.php?id_phim=<?=$rowss['id_phim']?>">
											<span class="clip">
												<img src=".<?=$rowss["anh_phim"]?>" alt="<?=$rowss["ten_phim"]?>" /><span class="vertical-align"></span>
												
											</span>		
											<span class="overlay"></span>
										</a>
									</div>

									<div class="data">
										<h2 class="entry-title"><a href=".<?=$rowss["url_phim"]?>" rel="bookmark" title="<?=$rowss["ten_phim"]?>"><?=$rowss["ten_phim"]?></a></h2>
									</div>
								</div>
								<?php 
										}
									} 	
								?>
							</div>
							
							<!-- Phân trang -->
							<div class="loop-nav pag-nav">
								<div class="loop-nav-inner">
									<?php 
		           						// PHẦN HIỂN THỊ PHÂN TRANG
		            					// nếu current_page > 1 và total_page > 1 mới hiển thị nút Quay Lại
		            					if ($current_page > 1 && $total_page > 1){
		               						echo '<a  class="prev" href="theloai.php?page='.($current_page-1).'&id_theloai='.$id_theloai.'">Quay Lại</a> | ';
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
		                    				echo '<a  href="theloai.php?page='.$i.'&id_theloai='.$id_theloai.'">'.$i.'</a> | ';
		                					}
		            					}
		            
		            					// nếu current_page < $total_page và total_page > 1 mới hiển thị nút Xem Thêm
		            					if ($current_page < $total_page && $total_page > 1){
		                					echo '<a class="next" href="theloai.php?page='.($current_page+1).'&id_theloai='.$id_theloai.'">Xem Thêm</a> | ';
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
			</div>
		</main>	

		<!-- footer -->
		<?php 
			include("footer.php");
	 	?>
	
	</div>
</body>
</html>