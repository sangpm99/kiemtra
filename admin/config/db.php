<?php
    // Truy vấn CSDL vào PHP
    //Kết nối
    //Dinh nghia
    define('SITEURL','http://localhost/kiemtra');
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('PORT','3306');
    define('DB','db_contact');
    $conn = mysqli_connect(HOST,USER,PASS,DB,PORT);
    if(!$conn){
        die("Không thể kết nối");
    }
?>