/*
 Navicat Premium Data Transfer

 Source Server         : kci-log
 Source Server Type    : PostgreSQL
 Source Server Version : 140005
 Source Host           : 10.20.12.81:5432
 Source Catalog        : postgres
 Source Schema         : auth

 Target Server Type    : PostgreSQL
 Target Server Version : 140005
 File Encoding         : 65001

 Date: 17/10/2022 18:21:08
*/


-- ----------------------------
-- Table structure for mapping_type
-- ----------------------------
DROP TABLE IF EXISTS "auth"."mapping_type";
CREATE TABLE "auth"."mapping_type" (
  "mapping_id" int8 NOT NULL DEFAULT 10,
  "mapping_cd" int4 NOT NULL DEFAULT 1,
  "type_column" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  "mapping_desc" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  "keterangan" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "created_by" varchar(200) COLLATE "pg_catalog"."default",
  "updated_by" varchar(200) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of mapping_type
-- ----------------------------
INSERT INTO "auth"."mapping_type" VALUES (1, 1, 'public.trx_timeline.type_tax', 'Pajak Tidak Dipungut', NULL, '2022-07-17 15:30:49', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (2, 2, 'public.trx_timeline.type_tax', 'Pajak Dipungut (11%)', NULL, '2022-07-17 15:31:39', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (3, 3, 'public.trx_timeline.type_tax', 'Pajak Dipungut Sebagian', NULL, '2022-07-17 15:31:58', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (4, 1, 'public.trx_sp3.type_metode', 'Penunjukan Langsung', NULL, '2022-07-17 15:36:23', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (5, 2, 'public.trx_sp3.type_metode', 'Pemilihan Langsung', NULL, '2022-07-17 15:36:41', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (6, 3, 'public.trx_sp3.type_metode', 'Pelelangan Terbuka', NULL, '2022-07-17 15:37:11', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (7, 1, 'public.trx_timeline.proses_st', 'PROSES_DT', 'Draft Timeline', '2022-07-25 23:28:37', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (11, 4, 'public.trx_sp3.proses_st', 'PROSES_DSP3', 'Draft SP3', '2022-07-25 23:31:06', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (13, 6, 'public.trx_sp3.proses_st', 'PROSES_ESP3', 'Evaluated SP3', '2022-07-25 23:32:08', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (8, 2, 'public.trx_timeline.proses_st', 'PROSES_ST', 'Submited Timeline', '2022-07-25 23:29:01', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (9, 3, 'public.trx_timeline.proses_st', 'PROSES_AT', 'Approved Timeline', '2022-07-25 23:29:34', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (10, 3, 'public.trx_timeline.proses_st', 'PROSES_CT', 'Cancelled Timeline', '2022-07-25 23:30:33', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (12, 5, 'public.trx_sp3.proses_st', 'PROSES_SSP3', 'Submited SP3', '2022-07-25 23:31:24', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (16, 3, 'public.trx_timeline.proses_st', 'PROSES_RT', 'Rejected Timeline', '2022-07-25 23:36:00', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (14, 7, 'public.trx_sp3.proses_st', 'PROSES_DRKS', 'Drafting RKS', '2022-07-25 23:32:37', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (15, 8, 'public.trx_sp3.proses_st', 'PROSES_RRKS', 'Reviewing RKS', '2022-07-25 23:33:00', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (17, 9, 'public.trx_sp3.proses_st', 'PROSES_PP', 'Pengumuman Pengadaan', '2022-07-25 23:41:26', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (18, 9, 'public.trx_sp3.proses_st', 'PROSES_PUP', 'Pengumuman Ulang', '2022-07-25 23:42:42', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (19, 9, 'public.trx_sp3.proses_st', 'PROSES_PGL', 'Gagal Lelang', '2022-07-25 23:49:09', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (20, 9, 'public.trx_sp3.proses_st', 'PROSES_PBL', 'Batal Lelang', '2022-07-25 23:49:28', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (21, 10, 'public.trx_sp3.proses_st', 'PROSES_SB', 'Submitting Bidders', '2022-07-25 23:52:00', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (22, 11, 'public.trx_sp3.proses_st', 'PROSES_AL', 'Aanwidjzing', '2022-07-25 23:53:05', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (24, 13, 'public.trx_sp3.proses_st', 'PROSES_EDT', 'Eval Dok Teknis', '2022-07-25 23:55:46', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (25, 14, 'public.trx_sp3.proses_st', 'PROSES_EDH', 'Eval Dok Harga', '2022-07-25 23:56:02', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (23, 12, 'public.trx_sp3.proses_st', 'PROSES_EDA', 'Eval Dok Admin', '2022-07-25 23:55:19', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (26, 15, 'public.trx_sp3.proses_st', 'PROSES_KKN', 'Klarif Negoisasi', '2022-07-25 23:57:21', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (27, 16, 'public.trx_sp3.proses_st', 'PROSES_PCP', 'Pengumuman Pemenang', '2022-07-25 23:58:38', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (28, 17, 'public.trx_sp3.proses_st', 'PROSES_DC', 'Drafting Contract', '2022-07-26 00:00:01', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (29, 18, 'public.trx_sp3.proses_st', 'PROSES_RDC', 'Reviewing D.Contract', '2022-07-26 00:01:21', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (30, 17, 'public.trx_sp3.proses_st', 'PROSES_UJP', 'Upload Jaminan', '2022-07-26 00:03:29', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (31, 18, 'public.trx_sp3.proses_st', 'PROSES_VJP', 'Verifikasi Jaminan', '2022-07-26 00:03:52', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (32, 19, 'public.trx_sp3.proses_st', 'PROSES_CAC', 'Cir.Approv Contract', '2022-07-26 00:07:30', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (34, 21, 'public.trx_sp3.proses_st', 'PROSES_KAC', 'KCI Assigning Con', '2022-07-26 00:09:26', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (33, 20, 'public.trx_sp3.proses_st', 'PROSES_VAC', 'Vendor Assigning Con', '2022-07-26 00:08:20', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (35, 22, 'public.trx_sp3.proses_st', 'PROSES_CR', 'Contract Release', '2022-07-26 00:10:42', NULL, 'SYSADMIN', NULL);
INSERT INTO "auth"."mapping_type" VALUES (37, 23, 'public.trx_sp3.proses_st', 'PROSES_PPDP', 'Pembukaan Dokumen Penawaran', NULL, NULL, NULL, NULL);
INSERT INTO "auth"."mapping_type" VALUES (36, 23, 'public.trx_sp3.proses_st', 'PROSES_PDP', 'Pemasukan Dokumen Penawaran', NULL, NULL, NULL, NULL);
INSERT INTO "auth"."mapping_type" VALUES (37, 23, 'public.trx_sp3.proses_st', 'PROSES_EP', 'Evaluasi Penawaran', NULL, NULL, NULL, NULL);
INSERT INTO "auth"."mapping_type" VALUES (38, 23, 'public.trx_sp3.proses_st', 'PROSES_UPCP', 'Usulan dan Penetapan Calon Pemenang', NULL, NULL, NULL, NULL);
INSERT INTO "auth"."mapping_type" VALUES (10, 23, 'public.trx_sp3.proses_st', 'PROSES_ALG', 'Approval Logistik', NULL, NULL, NULL, NULL);
INSERT INTO "auth"."mapping_type" VALUES (10, 23, 'publuc.trx_sp3.proses_st', 'PROSES_APU', 'Approval User', NULL, NULL, NULL, NULL);
INSERT INTO "auth"."mapping_type" VALUES (10, 23, 'public.trx_sp3.proses_st', 'PROSES_BAHP', 'Berita Acara Hasil Pelelangan', NULL, NULL, NULL, NULL);
INSERT INTO "auth"."mapping_type" VALUES (10, 23, 'public.trx_sp3.proses_st', 'PROSES_APL', 'Approval Legal', NULL, NULL, NULL, NULL);
