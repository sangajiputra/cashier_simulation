-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_transaction` varchar(255) NOT NULL,
  `transaction_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `transactions` (`id`, `no_transaction`, `transaction_date`) VALUES
(1,	'001',	'2018-08-01'),
(2,	'002',	'2018-08-02'),
(6,	'003',	'2019-06-27');

DROP TABLE IF EXISTS `transaction_detail`;
CREATE TABLE `transaction_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` int(11) NOT NULL,
  `item` varchar(225) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `transaction_detail` (`id`, `transaction_id`, `item`, `quantity`) VALUES
(7,	6,	'dkas',	1),
(8,	6,	'dkas',	2),
(9,	6,	'dkas',	3);

-- 2019-06-29 02:06:19
