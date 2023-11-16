-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2022 at 12:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Week10-Example2`
--

-- --------------------------------------------------------

--
-- Table structure for table `rankings`
--

CREATE TABLE `rankings` (
  `uniqueID` int(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `reading` int(255) DEFAULT NULL,
  `math` int(255) DEFAULT NULL,
  `science` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rankings`
--

INSERT INTO `rankings` (`uniqueID`, `country`, `reading`, `math`, `science`) VALUES
(1, 'Shanghai-China', 556, 600, 575),
(2, 'Korea-South', 539, 546, 538),
(3, 'Finland', 536, 541, 554),
(4, 'Hong Kong-China', 533, 555, 549),
(5, 'Singapore', 526, 562, 542),
(6, 'Canada', 524, 527, 529),
(7, 'New Zealand', 521, 519, 532),
(8, 'Japan', 520, 529, 539),
(9, 'Australia', 515, 514, 527),
(10, 'Netherlands', 508, 526, 522),
(11, 'Belgium', 506, 515, 507),
(12, 'Norway', 503, 498, 500),
(13, 'Estonia', 501, 512, 528),
(14, 'Switzerland', 501, 534, 517),
(15, 'Poland', 500, 495, 508),
(16, 'Iceland', 500, 507, 496),
(17, 'United States', 500, 487, 502),
(18, 'Liechtenstein', 499, 536, 520),
(19, 'Sweden', 497, 494, 495),
(20, 'Germany', 497, 513, 520),
(21, 'Ireland', 496, 487, 508),
(22, 'France', 496, 497, 498),
(23, 'Chinese Taipei', 495, 543, 520),
(24, 'Denmark', 495, 503, 499),
(25, 'United Kingdom', 494, 492, 514),
(26, 'Hungary', 494, 490, 503),
(27, 'Portugal', 489, 487, 493),
(28, 'Macao-China', 487, 525, 511),
(29, 'Italy', 486, 483, 489),
(30, 'Latvia', 484, 482, 494),
(31, 'Slovenia', 483, 501, 512),
(32, 'Greece', 483, 466, 470),
(33, 'Spain', 481, 483, 488),
(34, 'Czech Republic', 478, 493, 500),
(35, 'Slovak Republic', 477, 497, 490),
(36, 'Croatia', 476, 460, 486),
(37, 'Israel', 474, 447, 455),
(38, 'Luxembourg', 472, 489, 484),
(39, 'Austria', 470, 496, 494),
(40, 'Lithuania', 468, 477, 491),
(41, 'Turkey', 464, 445, 454),
(42, 'United Arab Emirates', 459, 453, 466),
(43, 'Russian Federation', 459, 468, 478),
(44, 'Chile', 449, 421, 447),
(45, 'Serbia', 442, 442, 443),
(46, 'Bulgaria', 429, 428, 439),
(47, 'Uruguay', 426, 427, 427),
(48, 'Mexico', 425, 419, 416),
(49, 'Romania', 424, 427, 428),
(50, 'Thailand', 421, 419, 425),
(51, 'Trinidad and Tobago', 416, 414, 410),
(52, 'Colombia', 413, 381, 402),
(53, 'Brazil', 412, 386, 405),
(54, 'Montenegro', 408, 403, 401),
(55, 'Jordan', 405, 387, 415),
(56, 'Tunisia', 404, 371, 401),
(57, 'Indonesia', 402, 371, 383),
(58, 'Argentina', 398, 388, 401),
(59, 'Kazakhstan', 390, 405, 400),
(60, 'Albania', 385, 377, 391),
(61, 'Qatar', 372, 368, 379),
(62, 'Panama', 371, 360, 376),
(63, 'Peru', 370, 365, 369),
(64, 'Azerbaijan', 362, 431, 373),
(65, 'Kyrgyzstan', 314, 331, 330);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rankings`
--
ALTER TABLE `rankings`
  ADD PRIMARY KEY (`uniqueID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rankings`
--
ALTER TABLE `rankings`
  MODIFY `uniqueID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
