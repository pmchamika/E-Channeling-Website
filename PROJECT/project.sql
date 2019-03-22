-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2017 at 03:11 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `Group_ID` int(11) NOT NULL,
  `A_ID` int(11) NOT NULL AUTO_INCREMENT,
  `P_ID` int(11) NOT NULL,
  `H_ID` int(11) NOT NULL,
  `D_ID` int(11) NOT NULL,
  `Fee` varchar(12) NOT NULL,
  `Active` varchar(5) NOT NULL,
  PRIMARY KEY (`A_ID`),
  KEY `Group_ID` (`Group_ID`),
  KEY `P_ID` (`P_ID`),
  KEY `P_ID_2` (`P_ID`),
  KEY `H_ID` (`H_ID`),
  KEY `D_ID` (`D_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Group_ID`, `A_ID`, `P_ID`, `H_ID`, `D_ID`, `Fee`, `Active`) VALUES
(4, 1, 1, 3, 11, 'Rs 950.00', 'yes'),
(8, 20, 1, 2, 2, 'Rs  2450.00', 'yes'),
(4, 25, 2, 3, 11, 'Rs 950.00', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `D_ID` int(11) NOT NULL AUTO_INCREMENT,
  `D_Name` varchar(100) NOT NULL,
  `D_Speciality` varchar(50) NOT NULL,
  `D_Email` varchar(50) NOT NULL,
  `D_Nic` varchar(10) NOT NULL,
  `D_Tele` int(10) NOT NULL,
  PRIMARY KEY (`D_ID`),
  UNIQUE KEY `D_Nic` (`D_Nic`),
  UNIQUE KEY `D_Email` (`D_Email`),
  UNIQUE KEY `D_Nic_2` (`D_Nic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_ID`, `D_Name`, `D_Speciality`, `D_Email`, `D_Nic`, `D_Tele`) VALUES
(1, 'Dr.B.M.D.S.BASANAYAKA', 'Phychiatrist', 'basanayaka@gmail.com', '12345678V', 776756345),
(2, 'Dr.HARINDRA KARUNATHILAKE', 'Physician', 'karunathilake@gmail.com', '123454344V', 776356345),
(3, 'Dr.A.D.KAPURUGE', 'Thoracic Surgeon', 'kapuruge@gmail.com', '123564344V', 776436345),
(4, 'Dr.DAYA DE SILVA', 'Eye Surgeon', 'silva@gmail.com', '123564234V', 777436345),
(5, 'Dr.H.K.DE S.KULARATHNE', 'Nero Surgeon', 'kularathne@gmail.com', '123909344V', 776436905),
(6, 'Dr.HASANTHA RANAWAKE', 'Cardiologist', 'ranawake@gmail.com', '123674344V', 713436345),
(7, 'Dr.HEMANTHA DODAMPALA', 'Gynecology', 'dodampala@gmail.com', '123564666V', 776436665),
(8, 'Dr.AMARASINGHE', 'Oncological Surgeon', 'amarasinghe@gmail.com', '123569044V', 779036345),
(9, 'Dr.A.D.CHANDRA JAYASOORIYA', 'ENT Surgeon', 'jayasooriya@gmail.com', '123564789V', 776786345),
(10, 'Dr.COLVIN SAMARASINGHE', 'Neuro Surgeon', 'samarasinghe@gmail.com', '123588344V', 776996345),
(11, 'Dr.D.M.S.HANDAGALE', 'Thoracic Surgeon', 'samarasinghe2@gmail.com', '123500344V', 770036345),
(12, 'Dr.KARUNARATHNE', 'Phychiatrist', 'karunarathe@gmail.com', '123564334V', 776433345),
(13, 'Dr.G.L.PUNCHIHEVA', 'Orthopaedic', 'punchihewa@gmail.com', '123664344V', 723436345),
(14, 'Dr.J.V.ARIYASINGHE', 'Orthopaedic', 'ariyasinghe@gmail.com', '123561144V', 771136345),
(15, 'Dr.LALITHA PRIYASIRI', 'Surgeon', 'priyasiri@gmail.com', '123562244V', 776436322),
(16, 'Dr.M.SHERIFF', 'ENT  Surgeon', 'sheriff@gmail.com', '123004344V', 700436345),
(17, 'Dr.N.Y.WIJEMANNE', 'Plastic Surgeon', 'vijemanne@gmail.com', '123704344V', 776400345),
(18, 'Dr.NANDANA DIKMADUGODA', 'Physician', 'dikmadudugoda@gmail.com', '123564355V', 755436345),
(19, 'Dr.NAVODA ATAPATHTHU', 'Phychiatrist', 'atapaththu@gmail.com', '123384344V', 740436345),
(20, 'Dr.NELUM WIKKRAMASINGHE', 'Surgeon', 'wikkramasinghe@gmail.com', '123889344V', 767836345);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_hospital`
--

CREATE TABLE IF NOT EXISTS `doctor_hospital` (
  `Group_ID` int(11) NOT NULL AUTO_INCREMENT,
  `H_ID` int(11) NOT NULL,
  `D_ID` int(11) NOT NULL,
  `D_Stime` varchar(10) NOT NULL,
  `D_Etime` varchar(10) NOT NULL,
  `D_Date` varchar(20) NOT NULL,
  `Fee` varchar(12) NOT NULL,
  `Active` varchar(5) NOT NULL,
  PRIMARY KEY (`Group_ID`),
  KEY `H_ID` (`H_ID`),
  KEY `D_ID` (`D_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `doctor_hospital`
--

INSERT INTO `doctor_hospital` (`Group_ID`, `H_ID`, `D_ID`, `D_Stime`, `D_Etime`, `D_Date`, `Fee`, `Active`) VALUES
(1, 1, 10, '10.00 A.M', '11.00 A.M', '2017/10/26', 'Rs 1500.00', 'yes'),
(2, 1, 9, '1.00 P.M', '3.00 P.M', '2017/11/01', 'Rs 2500.00', 'yes'),
(3, 2, 1, '5.00 P.M', '6.30 P.M', '2017/10/28', 'Rs  2500.00', 'yes'),
(4, 3, 11, '8.00 P.M', '10.00 P.M', '2017/11/05', 'Rs 950.00', 'yes'),
(5, 4, 13, '9.00 A.M', '11.00 A.M', '2017/11/10', 'Rs 1500.00', 'yes'),
(6, 1, 4, '3.00 P.M', '6.00 P.M', '2017/12/17', 'Rs 1500.00', 'yes'),
(8, 2, 5, '10.00 A.M', '11.00 A.M', '2017/10/22', 'Rs  2450.00', 'yes'),
(9, 10, 3, '2.00 P.M', '5.00 P.M', '2017/12/14', 'Rs 1300.00', 'yes'),
(10, 2, 10, '2.00 P.M', '5.00 P.M', '2017/12/21', 'Rs 1500.00', 'yes'),
(11, 2, 7, '11.00 P.M', '1.30 P.M', '2017/11/21', 'Rs 3000.00', 'yes'),
(12, 6, 13, '8.00 A.M', '10.00 A.M', '2018/01/05', 'Rs 1350.00', 'yes'),
(13, 7, 13, '6.00 A.M', '9.00 A.M', '2018/02/09', 'Rs 1650.00', 'yes'),
(14, 7, 4, '1.00 P.M', '2.30 P.M', '2017/10/22', 'Rs 3200.00', 'yes'),
(15, 1, 1, '10.30 A.M', '12.00 P.M', '2017/12/20', 'Rs 1850.00', 'yes'),
(16, 2, 2, '9.00 P.M', '11.00 P.M', '2017/12/22', 'Rs 1850.00', 'yes'),
(17, 3, 3, '5.30 P.M', '8.00 P.M', '2017/12/15', 'Rs 1500.00', 'yes'),
(18, 4, 13, '6.00 P.M', '8.30P.M', '2017/10/29', 'Rs 1850.00', 'yes'),
(19, 4, 4, '1.00 P.M', '2.30 P.M', '2017/11/01', 'Rs 3200.00', 'yes'),
(20, 4, 3, '4.00 P.M', '6.00 P.M', '2017/12/25', 'Rs 1950.00', 'yes'),
(21, 3, 5, '3.30 P.M', '5.45 P.M', '2017/11/15', 'Rs 1150.00', 'yes'),
(22, 5, 3, '7.00 A.M', '10.00 A.M', '2017/11/25', 'Rs 1650.00', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `H_ID` int(11) NOT NULL AUTO_INCREMENT,
  `H_name` varchar(100) NOT NULL,
  `H_Email` varchar(50) NOT NULL,
  `H_Password` varchar(50) NOT NULL,
  `H_Tele` int(10) NOT NULL,
  PRIMARY KEY (`H_ID`),
  UNIQUE KEY `H_Email` (`H_Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`H_ID`, `H_name`, `H_Email`, `H_Password`, `H_Tele`) VALUES
(1, 'Lanka Hospital', 'lankahospital@gmail.com', 'lanka', 112927927),
(2, 'Asiri Hospital', 'asirihospital@gmail.com', 'asiri', 11234567),
(3, 'Nawaloka Hospital Colombo', 'nawalokahospital@gmail.com', 'nawaloka', 112927896),
(4, 'Cooperative Hospital Kurunegale', 'cooperativehospital@gmail.com', 'cooperative', 372221214),
(5, 'Navinna Hospital', 'navinnahospital@gmail.com', 'navinna', 372234345),
(6, 'Miracle Hospital', 'miraclehospital@gmail.com', 'miracle', 374563489),
(7, 'Durdans Hospital', 'durdanshospital@gmail.com', 'durdans', 112928906),
(8, 'Sethsewana Hospital', 'sethsewanahospital@gmail.com', 'sethsewana', 112966627),
(9, 'Browns Hospital Ragama', 'brownshospital@gmail.com', 'browns', 117777927),
(10, 'Denetha eye hospital', 'denethaeyehospital@gmail.com', 'denetha', 112900027);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `P_ID` int(11) NOT NULL AUTO_INCREMENT,
  `P_Status` varchar(8) NOT NULL,
  `P_Fname` varchar(50) NOT NULL,
  `P_Lname` varchar(50) NOT NULL,
  `P_Email` varchar(50) NOT NULL,
  `P_Password` varchar(255) NOT NULL,
  `P_Nic` varchar(10) NOT NULL,
  `P_Dob` varchar(10) NOT NULL,
  `P_Address` varchar(100) NOT NULL,
  `P_Tele1` int(10) NOT NULL,
  `P_Tele2` int(10) NOT NULL,
  `P_AccNo` varchar(19) NOT NULL,
  `P_Expdate` varchar(10) NOT NULL,
  `P_AccCode` int(3) NOT NULL,
  PRIMARY KEY (`P_ID`),
  UNIQUE KEY `P_AccNo` (`P_AccNo`),
  UNIQUE KEY `P_Nic` (`P_Nic`),
  UNIQUE KEY `P_Email` (`P_Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_ID`, `P_Status`, `P_Fname`, `P_Lname`, `P_Email`, `P_Password`, `P_Nic`, `P_Dob`, `P_Address`, `P_Tele1`, `P_Tele2`, `P_AccNo`, `P_Expdate`, `P_AccCode`) VALUES
(1, 'Mr', 'Saman', 'Kumara', 'saman@gmail.com', '2d9521d58de398c316542804e1652c0dbe41c638', '123456789V', '12/02/1990', 'Negombo Road,Kurunegala', 715465444, 715465445, '1123-4686-7894-4562', '01/05/2019', 123),
(2, 'Mr', 'Kamal', 'Ranathunga', 'kamal@gmail.com', '2d9521d58de398c316542804e1652c0dbe41c638', '123466589V', '18/02/1996', 'Dunagaha Road,Nilpanagoda', 312547896, 723368879, '2222-8585-8888-8888', '11/02/2019', 787),
(3, 'Mrs', 'Lalitha', 'Kumari', 'lalitha@gmail.com', '2d9521d58de398c316542804e1652c0dbe41c638', '123456177V', '01/02/1994', 'Kuliyapitiya Road,Pannala', 117894785, 776547893, '1123-4786-7894-4562', '12/05/2018', 455),
(5, 'Mr', 'Shaan', 'Weerathunga', 'shaan@gmail.com', '2d9521d58de398c316542804e1652c0dbe41c638', '123458899V', '11/03/1989', 'Makandura,Gonawila', 110253698, 779968853, '1123-4688-7774-4562', '11/12/2017', 789),
(6, 'Miss', 'Waruni', 'Weerakoon', 'waruni@gmail.com', '2d9521d58de398c316542804e1652c0dbe41c638', '968875432V', '02/05/1996', 'Kuliyapitaiya Road Giriulla', 325549875, 114785233, '9874-6654-6664-3321', '02/08/2018', 123),
(7, 'Mr', 'asdasd', 'asd', 'adsd@sdf.com', '2d9521d58de398c316542804e1652c0dbe41c638', '123122923V', '12/23/4567', '454545', 454, 125478, '2237-4544-4545-4545', '12/12/2019', 123);

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

CREATE TABLE IF NOT EXISTS `refund` (
  `R_ID` int(11) NOT NULL AUTO_INCREMENT,
  `A_ID` int(11) NOT NULL,
  `Reason` varchar(255) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Bank` varchar(200) NOT NULL,
  `Acc_No` varchar(19) NOT NULL,
  PRIMARY KEY (`R_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `refund`
--

INSERT INTO `refund` (`R_ID`, `A_ID`, `Reason`, `Name`, `Bank`, `Acc_No`) VALUES
(1, 2, 'Buissness Reasons', 'Kumara', 'BOC', '1234-5644-4546-5231'),
(2, 4, 'Another appointment', 'Saman', 'HNB', '2123-4545-4545-4545');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `fk_D_ID` FOREIGN KEY (`D_ID`) REFERENCES `doctor` (`D_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_group_ID` FOREIGN KEY (`Group_ID`) REFERENCES `doctor_hospital` (`Group_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_H_ID` FOREIGN KEY (`H_ID`) REFERENCES `hospital` (`H_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_P_ID` FOREIGN KEY (`P_ID`) REFERENCES `patient` (`P_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor_hospital`
--
ALTER TABLE `doctor_hospital`
  ADD CONSTRAINT `FK_DID` FOREIGN KEY (`D_ID`) REFERENCES `doctor` (`D_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HID` FOREIGN KEY (`H_ID`) REFERENCES `hospital` (`H_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
