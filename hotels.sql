-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 09:05 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotels`
--

-- --------------------------------------------------------

--
-- Table structure for table `featured_hotels`
--

CREATE TABLE `featured_hotels` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `feature1` varchar(255) DEFAULT NULL,
  `feature2` varchar(255) DEFAULT NULL,
  `feature3` varchar(255) DEFAULT NULL,
  `book_now_link` varchar(255) DEFAULT NULL,
  `view_details_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featured_hotels`
--

INSERT INTO `featured_hotels` (`hotel_id`, `hotel_name`, `image`, `feature1`, `feature2`, `feature3`, `book_now_link`, `view_details_link`) VALUES
(9, 'Kempiski Hotel', 'kem.jpg', 'Free wifi', 'Free parking', 'Free Lunch', 'https://www.kempinski.com/en/hotel-gold-coast-city/overview', 'https://www.kempinski.com/en/hotel-gold-coast-city/overview'),
(10, 'Labadi Beach Hotel', 'lab1.jpg', 'Free wifi', 'Free parking', 'Free Lunch', 'https://labadibeachhotelgh.com/hotel/', 'https://labadibeachhotelgh.com/'),
(11, 'MovenPick Hotel', 'mov2.webp', 'Free wifi', 'Free parking', 'Free Lunch', 'https://all.accor.com/ssr/app/movenpick/rates/B4P0/index.en.shtml?dateIn=2023-04-29&nights=1&compositions=2&stayplus=false&snu=false&accessibleRooms=false&partner_id=movenpick', 'https://movenpick.accor.com/en/africa/ghana/accra/moevenpick-ambassador-hotel-accra.html'),
(12, 'The Royal Senchi Hotel and Resort', 'roy1.jpg', 'Free wifi', 'Free parking', 'Free Lunch', 'https://royalsenchi.reserve-online.net/', 'https://www.theroyalsenchi.com/'),
(13, 'Accra Marriott Hotel', 'ac2.webp', 'Free wifi', 'Free parking', 'Free Lunch', 'https://www.marriott.com/reservation/rateListMenu.mi', 'https://www.marriott.com/en-us/hotels/accmc-accra-marriott-hotel/overview/'),
(14, 'Asantewaa Premeir Hotel', 'as1.webp', 'Free wifi', 'Free parking', 'Free Lunch', 'http://www.asantewaapremierguesthouse.com/search.html?h=ehjedcb&checkin=2022-12-17&checkout=2022-12-18&adults=1&children=0', 'http://www.asantewaapremierguesthouse.com/'),
(15, 'Peemary\'s Hotel', '', 'Free wifi', 'Free parking', 'Free Lunch', 'https://www.peemaryshotel.com/en/reservation', 'https://www.peemaryshotel.com/en/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `featured_hotels`
--
ALTER TABLE `featured_hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `featured_hotels`
--
ALTER TABLE `featured_hotels`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
