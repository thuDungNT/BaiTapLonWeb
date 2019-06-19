-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 07:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quangdinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `maalbum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenalbum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`maalbum`, `tenalbum`, `noidung`, `anh`) VALUES
('ab01', 'album me va be ', 'Dù con bao nhiêu tuổi, với bố, mẹ con vẫn luôn là đứa con bé bỏng của bố mẹ. Cảm ơn con rất nhiều vì đã đến cuộc đời này.', 'img/anh me va be 11.jpg'),
('ab02', 'album gia dinh', '\"Hạnh phúc thật sự sẽ lan tỏa như một bông hoa ngào ngạt hương thơm và thu hút những điều tốt đẹp đến bên bạn\". - Maharishi Mahesh Yogi.', 'img/anh gia dinh 12.jpg'),
('ab03', 'album anh be', 'Đây là con gái mình. Đây là công chúa nhỏ của đời mình. Chúng mình có thể nắm tay nhau đi khắp thế gian.', 'img/anh be 12.jpg'),
('ab04', 'album nghe thuat', '\"Dù là vua chúa hay dân cày, kẻ nào tìm thấy được sự an bình trong gia đình là người sung sướng nhất\". - Goethe.', 'img/anh nghe thuat 123.jpg'),
('ab05', 'album ki niem', 'Có một nơi để về, đó là nhà. Có những người yêu thương, đó là gia đình. Có được cả 2, đó là hạnh phúc', 'img/anh ki niem 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `anhqd`
--

CREATE TABLE `anhqd` (
  `maanhh` int(10) NOT NULL,
  `maalbum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anhqd`
--

INSERT INTO `anhqd` (`maanhh`, `maalbum`, `link`) VALUES
(1, 'ab01', 'img/anh 7.jpg'),
(2, 'ab01', 'img/anh 8.jpg'),
(3, 'ab01', 'img/anh 9.jpg'),
(4, 'ab01', 'img/anh 10.jpg'),
(5, 'ab01', 'img/anh 11.jpg'),
(6, 'ab01', 'img/anh 12.jpg'),
(7, 'ab02', 'img/anh 13.jpg'),
(8, 'ab02', 'img/anh 14.jpg'),
(9, 'ab02', 'img/anh 15.jpg'),
(10, 'ab02', 'img/anh 7.jpg'),
(11, 'ab02', 'img/anh 8.jpg'),
(12, 'ab02', 'img/anh 9.jpg'),
(13, 'ab03', 'img/anh 8.jpg'),
(14, 'ab04', 'img/anh 8.jpg'),
(15, 'ab05', 'img/anh 8.jpg'),
(16, 'ab03', 'img/anh 9.jpg'),
(17, 'ab04', 'img/anh 9.jpg'),
(18, 'ab05', 'img/anh 9.jpg'),
(19, 'ab03', 'img/anh 10.jpg'),
(20, 'ab04', 'img/anh 10.jpg'),
(21, 'ab05', 'img/anh 10.jpg'),
(22, 'ab03', 'img/anh 11.jpg'),
(23, 'ab04', 'img/anh 11.jpg'),
(24, 'ab05', 'img/anh 11.jpg'),
(25, 'ab03', 'img/anh 12.jpg'),
(26, 'ab04', 'img/anh 12.jpg'),
(27, 'ab05', 'img/anh 12.jpg'),
(28, 'ab03', 'img/anh 13.jpg'),
(29, 'ab04', 'img/anh 13.jpg'),
(30, 'ab05', 'img/anh 13.jpg'),
(31, 'ab01', 'img/anh 13.jpg'),
(32, 'ab01', 'img/anh 14.jpg'),
(33, 'ab02', 'img/anh 14.jpg'),
(34, 'ab03', 'img/anh 14.jpg'),
(35, 'ab04', 'img/anh 14.jpg'),
(36, 'ab05', 'img/anh 14.jpg'),
(37, 'ab02', 'img/anh 14.jpg'),
(38, 'ab03', 'img/anh 15.jpg'),
(39, 'ab04', 'img/anh 15.jpg'),
(40, 'ab05', 'img/anh 15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`maalbum`);

--
-- Indexes for table `anhqd`
--
ALTER TABLE `anhqd`
  ADD PRIMARY KEY (`maanhh`),
  ADD KEY `fk_` (`maalbum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anhqd`
--
ALTER TABLE `anhqd`
  MODIFY `maanhh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anhqd`
--
ALTER TABLE `anhqd`
  ADD CONSTRAINT `fk_` FOREIGN KEY (`maalbum`) REFERENCES `album` (`maalbum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
