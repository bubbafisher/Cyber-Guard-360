-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2023 at 08:51 AM
-- Server version: 10.5.15-MariaDB-0+deb11u1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberguard360`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `userID` int(25) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `business` varchar(45) DEFAULT NULL,
  `addLine1` varchar(40) NOT NULL,
  `addLine2` varchar(40) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` varchar(5) NOT NULL,
  `country` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(6) NOT NULL,
  `survey_id` int(6) DEFAULT NULL,
  `question_id` int(6) DEFAULT NULL,
  `answer` enum('yes','no','na') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `guideline` int(11) NOT NULL,
  `question` text NOT NULL,
  `hints` text NOT NULL,
  `yes_id` int(11) NOT NULL,
  `no_id` int(11) NOT NULL DEFAULT -1,
  `has_NA` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `guideline`, `question`, `hints`, `yes_id`, `no_id`, `has_NA`) VALUES
(0, 0, 'Does your business accept cards?', 'Your business accepts credit or debit cards as a payment method', 1, -1, 0),
(1, 0, 'Does your business store cardholder data?', 'Your business stores card data such as primary account number and you do not use Square or a similar product to manage transactions. ', 2, -1, 0),
(2, 1, 'Are processes and mechanisms for installing and maintaining network security controls defined and understood?', 'Network security controls, such as firewalls, and the roles surrounding their installation and maintenance are documented and regularly updated.', 3, -1, 0),
(3, 1, 'Are network security controls configured and maintained?', 'The configuration standards for NSC rulesets have been examined and implemented.', 4, -1, 0),
(4, 1, 'Is network access to and from the cardholder data environment restricted?', 'Inbound and outbound traffic to and from the CDE is restricted to necessary traffic only and all other traffic is denied in accordance with the documented configuration standards for NSCs.', 5, 6, 0),
(5, 1, 'Are network connections between trusted and untrusted networks controlled?', 'NSCs are implemented between trusted and untrusted networks, anti-spoofing measures have been implemented, and system components that store cardholder data are not directly accessible from untrusted networks. ', 6, 6, 0),
(6, 1, 'Are risks to the CDE from computing devices that are able to connect to both untrusted networks and the CDE mitigated?', 'Security control devices are implemented on any computing devices (both company and employee owned) that connect to both untrusted networks (including the Internet) and the CDE. ', -1, -1, 0),
(7, 2, 'Are processes and mechanisms for applying secure configurations to all system components defined and understood?', 'All security policies and operational procedures are documented, regularly updated, known to all relevant personnel, and are in use.', 8, -1, 0),
(8, 2, 'Are system components configured and securely maintained?', 'Configuration standards, such as for use of vendor default accounts, are developed and regularly updated to cover all system components, address all known security vulnerabilities, and are consistent with industry standards.', 9, 9, 0),
(9, 2, 'Are wireless environments configured and managed securely?', 'All wireless vendor defaults are changed or confirmed to be secure and wireless encryption keys are changed when personnel with knowledge of the key leaves their role or the company or whenever a key is compromised.', -1, -1, 0),
(10, 3, 'Are processes for protecting stored account data defined and understood?', 'All policies and procedures for protecting account data are documented, regularly updated, known to all relevant personnel, and are in use. ', 11, -1, 0),
(11, 3, 'Is storage of account data kept to a minimum?', 'Account data storage is kept to a minimum through implementation of data retention and disposal policies and processes.', 12, 13, 0),
(12, 3, 'Is sensitive authentication data (SAD) removed from storage after authorization?', 'Card verification code and personal identification number (PIN) are not retained and are unrecoverable after authorization, even if encrypted.', 13, 13, 0),
(13, 3, 'Is access to displays of full PAN and ability to copy PAN restricted?', 'PAN (primary account number or payment card number) is masked when displayed, such that only personnel with a legitimate business need can see more than the BIN (bank identification number) and last four digits of the PAN', 14, 15, 0),
(14, 3, 'Is the primary account number (PAN) secured wherever it is stored?\r\n', 'PAN is rendered unreadable anywhere it is stored using cryptographic hashes of the entire PAN, truncation, or another method. ', 15, 15, 0),
(15, 3, 'Are the cryptographic keys used to protect stored account data secured?', 'Procedures are defined and implemented to protect cryptographic keys used to protect stored account data against disclosure and misuse, such as restricting access to keys and storing keys in the fewest possible locations.', 16, 16, 0),
(16, 3, 'Are key management processes and procedures defined and implemented when cryptography is used?\r\n', 'Policies and procedures are in-place to ensure generation of strong cryptographic keys used to protect stored account data. ', -1, -1, 0),
(17, 4, 'Are processes and mechanisms for protecting cardholder data with strong cryptography during transmission documented?', 'All security policies and operational procedures are identified, documented, kept up to date, in use, and known to all affected parties', 18, -1, 0),
(18, 4, 'Is the primary account number (PAN)  protected with strong cryptography during  transmission?', 'Strong cryptography and security protocols are implemented to safeguard PAN during transmission over open public networks', -1, -1, 0),
(19, 5, 'Are processes and mechanisms for protecting all systems and networks from malicious software defined and understood?', 'All policies and operational procedures for protecting systems and networks are documented, kept up to date, in use, assigned to personnel, and known to all affected parties.', 20, 22, 0),
(20, 5, 'Is malicious software (malware) prevented, or detected and addressed?\r\n', 'An automated anti-malware solution(s) is deployed on all system components, except for those system components identified as not at risk from malware.\r\n', 21, 22, 0),
(21, 5, 'Are anti-malware mechanisms and processes active, maintained, and monitored?', 'The anti-malware solution(s) has automatic updates enabled and scans by the malware solution are performed in proportion to the entity’s risk.', 22, 22, 0),
(22, 5, 'Are anti-phishing mechanisms in place to protect users against phishing attacks?', 'Processes and automated mechanisms are in place to detect and protect against phishing attacks.', -1, -1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `survey_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `questions` (`question_id`),
  ADD KEY `survey` (`survey_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`),
  ADD KEY `accounts` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `userID` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `questions` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`),
  ADD CONSTRAINT `survey` FOREIGN KEY (`survey_id`) REFERENCES `survey` (`survey_id`);

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `accounts` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
