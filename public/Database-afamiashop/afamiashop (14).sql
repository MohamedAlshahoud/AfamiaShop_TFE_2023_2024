-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 juin 2024 à 23:16
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `afamiashop`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code_postal` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `address`
--

INSERT INTO `address` (`id`, `user_id`, `code_postal`, `city`, `phone`, `address`, `country`, `first_name`, `last_name`) VALUES
(101, 67, '4000', 'Liège', '0489470853', 'Quai de rome 99', 'BE', 'Mohamed', 'Alshahoud'),
(102, 77, '4000', 'Liège', '0489444321', 'Rue saint gille 243', 'BE', 'Ammar', 'Khatab'),
(103, 77, '4000', 'Liège', '0489444321', 'Rue de Frangée 73', 'BE', 'Ammar', 'Khatab');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'New Products', 'Presentation of the latest products added to the site\'s product range with descriptions, images and a link to the corresponding page.'),
(2, 'New Categories', 'Presentation of the latest categories added to the site with descriptions, images and a link to the corresponding page.'),
(3, 'Event Announcements', 'Inform of the release date of new products and categories before displaying them on the site');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `image`) VALUES
(13, 'Bracelets', 'Bracelets', '843bfd9e492d341b1e001f5b58a506546fe766c7.jpg'),
(14, 'Charms', 'charms', 'b78c78f9393336b69fdcb9c858add49664eaf9cf.webp'),
(16, 'Necklaces', 'Women\'s  and Men\'s Necklaces', '5a5e779e2acf612469c8bdb5f5887a64da6b8039.jpg'),
(17, 'Earrings', 'Women\'s Earrings', '17da3f55aeaeb94c314c650d271ddcd032f9753b.jpg'),
(18, 'Medals', 'Women and Men  Medals', 'd6df77a4056e78a4113e5fec2ad9dc4f490b1e84.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `color`
--

INSERT INTO `color` (`id`, `name`, `description`) VALUES
(4, 'White', 'White color'),
(5, 'Silver White', 'Silver white  color'),
(6, 'Yellow', 'Yellow color'),
(7, 'Black', 'Black color'),
(9, 'White Black', 'White Black color'),
(10, 'Silver', 'Silver color');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `annonces_id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `annonces_id`, `content`, `email`, `username`, `created_at`) VALUES
(35, 353, 'Je suis absolument ravi de mon achat!', 'alshahoudmohamed95@gmail.com', 'Alhaj', '2024-06-03 19:31:34'),
(36, 353, 'La qualité est exceptionnelle', 'alshahoudmohamed95@gmail.com', 'Barakat', '2024-06-03 19:33:17'),
(37, 360, 'Il est très confortable à porter', 'ay1665ay@gmail.com', 'Laham', '2024-06-03 19:37:53'),
(39, 478, 'Très bonne qualité', 'ay1665ay@gmail.com', 'Mohamed Alshahoud', '2024-06-13 20:33:44');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `is_read`) VALUES
(26, 'Ammar Khatab', 'alshahoudmohamed95@gmail.com', '0489444321', 'Livraison', 'Bonjour, la livraison est disponible dans toute la Belgique ?', '2024-06-13 21:15:03', 1);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20231122165258', '2023-11-22 17:53:07', 57),
('DoctrineMigrations\\Version20231122172036', '2023-11-22 18:20:42', 41),
('DoctrineMigrations\\Version20231122174036', '2023-11-22 18:40:41', 11),
('DoctrineMigrations\\Version20231129135740', '2023-11-29 15:03:01', 294),
('DoctrineMigrations\\Version20231129150618', '2023-11-29 16:06:31', 28),
('DoctrineMigrations\\Version20231130160110', '2023-11-30 17:01:19', 81),
('DoctrineMigrations\\Version20231130160959', '2023-11-30 17:10:03', 20),
('DoctrineMigrations\\Version20231130200454', '2023-11-30 21:05:00', 70),
('DoctrineMigrations\\Version20231130211558', '2023-11-30 22:16:06', 11),
('DoctrineMigrations\\Version20231130214830', '2023-11-30 22:48:36', 24),
('DoctrineMigrations\\Version20231130215805', '2023-11-30 22:58:10', 24),
('DoctrineMigrations\\Version20231130221857', '2023-11-30 23:19:00', 29),
('DoctrineMigrations\\Version20231202132745', '2023-12-02 14:27:53', 41),
('DoctrineMigrations\\Version20231202185701', '2023-12-02 19:57:11', 47),
('DoctrineMigrations\\Version20231202193858', '2023-12-02 20:39:03', 17),
('DoctrineMigrations\\Version20231202210559', '2023-12-02 22:06:03', 19),
('DoctrineMigrations\\Version20231204183021', '2023-12-04 19:30:29', 46),
('DoctrineMigrations\\Version20231204185455', '2023-12-04 19:55:08', 78),
('DoctrineMigrations\\Version20231204201916', '2023-12-04 21:19:20', 13),
('DoctrineMigrations\\Version20231204203851', '2023-12-04 21:38:54', 11),
('DoctrineMigrations\\Version20231204221353', '2023-12-04 23:13:58', 19),
('DoctrineMigrations\\Version20231205012216', '2023-12-05 02:22:26', 111),
('DoctrineMigrations\\Version20231205014300', '2023-12-05 02:43:06', 23),
('DoctrineMigrations\\Version20231205023214', '2023-12-05 03:32:17', 50),
('DoctrineMigrations\\Version20231205024505', '2023-12-05 03:45:08', 20),
('DoctrineMigrations\\Version20231205133718', '2023-12-05 14:37:26', 47),
('DoctrineMigrations\\Version20231205153034', '2023-12-05 16:30:40', 22),
('DoctrineMigrations\\Version20231205153250', '2023-12-05 16:32:55', 20),
('DoctrineMigrations\\Version20231205153917', '2023-12-05 16:39:20', 23),
('DoctrineMigrations\\Version20231205192435', '2023-12-05 20:24:40', 41),
('DoctrineMigrations\\Version20231205192623', '2023-12-05 20:26:34', 16),
('DoctrineMigrations\\Version20231209202126', '2023-12-09 21:21:34', 73),
('DoctrineMigrations\\Version20231209204312', '2023-12-09 21:43:15', 17),
('DoctrineMigrations\\Version20231209205157', '2023-12-09 21:52:01', 34),
('DoctrineMigrations\\Version20231210020352', '2023-12-10 03:04:00', 120),
('DoctrineMigrations\\Version20231210024523', '2023-12-10 03:45:28', 52),
('DoctrineMigrations\\Version20231210030103', '2023-12-10 04:01:06', 10),
('DoctrineMigrations\\Version20231210030256', '2023-12-10 04:03:00', 9),
('DoctrineMigrations\\Version20231210035059', '2023-12-10 04:51:02', 58),
('DoctrineMigrations\\Version20231214221240', '2023-12-14 23:12:46', 52),
('DoctrineMigrations\\Version20231216181448', '2023-12-19 06:22:01', 40),
('DoctrineMigrations\\Version20231216183245', '2023-12-19 06:22:01', 5),
('DoctrineMigrations\\Version20231216185314', '2023-12-19 06:22:01', 20),
('DoctrineMigrations\\Version20231218140711', '2023-12-19 06:22:01', 57),
('DoctrineMigrations\\Version20231219052342', '2023-12-19 06:23:46', 180),
('DoctrineMigrations\\Version20231219060358', '2023-12-19 07:04:02', 30),
('DoctrineMigrations\\Version20231219062007', '2023-12-19 07:20:11', 230),
('DoctrineMigrations\\Version20231219223242', '2023-12-19 23:32:46', 38),
('DoctrineMigrations\\Version20231223012122', '2023-12-23 02:21:30', 109),
('DoctrineMigrations\\Version20231224203341', '2023-12-24 21:33:48', 75),
('DoctrineMigrations\\Version20231226160923', '2023-12-26 17:09:30', 132),
('DoctrineMigrations\\Version20231226180757', '2023-12-26 19:08:09', 761),
('DoctrineMigrations\\Version20231226200245', '2023-12-26 21:02:49', 43),
('DoctrineMigrations\\Version20240104151411', '2024-01-04 16:14:21', 121),
('DoctrineMigrations\\Version20240104162104', '2024-01-04 17:21:11', 133),
('DoctrineMigrations\\Version20240109171923', '2024-01-09 18:19:28', 226),
('DoctrineMigrations\\Version20240109193634', '2024-01-09 20:36:39', 70),
('DoctrineMigrations\\Version20240109195351', '2024-01-09 20:53:55', 8),
('DoctrineMigrations\\Version20240109204742', '2024-01-09 21:47:46', 9),
('DoctrineMigrations\\Version20240109205116', '2024-01-09 21:51:19', 8),
('DoctrineMigrations\\Version20240110170947', '2024-01-10 18:10:12', 80),
('DoctrineMigrations\\Version20240111122745', '2024-01-11 13:27:50', 60),
('DoctrineMigrations\\Version20240114185432', '2024-01-14 19:54:37', 91),
('DoctrineMigrations\\Version20240115145606', '2024-01-15 15:56:13', 138),
('DoctrineMigrations\\Version20240115153820', '2024-01-15 16:38:23', 30),
('DoctrineMigrations\\Version20240115200006', '2024-01-15 21:00:11', 21),
('DoctrineMigrations\\Version20240115201212', '2024-01-15 21:12:15', 11),
('DoctrineMigrations\\Version20240115201336', '2024-01-15 21:13:39', 12),
('DoctrineMigrations\\Version20240120152919', '2024-01-20 16:29:31', 65),
('DoctrineMigrations\\Version20240120164242', '2024-01-20 17:42:48', 18),
('DoctrineMigrations\\Version20240122185922', '2024-01-22 19:59:28', 66),
('DoctrineMigrations\\Version20240122190836', '2024-01-22 20:08:40', 11),
('DoctrineMigrations\\Version20240123190940', '2024-01-23 20:09:44', 401),
('DoctrineMigrations\\Version20240123211932', '2024-01-23 22:19:36', 78),
('DoctrineMigrations\\Version20240124150645', '2024-01-24 16:06:52', 378),
('DoctrineMigrations\\Version20240124153433', '2024-01-24 16:34:38', 115),
('DoctrineMigrations\\Version20240125164159', '2024-01-25 17:42:05', 156),
('DoctrineMigrations\\Version20240125215533', '2024-01-25 22:55:39', 307),
('DoctrineMigrations\\Version20240129212739', '2024-01-29 22:27:42', 1558),
('DoctrineMigrations\\Version20240129215836', '2024-01-29 22:58:40', 388),
('DoctrineMigrations\\Version20240129220720', '2024-01-29 23:07:24', 14),
('DoctrineMigrations\\Version20240130114122', '2024-01-30 12:41:26', 11),
('DoctrineMigrations\\Version20240130114429', '2024-01-30 12:44:32', 12),
('DoctrineMigrations\\Version20240130115716', '2024-01-30 12:57:19', 12),
('DoctrineMigrations\\Version20240130130552', '2024-01-30 14:05:56', 58),
('DoctrineMigrations\\Version20240130132746', '2024-01-30 14:27:48', 10),
('DoctrineMigrations\\Version20240130144931', '2024-01-30 15:49:36', 54),
('DoctrineMigrations\\Version20240131184040', '2024-01-31 19:40:46', 61),
('DoctrineMigrations\\Version20240131192916', '2024-01-31 20:29:20', 12),
('DoctrineMigrations\\Version20240131200158', '2024-01-31 21:02:02', 11),
('DoctrineMigrations\\Version20240201133829', '2024-02-01 14:38:33', 16),
('DoctrineMigrations\\Version20240201155039', '2024-02-01 16:50:46', 15),
('DoctrineMigrations\\Version20240201170847', '2024-02-01 18:08:52', 105),
('DoctrineMigrations\\Version20240201171129', '2024-02-01 18:11:33', 16),
('DoctrineMigrations\\Version20240201183124', '2024-02-01 19:31:28', 12),
('DoctrineMigrations\\Version20240201191549', '2024-02-01 20:15:52', 16),
('DoctrineMigrations\\Version20240201192803', '2024-02-01 20:28:05', 13),
('DoctrineMigrations\\Version20240201203759', '2024-02-01 21:38:02', 69),
('DoctrineMigrations\\Version20240201204940', '2024-02-01 21:49:43', 14),
('DoctrineMigrations\\Version20240201210110', '2024-02-01 22:01:13', 15),
('DoctrineMigrations\\Version20240202001028', '2024-02-02 01:10:34', 122),
('DoctrineMigrations\\Version20240202003217', '2024-02-02 01:32:23', 82),
('DoctrineMigrations\\Version20240202134253', '2024-02-02 14:42:59', 100),
('DoctrineMigrations\\Version20240202141029', '2024-02-02 15:10:33', 68),
('DoctrineMigrations\\Version20240202141607', '2024-02-02 15:16:12', 15),
('DoctrineMigrations\\Version20240202142422', '2024-02-02 15:24:27', 17),
('DoctrineMigrations\\Version20240202144448', '2024-02-02 15:44:51', 75),
('DoctrineMigrations\\Version20240202145116', '2024-02-02 15:51:19', 14),
('DoctrineMigrations\\Version20240202151044', '2024-02-02 16:10:48', 15),
('DoctrineMigrations\\Version20240202151926', '2024-02-02 16:19:29', 20),
('DoctrineMigrations\\Version20240202154305', '2024-02-02 16:43:08', 16),
('DoctrineMigrations\\Version20240202162118', '2024-02-02 17:21:21', 18),
('DoctrineMigrations\\Version20240202162256', '2024-02-02 17:22:59', 68),
('DoctrineMigrations\\Version20240205134304', '2024-02-05 14:43:09', 85),
('DoctrineMigrations\\Version20240207152438', '2024-02-07 16:24:43', 149),
('DoctrineMigrations\\Version20240207155704', '2024-02-07 16:57:07', 44),
('DoctrineMigrations\\Version20240207163238', '2024-02-07 17:32:41', 24),
('DoctrineMigrations\\Version20240207164400', '2024-02-07 17:44:03', 16),
('DoctrineMigrations\\Version20240207173714', '2024-02-07 18:37:18', 139),
('DoctrineMigrations\\Version20240207193746', '2024-02-07 20:37:50', 17),
('DoctrineMigrations\\Version20240207194350', '2024-02-07 20:43:54', 13),
('DoctrineMigrations\\Version20240208183345', '2024-02-08 19:33:49', 67),
('DoctrineMigrations\\Version20240208184630', '2024-02-08 19:46:34', 13),
('DoctrineMigrations\\Version20240210184422', '2024-02-10 19:44:30', 64),
('DoctrineMigrations\\Version20240210185438', '2024-02-10 19:54:42', 10),
('DoctrineMigrations\\Version20240210190418', '2024-02-10 20:04:23', 44),
('DoctrineMigrations\\Version20240210194052', '2024-02-10 20:40:55', 35),
('DoctrineMigrations\\Version20240210194155', '2024-02-13 17:32:23', 46),
('DoctrineMigrations\\Version20240213163217', '2024-02-13 17:32:23', 3),
('DoctrineMigrations\\Version20240213213353', '2024-02-13 22:34:04', 14),
('DoctrineMigrations\\Version20240220192500', '2024-02-20 20:25:17', 68),
('DoctrineMigrations\\Version20240220203350', '2024-02-20 21:33:54', 18),
('DoctrineMigrations\\Version20240220211931', '2024-02-20 22:19:34', 70),
('DoctrineMigrations\\Version20240223150602', '2024-02-23 16:06:09', 18),
('DoctrineMigrations\\Version20240223160534', '2024-02-23 17:05:40', 70),
('DoctrineMigrations\\Version20240223190145', '2024-02-23 20:01:48', 12),
('DoctrineMigrations\\Version20240223191455', '2024-02-23 20:14:59', 14),
('DoctrineMigrations\\Version20240223200859', '2024-02-23 21:09:04', 9),
('DoctrineMigrations\\Version20240223202719', '2024-02-23 21:27:24', 38),
('DoctrineMigrations\\Version20240225182952', '2024-02-25 19:32:00', 72),
('DoctrineMigrations\\Version20240312143816', '2024-03-12 15:38:20', 15),
('DoctrineMigrations\\Version20240312152545', '2024-03-12 16:25:51', 15),
('DoctrineMigrations\\Version20240312155628', '2024-03-12 16:56:35', 19),
('DoctrineMigrations\\Version20240312164415', '2024-03-12 17:44:19', 54),
('DoctrineMigrations\\Version20240312165122', '2024-03-12 17:51:26', 34),
('DoctrineMigrations\\Version20240312165437', '2024-03-12 17:54:40', 67),
('DoctrineMigrations\\Version20240312165720', '2024-03-12 17:57:28', 51),
('DoctrineMigrations\\Version20240312173518', '2024-03-12 18:35:23', 188),
('DoctrineMigrations\\Version20240424160322', '2024-04-24 18:03:27', 334),
('DoctrineMigrations\\Version20240507135050', '2024-05-07 15:51:28', 33),
('DoctrineMigrations\\Version20240507140424', '2024-05-07 16:04:27', 14),
('DoctrineMigrations\\Version20240507171309', '2024-05-07 19:13:16', 68),
('DoctrineMigrations\\Version20240512191943', '2024-05-12 21:19:58', 13),
('DoctrineMigrations\\Version20240512230233', '2024-05-13 01:02:39', 63),
('DoctrineMigrations\\Version20240513112120', '2024-05-13 13:21:25', 71),
('DoctrineMigrations\\Version20240519234843', '2024-05-20 11:41:50', 11),
('DoctrineMigrations\\Version20240522214554', '2024-05-22 23:45:56', 39),
('DoctrineMigrations\\Version20240522214746', '2024-05-22 23:47:50', 155),
('DoctrineMigrations\\Version20240613124717', '2024-06-13 14:47:22', 82),
('DoctrineMigrations\\Version20240617143828', '2024-06-17 16:38:32', 78),
('DoctrineMigrations\\Version20240617145129', '2024-06-17 16:51:32', 20),
('DoctrineMigrations\\Version20240617145501', '2024-06-17 16:55:04', 112),
('DoctrineMigrations\\Version20240617154009', '2024-06-17 17:40:11', 16),
('DoctrineMigrations\\Version20240617180549', '2024-06-17 20:05:52', 54),
('DoctrineMigrations\\Version20240617182001', '2024-06-17 20:20:03', 255),
('DoctrineMigrations\\Version20240617183706', '2024-06-17 20:37:08', 32),
('DoctrineMigrations\\Version20240618201842', '2024-06-18 22:20:15', 39),
('DoctrineMigrations\\Version20240618201923', '2024-06-18 22:20:15', 5),
('DoctrineMigrations\\Version20240618202012', '2024-06-18 22:20:15', 3),
('DoctrineMigrations\\Version20240618202343', '2024-06-18 22:23:45', 35),
('DoctrineMigrations\\Version20240618202410', '2024-06-18 22:24:12', 40);

-- --------------------------------------------------------

--
-- Structure de la table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `gender`
--

INSERT INTO `gender` (`id`, `name`, `description`) VALUES
(1, 'Man', 'Man product'),
(2, 'Women', 'Women product');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messenger_messages`
--

INSERT INTO `messenger_messages` (`id`, `body`, `headers`, `queue_name`, `created_at`, `available_at`, `delivered_at`) VALUES
(1, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:170:\\\"http://127.0.0.1:8000/verify/email?expires=1700886641&id=6&signature=TWdhGzMi5P6rCFNR1ld1lMjCZDY5Iz3IbIuBP6vU8qo%3D&token=vhS2GqfAMsG0y7QUug%2B7vtB8wJAnhG5qdE6QSCTBByA%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:6:\\\"Afamia\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:16:\\\"testt3@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-11-25 03:30:41', '2023-11-25 03:30:41', NULL),
(2, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:180:\\\"http://127.0.0.1:8000/verify/email?expires=1700886675&id=7&signature=%2Bs%2Fn%2BklEfLG%2BVEgTGRrdRC5cRIlQ7opptHjz1r5J4GE%3D&token=y03fbEMNmbULlUslEtgjKZE%2B7%2FHXEu2V3VUwblBbDTU%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:6:\\\"Afamia\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"alalwanzahraa19995@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-11-25 03:31:15', '2023-11-25 03:31:15', NULL),
(3, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:172:\\\"http://127.0.0.1:8000/verify/email?expires=1701111681&id=8&signature=6Tq7fWuxmaoAFnLGVXsl2A%2BBUymT9Zf0EhOcClzI9AA%3D&token=cdjF1qb3Dqn7zLcFLSbNH5NM6wmJLH%2BPgXOjr0bjpRs%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:6:\\\"Afamia\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-11-27 18:01:21', '2023-11-27 18:01:21', NULL),
(4, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:179:\\\"http://127.0.0.1:8000/verify/email?expires=1701551413&id=11&signature=T61LA8SZ6iiQWLLq5%2B%2BiZM%2FUSCrX5t1A8wIVH8U3osQ%3D&token=0kTQl%2FvDY0HEbiyVcCfGb%2F3a5a6miwKK6uo6XyZmh8I%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:6:\\\"Afamia\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:16:\\\"test22@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-02 20:10:13', '2023-12-02 20:10:13', NULL),
(5, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:171:\\\"http://127.0.0.1:8002/verify/email?expires=1702167737&id=16&signature=B7ODqh3oarsNPP0IR23wvGSHqVAbUV16hRDnSpTWavs%3D&token=xplQn3scm9hAyK%2FqS8IgMowSfscr75TAlbY08b2WjwY%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:6:\\\"Afamia\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:25:\\\"mohamedalhaj403@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-09 23:22:19', '2023-12-09 23:22:19', NULL),
(6, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:167:\\\"http://127.0.0.1:8001/verify/email?expires=1702169088&signature=BfSTfOD1lu8rkS94a5Lyyq9YKzj99y0IpLS%2FZJSCpCg%3D&token=%2FRXBOaF6zdWqBgvEcT3ERt0kGT2POVpWlzK2rT3bkW8%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:6:\\\"Afamia\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:25:\\\"mohamedalhaj403@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-09 23:44:48', '2023-12-09 23:44:48', NULL),
(7, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:167:\\\"http://127.0.0.1:8000/verify/email?expires=1702185765&signature=jHMseURjLII%2FZ7BZN88KQVw7cbMZeBEjZkBvZxdzdA4%3D&token=fDADtW9QUV%2BUEfvKqxXqYmSC52XDCV2FX4Aku9uEhXQ%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:6:\\\"Afamia\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:25:\\\"mohamedalhaj403@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-10 04:22:46', '2023-12-10 04:22:46', NULL),
(8, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:177:\\\"http://127.0.0.1:8000/verify/email?expires=1702186153&signature=o1%2Fr2sz7MT%2FSTMx%2Ftkt%2BNRZtE1fKMM2h%2FDA9Zyk5GCU%3D&token=snPgIag7fQtpnHU5%2FGmmiJq%2BSz3AAqsT8vwne5vN6JU%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:6:\\\"Afamia\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:25:\\\"mohamedalhaj403@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-10 04:29:13', '2023-12-10 04:29:13', NULL),
(9, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:171:\\\"http://127.0.0.1:8000/verify/email?expires=1702564840&id=31&signature=9lcfEC0dFzdv0SSOXSKw4THfUvpFQVgJHbYo1aFacIY%3D&token=kw3KDRp%2FsWxNUJeOCDVYRWptxpmeJ4jgzbdL4wS1RaY%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"contact@afamia.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:18:\\\"\\\\\\\"Afamia Contact\\\\\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-14 13:40:41', '2023-12-14 13:40:41', NULL),
(10, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:171:\\\"http://127.0.0.1:8000/verify/email?expires=1702565551&signature=MShKeWC9tp4NqyXI9VXegyyDcEvs%2Bva2t%2FXmtcTj%2Bds%3D&token=ONPKnVaavxjF5ycnY%2BPkxlYFQyuuf2hnfwfZYWs8048%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:6:\\\"Afamia\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-14 13:52:32', '2023-12-14 13:52:32', NULL),
(11, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:165:\\\"http://127.0.0.1:8000/verify/email?expires=1702565892&signature=gy3kIF4lLC3KseiC9uzKaBF0UDDvFG8bUgHLRt%2F628Y%3D&token=orzbbt34Iq0tVnQTc4rMnXSd4ZgXQ7pspaLSBH2EQpU%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:6:\\\"Afamia\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-14 13:58:12', '2023-12-14 13:58:12', NULL),
(12, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:167:\\\"http://127.0.0.1:8000/verify/email?expires=1702580973&signature=MTAQixDu6z86ylt1XPYxVVGrSTxKXfkCS7TPhg8u7f8%3D&token=UHtulZW6tdcN2OFi%2BFdrLILmTBBvO%2Bxb5Mm65JrK0h4%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:6:\\\"Afamia\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-14 18:09:35', '2023-12-14 18:09:35', NULL);
INSERT INTO `messenger_messages` (`id`, `body`, `headers`, `queue_name`, `created_at`, `available_at`, `delivered_at`) VALUES
(13, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:28:\\\"emails/inscription.html.twig\\\";i:1;N;i:2;a:2:{s:4:\\\"user\\\";O:28:\\\"App\\\\Entity\\\\Newsletters\\\\Users\\\":7:{s:32:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0id\\\";i:2;s:35:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0email\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 07:44:17.163878\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_rgpd\\\";b:1;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0validation_token\\\";s:64:\\\"0b9186126d04bfddfda35253a2e6652c78f81de0916d65ba2a52e7728acb106f\\\";s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_valid\\\";b:0;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0categories\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:1:{i:0;O:33:\\\"App\\\\Entity\\\\Newsletters\\\\Categories\\\":4:{s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0id\\\";i:1;s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0name\\\";s:11:\\\"Actualité \\\";s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0users\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0newsletters\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}}}s:14:\\\"\\0*\\0initialized\\\";b:1;}}s:5:\\\"token\\\";s:64:\\\"0b9186126d04bfddfda35253a2e6652c78f81de0916d65ba2a52e7728acb106f\\\";}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:20:\\\"newsletter@afamia.be\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:34:\\\"Votre inscription à la newsletter\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-19 06:44:17', '2023-12-19 06:44:17', NULL),
(14, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:28:\\\"emails/inscription.html.twig\\\";i:1;N;i:2;a:2:{s:4:\\\"user\\\";O:28:\\\"App\\\\Entity\\\\Newsletters\\\\Users\\\":7:{s:32:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0id\\\";i:3;s:35:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0email\\\";s:25:\\\"mohamedalhaj403@gmail.com\\\";s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 07:48:49.499449\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_rgpd\\\";b:1;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0validation_token\\\";s:64:\\\"d51d8d73582314ce51cd816f65e0d2205e4bf2215588575e032da4fae49a26ac\\\";s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_valid\\\";b:0;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0categories\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:1:{i:0;O:33:\\\"App\\\\Entity\\\\Newsletters\\\\Categories\\\":4:{s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0id\\\";i:1;s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0name\\\";s:11:\\\"Actualité \\\";s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0users\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0newsletters\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}}}s:14:\\\"\\0*\\0initialized\\\";b:1;}}s:5:\\\"token\\\";s:64:\\\"d51d8d73582314ce51cd816f65e0d2205e4bf2215588575e032da4fae49a26ac\\\";}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:25:\\\"mohamedalhaj403@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:34:\\\"Votre inscription à la newsletter\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-19 06:48:49', '2023-12-19 06:48:49', NULL),
(15, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:27:\\\"emails/newsletter.html.twig\\\";i:1;N;i:2;a:2:{s:10:\\\"newsletter\\\";O:34:\\\"App\\\\Entity\\\\Newsletters\\\\Newsletters\\\":6:{s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0id\\\";i:1;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0name\\\";s:4:\\\"test\\\";s:43:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0content\\\";s:12:\\\"<p>hello</p>\\\";s:45:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 18:04:59.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:43:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0is_sent\\\";b:0;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0categories\\\";O:48:\\\"Proxies\\\\__CG__\\\\App\\\\Entity\\\\Newsletters\\\\Categories\\\":4:{s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0id\\\";i:2;s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0name\\\";s:13:\\\"Veille techno\\\";s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0users\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:1:{i:0;O:28:\\\"App\\\\Entity\\\\Newsletters\\\\Users\\\":7:{s:32:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0id\\\";i:1;s:35:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0email\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 07:21:28.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_rgpd\\\";b:1;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0validation_token\\\";s:64:\\\"9e13808858ef5b968b0ff0dbd92ef68381327bd715e9985b801aecd15793f4a2\\\";s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_valid\\\";b:1;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0categories\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}}}s:14:\\\"\\0*\\0initialized\\\";b:1;}s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0newsletters\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}}s:4:\\\"user\\\";r:26;}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:4:\\\"test\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-19 17:41:05', '2023-12-19 17:41:05', NULL),
(16, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:27:\\\"emails/newsletter.html.twig\\\";i:1;N;i:2;a:2:{s:10:\\\"newsletter\\\";O:34:\\\"App\\\\Entity\\\\Newsletters\\\\Newsletters\\\":6:{s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0id\\\";i:1;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0name\\\";s:4:\\\"test\\\";s:43:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0content\\\";s:12:\\\"<p>hello</p>\\\";s:45:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 18:04:59.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:43:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0is_sent\\\";b:0;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0categories\\\";O:48:\\\"Proxies\\\\__CG__\\\\App\\\\Entity\\\\Newsletters\\\\Categories\\\":4:{s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0id\\\";i:2;s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0name\\\";s:13:\\\"Veille techno\\\";s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0users\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:1:{i:0;O:28:\\\"App\\\\Entity\\\\Newsletters\\\\Users\\\":7:{s:32:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0id\\\";i:1;s:35:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0email\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 07:21:28.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_rgpd\\\";b:1;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0validation_token\\\";s:64:\\\"9e13808858ef5b968b0ff0dbd92ef68381327bd715e9985b801aecd15793f4a2\\\";s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_valid\\\";b:1;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0categories\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}}}s:14:\\\"\\0*\\0initialized\\\";b:1;}s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0newsletters\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}}s:4:\\\"user\\\";r:26;}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:4:\\\"test\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-19 17:41:13', '2023-12-19 17:41:13', NULL),
(17, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:27:\\\"emails/newsletter.html.twig\\\";i:1;N;i:2;a:2:{s:10:\\\"newsletter\\\";O:34:\\\"App\\\\Entity\\\\Newsletters\\\\Newsletters\\\":6:{s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0id\\\";i:2;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0name\\\";s:5:\\\"test2\\\";s:43:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0content\\\";s:16:\\\"<p>Bienvenue</p>\\\";s:45:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 18:08:41.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:43:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0is_sent\\\";b:0;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0categories\\\";O:48:\\\"Proxies\\\\__CG__\\\\App\\\\Entity\\\\Newsletters\\\\Categories\\\":4:{s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0id\\\";i:1;s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0name\\\";s:11:\\\"Actualité \\\";s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0users\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:2:{i:0;O:28:\\\"App\\\\Entity\\\\Newsletters\\\\Users\\\":7:{s:32:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0id\\\";i:1;s:35:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0email\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 07:21:28.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_rgpd\\\";b:1;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0validation_token\\\";s:64:\\\"9e13808858ef5b968b0ff0dbd92ef68381327bd715e9985b801aecd15793f4a2\\\";s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_valid\\\";b:1;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0categories\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}i:1;O:28:\\\"App\\\\Entity\\\\Newsletters\\\\Users\\\":7:{s:32:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0id\\\";i:3;s:35:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0email\\\";s:25:\\\"mohamedalhaj403@gmail.com\\\";s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 07:48:49.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_rgpd\\\";b:1;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0validation_token\\\";s:64:\\\"d51d8d73582314ce51cd816f65e0d2205e4bf2215588575e032da4fae49a26ac\\\";s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_valid\\\";b:0;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0categories\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}}}s:14:\\\"\\0*\\0initialized\\\";b:1;}s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0newsletters\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}}s:4:\\\"user\\\";r:26;}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:5:\\\"test2\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-19 17:42:37', '2023-12-19 17:42:37', NULL),
(18, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:27:\\\"emails/newsletter.html.twig\\\";i:1;N;i:2;a:2:{s:10:\\\"newsletter\\\";O:34:\\\"App\\\\Entity\\\\Newsletters\\\\Newsletters\\\":6:{s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0id\\\";i:2;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0name\\\";s:5:\\\"test2\\\";s:43:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0content\\\";s:16:\\\"<p>Bienvenue</p>\\\";s:45:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 18:08:41.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:43:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0is_sent\\\";b:0;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Newsletters\\0categories\\\";O:48:\\\"Proxies\\\\__CG__\\\\App\\\\Entity\\\\Newsletters\\\\Categories\\\":4:{s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0id\\\";i:1;s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0name\\\";s:11:\\\"Actualité \\\";s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0users\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:2:{i:0;O:28:\\\"App\\\\Entity\\\\Newsletters\\\\Users\\\":7:{s:32:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0id\\\";i:1;s:35:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0email\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 07:21:28.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_rgpd\\\";b:1;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0validation_token\\\";s:64:\\\"9e13808858ef5b968b0ff0dbd92ef68381327bd715e9985b801aecd15793f4a2\\\";s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_valid\\\";b:1;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0categories\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}i:1;O:28:\\\"App\\\\Entity\\\\Newsletters\\\\Users\\\":7:{s:32:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0id\\\";i:3;s:35:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0email\\\";s:25:\\\"mohamedalhaj403@gmail.com\\\";s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 07:48:49.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_rgpd\\\";b:1;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0validation_token\\\";s:64:\\\"d51d8d73582314ce51cd816f65e0d2205e4bf2215588575e032da4fae49a26ac\\\";s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_valid\\\";b:0;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0categories\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}}}s:14:\\\"\\0*\\0initialized\\\";b:1;}s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0newsletters\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}}s:4:\\\"user\\\";r:26;}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:5:\\\"test2\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-19 18:13:30', '2023-12-19 18:13:30', NULL),
(19, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:28:\\\"emails/inscription.html.twig\\\";i:1;N;i:2;a:2:{s:4:\\\"user\\\";O:28:\\\"App\\\\Entity\\\\Newsletters\\\\Users\\\":7:{s:32:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0id\\\";i:4;s:35:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0email\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 19:21:55.572874\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_rgpd\\\";b:1;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0validation_token\\\";s:64:\\\"5dda48a36455b147a680616dd891228a6f085930e1a051a0623761f56894e01e\\\";s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_valid\\\";b:0;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0categories\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:2:{i:0;O:33:\\\"App\\\\Entity\\\\Newsletters\\\\Categories\\\":4:{s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0id\\\";i:1;s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0name\\\";s:11:\\\"Actualité \\\";s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0users\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0newsletters\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}i:1;O:33:\\\"App\\\\Entity\\\\Newsletters\\\\Categories\\\":4:{s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0id\\\";i:2;s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0name\\\";s:13:\\\"Veille techno\\\";s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0users\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0newsletters\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}}}s:14:\\\"\\0*\\0initialized\\\";b:1;}}s:5:\\\"token\\\";s:64:\\\"5dda48a36455b147a680616dd891228a6f085930e1a051a0623761f56894e01e\\\";}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:34:\\\"Votre inscription à la newsletter\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-19 18:21:55', '2023-12-19 18:21:55', NULL);
INSERT INTO `messenger_messages` (`id`, `body`, `headers`, `queue_name`, `created_at`, `available_at`, `delivered_at`) VALUES
(20, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:28:\\\"emails/inscription.html.twig\\\";i:1;N;i:2;a:2:{s:4:\\\"user\\\";O:28:\\\"App\\\\Entity\\\\Newsletters\\\\Users\\\":7:{s:32:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0id\\\";i:5;s:35:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0email\\\";s:25:\\\"mohamedalhaj403@gmail.com\\\";s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-12-19 19:22:19.522418\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_rgpd\\\";b:1;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0validation_token\\\";s:64:\\\"e08c06914a63545b1752df67253038dfee0e97d4aac6ff664c84e3d507f65776\\\";s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_valid\\\";b:0;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0categories\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:2:{i:0;O:33:\\\"App\\\\Entity\\\\Newsletters\\\\Categories\\\":4:{s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0id\\\";i:1;s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0name\\\";s:11:\\\"Actualité \\\";s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0users\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0newsletters\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}i:1;O:33:\\\"App\\\\Entity\\\\Newsletters\\\\Categories\\\":4:{s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0id\\\";i:2;s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0name\\\";s:13:\\\"Veille techno\\\";s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0users\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0newsletters\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}}}s:14:\\\"\\0*\\0initialized\\\";b:1;}}s:5:\\\"token\\\";s:64:\\\"e08c06914a63545b1752df67253038dfee0e97d4aac6ff664c84e3d507f65776\\\";}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:25:\\\"mohamedalhaj403@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:34:\\\"Votre inscription à la newsletter\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-19 18:22:19', '2023-12-19 18:22:19', NULL),
(21, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:163:\\\"http://127.0.0.1:8000/verify/email?expires=1703020224&signature=uUdI1WINqX03KJD61BOBeRlIdXsmIYnzUj9domM54OU%3D&token=rnBVuzktzOXJEX5kTAavB0cziL8KEsKhTplLFaZ0tww%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:6:\\\"Afamia\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:26:\\\"alshahoudmohamed@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-12-19 20:10:24', '2023-12-19 20:10:24', NULL),
(22, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:173:\\\"http://127.0.0.1:8000/verify/email?expires=1713979223&id=25&signature=%2FIDQijYMy9dxjP84ATctTn0hmh1h6EeGqPsx%2FgcIAAo%3D&token=AJsVRE9316BHdlMJXP7VZzpzLuJ0CqEd5CNg0Pfp8ks%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"contact@afamia.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:18:\\\"\\\\\\\"Afamia Contact\\\\\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2024-04-24 18:20:23', '2024-04-24 18:20:23', NULL),
(23, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:177:\\\"http://127.0.0.1:8000/verify/email?expires=1713979394&id=26&signature=dXo9Jq0Yr7%2BbfMwJQAFw3t%2FIUvd1osrxeG8533AHTaA%3D&token=%2F%2BxugM61Hf2TqRAiy47VEhluiP6yiTyqkMIlZQBI7Ec%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"contact@afamia.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:18:\\\"\\\\\\\"Afamia Contact\\\\\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:25:\\\"mohamedalhaj403@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2024-04-24 18:23:14', '2024-04-24 18:23:14', NULL),
(24, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:28:\\\"emails/inscription.html.twig\\\";i:1;N;i:2;a:2:{s:4:\\\"user\\\";O:28:\\\"App\\\\Entity\\\\Newsletters\\\\Users\\\":7:{s:32:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0id\\\";i:17;s:35:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0email\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0createdAt\\\";O:8:\\\"DateTime\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-04-24 18:24:01.815671\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:13:\\\"Europe/Berlin\\\";}s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_rgpd\\\";b:1;s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0validation_token\\\";s:64:\\\"3e65197e19f92f325764bdca1295669d72ff393feb9646b859155dca17adf581\\\";s:38:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0is_valid\\\";b:0;s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Users\\0categories\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:3:{i:0;O:33:\\\"App\\\\Entity\\\\Newsletters\\\\Categories\\\":5:{s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0id\\\";i:1;s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0name\\\";s:12:\\\"New Products\\\";s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0description\\\";s:133:\\\"Presentation of the latest products added to the site\\\'s product range with descriptions, images and a link to the corresponding page.\\\";s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0users\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0newsletters\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}i:1;O:33:\\\"App\\\\Entity\\\\Newsletters\\\\Categories\\\":5:{s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0id\\\";i:2;s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0name\\\";s:14:\\\"New Categories\\\";s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0description\\\";s:119:\\\"Presentation of the latest categories added to the site with descriptions, images and a link to the corresponding page.\\\";s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0users\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0newsletters\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}i:2;O:33:\\\"App\\\\Entity\\\\Newsletters\\\\Categories\\\":5:{s:37:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0id\\\";i:3;s:39:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0name\\\";s:19:\\\"Event Announcements\\\";s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0description\\\";s:92:\\\"Inform of the release date of new products and categories before displaying them on the site\\\";s:40:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0users\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}s:46:\\\"\\0App\\\\Entity\\\\Newsletters\\\\Categories\\0newsletters\\\";O:33:\\\"Doctrine\\\\ORM\\\\PersistentCollection\\\":2:{s:13:\\\"\\0*\\0collection\\\";O:43:\\\"Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\\":1:{s:53:\\\"\\0Doctrine\\\\Common\\\\Collections\\\\ArrayCollection\\0elements\\\";a:0:{}}s:14:\\\"\\0*\\0initialized\\\";b:0;}}}}s:14:\\\"\\0*\\0initialized\\\";b:1;}}s:5:\\\"token\\\";s:64:\\\"3e65197e19f92f325764bdca1295669d72ff393feb9646b859155dca17adf581\\\";}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ay1665ay@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"alshahoudmohamed95@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:35:\\\"Your subscription to the newsletter\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2024-04-24 18:24:02', '2024-04-24 18:24:02', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `is_sent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `newsletters`
--

INSERT INTO `newsletters` (`id`, `categories_id`, `name`, `content`, `created_at`, `is_sent`) VALUES
(1, 1, 'New Products', 'Be among the first to get your hands on our latest finds! Our new products are here, ready to enhance your daily life. Be quick, Don\'t wait to add them to your cart before it\'s too late! . We are waiting for you on our website', '2024-01-04 19:07:51', 0),
(5, 3, 'Event Announcements', 'New things are upon us! In three days, you will be able to explore new horizons on our site. Be ready to discover the best we have concocted for you!', '2024-03-06 20:54:40', 0),
(6, 2, 'New Categories', 'Broaden your horizons! We are pleased to announce the arrival of new categories on our site, to better meet all your needs and desires. Take the first step towards discovery by exploring our site now!', '2024-03-06 21:03:54', 0);

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `transporter_name` varchar(255) NOT NULL,
  `transporter_price` double NOT NULL,
  `delivery_address` longtext NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `method` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `order_cost` int(11) NOT NULL,
  `order_cost_ttc` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tva` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order`
--

INSERT INTO `order` (`id`, `user_id`, `created_at`, `transporter_name`, `transporter_price`, `delivery_address`, `is_paid`, `method`, `reference`, `order_cost`, `order_cost_ttc`, `quantity`, `tva`) VALUES
(209, 67, '2024-06-13 20:41:47', 'GLS', 399, 'Mohamed Alshahoud : 0489470853 _Quai de rome 99 , 4000  Liège - BE', 1, 'stripe', '13062024-666b3d6b25194', 1733, 2496, 3, 364),
(210, 77, '2024-06-13 20:56:57', 'DHL', 699, 'Ammar Khatab : 0489444321 _Rue saint gille 243 , 4000  Liège - BE', 1, 'stripe', '13062024-666b40f95aebc', 3466, 4893, 6, 728);

-- --------------------------------------------------------

--
-- Structure de la table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_product_id`, `quantity`, `product`, `price`, `subtotal`) VALUES
(108, 209, 3, 'Silver White Dangling Earrings', 699, 2097),
(109, 210, 6, 'Fancy Yellow Gold Earrings', 699, 4194);

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `test_public_api_key` longtext DEFAULT NULL,
  `test_private_api_key` longtext DEFAULT NULL,
  `prod_public_api_key` longtext DEFAULT NULL,
  `prod_private_api_key` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`id`, `name`, `description`, `image_url`, `test_public_api_key`, `test_private_api_key`, `prod_public_api_key`, `prod_private_api_key`, `created_at`) VALUES
(1, 'Stripe', 'Means of payment by bank card (credit or debit)', 'f0bc9d075c9093cb98212d01bad19ff883d7fdc1.png', 'pk_test_51Mxb2LKGXbHS8qzz0Jl02CSYZUOKBUMD9q6NSfXGBIbE57C3PiAnAAV5nJOqzQ3GlaSIcX7fGTX7fdctZlWYOQ7Q00FmkeomHW', 'sk_test_51Mxb2LKGXbHS8qzzXWo2j1olbqM4xAGpZXmSFp3q8VrHHCleryEIJo4zTcmEsDo9udrNlrwp74kcl5zdxARxKR5R00s9ebJvm8', NULL, NULL, '2024-01-15 16:41:02');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `image_urls` longtext NOT NULL COMMENT '(DC2Type:simple_array)',
  `more_information` longtext DEFAULT NULL,
  `is_new_product` tinyint(1) DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `colors_id` int(11) DEFAULT NULL,
  `genders_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `quantity`, `created_at`, `image_urls`, `more_information`, `is_new_product`, `categories_id`, `colors_id`, `genders_id`) VALUES
(353, 'Fancy Yellow Gold Earrings', 'Yellow Gold Fancy Drop Earrings-1 for women', 699, 69, '2023-12-26 21:02:54', '446b578107646307ea6bca56f5467f71beddab86.webp,6265a4da6c5b4ad822151bd0c9cfa6699e896f18.webp,985dad092478c2e6a48dc37bd09c7c6a3da1f833.webp', 'Fancy Yellow Gold Dangling Earrings-1 for women of very good quality and in two pieces right and left', 1, 17, 6, 2),
(354, 'Yellow Gold Stud Earrings', 'Yellow Gold Stud Earrings Leaf Shapes Paving for women', 699, 75, '2023-12-26 21:02:54', 'dc10971cc8cd89813c01192300ce221505dd754a.jpg,00403b559a499be15f1c95adb80b7b923c98c304.jpg,a5958f68139053eb8449d9aaaa7abdb92386605f.jpg,137986cedcc478d9a0b022d4e49af38f62c7f05c.jpg', 'Yellow Gold Stud Earrings Leaf Shapes Paving Cubic Zirconia-1 for women of 2 pieces right and left and very good quality', 0, 17, 6, 2),
(355, 'Silver Multi Tassel Bracelet', 'Silver Bracelet Multi Tassels Pastilles for women', 899, 85, '2023-12-26 21:02:54', '355c340cb45de370abdf28ad453edea783a2d9a6.webp,0b3c915503f29ef2aa46d812240933ea95699ce1.webp,cedf30cb222210574ea988c4b56bce43510f11a6.jpg', 'Silver Multi Pampilles Pastilles Bracelet for women in one piece which contains several rounded pieces', 0, 13, 10, 2),
(360, 'Head Tassel Steel Bracelet', 'Head Tassel Steel Bracelet for women', 899, 79, '2023-12-26 21:02:54', 'b6a4351f662c2b20ac589696892f03471d0543f6.webp,6dce99174bcb03d2766955e2c86078490c36e8b7.webp,5445c4c8dee559812cfaed3920afa8aa6f05033f.webp,db0fe72713a89f8a07851b9aa0fc2ee4886ec99d.webp', 'Bracelet gold Steel Mickey Head Tassel Paving Crystals And Zirconium Oxides Forçat Mesh 16cm for women in one piece', 1, 13, 6, 2),
(361, 'White Steel normal Bracelet', 'White Steel normal Bracelet for women', 899, 79, '2023-12-26 21:02:54', '0c8d4f22dc07e9251e0fd043818360c9c2977788.jpg,02d3c0b8d7653b78423eefae9f8b7b3eb7563fd1.jpg', 'White Steel normal Bracelet Diameter for women of beautiful and normal model in one piece', 0, 13, 4, 2),
(365, 'Double White Steel Bracelet', 'Double Row White Steel Bracelet Black Agate Beads for men', 899, 81, '2023-12-26 21:02:54', 'a765a48f025435c4252acf95159fdbf71ce4ac08.webp,a3e9927a30ed35484c6c759ba63afa13e358d124.webp,84fb8fd099171777300964b781e9075039816084.jpg,c6ad43f8b50d3639a9badcc4d0dc8a556c9fb43a.jpg', 'Double Row White Steel Bracelet Black Agate Beads 21.5cm-2 for men', 0, 13, 4, 1),
(372, 'Plated Articulated Mesh Bracelet', 'Plated Articulated Mesh Bracelet for men', 999, 85, '2023-12-26 21:02:54', 'c1c72ee6b9f2b74fe29d9133116cf6909010dac6.webp,b935e3553ee2db7ac0a3f4bcbe39213b5a12a223.webp,854f7e12d21b5c5959b405cd9e3ae0e07967a93a.jpg,39ab0d7cd04c5a27b9be126ca293d7d854b2ae64.webp', 'Plated Articulated Mesh Bracelet 20.5cm-1 for men in one piece', 0, 13, 6, 1),
(374, 'Yellow Gold Feather Charm', 'Yellow Gold Feather Charm for women in one piece', 599, 94, '2023-12-26 21:02:54', '1979085e155d05243ebfc3cfdcfbcd738051dedc.webp,14fc4ff0d11a8b277bd5779ba5afacb17e64f07a.webp,cb4613527f12a1ae0b0dfa02a65a29d82d66ee06.webp,ced75bff64f1615ae8fc6f85687a30ea2d8b0e62.webp', 'Yellow Gold Feather Charm of very good quality and in one piece for women', 1, 14, 6, 2),
(375, 'Yellow Clothilde Amethyst Necklace', 'Yellow Clothilde Amethyst Heart Shape And Cubic Zirconia Necklace for a woman', 999, 74, '2023-12-26 21:02:54', 'c79fb8eb74ae61382d95b77424e423853f7e7a49.jpg,1b8e3786114da861fadb03ab1aabe7a4c2f8175d.webp,de69bd42908bdb3fc37ac0dbafb3fa8ed91e541c.webp', 'Yellow Clothilde Amethyst Heart Shape And Cubic Zirconia Necklace 42cm for a woman of very good quality and in one piece', 0, 16, 6, 2),
(471, 'White Chiseled Plate Necklace', 'White Steel Necklace Chiseled Venetian Mesh Plate for men', 899, 82, '2024-02-02 12:44:58', '35101e2c24b6214c03701aaffe576f80dd923418.webp,bf2d599ccdd828ecabc678ef56cf5a0fcb30d496.webp,d4954a56def726766f795b28a170c5d2df0d4531.jpg,30d2d431b4907cea1e52050c1ef0d687923406f4.jpg', 'White Steel Necklace Chiseled Venetian Mesh Plate for men of very good quality and in one piece', 0, 16, 4, 1),
(472, 'Silver white Drop Earrings', 'Silver white Twisted Drop Earrings for women', 699, 66, '2024-04-25 16:42:45', '3ad92a665bdb167c03feb9a9ef1dc87f747ec114.webp,b97f1c629686f3c4c40e3894bf13b3d156f13d57.webp,19806334931ad5deb0ae024cf930b0f2b3b94440.webp,5a930e7fff7cd9247a1553ff55ce8a83487e2551.webp', 'Silver white Earrings Twisted Drop Shapes Interlaced Paving Cubic Zirconia-1 for women of 2 pieces right and left and very good quality', 0, 17, 5, 2),
(473, 'Black Earrings Infinite Shapes', 'Black Infinite Shapes Earrings for women', 699, 74, '2024-04-25 16:47:38', '3a92ebf23aea69f16922c3a73b98956e7a4773ea.webp,8879a96501b9a00540f13d877698f676a22b94ad.webp,b49890bc0664814c0958097aff88da81998f1f55.webp,55bd6e4f24457c671dc0cf1c133f8d904eea3fe9.webp', 'Black Earrings Infinite Shapes Black Ceramic-1 for women of 2 pieces right and left and very good quality', 0, 17, 7, 2),
(474, 'Topaz Yellow Half Hoop Earrings', 'Topaz Yellow Sky Blue 4 Half Hoop Earrings for women', 699, 76, '2024-04-25 16:57:02', '94772aa563127e0044d22f4008d4e66cb27fe6ad.webp,0595952919881665bfb87c46e081280f599b4cf8.webp,0bfef6b7f7f935ddf6ffbf2abd6e8ea6b51e9aaf.webp', 'Half Hoop Earrings Yellow Topaz Sky Blue 4 Claws-1 for women of 2 pieces right and left and very good quality', 1, 17, 6, 2),
(475, 'Silver White Earrings Hexagonal', 'Silver White Earrings Hexagonal Patterns Semi Paving Oxides for women', 699, 79, '2024-04-25 17:01:38', '7a95cb43576cacf80db3f7ea8d11a1c50b41fe99.webp,f2040ca796bde620727fb666f469cf9ffa740395.webp,e2b7ea5c8051d77e71015b7896461a98ebcd7fca.webp,71e51756196261ea46575499e7799f5a725189c1.webp', 'Silver White Earrings Hexagonal Patterns Semi Paving Black Cubic Zirconia-1 for women of 2 pieces right and left and very good quality', 1, 17, 5, 2),
(476, 'Yellow Oxide Bar Earrings', 'Yellow Gold Cubic Zirconia-1 Bar Earrings for women', 799, 72, '2024-04-25 17:07:32', '22e9f705bdf8b6c3858f158624f351db58288ead.webp,93a1e0c242b0f9ef6867eaa3241151570ea02389.webp,dbf314156e71c42da8a185e400ce36a0d0bbfdcd.webp,444e80995349c08df363c63a79aa577f081d5e19.webp', 'Yellow Gold Earrings Bars Cubic Zirconia-1 for women of very good quality and contains 2 right and left pieces', 0, 17, 6, 2),
(477, 'Yellow Oriental Pearl Earrings', 'Oriental Yellow Earrings with Cultured Pearls and Oxides for women', 799, 75, '2024-04-25 17:11:32', '119a5a2f8c829c25860755f963265afecf8f9b06.webp,e50d2f787ef2ff5a790ad302cff439b19760e0a6.webp,d22db34861345bb9a3c4d82e8f7918c75c248b86.webp,83058a3a95995392a785f1caf599ffcb82835bbe.webp', 'Oriental Yellow Earrings Cultured Pearls And Cubic Zirconia-1 for women in 2 right and left pieces and very good quality', 0, 17, 6, 2),
(478, 'Silver White Dangling Earrings', 'Silver White Openwork Hearts White Mother-of-Pearl Dangling Earrings for women', 699, 75, '2024-04-25 17:15:08', '823456d1807a32f1138df3359da3dbafb186dcb8.webp,4c3d533c00e511baa3bc4b8f08df9cc4ff43c099.webp,71082bb41dc5a9188276931306f06d1348625fa4.webp', 'Silver White Openwork Hearts White Mother-of-Pearl Dangling Earrings-1 for women of very good quality and 2 pieces right and left', 0, 17, 5, 2),
(479, 'Silver White Hoop Earrings', 'Silver White Double Wire Hoop Earrings for women', 699, 62, '2024-04-25 17:30:48', 'c5e306a40e83805dec624e824bbcdb3415ec0335.webp,d489e0942815d620e7ee4c864a503f61d0b3b912.jpg,26ce7b637f682972fe83ef8f08b3fd035a5ca318.webp,bcce8ea4f4ac4d29e9e1a10222cb28eaac1d9be6.webp', 'Silver White Double Wire Hoop Earrings 1 Smooth 1 Diamond Width 1.5mm Diameter 40mm-1 for women of very good quality and 2 pieces', 0, 17, 5, 2),
(480, 'Silver White Cross Bracelet', 'Silver White Cross Bracelet with White Cultured Pearls and Oxides for women', 899, 65, '2024-04-25 17:41:22', '259f59b9392dab0da12a3eb515bb9158ed67e602.webp,f6f2d732fb0b08cf073f95fa0ea12c07956ca6e5.webp,da62fc34aaa5be3830e01c328eb793841a7c9c90.webp,7b000c1ab8b048bd827f21b32ef28b447aefd322.webp', 'Silver White Cross Bracelet White Cultured Pearls And Zirconium Oxides Maille Forçat for women in one piece', 0, 13, 5, 2),
(481, 'Silver White Openwork Bracelet', 'Silver White Openwork Flower Mesh Bracelet for women', 899, 69, '2024-04-25 17:46:21', '127236dd4a58187544fdb127fb0c6da887caee14.webp,1824a248fa7dd841b881fa70a1de97f5c42a77b5.webp,912d0341a4f05f81150bb90b3104ce5ce2469ed5.webp', 'Silver White Openwork Flower Bracelet Forcat Mesh 19cm - for women in one piece', 0, 13, 5, 2),
(482, 'Engraved Pastille Silver Bracelet', 'Silver Bracelet Engraved Pastille Mon Amour Pampille Glitter Silver Forçat Mesh for women', 899, 56, '2024-04-25 17:50:22', '315300488c53745ca97f9618dc0a266f216c93d6.webp,ac0204bdaf68240bfd93041cdd3b5b8e69f98b29.webp,7c49dd51c0bd0239478018af4ddf7cf6ba367728.jpg,00e89557290e1243f1c41407decae8fc8e1c955c.jpg,8823b60de5e63000980ebf97fb46f74f272c0faf.jpg', 'Silver Bracelet Engraved Pastille Mon Amour Pampille Glitter Silver Forçat Mesh 45cm-1 for women in one piece', 1, 13, 10, 2),
(483, 'Faceted Black Ceramic Bracelet', 'Faceted Black Ceramic Bracelet for women', 799, 71, '2024-04-25 17:52:18', '486d1c8ffcdb01145a31cd6a26e90ccbbe0ab621.jpg,c7198403ca5efb23d8b9fe0c6a5abe5438b83ec0.jpg,829863a29da82ca6a69f85d53dd37ecf5754889e.jpg', 'Faceted Black Ceramic Bracelet 5mm-1 for women in one complete piece', 0, 13, 7, 2),
(484, 'Eleastic bracelet Black Faceted', 'Black Faceted Ceramic Bangle Eleastic Bracelet for Women', 799, 67, '2024-04-25 18:07:47', '3cb0e1548c9c51d3d2e882d031a6a986dd7e5c48.jpg,04b7c1d8619b2110004eb8ef354bacc7da887e48.jpg,552911d96acdca86f6c449f0407ee9479878caec.jpg,4ca9d70e89aac37c8e44e4b56bd22d1d003a4b71.jpg', 'Eleastic bracelet Black Faceted Ceramic Bangle Row White Stones for women in one piece', 0, 13, 7, 2),
(487, 'Yellow Hollow Circle bracelet', 'Yellow Hollow Circle Pave Cubic Zirconia Bracelet for women', 999, 17, '2024-04-25 18:18:56', '29f7e90af2eb31d90b10a4a43786a6733e75ee2c.webp,64922326c3eddcd8ad08c40790e384b0222cdedb.jpg,a097d64485108afc9598871350af9c6d8548f142.jpg,6e2eecb2995a966299a5590f293c2089f1b24bb3.jpg', 'Yellow Hollow Circle Pave Cubic Zirconia Bracelet 18cm-1 for women in one piece', 0, 13, 6, 2),
(489, 'Yellow Emerald Solitaire Bracelet', 'Yellow Emerald Solitaire Bracelet Set for women', 999, 10, '2024-04-25 18:26:39', '4a4df92065b45e6bc755ade2cf52f7419a74b239.webp,c59fc128236a99805922ec28140cc2e313a77fc1.webp,81be34df52de92d5df4c262fa2b59e1b7a90e1ee.jpg', 'Yellow Emerald Solitaire Bracelet Set with Claws Mesh 18cm-1 for women in one piece', 1, 13, 6, 2),
(490, 'White Steel ball Bracelet', 'White Steel Bracelet for men', 799, 68, '2024-04-25 18:29:23', 'd14b256f540e7a955945f93c52b42621df8cd67f.webp,e06192bb6d80d7487c3cc3c2b65867fb705fd37c.webp,1633db8f42b719a2d4ea7c1d1c3b99a7f03cef86.jpg', 'White Steel Bracelet Balls 5.9mm 22cm-1 for men in one piece', 0, 13, 4, 1),
(492, 'Elastic White Steel Bracelet', 'Elastic White Steel Bracelet Smooth Black And Red Balls for men', 799, 64, '2024-04-25 18:34:56', '86cbcf1903635e5dfc8d6cc8bbf3d64c83aaa463.webp,788d6cb84c67a0c2226909515b51a5b0b8b41874.jpg,5c3d72b6852f1e4db1d204b4884e5be6e96c5346.webp', 'Elastic White Steel Bracelet Smooth Black And Red Balls Rudder Pattern-1 for men in one piece', 0, 13, 4, 1),
(493, 'Jourdan Men\'s Bracelet Steel', 'Jourdan Men\'s Bracelet Steel Forcat Chains + Black Rubber for men', 999, 66, '2024-04-25 18:44:23', '25ae55bb26e208585f86d370aa984c133bb28787.jpg,2ef1e99ecab34805d11ce2dd96713e50cb2fe322.jpg,4862c37686342b5799d389e33dbf8d0a8f75dcb6.jpg,cf4200e29c45a746e8323b7cc0870e87c6d1c397.jpg', 'Jourdan Men\'s Bracelet Steel Forcat Chains + Black Rubber Wire 21cm for men in one piece', 1, 13, 10, 1),
(494, 'Double Yellow Plated Bracelet', 'Yellow Plated Double Circles Alternating Mesh Bracelet for men', 999, 83, '2024-04-25 18:46:24', '40a96285a2706b9634d7c5d269da5928a0e34d19.webp,769db27499a298e616304e8fc6df7f30af80f4f7.webp,0c23a900ed13ffbf438d8d46c67c514530fc5fc3.webp', 'Yellow Plated Double Circles Alternating Mesh Bracelet 21cm-1 for men in one piece', 0, 13, 6, 1),
(495, 'Black Steel Bracelet', 'Black Steel Bracelet for men', 899, 64, '2024-04-25 18:57:01', 'd793acc3e0ddfd8fe13222757be7aa73b61c407a.webp,076c9a4b8a9ab91d979983153313146d92e351b3.webp,ff69833cecbe37f053d3b7f509e26c2095ff6559.jpg', 'Black Steel Bracelet for men in one piece', 0, 13, 7, 1),
(496, 'White Tree Charm', 'White Tree of Life Charm for women', 599, 74, '2024-04-25 19:12:09', 'eb5a19a04483892437f378df66855e38f7575d49.jpg,030320362de60a4c6ab32f73fbeb05187f79f2de.jpg,42d1f112987a382114e8c3c9c606b07de890675c.jpg', 'White Tree of Life Charm for women in one piece', 0, 14, 4, 2),
(497, 'White Engravable Heart Charm', 'White Engravable Heart Charm for women', 599, 79, '2024-04-25 19:13:29', '9d2144b39af3b5fb1872351843b4f99efcdae36f.webp,9fd7d8dec86e6b2aed436c1167b699661f56af67.webp,2e895ea530fb28a9271cfa010c9941ed8ed3a0e0.webp', 'White Engravable Heart Charm for women in one piece', 0, 14, 4, 2),
(498, 'Yellow Dream Catcher Charm', 'Yellow Dream Catcher Charm for women', 599, 87, '2024-04-25 19:15:35', '237421d1ce71505777ea42ff36e49a9f51bf930c.jpg,da721658937506664ce56918e31dbd54b52892e7.webp,a9814be51fb188eaecbefc8eee4032d23f200d9b.webp', 'Yellow Dream Catcher Charm for women in one piece', 0, 14, 6, 2),
(499, 'Yellow Cubic Key Charm', 'Yellow Cubic Zirconia Key Charm for women', 599, 78, '2024-04-25 19:17:05', '1985079044c504c22ce5e3b2fcf7bd31d8445beb.jpg,e840487b4c0f43c5e7533aa005a85207253e134e.jpg,0bf01c32b894a5b2d80967d37c7f2c2980d4c45c.jpg', 'Yellow Cubic Zirconia Key Charm for women in one piece', 0, 14, 6, 2),
(500, 'Yellow Letter L Charm', 'Yellow Letter L Charm for women', 599, 81, '2024-04-25 19:18:24', '068f16043d2ea0e5e00a21331c6c3305c5dfbcf5.webp,6849e6a21c00b4286c89c394f975783220cc5850.webp,9908e5cc73f26eb6908cfa5cbd6f7ca83f36b6cd.webp', 'Yellow Letter L Charm for women in one piece', 0, 14, 6, 2),
(501, 'Engravable Yellow Pastille Charm', 'Engravable Yellow Pastille Charm for women', 599, 98, '2024-04-25 19:20:32', '9aea77c59e2686bf9d9620be4d19a197cf59c0d3.webp,d54f6c41fdd691b781ccdb3b2cc7f3606f527276.jpg,0467de92290c6a31dc7dca31a58c4aa31095c41b.jpg', 'Engravable Yellow Pastille Charm for women in one piece', 0, 14, 6, 2),
(502, 'White Round Medal Thinking', 'White Round Medal Thinking Angel Pattern for women', 499, 77, '2024-04-25 19:23:32', '87e439b2eaa4a9030078cceaa5ab44a688767b25.jpg,f6afa43bb5da90a5aef59c764ee01f1325fb474f.jpg,2b0e526a5f99456d9aedc73cd1cdd723e8182dba.jpg', 'White Round Medal Thinking Angel Pattern in one-piece for women', 1, 18, 4, 2),
(503, 'Yellow Oval Enamel Medal', 'Yellow Oval Enamel Medal Virgin and Child for women', 499, 92, '2024-04-25 19:24:47', '5f9e651634bfe1befb1388554d22c684a218d8d6.jpg,4fe1c2d8e591c20a8d5968e8a4dfa9a887d0151e.jpg,7ded09be74e326d0e504efcd618cb5e790e79fd9.jpg', 'Yellow Oval Enamel Medal Virgin and Child Pattern for one-piece women', 0, 18, 6, 2),
(505, 'Yellow Medal Virgin Pattern', 'Yellow Medal Virgin Mary Pattern Openwork Paving Cubic Zirconia for women of one piece', 499, 89, '2024-04-25 19:31:10', '5ab2e4e0f50b51a548be47e7de719c7a6a57ea0b.jpg,17d47064b774a8857f6f7a78360e3504e078eb7b.jpg,42a37849aef02f487e44aaef2530b0e979b64cb1.jpg', 'Yellow Medal Virgin Mary Pattern Openwork Paving Cubic Zirconia for women of one piece', 1, 18, 6, 2),
(506, 'Silver White Medal Pendant', 'Silver White Pendant Round Medal Lion Pattern for men', 499, 73, '2024-04-25 19:33:05', 'e9a2c44fbb0873add9b55f68e4c2d707f4042949.webp,d365750f30ffabc7b295717f0548ccc6e125d206.webp', 'Silver White Pendant Round Medal Lion Pattern for men in one piece', 1, 18, 5, 1),
(508, 'White Silver Pendant Medal', 'White Silver Pendant Round Medal Aries Pattern for men', 499, 89, '2024-04-25 19:50:59', 'bde9dee81d40c2f82b08beb4343c31048b274b5f.jpg,e099fb62e50ab77d089693092b5b00acf561d5b9.jpg,91d8522cc297a3689b1286c720bc6319d819dce7.jpg', 'White Silver Pendant Round Medal Aries Pattern for men in one piece', 0, 18, 5, 1),
(512, 'Black Steel Necklace Stones', 'Black Steel Necklace Ornamental Stones Spinel And Onyx for women', 999, 91, '2024-04-25 20:21:35', '471c13ffcc4ce2eeb1edc39421cd28e9e49f4b8a.webp,23055b9b44b022c32cf0703d3c408449675e54f5.webp,b1a6cb8093d6b0b6360a12b644b0175c5644cc0f.jpg,75149c6251751a8d3d42739adc01df91dc8e8802.webp', 'Black Steel Necklace Ornamental Stones Spinel And Onyx 45cm for women in one piece', 0, 16, 7, 2),
(514, 'Silver White Ball Necklace', 'Silver White Ball Necklace for women', 999, 75, '2024-04-25 20:26:53', '8f7b79ebbbd4f18eae7825b3edc8de6b204a34a1.webp,d811911343f2bbad40484b2a95079d6f6800079c.webp,9e982c03ea0699fc2cac14f49a7e6de0609badb4.webp,3c2041384693a454150b5ef2cf5409c7cd04bc10.webp', 'Silver White Ball Necklace Diamond Effect Forçat Mesh 45cm for women in one piece', 0, 16, 5, 2),
(515, 'White Necklace Forçat Blue', 'White Necklace Forçat Blue Topaz Pear Prong for women', 999, 87, '2024-04-25 20:29:44', 'c634cbcdd635f690a9dfc89c1751352d203406eb.webp,cee2a9a3a28fc5b6da6ef6a405130530036ce860.webp,007260e923a1c8f10d42326510ae561d9327712d.webp', 'White Necklace Forçat Blue Topaz Pear Prong Setting 45cm in one piece for women', 0, 16, 4, 2),
(516, 'White Solitaire Mesh Necklace', 'White Solitaire Mesh Forcat Diamond Necklace', 999, 85, '2024-04-25 20:31:59', 'ac27bf23275a9ab9854db72d1bedc8e04aa6861a.webp,31d81bad144dee40ccce84e23ee57f78cde7e1a0.webp,b8a58369edd4ed9154c6290bb1293f808266f4f3.webp,7633c24bc9bad906d2decb334f0715382ace47b0.webp', 'White Solitaire Mesh Forcat Diamond Necklace 45cm in one piece for women', 0, 16, 4, 2),
(517, 'Yellow Solitaire Necklace', 'Yellow Solitaire Synthetic Diamond Necklace for women', 999, 97, '2024-04-25 20:36:08', 'f623e4b8bb7463e5d5bfd98592b40f8b3544e290.webp,012b05e7d4fd8e5872de3a110ea74e8d79dee2f0.webp', 'Yellow Solitaire Synthetic Diamond Necklace for women', 1, 16, 6, 2),
(518, 'Yellow Necklace Oxides Shape', 'Yellow V Shape Zirconium Oxide Necklace for women', 999, 12, '2024-04-25 20:38:15', '4a934cf0791733767036bfe4b1d7325ecc3d8a59.jpg,8af7f8b9b14b3458adf7ce04d252ffebd39f3686.webp,b63a43a85e3ef9d2c985f1a046bebf96aeeb7c18.jpg', 'Yellow V Shape Zirconium Oxide Necklace 42cm for women, very good quality and one piece', 1, 16, 6, 2),
(519, 'Yellow Plated Diamond Necklace', 'Yellow Plated Necklace for a woman', 999, 9, '2024-04-25 20:46:31', '740db4a860e4ae30bc5a6b075186bdaec0409223.webp,dc5c96fd0170ee2c8a760ff275cd29d55dbde305.webp,3c8dd02e634fb498e34eba5f6fe01abee50185e5.webp,0590df9e4858e0a6ec7a923ad42895470d471c71.webp', 'Yellow Plated Necklace with Striated Diamonds and Black Spinels for a woman of very good quality and in one piece', 0, 16, 6, 2),
(522, 'Convict Yellow Diam Necklace', 'Yellow Forçat Diamond Chain 0.85mm for men', 899, 9, '2024-04-25 21:06:07', '24c71ddd9cbecdad2793b3e760dfde728aa91416.webp,4206638a6b7c5df3ec559a3c029dac50260fa94e.webp,2768fb1bd384eb1fe07228daf1384a5c074eafed.webp,27b091796ecff467fc180d37cc5d863f8e4ea535.webp', 'Yellow Forçat Diamond Chain 0.85mm for men of very good quality and in one piece', 0, 16, 6, 1),
(523, 'White And Oxide Necklace', 'White And Oxide Maille Forçat Necklace for men', 899, 9, '2024-04-25 21:08:24', '6bec5145c55356aca003d74c88d20bacdfc0b31e.webp,ebed6bcf216328f389ea09b5b8c3a5556763d213.webp,8ad2a79c539edbc8a9031de50533b43619ab8c74.webp', 'White And Oxide Maille Forçat Necklace 55cm for men of very good quality and in one piece', 1, 16, 4, 1),
(525, 'Black Fancy Mesh Necklace', 'Jourdan Men\'s Necklace Black Steel Fancy Mesh for men', 899, 8, '2024-04-25 21:13:57', '74d979910a968016b509ee4ef7d939831714ca59.webp,4c14874ff8cc5ae6ca0b3622a707848cc3372d7a.webp', 'Jourdan Men\'s Necklace Black Steel Fancy Sodalite Blue Mesh 60cm for men of very good quality and in one piece', 1, 16, 7, 1),
(526, 'Yellow Engraved Plaque Necklace', 'Yellow Plated Necklace Engraved Plate for men', 899, 14, '2024-04-25 21:18:11', 'ba51aa4e05cb27fe48ccec230227405d44558f05.webp,13ec0b259e1a410e9ce9f44bb360f6071bb09e7c.webp,d0fc5cc7072e7dd926d8511ac4d24123a244d7d5.webp,9a13988c5010a769ff41627a6cedb12fda4fe488.jpg', 'Yellow Plated Necklace Engraved Plate Astrological Sign Taurus Forcat Mesh for men of very good quality and in one piece', 0, 16, 6, 1),
(527, 'White Silver Necklace', 'White Silver Necklace Bar Multichains Zirconia Oxides Closed Setting Forçat Mesh for women', 999, 45, '2024-05-08 16:36:08', 'e2b088bfa2c11fd6a55f42f3e029c495b1724242.jpg,221ccfe5543897b351edfe516fcd37098c6e3658.jpg,2bf66a2806da30e5135219f1ba47492c8f9f5f60.jpg', 'White Silver Necklace Bar Multichains Zirconia Oxides Closed Setting Forçat Mesh 44cm for women in one piece', 1, 16, 5, 2),
(528, 'Yellow Charm Letter E', 'Yellow Charm Letter E for women', 599, 79, '2024-05-08 17:05:57', '9cf2c4a667d06df966e6edf8ac6f322c98b446e6.webp,80bf8b3a418838acab1b38071455ab66aee15437.webp,28f33c85fae71e7d35e7aca6cf78e2c9753a0000.webp', 'Yellow Charm Letter E for women in one piece of good quality', 1, 14, 6, 2),
(532, 'Saint Christopher Yellow Medal', 'Saint Christopher Yellow Medal for men', 499, 83, '2024-05-10 00:15:34', 'c636f63440de0a0b378ea464841ebb55c1dffb85.jpg,e9ca00227f637d800848469841a88d4e36e3c3d7.jpg', 'Yellow Saint Christopher Medal of very good quality and in one piece for men', 0, 18, 6, 1),
(533, 'Yellow Round Medal Pendant', 'Yellow Round Lion Medal Pendant for Men', 499, 92, '2024-05-10 00:19:57', '762b4f138693f8b01ddb0095f6531f49f295b472.webp,d911b7148b8cc7288c3b174ee4d144d0f3bf2e12.webp,014b2024de13e95aa9d856e2708015c108b6e932.webp', 'Yellow Round Medal Pendant Lion Pattern with a beautiful model in one piece for men', 0, 18, 6, 1),
(535, 'Yellow Plaque Identity Bracelet', 'Yellow Plate Identity Bracelet Alternate for men', 899, 92, '2024-05-10 01:54:13', 'f7f0170d6bdf9c76daf6a8ebe7264980ed372a31.webp,04f2c96b41679c80afc00a84b4bcab9338e4be4f.webp', 'Yellow Plate Identity Bracelet Alternate Mesh 20cm for men of very good quality', 1, 13, 6, 1),
(536, 'White Snake Bangle Bracelet', 'White Snake Bangle Bracelet for women', 999, 91, '2024-05-10 02:37:57', '3ae10d337a71fd2344899f468b370ab53240f288.jpg,6d8560e55032ceffc36b0c12b738ff3e9fed0a5d.jpg,8d041ef1ca3d74cd3c26ae5aa389f1a0dd2f44b9.jpg', 'White Snake Bangle Bracelet Width 7mm for women of very good quality and new model', 1, 13, 4, 2),
(537, 'White Openwork Waves Trilogy Bracelet', 'White Openwork Waves Trilogy for women', 899, 90, '2024-05-10 20:34:38', '124be9b6f75e67af1206115a38e0494543e39c1a.webp,530373133e1691b31cd7eacd10e43992648cfba3.webp,69ddc15fcc79436c09f84d305cbc1da0b579b6fc.jpg', 'White Openwork Waves Trilogy Diamond Bracelet 18.5cm for women of very good quality in one piece and beautiful design', 0, 13, 4, 2),
(538, 'Yellow Gold Bracelet Infinite Pattern', 'Yellow Gold Bracelet Infinite Pattern Forçat Mesh for women', 999, 82, '2024-05-10 22:01:53', 'f6e82e2a8a15036d1ea915a1d8d7f1401995000a.webp,80c6e8d4b8a0e04a5354ad3bc45418367bf33dca.webp,46873d810e63478327b2ae30f4d3c67d5258fd80.webp', 'Yellow Gold Bracelet Infinite Pattern Forçat Mesh 18cm in one piece for women and very good quality', 0, 13, 6, 2),
(539, 'Yellow Oval Miraculous Virgin medal', 'Yellow Oval Miraculous Virgin Contours Effect Medal for women', 499, 78, '2024-05-10 22:47:38', 'bbfbd4b9c3d589b4f166d5cb55a38274b98532df.jpg,4583c25ff7c9a605f9dd9b35e4df18619f9fac7c.jpg,59bd7ef650583d1adc74616dc88fd373995e2a55.jpg', 'Yellow Oval Miraculous Virgin Contours Effect Medal for women in one piece and of good quality', 0, 18, 6, 2),
(540, 'White Silver Pendant Round Medal', 'White Silver Pendant Round Medal Capricorn for women', 499, 93, '2024-05-10 23:12:30', 'a23aefb22da4aeb99112decd53037e82649c0bc6.jpg,3c2bc37e5bd78a32f0ccf56bfb48ec49aa8e9eb6.jpg,cf42a55c9e827bcf20b758f08620154f3c445913.jpg', 'White Silver Pendant Round Medal Capricorn Pattern for women in one piece with a beautiful model', 0, 18, 5, 2),
(541, 'White Silver Round Medal', 'White Silver Pendant Round Medal Taurus for men', 499, 83, '2024-05-10 23:22:21', 'ae2e0be286069f103527b9c5ff4bd2cc0ec54797.jpg,2d81c696cc33dc5061b78877e5401f8846c93eb4.jpg,fc8daa69f76bd4303e941f241e2e5951b2dd1d01.jpg', 'White Silver Pendant Round Medal Taurus Pattern for men in one piece and beautiful model', 0, 18, 5, 1),
(542, 'Yellow Necklace Double Circles', 'Yellow Double Circles Paving Cubic Zirconia Necklace for women', 999, 88, '2024-05-11 00:07:33', '0d1bb77b4aa20261d6ad0839070aa006b804fb02.webp,5c22c0490fa2e435ef7909505b900c4843f930db.webp,10c196d5baeb11a07b875631f9d95f559bd2b00f.webp', 'Yellow Double Circles Paving Cubic Zirconia Necklace 42cm for women in one piece and with a beautiful model', 1, 16, 6, 2),
(543, 'Silver White Long Necklace', 'White Silver Long Necklace Openwork Circle Pattern for women', 999, 90, '2024-05-11 00:18:29', '2894214bed8d0ea99be98d904a7f7a48ae1daf06.webp,52f7ea36a60dbdf3b69044cf76e459c08799612b.webp,a2020f174fea83fa6ac32f178495f5509d638c7e.webp', 'White Silver Long Necklace Openwork Circle Pattern And Bar 85+5cm for women in one piece and good quality', 0, 16, 5, 2),
(544, 'Silver White Compass Chain Necklace', 'Silver White Compass Chain Necklace for men', 899, 80, '2024-05-11 00:34:20', '41a476bb0fbed0bc967c380d47ecd5ee6e00563a.webp,dd20946d55653bd8efc962fd26c5da9ceb598670.webp,6fcb4f4c55793648430b1a5be5a7d020e735400f.webp,08f56d391e6ec00ab1ad9293f9c43144101ee3a8.jpg', 'Silver White Compass Chain Necklace 45cm for men in two pieces and of good quality', 0, 16, 5, 1),
(551, 'Silver White Heart Earrings', 'Silver White Heart Earrings for women', 699, 90, '2024-06-02 20:01:18', '04de747ff49a2964f9fc490f42060f7d461d84fa.webp,0f2236eb85daaac28d1c536afdca363f72cc08bb.webp,8f6b080b46c7aa195a129b3449bd54840e24c8e7.webp', 'Silver White Heart Earrings for women of 2 pieces right and left of very good quality', 0, 17, 5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) NOT NULL,
  `hashed_token` varchar(100) NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reset_password_request`
--

INSERT INTO `reset_password_request` (`id`, `user_id`, `selector`, `hashed_token`, `requested_at`, `expires_at`) VALUES
(18, 67, 'veMsnSyoGanyxNXt7HxW', 'WOgXqy9KKe8lTRGjNHo6Bl+A4q6PVVF2O2AvVRfBoYA=', '2024-06-18 22:58:55', '2024-06-18 23:58:55');

-- --------------------------------------------------------

--
-- Structure de la table `site_information`
--

CREATE TABLE `site_information` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `code_postal` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `phone` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `name_category` varchar(255) DEFAULT NULL,
  `name_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `descrrption_question` varchar(255) DEFAULT NULL,
  `name_subscribe` varchar(255) DEFAULT NULL,
  `description_subscribe` varchar(255) DEFAULT NULL,
  `terms_conditions` varchar(255) DEFAULT NULL,
  `hours` varchar(255) DEFAULT NULL,
  `tva` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `site_information`
--

INSERT INTO `site_information` (`id`, `name`, `description`, `street`, `city`, `code_postal`, `created_at`, `phone`, `copyright`, `name_category`, `name_address`, `email`, `question`, `descrrption_question`, `name_subscribe`, `description_subscribe`, `terms_conditions`, `hours`, `tva`) VALUES
(1, 'AfamiaShop', 'The best looking accessory anytime and anywhere for men and women', 'Rue des Rivageois 7', 'Liège', '4000', '2024-02-02 14:57:51', '0489 47 08 53', 'Copyright © 2024 | AFAMIASHOP', 'Our Categories', 'Address And Contact', 'ay1665ay@gmail.com', 'You Have A Question ?', 'Find your answer by clicking on the button below , filling out the form and sending it to us', 'Subscribe Our Newsletters', 'Subscribe to our newsletters by clicking on the button below', 'Terms & Conditions', 'Monday - Friday : 8:00 - 20:00', 21);

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `is_displayed` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `image`, `is_displayed`) VALUES
(4, 'New Products', 'Come and discover our new products', '519c226d8fb852520a12906e2187a73ddbfa2ca5.jpg', 1),
(5, 'New Categories', 'It\'s time to discover our new categories', 'd3ecfe4652c1a6cd14db31d0049c8e7270e08f71.png', 1),
(6, 'Secure Payment', 'Enjoy your purchase with secure payment', '63e1b119b828a13f2f9e469ebe00e6e797c0481f.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `transporter`
--

CREATE TABLE `transporter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `transporter`
--

INSERT INTO `transporter` (`id`, `name`, `description`, `price`, `created_at`) VALUES
(1, 'DHL', 'Fast delivery - 1 day', 699, '2024-02-07 17:37:35'),
(4, 'GLS', 'Delivery from 3-6 days', 399, '2024-05-24 18:23:56');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `google_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `username`, `firstname`, `lastname`, `is_verified`, `google_id`) VALUES
(62, 'ay166555ay@gmail.com', '[]', '$2y$13$ixCNz6F0i8EuNajOEbi9Yeh0NYOg437cZBkDxFR5kwM4OZFT8Lie6', 'Admin1', 'Mohamed', 'Alshahoud', 1, NULL),
(63, 'alshahoudmo12hamed95@gmail.com', '[]', '$2y$13$hArr/2MaD1UVEqGlanqRTejOKnZ5jmXMsk94cmEEfbwqHdxJn5uH.', 'Mohamed SH', 'Mohamed', 'Alshahoud', 1, '100408515606494218400'),
(65, 'zfzaza', '[]', '$2y$13$rwNGgvt6qbhpB25vvUEiZ.qolpOQk1oKhfL5eyW4KQNf56.gUTfh6', 'ay1665ay@gmail.com', NULL, NULL, 0, NULL),
(67, 'ay1665ay@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$UUGwoTo1N6icMnsHIfKr7Ox35W6Bmh/6cbs.6DTlaeCqMEgXOQhvS', 'Admin1', 'Mohamed', 'Alshahoud', 1, NULL),
(74, 'alshahoudmohameed95@gmail.com', '[]', '$2y$13$50CwgCOEfE65wn4SpfQT4.ZkyGYz3YN3Ctr2MEO9tS9dmXMVEiR96', 'Test 2', 'Mohamed', 'Alshahoud', 1, NULL),
(76, 'alalwanzahraa@gmail.com', '[]', '$2y$13$2d4zLbntfM5Fy6sGzbsltu21Fxot9uwRUK0Q4tgCEdotYmjoxlUry', 'Zahraa', 'Zahraa', 'Alalwan', 1, '106834055675945275862'),
(77, 'alshahoudmohamed95@gmail.com', '[]', '$2y$13$KkDWNDTYtLflkp52HuUoIuglA15xkF8uWuYzqtBE5Qxb.SLb2f1zu', 'Ammar KH', 'Ammar', 'Khatab', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `is_rgpd` tinyint(1) NOT NULL,
  `validation_token` varchar(255) DEFAULT NULL,
  `is_valid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `created_at`, `is_rgpd`, `validation_token`, `is_valid`) VALUES
(8, 'alshahoudmohamed95@gmail.com', '2024-06-18 23:13:57', 1, 'd6fb30b92b851649f4b7ea1a99e86c389bcab9ca1db82b8ea761eb1706036ae4', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users_categories`
--

CREATE TABLE `users_categories` (
  `users_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users_categories`
--

INSERT INTO `users_categories` (`users_id`, `categories_id`) VALUES
(8, 1),
(8, 2),
(8, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D4E6F81A76ED395` (`user_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5F9E962A4C2885D7` (`annonces_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8ECF000CA21214B7` (`categories_id`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F5299398A76ED395` (`user_id`);

--
-- Index pour la table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_ED896F46F65E9B0F` (`order_product_id`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04ADA21214B7` (`categories_id`),
  ADD KEY `IDX_D34A04AD5C002039` (`colors_id`),
  ADD KEY `IDX_D34A04AD477C57FD` (`genders_id`);

--
-- Index pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Index pour la table `site_information`
--
ALTER TABLE `site_information`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `transporter`
--
ALTER TABLE `transporter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_categories`
--
ALTER TABLE `users_categories`
  ADD PRIMARY KEY (`users_id`,`categories_id`),
  ADD KEY `IDX_ED98E9FC67B3B43D` (`users_id`),
  ADD KEY `IDX_ED98E9FCA21214B7` (`categories_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT pour la table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=554;

--
-- AUTO_INCREMENT pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `site_information`
--
ALTER TABLE `site_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `transporter`
--
ALTER TABLE `transporter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_D4E6F81A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962A4C2885D7` FOREIGN KEY (`annonces_id`) REFERENCES `product` (`id`);

--
-- Contraintes pour la table `newsletters`
--
ALTER TABLE `newsletters`
  ADD CONSTRAINT `FK_8ECF000CA21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_F5299398A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_ED896F46F65E9B0F` FOREIGN KEY (`order_product_id`) REFERENCES `order` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD477C57FD` FOREIGN KEY (`genders_id`) REFERENCES `gender` (`id`),
  ADD CONSTRAINT `FK_D34A04AD5C002039` FOREIGN KEY (`colors_id`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `FK_D34A04ADA21214B7` FOREIGN KEY (`categories_id`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `users_categories`
--
ALTER TABLE `users_categories`
  ADD CONSTRAINT `FK_ED98E9FC67B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_ED98E9FCA21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
