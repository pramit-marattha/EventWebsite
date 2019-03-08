CREATE TABLE IF NOT EXISTS `events` (
  `eventID` int(8) NOT NULL AUTO_INCREMENT,
  `eventName` varchar(256) NOT NULL,
  `eventCategory` varchar(256) NOT NULL,
  PRIMARY KEY (`eventID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;


INSERT INTO `events` (`eventID`, `eventName`, `eventCategory`) VALUES
(1, 'Doing something', 'workshop'),
(2, 'Listening', 'lecture'),
(3, 'Building', 'workshop'),
(4, 'Talking', 'workshop'),
(5, 'watching', 'lecture'),
(6, 'taking notes', 'lecture');
