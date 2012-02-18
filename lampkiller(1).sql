-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2012 at 04:14 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lampkiller`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, '家居照明'),
(2, '商业照明'),
(3, '工业照明'),
(4, '景观照明'),
(5, '特殊照明'),
(6, 'LED照明'),
(7, '消防照明'),
(8, '灯具配件');

-- --------------------------------------------------------

--
-- Table structure for table `category_classifications`
--

CREATE TABLE IF NOT EXISTS `category_classifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `classification_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category_classifications`
--

INSERT INTO `category_classifications` (`id`, `category_id`, `classification_id`) VALUES
(1, 1, 1),
(3, 6, 1),
(4, 6, 2),
(5, 5, 1),
(7, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `classifications`
--

CREATE TABLE IF NOT EXISTS `classifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `classifications`
--

INSERT INTO `classifications` (`id`, `name`) VALUES
(1, '12'),
(2, '适用面积'),
(3, '适用场合');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `classification_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `classification_id`) VALUES
(1, '欧式风格', 1),
(2, '中式风格', 1),
(3, '5-10平方米', 2),
(4, '10-15平方米', 2),
(5, '餐厅', 3),
(6, '走廊', 3);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, '管理员'),
(2, '商家');

-- --------------------------------------------------------

--
-- Table structure for table `markets`
--

CREATE TABLE IF NOT EXISTS `markets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `markets`
--

INSERT INTO `markets` (`id`, `name`, `address`, `description`) VALUES
(1, '柳营路', '不清', ''),
(2, 'w', '21', '<p><span style="text-decoration: underline;"><strong>haha</strong></span>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`) VALUES
(1, '商品--快照'),
(2, '商品--详细图片'),
(3, '商品--详细介绍'),
(4, '商家--logo'),
(5, '商家--营业执照');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `product_size` varchar(50) DEFAULT NULL,
  `product_power` varchar(50) DEFAULT NULL,
  `product_voltage` varchar(50) DEFAULT NULL,
  `product_bulbnumber` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_established` tinyint(1) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `description` text,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `product_size`, `product_power`, `product_voltage`, `product_bulbnumber`, `created`, `modified`, `is_established`, `store_id`, `category_id`, `order`, `description`, `status`) VALUES
(3, 'EditTest2', '2121', '121', '221', '', '2012-02-18 12:15:04', '2012-02-18 13:19:27', NULL, 4, 1, 1, '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 0),
(4, 'PitctureTest2', '2', '2', '2', '12', '2012-02-18 12:27:01', '2012-02-18 12:27:02', NULL, 4, 1, 2, '', 0),
(6, 'picturetest10', 'h', '', '', '', '2012-02-18 15:16:02', '2012-02-18 15:16:02', NULL, 4, 1, 3, '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\n<html>\n<head>\n</head>\n<body>\n\n</body>\n</html>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE IF NOT EXISTS `product_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `detail_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `detail_id`) VALUES
(12, 3, 1),
(13, 3, 2),
(14, 3, 4),
(15, 3, 6),
(16, 6, 1),
(17, 6, 3),
(18, 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_srcs`
--

CREATE TABLE IF NOT EXISTS `product_srcs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `position_id` int(11) DEFAULT NULL,
  `src` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `product_srcs`
--

INSERT INTO `product_srcs` (`id`, `product_id`, `position_id`, `src`, `created`, `modified`) VALUES
(4, 3, 1, 'uploads/chuxiujian/8580866IMG_0319.JPG', '2012-02-18 12:15:13', '2012-02-18 12:15:13'),
(6, 1, 2, 'D:/wampnew/www/lampkiller/lamp/app/webroot/img/uploads/abcIMG_0314.JPG', '2012-02-18 15:15:01', '2012-02-18 15:15:01'),
(7, 1, 2, 'D:/wampnew/www/lampkiller/lamp/app/webroot/img/uploads/abcIMG_0315.JPG', '2012-02-18 15:15:01', '2012-02-18 15:15:01'),
(8, 1, 2, 'D:/wampnew/www/lampkiller/lamp/app/webroot/img/uploads/abcIMG_0316.JPG', '2012-02-18 15:15:02', '2012-02-18 15:15:02'),
(9, 1, 2, 'D:/wampnew/www/lampkiller/lamp/app/webroot/img/uploads/chuxiujian/abcIMG_0319 - Copy.JPG', '2012-02-18 15:16:15', '2012-02-18 15:16:15'),
(10, 1, 2, 'D:/wampnew/www/lampkiller/lamp/app/webroot/img/uploads/chuxiujian/abcIMG_0319.JPG', '2012-02-18 15:16:15', '2012-02-18 15:16:15'),
(11, 1, 2, 'D:/wampnew/www/lampkiller/lamp/app/webroot/img/uploads/chuxiujian/abcIMG_0319.JPG', '2012-02-18 15:17:22', '2012-02-18 15:17:22'),
(12, 1, 2, 'D:/wampnew/www/lampkiller/lamp/app/webroot/img/uploads/chuxiujian/abcIMG_0319.JPG', '2012-02-18 15:19:03', '2012-02-18 15:19:03'),
(13, 6, NULL, 'D:/wampnew/www/lampkiller/lamp/app/webroot/img/uploads/chuxiujian/abcIMG_0319.JPG', '2012-02-18 15:21:50', '2012-02-18 15:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `market_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `store_url` varchar(50) DEFAULT NULL,
  `store_address` varchar(50) DEFAULT NULL,
  `store_boss` varchar(50) DEFAULT NULL,
  `store_mobile` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `description` text,
  `service` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `market_id`, `name`, `store_url`, `store_address`, `store_boss`, `store_mobile`, `created`, `modified`, `description`, `service`) VALUES
(4, 1, 'chuxiujian', 'chuxiujian', '12', '', '', '2012-02-16 13:27:08', '2012-02-16 13:27:08', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>'),
(5, 1, 'hello', '123', '', '', '', '2012-02-18 07:49:01', '2012-02-18 07:49:01', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>1231321</strong><span style="text-decoration: underline;">2222</span></p>\r\n</body>\r\n</html>', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>123131</p>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- Table structure for table `store_srcs`
--

CREATE TABLE IF NOT EXISTS `store_srcs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `src` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `store_srcs`
--

INSERT INTO `store_srcs` (`id`, `store_id`, `position_id`, `src`, `created`, `modified`) VALUES
(1, 1, 1, '', '2012-02-01 06:59:32', '2012-02-01 06:59:32'),
(2, 1, 1, '', '2012-02-01 07:00:43', '2012-02-01 07:00:43'),
(3, 1, 1, '', '2012-02-01 07:03:14', '2012-02-01 07:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
