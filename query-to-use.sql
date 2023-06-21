CREATE DATABASE university;

USE university;

CREATE TABLE students (
  nim VARCHAR(10) PRIMARY KEY,
  name_std VARCHAR(50)
);

CREATE TABLE courses (
  code_crs VARCHAR(10) PRIMARY KEY,
  name_crs VARCHAR(50)
);

CREATE TABLE krs (
  nim VARCHAR(10),
  code_crs VARCHAR(10),
  FOREIGN KEY (nim) REFERENCES students(nim),
  FOREIGN KEY (code_crs) REFERENCES courses(code_crs)
);

INSERT INTO students (nim, name_std) VALUES
('12345678', 'John Doe'),
('23456789', 'Jane Smith'),
('34567890', 'David Johnson'),
('45678901', 'Sarah Williams'),
('56789012', 'Michael Brown'),
('67890123', 'Emily Davis'),
('78901234', 'Daniel Wilson'),
('89012345', 'Olivia Martinez'),
('90123456', 'Ethan Anderson'),
('01234567', 'Sophia Thomas');

INSERT INTO courses (code_crs, name_crs) VALUES
('MK001', 'Mathematics'),
('MK002', 'Physics'),
('MK003', 'Chemistry'),
('MK004', 'Biology'),
('MK005', 'English'),
('MK006', 'History'),
('MK007', 'Economics'),
('MK008', 'Sociology'),
('MK009', 'Geography'),
('MK010', 'Art');

INSERT INTO krs (nim, code_crs) VALUES
('12345678', 'MK001'),
('12345678', 'MK002'),
('23456789', 'MK003'),
('34567890', 'MK004'),
('45678901', 'MK001'),
('56789012', 'MK006'),
('67890123', 'MK007'),
('78901234', 'MK008'),
('89012345', 'MK009'),
('90123456', 'MK010');

SELECT * FROM students;

SELECT * FROM courses;

SELECT * FROM krs;