/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100121
Source Host           : localhost:3306
Source Database       : bbx

Target Server Type    : MYSQL
Target Server Version : 100121
File Encoding         : 65001

Date: 2017-05-14 19:28:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for node
-- ----------------------------
DROP TABLE IF EXISTS `node`;
CREATE TABLE `node` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `node_name` varchar(155) NOT NULL DEFAULT '' COMMENT '节点名称',
  `module_name` varchar(155) NOT NULL DEFAULT '' COMMENT '模块名',
  `control_name` varchar(155) NOT NULL DEFAULT '' COMMENT '控制器名',
  `action_name` varchar(155) NOT NULL COMMENT '方法名',
  `is_menu` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否是菜单项 1不是 2是',
  `typeid` int(11) NOT NULL COMMENT '父级节点id',
  `style` varchar(155) DEFAULT '' COMMENT '菜单样式',
  `sort` int(50) DEFAULT '99',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of node
-- ----------------------------
INSERT INTO `node` VALUES ('1', '用户管理', '#', '#', '#', '2', '0', 'fa fa-user', '2');
INSERT INTO `node` VALUES ('2', '用户列表', 'admin', 'user', 'index', '2', '1', '', '99');
INSERT INTO `node` VALUES ('3', '添加用户', 'admin', 'user', 'useradd', '1', '2', '', '99');
INSERT INTO `node` VALUES ('4', '编辑用户', 'admin', 'user', 'useredit', '1', '2', '', '99');
INSERT INTO `node` VALUES ('5', '删除用户', 'admin', 'user', 'userdel', '1', '2', '', '99');
INSERT INTO `node` VALUES ('6', '角色列表', 'admin', 'role', 'index', '2', '1', '', '99');
INSERT INTO `node` VALUES ('7', '添加角色', 'admin', 'role', 'roleadd', '1', '6', '', '99');
INSERT INTO `node` VALUES ('8', '编辑角色', 'admin', 'role', 'roleedit', '1', '6', '', '99');
INSERT INTO `node` VALUES ('9', '删除角色', 'admin', 'role', 'roledel', '1', '6', '', '99');
INSERT INTO `node` VALUES ('10', '分配权限', 'admin', 'role', 'giveaccess', '1', '6', '', '99');
INSERT INTO `node` VALUES ('11', '系统管理', '#', '#', '#', '2', '0', 'fa fa-desktop', '99');
INSERT INTO `node` VALUES ('12', '数据备份/还原', 'admin', 'data', 'index', '2', '11', '', '99');
INSERT INTO `node` VALUES ('13', '备份数据', 'admin', 'data', 'importdata', '1', '12', '', '99');
INSERT INTO `node` VALUES ('14', '还原数据', 'admin', 'data', 'backdata', '1', '12', '', '99');
INSERT INTO `node` VALUES ('15', '基本设置', '#', '#', '#', '2', '0', 'fa fa-cog', '1');
INSERT INTO `node` VALUES ('16', '产品管理', '#', '#', '#', '2', '0', 'fa fa-th-large', '3');
INSERT INTO `node` VALUES ('17', '文章管理', '#', '#', '#', '2', '0', 'fa fa-book', '4');
INSERT INTO `node` VALUES ('18', '图片管理', '#', '#', '#', '2', '0', 'fa fa-file-image-o', '5');
INSERT INTO `node` VALUES ('19', '下载管理', '#', '#', '#', '2', '0', 'fa fa-cloud-download', '6');
INSERT INTO `node` VALUES ('20', '微信管理', '#', '#', '#', '2', '0', 'fa fa-weixin', '97');
INSERT INTO `node` VALUES ('21', '插件管理', '#', '#', '#', '2', '0', 'fa fa-plug', '98');
INSERT INTO `node` VALUES ('23', '基本设置', 'admin', 'siteset', 'index', '2', '15', '', '99');
INSERT INTO `node` VALUES ('24', '幻灯片管理', 'admin', 'siteset', 'slide', '2', '15', '', '99');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `rolename` varchar(155) NOT NULL COMMENT '角色名称',
  `rule` varchar(255) DEFAULT '' COMMENT '权限节点数据',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', '超级管理员', '');
INSERT INTO `role` VALUES ('2', '普通管理员', '1,2,4,15');

-- ----------------------------
-- Table structure for site
-- ----------------------------
DROP TABLE IF EXISTS `site`;
CREATE TABLE `site` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) DEFAULT NULL,
  `site_keywords` varchar(255) DEFAULT NULL,
  `site_description` varchar(255) DEFAULT NULL,
  `site_tel` varchar(255) DEFAULT NULL,
  `site_phone` varchar(255) DEFAULT NULL,
  `site_code` varchar(255) DEFAULT NULL,
  `site_mail` varchar(255) DEFAULT NULL,
  `site_fax` varchar(255) DEFAULT NULL,
  `site_address` varchar(255) DEFAULT NULL,
  `icp` varchar(255) DEFAULT NULL,
  `slide_name` varchar(255) DEFAULT NULL,
  `slide_sort` int(255) DEFAULT '99',
  `slide_img` varchar(255) DEFAULT NULL,
  `slide_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of site
-- ----------------------------
INSERT INTO `site` VALUES ('1', '12', '123', '123', '123', '3', '4', '5', '6', '7', '98', null, null, null, null);
INSERT INTO `site` VALUES ('2', null, null, null, null, null, null, null, null, null, null, '1', null, null, '1');
INSERT INTO `site` VALUES ('3', null, null, null, null, null, null, null, null, null, null, '2', null, null, '1');
INSERT INTO `site` VALUES ('4', null, null, null, null, null, null, null, null, null, null, '3', null, null, '1');
INSERT INTO `site` VALUES ('5', null, null, null, null, null, null, null, null, null, null, '4', null, null, '1');
INSERT INTO `site` VALUES ('6', null, null, null, null, null, null, null, null, null, null, '5', '1', null, '1');
INSERT INTO `site` VALUES ('7', null, null, null, null, null, null, null, null, null, null, '6', '2', null, '1');
INSERT INTO `site` VALUES ('8', null, null, null, null, null, null, null, null, null, null, '7', '3', null, '1');
INSERT INTO `site` VALUES ('9', null, null, null, null, null, null, null, null, null, null, '8', '4', null, '1');
INSERT INTO `site` VALUES ('10', null, null, null, null, null, null, null, null, null, null, '9', '5', null, '1');
INSERT INTO `site` VALUES ('11', null, null, null, null, null, null, null, null, null, null, '10', '6', null, '1');
INSERT INTO `site` VALUES ('12', null, null, null, null, null, null, null, null, null, null, '11', '7', null, '1');
INSERT INTO `site` VALUES ('13', null, null, null, null, null, null, null, null, null, null, '12', '8', null, '1');
INSERT INTO `site` VALUES ('14', null, null, null, null, null, null, null, null, null, null, '13', null, null, '1');
INSERT INTO `site` VALUES ('15', null, null, null, null, null, null, null, null, null, null, '14', null, null, '1');
INSERT INTO `site` VALUES ('16', null, null, null, null, null, null, null, null, null, null, '15', null, null, '1');
INSERT INTO `site` VALUES ('17', null, null, null, null, null, null, null, null, null, null, '16', null, null, '1');
INSERT INTO `site` VALUES ('18', null, null, null, null, null, null, null, null, null, null, '17', null, null, '1');
INSERT INTO `site` VALUES ('19', null, null, null, null, null, null, null, null, null, null, '18', null, null, '2');
INSERT INTO `site` VALUES ('20', null, null, null, null, null, null, null, null, null, null, '19', null, null, '2');
INSERT INTO `site` VALUES ('21', null, null, null, null, null, null, null, null, null, null, '20', null, null, '2');
INSERT INTO `site` VALUES ('22', null, null, null, null, null, null, null, null, null, null, '21', null, null, '2');
INSERT INTO `site` VALUES ('23', null, null, null, null, null, null, null, null, null, null, '22', null, null, '2');
INSERT INTO `site` VALUES ('24', null, null, null, null, null, null, null, null, null, null, '23', null, null, '2');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin DEFAULT '' COMMENT '用户名',
  `password` varchar(255) COLLATE utf8_bin DEFAULT '' COMMENT '密码',
  `loginnum` int(11) DEFAULT '0' COMMENT '登陆次数',
  `last_login_ip` varchar(255) COLLATE utf8_bin DEFAULT '' COMMENT '最后登录IP',
  `last_login_time` int(11) DEFAULT '0' COMMENT '最后登录时间',
  `real_name` varchar(255) COLLATE utf8_bin DEFAULT '' COMMENT '真实姓名',
  `status` int(1) DEFAULT '0' COMMENT '状态',
  `typeid` int(11) DEFAULT '1' COMMENT '用户角色id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '44', '127.0.0.1', '1494655079', 'admin', '1', '1');
INSERT INTO `user` VALUES ('2', 'xiaobai', '4297f44b13955235245b2497399d7a93', '6', '127.0.0.1', '1470368260', '小白', '1', '2');
INSERT INTO `user` VALUES ('5', 'bobo', 'e10adc3949ba59abbe56e057f20f883e', '2', '127.0.0.1', '1494481091', '123', '1', '2');
