CREATE SCHEMA CV;

CREATE TABLE User (
id INT auto_increment,
name CHAR(240) NOT NULL ,
last_name CHAR(255) NOT NULL,
email CHAR(255) NOT NULL,
Description CHAR(255) NOT NULL,
PRIMARY KEY(id)
);