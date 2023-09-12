-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 12 sep. 2023 à 08:23
-- Version du serveur : 5.7.40
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pf2`
--

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `stack` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` int(11) NOT NULL DEFAULT '0',
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `title`, `body`, `stack`, `link_url`, `image_url`, `created_at`, `updated_at`, `visible`, `source`) VALUES
(6, 'Mamwe', 'I had the privilege of contributing to a real customer project as part of our training at CF2M, collaborating within a team of four. Our primary objective was to create showcase website for this adorable mid-wife lady, with extensive customization options, allowing the client to tailor the content many different sections . To achieve this, we devoted significant effort to building a comprehensive admin section. In addition to customization features, we worked on various back-end functionalities. Like a Mailer for communication, crafting a guestbook for visitor engagement, and developing a secure authentication process. Notably, we ensured that the client could easily change her password using her email address. Throughout the project, we maintained an open line of communication with the client, seeking her input and validation regularly. This collaborative approach was pivotal, given that the website was tailored to her unique requirements rather than being a standalone project.\r\nThis experience provided a valuable opportunity for personal and professional growth, especially for those of us primarily focused on back-end development.', 'PHP OO|||MySQL|||JS|||HTML|||CSS', 'https://mamwe.be/', 'asset/img/mamwe.png', NULL, '2023-09-11 17:05:43', 0, 'https://github.com/JonRauzy/mamwe'),
(5, 'Cuivre Music', 'This was our first team project at CF2M, and we were a team of four on this venture. One of our teachers played the role of the client, and our task was to meticulously follow his directives. I was  designated to be in charge of the Git management, ensuring our collaboration and version control ran as smoothly as possible.The project took the form of a blog/wiki dedicated to brass musical instruments, allowing users to filter instruments by category and view the latest additions. One of the standout features of this project was the implementation of a fully functional admin section. It encompassed all the essentials, including CRUD functionality, a mailer for seamless communication, and an authentication system.  This project proved to be a valuable learning experience, albeit a bit challenging. It marked our first foray into collaborative teamwork, and we had to navigate the intricacies of coordinating our efforts without stepping on each other\'s toes during the coding process. Despite the initial hurdles, it was a rewarding journey that laid the foundation for our future projects.', 'PHP Procedural|||MySQL|||HTML|||CSS|||JS', 'https://2022.webdev-cf2m.be/jonathan/cuivremusic/public/', 'asset/img/cuivre-music.png', NULL, '2023-09-12 04:58:17', 0, 'https://github.com/JonRauzy/armstrong'),
(7, 'Portfolio', 'This is the very website you\'re currently exploring! I dedicated a portion of my summer holidays to self-teaching Laravel, Blade, and Tailwind, and the experience was highly rewarding. While there were moments of frustration as I navigated through the intricacies and sought solutions on Google, the journey overall was enriching. As part of my learning process, I integrated a blog section into this website to grasp CRUD operations in Laravel. I have plans to continue refining it, both to explore additional features I want to learn or simply for the enjoyment of it', 'Laravel|||Blade|||TailWind', 'https://2022.webdev-cf2m.be/', '/asset/img/portfolioV2.png', NULL, '2023-09-11 16:54:17', 0, 'https://github.com/JonRauzy/pf2'),
(4, 'Mock Portfolio', 'Mid-year project, first attempt at a Portfolio and first project using an MVC structure. The content from \'Projects\' and \'Links\' sections were coming from a MySQL database and fetched via procedural PHP. It features a login form, using password hash and session, and also a dark mode in JS. We had total freedom over the design wich is not my strong suit so I made sure it\'s clean and responsive. Nothing flashy but practical and reliable!', 'PHP|||MySQL|||CSS|||HTML|||JS', 'https://2022.webdev-cf2m.be/jonathan/portfolio/public/', 'asset/img/portfolioV1.png', '2023-08-23 11:50:42', '2023-09-12 06:18:48', 0, 'https://github.com/JonRauzy/portfolio'),
(3, 'Livre D\'or (Guestbook)', 'This one was fun to do! It\'s an oldschool guestbook. All we needed was to send message via the contact form, then retrieve and showcase all messages on the same page. It\'s responsive for tablets and phones, the whole design was provided by the teachers and it\'s also our first project to deal with a proper back-end. Meaning a MySQL DataBase and SQL requests. We put a captcha in JS on top of it to make sure users are not bots. we had 2 days to make it, wich gives it a motivating rush.', 'PHP|||MySQL|||CSS|||HTML|||JS', 'https://2022.webdev-cf2m.be/jonathan/livre_d_or/public/', 'asset/img/livre-d-or.png', '2023-08-23 11:58:43', '2023-09-12 06:17:13', 0, 'https://github.com/JonRauzy/TI2/tree/jon'),
(1, 'Pré-formation', 'This is the first very first project we were asked to do at the CF2M. We had to do our best using only few weeks worth of HTML/CSS courses to see how motivated we are and if we  were stepping in the right direction as students. It\'s pretty basic and unresponsive but it remindsme  how it all started!', 'HTML|||CSS', 'https://2022.webdev-cf2m.be/jonathan/prefo/', 'asset/img/preformation.png', '2023-08-23 12:05:41', '2023-09-12 06:16:52', 0, 'none');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
