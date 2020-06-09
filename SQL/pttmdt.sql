-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 06:14 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pttmdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
`bn_ma` int(11) NOT NULL,
  `bn_tieude` varchar(50) NOT NULL,
  `bn_hinh` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`bn_ma`, `bn_tieude`, `bn_hinh`) VALUES
(9, 'hinh1', 'https://lystravel.com.vn/wp-content/uploads/2015/09/ve-may-bay-banner.jpg'),
(16, 'nhuan', 'http://localhost/pttmdt-baocao/admin-test/images/backgroup2.jpg'),
(17, 'nhuan', 'http://localhost/pttmdt-baocao/admin-test/images/bg-vfly-banner_637849.png');

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_ghe`
--

CREATE TABLE IF NOT EXISTS `chitiet_ghe` (
  `lv_ma` int(11) NOT NULL DEFAULT '0',
  `mb_ma` int(11) NOT NULL DEFAULT '0',
  `so_luong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiet_ghe`
--

INSERT INTO `chitiet_ghe` (`lv_ma`, `mb_ma`, `so_luong`) VALUES
(1, 1, 30),
(1, 2, 40),
(2, 1, 60),
(2, 2, 70);

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_giohang`
--

CREATE TABLE IF NOT EXISTS `chitiet_giohang` (
  `gh_ma` int(11) NOT NULL DEFAULT '0',
  `cb_ma` int(11) NOT NULL DEFAULT '0',
  `lv_ma` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiet_giohang`
--

INSERT INTO `chitiet_giohang` (`gh_ma`, `cb_ma`, `lv_ma`) VALUES
(8, 6, 2),
(1, 12, 1),
(8, 12, 1),
(8, 12, 2),
(10, 12, 2),
(1, 13, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chuyen_bay`
--

CREATE TABLE IF NOT EXISTS `chuyen_bay` (
`cb_ma` int(11) NOT NULL,
  `cb_thoidiem` date DEFAULT NULL,
  `cb_tinhtrang` varchar(20) DEFAULT NULL,
  `cb_giocatcanh_dukien` time DEFAULT NULL,
  `cb_giohacanh_dukien` time DEFAULT NULL,
  `cb_giocatcanh_chinhthuc` time DEFAULT NULL,
  `cb_giohacanh_chinhthuc` time DEFAULT NULL,
  `tb_ma` int(11) DEFAULT NULL,
  `hv_ma` int(11) DEFAULT NULL,
  `mb_ma` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `chuyen_bay`
--

INSERT INTO `chuyen_bay` (`cb_ma`, `cb_thoidiem`, `cb_tinhtrang`, `cb_giocatcanh_dukien`, `cb_giohacanh_dukien`, `cb_giocatcanh_chinhthuc`, `cb_giohacanh_chinhthuc`, `tb_ma`, `hv_ma`, `mb_ma`) VALUES
(1, '2020-05-30', 'Còn', '07:00:00', '09:00:00', '07:00:00', '09:00:00', 2, 7, 1),
(2, '2020-05-30', 'Còn', '07:00:00', '09:00:00', '07:00:00', '09:00:00', 2, 8, 1),
(3, '2020-06-02', 'Còn', '07:00:00', '09:00:00', '07:00:00', '09:00:00', 2, 7, 1),
(4, '2020-05-31', 'Còn', '07:00:00', '09:00:00', '07:00:00', '09:00:00', 4, 7, 2),
(5, '2020-06-11', 'Còn', '08:00:00', '10:00:00', '08:00:00', '10:00:00', 2, 7, 2),
(6, '2020-06-11', 'Còn', '11:00:00', '13:00:00', '11:00:00', '13:00:00', 2, 7, 2),
(7, '2020-05-31', 'Còn', '12:00:00', '15:00:00', '12:00:00', '15:00:00', 3, 7, 1),
(8, '2020-05-15', 'Còn', '11:00:00', '13:00:00', '11:00:00', '13:00:00', 2, 8, 1),
(9, '2020-05-17', 'Còn', '13:00:00', '15:00:00', '13:00:00', '15:00:00', 2, 8, 1),
(10, '2020-05-28', 'Còn', '13:53:00', '15:53:00', '13:53:00', '15:53:00', 2, 8, 1),
(11, '2020-06-03', 'Còn', '13:00:00', '15:00:00', '13:00:00', '15:00:00', 2, 8, 2),
(12, '2020-06-11', 'Còn', '14:15:00', '16:15:00', '14:15:00', '16:15:00', 2, 8, 1),
(13, '2020-06-11', 'Còn', '15:24:00', '17:24:00', '15:24:00', '17:24:00', 4, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dich_vu`
--

CREATE TABLE IF NOT EXISTS `dich_vu` (
`dv_ma` int(11) NOT NULL,
  `dv_ten` varchar(50) DEFAULT NULL,
  `lv_ma` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dich_vu`
--

INSERT INTO `dich_vu` (`dv_ma`, `dv_ten`, `lv_ma`) VALUES
(1, 'ABC', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ghe_chuyen`
--

CREATE TABLE IF NOT EXISTS `ghe_chuyen` (
  `cb_ma` int(11) NOT NULL DEFAULT '0',
  `lv_ma` int(11) NOT NULL DEFAULT '0',
  `mb_ma` int(11) NOT NULL DEFAULT '0',
  `so_cho` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ghe_chuyen`
--

INSERT INTO `ghe_chuyen` (`cb_ma`, `lv_ma`, `mb_ma`, `so_cho`) VALUES
(1, 1, 1, 30),
(1, 2, 1, 60),
(2, 1, 1, 30),
(2, 2, 1, 60),
(3, 1, 2, 40),
(3, 2, 2, 50),
(5, 1, 2, 40),
(5, 2, 2, 50),
(6, 1, 2, 40),
(6, 2, 2, 45),
(7, 1, 1, 30),
(7, 2, 1, 60),
(8, 1, 1, 30),
(8, 2, 1, 60),
(9, 1, 1, 30),
(9, 2, 1, 60),
(10, 1, 1, 30),
(10, 2, 1, 60),
(11, 1, 2, 40),
(11, 2, 2, 50),
(12, 1, 1, -6),
(12, 2, 1, 35),
(13, 1, 1, 11),
(13, 2, 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `gia`
--

CREATE TABLE IF NOT EXISTS `gia` (
  `cb_ma` int(11) NOT NULL DEFAULT '0',
  `lv_ma` int(11) NOT NULL DEFAULT '0',
  `gia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gia`
--

INSERT INTO `gia` (`cb_ma`, `lv_ma`, `gia`) VALUES
(1, 1, 789000),
(1, 2, 600000),
(2, 1, 889000),
(2, 2, 689000),
(3, 1, 900000),
(3, 2, 789000),
(6, 1, 980000),
(6, 2, 660000),
(9, 1, 950000),
(9, 2, 650000),
(11, 1, 890000),
(11, 2, 780000),
(12, 1, 980000),
(12, 2, 790000),
(13, 1, 870000),
(13, 2, 790000);

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE IF NOT EXISTS `gio_hang` (
`gh_ma` int(11) NOT NULL,
  `nd_ma` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `gio_hang`
--

INSERT INTO `gio_hang` (`gh_ma`, `nd_ma`) VALUES
(1, 1),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `hang_ve`
--

CREATE TABLE IF NOT EXISTS `hang_ve` (
`hv_ma` int(11) NOT NULL,
  `hv_ten` varchar(50) DEFAULT NULL,
  `hv_kihieu` varchar(10) NOT NULL,
  `hv_hinh` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `hang_ve`
--

INSERT INTO `hang_ve` (`hv_ma`, `hv_ten`, `hv_kihieu`, `hv_hinh`) VALUES
(7, 'Vietjet', 'VJ', 'http://localhost/pttmdt-baocao/admin/image/vj.png'),
(8, 'VietnamAirlines', 'VN-AL', 'http://localhost/pttmdt-baocao/admin/image/vn.png'),
(9, 'Bamboo', 'BB', 'http://localhost/pttmdt-baocao/admin-test/images/bamboo.png');

-- --------------------------------------------------------

--
-- Table structure for table `hanh_ly`
--

CREATE TABLE IF NOT EXISTS `hanh_ly` (
`hl_ma` int(11) NOT NULL,
  `hl_mota` varchar(50) NOT NULL,
  `hl_gia` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `hanh_ly`
--

INSERT INTO `hanh_ly` (`hl_ma`, `hl_mota`, `hl_gia`) VALUES
(1, 'Tặng 1 kiện 10 > 15kg', 0),
(3, 'Mua thêm 5kg', 230000),
(4, 'Mua thêm 10kg', 260000),
(6, 'Mua thêm 15kg', 360000),
(7, 'Mua thêm 20kg', 420000),
(8, 'Mua thêm 25kg', 840000),
(9, 'Mua thêm 30kg', 1080000),
(10, 'Mua thêm 35kg', 1320000),
(11, 'Mua thêm 40kg', 1560000);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE IF NOT EXISTS `hoa_don` (
`hd_ma` int(11) NOT NULL,
  `hd_tongtien` int(11) DEFAULT NULL,
  `hd_ngaylap` datetime DEFAULT NULL,
  `pdv_ma` int(11) DEFAULT NULL,
  `tt_ma` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`hd_ma`, `hd_tongtien`, `hd_ngaylap`, `pdv_ma`, `tt_ma`) VALUES
(6, 5309940, '2020-06-08 21:07:34', 107, 2);

-- --------------------------------------------------------

--
-- Table structure for table `khuyen_mai`
--

CREATE TABLE IF NOT EXISTS `khuyen_mai` (
`km_ma` int(11) NOT NULL,
  `km_ten` varchar(50) DEFAULT NULL,
  `km_mota` varchar(500) NOT NULL,
  `km_tgbatdau` datetime DEFAULT NULL,
  `km_tgketthuc` datetime DEFAULT NULL,
  `km_giatri` float NOT NULL,
  `km_code` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`km_ma`, `km_ten`, `km_mota`, `km_tgbatdau`, `km_tgketthuc`, `km_giatri`, `km_code`) VALUES
(1, 'TP HCM - Hà Nội ', 'Tất cả chuyến bay từ thành phố Hồ Chí Minh đến Hà Nội được giảm giá 10% ', '2020-05-28 00:00:00', '2020-06-15 00:00:00', 0.1, '1'),
(2, 'Thương gia', 'Tất cả hành khách thương gia được giảm giá chuyến bay 5%', '2020-06-01 00:00:00', '2020-06-15 00:00:00', 0.05, '2'),
(4, 'Thành viên Vip', 'Thành viên Vip được tặng mã khuyến mãi 10%', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0.1, 'tvv2020');

-- --------------------------------------------------------

--
-- Table structure for table `loaive_khuyenmai`
--

CREATE TABLE IF NOT EXISTS `loaive_khuyenmai` (
  `lv_ma` int(11) NOT NULL DEFAULT '0',
  `km_ma` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaive_khuyenmai`
--

INSERT INTO `loaive_khuyenmai` (`lv_ma`, `km_ma`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `loai_ve`
--

CREATE TABLE IF NOT EXISTS `loai_ve` (
`lv_ma` int(11) NOT NULL,
  `lv_ten` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `loai_ve`
--

INSERT INTO `loai_ve` (`lv_ma`, `lv_ten`) VALUES
(1, 'Thương gia'),
(2, 'Phổ thông');

-- --------------------------------------------------------

--
-- Table structure for table `may_bay`
--

CREATE TABLE IF NOT EXISTS `may_bay` (
`mb_ma` int(11) NOT NULL,
  `mb_ten` varchar(50) DEFAULT NULL,
  `mb_soghe` int(11) DEFAULT NULL,
  `mb_namsanxuat` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `may_bay`
--

INSERT INTO `may_bay` (`mb_ma`, `mb_ten`, `mb_soghe`, `mb_namsanxuat`) VALUES
(1, 'Boeing-777', 200, 2010),
(2, 'MH-370', 200, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE IF NOT EXISTS `nguoi_dung` (
`nd_ma` int(11) NOT NULL,
  `nd_ten` varchar(30) DEFAULT NULL,
  `nd_sdt` int(11) DEFAULT NULL,
  `nd_diachi` varchar(100) DEFAULT NULL,
  `nd_gioitinh` varchar(4) DEFAULT NULL,
  `nd_mail` varchar(50) DEFAULT NULL,
  `nd_taikhoan` varchar(50) DEFAULT NULL,
  `nd_matkhau` varchar(50) DEFAULT NULL,
  `nd_phanquyen` varchar(50) DEFAULT NULL,
  `nd_vip` int(11) DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`nd_ma`, `nd_ten`, `nd_sdt`, `nd_diachi`, `nd_gioitinh`, `nd_mail`, `nd_taikhoan`, `nd_matkhau`, `nd_phanquyen`, `nd_vip`) VALUES
(1, 'Tran Khanh Dang', 392629620, '123', '1', '123@gmail.com', 'dang', 'e10adc3949ba59abbe56e057f20f883e', '0', 0),
(2, 'Admin', NULL, NULL, NULL, NULL, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 0),
(3, 'A B C D', 123456789, 'can tho', 'Nam', 'abcd@gmail.com', 'abcd', '81dc9bdb52d04dc20036dbd8313ed055', '0', 0),
(4, 'huyen', 23456789, 'can tho', 'Nữ', 'huyen@gmail.com', 'huyen', 'd856125d827ac297307baf299a8ee1f1', '0', 0),
(5, 'huyen', 234567892, 'can tho', 'Nữ', 'hau@gmail.com', 'hau', 'a23ed18c6f9425dc306fc002e5c2046e', '0', 0),
(6, 'huyen', 234567892, 'can tho', 'Nữ', 'hau1@gmail.com', 'hau1', '297073c16baff9394f04e2051b801ebf', '0', 0),
(7, 'Trần Phú Nhuân', 343000909, 'Hẽm 58,Đường 3/2, Ninh Kiều, Cần Thơ', 'Nam', 'nhuan@gmail.com', 'nhuan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0', 0),
(8, 'Kim Phụng', 123456789, 'can tho', 'Nữ', 'phung@gmail.com', 'phung', '01d1ba20575c4d7ae887152eefe9aaa4', '0', 0),
(9, 'Tran Khanh Dang', 392629620, 'Hẽm 58,Đường 3/2, Ninh Kiều, Cần Thơ', 'Nam', 'khanhdangkp@gmail.com', 'khanhdang27', 'e10adc3949ba59abbe56e057f20f883e', '0', 0),
(10, 'Khanh Dang', 234567892, 'can tho', 'Nam', 'hau12@gmail.com', 'abcde', 'e10adc3949ba59abbe56e057f20f883e', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phieu_dat_ve`
--

CREATE TABLE IF NOT EXISTS `phieu_dat_ve` (
`pdv_ma` int(11) NOT NULL,
  `pdv_sove` int(11) DEFAULT NULL,
  `pdv_khuhoi` int(11) NOT NULL,
  `pdv_ghichu` varchar(500) NOT NULL,
  `pdv_tongve` int(11) NOT NULL,
  `pdv_tonghl` int(11) NOT NULL,
  `nd_ma` int(11) DEFAULT NULL,
  `km_ma` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `phieu_dat_ve`
--

INSERT INTO `phieu_dat_ve` (`pdv_ma`, `pdv_sove`, `pdv_khuhoi`, `pdv_ghichu`, `pdv_tongve`, `pdv_tonghl`, `nd_ma`, `km_ma`) VALUES
(61, 2, 1, 'abcd', 5670000, 0, 1, 1),
(62, 4, 1, 'nhẹ tay nhe', 0, 0, 1, 1),
(63, 4, 1, 'nhẹ tay nhe', 123456789, 0, 1, 1),
(64, 4, 1, 'nhẹ tay nhe', 123456789, 0, 4, 1),
(65, 4, 1, 'gfdfghdfg', 123456789, 0, 4, 1),
(66, 4, 1, 'nhẹ tay nhe', 2147483647, 0, 4, 1),
(67, 4, 1, 'ád', 0, 0, 4, 1),
(68, 2, 0, 'nhẹ tay nhe', 0, 0, 4, 1),
(69, 2, 0, '', 0, 0, 4, 1),
(70, 1, 0, '', 0, 0, 4, 1),
(71, 2, 0, '', 0, 0, 4, 1),
(72, 2, 0, 'nhẹ tay nhe', 0, 0, 4, 1),
(73, 4, 1, '', 0, 0, 4, 1),
(74, 4, 1, 'nhẹ tay nhe', 1404000, 1200000, 4, 1),
(75, 6, 1, 'nhẹ tay nhe', 1548000, 123456, 1, 1),
(76, 4, 1, 'nhẹ tay nhe', 1404000, 0, 1, 1),
(77, 4, 1, '', 1404000, 1200000, 1, 1),
(78, 2, 0, '', 1352400, 0, 1, 1),
(79, 6, 1, 'abc', 2528400, 1620000, 1, 1),
(80, 6, 1, '', 2244600, 0, 1, 1),
(81, 6, 1, '', 2244600, 0, 1, 1),
(82, 6, 1, '', 2244600, 0, 1, 1),
(83, 6, 1, '', 2244600, 0, 1, 1),
(84, 6, 1, '', 2244600, 0, 1, 1),
(85, 6, 1, '', 2038200, 0, 1, 1),
(86, 6, 1, '', 2244600, 0, 1, 1),
(87, 6, 1, '', 2244600, 0, 1, 1),
(88, 4, 1, '', 2293200, 1080000, 1, 1),
(89, 4, 1, '', 2293200, 0, 1, 1),
(90, 4, 1, '', 2293200, 0, 1, 1),
(91, 4, 1, '', 2293200, 0, 1, 1),
(92, 4, 1, '', 2293200, 0, 1, 1),
(93, 4, 1, '', 2293200, 0, 1, 1),
(94, 4, 1, '', 1544400, 1680000, 1, 1),
(95, 8, 1, '', 2938800, 1680000, 1, 1),
(96, 8, 1, '', 2938800, 680000, 1, 1),
(97, 8, 1, '', 6175200, 1100000, 1, 1),
(98, 4, 1, '', 2390400, 0, 1, 1),
(99, 4, 1, '', 2275200, 0, 1, 1),
(100, 6, 1, '', 4566600, 2520000, 1, 1),
(101, 6, 1, '', 4566600, 1700000, 8, 1),
(102, 6, 1, '', 4076400, 1860000, 10, 1),
(103, 6, 1, '', 4566600, 1340000, 10, 1),
(104, 6, 1, '', 4566600, 2760000, 1, 1),
(105, 6, 1, '', 4566600, 1100000, 1, 1),
(106, 6, 1, '', 4566600, 3000000, 1, 1),
(107, 6, 1, '', 4566600, 1200000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `san_bay`
--

CREATE TABLE IF NOT EXISTS `san_bay` (
`sb_ma` int(11) NOT NULL,
  `sb_ten` varchar(50) DEFAULT NULL,
  `sb_diachi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `san_bay`
--

INSERT INTO `san_bay` (`sb_ma`, `sb_ten`, `sb_diachi`) VALUES
(1, 'Tân Sơn Nhất', 'TP.HCM'),
(2, 'Nội Bài', 'Hà Nội'),
(3, 'Trà Nóc', 'Cần Thơ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE IF NOT EXISTS `tbl_rating` (
`id` int(11) NOT NULL,
  `nd_ma` int(11) NOT NULL DEFAULT '1',
  `hv_ma` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`id`, `nd_ma`, `hv_ma`, `rating`, `timestamp`) VALUES
(101, 1, 9, 5, '2020-06-08 14:25:51'),
(102, 1, 8, 4, '2020-06-08 14:25:54'),
(103, 1, 7, 5, '2020-06-08 14:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE IF NOT EXISTS `tin_tuc` (
`tt_ma` int(11) NOT NULL,
  `tt_tieude` varchar(300) NOT NULL,
  `tt_noidung` varchar(5000) NOT NULL,
  `tt_ngaygio` datetime NOT NULL,
  `tt_hinhanh` varchar(500) NOT NULL,
  `tt_mota` varchar(400) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tin_tuc`
--

INSERT INTO `tin_tuc` (`tt_ma`, `tt_tieude`, `tt_noidung`, `tt_ngaygio`, `tt_hinhanh`, `tt_mota`) VALUES
(2, 'Các điểm du lịch nổi tiếng gần Sài Gòn', '<div class="newscontetn" style="border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 0px 0px 10px; padding: 0px; position: relative; width: 810px; color: #454545; font-family: Arial, Helvetica, sans-serif; font-size: medium;">\r\n<div class="content" style="border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 0px 0px 20px; padding: 10px 0px; float: left; min-height: 900px; text-align: justify; width: 810px;">\r\n<div class="description" style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px auto; padding: 5px; width: 785.7px; overflow: auto;">\r\n<h2 style="color: #0f8dcc; font-size: 18px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px; text-decoration-line: underline; line-height: 28px;"><strong style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px;">1. L&agrave;ng nổi T&acirc;n Lập gần S&agrave;i G&ograve;n gi&aacute; rẻ nổi tiếng</strong></h2>\r\n<p style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;">L&agrave;ng nổi T&acirc;n Lập nằm ngay trung t&acirc;m của th&agrave;nh phố Đồng Th&aacute;p Mười, l&agrave;ng nổi T&acirc;n Lập l&agrave; điểm đến du lịch y&ecirc;u th&iacute;ch của nhiều giới, trẻ hiện nay.</p>\r\n<p style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;" align="center"><img src="https://vietnamairlinesvn.com/image/data/khu-du-lich-buu-long.jpg" alt="Khu du lịch Bửu Long" /></p>\r\n<p style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;">Sở hữu với diện t&iacute;ch tr&ecirc;n 135ha, l&agrave;ng nổi T&acirc;n Lập đ&atilde; trở th&agrave;nh địa điểm, quy hoạch hoặc th&agrave;nh khu du lịch, đặc trưng của thị x&atilde; Long An v&agrave; của v&ugrave;ng đất ngập nước của Đồng Th&aacute;p Mười. Đến với nơi đ&acirc;y, bạn sẽ cảm nhận hết n&eacute;t đặc trưng của khung cảnh thi&ecirc;n nhi&ecirc;n khu vực đồng bằng s&ocirc;ng nước Nam Bộ. Trong điểm tham quan T&acirc;n Lập c&oacute; 5ha l&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh khu vui chơi giải( nh&agrave; nghỉ, qu&aacute;n l&yacute;, khu bến thuyền, khu c&ocirc;ng vi&ecirc;n). Diện t&iacute;ch C&ograve;n lại l&agrave; 130ha rừng tr&agrave;m bạn c&oacute; thể kh&aacute;m ph&aacute; trải nghiệm cảnh quan trong rừng bằng chiếc xuồng hoặc đi bộ.</p>\r\n<h2 style="color: #0f8dcc; font-size: 18px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px; text-decoration-line: underline; line-height: 28px;"><strong style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px;">2. Khu du lịch Bửu Long</strong></h2>\r\n<p style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;">Bửu Long nằm c&aacute;ch trung t&acirc;m TP Bi&ecirc;n H&ograve;a độ khoảng 6km, v&agrave; nơi đ&acirc;y sở hữu bởi khung cảnh của sự b&igrave;nh y&ecirc;n v&agrave; vẻ đẹp hoang sơ. Tất cả n&eacute;t đẹp tr&ecirc;n đ&atilde; tạo sự quyến rũ của kh&ocirc;ng gian thi&ecirc;n nhi&ecirc;n tươi đẹp.</p>\r\n<p style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;" align="center"><img src="https://mtrend.vn/wp-content/uploads/2017/04/hinh-xam-nho-ma-dep.jpg" alt="Những h&igrave;nh xăm nhỏ đẹp cho nữ đầy tinh tế &ndash; mTrend Việt Nam" /></p>\r\n<p style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;">Nếu bạn đang muốn lựa chọn địa điểm du ngoạn đẹp v&agrave; tận hưởng một ng&agrave;y cuối tuần th&uacute; vị th&igrave; chắc chắn rằng điểm tham quan Bửu Long sẽ l&agrave; lựa chọn tuyệt vời nhất.Đ&acirc;y l&agrave; địa điểm tham quan tuyệt vời khi đứng từ tr&ecirc;n cao để tự sướng, bạn sẽ thu v&agrave;o to&agrave;n khung cảnh th&agrave;nh phố biển Bi&ecirc;n H&ograve;a b&ecirc;n d</p>\r\n</div>\r\n</div>\r\n</div>', '0000-00-00 00:00:00', 'https://vietnamairlinesvn.com/image/data/cac-diem-du-lich-noi-tieng-gan-sai-gon-thumb.jpg', 'Sân bay Đà Nẵng San bay Da Nang Sân bay quốc tế Đà Nẵng (mã sân bay: DAD) là cảng hàng không l'),
(3, 'Các điểm du lịch Thái Lan hấp dẫn', '<p>Th&aacute;i Lan được mọi người biết đến với gọi một thi&ecirc;n đường mua sắm, c&aacute;c điểm du lịch tại Th&aacute;i Lan lu&ocirc;n</p>', '2020-04-16 09:16:20', 'https://vietnamairlinesvn.com/image/data/thai-lan.jpg', 'Thái Lan được mọi người biết đến với gọi một thiên đường mua sắm, các điểm du lịch tại Thái Lan luôn'),
(16, 'Các điểm du lịch nổi tiếng gần Sài Gòn', '<div class="newscontetn" style="border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 0px 0px 10px; padding: 0px; position: relative; width: 810px; color: #454545; font-family: Arial, Helvetica, sans-serif; font-size: medium;">\r\n<div class="content" style="border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 0px 0px 20px; padding: 10px 0px; float: left; min-height: 900px; text-align: justify; width: 810px;">\r\n<div class="description" style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px auto; padding: 5px; width: 785.7px; overflow: auto;">\r\n<h2 style="color: #0f8dcc; font-size: 18px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px; text-decoration-line: underline; line-height: 28px;"><strong style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px;">1. L&agrave;ng nổi T&acirc;n Lập gần S&agrave;i G&ograve;n gi&aacute; rẻ nổi tiếng</strong></h2>\r\n<p style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;">L&agrave;ng nổi T&acirc;n Lập nằm ngay trung t&acirc;m của th&agrave;nh phố Đồng Th&aacute;p Mười, l&agrave;ng nổi T&acirc;n Lập l&agrave; điểm đến du lịch y&ecirc;u th&iacute;ch của nhiều giới, trẻ hiện nay.</p>\r\n<p style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;" align="center"><img src="https://vietnamairlinesvn.com/image/data/khu-du-lich-buu-long.jpg" alt="Khu du lịch Bửu Long" /></p>\r\n<p style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;">Sở hữu với diện t&iacute;ch tr&ecirc;n 135ha, l&agrave;ng nổi T&acirc;n Lập đ&atilde; trở th&agrave;nh địa điểm, quy hoạch hoặc th&agrave;nh khu du lịch, đặc trưng của thị x&atilde; Long An v&agrave; của v&ugrave;ng đất ngập nước của Đồng Th&aacute;p Mười. Đến với nơi đ&acirc;y, bạn sẽ cảm nhận hết n&eacute;t đặc trưng của khung cảnh thi&ecirc;n nhi&ecirc;n khu vực đồng bằng s&ocirc;ng nước Nam Bộ. Trong điểm tham quan T&acirc;n Lập c&oacute; 5ha l&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh khu vui chơi giải( nh&agrave; nghỉ, qu&aacute;n l&yacute;, khu bến thuyền, khu c&ocirc;ng vi&ecirc;n). Diện t&iacute;ch C&ograve;n lại l&agrave; 130ha rừng tr&agrave;m bạn c&oacute; thể kh&aacute;m ph&aacute; trải nghiệm cảnh quan trong rừng bằng chiếc xuồng hoặc đi bộ.</p>\r\n<h2 style="color: #0f8dcc; font-size: 18px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px; text-decoration-line: underline; line-height: 28px;"><strong style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px;">2. Khu du lịch Bửu Long</strong></h2>\r\n<p style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;">Bửu Long nằm c&aacute;ch trung t&acirc;m TP Bi&ecirc;n H&ograve;a độ khoảng 6km, v&agrave; nơi đ&acirc;y sở hữu bởi khung cảnh của sự b&igrave;nh y&ecirc;n v&agrave; vẻ đẹp hoang sơ. Tất cả n&eacute;t đẹp tr&ecirc;n đ&atilde; tạo sự quyến rũ của kh&ocirc;ng gian thi&ecirc;n nhi&ecirc;n tươi đẹp.</p>\r\n<p style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;" align="center"><img src="https://mtrend.vn/wp-content/uploads/2017/04/hinh-xam-nho-ma-dep.jpg" alt="Những h&igrave;nh xăm nhỏ đẹp cho nữ đầy tinh tế &ndash; mTrend Việt Nam" /></p>\r\n<p style="border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;">Nếu bạn đang muốn lựa chọn địa điểm du ngoạn đẹp v&agrave; tận hưởng một ng&agrave;y cuối tuần th&uacute; vị th&igrave; chắc chắn rằng điểm tham quan Bửu Long sẽ l&agrave; lựa chọn tuyệt vời nhất.Đ&acirc;y l&agrave; địa điểm tham quan tuyệt vời khi đứng từ tr&ecirc;n cao để tự sướng, bạn sẽ thu v&agrave;o to&agrave;n khung cảnh th&agrave;nh phố biển Bi&ecirc;n H&ograve;a b&ecirc;n d</p>\r\n</div>\r\n</div>\r\n</div>', '0000-00-00 00:00:00', 'https://vietnamairlinesvn.com/image/data/cac-diem-du-lich-noi-tieng-gan-sai-gon-thumb.jpg', 'Sân bay Đà Nẵng San bay Da Nang Sân bay quốc tế Đà Nẵng (mã sân bay: DAD) là cảng hàng không l'),
(17, 'Các điểm du lịch Thái Lan hấp dẫn', '<p>Th&aacute;i Lan được mọi người biết đến với gọi một thi&ecirc;n đường mua sắm, c&aacute;c điểm du lịch tại Th&aacute;i Lan lu&ocirc;n</p>', '2020-04-16 09:16:20', 'https://vietnamairlinesvn.com/image/data/thai-lan.jpg', 'Thái Lan được mọi người biết đến với gọi một thiên đường mua sắm, các điểm du lịch tại Thái Lan luôn');

-- --------------------------------------------------------

--
-- Table structure for table `ti_gia`
--

CREATE TABLE IF NOT EXISTS `ti_gia` (
`tg_ma` int(11) NOT NULL,
  `tg_ten` varchar(50) DEFAULT NULL,
  `tg_donvi` varchar(50) DEFAULT NULL,
  `tg_tigia` float DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ti_gia`
--

INSERT INTO `ti_gia` (`tg_ma`, `tg_ten`, `tg_donvi`, `tg_tigia`) VALUES
(1, 'Việt Nam Đồng', 'Đ', 1),
(6, 'Dollars', '$', 0.000043),
(7, 'Euro', '€', 0.000039),
(8, 'British pound', '£', 0.000034),
(9, 'Japanese Yen', '¥', 0.0047);

-- --------------------------------------------------------

--
-- Table structure for table `trang_thai`
--

CREATE TABLE IF NOT EXISTS `trang_thai` (
`tt_ma` int(11) NOT NULL,
  `tt_ten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tuyenbay_khuyenmai`
--

CREATE TABLE IF NOT EXISTS `tuyenbay_khuyenmai` (
  `km_ma` int(11) NOT NULL DEFAULT '0',
  `tb_ma` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tuyenbay_khuyenmai`
--

INSERT INTO `tuyenbay_khuyenmai` (`km_ma`, `tb_ma`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tuyen_bay`
--

CREATE TABLE IF NOT EXISTS `tuyen_bay` (
`tb_ma` int(11) NOT NULL,
  `tb_ten` varchar(100) NOT NULL,
  `tb_tansuat` varchar(50) DEFAULT NULL,
  `tb_hanhtrinh` varchar(50) DEFAULT NULL,
  `sb_ma_di` int(11) DEFAULT NULL,
  `sb_ma_den` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tuyen_bay`
--

INSERT INTO `tuyen_bay` (`tb_ma`, `tb_ten`, `tb_tansuat`, `tb_hanhtrinh`, `sb_ma_di`, `sb_ma_den`) VALUES
(2, 'TP.HCM - Hà Nội', 'Thứ 2, Thứ 4, Thứ 6', '02:00', 1, 2),
(3, 'Cần Thơ - TP.HCM', 'Thứ 3, Thứ 5, Thứ 7', '01:00', 3, 1),
(4, 'Hà Nội - TP.HCM', 'Thứ 3, Thứ 5, Thứ 7', '02:00', 2, 1),
(5, 'TP.HCM - Cần Thơ', 'Thứ 2, Thứ 4, Thứ 6', '02:00', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ve_may_bay`
--

CREATE TABLE IF NOT EXISTS `ve_may_bay` (
`vmb_ma` int(11) NOT NULL,
  `vmb_quydanh` varchar(20) NOT NULL,
  `vmb_ho` varchar(50) DEFAULT NULL,
  `vmb_ten` varchar(50) DEFAULT NULL,
  `vmb_ngaysinh` date NOT NULL,
  `vmb_soghe` varchar(50) DEFAULT NULL,
  `nd_ma` int(11) DEFAULT NULL,
  `lv_ma` int(11) DEFAULT NULL,
  `pdv_ma` int(11) DEFAULT NULL,
  `cb_ma` int(11) DEFAULT NULL,
  `hl_ma` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=414 ;

--
-- Dumping data for table `ve_may_bay`
--

INSERT INTO `ve_may_bay` (`vmb_ma`, `vmb_quydanh`, `vmb_ho`, `vmb_ten`, `vmb_ngaysinh`, `vmb_soghe`, `nd_ma`, `lv_ma`, `pdv_ma`, `cb_ma`, `hl_ma`) VALUES
(195, 'Mr', 'Tran', 'Khanh Dang', '2020-05-07', '', 1, 2, 62, 1, 1),
(196, 'Mr', 'Le', 'Kim Phung', '2020-05-06', '', 1, 2, 62, 1, 8),
(197, 'Mr', 'Tran', 'Khanh Dang', '2020-05-07', '', 1, 1, 62, 3, 1),
(198, 'Mr', 'Le', 'Kim Phung', '2020-05-06', '', 1, 1, 62, 3, 9),
(199, 'Mr', 'Tran', 'Khanh Dang', '2020-05-13', '', 1, 2, 63, 1, 6),
(200, 'Mr', 'Le', 'Kim Phung', '2020-05-14', '', 1, 2, 63, 1, 8),
(201, 'Mr', 'Tran', 'Khanh Dang', '2020-05-13', '', 1, 1, 63, 3, 8),
(202, 'Mr', 'Le', 'Kim Phung', '2020-05-14', '', 1, 1, 63, 3, 10),
(203, 'Mr', 'Tran', 'Khanh Dang', '2020-05-14', '', 4, 2, 64, 1, 1),
(204, 'Mr', 'Le', 'Kim Phung', '2020-05-15', '', 4, 2, 64, 1, 8),
(205, 'Mr', 'Tran', 'Khanh Dang', '2020-05-14', '', 4, 1, 64, 3, 1),
(206, 'Mr', 'Le', 'Kim Phung', '2020-05-15', '', 4, 1, 64, 3, 1),
(207, 'Mr', 'Tran', 'Khanh Dang', '2020-05-14', '', 4, 2, 65, 1, 1),
(208, 'Mr', 'Le', 'Kim Phung', '2020-05-29', '', 4, 2, 65, 1, 8),
(209, 'Mr', 'Tran', 'Khanh Dang', '2020-05-14', '', 4, 1, 65, 3, 1),
(210, 'Mr', 'Le', 'Kim Phung', '2020-05-29', '', 4, 1, 65, 3, 1),
(211, 'Mr', 'Tran', 'Khanh Dang', '2020-05-21', '', 4, 2, 66, 1, 1),
(212, 'Mr', 'Le', 'Phung', '2020-04-29', '', 4, 2, 66, 1, 8),
(213, 'Mr', 'Tran', 'Khanh Dang', '2020-05-21', '', 4, 1, 66, 3, 1),
(214, 'Mr', 'Le', 'Phung', '2020-04-29', '', 4, 1, 66, 3, 1),
(215, 'Mr', 'Tran', 'abc', '2020-05-01', '', 4, 2, 67, 1, 1),
(216, 'Mr', 'Le', 'Kim Phung', '2020-05-21', '', 4, 2, 67, 1, 8),
(217, 'Mr', 'Tran', 'abc', '2020-05-01', '', 4, 1, 67, 3, 1),
(218, 'Mr', 'Le', 'Kim Phung', '2020-05-21', '', 4, 1, 67, 3, 1),
(219, 'Mr', 'Tran', 'Khanh Dang', '2020-05-07', '', 4, 2, 68, 1, 1),
(220, 'Mr', 'Le', 'Kim Phung', '2020-05-15', '', 4, 2, 68, 1, 8),
(221, 'Mr', 'Tran', 'Khanh Dang', '2020-05-07', '', 4, 2, 69, 1, 1),
(222, 'Mr', 'Le', 'Kim Phung', '2020-05-15', '', 4, 2, 69, 1, 1),
(223, 'Mr', 'Tran', 'Khanh Dang', '2020-05-27', '', 4, 1, 70, 1, 1),
(224, 'Mr', 'Tran', 'Khanh Dang', '2020-05-20', '', 4, 2, 71, 1, 1),
(225, 'Mr', 'Le', 'Kim Phung', '2020-05-22', '', 4, 2, 71, 1, 9),
(226, 'Mr', 'Tran', 'Khanh Dang', '2020-05-07', '', 4, 1, 72, 1, 1),
(227, 'Mr', 'Le', 'Kim Phung', '2020-05-08', '', 4, 1, 72, 1, 10),
(232, 'Mr', 'Tran', 'Khanh Dang', '2020-05-14', '', 4, 2, 74, 1, 1),
(233, 'Ms', 'Le', 'Kim Phung', '2020-05-07', '', 4, 2, 74, 1, 8),
(234, 'Mr', 'Tran', 'Khanh Dang', '2020-05-14', '', 4, 1, 74, 3, 1),
(235, 'Ms', 'Le', 'Kim Phung', '2020-05-07', '', 4, 1, 74, 3, 9),
(236, 'Mr', 'Tran', 'Khanh Dang', '2020-05-30', '', 1, 2, 75, 1, 1),
(237, 'Mr', 'Le', 'Kim Phung', '2020-05-30', '', 1, 2, 75, 1, 4),
(238, 'Mr', 'Nguyen', 'HUyen', '2020-05-07', '', 1, 2, 75, 1, 8),
(239, 'Mr', 'Tran', 'Khanh Dang', '2020-05-30', '', 1, 1, 75, 3, 1),
(240, 'Mr', 'Le', 'Kim Phung', '2020-05-30', '', 1, 1, 75, 3, 1),
(241, 'Mr', 'Nguyen', 'HUyen', '2020-05-07', '', 1, 1, 75, 3, 7),
(242, 'Mr', 'Tran', 'Khanh Dang', '2020-05-15', '', 1, 2, 76, 1, 1),
(243, 'Ms', 'Le', 'Phung', '2020-05-14', '', 1, 2, 76, 1, 4),
(244, 'Mr', 'Tran', 'Khanh Dang', '2020-05-15', '', 1, 1, 76, 3, 6),
(245, 'Ms', 'Le', 'Phung', '2020-05-14', '', 1, 1, 76, 3, 9),
(246, 'Mr', 'Tran', 'Khanh Dang', '2020-05-14', '', 1, 2, 77, 1, 1),
(247, 'Mr', 'Le', 'Kim Phung', '2020-05-22', '', 1, 2, 77, 1, 6),
(248, 'Mr', 'Tran', 'Khanh Dang', '2020-05-14', '', 1, 2, 77, 3, 1),
(249, 'Mr', 'Le', 'Kim Phung', '2020-05-22', '', 1, 2, 77, 3, 8),
(250, 'Mr', 'Tran', 'Khanh Dang', '2020-05-13', '', 1, 1, 78, 6, 3),
(252, 'Mr', 'Tran', 'Khanh Dang', '2020-05-13', '', 1, 1, 79, 6, 1),
(253, 'Mr', 'Le', 'Kim Phung', '2020-05-05', '', 1, 1, 79, 6, 7),
(254, 'Mr', 'Nguyen', 'HUyen', '2020-05-23', '', 1, 1, 79, 6, 8),
(255, 'Mr', 'Tran', 'Khanh Dang', '2020-05-13', '', 1, 2, 79, 13, 1),
(256, 'Mr', 'Le', 'Kim Phung', '2020-05-05', '', 1, 2, 79, 13, 6),
(257, 'Mr', 'Nguyen', 'HUyen', '2020-05-23', '', 1, 2, 79, 13, 1),
(258, 'Mr', 'Tran', 'Khanh Dang', '2020-04-28', '', 1, 1, 80, 13, 1),
(259, 'Mr', 'Le', 'Kim Phung', '2020-05-21', '', 1, 1, 80, 13, 1),
(260, 'Mr', 'Nguyen', 'HUyen', '2020-05-14', '', 1, 1, 80, 13, 1),
(261, 'Mr', 'Tran', 'Khanh Dang', '2020-04-28', '', 1, 1, 80, 6, 1),
(262, 'Mr', 'Le', 'Kim Phung', '2020-05-21', '', 1, 1, 80, 6, 1),
(263, 'Mr', 'Nguyen', 'HUyen', '2020-05-14', '', 1, 1, 80, 6, 1),
(264, 'Mr', 'Tran', 'Khanh Dang', '2020-05-22', '', 1, 1, 81, 13, 1),
(265, 'Mr', 'Le', 'Kim Phung', '2020-05-07', '', 1, 1, 81, 13, 1),
(266, 'Mr', 'Nguyen', 'HUyen', '2020-05-14', '', 1, 1, 81, 13, 1),
(267, 'Mr', 'Tran', 'Khanh Dang', '2020-05-22', '', 1, 2, 81, 12, 1),
(268, 'Mr', 'Le', 'Kim Phung', '2020-05-07', '', 1, 2, 81, 12, 1),
(269, 'Mr', 'Nguyen', 'HUyen', '2020-05-14', '', 1, 2, 81, 12, 1),
(270, 'Mr', 'Tran', 'Khanh Dang', '2020-05-15', '', 1, 1, 82, 13, 1),
(271, 'Mr', 'Le', 'Kim Phung', '2020-05-15', '', 1, 1, 82, 13, 1),
(272, 'Mr', 'Nguyen', 'HUyen', '2020-05-16', '', 1, 1, 82, 13, 1),
(273, 'Mr', 'Tran', 'Khanh Dang', '2020-05-15', '', 1, 2, 82, 12, 1),
(274, 'Mr', 'Le', 'Kim Phung', '2020-05-15', '', 1, 2, 82, 12, 1),
(275, 'Mr', 'Nguyen', 'HUyen', '2020-05-16', '', 1, 2, 82, 12, 1),
(276, 'Mr', 'Tran', 'Khanh Dang', '2020-05-07', '', 1, 1, 83, 13, 1),
(277, 'Mr', 'Le', 'Kim Phung', '2020-05-22', '', 1, 1, 83, 13, 1),
(278, 'Mr', 'Nguyen', 'HUyen', '2020-05-22', '', 1, 1, 83, 13, 1),
(279, 'Mr', 'Tran', 'Khanh Dang', '2020-05-07', '', 1, 2, 83, 12, 1),
(280, 'Mr', 'Le', 'Kim Phung', '2020-05-22', '', 1, 2, 83, 12, 1),
(281, 'Mr', 'Nguyen', 'HUyen', '2020-05-22', '', 1, 2, 83, 12, 1),
(282, 'Mr', 'Tran', 'Khanh Dang', '2020-05-14', '', 1, 1, 84, 13, 1),
(283, 'Mr', 'Le', 'Kim Phung', '2020-05-14', '', 1, 1, 84, 13, 1),
(284, 'Mr', 'Nguyen', 'HUyen', '2020-05-15', '', 1, 1, 84, 13, 1),
(285, 'Mr', 'Tran', 'Khanh Dang', '2020-05-14', '', 1, 1, 84, 12, 1),
(286, 'Mr', 'Le', 'Kim Phung', '2020-05-14', '', 1, 1, 84, 12, 1),
(287, 'Mr', 'Nguyen', 'HUyen', '2020-05-15', '', 1, 1, 84, 12, 1),
(288, 'Mr', 'Tran', 'Khanh Dang', '2020-05-06', '', 1, 2, 85, 13, 1),
(289, 'Mr', 'Le', 'Kim Phung', '2020-05-15', '', 1, 2, 85, 13, 1),
(290, 'Mr', 'Nguyen', 'HUyen', '2020-05-16', '', 1, 2, 85, 13, 1),
(291, 'Mr', 'Tran', 'Khanh Dang', '2020-05-06', '', 1, 2, 85, 12, 1),
(292, 'Mr', 'Le', 'Kim Phung', '2020-05-15', '', 1, 2, 85, 12, 1),
(293, 'Mr', 'Nguyen', 'HUyen', '2020-05-16', '', 1, 2, 85, 12, 1),
(294, 'Mr', 'Tran', 'Khanh Dang', '2020-05-13', '', 1, 1, 86, 13, 1),
(295, 'Mr', 'Le', 'Kim Phung', '2020-05-23', '', 1, 1, 86, 13, 1),
(296, 'Mr', 'Nguyen', 'HUyen', '2020-05-02', '', 1, 1, 86, 13, 1),
(297, 'Mr', 'Tran', 'Khanh Dang', '2020-05-13', '', 1, 2, 86, 6, 1),
(298, 'Mr', 'Le', 'Kim Phung', '2020-05-23', '', 1, 2, 86, 6, 1),
(299, 'Mr', 'Nguyen', 'HUyen', '2020-05-02', '', 1, 2, 86, 6, 1),
(300, 'Mr', 'Tran', 'Khanh Dang', '2020-05-21', '', 1, 1, 87, 13, 1),
(301, 'Mr', 'Le', 'Kim Phung', '2020-05-17', '', 1, 1, 87, 13, 1),
(302, 'Mr', 'Nguyen', 'HUyen', '2020-05-15', '', 1, 1, 87, 13, 1),
(303, 'Mr', 'Tran', 'Khanh Dang', '2020-05-21', '', 1, 2, 87, 6, 1),
(304, 'Mr', 'Le', 'Kim Phung', '2020-05-17', '', 1, 2, 87, 6, 1),
(305, 'Mr', 'Nguyen', 'HUyen', '2020-05-15', '', 1, 2, 87, 6, 1),
(306, 'Mr', 'Tran', 'Khanh Dang', '2020-06-25', '', 1, 1, 88, 12, 1),
(307, 'Mr', 'Le', 'Kim Phung', '2020-06-14', '', 1, 1, 88, 12, 9),
(308, 'Mr', 'Tran', 'Khanh Dang', '2020-06-25', '', 1, 2, 88, 13, 1),
(309, 'Mr', 'Le', 'Kim Phung', '2020-06-14', '', 1, 2, 88, 13, 1),
(310, 'Mr', 'Tran', 'Khanh Dang', '2020-06-17', '', 1, 1, 89, 12, 1),
(311, 'Mr', 'Le', 'Kim Phung', '2020-06-19', '', 1, 1, 89, 12, 1),
(312, 'Mr', 'Tran', 'Khanh Dang', '2020-06-17', '', 1, 2, 89, 13, 8),
(313, 'Mr', 'Le', 'Kim Phung', '2020-06-19', '', 1, 2, 89, 13, 1),
(314, 'Mr', 'Tran', 'Khanh Dang', '2020-06-17', '', 1, 1, 90, 12, 1),
(315, 'Mr', 'Le', 'Kim Phung', '2020-06-19', '', 1, 1, 90, 12, 1),
(316, 'Mr', 'Tran', 'Khanh Dang', '2020-06-17', '', 1, 2, 90, 13, 8),
(317, 'Mr', 'Le', 'Kim Phung', '2020-06-19', '', 1, 2, 90, 13, 1),
(318, 'Mr', 'Tran', 'Khanh Dang', '2020-06-03', '', 1, 1, 91, 12, 1),
(319, 'Mr', 'Le', 'Kim Phung', '2020-06-26', '', 1, 1, 91, 12, 1),
(320, 'Mr', 'Tran', 'Khanh Dang', '2020-06-03', '', 1, 2, 91, 13, 1),
(321, 'Mr', 'Le', 'Kim Phung', '2020-06-26', '', 1, 2, 91, 13, 1),
(322, 'Mr', 'Tran', 'Khanh Dang', '2020-06-12', '', 1, 1, 92, 12, 1),
(323, 'Mr', 'Le', 'Kim Phung', '2020-06-12', '', 1, 1, 92, 12, 1),
(324, 'Mr', 'Tran', 'Khanh Dang', '2020-06-12', '', 1, 2, 92, 13, 1),
(325, 'Mr', 'Le', 'Kim Phung', '2020-06-12', '', 1, 2, 92, 13, 1),
(326, 'Mr', 'Tran', 'Khanh Dang', '2020-06-19', '', 1, 1, 93, 12, 1),
(327, 'Mr', 'Le', 'Kim Phung', '2020-06-27', '', 1, 1, 93, 12, 1),
(328, 'Mr', 'Tran', 'Khanh Dang', '2020-06-19', '', 1, 2, 93, 13, 1),
(329, 'Mr', 'Le', 'Kim Phung', '2020-06-27', '', 1, 2, 93, 13, 1),
(330, 'Mr', 'Tran', 'Khanh Dang', '2020-06-26', '', 1, 2, 94, 6, 1),
(331, 'Mr', 'Le', 'Kim Phung', '2020-06-13', '', 1, 2, 94, 6, 1),
(332, 'Mr', 'Tran', 'Khanh Dang', '2020-06-26', '', 1, 1, 94, 13, 8),
(333, 'Mr', 'Le', 'Kim Phung', '2020-06-13', '', 1, 1, 94, 13, 8),
(334, 'Mr', 'Tran', 'Khanh Dang', '2020-06-24', '', 1, 2, 95, 12, 1),
(335, 'Mr', 'Le', 'Kim Phung', '2020-06-25', '', 1, 2, 95, 12, 8),
(336, 'Mr', 'Nguyen', 'HUyen', '2020-06-11', '', 1, 2, 95, 12, 1),
(337, 'Mr', 'Tran', 'Dang', '2020-06-12', '', 1, 2, 95, 12, 1),
(338, 'Mr', 'Tran', 'Khanh Dang', '2020-06-24', '', 1, 1, 95, 13, 1),
(339, 'Mr', 'Le', 'Kim Phung', '2020-06-25', '', 1, 1, 95, 13, 1),
(340, 'Mr', 'Nguyen', 'HUyen', '2020-06-11', '', 1, 1, 95, 13, 8),
(341, 'Mr', 'Tran', 'Dang', '2020-06-12', '', 1, 1, 95, 13, 1),
(342, 'Mr', 'Tran', 'Khanh Dang', '2020-06-18', '', 1, 2, 96, 12, 1),
(343, 'Mr', 'Le', 'Kim Phung', '2020-06-04', '', 1, 2, 96, 12, 1),
(344, 'Mr', 'Nguyen', 'HUyen', '2020-06-12', '', 1, 2, 96, 12, 1),
(345, 'Mr', 'Tran', 'Dang', '2020-07-04', '', 1, 2, 96, 12, 1),
(346, 'Mr', 'Tran', 'Khanh Dang', '2020-06-18', '', 1, 1, 96, 13, 1),
(347, 'Mr', 'Le', 'Kim Phung', '2020-06-04', '', 1, 1, 96, 13, 4),
(348, 'Mr', 'Nguyen', 'HUyen', '2020-06-12', '', 1, 1, 96, 13, 7),
(349, 'Mr', 'Tran', 'Dang', '2020-07-04', '', 1, 1, 96, 13, 1),
(350, 'Mr', 'Tran', 'Khanh Dang', '2020-06-11', '', 1, 2, 97, 12, 1),
(351, 'Mr', 'Le', 'Kim Phung', '2020-06-26', '', 1, 2, 97, 12, 1),
(352, 'Mr', 'Nguyen', 'HUyen', '2020-06-28', '', 1, 2, 97, 12, 8),
(353, 'Mr', 'Tran', 'Dang', '2020-06-07', '', 1, 2, 97, 12, 1),
(354, 'Mr', 'Tran', 'Khanh Dang', '2020-06-11', '', 1, 1, 97, 13, 1),
(355, 'Mr', 'Le', 'Kim Phung', '2020-06-26', '', 1, 1, 97, 13, 1),
(356, 'Mr', 'Nguyen', 'HUyen', '2020-06-28', '', 1, 1, 97, 13, 4),
(357, 'Mr', 'Tran', 'Dang', '2020-06-07', '', 1, 1, 97, 13, 1),
(358, 'Mr', 'Tran', 'Khanh Dang', '2020-06-01', '', 1, 2, 98, 12, 1),
(359, 'Ms', 'Le', 'Kim Phung', '2020-06-12', '', 1, 2, 98, 12, 1),
(360, 'Mr', 'Tran', 'Khanh Dang', '2020-06-01', '', 1, 1, 98, 13, 1),
(361, 'Ms', 'Le', 'Kim Phung', '2020-06-12', '', 1, 1, 98, 13, 1),
(362, 'Mr', 'Tran', 'Khanh Dang', '2020-06-03', '', 1, 2, 99, 12, 1),
(363, 'Ms', 'Le', 'Kim Phung', '2020-06-26', '', 1, 2, 99, 12, 1),
(364, 'Mr', 'Tran', 'Khanh Dang', '2020-06-03', '', 1, 2, 99, 13, 1),
(365, 'Ms', 'Le', 'Kim Phung', '2020-06-26', '', 1, 2, 99, 13, 1),
(366, 'Mr', 'Tran', 'Khanh Dang', '2020-06-01', '', 1, 1, 100, 12, 7),
(367, 'Ms', 'Le', 'Kim Phung', '2020-06-02', '', 1, 1, 100, 12, 7),
(368, 'Mr', 'Nguyen', 'HUyen', '2020-06-01', '', 1, 1, 100, 12, 1),
(369, 'Mr', 'Tran', 'Khanh Dang', '2020-06-01', '', 1, 2, 100, 13, 8),
(370, 'Ms', 'Le', 'Kim Phung', '2020-06-02', '', 1, 2, 100, 13, 8),
(371, 'Mr', 'Nguyen', 'HUyen', '2020-06-01', '', 1, 2, 100, 13, 1),
(372, 'Mr', 'Tran', 'Khanh Dang', '1995-12-12', '', 8, 1, 101, 12, 1),
(373, 'Ms', 'Le', 'Kim Phung', '1998-06-12', '', 8, 1, 101, 12, 1),
(374, 'Mr', 'Nguyen', 'HUyen', '1998-03-19', '', 8, 1, 101, 12, 1),
(375, 'Mr', 'Tran', 'Khanh Dang', '1995-12-12', '', 8, 2, 101, 13, 6),
(376, 'Ms', 'Le', 'Kim Phung', '1998-06-12', '', 8, 2, 101, 13, 4),
(377, 'Mr', 'Nguyen', 'HUyen', '1998-03-19', '', 8, 2, 101, 13, 9),
(378, 'Mr', 'Tran', 'Khanh Dang', '2020-06-10', '', 10, 2, 102, 12, 9),
(379, 'Ms', 'Le', 'Kim Phung', '2020-06-19', '', 10, 2, 102, 12, 6),
(380, 'Mr', 'Nguyen', 'HUyen', '2020-06-17', '', 10, 2, 102, 12, 1),
(381, 'Mr', 'Tran', 'Khanh Dang', '2020-06-10', '', 10, 2, 102, 13, 7),
(382, 'Ms', 'Le', 'Kim Phung', '2020-06-19', '', 10, 2, 102, 13, 1),
(383, 'Mr', 'Nguyen', 'HUyen', '2020-06-17', '', 10, 2, 102, 13, 1),
(384, 'Mr', 'Tran', 'Khanh Dang', '2020-06-01', '', 10, 1, 103, 12, 9),
(385, 'Ms', 'Le', 'Kim Phung', '2020-06-01', '', 10, 1, 103, 12, 1),
(386, 'Mr', 'Nguyen', 'HUyen', '2020-06-08', '', 10, 1, 103, 12, 1),
(387, 'Mr', 'Tran', 'Khanh Dang', '2020-06-01', '', 10, 2, 103, 13, 1),
(388, 'Ms', 'Le', 'Kim Phung', '2020-06-01', '', 10, 2, 103, 13, 4),
(389, 'Mr', 'Nguyen', 'HUyen', '2020-06-08', '', 10, 2, 103, 13, 1),
(390, 'Mr', 'Tran', 'Khanh Dang', '2020-06-09', '', 1, 1, 104, 12, 1),
(391, 'Ms', 'Le', 'Kim Phung', '2020-06-02', '', 1, 1, 104, 12, 1),
(392, 'Mr', 'Nguyen', 'HUyen', '2020-06-30', '', 1, 1, 104, 12, 1),
(393, 'Mr', 'Tran', 'Khanh Dang', '2020-06-09', '', 1, 2, 104, 13, 6),
(394, 'Ms', 'Le', 'Kim Phung', '2020-06-02', '', 1, 2, 104, 13, 8),
(395, 'Mr', 'Nguyen', 'HUyen', '2020-06-30', '', 1, 2, 104, 13, 11),
(396, 'Mr', 'Tran', 'Khanh Dang', '2020-06-03', '', 1, 1, 105, 12, 1),
(397, 'Mr', 'Le', 'Kim Phung', '2020-06-11', '', 1, 1, 105, 12, 4),
(398, 'Mr', 'Nguyen', 'HUyen', '2020-06-20', '', 1, 1, 105, 12, 1),
(399, 'Mr', 'Tran', 'Khanh Dang', '2020-06-03', '', 1, 2, 105, 13, 1),
(400, 'Mr', 'Le', 'Kim Phung', '2020-06-11', '', 1, 2, 105, 13, 8),
(401, 'Mr', 'Nguyen', 'HUyen', '2020-06-20', '', 1, 2, 105, 13, 1),
(402, 'Mr', 'Tran', 'Khanh Dang', '2020-06-10', '', 1, 1, 106, 12, 9),
(403, 'Ms', 'Le', 'Kim Phung', '2020-06-10', '', 1, 1, 106, 12, 9),
(404, 'Mr', 'Nguyen', 'HUyen', '2020-06-25', '', 1, 1, 106, 12, 8),
(405, 'Mr', 'Tran', 'Khanh Dang', '2020-06-10', '', 1, 2, 106, 13, 1),
(406, 'Ms', 'Le', 'Kim Phung', '2020-06-10', '', 1, 2, 106, 13, 1),
(407, 'Mr', 'Nguyen', 'HUyen', '2020-06-25', '', 1, 2, 106, 13, 1),
(408, 'Mr', 'Tran', 'Khanh Dang', '2020-06-20', '', 1, 1, 107, 12, 1),
(409, 'Mr', 'Le', 'Kim Phung', '2020-06-20', '', 1, 1, 107, 12, 6),
(410, 'Mr', 'Nguyen', 'HUyen', '2020-06-25', '', 1, 1, 107, 12, 8),
(411, 'Mr', 'Tran', 'Khanh Dang', '2020-06-20', '', 1, 2, 107, 13, 1),
(412, 'Mr', 'Le', 'Kim Phung', '2020-06-20', '', 1, 2, 107, 13, 1),
(413, 'Mr', 'Nguyen', 'HUyen', '2020-06-25', '', 1, 2, 107, 13, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
 ADD PRIMARY KEY (`bn_ma`);

--
-- Indexes for table `chitiet_ghe`
--
ALTER TABLE `chitiet_ghe`
 ADD PRIMARY KEY (`lv_ma`,`mb_ma`), ADD KEY `mb_ma` (`mb_ma`);

--
-- Indexes for table `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
 ADD PRIMARY KEY (`gh_ma`,`cb_ma`,`lv_ma`), ADD KEY `cb_ma` (`cb_ma`), ADD KEY `lv_ma` (`lv_ma`);

--
-- Indexes for table `chuyen_bay`
--
ALTER TABLE `chuyen_bay`
 ADD PRIMARY KEY (`cb_ma`), ADD KEY `tb_ma` (`tb_ma`), ADD KEY `hv_ma` (`hv_ma`), ADD KEY `mb_ma` (`mb_ma`);

--
-- Indexes for table `dich_vu`
--
ALTER TABLE `dich_vu`
 ADD PRIMARY KEY (`dv_ma`), ADD KEY `lv_ma` (`lv_ma`);

--
-- Indexes for table `ghe_chuyen`
--
ALTER TABLE `ghe_chuyen`
 ADD PRIMARY KEY (`cb_ma`,`lv_ma`,`mb_ma`), ADD KEY `lv_ma` (`lv_ma`), ADD KEY `mb_ma` (`mb_ma`);

--
-- Indexes for table `gia`
--
ALTER TABLE `gia`
 ADD PRIMARY KEY (`cb_ma`,`lv_ma`), ADD KEY `lv_ma` (`lv_ma`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
 ADD PRIMARY KEY (`gh_ma`), ADD KEY `nd_ma` (`nd_ma`);

--
-- Indexes for table `hang_ve`
--
ALTER TABLE `hang_ve`
 ADD PRIMARY KEY (`hv_ma`);

--
-- Indexes for table `hanh_ly`
--
ALTER TABLE `hanh_ly`
 ADD PRIMARY KEY (`hl_ma`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
 ADD PRIMARY KEY (`hd_ma`), ADD KEY `pdv_ma` (`pdv_ma`);

--
-- Indexes for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
 ADD PRIMARY KEY (`km_ma`), ADD UNIQUE KEY `km_code` (`km_code`);

--
-- Indexes for table `loaive_khuyenmai`
--
ALTER TABLE `loaive_khuyenmai`
 ADD PRIMARY KEY (`lv_ma`,`km_ma`), ADD KEY `km_ma` (`km_ma`);

--
-- Indexes for table `loai_ve`
--
ALTER TABLE `loai_ve`
 ADD PRIMARY KEY (`lv_ma`);

--
-- Indexes for table `may_bay`
--
ALTER TABLE `may_bay`
 ADD PRIMARY KEY (`mb_ma`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
 ADD PRIMARY KEY (`nd_ma`);

--
-- Indexes for table `phieu_dat_ve`
--
ALTER TABLE `phieu_dat_ve`
 ADD PRIMARY KEY (`pdv_ma`), ADD KEY `nd_ma` (`nd_ma`), ADD KEY `km_ma` (`km_ma`);

--
-- Indexes for table `san_bay`
--
ALTER TABLE `san_bay`
 ADD PRIMARY KEY (`sb_ma`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
 ADD PRIMARY KEY (`tt_ma`);

--
-- Indexes for table `ti_gia`
--
ALTER TABLE `ti_gia`
 ADD PRIMARY KEY (`tg_ma`);

--
-- Indexes for table `trang_thai`
--
ALTER TABLE `trang_thai`
 ADD PRIMARY KEY (`tt_ma`);

--
-- Indexes for table `tuyenbay_khuyenmai`
--
ALTER TABLE `tuyenbay_khuyenmai`
 ADD PRIMARY KEY (`km_ma`,`tb_ma`), ADD KEY `tb_ma` (`tb_ma`);

--
-- Indexes for table `tuyen_bay`
--
ALTER TABLE `tuyen_bay`
 ADD PRIMARY KEY (`tb_ma`), ADD KEY `sb_ma_di` (`sb_ma_di`), ADD KEY `sb_ma_den` (`sb_ma_den`);

--
-- Indexes for table `ve_may_bay`
--
ALTER TABLE `ve_may_bay`
 ADD PRIMARY KEY (`vmb_ma`), ADD KEY `nd_ma` (`nd_ma`), ADD KEY `lv_ma` (`lv_ma`), ADD KEY `pdv_ma` (`pdv_ma`), ADD KEY `cb_ma` (`cb_ma`), ADD KEY `hl_ma` (`hl_ma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
MODIFY `bn_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `chuyen_bay`
--
ALTER TABLE `chuyen_bay`
MODIFY `cb_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `dich_vu`
--
ALTER TABLE `dich_vu`
MODIFY `dv_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gio_hang`
--
ALTER TABLE `gio_hang`
MODIFY `gh_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hang_ve`
--
ALTER TABLE `hang_ve`
MODIFY `hv_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hanh_ly`
--
ALTER TABLE `hanh_ly`
MODIFY `hl_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
MODIFY `hd_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
MODIFY `km_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `loai_ve`
--
ALTER TABLE `loai_ve`
MODIFY `lv_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `may_bay`
--
ALTER TABLE `may_bay`
MODIFY `mb_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
MODIFY `nd_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `phieu_dat_ve`
--
ALTER TABLE `phieu_dat_ve`
MODIFY `pdv_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `san_bay`
--
ALTER TABLE `san_bay`
MODIFY `sb_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
MODIFY `tt_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `ti_gia`
--
ALTER TABLE `ti_gia`
MODIFY `tg_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `trang_thai`
--
ALTER TABLE `trang_thai`
MODIFY `tt_ma` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tuyen_bay`
--
ALTER TABLE `tuyen_bay`
MODIFY `tb_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ve_may_bay`
--
ALTER TABLE `ve_may_bay`
MODIFY `vmb_ma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=414;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiet_ghe`
--
ALTER TABLE `chitiet_ghe`
ADD CONSTRAINT `chitiet_ghe_ibfk_1` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`),
ADD CONSTRAINT `chitiet_ghe_ibfk_2` FOREIGN KEY (`mb_ma`) REFERENCES `may_bay` (`mb_ma`);

--
-- Constraints for table `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
ADD CONSTRAINT `chitiet_giohang_ibfk_1` FOREIGN KEY (`gh_ma`) REFERENCES `gio_hang` (`gh_ma`),
ADD CONSTRAINT `chitiet_giohang_ibfk_2` FOREIGN KEY (`cb_ma`) REFERENCES `chuyen_bay` (`cb_ma`),
ADD CONSTRAINT `chitiet_giohang_ibfk_3` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`);

--
-- Constraints for table `chuyen_bay`
--
ALTER TABLE `chuyen_bay`
ADD CONSTRAINT `chuyen_bay_ibfk_1` FOREIGN KEY (`tb_ma`) REFERENCES `tuyen_bay` (`tb_ma`),
ADD CONSTRAINT `chuyen_bay_ibfk_2` FOREIGN KEY (`hv_ma`) REFERENCES `hang_ve` (`hv_ma`),
ADD CONSTRAINT `chuyen_bay_ibfk_3` FOREIGN KEY (`mb_ma`) REFERENCES `may_bay` (`mb_ma`);

--
-- Constraints for table `dich_vu`
--
ALTER TABLE `dich_vu`
ADD CONSTRAINT `dich_vu_ibfk_1` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`);

--
-- Constraints for table `ghe_chuyen`
--
ALTER TABLE `ghe_chuyen`
ADD CONSTRAINT `ghe_chuyen_ibfk_1` FOREIGN KEY (`cb_ma`) REFERENCES `chuyen_bay` (`cb_ma`),
ADD CONSTRAINT `ghe_chuyen_ibfk_2` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`),
ADD CONSTRAINT `ghe_chuyen_ibfk_3` FOREIGN KEY (`mb_ma`) REFERENCES `may_bay` (`mb_ma`);

--
-- Constraints for table `gia`
--
ALTER TABLE `gia`
ADD CONSTRAINT `gia_ibfk_1` FOREIGN KEY (`cb_ma`) REFERENCES `chuyen_bay` (`cb_ma`),
ADD CONSTRAINT `gia_ibfk_2` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`);

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
ADD CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`nd_ma`) REFERENCES `nguoi_dung` (`nd_ma`);

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`pdv_ma`) REFERENCES `phieu_dat_ve` (`pdv_ma`);

--
-- Constraints for table `loaive_khuyenmai`
--
ALTER TABLE `loaive_khuyenmai`
ADD CONSTRAINT `loaive_khuyenmai_ibfk_1` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`),
ADD CONSTRAINT `loaive_khuyenmai_ibfk_2` FOREIGN KEY (`km_ma`) REFERENCES `khuyen_mai` (`km_ma`);

--
-- Constraints for table `phieu_dat_ve`
--
ALTER TABLE `phieu_dat_ve`
ADD CONSTRAINT `phieu_dat_ve_ibfk_1` FOREIGN KEY (`nd_ma`) REFERENCES `nguoi_dung` (`nd_ma`),
ADD CONSTRAINT `phieu_dat_ve_ibfk_2` FOREIGN KEY (`km_ma`) REFERENCES `khuyen_mai` (`km_ma`);

--
-- Constraints for table `tuyenbay_khuyenmai`
--
ALTER TABLE `tuyenbay_khuyenmai`
ADD CONSTRAINT `tuyenbay_khuyenmai_ibfk_1` FOREIGN KEY (`km_ma`) REFERENCES `khuyen_mai` (`km_ma`),
ADD CONSTRAINT `tuyenbay_khuyenmai_ibfk_2` FOREIGN KEY (`tb_ma`) REFERENCES `tuyen_bay` (`tb_ma`);

--
-- Constraints for table `tuyen_bay`
--
ALTER TABLE `tuyen_bay`
ADD CONSTRAINT `tuyen_bay_ibfk_1` FOREIGN KEY (`sb_ma_di`) REFERENCES `san_bay` (`sb_ma`),
ADD CONSTRAINT `tuyen_bay_ibfk_2` FOREIGN KEY (`sb_ma_den`) REFERENCES `san_bay` (`sb_ma`);

--
-- Constraints for table `ve_may_bay`
--
ALTER TABLE `ve_may_bay`
ADD CONSTRAINT `ve_may_bay_ibfk_1` FOREIGN KEY (`nd_ma`) REFERENCES `nguoi_dung` (`nd_ma`),
ADD CONSTRAINT `ve_may_bay_ibfk_3` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`),
ADD CONSTRAINT `ve_may_bay_ibfk_4` FOREIGN KEY (`pdv_ma`) REFERENCES `phieu_dat_ve` (`pdv_ma`),
ADD CONSTRAINT `ve_may_bay_ibfk_5` FOREIGN KEY (`cb_ma`) REFERENCES `chuyen_bay` (`cb_ma`),
ADD CONSTRAINT `ve_may_bay_ibfk_6` FOREIGN KEY (`hl_ma`) REFERENCES `hanh_ly` (`hl_ma`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
