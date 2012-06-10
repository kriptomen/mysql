-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2012 at 04:38 PM
-- Server version: 5.1.40
-- PHP Version: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `biblio`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author_id` varchar(20) NOT NULL,
  `read_date` date DEFAULT NULL,
  `where_book` varchar(20) DEFAULT NULL,
  `rate` int(1) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `author_id`, `read_date`, `where_book`, `rate`, `year`) VALUES
(3, '151 эпизод ЖЖизни', '9', NULL, NULL, 7, 2011),
(2, 'Год ЖЖизни', '9', NULL, NULL, 7, 2008),
(4, 'Искатели неба', '8', NULL, NULL, NULL, 2001),
(5, 'Чистовик', '8', NULL, NULL, NULL, 2005),
(6, 'Черновик', '8', NULL, NULL, NULL, 2007),
(7, 'Орел девятого легиона', '7', NULL, NULL, 6, 1957),
(8, 'Принцесса стоит смерти', '8', NULL, NULL, NULL, 1992),
(9, 'Планета, которой нет', '8', NULL, NULL, NULL, 1993),
(10, 'Стеклянное море', '8', NULL, NULL, NULL, 1994),
(11, '451 градус по Фаренгейту', '1', NULL, NULL, 8, 1953),
(12, 'Гиперболоид инженера Гарина', '6', NULL, NULL, 3, NULL);
