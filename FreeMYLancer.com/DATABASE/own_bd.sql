-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2019 at 09:28 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `own_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', 'admin'),
(2, 'palash', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `U_id` int(42) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `inv_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `amt` varchar(255) NOT NULL,
  `deliverd` varchar(255) NOT NULL,
  `patent_desc` text NOT NULL,
  `deliverd_desc` text NOT NULL,
  `A_id` int(42) NOT NULL,
  `P_con` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`U_id`, `date`, `inv_no`, `name`, `address`, `amt`, `deliverd`, `patent_desc`, `deliverd_desc`, `A_id`, `P_con`) VALUES
(2, '2018-09-04 18:30:00', '0002277', 'P.S.RANDHAWA', 'SANDHA BAZAR', '5000', 'PALASH', '', '', 6, '9433051111'),
(3, '0000-00-00 00:00:00', '0002049', 'LIFE BLUE PRINT', 'MUKUNDAPUR', '35349', 'UNKNOWN', '', '', 6, '9007792254'),
(4, '0000-00-00 00:00:00', '0002468', 'M/S BAISAKHI', 'A.G MARKET', '3600', 'PALASH', '', '', 6, '905136394'),
(5, '0000-00-00 00:00:00', '0002558', 'ASTHA MEDICAL CENTER', '172, R.C DAS ROAD, BURDWAN .', '45901', 'PALASH', '', '', 6, '8327089535'),
(6, '0000-00-00 00:00:00', '0001898', 'NORTH CALCUTTA MEDICAL AGENCY', '9/3 FEEDER ROAD RATHTALA', '5637', 'PALASH', '', '', 6, '9051028906'),
(7, '0000-00-00 00:00:00', '0001840', 'PADMA GOPAL MEDICAL AGENCY', '66 A.SEN ROAD KOLKATA', '1220', 'PALASH', '', '', 6, '8981382446'),
(8, '0000-00-00 00:00:00', '0002203', 'NIRMAL MEDICAL STORES', '2/6 L.N.C LANE KADAMTALA', '569', 'PALASH', '', '', 6, '03326774325'),
(9, '0000-00-00 00:00:00', '0002188', 'NIRMAL MEDICAL STORES', '2/6 L.N.C LANE KADAMTALA', '1452', 'DIPAYAN', '', '', 6, '03326774325'),
(11, '0000-00-00 00:00:00', '0001764', 'NITAI PANDIT', 'MEDICAL COLLEGE', '1950', 'DIPAYAN', '', '', 6, '9433408280'),
(12, '0000-00-00 00:00:00', 'CN00085', 'RAJ MEDICAL', 'CHANDRABATI , UTARPODRA(NEAR-WEST_BANK)', '176', 'PALASH', '', '', 6, '8930167512'),
(13, '0000-00-00 00:00:00', '0002787', 'GOPAL MEDICAL HALL', '34H, B.T.ROAD , KOLKATA-700002', '990', 'PALASH', '', '', 6, '9007836724'),
(14, '0000-00-00 00:00:00', '0002777', 'MOUMITA ADAK', 'HOWRAH MAIDAN', '2025', 'PALASH', '', '', 6, '7003949172'),
(15, '0000-00-00 00:00:00', '0002786', 'PLUSE BEAT', '28 , B.T.ROAD,CHIRIAMORE, KOLKATA-700019.', '990', 'PALASH', '', '', 6, '8479831238'),
(16, '0000-00-00 00:00:00', '0003081', 'KRISHNA MEDICAL HALL', '105,KHUDIRAM BOSE SARANI, KOL-700004\r\n\r\n\r\n\r\n', '1731', 'DIPAYAN', '', '', 6, '03325337077,9883287012'),
(17, '0000-00-00 00:00:00', '12828', 'RAGHAV', 'SRIRAMPUR', '5300', 'RAJAT', '', '', 19, '9674090898'),
(18, '0000-00-00 00:00:00', '0001596', 'RAJSHREE PHARMA', 'KALIGHAT', '11256', 'RAJAT', '', '', 19, '9233965891'),
(19, '0000-00-00 00:00:00', '000357', 'PURABI DAS', 'BIHAR', '90650', 'DTDC', '', '', 19, '8910695549'),
(20, '0000-00-00 00:00:00', '0001254', 'ANAMIKA SHAW', 'BALLYGUANGE', '5000', 'PINTU', '', '', 19, '9674090898'),
(21, '0000-00-00 00:00:00', '000PK', 'SANJAY MAJHI', 'SEALDAH', '6856', 'PALASH', '', '', 19, '7003949172'),
(22, '0000-00-00 00:00:00', '0005922', 'BINAY DAS', 'LILUAH', '990', 'LOB', '', '', 19, '8910695549'),
(23, '0000-00-00 00:00:00', '000123', 'PURNIMA KHAN', 'HUGHLY', '680', 'PALASH', '', '', 19, '9568741230'),
(24, '0000-00-00 00:00:00', '000780', 'MOUMITA KAR', 'CHAMRAIL', '9532', 'SATTYA', '', '', 19, '8695321741'),
(25, '0000-00-00 00:00:00', '000680', 'DIPIKA MONDAL', 'BAURIA', '85234', 'DILIP', '', '', 19, '74568912345'),
(26, '2019-08-13 17:39:52', '0001422', 'SAILO JANA', 'SALKIA', '4500', 'LOB', '', '', 19, '6289328815'),
(27, '2019-08-13 17:44:44', '0001488', 'NANDA BALAJI ROY', 'TAMILNADU', '2025', 'RAJAT', '', '', 19, '8910695549'),
(28, '2019-08-13 18:23:01', '0001599', 'BAPI DAS', 'SODPUR', '1589', 'DIPAYAN', '', '', 19, '9038262247'),
(29, '2019-08-16 19:48:07', '0001126', 'SUNDER LAL', 'BAGUIATI', '5000', 'PALASH', '', '', 19, '8910695549');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `U_id` int(18) NOT NULL,
  `Uname` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `A_id` int(18) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`U_id`, `Uname`, `subject`, `address`, `Contact`, `email`, `pass`, `A_id`, `image_path`) VALUES
(1, 'SATTYA', 'MANAGER', 'RANAGHAT .', '9333894361', 'S@mail.com', '0f6e06a7f619c4069d2ab85cbbb4034d5deec464', 1, ''),
(2, 'ARPAN', 'ACCOUNTANT', 'BALLY KHAL', '8981590054', 'A@mail.com', '25ec33ba2c1e24dc5927bda118cb9b47f70a7c08', 2, ''),
(3, 'BAPI', 'DELIVERY BOY', 'MADHYAM GRAM', '7003365613', 'B@mail.com', '6e41864f2d47c23b187a2dec3fca43e72dd9c238', 3, ''),
(4, 'DILIP', 'DELEVERY BOY', 'MADHYAM GRAM', '9874742183', 'D@mail.com', '9afd1a977a4a5002cf76506e012c5db959cf8262', 4, ''),
(5, 'DIBAKAR', 'VENTURE/2', 'PALLA', '9064125288', 'D2@mail.com', 'b7b01f7349bf01929123eedee6e927e14f62f933', 5, ''),
(6, 'PALASH', 'DELEVERY BOY', 'HOWRAH', '9674090898', 'P@mail.com', '8b8997b61b064e77d246745fdc676e8c276ecca8', 6, ''),
(7, 'DIPAYAN', 'DELEVERY BOY', 'BEHALA TRAM DEPO', '8777318690', 'DIPAN@mail.com', 'ef3756bae84606a5ffe2083932ae7ee80ab9a5e1', 7, ''),
(8, 'LOB', 'DELIVERY BOY', 'MOTHURA PUR', '9674090898', 'lob@gmail.com', '7add3881e60317d129b458e047fa7df1db0750a8', 0, ''),
(9, 'POLS', 'CI', 'nbvfnnsdon', '9239324460', 'pk@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 0, ''),
(10, 'POLS', 'CI', 'kjnasdvdanv', '1234567890', 'pk@nsj.com', '68eda260a14f3caa506009dff76a61871755ca30', 0, ''),
(11, 'KING', 'LOCAL', 'CIDESDShjkhjkllk', '9674090898', 'K@mail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 0, ''),
(12, 'SHREE', 'MYLOCAL', 'sdfgsdfgsdfgsdg', '9674090898', 'pk@gmail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 0, ''),
(13, 'SHREE', 'MYLOCAL', 'sdfgsdfgsdfgsdg', '9674090898', 'pk@gmail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 0, ''),
(14, 'MOLY', 'MYLOCAL', 'sdfgsdfgsdfgsdg', '9674090898', 'pk@gmail.com', '8b8997b61b064e77d246745fdc676e8c276ecca8', 0, ''),
(15, 'SELLY', 'MYLOCAL', 'sdfgsdfgsdfgsdg', '9674090898', 'pk@gmail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 0, ''),
(16, 'teLLY', 'MYLOCAL', 'sdfgsdfgsdfgsdg', '9674090898', 'pk@gmail.com', '68eda260a14f3caa506009dff76a61871755ca30', 0, ''),
(17, 'SOMA', 'ASDNO', 'NJKASNDCSNCSCDN', '9674090898', 'S@GMAIL.COM', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 0, ''),
(18, 'SHAM', 'DCFDFBG', 'SDAJFBKDSFGBVB', '9674090898', 'K@mail.com', '8b8997b61b064e77d246745fdc676e8c276ecca8', 0, ''),
(19, 'avijit', 'web apps', 'web services', '8910695549', 'app,development500@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, ''),
(20, 'SUROJIT NASKAR', 'CI', 'PASCHIMPARA', '9239324460', 'palashkayal96@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 0, ''),
(21, 'UMAR', 'CI', 'XXXX', '8910695549', 'U@mail.com', 'b1546096f3fe2725275654d7978c3164a9f4fcbf', 0, ''),
(22, 'HILI', 'CI', 'M,BXKJ', '8582821118', 'HI@mail.com', '294d4b530b4b216fc6f4a70fbbaa071937614b04', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`U_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `U_id` int(42) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `U_id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
