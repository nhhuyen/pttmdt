DROP TABLE IF EXISTS banner;

CREATE TABLE `banner` (
  `bn_ma` int(11) NOT NULL AUTO_INCREMENT,
  `bn_tieude` varchar(50) NOT NULL,
  `bn_hinh` varchar(500) NOT NULL,
  PRIMARY KEY (`bn_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO banner VALUES("4","maybay1","localhost/pttmdt/quanlybanner/image/1.jpg");
INSERT INTO banner VALUES("5","maybay2","localhost/pttmdt/quanlybanner/image/2.jpg");
INSERT INTO banner VALUES("6","maybay3","localhost/pttmdt/quanlybanner/image/3.jpg");
INSERT INTO banner VALUES("7","maybay4","localhost/pttmdt/quanlybanner/image/4.jpg");
INSERT INTO banner VALUES("8","maybay5","localhost/pttmdt/quanlybanner/image/2.jpg");


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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO chuyen_bay VALUES("1","2020-05-06","Còn","07:00:00","09:00:00","07:00:00","09:00:00","2","7","1");
INSERT INTO chuyen_bay VALUES("2","2020-05-06","Còn","07:00:00","09:00:00","07:00:00","09:00:00","2","8","1");


DROP TABLE IF EXISTS chuyenbay_khuyenmai;

CREATE TABLE `chuyenbay_khuyenmai` (
  `km_ma` int(11) NOT NULL DEFAULT '0',
  `cb_ma` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`km_ma`,`cb_ma`),
  KEY `cb_ma` (`cb_ma`),
  CONSTRAINT `chuyenbay_khuyenmai_ibfk_1` FOREIGN KEY (`km_ma`) REFERENCES `khuyen_mai` (`km_ma`),
  CONSTRAINT `chuyenbay_khuyenmai_ibfk_2` FOREIGN KEY (`cb_ma`) REFERENCES `chuyen_bay` (`cb_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS dich_vu;

CREATE TABLE `dich_vu` (
  `dv_ma` int(11) NOT NULL AUTO_INCREMENT,
  `dv_ten` varchar(50) DEFAULT NULL,
  `lv_ma` int(11) DEFAULT NULL,
  PRIMARY KEY (`dv_ma`),
  KEY `lv_ma` (`lv_ma`),
  CONSTRAINT `dich_vu_ibfk_1` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



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


DROP TABLE IF EXISTS gio_hang;

CREATE TABLE `gio_hang` (
  `gh_ma` int(11) NOT NULL AUTO_INCREMENT,
  `nd_ma` int(11) DEFAULT NULL,
  PRIMARY KEY (`gh_ma`),
  KEY `nd_ma` (`nd_ma`),
  CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`nd_ma`) REFERENCES `nguoi_dung` (`nd_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS hang_ve;

CREATE TABLE `hang_ve` (
  `hv_ma` int(11) NOT NULL AUTO_INCREMENT,
  `hv_ten` varchar(50) DEFAULT NULL,
  `hv_kihieu` varchar(10) NOT NULL,
  `hv_hinh` varchar(500) NOT NULL,
  PRIMARY KEY (`hv_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO hang_ve VALUES("7","Vietjet","VJ","http://localhost/pttmdt-baocao/admin/image/vj.png");
INSERT INTO hang_ve VALUES("8","VietnamAirlines","VN-AL","http://localhost/pttmdt-baocao/admin/image/vn.png");


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
  PRIMARY KEY (`km_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS loai_ve;

CREATE TABLE `loai_ve` (
  `lv_ma` int(11) NOT NULL AUTO_INCREMENT,
  `lv_ten` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`lv_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO loai_ve VALUES("1","Thương gia");
INSERT INTO loai_ve VALUES("2","Phổ thông");


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
  PRIMARY KEY (`nd_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO nguoi_dung VALUES("1","Tran Khanh Dang","392629620","123","1","123@gmail.com","dang","e10adc3949ba59abbe56e057f20f883e","0");


DROP TABLE IF EXISTS phieu_dat_ve;

CREATE TABLE `phieu_dat_ve` (
  `pdv_ma` int(11) NOT NULL AUTO_INCREMENT,
  `pdv_sove` int(11) DEFAULT NULL,
  `nd_ma` int(11) DEFAULT NULL,
  `km_ma` int(11) DEFAULT NULL,
  PRIMARY KEY (`pdv_ma`),
  KEY `nd_ma` (`nd_ma`),
  KEY `km_ma` (`km_ma`),
  CONSTRAINT `phieu_dat_ve_ibfk_1` FOREIGN KEY (`nd_ma`) REFERENCES `nguoi_dung` (`nd_ma`),
  CONSTRAINT `phieu_dat_ve_ibfk_2` FOREIGN KEY (`km_ma`) REFERENCES `khuyen_mai` (`km_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



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
  `tb_tansuat` varchar(50) DEFAULT NULL,
  `tb_hanhtrinh` varchar(50) DEFAULT NULL,
  `sb_ma_di` int(11) DEFAULT NULL,
  `sb_ma_den` int(11) DEFAULT NULL,
  PRIMARY KEY (`tb_ma`),
  KEY `sb_ma_di` (`sb_ma_di`),
  KEY `sb_ma_den` (`sb_ma_den`),
  CONSTRAINT `tuyen_bay_ibfk_1` FOREIGN KEY (`sb_ma_di`) REFERENCES `san_bay` (`sb_ma`),
  CONSTRAINT `tuyen_bay_ibfk_2` FOREIGN KEY (`sb_ma_den`) REFERENCES `san_bay` (`sb_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO tuyen_bay VALUES("2","Thứ 2, Thứ 4, Thứ 6","02:00","1","2");
INSERT INTO tuyen_bay VALUES("3","Thứ 3, Thứ 5, Thứ 7","01:00","3","1");
INSERT INTO tuyen_bay VALUES("4","Thứ 3, Thứ 5, Thứ 7","02:00","2","1");


DROP TABLE IF EXISTS ve_may_bay;

CREATE TABLE `ve_may_bay` (
  `vmb_ma` int(11) NOT NULL AUTO_INCREMENT,
  `vmb_ho` varchar(50) DEFAULT NULL,
  `vmb_ten` varchar(50) DEFAULT NULL,
  `vmb_soghe` varchar(50) DEFAULT NULL,
  `nd_ma` int(11) DEFAULT NULL,
  `gh_ma` int(11) DEFAULT NULL,
  `lv_ma` int(11) DEFAULT NULL,
  `pdv_ma` int(11) DEFAULT NULL,
  `cb_ma` int(11) DEFAULT NULL,
  PRIMARY KEY (`vmb_ma`),
  KEY `nd_ma` (`nd_ma`),
  KEY `gh_ma` (`gh_ma`),
  KEY `lv_ma` (`lv_ma`),
  KEY `pdv_ma` (`pdv_ma`),
  KEY `cb_ma` (`cb_ma`),
  CONSTRAINT `ve_may_bay_ibfk_1` FOREIGN KEY (`nd_ma`) REFERENCES `nguoi_dung` (`nd_ma`),
  CONSTRAINT `ve_may_bay_ibfk_2` FOREIGN KEY (`gh_ma`) REFERENCES `gio_hang` (`gh_ma`),
  CONSTRAINT `ve_may_bay_ibfk_3` FOREIGN KEY (`lv_ma`) REFERENCES `loai_ve` (`lv_ma`),
  CONSTRAINT `ve_may_bay_ibfk_4` FOREIGN KEY (`pdv_ma`) REFERENCES `phieu_dat_ve` (`pdv_ma`),
  CONSTRAINT `ve_may_bay_ibfk_5` FOREIGN KEY (`cb_ma`) REFERENCES `chuyen_bay` (`cb_ma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



