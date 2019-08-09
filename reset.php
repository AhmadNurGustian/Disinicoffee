<?php 

include 'koneksi.php';

mysqli_query($c,"UPDATE tbl_meja SET status='kosong'") or die(mysql_error());

 ?>