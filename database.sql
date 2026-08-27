CREATE DATABASE my_form;

USE my_form;

CREATE TABLE submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL
ALTER TABLE submissions
ADD age INT

ALTER TABLE submissions
ADD gender INT

ALTER TABLE submissions
ADD height INT

ALTER TABLE submissions
ADD nationality INT

ALTER TABLE submissions
ADD likes INT

ALTER TABLE submissions
ADD dislikes INT

ALTER TABLE submissions
ADD favouriteMeal INT

ALTER TABLE submissions
ADD favouriteHoliday INT;
