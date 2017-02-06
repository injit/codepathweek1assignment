-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 06, 2017 at 04:38 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `globitek`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `created_at`) VALUES
(1, 'Indrajit', 'Gurung', 'injit@gmail.com', 'injit', '2017-02-05 00:00:00'),
(5, 'second', 'sss', 'fkejkfe', 'ooo', '2017-02-06 01:57:02'),
(6, 'kkfekfe', 'wefew', '232', 'asdf', '2017-02-06 01:57:09'),
(7, 'try', 'try', 'try', 'try', '2017-02-06 02:01:12'),
(8, 'kkfekfe', 'wefew', '232', 'asdf', '2017-02-06 02:10:32'),
(9, 'second', 'sss', 'fkejkfe', 'ooo', '2017-02-06 02:10:37'),
(12, '', '', '', '', '2017-02-06 02:43:38'),
(13, '', '', '', '', '2017-02-06 02:43:57'),
(14, '', '', '', '', '2017-02-06 02:44:58'),
(15, '', '', '', '', '2017-02-06 02:44:59'),
(16, '', '', '', '', '2017-02-06 02:45:00'),
(17, '', '', '', '', '2017-02-06 02:45:40'),
(18, 'asdf', 'asdf', 'asdf', 'asdf', '2017-02-06 02:45:52'),
(19, '', 'asdf', '', '', '2017-02-06 02:45:57'),
(20, 'full', '', '', '', '2017-02-06 02:50:43'),
(21, 'kekkeke', '', '', '', '2017-02-06 02:51:06'),
(22, '', '', '', 'fdfd', '2017-02-06 02:54:51'),
(23, 'kkfkef', 'fkkfek', 'faes', 'fefe', '2017-02-06 02:56:40'),
(24, 'sdsd', 'mmmd', 'kckkdkc', 'qweecd', '2017-02-06 03:13:43'),
(25, 'kkoioi', 'kkkkkki', 'kkkk@fdfdk.com', 'asdfllllll', '2017-02-06 03:26:08'),
(26, 'fefe', 'adfdfd', 'asdf@ffef.com', 'kkllflelfle', '2017-02-06 03:26:41'),
(27, 'fefe', 'af', 'asdf@ffef.com', 'kkllflelfle', '2017-02-06 03:26:52'),
(28, 'fefe', 'af', 'asdfffe@f.com', 'kkllflelfle', '2017-02-06 03:27:04'),
(29, 'dfdfdf', 'nk', 'mmfme@gmail.com', 'lllfefefefef', '2017-02-06 03:29:02'),
(30, 'sdf', 'dfefe', 'fdfd@asdf.com', 'dfdffefefe', '2017-02-06 04:06:29'),
(31, 'a', 'dd', 'mfd@gmail.com', 'kkfeffff', '2017-02-06 04:24:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;