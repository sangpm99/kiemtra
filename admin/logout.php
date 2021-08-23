<?php   
session_start();
session_destroy();
header("location:http://localhost/kiemtra/index.php");
exit();
?>