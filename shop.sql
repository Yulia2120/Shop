-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 15 2023 г., 13:43
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
(11, 'Sumsung', 33999, 'Good', 'https://i.ibb.co/547nshY/9.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
