<!-- Handle log-in -->
<?php
session_start();
include('./admincp/config/connect.php');
if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['taikhoan'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM tbl_dangky ,tbl_admin WHERE tbl_dangky.taikhoan='" . $taikhoan . "' AND tbl_dangky.matkhau='" . $matkhau . "'  LIMIT 1";
    $row = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['taikhoan'];
        $_SESSION['email'] = $row_data['email'];
        $_SESSION['id_khachhang'] = $row_data['id_khachhang'];
        header("Location:./index.php");
    } elseif ($taikhoan == 'admin') {
        header("Location:./admincp/login.php");
    } else {
        $message = "Tài khoản mật khẩu không đúng";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>

<section class="login-in">
    <h1>Đăng nhập</h1>
    <form method="post" action="" class="login-form">
        <div>
            <label>Tài khoản</label>
            <input type="text" name="taikhoan" placeholder="email@example.com" />
        </div>
        <div>
            <label>Mật khẩu</label>
            <input type="password" name="password" placeholder="password" />
        </div>
        <div>
            <input type="submit" class="login" name="dangnhap" value="Đăng nhập" />
        </div>
        <p>Đăng ký nếu bạn chưa có tài khoản?
            <a href="index.php?quanly=dangky">Đăng ký</a>
        </p>
    </form>

</section>