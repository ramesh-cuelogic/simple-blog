-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2015 at 09:22 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sample_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url_name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `url_name`, `body`, `date`) VALUES
(1, 'Sample post for unit test', 'Sample-post-for-unit-test', '                                     This is a sample post for unit test.                                ', '2015-06-17 12:38:58'),
(2, 'Test-blog', 'Test-blog', 'Blog test', '2015-06-17 14:52:38'),
(3, 'Again-Test-topic-sdsd', 'Again-Test-topic-sdsd', 'Again-Test-topic                                ', '2015-06-17 15:00:10'),
(4, 'Again-Test-topic-kkjjkjm,', 'Again-Test-topic-kkjjkjm', 'Again-Test-topic                                ', '2015-06-17 15:00:18'),
(5, 'Again-Test-topic', 'Again-Test-topic', 'Again-Test-topic', '2015-06-17 15:01:04'),
(6, 'Go slow go steady', 'Go-slow-go-steady', ' Go slow go steady                                ', '2015-06-17 15:07:21'),
(7, 'Sample post for unit test sdsdsd', 'Sample-post-for-unit-test-sdsdsd', '                                     This is a sample post for unit test.                                                                ', '2015-06-17 15:18:57');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
