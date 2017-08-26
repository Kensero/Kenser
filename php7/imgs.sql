-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 26 2017 г., 09:33
-- Версия сервера: 5.7.16
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `imgs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id_img` int(11) NOT NULL,
  `thumb_name` varchar(32) DEFAULT NULL,
  `Views` int(11) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `image_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id_img`, `thumb_name`, `Views`, `likes`, `image_name`) VALUES
(1, 'thumb_23.jpg', 9, 3, '23.jpg'),
(2, 'thumb_4304_1.jpg', 18, 7, '4304_1.jpg'),
(3, 'thumb_Edward Hopper.jpg', 6, 2, 'Edward Hopper Nighthawks.jpg'),
(4, 'thumb_life is too short.jpg', 24, 6, 'life is too short.jpg'),
(5, 'thumb_me.jpeg', 11, 2, 'me.jpeg'),
(6, 'thumb_yoda.png', 6, 4, 'yoda.png'),
(7, 'thumb_батуты 5.jpg', 11, 2, 'батуты 5.jpg'),
(8, 'thumb_Один кофе, пожалуйста).jpg', 79, 6, 'Один кофе, пожалуйста).jpg'),
(9, 'thumb_рост.jpg', 12, 7, 'рост.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_img`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
