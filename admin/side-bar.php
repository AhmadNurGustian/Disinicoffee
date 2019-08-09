<?php session_start(); 
$page = basename($_SERVER['PHP_SELF']);
?>
<div class="sidebar" data-color="brown" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    <i></i>
                    Disini Coffee 
                </a>
            </div>

            <ul class="nav">
                <li class="<?php if ($page == 'dashboard.php'){echo 'active';} ?>"> 
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
              
                <li class="<?php if ($page == 'menu.php'){echo 'active';} ?>">
                    <a href="menu.php">
                        <i class="pe-7s-coffee"></i>
                        <p>Menu</p>
                    </a>
                </li>
                <li class="<?php if ($page == 'meja.php'){echo 'active';} ?>">
                    <a href="meja.php">
                        <i class="pe-7s-box1"></i>
                        <p>Pesanan</p>
                    </a>
                </li>

                 <li class="<?php if ($page == 'laporan.php'){echo 'active';} ?>">
                    <a href="laporan.php">
                        <i class="pe-7s-server"></i>
                        <p>Laporan  Transaksi</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>