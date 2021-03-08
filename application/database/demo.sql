-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2021 at 04:14 AM
-- Server version: 5.7.27-log
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_jameszhao_c`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title`, `description`, `img`) VALUES
(1, 'Crystal Chaos', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/1952/crystal-chaos/game/uk/crystalchaos-titlecard_standard.1485f338.jpg?imwidth=300'),
(2, 'Alien Rivals', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/710/alien-rivals/game/za/alienrivals-1280x720-en.015ad65c.jpg?imwidth=300'),
(3, 'Monster Kids', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/1722/monster-kicks/game/za/monsterkicks-1600x900-en.292a04f8.jpg?imwidth=300'),
(4, 'Food Fight', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/1178/food-fight/game/uk/foodfight-1600x900-en.3eda124d.jpg?imwidth=300'),
(5, 'Play Along', 'Demo game', 'https://cn.i.cdn.ti-platform.com/cnemea/content/328/game/bmo---play-along-with-me/uk/cover-en-1080x608.jpg?imwidth=300'),
(6, 'Tomb of Doom', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/710/tomb-of-doom/game/za/cn_hero_1280x720_1.4952dbec.jpg?imwidth=300'),
(7, 'Rumble Bee', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/437/rumble-bee-do-not-publish/game/za/rumblebee-1600x900-en.ae470332.jpg?imwidth=300'),
(8, 'Block Party', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/20/block-party/game/za/blockparty-1280x720-en.e96310f4.jpg?imwidth=300'),
(9, 'Beats Battle', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/1513/beats-battle/game/uk/beatsbattle-1280x720_en.f9f487dd.jpg?imwidth=300'),
(10, 'Stellar Odyseey', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/20/stellar-odyssey/game/za/stellaodyssey-1600x900-en.a3f12116.jpg?imwidth=300'),
(11, 'Jelly of the Beast', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/1793/jelly-of-the-beast/game/za/cn_hero_1280x720.346c475b.jpg?imwidth=300'),
(12, 'Bakery & Bravery', 'Demo game', 'https://cn.i.cdn.ti-platform.com/cnemea/content/4/game/bakery-%26-bravery/za/cn_hero_1280x720-2.jpg?imwidth=300'),
(13, 'Snow Stoppers', 'Demo game', 'https://cn.i.cdn.ti-platform.com/cnemea/content/336/game/snow-stoppers/uk/cover-en.jpg?imwidth=300'),
(14, 'Sports Quiz', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/336/summer-sports-quiz/game/uk/summersportsquiz_uk.6683c6a9.png?imwidth=300'),
(15, 'Super Hero Maker', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/437/super-hero-maker/game/za/cn_hero_1280x720.857c1748.jpg?imwidth=300'),
(16, 'Hypno Bliss', 'Demo game', 'https://cn.i.cdn.ti-platform.com/cnemea/content/31431/game/HypnoBliss-PPG-Cover-EN.jpg?imwidth=300'),
(17, 'The Quest of Towers', 'Demo game', 'https://cn.i.cdn.ti-platform.com/cnemea/content/30506/game/TheQuestOfTowers-MM-Cover-EN.jpg?imwidth=300'),
(18, 'Swing Out', 'Demo game', 'https://cn.i.cdn.ti-platform.com/cnemea/content/29261/game/SwingOut-GB-Cover-EN.jpg?imwidth=300'),
(19, 'No Arm Done', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/710/game/no-arm-done/za/noarmdone-b10-cover-en-min.jpg?imwidth=300'),
(20, 'Sparkle Blaster', 'Demo game', 'https://cn.i.cdn.ti-platform.com/cnemea/content/30624/game/SparkleBlaster-UK-Cover-EN.jpg?imwidth=300'),
(21, 'Alien Rush', 'Demo game', 'https://cn.i.cdn.ti-platform.com/cnemea/content/22105/game/AlienRush-B10-Cover-EN.jpg?imwidth=300'),
(22, 'Escape Route', 'Demo game', 'https://cn.i.cdn.ti-platform.com/cnemea/content/22437/game/EscapeRoute-B10-Cover-EN.jpg?imwidth=300'),
(23, 'Shifting Temple', 'Demo game', 'https://cn.i.cdn.ti-platform.com/cnemea/content/21747/game/ShiftingTemple-SU-Cover-EN.jpg?imwidth=300'),
(24, 'Blind Finned', 'Demo game', 'https://cn.i.cdn.ti-platform.com/cnemea/content/16802/game/BlindFinned-AT-Cover-EN.jpg?imwidth=300'),
(25, 'Stinkfly Avoid', 'Demo game', 'https://cn.i.cdn.ti-platform.com/cnemea/content/24969/game/StinkflyAvoid-B10-Cover-EN.jpg?imwidth=300'),
(26, 'Spelungies', 'Demo game', 'https://cn.i.cdn.ti-platform.com/content/1962/spelungies/game/za/spelungies-titlecard-1600x900_en.c0180951.jpg?imwidth=300');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `balance` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
