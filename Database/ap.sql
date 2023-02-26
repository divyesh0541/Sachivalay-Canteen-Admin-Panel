-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2023 at 06:37 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19643608_onlinecanteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin123', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `can_cred`
--

CREATE TABLE `can_cred` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `canteen_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `can_cred`
--

INSERT INTO `can_cred` (`id`, `name`, `password`, `email`, `phone`, `canteen_name`, `status`) VALUES
(3, 'jay', 'abc', 'jay@gmail.com', '9293949596', 'jay bharat', 'allowed'),
(7, 'parth', '164a221697e3533e9ff70fb6b5044522', 'kabirkb@protonmail.com', '7486854320', 'pjs canteen', 'allowed');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `image`) VALUES
(1, 'Breakfast (અલ્પાહાર)', 'https://onlinecanteen9845.000webhostapp.com/images/breakfast.jpeg'),
(2, 'Lunch (ભોજન)', 'https://onlinecanteen9845.000webhostapp.com/images/lunch.jpg'),
(3, 'Snacks (નાસ્તો)', 'https://onlinecanteen9845.000webhostapp.com/images/French%20Fries.jpg'),
(4, 'Beverages (પીણાં)', 'https://onlinecanteen9845.000webhostapp.com/images/beverages.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `category` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `category`, `name`, `image`, `price`, `description`, `status`) VALUES
(1, 'Breakfast (અલ્પાહાર)', 'Dhokla', 'https://www.archanaskitchen.com/images/archanaskitchen/1-Author/sibyl-archanaskitchen.com/Spinach_Foxtail_Millet_Dhokla_Recipe_.jpg', '40', 'Spinach Foxtail Millet Dhokla Recipe can be a quick breakfast for your healthy diet. It is made from besan flour, powdered foxtail millet and spinach puree. The dhokla is fermented with yogurt for couple of minutes and then steamed. Dhokla gets its flavors and delicious textures from the sesame and mustard seasoning. Adding palak to your dhokla will help you gain good amount of Iron content in your body. Foxtail millet on the other hand is also an added advantage as it is rich in dietary fiber. ', 0),
(2, 'Breakfast (અલ્પાહાર)', 'Handvo', 'https://i.ndtvimg.com/i/2017-11/handvo_620x330_61511336673.jpg', '59', 'Handvo is a delicious and healthy Gujarati breakfast dish that is made with an assortment of whole ingredients such as bottle gourd, protein rich lentils and buttermilk. It resembles a savoury cake that can be baked and stored and only needs to warmed and topped with a tempering of curry leaves and mustard seeds before serving.', 1),
(3, 'Breakfast (અલ્પાહાર)', 'Khaman Dhokla', 'https://i.ytimg.com/vi/wLGu5utp8u8/maxresdefault.jpg', '30', 'Breakfast, lunch or tea time, dhokla is great for anytime of the day but the Khamam Dhokla is specially enjoyed as a morning meal. Dhoklas can be made in several ways. The Khaman Dhokla is made with ground chana dal or besan. Khaman dhokla is different from the Khatta Dhokla which is made with a fermented batter of rice and split chickpeas. It is soft and spongy but a little dry. Khaman is very easy to make at home', 1),
(4, 'Beverages (પીણાં)', 'Buttermilk', 'https://onlinecanteen9845.000webhostapp.com/images/food%20images/buttermilk_beverages.jpeg', '20', 'Buttermilk is a fermented dairy drink. Traditionally, it was the liquid left behind after churning butter out of cultured cream. As most modern butter in western countries is not made with cultured cream but uncultured sweet cream, most modern buttermilk in western countries is cultured separately. ', 0),
(5, 'Beverages (પીણાં)', 'Tea', 'https://onlinecanteen9845.000webhostapp.com/images/food%20images/tea_beverages.jpeg', '10', 'Tea is an aromatic beverage prepared by pouring hot or boiling water over cured or fresh leaves of Camellia sinensis, an evergreen shrub native to East Asia which probably originated in the borderlands of southwestern China and northern Myanmar. Tea is also rarely made from the leaves of Camellia taliensis.', 0),
(6, 'Beverages (પીણાં)', 'Coffee', 'https://onlinecanteen9845.000webhostapp.com/images/food%20images/coffee_beverages.jpeg', '15', 'Coffee is a drink prepared from roasted coffee beans. Darkly colored, bitter, and slightly acidic, coffee has a stimulating effect on humans, primarily due to its caffeine content. It is the most popular hot drink in the world. Seeds of the Coffea plant\'s fruits are separated to produce unroasted green coffee beans.', 0),
(7, 'Lunch (ભોજન)', 'Gujarati Thali', 'https://onlinecanteen9845.000webhostapp.com/images/food%20images/gujrati thali_lunch.jpg', '130', 'Gujarati Thali is an assortment of dishes arranged as a platter for lunch or dinner in restaurants and homes, mostly in Gujarat and places with Gujarati diaspora. “Thali” literally means “a full plate meal”.', 0),
(8, 'Lunch (ભોજન)', 'Punjabi Thali', 'https://onlinecanteen9845.000webhostapp.com/images/food%20images/panjabi-dish_lunch.jpg', '150', 'This thali is a lot like the people in Punjab - robust and full of life. The popular Pujabi thali consists of Amritsari Kulcha or Naan, Pindhi Chhole, Dal Makhani, Jeera Rice, Paneer Makhani and a big glass of Lassi. The non-vegetarian thali may include Butter Chicken, Amritsari Machchi and Naan.03', 0),
(9, 'Lunch (ભોજન)', 'chole kulche', 'https://onlinecanteen9845.000webhostapp.com/images/food%20images/chhole kulche_lunch.jpeg', '90', 'It is made with white peas and mixed with simple spices like red chilli powder, salt and chaat masala and topped with some chaat masala gives it all that scrumptious flavour. It tastes even better when topped with a little bit of butter and accompanied with fresh pickled salad.', 0),
(10, 'Snacks (નાસ્તો)', 'Samosa', 'https://onlinecanteen9845.000webhostapp.com/images/food%20images/samosa_snack.jpeg', '20', 'A samosa or singara is a fried or baked pastry with a savory filling, including ingredients such as spiced potatoes, onions, and peas. It may take different forms, including triangular, cone, or half-moon shapes, depending on the region.', 0),
(11, 'Snacks (નાસ્તો)', 'Dabeli', 'https://onlinecanteen9845.000webhostapp.com/images/food%20images/dabeli_snack.jpeg', '25', 'Dabeli, kutchi dabeli or double roti is a popular snack food of India, originating in the Kutch or Kachchh region of Gujarat.', 0),
(12, 'Snacks (નાસ્તો)', 'Sandwich', 'https://onlinecanteen9845.000webhostapp.com/images/food%20images/sandwich_snack.jpg', '30', 'A sandwich is a food typically consisting of vegetables, sliced cheese or meat, placed on or between slices of bread, or more generally any dish wherein ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kot`
--

CREATE TABLE `kot` (
  `kot_id` int(11) NOT NULL,
  `emp_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kot_balance` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `kot_limit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cur_date` date NOT NULL DEFAULT current_timestamp(),
  `renew_date` date NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unsend'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_email` text COLLATE utf8_unicode_ci NOT NULL,
  `total_amount` text COLLATE utf8_unicode_ci NOT NULL,
  `products` text COLLATE utf8_unicode_ci NOT NULL,
  `order_date` text COLLATE utf8_unicode_ci NOT NULL,
  `order_quantity` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `wallet_amount` text COLLATE utf8_unicode_ci DEFAULT '0',
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_email`, `total_amount`, `products`, `order_date`, `order_quantity`, `wallet_amount`, `status`) VALUES
(2, 'kabirkb@protonmail.com', '30', '[{\"category\":\"Breakfast\",\"description\":\"Breakfast, lunch or tea time, dhokla is great for anytime of the day but the Khamam Dhokla is specially enjoyed as a morning meal. Dhoklas can be made in several ways. The Khaman Dhokla is made with ground chana dal or besan. Khaman dhokla is different from the Khatta Dhokla which is made with a fermented batter of rice and split chickpeas. It is soft and spongy but a little dry. Khaman is very easy to make at home\",\"id\":\"3\",\"image\":\"https://i.ytimg.com/vi/wLGu5utp8u8/maxresdefault.jpg\",\"name\":\"Khaman Dhokla\",\"price\":\"30\"}]', '06-10-2022', '', '5000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` text COLLATE utf8_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_desg` text COLLATE utf8_unicode_ci NOT NULL,
  `emp_id_card_no` text COLLATE utf8_unicode_ci NOT NULL,
  `gender` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_status` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unsend'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `password`, `emp_desg`, `emp_id_card_no`, `gender`, `status`, `payment_status`) VALUES
(14, 'Bhargav', 'Kanani', '6595959989', 'lelouch@email.com', '857bddbd743fccebdd6e9786bff5b40f', 'xbnxnx', 'dkjd', 'Male', 'allowed', 'sent'),
(15, 'prachi', 'patel', '9426209041', 'prachi4340@gmail.com', 'ppp', 'head ', '34584', 'Female', 'allowed', 'sent'),
(18, 'jani', 'jash', '8494646494', '200130107054@gecg28.ac.in', '85c156c9c06c166e6d8b82155bc496b6', 'student ', '2628282727', 'Male', 'allowed', 'sent'),
(19, 'Parth', 'Jaishur', '7486854320', 'dummy3923@gmail.com', 'f39e81152177957d7277f06a6fb3452c', 'student', '123455678', 'Male', 'allowed', 'sent'),
(20, 'kabir', 'singh', '9656498167', 'kabirkb@protonmail.com', '596fa1f6efb1f2d23333545ca1b3c0cd', 'student ', '8384747948', 'Male', 'allowed', 'sent'),
(21, 'nathi ', 'kevu', '5454646465', 'bhargavkanani8@gmail.com', '2e7094515ec549eee1a3767751e5dd7f', 'student ', '9464647676', 'Male', 'allowed', 'unsend'),
(22, 'nathi ', 'kevu', '6532656594', 'nathikevu5@gmail.com', '873bb4c3e49a962ec4ac7ee0d6b2d37d', 'udidhtidjs', '1279537845', 'Male', 'allowed', 'sent'),
(23, 'divyesh', 'rathod', '9104932319', 'divyeshr312@gmail.com', 'a58c0bed95cc69b206a1f8b8f4e64a93', 'xyz', '1', 'Male', 'allowed', 'unsend');

-- --------------------------------------------------------

--
-- Table structure for table `user_wallet`
--

CREATE TABLE `user_wallet` (
  `id` int(11) NOT NULL,
  `emp_id` int(30) NOT NULL,
  `user_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `amount` text COLLATE utf8_unicode_ci NOT NULL,
  `cur_date` date NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_wallet`
--

INSERT INTO `user_wallet` (`id`, `emp_id`, `user_email`, `amount`, `cur_date`, `status`) VALUES
(3, 14, 'lelouch@email.com', '5000', '2022-10-25', 'sent'),
(4, 15, 'prachi4340@gmail.com', '5000', '2022-11-21', 'sent'),
(5, 18, '200130107054@gecg28.ac.in', '5000', '2022-11-22', 'sent'),
(6, 20, 'kabirkb@protonmail.com', '5000', '2022-11-22', 'sent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `can_cred`
--
ALTER TABLE `can_cred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kot`
--
ALTER TABLE `kot`
  ADD PRIMARY KEY (`kot_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_wallet`
--
ALTER TABLE `user_wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `can_cred`
--
ALTER TABLE `can_cred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kot`
--
ALTER TABLE `kot`
  MODIFY `kot_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_wallet`
--
ALTER TABLE `user_wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
