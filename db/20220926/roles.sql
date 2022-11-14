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

 Date: 26/09/2022 20:02:30
*/


-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS "public"."roles";
CREATE TABLE "public"."roles" (
  "id" int8 NOT NULL DEFAULT nextval('roles_id_seq'::regclass),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "guard_name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO "public"."roles" VALUES (16, 'super admin', 'web', '2022-09-14 14:14:20', '2022-09-14 14:14:20');
INSERT INTO "public"."roles" VALUES (17, 'manajer_user', 'web', '2022-09-14 17:07:45', '2022-09-14 17:07:45');
INSERT INTO "public"."roles" VALUES (1, 'manajer_logistic_nonsarana', 'web', '2022-09-23 02:38:59', '2022-09-23 02:38:59');
INSERT INTO "public"."roles" VALUES (3, 'admin_pbj', 'web', '2022-09-23 02:46:41', '2022-09-23 02:46:41');
INSERT INTO "public"."roles" VALUES (4, 'admin_contract', 'web', '2022-09-23 02:47:40', '2022-09-23 02:47:40');
INSERT INTO "public"."roles" VALUES (5, 'manajer_logistic_sarana', 'web', '2022-09-23 02:51:32', '2022-09-23 02:51:32');
INSERT INTO "public"."roles" VALUES (6, 'admin_planning_distribution', 'web', '2022-09-23 02:55:26', '2022-09-23 02:55:26');
INSERT INTO "public"."roles" VALUES (7, 'admin_waste', 'web', '2022-09-23 02:56:27', '2022-09-23 02:56:27');
