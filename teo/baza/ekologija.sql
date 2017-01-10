CREATE DATABASE IF NOT EXISTS ekologija;
 
USE ekologija;

CREATE TABLE IF NOT EXISTS `sadrzaj`( 
	`id` int(11) NOT NULL AUTO_INCREMENT, 
	`sadrzaj` text(65535) NOT NULL, 
	PRIMARY KEY (`id`) 
);

INSERT INTO `sadrzaj` (`sadrzaj`) VALUES
('Neki sadzaj nesto i jos nesto lorem ipsum dolor sit amet');
