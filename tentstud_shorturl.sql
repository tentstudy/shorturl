-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `shorturl`;
CREATE TABLE `shorturl` (
  `id` varchar(20) NOT NULL,
  `url` varchar(220) NOT NULL,
  `timeupdate` varchar(30) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `user` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `shorturl` (`id`, `url`, `timeupdate`, `count`, `user`) VALUES
('26c0af5',	'https://api.tentstudy.xyz/short-link/tentstudy-short-link.php',	'17/07/2017 == 07:05:58',	0,	0),
('3820f20',	'https://google.com',	'17/07/2017 == 05:36:04',	0,	0),
('5e89a75',	'http://facebook.com',	'17/07/2017 == 06:39:14',	0,	0),
('7b663c6',	'https://facebook.com',	'17/07/2017 == 07:03:15',	4,	0),
('82b70ed',	'https://short.tentstudy.xyz/',	'17/07/2017 == 07:28:29',	0,	0),
('9d2780a',	'https://www.google.com',	'17/07/2017 == 05:47:50',	0,	0),
('ad1c35f',	'https://google.com/',	'17/07/2017 == 05:45:26',	0,	0);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `UID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Fuid` varchar(100) NOT NULL,
  `Ffname` varchar(60) NOT NULL,
  `Femail` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`UID`, `Fuid`, `Ffname`, `Femail`) VALUES
(2,	'2116534928572748',	'Nguyễn Đăng Dũng',	NULL);

-- 2017-07-17 12:23:31
