-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-13 09:37:56
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db01`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(5) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234'),
(2, 'root', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `autobiography`
--

CREATE TABLE `autobiography` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `autobiography`
--

INSERT INTO `autobiography` (`id`, `file`, `text`, `sh`) VALUES
(9, '', '在高職三年的資料處理科生活中,我學習到了一些程式方面的設計以及一些套裝應用軟體的使用,而考上二專之後,會計知識的學習更讓我的二專生活豐富了起來,也因此我增加了處理會計事務的能力', 1),
(10, '', '我的個性蠻隨和的,一開始看到我的人可能會以為我很冷淡,但是每個認識我的人之後都說我跟一開始看到的感覺完全不一樣,其實我是一個熱心好相處的人，我喜歡接觸各種不同的事物,希望能學習到許多不一樣的經驗,因此不管從事任何工作都希望能做到最好,以求能在工作崗位上有好的表現', 1),
(11, '', '我希望能不斷地學習新的東西,更希望有機會能將之前工作所學的應用在自己的工作上,相信經由持續不斷的學習,我一定能在工作的專業領域上獲得相對的成果', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `edu`
--

CREATE TABLE `edu` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uni` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dep` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `edu`
--

INSERT INTO `edu` (`id`, `file`, `uni`, `dep`, `timer`, `sh`) VALUES
(14, '', '德明商業專科學校', '會計統計科', '1996.9~1998.6', 1),
(15, '', '松山商業職業學校', '資料處理科', '1992.9~1995.6', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `image`
--

INSERT INTO `image` (`id`, `file`, `text`, `sh`) VALUES
(1, '01.jpg', '', 1),
(2, '04.jpg', '', 1),
(3, '02.jpg', '', 1),
(11, '03.jpg', '', 1),
(12, '05.jpg', '', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `personal`
--

CREATE TABLE `personal` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `personal`
--

INSERT INTO `personal` (`id`, `file`, `text`, `tel`, `email`, `note`, `sh`) VALUES
(5, 'bust.jpg', '曾威智', '0958203803', 'xbr123@yahoo.com.tw', '忍耐和堅持雖是痛苦的事情，但卻能漸漸地為你帶來好處', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `portfolio`
--

INSERT INTO `portfolio` (`id`, `file`, `text`, `href`, `sh`) VALUES
(14, 'p01.jpg', '萬年曆', 'http://220.128.133.15/mackliu/10802/calendar/02/', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ski` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `con` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `file`, `ski`, `con`, `note`, `sh`) VALUES
(14, '', '電腦硬體裝修', '電腦硬體基本組裝', '丙級電腦硬體裝修證照', 1),
(15, '', '影像製作', '繪圖、編修影像、美術排版設計', 'Photoshop、illustrator', 1),
(16, '', '網頁設計', '網站網頁排版設計', 'HTML5、jQuery', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `work`
--

CREATE TABLE `work` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `co` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `work`
--

INSERT INTO `work` (`id`, `file`, `co`, `job`, `timer`, `sh`) VALUES
(14, '', '典創國際行銷公司', '倉管人員', '2018/08～2018/12', 1),
(15, '', '福瑞睿狐股份有限公司 ', '倉管助理', '2016/03～2018/04', 1),
(16, '', '大豐有線電視公司', '電話客服人員', '2014/08～2015/09', 1),
(18, '', '金雅拓股份有限公司', '操作員', '2008/04~2013/04', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `autobiography`
--
ALTER TABLE `autobiography`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `autobiography`
--
ALTER TABLE `autobiography`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `edu`
--
ALTER TABLE `edu`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `work`
--
ALTER TABLE `work`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
