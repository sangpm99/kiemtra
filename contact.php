<?php
    include("header.php");
?>
    <h2 class="text-center">Tra cứu danh bạ điện thoại trường Đại Học Thủy Lợi</h2>
    <div class="contact-content">
        <div class="contact-filter">
            <form action="">
                <input type="search" placeholder="Nhập từ khóa...">
                <input type="submit" value="Tìm kiếm">
            </form>
            <p>Bộ lọc tìm kiếm</p>
            <ul class="filter">
                <li><a href="#">CÁN BỘ</a></li>
                <li><a href="#">CHỨC VỤ</a></li>
                <li><a href="#">ĐƠN VỊ</a></li>
            </ul>
        </div>
        <div class="contact-table">
            <table class="table">
                <thead>
                    <th>Tên</th>
                    <th>Chức vụ</th>
                    <th>Email</th>
                    <th>SDT</th>
                    <th>Đơn vị</th>
                </thead>
                <tbody>
                    <?php
                        // Truy vấn CSDL vào PHP
                        //Kết nối
                        $conn = mysqli_connect('localhost','root','','db_contact','3306');
                        if(!$conn){
                            die("Không thể kết nối");
                        }
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
                    </tr>
                    <?php
                            }
                        }
                        mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
        <div></div>
        <div class="clearfix"></div>
    </div>
<?php
    include("footer.php");
?>