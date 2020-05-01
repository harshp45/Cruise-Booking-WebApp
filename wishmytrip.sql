-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 05:54 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wishmytrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `accessories_id` int(11) NOT NULL,
  `accessories_image` varchar(500) DEFAULT NULL,
  `accessories_name` varchar(20) NOT NULL,
  `accessories_category` varchar(10) NOT NULL,
  `accessories_description` varchar(500) NOT NULL,
  `accessories_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`accessories_id`, `accessories_image`, `accessories_name`, `accessories_category`, `accessories_description`, `accessories_price`) VALUES
(1, 'https://i5.walmartimages.com/asr/066766ae-8dd3-4dfb-b210-39c7d2e562df_1.85597039ef23fbd0bfea3156dfe6b8c7.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF', 'Snorkling', 'male', 'Shallow diving equipment', 90),
(2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSioIFw2yvMpLwuFALCjYksB24M6cOEnnfh2nXwUNgU916_oicx1g&s', 'Swim Suit', 'Female', 'Flexible Swimming Suit', 55),
(3, 'https://ae01.alicdn.com/kf/HTB1OZfvJVXXXXc3XFXXq6xXFXXXU/New-70cm-Flamingo-Swimming-Ring-for-Kids-Swim-Rings-Thicken-PVC-Inflatable-Pool-Floats-Bathing-Toy.jpg', 'Toy', 'Kids', 'A beautiful Toy for kids to play', 20);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(10) NOT NULL,
  `fk_state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `fk_state_id`) VALUES
(1, 'New York', 1),
(2, 'Toronto', 2),
(3, 'Pattaya', 3),
(4, 'Miami', 4);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'USA'),
(2, 'Canada'),
(3, 'Thailand');

-- --------------------------------------------------------

--
-- Table structure for table `cruise`
--

CREATE TABLE `cruise` (
  `cruise_id` int(11) NOT NULL,
  `cruise_name` varchar(20) NOT NULL,
  `cruise_type` varchar(20) NOT NULL,
  `cruise_image` varchar(200) DEFAULT NULL,
  `cruise_source` varchar(50) NOT NULL,
  `cruise_destination` varchar(50) NOT NULL,
  `cruise_no_of_nights` int(5) NOT NULL,
  `cruise_price` int(10) NOT NULL,
  `cruise_departure_date` date NOT NULL,
  `cruise_departure_port` varchar(50) NOT NULL,
  `cruise_arrival_port` varchar(50) NOT NULL,
  `fk_provider_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cruise`
--

INSERT INTO `cruise` (`cruise_id`, `cruise_name`, `cruise_type`, `cruise_image`, `cruise_source`, `cruise_destination`, `cruise_no_of_nights`, `cruise_price`, `cruise_departure_date`, `cruise_departure_port`, `cruise_arrival_port`, `fk_provider_id`) VALUES
(1, 'Blue Haroon', 'Royal', 'images/r1.jpeg', 'New York', 'Ireland', 5, 350, '2019-11-03', 'Long Island Port', 'Queen\'s Port', 2),
(2, 'Titanic', 'Luxurious', 'images/r2.jpg', 'Southampton', 'Venezuela', 4, 500, '2019-10-14', 'Star Line Port', 'Tempa Port', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cruise_provider`
--

CREATE TABLE `cruise_provider` (
  `provider_id` int(11) NOT NULL,
  `provider_name` varchar(20) NOT NULL,
  `provider_password` varchar(15) NOT NULL,
  `provider_email_id` varchar(30) NOT NULL,
  `provider_address` varchar(50) NOT NULL,
  `fk_city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cruise_provider`
--

INSERT INTO `cruise_provider` (`provider_id`, `provider_name`, `provider_password`, `provider_email_id`, `provider_address`, `fk_city_id`) VALUES
(1, 'The White Star Line', 'whitestarline', 'whites@whitestar.com', '43, Long Island, New York, USA', 1),
(2, 'Royal Sailing', 'royalsail12334', 'royal@royalsail.com', '33, Lakshore, Toronto, Ontario', 2),
(3, 'Princess', 'princess123', 'princess22@gmail.com', '132, royal dock, New York, USA', 1),
(4, 'Blue Sky Line', 'blueline12', 'bsl123@gmail.com', 'Blue Sky Line, Lakeshore, Toronto, ON', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `hotel_image` varchar(200) DEFAULT NULL,
  `hotel_place` varchar(20) NOT NULL,
  `hotel_description` varchar(2000) NOT NULL,
  `hotel_rating` float NOT NULL,
  `fk_city_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_name`, `hotel_image`, `hotel_place`, `hotel_description`, `hotel_rating`, `fk_city_id`) VALUES
(1, 'Hotel Hilton', 'https://media-cdn.tripadvisor.com/media/photo-w/1a/12/57/8d/exterior.jpg', 'Pattaya, Thailand', 'Unique by design and centrally located, Hilton Pattaya rises 34 levels above CentralFestival Pattaya Beach, South East Asia\'s largest beachfront shopping complex, with spectacular views North and South over Pattaya Bay and the Gulf of Thailand. Styled with the property\'s beachfront location in mind, all Hilton Pattaya rooms and suites feature 180 degrees of unobstructed ocean views with private balconies. This unique position forms the core of Hilton Pattaya\'s design concept and philosophy. Panoramic views, high quality design and finishes, and impeccable service play an integral part of the experience that is on offer to both leisure and business travelers. From the moment you arrive you will know that a new standard for style and sophistication has been set. A unique combination of light, textures and finishes create an atmosphere of pure indulgence. Just 90 minutes from Bangkok Suvarnabumi Airport and with so much luxury to offer, the Hilton Pattaya is your new recreation and business destination of choice.', 3.5, '3'),
(2, ' The Strathcona Hotel', 'https://media-cdn.tripadvisor.com/media/oyster/980/0d/cc/83/31/entrance--v14971557.jpg', 'Toronto, Canada', 'Welcome to The Strathcona Hotel Downtown Toronto. Come home to the best location in Downtown Toronto. Imagine all the comforts of home combined with one of the best locations in downtown Toronto and you’ve got The Strathcona Hotel. Stay.Play.Work.Meet.Explore. We can handle it all. And just outside our doors is the best of downtown Toronto. Our downtown Toronto hotel is across the street from the historic Fairmont Royal York Hotel, Union Station / VIA Rail and within two blocks of the Air Canada Centre, Rogers Centre, Metro Toronto Convention Centre, CN Tower, and more located in the midst of the theatre and financial districts. The guest rooms and suite accommodations at The Strathcona Hotel downtown Toronto combine style and substance and have been designed for the contemporary wireless world. ', 3, '2'),
(3, 'Fort Lauderdale Marriott North', 'https://media-cdn.tripadvisor.com/media/photo-w/0a/b3/85/3f/lobby.jpg', 'Florida, USA', 'Discover comfort and convenience at Fort Lauderdale Marriott North, a modern and ideally located hotel in North Fort Lauderdale, Florida. Our accommodations delight with stylish rooms and suites near the lush Cypress Creek Florida Nature Preserve, which bestows an enchanting backdrop for our guests all year round. We are also close to downtown Fort Lauderdale, Pompano beaches and Fort Lauderdale Beach.', 5, '4');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_name`, `job_type`) VALUES
(1, 'AB Testing Lead', 'We are currently searching for a highly motivated AB Testing Lead  who will drive the use of testing methodologies, the preparation and execution of a testing plan and the use of Adobe Target to help stakeholder teams to optimize their customer facing web products within princess.com to improve business results. \r\n\r\nIn a city with enviable quality of life balance, our corporate offices are located in beautiful Southern California in downtown Santa Clarita. Santa Clarita is what CNN Money Magazine calls “one of the best places to live in California.” With award-winning schools, special events and a large arts and cultural scene, Santa Clarita is the third largest city in Los Angeles County and is ranked as one of the safest cities in not only California, but in the nation.'),
(2, 'Junior Assistant Cruise Director', 'The Junior Assistant Cruise Director is an entry-level position on the Cruise Staff team. This team provides fun and exciting activities for guests, like trivia games, Zumba® classes, ice sculpture demonstrations, dance lessons, and arts and crafts. In this role your goal is to help the Cruise Staff provide a premium entertainment package and make our guests’ vacations memorable. You contribute to these memories by actively participating in all events with enthusiasm and dedication.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `booking_date` date NOT NULL,
  `sailing_date` date NOT NULL,
  `fk_cruise_id` int(11) NOT NULL,
  `fk_provider_id` int(11) NOT NULL,
  `booking_status` varchar(20) NOT NULL,
  `fk_accessories_id` int(11) NOT NULL,
  `Number_of_persons` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `fk_user_id`, `source`, `destination`, `booking_date`, `sailing_date`, `fk_cruise_id`, `fk_provider_id`, `booking_status`, `fk_accessories_id`, `Number_of_persons`) VALUES
(1, 1, 'Toronto', 'Cape Town', '2019-10-14', '2019-12-18', 1, 2, 'Booking Confirmed', 1, 1),
(2, 2, 'New York', 'Southampton', '2019-10-20', '2019-11-15', 2, 1, 'Booking Confirmed', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `card_number` bigint(16) NOT NULL,
  `amount` double NOT NULL,
  `card_name` varchar(15) NOT NULL,
  `card_type` varchar(15) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_status` tinyint(1) NOT NULL,
  `fk_order_id` int(11) NOT NULL,
  `fk_provider_id` int(11) NOT NULL,
  `fk_hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `card_number`, `amount`, `card_name`, `card_type`, `fk_user_id`, `payment_date`, `payment_status`, `fk_order_id`, `fk_provider_id`, `fk_hotel_id`) VALUES
(1, 2563983566631823, 1324, 'Visa', 'Credit', 1, '2019-10-15', 1, 1, 2, 1),
(2, 4056728312562893, 1200, 'Master', 'Credit', 2, '2019-10-06', 1, 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place_id` int(11) NOT NULL,
  `place_location` varchar(20) NOT NULL,
  `place_image` varchar(200) DEFAULT NULL,
  `place_description` varchar(100) NOT NULL,
  `fk_city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `place_location`, `place_image`, `place_description`, `fk_city_id`) VALUES
(1, 'Toronto', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Toronto_-_ON_-_CN_Tower_bei_Nacht2.jpg/220px-Toronto_-_ON_-_CN_Tower_bei_Nacht2.jpg', 'Canada\'s most exploring city', 2),
(2, 'New York', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkr4i_IYQl3lyz7QlULXJdJX6mqsy9dTla-h6focM7WHxfcpTJVA&s', 'Financial Capital of US', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(10) NOT NULL,
  `fk_country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`, `fk_country_id`) VALUES
(1, 'New York', 1),
(2, 'Ontario', 2),
(3, 'Pattaya', 3),
(4, 'Florida', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email_id` varchar(40) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pasword` varchar(15) NOT NULL,
  `user_dob` date NOT NULL,
  `user_gender` varchar(7) NOT NULL,
  `user_mobile_no` varchar(13) NOT NULL,
  `user_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email_id`, `user_name`, `user_pasword`, `user_dob`, `user_gender`, `user_mobile_no`, `user_address`) VALUES
(1, 'kp12@gmail.com', 'Karan', 'karanpatel123', '2019-10-16', 'Male', '24167483096', '1080, ParkView Road, Los Angeles, California, USA'),
(2, 'parth_12@yahoo.com', 'Parth Randhawa', 'parthrd123', '2019-05-13', 'Male', '6459034675', '65, Liberty Road, San Jose, California, USA'),
(3, 'patelharsh235027@gmail.com', 'Harsh Patel', 'harsh123', '2019-12-11', 'Male', '6479013740', '65, Liberty Road, San Jose, California, USA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`accessories_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `cruise`
--
ALTER TABLE `cruise`
  ADD PRIMARY KEY (`cruise_id`);

--
-- Indexes for table `cruise_provider`
--
ALTER TABLE `cruise_provider`
  ADD PRIMARY KEY (`provider_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `accessories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cruise`
--
ALTER TABLE `cruise`
  MODIFY `cruise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cruise_provider`
--
ALTER TABLE `cruise_provider`
  MODIFY `provider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
