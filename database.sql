CREATE DATABASE advertising;

USE advertising;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE advertisements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    userid INT NOT NULL,
    title VARCHAR(255) NOT NULL
);

INSERT INTO `advertisements` (`id`, `userid`, `title`)
VALUES 
    ('1', '1', 'Advertisement 1'),
    ('2', '2', 'Advertisement 2'),
    ('3', '1', 'Advertisement 3'),
    ('4', '3', 'Advertisement 4'),
    ('5', '2', 'Advertisement 5'),
    ('6', '1', 'Advertisement 6'),
    ('7', '3', 'Advertisement 7'),
    ('8', '2', 'Advertisement 8'),
    ('9', '1', 'Advertisement 9'),
    ('10', '3', 'Advertisement 10'),
    ('11', '2', 'Advertisement 11'),
    ('12', '1', 'Advertisement 12'),
    ('13', '3', 'Advertisement 13'),
    ('14', '2', 'Advertisement 14'),
    ('15', '1', 'Advertisement 15'),
    ('16', '3', 'Advertisement 16'),
    ('17', '2', 'Advertisement 17'),
    ('18', '1', 'Advertisement 18'),
    ('19', '3', 'Advertisement 19'),
    ('20', '2', 'Advertisement 20');

INSERT INTO `users` (`id`, `name`)
VALUES 
    ('1', 'John Doe'),
    ('2', 'Jane Smith'),
    ('3', 'Michael Johnson'),
    ('4', 'Emily Brown'),
    ('5', 'David Wilson'),
    ('6', 'Emma Lee'),
    ('7', 'Daniel Clark'),
    ('8', 'Sophia Martinez'),
    ('9', 'James Anderson'),
    ('10', 'Olivia Taylor'),
    ('11', 'William Moore'),
    ('12', 'Isabella Garcia'),
    ('13', 'Alexander Hernandez'),
    ('14', 'Ava Lopez'),
    ('15', 'Matthew Gonzalez'),
    ('16', 'Chloe Perez'),
    ('17', 'Ethan Ramirez'),
    ('18', 'Mia Torres'),
    ('19', 'Benjamin Flores'),
    ('20', 'Amelia Ruiz');