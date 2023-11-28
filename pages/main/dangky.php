<!-- Handle register -->
<?php
session_start();
include("./admincp/config/connect.php");
if (isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['hovaten'];
    $taikhoan = $_POST['taikhoan'];
    $matkhau = md5($_POST['matkhau']);
    $rematkhau =  md5($_POST['rematkhau']);
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];
    if (!$tenkhachhang || !$taikhoan || !$matkhau || !$rematkhau || !$email || !$dienthoai || !$diachi) {
        echo "Vui lòng nhập đầy đủ thông tin.";
    } elseif ($matkhau != $rematkhau) {
        echo "mat khau chua trung";
    } else {


        $sql_dangky = "INSERT INTO tbl_dangky(hovaten,taikhoan,matkhau,sodienthoai,email,diachi) VALUE('" . $tenkhachhang . "','" . $taikhoan . "','" . $matkhau . "','" . $dienthoai . "','" . $email . "','" . $diachi . "')";
        $query_dangky = mysqli_query($connect, $sql_dangky);
        if ($query_dangky) {
            echo '<script>alert("Đăng ký thành công")</script>';
            $_SESSION['dangky'] = $taikhoan;
            $_SESSION['email'] = $email;
            $_SESSION['id_khachhang'] = mysqli_insert_id($connect);
            header("Location:./index.php?quanly=dangnhap");
        }
    }
}

?>

<section class="register">
    <h1>Đăng ký tài khoản</h1>
    <form method="post" action="" class="register-form">
        <div>
            <label>Họ và tên</label>
            <input type="text" name="hovaten" placeholder="VD: Nguyễn Văn A" />
        </div>
        <div>
            <label>Tài khoản</label>
            <input type="text" name="taikhoan" placeholder="VD: vana123" />
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" placeholder="email@example.com" />
        </div>
        <div>
            <label>Số điện thoại</label>
            <input type="text" name="dienthoai" placeholder="VD: 0987654321" />
        </div>
        <div>
            <label>Địa chỉ</label>
            <input type="text" name="diachi" placeholder="VD: Hà Nội" />
        </div>
        <div>
            <label>Mật khẩu</label>
            <input type="password" name="matkhau" placeholder="Mật khẩu" />
        </div>
        <div>
            <label>Nhập lại mật khẩu</label>
            <input type="password" name="rematkhau" placeholder="Nhập lại mật khẩu" />
        </div>
        <div>
            <input type="submit" class="register" name="dangky" value="Đăng ký" />
        </div>
        <p>Đăng nhập nếu bạn đã có tài khoản?
            <a href="index.php?quanly=dangnhap">Đăng nhập</a>
        </p>
    </form>
</section>
