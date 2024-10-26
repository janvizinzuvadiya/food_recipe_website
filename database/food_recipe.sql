-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307:3307
-- Generation Time: Oct 08, 2024 at 03:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `chef_name` varchar(20) NOT NULL,
  `special_dish` varchar(30) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`chef_name`, `special_dish`, `year`) VALUES
('sanjeev kapoor', 'Aloo Nazakat', 'since 1984'),
('ranveer brab', ' Dorra Kebab', '2001'),
('Vikas Khanna', 'Tree of Life', '2000'),
('Atul Kochhar', 'Sea Bass with Coconut Ginger S', '1993'),
('Kunal Kapur', 'Dahi Kebab', '2000'),
('Gaggan Anand', 'Yogurt Explosion', '2007'),
(' Archana Doshi', 'Vegetarian South Indian dishes', '2007'),
('Nita Mehta', 'Kebabs and Cakes', '1990'),
('Amrita Raichand', 'Healthy Bites (focus on nutrit', '2012'),
('aa', 'aaaaaaa', '22');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `email`, `feedback`) VALUES
('Zinzuvadiya Janvi ', 'khgvjb@gmail.com', 'w4rsdfc'),
('Zinzuvadiya Janvi ', 'khgvjb@gmail.com', 'w4rsdfc'),
('awefwef', 'hd@gmail.com', 'aegrege'),
('aaaaaaaaa', 'aaaaaaa@gamil.com', 'aaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `email`, `phone`, `country`, `state`) VALUES
('maitri', '123', NULL, NULL, NULL, NULL),
('janu', '456', NULL, NULL, NULL, NULL),
('shivu', '111', NULL, NULL, NULL, NULL),
('aa', 'aaa', 'aaaaaaa@gamil.com', 548164696, 'USA', 'New York');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `name` varchar(20) NOT NULL,
  `ingrendient` varchar(100) NOT NULL,
  `method` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`name`, `ingrendient`, `method`) VALUES
('pani puri', 'puri , pani , onion , sav', 'The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u'),
('puran poli', 'Toor Dal ,Cardamom powder & Nutmeg ,Ghee ,Jaggery ,', ', 2) Start by rinsing the toor dal. Wash it thoroughly, repeating the process 2-3 times until the water runs clear.\r\n\r\n3, 4) Add enough water to cover the dal by about 2-3 inches. Cover with a lid and allow the dal to soak for approximately 2 hours. \r\n\r\n5) After soaking, discard the soaking water and add fresh water.\r\n\r\nAdd a glassful of water to the instant pot liner, and place a rack in the center. Place this dal container on the rack, and cover the insert pan. Cover the instant pot with a lid and keep the valve in a sealing position.\r\n\r\n6) Cook the dal on manual mode at high pressure for 10 minutes. Once the cooking cycle is complete and the pressure has naturally released, carefully open the lid and remove the container from the instant pot.'),
('khaman dhokla', 'Besan , Ginger, Green chili , Sugar , Turmeric powder: , Hing , Oil , Baking soda', '1) In a large bowl, add water, sugar, salt, hing, turmeric powder and citric acid. \r\n\r\n2 ) Whisk until sugar is dissolved.\r\n\r\n3) Sift the besan into the prepared water using a strainer.\r\n\r\n4) Whisk it until you get a lump-free batter. Notice the yellow color of batter.\r\n\r\n5) Now beat the batter in one direction for around 5-7 minutes. Yes, you’ll get good arm exercise. '),
('sarbat', 'lllllllllllllllllllllllllllll', 'wwwwwwwwwwwwwwwwwww'),
('thepla', 'flour , besan , masala , oil , salt ', '<h1 class=\"w3-center\">How To Make Theplas?</h1><br>\r\n            <h5 class=\"w3-center\">Ingredients<br></h5>\r\n            <ul>\r\n                <li>1/2 cup Wheat flour</li>\r\n                <li>1/2 cup Sorghum flour</li>\r\n                <li>1/2 cup Besan</li>\r\n                <li>1/2 cup Ragi flour</li>\r\n                <li>1 cup Curd</li>\r\n                <li>1 cup Fenugreek, finely chopped</li>\r\n                <li>1 tsp Ginger-garlic paste</li>\r\n                <li>1 tsp Green paste</li>\r\n                <li>1 tsp Crushed red pepper</li>\r\n                <li>1 tsp Ajwain</li>\r\n                <li>1 tsp Coriander powder</li>\r\n                <li>A pinch of Hing</li>\r\n                <li>2 tbsp Oil</li>\r\n            </ul><br>\r\n\r\n            <p class=\"w3-large\">The Catering was founded in blabla by Mr. Smith... (continue your text here).</p>\r\n        </div>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
