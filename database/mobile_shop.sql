-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 12:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `description`, `url`) VALUES
(1, 'Apple iPhone 14 vs. iPhone 13: Is the upgrade worth it?', './assets/blog/blog2.jpg', 'optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui?\r\n                    Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel? Lorem ipsum dolor,\r\n                    sit amet consectetur adipisicing elit.', 'https://www.nextpit.com/apple-iphone-14-vs-iphone-13-comparison'),
(2, 'What is (the) Matter? The smart home standard to rule them all', './assets/blog/blog1.jpg', 'provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui?\r\n                    Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel? Lorem ipsum dolor,\r\n                    sit amet consectetur adipisici', 'https://www.nextpit.com/matter-smart-home-standard'),
(3, 'Motorola Razr 2022: The OG foldable arrives', './assets/blog/blog3.jpg', 'how to make a login and register / sign in and sign up user form with admin and user separate page login effect with sessions using html css php mysql database step by step.\r\ncreate a multi role based user and admin login system using sessions in php mysql tu', 'https://www.nextpit.com/motorola-razr-2022-the-og-foldable-arrives'),
(4, 'Don t count on the Galaxy S23 changing Samsung', './assets/blog/Galaxy-S22-all-colors.jpg', 'Were a few months out from the expected launch of the Galaxy S23, but that doesn t mean it isn t too early for the rumor mill to start churning. Although it sounds like Samsung is making some big changes to the S23s camera, including an upgrade to a 200MP sensor, the rest of the phone might look a lot like this years hardware. While thats not necessarily a bad thing — we re pretty fond of the current Galaxy S-series design — it looks like that means we ll also be stuck with some legacy hardware, particularly when it comes to charging.\r\nThis spec shouldn t come as much of a surprise to anyone who s kept an eye on flagship Galaxy phones over the last few years. The Galaxy Z Fold 4, Samsung s $1,800 crown jewel for 2022, is limited to just 25W charging. Meanwhile, the OnePlus 10T — set to hit store shelves in the US next week — offers 125W charging, capable of fully powering up the phone in about 20 minutes.\r\n\r\nThat said, not everyone loves the idea of high-speed charging. 25W is usually fast enough to power up a phone to 50% in about thirty minutes, and to plenty of users, that s good enough. Keeping these slower speeds is a bit friendlier on the battery, but it fails to impress in a spec race with the likes of OnePlus and Xiaomi. What s even more frustrating, of course, is that the Galaxy Note 10+ did offer 45W charging way back in 2019, as did the larger S22+ and S22 Ultra earlier this year. It s unclear if these larger phones will retain their improved speeds, but it sounds like fans of smaller models will have to go without once more.', 'https://www.androidpolice.com/galaxy-s23-fast-charging-speeds/'),
(5, 'Free apps for Android & iOS: These Pro versions are currently free', './assets/blog/NextPit_Apps_of_the_week_11-w810h462.jpg', 'They say that variety is the spice of life. Having said that, playing the same old games each week gets boring quickly, not to mention the type of apps that you use. Perhaps you are looking for a change in life. Fortune smiles on you then as you are in the right place. We have specially curated apps and games for both Android phones and iPhones that are available for free for a limited time only this week, and would like to share with you how you can get your hands on these precious downloads without having to empty your bank account.\r\nONE\r\nWEARABLES\r\nAPPS\r\nMOBILITY\r\nENTERTAINMENT\r\nJOBS\r\nCOMMUNITY\r\nMORE\r\n\r\nHome\r\nApps\r\nApps of the Week\r\nFree apps for Android & iOS: These Pro versions are currently free\r\nFree apps for Android & iOS: These Pro versions are currently free\r\n7 min read\r\nNo comments\r\nAuthored by:\r\nEdwin Kee\r\n 9 hours ago\r\nNextPit Apps of the week 11© NextPit\r\nThey say that variety is the spice of life. Having said that, playing the same old games each week gets boring quickly, not to mention the type of apps that you use. Perhaps you are looking for a change in life. Fortune smiles on you then as you are in the right place. We have specially curated apps and games for both Android phones and iPhones that are available for free for a limited time only this week, and would like to share with you how you can get your hands on these precious downloads without having to empty your bank account.\r\n\r\n\r\nNextPit Logo white on transparent Background\r\nNEXTPITTV\r\n\r\n\r\n\r\nThis is because the Google Play Store and Apple s App Store offer discounts and promotions on a regular basis where you can obtain paid apps for free for a limited time only.\r\n\r\nGet a 30-day Free Prime Video\r\nwith Amazon Prime Trial\r\nWe have rounded up these free apps and listed them for you, unlike our list of the five best apps of the week, we will not install all the apps listed below. However, do proceed with some degree of caution because some of these might require microtransactions to help you go further in the game. I would recommend the Smart QR Code Scanner Pro (Android) in these endemic times as you virtually need to scan everything these days, from menus to public transport. The Walker Pedometer (iOS) is another app worth checking out to maintain your sprightly outlook in life.', 'https://www.nextpit.com/free-apps-of-the-week-38-2022-b'),
(6, 'This app brings Apple-style Dynamic Island to Android', './assets/blog/NextPit_Apple_iPhone_14_Pro_Dynamic_Island-w810h462.jpg', 'The Dynamic Island that debuted with iPhone 14 Pro (Max) is now also possible with Android. Through the third-party app called dynamicSpot, the punch hole cutout on an Android smartphone can be utilized to mimic the popup notification effects of the iPhone 14 Pro. The app is free to download from the Play Store.\r\nIt didn t take long before someone copied Apple s improvement and introduced it on devices running on Google s mobile operating system. The dynamicSpot app, which is currently in beta, transforms the punch-hole of any Android smartphone into an island-style notification and control hub. To start using it, the only requirement is to download the app:', 'https://www.nextpit.com/dynamic-island-for-android'),
(7, 'iPhone comparison 2022: specs, prices, offers and more!', './assets/blog/iphone-hub-w810h462.jpg', 'Which is the best iPhone in 2022? Now that Apple has announced the new iPhone 14 series, we compare the new models with the past iPhone lineup. Find out everything about the new features and differences in NextPit s ultimate iPhone overview.\r\nThe iPhone 14 series is the latest range announced by Apple. Introduced on September 7, 2022, the new series has dropped the mini model to make way for the Plus variant. With this, we had the announcement of the iPhone 14 and iPhone 14 Plus, whose differences are limited to screen size and battery; as well as the iPhone 14 Pro and iPhone 14 Pro Max that bring advanced hardware and software features.', 'https://www.nextpit.com/iphone');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(6, 2, 2),
(35, 1, 13),
(36, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_description`) VALUES
(1, 'Samsung', 'Samsung Galaxy 10', 152.00, './assets/products/1.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(2, 'Redmi', 'Redmi Note 7', 122.00, './assets/products/2.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(3, 'Redmi', 'Redmi Note 6', 122.00, './assets/products/3.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(4, 'Redmi', 'Redmi Note 5', 122.00, './assets/products/4.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(5, 'Redmi', 'Redmi Note 4', 122.00, './assets/products/5.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(6, 'Redmi', 'Redmi Note 8', 122.00, './assets/products/6.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(7, 'Redmi', 'Redmi Note 9', 122.00, './assets/products/8.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(8, 'Redmi', 'Redmi Note', 122.00, './assets/products/10.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(9, 'Samsung', 'Samsung Galaxy S6', 152.00, './assets/products/11.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(10, 'Samsung', 'Samsung Galaxy S7', 152.00, './assets/products/12.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(11, 'Apple', 'Apple iPhone 5', 152.00, './assets/products/13.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(12, 'Apple', 'Apple iPhone 6', 152.00, './assets/products/14.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(13, 'Apple', 'Apple iPhone 7', 152.00, './assets/products/15.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(14, 'Apple', 'Apple iPhone 8', 110000.00, './assets/products/iPhone-8.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(15, 'Apple', 'Apple iPhone 9', 130000.00, './assets/products/iphone-9-png-Imagem-png-para-baixar-gratis.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(16, 'Apple', 'Apple iPhone X', 150000.00, './assets/products/apple-iphone-x-64gb-grey.png', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(17, 'Apple', 'Apple iPhone 11', 150000.00, './assets/products/iphone-11_black_back.jpg', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(18, 'Apple', 'Apple iPhone 12', 200000.00, './assets/products/iphone-12_black_back-front.jpg', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(19, 'Apple', 'Apple iPhone 13', 200000.00, './assets/products/iphone-13-pro-max-gold-double.jpg', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(20, 'Apple', 'Apple iPhone 14', 250000.00, './assets/products/iPhone_14_Pro_Max_Space_Black_Pure_Double.jpg', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(21, 'Samsung', 'Galaxy S22 Ultra 5G', 10000.00, './assets/products/galaxy-s22-ultra_phantomblack_back.jpg', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(22, 'Samsung', 'Galaxy S22+ 5G', 100000.00, './assets/products/galaxy-s22plus_phantomblack_back.jpg', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(23, 'Samsung', 'Galaxy A13 5G', 100000.00, './assets/products/Galaxy-A13-5G_Black_Back.jpg', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(24, 'Samsung', 'Galaxy Z Flip4', 30000.00, './assets/products/galaxy_z-flip4_graphite_back.jpg', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(25, 'Motorola', 'Moto G Power', 70000.00, './assets/products/moto-g-power_flash-gray_back_V2.jpg', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(26, 'Google', 'Pixel 6 Pro', 200000.00, './assets/products/google-pixel-6-pro-back.jpg', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.'),
(27, 'Google', 'Pixel 6', 275000.00, './assets/products/google-pixel-6-back.jpg', 'A mobile phone is a wireless handheld device that allows users to make and receive calls. While the earliest generation of mobile phones could only make and receive calls, today s mobile phones do a lot more, accommodating web browsers, games, cameras, video players and navigational systems.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'user1', 'user1@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'user2', 'user2@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'user3', 'user3@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'Fateme', 'fateme@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
