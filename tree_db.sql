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
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Tree`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Tree` (
  `treeID` INT NOT NULL AUTO_INCREMENT,
  `latitude` INT NOT NULL,
  `longitude` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`treeID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Rating`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Rating` (
  `ratingID` INT NOT NULL AUTO_INCREMENT,
  `ratingValue` INT NULL,
  `comment` VARCHAR(1024) NULL,
  UNIQUE INDEX `ratingID_UNIQUE` (`ratingID` ASC),
  CONSTRAINT `treeID`
    FOREIGN KEY (`ratingID`)
    REFERENCES `mydb`.`Tree` (`treeID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`User` (
  `userID` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`userID`, `name`),
  CONSTRAINT `ratingID`
    FOREIGN KEY ()
    REFERENCES `mydb`.`Rating` ()
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
