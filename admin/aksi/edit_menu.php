<?php 
include "../../koneksi.php";
$id =  $_GET['id'];
$nama = $_POST['nama_menu_modal'];
$harga = $_POST['harga_modal'];
$deskripsi = $_POST['deskripsi'];

$sql="UPDATE `tbl_kopi` SET `nama_menu` = '$nama', `harga` = '$harga' WHERE `tbl_kopi`.`id_menu` = '$id';";
mysqli_query($c,$sql) or die(mysqli_error($c));
 header("location: ../menu.php");

 	?>
