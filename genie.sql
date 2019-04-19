-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 08:28 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genie`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
   `id` int(100) PRIMARY KEY AUTO INCREMENT; 
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `blood_group` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`full_name`, `email`, `pass`, `phone`, `address`, `blood_group`) VALUES
('Rudra', 'rudra.czs02@gmail.com', '123', 69993, 'Comilla', 'O+'),
('Rudra', 'rudra.czs02@gmail.com', '1234', 999, 'Dhaka', 'O+'),
('Sanjida', 'sanjida.mumu@gmail.com', '1234', 69993, 'Chittagong', 'O+'),
('Sanjida', 'sanjida.mumu@gmail.com', '1234', 69993, 'Chittagong', 'O+'),
('Mash', 'mash@gmail.com', '123456', 987456, 'Dhaka', 'O-'),
('rudra', 'rudra.czs@yahoo.com', '123', 9696, 'Dhaka', 'O+'),
('Sanjida Akter', 'SANJIDA', '12345', 1861019224, 'bashundhara r/a', 'O+'),
('abir hasan', 'ni@gmail.com', '55555555', 2147483647, 'bashundhara R/A ', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
       `id` int(100) PRIMARY KEY AUTO INCREMENT; 
  `name` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone_num` int(11) NOT NULL,
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`name`, `bloodgroup`, `mail`, `phone_num`, `location`) VALUES
('', 'b+', 'nvhjg@mjsj.com', 198572, 'Bashundhar R/A'),
('', 'b+', 'nvhjg@mjsj.com', 198572, 'Bashundhar R/A'),
('nayem', 'b-', 'dhbhkj@hbjnd.com', 198572, 'dfsgfghj,');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
