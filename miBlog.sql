SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `miBlog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `miBlog` ;

-- -----------------------------------------------------
-- Table `miBlog`.`Admin`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `miBlog`.`Admin` (
  `kullanici_adi` VARCHAR(20) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NOT NULL ,
  `eposta` VARCHAR(45) NULL ,
  `sifre` VARCHAR(45) NULL ,
  `site_adi` VARCHAR(45) NULL ,
  `slogan` VARCHAR(45) NULL ,
  `ad` VARCHAR(45) NULL ,
  `soyad` VARCHAR(45) NULL ,
  `aciklama` VARCHAR(45) NULL ,
  `ulke` VARCHAR(45) NULL ,
  `sehir` VARCHAR(45) NULL ,
  `iletisim` VARCHAR(45) NULL ,
  `resim` VARCHAR(45) NULL ,
  PRIMARY KEY (`kullanici_adi`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miBlog`.`Kategori`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `miBlog`.`Kategori` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `ad` VARCHAR(45) NULL ,
  `tarih` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miBlog`.`Yazi`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `miBlog`.`Yazi` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `baslik` VARCHAR(45) NULL ,
  `tarih` DATETIME NULL ,
  `onem` INT NULL ,
  `okunma_sayisi` INT NULL ,
  `icerik` TEXT NULL ,
  `Admin_kullanici_adi` VARCHAR(20) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NOT NULL ,
  `Kategori_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Yazi_Admin1` (`Admin_kullanici_adi` ASC) ,
  INDEX `fk_Yazi_Kategori1` (`Kategori_id` ASC) ,
  CONSTRAINT `fk_Yazi_Admin1`
    FOREIGN KEY (`Admin_kullanici_adi` )
    REFERENCES `miBlog`.`Admin` (`kullanici_adi` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Yazi_Kategori1`
    FOREIGN KEY (`Kategori_id` )
    REFERENCES `miBlog`.`Kategori` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miBlog`.`Kategori_has_Kategori`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `miBlog`.`Kategori_has_Kategori` (
  `Kategori_id` INT NOT NULL COMMENT '	' ,
  `Ust_kategori_id` INT NULL ,
  PRIMARY KEY (`Kategori_id`) ,
  INDEX `fk_Kategori_has_Kategori_Kategori2` (`Ust_kategori_id` ASC) ,
  INDEX `fk_Kategori_has_Kategori_Kategori1` (`Kategori_id` ASC) ,
  CONSTRAINT `fk_Kategori_has_Kategori_Kategori1`
    FOREIGN KEY (`Kategori_id` )
    REFERENCES `miBlog`.`Kategori` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Kategori_has_Kategori_Kategori2`
    FOREIGN KEY (`Ust_kategori_id` )
    REFERENCES `miBlog`.`Kategori` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miBlog`.`Etiket`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `miBlog`.`Etiket` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `ad` VARCHAR(45) NULL ,
  `kullanim_sayisi` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miBlog`.`Etiket_has_Yazi`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `miBlog`.`Etiket_has_Yazi` (
  `Etiket_id` INT NOT NULL ,
  `Yazi_id` INT NOT NULL ,
  PRIMARY KEY (`Etiket_id`, `Yazi_id`) ,
  INDEX `fk_Etiket_has_Yazi_Yazi1` (`Yazi_id` ASC) ,
  INDEX `fk_Etiket_has_Yazi_Etiket1` (`Etiket_id` ASC) ,
  CONSTRAINT `fk_Etiket_has_Yazi_Etiket1`
    FOREIGN KEY (`Etiket_id` )
    REFERENCES `miBlog`.`Etiket` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etiket_has_Yazi_Yazi1`
    FOREIGN KEY (`Yazi_id` )
    REFERENCES `miBlog`.`Yazi` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
