CREATE DATABASE security_incident_db;

USE security_incident_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('Admin','Analyst') DEFAULT 'Analyst',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE incidents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    severity ENUM('Low','Medium','High','Critical') NOT NULL,
    status ENUM('Open','In Progress','Resolved') DEFAULT 'Open',
    assigned_to VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
