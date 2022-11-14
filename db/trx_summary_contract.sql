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

 Date: 06/10/2022 21:36:38
*/


-- ----------------------------
-- Table structure for trx_summary_contract
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_summary_contract";
CREATE TABLE "public"."trx_summary_contract" (
  "trx_summary_contract_id" int8 NOT NULL DEFAULT nextval('trx_summary_contract_trx_summary_contract_id_seq'::regclass),
  "nomor_contract" varchar(255) COLLATE "pg_catalog"."default",
  "tgl_contract" date,
  "total_day_work" varchar(100) COLLATE "pg_catalog"."default",
  "uncontroll_days" varchar(255) COLLATE "pg_catalog"."default",
  "file_perjanjian" varchar(255) COLLATE "pg_catalog"."default",
  "notes" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "sp3_id" int4,
  "created_by" varchar(100) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of trx_summary_contract
-- ----------------------------
INSERT INTO "public"."trx_summary_contract" VALUES (5, '01/01/100/2020', '2022-10-06', '20', '21', 'file-perjanjian-2022-10-06-14-23-15.xlsx', 'ok', '2022-10-06 14:23:15', '2022-10-06 14:23:15', 96, '3');

-- ----------------------------
-- Primary Key structure for table trx_summary_contract
-- ----------------------------
ALTER TABLE "public"."trx_summary_contract" ADD CONSTRAINT "trx_summary_contract_pkey" PRIMARY KEY ("trx_summary_contract_id");
