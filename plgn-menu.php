
<!DOCTYPE html>
<html>
<head>
<title>Disini Cofee</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Botstrap -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Animation library for notifications   -->
    <link href="admin/assets/css/animate.min.css" rel="stylesheet"/>
<!-- js -->
   
<!-- //js -->
<!-- start-smoth-scrolling -->
<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--  Notifications Plugin    -->
    <script src="admin/assets/js/bootstrap-notify.js"></script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 

<?php 
	include 'koneksi.php'; 
?>
	
</head>
<body>


<?php

	include "header.php";

?>
<!--content-->
<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3>Special Menu</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
					  <li class="active"><a href="#tab1" data-toggle="tab">Kopi</a></li>
					  <li class=""><a href="#tab2" data-toggle="tab">Makanan</a></li> 
					</ul>
				</nav>

				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
				<?php
				$query = "SELECT * FROM tbl_kopi WHERE kategori='kopi' AND status=1";
				$result = mysqli_query($c, $query);
				if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     	?>
                     	<div class="col-md-3 pro-1">
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#<?php echo $row["id_menu"]; ?>" class="offer-img">
										<img src="images/<?php echo $row["foto"]; ?>" class="img-responsive" alt="">
										 
									</a>
									<div class="mid-1">
										
											<h6><a href="#" data-toggle="modal" data-target="#<?php echo $row["id_menu"]; ?>" ><?php echo $row["nama_menu"]; ?></a></h6>							
										
										<div class="mid-2">
											<p><em class="item_price">Rp. <?php echo $row["harga"];?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?php echo $row["id_menu"]; ?>" data-name="<?php echo $row["nama_menu"]; ?>" data-summary="summary 1" data-price="<?php echo $row["harga"];?>" data-quantity="1" data-image="images/<?php echo $row["foto"]; ?>">Add to Cart</button>
										</div>
										
									</div>
								</div>
							</div>

                    <?php
                    }

                 }
				?>
					

							<div class="clearfix"></div>
						 </div>
					</div>


					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
							
							<?php
				$query = "SELECT * FROM tbl_kopi WHERE kategori='food' AND status=1";
				$result = mysqli_query($c, $query);
				if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     	?>
                     	<div class="col-md-3 pro-1">
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#<?php echo $row["id_menu"]; ?>" class="offer-img">
										<img src="images/<?php echo $row["foto"]; ?>" class="img-responsive" alt="">
										 
									</a>
									<div class="mid-1">
										
											<h6><a href="#" data-toggle="modal" data-target="#<?php echo $row["id_menu"]; ?>" ><?php echo $row["nama_menu"]; ?></a></h6>							
										
										<div class="mid-2">
											<p><em class="item_price">Rp. <?php echo $row["harga"];?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
										   <button class="btn btn-danger  my-cart-b my-cart-btn" data-id="<?php echo $row["id_menu"]; ?>" data-name="<?php echo $row["nama_menu"]; ?>" data-summary="summary 1" data-price="<?php echo $row["harga"];?>" data-quantity="1" data-image="images/<?php echo $row["foto"]; ?>">Add to Cart</button>
										</div>
										
									</div>
								</div>
							</div>

                    <?php
                    }

                 }
				?>
					

							<div class="clearfix"></div>
						 </div>
					</div>
				
				</div>
			</div>
		
	</div>
	</div>
	</div>


<!--
<div class="content-mid">
	<div class="container">
		
		<div class="col-md-4 m-w3ls">
			<div class="col-md1 ">
				<a href="kitchen.html">
					<img src="images/co1.jpg" class="img-responsive img" alt="">
					<div class="big-sa">
						<h6>New Collections</h6>
						<h3>Season<span>ing </span></h3>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
					</div>
				</a>
			</div>
		</div>
		
		<div class="col-md-4 m-w3ls1">
			<div class="col-md ">
				<a href="hold.html">
					<img src="images/co.jpg" class="img-responsive img" alt="">
					<div class="big-sale">
						<div class="big-sale1">
							<h3>Big <span>Sale</span></h3>
							<p>It is a long established fact that a reader </p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls">
			<div class="col-md2 ">
				<a href="kitchen.html">
					<img src="images/co2.jpg" class="img-responsive img1" alt="">
					<div class="big-sale2">
						<h3>Cooking <span>Oil</span></h3>
						<p>It is a long established fact that a reader </p>		
					</div>
				</a>
			</div>
			<div class="col-md3 ">
				<a href="hold.html">
					<img src="images/co3.jpg" class="img-responsive img1" alt="">
					<div class="big-sale3">
						<h3>Vegeta<span>bles</span></h3>
						<p>It is a long established fact that a reader </p>
					</div>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
-->
<!--footer-->
<?php 
	include 'footer.php';
 ?>
<!-- //footer-->

<!-- smooth scrolling -->

	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
									
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
 <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      console.log($addTocartBtn);
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      currencySymbol: '$',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      numberOfDecimals: 2,
     
      clickOnAddToCart: function($addTocart){
      	console.log($addTocart);
        goToCartIcon($addTocart);

      },
      afterAddOnCart: function(products, totalPrice, totalQuantity) {
        console.log("afterAddOnCart", products, totalPrice, totalQuantity);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      

      /*checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
        checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
        $.each(products, function(){
          checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
        });
        alert(checkoutString)
        console.log("checking out", products, totalPrice, totalQuantity);
      },*/
      checkoutCart: function(products, totalPrice, totalQuantity) {
        $.ajax({
					url: "save.php",
					type: "POST",
					data: $('#formOrder').serialize(),
					dataType: "JSON",
					success: function(data){
            			$.notify({
			                icon: 'pe-7s-user',
			                message: "Pesanan berhasil di kirim"

			            },{
			                type: 'info',
			                timer: 4000
			            });
					}
				});
      }
     
    });

    $("#addNewProduct").click(function(event) {
      var currentElementNo = $(".row").children().length + 1;
      $(".row").append('<div class="col-md-3 text-center"><img src="images/img_empty.png" width="150px" height="150px"><br>product ' + currentElementNo + ' - <strong>$' + currentElementNo + '</strong><br><button class="btn btn-danger my-cart-btn" data-id="' + currentElementNo + '" data-name="product ' + currentElementNo + '" data-summary="summary ' + currentElementNo + '" data-price="' + currentElementNo + '" data-quantity="1" data-image="images/img_empty.png">Add to Cart</button><a href="#" class="btn btn-info">Details</a></div>')
    });
  });
  </script>
  <!-- product -->
  <?php
				$query = "SELECT * FROM tbl_kopi ";
				$result = mysqli_query($c, $query);
				if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     	?>
                     	
                <div class="modal fade" id="<?php echo $row["id_menu"]?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/<?php echo $row["foto"]?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3><?php echo $row["kategori"]?></h3>
									<p class="in-para"><?php echo $row["nama_menu"]?></p>
									<div class="price_single">
									  <span class="reducedfrom ">RP.<?php echo $row["harga"]?></span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"><?php echo $row["deskripsi"]?></p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?php echo $row["id_menu"]?>" data-name="<?php echo $row["nama_menu"]?>" data-summary="summary 1" data-price="<?php echo $row["harga"]?>" data-quantity="1" data-image="images/<?php echo $row["foto"]?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
                    <?php
                    }

                 }
				?>

			

				
			
</body>
</html>