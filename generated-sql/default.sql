
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- address
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address`
(
    `idAdress` INTEGER NOT NULL AUTO_INCREMENT,
    `address` VARCHAR(100) NOT NULL,
    `city` VARCHAR(100) NOT NULL,
    `postalcode` INTEGER(5) NOT NULL,
    PRIMARY KEY (`idAdress`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- article
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article`
(
    `idArticle` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NOT NULL,
    `description` TEXT,
    `priceHT` DECIMAL(10,3) NOT NULL,
    `size` VARCHAR(3),
    PRIMARY KEY (`idArticle`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- articlesCategories
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `articlesCategories`;

CREATE TABLE `articlesCategories`
(
    `idArticle` INTEGER NOT NULL,
    `idCategory` INTEGER NOT NULL,
    PRIMARY KEY (`idArticle`,`idCategory`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- articlesColors
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `articlesColors`;

CREATE TABLE `articlesColors`
(
    `idArticle` INTEGER NOT NULL,
    `idColor` INTEGER NOT NULL,
    PRIMARY KEY (`idArticle`,`idColor`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- card
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `card`;

CREATE TABLE `card`
(
    `idCard` INTEGER NOT NULL AUTO_INCREMENT,
    `cardNumber` VARCHAR(16) NOT NULL,
    `firstNameOwner` VARCHAR(45) NOT NULL,
    `lastNameOwner` VARCHAR(45) NOT NULL,
    `expirationMonth` INTEGER(2) NOT NULL,
    `expirationYear` INTEGER(4) NOT NULL,
    PRIMARY KEY (`idCard`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- category
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category`
(
    `idCategory` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NOT NULL,
    `percentTaxe` DECIMAL NOT NULL,
    PRIMARY KEY (`idCategory`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- color
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `color`;

CREATE TABLE `color`
(
    `idColor` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`idColor`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- command
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `command`;

CREATE TABLE `command`
(
    `idCommand` INTEGER NOT NULL AUTO_INCREMENT,
    `dateCommand` DATETIME NOT NULL,
    `totalAmount` DECIMAL(10,3) NOT NULL,
    `invoiced` TINYINT(1) NOT NULL,
    `cardId` INTEGER NOT NULL,
    `invoiceId` INTEGER NOT NULL,
    `userId` INTEGER NOT NULL,
    `invoiceAddressId` INTEGER NOT NULL,
    `shipToAddressId` INTEGER NOT NULL,
    PRIMARY KEY (`idCommand`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- commandLine
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `commandLine`;

CREATE TABLE `commandLine`
(
    `idCommand` INTEGER NOT NULL,
    `idArticle` INTEGER NOT NULL,
    `quantity` INTEGER NOT NULL
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- invoice
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `invoice`;

CREATE TABLE `invoice`
(
    `idInvoice` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NOT NULL,
    `invoiceDate` DATETIME NOT NULL,
    `totalAmount` DECIMAL(10,3) NOT NULL,
    `idUser` INTEGER NOT NULL,
    `idCommand` INTEGER NOT NULL,
    PRIMARY KEY (`idInvoice`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- shop
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `shop`;

CREATE TABLE `shop`
(
    `idShop` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`idShop`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- stock
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `stock`;

CREATE TABLE `stock`
(
    `idShop` INTEGER NOT NULL,
    `quantity` INTEGER NOT NULL,
    `idArticle` INTEGER NOT NULL
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user`
(
    `idUser` INTEGER NOT NULL AUTO_INCREMENT,
    `login` VARCHAR(15) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `salt` VARCHAR(255) NOT NULL,
    `firstName` VARCHAR(45) NOT NULL,
    `lastName` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`idUser`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- usersAdresses
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usersAdresses`;

CREATE TABLE `usersAdresses`
(
    `idUser` INTEGER NOT NULL,
    `idAddress` INTEGER NOT NULL,
    PRIMARY KEY (`idUser`,`idAddress`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- usersCards
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usersCards`;

CREATE TABLE `usersCards`
(
    `idUser` INTEGER NOT NULL,
    `idCard` INTEGER NOT NULL,
    PRIMARY KEY (`idUser`,`idCard`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
