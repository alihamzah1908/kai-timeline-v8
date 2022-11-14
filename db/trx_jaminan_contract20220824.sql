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

 Date: 24/08/2022 05:58:38
*/


-- ----------------------------
-- Table structure for trx_jaminan_contract
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_jaminan_contract";
CREATE TABLE "public"."trx_jaminan_contract" (
  "performance_contract_id" int8 NOT NULL DEFAULT nextval('trx_jaminan_contract_draft_contract_id_seq'::regclass),
  "report_pbj_contract_id" int4,
  "sp3_id" int4,
  "file_performance_contract" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_submit" date,
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "bank_name" varchar(100) COLLATE "pg_catalog"."default",
  "bank_cab" text COLLATE "pg_catalog"."default",
  "no_bank_garansi" varchar(255) COLLATE "pg_catalog"."default",
  "minimum_jaminan" varchar(255) COLLATE "pg_catalog"."default",
  "start_berlaku" date,
  "end_berlaku" date,
  "nilai_jaminan" varchar(100) COLLATE "pg_catalog"."default",
  "tanggal_terbit_jamlak" date,
  "catatan_performance" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Primary Key structure for table trx_jaminan_contract
-- ----------------------------
ALTER TABLE "public"."trx_jaminan_contract" ADD CONSTRAINT "trx_jaminan_contract_pkey" PRIMARY KEY ("performance_contract_id");
