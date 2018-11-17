-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2018-11-17 09:38:48
-- 服务器版本： 10.1.36-MariaDB
-- PHP 版本： 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `library`
--

-- --------------------------------------------------------

--
-- 表的结构 `book`
--

CREATE TABLE `book` (
  `b_id` int(100) NOT NULL,
  `b_name` varchar(60) NOT NULL,
  `b_class` varchar(40) NOT NULL,
  `b_author` varchar(40) NOT NULL,
  `b_des` text NOT NULL,
  `b_img` text NOT NULL,
  `b_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`b_id`, `b_name`, `b_class`, `b_author`, `b_des`, `b_img`, `b_date`) VALUES
(1, '江湖七绝技', '武打小说', '无名', '梦想能学少林功夫...', '', '2018-11-14 16:00:00'),
(2, '天龙八部', '武打小说', '金庸', '豪情侠客、如水佳人', '', '2018-11-16 08:20:18'),
(3, '高中数学', '教科书', '叫兽', '高考必备书', '', '2018-11-16 08:20:18'),
(4, '高中语文', '教科书', '叫兽', '高考必备', '', '2018-11-16 08:20:18'),
(5, '高中英语', '教科书', '叫兽', '高考必备', '', '2018-11-16 08:20:18'),
(6, 'JS权威指南', '前端书', '大牛', '前端JS基本知识书，容易上手。', '', '2018-11-16 08:20:18'),
(7, '高中物理', '教科书', '叫兽', '高考理科书', '', '2018-11-16 08:20:18'),
(8, '高中数学', '教科书', '叫兽', '高考必备', '', '2018-11-16 08:20:18'),
(9, '高中数学', '教科书', '叫兽', '高考必备', '', '2018-11-16 08:20:18'),
(10, 'JS权威指南', '前端书', '大牛', '前端书籍', '', '2018-11-16 08:20:18'),
(11, 'JS权威指南2', '前端书', '大牛', '前端书籍', '', '2018-11-16 08:20:18'),
(12, '高中数学', '教科书', '叫兽', '教科书', '', '2018-11-16 08:20:18'),
(13, 'JS全解', '前端书', '大牛', '好一本前端JS书籍', '', '2018-11-16 08:20:18'),
(14, '高一数学', '教科书', '叫兽', '学业用书', '', '2018-11-16 08:20:18'),
(15, '高二语文', '教科书', '叫兽', '好教科书', '', '2018-11-16 08:20:18'),
(16, '高一物理', '教科书', '叫兽', '教科书', '', '2018-11-16 08:20:18'),
(17, '高中生物', '教科书', '叫兽', '学生用书', '', '2018-11-16 08:20:18'),
(18, '高中数学', '前端书', '大牛', '学生用书', '', '2018-11-16 08:20:18'),
(19, '高中数学', '教科书', '叫兽', '学生用书', '', '2018-11-16 08:20:18'),
(20, 'JS权威指南3', '前端书', '大牛', '前端基础知识书', '', '2018-11-16 08:20:18'),
(21, '高三数学', '教科书', '叫兽', '学生用书', '', '2018-11-16 08:20:18'),
(22, '天龙九部', '武打小说', '大侠', '精美武打小说', '', '2018-11-16 08:20:18'),
(23, '天天向上', '娱乐书', '开心', '好好学习，天天向上', '', '2018-11-16 08:20:18'),
(24, '高三英语', '教科书', '叫兽', '英语', '', '2018-11-16 08:20:18');

--
-- 转储表的索引
--

--
-- 表的索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `b_id` (`b_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `book`
--
ALTER TABLE `book`
  MODIFY `b_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
