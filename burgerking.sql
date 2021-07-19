-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 19 2021 г., 11:54
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
-- Структура таблицы `all_foods`
--

CREATE TABLE `all_foods` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `info` text NOT NULL,
  `img` varchar(128) NOT NULL,
  `price` varchar(16) NOT NULL,
  `discPrice` varchar(16) NOT NULL,
  `categories_id` int(16) NOT NULL,
  `date` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `all_foods`
--

INSERT INTO `all_foods` (`id`, `name`, `info`, `img`, `price`, `discPrice`, `categories_id`, `date`) VALUES
(1, 'Mini cheese Burger', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil', '13349874.jpeg', '9.00', '', 1, 1626329612),
(2, 'Corn Tikki - Spicy fried Aloo', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil', '15016749.jpeg', '15.00', '', 2, 1626329713),
(3, 'Single Cup Brew', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil', '66433986.jpeg', '7.00', '', 3, 1626329854),
(4, 'Double size burger', 'sit amet elit. Phasel nec preti facilLorem ipsum dolor', '63154002.jpeg', '11.00', '', 1, 1626329776),
(5, 'Bread besan Toast', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil', '63273170.jpeg', '35.00', '', 2, 1626329863),
(6, 'Caffe Americano', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil', '89039391.jpeg', '9.00', '', 3, 1626329892),
(7, 'Bacon, EGG and Cheese', 'ipsum Lorem ipsum dolor sit amet elit. Phasel nec preti facil', '75005363.jpeg', '13.00', '', 1, 1626329920),
(8, 'Healthy soya nugget snacks', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil', '61402246.jpeg', '20.00', '', 2, 1626329951),
(9, 'Caramel Macchiato', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil', '52432123.jpeg', '15.00', '', 3, 1626329982),
(10, 'Pulled porx Burger', 'elit ydolor sit amet elit. Phasel nec preti facil', '53525877.jpeg', '18.00', '', 1, 1626330008),
(11, 'Tandoori Soya Chunks', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil', '34976436.jpeg', '30.00', '', 2, 1626330042),
(12, 'Standard black coffee', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil', '45870642.jpeg', '8.00', '', 3, 1626330070),
(13, 'Fried chicken Burger', 'facil ipsum dolor sit amet elit. Phasel nec preti facil', '76169323.jpeg', '22.00', '', 1, 1626419245),
(14, 'Standard black coffee', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil', '1046779.jpeg', '12.00', '', 3, 1626330141);

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
(2, 'simon', 'simonkarapetyan605@gmail.com', 'test subject', 'one very big text');

-- --------------------------------------------------------

--
-- Структура таблицы `food_blog`
--

CREATE TABLE `food_blog` (
  `id` int(16) NOT NULL,
  `title1` varchar(256) NOT NULL,
  `title2` varchar(256) NOT NULL,
  `title3` varchar(256) NOT NULL,
  `info1` text NOT NULL,
  `info2` text NOT NULL,
  `info3` text NOT NULL,
  `img` varchar(128) NOT NULL,
  `categories` varchar(128) NOT NULL,
  `date` int(32) NOT NULL,
  `comments` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `food_blog`
--

INSERT INTO `food_blog` (`id`, `title1`, `title2`, `title3`, `info1`, `info2`, `info3`, `img`, `categories`, `date`, `comments`) VALUES
(1, 'Lorem ipsum dolor sit amet', 'dolor sit amet Lorem ipsum ', 'ipsum Lorem dolor sit amet', 'Mauris eu pulvinar tellus, eu luctus nisl. Pellentesque suscipit mi eu varius pulvinar. Aenean vulputate, massa eget elementum finibus, ipsum arcu commodo est, ut mattis eros orci ac risus. Suspendisse ornare, massa in feugiat facilisis, eros nisl auctor lacus, laoreet tempus elit dolor eu lorem. Nunc a arcu suscipit, suscipit quam quis, semper augue.', 'Mauris quis arcu finibus, posuere dolor eu, viverra felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In porta, ex vitae accumsan facilisis, nisi tellus dictum metus, quis fringilla dui tellus in tellus. Praesent pharetra orci at vehicula posuere. Sed molestie fringilla lorem, vel imperdiet tortor blandit at. Quisque non ultrices lorem, eget rhoncus orci. Fusce porttitor placerat diam et mattis. Nam laoreet, ex eu posuere sollicitudin, sem tortor pellentesque ipsum, quis mattis purus lectus ut lacus. Integer eu risus ac est interdum scelerisque.', 'Nam sodales scelerisque nunc sed convallis. Vestibulum facilisis porta erat, sit amet pharetra tortor blandit id. Nunc velit tellus, consectetur sed convallis in, tincidunt finibus nulla. Integer vel ex in mauris tincidunt tincidunt nec sed elit. Etiam pretium lectus lectus, sed aliquet erat tristique euismod. Praesent faucibus nisl augue, ac tempus libero pellentesque malesuada. Vivamus iaculis imperdiet laoreet. Aliquam vel felis felis. Proin sed sapien erat. Etiam a quam et metus tempor rutrum. Curabitur in faucibus justo. Etiam imperdiet iaculis urna.', '42167294.jpeg', 'food', 1626680645, 10),
(2, 'ipsum Lorem dolor sit amet', 'Ldolor orem ipsum sit amet', 'sit lorem ipsum dolor amet', 'Mauris eu pulvinar tellus, eu luctus nisl. Pellentesque suscipit mi eu varius pulvinar. Aenean vulputate, massa eget elementum finibus, ipsum arcu commodo est, ut mattis eros orci ac risus. Suspendisse ornare, massa in feugiat facilisis, eros nisl auctor lacus, laoreet tempus elit dolor eu lorem. Nunc a arcu suscipit, suscipit quam quis, semper augue', 'Vestibulum sit amet ullamcorper sem. Integer hendrerit elit eget purus sodales maximus. Quisque ac nulla arcu. Morbi venenatis arcu ac arcu cursus pharetra. Morbi sit amet viverra augue, ac ultricies libero. Praesent elementum lectus mi, eu elementum urna venenatis sed. Donec auctor purus ut mattis feugiat. Integer mi erat, consectetur sed tincidunt vitae, sagittis elementum libero. Vivamus a mauris consequat, hendrerit lectus in, fermentum libero. Integer mattis bibendum neque et porttitor.', 'Praesent ultricies, mauris eget vestibulum viverra, neque lorem malesuada mauris, eget rhoncus lectus enim a lorem. Vivamus at vehicula risus, eget facilisis massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et posuere sapien. Fusce bibendum lorem sem, quis tincidunt felis mattis nec.', '53432620.jpeg', 'food', 1626681021, 15),
(3, 'sit Lorem ipsum dolor amet', 'amet dolor sit Lorem ipsum ', 'Lorem dolor sit ametipsum ', 'vulputate, massa eget elementum finibus, ipsum arcu commodo est, ut mattis eros orci ac risus. Suspendisse ornare, massa in feugiat facilisis, eros nisl auctor lacus, laoreet tempus elit dolor eu lorem. Nunc a arcu suscipit, suscipit quam quis, semper augue.\r\n\r\nQuisque arcu nulla, convallis nec orci vel, suscipit elementum odio. Curabitur volutpat velit non diam tincidunt sodales. Nullam sapien libero, bibendum nec viverra in, iaculis ut eros.', 'Donec auctor purus ut mattis feugiat. Integer mi erat, consectetur sed tincidunt vitae, sagittis elementum libero. Vivamus a mauris consequat, hendrerit lectus in, fermentum libero. Integer mattis bibendum neque et porttitor.\r\n\r\nMauris quis arcu finibus, posuere dolor eu, viverra felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In porta, ex vitae accumsan facilisis, nisi tellus dictum metus, ', 'rhoncus lectus enim a lorem. Vivamus at vehicula risus, eget facilisis massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et posuere sapien. Fusce bibendum lorem sem, quis tincidunt felis mattis nec.\r\n\r\nProin vel nulla purus. Nunc nec eros in nisi efficitur rutrum quis sed eros. Mauris felis dolor, rhoncus eget gravida vitae, pretium vel arcu. Cras blandit tellus eget tellus dictum venenatis. Sed ultricies bibendum dictum. Etiam facilisis erat id turpis tincidunt malesuada. Duis bibendum sapien ', '56241699.jpeg', 'food', 1626681144, 12),
(4, 'ipsum Lorem dolor sit amet', 'dolor sit amet Lorem ipsum ', 'Lorem dolor sit ametipsum ', 'bibendum, augue purus mollis sapien, non rhoncus eros leo in nunc. Donec a nulla vel turpis consectetur tempor ac vel justo. In hac habitasse platea dictumst. Cras nec sollicitudin eros. Nunc eu enim non turpis sagittis rhoncus consectetur id augue. Mauris dignissim neque felis. Phasellus mollis mi a pharetra cursus', 'magnis dis parturient montes, nascetur ridiculus mus. In porta, ex vitae accumsan facilisis, nisi tellus dictum metus, quis fringilla dui tellus in tellus. Praesent pharetra orci at vehicula posuere. Sed molestie fringilla lorem, vel imperdiet tortor blandit at. Quisque non ultrices lorem, eget rhoncus orci. Fusce porttitor placerat diam et mattis. Nam laoreet, ex eu posuere sollicitudin, sem', 'rhoncus lectus enim a lorem. Vivamus at vehicula risus, eget facilisis massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et posuere sapien. Fusce bibendum lorem sem, quis tincidunt felis mattis nec.\r\n\r\nProin vel nulla purus. Nunc nec eros in nisi efficitur rutrum quis sed eros. Mauris felis dolor, rhoncus eget gravida vitae, pretium vel arcu. Cras blandit tellus eget tellus dictum venenatis. Sed ultricies', '70070653.jpeg', 'food', 1626681199, 13);

-- --------------------------------------------------------

--
-- Структура таблицы `food_categories`
--

CREATE TABLE `food_categories` (
  `id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `info` text NOT NULL,
  `img` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `food_categories`
--

INSERT INTO `food_categories` (`id`, `name`, `info`, `img`) VALUES
(1, 'burgers', 'Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.', '37800637.png'),
(2, 'snacks', 'facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit ', '44339626.png'),
(3, 'beverages', 'metus tortor auctor quis sem. Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam', '11060900.png');

-- --------------------------------------------------------

--
-- Структура таблицы `header_list`
--

CREATE TABLE `header_list` (
  `id` int(16) NOT NULL,
  `parent_id` int(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `header_list`
--

INSERT INTO `header_list` (`id`, `parent_id`, `name`, `link`) VALUES
(1, 0, 'home', 'index.php'),
(2, 0, 'about', 'about.php'),
(3, 0, 'feature', 'feature.php'),
(4, 0, 'chef', 'team.php'),
(5, 0, 'menu', 'menu.php'),
(6, 0, 'booking', 'booking.php'),
(7, 0, 'pages', '#'),
(11, 7, 'blog grid', 'blog.php'),
(12, 7, 'blog detail', 'single.php'),
(13, 0, 'contact', 'contact.php');

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
-- Индексы таблицы `all_foods`
--
ALTER TABLE `all_foods`
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
-- Индексы таблицы `food_blog`
--
ALTER TABLE `food_blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `food_categories`
--
ALTER TABLE `food_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `header_list`
--
ALTER TABLE `header_list`
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
-- AUTO_INCREMENT для таблицы `all_foods`
--
ALTER TABLE `all_foods`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `food_blog`
--
ALTER TABLE `food_blog`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `header_list`
--
ALTER TABLE `header_list`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
