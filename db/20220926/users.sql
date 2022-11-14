/*
 Navicat Premium Data Transfer

 Source Server         : kci-log
 Source Server Type    : PostgreSQL
 Source Server Version : 140005
 Source Host           : 10.20.12.81:5432
 Source Catalog        : postgres
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 140005
 File Encoding         : 65001

 Date: 26/09/2022 20:01:59
*/


-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS "public"."users";
CREATE TABLE "public"."users" (
  "id" int8 NOT NULL DEFAULT nextval('users_id_seq'::regclass),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "email" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "email_verified_at" timestamp(0),
  "password" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "remember_token" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "username" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "level_cd" varchar(20) COLLATE "pg_catalog"."default",
  "users_cd" varchar(20) COLLATE "pg_catalog"."default",
  "department_cd" varchar(20) COLLATE "pg_catalog"."default",
  "division_cd" varchar(20) COLLATE "pg_catalog"."default",
  "directorate_cd" varchar(20) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO "public"."users" VALUES (14, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', NULL, '2022-07-12 04:11:20', '2022-07-12 04:11:20', 'admin', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."users" VALUES (1, 'Manajer User', 'mgr_ctip', NULL, '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', NULL, '2022-09-14 17:08:37', '2022-09-14 17:08:37', 'ctip', NULL, NULL, 'CTIP', 'CTI', 'CT');
INSERT INTO "public"."users" VALUES (2, 'Manajer User', 'mgr_ctio', NULL, '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', NULL, '2022-09-14 17:08:37', '2022-09-14 17:08:37', 'ctio', NULL, NULL, 'CTIO', 'CTI', 'CT');
INSERT INTO "public"."users" VALUES (3, 'Manajer Logistic Sarana', 'mgr_cugr', NULL, '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', NULL, '2022-09-22 12:54:12', '2022-09-22 12:54:18', 'cugr', NULL, NULL, 'CUGR', 'CUG', 'CU');
INSERT INTO "public"."users" VALUES (4, 'Manajer Logistic Non Sarana', 'mgr_cugn', NULL, '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', NULL, '2022-09-22 12:56:33', '2022-09-22 12:56:41', 'cugn', NULL, NULL, 'CUGN', 'CUG', 'CU');
INSERT INTO "public"."users" VALUES (5, 'Admin PBJ Sarana', 'am_cugr1', NULL, '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', NULL, '2022-09-22 12:59:29', '2022-09-22 12:59:33', 'cugr1', NULL, 'CUGR1', 'CUGR', 'CUG', 'CU');
INSERT INTO "public"."users" VALUES (6, 'Admin PBJ Non Sarana', 'am_cugn1', NULL, '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', NULL, '2022-09-22 13:00:49', '2022-09-22 13:00:54', 'cugn1', NULL, 'CUGN1', 'CUGN', 'CUG', 'CU');
INSERT INTO "public"."users" VALUES (7, 'Admin Contract Sarana', 'am_cugr2', NULL, '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', NULL, '2022-09-22 13:04:08', '2022-09-22 13:04:13', 'cugr2', NULL, 'CUGR2', 'CUGR', 'CUG', 'CU');
INSERT INTO "public"."users" VALUES (8, 'Admin Contract Non Sarana', 'am_cugn2', NULL, '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', NULL, '2022-09-22 13:05:03', '2022-09-22 13:05:08', 'cugn2', NULL, 'CUGN2', 'CUGN', 'CUG', 'CU');
INSERT INTO "public"."users" VALUES (9, 'Manajer Gudang', 'mgr_cugw', NULL, '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', NULL, '2022-09-22 13:07:22', '2022-09-22 13:07:28', 'cugw', NULL, '', 'CUGW', 'CUG', 'CU');
INSERT INTO "public"."users" VALUES (11, 'Admin Planning & Distribution', 'am_cugw1', NULL, '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', NULL, '2022-09-22 13:10:36', '2022-09-22 13:10:40', 'cugw1', NULL, 'CUGW1', 'CUGW', 'CUG', 'CU');
INSERT INTO "public"."users" VALUES (12, 'Admin Barang Bekas', 'am_cugw2', NULL, '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', NULL, '2022-09-22 13:11:26', '2022-09-22 13:11:30', 'cugw2', NULL, 'CUGW2', 'CUGW', 'CUG', 'CU');
