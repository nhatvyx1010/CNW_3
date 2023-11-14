-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2023 lúc 10:16 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dulieu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(20) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `password`) VALUES
('1', 'nhatvy', 'nhatvy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `IDNV` varchar(20) NOT NULL,
  `HoTen` text DEFAULT NULL,
  `IDPB` varchar(20) DEFAULT NULL,
  `DiaChi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`IDNV`, `HoTen`, `IDPB`, `DiaChi`) VALUES
('NV01', 'Nhan Vien 1', 'PB01', 'Dia Chi 1'),
('NV02', 'Nhan Vien 2', 'PB02', 'Dia Chi 2'),
('NV03', 'Nhan Vien 3', 'PB03', 'Dia Chi 3'),
('NV04', 'Nhan Vien 4', 'PB04', 'Dia Chi 4'),
('NV05', 'Nhan Vien 5', 'PB05', 'Dia Chi 5'),
('NV06', 'Nhan Vien 6', 'PB01', 'Dia Chi 6'),
('NV07', 'Phạm FFF', 'PB01', 'DiaChi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `IDPB` varchar(20) NOT NULL,
  `TenPB` text DEFAULT NULL,
  `MoTa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`IDPB`, `TenPB`, `MoTa`) VALUES
('PB01', 'Phong Ban 1', 'PBan 1'),
('PB02', 'Phong Ban 2', 'PBan 2'),
('PB03', 'Phong Ban 3', 'PBan 3'),
('PB04', 'Phong Ban 4', 'PBan 4'),
('PB05', 'Phong Ban 5', 'PBan 5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` char(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `university` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `name`, `age`, `university`) VALUES
('1', 'Nguyen Van A', 18, 'BK_DN'),
('2', 'Pham Thi Bn', 19, 'BK_HN'),
('3', 'Tran C', 20, 'BK_HCM'),
('5', 'Huynh E', 22, 'NN');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`IDNV`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`IDPB`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
