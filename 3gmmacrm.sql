-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2018 at 01:37 AM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `3gmmacrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`id`, `name`, `address`) VALUES
(1, 'North Campus', 'north'),
(2, 'Gulshan Campus', 'Gulshan'),
(3, 'Saddar Campus', 'Saddar ,Karachi Campus1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(200) DEFAULT NULL,
  `categoryImage` varchar(200) DEFAULT NULL,
  `categoryDesc` varchar(200) DEFAULT NULL,
  `campus_id` int(11) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`, `categoryImage`, `categoryDesc`, `campus_id`) VALUES
(9, 'MMA', 'download.jpg', 'MMA Equipment & Apparel ', 1),
(10, 'Boxing', 'Chrysanthemum.jpg', 'Boxing', 1),
(11, 'adsdsd', 'Capture4.PNG', 'sdsds', 1),
(12, 'test', '10985522_912484858782426_653752271895395214_n.jpg', 'test', 2);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseID` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(200) NOT NULL,
  `course_description` varchar(200) NOT NULL,
  `course_duration` varchar(200) NOT NULL,
  `course_timings` varchar(200) NOT NULL,
  `course_shift` varchar(200) NOT NULL,
  `course_price` int(100) NOT NULL,
  `campus_id` int(11) NOT NULL,
  PRIMARY KEY (`courseID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `course_title`, `course_description`, `course_duration`, `course_timings`, `course_shift`, `course_price`, `campus_id`) VALUES
(8, 'testing Course', 'test', 'test', '11:00 to 1:00', 'Morning', 3000, 2),
(9, 'MMA Traning', 'Mma Training and fitness', '2 hour', '8:00 to 10:00', 'Evening', 3000, 1),
(11, 'JUDO - Fitness', 'Fitness training through art of Judo', '1 hour', '6:00 to 7:00', 'Evening', 3000, 1),
(12, 'MMA - Fitness', 'Fitness training through MMA ', '1 hour', '3:00 to 4:00, 4:00 to 5:00, 5:00 to 6:00, 6:00 to 7:00, 7:00 to 8:00', 'Evening', 3000, 1),
(13, 'JUDO - Technical Training', 'Judo techniques and Course outline', '1 hour', '7:00 to 8:00', 'Evening', 3000, 1),
(14, 'MMA - Fitness', 'Fitness training through MMA ', '1 hour', '8:00 to 9:00, 9:00 to 10:00, 10:00 to 11:00', 'Morning', 3000, 1),
(15, 'Boxing', 'Boxing is the best workout , Try it to achieve \r\nthe best shape of your Life!', '1 hour', '3:00 to 4:00, 4:00 to 5:00, 5:00 to 6:00, 6:00 to 7:00, 7:00 to 8:00', 'Evening', 3000, 1),
(16, 'Boxing', 'Boxing is the best workout , Try it to achieve \r\nthe best shape of your Life!', '1 hour', '8:00 to 9:00, 9:00 to 10:00, 10:00 to 11:00', 'Morning', 3000, 1),
(17, 'Kick Boxing / Muay Thai', 'Skills & drills of Thai kick boxing with full \r\ncontact sparring and functional training.', '1 hour', '3:00 to 4:00, 4:00 to 5:00, 5:00 to 6:00, 6:00 to 7:00, 7:00 to 8:00', 'Evening', 3000, 1),
(18, 'Kick Boxing / Muay Thai', 'Skills & drills of Thai kick boxing with full \r\ncontact sparring and Functional training.', '1 hour', '8:00 to 9:00, 9:00 to 10:00, 10:00 to 11:00', 'Morning', 3000, 1),
(19, 'Grappling / Brazilian Jiujitsu', 'Self defense system that focuses on grappling \r\nand especially ground fighting.', '1 hour', '3:00 to 4:00, 4:00 to 5:00, 5:00 to 6:00, 6:00 to 7:00, 7:00 to 8:00', 'Evening', 3000, 1),
(20, 'Grappling / Brazilian Jiujitsu', 'Self defense system that focuses on grappling \r\nand especially ground fighting.', '1 hour', '8:00 to 9:00, 9:00 to 10:00, 10:00 to 11:00', 'Morning', 3000, 1),
(21, 'Kids - MMA', 'Build confidence like no other activity.\r\nSafe fun energy workout.', '1 hour', '3:00 to 4:00, 4:00 to 5:00, 5:00 to 6:00, 6:00 to 7:00, 7:00 to 8:00', 'Evening', 3000, 1),
(22, 'Female - MMA', 'Burn Calories, Lose weight, \r\nFlatten your stomach & Learn Self-defense.', '1 hour', '3:00 to 4:00, 4:00 to 5:00, 5:00 to 6:00, 6:00 to 7:00', 'Evening', 3000, 1),
(23, 'Female - MMA', 'Burn Calories, Lose weight, \r\nFlatten your stomach & Learn Self-defense.', '1 hour', '8:00 to 9:00, 9:00 to 10:00, 10:00 to 11:00', 'Morning', 3000, 1),
(24, 'Tyre Fit', 'Tires do more than just make cars move. Use these tire-based exercises and complete circuit to add strength, size, speed, and agility to your entire body!', '1 hour', '3:00 to 4:00, 4:00 to 5:00, 5:00 to 6:00, 6:00 to 7:00, 7:00 to 8:00', 'Evening', 8000, 1),
(25, 'Fit Beat', 'Customized Structured Exercises to help leaning, toning, defining, and sculpting the body through an innovative and creative series of Rhythms and exercises.', '1 hour', '3:00 to 4:00, 4:00 to 5:00, 5:00 to 6:00, 6:00 to 7:00, 7:00 to 8:00', 'Evening', 8000, 1),
(26, 'Resistance Training', 'Train to induce muscular contraction which builds the strength, anaerobic endurance, and size of skeletal muscles', '1 hour', '3:00 to 4:00, 4:00 to 5:00, 5:00 to 6:00, 6:00 to 7:00, 7:00 to 8:00', 'Evening', 8000, 1),
(27, 'Suspension Training', 'Suspension Training body weight exercise develops strength, balance, flexibility and core stability simultaneously', '1 hour', '3:00 to 4:00, 4:00 to 5:00, 5:00 to 6:00, 6:00 to 7:00, 7:00 to 8:00', 'Evening', 8000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `expenseID` int(11) NOT NULL AUTO_INCREMENT,
  `expense_title` varchar(200) NOT NULL,
  `expense_description` varchar(200) NOT NULL,
  `expense_amount` varchar(200) NOT NULL,
  `submission_date` varchar(300) NOT NULL,
  `date_time` varchar(200) NOT NULL,
  `campus_id` int(11) NOT NULL,
  PRIMARY KEY (`expenseID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`expenseID`, `expense_title`, `expense_description`, `expense_amount`, `submission_date`, `date_time`, `campus_id`) VALUES
(11, 'test', 'test', '22222', '2017-12-20', '18-12-2017 04:38:53 pm', 2),
(12, 'Furniture', 'Bar Stool ', '3000', '2018-01-11', '11-01-2018 09:49:30 pm', 1),
(13, 'Bills & Payments', 'Internet fee', '800', '2018-01-11', '13-01-2018 07:13:53 pm', 1),
(14, 'Bills & Payments', 'watchman salary', '1200', '2018-01-13', '13-01-2018 07:22:49 pm', 1),
(15, 'Bills & Payments', 'Building Maintenance ', '1300', '2018-01-13', '13-01-2018 07:28:08 pm', 1),
(16, 'Salary - Shahriyar Sajid', 'Salary Expense - December', '0', '', '2018-01-25 02:39:12 pm', 0),
(17, 'Salary - Ovais Shah', 'Salary Expense - December', '10000', '', '2018-01-25 04:04:17 pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `optionID` int(11) NOT NULL AUTO_INCREMENT,
  `optionName` varchar(200) DEFAULT NULL,
  `optionDesc` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`optionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pending_students_fees`
--

CREATE TABLE IF NOT EXISTS `pending_students_fees` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `studentID` int(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` int(100) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `pending_students_fees`
--

INSERT INTO `pending_students_fees` (`id`, `studentID`, `date`, `status`) VALUES
(1, 2, '2017-12-08', 1),
(2, 3, '2017-12-02', 1),
(3, 5, '2017-12-08', 1),
(4, 0, '', 1),
(5, 0, '2018-02-01', 1),
(6, 0, '2018-02-01', 1),
(7, 0, '', 1),
(8, 31, '2018-02-24', 1),
(9, 32, '2018-02-01', 0),
(10, 33, '', 1),
(11, 34, '2018-02-02', 1),
(12, 35, '2018-02-07', 1),
(13, 2, '2018-03-08', 0),
(14, 3, '2018-03-02', 0),
(15, 5, '2018-03-08', 0),
(16, 8, '2018-03-01', 1),
(17, 9, '2018-03-01', 0),
(18, 10, '2018-03-01', 0),
(19, 11, '2018-03-01', 0),
(20, 12, '2018-03-01', 0),
(21, 15, '2018-03-01', 0),
(22, 17, '2018-03-01', 0),
(23, 18, '2018-03-01', 0),
(24, 21, '2018-03-06', 0),
(25, 22, '2018-03-01', 0),
(26, 23, '2018-03-01', 0),
(27, 24, '2018-03-01', 0),
(28, 25, '2018-03-01', 0),
(29, 26, '2018-03-01', 0),
(30, 27, '2018-03-01', 0),
(31, 28, '2018-03-01', 0),
(32, 29, '2018-03-01', 0),
(33, 32, '2018-03-01', 0),
(34, 33, '2018-03-00', 0),
(35, 34, '2018-03-02', 0),
(36, 35, '2018-03-07', 0),
(37, 36, '2018-03-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryID` varchar(200) DEFAULT NULL,
  `productName` varchar(200) DEFAULT NULL,
  `subCategoryID` varchar(200) DEFAULT NULL,
  `productDesc` varchar(200) DEFAULT NULL,
  `options` varchar(200) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `qty` varchar(200) DEFAULT NULL,
  `price` varchar(300) DEFAULT NULL,
  `productImage` varchar(200) DEFAULT NULL,
  `sold_to` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productName`, `subCategoryID`, `productDesc`, `options`, `model`, `qty`, `price`, `productImage`, `sold_to`) VALUES
(6, '7', 'asdasdasd', NULL, '<p>dasdasd</p>', 'dasd', 'asdasd', '5', 'asdasdas', 'a5.jpg', NULL),
(12, '9', 'MMa', '6', 'sdasdasd', NULL, NULL, '1', 'dasdas', 'Capture1.PNG', 'abid'),
(13, '10', 'MMA Belt', '7', 'dasdasd', NULL, NULL, '10', '1000', 'Lighthouse.jpg', 'Talha'),
(14, '10', 'Boxing Gloves', '7', 'Good Gloves', NULL, NULL, '1', '1000', 'unnamed.jpg', NULL),
(15, '10', 'Gloves', '7', 'asasasassasa', NULL, NULL, '0', '1000', 'strokeup.png', 'abid'),
(16, '10', 'Butterfly Machine', '7', 'This is a good machine', NULL, NULL, '12', '1200', 'Website-Design-Company-India.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sell_product`
--

CREATE TABLE IF NOT EXISTS `sell_product` (
  `sell_ID` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sell_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `sell_product`
--

INSERT INTO `sell_product` (`sell_ID`, `studentID`, `productName`, `quantity`, `price`, `month`, `year`, `day`) VALUES
(26, 6, 'MMA', '1', '1200', 'October', '2017', '10'),
(27, 8, 'MMA Belt', '1', '1200', 'October', '2017', '10'),
(35, 1, '15', '10', '10000', NULL, NULL, NULL),
(36, 2, '15', '2', '2000', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studentID` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(200) NOT NULL,
  `student_contact` varchar(200) NOT NULL,
  `student_email` varchar(200) NOT NULL,
  `student_address` varchar(200) NOT NULL,
  `student_cnic` varchar(300) NOT NULL,
  `education` varchar(250) NOT NULL,
  `productID` int(11) NOT NULL,
  `date_time` varchar(300) NOT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `past_experience` varchar(255) DEFAULT NULL,
  `remarks` text NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `home_phone` varchar(255) DEFAULT NULL,
  `heart_trouble` varchar(255) DEFAULT NULL,
  `chest_pain` varchar(255) DEFAULT NULL,
  `dizziness` varchar(255) DEFAULT NULL,
  `blood_pressure` varchar(255) DEFAULT NULL,
  `diabetes` varchar(255) DEFAULT NULL,
  `emergency_name` varchar(255) DEFAULT NULL,
  `emergency_home` varchar(255) DEFAULT NULL,
  `emergency_relation` varchar(255) DEFAULT NULL,
  `emergency_mobile` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_mobile` varchar(255) DEFAULT NULL,
  `father_cnic` varchar(255) DEFAULT NULL,
  `admission_fee` varchar(255) DEFAULT NULL,
  `membership_fee` varchar(255) DEFAULT NULL,
  `monthly_fee` varchar(255) DEFAULT NULL,
  `other_fee` varchar(255) DEFAULT NULL,
  `discountfee` varchar(100) NOT NULL,
  `total` varchar(255) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  `user_image` varchar(200) NOT NULL,
  `qr` int(11) NOT NULL,
  PRIMARY KEY (`studentID`),
  UNIQUE KEY `qr` (`qr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `student_name`, `student_contact`, `student_email`, `student_address`, `student_cnic`, `education`, `productID`, `date_time`, `dob`, `past_experience`, `remarks`, `gender`, `home_phone`, `heart_trouble`, `chest_pain`, `dizziness`, `blood_pressure`, `diabetes`, `emergency_name`, `emergency_home`, `emergency_relation`, `emergency_mobile`, `father_name`, `father_mobile`, `father_cnic`, `admission_fee`, `membership_fee`, `monthly_fee`, `other_fee`, `discountfee`, `total`, `status`, `joindate`, `user_image`, `qr`) VALUES
(1, 'demostudent1', '03212399998', 'demo@gmail.com', 'kkkkkk', '1232-13213213-2', '', 0, '14-12-2017 04:28:52 pm', '12/12/2000', 'no', '', 'male', '3123213213213213', 'female', 'no', 'no', 'no', 'no', 'yewewqe', '31312123', 'fssdd', '312312313', 'wewqewqewq', '2321321312', '1131-23213213-2', '500', '500', '3000', '50', '0', '4050', 'in_active', '2017-06-28', 'uploads/userimage/sp-bryan2.jpg', 0),
(2, 'Muneebshaha', '032988011', 'Muneebshaha@gmail.com', 'Muneebshaha', '0900-09554553-4', '', 0, '14-12-2017 04:33:43 pm', '12/03/1994', 'yes', 'Yes Boss', 'male', '1323213213', 'female', 'no', 'no', 'no', 'no', 'kdksadaskd ', '1312321321', 'sdasdsad ', '3213213213', 'adadasda', '12321321', '1211-11111111-1', '500', '100', '7000', '0', '0', '7600', 'in_active', '2017-11-08', 'uploads/userimage/demodataimg.jpg', 1),
(3, 'Mohsin', '090099000', 'asimsyed033@gmail.com', 'eeewqsadsaweqqwe', '1232-13213213-2', '', 0, '14-12-2017 04:38:58 pm', '12/04/1993', 'no', 'no', 'male', '312123213213', 'female', 'no', 'no', 'no', 'no', 'opop ', '12312321', 'sdsad ', '131231231', 'eqwewqeq', '1312123123', '1232-13213212-3', '100', '100', '4000', '50', '50', '4200', 'in_active', '2017-10-02', 'uploads/userimage/5361e664-85bf-4110-82f2-706aec43f0575.png', 2),
(4, 'Hammad', '332323', 'Hammad@gmail.com', 'dhdhsdhsjddjsj', '1313-22122133-2', '', 0, '15-12-2017 10:02:33 am', '12/13/2017', 'no', 'no', 'male', '231232132131', 'female', 'no', 'no', 'no', 'no', 'dmama  ', '312321321', 'dasdasda  ', '31232131', 'asdasda', '313213213', '1111-22313213-2', '0', '0', '2000', '0', '0', '2000', 'in_active', '2017-12-28', 'uploads/userimage/1883332.png', 3),
(5, 'usama', '1234444', 'tesx@test.com', 'test', '2454-35436855-8', '', 0, '18-12-2017 01:52:46 pm', '12/11/2017', 'no', '', 'male', '34423442', 'male', 'yes', 'yes', 'yes', 'yes', 'test', 'test', 'text', 'tewsr', 'refffffd', '34355255', '2434-45546789-6', '500', '100', '3000', '100', '700', '3000', 'in_active', '2017-12-08', 'uploads/userimage/10985522_912484858782426_653752271895395214_n.jpg', 30944),
(6, 'Mustafa Qureshi ', '0345678878', 'asimsyed0322@gmail.com', 'mehmoodabad 3 ,hanfia masjid karachi ', '6556-46456456-4', '', 0, '21-12-2017 11:42:49 am', '12/20/1990', 'no', '', 'male', '1312331312313', 'female', 'no', 'no', 'no', 'no', 'kasdd', '3131231', 'dasdsadasd', '13213213213', 'sadsadsad', '3213213123213', '3132-13213213-1', '4000', '2000', '4000', '1000', '0', '11000', 'in_active', '2017-12-28', 'uploads/userimage/unnamed_(1).png', 1349400239),
(7, 'NgmmaUser', '03212391128', 'ngmmauser@gmail.com', 'karachi magma', '1231-23123213-2', '', 0, '26-12-2017 01:05:36 pm', '10/31/2010', 'no', 'no', 'male', '03212391128', 'female', 'no', 'no', 'no', 'no', 'Umma   ', '3123213123', 'dsadsadsa   ', '213123123213', 'asdsadsad', '2131231231', '3213-21321321-3', '4000', '800', '9000', '0', '0', '13800', 'in_active', '2017-12-29', 'uploads/userimage/hqdefault.jpg', 1738359277),
(8, 'Ovais Shah', '03213603630', '3gmma.pk@gmail.com', 'e-15 apsara apartment no.5 f.c. area', '4210-14574836-7', 'MBA', 0, '11-01-2018 09:05:00 pm', '10/10/1988', 'no', 'no', 'male', '03453603630', 'female', 'no', 'no', 'no', 'no', 'hassan shah  ', '03453134523', 'brother  ', '03453134523', 'shah muhammad', '03332165041', '4210-14574836-7', '1000', '0', '3000', '0', '0', '4000', 'active', '2018-01-01', 'uploads/userimage/DSC_0007.JPG', 1733932876),
(9, 'Sikander Siddiqui', '03212450892', 'sikandersiddiqui93@hotmail.com', 'R180/1, Shariffabad, FB area , Karachi', '4210-16673674-1', '', 0, '12-01-2018 10:13:54 pm', '10/28/1993', 'no', 'no', 'male', '03212450892', 'female', 'no', 'no', 'no', 'no', 'Akber Siddiqui  ', '03002510899', 'Father  ', '03002510899', 'Akber Siddiqui', '03002510899', '4210-11380559-7', '', '', '3000', '', '', '3000', 'active', '2018-01-01', 'uploads/userimage/humam1.jpg', 228123776),
(10, 'Muhammad Afzal', '03213982269', 'a03213982269@gmail.com', 'Haroon Plaza, Flat A40, UP mor, North Karachi', '4210-18870157-3', '', 0, '12-01-2018 10:19:45 pm', '08/19/1992', 'no', 'no', 'male', '03213982269', 'female', 'no', 'no', 'no', 'no', 'Faisal   ', '03453110793', 'Friend  ', '03453110793', 'Nabeela Naz', '03112538029', '4210-10000000-0', '', '', '6000', '', '5000', '1000', 'active', '2018-01-01', 'uploads/userimage/afzal.jpg', 1211077319),
(11, 'Uzair Ahmed Awan', '03332183587', 'uzairahmed_14@hotmail.com', 'B-6, Sheraton Apartment , block 13 b, Gulshan e iqbal karachi', '4220-10317832-1', '', 0, '12-01-2018 10:23:59 pm', '02/14/1993', 'no', '', 'male', '03332183587', 'female', 'no', 'no', 'no', 'no', 'Ahmed Yar', '03002955668', 'brother', '03002955668', 'Zulfiqar Ahmed', '03008204191', '4220-14498025-5', '0', '0', '3000', '0', '0', '3000', 'active', '2018-01-01', 'uploads/userimage/blank_profile2.jpg', 926358643),
(12, 'Abdul Qadeer', '03328353168', 'a7770abdul@gmail.com', 'E-175, Awami colony korangi industrial area, Karachi', '4220-11895300-1', '', 0, '12-01-2018 10:29:32 pm', '12/01/1993', 'no', 'no', 'male', '03328353168', 'female', 'no', 'no', 'no', 'no', 'Toqeer Irfan ', '03323281737', 'Brother ', '03323281737', 'Irfan Ali ', '03343287403', '4220-10000000-0', '', '', '3000', '', '1000', '2000', 'active', '2018-01-01', 'uploads/userimage/qadeer.jpg', 636167061),
(13, 'Shayan Imran', '03323071981', 'blank@gmail.com', 'H # A 34 city Homes Gulshan e Iqbal Block 13 D2 Khi', '4210-10000000-0', '', 0, '13-01-2018 07:02:54 pm', '02/13/2007', 'no', '', 'male', '03323071981', 'female', 'no', 'no', 'no', 'no', 'Shazmeen', '02134801922', 'Mother', '03323071981', 'Imran', '02134801922', '4210-10000000-0', '1000', '', '3000', '', '2000', '2000', 'active', '2018-01-13', 'uploads/userimage/blank_profile4.jpg', 393434103),
(14, 'Sameen Imran', '03323071981', 'blank@gmail.com', 'House no. A-34 City Homes, Gulshan e Iqbal 13 D 2', '4210-10000000-0', '', 0, '13-01-2018 07:07:07 pm', '07/07/2010', 'no', '', 'female', '03323071981', 'female', 'no', 'no', 'no', 'no', 'Shazmeen', '02134801922', 'Mother', '03323071981', 'Imran', '03323071981', '4210-10000000-0', '1000', '', '3000', '', '2000', '2000', 'active', '2018-01-13', 'uploads/userimage/blank_profile5.jpg', 693249787),
(15, 'Raja Shoaib Mehmood', '03333443056', 'raja.shb24@gmail.com', 'House no. 3/3 , survey 79, Golden town, Karachi', '3660-32078988-3', '', 0, '13-01-2018 07:42:25 pm', '04/11/1994', 'no', 'no', 'male', '03333443056', 'female', 'no', 'no', 'no', 'no', 'Naseem Akhter ', '03012598975', 'Mother ', '03012598975', 'Naseem Akhter', '03012598975', '3666-03000000-0', '', '', '3000', '', '1000', '2000', 'active', '2018-01-01', 'uploads/userimage/rajashoaib.jpg', 778859725),
(16, 'Nasir Mahmood', '03460840057', 'risanmehmoodchaboi@gmail.com', 'H101 , Raheem View suerhighway karachi', '7150-17843962-5', '', 0, '13-01-2018 08:33:32 pm', '09/02/1995', 'no', 'no', 'male', '03460840057', 'female', 'no', 'no', 'no', 'no', 'Tariq Mehmood ', '03465485080', 'Brother ', '03465485080', 'Muhammad Ayub Khan', '03445171902', '7150-19067978-3', '', '', '3000', '', '1000', '2000', 'active', '2016-11-22', 'uploads/userimage/nasir.jpg', 1088899269),
(17, 'Syed Humam Ahmed Warsi', '03018201591', 'humamsayed@icloud.com', '81, paradise homes, Gulzar.e.hijri. karachi', '4210-10000000-0', '', 0, '13-01-2018 08:51:02 pm', '09/10/1994', 'no', 'no', 'male', '03018201591', 'female', 'no', 'no', 'no', 'no', 'rizwan warsi ', '03008201591', 'father ', '03008201591', 'syed rizwan warsi', '03008201591', '4210-10000000-0', '0', '', '3000', '', '1000', '2000', 'active', '2018-01-01', 'uploads/userimage/humam.jpg', 1946167125),
(18, 'muhammad suleman khan', '03363049547', 'm.sulemankhan124@gmail.com', 'flat no E-11 shahzada Plaza Gul meher street garden East Karachi', '4130-41337734-1', '', 0, '13-01-2018 08:58:01 pm', '01/15/1993', 'no', 'no', 'male', '03363049547', 'female', 'no', 'no', 'no', 'no', 'muhammad zakir khan ', '03339327121', 'Father ', '03339327121', 'muhammad zakir kahn', '03339327121', '4130-49097224-5', '', '', '3000', '', '', '3000', 'active', '2017-08-01', 'uploads/userimage/sulaiman.jpg', 1132525178),
(19, 'Fahim Ud Din', '03438584841', 'fhyembercha@gmail.com', 'Flat#201, Block 3, Jiwani heights Scheme 33 Super Highway Karachi', '7150-40392263-3', '', 0, '13-01-2018 09:03:45 pm', '03/09/1992', 'no', 'no', 'male', '03438584841', 'female', 'no', 'no', 'no', 'no', 'Waseem ud Din ', '03450535035', 'Brother ', '03450535035', 'Muhammad Din', '03555107438', '7150-40390522-7', '', '', '3000', '', '1000', '2000', 'active', '2017-12-15', 'uploads/userimage/fahim2.jpg', 1898112543),
(20, 'fahim yar baig', '03320824984', 'fahimyarbaig@gmail.com', 'h105,Ali complex, Main Super Highway, Karachi', '7150-22127040-9', '', 0, '13-01-2018 09:08:14 pm', '03/22/1995', 'no', 'no', 'male', '03320824984', 'female', 'no', 'no', 'no', 'no', 'Shamsuddin ', '03114404425', 'Mamo ', '03114404425', 'waseem yar baig', '03333375381', '7150-20000000-0', '', '', '3000', '', '1000', '2000', 'active', '2017-12-15', 'uploads/userimage/fahim.jpg', 1606104761),
(21, 'Ahmed Gichki', '03472268817', 'mirahmedgichki7@gmail.com', 'A-23block 13D-2 Gushan-e-iqbal', '4210-10000000-0', '', 0, '13-01-2018 09:14:26 pm', '05/05/1997', 'no', 'no', 'male', '03472268817', 'female', 'no', 'no', 'no', 'no', 'Naila Sabzal ', '03114404425', 'Mother ', '03114404425', 'SabzalGichki', '03218755833', '4210-10000000-0', '', '', '3000', '', '', '3000', 'active', '2018-01-06', 'uploads/userimage/ahmed.jpg', 1482558321),
(22, 'Muhammad Emad', '03333183360', 'shaikh_emad07@hotmail.com', 'R99, block 13D1, Gulshan e Iqbal, Karachi', '4220-19573689-1', '', 0, '15-01-2018 08:11:30 pm', '11/7/1990', 'no', 'no', 'male', '03333183360', 'female', 'no', 'no', 'no', 'no', 'Shaikh Iftkhar ', '03134994124', 'Father ', '03134994124', 'Shaikh Iftkhar', '03134994124', '4220-10000000-0', '', '', '3000', '', '', '3000', 'active', '2018-01-01', 'uploads/userimage/emad.jpg', 276687955),
(23, 'Muhammad maaz', '03320035363', 'www.maaz92@gmail.com', 'c-27 fraz view block 13 gulistan - -joharkarachi', '4220-19495804-9', '', 0, '15-01-2018 08:49:05 pm', '8/17/1994', 'no', 'no', 'male', '03320035363', 'female', 'no', 'no', 'no', 'no', 'muhammad mudabbir ', '03320036364', 'brother ', '03320036364', 'Ghulam Waris', '03332217989', '4210-19495810-7', '', '', '3000', '', '', '3000', 'active', '2018-01-01', 'uploads/userimage/maaz.jpg', 1326641996),
(24, 'Syed Atif Ali', '03343729457', 'atifa741@gmail.com', '1-A,3/7, nazimabad no.1 , Karachi', '4210-13420836-3', '', 0, '16-01-2018 09:35:44 am', '03/05/1989', 'no', 'no', 'male', '03343729457', 'female', 'no', 'no', 'no', 'no', 'Rakhshanda Asif ', '03352356648', 'Mother ', '03352356648', 'Syed Asif Ali', '03362398568', '4210-10000000-0', '', '', '3000', '2000', '', '5000', 'active', '2018-01-01', 'uploads/userimage/atif.jpg', 382767716),
(25, 'Arsalan Ahmed', '03400220811', 'arsalan45@hotmail.com', 'B-3/2, Maymar Terrace, Gulshan e Iqbal, Block 2, karachi', '4220-17876512-3', '', 0, '16-01-2018 10:10:02 am', '12/22/1990', 'no', 'no', 'male', '03400220811', 'female', 'no', 'no', 'no', 'no', 'Shah Fahad  ', '03212555504', 'Friend ', '03212555504', 'S. M. Motla', '03082322981', '4220-10000000-0', '', '', '3000', '', '1000', '2000', 'active', '2018-01-01', 'uploads/userimage/arsalan.jpg', 872584477),
(26, 'Syed Muhammad Taha', '03157312129', 'tahasyedmuhammad@yahoo.com', 'C-7, PCSIR housing society , Gulzar e hijri,scheme 33, karachi ', '4210-10000000-0', '', 0, '16-01-2018 09:33:37 pm', '12/05/2001', 'no', 'no', 'male', '03157312129', 'female', 'no', 'no', 'no', 'no', 'Aftab Ahmed ', '02134156482', 'Father ', '03213741974', 'Aftab Ahmed', '03213741974', '4210-10000000-0', '', '', '3000', '', '2000', '1000', 'active', '2018-01-01', 'uploads/userimage/smtaha.jpg', 216697676),
(27, 'Ali Raza', '03472404766', 'ali.raza199307@gmail.com', 'Flate D27, Nazish Heaven apartment,Gulshan e iqbal block 11, Karachi', '4230-10173673-5', '', 0, '16-01-2018 09:44:37 pm', '07/30/1993', 'no', 'no', 'male', '03472404766', 'female', 'no', 'no', 'no', 'no', 'Muzammil Hussain ', '03433488939', 'Brother ', '03433488939', 'Imtiaz Ali', '03032382623', '4230-10000000-0', '', '', '3000', '', '', '3000', 'active', '2018-01-01', 'uploads/userimage/ali_raza.jpg', 2038727157),
(28, 'Umais Saeed', '03471940428', 'umaissaeed95@gmail.com', '301/2, Solaira apartment Block 13 Gulistan e Jauhar, Karachi', '4210-11384692-7', '', 0, '16-01-2018 10:02:46 pm', '09/30/1995', 'no', 'no', 'male', '03471940428', 'female', 'no', 'no', 'no', 'no', 'Saeed Zafar ', '03323203952', 'Father ', '03323203952', 'Saeed Zafar', '03323203952', '1730-15579864-1', '', '', '3000', '', '', '3000', 'active', '2018-01-01', 'uploads/userimage/umais_saeed.jpg', 701335426),
(29, 'Abdullah Qayyum', '03443615089', 'abdullahvayani99@gmail.com', 'SB 52 Block 13 C mariyam heights, Gulshan e Iqbal', '4220-17406744-3', '', 0, '18-01-2018 09:20:32 pm', '01/08/1999', 'no', '', 'male', '03443615089', 'female', 'no', 'no', 'no', 'no', 'Abdul manan', '03432921773', 'Brother', '03432921773', 'Abdul qayyom', '03228993536', '4220-10000000-0', '', '', '3000', '', '1000', '2000', 'active', '2018-01-01', 'uploads/userimage/blank_profile20.jpg', 875485844),
(30, 'baqar', '13131', 'baqar@gmail.com', 'wsada acas', '4250-14471934-8', 'grad', 0, '22-01-2018 01:24:51 pm', '01/17/2018', 'no', 'no', 'male', '03030330333', 'male', 'no', 'no', 'no', 'no', 'wsad ', 'sadasd', 'asdas ', 'asdsad', 'asdas', 'asdsa', '4250-14471934-8', '1312', '123', '11000', '12312', '', '24747', 'active', '2018-02-14', 'uploads/userimage/512.png', 11223),
(31, 'tusdaytest', '1431243143', '123123@gmail.com', '12312', '12312-2222222-2', '12312', 0, '01-02-2018 05:26:35 pm', '01/03/2018', 'no', '', 'male', '1231212', 'female', 'no', 'no', 'no', 'no', '21321321', '21321321', '12321321', '213213', '1232121', '1231221', '12321-3122132-1', '12312321', '12312', '3000', '12312', '123', '12339822', 'active', '2018-02-24', 'uploads/userimage/unnamed1.jpg', 202105545),
(32, 'baqartuesday', '12312', '3123123@ef.dsfsfd', 'dsfdsf', '3122-12321312-3', '2112312312', 0, '01-02-2018 05:57:07 pm', '01/18/2018', 'no', 'no', 'male', '12312312', 'female', 'no', 'no', 'no', 'no', '123123123 ', '23123123', '1231212 ', '12312312', '12312312', '12312312', '1231-23123123-1', '123123123', '12312', '3000', '123123', '12321', '123249237', 'in_active', '2018-02-01', 'uploads/userimage/unnamed2.jpg', 2114469778),
(33, 'oaky testing', 'dsaasdas', '123123@gmail.com', 'wqeqedas', '12312-3123123-1', '1312312', 0, '02-02-2018 12:25:51 pm', '01/08/2018', 'no', '', 'male', '1231231', 'female', 'no', 'no', 'no', 'no', 'eqweqw', 'sdsdf', '12312', 'dsfsdf', 'ssssss', '1231221', '12312-3123123-1', '21312', '12312', '3000', '', '123123', '-86499', 'active', '0000-00-00', 'uploads/userimage/unnamed3.jpg', 2138984312),
(34, 'Nasir Raza', '03068838597', 'aghanasirchangezi@gmail.com', 'flat C-301, Erum heights bloc 13 gulistan e johar karachi', '42101-1470598-1', 'BsCS', 0, '02-02-2018 10:18:55 pm', '05/15/1992', 'no', '', 'male', '03068838597', 'female', 'no', 'no', 'no', 'no', 'Zahid Hussain', '03228215925', 'Father', '03228215925', 'Azhid Hussain', '03228215925', '42101-0000000-0', '1500', '', '3000', '', '', '4500', 'active', '2018-02-02', 'uploads/userimage/blank_profile21.jpg', 1082874502),
(35, 'm0nday', '123123', '123123@gmail.com', '12312', '12331-2312312-1', '12312321312', 0, '06-02-2018 02:51:26 pm', '02/05/2018', 'no', '', 'male', '12312312', 'female', 'no', 'no', 'no', 'no', '123123', '131231', '123123', '12312312', '131312', '12312312', '12312-3123131-2', '1000', '1000', '3000', '0', '2000', '3000', 'active', '2018-02-07', 'uploads/userimage/gallery2.png', 208410892),
(36, 'usama farooq', '127682196821', 'test@gmail.com', 'xyz', '16516-5777777-7', 'matric', 0, '08-03-2018 05:54:42 pm', '02/01/2017', 'no', '', 'male', '27186269', 'female', 'no', 'no', 'no', 'no', 'dddssd', 'dsddssd', 'dssdd', 'sddsdsds', 'dsdsdsds', 'sddsds', '32232-3232323-2', '1000', '0', '3000', '0', '0', '4000', 'active', '2018-03-01', 'uploads/userimage/10985522_912484858782426_653752271895395214_n6.jpg', 486930114);

-- --------------------------------------------------------

--
-- Table structure for table `students_courses`
--

CREATE TABLE IF NOT EXISTS `students_courses` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `studentID` int(30) NOT NULL,
  `courseID` int(30) NOT NULL,
  `course_shift` varchar(200) DEFAULT NULL,
  `Timing` varchar(100) NOT NULL,
  `TrainerID` int(30) NOT NULL,
  `Fee` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `students_courses`
--

INSERT INTO `students_courses` (`id`, `studentID`, `courseID`, `course_shift`, `Timing`, `TrainerID`, `Fee`) VALUES
(1, 1, 4, NULL, '7:00 to 1:00', 3, 2000),
(2, 1, 2, NULL, '11:00 to 2:00', 3, 1000),
(3, 2, 7, NULL, '11:00 to 1:00', 5, 4000),
(4, 2, 6, NULL, ' 12:00 to 1:00', 5, 3000),
(5, 3, 3, NULL, '10:00 to 1:00', 5, 3000),
(6, 4, 2, NULL, '03:00 to 6:00', 5, 1000),
(7, 4, 2, NULL, '11:00 to 2:00', 3, 1000),
(8, 3, 2, NULL, '11:00 to 2:00', 3, 1000),
(9, 5, 3, NULL, '10:00 to 1:00', 3, 3000),
(10, 0, 3, NULL, '10:00 to 1:00', 3, 3000),
(11, 0, 6, NULL, '12:00 to 1:00', 2, 3000),
(12, 0, 3, NULL, '10:00 to 1:00', 5, 3000),
(13, 6, 2, NULL, '11:00 to 2:00', 3, 1000),
(14, 6, 3, NULL, '10:00 to 1:00', 3, 3000),
(15, 7, 7, NULL, ' 11:00 to 1:00', 6, 4000),
(16, 7, 5, NULL, ' 11:00 to 1:00', 6, 1000),
(17, 7, 2, NULL, '  11:00 to 2:00', 6, 1000),
(18, 7, 3, NULL, '  10:00 to 1:00', 6, 3000),
(19, 8, 11, 'E', '6:00 to 7:00', 10, 3000),
(20, 9, 9, NULL, '8:00 to 10:00', 9, 3000),
(21, 10, 9, NULL, ' 8:00 to 10:00', 9, 3000),
(22, 10, 9, NULL, ' 8:00 to 10:00', 9, 3000),
(23, 11, 9, NULL, '8:00 to 10:00', 2, 3000),
(24, 12, 14, NULL, ' 10:00 to 11:00', 8, 3000),
(25, 13, 21, NULL, ' 4:00 to 5:00', 3, 3000),
(26, 14, 21, NULL, ' 4:00 to 5:00', 3, 3000),
(27, 15, 9, NULL, '8:00 to 10:00', 8, 3000),
(28, 16, 9, NULL, '8:00 to 10:00', 8, 3000),
(29, 17, 9, NULL, '8:00 to 10:00', 8, 3000),
(30, 18, 9, NULL, '8:00 to 10:00', 8, 3000),
(31, 19, 9, NULL, '8:00 to 10:00', 8, 3000),
(32, 20, 9, NULL, '8:00 to 10:00', 8, 3000),
(33, 21, 9, NULL, '8:00 to 10:00', 8, 3000),
(34, 22, 9, NULL, '8:00 to 10:00', 8, 3000),
(35, 23, 9, NULL, '8:00 to 10:00', 8, 3000),
(36, 24, 14, NULL, ' 9:00 to 10:00', 8, 3000),
(37, 25, 14, NULL, ' 9:00 to 10:00', 8, 3000),
(38, 26, 12, NULL, ' 5:00 to 6:00', 8, 3000),
(39, 27, 9, NULL, '8:00 to 10:00', 8, 3000),
(40, 28, 9, NULL, '8:00 to 10:00', 8, 3000),
(41, 29, 9, NULL, '8:00 to 10:00', 1, 3000),
(42, 30, 11, 'E', '6:00 to 7:00', 10, 3000),
(43, 0, 14, NULL, '8:00 to 9:00', 1, 3000),
(44, 30, 24, 'v', ' 4:00 to 5:00', 5, 8000),
(45, 0, 13, NULL, '7:00 to 8:00', 2, 3000),
(46, 0, 14, NULL, '8:00 to 9:00', 1, 3000),
(47, 0, 14, NULL, ' 9:00 to 10:00', 1, 3000),
(48, 0, 11, NULL, '6:00 to 7:00', 5, 3000),
(49, 32, 12, 'M', ' 4:00 to 5:00', 2, 3000),
(50, 33, 16, 'M', ' 9:00 to 10:00', 2, 3000),
(51, 34, 9, 'E', '8:00 to 10:00', 2, 3000),
(52, 35, 18, 'M', '8:00 to 9:00', 2, 3000),
(53, 36, 16, 'M', ' 9:00 to 10:00', 2, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `student_fee`
--

CREATE TABLE IF NOT EXISTS `student_fee` (
  `feeID` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `student_contact` varchar(255) DEFAULT NULL,
  `student_email` varchar(255) DEFAULT NULL,
  `student_address` varchar(255) DEFAULT NULL,
  `courseID` int(11) NOT NULL,
  `trainerID` int(11) NOT NULL,
  `fee_month` varchar(255) DEFAULT NULL,
  `discountfee` int(11) NOT NULL,
  `admission_fee` int(11) NOT NULL,
  `membership_fee` int(11) NOT NULL,
  `other_fee` int(11) NOT NULL,
  `student_fee` varchar(255) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `submission_date` varchar(255) DEFAULT NULL,
  `extra_charges` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`feeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student_fee`
--

INSERT INTO `student_fee` (`feeID`, `studentID`, `student_name`, `student_contact`, `student_email`, `student_address`, `courseID`, `trainerID`, `fee_month`, `discountfee`, `admission_fee`, `membership_fee`, `other_fee`, `student_fee`, `total`, `submission_date`, `extra_charges`) VALUES
(1, 2, 'Muneebshaha', '032988011', 'Muneebshaha@gmail.com', '70 Bowman St. \r\nSouth Windsor, CT 06074', 0, 0, 'December', 0, 0, 0, 0, '7000', 0, '2017-12-22', '0'),
(2, 34, 'Nasir Raza', '03068838597', 'aghanasirchangezi@gmail.com', 'flat C-301, Erum heights bloc 13 gulistan e johar karachi', 0, 0, 'February', 0, 0, 0, 0, '3000', 0, '2018-02-02', '1500'),
(3, 33, 'oaky testing', 'dsaasdas', '123123@gmail.com', 'wqeqedas', 0, 0, 'December', 2000, 1000, 1000, 0, '3000', 3000, '2018-02-15', '0'),
(4, 35, 'm0nday', '123123', '123123@gmail.com', '12312', 0, 0, 'February', 2000, 1000, 1000, 0, '3000', 3000, '2018-02-07', '0'),
(5, 8, 'Ovais Shah', '03213603630', '3gmma.pk@gmail.com', 'e-15 apsara apartment no.5 f.c. area', 8, 1, 'March', 0, 1000, 0, 0, '3000', 4000, '2018-03-08', '0'),
(6, 36, 'usama farooq', '127682196821', 'test@gmail.com', 'xyz', 25, 1, 'March', 0, 1000, 0, 0, '3000', 4000, '2018-03-08', '0');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `subCategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryID` int(11) NOT NULL,
  `subCategoryName` varchar(200) DEFAULT NULL,
  `subCategoryDesc` varchar(200) DEFAULT NULL,
  `subCategoryImage` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`subCategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subCategoryID`, `categoryID`, `subCategoryName`, `subCategoryDesc`, `subCategoryImage`) VALUES
(6, 9, 'Nokia 6', 'dasdasda', 'Capture.PNG'),
(7, 10, 'Gloves', 'asdasdasd', 'Hydrangeas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
  `trainerID` int(11) NOT NULL AUTO_INCREMENT,
  `trainer_name` varchar(200) NOT NULL,
  `trainer_email` varchar(200) NOT NULL,
  `trainer_contact` varchar(200) NOT NULL,
  `trainer_salary` varchar(30) NOT NULL,
  `trainer_address` varchar(200) NOT NULL,
  `training_type` varchar(255) DEFAULT NULL,
  `trainer_training_type` varchar(100) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `courseID` varchar(200) NOT NULL,
  `trainer_Joining_date` date NOT NULL,
  PRIMARY KEY (`trainerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainerID`, `trainer_name`, `trainer_email`, `trainer_contact`, `trainer_salary`, `trainer_address`, `training_type`, `trainer_training_type`, `status`, `courseID`, `trainer_Joining_date`) VALUES
(1, 'Nadeem Akhter', 'akpc92@yahoo.com', '03122470792', '10000', 'Flat 1110 Grace Tower Nazimabad No. 1 , Karachi\r\n', NULL, 'Head Coach', 'active', '9,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25', '2009-01-01'),
(2, 'Ovais Shah', '3gmma.pk@gmail.com', '03213603630', '10000', 'E-15 Apsara apartment no.5 f.c. area, Karachi.', NULL, 'Head Coach', 'active', '9,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27', '2009-01-01'),
(3, 'Shahriyar Sajid', 'ampsher@gmail.com', '03332124414', '10000', 'A312 Billys tower Gulshan Block 20 Rashid minhas Road, Karachi ', NULL, 'Trainer', 'active', '9,12,14,15,16,17,18,19,20,21,22,23', '2016-01-01'),
(5, 'Osama Khan ', 'osama@gmail.com', '03333228326', '10000', 'House no. P60, street 3, Punjab town, wireless gate, Malir halt , Karachi.', NULL, 'Trainer', 'active', '9,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27', '2012-01-01'),
(6, 'usama test', 'test@gmail.com', '1223325545', '327427', 'kjteiqwhdj', NULL, 'Coach', 'in_active', '8', '2017-12-31'),
(7, 'Abdul Rahim ', 'abdul.rahim@theolympicssports.com', '03452004054', '10000', 'F-7/4, Alahmed center magzine lane saddar Karachi', NULL, 'Coach', 'active', '11,13', '2018-01-01'),
(8, 'Nadeem Muhammad Khan', 'nadeem.khan@telenor.com.pk', '03452003267', '10000', '13D Gulshan e Iqbal,Karachi', NULL, 'Coach', 'active', '11,13', '2018-01-01'),
(9, 'Qazi Muhammad Rayyan', 'ryyan11@live.com', '03352610088', '10000', 'Guistan e johar block 19 crystal homes c1 ', NULL, 'Assistant Trainer', 'in_active', ',9,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27', '2018-01-01'),
(10, 'sdfsfsd', 'we@dsf.rsdfd', '123411', '12312', '131231asd ', NULL, 'Coach', 'active', '9,12', '2018-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_salary`
--

CREATE TABLE IF NOT EXISTS `trainer_salary` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `trainerID` int(50) NOT NULL,
  `submission_date` date NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `trainer_salary`
--

INSERT INTO `trainer_salary` (`id`, `trainerID`, `submission_date`, `status`) VALUES
(1, 1, '2017-12-01', '0'),
(2, 2, '2017-12-02', '1'),
(3, 3, '2017-12-01', '1');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_salary_submission`
--

CREATE TABLE IF NOT EXISTS `trainer_salary_submission` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `trainerID` int(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `salary_submission_date` date NOT NULL,
  `salary` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `trainer_salary_submission`
--

INSERT INTO `trainer_salary_submission` (`id`, `trainerID`, `month`, `salary_submission_date`, `salary`, `status`) VALUES
(1, 3, 'December', '2018-01-25', 0, '1'),
(2, 2, 'December', '2018-01-25', 10000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `userattendence`
--

CREATE TABLE IF NOT EXISTS `userattendence` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `studentID` int(50) NOT NULL,
  `checkin_date` varchar(100) NOT NULL,
  `checkin_time` varchar(100) NOT NULL,
  `checkout_date` varchar(100) NOT NULL,
  `checkout_time` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `userattendence`
--

INSERT INTO `userattendence` (`id`, `studentID`, `checkin_date`, `checkin_time`, `checkout_date`, `checkout_time`, `status`) VALUES
(1, 5, '2017-12-20', '05:00:00', '2017-12-20', '07:50:30', 1),
(2, 6, '2017-12-20', '05:00:00', '2017-12-20', '08:50:30', 1),
(3, 6, '2017/12/21', '03:11:19', '2017/12/21', '03:11:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `is_active` varchar(200) NOT NULL,
  `created_at` varchar(222) NOT NULL,
  `updated_at` varchar(222) NOT NULL,
  `campus_id` int(11) NOT NULL,
  `main` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`adminID`, `user_name`, `password`, `email`, `role`, `is_active`, `created_at`, `updated_at`, `campus_id`, `main`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', '1', '12/14/2017', 'asdasdasdasdasd', 1, 0),
(2, 'admin1', 'admin1', 'admin1@gmail.com', 'admin', '1', 'addasda', 'asdasdasdasdasd', 2, 0),
(3, 'main', 'main', 'main@gmail.com', 'main', '', '', '', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
