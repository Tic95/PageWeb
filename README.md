This is a webPage where you can chat on a forum 


juste copy this into the sql terminal and you are ready to go (make sure to have root as user and no password)

```
CREATE DATABASE BaseOfTic95;

CREATE TABLE `BaseOfTic95`.`table1` (`Index` INT NOT NULL AUTO_INCREMENT , `login` VARCHAR(20) NOT NULL , `pass` VARCHAR(20) NOT NULL , PRIMARY KEY (`Index`), UNIQUE (`login`));

CREATE TABLE `BaseOfTic95`.`tablemess` (`ID` INT NOT NULL AUTO_INCREMENT , `Pseudo` VARCHAR(20) NOT NULL , `Message` TEXT NOT NULL , PRIMARY KEY (`ID`));
```
