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

 Date: 17/08/2022 10:07:39
*/


-- ----------------------------
-- Table structure for trx_mppl
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_mppl";
CREATE TABLE "public"."trx_mppl" (
  "mppl_contract_id" int8 NOT NULL DEFAULT nextval('trx_verifikasi_contract_verifikasi_contract_id_seq'::regclass),
  "report_pbj_contract_id" int4,
  "sp3_id" int4,
  "start_date_mppl" varchar COLLATE "pg_catalog"."default",
  "end_date_mppl" varchar COLLATE "pg_catalog"."default",
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "off_days" varchar(100) COLLATE "pg_catalog"."default",
  "uncontroll_days" varchar(100) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of trx_mppl
-- ----------------------------
INSERT INTO "public"."trx_mppl" VALUES (23, 86, 87, NULL, '2022-08-16', '6', NULL, '2022-08-16 16:12:19', '2022-08-16 16:12:19', '12', '12');

-- ----------------------------
-- Primary Key structure for table trx_mppl
-- ----------------------------
ALTER TABLE "public"."trx_mppl" ADD CONSTRAINT "trx_vendor_contract_copy1_pkey2" PRIMARY KEY ("mppl_contract_id");
