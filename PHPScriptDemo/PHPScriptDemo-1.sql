create database PHPScriptDemo;
use PHPScriptDemo;
create table Student(
    StudentID int Primary Key, 
    Firstname varchar(255),
    Lastname varchar(255),
    DateOfBirth DATE, 
    Email varchar(255),
    Phone int NOT NULL
);
create table Course(
    CourseID INT Primary Key,
    CourseName varchar(255),
    Credits varchar(255)
);
create table Instructor(
    InstructorID int Primary Key,
    Firstname varchar(255),
    Lastname varchar(255),
    Email varchar(255),
    Phone int NOT NULL
);
create table Enrollment(
    EnrollmentID int Primary Key,
    StudentID int,
    Foreign Key (StudentID) References Student(StudentID), 
    CourseID int,
    Foreign Key (CourseID) References Course(CourseID),
    EnrollmentDate DATE,
    Grade int NOT NULL
);

insert into Student(StudentID, Firstname, Lastname, DateOfBirth, Email, Phone)
values(135548, "Kamisato", "Ayato", 11/26/2002, "ayato@gmail.com", 09506549689);

UPDATE student SET DateOfBirth = "2002-11-26" WHERE StudentID = 135548;

insert into Course (CourseID, CourseName, Credits)
values(1, "CIT17", "3.0");

insert into Instructor(InstructorID, Firstname, Lastname, Email, Phone)
values(546215, "Quan", "Zhongli", "zhongli@gmail.com", 09212437823);

insert into Enrollment(EnrollmentID, StudentID, CourseID, EnrollmentDate, Grade)
values(13, 135548, 1, 2023-08-16, 90);

UPDATE enrollment SET EnrollmentDate = "2023-08-16" WHERE EnrollmentID = 13;