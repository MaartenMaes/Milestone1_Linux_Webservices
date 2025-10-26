CREATE DATABASE IF NOT EXISTS milestone1; --Create a database if it doesn't exist yet called milestone1
USE milestone1; --Use the milestone1 database

CREATE TABLE IF NOT EXISTS userinfo ( --Create a table in the milestone1 database if this doesn't exist yet
    id INT AUTO_INCREMENT PRIMARY KEY, --Create a primary key called id which is an integer that will automatically increment (+1)
    fullname VARCHAR(255) NOT NULL --Create fullname column which cannot be NULL and has the maximum amount of 255 characters
);

INSERT INTO userinfo (fullname) VALUES ('Maarten Maes'); --Insert the value Maarten Maes as the fullname column into the userinfo table
