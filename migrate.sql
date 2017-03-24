
SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `book_shelf`;
CREATE TABLE `book_shelf` (
  `shelf_id` int(11) NOT NULL,
  `book_id` int(10) unsigned NOT NULL,
  KEY `book_id` (`book_id`),
  KEY `shelf_id` (`shelf_id`),
  CONSTRAINT `book_shelf_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  CONSTRAINT `book_shelf_ibfk_2` FOREIGN KEY (`shelf_id`) REFERENCES `shelves` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `shelves`;
CREATE TABLE `shelves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `shelves` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'Programming',	'2017-03-24 14:46:24',	'2017-03-24 14:46:24'),
(2,	'Web Programming',	'2017-03-24 14:46:36',	'2017-03-24 14:46:36'),
(3,	'Networking',	'2017-03-24 14:53:10',	'2017-03-24 14:53:10'),
(4,	'Laravel',	'2017-03-24 14:58:18',	'2017-03-24 14:58:18'),
(5,	'Angular',	'2017-03-24 14:58:25',	'2017-03-24 14:58:25');

-- 2017-03-24 20:37:33
