--
-- Database: `DevClass181`
--

--
-- Table structure for table `web_dev`
--

CREATE TABLE `web_dev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  `student_id` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `department` varchar(3) NOT NULL,
  `semester` varchar(4) NOT NULL,
  `why_learn` text DEFAULT NULL,

  `dev_time_sun` int(1) DEFAULT 0,
  `dev_time_mon` int(1) DEFAULT 0,
  `dev_time_tue` int(1) DEFAULT 0,
  `dev_time_wed` int(1) DEFAULT 0,

  `skill_html` int(1) DEFAULT NULL,
  `skill_css` int(1) DEFAULT NULL,
  `skill_js` int(1) DEFAULT NULL,
  `skill_c` int(1) DEFAULT NULL,
  `skill_cpp` int(1) DEFAULT NULL,
  `skill_java` int(1) DEFAULT NULL,
  `skill_php` int(1) DEFAULT NULL,
  `skill_python` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
--
-- Table structure for table `android`
--

CREATE TABLE `android` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  `student_id` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `department` varchar(3) NOT NULL,
  `semester` varchar(4) NOT NULL,
  `why_learn` text DEFAULT NULL,

  `skill_html` int(1) DEFAULT NULL,
  `skill_css` int(1) DEFAULT NULL,
  `skill_js` int(1) DEFAULT NULL,
  `skill_c` int(1) DEFAULT NULL,
  `skill_cpp` int(1) DEFAULT NULL,
  `skill_java` int(1) DEFAULT NULL,
  `skill_php` int(1) DEFAULT NULL,
  `skill_python` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- --------------------------------------------------------