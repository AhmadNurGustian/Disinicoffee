<?php	
	$localhost = 'localhost'; //alamat
	$nama = 'root';     // username di xampp
	$pass = '';         // pass di xampp
	$db = 'coffee (2)'; //database
	$c = new mysqli($localhost,$nama,$pass,$db);
	
	if ($c->connect_error)
   		die('Maaf koneksi gagal: '. $c->connect_error);

	define('url', "http://localhost/rmhmakan/");
	//define('DEBUG', true);
	define('DEBUG', false);
	if(DEBUG) {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
	} else {
    error_reporting(0);
    ini_set("display_errors", 0);
	}

	date_default_timezone_set('Asia/Jakarta');
?>