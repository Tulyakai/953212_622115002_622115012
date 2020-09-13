-- create the database
DROP DATABASE IF EXISTS yuzu pizza;
CREATE DATABASE yuzu pizza;

-- select the database
USE yuzu pizza;



CREATE TABLE `accounts` (
  `Account_ID` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `tel_num` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Account_ID`, `email`, `username`, `password`, `address`, `tel_num`) VALUES
(2, 'tulyawatt@gmail.com', 'Tulyakai', '123', '76/64 หมู่5 ต.สุรศักดิ์ อใศรีราชา จ.ชลบุรี 20110', '0982867266'),
(6, 'sirilak_phr@elearning.cmu.ac.th', 'Noon', '1234', 'CNX', '0992404931'),
(7, 'tu.itconsults@gmail.com', 'tufoster', 'C@mry3875', '76/64 หมู่5 ต.สุรศักดิ์ อใศรีราชา จ.ชลบุรี 20110', '0957398082'),
(8, 'krittaporn_kaew@cmu.ac.th', 'Tongtktk', '1234', 'kuy', '191');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Employee_ID` int(11) NOT NULL,
  `Firstname` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Lastname` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Position_ID` int(11) DEFAULT NULL,
  `Date of Birth` date DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `Age` int(11) NOT NULL,
  `Phone` char(10) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Employee_ID`, `Firstname`, `Lastname`, `password`, `Position_ID`, `Date of Birth`, `address`, `Age`, `Phone`, `Email`) VALUES
(1, 'Tulyawat', 'Tubkhong', 'yuzuAdmin', 1, '2000-10-24', '123', 19, '0982867266', 'tulyawat_t@cmu.ac.th'),
(2, 'Krittaporn', 'Kaewpiyarat', '1234', 1, '2000-07-17', 'CNX', 20, '0918659478', 'krittaporn_kaew@cmu.ac.th');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `Food_ID` int(11) NOT NULL,
  `Food_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`Food_ID`, `Food_type`) VALUES
(1, 'Mushroom and pepperoni pizza'),
(2, 'Mixed pizza'),
(3, 'Veggie pizza'),
(4, 'Pepperoni pizza');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(11) NOT NULL,
  `Order_description` varchar(200) DEFAULT NULL,
  `Order_date` date NOT NULL DEFAULT current_timestamp(),
  `Order_time` time NOT NULL DEFAULT current_timestamp(),
  `Account_ID` int(11) DEFAULT NULL,
  `Food_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `Order_description`, `Order_date`, `Order_time`, `Account_ID`, `Food_ID`) VALUES
(199, 'no ketchup', '2020-09-04', '10:26:12', 2, 1),
(200, 'Just sauce', '2020-09-04', '10:26:20', 2, 3),
(201, 'added cheeta ceet', '2020-09-05', '00:42:10', 7, 2),
(202, 'kuy', '2020-09-12', '11:53:13', NULL, 1),
(203, 'wqsx', '2020-09-12', '11:53:47', NULL, 2),
(204, 'wqeqw', '2020-09-12', '11:54:56', NULL, 3),
(205, '1234543', '2020-09-12', '11:56:29', NULL, 2),
(206, 'qeweqw', '2020-09-12', '11:56:48', NULL, 3),
(207, 'eqw', '2020-09-12', '11:58:11', NULL, 3),
(208, 'das', '2020-09-12', '11:58:59', NULL, 3),
(209, '12345', '2020-09-12', '12:00:23', 2, 2),
(210, '1234', '2020-09-12', '12:01:44', 8, 2),
(211, 'qew', '2020-09-12', '12:04:05', 8, 1),
(212, '321', '2020-09-12', '12:05:55', NULL, 2),
(213, 'swd', '2020-09-12', '12:09:24', NULL, 2),
(214, '1234567890', '2020-09-12', '12:15:30', 8, 3),
(215, '1234567890', '2020-09-12', '12:15:30', 8, 3),
(216, 'kkk', '2020-09-12', '12:16:15', 8, 2),
(217, '217', '2020-09-12', '12:19:20', 8, 2),
(218, '218', '2020-09-12', '12:19:40', 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `Position_ID` int(1) NOT NULL,
  `Position_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`Position_ID`, `Position_name`) VALUES
(1, 'Owner'),
(2, 'Chef'),
(3, 'Sous chef'),
(4, 'Deliver');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `Restaurant_name` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`Restaurant_name`) VALUES
('Yuzu\'s homemade');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Account_ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Employee_ID`),
  ADD KEY `Position_ID` (`Position_ID`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`Food_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `Food_ID` (`Food_ID`),
  ADD KEY `Account_ID` (`Account_ID`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`Position_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `Account_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `Employee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `Position_ID` FOREIGN KEY (`Position_ID`) REFERENCES `positions` (`Position_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Account_ID` FOREIGN KEY (`Account_ID`) REFERENCES `accounts` (`Account_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Food_ID` FOREIGN KEY (`Food_ID`) REFERENCES `foods` (`Food_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
