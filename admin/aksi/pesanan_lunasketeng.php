<?php  
include "../../koneksi.php";
		$id = $_POST['id'];
		echo $id;
		$jum = (count($_POST['id_dtl']));
		for ($i = 0; $i <$jum;$i++){
			$id_dtl = $_POST['id_dtl'][$i]; 
			echo $id_dtl;
			echo " ";
			$sql = "UPDATE tbl_dtl_transaksi SET status_dtl = 1 WHERE id_dtl = $id_dtl";
			//$result =  mysqli_query($c,$sql) ;

		}

		//$sqlcek = "SELECT * FROM tbl_dtl_transaksi WHERE id_dtl = $id_dtl && (status_dtl= 0 || status_dtl= 1  ";
		//$result1 = mysqli_query($sqlcek,$c);

		
		
 ?>