<?php 
include "../../koneksi.php";
$i = 0;
if(isset($_POST['tambah'])){

	// Ambil Data yang Dikirim dari Form
	$nama_menu = $_POST['nama_menu'];
	$kategori = $_POST['kategori'];
	$deskripsi = $_POST['deskripsi'];
	$harga =  $_POST['harga'];

	//membuat id
	 $get = mysqli_query($c,"SELECT * FROM tbl_kopi WHERE kategori = '$kategori'");
     while ($data = mysqli_fetch_array($get)){ 
     $i = $i + 1;
     }  
     $i = $i + 1; 
     if ($kategori == kopi){
     	$id = "K".$i;
     }else{
     	$id = "M".$i;
     }                            
	

	
	$nama_file = $_FILES['gambar']['name'];
	$ukuran_file = $_FILES['gambar']['size'];
	$tipe_file = $_FILES['gambar']['type'];
	$tmp_file = $_FILES['gambar']['tmp_name'];
	// Set path folder tempat menyimpan gambarnya
	$path = "../../images/".$nama_file;
	if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
	  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
	  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
	    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
	    // Proses upload
	    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	      // Jika gambar berhasil diupload, Lakukan :  
	      // Proses simpan ke Database
	      $query = "INSERT INTO tbl_kopi(id_menu,nama_menu,deskripsi,kategori,rating,harga,foto) VALUES('$id','$nama_menu','$deskripsi','$kategori',3,'$harga','$nama_file')";
	      $sql = mysqli_query($c, $query); // Eksekusi/ Jalankan query dari variabel $query
	      
	      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
	        // Jika Sukses, Lakukan :
	        header("location: ../menu.php"); // Redirectke halaman index.php
	      }else{
	        // Jika Gagal, Lakukan :
	        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	        echo "<br><a href='../menu.php'>Kembali Ke Form</a>";
	      }
	    }else{
	      // Jika gambar gagal diupload, Lakukan :
	      echo "Maaf, Gambar gagal untuk diupload.";
	      echo "<br><a href='../menu.php'>Kembali Ke Form</a>";
	    }
	  }else{
	    // Jika ukuran file lebih dari 1MB, lakukan :
	    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
	    echo "<br><a href='../menu.php'>Kembali Ke Form</a>";
	  }
	}else{
	  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
	  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
	  echo "<br><a href='../menu.php'>Kembali Ke Form</a>";
	}
	
}

 ?>