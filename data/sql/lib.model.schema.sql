
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- citizenship
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `citizenship`;


CREATE TABLE `citizenship`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- region
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `region`;


CREATE TABLE `region`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- branch
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `branch`;


CREATE TABLE `branch`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- speciality
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `speciality`;


CREATE TABLE `speciality`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- job_type
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `job_type`;


CREATE TABLE `job_type`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- worker
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `worker`;


CREATE TABLE `worker`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`surname` VARCHAR(120)  NOT NULL,
	`name` VARCHAR(80)  NOT NULL,
	`father` VARCHAR(80),
	`age` INTEGER  NOT NULL,
	`gender` INTEGER  NOT NULL,
	`citizenship_id` INTEGER,
	`region_id` INTEGER,
	`address` VARCHAR(255),
	`phone` VARCHAR(30),
	`email` VARCHAR(64),
	`target_regions` VARCHAR(255),
	`branch_id` INTEGER,
	`speciality_id` INTEGER,
	`salary` INTEGER,
	`schedule` VARCHAR(64),
	`job_type_id` INTEGER,
	`start_date` DATE,
	`need_place` INTEGER,
	`has_permission` INTEGER,
	`need_registration` INTEGER,
	`languages` VARCHAR(255),
	`computer` VARCHAR(255),
	`additional_info` TEXT,
	`password` VARCHAR(32),
	PRIMARY KEY (`id`),
	INDEX `worker_FI_1` (`citizenship_id`),
	CONSTRAINT `worker_FK_1`
		FOREIGN KEY (`citizenship_id`)
		REFERENCES `citizenship` (`id`),
	INDEX `worker_FI_2` (`region_id`),
	CONSTRAINT `worker_FK_2`
		FOREIGN KEY (`region_id`)
		REFERENCES `region` (`id`),
	INDEX `worker_FI_3` (`branch_id`),
	CONSTRAINT `worker_FK_3`
		FOREIGN KEY (`branch_id`)
		REFERENCES `branch` (`id`),
	INDEX `worker_FI_4` (`speciality_id`),
	CONSTRAINT `worker_FK_4`
		FOREIGN KEY (`speciality_id`)
		REFERENCES `speciality` (`id`),
	INDEX `worker_FI_5` (`job_type_id`),
	CONSTRAINT `worker_FK_5`
		FOREIGN KEY (`job_type_id`)
		REFERENCES `job_type` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- employer
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `employer`;


CREATE TABLE `employer`
(
	`title` VARCHAR(64)  NOT NULL,
	`contact_person` VARCHAR(128),
	`address` VARCHAR(255),
	`phone` VARCHAR(30),
	`email` VARCHAR(64),
	`web` VARCHAR(128),
	`region_id` INTEGER,
	`speciality_id` INTEGER,
	`target_regions` VARCHAR(255),
	`salary` INTEGER,
	`how_many_needed` INTEGER,
	`schedule` VARCHAR(64),
	`start_date` DATE,
	`provide_place` INTEGER,
	`description` TEXT,
	`make_permission` INTEGER,
	`make_registration` INTEGER,
	`education` VARCHAR(64),
	`experience` VARCHAR(255),
	`computer` VARCHAR(255),
	`age_start` INTEGER,
	`age_end` INTEGER,
	`gender` INTEGER,
	`additional_info` TEXT,
	`password` VARCHAR(32),
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
	INDEX `employer_FI_1` (`region_id`),
	CONSTRAINT `employer_FK_1`
		FOREIGN KEY (`region_id`)
		REFERENCES `region` (`id`),
	INDEX `employer_FI_2` (`speciality_id`),
	CONSTRAINT `employer_FK_2`
		FOREIGN KEY (`speciality_id`)
		REFERENCES `speciality` (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
