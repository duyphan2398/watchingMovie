<?php 
	ob_start();
	session_start();
	include('connect.php');	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
	<title>Login | Phim Online</title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
			<div class="login-form">
				<div class="sign-in-htm">
					<form method="POST">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="username">
						</div>

						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="password">
						</div>

						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check"><span class="icon"></span> Keep me Signed in</label>
						</div>
						<div class="hr"></div>

						<div class="group">
							<input type="submit" class="button" value="Sign In" name="submit_dangnhap">
						</div>
					</form>
				</div>				
			</div>
			<!-- Xử lý đăng nhập -->
			<?php 
				if(isset($_POST['submit_dangnhap'])){
					$user = addslashes($_POST["username"]);
					$pass = addslashes($_POST["password"]);

					if (!$user || !$pass) {
						echo '<p style="color: #f90606b3">*Vui lòng nhập đầy đủ thông tin</p>';
						exit;   
					}					

					$query=mysqli_query($connection,"SELECT `username_admin`,`password_admin` FROM `admin` WHERE `username_admin` = '$user' ");
					if (mysqli_num_rows($query) == 0) {
						echo '<p style="color: #f90606b3">*Tài khoản không tồn tại</p>';
						exit;
					}
					$row = mysqli_fetch_array($query);
					if ($pass != $row['password_admin']) {
						echo '<p style="color: #f90606b3">*Mật khẩu không đúng</p>';
						exit;
					}
					setcookie("user",$user,time()+3600);
					$_SESSION['username_admin'] = $user;
					header('location: admin.php');
					ob_end_flush();
					die();	 
				}
			?>

		</div>
	</div>
</body>
</html>
