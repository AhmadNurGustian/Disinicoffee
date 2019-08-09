<?php 
include "../../koneksi.php";
$id =  $_POST['id'];

$sql="UPDATE tbl_dtl_transaksi SET status_dtl = 1 WHERE id_dtl	 = $id";
mysqli_query($c,$sql) or die(mysqli_error($c));
	

echo "1";
 ?>