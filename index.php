<!DOCTYPE html>
<html>
<head>
	<title>Disini Cofee</title>
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

<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<?php
session_start();  
if(isset($_SESSION["idmeja"]))
{
    header("Location: plgn-menu.php");
    exit;
}
include 'koneksi.php';
?>
</head>
<style type="text/css">
	form {
    display: inline-block;
    text-align: center;
}
</style>
<body>
<?php 

 ?>
<div class="container ">
	<img src="images/logo_1.png" style="display: block;
    margin-left: auto;
    margin-right: auto;">
    <form method="POST" action="login.php">
    	<div  class="container">
<div class="row">
    <div class="col-xs-2 col-md-offset-5" style="margin-top: -150px;">
    	
            <select name="meja" class="form-control">
            	<?php  
            	$query = "SELECT * FROM tbl_meja WHERE status='kosong'";
				$result = mysqli_query($c, $query);
				if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
            	?>
            	<option value="<?php echo $row["id_meja"]; ?>"><?php echo $row["nama_meja"]; ?></option>
           
            <?php  
            		}
            	}
            ?>
             </select>
    </div>
    <input class="btn btn-success btn-md" type="submit" name="submit" value="Submit" style="margin-top: -150px;
    "/>
</div>
	
</form>
   
</div>
</body>
</html>