-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 08:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archive`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `ID` int(11) NOT NULL,
  `date` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`ID`, `date`, `title`, `summary`, `text`, `image`, `category`, `archive`) VALUES
(58, '13.06.2021.', 'Dortmund und Bayern üben sich in Psychospielchen', 'Im Fernduell mit den Münchnern um die Meisterschaft redet sich der BVB stark. Er beansprucht die Position des Teams, das alles zu gewinnen hat. Die Bayern antworten mit selbstbewussten Tönen.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit animi quisquam quam at maiores eos dolorem enim, aspernatur laboriosam qui quae minima tempora cumque ex fuga est. Explicabo, tempore quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo. Aut quos modi deleniti consectetur, repudiandae praesentium nihil vel voluptate ducimus veritatis labore perferendis cumque architecto voluptates ut sed eos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aliquid animi enim sequi, possimus harum ullam! Eius dolor eaque nemo sapiente, voluptate, placeat sequi iste blanditiis, voluptates amet ad quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nulla voluptatibus totam soluta voluptatum animi et aut corrupti mollitia. Dolores aliquid accusantium veniam, iusto officiis dolore perspiciatis et earum consequatur? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit animi quisquam quam at maiores eos dolorem enim, aspernatur laboriosam qui quae minima tempora cumque ex fuga est. Explicabo, tempore quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo. Aut quos modi deleniti consectetur, repudiandae praesentium nihil vel voluptate ducimus veritatis labore perferendis cumque architecto voluptates ut sed eos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aliquid animi enim sequi, possimus harum ullam! Eius dolor eaque nemo sapiente, voluptate, placeat sequi iste blanditiis, voluptates amet ad quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nulla voluptatibus totam soluta voluptatum animi et aut corrupti mollitia. Dolores aliquid accusantium veniam, iusto officiis dolore perspiciatis et earum consequatur?', 'Image1.jpg', 'sport', 0),
(59, '13.06.2021.', 'Cacau hält mildes Urteil nach Rassismus-Eklat für \"sehr bitter\"', 'Drei Männer haben Nationalspieler beim Länderspiel rassistisch beleidigt. Doch die Beschuldigten kamen mit milden Strafen davon. Der DFB-Integrationsbeauftragte Cacacu reagiert enttäuscht auf das Urteil.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit animi quisquam quam at maiores eos dolorem enim, aspernatur laboriosam qui quae minima tempora cumque ex fuga est. Explicabo, tempore quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo. Aut quos modi deleniti consectetur, repudiandae praesentium nihil vel voluptate ducimus veritatis labore perferendis cumque architecto voluptates ut sed eos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aliquid animi enim sequi, possimus harum ullam! Eius dolor eaque nemo sapiente, voluptate, placeat sequi iste blanditiis, voluptates amet ad quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nulla voluptatibus totam soluta voluptatum animi et aut corrupti mollitia. Dolores aliquid accusantium veniam, iusto officiis dolore perspiciatis et earum consequatur? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit animi quisquam quam at maiores eos dolorem enim, aspernatur laboriosam qui quae minima tempora cumque ex fuga est. Explicabo, tempore quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo. Aut quos modi deleniti consectetur, repudiandae praesentium nihil vel voluptate ducimus veritatis labore perferendis cumque architecto voluptates ut sed eos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aliquid animi enim sequi, possimus harum ullam! Eius dolor eaque nemo sapiente, voluptate, placeat sequi iste blanditiis, voluptates amet ad quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nulla voluptatibus totam soluta voluptatum animi et aut corrupti mollitia. Dolores aliquid accusantium veniam, iusto officiis dolore perspiciatis et earum consequatur?', 'Image2.jpg', 'sport', 0),
(60, '13.06.2021.', 'Max Kruse verlässt Werder Bremen', 'Mannschaftskapitan Max Kruse verlässt nach der Saison Werder Bremen. Das teilte der Klub am Freitag mit. Der Kontrakt des ehemaligen Nationalspielers läuft zum 30. Juni aus, Werder hatte bis zuletzt auf eine Verlängerung mit dem Stürmer goholft.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit animi quisquam quam at maiores eos dolorem enim, aspernatur laboriosam qui quae minima tempora cumque ex fuga est. Explicabo, tempore quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo. Aut quos modi deleniti consectetur, repudiandae praesentium nihil vel voluptate ducimus veritatis labore perferendis cumque architecto voluptates ut sed eos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aliquid animi enim sequi, possimus harum ullam! Eius dolor eaque nemo sapiente, voluptate, placeat sequi iste blanditiis, voluptates amet ad quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nulla voluptatibus totam soluta voluptatum animi et aut corrupti mollitia. Dolores aliquid accusantium veniam, iusto officiis dolore perspiciatis et earum consequatur? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit animi quisquam quam at maiores eos dolorem enim, aspernatur laboriosam qui quae minima tempora cumque ex fuga est. Explicabo, tempore quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo. Aut quos modi deleniti consectetur, repudiandae praesentium nihil vel voluptate ducimus veritatis labore perferendis cumque architecto voluptates ut sed eos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aliquid animi enim sequi, possimus harum ullam! Eius dolor eaque nemo sapiente, voluptate, placeat sequi iste blanditiis, voluptates amet ad quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nulla voluptatibus totam soluta voluptatum animi et aut corrupti mollitia. Dolores aliquid accusantium veniam, iusto officiis dolore perspiciatis et earum consequatur?', 'Image3.jpg', 'sport', 0),
(61, '13.06.2021.', 'USA heben Zölle gegen Mexiko und Kanada auf', 'US President Donald Trump kündigte die Aufhebung der Zölle am Freitag an und riel den Kongress auf, einen Handelspakt zwischen den die andern als Ersatz für das Frelhandelsabkommen Nafta zu bitligen.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit animi quisquam quam at maiores eos dolorem enim, aspernatur laboriosam qui quae minima tempora cumque ex fuga est. Explicabo, tempore quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo. Aut quos modi deleniti consectetur, repudiandae praesentium nihil vel voluptate ducimus veritatis labore perferendis cumque architecto voluptates ut sed eos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aliquid animi enim sequi, possimus harum ullam! Eius dolor eaque nemo sapiente, voluptate, placeat sequi iste blanditiis, voluptates amet ad quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nulla voluptatibus totam soluta voluptatum animi et aut corrupti mollitia. Dolores aliquid accusantium veniam, iusto officiis dolore perspiciatis et earum consequatur? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit animi quisquam quam at maiores eos dolorem enim, aspernatur laboriosam qui quae minima tempora cumque ex fuga est. Explicabo, tempore quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo. Aut quos modi deleniti consectetur, repudiandae praesentium nihil vel voluptate ducimus veritatis labore perferendis cumque architecto voluptates ut sed eos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aliquid animi enim sequi, possimus harum ullam! Eius dolor eaque nemo sapiente, voluptate, placeat sequi iste blanditiis, voluptates amet ad quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nulla voluptatibus totam soluta voluptatum animi et aut corrupti mollitia. Dolores aliquid accusantium veniam, iusto officiis dolore perspiciatis et earum consequatur?', 'Image4.jpg', 'politika', 0),
(62, '13.06.2021.', 'Zahlreiche EU-Diplomaten sind sauer auf Rumänien', 'Rumänien hat derzeit den Vorsitz unter den EU-Staaten inne. Das Treffen der Finanzminister in Brüssel nutzt des Land nun vor allem für seinen eigenen Zwecke. Unter EU-Diplomaten gibt es Kritik.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit animi quisquam quam at maiores eos dolorem enim, aspernatur laboriosam qui quae minima tempora cumque ex fuga est. Explicabo, tempore quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo. Aut quos modi deleniti consectetur, repudiandae praesentium nihil vel voluptate ducimus veritatis labore perferendis cumque architecto voluptates ut sed eos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aliquid animi enim sequi, possimus harum ullam! Eius dolor eaque nemo sapiente, voluptate, placeat sequi iste blanditiis, voluptates amet ad quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nulla voluptatibus totam soluta voluptatum animi et aut corrupti mollitia. Dolores aliquid accusantium veniam, iusto officiis dolore perspiciatis et earum consequatur? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit animi quisquam quam at maiores eos dolorem enim, aspernatur laboriosam qui quae minima tempora cumque ex fuga est. Explicabo, tempore quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo. Aut quos modi deleniti consectetur, repudiandae praesentium nihil vel voluptate ducimus veritatis labore perferendis cumque architecto voluptates ut sed eos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aliquid animi enim sequi, possimus harum ullam! Eius dolor eaque nemo sapiente, voluptate, placeat sequi iste blanditiis, voluptates amet ad quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nulla voluptatibus totam soluta voluptatum animi et aut corrupti mollitia. Dolores aliquid accusantium veniam, iusto officiis dolore perspiciatis et earum consequatur?', 'Image5.jfif', 'politika', 0),
(67, '13.06.2021.', 'Labour erklärt Brexit-Gespräche mit Regierung für gescheitert', 'Wochenlang wurde verhandelt, die Gespräche enden nun in einer Sackgasse. Für Theresa May dürfte es sehr schwierg werden, ihr EU-Auntrittsabkommen noch durchs Parlament zu bekommen. Das Rennen um ihre Nachfolge ist bereits voll in Gang.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit animi quisquam quam at maiores eos dolorem enim, aspernatur laboriosam qui quae minima tempora cumque ex fuga est. Explicabo, tempore quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo. Aut quos modi deleniti consectetur, repudiandae praesentium nihil vel voluptate ducimus veritatis labore perferendis cumque architecto voluptates ut sed eos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aliquid animi enim sequi, possimus harum ullam! Eius dolor eaque nemo sapiente, voluptate, placeat sequi iste blanditiis, voluptates amet ad quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nulla voluptatibus totam soluta voluptatum animi et aut corrupti mollitia. Dolores aliquid accusantium veniam, iusto officiis dolore perspiciatis et earum consequatur? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit animi quisquam quam at maiores eos dolorem enim, aspernatur laboriosam qui quae minima tempora cumque ex fuga est. Explicabo, tempore quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo. Aut quos modi deleniti consectetur, repudiandae praesentium nihil vel voluptate ducimus veritatis labore perferendis cumque architecto voluptates ut sed eos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aliquid animi enim sequi, possimus harum ullam! Eius dolor eaque nemo sapiente, voluptate, placeat sequi iste blanditiis, voluptates amet ad quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nulla voluptatibus totam soluta voluptatum animi et aut corrupti mollitia. Dolores aliquid accusantium veniam, iusto officiis dolore perspiciatis et earum consequatur?', 'Image6.jpg', 'Politika', 0);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `korisnicko_ime` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lozinka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(1, 'Ime', 'Prezime', 'iprezime', '$2y$10$i.qVKT0eY8Q89G75xylnDucHtymE/nBB6L1ZGV3BOh47gboOu4JSC', 1),
(2, 'Bernarda', 'Brkić', 'bbrkic', '$2y$10$FeYu7H/QxpdlfptfSfcf0OGqLI.z/7Tzg20SVMnJCwVC.lqmnQBna', 0),
(4, 'Pero', 'Perić', 'pperic', '$2y$10$Rteg4gvKYgukVxvGb4CXWeQChF0Ql5Xq3vWBs3CodPX4e/n.beZWm', 0),
(5, 'Vesna', 'Pisarović', 'vpisarovic', '$2y$10$E4DgDh2WWTh/yGfc1BL34evFrrkUN4tFNbvwmh11RME/e7e/nUFva', 0),
(8, 'Novi', 'Korisnik', 'nkorisnik', '$2y$10$wpu9sMFrCdQ4oNJByFDPluRKfec2wegWBKIt/HGHJLqU/heSVexlO', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
