-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 16 2019 г., 03:32
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `daiaana_pn_09`
--
CREATE DATABASE IF NOT EXISTS `daiaana_pn_09` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `daiaana_pn_09`;

-- --------------------------------------------------------

--
-- Структура таблицы `school`
--

CREATE TABLE `school` (
  `surname` varchar(355) NOT NULL,
  `name` varchar(355) NOT NULL,
  `mark1` varchar(355) NOT NULL,
  `mark2` varchar(355) NOT NULL,
  `mark3` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `school`
--

INSERT INTO `school` (`surname`, `name`, `mark1`, `mark2`, `mark3`, `id`) VALUES
('Фомин', 'Артем', '5', 'н', '4', 1),
('Кычкин', 'Андрей', '4', '5', 'н', 2),
('Семенов', 'Айхал', '4', '4', 'н', 3),
('Скрябин', 'Владислав', '5', '5', '5', 4),
('Яковлев', 'Иван', '4', 'н', 'н', 5),
('Румянцева', 'Дайана', '5', '5', '4', 6),
('Тихомиров', 'Данил', '4', '4', '4', 7),
('Неустроев', 'Андрей', '5', '4', '5', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `name` varchar(355) NOT NULL,
  `surname` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`name`, `surname`, `id`) VALUES
('Илон', 'Маск', 1),
('Илон', 'Маск', 2),
('Илон', 'Маск', 3),
('Нил', 'Армстронг', 4),
('Селена', 'Гомез', 21),
('Майкл', 'Джексон', 23),
('Майкл', 'Джексон', 24),
('Майкл', 'Джексон', 25),
('Арентин', 'Аргентинский', 26),
('ПППп', 'Аргентинский', 27),
('sac', 'dssac', 29),
('ax c', 'xas ', 30);

-- --------------------------------------------------------

--
-- Структура таблицы `tweet`
--

CREATE TABLE `tweet` (
  `logo_lol` varchar(355) NOT NULL,
  `title_lol` varchar(355) NOT NULL,
  `text_lol` varchar(355) NOT NULL,
  `img_lol` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tweet`
--

INSERT INTO `tweet` (`logo_lol`, `title_lol`, `text_lol`, `img_lol`, `id`) VALUES
('images/kags.jpeg', 'vita', 'おはようございます', 'images/post4.jpg', 41),
('images/kags.jpeg', 'vita', 'アニメ', 'images/post5.png', 42),
('images/kags.jpeg', 'vita', '私はロシア人です', 'images/post5.png', 43);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=10;

--
-- Индексы таблицы `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `school`
--
ALTER TABLE `school`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
