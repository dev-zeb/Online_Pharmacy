-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 06:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_user_name` varchar(10) NOT NULL,
  `admin_pass` varchar(8) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `image_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_user_name`, `admin_pass`, `useremail`, `image_dir`) VALUES
('admin', '123', 'admin@gmail.com', 'images/admin_pro.png');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `cart_added` datetime DEFAULT curdate(),
  `user_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `pro_id`, `cart_added`, `user_name`) VALUES
(3, 5, '2021-06-06 00:00:00', 'amir'),
(8, 4, '2021-06-07 00:00:00', 'amir'),
(9, 14, '2021-06-07 00:00:00', 'amir'),
(10, 7, '2021-06-07 00:00:00', 'amir'),
(48, 8, '2021-06-14 00:00:00', 'zeb'),
(58, 3, '2021-06-14 00:00:00', 'zeb'),
(60, 1, '2021-06-14 00:00:00', 'zeb'),
(64, 7, '2021-06-14 00:00:00', 'zeb'),
(66, 15, '2021-06-17 00:00:00', 'zeb');

-- --------------------------------------------------------

--
-- Table structure for table `e_wallet`
--

CREATE TABLE `e_wallet` (
  `wallet_id` int(10) NOT NULL,
  `balance` double NOT NULL,
  `total_withdraw` double NOT NULL,
  `reward_amount` double DEFAULT NULL,
  `user_email` varchar(50) NOT NULL,
  `image_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e_wallet`
--

INSERT INTO `e_wallet` (`wallet_id`, `balance`, `total_withdraw`, `reward_amount`, `user_email`, `image_dir`) VALUES
(1, 0, 0, 250, 'l@gmail.com', NULL),
(2, 0, 0, 0, 'r@gmail.com', NULL),
(3, 0, 0, 0, 'h@gmail.com', NULL),
(4, 0, 0, 0, 'amir@gmail.com', NULL),
(5, 0, 0, 0, 'sabir@gmail.com', NULL),
(6, 0, 0, 0, 'new@gmail.com', NULL),
(7, 0, 0, 0, 'tempo@tempMail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `online_chat`
--

CREATE TABLE `online_chat` (
  `chat_id` int(10) NOT NULL,
  `customer_messege` varchar(255) NOT NULL,
  `moderator_reply` varchar(255) DEFAULT NULL,
  `moderatormod_user_id` int(10) DEFAULT NULL,
  `chat_created_date` date NOT NULL,
  `time` time DEFAULT NULL,
  `user_email` varchar(50) NOT NULL,
  `image_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_chat`
--

INSERT INTO `online_chat` (`chat_id`, `customer_messege`, `moderator_reply`, `moderatormod_user_id`, `chat_created_date`, `time`, `user_email`, `image_dir`) VALUES
(1, 'hello', NULL, NULL, '2020-09-27', '11:29:44', 'azhn@gmail.com', NULL),
(2, 'Is there any one ? i need help ? ', 'Assalamualaikum ? how can help you ? ', NULL, '2020-09-27', '11:55:58', 'azhn@gmail.com', NULL),
(3, 'My product is not good, it is broken .', 'Can you send me the order no ? ', NULL, '2020-09-27', '12:24:55', 'azhn@gmail.com', NULL),
(4, 'Order no: 234242. please give get the product as fast as possible. I need it fast.  ', 'ok. I forwarded the order to the refund department.they will contact you. Is there anything more i can do .!', NULL, '2020-09-27', '12:34:18', 'azhn@gmail.com', NULL),
(5, 'Thank you. I got their call. ', NULL, NULL, '2020-09-27', '01:18:37', 'azhn@gmail.com', NULL),
(6, 'Thank you again working ', NULL, NULL, '2020-09-27', '02:33:19', 'azhn@gmail.com', NULL),
(7, 'Hello. Is there any one', NULL, NULL, '2020-09-28', '12:33:17', 'l@gmail.com', NULL),
(8, 'Ok. ', NULL, NULL, '2020-09-28', '12:33:43', 'l@gmail.com', NULL),
(9, 'Hello ; ', NULL, NULL, '2020-09-28', '12:46:47', 'r@gmail.com', NULL),
(10, 'hi', NULL, NULL, '2020-09-28', '01:01:17', 'h@gmail.com', NULL),
(11, 'Hello, is anyone there?', NULL, NULL, '2020-09-28', '11:54:08', 'azhn@gmail.com', NULL),
(12, 'Hello', NULL, NULL, '2020-09-29', '07:06:04', 'azhn@gmail.com', NULL),
(13, 'hi', NULL, NULL, '2020-09-29', '11:35:42', 'azhn@gmail.com', NULL),
(14, 'hi', NULL, NULL, '2020-09-29', '11:43:54', 'azhn@gmail.com', NULL),
(15, 'hi', NULL, NULL, '2020-09-29', '12:03:13', 'azhn@gmail.com', NULL),
(16, 'hi', NULL, NULL, '2020-09-29', '12:10:20', 'azhn@gmail.com', NULL),
(17, '                        jhiojl', NULL, NULL, '2021-06-08', '09:43:47', 'amir', NULL),
(18, '                        ok', NULL, NULL, '2021-06-08', '09:45:23', 'amir', NULL),
(19, 'jkj kj', NULL, NULL, '2021-06-08', '09:50:23', 'amir', NULL),
(20, '555', NULL, NULL, '2021-06-17', '11:56:01', 'zeb', NULL),
(21, '                        jhnmn', NULL, NULL, '2021-06-17', '11:56:08', 'zeb', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_products`
--

CREATE TABLE `ordered_products` (
  `order_id` int(11) NOT NULL,
  `ordered_by` varchar(50) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_cat` varchar(30) NOT NULL,
  `pro_quantity` int(11) NOT NULL,
  `pro_total_amount` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `ordered_by_user_email` varchar(50) NOT NULL,
  `order_total_amouont` double NOT NULL,
  `order_total_quantity` int(10) NOT NULL,
  `order_date` datetime NOT NULL,
  `cart_id` int(10) NOT NULL,
  `product_ids_list` varchar(300) NOT NULL,
  `cart_addede_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(20) DEFAULT 'placed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `ordered_by_user_email`, `order_total_amouont`, `order_total_quantity`, `order_date`, `cart_id`, `product_ids_list`, `cart_addede_datetime`, `order_status`) VALUES
(2, 'azhn@gmail.com', 850, 3, '2020-09-27 05:41:04', 4, ' 0, 13, 15, 2', '2020-09-30 04:36:54', 'Delivered'),
(4, 'azhn@gmail.com', 1625, 5, '2020-09-27 06:00:15', 9, ' 0, 15, 14, 13, 10, 9', '2020-09-29 02:13:39', 'Delivered'),
(5, 'azhn@gmail.com', 935, 4, '2020-09-26 07:03:21', 12, ' 0, 14, 10, 9, 1', '2020-10-01 03:29:29', 'Delivered'),
(6, 'l@gmail.com', 600, 3, '2020-09-28 12:28:36', 16, ' 0, 3, 12, 7', '2020-09-29 05:54:28', 'Delivered'),
(7, 'r@gmail.com', 1075, 3, '2020-09-28 12:47:55', 19, ' 0, 3, 5, 4', '2020-10-01 03:29:33', 'Delivered'),
(8, 'azhn@gmail.com', 475, 2, '2020-09-28 09:55:03', 37, ' 0, 14, 2', '2020-09-29 06:14:22', 'Delivered'),
(9, 'azhn@gmail.com', 475, 2, '2020-09-28 10:49:53', 37, ' 0, 14, 2', '2020-09-28 15:47:49', 'placed'),
(10, 'azhn@gmail.com', 1455, 5, '2020-09-29 11:50:43', 54, ' 0, 8, 3, 13, 17, 15', '2021-02-20 15:38:53', 'Delivered'),
(24, 'zeb', 380, 2, '2021-06-14 10:27:49', 47, ' 0, 17, 4', '2021-06-13 18:00:00', 'placed');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `published_date` date NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `post_cat` varchar(20) NOT NULL,
  `topic_name` varchar(50) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `published_date`, `author_name`, `post_cat`, `topic_name`, `details`, `image_dir`) VALUES
(1, '2020-09-29', 'World Health Organization', 'blogs', 'What is Corana virus?', 'Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV). A novel coronavirus (nCoV) is a new strain that has not been previously identified in humans.\r\nCoronaviruses are zoonotic, meaning they are transmitted between animals and people. Detailed investigations found that SARS-CoV was transmitted from civet cats to humans and MERS-CoV from dromedary camels to humans. Several known coronaviruses are circulating in animals that have not yet infected humans.\r\n\r\nCommon signs of infection include respiratory symptoms, fever, cough, shortness of breath and breathing difficulties. In more severe cases, infection can cause pneumonia, severe acute respiratory syndrome, kidney failure and even death.\r\n\r\nStandard recommendations to prevent infection spread include regular hand washing, covering mouth and nose when coughing and sneezi', 'images/Posts/corona.jpg'),
(2, '2020-09-29', 'World Health Organization', 'blogs', 'What does SARS-CoV-2 stand for?', 'Cause\r\nSARS coronavirus (SARS-CoV) – virus identified in 2003. SARS-CoV is thought to be an animal virus from an as-yet-uncertain animal reservoir, perhaps bats, that spread to other animals (civet cats) and first infected humans in the Guangdong province of southern China in 2002.\r\n\r\nTransmission\r\nAn epidemic of SARS affected 26 countries and resulted in more than 8000 cases in 2003. Since then, a small number of cases have occurred as a result of laboratory accidents or, possibly, through animal-to-human transmission (Guangdong, China).\r\n\r\nTransmission of SARS-CoV is primarily from person to person. It appears to have occurred mainly during the second week of illness, which corresponds to the peak of virus excretion in respiratory secretions and stool, and when cases with severe disease start to deteriorate clinically. Most cases of human-to-human transmission occurred in the health care setting, in the absence of adequate infection control precautions. Implementation of appropriate ', 'images/Posts/sars.jpg'),
(3, '2020-09-29', 'Medicine Plus', 'healthcare', 'What are the benefits of Excercise?', 'We have all heard it many times before - regular exercise is good for you, and it can help you lose weight. But if you are like many Americans, you are busy, you have a sedentary job, and you havent yet changed your exercise habits. The good news is that its never too late to start. You can start slowly, and find ways to fit more physical activity into your life. To get the most benefit, you should try to get the recommended amount of exercise for your age. If you can do it, the payoff is that you will feel better, help prevent or control many diseases, and likely even live longer.\r\n\r\nWhat are the health benefits of exercise?\r\nRegular exercise and physical activity may\r\n\r\nHelp you control your weight. Along with diet, exercise plays an important role in controlling your weight and preventing obesity. To maintain your weight, the calories you eat and drink must equal the energy you burn. To lose weight, you must use more calories than you eat and drink.\r\n\r\nReduce your risk of heart dise', 'images/Posts/excercise.jpg'),
(4, '2020-09-29', 'Admin', 'offer', '20% Discount!!!', 'Discount On Every Sanitization Products! In this pandemic, Sanitization products have become so rare, but we are here! Providing upto 20% discount on every sanitization products.', 'images/Posts/offer2.jpg'),
(5, '2020-09-29', 'medicalnewstoday.com', 'blogs', 'Heart Disease', 'Heart disease is a term covering any disorder of the heart.\r\n\r\nUnlike cardiovascular disease, which describes problems with the blood vessels and circulatory system as well as the heart, heart disease refers to issues and deformities in the heart itself.\r\n\r\nAccording to the Centers for Disease Control (CDC), heart disease is the leading cause of death in the United Kingdom, United States, Canada, and Australia. One in every four deaths in the U.S. occurs as a result of heart disease.\r\n\r\nFast facts on heart disease\r\nOne in every four deaths in the U.S. is related to heart disease.\r\nCoronary heart disease, arrhythmia, and myocardial infarction are some examples of heart disease.\r\nHeart disease might be treated with medication or surgery.\r\nQuitting smoking and exercising regularly can help prevent heart disease.', 'images/Posts/heart.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_name` varchar(50) NOT NULL,
  `pro_id` int(10) NOT NULL,
  `quantity_stored` int(10) DEFAULT NULL,
  `quatity_sold` int(10) DEFAULT NULL,
  `price_per_unit` double NOT NULL,
  `pro_cat` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `disease_name` varchar(255) DEFAULT NULL,
  `image_blob` blob DEFAULT NULL,
  `image_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_name`, `pro_id`, `quantity_stored`, `quatity_sold`, `price_per_unit`, `pro_cat`, `details`, `brand`, `disease_name`, `image_blob`, `image_dir`) VALUES
('Dettol ', 1, 55, 5, 20, 'healthcare', 'very popular Soap', 'Dettol', 'none', 0x6e6f6e65, 'images/Products/dettolSoap.jpg'),
('Dettol Handwash', 2, 155, 50, 125, 'healthcare', 'Anti-bactarial soap', 'Dettol', 'none', 0x6e6f6e65, 'images/image7.jpg'),
('Face Mask', 3, 25, 50, 250, 'healthcare', ' worn by health professionals during healthcare procedures', 'Henry', 'none', 0x6e6f6e65, 'images/image8.jpg'),
('Dettol Hand Sanitizer', 4, 24, 50, 350, 'healthcare', 'Anti-bactarial', 'Dettol', 'none', 0x6e6f6e65, 'images/image4.jpg'),
('SNAZII', 5, 45, 50, 475, 'healthcare', 'Foot health', 'SNAZII', 'none', 0x6e6f6e65, 'images/image10.jpg'),
('Baby food', 6, 30, 5, 335, 'babycare', 'Food for baby', 'Yellow', 'none', 0x6e6f6e65, 'images/image20.jpg'),
('Nido', 7, 145, 50, 225, 'babycare', 'Food for baby', 'NIDO', 'none', 0x6e6f6e65, 'images/image14.jpg'),
('Water pot', 8, 25, 50, 450, 'babycare', 'Mask', 'Henry', 'none', 0x6e6f6e65, 'images/image17.jpg'),
('Yellow baby food jar', 9, 24, 50, 350, 'babycare', 'Baby food jar', 'Yellow', 'none', 0x6e6f6e65, 'images/image18.jpg'),
('Pampers', 10, 20, 50, 200, 'babycare', 'for babies', 'Pampers', 'none', 0x6e6f6e65, 'images/image16.jpg'),
('Oral Gel', 11, 30, 5, 35, 'medicine', 'gel spray', 'Oral', 'none', 0x6e6f6e65, 'images/image6.jpg'),
('Chestal', 12, 145, 50, 125, 'medicine', 'medicine for cough', 'Chestal', 'none', 0x6e6f6e65, 'images/image21.jpg'),
('Dropper bottle', 13, 25, 50, 250, 'medicine', 'dropper', 'Drop', 'none', 0x6e6f6e65, 'images/image22.jpg'),
('Esticof-LVP', 14, 24, 50, 350, 'medicine', 'very popular worldwide', 'LVP', 'none', 0x6e6f6e65, 'images/image23.jpg'),
('Telfast', 15, 45, 50, 475, 'medicine', 'very popular worldwide', 'Telfast', 'none', 0x6e6f6e65, 'images/image24.jpg'),
('Baby Carriage', 16, 10, 5, 1700, 'babycare', 'A baby carriage by RFL.', 'RFL', NULL, NULL, 'images/Products/cart2.png'),
('Piriteze', 17, 30, 5, 30, 'medicine', 'A medicine, Brand unknown.', 'Unknown', 'Unknown', NULL, 'images/Products/image26.jpg'),
('Napa Tablet', 18, 40, 0, 7.5, 'medicine', 'A well known medicine for cold and fever', 'Beximco', NULL, NULL, 'images/Products/dhjbpbof5u4zavj99q9g.jpg'),
('Napa Extend', 19, 25, 0, 2.5, 'medicine', 'A well known medicine for cold and fever', 'Beximco', 'Fever', NULL, 'images/Products/dhjbpbof5u4zavj99q9g.jpg'),
('Hami Baby Food', 20, 30, 0, 85, 'babycare', 'A baby food from Hami.', 'Hami', NULL, NULL, 'images/Products/ee.jpg'),
('Dettol Soap', 21, 100, 0, 20, 'healthcare', 'Soap with cool menthol by Dettol', 'Dettol', NULL, NULL, 'images/Products/dettolSoap.jpg'),
('Napa', 22, 150, 0, 2, 'medicine', 'A popular drug used to reduce pain and fever.', 'Beximco Pharmacuticals', 'Fever', NULL, 'images/Products/fb_bnw.png');

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

CREATE TABLE `refund` (
  `id` int(10) NOT NULL,
  `request_refund` varchar(1000) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `admin_reply` varchar(255) DEFAULT NULL,
  `admin_user_name` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refund`
--

INSERT INTO `refund` (`id`, `request_refund`, `user_email`, `status`, `admin_reply`, `admin_user_name`) VALUES
(3, 'A wrong product was delivered, I want refund', 'azhn@gmail.com', 'applied', NULL, NULL),
(7, 'order id: 5\r\nI mistakenly ordered some products, now I would like to refund.', 'azhn@gmail.com', 'applied', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upload_prescription`
--

CREATE TABLE `upload_prescription` (
  `image_dir` varchar(255) NOT NULL,
  `id` int(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `up_date` date NOT NULL,
  `order_details` varchar(255) DEFAULT NULL,
  `user_email_moderator` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_prescription`
--

INSERT INTO `upload_prescription` (`image_dir`, `id`, `user_email`, `up_date`, `order_details`, `user_email_moderator`) VALUES
('images/prescription.jpg', 6, 'r@gmail.com ', '2020-09-28', NULL, NULL),
('images/open_reading_frame.jpg', 11, 'zeb ', '2021-06-17', NULL, NULL),
('images/c3af2fec150a7842fb26d92799d163b2.jpg', 28, 'zeb ', '2021-06-18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(20) DEFAULT curdate(),
  `address` varchar(200) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_joined` varchar(15) DEFAULT curdate(),
  `user_cat` varchar(20) NOT NULL,
  `image_dir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`Name`, `email`, `dob`, `address`, `phone_number`, `user_name`, `password`, `date_joined`, `user_cat`, `image_dir`) VALUES
('Sabir', 'amir@gmail.com', '2020-09-03', 'Dhaka', '01231231232', 'amir', 'amir', '2020-09-29', 'moderator', 'images/Users/icon2.jpg'),
('Aurangzeb Hossain', 'azhn@gmail.com', '01-12-1997', 'Dhanmondi, Dhaka', '01111466157', 'zeb', '121', '2020-09-25', 'moderator', 'images/Users/icon10.jpg'),
('Henry', 'h@gmail.com', '2021-10-20', 'Texux,US', '01155215151', 'Hen', 'hen123', '2020-09-28', 'customer', 'images/Users/admin_pro.png'),
('Leemon', 'l@gmail.com', '1998-09-23', 'Vatara,Gulshan 2,Dhaka', '01180976200', 'lee', 'lee1234', '2020-09-27', 'customer', 'images/e92338a85fbc158105aa0f18e0008a2e.png'),
('user1', 'new@gmail.com', '2020-09-16', 'New Market', '01231231232', 'new', '123', '2020-09-29', 'customer', 'images/cart1.png'),
('Sabir', 'sabir@gmail.com', '2020-09-05', 'Sylhet', '01231231232', 'sabir', 'sabir01', '2020-09-29', 'customer', 'images/Users/icon3.jpg'),
('Temporary Name', 'tempo@tempMail.com', '2021-06-05', 'temp address', '9384332222', 'tempUser', 'tempPass', '2021-06-05', 'customer', 'images/fb_bnw.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_user_name`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_wallet`
--
ALTER TABLE `e_wallet`
  ADD PRIMARY KEY (`wallet_id`,`user_email`);

--
-- Indexes for table `online_chat`
--
ALTER TABLE `online_chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `refund`
--
ALTER TABLE `refund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_prescription`
--
ALTER TABLE `upload_prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `e_wallet`
--
ALTER TABLE `e_wallet`
  MODIFY `wallet_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `online_chat`
--
ALTER TABLE `online_chat`
  MODIFY `chat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ordered_products`
--
ALTER TABLE `ordered_products`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `refund`
--
ALTER TABLE `refund`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `upload_prescription`
--
ALTER TABLE `upload_prescription`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table admin
--

--
-- Metadata for table carts
--

--
-- Metadata for table e_wallet
--

--
-- Metadata for table online_chat
--

--
-- Metadata for table ordered_products
--

--
-- Metadata for table orders
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'online_pharmacy', 'orders', '{\"sorted_col\":\"`cart_addede_datetime` DESC\"}', '2021-06-14 16:19:47');

--
-- Metadata for table post
--

--
-- Metadata for table product
--

--
-- Metadata for table refund
--

--
-- Metadata for table upload_prescription
--

--
-- Metadata for table user_table
--

--
-- Metadata for database online_pharmacy
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
