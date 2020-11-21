-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 14, 2019 lúc 04:02 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id_donhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id_donhang`, `id_sanpham`, `soluong`, `tongtien`) VALUES
(1, 21, 1, 35000),
(2, 2, 1, 35000),
(2, 3, 1, 25000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id_danhmuc`, `tendanhmuc`) VALUES
(1, 'Fruit juices'),
(2, 'Vegetable Juices'),
(3, 'Smoothies'),
(4, 'Chocolate Juices'),
(5, 'Winter Menu'),
(6, 'Protein Shakes'),
(7, 'Mock Tails');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `thoigiandathang` datetime DEFAULT NULL,
  `tenkhachhang` varchar(100) DEFAULT NULL,
  `diachigiaohang` varchar(200) DEFAULT NULL,
  `sodienthoai` varchar(15) DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `thoigiandathang`, `tenkhachhang`, `diachigiaohang`, `sodienthoai`, `tongtien`) VALUES
(1, '2019-03-14 12:03:29', 'LÃª VÄƒn KhÃ¡nh', '117 tráº§n cung', '0985136842', 35000),
(2, '2019-03-14 12:03:53', 'LÃª VÄƒn KhÃ¡nh', '117 tráº§n cung', '0985136842', 60000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhuongquyen`
--

CREATE TABLE `nhuongquyen` (
  `id_dangki` int(11) NOT NULL,
  `hoten` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `sodienthoai` varchar(15) DEFAULT NULL,
  `diachi` varchar(200) DEFAULT NULL,
  `nghenghiep` varchar(100) DEFAULT NULL,
  `von` int(11) DEFAULT NULL,
  `kinhnghiem` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `id` int(11) NOT NULL,
  `tenkhachhang` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `sodienthoai` varchar(15) DEFAULT NULL,
  `tieude` varchar(150) DEFAULT NULL,
  `phanhoi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(100) DEFAULT NULL,
  `id_danhmuc` int(11) DEFAULT NULL,
  `giatien` int(11) DEFAULT NULL,
  `anh` varchar(100) DEFAULT NULL,
  `mota` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensanpham`, `id_danhmuc`, `giatien`, `anh`, `mota`) VALUES
(1, 'nÆ°á»›c cam Ã©p', 1, 30000, '../image/nuoc ep hoa qua/nuoc_ep_cam.jpg', 'NÆ°á»›c cam hay nÆ°á»›c cam Ã©p, nÆ°á»›c cam váº¯t lÃ  má»™t loáº¡i thá»©c uá»‘ng phá»• biáº¿n Ä‘Æ°á»£c lÃ m tá»« cam báº±ng cÃ¡ch chiáº¿t xuáº¥t nÆ°á»›c tá»« trÃ¡i cam tÆ°Æ¡i báº±ng viá»‡c váº¯t hay Ã©p Ä‘Ã³ lÃ  má»™t loáº¡i nÆ°á»›c cam tÆ°Æ¡i. Äá»‘i vá»›i cÃ¡c sáº£n pháº©m nÆ°á»›c cam Ä‘Æ°á»£c sáº£n xuáº¥t theo kiá»ƒu cÃ´ng nghiá»‡p, nÆ°á»›c cam Ä‘Æ°á»£c cháº¿ biáº¿n cÃ³ cho thÃªm cÃ¡c phá»¥ gia, báº£o quáº£n rá»“i Ä‘Ã³ng chai hoáº·c há»™p giáº¥y Ä‘á»ƒ tiÃªu thá»¥.\r\n\r\nNÆ°á»›c cam cÃ³ chá»©a flavonoid cÃ³ lá»£i cho sá»©c khá»e vÃ  lÃ  má»™t nguá»“n cung cáº¥p cÃ¡c cháº¥t chá»‘ng oxy hÃ³a hesperidin. Äá»“ng thá»i trong nÆ°á»›c cam cÃ³ chá»©a nhiá»u vitamin C,[1] cÃ³ tÃ¡c dá»¥ng tÄƒng cÆ°á»ng Ä‘á» khÃ¡ng, chá»‘ng má»‡t má»i. NÆ°á»›c cam thÆ°á»ng cÃ³ sá»± thay Ä‘á»•i giá»¯a mÃ u cam vÃ  mÃ u vÃ ng, máº·c dÃ¹ má»™t sá»‘ mÃ u Ä‘á» ruby â€‹â€‹hoáº·c mÃ u cam giá»‘ng mÃ u Ä‘á» cam hoáº·c tháº­m chÃ­ hÆ¡i há»“ng.'),
(2, 'nÆ°á»›c Ã©p dÃ¢u', 1, 35000, '../image/nuoc ep hoa qua/nuoc_ep_dau.jpg', 'DÃ¢u tÃ¢y khÃ´ng chá»‰ cÃ³ hÃ m lÆ°á»£ng dinh dÆ°á»¡ng cao mÃ  nÃ³ cÃ²n sáº½ giÃºp cho lÃ n da cá»§a báº¡n luÃ´n má»‹n mÃ ng vÃ  tÆ°Æ¡i tráº». Tuy nhiÃªn, khÃ´ng pháº£i ai cÅ©ng thÃ­ch Äƒn dÃ¢u tÃ¢y tÆ°Æ¡i mÃ  thÃ­ch vá»‹ thanh mÃ¡t cá»§a nÆ°á»›c dÃ¢u hÆ¡n'),
(3, 'nÆ°á»›c Ã©p bÆ°á»Ÿi', 1, 25000, '../image/nuoc ep hoa qua/nuoc_ep_buoi.jpg', 'NÆ°á»›c Ã©p bÆ°á»Ÿi khÃ´ng chá»‰ cÃ³ mÃ¹i vá»‹ ngon ngá»t thanh khiáº¿t mÃ  cÃ²n chá»©a ráº¥t nhiá»u dÆ°á»¡ng cháº¥t tá»‘t cho sá»©c khá»e. BÆ°á»Ÿi chá»©a hÃ m lÆ°á»£ng lá»›n enzyme giÃºp Ä‘á»‘t chÃ¡y cháº¥t bÃ©o vÃ  má»¡ thá»«a nhanh chÃ³ng.\r\n\r\nBÃªn cáº¡nh Ä‘Ã³, hÃ m lÆ°á»£ng lá»›n vitamin A vÃ  vitamin C trong loáº¡i quáº£ nÃ y cÃ²n giÃºp duy trÃ¬ Ä‘á»™ áº©m trong da, báº£o vá»‡ da khá»i Ã¡nh náº¯ng máº·t trá»i vÃ  má»¥n trá»©ng cÃ¡. ThÆ°á»ng xuyÃªn sá»­ dá»¥ng nÆ°á»›c Ã©p bÆ°á»Ÿi sáº½ giÃºp báº¡n sá»Ÿ há»¯u vÃ³c dÃ¡ng thon gá»n cÃ¹ng lÃ n da tÆ°Æ¡i tráº» Ä‘áº§y sá»©c sá»‘ng.'),
(4, 'nÆ°á»›c Ã©p dá»©a', 1, 25000, '../image/nuoc ep hoa qua/nuoc_ep_dua.jpg', 'Dá»©a (khÃ³m hoáº·c thÆ¡m) chá»©a nhiá»u vitamin, khoÃ¡ng cháº¥t vÃ  cháº¥t chá»‘ng Ã´xy hÃ³a. NÆ°á»›c Ã©p dá»©a Ä‘Æ°á»£c dÃ¹ng nguyÃªn cháº¥t, pha vá»›i rÆ°á»£u hoáº·c chá»©a trong thá»©c uá»‘ng há»—n há»£p cocktail Ä‘Æ°á»£c xem lÃ  mÃ³n giáº£i khÃ¡t giÃ u dinh dÆ°á»¡ng, cÃ³ thá»ƒ ngá»«a má»™t sá»‘ bá»‡nh táº­t'),
(5, 'nÆ°á»›c Ã©p dÆ°a háº¥u', 1, 25000, '../image/nuoc ep hoa qua/nuoc_ep_dua_hau.jpg', 'Má»™t nghiÃªn cá»©u gáº§n Ä‘Ã¢y cho tháº¥y nÆ°á»›c Ã©p dÆ°a háº¥u vÃ´ cÃ¹ng cÃ³ lá»£i Ä‘á»ƒ chá»¯a Ä‘au nhá»©c cÆ¡ báº¯p sau má»™t buá»•i táº­p luyá»‡n táº¡i phÃ²ng táº­p thá»ƒ dá»¥c. \r\n\r\nDÆ°a háº¥u cÃ³ tÃ¡c dá»¥ng á»•n Ä‘á»‹nh tá»· lá»‡ nhá»‹p tim sau khi táº­p thá»ƒ dá»¥c vÃ  giáº£m má»‡t má»i cÆ¡ báº¯p.\r\n\r\nKhi uá»‘ng nÆ°á»›c dÆ°a háº¥u trÆ°á»›c buá»•i táº­p, nÃ³ lÃ m dá»‹u máº¡ch mÃ¡u vÃ  cáº£i thiá»‡n lÆ°u thÃ´ng mÃ¡u bá»Ÿi sá»± hiá»‡n diá»‡n má»™t loáº¡i axit amin cÃ³ tÃªn lÃ  L-citrulline. Khi cÆ¡ thá»ƒ háº¥p thá»¥ L-citrulline trá»±c tiáº¿p tá»« dÆ°a háº¥u tá»± nhiÃªn sáº½ tá»‘t hÆ¡n nhiá»u so vá»›i viá»‡c bá»• sung nhÃ¢n táº¡o.'),
(6, 'nÆ°á»›c Ã©p chanh dÃ¢y', 1, 35000, '../image/nuoc ep hoa qua/nuoc_ep_chanh_day.png', 'Chanh dÃ¢y lÃ  loáº¡i quáº£ chá»©a nhiá»u vitamin C vÃ  vitamin A, cÃ³ tÃ¡c dá»¥ng ráº¥t tá»‘t cho phá»¥ ná»¯ mang thai á»Ÿ nhá»¯ng thÃ¡ng Ä‘áº§u thai ká»³. Náº¿u báº¡n e dÃ¨ vÃ¬ vá»‹ chua cá»§a loáº¡i chanh nÃ y, báº¡n cÃ³ thá»ƒ há»c ngay cÃ¡ch lÃ m nÆ°á»›c chanh dÃ¢y Ä‘á»ƒ uá»‘ng. Trong nhá»¯ng ngÃ y hÃ¨ nÃ³ng ná»±c, má»™t ly nÆ°á»›c chanh dÃ¢y mÃ¡t láº¡nh sáº½ giÃºp báº¡n sáº£ng khoÃ¡i, láº¥y láº¡i tinh tháº§n, khÃ´ng cÃ²n nhá»¯ng uá»ƒ oáº£i do nÃ³ng bá»©c nhÃ©!'),
(7, 'nÆ°á»›c Ã©p á»•i', 1, 30000, '../image/nuoc ep hoa qua/nuoc_ep_oi.jpg', 'Quáº£ á»•i lÃ  loáº¡i quáº£ cÃ³ sá»± pha trá»™n hoÃ n háº£o giá»¯a cháº¥t protein, carb, cháº¥t xÆ¡ vÃ  calo, chÃ­nh vÃ¬ tháº¿ nÃªn viá»‡c Äƒn nhiá»u á»•i ráº¥t cÃ³ lá»£i cho sá»©c khoáº» cá»§a báº¡n. Tuy nhiÃªn viá»‡c Äƒn quÃ¡ nhiá»u khiáº¿n cho dáº¡ dÃ y cá»§a báº¡n pháº£i lÃ m viá»‡c nhiá»u hÆ¡n vÃ  Ä‘iá»u nÃ y táº¥t nhiÃªn lÃ  khÃ´ng tá»‘t, chÃ­nh vÃ¬ tháº¿ báº¡n nÃªn dÃ¹ng nÆ°á»›c Ã©p thay cho Äƒn trÃ¡i cÃ¢y trá»±c tiáº¿p.'),
(8, 'nÆ°á»›c dá»«a tÆ°Æ¡i', 1, 30000, '../image/nuoc ep hoa qua/nuoc_dua_tuoi.jpg', 'NÆ°á»›c dá»«a tÆ°Æ¡i lÃ  loáº¡i nÆ°á»›c uá»‘ng tá»± nhiÃªn ráº¥t tá»‘t cho sá»©c khá»e. Nhiá»u nghiÃªn cá»©u Ä‘Ã£ chá»‰ ra ráº±ng hoáº¡t tÃ­nh khÃ¡ng virus, khÃ¡ng khuáº©n, chá»‘ng viÃªm vÃ  chá»‘ng oxy hÃ³a cá»§a nÆ°á»›c dá»«a cÃ³ thá»ƒ Ä‘em láº¡i nhiá»u lá»£i Ã­ch trong viá»‡c phÃ²ng vÃ  há»— trá»£ Ä‘iá»u trá»‹ nhiá»u bá»‡nh khÃ¡c nhau.\r\n\r\nLoáº¡i nÆ°á»›c uá»‘ng bá»• dÆ°á»¡ng nÃ y cÃ³ má»™t sá»‘ tÃ¡c dá»¥ng nhÆ°:\r\n\r\nÄiá»u hÃ²a huyáº¿t Ã¡p, Ä‘Æ°á»ng huyáº¿t, hÃ m lÆ°á»£ng cholesterol trong mÃ¡u.\r\nTÄƒng cÆ°á»ng nÄƒng lÆ°á»£ng vÃ  trao Ä‘á»•i cháº¥t á»Ÿ cÆ¡ thá»ƒ.'),
(9, 'nÆ°á»›c Ã©p cÃ  rá»‘t', 2, 30000, '../image/nuoc ep rau cu/nuoc_ep_ca_rot.jpg', 'CÃ  rá»‘t lÃ  thá»±c pháº©m ráº¥t giÃ u giÃ¡ trá»‹ dinh dÆ°á»¡ng vÃ  Ä‘Æ°á»£c nhiá»u ngÆ°á»i yÃªu thÃ­ch, Ä‘áº·c biá»‡t khi Ã©p láº¥y nÆ°á»›c uá»‘ng, cÆ¡ thá»ƒ sáº½ dá»… dÃ ng nháº­n láº¥y nhá»¯ng dÆ°á»¡ng cháº¥t cÃ³ trong loáº¡i cá»§ nÃ y hÆ¡n cáº£ Äƒn sá»‘ng. ThÆ°á»ng xuyÃªn sá»­ dá»¥ng, báº¡n sáº½ nháº­n Ä‘Æ°á»£c tÃ¡c dá»¥ng tuyá»‡t vá»i cho cÆ¡ thá»ƒ.'),
(10, 'nÆ°á»›c Ã©p bÃ­ Ä‘á»', 2, 30000, '../image/nuoc ep rau cu/nuoc_ep_bi_do.jpg', 'BÃ­ Ä‘á» (bÃ­ ngÃ´, bÃ­ rá»£) lÃ  loáº¡i thá»±c pháº©m quen thuá»™c cá»§a má»i ngÆ°á»i trÃªn kháº¯p tháº¿ giá»›i. Náº¿u khÃ´ng náº¥u chÃ­n mÃ  dÃ¹ng nhÆ° má»™t loáº¡i hoa quáº£ Ä‘á»ƒ lÃ m nÆ°á»›c Ã©p, mÃ³n nÃ y cÃ³ thá»ƒ mang láº¡i nhá»¯ng lá»£i Ã­ch trÃªn cáº£ mong Ä‘á»£i.'),
(11, 'nÆ°á»›c Ã©p cÃ  chua', 2, 35000, '../image/nuoc ep rau cu/nuoc_ep_ca_chua.jpg', 'NÆ°á»›c Ã©p cÃ  chua cÃ³ tÃ¡c dá»¥ng giáº£m cholesterol, chá»‘ng oxy hÃ³a, khÃ¡ng viÃªm, lÃ  má»™t thá»©c uá»‘ng dinh dÆ°á»¡ng vÃ  cÃ³ tÃ¡c dá»¥ng lÃ m Ä‘áº¹p, giáº£m cÃ¢n hiá»‡u quáº£.'),
(12, 'sinh tá»‘ Ä‘u Ä‘á»§', 3, 25000, '../image/sinh to/sinh_to_du_du.jpg', 'Sinh tá»‘ Ä‘u Ä‘á»§ lÃ  loáº¡i thá»©c uá»‘ng ráº¥t tá»‘t cho sá»©c khá»e cá»§a con ngÆ°á»i. Äu Ä‘á»§ háº§u nhÆ° cÃ³ quanh nÄƒm, vÃ  mÃ¹a nÃ o dÃ¹ng cÅ©ng tá»‘t cho sá»©c khá»e. Uá»‘ng sinh tá»‘ Ä‘u Ä‘á»§ vÃ o mÃ¹a hÃ¨ giÃºp thanh tÃ¢m, giáº£i nhiá»‡t, vÃ o thu Ä‘Ã´ng giÃºp nhuáº­n tÃ¡o, Ã´n bá»• tá»³ vá»‹.'),
(13, 'sinh tá»‘ dÃ¢u tÃ¢y', 3, 35000, '../image/sinh to/sinh_to_dau_tay.jpg', 'DÃ¢u tÃ¢y hay cÃ²n gá»i dÃ¢u Ä‘áº¥t lÃ  chi thá»±c váº­t háº¡t kÃ­n vÃ  cÃ³ hoa thuá»™c há» hoa há»“ng, cho quáº£ Ä‘Æ°á»£c nhiá»u ngÆ°á»i Æ°a chuá»™ng. CÃ¡c nhÃ  khoa há»c HÃ  Lan Ä‘Ã£ chá»©ng minh quáº£ dÃ¢u tÃ¢y Ä‘áº·c biá»‡t cÃ³ lá»£i cho sá»©c khá»e vÃ¬ chá»©a nhiá»u cháº¥t bá»• hÆ¡n cáº£ cÃ  chua, kiwi hay sÃºp lÆ¡ xanh, nhá»¯ng thá»±c pháº©m ná»•i tiáº¿ng cÃ³ giÃ¡ trá»‹ dinh dÆ°á»¡ng cao. ÄÆ¡n cá»­ nhÆ° trong quáº£ dÃ¢u cÃ³ chá»©a cÃ¡c cháº¥t báº£o vá»‡, chá»‘ng oxy hÃ³a nhiá»u gáº¥p 10 láº§n quáº£ cÃ  chua.\r\n\r\nNgoÃ i ra, pháº§n thá»‹t quáº£ dÃ¢u tÃ¢y ráº¥t giÃ u vitamin A, B1, B2, Ä‘áº·c biá»‡t lÆ°á»£ng vitamin C cao hÆ¡n cáº£ dÆ°a háº¥u vÃ  cam. ÄÃ¢y Ä‘Æ°á»£c xem lÃ  Ä‘áº·c tÃ­nh Æ°u viá»‡t cá»§a quáº£ dÃ¢u tÃ¢y trong viá»‡c giÃºp phÃ¡i Ä‘áº¹p giá»¯ gÃ¬n sá»©c khá»e vÃ  nhan sáº¯c tÆ°Æ¡i tráº», chá»‘ng stress cÅ©ng nhÆ° ngÄƒn cháº·n quÃ¡ trÃ¬nh lÃ£o hÃ³a da.\r\n\r\nMá»™t Ä‘iá»ƒm cá»™ng ná»¯a trong cÃ´ng dá»¥ng lÃ m Ä‘áº¹p cá»§a quáº£ dÃ¢u, lÃ  háº§u nhÆ° cÃ¡ch cháº¿ biáº¿n má»¹ pháº©m nÃ o tá»« loáº¡i quáº£ chua ngá»t ngon miá»‡ng nÃ y cÅ©ng ráº¥t dá»… lÃ m vÃ  Ä‘áº¡t hiá»‡u quáº£ nhanh chÃ³ng.'),
(14, 'sinh tá»‘ há»“ng xiÃªm', 3, 30000, '../image/sinh to/sinh_to_hong_xiem.jpg', 'Sinh tá»‘ há»“ng xiÃªm lÃ  má»™t trong nhá»¯ng loáº¡i sinh tá»‘ thÆ¡m ngon Ä‘áº·c biá»‡t vá»›i sá»± hÃ²a quyá»‡n cá»§a vá»‹ sá»¯a bÃ©o ngáº­y vÃ  hÆ°Æ¡ng thÆ¡m Ä‘áº·c trÆ°ng. ÄÃ¢y lÃ  loáº¡i sinh tá»‘ chá»©a nhiá»u dÆ°á»¡ng cháº¥t cho cÆ¡ thá»ƒ, Ä‘áº·c biá»‡t lÃ  Ä‘á»‘i vá»›i bÃ  báº§u vÃ  tráº» nhá».'),
(15, 'sinh tá»‘ mÃ£ng cáº§u', 3, 35000, '../image/sinh to/sinh_to_mang_cau.jpg', '100 gram mÃ£ng cáº§u Ä‘Ã£ cÃ³ Ä‘áº¿n 20mg vitamin C, gáº¥p Ä‘Ã´i so vá»›i chuá»‘i, lÃª, tÃ¡o, nho vÃ  dá»©a. Do Ä‘Ã³, Ä‘Ã¢y lÃ  loáº¡i trÃ¡i cÃ¢y ráº¥t há»¯u Ã­ch trong viá»‡c tÄƒng cÆ°á»ng há»‡ thá»‘ng miá»…n dá»‹ch cá»§a cÆ¡ thá»ƒ. Ä‚n mÃ£ng cáº§u sáº½ lÃ m giáº£m kháº£ nÄƒng nhiá»…m trÃ¹ng Ä‘á»“ng thá»i cÅ©ng tiÃªu diá»‡t cÃ¡c vi rÃºt, vi khuáº©n gÃ¢y háº¡i giÃºp cÆ¡ thá»ƒ phÃ²ng ngá»«a cÃ¡c bá»‡nh tá»‘t hÆ¡n'),
(16, 'sinh tá»‘ rau mÃ¡', 3, 30000, '../image/sinh to/sinh_to_rau_ma.jpg', 'Rau mÃ¡ cÃ³ cÃ´ng dá»¥ng chá»¯a ráº¥t nhiá»u bá»‡nh, trong Ä‘Ã³ cÃ³ tÃ¡c dá»¥ng lÃ m Ä‘áº¹p cho ná»¯ giá»›i. Nhá»¯ng ngÆ°á»i bá»‹ nÃ³ng, da sáº§n vÃ  hay má»¥n náº¿u dÃ¹ng rau mÃ¡ thÆ°á»ng xuyÃªn sáº½ láº¥y láº¡i Ä‘Æ°á»£c váº» tÆ°Æ¡i tráº» báº¥t ngá».'),
(17, 'sinh tá»‘ sáº§u riÃªng', 3, 30000, '../image/sinh to/sinh_to_sau_rieng.jpg', 'Sáº§u riÃªng lÃ  loáº¡i trÃ¡i cÃ¢y cÃ³ hÆ°Æ¡ng vá»‹, mÃ¹i thÆ¡m ráº¥t Ä‘áº·c trÆ°ng, chÃ­nh vÃ¬ váº­y nÃ³ khÃ¡ kÃ©n ngÆ°á»i Äƒn, ai Ä‘Ã£ khÃ´ng Äƒn Ä‘Æ°á»£c sáº§u riÃªng thÃ¬ thÃ´i chá»© Ä‘Ã£ Äƒn Ä‘Æ°á»£c thÃ¬ ráº¥t â€œnghiá»nâ€ loáº¡i trÃ¡i cÃ¢y nÃ y vÃ  Ä‘Ã¢y cÅ©ng lÃ  má»™t loáº¡i quáº£ chá»©a ráº¥t nhiá»u dÆ°á»¡ng cháº¥t tá»‘t cho sá»©c khá»e ná»¯a Ä‘áº¥y. BÃ¢y giá» sáº§u riÃªng Ä‘Ã£ báº¯t Ä‘áº§u vÃ o mÃ¹a rá»“i, vÃ  nÃ³ sáº½ lÃ  nguyÃªn liá»‡u tuyá»‡t vá»i Ä‘á»ƒ báº¡n thá»±c hiá»‡n cÃ¡ch pha cháº¿ sinh tá»‘ sáº§u riÃªng vÃ´ cÃ¹ng thÆ¡m ngon, háº¥p dáº«n vá»›i mÃ¹i thÆ¡m, hÆ°Æ¡ng vá»‹ â€œráº¥t sáº§u riÃªngâ€'),
(18, 'sá»¯a socola', 4, 40000, '../image/socola/sua_socola.jpg', 'Sá»¯a socola cÃ³ hÆ°Æ¡ng vá»‹ thÆ¡m ngon, cung cáº¥p cÃ¡c vitamin vÃ  khoÃ¡ng cháº¥t, lÃ  thá»©c uá»‘ng há»“i phá»¥c lÃ½ tÆ°á»Ÿng sau khi táº­p luyá»‡n.Sá»¯a socola thÆ°á»ng Ä‘Æ°á»£c tráº» nhá» yÃªu thÃ­ch hÆ¡n bá»Ÿi hÆ°Æ¡ng vá»‹ ngá»t bÃ©o háº¥p dáº«n'),
(19, 'socola nÃ³ng', 4, 40000, '../image/socola/socola_nong.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(20, 'kem socola nÃ³ng', 5, 45000, '../image/thuc_don_mua_dong/kem_socola_nong.jpg', 'Socola tráº¯ng káº¿t há»£p cÃ¹ng dá»«a khÃ´ vÃ  háº¡t Ä‘iá»u táº¡o nÃªn thá»©c uá»‘ng háº£o háº¡ng ráº¥t Ä‘Æ°á»£c Æ°a chuá»™ng vÃ o mÃ¹a Ä‘Ã´ng.'),
(21, 'rÆ°á»£i tÃ¡o nÃ³ng', 5, 35000, '../image/thuc_don_mua_dong/ruoi_tao_nong.jpg', 'TÃ¡o ráº¥t tá»‘t cho sá»©c khá»e cá»§a báº¡n, nÃ³ cÃ³ tÃ¡c dá»¥ng chá»‘ng lÃ£o hÃ³a, phÃ²ng ngá»«a cÃ¡c bá»‡nh tim máº¡ch, acid trong tÃ¡o cÃ²n cÃ³ tÃ¡c dá»¥ng chá»‘ng bÃ©o phÃ¬ dÆ° cÃ¢n, cháº¥t xÆ¡ trong tÃ¡o chá»‘ng tÃ¡o bÃ³n,â€¦ Quáº£ tÃ¡o láº¡i ráº¥t Ä‘Æ°á»£c má»i ngÆ°á»i yÃªu thÃ­ch vÃ¬ mÃ¹i vá»‹ thÆ¡m ngon vÃ  láº¡i ráº¥t há»¯u Ã­ch. RÆ°á»£u tÃ¡o áº¥m Ã¡p ngÃ y Ä‘Ã´ng ráº¥t tá»‘t cho sá»©c khá»e láº¡i vá»«a cáº£i thiá»‡n Ä‘Æ°á»£c nhá»¯ng vá»‹ thá»©c uá»‘ng quen thuá»™c hÃ ng ngÃ y'),
(22, 'trÃ  Ã´ long gá»«ng xáº£', 5, 25000, '../image/thuc_don_mua_dong/tra_gung_xa.jpg', 'TrÃ  OLONG gá»«ng sáº£\r\nCÃ´ng dá»¥ng :\r\n- HÆ°Æ¡ng thÆ¡m sáº£ng khoÃ¡i tá»« gá»«ng vÃ  sáº£ chanh, giÃºp táº¡o sá»± dá»… chá»‹u cho tinh tháº§n.\r\n- Trá»‹ bá»‡nh nhá»©c Ä‘áº§u vÃ  táº¡o cáº£m giÃ¡c sáº£ng khoÃ¡i cÃ¹ng hÆ°Æ¡ng hoa cÃºc ná»“ng nÃ n láº¯ng Ä‘á»ng trong vá»‹ chÃ¡t nháº¹ vÃ  nhá»t háº­u cá»§a trÃ  OLong giÃºp báº¡n thÆ° thÃ¡i tÃ¢m há»“n vÃ  táº­p trung trÃ­ tuá»‡.\r\n- KÃ­ch thÃ­ch nÃ£o, há»‡ tuáº§n hoÃ n vÃ  hÃ´ háº¥p tÄƒng cÆ°á»ng sá»©c lÃ m viá»‡c cá»§a trÃ­ Ã³c.'),
(23, 'sá»¯a láº¯c bÆ¡ láº¡c', 6, 40000, '../image/sua_lac/sua_lac_bo_lac.jpg', 'BÆ¡ Ä‘áº­u phá»™ng hay bÆ¡ láº¡c lÃ  má»™t dáº¡ng bÆ¡ thá»±c váº­t Ä‘Æ°á»£c cháº¿ biáº¿n tá»« thÃ nh pháº§n chÃ­nh lÃ  Ä‘áº­u phá»™ng vÃ  Ä‘Æ°á»ng vá»›i má»™t Ã­t dáº§u vÃ  cháº¿ báº±ng phÆ°Æ¡ng phÃ¡p xay hoáº·c dÃ£ nhuyá»…n. BÆ¡ Ä‘áº­u phá»™ng lÃ  thá»©c Äƒn phá»• biáº¿n á»Ÿ Báº¯c Má»¹, HÃ  Lan, Anh vÃ  má»™t pháº§n á»Ÿ chÃ¢u Ã, thÃ´ng dá»¥ng nhÆ° á»Ÿ Philippines, Indonesia vÃ  Viá»‡t Nam.'),
(24, 'sá»¯a láº¯c chuá»‘i', 6, 40000, '../image/sua_lac/sua_lac_chuoi.jpg', 'MÃ³n sá»¯a láº¯c chuá»‘i sáº½ chinh phá»¥c báº¡n ngay tá»« cÃ¡i nhÃ¬n Ä‘áº§u tiÃªn bá»Ÿi mÃ u sáº¯c vÃ  hÆ°Æ¡ng vá»‹ ngá»t ngÃ o. Äáº·c biá»‡t, sá»¯a láº¯c chuá»‘i cÃ²n ráº¥t bá»• dÆ°á»¡ng cho sá»©c khá»e cá»§a báº¡n.'),
(25, 'sá»¯a láº¯c kitkat', 6, 45000, '../image/sua_lac/sua_lac_kitkat.jpg', 'Káº¿t há»£p hÃ i hÃ²a hÆ°Æ¡ng thÆ¡m vÃ  vá»‹ ngá»t thanh dá»‹u, nháº¹ nhÃ ng tá»« KITKAT vÃ  sá»¯a tÆ°Æ¡i. Äáº·c biá»‡t, vá»›i KITKAT trÃ  xanh, báº¡n cÅ©ng cÃ³ thá»ƒ mang ngay hÆ°Æ¡ng vá»‹ Nháº­t Báº£n Ä‘áº¿n bÃ n tiá»‡c Táº¿t nhÃ  mÃ¬nh.'),
(26, 'frozen peach bellini', 7, 50000, '../image/mock_tail/frozen_peach_bellini.jpg', 'Frozen Peach Bellinis Ä‘ang nhanh chÃ³ng trá»Ÿ thÃ nh loáº¡i nÆ°á»›c uá»‘ng Ä‘Æ°á»£c Æ°a chuá»™ng cá»§a chÃºng tÃ´i'),
(27, 'lemon Basil Mojito Mocktails', 7, 50000, '../image/mock_tail/Lemon-Basil-Mojito-Mocktails.jpg', 'Sá»± káº¿t há»£p hoÃ n mÄ© cá»§a áº©m thá»±c Ã vÃ  CUBA '),
(28, 'mid summner Mocktail', 7, 50000, '../image/mock_tail/midsummer_mocktail.jpg', 'Äá»“ uá»‘ng hoÃ n háº£o cho nhá»¯ng ngÃ y hÃ¨ nÃ³ng bá»©c');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id_donhang`,`id_sanpham`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Chỉ mục cho bảng `nhuongquyen`
--
ALTER TABLE `nhuongquyen`
  ADD PRIMARY KEY (`id_dangki`);

--
-- Chỉ mục cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhuongquyen`
--
ALTER TABLE `nhuongquyen`
  MODIFY `id_dangki` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id_donhang`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmucsanpham` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
