-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 05, 2022 lúc 11:18 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `kimochi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_don_hang` int(11) NOT NULL,
  `ten_dang_nhap` varchar(20) NOT NULL,
  `ma_san_pham` varchar(20) NOT NULL,
  `so_luong` int(3) NOT NULL,
  `ghi_chu` text DEFAULT NULL,
  `thanh_toan` varchar(20) DEFAULT NULL,
  `dia_chi_giao_hang` text NOT NULL,
  `trang_thai_don_hang` varchar(20) DEFAULT 'chua_xac_nhan',
  `ho_ten` text NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `thoi_gian` datetime NOT NULL,
  `email` varchar(50) NOT NULL,
  `tongtien` int(9) NOT NULL,
  `size` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_san_pham` varchar(20) NOT NULL,
  `mo_ta` text NOT NULL,
  `img_link` varchar(200) NOT NULL,
  `gia` int(20) NOT NULL,
  `loai` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `mo_ta`, `img_link`, `gia`, `loai`) VALUES
('1', 'Polo vải cotton nhập', '- Mẫu Polo vải cotton nhập siêu đẹp - mặc đi chơi , đi dạo , đi hẹn hò thoải mái.\r\n- Số lượng chỉ có ít , full size từ 45kg > 95kg.', 150000, 'aothun'),
('2', 'Áo thun phong cách kimochi', 'Tay lỡ 𝐇.𝐐 style Nhật\r\n- Chất vải cotton co giãn, rất đẹp và sang trọng', 120000, 'aothun'),
('3', 'Mẫu tay lỡ style Nhật !', '- Mẫu áo tay lỡ style Nhật !\r\n ‼️𝐒𝐀𝐋𝐄 𝟑𝟓% \r\n- Chất vải cotton thoáng mát, co dãn thoải mái !\r\n- Phối đồ cực chuẩn. Mặc đi chơi, hẹn hò, cafe rất đẹp !', 120000, 'aothun'),
('4', 'Hoodie trend đơn giản', 'Mẫu hoodie chưa bao giờ hết hot\r\n- Giá cực mềm và freeship luôn cho combo 2 áo\r\n- Vải nỉ hàn cực kì chất lượng', 149000, 'thudong'),
('5', 'Thun dài tay kiểu dáng hàn quốc', '- Chất cotton mềm mịn, co dãn và rất êm\r\n- Freeship + giá mềm combo 2 áo', 140000, 'aothun'),
('6', 'Áo hodee trơn', '-Cái gì mà càng đơn giản càng đẹp phải không nào\r\nÁo hodee trơn siêu đẹp\r\n-Chất cotton mềm mịn, co dãn và rất êm\r\n-Freeship + giá mềm combo 2 áo', 159000, 'thudong'),
('7', 'Thun da cá cao cấp siêu mát', 'Thun da cá cao cấp siêu mát -đạp bảo làm bạn kimochi ngay từ lần mặc đầu tiên\r\n- Cảm giác mềm nịn như lụa, mát như da người yêu cũ của bạn', 160000, 'aothun'),
('8', 'Thun dài tay Simple Thing', '𝑇𝑎𝑦 𝑑𝑎̀𝑖 𝑆.𝑇, số lượng ít\r\nChất cotton mềm mịn, co dãn và rất êm\r\n#Freeship + giá mềm combo 2 áo', 149000, 'thudong'),
('9', 'Áo bóng đá U22 mới nhất', 'Cùng cổ vũ đội tuyển U22 VN vô địch seagame với Áo bóng đá U22 mới nhất', 120000, 'aothun'),
('10', 'Áo thun WANTED hit trend', 'ÁO PHÔNG NAM LOOSE LARVA WANTED\r\n- Dòng sản phẩm cao cấp\r\nÁo thun ngắn tay nam cổ tròn, dáng loose in graphic Larva Wanted\r\n- Chất liệu: 100% organic cotton\r\n\r\n- Size mẫu mặc: L\r\n- Số đo mẫu: 75 kg, 9', 169000, 'aothun'),
('11', 'Áo phông Hà lội (boo)', 'Áo chất chơi hết chỗ chê đê từ boo - bò sữa nha các bạn', 249000, 'aothun'),
('51', 'Tất VỊT CON Kuteee', 'Tất VỊT CON Kuteee', 30000, 'tat'),
('52', 'Tất nữ cao cổ', 'Tất nữ cao cổ', 30000, 'tat'),
('53', 'Tất vintage siêu đẹp', 'Tất vintage siêu đẹp', 50000, 'tat'),
('54', 'Combo tất siu kute (10 đôi)', 'Combo tất siu kute (10 đôi)', 240000, 'tat'),
('91', 'Bờm xinh xắn Dispney', 'Bờm xinh xắn Dispney', 30000, 'gift'),
('92', 'Kẹp tóc xinh xắn', 'Kẹp tóc xinh xắn quá là xinh nuôn', 50000, 'gift'),
('93', 'Bờm tuần lộc siêu kute', '', 45000, 'gift'),
('94', 'Kẹp tóc xinh xắn', '', 50000, 'gift');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `ten_dang_nhap` varchar(20) NOT NULL COMMENT 'khóa chính',
  `mat_khau` varchar(20) NOT NULL COMMENT 'dùng để đăng nhập',
  `ten` text NOT NULL,
  `dia_chi` text NOT NULL,
  `so_dien_thoai` varchar(20) NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`ten_dang_nhap`, `mat_khau`, `ten`, `dia_chi`, `so_dien_thoai`, `email`) VALUES
('admin', 'admin', 'Quản Trị Viên', '175 Yen Xa', '0848781998', 'linhku59@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_don_hang`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_san_pham`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`ten_dang_nhap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
