-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2016 at 10:04 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tqship`
--

-- --------------------------------------------------------

--
-- Table structure for table `carriers`
--

CREATE TABLE IF NOT EXISTS `carriers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proof` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `tquser_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`tquser_id`),
  KEY `fk_carriers_tquser_idx` (`tquser_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('5f22396ddc9fdbee7e7dc5d330c00bbfa220af33', '::1', 1453713740, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333731333539343b6e616d657c4e3b616464726573737c4e3b636f6e746163747c4e3b636974797c4e3b646f627c4e3b67656e6465727c4e3b75747970657c733a313a2232223b656d61696c7c733a32303a226d617975727461756e6b40676d61696c2e636f6d223b706173737c733a353a224d61797572223b7175657374696f6e7c733a343a2266667364223b616e737765727c733a343a2264736164223b),
('b5337be40978f6ec020a9c97abc7b769ecee849f', '::1', 1453715059, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333731343737333b6e616d657c4e3b616464726573737c4e3b636f6e746163747c4e3b636974797c4e3b646f627c4e3b67656e6465727c4e3b75747970657c733a313a2232223b656d61696c7c733a32303a226d617975727461756e6b40676d61696c2e636f6d223b706173737c733a353a224d61797572223b7175657374696f6e7c733a343a2266667364223b616e737765727c733a343a2264736164223b),
('d52ef998f3af4c663686b49c60e66b32138c7500', '::1', 1453715311, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333731353134343b6e616d657c4e3b616464726573737c4e3b636f6e746163747c4e3b636974797c4e3b646f627c4e3b67656e6465727c4e3b75747970657c733a313a2232223b656d61696c7c733a32303a226d617975727461756e6b40676d61696c2e636f6d223b706173737c733a353a224d61797572223b7175657374696f6e7c733a343a2266667364223b616e737765727c733a343a2264736164223b),
('bfc858dd894295f54187f4d6452fab2437a2fe23', '::1', 1453716343, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333731363334323b6e616d657c4e3b616464726573737c4e3b636f6e746163747c4e3b636974797c4e3b646f627c4e3b67656e6465727c4e3b75747970657c733a313a2232223b656d61696c7c733a32303a226d617975727461756e6b40676d61696c2e636f6d223b706173737c733a353a224d61797572223b7175657374696f6e7c733a343a2266667364223b616e737765727c733a343a2264736164223b),
('09eb4c50baee43290f6fbdc0aa72e0b73100052e', '::1', 1453787374, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333738373232373b75747970657c733a313a2232223b),
('49b30ba344fb85e535fcc23c8e02b715bc41e65f', '::1', 1453787644, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333738373633353b75747970657c733a313a2232223b),
('e506b94952caa138dcacbf7d7be1ec8d411c533f', '::1', 1453792849, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333739323834313b75747970657c733a313a2232223b),
('44e3b23418ec5037ebd8aa7439f034adefa0cc09', '::1', 1453793973, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333739333930393b75747970657c733a313a2231223b656d61696c7c733a32313a226e69746861636b6572736840676d61696c2e636f6d223b706173737c733a333a22313233223b6e616d657c733a343a226e656572223b616464726573737c733a33363a226466646f6b0d0a6764666c676b663b6c670d0a676b3b6c66676b660d0a666b3b6c6b3b67223b636f6e746163747c733a31303a2236393635343534323331223b636974797c733a343a226268756a223b646f627c733a31303a2230332f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31323a226d79206e69636b206e616d65223b616e737765727c733a323a226e69223b),
('54f20878209ffa034ef2c4a8f85658bad9148e46', '::1', 1453794466, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333739343238393b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33313a2266646c646b6766646b662c64666c6b64676b660d0a676c666b686c6a6c6b2e223b636f6e746163747c733a31303a2239383734353834363531223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31323a226d79206e69636b206e616d65223b616e737765727c733a343a226d616e75223b),
('556783298e1381a4ee0a4931abed0d5c55ef2188', '::1', 1453794652, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333739343539303b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('2ad1da80355e0aa19a8ff64dce266a7ed7160130', '::1', 1453797021, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333739363739323b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('83c8c74ebb97275689e74d39f81e4f7e98fea812', '::1', 1453797591, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333739373239373b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('9cc3c5528abcaf3b3e1ddb450a2326f736d72f05', '::1', 1453797840, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333739373630353b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('24c09197d867555e4efdf8abcc57bbd65b460c86', '::1', 1453798194, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333739383138393b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('637b47aa306be6446d8de3ce151d5e2a34c01a61', '::1', 1453799310, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333739393032333b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('55c112260121251e80e8f83edafab89adb62fb81', '::1', 1453799596, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333739393332353b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('f0c8136383af2ba5f31a3bfa3484abeebb749f05', '::1', 1453799831, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333739393635363b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('1f933dfdee14b16c67b966065461e882bf3cc207', '::1', 1453800276, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333830303038393b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('d2fc4333d0c7156623b1ecaac33f6e77eb2b50a6', '::1', 1453800710, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333830303434333b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('55cd71f5af822ed83d3c91251537b87ae8574ae3', '::1', 1453800785, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333830303738353b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('c88219a50fece6c0b0b721ff807d2966563935fa', '::1', 1453800800, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333830303738363b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('f315d80c22c5967ea93cc0266f899b0fcdaaf2b9', '::1', 1453801788, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333830313537343b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('9cae366abc241d54d9cf85da63704ad213740b02', '::1', 1453804087, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333830343030313b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('19e1919fa0aaf40ff12991502d5097db08717e62', '::1', 1453805389, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333830353237333b75747970657c733a313a2231223b656d61696c7c733a31343a226d616e7540676d61696c2e636f6d223b706173737c733a343a2231323334223b6e616d657c733a31333a224d616e736920546861636b6572223b616464726573737c733a33353a22646b64676c6a666c642c0d0a666b676a666c6b6a662c0d0a6b6a676b68676a686c6b2e223b636f6e746163747c733a31303a2239383838373534353438223b636974797c733a343a224268756a223b646f627c733a31303a2230362f30312f32303136223b67656e6465727c733a313a2230223b7175657374696f6e7c733a31343a226d792066617620636172746f6f6e223b616e737765727c733a373a2273696e6368616e223b),
('2c21dbf71d4be98e645574311b1997d0fdf491aa', '::1', 1453820184, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333832303138343b),
('0b4d44f93d50743f71054ca8ae735ac977f338ee', '::1', 1453820185, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333832303138353b),
('11570309240ff5f11509f1e8ee05efe5359209ef', '::1', 1453880461, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333838303137393b),
('548ac032ada8540fa13b2e0391e40e0d74724c6f', '::1', 1453881299, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333838313239393b),
('10250f4599d4798de7bd1d91d219009b1a1a3196', '::1', 1453881684, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333838313633303b),
('2dfee5a7da0163968bad749c6c0c24f5f420d9d4', '::1', 1453882595, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333838323535313b),
('736eee6f556c8c1795028c2030efdd6dc7fc966f', '::1', 1453887367, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333838373336373b),
('a352f96e06f6604b6649be818cbfb9386b72faac', '::1', 1453888193, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333838383139333b),
('1aadc63fe688182bfdf1ab5f7cc98e5e1805785e', '::1', 1453888822, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333838383532333b),
('9b774c8e1c7f9300f89115b410906e8da651c219', '::1', 1453889071, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333838383832363b),
('9f20bb8e61caedc6e4a866f2655d957a36d8bffe', '::1', 1453889549, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333838393333323b),
('948e838bb9e978099e7b0f7beda6d1fdfe9f5762', '::1', 1453889990, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333838393938393b),
('f0dd9496d603944284721aa74daf6d17dbbb4b84', '::1', 1453890909, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333839303835313b),
('eefc18ac293ba4c84b8aff8641b1fd00de4fab7c', '::1', 1453891385, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333839313235333b),
('0558d5fb518e2dcd5ad5a9e0515624fd17a0c641', '::1', 1453891823, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333839313539353b),
('d9a0444cc18684d101bf26bd6925dbf521632835', '::1', 1453892292, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333839313939373b),
('22e36a6f8a230c59290f4746825c01e5561e3620', '::1', 1453892346, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333839323330303b),
('5aad330984c47fa98dc0a14432eb8d9b575b70f7', '::1', 1453896976, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435333839363731373b);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE IF NOT EXISTS `shippings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(45) DEFAULT NULL,
  `destination` varchar(45) DEFAULT NULL,
  `s_address` varchar(45) DEFAULT NULL,
  `d_address` varchar(45) DEFAULT NULL,
  `scode` varchar(45) DEFAULT NULL,
  `dcode` varchar(45) DEFAULT NULL,
  `date_time` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `expected_delivery` varchar(45) DEFAULT NULL,
  `width` varchar(45) DEFAULT NULL,
  `height` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `tquser_id` int(11) NOT NULL,
  `carriers_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`tquser_id`,`carriers_id`),
  KEY `fk_shippings_tquser1_idx` (`tquser_id`),
  KEY `fk_shippings_carriers1_idx` (`carriers_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sresponse`
--

CREATE TABLE IF NOT EXISTS `sresponse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(45) DEFAULT NULL,
  `date_of_delivery` varchar(45) DEFAULT NULL,
  `shippings_id` int(11) NOT NULL,
  `carriers_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`shippings_id`,`carriers_id`),
  KEY `fk_sresponse_shippings1_idx` (`shippings_id`),
  KEY `fk_sresponse_carriers1_idx` (`carriers_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tquser`
--

CREATE TABLE IF NOT EXISTS `tquser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `dob` varchar(45) DEFAULT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tquser`
--

INSERT INTO `tquser` (`id`, `name`, `address`, `gender`, `dob`, `contact`, `email`, `city`) VALUES
(1, 'Manisha', 'fdfgff', '1', '01/01/2016', '45646546456', 'manisha@gmail.com', 'Anjar'),
(2, 'Nirali Thacker', '201, taratma apartment, bhuj kutch', '0', '03/01/2016', '9879806486', 'nithackersh@gmail.com', 'bhuj'),
(3, 'Mansi Thacker', '201, taratma apartment, bhuj kutch', '0', '06/01/2016', '9537639558', 'manu@gmail.com', 'Bhuj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auth_key` varchar(45) DEFAULT NULL,
  `security_question` varchar(45) DEFAULT NULL,
  `security_answer` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `tquser_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`tquser_id`),
  KEY `fk_users_tquser1_idx` (`tquser_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `auth_key`, `security_question`, `security_answer`, `status`, `type`, `tquser_id`) VALUES
(1, '1234', 'ffsd', 'dsad', '1', '2', 1),
(2, '123', 'my nick name', 'ni', '0', '1', 2),
(3, '1234', 'my fav cartoon', 'sinchan', '0', '1', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
