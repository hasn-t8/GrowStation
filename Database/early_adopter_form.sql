-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 10:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `early_adopter_form`
--

CREATE TABLE `early_adopter_form` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `cell_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `early_adopter_form`
--

INSERT INTO `early_adopter_form` (`id`, `username`, `cell_number`, `email`, `message`, `created_at`) VALUES
(1, 'Talal Iqbal', '0234-34353533', 'talal232@gmail.com', 'thanks', '2023-08-10 08:37:26'),
(2, 'InfernoBlast261', '3334275303', 'hannansaqib2010@gmail.com', NULL, '2023-08-10 08:37:26'),
(3, 'Danish Ahmed', '3105174570', 'danishahmedk11@gmail.com', NULL, '2023-08-10 08:37:26'),
(4, 'Rohama', '3455552680', 'rohamaifshal752@gmail.com', NULL, '2023-08-10 08:37:26'),
(5, 'asmab093', '3470813453', 'asmabatool093@gmail.com', NULL, '2023-08-10 08:37:26'),
(6, 'Erris77', '3155664208', 'livulivu712@gmail.com', 'Tajabajwsb', '2023-08-10 08:37:26'),
(7, 'Erris77', '3155664208', 'talhaabbasi2924@gmail.com', NULL, '2023-08-10 08:37:26'),
(8, 'Talha', '3275690393', 'imtalha321@gmail.com', 'Exited', '2023-08-10 08:37:26'),
(9, 'Aiman_21', '3470240313', 'aimanwaheed557@gmail.com', NULL, '2023-08-10 08:37:26'),
(10, 'AdilBilal610', '3145384131', 'adilbilal622@gmail.com', NULL, '2023-08-10 08:37:26'),
(11, 'Muhammad Nouman Shafiq', '3151456819', 'muhammadnoumanshafiq79@gmail.com', 'WTPG', '2023-08-10 08:37:26'),
(12, 'Muhammad Moin', '3201580024', 'muhammadmoin7860320@gmail.com', 'H', '2023-08-10 08:37:26'),
(13, 'Muhammad Moin', '923201580024', 'muhammadmoin7860320@gmail.com', NULL, '2023-08-10 08:37:26'),
(14, 'Abdul Rehman', '3324070411', 'abdulrehman4070411@gmail.com', NULL, '2023-08-10 08:37:26'),
(15, 'Abdul Rehman', '3324070411', 'abdulrehman4070411@gmail.com', 'Nil', '2023-08-10 08:37:26'),
(16, 'Faizan Latif', '3345181566', 'faizanlatif8731@gmail.com', 'Great', '2023-08-10 08:37:26'),
(17, 'Muhammad Shahmir Khan', '3369294248', 'DevShahmirKhan@gmail.com', 's', '2023-08-10 08:37:26'),
(18, 'Subhanullah', '3213702259', 'subhanullah077230@gmail.com', NULL, '2023-08-10 08:37:26'),
(19, 'Muhammad Atif', '3003711740', 'muhammadatif941092@gmail.com', 'Keep it up', '2023-08-10 08:37:26'),
(20, 'hassan', '34', 'hassantalha807@gmail.com', 'as', '2023-08-10 08:46:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `early_adopter_form`
--
ALTER TABLE `early_adopter_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `early_adopter_form`
--
ALTER TABLE `early_adopter_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
