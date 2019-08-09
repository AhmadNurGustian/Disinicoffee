<?php 
include "../../koneksi.php";

//meembuat nama meja
$i = 0;
$ket = false;
$get = mysqli_query($c,"SELECT * FROM tbl_meja ORDER BY nama_meja" );
while ($data = mysqli_fetch_array($get)){ 
	$i = $i+1;
	$nama = "Meja ".$i;

	if ($data['nama_meja'] != $nama){
		$sql = "INSERT INTO tbl_meja (nama_meja) VALUES ('$nama')";
		mysqli_query($c,$sql);
		header("location: ../meja.php");
		$ket = TRUE; 
		break;
	} 
}
if ($ket == FALSE){
	$i = $i+1;
	$nama = "Meja ".$i;
	echo $nama;
$sql = "INSERT INTO tbl_meja (nama_meja) VALUES ('$nama')";
		mysqli_query($c,$sql);
header("location: ../meja.php"); 
}

 ?>