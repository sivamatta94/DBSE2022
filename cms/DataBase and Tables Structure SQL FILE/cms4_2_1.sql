-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 13, 2022 at 02:33 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms4.2.1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `aheadline` varchar(30) NOT NULL,
  `abio` varchar(500) NOT NULL,
  `aimage` varchar(60) NOT NULL DEFAULT 'avatar.png',
  `addedby` varchar(30) NOT NULL,
  `usr_flag_admin` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `datetime`, `username`, `password`, `aname`, `aheadline`, `abio`, `aimage`, `addedby`, `usr_flag_admin`) VALUES
(1, 'January-13-2019 23:54:07', 'siva', '1234', 'Siva Matta', 'Freelancer', 'siva matta is a developer and web designer with the great passion for building beautiful new Desktop/Web Applications from scratch. ', 'jazeb.jpg', 'Zoe333', NULL),
(2, 'January-13-2019 23:57:13', 'Madhuri', '1234', 'Madhuri Tawde', 'Designer', '  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  ', 'avatar.png', 'Xerox121', NULL),
(5, 'January-14-2019 00:20:41', 'Mansi ', '1234', 'Mansi Tripathy', 'Writer', '  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'avatar.png', 'Jazeb', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins_1`
--

CREATE TABLE `admins_1` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `addedby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins_1`
--

INSERT INTO `admins_1` (`id`, `datetime`, `username`, `password`, `aname`, `addedby`) VALUES
(2, 'February-11-2022 00:08:43', 'sivaram', '1234', 'ram', 'siva');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `author`, `datetime`) VALUES
(13, 'Digital  Technology ', 'siva', 'February-11-2022 14:48:01'),
(14, 'Higher Education', 'siva', 'February-11-2022 14:48:11'),
(15, 'Collaboration ', 'siva', 'February-11-2022 14:48:17'),
(16, 'Classroom', 'siva', 'February-11-2022 14:48:24'),
(17, 'Mobile Learning', 'siva', 'February-11-2022 14:48:31'),
(18, 'Public opinion', 'siva', 'February-11-2022 14:48:45'),
(19, 'Life Lessons', 'siva', 'February-11-2022 14:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `approvedby` varchar(50) NOT NULL,
  `status` varchar(3) NOT NULL,
  `post_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `datetime`, `name`, `email`, `comment`, `approvedby`, `status`, `post_id`) VALUES
(26, 'February-11-2022 19:21:42', 'siva', 'siva@gmail.com', 'Hello Thanks for sharing nice post', 'Madhuri Tawde', 'ON', 57);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `title` varchar(300) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varbinary(50) NOT NULL,
  `post` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `datetime`, `title`, `category`, `author`, `image`, `post`) VALUES
(57, 'February-11-2022 15:17:21', 'Edublogs in the development of the European higher education area', 'Digital Technology', 'Madhuri', 0x7368757474657273746f636b5f3334313730373135312e6a7067, 'The birth of the Internet and 2.0 tools, and their successful application into the University classroom dynamic is an undeniable reality. The development of European Higher Education has supposed to the redefinition of the class methodology and in this, the 2.0 tools have a more important paper. Amongst these tools blogs are one of the most meaningful ones. This article presents the design of an innovative methodology based on EEES structure and recommendations. Used with students of Primary Education of University of Cordoba (N=123), inside of the scholar curriculum, this main goal is to foster collaborative and group work, as well as to support the learning of a content subject carrying three different subareas.'),
(58, 'February-11-2022 15:20:55', 'The educational affordances of blogs for self-directed learning', 'Higher Education', 'Madhuri', 0x73716c636f6e63657074732e6a7067, 'To be successful university learners, students need to develop skills in self-directed learning. This encompasses a range of cognitive and meta-cognitive skills including generating one’s own learning goals, planning how to tackle a problem, evaluating whether learning goals have been met, and re-planning based on this evaluation. The educational affordances of blogs offer opportunities for students to become self-directed learners in a supportive social environment. Based on qualitative analysis of design diaries written by 113 computer science students about a creative project, this paper presents a framework of the ways in which blogging activities can assist groups of students and their teachers in the development of a range of cognitive, social, and self-directed learning skills.'),
(60, 'February-11-2022 15:26:52', 'A microblogging approach to students’ learning and research experience', 'Digital Technology', 'Madhuri', 0x4d6963726f626c6f6767696e672e6a7067, '                This paper introduces a model for students’ learning by using an event stream in a microblogging environment. Thus, during the academic year 2009-2010, we integrated three different events in formal university courses. The events are archived on the cirip.eu microblogging platform and were evaluated in the authors’ previous papers. The aim of our study is to increase the understanding of how microblogging platforms can be used for learning from an event stream (and participate in the stream too), and to offer enough data for a more critical thinking and in-depth analysis              '),
(61, 'February-11-2022 15:30:09', 'Mobile learning through microblogging', 'Mobile Learning', 'Madhuri', 0x7368757474657273746f636b5f3334313730373135312e6a7067, 'In the context in which the new frontier of Web 2.0 is marked out by the use of mobile devices anywhere, anytime, by anyone, and anything, our paper aims at valorizing the mobility parameters of the cirip.eu platform in order to integrate the microblogging technology in higher education, for the purpose of increasing knowledge and learning in authentic mobile learning environments. Thus, the aim of our experiment is not only to provide a general overview / a framework for using microblogging through mobile technologies, but also a way to enhance teaching and learning in formal university courses and to present mobile microblogging learning benefits, opportunities, limits, and risks.'),
(62, 'February-11-2022 15:31:11', 'Microblogging And Blended Learning: Peer Response In Tertiary Education', 'Mobile Learning', 'Madhuri', 0x313934383832345f346436635f342e6a7067, 'The traditional classroom paradigm has been lately experiencing innovative changes with the advent of new technologies. This paper reports on the results of an exploratory study that puts into practice a blended learning approach in a university English course that favoured face-to-face as well as online meetings. Within this learning paradigm, the objective of this treatment was to analyze how the use of Twitter, a microblogging tool could help to increase students\' confidence in English. This would imply a novelty in the field of language learning through computers, as it incorporated social networking to an explicit structured vocabulary task of ESL learning, which allowed peer revision of tweets and feedback from the instructor.'),
(63, 'February-11-2022 15:41:40', 'Micro-Blogging and the Higher Education Classroom: Approaches and Considerations.', 'Digital Technology', 'Madhuri', 0x4d6963726f626c6f6767696e672e6a7067, 'This chapter offers reflections on the successes and failures of integrating the microblogging platform Twitter into a first-year university class. Twitter, intended as a way to answer the question “What are you doing?” is now used in originally unexpected ways. Broadly speaking, Twitter’s popularity can be traced to three factors: conversation between users; a decentralized ecosystem of third-party applications; and as a result, the distributed nature of the users. Adopted by educators in higher education, Twitter has been used as an object for study; a tool to communicate classroom announcements; as a way to enable students to reflect on their learning; a chance to get instant feedback\r\nfrom students; and as the specific tool used to facilitate in-class conversations.'),
(65, 'February-11-2022 15:59:21', 'Presenting a Conceptual Model of Adopting Micro-Blogging in Learning', 'Collaboration', 'Mansi ', '', 'Platforms like information sharing, disseminating, and acquiring based on users\' transactions are provided by Microblogging sites. Nowadays microblogs are the main tools for people to send their opinions to relatives, friends, or the world quickly. This paper uses the Theory of planned behavior to investigate and explain Tabriz University of Medical Sciences (TUOMS) students’ acceptance of Microblogging. A questionnaire was applied to collect data from students of TUOMS University and the data were analyzed by SPSS V.16. After analysis, the results demonstrate that Attitude toward the Behavior, Subjective Norms, and Perceived Behavioral  Control has positive effects on behavioral intentions, and behavioral intentions also have positive effects on user behavior'),
(67, 'February-11-2022 16:01:55', 'A model for assessing blog-based learning systems success', 'Collaboration', 'Mansi ', '', 'Based on previous information systems/educational technology success models, the purpose of this paper is to establish a comprehensive, multidimensional model for assessing blog-based learning systems\' success. Data collected from 240 blog-based learning systems users in the context of higher education was tested against the model using the structural equation modeling approach.'),
(68, 'February-11-2022 16:19:25', 'Tweeting for learning: A critical analysis of research on microblogging in education ', 'Higher Education', 'Mansi ', 0x646f776e6c6f61642e706e67, 'This study critically analyzed the current body of published research on microblogging in education (MIE) to build a deep and comprehensive understanding of this increasingly popular phenomenon. Twenty-one studies on MIE in 2008–2011 were selected based on the selection criteria and analyzed to answer the following questions: What types of research have been published on  MIE? How was microblogging used for teaching and learning in these studies? What educational benefits did microblogging have on teaching and learning? What suggestions and implications did the current research have for future MIE research and practices?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'Pure Coding', 'purecodingofficial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins_1`
--
ALTER TABLE `admins_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admins_1`
--
ALTER TABLE `admins_1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Foreign_Relation` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
