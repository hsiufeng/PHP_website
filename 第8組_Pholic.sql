-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2014 年 06 月 11 日 08:46
-- 伺服器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `pholic`
--
CREATE DATABASE IF NOT EXISTS `pholic` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `pholic`;

-- --------------------------------------------------------

--
-- 表的結構 `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_no` int(10) NOT NULL,
  `class_name` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `class_pic` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`class_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 轉存資料表中的資料 `class`
--

INSERT INTO `class` (`class_no`, `class_name`, `class_pic`) VALUES
(1, '綜合', 'class_1.png'),
(2, '型男美女', 'class_2.png'),
(3, '美食分享', 'class_3.png'),
(4, '生活小確幸', 'class_4.png'),
(5, '八卦', 'class_5.png'),
(6, '感性廢文', 'class_6.png');

-- --------------------------------------------------------

--
-- 表的結構 `eyes`
--

CREATE TABLE IF NOT EXISTS `eyes` (
  `post_no` int(50) NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`post_no`,`mail`),
  KEY `post_no` (`post_no`),
  KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 轉存資料表中的資料 `eyes`
--

INSERT INTO `eyes` (`post_no`, `mail`) VALUES
(1, 'kend4624@gmail.com'),
(1, 'oldtw2014@gmail.com'),
(1, 'sharon00734@gmail.com'),
(4, 'mysuperisland@gmail.com'),
(4, 'whocare0401@yahoo.com.tw'),
(5, 'kend4624@gmail.com'),
(5, 'whocare0401@yahoo.com.tw'),
(7, 'whocare0401@yahoo.com.tw'),
(8, 'whocare0401@yahoo.com.tw'),
(9, 'whocare0401@yahoo.com.tw'),
(10, 'whocare0401@yahoo.com.tw'),
(22, 'oldtw2014@gmail.com'),
(22, 'sally@gmail.com'),
(22, 'sky1008@gmail.com'),
(23, 'sky1008@gmail.com'),
(25, 'oldtw2014@gmail.com'),
(25, 'sky1008@gmail.com'),
(26, 'sky1008@gmail.com'),
(28, 'kend4624@gmail.com'),
(28, 'sky1008@gmail.com'),
(28, 'whocare0401@yahoo.com.tw'),
(30, 'kend4624@gmail.com'),
(31, 'kend4624@gmail.com'),
(31, 'ting@gmail.com'),
(34, 'h@gmail.com'),
(38, 'kend4624@gmail.com'),
(39, 'whocare0401@yahoo.com.tw');

-- --------------------------------------------------------

--
-- 表的結構 `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_no` int(100) NOT NULL AUTO_INCREMENT,
  `mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `post_time` datetime NOT NULL,
  `class_no` int(100) NOT NULL,
  `post_pic` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`post_no`),
  KEY `mail` (`mail`),
  KEY `class_no` (`class_no`),
  KEY `class_no_2` (`class_no`),
  KEY `post_no` (`post_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- 轉存資料表中的資料 `post`
--

INSERT INTO `post` (`post_no`, `mail`, `post_time`, `class_no`, `post_pic`) VALUES
(1, 'kend4624@gmail.com', '2014-06-04 02:12:25', 6, 'kend4624_1.jpg'),
(4, 'sharon00734@gmail.com', '2014-06-06 08:05:15', 4, 'sharon00734_1.jpg'),
(5, 'oldtw2014@gmail.com', '2014-06-08 10:11:16', 2, 'oldtw2014_1.jpg'),
(6, 'whocare0401@yahoo.com.tw', '2014-06-08 10:24:28', 1, 'whocare0401_1.jpg'),
(7, 'whocare0401@yahoo.com.tw', '2014-06-08 10:27:29', 5, 'whocare0401_2.jpg'),
(8, 'whocare0401@yahoo.com.tw', '2014-06-08 10:39:34', 3, 'whocare0401_3.jpg'),
(9, 'kend4624@gmail.com', '2014-06-08 12:57:45', 4, 'kend4624_2.jpg'),
(10, 'sharon00734@gmail.com', '2014-06-08 13:41:53', 5, 'sharon00734_2.jpg'),
(14, 'sharon00734@gmail.com', '2014-06-10 21:11:14', 3, 'sharon00734_3.jpg'),
(22, 'kend4624@gmail.com', '2014-06-10 23:36:20', 2, 'kend4624_3.jpg'),
(23, 'francis.yang.0119@hotmail.com', '2014-06-11 00:09:16', 1, 'francis.yang.0119_1.jpg'),
(25, 'sally@gmail.com', '2014-06-11 01:32:39', 3, 'sally_1.jpg'),
(26, 'oldtw2014@gmail.com', '2014-06-11 01:40:16', 2, 'oldtw2014_2.jpg'),
(28, 'sky1008@gmail.com', '2014-06-11 01:42:42', 6, 'sky1008_2.jpg'),
(30, 'kend4624@gmail.com', '2014-06-11 02:24:22', 1, 'kend4624_4.jpg'),
(31, 'mysuperisland@gmail.com', '2014-06-11 09:12:01', 5, 'mysuperisland_1.jpg'),
(34, 'ting@gmail.com', '2014-06-11 10:09:16', 6, 'ting_1.jpg'),
(38, 'peiwen@gmail.com', '2014-06-11 12:15:46', 4, 'peiwen_1.jpg'),
(39, 'whocare0401@yahoo.com.tw', '2014-06-11 12:31:14', 1, 'whocare0401_5.jpg');

-- --------------------------------------------------------

--
-- 表的結構 `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `reply_no` int(50) NOT NULL AUTO_INCREMENT,
  `post_no` int(50) NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `reply_pic` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`reply_no`),
  KEY `post_no` (`post_no`),
  KEY `mail` (`mail`),
  KEY `reply_no` (`reply_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- 轉存資料表中的資料 `reply`
--

INSERT INTO `reply` (`reply_no`, `post_no`, `mail`, `reply_pic`) VALUES
(2, 5, 'oldtw2014@gmail.com', 'oldtw2014_reply_1.jpg'),
(3, 9, 'whocare0401@yahoo.com.tw', 'whocare0401_reply_1.jpg'),
(4, 8, 'kend4624@gmail.com', 'kend4624_reply_1.jpg'),
(11, 22, 'licyn6930@gmail.com', 'licyn6930_reply_2.jpg'),
(15, 25, 'sky1008@gmail.com', 'sky1008_reply_1.gif'),
(19, 28, 'mysuperisland@gmail.com', 'mysuperisland_reply_2.jpg'),
(21, 28, 'whocare0401@yahoo.com.tw', 'whocare0401_reply_3.gif'),
(23, 26, 'mandora@gmail.com', 'mandora_reply_2.jpg'),
(24, 31, 'kend4624@gmail.com', 'kend4624_reply_2.jpg'),
(34, 38, 'kend4624@gmail.com', 'kend4624_reply_3.jpg'),
(35, 34, 'h@gmail.com', 'h_reply_1.jpg');

-- --------------------------------------------------------

--
-- 表的結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pwd` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user_name` varchar(50) CHARACTER SET big5 COLLATE big5_bin NOT NULL,
  `user_pic` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user_bday` date NOT NULL,
  `rights` int(10) NOT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 轉存資料表中的資料 `user`
--

INSERT INTO `user` (`mail`, `pwd`, `user_name`, `user_pic`, `user_bday`, `rights`) VALUES
('francis.yang.0119@hotmail.com', 'forlove', '謙', '00.jpg', '0000-00-00', 0),
('h@gmail.com', '123', '楊酥沉', 'h.jpg', '2014-06-03', 0),
('kend4624@gmail.com', 'a1013325', '吳痂玄', 'kend4624.jpg', '1994-05-04', 1),
('licyn6930@gmail.com', 'a1013311', 'Licyn', '00.jpg', '0000-00-00', 0),
('mandora@gmail.com', 'mandora', 'mandora', 'mandora.png', '1998-04-30', 0),
('mysuperisland@gmail.com', 'a1013307', '陳咦蚊', 'mysuperisland.jpg', '1993-09-05', 1),
('oldtw2014@gmail.com', 'a1013342', '夯debbie', 'oldtw2014.jpg', '2014-03-17', 0),
('peiwen@gmail.com', 'a1013327', '許沛蚊', 'peiwen.jpg', '1994-07-25', 0),
('robit@gmail.com', 'a111111', '羅波', 'robit.jpg', '2014-03-24', 0),
('sally@gmail.com', '123', 'Sally Liu', 'sally.gif', '1995-04-22', 0),
('sharon00734@gmail.com', 'a1013303', '吱喧', 'sharon00734.jpg', '1994-10-13', 1),
('sky1008@gmail.com', 'sky1008', 'Sky', 'sky1008.gif', '1990-10-08', 0),
('ting@gmail.com', 'ting', '丁易鹹', 'ting.jpg', '0000-00-00', 0),
('whocare0401@yahoo.com.tw', 'a1013334', 'HSIU', 'whocare0401.jpg', '1994-04-01', 1);

--
-- 匯出資料表的 Constraints
--

--
-- 資料表的 Constraints `eyes`
--
ALTER TABLE `eyes`
  ADD CONSTRAINT `eyes_ibfk_3` FOREIGN KEY (`post_no`) REFERENCES `post` (`post_no`),
  ADD CONSTRAINT `eyes_ibfk_2` FOREIGN KEY (`mail`) REFERENCES `user` (`mail`);

--
-- 資料表的 Constraints `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `user` (`mail`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`class_no`) REFERENCES `class` (`class_no`);

--
-- 資料表的 Constraints `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_3` FOREIGN KEY (`post_no`) REFERENCES `post` (`post_no`),
  ADD CONSTRAINT `reply_ibfk_2` FOREIGN KEY (`mail`) REFERENCES `user` (`mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
