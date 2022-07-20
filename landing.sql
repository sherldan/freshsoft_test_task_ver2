-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 20 2022 г., 17:12
-- Версия сервера: 10.5.15-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `landing`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pic`
--

CREATE TABLE `pic` (
  `pic_ID` int(11) NOT NULL,
  `image_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pic`
--

INSERT INTO `pic` (`pic_ID`, `image_page`) VALUES
(1, 'pic.jpg'),
(2, 'pic_one.jpg'),
(3, 'pic_two.jpg'),
(4, 'pic_three.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(535) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`) VALUES
(1, 'Задача организации, в особенности же высокое качество позиционных исследований предполагает независимые способы реализации системы массового участия. Принимая во внимание показатели успешности, сложившаяся структура организации позволяет оценить значение кластеризации усилий.'),
(2, 'Являясь всего лишь частью общей картины, активно развивающиеся страны третьего мира, инициированные исключительно синтетически, в равной степени предоставлены сами себе. Есть над чем задуматься: реплицированные с зарубежных источников, современные исследования освещают чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется, объявлены нарушающими общечеловеческие нормы этики и морали.'),
(3, 'Вот вам яркий пример современных тенденций — современная методология разработки требует от нас анализа новых принципов формирования материально-технической и кадровой базы. И нет сомнений, что тщательные исследования конкурентов представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть объединены в целые кластеры себе подобных.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_phone`, `fio`) VALUES
('Minze', '+7(454) 664-45-56'),
('TestUser', '+7(889) 754-62-34');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`pic_ID`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
