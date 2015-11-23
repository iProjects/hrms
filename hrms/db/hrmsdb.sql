-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2015 at 11:14 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hrmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `hrms_users`
--

CREATE TABLE IF NOT EXISTS `hrms_users` (
  `auto_id` int(11) NOT NULL,
  `us_email` varchar(200) DEFAULT NULL,
  `us_pwd` varchar(200) DEFAULT NULL,
  `us_telephone` varchar(200) DEFAULT NULL,
  `us_status` varchar(200) DEFAULT NULL,
  `us_role` int(11) DEFAULT NULL,
  `us_lastlogindate` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrms_users`
--

INSERT INTO `hrms_users` (`auto_id`, `us_email`, `us_pwd`, `us_telephone`, `us_status`, `us_role`, `us_lastlogindate`) VALUES
(32, 'k@k.com', 'k', 'k', 'k', 1, NULL),
(33, 'v@v.com', 'v', 'v', 'v', 1, NULL),
(34, 'a@a.com', 'a', 'a', 'a', 1, NULL),
(35, 's@s.com', 's', 's', 's', 1, NULL),
(36, 'w@w.com', 'w', 'w', 'w', 1, NULL),
(37, 'd@d.com', 'd', 'd', 'd', 1, NULL),
(38, 'q@q.com', 'q', 'q', 'q', 1, NULL),
(39, 'e@e.com', 'e', 'ee', 'e', 1, NULL),
(40, 'z@z.com', 'z', 'z', 'z', 1, NULL),
(41, 'r@r.com', 'r', 'r', 'r', 1, NULL),
(42, 't@t.com', 't', 't', 't', 1, NULL),
(43, 'y@y.com', 'y', 'y', 'y', 1, NULL),
(44, 'u@u.com', 'u', 'u', 'u', 1, NULL),
(45, 'o@o.com', 'o', 'o', 'o', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hrms_account_types`
--

CREATE TABLE IF NOT EXISTS `hrms_account_types` (
  `auto_id` int(11) NOT NULL,
  `at_description` varchar(200) DEFAULT NULL,
  `at_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_assets`
--

CREATE TABLE IF NOT EXISTS `hrms_assets` (
  `auto_id` int(11) NOT NULL,
  `ast_description` varchar(200) DEFAULT NULL,
  `ast_asset_type` int(11) DEFAULT NULL,
  `ast_date_acquired` datetime DEFAULT NULL,
  `ast_acquired_value` float DEFAULT NULL,
  `ast_current_value` float DEFAULT NULL,
  `ast_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_asset_types`
--

CREATE TABLE IF NOT EXISTS `hrms_asset_types` (
  `auto_id` int(11) NOT NULL,
  `at_description` varchar(200) DEFAULT NULL,
  `at_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_bookings`
--

CREATE TABLE IF NOT EXISTS `hrms_bookings` (
  `auto_id` int(11) NOT NULL,
  `booking_customer_id` int(11) DEFAULT NULL,
  `booking_room_id` int(11) DEFAULT NULL,
  `booking_check_in_date` datetime DEFAULT NULL,
  `booking_check_out_date` datetime DEFAULT NULL,
  `booking_date` datetime DEFAULT NULL,
  `booking_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_customers`
--

CREATE TABLE IF NOT EXISTS `hrms_customers` (
  `auto_id` int(11) NOT NULL,
  `customer_firstname` varchar(200) DEFAULT NULL,
  `customer_lastname` varchar(200) DEFAULT NULL,
  `customer_surname` varchar(200) DEFAULT NULL,
  `customer_email` varchar(200) DEFAULT NULL,
  `customer_phone` varchar(200) DEFAULT NULL,
  `customer_date_of_birth` datetime DEFAULT NULL,
  `customer_registration_date` datetime DEFAULT NULL,
  `customer_country` varchar(200) DEFAULT NULL,
  `customer_address` varchar(200) DEFAULT NULL,
  `customer_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_departments`
--

CREATE TABLE IF NOT EXISTS `hrms_departments` (
  `auto_id` int(11) NOT NULL,
  `dep_description` varchar(200) DEFAULT NULL,
  `dep_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_employees`
--

CREATE TABLE IF NOT EXISTS `hrms_employees` (
  `auto_id` int(11) NOT NULL,
  `employee_first_name` varchar(200) DEFAULT NULL,
  `employee_last_name` varchar(200) DEFAULT NULL,
  `employee_surname` varchar(200) DEFAULT NULL,
  `employee_date_of_birth` datetime DEFAULT NULL,
  `employee_address` varchar(200) DEFAULT NULL,
  `employee_phone` varchar(200) DEFAULT NULL,
  `employee_email` varchar(200) DEFAULT NULL,
  `employee_pwd` varchar(200) DEFAULT NULL,
  `employee_job_title` varchar(200) DEFAULT NULL,
  `employee_no` varchar(200) DEFAULT NULL,
  `employee_gender` varchar(200) DEFAULT NULL,
  `employee_date_of_employment` datetime DEFAULT NULL,
  `employee_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_employee_schedules`
--

CREATE TABLE IF NOT EXISTS `hrms_employee_schedules` (
  `auto_id` int(11) NOT NULL,
  `shd_employee_id` int(11) DEFAULT NULL,
  `shd_station_id` int(11) DEFAULT NULL,
  `shd_shift_id` int(11) DEFAULT NULL,
  `shd_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_guest_types`
--

CREATE TABLE IF NOT EXISTS `hrms_guest_types` (
  `auto_id` int(11) NOT NULL,
  `gt_description` varchar(200) DEFAULT NULL,
  `gt_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_hotels`
--

CREATE TABLE IF NOT EXISTS `hrms_hotels` (
  `auto_id` int(11) NOT NULL,
  `hotel_name` varchar(200) DEFAULT NULL,
  `hotel_phone` varchar(200) DEFAULT NULL,
  `hotel_email` varchar(200) DEFAULT NULL,
  `hotel_address` varchar(200) DEFAULT NULL,
  `hotel_country` varchar(200) DEFAULT NULL,
  `hotel_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_locations`
--

CREATE TABLE IF NOT EXISTS `hrms_locations` (
  `auto_id` int(11) NOT NULL,
  `loc_description` varchar(200) DEFAULT NULL,
  `loc_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_lost_and_found`
--

CREATE TABLE IF NOT EXISTS `hrms_lost_and_found` (
  `auto_id` int(11) NOT NULL,
  `laf_item_description` varchar(200) DEFAULT NULL,
  `laf_color` varchar(200) DEFAULT NULL,
  `laf_where_found` varchar(200) NOT NULL,
  `laf_who_found` varchar(200) DEFAULT NULL,
  `laf_estimate_value` float DEFAULT NULL,
  `laf_current_location` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_payments`
--

CREATE TABLE IF NOT EXISTS `hrms_payments` (
  `auto_id` int(11) NOT NULL,
  `pay_booking_id` int(11) DEFAULT NULL,
  `pay_customer_id` int(11) DEFAULT NULL,
  `pay_method_id` int(11) DEFAULT NULL,
  `pay_current_payment_amount` float DEFAULT NULL,
  `pay_remarks` varchar(200) DEFAULT NULL,
  `pay_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_payment_methods`
--

CREATE TABLE IF NOT EXISTS `hrms_payment_methods` (
  `auto_id` int(11) NOT NULL,
  `pm_description` varchar(200) DEFAULT NULL,
  `pm_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_rate_types`
--

CREATE TABLE IF NOT EXISTS `hrms_rate_types` (
  `auto_id` int(11) NOT NULL,
  `rt_description` varchar(200) DEFAULT NULL,
  `rt_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_roles`
--

CREATE TABLE IF NOT EXISTS `hrms_roles` (
  `auto_id` int(11) NOT NULL,
  `role_description` varchar(200) DEFAULT NULL,
  `role_status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrms_roles`
--

INSERT INTO `hrms_roles` (`auto_id`, `role_description`, `role_status`) VALUES
(1, 'Administrator', 0),
(2, 'Employee', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hrms_rooms`
--

CREATE TABLE IF NOT EXISTS `hrms_rooms` (
  `auto_id` int(11) NOT NULL,
  `room_description` varchar(1000) DEFAULT NULL,
  `room_type` int(11) DEFAULT NULL,
  `room_hotel_id` int(11) DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL,
  `room_photo` varchar(200) DEFAULT NULL,
  `room_rate` float DEFAULT NULL,
  `room_max_capacity` int(11) DEFAULT NULL,
  `room_no_of_beds` int(11) DEFAULT NULL,
  `room_smoking` tinyint(1) DEFAULT NULL,
  `room_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_room_prices`
--

CREATE TABLE IF NOT EXISTS `hrms_room_prices` (
  `auto_id` int(11) NOT NULL,
  `rp_current_room_price` float DEFAULT NULL,
  `rp_status` int(11) DEFAULT NULL,
  `rp_parent_id` int(11) DEFAULT NULL,
  `rp_additional_room_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_room_types`
--

CREATE TABLE IF NOT EXISTS `hrms_room_types` (
  `auto_id` int(11) NOT NULL,
  `room_type_description` varchar(200) DEFAULT NULL,
  `room_type_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_shifts`
--

CREATE TABLE IF NOT EXISTS `hrms_shifts` (
  `auto_id` int(11) NOT NULL,
  `shift_day_of_week` datetime DEFAULT NULL,
  `shift_start_time` varchar(200) DEFAULT NULL,
  `shift_end_time` varchar(200) DEFAULT NULL,
  `shift_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_stations`
--

CREATE TABLE IF NOT EXISTS `hrms_stations` (
  `auto_id` int(11) NOT NULL,
  `station_description` varchar(200) DEFAULT NULL,
  `station_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_statuses`
--

CREATE TABLE IF NOT EXISTS `hrms_statuses` (
  `auto_id` int(11) NOT NULL,
  `status_description` varchar(200) DEFAULT NULL,
  `status_status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrms_statuses`
--

INSERT INTO `hrms_statuses` (`auto_id`, `status_description`, `status_status`) VALUES
(1, 'Active', 'Y'),
(2, 'Closed', 'Y'),
(3, 'New', 'Y'),
(4, 'Pending', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hrms_users`
--
ALTER TABLE `hrms_users`
  ADD PRIMARY KEY (`auto_id`) ;

--
-- Indexes for table `hrms_account_types`
--
ALTER TABLE `hrms_account_types`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_assets`
--
ALTER TABLE `hrms_assets`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_asset_types`
--
ALTER TABLE `hrms_asset_types`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_bookings`
--
ALTER TABLE `hrms_bookings`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_customers`
--
ALTER TABLE `hrms_customers`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_departments`
--
ALTER TABLE `hrms_departments`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_employees`
--
ALTER TABLE `hrms_employees`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_employee_schedules`
--
ALTER TABLE `hrms_employee_schedules`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_guest_types`
--
ALTER TABLE `hrms_guest_types`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_hotels`
--
ALTER TABLE `hrms_hotels`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_locations`
--
ALTER TABLE `hrms_locations`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_lost_and_found`
--
ALTER TABLE `hrms_lost_and_found`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_payments`
--
ALTER TABLE `hrms_payments`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_payment_methods`
--
ALTER TABLE `hrms_payment_methods`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_rate_types`
--
ALTER TABLE `hrms_rate_types`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_roles`
--
ALTER TABLE `hrms_roles`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_rooms`
--
ALTER TABLE `hrms_rooms`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_room_types`
--
ALTER TABLE `hrms_room_types`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_shifts`
--
ALTER TABLE `hrms_shifts`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_stations`
--
ALTER TABLE `hrms_stations`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `hrms_statuses`
--
ALTER TABLE `hrms_statuses`
  ADD PRIMARY KEY (`auto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hrms_users`
--
ALTER TABLE `hrms_users`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `hrms_account_types`
--
ALTER TABLE `hrms_account_types`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_assets`
--
ALTER TABLE `hrms_assets`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_asset_types`
--
ALTER TABLE `hrms_asset_types`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_departments`
--
ALTER TABLE `hrms_departments`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_employee_schedules`
--
ALTER TABLE `hrms_employee_schedules`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_guest_types`
--
ALTER TABLE `hrms_guest_types`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_hotels`
--
ALTER TABLE `hrms_hotels`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_locations`
--
ALTER TABLE `hrms_locations`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_lost_and_found`
--
ALTER TABLE `hrms_lost_and_found`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_payments`
--
ALTER TABLE `hrms_payments`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_payment_methods`
--
ALTER TABLE `hrms_payment_methods`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_rate_types`
--
ALTER TABLE `hrms_rate_types`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_roles`
--
ALTER TABLE `hrms_roles`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hrms_rooms`
--
ALTER TABLE `hrms_rooms`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_room_types`
--
ALTER TABLE `hrms_room_types`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_shifts`
--
ALTER TABLE `hrms_shifts`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_stations`
--
ALTER TABLE `hrms_stations`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrms_statuses`
--
ALTER TABLE `hrms_statuses`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
