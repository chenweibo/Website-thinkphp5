/*
Navicat MySQL Data Transfer

Source Server         : fuck.io
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bbx

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-06-16 17:00:42
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES ('1', '公司动态', '', '99', '0', '0', 'gongsidongtai', '2', '', '0');
INSERT INTO `cate` VALUES ('2', '媒体报道', '', '99', '0', '0', 'meitibaodao', '2', '', '0');
INSERT INTO `cate` VALUES ('3', '新品推荐', '', '99', '0', '0', 'xinpintuijian', '1', '', '0');
INSERT INTO `cate` VALUES ('4', '测试分类1', '', '99', '0', '0', 'ceshifenlei1', '1', '', '0');
INSERT INTO `cate` VALUES ('5', '荣誉资质', '', '99', '0', '0', 'rongyuzizhi', '3', '', '0');

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
  `info` mediumtext,
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
  `miaoshu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('1', 'news', '', 'news', '1', '0-1', '2017-06-09', null, '                                                                ', '', '', '', '', '', 'cn', '1', '2', '216', '1', '', '99', null);
INSERT INTO `content` VALUES ('2', 'n1', '', 'n1', '2', '0-2', '2017-06-09', null, '', '', '', '', '', '', 'cn', '0', '2', '131', '1', '', '99', null);
INSERT INTO `content` VALUES ('3', '测试', '', 'ceshi', '3', '0-3', null, null, '                                                                  <p><br></p>                                      ', '', '<img src=\"59434eb27bcfb.jpg\"><img src=\"59434eb473c27.jpg\">', '', '', '', 'cn', '0', '1', null, '1', '', '99', 'sdfasdf');
INSERT INTO `content` VALUES ('4', '彻底颠覆', '', 'chedidianfu', '3', '0-3', null, null, '', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null);
INSERT INTO `content` VALUES ('5', 'dsfds', '', 'dsfds', '4', '0-4', null, null, '                                 <p>12312312</p><p><br></p>                   ', '', '', '', '', '', 'cn', '0', '1', null, '1', '', '99', null);
INSERT INTO `content` VALUES ('6', '223ed', '', '223ed', '2', '0-2', '2017-06-14', null, '<p>请输入内容</p><p>sdf</p>', '', '', '', '', '', 'cn', '0', '2', '148', '1', '', '99', null);
INSERT INTO `content` VALUES ('7', '测试rf', '', 'ceshirf', '5', '0-5', null, null, '                                                    ', '/uploads/594235f4dcb6b.png', '', '', '', '', 'cn', '0', '3', null, '1', '', '99', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of field
-- ----------------------------
INSERT INTO `field` VALUES ('7', '简单描述', '1', '1', '99', 'miaoshu');

-- ----------------------------
-- Table structure for gbook
-- ----------------------------
DROP TABLE IF EXISTS `gbook`;
CREATE TABLE `gbook` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `putname` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gbook
-- ----------------------------
INSERT INTO `gbook` VALUES ('1', '123', '123123', '1231', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `real_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

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
INSERT INTO `node` VALUES ('16', '产品管理', '#', '#', '#', '2', '0', 'fa fa-th-large', '6');
INSERT INTO `node` VALUES ('17', '文章管理', '#', '#', '#', '2', '0', 'fa fa-book', '7');
INSERT INTO `node` VALUES ('18', '图片管理', '#', '#', '#', '2', '0', 'fa fa-file-image-o', '8');
INSERT INTO `node` VALUES ('19', '下载管理', '#', '#', '#', '2', '0', 'fa fa-cloud-download', '9');
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
INSERT INTO `node` VALUES ('42', '文章分类', 'admin', 'article', 'cate', '2', '17', '', '99');
INSERT INTO `node` VALUES ('43', '文章列表', 'admin', 'article', 'contentlist', '2', '17', '', '99');
INSERT INTO `node` VALUES ('44', '字段管理', 'admin', 'article', 'type', '2', '17', '', '99');
INSERT INTO `node` VALUES ('45', '添加分类', 'admin', 'article', 'cateadd', '1', '42', '', '99');
INSERT INTO `node` VALUES ('46', '编辑分类', 'admin', 'article', 'cateedit', '1', '42', '', '99');
INSERT INTO `node` VALUES ('47', '删除分类', 'admin', 'article', 'catedel', '1', '42', '', '99');
INSERT INTO `node` VALUES ('48', '添加文章', 'admin', 'article', 'contentadd', '1', '43', '', '99');
INSERT INTO `node` VALUES ('49', '编辑文章', 'admin', 'article', 'contentedit', '1', '43', '', '99');
INSERT INTO `node` VALUES ('50', '删除文章', 'admin', 'article', 'contentdel', '1', '43', '', '99');
INSERT INTO `node` VALUES ('51', '批量删除', 'admin', 'article', 'delajax', '1', '43', '', '99');
INSERT INTO `node` VALUES ('52', '添加字段', 'admin', 'article', 'typeadd', '1', '44', '', '99');
INSERT INTO `node` VALUES ('53', '编辑字段', 'admin', 'article', 'typeedit', '1', '44', '', '99');
INSERT INTO `node` VALUES ('54', '删除字段', 'admin', 'article', 'typedel', '1', '44', '', '99');
INSERT INTO `node` VALUES ('55', '图片分类', 'admin', 'images', 'cate', '2', '18', '', '99');
INSERT INTO `node` VALUES ('56', '图片列表', 'admin', 'images', 'contentlist', '2', '18', '', '99');
INSERT INTO `node` VALUES ('57', '字段管理', 'admin', 'images', 'type', '2', '18', '', '99');
INSERT INTO `node` VALUES ('58', '添加分类', 'admin', 'images', 'cateadd', '1', '55', '', '99');
INSERT INTO `node` VALUES ('59', '编辑分类', 'admin', 'images', 'cateedit', '1', '55', '', '99');
INSERT INTO `node` VALUES ('60', '删除分类', 'admin', 'images', 'catedel', '1', '55', '', '99');
INSERT INTO `node` VALUES ('61', '添加文章', 'admin', 'images', 'contentadd', '1', '56', '', '99');
INSERT INTO `node` VALUES ('62', '编辑文章', 'admin', 'images', 'contentedit', '1', '56', '', '99');
INSERT INTO `node` VALUES ('63', '删除文章', 'admin', 'images', 'contentdel', '1', '56', '', '99');
INSERT INTO `node` VALUES ('64', '批量删除', 'admin', 'images', 'delajax', '1', '56', '', '99');
INSERT INTO `node` VALUES ('65', '添加字段', 'admin', 'images', 'typeadd', '1', '57', '', '99');
INSERT INTO `node` VALUES ('66', '编辑字段', 'admin', 'images', 'typeedit', '1', '57', '', '99');
INSERT INTO `node` VALUES ('67', '删除字段', 'admin', 'images', 'typedel', '1', '57', '', '99');
INSERT INTO `node` VALUES ('68', '下载分类', 'admin', 'down', 'cate', '2', '19', '', '99');
INSERT INTO `node` VALUES ('69', '下载列表', 'admin', 'down', 'contentlist', '2', '19', '', '99');
INSERT INTO `node` VALUES ('70', '字段管理', 'admin', 'down', 'type', '2', '19', '', '99');
INSERT INTO `node` VALUES ('71', '添加分类', 'admin', 'down', 'cateadd', '1', '68', '', '99');
INSERT INTO `node` VALUES ('72', '编辑分类', 'admin', 'down', 'cateedit', '1', '68', '', '99');
INSERT INTO `node` VALUES ('73', '删除分类', 'admin', 'down', 'catedel', '1', '68', '', '99');
INSERT INTO `node` VALUES ('74', '添加文章', 'admin', 'down', 'contentadd', '1', '69', '', '99');
INSERT INTO `node` VALUES ('75', '编辑文章', 'admin', 'down', 'contentedit', '1', '69', '', '99');
INSERT INTO `node` VALUES ('76', '删除文章', 'admin', 'down', 'contentdel', '1', '69', '', '99');
INSERT INTO `node` VALUES ('77', '批量删除', 'admin', 'down', 'delajax', '1', '69', '', '99');
INSERT INTO `node` VALUES ('78', '添加字段', 'admin', 'down', 'typeadd', '1', '70', '', '99');
INSERT INTO `node` VALUES ('79', '编辑字段', 'admin', 'down', 'typeedit', '1', '70', '', '99');
INSERT INTO `node` VALUES ('80', '删除字段', 'admin', 'down', 'typedel', '1', '70', '', '99');
INSERT INTO `node` VALUES ('81', '留言管理', '#', '#', '#', '2', '0', 'fa fa-commenting-o', '4');
INSERT INTO `node` VALUES ('82', '单篇管理', '#', '#', '#', '2', '0', 'fa fa-pencil-square-o', '5');
INSERT INTO `node` VALUES ('83', '留言列表', 'admin', 'gbook', 'index', '2', '81', '', '99');
INSERT INTO `node` VALUES ('84', '查看留言', 'admin', 'gbook', 'gbookread', '1', '83', '', '99');
INSERT INTO `node` VALUES ('85', '删除留言', 'admin', 'gbook', 'gbookdel', '1', '83', '', '99');
INSERT INTO `node` VALUES ('86', '字段管理', 'admin', 'gbook', 'type', '2', '81', '', '99');
INSERT INTO `node` VALUES ('87', '添加字段', 'admin', 'gbook', 'typeadd', '1', '86', '', '99');
INSERT INTO `node` VALUES ('88', '编辑字段', 'admin', 'gbook', 'typeedit', '1', '86', '', '99');
INSERT INTO `node` VALUES ('89', '删除字段', 'admin', 'gbook', 'typedel', '1', '86', '', '99');
INSERT INTO `node` VALUES ('90', '单篇列表', 'admin', 'page', 'index', '2', '82', '', '99');
INSERT INTO `node` VALUES ('91', '字段管理', 'admin', 'page', 'type', '2', '82', '', '99');
INSERT INTO `node` VALUES ('92', '添加字段', 'admin', 'page', 'typeadd', '1', '91', '', '99');
INSERT INTO `node` VALUES ('93', '编辑字段', 'admin', 'page', 'typeedit', '1', '91', '', '99');
INSERT INTO `node` VALUES ('94', '删除字段', 'admin', 'page', 'typedel', '1', '91', '', '99');
INSERT INTO `node` VALUES ('95', '会员管理', '#', '#', '#', '2', '0', 'fa fa-user-circle', '3');
INSERT INTO `node` VALUES ('96', '会员列表', 'admin', 'member', 'index', '2', '95', '', '99');
INSERT INTO `node` VALUES ('97', '单篇添加', 'admin', 'page', 'pageadd', '1', '90', '', '99');
INSERT INTO `node` VALUES ('98', '单篇编辑', 'admin', 'page', 'pageedit', '1', '90', '', '99');
INSERT INTO `node` VALUES ('99', '单篇删除', 'admin', 'page', 'pagedel', '1', '90', '', '99');

-- ----------------------------
-- Table structure for page
-- ----------------------------
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `info` mediumtext,
  `lang` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of page
-- ----------------------------
INSERT INTO `page` VALUES ('1', '关于我们', '                                 <p style=\"text-indent:2em;\">金天国际是集高科技生态型绿色健康品的研发、生产、销售、服务于一体的高新技术企业，1991年始建于新疆乌鲁木齐。从新疆雪莲生物研究所开始，历经25年的发展，目前已成为天山雪莲制品和专业研发生殖系统生态保养品的知名企业，是生殖系统功能型贴垫类产品的原发企业，是新兴大健康行业中高端产业——生态保养产业的开拓者和领导者，连锁经营机构遍布全球60多个国家和地区。</p>\r\n        <p style=\"text-indent:2em;\">按照生态保养产业化的要求，金天国际将于2018年前完成十大产业基地的建设，目前旗下拥有一个国际研发中心、四大产业基地，即“新加坡国际研发中心、烟台生态保养产业基地、生物气波产业基地、有机护肤产业基地、江苏生态保养产业基地”，应用工业4.0技术，十万级无菌净化车间，全自动生产线一次成型，配置国际顶尖检验检测设备、自动化配药系统，实现了从市场需求到原料采购、配给，到生产自动化、到质量控制和检验、产品入库出库等的信息互通，生产环节及效率得到优化，产品品质更佳，年产贴垫类产品50亿片，生物气波仪100万台，有机化妆品500万套。在建四大基地为“御源健康小镇、生态港湾立体养生产业基地、养生酒产业基地、生态保养学院教育基地”。其中“御源健康小镇”整体规划以生态保养大产业之QOL16云健康为产业支柱，该生态项目利用传统的中医养生技术，结合现代科技，采取独创的“六养一检”本源养生健康方式，旨在为全球高端人士提供全方位的疗休养服务。另待建基地为“生态果蔬营养品产业基地、智能化生态养老产业基地”。</p>\r\n        <p style=\"text-indent:2em;\">历经25年研发，金天国际现已独家拥有全球先进的生态保养和生物气波两大养生专利技术，并先后研发出生态保养、生物气波、洗浴养生、有机护肤、本源养生、专项护理六大系列、60余款产品，其中男女贴垫剂型产品由10万级无菌净化车间，全自动生产线一次成型，国际先进透皮吸收、穴位定向导入技术力保功效持久。在疏通，改善微循环；抑菌，平衡菌群；排毒，洁净内在；修复，增强防御功能；营养，平衡激素；激活，充满活力的科学养生方案指导下，通过综合治理、系统修复和整体提升，实现了从源头上“治未病”及整体上提升生命质量与活力的养生目标。在此基础上，企业将陆续推出养生酒、特色营养果蔬等健康食养系列及智能化网络版的生物气波仪等养生器械，以满足不同人群不同层次的保养需求，以构建科学、高效、专业的生态养生系统。 </p>\r\n        <p style=\"text-indent:2em;\">为加速实现生态保养产业化，帮助更多的生命充满活力，根据生态保养的产品属性、市场属性及产业化属性，顺应互联网 大众创业新趋势，金天国际在2011年独创了全新的三维动态式特许专营模式——商城推广、店铺销售、地面服务，即以金天商城为宣传、推广、服务、培训、营销的载体；以雪莲生态保养专营店为体验、展示、销售的平台；以特聘系统和中心店、旗舰店所组成的地面服务网为保障。三者有机结合，相互依托，为合作伙伴提供全方位的支持和服务。</p>\r\n        <p style=\"text-indent:2em;\">25年自强不息、厚德载物造就了金天人共同的使命：“扬中医养生之魂，振民族品牌之威，实现生态保养产业化，让更多的生命充满活力”。秉承“信念成就未来”的企业精神和“开拓创新、诚信务实”的经营理念及“高素质、高效率、高效益、高收入”的用人理念，脚踏实地的金天人用行动积极践行着“让生命充满活力”的核心价值，并得到了社会的认可和好评，先后获得以下殊荣：</p>\r\n        <p style=\"text-indent:2em;\">企业连续18年荣获“高新技术企业”称号，及“守合同重信用企业、新加坡品牌、中国蓝色经济区百强工程企业、中国科技创新型企业、中国反侵权假冒创新战略联盟理事长单位、中国贸促会理事单位”等称号，首批获得“国家商务部进出口自主权”，更凭借完善的运营系统和创新商业模式在2012年获得“商务部特许经营许可权”，在2016年3月30日获得“商务部直销经营许可权”，在2016年11月受邀出席APEC峰会，在2017年3月受邀出席博鳌亚洲论坛。产品先后获得“国家级重点新产品、援外医疗队指定用品、世界针灸与自然医学金奖、亚太超级健康品牌、金口碑‘亚太区最具品牌价值明星产品’”等称号。 </p>\r\n        <p style=\"text-indent:2em;\">事业源于积累，成功始于规划。金天国际在成立伊始即制定了30年战略规划，第一阶段开创期，完成原始积累，企业资产突破一亿元，1997年实现两亿两千万，并保持稳定持续发展，2000年开创期圆满结束。第二阶段巩固期，完成企业核心技术的完善，建立现代企业管理机制和全新商业模式，经十年研发，现已拥有生态保养，生物气波等国际尖端的养生技术及几十项专有专利技术，2008年在新加坡组建金天国际集团总部，标志着企业拉开国际化运作的序幕。与此同时，全新的商业模式逐步成熟完善，企业巩固期完美落幕。自2011年起，金天国际进入冲刺产业化的全速发展期，决心用十年的时间，使生态保养粉丝级用户达到1000万人，使企业年营业额达到1000亿元以上，成为世界知名企业和国际著名品牌，实现生态保养产业化。 </p>\r\n        <p style=\"text-indent:2em;\">唯厚积薄发，方能继往开来。唯与时俱进，方能引领潮流。唯顺势而为，方能赢在未来。2017年，作为金天国际发展的第26个年头，立足领先的专有专利技术和创新的商业模式，全面实现生态保养产业化目标已进入了最后的冲刺阶段。放眼未来，生态保养必将成为一种能够满足人类当前迫切健康需求的全新养生方式，进而形成新兴的蓝海产业。金天国际必将以其极具前瞻性的战略思维和对趋势的完美解读成为世界商业一颗璀璨的新星，在助力更多生命充满活力、更多家庭幸福和谐的同时，以振兴民族品牌助力中华民族伟大复兴梦的早日实现，为中国更加繁荣富强做出自己最大的贡献。</p>                   ', 'cn');
INSERT INTO `page` VALUES ('2', '招聘信息', '                                 <p style=\"text-indent:2em;\"> 科技、创新是企业长足发展的保障。一直以来，金天国际始终坚持科技创新是企业赖之以盈的基石，不断加大科研力度，经过25年的不断研发，独创生物气波、生态保养两大国际尖端的养生技术，拥有完全的知识产权，先后申报专利20多项，目前仍在保护期的专利有13项，这都是以中华民族中医药技术为研发基础而创新的新科技，在提升功效、品质、安全方面金天国际率先采用超声波破壁粉碎技术、高分子绕流撞击技术、智能化低温活性提取技术、智能化配料技术、精细纯棉布护理技术、活性因子疏通技术、缓释控释技术、非抗生素抑菌技术、无创排毒技术、生态养卵技术、会阴部定向导入透皮吸收技术等几十项专有技术，确保生态保养产业化的核心竞争力和领导地位，并在保护消费者利益，杜绝假冒提供了不可逾越的技术壁垒。 </p>\r\n        <p style=\"text-indent:2em;\">生态保养是一个科学的系统的养生体系，金天国际独家形成“疏通-抑菌-排毒-修复-营养-激活”完善的生态保养养生方案，并在此方案指导下先后研发出专项健康护理系列（雪莲要垫、雪莲更年轻护理垫、雪莲通经护理垫、雪莲臻华男女平衡液）、男女生态保养系列（雪莲生态保养、天保得乐）、洗浴养生系列（天山雪莲男女养生足浴、香妃浴）、天然有机化妆品系列（雪莲臻华男士紧致乳、雪莲臻华乳、雪莲臻华霜、雪莲臻华深层焕颜面膜、雪莲美足霜、雪莲香妃乳等）、金三角本源养生系列（雪莲生态美容贴套、生态保元1号套、生态美疗、抒情美疗等）。在此基础上，研发团队不断进行外延扩展，后续将源源不断的为市场提供健康食养系列如生态的健康养生酒、独特的果蔬营养液、绿色的有机养生饮等及智能化网络版的生物气波仪系列健康产品。强化生态保养产业链，为全面实现生态保养产业化，给市场持续提供强有力的经营活力。</p>\r\n        <p></p><h3><b>◇６大科技彰显尊贵品质</b></h3><p></p>\r\n        <p style=\"text-indent:2em;\">十万级净化车间全自动生产线一次成型，医用铝塑罩泡包装，钴60照射技术让产品安全、洁净、无菌、功效稳定；</p>\r\n        <p style=\"text-indent:2em;\">护理层采用100%新疆长绒棉，安全、舒适；</p>\r\n        <p style=\"text-indent:2em;\">缓释控释技术，使植物精华素均衡、稳定释放；</p>\r\n        <p style=\"text-indent:2em;\">低温活性提取技术，最大程度保留天山雪莲花、黄芪、芦笋、淫羊藿、锁阳等30余种草本植物的功效与活性；</p>\r\n        <p style=\"text-indent:2em;\">生态保养技术实现了非抗生素杀菌、无创排毒、生态养护的养生目的；</p>\r\n        <p style=\"text-indent:2em;\">国际领先透皮吸收、定向导入技术，使植物精华素持续吸收，功效显著、持久。</p>                   ', 'cn');
INSERT INTO `page` VALUES ('3', '营销网络', '                                 <img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/jidi001.jpg\"><p><br></p>', 'cn');
INSERT INTO `page` VALUES ('4', '30年规划', '<img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/guihua01.jpg\">\r\n        <p style=\"text-indent:2em;\">金天国际之所以能从无到有、从小到大，历经25年的发展成长为国际化的知名健康企业，最关键的是在公司成立之初就确立了30年发展规划，明确四个发展目标：一是研发一种能提升生命质量的新技术；二是开创一个全新的绿色健康产业；三是创造一种全新的商业模式，为千万有志之士提供优质创业平台；四是弘扬中医养生技术，实现生态保养产业化，成为国际著名企业和世界知名品牌，让更多的生命充满活力。</p>\r\n        <p style=\"text-indent:2em;\">为实现这四个目标，公司制定了30年发展战略规划，第一期为开创期。用10年时间完成企业的原始积累，1997年营业额达到2亿2千万，并保持稳步发展，2000年圆满结束。第二期为巩固期。完善企业核心技术，建立适应国际运作的现代企业管理机制，以及建立适应未来市场规模化发展的全新商业模式。经10年研发，现已拥有生态保养、生物气波两大国际尖端的养生技术及几十项专有专利技术，到2007年已按照产业化的格局形成了独有的知识产权和核心竞争力；2008年在新加坡组建的生态保养国际研发中心及金天国际集团总部，标志着企业拉开国际化运作的序幕。同时全新商业模式也逐步成熟完善，连锁经营机构遍布全球40多个国家和地区。</p>\r\n        <p style=\"text-indent:2em;\">2010年，金天国际步入了高速发展期，全力冲刺30年战略目标。时值2016年是国家十三五规划的开篇之年，也是集团六五规划的开篇之年，更是集团获得直销许可的开篇之年，可喜可贺。时至今日集团已为30万余人提供了无忧创业的平台，助力其实现创业梦、老板梦；让5000万产品使用者收益，健康生命，和谐家庭。未来5年，集团将大力弘扬中医养生技术，实现30年战略发展目标，全面实现生态保养产业化，让更多的生命充满活力，使产品和企业成为世界著名品牌。</p>', 'cn');
INSERT INTO `page` VALUES ('5', '书籍科普', '<h1 style=\"font-size: 20px; font-weight: bold; text-align: center; margin-bottom: 20px;\">《让生命充满活力》书籍科普篇</h1>\r\n        <img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/shuji01.jpg\">\r\n        <p style=\"margin-top: 30px;text-indent:2em;\">金天国际，自1991年成立伊始，即希望通过研发一种全新的健康养生科技实现“让生命充满活力”的目标，至2008年生态保养理念及系列产品的推出，标志着金天国际立足生态养生领域，不仅完成了企业文化核心价值的构建，更借助生态保养、生物气波等核心专有专利技术打造出易于形成规模化和产业化的蓝海事业平台，为无数渴求健康、幸福、成功的人士带去了新的希望。</p>\r\n        <p style=\"text-indent:2em;\">“让生命充满活力”，既是一种使命，也是一种追求，还是一种文化，更是支撑金天国际从无到有、从小到大、由弱及强的精神上的动力源泉。肩负这份使命、秉承这份追求、弘扬这种文化，金天人25年风雨兼程，获得了令人瞩目的成就，更迎了发展的新时代。</p>\r\n        <p style=\"text-indent:2em;\">金天国际《让生命充满活力》科普专著，经过由金天国际董事局主席祖明军在内的共20余名编委会成员近6个月时间编撰最终定稿刊发，得到了国家司法部副部长刘振宇、国务院新闻办副主任杨正泉、中共中央宣传部秘书长王伟华题贺，对外经济贸易部副部长、高级经济师周可仁作序，全书共分五大篇章，全面而深刻地阐述了“让生命充满活力”的文化内涵、创新属性、划时代意义及其蕴藏的大爱精神。</p>', 'cn');
INSERT INTO `page` VALUES ('6', '金天季刊', '<h1 style=\"font-size: 20px; font-weight: bold; text-align: center; margin-bottom: 20px;\">《金天季刊》 新起点 新跨越</h1>\r\n        <p style=\"text-indent:2em;\">人生若只如初见最美人间四月天。在这一年中最美好的时节，《金天季刊》首刊现正式发行。本刊洞悉行业纵横、记录金天历程、镌刻光辉与荣誉、传递精彩与感动，在这里面，不仅有你，还有我，更有我们共同携手走过的岁月和奋战过的征程。</p>\r\n        <p style=\"text-indent:2em;\">一年之际在于春，当时光跳转到4月，预示着时节正由春至夏，2016年第一季度已然成为过去，盘点走过的90个日日夜夜，你我与金天同行共赢，新起点、新跨越，携着发展的东风，我们用心血与汗水铬印了成长的足迹。我们用激情与奋斗谱写了辉煌的篇章，这段历程既值得我们记忆，更将为我们走向美好明天扬起胜利的风帆......</p>\r\n        <p style=\"text-indent:2em;\">肩负“扬中医养生之魂，振民族品牌之威，实现生态保养产业化，让更多的生命充满活力”的企业使命，本刊将把握时代发展的潮流，突出生态保养行业特色，倡导优良企业风采，传播生殖健康知识，塑造有活力的金天形象。</p>\r\n        <p style=\"text-indent:2em;\">《金天季刊》这株幼苗破土而出了。我们诚挚地希望金天家人们给予她爱与呵护，期待她枝繁叶茂，茁壮成长，繁花似锦，向着灿烂的阳光绽放，为金天文化百花园的绚烂多姿开启绿色的希望！</p>\r\n        <div style=\"float: left; padding: 0px 20px; margin-top: 20px;\"> <img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/jikan003.jpg\" style=\"float: left;\">\r\n          <div style=\"float: left; padding-top: 200px; font-size: 14px; margin-left: 10px;\"> <a href=\"http://jtgj.cc/Areas/GoldendaysModule/Content/jikan3/page.html\" target=\"_blank\"> <img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/yuedu.png\"> 马上阅读</a><br>\r\n            <a href=\"http://jtgj.cc/Areas/GoldendaysModule/Content/jikan3/金天季刊第三四期合刊.rar\" target=\"_blank\"> <img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/xiazai.png\"> 点击下载</a><br>\r\n            《金天季刊》<br>\r\n            第三、四期合刊 </div>\r\n        </div>\r\n        <div style=\"float: right; padding: 0px 20px; margin-top: 20px;\"> <img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/jikan002.jpg\" style=\"float: left;\">\r\n          <div style=\"float: left; padding-top: 200px; font-size: 14px; margin-left: 10px;\"> <a href=\"http://jtgj.cc/Areas/GoldendaysModule/Content/jikan2/page.html\" target=\"_blank\"> <img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/yuedu.png\"> 马上阅读 </a><br>\r\n            <a href=\"http://jtgj.cc/Areas/GoldendaysModule/Content/jikan2/金天季刊第二期.rar\" target=\"_blank\"> <img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/xiazai.png\"> 点击下载 </a><br>\r\n            《金天季刊》<br>\r\n            ——第二期 </div>\r\n        </div>\r\n        <img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/jikanfg.jpg\">\r\n        <div style=\"float: left; padding: 0px 20px; margin-top: 20px;\"> <img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/jikan001.jpg\" style=\"float: left;\">\r\n          <div style=\"float: left; padding-top: 200px; font-size: 14px; margin-left: 10px;\"> <a href=\"http://jtgj.cc/Areas/GoldendaysModule/Content/jikan1/page.html\" target=\"_blank\"> <img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/yuedu.png\"> 马上阅读 </a><br>\r\n            <a href=\"http://jtgj.cc/Areas/GoldendaysModule/Content/jikan1/金天季刊第一期.rar\" target=\"_blank\"> <img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/xiazai.png\"> 点击下载 </a><br>\r\n            《金天季刊》<br>\r\n            ——第一期 </div>\r\n        </div>\r\n        <img src=\"http://jtgj.cc/Areas/GoldendaysModule/Content/images/jikanfg.jpg\"> ', 'cn');
INSERT INTO `page` VALUES ('7', '企业之歌', '<div style=\"margin-top: 20px; text-align: center;\">\r\n          <p> 头顶旭日的阳光 迈开坚定的步伐<br>\r\n            走在金子铺就的大道上 我们内心充满激情充满爱<br>\r\n            我是年轻 快乐 活力四射的金天人 </p>\r\n          <p> 皑皑雪山上 雪莲闪耀璀璨星光<br>\r\n            神奇的生命之花 毅然绽放<br>\r\n            崭新的世界 在金天辉煌<br>\r\n            让生命充满活力 </p>\r\n          <p> 养青春之源 保活力之根<br>\r\n            和谐千万家的信念 不可阻挡<br>\r\n            炯炯的目光 指引着前进的方向<br>\r\n            放飞梦想 让它自由的飞翔<br>\r\n            自由的飞翔 </p>\r\n          <p> 与时俱进 拼搏进取 信念成就未来<br>\r\n            扬中医之魂 振民族之威<br>\r\n            开拓创新 诚信务实<br>\r\n            助力伟大的中国梦 </p>\r\n          <p> 金天人充满力量 昂首阔步<br>\r\n            让生命充满活力 一切不可阻挡<br>\r\n            金天人播撒大爱 坚定不移<br>\r\n            大爱变得无疆<br>\r\n            我们是自豪的金天人<br>\r\n            金天更辉煌 </p>\r\n        </div>', 'cn');
INSERT INTO `page` VALUES ('8', '联系我们', '', 'cn');

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
INSERT INTO `role` VALUES ('2', '普通管理员', '1,2,3,4,5,15,23,28,24,25,26,27,16,29,31,32,33,30,34,35,36,38,17,42,45,46,47,43,48,49,50,51,18,55,58,59,60,56,61,62,63,64,19,68,71,72,73,69,74,75,76,77,81,83,84,85,82,90');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of site
-- ----------------------------
INSERT INTO `site` VALUES ('1', null, null, null, null, null, null, null, null, null, null, null, '99', null, null, null);
INSERT INTO `site` VALUES ('2', null, null, null, null, null, null, null, null, null, null, '1', '99', '/uploads/593b4c2264f2f.jpg', '1', '');
INSERT INTO `site` VALUES ('3', null, null, null, null, null, null, null, null, null, null, '2', '99', '/uploads/593b4c858146a.jpg', '1', '');
INSERT INTO `site` VALUES ('4', null, null, null, null, null, null, null, null, null, null, '3', '99', '/uploads/593b4c4fa6464.jpg', '1', '');

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
  `img` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'jksm', 'b08e3002c22e5f17d454ddfaab45e766', '135', '127.0.0.1', '1497583106', 'admin', '1', '1', null);
INSERT INTO `user` VALUES ('5', 'bobo', 'e10adc3949ba59abbe56e057f20f883e', '19', '127.0.0.1', '1494904744', '123', '1', '2', null);
