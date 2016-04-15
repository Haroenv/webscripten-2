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

--
-- Dumping data for table `concerts`
--

INSERT INTO `concerts` (`id`, `title`, `location`, `price`, `fav` , `start_date`) VALUES
(1, 'Tomorrowland', 'De Schorre, Boom', 272.50, 0, '2016-07-22 10:00:00'),
(2, 'Finale HUMO''s Rock Rally', 'AB, Brussel', 14.00, 0, '2016-04-10 15:00:00')
;

-- --------------------------------------------------------


--
-- Indexes for table `concerts`
--
ALTER TABLE `concerts`
 ADD PRIMARY KEY (`id`);


--
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concerts`
--
ALTER TABLE `concerts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
