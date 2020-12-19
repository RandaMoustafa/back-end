CREATE DATABASE classe;
CREATE TABLE classes(
     id INT AUTO_INCREMENT PRIMARY KEY ,
        Teacher_Id INT (255) UNIQUE,
        Subjects VARCHAR (255),
        Grade VARCHAR (255),
);
ALTER TABLE `classes` ADD `Start_Date` DATE NOT NULL AFTER `Grade`;
ALTER TABLE `classes` ADD `Paasing_Grade` VARCHAR(255) NOT NULL AFTER `Start_Date`;
 INSERT INTO `classes` (`id`, `Teacher_Id`, `Subjects`, `Grade`, `Start_Date`, `Paasing_Grade`) 
VALUES (1,1, 'Math1', 'First', '20/10/2020', 50),
(2,1,'Math2', 'First', '25/10/2020', 70),
(3,2, 'History of Mongos', 'Fourth', '15/10/2020', 60),
(4,2, 'History of Ancient Egyptians', 'Secound', '20/10/2020', 80),
(5,3, 'Semantics', 'First', '15/09/2020', 75),
(6,3, 'Lingustics', 'First', '20/09/2020', 70),
(7,4, 'Grammer', 'Third', '15/11/2020', 85),
(8,4, 'Novel', 'Third', '1/11/2020', 45)
;
