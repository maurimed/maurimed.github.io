/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : eprotest

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-06-25 21:32:44
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `ambassadors`
-- ----------------------------
DROP TABLE IF EXISTS `ambassadors`;
CREATE TABLE `ambassadors` (
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ambassadors
-- ----------------------------
INSERT INTO `ambassadors` VALUES ('1', 'Xabier', 'Loor', '(+593) 985 176 257', null, null, null, null, null, '174', '0', '2014-06-26 02:31:08', '2014-06-26 02:31:08');
INSERT INTO `ambassadors` VALUES ('2', 'Frank', 'Monge', '(+593) 994 055 115', null, null, null, null, null, '174', '0', '2014-06-26 02:31:08', '2014-06-26 02:31:08');
INSERT INTO `ambassadors` VALUES ('3', 'Israel', 'Papiol', '(+34) 682 890 170', null, null, null, null, null, '140', '0', '2014-06-26 02:31:08', '2014-06-26 02:31:08');
INSERT INTO `ambassadors` VALUES ('4', 'Narku', 'Naranbaatar', '(+1) 636 634 5068', null, null, null, null, null, '80', '0', '2014-06-26 02:31:08', '2014-06-26 02:31:08');
INSERT INTO `ambassadors` VALUES ('5', 'Jonas', 'Kehrbaum', '(+49) 162 366 9497', null, null, null, null, null, '116', '0', '2014-06-26 02:31:08', '2014-06-26 02:31:08');
INSERT INTO `ambassadors` VALUES ('6', 'Oswaldo', 'Chávez', '(+593) 98 644 7648', null, null, null, null, null, '174', '0', '2014-06-26 02:31:08', '2014-06-26 02:31:08');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'Administrator', 'adminemailcom', 'default', 'admin@email.com', '$2y$10$aXRMtBPcestEpqb5IhNP2.gl/ir8g7zffCmjjPkCgyZUOPBql87YS', '', '2014-06-26 02:31:07', '2014-06-26 02:31:07');
INSERT INTO `users` VALUES ('2', '1', 'Student', 'studentemailcom', 'default', 'student@email.com', '$2y$10$qtpNiNr.UhhjmJaf0aeCL.nhIQZ6Vt8X/.qG4G37md4vu.JLYevse', '', '2014-06-26 02:31:07', '2014-06-26 02:31:07');
INSERT INTO `users` VALUES ('3', '1', 'Representative', 'parentemailcom', 'default', 'parent@email.com', '$2y$10$GUIFDJDwgzOmgdeQunarZeE5Ba8CkumBQSCo/V4qX0r8fLiX1Skpe', '', '2014-06-26 02:31:07', '2014-06-26 02:31:07');
INSERT INTO `users` VALUES ('4', '1', 'Director', 'directoremailcom', 'default', 'director@email.com', '$2y$10$OySDSgWjJsPZtC0k0WvJde49TBsJVmLS4dK101nKZTAL.W11Gg1Xu', '', '2014-06-26 02:31:08', '2014-06-26 02:31:08');
INSERT INTO `users` VALUES ('5', '1', 'Ambassador', '', 'Xabier-Loor.jpg', 'xabierloor@epro360.com', '', '', '2014-06-26 02:31:08', '2014-06-26 02:31:08');
INSERT INTO `users` VALUES ('6', '2', 'Ambassador', '', 'Frank-Monge.jpg', 'frankmonge@epro360.com', '', '', '2014-06-26 02:31:08', '2014-06-26 02:31:08');
INSERT INTO `users` VALUES ('7', '3', 'Ambassador', '', 'Israel-Papiol.jpg', 'ipapiol@epro360.com', '', '', '2014-06-26 02:31:08', '2014-06-26 02:31:08');
INSERT INTO `users` VALUES ('8', '4', 'Ambassador', '', 'Narku-Naranbaatar.jpg', 'naranbaataro@epro360.com', '', '', '2014-06-26 02:31:08', '2014-06-26 02:31:08');
INSERT INTO `users` VALUES ('9', '5', 'Ambassador', '', 'Jonas-Kehrbaum.jpg', 'jkehrbaum@epro360.com', '', '', '2014-06-26 02:31:08', '2014-06-26 02:31:08');
INSERT INTO `users` VALUES ('10', '6', 'Ambassador', '', 'Oswaldo-Chavez.jpg', 'ochavez@epro360.com', '', '', '2014-06-26 02:31:08', '2014-06-26 02:31:08');
