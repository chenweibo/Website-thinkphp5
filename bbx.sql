/*
Navicat MySQL Data Transfer

Source Server         : fuck.io
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bbx

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-31 17:20:10
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES ('21', '测试分类1', '', '99', '0', '0', 'ceshifenlei', '1', '', '0');
INSERT INTO `cate` VALUES ('23', '子子类', '', '99', '24', '0-21-24', 'zizilei', '1', '', '0');
INSERT INTO `cate` VALUES ('24', '子类29', '23', '99', '21', '0-21', 'zilei29', '1', '', '1');
INSERT INTO `cate` VALUES ('25', '123123', '223', '99', '0', '0', '123', '1', '', '0');

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `enname` varchar(255) DEFAULT NULL,
  `rewrite` varchar(255) DEFAULT NULL,
  `lid` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `moreimg` varchar(255) DEFAULT NULL,
  `down` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `lang` varchar(255) DEFAULT NULL,
  `recommend` int(10) DEFAULT NULL,
  `type` int(255) DEFAULT NULL,
  `click` int(255) DEFAULT NULL,
  `show` int(10) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `sort` int(50) DEFAULT NULL,
  `cs` varchar(255) DEFAULT NULL,
  `hjgs` varchar(255) DEFAULT NULL,
  `wj` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('40', '123123zc5', '', '123123zc', '21', '0-21', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('41', '234234ddd', '', '234234ddd', '21', '0-21', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('42', '123', '213', '123fgf', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('43', '123123', 'fff', 'fdgsa', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('44', '1232', '', '1232', '24', '0-21-24', null, null, '<p>请输入内容</p><p>ffffdsf<br></p>', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('45', '123dsfsdfasf', '', '123dsfsdfasf', '21', '0-21', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('46', 'fdcsxbvsdc', 'sdfg', 'fdcsxbvsdc', '23', '0-21-24-23', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('47', '123123asd', 'wef', '123123asd', '21', '0-21', null, null, '<p>请输入内容</p><p>asdfasdf<br></p>', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('48', 'fgsdhfgdhfgdh', '', 'fdghfgdh', '23', '0-21-24-23', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('49', 'asdfasdf', '', 'asdfasdf', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('50', 'sdfsdfsadfvr', '', 'sdfsdfsadfvr', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('51', 'asdfasdf234', 'sdfasdf', 'asdf', '请选择', '请选择', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('52', 'sdf1234', '', 'sdf1234', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('53', 'fsdgasdf', '', 'fsdgasdf', '21', '0-21', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('54', '单位收发室', '', 'danweishoufashi', '21', '0-21', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('55', '123123ccv', '', '123123ccv', '21', '0-21', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('56', 'fvdxcv', '', 'fvdxcv', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('57', '90k', '', '90k', '23', '0-21-24-23', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('58', 'cxcvsdfqwe', '', 'cxcvsdfqwe', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('59', '123123ccv', 'fdsf', '123123ccvgg', '21', '0-21', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('60', '123123', '123123', '123fsdfsdf', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('61', 'sdfsdf', 'dsfsdf', 'dfsdfsdffdff', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('62', '下次v这些', '', 'xiacivzhexie', '24', '0-21-24', null, null, '<p>请输入内容</p><p>士大夫士大夫<br></p>', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('63', '方法士大夫', '', 'fangfashidafu', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('64', '发的2313', '', 'fade2313', '23', '0-21-24-23', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('65', '123123防守打法', '', '123123fangshoudafa', '23', '0-21-24-23', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('66', '123非法所得', '', '123feifasuode', '25', '0-25', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('67', '似的发射点', '', 'sidefashedian', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('68', '似的发射点得到得到', '', 'sidefashediandedaodedao', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('69', 'sdfds ', 'sdf sdf', 'sdfdstfg', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('70', '65ufq', '', '65ufq', '24', '0-21-24', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('71', 'gvvx', '', 'gvvx', '23', '0-21-24-23', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('72', '东风风神', '', 'dongfengfengshen', '25', '0-25', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('73', '12认识的发生的', '', '12renshidefashengde', '24', '0-21-24', null, null, '<p>请输入内容士大夫</p><p><br></p>', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('74', '反对法', '', 'fanduifa', '23', '0-21-24-23', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('75', '发生的', '得到', 'fashengde', '21', '0-21', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null, null, null);
INSERT INTO `content` VALUES ('76', '12213饿撒地方', '', '12213esadifang', '23', '0-21-24-23', null, null, '<p>撒地方三大打点滴搜索</p><p><br></p>', '/uploads/592e7aa0e8c32.jpg', '<img src=\"592e7aa631da1.jpg\"><img src=\"592e7aa826704.jpg\">', '/uploads/592e7aa3c1608.jpg', '', '', 'cn', '0', '1', null, '1', '', '99', '', '<p>撒地方三大啊</p><p><br></p>', '/uploads/592e7a9de7cfa.jpg');

-- ----------------------------
-- Table structure for field
-- ----------------------------
DROP TABLE IF EXISTS `field`;
CREATE TABLE `field` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `fieldname` varchar(255) DEFAULT NULL,
  `at_type` varchar(255) DEFAULT NULL,
  `sort` int(50) DEFAULT '99',
  `the_column` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of field
-- ----------------------------
INSERT INTO `field` VALUES ('4', '参数', '1', '1', '99', 'cs');
INSERT INTO `field` VALUES ('5', '环境概述', '2', '1', '99', 'hjgs');
INSERT INTO `field` VALUES ('6', '文件', '3', '1', '99', 'wj');

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
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

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
INSERT INTO `node` VALUES ('31', '添加分类', 'admin', 'product', 'cateadd', '1', '29', '', '99');
INSERT INTO `node` VALUES ('32', '编辑分类', 'admin', 'product', 'cateedit', '1', '29', '', '99');
INSERT INTO `node` VALUES ('33', '删除分类', 'admin', 'product', 'catedel', '1', '29', '', '99');
INSERT INTO `node` VALUES ('34', '添加产品', 'admin', 'product', 'contentadd', '1', '30', '', '99');
INSERT INTO `node` VALUES ('35', '编辑产品', 'admin', 'product', 'contentedit', '1', '30', '', '99');
INSERT INTO `node` VALUES ('36', '删除产品', 'admin', 'product', 'contentdel', '1', '30', '', '99');
INSERT INTO `node` VALUES ('37', '字段管理', 'admin', 'product', 'type', '2', '16', '', '99');
INSERT INTO `node` VALUES ('38', '批量删除', 'admin', 'product', 'delajax', '1', '30', '', '99');
INSERT INTO `node` VALUES ('39', '添加字段', 'admin', 'product', 'typeadd', '1', '37', '', '99');
INSERT INTO `node` VALUES ('40', '编辑字段', 'admin', 'product', 'typeedit', '1', '37', '', '99');
INSERT INTO `node` VALUES ('41', '删除字段', 'admin', 'product', 'typedel', '1', '37', '', '99');

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
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '102', '127.0.0.1', '1496198174', 'admin', '1', '1');
INSERT INTO `user` VALUES ('5', 'bobo', 'e10adc3949ba59abbe56e057f20f883e', '19', '127.0.0.1', '1494904744', '123', '1', '2');
