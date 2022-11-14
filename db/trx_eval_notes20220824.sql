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

 Date: 24/08/2022 05:57:19
*/


-- ----------------------------
-- Table structure for trx_eval_notes
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_eval_notes";
CREATE TABLE "public"."trx_eval_notes" (
  "trx_eval_notes_id" int8 NOT NULL DEFAULT nextval('trx_eval_notes_trx_eval_notes_id_seq'::regclass),
  "sp3_id" int4,
  "catatan_evaluasi" text COLLATE "pg_catalog"."default",
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Primary Key structure for table trx_eval_notes
-- ----------------------------
ALTER TABLE "public"."trx_eval_notes" ADD CONSTRAINT "trx_eval_notes_pkey" PRIMARY KEY ("trx_eval_notes_id");
