-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 12:56 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geniustest`
--

-- --------------------------------------------------------

--
-- Table structure for table `sitesetting`
--

CREATE TABLE IF NOT EXISTS `sitesetting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `interested_in` varchar(300) NOT NULL,
  `comments` mediumtext NOT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `interested_in`, `comments`, `modify_date`) VALUES
(1, 'Vijay', 'Warade', 'vijay26jan@gmail.com', '9898989823', '', '', '2017-08-03 09:14:07'),
(2, 'asdasd', 'zxczxc', 'rrr@gmail.com', '2341312312', '', 'a dasdasdasdasdad', '2017-08-03 09:18:04'),
(3, 'rahul', 'patel', 'rahul@gmail.com', '1234567890', '', 'testds fsdf', '2017-08-03 09:20:51'),
(4, 'Pavan', 'Kumar', 'paban@gmail.com', '1231231231', 'FFS,GEM', 'd as dasdadad asdasdas dasdasd', '2017-08-03 09:25:29'),
(5, 'DFK', 'Genius', 'dfk@gmail.com', '9989989890', 'FFS,GEM', 'This addasdasdasdasdasdasdasd', '2017-08-03 09:26:13'),
(6, 'Pranav', 'Rane', 'pavan@gmail.com', '2342423432', 'FFS,GEM', 'a dasdasdasdasdasdasd', '2017-08-03 09:26:55'),
(7, 'James', 'Doe', 'James@gmail.com', '4545544545', 'Ilab', ' tsdfsf fgasdfadsfafasfasfas', '2017-08-03 09:28:11'),
(8, 'Jack', 'lee', 'jack@gmail.com', '1234567890', 'FFS', 'test commentasdas dadasdasd', '2017-08-03 10:53:06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
