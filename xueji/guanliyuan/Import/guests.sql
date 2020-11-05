-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2018-11-19 07:41:11
-- 服务器版本： 5.7.23
-- PHP 版本： 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `mydb`
--

-- --------------------------------------------------------

--
-- 表的结构 `myguests`
--

DROP TABLE IF EXISTS `myguests`;
CREATE TABLE IF NOT EXISTS `myguests` (
  `schoolnumber` bigint(15) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `schoolstatus` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`schoolnumber`)
) ENGINE=MyISAM AUTO_INCREMENT=201622030400001 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `myguests`
--

INSERT INTO `myguests` (`schoolnumber`, `name`, `schoolstatus`, `email`, `reg_date`) VALUES
(2016220304009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220304024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220304008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220304010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220304011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220304013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220304022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220300009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220300024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220300008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220300010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220300011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220300013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220300022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220305009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220305024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220305008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220305010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220305011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220305013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220305022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220301009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220301024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220301008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220301010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220301011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220301013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220301022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220302009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220302024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220302008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220302010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220302011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220302013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220302022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220303009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220303024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220303008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220303010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220303011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220303013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220303022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220306009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220306024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220306008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220306010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220306011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220306013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220306022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220307009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220307024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220307008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220307010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220307011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220307013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220307022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220308009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220308024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220308008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220308010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220308011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220308013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220308022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220309009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220309024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220309008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220309010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220309011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220309013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220309022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220314009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220314024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220314008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220314010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220314011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220314013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220314022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220324009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220324024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220324008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220324010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220324011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220324013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220324022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220334009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220334024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220334008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220334010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220334011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220334013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220334022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220344009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220344024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220344008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220344010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220344011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220344013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220344022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220354009, 'yangnan', 'Undergraduate', 'yangnan@qq.com', NULL),
(2016220354024, 'danyi', 'Undergraduate', 'danyi@qq.com', NULL),
(2016220354008, 'tangjiaqi', 'Graduatestudent', 'tangjiaqi@qq.com', NULL),
(2016220354010, 'hushijie', 'Undergraduate', 'hushijie@qq.com', NULL),
(2016220354011, 'wangyuxiang', 'Undergraduate', 'wangyuxiang@qq.com', NULL),
(2016220354013, 'honghaowei', 'Undergraduate', 'honghaowei', NULL),
(2016220354022, 'luoyue', 'Graduatestudent', 'luoyue@qq.com', NULL),
(2016220304001, 'xiejian', 'Undergraduate', 'xiejian@qq.com', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
