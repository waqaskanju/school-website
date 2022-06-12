-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2014 at 12:56 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mujahaid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE IF NOT EXISTS `admission` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `PassingYear` year(4) NOT NULL,
  `ObtMarks` int(4) NOT NULL,
  `TutMarks` int(4) NOT NULL,
  `CellNo` varchar(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`Id`, `Name`, `Fname`, `PassingYear`, `ObtMarks`, `TutMarks`, `CellNo`, `Address`) VALUES
(4, 'Anwar Ullah', 'Khurshid Anwar', 2009, 7, 10, '0312', 'kanju Swat'),
(5, 'Saeed Ahmad', 'Abdus Sattar', 2003, 403, 850, 'Saeed Ahmad', 'Saeed Ahmad');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `imagename` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `qualification`, `mobileno`, `email`, `imagename`, `status`) VALUES
(2, 'Hayat Ullah Khan', 'M Phil and PHd', '12345', 'abc@gmail.com', 'hayat.jpg', 1),
(6, 'Anwar Ullah', 'BA', '0333', 'Mujahid.khaksar', 'abc.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `English` int(11) NOT NULL,
  `Urdu` int(11) NOT NULL,
  `Physics` int(11) NOT NULL,
  `Math` int(11) NOT NULL,
  `Biology` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL,
  `Islamyat` int(11) NOT NULL,
  `Pakstudy` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`English`, `Urdu`, `Physics`, `Math`, `Biology`, `Chemistry`, `Islamyat`, `Pakstudy`, `rollno`) VALUES
(65, 50, 45, 46, 78, 56, 100, 100, 1),
(80, 70, 90, 60, 80, 50, 80, 70, 2),
(56, 89, 56, 85, 85, 78, 85, 89, 3),
(10, 56, 56, 10, 12, 45, 40, 45, 4),
(2, 1, 4, 3, 6, 5, 7, 8, 10),
(90, 100, 70, 80, 0, 60, 0, 0, 11378);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `body`, `date`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac felis tellus.', '2014-12-13'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac felis tellus.', '2014-12-13'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac felis tellus.', '2014-12-01'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac felis tellus.', '2014-12-02'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac felis tellus.', '0000-00-00'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac felis tellus.', '2014-12-03'),
(8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac felis tellus.', '2014-12-04'),
(9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac felis tellus.', '2014-12-05'),
(11, 'this is it', '2014-12-05'),
(12, 'what a joke. this is not acutal joke', '2014-12-17'),
(13, ' Hi This in the new nsd', '2014-12-16'),
(14, ' The is news about Saeed', '2014-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `rollno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `Class` int(11) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `name`, `fname`, `Class`) VALUES
(40, 'blog', 'Khurshid Anwar', 10),
(49, 'blog', 'Khurshid Anwar', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'aftab', '12345'),
(2, 'mujahid', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
