<?php 
include "../../koneksi.php";

$id =  $_GET['id'];
$ket =	$_GET['ket']; 

if ($ket == "nonaktifkan") {
	$sql = "UPDATE tbl_kopi SET status = '0' WHERE id_menu = '$id'";
	mysqli_query($c,$sql) or die(mysqli_error($c));
	
}else{
	$sql = "UPDATE tbl_kopi SET status = '1' WHERE id_menu = '$id'";
	mysqli_query($c,$sql) or die(mysqli_error($c));
	
}
	
header("location: ../menu.php");

 ?>