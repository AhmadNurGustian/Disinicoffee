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


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />



    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/datatables/datatables.min.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
<?php 
include_once "../koneksi.php"; ?>

<div class="wrapper">
    <?php 
       include "side-bar.php" 
    ?>

    <div class="main-panel">
		<?php include "navbar-header.php"; ?>


        <div class="content">
            <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Time Line Pesanan</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                            <table class="table table-striped " style="width:100%">
                            
                            <tbody class="table-pending">
                                
                                
                                
                            </tbody>
                            
                        </table>

                            </div>
                        </div>
                    </div>
            <div class="container-fluid content-row">
                <div class="row">
                    <div class="outputmeja">
                      
                    </div>
                
          <div class="col-md-6">
            <a href="aksi/tambah_meja.php">
                        <div class="card text-center">
                            <div class="header">
                                <h4 class="title">TAMBAH MEJA</h4>
                                <br>
                            </div>
                            <hr>
                            <div class="content">
                               

                                <div class="footer">
                                   
                                    <hr>
                                    <div class="stats">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
            </a>
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
 $query = "SELECT * FROM tbl_meja ";
                $result = mysqli_query($c, $query);
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                        ?>
 <div class="modal fade" id="<?php echo $row['id_meja'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <form method="POST" action="aksi/edit_meja.php?id=<?php echo $row['id_meja']?>">
                                    <div class="form-group">
                                    <label>Nama Meja</label>
                                    <input class= "form-control" type="" name="nama_meja" value="<?php echo $row['nama_meja'] ?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="float: right;">Simpan Perubahan</button>
                                </form>
                                <div class="clearfix"> </div>
                        </div>
                            
                    </div>
                </div>
</div>

<div class="modal fade" id="hapus<?php echo $row['id_meja'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <h5 class="modal-title">Hapus Meja</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <p>Apakah anda yakin akan menghapus <?php echo $row['nama_meja'] ?></p>
                                  </div>
                                  <div class="modal-footer">
                                    <a href="aksi/hapus_meja.php?id=<?php echo $row['id_meja']?>"><button type="button" class="btn btn-danger">Hapus</button></a>
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
    <script src="assets/datatables/datatables.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatabel').DataTable();
        } );
    </script>

    

<script>
$(document).ready(function(){

 $(document).on("click",".lunas-all",function(){
    var id = $(this).data("id");
   $.ajax({

      type: 'POST',
      url: "aksi/pesanan_lunasall.php",
      data: {id:id},
      dataType: "text",
      success: function(resultData) { 
        if (resultData == "1"){
            load_unseen();
            $.notify({
                icon: 'pe-7s-user',
                message: "Berhasil Lunas"

            },{
                type: 'info',
                timer: 4000
            });        }
    }
        });

 });

 $(document).on("click",".lunas-keteng",function(){
    var id = $(this).data("id");
    var id_dtl = [];
    // Initializing array with Checkbox checked values
        $("input[name='lunas-check']:checked").each(function(){
            id_dtl.push(this.value);
        });
   $.ajax({

      type: 'POST',
      url: "aksi/pesanan_lunasketeng.php",
      data: {id:id,id_dtl:id_dtl},
      dataType: "text",
      success: function(resultData) { 
        if (resultData == "1"){
            alert(resultData);
        }
    }
        });

 });

 $(document).on("click",".btn-terima",function(){
    var id = $(this).data("id");
   $.ajax({

      type: 'POST',
      url: "aksi/pesanan_terima.php",
      data: {id:id},
      dataType: "text",
      success: function(resultData) { 
        
        if (resultData == "1"){
            load_unseen();
            $.notify({
                icon: 'pe-7s-user',
                message: "Berhasil di terima"

            },{
                type: 'info',
                timer: 4000
            });
        }
    }
        });

 });

$(document).on("click",".btn-batal",function(){
    var id = $(this).data("id");
   $.ajax({

      type: 'POST',
      url: "aksi/pesanan_hapus.php",
      data: {id:id},
      dataType: "text",
      success: function(resultData) { 
        if (resultData == "1"){
            load_unseen();
            $.notify({
                icon: 'pe-7s-user',
                message: "Berhasil di batalkan"

            },{
                type: 'info',
                timer: 4000
            });
        }
    }
        });

 });
var meja = "";
 function load_unseen(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    if (data.notif == "tambah"){
        $.notify({
                icon: 'pe-7s-user',
                message: "Ada Pesanan Baru"

            },{
                type: 'info',
                timer: 4000
            });
    }else if (data.notif == "batal"){
        $.notify({
                icon: 'pe-7s-user',
                message: "Pesanan Berhasil dibatalkan"

            },{
                type: 'info',
                timer: 4000
            });
    }else if (data.notif == "tambahl"){
        $.notify({
                icon: 'pe-7s-user',
                message: "Pesanan Berhasil diterima"

            },{
                type: 'info',
                timer: 4000
            });
    }
    $('.table-pending').html(data.pending);
    meja = data.datameja;
    $('.outputmeja').html(meja);


   }
  });
 }

 load_unseen();

 setInterval(function(){ 
  load_unseen();

 }, 5000);

 
});


</script>


</html>
