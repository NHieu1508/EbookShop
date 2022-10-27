-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2022 at 10:24 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `db_ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cthd`
--

CREATE TABLE `tbl_cthd` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `MaKH` varchar(100) collate utf8_unicode_ci NOT NULL,
  `Tongsoluong` varchar(100) collate utf8_unicode_ci NOT NULL,
  `Tongtien` varchar(100) collate utf8_unicode_ci NOT NULL,
  `Pttt` varchar(200) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=84 ;

--
-- Dumping data for table `tbl_cthd`
--

INSERT INTO `tbl_cthd` (`id`, `MaKH`, `Tongsoluong`, `Tongtien`, `Pttt`) VALUES
(22, '11', '1', '999', 'Thanh toán khi nhận hàng'),
(23, '11', '1', '1299', 'VNPay'),
(24, '11', '1', '999', 'VNPay'),
(35, '5', '1', '1299', 'VNPay'),
(43, '4', '10', '12430', 'VNPay'),
(44, '5', '10', '1220', 'VNPay'),
(45, '5', '1', '1299', 'VNPay'),
(46, '4', '1', '999', 'Thanh toán khi nhận hàng'),
(47, '4', '1', '999', 'Thanh toán khi nhận hàng'),
(48, '4', '1', '999', 'VNPay'),
(49, '4', '11', '14289', 'VNPay'),
(50, '4', '1', '1299', 'Thanh toán khi nhận hàng'),
(51, '4', '1', '1299', 'VNPay'),
(52, '4', '1', '999', 'Thanh toán khi nhận hàng'),
(53, '4', '1', '999', 'Thanh toán khi nhận hàng'),
(54, '4', '3', '2997', 'VNPay'),
(55, '4', '3', '300000', 'VNPay'),
(56, '5', '1', '100000', 'VNPay'),
(57, '3', '1', '100000', 'VNPay'),
(58, '3', '1', '100000', 'VNPay'),
(59, '3', '1', '100000', 'VNPay'),
(60, '3', '2', '200000', 'VNPay'),
(61, '3', '2', '200000', 'VNPay'),
(62, '3', '2', '200000', 'Thanh toán khi nhận hàng'),
(63, '3', '3', '300000', 'VNPay'),
(64, '3', '1', '100000', 'VNPay'),
(65, '3', '2', '200000', 'VNPay'),
(66, '3', '2', '200000', 'VNPay'),
(67, '3', '1', '100000', 'VNPay'),
(68, '3', '3', '100467', 'VNPay'),
(69, '3', '1', '100000', 'VNPay'),
(70, '3', '1', '345', 'VNPay'),
(71, '3', '1', '100000', 'VNPay'),
(72, '3', '1', '100000', 'VNPay'),
(73, '3', '1', '122', 'VNPay'),
(74, '3', '1', '100000', 'Thanh toán khi nhận hàng'),
(75, '3', '1', '100000', 'VNPay'),
(76, '12', '1', '100000', 'VNPay'),
(77, '12', '1', '100000', 'VNPay'),
(78, '5', '1', '100000', 'VNPay'),
(79, '5', '1', '100000', 'VNPay'),
(80, '5', '2', '200000', 'VNPay'),
(81, '5', '1', '100000', 'VNPay'),
(82, '3', '1', '345', 'VNPay'),
(83, '3', '1', '100000', 'VNPay');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `Madonhang` int(10) unsigned NOT NULL auto_increment,
  `MaKH` int(10) NOT NULL,
  `Tensach` varchar(100) collate utf8_unicode_ci NOT NULL,
  `Anh` varchar(200) collate utf8_unicode_ci NOT NULL,
  `Gia` varchar(200) collate utf8_unicode_ci NOT NULL,
  `Soluong_mua` varchar(50) collate utf8_unicode_ci NOT NULL,
  `Thanhtien` int(100) NOT NULL,
  `Trangthai` varchar(200) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`Madonhang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=89907 ;

--
-- Dumping data for table `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`Madonhang`, `MaKH`, `Tensach`, `Anh`, `Gia`, `Soluong_mua`, `Thanhtien`, `Trangthai`) VALUES
(89769, 4, ' Sách Tiếng Việt 3', 'product_4.jpg', '655', '2', 1310, 'Đã giao hàng'),
(89770, 4, ' Sach toan 2', 'product_2.jpg', '1299', '1', 1299, 'Đã giao hàng'),
(89771, 3, ' Sach khoa hoc va tu nhien', 'product_2.jpg', '999', '1', 999, 'Đã xử lý'),
(89772, 3, ' Sách Tiếng Việt 3', 'product_4.jpg', '655', '1', 655, 'Đã xử lý'),
(89794, 11, ' Sach khoa hoc va tu nhien', 'product_2.jpg', '999', '1', 999, 'Chờ xử lý'),
(89795, 11, ' Sach khoa hoc va tu nhien', 'product_2.jpg', '999', '1', 999, 'Chờ xử lý'),
(89879, 5, 'Những ngày thơ ấu', 'nguyenhong.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89880, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89881, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89882, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '2', 200000, 'Chờ xử lý'),
(89883, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '3', 300000, 'Chờ xử lý'),
(89884, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89885, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '2', 200000, 'Chờ xử lý'),
(89886, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89887, 3, ' Sach toan', 'product_4.jpg', '122', '1', 122, 'Chờ xử lý'),
(89888, 3, ' Sach khoa hoc va tu nhien', 'product_2.jpg', '345', '1', 345, 'Chờ xử lý'),
(89889, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89890, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89891, 3, ' Sach khoa hoc va tu nhien', 'product_2.jpg', '345', '1', 345, 'Chờ xử lý'),
(89892, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89893, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89894, 3, ' Sach toan', 'product_4.jpg', '122', '1', 122, 'Chờ xử lý'),
(89895, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89896, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89897, 12, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89898, 12, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89899, 5, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89900, 5, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89901, 5, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89902, 5, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '2', 200000, 'Chờ xử lý'),
(89903, 5, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89904, 3, ' Sach khoa hoc va tu nhien', 'product_2.jpg', '345', '1', 345, 'Chờ xử lý'),
(89905, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý'),
(89906, 3, 'Sách Tiếng Việt 5', 'product_2.jpg', '100000', '1', 100000, 'Chờ xử lý');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `Magiohang` int(10) unsigned NOT NULL auto_increment,
  `Gia` float NOT NULL,
  `Soluong` int(10) NOT NULL,
  `Tongtien` float NOT NULL,
  `Anh` varchar(100) collate utf8_unicode_ci NOT NULL,
  `Tensach` varchar(200) collate utf8_unicode_ci NOT NULL,
  `Masach` int(10) NOT NULL,
  `Madonhang` int(10) NOT NULL,
  PRIMARY KEY  (`Magiohang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`Magiohang`, `Gia`, `Soluong`, `Tongtien`, `Anh`, `Tensach`, `Masach`, `Madonhang`) VALUES
(1, 100, 3, 300, 'produc_1.jpg', 'Sach Toan', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `MaKH` int(10) unsigned NOT NULL auto_increment,
  `Hoten` char(100) collate utf8_unicode_ci NOT NULL,
  `Diachi` char(100) collate utf8_unicode_ci NOT NULL,
  `Sdt` int(10) NOT NULL,
  `Email` char(100) collate utf8_unicode_ci NOT NULL,
  `Password` char(100) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`MaKH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`MaKH`, `Hoten`, `Diachi`, `Sdt`, `Email`, `Password`) VALUES
(3, 'Ngan Huynh', '123 Ho Chi Minh', 1321312, 'ngannguyen201094@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'Hieu Nguyen', '1B duong 21 p Hiep Binh Chanh Q Thu Duc HO CHI MINH', 2147483647, 'nguyennhathieu1508@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Nha Huynh', '1B duong 21 p Hiep Binh Chanh Q Thu Duc HO CHI MINH', 2147483647, 'nha@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'Nguyen A', '12 Nguyen Van Bao', 243254, '123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'Huynh Ngan', '134 Tran Hung Dao', 3545632, 'abc@gmail.com', '202cb962ac59075b964b07152d234b70'),
(12, 'Abcdxyz', '1B duong 21 p Hiep Binh Chanh Q Thu Duc HO CHI MINH', 354468656, 'abcd@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'Le Thi A', '123 Le Loi', 354468656, 'abc123@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loai`
--

CREATE TABLE `tbl_loai` (
  `Maloai` int(10) unsigned NOT NULL auto_increment,
  `Tenloai` varchar(100) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`Maloai`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_loai`
--

INSERT INTO `tbl_loai` (`Maloai`, `Tenloai`) VALUES
(1, 'SGK'),
(2, 'STT'),
(3, 'Sách thiếu nhi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quanly`
--

CREATE TABLE `tbl_quanly` (
  `MaQL` int(10) unsigned NOT NULL auto_increment,
  `Hoten` char(100) collate utf8_unicode_ci NOT NULL,
  `Email` char(100) collate utf8_unicode_ci NOT NULL,
  `Diachi` char(100) collate utf8_unicode_ci NOT NULL,
  `Password` char(100) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`MaQL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_quanly`
--

INSERT INTO `tbl_quanly` (`MaQL`, `Hoten`, `Email`, `Diachi`, `Password`) VALUES
(1, 'Hieu', 'nguyen@gmail.com', '123 Ho Chi Minh', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sach`
--

CREATE TABLE `tbl_sach` (
  `Masach` int(10) unsigned NOT NULL auto_increment,
  `Maloai` int(10) NOT NULL,
  `Mavoucher` int(10) NOT NULL,
  `Tensach` char(100) collate utf8_unicode_ci NOT NULL,
  `Anh` varchar(100) collate utf8_unicode_ci NOT NULL,
  `Gia` float NOT NULL,
  `NXB` char(100) collate utf8_unicode_ci NOT NULL,
  `Soluong` char(10) collate utf8_unicode_ci NOT NULL,
  `Tentacgia` char(100) collate utf8_unicode_ci NOT NULL,
  `Magiohang` int(10) NOT NULL,
  PRIMARY KEY  (`Masach`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_sach`
--

INSERT INTO `tbl_sach` (`Masach`, `Maloai`, `Mavoucher`, `Tensach`, `Anh`, `Gia`, `NXB`, `Soluong`, `Tentacgia`, `Magiohang`) VALUES
(8, 2, 2, 'Sách Tiếng Việt 5', 'product_2.jpg', 100000, ' Giao duc', '3', 'Nguyen Van A', 0),
(9, 1, 2, ' Sach toan 2', 'product_4.jpg', 1222, ' Giao duc', '5', 'Nguyen Van Bao', 0),
(11, 1, 2, ' Sach khoa hoc va tu nhien', 'product_2.jpg', 345, ' Giao duc', '4', 'Nguyen Van B', 0),
(12, 3, 2, ' Sách Tiếng Việt 3', 'product_4.jpg', 655, ' Giao duc', '3', 'Nguyen Van B', 0),
(18, 2, 4, 'Những ngày thơ ấu', 'nguyenhong.jpg', 100000, ' NXB Trẻ', '10', 'Nguyễn Nhật Hiếu', 0),
(19, 2, 3, ' Lão Hạc', 'laohac.jpg', 100000, ' NXB Trẻ', '12', 'Nam Cao', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vnpay`
--

CREATE TABLE `tbl_vnpay` (
  `id_vnpay` int(10) unsigned NOT NULL auto_increment,
  `vnp_amount` varchar(200) collate utf8_unicode_ci NOT NULL,
  `vnp_bankCode` varchar(200) collate utf8_unicode_ci NOT NULL,
  `vnp_banktranno` varchar(200) collate utf8_unicode_ci NOT NULL,
  `vnp_cardtype` varchar(200) collate utf8_unicode_ci NOT NULL,
  `vnp_orderinfo` varchar(200) collate utf8_unicode_ci NOT NULL,
  `vnp_paydate` varchar(200) collate utf8_unicode_ci NOT NULL,
  `vnp_tmncode` varchar(200) collate utf8_unicode_ci NOT NULL,
  `vnp_transactionno` varchar(200) collate utf8_unicode_ci NOT NULL,
  `MaKH` int(10) NOT NULL,
  PRIMARY KEY  (`id_vnpay`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_vnpay`
--

INSERT INTO `tbl_vnpay` (`id_vnpay`, `vnp_amount`, `vnp_bankCode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`, `MaKH`) VALUES
(1, '1000000', 'NCB', 'VNP13852210', 'ATM', 'Thanh toán đơn hàng', '  20221007164743', '  5XN72G2N', ' 13852210', 5),
(3, '1000000', 'NCB', 'VNP13852804', 'ATM', 'Thanh toán đơn hàng', '  20221009221312', '  5XN72G2N', ' 13852804', 5),
(4, '10000000', 'NCB', 'VNP13859129', 'ATM', 'Thanh toán đơn hàng', '  20221019084328', '  B0N0EP2N', ' 13859129', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voucher`
--

CREATE TABLE `tbl_voucher` (
  `Mavoucher` int(10) unsigned NOT NULL auto_increment,
  `Tiengiam` float NOT NULL,
  `Ngaybatdau` date NOT NULL,
  `Ngayketthuc` date NOT NULL,
  PRIMARY KEY  (`Mavoucher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_voucher`
--

