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

 Date: 12/10/2022 18:13:11
*/


-- ----------------------------
-- Table structure for trx_undangan_kkn
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_undangan_kkn";
CREATE TABLE "public"."trx_undangan_kkn" (
  "trx_undangan_id" int8 NOT NULL DEFAULT nextval('trx_undangan_id_seq'::regclass),
  "sp3_id" int8,
  "vendor_code" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_undangan_kkn" date,
  "notes" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6)
)
;

-- ----------------------------
-- Primary Key structure for table trx_undangan_kkn
-- ----------------------------
ALTER TABLE "public"."trx_undangan_kkn" ADD CONSTRAINT "trx_undangan_kkn_pkey" PRIMARY KEY ("trx_undangan_id");
