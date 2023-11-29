-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 28, 2023 lúc 04:54 PM
-- Phiên bản máy phục vụ: 8.0.17
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_ban_giay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_detail`
--

CREATE TABLE `tbl_cart_detail` (
  `id_cart_detail` int(11) NOT NULL,
  `code_cart` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_detail`
--

INSERT INTO `tbl_cart_detail` (`id_cart_detail`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(34, '4469', 12, 1),
(35, '4469', 13, 1),
(36, '6875', 12, 1),
(37, '6875', 13, 1),
(38, '3524', 12, 1),
(39, '3524', 13, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_khachhang` int(11) NOT NULL,
  `hovaten` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `taikhoan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(5, 'MLB', 1),
(6, 'Jordan', 2),
(7, 'Nike', 3),
(9, 'Adidas', 4),
(10, 'Dép', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_payment` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_payment`) VALUES
(32, 3, '6909', 0, '0'),
(34, 3, '3504', 0, '0'),
(35, 3, '4469', 0, '0'),
(36, 3, '6875', 1, 'tienmat'),
(37, 3, '3524', 1, 'Chuyển Khoảng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `masanpham` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `giasanpham` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomtat` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masanpham`, `giasanpham`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `id_danhmuc`, `trangthai`) VALUES
(5, 'Giày MLB Chunky Liner Mid NY ‘Green’ 3ASXLMB3N-50GNS', 'mlb', 4500000, 2, 'mlb-chunky-liner-mid-ny.png', 'Giày MLB Chunky Liner Mid NY ‘Green’ 3ASXLMB3N-50GNS', '', 5, 1),
(6, 'Giày Nike Air Force 1 ID ‘Gucci’ CT7875-994', 'nike1', 4900000, 1, 'nike-air-force-1-gucci.jpeg', 'Giày Nike Air Force 1 ID ‘Gucci’ CT7875-994', '', 7, 0),
(7, 'Giày Nike Air Max 1 ‘Timeless’ FJ5472-121', 'nikeair', 4500000, 1, 'Giay-Nike-Air-Max-1.png', 'Giày Nike Air Max 1 ‘Timeless’ FJ5472-121', '', 7, 1),
(8, 'Dép Louis Vuitton LV Trainer Mules ‘Blue’ 1AA6SC', 'louisvuitton', 27900000, 12, 'louis-vuitton-lv-trainer-mules-shoes.png', 'Dép Louis Vuitton LV Trainer Mules ‘Blue’ 1AA6SC', '', 10, 0),
(10, 'Dép Louis Vuitton Waterfront Mules ‘Macassar’ 1A3PSJ', 'louisvuitton', 19900000, 3, 'louis-vuitton.png', 'Dép Louis Vuitton Waterfront Mules ‘Macassar’ 1A3PSJ', '', 10, 1),
(11, 'Dép Adidas Yeezy Slide Pure GW1934', 'yeezy', 5900000, 1, 'adidas-yeezy-slide.png', 'Dép Adidas Yeezy Slide Pure GW1934', '', 10, 1),
(12, 'Giày Adidas Stan Smith Fairway M20324', 'stand', 2300000, 1, 'adidas-stan-smith.jpeg', 'Chắc chắn Adidas Stan Smith làm một đôi phải có trong tủ giày của bạn.\r\n\r\nBan đầu mục đích của mẫu giày này là để phục vụ các vận động viên quần vợt chuyên nghiệp những năm 1971. Và kể từ đó ', '', 9, 0),
(13, 'Giày Adidas Yeezy Boost 350 V2 ‘Tail Light’ FX9017', 'yeezy', 11000000, 2, 'yeezy_boost_350_v2__tail_light.jpeg', 'Yeezy Boost 350 V2 Tail Light là một bản phát hành được mong đợi khác như một thường lệ giữa sự collab của Kanye West và adidas. Một phối màu lần đầu tiên bị rò rỉ vào cuối năm ngoái, cuối cùng chúng ', '', 9, 1),
(14, 'Giày Adidas UltraBoost 22 ‘White Blue Tint’ GY6227', 'ultraboots', 4500000, 2, 'adidas-Ultra-Boost-22-White-Blue.png', 'Giày Adidas UltraBoost 22 ‘White Blue Tint’ GY6227', '', 9, 1),
(15, 'Giày MLB Chunky Liner Mid Denim ‘Navy’ 3ASXCDN3N-50NYD', 'mlb', 5500000, 1, 'giay-mlb-chunky-liner-mid-denim.png', 'Giày MLB Chunky Liner Mid Denim ‘Navy’ 3ASXCDN3N-50NYD', '', 5, 1),
(16, 'Giày MLB Chunky Liner New York Yankees Off White 3ASXCA12N-50WHS', 'mlb', 4320000, 1, 'giay-mlb-chunky-liner-new-york.png', 'Giày MLB Chunky Liner New York Yankees Off White 3ASXCA12N-50WHS', '', 5, 1),
(17, 'Giày Nike Air Force 1 Low G-Dragon Peaceminusone Para-Noise AQ3692-001', 'nike1', 17900000, 12, 'nike-air-force-1-low-g-dragon.jpg', 'G-Dragon x Nike Air Force 1 Low Para-Noise đã trở thành một trong những sự hợp tác AF1 độc đáo nhất trong những năm vừa qua. Được thực hiện với sự hợp tác của biểu tượng K-pop – người đã tham gia vào', '', 7, 0),
(18, 'Giày Nike Air Jordan 1 x Off-White ‘University Blue’ AQ0818-148', 'jordan', 55000000, 5, 'air-jordan-1-retro-high-off-white.jpg', 'Đôi Jordan 1 này mang một phối màu khá nhẹ nhàng tinh tế nhưng vẫn cực đẹp và thu hút theo một cách riêng. Trường đại học Carolina trước đây là sân chơi của Michael Jordan, nơi anh ấy rèn luyện kỹ năn', '', 6, 1),
(19, 'Giày Nike Dior x Air Jordan 1 High ‘Wolf Grey’ CN8607-002', 'jordan', 190000000, 3, 'giay-nike-air-jordan-1-dior.jpg', 'Sản phẩm đồng hồ mang thương hiệu MVW với nhiều mẫu Đôi Air Jordan 1 High cực đẹp này đã được giới thiệu từ lần ra mắt đầu tiên ở Miami trong lễ hội Art Basel. Các tab treo bằng kim loại sang trọ', '', 6, 0),
(20, 'Nike Air Force 1', 'nike1', 2900000, 6, 'nike-air-force-1.jpeg', 'Có thể thấy, Air Force 1 là dòng giày mang tính biểu tượng nhất của Nike với màu sắc đặc trưng đáng tự hào xuất hiện ở rất nhiều đôi giày Nike là màu trắng. Nike Air Force 1 07 White là một minh chứng ', '', 7, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `note` varchar(250) NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id_shipping`, `name`, `phone`, `adress`, `note`, `id_dangky`) VALUES
(1, '', '', '', '', 3),
(2, '', '', '', '', 3),
(3, 'nguyễn Minh Tâm', '05658421', '23/C', '', 1),
(4, 'Pham Anh Vinh', '', '', '', 3),
(5, 'Pham Anh Vinh', '', '', '', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  ADD PRIMARY KEY (`id_cart_detail`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  MODIFY `id_cart_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
