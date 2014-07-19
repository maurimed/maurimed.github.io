/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : eprotest

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-07-01 13:25:23
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `administrators`
-- ----------------------------
DROP TABLE IF EXISTS `administrators`;
CREATE TABLE `administrators` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personal_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personal_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about_me` text COLLATE utf8_unicode_ci,
  `city_id` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of administrators
-- ----------------------------
INSERT INTO `administrators` VALUES ('1', 'Admin', 'User', '(+593) 985 176 257', null, null, null, null, '14', '1', null, '2014-07-01 14:38:09', '2014-07-01 14:38:09');
INSERT INTO `administrators` VALUES ('2', 'Oswaldo', 'Chávez', '(+593) 994 055 115', null, null, null, null, '14', '1', null, '2014-07-01 14:38:09', '2014-07-01 14:38:09');

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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'Administrator', 'adminemailcom', 'default', 'admin@email.com', '$2y$10$IgyihEnJoYjwIqTh.QAdhegz.1qUjpwairSGo9s8baM2zbokbTKOq', '', null, '2014-07-01 14:38:09', '2014-07-01 14:38:09');
INSERT INTO `users` VALUES ('2', '2', 'Administrator', 'ochavezhotmailcom', 'default', 'ochavez@hotmail.com', '$2y$10$y0nVYUoLDT/GXon3Bnvwv.rtTHS0DGbk6bwJcREArlBIGToVpv/jW', '', null, '2014-07-01 14:38:09', '2014-07-01 14:38:09');
INSERT INTO `users` VALUES ('3', '1', 'Director', 'directoremailcom', 'default', 'director@email.com', '$2y$10$SwmbtnOZusewfN.9AkztNurvfJLHJ2a3DME3uMJ3Y2UaN4ezk3Rpm', '', null, '2014-07-01 14:38:10', '2014-07-01 14:38:10');
INSERT INTO `users` VALUES ('4', '1', 'Ambassador', 'xabierloorepro360com', 'Xabier-Loor.jpg', 'xabierloor@epro360.com', '$2y$10$i91j2kD0NbucRIW94mwICOVkpeJIrz2ZM5b4ofF87zVg.fuKxm2yy', '', null, '2014-07-01 14:38:10', '2014-07-01 14:38:10');
INSERT INTO `users` VALUES ('5', '2', 'Ambassador', 'frankmongeepro360com', 'Frank-Monge.jpg', 'frankmonge@epro360.com', '$2y$10$PYI63oNYh.5EOEpF2WonbeCuOrKHeQhjrxFb0paFVelSZjAJwMb76', '', null, '2014-07-01 14:38:10', '2014-07-01 14:38:10');
INSERT INTO `users` VALUES ('6', '3', 'Ambassador', 'ipapiolepro360com', 'Israel-Papiol.jpg', 'ipapiol@epro360.com', '$2y$10$FiQ0wpRLuF98CS4FQ/jrNevU4tdrACwP7S5zIbQE63dpL/0cFUFWe', '', null, '2014-07-01 14:38:10', '2014-07-01 14:38:10');
INSERT INTO `users` VALUES ('7', '4', 'Ambassador', 'naranbaataroepro360com', 'Narku-Naranbaatar.jpg', 'naranbaataro@epro360.com', '$2y$10$xL47SEvgpoiGvqaJZkBGauUNf4EPcx97EahIEddBLWPjXEXnoZklK', '', null, '2014-07-01 14:38:10', '2014-07-01 14:38:10');
INSERT INTO `users` VALUES ('8', '5', 'Ambassador', 'jkehrbaumepro360com', 'Jonas-Kehrbaum.jpg', 'jkehrbaum@epro360.com', '$2y$10$wgEVv...BttVu0REMjMbsubzcoYhfjFIRk03CbxqRn9d023LT12.q', '', null, '2014-07-01 14:38:10', '2014-07-01 14:38:10');
INSERT INTO `users` VALUES ('9', '6', 'Ambassador', 'ochavezepro360com', 'Oswaldo-Chavez.jpg', 'ochavez@epro360.com', '$2y$10$DB8.AVzipBNGpISq0wFrNuYd836wClHfOX2/DrBg14qv3vL5gHs46', '', null, '2014-07-01 14:38:10', '2014-07-01 14:38:10');
INSERT INTO `users` VALUES ('10', '1', 'Student', 'studentemailcom', 'default', 'student@email.com', '$2y$10$ejpC2u2FxuIQKbVa/bBCSuNny7AsZ9OPP3i44cfj5raizXGSDtYIy', '', null, '2014-07-01 14:38:11', '2014-07-01 14:38:11');
INSERT INTO `users` VALUES ('11', '2', 'Student', 'student2emailcom', 'default', 'student2@email.com', '$2y$10$Aaqr6EQVP59lvpP3IyRwR.3rOOi4C.YAzFa4k2fSnNa9y4eB4c6U.', '', null, '2014-07-01 14:38:11', '2014-07-01 14:38:11');
INSERT INTO `users` VALUES ('12', '1', 'Representative', 'parentemailcom', 'default', 'parent@email.com', '$2y$10$U/JDNKcerJpsLU9V2XpVpu8oTUw.78T8I0PtjBZiaotMe/0VQd7Wi', '', null, '2014-07-01 14:38:11', '2014-07-01 14:38:11');
INSERT INTO `users` VALUES ('13', '2', 'Representative', 'parent2emailcom', 'default', 'parent2@email.com', '$2y$10$l.l7AmqmtouZOJOV4pbwBe0LLaGZAf8IeZXrjQ/CDLXU5.UxcM4ne', '', null, '2014-07-01 14:38:11', '2014-07-01 14:38:11');
INSERT INTO `users` VALUES ('14', '1', 'Manager', 'manageremailcom', 'default', 'manager@email.com', '$2y$10$6LL47HtnQ5gOuZ7zVtoAN.UQPNTRUkdWVhgeb8gKxRLOvFHX7aQ2y', '', null, '2014-07-01 14:38:11', '2014-07-01 14:38:11');
