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

 Date: 17/08/2022 13:15:40
*/


-- ----------------------------
-- Table structure for trx_berita_acara_hasil_pelelangan
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_berita_acara_hasil_pelelangan";
CREATE TABLE "public"."trx_berita_acara_hasil_pelelangan" (
  "berita_acara_id" int8 NOT NULL DEFAULT nextval('trx_berita_acara_hasil_pelelangan_berita_acara_id_seq'::regclass),
  "sp3_id" int4,
  "vendor_code" varchar(255) COLLATE "pg_catalog"."default",
  "file_berita_acara" varchar(255) COLLATE "pg_catalog"."default",
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "tanggal_berita_acara" date,
  "catatan_berita_acara" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Primary Key structure for table trx_berita_acara_hasil_pelelangan
-- ----------------------------
ALTER TABLE "public"."trx_berita_acara_hasil_pelelangan" ADD CONSTRAINT "trx_berita_acara_hasil_pelelangan_pkey" PRIMARY KEY ("berita_acara_id");
