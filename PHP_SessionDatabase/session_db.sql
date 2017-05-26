-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 26, 2017 lúc 03:58 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `session_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` char(128) NOT NULL,
  `set_time` char(10) NOT NULL,
  `data` text NOT NULL,
  `session_key` char(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `set_time`, `data`, `session_key`) VALUES
('s54ih8ib86uc2h83kes666alsdbthd6rmeie8rbsmqjkq3slhmu3rthck6p9bl7mldskmm3kd312ni9isll88rtpitjgt2vfke2cqb0', '1495592971', 'wu9qefHZxXzyzUHxq6AgxOl2G81f0/wsscYkghqTWnc=', 'b509e15d8224bee859e27ec4695fa1e035d026ea3c59c8178f535c9dd820a675c825153bb82d5c22ee7a6d7f2fe337237a3f20b8e592de605ed534423ee9f1d3'),
('v6jgumgikc6blmubrhlimc5oken5g03jocgj5noousu706b0d8ma88s05m195k3qf7t5clq14a66oa0oph4tjdf8ab4t8l6a76uk240', '1495592886', 'ET2ZGBhLKWYdjeVd+a7tFMkekogu5y+3JeqrC8sXFKE=', '6d6010825ccaae68b47d14e3af953dcbc4dbc59cd39034b6685027647edb25364e72cf05f40a3a7747cf3d18161b531f701c0332ea35d7b6cb523716e4efc416');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
