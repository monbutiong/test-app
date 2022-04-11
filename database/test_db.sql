/*
Navicat MySQL Data Transfer

Source Server         : local-f
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : test_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-04-12 03:27:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `departments`
-- ----------------------------
DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(125) NOT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of departments
-- ----------------------------
INSERT INTO `departments` VALUES ('1', 'Information Technology', '2022-04-11 22:49:48', null);
INSERT INTO `departments` VALUES ('2', 'Human Resource', '2022-04-11 22:49:55', null);
INSERT INTO `departments` VALUES ('3', 'Production', '2022-04-11 22:50:02', null);
INSERT INTO `departments` VALUES ('4', 'Warehouse', '2022-04-11 22:50:07', null);
INSERT INTO `departments` VALUES ('5', 'Accounting', '2022-04-11 22:50:11', null);
INSERT INTO `departments` VALUES ('7', 'Audit DP', '2022-04-11 22:50:32', '2022-04-12 02:39:00');
INSERT INTO `departments` VALUES ('8', 'Engineering', '2022-04-12 02:32:58', null);

-- ----------------------------
-- Table structure for `designations`
-- ----------------------------
DROP TABLE IF EXISTS `designations`;
CREATE TABLE `designations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(125) NOT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of designations
-- ----------------------------
INSERT INTO `designations` VALUES ('1', 'Programmer', '2022-04-11 22:50:48', null);
INSERT INTO `designations` VALUES ('2', 'HR Assistant', '2022-04-11 22:50:56', null);
INSERT INTO `designations` VALUES ('3', 'Manager', '2022-04-11 22:51:00', null);
INSERT INTO `designations` VALUES ('4', 'Accountant', '2022-04-11 22:51:08', null);
INSERT INTO `designations` VALUES ('5', 'Store Keeper', '2022-04-11 22:51:16', null);
INSERT INTO `designations` VALUES ('6', 'Office Staff', '2022-04-11 22:51:38', null);

-- ----------------------------
-- Table structure for `employees`
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(125) NOT NULL,
  `last_name` varchar(125) NOT NULL,
  `address` varchar(200) DEFAULT '',
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `salary` float(11,2) DEFAULT NULL,
  `email` varchar(125) NOT NULL DEFAULT '',
  `bank_account_number` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES ('8', 'mon', 'butiong', 'santa rosa', '4', '4', '2022-04-12 01:14:19', null, '8923.00', 'mon@mail.com', '344534');
INSERT INTO `employees` VALUES ('10', 'Mee', 'General', 'Cristobal Camba', '4', '6', '2022-04-12 02:24:18', '2022-04-12 03:26:05', '5000.00', 'mee@mail.com', '9786-6785645-787');
INSERT INTO `employees` VALUES ('11', 'Henry', 'Cruz', 'San Diego USA', '1', '3', '2022-04-12 03:26:50', null, '9000.00', 'hcruz@mail.com', '234-3455-453');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(125) NOT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Administrator', '2022-04-12 01:35:05', '2022-04-12 03:15:04', 'admin', '$2y$10$ZXfx0tzCWRiewdGrWlNufuRKAygz0xxK9Z1oMmmBR5xmFnMMUVFma');
