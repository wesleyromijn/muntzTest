CREATE DATABASE dealerdatabase;
use dealerdatabase;

CREATE TABLE dealers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(192) NOT NULL,
    address VARCHAR(192) NOT NULL,
    zipcode VARCHAR(6) NOT NULL,
    city VARCHAR(192) NOT NULL,
    country VARCHAR(192) NOT NULL,
    phone VARCHAR(192),
   remarks TEXT
);