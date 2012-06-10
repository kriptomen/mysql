-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2012 at 04:40 PM
-- Server version: 5.1.40
-- PHP Version: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `biblio`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soname` varchar(20) NOT NULL,
  `birthday` date DEFAULT NULL,
  `death` date DEFAULT NULL,
  `rate` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `soname`, `birthday`, `death`, `rate`) VALUES
(1, 'Бредбери', NULL, NULL, 9),
(6, 'Толстой', NULL, NULL, 5),
(7, 'Сатклиф', NULL, NULL, 8),
(8, 'Лукьяненко', NULL, NULL, 8),
(9, 'Гришковец', NULL, NULL, 8);
