-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 11:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank1`
--

-- --------------------------------------------------------

--
-- Table structure for table `actype`
--

CREATE TABLE `actype` (
  `acid` int(11) NOT NULL,
  `acname` varchar(250) NOT NULL,
  `percent` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actype`
--

INSERT INTO `actype` (`acid`, `acname`, `percent`) VALUES
(1, 'Fixed Account', 7),
(2, 'Saving account', 2),
(3, 'Recuring Account', 6),
(4, 'Current Account', 1);

-- --------------------------------------------------------

--
-- Table structure for table `acust`
--

CREATE TABLE `acust` (
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `cadd` varchar(250) NOT NULL,
  `cphone` bigint(20) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `age` int(250) NOT NULL,
  `adhar` bigint(20) NOT NULL,
  `acno` bigint(20) NOT NULL,
  `acid` varchar(250) NOT NULL,
  `doo` date NOT NULL,
  `total` float NOT NULL DEFAULT 0,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acust`
--

INSERT INTO `acust` (`cid`, `sid`, `cname`, `cadd`, `cphone`, `cemail`, `age`, `adhar`, `acno`, `acid`, `doo`, `total`, `image`) VALUES
(12, 8, 'sonali', 'udupi', 2147483647, 'swathiswathik9@gmail.com', 26, 2147483647, 2147483648, '2', '2023-05-22', 201000, 'upload/Choker-1024x1024.jpg'),
(13, 8, 'megha', 'mangalore', 2147483647, 'shree@123gmail.com', 26, 2147483647, 987654336, '2', '2023-04-04', 29944, 'upload/il_1080xN.2963878365_i2b8.webp'),
(14, 8, 'ashu', 'kodagu', 2147483647, 'ashu@gmail.com', 30, 2147483647, 1029384768, '1', '2023-04-15', 20000, 'upload/Choker-1024x1024.jpg'),
(15, 8, 'ashwini', 'kodagu', 2147483647, 'sona@mail.com', 28, 2147483647, 2147483648, '3', '2023-05-15', 15000, 'upload/istockphoto-652925014-170667a.jpg'),
(16, 8, 'radha', 'udupi', 2147483647, 'swathiswathik9@gmail.com', 26, 2147483647, 2147483648, '2', '2023-05-10', 10000, 'upload/Choker-1024x1024.jpg'),
(17, 8, 'ssf', 'kodagu', 1234567890, 'swathiswathik9@gmail.com', 26, 2147483647, 2147483648, '3', '2023-05-15', 280000, 'upload/Choker-1024x1024.jpg'),
(18, 0, 'gayii', 'udupi', 2147483647, 'gayi@123', 28, 2147483647, 2147483648, '2', '2023-05-24', 15000, 'upload/il_1080xN.2963878365_i2b8.webp');

-- --------------------------------------------------------

--
-- Table structure for table `adlogin`
--

CREATE TABLE `adlogin` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adlogin`
--

INSERT INTO `adlogin` (`id`, `email`, `password`) VALUES
(1, 'admin@login', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `aloan`
--

CREATE TABLE `aloan` (
  `lid` int(11) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `ldesc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aloan`
--

INSERT INTO `aloan` (`lid`, `lname`, `ldesc`) VALUES
(20, 'Vehical Loan', '12'),
(21, 'Crop Loan', '3'),
(22, 'Personal Loan', '9'),
(23, 'Gold Loan', '8'),
(24, 'Development Loan', '6'),
(25, 'Housing loan', '8');

-- --------------------------------------------------------

--
-- Table structure for table `astaff`
--

CREATE TABLE `astaff` (
  `sid` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `adhar` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `doj` date NOT NULL,
  `password` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `astaff`
--

INSERT INTO `astaff` (`sid`, `name`, `address`, `phone`, `adhar`, `email`, `doj`, `password`, `image`) VALUES
(8, 'deepu', 'manglore', '6364366697', '333', 'sonaliramdas771@gmail.com', '2023-04-25', 'deepu', 'upload/basenamepanner kaday.jpg'),
(11, 'Navya', 'Chitradurga', '9535770728', '2254', 'navya@123', '2023-05-18', 'navya', 'upload/basenameRavaDosa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `deposite`
--

CREATE TABLE `deposite` (
  `did` int(11) NOT NULL,
  `amt` int(250) NOT NULL,
  `cid` int(11) NOT NULL,
  `dstatus` varchar(30) NOT NULL,
  `remark` varchar(250) NOT NULL,
  `ddate` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `fid` int(11) NOT NULL,
  `cid` int(250) NOT NULL,
  `sid` int(250) NOT NULL,
  `msg` varchar(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ld`
--

CREATE TABLE `ld` (
  `gid` int(11) NOT NULL,
  `cid` int(250) NOT NULL,
  `lid` int(250) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `cphoto` varchar(250) NOT NULL,
  `occup` varchar(250) NOT NULL,
  `source` varchar(250) NOT NULL,
  `income` int(250) NOT NULL,
  `age` int(250) NOT NULL,
  `quli` varchar(250) NOT NULL,
  `isno` int(250) NOT NULL,
  `isdate` date NOT NULL,
  `s1ad` varchar(250) NOT NULL,
  `s1phone` varchar(250) NOT NULL,
  `s2ad` varchar(250) NOT NULL,
  `s2phone` varchar(250) NOT NULL,
  `aphone` varchar(250) NOT NULL,
  `purpose` varchar(250) NOT NULL,
  `afather` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `minfo` varchar(250) NOT NULL,
  `mfile` varchar(250) NOT NULL,
  `aperoid` int(250) NOT NULL,
  `amt` int(250) NOT NULL,
  `percent` int(250) NOT NULL,
  `totalamt` int(11) NOT NULL,
  `month` int(250) NOT NULL,
  `total` int(250) NOT NULL,
  `paid` int(250) NOT NULL,
  `bal` int(250) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ld`
--

INSERT INTO `ld` (`gid`, `cid`, `lid`, `cname`, `cphoto`, `occup`, `source`, `income`, `age`, `quli`, `isno`, `isdate`, `s1ad`, `s1phone`, `s2ad`, `s2phone`, `aphone`, `purpose`, `afather`, `address`, `minfo`, `mfile`, `aperoid`, `amt`, `percent`, `totalamt`, `month`, `total`, `paid`, `bal`, `date`, `status`) VALUES
(13, 9, 20, 'jgfgh', 'upload/ADR411RNI_2_800x.webp', 'fdgfdf', 'egt', 1234, 45, 'gegyy', 1234, '2023-05-18', 'twtetydyr', '23434345', 'gfhfhfhgfhg', '1234567890', '1234567890', 'fadrf', 'cnbhgfdghdf', 'hfhgfdhdghwe', 'gwjrhgwjrh', 'upload/ADR411RNI_2_800x.webp', 3, 200000, 12, 0, 5, 44800, 0, 0, '2023-05-18', 'accepted'),
(14, 7, 25, 'sonali', 'upload/kulcha.jpg', 'teacher', 'land', 45000, 26, 'msc', 1231, '2023-05-19', 'udupi', '1234567889', 'mangalore', '12345678789', '1234567890', 'house', 'ffwf', 'udupi', 'fwffdwaff', 'upload/fast.jpg', 3, 20000, 8, 0, 5, 4320, 0, 0, '2023-05-20', 'accepted'),
(15, 4, 23, 'sonali', 'upload/about.webp', 'teacher', 'land', 45000, 26, 'msc', 1231, '2023-05-18', 'udupi', '1234567889', 'mangalore', '12345678789', '1234567890', 'house', 'ffwf', 'udupi', 'fwffdwaff', 'upload/Choker-1024x1024.jpg', 3, 2000000, 8, 2160000, 6, 360000, 0, 0, '2023-05-20', 'rejected'),
(16, 5, 22, 'shashi', 'upload/Choker-1024x1024.jpg', 'teacher', 'land', 45000, 26, 'msc', 1231, '2023-05-05', 'udupi', '1234567889', 'mangalore', '12345678789', '1234567890', 'house', 'shhha', 'udupi', 'retw', 'upload/Choker-1024x1024.jpg', 5, 500000, 9, 0, 6, 90833, 0, 90833, '2023-05-20', 'accepted'),
(17, 11, 23, 'paaru', 'upload/Choker-1024x1024.jpg', 'teacher', 'land', 45000, 26, 'msc', 1231, '2023-05-20', 'udupi', '1234567889', 'mangalore', '12345678789', '1234567890', 'house', 'shhha', 'udupi', 'fwffdwaff', 'upload/Choker-1024x1024.jpg', 5, 100000, 8, 0, 5, 21600, 30000, 70000, '2023-05-13', 'accepted'),
(18, 12, 23, 'shashi', 'upload/Choker-1024x1024.jpg', 'teacher', 'land', 45000, 26, 'msc', 1231, '2023-05-22', 'udupi', '1234567889', 'mangalore', '12345678789', '1234567890', 'gold', 'shhha', 'udupi', 'fwffdwaff', 'upload/Choker-1024x1024.jpg', 5, 2000000, 8, 0, 24, 90000, 2000, 1998000, '2023-05-02', 'Pending'),
(19, 18, 24, 'reshma', 'upload/rs.jpg', 'teacher', 'land', 45000, 26, 'msc', 1223, '2023-05-24', 'udupi', '1234567889', 'mangalore', '12345678789', '1234567890', 'building', 'ravi', 'udupi', 'raagu', 'upload/rs.jpg', 5, 2000000, 6, 0, 24, 88333, 0, 2000000, '2023-05-22', 'Pending'),
(20, 18, 24, 'reshma', 'upload/rs.jpg', 'teacher', 'land', 45000, 26, 'msc', 1223, '2023-05-24', 'udupi', '1234567889', 'mangalore', '12345678789', '1234567890', 'building', 'ravi', 'udupi', 'raagu', 'upload/rs.jpg', 5, 2000000, 6, 0, 24, 0, 0, 2000000, '2023-05-22', 'Pending'),
(21, 18, 24, 'reshma', 'upload/rs.jpg', 'teacher', 'land', 45000, 26, 'msc', 1223, '2023-05-24', 'udupi', '1234567889', 'mangalore', '12345678789', '1234567890', 'building', 'ravi', 'udupi', 'raagu', 'upload/rs.jpg', 5, 2000000, 6, 0, 24, 0, 0, 2000000, '2023-05-22', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `loanreq`
--

CREATE TABLE `loanreq` (
  `lrid` int(11) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `cemail` varchar(250) NOT NULL,
  `cphone` int(250) NOT NULL,
  `add` varchar(250) NOT NULL,
  `adhar` int(100) NOT NULL,
  `age` int(250) NOT NULL,
  `acno` int(250) NOT NULL,
  `loantype` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loanreq`
--

INSERT INTO `loanreq` (`lrid`, `cname`, `cemail`, `cphone`, `add`, `adhar`, `age`, `acno`, `loantype`) VALUES
(1, '', '', 0, '', 0, 0, 0, ''),
(2, '', '', 0, '', 0, 0, 0, '7'),
(3, '', '', 0, '', 0, 0, 0, '7'),
(4, '', '', 0, '', 0, 0, 0, '5'),
(5, '', '', 0, '', 0, 0, 0, ''),
(6, '', '', 0, '', 0, 0, 0, '7'),
(7, 'shreya', '', 0, '', 0, 0, 0, ''),
(8, '', '', 0, '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `lpay`
--

CREATE TABLE `lpay` (
  `lpid` int(11) NOT NULL,
  `gid` int(250) NOT NULL,
  `cid` int(250) NOT NULL,
  `amt` int(250) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `amt` int(250) NOT NULL,
  `cid` int(250) NOT NULL,
  `wstatus` varchar(250) NOT NULL,
  `remark` varchar(250) NOT NULL,
  `wdate` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actype`
--
ALTER TABLE `actype`
  ADD PRIMARY KEY (`acid`);

--
-- Indexes for table `acust`
--
ALTER TABLE `acust`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `adlogin`
--
ALTER TABLE `adlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aloan`
--
ALTER TABLE `aloan`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `astaff`
--
ALTER TABLE `astaff`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `deposite`
--
ALTER TABLE `deposite`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `ld`
--
ALTER TABLE `ld`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `loanreq`
--
ALTER TABLE `loanreq`
  ADD PRIMARY KEY (`lrid`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actype`
--
ALTER TABLE `actype`
  MODIFY `acid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `acust`
--
ALTER TABLE `acust`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `adlogin`
--
ALTER TABLE `adlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aloan`
--
ALTER TABLE `aloan`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `astaff`
--
ALTER TABLE `astaff`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `deposite`
--
ALTER TABLE `deposite`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ld`
--
ALTER TABLE `ld`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `loanreq`
--
ALTER TABLE `loanreq`
  MODIFY `lrid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
