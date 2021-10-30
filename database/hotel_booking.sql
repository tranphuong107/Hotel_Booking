-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 30, 2021 lúc 08:33 AM
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
-- Cơ sở dữ liệu: `hotel_booking`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_admins`
--

CREATE TABLE `tb_admins` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_mobile` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_admins`
--

INSERT INTO `tb_admins` (`admin_id`, `admin_name`, `admin_mobile`, `admin_email`, `admin_pass`) VALUES
(1, 'admin', '0378954644', 'tranthibichphuong1007@gmail.com', '$2y$10$SUNHktx/e3P5MKmOwxe4E.kADRaMl7SCORS6PAmzflhguH5o9JLwS'),
(13, 'admin1', '0356287263', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_customers`
--

CREATE TABLE `tb_customers` (
  `cus_id` int(10) UNSIGNED NOT NULL,
  `cus_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_mobile` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_customers`
--

INSERT INTO `tb_customers` (`cus_id`, `cus_name`, `cus_mobile`, `cus_email`, `cus_pass`) VALUES
(2, 'Nguyễn Tuấn Minh', '0378789645', 'minhnt@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_order_rooms`
--

CREATE TABLE `tb_order_rooms` (
  `ordroom_id` int(10) UNSIGNED NOT NULL,
  `ordroom_total` int(10) NOT NULL,
  `ordroom_total_day` int(10) NOT NULL,
  `ordroom_start` date NOT NULL,
  `ordroom_end` date NOT NULL,
  `ordroom_status` int(10) NOT NULL DEFAULT '0',
  `room_id` int(10) UNSIGNED DEFAULT NULL,
  `cus_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_order_services`
--

CREATE TABLE `tb_order_services` (
  `ordser_id` int(10) UNSIGNED NOT NULL,
  `ordser_total` int(10) NOT NULL,
  `ordser_total_day` int(10) NOT NULL,
  `ordser_start` date NOT NULL,
  `ordser_end` date NOT NULL,
  `ordser_status` int(10) NOT NULL DEFAULT '0',
  `ser_id` int(10) UNSIGNED NOT NULL,
  `cus_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_rooms`
--

CREATE TABLE `tb_rooms` (
  `room_id` int(10) UNSIGNED NOT NULL,
  `room_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `room_size` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `room_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room_price` int(11) NOT NULL,
  `room_amount_people` int(10) NOT NULL,
  `room_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_rooms`
--

INSERT INTO `tb_rooms` (`room_id`, `room_type`, `room_size`, `room_description`, `room_price`, `room_amount_people`, `room_image`) VALUES
(1, 'Superior Single Room', '28m2', 'Được thiết kế theo phong cách đương đại và trang bị nhiều tiện nghi cao cấp, phòng Superior là lựa chọn tuyệt vời cho khách du lịch một mình hay cặp đôi.', 2000000, 2, 'single-room.jpg'),
(2, 'Luxury Single Room Art', '30m2', 'Luxury Single Room Art có kích thước giường đôi thoải mái, khu vực tiếp khách, bàn làm việc và phòng tắm riêng biệt với bồn tắm và vòi sen cùng nghệ thuật hiện đại và màu sắc trung tính.', 900000, 2, 'luxury-single.jpg'),
(3, 'Deluxe Double Room', '35m2', 'Yên bình và riêng tư, phòng Deluxe rộng 35 m2 mang lại không gian nghỉ dưỡng thư thái và tiện nghi. Balcony rộng rãi nhìn ra thung lũng tạo thêm một điểm nhấn lãng mạn cho kì nghỉ của bạn.', 2500000, 3, 'deluxe-double'),
(4, 'Prenium Deluxe Double Room', '43m2', 'Premium Deluxe là lựa chọn tuyệt vời cho du khách yêu thích sự thoải mái và tiện nghi chuẩn quốc tế. Phù hợp cho một chuyến công tác kết hợp nghỉ dưỡng hay đơn giản chỉ là tận hưởng kì nghỉ bên cạnh người thương', 3000000, 3, ''),
(5, 'Luxury Family Room Suite', '59m2', 'Không gian rộng với 2 phòng ngủ riêng biệt, 1 phòng khách sang trọng, ấm áp, Family Suite sở hữu diện tích 59m2 mang lại sự tiện nghi và thoải mái nhất cho cả gia đình, đồng thời các thành viên đều có một không gian riêng.', 3500000, 4, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_services`
--

CREATE TABLE `tb_services` (
  `ser_ID` int(10) UNSIGNED NOT NULL,
  `ser_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ser_room_size` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ser_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ser_price` int(10) NOT NULL,
  `ser_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_services`
--

INSERT INTO `tb_services` (`ser_ID`, `ser_name`, `ser_room_size`, `ser_description`, `ser_price`, `ser_image`) VALUES
(1, 'Nhà hàng', '200', 'Nhà hàng thiết kế phong cách châu Âu mang lại sự sang trọng và đẳng cấp, không gian bên ngoài thoáng đãng phù hợp với những người tìm kiếm sự thư giãn yên bình.', 300000, ''),
(2, 'Phòng họp', '50', 'Phòng họp với số lượng tối đa 50 người, không gian thoáng đãng tràn ngập ánh mặt trời với một bên là tường kính nhìn ra mặt biển.', 200000, ''),
(3, 'Đám cưới', '400', 'Khách sạn cung cấp dịch vụ tổ chức đám cưới phù hợp tùy nhu cầu của từng cặp đôi. Chúng tôi có một phòng đám cưới nhỏ hoặc các cặp đôi lựa chọn tổ chức đám cưới ở biển.', 1000000, ''),
(4, 'Massage', '30', 'Đến với chúng tôi, khách hàng sẽ được trải nghiệm những phút giây yên bình, thư giãn. Cơ thể và tâm trí được thả lỏng, cảm nhận sự chậm rãi của tự nhiên..', 150000, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_admins`
--
ALTER TABLE `tb_admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tb_customers`
--
ALTER TABLE `tb_customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Chỉ mục cho bảng `tb_order_rooms`
--
ALTER TABLE `tb_order_rooms`
  ADD PRIMARY KEY (`ordroom_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Chỉ mục cho bảng `tb_order_services`
--
ALTER TABLE `tb_order_services`
  ADD PRIMARY KEY (`ordser_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `ser_id` (`ser_id`);

--
-- Chỉ mục cho bảng `tb_rooms`
--
ALTER TABLE `tb_rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Chỉ mục cho bảng `tb_services`
--
ALTER TABLE `tb_services`
  ADD PRIMARY KEY (`ser_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_admins`
--
ALTER TABLE `tb_admins`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tb_customers`
--
ALTER TABLE `tb_customers`
  MODIFY `cus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tb_order_rooms`
--
ALTER TABLE `tb_order_rooms`
  MODIFY `ordroom_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_order_services`
--
ALTER TABLE `tb_order_services`
  MODIFY `ordser_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_rooms`
--
ALTER TABLE `tb_rooms`
  MODIFY `room_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tb_services`
--
ALTER TABLE `tb_services`
  MODIFY `ser_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_order_rooms`
--
ALTER TABLE `tb_order_rooms`
  ADD CONSTRAINT `tb_order_rooms_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `tb_customers` (`cus_id`),
  ADD CONSTRAINT `tb_order_rooms_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `tb_rooms` (`room_id`);

--
-- Các ràng buộc cho bảng `tb_order_services`
--
ALTER TABLE `tb_order_services`
  ADD CONSTRAINT `tb_order_services_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `tb_customers` (`cus_id`),
  ADD CONSTRAINT `tb_order_services_ibfk_2` FOREIGN KEY (`ser_id`) REFERENCES `tb_services` (`ser_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
