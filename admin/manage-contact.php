<?php
    include("./config/db.php");
    include("./header.php");
?>
    <div class="manage-admin-content">
        <div class="pd">
            <h1>Quản lý cán bộ</h1>
            <form action="">
            <button>Thêm cán bộ mới</button>
            </form>
            <div class="manage-contact">
                <table class="table">
                    <thead>
                        <th>Tên</th>
                        <th>Chức vụ</th>
                        <th>Email</th>
                        <th>SDT</th>
                        <th>Đơn vị</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                            // Định nghĩa và thực hiện truy vấn
                            $sql = "SELECT * FROM tbl_cadres";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                //Lặp để lấy từng bản ghi thông qua phương thức : mysqli_fetch_assoc
                                while($row = mysqli_fetch_assoc($result))
                                {
                        ?>
                        <tr>
                            <td class="text-left"><?php echo $row['name']?></td>
                            <td><?php echo $row['position']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['phone_num']?></td>
                            <td><?php echo $row['id_unit']?></td>
                            <td>
                                <div class="contact-action">
                                    <div class="contact-action-1">
                                        <a href="#">Sửa</a>
                                    </div>
                                    <div class="contact-action-2">
                                        <a href="#">Xóa</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                                }
                            }
                            mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
        </div>
    </div>
    <?php
        include("../footer.php");
    ?>