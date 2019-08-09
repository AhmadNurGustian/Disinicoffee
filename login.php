<?php 
session_start();
include 'koneksi.php';
$_SESSION["idmeja"] = $_POST['meja'];


      $sql = "SELECT * FROM tbl_meja WHERE id_meja=".$_POST['meja']."";
      $result = mysqli_query($c,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      
		
      if($count == 1) {
         $_SESSION['namameja'] = $row['nama_meja'];
         $sql = "UPDATE tbl_meja SET status='isi' WHERE id_meja=".$_SESSION["idmeja"]."";
         mysqli_query($c,$sql);
         header("location: plgn-menu.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }        

 ?>
