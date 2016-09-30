CREATE TABLE `subjects` (
	`id`		int(11)		NOT NULL auto_increment,
	`cf`		varchar(16)	NOT NULL unique,
    	`name`		varchar(100)	NOT NULL,
    	`surname`	varchar(100)	NOT NULL,
	PRIMARY KEY  (`id`)
);