/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : eprotest

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-06-27 16:09:00
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `directors`
-- ----------------------------
DROP TABLE IF EXISTS `directors`;
CREATE TABLE `directors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personal_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personal_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about_me` text COLLATE utf8_unicode_ci,
  `city_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of directors
-- ----------------------------
INSERT INTO `directors` VALUES ('1', 'Director', 'user', '(+593) 985 176 257', null, null, null, null, null, '174', '0', '2014-06-27 21:03:18', '2014-06-27 21:03:18');

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `published_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for `representatives`
-- ----------------------------
DROP TABLE IF EXISTS `representatives`;
CREATE TABLE `representatives` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of representatives
-- ----------------------------
INSERT INTO `representatives` VALUES ('1', 'Kiel', 'Purdy', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `representatives` VALUES ('2', 'Chyna', 'Treutel', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `representatives` VALUES ('3', 'Joanie', 'Ondricka', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `representatives` VALUES ('4', 'Alden', 'Jacobs', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `representatives` VALUES ('5', 'Anita', 'Donnelly', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `representatives` VALUES ('6', 'Daron', 'Skiles', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `representatives` VALUES ('7', 'Travis', 'Hyatt', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `representatives` VALUES ('8', 'Lila', 'Baumbach', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `representatives` VALUES ('9', 'Rene', 'Erdman', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `representatives` VALUES ('10', 'Margarette', 'Botsford', '2014-06-27 21:03:18', '2014-06-27 21:03:18');

-- ----------------------------
-- Table structure for `requirements`
-- ----------------------------
DROP TABLE IF EXISTS `requirements`;
CREATE TABLE `requirements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of requirements
-- ----------------------------

-- ----------------------------
-- Table structure for `students`
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_me` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES ('1', 'Student', 'User', '(+593) 985 176 257', '', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `students` VALUES ('2', 'Student 2', 'User', '(+593) 994 055 115', '', '2014-06-27 21:03:18', '2014-06-27 21:03:18');

-- ----------------------------
-- Table structure for `universities`
-- ----------------------------
DROP TABLE IF EXISTS `universities`;
CREATE TABLE `universities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip_id` int(11) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tuition_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admissions_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sports_division` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `closest_airport` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `far_from_airport` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of universities
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userable_id` int(11) NOT NULL,
  `userable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'Ambassador', 'xabierloorepro360com', 'Xabier-Loor.jpg', 'xabierloor@epro360.com', '$2y$10$t8/t12QqGP7ShhjicCDLmO8mwA7CfzAhaSog0vaM/u2UNm1fMhc9e', '', '2014-06-27 21:03:16', '2014-06-27 21:03:16');
INSERT INTO `users` VALUES ('2', '2', 'Ambassador', 'frankmongeepro360com', 'Frank-Monge.jpg', 'frankmonge@epro360.com', '$2y$10$JD/1/oCLBwS6C60z6H6yD.fDwIZ1cv0HSQs1PuoEpb8XDbDrphZO6', '', '2014-06-27 21:03:17', '2014-06-27 21:03:17');
INSERT INTO `users` VALUES ('3', '3', 'Ambassador', 'ipapiolepro360com', 'Israel-Papiol.jpg', 'ipapiol@epro360.com', '$2y$10$6HBS3kVDz.Db0ObYnI6wDunJoVy.3Nx2LVMqmEBsdMj1FrsYTxdAW', '', '2014-06-27 21:03:17', '2014-06-27 21:03:17');
INSERT INTO `users` VALUES ('4', '4', 'Ambassador', 'naranbaataroepro360com', 'Narku-Naranbaatar.jpg', 'naranbaataro@epro360.com', '$2y$10$fF1J7G7geO303mL/5KrJGu6EF5rMzdkMWOXosqlBltbbsfT4WkmT6', '', '2014-06-27 21:03:17', '2014-06-27 21:03:17');
INSERT INTO `users` VALUES ('5', '5', 'Ambassador', 'jkehrbaumepro360com', 'Jonas-Kehrbaum.jpg', 'jkehrbaum@epro360.com', '$2y$10$07gNx2J8YGn063rXcDihRORZ0broaEIybF5mYZfPDwtPrVh0tk65S', '', '2014-06-27 21:03:17', '2014-06-27 21:03:17');
INSERT INTO `users` VALUES ('6', '6', 'Ambassador', 'ochavezepro360com', 'Oswaldo-Chavez.jpg', 'ochavez@epro360.com', '$2y$10$KY4JFK9NJDhTjcZ.uUECJuMbXLHEnOsxhfgY1gYYdnaVm1rF1SqO6', '', '2014-06-27 21:03:17', '2014-06-27 21:03:17');
INSERT INTO `users` VALUES ('7', '1', 'Student', 'studentemailcom', 'default', 'student@email.com', '$2y$10$CEflngJb3Zxs0MDK5LFSD.XZare9AWRDYxXkE0m0yWEMgfGVybTSy', '', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `users` VALUES ('8', '2', 'Student', 'student2emailcom', 'default', 'student2@email.com', '$2y$10$IxQ3MaE6J3tCdmq9v3f93u/iTzElvQOzaOmx38cVqzOrS/L9Odo/W', '', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `users` VALUES ('9', '1', 'Administrator', 'adminemailcom', 'default', 'admin@email.com', '$2y$10$fULuleAt9hfT0nXFsZnN2OD7awRNAuY5amFcZlOYnQrxLAby3dKIy', '', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `users` VALUES ('10', '2', 'Administrator', 'ochavezhotmailcom', 'default', 'ochavez@hotmail.com', '$2y$10$5JjMidQyATQZREb45yp37OyjITsw6mHlVpwJ17aRrJQ1tLKdKWv7m', '', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
INSERT INTO `users` VALUES ('11', '1', 'Director', 'directoremailcom', 'default', 'director@email.com', '$2y$10$75TZi2fPzg/7dd0c49vnxe1C7MS4kSk4xsACSYtGExOLQk2T8PUQW', '', '2014-06-27 21:03:18', '2014-06-27 21:03:18');
