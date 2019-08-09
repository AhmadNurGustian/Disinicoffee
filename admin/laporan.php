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
                                <h4 class="title">Table Transaksi Hari Ini</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                            <table id="datatabel" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal</th>
                                    <th>Total</th>
                                    <th>Di Meja</th>
                                    
                                    <!--<th>Aksi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include "../koneksi.php";
                                $get = mysqli_query($c,"SELECT id_transaksi,tanggal,total,tbl_meja.nama_meja FROM tbl_transaksi JOIN tbl_meja ON tbl_transaksi.id_meja = tbl_meja.id_meja WHERE tbl_transaksi.status = 3");                             
                                $total = 10;
                                while ($data = mysqli_fetch_array($get)){ 
                                    ?>
                                <tr>
                                    <td><?php echo $data['id_transaksi'] ?></td>
                                    <td><?php echo $data['tanggal'] ?></td>
                                    <td><?php echo $data['nama_meja'] ?></td>
                                    <td><?php echo $data['total'] ?></td>

                                       
                                        
                                
                                <?php 
                                $total = $total + $data['total'];
                                }
                                 ?>  
                            </tbody>
                            <tfoot>
                                <tr>
                                <th colspan="3" style="text-align:right">Total:</th>
                                <th><?php echo $total ?></th>
                                 </tr>

                            </tfoot>

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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>





    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatabel').DataTable( {
            dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
</html>
