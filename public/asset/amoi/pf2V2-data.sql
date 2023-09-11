-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 11 sep. 2023 à 13:16
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.0

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

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `body`, `click`, `like`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'How to center a div', 'how-to-center-a-div', 'Method 1: Using Flexbox\r\nFlexbox is a powerful layout model in CSS that makes centering elements relatively easy.\r\n\r\nHTML:\r\nhtml\r\nCopy code\r\n<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n  <meta charset=\"UTF-8\">\r\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n  <link rel=\"stylesheet\" href=\"styles.css\">\r\n  <title>Centering a Div</title>\r\n</head>\r\n<body>\r\n  <div class=\"center-container\">\r\n    <div class=\"centered-div\">\r\n      <!-- Content goes here -->\r\n    </div>\r\n  </div>\r\n</body>\r\n</html>\r\nCSS (styles.css):\r\ncss\r\nCopy code\r\nbody {\r\n  margin: 0;\r\n  display: flex;\r\n  justify-content: center;\r\n  align-items: center;\r\n  min-height: 100vh;\r\n}\r\n\r\n.center-container {\r\n  display: flex;\r\n  justify-content: center;\r\n  align-items: center;\r\n  width: 100%;\r\n}\r\n\r\n.centered-div {\r\n  /* Add styling to your centered div */\r\n}\r\nMethod 2: Using Grid\r\nAnother modern approach is using CSS Grid for centering.\r\n\r\nHTML (same as in Method 1)\r\n\r\nCSS (styles.css):\r\n\r\ncss\r\nCopy code\r\nbody {\r\n  margin: 0;\r\n  display: grid;\r\n  place-items: center;\r\n  min-height: 100vh;\r\n}\r\n\r\n.center-container {\r\n  /* You can remove this container if not needed */\r\n}\r\n\r\n.centered-div {\r\n  /* Add styling to your centered div */\r\n}\r\nRemember, you can customize the styles in the .centered-div according to your design needs.\r\n\r\nMethod 3: Using Absolute Positioning\r\nThis method involves using position: absolute along with left and top properties.\r\n\r\nHTML (same as in Method 1)\r\n\r\nCSS (styles.css):\r\n\r\ncss\r\nCopy code\r\nbody {\r\n  margin: 0;\r\n  position: relative;\r\n  min-height: 100vh;\r\n}\r\n\r\n.center-container {\r\n  position: absolute;\r\n  top: 50%;\r\n  left: 50%;\r\n  transform: translate(-50%, -50%);\r\n}\r\n\r\n.centered-div {\r\n  /* Add styling to your centered div */\r\n}\r\nThese are just a few methods to center a <div> element in HTML and CSS. Choose the one that best fits your project\'s requirements and your personal coding style. Remember to adapt the styles and content as needed for your specific use case.', 1, 30, 'https://i0.pickpik.com/photos/836/993/134/code-coding-web-development-preview.jpg', NULL, '2023-09-11 08:42:41'),
(2, 'How to install PHP', 'how-to-install-php', 'Installing PHP on Windows:\r\n\r\nDownload PHP:\r\nGo to the official PHP website (https://www.php.net/downloads.php) and download the Windows Installer for the latest version of PHP.\r\n\r\nRun the Installer:\r\nRun the downloaded installer and follow the installation wizard\'s instructions. Choose the components you want to install (usually you\'ll want to include extensions like MySQL support), select a destination folder (e.g., C:\\PHP), and add PHP to the system PATH when prompted.\r\n\r\nConfigure Web Server:\r\nIf you\'re planning to use PHP with a web server like Apache, you\'ll need to configure the server to recognize PHP files. This involves editing your server\'s configuration file (like httpd.conf for Apache) and adding lines to associate .php files with PHP processing. Don\'t forget to restart the server after making changes.\r\n\r\nInstalling PHP on macOS:\r\n\r\nHomebrew Method (Recommended):\r\nIf you have Homebrew installed, you can use it to install PHP easily. Open Terminal and run the following commands:\r\n\r\nsql\r\nCopy code\r\nbrew update\r\nbrew install php\r\nManual Method:\r\nYou can also install PHP manually by downloading the source code from the official PHP website. Extract the downloaded archive and follow the instructions in the included README file to compile and install PHP.\r\n\r\nInstalling PHP on Linux:\r\n\r\nUsing Package Manager:\r\nOn most Linux distributions, you can use the package manager to install PHP. For example, on Ubuntu, you can run:\r\n\r\nsql\r\nCopy code\r\nsudo apt update\r\nsudo apt install php\r\nManual Compilation:\r\nSimilar to macOS, you can also download the PHP source code and compile it manually on Linux. Check the official PHP website for detailed instructions.\r\n\r\nVerifying Installation:\r\n\r\nAfter installation, you can verify that PHP is working by opening a terminal or command prompt and typing:\r\n\r\nCopy code\r\nphp -v\r\nThis should display the installed PHP version and other information.\r\n\r\nRemember to check the PHP documentation for any specific configuration steps or additional extensions you might need based on your project requirements.\r\n\r\nPlease note that the installation steps provided here are basic guidelines. The exact steps may vary depending on your system and specific use case. Always refer to the official PHP documentation and resources for the most accurate and up-to-date information.', 0, 0, 'https://www.josh-digital.com/wp-content/uploads/2019/03/php-151199_1280.png', NULL, NULL),
(5, 'test test', 'test-test', 'sfbdf sfhsdf isdfds fsdfs dfsdf sfsdf s', 1, 23, 'https://img.phonandroid.com/2022/10/BMW-iX-8.jpg', '2023-08-15 04:17:38', '2023-09-11 08:42:33'),
(6, 'titre test 18', 'titre-test-18', 'gfdgfgfdgdfg gf gg gdgdf gdfgdf gdfgdf gdfg dfg', 0, 0, 'https://cloudfront-eu-central-1.images.arcpublishing.com/ipmgroup/K5T3RAWELNA5NENFIGJAF7I5OQ.jpg', '2023-08-15 16:10:39', '2023-08-15 16:10:39'),
(7, 'titre 12 test', 'titre-12-test', 'vnjidf nFNJI DSNF DNSKMFN KLDFN  NDSNJIDL JNQJLDN JKQNK DNJKLQN KDLFN JKQLNJKL FSJDKLQ NJKLNDFKJ LDQNFJK L', 0, 8, 'https://cloudfront-eu-central-1.images.arcpublishing.com/ipmgroup/K5T3RAWELNA5NENFIGJAF7I5OQ.jpg', '2023-08-15 16:52:06', '2023-08-15 16:52:06'),
(8, 'Les voitures vroum vroum', 'le-popo-du-caca', 'isufid sbdifb ifdb fhldsbhfhjdf hjsfd fhjq fhl fsdhf djfqh fhdf hjqsf hdfqsjfd fhjqs fhjdhj sdfhd fhjqfsdfh dsqhf df qfhf dsqhfhjdfsq', 1, 12, 'https://i.ytimg.com/vi/snKH7BQVt8Q/maxresdefault.jpg', '2023-08-21 10:27:56', '2023-09-11 10:42:16'),
(9, 'La fête aux moule d\'Estraplon', 'la-fete-aux-moule-destraplon', 'Salut dsni osdsio sndiosndoisdnsodnsodnsdlsndjslndsjdns djnsdj nsjdns jdsnd jskdnsjkd nsdjsnd sjknsjdk ndsjdns jdksndjksnsjk nsdjks nddskjdns jksndjks ndsjkdns djksndsjd nsdfbfldsf qsidfbs ilb gqgb filbqfkg gqfg ff gfq bfjkgb kjqbgjk flbfkjlg bqkjl', 0, 0, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScM_KqAMvkRL9D-MqUTAZUw2zpHo57cWc-EA&usqp=CAU', '2023-08-22 03:47:01', '2023-08-22 03:47:01'),
(10, 'An other test again', 'an-other-test-again', 'sui bqsiud hquidsqh uiqshd qsuhqsud hquhduqsidh quiqhduiqs hdqsuidhq uidhduishdui dhsuidhqs uiqsduishd uiqhsdu hsduish duidhqsuid hudishduis dhsuidhq iudqshuiqshd uihsiudh qsuiqhduisdh quidhsid qhduisdhqsui dhsquidhqsduiqsbdjqhdbkdbdfu bf usydfy fdsf fdsf gufyfd sgfidsfs fgdf', 0, 3, 'https://img.phonandroid.com/2022/10/BMW-iX-8.jpg', '2023-08-23 06:27:52', '2023-08-23 06:27:52'),
(11, 'youcephe', 'youcephe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora facere aspernatur praesentium perferendis quam distinctio provident aut qui deleniti a iste dolorem aliquam inventore, maiores laboriosam ratione placeat impedit fugit.', 2, 0, 'https://www.01net.com/app/uploads/2023/04/schtroumpf-smurf.jpg', '2023-08-28 05:37:09', '2023-09-11 08:42:27'),
(13, 'eran', 'eran', 'fsdjfop sdfiopsd jkfiopsdf jkf sdfopsdkfop fksdop fksd opfsdfop sdopsd fksdopf ksdopsdkfop sdkopsdfk sdopfk', 9, 0, 'https://cdn.motor1.com/images/mgl/JO3m6Q/s1/4x3/peugeot-208.webp', '2023-09-11 10:42:50', '2023-09-11 11:05:27');

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_09_072159_create_projects_table', 1),
(6, '2023_08_09_072235_create_blogs_table', 1),
(8, '2023_08_14_060003_change_click_to_nullable_in_blogs_table', 2),
(9, '2023_08_20_104853_add_visible_colummn_in_projects_table', 3),
(10, '2023_08_24_045747_add_source_column_in_projects_table', 4);

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `title`, `body`, `stack`, `link_url`, `image_url`, `created_at`, `updated_at`, `visible`, `source`) VALUES
(6, 'Mamwe', 'Real customer project carried out as part of our training within CF2M in a team of four. Almost every part of the website have to be customizable by the client, so we create a quiet big admin\'s section. On top of that we have a Mailer, a guestbook, an authentification process, where she also can change her password with her mail adress... We also had to request infos and validation by the client on a regular basis wich was new and necessary since it was her website and not just our project! A very rewarding task at large!', 'PHP OO|||MySQL|||JS|||HTML|||CSS', 'https://mamwe.be/', 'asset/img/mamwe.png', NULL, '2023-08-24 04:26:44', 0, 'https://github.com/JonRauzy/mamwe'),
(5, 'Cuivre Music', 'First team project made for the CF2M, we were four on this one. One of our teacher played the client and we had to follow his request. It\'s a kind of blog/wiki about brass musical instruments where instruments can be sort out by category and newest. With a fully fonctionnal admin section (CRUD, mailer, authentification and such). This one was a bit rough, we had to learn to work as a team for the first time and how not to step one someone else toe while coding our parts!', 'PHP Procedural|||MySQL|||HTML|||CSS|||JS', 'https://2022.webdev-cf2m.be/jonathan/cuivremusic/public/', 'asset/img/cuivre-music.png', NULL, '2023-08-24 03:22:11', 0, 'https://github.com/JonRauzy/armstrong'),
(7, 'Portfolio', 'This is the very website you\'re visiting right now! I took some time out my summer holydays to teach myself Laravel, Blade and Tailwind. And now I think I have a crush on Laravel. Yes I had some days of frustration, trying to figure what\'s what and digging solutions on google, but overall, it was a very rewarding piece of work. I added a blog section to learn how to CRUD in Laravel, I wrote some functionnalities on top of it, like \'likes\' and \'comments\' and I think I will keep on working on this blog section to test out some features I wanna learn or just for the fun of it!', 'Laravel|||Blade|||TailWind', 'https://2022.webdev-cf2m.be/', '/asset/img/portfolioV2.png', NULL, '2023-08-24 03:19:23', 0, 'https://github.com/JonRauzy/pf2'),
(4, 'Mock Portfolio', 'School asked us to do a first draft of a portfolio mid-year. With a connection but no CRUD and a dark mode in JS', 'PHP|||MySQL|||CSS|||HTML|||JS', 'https://2022.webdev-cf2m.be/jonathan/portfolio/public/', 'asset/img/portfolioV1.png', '2023-08-23 11:50:42', '2023-08-24 03:21:49', 0, 'https://github.com/JonRauzy/portfolio'),
(3, 'Livre D\'or (Guestbook)', 'This one was fun to do! It\'s an oldschool guestbook. All we needed is to send message via the form then retrieve it and showcase it on the same page. It\'s responsive for tablets and phones, the whole design was provided by the teachers and it\'s also our first project to deal with a proper back-end. Meaning a MySQL DataBase and SQL requests. We put a captcha in JS on top of it to unsure user is not  a bot. we had 2 days to make it, wich was quiet motivating.', 'PHP|||MySQL|||CSS|||HTML|||JS', 'https://2022.webdev-cf2m.be/jonathan/livre_d_or/public/', 'asset/img/livre-d-or.png', '2023-08-23 11:58:43', '2023-08-25 04:09:46', 0, 'https://github.com/JonRauzy/TI2/tree/jon'),
(1, 'Pré-formation', 'This is the first very first project we were asked to do at the cf2m. We had to do our best using only few weeks worth of HTML/CSS courses to see how motivated we are and we stepped in the right direction as students. It\'s super basic and unresponsive but it reminds how far i came!', 'HTML|||CSS', 'https://2022.webdev-cf2m.be/jonathan/prefo/', 'asset/img/preformation.png', '2023-08-23 12:05:41', '2023-08-24 04:20:11', 0, 'none'),
(2, 'Helsinki', 'Showcase website of the city of Helsinki. First project using PHP, consistiong mainly of a switch as a router. We had the whole design, pictures and texts provided by the teachers and had to follow accordingly using vanilla HTML/CSS.  We had one day to do it wich is pretty motivating for me', 'HTML|||CSS|||PHP', 'https://2022.webdev-cf2m.be/jonathan/JonHelsinki/', 'asset/img/helsinki.PNG', '2023-09-11 11:03:37', '2023-09-11 11:03:53', 0, 'none');

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'toto', 'toto@mail.com', NULL, '$2y$10$UvVe8NOVj4XZzyU5Zk3SSut/PN/JAslMmxxgMjUGWAqYT7W66thHu', NULL, '2023-08-13 07:04:01', '2023-08-13 07:04:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
