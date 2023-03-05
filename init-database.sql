CREATE DATABASE IF NOT EXISTS ubuntu;

USE ubuntu;

CREATE TABLE
    IF NOT EXISTS registrations (
        id INT AUTO_INCREMENT,
        firstName VARCHAR(50) NOT NULL,
        lastName VARCHAR(50) NOT NULL,
        gender VARCHAR(6) NOT NULL,
        emailAddress VARCHAR(100) NOT NULL,
        company VARCHAR(50) NOT NULL,
        position VARCHAR(50) NOT NULL,
        filePath VARCHAR(100),
        PRIMARY KEY (id)
    )