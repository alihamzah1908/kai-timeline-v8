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

 Date: 23/10/2022 21:05:36
*/


-- ----------------------------
-- Table structure for trx_berita_acara
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_berita_acara";
CREATE TABLE "public"."trx_berita_acara" (
  "trx_berita_acara_id" int8 NOT NULL DEFAULT nextval('trx_berita_acara_id_seq'::regclass),
  "file_berita_acara" varchar(255) COLLATE "pg_catalog"."default",
  "nomor_spr" varchar(255) COLLATE "pg_catalog"."default",
  "step_process" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "updated_at" timestamp(6),
  "sp3_id" int8,
  "notes" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Primary Key structure for table trx_berita_acara
-- ----------------------------
ALTER TABLE "public"."trx_berita_acara" ADD CONSTRAINT "trx_berita_acara_pkey" PRIMARY KEY ("trx_berita_acara_id");
