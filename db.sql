CREATE DATABASE IF NOT EXISTS lp_system;
USE lp_system;

DROP TABLE IF EXISTS history;

CREATE TABLE history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    easy_available INT NOT NULL,
    hard_available INT NOT NULL,
    max_assignments INT NOT NULL,
    easy_time INT NOT NULL,
    hard_time INT NOT NULL,
    total_time INT NOT NULL,
    result TEXT NOT NULL
);