/*
Navicat MySQL Data Transfer

Source Server         : hulitong
Source Server Version : 80012
Source Host           : localhost:3306
Source Database       : hulitong

Target Server Type    : MYSQL
Target Server Version : 80012
File Encoding         : 65001

Date: 2020-03-15 17:55:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '角色id',
  `role_name` varchar(30) DEFAULT NULL COMMENT '角色名称',
  `note_mark` text COMMENT '角色备注',
  `listorder` tinyint(4) DEFAULT NULL COMMENT '角色排序',
  `create_time` int(11) DEFAULT NULL COMMENT '角色创建时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '角色删除时间',
  `update_time` int(11) DEFAULT NULL COMMENT '角色修改更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('17', '客服管理员', '对会员所反映的问题以及建议用，拥有回复删改等权限', null, '1584175280', '1584235408', '1584235408');
INSERT INTO `role` VALUES ('16', '产品管理员', '对库内的所有产品拥有上传、修改、删除等所有权限', null, '1584175162', null, '1584238045');
INSERT INTO `role` VALUES ('15', '超级管理员', '皇帝，拥有至高无上的权力', null, '1584175116', null, '1584175116');
INSERT INTO `role` VALUES ('18', '财务', '查看实际营收，对报表下载修改的权限', null, '1584175358', null, '1584175358');
INSERT INTO `role` VALUES ('19', '文章管理员', '对站内的所有文章以及公告等，发布、修改、审核等权限', null, '1584175433', null, '1584175433');
INSERT INTO `role` VALUES ('20', '产品管理员', '对库内的所有产品拥有所有权限', null, '1584190583', '1584238418', '1584238418');
INSERT INTO `role` VALUES ('21', '产品管理员一', '对库内的所有产品拥有所有权限', null, '1584190621', '1584235115', '1584235115');
INSERT INTO `role` VALUES ('22', '产品组管理员', '对库内的所有产品拥有所有权限', null, '1584233672', '1584235137', '1584235137');
INSERT INTO `role` VALUES ('23', '普通管理员', '普通查看', null, '1584242546', null, '1584242546');

-- ----------------------------
-- Table structure for root
-- ----------------------------
DROP TABLE IF EXISTS `root`;
CREATE TABLE `root` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `username` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '管理员账号',
  `password` varchar(255) DEFAULT NULL COMMENT '管理员密码',
  `repassword` varchar(255) DEFAULT NULL COMMENT '管理员确认密码',
  `nicename` varchar(30) DEFAULT NULL COMMENT '管理员昵称',
  `tel` tinyint(11) DEFAULT NULL COMMENT '管理员手机号码',
  `email` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '管理员邮箱',
  `sex` enum('2','3','1') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '3' COMMENT '管理员性别 1：男 、2：女、3：保密',
  `admin_role` varchar(22) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '管理员角色',
  `admin_premission` varchar(20) DEFAULT NULL COMMENT '管理员权限等级',
  `listorder` tinyint(1) DEFAULT NULL COMMENT '管理员排序',
  `note_mark` text COMMENT '管理员备注',
  `create_time` int(11) DEFAULT NULL COMMENT '管理员创建时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '管理员删除时间',
  `update_time` int(11) DEFAULT NULL COMMENT '管理员修改更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of root
-- ----------------------------
