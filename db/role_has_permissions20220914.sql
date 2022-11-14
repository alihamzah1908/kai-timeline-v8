/*
 Navicat Premium Data Transfer

 Source Server         : postgre-local
 Source Server Type    : PostgreSQL
 Source Server Version : 140004
 Source Host           : 127.0.0.1:5432
 Source Catalog        : kai-timeline
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 140004
 File Encoding         : 65001

 Date: 14/09/2022 22:26:54
*/


-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS "public"."role_has_permissions";
CREATE TABLE "public"."role_has_permissions" (
  "permission_id" int8 NOT NULL,
  "role_id" int8 NOT NULL
)
;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
INSERT INTO "public"."role_has_permissions" VALUES (26, 8);
INSERT INTO "public"."role_has_permissions" VALUES (27, 8);
INSERT INTO "public"."role_has_permissions" VALUES (28, 8);
INSERT INTO "public"."role_has_permissions" VALUES (29, 8);
INSERT INTO "public"."role_has_permissions" VALUES (34, 9);
INSERT INTO "public"."role_has_permissions" VALUES (35, 9);
INSERT INTO "public"."role_has_permissions" VALUES (36, 9);
INSERT INTO "public"."role_has_permissions" VALUES (37, 9);
INSERT INTO "public"."role_has_permissions" VALUES (42, 9);
INSERT INTO "public"."role_has_permissions" VALUES (43, 9);
INSERT INTO "public"."role_has_permissions" VALUES (44, 9);
INSERT INTO "public"."role_has_permissions" VALUES (45, 9);
INSERT INTO "public"."role_has_permissions" VALUES (50, 9);
INSERT INTO "public"."role_has_permissions" VALUES (51, 9);
INSERT INTO "public"."role_has_permissions" VALUES (52, 9);
INSERT INTO "public"."role_has_permissions" VALUES (53, 9);
INSERT INTO "public"."role_has_permissions" VALUES (38, 10);
INSERT INTO "public"."role_has_permissions" VALUES (39, 10);
INSERT INTO "public"."role_has_permissions" VALUES (40, 10);
INSERT INTO "public"."role_has_permissions" VALUES (41, 10);
INSERT INTO "public"."role_has_permissions" VALUES (46, 10);
INSERT INTO "public"."role_has_permissions" VALUES (47, 10);
INSERT INTO "public"."role_has_permissions" VALUES (48, 10);
INSERT INTO "public"."role_has_permissions" VALUES (49, 10);
INSERT INTO "public"."role_has_permissions" VALUES (54, 10);
INSERT INTO "public"."role_has_permissions" VALUES (55, 10);
INSERT INTO "public"."role_has_permissions" VALUES (56, 10);
INSERT INTO "public"."role_has_permissions" VALUES (57, 10);
INSERT INTO "public"."role_has_permissions" VALUES (26, 16);
INSERT INTO "public"."role_has_permissions" VALUES (27, 16);
INSERT INTO "public"."role_has_permissions" VALUES (28, 16);
INSERT INTO "public"."role_has_permissions" VALUES (29, 16);
INSERT INTO "public"."role_has_permissions" VALUES (30, 16);
INSERT INTO "public"."role_has_permissions" VALUES (31, 16);
INSERT INTO "public"."role_has_permissions" VALUES (32, 16);
INSERT INTO "public"."role_has_permissions" VALUES (33, 16);
INSERT INTO "public"."role_has_permissions" VALUES (34, 16);
INSERT INTO "public"."role_has_permissions" VALUES (35, 16);
INSERT INTO "public"."role_has_permissions" VALUES (36, 16);
INSERT INTO "public"."role_has_permissions" VALUES (37, 16);
INSERT INTO "public"."role_has_permissions" VALUES (38, 16);
INSERT INTO "public"."role_has_permissions" VALUES (39, 16);
INSERT INTO "public"."role_has_permissions" VALUES (40, 16);
INSERT INTO "public"."role_has_permissions" VALUES (41, 16);
INSERT INTO "public"."role_has_permissions" VALUES (42, 16);
INSERT INTO "public"."role_has_permissions" VALUES (43, 16);
INSERT INTO "public"."role_has_permissions" VALUES (44, 16);
INSERT INTO "public"."role_has_permissions" VALUES (45, 16);
INSERT INTO "public"."role_has_permissions" VALUES (46, 16);
INSERT INTO "public"."role_has_permissions" VALUES (47, 16);
INSERT INTO "public"."role_has_permissions" VALUES (48, 16);
INSERT INTO "public"."role_has_permissions" VALUES (49, 16);
INSERT INTO "public"."role_has_permissions" VALUES (50, 16);
INSERT INTO "public"."role_has_permissions" VALUES (51, 16);
INSERT INTO "public"."role_has_permissions" VALUES (52, 16);
INSERT INTO "public"."role_has_permissions" VALUES (53, 16);
INSERT INTO "public"."role_has_permissions" VALUES (54, 16);
INSERT INTO "public"."role_has_permissions" VALUES (55, 16);
INSERT INTO "public"."role_has_permissions" VALUES (56, 16);
INSERT INTO "public"."role_has_permissions" VALUES (57, 16);
INSERT INTO "public"."role_has_permissions" VALUES (58, 16);
INSERT INTO "public"."role_has_permissions" VALUES (59, 16);
INSERT INTO "public"."role_has_permissions" VALUES (60, 16);
INSERT INTO "public"."role_has_permissions" VALUES (61, 16);
INSERT INTO "public"."role_has_permissions" VALUES (62, 16);
INSERT INTO "public"."role_has_permissions" VALUES (63, 16);
INSERT INTO "public"."role_has_permissions" VALUES (64, 16);
INSERT INTO "public"."role_has_permissions" VALUES (65, 16);
INSERT INTO "public"."role_has_permissions" VALUES (66, 16);
INSERT INTO "public"."role_has_permissions" VALUES (67, 16);
INSERT INTO "public"."role_has_permissions" VALUES (68, 16);
INSERT INTO "public"."role_has_permissions" VALUES (69, 16);
INSERT INTO "public"."role_has_permissions" VALUES (70, 16);
INSERT INTO "public"."role_has_permissions" VALUES (71, 16);
INSERT INTO "public"."role_has_permissions" VALUES (72, 16);
INSERT INTO "public"."role_has_permissions" VALUES (73, 16);
INSERT INTO "public"."role_has_permissions" VALUES (74, 16);
INSERT INTO "public"."role_has_permissions" VALUES (75, 16);
INSERT INTO "public"."role_has_permissions" VALUES (76, 16);
INSERT INTO "public"."role_has_permissions" VALUES (77, 16);
INSERT INTO "public"."role_has_permissions" VALUES (78, 16);
INSERT INTO "public"."role_has_permissions" VALUES (79, 16);
INSERT INTO "public"."role_has_permissions" VALUES (80, 16);
INSERT INTO "public"."role_has_permissions" VALUES (81, 16);
INSERT INTO "public"."role_has_permissions" VALUES (82, 16);
INSERT INTO "public"."role_has_permissions" VALUES (83, 16);
INSERT INTO "public"."role_has_permissions" VALUES (84, 16);
INSERT INTO "public"."role_has_permissions" VALUES (85, 16);
INSERT INTO "public"."role_has_permissions" VALUES (86, 16);
INSERT INTO "public"."role_has_permissions" VALUES (87, 16);
INSERT INTO "public"."role_has_permissions" VALUES (88, 16);
INSERT INTO "public"."role_has_permissions" VALUES (89, 16);
INSERT INTO "public"."role_has_permissions" VALUES (90, 16);
INSERT INTO "public"."role_has_permissions" VALUES (91, 16);
INSERT INTO "public"."role_has_permissions" VALUES (92, 16);
INSERT INTO "public"."role_has_permissions" VALUES (93, 16);

-- ----------------------------
-- Primary Key structure for table role_has_permissions
-- ----------------------------
ALTER TABLE "public"."role_has_permissions" ADD CONSTRAINT "role_has_permissions_pkey" PRIMARY KEY ("permission_id", "role_id");

-- ----------------------------
-- Foreign Keys structure for table role_has_permissions
-- ----------------------------
ALTER TABLE "public"."role_has_permissions" ADD CONSTRAINT "role_has_permissions_permission_id_foreign" FOREIGN KEY ("permission_id") REFERENCES "public"."permissions" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;
ALTER TABLE "public"."role_has_permissions" ADD CONSTRAINT "role_has_permissions_role_id_foreign" FOREIGN KEY ("role_id") REFERENCES "public"."roles" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;
