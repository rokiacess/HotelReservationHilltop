-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 06:02 AM
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
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `archive_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `firstname` int(11) NOT NULL,
  `lastname` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `guest_total` int(11) NOT NULL,
  `payment_method` varchar(10) CHARACTER SET latin1 NOT NULL,
  `date_archived` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(20) NOT NULL,
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
(65, 'arra', '', 'pegad', 'angono rizal city', '0987643212', 'arrajanepesito@gmail.com', 0, 0, '', '', '', 0, 0),
(66, 'Trisha', '', 'Gutierrez', 'Pinagbuhatan, pasig city', '09785456452', 'bebexd64@yahoo.com', 0, 0, '', '', '', 0, 0),
(67, 'Trisha', '', 'Gutierrez', 'Pinagbuhatan, pasig city', '09785456452', 'bebexd64@yahoo.com', 0, 0, '', '', '', 0, 0),
(81, 'Jisele', '', 'Abriza', 'Sagad', '0936573397P', 'sissycessrokia@gmail.com', 0, 0, '', '', '', 0, 0),
(82, 'Jisele', '', 'Abriza', 'Sagad', '0936573397356', 'sissycessrokia@gmail.com', 0, 0, '', '', '', 0, 0),
(83, 'Jisele', '', 'Abriza', 'Sagad', '0936573397554', 'sissycessrokia@gmail.com', 0, 0, '', '', '', 0, 0),
(84, 'Jisele', '', 'Abriza', 'Sagad ', '09367533973', 'sissycessrokia@gmail.com', 0, 0, '', '', '', 0, 0),
(85, 'Salie', '', 'Ballano', 'angono city', '09365733973', 'bsaliefel', 0, 0, '', '', '', 0, 0),
(86, 'Venice', '', 'Valerio', 'emmarville nagpayong 2 pinagbuhatan pasig city', '09365733973', 'sissycessrokia@gmail.com', 0, 0, '', '', '', 0, 0),
(87, 'Venice', '', 'valerio', 'nagpayong 2 pinagbuahtan pasig city', '09365733973', 'sissycessrokia@gmail.com', 0, 0, '', '', '', 0, 0),
(98, 'Arra Jane', '', 'Posito', 'angono rizal', '9362588412', 'arrajanepegad@gmail.com', 2, 2, '', '', '', 0, 0),
(99, 'Sissy', '', 'cess', 'pasig', '9362588741', 'sissycessrokia@gmail.com', 1, 1, 'cash', '', '', 0, 0),
(100, 'mina', '', 'pinagayao', 'pasig', '9258744123', 'minapinagayao@gmail.com', 1, 1, 'cash', '', '', 0, 0),
(101, 'meme', '', 'just try', 'pasig', '9857411236', 'meme@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(103, 'Princess Rokia', '', 'Esmael', 'pasig city', '9325744128', 'princessrokia@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(104, 'nawap', '', 'pinagayao', 'blk8 lot 2 emmarville nagpayong 2', '9852144752', 'nawappinagayao@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(105, 'salie', '', 'ballano', 'pasig', '9352144785', 'salieballano@gmail.com', 2, 1, 'cash', 'None', '', 0, 0),
(106, 'cheche', '', 'ballano', 'blk 8 lot 2 emmarville', '9521477852', 'cheche@gmail.com', 2, 1, '', 'None', '', 0, 0),
(107, 'cheche', '', 'ballano', 'blk 8 lot 2 emmarville', '9521477852', 'cheche@gmail.com', 1, 1, '', 'None', '', 0, 0),
(108, 'cheche', '', 'ballano', 'blk 8 lot 2 emmarville', '9521477852', 'cheche@gmail.com', 1, 1, '', 'None', '', 0, 0),
(109, 'Bea', '', 'Pinagayao', 'pasig city', '9856322145', 'beapinagayao@gmail.com', 1, 1, 'cash', '', '', 0, 0),
(164, 'Trisha', '', 'Ballano', 'Pasig City', '9362588745', 'trisha@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(165, 'Roselyn', '', 'Bandoquilo', 'blk 20 lot 23 taliay is st. pasig sicy', '9362588741', 'roselyn@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(166, 'Joanne', '', 'Salas', 'Taguig City', '9857412563', 'joanne@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(167, 'Jennifer', '', 'Llaneta', 'maybunga, Mangahan', '9857412586', 'jennyllaneta@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(168, 'Salifel', '', 'Ballano', 'angono city', '9325874122', 'saliefel@gmail.com', 1, 1, 'paymaya', 'None', '', 0, 0),
(169, 'Roselyn', '', 'Bandoquillo', 'Pinagbuhatan pasig city', '9362588745', 'roselynbandquillo@gmail.com', 2, 1, 'paymaya', 'None', '', 0, 0),
(170, 'Erika', '', 'Bandoquillo', 'Pinagbuhatan pasig city', '9854755621', 'erikabandquillo@gmail.com', 1, 1, 'paymaya', 'None', '', 0, 0),
(171, 'Roselyn', '', 'Bandoquillo', 'Angono City', '9362588745', 'roselynbandoquillo@gmail.com', 1, 1, 'paymaya', 'None', '', 0, 0),
(172, 'Jenny', '', 'Abletes', 'Maybunga Pasig city', '9362588741', 'jenny@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(173, 'Roselyn', '', 'Bandoquillo', 'Pinagbuhatan Pasig City', '9362588741', 'roselyn@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(174, 'Roselyn', '', 'Bandoquillo', 'angono city', '9362588745', 'joanne@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(175, 'Camille', 'B', 'Losito', 'Pasig city', '9251477856', 'camillelosito@gmail.com', 1, 1, 'paymaya', 'None', '', 0, 0),
(176, 'Kim', 'L.', 'Batino', 'Cainta Rizal', '9856322147', 'kimlocero@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(177, 'Carla joyce', '', 'Cerna', 'pasig city', '9325774182', 'carlajoice@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(178, 'Sandro', '', 'Marcos', 'Angono city', '9857466325', 'sandro@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(179, 'Jason paul', '', 'Lopez', 'Pasig city', '9362511236', 'jasonpaul@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(180, 'Jomar', 'M', 'Marzan', 'blk 10 lot 2 talisay st nagpayong 2 piangbuhatan p', '9258741223', 'jomarmarzan@gmail.com', 1, 1, 'cash', 'None', '', 0, 0),
(181, 'Gerald', '', 'Castillano', 'Pinagbuhatan Pasig city', '9874122365', 'geraldcastilano@gmail.com', 1, 1, 'cash', 'None', '', 0, 0);

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
(1, 'Pano Verde', '6300', 'hpvd1.jpg', '* Breakfast included in the price * No smoking * 2 pool (2ft & 5ft pool)\r\n* Maximum 3 guest'),
(2, 'Buena Bista', '9000', 'hb1.jpg', '* Breakfast included in the price\r\n* Air conditioning\r\n* Attached bathroom\r\n* good for 5 pax with extra guest is 300 pesos'),
(3, 'Panovilla', '12000', 'hpv3.jpg', '* Breakfast(only) included in the price * Air-conditioned * Scenic view of Antipolo * Adult pool access'),
(4, 'Panorama', '8000', 'hpn3.jpg', '* Breakfast(only) included in the price * 1 full bed * Balcony * Air conditioning private Bathroom * Flat-screen TV * Pool Access'),
(5, 'Executive Suite', '15000', 'hE2.jpg', '* Breakfast included in the price * King Bed * Balcony Air conditioning * Coffee machine * Free WiFi * One sofa bed');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_no` int(5) NOT NULL,
  `additional_charges` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `days` int(2) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(10) NOT NULL,
  `deposite_amount` int(11) NOT NULL,
  `discount_amount` int(11) NOT NULL,
  `VAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `room_id`, `room_no`, `additional_charges`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`, `deposite_amount`, `discount_amount`, `VAT`) VALUES
(1, 2, 5, 1, 0, 'Check Out', 1, '2020-12-30', '16:18:03', '2020-12-27', '16:33:50', '4000', 0, 0, 0),
(3, 4, 4, 2, 1, 'Check Out', 3, '2021-01-03', '17:32:33', '2021-01-06', '11:32:05', '4500', 0, 0, 0),
(16, 31, 1, 1, 0, 'Check Out', 1, '2021-01-08', '23:25:31', '2021-01-08', '23:25:37', '1300', 0, 0, 0),
(50, 77, 1, 2, 0, 'Check Out', 1, '2021-01-26', '19:36:54', '2021-01-23', '12:42:19', '1300', 0, 0, 0),
(51, 78, 1, 3, 1, 'Check Out', 2, '2021-01-27', '20:03:02', '2021-01-25', '12:42:13', '3400', 0, 0, 0),
(52, 79, 1, 1, 1, 'Check Out', 1, '2021-07-01', '12:53:35', '2021-07-01', '12:54:07', '2100', 0, 0, 0),
(55, 84, 3, 2, 0, 'Check Out', 1, '2021-07-10', '06:02:27', '2021-07-14', '13:33:55', '12000', 0, 0, 0),
(58, 88, 5, 1, 0, 'Check Out', 2, '2021-07-16', '05:50:05', '2021-07-15', '17:51:05', '30', 0, 0, 0),
(59, 89, 5, 3, 0, 'Check Out', 1, '2021-07-17', '02:11:44', '2021-07-16', '18:01:13', '15000', 0, 0, 0),
(60, 90, 3, 1, 0, 'Check Out', 2, '2021-07-17', '17:53:52', '2021-07-18', '13:33:49', '24000', 0, 0, 0),
(68, 98, 3, 2, 0, 'Check Out', 2, '2021-07-23', '15:10:57', '2021-07-24', '20:58:39', '24000', 0, 0, 0),
(74, 104, 1, 1, 0, 'Check Out', 1, '2021-10-05', '18:19:45', '2021-10-06', '20:58:55', '6300', 0, 0, 0),
(77, 107, 4, 5, 0, 'Check Out', 1, '2021-10-09', '20:18:02', '2021-10-09', '20:58:46', '8000', 0, 0, 0),
(127, 168, 1, 2, 0, 'Check Out', 1, '2021-10-18', '22:30:25', '1970-01-01', '22:30:35', '300', 100, 0, 0),
(128, 169, 3, 1, 0, 'Check Out', 2, '2021-10-16', '02:41:50', '1970-01-01', '18:26:18', '1120', 20000, 0, 12),
(133, 175, 1, 3, 0, 'Check Out', 1, '2021-10-19', '18:17:34', '1970-01-01', '18:26:46', '4284', 0, 20, 12),
(134, 176, 3, 3, 0, 'Check Out', 1, '2021-10-18', '18:52:19', '2021-10-19', '18:59:38', '12000', 0, 0, 0),
(136, 178, 4, 1, 0, 'Check In', 1, '2021-10-20', '00:30:39', '2021-10-20', '00:00:00', '6400', 0, 20, 0),
(137, 179, 1, 0, 0, 'Pending', 0, '2021-10-21', '00:00:00', '0000-00-00', '00:00:00', '', 0, 0, 0),
(138, 181, 3, 2, 0, 'Check In', 1, '2021-10-22', '21:11:47', '2021-10-21', '00:00:00', '12000', 0, 0, 0);

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
(12, 0, 0, '', '9039d572c68d3690ab6c47029505560f', '', 'sissycessrokia@gmail.com', 2147483647),
(13, 0, 0, '', '9039d572c68d3690ab6c47029505560f', '', 'rose@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`archive_id`);

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
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `archive_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
