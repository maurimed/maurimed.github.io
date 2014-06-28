/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : eprotest

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-06-25 21:08:53
*/

SET FOREIGN_KEY_CHECKS=0;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'Administrator', 'adminemailcom', 'default', 'admin@email.com', '$2y$10$abgQUG3sK195I74UKcIbvueikEInq.XB/4FjxAz7KZfkhLObT2vxi', '', '2014-06-26 01:14:03', '2014-06-26 01:14:03');
INSERT INTO `users` VALUES ('2', '1', 'Student', 'studentemailcom', 'default', 'student@email.com', '$2y$10$tid2tMduIPHZZJemnXOQr.hoTPMir9sZmNuffpcxlibfzke5i2j2e', '', '2014-06-26 01:14:03', '2014-06-26 01:14:03');
INSERT INTO `users` VALUES ('3', '1', 'Representative', 'parentemailcom', 'default', 'parent@email.com', '$2y$10$PZ/YQdwFkTRtKJTpilaZYeLZeBSpkkfTe61GsPlmyMyCzWpwmoZ/6', '', '2014-06-26 01:14:03', '2014-06-26 01:14:03');
INSERT INTO `users` VALUES ('4', '1', 'Director', 'directoremailcom', 'default', 'director@email.com', '$2y$10$pDkk2X4fPne7wifVuDtkQOvaXf8vLyQHGFh8eimMDE3C2L/4dqSVq', '', '2014-06-26 01:14:03', '2014-06-26 01:14:03');
INSERT INTO `users` VALUES ('5', '1', 'Ambassador', '', 'Xabier-Loor.jpg', 'xabierloor@epro360.com', '', '', '2014-06-26 01:14:03', '2014-06-26 01:14:03');
INSERT INTO `users` VALUES ('6', '2', 'Ambassador', '', 'Frank-Monge.jpg', 'frankmonge@epro360.com', '', '', '2014-06-26 01:14:03', '2014-06-26 01:14:03');
INSERT INTO `users` VALUES ('7', '3', 'Ambassador', '', 'Israel-Papiol.jpg', 'ipapiol@epro360.com', '', '', '2014-06-26 01:14:03', '2014-06-26 01:14:03');
INSERT INTO `users` VALUES ('8', '4', 'Ambassador', '', 'Narku-Naranbaatar.jpg', 'naranbaataro@epro360.com', '', '', '2014-06-26 01:14:03', '2014-06-26 01:14:03');
INSERT INTO `users` VALUES ('9', '5', 'Ambassador', '', 'Jonas-Kehrbaum.jpg', 'jkehrbaum@epro360.com', '', '', '2014-06-26 01:14:03', '2014-06-26 01:14:03');
