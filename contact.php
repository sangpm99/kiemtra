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
                <li><a href="#">CƠ QUAN</a></li>
                <li><a href="#">CHỨC VỤ</a></li>
            </ul>
        </div>
        <div class="contact-table">
            <table class="table">
                <thead>
                    <th class="table-STT">STT</th>
                    <th>Tên</th>
                    <th>Chức vụ</th>
                    <th>Email</th>
                    <th>SDT</th>
                    <th>Đơn vị</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-STT">1</td>
                        <td class="text-left">Nguyễn Thanh Tùng</td>
                        <td>Trưởng Khoa</td>
                        <td>nttung@wru.edu.vn</td>
                        <td>0985824682</td>
                        <td>P201</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div></div>
        <div class="clearfix"></div>
    </div>
<?php
    include("footer.php");
?>