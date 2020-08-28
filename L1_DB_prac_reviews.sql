-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 27, 2020 at 10:15 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `osmana69529`
--

-- --------------------------------------------------------

--
-- Table structure for table `L1_DB_prac_reviews`
--

CREATE TABLE IF NOT EXISTS `L1_DB_prac_reviews` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(150) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Genre` varchar(50) NOT NULL,
  `Rating` int(1) NOT NULL,
  `Review` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `L1_DB_prac_reviews`
--

INSERT INTO `L1_DB_prac_reviews` (`ID`, `Title`, `Author`, `Genre`, `Rating`, `Review`) VALUES
(1, 'Hitchiker''s Guide to the Galaxy', 'Douglas Adams', 'Humour', 3, 'The book is not as good as its cult status would lead one to believe. Whilst it has some memorable quotes and a number of cool ideas the overall plot is weak and often the jokes / humour are simply not all that funny. This book may well appeal to a younger audience but for me it was quite a disappointment.'),
(2, 'Saturn Run', 'John Sandford and Ctein', 'Sci Fi', 4, 'The story is fast moving and compelling. The characters are well developed and as a reader I became quite invested in their personal stories. Whilst the book took quite a while to read, the journey was worthwhile. The Physics underlying the novel has been well researched and this helps to make the story both interesting and believable.'),
(3, 'Don''t Make Me Think', 'Steve Krug', 'Non Fiction', 5, 'Don''t Make me Think is a fun, practical book that describes the need for frequent, informal testing to ensure that an interface (such as a website) is easy to use. The book''s informal style is appealing and whilst some of the material is out of date, most of the information easy to understand and implement.  This is a ''must read'' for anyone involved with the design or development of websites / interfaces.'),
(4, 'This was a man', 'Jeffrey Archer', 'Historical Fiction', 4, 'This was a thoroughly enjoyable read that provided a deeply satisfying ending to the Clifton Chronicles.  Whilst the story is fictitious, the setting, believable characters and tight writing made it feel as if it could have been real.'),
(5, 'Honour''s knight', 'Rachel Bach', 'Sci Fi', 3, 'This is the sequel to ''Fortune''s Pawn'' and it is every bit as enjoyable as its predecessor.  The premise is fun (but unlikely).  This is a very light read and is the literary equivalent of junk food - enjoyable to consume but not all that beneficial for one''s intellect.  Bach is best enjoyed in moderation.'),
(6, 'Fortune''s Pawn', 'Rachel Bach', 'Sci Fi', 3, 'A great light read - perfect for long journeys or when one is too tired for something more substantial.  Whilst the novel was fun, the story is also firmly in the ''forgettable'' category.'),
(7, 'All In', 'Jennifer Lynne Barnes', 'Mystery', 5, 'This is a gripping and fast-paced novel, it blew the first two books of the series (The Naturals) out of the water. Mysteries are being tied together, and you can''t help but keep turning the pages to see how and if each one is solved...');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
