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

 Date: 17/08/2022 10:06:54
*/


-- ----------------------------
-- Table structure for trx_approval_logistik
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_approval_logistik";
CREATE TABLE "public"."trx_approval_logistik" (
  "approval_contract_id" int8 NOT NULL DEFAULT nextval('trx_verifikasi_contract_verifikasi_contract_id_seq'::regclass),
  "report_pbj_contract_id" int4,
  "sp3_id" int4,
  "file_approval_logistik" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_submit" date,
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "catatan_logistik" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Primary Key structure for table trx_approval_logistik
-- ----------------------------
ALTER TABLE "public"."trx_approval_logistik" ADD CONSTRAINT "trx_vendor_contract_copy1_pkey1" PRIMARY KEY ("approval_contract_id");
