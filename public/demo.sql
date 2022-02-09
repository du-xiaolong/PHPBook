/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-05-15 20:46:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `book`
-- ----------------------------
DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '书名',
  `sort` int(5) DEFAULT '0' COMMENT '排序',
  `status` int(11) DEFAULT '1' COMMENT '状态 1正常 2屏蔽',
  `author` varchar(50) DEFAULT NULL COMMENT '作者',
  `user` varchar(50) DEFAULT NULL COMMENT '添加用户',
  `clicks` int(11) DEFAULT '0' COMMENT '点击量',
  `created_at` datetime DEFAULT NULL COMMENT '创建时间',
  `updated_at` datetime DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book
-- ----------------------------
INSERT INTO `book` VALUES ('1', '挪威的森林', '1', '1', '村上春树', 'weisiren', '62', '2017-04-23 13:54:20', '2017-04-23 13:54:20');
INSERT INTO `book` VALUES ('2', '三生三世十里桃花', '2', '1', '唐七公子', 'weisiren', '0', '2017-04-23 13:54:20', '2017-04-23 13:54:20');
INSERT INTO `book` VALUES ('4', '从你的全世界路过', '4', '1', '张嘉佳', 'weisiren', '35', '2017-04-23 13:54:20', '2017-04-23 13:54:20');
INSERT INTO `book` VALUES ('5', '解忧杂货铺', '5', '1', '东野圭吾', 'weisiren', '35', '2017-04-23 13:54:20', '2017-04-23 13:54:20');
INSERT INTO `book` VALUES ('7', '乖，摸摸头', '7', '1', '大冰', 'weisiren', '5', '2017-04-23 13:54:20', '2017-04-23 13:54:20');
INSERT INTO `book` VALUES ('8', '小王子', '8', '1', '安托万·德·圣·埃克苏佩里', 'weisiren', '2', '2017-04-23 13:54:20', '2017-04-23 13:54:20');
INSERT INTO `book` VALUES ('9', '古文观止', '9', '1', '吴楚材、吴调侯', 'weisiren', '2', '2017-04-23 13:54:20', '2017-04-23 13:54:20');
INSERT INTO `book` VALUES ('10', '朦胧诗', '10', '1', '佚名', 'weisiren', '0', '2017-04-23 13:54:20', '2017-04-23 13:54:20');
INSERT INTO `book` VALUES ('11', '把时间当做朋友', '11', '1', '李笑来', 'weisiren', '9', '2017-04-23 13:54:20', '2017-04-23 13:54:20');
INSERT INTO `book` VALUES ('12', '白夜行', '12', '1', '东野圭吾', 'weisiren', '7', '2017-04-23 13:54:20', '2017-04-23 13:54:20');
INSERT INTO `book` VALUES ('13', '薄伽梵歌', '13', '2', '佚名', 'weisiren', '0', '2017-04-23 13:54:20', '2017-04-23 13:54:20');

-- ----------------------------
-- Table structure for `digest`
-- ----------------------------
DROP TABLE IF EXISTS `digest`;
CREATE TABLE `digest` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `bookid` int(11) DEFAULT NULL COMMENT '所属书目ID',
  `content` text COMMENT '书摘内容',
  `status` int(11) DEFAULT '1' COMMENT '状态 1正常 2屏蔽',
  `created_at` datetime DEFAULT NULL COMMENT '创建时间',
  `updated_at` datetime DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of digest
-- ----------------------------
INSERT INTO `digest` VALUES ('1', '1', '很久以前，当我还年轻、记忆还清晰的时候，我就有过几次写一下直子的念头，却连一行也未能写成。虽然我明白只要写出第一行，往下就会文思泉涌，但就是死活写不出那第一行。一切都清晰得历历如昨的时候，反而不知从何处着手，就像一张十分详尽的地图，有时反倒因其过于详尽而派不上用场。但我现在明白了：归根结蒂，我想，文章这种不完整的容器所能容纳的，只能是不完整的记忆和不完整的意念。', '1', '2017-04-30 23:03:39', '2017-04-30 23:03:39');
INSERT INTO `digest` VALUES ('2', '1', '她所希求的并非是我的臂，而是某人的臂，她所希求的并非是我的体温，而是某人的体温。而我只能是我，于是我觉得有些愧疚。', '1', '2017-04-30 23:09:26', '2017-04-30 23:09:26');
INSERT INTO `digest` VALUES ('3', '1', '绿子把万宝路叼在嘴上，“我所害怕的，是这种方式的死。就是说，死的阴影一步一步侵入生命的领地，等察觉到的时候，已经黑乎乎的什么也看不见了。那样子，连周围人都觉得我与其说是生者，倒不如说是死者。我讨厌的就是这个，这是我绝对忍受不了的。”', '1', '2017-04-30 23:18:56', '2017-04-30 23:18:56');
INSERT INTO `digest` VALUES ('4', '1', '那是一个温柔而安稳的吻，一个不知其归宿的吻。', '1', '2017-04-30 23:20:34', '2017-04-30 23:20:34');
INSERT INTO `digest` VALUES ('5', '1', '一如往日的校园午休光景。然而在隔了许久后重新观望这光景的时间里，我蓦然注意到一个事实：每个人无不显得很幸福。至于他们是真的幸福还是仅仅表面看上去如此，就无从得知了。但无论如何，在九月间这个令人心神荡漾的下午，每个人看来都自得其乐，而我则因此而感到了平时所没有感到过的孤寂，觉得惟独我自己与这光景格格不入。', '1', '2017-04-30 23:27:41', '2017-04-30 23:29:32');
INSERT INTO `digest` VALUES ('6', '1', '\"不要同情自己！\"他说，\"同情自己是卑劣懦夫干的勾当。\"', '1', '2017-05-03 11:09:03', '2017-05-03 11:09:54');
INSERT INTO `digest` VALUES ('7', '1', '我在窗帘拉得严严实实的屋子里狠狠地诅咒春天，诅咒春天给我带来的创伤——它使我心灵深处隐隐作痛。', '1', '2017-05-03 11:12:02', '2017-05-03 11:12:02');
INSERT INTO `digest` VALUES ('8', '1', '对于只身独处的人来说，四月实在是不胜凄寂的时节。四月里，周围的人无不显得满面春风。人们脱去外套，在明媚的阳光下或聊天，或练习棒球，或卿卿我我。我却孑然一身，形影相吊。智子也好，绿子也好，永泽也好，所有人都远远离我而去。现在的我，连问一声“早安”或“你好”的人都没有。', '1', '2017-05-03 11:47:53', '2017-05-03 11:47:53');
INSERT INTO `digest` VALUES ('9', '1', '我情不自禁的吻她。周围走过的人无不直盯盯地看着我们，但我已不再顾忌，我们是在活着，我们必须考虑的事只能是如何活下去。', '1', '2017-05-03 12:07:54', '2017-05-03 12:10:06');
INSERT INTO `digest` VALUES ('10', '1', '我现在哪里？我不知道这里是哪里，全然摸不着头脑。这里究竟是哪里？目力所及，无不是不知走去哪里的无数男男女女。', '1', '2017-05-03 12:09:26', '2017-05-03 12:10:10');
