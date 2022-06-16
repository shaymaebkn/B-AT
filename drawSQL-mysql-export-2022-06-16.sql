CREATE TABLE `Clients`(
    `clientid` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Coachid` INT NOT NULL,
    `fname` VARCHAR(255) NOT NULL,
    `lname` VARCHAR(255) NOT NULL,
    `username` VARCHAR(255) NOT NULL,
    `Number` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `Country` VARCHAR(255) NOT NULL,
    `City` VARCHAR(255) NOT NULL,
    `Age` INT NOT NULL,
    `Height` DOUBLE(8, 2) NOT NULL,
    `Weight` DOUBLE(8, 2) NOT NULL,
    `weight_goal` DOUBLE(8, 2) NOT NULL,
    `type_coaching` VARCHAR(255) NOT NULL,
    `hours_sleep` VARCHAR(255) NOT NULL,
    `physical_activity` TEXT NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL
);
CREATE TABLE `Paques`(
    `paqueid` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Name` VARCHAR(255) NOT NULL,
    `Description` TEXT NOT NULL,
    `Category` VARCHAR(255) NOT NULL,
    `Price` DOUBLE(8, 2) NOT NULL
);
CREATE TABLE `Commande`(
    `commande-id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Date` DATE NOT NULL,
    `Adress` VARCHAR(255) NOT NULL,
    `price` INT NOT NULL,
    `clientid` INT NOT NULL,
    `paqueid` INT NOT NULL
);
CREATE TABLE `Coach`(
    `Coachid` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `dataid` INT NOT NULL,
    `fname` VARCHAR(255) NOT NULL,
    `Lname` VARCHAR(255) NOT NULL,
    `email` INT NOT NULL,
    `Description` TEXT NOT NULL,
    `Speciality` VARCHAR(255) NOT NULL,
    `Password` VARCHAR(255) NOT NULL,
    `coach` INT NOT NULL,
    `image` VARCHAR(255) NOT NULL
);
CREATE TABLE `Data`(
    `dataid` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `coachid` INT NOT NULL,
    `weight` DOUBLE NOT NULL,
    `height` DOUBLE NOT NULL,
    `blood-pressure` DOUBLE(8, 2) NOT NULL,
    `FCmax` INT NOT NULL,
    `diabetes` INT NOT NULL,
    `medical_file` VARCHAR(255) NOT NULL,
    `recovery_time` INT NOT NULL,
    `calories` INT NOT NULL
);
ALTER TABLE
    `Commande` ADD CONSTRAINT `commande_clientid_foreign` FOREIGN KEY(`clientid`) REFERENCES `Clients`(`clientid`);
ALTER TABLE
    `Clients` ADD CONSTRAINT `clients_coachid_foreign` FOREIGN KEY(`Coachid`) REFERENCES `Coach`(`Coachid`);
ALTER TABLE
    `Commande` ADD CONSTRAINT `commande_paqueid_foreign` FOREIGN KEY(`paqueid`) REFERENCES `Paques`(`paqueid`);
ALTER TABLE
    `Coach` ADD CONSTRAINT `coach_dataid_foreign` FOREIGN KEY(`dataid`) REFERENCES `Data`(`dataid`);