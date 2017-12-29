/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50637
Source Host           : localhost:3306
Source Database       : yxcshop

Target Server Type    : MYSQL
Target Server Version : 50637
File Encoding         : 65001

Date: 2017-12-29 14:49:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `zol_brands`
-- ----------------------------
DROP TABLE IF EXISTS `zol_brands`;
CREATE TABLE `zol_brands` (
  `bid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '品牌表ID',
  `bname` char(60) NOT NULL DEFAULT '' COMMENT '品牌名称',
  `blogo` text NOT NULL COMMENT '品牌logo',
  `bsort` smallint(5) unsigned NOT NULL COMMENT '品牌排序',
  `bhot` char(2) NOT NULL DEFAULT '0' COMMENT '是否热门(1为热门,0为非热门)',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COMMENT='品牌表';

-- ----------------------------
-- Records of zol_brands
-- ----------------------------
INSERT INTO `zol_brands` VALUES ('1', '苹果', 'Upload/91951473501845_blogo.jpg', '100', '是');
INSERT INTO `zol_brands` VALUES ('2', '华为', 'Upload/75341473501863_blogo.jpg', '98', '是');
INSERT INTO `zol_brands` VALUES ('3', '乐视', 'Upload/10841473501897_blogo.jpg', '96', '否');
INSERT INTO `zol_brands` VALUES ('4', 'OPPO', 'Upload/12351473501917_blogo.jpg', '94', '否');
INSERT INTO `zol_brands` VALUES ('5', 'vivo', 'Upload/9841473501952_blogo.png', '92', '否');
INSERT INTO `zol_brands` VALUES ('6', '酷派', 'Upload/95321473173955_blogo.png', '90', '否');
INSERT INTO `zol_brands` VALUES ('7', '魅族', 'Upload/83361473173978_blogo.jpg', '88', '是');
INSERT INTO `zol_brands` VALUES ('8', 'SONY', 'Upload/33241473174013_blogo.jpg', '86', '是');
INSERT INTO `zol_brands` VALUES ('9', '三星', 'Upload/92981473174037_blogo.jpg', '84', '是');
INSERT INTO `zol_brands` VALUES ('10', '联想', 'Upload/49761473174069_blogo.jpg', '82', '是');
INSERT INTO `zol_brands` VALUES ('11', '宏碁', 'Upload/90811473174158_blogo.jpg', '2', '是');
INSERT INTO `zol_brands` VALUES ('12', 'ThinkPad', 'Upload/80371473174220_blogo.png', '80', '是');
INSERT INTO `zol_brands` VALUES ('13', 'MSI微星', 'Upload/82741473174283_blogo.jpg', '13', '是');
INSERT INTO `zol_brands` VALUES ('14', '微软', 'Upload/34951473174321_blogo.jpg', '76', '是');
INSERT INTO `zol_brands` VALUES ('15', '神州', 'Upload/46351473174376_blogo.jpg', '74', '否');
INSERT INTO `zol_brands` VALUES ('16', '戴尔', 'Upload/3001473174427_blogo.jpg', '72', '是');
INSERT INTO `zol_brands` VALUES ('17', '华硕', 'Upload/89081473174452_blogo.png', '70', '是');
INSERT INTO `zol_brands` VALUES ('18', '佳能', 'Upload/39681473174513_blogo.jpg', '68', '是');
INSERT INTO `zol_brands` VALUES ('19', '尼康', 'Upload/29591473174581_blogo.jpg', '11', '是');
INSERT INTO `zol_brands` VALUES ('20', '飞科', 'Upload/12901473174644_blogo.jpg', '66', '是');
INSERT INTO `zol_brands` VALUES ('21', '飞利浦', 'Upload/48701473174771_blogo.jpg', '64', '是');
INSERT INTO `zol_brands` VALUES ('22', '酷开', 'Upload/74931473174915_blogo.jpg', '62', '否');
INSERT INTO `zol_brands` VALUES ('23', '泰力', 'Upload/20001473174947_blogo.jpg', '60', '否');
INSERT INTO `zol_brands` VALUES ('24', '小熊', 'Upload/42791473174982_blogo.jpg', '58', '否');
INSERT INTO `zol_brands` VALUES ('25', '海信', 'Upload/87051473175126_blogo.jpg', '56', '否');
INSERT INTO `zol_brands` VALUES ('26', '九州风神', 'Upload/94801473175316_blogo.jpg', '54', '否');
INSERT INTO `zol_brands` VALUES ('27', '希捷', 'Upload/3671473175404_blogo.jpg', '52', '否');
INSERT INTO `zol_brands` VALUES ('28', '技嘉', 'Upload/55561473175456_blogo.png', '50', '否');
INSERT INTO `zol_brands` VALUES ('29', 'Intel', 'Upload/53561473175506_blogo.jpg', '48', '否');
INSERT INTO `zol_brands` VALUES ('30', '游戏悍将', 'Upload/97301473175546_blogo.jpg', '46', '否');
INSERT INTO `zol_brands` VALUES ('31', '浦科特', 'Upload/81251473175612_blogo.png', '48', '否');
INSERT INTO `zol_brands` VALUES ('32', '威刚', 'Upload/37291473175707_blogo.png', '44', '否');
INSERT INTO `zol_brands` VALUES ('33', '小米', 'Upload/45211473175853_blogo.jpg', '42', '否');
INSERT INTO `zol_brands` VALUES ('34', '中兴', 'Upload/86391473175939_blogo.jpg', '40', '否');
INSERT INTO `zol_brands` VALUES ('35', '努比亚', 'Upload/28951473176046_blogo.jpg', '39', '否');
INSERT INTO `zol_brands` VALUES ('36', '荣耀', 'Upload/38211473176096_blogo.png', '38', '否');
INSERT INTO `zol_brands` VALUES ('37', '摩托罗拉', 'Upload/28091473176151_blogo.jpg', '37', '否');
INSERT INTO `zol_brands` VALUES ('38', '诺基亚', 'Upload/54221473176170_blogo.jpg', '36', '否');
INSERT INTO `zol_brands` VALUES ('39', '锤子', 'Upload/49811473176202_blogo.jpg', '14', '是');
INSERT INTO `zol_brands` VALUES ('40', '金立', 'Upload/3821473176223_blogo.jpg', '35', '否');
INSERT INTO `zol_brands` VALUES ('41', '一加', 'Upload/66011473176264_blogo.jpg', '34', '否');
INSERT INTO `zol_brands` VALUES ('42', '纽曼', 'Upload/83411473176288_blogo.jpg', '33', '否');
INSERT INTO `zol_brands` VALUES ('43', '多维', 'Upload/53461473176320_blogo.jpg', '32', '否');
INSERT INTO `zol_brands` VALUES ('44', 'TCL', 'Upload/97991473176338_blogo.png', '31', '否');
INSERT INTO `zol_brands` VALUES ('45', '天语', 'Upload/83101473176373_blogo.jpg', '29', '否');
INSERT INTO `zol_brands` VALUES ('46', '海尔', 'Upload/81181473176401_blogo.jpg', '28', '否');
INSERT INTO `zol_brands` VALUES ('47', '康佳', 'Upload/21911473176455_blogo.jpg', '27', '否');
INSERT INTO `zol_brands` VALUES ('48', '小辣椒', 'Upload/82621473176498_blogo.jpg', '26', '否');
INSERT INTO `zol_brands` VALUES ('49', '卡西欧', 'Upload/26061473176709_blogo.jpg', '25', '否');
INSERT INTO `zol_brands` VALUES ('50', '奥林巴斯', 'Upload/27351473177044_blogo.png', '24', '否');
INSERT INTO `zol_brands` VALUES ('51', '微软 Xbox One', 'Upload/95731473177151_blogo.jpg', '34', '否');
INSERT INTO `zol_brands` VALUES ('52', '战神', 'Upload/8181473177652_blogo.png', '21', '否');
INSERT INTO `zol_brands` VALUES ('53', '美图', 'Upload/83171473177691_blogo.jpg', '12', '否');
INSERT INTO `zol_brands` VALUES ('54', 'Alienware', 'Upload/70591473178018_blogo.jpg', '87', '是');
INSERT INTO `zol_brands` VALUES ('55', '普耐尔', 'Upload/85731473213094_blogo.png', '6', '否');
INSERT INTO `zol_brands` VALUES ('56', '美苏', 'Upload/99301473362822_blogo.png', '5', '否');
INSERT INTO `zol_brands` VALUES ('57', 'I-Mu', 'Upload/66381473425665_blogo.png', '3', '否');
INSERT INTO `zol_brands` VALUES ('58', '惠普', 'Upload/29151473516073_blogo.png', '77', '是');
INSERT INTO `zol_brands` VALUES ('59', '熠孚', 'Upload/24471473586084_blogo.jpg', '1', '否');
INSERT INTO `zol_brands` VALUES ('60', '微星', 'Upload/17681473597334_blogo.jpg', '5', '否');

-- ----------------------------
-- Table structure for `zol_category`
-- ----------------------------
DROP TABLE IF EXISTS `zol_category`;
CREATE TABLE `zol_category` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `cname` char(60) NOT NULL DEFAULT '' COMMENT '分类名称',
  `pid` tinyint(4) NOT NULL DEFAULT '0' COMMENT '父级ID(所属的类型)',
  `csort` smallint(5) unsigned NOT NULL DEFAULT '100' COMMENT '分类排序',
  `zol_type_tid` int(10) unsigned NOT NULL COMMENT '(类型ID)关联字段',
  PRIMARY KEY (`cid`),
  KEY `fk_zol_category_zol_type_idx` (`zol_type_tid`)
) ENGINE=MyISAM AUTO_INCREMENT=267 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of zol_category
-- ----------------------------
INSERT INTO `zol_category` VALUES ('1', '手机通讯', '0', '100', '1');
INSERT INTO `zol_category` VALUES ('2', '电脑笔记本', '0', '90', '2');
INSERT INTO `zol_category` VALUES ('3', '摄影摄像', '0', '80', '3');
INSERT INTO `zol_category` VALUES ('4', '游戏电玩', '0', '70', '4');
INSERT INTO `zol_category` VALUES ('5', '硬件设备', '0', '60', '5');
INSERT INTO `zol_category` VALUES ('6', '智能生活', '0', '50', '6');
INSERT INTO `zol_category` VALUES ('7', '家用办公', '0', '40', '7');
INSERT INTO `zol_category` VALUES ('8', '生活电器', '0', '30', '8');
INSERT INTO `zol_category` VALUES ('20', '品牌整机', '2', '80', '2');
INSERT INTO `zol_category` VALUES ('19', '平板', '2', '90', '2');
INSERT INTO `zol_category` VALUES ('18', '笔记本', '2', '100', '2');
INSERT INTO `zol_category` VALUES ('17', '通讯设备', '1', '80', '1');
INSERT INTO `zol_category` VALUES ('16', '手机配件', '1', '90', '1');
INSERT INTO `zol_category` VALUES ('15', '手机产品', '1', '100', '1');
INSERT INTO `zol_category` VALUES ('21', '数码设备', '3', '100', '3');
INSERT INTO `zol_category` VALUES ('22', '数码配件', '3', '90', '3');
INSERT INTO `zol_category` VALUES ('23', '游戏机', '4', '100', '4');
INSERT INTO `zol_category` VALUES ('24', '游戏本', '4', '90', '4');
INSERT INTO `zol_category` VALUES ('25', 'DIY硬件', '5', '100', '5');
INSERT INTO `zol_category` VALUES ('26', '外设配件', '5', '90', '5');
INSERT INTO `zol_category` VALUES ('27', '网络设备', '5', '80', '5');
INSERT INTO `zol_category` VALUES ('28', '智能日常', '6', '100', '6');
INSERT INTO `zol_category` VALUES ('29', '智能设备', '6', '90', '6');
INSERT INTO `zol_category` VALUES ('30', '智能投影', '6', '80', '6');
INSERT INTO `zol_category` VALUES ('31', '家用设备', '7', '100', '7');
INSERT INTO `zol_category` VALUES ('32', '办公设备', '7', '90', '7');
INSERT INTO `zol_category` VALUES ('33', '电器设备', '8', '100', '8');
INSERT INTO `zol_category` VALUES ('34', '个护', '8', '90', '8');
INSERT INTO `zol_category` VALUES ('35', '家用电器', '8', '80', '8');
INSERT INTO `zol_category` VALUES ('36', '华为', '15', '100', '1');
INSERT INTO `zol_category` VALUES ('37', '苹果', '15', '95', '1');
INSERT INTO `zol_category` VALUES ('38', '三星', '15', '85', '1');
INSERT INTO `zol_category` VALUES ('39', '魅族', '15', '80', '1');
INSERT INTO `zol_category` VALUES ('40', 'OPPO', '15', '75', '1');
INSERT INTO `zol_category` VALUES ('41', '小米', '15', '70', '1');
INSERT INTO `zol_category` VALUES ('42', 'HTC', '15', '65', '1');
INSERT INTO `zol_category` VALUES ('43', '乐视', '15', '60', '1');
INSERT INTO `zol_category` VALUES ('44', 'vivo', '15', '55', '1');
INSERT INTO `zol_category` VALUES ('45', 'SONY', '15', '50', '1');
INSERT INTO `zol_category` VALUES ('46', '飞利浦', '15', '45', '1');
INSERT INTO `zol_category` VALUES ('47', 'nubia', '15', '100', '1');
INSERT INTO `zol_category` VALUES ('48', '诺基亚', '15', '40', '1');
INSERT INTO `zol_category` VALUES ('49', '摩托罗拉', '15', '35', '1');
INSERT INTO `zol_category` VALUES ('50', '中兴', '15', '30', '1');
INSERT INTO `zol_category` VALUES ('51', '老人机', '15', '25', '1');
INSERT INTO `zol_category` VALUES ('52', '保护套', '16', '100', '1');
INSERT INTO `zol_category` VALUES ('53', '充电器', '16', '90', '1');
INSERT INTO `zol_category` VALUES ('54', '数据线', '16', '70', '1');
INSERT INTO `zol_category` VALUES ('55', '手机电池', '16', '65', '1');
INSERT INTO `zol_category` VALUES ('56', '手机贴膜', '16', '60', '1');
INSERT INTO `zol_category` VALUES ('57', '手机附件', '16', '55', '1');
INSERT INTO `zol_category` VALUES ('58', '移动pos机', '17', '100', '1');
INSERT INTO `zol_category` VALUES ('59', '游戏本', '18', '100', '2');
INSERT INTO `zol_category` VALUES ('60', '超薄本', '18', '92', '2');
INSERT INTO `zol_category` VALUES ('61', '影音娱乐本', '18', '95', '2');
INSERT INTO `zol_category` VALUES ('62', '校园学生本', '18', '90', '2');
INSERT INTO `zol_category` VALUES ('63', '飞行堡垒', '18', '88', '2');
INSERT INTO `zol_category` VALUES ('64', '戴尔灵越', '18', '85', '2');
INSERT INTO `zol_category` VALUES ('65', '联想小Y', '18', '75', '2');
INSERT INTO `zol_category` VALUES ('66', '15英寸大屏', '18', '70', '2');
INSERT INTO `zol_category` VALUES ('67', '酷睿i7', '18', '65', '2');
INSERT INTO `zol_category` VALUES ('68', '华硕', '18', '62', '2');
INSERT INTO `zol_category` VALUES ('69', '戴尔', '18', '60', '2');
INSERT INTO `zol_category` VALUES ('70', 'ThinkPad', '18', '58', '2');
INSERT INTO `zol_category` VALUES ('71', '苹果', '18', '55', '2');
INSERT INTO `zol_category` VALUES ('72', '惠普', '18', '52', '2');
INSERT INTO `zol_category` VALUES ('73', '神舟', '18', '50', '2');
INSERT INTO `zol_category` VALUES ('74', '宏碁', '18', '48', '2');
INSERT INTO `zol_category` VALUES ('75', 'Alienware', '18', '45', '2');
INSERT INTO `zol_category` VALUES ('76', 'MSI微星', '18', '42', '2');
INSERT INTO `zol_category` VALUES ('77', '微软', '19', '100', '2');
INSERT INTO `zol_category` VALUES ('78', '安卓', '19', '95', '2');
INSERT INTO `zol_category` VALUES ('79', '苹果iOS', '19', '60', '2');
INSERT INTO `zol_category` VALUES ('80', '10.1英寸', '19', '85', '2');
INSERT INTO `zol_category` VALUES ('81', '娱乐平板', '19', '82', '2');
INSERT INTO `zol_category` VALUES ('82', '商务平板', '19', '80', '2');
INSERT INTO `zol_category` VALUES ('83', '2合1平板电脑', '19', '78', '2');
INSERT INTO `zol_category` VALUES ('84', '三星', '19', '85', '2');
INSERT INTO `zol_category` VALUES ('85', '三星', '19', '75', '2');
INSERT INTO `zol_category` VALUES ('86', '联想', '19', '78', '2');
INSERT INTO `zol_category` VALUES ('87', '小米', '19', '75', '2');
INSERT INTO `zol_category` VALUES ('88', '华为', '19', '72', '2');
INSERT INTO `zol_category` VALUES ('89', '台电', '19', '70', '2');
INSERT INTO `zol_category` VALUES ('90', '华硕', '19', '68', '2');
INSERT INTO `zol_category` VALUES ('91', '微软', '19', '58', '2');
INSERT INTO `zol_category` VALUES ('92', '荣耀', '19', '55', '2');
INSERT INTO `zol_category` VALUES ('93', 'ThinkPad', '19', '52', '2');
INSERT INTO `zol_category` VALUES ('94', '一体机', '20', '100', '2');
INSERT INTO `zol_category` VALUES ('95', '商用电脑', '20', '95', '2');
INSERT INTO `zol_category` VALUES ('96', '家用电脑', '20', '90', '2');
INSERT INTO `zol_category` VALUES ('97', '时尚电脑', '20', '85', '2');
INSERT INTO `zol_category` VALUES ('98', '游戏电脑', '20', '82', '2');
INSERT INTO `zol_category` VALUES ('99', '酷睿i7', '20', '80', '2');
INSERT INTO `zol_category` VALUES ('100', '发烧级独立显卡', '20', '78', '2');
INSERT INTO `zol_category` VALUES ('101', '联想', '20', '80', '2');
INSERT INTO `zol_category` VALUES ('102', 'ThinkCentre', '20', '75', '2');
INSERT INTO `zol_category` VALUES ('103', 'Acer宏碁', '20', '70', '2');
INSERT INTO `zol_category` VALUES ('104', '神舟', '20', '68', '2');
INSERT INTO `zol_category` VALUES ('105', 'Alienware', '20', '55', '2');
INSERT INTO `zol_category` VALUES ('106', '数码相机', '21', '100', '3');
INSERT INTO `zol_category` VALUES ('107', '单反相机', '21', '95', '3');
INSERT INTO `zol_category` VALUES ('108', '运动相机', '21', '88', '3');
INSERT INTO `zol_category` VALUES ('109', '摄像机', '21', '85', '3');
INSERT INTO `zol_category` VALUES ('110', '镜头', '21', '82', '3');
INSERT INTO `zol_category` VALUES ('111', '户外器材', '21', '78', '3');
INSERT INTO `zol_category` VALUES ('112', '影棚器材', '21', '76', '3');
INSERT INTO `zol_category` VALUES ('113', '数码相框', '21', '75', '3');
INSERT INTO `zol_category` VALUES ('114', '数码相框', '21', '72', '3');
INSERT INTO `zol_category` VALUES ('115', '佳能', '21', '65', '3');
INSERT INTO `zol_category` VALUES ('116', '索尼', '21', '62', '3');
INSERT INTO `zol_category` VALUES ('117', '尼康', '21', '60', '3');
INSERT INTO `zol_category` VALUES ('118', '三星', '21', '55', '3');
INSERT INTO `zol_category` VALUES ('119', '卡西欧', '21', '50', '3');
INSERT INTO `zol_category` VALUES ('120', '奥林巴斯', '21', '45', '3');
INSERT INTO `zol_category` VALUES ('121', '三脚架/云台', '22', '100', '3');
INSERT INTO `zol_category` VALUES ('122', '闪光灯配件', '22', '95', '3');
INSERT INTO `zol_category` VALUES ('123', '单反手柄', '22', '85', '3');
INSERT INTO `zol_category` VALUES ('124', '机身附件', '22', '82', '3');
INSERT INTO `zol_category` VALUES ('125', '镜头附件', '22', '80', '3');
INSERT INTO `zol_category` VALUES ('126', '存储卡', '22', '78', '3');
INSERT INTO `zol_category` VALUES ('127', '闪光灯', '22', '75', '3');
INSERT INTO `zol_category` VALUES ('128', '相机包', '22', '68', '3');
INSERT INTO `zol_category` VALUES ('129', '充电器', '22', '65', '3');
INSERT INTO `zol_category` VALUES ('130', '遮光罩', '22', '60', '3');
INSERT INTO `zol_category` VALUES ('131', '遥控器', '22', '55', '3');
INSERT INTO `zol_category` VALUES ('132', '电池', '22', '52', '3');
INSERT INTO `zol_category` VALUES ('133', '滤镜', '22', '50', '3');
INSERT INTO `zol_category` VALUES ('134', '体感游戏机', '23', '100', '4');
INSERT INTO `zol_category` VALUES ('135', 'PlayStation 4', '23', '90', '4');
INSERT INTO `zol_category` VALUES ('136', 'Xbox One', '23', '85', '4');
INSERT INTO `zol_category` VALUES ('137', 'Xbox One', '23', '80', '4');
INSERT INTO `zol_category` VALUES ('138', '索尼', '23', '75', '4');
INSERT INTO `zol_category` VALUES ('139', '微软', '23', '70', '4');
INSERT INTO `zol_category` VALUES ('140', '微软', '23', '65', '4');
INSERT INTO `zol_category` VALUES ('141', '玩家国度', '24', '100', '4');
INSERT INTO `zol_category` VALUES ('142', '战神', '24', '95', '4');
INSERT INTO `zol_category` VALUES ('143', 'Alienware', '24', '85', '4');
INSERT INTO `zol_category` VALUES ('144', '雷蛇', '24', '75', '4');
INSERT INTO `zol_category` VALUES ('145', 'DIY主机', '25', '100', '5');
INSERT INTO `zol_category` VALUES ('146', '显卡', '25', '98', '5');
INSERT INTO `zol_category` VALUES ('147', '主板', '25', '95', '5');
INSERT INTO `zol_category` VALUES ('148', '固态硬盘', '25', '93', '5');
INSERT INTO `zol_category` VALUES ('149', '散热器', '25', '90', '5');
INSERT INTO `zol_category` VALUES ('150', '硬盘', '25', '85', '5');
INSERT INTO `zol_category` VALUES ('151', '内存', '25', '78', '5');
INSERT INTO `zol_category` VALUES ('152', '机箱', '25', '75', '5');
INSERT INTO `zol_category` VALUES ('153', 'CPU', '25', '75', '5');
INSERT INTO `zol_category` VALUES ('154', '电源', '25', '72', '5');
INSERT INTO `zol_category` VALUES ('155', '光驱', '25', '68', '5');
INSERT INTO `zol_category` VALUES ('156', '戴尔', '25', '65', '5');
INSERT INTO `zol_category` VALUES ('157', '华硕', '25', '60', '5');
INSERT INTO `zol_category` VALUES ('158', '技嘉', '25', '58', '5');
INSERT INTO `zol_category` VALUES ('159', 'MSI微星', '25', '55', '5');
INSERT INTO `zol_category` VALUES ('160', '三星', '25', '50', '5');
INSERT INTO `zol_category` VALUES ('161', '联想', '25', '48', '5');
INSERT INTO `zol_category` VALUES ('162', '浦科特', '25', '43', '5');
INSERT INTO `zol_category` VALUES ('163', '浦科特', '25', '38', '5');
INSERT INTO `zol_category` VALUES ('164', '金士顿', '25', '42', '5');
INSERT INTO `zol_category` VALUES ('165', '威刚', '25', '38', '5');
INSERT INTO `zol_category` VALUES ('166', 'Intel', '25', '36', '5');
INSERT INTO `zol_category` VALUES ('167', '九州风神', '25', '32', '5');
INSERT INTO `zol_category` VALUES ('168', 'ID-COOLING', '25', '30', '5');
INSERT INTO `zol_category` VALUES ('169', '先马', '25', '28', '5');
INSERT INTO `zol_category` VALUES ('170', 'Tt', '25', '25', '5');
INSERT INTO `zol_category` VALUES ('171', '西部数据', '25', '22', '5');
INSERT INTO `zol_category` VALUES ('172', '希捷', '25', '20', '5');
INSERT INTO `zol_category` VALUES ('173', '耳机', '26', '100', '5');
INSERT INTO `zol_category` VALUES ('174', '音箱', '26', '95', '5');
INSERT INTO `zol_category` VALUES ('175', 'U盘', '26', '90', '5');
INSERT INTO `zol_category` VALUES ('176', '摄像头', '26', '85', '5');
INSERT INTO `zol_category` VALUES ('177', '鼠标垫', '26', '80', '5');
INSERT INTO `zol_category` VALUES ('178', '键盘', '26', '75', '5');
INSERT INTO `zol_category` VALUES ('179', '鼠标', '26', '70', '5');
INSERT INTO `zol_category` VALUES ('180', '移动硬盘', '26', '65', '5');
INSERT INTO `zol_category` VALUES ('181', ' 惠普', '26', '55', '5');
INSERT INTO `zol_category` VALUES ('182', '达尔优', '26', '50', '5');
INSERT INTO `zol_category` VALUES ('183', '摩豹', '26', '45', '5');
INSERT INTO `zol_category` VALUES ('184', 'PNY', '26', '40', '5');
INSERT INTO `zol_category` VALUES ('185', '雷蛇', '26', '35', '5');
INSERT INTO `zol_category` VALUES ('186', '赛睿', '26', '30', '5');
INSERT INTO `zol_category` VALUES ('187', '罗技', '26', '20', '5');
INSERT INTO `zol_category` VALUES ('188', '路由器', '27', '100', '5');
INSERT INTO `zol_category` VALUES ('189', '网络存储', '27', '90', '5');
INSERT INTO `zol_category` VALUES ('190', 'B-link', '27', '85', '5');
INSERT INTO `zol_category` VALUES ('191', '西部数据', '27', '80', '5');
INSERT INTO `zol_category` VALUES ('192', '巴法络', '27', '75', '5');
INSERT INTO `zol_category` VALUES ('193', '群晖', '27', '70', '5');
INSERT INTO `zol_category` VALUES ('194', '智能称', '28', '100', '6');
INSERT INTO `zol_category` VALUES ('195', '智能家居', '28', '95', '6');
INSERT INTO `zol_category` VALUES ('196', '智能穿戴', '28', '85', '6');
INSERT INTO `zol_category` VALUES ('197', '智能手表', '28', '80', '6');
INSERT INTO `zol_category` VALUES ('198', '智能手环', '28', '78', '6');
INSERT INTO `zol_category` VALUES ('199', '智能插座', '28', '76', '6');
INSERT INTO `zol_category` VALUES ('200', '智能创意', '28', '74', '6');
INSERT INTO `zol_category` VALUES ('201', '智能电子', '28', '72', '6');
INSERT INTO `zol_category` VALUES ('202', '智能机器人', '28', '68', '6');
INSERT INTO `zol_category` VALUES ('203', '智能摄像机', '28', '66', '6');
INSERT INTO `zol_category` VALUES ('204', '智能头戴设备', '28', '64', '6');
INSERT INTO `zol_category` VALUES ('205', 'HTC', '28', '62', '6');
INSERT INTO `zol_category` VALUES ('206', '乐心', '28', '50', '6');
INSERT INTO `zol_category` VALUES ('207', '华为', '28', '45', '6');
INSERT INTO `zol_category` VALUES ('208', 'MP3', '29', '100', '6');
INSERT INTO `zol_category` VALUES ('209', '录音笔', '29', '95', '6');
INSERT INTO `zol_category` VALUES ('210', '摄像头', '29', '85', '6');
INSERT INTO `zol_category` VALUES ('211', '移动电源', '29', '80', '6');
INSERT INTO `zol_category` VALUES ('212', '蓝牙音箱', '29', '75', '6');
INSERT INTO `zol_category` VALUES ('213', '插座/插排', '29', '75', '6');
INSERT INTO `zol_category` VALUES ('214', '品胜', '29', '75', '6');
INSERT INTO `zol_category` VALUES ('215', '羽博', '29', '65', '6');
INSERT INTO `zol_category` VALUES ('216', '小米', '29', '60', '6');
INSERT INTO `zol_category` VALUES ('217', '索尼', '29', '55', '6');
INSERT INTO `zol_category` VALUES ('218', '飞利浦', '29', '45', '6');
INSERT INTO `zol_category` VALUES ('219', '投影机吊架', '30', '100', '6');
INSERT INTO `zol_category` VALUES ('220', '3D眼镜', '30', '90', '6');
INSERT INTO `zol_category` VALUES ('221', '投影幕布', '30', '85', '6');
INSERT INTO `zol_category` VALUES ('222', '投影机', '30', '75', '6');
INSERT INTO `zol_category` VALUES ('223', '手柄', '31', '100', '7');
INSERT INTO `zol_category` VALUES ('224', '游戏机', '31', '90', '7');
INSERT INTO `zol_category` VALUES ('229', 'POS机', '32', '95', '7');
INSERT INTO `zol_category` VALUES ('228', '投影幕布', '32', '100', '7');
INSERT INTO `zol_category` VALUES ('227', '掌上游戏机', '31', '75', '7');
INSERT INTO `zol_category` VALUES ('230', '投影仪', '32', '80', '7');
INSERT INTO `zol_category` VALUES ('236', '加湿器', '33', '100', '8');
INSERT INTO `zol_category` VALUES ('232', '飞利浦', '32', '70', '7');
INSERT INTO `zol_category` VALUES ('233', '拉卡拉', '32', '76', '7');
INSERT INTO `zol_category` VALUES ('234', '极米', '32', '77', '7');
INSERT INTO `zol_category` VALUES ('235', '坚果', '32', '72', '7');
INSERT INTO `zol_category` VALUES ('237', '电暖气', '33', '95', '8');
INSERT INTO `zol_category` VALUES ('238', '收音机', '33', '85', '8');
INSERT INTO `zol_category` VALUES ('239', '吸尘器', '33', '80', '8');
INSERT INTO `zol_category` VALUES ('240', '护眼灯', '33', '75', '8');
INSERT INTO `zol_category` VALUES ('241', '小工具', '33', '75', '8');
INSERT INTO `zol_category` VALUES ('242', '驱蚊防蚊', '33', '72', '8');
INSERT INTO `zol_category` VALUES ('243', '扫地机器人', '33', '70', '8');
INSERT INTO `zol_category` VALUES ('244', '空气净化器', '33', '65', '8');
INSERT INTO `zol_category` VALUES ('245', '洁面仪', '34', '100', '8');
INSERT INTO `zol_category` VALUES ('246', '剃须刀', '34', '95', '8');
INSERT INTO `zol_category` VALUES ('247', '电吹风', '34', '85', '8');
INSERT INTO `zol_category` VALUES ('248', '电子秤', '34', '80', '8');
INSERT INTO `zol_category` VALUES ('249', '按摩器', '34', '75', '8');
INSERT INTO `zol_category` VALUES ('250', '血压计', '34', '70', '8');
INSERT INTO `zol_category` VALUES ('251', '平板电视', '35', '100', '8');
INSERT INTO `zol_category` VALUES ('252', '迷你音响', '35', '95', '8');
INSERT INTO `zol_category` VALUES ('253', '电视盒子', '35', '85', '8');
INSERT INTO `zol_category` VALUES ('254', '烤箱', '35', '80', '8');
INSERT INTO `zol_category` VALUES ('255', '电水壶', '35', '75', '8');
INSERT INTO `zol_category` VALUES ('256', '蒸蛋器', '35', '70', '8');
INSERT INTO `zol_category` VALUES ('257', '酸奶机', '35', '68', '8');
INSERT INTO `zol_category` VALUES ('258', '电火锅', '35', '65', '8');
INSERT INTO `zol_category` VALUES ('259', '咖啡机', '35', '62', '8');
INSERT INTO `zol_category` VALUES ('260', '豆浆机', '35', '60', '8');
INSERT INTO `zol_category` VALUES ('261', '电饭煲', '35', '58', '8');
INSERT INTO `zol_category` VALUES ('262', '电压力锅', '35', '55', '8');
INSERT INTO `zol_category` VALUES ('263', '料理/榨汁机', '35', '50', '8');
INSERT INTO `zol_category` VALUES ('264', '酷派', '15', '5', '1');
INSERT INTO `zol_category` VALUES ('265', '联想', '15', '4', '1');

-- ----------------------------
-- Table structure for `zol_customer`
-- ----------------------------
DROP TABLE IF EXISTS `zol_customer`;
CREATE TABLE `zol_customer` (
  `cuid` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户表ID',
  `cunumber` char(20) NOT NULL DEFAULT '' COMMENT '用户账号',
  `cuname` char(20) NOT NULL DEFAULT '' COMMENT '用户昵称',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '用户密码',
  `cumail` char(32) NOT NULL DEFAULT '' COMMENT '用户邮箱',
  `cuaddress` char(200) NOT NULL DEFAULT '' COMMENT '用户地址',
  `cucall` char(11) NOT NULL DEFAULT '' COMMENT '手机',
  `cutell` char(12) NOT NULL DEFAULT '' COMMENT '固定电话',
  PRIMARY KEY (`cuid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of zol_customer
-- ----------------------------
INSERT INTO `zol_customer` VALUES ('1', 'AAAAA', '测试~账号', '7fef6171469e80d32c0559f88b377245', '', '', '', '');

-- ----------------------------
-- Table structure for `zol_dingdan`
-- ----------------------------
DROP TABLE IF EXISTS `zol_dingdan`;
CREATE TABLE `zol_dingdan` (
  `daid` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单表ID',
  `danumber` char(25) NOT NULL DEFAULT '' COMMENT '订单号',
  `daname` char(20) NOT NULL DEFAULT '' COMMENT '收货人',
  `ddaddress` char(60) NOT NULL DEFAULT '' COMMENT '收货地址',
  `ddtotal` decimal(10,2) NOT NULL COMMENT '价格总计',
  `ddtime` char(20) NOT NULL DEFAULT '' COMMENT '生成时间',
  `ddnote` varchar(120) NOT NULL DEFAULT '' COMMENT '备注',
  `ddstate` tinyint(4) NOT NULL DEFAULT '0' COMMENT '订单状态（1.未付款2.已付款,3.未完成,4.已完成)',
  `zol_customer_cuid` tinyint(3) unsigned NOT NULL COMMENT '(用户ID)关联字段',
  PRIMARY KEY (`daid`),
  KEY `fk_zol_dingdan_zol_customer1_idx` (`zol_customer_cuid`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COMMENT='订单表';

-- ----------------------------
-- Records of zol_dingdan
-- ----------------------------
INSERT INTO `zol_dingdan` VALUES ('4', 'F0909306871366770', '李杰', '北京市北京东城区朝阳区来广营北路150号', '7360.00', '1473430687', '									\r\n                            ', '1', '4');
INSERT INTO `zol_dingdan` VALUES ('6', 'F0910853321296509', '李凡', '北京市北京东城区北京市朝阳区', '10776.00', '1473485332', '									\r\n                            ', '1', '4');
INSERT INTO `zol_dingdan` VALUES ('7', 'F0910985667502466', '李杰', '北京市北京东城区朝阳区来广营北路150号', '1847.00', '1473498566', '									\r\n                            ', '1', '4');
INSERT INTO `zol_dingdan` VALUES ('8', 'F0912852602134513', '李凡', '北京市北京东城区北京市朝阳区', '9296.00', '1473685260', '									\r\n                            ', '1', '4');
INSERT INTO `zol_dingdan` VALUES ('30', 'G1108500582175223', '小李', '北京市北京昌平区回龙观', '14720.00', '1510150058', '									\r\n                            ', '1', '6');
INSERT INTO `zol_dingdan` VALUES ('29', 'G0315896928515701', 'dfgdf', '北京市北京东城区vfdb dc', '7360.00', '1489589692', '									\r\n                            ', '1', '5');
INSERT INTO `zol_dingdan` VALUES ('28', 'F0927849240672303', 'QWERTY', '北京市北京东城区是对方过后', '899.00', '1474984924', '									\r\n                            ', '1', '3');
INSERT INTO `zol_dingdan` VALUES ('31', 'G1228736520453241', '阿三', '北京市北京东城区东大街', '9179.00', '1514473652', '尽快发货', '1', '1');

-- ----------------------------
-- Table structure for `zol_dingdan_list`
-- ----------------------------
DROP TABLE IF EXISTS `zol_dingdan_list`;
CREATE TABLE `zol_dingdan_list` (
  `dlid` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单l列表ID',
  `dlnum` tinyint(4) NOT NULL DEFAULT '0' COMMENT '购买数量',
  `dlprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '价格总计',
  `dlnote` varchar(120) NOT NULL DEFAULT '' COMMENT '备注',
  `dlpriced` decimal(10,2) DEFAULT '0.00' COMMENT '单价',
  `dlimg` text NOT NULL COMMENT '商品图片',
  `dltitle` char(200) NOT NULL COMMENT '商品名称',
  `zol_goods_gid` int(10) unsigned NOT NULL COMMENT '(商品ID)关联字段',
  `zol_dingdan_daid` tinyint(3) unsigned NOT NULL COMMENT '(订单ID)关联字段',
  PRIMARY KEY (`dlid`),
  KEY `fk_zol_dingdan_list_zol_goods1_idx` (`zol_goods_gid`),
  KEY `fk_zol_dingdan_list_zol_dingdan1_idx` (`zol_dingdan_daid`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COMMENT='订单列表';

-- ----------------------------
-- Records of zol_dingdan_list
-- ----------------------------
INSERT INTO `zol_dingdan_list` VALUES ('7', '1', '1847.00', '									\r\n                            ', '1847.00', 'Upload/Content/16/09/99151473491825.jpg', '\n						【顺丰包邮】三星 GALAXY C5（C5000/联通4G）4GB+32GB/64GB					', '18', '7');
INSERT INTO `zol_dingdan_list` VALUES ('6', '2', '10776.00', '									\r\n                            ', '5388.00', 'Upload/Content/16/09/8821473355446.png', '\n						【顺丰包邮】苹果 iPhone 7 Plus（全网通）开始预约					', '7', '6');
INSERT INTO `zol_dingdan_list` VALUES ('4', '4', '7360.00', '									\r\n                            ', '1840.00', 'Upload/Content/16/09/62921473342579.jpg', '\n						【顺丰包邮 赠大礼】魅族 MX6全网通4GB+32GB 双卡双待 十核处理器					', '1', '4');
INSERT INTO `zol_dingdan_list` VALUES ('8', '2', '9296.00', '									\r\n                            ', '4648.00', 'Upload/Content/16/09/59771473485861.jpg', '\n						苹果 iPhone 6S Plus（全网通）5.5英寸 2GRAM 1200W像素					', '15', '8');
INSERT INTO `zol_dingdan_list` VALUES ('32', '2', '7360.00', '									\r\n                            ', '3680.00', 'Upload/Content/16/09/55891473343917.jpg', '\n						【顺丰包邮】A456UJ6200 14寸轻薄便携本 酷睿I5-6200U 4G内存 500G硬盘 GT920-2G独立显卡 DVD刻录光驱 全能学生本 实力打造！					', '2', '30');
INSERT INTO `zol_dingdan_list` VALUES ('31', '2', '7360.00', '									\r\n                            ', '3680.00', 'Upload/Content/16/09/55891473343917.jpg', '\n						【顺丰包邮】A456UJ6200 14寸轻薄便携本 酷睿I5-6200U 4G内存 500G硬盘 GT920-2G独立显卡 DVD刻录光驱 全能学生本 实力打造！					', '2', '30');
INSERT INTO `zol_dingdan_list` VALUES ('30', '2', '7360.00', '									\r\n                            ', '3680.00', 'Upload/Content/16/09/55891473343917.jpg', '\n						【顺丰包邮】A456UJ6200 14寸轻薄便携本 酷睿I5-6200U 4G内存 500G硬盘 GT920-2G独立显卡 DVD刻录光驱 全能学生本 实力打造！					', '2', '29');
INSERT INTO `zol_dingdan_list` VALUES ('29', '1', '899.00', '									\r\n                            ', '899.00', 'Upload/Content/16/09/50711473494081.jpg', '\n						魅族 魅蓝Note3（电信4G）5.5寸 2GB RAM+16GB ROM 1300万像素+500万					', '19', '28');
INSERT INTO `zol_dingdan_list` VALUES ('33', '1', '3680.00', '尽快发货', '3680.00', 'Upload/Content/16/09/55891473343917.jpg', '\n						【顺丰包邮】A456UJ6200 14寸轻薄便携本 酷睿I5-6200U 4G内存 500G硬盘 GT920-2G独立显卡 DVD刻录光驱 全能学生本 实力打造！					', '2', '31');
INSERT INTO `zol_dingdan_list` VALUES ('34', '1', '5499.00', '尽快发货', '5499.00', 'Upload/Content/16/09/8441473358548.png', '\n						【顺丰包邮】ThinkPad New S2（20GUA004CD）13.3英寸商务办公本，轻薄便携本，Ultrabook笔记本(i5-6200U 4G 192GB SSD FHD IPS W					', '8', '31');

-- ----------------------------
-- Table structure for `zol_goods`
-- ----------------------------
DROP TABLE IF EXISTS `zol_goods`;
CREATE TABLE `zol_goods` (
  `gid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品ID',
  `gname` char(200) NOT NULL DEFAULT '' COMMENT '商品名称',
  `gnuit` char(10) NOT NULL DEFAULT '' COMMENT '单位',
  `gmarket_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '市场价',
  `gprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商城价',
  `gtotal` int(11) NOT NULL DEFAULT '0' COMMENT '总库存',
  `glist_map` text NOT NULL COMMENT '列表图',
  `gdate_listing` char(20) NOT NULL DEFAULT '' COMMENT '上市日期',
  `gclick` int(10) unsigned NOT NULL DEFAULT '500' COMMENT '点击次数',
  `zol_category_cid` int(10) unsigned NOT NULL COMMENT '(分类ID)关联字段',
  `zol_type_tid` int(10) unsigned NOT NULL COMMENT '(类型ID)关联字段',
  `zol_brands_bid` int(10) unsigned NOT NULL COMMENT '(品牌ID)关联字段',
  `zol_user_uid` tinyint(3) unsigned NOT NULL COMMENT '(管理员ID)关联字段',
  PRIMARY KEY (`gid`),
  KEY `fk_zol_goods_zol_category1_idx` (`zol_category_cid`),
  KEY `fk_zol_goods_zol_type1_idx` (`zol_type_tid`),
  KEY `fk_zol_goods_zol_brands1_idx` (`zol_brands_bid`),
  KEY `fk_zol_goods_zol_user1_idx` (`zol_user_uid`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='商品表';

-- ----------------------------
-- Records of zol_goods
-- ----------------------------
INSERT INTO `zol_goods` VALUES ('1', '【顺丰包邮 赠大礼】魅族 MX6全网通4GB+32GB 双卡双待 十核处理器', '台', '2000.00', '1840.00', '600', 'Upload/Content/16/09/62921473342579.jpg', '2016-5-10', '543567', '39', '1', '7', '1');
INSERT INTO `zol_goods` VALUES ('2', '【顺丰包邮】A456UJ6200 14寸轻薄便携本 酷睿I5-6200U 4G内存 500G硬盘 GT920-2G独立显卡 DVD刻录光驱 全能学生本 实力打造！', '台', '4000.00', '3680.00', '600', 'Upload/Content/16/09/55891473343917.jpg', '2016-9', '345643', '68', '2', '17', '1');
INSERT INTO `zol_goods` VALUES ('3', '普耐尔W2学生电话手表儿童智能手表手机插卡成人男女安卓手环SIM', '支', '299.00', '58.90', '500', 'Upload/Content/16/09/40311473347463.jpg', '2016-4', '442', '197', '6', '55', '1');
INSERT INTO `zol_goods` VALUES ('4', '尼康（Nikon）D3300 单反套机（AF-P DX 尼克尔 18-55mm f/3.5-5.6G VR）选GO套装送：店铺延保1年！送 威高VSGO）D-15309 清洁巾', '台', '2888.00', '2600.00', '320', 'Upload/Content/16/09/22371473350462.jpg', '2016-3', '23542', '107', '3', '19', '1');
INSERT INTO `zol_goods` VALUES ('5', '【顺丰包邮】乐视 乐Max（全网通） 4GB+64GB 2100万摄像头', '台', '1599.00', '1380.00', '450', 'Upload/Content/16/09/65051473351661.jpg', '2016-8', '5323', '43', '1', '3', '1');
INSERT INTO `zol_goods` VALUES ('9', '六代 酷睿 i5 6500四核 集成HD530 显卡/微星B150M军规用料 /8G DDR4 双通道内存 / 高速 120G SSD 畅玩LOL 1080 60帧', '台', '2999.00', '2888.00', '200', 'Upload/Content/16/09/9841473360976.jpg', '2015-11', '34434', '146', '5', '28', '1');
INSERT INTO `zol_goods` VALUES ('7', '【顺丰包邮】苹果 iPhone 7 Plus（全网通）开始预约', '台', '5688.00', '5388.00', '6000', 'Upload/Content/16/09/8821473355446.png', '2016-9', '4567898', '37', '1', '1', '1');
INSERT INTO `zol_goods` VALUES ('8', '【顺丰包邮】ThinkPad New S2（20GUA004CD）13.3英寸商务办公本，轻薄便携本，Ultrabook笔记本(i5-6200U 4G 192GB SSD FHD IPS W', '台', '5800.00', '5499.00', '5199', 'Upload/Content/16/09/8441473358548.png', '2016-4', '3232', '70', '2', '12', '1');
INSERT INTO `zol_goods` VALUES ('10', '美苏小N锅电煮锅 D型手柄', '个', '79.00', '49.00', '121', 'Upload/Content/16/09/21411473362993.jpg', '2016-5', '323', '262', '8', '56', '1');
INSERT INTO `zol_goods` VALUES ('11', '【顺丰包邮 赠大礼】魅族 魅蓝3S(高配版) 1300W像素 3GB+32GB', '台', '1299.00', '888.00', '233', 'Upload/Content/16/09/78311473363963.jpg', '2016-5', '4232', '39', '1', '7', '1');
INSERT INTO `zol_goods` VALUES ('12', 'Sony 索尼 ILCE-6000套机（E PZ 16-50mm，55-210mm）4D对焦高速连拍每秒11张、*完善的售后，被信任是一种快乐！', '台', '5799.00', '5388.00', '3455', 'Upload/Content/16/09/66571473404102.jpg', '2016-4', '23232', '107', '3', '8', '1');
INSERT INTO `zol_goods` VALUES ('13', '微星GeForce GTX 1070 DUKE 8G 暗黑龙爵', '个', '3199.00', '2899.00', '469', 'Upload/Content/16/09/42961473420197.jpg', '2016-7', '23242', '149', '5', '13', '1');
INSERT INTO `zol_goods` VALUES ('14', 'I-Mu/幻响 孙小圣创意蓝牙音箱 低音炮笔记本电脑手机便携迷你音响', '个', '228.00', '189.00', '348', 'Upload/Content/16/09/63911473425788.jpg', '2016-8', '23242', '174', '5', '57', '1');
INSERT INTO `zol_goods` VALUES ('15', '苹果 iPhone 6S Plus（全网通）5.5英寸 2GRAM 1200W像素', '台', '4850.00', '4648.00', '344', 'Upload/Content/16/09/59771473485861.jpg', '2015-9', '323232', '37', '1', '1', '1');
INSERT INTO `zol_goods` VALUES ('16', 'OPPO R9 Plus（全网通）6.0英寸 4GB+64G存储 1600万像素', '台', '3189.00', '2980.00', '2323', 'Upload/Content/16/09/89861473488044.jpg', '2016-8', '342342', '40', '1', '4', '1');
INSERT INTO `zol_goods` VALUES ('17', '【顺丰包邮 送手机壳 钢化膜】魅族 MX6 移动 联通 电信全网通手机', '台', '1749.00', '1549.00', '2344', 'Upload/Content/16/09/3591473489823.png', '2016-8', '23242', '39', '1', '7', '1');
INSERT INTO `zol_goods` VALUES ('18', '【顺丰包邮】三星 GALAXY C5（C5000/联通4G）4GB+32GB/64GB', '台', '1945.00', '1847.00', '4325', 'Upload/Content/16/09/99151473491825.jpg', '2016-4', '5545', '38', '1', '9', '1');
INSERT INTO `zol_goods` VALUES ('19', '魅族 魅蓝Note3（电信4G）5.5寸 2GB RAM+16GB ROM 1300万像素+500万', '台', '1000.00', '899.00', '2355', 'Upload/Content/16/09/50711473494081.jpg', '2016-6', '83224', '39', '1', '7', '1');
INSERT INTO `zol_goods` VALUES ('20', '【64G+移动电源+自拍杆+指环支架】荣耀 8 4GB RAM/全网通64g版', '台', '2580.00', '2388.00', '32434', 'Upload/Content/16/09/96901473495304.jpg', '2016-7', '53332', '36', '1', '2', '1');
INSERT INTO `zol_goods` VALUES ('21', '【自拍杆+指环支架+钢化贴+移动电源】vivo X7 Plus（全网通）5.7寸大屏 64GB 机身内存 指纹识别 超薄机身', '台', '2850.00', '2548.00', '3242', 'Upload/Content/16/09/50901473496642.jpg', '2016-7', '53422', '44', '1', '5', '1');
INSERT INTO `zol_goods` VALUES ('22', '酷派 cool1（标准版/全网通） 4000mAh 5.5英寸800万后置摄像素', '台', '1299.00', '1099.00', '2344', 'Upload/Content/16/09/85791473511905.jpg', '2016-4', '32433', '264', '1', '6', '0');
INSERT INTO `zol_goods` VALUES ('23', '【全新行货 顺丰包邮】索尼 Xperia Z2（L50t/移动4G）5.2英寸三防机，外观较z1更窄更薄手感更舒适，G镜头像素没变但功能更加完善', '台', '2200.00', '1970.00', '3232', 'Upload/Content/16/09/26921473514777.jpg', '2016-5', '4343', '45', '1', '8', '0');
INSERT INTO `zol_goods` VALUES ('24', '【快递包邮】联想 黄金斗士A8（A3860/畅玩高配版/移动4G）双卡智能机', '台', '700.00', '526.00', '345', 'Upload/Content/16/09/78651473515210.jpg', '2016-8', '345', '265', '1', '10', '0');
INSERT INTO `zol_goods` VALUES ('25', '惠普 OMEN 15-ax016TX 暗影精灵2代 15寸影音娱乐游戏本 i5-6300H 4G DDR4代 128G固态+1TB GTX960M-2G独显', '台', '5600.00', '5299.00', '359', 'Upload/Content/16/09/36651473516354.jpg', '2016-2', '2354', '72', '2', '58', '0');
INSERT INTO `zol_goods` VALUES ('26', '【顺丰包邮】戴尔 XPS 13（XPS 13-9350-D1508G）13.3寸精致轻薄微边框超极本i5 6200U /4G/128G SSD/强劲核显/FHD高清', '台', '6888.00', '6331.00', '2353', 'Upload/Content/16/09/83181473522458.jpg', '2016-5', '6545', '69', '2', '16', '0');
INSERT INTO `zol_goods` VALUES ('27', '【送六件套】神舟 战神 K610D-i7 D2 （i7 4G 500GB 2G独显 ）', '台', '3700.00', '3588.00', '500', 'Upload/Content/16/09/97301473527259.jpg', '2016-5', '2363', '73', '2', '15', '0');
INSERT INTO `zol_goods` VALUES ('28', '【顺丰包邮】联想 G40-80 14英寸影音娱乐笔记本， 高清屏幕，性能强劲！四代I5 内存4G 硬盘500G 2G独显', '台', '3500.00', '3298.00', '467', 'Upload/Content/16/09/23401473529628.png', '2016-5', '23573', '61', '2', '10', '0');
INSERT INTO `zol_goods` VALUES ('29', '三星 940X3L-K02 13.3英寸触控超薄笔记本（I7-6500U 8G 256G固态硬盘 win10 3K触控屏 全金属机身）黑色', '台', '14000.00', '12900.00', '367', 'Upload/Content/16/09/2291473531675.jpg', '2016-1', '23464', '60', '2', '9', '0');
INSERT INTO `zol_goods` VALUES ('30', '【顺丰包邮】 AcerVN7-592G-58NG 四核i5 6300HQ 4G内存 500G 独显2G', '台', '5500.00', '5280.00', '347', 'Upload/Content/16/09/96571473533468.png', '2016-3', '3467', '62', '2', '11', '0');
INSERT INTO `zol_goods` VALUES ('31', '【顺丰包邮 大陆行货】苹果 MacBook Pro（MF839CH/A） 配备 Retina 显示屏2560x1600（I5-5257U 8G 128GB SSD固态）银色', '台', '9100.00', '8800.00', '124', 'Upload/Content/16/09/31561473535394.png', '2015-9', '345743', '71', '2', '1', '0');
INSERT INTO `zol_goods` VALUES ('32', '【顺丰包邮 下单立减】华硕 灵耀U3000（i7 6500U/8GB/512GB）酷睿i7-6500U 8G 512G固态 1920x1080 IPS 13.3英寸 轻薄 超极本', '台', '6100.00', '5880.00', '346', 'Upload/Content/16/09/35741473537975.png', '2016-4', '3458', '68', '2', '17', '0');
INSERT INTO `zol_goods` VALUES ('33', '【顺丰包邮】微软 Surface Pro 4 （12.3英才平板电脑 I5-6300U 8G 256G SSD固态 十点触控 屏幕分辨率2736x1824）银色', '台', '8200.00', '7980.00', '235', 'Upload/Content/16/09/43581473579039.png', '2016-3', '72423', '60', '2', '14', '0');
INSERT INTO `zol_goods` VALUES ('34', 'Canon佳能5D3（24-70F4)套机，佳能 5D Mark III套机（24-70mm F4），更完善的售后服务，尽在锐意摄影器材。', '台', '21000.00', '19780.00', '235', 'Upload/Content/16/09/85281473584361.jpg', '2016-2', '23353', '107', '3', '18', '0');
INSERT INTO `zol_goods` VALUES ('35', '留言板led小台灯护眼学生学习灯书桌卧室床头寝室节能阅读灯工作', '台', '110.00', '89.00', '213', 'Upload/Content/16/09/94471473586667.png', '2016-2', '321', '240', '8', '59', '0');
INSERT INTO `zol_goods` VALUES ('36', '【送菌粉】包邮小熊陶瓷分杯酸奶机 1升不锈钢内胆 SNJ-560', '台', '120.00', '99.00', '235', 'Upload/Content/16/09/93191473587571.jpg', '2015-11', '2241', '257', '8', '24', '0');
INSERT INTO `zol_goods` VALUES ('37', 'imu幻响 LED护眼台灯学生儿童工作台灯折叠床头灯可调光护眼灯', '个', '100.00', '79.00', '234', 'Upload/Content/16/09/44691473589780.jpg', '2016-4', '2323', '240', '8', '57', '0');
INSERT INTO `zol_goods` VALUES ('38', '酷开（coocaa）U50 50英寸闪电4K 超高清智能液晶平板电视 酷开系统 WIFI(黑色)', '台', '2500.00', '2399.00', '342', 'Upload/Content/16/09/20831473592960.jpg', '2016-3', '65322', '251', '8', '22', '0');
INSERT INTO `zol_goods` VALUES ('39', '酷睿六代I5 6500 搭配 微星GTX 1060 飓风6G 暴风来袭 VR 4K 统统 我有 鲁大师跑分 27W+ 还等什么', '台', '5199.00', '4200.00', '564', 'Upload/Content/16/09/94391473597488.jpg', '2016-4', '7654', '145', '5', '60', '0');
INSERT INTO `zol_goods` VALUES ('40', 'Intel Xeon E3-1231 v3 全新无压痕 三年换新服务 赠SE-902X散热器！', '台', '2059.00', '1580.00', '345', 'Upload/Content/16/09/4271473601039.jpg', '2016-3', '3422', '153', '5', '29', '0');
INSERT INTO `zol_goods` VALUES ('41', 'Tt (Thermaltake) Luna 8cm减震风扇（液压轴承/强化减震/双叶弧形扇叶/静音技术/3Pin/大4Pin通用）', '个', '70.00', '59.00', '372', 'Upload/Content/16/09/29531473601575.jpg', '2016-4', '3432', '149', '5', '26', '0');
INSERT INTO `zol_goods` VALUES ('42', '希捷 Backup Plus 睿品升级版 2.5英寸（2TB）（STDR2000300）', '个', '800.00', '719.00', '342', 'Upload/Content/16/09/44891473603424.jpg', '2016-1', '533', '150', '5', '27', '0');
INSERT INTO `zol_goods` VALUES ('43', '技嘉 GA-Z97X-Gaming 3(rev.1.0)主板 Intel Z97/LGA1150 K2 网卡 技术游戏 主板', '块', '1000.00', '899.00', '434', 'Upload/Content/16/09/11741473604373.jpg', '2016-2', '4933', '147', '5', '28', '0');
INSERT INTO `zol_goods` VALUES ('44', '威刚 8GB DDR3 1600（万紫千红）台式机内存兼容DD3 1333 三年换新 终身质保', '个', '300.00', '245.00', '128', 'Upload/Content/16/09/62191473605581.jpg', '2015-11', '22444', '165', '5', '32', '0');
INSERT INTO `zol_goods` VALUES ('45', '游戏悍将 刀锋1 前置USB3 台式机机箱 支持风扇 调速 侧透 支持 长显卡 支持ATX MATX 主板类型', '台', '249.00', '229.00', '233', 'Upload/Content/16/09/72711473606498.jpg', '2016-7', '435', '152', '5', '30', '0');

-- ----------------------------
-- Table structure for `zol_goods_attr`
-- ----------------------------
DROP TABLE IF EXISTS `zol_goods_attr`;
CREATE TABLE `zol_goods_attr` (
  `gaid` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品属性ID',
  `gavalue` char(200) NOT NULL DEFAULT '' COMMENT '商品属性值',
  `gaadd_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '附加价格',
  `zol_type_attr_taid` int(10) unsigned NOT NULL COMMENT '(类型属性ID)关联字段',
  `zol_goods_gid` int(10) unsigned NOT NULL COMMENT '(商品ID)关联字段',
  PRIMARY KEY (`gaid`),
  KEY `fk_zol_goods_attr_zol_type_attr1_idx` (`zol_type_attr_taid`),
  KEY `fk_zol_goods_attr_zol_goods1_idx` (`zol_goods_gid`)
) ENGINE=MyISAM AUTO_INCREMENT=723 DEFAULT CHARSET=utf8 COMMENT='商品属性表';

-- ----------------------------
-- Records of zol_goods_attr
-- ----------------------------
INSERT INTO `zol_goods_attr` VALUES ('1', '1500-2000元', '0.00', '1', '1');
INSERT INTO `zol_goods_attr` VALUES ('2', '大屏幕', '0.00', '2', '1');
INSERT INTO `zol_goods_attr` VALUES ('3', '双4G', '0.00', '3', '1');
INSERT INTO `zol_goods_attr` VALUES ('4', '5.1-5.5英寸', '0.00', '4', '1');
INSERT INTO `zol_goods_attr` VALUES ('5', '4GB', '0.00', '6', '1');
INSERT INTO `zol_goods_attr` VALUES ('6', '1200万像素', '0.00', '8', '1');
INSERT INTO `zol_goods_attr` VALUES ('7', '1920x1080像素', '0.00', '9', '1');
INSERT INTO `zol_goods_attr` VALUES ('8', '白色', '0.00', '5', '1');
INSERT INTO `zol_goods_attr` VALUES ('9', '太空银', '0.00', '5', '1');
INSERT INTO `zol_goods_attr` VALUES ('10', '深空灰', '0.00', '5', '1');
INSERT INTO `zol_goods_attr` VALUES ('11', '16GB', '0.00', '7', '1');
INSERT INTO `zol_goods_attr` VALUES ('12', '32GB', '200.00', '7', '1');
INSERT INTO `zol_goods_attr` VALUES ('13', '3500-3999元', '0.00', '10', '2');
INSERT INTO `zol_goods_attr` VALUES ('14', '游戏本', '0.00', '11', '2');
INSERT INTO `zol_goods_attr` VALUES ('15', '14英寸', '0.00', '12', '2');
INSERT INTO `zol_goods_attr` VALUES ('16', '性能级显卡', '0.00', '14', '2');
INSERT INTO `zol_goods_attr` VALUES ('17', '酷睿i7', '300.00', '13', '2');
INSERT INTO `zol_goods_attr` VALUES ('18', '酷睿i5', '0.00', '13', '2');
INSERT INTO `zol_goods_attr` VALUES ('19', '4GB', '0.00', '15', '2');
INSERT INTO `zol_goods_attr` VALUES ('20', '8GB', '300.00', '15', '2');
INSERT INTO `zol_goods_attr` VALUES ('21', '500GB', '0.00', '16', '2');
INSERT INTO `zol_goods_attr` VALUES ('22', '1TB及以上', '500.00', '16', '2');
INSERT INTO `zol_goods_attr` VALUES ('23', '白色', '0.00', '18', '2');
INSERT INTO `zol_goods_attr` VALUES ('24', '深空灰', '0.00', '18', '2');
INSERT INTO `zol_goods_attr` VALUES ('25', '太空银', '0.00', '18', '2');
INSERT INTO `zol_goods_attr` VALUES ('98', '粉色', '0.00', '40', '3');
INSERT INTO `zol_goods_attr` VALUES ('97', '灰色', '0.00', '40', '3');
INSERT INTO `zol_goods_attr` VALUES ('96', '黑色', '0.00', '40', '3');
INSERT INTO `zol_goods_attr` VALUES ('95', '蓝色', '0.00', '40', '3');
INSERT INTO `zol_goods_attr` VALUES ('94', '成年人', '0.00', '35', '3');
INSERT INTO `zol_goods_attr` VALUES ('93', '青少年', '0.00', '35', '3');
INSERT INTO `zol_goods_attr` VALUES ('92', '儿童', '0.00', '35', '3');
INSERT INTO `zol_goods_attr` VALUES ('91', '500元以下', '0.00', '36', '3');
INSERT INTO `zol_goods_attr` VALUES ('218', '深空灰', '0.00', '5', '5');
INSERT INTO `zol_goods_attr` VALUES ('217', '玫瑰金', '0.00', '5', '5');
INSERT INTO `zol_goods_attr` VALUES ('121', '灰色', '0.00', '20', '4');
INSERT INTO `zol_goods_attr` VALUES ('120', '黑色', '0.00', '20', '4');
INSERT INTO `zol_goods_attr` VALUES ('119', '1000-2000元', '0.00', '19', '4');
INSERT INTO `zol_goods_attr` VALUES ('118', '单反', '0.00', '21', '4');
INSERT INTO `zol_goods_attr` VALUES ('117', 'APS画幅', '0.00', '22', '4');
INSERT INTO `zol_goods_attr` VALUES ('116', '2400-3600万', '0.00', '23', '4');
INSERT INTO `zol_goods_attr` VALUES ('115', '5倍以下', '0.00', '24', '4');
INSERT INTO `zol_goods_attr` VALUES ('216', '8GB', '0.00', '7', '5');
INSERT INTO `zol_goods_attr` VALUES ('215', '16GB', '100.00', '7', '5');
INSERT INTO `zol_goods_attr` VALUES ('214', '1000-1500元', '0.00', '1', '5');
INSERT INTO `zol_goods_attr` VALUES ('213', '大屏幕', '0.00', '2', '5');
INSERT INTO `zol_goods_attr` VALUES ('212', '移动4G', '0.00', '3', '5');
INSERT INTO `zol_goods_attr` VALUES ('211', '6.0英寸以上', '0.00', '4', '5');
INSERT INTO `zol_goods_attr` VALUES ('210', '2GB', '0.00', '6', '5');
INSERT INTO `zol_goods_attr` VALUES ('209', '1200万像素', '0.00', '8', '5');
INSERT INTO `zol_goods_attr` VALUES ('208', '960x640像素', '0.00', '9', '5');
INSERT INTO `zol_goods_attr` VALUES ('382', '红色', '0.00', '34', '9');
INSERT INTO `zol_goods_attr` VALUES ('381', '2000-4000元', '0.00', '33', '9');
INSERT INTO `zol_goods_attr` VALUES ('380', '酷睿i5', '600.00', '13', '8');
INSERT INTO `zol_goods_attr` VALUES ('379', '六代i5', '0.00', '13', '8');
INSERT INTO `zol_goods_attr` VALUES ('378', '4GB', '0.00', '15', '8');
INSERT INTO `zol_goods_attr` VALUES ('377', '8GB', '200.00', '15', '8');
INSERT INTO `zol_goods_attr` VALUES ('376', '16GB', '500.00', '15', '8');
INSERT INTO `zol_goods_attr` VALUES ('375', '500GB', '0.00', '16', '8');
INSERT INTO `zol_goods_attr` VALUES ('374', '1TB及以上', '600.00', '16', '8');
INSERT INTO `zol_goods_attr` VALUES ('373', '深空灰', '0.00', '18', '8');
INSERT INTO `zol_goods_attr` VALUES ('372', '太空银', '0.00', '18', '8');
INSERT INTO `zol_goods_attr` VALUES ('230', '4000元以上', '0.00', '1', '7');
INSERT INTO `zol_goods_attr` VALUES ('231', '超薄机身', '0.00', '2', '7');
INSERT INTO `zol_goods_attr` VALUES ('232', '全网通', '0.00', '3', '7');
INSERT INTO `zol_goods_attr` VALUES ('233', '5.1-5.5英寸', '0.00', '4', '7');
INSERT INTO `zol_goods_attr` VALUES ('234', '2GB', '0.00', '6', '7');
INSERT INTO `zol_goods_attr` VALUES ('235', '1200万像素', '0.00', '8', '7');
INSERT INTO `zol_goods_attr` VALUES ('236', '1920x1080像素', '0.00', '9', '7');
INSERT INTO `zol_goods_attr` VALUES ('237', '太空银', '0.00', '5', '7');
INSERT INTO `zol_goods_attr` VALUES ('238', '黑色', '200.00', '5', '7');
INSERT INTO `zol_goods_attr` VALUES ('239', '深空灰', '0.00', '5', '7');
INSERT INTO `zol_goods_attr` VALUES ('240', '玫瑰金', '100.00', '5', '7');
INSERT INTO `zol_goods_attr` VALUES ('241', '粉色', '100.00', '5', '7');
INSERT INTO `zol_goods_attr` VALUES ('242', '32GB', '0.00', '7', '7');
INSERT INTO `zol_goods_attr` VALUES ('243', '128GB', '300.00', '7', '7');
INSERT INTO `zol_goods_attr` VALUES ('371', '黑色', '0.00', '18', '8');
INSERT INTO `zol_goods_attr` VALUES ('370', '5000-5999元', '0.00', '10', '8');
INSERT INTO `zol_goods_attr` VALUES ('369', '商务办公本', '0.00', '11', '8');
INSERT INTO `zol_goods_attr` VALUES ('368', '13英寸', '0.00', '12', '8');
INSERT INTO `zol_goods_attr` VALUES ('367', '双显卡', '0.00', '14', '8');
INSERT INTO `zol_goods_attr` VALUES ('366', '普通屏（1366×768）', '0.00', '17', '8');
INSERT INTO `zol_goods_attr` VALUES ('383', '黑色', '0.00', '34', '9');
INSERT INTO `zol_goods_attr` VALUES ('384', '500元以下', '0.00', '39', '10');
INSERT INTO `zol_goods_attr` VALUES ('385', '蓝色', '0.00', '41', '10');
INSERT INTO `zol_goods_attr` VALUES ('386', '粉色', '0.00', '41', '10');
INSERT INTO `zol_goods_attr` VALUES ('387', '500-1000元', '0.00', '1', '11');
INSERT INTO `zol_goods_attr` VALUES ('388', '千元机', '0.00', '2', '11');
INSERT INTO `zol_goods_attr` VALUES ('389', '联通4G', '0.00', '3', '11');
INSERT INTO `zol_goods_attr` VALUES ('390', '4.5-4.9英寸', '0.00', '4', '11');
INSERT INTO `zol_goods_attr` VALUES ('391', '1GB', '0.00', '6', '11');
INSERT INTO `zol_goods_attr` VALUES ('392', '1400万像素', '0.00', '8', '11');
INSERT INTO `zol_goods_attr` VALUES ('393', '960x640像素', '0.00', '9', '11');
INSERT INTO `zol_goods_attr` VALUES ('394', '白色', '0.00', '5', '11');
INSERT INTO `zol_goods_attr` VALUES ('395', '深空灰', '0.00', '5', '11');
INSERT INTO `zol_goods_attr` VALUES ('396', '太空银', '0.00', '5', '11');
INSERT INTO `zol_goods_attr` VALUES ('397', '16GB', '0.00', '7', '11');
INSERT INTO `zol_goods_attr` VALUES ('398', '32GB', '400.00', '7', '11');
INSERT INTO `zol_goods_attr` VALUES ('399', '5000-10000元', '0.00', '19', '12');
INSERT INTO `zol_goods_attr` VALUES ('400', '微单', '0.00', '21', '12');
INSERT INTO `zol_goods_attr` VALUES ('401', '全画幅', '0.00', '22', '12');
INSERT INTO `zol_goods_attr` VALUES ('402', '1500-1800万', '0.00', '23', '12');
INSERT INTO `zol_goods_attr` VALUES ('403', '12-20倍', '0.00', '24', '12');
INSERT INTO `zol_goods_attr` VALUES ('404', '黑色', '0.00', '20', '12');
INSERT INTO `zol_goods_attr` VALUES ('405', '银白', '0.00', '20', '12');
INSERT INTO `zol_goods_attr` VALUES ('406', '白色', '0.00', '20', '12');
INSERT INTO `zol_goods_attr` VALUES ('412', '黑色', '0.00', '34', '13');
INSERT INTO `zol_goods_attr` VALUES ('411', '2000-4000元', '0.00', '33', '13');
INSERT INTO `zol_goods_attr` VALUES ('413', '400元以下', '0.00', '33', '14');
INSERT INTO `zol_goods_attr` VALUES ('414', '白色', '0.00', '34', '14');
INSERT INTO `zol_goods_attr` VALUES ('415', '4000元以上', '0.00', '1', '15');
INSERT INTO `zol_goods_attr` VALUES ('416', '指纹识别', '0.00', '2', '15');
INSERT INTO `zol_goods_attr` VALUES ('417', '全网通', '0.00', '3', '15');
INSERT INTO `zol_goods_attr` VALUES ('418', '5.1-5.5英寸', '0.00', '4', '15');
INSERT INTO `zol_goods_attr` VALUES ('419', '2GB', '0.00', '6', '15');
INSERT INTO `zol_goods_attr` VALUES ('420', '1200万像素', '0.00', '8', '15');
INSERT INTO `zol_goods_attr` VALUES ('421', '1920x1080像素', '0.00', '9', '15');
INSERT INTO `zol_goods_attr` VALUES ('422', '深空灰', '0.00', '5', '15');
INSERT INTO `zol_goods_attr` VALUES ('423', '太空银', '0.00', '5', '15');
INSERT INTO `zol_goods_attr` VALUES ('424', '玫瑰金', '200.00', '5', '15');
INSERT INTO `zol_goods_attr` VALUES ('425', '16GB', '0.00', '7', '15');
INSERT INTO `zol_goods_attr` VALUES ('426', '32GB', '200.00', '7', '15');
INSERT INTO `zol_goods_attr` VALUES ('427', '128GB', '500.00', '7', '15');
INSERT INTO `zol_goods_attr` VALUES ('445', '16GB', '0.00', '7', '16');
INSERT INTO `zol_goods_attr` VALUES ('444', '金色', '0.00', '5', '16');
INSERT INTO `zol_goods_attr` VALUES ('443', '1136x640像素', '0.00', '9', '16');
INSERT INTO `zol_goods_attr` VALUES ('442', '1600万像素', '0.00', '8', '16');
INSERT INTO `zol_goods_attr` VALUES ('441', '4GB', '0.00', '6', '16');
INSERT INTO `zol_goods_attr` VALUES ('440', '5.6-6.0英寸', '0.00', '4', '16');
INSERT INTO `zol_goods_attr` VALUES ('439', '全网通', '0.00', '3', '16');
INSERT INTO `zol_goods_attr` VALUES ('438', '双卡双待', '0.00', '2', '16');
INSERT INTO `zol_goods_attr` VALUES ('437', '2000-3000元', '0.00', '1', '16');
INSERT INTO `zol_goods_attr` VALUES ('467', '32GB', '0.00', '7', '17');
INSERT INTO `zol_goods_attr` VALUES ('466', '金色', '0.00', '5', '17');
INSERT INTO `zol_goods_attr` VALUES ('465', '黑色', '0.00', '5', '17');
INSERT INTO `zol_goods_attr` VALUES ('464', '深空灰', '0.00', '5', '17');
INSERT INTO `zol_goods_attr` VALUES ('463', '1280x720像素', '0.00', '9', '17');
INSERT INTO `zol_goods_attr` VALUES ('462', '1200万像素', '0.00', '8', '17');
INSERT INTO `zol_goods_attr` VALUES ('461', '4GB', '0.00', '6', '17');
INSERT INTO `zol_goods_attr` VALUES ('460', '5.1-5.5英寸', '0.00', '4', '17');
INSERT INTO `zol_goods_attr` VALUES ('459', '双4G', '0.00', '3', '17');
INSERT INTO `zol_goods_attr` VALUES ('458', '大容量电池', '0.00', '2', '17');
INSERT INTO `zol_goods_attr` VALUES ('457', '1500-2000元', '0.00', '1', '17');
INSERT INTO `zol_goods_attr` VALUES ('495', '500-1000元', '0.00', '1', '19');
INSERT INTO `zol_goods_attr` VALUES ('494', '64GB', '0.00', '7', '18');
INSERT INTO `zol_goods_attr` VALUES ('493', '32GB', '0.00', '7', '18');
INSERT INTO `zol_goods_attr` VALUES ('492', '太空银', '0.00', '5', '18');
INSERT INTO `zol_goods_attr` VALUES ('491', '粉色', '200.00', '5', '18');
INSERT INTO `zol_goods_attr` VALUES ('490', '深空灰', '0.00', '5', '18');
INSERT INTO `zol_goods_attr` VALUES ('489', '金色', '150.00', '5', '18');
INSERT INTO `zol_goods_attr` VALUES ('488', '1280x720像素', '0.00', '9', '18');
INSERT INTO `zol_goods_attr` VALUES ('487', '1100万像素', '0.00', '8', '18');
INSERT INTO `zol_goods_attr` VALUES ('486', '4GB', '0.00', '6', '18');
INSERT INTO `zol_goods_attr` VALUES ('485', '5.1-5.5英寸', '0.00', '4', '18');
INSERT INTO `zol_goods_attr` VALUES ('484', '联通4G', '0.00', '3', '18');
INSERT INTO `zol_goods_attr` VALUES ('483', '拍照神器', '0.00', '2', '18');
INSERT INTO `zol_goods_attr` VALUES ('482', '1500-2000元', '0.00', '1', '18');
INSERT INTO `zol_goods_attr` VALUES ('496', '千元机', '0.00', '2', '19');
INSERT INTO `zol_goods_attr` VALUES ('497', '电信4G', '0.00', '3', '19');
INSERT INTO `zol_goods_attr` VALUES ('498', '5.1-5.5英寸', '0.00', '4', '19');
INSERT INTO `zol_goods_attr` VALUES ('499', '1GB', '0.00', '6', '19');
INSERT INTO `zol_goods_attr` VALUES ('500', '800万像素', '0.00', '8', '19');
INSERT INTO `zol_goods_attr` VALUES ('501', '960x540像素', '0.00', '9', '19');
INSERT INTO `zol_goods_attr` VALUES ('502', '深空灰', '0.00', '5', '19');
INSERT INTO `zol_goods_attr` VALUES ('503', '太空银', '0.00', '5', '19');
INSERT INTO `zol_goods_attr` VALUES ('504', '8GB', '0.00', '7', '19');
INSERT INTO `zol_goods_attr` VALUES ('505', '16GB', '150.00', '7', '19');
INSERT INTO `zol_goods_attr` VALUES ('506', '2000-3000元', '0.00', '1', '20');
INSERT INTO `zol_goods_attr` VALUES ('507', '国产手机', '0.00', '2', '20');
INSERT INTO `zol_goods_attr` VALUES ('508', '全网通', '0.00', '3', '20');
INSERT INTO `zol_goods_attr` VALUES ('509', '5.1-5.5英寸', '0.00', '4', '20');
INSERT INTO `zol_goods_attr` VALUES ('510', '4GB', '0.00', '6', '20');
INSERT INTO `zol_goods_attr` VALUES ('511', '1400万像素', '0.00', '8', '20');
INSERT INTO `zol_goods_attr` VALUES ('512', '1280x720像素', '0.00', '9', '20');
INSERT INTO `zol_goods_attr` VALUES ('513', '太空银', '0.00', '5', '20');
INSERT INTO `zol_goods_attr` VALUES ('514', '精灵蓝', '0.00', '5', '20');
INSERT INTO `zol_goods_attr` VALUES ('515', '金色', '0.00', '5', '20');
INSERT INTO `zol_goods_attr` VALUES ('516', '32GB', '0.00', '7', '20');
INSERT INTO `zol_goods_attr` VALUES ('517', '64GB', '400.00', '7', '20');
INSERT INTO `zol_goods_attr` VALUES ('518', '2000-3000元', '0.00', '1', '21');
INSERT INTO `zol_goods_attr` VALUES ('519', '超薄机身', '0.00', '2', '21');
INSERT INTO `zol_goods_attr` VALUES ('520', '全网通', '0.00', '3', '21');
INSERT INTO `zol_goods_attr` VALUES ('521', '5.6-6.0英寸', '0.00', '4', '21');
INSERT INTO `zol_goods_attr` VALUES ('522', '4GB', '0.00', '6', '21');
INSERT INTO `zol_goods_attr` VALUES ('523', '1600万像素', '0.00', '8', '21');
INSERT INTO `zol_goods_attr` VALUES ('524', '1280x720像素', '0.00', '9', '21');
INSERT INTO `zol_goods_attr` VALUES ('525', '玫瑰金', '0.00', '5', '21');
INSERT INTO `zol_goods_attr` VALUES ('526', '金色', '100.00', '5', '21');
INSERT INTO `zol_goods_attr` VALUES ('527', '64GB', '0.00', '7', '21');
INSERT INTO `zol_goods_attr` VALUES ('545', '16GB', '0.00', '7', '22');
INSERT INTO `zol_goods_attr` VALUES ('544', '太空银', '0.00', '5', '22');
INSERT INTO `zol_goods_attr` VALUES ('543', '800x480像素', '0.00', '9', '22');
INSERT INTO `zol_goods_attr` VALUES ('542', '800万像素', '0.00', '8', '22');
INSERT INTO `zol_goods_attr` VALUES ('541', '3GB', '0.00', '6', '22');
INSERT INTO `zol_goods_attr` VALUES ('540', '5.1-5.5英寸', '0.00', '4', '22');
INSERT INTO `zol_goods_attr` VALUES ('539', '全网通', '0.00', '3', '22');
INSERT INTO `zol_goods_attr` VALUES ('538', '国产手机', '0.00', '2', '22');
INSERT INTO `zol_goods_attr` VALUES ('537', '1000-1500元', '0.00', '1', '22');
INSERT INTO `zol_goods_attr` VALUES ('546', '1500-2000元', '0.00', '1', '23');
INSERT INTO `zol_goods_attr` VALUES ('547', '2K屏', '0.00', '2', '23');
INSERT INTO `zol_goods_attr` VALUES ('548', '全网通', '0.00', '3', '23');
INSERT INTO `zol_goods_attr` VALUES ('549', '5.0英寸', '0.00', '4', '23');
INSERT INTO `zol_goods_attr` VALUES ('550', '4GB', '0.00', '6', '23');
INSERT INTO `zol_goods_attr` VALUES ('551', '1400万像素', '0.00', '8', '23');
INSERT INTO `zol_goods_attr` VALUES ('552', '1280x720像素', '0.00', '9', '23');
INSERT INTO `zol_goods_attr` VALUES ('553', '黑色', '0.00', '5', '23');
INSERT INTO `zol_goods_attr` VALUES ('554', '16GB', '0.00', '7', '23');
INSERT INTO `zol_goods_attr` VALUES ('555', '500-1000元', '0.00', '1', '24');
INSERT INTO `zol_goods_attr` VALUES ('556', '双卡双待', '0.00', '2', '24');
INSERT INTO `zol_goods_attr` VALUES ('557', '双4G', '0.00', '3', '24');
INSERT INTO `zol_goods_attr` VALUES ('558', '4.5-4.9英寸', '0.00', '4', '24');
INSERT INTO `zol_goods_attr` VALUES ('559', '1GB', '0.00', '6', '24');
INSERT INTO `zol_goods_attr` VALUES ('560', '800万像素', '0.00', '8', '24');
INSERT INTO `zol_goods_attr` VALUES ('561', '800x480像素', '0.00', '9', '24');
INSERT INTO `zol_goods_attr` VALUES ('562', '黑色', '0.00', '5', '24');
INSERT INTO `zol_goods_attr` VALUES ('563', '8GB', '0.00', '7', '24');
INSERT INTO `zol_goods_attr` VALUES ('564', '5000-5999元', '0.00', '10', '25');
INSERT INTO `zol_goods_attr` VALUES ('565', '游戏本', '0.00', '11', '25');
INSERT INTO `zol_goods_attr` VALUES ('566', '15英寸', '0.00', '12', '25');
INSERT INTO `zol_goods_attr` VALUES ('567', '性能级显卡', '0.00', '14', '25');
INSERT INTO `zol_goods_attr` VALUES ('568', '全高清屏（1920×1080）', '0.00', '17', '25');
INSERT INTO `zol_goods_attr` VALUES ('569', '六代i5', '0.00', '13', '25');
INSERT INTO `zol_goods_attr` VALUES ('570', '4GB', '0.00', '15', '25');
INSERT INTO `zol_goods_attr` VALUES ('571', '500GB', '0.00', '16', '25');
INSERT INTO `zol_goods_attr` VALUES ('572', '1TB及以上', '200.00', '16', '25');
INSERT INTO `zol_goods_attr` VALUES ('573', '黑色', '0.00', '18', '25');
INSERT INTO `zol_goods_attr` VALUES ('574', '深空灰', '0.00', '18', '25');
INSERT INTO `zol_goods_attr` VALUES ('614', '金色', '0.00', '18', '26');
INSERT INTO `zol_goods_attr` VALUES ('613', '太空银', '0.00', '18', '26');
INSERT INTO `zol_goods_attr` VALUES ('612', '含128GB SSD', '0.00', '16', '26');
INSERT INTO `zol_goods_attr` VALUES ('611', '4GB', '0.00', '15', '26');
INSERT INTO `zol_goods_attr` VALUES ('610', '五代i5', '0.00', '13', '26');
INSERT INTO `zol_goods_attr` VALUES ('609', '13.3英寸', '0.00', '12', '26');
INSERT INTO `zol_goods_attr` VALUES ('608', '超高清屏（4K/3K/2K）', '0.00', '17', '26');
INSERT INTO `zol_goods_attr` VALUES ('607', '性能级显卡', '0.00', '14', '26');
INSERT INTO `zol_goods_attr` VALUES ('606', '超极本', '0.00', '11', '26');
INSERT INTO `zol_goods_attr` VALUES ('605', '6000-7999元', '0.00', '10', '26');
INSERT INTO `zol_goods_attr` VALUES ('615', '3500-3999元', '0.00', '10', '27');
INSERT INTO `zol_goods_attr` VALUES ('616', '校园学生本', '0.00', '11', '27');
INSERT INTO `zol_goods_attr` VALUES ('617', '15英寸', '0.00', '12', '27');
INSERT INTO `zol_goods_attr` VALUES ('618', '入门级显卡', '0.00', '14', '27');
INSERT INTO `zol_goods_attr` VALUES ('619', '普通屏（1366×768）', '0.00', '17', '27');
INSERT INTO `zol_goods_attr` VALUES ('620', '五代i5', '0.00', '13', '27');
INSERT INTO `zol_goods_attr` VALUES ('621', '4GB', '0.00', '15', '27');
INSERT INTO `zol_goods_attr` VALUES ('622', '500GB', '0.00', '16', '27');
INSERT INTO `zol_goods_attr` VALUES ('623', '黑色', '0.00', '18', '27');
INSERT INTO `zol_goods_attr` VALUES ('624', '2500-3499元', '0.00', '10', '28');
INSERT INTO `zol_goods_attr` VALUES ('625', '影音娱乐本', '0.00', '11', '28');
INSERT INTO `zol_goods_attr` VALUES ('626', '14英寸', '0.00', '12', '28');
INSERT INTO `zol_goods_attr` VALUES ('627', '双显卡', '0.00', '14', '28');
INSERT INTO `zol_goods_attr` VALUES ('628', '普通屏（1366×768）', '0.00', '17', '28');
INSERT INTO `zol_goods_attr` VALUES ('629', '四代i5', '0.00', '13', '28');
INSERT INTO `zol_goods_attr` VALUES ('630', '4GB', '0.00', '15', '28');
INSERT INTO `zol_goods_attr` VALUES ('631', '500GB', '0.00', '16', '28');
INSERT INTO `zol_goods_attr` VALUES ('632', '黑色', '0.00', '18', '28');
INSERT INTO `zol_goods_attr` VALUES ('633', '白色', '0.00', '18', '28');
INSERT INTO `zol_goods_attr` VALUES ('634', '8000元以上', '0.00', '10', '29');
INSERT INTO `zol_goods_attr` VALUES ('635', '时尚轻薄本', '0.00', '11', '29');
INSERT INTO `zol_goods_attr` VALUES ('636', '13.3英寸', '0.00', '12', '29');
INSERT INTO `zol_goods_attr` VALUES ('637', '发烧级显卡', '0.00', '14', '29');
INSERT INTO `zol_goods_attr` VALUES ('638', '超高清屏（4K/3K/2K）', '0.00', '17', '29');
INSERT INTO `zol_goods_attr` VALUES ('639', '六代i7', '0.00', '13', '29');
INSERT INTO `zol_goods_attr` VALUES ('640', '8GB', '0.00', '15', '29');
INSERT INTO `zol_goods_attr` VALUES ('641', '含256GB SSD', '0.00', '16', '29');
INSERT INTO `zol_goods_attr` VALUES ('642', '黑色', '0.00', '18', '29');
INSERT INTO `zol_goods_attr` VALUES ('660', '黑色', '0.00', '18', '30');
INSERT INTO `zol_goods_attr` VALUES ('659', '500GB', '0.00', '16', '30');
INSERT INTO `zol_goods_attr` VALUES ('658', '4GB', '0.00', '15', '30');
INSERT INTO `zol_goods_attr` VALUES ('657', '四代i5', '0.00', '13', '30');
INSERT INTO `zol_goods_attr` VALUES ('656', '其它分辨率', '0.00', '17', '30');
INSERT INTO `zol_goods_attr` VALUES ('655', '集成显卡', '0.00', '14', '30');
INSERT INTO `zol_goods_attr` VALUES ('654', '15英寸', '0.00', '12', '30');
INSERT INTO `zol_goods_attr` VALUES ('653', 'IPS硬屏笔记本', '0.00', '11', '30');
INSERT INTO `zol_goods_attr` VALUES ('652', '5000-5999元', '0.00', '10', '30');
INSERT INTO `zol_goods_attr` VALUES ('661', '8000元以上', '0.00', '10', '31');
INSERT INTO `zol_goods_attr` VALUES ('662', '商务办公本', '0.00', '11', '31');
INSERT INTO `zol_goods_attr` VALUES ('663', '13.3英寸', '0.00', '12', '31');
INSERT INTO `zol_goods_attr` VALUES ('664', '性能级显卡', '0.00', '14', '31');
INSERT INTO `zol_goods_attr` VALUES ('665', '超高清屏（4K/3K/2K）', '0.00', '17', '31');
INSERT INTO `zol_goods_attr` VALUES ('666', '五代i5', '0.00', '13', '31');
INSERT INTO `zol_goods_attr` VALUES ('667', '8GB', '0.00', '15', '31');
INSERT INTO `zol_goods_attr` VALUES ('668', '含128GB SSD', '0.00', '16', '31');
INSERT INTO `zol_goods_attr` VALUES ('669', '太空银', '0.00', '18', '31');
INSERT INTO `zol_goods_attr` VALUES ('670', '5000-5999元', '0.00', '10', '32');
INSERT INTO `zol_goods_attr` VALUES ('671', 'IPS硬屏笔记本', '0.00', '11', '32');
INSERT INTO `zol_goods_attr` VALUES ('672', '13.3英寸', '0.00', '12', '32');
INSERT INTO `zol_goods_attr` VALUES ('673', '入门级显卡', '0.00', '14', '32');
INSERT INTO `zol_goods_attr` VALUES ('674', '普通屏（1366×768）', '0.00', '17', '32');
INSERT INTO `zol_goods_attr` VALUES ('675', '酷睿i7', '0.00', '13', '32');
INSERT INTO `zol_goods_attr` VALUES ('676', '8GB', '0.00', '15', '32');
INSERT INTO `zol_goods_attr` VALUES ('677', '含512GB SSD', '0.00', '16', '32');
INSERT INTO `zol_goods_attr` VALUES ('678', '太空银', '0.00', '18', '32');
INSERT INTO `zol_goods_attr` VALUES ('679', '6000-7999元', '0.00', '10', '33');
INSERT INTO `zol_goods_attr` VALUES ('680', '2合1电脑', '0.00', '11', '33');
INSERT INTO `zol_goods_attr` VALUES ('681', '12英寸', '0.00', '12', '33');
INSERT INTO `zol_goods_attr` VALUES ('682', '专业级图形显卡', '0.00', '14', '33');
INSERT INTO `zol_goods_attr` VALUES ('683', '其它分辨率', '0.00', '17', '33');
INSERT INTO `zol_goods_attr` VALUES ('684', '六代i5', '0.00', '13', '33');
INSERT INTO `zol_goods_attr` VALUES ('685', '8GB', '0.00', '15', '33');
INSERT INTO `zol_goods_attr` VALUES ('686', '含256GB SSD', '0.00', '16', '33');
INSERT INTO `zol_goods_attr` VALUES ('687', '太空银', '0.00', '18', '33');
INSERT INTO `zol_goods_attr` VALUES ('688', '10000元以上', '0.00', '19', '34');
INSERT INTO `zol_goods_attr` VALUES ('689', '高端', '0.00', '21', '34');
INSERT INTO `zol_goods_attr` VALUES ('690', '全画幅', '0.00', '22', '34');
INSERT INTO `zol_goods_attr` VALUES ('691', '2000-2400万', '0.00', '23', '34');
INSERT INTO `zol_goods_attr` VALUES ('692', '5倍以下', '0.00', '24', '34');
INSERT INTO `zol_goods_attr` VALUES ('693', '黑色', '0.00', '20', '34');
INSERT INTO `zol_goods_attr` VALUES ('694', '500元以下', '0.00', '39', '35');
INSERT INTO `zol_goods_attr` VALUES ('695', '蓝色', '0.00', '41', '35');
INSERT INTO `zol_goods_attr` VALUES ('696', '粉色', '0.00', '41', '35');
INSERT INTO `zol_goods_attr` VALUES ('697', '绿色', '0.00', '41', '35');
INSERT INTO `zol_goods_attr` VALUES ('698', '500元以下', '0.00', '39', '36');
INSERT INTO `zol_goods_attr` VALUES ('699', '白色', '0.00', '41', '36');
INSERT INTO `zol_goods_attr` VALUES ('700', '500元以下', '0.00', '39', '37');
INSERT INTO `zol_goods_attr` VALUES ('701', '白色', '0.00', '41', '37');
INSERT INTO `zol_goods_attr` VALUES ('702', '2000-3000元', '0.00', '39', '38');
INSERT INTO `zol_goods_attr` VALUES ('703', '黑色', '0.00', '41', '38');
INSERT INTO `zol_goods_attr` VALUES ('707', '白色', '0.00', '34', '39');
INSERT INTO `zol_goods_attr` VALUES ('706', '4000元以上', '0.00', '33', '39');
INSERT INTO `zol_goods_attr` VALUES ('708', '1000元-2000元', '0.00', '33', '40');
INSERT INTO `zol_goods_attr` VALUES ('709', '灰色', '0.00', '34', '40');
INSERT INTO `zol_goods_attr` VALUES ('710', '400元以下', '0.00', '33', '41');
INSERT INTO `zol_goods_attr` VALUES ('711', '黑色', '0.00', '34', '41');
INSERT INTO `zol_goods_attr` VALUES ('712', '600-1000元', '0.00', '33', '42');
INSERT INTO `zol_goods_attr` VALUES ('713', '灰色', '0.00', '34', '42');
INSERT INTO `zol_goods_attr` VALUES ('714', '600-1000元', '0.00', '33', '43');
INSERT INTO `zol_goods_attr` VALUES ('715', '黑色', '0.00', '34', '43');
INSERT INTO `zol_goods_attr` VALUES ('722', '红色', '0.00', '34', '44');
INSERT INTO `zol_goods_attr` VALUES ('721', '400元以下', '0.00', '33', '44');
INSERT INTO `zol_goods_attr` VALUES ('718', '400元以下', '0.00', '33', '45');
INSERT INTO `zol_goods_attr` VALUES ('719', '黑色', '0.00', '34', '45');

-- ----------------------------
-- Table structure for `zol_goods_details`
-- ----------------------------
DROP TABLE IF EXISTS `zol_goods_details`;
CREATE TABLE `zol_goods_details` (
  `gdid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品详情表ID',
  `gdimages` varchar(500) NOT NULL COMMENT '商品图册',
  `gdinfo` text NOT NULL COMMENT '商品详情',
  `gdservice` text NOT NULL COMMENT '售后服务',
  `zol_goods_gid` int(10) unsigned NOT NULL COMMENT '(商品ID)关联字段',
  PRIMARY KEY (`gdid`),
  KEY `fk_zol_goods_details_zol_goods1_idx` (`zol_goods_gid`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='商品详情表';

-- ----------------------------
-- Records of zol_goods_details
-- ----------------------------
INSERT INTO `zol_goods_details` VALUES ('1', 'Upload/Content/16/09/24561473342679.jpg,Upload/Content/16/09/47931473342665.jpg,Upload/Content/16/09/19071473342653.jpg,Upload/Content/16/09/7191473342629.jpg,Upload/Content/16/09/45791473342608.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192649622239.jpg\" alt=\"1473192649622239.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192680119916.jpg\" alt=\"1473192680119916.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192781542673.png\" alt=\"1473192781542673.png\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192817275102.jpg\" alt=\"1473192817275102.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192847419904.jpg\" alt=\"1473192847419904.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192876337326.jpg\" alt=\"1473192876337326.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192901744449.jpg\" alt=\"1473192901744449.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192925949539.jpg\" alt=\"1473192925949539.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192950134745.jpg\" alt=\"1473192950134745.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192983757875.jpg\" alt=\"1473192983757875.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193020123329.jpg\" alt=\"1473193020123329.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193048136285.jpg\" alt=\"1473193048136285.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193073282245.jpg\" alt=\"1473193073282245.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193103690789.jpg\" alt=\"1473193103690789.jpg\"/><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193138679041.jpg\" alt=\"1473193138679041.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193178107648.jpg\" alt=\"1473193178107648.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193206121220.jpg\" alt=\"1473193206121220.jpg\"/></p><p><br/></p>', '', '1');
INSERT INTO `zol_goods_details` VALUES ('2', 'Upload/Content/16/09/4511473344009.jpg,Upload/Content/16/09/88151473343991.jpg,Upload/Content/16/09/34091473343978.jpg,Upload/Content/16/09/71781473343961.jpg,Upload/Content/16/09/99441473343949.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473211470536821.png\" alt=\"1473211470536821.png\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473211550833998.png\" alt=\"1473211550833998.png\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473211642189382.png\" alt=\"1473211642189382.png\"/></p><p><br/></p>', '', '2');
INSERT INTO `zol_goods_details` VALUES ('3', 'Upload/Content/16/09/89081473347589.jpg,Upload/Content/16/09/28571473347578.jpg,Upload/Content/16/09/23641473347546.jpg,Upload/Content/16/09/9901473347535.jpg,Upload/Content/16/09/92441473347481.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473213420100203.jpg\" alt=\"1473213420100203.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473213447631276.jpg\" alt=\"1473213447631276.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473213475550806.jpg\" alt=\"1473213475550806.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473213517325965.jpg\" alt=\"1473213517325965.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473213545775561.png\" alt=\"1473213545775561.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473213582390986.png\" alt=\"1473213582390986.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473213628121388.png\" alt=\"1473213628121388.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473213668107286.png\" alt=\"1473213668107286.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473213699117377.png\" alt=\"1473213699117377.png\"/></p><p><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473213733119787.png\" style=\"\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473213785169932.png\" alt=\"1473213785169932.png\"/></p><p><br/></p><p><br/></p>', '', '3');
INSERT INTO `zol_goods_details` VALUES ('4', 'Upload/Content/16/09/96641473350516.jpg,Upload/Content/16/09/72001473350505.jpg,Upload/Content/16/09/53141473350493.jpg,Upload/Content/16/09/33101473350477.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473215076312023.gif\" alt=\"1473215076312023.gif\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473215288107971.png\" alt=\"1473215288107971.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473215404261332.png\" alt=\"1473215404261332.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473215448301523.png\" alt=\"1473215448301523.png\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473215480735800.jpg\" alt=\"1473215480735800.jpg\"/></p><p><br/></p>', '', '4');
INSERT INTO `zol_goods_details` VALUES ('5', 'Upload/Content/16/09/77891473351841.jpg,Upload/Content/16/09/65821473351794.jpg,Upload/Content/16/09/84301473351762.jpg,Upload/Content/16/09/29331473351728.jpg,Upload/Content/16/09/71641473351702.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473352481263913.png\" alt=\"1473352481263913.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473352520923892.png\" alt=\"1473352520923892.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473352573135201.png\" alt=\"1473352573135201.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473352618114404.png\" alt=\"1473352618114404.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473352686941535.png\" alt=\"1473352686941535.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473352732880344.png\" alt=\"1473352732880344.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473352798118083.png\" alt=\"1473352798118083.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473352875798454.png\" alt=\"1473352875798454.png\"/></p><p><br/></p><p><br/></p>', '', '5');
INSERT INTO `zol_goods_details` VALUES ('7', 'Upload/Content/16/09/78681473355478.png,Upload/Content/16/09/93331473355460.png,Upload/Content/16/09/29111473355458.png,Upload/Content/16/09/6961473355455.png,Upload/Content/16/09/3841473355452.png', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473355500913306.png\" alt=\"1473355500913306.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473355524869629.png\" alt=\"1473355524869629.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473355550124856.png\" alt=\"1473355550124856.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473355585115863.png\" alt=\"1473355585115863.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473355617134487.png\" alt=\"1473355617134487.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473355641827372.png\" alt=\"1473355641827372.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473355672436772.png\" alt=\"1473355672436772.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473355707590223.png\" alt=\"1473355707590223.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473355742836666.png\" alt=\"1473355742836666.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473355796118049.png\" alt=\"1473355796118049.png\"/></p><p><br/></p>', '', '7');
INSERT INTO `zol_goods_details` VALUES ('8', 'Upload/Content/16/09/13371473358653.png,Upload/Content/16/09/11711473358630.png,Upload/Content/16/09/10441473358615.png,Upload/Content/16/09/22851473358583.png,Upload/Content/16/09/50391473358570.png', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473356793368696.png\" alt=\"1473356793368696.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473356833576238.png\" alt=\"1473356833576238.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473356863266538.png\" alt=\"1473356863266538.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473356896186112.png\" alt=\"1473356896186112.png\"/></p><p><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473356929380788.png\" style=\"\"/><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473356960253371.png\" alt=\"1473356960253371.png\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473357006783178.png\" alt=\"1473357006783178.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473357033138764.png\" alt=\"1473357033138764.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473357134956209.png\" alt=\"1473357134956209.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473357103605026.png\" alt=\"1473357103605026.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473357065836107.png\" alt=\"1473357065836107.png\"/></p><p><br/></p>', '', '8');
INSERT INTO `zol_goods_details` VALUES ('9', 'Upload/Content/16/09/14521473360981.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473361007103835.jpg\" alt=\"1473361007103835.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473361063837011.jpg\" alt=\"1473361063837011.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473361095387458.jpg\" alt=\"1473361095387458.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473361143682914.jpg\" alt=\"1473361143682914.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473361273775733.jpg\" alt=\"1473361273775733.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473361361687863.jpg\" alt=\"1473361361687863.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473361392493961.jpg\" alt=\"1473361392493961.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473361428102604.jpg\" alt=\"1473361428102604.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473361466125867.jpg\" alt=\"1473361466125867.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473361499136092.jpg\" alt=\"1473361499136092.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473361548874793.jpg\" alt=\"1473361548874793.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473361587951561.jpg\" alt=\"1473361587951561.jpg\"/></p><p><br/></p>', '', '9');
INSERT INTO `zol_goods_details` VALUES ('10', 'Upload/Content/16/09/53271473362999.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473363018103857.jpg\" alt=\"1473363018103857.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473363063909476.jpg\" alt=\"1473363063909476.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473363098283579.jpg\" alt=\"1473363098283579.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473363160131767.jpg\" alt=\"1473363160131767.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473363198133454.jpg\" alt=\"1473363198133454.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473363248263139.jpg\" alt=\"1473363248263139.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473363281772162.jpg\" alt=\"1473363281772162.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473363317124039.jpg\" alt=\"1473363317124039.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473363362206939.jpg\" alt=\"1473363362206939.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473363405888735.jpg\" alt=\"1473363405888735.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473363444583123.jpg\" alt=\"1473363444583123.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473363484698965.jpg\" alt=\"1473363484698965.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473363519204013.jpg\" alt=\"1473363519204013.jpg\"/></p><p><br/></p>', '', '10');
INSERT INTO `zol_goods_details` VALUES ('11', 'Upload/Content/16/09/65511473364109.jpg,Upload/Content/16/09/84431473364075.jpg,Upload/Content/16/09/8881473364046.jpg,Upload/Content/16/09/92621473364015.jpg,Upload/Content/16/09/80741473363992.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192649622239.jpg\" alt=\"1473192649622239.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192680119916.jpg\" alt=\"1473192680119916.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192781542673.png\" alt=\"1473192781542673.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473364200540264.jpg\" alt=\"1473364200540264.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473364236774830.jpg\" alt=\"1473364236774830.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473364277435825.jpg\" alt=\"1473364277435825.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473364324123991.jpg\" alt=\"1473364324123991.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473364360903366.jpg\" alt=\"1473364360903366.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473364400913263.jpg\" alt=\"1473364400913263.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473364449492799.jpg\" alt=\"1473364449492799.jpg\"/></p><p><br/></p>', '', '11');
INSERT INTO `zol_goods_details` VALUES ('12', 'Upload/Content/16/09/88951473404280.jpg,Upload/Content/16/09/63611473404202.jpg,Upload/Content/16/09/59291473404174.jpg,Upload/Content/16/09/93371473404147.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473215076312023.gif\" alt=\"1473215076312023.gif\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473215288107971.png\" alt=\"1473215288107971.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473215404261332.png\" alt=\"1473215404261332.png\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473404384281858.jpg\" alt=\"1473404384281858.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473404476112545.jpg\" alt=\"1473404476112545.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473404510111546.jpg\" alt=\"1473404510111546.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473404543909519.jpg\" alt=\"1473404543909519.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473404578460741.jpg\" alt=\"1473404578460741.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473404634215417.jpg\" alt=\"1473404634215417.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473404679453253.jpg\" alt=\"1473404679453253.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473404722140533.jpg\" alt=\"1473404722140533.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473404758111981.jpg\" alt=\"1473404758111981.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473404800624262.jpg\" alt=\"1473404800624262.jpg\"/></p><p><br/></p>', '', '12');
INSERT INTO `zol_goods_details` VALUES ('13', 'Upload/Content/16/09/32071473420405.jpg,Upload/Content/16/09/76251473420330.jpg,Upload/Content/16/09/44231473420301.jpg,Upload/Content/16/09/27981473420272.jpg,Upload/Content/16/09/82151473420252.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473424685723966.png\" alt=\"1473424685723966.png\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473424735586738.png\" alt=\"1473424735586738.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473424786676115.png\" alt=\"1473424786676115.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473424846649521.png\" alt=\"1473424846649521.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473424903315853.png\" alt=\"1473424903315853.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473424962876299.png\" alt=\"1473424962876299.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473425020178280.png\" alt=\"1473425020178280.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473425069720352.png\" alt=\"1473425069720352.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473425120671683.png\" alt=\"1473425120671683.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473425175108642.png\" alt=\"1473425175108642.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473425219525547.png\" alt=\"1473425219525547.png\"/></p><p><img src=\"http://localhost/Upload/ueditor/image/20160909/1473421195998079.jpg\" style=\"white-space: normal; float: left;\"/></p>', '', '13');
INSERT INTO `zol_goods_details` VALUES ('14', 'Upload/Content/16/09/20671473425989.jpg,Upload/Content/16/09/83541473425960.jpg,Upload/Content/16/09/22271473425927.jpg,Upload/Content/16/09/15231473425896.jpg,Upload/Content/16/09/88701473425871.jpg', '<p style=\"text-align:center\"><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473426175109782.png\" alt=\"1473426175109782.png\"/></p><p style=\"text-align:center\"><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473426242107192.png\" alt=\"1473426242107192.png\"/></p><p style=\"text-align:center\"><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473426304140752.png\" alt=\"1473426304140752.png\"/></p><p style=\"text-align:center\"><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473426373704860.png\" alt=\"1473426373704860.png\"/></p><p style=\"text-align:center\"><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473426433557734.png\" alt=\"1473426433557734.png\"/></p><p style=\"text-align: center;\"><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473426753917136.png\" alt=\"1473426753917136.png\"/></p><p style=\"text-align: center;\"><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160909/1473426802578648.png\" alt=\"1473426802578648.png\" style=\"text-align: center; white-space: normal;\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473426891200399.png\" alt=\"1473426891200399.png\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473426936140731.png\" alt=\"1473426936140731.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473426979120510.jpg\" alt=\"1473426979120510.jpg\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160909/1473427121949065.jpg\" alt=\"1473427121949065.jpg\" style=\"white-space: normal;\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160909/1473427187357206.gif\" alt=\"1473427187357206.gif\" style=\"white-space: normal; width: 788px; height: 1596px;\" width=\"788\" height=\"1596\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473427267967913.jpg\" alt=\"1473427267967913.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473427314108496.jpg\" alt=\"1473427314108496.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160909/1473427356604983.jpg\" alt=\"1473427356604983.jpg\"/></p><p><br/></p>', '', '14');
INSERT INTO `zol_goods_details` VALUES ('15', 'Upload/Content/16/09/9811473486224.jpg,Upload/Content/16/09/1451473486192.jpg,Upload/Content/16/09/66831473486144.jpg,Upload/Content/16/09/43871473486086.jpg,Upload/Content/16/09/84301473485940.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473179421332291.jpg\" alt=\"1473179421332291.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473179421632222.jpg\" alt=\"1473179421632222.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473179421113272.jpg\" alt=\"1473179421113272.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473179421929615.jpg\" alt=\"1473179421929615.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473179421321490.jpg\" alt=\"1473179421321490.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473179421635837.jpg\" alt=\"1473179421635837.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473179421706280.jpg\" alt=\"1473179421706280.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473179421126642.jpg\" alt=\"1473179421126642.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473179421540177.jpg\" alt=\"1473179421540177.jpg\"/></p><p><br/></p><p><br/></p>', '', '15');
INSERT INTO `zol_goods_details` VALUES ('16', 'Upload/Content/16/09/17661473488205.jpg,Upload/Content/16/09/3471473488183.jpg,Upload/Content/16/09/88221473488155.jpg,Upload/Content/16/09/28261473488130.jpg,Upload/Content/16/09/57431473488074.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473488286135365.jpg\" alt=\"1473488286135365.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473488323177721.jpg\" alt=\"1473488323177721.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473488367122184.jpg\" alt=\"1473488367122184.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473488412549558.jpg\" alt=\"1473488412549558.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473488449955951.jpg\" alt=\"1473488449955951.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473488490129108.jpg\" alt=\"1473488490129108.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473488528293003.jpg\" alt=\"1473488528293003.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473488569974583.jpg\" alt=\"1473488569974583.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473488610199796.jpg\" alt=\"1473488610199796.jpg\"/></p><p><br/></p>', '', '16');
INSERT INTO `zol_goods_details` VALUES ('17', 'Upload/Content/16/09/67251473489955.jpg,Upload/Content/16/09/46471473489931.jpg,Upload/Content/16/09/12751473489906.png,Upload/Content/16/09/42631473489875.png,Upload/Content/16/09/99651473489850.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473188178798755.jpg\" alt=\"1473188178798755.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473188209717124.jpg\" alt=\"1473188209717124.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473188232119572.jpg\" alt=\"1473188232119572.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473490063951906.jpg\" alt=\"1473490063951906.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473490105173073.jpg\" alt=\"1473490105173073.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473490141968559.jpg\" alt=\"1473490141968559.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473490180101856.jpg\" alt=\"1473490180101856.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473490242545944.jpg\" alt=\"1473490242545944.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473490316110286.jpg\" alt=\"1473490316110286.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473490356123539.jpg\" alt=\"1473490356123539.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473490394268647.jpg\" alt=\"1473490394268647.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473490468229660.jpg\" alt=\"1473490468229660.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473490503333668.jpg\" alt=\"1473490503333668.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473490549456136.jpg\" alt=\"1473490549456136.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192817275102.jpg\" alt=\"1473192817275102.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192847419904.jpg\" alt=\"1473192847419904.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192876337326.jpg\" alt=\"1473192876337326.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192901744449.jpg\" alt=\"1473192901744449.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192925949539.jpg\" alt=\"1473192925949539.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192950134745.jpg\" alt=\"1473192950134745.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192983757875.jpg\" alt=\"1473192983757875.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193020123329.jpg\" alt=\"1473193020123329.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193048136285.jpg\" alt=\"1473193048136285.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193073282245.jpg\" alt=\"1473193073282245.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193103690789.jpg\" alt=\"1473193103690789.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193138679041.jpg\" alt=\"1473193138679041.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193178107648.jpg\" alt=\"1473193178107648.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473193206121220.jpg\" alt=\"1473193206121220.jpg\"/></p><p><br/></p>', '', '17');
INSERT INTO `zol_goods_details` VALUES ('18', 'Upload/Content/16/09/52641473492015.jpg,Upload/Content/16/09/29781473491951.jpg,Upload/Content/16/09/22571473491926.jpg,Upload/Content/16/09/27721473491895.jpg,Upload/Content/16/09/36351473491874.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473492125134788.jpg\" alt=\"1473492125134788.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473492189408672.jpg\" alt=\"1473492189408672.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473492233420420.jpg\" alt=\"1473492233420420.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473492273965762.jpg\" alt=\"1473492273965762.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473492317116362.jpg\" alt=\"1473492317116362.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473492356743890.jpg\" alt=\"1473492356743890.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473492401124766.jpg\" alt=\"1473492401124766.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473492446753916.jpg\" alt=\"1473492446753916.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473492497937318.jpg\" alt=\"1473492497937318.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473492538139754.jpg\" alt=\"1473492538139754.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473492578188780.jpg\" alt=\"1473492578188780.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473492630689197.jpg\" alt=\"1473492630689197.jpg\"/></p><p><br/></p>', '', '18');
INSERT INTO `zol_goods_details` VALUES ('19', 'Upload/Content/16/09/32751473494259.jpg,Upload/Content/16/09/28321473494225.jpg,Upload/Content/16/09/6001473494201.jpg,Upload/Content/16/09/96271473494141.jpg,Upload/Content/16/09/11931473494105.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473490105173073.jpg\" alt=\"1473490105173073.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473494354966622.jpg\" alt=\"1473494354966622.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473494563501191.jpg\" alt=\"1473494563501191.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473494624622583.jpg\" alt=\"1473494624622583.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473494684491681.jpg\" alt=\"1473494684491681.jpg\"/></p><p><br/></p>', '', '19');
INSERT INTO `zol_goods_details` VALUES ('20', 'Upload/Content/16/09/66111473495412.jpg,Upload/Content/16/09/43171473495380.jpg,Upload/Content/16/09/41381473495357.jpg,Upload/Content/16/09/56741473495329.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473495505134211.jpg\" alt=\"1473495505134211.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473495570105264.jpg\" alt=\"1473495570105264.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473495644538198.jpg\" alt=\"1473495644538198.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473495696414008.jpg\" alt=\"1473495696414008.jpg\"/></p><p><br/></p>', '', '20');
INSERT INTO `zol_goods_details` VALUES ('21', 'Upload/Content/16/09/75541473496812.jpg,Upload/Content/16/09/36651473496760.jpg,Upload/Content/16/09/8771473496730.jpg,Upload/Content/16/09/47471473496700.jpg,Upload/Content/16/09/99361473496668.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473495505134211.jpg\" alt=\"1473495505134211.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473496880483031.jpg\" alt=\"1473496880483031.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473496926979747.jpg\" alt=\"1473496926979747.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473496973103900.jpg\" alt=\"1473496973103900.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473497027124404.jpg\" alt=\"1473497027124404.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473497076313916.jpg\" alt=\"1473497076313916.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473497119989515.jpg\" alt=\"1473497119989515.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473497162140692.jpg\" alt=\"1473497162140692.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473497217160293.jpg\" alt=\"1473497217160293.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473497264569912.jpg\" alt=\"1473497264569912.jpg\"/></p><p><br/></p>', '', '21');
INSERT INTO `zol_goods_details` VALUES ('22', 'Upload/Content/16/09/26951473513002.jpg,Upload/Content/16/09/21951473512937.jpg,Upload/Content/16/09/31231473512909.jpg,Upload/Content/16/09/85761473512174.jpg,Upload/Content/16/09/74941473512035.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192615991323.jpg\" alt=\"1473192615991323.jpg\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160910/1473513406101387.png\" alt=\"1473513406101387.png\" style=\"white-space: normal;\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473513484381218.png\" alt=\"1473513484381218.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473513541113027.png\" alt=\"1473513541113027.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473513596491121.png\" alt=\"1473513596491121.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473513698176860.png\" alt=\"1473513698176860.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473513756707055.png\" alt=\"1473513756707055.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473513827668283.png\" alt=\"1473513827668283.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473513884853363.png\" alt=\"1473513884853363.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473513935526235.png\" alt=\"1473513935526235.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473513995877504.png\" alt=\"1473513995877504.png\"/></p><p><br/></p><p><br/></p>', '', '22');
INSERT INTO `zol_goods_details` VALUES ('23', 'Upload/Content/16/09/8641473514935.jpg,Upload/Content/16/09/72201473514877.jpg,Upload/Content/16/09/93721473514855.jpg,Upload/Content/16/09/9121473514832.jpg,Upload/Content/16/09/97481473514808.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192615991323.jpg\" alt=\"1473192615991323.jpg\"/></p><p><br/></p>', '', '23');
INSERT INTO `zol_goods_details` VALUES ('24', 'Upload/Content/16/09/40041473515298.jpg,Upload/Content/16/09/12021473515273.jpg,Upload/Content/16/09/52441473515254.jpg,Upload/Content/16/09/68191473515232.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473192615991323.jpg\" alt=\"1473192615991323.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473515326506484.jpg\" alt=\"1473515326506484.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473515396106112.jpg\" alt=\"1473515396106112.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473515434719921.jpg\" alt=\"1473515434719921.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473515479907712.jpg\" alt=\"1473515479907712.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473515522947731.jpg\" alt=\"1473515522947731.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473515560686615.jpg\" alt=\"1473515560686615.jpg\"/></p><p><br/></p>', '', '24');
INSERT INTO `zol_goods_details` VALUES ('25', 'Upload/Content/16/09/62561473516474.jpg,Upload/Content/16/09/32901473516450.jpg,Upload/Content/16/09/88131473516429.jpg,Upload/Content/16/09/76561473516400.jpg,Upload/Content/16/09/73911473516378.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473211470536821.png\" alt=\"1473211470536821.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473211550833998.png\" alt=\"1473211550833998.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473516671137774.png\" alt=\"1473516671137774.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473516730526278.jpg\" alt=\"1473516730526278.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473516776822939.jpg\" alt=\"1473516776822939.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473516824514272.jpg\" alt=\"1473516824514272.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473516868125915.jpg\" alt=\"1473516868125915.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473516908517155.jpg\" alt=\"1473516908517155.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473516955313572.jpg\" alt=\"1473516955313572.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473517004983749.jpg\" alt=\"1473517004983749.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473517046255608.jpg\" alt=\"1473517046255608.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473517092250014.jpg\" alt=\"1473517092250014.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473517132816011.jpg\" alt=\"1473517132816011.jpg\"/></p><p><br/></p>', '', '25');
INSERT INTO `zol_goods_details` VALUES ('26', 'Upload/Content/16/09/16341473522702.jpg,Upload/Content/16/09/40041473522547.jpg,Upload/Content/16/09/8491473522524.jpg,Upload/Content/16/09/8591473522500.jpg,Upload/Content/16/09/11931473522482.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473211470536821.png\" alt=\"1473211470536821.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473211550833998.png\" alt=\"1473211550833998.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473516671137774.png\" alt=\"1473516671137774.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473522853103689.jpg\" alt=\"1473522853103689.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473522897112678.jpg\" alt=\"1473522897112678.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473522941128264.jpg\" alt=\"1473522941128264.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473522997748322.jpg\" alt=\"1473522997748322.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473523044532001.jpg\" alt=\"1473523044532001.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473523080330699.jpg\" alt=\"1473523080330699.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473523125138532.jpg\" alt=\"1473523125138532.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160910/1473523186756283.jpg\" alt=\"1473523186756283.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473523220118698.jpg\" alt=\"1473523220118698.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473523258115165.jpg\" alt=\"1473523258115165.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473523301358454.jpg\" alt=\"1473523301358454.jpg\"/></p><p><br/></p>', '', '26');
INSERT INTO `zol_goods_details` VALUES ('27', 'Upload/Content/16/09/41391473527487.jpg,Upload/Content/16/09/33501473527477.jpg,Upload/Content/16/09/80871473527469.jpg,Upload/Content/16/09/76501473527359.jpg,Upload/Content/16/09/49311473527328.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473525418125162.jpg\" alt=\"1473525418125162.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473525465795829.jpg\" alt=\"1473525465795829.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473525680236889.jpg\" alt=\"1473525680236889.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473525890469476.png\" alt=\"1473525890469476.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473525823465862.gif\" alt=\"1473525823465862.gif\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473525999675125.png\" alt=\"1473525999675125.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473526046677750.gif\" alt=\"1473526046677750.gif\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473526186264645.jpg\" alt=\"1473526186264645.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473526270962620.gif\" alt=\"1473526270962620.gif\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473526386103564.png\" alt=\"1473526386103564.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473526444126513.gif\" alt=\"1473526444126513.gif\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473526647110729.png\" alt=\"1473526647110729.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473526693127481.gif\" alt=\"1473526693127481.gif\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473526757390341.gif\" alt=\"1473526757390341.gif\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473526815396279.jpg\" alt=\"1473526815396279.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473526862203669.jpg\" alt=\"1473526862203669.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473526921103289.jpg\" alt=\"1473526921103289.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473526971370374.jpg\" alt=\"1473526971370374.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473528300738855.jpg\" alt=\"1473528300738855.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473528338962491.jpg\" alt=\"1473528338962491.jpg\"/></p><p><br/></p>', '', '27');
INSERT INTO `zol_goods_details` VALUES ('28', 'Upload/Content/16/09/58071473529836.png,Upload/Content/16/09/60501473529697.png,Upload/Content/16/09/79111473529671.png,Upload/Content/16/09/45631473529651.png', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473529853664238.png\" alt=\"1473529853664238.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473529898111284.png\" alt=\"1473529898111284.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473529946830943.png\" alt=\"1473529946830943.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473529990106460.png\" alt=\"1473529990106460.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473530028894716.png\" alt=\"1473530028894716.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473530071203325.png\" alt=\"1473530071203325.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473530148985642.png\" alt=\"1473530148985642.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473530193842777.png\" alt=\"1473530193842777.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473530243623874.jpg\" alt=\"1473530243623874.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473530294115454.jpg\" alt=\"1473530294115454.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473530344624950.jpg\" alt=\"1473530344624950.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473530391759424.jpg\" alt=\"1473530391759424.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473530452671209.jpg\" alt=\"1473530452671209.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473530517106791.jpg\" alt=\"1473530517106791.jpg\"/></p><p><br/></p>', '', '28');
INSERT INTO `zol_goods_details` VALUES ('29', 'Upload/Content/16/09/50571473531687.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473531920982544.png\" alt=\"1473531920982544.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473532099222603.png\" alt=\"1473532099222603.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473532223706237.png\" alt=\"1473532223706237.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473532291918083.png\" alt=\"1473532291918083.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473532385299372.png\" alt=\"1473532385299372.png\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473532454802973.png\" alt=\"1473532454802973.png\"/></p><p><br/></p>', '', '29');
INSERT INTO `zol_goods_details` VALUES ('30', 'Upload/Content/16/09/25051473534794.png,Upload/Content/16/09/73021473534763.png,Upload/Content/16/09/69201473534746.png,Upload/Content/16/09/3221473534712.png', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473533721191706.jpg\" alt=\"1473533721191706.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473533784729603.jpg\" alt=\"1473533784729603.jpg\" style=\"width: 790px; height: 1626px;\" width=\"790\" height=\"1626\"/><br/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473533871858699.jpg\" alt=\"1473533871858699.jpg\" style=\"white-space: normal; width: 791px; height: 1592px;\" width=\"791\" height=\"1592\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473534130638677.jpg\" alt=\"1473534130638677.jpg\" style=\"width: 792px; height: 2220px; float: left;\" width=\"792\" height=\"2220\"/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473534271396666.jpg\" alt=\"1473534271396666.jpg\"/></p><p><br/></p>', '', '30');
INSERT INTO `zol_goods_details` VALUES ('31', 'Upload/Content/16/09/73691473535556.png,Upload/Content/16/09/66761473535506.png,Upload/Content/16/09/76421473535499.png,Upload/Content/16/09/29661473535429.png', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473190156928367.jpg\" alt=\"1473190156928367.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473190246112201.jpg\" alt=\"1473190246112201.jpg\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160907/1473190366218042.jpg\" style=\"white-space: normal;\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160907/1473190403911628.jpg\" style=\"white-space: normal;\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160907/1473190429122081.jpg\" style=\"white-space: normal;\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160907/1473190457101318.jpg\" style=\"white-space: normal;\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160907/1473190492633470.jpg\" style=\"white-space: normal;\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160907/1473190519945537.jpg\" style=\"white-space: normal;\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160907/1473190546104240.jpg\" style=\"white-space: normal;\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160907/1473190591370718.jpg\" style=\"\"/></p><p><br/></p>', '', '31');
INSERT INTO `zol_goods_details` VALUES ('32', 'Upload/Content/16/09/81941473538126.png,Upload/Content/16/09/34021473538099.png,Upload/Content/16/09/77871473538070.png,Upload/Content/16/09/51901473538039.png,Upload/Content/16/09/90841473538014.png', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473538157690617.jpg\" alt=\"1473538157690617.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473538225168684.jpg\" alt=\"1473538225168684.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473538299139138.jpg\" alt=\"1473538299139138.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473538358886626.jpg\" alt=\"1473538358886626.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473538405525891.jpg\" alt=\"1473538405525891.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473538576783135.jpg\" alt=\"1473538576783135.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473538470102462.jpg\" alt=\"1473538470102462.jpg\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473538628727409.jpg\" alt=\"1473538628727409.jpg\" style=\"white-space: normal;\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473538686673748.jpg\" alt=\"1473538686673748.jpg\" style=\"white-space: normal;\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473538867414094.jpg\" alt=\"1473538867414094.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473538962462591.jpg\" alt=\"1473538962462591.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473539013118122.jpg\" alt=\"1473539013118122.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473539073775217.jpg\" alt=\"1473539073775217.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473539160950787.jpg\" alt=\"1473539160950787.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473539210230521.jpg\" alt=\"1473539210230521.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473539268136350.jpg\" alt=\"1473539268136350.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473539326679686.jpg\" alt=\"1473539326679686.jpg\"/></p><p><br/></p>', '', '32');
INSERT INTO `zol_goods_details` VALUES ('33', 'Upload/Content/16/09/6451473579187.png,Upload/Content/16/09/84611473579148.png,Upload/Content/16/09/13531473579122.png,Upload/Content/16/09/90551473579097.png,Upload/Content/16/09/52741473579068.png', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473579222837914.jpg\" alt=\"1473579222837914.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473579287926259.jpg\" alt=\"1473579287926259.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473579348115729.jpg\" alt=\"1473579348115729.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473579426466421.jpg\" alt=\"1473579426466421.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473579490625725.gif\" alt=\"1473579490625725.gif\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473579564578863.jpg\" alt=\"1473579564578863.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473579622585017.jpg\" alt=\"1473579622585017.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473579685314691.jpg\" alt=\"1473579685314691.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473579747101253.gif\" alt=\"1473579747101253.gif\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473579801148373.jpg\" alt=\"1473579801148373.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473579904579164.jpg\" alt=\"1473579904579164.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473579960877418.gif\" alt=\"1473579960877418.gif\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473580023817130.jpg\" alt=\"1473580023817130.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473580090228972.jpg\" alt=\"1473580090228972.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473580160845058.jpg\" alt=\"1473580160845058.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473580236230779.jpg\" alt=\"1473580236230779.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473580308277985.jpg\" alt=\"1473580308277985.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473580385107635.jpg\" alt=\"1473580385107635.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473580445892479.jpg\" alt=\"1473580445892479.jpg\"/></p><p><br/></p>', '', '33');
INSERT INTO `zol_goods_details` VALUES ('34', 'Upload/Content/16/09/25401473584495.jpg,Upload/Content/16/09/44461473584466.jpg,Upload/Content/16/09/97781473584444.jpg,Upload/Content/16/09/64101473584420.jpg,Upload/Content/16/09/38951473584401.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473531782247432.png\" alt=\"1473531782247432.png\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473532099222603.png\" style=\"white-space: normal;\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473532291918083.png\" style=\"white-space: normal;\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473532385299372.png\" style=\"white-space: normal;\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473532454802973.png\" style=\"\"/></p><p><br/></p><p><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473532223706237.png\" style=\"\"/></p><p><br/></p>', '', '34');
INSERT INTO `zol_goods_details` VALUES ('35', 'Upload/Content/16/09/59561473586746.png,Upload/Content/16/09/65591473586732.jpg,Upload/Content/16/09/66061473586718.jpg,Upload/Content/16/09/87691473586703.jpg', '<p><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473532039210640.png\" alt=\"1473532039210640.png\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473532099222603.png\" style=\"white-space: normal;\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473532223706237.png\" alt=\"1473532223706237.png\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473532291918083.png\" style=\"white-space: normal;\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473532385299372.png\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473532454802973.png\" style=\"white-space: normal;\"/></p>', '', '35');
INSERT INTO `zol_goods_details` VALUES ('36', 'Upload/Content/16/09/75361473587711.jpg,Upload/Content/16/09/59151473587679.jpg,Upload/Content/16/09/32761473587650.jpg,Upload/Content/16/09/44891473587625.jpg,Upload/Content/16/09/50801473587596.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473587727432684.jpg\" alt=\"1473587727432684.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473587788746601.jpg\" alt=\"1473587788746601.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473587843139577.jpg\" alt=\"1473587843139577.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473587902120118.jpg\" alt=\"1473587902120118.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473587956950916.jpg\" alt=\"1473587956950916.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473588020827070.jpg\" alt=\"1473588020827070.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473588082904700.jpg\" alt=\"1473588082904700.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473588128618797.jpg\" alt=\"1473588128618797.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473588189123707.jpg\" alt=\"1473588189123707.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473588233295413.jpg\" alt=\"1473588233295413.jpg\"/></p><p><br/></p>', '', '36');
INSERT INTO `zol_goods_details` VALUES ('37', 'Upload/Content/16/09/71141473590007.jpg,Upload/Content/16/09/37221473589976.jpg,Upload/Content/16/09/31241473589949.jpg,Upload/Content/16/09/89551473589913.jpg,Upload/Content/16/09/65761473589868.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590034121341.jpg\" alt=\"1473590034121341.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590093883657.jpg\" alt=\"1473590093883657.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590157209865.jpg\" alt=\"1473590157209865.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590206920880.jpg\" alt=\"1473590206920880.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590262115243.jpg\" alt=\"1473590262115243.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590320103181.jpg\" alt=\"1473590320103181.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590371879483.jpg\" alt=\"1473590371879483.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590489157883.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473590508279319.jpg\" style=\"white-space: normal;\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590473619614.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590458125140.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590438124357.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590419190200.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590565123617.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473590548647929.jpg\" style=\"\"/></p>', '', '37');
INSERT INTO `zol_goods_details` VALUES ('38', 'Upload/Content/16/09/89561473593111.jpg,Upload/Content/16/09/34521473593067.jpg,Upload/Content/16/09/68591473593047.jpg,Upload/Content/16/09/96781473593014.jpg,Upload/Content/16/09/10171473592989.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473593179353376.jpg\" alt=\"1473593179353376.jpg\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473593306778789.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473593328457169.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473593360308365.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473593415103190.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473593415213523.jpg\" style=\"\"/></p>', '', '38');
INSERT INTO `zol_goods_details` VALUES ('39', 'Upload/Content/16/09/15911473597549.jpg,Upload/Content/16/09/12361473597532.jpg', '<p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473597822625983.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473597823119460.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473597823116435.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473597823914726.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473597823495726.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473597823119413.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473597823167264.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473597823104296.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473597823122270.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473597823250832.jpg\" style=\"\"/></p><p><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473598781122601.jpg\" alt=\"1473598781122601.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473598851762523.jpg\" alt=\"1473598851762523.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473598968994249.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473598968134439.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473598968115307.gif\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473599293599217.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473599293597797.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473598968137744.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473598968447186.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473599293439741.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473599293216794.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473599746126341.jpg\" alt=\"1473599746126341.jpg\"/><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473599837934822.jpg\" alt=\"1473599837934822.jpg\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473599293624175.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473599293150783.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473599293709249.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473599980562382.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473600010978499.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473598968585533.gif\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473600010924021.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473599293366458.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473599293389781.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473598968109713.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473599293138592.jpg\" style=\"\"/></p><p><br/></p><p><br/></p><p><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473599293493918.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473600168126724.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473600275519780.jpg\" alt=\"1473600275519780.jpg\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473600275748753.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473600275668972.jpg\" style=\"\"/></p>', '', '39');
INSERT INTO `zol_goods_details` VALUES ('40', 'Upload/Content/16/09/59381473601056.jpg', '<p><br/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473601083467755.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473601122137581.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473601122966967.jpg\" style=\"\"/></p>', '', '40');
INSERT INTO `zol_goods_details` VALUES ('41', 'Upload/Content/16/09/60481473601741.jpg,Upload/Content/16/09/67751473601716.jpg,Upload/Content/16/09/13681473601680.jpg,Upload/Content/16/09/98451473601632.jpg,Upload/Content/16/09/25541473601603.jpg', '<p><br/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473602009108612.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473602009849490.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473602009603348.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473602009455921.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473602009331559.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473602009134095.jpg\" style=\"\"/></p><p><br/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473602009168469.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473602009133015.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473602009134676.jpg\" style=\"\"/></p><p><br/></p><p><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473602009114326.jpg\" style=\"\"/></p><p><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473602076938049.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473602010311980.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473602076131668.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473602076107798.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473602424985815.jpg\" alt=\"1473602424985815.jpg\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473602077621895.jpg\" style=\"\"/></p>', '', '41');
INSERT INTO `zol_goods_details` VALUES ('42', 'Upload/Content/16/09/97461473603444.jpg', '<p><br/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473603696668713.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473603696137439.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473603696108818.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473603696117347.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473603696181465.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473603696114430.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473603696375882.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473603697109558.jpg\" style=\"\"/></p><p><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473603697124886.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473603697652232.jpg\" style=\"\"/></p>', '', '42');
INSERT INTO `zol_goods_details` VALUES ('43', 'Upload/Content/16/09/29461473604566.jpg,Upload/Content/16/09/5711473604532.jpg,Upload/Content/16/09/81891473604500.jpg,Upload/Content/16/09/12921473604460.jpg,Upload/Content/16/09/77431473604419.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473604713131440.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473604713452436.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473604713375065.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473604713712907.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473604713736704.jpg\" style=\"\"/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p>', '', '43');
INSERT INTO `zol_goods_details` VALUES ('44', 'Upload/Content/16/09/39561473605776.jpg,Upload/Content/16/09/47791473605720.jpg,Upload/Content/16/09/77091473605680.jpg,Upload/Content/16/09/64261473605642.jpg,Upload/Content/16/09/17511473605613.jpg', '<p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473605958133833.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473605958611954.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473604713375065.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473604713712907.jpg\" style=\"\"/></p><p><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473604713736704.jpg\" style=\"\"/></p>', '', '44');
INSERT INTO `zol_goods_details` VALUES ('45', 'Upload/Content/16/09/71081473606604.jpg,Upload/Content/16/09/3281473606588.jpg,Upload/Content/16/09/55651473606559.jpg,Upload/Content/16/09/2131473606531.jpg', '<p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473606873753142.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473606873943988.jpg\" style=\"\"/></p><p><br/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473606873316843.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473607045595861.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473607045797723.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473604713375065.jpg\" style=\"\"/></p><p><img src=\"http://127.0.0.1/myProject/Publi/Upload/ueditor/image/20160911/1473604713712907.jpg\" style=\"\"/></p><p><img src=\"http://localhost/myProject/Publi/Upload/ueditor/image/20160911/1473604713736704.jpg\" style=\"\"/></p>', '', '45');

-- ----------------------------
-- Table structure for `zol_goods_list`
-- ----------------------------
DROP TABLE IF EXISTS `zol_goods_list`;
CREATE TABLE `zol_goods_list` (
  `glid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '货品表ID',
  `combineid` char(100) NOT NULL DEFAULT '' COMMENT '组合ID',
  `glnumber` char(12) NOT NULL DEFAULT '' COMMENT '货号',
  `gltotal` smallint(6) NOT NULL DEFAULT '0' COMMENT '库存',
  `zol_goods_gid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '(商品ID)关联字段',
  PRIMARY KEY (`glid`),
  KEY `fk_zol_goods_list_zol_goods1_idx` (`zol_goods_gid`)
) ENGINE=MyISAM AUTO_INCREMENT=177 DEFAULT CHARSET=utf8 COMMENT='货品列表';

-- ----------------------------
-- Records of zol_goods_list
-- ----------------------------
INSERT INTO `zol_goods_list` VALUES ('1', '8,11', '293838382920', '220', '1');
INSERT INTO `zol_goods_list` VALUES ('2', '9,11', '293838382921', '200', '1');
INSERT INTO `zol_goods_list` VALUES ('3', '10,11', '293838382922', '80', '1');
INSERT INTO `zol_goods_list` VALUES ('4', '8,12', '293838382923', '100', '1');
INSERT INTO `zol_goods_list` VALUES ('5', '9,12', '293838382924', '60', '1');
INSERT INTO `zol_goods_list` VALUES ('6', '10,12', '293838382925', '100', '1');
INSERT INTO `zol_goods_list` VALUES ('7', '17,20,21,23', '876458675320', '120', '2');
INSERT INTO `zol_goods_list` VALUES ('8', '17,20,22,24', '876458675321', '145', '2');
INSERT INTO `zol_goods_list` VALUES ('9', '18,20,21,25', '876458675322', '89', '2');
INSERT INTO `zol_goods_list` VALUES ('10', '18,19,21,24', '876458675323', '300', '2');
INSERT INTO `zol_goods_list` VALUES ('55', '218,216', '287653890710', '235', '5');
INSERT INTO `zol_goods_list` VALUES ('35', '95,92', '356768346782', '129', '3');
INSERT INTO `zol_goods_list` VALUES ('34', '97,94', '356768346781', '111', '3');
INSERT INTO `zol_goods_list` VALUES ('33', '96,93', '356768346780', '121', '3');
INSERT INTO `zol_goods_list` VALUES ('41', '120', '579768462981', '322', '4');
INSERT INTO `zol_goods_list` VALUES ('40', '121', '579768462980', '121', '4');
INSERT INTO `zol_goods_list` VALUES ('56', '217,215', '287653890711', '320', '5');
INSERT INTO `zol_goods_list` VALUES ('94', '379,377,375,372', '189765436712', '242', '8');
INSERT INTO `zol_goods_list` VALUES ('59', '237,242', '189765389650', '323', '7');
INSERT INTO `zol_goods_list` VALUES ('60', '238,242', '189765389651', '455', '7');
INSERT INTO `zol_goods_list` VALUES ('61', '239,242', '189765389652', '434', '7');
INSERT INTO `zol_goods_list` VALUES ('62', '240,242', '189765389653', '545', '7');
INSERT INTO `zol_goods_list` VALUES ('63', '241,242', '189765389654', '343', '7');
INSERT INTO `zol_goods_list` VALUES ('64', '237,243', '189765389655', '347', '7');
INSERT INTO `zol_goods_list` VALUES ('65', '238,243', '189765389656', '128', '7');
INSERT INTO `zol_goods_list` VALUES ('66', '240,243', '189765389657', '356', '7');
INSERT INTO `zol_goods_list` VALUES ('67', '241,243', '189765389658', '436', '7');
INSERT INTO `zol_goods_list` VALUES ('92', '380,378,375,373', '189765436710', '211', '8');
INSERT INTO `zol_goods_list` VALUES ('98', '385', '456876236470', '212', '10');
INSERT INTO `zol_goods_list` VALUES ('93', '380,377,375,371', '189765436711', '122', '8');
INSERT INTO `zol_goods_list` VALUES ('95', '379,377,374,373', '189765436713', '111', '8');
INSERT INTO `zol_goods_list` VALUES ('96', '382', '765345129860', '322', '9');
INSERT INTO `zol_goods_list` VALUES ('97', '383', '765345129861', '145', '9');
INSERT INTO `zol_goods_list` VALUES ('99', '386', '456876236471', '231', '10');
INSERT INTO `zol_goods_list` VALUES ('100', '394,397', '257638768900', '312', '11');
INSERT INTO `zol_goods_list` VALUES ('101', '395,397', '257638768901', '122', '11');
INSERT INTO `zol_goods_list` VALUES ('102', '396,397', '257638768902', '111', '11');
INSERT INTO `zol_goods_list` VALUES ('103', '395,398', '257638768903', '45', '11');
INSERT INTO `zol_goods_list` VALUES ('104', '396,398', '257638768904', '67', '11');
INSERT INTO `zol_goods_list` VALUES ('105', '404', '456458675320', '455', '12');
INSERT INTO `zol_goods_list` VALUES ('106', '405', '456458675321', '234', '12');
INSERT INTO `zol_goods_list` VALUES ('107', '406', '456458675322', '122', '12');
INSERT INTO `zol_goods_list` VALUES ('110', '412', '786543567890', '345', '13');
INSERT INTO `zol_goods_list` VALUES ('111', '414', '267528367970', '234', '14');
INSERT INTO `zol_goods_list` VALUES ('112', '422,425', '287654233450', '305', '15');
INSERT INTO `zol_goods_list` VALUES ('113', '422,426', '287654233451', '235', '15');
INSERT INTO `zol_goods_list` VALUES ('114', '423,425', '287654233452', '125', '15');
INSERT INTO `zol_goods_list` VALUES ('115', '423,426', '287654233453', '234', '15');
INSERT INTO `zol_goods_list` VALUES ('116', '423,427', '287654233454', '234', '15');
INSERT INTO `zol_goods_list` VALUES ('117', '424,426', '287654233455', '232', '15');
INSERT INTO `zol_goods_list` VALUES ('118', '424,427', '287654233456', '245', '15');
INSERT INTO `zol_goods_list` VALUES ('121', '445,444', '345785612570', '342', '16');
INSERT INTO `zol_goods_list` VALUES ('127', '464,467', '267546367892', '231', '17');
INSERT INTO `zol_goods_list` VALUES ('126', '465,467', '267546367891', '113', '17');
INSERT INTO `zol_goods_list` VALUES ('125', '466,467', '267546367890', '121', '17');
INSERT INTO `zol_goods_list` VALUES ('128', '493,492', '278654367890', '234', '18');
INSERT INTO `zol_goods_list` VALUES ('129', '494,491', '278654367891', '124', '18');
INSERT INTO `zol_goods_list` VALUES ('130', '493,490', '278654367892', '236', '18');
INSERT INTO `zol_goods_list` VALUES ('131', '494,489', '278654367893', '235', '18');
INSERT INTO `zol_goods_list` VALUES ('132', '502,504', '278653897630', '355', '19');
INSERT INTO `zol_goods_list` VALUES ('133', '503,505', '278653897631', '434', '19');
INSERT INTO `zol_goods_list` VALUES ('134', '513,516', '267538976150', '346', '20');
INSERT INTO `zol_goods_list` VALUES ('135', '514,517', '267538976151', '333', '20');
INSERT INTO `zol_goods_list` VALUES ('136', '515,516', '267538976152', '244', '20');
INSERT INTO `zol_goods_list` VALUES ('137', '513,517', '267538976153', '236', '20');
INSERT INTO `zol_goods_list` VALUES ('138', '525,527', '278653789020', '346', '21');
INSERT INTO `zol_goods_list` VALUES ('139', '526,527', '278653789021', '258', '21');
INSERT INTO `zol_goods_list` VALUES ('140', '545,544', '145678456780', '2323', '22');
INSERT INTO `zol_goods_list` VALUES ('141', '553,554', '345789347800', '232', '23');
INSERT INTO `zol_goods_list` VALUES ('142', '562,563', '235678234670', '234', '24');
INSERT INTO `zol_goods_list` VALUES ('143', '569,570,571,573', '123654789210', '353', '25');
INSERT INTO `zol_goods_list` VALUES ('144', '569,570,572,574', '123654789211', '231', '25');
INSERT INTO `zol_goods_list` VALUES ('151', '614,612,611,610', '234567345270', '235', '26');
INSERT INTO `zol_goods_list` VALUES ('152', '613,612,611,610', '234567345271', '124', '26');
INSERT INTO `zol_goods_list` VALUES ('153', '620,621,622,623', '135476589130', '345', '27');
INSERT INTO `zol_goods_list` VALUES ('154', '629,630,631,632', '876536278910', '235', '28');
INSERT INTO `zol_goods_list` VALUES ('155', '629,630,631,633', '876536278911', '124', '28');
INSERT INTO `zol_goods_list` VALUES ('156', '639,640,641,642', '125478645720', '235', '29');
INSERT INTO `zol_goods_list` VALUES ('158', '660,659,658,657', '345783485810', '457', '30');
INSERT INTO `zol_goods_list` VALUES ('159', '666,667,668,669', '543214675420', '432', '31');
INSERT INTO `zol_goods_list` VALUES ('160', '675,676,677,678', '324567891050', '235', '32');
INSERT INTO `zol_goods_list` VALUES ('161', '684,685,686,687', '378545678210', '323', '33');
INSERT INTO `zol_goods_list` VALUES ('162', '693', '123657923470', '212', '34');
INSERT INTO `zol_goods_list` VALUES ('163', '695', '234678943910', '231', '35');
INSERT INTO `zol_goods_list` VALUES ('164', '696', '234678943911', '111', '35');
INSERT INTO `zol_goods_list` VALUES ('165', '697', '234678943912', '135', '35');
INSERT INTO `zol_goods_list` VALUES ('166', '699', '287654897610', '123', '36');
INSERT INTO `zol_goods_list` VALUES ('167', '701', '234765892170', '238', '37');
INSERT INTO `zol_goods_list` VALUES ('168', '703', '234765489240', '243', '38');
INSERT INTO `zol_goods_list` VALUES ('169', '707', '234657869450', '434', '39');
INSERT INTO `zol_goods_list` VALUES ('170', '709', '235657834680', '321', '40');
INSERT INTO `zol_goods_list` VALUES ('171', '711', '344674788922', '432', '41');
INSERT INTO `zol_goods_list` VALUES ('172', '713', '673246467520', '678', '42');
INSERT INTO `zol_goods_list` VALUES ('173', '715', '345677765432', '321', '43');
INSERT INTO `zol_goods_list` VALUES ('176', '722', '289675456550', '345', '44');
INSERT INTO `zol_goods_list` VALUES ('175', '719', '256435879320', '343', '45');

-- ----------------------------
-- Table structure for `zol_receipt_address`
-- ----------------------------
DROP TABLE IF EXISTS `zol_receipt_address`;
CREATE TABLE `zol_receipt_address` (
  `cuaid` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '收货地址表ID',
  `rname` char(20) NOT NULL DEFAULT '' COMMENT '收货人',
  `rmail` char(32) NOT NULL DEFAULT '' COMMENT '收货人邮箱',
  `radeaddress` char(120) NOT NULL DEFAULT '' COMMENT '详细地址',
  `raddress` char(200) NOT NULL DEFAULT '' COMMENT '收货人地址',
  `rcall` char(11) NOT NULL DEFAULT '' COMMENT '手机',
  `rtell` char(12) NOT NULL DEFAULT '' COMMENT '固定电话',
  `zol_customer_cuid` tinyint(3) unsigned NOT NULL COMMENT '(用户ID)关联字段',
  PRIMARY KEY (`cuaid`),
  KEY `fk_zol_receipt _address_zol_customer1_idx` (`zol_customer_cuid`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=utf8 COMMENT='收货地址表';

-- ----------------------------
-- Records of zol_receipt_address
-- ----------------------------
INSERT INTO `zol_receipt_address` VALUES ('135', 'QWERTY', '', '是对方过后', '北京市北京东城区', '12134567543', '23456789765', '3');
INSERT INTO `zol_receipt_address` VALUES ('126', '李凡', '636649', '北京市朝阳区', '北京市北京东城区', '13910733512', '02888645736', '4');
INSERT INTO `zol_receipt_address` VALUES ('125', '李杰', '539951', '朝阳区来广营北路150号', '北京市北京东城区', '13910733521', '1234567', '4');
INSERT INTO `zol_receipt_address` VALUES ('124', '王宇', '636648', '北京市朝阳区', '北京市北京东城区', '15284960837', '8622000', '4');
INSERT INTO `zol_receipt_address` VALUES ('136', 'dfgdf', '', 'vfdb dc', '北京市北京东城区', '13643434343', '08273232322', '5');
INSERT INTO `zol_receipt_address` VALUES ('137', '小李', '', '回龙观', '北京市北京昌平区', '13618102625', '', '6');
INSERT INTO `zol_receipt_address` VALUES ('138', '阿三', '', '东大街', '北京市北京东城区', '13618102625', '', '1');

-- ----------------------------
-- Table structure for `zol_type`
-- ----------------------------
DROP TABLE IF EXISTS `zol_type`;
CREATE TABLE `zol_type` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '类型表ID',
  `tname` char(20) NOT NULL DEFAULT '' COMMENT '类型名称',
  `tsort` smallint(5) unsigned NOT NULL DEFAULT '100' COMMENT '类型排序',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='类型表';

-- ----------------------------
-- Records of zol_type
-- ----------------------------
INSERT INTO `zol_type` VALUES ('1', '手机通讯', '100');
INSERT INTO `zol_type` VALUES ('2', '电脑笔记本', '90');
INSERT INTO `zol_type` VALUES ('3', '摄影摄像', '80');
INSERT INTO `zol_type` VALUES ('4', '游戏电玩', '70');
INSERT INTO `zol_type` VALUES ('5', '硬件设备', '60');
INSERT INTO `zol_type` VALUES ('6', '智能生活', '50');
INSERT INTO `zol_type` VALUES ('7', '家用办公', '40');
INSERT INTO `zol_type` VALUES ('8', '生活电器', '30');

-- ----------------------------
-- Table structure for `zol_type_attr`
-- ----------------------------
DROP TABLE IF EXISTS `zol_type_attr`;
CREATE TABLE `zol_type_attr` (
  `taid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '类型属性表ID',
  `taname` varchar(60) NOT NULL DEFAULT '' COMMENT '属性名称',
  `tavalue` char(210) NOT NULL DEFAULT '' COMMENT '属性值',
  `tatype` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '属性的类型(0表示属性，1表示规格)',
  `zol_type_tid` int(10) unsigned NOT NULL COMMENT '(类型ID)关联字段',
  PRIMARY KEY (`taid`),
  KEY `fk_zol_type_attr_zol_type1_idx` (`zol_type_tid`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COMMENT='类型属性表';

-- ----------------------------
-- Records of zol_type_attr
-- ----------------------------
INSERT INTO `zol_type_attr` VALUES ('1', '价格', '500元以下,500-1000元,1000-1500元,1500-2000元,2000-3000元,3000-4000元,4000元以上', '0', '1');
INSERT INTO `zol_type_attr` VALUES ('2', '特性', '大屏幕,双卡双待,大容量电池,指纹识别,拍照神器,自拍神器,2K屏,超薄机身,千元机,VoLTE,Type-C口,国产手机,老人机', '0', '1');
INSERT INTO `zol_type_attr` VALUES ('3', '网络类型', '全网通,双4G,移动4G,联通4G,电信4G,移动3G,电信3G,联通3G', '0', '1');
INSERT INTO `zol_type_attr` VALUES ('4', '主屏尺寸', '6.0英寸以上,5.6-6.0英寸,5.1-5.5英寸,5.0英寸,4.5-4.9英寸,4.0-4.4英寸,4.0英寸以下', '0', '1');
INSERT INTO `zol_type_attr` VALUES ('5', '颜色类别', '白色,黑色,深空灰,太空银,玫瑰金,精灵蓝,粉色,金色', '1', '1');
INSERT INTO `zol_type_attr` VALUES ('6', 'RAM容量', '1GB,2GB,3GB,4GB,6GB,8GB', '0', '1');
INSERT INTO `zol_type_attr` VALUES ('7', '存储容量', '4GB,6GB,8GB,16GB,32GB,64GB,128GB', '1', '1');
INSERT INTO `zol_type_attr` VALUES ('8', '摄像头像素', '500万像素,800万像素,1100万像素,1200万像素,1400万像素,1600万像素,1800万像素,2000万像素以上', '0', '1');
INSERT INTO `zol_type_attr` VALUES ('9', '主屏分辨率', '640x480像素,800x480像素,854x458像素,960x540像素,960x640像素,1136x640像素,1280x720像素,1920x1080像素', '0', '1');
INSERT INTO `zol_type_attr` VALUES ('10', '价格', '2499元以下,2500-3499元,3500-3999元,4000-4999元,5000-5999元,6000-7999元,8000元以上', '0', '2');
INSERT INTO `zol_type_attr` VALUES ('11', '产品定位', '游戏本,2合1电脑,超极本,时尚轻薄本,商务办公本,影音娱乐本,校园学生本,IPS硬屏笔记本', '0', '2');
INSERT INTO `zol_type_attr` VALUES ('12', '屏幕尺寸', '17英寸及以上,15英寸,14英寸,13.3英寸,12英寸,11英寸及以下', '0', '2');
INSERT INTO `zol_type_attr` VALUES ('13', 'CPU系列', '酷睿i7,六代i7,五代i7,四代i7,酷睿i5,六代i5,五代i5,四代i5,酷睿i3,六代i3,五代i3,四代i3,酷睿M,其它Intel处理器,AMD APU,其它AMD处理器', '1', '2');
INSERT INTO `zol_type_attr` VALUES ('14', '显卡类型', '发烧级显卡,性能级显卡,入门级显卡,专业级图形显卡,双显卡,集成显卡', '0', '2');
INSERT INTO `zol_type_attr` VALUES ('15', '内存容量', '32GB及以上,16GB,8GB,4GB,2GB', '1', '2');
INSERT INTO `zol_type_attr` VALUES ('16', '硬盘容量', '1TB及以上,500GB,含512GB SSD,含256GB SSD,含128GB SSD,其它硬盘容量', '1', '2');
INSERT INTO `zol_type_attr` VALUES ('17', '屏幕分辨率', '超高清屏（4K/3K/2K）,全高清屏（1920×1080）,普通屏（1366×768）,其它分辨率', '0', '2');
INSERT INTO `zol_type_attr` VALUES ('18', '颜色类别', '白色,黑色,深空灰,太空银,玫瑰金,红色,蓝色,金色', '1', '2');
INSERT INTO `zol_type_attr` VALUES ('19', '价格', '1000元以下,1000-2000元,2000-3000元,3000-5000元,5000-10000元,10000元以上', '0', '3');
INSERT INTO `zol_type_attr` VALUES ('20', '颜色类别', '白色,黑色,灰色,银白,紫色', '1', '3');
INSERT INTO `zol_type_attr` VALUES ('21', '产品类型', '单反,入门,中端,高端,微单,单电,消费,卡片,长焦,广角,专业,三防', '0', '3');
INSERT INTO `zol_type_attr` VALUES ('22', '传感器尺寸', '全画幅,APS画幅,中画幅,1英寸,4/3画幅,1/2.3英寸,1/1.7英寸,其它尺寸', '0', '3');
INSERT INTO `zol_type_attr` VALUES ('23', '有效像素', '3600万以上,2400-3600万,2000-2400万,1800-2000万,1500-1800万,1500万以下', '0', '3');
INSERT INTO `zol_type_attr` VALUES ('24', '光学变焦', '40倍以上,20-40倍,12-20倍,5-12倍,5倍以下,定焦', '0', '3');
INSERT INTO `zol_type_attr` VALUES ('25', '颜色类别', '白色,黑色,深空灰,太空银,红色,蓝色', '1', '4');
INSERT INTO `zol_type_attr` VALUES ('26', '价格', '2499元以下,2500-3499元,3500-3999元,4000-4999元,5000-5999元,6000-7999元,8000元以上', '0', '4');
INSERT INTO `zol_type_attr` VALUES ('27', '屏幕尺寸', '17英寸及以上,15英寸,14英寸,13英寸,12英寸', '0', '4');
INSERT INTO `zol_type_attr` VALUES ('28', 'CPU系列', '酷睿i7,六代i7,五代i7,四代i7,酷睿i5,六代i5,五代i5,四代i5,酷睿i3,六代i3,五代i3,四代i3,酷睿M,其它Intel处理器,AMD APU,其它AMD处理器', '1', '4');
INSERT INTO `zol_type_attr` VALUES ('29', '显卡类型', '发烧级显卡,性能级显卡,入门级显卡,专业级图形显卡,双显卡,集成显卡', '0', '4');
INSERT INTO `zol_type_attr` VALUES ('30', '内存容量', '32GB及以上,16GB,8GB,4GB,2GB', '1', '4');
INSERT INTO `zol_type_attr` VALUES ('31', '硬盘容量', '1TB及以上,500GB,含512GB SSD,含256GB SSD,含128GB SSD,其它硬盘容量', '1', '4');
INSERT INTO `zol_type_attr` VALUES ('32', '屏幕分辨率', '超高清屏（4K/3K/2K）,全高清屏（1920×1080）,普通屏（1366×768）,其它分辨', '0', '4');
INSERT INTO `zol_type_attr` VALUES ('33', '价格', '400元以下,400-600元,600-1000元,1000元-2000元,2000-4000元,4000元以上', '0', '5');
INSERT INTO `zol_type_attr` VALUES ('34', '颜色类别', '白色,灰色,黑色,红色,蓝色,粉色', '1', '5');
INSERT INTO `zol_type_attr` VALUES ('35', '适合人群', '儿童,青少年,成年人', '1', '6');
INSERT INTO `zol_type_attr` VALUES ('36', '价格', '500元以下,500-1000元,1000-1500元,1500-2000元,2000-3000元3,000-4000元,4000元以上', '0', '6');
INSERT INTO `zol_type_attr` VALUES ('37', '价格', '1000元以下,1000-2000元,2000-3000元,3000-5000元,5000-10000元,10000元以上', '0', '7');
INSERT INTO `zol_type_attr` VALUES ('38', '颜色类别', '白色,黑色,灰色,红色,绿色', '0', '7');
INSERT INTO `zol_type_attr` VALUES ('39', '价格', '500元以下,500-1000元,1000-1500元,1500-2000元,2000-3000元,3000-4000元,4000元以上', '0', '8');
INSERT INTO `zol_type_attr` VALUES ('40', '颜色', '黑色,白色,灰色,粉色,蓝色,银色', '1', '6');
INSERT INTO `zol_type_attr` VALUES ('41', '颜色类型', '白色,黑色,蓝色,粉色,红色,绿色,黄色', '1', '8');

-- ----------------------------
-- Table structure for `zol_user`
-- ----------------------------
DROP TABLE IF EXISTS `zol_user`;
CREATE TABLE `zol_user` (
  `uid` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员表ID',
  `usernumber` char(20) NOT NULL DEFAULT '' COMMENT '用户账号',
  `username` char(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(128) NOT NULL DEFAULT '' COMMENT '用户密码',
  `ontime` char(30) NOT NULL DEFAULT '' COMMENT '登录时间',
  `uip` char(32) NOT NULL DEFAULT '' COMMENT '登录IP',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of zol_user
-- ----------------------------
INSERT INTO `zol_user` VALUES ('1', 'admin', '小杨', 'bbad8d72c1fac1d081727158807a8798', '', '');
