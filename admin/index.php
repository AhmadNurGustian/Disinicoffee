<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
 	<link href="assets/css/animate.min.css" rel="stylesheet"/>
<!--===============================================================================================-->
    <link href="assets/css/demo.css" rel="stylesheet" />
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script src="assets/js/jquery.3.2.1.min.js"></script>
</head>
<?php

session_start();  
if(isset($_SESSION["id_admin"]))
{
    header("Location: dashboard.php");
    exit;
} 
include '../koneksi.php';

if (isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = md5($_POST['password'],FALSE);
	echo $username;
	echo $password;
	$get = mysqli_query($c,"SELECT * FROM tbl_petugas WHERE id_user= '$username' AND pass_user='$password'") or die(mysql_error());
	if(mysqli_num_rows($get) == 1){
		session_start();
		$data = mysqli_fetch_array($get);
		$_SESSION['id_admin'] = $data['id_petugas'];
		$_SESSION['nama_admin'] = $data['nama_petugas'];
		header("Location:dashboard.php");
		exit();
	}else{
		?>
	<script type="text/javascript">
    	$(function(){
        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

		<?php
		
	}

}

 ?>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In Admin
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="#">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit" id="submit">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<script src="assets/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>
</html>