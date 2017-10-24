-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 01:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bro`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiliations`
--

CREATE TABLE `affiliations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `york_rite` enum('Yes','No') NOT NULL,
  `scottish_rite` enum('Yes','No') NOT NULL,
  `shriner` enum('Yes','No') NOT NULL,
  `grotto` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(11) NOT NULL,
  `chapter_name` varchar(255) NOT NULL,
  `chapter_no` int(11) NOT NULL,
  `district_no` int(11) NOT NULL,
  `top_line_signer` varchar(255) NOT NULL,
  `second_line_signer` varchar(255) NOT NULL,
  `date_joined` date NOT NULL,
  `most_high_priest` varchar(255) NOT NULL,
  `year1` varchar(255) NOT NULL,
  `district_high_priest` varchar(255) NOT NULL,
  `year2` varchar(255) NOT NULL,
  `hight_priest` varchar(255) NOT NULL,
  `year3` varchar(255) NOT NULL,
  `king` varchar(255) NOT NULL,
  `scribe` varchar(255) NOT NULL,
  `secretary` varchar(255) NOT NULL,
  `treasurer` varchar(255) NOT NULL,
  `capt_host` varchar(255) NOT NULL,
  `principal_sojourner` varchar(255) NOT NULL,
  `ra_captain` varchar(255) NOT NULL,
  `master_vef_1` varchar(255) NOT NULL,
  `master_vef_2` varchar(255) NOT NULL,
  `master_vef_3` varchar(255) NOT NULL,
  `chaptain` varchar(255) NOT NULL,
  `sentinel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commendary`
--

CREATE TABLE `commendary` (
  `id` int(11) NOT NULL,
  `comm_name` varchar(255) NOT NULL,
  `comm_no` int(11) NOT NULL,
  `district_no` int(11) NOT NULL,
  `top_line_signer` varchar(255) NOT NULL,
  `second_line_signer` varchar(255) NOT NULL,
  `date_joined` date NOT NULL,
  `master_emi_cmdr` varchar(255) NOT NULL,
  `year1` varchar(255) NOT NULL,
  `district_emi_cmdr` varchar(255) NOT NULL,
  `year2` varchar(255) NOT NULL,
  `emi_cmdr` varchar(255) NOT NULL,
  `year3` varchar(255) NOT NULL,
  `generalsmo` varchar(255) NOT NULL,
  `capt_general` varchar(255) NOT NULL,
  `recorder` varchar(255) NOT NULL,
  `treasurer` varchar(255) NOT NULL,
  `sr_warden` varchar(255) NOT NULL,
  `jr_warden` varchar(255) NOT NULL,
  `prebate` varchar(255) NOT NULL,
  `sword_bearer` varchar(255) NOT NULL,
  `stand_bearer` varchar(255) NOT NULL,
  `warden` varchar(255) NOT NULL,
  `sentinel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `council`
--

CREATE TABLE `council` (
  `id` int(11) NOT NULL,
  `council_name` varchar(255) NOT NULL,
  `council_no` int(11) NOT NULL,
  `district_no` int(11) NOT NULL,
  `top_line_signer` varchar(255) NOT NULL,
  `second_line_signer` varchar(255) NOT NULL,
  `date_joined` date NOT NULL,
  `most_il_master` varchar(255) NOT NULL,
  `year1` varchar(255) NOT NULL,
  `district_il_master` varchar(255) NOT NULL,
  `year2` varchar(255) NOT NULL,
  `illustrious_master` varchar(255) NOT NULL,
  `year3` varchar(255) NOT NULL,
  `deputy_master` varchar(255) NOT NULL,
  `princ_cond_of_work` varchar(255) NOT NULL,
  `recorder` varchar(255) NOT NULL,
  `treasurer` varchar(255) NOT NULL,
  `capt_of_guard` varchar(255) NOT NULL,
  `cond_of_council` varchar(255) NOT NULL,
  `steward` varchar(255) NOT NULL,
  `chaptain` varchar(255) NOT NULL,
  `sentinel` varchar(255) NOT NULL,
  `marshal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `spouse` varchar(255) NOT NULL,
  `kids` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_address`
--

CREATE TABLE `home_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address1` text NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `off_email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `b_city` varchar(255) NOT NULL,
  `b_state` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `mason` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_date`, `updated_date`) VALUES
(1, 'Head Guy', '2017-10-24 05:49:08', '0000-00-00 00:00:00'),
(2, 'State Guy', '2017-10-24 05:49:08', '0000-00-00 00:00:00'),
(3, 'District Guy', '2017-10-24 05:49:08', '0000-00-00 00:00:00'),
(4, 'Local Chapter Secretary Guy', '2017-10-24 05:49:08', '0000-00-00 00:00:00'),
(5, 'Actual Member', '2017-10-24 05:49:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `home_blue_lodge` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `home_blue_lodge`, `phone`, `photo`, `role_id`, `status`, `created_by`, `updated_by`, `created_date`, `updated_date`) VALUES
(1, 'Ram', 'S', 'Kumar', 'admin@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '', '', '', 1, 'Active', 1, 1, '2017-10-24 11:36:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `work_address`
--

CREATE TABLE `work_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address1` text NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `york_rite`
--

CREATE TABLE `york_rite` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `council_id` int(11) NOT NULL,
  `commandery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliations`
--
ALTER TABLE `affiliations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commendary`
--
ALTER TABLE `commendary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `council`
--
ALTER TABLE `council`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_address`
--
ALTER TABLE `home_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_address`
--
ALTER TABLE `work_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `york_rite`
--
ALTER TABLE `york_rite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affiliations`
--
ALTER TABLE `affiliations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `commendary`
--
ALTER TABLE `commendary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `council`
--
ALTER TABLE `council`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `home_address`
--
ALTER TABLE `home_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `work_address`
--
ALTER TABLE `work_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `york_rite`
--
ALTER TABLE `york_rite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
