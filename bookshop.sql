-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 10:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `bookid` int(11) NOT NULL COMMENT 'รหัสหนังสือ',
  `title` varchar(225) NOT NULL COMMENT 'ชื่อหนังสือ',
  `price` decimal(10,2) NOT NULL COMMENT 'ราคา',
  `author` varchar(225) NOT NULL COMMENT 'ผู้แต่ง',
  `publication_date` datetime NOT NULL COMMENT 'วันที่จำหน่าย',
  `file_name` varchar(225) NOT NULL,
  `u_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `status_book` int(11) NOT NULL COMMENT '0 = ยังไม่อนุมัติ 1 = อนุมัติ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`bookid`, `title`, `price`, `author`, `publication_date`, `file_name`, `u_id`, `c_id`, `status_book`) VALUES
(1, 'Letters by a Modern Mystic', '1000.00', 'แฟรงก์ เลาบาช', '2022-07-12 14:59:00', 'book6.jpg ', 3, 13, 1),
(3, 'chainsaw man 9', '170.00', 'Benajmin', '2022-07-14 15:52:00', 'book2.jpg ', 3, 2, 1),
(5, 'MY EYES', '500.00', 'เราเอง', '2022-07-14 17:06:00', '98c62a45eb1d0be36d4d7c15c88332ba.jpg ', 7, 1, 1),
(6, 'Simplicissimus', '1576.00', 'Benajmin', '2022-07-14 17:54:00', '3341135ea2d4badd23b79c80ab243290.jpg ', 6, 4, 1),
(8, 'AKIRA', '600000.00', '600000', '2022-07-14 17:55:00', '634be42d4a4991c30e30e7c16f9d07d7.jpg ', 6, 2, 1),
(9, 'BABANA', '500.00', '-', '2022-07-15 15:03:00', '8ab498ac5668f0066544d2b999402722.jpg ', 3, 2, 1),
(11, 'Weeky junb', '500.00', '-', '2022-07-25 11:52:00', '9061d27de978c1c8617f5767f2033561.jpg ', 3, 17, 1),
(12, 'Chain saw man EP1', '70.00', '-', '2022-07-25 11:52:00', '135e71de4db7d168a39d1fd603d0e10f.jpg ', 3, 2, 1),
(13, 'The Doors of  Perception', '1500.00', '-', '2022-07-25 11:54:00', 'de68e977fa2012a42a9f14ddfcbc5197.jpg ', 3, 6, 1),
(14, 'Weekly jump 29', '150.00', '-', '2022-07-25 11:56:00', 'ec2c77cb85b06404cec8c0d46c54f200.jpg ', 9, 17, 1),
(15, 'Death note', '150.00', '-', '2022-07-25 11:56:00', '0ec5055ddd071bf4bc6cad1ab6532250.jpg ', 9, 2, 1),
(17, 'SlamDunk Ep6', '200.00', 'ทาเกฮิโกะ อิโนอูเอะ', '2022-07-25 12:18:00', '7d63f070c388c6e32e1b63efc28f504a.jpg ', 9, 2, 1),
(18, 'JAW', '500.00', '-', '2022-07-27 13:17:00', '9a2d600af6e27c9985b85764e3180c7d.jpg ', 3, 1, 1),
(19, 'Chainsaw man ep7', '70.00', '-', '2022-08-01 02:10:00', 'aa567a684fd52c42faeb004a50cb5b51.jpg ', 3, 2, 1),
(20, 'Bleach ep 25', '170.00', '-', '2022-08-08 08:53:00', '63ce96136111625932f2f2c7829c77b1.jpg ', 4, 2, 1),
(21, 'Vagabond ep3', '250.00', 'ทาเคฮิโกะ อิโนอุเอะ', '2022-08-08 08:55:00', '5b5e64cd5d7acc891cfe1f659c21af8f.jpg ', 4, 2, 1),
(22, 'Vagabond ep 5', '250.00', 'ทาเคฮิโกะ อิโนอุเอะ', '2022-08-08 08:56:00', '240a522eb79bcb28579934365a41f8b7.jpg ', 4, 2, 1),
(23, 'American Pycho', '300.00', 'เบรต อิสตัน เอลลิส', '2022-08-08 08:56:00', 'dd9bc91f692116169129768c33064072.jpg ', 4, 4, 1),
(24, 'Steal this book', '100.00', '-', '2022-08-08 08:57:00', 'a18f6abd289282be8947a14b64939e2b.jpg ', 4, 4, 1),
(25, 'Berserk', '250.00', 'เค็นตาโร มิอูระ', '2022-08-08 08:58:00', '93686b38634b45d464fcd0e27d83de9b.jpg ', 4, 2, 1),
(26, 'Science', '500.00', '-', '2022-08-08 08:59:00', 'a87bbd817ea422c315a8885d067d0861.jpg ', 4, 6, 1),
(27, 'เตรียมนายร้อย', '250.00', '-', '2022-08-08 09:00:00', '9786162105463l.jpg ', 4, 8, 1),
(28, 'We are giants', '150.00', '-', '2022-08-08 09:20:00', '69be89f3cc1356a67854f231bb9ba260.jpg ', 4, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `c_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`c_id`, `name`) VALUES
(1, 'นิยาย / วรรณกรรม'),
(2, 'การ์ตูน / มังงะ'),
(3, 'หนังสือเด็ก'),
(4, 'หนังสือจิตวิทยาทั่วไป'),
(5, 'ธุรกิจ'),
(6, 'วิชาการ และ การเรียนรู้'),
(7, 'ภาษา'),
(8, 'คู่มือเตรียมสอบ'),
(9, 'ครอบครัว แม่และเด็ก'),
(10, 'บ้านและสวน'),
(11, 'งานอดิเรก'),
(12, 'อาหารและเครื่องดื่ม'),
(13, 'ศาสนา & โหราศาสตร์'),
(14, 'ความรู้ทั่วไป'),
(15, 'ท่องเที่ยว'),
(16, 'สุขภาพและความงาม'),
(17, 'นิตยสาร');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `u_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `password` varchar(20) NOT NULL COMMENT 'รหัสผ่าน',
  `fullname` varchar(225) NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `email` varchar(225) NOT NULL COMMENT 'อีเมล',
  `phone` varchar(10) NOT NULL COMMENT 'เบอร์โทร',
  `status` int(11) NOT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_id`, `username`, `password`, `fullname`, `email`, `phone`, `status`) VALUES
(1, 'Admin01', '1234', 'Benjamin Thongmee', 'test@gm333ail.com', '087534234', 1),
(2, 'Admin02', '1234', 'นงเยาว์', 'test03@gmail.com', '0641269651', 1),
(3, 'User01', '1234', 'Nattanon seeprasert', 'test04@gmail.com', '0641269651', 0),
(4, 'User02', '1234', 'Wacarapol', 'jaminfaro@gmail.com', '0641269651', 0),
(5, 'Admin03', '1234', 'สุชานนท์', 'test02@gmail.com', '0641269651', 1),
(6, 'User03', '1234', 'เจสสดา', 'jaminfaro@gmail.com', '1111', 0),
(7, 'User04', '1234', 'นมวัว', 'jaminfaro@gmail.com', '1234', 0),
(9, 'User05', '1234', 'SODO', 'test04@gmail.com', '1234', 0),
(13, 'Admin013', '1234', 'Benjamin 22223Thongmee', 'jaminfaro@gma222il.com', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสหนังสือ', AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD CONSTRAINT `tbl_book_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `tbl_user` (`u_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_book_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `tbl_category` (`c_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
