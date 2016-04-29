USE 2016concerts;

-- CREATE YOUR TABLES HERE

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Table structure for table `concerts`
--
DROP TABLE IF EXISTS `concerts`;
CREATE TABLE `concerts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `fav` TINYINT(1) NOT NULL,
  `start_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;