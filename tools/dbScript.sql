SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `PWSR_BD` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `PWSR_BD` ;

-- -----------------------------------------------------
-- Table `PWSR_BD`.`c_typeProduct`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`c_typeProduct` (
  `idc_typeProduct` INT NOT NULL ,
  `fldtypeProduct` VARCHAR(45) NULL ,
  PRIMARY KEY (`idc_typeProduct`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PWSR_BD`.`c_product`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`c_product` (
  `iddish` INT(12) NOT NULL ,
  `flddishName` VARCHAR(25) NOT NULL ,
  `fldprice` VARCHAR(25) NOT NULL ,
  `flddescription` VARCHAR(25) NOT NULL ,
  `fldimage` VARCHAR(25) NOT NULL ,
  `id_typeProduct` INT NOT NULL ,
  PRIMARY KEY (`iddish`, `id_typeProduct`) ,
  INDEX `fk_c_product_c_typeProduct1` (`id_typeProduct` ASC) ,
  CONSTRAINT `fk_c_product_c_typeProduct1`
    FOREIGN KEY (`id_typeProduct` )
    REFERENCES `PWSR_BD`.`c_typeProduct` (`idc_typeProduct` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `PWSR_BD`.`c_gallery`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`c_gallery` (
  `idgallery` INT(12) NOT NULL ,
  `fldnameGallery` VARCHAR(25) NOT NULL ,
  PRIMARY KEY (`idgallery`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `PWSR_BD`.`c_images`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`c_images` (
  `idimage` INT(12) NOT NULL ,
  `fldimageName` VARCHAR(25) NOT NULL ,
  `idgallery` INT(12) NULL ,
  PRIMARY KEY (`idimage`) ,
  INDEX (`idgallery` ASC) ,
  INDEX `c_images_fki01` () ,
  CONSTRAINT ``
    FOREIGN KEY (`idgallery` )
    REFERENCES `PWSR_BD`.`c_gallery` (`idgallery` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `PWSR_BD`.`c_news`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`c_news` (
  `idnew` INT(12) NOT NULL ,
  `fldtitle` VARCHAR(25) NOT NULL ,
  `fldimageName` VARCHAR(50) NOT NULL ,
  `fldcontent` LONGTEXT NOT NULL ,
  `fldinitDate` DATE NOT NULL ,
  `fldendDate` DATE NOT NULL ,
  PRIMARY KEY (`idnew`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `PWSR_BD`.`c_newsletter`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`c_newsletter` (
  `idnewsletter` INT(12) NOT NULL ,
  `fldsubject` VARCHAR(30) NOT NULL ,
  `fldlink` VARCHAR(30) NOT NULL ,
  `fldimageName` VARCHAR(50) NOT NULL ,
  `fldsendDate` DATE NOT NULL ,
  PRIMARY KEY (`idnewsletter`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `PWSR_BD`.`c_userType`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`c_userType` (
  `idc_userType` INT NOT NULL ,
  `flduserType` VARCHAR(45) NULL ,
  PRIMARY KEY (`idc_userType`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PWSR_BD`.`c_users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`c_users` (
  `idc_users` INT NOT NULL ,
  `fldnameUser` VARCHAR(45) NULL ,
  `fldpassword` VARCHAR(45) NULL ,
  `id_userType` INT NOT NULL ,
  PRIMARY KEY (`idc_users`, `id_userType`) ,
  INDEX `fk_c_users_c_userType1` (`id_userType` ASC) ,
  CONSTRAINT `fk_c_users_c_userType1`
    FOREIGN KEY (`id_userType` )
    REFERENCES `PWSR_BD`.`c_userType` (`idc_userType` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PWSR_BD`.`c_clients`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`c_clients` (
  `id_email` VARCHAR(50) NOT NULL ,
  `fldTelephone` INT(15) NOT NULL ,
  `fldBornDate` DATE NOT NULL ,
  `flduserType` TINYINT(1) NOT NULL ,
  `c_users_idc_users` INT NOT NULL ,
  PRIMARY KEY (`id_email`, `c_users_idc_users`) ,
  INDEX `fk_c_clients_c_users1` (`c_users_idc_users` ASC) ,
  CONSTRAINT `fk_c_clients_c_users1`
    FOREIGN KEY (`c_users_idc_users` )
    REFERENCES `PWSR_BD`.`c_users` (`idc_users` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `PWSR_BD`.`p_reservation`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`p_reservation` (
  `idreservation` INT(12) NOT NULL AUTO_INCREMENT ,
  `fldnumPersons` INT(12) NOT NULL ,
  `fldcoment` LONGTEXT NOT NULL ,
  `flddate` DATE NOT NULL ,
  `fldtime` VARCHAR(20) NOT NULL ,
  `id_users` INT(12) NOT NULL ,
  `fldstatus` TINYINT(1)  NULL ,
  PRIMARY KEY (`idreservation`, `id_users`) ,
  INDEX `p_reservation_fk01` (`id_users` ASC) ,
  CONSTRAINT `p_reservation_fk01`
    FOREIGN KEY (`id_users` )
    REFERENCES `PWSR_BD`.`c_clients` (`id_email` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `PWSR_BD`.`c_dayMenu`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`c_dayMenu` (
  `id_dayMenu` INT NOT NULL ,
  `fldinitDate` DATE NULL ,
  `fldfinishDate` DATE NULL ,
  PRIMARY KEY (`id_dayMenu`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PWSR_BD`.`c_GeneralMenu`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`c_GeneralMenu` (
  `id_GeneralMenu` INT NOT NULL ,
  `fldnombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_GeneralMenu`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PWSR_BD`.`c_generalCombo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`c_generalCombo` (
  `idc_GeneralMenu` INT NOT NULL ,
  `idc_dish` INT(12) NOT NULL ,
  PRIMARY KEY (`idc_GeneralMenu`, `idc_dish`) ,
  INDEX `c_GeneralMenu_hasc_dish_fk01` (`idc_GeneralMenu` ASC) ,
  INDEX `c_GeneralMenu_hasc_dish_fk02` (`idc_dish` ASC) ,
  CONSTRAINT `c_GeneralMenu_hasc_dish_fk01`
    FOREIGN KEY (`idc_GeneralMenu` )
    REFERENCES `PWSR_BD`.`c_GeneralMenu` (`id_GeneralMenu` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `c_GeneralMenu_hasc_dish_fk02`
    FOREIGN KEY (`idc_dish` )
    REFERENCES `PWSR_BD`.`c_product` (`iddish` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PWSR_BD`.`c_comboDay`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PWSR_BD`.`c_comboDay` (
  `idc_dayMenu` INT NOT NULL ,
  `idc_dish` INT(12) NOT NULL ,
  PRIMARY KEY (`idc_dayMenu`, `idc_dish`) ,
  INDEX `c_dayMenu_has_c_dish_fk01` (`idc_dayMenu` ASC) ,
  INDEX `c_dayMenu_has_c_dish_fk02` (`idc_dish` ASC) ,
  CONSTRAINT `c_dayMenu_has_c_dish_fk01`
    FOREIGN KEY (`idc_dayMenu` )
    REFERENCES `PWSR_BD`.`c_dayMenu` (`id_dayMenu` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `c_dayMenu_has_c_dish_fk02`
    FOREIGN KEY (`idc_dish` )
    REFERENCES `PWSR_BD`.`c_product` (`iddish` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
