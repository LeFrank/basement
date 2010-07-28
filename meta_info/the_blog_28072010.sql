-- phpMyAdmin SQL Dump
-- version 3.1.2deb1ubuntu0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2010 at 12:39 AM
-- Server version: 5.0.75
-- PHP Version: 5.2.6-3ubuntu4.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `the_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `page_block`
--

CREATE TABLE IF NOT EXISTS `page_block` (
  `id` int(11) NOT NULL auto_increment,
  `page_data_id` int(11) NOT NULL,
  `page_module_id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(25) NOT NULL default 'enabled',
  `date_updated` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `page_block`
--

INSERT INTO `page_block` (`id`, `page_data_id`, `page_module_id`, `sort_order`, `content`, `status`, `date_updated`, `date_created`) VALUES
(1, 0, 1, 0, 'this is the first page_block on the home page ... woohooo!!!!', 'enabled', 2010, 2010);

-- --------------------------------------------------------

--
-- Table structure for table `page_data`
--

CREATE TABLE IF NOT EXISTS `page_data` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL COMMENT 'not used can posibly be dropped',
  `requires_auth` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(25) NOT NULL default 'enabled',
  `date_created` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `page_data`
--

INSERT INTO `page_data` (`id`, `name`, `title`, `keywords`, `parent_id`, `template_id`, `requires_auth`, `user_id`, `status`, `date_created`) VALUES
(0, 'home', 'Welcome to THE_BLOG site made to compile a nice treasure chest of information.', 'lots odd code snippets', 0, 0, 0, 1, 'enabled', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `page_modules`
--

CREATE TABLE IF NOT EXISTS `page_modules` (
  `id` int(11) NOT NULL auto_increment,
  `module_name` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `page_modules`
--

INSERT INTO `page_modules` (`id`, `module_name`, `status`, `date_created`) VALUES
(1, 'text', 'enabled', 2010),
(2, 'gallery', 'enabled', 0);

-- --------------------------------------------------------

--
-- Table structure for table `page_type`
--

CREATE TABLE IF NOT EXISTS `page_type` (
  `id` int(11) NOT NULL auto_increment,
  `page_type` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `page_type`
--

