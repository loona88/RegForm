-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 03 2018 г., 15:22
-- Версия сервера: 5.7.20-log
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myBase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `smt`
--

CREATE TABLE `smt` (
  `id` int(11) UNSIGNED NOT NULL,
  `frs_name` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `login` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `lst_name` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `e_mail` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `mnt` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `gender` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `ph_numb` int(191) DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `smt`
--

INSERT INTO `smt` (`id`, `frs_name`, `login`, `lst_name`, `e_mail`, `mnt`, `gender`, `ph_numb`, `password`) VALUES
(1, 'David', 'david', 'Oganesyan', 'da@da.da', '1995-08-24', 'male', 1234, '172522ec1028ab781d9dfd17eaca4427');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `smt`
--
ALTER TABLE `smt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `smt`
--
ALTER TABLE `smt`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
