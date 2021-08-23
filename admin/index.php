<?php
    include("./config/db.php");
    include("header.php");
?>
    <div class="pd">
        <h1>Dashboard</h1>
        <p>Login Successfully</p>
    </div>
    <div class="view">
        <div>
            <div class="view-mini">
                <p>
                    <?php
                        //B2 Thuc hien truy van
                        $sql1 = "SELECT * FROM tbl_cadres";
                        $result = mysqli_query($conn,$sql1);
                        //B3 Xu ly ket qua lay ra so ban ghi
                        $count_user = mysqli_num_rows($result);
                        echo $count_user;
                    ?>
                </p>
                <br>
                <br>
                <p>CÁN BỘ</p>
            </div>
        </div>
        <div>
            <div class="view-mini">
                <p>
                    <?php
                        //B2 Thuc hien truy van
                        $sql1 = "SELECT * FROM tbl_admin";
                        $result = mysqli_query($conn,$sql1);
                        //B3 Xu ly ket qua lay ra so ban ghi
                        $count_user = mysqli_num_rows($result);
                        echo $count_user;
                        mysqli_close($conn);
                    ?>
                </p>
                <br>
                <br>
                <p>ADMIN</p>
            </div>
        </div>
    </div>
<?php
    include("../footer.php");
?>