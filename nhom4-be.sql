-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 06, 2022 lúc 02:42 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom4-be`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'SAMSUNG'),
(2, 'OPPO'),
(3, 'APPLE'),
(4, 'LG'),
(5, 'MASSTER');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_manager`
--

DROP TABLE IF EXISTS `order_manager`;
CREATE TABLE IF NOT EXISTS `order_manager` (
  `Order_id` int(100) NOT NULL AUTO_INCREMENT,
  `FullName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` bigint(100) NOT NULL,
  `Address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pay_Mode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `FullName`, `Phone`, `Address`, `Pay_Mode`) VALUES
(13, 'Qui', 978314903, 'xóm 1 hy Tường Hoài Sơn Hoài NHơn Binh Định', 'COD'),
(14, 'Việt', 978314903, 'Đồng Nai', 'COD'),
(15, 'Vũ', 978314903, 'Bình Định', 'COD'),
(16, 'Qui 2', 978314903, 'xóm 1 hy Tường Hoài Sơn Hoài NHơn Binh Định', 'ATM'),
(18, 'Việt Nguyễn', 333140370, 'TP', 'COD'),
(19, 'Việt Nguyễn', 333140370, 'TP', 'COD');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(24, 'Máy tính bảng iPad Pro 12.9 inch Wifi 128GB (2020)', 3, 5, 2147483647, 'ipad3.jpg', 'Sở hữu thiết kế tinh tế, màn hình xuất sắc và cấu hình mạnh mẽ, đáp ứng được hầu hết nhu cầu của một người sáng tạo chuyên nghiệp. Điều khó có một thế hệ máy tính bảng nào khác có thể làm được, đã xuất hiện trên iPad Pro 12.9 inch Wifi 128GB (2020). \r\n\r\n', 0, '2021-12-21 06:45:35'),
(23, 'Máy tính bảng iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021)', 3, 5, 18250000, 'ipad2.jpg', 'Máy tính bảng iPad Pro M1 12.9 inch Wifi Cellular 256GB (2021) trang bị con chip vô cùng mạnh mẽ M1 cùng công nghệ màn hình mới mini-LED được rất nhiều người dùng đón nhận nồng nhiệt và đánh giá rất tốt sản phẩm này đến từ Apple.\r\n', 0, '2021-12-21 06:45:05'),
(73, 'Máy tính bảng iPad mini 6 WiFi 256GB', 3, 5, 2950000, 'ipad4.jpg', 'iPad mini 6 WiFi 256GB được trình làng với cấu hình mạnh mẽ từ chip Apple A15 Bionic, cho bạn những trải nghiệm tuyệt vời trên màn hình sắc nét vượt trội, Apple Pen thỏa sức sáng tạo, và camera thông minh tuyệt vời không thua kém so với smartphone', 0, '2021-12-21 06:46:37'),
(22, 'Máy tính bảng iPad Pro M1 12.9 inch WiFi Cellular 512GB (2021)', 3, 5, 21990000, 'ipad1.jpg', 'iPad Pro M1 12.9 inch WiFi Cellular 512GB (2021), một chiếc máy tính bảng cao cấp sở hữu loạt công nghệ đột phá như màn hình mini-LED, mạng 5G, vi xử lý Apple M1 cho hiệu năng xử lý vượt trội vượt khỏi giới hạn.', 0, '2021-12-21 06:44:13'),
(21, 'iPad Mini 5 Wi-Fi 64GB - Hàng Nhập Khẩu Chính Hãng', 3, 5, 11990000, 'ipad5.jpg', 'Chính hãng, nguyên seal, mới 100% Mã part : LL, ZP,... Miễn phí giao hàng toàn quốc Thiết kế sang trọng đẹp mắt Màn hình: 7.9 inch Camera trước/sau: 7MP/8MP CPU: A12 Bionic 64   bit Bộ nhớ: 64GB Hệ điều hành: iOS 12 Tính năng: Hỗ trợ Apple Pencil', 0, '2021-12-21 06:48:33'),
(19, 'Đồng hồ Nam Master Works MW07SRS-EDDBO8', 5, 4, 6910000, 'mw07srs-eddbo8001_1603878272.png', 'MW07SRS-EDDBO8 là mẫu đồng hồ chronograph dành cho nam với thiết kế thể thao, khỏe khoắn. 3 nút bấm bên phải thân đồng hồ lần lượt có chức năng: nút bấm giờ, nút điều chỉnh thời gian và nút reset về trạng thái ban đầu. Tại góc 9h là cửa sổ hiển thị lịch ngày thuận tiện theo dõi thời gian.', 0, '2021-10-21 07:49:04'),
(18, 'Đồng hồ Nam Master Works MW21SN-ACNVG8', 5, 4, 6910000, 'mw21sn-acnvg8001_1603878055.png', 'MW21SN-ACNVG8 là mẫu đồng hồ điện tử dành cho nam với thiết kế tinh tế, cổ điển. Lịch thứ, ngày, tháng của MW21SN-ACNVG8 được thể hiện thông qua 3 ô tròn trên mặt số. Đặc biệt, MW21SN-ACNVG8 được trang bị chức năng lịch tuần trăng thường có trên những mẫu đồng hồ cao cấp.', 0, '2021-10-21 07:47:52'),
(17, 'Đồng hồ Nam Master Works MW21SI-ACDBO8', 5, 4, 6910000, 'mw21si-acdbo8001_1603878096.png', 'MW21SI-ACDBO8 là mẫu đồng hồ điện tử dành cho nam với thiết kế tinh tế, cổ điển. Lịch thứ, ngày, tháng của MW21SI-ACDBO8 được thể hiện thông qua 3 ô tròn trên mặt số. Đặc biệt, MW21SI-ACDBO8 \r\nđược trang bị chức năng lịch tuần trăng thường có trên những mẫu đồng hồ cao cấp.\r\n', 0, '2021-10-21 07:46:36'),
(15, 'Samsung Chromebook Plus', 1, 3, 18828028, 'uploaded_15cb15589fb9459183959de6e3b38625.jpg', 'Chiếc laptop Samsung Chromebook Plus được cho ra mắt thị trường vào năm 2017, với chip xử lý OP1 ARM Hexa Core, dung lượng RAM 4GB, màn hình cảm ứng 12.3 inch, độ phân giải 2400x1600 pixels, mật độ điểm ảnh 234ppi. Cùng khám phá và đánh giá thêm về chiếc laptop siêu đẹp, siêu linh hoạt này ngay dưới đây.', 0, '2021-10-21 07:40:23'),
(14, 'Samsung Galaxy Book Ion', 1, 3, 247121288, '0766d19ef6ecad8718beda5aa858059c59ac9a3e_0.jpg', 'Laptop Samsung Galaxy Book Ion là chiếc máy tính xách tay chạy hệ điều hành Windows 10 Home, tốc độ xung nhịp 3.7GHz giúp máy chạy mượt mà và đa nhiệm. Laptop được trang bị màn hình kích thước 13.3\" cùng công nghệ IPS và độ phân giải 1920 x 1080pixels đem đến hình ảnh hiện thị sắc nét và chân thực.Laptop Samsung Galaxy Book Flex có trọng lượng chỉ 1.2kg thuận tiện mang theo đi làm mỗi ngày', 0, '2021-10-21 07:39:21'),
(13, 'Samsung Galaxy Book Flex', 1, 3, 20200000, 'uploaded_20335ac8c9dc3d6c6c05498d2d7ee174.jpg', 'Laptop Samsung Galaxy Book Flex là chiếc máy tính xách tay chạy hệ điều hành Windows 10 Home, tốc độ xung nhịp 3.7GHz giúp máy chạy mượt mà và đa nhiệm. Laptop được trang bị màn hình kích thước 13.3\" cùng công nghệ IPS và độ phân giải 1920 x 1080pixels đem đến hình ảnh hiện thị sắc nét và chân thực.Laptop Samsung Galaxy Book Flex có trọng lượng chỉ 1.2kg thuận tiện mang theo đi làm mỗi ngày', 0, '2021-10-21 07:38:35'),
(12, 'Samsung Galaxy Book Pro', 1, 3, 22490208, 'Samsung-Galaxy-Book-Pro-2021-H1.jpeg', 'Laptop Samsung Galaxy Book Pro là chiếc máy tính xách tay chạy hệ điều hành Windows 10 Home, tốc độ xung nhịp 2.8GHz. Về khả năng hiển thị, mẫu laptop này sở hữu card đồ họa Intel Iris Xe được thể hiện trên kích thước màn hình 15.6\" độ phân giải 1920 x 1080pixels. Thiết bị sở hữu ổ cứng SSD và chỉ nặng khoảng 1.38kg.', 1, '2021-11-17 09:16:34'),
(11, 'Samsung Notebook 9', 1, 3, 899000, 'uploaded_c100e833bf7ccb3d581c72939c3674f9.jpg', 'Ra mắt năm 2018, cấu hình Samsung Notebook 9 gồm thời lượng pin lên đến 12h, màn hình 15.6\" công nghệ LCD (1920x1080), CPU Intel Core i7, ổ cứng SSD dung lượng 256GB, RAM 8G, camera có độ phân giải HD 720p. Giá Samsung Note book 9 hiện nay là 29062350 tại Fado', 1, '2021-10-25 05:27:46'),
(9, 'Điện thoại OPPO A15', 2, 1, 4910000, 'dienthoai4.jpg', 'OPPO hãng điện thoại luôn được người Việt tin dùng và lựa chọn, đã cho ra mắt mẫu OPPO A15 có thiết kế đẹp, cấu hình đủ dùng. Đây sẽ là mẫu điện thoại thông minh phù hợp cho mọi đối tượng người dùng đi cùng với mức giá vô cùng hợp lý.', 1, '2021-12-21 06:38:47'),
(8, 'Điện thoại OPPO A92', 2, 1, 9190000, 'dienthoai3.jpg', 'OPPO A92 mẫu smartphone tầm trung được OPPO cho ra mắt đầu tháng 05/2020. Chiếc điện thoại gây ấn tượng với thiết kế màn hình khoét lỗ tràn viền, cụm 4 camera ấn tượng và được bán với mức giá vô cùng phải chăng.', 1, '2021-12-21 06:35:36'),
(72, 'Điện thoại OPPO A31 (4GB/128GB)\r\n \r\n', 2, 1, 18250000, 'dienthoai5.jpg', 'Chiếc điện thoại OPPO A31 2020 4GB/128 GB nổi bật với thiết kế màn hình giọt nước tràn viền, bộ ba camera ấn tượng đi kèm hiệu năng tốt với mức giá bán cực kỳ phải chăng. ', 0, '2021-12-21 06:37:27'),
(5, 'Loa Bluetooth LG XBOOM GO PN1', 4, 2, 3590000, 'loa5.jpg', 'Loa Bluetooth LG XBOOM GO PN1 với thiết kế nhỏ gọn tiện dùng cùng chất lượng âm thanh sống động được trang bị kết nối không dây Bluetooth 5.0 có thể truyền tải âm thanh ở khoảng cách xa nhưng vẫn có chất lượng âm thanh tốt, không bị rè hay không rõ âm.\r\nLoa Bluetooth LG XBOOM GO PN1 là sản phẩm chính hãng LG, nhận bảo hành 12 tháng chính hãng. Mua loa bluetooth tại Di Động Việt với giá hấp dẫn cùng nhiều ưu đãi đặc biệt.\r\n', 0, '2021-12-21 13:25:38'),
(6, 'Điện thoại di động OPPO A95', 2, 1, 4599000, 'suadienthoai2.jpg', 'Thiết kế OPPO Glow tinh tế cùng màn hình Full HD 6.43 inch cho người dùng thoải mái sử dụng. Cụm 3 camera sau lên đến 48MP với camera trước 16MP công nghệ làm đẹp AI trứ danh của OPPO. Hiệu năng ấn tượng, đa nhiệm mượt mà với dung lượng pin lên đến 5000mAh', 0, '2021-12-21 13:20:49'),
(7, 'Điện Thoại Oppo A93 2020 ', 2, 1, 12900000, 'suadienthoai1.jpg', 'Thiết kế nhỏ gọn, khơi niềm hứng khởi\r\nĐiện Thoại Oppo A93 2020 là dòng sản phẩm thuộc phân khúc điện thoại tầm trungvà được xem là chiếc điện thoại tiếp nối từ OPPO A92 với nhiều điểm được nâng cấp.\r\nMàn hình 6.43 inch sắc nét\r\nOPPO A93 có kích thước màn hình là 6.43 inch và có độ phân giải Full HD+ (1080 x 2400 Pixels). Máy sử dụng tấm nền AMOLED việc xem phim hay chơi game đều sẽ mang đến chất lượng hiển thị sắc nét, màu sắc tươi tắn, hình ảnh chi tiết hơn.\r\nChip Helio P95 cho hiệu năng vượt trội\r\nBộ lưu trữ lớn\r\nHệ điều hành Android 10\r\nCamera tích hợp trí tuệ nhân tạo AI\r\nKhả năng sạc nhanh 30W\r\n', 1, '2021-12-21 13:21:03'),
(4, 'Loa Bluetooth Di Động LG Xboomgo PL2W ', 4, 2, 2950000, 'sualoa4.jpg', 'Với công nghệ Meridian Âm thanh 5W Âm trầm hành động kép Thời lượng pin dài (10 tiếng) Chống nước Điều khiển bằng giọng nói Đơn giản mà thời trang Thiết kế dáng tròn đẹp mắt với lớp phủ ngoài cao su dễ cầm nắm và vừa vặn trong lòng bàn tay.', 1, '2021-12-21 13:24:46'),
(1, 'Loa bluetooth speaker LG PL7.DVNMLLK Blue Black', 4, 2, 470000, 'loa3.png', 'Diện mạo mới của âm thanh cân bằng\r\nĐơn giản mà thời trang\r\nTrải nghiệm âm thanh tuyệt đỉnh\r\nĐưa âm nhạc ra cuộc sống\r\nCảm nhận nhịp nhạc mạnh mẽ hơn\r\nTận hưởng bất kể thời tiết\r\nThời lượng pin dài tận 24 tiếng cho phép bạn thoải mái thưởng thức âm nhạc\r\n\r\n', 0, '2021-12-21 06:27:38'),
(2, 'Loa bluetooth LG XBOOM Go PK3/PL2', 4, 2, 1350000, 'loa2.jpg', 'LG XBOOMGo PL2 100% Chính Hãng LG XBOOMGo PL2 : Màu Đen & Màu Trắng với công nghệ Meridian Âm thanh 5W Âm trầm hành động kép Thời lượng pin dài (10 tiếng) Chống nước Điều khiển bằng giọng nói\r\n\r\n', 0, '2021-12-21 06:26:00'),
(3, 'Loa Bluetooth LG Xboom Go PL5 (Xanh Đen)', 4, 2, 1840000, 'sualoa5.jpg', 'Điểm nổi bật của loa bluetooth LG Xboom Go PL5\r\n•Thiết kế đơn giản, tính di động cao.\r\n•Công nghệ Meridian mang đến rõ ràng.\r\n•Sound Boost khuếch đại âm thanh, lan tỏa khắp không gian.\r\n•Bảo vệ loa an toàn với chuẩn kháng nước IPX5.\r\n•Công suất 20W cho âm thanh mạnh mẽ.\r\n•Điều khiển loa tiện lợi bằng giọng nói.\r\n•Điều khiển toàn diện với Ứng dụng XBOOM.\r\n•Thời lượng pin lên đến 18 tiếng.\r\n\r\n', 1, '2021-12-21 13:26:12'),
(74, 'Máy tính bảng iPad 9 WiFi 256GB', 3, 5, 6910000, 'ipad5.jpg', 'iPad 9 WiFi 256GB thu hút sự chú ý của mọi người với thiết kế đơn giản, hiệu suất vượt trội, camera ghi hình chất lượng, bộ nhớ trong và dung lượng pin ấn tượng, thiết bị sẽ là một chiếc máy tính bảng cực đáng chọn mua để trải nghiệm.', 0, '2021-12-21 06:47:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Điện thoại'),
(2, 'Loa'),
(3, 'Laptop'),
(4, 'Đồng hồ'),
(5, 'Ipad');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `phone`, `fullname`, `roles`) VALUES
(1, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'nqv171002@gmail.com', '0333140370', 'Nguyễn Quốc Việt', 1),
(2, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'vietmat12333@gmail.com', '0123456789', 'Nguyễn Văn Quí', 2),
(22, 'user2', '7e58d63b60197ceb55a1c487989a3720', 'nqv17100222@gmail.com', '0333140370', 'Việt Nguyễn', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_order`
--

DROP TABLE IF EXISTS `user_order`;
CREATE TABLE IF NOT EXISTS `user_order` (
  `Order_id` int(120) NOT NULL,
  `Item_Name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(120) NOT NULL,
  `Quanity` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_order`
--

INSERT INTO `user_order` (`Order_id`, `Item_Name`, `Price`, `Quanity`) VALUES
(13, 'Samsung Galaxy Book Flex', 20200000, 1),
(13, 'Samsung Galaxy Book Pro', 22490208, 1),
(14, 'Samsung Chromebook Plus', 18828028, 1),
(14, 'Samsung Galaxy Book Ion', 247121288, 1),
(15, 'Samsung Notebook 9', 899000, 3),
(15, 'Samsung Galaxy Book Flex', 20200000, 2),
(16, 'Samsung Galaxy Book Pro', 22490208, 3),
(16, 'Samsung Galaxy Book Ion', 247121288, 3),
(16, 'Samsung Chromebook Plus', 18828028, 2),
(18, 'Máy tính bảng iPad mini 6 WiFi 256GB', 2950000, 1),
(19, 'Máy tính bảng iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021)', 18250000, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
