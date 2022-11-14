/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : PostgreSQL
 Source Server Version : 140001
 Source Host           : localhost:5432
 Source Catalog        : kai-timeline
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 140001
 File Encoding         : 65001

 Date: 14/08/2022 13:36:29
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
INSERT INTO "public"."users" VALUES (16, 'USERS X', 'userx@mail.com', NULL, '$2y$10$.wpFRn/kW846dI58eUVbBufkgXKgYWtrndBBv1ODiJYCvUxF9XGEO', NULL, '2022-07-12 04:14:54', '2022-07-12 04:14:54', 'userx', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."users" VALUES (2, 'presdir', 'presdir@gmail.com', '2022-07-16 22:49:34', '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', '', '2022-07-16 22:49:34', NULL, 'presdir', 'DIR', NULL, NULL, NULL, 'CU');
INSERT INTO "public"."users" VALUES (3, 'vp_logistic', 'vp.logistic@gmail.com', '2022-07-16 22:49:34', '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', '', '2022-07-16 22:49:34', NULL, 'vp_logistic', 'VP', NULL, NULL, 'CUG', 'CU');
INSERT INTO "public"."users" VALUES (5, 'eval_logistic', 'eval.logistic@gmail.com', '2022-07-16 22:49:34', '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', '', '2022-07-16 22:49:34', NULL, 'eval_logistic', 'LEV7', 'CUGP.7', 'CUGP', 'CUG', 'CU');
INSERT INTO "public"."users" VALUES (7, 'asman_it', 'asman.it@gmail.com', '2022-07-16 22:49:34', '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', '', '2022-07-16 22:49:34', NULL, 'asman_it', 'AMGR', 'CTIO.1', 'CTIO', 'CTI', 'CT');
INSERT INTO "public"."users" VALUES (17, 'test', 'test@mail.com', NULL, '123456', NULL, '2022-07-31 15:18:39', '2022-07-31 15:18:39', 'test', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."users" VALUES (4, 'mgr_it', 'mgr.logistic@gmail.com', '2022-07-16 22:49:34', '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', '', '2022-07-16 22:49:34', NULL, 'mgr_it', 'MGR', NULL, 'CTIO', 'CTI', 'CT');
INSERT INTO "public"."users" VALUES (6, 'mgr_logistic', 'mgr.it@gmail.com', '2022-07-16 22:49:34', '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', '', '2022-07-16 22:49:34', NULL, 'mgr_logistic', 'MGR', NULL, 'CUGP', 'CUG', 'CU');

-- ----------------------------
-- Uniques structure for table users
-- ----------------------------
ALTER TABLE "public"."users" ADD CONSTRAINT "users_email_unique" UNIQUE ("email");

-- ----------------------------
-- Primary Key structure for table users
-- ----------------------------
ALTER TABLE "public"."users" ADD CONSTRAINT "users_pkey" PRIMARY KEY ("id");
