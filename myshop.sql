-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 04 月 20 日 12:31
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `myshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `sw_auth`
--

CREATE TABLE IF NOT EXISTS `sw_auth` (
  `auth_id` int(6) NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(32) NOT NULL,
  `auth_pid` smallint(6) NOT NULL COMMENT '父id',
  `auth_c` varchar(32) NOT NULL DEFAULT '' COMMENT '控制器',
  `auth_a` varchar(32) NOT NULL DEFAULT '' COMMENT '方法',
  `auth_path` varchar(32) NOT NULL COMMENT '全路径',
  `auth_level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '权限级别，从0开始计数',
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `sw_auth`
--

INSERT INTO `sw_auth` (`auth_id`, `auth_name`, `auth_pid`, `auth_c`, `auth_a`, `auth_path`, `auth_level`) VALUES
(1, '商品管理', 0, '', '', '1', 0),
(2, '订单管理', 0, '', '', '2', 0),
(3, '权限管理', 0, '', '', '3', 0),
(4, '商品列表', 1, 'Goods', 'showlist', '1-4', 1),
(5, '添加商品', 1, 'Goods', 'addGoods', '1-5', 1),
(6, '品牌管理', 1, 'Goods', 'managerbrand', '1-6', 1),
(7, '订单列表', 2, 'Order', 'showlist', '2-7', 1),
(8, '订单查询', 2, 'Order', 'searchorder', '2-8', 1),
(9, '订单打印', 2, 'Order', 'printorder', '2-9', 1),
(10, '管理员列表', 3, 'manager', 'showlist', '3-10', 1),
(11, '角色管理', 3, 'Role', 'showlist', '3-11', 1),
(12, '管理员列表', 3, 'Auth', 'showlist', '3-12', 1);

-- --------------------------------------------------------

--
-- 表的结构 `sw_manager`
--

CREATE TABLE IF NOT EXISTS `sw_manager` (
  `mg_id` int(11) NOT NULL AUTO_INCREMENT,
  `mg_name` varchar(32) NOT NULL,
  `mg_pwd` varchar(32) NOT NULL,
  `mg_time` int(10) unsigned NOT NULL COMMENT '时间',
  `mg_role_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '角色id',
  PRIMARY KEY (`mg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `sw_manager`
--

INSERT INTO `sw_manager` (`mg_id`, `mg_name`, `mg_pwd`, `mg_time`, `mg_role_id`) VALUES
(1, 'admin', '123456', 0, 50),
(2, 'dalong', '123456', 0, 51),
(3, 'xiaolong', '123456', 0, 50);

-- --------------------------------------------------------

--
-- 表的结构 `sw_role`
--

CREATE TABLE IF NOT EXISTS `sw_role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(32) NOT NULL,
  `role_auth_ids` varchar(128) NOT NULL DEFAULT '' COMMENT '权限的id',
  `role_auth_ac` text COMMENT '控制器-方法',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- 转存表中的数据 `sw_role`
--

INSERT INTO `sw_role` (`role_id`, `role_name`, `role_auth_ids`, `role_auth_ac`) VALUES
(50, '主管', '1,4,2,7', 'Goods-showlist,Order-showlist'),
(51, '经理', '2,7,8', 'Order-showlist,Order-searchorder');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
