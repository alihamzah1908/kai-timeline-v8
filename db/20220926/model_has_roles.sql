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

 Date: 26/09/2022 20:08:12
*/


-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS "public"."model_has_roles";
CREATE TABLE "public"."model_has_roles" (
  "role_id" int8 NOT NULL,
  "model_type" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "model_id" int8 NOT NULL
)
;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO "public"."model_has_roles" VALUES (16, 'App\Models\User', 14);
INSERT INTO "public"."model_has_roles" VALUES (17, 'App\Models\User', 1);
INSERT INTO "public"."model_has_roles" VALUES (17, 'App\Models\User', 2);
INSERT INTO "public"."model_has_roles" VALUES (1, 'App\Models\User', 4);
INSERT INTO "public"."model_has_roles" VALUES (4, 'App\Models\User', 8);
INSERT INTO "public"."model_has_roles" VALUES (4, 'App\Models\User', 7);
INSERT INTO "public"."model_has_roles" VALUES (3, 'App\Models\User', 6);
INSERT INTO "public"."model_has_roles" VALUES (3, 'App\Models\User', 5);
INSERT INTO "public"."model_has_roles" VALUES (5, 'App\Models\User', 3);
INSERT INTO "public"."model_has_roles" VALUES (7, 'App\Models\User', 12);
INSERT INTO "public"."model_has_roles" VALUES (6, 'App\Models\User', 11);
INSERT INTO "public"."model_has_roles" VALUES (6, 'App\Models\User', 9);
