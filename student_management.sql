DROP TABLE IF EXISTS enrollment;
DROP TABLE IF EXISTS courses;
DROP TABLE IF EXISTS students;


CREATE TABLE students (
    id INT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(20)
);


CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);


CREATE TABLE enrollment (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    course_id INT,
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);


INSERT INTO students (id, name, email, phone) VALUES
(1101, 'kawsar Ahmed', 'kawsar1101@gmail.com', '01900000000'),
(1102, 'Tanvirul Haque', 'tanvir1102@gmail.com', '01911111111');

INSERT INTO courses (name) VALUES
('DBMS'),
('computer Networks'),
('Accouting');

INSERT INTO enrollment (student_id, course_id) VALUES
(1101, 1),
(1101, 2),
(1102, 3);
