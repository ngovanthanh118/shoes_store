<div class="main-content">
    <?php
    if (isset($_GET['quanly'])) {
        $bientam = $_GET['quanly'];
    } else {
        $bientam = "";
    }
    if ($bientam == "lienhe") {
        include("./pages/main/lienhe.php");
    } elseif ($bientam == "danhmuc") {
        include("./pages/main/danhmuc.php");
    } elseif ($bientam == "giohang") {
        include("./pages/main/giohang.php");
    } elseif ($bientam == "dangnhap") {
        include("./pages/main/dangnhap.php");
    } elseif ($bientam == "dangky") {
        include("./pages/main/dangky.php");
    } elseif ($bientam == "thongtin") {
        include("./pages/main/thongtin.php");
    } elseif ($bientam == "timkiem") {
        include("./pages/main/timkiem.php");
    } else {
        /* Sildes show */
    ?>

        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="https://1sneaker.vn/wp-content/uploads/2021/09/Jordan-1-dior-rep-1-1-3_result.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="https://shopgiayreplica.com/wp-content/uploads/2023/08/JORDAN-1-RETRO-HIGH-OG-SP-UNION-LA-BEPHIES-BEAUTY-SUPPLY-THE-SUMMER-OF-%E2%80%9896.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://shopgiayreplica.com/wp-content/uploads/2020/03/giay-nike-air-jordan-1-dior-replica-800x600.jpg" style="width:100%">
            </div>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 5000);
            }
        </script>
    <?php

    }
    ?>
</div>