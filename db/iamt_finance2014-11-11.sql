-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2014 at 04:59 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iamt_finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asset_name` varchar(60) NOT NULL,
  `description` varchar(80) DEFAULT NULL,
  `amount` double(15,2) DEFAULT '0.00',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  `created_date` date DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `asset_name`, `description`, `amount`, `status`, `created_date`) VALUES
(1, 'asset1', 'description1', 100000.00, 'A', '2014-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE IF NOT EXISTS `batches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_name` varchar(60) NOT NULL,
  `start_date` date NOT NULL DEFAULT '0000-00-00',
  `end_date` date NOT NULL DEFAULT '0000-00-00',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_batches_1_idx` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `batch_name`, `start_date`, `end_date`, `status`, `course_id`) VALUES
(1, 'batch1', '2014-06-01', '2014-12-31', 'A', 1),
(2, 'batch2', '0000-00-00', '0000-00-00', 'A', 1),
(3, 'batch', '2014-06-01', '2014-12-31', 'I', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(60) NOT NULL,
  `section_name` varchar(60) DEFAULT NULL,
  `course_code` varchar(45) DEFAULT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `section_name`, `course_code`, `status`) VALUES
(1, 'course1', 'section1', 'c1', 'A'),
(2, 'course2', 'section2', 'c2', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE IF NOT EXISTS `donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_name` varchar(60) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `donation_date` date NOT NULL DEFAULT '0000-00-00',
  `amount` double(15,2) NOT NULL DEFAULT '0.00',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `donor_name`, `description`, `donation_date`, `amount`, `status`) VALUES
(1, 'donation1', 'ddesc1', '2014-07-04', 1000.00, 'A'),
(2, 'donation2', 'desc2 edited', '2014-07-04', 2000.00, 'I');

-- --------------------------------------------------------

--
-- Table structure for table `elective_group`
--

CREATE TABLE IF NOT EXISTS `elective_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `elective_group_name` varchar(45) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`),
  KEY `elective_batch_id_idx` (`batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `elective_subjects`
--

CREATE TABLE IF NOT EXISTS `elective_subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(45) NOT NULL,
  `subject_code` varchar(45) NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `elective_group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `employee_number` varchar(45) NOT NULL,
  `joining_date` date NOT NULL DEFAULT '0000-00-00',
  `date_of_birth` date DEFAULT '0000-00-00',
  `gender` enum('M','F') NOT NULL DEFAULT 'M',
  `department_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `job_title` varchar(45) DEFAULT NULL,
  `qualification` varchar(80) DEFAULT NULL,
  `experience` text,
  `email` varchar(60) DEFAULT NULL,
  `address` text NOT NULL,
  `pin_code` int(11) DEFAULT NULL,
  `mobile` varchar(14) NOT NULL,
  `home_number` varchar(14) DEFAULT NULL,
  `pan_number` varchar(15) DEFAULT NULL,
  `salary_account_no` varchar(15) DEFAULT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`),
  KEY `fk_employees_1_idx` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `employee_number`, `joining_date`, `date_of_birth`, `gender`, `department_id`, `category_id`, `job_title`, `qualification`, `experience`, `email`, `address`, `pin_code`, `mobile`, `home_number`, `pan_number`, `salary_account_no`, `status`) VALUES
(1, 'employee1', 'emp001', '2014-07-06', '1998-07-06', 'M', 1, 1, 'Administrator', 'qual', 'exp', 'email', 'addr', 321456, '9876543120', '1234657890', '', '', 'A'),
(2, 'Employee2', 'emp002', '2014-07-06', '1998-07-06', 'F', 1, 1, 'Administrator', 'qual', 'exp', 'email', 'addr', 987456, '3216549877', '321654988', '', '21654897147852', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendance`
--

CREATE TABLE IF NOT EXISTS `employee_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `reason` text NOT NULL,
  `leave_type_id` int(11) NOT NULL,
  `leave_split_up_id` int(11) NOT NULL,
  `leave_date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`),
  KEY `employee_id_idx` (`employee_id`),
  KEY `leave_type_id_idx` (`leave_type_id`),
  KEY `leave_split_up_id` (`leave_split_up_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `employee_attendance`
--

INSERT INTO `employee_attendance` (`id`, `employee_id`, `reason`, `leave_type_id`, `leave_split_up_id`, `leave_date`) VALUES
(4, 1, 'sick', 1, 1, '2014-07-16'),
(5, 2, 'sick', 2, 2, '2014-07-17'),
(6, 1, 'Sick', 1, 1, '2014-07-17'),
(7, 1, 'chickun gunya ed', 3, 1, '2014-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `employee_category`
--

CREATE TABLE IF NOT EXISTS `employee_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) NOT NULL,
  `prefix` varchar(5) NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employee_category`
--

INSERT INTO `employee_category` (`id`, `category_name`, `prefix`, `status`) VALUES
(1, 'Admin', 'AD', 'A'),
(2, 'Faculty', 'FC', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `employee_department`
--

CREATE TABLE IF NOT EXISTS `employee_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(45) NOT NULL,
  `department_code` varchar(5) NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employee_department`
--

INSERT INTO `employee_department` (`id`, `department_name`, `department_code`, `status`) VALUES
(1, 'department1', 'DP1', 'A'),
(2, 'department2', 'D2', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `employee_subject_allotment`
--

CREATE TABLE IF NOT EXISTS `employee_subject_allotment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `batch_id` (`batch_id`),
  KEY `subject_id` (`subject_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee_subject_allotment`
--

INSERT INTO `employee_subject_allotment` (`id`, `batch_id`, `subject_id`, `employee_id`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_title` varchar(60) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `amount` double(15,2) NOT NULL DEFAULT '0.00',
  `expense_date` date NOT NULL DEFAULT '0000-00-00',
  `finance_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_expense_1_idx` (`finance_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `expense_title`, `description`, `amount`, `expense_date`, `finance_category_id`) VALUES
(1, 'expense1', 'desc1', 100000.00, '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `fees_category`
--

CREATE TABLE IF NOT EXISTS `fees_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fees_category_name` varchar(45) NOT NULL,
  `description` varchar(60) DEFAULT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fees_category`
--

INSERT INTO `fees_category` (`id`, `fees_category_name`, `description`, `status`) VALUES
(1, 'Tuition Fee', 'Tuition Fees description', 'A'),
(2, 'Admission Fees', 'Admission fees description edited', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `fees_collection`
--

CREATE TABLE IF NOT EXISTS `fees_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fees_collection_name` varchar(45) NOT NULL,
  `fees_category_id` int(11) NOT NULL,
  `fine_id` int(11) NOT NULL,
  `start_date` date NOT NULL DEFAULT '0000-00-00',
  `end_date` date NOT NULL DEFAULT '0000-00-00',
  `due_date` date NOT NULL DEFAULT '0000-00-00',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`),
  KEY `fees_category_id` (`fees_category_id`),
  KEY `fine_id` (`fine_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fees_collection`
--

INSERT INTO `fees_collection` (`id`, `fees_collection_name`, `fees_category_id`, `fine_id`, `start_date`, `end_date`, `due_date`, `status`) VALUES
(1, 'fees collection name', 1, 1, '2014-07-07', '2014-07-15', '2014-07-15', 'A'),
(2, 'fees collection 2', 1, 1, '2014-07-07', '2014-07-15', '2014-07-15', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `fees_discount`
--

CREATE TABLE IF NOT EXISTS `fees_discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discount_name` varchar(45) NOT NULL,
  `discount_amount` double(15,2) NOT NULL DEFAULT '0.00',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fees_discount`
--

INSERT INTO `fees_discount` (`id`, `discount_name`, `discount_amount`, `status`) VALUES
(1, 'discount1', 100.00, 'A'),
(2, 'discount2', 210.00, 'I');

-- --------------------------------------------------------

--
-- Table structure for table `fees_payment`
--

CREATE TABLE IF NOT EXISTS `fees_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fees_receipt_number` varchar(20) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `fees_collection_id` int(11) NOT NULL,
  `fees_payment_date` date NOT NULL DEFAULT '0000-00-00',
  `payment_mode` enum('Cash','Cheque','DD') NOT NULL,
  `payment_remark` varchar(60) DEFAULT NULL,
  `paid_amount` double(15,2) NOT NULL DEFAULT '0.00',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`),
  KEY `fk_fees_payment_1_idx` (`batch_id`),
  KEY `student_id` (`student_id`),
  KEY `fees_collection_id_idx` (`fees_collection_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fees_payment`
--

INSERT INTO `fees_payment` (`id`, `fees_receipt_number`, `batch_id`, `student_id`, `fees_collection_id`, `fees_payment_date`, `payment_mode`, `payment_remark`, `paid_amount`, `status`) VALUES
(1, '95157', 1, 1, 1, '0000-00-00', 'Cash', 'csdcsdc', 32146.00, 'A'),
(2, '321564', 1, 1, 1, '0000-00-00', 'Cash', 'hjghjghjgjg', 321456.00, 'A'),
(3, '987546', 2, 1, 1, '2014-08-21', 'Cash', '5656mnbbvj', 6541564.00, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `finance_category`
--

CREATE TABLE IF NOT EXISTS `finance_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) NOT NULL,
  `description` varchar(80) DEFAULT NULL,
  `is_income` tinyint(4) NOT NULL DEFAULT '0',
  `is_editable` tinyint(4) NOT NULL DEFAULT '1',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `finance_category`
--

INSERT INTO `finance_category` (`id`, `category_name`, `description`, `is_income`, `is_editable`, `status`) VALUES
(1, 'Tuition Fee', 'tuition fee description', 1, 0, 'A'),
(2, 'Professional Charge', 'Professional charge description', 0, 1, 'A'),
(3, 'Petty Cash', 'Petty cash description', 1, 1, 'A'),
(4, 'TMB', 'Tamilnadu Mercantile Bank', 0, 1, 'A'),
(5, 'test category', 'test description', 1, 1, 'A'),
(6, ' vdfv ', 'd d ', 0, 1, 'A'),
(7, 'test flash', 'test flash', 0, 1, 'A'),
(9, 'test flash', 'kjbkbkk', 1, 1, 'A'),
(10, ' ccvxcv', 'xcvxcvxc', 1, 1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE IF NOT EXISTS `fine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fine_name` varchar(45) NOT NULL,
  `days_after_due_date` int(11) NOT NULL,
  `fine_amount` double(15,2) NOT NULL DEFAULT '0.00',
  `mode` enum('P','A') NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`id`, `fine_name`, `days_after_due_date`, `fine_amount`, `mode`, `status`) VALUES
(1, 'Fine1', 1, 100.00, 'A', 'A'),
(2, 'fine 2', 2, 200.00, 'A', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE IF NOT EXISTS `income` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `income_title` varchar(60) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `amount` double(15,2) NOT NULL DEFAULT '0.00',
  `income_date` date NOT NULL DEFAULT '0000-00-00',
  `finance_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_income_1_idx` (`finance_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `income_title`, `description`, `amount`, `income_date`, `finance_category_id`) VALUES
(1, 'income1', 'desc1', 1000.00, '2014-07-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `leave_split_up`
--

CREATE TABLE IF NOT EXISTS `leave_split_up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leave_split_up` varchar(45) NOT NULL,
  `deduction` double(5,2) NOT NULL DEFAULT '0.00',
  `deduction_mode` enum('P','A') NOT NULL DEFAULT 'P',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `leave_split_up`
--

INSERT INTO `leave_split_up` (`id`, `leave_split_up`, `deduction`, `deduction_mode`, `status`) VALUES
(1, 'type', 123.00, 'P', 'A'),
(2, 'one hour edit', 20.00, 'A', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE IF NOT EXISTS `leave_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leave_name` varchar(45) NOT NULL,
  `leave_code` varchar(10) DEFAULT NULL,
  `maximum_count` int(11) NOT NULL DEFAULT '0',
  `carry_forward` enum('Y','N') NOT NULL DEFAULT 'N',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`id`, `leave_name`, `leave_code`, `maximum_count`, `carry_forward`, `status`) VALUES
(1, 'Casual Leave', 'CL', 1, 'Y', 'A'),
(2, 'Loss of pay', 'LOP', 2, 'N', 'A'),
(3, 'sick leave', 'SL', 1, 'Y', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `liabilities`
--

CREATE TABLE IF NOT EXISTS `liabilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `liability_name` varchar(60) NOT NULL,
  `description` varchar(80) DEFAULT NULL,
  `amount` double(15,2) NOT NULL DEFAULT '0.00',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  `created_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `liabilities`
--

INSERT INTO `liabilities` (`id`, `liability_name`, `description`, `amount`, `status`, `created_date`) VALUES
(1, 'liability 1', 'cbasdjask', 10000.00, 'I', NULL),
(2, 'liability 2', 'description edited', 32626.00, 'A', '2014-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_category`
--

CREATE TABLE IF NOT EXISTS `payroll_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) NOT NULL,
  `percentage` float(3,2) NOT NULL DEFAULT '0.00',
  `percentage_of` int(11) NOT NULL DEFAULT '0',
  `is_deduction` enum('Y','N') NOT NULL DEFAULT 'N',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `payroll_category`
--

INSERT INTO `payroll_category` (`id`, `category_name`, `percentage`, `percentage_of`, `is_deduction`, `status`) VALUES
(1, 'basic pay', 0.00, 0, 'N', 'A'),
(2, 'Travel Allowance', 0.00, 0, 'N', 'A'),
(3, 'PF', 1.00, 1, 'Y', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `pay_slip`
--

CREATE TABLE IF NOT EXISTS `pay_slip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `salary_date` date NOT NULL DEFAULT '0000-00-00',
  `basic_pay` double(10,2) NOT NULL DEFAULT '0.00',
  `deductions` double(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pay_slip`
--

INSERT INTO `pay_slip` (`id`, `employee_id`, `salary_date`, `basic_pay`, `deductions`) VALUES
(1, 1, '2014-07-01', 5000.00, 150.00);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admission_number` varchar(45) NOT NULL,
  `admission_date` date NOT NULL DEFAULT '0000-00-00',
  `name` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `gender` enum('0','1') NOT NULL,
  `address` text,
  `date_of_birth` date NOT NULL DEFAULT '0000-00-00',
  `pincode` int(11) DEFAULT NULL,
  `parent_name` varchar(45) NOT NULL,
  `parent_phone` varchar(14) NOT NULL,
  `home_number` varchar(14) DEFAULT NULL,
  `mobile` varchar(14) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`),
  KEY `batch_id_idx` (`batch_id`),
  KEY `course_id_idx` (`course_id`),
  KEY `category_id_idx` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `admission_number`, `admission_date`, `name`, `email`, `category_id`, `gender`, `address`, `date_of_birth`, `pincode`, `parent_name`, `parent_phone`, `home_number`, `mobile`, `course_id`, `batch_id`, `status`) VALUES
(1, '001', '2014-07-05', 'student1', '', 1, '0', 'address', '1998-07-05', NULL, 'parent', '9874563210', '', '', 1, 1, 'A'),
(2, '321', '2014-09-12', 'stud batch2', '', 1, '1', 'sdvsd', '0000-00-00', NULL, 'dasdfsd', '321456987', '', '', 1, 2, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `student_category`
--

CREATE TABLE IF NOT EXISTS `student_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student_category`
--

INSERT INTO `student_category` (`id`, `category_name`, `status`) VALUES
(1, 'General', 'A'),
(2, 'OBC', 'I'),
(3, 'OBC', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(45) NOT NULL,
  `subject_code` varchar(45) NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_code`, `status`) VALUES
(1, 'Physics', 'PHY', 'A'),
(2, 'Chemistry', 'CHE', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` enum('AD','CR','DO','EX','TC') NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  `name` varchar(60) NOT NULL,
  `address` text,
  `phone` varchar(10) NOT NULL,
  `center` enum('Ulloor','Attakulangara') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `status`, `name`, `address`, `phone`, `center`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'AD', 'A', 'Admin', 'asdasdasfasf\r\ndfgdsfgdsfg\r\nlkhjkjhkjh\r\njkhjkhkjhk\r\nklkhjh,hjkho', '1234567890', 'Ulloor'),
(2, 'counsellor', 'e10adc3949ba59abbe56e057f20f883e', 'CR', 'A', 'counsellor', 'dfsdfsd', '9876543210', 'Ulloor'),
(3, 'telecaller', 'e10adc3949ba59abbe56e057f20f883e', 'TC', 'A', 'Telecaller', 'telecaller address', '9874563210', 'Ulloor'),
(4, 'executive', 'e10adc3949ba59abbe56e057f20f883e', 'EX', 'A', 'executive', 'asdasfiuou\r\ndsdgsdfg', '0147852369', 'Ulloor'),
(5, 'data', 'e10adc3949ba59abbe56e057f20f883e', 'DO', 'A', 'Data Entry', 'dghfdhfdthfd', '3216549870', 'Attakulangara'),
(6, 'test', 'e10adc3949ba59abbe56e057f20f883e', 'AD', 'A', 'test', NULL, '', 'Ulloor');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batches`
--
ALTER TABLE `batches`
  ADD CONSTRAINT `fk_course_id` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `elective_group`
--
ALTER TABLE `elective_group`
  ADD CONSTRAINT `elective_batch_id` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`);

--
-- Constraints for table `elective_subjects`
--
ALTER TABLE `elective_subjects`
  ADD CONSTRAINT `elective_group_id` FOREIGN KEY (`group_id`) REFERENCES `elective_group` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `fk_employees_1` FOREIGN KEY (`category_id`) REFERENCES `employee_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee_attendance`
--
ALTER TABLE `employee_attendance`
  ADD CONSTRAINT `employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `leave_split_up_id` FOREIGN KEY (`leave_split_up_id`) REFERENCES `leave_split_up` (`id`),
  ADD CONSTRAINT `leave_type_id` FOREIGN KEY (`leave_type_id`) REFERENCES `leave_type` (`id`);

--
-- Constraints for table `employee_subject_allotment`
--
ALTER TABLE `employee_subject_allotment`
  ADD CONSTRAINT `subject_batch_id` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`),
  ADD CONSTRAINT `subject_employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `subject_id` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `fk_expense_1` FOREIGN KEY (`finance_category_id`) REFERENCES `finance_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fees_collection`
--
ALTER TABLE `fees_collection`
  ADD CONSTRAINT `fees_category_id` FOREIGN KEY (`fees_category_id`) REFERENCES `fees_category` (`id`),
  ADD CONSTRAINT `fine_id` FOREIGN KEY (`fine_id`) REFERENCES `fine` (`id`);

--
-- Constraints for table `fees_payment`
--
ALTER TABLE `fees_payment`
  ADD CONSTRAINT `fees_collection_id` FOREIGN KEY (`fees_collection_id`) REFERENCES `fees_collection` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fees_payment_1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `students_id` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `fk_income_1` FOREIGN KEY (`finance_category_id`) REFERENCES `finance_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pay_slip`
--
ALTER TABLE `pay_slip`
  ADD CONSTRAINT `pay_slip_employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `batch_id` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`),
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `student_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `course_id` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
