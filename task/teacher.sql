CREATE DATABASE teacher;
CREATE TABLE teachers (
    id INT AUTO_INCREMENT PRIMARY KEY ,
        First_NAME VARCHAR (255),
        Last_NAME VARCHAR (255),
        Email VARCHAR (255) UNIQUE,
        Mobile_Number VARCHAR (255) UNIQUE,
        Department VARCHAR (255)
);
INSERT INTO `teachers` (`id`, `First_NAME`, `Last_NAME`, `Email`, `Mobile_Number`, `Department`) 
VALUES (1, 'Mohamed', 'Marwan', 'm.marwan@gmail.com', '120000002', 'Math'),
(2, 'Maged', 'Ahmed', 'm.ahmed@gmail.com', '118933231', 'History'),
(3, 'Ahmed', 'Mahmoud', 'a.mahmoud@gmail.com', '102327372', 'English'),
(4, 'Kamal', 'Ali', 'k.ali@gmail.com', '102313864', 'Arabic')
;