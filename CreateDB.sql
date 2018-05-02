-- MySQL Script generated by MySQL Workbench
-- Wed May  2 11:46:55 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`User` ;

CREATE TABLE IF NOT EXISTS `mydb`.`User` (
  `userID` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`userID`, `name`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Tree`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Tree` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Tree` (
  `treeID` INT NOT NULL AUTO_INCREMENT,
  `latitude` INT NOT NULL,
  `longitude` INT NOT NULL,
  `type` VARCHAR(45) NOT NULL,
  `height` VARCHAR(45) NOT NULL,
  `difficulty` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`treeID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Rating`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Rating` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Rating` (
  `ratingID` INT NOT NULL AUTO_INCREMENT,
  `ratingValue` INT NULL,
  `comment` VARCHAR(1024) NULL,
  `userID` INT NULL,
  `treeID` INT NULL,
  UNIQUE INDEX `ratingID_UNIQUE` (`ratingID` ASC),
  PRIMARY KEY (`ratingID`),
  INDEX `treeID_idx` (`treeID` ASC),
  INDEX `userID_idx` (`userID` ASC),
  CONSTRAINT `treeID`
    FOREIGN KEY (`treeID`)
    REFERENCES `mydb`.`Tree` (`treeID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `userID`
    FOREIGN KEY (`userID`)
    REFERENCES `mydb`.`User` (`userID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;