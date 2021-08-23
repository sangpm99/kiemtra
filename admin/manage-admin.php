<?php
    include("./config/db.php");
    include("./header.php");
?>
    <div class="manage-admin-content">
        <div class="pd">
            <h1>Quản lý người dùng</h1>
            <div class="contact-action-3">
                <a href="../admin/add-admin.php">Thêm người dùng mới</a>
            </div>
            <table class="table">
                <thead>
                    <th>User</th>
                    <th>Password</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        // Định nghĩa và thực hiện truy vấn
                        $sql = "SELECT * FROM tbl_admin";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            //Lặp để lấy từng bản ghi thông qua phương thức : mysqli_fetch_assoc
                            while($row = mysqli_fetch_assoc($result))
                            {
                    ?>
                    <tr>
                        <td class="text-left"><?php echo $row['user']?></td>
                        <td><?php echo $row['password']?></td>
                        <td>
                                <div class="contact-action">
                                    <div class="contact-action-1">
                                        <a href="change-admin.php?id=<?php echo $row['id'];?>">Sửa</a>
                                    </div>
                                    <div class="contact-action-2">
                                        <a href="delete-admin.php?id=<?php echo $row['id'];?>">Xóa</a>
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