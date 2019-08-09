
<!DOCTYPE html>
<html>
<head>
<title>@disiniCoffe</title>
<!-- for-mobile-apps -->
<link rel="shorcut icon" href="img/icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Botstrap -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-3.3.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
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
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<?php 
  include 'koneksi.php'; 
?>
  
</head>
<body>
<?php 
include 'header.php';
?>

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
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top">
  <div class="container ">
    <div class="spec ">
      <h3>Snake Games</h3>
      <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
      </div>
    </div>
<center>
        <canvas id="ruang" width="700" height="350"></canvas>


        <script type="text/javascript">
            $(document).ready(function() {

              // deklarasi
              var ruang = $("#ruang")[0];
              var ctx = ruang.getContext("2d");
              var lebar = $("#ruang").width();
              var tinggi = $("#ruang").height();

              var cw = 10;
              var tekan ;
              var makanan;
              var nilai;

              //membuat cell aray untuk membuat ular
              var array_ular; 

              function init() {
                tekan = "right"; //default direction
                create_snake();
                create_makanan(); //membuat makanan untuk ular
                //nilai game
                nilai = 0;

                if (typeof game_loop != "undefined") clearInterval(game_loop);
                game_loop = setInterval(paint, 60);
            }

            init();

              // membuat ular
              function create_snake() {
                // menetapkan jumlah panjang awal ular
                var length = 5; //panjang ular default
                array_ular = [];
                for (var i = length - 1; i >= 0; i--) {
                  //membuat ular horizontal mulai dari arah kiri
                  array_ular.push({ x: i, y: 0 });
              }
            }

              //membuat makanan untuk ular
              function create_makanan() {
                makanan = {
                  x: Math.round(Math.random() * (lebar - cw) / cw),
                  y: Math.round(Math.random() * (tinggi - cw) / cw)
              };
            }

              //pengaturan
              function paint() {
                // warna background
                ctx.fillStyle = "#2980b9";
                ctx.fillRect(0, 0, lebar, tinggi);    
                ctx.strokeStyle = "";
                ctx.strokeRect(0, 0, lebar, tinggi);

                //membuat pergerakan untuk ular
                var nx = array_ular[0].x;
                var ny = array_ular[0].y;
                if (tekan == "right") nx++;
                else if (tekan == "left") nx--;
                else if (tekan == "up") ny--;
                else if (tekan == "down") ny++;

                //memeriksa tabrakan
                if (
                  nx == -1 ||
                  nx == lebar / cw ||
                  ny == -1 ||
                  ny == tinggi / cw ||
                  cek_tabrakan(nx, ny, array_ular)
                  ){

                //restart game
            init();
            return;
            }

                //cek jika ular kena makanan/memakan makanan
                if(nx == makanan.x && ny == makanan.y){

                  var ekor = { x: nx, y: ny };
                  nilai++;
                  
                  //membuat makanan yang baru
                  create_makanan();
                  
              } else {
                  var ekor = array_ular.pop();
                  ekor.x = nx;
                  ekor.y = ny;
              }

              array_ular.unshift(ekor);

              for (var i = 0; i < array_ular.length; i++) {
                  var c = array_ular[i];
                  paint_cell(c.x, c.y);
              }

              paint_cell(makanan.x, makanan.y);    

                //membuat penilaian skor
                var nilai_text = "nilai: " + nilai;
                ctx.fillText(nilai_text, 5, tinggi - 5);
            }

            function paint_cell(x, y) {
                ctx.fillStyle = "#f1c40f";
                ctx.fillRect(x * cw, y * cw, cw, cw);
                ctx.strokeStyle = "#ecf0f1";
                ctx.strokeRect(x * cw, y * cw, cw, cw);
            }

            function cek_tabrakan(x, y, array) {
                for (var i = 0; i < array.length; i++) {
                  if (array[i].x == x && array[i].y == y) return true;
              }
              return false;
            }

              //kontrol ular dengan keyboard
              $(document).keydown(function(e) {
                var key = e.which;
                if (key == "37" && tekan != "right") tekan = "left";
                else if (key == "38" && tekan != "down") tekan = "up";
                else if (key == "39" && tekan != "left") tekan = "right";
                else if (key == "40" && tekan != "up") tekan = "down";
            });
            });

            </script>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>
              

<!--content
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
<div class="footer">
  <div class="container">
    <div class="col-md-3 footer-grid">
      <h3>About Us</h3>
      <p>Nam libero tempore, cum soluta nobis est eligendi 
        optio cumque nihil impedit quo minus id quod maxime 
        placeat facere possimus.</p>
    </div>
    <div class="col-md-3 footer-grid ">
      <h3>Menu</h3>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="kitchen.html">Kitchen</a></li>
        <li><a href="care.html">Personal Care</a></li>
        <li><a href="hold.html">Household</a></li>             
        <li><a href="codes.html">Short Codes</a></li> 
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
    <div class="col-md-3 footer-grid ">
      <h3>Customer Services</h3>
      <ul>
        <li><a href="shipping.html">Shipping</a></li>
        <li><a href="terms.html">Terms & Conditions</a></li>
        <li><a href="faqs.html">Faqs</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="offer.html">Online Shopping</a></li>            
         
      </ul>
    </div>
    <div class="col-md-3 footer-grid">
      <h3>My Account</h3>
      <ul>
        <li><a href="login.html">Login</a></li>
        <li><a href="register.html">Register</a></li>
        <li><a href="wishlist.html">Wishlist</a></li>
        
      </ul>
    </div>
    <div class="clearfix"></div>
      <div class="footer-bottom">
        <h2 ><a href="index.html"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h2>
        <p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
        <ul class="social-fo">
          <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
          <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
        </ul>
        <div class=" address">
          <div class="col-md-4 fo-grid1">
              <p><i class="fa fa-home" aria-hidden="true"></i>12K Street , 45 Building Road Canada.</p>
          </div>
          <div class="col-md-4 fo-grid1">
              <p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>  
          </div>
          <div class="col-md-4 fo-grid1">
            <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@example1.com</a></p>
          </div>
          <div class="clearfix"></div>
          
          </div>
      </div>
    <div class="copy-right">
      <p> &copy; 2016 Big store. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
    </div>
  </div>
</div>
<!-- //footer-->
        </body>
</html>