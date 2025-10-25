CREATE DATABASE milestone1;
USE milestone1;

CREATE TABLE userinfo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL
);

INSERT INTO userinfo (fullname) VALUES ('Maarten Maes');
