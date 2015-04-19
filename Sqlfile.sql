
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Table structure for table `Sponsor`
--

CREATE TABLE IF NOT EXISTS `Sponsor` (
  `SponsorID` int(100) NOT NULL,
  `SponsorName` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Stage`
--

CREATE TABLE IF NOT EXISTS `Stage` (
  `StageID` int(100) NOT NULL,
  `StageName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SponsorID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `WarpedTour`
--

CREATE TABLE IF NOT EXISTS `WarpedTour` (
  `WarpedID` int(100) NOT NULL,
  `Date` date NOT NULL,
  `AdmissioinPrice` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Sponsor`
--
ALTER TABLE `Sponsor`
  ADD PRIMARY KEY (`SponsorID`);

--
-- Indexes for table `Stage`
--
ALTER TABLE `Stage`
  ADD PRIMARY KEY (`StageID`);

--
-- Indexes for table `WarpedTour`
--
ALTER TABLE `WarpedTour`
  ADD PRIMARY KEY (`WarpedID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Sponsor`
--
ALTER TABLE `Sponsor`
  MODIFY `SponsorID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Stage`
--
ALTER TABLE `Stage`
  MODIFY `StageID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `WarpedTour`
--
ALTER TABLE `WarpedTour`
  MODIFY `WarpedID` int(100) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Stage`
--
ALTER TABLE `Stage`
ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`StageID`) REFERENCES `Sponsor` (`SponsorID`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;