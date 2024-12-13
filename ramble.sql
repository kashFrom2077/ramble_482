-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 07:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramble`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `postID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `postImage` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `userID`, `title`, `content`, `postImage`, `timestamp`) VALUES
(16, 8, 'tanim', 'iqramuliqramuliqramuliqramuliqramuliqramuliqramuliqramuliqramuliqramuliqramuliqramuliqramuliqramuliqramuliqramuliqramuliqramul', '../articlePix/8_1695920555.jpg', '2023-09-28 13:02:35'),
(21, 8, 'Amader matifafaf', 'vvaefgaefaf', '../articlePix/8_1695921361.jpg', '2023-09-28 13:16:01'),
(43, 9, 'abcd', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '../articlePix/9_1696268844.jpg', '2023-10-02 13:47:24'),
(44, 9, 'check post', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus non perferendis, reprehenderit rerum ut voluptates cum adipisci deserunt? Pariatur quo omnis dolores reiciendis explicabo aliquid fugit, aliquam nam tenetur. Quos non laudantium qui architecto quo fuga explicabo aliquid, totam asperiores iure voluptatem, eveniet mollitia aut natus hic velit blanditiis nam exercitationem nemo omnis sunt sed ipsam ratione. Impedit, dolorem aliquam aliquid quaerat ex ratione libero quod inventore iure est molestiae reprehenderit modi labore natus sed aspernatur dignissimos. Quo, aut eius. Atque, distinctio vel, laboriosam magni minus autem vero incidunt dolores rem expedita harum modi dolore sit quo? Veritatis molestiae quidem, reiciendis in, alias facere rerum quisquam ut ratione eius voluptatum sit eum? Aliquam labore asperiores dignissimos consequuntur iusto illo similique eveniet earum distinctio, amet quia porro, nesciunt quae quasi, in eos! Molestiae minima hic iure aut. Molestias incidunt iure culpa nobis enim quas laboriosam optio hic, inventore dolores, provident modi est neque, id tenetur perferendis voluptates quia quisquam ipsam a illum? Repellendus dolorum nobis velit amet labore accusantium autem, nihil consequatur ducimus quo sunt iusto corrupti non magni officiis possimus veniam soluta fuga in nulla optio voluptas? Adipisci sapiente iusto ex, ipsum labore culpa nesciunt est ullam reprehenderit exercitationem! Labore consequuntur dignissimos inventore molestiae optio repudiandae nesciunt perferendis harum, autem accusamus id. Sapiente quasi voluptate ipsam sed obcaecati optio aliquid doloremque rem excepturi, magni, amet harum deleniti debitis facilis repudiandae saepe unde cumque porro beatae laboriosam laudantium quaerat. Accusantium doloribus amet molestiae error harum quia repellat dolore at in odio nostrum perspiciatis distinctio cum natus voluptatum modi itaque earum rem pariatur, asperiores repudiandae. Perferendis, voluptatem eaque soluta sunt tempora labore ut facilis provident est, quidem fugiat similique autem numquam molestiae consequatur! Quos id reprehenderit, eum ex omnis exercitationem doloribus amet laudantium quasi consectetur culpa commodi cumque hic possimus mollitia ea aspernatur, dolorem quaerat! Inventore aperiam cumque veniam deserunt quaerat fuga maxime quam animi suscipit impedit fugit error eum magnam commodi nobis deleniti aut, corrupti laudantium repudiandae odio vel. Excepturi magni recusandae repudiandae? At magni saepe quas sit nemo ullam porro aliquid expedita! Ducimus distinctio inventore quam iste labore, numquam voluptatem eos voluptatibus et quod explicabo provident repellendus veritatis commodi ex dolorem ut quae minus. Suscipit ab est recusandae nemo eveniet iste, aperiam id ad sed sequi dolorem fuga nulla, quidem rerum, saepe nostrum libero officia quia explicabo. Ut consequuntur quae tempora ad totam harum corporis, iure, repellat accusamus minus rem cum at vero cupiditate modi, adipisci delectus. Rem, natus obcaecati. Magni aliquid dolor velit, eius rerum molestias labore eligendi cum expedita sunt, quasi ipsa! Quod a illum soluta libero suscipit! Eum dolorum, libero delectus tempora quia repellendus facilis itaque sint minus. Labore ducimus amet quas similique! Molestiae doloribus id culpa sit rerum modi neque reprehenderit officia, blanditiis odit illum expedita vel voluptate aut odio amet? Quasi ut ipsum deserunt nam perferendis voluptatibus reiciendis natus at aliquid hic expedita quos itaque quis deleniti consequatur, veniam libero obcaecati nesciunt porro iure, sunt vero officiis! Labore facilis tempora vero in, dignissimos odio? Delectus.', '../articlePix/9_1696363098.jpg', '2023-10-03 15:58:18'),
(45, 9, 'checkpost 2', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur sunt eligendi unde esse animi? Sunt fugit, eveniet itaque, iusto adipisci laborum labore voluptatum debitis odio pariatur qui, a accusamus sint unde molestiae? Pariatur aut sit, laudantium culpa enim molestiae excepturi aliquid at et minima amet harum cum commodi natus soluta praesentium nulla ex facilis atque deleniti itaque! At, libero error officiis dolorem vel possimus placeat impedit delectus, culpa ducimus quasi doloribus itaque. Aut provident quasi accusantium molestias, laboriosam perspiciatis maiores ipsum aspernatur ipsa modi non laborum fugit sit ut mollitia tempore numquam tenetur, dolor, earum accusamus est in! Et non unde iste amet labore facere quidem a praesentium maiores dignissimos possimus vero debitis cumque facilis ex, quod consequatur sint, expedita nihil ipsum eaque? Numquam ipsam veritatis ullam, magni soluta libero, natus delectus consequuntur ratione, blanditiis perspiciatis corporis earum officia iste veniam reiciendis officiis ducimus error esse minus quas repudiandae voluptate? Nemo accusantium asperiores aperiam dolores obcaecati ad iure necessitatibus ullam exercitationem voluptatem? Dolor accusantium iure non eligendi ea temporibus vel illo sit reiciendis eius eos consequatur libero ad magnam quia sed odit asperiores velit, molestiae maiores nulla repellat consectetur. Excepturi mollitia molestias deleniti voluptatem, explicabo accusamus maxime fugit ad praesentium rem ea tempore cupiditate non maiores aspernatur iste, sequi ratione quisquam dolore? Explicabo doloribus adipisci perferendis in maxime libero nobis quasi voluptatem blanditiis? Consequuntur, quo corporis voluptates veniam quaerat earum, consectetur sed, enim illum ab facere perspiciatis suscipit asperiores accusantium perferendis excepturi soluta modi? Iusto quis vero a! Sed eius beatae tenetur suscipit nisi enim, maxime culpa sint facilis dolorem, voluptatem non ab, at reiciendis modi sapiente quo eos eligendi repellendus commodi. Odio beatae veritatis ipsum non dolore maiores cumque aliquid in accusantium. Officiis, veritatis minus officia dignissimos labore sed repellat, mollitia aperiam obcaecati nam vel animi repudiandae nulla alias tempora asperiores earum rem ad. Neque unde itaque officiis fuga praesentium? Illum adipisci pariatur error officia, aperiam laudantium minima aliquid ratione exercitationem maiores, quidem soluta totam recusandae dolorem id reprehenderit consequatur similique molestias! Doloribus iste vel quae saepe assumenda possimus provident fuga. Sunt officia repudiandae vel dignissimos in sequi fugiat expedita suscipit corporis laborum! Dicta, error iusto accusantium cupiditate mollitia repellat eligendi! Magni, sed libero, ullam tempore perferendis voluptates itaque corrupti facilis natus, nisi unde? Libero quidem nobis quis delectus, accusamus distinctio similique, omnis nemo doloremque voluptatibus voluptates at excepturi corporis? At fugiat animi quas eos, eaque totam magni temporibus? Nesciunt blanditiis odio ad placeat fuga similique voluptatibus illo natus architecto! Reprehenderit, qui est. Praesentium rem deserunt ipsam culpa, corporis vel in minus delectus, tenetur provident ea enim illo similique rerum, qui voluptatibus hic molestias. Ut, excepturi quam. Dolore adipisci molestiae similique vel, dolorem saepe consequuntur fugiat repudiandae quas minima, ipsa laudantium nulla voluptatem illum consectetur, autem rem reiciendis magnam beatae voluptates nemo et harum. Saepe itaque dolores necessitatibus eum ipsum atque quos non eos. Iure animi dolorum accusantium at excepturi. Ipsum quae nostrum error non ipsam perferendis voluptatibus impedit consequuntur, commodi cupiditate, vero recusandae ratione qui minus temporibus beatae.', '../articlePix/9_1696410876.jpg', '2023-10-04 05:14:36'),
(46, 9, 'one ', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', '../articlePix/9_1696426443.jpg', '2023-10-04 09:34:03'),
(47, 9, 'delete this post ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum facere suscipit ad quia officia reiciendis libero, provident sequi omnis, hic sint magni error doloremque quam, totam cupiditate. Accusantium temporibus maxime delectus dolor molestiae dicta aut id libero ut, beatae assumenda ullam porro repellendus voluptas natus suscipit ipsa animi sed quod praesentium vel sint eligendi modi quia! Excepturi ratione quidem fuga qui praesentium rerum! Iure, maxime! Architecto necessitatibus, impedit deleniti sed facere expedita quod perspiciatis totam autem odit, porro suscipit ex quibusdam iusto nam. Repellat vero laboriosam accusamus quibusdam nobis a modi nesciunt nulla ipsam! Fuga, porro quidem? Vitae quod, cum minus distinctio reiciendis impedit omnis adipisci quae modi velit eaque consectetur voluptate, accusantium a temporibus iure itaque excepturi rem beatae nihil accusamus molestiae officiis placeat suscipit. Rem beatae illo non. Accusantium saepe in atque eaque quo iusto, esse dignissimos facilis suscipit eveniet sunt exercitationem quos dolorum quasi qui mollitia deleniti? Ad placeat corporis impedit dolorem cupiditate, aut esse facilis odio provident harum? Iste, mollitia. Eaque officiis illum sequi laudantium? Iste dolor, neque aspernatur suscipit delectus vitae et quisquam sequi aperiam laudantium libero dicta, praesentium iusto, eos sapiente voluptatem! Ab quas iste vitae in. Eum, minus enim? Ipsam adipisci id itaque perferendis tempora, consectetur illum reiciendis, quasi suscipit iusto maxime hic natus unde ipsum qui! Voluptates consequuntur accusamus, ad minima dignissimos, eos recusandae iure vero laudantium fugiat illum ducimus possimus expedita qui repellat quod repudiandae id provident nam labore eligendi harum quae. Totam eaque esse aperiam. Ex vero dolor saepe possimus, quam eligendi iusto deleniti dolores illo totam nobis in accusantium corporis repudiandae. Tempore sequi fuga eum itaque quo dicta autem voluptates! Incidunt dolore veritatis expedita aperiam sed accusantium consectetur iste, praesentium fuga voluptatum reiciendis velit ipsam harum saepe tempore perferendis ab enim perspiciatis! Laborum sed adipisci fuga officiis tempora incidunt temporibus quam recusandae, veritatis, ullam voluptatem? Repellendus eius necessitatibus dolor placeat sunt ducimus, itaque quis. Reiciendis repellat mollitia itaque ratione. Cupiditate assumenda eius cum minima necessitatibus, sequi non ipsum quo, libero a ipsam soluta consectetur distinctio, fuga maxime asperiores ea perferendis ipsa. Facere minus quam repudiandae, beatae tempora ut similique tempore aliquam voluptates earum neque commodi numquam iste assumenda blanditiis voluptate quos cumque distinctio necessitatibus illo magni! Itaque qui, dolores ipsa expedita ipsam beatae ratione fugit quaerat ducimus perspiciatis asperiores voluptates illum nam eos aliquid voluptatum, quam quod, quos illo. Odit deserunt in, quibusdam laudantium suscipit labore iste officia, consectetur, perspiciatis optio animi illo consequatur possimus veritatis. Enim maiores iste ex ratione itaque laborum a. Eos eaque dolores vero ipsa nam dicta tenetur nesciunt officia voluptatibus, omnis rem obcaecati ab deleniti suscipit reiciendis dolorum repudiandae! Optio consectetur minima rerum nulla sint fugiat! Amet ab dolor, ullam voluptate cupiditate at, modi asperiores veniam impedit ea quasi a minima consectetur perferendis temporibus voluptatibus deserunt. Nobis quasi ea vitae aperiam, earum voluptatibus, exercitationem est cum alias veritatis dignissimos culpa, doloribus aspernatur voluptates numquam dolor eum natus similique. Accusamus voluptate corporis dignissimos voluptas totam doloribus, rerum ea molestias quaerat, mollitia autem vitae porro hic!', '../articlePix/9_1696448430.jpg', '2023-10-04 15:40:30'),
(48, 9, 'new title', 'new post', '../articlePix/9_1697310822.jpg', '2023-10-14 15:13:42'),
(49, 34, 'SPORTS', 'FOOTBALL', '../articlePix/34_1697999370.jpg', '2023-10-22 14:29:30'),
(50, 34, 'FOOTBALL', 'SPORTS', '../articlePix/34_1697999393.jpg', '2023-10-22 14:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Relationships'),
(2, 'Dating'),
(3, 'Marriage'),
(4, 'Divorce'),
(5, 'Friendship'),
(6, 'Love'),
(7, 'Sports'),
(8, 'Football'),
(9, 'Cricket'),
(10, 'Baseball'),
(11, 'Tennis'),
(12, 'Self Development'),
(13, 'Journaling'),
(14, 'Mediation'),
(15, 'Morning Routine'),
(16, 'Life Lessons'),
(17, 'Self-awareness'),
(18, 'Goal Setting'),
(19, 'Cities'),
(20, 'Dhaka'),
(21, 'Chittagong'),
(22, 'Khulna'),
(23, 'Rajshahi'),
(24, 'Science & Technology'),
(25, 'Physics'),
(26, 'Biology'),
(27, 'Astronomy'),
(28, 'Artificial Intelligence'),
(29, 'Hardware'),
(30, 'Software & Applications'),
(31, 'Neuroscience'),
(32, 'TV & Entertainment'),
(33, 'TV-series'),
(34, 'Movies'),
(35, 'Video Games'),
(36, 'Reality Shows'),
(37, 'Cartoons & Animes'),
(38, 'Business'),
(39, 'Startups'),
(40, 'Freelancing'),
(41, 'Entrepreneurship'),
(42, 'Small Business'),
(43, 'Venture Capital'),
(44, 'Mental Health'),
(45, 'Depression'),
(46, 'Anxiety'),
(47, 'Counseling'),
(48, 'Trauma'),
(49, 'Family'),
(50, 'Children'),
(51, 'Elder Care'),
(52, 'Fatherhood'),
(53, 'Motherhood'),
(54, 'Parenting'),
(55, 'Pregnancy');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `commentText` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `postID`, `userID`, `commentText`, `timestamp`) VALUES
(1, 46, 9, 'asdjhakj das dad asdas das', '2023-10-08 13:49:05'),
(2, 46, 9, 'asdjhakj das dad asdas dasasda da', '2023-10-08 13:49:10'),
(3, 46, 9, 'asd ahjdasd asd', '2023-10-08 13:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `likeID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `postCategoryID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`postCategoryID`, `postID`, `categoryID`) VALUES
(7, 16, 2),
(8, 16, 4),
(18, 21, 2),
(19, 21, 4),
(48, 43, 1),
(49, 43, 5),
(50, 44, 1),
(51, 44, 4),
(52, 45, 1),
(53, 45, 3),
(54, 46, 1),
(55, 46, 5),
(56, 47, 1),
(57, 47, 2),
(58, 48, 12),
(59, 48, 14),
(60, 49, 7),
(61, 49, 8),
(62, 50, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `userEmail` varchar(128) NOT NULL,
  `userFName` varchar(64) NOT NULL,
  `userLName` varchar(64) NOT NULL,
  `userPass` varchar(128) NOT NULL,
  `userBio` text DEFAULT NULL,
  `userDP` varchar(255) NOT NULL,
  `joiningDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `userName`, `userEmail`, `userFName`, `userLName`, `userPass`, `userBio`, `userDP`, `joiningDate`) VALUES
(8, 'abcde', 'abcde@abcde.com', 'abc', 'de', '$2y$10$JllIm2jb.X7jGsMKlcgno.g/0MVSQd3pIWViYDaEsKadzW1lPN6c2', 'abcde123', '../people/abcde_6513cd9c33a95.png', '2023-09-27'),
(9, 'shellyallen', 'xyz123@gmail.com', 'Shelly', 'Allen', '$2y$10$wdnJT1mJHma1SEeXMxM7Ce3pCkm018qjy26Y9JjmUVMfIiq1TC1I.', 'abcd', '../people/shellyallen_6519b8a044bec.jpg', '2023-09-27'),
(10, 'pqrst', 'pqr@gmail.com', 'pqr', 'st', '$2y$10$RDWLOE1mJcUu9iLKvE7bTuK1wNGljL7KMG08Y20yGYszpr9Ph0lBS', 'abxasdasd', '../people/pqrst_651ae706d85a0.jpg', '2023-09-27'),
(11, 'johndoe', 'johndoe@gmail.com', 'john', 'doe', '$2y$10$oZyb7dirNfYY5WZAjwYs4udKvutMXaaRnTxHErIDrGqMMTZt3uh4C', 'king', '../people/johndoe_6520527b7e5f1.jpg', '2023-10-06'),
(31, 'tanimm', 'iqramulhoque02@gmail.com', 'Taneem', 'Yo', '$2y$10$t9tM67kWrzO6SsvNyC/8TOFJgmTv4E8eX01io7OCZl4ucdLgLVnUe', 'king', 'profile_pic_6534c84f0d466_x5.jpg', '2023-10-21'),
(32, 'tanimmbhoi', 'iqramulhoque01@gmail.com', 'Iqramul', 'hoque', '$2y$10$i694EeKXmmjmzLCDCoxUxeT.Gaj/EqrVrG23jn9Y3o6c0JQV7x7Ne', 'asda', 'https://lh3.googleusercontent.com/a/ACg8ocIdoFioU_WBXcSdk9u7nmqTzr9v8lmsrS4-7j92KF7z6g=s96-c', '2023-10-21'),
(34, 'tanimbhoi', 'iqramul.haque02@northsouth.edu', 'Iqramul Haque', 'Tanim', '$2y$10$.KpMZKUaF5Gfb.bxQTMEo.53PeV0PJp1nNc3uaPCk1e4MgTav6DKW', 'king', 'https://lh3.googleusercontent.com/a/ACg8ocLKde5hQMh-2sULhOpCm1RrCVSI90RkUf80HLheobQ9Eg=s96-c', '2023-10-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `postID` (`postID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`likeID`),
  ADD KEY `postID` (`postID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`postCategoryID`),
  ADD KEY `postID` (`postID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `likeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `postCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`uid`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`postID`) REFERENCES `blog_posts` (`postID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`uid`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`postID`) REFERENCES `blog_posts` (`postID`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`uid`);

--
-- Constraints for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD CONSTRAINT `fk_post_categories_blog_posts` FOREIGN KEY (`postID`) REFERENCES `blog_posts` (`postID`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_categories_ibfk_1` FOREIGN KEY (`postID`) REFERENCES `blog_posts` (`postID`),
  ADD CONSTRAINT `post_categories_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
