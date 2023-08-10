-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 07:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_bsms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_code` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `mobile_no` text DEFAULT NULL,
  `trnzaction_code` int(11) DEFAULT NULL,
  `barcode_user` text DEFAULT NULL,
  `tracking_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `user_code`, `address`, `mobile_no`, `trnzaction_code`, `barcode_user`, `tracking_no`) VALUES
(1, 1, 'kondali', '8390942112', 84, '75463422690', '46911558'),
(2, 6, 'aaaaaaaaaaaaaaaaaaaaa', '1111111111', 85, '50368948068', '46911558'),
(3, 1, 'besa', '28599596562', 86, '78446552844', '33977819'),
(4, 18, '123401', '8168470823', 87, '83594996765', '91164232');

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

CREATE TABLE `billing_address` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `address_1` varchar(300) NOT NULL,
  `address_2` varchar(300) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip_code` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_address`
--

INSERT INTO `billing_address` (`id`, `first_name`, `last_name`, `email`, `mobile_no`, `address_1`, `address_2`, `country`, `city`, `state`, `zip_code`) VALUES
(1, ' sumit', 'mudaliar', 'yzx@gmail.com', 2147483647, ' wfafawf', 'ghvhgvhb', 'India', 'Nagpur', 'Maharashtra', 440011),
(2, ' sumit', 'mudaliar', 'shzjsvhgjb@gmaiol.com', 2147483647, ' nuuibuinim', 'ghvhgvhb', 'India', 'Nagpur', 'Maharashtra', 440011),
(3, ' sumit', 'mudaliar', 'shzjsvhgjb@gmaiol.com', 2147483647, ' nuuibuinim', 'ghvhgvhb', 'India', 'Nagpur', 'Maharashtra', 440011);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_code` int(11) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `category_code` int(11) NOT NULL,
  `price` int(25) NOT NULL,
  `book_img` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `writer` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_code`, `book_title`, `year`, `category_code`, `price`, `book_img`, `publisher`, `writer`, `stock`) VALUES
(1, 'Sample Book 101', 2018, 1, 350, 'book1.jpg', 'Publisher 1', 'Author 1 et. al.', -7),
(2, 'Sample Book 102', 2018, 2, 450, 'book2.jpg', 'Publisher 2', 'Author 2 et. al.', 8),
(3, 'Sample Book 103', 2020, 3, 750, 'book3.jpg', 'Publisher 3', 'Author 3 et. al.', 7),
(7, 'DBMS', 2019, 1, 420, 'pexels-pixabay-36717.jpg', 'Publisher4', 'Author4', 1),
(8, 'HTML 5', 2020, 1, 480, 'book7.jpg', 'Publisher', 'Author', 8),
(9, 'Chemical Ciochemistry', 2012, 1, 890, 'book5.jpg', 'Publisher', 'Author', 5),
(11, 'Python & Data Science', 2019, 1, 1250, 'manishde.png', 'Publisher', 'Author', 10);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `category_code` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`category_code`, `category_name`) VALUES
(1, 'Educational'),
(2, 'Function'),
(3, 'Fantasy'),
(4, 'Horror'),
(5, 'Sample 101');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `otp_generate`
--

CREATE TABLE `otp_generate` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `Eamil_ID` varchar(50) NOT NULL,
  `otp_code` int(10) NOT NULL,
  `status` smallint(5) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_generate`
--

INSERT INTO `otp_generate` (`id`, `user_id`, `product_id`, `Eamil_ID`, `otp_code`, `status`, `time`) VALUES
(1, 412536, 46545, 'sumitmudaliar18@gmail.com', 803673, 0, '2022-12-09 10:56:03'),
(2, 412536, 46545, 'sumitmudaliar18@gmail.com', 317379, 0, '2022-12-09 11:01:32'),
(3, 412536, 46545, 'sumitmudaliar18@gmail.com', 394348, 0, '2022-12-09 11:40:43'),
(4, 412536, 46545, 'sumit@gmail.com', 139096, 0, '2022-12-12 06:02:04'),
(5, 412536, 46545, 'sumit@gmail.com', 480071, 0, '2022-12-12 10:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `payment_mode`
--

CREATE TABLE `payment_mode` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `transaction_code` int(11) NOT NULL,
  `tracking_no` varchar(100) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `upi_id` varchar(100) NOT NULL,
  `card_no` varchar(100) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `expary_date` varchar(15) NOT NULL,
  `CVV_no` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_mode`
--

INSERT INTO `payment_mode` (`id`, `products_id`, `transaction_code`, `tracking_no`, `payment_mode`, `upi_id`, `card_no`, `card_name`, `expary_date`, `CVV_no`, `payment_status`, `payment_date`) VALUES
(5, 74320710, 8554552, '8794651', 'UPI-PAYMENT', 'manish@OKsbi', '874455251255', '', '12/2027', 889, 1, '2022-12-10 08:14:17'),
(6, 40862609, 8554552, '8794651', 'UPI-PAYMENT', 'manish@OKsbi', '874455251255', '', '12/2027', 889, 1, '2022-12-10 08:15:22'),
(7, 83677418, 8554552, '8794651', 'UPI-PAYMENT', 'manish@OKsbi', '874455251255', '', '12/2027', 889, 1, '2022-12-10 08:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_code` int(11) NOT NULL,
  `user_code` int(11) NOT NULL,
  `buyer_name` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `book_qty` int(11) NOT NULL,
  `tracking_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_code`, `user_code`, `buyer_name`, `total`, `tgl`, `bookname`, `book_qty`, `tracking_no`) VALUES
(84, 1, 'dipali', 1240, '2022-12-03', 'Chemical Ciochemistry', 1, '46911558'),
(85, 6, 'aaaaaaaaaaaa', 1240, '2022-12-03', 'Chemical Ciochemistry', 1, '46911558'),
(86, 1, 'manish', 1550, '2022-12-05', 'Sample Book 103', 1, '33977819'),
(87, 18, 'sunil', 750, '2022-12-06', 'Sample Book 103', 1, '91164232');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `transaction_code` int(11) NOT NULL,
  `book_code` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `tracking_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`transaction_code`, `book_code`, `amount`, `tracking_no`) VALUES
(84, 1, 1, '46911558'),
(84, 9, 1, '46911558'),
(85, 1, 1, '46911558'),
(85, 9, 1, '46911558'),
(86, 1, 1, '33977819'),
(86, 2, 1, '33977819'),
(86, 3, 1, '33977819'),
(87, 3, 1, '91164232');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_code` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_OTP` int(11) NOT NULL,
  `verify_otp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_code`, `fullname`, `username`, `password`, `level`, `user_email`, `user_OTP`, `verify_otp`) VALUES
(1, 'Manish Deotale', 'manish', 'c051fa4d22f18e9c78a3c4f3dddb5a4f', 'admin', '0', 0, '1'),
(6, 'sumit', 'sumit', '5e2b47753541ab2d91a34f1e870dfdcb', 'client', '0', 0, ''),
(7, 'ajay', 'ajay bhai', '82e7b60f17cd5c5b7f052728fa8be4d8', 'client', '0', 0, ''),
(8, 'Shivam Kalbut ', 'shivam', '314b722321c1b79e9bcbeb4020106907', 'client', '0', 0, ''),
(16, 'manih', 'manish', '59c95189ac895fcc1c6e1c38d067e244', 'cashier', 'manishdamodharrao@gmail.com', 638245, '1'),
(17, 'ajay sharma', 'chintu', '82e7b60f17cd5c5b7f052728fa8be4d8', 'cashier', 'kaushik.ajay1992@gmail.com', 178244, '1'),
(18, 'Ajay', 'chintu', '82e7b60f17cd5c5b7f052728fa8be4d8', 'cashier', 'ajay.kaushik122@gmail.com', 530745, '1'),
(19, 'sumit', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'client', 'sumitmudaliar18@gmail.com', 872567, '0'),
(20, 'sumit', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'client', 'sumitmudaliar18@gmail.com', 761977, '0'),
(21, 'sumit mudaliar', 'admin', '2097c69fbd54c190cd87c5eb3d1e7caa', 'client', 'sumit@gmail.com', 851382, '1'),
(22, 'sumit mudaliar', 'manish', '8661907da1335d7554b8e4e8542d29d8', 'client', 'sumitmudaliar18@gmail.com', 963489, '0'),
(23, 'sumit mudaliar', 'manish', '263cfc6278edcf794c5474108c2ac076', 'client', 'sumitmudaliar18@gmail.com', 550897, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_address`
--
ALTER TABLE `billing_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_code`),
  ADD KEY `kode_kategori` (`category_code`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`category_code`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_generate`
--
ALTER TABLE `otp_generate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_mode`
--
ALTER TABLE `payment_mode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_code`),
  ADD KEY `kode_user` (`user_code`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD KEY `kode_transaksi` (`transaction_code`),
  ADD KEY `kode_buku` (`book_code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `billing_address`
--
ALTER TABLE `billing_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `category_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp_generate`
--
ALTER TABLE `otp_generate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_mode`
--
ALTER TABLE `payment_mode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`category_code`) REFERENCES `book_category` (`category_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`user_code`) REFERENCES `user` (`user_code`);

--
-- Constraints for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD CONSTRAINT `transaction_detail_ibfk_1` FOREIGN KEY (`transaction_code`) REFERENCES `transaction` (`transaction_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_detail_ibfk_2` FOREIGN KEY (`book_code`) REFERENCES `book` (`book_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
