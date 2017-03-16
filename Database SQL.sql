-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2017 at 03:04 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amlyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `scrumboard`
--

CREATE TABLE `scrumboard` (
  `id` int(100) NOT NULL,
  `productbacklog` varchar(100) NOT NULL,
  `sprintbacklog` varchar(100) NOT NULL,
  `tasks` varchar(100) NOT NULL,
  `done` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scrumboard`
--

INSERT INTO `scrumboard` (`id`, `productbacklog`, `sprintbacklog`, `tasks`, `done`) VALUES
(1, 'This is the first epic. ', 'As a user I want to be able to create an epic. ', 'Create the epic functionality', 'Epic Created'),
(2, 'This is the 2nd epic. ', 'As a member I need to be able to skydive so I can get a thrill.', 'Someone needs to order the plane. ', 'We did the dive. \r\n'),
(3, 'This is the 3rd epic. ', 'As a user I need to be able to view my profile so I can view my personal information.', 'Pull profile from the database.', 'Profile has been added. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `username`, `password`) VALUES
(1, 'Andrew', 'Lyp', 'amlyp', 'password'),
(2, 'Bill', 'Bob', 'new123', 'Password'),
(3, 'Bill2', 'Bob2', 'new1234', 'Password'),
(5, 'Bill2', 'Bob2', 'amlyp2', 'Password'),
(6, 'Bill2', 'd', 'amlyp879', 'password'),
(7, 'sadf', 'asdf', 'the', 'the'),
(8, 'John', 'Reed', 'jreed27', 'password'),
(15, 'Ten ', 'Ben', 'ten', 'pass'),
(11, 'The', 'The', 'the342', 'the'),
(12, 'The', 'the', 'thethe', 'the'),
(13, 'Bill', 'Bob', 'alyp', 'password'),
(14, 'Andrew', 'Lyp', 'Lyp34', 'passwor'),
(16, 'Thomas', 'Obama', 'T_Obama', 'Barack'),
(17, 'Bill', 'Nash', 'username', 'password'),
(18, 'a', 'b', 'b', 'b'),
(19, 'h', 'h', 'h', 'h'),
(20, 'y', 'y', 'y', 'y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scrumboard`
--
ALTER TABLE `scrumboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scrumboard`
--
ALTER TABLE `scrumboard`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
