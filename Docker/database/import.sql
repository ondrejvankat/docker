CREATE DATABASE testovaciDatabase;

USE testovaciDatabase;

CREATE TABLE testTab (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
    );

INSERT INTO `testTab` (`name`)
VALUES ('testovaci nazev1');

INSERT INTO `testTab` (`name`)
VALUES ('testovaci nazev2');
