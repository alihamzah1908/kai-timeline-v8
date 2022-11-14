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

 Date: 24/08/2022 05:58:02
*/


-- ----------------------------
-- Table structure for trx_spr
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_spr";
CREATE TABLE "public"."trx_spr" (
  "trx_spr_id" int8 NOT NULL DEFAULT nextval('trx_spr_trx_spr_id_seq'::regclass),
  "sp3_id" int4,
  "vendor_code" varchar(255) COLLATE "pg_catalog"."default",
  "total_hari_kerja" varchar(100) COLLATE "pg_catalog"."default",
  "uncontrolled_days" varchar(100) COLLATE "pg_catalog"."default",
  "catatan_spr" text COLLATE "pg_catalog"."default",
  "file_jamlak" varchar(255) COLLATE "pg_catalog"."default",
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Primary Key structure for table trx_spr
-- ----------------------------
ALTER TABLE "public"."trx_spr" ADD CONSTRAINT "trx_spr_pkey" PRIMARY KEY ("trx_spr_id");
