CREATE DATABASE students;
CREATE TABLE student (
    id INT AUTO_INCREMENT PRIMARY KEY ,
        First_NAME VARCHAR (255),
        Last_NAME VARCHAR (255),
        Email VARCHAR (255) UNIQUE,
        Mobile_Number VARCHAR (255) UNIQUE,
        Grade VARCHAR (255)
);
INSERT INTO `student` (`id`, `First_NAME`, `Last_NAME`, `Email`, `Mobile_Number`, `Grade`) 
VALUES (1, 'Mohamed', 'Magdy', 'm.magdy@gmail.com', '100000001', 'First'),
(2, 'Mahmoud', 'Ali', 'm.ali@gmail.com', '120000001', 'Third'),
(3, 'Marwan', 'Ahmed', 'm.ahmed@gmail.com', '102000023', 'Fourth'),
(4, 'Maged', 'Kamal', 'm.kamal@gmail.com', '113000235', 'Second')
;

