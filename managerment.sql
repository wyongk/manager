/*
 Navicat MySQL Data Transfer

 Source Server         : mysql5.7
 Source Server Type    : MySQL
 Source Server Version : 50717
 Source Host           : 127.0.0.1:3306
 Source Schema         : managerment

 Target Server Type    : MySQL
 Target Server Version : 50717
 File Encoding         : 65001

 Date: 23/01/2019 13:42:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for m_in_stock
-- ----------------------------
DROP TABLE IF EXISTS `m_in_stock`;
CREATE TABLE `m_in_stock`  (
  `i_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '库存id',
  `i_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '名称',
  `i_model` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '型号',
  `i_count` int(11) NULL DEFAULT NULL COMMENT '数量',
  `i_timespan` int(11) NULL DEFAULT NULL COMMENT '入库时间（时间戳）',
  `i_outtime` int(11) NULL DEFAULT NULL COMMENT '出库时间（时间戳）',
  PRIMARY KEY (`i_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for m_permission
-- ----------------------------
DROP TABLE IF EXISTS `m_permission`;
CREATE TABLE `m_permission`  (
  `p_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '权限id',
  `p_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '权限名称',
  PRIMARY KEY (`p_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for m_plan
-- ----------------------------
DROP TABLE IF EXISTS `m_plan`;
CREATE TABLE `m_plan`  (
  `p_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '计划id',
  `p_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '计划名称',
  `p_status` tinyint(1) NULL DEFAULT 0 COMMENT '状态（1；完成；0：未完成）',
  PRIMARY KEY (`p_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for m_r_permission
-- ----------------------------
DROP TABLE IF EXISTS `m_r_permission`;
CREATE TABLE `m_r_permission`  (
  `r_id` int(11) NOT NULL COMMENT '角色id',
  `p_id` int(11) NULL DEFAULT NULL COMMENT '权限id',
  PRIMARY KEY (`r_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for m_role
-- ----------------------------
DROP TABLE IF EXISTS `m_role`;
CREATE TABLE `m_role`  (
  `r_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '角色id',
  `r_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '角色名称',
  PRIMARY KEY (`r_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for m_step
-- ----------------------------
DROP TABLE IF EXISTS `m_step`;
CREATE TABLE `m_step`  (
  `s_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '步骤id',
  `p_id` int(11) NULL DEFAULT NULL COMMENT '计划id',
  `s_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '步骤名称',
  `s_sort` int(11) NULL DEFAULT NULL COMMENT '步骤排序',
  `s_status` tinyint(1) NULL DEFAULT 0 COMMENT '状态（1：完成；0：未完成）',
  PRIMARY KEY (`s_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for m_user
-- ----------------------------
DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user`  (
  `u_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户名',
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '密码（双重MD5）',
  `r_id` int(11) NULL DEFAULT NULL COMMENT '角色id',
  PRIMARY KEY (`u_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
