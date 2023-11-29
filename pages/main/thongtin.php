<?php
if (isset($_SESSION['dangky'])) {
    $id = $_SESSION['dangky'];
    $sql_thongtin = "SELECT * FROM tbl_dangky WHERE taikhoan='$id' LIMIT 1";
    $query_thongtin = mysqli_query($connect, $sql_thongtin);

    while ($row = mysqli_fetch_array($query_thongtin)) {
?>
        <div class="container-info">
            <div class="container-info-left">
                <ul class="card-list">
                    <li class="card-item">
                        <div class="card-item-img">
                            <img src="https://cdn-icons-png.flaticon.com/512/3541/3541871.png"></img>
                        </div>
                        <p class="card-item-name">
                            <?php
                            echo '' . '<span style="color:#fff">' . $row['taikhoan'] . '</span>';
                            ?></p>
                        <p class="card-item-duty"><?php
                                                    echo '' . '<span >' . $row['hovaten'] . '</span>';
                                                    ?></p>
                        <div class="social-media-list">
                            <a href="" class="social-media-item"><i class="fab fa-facebook facebook-icon"></i></a>
                            <a href="" class="social-media-item"><i class="fab fa-youtube"></i></a>
                            <a href="" class="social-media-item"><i class="fab fa-instagram"></i></a>
                            <a href="" class="social-media-item"><i class="fab fa-github"></i></a>
                        </div>
                </ul>
            </div>
            <div class="wrapper-info">
                <div class="info-header">
                    <h3>Hồ sơ của bạn</h3>
                    <p>Quản lý thông tin cá nhân của bạn</p>
                </div>
                <div class="infor-main">
                    <div class="infor-main-text">
                        <label for="">Tên Đăng Nhập: </label>
                        <span class="infor-text-sql"><?php echo $row['hovaten']  ?></span>
                    </div>
                    <div class="infor-main-text">
                        <label for="">Email: </label>
                        <span class="infor-text-sql"><?php echo $row['email']  ?></span>
                    </div>
                    <div class="infor-main-text">
                        <label for="">Địa Chỉ: </label>
                        <span class="infor-text-sql"><?php echo $row['diachi']  ?></span>
                    </div>
                    <div class="infor-main-text">
                        <label for="">Số Điện Thoại: </label>
                        <span class="infor-text-sql"><?php echo $row['sodienthoai']  ?></span>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}

?>