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

 Date: 14/09/2022 21:25:35
*/


-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS "public"."permissions";
CREATE TABLE "public"."permissions" (
  "id" int8 NOT NULL DEFAULT nextval('permissions_id_seq'::regclass),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "guard_name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO "public"."permissions" VALUES (26, 'role-list', 'web', '2022-07-12 04:10:54', '2022-07-12 04:10:54');
INSERT INTO "public"."permissions" VALUES (27, 'role-create', 'web', '2022-07-12 04:10:54', '2022-07-12 04:10:54');
INSERT INTO "public"."permissions" VALUES (28, 'role-edit', 'web', '2022-07-12 04:10:54', '2022-07-12 04:10:54');
INSERT INTO "public"."permissions" VALUES (29, 'role-delete', 'web', '2022-07-12 04:10:54', '2022-07-12 04:10:54');
INSERT INTO "public"."permissions" VALUES (30, 'user-list', 'web', '2022-07-23 14:32:52', '2022-07-23 14:32:52');
INSERT INTO "public"."permissions" VALUES (31, 'user-create', 'web', '2022-07-23 14:32:52', '2022-07-23 14:32:52');
INSERT INTO "public"."permissions" VALUES (32, 'user-edit', 'web', '2022-07-23 14:32:52', '2022-07-23 14:32:52');
INSERT INTO "public"."permissions" VALUES (33, 'user-delete', 'web', '2022-07-23 14:32:52', '2022-07-23 14:32:52');
INSERT INTO "public"."permissions" VALUES (34, 'timeline-list', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (35, 'timeline-create', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (36, 'timeline-edit', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (37, 'timeline-delete', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (38, 'timeline.approval-list', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (39, 'timeline.approval-create', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (40, 'timeline.approval-edit', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (41, 'timeline.approval-delete', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (42, 'sp3-list', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (43, 'sp3-create', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (44, 'sp3-edit', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (45, 'sp3-delete', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (46, 'sp3.approval-list', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (47, 'sp3.approval-create', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (48, 'sp3.approval-edit', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (49, 'sp3.approval-delete', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (50, 'pbj-list', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (51, 'pbj-create', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (52, 'pbj-edit', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (53, 'pbj-delete', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (54, 'pbj.approval-list', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (55, 'pbj.approval-create', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (56, 'pbj.approval-edit', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (57, 'pbj.approval-delete', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (58, 'contract-list', 'web', '2022-09-14 13:44:55', '2022-09-14 13:44:55');
INSERT INTO "public"."permissions" VALUES (59, 'contract-create', 'web', '2022-09-14 13:44:55', '2022-09-14 13:44:55');
INSERT INTO "public"."permissions" VALUES (60, 'contract-edit', 'web', '2022-09-14 13:44:55', '2022-09-14 13:44:55');
INSERT INTO "public"."permissions" VALUES (61, 'contract-delete', 'web', '2022-09-14 13:44:55', '2022-09-14 13:44:55');
INSERT INTO "public"."permissions" VALUES (62, 'contract.approval-list', 'web', '2022-09-14 13:44:55', '2022-09-14 13:44:55');
INSERT INTO "public"."permissions" VALUES (63, 'contract.approval-create', 'web', '2022-09-14 13:44:55', '2022-09-14 13:44:55');
INSERT INTO "public"."permissions" VALUES (64, 'contract.approval-edit', 'web', '2022-09-14 13:44:55', '2022-09-14 13:44:55');
INSERT INTO "public"."permissions" VALUES (65, 'contract.approval-delete', 'web', '2022-09-14 13:44:56', '2022-09-14 13:44:56');
INSERT INTO "public"."permissions" VALUES (66, 'warehouse-card-list', 'web', '2022-09-14 13:46:10', '2022-09-14 13:46:10');
INSERT INTO "public"."permissions" VALUES (67, 'warehouse-card-create', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (68, 'warehouse-card-edit', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (69, 'warehouse-card-delete', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (70, 'warehouse-part-list', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (71, 'warehouse-part-create', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (72, 'warehouse-part-edit', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (73, 'warehouse-part-delete', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (74, 'warehouse-waste-list', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (75, 'warehouse-waste-create', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (76, 'warehouse-waste-edit', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (77, 'warehouse-waste-delete', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (78, 'vendor-list', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (79, 'vendor-create', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (80, 'vendor-edit', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (81, 'vendor-delete', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (82, 'vendor-blacklist-list', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (83, 'vendor-blacklist-create', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (84, 'vendor-blacklist-edit', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (85, 'vendor-blacklist-delete', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (86, 'harga-satuan-list', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (87, 'harga-satuan-create', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (88, 'harga-satuan-edit', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (89, 'harga-satuan-delete', 'web', '2022-09-14 13:46:11', '2022-09-14 13:46:11');
INSERT INTO "public"."permissions" VALUES (90, 'npp-list', 'web', '2022-09-14 14:06:01', '2022-09-14 14:06:01');
INSERT INTO "public"."permissions" VALUES (91, 'npp-create', 'web', '2022-09-14 14:06:02', '2022-09-14 14:06:02');
INSERT INTO "public"."permissions" VALUES (92, 'npp-edit', 'web', '2022-09-14 14:06:02', '2022-09-14 14:06:02');
INSERT INTO "public"."permissions" VALUES (93, 'npp-delete', 'web', '2022-09-14 14:06:02', '2022-09-14 14:06:02');

-- ----------------------------
-- Uniques structure for table permissions
-- ----------------------------
ALTER TABLE "public"."permissions" ADD CONSTRAINT "permissions_name_guard_name_unique" UNIQUE ("name", "guard_name");

-- ----------------------------
-- Primary Key structure for table permissions
-- ----------------------------
ALTER TABLE "public"."permissions" ADD CONSTRAINT "permissions_pkey" PRIMARY KEY ("id");
