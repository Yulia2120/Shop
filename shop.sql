-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 20 2023 г., 09:38
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `urlimg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `urlimg`) VALUES
(1, 'Apple iPhone 12 128GB (Purple)', 28999, ' iOS 14.1; Размер 146.7 x 71.5 x 7.4 mm, 164 г; Цвет Purple; Single SIM (Nano-SIM and/or eSIM)', 'https://i.ibb.co/547nshY/9.jpg'),
(2, 'Apple iPhone 12 128GB (Purple)', 28999, 'iOS 14.1; Размер 146.7 x 71.5 x 7.4 mm, 164 г; Цвет Purple; Single SIM (Nano-SIM and/or eSIM)', 'https://i.ibb.co/MMW1RFy/8.jpg'),
(3, 'Apple iPhone 12 128GB (Purple)', 28999, 'Размер 146.7 x 71.5 x 7.4 mm, 164 г; Цвет Purple; Single SIM (Nano-SIM and/or eSIM)', 'https://i.ibb.co/LS3c7Hh/7.jpg'),
(4, 'Apple iPhone 12 128GB (Purple)', 28999, 'Размер 146.7 x 71.5 x 7.4 mm, 164 г; Цвет Purple; Single SIM (Nano-SIM and/or eSIM)', 'https://i.ibb.co/7nWxnDM/6.jpg'),
(5, 'Apple iPhone 12 128GB (Purple)', 28999, 'Экран 6.1 inches, 90.2 cm2 (1170 x 2532 pixels, 19.5:9 ratio), Super Retina XDR OLED ( Scratch-resistant ceramic glass) ', 'https://i.ibb.co/CzYqvb2/5.jpg'),
(6, 'Apple iPhone 12 128GB (Purple)', 28999, 'Экран 6.1 inches, 90.2 cm2 (1170 x 2532 pixels, 19.5:9 ratio), Super Retina XDR OLED ( Scratch-resistant ceramic glass) ', 'https://i.ibb.co/rQvdtqg/4.jpg'),
(7, 'Apple iPhone 12 128GB (Purple)', 28999, 'Экран 6.1 inches, 90.2 cm2 (1170 x 2532 pixels, 19.5:9 ratio), Super Retina XDR OLED ( Scratch-resistant ceramic glass) ', 'https://i.ibb.co/yqg8fvd/3.jpg'),
(8, 'Apple iPhone 12 128GB (Purple)', 28999, 'Экран 6.1 inches, 90.2 cm2 (1170 x 2532 pixels, 19.5:9 ratio), Super Retina XDR OLED ( Scratch-resistant ceramic glass) ', 'https://i.ibb.co/dp3JfwJ/2.jpg'),
(9, 'Apple iPhone 12 128GB (Purple)', 28999, 'Экран 6.1 inches, 90.2 cm2 (1170 x 2532 pixels, 19.5:9 ratio), Super Retina XDR OLED ( Scratch-resistant ceramic glass) ', 'https://i.ibb.co/HY6ZS91/1.jpg'),
(11, 'Sumsung', 33999, 'Good', 'https://i.ibb.co/547nshY/9.jpg'),
(13, 'Sumsung', 16789, 'Экран 6.1 inches, 90.2 cm2 (1170 x 2532 pixels', 'https://i.ibb.co/yqg8fvd/3.jpg'),
(14, 'Sumsung', 26723, 'Экран 6.1 inches, 90.2 cm2 (1170 x 2532 pixels', 'https://i.ibb.co/LS3c7Hh/7.jpg'),
(15, 'Sumsung', 24723, 'Экран 6.1 inches, 90.2 cm2 (1170 x 2532 pixels', 'https://i.ibb.co/CzYqvb2/5.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `family` varchar(100) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `name`, `family`, `phone`, `address`, `password`) VALUES
(1, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', '123456'),
(6, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', '$2y$10$U.bmTFoALMQM9fHAv.JVm.My6Ir79GN6gOP1EHI9ONd5sCVqb3nN2'),
(10, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', '$2y$10$EmeIJ3H/EWEBenGWetgCiOlArCScTA9Up7Gpe2ZZWHpjpBHH7yRrW'),
(11, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', '$2y$10$K9TpZQ2o9eonKYgsMBqYe.gVfar.ljQwgVfABeIElInf2kNvR6Cte'),
(12, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', 'qwerty'),
(13, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', 'disco'),
(14, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', '987654'),
(15, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', '987654'),
(16, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', '67890'),
(17, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', '67890'),
(18, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', '789'),
(19, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', '56789'),
(20, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', '56789'),
(21, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', 'mers'),
(22, 'Figaro ', 'figaro@gmail.com', 'Yuliya', 'Obushko', '098-77-77-777', 'Step', 'mers');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
