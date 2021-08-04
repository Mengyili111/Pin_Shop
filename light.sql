/*
 Navicat Premium Data Transfer

 Source Server         : light
 Source Server Type    : MySQL
 Source Server Version : 50725
 Source Host           : localhost:3306
 Source Schema         : light

 Target Server Type    : MySQL
 Target Server Version : 50725
 File Encoding         : 65001

 Date: 04/09/2019 20:42:15
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for imooc_admin
-- ----------------------------
DROP TABLE IF EXISTS `imooc_admin`;
CREATE TABLE `imooc_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adminuser` varchar(50) NOT NULL DEFAULT '',
  `adminpass` char(32) NOT NULL DEFAULT '',
  `created_at` varchar(255) NOT NULL DEFAULT '',
  `login_at` varchar(255) NOT NULL DEFAULT '',
  `login_ip` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imooc_admin
-- ----------------------------
BEGIN;
INSERT INTO `imooc_admin` VALUES (1, 'admin', '0192023a7bbd73250516f069df18b500', '2019-01-23 20:21:03', '2019-01-24 12:56:48', 2130706433);
COMMIT;

-- ----------------------------
-- Table structure for imooc_cart
-- ----------------------------
DROP TABLE IF EXISTS `imooc_cart`;
CREATE TABLE `imooc_cart` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `quantity` int(10) unsigned NOT NULL DEFAULT '0',
  `products` text,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imooc_cart
-- ----------------------------
BEGIN;
INSERT INTO `imooc_cart` VALUES (2, 21700.00, 3, '{\"3\":{\"quantity\":2,\"product\":{\"id\":\"3\",\"name\":\"Macbook Pro\",\"price\":\"8800.00\",\"code\":\"88888888\",\"description\":\"Macbook Pro\"}},\"4\":{\"quantity\":1,\"product\":{\"id\":\"4\",\"name\":\"\\u534e\\u4e3a\\u624b\\u673a\",\"price\":\"4100.00\",\"code\":\"929868123123123\",\"description\":\"\\u5546\\u54c1\\u63cf\\u8ff0\\uff1a\\r\\n\\r\\n\\u8fd9\\u662f\\u534e\\u4e3a\\u624b\\u673a\"}}}', 5, '2019-01-24 10:53:24');
COMMIT;

-- ----------------------------
-- Table structure for imooc_category
-- ----------------------------
DROP TABLE IF EXISTS `imooc_category`;
CREATE TABLE `imooc_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imooc_category
-- ----------------------------
BEGIN;
INSERT INTO `imooc_category` VALUES (1, 'A');
INSERT INTO `imooc_category` VALUES (2, 'B');
INSERT INTO `imooc_category` VALUES (3, 'C');
INSERT INTO `imooc_category` VALUES (4, 'D');
COMMIT;

-- ----------------------------
-- Table structure for imooc_order
-- ----------------------------
DROP TABLE IF EXISTS `imooc_order`;
CREATE TABLE `imooc_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `quantity` int(10) unsigned NOT NULL DEFAULT '0',
  `products` text,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imooc_order
-- ----------------------------
BEGIN;
INSERT INTO `imooc_order` VALUES (1, 17600.00, 2, '{\"3\":{\"quantity\":2,\"product\":{\"id\":\"3\",\"name\":\"Macbook Pro\",\"price\":\"8800.00\",\"code\":\"88888888\",\"description\":\"Macbook Pro\"}}}', 5, '2019-01-24 12:46:33');
COMMIT;

-- ----------------------------
-- Table structure for imooc_product
-- ----------------------------
DROP TABLE IF EXISTS `imooc_product`;
CREATE TABLE `imooc_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `code` varchar(100) DEFAULT '',
  `description` text,
  `stock` int(10) unsigned DEFAULT '0',
  `price` decimal(10,2) unsigned DEFAULT '0.00',
  `created_at` varchar(255) NOT NULL DEFAULT '',
  `image` varchar(255) DEFAULT NULL,
  `bend` varchar(255) DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imooc_product
-- ----------------------------
BEGIN;
INSERT INTO `imooc_product` VALUES (3, 'Macbook Pro', '88888888', 'Macbook Pro', 99, 8800.00, '2019-01-24 00:19:28', NULL, NULL, 1);
INSERT INTO `imooc_product` VALUES (4, '华为手机', '929868123123123', '商品描述：\r\n\r\n这是华为手机', 99, 4100.00, '2019-01-24 00:31:28', NULL, NULL, 1);
INSERT INTO `imooc_product` VALUES (5, '1111', '', '', 111, 1111.00, '2019-08-29 16:05:56', NULL, NULL, 2);
INSERT INTO `imooc_product` VALUES (6, '111', '111', '', 111, 1111.00, '2019-08-29 16:06:05', NULL, NULL, 2);
INSERT INTO `imooc_product` VALUES (7, '000', '888', '888', 888, 888.00, '2019-08-29 16:18:42', 'Screen Shot 2019-06-14 at 5.12.02 PM.png', NULL, 3);
INSERT INTO `imooc_product` VALUES (8, '000', '888', '888', 888, 888.00, '2019-08-29 16:20:41', 'Screen Shot 2019-06-14 at 5.12.02 PM.png', NULL, 3);
INSERT INTO `imooc_product` VALUES (9, '99999', '', '', 0, 111.00, '2019-08-29 16:35:23', '', NULL, 4);
INSERT INTO `imooc_product` VALUES (10, '000', '', '', 111, 111.00, '2019-08-29 16:35:45', '', NULL, 4);
INSERT INTO `imooc_product` VALUES (11, '111', '', '', 1111, 0.00, '2019-08-29 16:37:56', '', '', 3);
INSERT INTO `imooc_product` VALUES (12, 'ee', '', '', 11, 0.00, '2019-08-29 16:38:03', '', '', 2);
INSERT INTO `imooc_product` VALUES (13, '', '', NULL, 0, 0.00, '', NULL, NULL, 2);
INSERT INTO `imooc_product` VALUES (14, 'ee', '', '', 11, 0.00, '2019-08-30 14:33:19', '', '', NULL);
INSERT INTO `imooc_product` VALUES (15, 'ee', '', '', 11, 0.00, '2019-08-30 14:34:44', '', '', NULL);
INSERT INTO `imooc_product` VALUES (16, 'ee', '', '', 11, 0.00, '2019-08-30 14:38:29', '', '', NULL);
INSERT INTO `imooc_product` VALUES (17, '类别测试', '444', '', 333, 222.00, '2019-08-30 14:46:18', 'logo.png', '', 1);
INSERT INTO `imooc_product` VALUES (18, 'ssss', '111', '12121212121', 111, 11.00, '2019-09-01 18:57:03', '', '', 1);
INSERT INTO `imooc_product` VALUES (19, 'aaa', '111', '', 111, 111.00, '2019-09-01 20:18:34', '', '', 1);
INSERT INTO `imooc_product` VALUES (20, 'test', '333', '33333', 121212, 111.00, '2019-09-01 20:21:04', 'Screen Shot 2019-05-30 at 9.08.52 PM.png', '', 2);
COMMIT;

-- ----------------------------
-- Table structure for imooc_user
-- ----------------------------
DROP TABLE IF EXISTS `imooc_user`;
CREATE TABLE `imooc_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `age` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL DEFAULT '',
  `created_at` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imooc_user
-- ----------------------------
BEGIN;
INSERT INTO `imooc_user` VALUES (3, 'zhangsan', '4297f44b13955235245b2497399d7a93', '张三', 28, '13912345678@qq.com', '13912345678', '2019-01-23 23:54:34');
INSERT INTO `imooc_user` VALUES (4, 'wangwu', '4297f44b13955235245b2497399d7a93', '', 0, 'wangwu@imooc.com', '', '2019-01-24 09:21:45');
INSERT INTO `imooc_user` VALUES (5, 'zhaoliu', '4297f44b13955235245b2497399d7a93', '', 0, 'zhaoliu@imooc.com', '', '2019-01-24 09:35:05');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
