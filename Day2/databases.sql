-- create database if there no database with name outside
CREATE DATABASE outside;

-- Now switing user to outside database if user is in another database
USE outside;

-- Creating the users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
