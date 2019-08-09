<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php session_start(); 
$page = basename($_SERVER['PHP_SELF']);
?>
<div class="header">

		<div class="container">
			
			<div class="logo ">
			<a href="index.php"><img src="images/logo.png" alt="" class="img-responsive"></a>
		</div>
			
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class="<?php if ($page == 'plgn-menu.php'){echo 'active';} ?>"><a href="plgn-menu.php" class="hyper "><span>Home</span></a></li>	
							
							<li  class="<?php if ($page == 'minigames.php'){echo 'active';} ?>" ><a href="minigames.php" class="hyper "><span>Mini Games</span></a></li>
								
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Coffee<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi2">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Espresso</a></li>
												
										
											</ul>
										
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Flat White</a></li>
												
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Latte</a></li>
										
											</ul>
										</div>
										
									</div>	
								</ul>
							</li>
							
							<li  class="<?php if ($page == 'contact.php'){echo 'active';} ?>" ><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
							<li class="dropdown">
						  <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>
						  	<?php echo $_SESSION['namameja']; ?><b class="caret"></b></span></a>
						  <div class="dropdown-menu">
						    <a class="dropdown-item" href="logout.php">Logout</a>
						  </div>
						</li>
						</ul>

					</div>
					</nav>
					 <div class="cart" >

						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>

</body>
</html>
