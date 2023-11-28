<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>
<header class="header">
    <div class="logo">
        <a href="index.php">Shoes Store</a>
    </div>
    <nav class="navbar">
        <ul class="navbar-list">
            <li class="navbar-list-item"><a href="index.php" class="navbar-item-link">Trang chủ</a></li>
            <li class="navbar-list-item"><a href="index.php?quanly=lienhe" class="navbar-item-link">Liên hệ</a></li>
            <li class="navbar-list-item"><a href="index.php?quanly=danhmuc" class="navbar-item-link">Danh mục</a></li>
            <li class="navbar-list-item"><a href="index.php?quanly=giohang" class="navbar-item-link">Giỏ hàng</a></li>
            <?php
            if (isset($_SESSION['dangky'])) {
            ?>
                <li class="navbar-list-item"><a href="index.php?quanly=thongtin" class="navbar-item-link">Tài khoản</a></li>
                <li class="navbar-list-item"><a href="index.php?dangxuat=1" class="navbar-item-link login">Đăng xuất</a></li>
            <?php
            } else {
            ?>
                <li class="navbar-list-item"><a href="index.php?quanly=dangnhap" class="navbar-item-link login">Đăng nhập</a></li>
            <?php
            }
            ?>

        </ul>
    </nav>
    <div class="search">
        <form action="index.php?quanly=timkiem" method="post">
            <input type="search" placeholder="Nhập khóa từ kiếm..." name="tukhoa" />
            <input type="hidden" name="timkiem" />
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </div>
</header>