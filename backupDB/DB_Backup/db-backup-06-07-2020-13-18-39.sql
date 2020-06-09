DROP TABLE IF EXISTS banner;

CREATE TABLE `banner` (
  `bn_ma` int(11) NOT NULL AUTO_INCREMENT,
  `bn_tieude` varchar(50) NOT NULL,
  `bn_hinh` varchar(500) NOT NULL,
  PRIMARY KEY (`bn_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO banner VALUES("9","hinh1","https://lystravel.com.vn/wp-content/uploads/2015/09/ve-may-bay-banner.jpg");
INSERT INTO banner VALUES("16","nhuan","http://localhost/pttmdt-baocao/admin-test/images/backgroup2.jpg");
INSERT INTO banner VALUES("17","nhuan","http://localhost/pttmdt-baocao/admin-test/images/bg-vfly-banner_637849.png");


DROP TABLE IF EXISTS chitiet_ghe;

CREATE TABLE `chitiet_ghe` (
  `lv_ma` int(11) NOT NULL DEFAULT '0',
  `mb_ma` int(11) NOT NULL DEFAULT '0',
  `so_luong` int(11) DEFAULT NULL,
  PRIMARY KEY (`lv_ma`,`mb_ma`),
  KEY `mb_ma` (`mb_ma`),
  CONSTRAINT `chitiet_ghe_ibfk_1` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`),
  CONSTRAINT `chitiet_ghe_ibfk_2` FOREIGN KEY (`mb_ma`) REFERENCES `may_bay` (`mb_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO chitiet_ghe VALUES("1","1","30");
INSERT INTO chitiet_ghe VALUES("1","2","40");
INSERT INTO chitiet_ghe VALUES("2","1","60");
INSERT INTO chitiet_ghe VALUES("2","2","70");


DROP TABLE IF EXISTS chitiet_giohang;

CREATE TABLE `chitiet_giohang` (
  `gh_ma` int(11) NOT NULL DEFAULT '0',
  `cb_ma` int(11) NOT NULL DEFAULT '0',
  `lv_ma` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gh_ma`,`cb_ma`,`lv_ma`),
  KEY `cb_ma` (`cb_ma`),
  KEY `lv_ma` (`lv_ma`),
  CONSTRAINT `chitiet_giohang_ibfk_1` FOREIGN KEY (`gh_ma`) REFERENCES `gio_hang` (`gh_ma`),
  CONSTRAINT `chitiet_giohang_ibfk_2` FOREIGN KEY (`cb_ma`) REFERENCES `chuyen_bay` (`cb_ma`),
  CONSTRAINT `chitiet_giohang_ibfk_3` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO chitiet_giohang VALUES("1","1","1");
INSERT INTO chitiet_giohang VALUES("1","3","2");
INSERT INTO chitiet_giohang VALUES("1","12","1");
INSERT INTO chitiet_giohang VALUES("1","13","2");


DROP TABLE IF EXISTS chuyen_bay;

CREATE TABLE `chuyen_bay` (
  `cb_ma` int(11) NOT NULL AUTO_INCREMENT,
  `cb_thoidiem` date DEFAULT NULL,
  `cb_tinhtrang` varchar(20) DEFAULT NULL,
  `cb_giocatcanh_dukien` time DEFAULT NULL,
  `cb_giohacanh_dukien` time DEFAULT NULL,
  `cb_giocatcanh_chinhthuc` time DEFAULT NULL,
  `cb_giohacanh_chinhthuc` time DEFAULT NULL,
  `tb_ma` int(11) DEFAULT NULL,
  `hv_ma` int(11) DEFAULT NULL,
  `mb_ma` int(11) DEFAULT NULL,
  PRIMARY KEY (`cb_ma`),
  KEY `tb_ma` (`tb_ma`),
  KEY `hv_ma` (`hv_ma`),
  KEY `mb_ma` (`mb_ma`),
  CONSTRAINT `chuyen_bay_ibfk_1` FOREIGN KEY (`tb_ma`) REFERENCES `tuyen_bay` (`tb_ma`),
  CONSTRAINT `chuyen_bay_ibfk_2` FOREIGN KEY (`hv_ma`) REFERENCES `hang_ve` (`hv_ma`),
  CONSTRAINT `chuyen_bay_ibfk_3` FOREIGN KEY (`mb_ma`) REFERENCES `may_bay` (`mb_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO chuyen_bay VALUES("1","2020-05-30","Còn","07:00:00","09:00:00","07:00:00","09:00:00","2","7","1");
INSERT INTO chuyen_bay VALUES("2","2020-05-30","Còn","07:00:00","09:00:00","07:00:00","09:00:00","2","8","1");
INSERT INTO chuyen_bay VALUES("3","2020-06-02","Còn","07:00:00","09:00:00","07:00:00","09:00:00","2","7","1");
INSERT INTO chuyen_bay VALUES("4","2020-05-31","Còn","07:00:00","09:00:00","07:00:00","09:00:00","4","7","2");
INSERT INTO chuyen_bay VALUES("5","2020-06-11","Còn","08:00:00","10:00:00","08:00:00","10:00:00","2","7","2");
INSERT INTO chuyen_bay VALUES("6","2020-06-11","Còn","11:00:00","13:00:00","11:00:00","13:00:00","2","7","2");
INSERT INTO chuyen_bay VALUES("7","2020-05-31","Còn","12:00:00","15:00:00","12:00:00","15:00:00","3","7","1");
INSERT INTO chuyen_bay VALUES("8","2020-05-15","Còn","11:00:00","13:00:00","11:00:00","13:00:00","2","8","1");
INSERT INTO chuyen_bay VALUES("9","2020-05-17","Còn","13:00:00","15:00:00","13:00:00","15:00:00","2","8","1");
INSERT INTO chuyen_bay VALUES("10","2020-05-28","Còn","13:53:00","15:53:00","13:53:00","15:53:00","2","8","1");
INSERT INTO chuyen_bay VALUES("11","2020-06-03","Còn","13:00:00","15:00:00","13:00:00","15:00:00","2","8","2");
INSERT INTO chuyen_bay VALUES("12","2020-06-11","Còn","14:15:00","16:15:00","14:15:00","16:15:00","2","8","1");
INSERT INTO chuyen_bay VALUES("13","2020-06-11","Còn","15:24:00","17:24:00","15:24:00","17:24:00","4","8","1");


DROP TABLE IF EXISTS dich_vu;

CREATE TABLE `dich_vu` (
  `dv_ma` int(11) NOT NULL AUTO_INCREMENT,
  `dv_ten` varchar(50) DEFAULT NULL,
  `lv_ma` int(11) DEFAULT NULL,
  PRIMARY KEY (`dv_ma`),
  KEY `lv_ma` (`lv_ma`),
  CONSTRAINT `dich_vu_ibfk_1` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO dich_vu VALUES("1","ABC","2");


DROP TABLE IF EXISTS ghe_chuyen;

CREATE TABLE `ghe_chuyen` (
  `cb_ma` int(11) NOT NULL DEFAULT '0',
  `lv_ma` int(11) NOT NULL DEFAULT '0',
  `mb_ma` int(11) NOT NULL DEFAULT '0',
  `so_cho` int(11) DEFAULT NULL,
  PRIMARY KEY (`cb_ma`,`lv_ma`,`mb_ma`),
  KEY `lv_ma` (`lv_ma`),
  KEY `mb_ma` (`mb_ma`),
  CONSTRAINT `ghe_chuyen_ibfk_1` FOREIGN KEY (`cb_ma`) REFERENCES `chuyen_bay` (`cb_ma`),
  CONSTRAINT `ghe_chuyen_ibfk_2` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`),
  CONSTRAINT `ghe_chuyen_ibfk_3` FOREIGN KEY (`mb_ma`) REFERENCES `may_bay` (`mb_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO ghe_chuyen VALUES("1","1","1","30");
INSERT INTO ghe_chuyen VALUES("1","2","1","60");
INSERT INTO ghe_chuyen VALUES("2","1","1","30");
INSERT INTO ghe_chuyen VALUES("2","2","1","60");
INSERT INTO ghe_chuyen VALUES("3","1","2","40");
INSERT INTO ghe_chuyen VALUES("3","2","2","50");
INSERT INTO ghe_chuyen VALUES("5","1","2","40");
INSERT INTO ghe_chuyen VALUES("5","2","2","50");
INSERT INTO ghe_chuyen VALUES("6","1","2","40");
INSERT INTO ghe_chuyen VALUES("6","2","2","45");
INSERT INTO ghe_chuyen VALUES("7","1","1","30");
INSERT INTO ghe_chuyen VALUES("7","2","1","60");
INSERT INTO ghe_chuyen VALUES("8","1","1","30");
INSERT INTO ghe_chuyen VALUES("8","2","1","60");
INSERT INTO ghe_chuyen VALUES("9","1","1","30");
INSERT INTO ghe_chuyen VALUES("9","2","1","60");
INSERT INTO ghe_chuyen VALUES("10","1","1","30");
INSERT INTO ghe_chuyen VALUES("10","2","1","60");
INSERT INTO ghe_chuyen VALUES("11","1","2","40");
INSERT INTO ghe_chuyen VALUES("11","2","2","50");
INSERT INTO ghe_chuyen VALUES("12","1","1","12");
INSERT INTO ghe_chuyen VALUES("12","2","1","38");
INSERT INTO ghe_chuyen VALUES("13","1","1","11");
INSERT INTO ghe_chuyen VALUES("13","2","1","43");


DROP TABLE IF EXISTS gia;

CREATE TABLE `gia` (
  `cb_ma` int(11) NOT NULL DEFAULT '0',
  `lv_ma` int(11) NOT NULL DEFAULT '0',
  `gia` int(11) DEFAULT NULL,
  PRIMARY KEY (`cb_ma`,`lv_ma`),
  KEY `lv_ma` (`lv_ma`),
  CONSTRAINT `gia_ibfk_1` FOREIGN KEY (`cb_ma`) REFERENCES `chuyen_bay` (`cb_ma`),
  CONSTRAINT `gia_ibfk_2` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO gia VALUES("1","1","789000");
INSERT INTO gia VALUES("1","2","600000");
INSERT INTO gia VALUES("2","1","889000");
INSERT INTO gia VALUES("2","2","689000");
INSERT INTO gia VALUES("3","1","900000");
INSERT INTO gia VALUES("3","2","789000");
INSERT INTO gia VALUES("6","1","980000");
INSERT INTO gia VALUES("6","2","660000");
INSERT INTO gia VALUES("9","1","950000");
INSERT INTO gia VALUES("9","2","650000");
INSERT INTO gia VALUES("11","1","890000");
INSERT INTO gia VALUES("11","2","780000");
INSERT INTO gia VALUES("12","1","980000");
INSERT INTO gia VALUES("12","2","790000");
INSERT INTO gia VALUES("13","1","870000");
INSERT INTO gia VALUES("13","2","790000");


DROP TABLE IF EXISTS gio_hang;

CREATE TABLE `gio_hang` (
  `gh_ma` int(11) NOT NULL AUTO_INCREMENT,
  `nd_ma` int(11) DEFAULT NULL,
  PRIMARY KEY (`gh_ma`),
  KEY `nd_ma` (`nd_ma`),
  CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`nd_ma`) REFERENCES `nguoi_dung` (`nd_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO gio_hang VALUES("1","1");
INSERT INTO gio_hang VALUES("6","6");


DROP TABLE IF EXISTS hang_ve;

CREATE TABLE `hang_ve` (
  `hv_ma` int(11) NOT NULL AUTO_INCREMENT,
  `hv_ten` varchar(50) DEFAULT NULL,
  `hv_kihieu` varchar(10) NOT NULL,
  `hv_hinh` varchar(500) NOT NULL,
  PRIMARY KEY (`hv_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO hang_ve VALUES("7","Vietjet","VJ","http://localhost/pttmdt-baocao/admin/image/vj.png");
INSERT INTO hang_ve VALUES("8","VietnamAirlines","VN-AL","http://localhost/pttmdt-baocao/admin/image/vn.png");
INSERT INTO hang_ve VALUES("9","Bamboo","BB","http://localhost/pttmdt-baocao/admin-test/images/qr-ctu.PNG");


DROP TABLE IF EXISTS hanh_ly;

CREATE TABLE `hanh_ly` (
  `hl_ma` int(11) NOT NULL AUTO_INCREMENT,
  `hl_mota` varchar(50) NOT NULL,
  `hl_gia` int(11) NOT NULL,
  PRIMARY KEY (`hl_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO hanh_ly VALUES("1","Tặng 1 kiện 10 > 15kg","0");
INSERT INTO hanh_ly VALUES("3","Mua thêm 5kg","230000");
INSERT INTO hanh_ly VALUES("4","Mua thêm 10kg","260000");
INSERT INTO hanh_ly VALUES("6","Mua thêm 15kg","360000");
INSERT INTO hanh_ly VALUES("7","Mua thêm 20kg","420000");
INSERT INTO hanh_ly VALUES("8","Mua thêm 25kg","840000");
INSERT INTO hanh_ly VALUES("9","Mua thêm 30kg","1080000");
INSERT INTO hanh_ly VALUES("10","Mua thêm 35kg","1320000");
INSERT INTO hanh_ly VALUES("11","Mua thêm 40kg","1560000");


DROP TABLE IF EXISTS hoa_don;

CREATE TABLE `hoa_don` (
  `hd_ma` int(11) NOT NULL AUTO_INCREMENT,
  `hd_tongtien` int(11) DEFAULT NULL,
  `hd_ngaylap` datetime DEFAULT NULL,
  `pdv_ma` int(11) DEFAULT NULL,
  PRIMARY KEY (`hd_ma`),
  KEY `pdv_ma` (`pdv_ma`),
  CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`pdv_ma`) REFERENCES `phieu_dat_ve` (`pdv_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS khuyen_mai;

CREATE TABLE `khuyen_mai` (
  `km_ma` int(11) NOT NULL AUTO_INCREMENT,
  `km_ten` varchar(50) DEFAULT NULL,
  `km_mota` varchar(500) NOT NULL,
  `km_tgbatdau` datetime DEFAULT NULL,
  `km_tgketthuc` datetime DEFAULT NULL,
  `km_giatri` float NOT NULL,
  PRIMARY KEY (`km_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO khuyen_mai VALUES("1","TP HCM - Hà Nội ","Tất cả chuyến bay từ thành phố Hồ Chí Minh đến Hà Nội được giảm giá 10% ","2020-05-28 00:00:00","2020-06-15 00:00:00","0.1");
INSERT INTO khuyen_mai VALUES("2","Thương gia","Tất cả hành khách thương gia được giảm giá chuyến bay 5%","2020-06-01 00:00:00","2020-06-15 00:00:00","0.05");
INSERT INTO khuyen_mai VALUES("3","Thương gia","Tất cả hành khách thương gia được giảm giá chuyến bay 5%","2020-06-01 00:00:00","2020-06-15 00:00:00","0.05");


DROP TABLE IF EXISTS loai_ve;

CREATE TABLE `loai_ve` (
  `lv_ma` int(11) NOT NULL AUTO_INCREMENT,
  `lv_ten` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`lv_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO loai_ve VALUES("1","Thương gia");
INSERT INTO loai_ve VALUES("2","Phổ thông");


DROP TABLE IF EXISTS loaive_khuyenmai;

CREATE TABLE `loaive_khuyenmai` (
  `lv_ma` int(11) NOT NULL DEFAULT '0',
  `km_ma` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`lv_ma`,`km_ma`),
  KEY `km_ma` (`km_ma`),
  CONSTRAINT `loaive_khuyenmai_ibfk_1` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`),
  CONSTRAINT `loaive_khuyenmai_ibfk_2` FOREIGN KEY (`km_ma`) REFERENCES `khuyen_mai` (`km_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO loaive_khuyenmai VALUES("1","2");


DROP TABLE IF EXISTS may_bay;

CREATE TABLE `may_bay` (
  `mb_ma` int(11) NOT NULL AUTO_INCREMENT,
  `mb_ten` varchar(50) DEFAULT NULL,
  `mb_soghe` int(11) DEFAULT NULL,
  `mb_namsanxuat` int(11) DEFAULT NULL,
  PRIMARY KEY (`mb_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO may_bay VALUES("1","Boeing-777","200","2010");
INSERT INTO may_bay VALUES("2","MH-370","200","2000");


DROP TABLE IF EXISTS nguoi_dung;

CREATE TABLE `nguoi_dung` (
  `nd_ma` int(11) NOT NULL AUTO_INCREMENT,
  `nd_ten` varchar(30) DEFAULT NULL,
  `nd_sdt` int(11) DEFAULT NULL,
  `nd_diachi` varchar(100) DEFAULT NULL,
  `nd_gioitinh` varchar(4) DEFAULT NULL,
  `nd_mail` varchar(50) DEFAULT NULL,
  `nd_taikhoan` varchar(50) DEFAULT NULL,
  `nd_matkhau` varchar(50) DEFAULT NULL,
  `nd_phanquyen` varchar(50) DEFAULT NULL,
  `nd_vip` int(11) DEFAULT '0',
  PRIMARY KEY (`nd_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO nguoi_dung VALUES("1","Tran Khanh Dang","392629620","123","1","123@gmail.com","dang","e10adc3949ba59abbe56e057f20f883e","0","0");
INSERT INTO nguoi_dung VALUES("2","Admin","","","","","admin","21232f297a57a5a743894a0e4a801fc3","1","0");
INSERT INTO nguoi_dung VALUES("3","A B C D","123456789","can tho","Nam","abcd@gmail.com","abcd","81dc9bdb52d04dc20036dbd8313ed055","0","0");
INSERT INTO nguoi_dung VALUES("4","huyen","23456789","can tho","Nữ","huyen@gmail.com","huyen","d856125d827ac297307baf299a8ee1f1","0","0");
INSERT INTO nguoi_dung VALUES("5","huyen","234567892","can tho","Nữ","hau@gmail.com","hau","a23ed18c6f9425dc306fc002e5c2046e","0","0");
INSERT INTO nguoi_dung VALUES("6","huyen","234567892","can tho","Nữ","hau1@gmail.com","hau1","297073c16baff9394f04e2051b801ebf","0","0");


DROP TABLE IF EXISTS phieu_dat_ve;

CREATE TABLE `phieu_dat_ve` (
  `pdv_ma` int(11) NOT NULL AUTO_INCREMENT,
  `pdv_sove` int(11) DEFAULT NULL,
  `pdv_khuhoi` int(11) NOT NULL,
  `pdv_ghichu` varchar(500) NOT NULL,
  `pdv_tongve` int(11) NOT NULL,
  `pdv_tonghl` int(11) NOT NULL,
  `nd_ma` int(11) DEFAULT NULL,
  `km_ma` int(11) DEFAULT NULL,
  PRIMARY KEY (`pdv_ma`),
  KEY `nd_ma` (`nd_ma`),
  KEY `km_ma` (`km_ma`),
  CONSTRAINT `phieu_dat_ve_ibfk_1` FOREIGN KEY (`nd_ma`) REFERENCES `nguoi_dung` (`nd_ma`),
  CONSTRAINT `phieu_dat_ve_ibfk_2` FOREIGN KEY (`km_ma`) REFERENCES `khuyen_mai` (`km_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

INSERT INTO phieu_dat_ve VALUES("61","2","1","abcd","5670000","0","1","1");
INSERT INTO phieu_dat_ve VALUES("62","4","1","nhẹ tay nhe","0","0","1","1");
INSERT INTO phieu_dat_ve VALUES("63","4","1","nhẹ tay nhe","123456789","0","1","1");
INSERT INTO phieu_dat_ve VALUES("64","4","1","nhẹ tay nhe","123456789","0","4","1");
INSERT INTO phieu_dat_ve VALUES("65","4","1","gfdfghdfg","123456789","0","4","1");
INSERT INTO phieu_dat_ve VALUES("66","4","1","nhẹ tay nhe","2147483647","0","4","1");
INSERT INTO phieu_dat_ve VALUES("67","4","1","ád","0","0","4","1");
INSERT INTO phieu_dat_ve VALUES("68","2","0","nhẹ tay nhe","0","0","4","1");
INSERT INTO phieu_dat_ve VALUES("69","2","0","","0","0","4","1");
INSERT INTO phieu_dat_ve VALUES("70","1","0","","0","0","4","1");
INSERT INTO phieu_dat_ve VALUES("71","2","0","","0","0","4","1");
INSERT INTO phieu_dat_ve VALUES("72","2","0","nhẹ tay nhe","0","0","4","1");
INSERT INTO phieu_dat_ve VALUES("73","4","1","","0","0","4","1");
INSERT INTO phieu_dat_ve VALUES("74","4","1","nhẹ tay nhe","1404000","1200000","4","1");
INSERT INTO phieu_dat_ve VALUES("75","6","1","nhẹ tay nhe","1548000","123456","1","1");
INSERT INTO phieu_dat_ve VALUES("76","4","1","nhẹ tay nhe","1404000","0","1","1");
INSERT INTO phieu_dat_ve VALUES("77","4","1","","1404000","1200000","1","1");
INSERT INTO phieu_dat_ve VALUES("78","2","0","","1352400","0","1","1");
INSERT INTO phieu_dat_ve VALUES("79","6","1","abc","2528400","1620000","1","1");
INSERT INTO phieu_dat_ve VALUES("80","6","1","","2244600","0","1","1");
INSERT INTO phieu_dat_ve VALUES("81","6","1","","2244600","0","1","1");
INSERT INTO phieu_dat_ve VALUES("82","6","1","","2244600","0","1","1");
INSERT INTO phieu_dat_ve VALUES("83","6","1","","2244600","0","1","1");
INSERT INTO phieu_dat_ve VALUES("84","6","1","","2244600","0","1","1");
INSERT INTO phieu_dat_ve VALUES("85","6","1","","2038200","0","1","1");
INSERT INTO phieu_dat_ve VALUES("86","6","1","","2244600","0","1","1");
INSERT INTO phieu_dat_ve VALUES("87","6","1","","2244600","0","1","1");
INSERT INTO phieu_dat_ve VALUES("88","4","1","","2293200","1080000","1","1");
INSERT INTO phieu_dat_ve VALUES("89","4","1","","2293200","0","1","1");
INSERT INTO phieu_dat_ve VALUES("90","4","1","","2293200","0","1","1");
INSERT INTO phieu_dat_ve VALUES("91","4","1","","2293200","0","1","1");
INSERT INTO phieu_dat_ve VALUES("92","4","1","","2293200","0","1","1");
INSERT INTO phieu_dat_ve VALUES("93","4","1","","2293200","0","1","1");
INSERT INTO phieu_dat_ve VALUES("94","4","1","","1544400","1680000","1","1");
INSERT INTO phieu_dat_ve VALUES("95","8","1","","2938800","1680000","1","1");
INSERT INTO phieu_dat_ve VALUES("96","8","1","","2938800","680000","1","1");
INSERT INTO phieu_dat_ve VALUES("97","8","1","","6175200","1100000","1","1");
INSERT INTO phieu_dat_ve VALUES("98","4","1","","2390400","0","1","1");
INSERT INTO phieu_dat_ve VALUES("99","4","1","","2275200","0","1","1");
INSERT INTO phieu_dat_ve VALUES("100","6","1","","4566600","2520000","1","1");


DROP TABLE IF EXISTS san_bay;

CREATE TABLE `san_bay` (
  `sb_ma` int(11) NOT NULL AUTO_INCREMENT,
  `sb_ten` varchar(50) DEFAULT NULL,
  `sb_diachi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sb_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO san_bay VALUES("1","Tân Sơn Nhất","TP.HCM");
INSERT INTO san_bay VALUES("2","Nội Bài","Hà Nội");
INSERT INTO san_bay VALUES("3","Trà Nóc","Cần Thơ");


DROP TABLE IF EXISTS ti_gia;

CREATE TABLE `ti_gia` (
  `tg_ma` int(11) NOT NULL AUTO_INCREMENT,
  `tg_ten` varchar(50) DEFAULT NULL,
  `tg_donvi` varchar(50) DEFAULT NULL,
  `tg_tigia` float DEFAULT NULL,
  PRIMARY KEY (`tg_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO ti_gia VALUES("1","Việt Nam Đồng","Đ","1");
INSERT INTO ti_gia VALUES("6","Dollars","$","0.000043");
INSERT INTO ti_gia VALUES("7","Euro","€","0.000039");
INSERT INTO ti_gia VALUES("8","British pound","£","0.000034");
INSERT INTO ti_gia VALUES("9","Japanese Yen","¥","0.0047");


DROP TABLE IF EXISTS tin_tuc;

CREATE TABLE `tin_tuc` (
  `tt_ma` int(11) NOT NULL AUTO_INCREMENT,
  `tt_tieude` varchar(300) NOT NULL,
  `tt_noidung` varchar(5000) NOT NULL,
  `tt_ngaygio` datetime NOT NULL,
  `tt_hinhanh` varchar(500) NOT NULL,
  `tt_mota` varchar(400) NOT NULL,
  PRIMARY KEY (`tt_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO tin_tuc VALUES("2","Các điểm du lịch nổi tiếng gần Sài Gòn","<div class=\"newscontetn\" style=\"border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 0px 0px 10px; padding: 0px; position: relative; width: 810px; color: #454545; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">\n<div class=\"content\" style=\"border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 0px 0px 20px; padding: 10px 0px; float: left; min-height: 900px; text-align: justify; width: 810px;\">\n<div class=\"description\" style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px auto; padding: 5px; width: 785.7px; overflow: auto;\">\n<h2 style=\"color: #0f8dcc; font-size: 18px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px; text-decoration-line: underline; line-height: 28px;\"><strong style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px;\">1. L&agrave;ng nổi T&acirc;n Lập gần S&agrave;i G&ograve;n gi&aacute; rẻ nổi tiếng</strong></h2>\n<p style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;\">L&agrave;ng nổi T&acirc;n Lập nằm ngay trung t&acirc;m của th&agrave;nh phố Đồng Th&aacute;p Mười, l&agrave;ng nổi T&acirc;n Lập l&agrave; điểm đến du lịch y&ecirc;u th&iacute;ch của nhiều giới, trẻ hiện nay.</p>\n<p style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;\" align=\"center\"><img src=\"https://vietnamairlinesvn.com/image/data/khu-du-lich-buu-long.jpg\" alt=\"Khu du lịch Bửu Long\" /></p>\n<p style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;\">Sở hữu với diện t&iacute;ch tr&ecirc;n 135ha, l&agrave;ng nổi T&acirc;n Lập đ&atilde; trở th&agrave;nh địa điểm, quy hoạch hoặc th&agrave;nh khu du lịch, đặc trưng của thị x&atilde; Long An v&agrave; của v&ugrave;ng đất ngập nước của Đồng Th&aacute;p Mười. Đến với nơi đ&acirc;y, bạn sẽ cảm nhận hết n&eacute;t đặc trưng của khung cảnh thi&ecirc;n nhi&ecirc;n khu vực đồng bằng s&ocirc;ng nước Nam Bộ. Trong điểm tham quan T&acirc;n Lập c&oacute; 5ha l&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh khu vui chơi giải( nh&agrave; nghỉ, qu&aacute;n l&yacute;, khu bến thuyền, khu c&ocirc;ng vi&ecirc;n). Diện t&iacute;ch C&ograve;n lại l&agrave; 130ha rừng tr&agrave;m bạn c&oacute; thể kh&aacute;m ph&aacute; trải nghiệm cảnh quan trong rừng bằng chiếc xuồng hoặc đi bộ.</p>\n<h2 style=\"color: #0f8dcc; font-size: 18px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px; text-decoration-line: underline; line-height: 28px;\"><strong style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px;\">2. Khu du lịch Bửu Long</strong></h2>\n<p style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;\">Bửu Long nằm c&aacute;ch trung t&acirc;m TP Bi&ecirc;n H&ograve;a độ khoảng 6km, v&agrave; nơi đ&acirc;y sở hữu bởi khung cảnh của sự b&igrave;nh y&ecirc;n v&agrave; vẻ đẹp hoang sơ. Tất cả n&eacute;t đẹp tr&ecirc;n đ&atilde; tạo sự quyến rũ của kh&ocirc;ng gian thi&ecirc;n nhi&ecirc;n tươi đẹp.</p>\n<p style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;\" align=\"center\"><img src=\"https://mtrend.vn/wp-content/uploads/2017/04/hinh-xam-nho-ma-dep.jpg\" alt=\"Những h&igrave;nh xăm nhỏ đẹp cho nữ đầy tinh tế &ndash; mTrend Việt Nam\" /></p>\n<p style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;\">Nếu bạn đang muốn lựa chọn địa điểm du ngoạn đẹp v&agrave; tận hưởng một ng&agrave;y cuối tuần th&uacute; vị th&igrave; chắc chắn rằng điểm tham quan Bửu Long sẽ l&agrave; lựa chọn tuyệt vời nhất.Đ&acirc;y l&agrave; địa điểm tham quan tuyệt vời khi đứng từ tr&ecirc;n cao để tự sướng, bạn sẽ thu v&agrave;o to&agrave;n khung cảnh th&agrave;nh phố biển Bi&ecirc;n H&ograve;a b&ecirc;n d</p>\n</div>\n</div>\n</div>","0000-00-00 00:00:00","https://vietnamairlinesvn.com/image/data/cac-diem-du-lich-noi-tieng-gan-sai-gon-thumb.jpg","Sân bay Đà Nẵng San bay Da Nang Sân bay quốc tế Đà Nẵng (mã sân bay: DAD) là cảng hàng không l");
INSERT INTO tin_tuc VALUES("3","Các điểm du lịch Thái Lan hấp dẫn","<p>Th&aacute;i Lan được mọi người biết đến với gọi một thi&ecirc;n đường mua sắm, c&aacute;c điểm du lịch tại Th&aacute;i Lan lu&ocirc;n</p>","2020-04-16 09:16:20","https://vietnamairlinesvn.com/image/data/thai-lan.jpg","Thái Lan được mọi người biết đến với gọi một thiên đường mua sắm, các điểm du lịch tại Thái Lan luôn");
INSERT INTO tin_tuc VALUES("16","Các điểm du lịch nổi tiếng gần Sài Gòn","<div class=\"newscontetn\" style=\"border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 0px 0px 10px; padding: 0px; position: relative; width: 810px; color: #454545; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">\n<div class=\"content\" style=\"border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 0px 0px 20px; padding: 10px 0px; float: left; min-height: 900px; text-align: justify; width: 810px;\">\n<div class=\"description\" style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px auto; padding: 5px; width: 785.7px; overflow: auto;\">\n<h2 style=\"color: #0f8dcc; font-size: 18px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px; text-decoration-line: underline; line-height: 28px;\"><strong style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px;\">1. L&agrave;ng nổi T&acirc;n Lập gần S&agrave;i G&ograve;n gi&aacute; rẻ nổi tiếng</strong></h2>\n<p style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;\">L&agrave;ng nổi T&acirc;n Lập nằm ngay trung t&acirc;m của th&agrave;nh phố Đồng Th&aacute;p Mười, l&agrave;ng nổi T&acirc;n Lập l&agrave; điểm đến du lịch y&ecirc;u th&iacute;ch của nhiều giới, trẻ hiện nay.</p>\n<p style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;\" align=\"center\"><img src=\"https://vietnamairlinesvn.com/image/data/khu-du-lich-buu-long.jpg\" alt=\"Khu du lịch Bửu Long\" /></p>\n<p style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;\">Sở hữu với diện t&iacute;ch tr&ecirc;n 135ha, l&agrave;ng nổi T&acirc;n Lập đ&atilde; trở th&agrave;nh địa điểm, quy hoạch hoặc th&agrave;nh khu du lịch, đặc trưng của thị x&atilde; Long An v&agrave; của v&ugrave;ng đất ngập nước của Đồng Th&aacute;p Mười. Đến với nơi đ&acirc;y, bạn sẽ cảm nhận hết n&eacute;t đặc trưng của khung cảnh thi&ecirc;n nhi&ecirc;n khu vực đồng bằng s&ocirc;ng nước Nam Bộ. Trong điểm tham quan T&acirc;n Lập c&oacute; 5ha l&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh khu vui chơi giải( nh&agrave; nghỉ, qu&aacute;n l&yacute;, khu bến thuyền, khu c&ocirc;ng vi&ecirc;n). Diện t&iacute;ch C&ograve;n lại l&agrave; 130ha rừng tr&agrave;m bạn c&oacute; thể kh&aacute;m ph&aacute; trải nghiệm cảnh quan trong rừng bằng chiếc xuồng hoặc đi bộ.</p>\n<h2 style=\"color: #0f8dcc; font-size: 18px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px; text-decoration-line: underline; line-height: 28px;\"><strong style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 0px; padding: 0px;\">2. Khu du lịch Bửu Long</strong></h2>\n<p style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;\">Bửu Long nằm c&aacute;ch trung t&acirc;m TP Bi&ecirc;n H&ograve;a độ khoảng 6km, v&agrave; nơi đ&acirc;y sở hữu bởi khung cảnh của sự b&igrave;nh y&ecirc;n v&agrave; vẻ đẹp hoang sơ. Tất cả n&eacute;t đẹp tr&ecirc;n đ&atilde; tạo sự quyến rũ của kh&ocirc;ng gian thi&ecirc;n nhi&ecirc;n tươi đẹp.</p>\n<p style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;\" align=\"center\"><img src=\"https://mtrend.vn/wp-content/uploads/2017/04/hinh-xam-nho-ma-dep.jpg\" alt=\"Những h&igrave;nh xăm nhỏ đẹp cho nữ đầy tinh tế &ndash; mTrend Việt Nam\" /></p>\n<p style=\"border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; margin: 10px 0px; padding: 0px; color: #545454; line-height: 1.5em;\">Nếu bạn đang muốn lựa chọn địa điểm du ngoạn đẹp v&agrave; tận hưởng một ng&agrave;y cuối tuần th&uacute; vị th&igrave; chắc chắn rằng điểm tham quan Bửu Long sẽ l&agrave; lựa chọn tuyệt vời nhất.Đ&acirc;y l&agrave; địa điểm tham quan tuyệt vời khi đứng từ tr&ecirc;n cao để tự sướng, bạn sẽ thu v&agrave;o to&agrave;n khung cảnh th&agrave;nh phố biển Bi&ecirc;n H&ograve;a b&ecirc;n d</p>\n</div>\n</div>\n</div>","0000-00-00 00:00:00","https://vietnamairlinesvn.com/image/data/cac-diem-du-lich-noi-tieng-gan-sai-gon-thumb.jpg","Sân bay Đà Nẵng San bay Da Nang Sân bay quốc tế Đà Nẵng (mã sân bay: DAD) là cảng hàng không l");
INSERT INTO tin_tuc VALUES("17","Các điểm du lịch Thái Lan hấp dẫn","<p>Th&aacute;i Lan được mọi người biết đến với gọi một thi&ecirc;n đường mua sắm, c&aacute;c điểm du lịch tại Th&aacute;i Lan lu&ocirc;n</p>","2020-04-16 09:16:20","https://vietnamairlinesvn.com/image/data/thai-lan.jpg","Thái Lan được mọi người biết đến với gọi một thiên đường mua sắm, các điểm du lịch tại Thái Lan luôn");


DROP TABLE IF EXISTS tuyen_bay;

CREATE TABLE `tuyen_bay` (
  `tb_ma` int(11) NOT NULL AUTO_INCREMENT,
  `tb_ten` varchar(100) NOT NULL,
  `tb_tansuat` varchar(50) DEFAULT NULL,
  `tb_hanhtrinh` varchar(50) DEFAULT NULL,
  `sb_ma_di` int(11) DEFAULT NULL,
  `sb_ma_den` int(11) DEFAULT NULL,
  PRIMARY KEY (`tb_ma`),
  KEY `sb_ma_di` (`sb_ma_di`),
  KEY `sb_ma_den` (`sb_ma_den`),
  CONSTRAINT `tuyen_bay_ibfk_1` FOREIGN KEY (`sb_ma_di`) REFERENCES `san_bay` (`sb_ma`),
  CONSTRAINT `tuyen_bay_ibfk_2` FOREIGN KEY (`sb_ma_den`) REFERENCES `san_bay` (`sb_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO tuyen_bay VALUES("2","TP.HCM - Hà Nội","Thứ 2, Thứ 4, Thứ 6","02:00","1","2");
INSERT INTO tuyen_bay VALUES("3","Cần Thơ - TP.HCM","Thứ 3, Thứ 5, Thứ 7","01:00","3","1");
INSERT INTO tuyen_bay VALUES("4","Hà Nội - TP.HCM","Thứ 3, Thứ 5, Thứ 7","02:00","2","1");
INSERT INTO tuyen_bay VALUES("5","TP.HCM - Cần Thơ","Thứ 2, Thứ 4, Thứ 6","02:00","1","3");


DROP TABLE IF EXISTS tuyenbay_khuyenmai;

CREATE TABLE `tuyenbay_khuyenmai` (
  `km_ma` int(11) NOT NULL DEFAULT '0',
  `tb_ma` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`km_ma`,`tb_ma`),
  KEY `tb_ma` (`tb_ma`),
  CONSTRAINT `tuyenbay_khuyenmai_ibfk_1` FOREIGN KEY (`km_ma`) REFERENCES `khuyen_mai` (`km_ma`),
  CONSTRAINT `tuyenbay_khuyenmai_ibfk_2` FOREIGN KEY (`tb_ma`) REFERENCES `tuyen_bay` (`tb_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO tuyenbay_khuyenmai VALUES("1","2");


DROP TABLE IF EXISTS ve_may_bay;

CREATE TABLE `ve_may_bay` (
  `vmb_ma` int(11) NOT NULL AUTO_INCREMENT,
  `vmb_quydanh` varchar(20) NOT NULL,
  `vmb_ho` varchar(50) DEFAULT NULL,
  `vmb_ten` varchar(50) DEFAULT NULL,
  `vmb_ngaysinh` date NOT NULL,
  `vmb_soghe` varchar(50) DEFAULT NULL,
  `nd_ma` int(11) DEFAULT NULL,
  `lv_ma` int(11) DEFAULT NULL,
  `pdv_ma` int(11) DEFAULT NULL,
  `cb_ma` int(11) DEFAULT NULL,
  `hl_ma` int(11) NOT NULL,
  PRIMARY KEY (`vmb_ma`),
  KEY `nd_ma` (`nd_ma`),
  KEY `lv_ma` (`lv_ma`),
  KEY `pdv_ma` (`pdv_ma`),
  KEY `cb_ma` (`cb_ma`),
  KEY `hl_ma` (`hl_ma`),
  CONSTRAINT `ve_may_bay_ibfk_1` FOREIGN KEY (`nd_ma`) REFERENCES `nguoi_dung` (`nd_ma`),
  CONSTRAINT `ve_may_bay_ibfk_3` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`),
  CONSTRAINT `ve_may_bay_ibfk_4` FOREIGN KEY (`pdv_ma`) REFERENCES `phieu_dat_ve` (`pdv_ma`),
  CONSTRAINT `ve_may_bay_ibfk_5` FOREIGN KEY (`cb_ma`) REFERENCES `chuyen_bay` (`cb_ma`),
  CONSTRAINT `ve_may_bay_ibfk_6` FOREIGN KEY (`hl_ma`) REFERENCES `hanh_ly` (`hl_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=372 DEFAULT CHARSET=utf8;

INSERT INTO ve_may_bay VALUES("195","Mr","Tran","Khanh Dang","2020-05-07","","1","2","62","1","1");
INSERT INTO ve_may_bay VALUES("196","Mr","Le","Kim Phung","2020-05-06","","1","2","62","1","8");
INSERT INTO ve_may_bay VALUES("197","Mr","Tran","Khanh Dang","2020-05-07","","1","1","62","3","1");
INSERT INTO ve_may_bay VALUES("198","Mr","Le","Kim Phung","2020-05-06","","1","1","62","3","9");
INSERT INTO ve_may_bay VALUES("199","Mr","Tran","Khanh Dang","2020-05-13","","1","2","63","1","6");
INSERT INTO ve_may_bay VALUES("200","Mr","Le","Kim Phung","2020-05-14","","1","2","63","1","8");
INSERT INTO ve_may_bay VALUES("201","Mr","Tran","Khanh Dang","2020-05-13","","1","1","63","3","8");
INSERT INTO ve_may_bay VALUES("202","Mr","Le","Kim Phung","2020-05-14","","1","1","63","3","10");
INSERT INTO ve_may_bay VALUES("203","Mr","Tran","Khanh Dang","2020-05-14","","4","2","64","1","1");
INSERT INTO ve_may_bay VALUES("204","Mr","Le","Kim Phung","2020-05-15","","4","2","64","1","8");
INSERT INTO ve_may_bay VALUES("205","Mr","Tran","Khanh Dang","2020-05-14","","4","1","64","3","1");
INSERT INTO ve_may_bay VALUES("206","Mr","Le","Kim Phung","2020-05-15","","4","1","64","3","1");
INSERT INTO ve_may_bay VALUES("207","Mr","Tran","Khanh Dang","2020-05-14","","4","2","65","1","1");
INSERT INTO ve_may_bay VALUES("208","Mr","Le","Kim Phung","2020-05-29","","4","2","65","1","8");
INSERT INTO ve_may_bay VALUES("209","Mr","Tran","Khanh Dang","2020-05-14","","4","1","65","3","1");
INSERT INTO ve_may_bay VALUES("210","Mr","Le","Kim Phung","2020-05-29","","4","1","65","3","1");
INSERT INTO ve_may_bay VALUES("211","Mr","Tran","Khanh Dang","2020-05-21","","4","2","66","1","1");
INSERT INTO ve_may_bay VALUES("212","Mr","Le","Phung","2020-04-29","","4","2","66","1","8");
INSERT INTO ve_may_bay VALUES("213","Mr","Tran","Khanh Dang","2020-05-21","","4","1","66","3","1");
INSERT INTO ve_may_bay VALUES("214","Mr","Le","Phung","2020-04-29","","4","1","66","3","1");
INSERT INTO ve_may_bay VALUES("215","Mr","Tran","abc","2020-05-01","","4","2","67","1","1");
INSERT INTO ve_may_bay VALUES("216","Mr","Le","Kim Phung","2020-05-21","","4","2","67","1","8");
INSERT INTO ve_may_bay VALUES("217","Mr","Tran","abc","2020-05-01","","4","1","67","3","1");
INSERT INTO ve_may_bay VALUES("218","Mr","Le","Kim Phung","2020-05-21","","4","1","67","3","1");
INSERT INTO ve_may_bay VALUES("219","Mr","Tran","Khanh Dang","2020-05-07","","4","2","68","1","1");
INSERT INTO ve_may_bay VALUES("220","Mr","Le","Kim Phung","2020-05-15","","4","2","68","1","8");
INSERT INTO ve_may_bay VALUES("221","Mr","Tran","Khanh Dang","2020-05-07","","4","2","69","1","1");
INSERT INTO ve_may_bay VALUES("222","Mr","Le","Kim Phung","2020-05-15","","4","2","69","1","1");
INSERT INTO ve_may_bay VALUES("223","Mr","Tran","Khanh Dang","2020-05-27","","4","1","70","1","1");
INSERT INTO ve_may_bay VALUES("224","Mr","Tran","Khanh Dang","2020-05-20","","4","2","71","1","1");
INSERT INTO ve_may_bay VALUES("225","Mr","Le","Kim Phung","2020-05-22","","4","2","71","1","9");
INSERT INTO ve_may_bay VALUES("226","Mr","Tran","Khanh Dang","2020-05-07","","4","1","72","1","1");
INSERT INTO ve_may_bay VALUES("227","Mr","Le","Kim Phung","2020-05-08","","4","1","72","1","10");
INSERT INTO ve_may_bay VALUES("232","Mr","Tran","Khanh Dang","2020-05-14","","4","2","74","1","1");
INSERT INTO ve_may_bay VALUES("233","Ms","Le","Kim Phung","2020-05-07","","4","2","74","1","8");
INSERT INTO ve_may_bay VALUES("234","Mr","Tran","Khanh Dang","2020-05-14","","4","1","74","3","1");
INSERT INTO ve_may_bay VALUES("235","Ms","Le","Kim Phung","2020-05-07","","4","1","74","3","9");
INSERT INTO ve_may_bay VALUES("236","Mr","Tran","Khanh Dang","2020-05-30","","1","2","75","1","1");
INSERT INTO ve_may_bay VALUES("237","Mr","Le","Kim Phung","2020-05-30","","1","2","75","1","4");
INSERT INTO ve_may_bay VALUES("238","Mr","Nguyen","HUyen","2020-05-07","","1","2","75","1","8");
INSERT INTO ve_may_bay VALUES("239","Mr","Tran","Khanh Dang","2020-05-30","","1","1","75","3","1");
INSERT INTO ve_may_bay VALUES("240","Mr","Le","Kim Phung","2020-05-30","","1","1","75","3","1");
INSERT INTO ve_may_bay VALUES("241","Mr","Nguyen","HUyen","2020-05-07","","1","1","75","3","7");
INSERT INTO ve_may_bay VALUES("242","Mr","Tran","Khanh Dang","2020-05-15","","1","2","76","1","1");
INSERT INTO ve_may_bay VALUES("243","Ms","Le","Phung","2020-05-14","","1","2","76","1","4");
INSERT INTO ve_may_bay VALUES("244","Mr","Tran","Khanh Dang","2020-05-15","","1","1","76","3","6");
INSERT INTO ve_may_bay VALUES("245","Ms","Le","Phung","2020-05-14","","1","1","76","3","9");
INSERT INTO ve_may_bay VALUES("246","Mr","Tran","Khanh Dang","2020-05-14","","1","2","77","1","1");
INSERT INTO ve_may_bay VALUES("247","Mr","Le","Kim Phung","2020-05-22","","1","2","77","1","6");
INSERT INTO ve_may_bay VALUES("248","Mr","Tran","Khanh Dang","2020-05-14","","1","2","77","3","1");
INSERT INTO ve_may_bay VALUES("249","Mr","Le","Kim Phung","2020-05-22","","1","2","77","3","8");
INSERT INTO ve_may_bay VALUES("250","Mr","Tran","Khanh Dang","2020-05-13","","1","1","78","6","3");
INSERT INTO ve_may_bay VALUES("252","Mr","Tran","Khanh Dang","2020-05-13","","1","1","79","6","1");
INSERT INTO ve_may_bay VALUES("253","Mr","Le","Kim Phung","2020-05-05","","1","1","79","6","7");
INSERT INTO ve_may_bay VALUES("254","Mr","Nguyen","HUyen","2020-05-23","","1","1","79","6","8");
INSERT INTO ve_may_bay VALUES("255","Mr","Tran","Khanh Dang","2020-05-13","","1","2","79","13","1");
INSERT INTO ve_may_bay VALUES("256","Mr","Le","Kim Phung","2020-05-05","","1","2","79","13","6");
INSERT INTO ve_may_bay VALUES("257","Mr","Nguyen","HUyen","2020-05-23","","1","2","79","13","1");
INSERT INTO ve_may_bay VALUES("258","Mr","Tran","Khanh Dang","2020-04-28","","1","1","80","13","1");
INSERT INTO ve_may_bay VALUES("259","Mr","Le","Kim Phung","2020-05-21","","1","1","80","13","1");
INSERT INTO ve_may_bay VALUES("260","Mr","Nguyen","HUyen","2020-05-14","","1","1","80","13","1");
INSERT INTO ve_may_bay VALUES("261","Mr","Tran","Khanh Dang","2020-04-28","","1","1","80","6","1");
INSERT INTO ve_may_bay VALUES("262","Mr","Le","Kim Phung","2020-05-21","","1","1","80","6","1");
INSERT INTO ve_may_bay VALUES("263","Mr","Nguyen","HUyen","2020-05-14","","1","1","80","6","1");
INSERT INTO ve_may_bay VALUES("264","Mr","Tran","Khanh Dang","2020-05-22","","1","1","81","13","1");
INSERT INTO ve_may_bay VALUES("265","Mr","Le","Kim Phung","2020-05-07","","1","1","81","13","1");
INSERT INTO ve_may_bay VALUES("266","Mr","Nguyen","HUyen","2020-05-14","","1","1","81","13","1");
INSERT INTO ve_may_bay VALUES("267","Mr","Tran","Khanh Dang","2020-05-22","","1","2","81","12","1");
INSERT INTO ve_may_bay VALUES("268","Mr","Le","Kim Phung","2020-05-07","","1","2","81","12","1");
INSERT INTO ve_may_bay VALUES("269","Mr","Nguyen","HUyen","2020-05-14","","1","2","81","12","1");
INSERT INTO ve_may_bay VALUES("270","Mr","Tran","Khanh Dang","2020-05-15","","1","1","82","13","1");
INSERT INTO ve_may_bay VALUES("271","Mr","Le","Kim Phung","2020-05-15","","1","1","82","13","1");
INSERT INTO ve_may_bay VALUES("272","Mr","Nguyen","HUyen","2020-05-16","","1","1","82","13","1");
INSERT INTO ve_may_bay VALUES("273","Mr","Tran","Khanh Dang","2020-05-15","","1","2","82","12","1");
INSERT INTO ve_may_bay VALUES("274","Mr","Le","Kim Phung","2020-05-15","","1","2","82","12","1");
INSERT INTO ve_may_bay VALUES("275","Mr","Nguyen","HUyen","2020-05-16","","1","2","82","12","1");
INSERT INTO ve_may_bay VALUES("276","Mr","Tran","Khanh Dang","2020-05-07","","1","1","83","13","1");
INSERT INTO ve_may_bay VALUES("277","Mr","Le","Kim Phung","2020-05-22","","1","1","83","13","1");
INSERT INTO ve_may_bay VALUES("278","Mr","Nguyen","HUyen","2020-05-22","","1","1","83","13","1");
INSERT INTO ve_may_bay VALUES("279","Mr","Tran","Khanh Dang","2020-05-07","","1","2","83","12","1");
INSERT INTO ve_may_bay VALUES("280","Mr","Le","Kim Phung","2020-05-22","","1","2","83","12","1");
INSERT INTO ve_may_bay VALUES("281","Mr","Nguyen","HUyen","2020-05-22","","1","2","83","12","1");
INSERT INTO ve_may_bay VALUES("282","Mr","Tran","Khanh Dang","2020-05-14","","1","1","84","13","1");
INSERT INTO ve_may_bay VALUES("283","Mr","Le","Kim Phung","2020-05-14","","1","1","84","13","1");
INSERT INTO ve_may_bay VALUES("284","Mr","Nguyen","HUyen","2020-05-15","","1","1","84","13","1");
INSERT INTO ve_may_bay VALUES("285","Mr","Tran","Khanh Dang","2020-05-14","","1","1","84","12","1");
INSERT INTO ve_may_bay VALUES("286","Mr","Le","Kim Phung","2020-05-14","","1","1","84","12","1");
INSERT INTO ve_may_bay VALUES("287","Mr","Nguyen","HUyen","2020-05-15","","1","1","84","12","1");
INSERT INTO ve_may_bay VALUES("288","Mr","Tran","Khanh Dang","2020-05-06","","1","2","85","13","1");
INSERT INTO ve_may_bay VALUES("289","Mr","Le","Kim Phung","2020-05-15","","1","2","85","13","1");
INSERT INTO ve_may_bay VALUES("290","Mr","Nguyen","HUyen","2020-05-16","","1","2","85","13","1");
INSERT INTO ve_may_bay VALUES("291","Mr","Tran","Khanh Dang","2020-05-06","","1","2","85","12","1");
INSERT INTO ve_may_bay VALUES("292","Mr","Le","Kim Phung","2020-05-15","","1","2","85","12","1");
INSERT INTO ve_may_bay VALUES("293","Mr","Nguyen","HUyen","2020-05-16","","1","2","85","12","1");
INSERT INTO ve_may_bay VALUES("294","Mr","Tran","Khanh Dang","2020-05-13","","1","1","86","13","1");
INSERT INTO ve_may_bay VALUES("295","Mr","Le","Kim Phung","2020-05-23","","1","1","86","13","1");
INSERT INTO ve_may_bay VALUES("296","Mr","Nguyen","HUyen","2020-05-02","","1","1","86","13","1");
INSERT INTO ve_may_bay VALUES("297","Mr","Tran","Khanh Dang","2020-05-13","","1","2","86","6","1");
INSERT INTO ve_may_bay VALUES("298","Mr","Le","Kim Phung","2020-05-23","","1","2","86","6","1");
INSERT INTO ve_may_bay VALUES("299","Mr","Nguyen","HUyen","2020-05-02","","1","2","86","6","1");
INSERT INTO ve_may_bay VALUES("300","Mr","Tran","Khanh Dang","2020-05-21","","1","1","87","13","1");
INSERT INTO ve_may_bay VALUES("301","Mr","Le","Kim Phung","2020-05-17","","1","1","87","13","1");
INSERT INTO ve_may_bay VALUES("302","Mr","Nguyen","HUyen","2020-05-15","","1","1","87","13","1");
INSERT INTO ve_may_bay VALUES("303","Mr","Tran","Khanh Dang","2020-05-21","","1","2","87","6","1");
INSERT INTO ve_may_bay VALUES("304","Mr","Le","Kim Phung","2020-05-17","","1","2","87","6","1");
INSERT INTO ve_may_bay VALUES("305","Mr","Nguyen","HUyen","2020-05-15","","1","2","87","6","1");
INSERT INTO ve_may_bay VALUES("306","Mr","Tran","Khanh Dang","2020-06-25","","1","1","88","12","1");
INSERT INTO ve_may_bay VALUES("307","Mr","Le","Kim Phung","2020-06-14","","1","1","88","12","9");
INSERT INTO ve_may_bay VALUES("308","Mr","Tran","Khanh Dang","2020-06-25","","1","2","88","13","1");
INSERT INTO ve_may_bay VALUES("309","Mr","Le","Kim Phung","2020-06-14","","1","2","88","13","1");
INSERT INTO ve_may_bay VALUES("310","Mr","Tran","Khanh Dang","2020-06-17","","1","1","89","12","1");
INSERT INTO ve_may_bay VALUES("311","Mr","Le","Kim Phung","2020-06-19","","1","1","89","12","1");
INSERT INTO ve_may_bay VALUES("312","Mr","Tran","Khanh Dang","2020-06-17","","1","2","89","13","8");
INSERT INTO ve_may_bay VALUES("313","Mr","Le","Kim Phung","2020-06-19","","1","2","89","13","1");
INSERT INTO ve_may_bay VALUES("314","Mr","Tran","Khanh Dang","2020-06-17","","1","1","90","12","1");
INSERT INTO ve_may_bay VALUES("315","Mr","Le","Kim Phung","2020-06-19","","1","1","90","12","1");
INSERT INTO ve_may_bay VALUES("316","Mr","Tran","Khanh Dang","2020-06-17","","1","2","90","13","8");
INSERT INTO ve_may_bay VALUES("317","Mr","Le","Kim Phung","2020-06-19","","1","2","90","13","1");
INSERT INTO ve_may_bay VALUES("318","Mr","Tran","Khanh Dang","2020-06-03","","1","1","91","12","1");
INSERT INTO ve_may_bay VALUES("319","Mr","Le","Kim Phung","2020-06-26","","1","1","91","12","1");
INSERT INTO ve_may_bay VALUES("320","Mr","Tran","Khanh Dang","2020-06-03","","1","2","91","13","1");
INSERT INTO ve_may_bay VALUES("321","Mr","Le","Kim Phung","2020-06-26","","1","2","91","13","1");
INSERT INTO ve_may_bay VALUES("322","Mr","Tran","Khanh Dang","2020-06-12","","1","1","92","12","1");
INSERT INTO ve_may_bay VALUES("323","Mr","Le","Kim Phung","2020-06-12","","1","1","92","12","1");
INSERT INTO ve_may_bay VALUES("324","Mr","Tran","Khanh Dang","2020-06-12","","1","2","92","13","1");
INSERT INTO ve_may_bay VALUES("325","Mr","Le","Kim Phung","2020-06-12","","1","2","92","13","1");
INSERT INTO ve_may_bay VALUES("326","Mr","Tran","Khanh Dang","2020-06-19","","1","1","93","12","1");
INSERT INTO ve_may_bay VALUES("327","Mr","Le","Kim Phung","2020-06-27","","1","1","93","12","1");
INSERT INTO ve_may_bay VALUES("328","Mr","Tran","Khanh Dang","2020-06-19","","1","2","93","13","1");
INSERT INTO ve_may_bay VALUES("329","Mr","Le","Kim Phung","2020-06-27","","1","2","93","13","1");
INSERT INTO ve_may_bay VALUES("330","Mr","Tran","Khanh Dang","2020-06-26","","1","2","94","6","1");
INSERT INTO ve_may_bay VALUES("331","Mr","Le","Kim Phung","2020-06-13","","1","2","94","6","1");
INSERT INTO ve_may_bay VALUES("332","Mr","Tran","Khanh Dang","2020-06-26","","1","1","94","13","8");
INSERT INTO ve_may_bay VALUES("333","Mr","Le","Kim Phung","2020-06-13","","1","1","94","13","8");
INSERT INTO ve_may_bay VALUES("334","Mr","Tran","Khanh Dang","2020-06-24","","1","2","95","12","1");
INSERT INTO ve_may_bay VALUES("335","Mr","Le","Kim Phung","2020-06-25","","1","2","95","12","8");
INSERT INTO ve_may_bay VALUES("336","Mr","Nguyen","HUyen","2020-06-11","","1","2","95","12","1");
INSERT INTO ve_may_bay VALUES("337","Mr","Tran","Dang","2020-06-12","","1","2","95","12","1");
INSERT INTO ve_may_bay VALUES("338","Mr","Tran","Khanh Dang","2020-06-24","","1","1","95","13","1");
INSERT INTO ve_may_bay VALUES("339","Mr","Le","Kim Phung","2020-06-25","","1","1","95","13","1");
INSERT INTO ve_may_bay VALUES("340","Mr","Nguyen","HUyen","2020-06-11","","1","1","95","13","8");
INSERT INTO ve_may_bay VALUES("341","Mr","Tran","Dang","2020-06-12","","1","1","95","13","1");
INSERT INTO ve_may_bay VALUES("342","Mr","Tran","Khanh Dang","2020-06-18","","1","2","96","12","1");
INSERT INTO ve_may_bay VALUES("343","Mr","Le","Kim Phung","2020-06-04","","1","2","96","12","1");
INSERT INTO ve_may_bay VALUES("344","Mr","Nguyen","HUyen","2020-06-12","","1","2","96","12","1");
INSERT INTO ve_may_bay VALUES("345","Mr","Tran","Dang","2020-07-04","","1","2","96","12","1");
INSERT INTO ve_may_bay VALUES("346","Mr","Tran","Khanh Dang","2020-06-18","","1","1","96","13","1");
INSERT INTO ve_may_bay VALUES("347","Mr","Le","Kim Phung","2020-06-04","","1","1","96","13","4");
INSERT INTO ve_may_bay VALUES("348","Mr","Nguyen","HUyen","2020-06-12","","1","1","96","13","7");
INSERT INTO ve_may_bay VALUES("349","Mr","Tran","Dang","2020-07-04","","1","1","96","13","1");
INSERT INTO ve_may_bay VALUES("350","Mr","Tran","Khanh Dang","2020-06-11","","1","2","97","12","1");
INSERT INTO ve_may_bay VALUES("351","Mr","Le","Kim Phung","2020-06-26","","1","2","97","12","1");
INSERT INTO ve_may_bay VALUES("352","Mr","Nguyen","HUyen","2020-06-28","","1","2","97","12","8");
INSERT INTO ve_may_bay VALUES("353","Mr","Tran","Dang","2020-06-07","","1","2","97","12","1");
INSERT INTO ve_may_bay VALUES("354","Mr","Tran","Khanh Dang","2020-06-11","","1","1","97","13","1");
INSERT INTO ve_may_bay VALUES("355","Mr","Le","Kim Phung","2020-06-26","","1","1","97","13","1");
INSERT INTO ve_may_bay VALUES("356","Mr","Nguyen","HUyen","2020-06-28","","1","1","97","13","4");
INSERT INTO ve_may_bay VALUES("357","Mr","Tran","Dang","2020-06-07","","1","1","97","13","1");
INSERT INTO ve_may_bay VALUES("358","Mr","Tran","Khanh Dang","2020-06-01","","1","2","98","12","1");
INSERT INTO ve_may_bay VALUES("359","Ms","Le","Kim Phung","2020-06-12","","1","2","98","12","1");
INSERT INTO ve_may_bay VALUES("360","Mr","Tran","Khanh Dang","2020-06-01","","1","1","98","13","1");
INSERT INTO ve_may_bay VALUES("361","Ms","Le","Kim Phung","2020-06-12","","1","1","98","13","1");
INSERT INTO ve_may_bay VALUES("362","Mr","Tran","Khanh Dang","2020-06-03","","1","2","99","12","1");
INSERT INTO ve_may_bay VALUES("363","Ms","Le","Kim Phung","2020-06-26","","1","2","99","12","1");
INSERT INTO ve_may_bay VALUES("364","Mr","Tran","Khanh Dang","2020-06-03","","1","2","99","13","1");
INSERT INTO ve_may_bay VALUES("365","Ms","Le","Kim Phung","2020-06-26","","1","2","99","13","1");
INSERT INTO ve_may_bay VALUES("366","Mr","Tran","Khanh Dang","2020-06-01","","1","1","100","12","7");
INSERT INTO ve_may_bay VALUES("367","Ms","Le","Kim Phung","2020-06-02","","1","1","100","12","7");
INSERT INTO ve_may_bay VALUES("368","Mr","Nguyen","HUyen","2020-06-01","","1","1","100","12","1");
INSERT INTO ve_may_bay VALUES("369","Mr","Tran","Khanh Dang","2020-06-01","","1","2","100","13","8");
INSERT INTO ve_may_bay VALUES("370","Ms","Le","Kim Phung","2020-06-02","","1","2","100","13","8");
INSERT INTO ve_may_bay VALUES("371","Mr","Nguyen","HUyen","2020-06-01","","1","2","100","13","1");


