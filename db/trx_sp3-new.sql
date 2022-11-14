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

 Date: 17/08/2022 10:09:59
*/


-- ----------------------------
-- Table structure for trx_sp3
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_sp3";
CREATE TABLE "public"."trx_sp3" (
  "sp3_id" int8 NOT NULL DEFAULT nextval('trx_sp3_sp3_id_seq'::regclass),
  "timeline_id" int4,
  "directorate_cd" varchar(20) COLLATE "pg_catalog"."default",
  "division_cd" varchar(20) COLLATE "pg_catalog"."default",
  "department_cd" varchar(20) COLLATE "pg_catalog"."default",
  "judul_pengadaan" varchar(200) COLLATE "pg_catalog"."default",
  "no_sp3" varchar(20) COLLATE "pg_catalog"."default",
  "no_pr" varchar(20) COLLATE "pg_catalog"."default",
  "tanggal_pr" timestamp(0),
  "pr_sign_by" varchar(20) COLLATE "pg_catalog"."default",
  "nilai_pr" int4,
  "type_tax" int4 NOT NULL,
  "nilai_tax" int4 NOT NULL,
  "no_mi" varchar(100) COLLATE "pg_catalog"."default",
  "tanggal_justifikasi" date,
  "no_rab" varchar(100) COLLATE "pg_catalog"."default",
  "tanggal_rab" timestamp(0),
  "no_kak" varchar(100) COLLATE "pg_catalog"."default",
  "tanggal_kak" timestamp(0) NOT NULL,
  "proses_st" varchar(50) COLLATE "pg_catalog"."default",
  "type_metode" int4 NOT NULL,
  "nama_vendor" varchar(255) COLLATE "pg_catalog"."default",
  "keterangan" text COLLATE "pg_catalog"."default" NOT NULL,
  "created_by" int4 NOT NULL,
  "updated_by" int4,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "no_justifikasi" varchar(255) COLLATE "pg_catalog"."default",
  "coa" text COLLATE "pg_catalog"."default",
  "jenis_barang" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_justifikasi_pemilihan" date
)
;

-- ----------------------------
-- Records of trx_sp3
-- ----------------------------
INSERT INTO "public"."trx_sp3" VALUES (86, 40, 'CT', 'CTI', 'CTIO', 'PENGADAAN GERBONG', 'OP/CTI/2022/86', NULL, NULL, NULL, 500000000, 3, 20000000, '777', NULL, '777', NULL, '999', '2022-08-16 12:09:24', 'PROSES_SSP3', 3, 'PT Sarana Cipta Karya', 'KETERANGAN', 4, NULL, '2022-08-16 12:09:24', '2022-08-16 12:09:24', NULL, 'null', 'Non-Import', NULL);
INSERT INTO "public"."trx_sp3" VALUES (87, 37, 'CT', 'CTI', 'CTIO', 'PENGADAAN KURSI KERETA', 'OP/CTI/2022/87', NULL, NULL, NULL, 250000000, 2, 27500000, '123B', NULL, '123B', NULL, '123B', '2022-08-16 12:12:44', 'PROSES_PCP', 1, 'PT POINTERA AKTUARIAL STRATEGIS', 'KETERANGAN', 4, NULL, '2022-08-16 12:12:44', '2022-08-16 13:38:07', '123B', 'null', 'Non-Import', '2022-08-16');

-- ----------------------------
-- Primary Key structure for table trx_sp3
-- ----------------------------
ALTER TABLE "public"."trx_sp3" ADD CONSTRAINT "trx_sp3_pkey" PRIMARY KEY ("sp3_id");
