<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>ADMIN</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    
    <link rel="stylesheet" type="text/css" href="css/styleadmin.css">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="assets/datatables/datatables.min.css" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />



</head>
<body>

<div class="wrapper">
    <?php 
        include "side-bar.php";
       
     ?>

    <div class="main-panel">
        <?php include "navbar-header.php"; ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Menu</h4>
                            </div>
                            <div class="content">
                                <form action="aksi/tambah_menu.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Menu</label>
                                                <input type="text" name="nama_menu" class="form-control" placeholder="nama menu" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="form-control" name="kategori" required>
                                                      <option>---------</option>
                                                      <option value="kopi">Kopi/Minuman</option>
                                                      <option value="food">Makanan</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <TEXTAREA type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"  rows="5" required></TEXTAREA> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input type="text" class="form-control" name="harga" placeholder="Harga"  required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Foto</label>
                                                <input type="file" class="form-control" name="gambar" required>
                                              </div>
                                        </div>
                                        
                                    </div>

                                    

                                    <button name="tambah" type="submit" class="btn btn-info btn-fill pull-right">Tambah Menu</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Table Menu</h4>
                                <p class="category">“What do you want?" "Just coffee. Black - like my soul.” </p>
                            </div>
                            <div class="content table-responsive table-full-width">
                            <table id="datatabel" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                    <!--<th>Aksi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include "../koneksi.php";
                                $get = mysqli_query($c,"SELECT * FROM tbl_kopi");
                                while ($data = mysqli_fetch_array($get)){ 
                                    ?>
                                <tr>
                                    <td><?php echo $data['id_menu'] ?></td>
                                    <td><?php echo $data['nama_menu'] ?></td>
                                    <td><?php echo $data['kategori'] ?></td>
                                    <td><?php echo $data['harga'] ?></td>
                                    <td><?php if ($data['status'] == 1){
                                        echo "Aktif";
                                        }else{
                                            echo "Non-Aktif";
                                        } ?></td>
                                    <!--<td><img src="../images/<?php echo $data['foto']?>" class="img-responsive img-circle" ></td>
                                    -->
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#<?php echo $data["id_menu"]; ?>"><button type="button" class="btn btn-xs btn-primary" " title="Detail"><i class="pe-7s-angle-up-circle"></i></button></a>
                                        
                                        
                                </tr>
                                <?php 
                                }
                                 ?>  
                                
                                
                            </tbody>
                            
                        </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>

<?php
                $query = "SELECT * FROM tbl_kopi ";
                $result = mysqli_query($c, $query);
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                        ?>
                        
                <div class="modal fade" id="<?php echo $row["id_menu"]?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                            <div class="item">
                                                <img src="../images/<?php echo $row["foto"]?>" class="img-responsive" alt="">
                                            </div>
                                </div>
                                <form method="POST" action="aksi/edit_menu.php?id=<?php echo $row['id_menu']?>">
                                <div class="col-md-7 span-1 ">
                                    <h3><?php echo $row["id_menu"]?></h3>
                                    <br>
                                     <p class="quick">Nama : </p>
                                    <input type="text" name="nama_menu_modal" value="<?php echo $row["nama_menu"]?>" class="form-control">
                                    <p class="quick">Harga : </p>
                                    <div class="price_single">    
                                    <input type="text" name="harga_modal" value="<?php echo $row["harga"]?>" class="form-control">
                                      
                                    
                                     <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Deskripsi</h4>
                                    <TEXTAREA type="text" class="form-control" name="deskripsi" rows="15" ><?php echo $row["deskripsi"]?>
                                    </TEXTAREA> 
                                    <br>
                                     <div class="add-to">
                                           <button class="btn btn-success my-cart-btn" type="submit" >Edit</button>
                                       </form>
                                        <?php if ($row['status'] == 1){
                                           ?><a href="aksi/aktifmeja.php?id=<?php echo $row['id_menu']?>&ket=nonaktifkan" class="btn btn-success " >Non-Aktifkan </a>
                                           <?php
                                        }else {?>
                                        <a href="aksi/aktifmeja.php?id=<?php echo $row['id_menu']?>&ket='aktifkan'" class="btn btn-success " >Aktifkan </a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                    <?php
                    }

                 }
                ?>

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin   
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <script src="assets/datatables/datatables.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatabel').DataTable();
        } );
    </script>
</html>
