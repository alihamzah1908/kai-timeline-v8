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

 Date: 06/10/2022 23:00:29
*/


-- ----------------------------
-- Table structure for trx_undangan_rks
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_undangan_rks";
CREATE TABLE "public"."trx_undangan_rks" (
  "undangan_id" int8 NOT NULL DEFAULT nextval('draft_rks_file_rks_id_seq'::regclass),
  "sp3_id" int4,
  "file_penawaran" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_rks" date,
  "created_by" varchar(11) COLLATE "pg_catalog"."default",
  "updated_by" varchar(11) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "file_dokumen" varchar(255) COLLATE "pg_catalog"."default",
  "metode" varchar(150) COLLATE "pg_catalog"."default",
  "catatan" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of trx_undangan_rks
-- ----------------------------
