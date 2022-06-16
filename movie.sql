-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 16, 2022 at 07:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `title` varchar(255) NOT NULL,
  `actor_name` varchar(255) NOT NULL,
  `actress_name` varchar(255) NOT NULL,
  `dir_name` varchar(255) NOT NULL,
  `release_year` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`title`, `actor_name`, `actress_name`, `dir_name`, `release_year`) VALUES
('Andhadhun', 'Ayushmann Khurrana', 'Radhika Apte', 'Sriram Raghavan', 2018),
('Avengers: Infinity War', 'Robert Downey Jr.', 'Scarlett Johansson', 'Joe Russo', 2018),
('Bajirao Mastani', 'Ranveer Singh', 'Deepika Padukone', 'Sanjay Leela Bhansali', 2015),
('Sleepless In Seattle', 'Tom Hanks', 'Meg Ryan', 'Nora Ephron', 1993),
('Zindagi Na Milegi Dobara', 'Hrithik Roshan', 'Katrina Kaif', 'Zoya Akhtar', 2011);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
