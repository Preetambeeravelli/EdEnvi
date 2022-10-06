-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 01:22 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plantsdatabase`
--
CREATE DATABASE IF NOT EXISTS `plantsdatabase` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `plantsdatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `air_purifiers`
--

CREATE TABLE `air_purifiers` (
  `Plant_ID` varchar(2) NOT NULL,
  `Common_Name` varchar(20) NOT NULL,
  `Scientific_Name` varchar(20) NOT NULL,
  `Native_to` varchar(40) NOT NULL,
  `Growing_Seasons` varchar(50) NOT NULL,
  `Propagation_Method` varchar(50) NOT NULL,
  `Annual_Production` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `air_purifiers`
--

INSERT INTO `air_purifiers` (`Plant_ID`, `Common_Name`, `Scientific_Name`, `Native_to`, `Growing_Seasons`, `Propagation_Method`, `Annual_Production`) VALUES
('01', 'Spider plant', 'Chlorophytum comosum', ' Africa, Asia, and Australia,', 'Spring and Summer', 'Spider plant is only propagated through spiderette', '147,000 Units'),
('02', 'Bamboo palm', 'Dypsis lutescens', 'Mexico and Central America.', 'Spring, summer', 'Cut couple of bud together to make individualplant', '250,000 Units'),
('03', 'Peace lilly', 'Spathiphyllum', 'Colombia and Venezuela', 'Spring and summer', 'By division ', '178,000 Units'),
('04', 'Chinese ever green', 'Aglaonema', 'The Philippines and northeastern Celebes', 'Spring, summer', 'Division', '260.000 Units'),
('05', 'Snake plant', 'Dracaena trifasciata', 'Tropical Africa', 'Spring ', 'Cut end of the leaf in just enough water', '234,000 Units');

-- --------------------------------------------------------

--
-- Table structure for table `flowering_plants`
--

CREATE TABLE `flowering_plants` (
  `Plant_ID` int(2) NOT NULL,
  `Common_Name` varchar(20) NOT NULL,
  `Scientific_Name` varchar(20) NOT NULL,
  `Native_to` varchar(40) NOT NULL,
  `Growing_Seasons` varchar(40) NOT NULL,
  `Propagation_Method` varchar(50) NOT NULL,
  `Annual_Production` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flowering_plants`
--

INSERT INTO `flowering_plants` (`Plant_ID`, `Common_Name`, `Scientific_Name`, `Native_to`, `Growing_Seasons`, `Propagation_Method`, `Annual_Production`) VALUES
(1, 'Rose', 'Rosa', 'Asia', 'Fall and Early Spring', 'PlantDivision and Seeding ', '30 Millions'),
(2, 'Rosemallow', 'Hibiscus', 'Asia and Pacific islands', 'Late Spring Through Fall', 'From Cutting', '113.3 Millions'),
(3, 'Desert Rose', 'Adenium', 'Tropical Africa, Arabian Peninsula', 'Spring and Summer', 'Take a cutting from the tip of a branch', '84 Millions'),
(4, 'Flaming Katy', 'Kalanchoe ', 'Madagascar', 'Late winter to late spring', 'Stem cuttings or offsets', '47 Millions'),
(5, 'Paper flower', 'Bougainvillea', 'Eastern South America', 'Summer and fall', 'Taking cuttings 6 inches long in spring', '96 Millions'),
(6, 'Summer Snapdragon', 'Angelonia', 'Mexico and the West Indies.', 'Late Spring Through Fall', 'Stem cuttings', '38 Millions'),
(7, 'Moss-rose purslane', 'portulaca', ' North Africa and Indian subcontinent', 'Start seeds indoors in spring', 'By seed or by cuttings', '63 Millions'),
(8, 'Azalea', 'Rhododendron', 'Asia, Europe and North America', 'Spring or fall.', 'From seed,  from cuttings, layers, grafts ', '58 Millions'),
(9, 'Jasmine', 'Jasminum', 'Tropical of  Eurasia, Africa, Oceania', 'Between June and November.', 'Rooting jasmine cuttings and planting jasmine seed', '125 Millions'),
(10, 'Marigold', 'Tagetes', 'All Over America', 'Early summer hard frost in late fall', 'From cuttings.', '140 Millions');

-- --------------------------------------------------------

--
-- Table structure for table `fruit_plants`
--

CREATE TABLE `fruit_plants` (
  `Plant_ID` varchar(2) NOT NULL,
  `Common_Name` varchar(20) NOT NULL,
  `Scientific_Name` varchar(30) NOT NULL,
  `Native_to` varchar(50) NOT NULL,
  `Growing_Seasons` varchar(50) NOT NULL,
  `Propagation_Method` varchar(50) NOT NULL,
  `Annual_Production` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruit_plants`
--

INSERT INTO `fruit_plants` (`Plant_ID`, `Common_Name`, `Scientific_Name`, `Native_to`, `Growing_Seasons`, `Propagation_Method`, `Annual_Production`) VALUES
('01', 'Strawberries', 'Fragaria  ananassa', 'North America', 'Mid-June to early July', 'Most varieties of these produce runners, stolons', '$2.2 billion.'),
('02', 'Raspberries', 'Rubus idaeus', ' Asia Minor and North America', 'June or July', 'Tip layering', '256.8 millions lbs'),
('03', 'Blueberries', 'Vaccinium sectCyanococcus', 'North America', 'Fall by mid-October or in early spring', 'softwood cutting, hardwood cutting, tissue control', '850,886 tonnes'),
('04', 'Apple', 'Malus', 'Kazakhstan', 'Late summer and late fall', 'Grafting and budding', '83139326 metric tons'),
('05', 'Pineapple', 'Ananas comosus', 'Brazilian rainforests', 'March through July', 'Arising in the axil of the leaves on the main stem', '27402956 metric tons'),
('06', 'Banana', 'Musa', 'Southeast Asia', 'All year round.', 'Vegetative means', '114 million tons'),
('07', 'Cherries', 'Prunus avium', 'Western Asia and Eastern Europe', ' April (in the Northern Hemisphere) and the summer', 'Stem cuttings or grafting', '265,820 tons'),
('08', 'Watermelons', 'Citrullus lanatus', 'Africa', 'Late spring to early summer', 'Direct seeding', '100,414,933 tons'),
('09', 'Oranges', 'Citrus X sinensis', 'Asia', 'October and January', 'Grafting or budding', '46.05 million metric tons'),
('10', 'Grapes', 'Vitis vinifera', 'Mediterranean and Central Asia', 'Late winter to early spring months', 'Layering, cuttings, grafting, or by seed', '24.54 million metric tons');

-- --------------------------------------------------------

--
-- Table structure for table `vegetable_plants`
--

CREATE TABLE `vegetable_plants` (
  `Plant_ID` int(2) NOT NULL,
  `Common_Name` varchar(20) NOT NULL,
  `Scientific_Name` varchar(20) NOT NULL,
  `Native_to` varchar(50) NOT NULL,
  `Growing_Seasons` varchar(50) NOT NULL,
  `Propagation_Method` varchar(50) NOT NULL,
  `Annual_Production` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vegetable_plants`
--

INSERT INTO `vegetable_plants` (`Plant_ID`, `Common_Name`, `Scientific_Name`, `Native_to`, `Growing_Seasons`, `Propagation_Method`, `Annual_Production`) VALUES
(1, 'Potatoes', 'Solanum tuberosum', 'Peruvian-Bolivian Andes', 'Begins as early as March and the spring until May', 'Cloning', '359 million  tons'),
(2, 'Peas', 'Pisum sativum', 'The Middle East', 'Spring', 'Pea staking', '11.91 million ton'),
(3, 'Onions', 'Allium cepa', 'Southwestern Asia', 'Spring and Fall.', 'By sets, transplants, or direct seeding', '20,507,759 tons'),
(4, 'Beans', 'Phaseolus vulgaris', 'Central and South America ', 'Warm-season / Summer', 'Via seed.', '31.4 million tons'),
(5, 'Radishes', 'Raphanus sativus', 'China', 'Spring or Fall', 'Directly from seed into a prepared bed', ' 7 million tons'),
(6, 'Tomatoes', 'Solanum lycopersicum', 'South America', 'Late spring and early summer except in zone 10', 'Immerse the tomato cutting in water or plant it', '14 million tons'),
(7, 'Garlic', 'Allium sativum', 'Central Asia', 'Most often planted in the fall', 'Vegetative reproduction ', '28494130 metric tons'),
(8, 'Cucumbers', 'Cucumis sativus', 'India', 'April and June', 'Direct seeding', '75219440 metric tons'),
(9, 'Beet root', 'Beta vulgaris ', 'The Mediterranean region', 'Spring and Fall.', 'Beet seed planting.', '252.97 million tons'),
(10, 'Carrot', 'Daucus carota', 'Iran and Afghanistan.', 'Early spring and late fall', 'Vegetative propagation by root', '44762859 tonnes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `air_purifiers`
--
ALTER TABLE `air_purifiers`
  ADD PRIMARY KEY (`Plant_ID`);

--
-- Indexes for table `flowering_plants`
--
ALTER TABLE `flowering_plants`
  ADD PRIMARY KEY (`Plant_ID`);

--
-- Indexes for table `fruit_plants`
--
ALTER TABLE `fruit_plants`
  ADD PRIMARY KEY (`Plant_ID`);

--
-- Indexes for table `vegetable_plants`
--
ALTER TABLE `vegetable_plants`
  ADD PRIMARY KEY (`Plant_ID`);
  
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
