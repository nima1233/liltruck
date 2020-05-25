CREATE DATABASE liltruck;

USE liltruck;

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `roomname` varchar(100) NOT NULL,
  `roomnumber` varchar(100) NOT NULL, 
  `roomtype` varchar(100) NOT NULL,
  `roomprice` varchar(100) NOT NULL
)

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL, 
  `phone` varchar(100) NOT NULL,
  `message` varchar(999) NOT NULL
)

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL, 
  `phone` varchar(100) NOT NULL,
  `checkin` date,
  `checkout` date,
  `room` varchar(999) NOT NULL
);

