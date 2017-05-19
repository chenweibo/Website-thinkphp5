/*
Navicat MySQL Data Transfer

Source Server         : fuck.io
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bbx

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-19 17:08:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cate
-- ----------------------------
DROP TABLE IF EXISTS `cate`;
CREATE TABLE `cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `cate_enname` varchar(255) DEFAULT NULL,
  `cate_sort` int(255) DEFAULT '88',
  `pid` int(255) DEFAULT '0',
  `cate_path` varchar(255) DEFAULT NULL,
  `cate_rewrite` varchar(255) DEFAULT NULL,
  `cate_type` varchar(255) DEFAULT NULL,
  `cate_img` varchar(255) DEFAULT NULL,
  `cate_recommend` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES ('21', '测试分类', '', '99', '0', '0', 'ceshifenlei', '1', '', '0');
INSERT INTO `cate` VALUES ('22', '子类2', '', '99', '21', '0-21', 'zilei2', '1', '', '0');
INSERT INTO `cate` VALUES ('23', '子子类', '', '99', '22', '0-21-22', 'zizilei', '1', '', '0');
INSERT INTO `cate` VALUES ('24', '子类2', '', '99', '0', '0', 'zilei2123', '1', '', '0');

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `rewrite` varchar(255) DEFAULT NULL,
  `lid` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `moreimg` varchar(255) DEFAULT NULL,
  `down` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `lang` varchar(255) DEFAULT NULL,
  `recommend` int(10) DEFAULT NULL,
  `cate_type` int(255) DEFAULT NULL,
  `click` int(255) DEFAULT NULL,
  `show` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('1', '测试1', null, null, null, null, null, null, null, null, null, null, null, null, null, '1', null, null);
INSERT INTO `content` VALUES ('2', '测试2', null, null, null, null, null, null, null, null, null, null, null, null, null, '1', null, null);
INSERT INTO `content` VALUES ('3', '测试3', null, null, null, null, null, null, null, null, null, null, null, null, null, '1', null, null);

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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

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
INSERT INTO `node` VALUES ('15', '基本管理', '#', '#', '#', '2', '0', 'fa fa-cog', '1');
INSERT INTO `node` VALUES ('16', '产品管理', '#', '#', '#', '2', '0', 'fa fa-th-large', '3');
INSERT INTO `node` VALUES ('17', '文章管理', '#', '#', '#', '2', '0', 'fa fa-book', '4');
INSERT INTO `node` VALUES ('18', '图片管理', '#', '#', '#', '2', '0', 'fa fa-file-image-o', '5');
INSERT INTO `node` VALUES ('19', '下载管理', '#', '#', '#', '2', '0', 'fa fa-cloud-download', '6');
INSERT INTO `node` VALUES ('20', '微信管理', '#', '#', '#', '2', '0', 'fa fa-weixin', '97');
INSERT INTO `node` VALUES ('21', '插件管理', '#', '#', '#', '2', '0', 'fa fa-plug', '98');
INSERT INTO `node` VALUES ('23', '基本设置', 'admin', 'siteset', 'index', '2', '15', '', '99');
INSERT INTO `node` VALUES ('24', '幻灯片管理', 'admin', 'siteset', 'slide', '2', '15', '', '99');
INSERT INTO `node` VALUES ('25', '添加幻灯片', 'admin', 'siteset', 'slideadd', '1', '24', '', '99');
INSERT INTO `node` VALUES ('26', '编辑幻灯片', 'admin', 'siteset', 'slideedit', '1', '24', '', '99');
INSERT INTO `node` VALUES ('27', '删除幻灯片', 'admin', 'siteset', 'slidedel', '1', '24', '', '99');
INSERT INTO `node` VALUES ('28', '保存设置', 'admin', 'siteset', 'save', '1', '23', '', '99');
INSERT INTO `node` VALUES ('29', '产品分类', 'admin', 'product', 'cate', '2', '16', '', '99');
INSERT INTO `node` VALUES ('30', '产品列表', 'admin', 'product', 'contentlist', '2', '16', '', '99');

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
INSERT INTO `role` VALUES ('2', '普通管理员', '1,2,3,4,5,6,7,8,9,10,15,23,28,24,25,26');

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
  `slide_a` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of site
-- ----------------------------
INSERT INTO `site` VALUES ('1', '12', '123', '123', '123', '3', '4123', '5', '6', '7', '98', null, null, null, null, null);
INSERT INTO `site` VALUES ('42', null, null, null, null, null, null, null, null, null, null, '你是谁', '0', '', '', '');
INSERT INTO `site` VALUES ('46', null, null, null, null, null, null, null, null, null, null, '123', '0', '', '', '');
INSERT INTO `site` VALUES ('47', null, null, null, null, null, null, null, null, null, null, '你是谁', '0', '', '', '');
INSERT INTO `site` VALUES ('48', null, null, null, null, null, null, null, null, null, null, '你是谁', '123', '', '', '');
INSERT INTO `site` VALUES ('49', null, null, null, null, null, null, null, null, null, null, '1123', '0', '', '', '');
INSERT INTO `site` VALUES ('51', null, null, null, null, null, null, null, null, null, null, '12', '0', '', '1', '');
INSERT INTO `site` VALUES ('52', null, null, null, null, null, null, null, null, null, null, '12', '0', '', '1', '');

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
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '73', '127.0.0.1', '1495182385', 'admin', '1', '1');
INSERT INTO `user` VALUES ('5', 'bobo', 'e10adc3949ba59abbe56e057f20f883e', '19', '127.0.0.1', '1494904744', '123', '1', '2');
