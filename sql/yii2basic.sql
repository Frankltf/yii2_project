/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : yii2basic

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-03-28 14:07:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ltf_manager
-- ----------------------------
DROP TABLE IF EXISTS `ltf_manager`;
CREATE TABLE `ltf_manager` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `userip` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ltf_manager
-- ----------------------------
INSERT INTO `ltf_manager` VALUES ('1', 'frank', '123456', null);
INSERT INTO `ltf_manager` VALUES ('2', 'meng', '111111', null);
INSERT INTO `ltf_manager` VALUES ('3', 'jiezou', '222222', null);
