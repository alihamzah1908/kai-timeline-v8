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

 Date: 03/10/2022 20:32:18
*/


-- ----------------------------
-- Table structure for inklaring
-- ----------------------------
DROP TABLE IF EXISTS "public"."inklaring";
CREATE TABLE "public"."inklaring" (
  "trx_inklaring_id" int4 NOT NULL,
  "judul_pengadaan" text COLLATE "pg_catalog"."default",
  "vendor_name" varchar(255) COLLATE "pg_catalog"."default",
  "thn_aggrn_rkap" varchar(255) COLLATE "pg_catalog"."default",
  "kategori_import" varchar(255) COLLATE "pg_catalog"."default",
  "jenis_kontrak" varchar(255) COLLATE "pg_catalog"."default",
  "no_kontrak" varchar(255) COLLATE "pg_catalog"."default",
  "tgl_kontrak" date,
  "file_kontrak" varchar(255) COLLATE "pg_catalog"."default",
  "non_termin" varchar(255) COLLATE "pg_catalog"."default",
  "mppl_kontrak" varchar(255) COLLATE "pg_catalog"."default",
  "no_jamlak" varchar(255) COLLATE "pg_catalog"."default",
  "tgl_jamlak" date,
  "file_jamlak" varchar(255) COLLATE "pg_catalog"."default",
  "mppl_jamlak" varchar(255) COLLATE "pg_catalog"."default",
  "start_jamlak" varchar(255) COLLATE "pg_catalog"."default",
  "end_jamlak" varchar(255) COLLATE "pg_catalog"."default",
  "ktgr_pmbyrn_lc" varchar(255) COLLATE "pg_catalog"."default",
  "surat_perm_pemb_lc" varchar(255) COLLATE "pg_catalog"."default",
  "tgl_pemb_lc" varchar(255) COLLATE "pg_catalog"."default",
  "no_tgl_lc" varchar(255) COLLATE "pg_catalog"."default",
  "doc_lc" varchar(255) COLLATE "pg_catalog"."default",
  "file_lc" varchar(255) COLLATE "pg_catalog"."default",
  "ket_lc" varchar(255) COLLATE "pg_catalog"."default",
  "eta_pengiriman" varchar(255) COLLATE "pg_catalog"."default",
  "eta_tiba" varchar(255) COLLATE "pg_catalog"."default",
  "no_tgl_hbl" varchar(255) COLLATE "pg_catalog"."default",
  "tgl_hbl" date,
  "tgl_inv_hbl" date,
  "tgl_pck_list_hbl" date,
  "legal_kci" varchar(255) COLLATE "pg_catalog"."default",
  "tgl_sktd" date,
  "srt_kuasa_do" varchar(255) COLLATE "pg_catalog"."default",
  "srt_kuasa_pabean" varchar(255) COLLATE "pg_catalog"."default",
  "tgl_sppb" date,
  "tgl_dokumen_tambahan_hbl" date,
  "keterangan" text COLLATE "pg_catalog"."default",
  "tgl_cds" date,
  "tgl_diterima" date,
  "ket_cds" text COLLATE "pg_catalog"."default",
  "tgl_pengujian_bast" date,
  "tgl_bast" date,
  "ket_bast" text COLLATE "pg_catalog"."default",
  "no_purpose" varchar COLLATE "pg_catalog"."default",
  "tgl_bayar_vendor" varchar COLLATE "pg_catalog"."default",
  "ket_pemb" text COLLATE "pg_catalog"."default",
  "no_invoice" text COLLATE "pg_catalog"."default",
  "tgl_lapor_simodis" date,
  "ket_simodis" text COLLATE "pg_catalog"."default",
  "status_monitoring" varchar(255) COLLATE "pg_catalog"."default",
  "note" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(6),
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_at" timestamp(6)
)
;

-- ----------------------------
-- Records of inklaring
-- ----------------------------
INSERT INTO "public"."inklaring" VALUES (1, 'Procurement Sparepart Balancer Assembly for side window etc
', 'JR East Rail Car Technology & Maintanence Co., Ltd
', '2021 - LUNCURAN 
', 'NON KERETA 
', 'NON MULTI YEARS
', '233/HK-PG/KCI/VIII/2021
', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DONE 
', NULL, NULL, NULL, NULL);
INSERT INTO "public"."inklaring" VALUES (2, 'Procurement of Sparepart EMU 05 Metro Series
', 'JR East Rail Car Technology & Maintanence Co., Ltd
', '2022', 'NON KERETA 
', 'NON MULTI YEARS
', '362.1/HK-PG/KCI/XII/2021
', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' ETA OKTOBER 
', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Primary Key structure for table inklaring
-- ----------------------------
ALTER TABLE "public"."inklaring" ADD CONSTRAINT "inklaring_pkey" PRIMARY KEY ("trx_inklaring_id");
