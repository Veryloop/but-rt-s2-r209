CREATE TABLE `users` (
	`username` VARCHAR(20) NOT NULL,
	`password` VARCHAR(20) NOT NULL,
	PRIMARY KEY (`username`)
) ENGINE=InnoDB;

CREATE TABLE `switchs` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`ref` VARCHAR(20) NOT NULL,
	`warranty` DATE NOT NULL,
	`ip` VARCHAR(20) NOT NULL,
	`configuration` LONGTEXT NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;