<?php
    include("config/db.php");
    
    $id_del = $_GET['id'];
    $sql = "DELETE FROM tbl_admin WHERE id=$id_del";
    echo $sql;
    $result = mysqli_query($conn,$sql);

    if($result == true)
    {
        header('location:http://localhost/kiemtra/admin/manage-admin.php');
    }
    else
    {
        echo '<h1>Error</h1>';
    }
?>