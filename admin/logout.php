<?php
session_start();
mysqli_query($c,$sql);
session_destroy();
session_unset();
header('Location:index.php');
?>
