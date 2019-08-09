<?php
session_start();
include ('koneksi.php');
$sql = "UPDATE tbl_meja SET status='kosong' WHERE id_meja=".$_SESSION["idmeja"]."";
mysqli_query($c,$sql);
session_destroy();
session_unset();
header('Location:index.php');
?>
