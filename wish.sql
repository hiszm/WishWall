/*
Navicat MySQL Data Transfer

Source Server         : localhost_mysql
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : wish

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-08-05 10:04:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wall
-- ----------------------------
DROP TABLE IF EXISTS `wall`;
CREATE TABLE `wall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `color` varchar(11) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wall
-- ----------------------------
INSERT INTO `wall` VALUES ('1', '李白', '1615117317', 'a1', '到此一游');
INSERT INTO `wall` VALUES ('2', '白居易', '1615117317', 'a2', '李白你懂我吗?');
INSERT INTO `wall` VALUES ('3', '李清照', '1615117317', 'a3', '凄凄惨惨戚戚');
INSERT INTO `wall` VALUES ('4', '小白', '1615117317', 'a2', '测试');
