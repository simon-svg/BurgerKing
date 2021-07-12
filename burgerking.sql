-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 12 2021 г., 14:41
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `burgerking`
--

-- --------------------------------------------------------

--
-- Структура таблицы `burgers`
--

CREATE TABLE `burgers` (
  `id` int(16) NOT NULL,
  `name` varchar(256) NOT NULL,
  `info` text NOT NULL,
  `img` varchar(256) NOT NULL,
  `price` varchar(16) NOT NULL,
  `discPrice` varchar(16) NOT NULL,
  `date` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `burgers`
--

INSERT INTO `burgers` (`id`, `name`, `info`, `img`, `price`, `discPrice`, `date`) VALUES
(1, 'Mini cheese Burger', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil', '64049833.jpeg', '9.00', '', 1626087560),
(2, 'Double size burger', 'sit amet elit. Phasel nec preti facilLorem ipsum dolor ', '31819378.jpeg', '11.00', '', 1626087627),
(3, 'Bacon, EGG and Cheese', 'ipsum Lorem ipsum dolor sit amet elit. Phasel nec preti facil', '35875879.jpeg', '13.00', '', 1626087961),
(4, 'Pulled porx Burger', 'elit ydolor sit amet elit. Phasel nec preti facil', '69270511.jpeg', '18.00', '', 1626087985),
(5, 'Fried chicken Burger', 'facil ipsum dolor sit amet elit. Phasel nec preti facil', '46218204.jpeg', '22.00', '', 1626088015);

-- --------------------------------------------------------

--
-- Структура таблицы `chefs`
--

CREATE TABLE `chefs` (
  `id` int(16) NOT NULL,
  `name` varchar(256) NOT NULL,
  `position` varchar(256) NOT NULL,
  `img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chefs`
--

INSERT INTO `chefs` (`id`, `name`, `position`, `img`) VALUES
(4, 'Adam Phillips', 'CEO, Co Founder', '10511232.jpeg'),
(5, 'Dylan Adams', 'Master Chef', '2402218.jpeg'),
(13, 'Josh Dunn', 'Master Chef', '68432596.jpeg'),
(18, 'Jhon Doe', 'Master Chef', '56152149.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `profession` varchar(128) NOT NULL,
  `info` text NOT NULL,
  `img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `name`, `profession`, `info`, `img`) VALUES
(1, 'Olivia Smith', 'Designer', 'Lorem ipsum dolor sit amet consectetur', 'testimonial-1.jpg'),
(2, 'Liam Jones', 'Developer', 'adipisicing elit. Exercitationem tuam veritatis incidunt voluptates.', 'testimonial-2.jpg'),
(3, 'Emma Wilson', 'arcitect', 'consectetur adipisicing elit.aliquam veritatis incidunt voluptates.', 'testimonial-3.jpg'),
(4, 'Lucas Williams', 'Chef', ' vero voluptatibus aliquam veritatis incidunt voluptates.', 'testimonial-4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'simon', 'simonkarapetyan605@gmail.com', 'test subject', 'one big text');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `login` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `login`, `password`) VALUES
(3, 'simon', 'karapetyan', 'simonkarapetyan605@gmail.com', 'simon', '$2y$10$.x1dN.TWVizO6Rxg2xxa9u0k0G5G06eolBnT2WXvUhTzy210XWiCO');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `burgers`
--
ALTER TABLE `burgers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
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
-- AUTO_INCREMENT для таблицы `burgers`
--
ALTER TABLE `burgers`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
