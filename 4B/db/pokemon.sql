-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 04:27 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokemon`
--

-- --------------------------------------------------------

--
-- Table structure for table `element_tb`
--

CREATE TABLE `element_tb` (
  `id` int(25) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `element_tb`
--

INSERT INTO `element_tb` (`id`, `name`) VALUES
(1, 'electric'),
(2, 'grass'),
(3, 'poison'),
(4, 'fire');

-- --------------------------------------------------------

--
-- Table structure for table `pokemon_tb`
--

CREATE TABLE `pokemon_tb` (
  `id` int(25) NOT NULL,
  `name` varchar(128) NOT NULL,
  `str` varchar(128) NOT NULL,
  `def` varchar(128) NOT NULL,
  `photo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pokemon_tb`
--

INSERT INTO `pokemon_tb` (`id`, `name`, `str`, `def`, `photo`) VALUES
(1, 'pikachu', '', '', 'pikachu.png'),
(2, 'bulbasaur', '', '', 'Bulbasaur.png'),
(3, 'charmander', '', '', 'Charmander.webp');

-- --------------------------------------------------------

--
-- Table structure for table `relational_tb`
--

CREATE TABLE `relational_tb` (
  `id` int(11) NOT NULL,
  `pokemon_id` int(25) NOT NULL,
  `element_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relational_tb`
--

INSERT INTO `relational_tb` (`id`, `pokemon_id`, `element_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 3),
(4, 3, 4),
(18, 286354020, 1),
(19, 286354020, 3),
(20, 792774397, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `element_tb`
--
ALTER TABLE `element_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pokemon_tb`
--
ALTER TABLE `pokemon_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relational_tb`
--
ALTER TABLE `relational_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `element_tb`
--
ALTER TABLE `element_tb`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `relational_tb`
--
ALTER TABLE `relational_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
