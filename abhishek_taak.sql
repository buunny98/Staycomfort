-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 05:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abhishek_taak`
--
CREATE DATABASE IF NOT EXISTS `abhishek_taak` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `abhishek_taak`;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings` (
  `booking_id` int(20) NOT NULL,
  `arrival_date` int(20) NOT NULL,
  `departure_date` int(20) DEFAULT NULL,
  `userid` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `arrival_date`, `departure_date`, `userid`) VALUES
(1, 10, 20, NULL),
(2, 0, 0, NULL),
(3, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_listings`
--

DROP TABLE IF EXISTS `hotel_listings`;
CREATE TABLE `hotel_listings` (
  `hotelid` int(20) NOT NULL,
  `hotel_stars` int(7) DEFAULT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `extra_features` varchar(50) NOT NULL,
  `hotelphone_number` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `hotel_Address` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `postal_code` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `hotel_Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_listings`
--

INSERT INTO `hotel_listings` (`hotelid`, `hotel_stars`, `hotel_name`, `extra_features`, `hotelphone_number`, `email`, `hotel_Address`, `City`, `postal_code`, `Country`, `hotel_Image`) VALUES
(1, 4, 'Park Plaza Hotel London', ' Swimming Pool, Wifi, Free Breakfast, Laundry, bar', '(Phone Number: 604-789-7415)', '(email: 147852@gmail.com)', '(Address: 90 Hop Street)', 'Vancouver', 'V8S4K1', 'Canada', 'hotel2.jpg'),
(2, 5, 'RockStar Hotel', '5-Star, Swimming Pool, Wifi, Free Breakfast, Laund', '(Phone Number: 604-789-7515)', '(email: 14785299@gmail.com)', '(Address: 900 Hop Street)', 'Vancouver', 'V8S4K1', 'Canada', 'hotel3.jpg '),
(3, 3, 'Comfort-Inn Hotel', 'Added Garden, Pool Table, Wifi, Paid Dinner, Laund', '(Phone Number: 778-789-7515)', '(email: xbox@gmail.com)', '(Address: 9977 Avenue Street)', 'Vancouver', 'V0S3K1', 'Canada', 'hotel4.jpg '),
(4, 5, 'Cellai Hotel', '5-Star Luxury, Pool Table, Wifi, Paid Dinner, Laun', '(Phone Number: 778-604-7785)', '(email: PS5@gmail.com)', '(Address: 99100 Avenue Street)', 'Edmonton', 'V0S3K1', 'Canada', 'hotel5.jpg '),
(5, 3, 'Mr. Fresh Hotel', 'Huge Graden, Pool Table, Wifi, Paid Dinner, Laundr', '(Phone Number: 258-604-7785)', '(email: well@gmail.com)', '(Address: 7894 Avenue Street)', 'Edmonton', 'V0S3K1', 'Canada', 'hotel6.jpg '),
(6, 4, 'Panoramic Hotel', 'Swimming Pool, Pool Table, Wifi, Paid Dinner, Laun', '(Phone Number: 111-604-7777)', '(email: done@gmail.com)', '(Address: 7894 Rich Street)', 'Toronto', 'B9H2C4', 'Canada', 'hotel10.jpg '),
(7, 2, 'Arenal Hotel', 'Swimming Pool, Pool Table, Wifi, Paid Dinner, Laun', '(Phone Number: 563-604-7700)', '(email: rock@gmail.com)', '(Address: 7894 hump Street)', 'Toronto', 'B9H2C4', 'Canada', 'hotel11.jpg '),
(8, 5, 'Ibes Hotel', 'Swimming Pool, Pool Table, 5-Star, Paid Dinner, La', '(Phone Number: 888-604-7100)', '(email: ibes@gmail.com)', '(Address: 7894 hwill Street)', 'London', 'B9H2C4', 'England', 'hotel12.jpg'),
(9, 1, 'Sandmal Hotel', 'Swimming Pool, Pool Table, Affordable Pricing, Pai', '(Phone Number: 888-604-2587)', '(email: Sandmal@gmail.com)', '(Address: 1170 bon Street)', 'montreal', 'T5E2K9', 'Canada', 'hotel13.jpg '),
(10, 4, 'WelcomeINSS Hotel', 'Garden, Pool Table, 4-star, Paid Dinner, Laundry, ', '(Phone Number: 888-888-2580)', '(email: INSS@gmail.com)', '(Address: 1170 Hirt Street)', 'Ottawa', 'L5E2K9', 'Canada', 'hotel14.jpg '),
(11, 3, 'Holiday-In Hotel', 'Garden, Pool Table, Swimming Pool, Paid Dinner, La', '(Phone Number: 888-147-9852)', '(email: in@gmail.com)', '(Address: 14520 Trap Ave)', 'Quenbec', 'I6T3L2', 'Canada', 'hotel15.jpg '),
(12, 4, 'Kyriad Hotel', 'Garden, Pool Table, 4-star, Paid Dinner, Laundry, ', '(Phone Number: 888-789-9852)', '(email: ky@gmail.com)', '(Address: 145 apon Ave)', 'Quenbec', 'I6T3L2', 'Canada', 'hotel16.jpg '),
(13, 5, 'Munich Hotel', '5-Star Pool Table, Paid Dinner, Laundry, Air Condi', '(Phone Number: 111-111-1587)', '(email: munich@gmail.com)', '(Address: 5847 req Street)', 'munich', 'H8R2K0', 'Munich', 'hotel17.jpg '),
(14, 5, 'Berlin Hotel', '5-Star, Pool, Paid Dinner, Laundry, Air Conditioni', '(Phone Number: 799-999-9999)', '(email: berlin@gmail.com)', '(Address: 587 bert Street)', 'berlin', 'H8R2K5', 'berlin', 'hotel18.jpg '),
(15, 5, 'Candie Hotel', '5-Star, Pool, Paid Dinner, Huge Garden, Air Condit', '(Phone Number: 147-852-3697)', '(email:candie@gmail.com)', '(Address: 1458 Grde Street)', 'berlin', 'H8R2K4', 'berlin', 'hotel19.jpg '),
(21, 5, 'Test Hotel', 'Garden', '778456123', 'test@gmail.com', 'test', 'test', 'test', 'canada', 'hotel8.jpg'),
(25, 4, 'Test Hotel2', 'Garden', '778456123', 'test@gmail.com', 'test2', 'test', 'test', 'canada', 'hotel8.jpg'),
(26, 5, 'Test Custom', 'Nothing', '1234567891', 'test', 'test', 'test', 'V5S 3J1', 'canada', 'hotel6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `membercustom`
--

DROP TABLE IF EXISTS `membercustom`;
CREATE TABLE `membercustom` (
  `hotelid` int(20) NOT NULL,
  `hotel_stars` int(7) DEFAULT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `extra_features` varchar(50) NOT NULL,
  `hotelphone_number` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `hotel_Address` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `postal_code` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `hotel_Image` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membercustom`
--

INSERT INTO `membercustom` (`hotelid`, `hotel_stars`, `hotel_name`, `extra_features`, `hotelphone_number`, `email`, `hotel_Address`, `City`, `postal_code`, `Country`, `hotel_Image`, `comments`) VALUES
(1452, 5, 'Custom Hotel', 'Nothing ', '7412589631', 'Custom hotel', 'Custom', 'Custom', 'Custom', 'Custom', 'hotel11.jpg', 'These are some additional comments ');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_and_extra_features`
--

DROP TABLE IF EXISTS `rooms_and_extra_features`;
CREATE TABLE `rooms_and_extra_features` (
  `room_id` int(20) NOT NULL,
  `hotelid` int(20) DEFAULT NULL,
  `total_rooms` int(20) DEFAULT NULL,
  `room_type` int(20) DEFAULT NULL,
  `extraAnd_special_features` varchar(255) DEFAULT NULL,
  `price_per_room` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms_and_extra_features`
--

INSERT INTO `rooms_and_extra_features` (`room_id`, `hotelid`, `total_rooms`, `room_type`, `extraAnd_special_features`, `price_per_room`) VALUES
(1, NULL, 100, 1000, '0', '900'),
(2, NULL, 600, 0, '0', '1200'),
(3, NULL, 1100, 0, '0', '4200');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userid` int(20) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password_ofUser` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Home_Address` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `postal_code` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password_ofUser`, `firstname`, `lastname`, `phone_number`, `email`, `Home_Address`, `City`, `postal_code`, `Country`, `reg_date`) VALUES
(13, 'ataak', '3829184bf540396a39a3f998b3aee547', 'ABHISHEK', 'TAAK', 'Canada', 'abhishektaak1661@gmail.com', 'Brooks', 'Vancouver', 'V5S 3J1', 'Canada', '2020-11-14 07:11:23'),
(14, 'test', '098f6bcd4621d373cade4e832627b4f6', 'cds', 'sdvdsv', 'ds', 'sdfsdfds', 'scd', 'dsc', 'dsc', 'ds', '2020-11-14 07:11:44'),
(15, '121', '4c56ff4ce4aaf9573aa5dff913df997a', 'awd', 'ewffgvrd', 'edrg', 'efws', 'adw', 'awsd', 'adws', 'edrg', '2020-11-14 07:12:03'),
(16, 'ataak1', 'b45b0a07506e931b8e52e61e16c2e30b', 'Update', 'update', 'BCSXJKAB', 'update@update.com', 'bcsdhjgcb', 'CBSDKBC', 'cdsbk', 'CBDSJKB', '2020-11-20 23:26:51'),
(17, 'tony', '36f46e3e438d6556555eb2c841d9d519', 'tony', 'tony', 'Canada', 'tony@gmail.,com', 'tony street ', 'tony', 'V5S 3j1', 'Canada', '2020-11-21 00:25:55'),
(18, 'bunny', '81dc9bdb52d04dc20036dbd8313ed055', 'tony', 'tony', 'jagsk', 'gt@gmail.comn', 'gtha', 'hdsjch', 'KJHCSKJ', 'jagsk', '2020-11-21 00:27:06'),
(19, 'bunny1', '3829184bf540396a39a3f998b3aee547', 'Abhishek ', 'Taak', '12042188963', 'abhishektaak1661@gmail.com', 'Brooks', 'Vancouver', 'V5S 3J1', 'Canada', '2020-11-21 00:29:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `hotel_listings`
--
ALTER TABLE `hotel_listings`
  ADD PRIMARY KEY (`hotelid`);

--
-- Indexes for table `membercustom`
--
ALTER TABLE `membercustom`
  ADD PRIMARY KEY (`hotelid`);

--
-- Indexes for table `rooms_and_extra_features`
--
ALTER TABLE `rooms_and_extra_features`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `hotelid` (`hotelid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms_and_extra_features`
--
ALTER TABLE `rooms_and_extra_features`
  MODIFY `room_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `rooms_and_extra_features`
--
ALTER TABLE `rooms_and_extra_features`
  ADD CONSTRAINT `rooms_and_extra_features_ibfk_1` FOREIGN KEY (`hotelid`) REFERENCES `hotel_listings` (`hotelid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
