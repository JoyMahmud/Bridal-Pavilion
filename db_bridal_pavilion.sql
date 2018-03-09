-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 07:21 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bridal_pavilion`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

CREATE TABLE `tbl_admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_login`
--

INSERT INTO `tbl_admin_login` (`admin_id`, `admin_name`, `email_address`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_description` text NOT NULL,
  `blog_picture` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_title`, `blog_description`, `blog_picture`, `publication_status`, `created_at`) VALUES
(2, 'Eid-Ul Fitar Special Offer', 'This is demo post. i am here for testing.', '01.jpg', 1, '3 Mar'),
(3, 'à¦¶à§à¦Ÿà¦¿à¦‚à§Ÿà§‡à¦° à¦«à¦¾à¦à¦•à§‡ à¦«à¦¾à¦°à¦¿à§Ÿà¦¾', 'â€˜à¦†à¦¤à¦™à§à¦•â€™ à¦¨à¦¾à¦Ÿà¦•à§‡à¦° à¦¶à§à¦Ÿà¦¿à¦‚à§Ÿà§‡à¦° à¦«à¦¾à¦à¦•à§‡ à¦…à¦­à¦¿à¦¨à§‡à¦¤à§à¦°à§€ à¦«à¦¾à¦°à¦¿à§Ÿà¦¾ à¦¶à¦¾à¦¹à¦°à¦¿à¦¨à¥¤ à¦…à¦¨à§à¦°à§à¦ª à¦†à¦‡à¦šà§‡à¦° à¦°à¦šà¦¨à¦¾à§Ÿ à¦¨à¦¾à¦Ÿà¦•à¦Ÿà¦¿ à¦ªà¦°à¦¿à¦šà¦¾à¦²à¦¨à¦¾ à¦•à¦°à§‡à¦›à§‡à¦¨ à¦•à¦¾à¦œà§€ à¦¸à¦¾à¦‡à¦« à¦†à¦¹à¦®à§‡à¦¦à¥¤ à¦¸à¦®à§à¦ªà§à¦°à¦¤à¦¿ à¦à¦«à¦¡à¦¿à¦¸à¦¿à¦¤à§‡ à¦¨à¦¾à¦Ÿà¦•à¦Ÿà¦¿à¦° à¦¶à§à¦Ÿà¦¿à¦‚ à¦•à¦°à¦¾ à¦¹à§Ÿà¥¤ â€˜à¦†à¦¤à¦™à§à¦•â€™ à¦¨à¦¾à¦Ÿà¦•à§‡à¦° à¦¶à§à¦Ÿà¦¿à¦‚à§Ÿà§‡à¦° à¦«à¦¾à¦à¦•à§‡ à¦…à¦­à¦¿à¦¨à§‡à¦¤à§à¦°à§€ à¦«à¦¾à¦°à¦¿à§Ÿà¦¾ à¦¶à¦¾à¦¹à¦°à¦¿à¦¨à¥¤ à¦…à¦¨à§à¦°à§à¦ª à¦†à¦‡à¦šà§‡à¦° à¦°à¦šà¦¨à¦¾à§Ÿ à¦¨à¦¾à¦Ÿà¦•à¦Ÿà¦¿ à¦ªà¦°à¦¿à¦šà¦¾à¦²à¦¨à¦¾ à¦•à¦°à§‡à¦›à§‡à¦¨ à¦•à¦¾à¦œà§€ à¦¸à¦¾à¦‡à¦« à¦†à¦¹à¦®à§‡à¦¦à¥¤ à¦¸à¦®à§à¦ªà§à¦°à¦¤à¦¿ à¦à¦«à¦¡à¦¿à¦¸à¦¿à¦¤à§‡ à¦¨à¦¾à¦Ÿà¦•à¦Ÿà¦¿à¦° à¦¶à§à¦Ÿà¦¿à¦‚ à¦•à¦°à¦¾ à¦¹à§Ÿà¥¤', '1516773157.jpg', 1, '05 Mar'),
(4, 'Online News Paper', 'Photography is one of the Best Profession now a days.. You can earn lots of money from here. Photography is one of the Best Profession now a days.. You can earn lots of money from here. Photography is one of the Best Profession now a days.. You can earn lots of money from here. Photography is one of the Best Profession now a days.. You can earn lots of money from here. Photography is one of the Best Profession now a days.. You can earn lots of money from here. Photography is one of the Best Profession now a days.. You can earn lots of money from here.', '3040SL02_B_040417.jpg', 1, '10 June');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_pakage`
--

CREATE TABLE `tbl_book_pakage` (
  `pakage_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `event_venu` varchar(255) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_date` varchar(100) NOT NULL,
  `event_start_time` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_book_pakage`
--

INSERT INTO `tbl_book_pakage` (`pakage_id`, `name`, `email`, `mobile`, `event_venu`, `event_name`, `event_date`, `event_start_time`, `message`) VALUES
(2, 'Joy Mahmud', 'joymahmud271@yahoo.com', '01689007325', 'Dhaka, pulpar community center', 'Marriage Ceremony', '24 Feb', '10 PM', 'rjkutghf'),
(3, 'Joy Mahmud', 'joymahmud271@yahoo.com', '01689007325', 'Dhaka, pulpar community center', 'Marriage Ceremony', '24 Feb', '10 PM', 'rjkutghf'),
(4, 'Tamjid Rokon', 'tamjidrokon@gmail.com', '15132123', 'Dhanmondi Party center', 'Sad party photography', '17 Mar', '6 PM', 'Its highly needed.'),
(5, 'Tuhin ', 'tuhin2324@gmail.com', '0145868523', 'Kolabagan, Dhaka-1209', 'Holud sonda', '6 Dec', '8 PM', 'Combo Pakage-1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_feedback`
--

CREATE TABLE `tbl_client_feedback` (
  `client_feedback_id` int(11) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `client_profession` varchar(100) NOT NULL,
  `feeadback_message` text NOT NULL,
  `client_image` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_client_feedback`
--

INSERT INTO `tbl_client_feedback` (`client_feedback_id`, `client_name`, `client_profession`, `feeadback_message`, `client_image`, `publication_status`) VALUES
(1, 'Joy Mahmud Rubel', 'Web Developer and Designeer', 'Bridal Pavilion team is really awesome. Few days ago, i hired a team of bridal pavilion. I got a fantastic service from them. I always want to hire them.', '1.jpg', 1),
(2, 'Tamjid Rokon', 'Business', 'Bridal Pavilion team is really awesome. Few days ago, i hired a team of bridal pavilion. I got a fantastic service from them. I always want to hire them.', 'saima.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `address`, `mobile`, `email`, `publication_status`) VALUES
(1, '389/2, Jafrabad, Mohammadpur, Dhaka-1207', '01689007325', 'joymahmud271@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_photo`
--

CREATE TABLE `tbl_gallery_photo` (
  `gallery_photo_id` int(50) NOT NULL,
  `gallery_photo` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery_photo`
--

INSERT INTO `tbl_gallery_photo` (`gallery_photo_id`, `gallery_photo`, `publication_status`) VALUES
(3, '20535857_1886218131703155_246512230_o.jpg', 1),
(4, 'Ashna Habib Bhabna (8).jpg', 1),
(5, '19748359_1398073300268681_3324817164233873063_n.jpg', 1),
(6, '01 (1).jpg', 1),
(7, 'CarolineStH.jpg', 1),
(8, '1.jpg', 1),
(9, '3634988-fastrack-party-analog-watch-for-men-silver-blue-picture-large.jpg', 1),
(10, '4.jpg', 1),
(11, '24232107_1843152452423084_7254319221960023831_n.jpg', 1),
(12, '24463048_2042881279279282_1885034773_o.jpg', 1),
(13, '24474637_2042881559279254_1534783010_o.jpg', 1),
(14, 'saima.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_video`
--

CREATE TABLE `tbl_gallery_video` (
  `gallery_video_id` int(11) NOT NULL,
  `gallery_video` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery_video`
--

INSERT INTO `tbl_gallery_video` (`gallery_video_id`, `gallery_video`, `publication_status`) VALUES
(1, 'https://www.youtube.com/embed/vlDRzcZGSjo', 1),
(2, 'https://www.youtube.com/embed/vlDRzcZGSjo', 1),
(3, 'https://www.youtube.com/embed/vlDRzcZGSjo', 1),
(4, 'https://www.youtube.com/embed/vlDRzcZGSjo', 1),
(5, 'https://www.youtube.com/embed/QqTWlZzZOG4', 1),
(6, 'https://www.youtube.com/embed/0Hnf_9Vutno', 1),
(7, 'https://www.youtube.com/embed/OY3eXvkCpTY', 1),
(8, 'https://www.youtube.com/embed/U-15m2IMSTY', 1),
(9, 'https://www.youtube.com/embed/Hd8-OLUIIOE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `logo_id` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`logo_id`, `logo`, `publication_status`) VALUES
(5, 'Logo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pakage`
--

CREATE TABLE `tbl_pakage` (
  `pakage_id` int(11) NOT NULL,
  `pakage_type` varchar(255) NOT NULL,
  `pakage_rate` varchar(255) NOT NULL,
  `provide_one` varchar(255) NOT NULL,
  `provide_two` varchar(255) NOT NULL,
  `provide_three` varchar(255) DEFAULT NULL,
  `provide_four` varchar(255) DEFAULT NULL,
  `provide_five` varchar(255) DEFAULT NULL,
  `provide_six` varchar(255) DEFAULT NULL,
  `provide_seven` varchar(255) DEFAULT NULL,
  `provide_eight` varchar(255) DEFAULT NULL,
  `provide_nine` varchar(255) DEFAULT NULL,
  `provide_ten` varchar(255) DEFAULT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pakage`
--

INSERT INTO `tbl_pakage` (`pakage_id`, `pakage_type`, `pakage_rate`, `provide_one`, `provide_two`, `provide_three`, `provide_four`, `provide_five`, `provide_six`, `provide_seven`, `provide_eight`, `provide_nine`, `provide_ten`, `publication_status`) VALUES
(1, 'Combo package : 1', '16000', '2 Photographer', 'All clicked photos in a DVD (edited)', 'two beautiful photo album with 150 copies 4R (4\"X6\") print', '2 copies 8L (8\"X12\") print, 2 copy 12L (12\"X18\" ) print', '1 copy poster size (20\" X 30\") print) ', '2 Cinematographer', 'All Video in a DVD   (Edited)', '1 Title Of family introduction , 1 Special Trailer (2:30 min to 3:00)', '1 Movie Edited (20 to 30 Min)', 'All Raw Video in a DVD , HD Camera ', 1),
(2, 'Combo package : 1', '16000', '2 Photographer', 'All clicked photos in a DVD (edited)', 'two beautiful photo album with 150 copies 4R (4\"X6\") print', '2 copies 8L (8\"X12\") print, 2 copy 12L (12\"X18\" ) print', '1 copy poster size (20\" X 30\") print) ', '2 Cinematographer', 'All Video in a DVD   (Edited)', '1 Title Of family introduction , 1 Special Trailer (2:30 min to 3:00)', '1 Movie Edited (20 to 30 Min)', 'All Raw Video in a DVD , HD Camera ', 1),
(3, 'Combo package : 1', '7500', '2 Photographer', 'All clicked photos in a DVD (edited)', 'two beautiful photo album with 150 copies 4R (4\"X6\") print', '2 copies 8L (8\"X12\") print, 2 copy 12L (12\"X18\" ) print', 'All Video in a DVD (Edited)', '', '', '', '', '', 1),
(4, 'Combo package : 1', '3000', ' All Raw Video in a DVD , HD Camera ', ' 1 Title Of family introduction , 1 Special Trailer (2:30 min to 3:00)', ' 2 copies 8L (8\"X12\") print, 2 copy 12L (12\"X18\" ) print', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_satisfaction`
--

CREATE TABLE `tbl_satisfaction` (
  `satisfaction_id` int(11) NOT NULL,
  `satisfaction_title` varchar(100) NOT NULL,
  `satisfaction_number` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_satisfaction`
--

INSERT INTO `tbl_satisfaction` (`satisfaction_id`, `satisfaction_title`, `satisfaction_number`, `publication_status`) VALUES
(1, 'Shoots Captures', '4567', 1),
(2, 'Complete Project', '4567', 1),
(3, 'Project Remaining', '0012', 1),
(4, 'Customer', '1209', 1),
(5, 'Instrument', '0233', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `service_id` int(11) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `service_picture` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`service_id`, `service_type`, `service_picture`, `publication_status`) VALUES
(1, 'Photoshoot', 'Rubel Mahmud.jpg', 1),
(2, 'Weading Shoot', 'diuID.jpg', 1),
(3, 'Holud sonda', '20535857_1886218131703155_246512230_o.jpg', 1),
(4, 'marriage Ceremony', '24463048_2042881279279282_1885034773_o.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_member`
--

CREATE TABLE `tbl_team_member` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_designation` varchar(100) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `member_picture` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_team_member`
--

INSERT INTO `tbl_team_member` (`member_id`, `member_name`, `member_designation`, `short_description`, `member_picture`, `facebook`, `publication_status`) VALUES
(2, 'Joy Mahmud', 'Senior Photographer', 'Joy mahmud is one of the best photographer in our Photographic Team. He work all of the project point to point.', '26937212_2000774663497898_44764252_o.jpg', 'https://www.facebook.com/joymahmud271', 1),
(3, 'Joy Mahmud', 'Senior Photographer', 'Joy Mahmud Is Senior Photographer in our Bridal Pavilion Team. He is a Dedicated Person.', 'Rubel Mahmud.jpg', 'https://www.facebook.com/joymahmud271', 1),
(4, 'Dashing Girl', 'Photo Editor', 'Joy Mahmud Is Senior Photographer in our Bridal Pavilion Team. He is a Dedicated Person.', 'CarolineStH.jpg', 'https://www.facebook.com/joymahmud271', 1),
(5, 'Tanvir Rahman', 'Senior Photographer', 'Joy Mahmud Is Senior Photographer in our Bridal Pavilion Team. He is a Dedicated Person.', '01.jpg', 'https://www.facebook.com/joymahmud271', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_book_pakage`
--
ALTER TABLE `tbl_book_pakage`
  ADD PRIMARY KEY (`pakage_id`);

--
-- Indexes for table `tbl_client_feedback`
--
ALTER TABLE `tbl_client_feedback`
  ADD PRIMARY KEY (`client_feedback_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_gallery_photo`
--
ALTER TABLE `tbl_gallery_photo`
  ADD PRIMARY KEY (`gallery_photo_id`);

--
-- Indexes for table `tbl_gallery_video`
--
ALTER TABLE `tbl_gallery_video`
  ADD PRIMARY KEY (`gallery_video_id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `tbl_pakage`
--
ALTER TABLE `tbl_pakage`
  ADD PRIMARY KEY (`pakage_id`);

--
-- Indexes for table `tbl_satisfaction`
--
ALTER TABLE `tbl_satisfaction`
  ADD PRIMARY KEY (`satisfaction_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_book_pakage`
--
ALTER TABLE `tbl_book_pakage`
  MODIFY `pakage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_client_feedback`
--
ALTER TABLE `tbl_client_feedback`
  MODIFY `client_feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_gallery_photo`
--
ALTER TABLE `tbl_gallery_photo`
  MODIFY `gallery_photo_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_gallery_video`
--
ALTER TABLE `tbl_gallery_video`
  MODIFY `gallery_video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pakage`
--
ALTER TABLE `tbl_pakage`
  MODIFY `pakage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_satisfaction`
--
ALTER TABLE `tbl_satisfaction`
  MODIFY `satisfaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
