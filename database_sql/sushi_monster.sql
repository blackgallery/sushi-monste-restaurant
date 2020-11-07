-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 08:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sushi_monster`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `title`, `description`, `price`) VALUES
(9, 'Green Pea Soup', 'An easy to make pea soup with the goodness of yogurt that can be served hot or cold.  ', '$45'),
(10, 'Radish Cream Soup', ' Creamy soup made out of radishes, spring onion, celery and vegetable stock.', '$56'),
(11, 'Basil Tomato Soup', ' Tomatoes and carrots blended together in this soup, garnished with basil leaves, olive oil and lemon zest. ', '$78'),
(12, 'Baby Corn Soup', ' A baby corn soup with the goodness of cabbage, capsicum and mushrooms. A delight on a wintery night. ', '$38'),
(13, 'Mexican Soup', ' A delicious soup with chickpeas, kidney beans and lots of vegetables that will keep you warm during the winters. ', '$78'),
(14, ' Cream Mushroom Soup', ' A delicious and healthy soup made within twenty minutes. This mushroom soup is made with a hint of pepper ', '$62'),
(15, 'Vichyssoise Soup', ' A hearty and satisfying soup - tastes as good without the bacon. Serve cold in summer or hot in winter. ', '$50'),
(16, 'Turnip & Zucchini Soup', '   A very healthy soup with turnips, zucchini and spinach. Makes for a great de-toxifying meal.  ', '$40');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `book_id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`book_id`, `name`, `email`, `phone`) VALUES
(11, 'William John', 'fwalter@thompson.com', '+2147483647'),
(12, 'James Jacob', 'sim14@yahoo.com', '+2147483647'),
(13, 'Anthony Daniel', 'ratke.nelda@yahoo.com', '+2147483647'),
(14, 'Jacob Ethan', 'sofia.schiller@little.com', '+2147483647'),
(15, 'Daniel Anthony', 'stephany.renner@rora.com', '+2147483647'),
(16, 'Emily Isabella', 'dawn87@gmail.com', '+2147483647'),
(17, 'Ava Olivia', 'delpha.boehm@yahoo.com', '+2147483647'),
(18, 'Madison Emma', 'zack05@hotmail.com', '+2147483647'),
(19, 'Isabella Sophia', 'huel.tyree@damore.com', '+2147483647'),
(20, 'Emma Ava', 'von.kayla@hotmail.com', '+2147483647'),
(21, 'Emma Madison', 'adam.tyree@damore.com', '+14845211071');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `password`, `email`, `role`) VALUES
(10, 'Noushin Jannat', 'noushin', '202cb962ac59075b964b07152d234b70', 'noushinjannat@gmail.coma', 1),
(12, 'Emily Isabella', 'Emily', '202cb962ac59075b964b07152d234b70', 'fwalter@thompson.com', 0),
(13, 'Ava Olivia', 'Ava', '202cb962ac59075b964b07152d234b70', 'sim14@yahoo.com', 0),
(14, 'Isabella Sophia', 'Isabella', '202cb962ac59075b964b07152d234b70', 'sofia.schiller@little.com', 0),
(15, 'Emma Ava', 'Emma', '202cb962ac59075b964b07152d234b70', 'ratke.nelda@yahoo.com', 0),
(16, 'Ethan Noah', 'Ethan', '202cb962ac59075b964b07152d234b70', 'zack05@hotmail.com', 0),
(17, 'Michael Ryan', 'Michael', '202cb962ac59075b964b07152d234b70', 'fwalter@thompson.com', 0),
(18, 'Anthony Daniel', 'Anthony', '202cb962ac59075b964b07152d234b70', 'sofia.schiller@little.com', 0),
(19, 'James Jacob ', 'James', '202cb962ac59075b964b07152d234b70', 'huel.tyree@damore.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `book_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
