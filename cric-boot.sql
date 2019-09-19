-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 01:17 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cric-boot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `desc_blog` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `desc_blog`, `image`) VALUES
(2, 'why sachin tendulkar is best', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias magnam eveniet voluptatum facere voluptatem aspernatur ex quidem mollitia est? Cumque ullam aliquam saepe non dolorum obcaecati perferendis necessitatibus quia. Iure eligendi odit qui sit! Illum, recusandae maxime quas, et in aliquid a expedita praesentium cupiditate earum id aperiam fugit minima!', 'b2.jpg'),
(3, 'top 10 dhoni rules for success', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias magnam eveniet voluptatum facere voluptatem aspernatur ex quidem mollitia est? Cumque ullam aliquam saepe non dolorum obcaecati perferendis necessitatibus quia. Iure eligendi odit qui sit! Illum, recusandae maxime quas, et in aliquid a expedita praesentium cupiditate earum id aperiam fugit minima!', 'b3.jpg'),
(5, 'why cricket famous in india', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias magnam eveniet voluptatum facere voluptatem aspernatur ex quidem mollitia est? Cumque ullam aliquam saepe non dolorum obcaecati perferendis necessitatibus quia. Iure eligendi odit qui sit! Illum, recusandae maxime quas, et in aliquid a expedita praesentium cupiditate earum id aperiam fugit minima!', 'ddd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(10) NOT NULL,
  `first_name` text NOT NULL,
  `second_name` text NOT NULL,
  `mobile_no` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `name`, `email`) VALUES
(8, 'gbkjnkjnkj', 'dfnddfg@mcbm.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
