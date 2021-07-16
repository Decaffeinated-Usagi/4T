-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema hackathon
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema hackathon
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hackathon` DEFAULT CHARACTER SET utf8 ;
USE `hackathon` ;

-- -----------------------------------------------------
-- Table `hackathon`.`Dish`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`Dish` (
  `dishId` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `dishName` VARCHAR(45) NOT NULL,
  `recipeDescription` MEDIUMTEXT NOT NULL,
  `dishSteps` LONGTEXT NOT NULL,
  PRIMARY KEY (`dishId`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackathon`.`Category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`Category` (
  `categoryId` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `carbonEmission` DOUBLE UNSIGNED NOT NULL,
  `categoryName` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`categoryId`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackathon`.`Ingredients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`Ingredients` (
  `ingredientsId` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `ingredientsName` VARCHAR(45) NOT NULL,
  `Category_categoryId` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`ingredientsId`),
  INDEX `fk_Ingredients_Category1_idx` (`Category_categoryId` ASC) USING BTREE,
  CONSTRAINT `fk_Ingredients_Category1`
    FOREIGN KEY (`Category_categoryId`)
    REFERENCES `hackathon`.`Category` (`categoryId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackathon`.`Recipe_Ingredients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`Recipe_Ingredients` (
  `recipeIngredientsId` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `ingredientsUnit` VARCHAR(45) NOT NULL,
  `ingredientsAmount` DOUBLE UNSIGNED NOT NULL,
  `Ingredients_ingredientsId` INT UNSIGNED NOT NULL,
  `Dish_dishId` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`recipeIngredientsId`),
  INDEX `fk_Recipe_Ingredients_idx` (`Ingredients_ingredientsId` ASC) USING BTREE,
  INDEX `fk_Recipe_Dish1_idx` (`Dish_dishId` ASC) USING BTREE,
  CONSTRAINT `fk_Recipe_Ingredients`
    FOREIGN KEY (`Ingredients_ingredientsId`)
    REFERENCES `hackathon`.`Ingredients` (`ingredientsId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Recipe_Dish1`
    FOREIGN KEY (`Dish_dishId`)
    REFERENCES `hackathon`.`Dish` (`dishId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
