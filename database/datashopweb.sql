-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2020 at 07:32 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopdienthoai`
--

-- --------------------------------------------------------

--
-- Table structure for table `ctdonhang`
--

DROP TABLE IF EXISTS `ctdonhang`;
CREATE TABLE IF NOT EXISTS `ctdonhang` (
  `maCTDH` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `maHD` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `tenSP` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `hinhthucthanhtoan` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`maCTDH`),
  KEY `maHD` (`maHD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `maDM` int(11) NOT NULL AUTO_INCREMENT,
  `tenDM` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`maDM`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`maDM`, `tenDM`) VALUES
(1, 'iphone'),
(2, 'samsung'),
(3, 'xiaomi'),
(4, 'phukien');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `maHD` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `maKH` int(11) NOT NULL,
  `tenKH` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `tinhtrangDH` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ngayDatHang` date NOT NULL,
  PRIMARY KEY (`maHD`),
  KEY `maKH` (`maKH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `maKH` int(11) NOT NULL AUTO_INCREMENT,
  `tenKH` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaySinhKH` date NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `diachi` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`maKH`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `tenKH`, `email`, `ngaySinhKH`, `gioitinh`, `sodienthoai`, `diachi`) VALUES
(1, 'nguyenthanhtien1234', 'etdgdgdgdf@gmail.com', '2020-12-02', 'nam', 9211156, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

DROP TABLE IF EXISTS `lienhe`;
CREATE TABLE IF NOT EXISTS `lienhe` (
  `hoten` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `noidung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhasx`
--

DROP TABLE IF EXISTS `nhasx`;
CREATE TABLE IF NOT EXISTS `nhasx` (
  `maNSX` int(11) NOT NULL,
  `tenNSX` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`maNSX`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nhasx`
--

INSERT INTO `nhasx` (`maNSX`, `tenNSX`) VALUES
(1, 'samsung');

-- --------------------------------------------------------

--
-- Table structure for table `quantri`
--

DROP TABLE IF EXISTS `quantri`;
CREATE TABLE IF NOT EXISTS `quantri` (
  `maQT` int(11) NOT NULL AUTO_INCREMENT,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `tenquantrivien` varchar(50) NOT NULL,
  PRIMARY KEY (`maQT`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quantri`
--

INSERT INTO `quantri` (`maQT`, `tendangnhap`, `matkhau`, `tenquantrivien`) VALUES
(1, 'admin', '698d51a19d8a121ce581499d7b701668', 'Nguyễn Thành Tiến'),
(2, 'admin2', '698d51a19d8a121ce581499d7b701668', 'Nguyễn Phước Hảo'),
(3, 'admin3', '698d51a19d8a121ce581499d7b701668', 'Nguyễn Thành Tiến'),
(4, 'toan', '202cb962ac59075b964b07152d234b70', 'Nguyễn Thành Tiến'),
(5, 'itiititi', '202cb962ac59075b964b07152d234b70', 'Nguyễn Thành Tiến'),
(6, 'toan123', '202cb962ac59075b964b07152d234b70', 'Nguyễn Thành Tiến'),
(7, 'toan123123', '202cb962ac59075b964b07152d234b70', 'Nguyễn Thành Tiến'),
(8, 'toan123aa', '202cb962ac59075b964b07152d234b70', 'Nguyễn Thành Tiến'),
(9, 'toan123aaaa', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thành Tiến'),
(10, 'aaaaa', '202cb962ac59075b964b07152d234b70', 'Nguyễn Phước Hảo');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `maSP` int(100) NOT NULL AUTO_INCREMENT,
  `tenSP` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `mauSP` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `chitietSP` text COLLATE utf8_vietnamese_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(50) NOT NULL,
  `khuyenmai` int(11) NOT NULL,
  `trangthaiSP` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `maDM` int(11) NOT NULL,
  PRIMARY KEY (`maSP`),
  KEY `maDM` (`maDM`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `tenSP`, `hinhanh`, `mauSP`, `chitietSP`, `soluong`, `gia`, `khuyenmai`, `trangthaiSP`, `maDM`) VALUES
(2, 'samsung note 10', 'samsung-galaxy-note-10-do-37-600x600min.jpg', 'đỏ', '64gb', 10, 20000000, 2, '       còn hàng', 2),
(3, 'samsung note 10 plus', 'samsung-galaxy-note-10-plus-blue-600x600min.jpg', 'xanh', '64gb', 10, 20000000, 2, ' còn hàng', 2),
(4, 'samsung note 10 plus', 'samsung-galaxy-note-10-plus-blue-600x600min.jpg', 'xanh', '512gb', 10, 20000000, 2, ' còn hàng', 2),
(8, 'samsung note 10 plus', 'samsung-galaxy-note-10-silver-600x600.jpg', 'trắng ', '1111111111111111gb', 10, 20000000, 2, 'còn hàng', 2),
(12, 'xiaomi - note 10', 'xiaomi-mi-note-10-white-600x600min.jpg', 'trắng ', '512GB', 100, 20000000, 2, ' còn hàng', 3),
(14, 'iphone 11', 'iphone-11-red-600x60064gbmin.jpg', 'đỏ', '128GB\r\nSiêu mạnh dùng như gì luôn', 10, 20000000, 2, 'còn hàng', 1),
(15, 'iphone 11 pro max', 'iphone-11-pro-256gb-black-600x600min.jpg', 'xanh', '512GB\r\nBao lưu phim ', 100, 20000000, 2, 'còn hàng', 1),
(16, 'iphone 8 plus', 'iphone-8-plus-hh-600x600-600x600min.jpg', 'trắng ', '64GB \r\nsài ổn định \r\nchụp hình đẹp', 100, 15000000, 2, 'còn hàng', 1),
(17, 'iphone 11 pro max', 'iphone-11-pro-max-512gb-gold-600x600min.jpg', 'trắng ', '512GB\r\nBao lưu Phim ', 100, 20000000, 2, 'còn hàng', 1),
(18, 'xiaomi-remi-note8', 'xiaomi-redmi-note-8-white-600x600min.jpg', 'trắng ', '64GB\r\nmạnh chiến tất cả các game\r\nchụp hình xấu chưa từng thấy', 5, 20000000, 2, 'còn hàng', 3),
(19, 'xiaomi - note 10', 'xiaomi-mi-note-10-pro-black-600x600min.jpg', 'đen', '128GB\r\nChụp Hình Xấu Xuất Sắc', 10, 20000000, 2, 'còn hàng', 3),
(20, 'xiaomi-redmi-note 7', 'xiaomi-redmi-note-7-600x600min.jpg', 'xanh dương', '64GB\r\nChụp Hình  Thì Thôi Rồi Xấu Kinh Hồn', 10, 15000000, 2, 'còn hàng', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE IF NOT EXISTS `tintuc` (
  `maTT` int(11) NOT NULL,
  `tieude` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `noidung` text COLLATE utf8_vietnamese_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaydangtin` date NOT NULL,
  `tacgia` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `thoigianhethan` date NOT NULL,
  PRIMARY KEY (`maTT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`maTT`, `tieude`, `noidung`, `hinhanh`, `ngaydangtin`, `tacgia`, `thoigianhethan`) VALUES
(1213, 'giảm 50% cho iphone 12', 'aaaaaaaa', '', '2021-01-02', 'nguyễn thành tiến', '2021-01-07');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD CONSTRAINT `ctdonhang_ibfk_1` FOREIGN KEY (`maHD`) REFERENCES `hoadon` (`maHD`) ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maDM`) REFERENCES `danhmuc` (`maDM`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
