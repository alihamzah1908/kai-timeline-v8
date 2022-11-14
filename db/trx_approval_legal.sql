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

 Date: 12/10/2022 20:13:10
*/


-- ----------------------------
-- Table structure for trx_approval_legal
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_approval_legal";
CREATE TABLE "public"."trx_approval_legal" (
  "approval_legal_contract_id" int8 NOT NULL DEFAULT nextval('trx_verifikasi_contract_verifikasi_contract_id_seq'::regclass),
  "report_pbj_contract_id" int4,
  "sp3_id" int4,
  "file_approval_legal" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_submit" date,
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "notes" text COLLATE "pg_catalog"."default",
  "tanggal_end_submit" date
)
;

-- ----------------------------
-- Primary Key structure for table trx_approval_legal
-- ----------------------------
ALTER TABLE "public"."trx_approval_legal" ADD CONSTRAINT "trx_approval_user_copy1_pkey" PRIMARY KEY ("approval_legal_contract_id");
