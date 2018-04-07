create database if not exists 'tp-blog' default character set utf8 collate utf8_general_ci;
use 'tp_blog';

-- ----------------------------
-- 文章表
-- ----------------------------
drop table if exists tp_article;
create table tp_article (
  aid int(10) unsigned not null auto_increment comment '文章表主键',
  title char(100) character set utf8 collate utf8_general_ci not null default '' comment '标题',
  author varchar(15) character set utf8 collate utf8_general_ci not null default '' comment '作者',
  content mediumtext character set utf8 collate utf8_general_ci not null comment '文章内容',
  keywords varchar(255) character set utf8 collate utf8_general_ci not null default '' comment '关键词',
  description char(255) character set utf8 collate utf8_general_ci not null default '' comment '描述',
  is_show tinyint(1) unsigned not null default 1 comment '文章是否显示 1是 0否',
  is_delete tinyint(1) unsigned not null default 0 comment '是否删除 1是 0否',
  is_top tinyint(1) unsigned not null default 0 comment '是否置顶 1是 0否',
  is_original tinyint(1) unsigned not null default 1 comment '是否原创 1是 0否',
  click int(10) unsigned not null default 0 comment '点击数',
  addtime int(10) unsigned not null default 0 comment '添加时间',
  cid tinyint(2) unsigned not null default 0 comment '分类id',
  primary key (aid) USING BTREE
) engine = InnoDB character set = utf8 collate = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- 文章图片表
-- ----------------------------
drop table if exists tp_article_pic;
create table tp_article_pic (
  ap_id int(10) unsigned not null auto_increment comment '主键',
  path varchar(100) character set utf8 collate utf8_general_ci not null default '' comment '图片路径',
  aid int(10) unsigned not null default 0 comment '所属文章id',
  primary key (ap_id) USING BTREE
) engine = InnoDB character set = utf8 collate = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- 文章标签表
-- ----------------------------
drop table if exists tp_article_tag;
create table tp_article_tag (
  aid int(10) unsigned not null default 0 comment '文章id',
  tid int(10) unsigned not null default 0 comment '标签id'
) engine = InnoDB character set = utf8 collate = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- 分类表
-- ----------------------------
drop table if exists tp_category;
create table tp_category (
  cid tinyint(2) unsigned not null auto_increment comment '分类主键id',
  cname varchar(15) character set utf8 collate utf8_general_ci not null default '' comment '分类名称',
  keywords varchar(255) character set utf8 collate utf8_general_ci null default '' comment '关键词',
  description varchar(255) character set utf8 collate utf8_general_ci null default '' comment '描述',
  sort tinyint(2) unsigned not null default 0 comment '排序',
  pid tinyint(2) unsigned not null default 0 comment '父级栏目id',
  primary key (cid) USING BTREE
) engine = InnoDB character set = utf8 collate = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- 碎言表
-- ----------------------------
drop table if exists tp_chat;
create table tp_chat (
  chid int(10) unsigned not null auto_increment comment '碎言id',
  date int(10) unsigned not null default 0 comment '发表时间',
  content text character set utf8 collate utf8_general_ci not null comment '内容',
  is_show tinyint(1) unsigned not null default 1 comment '是否显示',
  is_delete tinyint(1) unsigned not null default 0 comment '是否删除',
  primary key (chid) USING BTREE
) engine = InnoDB character set = utf8 collate = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- 评论表
-- ----------------------------
drop table if exists tp_comment;
create table tp_comment (
  cmtid int(10) unsigned not null auto_increment comment '主键id',
  ouid int(10) unsigned not null default 0 comment '评论用户id 关联oauth_user表的id',
  type tinyint(1) unsigned not null default 1 comment '1 : 文章评论',
  pid int(10) unsigned not null default 0 comment '父级id',
  aid int(10) unsigned not null comment '文章id',
  content text character set utf8 collate utf8_general_ci not null comment '内容',
  date int(10) unsigned not null default 0 comment '评论日期',
  status tinyint(1) unsigned not null comment '1:已审核 0:未审核',
  is_delete tinyint(1) unsigned not null default 0 comment '是否删除',
  primary key (cmtid) USING BTREE
) engine = InnoDB character set = utf8 collate = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- 配置表
-- ----------------------------
drop table if exists tp_config;
create table tp_config (
  id int(10) unsigned not null auto_increment comment '主键id',
  name varchar(100) character set utf8 collate utf8_general_ci not null default '' comment '配置项键名',
  value text character set utf8 collate utf8_general_ci null comment '配置项键值 1表示开启 0表示关闭',
  primary key (id) USING BTREE
) engine = InnoDB character set = utf8 collate = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- 链接表
-- ----------------------------
drop table if exists tp_link;
create table tp_link (
  lid int(10) unsigned not null auto_increment comment '主键id',
  lname varchar(50) character set utf8 collate utf8_general_ci not null default '' comment '链接名',
  url varchar(255) character set utf8 collate utf8_general_ci not null default '' comment '链接地址',
  sort tinyint(3) unsigned not null default 1 comment '排序',
  is_show tinyint(1) unsigned not null default 1 comment '文章是否显示 1是 0否',
  is_delete tinyint(1) unsigned not null default 0 comment '是否删除 1是 0否',
  primary key (lid) USING BTREE
) engine = InnoDB character set = utf8 collate = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- 用户表
-- ----------------------------
drop table if exists tp_oauth_user;
create table tp_oauth_user (
  id int(10) unsigned not null auto_increment comment '主键id',
  uid int(10) unsigned not null default 0 comment '关联的本站用户id',
  type tinyint(3) unsigned not null default 1 comment '类型 1：QQ 2：新浪微博 3：豆瓣 4：人人 5：开心网',
  nickname varchar(30) character set utf8 collate utf8_general_ci not null default '' comment '第三方昵称',
  head_img varchar(255) character set utf8 collate utf8_general_ci not null default '' comment '头像',
  openid varchar(40) character set utf8 collate utf8_general_ci not null default '' comment '第三方用户id',
  access_token varchar(255) character set utf8 collate utf8_general_ci not null default '' comment 'access_token',
  create_time int(10) unsigned not null default 0 comment '绑定时间',
  last_login_time int(10) unsigned not null default 0 comment '最后登录时间',
  last_login_ip varchar(16) character set utf8 collate utf8_general_ci not null default '' comment '最后登录ip',
  login_times int(6) unsigned not null default 0 comment '登录次数',
  status tinyint(1) unsigned not null default 1 comment '状态',
  email varchar(255) character set utf8 collate utf8_general_ci not null default '' comment '邮箱',
  is_admin tinyint(1) unsigned not null default 0 comment '是否是admin',
  primary key (id) USING BTREE
) engine = InnoDB character set = utf8 collate = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- 标签表
-- ----------------------------
drop table if exists tp_tag;
create table tp_tag (
  tid int(10) unsigned not null auto_increment comment '主键id',
  tname varchar(10) character set utf8 collate utf8_general_ci not null default '' comment '标签名',
  primary key (tid) USING BTREE
) engine = InnoDB character set = utf8 collate = utf8_general_ci ROW_FORMAT = Compact;
