CREATE TABLE `experiment_subject` (
	`experiment_id`	int(11)	NOT NULL,
    	`subject_id`	int(11)	NOT NULL,
    	`date`		date	NOT NULL,
    	PRIMARY KEY (`experiment_id`, `subject_id`)
);