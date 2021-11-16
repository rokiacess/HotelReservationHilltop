-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 06:38 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `day` int(11) NOT NULL,
  `guest_total` int(11) NOT NULL,
  `payment_method` varchar(10) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `discountFullname` varchar(50) NOT NULL,
  `IDno` int(40) NOT NULL,
  `PVcode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `middlename`, `lastname`, `address`, `contactno`, `email`, `day`, `guest_total`, `payment_method`, `discount`, `discountFullname`, `IDno`, `PVcode`) VALUES
(65, 'arra', 'pesito', 'pegad', 'angono rizal city', '0987643212', 'arrajanepesito@gmail.com', 0, 0, '', '', '', 0, 0),
(66, 'Trisha', 'M.', 'Gutierrez', 'Pinagbuhatan, pasig city', '09785456452', 'bebexd64@yahoo.com', 0, 0, '', '', '', 0, 0),
(67, 'Trisha', 'M.', 'Gutierrez', 'Pinagbuhatan, pasig city', '09785456452', 'bebexd64@yahoo.com', 0, 0, '', '', '', 0, 0),
(81, 'Jisele', 'D', 'Abriza', 'Sagad', '0936573397P', 'sissycessrokia@gmail.com', 0, 0, '', '', '', 0, 0),
(82, 'Jisele', 'D', 'Abriza', 'Sagad', '0936573397356', 'sissycessrokia@gmail.com', 0, 0, '', '', '', 0, 0),
(83, 'Jisele', 'D', 'Abriza', 'Sagad', '0936573397554', 'sissycessrokia@gmail.com', 0, 0, '', '', '', 0, 0),
(84, 'Jisele', 'D', 'Abriza', 'Sagad ', '09367533973', 'sissycessrokia@gmail.com', 0, 0, '', '', '', 0, 0),
(85, 'Salie', 'O', 'Ballano', 'angono city', '09365733973', 'bsaliefel', 0, 0, '', '', '', 0, 0),
(86, 'Venice', 'C', 'Valerio', 'emmarville nagpayong 2 pinagbuhatan pasig city', '09365733973', 'sissycessrokia@gmail.com', 0, 0, '', '', '', 0, 0),
(87, 'Venice', 'C', 'valerio', 'nagpayong 2 pinagbuahtan pasig city', '09365733973', 'sissycessrokia@gmail.com', 0, 0, '', '', '', 0, 0),
(98, 'Arra Jane', 'P.', 'Posito', 'angono rizal', '9362588412', 'arrajanepegad@gmail.com', 2, 2, '', '', '', 0, 0),
(99, 'Sissy', '', 'cess', 'pasig', '9362588741', 'sissycessrokia@gmail.com', 1, 1, 'cash', '', '', 0, 0),
(100, 'mina', '', 'pinagayao', 'pasig', '9258744123', 'minapinagayao@gmail.com', 1, 1, 'cash', '', '', 0, 0),
(101, 'meme', '', 'just try', 'pasig', '9857411236', 'meme@gmail.com', 1, 1, 'cash', 'None', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `price` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `price`, `photo`, `description`) VALUES
(1, 'Pano Verde', '6300', 'hpvd1.jpg', 'Pano Verde which was good for 3 pax and costs only 6,300, \r\nhad access to 2 pools. It has a 2ft kiddie pool and the other is 4ft'),
(2, 'Buena Bista', '9000', 'hb1.jpg', 'Buena Bista which is only 9,000 good for 5 pax and the extra person is 200 pesos, it includes 2 rooms with free breakfast.'),
(3, 'Panovilla', '12000', 'hpv3.jpg', 'Pano villa is the biggest it cost 12,000 , it\'s air-conditioned, and have access to one adult pool with a scenic view of Antipolo.'),
(4, 'Panorama', '8000', 'hpn3.jpg', 'The panorama which is only 8,000 good for staying in out night,1 room with 1 single bed and access to the adult pool with free dinner'),
(5, 'Executive Suite', '15000', 'hE2.jpg', 'Located on the second floor. Large veranda with table and chairs. Two single beds. One sofa bed with a table, Free Breakfast, and dinner only.');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_no` int(5) NOT NULL,
  `extra_expenses` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `days` int(2) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(10) NOT NULL,
  `status_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `room_id`, `room_no`, `extra_expenses`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`, `status_bill`) VALUES
(1, 2, 5, 1, 0, 'Check Out', 1, '2020-12-30', '16:18:03', '2020-12-27', '16:33:50', '4000', 0),
(3, 4, 4, 2, 1, 'Check Out', 3, '2021-01-03', '17:32:33', '2021-01-06', '11:32:05', '4500', 0),
(16, 31, 1, 1, 0, 'Check Out', 1, '2021-01-08', '23:25:31', '2021-01-08', '23:25:37', '1300', 0),
(50, 77, 1, 2, 0, 'Check Out', 1, '2021-01-26', '19:36:54', '2021-01-23', '12:42:19', '1300', 0),
(51, 78, 1, 3, 1, 'Check Out', 2, '2021-01-27', '20:03:02', '2021-01-25', '12:42:13', '3400', 0),
(52, 79, 1, 1, 1, 'Check Out', 1, '2021-07-01', '12:53:35', '2021-07-01', '12:54:07', '2100', 0),
(55, 84, 3, 2, 0, 'Check Out', 1, '2021-07-10', '06:02:27', '2021-07-14', '13:33:55', '12000', 0),
(58, 88, 5, 1, 0, 'Check Out', 2, '2021-07-16', '05:50:05', '2021-07-15', '17:51:05', '30', 0),
(59, 89, 5, 3, 0, 'Check Out', 1, '2021-07-17', '02:11:44', '2021-07-16', '18:01:13', '15000', 0),
(60, 90, 3, 1, 0, 'Check Out', 2, '2021-07-17', '17:53:52', '2021-07-18', '13:33:49', '24000', 0),
(68, 98, 3, 2, 0, 'Check In', 2, '2021-07-23', '15:10:57', '2021-07-24', '00:00:00', '24000', 0),
(71, 101, 3, 0, 0, 'Pending', 0, '2021-10-01', '00:00:00', '0000-00-00', '00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `user_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `user_login_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_cpassword` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`user_id`, `guest_id`, `user_login_id`, `user_name`, `user_password`, `user_cpassword`, `user_email`, `user_mobile`) VALUES
(1, 0, 0, '', '9039d572c68d3690ab6c47029505560f', '', 'sissycessrokia@gmail.com', 978654372),
(2, 0, 0, '', '9c2f924fb2f7004e7979ab2027ca1d65', '', 'arrajanepesito@gmail.com', 978654372),
(3, 0, 0, '', '9039d572c68d3690ab6c47029505560f', '', 'arrajanepesito@gmail.com', 978654372),
(4, 0, 0, '', '9039d572c68d3690ab6c47029505560f', '', 'sissycessrokia@gmail.com', 978654372),
(5, 0, 0, '', 'd80eada8019e90959262354b622d4783', '', 'beapinagayao@gmail.com', 978654372),
(6, 0, 0, '', '9039d572c68d3690ab6c47029505560f', '', 'sissycessrokia@gmail.com', 978654372),
(7, 0, 0, '', '9039d572c68d3690ab6c47029505560f', '', 'saliefel@gmail.com', 2147483647),
(8, 0, 0, '', 'd80eada8019e90959262354b622d4783', '', 'edzraelpinagayaosapphire@gmail', 2147483647),
(9, 0, 0, '', '9039d572c68d3690ab6c47029505560f', '', 'sissycessrokia@gmail.com', 2147483647),
(10, 0, 0, '', 'f75c4750b3ddad409b07f44a28c82228', '', 'sissycessrokia@gmail.com', 2147483647),
(11, 0, 0, '', '9039d572c68d3690ab6c47029505560f', '', 'bsaliefel@gmail.com', 2147483647),
(12, 0, 0, '', '9039d572c68d3690ab6c47029505560f', '', 'sissycessrokia@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `guest_id` (`guest_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
