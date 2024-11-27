-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 04:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wildtracks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(6) NOT NULL,
  `username` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Table structure for table `admins`';

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `username`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `requestId` int(11) NOT NULL,
  `First_Name` varchar(32) NOT NULL,
  `Last_Name` varchar(32) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Mobile` varchar(16) NOT NULL,
  `Message` varchar(1024) NOT NULL,
  `Solution` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Table structure for table `contact`';

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`requestId`, `First_Name`, `Last_Name`, `Email`, `Mobile`, `Message`, `Solution`) VALUES
(9, 'Jhon', 'Doe', 'johndoe@gmail.com', '0713254323', 'I am currently a guest at your wildlife safari park and I�m experiencing an issue with the safari vehicle provided to me. The air conditioning in the vehicle seems to be malfunctioning, making the journey quite uncomfortable given the heat. Could you please send a maintenance team to have a look at it? Your assistance would be greatly appreciated', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(3) NOT NULL,
  `username` varchar(32) NOT NULL,
  `Tour_type` varchar(32) NOT NULL,
  `number_of_guests` int(100) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `special_requests` varchar(512) NOT NULL,
  `status` varchar(32) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Table structure for table `reservations';

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `username`, `Tour_type`, `number_of_guests`, `checkin`, `checkout`, `special_requests`, `status`) VALUES
(30, 'Ramesh', 'Deluxe Tour', 5, '2024-06-30', '2024-07-03', '', 'Accepted'),
(31, 'Kulitha', 'Premium Tour', 20, '2024-07-14', '2024-07-17', '', 'Pending'),
(32, 'Kulitha', 'Family Tour', 4, '2024-08-10', '2024-08-12', '', 'Declined'),
(33, 'Pramodya', 'Suite Tour', 3, '2024-06-30', '2024-07-02', '', 'Pending'),
(34, 'Sandeep', 'Family Tour', 5, '2024-06-13', '2024-06-16', '', 'Pending'),
(35, 'Sandeep', 'Deluxe Tour', 6, '2024-07-14', '2024-07-15', '', 'Accepted'),
(36, 'Havindu', 'Suite Tour', 2, '2024-07-12', '2024-07-20', '', 'Pending'),
(37, 'Havindu', 'Family Tour', 4, '2024-06-16', '2024-06-19', '', 'Pending'),
(42, 'Kulitha', 'Deluxe Tours', 7, '2024-04-30', '2024-05-04', 'I need tour guide.', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewId` int(3) NOT NULL,
  `TourId` int(3) NOT NULL,
  `username` varchar(32) NOT NULL,
  `review` varchar(2048) NOT NULL,
  `date` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Table structure for table `reviews';

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewId`, `TourId`, `username`, `review`, `date`) VALUES
(24, 89, 'Dulaksha', 'The safari experience was impeccably organized and well-executed. The wildlife encounters were thrilling, and the natural surroundings were pristine. The safari vehicle was spacious, offering a comfortable journey through the wilderness. The guides were knowledgeable and provided high-quality binoculars for animal spotting. The safari had all the necessary amenities, including a packed lunch and a coffee break. The overall ambiance was exhilarating and captivating, making it a perfect adventure after a long day. The wild calls of nature and the serene environment left us in awe, truly a once-in-a-lifetime experience.', '11th Dec 2023'),
(28, 91, 'Dulaksha', 'While the safari vehicle was compact, it was thoughtfully designed to maximize viewing opportunities. The seats were comfortable, and the vehicle was well-maintained. The viewing area, although not overly spacious, provided excellent visibility and had all the necessary amenities, including high-quality binoculars. The ride, even on rugged terrains, was surprisingly smooth. The overall experience was intimate and thrilling, making it a perfect adventure for wildlife enthusiasts.', '15th Mar 2024'),
(29, 90, 'Pramodya', 'The safari had a well-planned itinerary and was equipped with convenient amenities like high-quality binoculars and comfortable seating. The vehicle was clean and provided a great view of the surroundings. The guides were well-prepared and provided interesting information about the wildlife we encountered. The overall experience was thrilling and left us with unforgettable memories.', '11th Dec 2023'),
(30, 92, 'Pramodya', 'The safari tour had a well-organized itinerary and was equipped with convenient amenities like high-quality binoculars and comfortable seating. The safari vehicle was clean and offered a panoramic view of the wildlife. The guides were professional and equipped with extensive knowledge about the local flora and fauna. The overall experience was immersive and left us feeling closer to nature. The thrill of spotting wildlife in their natural habitat was unparalleled, truly a must-have experience for any nature enthusiast.', '27th Apr 2023'),
(31, 91, 'Pramodya', 'I was let down by the safari tour as it did not live up to my expectations. The tour felt outdated and in need of a fresh approach. The seating was uncomfortable, and the vehicle seemed worn. The cleanliness was below average, with visible dust and stains. The viewing area was cramped, and the ride was bumpy due to poor suspension. It was an overall disappointing experience, and I would not recommend this safari tour to others.', '14th Mar 2023'),
(32, 89, 'Kulitha', 'The safari tour was expansive and meticulously planned, creating an adventurous and inviting atmosphere. The wildlife sightings were incredibly captivating, providing a thrilling experience. The tour had a separate relaxation spot with comfortable seating, perfect for soaking in the natural beauty around. The overall ambiance was exhilarating, making it a perfect escape into the wild', '12th Jun 2023'),
(33, 92, 'Kulitha', 'The safari had a separate relaxation spot with comfortable seating, perfect for unwinding amidst nature. The tour was immaculate, with well-maintained vehicles and high-quality equipment. The attention to detail and the overall comfort of the safari made my adventure truly unforgettable. The thrill of the wildlife sightings and the serenity of the natural surroundings were beyond compare.', '22nd Jan 2024'),
(34, 89, 'Sandeep', 'I was pleasantly surprised by the stunning views during the safari tour. The open vehicle offered breathtaking panoramic views of the sprawling savannah and the surrounding wildlife. The sight of animals in their natural habitat against the backdrop of the setting sun was truly a sight to behold.', '22nd Feb 2024'),
(35, 90, 'Sandeep', 'The safari tour was designed with utmost adventure in mind. The itinerary was expansive and thoughtfully arranged, allowing for a variety of wildlife encounters. The safari vehicle was incredibly comfortable, with cushioned seats and safety features. The tour had ample opportunities for photography, including stops at scenic spots, making it easy to capture memorable moments. The attention to detail in the tour planning and the thoughtful amenities provided made my safari truly unforgettable.', '27th Apr 2024'),
(36, 90, 'Havindu', 'I was impressed by the high-tech features of the safari tour. The tour had a smart tracking system that allowed us to locate and observe various wildlife in their natural habitat. The binoculars provided were top-notch, enabling us to view animals up close with just a touch of a button. The overall experience was seamless and truly brought us closer to nature.', '22nd Jan 2024'),
(37, 92, 'Havindu', 'The modern facilities, such as high-quality binoculars and a comfortable safari vehicle, added an extra level of convenience and adventure. It was a seamless integration of technology and nature, enhancing my overall safari experience. The thrill of spotting wildlife in their natural habitat was unparalleled, truly a must-have experience for any nature enthusiast.', '15th Feb 2024');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `TourId` int(6) NOT NULL,
  `TourType` varchar(32) NOT NULL,
  `price` varchar(32) NOT NULL,
  `VehicleType` varchar(32) NOT NULL,
  `capacity` varchar(32) NOT NULL,
  `Includs` varchar(100) NOT NULL,
  `More_About_Tour` varchar(2048) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `TourImage` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Table structure for table `Tours';

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`TourId`, `TourType`, `price`, `VehicleType`, `capacity`, `Includs`, `More_About_Tour`, `description`, `TourImage`) VALUES
(89, 'Premium Tours', '39990', '6x6 Jeep', '30', 'flat-screen TV, mini-fridge, binoculars, complimentary Wi-Fi', 'Discover the Untamed Beauty\r\nEmbark on an unforgettable journey through the heart of nature. Our thrilling Standard Safari promises an exhilarating experience for adventurers and wildlife enthusiasts alike. ', 'Our thrilling standard safari is perfect for solo adventurers or couples looking for an exciting journey at an affordable price. The safari features comfortable vehicles and all the essential amenities to ensure a memorable experience. The tour offers a chance to observe wildlife in their natural habitat, making it a must-have adventure for nature enthusiasts.', 'premiumtour.jpg'),
(90, 'Family Tours', '30000', '4x4 Jeep', '12', 'flat-screen TV, mini-fridge, binoculars, complimentary Wi-Fi', 'Unleash Your Adventurous Spirit\r\nWelcome to a safari experience like no other! Our Deluxe Safari Adventure combines the thrill of the wild with the comfort of luxury. Buckle up for an unforgettable journey:\r\n', 'Immerse yourself in the grandeur and expanse of our deluxe safari tour. This extensive tour offers a variety of wildlife encounters, a thrilling ride through the wilderness, and comfortable seating, making it ideal for families or small groups. Enjoy the added convenience of a well-informed guide and a packed lunch for your refreshments. The thrill of spotting wildlife in their natural habitat and the serenity of the natural surroundings will leave you in awe, truly a once-in-a-lifetime experience.', 'familytour.png'),
(91, 'Deluxe Tours', '67700', '6x6 Jeep', '30', 'flat-screen TV, mini-fridge, binoculars, complimentary Wi-Fi', 'Off-Road Excitement: Hold on tight as we navigate rugged terrain in our specially designed safari vehicles. Feel the adrenaline surge as you chase the horizon, seeking hidden treasures around every bend.', 'Welcome to a realm where adventure intertwines with opulence. Our Deluxe Safari Adventure promises an unparalleled experience for discerning travelers. Buckle up for a journey that transcends the ordinary:\r\n\r\nWildlife Extravaganza: Picture yourself amidst the untamed beauty of the savannah. Lions, giraffes, and zebras—each sighting is a canvas of wonder. Our seasoned guides will unravel the secrets of the animal kingdom, leaving you spellbound.', 'back-6.jpg'),
(92, 'Suite Tours', '35000', '4x4 Jeep', '5', 'flat-screen TV, mini-fridge, binoculars, complimentary Wi-Fi', 'Guided Wisdom: Our knowledgeable guides are more than just narrators—they’re storytellers. Learn about the intricate ecosystems, animal behavior, and conservation efforts that protect these precious lands.', 'Our family safari tour offers ample adventure and excitement for larger groups. With a spacious safari vehicle featuring comfortable seating and a knowledgeable guide, this tour can accommodate up to six guests. Enjoy the convenience of packed meals, high-quality binoculars, and designated stops at scenic spots for a truly immersive experience. Experience the thrill of wildlife spotting and the serenity of nature, making it a perfect outing for the entire family.', 'suitetour.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(6) NOT NULL,
  `username` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Table structure for table `users';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `first_name`, `last_name`, `email`, `phone_number`, `password`) VALUES
(5, 'Kulitha', 'Kulitha', 'Sandith', 'kulitha@gmail.com', '0771802002', 'kuli123'),
(18, 'Admin', '', '', 'admin@gmail.com', '0771802005', 'admin123'),
(20, 'Pramodya', 'Pramodya', 'Ala', 'pramo@gmail.com', '0771802001', 'pramodya123'),
(21, 'Sandeep', 'Kalana', 'Sandeep', 'kala@gmail.com', '0771802008', 'kala69'),
(22, 'Havindu', 'Havindu', 'Nimadith', 'havi123@gmail.com', '0771802000', 'havi123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewId`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`TourId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `TourId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
