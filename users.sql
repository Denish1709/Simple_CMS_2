-- Adminer 4.8.0 MySQL 5.5.5-10.5.17-MariaDB-1:10.5.17+maria~ubu2004 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1,	'Denish',	'denishsubramaniam8@gmail.com',	'$2y$10$V0aOUQMQvqQxLpXQmUYOSuehL6JXL8MnehzSQ8u9kP4CgPdv0QfAm',	'2023-05-23 06:42:28'),
(2,	'Harden',	'Harden@gmail.com',	'$2y$10$FP1Mvmyq0i4tiRLe66gtwOlYd0W3TkddwrNOLrZv7av9hxWE4VU0e',	'2023-05-23 06:54:50');

-- 2023-05-23 07:11:37
