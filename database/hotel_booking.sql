-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 27, 2021 lúc 03:14 AM
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
  `admin_name` varchar(50) NOT NULL,
  `admin_mobile` varchar(12) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_customers`
--

CREATE TABLE `tb_customers` (
  `cus_id` int(10) UNSIGNED NOT NULL,
  `cus_name` varchar(50) NOT NULL,
  `cus_mobile` varchar(12) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `cus_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_customers`
--

INSERT INTO `tb_customers` (`cus_id`, `cus_name`, `cus_mobile`, `cus_email`, `cus_pass`) VALUES
(1, 'Đặng Tuấn Anh', '0988280697', 'dtanh@gmail.com', '123');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_rooms`
--

CREATE TABLE `tb_rooms` (
  `room_id` int(10) UNSIGNED NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_size` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `room_price` int(11) NOT NULL,
  `room_amount_people` int(10) NOT NULL,
  `room_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_services`
--

CREATE TABLE `tb_services` (
  `ser_ID` int(10) UNSIGNED NOT NULL,
  `ser_name` varchar(50) NOT NULL,
  `ser_room_size` varchar(10) NOT NULL,
  `ser_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_services`
--

INSERT INTO `tb_services` (`ser_ID`, `ser_name`, `ser_room_size`, `ser_price`) VALUES
(1, 'Nhà hàng', '200', 300000),
(2, 'Phòng họp', '50', 200000),
(3, 'Đám cưới', '400', 1000000),
(4, 'Massage', '30', 150000);

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
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_customers`
--
ALTER TABLE `tb_customers`
  MODIFY `cus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `room_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
