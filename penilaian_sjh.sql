-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 05:57 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penilaian_sjh`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`) VALUES
(1, 'marcoo', '234234', 'mgh@gmail.com', 'informatik'),
(2, 'keegaan', '32424', 'fvsv@gmail.com', 'informatika'),
(10, 'gersf', '1213', 'marcokeegan909@gmail.com', 'Mesin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(63, 'test', 'test@gmail.com', '$2y$10$NalvxtHxIuAKpDOxO41XPOkjrMa212QIvT8JTkHI6nuFF1yOkpRZ2'),
(64, 'marcokee', 'marcokeegan909@gmail.com', '$2y$10$5rfW2vZupDmTQN5IEMmAy.JMnsus8JepyKtp4.T2TaxGE0qv5jcZa'),
(65, 'testttt', 'marcok@gmail.com', '$2y$10$Rdf3oQA/BiOLa84eszcfPOMLBc23r4OFvnIicpPrJbp38ugN3p3ni'),
(66, 'marco2', 'marcokeegan7@gmail.com', '$2y$10$CxIJ9Qt/RpgbgyFftW9EzOqWqDb9AsJ3.hbxRmXzFabBUATSUzEqW'),
(67, 'marc', 'marco.keegan@student.umn.ac.id', '$2y$10$sIpZQUlB9wK2kBd9txQwKexTaiW6sHAP5CBed2Lf3BR3D22JQDCF6'),
(68, 'marc', 'marco.keegan@student.umn.ac.id', '$2y$10$VWHSpzYLTRPrrQLpxXsFAuL/a6zuai07Bz9AjoXCyXcvyDg6TtaoS'),
(69, 'marco22', 'marco22@gmail.com', '$2y$10$InKeoor4d3cNtOjO7jYbveo3sD7qs49n2Pom0sy9yCZ/4DCfeE0Qu'),
(70, 'marco2', 'marcokeegan7@gmail.com', '$2y$10$7us1yvRju4/YUc6yHFx0KObh8vvbQV3H/uAY2jRChXNUfThACqqx2'),
(71, 'test', 'marcokeegan7@gmail.com', '$2y$10$IKBEUSlIAIpBCbRTKrTz.utI5ovi6Oetv.L9FoTmq/mo0q6exK7.q'),
(72, 'test', 'marcokeegan7@gmail.com', '$2y$10$KYszfRowX7x/ymZfWK33Ke4RMSihiAWJMJvP7IhzQ7sgqd1EXtanW'),
(73, 'test', 'marcokeegan7@gmail.com', '$2y$10$3vL/18Q/dksbf.S1LIilBeYPxhRmzS41DishjZb8QNM1ff84AZnwS'),
(74, 'test', 'marcokeegan7@gmail.com', '$2y$10$8fdwnMgl.Ge4u09O7ZK0YefH5S9EvKdp2yhfdsO7/Ymw6xBUhY38G'),
(75, 'test', 'marcokeegan7@gmail.com', '$2y$10$zA0bqy80m/U/SfgtDfkB6uaMCmM95P0vYUElgtaj9um0o5TSrFTU2'),
(76, 'test', 'marcokeegan7@gmail.com', '$2y$10$FsYVgS5Sm6SUls7zE4UVwOogcWoxYn753xwA2gcte1FD0uFVB.w3a'),
(77, 'test', 'libtii.ti8@student.umn.ac.id', '$2y$10$ZUz0ikQaZKc36FH/4kaxIO1fjxpIjCF3wvRFSM29gaX/j6xcOlC.O'),
(78, 'test', 'libtii.ti8@student.umn.ac.id', '$2y$10$KasSvi8TsvEImkfYAuMYaOS62qINgqsAoEGMWNyyFkIRO6R.t.EdG'),
(79, 'marcokeeww', 'marcokeegan7@gmail.com', '$2y$10$xZeFhI7NoGuafhAQYYJsI.JDcCcFFX.ggnvGDkPayegDiviKjdLm.'),
(80, 'marcoee', 'marcokeegan1@gmail.com', '$2y$10$HNetK2SexPOVDxYfYlP3kux6wuJ3ZIkCEMeA.YOn2uHXJBbaaCeIW'),
(81, '916', 'marcoeegan254@gmail.com', '$2y$10$11rgphJwXZZp9GyTpom/Z.oZKsAD2Ae4tI5c/.L5Pdak7aPLmQLIG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
