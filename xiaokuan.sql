-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-27 19:13:25
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `xiaokuan`
--

-- --------------------------------------------------------

--
-- 資料表結構 `123`
--

CREATE TABLE `123` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `classlist`
--

CREATE TABLE `classlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classtype` varchar(255) NOT NULL DEFAULT '一般課程',
  `link` varchar(255) NOT NULL,
  `teacherid` bigint(20) UNSIGNED NOT NULL,
  `teachername` varchar(255) NOT NULL,
  `videotime` time NOT NULL,
  `introduction` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `forwho` varchar(255) NOT NULL,
  `money` varchar(255) NOT NULL,
  `classname` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `discountlink` varchar(255) DEFAULT NULL,
  `drive` text NOT NULL,
  `classnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `classlist`
--

INSERT INTO `classlist` (`id`, `classtype`, `link`, `teacherid`, `teachername`, `videotime`, `introduction`, `photo`, `forwho`, `money`, `classname`, `created_at`, `updated_at`, `discountlink`, `drive`, `classnum`) VALUES
(1, '大一微積分', 'https://www.youtube.com/embed/Ga9RKlSUvJ0?si=UME3AB8XjmokG8G_', 1, '莊小寬', '02:00:00', 'A', 'photos/大一微-300x300.png', '大一微積分', '500', '大一微積分_第一段', '2024-03-13 04:40:00', '2024-03-13 04:40:00', '', '', 0),
(15, '高一上', 'https://www.youtube.com/watch?v=6cXZPRq3A6k&ab_channel=%E5%AE%A2%E5%AE%B6%E9%9B%BB%E8%A6%96HakkaTV', 1, '莊小寬', '02:00:00', '◎購買須知  \r\n購買課程前可先試看第一部影片。\r\n此課程自您繳清款項後開始觀看課程影片。觀看期限為該學期第三次段考結束。\r\n★不論您何時購買期限統一為該學期第三次段考結束。\r\n課程費用包含：\r\n講義(1本)\r\n課程解惑(完成繳費時請加莊小寬數學好友由我們邀請您加入相關解題群組)\r\n段考複習(複習課程僅提供電子檔考卷。請自行下載)\r\n郵寄費用(郵寄-普通掛號小包/包裹)\r\n請先詳閱服務條款\r\n★合約將隨上課教材寄出\r\n超過觀看期限還想觀看課程，請再重新購買。\r\n◎使用方式\r\n手機、電腦、平板皆可隨時觀看課程，課程完成後另附上小考。\r\n若您有其他操作上的問題，請加line聯絡我們!', 'photos/新課綱 高一上直線與圓.jpg', '高一上', '1400', '新課綱 高一上直線與圓', '2024-03-14 19:34:13', '2024-03-14 19:34:13', NULL, '', 0),
(16, '高一上', 'https://www.youtube.com/watch?v=6cXZPRq3A6k&ab_channel=%E5%AE%A2%E5%AE%B6%E9%9B%BB%E8%A6%96HakkaTV', 1, '莊小寬', '02:00:00', '◎購買須知  \r\n購買課程前可先試看第一部影片。\r\n此課程自您繳清款項後開始觀看課程影片。觀看期限為該學期第三次段考結束。\r\n★不論您何時購買期限統一為該學期第三次段考結束。\r\n課程費用包含：\r\n講義(1本)\r\n課程解惑(完成繳費時請加莊小寬數學好友由我們邀請您加入相關解題群組)\r\n段考複習(複習課程僅提供電子檔考卷請。自行下載)\r\n郵寄費用(郵寄-普通掛號小包/包裹)\r\n請先詳閱服務條款\r\n★合約將隨上課教材寄出\r\n超過觀看期限還想觀看課程，請再重新購買。\r\n◎使用方式\r\n手機、電腦、平板皆可隨時觀看課程。', 'photos/新課綱 高一上 多項式.jpg', '高一上', '4200', '新課綱 高一上多項式', '2024-03-14 19:34:58', '2024-03-14 19:34:58', NULL, '', 0),
(17, '高一上', 'https://www.youtube.com/watch?v=6cXZPRq3A6k&ab_channel=%E5%AE%A2%E5%AE%B6%E9%9B%BB%E8%A6%96HakkaTV', 1, '莊小寬', '02:00:00', '◎購買須知  \r\n龍騰、翰林、南一、三民等所有版本皆適用。\r\n購買課程前可先試看第一部影片。\r\n此課程自您繳清款項後開始觀看；影片全部開通，讓您的進度跑在學校前面!\r\n觀看期限為高一上第三次段考結束。\r\n★不論您何時購買期限統一為高一上第三次段考結束。\r\n課程費用包含：\r\n講義(4本)\r\n課程解惑(完成繳費時請加莊小寬數學好友由我們邀請您加入相關解題群組)\r\n段考複習(複習課程僅提供電子檔考卷請。自行下載)\r\n郵寄費用(郵寄-普通掛號小包/包裹)\r\n請先詳閱服務條款\r\n★合約將隨上課教材寄出，請在在您簽完名後拍照回傳至line\r\n超過觀看期限還想觀看課程，請再重新購買。\r\n      ◎特殊進度\r\n私校直升、特殊班同學(科學班、資優班、高瞻班…)、學校特殊進度課程請另外私訊。我們將會協助您購買課程。\r\n     ◎使用方式\r\n手機、電腦、平板皆可隨時觀看課程。\r\n若您有其他操作上的問題，請聯絡我們!', 'photos/新課綱 第一冊全.png', '高一上', '13440', '新課綱 第一冊全', '2024-03-14 19:35:40', '2024-03-14 19:39:02', '新課綱 高一上實數，新課綱 高一上指對數，新課綱 高一上直線與圓，新課綱 高一上多項式，大一微積分', '', 0),
(18, '大一微積分', 'https://www.youtube.com/embed/o-3CAsEmxPg?si=d6SkWkIvpRc44opb', 1, '莊小寬', '02:00:00', 'A', 'photos/大一微-300x300.png', '大一微積分', '500', '大一微積分_第二段', '2024-03-13 04:40:00', '2024-03-13 04:40:00', '', 'https://drive.google.com/drive/folders/1729mI1d3miltmnx60oN8zumKgJmEn-ux?usp=sharing', 0),
(19, '大一微積分', '', 1, '莊小寬', '02:00:00', 'A', 'photos/大一微-300x300.png', '大一微積分', '500', '大一微積分', '2024-03-13 04:40:00', '2024-03-13 04:40:00', '', '', 0),
(28, '高一上', 'https://www.youtube.com/watch?v=6cXZPRq3A6k&ab_channel=%E5%AE%A2%E5%AE%B6%E9%9B%BB%E8%A6%96HakkaTV', 1, '莊小寬', '30:00:00', 'photos/yEEWCz8x91INoQSfw3EllrkztGLU1fdsDzZQdhwS.png', 'photos/shop.course.1.png', '高一上', '500', 'test', '2024-05-27 04:32:17', '2024-07-23 06:25:58', NULL, 'https://drive.google.com/drive/folders/1729mI1d3miltmnx60oN8zumKgJmEn-ux?usp=sharing', 6),
(29, '高一上', 'https://www.youtube.com/watch?v=6cXZPRq3A6k&ab_channel=%E5%AE%A2%E5%AE%B6%E9%9B%BB%E8%A6%96HakkaTV', 1, '莊小寬', '30:00:00', 'photos/DALL·E 2023-12-24 19.03.50 - A whimsical scene where fluffy pancakes are raining from the sky. In the midst of this pancake rain, a purple alien with two antennas and a friendly s.png', 'photos/DALL·E 2023-12-24 19.03.50 - A whimsical scene where fluffy pancakes are raining from the sky. In the midst of this pancake rain, a purple alien with two antennas and a friendly s.png', '高一上', '5005', 'test_第一段', '2024-05-27 04:32:49', '2024-07-23 06:27:01', NULL, 'https://drive.google.com/drive/folders/1729mI1d3miltmnx60oN8zumKgJmEn-ux?usp=sharing', 6),
(32, '升高一銜接課程', 'https://vimeo.com/659563674?share=copy', 1, '莊小寬', '00:53:37', 'photos/1 (2).png', 'photos\\shop\\course\\2.png', '升高一銜接課程', '0', '升高一銜接課程', '2024-07-19 09:00:05', '2024-07-19 09:00:05', '無', '無', 3),
(33, '升高一銜接課程', 'https://vimeo.com/659563674?share=copy', 1, '莊小寬', '00:53:37', 'photos/1 (2).png', 'C:\\xampp\\htdocs\\xiaokuan\\public\\photos\\shop\\course\\2.png', '升高一銜接課程', '0', '升高一銜接課程_ 單元一：集合與集合計數', '2024-07-19 09:06:25', '2024-07-19 09:06:25', '無', '無', 3),
(34, '升高一銜接課程', 'https://vimeo.com/659563827?share=copy', 1, '莊小寬', '01:06:51', 'photos/1 (2).png', 'photos/2.png', '升高一銜接課程', '0', '升高一銜接課程_單元二：三角', '2024-07-19 09:14:44', '2024-07-19 09:14:44', '無', '無', 3),
(35, '升高一銜接課程', 'https://vimeo.com/659563884?share=copy', 1, '莊小寬', '00:56:32', 'photos/1 (2).png', 'photos/2.png', '升高一銜接課程', '0', '升高一銜接課程_ 單元三：多項式與不等式', '2024-07-19 09:16:13', '2024-07-19 09:16:13', '無', '無', 3),
(36, '升高一銜接課程', 'https://vimeo.com/659564022?share=copy', 1, '莊小寬', '00:54:57', 'photos/1 (3).png', 'photos/4.png', '升高一銜接課程', '0', '整數', '2024-07-19 09:18:09', '2024-07-19 09:18:09', '無', '無', 3),
(37, '升高一銜接課程', 'https://vimeo.com/659564022?share=copy', 1, '莊小寬', '00:54:57', 'photos/1 (4).png', 'photos/4.png', '升高一銜接課程', '0', '整數_ 單元一：整數1', '2024-07-19 09:19:46', '2024-07-19 09:19:46', '無', '無', 3),
(38, '升高一銜接課程', 'https://vimeo.com/659564122?share=copy', 1, '莊小寬', '01:14:14', 'photos/1 (4).png', 'photos/4.png', '升高一銜接課程', '0', '整數_ 單元一：整數2', '2024-07-19 09:21:31', '2024-07-19 09:21:31', '無', '無', 3),
(39, '升高一銜接課程', 'https://vimeo.com/659564183?share=copy', 1, '莊小寬', '01:01:21', 'photos/1 (4).png', 'photos/4.png', '升高一銜接課程', '0', '整數_ 單元一：整數3', '2024-07-19 09:22:23', '2024-07-19 09:22:23', '無', '無', 3),
(40, '科學班準備-創思資優課程', 'https://vimeo.com/667834839?share=copy', 1, '莊小寬', '00:38:52', 'photos/1 (3).png', 'photos/3.png', '科學班準備-創思資優課程', '5200', '科學、資優創思課程', '2024-07-19 09:30:38', '2024-07-19 09:30:38', '無', '無', 9),
(41, '科學班準備-創思資優課程', 'https://vimeo.com/667834839?share=copy', 1, '莊小寬', '00:38:52', 'photos/1 (3).png', 'photos/3.png', '科學班準備-創思資優課程', '5200', '科學、資優創思課程_ 單元一：奇偶性分析', '2024-07-19 09:33:41', '2024-07-19 09:33:41', '無', '無', 9),
(42, '科學班準備-創思資優課程', 'https://vimeo.com/668116638?share=copy', 1, '莊小寬', '01:00:16', 'photos/1 (3).png', 'photos/3.png', '科學班準備-創思資優課程', '5200', '科學、資優創思課程_單元二：同餘分析', '2024-07-19 09:35:09', '2024-07-19 09:35:09', '無', '無', 9),
(43, '科學班準備-創思資優課程', 'https://vimeo.com/716360432?share=copy', 1, '莊小寬', '00:53:11', 'photos/1 (3).png', 'photos/3.png', '科學班準備-創思資優課程', '5200', '科學、資優創思課程_單元三：鴿籠原理', '2024-07-19 09:37:41', '2024-07-19 09:37:41', '無', '無', 9),
(44, '科學班準備-創思資優課程', 'https://vimeo.com/678551658?share=copy', 1, '莊小寬', '00:42:52', 'photos/1 (3).png', 'photos/3.png', '科學班準備-創思資優課程', '5200', '科學、資優創思課程_單元四：著色問題', '2024-07-19 09:39:29', '2024-07-19 09:39:29', '無', '無', 9),
(45, '科學班準備-創思資優課程', 'https://vimeo.com/678756134?share=copy', 1, '莊小寬', '00:50:18', 'photos/1 (3).png', 'photos/3.png', '科學班準備-創思資優課程', '5200', '科學、資優創思課程_單元五：排容原理與Rook多項式', '2024-07-19 09:40:30', '2024-07-19 09:40:30', '無', '無', 9),
(46, '科學班準備-創思資優課程', 'https://vimeo.com/682702278?share=copy', 1, '莊小寬', '00:38:43', 'photos/1 (3).png', 'photos/3.png', '科學班準備-創思資優課程', '5200', '科學、資優創思課程_單元六：排列行列式', '2024-07-19 09:47:25', '2024-07-19 09:47:25', '無', '無', 9),
(47, '科學班準備-創思資優課程', 'https://vimeo.com/685359076?share=copy', 1, '莊小寬', '00:45:56', 'photos/1 (3).png', 'photos/3.png', '科學班準備-創思資優課程', '5200', '科學、資優創思課程_單元七：遞迴分析', '2024-07-19 10:12:52', '2024-07-19 10:12:52', '無', '無', 9),
(48, '科學班準備-創思資優課程', 'https://vimeo.com/691685183?share=copy', 1, '莊小寬', '00:52:56', 'photos/1 (3).png', 'photos/3.png', '科學班準備-創思資優課程', '5200', '科學、資優創思課程_單元八：算幾不等式', '2024-07-19 10:13:45', '2024-07-19 10:13:45', '無', '無', 9),
(49, '科學班準備-創思資優課程', 'https://vimeo.com/692161944?share=copy', 1, '莊小寬', '00:47:07', 'photos/1 (3).png', 'photos/3.png', '科學班準備-創思資優課程', '5200', '科學、資優創思課程_單元九：高斯分析', '2024-07-19 10:14:52', '2024-07-19 10:14:52', '無', '無', 9),
(50, '高一上', 'https://vimeo.com/721020358?share=copy', 1, '莊小寬', '01:52:15', 'photos/1 (5).png', 'photos/5.png', '高一上', '3000', '邏輯集合函數', '2024-07-19 10:19:12', '2024-07-19 10:19:12', '無', '無', 3),
(51, '高一上', 'https://vimeo.com/721020358?share=copy', 1, '莊小寬', '01:52:15', 'photos/1 (5).png', 'photos/5.png', '高一上', '3000', '邏輯集合函數_單元一：邏輯集合函數思考1-8', '2024-07-19 10:20:54', '2024-07-19 10:20:54', '無', '無', 3),
(52, '高一上', 'https://vimeo.com/723391376?share=copy', 1, '莊小寬', '01:39:36', 'photos/1 (5).png', 'photos/5.png', '高一上', '3000', '邏輯集合函數_單元二：邏輯集合函數思考9-12', '2024-07-19 10:22:26', '2024-07-19 10:22:26', '無', '無', 3),
(53, '高一上', 'https://vimeo.com/725591394?share=copy', 1, '莊小寬', '01:33:08', 'photos/1 (5).png', 'photos/5.png', '高一上', '3000', '邏輯集合函數_單元三：邏輯集合函數思考13-20', '2024-07-19 10:23:52', '2024-07-19 10:23:52', '無', '無', 3),
(54, '高一上', 'https://vimeo.com/746505329?share=copy', 1, '莊小寬', '01:34:53', 'photos/1 (5).png', 'photos/5.png', '高一上', '3000', '邏輯集合函數_110雄中高一上一段(範圍：邏輯集合+實數)', '2024-07-19 10:27:38', '2024-07-19 10:27:38', '無', '無', 3),
(55, '高一上', 'https://vimeo.com/758247484?share=copy', 1, '莊小寬', '00:59:52', 'photos/1 (5).png', 'photos/5.png', '高一上', '3000', '邏輯集合函數_109雄中高一上一段(範圍：邏輯集合+實數)', '2024-07-19 10:29:09', '2024-07-19 10:29:09', '無', '無', 3),
(56, '高一上', 'https://vimeo.com/661385055?share=copy', 1, '莊小寬', '01:42:12', 'photos/1 (6).png', 'photos/6.png', '高一上', '2400', '實數', '2024-07-19 10:33:40', '2024-07-19 10:33:40', '無', '無', 4),
(57, '高一上', 'https://vimeo.com/661385055?share=copy', 1, '莊小寬', '01:42:12', 'photos/1 (6).png', 'photos/6.png', '高一上', '2400', '實數_單元一：實數思考1-4', '2024-07-19 10:34:58', '2024-07-19 10:34:58', '無', '無', 4),
(58, '高一上', 'https://vimeo.com/660597299?share=copy', 1, '莊小寬', '01:29:58', 'photos/1 (6).png', 'photos/6.png', '高一上', '2400', '實數_單元二：實數思考5-7', '2024-07-19 10:35:52', '2024-07-19 10:35:52', '無', '無', 4),
(59, '高一上', 'https://vimeo.com/662521625?share=copy', 1, '莊小寬', '01:26:04', 'photos/1 (6).png', 'photos/6.png', '高一上', '2400', '實數_單元三：實數思考8-11', '2024-07-19 10:36:50', '2024-07-19 10:36:50', '無', '無', 4),
(60, '高一上', 'https://vimeo.com/662524145?share=copy', 1, '莊小寬', '01:33:16', 'photos/1 (6).png', 'photos/6.png', '高一上', '2400', '實數_單元四：實數思考12-13', '2024-07-19 10:38:08', '2024-07-19 10:38:08', '無', '無', 4),
(61, '高一上', 'https://vimeo.com/746320567?share=copy', 1, '莊小寬', '01:05:39', 'photos/1 (6).png', 'photos/6.png', '高一上', '2400', '實數_108建中高一一段(範圍：實數與指對數)', '2024-07-19 10:40:01', '2024-07-19 10:40:01', '無', '無', 4),
(62, '高一上', 'https://vimeo.com/753306179?share=copy', 1, '莊小寬', '01:11:39', 'photos/1 (6).png', 'photos/6.png', '高一上', '2400', '實數_110北一女高一一段(範圍：實數與指對數)', '2024-07-19 11:15:59', '2024-07-19 11:15:59', '無', '無', 4),
(63, '高一上', 'https://vimeo.com/663545743?share=copy', 1, '莊小寬', '01:23:53', 'photos/1 (7).png', 'photos/7.png', '高一上', '2400', '指對數', '2024-07-19 11:19:21', '2024-07-19 11:19:21', '無', '無', 4),
(64, '高一上', 'https://vimeo.com/663545743?share=copy', 1, '莊小寬', '01:23:53', 'photos/1 (7).png', 'photos/7.png', '高一上', '2400', '指對數_單元一：指對數思考1-2', '2024-07-19 11:20:35', '2024-07-19 11:20:35', '無', '無', 4),
(65, '高一上', 'https://vimeo.com/663268666?share=copy', 1, '莊小寬', '01:11:15', 'photos/1 (7).png', 'photos/7.png', '高一上', '2400', '指對數_單元二：指對數思考3-6', '2024-07-19 11:21:34', '2024-07-19 11:21:34', '無', '無', 4),
(66, '高一上', 'https://vimeo.com/684568136?share=copy', 1, '莊小寬', '01:09:51', 'photos/1 (7).png', 'photos/7.png', '高一上', '2400', '指對數_單元二：指對數思考7-10', '2024-07-19 11:22:26', '2024-07-19 11:22:26', '無', '無', 4),
(67, '高一上', 'https://vimeo.com/695637028?share=copy', 1, '莊小寬', '01:06:29', 'photos/1 (7).png', 'photos/7.png', '高一上', '2400', '指對數_單元二：指對數思考11-13', '2024-07-19 11:23:21', '2024-07-19 11:23:21', '無', '無', 4),
(68, '高一上', 'https://vimeo.com/746320567?share=copy', 1, '莊小寬', '01:05:39', 'photos/1 (7).png', 'photos/7.png', '高一上', '2400', '指對數_108建中高一一段(範圍：實數與指對數)', '2024-07-19 11:24:37', '2024-07-19 11:24:37', '無', '無', 4),
(69, '高一上', 'https://vimeo.com/753306179?share=copy', 1, '莊小寬', '01:11:39', 'photos/1 (7).png', 'photos/7.png', '高一上', '2400', '指對數_110北一女高一一段(範圍：實數與指對數)', '2024-07-19 11:25:35', '2024-07-19 11:25:35', '無', '無', 4),
(70, '高一上', 'https://vimeo.com/698141579?share=copy', 1, '莊小寬', '01:30:12', 'photos/1 (8).png', 'photos/8.png', '高一上', '3600', '直線與圓', '2024-07-19 11:58:26', '2024-07-19 11:58:26', '無', '無', 6),
(71, '高一上', 'https://vimeo.com/698141579?share=copy', 1, '莊小寬', '01:30:12', 'photos/1 (8).png', 'photos/8.png', '高一上', '3600', '直線與圓_單元一：直線與圓思考1-3', '2024-07-19 11:59:12', '2024-07-19 11:59:12', '無', '無', 6),
(72, '高一上', 'https://vimeo.com/699450095?share=copy', 1, '莊小寬', '01:10:06', 'photos/1 (8).png', 'photos/8.png', '高一上', '3600', '直線與圓_單元一：直線與圓思考4-7', '2024-07-19 12:00:04', '2024-07-19 12:00:04', '無', '無', 6),
(73, '高一上', 'https://vimeo.com/700473614?share=copy', 1, '莊小寬', '01:54:31', 'photos/1 (8).png', 'photos/8.png', '高一上', '3600', '直線與圓_單元一：直線與圓思考8-10', '2024-07-19 12:00:54', '2024-07-19 12:00:54', '無', '無', 6),
(74, '高一上', 'https://vimeo.com/705309185?share=copy', 1, '莊小寬', '01:22:02', 'photos/1 (8).png', 'photos/8.png', '高一上', '3600', '直線與圓_單元一：直線與圓思考11', '2024-07-19 12:01:47', '2024-07-19 12:01:47', '無', '無', 6),
(75, '高一上', 'https://vimeo.com/718629955?share=copy', 1, '莊小寬', '01:33:15', 'photos/1 (8).png', 'photos/8.png', '高一上', '3600', '直線與圓_單元一：直線與圓思考12-16', '2024-07-19 12:02:52', '2024-07-19 12:02:52', '無', '無', 6),
(76, '高一上', 'https://vimeo.com/722935800?share=copy', 1, '莊小寬', '01:22:05', 'photos/1 (8).png', 'photos/8.png', '高一上', '3600', '直線與圓_單元一：直線與圓思考17-21', '2024-07-19 12:03:40', '2024-07-19 12:03:40', '無', '無', 6),
(77, '高一上', 'https://vimeo.com/765203268?share=copy', 1, '莊小寬', '00:55:18', 'photos/1 (8).png', 'photos/8.png', '高一上', '3600', '直線與圓_單元一：108建中高一上第二次段考', '2024-07-19 12:04:52', '2024-07-19 12:04:52', '無', '無', 6),
(78, '高一上', 'https://vimeo.com/785375607?share=copy', 1, '莊小寬', '01:11:37', 'photos/1 (8).png', 'photos/8.png', '高一上', '3600', '直線與圓_單元二：111雄女高一上第二次段考', '2024-07-19 12:05:53', '2024-07-19 12:05:53', '無', '無', 6),
(79, '高一上', 'https://vimeo.com/728363957?share=copy', 1, '莊小寬', '01:29:15', 'photos/1 (9).png', 'photos/9.png', '高一上', '3600', '多項式', '2024-07-19 12:08:20', '2024-07-19 12:08:20', '無', '無', 6),
(80, '高一上', 'https://vimeo.com/728363957?share=copy', 1, '莊小寬', '01:29:15', 'photos/1 (9).png', 'photos/9.png', '高一上', '3600', '多項式_單元一：多項式思考1-5', '2024-07-19 12:09:10', '2024-07-19 12:09:10', '無', '無', 6),
(81, '高一上', 'https://vimeo.com/729905703?share=copy', 1, '莊小寬', '01:24:12', 'photos/1 (9).png', 'photos/9.png', '高一上', '3600', '多項式_單元二：多項式思考6-9', '2024-07-19 12:10:21', '2024-07-19 12:10:21', '無', '無', 6),
(82, '高一上', 'https://vimeo.com/732696838?share=copy', 1, '莊小寬', '01:40:23', 'photos/1 (9).png', 'photos/9.png', '高一上', '3600', '多項式_單元二：多項式思考10-12', '2024-07-19 12:11:25', '2024-07-19 12:11:25', '無', '無', 6),
(83, '高一上', 'https://vimeo.com/733149027?share=copy', 1, '莊小寬', '01:44:01', 'photos/1 (9).png', 'photos/9.png', '高一上', '3600', '多項式_單元二：多項式思考13-17', '2024-07-19 12:12:20', '2024-07-19 12:12:20', '無', '無', 6),
(84, '高一上', 'https://vimeo.com/738212465?share=copy', 1, '莊小寬', '01:29:12', 'photos/1 (9).png', 'photos/9.png', '高一上', '3600', '多項式_單元二：多項式思考18-21', '2024-07-19 12:17:05', '2024-07-19 12:17:05', '無', '無', 6),
(85, '高一上', 'https://vimeo.com/742347386?share=copy', 1, '莊小寬', '01:38:55', 'photos/1 (9).png', 'photos/9.png', '高一上', '3600', '多項式_單元二：多項式思考22-24', '2024-07-19 12:18:12', '2024-07-19 12:18:12', '無', '無', 6),
(86, '高一上', 'https://vimeo.com/765675847?share=copy', 1, '莊小寬', '01:07:31', 'photos/1 (9).png', 'photos/9.png', '高一上', '3600', '多項式_ 單元一：109北一女高一上三段', '2024-07-19 12:19:38', '2024-07-19 12:19:38', '無', '無', 6),
(87, '高一上', 'https://vimeo.com/782051423?share=copy', 1, '莊小寬', '01:11:31', 'photos/1 (9).png', 'photos/9.png', '高一上', '3600', '多項式_單元二：110雄中高一上三段', '2024-07-19 12:20:50', '2024-07-19 12:20:50', '無', '無', 6),
(88, '高一下', 'https://vimeo.com/661130512?share=copy', 1, '莊小寬', '01:19:25', 'photos/1 (11).png', 'photos/11.png', '高一下', '2880', '數列級數', '2024-07-20 01:00:24', '2024-07-20 01:00:24', '無', '無', 3),
(89, '高一下', 'https://vimeo.com/661130512?share=copy', 1, '莊小寬', '01:19:25', 'photos/1 (11).png', 'photos/11.png', '高一下', '2880', '數列級數_ 單元一：數列級數思考1-3', '2024-07-20 01:01:10', '2024-07-20 01:01:10', '無', '無', 3),
(90, '高一下', 'https://vimeo.com/798905654?share=copy', 1, '莊小寬', '01:48:15', 'photos/1 (11).png', 'photos/11.png', '高一下', '2880', '數列級數_單元二：數列級數思考4-7', '2024-07-20 01:02:02', '2024-07-20 01:02:02', '無', '無', 3),
(91, '高一下', 'https://vimeo.com/662522125?share=copy', 1, '莊小寬', '01:27:04', 'photos/1 (11).png', 'photos/11.png', '高一下', '2880', '數列級數_單元二：數列級數思考8-12', '2024-07-20 01:02:54', '2024-07-20 01:02:54', '無', '無', 3),
(92, '高一下', 'https://vimeo.com/690131999?share=copy', 1, '莊小寬', '01:01:15', 'photos/1 (11).png', 'photos/11.png', '高一下', '2880', '數列級數_段考複習', '2024-07-20 01:04:38', '2024-07-20 01:04:38', '無', '無', 3),
(93, '高一下', 'https://vimeo.com/763460119?share=copy', 1, '莊小寬', '01:45:26', 'photos/1 (11).png', 'photos/11.png', '高一下', '2880', '數列級數_110雄中高一二段(數列級數+直線方程式)', '2024-07-20 01:09:35', '2024-07-20 01:09:35', '無', '無', 3),
(94, '高一下', 'https://vimeo.com/766663469?share=copy', 1, '莊小寬', '01:16:16', 'photos/1 (11).png', 'photos/11.png', '高一下', '2880', '數列級數_109雄中高一二段(數列級數+直線方程式)', '2024-07-20 01:11:31', '2024-07-20 01:11:31', '無', '無', 3),
(95, '高一下', 'https://vimeo.com/809803834?share=copy', 1, '莊小寬', '01:06:30', 'photos/1 (11).png', 'photos/11.png', '高一下', '2880', '數列級數_108建中高一一段(數列級數+數據分析)', '2024-07-20 01:12:46', '2024-07-20 01:12:46', '無', '無', 3),
(96, '高一下', 'https://vimeo.com/662523830?share=copy', 1, '莊小寬', '01:02:47', 'photos/1 (12).png', 'photos/12.png', '高一下', '2055', '數據分析', '2024-07-20 01:24:17', '2024-07-20 01:24:17', '無', '無', 4),
(97, '高一下', 'https://vimeo.com/662523830?share=copy', 1, '莊小寬', '01:02:47', 'photos/1 (12).png', 'photos/12.png', '高一下', '2055', '數據分析_單元一：數據分析思考1-7', '2024-07-20 01:25:06', '2024-07-20 01:25:06', '無', '無', 4),
(98, '高一下', 'https://vimeo.com/662529139?share=copy', 1, '莊小寬', '01:16:56', 'photos/1 (12).png', 'photos/12.png', '高一下', '2055', '數據分析_單元二：數據分析思考8-9', '2024-07-20 01:26:03', '2024-07-20 01:26:03', '無', '無', 4),
(99, '高一下', 'https://vimeo.com/662534082?share=copy', 1, '莊小寬', '00:53:29', 'photos/1 (10).png', 'photos/10.png', '高一下', '2055', '數據分析_單元二：數據分析思考10', '2024-07-20 01:30:46', '2024-07-20 01:30:46', '無', '無', 4),
(100, '高一下', 'https://vimeo.com/809803834?share=copy', 1, '莊小寬', '01:06:30', 'photos/1 (12).png', 'photos/12.png', '高一下', '2055', '數據分析_108建中高一一段(數列級數+數據分析)', '2024-07-20 01:34:49', '2024-07-20 01:34:49', '無', '無', 4),
(101, '高一下', 'https://vimeo.com/662524366?share=copy', 1, '莊小寬', '01:21:12', 'photos/1 (13).png', 'photos/13.png', '高一下', '4110', '排列組合與機率', '2024-07-20 01:40:35', '2024-07-20 01:40:35', '無', '無', 10),
(102, '高一下', 'https://vimeo.com/662524366?share=copy', 1, '莊小寬', '01:21:12', 'photos/1 (13).png', 'photos/13.png', '高一下', '4110', '排列組合與機率_ 單元一：排列組合與機率思考1-4', '2024-07-20 01:42:57', '2024-07-20 01:42:57', '無', '無', 10),
(103, '高一下', 'https://vimeo.com/662529931?share=copy', 1, '莊小寬', '01:24:12', 'photos/1 (13).png', 'photos/13.png', '高一下', '4110', '排列組合與機率_ 單元一：排列組合與機率思考5-6', '2024-07-20 01:43:52', '2024-07-20 01:43:52', '無', '無', 10),
(104, '高一下', 'https://vimeo.com/662534675?share=copy', 1, '莊小寬', '01:26:51', 'photos/1 (13).png', 'photos/13.png', '高一下', '4110', '排列組合與機率_ 單元一：排列組合與機率思考7-9', '2024-07-20 01:45:27', '2024-07-20 01:45:27', '無', '無', 10),
(105, '高一下', 'https://vimeo.com/662539688?share=copy', 1, '莊小寬', '01:37:21', 'photos/1 (13).png', 'photos/13.png', '高一下', '4110', '排列組合與機率_ 單元一：排列組合與機率思考10-13', '2024-07-20 01:48:42', '2024-07-20 01:48:42', '無', '無', 10),
(106, '高一下', 'https://vimeo.com/662543178?share=copy', 1, '莊小寬', '01:25:14', 'photos/1 (13).png', 'photos/13.png', '高一下', '4110', '排列組合與機率_ 單元一：排列組合與機率思考14-16', '2024-07-20 01:49:34', '2024-07-20 01:49:34', '無', '無', 10),
(107, '高一下', 'https://vimeo.com/662546552?share=copy', 1, '莊小寬', '01:19:43', 'photos/1 (13).png', 'photos/13.png', '高一下', '4110', '排列組合與機率_ 單元一：排列組合與機率思考17-23', '2024-07-20 01:50:37', '2024-07-20 01:50:37', '無', '無', 10),
(108, '高一下', 'https://vimeo.com/662549202?share=copy', 1, '莊小寬', '01:21:48', 'photos/1 (13).png', 'photos/13.png', '高一下', '4110', '排列組合與機率_ 單元一：排列組合與機率思考24-27', '2024-07-20 01:56:24', '2024-07-20 01:56:24', '無', '無', 10),
(109, '高一下', 'https://vimeo.com/662551936?share=copy', 1, '莊小寬', '01:16:52', 'photos/1 (13).png', 'photos/13.png', '高一下', '4110', '排列組合與機率_ 單元一：排列組合與機率思考28-30', '2024-07-20 01:57:24', '2024-07-20 01:57:24', '無', '無', 10),
(110, '高一下', 'https://vimeo.com/662562532?share=copy', 1, '莊小寬', '01:34:50', 'photos/1 (13).png', 'photos/13.png', '高一下', '4110', '排列組合與機率_ 單元一：排列組合與機率思考31-36', '2024-07-20 02:18:14', '2024-07-20 02:18:14', '無', '無', 10),
(111, '高一下', 'https://vimeo.com/662573142?share=copy', 1, '莊小寬', '01:43:43', 'photos/1 (13).png', 'photos/13.png', '高一下', '4110', '排列組合與機率_ 單元一：排列組合與機率思考37-43', '2024-07-20 02:22:40', '2024-07-20 02:22:40', '無', '無', 10),
(112, '高一下', 'https://vimeo.com/823658677?share=copy', 1, '莊小寬', '01:06:06', 'photos/1 (13).png', 'photos/13.png', '高一下', '4110', '排列組合與機率_單元十一：108-2建中高一下三段', '2024-07-20 02:24:23', '2024-07-20 02:24:23', '無', '無', 10),
(113, '高一下', 'https://vimeo.com/662524215?share=copy', 1, '莊小寬', '01:46:11', 'photos/1 (14).png', 'photos/14.png', '高一下', '2466', '三角', '2024-07-20 02:27:44', '2024-07-20 02:27:44', '無', '無', 5),
(114, '高一下', 'https://vimeo.com/662524215?share=copy', 1, '莊小寬', '01:46:11', 'photos/1 (14).png', 'photos/14.png', '高一下', '2466', '三角_單元一：三角思考1-4', '2024-07-20 02:28:25', '2024-07-20 02:28:25', '無', '無', 5),
(115, '高一下', 'https://vimeo.com/662530914?share=copy', 1, '莊小寬', '01:29:50', 'photos/1 (14).png', 'photos/14.png', '高一下', '2466', '三角_單元一：三角思考5-8', '2024-07-20 02:29:26', '2024-07-20 02:29:26', '無', '無', 5),
(116, '高一下', 'https://vimeo.com/662535426?share=copy', 1, '莊小寬', '01:19:15', 'photos/1 (14).png', 'photos/14.png', '高一下', '2466', '三角_單元三：三角思考9-15', '2024-07-20 02:31:50', '2024-07-20 02:31:50', '無', '無', 5),
(117, '高一下', 'https://vimeo.com/662539815?share=copy', 1, '莊小寬', '01:46:34', 'photos/1 (14).png', 'photos/14.png', '高一下', '2466', '三角_單元三：三角思考16-20', '2024-07-20 02:32:39', '2024-07-20 02:32:39', '無', '無', 5),
(118, '高一下', 'https://vimeo.com/662544050?share=copy', 1, '莊小寬', '01:35:54', 'photos/1 (14).png', 'photos/14.png', '高一下', '2466', '三角_單元三：三角思考21-26', '2024-07-20 02:33:40', '2024-07-20 02:33:40', '無', '無', 5),
(119, '高一下', 'https://vimeo.com/810830473?share=copy', 1, '莊小寬', '01:06:55', 'photos/1 (14).png', 'photos/14.png', '高一下', '2466', '三角_單元一：108-2建中高一下第二次段考', '2024-07-20 02:34:46', '2024-07-20 02:34:46', '無', '無', 5),
(120, '高二上', 'https://vimeo.com/662900519?share=copy', 1, '莊小寬', '01:26:40', 'photos/1 (16).png', 'photos/16.png', '高二上', '3780', '三角函數', '2024-07-20 02:40:13', '2024-07-20 02:40:13', '無', '無', 3),
(121, '高二上', 'https://vimeo.com/662900519?share=copy', 1, '莊小寬', '01:26:40', 'photos/1 (16).png', 'photos/16.png', '高二上', '3780', '三角函數_單元一：三角函數思考1-7', '2024-07-20 02:41:18', '2024-07-20 02:41:18', '無', '無', 3),
(122, '高二上', 'https://vimeo.com/662902640?share=copy', 1, '莊小寬', '01:38:43', 'photos/1 (16).png', 'photos/16.png', '高二上', '3780', '三角函數_單元一：三角函數思考8-14', '2024-07-20 02:42:21', '2024-07-20 02:42:21', '無', '無', 3),
(123, '高二上', 'https://vimeo.com/662904783?share=copy', 1, '莊小寬', '01:53:32', 'photos/1 (16).png', 'photos/16.png', '高二上', '3780', '三角函數_單元一：三角函數思考15-21', '2024-07-20 02:43:31', '2024-07-20 02:43:31', '無', '無', 3),
(124, '高二上', 'https://vimeo.com/710280788?share=copy', 1, '莊小寬', '00:49:39', 'photos/1 (16).png', 'photos/16.png', '高二上', '3780', '三角函數_單元四：109北一女高二上二段', '2024-07-20 02:47:43', '2024-07-20 02:47:43', '無', '無', 3),
(125, '高二上', 'https://vimeo.com/710282847?share=copy', 1, '莊小寬', '00:59:18', 'photos/1 (16).png', 'photos/16.png', '高二上', '3780', '三角函數_單元五：109建中高二上一段', '2024-07-20 02:48:56', '2024-07-20 02:48:56', '無', '無', 3),
(126, '高二上', 'https://vimeo.com/710270745?share=copy', 1, '莊小寬', '00:29:12', 'photos/1 (16).png', 'photos/16.png', '高二上', '3780', '三角函數_單元六：109中一中高二上二段', '2024-07-20 02:49:49', '2024-07-20 02:49:49', '無', '無', 3),
(127, '高二上', 'https://vimeo.com/662897482?share=copy', 1, '莊小寬', '01:40:22', 'photos/1 (17).png', 'photos/17.png', '高二上', '2520', '指數對數函數', '2024-07-20 02:57:27', '2024-07-20 02:57:27', '無', '無', 4),
(128, '高二上', 'https://vimeo.com/662897482?share=copy', 1, '莊小寬', '01:40:22', 'photos/1 (17).png', 'photos/17.png', '高二上', '2520', '指數對數函數_單元一：指數對數函數思考1-5', '2024-07-20 02:58:17', '2024-07-20 02:58:17', '無', '無', 4),
(129, '高二上', 'https://vimeo.com/734308038?share=copy', 1, '莊小寬', '01:30:30', 'photos/1 (17).png', 'photos/17.png', '高二上', '2520', '指數對數函數_單元一：指數對數函數思考6-8', '2024-07-20 02:59:06', '2024-07-20 02:59:06', '無', '無', 4),
(130, '高二上', 'https://vimeo.com/743027300?share=copy', 1, '莊小寬', '01:23:38', 'photos/1 (17).png', 'photos/17.png', '高二上', '2520', '指數對數函數_單元一：指數對數函數思考9-13', '2024-07-20 03:00:08', '2024-07-20 03:00:08', '無', '無', 4),
(131, '高二上', 'https://vimeo.com/743120360?share=copy', 1, '莊小寬', '00:49:27', 'photos/1 (17).png', 'photos/17.png', '高二上', '2520', '指數對數函數_單元一：指數對數函數思考14-15', '2024-07-20 03:01:14', '2024-07-20 03:01:14', '無', '無', 4),
(132, '高二上', 'https://vimeo.com/770663338?share=copy', 1, '莊小寬', '00:52:28', 'photos/1 (17).png', 'photos/17.png', '高二上', '2520', '指數對數函數_單元一：109北一女高二上數A一段', '2024-07-20 03:02:26', '2024-07-20 03:02:26', '無', '無', 4);

-- --------------------------------------------------------

--
-- 資料表結構 `email_contents`
--

CREATE TABLE `email_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `email_contents`
--

INSERT INTO `email_contents` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '[value-2]', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `managerlist`
--

CREATE TABLE `managerlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `managerlist`
--

INSERT INTO `managerlist` (`id`, `name`, `account`, `password`, `created_at`, `updated_at`) VALUES
(1, '莊小寬', 'SSS', '123', '0000-00-00 00:00:00', '2024-07-24 20:49:48');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_28_093005_create_xiaokuan_database', 1),
(6, '2023_11_28_093142_create_userlist_table', 1),
(7, '2023_11_28_093201_create_stulist_table', 1),
(8, '2023_11_28_093224_create_managerlist_table', 1),
(9, '2023_11_28_093251_create_classlist_table', 1),
(10, '2024_03_15_131745_create_email_contents_table', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `stu0000001`
--

CREATE TABLE `stu0000001` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classname` varchar(255) NOT NULL,
  `classbuy` varchar(255) NOT NULL,
  `watchtime` time NOT NULL,
  `videotime` time NOT NULL,
  `classend` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `stu0000001`
--

INSERT INTO `stu0000001` (`id`, `classname`, `classbuy`, `watchtime`, `videotime`, `classend`, `created_at`, `updated_at`) VALUES
(83, '新課綱 高一上直線與圓', 'BUY', '00:00:00', '02:00:00', '2024-05-05', NULL, NULL),
(84, '新課綱 高一上多項式', 'BUY', '00:00:00', '02:00:00', '2024-05-05', NULL, NULL),
(85, '大一微積分_第一段', 'BUY', '00:01:34', '02:00:00', '2024-05-05', NULL, NULL),
(86, '大一微積分_第二段', 'BUY', '00:14:48', '02:00:00', '2024-05-05', NULL, NULL),
(87, '大一微積分', 'BUY', '00:00:00', '02:00:00', '2024-05-05', NULL, NULL),
(88, '大一微積分_第一段', 'BUY', '00:01:34', '02:00:00', '2024-05-05', NULL, NULL),
(89, '大一微積分_第二段', 'BUY', '00:14:48', '02:00:00', '2024-05-05', NULL, NULL),
(90, '大一微積分', 'BUY', '00:00:00', '02:00:00', '2024-05-05', NULL, NULL),
(95, '新課綱 高一上直線與圓', 'BUY', '00:00:00', '02:00:00', '2024-08-31', NULL, NULL),
(96, '新課綱 高一上多項式', 'BUY', '00:00:00', '02:00:00', '2024-08-31', NULL, NULL),
(97, '大一微積分_第一段', 'BUY', '00:01:34', '02:00:00', '2024-08-31', NULL, NULL),
(98, '大一微積分_第二段', 'BUY', '00:14:48', '02:00:00', '2024-08-31', NULL, NULL),
(99, '大一微積分', 'BUY', '00:00:00', '02:00:00', '2024-08-31', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `stu0000002`
--

CREATE TABLE `stu0000002` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classname` varchar(255) NOT NULL,
  `classbuy` varchar(255) NOT NULL,
  `watchtime` time NOT NULL,
  `videotime` time NOT NULL,
  `classend` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `stu0000003`
--

CREATE TABLE `stu0000003` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classname` varchar(255) NOT NULL,
  `classbuy` varchar(255) NOT NULL,
  `watchtime` time NOT NULL,
  `videotime` time NOT NULL,
  `classend` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `stu0000004`
--

CREATE TABLE `stu0000004` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classname` varchar(255) NOT NULL,
  `classbuy` varchar(255) NOT NULL,
  `watchtime` time NOT NULL,
  `videotime` time NOT NULL,
  `classend` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `stu0000005`
--

CREATE TABLE `stu0000005` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classname` varchar(255) NOT NULL,
  `classbuy` varchar(255) NOT NULL,
  `watchtime` time NOT NULL,
  `videotime` time NOT NULL,
  `classend` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `stulist`
--

CREATE TABLE `stulist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `stuaddress1` varchar(255) NOT NULL,
  `stuaddress2` varchar(255) DEFAULT NULL,
  `parname` varchar(255) NOT NULL,
  `parnumber` varchar(255) NOT NULL,
  `Howtoknow` varchar(255) NOT NULL,
  `password_reset_token_expiry` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `stulist`
--

INSERT INTO `stulist` (`id`, `account`, `password`, `name`, `school`, `grade`, `gmail`, `stuaddress1`, `stuaddress2`, `parname`, `parnumber`, `Howtoknow`, `password_reset_token_expiry`, `created_at`, `updated_at`) VALUES
(1, 'STU0000001', '1234', '學生A', 'A', 'A', 'anita.92926@gmail.com', 'A', 'A', 'A', 'A', 'a', '2024-07-12 15:24:24', '2024-03-14 19:41:33', '2024-07-12 07:24:24'),
(14, 'STU0000002', '123', '學生B', 'A', 'A', 'william900508@gmail.com', 'A', 'A', 'A', 'A', 'a', '2024-05-30 05:49:39', '2024-03-14 19:41:33', '2024-03-14 19:41:33'),
(15, 'STU0000003', '123', '學生外面註冊', 'A', '高一', 'A@gmail', 'A', 'A', 'A', 'A', 'A', '2024-05-30 05:49:39', '2024-05-25 20:20:35', '2024-05-25 20:20:35'),
(30, 'STU0000004', '123', '裡面註冊2', '5', '高二', 'anita.92926@gmail.com', '高雄市', '美國', '胡爸', '0987654321', '朋友推薦', '2024-07-25 02:56:44', '2024-07-24 18:56:44', '2024-07-24 18:56:44'),
(36, 'STU0000005', '123', '裡面註冊2', '5', '高二', 'anita.92926@gmail.com', '高雄市', '美國', '胡爸', '0987654321', '朋友推薦', '2024-07-25 03:14:37', '2024-07-24 19:14:37', '2024-07-24 19:14:37');

-- --------------------------------------------------------

--
-- 資料表結構 `test`
--

CREATE TABLE `test` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `test`
--

INSERT INTO `test` (`id`, `student_account`, `created_at`, `updated_at`) VALUES
(1, 'STU0000001', NULL, NULL),
(2, 'STU0000001', NULL, NULL),
(3, 'STU0000001', NULL, NULL),
(4, 'STU0000001', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `userlist`
--

CREATE TABLE `userlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `introduction` text NOT NULL,
  `background` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `entry` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `userlist`
--

INSERT INTO `userlist` (`id`, `name`, `account`, `password`, `introduction`, `background`, `photo`, `entry`, `created_at`, `updated_at`) VALUES
(1, '莊小寬', 'tea1', 'tea1', '老師', '老師', 'photos/莊小寬頭貼.jpg', NULL, '2024-03-13 04:25:51', '2024-07-23 07:33:49'),
(4, '老師33', 'tea2', 'tea', '123', '1234', 'photos/WR6WlSluphcPHk9tRmtwdwftFDHUduXFuhyh1d19.jpg', NULL, '2024-05-25 05:49:31', '2024-07-23 07:31:08'),
(5, '老師3', 'tea1', 'tea2', '123', '123', 'photos/FfXh0hsapds1pZKu7mcyEtVNiDL2M1KVobTCuCj8.jpg', '2001-02-01 16:00:00', '2024-05-25 05:53:04', '2024-05-25 05:53:04'),
(7, '陳老師', '123456', '123', '<p>111</p>', '111', 'photos/K3YIHWC5Q1ZcsYx11jWYSLOqpKCiMUzAtjDJQ3Wz.png', '2024-07-17 16:00:00', '2024-07-12 02:22:50', '2024-07-12 02:23:02'),
(8, '老師4', 'tea2', '123', '<p>aaa</p>', 'aaa', 'photos/kdDYqzw2duegzZRASXSrIYgXI4cJCKgprFLXho83.jpg', NULL, '2024-07-22 19:32:35', '2024-07-22 19:33:01'),
(9, '胡瑤瑤老師', '111', '123', '<p>79635427452</p>', '4524537853275', 'photos/6n2xYEZdtHRk6gJIKtkrOoqP709HZJcV90h2Yy7Z.png', NULL, '2024-07-25 06:49:29', '2024-07-25 06:49:47');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `xiaokuan`
--

CREATE TABLE `xiaokuan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `三角`
--

CREATE TABLE `三角` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `三角`
--

INSERT INTO `三角` (`id`, `student_account`, `created_at`, `updated_at`) VALUES
(1, 'STU0000001', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `三角_單元一：108-2建中高一下第二次段考`
--

CREATE TABLE `三角_單元一：108-2建中高一下第二次段考` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `三角_單元一：三角思考1-4`
--

CREATE TABLE `三角_單元一：三角思考1-4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `三角_單元一：三角思考5-8`
--

CREATE TABLE `三角_單元一：三角思考5-8` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `三角_單元三：三角思考9-15`
--

CREATE TABLE `三角_單元三：三角思考9-15` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `三角_單元三：三角思考16-20`
--

CREATE TABLE `三角_單元三：三角思考16-20` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `三角_單元三：三角思考21-26`
--

CREATE TABLE `三角_單元三：三角思考21-26` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `三角函數`
--

CREATE TABLE `三角函數` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `三角函數_單元一：三角函數思考1-7`
--

CREATE TABLE `三角函數_單元一：三角函數思考1-7` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `三角函數_單元一：三角函數思考8-14`
--

CREATE TABLE `三角函數_單元一：三角函數思考8-14` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `三角函數_單元一：三角函數思考15-21`
--

CREATE TABLE `三角函數_單元一：三角函數思考15-21` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `三角函數_單元五：109建中高二上一段`
--

CREATE TABLE `三角函數_單元五：109建中高二上一段` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `三角函數_單元六：109中一中高二上二段`
--

CREATE TABLE `三角函數_單元六：109中一中高二上二段` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `三角函數_單元四：109北一女高二上二段`
--

CREATE TABLE `三角函數_單元四：109北一女高二上二段` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `升高一銜接課程`
--

CREATE TABLE `升高一銜接課程` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `升高一銜接課程_ 單元一：集合與集合計數`
--

CREATE TABLE `升高一銜接課程_ 單元一：集合與集合計數` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `升高一銜接課程_ 單元三：多項式與不等式`
--

CREATE TABLE `升高一銜接課程_ 單元三：多項式與不等式` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `升高一銜接課程_單元二：三角`
--

CREATE TABLE `升高一銜接課程_單元二：三角` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `多項式`
--

CREATE TABLE `多項式` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `多項式`
--

INSERT INTO `多項式` (`id`, `student_account`, `created_at`, `updated_at`) VALUES
(1, 'STU0000001', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `多項式_ 單元一：109北一女高一上三段`
--

CREATE TABLE `多項式_ 單元一：109北一女高一上三段` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `多項式_單元一：多項式思考1-5`
--

CREATE TABLE `多項式_單元一：多項式思考1-5` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `多項式_單元二：110雄中高一上三段`
--

CREATE TABLE `多項式_單元二：110雄中高一上三段` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `多項式_單元二：多項式思考6-9`
--

CREATE TABLE `多項式_單元二：多項式思考6-9` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `多項式_單元二：多項式思考10-12`
--

CREATE TABLE `多項式_單元二：多項式思考10-12` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `多項式_單元二：多項式思考13-17`
--

CREATE TABLE `多項式_單元二：多項式思考13-17` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `多項式_單元二：多項式思考18-21`
--

CREATE TABLE `多項式_單元二：多項式思考18-21` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `多項式_單元二：多項式思考22-24`
--

CREATE TABLE `多項式_單元二：多項式思考22-24` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `大一微積分`
--

CREATE TABLE `大一微積分` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `大一微積分`
--

INSERT INTO `大一微積分` (`id`, `student_account`, `created_at`, `updated_at`) VALUES
(1, 'STU0000001', NULL, NULL),
(2, 'STU0000001', NULL, NULL),
(3, 'STU0000002', NULL, NULL),
(4, 'STU0000002', NULL, NULL),
(5, 'STU0000002', NULL, NULL),
(6, 'STU0000002', NULL, NULL),
(7, 'STU0000002', NULL, NULL),
(8, 'STU0000002', NULL, NULL),
(9, 'STU0000001', NULL, NULL),
(10, 'STU0000001', NULL, NULL),
(11, 'STU0000002', NULL, NULL),
(12, 'STU0000002', NULL, NULL),
(13, 'STU0000001', NULL, NULL),
(14, 'STU0000001', NULL, NULL),
(15, 'STU0000001', NULL, NULL),
(16, 'STU0000001', NULL, NULL),
(17, 'STU0000001', NULL, NULL),
(18, 'STU0000001', NULL, NULL),
(19, 'STU0000001', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `實數`
--

CREATE TABLE `實數` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `實數_108建中高一一段(範圍：實數與指對數)`
--

CREATE TABLE `實數_108建中高一一段(範圍：實數與指對數)` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `實數_110北一女高一一段(範圍：實數與指對數)`
--

CREATE TABLE `實數_110北一女高一一段(範圍：實數與指對數)` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `實數_單元一：實數思考1-4`
--

CREATE TABLE `實數_單元一：實數思考1-4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `實數_單元三：實數思考8-11`
--

CREATE TABLE `實數_單元三：實數思考8-11` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `實數_單元二：實數思考5-7`
--

CREATE TABLE `實數_單元二：實數思考5-7` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `實數_單元四：實數思考12-13`
--

CREATE TABLE `實數_單元四：實數思考12-13` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `指對數`
--

CREATE TABLE `指對數` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `指對數_108建中高一一段(範圍：實數與指對數)`
--

CREATE TABLE `指對數_108建中高一一段(範圍：實數與指對數)` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `指對數_110北一女高一一段(範圍：實數與指對數)`
--

CREATE TABLE `指對數_110北一女高一一段(範圍：實數與指對數)` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `指對數_單元一：指對數思考1-2`
--

CREATE TABLE `指對數_單元一：指對數思考1-2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `指對數_單元二：指對數思考3-6`
--

CREATE TABLE `指對數_單元二：指對數思考3-6` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `指對數_單元二：指對數思考7-10`
--

CREATE TABLE `指對數_單元二：指對數思考7-10` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `指對數_單元二：指對數思考11-13`
--

CREATE TABLE `指對數_單元二：指對數思考11-13` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `指數對數函數`
--

CREATE TABLE `指數對數函數` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `指數對數函數_單元一：109北一女高二上數a一段`
--

CREATE TABLE `指數對數函數_單元一：109北一女高二上數a一段` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `指數對數函數_單元一：指數對數函數思考1-5`
--

CREATE TABLE `指數對數函數_單元一：指數對數函數思考1-5` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `指數對數函數_單元一：指數對數函數思考6-8`
--

CREATE TABLE `指數對數函數_單元一：指數對數函數思考6-8` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `指數對數函數_單元一：指數對數函數思考9-13`
--

CREATE TABLE `指數對數函數_單元一：指數對數函數思考9-13` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `指數對數函數_單元一：指數對數函數思考14-15`
--

CREATE TABLE `指數對數函數_單元一：指數對數函數思考14-15` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `排列組合與機率`
--

CREATE TABLE `排列組合與機率` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `排列組合與機率_ 單元一：排列組合與機率思考1-4`
--

CREATE TABLE `排列組合與機率_ 單元一：排列組合與機率思考1-4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `排列組合與機率_ 單元一：排列組合與機率思考5-6`
--

CREATE TABLE `排列組合與機率_ 單元一：排列組合與機率思考5-6` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `排列組合與機率_ 單元一：排列組合與機率思考7-9`
--

CREATE TABLE `排列組合與機率_ 單元一：排列組合與機率思考7-9` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `排列組合與機率_ 單元一：排列組合與機率思考10-13`
--

CREATE TABLE `排列組合與機率_ 單元一：排列組合與機率思考10-13` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `排列組合與機率_ 單元一：排列組合與機率思考14-16`
--

CREATE TABLE `排列組合與機率_ 單元一：排列組合與機率思考14-16` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `排列組合與機率_ 單元一：排列組合與機率思考17-23`
--

CREATE TABLE `排列組合與機率_ 單元一：排列組合與機率思考17-23` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `排列組合與機率_ 單元一：排列組合與機率思考24-27`
--

CREATE TABLE `排列組合與機率_ 單元一：排列組合與機率思考24-27` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `排列組合與機率_ 單元一：排列組合與機率思考28-30`
--

CREATE TABLE `排列組合與機率_ 單元一：排列組合與機率思考28-30` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `排列組合與機率_ 單元一：排列組合與機率思考31-36`
--

CREATE TABLE `排列組合與機率_ 單元一：排列組合與機率思考31-36` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `排列組合與機率_ 單元一：排列組合與機率思考37-43`
--

CREATE TABLE `排列組合與機率_ 單元一：排列組合與機率思考37-43` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `排列組合與機率_單元十一：108-2建中高一下三段`
--

CREATE TABLE `排列組合與機率_單元十一：108-2建中高一下三段` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `整數`
--

CREATE TABLE `整數` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `整數_ 單元一：整數1`
--

CREATE TABLE `整數_ 單元一：整數1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `整數_ 單元一：整數2`
--

CREATE TABLE `整數_ 單元一：整數2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `整數_ 單元一：整數3`
--

CREATE TABLE `整數_ 單元一：整數3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `數列級數`
--

CREATE TABLE `數列級數` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `數列級數_108建中高一一段(數列級數+數據分析)`
--

CREATE TABLE `數列級數_108建中高一一段(數列級數+數據分析)` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `數列級數_109雄中高一二段(數列級數+直線方程式)`
--

CREATE TABLE `數列級數_109雄中高一二段(數列級數+直線方程式)` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `數列級數_110雄中高一二段(數列級數+直線方程式)`
--

CREATE TABLE `數列級數_110雄中高一二段(數列級數+直線方程式)` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `數列級數_ 單元一：數列級數思考1-3`
--

CREATE TABLE `數列級數_ 單元一：數列級數思考1-3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `數列級數_單元二：數列級數思考4-7`
--

CREATE TABLE `數列級數_單元二：數列級數思考4-7` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `數列級數_單元二：數列級數思考8-12`
--

CREATE TABLE `數列級數_單元二：數列級數思考8-12` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `數據分析`
--

CREATE TABLE `數據分析` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `數據分析_108建中高一一段(數列級數+數據分析)`
--

CREATE TABLE `數據分析_108建中高一一段(數列級數+數據分析)` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `數據分析_單元一：數據分析思考1-7`
--

CREATE TABLE `數據分析_單元一：數據分析思考1-7` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `數據分析_單元二：數據分析思考8-9`
--

CREATE TABLE `數據分析_單元二：數據分析思考8-9` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `數據分析_單元二：數據分析思考10`
--

CREATE TABLE `數據分析_單元二：數據分析思考10` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `新課綱 第一冊全`
--

CREATE TABLE `新課綱 第一冊全` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `新課綱 第一冊全`
--

INSERT INTO `新課綱 第一冊全` (`id`, `student_account`, `created_at`, `updated_at`) VALUES
(1, 'STU0000001', NULL, NULL),
(2, 'STU0000001', NULL, NULL),
(3, 'STU0000001', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `新課綱 高一上多項式`
--

CREATE TABLE `新課綱 高一上多項式` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `新課綱 高一上多項式`
--

INSERT INTO `新課綱 高一上多項式` (`id`, `student_account`, `created_at`, `updated_at`) VALUES
(1, 'STU0000001', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `新課綱 高一上實數`
--

CREATE TABLE `新課綱 高一上實數` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `新課綱 高一上實數`
--

INSERT INTO `新課綱 高一上實數` (`id`, `student_account`, `created_at`, `updated_at`) VALUES
(1, 'STU0000001', NULL, NULL),
(2, 'STU0000001', NULL, NULL),
(3, 'STU0000001', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `新課綱 高一上指對數`
--

CREATE TABLE `新課綱 高一上指對數` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `新課綱 高一上指對數`
--

INSERT INTO `新課綱 高一上指對數` (`id`, `student_account`, `created_at`, `updated_at`) VALUES
(1, 'STU0000001', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `新課綱 高一上直線與圓`
--

CREATE TABLE `新課綱 高一上直線與圓` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `新課綱 高一上直線與圓`
--

INSERT INTO `新課綱 高一上直線與圓` (`id`, `student_account`, `created_at`, `updated_at`) VALUES
(1, 'STU0000001', NULL, NULL),
(2, 'STU0000001', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `直線與圓`
--

CREATE TABLE `直線與圓` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `直線與圓_單元一：108建中高一上第二次段考`
--

CREATE TABLE `直線與圓_單元一：108建中高一上第二次段考` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `直線與圓_單元一：直線與圓思考1-3`
--

CREATE TABLE `直線與圓_單元一：直線與圓思考1-3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `直線與圓_單元一：直線與圓思考4-7`
--

CREATE TABLE `直線與圓_單元一：直線與圓思考4-7` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `直線與圓_單元一：直線與圓思考8-10`
--

CREATE TABLE `直線與圓_單元一：直線與圓思考8-10` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `直線與圓_單元一：直線與圓思考11`
--

CREATE TABLE `直線與圓_單元一：直線與圓思考11` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `直線與圓_單元一：直線與圓思考12-16`
--

CREATE TABLE `直線與圓_單元一：直線與圓思考12-16` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `直線與圓_單元一：直線與圓思考17-21`
--

CREATE TABLE `直線與圓_單元一：直線與圓思考17-21` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `直線與圓_單元二：111雄女高一上第二次段考`
--

CREATE TABLE `直線與圓_單元二：111雄女高一上第二次段考` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `科學、資優創思課程`
--

CREATE TABLE `科學、資優創思課程` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `科學、資優創思課程`
--

INSERT INTO `科學、資優創思課程` (`id`, `student_account`, `created_at`, `updated_at`) VALUES
(1, 'STU0000002', NULL, NULL),
(2, 'STU0000002', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `科學、資優創思課程_ 單元一：奇偶性分析`
--

CREATE TABLE `科學、資優創思課程_ 單元一：奇偶性分析` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `科學、資優創思課程_單元七：遞迴分析`
--

CREATE TABLE `科學、資優創思課程_單元七：遞迴分析` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `科學、資優創思課程_單元三：鴿籠原理`
--

CREATE TABLE `科學、資優創思課程_單元三：鴿籠原理` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `科學、資優創思課程_單元九：高斯分析`
--

CREATE TABLE `科學、資優創思課程_單元九：高斯分析` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `科學、資優創思課程_單元二：同餘分析`
--

CREATE TABLE `科學、資優創思課程_單元二：同餘分析` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `科學、資優創思課程_單元五：排容原理與rook多項式`
--

CREATE TABLE `科學、資優創思課程_單元五：排容原理與rook多項式` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `科學、資優創思課程_單元八：算幾不等式`
--

CREATE TABLE `科學、資優創思課程_單元八：算幾不等式` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `科學、資優創思課程_單元六：排列行列式`
--

CREATE TABLE `科學、資優創思課程_單元六：排列行列式` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `科學、資優創思課程_單元四：著色問題`
--

CREATE TABLE `科學、資優創思課程_單元四：著色問題` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `邏輯集合函數`
--

CREATE TABLE `邏輯集合函數` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `邏輯集合函數_109雄中高一上一段(範圍：邏輯集合+實數)`
--

CREATE TABLE `邏輯集合函數_109雄中高一上一段(範圍：邏輯集合+實數)` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `邏輯集合函數_110雄中高一上一段(範圍：邏輯集合+實數)`
--

CREATE TABLE `邏輯集合函數_110雄中高一上一段(範圍：邏輯集合+實數)` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `邏輯集合函數_單元一：邏輯集合函數思考1-8`
--

CREATE TABLE `邏輯集合函數_單元一：邏輯集合函數思考1-8` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `邏輯集合函數_單元三：邏輯集合函數思考13-20`
--

CREATE TABLE `邏輯集合函數_單元三：邏輯集合函數思考13-20` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `邏輯集合函數_單元二：邏輯集合函數思考9-12`
--

CREATE TABLE `邏輯集合函數_單元二：邏輯集合函數思考9-12` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `123`
--
ALTER TABLE `123`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `classlist`
--
ALTER TABLE `classlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classlist_teacherid_foreign` (`teacherid`);

--
-- 資料表索引 `email_contents`
--
ALTER TABLE `email_contents`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- 資料表索引 `managerlist`
--
ALTER TABLE `managerlist`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- 資料表索引 `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- 資料表索引 `stu0000001`
--
ALTER TABLE `stu0000001`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `stu0000002`
--
ALTER TABLE `stu0000002`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `stu0000003`
--
ALTER TABLE `stu0000003`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `stu0000004`
--
ALTER TABLE `stu0000004`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `stu0000005`
--
ALTER TABLE `stu0000005`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `stulist`
--
ALTER TABLE `stulist`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 資料表索引 `xiaokuan`
--
ALTER TABLE `xiaokuan`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角`
--
ALTER TABLE `三角`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角_單元一：108-2建中高一下第二次段考`
--
ALTER TABLE `三角_單元一：108-2建中高一下第二次段考`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角_單元一：三角思考1-4`
--
ALTER TABLE `三角_單元一：三角思考1-4`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角_單元一：三角思考5-8`
--
ALTER TABLE `三角_單元一：三角思考5-8`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角_單元三：三角思考9-15`
--
ALTER TABLE `三角_單元三：三角思考9-15`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角_單元三：三角思考16-20`
--
ALTER TABLE `三角_單元三：三角思考16-20`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角_單元三：三角思考21-26`
--
ALTER TABLE `三角_單元三：三角思考21-26`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角函數`
--
ALTER TABLE `三角函數`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角函數_單元一：三角函數思考1-7`
--
ALTER TABLE `三角函數_單元一：三角函數思考1-7`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角函數_單元一：三角函數思考8-14`
--
ALTER TABLE `三角函數_單元一：三角函數思考8-14`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角函數_單元一：三角函數思考15-21`
--
ALTER TABLE `三角函數_單元一：三角函數思考15-21`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角函數_單元五：109建中高二上一段`
--
ALTER TABLE `三角函數_單元五：109建中高二上一段`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角函數_單元六：109中一中高二上二段`
--
ALTER TABLE `三角函數_單元六：109中一中高二上二段`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `三角函數_單元四：109北一女高二上二段`
--
ALTER TABLE `三角函數_單元四：109北一女高二上二段`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `升高一銜接課程`
--
ALTER TABLE `升高一銜接課程`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `升高一銜接課程_ 單元一：集合與集合計數`
--
ALTER TABLE `升高一銜接課程_ 單元一：集合與集合計數`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `升高一銜接課程_ 單元三：多項式與不等式`
--
ALTER TABLE `升高一銜接課程_ 單元三：多項式與不等式`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `升高一銜接課程_單元二：三角`
--
ALTER TABLE `升高一銜接課程_單元二：三角`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `多項式`
--
ALTER TABLE `多項式`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `多項式_ 單元一：109北一女高一上三段`
--
ALTER TABLE `多項式_ 單元一：109北一女高一上三段`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `多項式_單元一：多項式思考1-5`
--
ALTER TABLE `多項式_單元一：多項式思考1-5`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `多項式_單元二：110雄中高一上三段`
--
ALTER TABLE `多項式_單元二：110雄中高一上三段`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `多項式_單元二：多項式思考6-9`
--
ALTER TABLE `多項式_單元二：多項式思考6-9`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `多項式_單元二：多項式思考10-12`
--
ALTER TABLE `多項式_單元二：多項式思考10-12`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `多項式_單元二：多項式思考13-17`
--
ALTER TABLE `多項式_單元二：多項式思考13-17`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `多項式_單元二：多項式思考18-21`
--
ALTER TABLE `多項式_單元二：多項式思考18-21`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `多項式_單元二：多項式思考22-24`
--
ALTER TABLE `多項式_單元二：多項式思考22-24`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `大一微積分`
--
ALTER TABLE `大一微積分`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `實數`
--
ALTER TABLE `實數`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `實數_108建中高一一段(範圍：實數與指對數)`
--
ALTER TABLE `實數_108建中高一一段(範圍：實數與指對數)`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `實數_110北一女高一一段(範圍：實數與指對數)`
--
ALTER TABLE `實數_110北一女高一一段(範圍：實數與指對數)`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `實數_單元一：實數思考1-4`
--
ALTER TABLE `實數_單元一：實數思考1-4`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `實數_單元三：實數思考8-11`
--
ALTER TABLE `實數_單元三：實數思考8-11`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `實數_單元二：實數思考5-7`
--
ALTER TABLE `實數_單元二：實數思考5-7`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `實數_單元四：實數思考12-13`
--
ALTER TABLE `實數_單元四：實數思考12-13`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `指對數`
--
ALTER TABLE `指對數`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `指對數_108建中高一一段(範圍：實數與指對數)`
--
ALTER TABLE `指對數_108建中高一一段(範圍：實數與指對數)`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `指對數_110北一女高一一段(範圍：實數與指對數)`
--
ALTER TABLE `指對數_110北一女高一一段(範圍：實數與指對數)`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `指對數_單元一：指對數思考1-2`
--
ALTER TABLE `指對數_單元一：指對數思考1-2`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `指對數_單元二：指對數思考3-6`
--
ALTER TABLE `指對數_單元二：指對數思考3-6`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `指對數_單元二：指對數思考7-10`
--
ALTER TABLE `指對數_單元二：指對數思考7-10`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `指對數_單元二：指對數思考11-13`
--
ALTER TABLE `指對數_單元二：指對數思考11-13`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `指數對數函數`
--
ALTER TABLE `指數對數函數`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `指數對數函數_單元一：109北一女高二上數a一段`
--
ALTER TABLE `指數對數函數_單元一：109北一女高二上數a一段`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `指數對數函數_單元一：指數對數函數思考1-5`
--
ALTER TABLE `指數對數函數_單元一：指數對數函數思考1-5`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `指數對數函數_單元一：指數對數函數思考6-8`
--
ALTER TABLE `指數對數函數_單元一：指數對數函數思考6-8`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `指數對數函數_單元一：指數對數函數思考9-13`
--
ALTER TABLE `指數對數函數_單元一：指數對數函數思考9-13`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `指數對數函數_單元一：指數對數函數思考14-15`
--
ALTER TABLE `指數對數函數_單元一：指數對數函數思考14-15`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `排列組合與機率`
--
ALTER TABLE `排列組合與機率`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `排列組合與機率_ 單元一：排列組合與機率思考1-4`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考1-4`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `排列組合與機率_ 單元一：排列組合與機率思考5-6`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考5-6`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `排列組合與機率_ 單元一：排列組合與機率思考7-9`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考7-9`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `排列組合與機率_ 單元一：排列組合與機率思考10-13`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考10-13`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `排列組合與機率_ 單元一：排列組合與機率思考14-16`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考14-16`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `排列組合與機率_ 單元一：排列組合與機率思考17-23`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考17-23`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `排列組合與機率_ 單元一：排列組合與機率思考24-27`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考24-27`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `排列組合與機率_ 單元一：排列組合與機率思考28-30`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考28-30`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `排列組合與機率_ 單元一：排列組合與機率思考31-36`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考31-36`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `排列組合與機率_ 單元一：排列組合與機率思考37-43`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考37-43`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `排列組合與機率_單元十一：108-2建中高一下三段`
--
ALTER TABLE `排列組合與機率_單元十一：108-2建中高一下三段`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `整數`
--
ALTER TABLE `整數`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `整數_ 單元一：整數1`
--
ALTER TABLE `整數_ 單元一：整數1`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `整數_ 單元一：整數2`
--
ALTER TABLE `整數_ 單元一：整數2`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `整數_ 單元一：整數3`
--
ALTER TABLE `整數_ 單元一：整數3`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `數列級數`
--
ALTER TABLE `數列級數`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `數列級數_108建中高一一段(數列級數+數據分析)`
--
ALTER TABLE `數列級數_108建中高一一段(數列級數+數據分析)`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `數列級數_109雄中高一二段(數列級數+直線方程式)`
--
ALTER TABLE `數列級數_109雄中高一二段(數列級數+直線方程式)`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `數列級數_110雄中高一二段(數列級數+直線方程式)`
--
ALTER TABLE `數列級數_110雄中高一二段(數列級數+直線方程式)`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `數列級數_ 單元一：數列級數思考1-3`
--
ALTER TABLE `數列級數_ 單元一：數列級數思考1-3`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `數列級數_單元二：數列級數思考4-7`
--
ALTER TABLE `數列級數_單元二：數列級數思考4-7`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `數列級數_單元二：數列級數思考8-12`
--
ALTER TABLE `數列級數_單元二：數列級數思考8-12`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `數據分析`
--
ALTER TABLE `數據分析`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `數據分析_108建中高一一段(數列級數+數據分析)`
--
ALTER TABLE `數據分析_108建中高一一段(數列級數+數據分析)`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `數據分析_單元一：數據分析思考1-7`
--
ALTER TABLE `數據分析_單元一：數據分析思考1-7`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `數據分析_單元二：數據分析思考8-9`
--
ALTER TABLE `數據分析_單元二：數據分析思考8-9`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `數據分析_單元二：數據分析思考10`
--
ALTER TABLE `數據分析_單元二：數據分析思考10`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `新課綱 第一冊全`
--
ALTER TABLE `新課綱 第一冊全`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `新課綱 高一上多項式`
--
ALTER TABLE `新課綱 高一上多項式`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `新課綱 高一上實數`
--
ALTER TABLE `新課綱 高一上實數`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `新課綱 高一上指對數`
--
ALTER TABLE `新課綱 高一上指對數`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `新課綱 高一上直線與圓`
--
ALTER TABLE `新課綱 高一上直線與圓`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `直線與圓`
--
ALTER TABLE `直線與圓`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `直線與圓_單元一：108建中高一上第二次段考`
--
ALTER TABLE `直線與圓_單元一：108建中高一上第二次段考`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `直線與圓_單元一：直線與圓思考1-3`
--
ALTER TABLE `直線與圓_單元一：直線與圓思考1-3`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `直線與圓_單元一：直線與圓思考4-7`
--
ALTER TABLE `直線與圓_單元一：直線與圓思考4-7`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `直線與圓_單元一：直線與圓思考8-10`
--
ALTER TABLE `直線與圓_單元一：直線與圓思考8-10`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `直線與圓_單元一：直線與圓思考11`
--
ALTER TABLE `直線與圓_單元一：直線與圓思考11`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `直線與圓_單元一：直線與圓思考12-16`
--
ALTER TABLE `直線與圓_單元一：直線與圓思考12-16`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `直線與圓_單元一：直線與圓思考17-21`
--
ALTER TABLE `直線與圓_單元一：直線與圓思考17-21`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `直線與圓_單元二：111雄女高一上第二次段考`
--
ALTER TABLE `直線與圓_單元二：111雄女高一上第二次段考`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `科學、資優創思課程`
--
ALTER TABLE `科學、資優創思課程`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `科學、資優創思課程_ 單元一：奇偶性分析`
--
ALTER TABLE `科學、資優創思課程_ 單元一：奇偶性分析`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `科學、資優創思課程_單元七：遞迴分析`
--
ALTER TABLE `科學、資優創思課程_單元七：遞迴分析`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `科學、資優創思課程_單元三：鴿籠原理`
--
ALTER TABLE `科學、資優創思課程_單元三：鴿籠原理`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `科學、資優創思課程_單元九：高斯分析`
--
ALTER TABLE `科學、資優創思課程_單元九：高斯分析`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `科學、資優創思課程_單元二：同餘分析`
--
ALTER TABLE `科學、資優創思課程_單元二：同餘分析`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `科學、資優創思課程_單元五：排容原理與rook多項式`
--
ALTER TABLE `科學、資優創思課程_單元五：排容原理與rook多項式`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `科學、資優創思課程_單元八：算幾不等式`
--
ALTER TABLE `科學、資優創思課程_單元八：算幾不等式`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `科學、資優創思課程_單元六：排列行列式`
--
ALTER TABLE `科學、資優創思課程_單元六：排列行列式`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `科學、資優創思課程_單元四：著色問題`
--
ALTER TABLE `科學、資優創思課程_單元四：著色問題`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `邏輯集合函數`
--
ALTER TABLE `邏輯集合函數`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `邏輯集合函數_109雄中高一上一段(範圍：邏輯集合+實數)`
--
ALTER TABLE `邏輯集合函數_109雄中高一上一段(範圍：邏輯集合+實數)`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `邏輯集合函數_110雄中高一上一段(範圍：邏輯集合+實數)`
--
ALTER TABLE `邏輯集合函數_110雄中高一上一段(範圍：邏輯集合+實數)`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `邏輯集合函數_單元一：邏輯集合函數思考1-8`
--
ALTER TABLE `邏輯集合函數_單元一：邏輯集合函數思考1-8`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `邏輯集合函數_單元三：邏輯集合函數思考13-20`
--
ALTER TABLE `邏輯集合函數_單元三：邏輯集合函數思考13-20`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `邏輯集合函數_單元二：邏輯集合函數思考9-12`
--
ALTER TABLE `邏輯集合函數_單元二：邏輯集合函數思考9-12`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `123`
--
ALTER TABLE `123`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `classlist`
--
ALTER TABLE `classlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `email_contents`
--
ALTER TABLE `email_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `managerlist`
--
ALTER TABLE `managerlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stu0000001`
--
ALTER TABLE `stu0000001`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stu0000002`
--
ALTER TABLE `stu0000002`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stu0000003`
--
ALTER TABLE `stu0000003`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stu0000004`
--
ALTER TABLE `stu0000004`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stu0000005`
--
ALTER TABLE `stu0000005`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stulist`
--
ALTER TABLE `stulist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `xiaokuan`
--
ALTER TABLE `xiaokuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角`
--
ALTER TABLE `三角`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角_單元一：108-2建中高一下第二次段考`
--
ALTER TABLE `三角_單元一：108-2建中高一下第二次段考`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角_單元一：三角思考1-4`
--
ALTER TABLE `三角_單元一：三角思考1-4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角_單元一：三角思考5-8`
--
ALTER TABLE `三角_單元一：三角思考5-8`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角_單元三：三角思考9-15`
--
ALTER TABLE `三角_單元三：三角思考9-15`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角_單元三：三角思考16-20`
--
ALTER TABLE `三角_單元三：三角思考16-20`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角_單元三：三角思考21-26`
--
ALTER TABLE `三角_單元三：三角思考21-26`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角函數`
--
ALTER TABLE `三角函數`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角函數_單元一：三角函數思考1-7`
--
ALTER TABLE `三角函數_單元一：三角函數思考1-7`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角函數_單元一：三角函數思考8-14`
--
ALTER TABLE `三角函數_單元一：三角函數思考8-14`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角函數_單元一：三角函數思考15-21`
--
ALTER TABLE `三角函數_單元一：三角函數思考15-21`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角函數_單元五：109建中高二上一段`
--
ALTER TABLE `三角函數_單元五：109建中高二上一段`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角函數_單元六：109中一中高二上二段`
--
ALTER TABLE `三角函數_單元六：109中一中高二上二段`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `三角函數_單元四：109北一女高二上二段`
--
ALTER TABLE `三角函數_單元四：109北一女高二上二段`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `升高一銜接課程`
--
ALTER TABLE `升高一銜接課程`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `升高一銜接課程_ 單元一：集合與集合計數`
--
ALTER TABLE `升高一銜接課程_ 單元一：集合與集合計數`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `升高一銜接課程_ 單元三：多項式與不等式`
--
ALTER TABLE `升高一銜接課程_ 單元三：多項式與不等式`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `升高一銜接課程_單元二：三角`
--
ALTER TABLE `升高一銜接課程_單元二：三角`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `多項式`
--
ALTER TABLE `多項式`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `多項式_ 單元一：109北一女高一上三段`
--
ALTER TABLE `多項式_ 單元一：109北一女高一上三段`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `多項式_單元一：多項式思考1-5`
--
ALTER TABLE `多項式_單元一：多項式思考1-5`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `多項式_單元二：110雄中高一上三段`
--
ALTER TABLE `多項式_單元二：110雄中高一上三段`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `多項式_單元二：多項式思考6-9`
--
ALTER TABLE `多項式_單元二：多項式思考6-9`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `多項式_單元二：多項式思考10-12`
--
ALTER TABLE `多項式_單元二：多項式思考10-12`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `多項式_單元二：多項式思考13-17`
--
ALTER TABLE `多項式_單元二：多項式思考13-17`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `多項式_單元二：多項式思考18-21`
--
ALTER TABLE `多項式_單元二：多項式思考18-21`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `多項式_單元二：多項式思考22-24`
--
ALTER TABLE `多項式_單元二：多項式思考22-24`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `大一微積分`
--
ALTER TABLE `大一微積分`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `實數`
--
ALTER TABLE `實數`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `實數_108建中高一一段(範圍：實數與指對數)`
--
ALTER TABLE `實數_108建中高一一段(範圍：實數與指對數)`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `實數_110北一女高一一段(範圍：實數與指對數)`
--
ALTER TABLE `實數_110北一女高一一段(範圍：實數與指對數)`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `實數_單元一：實數思考1-4`
--
ALTER TABLE `實數_單元一：實數思考1-4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `實數_單元三：實數思考8-11`
--
ALTER TABLE `實數_單元三：實數思考8-11`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `實數_單元二：實數思考5-7`
--
ALTER TABLE `實數_單元二：實數思考5-7`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `實數_單元四：實數思考12-13`
--
ALTER TABLE `實數_單元四：實數思考12-13`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `指對數`
--
ALTER TABLE `指對數`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `指對數_108建中高一一段(範圍：實數與指對數)`
--
ALTER TABLE `指對數_108建中高一一段(範圍：實數與指對數)`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `指對數_110北一女高一一段(範圍：實數與指對數)`
--
ALTER TABLE `指對數_110北一女高一一段(範圍：實數與指對數)`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `指對數_單元一：指對數思考1-2`
--
ALTER TABLE `指對數_單元一：指對數思考1-2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `指對數_單元二：指對數思考3-6`
--
ALTER TABLE `指對數_單元二：指對數思考3-6`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `指對數_單元二：指對數思考7-10`
--
ALTER TABLE `指對數_單元二：指對數思考7-10`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `指對數_單元二：指對數思考11-13`
--
ALTER TABLE `指對數_單元二：指對數思考11-13`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `指數對數函數`
--
ALTER TABLE `指數對數函數`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `指數對數函數_單元一：109北一女高二上數a一段`
--
ALTER TABLE `指數對數函數_單元一：109北一女高二上數a一段`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `指數對數函數_單元一：指數對數函數思考1-5`
--
ALTER TABLE `指數對數函數_單元一：指數對數函數思考1-5`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `指數對數函數_單元一：指數對數函數思考6-8`
--
ALTER TABLE `指數對數函數_單元一：指數對數函數思考6-8`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `指數對數函數_單元一：指數對數函數思考9-13`
--
ALTER TABLE `指數對數函數_單元一：指數對數函數思考9-13`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `指數對數函數_單元一：指數對數函數思考14-15`
--
ALTER TABLE `指數對數函數_單元一：指數對數函數思考14-15`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `排列組合與機率`
--
ALTER TABLE `排列組合與機率`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `排列組合與機率_ 單元一：排列組合與機率思考1-4`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考1-4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `排列組合與機率_ 單元一：排列組合與機率思考5-6`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考5-6`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `排列組合與機率_ 單元一：排列組合與機率思考7-9`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考7-9`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `排列組合與機率_ 單元一：排列組合與機率思考10-13`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考10-13`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `排列組合與機率_ 單元一：排列組合與機率思考14-16`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考14-16`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `排列組合與機率_ 單元一：排列組合與機率思考17-23`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考17-23`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `排列組合與機率_ 單元一：排列組合與機率思考24-27`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考24-27`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `排列組合與機率_ 單元一：排列組合與機率思考28-30`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考28-30`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `排列組合與機率_ 單元一：排列組合與機率思考31-36`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考31-36`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `排列組合與機率_ 單元一：排列組合與機率思考37-43`
--
ALTER TABLE `排列組合與機率_ 單元一：排列組合與機率思考37-43`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `排列組合與機率_單元十一：108-2建中高一下三段`
--
ALTER TABLE `排列組合與機率_單元十一：108-2建中高一下三段`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `整數`
--
ALTER TABLE `整數`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `整數_ 單元一：整數1`
--
ALTER TABLE `整數_ 單元一：整數1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `整數_ 單元一：整數2`
--
ALTER TABLE `整數_ 單元一：整數2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `整數_ 單元一：整數3`
--
ALTER TABLE `整數_ 單元一：整數3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `數列級數`
--
ALTER TABLE `數列級數`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `數列級數_108建中高一一段(數列級數+數據分析)`
--
ALTER TABLE `數列級數_108建中高一一段(數列級數+數據分析)`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `數列級數_109雄中高一二段(數列級數+直線方程式)`
--
ALTER TABLE `數列級數_109雄中高一二段(數列級數+直線方程式)`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `數列級數_110雄中高一二段(數列級數+直線方程式)`
--
ALTER TABLE `數列級數_110雄中高一二段(數列級數+直線方程式)`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `數列級數_ 單元一：數列級數思考1-3`
--
ALTER TABLE `數列級數_ 單元一：數列級數思考1-3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `數列級數_單元二：數列級數思考4-7`
--
ALTER TABLE `數列級數_單元二：數列級數思考4-7`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `數列級數_單元二：數列級數思考8-12`
--
ALTER TABLE `數列級數_單元二：數列級數思考8-12`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `數據分析`
--
ALTER TABLE `數據分析`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `數據分析_108建中高一一段(數列級數+數據分析)`
--
ALTER TABLE `數據分析_108建中高一一段(數列級數+數據分析)`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `數據分析_單元一：數據分析思考1-7`
--
ALTER TABLE `數據分析_單元一：數據分析思考1-7`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `數據分析_單元二：數據分析思考8-9`
--
ALTER TABLE `數據分析_單元二：數據分析思考8-9`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `數據分析_單元二：數據分析思考10`
--
ALTER TABLE `數據分析_單元二：數據分析思考10`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `新課綱 第一冊全`
--
ALTER TABLE `新課綱 第一冊全`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `新課綱 高一上多項式`
--
ALTER TABLE `新課綱 高一上多項式`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `新課綱 高一上實數`
--
ALTER TABLE `新課綱 高一上實數`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `新課綱 高一上指對數`
--
ALTER TABLE `新課綱 高一上指對數`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `新課綱 高一上直線與圓`
--
ALTER TABLE `新課綱 高一上直線與圓`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `直線與圓`
--
ALTER TABLE `直線與圓`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `直線與圓_單元一：108建中高一上第二次段考`
--
ALTER TABLE `直線與圓_單元一：108建中高一上第二次段考`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `直線與圓_單元一：直線與圓思考1-3`
--
ALTER TABLE `直線與圓_單元一：直線與圓思考1-3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `直線與圓_單元一：直線與圓思考4-7`
--
ALTER TABLE `直線與圓_單元一：直線與圓思考4-7`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `直線與圓_單元一：直線與圓思考8-10`
--
ALTER TABLE `直線與圓_單元一：直線與圓思考8-10`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `直線與圓_單元一：直線與圓思考11`
--
ALTER TABLE `直線與圓_單元一：直線與圓思考11`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `直線與圓_單元一：直線與圓思考12-16`
--
ALTER TABLE `直線與圓_單元一：直線與圓思考12-16`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `直線與圓_單元一：直線與圓思考17-21`
--
ALTER TABLE `直線與圓_單元一：直線與圓思考17-21`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `直線與圓_單元二：111雄女高一上第二次段考`
--
ALTER TABLE `直線與圓_單元二：111雄女高一上第二次段考`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `科學、資優創思課程`
--
ALTER TABLE `科學、資優創思課程`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `科學、資優創思課程_ 單元一：奇偶性分析`
--
ALTER TABLE `科學、資優創思課程_ 單元一：奇偶性分析`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `科學、資優創思課程_單元七：遞迴分析`
--
ALTER TABLE `科學、資優創思課程_單元七：遞迴分析`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `科學、資優創思課程_單元三：鴿籠原理`
--
ALTER TABLE `科學、資優創思課程_單元三：鴿籠原理`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `科學、資優創思課程_單元九：高斯分析`
--
ALTER TABLE `科學、資優創思課程_單元九：高斯分析`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `科學、資優創思課程_單元二：同餘分析`
--
ALTER TABLE `科學、資優創思課程_單元二：同餘分析`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `科學、資優創思課程_單元五：排容原理與rook多項式`
--
ALTER TABLE `科學、資優創思課程_單元五：排容原理與rook多項式`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `科學、資優創思課程_單元八：算幾不等式`
--
ALTER TABLE `科學、資優創思課程_單元八：算幾不等式`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `科學、資優創思課程_單元六：排列行列式`
--
ALTER TABLE `科學、資優創思課程_單元六：排列行列式`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `科學、資優創思課程_單元四：著色問題`
--
ALTER TABLE `科學、資優創思課程_單元四：著色問題`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `邏輯集合函數`
--
ALTER TABLE `邏輯集合函數`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `邏輯集合函數_109雄中高一上一段(範圍：邏輯集合+實數)`
--
ALTER TABLE `邏輯集合函數_109雄中高一上一段(範圍：邏輯集合+實數)`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `邏輯集合函數_110雄中高一上一段(範圍：邏輯集合+實數)`
--
ALTER TABLE `邏輯集合函數_110雄中高一上一段(範圍：邏輯集合+實數)`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `邏輯集合函數_單元一：邏輯集合函數思考1-8`
--
ALTER TABLE `邏輯集合函數_單元一：邏輯集合函數思考1-8`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `邏輯集合函數_單元三：邏輯集合函數思考13-20`
--
ALTER TABLE `邏輯集合函數_單元三：邏輯集合函數思考13-20`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `邏輯集合函數_單元二：邏輯集合函數思考9-12`
--
ALTER TABLE `邏輯集合函數_單元二：邏輯集合函數思考9-12`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `classlist`
--
ALTER TABLE `classlist`
  ADD CONSTRAINT `classlist_teacherid_foreign` FOREIGN KEY (`teacherid`) REFERENCES `userlist` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
