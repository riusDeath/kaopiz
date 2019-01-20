-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 20, 2019 lúc 03:06 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `toeic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(20) UNSIGNED NOT NULL,
  `post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `author` int(11) NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_parent` int(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `grammar_guides`
--

CREATE TABLE `grammar_guides` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `level` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `levels`
--

INSERT INTO `levels` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, '250-350', '2019-01-11 23:22:08', '2019-01-11 23:22:08'),
(2, '350-500', '2019-01-11 23:22:08', '2019-01-11 23:22:08'),
(3, '500-700', '2019-01-11 23:22:08', '2019-01-11 23:22:08'),
(4, '700-800', '2019-01-11 23:22:08', '2019-01-11 23:22:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `mediaFile` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `script_answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `media`
--

INSERT INTO `media` (`id`, `mediaFile`, `created_at`, `script_answer`, `updated_at`) VALUES
(1, 'TEST01.mp3', '2018-12-24 04:34:48', '', '2019-01-11 23:58:34'),
(2, 'TEST02.mp3', '2018-12-24 04:34:48', '', '2019-01-11 23:58:34'),
(11, '090226_13012012_740393.mp3', '2018-12-24 12:42:43', 'A. They’re parking the car \r\nB. They’re paying their taxes \r\nC. They’re changing a tire \r\nD. They’re getting into car', '2019-01-11 23:58:34'),
(12, '090253_13012012_295721.mp3', '2018-12-24 12:45:13', 'A.The stadium is closed for repairs \r\nB.The stadium is full of fans \r\nC.The fans are lined up outside the stadium\r\nD.The people are leaving the stadium', '2019-01-11 23:58:34'),
(13, '090312_13012012_913153.mp3', '2018-12-24 12:47:21', 'A.There are two dishes in the sink \r\nB.There is fork on the plate \r\nC.There are menus on the table \r\nD.There is food on the plates', '2019-01-11 23:58:34'),
(14, '090358_13012012_967398.mp3', '2018-12-24 12:49:06', 'A.People are walking down the steps \r\nB.People are working downtown \r\nC.People are sitting on the stairs \r\nD.People are going down the escalator', '2019-01-11 23:58:34'),
(15, '090411_13012012_235873.mp3', '2018-12-24 12:51:06', 'A.He’s climbing a tree \r\nB.He’s wearing short pants \r\nC.He’s painting a picture \r\nD He’s brushing his hair', '2019-01-11 23:58:34'),
(16, '090440_13012012_320660.mp3', '2018-12-24 12:53:40', 'A.The men are fishing \r\nB.The man is rowing the boat \r\nC.The water is very calm \r\nD.The people are in the sailboat', '2019-01-11 23:58:34'),
(17, '090452_13012012_749978.mp3', '2018-12-24 12:55:17', 'A.She’s reading a book on the bench \r\nB.She’s reaching for a book \r\nC.She’s looking for a seat \r\nD.She’s drinking from a cup', '2019-01-11 23:58:34'),
(18, '090504_13012012_653189.mp3', '2018-12-24 12:56:54', 'A.People are going into an amusement park B.People are working on the building \r\nC.People are riding a roller coaster D.People are roller skating', '2019-01-11 23:58:34'),
(19, '090517_13012012_788650.mp3', '2018-12-24 12:59:00', 'A.They are brushing their teeth \r\nB.The man is shaving \r\nC.They are washing their hands \r\nD.The man is adjusting his tie', '2019-01-11 23:58:34'),
(20, '110205_10012012_493447.mp3', '2018-12-24 13:01:22', 'When did the director arrive?\r\nA.Since this morning \r\nB. At the airport \r\nC.Late last night', '2019-01-11 23:58:34'),
(21, '110304_10012012_819577.mp3', '2018-12-24 13:03:10', 'Do you know whose keys these are?\r\nA, I left them on your desk \r\nB, I think they’re Mr. Kim’s \r\nC, They’re the keys to the closet door', '2019-01-11 23:58:34'),
(22, '110355_10012012_859951.mp3', '2018-12-24 13:04:37', 'Where did you put the packages for Ms. Sato?\r\nA. Ms. Sato is over there \r\nB. They’re on her desk \r\nC. She packed her bags', '2019-01-11 23:58:34'),
(23, '110456_10012012_674447.mp3', '2018-12-24 13:06:11', 'Are you almost ready for the meeting?\r\nA. I met him at the reception last night \r\nB. No, it’s in the big conference room\r\nC.Yes, I just have to finish typing these notes', '2019-01-11 23:58:34'),
(24, '111742_10012012_896096.mp3', '2018-12-24 13:07:48', ' How often do you have to turn in financial reports?\r\nA. Mrs. Gomez is our financial manager \r\nB. Once every month \r\nC. He’s a very good reporter', '2019-01-11 23:58:34'),
(25, '111841_10012012_307366.mp3', '2018-12-24 13:23:59', 'How long does the bus ride take?\r\nA. It’s only about fifteen minutes \r\nB. It’s not a very big bus \r\nC. It’s a very pleasant ride', '2019-01-11 23:58:34'),
(26, '111933_10012012_907989.mp3', '2018-12-24 13:26:10', 'Where would you like to eat dinner?\r\nA. As soon as I finish typing this document\r\nB. We could try that restaurant across the street \r\nC.Yes, I would like that very much', '2019-01-11 23:58:34'),
(27, '112036_10012012_541348.mp3', '2018-12-24 13:27:54', ' Were you able to book a hotel for next week?\r\nA. I’ve already read that book \r\nB. Yes, I got a room at a nice place downtown \r\nC. No, I didn’t', '2019-01-11 23:58:34'),
(28, '112124_10012012_262487.mp3', '2018-12-24 13:29:41', 'How can I make an appointment with Ms. Lee?\r\nA. She’s very happy about her new position \r\nB. You won’t be disappointed \r\nC. You should speak with her assistant', '2019-01-11 23:58:34'),
(29, '112222_10012012_545193.mp3', '2018-12-24 13:31:42', 'How long do you plan to stay in Tokyo?\r\nA. Only about three or four days \r\nB. I haven’t been there in a long time \r\nC. At one of the downtown hotels', '2019-01-11 23:58:34'),
(30, '112315_10012012_613143.mp3', '2018-12-24 13:33:43', ' Would you like to go to a movie with us after work?\r\nA. Yes, we took a long walk \r\nB. Yes, that’s a great idea \r\nC. Yes, I worked all afternoon', '2019-01-11 23:58:34'),
(31, '112414_10012012_389187.mp3', '2018-12-24 13:35:21', 'Did you notice whether Ms. Kovacs was at the reception?\r\nA. Yes, I took thorough notes \r\nB. Yes, she was there \r\nC. Yes, she received it', '2019-01-11 23:58:34'),
(32, '144023_10012012_152981.mp3', '2018-12-24 13:36:46', 'M: Julie, would you please push back my 1:00 appointment this afternoon? I have an emergency meeting with the president.\r\n\r\nW: Of course, Mr. Laurie. When would you like to reschedule?\r\n\r\nM: Well, the president informed me that some clients will be arriving at 2, so let’s say 4 o’clock. I should be back in my office by then.\r\n\r\nW: Great, I’ll see if he can be here at 4.', '2019-01-11 23:58:34'),
(33, '144346_10012012_849542.mp3', '2018-12-24 13:56:15', 'M: Good afternoon Telus Mobility. What can I do for you?\r\n\r\nW: Hello. I was wondering if you can help me with my cell phone bill. I haven’t used my cell phone any more than usual , however the total this month seems to be much more than in the past.\r\n\r\nM: It could be that the monthly service charge has increased, but let me look over your invoice. What’s your telephone number?\r\n\r\nW: It’s 555-9328. My last name is Hawk.', '2019-01-11 23:58:34'),
(34, '144702_10012012_505065.mp3', '2018-12-24 14:00:54', 'W: Kevin, when is everyone meeting to commemorate Jim’s retirement?\r\n\r\nM: The invitation said 7 o’clock. Do you know where the banquet hall is?\r\n\r\nW: Yes, it’s in the Westbotten Harborfront Hotel, next to the supermarket. But I need t stopby the bakery first, so I probably won’t arrive until 7.30.\r\n\r\nM: OK, I see, but don’t be too late because I will be waiting for you.', '2019-01-11 23:58:34'),
(35, '162919_10012012_987640.mp3', '2018-12-24 14:07:22', 'Hello, this is Katie Burke calling from Cogeco Internet Services Mr. Clifford, the reason I’m calling is we haven’t received your payment for the installation of the modem and cable. We need your payment in order to activate your service. Please contact us at 1-800-222-4503, between 8 a.m. and 6 p.m., Monday through Saturday. Thank you. We look forward to hearing from you at your earliest convenience.', '2019-01-11 23:58:34'),
(36, '163229_10012012_654040.mp3', '2018-12-24 14:12:39', 'I am pleased announce the grand opening of Atlas Steels Corporation here in Hamilton. As directed operations, I can only try to express how proud I am. We will open the plant doors in early July and will look at hiring an additional 100 staff members, and then closer to the end of the year we will most likely bring on another 75 people. We’ve expanded quite a bit since our first production facility in Milton, to our present day plants in Portland, Rochester, St. Louis, and now here in Hamilton. We are looking forward to joining the community.', '2019-01-11 23:58:34'),
(37, '163536_10012012_716690.mp3', '2018-12-24 14:18:28', 'Hello. My name is Claudia and I am happy to be your host and guide this afternoon. It’s currently 12:30 and we will begin our tour of the facilities at 1:00. But before we get started, I do have a few announcements to make. Unfortunately, we do not allow any visitors to photograph the equipment or video the baking process. The first part of the tour will finish at 2 p. m. However, you will have a couple of unguided hours to visit our labs and tasting rooms before you leave the premises. Feel free to ask any questions that you may have at anytime throughout the tour. I do hope that you enjoy your visit. ', '2019-01-11 23:58:34'),
(39, '170446_04022012_822927.mp3', '2018-12-30 21:29:03', 'Would you like to reserve the larger hall for the event?\r\nA.Yes, Iâ??ve already completed it \r\nB.Itâ??s bigger than the others \r\nC.Yes, that would be fine', '2019-01-11 23:58:34'),
(40, '170531_04022012_616687.mp3', '2018-12-30 21:32:51', 'Who is going to attend the Mr. McKenzieâ??s retirement party?\r\nA.He has not arrived yet \r\nB. Letâ??s go right now \r\nC.Everyone except Jill', '2019-01-11 23:58:34'),
(41, '175208_01032012_411709.mp3', '2018-12-30 21:54:20', 'W: Did you remember to pick up the medicine at the pharmacy while you were at the mall?\r\n\r\nM: I did, but wouldnâ??t believe how long the line was. I stood there waiting nearly half an hour. I should have just gone to the supermarket across the road from here. They carry most of the over-the-counter drugs.\r\n\r\nW: True, but theyâ??re closed today. Did you forget that they donâ??t open on Tuesday?\r\n\r\nM: Ah, thatâ??s right. Well, I guess the wait was worth it then. I could have ended up going back to the mall again.', '2019-01-11 23:58:34'),
(42, '170446_04022012_822927.mp3', '2019-01-01 16:30:24', 'sdfdfsdfds', '2019-01-11 23:58:34'),
(44, '123856_08082012_527845.mp3', '2019-01-02 10:00:22', 'W1: Hey, Kate. I was thinking that June Smith, the companyâ??s strategic advisor, would be able to assist us with the negotiations of the new proposal.\r\n\r\nW2: That sounds great, Wanda. Unfortunately sheâ??s away on maternity for the rest of the year\r\n\r\nW1: Thatâ??s too bad. She really is an expert in this field\r\n\r\nW2: We could look at asking her replacement, Jordan. I hear heâ??s quite bright as well', '2019-01-11 23:58:34'),
(45, '132933_20022012_107360.mp3', '2019-01-02 10:09:06', 'A.They’re waiting for their bags \r\nB.They’re about to board the plane C.They’re relaxing in a waiting area D.They’re sitting in a conference hall', '2019-01-11 23:58:34'),
(46, '170446_04022012_822927.mp3', '2019-01-02 10:13:07', 'Would you like to reserve the larger hall for the event?\r\nA.Yes, I’ve already completed it \r\nB.It’s bigger than the others \r\nC.Yes, that would be fine', '2019-01-11 23:58:34'),
(47, '170531_04022012_616687.mp3', '2019-01-02 10:15:19', 'Who is going to attend the Mr. McKenzie’s retirement party?\r\nA. He has not arrived yet \r\nB. Let’s go right now \r\nC. Everyone except Jill', '2019-01-11 23:58:34'),
(48, '151725_07032012_919580.mp3', '2019-01-02 12:39:30', 'Can you look after this or are you too busy right now?\r\nA.I have some spare time now \r\nB.No, I won’t need two of them \r\n.CAfter he gets back from work', '2019-01-11 23:58:34'),
(49, '151824_07032012_318106.mp3', '2019-01-02 12:40:50', 'My brother is coming to town, so I won’t be able to go to the movies with you tonight\r\nA.I wish he would come along \r\nB.I’ll just go with Ron, then \r\nC.The movie was really good', '2019-01-11 23:58:34'),
(50, '151912_07032012_271633.mp3', '2019-01-02 12:40:50', 'Do you want me to talk to John about the presentation?\r\nA.Yes, that would be great \r\nB.I’ll buy the presents \r\nC.No, he didn’t want it', '2019-01-11 23:58:34'),
(51, '151635_07032012_834765.mp3', '2019-01-02 12:43:36', 'How did the business meeting go?\r\nA.I’m going with my boss \r\nB.He left an hour ago \r\nC.It went rather well', '2019-01-11 23:58:34'),
(53, '160707_03012012_680270.mp3', '2019-01-11 17:51:58', 'A.The man is feeding a horse \r\nB.The man is building a fence \r\nC.The men is riding a horse \r\nD.The man is taking off his cowboy hat', '2019-01-11 17:51:58'),
(55, '105134_06012012_145016.mp3', '2019-01-11 18:17:49', 'When did you last visit our laboratory?\r\nA.It lasts about a week \r\nB.No, I didn’t \r\nC.Yesterday, with my boss', '2019-01-11 18:17:49'),
(68, '5c3e2d821483c.170531_04022012_616687.mp3', '2019-01-15 18:59:14', 'script part 3', '2019-01-15 18:59:14'),
(72, '5c3f73c9f40e4.105134_06012012_145016.mp3', '2019-01-16 18:11:22', 'abc', '2019-01-16 18:11:22'),
(73, '5c3f73d35a0d1.105134_06012012_145016.mp3', '2019-01-16 18:11:31', 'abc', '2019-01-16 18:11:31'),
(74, 'medias/5c3f7442a953a.170531_04022012_616687.mp3', '2019-01-16 18:13:22', 'fhjk', '2019-01-16 18:13:22'),
(75, '5c3f74a7b6556.175208_01032012_411709.mp3', '2019-01-16 18:15:03', 'g', '2019-01-16 18:15:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `part1`
--

CREATE TABLE `part1` (
  `id` int(11) NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `answer` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `level_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `part1`
--

INSERT INTO `part1` (`id`, `media_id`, `test_id`, `answer`, `picture`, `status`, `level_id`, `created_at`, `updated_at`) VALUES
(3, 11, 1, 'D', '133815_09012012_182919.jpg', 1, 1, '2018-12-24 12:44:27', '0000-00-00 00:00:00'),
(4, 12, 1, 'B', '134038_09012012_648602.jpg', 1, 1, '2018-12-24 12:46:34', '0000-00-00 00:00:00'),
(5, 13, 1, 'D', '134216_09012012_783679.jpg', 1, 2, '2018-12-24 12:48:34', '0000-00-00 00:00:00'),
(6, 14, 1, 'A', '134607_09012012_229364.jpg', 1, 1, '2018-12-24 12:50:23', '0000-00-00 00:00:00'),
(7, 15, 1, 'C', '153813_09012012_321951.jpg', 1, 1, '2018-12-24 12:52:18', '0000-00-00 00:00:00'),
(8, 16, 1, 'C', '153909_09012012_220767.jpg', 1, 1, '2018-12-24 12:54:44', '0000-00-00 00:00:00'),
(9, 17, 1, 'A', '154840_09012012_405886.jpg', 1, 1, '2018-12-24 12:56:24', '0000-00-00 00:00:00'),
(10, 18, 1, 'C', '154932_09012012_321401.jpg', 1, 2, '2018-12-24 12:58:38', '0000-00-00 00:00:00'),
(11, 19, 1, 'D', '155030_09012012_391412.jpg', 1, 1, '2018-12-24 13:00:02', '0000-00-00 00:00:00'),
(12, 45, 1, 'C', '132933_20022012_242355.jpg', 1, 2, '2019-01-02 10:10:18', '0000-00-00 00:00:00'),
(13, 55, 1, 'C', '160707_03012012_344500.jpg', 1, 2, '2019-01-11 17:52:20', '2019-01-11 17:52:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `part2`
--

CREATE TABLE `part2` (
  `id` int(11) NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  `answer` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `part2`
--

INSERT INTO `part2` (`id`, `media_id`, `answer`, `level_id`, `test_id`, `created_at`, `updated_at`, `status`) VALUES
(2, 20, 'C', 1, 1, '2018-12-24 13:02:45', '2019-01-08 15:25:17', 1),
(3, 21, 'B', 1, 1, '2018-12-24 13:04:14', '2019-01-08 15:25:17', 1),
(4, 22, 'B', 1, 1, '2018-12-24 13:05:44', '2019-01-08 15:25:17', 1),
(5, 23, 'C', 1, 1, '2018-12-24 13:07:15', '2019-01-08 15:25:17', 1),
(6, 24, 'B', 1, 1, '2018-12-24 13:08:47', '2019-01-08 15:25:17', 1),
(7, 25, 'A', 1, 1, '2018-12-24 13:25:12', '2019-01-08 15:25:17', 1),
(8, 26, 'B', 2, 1, '2018-12-24 13:27:27', '2019-01-08 15:25:17', 1),
(9, 27, 'B', 1, 1, '2018-12-24 13:29:16', '2019-01-08 15:25:17', 1),
(10, 28, 'C', 2, 1, '2018-12-24 13:31:17', '2019-01-08 15:25:17', 1),
(11, 29, 'A', 1, 1, '2018-12-24 13:32:40', '2019-01-08 15:25:17', 1),
(12, 30, 'B', 1, 1, '2018-12-24 13:34:35', '2019-01-08 15:25:17', 1),
(13, 31, 'B', 2, 1, '2018-12-24 13:36:03', '2019-01-08 15:25:17', 1),
(14, 39, 'C', 1, 1, '2018-12-30 21:30:31', '2019-01-08 15:25:17', 1),
(15, 40, 'C', 2, 1, '2018-12-30 21:32:51', '2019-01-08 15:25:17', 1),
(16, 42, 'B', 1, 1, '2019-01-01 16:30:25', '2019-01-08 15:25:17', 1),
(17, 46, 'c', 2, 1, '2019-01-02 10:13:35', '2019-01-08 15:25:17', 1),
(18, 47, 'C', 1, 1, '2019-01-02 10:15:39', '2019-01-08 15:25:17', 1),
(19, 50, 'A', 2, 1, '2019-01-02 12:42:26', '2019-01-08 15:25:17', 1),
(20, 49, 'B', 1, 1, '2019-01-02 12:42:26', '2019-01-08 15:25:17', 1),
(21, 48, 'A', 1, 1, '2019-01-02 12:42:47', '2019-01-08 15:25:17', 1),
(22, 51, 'C', 1, 1, '2019-01-02 12:43:55', '2019-01-08 15:25:17', 1),
(23, 55, 'C', 1, 1, '2019-01-11 18:17:49', '2019-01-11 18:17:49', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `part3`
--

CREATE TABLE `part3` (
  `id` int(11) NOT NULL,
  `question` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optionA` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optionB` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optionC` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optionD` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `part3`
--

INSERT INTO `part3` (`id`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `answer`, `media_id`, `level_id`, `test_id`, `created_at`, `updated_at`) VALUES
(3, 'What time the man will start his appointment this afternoon?', 'At 1 o’clock', 'At 2 o’clock', 'At 3 o’clock', 'At 4 o’clock', 'D', 32, 1, 1, '2018-12-24 13:42:54', '2019-01-08 15:38:19'),
(4, 'What will the man do this afternoon?', 'Meet with some clients', 'Call the president’s office', 'Go to the emergency room', 'Relocate his office', 'A', 32, 1, 1, '2018-12-24 13:42:54', '2019-01-08 15:38:19'),
(5, 'What would the man like Julie to do?', 'Meet with the president', 'Change an appointment time', 'Come to the office later', 'Contact some clients', 'B', 32, 1, 1, '2018-12-24 13:42:54', '2019-01-08 15:38:19'),
(6, 'What information does the man ask the woman for?', 'Her invoice number', 'Her telephone number', 'Her monthly balance', 'Her identification number', 'B', 33, 1, 1, '2018-12-24 13:59:09', '2019-01-08 15:38:19'),
(7, 'How does the man explain the change in the women’s bill?', 'The price may have risen', 'The woman has two cell phones', 'There was an accounting error', 'The woman may have used her cell phone more than usual.', 'A', 33, 1, 1, '2018-12-24 13:59:09', '2019-01-08 15:38:19'),
(8, 'What kind of company does the man work for?', 'A delivery service company', 'An Internet provider', 'A mobile phone compan', 'An accountant’s office', 'C', 33, 1, 1, '2018-12-24 13:59:09', '2019-01-08 15:38:19'),
(9, 'Where will the woman go before the party?', 'To the banquet hall', 'To the hotel lobby', 'To a bakery', 'To a supermarket', 'C', 34, 1, 1, '2018-12-24 14:03:43', '2019-01-08 15:38:19'),
(10, 'When will the celebration start?', 'At 6.00', 'At 6.30', 'At 7.00', 'At 7.30', 'C', 34, 1, 1, '2018-12-24 14:03:43', '2019-01-08 15:38:19'),
(11, 'What is the celebration for?', 'The promotion of a coworker', 'The opening of a new banquet facility', 'The anniversary of the hotel', 'The retirement of a colleague', 'D', 34, 1, 1, '2018-12-24 14:03:43', '2019-01-08 15:38:19'),
(14, 'What day is it today?', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'B', 41, 1, 1, '2018-12-30 22:15:09', '2019-01-08 15:38:19'),
(15, 'What does the man mention about the supermarket?', 'It is located in the mall', 'It sells over-the-counter drugs', 'It takes about half an hour to get there on foot', 't opens early on Tuesday', 'B', 41, 1, 1, '2018-12-30 22:26:02', '2019-01-08 15:38:19'),
(16, 'Why did the man go to the mall?', 'To buy some groceries', 'To get some medicine', 'To rent a video', 'To buy a movie ticket', 'B', 41, 1, 1, '2018-12-30 22:26:23', '2019-01-08 15:38:19'),
(19, 'q1', 'a1', 'b1', 'c1', 'd1', 'C', 68, 1, 2, '2019-01-15 18:59:14', '2019-01-15 18:59:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `part5`
--

CREATE TABLE `part5` (
  `id` int(11) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `optionA` text COLLATE utf8mb4_unicode_ci,
  `optionB` text COLLATE utf8mb4_unicode_ci,
  `optionC` text COLLATE utf8mb4_unicode_ci,
  `optionD` text COLLATE utf8mb4_unicode_ci,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `level_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `script_answer` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `part5`
--

INSERT INTO `part5` (`id`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `answer`, `level_id`, `test_id`, `script_answer`, `created_at`, `updated_at`) VALUES
(1, 'Passengers on the aircraft are asked to secure ... belongings during takeoff and landing.', 'they', 'their', 'them', 'themselves', 'B', 1, 1, 'TTSH + N', '2018-12-18 22:51:41', '2019-01-08 15:37:44'),
(2, 'East Abihay City is run ... a mayor and six-mamber council who are elected for four years.', 'of', 'among', 'by', 'from', 'C', 1, 1, 'N1 of N2\r\namong+ N(s)\r\nby+ N(chỉ người)\r\nfrom..to\r\n', '2018-12-24 09:30:11', '2019-01-08 15:37:44'),
(3, 'Due to its need for ... repairs, the Paliot 12Z conveyor belt is sheduled to be replaced by a more efficent model.', 'frequent', 'frequently', 'frequentcy', 'frequents', 'A', 1, 1, 'Adj+V\r\nrepairs: N so nhieu', '2018-12-24 09:30:11', '2019-01-08 15:37:44'),
(4, 'On July 23, Mr.Saito will be named chairman od the board ... president of A', 'as well as', 'more', 'added', 'such as', 'A', 1, 1, 'as well as: như là\r\nmore: hơn ... + than\r\nadded: thêm\r\nsuch as: như là + liệt kê', '2018-12-24 09:34:19', '2019-01-08 15:37:44'),
(5, 'Any promplem with the new software systems should be repored to the system administrator.', 'prompt', 'promptness', 'prompts', 'promptly', 'D', 2, 1, 'promptly bổ nghĩa cho reported', '2018-12-24 09:34:19', '2019-01-08 15:37:44'),
(6, 'Employees currently working in Ridge Manufaturing\'s branch ofies will mỏe into the new headquaters ... the buiding is finished.', 'once', 'even', 'besides ', 'moreover ', 'A', 1, 1, NULL, '2018-12-24 09:42:12', '2019-01-08 15:37:44'),
(7, 'Because of a ... increase in profits this quater, Tyro employees will receive thier first-ever year-end bonus.', 'dramatically', 'dramaticize', 'dramatic', 'drama', 'C', 1, 1, 'a+Adj+N', '2018-12-24 09:42:12', '2019-01-08 15:37:44'),
(8, '... about the actual cót ò the project have delayed tge plans for expanding the arena ', 'Additions', 'Manners', 'Materials', 'Concerns', 'D', 1, 1, 'Concerns about: mối quan tâm về', '2018-12-24 09:46:40', '2019-01-08 15:37:44'),
(9, 'You may return for full credit any marchandise with ... you are not satisfied.', 'who ', 'what', 'wich', 'whose', 'c', 1, 1, 'Pre+ which', '2018-12-24 09:46:40', '2019-01-08 15:37:44'),
(10, 'Preparing a budget encourages an excutive to ... serveral options before deciding on a course of action.', 'think', 'reply', 'inquire', 'examine ', 'D', 1, 1, 'think: nghĩ\r\nreply: trả lời\r\ninquire: yêu cầu\r\nexamine: kiểm tra', '2018-12-24 10:09:54', '2019-01-08 15:37:44'),
(11, 'Across Design Ltd. offers digital and print design ... that fit the individual clients requirements.', 'to service ', 'service ', 'serviced', 'services', 'D', 2, 1, 'N(số nhiều) that V\r\nN(số ít) that V(s, es)', '2018-12-24 10:09:54', '2019-01-08 15:37:44'),
(12, 'Consumers are advised to use caution when applying this product ... fabrics that have been dyed by hand.', 'at', 'to', 'out', 'off', 'B', 2, 1, 'to V: để làm gì\r\nto N: tới', '2018-12-24 10:14:42', '2019-01-08 15:37:44'),
(13, 'Amonarth Pre paints are hightly ... to most stains and can be cleaned easily with soap and water', 'resistance', 'resisted', 'resistant', 'resists', 'c', 2, 1, 'Adj đặc biết: chống lại', '2018-12-24 10:14:42', '2019-01-08 15:37:44'),
(14, 'The company-sponsored five-kilometer run will be held on Octorboer 15 and all amployees ... to prarticipate.', 'to invite', 'invite', 'inviting', 'are invited', 'D', 2, 1, NULL, '2018-12-24 10:21:07', '2019-01-08 15:37:44'),
(15, 'In the devade ... it was founded, Liu and Wang Corporation has become a legend in creative advertising', 'since', 'almost', 'however', 'there for', 'A', 2, 1, 'since + thời gian: kể từ khi\r\nsince + mệnh đề: bởi vì\r\n', '2018-12-24 10:21:07', '2019-01-08 15:37:44'),
(16, 'The job of â?¦â?¦â?¦ the production process has been given to a well-known engineering consultant.', 'Streamlines  ', 'Streamlined ', 'To streamline', 'Streamlining', 'D', 1, 1, 'for+Ving', '2019-01-01 22:33:21', '2019-01-08 15:37:44'),
(17, 'Register your name and address on the Web site in order to ------- a purchase online.', 'make ', 'shop ', 'owe ', 'use', 'A', 1, 1, NULL, '2019-01-02 10:17:44', '2019-01-08 15:37:44'),
(18, 'All ------- for time off must go through the Human Resources Department first.', 'request ', 'requests ', 'requested ', 'requesting', 'B', 1, 1, 'all+ N(s. es)', '2019-01-02 10:19:29', '2019-01-08 15:37:44'),
(19, 'Despite it being his first time in an authority position, Mark led the project remarkably -------.', 'partly ', 'even ', 'yet ', 'once', 'A', 1, 1, 'A', '2019-01-02 10:21:17', '2019-01-08 15:37:44'),
(20, 'The detailed analyses of third and fourth quarter sales are included in ------- final report.', 'he', 'his ', 'him ', 'himself', 'B', 1, 1, 'TTSH+N', '2019-01-02 10:23:29', '2019-01-08 15:37:44'),
(21, 'Any visitors to the production facilities must ------- a security pass from the information desk at the front entrance.', 'allow', 'achieve ', 'obtain ', 'remind', 'C', 2, 1, NULL, '2019-01-02 10:24:25', '2019-01-08 15:37:44'),
(22, 'Students enrolled as full-time can fully ------- in the university extracurricular clubs.', 'participate', 'participant ', 'participating ', 'had participated', 'A', 2, 1, 'can+V', '2019-01-02 10:25:36', '2019-01-08 15:37:44'),
(23, 'Dr. Byer is ------- with the renovations made to his clinic by the remodeling company.', 'pleasing ', 'pleased ', 'pleasant', 'pleasure', 'B', 1, 1, 'tobe+ (Ved/V-ing)\r\nBD-> V-ed', '2019-01-02 10:26:56', '2019-01-08 15:37:44'),
(31, 'abc1ee', 'fasd', 'fdsf', 'fdf', 'fdfd', 'B', 1, 2, 'fsf', '2019-01-16 20:50:21', '2019-01-16 20:50:21'),
(32, 'fdf', 'dfs', 'fdf', 'sfd', 'fd', 'A', 2, 2, 'fg', '2019-01-16 20:50:21', '2019-01-16 20:50:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `part6`
--

CREATE TABLE `part6` (
  `id` int(11) NOT NULL,
  `passage_id` int(11) DEFAULT NULL,
  `optionA` text COLLATE utf8mb4_unicode_ci,
  `optionB` text COLLATE utf8mb4_unicode_ci,
  `optionC` text COLLATE utf8mb4_unicode_ci,
  `optionD` text COLLATE utf8mb4_unicode_ci,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `level_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `part6`
--

INSERT INTO `part6` (`id`, `passage_id`, `optionA`, `optionB`, `optionC`, `optionD`, `answer`, `level_id`, `test_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Psychological', 'Professional', 'Educational', 'Financial', 'D', 1, 1, '2018-12-24 10:26:46', '2019-01-08 15:36:35'),
(2, 1, 'Vault', 'Ledger', 'Account', 'Entrance', 'C', 1, 1, '2018-12-24 10:26:46', '2019-01-08 15:36:35'),
(3, 1, 'Entertain', 'Entertainer', 'Entertaining', 'Entertainment', 'D', 1, 1, '2018-12-24 10:27:50', '2019-01-08 15:36:35'),
(4, 1, 'Has been', 'Will be', 'Being', 'Was', 'B', 1, 1, '2018-12-24 10:27:50', '2019-01-08 15:36:35'),
(5, 2, 'Cost', 'Costly', 'Coasted', 'Costing', 'B', 1, 1, '2018-12-24 10:33:10', '2019-01-08 15:36:35'),
(6, 2, 'Debts', 'Products', 'Factories', 'Earnings', 'D', 1, 1, '2018-12-24 10:33:10', '2019-01-08 15:36:35'),
(7, 2, 'To', 'Of', 'By', 'At', 'A', 1, 1, '2018-12-24 10:33:10', '2019-01-08 15:36:35'),
(8, 2, 'Transportation', 'Agriculture', 'Technology', 'Finance', 'C', 1, 1, '2018-12-24 10:33:10', '2019-01-08 15:36:35'),
(9, 3, 'Staying', 'Working', 'Looking', 'Existing', 'A', 1, 1, '2018-12-24 10:35:41', '2019-01-08 15:36:35'),
(10, 3, 'Speedy', 'Speeded', 'Speeding', 'Speedily', 'D', 1, 1, '2018-12-24 10:35:41', '2019-01-08 15:36:35'),
(11, 3, 'Retired', 'Resigned', 'CDeparted', 'Graduated', 'c', 1, 1, '2018-12-24 10:35:41', '2019-01-08 15:36:35'),
(12, 3, 'My', 'Our', 'Your', 'Their', 'C', 1, 1, '2018-12-24 10:35:41', '2019-01-08 15:36:35'),
(13, 7, 'Enough', 'Thoroughly ', 'Entirely ', 'Fully', 'D', 1, 1, '2019-01-01 23:10:46', '2019-01-08 15:36:35'),
(14, 7, 'Facilities', 'Values ', 'Services ', 'Opportunities', 'C', 1, 1, '2019-01-01 23:11:16', '2019-01-08 15:36:35'),
(15, 7, 'You', 'Us', 'Them  ', 'Him', 'B', 1, 1, '2019-01-01 23:11:40', '2019-01-08 15:36:35'),
(16, 8, 'Provide ', 'Provisions ', 'Providing ', 'Provides', 'D', 2, 1, '2019-01-01 23:18:58', '2019-01-08 15:36:35'),
(17, 8, 'Was used  ', 'Have been used ', 'Are to use', 'Will be used', 'B', 1, 1, '2019-01-01 23:19:32', '2019-01-08 15:36:35'),
(18, 8, 'Takes  ', 'Features ', 'Accounts ', 'Calculates', 'B', 1, 1, '2019-01-01 23:20:37', '2019-01-08 15:36:35'),
(21, 11, 'a1', 'b1', 'c1', 'd1', 'C', 2, 11, '2019-01-16 16:06:03', '2019-01-16 16:06:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `part7`
--

CREATE TABLE `part7` (
  `id` int(11) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `optionA` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optionB` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optionC` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optionD` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `answer` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `passage_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `part7`
--

INSERT INTO `part7` (`id`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `test_id`, `answer`, `level_id`, `passage_id`, `created_at`, `updated_at`) VALUES
(1, ' How much will this service cost the employees?', 'Fifteen dollars for fifteen minutes', 'They pay nothing', 'It depends on the service', 'Human Resources has the rate', 1, 'B', 1, 4, '2018-12-24 10:39:09', '2019-01-08 15:37:01'),
(2, 'What is this announcement about?', 'Length of breaks', 'Massages', 'Furniture sales', 'DLanguages classes', 1, 'B', 1, 4, '2018-12-24 10:39:09', '2019-01-08 15:37:01'),
(3, 'How will the days be taken off?', 'Employees will arrange days off with their supervisor', 'All employees are to stay home starting June 30', 'A specific plan has not been worked out yet', 'Employees can arrange to take two days off this or next fiscal year', 1, 'A', 1, 5, '2018-12-24 10:43:57', '2019-01-08 15:37:01'),
(4, 'What is causing this budget crisis?', 'There is a surplus of $13 million', 'There is a shortage of $13 million', 'The CFO did not plan out the operating budget properly', 'Nobody can pinpoint the reasons for this budget crisis.', 1, 'B', 1, 5, '2018-12-24 10:43:57', '2019-01-08 15:37:01'),
(5, 'Why must employees give up two days’ pay at this time?', 'To pay back money they were overpaid', 'To contribute to company charity', 'To end a budget crisis in this fiscal year', 'The bylaws state they have to', 1, 'C', 1, 5, '2018-12-24 10:43:57', '2019-01-08 15:37:01'),
(6, 'Which of the following exits will NOT be in the affected area?', 'NE 125th Street', 'NE 95th Street', 'CNE 151st Street', 'NE 82nd Street', 1, 'B', 1, 6, '2018-12-24 10:48:59', '2019-01-08 15:37:01'),
(7, ' Who is authorizing the lane closures?', 'The city', 'BThe county', 'CThe state', 'D The district', 1, 'B', 1, 6, '2018-12-24 10:48:59', '2019-01-08 15:37:01'),
(8, ' Which part of the highway will have lane closures?', 'All north side lanes', 'One lane on each side', 'The two left lanes on each side', 'The two left lanes on the north side', 1, 'd', 1, 6, '2018-12-24 10:48:59', '2019-01-08 15:37:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `parts`
--

CREATE TABLE `parts` (
  `id` int(11) NOT NULL,
  `part` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `parts`
--

INSERT INTO `parts` (`id`, `part`, `content`) VALUES
(1, 'Photographs', 'Look at the picture and listen to the sentences. Choose the sentence that best describes the picture:'),
(2, 'Question-Response', 'Listen to the question and the three responses. Choose the response that best answers the question:'),
(3, 'Short conversation', 'Listen to the dialogue. Then read each question and choose the best answer:'),
(4, 'Short talk', 'Listen to the talk. Then read each question and choose the best answer:'),
(5, 'Incomplete sentence', 'Choose the word that best completes the sentence'),
(6, 'Text completion', 'Choose the word or phrase that best completes the blanks:'),
(7, 'Reading comprehen', 'Read the passage and choose the correct answer:');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `part_4`
--

CREATE TABLE `part_4` (
  `id` int(11) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `optionA` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optionB` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optionC` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optionD` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `answer` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `part_4`
--

INSERT INTO `part_4` (`id`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `media_id`, `test_id`, `answer`, `level_id`, `created_at`, `updated_at`) VALUES
(1, 'When does Katie expect to hear from Mr. Clifford?', 'On Monday, between 8 and 6 o’clock', 'As soon as possible', 'Before the installation date', 'After the payment due date', 35, 1, 'B', 2, '2018-12-24 14:09:50', '2019-01-13 00:04:57'),
(2, 'What is Mr. Clifford asked to do?\r\n', 'Send an e-mail', 'Call the company', 'Drop by the office', 'Register for services', 35, 1, 'B', 2, '2018-12-24 14:09:50', '2019-01-13 00:05:47'),
(3, 'What is the reason for the call?', 'To get Mr. Clifford’s contact information', 'To set up an installation', 'To discuss available Internet packages', 'To receive payment for a service', 35, 1, 'D', 2, '2018-12-24 14:09:50', '2019-01-13 00:06:41'),
(4, ' Where was the first facility?', 'Milton', 'Portland', 'St. Louis', 'Rochester', 36, 1, 'A', 2, '2018-12-24 14:14:47', '2019-01-13 00:06:41'),
(5, 'How many staff will the company employ when it opens?', '50', '75', '100', '15', 36, 1, 'C', 2, '2018-12-24 14:14:47', '2019-01-13 00:06:41'),
(6, 'Who most likely is the speaker?', 'A construction crew member', 'A steel engineer', 'A plant supervisor', 'A company’s director', 36, 1, 'D', 2, '2018-12-24 14:14:47', '2019-01-13 00:06:41'),
(7, 'How long will the visitors be on their own?', '30 minutes', 'One hour', 'Two hours', 'Three hours', 37, 1, 'C', 2, '2018-12-24 14:20:48', '2019-01-13 00:06:41'),
(8, 'What will happen at 2:00?', 'The visitors will ask question', 'The guided part of the tour will end', 'The tasting rooms will close', 'The visitors can take photograph', 37, 1, 'B', 2, '2018-12-24 14:20:48', '2019-01-13 00:06:41'),
(9, 'Who most likely are the visitors?', 'A semi-conductor plant', 'A famous museum', 'A large bakery’s facilities', 'A supermarket', 37, 1, 'C', 2, '2018-12-24 14:20:48', '2019-01-13 00:06:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `passages`
--

CREATE TABLE `passages` (
  `id` int(11) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `passages`
--

INSERT INTO `passages` (`id`, `detail`, `content`, `created_at`, `updated_at`) VALUES
(1, 'refer to the following e-mail ', '\r\nIs pleased to announce the opening of a new branch at 1109 South Boulevard in the Green Lake section of town.\r\n\r\nThis (1)……… a full-service branch where you can be sure of receiving the professional, prompt, and friendly service that you are accustomed to at all Bournesville Bank branches.\r\n\r\nPlease join us for the grand opening of our new branch on Monday, May 22 during our regular business hours 9:00 a.m. to 3:00 p.m.\r\nThere will be refreshments, live (2)………, and prizes.\r\n\r\nBank staff will be on hand to explain all the service available to our customers. Everyone who opens a new (3)……… during the Gran opening will receive a special bonus gift.\r\n\r\nThis gift is our way of saying “thank you” for doing business with us.\r\nBournesville Bank, your partner in all your business and personal (4)……… needs.', '2019-01-01 22:50:33', '2019-01-16 23:01:55'),
(2, 'Choose the word or phrase that best completes the blanks:', 'Profit Up In (1)……… Sector\r\n\r\nGalaxy Systems reported a fourth quarter profit of $250,000, compared (2)……… a loss of nearly $2 million during the same period last year. This was the first quarter with a profit for the computer company, which began operations five years ago.\r\n\r\nAccording to the year-end report form Goldboro, Inc., the company’s profit rose 20%. The rise in profits is attributed to the introduction of a new software system for personal finance accounting. The company hopes to further increase its (3)……… next year by expanding its markets overseas.\r\n \r\nProvidence has been losing a significant portion of its market share to competitors, but the company is optimistic about the future. “We’re confident that our plans for bringing more efficient and less (4)……… wireless service to our customer will result in increased market share and greater profits than the company has ever enjoyed in the past” said Thomas P. Witherspoon, CEO.', '2019-01-01 22:50:33', '2019-01-16 23:01:55'),
(3, 'Choose the word or phrase that best completes the blanks:', 'Dear Ms. Harwood,                                \r\n\r\nI am writing to let you know of the exemplary care and service I received form (1)……… staff during my stay at the Tinkum Square Hotel last July. From the moment of my arrival until the day I (2)………, I received nothing but courteous and efficient service from all members of the hotel staff.\r\n\r\nI especially want to bring to your attention two staff members who provided me with assistance above and beyond the call of duty. On my way to the airport after a pleasant week at Tinkum Square, I discovered that I had left my computer behind. I immediately called the manager on duty, Robert Dunstan who supervised an emergency search for my computer. After it was discovered in the hotel restaurant, Mr. Dunstan’s assistant, Martha Jones, got into a taxi and personally delivered the computer to me at the airport. It was all done so (3)……… that I had my computer in hand well before I had to board the plane.\r\n\r\nI know that you would want to hear about this example of the loyalty and professionalism of Mr. Dunstan and Ms. Jones. I look forward to (4)……… at Tinkum Square during my next business trip to Portsmouth.\r\n\r\nSincerely,\r\nJames L.Keeman', '2019-01-01 22:50:33', '2019-01-16 23:01:55'),
(4, 'Read the passage and choose the correct answer:', '\r\n\r\nNeed a real break during working hours?\r\nHaving trouble relaxing after work?\r\nHuman Resources is bringing you “The Stress Buster”\r\n·         15 minutes of total relaxation free of charge\r\n·         Choose the table for full bodywork\r\n·         Choose the chair for neck, shoulders and back\r\nWhere: Employee Lounge\r\nWhen: Mondays, Wednesdays, Fridays\r\nTimes: During breaks, lunchtime, after work', '2019-01-01 22:50:33', '2019-01-16 23:01:55'),
(5, 'refer to the following form  email', '\r\n\r\nTo: All Atlantis Corporation Employees\r\nFrom: Myrtle Sternbridge, Chief Financial Officer\r\nRe: Two-day unpaid leave\r\nDate: June 3\r\n\r\nIt is my unhappy duty to inform you that the Board of Directors has voted to impose a two-day layoff for all employees in order to avoid an operating budget shortfall.\r\n\r\nThe company is facing a serious crisis due to poor profits over the past two quarters. The budget is short by about $13 million and according to our bylaw, the budget must be balanced by June 30, the end of this fiscal year.\r\n\r\nIt is necessary for all employees to give up  two days’ pay in order to put an end to the budget crisis. Employees are to speak to their supervisors regarding scheduling the two days that they are not to report to work.\r\n\r\nAccording to the agreement reached between Atlantis Corp. and the union, employees will be reimbursed for the days they lose during the first six months of the next fiscal year if profits improve.\r\n\r\nI sincerely regret the need to take such drastic measures to end the current budget crisis, but with your cooperation, we can see this through.', '2019-01-01 22:50:33', '2019-01-16 23:01:55'),
(6, ' \r\nrefer to the following article ', '\r\n\r\n\r\nDue to continued construction on Interstate 95, the two left lanes on the north side will be closed from NE 78th St. to NE 135th St between the hours of midnight and 6:00 A.M. Monday to Friday, and 10:00 P.M. to 7 A.M. weekends.\r\n\r\nLane closures are scheduled to begin on October 16 and continue until November 6.\r\nWe regret any inconvenience to motorists.', '2019-01-01 22:50:33', '2019-01-16 23:01:55'),
(7, 'Choose the word or phrase that best completes the blanks:', 'Dear Ms. Sinnott,\r\n\r\nMr. Steven Davis, who is currently employed as a junior accountant at your firm, has recently shown his interest in a similar post with (1)........ and has provided your name as a reference.\r\n\r\nI would be grateful to receive any information regarding his work ethic, character, and achievements. Furthermore, if you can provide your personal views of how his (2)........ with you have been and what your opinion is regarding Mr. Davis taking on full responsibility as an accountant in a very large and busy department, I would appreciate it.\r\n\r\nI am (3)........ aware that Mr. Davis graduated from George Brown College with an accounting degree but I am more interested in how he has performed under your supervision since he began working for you.\r\n\r\nIf there is any other information you feel I can use, I would appreciate it very much. Iâ??d like to thank you in advance and add that any information you provide will be treated as strictly confidential.\r\n\r\nSincerely,', '2019-01-01 23:01:10', '2019-01-16 23:01:55'),
(8, 'Choose the word or phrase that best completes the blanks:', 'Dreamaker\r\nThe professionals that make your nights comfortable\r\n\r\nThe Dreamaker Plus (1)........ the exclusive coil system everyoneâ??s been talking about.\r\n\r\nFor the past 5- years, the experts at Dreamaker have dedicated their time and effort to bring the Americans a good nightâ??s rest by using our reliable and proven technology.\r\n\r\nCompared to any conventional spring systems available in the industry, the Dreamaker Plus has nearly twice the coils of any others. Quality comfort layers and fabrics (2)........ to ensure a comfortable and durable sleeping surface.\r\n\r\nBy increasing the wire thickness in the outer two rows, Dreamaker Plus (3)........ a firmer seating edge, increases the usable sleeping space, and helps to prevent that â??roll out of bedâ?? feeling.', '2019-01-01 23:18:58', '2019-01-16 23:01:55'),
(9, NULL, '<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost:8888/bd44263c-7041-44fa-a9ec-445ac6c5a767\" style=\"width:1433px\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>', '2019-01-16 16:02:01', '2019-01-16 16:02:01'),
(10, NULL, '<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost:8888/bd44263c-7041-44fa-a9ec-445ac6c5a767\" style=\"width:1433px\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>', '2019-01-16 16:02:56', '2019-01-16 16:02:56'),
(11, NULL, '<p><img alt=\"\" src=\"/ckfinder/userfiles/files/49371764_310981206425168_1401119130542669824_n.jpg\" style=\"height:1200px; width:675px\" /></p>', '2019-01-16 16:06:03', '2019-01-16 16:06:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `menu_order` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `serial`
--

CREATE TABLE `serial` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `test`
--

INSERT INTO `test` (`id`, `name`, `title`, `created_at`, `status`, `updated_at`) VALUES
(1, 'TEST 1', 'Listening and Reading', '2019-01-11 03:06:51', 1, '2019-01-14 08:11:05'),
(2, 'TEST 2', 'Reading and Listening', '2019-01-14 08:31:02', 0, '2019-01-14 08:43:11'),
(3, 'TEST 3', 'Reading and Listening', '2019-01-14 08:43:30', 0, '2019-01-14 08:43:30'),
(11, 'TEST 4', 'Reading and Listening', '2019-01-14 08:45:06', 1, '2019-01-14 08:45:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `role` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `role`, `remember_token`, `serial_id`, `created_at`, `updated_at`) VALUES
(4, 'thuy', 'vuthithuy10197@gmail.com', '$2y$10$zyJD6vmFcSMkOSoI0K.V3.FrRR.TyMN/s0Ue2oxqfcRpBJk0sdBpy', 1, '1000', 'Yht1RTJZ5Ph0MiooLflvVfN8lBBaZR8CcpKpySP9f40rgMfvZQBbZmCKyhNW', NULL, '2019-01-11 22:47:40', '2019-01-17 23:40:03'),
(6, 'phuongdieu', 'phuongdieu@gmail.com', '123456', 0, '1', NULL, NULL, '2019-01-17 17:03:47', '2019-01-17 17:12:18');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_comment_post` (`post_ID`);

--
-- Chỉ mục cho bảng `grammar_guides`
--
ALTER TABLE `grammar_guides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Chỉ mục cho bảng `part1`
--
ALTER TABLE `part1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_par1_test` (`test_id`),
  ADD KEY `PK_part1_level` (`level_id`),
  ADD KEY `PK_part1_media` (`media_id`);

--
-- Chỉ mục cho bảng `part2`
--
ALTER TABLE `part2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_par2_test` (`test_id`),
  ADD KEY `PK_part2_level` (`level_id`),
  ADD KEY `PK_part2_media` (`media_id`);

--
-- Chỉ mục cho bảng `part3`
--
ALTER TABLE `part3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_part3_test` (`test_id`),
  ADD KEY `PK_part3_level` (`level_id`),
  ADD KEY `PK_part3_media` (`media_id`);

--
-- Chỉ mục cho bảng `part5`
--
ALTER TABLE `part5`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_par5_test` (`test_id`),
  ADD KEY `PK_part5_level` (`level_id`);

--
-- Chỉ mục cho bảng `part6`
--
ALTER TABLE `part6`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_par6_test` (`test_id`),
  ADD KEY `PK_part6_level` (`level_id`),
  ADD KEY `PK_part6_passages` (`passage_id`);

--
-- Chỉ mục cho bảng `part7`
--
ALTER TABLE `part7`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_par7_test` (`test_id`),
  ADD KEY `PK_part7_level` (`level_id`),
  ADD KEY `PK_part7_passages` (`passage_id`);

--
-- Chỉ mục cho bảng `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `part_4`
--
ALTER TABLE `part_4`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_par4_test` (`test_id`),
  ADD KEY `PK_part4_level` (`level_id`),
  ADD KEY `PK_part4_media` (`media_id`);

--
-- Chỉ mục cho bảng `passages`
--
ALTER TABLE `passages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PK_post_menu` (`menu_order`);

--
-- Chỉ mục cho bảng `serial`
--
ALTER TABLE `serial`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `serial_id` (`serial_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `grammar_guides`
--
ALTER TABLE `grammar_guides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `part1`
--
ALTER TABLE `part1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `part2`
--
ALTER TABLE `part2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `part3`
--
ALTER TABLE `part3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `part5`
--
ALTER TABLE `part5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `part6`
--
ALTER TABLE `part6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `part7`
--
ALTER TABLE `part7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `part_4`
--
ALTER TABLE `part_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `passages`
--
ALTER TABLE `passages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `PK_comment_post` FOREIGN KEY (`post_ID`) REFERENCES `posts` (`ID`);

--
-- Các ràng buộc cho bảng `part1`
--
ALTER TABLE `part1`
  ADD CONSTRAINT `PK_par1_test` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`),
  ADD CONSTRAINT `PK_part1_level` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `PK_part1_media` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

--
-- Các ràng buộc cho bảng `part2`
--
ALTER TABLE `part2`
  ADD CONSTRAINT `PK_par2_test` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`),
  ADD CONSTRAINT `PK_part2_level` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `PK_part2_media` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

--
-- Các ràng buộc cho bảng `part3`
--
ALTER TABLE `part3`
  ADD CONSTRAINT `PK_part3_level` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `PK_part3_media` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `PK_part3_test` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`);

--
-- Các ràng buộc cho bảng `part5`
--
ALTER TABLE `part5`
  ADD CONSTRAINT `PK_par5_test` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`),
  ADD CONSTRAINT `PK_part5_level` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`);

--
-- Các ràng buộc cho bảng `part6`
--
ALTER TABLE `part6`
  ADD CONSTRAINT `PK_par6_test` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`),
  ADD CONSTRAINT `PK_part6_level` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `PK_part6_passages` FOREIGN KEY (`passage_id`) REFERENCES `passages` (`id`);

--
-- Các ràng buộc cho bảng `part7`
--
ALTER TABLE `part7`
  ADD CONSTRAINT `PK_par7_test` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`),
  ADD CONSTRAINT `PK_part7_level` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `PK_part7_passages` FOREIGN KEY (`passage_id`) REFERENCES `passages` (`id`);

--
-- Các ràng buộc cho bảng `part_4`
--
ALTER TABLE `part_4`
  ADD CONSTRAINT `PK_par4_test` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`),
  ADD CONSTRAINT `PK_part4_level` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `PK_part4_media` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `PK_post_menu` FOREIGN KEY (`menu_order`) REFERENCES `menu` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`serial_id`) REFERENCES `serial` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
