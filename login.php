<?php
    $conn = mysqli_connect('localhost','root','','db_contact');
    if(isset($_POST['txt-user'])){
        $User = $_POST['txt-user'];
        $Password = $_POST['txt-password'];

        $sql = "SELECT * FROM tbl_admin WHERE user='$User' AND password = '$Password' limit 1";

        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1){
            header("location:admin/index.php");
        }
        else{
            echo '<script>alert("Thông tin tài khoản mật khẩu không chính xác");</script>';
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <h3 class="mb-5">Đăng nhập</h3>
                <form method="POST" action="#">
                    <div class="form-outline mb-4">
                    <input type="text" id="typeTextX" name="txt-user" class="form-control form-control-lg" placeholder="Tài khoản"/>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" id="typePasswordX" name="txt-password" class="form-control form-control-lg" placeholder="Mật khẩu"/>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" name="btn-sbm" type="submit">Login</button>

                    <hr class="my-4">
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>