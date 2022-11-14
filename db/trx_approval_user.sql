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

 Date: 17/08/2022 10:07:06
*/


-- ----------------------------
-- Table structure for trx_approval_user
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_approval_user";
CREATE TABLE "public"."trx_approval_user" (
  "approval_user_contract_id" int8 NOT NULL DEFAULT nextval('trx_verifikasi_contract_verifikasi_contract_id_seq'::regclass),
  "report_pbj_contract_id" int4,
  "sp3_id" int4,
  "file_approval_user" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_submit" date,
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "catatan_user_contract" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of trx_approval_user
-- ----------------------------
INSERT INTO "public"."trx_approval_user" VALUES (20, 86, 87, 'file-approval-user-contract-2022-08-16-15-29-28.pdf', '2022-08-16', '6', NULL, '2022-08-16 15:29:28', '2022-08-16 15:29:28', NULL);

-- ----------------------------
-- Primary Key structure for table trx_approval_user
-- ----------------------------
ALTER TABLE "public"."trx_approval_user" ADD CONSTRAINT "trx_approval_logistik_copy1_pkey" PRIMARY KEY ("approval_user_contract_id");
