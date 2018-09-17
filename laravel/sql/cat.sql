/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : cat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-09-02 23:48:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cat`
-- ----------------------------
DROP TABLE IF EXISTS `cat`;
CREATE TABLE `cat` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '兼职ID',
  `user_id` int(10) DEFAULT NULL COMMENT '公司ID',
  `cat_title` varchar(10) DEFAULT NULL COMMENT '兼职标题',
  `cat_number` int(3) DEFAULT NULL COMMENT '兼职人数',
  `cat_cycle` int(1) DEFAULT '2' COMMENT '结算周期1完工结算2日结3周结4月结',
  `cat_pay` int(5) DEFAULT NULL COMMENT '0：工资，1：提成 ，2：工资+提成',
  `cat_type` varchar(255) DEFAULT 'type qt' COMMENT '兼职招聘',
  `cat_jobtime` int(1) DEFAULT NULL COMMENT '工作时间\r\n1能工作一个月以上\r\n2能工作两个月以上\r\n3能工作三个月以上\r\n4能工作四个月以上\r\n5能工作五个月以上\r\n6能工作六个月以上',
  `cat_per` int(1) DEFAULT NULL COMMENT '每周至少1一天2两天3三天4四天5五天6六天7七天',
  `cat_sex` int(1) DEFAULT NULL COMMENT '性别要求1男2女3男女不限',
  `cat_welfare` varchar(16) DEFAULT NULL COMMENT '工作福利1吃  2住   3免费补贴   4 提成  5免费培训',
  `cat_detail` text COMMENT '兼职描述',
  `cat_email` varchar(20) DEFAULT NULL COMMENT '兼职联系邮箱',
  `cat_person` text COMMENT '联系人',
  `cat_phone` int(11) DEFAULT NULL COMMENT '联系电话',
  `cat_province` varchar(10) DEFAULT NULL COMMENT '兼职所在省',
  `cat_city` varchar(10) DEFAULT NULL COMMENT '兼职所在市',
  `cat_area` varchar(10) DEFAULT NULL COMMENT '兼职所在区',
  `cat_address` varchar(10) DEFAULT NULL COMMENT '兼职详细地址',
  `cat_appllication` varchar(10) DEFAULT NULL COMMENT '报名方式1默认使用兼职猫报名2提供短信报名3提供电话报名4都可以',
  `category_id` int(10) DEFAULT '19' COMMENT '兼职类型id',
  `cat_addtime` varchar(255) DEFAULT NULL COMMENT '兼职发布时间',
  `created_at` int(11) DEFAULT NULL COMMENT '自动维护',
  `updated_at` int(11) DEFAULT NULL COMMENT '自动维护',
  `cat_browse` int(11) DEFAULT NULL COMMENT '兼职文章浏览量',
  `money_style` int(10) DEFAULT '2' COMMENT '1:元/小时  2:元/天  3:元/月   4:元/次   5元/单',
  `job_money` int(10) unsigned DEFAULT NULL,
  `job_category` int(10) DEFAULT '1' COMMENT '1:长招  2：短招  3：实习',
  `cat_status` int(10) DEFAULT '0' COMMENT '申请认证 0:未认证 1：已审核',
  `cat_num` int(11) DEFAULT '1' COMMENT '点击数量',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cat
-- ----------------------------
INSERT INTO `cat` VALUES ('1', '1', '招聘其他', '4', '1', '0', 'type qt', null, null, null, null, '1、负责网站的日常业务运营管理，稳住和提升相关数据、优化工作；\r\n2、阳光的心态，抗压能力强，团队合作强；\r\n3、收集、整理、分析数据。\r\n任职资格\r\n1、熟悉淘宝/天猫后台；\r\n2、1年以上相关工作经验；\r\n3、思维敏捷，富有创新精神，对数据变化敏感，具备良好的分析判断能力。\r\n办公环境舒适，团队和谐，来了就跟家人一样，一起成长，去年营业额8000万\r\n期待你的加入，薪酬组成为：底薪+提成+年终奖，非诚勿扰\r\n只要你能力够强，直接晋升店长，由你主导，拿店铺提成，开开心心回家过年，家族地位迅速上升。\r\n职能类别：网店/淘宝运营', '32', '324', '342234', '山东', '淄博', '张店区', '432', '342', '19', '23', '1535527600', '1535527600', '2', '2', '10000', '1', '0', '20');
INSERT INTO `cat` VALUES ('2', '2', 'php程序员', '234', '2', '1', 'type dy', '234', '234', '32', '42', '1、负责网站的日常业务运营管理，稳住和提升相关数据、优化工作；\r\n2、阳光的心态，抗压能力强，团队合作强；\r\n3、收集、整理、分析数据。\r\n任职资格\r\n1、熟悉淘宝/天猫后台；\r\n2、1年以上相关工作经验；\r\n3、思维敏捷，富有创新精神，对数据变化敏感，具备良好的分析判断能力。\r\n办公环境舒适，团队和谐，来了就跟家人一样，一起成长，去年营业额8000万\r\n期待你的加入，薪酬组成为：底薪+提成+年终奖，非诚勿扰\r\n只要你能力够强，直接晋升店长，由你主导，拿店铺提成，开开心心回家过年，家族地位迅速上升。\r\n职能类别：网店/淘宝运营', '34', '234233', '432423', '河南', '郑州', '中原区', '234', '234', '3', '234', '1535527600', '1535527600', '2', '1', '10000', '2', '0', '1');
INSERT INTO `cat` VALUES ('3', '2', 'java程序员', '243', '2', '2', 'type ly', null, null, null, null, null, null, null, null, null, '上海', null, null, null, '5', null, '1535527600', '1535527600', null, '2', '10000', '3', '0', '12');
INSERT INTO `cat` VALUES ('4', '2', '销售', '2', '3', '0', 'type xs', null, null, null, null, null, null, null, null, '北京', '北京', null, null, null, '20', null, '1535527600', '1535527600', null, '3', '200', '1', '0', '2');
INSERT INTO `cat` VALUES ('5', '2', '英语家教老师', '324', '4', '1', 'type jj', null, null, null, null, null, null, null, null, '山东', '济南', null, null, null, '8', null, '1535527600', '1535527600', null, '4', '200', '2', '0', '3');
INSERT INTO `cat` VALUES ('6', '1', '促销衣服', '3', '1', '2', 'type cx', null, null, null, null, null, null, null, null, '湖北', '武汉', null, null, null, '4', null, '1535527600', '1535527600', null, '5', '200', '3', '0', '1');
INSERT INTO `cat` VALUES ('7', '2', '设计门框', '1', '3', '0', 'type sj', null, null, null, null, null, null, null, null, '湖北', '孝感', null, null, null, '12', null, '1535527600', '1535527600', null, '2', '10000', '1', '0', '1');
INSERT INTO `cat` VALUES ('8', '1', 'php家教', '2', '4', '1', 'type jj', null, null, null, null, null, null, null, null, '河南', '郑州', null, null, null, '8', null, '1535527600', '1535527600', null, '4', '200', '2', '0', '1');
INSERT INTO `cat` VALUES ('9', '1', 'ps画图', '3', '3', '2', 'type sj', null, null, null, null, '职能类别：网店/淘宝运营', '职能类别：网店/淘宝运营', null, null, '湖北', '十堰', null, null, null, '3', null, '1535527600', '1535527600', null, '5', '10000', '3', '0', '1');
INSERT INTO `cat` VALUES ('10', '1', '外语翻译', '3', '1', '0', 'type qt', null, null, null, null, '职能类别：网店/淘宝运营', null, null, null, '河南', '郑州', null, null, null, '19', null, '1535546098', '1535546098', null, '5', '200', '1', '0', '2');
INSERT INTO `cat` VALUES ('66', '1', '招聘促销人员shu', '22', '1', '1', 'type qt', null, null, '3', '0,1,2,3', '爱的', '1122@qq.com', '阿斯顿', '2147483647', '安徽省', '池州市', '东至县', '卡死卡拉四大', '1,2,3', '4', null, '1535766099', '1535766099', null, '2', '45455', '2', '0', '2');
INSERT INTO `cat` VALUES ('67', null, 'php1', '3', '2', null, 'type qt', null, null, null, null, '职能类别：网店/淘宝运营', null, null, null, '湖北', '十堰', null, null, null, '19', null, null, null, null, '2', null, '1', '0', '1');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '兼职分类ID',
  `category_name` varchar(30) DEFAULT NULL COMMENT '兼职种类',
  `category_type` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=220 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('19', '其他', 'type ab');
INSERT INTO `category` VALUES ('3', '礼仪', 'type jy');
INSERT INTO `category` VALUES ('4', '促销', 'type cx');
INSERT INTO `category` VALUES ('5', '翻译', 'type fy');
INSERT INTO `category` VALUES ('6', '客服', 'type kf');
INSERT INTO `category` VALUES ('7', '演出', 'type yc');
INSERT INTO `category` VALUES ('8', '家教', 'type jj');
INSERT INTO `category` VALUES ('9', '模特', 'type mt');
INSERT INTO `category` VALUES ('10', '派单', 'type pd');
INSERT INTO `category` VALUES ('11', '文员', 'type wy');
INSERT INTO `category` VALUES ('12', '设计', 'type sj');
INSERT INTO `category` VALUES ('13', '校内', 'type xn');
INSERT INTO `category` VALUES ('14', '临时工', 'type lsg');
INSERT INTO `category` VALUES ('15', '服务员', 'type fwy');
INSERT INTO `category` VALUES ('16', '实习', 'type sx');
INSERT INTO `category` VALUES ('17', '送餐员', 'type scy');
INSERT INTO `category` VALUES ('18', '调研', 'type dy');
INSERT INTO `category` VALUES ('2', '安保', 'type qt');
INSERT INTO `category` VALUES ('20', '销售', 'type xs');

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论ID',
  `cat_id` int(10) NOT NULL COMMENT '兼职ID',
  `cat_comment` varchar(50) NOT NULL COMMENT '兼职评论',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '新闻ID',
  `news_title` varchar(32) DEFAULT NULL COMMENT '新闻标题',
  `news_detail` text COMMENT '新闻内容',
  `news_addtime` varchar(10) DEFAULT NULL COMMENT '新闻添加时间',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '暑假工体验：第一次的车间的临时工工作感受，身心疲惫但很有收获', '<p>暑假工的工作内容有很多，在车间做临时工是很常见的一种形式，也是能填满为期两个月的兼职形式。那么做车间的临时工会是什么感受呢，枯燥乏味还是有所收获，乏善可陈还是苦中作乐？我们来看下兼职猫用户的体验如何。&nbsp; 在终考之前，因为暑假工本来就挺难找的，我托人帮我找份暑假工。在家里滞留了五天为的是等消息，最后我还是选择了多种渠道去寻找兼职工，在兼职猫上找到奥龙集团的车间兼职，于是开始了我的社会实践。&nbsp; 暑假工是不被用来作为技术人员或者办公人员，所以我们做的自然就是车间内的粗活、累活，我第一天上班就被分到插线区工作，一天九小时站在密挤的货车间不停的重复手中的工作，虽然简单，但工作环境不是什么人都承受的了的。车间的一般温度在四十度左右，而在我们插线区，在密挤的货车架中温度一般在五十度左右。手触摸在金属架上都有烫手的感觉，连空气也是灼热没有丝清新的成分。和我插线的大姐告诉我“机会不要步入打工行列。但是来吃吃苦对你还是有利的……”虽然都是已经烂熟于胸的道理，但是此刻却别有一番深层含义。&nbsp; 之后又调到运输间，每一天穿梭在各车间运送麻将机，一天要推一千五百台机器。没有休息时光，工作里面真的会相当累，但一想到大姐说的这点苦其实不算什么，感觉就像自我在和自我比韧性、耐性、坚持。&nbsp; 最后被分到仓库里去做。第一天觉得还蛮简单的，至少比起开如做的插线各推麻将机要简单点。每一天要在“麻将盖板”上贴贴纸，每一天数量都在一千五左右，多的时候有二千，而且还要搬货、卸货，经常把自我弄得伤痕累累。每一天背躬在那里贴纸，时光长了背都直不起来。时光过的飞快，拖着满身的疲惫和伤痕回到了我的学校。或许这两个月让我对这学校有另一种异样的情感，我怀着别样的情绪走进了我所深畏的教室。享受幸福的最后时刻，做出无愧于自我的选取。&nbsp; 车间的工作会很艰难，而且调动性很大，可能刚熟悉了这个工作会被调换到新的岗位，因而想要在暑假工期间通过这个工作学习到能应用于实际生活是不现实的。但是经历过这样的生活，才会在心里更明白当初的读书是有真真切切的意义，是一种真正的长期投资。经过这样的生活，反而有种向死而生的拼搏感。&nbsp; 因此小编的建议是，如果你是一个对学习和知识有强烈欲望的大学生，那么你的暑假应该早就有了各种计划，让你能够不断汲取知识；而如果你还未能认识到知识的重要性，对大学和未来工作还迷茫、还随意，那么建议你去这样的环境下好好体会一番，重新认知你的信念。</p>', '1535783573');
INSERT INTO `news` VALUES ('2', '暑期找兼职实习，有什么重要部分容易被忽略？', '<p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px;text-indent: 28px\">实习职位一般是没有薪水或者只有很少的补贴。实习时间从一个学期、一个季度到一个暑假不等。实习面试是确定你是否适合实习工作的最重要的方式。&nbsp;所以兼职猫小编在这里建议大家，能够找一份实习，是对以后找工作很有帮助的一件事。</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">　　1.仔细查看实习职位说明。你必须完全明白你的未来雇主需要你在实习期间完成什么样的工作。&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">　　2.尽可能多的收集有关面试的信息。如果需要的话，可以和通知你面试的人取得联系，询问他/她有关面试官的信息，面试时长，是否需要自带写作样本。&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">　　3.把实习职位和你学过的最相关的课程联系起来。另外，从你之前的工作经历中找出与申请的实习职位最相关的那些工作经历。</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">&nbsp; &nbsp; &nbsp; 4.重新看一遍你递交的简历，确保简历上提及的工作经历和所学课程与实习职位有密切关联，因为当你在面试的时候，简历是必不可少的。&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">　　5.准备好职业着装和打扮。男生需要穿西服打领带，颜色和材质以传统为主。女生需身穿两件套的职业套装，裤装和裙装都可以，裙子的长短应该是在你坐下来的时候，裙子能盖住你的大腿。&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">&nbsp;　 &nbsp;6.为面试中常见问题做好准备。面试中的常见问题有“你为什么想来我们公司工作？”“说说有关你自己的情况？”尽管你不可能预测到面试中的所有问题，准备这些常见问题的过程中可以帮助你想起那些最相关的回答。你可能会被问到以前的工作经历、相关的课程，还有你的性格等，做好准备会让你应对得体。&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">　　7.在你的朋友、伙伴或家人面前演练面试回答问题的环节，这样做可以让你在面试当天不那么紧张。</p><p><br/></p>', '1535783606');
INSERT INTO `news` VALUES ('3', '大学生暑假要怎么过', '<p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\"><span style=\"line-height: 1.5\">一年一度的暑假即将来临，在考试繁忙的季节里，偶尔遐想暑假该去哪里比较好的同学不在少数。在大学校园里，有的同学忙着准备考研，有的同学收拾行囊准备回家，有的同学忙着考证，有的同学忙着找<a href=\"http://www.jianzhimao.com/ctrlspecial/index\" target=\"_blank\">暑假兼职实习</a>，有的忙着度假旅游，还有的忙着三下乡活动支教。。。。。。各种各样的大学生过暑假方式，你选择哪一样？</span></p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px;text-align: center\"><img src=\"http://img.jianzhimao.com/message/132/20150623113419_522.png\" alt=\"\"/>&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px;text-align: center\">大学生暑假生活怎么过</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">大学生活是多姿多彩的，想必大部分同学都是认可这句话的，我们从单一乏味的高中生活来到大学，的确应该可以自由选择生活的权力。那么，大学生暑假都是怎么过呢？</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\"><strong>实力派：挣到生活费</strong></p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\"><strong><br/></strong></p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">对于经济条件不是很宽裕的同学来说，暑假选择去做兼职，是一个很不错的选择。同学小李就找了一个暑假工，在一家咖啡厅做服务员，他说：“利用假期打工既可以赚到自己的生活费，又加深自己对社会的了解程度，增长见识。”“现在社会竞争太大了，毕业后想找份工作也很困难，只有从各方面不断提高自己的综合能力，才可能被社会接受。另一位同学也发表类似的看法。他认为，对于所学专业只要合格就行了，他更注重对自己能力的培养，因此，他积极参加学校组织的社会实践活动，在节假日从事过促销员工作。</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\"><strong>实习派：理论和实践结合才是第一要务</strong></p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">“暑假时间长，这是锻炼自己的最好机会，在学校学习两年了，只有在实际工作中，理论和实践相结合，才能检验自己所学的知识，发现欠缺的也好及时改进。”</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">在另一间寝室，土木工程系大三的米林说：“我准备到北京去，我一个亲戚已给我联系做工程监理的事，这几年暑假我都过去了，在书本上学到的知识和实际差距很大，通过在地上实践，增加了不少感性知识，对提高专业技术水平有很大帮助。”</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">而同系的张敏说：“明年的暑假就要面临找工作，这个暑假我也准备找个单位实习。前段时间就有一份代薪实习的工作，但因学校有课就放弃了，现在想找一份代薪实习的工作就不容易了，但只要能学到东西，既使没有工资我也回去。”</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">在采访中，大二、大三的同学面临毕业后就业的压力，普遍把暑假实习作为锻炼自己的一个机会，而工资待遇等问题考虑得相对较少一些。在他们看来，学习成绩如何已经无所谓。“上大学的目的，应该是为了掌握一种学习上的方法，培养一种吸收消化新知识的能力。更重要的是多接触、多认识一些人，为自己走上社会打好人脉基础。”</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\"><strong>考证派：为找工作添砝码</strong></p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\"><strong>&nbsp;</strong></p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">多个文凭多张证书，成为大学生求职的“敲门砖”，暑期长假也成为大学生学习充电的最佳时机。</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">某高校的陈雪梅这个假期不打算回家，她说：“虽然才大一，我已感受到就业的压力，所以我必须提前做准备。这个假期我准备在校学习英语和计算机，争取开学后考英语四级和计算机二级。”</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">外语系大二的江帆已回到了家，这个暑假要为考教师资格证和过英语六级做准备。他说：“上学期刚考完了英语四级，这个假期在家学习，为考英语六级准备，为以后就业打基础，我还要看有关考教师资格方面的书。”</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">有着类似想法的土木工程系的谭某告诉记者，这个假期她已参加考研补习班，可能要补到8月中旬，然后才能回家一趟。她说：“现在大多数的本科生毕业后，技术性强的可直接就业，要么选择考研，或者在校时就参加各种技能考试，我们土木系有1000多人，选择考研的有30多人，图书馆成为我们看书的主要场所，每天图书馆里都是座无虚席。”</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\"><strong>休闲派：放暑假就是让我们去玩去休息</strong></p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\"><strong><br/></strong></p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">面对社会实践和学习充电，也有一部分的大学生在暑期，选择放松自己。影院、音像店等都多了大学生的身影，背包一族也成为时下大学生流行的休闲方式。</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">一位理工系的同学说到：“平时都忙于学习，五一、十一黄金周，外出旅游的人又太多了，暑期的到来正好出去放松一下，为了找到更多的出游同伴，还在学校贴出‘招聘启事’参加出游的有10多人了，我们准备骑自行车到西昌。”</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">正如他所说的，暑期安排，主要是休息和娱乐。每天早上7点左右起床，约上三五好友一起，爬山、散步、打羽毛球。然后大多数的时间就待在家里，看书、看电视。晚上走走逛逛，或者和老同学聚一下。“我比较安静，不喜欢闹哄哄的，所以待在家里看书的时间比较多，也喜欢看一些人物专访类的电视节目。</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">&nbsp;</p><p style=\"margin-top: 0px;margin-bottom: 0px;padding: 0px;color: rgb(108, 108, 108);font-family: &#39;PingFang SC&#39;, &#39;Lantinghei SC&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, &#39;Microsoft YaHei&#39;, sans-serif;white-space: normal;background-color: rgb(255, 255, 255);font-size: 13.3333px\">看来，每个同学都有自己的过暑假的方式，无论做兼职实习也好，考证旅游也好，都是很不错的选择。小编在此不多评价什么，因为一个环境和条件会对人的选择有很大的影响因素，不过小编在这里都祝大家有一个愉快的暑假生活！</p><p><br/></p>', '1535783789');

-- ----------------------------
-- Table structure for `qzz`
-- ----------------------------
DROP TABLE IF EXISTS `qzz`;
CREATE TABLE `qzz` (
  `qzz_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '求职者ID',
  `qzz_name` varchar(32) NOT NULL COMMENT '求职者名字',
  `qzz_pwd` varchar(32) NOT NULL COMMENT '求职者密码',
  `qzz_age` int(5) NOT NULL COMMENT '求职者年龄',
  `qzz_sex` int(1) NOT NULL COMMENT '求职者性别1男2女3保密',
  PRIMARY KEY (`qzz_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qzz
-- ----------------------------
INSERT INTO `qzz` VALUES ('6', ' 15824827302', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO `qzz` VALUES ('7', ' 15824827304', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO `qzz` VALUES ('8', ' 15824827307', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO `qzz` VALUES ('5', ' 15824827306', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO `qzz` VALUES ('9', ' 15824827308', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO `qzz` VALUES ('10', ' 15824827306', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO `qzz` VALUES ('11', ' 15824827312', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO `qzz` VALUES ('12', ' 15824827315', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO `qzz` VALUES ('13', ' 15824827311', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO `qzz` VALUES ('14', ' 15824827311', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO `qzz` VALUES ('15', ' 15824827306', 'd41d8cd98f00b204e9800998ecf8427e', '0', '0');
INSERT INTO `qzz` VALUES ('16', ' 15824837102', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO `qzz` VALUES ('17', ' 15824827316', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');

-- ----------------------------
-- Table structure for `time_query`
-- ----------------------------
DROP TABLE IF EXISTS `time_query`;
CREATE TABLE `time_query` (
  `short_time_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `short_time_start` int(10) unsigned DEFAULT NULL COMMENT '开始时间',
  `short_time_end` int(10) DEFAULT NULL COMMENT '结束时间',
  `cat_id` int(5) NOT NULL COMMENT '兼职id',
  PRIMARY KEY (`short_time_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of time_query
-- ----------------------------

-- ----------------------------
-- Table structure for `type`
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `type_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '兼职类型ID',
  `type_name` varchar(10) NOT NULL COMMENT '兼职分类名称',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '公司ID',
  `user_name` varchar(255) NOT NULL COMMENT '公司名称',
  `user_pwd` varchar(32) NOT NULL COMMENT '公司密码',
  `user_money` float(10,2) NOT NULL COMMENT '账户余额',
  `user_xz` varchar(10) NOT NULL COMMENT '公司性质',
  `user_gm` varchar(5) NOT NULL COMMENT '公司规模',
  `user_hy` varchar(5) NOT NULL COMMENT '公司行业',
  `user_email` varchar(15) NOT NULL COMMENT '公司邮箱',
  `user_leader` varchar(5) DEFAULT NULL COMMENT '联系人',
  `user_phone` int(11) DEFAULT NULL COMMENT '联系电话',
  `user_province` varchar(10) DEFAULT NULL COMMENT '公司所在省',
  `user_city` varchar(10) DEFAULT NULL COMMENT '公司所在市',
  `user_area` varchar(10) DEFAULT NULL COMMENT '公司所在区',
  `user_detail` varchar(20) DEFAULT NULL COMMENT '公司具体地址',
  `user_idt` text COMMENT '公司简介',
  `user_hj` varchar(50) DEFAULT NULL COMMENT '环境图片',
  `user_img` varchar(50) DEFAULT NULL COMMENT '公司头像',
  `user_number` int(3) DEFAULT NULL COMMENT '发布兼职次数',
  `user_over_num` int(10) unsigned NOT NULL DEFAULT '3' COMMENT '默认有3次免费发布',
  `user_account` varchar(11) NOT NULL COMMENT '公司注册账号',
  `user_welfare` char(30) NOT NULL COMMENT '公司福利 0:五险 1:公积金 2:包吃 3:包住 4:周末双休 5:免费培训 6:全勤奖',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '123456', '', '99952.00', '私企', '1000人', '科技', '5525@163.com', '李阿安抚', '1111111', '安徽省', '淮北市', '相山区', '亲电饭锅', '发送到撒范德萨但是发送到权威第三方v撒发多少', '公司环境', '公司头像', '3', '3', '13222222222', '0,1,6');
INSERT INTO `user` VALUES ('2', '十堰双星轮胎有限公司', '', '0.00', '私企', '1000-', '', '', null, '234143', '湖北省', '十堰市', 'XX区', 'xx路xx号', '公司介绍', null, null, null, '3', '', '');
