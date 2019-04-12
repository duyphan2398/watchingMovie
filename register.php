<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
	<title>Register| Phim Online</title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Register</label>
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
							<input id="pass" type="password" class="input" data-type="password" name="password1">
						</div>

						<div class="group">
							<label for="pass" class="label">Repeat Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="password2">
						</div>
						<div class="group">
							<label for="user" class="label">Full Name</label>
							<input id="user" type="text" class="input" name="fullname">
						</div>
						<div class="hr"></div>
						<div class="group">
							<input type="submit" class="button" value="Sign Up" name="submit_dangky">
						</div>
					</form>

						<!-- Xử lý đăng ký -->
					<?php
    						require_once("connect.php");
						    // Nếu không phải là sự kiện đăng ký thì không xử lý
						    if (!isset($_POST['submit_dangky'])){
						        die('');
						    }         	          
						    //Lấy dữ liệu từ file login.php
						    $username   = addslashes($_POST['username']);
						    $password1   = addslashes($_POST['password1']);
							$password2   = addslashes($_POST['password2']);
						    $fullname   = addslashes($_POST['fullname']);	          
						    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
						    if (!$username || !$password1 || !$password2 || !$fullname )
						    {
						        echo '<p style="color: #f90606b3">*Vui lòng nhập đầy đủ thông tin</p>';
						        exit;
						    }
						          
						    //Kiểm tra tên đăng nhập này đã có người dùng chưa
						    if (mysqli_num_rows(mysqli_query($connection,"SELECT `username_admin` FROM `admin` WHERE `username_admin`='$username'")) > 0){
						        echo '<p style="color: #f90606b3">*Tài khoản đã tồn tại</p>';
						        exit;
						    }

						    if(strlen($password1) < 6 or strlen($password2) > 32){
								echo '<p style="color: #f90606b3">*Nhập mật khẩu từ 6 đến 32 ký tự</p>';
								exit;
							}
						    
							if($password1 != $password2) {
								echo '<p style="color: #f90606b3">*Mật khẩu không trùng khớp</p>';
								exit;
							}
						          
						    //Lưu thông tin thành viên vào bảng
						    @$addmember = mysqli_query($connection,"
						        INSERT INTO admin (
						            username_admin,
						            password_admin,
						            ten_admin
						          
						        )
						        VALUE (
						            '{$username}',
						            '{$password1}',						           
						            '{$fullname}'
						            
						        )
						    ");
						                          
						    //Thông báo quá trình lưu
						    if ($addmember)
						        echo '<p style="color: #2cf515">+Đăng ký thành công</p> <br/> <a href="register.php" class="button">Tiếp tục</a> <a href="admin.php" class="button">Trở về</a>';
						    else
						        echo '<p style="color: #f90606b3">*Không thể đăng ký. Vui lòng kiểm tra lại</p>';
					?>
				</div>					
			</div>				
		</div>
	</div>
</body>
</html>


