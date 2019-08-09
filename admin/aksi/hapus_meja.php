<?php 
include "../../koneksi.php";
$id =  $_GET['id'];

$sql="DELETE FROM tbl_meja WHERE `id_meja` = $id;";
mysqli_query($c,$sql) or die(mysqli_error($c));
 header("location: ../meja.php");

 	?>
