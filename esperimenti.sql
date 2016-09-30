CREATE TABLE `experiments` (
	`id`		int(11)		NOT NULL auto_increment,
    	`code`		varchar(10)	NOT NULL unique,
	`title`		varchar(100)	NOT NULL,
	`amount`	int(11)		NOT NULL default 0,
	PRIMARY KEY (`id`)
);