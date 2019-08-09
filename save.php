<?php 
	session_start();
	include 'koneksi.php';
	$id_meja=$_SESSION['idmeja'];

	if (isset($_SESSION['last_id'])){
	$total = $_POST['total'] + $_SESSION['total'];
	$query = "UPDATE tbl_transaksi SET total = $total WHERE id_transaksi = '".$_SESSION['last_id']."'";
	$update=mysqli_query($c,$query) or die (mysqli_error()) ;
	
	}else{

	$total = $_POST['total'];
	$_SESSION['total'] = $total;
	$query= "INSERT INTO tbl_transaksi (total,status,id_meja) VALUES ('$total','0','$id_meja')";
	$insert=mysqli_query($c,$query) ;

	$last_id = mysqli_insert_id($c);

	$_SESSION['last_id'] = $last_id;
	
	}
	echo $query ;
	echo "<br>";
	$jumlah = count($_POST["id_menu"]);

	$lid = $_SESSION['last_id'];
	for ($i=0; $i < $jumlah ; $i++){
		$id= $_POST["id_menu"][$i];
		$qty= $_POST["qty"][$i];

		$query1= "INSERT INTO tbl_dtl_transaksi (id_menu,jumlah,status_dtl,id_transaksi) 
					VALUES ('$id',$qty,0,$lid)";
		echo $query1;
		$insert1=mysqli_query($c,$query1);
		
	}
	header('Content-Type: application/json');
	echo json_encode("success");
 ?>
