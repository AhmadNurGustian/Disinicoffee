<?php 
include "../../koneksi.php";
$id =  $_GET['id'];
$nama = $_POST['nama_meja'];

$sql="UPDATE `tbl_meja` SET `nama_meja` = '$nama'WHERE `id_meja` = '$id';";
mysqli_query($c,$sql) or die(mysqli_error($c));
 header("location: ../meja.php");

 	?>
