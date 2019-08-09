<?php 
include "../../koneksi.php";
$id =  $_POST['id'];

$sql="SELECT id_dtl,id_transaksi,jumlah,tbl_dtl_transaksi.id_menu,tbl_kopi.nama_menu,(harga * jumlah) as total FROM tbl_dtl_transaksi INNER JOIN tbl_kopi ON tbl_dtl_transaksi.id_menu = tbl_kopi.id_menu WHERE id_dtl = $id";
$result = mysqli_query($c,$sql);
$row = mysqli_fetch_array($result);
$temp = $row['total'];

$id_t = $row['id_transaksi'];

$sql="UPDATE tbl_transaksi SET total=total - $temp WHERE id_transaksi = $id_t";
$result = mysqli_query($c,$sql);

$sql="DELETE FROM tbl_dtl_transaksi WHERE id_dtl = $id";
$result = mysqli_query($c,$sql);
$_SESSION['jumlah_temp'] = $_SESSION['jumlah_temp']-1;

echo "1";
 ?>