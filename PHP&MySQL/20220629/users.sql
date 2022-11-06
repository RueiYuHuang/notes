-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-29 16:34:00
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `my_test_db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `account` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `valid` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `account`, `name`, `password`, `phone`, `email`, `create_time`, `valid`) VALUES
(1, 'joe', 'Joe', '', '0944333333', 'joe@gmail.com', '2022-06-22 10:41:31', 1),
(2, 'jay', 'jay', '', '0933333332', 'jay@test.com', '2022-06-22 10:43:48', 1),
(3, 'sue', 'Sue', '', '0900088000', 'sue@test.com', '2022-06-22 10:43:57', 1),
(4, 'may', 'May', '', '0900000000', 'may@example.com', '2022-06-22 10:53:23', 1),
(5, 'tom', 'Tom', '', '0911111111', 'tom@example.com', '2022-06-22 10:53:23', 1),
(6, 'lucy', 'Lucy', '', '0911111222', 'lucy@gmail.com', '2022-06-22 10:53:23', 1),
(7, 'peter', 'Peter', '827ccb0eea8a706c4c34a16891f84e7b', '0944444111', 'peter@test.com', '2022-06-23 11:59:02', 1),
(8, 'wayne', 'Wayne', '827ccb0eea8a706c4c34a16891f84e7b', '0966666666', 'wayne@test.com', '2022-06-23 13:41:38', 1),
(9, 'jason', 'Jason', '827ccb0eea8a706c4c34a16891f84e7b', '0966666222', 'jason@test.com', '2022-06-23 15:13:44', 1),
(10, 'ryan', 'Ryan', '827ccb0eea8a706c4c34a16891f84e7b', '0922444555', 'ryan@test.com', '2022-06-23 15:23:50', 1),
(11, 'sarah', 'Sarah', '827ccb0eea8a706c4c34a16891f84e7b', '0966222666', 'sarah@test.com', '2022-06-23 15:23:50', 1),
(12, 'sam', 'Sam', '827ccb0eea8a706c4c34a16891f84e7b', '0966111777', 'sam@test.com', '2022-06-23 15:24:46', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
