-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 08:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis_latest`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `group_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `region` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `barangay` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `group_id`, `customer_id`, `first_name`, `last_name`, `mobile_number`, `region`, `province`, `city`, `barangay`, `street`, `zip_code`, `date_added`) VALUES
(2, '661757910d794', 31, 'TIAN', 'Deladia', '09396004981', 'Region III (Central Luzon)', 'Bataan', 'City Of Balanga (Capital)', 'Cataning', 'phase 3', 3014, '2024-04-11 11:22:57'),
(3, '661757b4787d1', 31, 'TIAN', 'Deladia', '09396004981', 'Region II (Cagayan Valley)', 'Isabela', 'Cabagan', 'Casibarag Norte', 'phase 3', 3014, '2024-04-11 11:23:32'),
(4, '66175cb5daa58', 38, 'Tian', 'Gaming', '09396004981', 'Region III (Central Luzon)', 'Bulacan', 'Pandi', 'Pinagkuartelan', 'phase 3', 3014, '2024-04-11 11:44:53'),
(5, '6617f47fc4641', 37, 'Romelyn', 'Leynes', '09396004981', 'Region III (Central Luzon)', 'Bulacan', 'Bocaue', 'Bagumbayan', 'jknj', 3921, '2024-04-11 22:32:31'),
(6, '6619f99915ece', 39, 'Christian', 'Deladia', '09396004981', 'Region III (Central Luzon)', 'Bulacan', 'Pandi', 'Pinagkuartelan', 'phase 3', 3014, '2024-04-13 11:18:49'),
(7, '6623ac789b39d', 36, 'MARITES', 'GARCIA', '09351234567', 'Region III (Central Luzon)', 'Bulacan', 'Pandi', 'Poblacion', '21 Pritil Street', 301414, '2024-04-20 19:52:24'),
(8, '66291206d6317', 36, 'MARITES', 'GARCIA', '09060227839', 'Region IV-A (CALABARZON)', 'Laguna', 'Bay', 'Calo', '21 Pritil Street', 301414, '2024-04-24 22:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(10) NOT NULL,
  `profile_image` varchar(260) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `profile_image`, `firstname`, `lastname`, `email`, `mobile`, `username`, `password`, `date_added`, `status`) VALUES
(46, 'https://res.cloudinary.com/djpkvzlai/image/upload/v1712827526/w4n6j01tgtzmjkvbqdl5.jpg', 'Christian', 'Deladia', 'deladia_c@yahoo.com', '1231231', 'yanyan@gmail.com', '$2y$10$jGUNAF2.7Cd5VMyH5Ci0yOP4XmT9DygF3orr399DCzp6Pf5YtWp5S', '2024-04-11 17:28:57', 'active'),
(47, 'https://res.cloudinary.com/djpkvzlai/image/upload/v1712896316/wjbcyyhfztde1sjyzmap.jpg', 'Romelyn', 'Leynes', 'admin@gmail.com', '09876543211', 'admin', '$2y$10$i4ugnoeMYfinPu8gp5tQT.e.EoNIBXb31HS3Fbd7yxwWYU94.zjC2', '2024-04-12 12:36:55', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_deactive`
--

CREATE TABLE `admin_login_deactive` (
  `admin_id` int(10) NOT NULL,
  `profile_image` varchar(260) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binyag`
--

CREATE TABLE `binyag` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(50) DEFAULT NULL,
  `child_first_name` varchar(50) NOT NULL,
  `mother_maiden_lastname` varchar(20) NOT NULL,
  `father_lastname` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `months` int(5) NOT NULL,
  `marriage` varchar(5) NOT NULL,
  `marriage_location` varchar(20) NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `baptismal_date` date NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `father_origin_place` varchar(50) NOT NULL,
  `mother_maiden_fullname` varchar(20) NOT NULL,
  `mother_origin_place` varchar(50) NOT NULL,
  `current_address` varchar(50) NOT NULL,
  `godfather` varchar(20) NOT NULL,
  `godfather_age` int(5) NOT NULL,
  `godfather_religion` varchar(20) NOT NULL,
  `godfather_address` varchar(50) NOT NULL,
  `godmother` varchar(20) NOT NULL,
  `godmother_age` int(5) NOT NULL,
  `godmother_religion` varchar(20) NOT NULL,
  `godmother_address` varchar(50) NOT NULL,
  `client_name` varchar(20) NOT NULL,
  `client_relationship` varchar(20) NOT NULL,
  `client_contact_number` varchar(11) NOT NULL,
  `copy_birth_certificate` varchar(500) NOT NULL,
  `copy_marriage_certificate` varchar(500) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binyag_approve`
--

CREATE TABLE `binyag_approve` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(50) DEFAULT NULL,
  `child_first_name` varchar(50) NOT NULL,
  `mother_maiden_lastname` varchar(20) NOT NULL,
  `father_lastname` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `months` int(5) NOT NULL,
  `marriage` varchar(5) NOT NULL,
  `marriage_location` varchar(20) NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `baptismal_date` date NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `father_origin_place` varchar(50) NOT NULL,
  `mother_maiden_fullname` varchar(20) NOT NULL,
  `mother_origin_place` varchar(50) NOT NULL,
  `current_address` varchar(50) NOT NULL,
  `godfather` varchar(20) NOT NULL,
  `godfather_age` int(5) NOT NULL,
  `godfather_religion` varchar(20) NOT NULL,
  `godfather_address` varchar(50) NOT NULL,
  `godmother` varchar(20) NOT NULL,
  `godmother_age` int(5) NOT NULL,
  `godmother_religion` varchar(20) NOT NULL,
  `godmother_address` varchar(50) NOT NULL,
  `client_name` varchar(20) NOT NULL,
  `client_relationship` varchar(20) NOT NULL,
  `client_contact_number` varchar(20) NOT NULL,
  `copy_birth_certificate` varchar(255) NOT NULL,
  `copy_marriage_certificate` varchar(200) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binyag_complete`
--

CREATE TABLE `binyag_complete` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(50) DEFAULT NULL,
  `child_first_name` varchar(50) NOT NULL,
  `mother_maiden_lastname` varchar(20) NOT NULL,
  `father_lastname` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `months` int(5) NOT NULL,
  `marriage` varchar(5) NOT NULL,
  `marriage_location` varchar(20) NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `baptismal_date` date NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `father_origin_place` varchar(50) NOT NULL,
  `mother_maiden_fullname` varchar(20) NOT NULL,
  `mother_origin_place` varchar(50) NOT NULL,
  `current_address` varchar(50) NOT NULL,
  `godfather` varchar(20) NOT NULL,
  `godfather_age` int(5) NOT NULL,
  `godfather_religion` varchar(20) NOT NULL,
  `godfather_address` varchar(50) NOT NULL,
  `godmother` varchar(20) NOT NULL,
  `godmother_age` int(5) NOT NULL,
  `godmother_religion` varchar(20) NOT NULL,
  `godmother_address` varchar(50) NOT NULL,
  `client_name` varchar(20) NOT NULL,
  `client_relationship` varchar(20) NOT NULL,
  `client_contact_number` varchar(20) NOT NULL,
  `copy_birth_certificate` varchar(255) NOT NULL,
  `copy_marriage_certificate` varchar(200) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binyag_complete`
--

INSERT INTO `binyag_complete` (`id`, `reference_id`, `child_first_name`, `mother_maiden_lastname`, `father_lastname`, `birthdate`, `months`, `marriage`, `marriage_location`, `birthplace`, `baptismal_date`, `father_name`, `father_origin_place`, `mother_maiden_fullname`, `mother_origin_place`, `current_address`, `godfather`, `godfather_age`, `godfather_religion`, `godfather_address`, `godmother`, `godmother_age`, `godmother_religion`, `godmother_address`, `client_name`, `client_relationship`, `client_contact_number`, `copy_birth_certificate`, `copy_marriage_certificate`, `date_added`) VALUES
(7, '66176d85714cf', 'CHRISTIAN', 'ARCEGA', 'DELADIA', '2024-01-24', 3, 'oo', 'PANDI', 'Alabat Quezon', '2024-04-11', 'RICHIE', 'CAVITE', 'RIZZA', 'PANDI', 'PINAGKUARTELAN', 'Ninong Lito', 22, 'Roman Catholic', 'PANDI', 'Ninang Lita', 22, 'Roman Catholic', 'PANDI', 'LENLEN', 'AMPON', '09123456789', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712811132/nvn55joje5uxxovc5lbw.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712811135/klg7grcxtujyp3sx6xak.jpg', '2024-04-11 12:56:37'),
(8, '6619d848d94e1', 'CHRISTIAN', 'ARCEGA', 'DELADIA', '2021-02-09', 38, 'oo', 'PANDI', 'Alabat Quezon', '2024-04-11', 'RICHIE', 'CAVITE', 'RIZZA', 'PANDI', 'PINAGKUARTELAN', 'Ninong Lito', 22, 'Roman Catholic', 'PANDI', 'Ninang Lita', 22, 'Roman Catholic', 'PANDI', 'LENLEN', 'AMPON', '09123456789', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712811552/y103wutvz0zs8srngtym.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712811554/oierrq6tbaeijsr7tldz.jpg', '2024-04-13 08:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `binyag_decline`
--

CREATE TABLE `binyag_decline` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(50) DEFAULT NULL,
  `child_first_name` varchar(50) NOT NULL,
  `mother_maiden_lastname` varchar(20) NOT NULL,
  `father_lastname` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `months` int(5) NOT NULL,
  `marriage` varchar(5) NOT NULL,
  `marriage_location` varchar(20) NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `baptismal_date` date NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `father_origin_place` varchar(50) NOT NULL,
  `mother_maiden_fullname` varchar(20) NOT NULL,
  `mother_origin_place` varchar(50) NOT NULL,
  `current_address` varchar(50) NOT NULL,
  `godfather` varchar(20) NOT NULL,
  `godfather_age` int(5) NOT NULL,
  `godfather_religion` varchar(20) NOT NULL,
  `godfather_address` varchar(50) NOT NULL,
  `godmother` varchar(20) NOT NULL,
  `godmother_age` int(5) NOT NULL,
  `godmother_religion` varchar(20) NOT NULL,
  `godmother_address` varchar(50) NOT NULL,
  `client_name` varchar(20) NOT NULL,
  `client_relationship` varchar(20) NOT NULL,
  `client_contact_number` varchar(20) NOT NULL,
  `copy_birth_certificate` varchar(255) NOT NULL,
  `copy_marriage_certificate` varchar(200) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `reason` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binyag_decline`
--

INSERT INTO `binyag_decline` (`id`, `reference_id`, `child_first_name`, `mother_maiden_lastname`, `father_lastname`, `birthdate`, `months`, `marriage`, `marriage_location`, `birthplace`, `baptismal_date`, `father_name`, `father_origin_place`, `mother_maiden_fullname`, `mother_origin_place`, `current_address`, `godfather`, `godfather_age`, `godfather_religion`, `godfather_address`, `godmother`, `godmother_age`, `godmother_religion`, `godmother_address`, `client_name`, `client_relationship`, `client_contact_number`, `copy_birth_certificate`, `copy_marriage_certificate`, `date_added`, `reason`, `remarks`) VALUES
(20, '66176dda99c9a', 'CHRISTIAN', 'ARCEGA', 'DELADIA', '2024-01-24', 3, 'oo', 'PANDI', 'Alabat Quezon', '2024-04-11', 'RICHIE', 'CAVITE', 'RIZZA', 'PANDI', 'PINAGKUARTELAN', 'Ninong Lito', 22, 'Roman Catholic', 'PANDI', 'Ninang Lita', 22, 'Roman Catholic', 'PANDI', 'LENLEN', 'AMPON', '09123456789', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712811143/idmclsmm9l9lz4gcejf7.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712811145/eqrtshugpg0qbwoqtfyz.jpg', '2024-04-11 12:58:02', 'Issues with the Location or Venue', 'SORRY'),
(21, '66176f0309bbd', 'CHRISTIAN', 'ARCEGA', 'DELADIA', '2024-01-24', 0, 'oo', '', 'Alabat Quezon', '2024-04-11', 'RICHIE', 'CAVITE', 'RIZZA', 'PANDI', 'PINAGKUARTELAN', 'Ninong Lito', 22, 'Roman Catholic', 'PANDI', 'Ninang Lita', 22, 'Roman Catholic', 'PANDI', 'LENLEN', 'AMPON', '09123456789', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712811498/cbkqwvj9do5sdbynpc3v.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712811499/vrhcvx47vbjizfs4firh.jpg', '2024-04-11 13:02:59', 'Concerns about the Purpose or Intent', 'SADASAS');

-- --------------------------------------------------------

--
-- Table structure for table `binyag_outside`
--

CREATE TABLE `binyag_outside` (
  `baptismal_parish_name` varchar(50) NOT NULL,
  `parish_priest_name` varchar(20) NOT NULL,
  `baptismal_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `current_address` varchar(50) NOT NULL,
  `baptismal_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binyag_request_certificate`
--

CREATE TABLE `binyag_request_certificate` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(255) DEFAULT NULL,
  `father_fullname` varchar(255) DEFAULT NULL,
  `mother_maidenname` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binyag_request_certificate_approve`
--

CREATE TABLE `binyag_request_certificate_approve` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(255) DEFAULT NULL,
  `father_fullname` varchar(255) DEFAULT NULL,
  `mother_maidenname` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `baptismal_date` date DEFAULT NULL,
  `baptized_by` varchar(255) DEFAULT NULL,
  `godfather` varchar(255) DEFAULT NULL,
  `godmother` varchar(255) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binyag_request_certificate_approve`
--

INSERT INTO `binyag_request_certificate_approve` (`id`, `reference_id`, `fullname`, `birthdate`, `birthplace`, `father_fullname`, `mother_maidenname`, `purpose`, `baptismal_date`, `baptized_by`, `godfather`, `godmother`, `date_added`) VALUES
(22, '6619fb1fdd081', 'Christian Deladia', '2024-04-03', 'Alabat Quezon', 'Rodelito', 'Millet', 'Certificate', '2024-04-24', 'Fr. Joseph', 'Ninong Lito', 'Ninang Lita', '2024-04-13 11:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `binyag_request_certificate_complete`
--

CREATE TABLE `binyag_request_certificate_complete` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(255) DEFAULT NULL,
  `father_fullname` varchar(255) DEFAULT NULL,
  `mother_maidenname` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `baptismal_date` date DEFAULT NULL,
  `baptized_by` varchar(255) DEFAULT NULL,
  `godfather` varchar(255) DEFAULT NULL,
  `godmother` varchar(255) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binyag_request_certificate_decline`
--

CREATE TABLE `binyag_request_certificate_decline` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(255) DEFAULT NULL,
  `father_fullname` varchar(255) DEFAULT NULL,
  `mother_maidenname` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `reason` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blessing`
--

CREATE TABLE `blessing` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `place` varchar(50) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `complete_address` varchar(50) NOT NULL,
  `contact_person` varchar(20) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blessing_approve`
--

CREATE TABLE `blessing_approve` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `reference_id` varchar(250) NOT NULL,
  `place` varchar(50) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `complete_address` varchar(50) NOT NULL,
  `contact_person` varchar(20) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blessing_approve`
--

INSERT INTO `blessing_approve` (`id`, `client_id`, `user_email`, `user_first_name`, `reference_id`, `place`, `owner_name`, `complete_address`, `contact_person`, `contact_number`, `date`, `time`, `date_added`) VALUES
(18, 0, '', '', '6617722bf37bf', '', '', '', '', '', '0000-00-00', '00:00:00', '2024-04-11 13:16:27');

-- --------------------------------------------------------

--
-- Table structure for table `blessing_complete`
--

CREATE TABLE `blessing_complete` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_email` int(255) NOT NULL,
  `user_first_name` int(255) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `place` varchar(50) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `complete_address` varchar(50) NOT NULL,
  `contact_person` varchar(20) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blessing_complete`
--

INSERT INTO `blessing_complete` (`id`, `client_id`, `user_email`, `user_first_name`, `reference_id`, `place`, `owner_name`, `complete_address`, `contact_person`, `contact_number`, `date`, `time`, `date_added`) VALUES
(12, 38, 0, 0, '661773356c0c5', 'HOUSE', 'Tian', 'Pandi', 'Yan', '09396004981', '2024-04-11', '13:15:00', '2024-04-11 13:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `blessing_decline`
--

CREATE TABLE `blessing_decline` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `place` varchar(50) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `complete_address` varchar(50) NOT NULL,
  `contact_person` varchar(20) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `reason` varchar(500) NOT NULL,
  `remarks` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blessing_decline`
--

INSERT INTO `blessing_decline` (`id`, `client_id`, `user_email`, `user_first_name`, `reference_id`, `place`, `owner_name`, `complete_address`, `contact_person`, `contact_number`, `date`, `time`, `date_added`, `reason`, `remarks`) VALUES
(21, 38, 'tiangaming000@gmail.com', 'Tian', '6617727a98df4', 'HOUSE', 'Tian', 'Pandi', 'Yan', '09396004981', '2024-04-11', '13:15:00', '2024-04-11 13:17:46', 'Unresolved Issues from Previous Interactions', 'wwwwwwwwwww');

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE `form_data` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_data`
--

INSERT INTO `form_data` (`id`, `image_path`) VALUES
(1, 'uploads/Screenshot 2023-07-11 115536.png'),
(2, 'uploads/Screenshot 2023-07-11 115536.png'),
(3, 'uploads/Screenshot 2023-07-11 115536.png'),
(4, 'uploads/Screenshot 2023-07-11 112354.png');

-- --------------------------------------------------------

--
-- Table structure for table `funeral`
--

CREATE TABLE `funeral` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `deceased_fullname` varchar(100) NOT NULL,
  `date_of_death` date NOT NULL,
  `civil_status` varchar(20) NOT NULL,
  `spouse_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `age` int(5) NOT NULL,
  `number_of_child` int(5) NOT NULL,
  `current_address` varchar(50) NOT NULL,
  `cause_of_death` varchar(20) NOT NULL,
  `has_sacrament` varchar(20) NOT NULL,
  `client_name` varchar(20) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `allowed_to_mass` varchar(20) NOT NULL,
  `mass_time` time NOT NULL,
  `mass_date` date NOT NULL,
  `mass_location` varchar(50) NOT NULL,
  `burial_place` varchar(50) NOT NULL,
  `date_added` varchar(250) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `funeral_approve`
--

CREATE TABLE `funeral_approve` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `deceased_fullname` varchar(100) NOT NULL,
  `date_of_death` date NOT NULL,
  `civil_status` varchar(20) NOT NULL,
  `spouse_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `age` int(5) NOT NULL,
  `number_of_child` int(5) NOT NULL,
  `current_address` varchar(50) NOT NULL,
  `cause_of_death` varchar(20) NOT NULL,
  `has_sacrament` varchar(20) NOT NULL,
  `client_name` varchar(20) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `allowed_to_mass` varchar(20) NOT NULL,
  `mass_time` time NOT NULL,
  `mass_date` date NOT NULL,
  `mass_location` varchar(50) NOT NULL,
  `burial_place` varchar(50) NOT NULL,
  `date_added` varchar(250) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `funeral_complete`
--

CREATE TABLE `funeral_complete` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `deceased_fullname` varchar(100) NOT NULL,
  `date_of_death` date NOT NULL,
  `civil_status` varchar(20) NOT NULL,
  `spouse_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `age` int(5) NOT NULL,
  `number_of_child` int(5) NOT NULL,
  `current_address` varchar(50) NOT NULL,
  `cause_of_death` varchar(20) NOT NULL,
  `has_sacrament` varchar(20) NOT NULL,
  `client_name` varchar(20) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `allowed_to_mass` varchar(20) NOT NULL,
  `mass_time` time NOT NULL,
  `mass_date` date NOT NULL,
  `mass_location` varchar(50) NOT NULL,
  `burial_place` varchar(50) NOT NULL,
  `date_added` varchar(250) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `funeral_complete`
--

INSERT INTO `funeral_complete` (`id`, `reference_id`, `deceased_fullname`, `date_of_death`, `civil_status`, `spouse_name`, `mother_name`, `father_name`, `age`, `number_of_child`, `current_address`, `cause_of_death`, `has_sacrament`, `client_name`, `relationship`, `contact_number`, `allowed_to_mass`, `mass_time`, `mass_date`, `mass_location`, `burial_place`, `date_added`) VALUES
(2, '661771cb0b461', 'Juan', '2024-04-11', 'Married', 'Maria', 'Kath', 'Geri', 99, 9, 'Pandi', 'Heart Attack', 'Yes', 'LENLEN', 'Wala', '09396004981', 'Yes', '13:12:00', '2024-04-11', 'Pandi', 'Pandi', '2024-04-11 13:14:51');

-- --------------------------------------------------------

--
-- Table structure for table `funeral_decline`
--

CREATE TABLE `funeral_decline` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `deceased_fullname` varchar(100) NOT NULL,
  `date_of_death` date NOT NULL,
  `civil_status` varchar(20) NOT NULL,
  `spouse_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `age` int(5) NOT NULL,
  `number_of_child` int(5) NOT NULL,
  `current_address` varchar(50) NOT NULL,
  `cause_of_death` varchar(20) NOT NULL,
  `has_sacrament` varchar(20) NOT NULL,
  `client_name` varchar(20) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `allowed_to_mass` varchar(20) NOT NULL,
  `mass_time` time NOT NULL,
  `mass_date` date NOT NULL,
  `mass_location` varchar(50) NOT NULL,
  `burial_place` varchar(50) NOT NULL,
  `date_added` varchar(250) NOT NULL DEFAULT current_timestamp(),
  `reason` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `funeral_decline`
--

INSERT INTO `funeral_decline` (`id`, `reference_id`, `deceased_fullname`, `date_of_death`, `civil_status`, `spouse_name`, `mother_name`, `father_name`, `age`, `number_of_child`, `current_address`, `cause_of_death`, `has_sacrament`, `client_name`, `relationship`, `contact_number`, `allowed_to_mass`, `mass_time`, `mass_date`, `mass_location`, `burial_place`, `date_added`, `reason`, `remarks`) VALUES
(4, '661771c286efb', 'Juan', '2024-04-11', 'Married', 'Maria', 'Kath', 'Geri', 99, 9, 'Pandi', 'Heart Attack', 'Yes', 'LENLEN', 'Wala', '09396004981', 'Yes', '13:12:00', '2024-04-11', 'Pandi', 'Pandi', '2024-04-11 13:14:42', 'Concerns about the Purpose or Intent', 'WWWWWWWWWW');

-- --------------------------------------------------------

--
-- Table structure for table `hold_otp`
--

CREATE TABLE `hold_otp` (
  `id` int(12) NOT NULL,
  `otp` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` text NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `expiry_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hold_otp`
--

INSERT INTO `hold_otp` (`id`, `otp`, `first_name`, `last_name`, `birthday`, `gender`, `mobile_number`, `email`, `password`, `date_created`, `expiry_time`) VALUES
(75, 400655, 'MARITES', 'GARCIA', '2024-05-02', 'male', 2147483647, 'cardinalmarites1@gmail.com', '$2y$10$IwNId9Uwktw5d9dqR4RO9OhdOSys1kRgn9/9/rrKTOBX69s84i.dK', '2024-05-01', '2024-05-01 01:56:57'),
(76, 962091, 'MARITES', 'GARCIA', '2024-05-01', 'male', 2147483647, 'cardinalmarites1@gmail.com', '$2y$10$CSuHoqdRabdRqFCVh3TRf.gPi/o8zqdyAJly1.qtHMHRxC/SzCwna', '2024-05-01', '2024-05-01 02:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` varchar(99) NOT NULL,
  `product_dimension` varchar(200) NOT NULL,
  `product_stock` int(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`product_id`, `product_name`, `product_price`, `product_description`, `product_dimension`, `product_stock`, `product_image`, `date_added`, `status`) VALUES
(16, 'Holy Trinity', 449, 'Fiber Resin, Acrylic Paint', '12 x 12 x 12 inches', 10, 'chibi1.jpeg', '2023-11-13 08:43:48', 'Available'),
(17, 'Sacred Heart of Jesus', 339, 'Fiber Resin, Acrylic Paint, Wood', '12 x 12 x 12 inches', 20, 'chibi2.jpeg', '2023-11-13 08:43:48', 'Available'),
(18, 'St. Rita of Cascia', 249, 'Fiber Resin, Acrylic Paint, Wood', '12 x 12 x 12 inches', 50, 'chibi3.jpeg', '2023-11-13 08:43:48', 'Available'),
(19, 'San Roque', 189, 'Fiber Resin, Acrylic Paint, Wood', '12 x 12 x 10 inches', 2, 'chibi4.jpeg', '2023-11-13 08:43:48', 'Available'),
(20, 'San Isidro Labrador', 249, 'Fiber Resin, Acrylic Paint, Wood', '12 x 12 x 12 inches', 90, 'chibi5.jpeg', '2023-11-13 08:43:48', 'Available'),
(21, 'St. Perigrine', 125, 'Fiber Resin, Acrylic Paint, Wood', '12 x 12 x 10 inches', 30, 'chibi6.jpeg', '2023-11-13 08:43:48', 'Available'),
(22, 'Our Lady of Mediatrix', 388, 'Fiber Resin, Acrylic Paint, Wood', '12 x 12 x 11 inches', 65, 'chibi7.jpeg', '2023-11-13 08:43:48', 'Available'),
(23, 'Holy Cross', 175, 'Fiber Resin, Acrylic Paint, Wood', '12 x 12 x 11 inches', 25, 'chibi8.jpeg', '2023-11-13 08:43:48', 'Available'),
(24, 'The Resurrection of Jesus', 200, 'Fiber Resin, Acrylic Paint, Wood', '12 x 12 x 12 inches', 40, 'chibi9.jpeg', '2023-11-13 08:43:48', 'Available'),
(25, 'Immaculate Heart of Mary', 275, 'Fiber Resin, Acrylic Paint, Wood', '12 x 12 x 10 inches', 80, 'chibi10.jpeg', '2023-11-13 08:43:48', 'Available'),
(32, 'Sample Product', 1000, 'Sample', '12 x 12 x 12 inches', 20, '042f0ff7-b013-470e-a794-038a2529ac50.jfif', '2024-04-19 19:18:12', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(12) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` text NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `first_name`, `last_name`, `birthday`, `gender`, `mobile_number`, `email`, `password`, `date_created`) VALUES
(28, 'Tian', 'Deladia', '2023-09-04', 'male', '09396004981', '', '$2y$10$XJBy6miEJDzDmrn98Cb7hevpQMiT.0HbJbFiZ5HSvN4.4Y1MiYsDS', '2023-09-27 12:14:23'),
(29, 'Xtian', 'D', '2023-09-14', 'male', '09053253624', '', '4416d8b6c9340e6e17dbd731e64b423c0a3dbbb3', '2023-09-27 21:33:27'),
(30, 'lenlen', 'FINDS', '2001-12-05', 'female', '09123456789', '', '$2y$10$w/ZuIvQ8vMw3L9jbkJvXBOV61oRoHAQFi3pZkQWvenWV/bLSuKsSO', '2023-09-28 19:02:30'),
(31, 'yanyan', 'yan', '2023-10-20', 'male', '09789456123', 'yanyan@gmail.com', '$2y$10$H//o4pPBlP9r1c3y.Il3ue1wcKMQOAcQWXTzpjrmlto8rTx38XhkC', '2023-10-20 22:14:27'),
(32, 'lenlen', 'len', '2023-10-01', 'female', '09512777643', 'lenlen@gmail.com', '$2y$10$YK4pcPgHg.64srqQsxDiKezNKDibkM3Z/2jaYCcw7iwSBZ7jRLe6i', '2023-10-22 13:57:44'),
(33, 'Christian', 'Deladia', '2023-01-24', 'male', '09396004981', 'tian@gmail.com', '$2y$10$Dr8uP9D0KNXRQBtkaPFlMuPejEYu21wmImQEv9mWDX.DZRTG36W4G', '2023-12-11 09:07:22'),
(36, 'MARITES', 'GARCIA', '2024-03-06', 'female', '09060227839', 'redryan1515@gmail.com', '$2y$10$uO25KQqK9zsieoVt1.9NVuvLBpgGBZBlwIDK20uyCCalRJpBZR5gq', '2024-03-28 19:31:18'),
(37, 'Romelyn', 'Leynes', '2001-11-02', 'female', '09751135769', 'lenlenleynes0222@gmail.com', '$2y$10$WKY9eOaFogcGC2ZrFNrVwO10BEiE.2N9yCqrmgBXXuxQnAsIwbe.C', '2024-04-01 17:10:28'),
(39, 'Christian', 'Deladia', '2024-04-09', 'male', '09396004981', 'tiangaming000@gmail.com', '$2y$10$0Y/YxVH1Wkm7KeMlaN7yjOAy5iQpciuoj1ygWtP38JM0ZdPem55Ca', '2024-04-13 11:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `mass`
--

CREATE TABLE `mass` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `reference_id` varchar(20) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mass`
--

INSERT INTO `mass` (`id`, `client_id`, `user_email`, `user_first_name`, `reference_id`, `purpose`, `name`, `date`, `date_added`, `customer_id`, `customer_name`) VALUES
(119, 36, 'redryan1515@gmail.com', 'MARITES', 'mass-66291252cee46', 'For Thanks Giving', 'awdaw', '2024-04-26', '2024-04-24 22:08:18', 0, ''),
(120, 36, 'redryan1515@gmail.com', 'MARITES', 'mass-662917336ddf9', 'For Thanks Giving', 'awdaw', '2024-04-26', '2024-04-24 22:29:07', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mass_approve`
--

CREATE TABLE `mass_approve` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `reference_id` varchar(20) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mass_complete`
--

CREATE TABLE `mass_complete` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `reference_id` varchar(20) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mass_complete`
--

INSERT INTO `mass_complete` (`id`, `client_id`, `user_email`, `user_first_name`, `reference_id`, `purpose`, `name`, `date`, `date_added`) VALUES
(13, 39, 'tiangaming000@gmail.com', 'Christian', '6619fa8d6e825', 'For Birthdays', 'Christian Deladia', '2024-04-13', '2024-04-13 11:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `mass_decline`
--

CREATE TABLE `mass_decline` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `reference_id` varchar(20) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `reason` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(20) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `services` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `reference_id`, `date_added`, `services`, `status`, `customer_id`, `customer_name`) VALUES
(110, 'wedding-6619df660ded', '2024-04-13 09:27:02', 'Wedding', 'read', 38, 'Tian Gaming'),
(111, 'wedding-6619dfbc37ee', '2024-04-13 09:28:28', 'Wedding', 'read', 38, 'Tian Gaming'),
(112, 'wedding-6619e0105b66', '2024-04-13 09:29:52', 'Wedding', 'read', 38, 'Tian Gaming'),
(113, 'wedding-6619e0d7d52f', '2024-04-13 09:33:11', 'Wedding', 'read', 38, 'Tian Gaming'),
(114, 'wedding-6619e3b882f2', '2024-04-13 09:45:28', 'Wedding', 'read', 38, 'Tian Gaming'),
(115, 'mass-6619fa0f03a05', '2024-04-13 11:20:47', 'Mass', 'read', 39, 'Christian Deladia'),
(116, '6619facb29bf1', '2024-04-13 11:23:55', 'Baptismal Certificate', 'read', 39, 'Christian Deladia'),
(117, 'mass-66291252cee46', '2024-04-24 22:08:18', 'Mass', 'unread', 36, 'MARITES GARCIA'),
(118, 'mass-662917336ddf9', '2024-04-24 22:29:07', 'Mass', 'unread', 36, 'MARITES GARCIA');

-- --------------------------------------------------------

--
-- Table structure for table `notification_client`
--

CREATE TABLE `notification_client` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(20) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `services` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `apply_status` varchar(50) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification_client`
--

INSERT INTO `notification_client` (`id`, `reference_id`, `date_added`, `services`, `status`, `customer_id`, `customer_name`, `apply_status`, `reason`, `remarks`) VALUES
(15, '6619fa6157444', '2024-04-13 11:22:09', 'Mass', 'read', 39, 'Christian', 'Approve', '', ''),
(16, '6619fa8d6e825', '2024-04-13 11:22:53', 'Mass', 'read', 39, 'Christian', 'Complete', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification_decline`
--

CREATE TABLE `notification_decline` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(20) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `services` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `apply_status` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification_decline`
--

INSERT INTO `notification_decline` (`id`, `reference_id`, `date_added`, `services`, `status`, `customer_id`, `customer_name`, `apply_status`, `reason`, `remarks`) VALUES
(1, '661968cda1666', '2024-04-13 01:01:01', 'Mass', 'unread', 37, 'Romelyn', 'Decline', 'Scheduling Conflicts', 'kindly apply again but in other date');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `group_order` varchar(250) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `product_price` double NOT NULL DEFAULT 0,
  `product_quantity` int(20) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `order_username` varchar(50) NOT NULL,
  `order_phonenumber` varchar(50) NOT NULL,
  `order_address` varchar(150) NOT NULL,
  `order_payment` varchar(50) NOT NULL,
  `order_courier` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `group_order`, `customer_id`, `product_name`, `product_description`, `product_price`, `product_quantity`, `product_image`, `date_added`, `order_username`, `order_phonenumber`, `order_address`, `order_payment`, `order_courier`, `status`) VALUES
(91, '6619f9bc7ed73', 39, 'Holy Trinity', '', 449, 2, 'chibi1.jpeg', '2024-04-13 11:19:24', 'Christian Deladia', '09396004981', 'phase 3, Pandi, Bulacan,                            Region III (Central Luzon), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(92, '6621ff7939d00', 31, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-19 13:22:01', 'TIAN Deladia', '09396004981', 'phase 3, Cabagan, Isabela,                            Region II (Cagayan Valley), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(93, '6621ff9b68726', 31, 'San Roque', '', 189, 2, 'chibi4.jpeg', '2024-04-19 13:22:35', 'TIAN Deladia', '09396004981', 'phase 3, City Of Balanga (Capital), Bataan,                            Region III (Central Luzon), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(94, '6621ffce8af7a', 31, 'San Roque', '', 189, 2, 'chibi4.jpeg', '2024-04-19 13:23:26', 'TIAN Deladia', '09396004981', 'phase 3, City Of Balanga (Capital), Bataan,                            Region III (Central Luzon), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(95, '662206b43abfe', 31, 'San Roque', '', 189, 2, 'chibi4.jpeg', '2024-04-19 13:52:52', 'TIAN Deladia', '09396004981', 'phase 3, Cabagan, Isabela,                            Region II (Cagayan Valley), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(96, '662207a43136a', 31, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-19 13:56:52', 'TIAN Deladia', '09396004981', 'phase 3, Cabagan, Isabela,                            Region II (Cagayan Valley), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(97, '6622080459612', 31, 'San Roque', '', 189, 2, 'chibi4.jpeg', '2024-04-19 13:58:28', 'TIAN Deladia', '09396004981', 'phase 3, Cabagan, Isabela,                            Region II (Cagayan Valley), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(98, '6622396b5141e', 39, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-19 17:29:15', 'Christian Deladia', '09396004981', 'phase 3, Pandi, Bulacan,                            Region III (Central Luzon), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(99, '66223c05e6d52', 39, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-19 17:40:21', 'Christian Deladia', '09396004981', 'phase 3, Pandi, Bulacan,                            Region III (Central Luzon), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(100, '66223c5669c54', 39, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-19 17:41:42', 'Christian Deladia', '09396004981', 'phase 3, Pandi, Bulacan,                            Region III (Central Luzon), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(101, '66223cfb51ac8', 39, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-19 17:44:27', 'Christian Deladia', '09396004981', 'phase 3, Pandi, Bulacan,                            Region III (Central Luzon), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(102, '66223e2844c91', 39, 'San Roque', '', 189, 2, 'chibi4.jpeg', '2024-04-19 17:49:28', 'Christian Deladia', '09396004981', 'phase 3, Pandi, Bulacan,                            Region III (Central Luzon), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(103, '66223e999276c', 39, 'San Roque', '', 189, 2, 'chibi4.jpeg', '2024-04-19 17:51:21', 'Christian Deladia', '09396004981', 'phase 3, Pandi, Bulacan,                            Region III (Central Luzon), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(104, '66223ec9dff87', 39, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-19 17:52:09', 'Christian Deladia', '09396004981', 'phase 3, Pandi, Bulacan,                            Region III (Central Luzon), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(105, '66231a7258dbb', 31, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-20 09:29:22', 'TIAN Deladia', '09396004981', 'phase 3, Cabagan, Isabela,                            Region II (Cagayan Valley), 3014', 'Cash on Delivery', 'J&T', 'Order Placed'),
(106, '6623ac8117913', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-20 19:52:33', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                            Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(107, '6623b306cf58b', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-20 20:20:22', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                            Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(108, '6623b3853dfd7', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-20 20:22:29', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                            Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(109, '6623b94065dd3', 36, 'Sample Product', '', 1000, 1, '042f0ff7-b013-470e-a794-038a2529ac50.jfif', '2024-04-20 20:46:56', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                            Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(110, '6623be92b6a1c', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-20 21:09:38', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                            Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(111, '6623beb8c1135', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-20 21:10:16', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                            Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(112, '6623bec6e9496', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-20 21:10:30', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                            Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(113, '6623bedb826fa', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-20 21:10:51', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                            Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(114, '6623bf27a2f12', 36, 'Holy Cross', '', 175, 1, 'chibi8.jpeg', '2024-04-20 21:12:07', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                            Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(115, '6623bf63bd8d8', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-20 21:13:07', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                            Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(116, '6623bfb33bfb6', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-20 21:14:27', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                            Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(117, '6623c5af1d896', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-20 21:39:59', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(118, '6623c5ef5622c', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-20 21:41:03', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(119, '6623c60f648a3', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-20 21:41:35', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(120, '6623c62726374', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-20 21:41:59', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(121, '6623c650e9eb6', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-20 21:42:40', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(122, '6623c650e9eb6', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-20 21:42:40', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(123, '662738e3036cd', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-23 12:28:19', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(124, '66273e5c50ddd', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-23 12:51:40', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(125, '66273e6e5a681', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-23 12:51:58', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(126, '662742915e060', 36, 'Holy Trinity', '', 449, 2, 'chibi1.jpeg', '2024-04-23 13:09:37', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(127, '662749bd868e9', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-23 13:40:13', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(128, '66274f06b1433', 36, 'Sample Product', '', 1000, 1, '042f0ff7-b013-470e-a794-038a2529ac50.jfif', '2024-04-23 14:02:46', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(129, '66274f06b1433', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-23 14:02:46', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(130, '66274f1991a15', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-23 14:03:05', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(131, '66274f6665125', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-23 14:04:22', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(132, '66274f8f4d904', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-23 14:05:03', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(133, '66274fb566fa7', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-23 14:05:41', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(134, '662750d0a399a', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-23 14:10:24', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(135, '662750ef83efc', 36, 'Sample Product', '', 1000, 1, '042f0ff7-b013-470e-a794-038a2529ac50.jfif', '2024-04-23 14:10:55', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(136, '66291193b3532', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-24 22:05:07', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(137, '662a2690b512c', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-25 17:46:56', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(138, '662a28c6c7e9b', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-25 17:56:22', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(139, '662a294838218', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-25 17:58:32', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(140, '662a363b6b3bb', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-25 18:53:47', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(141, '662a3767c86c2', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-25 18:58:47', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(142, '662a3767c86c2', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-25 18:58:47', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(143, '662a3767c86c2', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-25 18:58:47', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(144, '662a50ff97221', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-25 20:47:59', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(145, '662a50ff97221', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-25 20:47:59', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(146, '662a50ff97221', 36, 'The Resurrection of Jesus', '', 200, 1, 'chibi9.jpeg', '2024-04-25 20:47:59', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(147, '662a55b486a95', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-25 21:08:04', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(148, '662a55b486a95', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-25 21:08:04', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(149, '662a55cc49711', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-25 21:08:28', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(150, '662a55cc49711', 36, 'Our Lady of Mediatrix', '', 388, 1, 'chibi7.jpeg', '2024-04-25 21:08:28', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(151, '662a588bcc83e', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-25 21:20:11', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(152, '662a59f0a04f5', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-25 21:26:08', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(153, '662a5a1adf7c7', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-25 21:26:50', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(154, '662a5a3d449b3', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-25 21:27:25', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(155, '662a5a5f18401', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-25 21:27:59', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(156, '662bc4fb94868', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-26 23:15:07', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(157, '662bc5234c98d', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-26 23:15:47', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(158, '662bc5234c98d', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-26 23:15:47', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(159, '662bc5234c98d', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-26 23:15:47', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(160, '662bc58b073f7', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-26 23:17:31', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(161, '662bc58b073f7', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-26 23:17:31', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(162, '662bc9099012d', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-26 23:32:25', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(163, '662bd6ebe1ce0', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-27 00:31:39', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(164, '662bd6ebe1ce0', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-27 00:31:39', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(165, '662bda66e12b6', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-27 00:46:30', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(166, '662bdb4756a46', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-27 00:50:15', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(167, '662bdb4756a46', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-27 00:50:15', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(168, '662bdbc428b6e', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-27 00:52:20', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(169, '662bdbc428b6e', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-27 00:52:20', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(170, '662bdf87a3466', 36, 'Immaculate Heart of Mary', '', 275, 1, 'chibi10.jpeg', '2024-04-27 01:08:23', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(171, '662bdf87a3466', 36, 'The Resurrection of Jesus', '', 200, 1, 'chibi9.jpeg', '2024-04-27 01:08:23', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(172, '662be202c3df0', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-27 01:18:58', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(173, '662be202c3df0', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-27 01:18:58', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(174, '662be27f1c966', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-27 01:21:03', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(175, '662be27f1c966', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-27 01:21:03', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(176, '662be2dd9ba59', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-27 01:22:37', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(177, '662be356b1916', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-27 01:24:38', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(178, '662be3c4d8b76', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-27 01:26:28', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(179, '662be3c4d8b76', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-27 01:26:28', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(180, '662be6bc13d47', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-27 01:39:08', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(181, '662be6bc13d47', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-27 01:39:08', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(182, '662be6bc13d47', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-27 01:39:08', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(183, '662bed4967608', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-27 02:07:05', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(184, '662bed4967608', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-27 02:07:05', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(185, '662bf2d197636', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-27 02:30:41', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(186, '662bf2d197636', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-27 02:30:41', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(187, '662bf67a0b941', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-27 02:46:18', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(188, '662bf67a0b941', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-27 02:46:18', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(189, '662c371b47b7c', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-27 07:22:03', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(190, '662cd284887fd', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-27 18:25:08', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(191, '662cd284887fd', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-27 18:25:08', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(192, '662dd74f26c2e', 36, 'Sacred Heart of Jesus', '', 339, 2, 'chibi2.jpeg', '2024-04-28 12:57:51', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(193, '662dd74f26c2e', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 12:57:51', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(194, '662dd760e3134', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 12:58:08', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(195, '662dd760e3134', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 12:58:08', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(196, '662de5d7d637e', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 13:59:51', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(197, '662de5d7d637e', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 13:59:52', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(198, '662de74fc3822', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 14:06:07', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(199, '662de74fc3822', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-28 14:06:07', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(200, '662de81883b58', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 14:09:28', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(201, '662de81883b58', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-28 14:09:28', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(202, '662de84f4b4aa', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 14:10:23', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(203, '662de84f4b4aa', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-28 14:10:23', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(204, '662de8a6b8411', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 14:11:50', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(205, '662de8a6b8411', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-28 14:11:50', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(206, '662de8ce3bee0', 36, 'St. Rita of Cascia', '', 249, 2, 'chibi3.jpeg', '2024-04-28 14:12:30', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(207, '662de8ce3bee0', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-28 14:12:30', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(208, '662deb87972a4', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 14:24:07', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(209, '662deb87972a4', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 14:24:07', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(210, '662e2983c3d45', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 18:48:35', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(211, '662e29b7de72d', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 18:49:27', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(212, '662e29b7de72d', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 18:49:27', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(213, '662e29b7de72d', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 18:49:28', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(214, '662e418852f64', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 20:31:04', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(215, '662e418852f64', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 20:31:04', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(216, '662e420ede543', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 20:33:18', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(217, '662e420ede543', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-28 20:33:18', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(218, '662e456e11b74', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 20:47:42', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(219, '662e456e11b74', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 20:47:42', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(220, '662e4647b5362', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 20:51:19', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(221, '662e4647b5362', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 20:51:19', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(222, '662e5ba7591af', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 22:22:31', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(223, '662e5ba7591af', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-28 22:22:31', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(224, '662e5bc075b19', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 22:22:56', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(225, '662e5db949aa1', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 22:31:21', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(226, '662e5db949aa1', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-28 22:31:21', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(227, '662e5f207985f', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 22:37:20', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(228, '662e5f207985f', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 22:37:20', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(229, '662e5f207985f', 36, 'Sample Product', '', 1000, 1, '042f0ff7-b013-470e-a794-038a2529ac50.jfif', '2024-04-28 22:37:20', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(230, '662e60f6d3861', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 22:45:10', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(231, '662e60f6d3861', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 22:45:10', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(232, '662e61554066d', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 22:46:45', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(233, '662e61554066d', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-28 22:46:45', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(234, '662e6250d36b9', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 22:50:56', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(235, '662e6250d36b9', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-28 22:50:56', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(236, '662e627527b16', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 22:51:33', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(237, '662e627527b16', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-28 22:51:33', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(238, '662e62e4381f3', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 22:53:24', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(239, '662e62e4381f3', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-28 22:53:24', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(240, '662e634e399f3', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-28 22:55:10', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(241, '662e634e399f3', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 22:55:10', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(242, '662e634e399f3', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 22:55:10', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(243, '662e63a5e594d', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 22:56:37', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(244, '662e63a5e594d', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-28 22:56:37', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(245, '662e640c86046', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 22:58:20', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(246, '662e6425041d5', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 22:58:45', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(247, '662e6425041d5', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 22:58:45', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(248, '662e64c41c2bc', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 23:01:24', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(249, '662e64c41c2bc', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 23:01:24', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(250, '662e652d5ac3f', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 23:03:09', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(251, '662e652d5ac3f', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 23:03:09', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(252, '662e659f30fef', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 23:05:03', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(253, '662e659f30fef', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 23:05:03', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(254, '662e6664f1683', 36, 'San Roque', '', 189, 2, 'chibi4.jpeg', '2024-04-28 23:08:20', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(255, '662e6664f1683', 36, 'Sample Product', '', 1000, 1, '042f0ff7-b013-470e-a794-038a2529ac50.jfif', '2024-04-28 23:08:20', 'MARITES GARCIA', '09060227839', '21 Pritil Street, Bay, Laguna,                                Region IV-A (CALABARZON), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(256, '662e66a715aa7', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 23:09:27', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(257, '662e66a715aa7', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 23:09:27', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(258, '662e66a715aa7', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 23:09:27', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(259, '662e66cfe069d', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 23:10:07', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(260, '662e66cfe069d', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 23:10:07', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(261, '662e67278f32d', 36, 'Holy Trinity', '', 449, 1, 'chibi1.jpeg', '2024-04-28 23:11:35', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(262, '662e67278f32d', 36, 'St. Rita of Cascia', '', 249, 1, 'chibi3.jpeg', '2024-04-28 23:11:35', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(263, '662e6770d7f17', 36, 'San Roque', '', 189, 1, 'chibi4.jpeg', '2024-04-28 23:12:48', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(264, '662e6770d7f17', 36, 'San Isidro Labrador', '', 249, 1, 'chibi5.jpeg', '2024-04-28 23:12:48', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed'),
(265, '662e6886d0903', 36, 'Sacred Heart of Jesus', '', 339, 1, 'chibi2.jpeg', '2024-04-28 23:17:26', 'MARITES GARCIA', '09351234567', '21 Pritil Street, Pandi, Bulacan,                                Region III (Central Luzon), 301414', 'Cash on Delivery', 'J&T', 'Order Placed');

-- --------------------------------------------------------

--
-- Table structure for table `orders_arrange`
--

CREATE TABLE `orders_arrange` (
  `id` int(11) NOT NULL,
  `group_order` varchar(250) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `product_price` double NOT NULL DEFAULT 0,
  `product_quantity` int(20) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `order_username` varchar(50) NOT NULL,
  `order_phonenumber` varchar(50) NOT NULL,
  `order_address` varchar(150) NOT NULL,
  `order_payment` varchar(50) NOT NULL,
  `order_courier` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sickcall`
--

CREATE TABLE `sickcall` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `patients_name` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `room_number` int(20) NOT NULL,
  `illness` varchar(50) NOT NULL,
  `can_eat` varchar(5) NOT NULL,
  `can_speak` varchar(5) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sickcall_approve`
--

CREATE TABLE `sickcall_approve` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `reference_id` varchar(250) NOT NULL,
  `patients_name` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `hospital` varchar(250) NOT NULL,
  `room_number` int(10) NOT NULL,
  `illness` varchar(100) NOT NULL,
  `can_eat` text NOT NULL,
  `can_speak` text NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sickcall_complete`
--

CREATE TABLE `sickcall_complete` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_first_name` int(255) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `patients_name` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `room_number` int(20) NOT NULL,
  `illness` varchar(50) NOT NULL,
  `can_eat` varchar(5) NOT NULL,
  `can_speak` varchar(5) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sickcall_complete`
--

INSERT INTO `sickcall_complete` (`id`, `client_id`, `user_email`, `user_first_name`, `reference_id`, `patients_name`, `age`, `address`, `hospital`, `room_number`, `illness`, `can_eat`, `can_speak`, `contact_person`, `contact_number`, `date_added`, `date`, `time`) VALUES
(6, 38, 'tiangaming000@gmail.com', 0, '6617746bedd63', 'jUAN', 99, 'PANDI', 'MALOLOS', 123, 'HEART ATTAACK', 'Yes', 'Yes', 'Yan', '09396004981', '2024-04-11 13:26:03', '2024-04-11', '13:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `sickcall_decline`
--

CREATE TABLE `sickcall_decline` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `patients_name` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `room_number` int(20) NOT NULL,
  `illness` varchar(50) NOT NULL,
  `can_eat` varchar(5) NOT NULL,
  `can_speak` varchar(5) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reason` varchar(250) NOT NULL,
  `remarks` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sickcall_decline`
--

INSERT INTO `sickcall_decline` (`id`, `client_id`, `user_email`, `user_first_name`, `reference_id`, `patients_name`, `age`, `address`, `hospital`, `room_number`, `illness`, `can_eat`, `can_speak`, `contact_person`, `contact_number`, `date_added`, `date`, `time`, `reason`, `remarks`) VALUES
(11, 38, 'tiangaming000@gmail.com', 'Tian', '6617745a6c394', 'jUAN', 99, 'PANDI', 'MALOLOS', 123, 'HEART ATTAACK', 'Yes', 'Yes', 'Yan', '09396004981', '2024-04-11 13:25:46', '2024-04-11', '13:22:00', 'Concerns about the Purpose or Intent', 'ADAD');

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `psa_cenomar_photocopy_groom` varchar(200) NOT NULL,
  `psa_cenomar_photocopy_bride` varchar(200) NOT NULL,
  `baptismal_certificates_groom` varchar(200) NOT NULL,
  `baptismal_certificates_bride` varchar(250) NOT NULL,
  `confirmation_certificates` varchar(200) NOT NULL,
  `psa_birth_certificate_photocopy_groom` varchar(200) NOT NULL,
  `psa_birth_certificate_photocopy_bride` varchar(250) NOT NULL,
  `id_picture_groom` varchar(200) NOT NULL,
  `id_picture_bride` varchar(250) NOT NULL,
  `computerized_name_of_sponsors` varchar(200) NOT NULL,
  `groom_name` varchar(50) NOT NULL,
  `groom_age` int(2) NOT NULL,
  `groom_father_name` varchar(50) NOT NULL,
  `groom_mother_name` varchar(50) NOT NULL,
  `bride_name` varchar(50) NOT NULL,
  `bride_age` int(2) NOT NULL,
  `bride_father_name` varchar(50) NOT NULL,
  `bride_mother_name` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`id`, `reference_id`, `psa_cenomar_photocopy_groom`, `psa_cenomar_photocopy_bride`, `baptismal_certificates_groom`, `baptismal_certificates_bride`, `confirmation_certificates`, `psa_birth_certificate_photocopy_groom`, `psa_birth_certificate_photocopy_bride`, `id_picture_groom`, `id_picture_bride`, `computerized_name_of_sponsors`, `groom_name`, `groom_age`, `groom_father_name`, `groom_mother_name`, `bride_name`, `bride_age`, `bride_father_name`, `bride_mother_name`, `date_added`) VALUES
(90, 'wedding-6619e3b882f2a', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712972492/snewdfhckugmr16kzdbn.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712972495/nvdmxg7vksrfouhsurgy.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712972497/sazaooo9jiexh6pakoen.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712972499/rvmajrp75nacimxysepw.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712972510/vrwz1shngt1nrangj1t6.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712972501/tvvbooy6rhk6vcm4ymfu.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712972504/ecm6gn1vjkpprtnlj5lf.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712972506/kujvugva6ci7xkxxyqze.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712972508/vnynljzfbfmjngyf3yhc.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712972512/aaqstypsdaimftrqeaht.pdf', 'Mark Cruz', 30, 'Pedro Jacinto', 'Padra Jacinto', 'Luna Rodriguez', 30, 'Kiko Mercedes', 'Kate Mercedes', '2024-04-13 09:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_approve`
--

CREATE TABLE `wedding_approve` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `psa_cenomar_photocopy_groom` varchar(200) NOT NULL,
  `psa_cenomar_photocopy_bride` varchar(200) NOT NULL,
  `baptismal_certificates_groom` varchar(200) NOT NULL,
  `baptismal_certificates_bride` varchar(250) NOT NULL,
  `confirmation_certificates` varchar(200) NOT NULL,
  `psa_birth_certificate_photocopy_groom` varchar(200) NOT NULL,
  `psa_birth_certificate_photocopy_bride` varchar(250) NOT NULL,
  `id_picture_groom` varchar(200) NOT NULL,
  `id_picture_bride` varchar(250) NOT NULL,
  `computerized_name_of_sponsors` varchar(200) NOT NULL,
  `groom_name` varchar(50) NOT NULL,
  `groom_age` int(2) NOT NULL,
  `groom_father_name` varchar(50) NOT NULL,
  `groom_mother_name` varchar(50) NOT NULL,
  `bride_name` varchar(50) NOT NULL,
  `bride_age` int(2) NOT NULL,
  `bride_father_name` varchar(50) NOT NULL,
  `bride_mother_name` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding_approve`
--

INSERT INTO `wedding_approve` (`id`, `reference_id`, `psa_cenomar_photocopy_groom`, `psa_cenomar_photocopy_bride`, `baptismal_certificates_groom`, `baptismal_certificates_bride`, `confirmation_certificates`, `psa_birth_certificate_photocopy_groom`, `psa_birth_certificate_photocopy_bride`, `id_picture_groom`, `id_picture_bride`, `computerized_name_of_sponsors`, `groom_name`, `groom_age`, `groom_father_name`, `groom_mother_name`, `bride_name`, `bride_age`, `bride_father_name`, `bride_mother_name`, `date_added`) VALUES
(16, '6619e0105cf37', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971385/p1khw90oykmsyju0buyy.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971388/imctjnvwef49xlxob3om.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971390/qm40do4bkcydbbs8nt4d.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971393/uomr7wdytlablyl4ny4k.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971403/yyrelkz6xa2eoqsmgoeo.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971395/xi8rgoovpwwf0qcrwela.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971397/zyzretvziz6jpm0msoew.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971399/aqlqlhszqvffhwnpu1qj.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971401/jkiitunflfbqzwarfaco.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971406/jywr7d2enxm1v4smvbm0.pdf', 'Juan Jacinto', 25, 'Pedro Jacinto', 'Padra Jacinto', 'Maria Mercedes', 25, 'Kiko Mercedes', 'Kate Mercedes', '2024-04-13 09:29:52'),
(17, '6619e0105ebc7', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '2024-04-13 09:29:52'),
(18, '6619e038ded5f', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971471/eviuonj3uhtljgbuvi9e.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971474/udmhkk0bpkbzmjrk1g69.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971476/mmeyzf7rlhgo1woqsyhp.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971478/pdmf4xxeurrf0nnmnqpg.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971489/kpr90xpfm16oyk2gu6xn.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971480/xtrjci4iigbphxuiawyn.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971483/uqj7nr8a9s7aniqfeljv.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971485/pphrpkpd4pkmiy945qh8.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971487/b96du6ehjg8rncnmozhm.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971492/p9ovmn3xe721yvvdm9bb.pdf', 'Pedro De Jesus', 27, 'Pedro Jacinto', 'Padra Jacinto', 'Thesa Marquez', 24, 'Kiko Mercedes', 'Kate Mercedes', '2024-04-13 09:30:32'),
(19, '6619e03d11d2b', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971554/v5hh3rnhcz2zyc4jg2qq.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971556/aude5bgu4o12uvywtsur.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971558/yjpud8mjorynyenudrhl.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971561/epsirkpdv61g3hfxemxq.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971573/g3yhvpupx4bi0ofyjlrs.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971563/ydlrmrwdgphk5hgnhod3.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971566/qqsafviy45xiq6qh0jnn.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971569/iztrabe58vjzqg72alig.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971571/x5kq2vwbjnsxvwzt34t0.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971575/piwgrzat7qsu1gdwtrxy.pdf', 'Lito Lapuz', 23, 'Pedro Jacinto', 'Padra Jacinto', 'Melissa Enriquez', 23, 'Kiko Mercedes', 'Kate Mercedes', '2024-04-13 09:30:37'),
(20, '6619e0faa4df4', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971756/irgn00shmkzlb3xmyh7f.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971758/govci0j36krbauoyyrkp.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971760/d9pn8ongtb9lsef8hjg4.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971763/vtnesblk98ypmoo9wzux.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971773/ztsvolkow1usjdbu8fyo.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971765/i36jvdhaxe5scfmoowao.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971767/j3nufqpcnipozqqwn3jm.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971769/wweoqpfuoh2w1lelnmnr.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971771/xx6ofzvwljwh6hxjb2ya.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971775/lebnroc6msz4r5jyh3tc.pdf', 'Gary De Mesa', 30, 'Pedro Jacinto', 'Padra Jacinto', 'Faith Cruz', 26, 'Kiko Mercedes', 'Kate Mercedes', '2024-04-13 09:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_banns`
--

CREATE TABLE `wedding_banns` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `id_picture_groom` varchar(200) NOT NULL,
  `id_picture_bride` varchar(250) NOT NULL,
  `groom_name` varchar(50) NOT NULL,
  `groom_age` int(2) NOT NULL,
  `groom_father_name` varchar(50) NOT NULL,
  `groom_mother_name` varchar(50) NOT NULL,
  `bride_name` varchar(50) NOT NULL,
  `bride_age` int(2) NOT NULL,
  `bride_father_name` varchar(50) NOT NULL,
  `bride_mother_name` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding_banns`
--

INSERT INTO `wedding_banns` (`id`, `reference_id`, `id_picture_groom`, `id_picture_bride`, `groom_name`, `groom_age`, `groom_father_name`, `groom_mother_name`, `bride_name`, `bride_age`, `bride_father_name`, `bride_mother_name`, `date_added`, `status`) VALUES
(26, '661769cc51bec', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712810113/cvdo99maaoueirftstbb.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712810115/id3wi05wsm1q4rtzukyu.jpg', 'Juan Jacinto', 25, 'Pedro Jacinto', 'Padra Jacinto', 'Maria Mercedes', 25, 'Kiko Mercedes', 'Kate Mercedes', '2024-04-11 12:40:50', 'ended'),
(27, '6619e0105cf37', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971399/aqlqlhszqvffhwnpu1qj.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971401/jkiitunflfbqzwarfaco.png', 'Juan Jacinto', 25, 'Pedro Jacinto', 'Padra Jacinto', 'Maria Mercedes', 25, 'Kiko Mercedes', 'Kate Mercedes', '2024-04-13 09:30:26', 'ongoing'),
(28, '6619e0105ebc7', '', '', '', 0, '', '', '', 0, '', '', '2024-04-13 09:34:11', 'ended'),
(29, '6619e038ded5f', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971485/pphrpkpd4pkmiy945qh8.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971487/b96du6ehjg8rncnmozhm.jpg', 'Pedro De Jesus', 27, 'Pedro Jacinto', 'Padra Jacinto', 'Thesa Marquez', 24, 'Kiko Mercedes', 'Kate Mercedes', '2024-04-13 09:34:14', 'ongoing'),
(30, '6619e03d11d2b', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971569/iztrabe58vjzqg72alig.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971571/x5kq2vwbjnsxvwzt34t0.png', 'Lito Lapuz', 23, 'Pedro Jacinto', 'Padra Jacinto', 'Melissa Enriquez', 23, 'Kiko Mercedes', 'Kate Mercedes', '2024-04-13 09:34:17', 'ongoing'),
(31, '6619e0faa4df4', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971769/wweoqpfuoh2w1lelnmnr.png', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712971771/xx6ofzvwljwh6hxjb2ya.jpg', 'Gary De Mesa', 30, 'Pedro Jacinto', 'Padra Jacinto', 'Faith Cruz', 26, 'Kiko Mercedes', 'Kate Mercedes', '2024-04-13 09:34:21', 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_complete`
--

CREATE TABLE `wedding_complete` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `psa_cenomar_photocopy_groom` varchar(200) NOT NULL,
  `psa_cenomar_photocopy_bride` varchar(200) NOT NULL,
  `baptismal_certificates_groom` varchar(200) NOT NULL,
  `baptismal_certificates_bride` varchar(250) NOT NULL,
  `confirmation_certificates` varchar(200) NOT NULL,
  `psa_birth_certificate_photocopy_groom` varchar(200) NOT NULL,
  `psa_birth_certificate_photocopy_bride` varchar(250) NOT NULL,
  `id_picture_groom` varchar(200) NOT NULL,
  `id_picture_bride` varchar(250) NOT NULL,
  `computerized_name_of_sponsors` varchar(200) NOT NULL,
  `groom_name` varchar(50) NOT NULL,
  `groom_age` int(2) NOT NULL,
  `groom_father_name` varchar(50) NOT NULL,
  `groom_mother_name` varchar(50) NOT NULL,
  `bride_name` varchar(50) NOT NULL,
  `bride_age` int(2) NOT NULL,
  `bride_father_name` varchar(50) NOT NULL,
  `bride_mother_name` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding_complete`
--

INSERT INTO `wedding_complete` (`id`, `reference_id`, `psa_cenomar_photocopy_groom`, `psa_cenomar_photocopy_bride`, `baptismal_certificates_groom`, `baptismal_certificates_bride`, `confirmation_certificates`, `psa_birth_certificate_photocopy_groom`, `psa_birth_certificate_photocopy_bride`, `id_picture_groom`, `id_picture_bride`, `computerized_name_of_sponsors`, `groom_name`, `groom_age`, `groom_father_name`, `groom_mother_name`, `bride_name`, `bride_age`, `bride_father_name`, `bride_mother_name`, `date_added`) VALUES
(8, '661769cc51bec', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712810095/vtnncwn7rcsytczxsrat.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712810098/ybzdaf48gh8r33klxvhd.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712810102/e2lvt2ldxgjjkegpcgtl.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712810105/fwco5bavvum3y9bzuz2d.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712810117/oh7zqobpeosnjzsep9za.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712810108/prg0l1cnmzmjy2jxjs3m.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712810111/zbmnhjlotuhmiub7wvfy.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712810113/cvdo99maaoueirftstbb.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712810115/id3wi05wsm1q4rtzukyu.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712810120/c1mkr22bzmdph7oz5fhl.pdf', 'Juan Jacinto', 25, 'Pedro Jacinto', 'Padra Jacinto', 'Maria Mercedes', 25, 'Kiko Mercedes', 'Kate Mercedes', '2024-04-11 12:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_decline`
--

CREATE TABLE `wedding_decline` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(250) DEFAULT NULL,
  `psa_cenomar_photocopy_groom` varchar(200) NOT NULL,
  `psa_cenomar_photocopy_bride` varchar(200) NOT NULL,
  `baptismal_certificates_groom` varchar(200) NOT NULL,
  `baptismal_certificates_bride` varchar(250) NOT NULL,
  `confirmation_certificates` varchar(200) NOT NULL,
  `psa_birth_certificate_photocopy_groom` varchar(200) NOT NULL,
  `psa_birth_certificate_photocopy_bride` varchar(250) NOT NULL,
  `id_picture_groom` varchar(200) NOT NULL,
  `id_picture_bride` varchar(250) NOT NULL,
  `computerized_name_of_sponsors` varchar(200) NOT NULL,
  `groom_name` varchar(50) NOT NULL,
  `groom_age` int(2) NOT NULL,
  `groom_father_name` varchar(50) NOT NULL,
  `groom_mother_name` varchar(50) NOT NULL,
  `bride_name` varchar(50) NOT NULL,
  `bride_age` int(2) NOT NULL,
  `bride_father_name` varchar(50) NOT NULL,
  `bride_mother_name` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `reason` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding_decline`
--

INSERT INTO `wedding_decline` (`id`, `reference_id`, `psa_cenomar_photocopy_groom`, `psa_cenomar_photocopy_bride`, `baptismal_certificates_groom`, `baptismal_certificates_bride`, `confirmation_certificates`, `psa_birth_certificate_photocopy_groom`, `psa_birth_certificate_photocopy_bride`, `id_picture_groom`, `id_picture_bride`, `computerized_name_of_sponsors`, `groom_name`, `groom_age`, `groom_father_name`, `groom_mother_name`, `bride_name`, `bride_age`, `bride_father_name`, `bride_mother_name`, `date_added`, `reason`, `remarks`) VALUES
(4, '6617692f548f2', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712809930/g466qsi6zljlfxpyfowx.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712809932/tpjm1aohzxc6pawvxvkc.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712809935/k9pgemkinccmvi7rthby.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712809937/qp9ulyhlqmnumgq6pe2g.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712809949/ngv3kn3k1ibgg081r1rz.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712809940/vvpba7kdhj9isfsrccoo.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712809943/t0kopxom2c4fgmsi5b75.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712809945/kn4rt4qgetcz9xpbz7nz.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712809946/dw1ofy0xxgaaxsaatz9e.jpg', 'https://res.cloudinary.com/dvgh2uamq/image/upload/v1712809952/msnqklt22o0vx9j4srz7.pdf', 'Juan Jacinto', 25, 'Pedro Jacinto', 'Padra Jacinto', 'Maria Mercedes', 25, 'Kiko Mercedes', 'Kate Mercedes', '2024-04-11 12:38:07', 'Failure to Comply with Church Policies', 'sorry');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_request_certificate`
--

CREATE TABLE `wedding_request_certificate` (
  `id` int(11) NOT NULL,
  `reference_id` int(99) NOT NULL,
  `date_of_marriage` date NOT NULL,
  `place_of_marriage` varchar(250) NOT NULL,
  `groom_fname` varchar(250) NOT NULL,
  `groom_mname` varchar(250) NOT NULL,
  `groom_lname` varchar(250) NOT NULL,
  `bride_fname` varchar(250) NOT NULL,
  `bride_mname` varchar(250) NOT NULL,
  `bride_lname` varchar(250) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wedding_request_certificate_approve`
--

CREATE TABLE `wedding_request_certificate_approve` (
  `id` int(11) NOT NULL,
  `reference_id` int(99) NOT NULL,
  `date_of_marriage` date NOT NULL,
  `place_of_marriage` varchar(250) NOT NULL,
  `groom_fname` varchar(250) NOT NULL,
  `groom_mname` varchar(250) NOT NULL,
  `groom_lname` varchar(250) NOT NULL,
  `bride_fname` varchar(250) NOT NULL,
  `bride_mname` varchar(250) NOT NULL,
  `bride_lname` varchar(250) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wedding_request_certificate_complete`
--

CREATE TABLE `wedding_request_certificate_complete` (
  `id` int(11) NOT NULL,
  `reference_id` int(99) NOT NULL,
  `date_of_marriage` date NOT NULL,
  `place_of_marriage` varchar(250) NOT NULL,
  `groom_fname` varchar(250) NOT NULL,
  `groom_mname` varchar(250) NOT NULL,
  `groom_lname` varchar(250) NOT NULL,
  `bride_fname` varchar(250) NOT NULL,
  `bride_mname` varchar(250) NOT NULL,
  `bride_lname` varchar(250) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wedding_request_certificate_decline`
--

CREATE TABLE `wedding_request_certificate_decline` (
  `id` int(11) NOT NULL,
  `reference_id` int(99) NOT NULL,
  `date_of_marriage` date NOT NULL,
  `place_of_marriage` varchar(250) NOT NULL,
  `groom_fname` varchar(250) NOT NULL,
  `groom_mname` varchar(250) NOT NULL,
  `groom_lname` varchar(250) NOT NULL,
  `bride_fname` varchar(250) NOT NULL,
  `bride_mname` varchar(250) NOT NULL,
  `bride_lname` varchar(250) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `reason` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_login_deactive`
--
ALTER TABLE `admin_login_deactive`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `binyag`
--
ALTER TABLE `binyag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `binyag_approve`
--
ALTER TABLE `binyag_approve`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `binyag_complete`
--
ALTER TABLE `binyag_complete`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `binyag_decline`
--
ALTER TABLE `binyag_decline`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `binyag_request_certificate`
--
ALTER TABLE `binyag_request_certificate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `binyag_request_certificate_approve`
--
ALTER TABLE `binyag_request_certificate_approve`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `binyag_request_certificate_complete`
--
ALTER TABLE `binyag_request_certificate_complete`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `binyag_request_certificate_decline`
--
ALTER TABLE `binyag_request_certificate_decline`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `blessing`
--
ALTER TABLE `blessing`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `blessing_approve`
--
ALTER TABLE `blessing_approve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blessing_complete`
--
ALTER TABLE `blessing_complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blessing_decline`
--
ALTER TABLE `blessing_decline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funeral`
--
ALTER TABLE `funeral`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `funeral_approve`
--
ALTER TABLE `funeral_approve`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `funeral_complete`
--
ALTER TABLE `funeral_complete`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `funeral_decline`
--
ALTER TABLE `funeral_decline`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `hold_otp`
--
ALTER TABLE `hold_otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mass`
--
ALTER TABLE `mass`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `mass_approve`
--
ALTER TABLE `mass_approve`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `mass_complete`
--
ALTER TABLE `mass_complete`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `mass_decline`
--
ALTER TABLE `mass_decline`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `notification_client`
--
ALTER TABLE `notification_client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `notification_decline`
--
ALTER TABLE `notification_decline`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `orders_arrange`
--
ALTER TABLE `orders_arrange`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `sickcall`
--
ALTER TABLE `sickcall`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `sickcall_approve`
--
ALTER TABLE `sickcall_approve`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `sickcall_complete`
--
ALTER TABLE `sickcall_complete`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `sickcall_decline`
--
ALTER TABLE `sickcall_decline`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `wedding_approve`
--
ALTER TABLE `wedding_approve`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `wedding_banns`
--
ALTER TABLE `wedding_banns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `wedding_complete`
--
ALTER TABLE `wedding_complete`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `wedding_decline`
--
ALTER TABLE `wedding_decline`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_id` (`reference_id`);

--
-- Indexes for table `wedding_request_certificate`
--
ALTER TABLE `wedding_request_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_request_certificate_approve`
--
ALTER TABLE `wedding_request_certificate_approve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_request_certificate_complete`
--
ALTER TABLE `wedding_request_certificate_complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_request_certificate_decline`
--
ALTER TABLE `wedding_request_certificate_decline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `admin_login_deactive`
--
ALTER TABLE `admin_login_deactive`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binyag`
--
ALTER TABLE `binyag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `binyag_approve`
--
ALTER TABLE `binyag_approve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `binyag_complete`
--
ALTER TABLE `binyag_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `binyag_decline`
--
ALTER TABLE `binyag_decline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `binyag_request_certificate`
--
ALTER TABLE `binyag_request_certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `binyag_request_certificate_approve`
--
ALTER TABLE `binyag_request_certificate_approve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `binyag_request_certificate_complete`
--
ALTER TABLE `binyag_request_certificate_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `binyag_request_certificate_decline`
--
ALTER TABLE `binyag_request_certificate_decline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blessing`
--
ALTER TABLE `blessing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `blessing_approve`
--
ALTER TABLE `blessing_approve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blessing_complete`
--
ALTER TABLE `blessing_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blessing_decline`
--
ALTER TABLE `blessing_decline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `funeral`
--
ALTER TABLE `funeral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `funeral_approve`
--
ALTER TABLE `funeral_approve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `funeral_complete`
--
ALTER TABLE `funeral_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `funeral_decline`
--
ALTER TABLE `funeral_decline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hold_otp`
--
ALTER TABLE `hold_otp`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `mass`
--
ALTER TABLE `mass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `mass_approve`
--
ALTER TABLE `mass_approve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mass_complete`
--
ALTER TABLE `mass_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mass_decline`
--
ALTER TABLE `mass_decline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `notification_client`
--
ALTER TABLE `notification_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notification_decline`
--
ALTER TABLE `notification_decline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;

--
-- AUTO_INCREMENT for table `orders_arrange`
--
ALTER TABLE `orders_arrange`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sickcall`
--
ALTER TABLE `sickcall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `sickcall_approve`
--
ALTER TABLE `sickcall_approve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sickcall_complete`
--
ALTER TABLE `sickcall_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sickcall_decline`
--
ALTER TABLE `sickcall_decline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `wedding_approve`
--
ALTER TABLE `wedding_approve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wedding_banns`
--
ALTER TABLE `wedding_banns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `wedding_complete`
--
ALTER TABLE `wedding_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wedding_decline`
--
ALTER TABLE `wedding_decline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wedding_request_certificate`
--
ALTER TABLE `wedding_request_certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `wedding_request_certificate_approve`
--
ALTER TABLE `wedding_request_certificate_approve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wedding_request_certificate_complete`
--
ALTER TABLE `wedding_request_certificate_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wedding_request_certificate_decline`
--
ALTER TABLE `wedding_request_certificate_decline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
