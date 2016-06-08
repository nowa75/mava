-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema mava
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mava
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mava` DEFAULT CHARACTER SET utf8 ;
USE `mava` ;

-- -----------------------------------------------------
-- Table `mava`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mava`.`user` ;

CREATE TABLE IF NOT EXISTS `mava`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `bio` LONGTEXT CHARACTER SET 'utf8' NOT NULL,
  `email` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `mava`.`workspace`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mava`.`workspace` ;

CREATE TABLE IF NOT EXISTS `mava`.`workspace` (
  `id` INT NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `description` TINYTEXT NOT NULL,
  `due_date` DATETIME NOT NULL,
  `attachment` TINYINT(1) NULL,
  `workspace_id` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mava`.`project`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mava`.`project` ;

CREATE TABLE IF NOT EXISTS `mava`.`project` (
  `id` INT NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `description` TINYTEXT NOT NULL,
  `due_date` DATETIME NOT NULL,
  `workspace_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_project_idx` (`workspace_id` ASC),
  CONSTRAINT `fk_project`
    FOREIGN KEY (`workspace_id`)
    REFERENCES `mava`.`workspace` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mava`.`task`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mava`.`task` ;

CREATE TABLE IF NOT EXISTS `mava`.`task` (
  `id` INT NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `description` TINYTEXT NOT NULL,
  `due_date` DATETIME NOT NULL,
  `attachment` TINYINT(1) NULL,
  `project_id` INT NULL,
  `user_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_task_2_idx` (`user_id` ASC),
  INDEX `fk_task_1_idx` (`project_id` ASC),
  CONSTRAINT `fk_task_1`
    FOREIGN KEY (`project_id`)
    REFERENCES `mava`.`project` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_task_2`
    FOREIGN KEY (`user_id`)
    REFERENCES `mava`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
