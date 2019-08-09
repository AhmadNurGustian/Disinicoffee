<?php
session_start();
include "../koneksi.php";



if(isset($_POST['view'])){
$query_cek = "SELECT id_dtl,tbl_dtl_transaksi.id_menu,jumlah,status_dtl,tbl_dtl_transaksi.id_transaksi,tbl_kopi.nama_menu,tbl_kopi.foto, X.nama_meja FROM `tbl_dtl_transaksi` INNER JOIN tbl_kopi ON tbl_dtl_transaksi.id_menu = tbl_kopi.id_menu INNER JOIN (SELECT id_transaksi,nama_meja FROM tbl_transaksi INNER JOIN tbl_meja ON tbl_transaksi.id_meja = tbl_meja.id_meja) AS X ON tbl_dtl_transaksi.id_transaksi = X.id_transaksi";
$result_cek = mysqli_query($c, $query_cek);
$jumlah = mysqli_num_rows($result_cek);

$query = "SELECT id_dtl,tbl_dtl_transaksi.id_menu,jumlah,status_dtl,tbl_dtl_transaksi.id_transaksi,tbl_kopi.nama_menu,tbl_kopi.foto, X.nama_meja FROM `tbl_dtl_transaksi` INNER JOIN tbl_kopi ON tbl_dtl_transaksi.id_menu = tbl_kopi.id_menu INNER JOIN (SELECT id_transaksi,nama_meja FROM tbl_transaksi INNER JOIN tbl_meja ON tbl_transaksi.id_meja = tbl_meja.id_meja) AS X ON tbl_dtl_transaksi.id_transaksi = X.id_transaksi WHERE status_dtl = 0";
$result = mysqli_query($c, $query);
$output = '';
$notif = "";
$jumlah = mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   $outputPending .=  '<tr>
                                    <td class="text-center" style="width: 30px;"><img width="30px" height="30px" src="../images/' .$row['foto']. '"></td>
                                    <td title="Nama Pesanan">' .$row['nama_menu'].'</td>
                                    <td title="Jumlah Pesanan">' . $row['jumlah'].'</td>
                                    <td title="Kirim Ke">' .$row['nama_meja'].'</td>
                                    
                                    <td>
                                         <button type="button" class="btn btn-xs btn-primary btn-terima" " data-id="'.$row['id_dtl'].'" title="Terima Pesanan"><i class="pe-7s-check"></i></button></td>

                                         <td>
                                            <button type="button" class="btn btn-xs btn-danger btn-batal" " data-id="'.$row['id_dtl'].'" title="Batalkan Pesanan"><i class="pe-7s-close"></i></button></a> 

                                        
                                        
                                </tr>'  
   ;

 }
}else{
     $_SESSION['jumlah_temp'] = $jumlah;
     $outputPending .= '<a class="text-bold text-italic">No Data Found</a>';
}

$query_cek1 = "SELECT id_dtl,tbl_dtl_transaksi.id_menu,jumlah,status_dtl,tbl_dtl_transaksi.id_transaksi,tbl_kopi.nama_menu,tbl_kopi.foto, X.nama_meja, tbl_meja.id_meja FROM `tbl_dtl_transaksi` INNER JOIN tbl_kopi ON tbl_dtl_transaksi.id_menu = tbl_kopi.id_menu INNER JOIN (SELECT id_transaksi,nama_meja FROM tbl_transaksi INNER JOIN tbl_meja ON tbl_transaksi.id_meja = tbl_meja.id_meja) AS X ON tbl_dtl_transaksi.id_transaksi = X.id_transaksi WHERE status_dtl = 1";
$result_cek1 = mysqli_query($c, $query_cek1);
$jumlah1 = mysqli_num_rows($result_cek1);


$lunas = "Lunas";
 $sql= "SELECT * FROM tbl_meja ORDER BY nama_meja";
$get = mysqli_query($c,$sql) or die (mysqli_error($c));
while ($data = mysqli_fetch_array($get))    
{
 if ($data['status'] == "kosong" ){
$kosong = '<i class="fa fa-circle text-danger"></i> Kosong' ;
}else{
$kosong = '<i class="fa fa-circle text-info"></i> Terisi ' ; } 

 $querytransaksi = "SELECT id_dtl,tbl_dtl_transaksi.id_menu,jumlah,status_dtl,tbl_dtl_transaksi.id_transaksi,tbl_kopi.nama_menu,tbl_kopi.foto, X.nama_meja, X.status ,(tbl_kopi.harga * jumlah) AS total FROM `tbl_dtl_transaksi` INNER JOIN tbl_kopi ON tbl_dtl_transaksi.id_menu = tbl_kopi.id_menu INNER JOIN (SELECT id_transaksi,nama_meja,tbl_transaksi.id_meja,tbl_transaksi.status FROM tbl_transaksi INNER JOIN tbl_meja ON tbl_transaksi.id_meja = tbl_meja.id_meja) AS X ON tbl_dtl_transaksi.id_transaksi = X.id_transaksi WHERE status_dtl <> 0 AND X.status != 3
      AND X.id_meja = '".$data['id_meja']."'";
$result = mysqli_query($c, $querytransaksi);
$outputtable = "";
while($row = mysqli_fetch_array($result))
 {
    $id_transaksi = $row['id_transaksi'];
    if ($row['status_dtl'] <> 3){
        $outputlunas = '<td>
                                       <div class="form-check">
                                        <input class="form-check-input" name="lunas-check" type="checkbox" value='.$row['id_dtl'].'></div></td>
                                        <td>
                                        <a href="#" <button type="button" class="btn btn-xs btn-danger" " title="Batalkan Pesanan"><i class="pe-7s-close"></i></button></a></td>' ;
    }else{
        $outputlunas = ' <td>
                       '.$lunas.'
                       </td> 
                       ' ;
    }
    $outputtable .= '<tr>
                                    <td class="text-center" style="width: 30px;"><img width="30px" height="30px" src="../images/'.$row['foto']. '"></td>
                                    <td title="Nama Pesanan">'.$row['nama_menu'].'</td>
                                    <td title="Jumlah Pesanan">'.$row['jumlah'].'</td>
                                    <td title="Total">Rp. '.$row['total'].' </td>
                                    '.$outputlunas.'
                                       
                                </tr>';
}
$output .=      '<div class="col-md-6">
                        <div class="card h-500">
                            <div class="header">
                                <h4 class="title">' .$data['nama_meja'].'</h4>
                               '.$kosong.'
                                <a href="#" style="float: right;margin-left: 2px;" data-toggle="modal" data-target="#hapus'.$data['id_meja'].'" ><button class="btn btn-primary btn-xs pe-7s-trash" ></button></a> 

                                <a href="#" style="float: right; " data-toggle="modal" data-target="#'.$data['id_meja'].'"><button class="btn btn-primary btn-xs pe-7s-edit"></button></a>
                                
                            </div>
                            <hr>
                            <div class="content">
                             <div class="content table-responsive table-full-width">
                            <table class="table table-striped " style="width:100%">
                            
                            <tbody>
                            '.$outputtable.'
                             
                            </tbody>
                            
                        </table>
                        
                        <a  style="float: right; margin-right: 10px"> <button type="button" class="btn btn-xs btn-success lunas-all" data-id="' .$id_transaksi.'" data-meja="'.$id_meja.'" title="Lunaskan Semua ">LUNAS SEMUA</button></a>
                        
                            </div>

                                <div class="footer">
                                   
                                    <hr>
                                    <div class="stats">
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>' ; 

 }
 if(isset($_SESSION['jumlah_temp'])){
     if($jumlah > $_SESSION['jumlah_temp']){
        $notif = tambah;
        $_SESSION['jumlah_temp'] = $jumlah;
     }

     }else if($jumlah < $_SESSION['jumlah_temp']){
        $notif = batal;
        $_SESSION['jumlah_temp'] = $jumlah;
     }else{
        $_SESSION['jumlah_temp'] = $jumlah;
    }



if(isset($_SESSION['jumlah1_temp'])){
if($jumlah < $_SESSION['jumlah1_temp']){
    $notif = tambah1;
    $_SESSION['jumlah1_temp'] = $jumlah1;
 }else{
    $_SESSION['jumlah1_temp'] = $jumlah1;
}

 }else{
    $_SESSION['jumlah1_temp'] = $jumlah1;
 
}


          
                                          
                          

$data = array(
    'notif' => $notif,
    'pending' => $outputPending,
    'datameja' => $output,

);

echo json_encode($data);

}




?>