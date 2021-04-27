-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 10:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timesheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `name`, `description`) VALUES
(1, 'FreshGroci', 'Online grocery shop.'),
(2, 'SpanishLearning', 'A online leasrning plateform.'),
(3, 'TimeSheet', 'A project management web and app.'),
(4, 'ElectroShop', 'Electronic shopping site.'),
(5, 'Gymo', 'Workout site'),
(6, 'Book Shop', 'Online shop for books.'),
(7, 'Automobile', 'Shop for auto parts.');

-- --------------------------------------------------------

--
-- Table structure for table `project_task`
--

CREATE TABLE `project_task` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `task` varchar(100) NOT NULL,
  `hour` time NOT NULL,
  `status` int(11) NOT NULL,
  `task_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_task`
--

INSERT INTO `project_task` (`project_id`, `user_id`, `date`, `task`, `hour`, `status`, `task_id`) VALUES
(1, 2, '2021-04-15', 'Add Shop page.', '51:40:30', 0, 1),
(1, 3, '2021-04-15', 'Add Checkout.', '31:43:45', 0, 2),
(2, 3, '2021-04-15', 'Fix ui relasted bug.', '35:56:34', 0, 3),
(3, 4, '2021-04-15', 'Payment method.', '59:26:14', 0, 4),
(3, 2, '2021-04-15', 'Android app create.', '99:26:14', 0, 5),
(1, 4, '2021-04-16', 'Add abd screen.', '09:36:14', 0, 6),
(0, 2, '2021-04-16', 'dshgfahfsvnjhjsgbsudhhjccvasgufsu', '14:50:27', 0, 7),
(3, 2, '2021-04-16', 'dghgnhvuxgsvtuisrhyvuihnhdfcshuvshuchnsadfvndfn', '74:51:49', 0, 8),
(1, 1, '2021-04-27', 'Add abdnnsjjfsi jbsjv ixbsidhffs h hfisi', '02:30:23', 0, 11),
(1, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 12),
(1, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 13),
(1, 1, '2021-04-28', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 14),
(1, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 15),
(1, 1, '2021-04-29', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 16),
(1, 1, '2021-04-24', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 17),
(2, 1, '2021-04-27', 'Add abdnnsjjfsi jbsjv ixbsidhffs h hfisi', '02:30:23', 0, 18),
(2, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 19),
(2, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 20),
(2, 1, '2021-04-28', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 21),
(2, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 22),
(2, 1, '2021-04-29', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 23),
(2, 1, '2021-04-24', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 24),
(3, 1, '2021-04-27', 'Add abdnnsjjfsi jbsjv ixbsidhffs h hfisi', '02:30:23', 0, 25),
(3, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 26),
(3, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 27),
(3, 1, '2021-04-28', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 28),
(3, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 29),
(3, 1, '2021-04-29', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 30),
(3, 1, '2021-04-24', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 31),
(4, 1, '2021-04-27', 'Add abdnnsjjfsi jbsjv ixbsidhffs h hfisi', '02:30:23', 0, 32),
(4, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 33),
(4, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 34),
(4, 1, '2021-04-28', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 35),
(4, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 36),
(3, 1, '2021-04-29', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 37),
(4, 1, '2021-04-24', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 38),
(5, 1, '2021-04-27', 'Add abdnnsjjfsi jbsjv ixbsidhffs h hfisi', '02:30:23', 0, 39),
(5, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 40),
(5, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 41),
(5, 1, '2021-04-28', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 42),
(5, 1, '2021-04-26', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 43),
(5, 1, '2021-04-29', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 44),
(5, 1, '2021-04-24', 'Jdjjznsf n vjf jv n j vndjff sjvnsi xvfvnsijfjniadvbnj dnbdjgsr dvuigbnnsidndfij gdfj dcn dvndf.', '07:30:23', 0, 45),
(1, 1, '2021-04-26', 'dfhfng hfv suyfgyuvbm\\gyu fgusfghshifhvbdyudxjesgfggoiuhsyudghsyukgrdyog tryyu sru gyuydr dr du tuy.', '11:37:59', 0, 46),
(1, 1, '2021-04-28', 'dtuivhsuif hdrui thsuig hdtuih drruighd uirgh dui g.', '23:37:59', 0, 47),
(1, 1, '0000-00-00', 'Rahul testing 123', '10:31:15', 0, 48),
(1, 1, '0000-00-00', 'tvrrrbfytfvtrfstrfufbtrvee6vedbtrnf', '08:36:09', 0, 49),
(1, 1, '0000-00-00', 'asdfghjkl', '08:36:09', 0, 50),
(1, 1, '0000-00-00', 'lkjhgfdsa', '08:36:09', 0, 51),
(1, 1, '0000-00-00', 'asdfghjkl', '08:36:09', 0, 52),
(1, 1, '0000-00-00', 'asdfghjk', '08:36:09', 0, 53),
(1, 1, '0000-00-00', '', '08:36:09', 0, 54),
(1, 1, '0000-00-00', 'asd', '08:36:09', 0, 55);

-- --------------------------------------------------------

--
-- Table structure for table `project_user`
--

CREATE TABLE `project_user` (
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `start_date` date NOT NULL DEFAULT current_timestamp(),
  `end_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_user`
--

INSERT INTO `project_user` (`user_id`, `project_id`, `start_date`, `end_date`) VALUES
(1, 1, '2021-04-21', '2021-04-21'),
(1, 2, '2021-04-21', '2021-04-21'),
(1, 3, '2021-04-21', '2021-04-21'),
(2, 1, '2021-04-21', '2021-04-21'),
(2, 3, '2021-04-21', '2021-04-21'),
(3, 2, '2021-04-21', '2021-04-21'),
(3, 1, '2021-04-21', '2021-04-21'),
(4, 1, '2021-04-21', '2021-04-21'),
(4, 3, '2021-04-21', '2021-04-21'),
(2, 5, '2021-04-21', '2021-04-21'),
(1, 5, '2021-04-21', '2021-04-21'),
(1, 4, '2021-04-21', '2021-04-21'),
(3, 7, '2021-04-21', '2021-04-21'),
(2, 6, '2021-04-21', '2021-04-21'),
(2, 2, '2021-04-21', '2021-04-21'),
(5, 1, '2021-04-21', '2021-04-21'),
(5, 2, '2021-04-21', '2021-04-21'),
(5, 3, '2021-04-21', '2021-04-21'),
(5, 4, '2021-04-21', '2021-04-21'),
(5, 5, '2021-04-21', '2021-04-21'),
(5, 6, '2021-04-21', '2021-04-21'),
(5, 7, '2021-04-21', '2021-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `email`, `phone`, `password`, `role`) VALUES
(1, 'Rahul Yadav', 'rahul', 'rahul@oremda.com', 2147483647, 'rahul', 2),
(2, 'Sneh Gour', 'sneh', 'sneh@oremda.com', 2147483647, 'sneh', 2),
(3, 'Kamesh Tiwari', 'kamesh', 'kamesh@oremda.com', 2147483647, 'kamesh', 2),
(4, 'Rohit Mishra', 'rohit', 'rohit@oremda.com', 2147483647, 'rohit', 2),
(5, 'Common', 'common', 'common@abc.com', 1234567890, 'common', 2),
(6, 'Rahul Yadav', 'abhi', 'its_rahul84e@shb.com', 0, 'Abhi@321', 0),
(7, 'zxc', 'zxc', 'zxc@gmail.com', 0, 'Zxcvbnm@123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD UNIQUE KEY `project_id` (`project_id`);

--
-- Indexes for table `project_task`
--
ALTER TABLE `project_task`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `project_user`
--
ALTER TABLE `project_user`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project_task`
--
ALTER TABLE `project_task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
