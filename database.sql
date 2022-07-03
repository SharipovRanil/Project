-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 01, 2022 at 04:37 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Zoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Animals`
--

CREATE TABLE `Animals` (
  `ID_Animal` int(11) NOT NULL,
  `Height` int(11) DEFAULT NULL,
  `Birth` date DEFAULT NULL,
  `Offspring` text,
  `ID_Food` int(11) DEFAULT NULL,
  `Name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Animals`
--

INSERT INTO `Animals` (`ID_Animal`, `Height`, `Birth`, `Offspring`, `ID_Food`, `Name`) VALUES
(1, 30, '2022-06-06', NULL, 2, 'Белый медведь'),
(2, 300, '2017-06-14', '-Жираф 1 год,\r\n- Жираф 1.4 года', 2, 'Жираф');

-- --------------------------------------------------------

--
-- Table structure for table `AnimalWorkers`
--

CREATE TABLE `AnimalWorkers` (
  `ID_AnimalWorker` int(11) NOT NULL,
  `ID_Animal` int(11) DEFAULT NULL,
  `ID_Personal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AnimalWorkers`
--

INSERT INTO `AnimalWorkers` (`ID_AnimalWorker`, `ID_Animal`, `ID_Personal`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Cell`
--

CREATE TABLE `Cell` (
  `ID_Cell` int(11) NOT NULL,
  `typeOfAnimal` varchar(128) DEFAULT NULL,
  `Gender_Animal` char(1) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Height` int(11) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `CellHistory`
--

CREATE TABLE `CellHistory` (
  `ID_HistoryCell` int(11) NOT NULL,
  `Date_Begin` date DEFAULT NULL,
  `Date_End` date DEFAULT NULL,
  `ID_Cell` int(11) DEFAULT NULL,
  `ID_Animal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Diseases`
--

CREATE TABLE `Diseases` (
  `ID_Disease` int(11) NOT NULL,
  `Name` varchar(256) DEFAULT NULL,
  `disease_begin` date DEFAULT NULL,
  `disease_end` date DEFAULT NULL,
  `Status` text,
  `ID_Animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Food`
--

CREATE TABLE `Food` (
  `ID_Food` int(11) NOT NULL,
  `Type_Food` varchar(128) DEFAULT NULL,
  `Name_Food` varchar(128) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Food`
--

INSERT INTO `Food` (`ID_Food`, `Type_Food`, `Name_Food`, `Quantity`) VALUES
(1, NULL, 'Корм для птиц', 23),
(2, NULL, 'Корм для медведей ', 122),
(3, 'Корм для птиц', 'Корм \"Вкуснятина\"', 120);

-- --------------------------------------------------------

--
-- Table structure for table `HistoryVaccinations`
--

CREATE TABLE `HistoryVaccinations` (
  `ID_History` int(11) NOT NULL,
  `ID_Animal` int(11) DEFAULT NULL,
  `vaccination_date` date DEFAULT NULL,
  `ID_Vaccination` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `HistoryVaccinations`
--

INSERT INTO `HistoryVaccinations` (`ID_History`, `ID_Animal`, `vaccination_date`, `ID_Vaccination`) VALUES
(1, 2, '2022-07-22', 2),
(2, 2, '2019-07-13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE `News` (
  `id_news` int(11) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `content` text,
  `publication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`id_news`, `title`, `description`, `content`, `publication`, `file`) VALUES
(3, '123', '123', '123', '2022-06-30 17:47:56', '62bde1ccbe2b262bde036e5b48Unknown.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Personal`
--

CREATE TABLE `Personal` (
  `ID_Personal` int(11) NOT NULL,
  `Time` int(11) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Wages` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Personal`
--

INSERT INTO `Personal` (`ID_Personal`, `Time`, `Gender`, `Age`, `Wages`) VALUES
(1, 8, 'F', 30, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE `Supplier` (
  `ID_Supplier` int(11) NOT NULL,
  `Supplier_Name` varchar(128) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Term_Days` int(11) DEFAULT NULL,
  `ID_Food` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Supplier`
--

INSERT INTO `Supplier` (`ID_Supplier`, `Supplier_Name`, `Price`, `Term_Days`, `ID_Food`) VALUES
(1, 'Поставщик \"ЗооSafe\"', 1000, 30, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id_ticket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `guest_fio` varchar(256) DEFAULT NULL,
  `ticket_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id_ticket`, `id_user`, `guest_fio`, `ticket_date`) VALUES
(1, 4, 'Ивано Петр Иванович', '2022-07-01'),
(2, 4, 'Петров Семен ', '2023-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id_user`, `login`, `password`, `name`, `role`) VALUES
(1, '1', '1', '1', 1),
(2, '12', '123', '1', 0),
(3, 'asdf', '50fde99373b04363727473d00ae938a4f4debfd0afb1d428337d81905f6863b3cc303bb331ffb3361085c3a6a2ef4589ff9cd2014c90ce90010cd3805fa5fbc6', '123', 0),
(4, '123', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '1', 1),
(5, '10', '3c11e4f316c956a27655902dc1a19b925b8887d59eff791eea63edc8a05454ec594d5eb0f40ae151df87acd6e101761ecc5bb0d3b829bf3a85f5432493b22f37', 'петька', 0),
(6, 'f', '711c22448e721e5491d8245b49425aa861f1fc4a15287f0735e203799b65cffec50b5abd0fddd91cd643aeb3b530d48f05e258e7e230a94ed5025c1387bb4e1b', 'f', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Vaccinations`
--

CREATE TABLE `Vaccinations` (
  `ID_Vaccination` int(11) NOT NULL,
  `Name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Vaccinations`
--

INSERT INTO `Vaccinations` (`ID_Vaccination`, `Name`) VALUES
(1, 'Вакцина от бешенства'),
(2, 'Вакцина от чумы');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Animals`
--
ALTER TABLE `Animals`
  ADD PRIMARY KEY (`ID_Animal`),
  ADD KEY `ID_Food` (`ID_Food`);

--
-- Indexes for table `AnimalWorkers`
--
ALTER TABLE `AnimalWorkers`
  ADD PRIMARY KEY (`ID_AnimalWorker`),
  ADD KEY `ID_Animal` (`ID_Animal`),
  ADD KEY `ID_Personal` (`ID_Personal`);

--
-- Indexes for table `Cell`
--
ALTER TABLE `Cell`
  ADD PRIMARY KEY (`ID_Cell`);

--
-- Indexes for table `CellHistory`
--
ALTER TABLE `CellHistory`
  ADD PRIMARY KEY (`ID_HistoryCell`),
  ADD KEY `ID_Cell` (`ID_Cell`),
  ADD KEY `ID_Animal` (`ID_Animal`);

--
-- Indexes for table `Diseases`
--
ALTER TABLE `Diseases`
  ADD PRIMARY KEY (`ID_Disease`),
  ADD KEY `ID_Animal` (`ID_Animal`);

--
-- Indexes for table `Food`
--
ALTER TABLE `Food`
  ADD PRIMARY KEY (`ID_Food`);

--
-- Indexes for table `HistoryVaccinations`
--
ALTER TABLE `HistoryVaccinations`
  ADD PRIMARY KEY (`ID_History`),
  ADD KEY `ID_Animal` (`ID_Animal`),
  ADD KEY `ID_Vaccination` (`ID_Vaccination`);

--
-- Indexes for table `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `Personal`
--
ALTER TABLE `Personal`
  ADD PRIMARY KEY (`ID_Personal`);

--
-- Indexes for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`ID_Supplier`),
  ADD KEY `ID_Food` (`ID_Food`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `Vaccinations`
--
ALTER TABLE `Vaccinations`
  ADD PRIMARY KEY (`ID_Vaccination`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Animals`
--
ALTER TABLE `Animals`
  MODIFY `ID_Animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `AnimalWorkers`
--
ALTER TABLE `AnimalWorkers`
  MODIFY `ID_AnimalWorker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Cell`
--
ALTER TABLE `Cell`
  MODIFY `ID_Cell` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `CellHistory`
--
ALTER TABLE `CellHistory`
  MODIFY `ID_HistoryCell` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Diseases`
--
ALTER TABLE `Diseases`
  MODIFY `ID_Disease` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Food`
--
ALTER TABLE `Food`
  MODIFY `ID_Food` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `HistoryVaccinations`
--
ALTER TABLE `HistoryVaccinations`
  MODIFY `ID_History` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `News`
--
ALTER TABLE `News`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Personal`
--
ALTER TABLE `Personal`
  MODIFY `ID_Personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Supplier`
--
ALTER TABLE `Supplier`
  MODIFY `ID_Supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Vaccinations`
--
ALTER TABLE `Vaccinations`
  MODIFY `ID_Vaccination` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Animals`
--
ALTER TABLE `Animals`
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`ID_Food`) REFERENCES `Food` (`ID_Food`);

--
-- Constraints for table `AnimalWorkers`
--
ALTER TABLE `AnimalWorkers`
  ADD CONSTRAINT `animalworkers_ibfk_1` FOREIGN KEY (`ID_Animal`) REFERENCES `Animals` (`ID_Animal`),
  ADD CONSTRAINT `animalworkers_ibfk_2` FOREIGN KEY (`ID_Personal`) REFERENCES `Personal` (`ID_Personal`);

--
-- Constraints for table `CellHistory`
--
ALTER TABLE `CellHistory`
  ADD CONSTRAINT `cellhistory_ibfk_1` FOREIGN KEY (`ID_Cell`) REFERENCES `Cell` (`ID_Cell`),
  ADD CONSTRAINT `cellhistory_ibfk_2` FOREIGN KEY (`ID_Animal`) REFERENCES `Animals` (`ID_Animal`);

--
-- Constraints for table `Diseases`
--
ALTER TABLE `Diseases`
  ADD CONSTRAINT `diseases_ibfk_1` FOREIGN KEY (`ID_Animal`) REFERENCES `Animals` (`ID_Animal`);

--
-- Constraints for table `HistoryVaccinations`
--
ALTER TABLE `HistoryVaccinations`
  ADD CONSTRAINT `historyvaccinations_ibfk_1` FOREIGN KEY (`ID_Animal`) REFERENCES `Animals` (`ID_Animal`),
  ADD CONSTRAINT `historyvaccinations_ibfk_2` FOREIGN KEY (`ID_Vaccination`) REFERENCES `Vaccinations` (`ID_Vaccination`);

--
-- Constraints for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`ID_Food`) REFERENCES `Food` (`ID_Food`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `Users` (`id_user`);
