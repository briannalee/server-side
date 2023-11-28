-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2022 at 08:04 PM
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
-- Database: `Week13-Example2`
--

-- --------------------------------------------------------

--
-- Table structure for table `songList`
--

CREATE TABLE `songList` (
  `id` int(100) NOT NULL,
  `artist` varchar(100) DEFAULT NULL,
  `album` varchar(100) DEFAULT NULL,
  `track` int(10) DEFAULT NULL,
  `song` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `songList`
--

INSERT INTO `songList` (`id`, `artist`, `album`, `track`, `song`, `duration`) VALUES
(1, 'The Beatles', 'One', 1, 'Love Me Do', '2:20'),
(2, 'The Beatles', 'One', 2, 'From Me To You', '1:56'),
(3, 'The Beatles', 'One', 3, 'She Loves You', '2:21'),
(4, 'The Beatles', 'One', 4, 'I Want To Hold Your Hand', '2:24'),
(5, 'The Beatles', 'One', 5, 'Can\'t Buy Me Love', '2:11'),
(6, 'The Beatles', 'One', 6, 'A Hard Day\'s Night', '2:33'),
(7, 'The Beatles', 'One', 7, 'I Feel Fine', '2:18'),
(8, 'The Beatles', 'One', 8, 'Eight Days A Week', '2:44'),
(9, 'The Beatles', 'One', 9, 'Ticket To Ride', '3:10'),
(10, 'The Beatles', 'One', 10, 'Help!', '2:18'),
(11, 'The Beatles', 'One', 11, 'Yesterday', '2:05'),
(12, 'The Beatles', 'One', 12, 'Day Tripper', '2:48'),
(13, 'The Beatles', 'One', 13, 'We Can Work It Out', '2:15'),
(14, 'The Beatles', 'One', 14, 'Paperback Writer', '2:18'),
(15, 'The Beatles', 'One', 15, 'Yellow Submarine', '2:38'),
(16, 'The Beatles', 'One', 16, 'Eleanor Rigby', '2:06'),
(17, 'The Beatles', 'One', 17, 'Penny Lane', '2:59'),
(18, 'The Beatles', 'One', 18, 'All You Need Is Love', '3:47'),
(19, 'The Beatles', 'One', 19, 'Hello Goodbye', '3:27'),
(20, 'The Beatles', 'One', 20, 'Lady Madonna', '2:16'),
(21, 'The Beatles', 'One', 21, 'Hey Jude', '7:04'),
(22, 'The Beatles', 'One', 22, 'Get Back', '3:12'),
(23, 'The Beatles', 'One', 23, 'The Ballad Of John And Yoko', '2:59'),
(24, 'The Beatles', 'One', 24, 'Something', '3:01'),
(25, 'The Beatles', 'One', 25, 'Come Together', '4:18'),
(26, 'The Beatles', 'One', 26, 'Let It Be', '3:50'),
(27, 'The Beatles', 'One', 27, 'The Long And Winding Road', '3:37'),
(28, 'The Beatles', 'Help!', 1, 'Help!', '2:19'),
(29, 'The Beatles', 'Help!', 2, 'The Night Before', '2:34'),
(30, 'The Beatles', 'Help!', 3, 'You\'ve Got To Hide Your Love Away', '2:09'),
(31, 'The Beatles', 'Help!', 4, 'I Need You', '2:28'),
(32, 'The Beatles', 'Help!', 5, 'Another Girl', '2:05'),
(33, 'The Beatles', 'Help!', 6, 'You\'re Going To Lose That Girl', '2:18'),
(34, 'The Beatles', 'Help!', 7, 'Ticket To Ride', '3:09'),
(35, 'The Beatles', 'Help!', 8, 'Act Naturally', '2:30'),
(36, 'The Beatles', 'Help!', 9, 'It\'s Only Love', '1:56'),
(37, 'The Beatles', 'Help!', 10, 'You Like Me Too Much', '2:36'),
(38, 'The Beatles', 'Help!', 11, 'Tell Me What You See', '2:37'),
(39, 'The Beatles', 'Help!', 12, 'I\'ve Just Seen A Face', '2:05'),
(40, 'The Beatles', 'Help!', 13, 'Yesterday', '2:05'),
(41, 'The Beatles', 'Help!', 14, 'Dizzy Miss Lizzy', '2:58'),
(42, 'Led Zeppelin', 'Led Zepplin 4', 1, 'Black Dog', '4:55'),
(43, 'Led Zeppelin', 'Led Zepplin 4', 2, 'Rock And Roll', '3:40'),
(44, 'Led Zeppelin', 'Led Zepplin 4', 3, 'The Battle Of Evermore', '5:38'),
(45, 'Led Zeppelin', 'Led Zepplin 4', 4, 'Stairway To Heaven', '7:55'),
(46, 'Led Zeppelin', 'Led Zepplin 4', 5, 'Misty Mountain Hop', '4:39'),
(47, 'Led Zeppelin', 'Led Zepplin 4', 6, 'Four Sticks', '4:49'),
(48, 'Led Zeppelin', 'Led Zepplin 4', 7, 'Going To California', '3:36'),
(49, 'Led Zeppelin', 'Led Zepplin 4', 8, 'When The Levee Breaks', '7:08'),
(50, 'Led Zeppelin', 'Houses Of The Holy', 1, 'The Song Remains The Same', '5:24'),
(51, 'Led Zeppelin', 'Houses Of The Holy', 2, 'The Rain Song', '7:32'),
(52, 'Led Zeppelin', 'Houses Of The Holy', 3, 'Over The Hills And Far Away', '4:42'),
(53, 'Led Zeppelin', 'Houses Of The Holy', 4, 'The Crunge', '3:10'),
(54, 'Led Zeppelin', 'Houses Of The Holy', 5, 'Dancing Days', '3:40'),
(55, 'Led Zeppelin', 'Houses Of The Holy', 6, 'D\'yer Mak\'er', '4:19'),
(56, 'Led Zeppelin', 'Houses Of The Holy', 7, 'No Quarter', '6:57'),
(57, 'Led Zeppelin', 'Houses Of The Holy', 8, 'The Ocean', '4:28'),
(58, 'Rush', 'Moving Pictures', 1, 'Tom Sawyer', '4:33'),
(59, 'Rush', 'Moving Pictures', 2, 'Red Barchetta', '6:06'),
(60, 'Rush', 'Moving Pictures', 3, 'YYZ', '4:24'),
(61, 'Rush', 'Moving Pictures', 4, 'Limelight', '4:19'),
(62, 'Rush', 'Moving Pictures', 5, 'The Camera Eye', '10:56'),
(63, 'Rush', 'Moving Pictures', 6, 'Witch Hunt', '4:43'),
(64, 'Rush', 'Moving Pictures', 7, 'Vital Signs', '4:43'),
(65, 'Rush', 'Grace Under Pressure', 1, 'Distant Early Warning', '4:56'),
(66, 'Rush', 'Grace Under Pressure', 2, 'Afterimage', '5:03'),
(67, 'Rush', 'Grace Under Pressure', 3, 'Red Sector A', '5:09'),
(68, 'Rush', 'Grace Under Pressure', 4, 'The Enemy Within', '4:34'),
(69, 'Rush', 'Grace Under Pressure', 5, 'The Body Electric', '4:59'),
(70, 'Rush', 'Grace Under Pressure', 6, 'Kid Gloves', '4:18'),
(71, 'Rush', 'Grace Under Pressure', 7, 'Red Lenses', '4:43'),
(72, 'Rush', 'Grace Under Pressure', 8, 'Between The Wheels', '5:44'),
(73, 'The Rolling Stones', 'Tattoo You', 1, 'Start Me Up', '3:34'),
(74, 'The Rolling Stones', 'Tattoo You', 2, 'Hang Fire', '2:21'),
(75, 'The Rolling Stones', 'Tattoo You', 3, 'Slave', '4:55'),
(76, 'The Rolling Stones', 'Tattoo You', 4, 'Little T & A', '3:24'),
(77, 'The Rolling Stones', 'Tattoo You', 5, 'Black Limousine', '3:34'),
(78, 'The Rolling Stones', 'Tattoo You', 6, 'Neighbours', '3:32'),
(79, 'The Rolling Stones', 'Tattoo You', 7, 'Worried About You', '5:18'),
(80, 'The Rolling Stones', 'Tattoo You', 8, 'Tops', '3:49'),
(81, 'The Rolling Stones', 'Tattoo You', 9, 'Heaven', '4:24'),
(82, 'The Rolling Stones', 'Tattoo You', 10, 'No Use In Crying', '3:26'),
(83, 'The Rolling Stones', 'Tattoo You', 11, 'Waiting On A Friend', '4:38'),
(84, 'The Rolling Stones', 'Let It Bleed', 1, 'Gimme Shelter', '4:31'),
(85, 'The Rolling Stones', 'Let It Bleed', 2, 'Love In Vain', '4:20'),
(86, 'The Rolling Stones', 'Let It Bleed', 3, 'Country Honk', '3:06'),
(87, 'The Rolling Stones', 'Let It Bleed', 4, 'Live With Me', '3:33'),
(88, 'The Rolling Stones', 'Let It Bleed', 5, 'Let It Bleed', '5:29'),
(89, 'The Rolling Stones', 'Let It Bleed', 6, 'Midnight Rambler', '6:54'),
(90, 'The Rolling Stones', 'Let It Bleed', 7, 'You Got The Silver', '2:51'),
(91, 'The Rolling Stones', 'Let It Bleed', 8, 'Monkey Man', '4:12'),
(92, 'The Rolling Stones', 'Let It Bleed', 9, 'You Can\'t Always Get What You Want', '7:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songList`
--
ALTER TABLE `songList`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songList`
--
ALTER TABLE `songList`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
