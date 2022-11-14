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

 Date: 10/08/2022 09:32:35
*/


-- ----------------------------
-- Sequence structure for draft_rks_file_rks_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."draft_rks_file_rks_id_seq";
CREATE SEQUENCE "public"."draft_rks_file_rks_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for failed_jobs_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."failed_jobs_id_seq";
CREATE SEQUENCE "public"."failed_jobs_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for migrations_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."migrations_id_seq";
CREATE SEQUENCE "public"."migrations_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for permissions_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."permissions_id_seq";
CREATE SEQUENCE "public"."permissions_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for report_pbj_contract_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."report_pbj_contract_id_seq";
CREATE SEQUENCE "public"."report_pbj_contract_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for report_realisasi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."report_realisasi_id_seq";
CREATE SEQUENCE "public"."report_realisasi_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for report_timeline_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."report_timeline_id_seq";
CREATE SEQUENCE "public"."report_timeline_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for roles_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."roles_id_seq";
CREATE SEQUENCE "public"."roles_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for sp3_file_sp3_file_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."sp3_file_sp3_file_id_seq";
CREATE SEQUENCE "public"."sp3_file_sp3_file_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trx_aanwidjzing_aanwidjzing_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trx_aanwidjzing_aanwidjzing_id_seq";
CREATE SEQUENCE "public"."trx_aanwidjzing_aanwidjzing_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trx_berita_acara_hasil_pelelangan_berita_acara_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trx_berita_acara_hasil_pelelangan_berita_acara_id_seq";
CREATE SEQUENCE "public"."trx_berita_acara_hasil_pelelangan_berita_acara_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trx_document_penawaran_document_penawaran_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trx_document_penawaran_document_penawaran_id_seq";
CREATE SEQUENCE "public"."trx_document_penawaran_document_penawaran_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trx_eval_sp3_eval_sp3_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trx_eval_sp3_eval_sp3_id_seq";
CREATE SEQUENCE "public"."trx_eval_sp3_eval_sp3_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trx_evaluasi_dokumen_penawaran_document_penawaran_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trx_evaluasi_dokumen_penawaran_document_penawaran_id_seq";
CREATE SEQUENCE "public"."trx_evaluasi_dokumen_penawaran_document_penawaran_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trx_file_berita_acara_aanwidjzing_berita_acara_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trx_file_berita_acara_aanwidjzing_berita_acara_id_seq";
CREATE SEQUENCE "public"."trx_file_berita_acara_aanwidjzing_berita_acara_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trx_jadwal_pelaksanaan_pelaksanaan_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trx_jadwal_pelaksanaan_pelaksanaan_id_seq";
CREATE SEQUENCE "public"."trx_jadwal_pelaksanaan_pelaksanaan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trx_klasifikasi_konfirmasi_negosiasi_klasifikasi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trx_klasifikasi_konfirmasi_negosiasi_klasifikasi_id_seq";
CREATE SEQUENCE "public"."trx_klasifikasi_konfirmasi_negosiasi_klasifikasi_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trx_npp_npp_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trx_npp_npp_id_seq";
CREATE SEQUENCE "public"."trx_npp_npp_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trx_penetapan_pemenang_pemenang_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trx_penetapan_pemenang_pemenang_id_seq";
CREATE SEQUENCE "public"."trx_penetapan_pemenang_pemenang_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trx_peserta_tender_peserta_tender_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trx_peserta_tender_peserta_tender_id_seq";
CREATE SEQUENCE "public"."trx_peserta_tender_peserta_tender_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trx_sp3_sp3_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trx_sp3_sp3_id_seq";
CREATE SEQUENCE "public"."trx_sp3_sp3_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trx_timeline_timeline_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trx_timeline_timeline_id_seq";
CREATE SEQUENCE "public"."trx_timeline_timeline_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for users_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."users_id_seq";
CREATE SEQUENCE "public"."users_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for vendor_vendor_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."vendor_vendor_id_seq";
CREATE SEQUENCE "public"."vendor_vendor_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Table structure for draft_rks_file
-- ----------------------------
DROP TABLE IF EXISTS "public"."draft_rks_file";
CREATE TABLE "public"."draft_rks_file" (
  "rks_id" int8 NOT NULL DEFAULT nextval('draft_rks_file_rks_id_seq'::regclass),
  "sp3_id" int4,
  "file_penawaran" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_rks" date,
  "created_by" varchar(11) COLLATE "pg_catalog"."default",
  "updated_by" varchar(11) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "file_dokumen" varchar(255) COLLATE "pg_catalog"."default",
  "metode" varchar(150) COLLATE "pg_catalog"."default",
  "catatan" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of draft_rks_file
-- ----------------------------
INSERT INTO "public"."draft_rks_file" VALUES (14, 39, 'SP3-2022-08-08-13-26-45.pdf', NULL, '6', NULL, '2022-08-08 13:26:45', '2022-08-08 13:26:45', 'SP3-2022-08-08-13-26-45.pdf', '2_sampul', 'ok');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS "public"."failed_jobs";
CREATE TABLE "public"."failed_jobs" (
  "id" int8 NOT NULL DEFAULT nextval('failed_jobs_id_seq'::regclass),
  "connection" text COLLATE "pg_catalog"."default" NOT NULL,
  "queue" text COLLATE "pg_catalog"."default" NOT NULL,
  "payload" text COLLATE "pg_catalog"."default" NOT NULL,
  "exception" text COLLATE "pg_catalog"."default" NOT NULL,
  "failed_at" timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP
)
;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS "public"."migrations";
CREATE TABLE "public"."migrations" (
  "id" int4 NOT NULL DEFAULT nextval('migrations_id_seq'::regclass),
  "migration" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "batch" int4 NOT NULL
)
;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO "public"."migrations" VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO "public"."migrations" VALUES (2, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO "public"."migrations" VALUES (3, '2022_07_11_055153_create_permission_tables', 2);
INSERT INTO "public"."migrations" VALUES (4, '2022_07_11_060512_add_username_column', 3);
INSERT INTO "public"."migrations" VALUES (5, '2022_07_11_080740_add_roles_column', 4);
INSERT INTO "public"."migrations" VALUES (6, '2022_07_17_074917_create_auth_departement', 5);
INSERT INTO "public"."migrations" VALUES (7, '2022_07_17_075129_create_auth_departement', 6);
INSERT INTO "public"."migrations" VALUES (8, '2022_07_17_075515_create_auth_departement', 7);
INSERT INTO "public"."migrations" VALUES (9, '2022_07_17_075859_create_auth_division', 8);
INSERT INTO "public"."migrations" VALUES (10, '2022_07_17_075956_create_auth_departement', 8);
INSERT INTO "public"."migrations" VALUES (11, '2022_07_17_080500_create_auth_jabatan', 9);
INSERT INTO "public"."migrations" VALUES (12, '2022_07_17_081233_create_auth_departement', 10);
INSERT INTO "public"."migrations" VALUES (13, '2022_07_17_081319_create_auth_division', 10);
INSERT INTO "public"."migrations" VALUES (14, '2022_07_17_085825_add_column_users', 11);
INSERT INTO "public"."migrations" VALUES (15, '2022_07_17_090422_create_auth_department', 12);
INSERT INTO "public"."migrations" VALUES (16, '2022_07_17_090620_create_trx_timeline', 13);
INSERT INTO "public"."migrations" VALUES (17, '2022_07_17_091313_create_trx_timeline', 14);
INSERT INTO "public"."migrations" VALUES (18, '2022_07_17_091512_create_trx_sp3', 15);
INSERT INTO "public"."migrations" VALUES (19, '2022_07_17_141553_create_auth_jabatan', 16);
INSERT INTO "public"."migrations" VALUES (20, '2022_07_17_141918_create_auth_jabatan', 17);
INSERT INTO "public"."migrations" VALUES (21, '2022_07_18_103544_create_mapping_type', 18);
INSERT INTO "public"."migrations" VALUES (22, '2022_07_18_104142_create_mapping_type', 19);
INSERT INTO "public"."migrations" VALUES (23, '2022_07_19_124251_create_sp3_file', 20);
INSERT INTO "public"."migrations" VALUES (24, '2022_07_19_141432_create_evaluasi_sp3', 21);
INSERT INTO "public"."migrations" VALUES (25, '2014_10_12_100000_create_password_resets_table', 22);
INSERT INTO "public"."migrations" VALUES (26, '2022_07_25_114815_create_draft_rks_file', 23);
INSERT INTO "public"."migrations" VALUES (27, '2022_07_27_131713_create_jadwal_pelaksanaan_pengadaan', 24);
INSERT INTO "public"."migrations" VALUES (28, '2022_08_01_032949_create_trx_peserta_tender', 25);
INSERT INTO "public"."migrations" VALUES (29, '2022_08_01_033956_create_trx_aanwidjzing', 26);
INSERT INTO "public"."migrations" VALUES (30, '2022_08_01_034246_create_trx_document_penawaran', 27);
INSERT INTO "public"."migrations" VALUES (31, '2022_08_01_035535_create_trx_evaluasi_dokumen_penawaran', 27);
INSERT INTO "public"."migrations" VALUES (32, '2022_08_01_041804_create_trx_klasifikasi_konfirmasi_negosiasi', 28);
INSERT INTO "public"."migrations" VALUES (33, '2022_08_01_042340_create_trx_document_penawaran', 29);
INSERT INTO "public"."migrations" VALUES (34, '2022_08_01_042425_create_trx_evaluasi_dokumen_penawaran', 30);
INSERT INTO "public"."migrations" VALUES (35, '2022_08_01_141128_create_trx_file_berita_acara_aanwidjzing', 31);
INSERT INTO "public"."migrations" VALUES (36, '2022_08_03_133946_create_trx_penetapan_pemenang', 32);
INSERT INTO "public"."migrations" VALUES (37, '2022_08_08_124935_create_trx_berita_acara_hasil_pelelangan', 33);
INSERT INTO "public"."migrations" VALUES (38, '2022_08_08_142748_create_trx_npp', 34);
INSERT INTO "public"."migrations" VALUES (39, '2022_08_09_133420_create_vendor', 35);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS "public"."model_has_permissions";
CREATE TABLE "public"."model_has_permissions" (
  "permission_id" int8 NOT NULL,
  "model_type" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "model_id" int8 NOT NULL
)
;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS "public"."model_has_roles";
CREATE TABLE "public"."model_has_roles" (
  "role_id" int8 NOT NULL,
  "model_type" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "model_id" int8 NOT NULL
)
;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO "public"."model_has_roles" VALUES (8, 'App\Models\User', 16);
INSERT INTO "public"."model_has_roles" VALUES (9, 'App\Models\User', 4);
INSERT INTO "public"."model_has_roles" VALUES (10, 'App\Models\User', 6);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS "public"."password_resets";
CREATE TABLE "public"."password_resets" (
  "email" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "token" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0)
)
;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS "public"."permissions";
CREATE TABLE "public"."permissions" (
  "id" int8 NOT NULL DEFAULT nextval('permissions_id_seq'::regclass),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "guard_name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO "public"."permissions" VALUES (26, 'role-list', 'web', '2022-07-12 04:10:54', '2022-07-12 04:10:54');
INSERT INTO "public"."permissions" VALUES (27, 'role-create', 'web', '2022-07-12 04:10:54', '2022-07-12 04:10:54');
INSERT INTO "public"."permissions" VALUES (28, 'role-edit', 'web', '2022-07-12 04:10:54', '2022-07-12 04:10:54');
INSERT INTO "public"."permissions" VALUES (29, 'role-delete', 'web', '2022-07-12 04:10:54', '2022-07-12 04:10:54');
INSERT INTO "public"."permissions" VALUES (30, 'user-list', 'web', '2022-07-23 14:32:52', '2022-07-23 14:32:52');
INSERT INTO "public"."permissions" VALUES (31, 'user-create', 'web', '2022-07-23 14:32:52', '2022-07-23 14:32:52');
INSERT INTO "public"."permissions" VALUES (32, 'user-edit', 'web', '2022-07-23 14:32:52', '2022-07-23 14:32:52');
INSERT INTO "public"."permissions" VALUES (33, 'user-delete', 'web', '2022-07-23 14:32:52', '2022-07-23 14:32:52');
INSERT INTO "public"."permissions" VALUES (34, 'timeline-list', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (35, 'timeline-create', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (36, 'timeline-edit', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (37, 'timeline-delete', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (38, 'timeline.approval-list', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (39, 'timeline.approval-create', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (40, 'timeline.approval-edit', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (41, 'timeline.approval-delete', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (42, 'sp3-list', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (43, 'sp3-create', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (44, 'sp3-edit', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (45, 'sp3-delete', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (46, 'sp3.approval-list', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (47, 'sp3.approval-create', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (48, 'sp3.approval-edit', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (49, 'sp3.approval-delete', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (50, 'pbj-list', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (51, 'pbj-create', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (52, 'pbj-edit', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (53, 'pbj-delete', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (54, 'pbj.approval-list', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (55, 'pbj.approval-create', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (56, 'pbj.approval-edit', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');
INSERT INTO "public"."permissions" VALUES (57, 'pbj.approval-delete', 'web', '2022-07-23 14:34:00', '2022-07-23 14:34:00');

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS "public"."role_has_permissions";
CREATE TABLE "public"."role_has_permissions" (
  "permission_id" int8 NOT NULL,
  "role_id" int8 NOT NULL
)
;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
INSERT INTO "public"."role_has_permissions" VALUES (26, 8);
INSERT INTO "public"."role_has_permissions" VALUES (27, 8);
INSERT INTO "public"."role_has_permissions" VALUES (28, 8);
INSERT INTO "public"."role_has_permissions" VALUES (29, 8);
INSERT INTO "public"."role_has_permissions" VALUES (34, 9);
INSERT INTO "public"."role_has_permissions" VALUES (35, 9);
INSERT INTO "public"."role_has_permissions" VALUES (36, 9);
INSERT INTO "public"."role_has_permissions" VALUES (37, 9);
INSERT INTO "public"."role_has_permissions" VALUES (42, 9);
INSERT INTO "public"."role_has_permissions" VALUES (43, 9);
INSERT INTO "public"."role_has_permissions" VALUES (44, 9);
INSERT INTO "public"."role_has_permissions" VALUES (45, 9);
INSERT INTO "public"."role_has_permissions" VALUES (50, 9);
INSERT INTO "public"."role_has_permissions" VALUES (51, 9);
INSERT INTO "public"."role_has_permissions" VALUES (52, 9);
INSERT INTO "public"."role_has_permissions" VALUES (53, 9);
INSERT INTO "public"."role_has_permissions" VALUES (38, 10);
INSERT INTO "public"."role_has_permissions" VALUES (39, 10);
INSERT INTO "public"."role_has_permissions" VALUES (40, 10);
INSERT INTO "public"."role_has_permissions" VALUES (41, 10);
INSERT INTO "public"."role_has_permissions" VALUES (46, 10);
INSERT INTO "public"."role_has_permissions" VALUES (47, 10);
INSERT INTO "public"."role_has_permissions" VALUES (48, 10);
INSERT INTO "public"."role_has_permissions" VALUES (49, 10);
INSERT INTO "public"."role_has_permissions" VALUES (54, 10);
INSERT INTO "public"."role_has_permissions" VALUES (55, 10);
INSERT INTO "public"."role_has_permissions" VALUES (56, 10);
INSERT INTO "public"."role_has_permissions" VALUES (57, 10);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS "public"."roles";
CREATE TABLE "public"."roles" (
  "id" int8 NOT NULL DEFAULT nextval('roles_id_seq'::regclass),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "guard_name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO "public"."roles" VALUES (8, 'admin', 'web', '2022-07-12 04:02:35', '2022-07-12 04:02:35');
INSERT INTO "public"."roles" VALUES (9, 'manajer-logistik', 'web', '2022-07-23 14:47:35', '2022-07-23 14:47:35');
INSERT INTO "public"."roles" VALUES (10, 'manajer', 'web', '2022-07-23 15:05:07', '2022-07-23 15:05:07');

-- ----------------------------
-- Table structure for sp3_file
-- ----------------------------
DROP TABLE IF EXISTS "public"."sp3_file";
CREATE TABLE "public"."sp3_file" (
  "sp3_file_id" int8 NOT NULL DEFAULT nextval('sp3_file_sp3_file_id_seq'::regclass),
  "sp3_id" int4,
  "file" varchar(255) COLLATE "pg_catalog"."default",
  "created_by" int4,
  "updated_by" int4,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of sp3_file
-- ----------------------------
INSERT INTO "public"."sp3_file" VALUES (8, 23, 'SP3-2022-07-30-17-02-11.pdf', NULL, NULL, '2022-07-30 17:02:11', '2022-07-30 17:02:11');
INSERT INTO "public"."sp3_file" VALUES (9, 37, 'SP3-2022-08-03-09-45-41.pdf', NULL, NULL, '2022-08-03 09:45:41', '2022-08-03 09:45:41');
INSERT INTO "public"."sp3_file" VALUES (10, 37, 'SP3-2022-08-03-09-45-41.pdf', NULL, NULL, '2022-08-03 09:45:41', '2022-08-03 09:45:41');
INSERT INTO "public"."sp3_file" VALUES (11, 37, 'SP3-2022-08-03-09-45-41.pdf', NULL, NULL, '2022-08-03 09:45:41', '2022-08-03 09:45:41');
INSERT INTO "public"."sp3_file" VALUES (12, 37, 'SP3-2022-08-03-09-45-41.pdf', NULL, NULL, '2022-08-03 09:45:41', '2022-08-03 09:45:41');
INSERT INTO "public"."sp3_file" VALUES (13, 37, 'SP3-2022-08-03-09-45-41.pdf', NULL, NULL, '2022-08-03 09:45:41', '2022-08-03 09:45:41');
INSERT INTO "public"."sp3_file" VALUES (14, 37, 'SP3-2022-08-03-09-45-41.pdf', NULL, NULL, '2022-08-03 09:45:41', '2022-08-03 09:45:41');
INSERT INTO "public"."sp3_file" VALUES (15, 37, 'SP3-2022-08-03-09-45-41.pdf', NULL, NULL, '2022-08-03 09:45:41', '2022-08-03 09:45:41');

-- ----------------------------
-- Table structure for trx_aanwidjzing
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_aanwidjzing";
CREATE TABLE "public"."trx_aanwidjzing" (
  "aanwidjzing_id" int8 NOT NULL DEFAULT nextval('trx_aanwidjzing_aanwidjzing_id_seq'::regclass),
  "sp3_id" int4,
  "vendor_code" varchar(255) COLLATE "pg_catalog"."default",
  "verif_value" varchar(255) COLLATE "pg_catalog"."default",
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "verif_note" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of trx_aanwidjzing
-- ----------------------------
INSERT INTO "public"."trx_aanwidjzing" VALUES (31, 23, 'RK100002', '1', '4', NULL, '2022-08-03 14:53:33', '2022-08-03 14:53:33', NULL);
INSERT INTO "public"."trx_aanwidjzing" VALUES (32, 23, 'RK100002', '0', '4', NULL, '2022-08-03 14:53:33', '2022-08-03 14:53:33', NULL);
INSERT INTO "public"."trx_aanwidjzing" VALUES (33, 23, 'RK100002', '1', '4', NULL, '2022-08-03 14:53:33', '2022-08-03 14:53:33', NULL);
INSERT INTO "public"."trx_aanwidjzing" VALUES (37, 32, 'RK10047', '1', '6', NULL, '2022-08-03 16:04:33', '2022-08-03 16:04:33', 'OK');
INSERT INTO "public"."trx_aanwidjzing" VALUES (38, 32, 'RK10003', '0', '6', NULL, '2022-08-03 16:04:33', '2022-08-03 16:04:33', 'OK');
INSERT INTO "public"."trx_aanwidjzing" VALUES (39, 32, 'RK100002', '1', '6', NULL, '2022-08-03 16:04:33', '2022-08-03 16:04:33', 'OK');
INSERT INTO "public"."trx_aanwidjzing" VALUES (40, 31, 'RK10047', '1', '4', NULL, '2022-08-04 07:14:01', '2022-08-04 07:14:01', 'ok');
INSERT INTO "public"."trx_aanwidjzing" VALUES (41, 31, 'RK100002', '1', '4', NULL, '2022-08-04 07:14:01', '2022-08-04 07:14:01', 'ok');
INSERT INTO "public"."trx_aanwidjzing" VALUES (42, 31, 'RK10003', '1', '4', NULL, '2022-08-04 07:14:01', '2022-08-04 07:14:01', 'ok');
INSERT INTO "public"."trx_aanwidjzing" VALUES (43, 36, 'RK10047', '1', '6', NULL, '2022-08-05 07:16:43', '2022-08-05 07:16:43', 'Ok');
INSERT INTO "public"."trx_aanwidjzing" VALUES (44, 36, 'RK100002', '1', '6', NULL, '2022-08-05 07:16:43', '2022-08-05 07:16:43', 'ok');
INSERT INTO "public"."trx_aanwidjzing" VALUES (45, 36, 'RK10003', '1', '6', NULL, '2022-08-05 07:16:43', '2022-08-05 07:16:43', 'ok');
INSERT INTO "public"."trx_aanwidjzing" VALUES (46, 39, 'RK10047', '1', '6', NULL, '2022-08-08 13:28:29', '2022-08-08 13:28:29', 'ok');
INSERT INTO "public"."trx_aanwidjzing" VALUES (47, 39, 'RK10003', '1', '6', NULL, '2022-08-08 13:28:29', '2022-08-08 13:28:29', 'ok');
INSERT INTO "public"."trx_aanwidjzing" VALUES (48, 39, 'RK10003', '1', '6', NULL, '2022-08-08 13:28:29', '2022-08-08 13:28:29', 'ok');

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
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of trx_berita_acara_hasil_pelelangan
-- ----------------------------
INSERT INTO "public"."trx_berita_acara_hasil_pelelangan" VALUES (4, 39, 'RK10047', 'dokumen-bahp-2022-08-08-13-46-48.pdf', NULL, NULL, '2022-08-08 13:46:48', '2022-08-08 13:46:48');
INSERT INTO "public"."trx_berita_acara_hasil_pelelangan" VALUES (5, 39, 'RK10003', 'dokumen-bahp-2022-08-08-13-46-48.pdf', NULL, NULL, '2022-08-08 13:46:48', '2022-08-08 13:46:48');
INSERT INTO "public"."trx_berita_acara_hasil_pelelangan" VALUES (6, 39, 'RK10003', 'dokumen-bahp-2022-08-08-13-46-48.pdf', NULL, NULL, '2022-08-08 13:46:48', '2022-08-08 13:46:48');

-- ----------------------------
-- Table structure for trx_document_penawaran
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_document_penawaran";
CREATE TABLE "public"."trx_document_penawaran" (
  "document_penawaran_id" int8 NOT NULL DEFAULT nextval('trx_document_penawaran_document_penawaran_id_seq'::regclass),
  "sp3_id" int4,
  "vendor_code" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_submit_dokumen" date,
  "tanggal_submit_teknis" date,
  "tanggal_submit_harga" date,
  "metode" varchar(255) COLLATE "pg_catalog"."default",
  "file_dokumen" varchar(255) COLLATE "pg_catalog"."default",
  "file_teknis" varchar(255) COLLATE "pg_catalog"."default",
  "file_harga" varchar(255) COLLATE "pg_catalog"."default",
  "file_berita_acara_dokumen" varchar(255) COLLATE "pg_catalog"."default",
  "file_berita_acara_harga" varchar(255) COLLATE "pg_catalog"."default",
  "keterangan_pemasukan_dokumen" varchar(255) COLLATE "pg_catalog"."default",
  "keterangan_pemasukan_harga" varchar(255) COLLATE "pg_catalog"."default",
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of trx_document_penawaran
-- ----------------------------
INSERT INTO "public"."trx_document_penawaran" VALUES (25, 39, 'RK10047', NULL, '2022-08-08', '2022-08-08', '2_sampul', NULL, 'dokumen-penawaran-2022-08-08-13-30-35.pdf', 'dokumen-penawaran-2022-08-08-13-30-35.pdf', NULL, NULL, NULL, NULL, '6', NULL, '2022-08-08 13:30:35', '2022-08-08 13:30:35');
INSERT INTO "public"."trx_document_penawaran" VALUES (26, 39, 'RK10003', NULL, '2022-08-08', '2022-08-08', '2_sampul', NULL, 'dokumen-penawaran-2022-08-08-13-30-35.pdf', 'dokumen-penawaran-2022-08-08-13-30-35.pdf', NULL, NULL, NULL, NULL, '6', NULL, '2022-08-08 13:30:35', '2022-08-08 13:30:35');
INSERT INTO "public"."trx_document_penawaran" VALUES (27, 39, 'RK10003', NULL, '2022-08-08', '2022-08-11', '2_sampul', NULL, 'dokumen-penawaran-2022-08-08-13-30-35.pdf', 'dokumen-penawaran-2022-08-08-13-30-35.pdf', NULL, NULL, NULL, NULL, '6', NULL, '2022-08-08 13:30:35', '2022-08-08 13:30:35');

-- ----------------------------
-- Table structure for trx_eval_sp3
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_eval_sp3";
CREATE TABLE "public"."trx_eval_sp3" (
  "eval_sp3_id" int8 NOT NULL DEFAULT nextval('trx_eval_sp3_eval_sp3_id_seq'::regclass),
  "sp3_id" int4,
  "item_cd" varchar(200) COLLATE "pg_catalog"."default",
  "item_value" varchar(200) COLLATE "pg_catalog"."default",
  "keterangan" text COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "created_by" int4,
  "updated_by" int4,
  "nomor_evaluasi" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_evaluasi" date,
  "pemenuhan" varchar(100) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of trx_eval_sp3
-- ----------------------------
INSERT INTO "public"."trx_eval_sp3" VALUES (68, 32, NULL, 'MI Permohonan Pengadaan dari User', 'TEST', '2022-08-02 11:58:29', '2022-08-02 11:58:29', 6, NULL, '23/MI/COHP/KCI/VII/2022', '2022-07-13', 'Ya');
INSERT INTO "public"."trx_eval_sp3" VALUES (69, 32, NULL, 'NPD', 'TEST', '2022-08-02 11:58:29', '2022-08-02 11:58:29', 6, NULL, '2100074947<br />2100074949', '2022-06-06', 'Ya');
INSERT INTO "public"."trx_eval_sp3" VALUES (70, 32, NULL, 'IJIN PRINSIP', 'TEST', '2022-08-02 11:58:29', '2022-08-02 11:58:29', 6, NULL, NULL, NULL, 'Ya');
INSERT INTO "public"."trx_eval_sp3" VALUES (71, 32, NULL, 'Permohonan Dana dari User (NPD/Ijin Prinsip)', 'TEST', '2022-08-02 11:58:29', '2022-08-02 11:58:29', 6, NULL, '2100074947 <br />2100074949', '2022-06-06', 'Ya');
INSERT INTO "public"."trx_eval_sp3" VALUES (72, 32, NULL, 'No RAB, Tanggal RAB dan Judul Pengadaan di RAB', 'TEST', '2022-08-02 11:58:29', '2022-08-02 11:58:29', 6, NULL, '307/RAB/COH/KCI/V/2022 <br />308/RAB/COH/KCI/V/2022', '2022-05-19', 'Ya');
INSERT INTO "public"."trx_eval_sp3" VALUES (73, 32, NULL, 'No Justifikasi, Tanggal Justifikasi dan Judul Pengadaan di Justifikasi', 'TEST', '2022-08-02 11:58:29', '2022-08-02 11:58:29', 6, NULL, '307/RAB/COH/KCI/V/2022 <br />308/RAB/COH/KCI/V/2022', '2022-05-19', 'Ya');
INSERT INTO "public"."trx_eval_sp3" VALUES (74, 32, NULL, 'No KAK/TOR, Tanggal KAK/TOR dan Judul Pengadaan di KAK/TOR', 'TEST', '2022-08-02 11:58:29', '2022-08-02 11:58:29', 6, NULL, '054/COH/KCI/V/2022', '2022-05-19', 'Ya');
INSERT INTO "public"."trx_eval_sp3" VALUES (75, 32, NULL, 'MPPL', 'TEST', '2022-08-02 11:58:29', '2022-08-02 11:58:29', 6, NULL, NULL, NULL, 'Ya');
INSERT INTO "public"."trx_eval_sp3" VALUES (76, 32, NULL, 'DENDA', 'TEST', '2022-08-02 11:58:29', '2022-08-02 11:58:29', 6, NULL, NULL, NULL, 'Ya');
INSERT INTO "public"."trx_eval_sp3" VALUES (77, 32, NULL, 'METODE PEMBAYARAN', 'TEST', '2022-08-02 11:58:29', '2022-08-02 11:58:29', 6, NULL, NULL, NULL, 'Ya');
INSERT INTO "public"."trx_eval_sp3" VALUES (78, 32, NULL, 'RKIP', 'TEST', '2022-08-02 11:58:29', '2022-08-02 11:58:29', 6, NULL, NULL, NULL, 'Ya');
INSERT INTO "public"."trx_eval_sp3" VALUES (79, 32, NULL, 'Permohonan Persetujuan Direksi', 'TEST', '2022-08-02 11:58:29', '2022-08-02 11:58:29', 6, NULL, NULL, NULL, 'Ya');
INSERT INTO "public"."trx_eval_sp3" VALUES (80, 32, NULL, 'Persetujuan Direksi (Justifikasi PNL)', 'TEST', '2022-08-02 11:58:29', '2022-08-02 11:58:29', 6, NULL, NULL, NULL, 'Tidak');

-- ----------------------------
-- Table structure for trx_evaluasi_dokumen_penawaran
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_evaluasi_dokumen_penawaran";
CREATE TABLE "public"."trx_evaluasi_dokumen_penawaran" (
  "document_evaluasi_id" int8 NOT NULL DEFAULT nextval('trx_evaluasi_dokumen_penawaran_document_penawaran_id_seq'::regclass),
  "sp3_id" int4,
  "vendor_code" varchar(255) COLLATE "pg_catalog"."default",
  "metode" varchar(255) COLLATE "pg_catalog"."default",
  "penilaian_dokumen" varchar(255) COLLATE "pg_catalog"."default",
  "penilaian_admin" varchar(255) COLLATE "pg_catalog"."default",
  "penilaian_harga" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_evaluasi_dokumen" date,
  "tanggal_evaluasi_harga" date,
  "tanggal_evaluasi_admin" date,
  "file_evaluasi_dokumen" varchar(255) COLLATE "pg_catalog"."default",
  "file_evaluasi_harga" varchar(255) COLLATE "pg_catalog"."default",
  "file_evaluasi_teknis" varchar(255) COLLATE "pg_catalog"."default",
  "keterangan_evaluasi_dokumen" varchar(255) COLLATE "pg_catalog"."default",
  "keterangan_evaluasi_admin" varchar(255) COLLATE "pg_catalog"."default",
  "keterangan_evaluasi_harga" varchar(255) COLLATE "pg_catalog"."default",
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of trx_evaluasi_dokumen_penawaran
-- ----------------------------
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (21, 39, 'RK10047', '2_sampul', NULL, '1', '1', NULL, '2022-08-10', '2022-08-08', NULL, NULL, NULL, NULL, 'Sangat baik', 'Sangat baik', '6', NULL, '2022-08-08 13:32:18', '2022-08-08 13:32:18');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (22, 39, 'RK10003', '2_sampul', NULL, '1', '1', NULL, '2022-08-10', '2022-08-08', NULL, NULL, NULL, NULL, 'Sangat baik', 'Sangat baik', '6', NULL, '2022-08-08 13:32:18', '2022-08-08 13:32:18');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (23, 39, 'RK10003', '2_sampul', NULL, '1', '1', NULL, '2022-08-10', '2022-08-08', NULL, NULL, NULL, NULL, 'Sangat baik', 'Sangat baik', '6', NULL, '2022-08-08 13:32:18', '2022-08-08 13:32:18');

-- ----------------------------
-- Table structure for trx_file_berita_acara_aanwidjzing
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_file_berita_acara_aanwidjzing";
CREATE TABLE "public"."trx_file_berita_acara_aanwidjzing" (
  "berita_acara_id" int8 NOT NULL DEFAULT nextval('trx_file_berita_acara_aanwidjzing_berita_acara_id_seq'::regclass),
  "aanwidjzing_id" int4,
  "file_berita_acara" varchar(255) COLLATE "pg_catalog"."default",
  "created_by" varchar(11) COLLATE "pg_catalog"."default",
  "updated_by" varchar(11) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of trx_file_berita_acara_aanwidjzing
-- ----------------------------

-- ----------------------------
-- Table structure for trx_harga_satuan
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_harga_satuan";
CREATE TABLE "public"."trx_harga_satuan" (
  "hs_id" int4 NOT NULL DEFAULT 0,
  "material_no" int4,
  "nama_barang_upah" varchar(500) COLLATE "pg_catalog"."default" NOT NULL,
  "kategori" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  "merk" varchar(200) COLLATE "pg_catalog"."default",
  "spesifiaksi" varchar(500) COLLATE "pg_catalog"."default",
  "satuan" varchar(50) COLLATE "pg_catalog"."default",
  "harga" int8,
  "mata_uang" varchar(10) COLLATE "pg_catalog"."default",
  "dasar" varchar(50) COLLATE "pg_catalog"."default",
  "referensi" varchar(500) COLLATE "pg_catalog"."default",
  "remark_harga_tahun" varchar(50) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "created_by" varchar(200) COLLATE "pg_catalog"."default",
  "updated_by" varchar(200) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of trx_harga_satuan
-- ----------------------------
INSERT INTO "public"."trx_harga_satuan" VALUES (1, 0, '1/2" High torque impact wrench;Milwaukee', 'Sarana - Fasilitas', '', '', 'Un', 10407000, 'IDR ', 'Kontrak ', 'SPB17/SPB-FAS/CTP/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (2, 6003080, '1/4  Rubber ball Door engine', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 18552, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (3, 6003644, '1/4 Rubber Ball', 'Sarana - Suku Cadang', '', '', 'PC', 200, 'JPY ', 'Kontrak ', '183/HK-PG/KCI/VII/2018,TGL.19-07-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (4, 6005088, '1/4 Rubber ball; 5815-4072783-03', 'Sarana - Suku Cadang', '', '', 'PC', 19800, 'JPY ', 'Kontrak ', '136/HK-PG/KCI/V/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (5, 6005555, '114×30SJ Brake Cylinder Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 78684, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (6, 6005085, '12 V Packing; 5813-9047413-01', 'Sarana - Suku Cadang', '', '', 'PC', 19800, 'JPY ', 'Kontrak ', '136/HK-PG/KCI/V/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (7, 6005690, '12mm Drain cock for JM Air filter', 'Sarana - Suku Cadang', '', '', 'PC', 8308, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (8, 6003642, '１２V Packing', 'Sarana - Suku Cadang', '', '', 'PC', 200, 'JPY ', 'Kontrak ', '183/HK-PG/KCI/VII/2018,TGL.19-07-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (9, 6004853, '19   Dia.Air   Hose   with  3/ 4"Fitting', 'Sarana - Suku Cadang', '', '', 'PC', 31999, 'JPY ', 'Kontrak ', '183/HK-PG/KCI/VII/2018,TGL.19-07-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (10, 6004852, '19  Dia.Air Hose with 3/ 4"Fitting   an', 'Sarana - Suku Cadang', '', '', 'PC', 48044, 'JPY ', 'Kontrak ', '183/HK-PG/KCI/VII/2018,TGL.19-07-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (11, 0, '3 Step Ladder / Tangga 3 Tingkat', 'Sarana - Fasilitas', '', '', 'PC', 545000, 'IDR ', 'Kontrak ', '235/HK-PG/KCI/VIII/2019,Tanggal20Agustus2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (12, 6004016, '3/4 double check valve KIT', 'Sarana - Suku Cadang', '', '', 'SET', 7575, 'JPY ', 'Kontrak ', '362.1/HK-PG/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (13, 0, '3/4" High torque impact wrench;Milwaukee', 'Sarana - Fasilitas', '', '', 'Un', 10470000, 'IDR ', 'Kontrak ', 'SPB17/SPB-FAS/CTP/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (14, 6004072, '3/8  cut-off  cock Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 398, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (15, 6003049, '3/8  Silencer Door engine TK112', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 293477, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (16, 6004071, '3/8D  Double check valve Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 2802, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (17, 6004758, '３/8Y strainer Kit', 'Sarana - Suku Cadang', '', '', 'SET', 2315, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (18, 6004561, '3A Elec-pneumatic change valve Maint Kit', 'Sarana - Suku Cadang', '', '', 'SET', 15401, 'JPY ', 'Kontrak ', '362.1/HK-PG/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (19, 6003011, '40D45D Felt Door engine', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 19711, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (20, 6003037, '5/16  Rubber ball DP45DS', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 21386, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (21, 6004513, '7E Dehumidifier Maintenance KIT 23 Item', 'Sarana - Suku Cadang', '', '', 'SET', 173454, 'JPY ', 'Kontrak ', '362.1/HK-PG/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (22, 6006454, 'AC KRL SERI JR 205', 'Sarana - Suku Cadang', '', '', 'Un', 391000000, 'IDR ', 'Kontrak ', '302/HK-PG/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (23, 6000015, 'AC KRL SERIE 5000', 'Sarana - Barang Umum', '', '', 'PC', 25720861, 'IDR ', 'SAP ', '', '', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (24, 0, 'AC Rittal Wall Mount Coller; 1000W 220V', 'Sarana - Fasilitas', '', '', 'Un', 60700000, 'IDR ', 'Kontrak ', 'SPB19/SPB/CTP/KCI/XI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (25, 0, 'AC Rittal Wall Mount Coller; 1500W 380V', 'Sarana - Fasilitas', '', '', 'Un', 93000000, 'IDR ', 'Kontrak ', 'SPB19/SPB/CTP/KCI/XI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (26, 6004622, 'AC seri 8000 Roof mounted DW-PAC11k-IDN', 'Sarana - Suku Cadang', '', '', 'SET', 218500000, 'IDR ', 'Kontrak ', 'SK.026/DU-LOG/KCI/IV/2018TGL.27-04-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (27, 0, 'Accu 80VDC 465AH', 'Sarana - Fasilitas', '', '', 'PC', 160000000, 'IDR ', 'Kontrak ', 'SPB01/SPB-FAS/CTP/KCI/IV/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (28, 0, 'Accu 80VDC 625AH', 'Sarana - Fasilitas', '', '', 'PC', 156000000, 'IDR ', 'Kontrak ', 'SPB01/SPB-FAS/CTP/KCI/IV/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (29, 0, 'Accu kering 12V 62AH', 'Sarana - Fasilitas', '', '', 'PC', 2300000, 'IDR ', 'Kontrak ', 'SPB01/SPB-FAS/CTP/KCI/IV/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (30, 0, 'Accu kering 12V 70AH', 'Sarana - Fasilitas', '', '', 'PC', 2200000, 'IDR ', 'Kontrak ', 'SPB01/SPB-FAS/CTP/KCI/IV/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (31, 0, 'Accu kering 12V 82AH', 'Sarana - Fasilitas', '', '', 'PC', 2600000, 'IDR ', 'Kontrak ', 'SPB01/SPB-FAS/CTP/KCI/IV/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (32, 0, 'Accu kering N200 12V 200AH', 'Sarana - Fasilitas', '', '', 'PC', 5200000, 'IDR ', 'Kontrak ', 'SPB01/SPB-FAS/CTP/KCI/IV/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (33, 6002489, 'ACCUMULATOR RCS5101H40', 'Sarana - Barang Umum', '', 'RCS5101H40', 'PC', 2345483, 'IDR ', 'Kontrak ', '601/HK-PG/KCJ/XII/2015 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (34, 2000850, 'Acrylic Nomor Seri Kereta Dalam Ruangan', 'Sarana - Suku Cadang', '', '', 'PC', 23100, 'IDR ', 'SPB ', '17/GE/SPB/KCJ/II/2016  ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (35, 6004138, 'ACYTILIN @3Kg', 'Sarana - Barang Umum', '', '', 'PC', 467500, 'IDR ', 'Kontrak ', 'SPB06/SPB/CE/KCJ/III/201706.03.2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (36, 5000101, 'ACYTILIN TABUNG + ISI 3 KG', 'Sarana - Barang Umum', '', '', 'PC', 1815000, 'IDR ', 'SPB ', '51/ GE / SPB / KCJ / VII / 2016 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (37, 6000025, 'ADAPTOR COUPLER BOVER KRL', 'Sarana - Suku Cadang', '', '', 'PC', 12250000, 'IDR ', 'SAP ', '', '', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (38, 6000026, 'ADAPTOR PANTOGRAPH KRL', 'Sarana - Suku Cadang', '', '', 'PC', 86005, 'IDR ', 'Kontrak ', '116/HK-PG/KCI/IV/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (39, 6006311, 'ADJUST WASHER FOR B7 PRESSURE REGULATING', 'Sarana - Suku Cadang', '', '', 'PC', 428, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (40, 0, 'Adjustable Click - Type Torque Wrench; S', 'Sarana - Fasilitas', '', '', 'PC', 468500, 'IDR ', 'Kontrak ', '235/HK-PG/KCI/VIII/2019,Tanggal20Agustus2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (41, 6003249, 'ADJUSTING SCREW', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 379342, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (42, 6000031, 'AIR BRAKE HEAVY MAINTEN PARTS 8000/8500', 'Sarana - Suku Cadang', '', '', 'PC', 339581246, 'IDR ', 'SAP ', '', '', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (43, 6000032, 'AIR BRAKE HEAVY MAINTEN PARTS JR 203', 'Sarana - Suku Cadang', '', '', 'PC', 574451194, 'IDR ', 'SAP ', '', '', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (44, 6002228, 'Air Brake System Maintenance Kit For JR', 'Sarana - Suku Cadang', '', '', 'SET', 924268384, 'IDR ', 'Kontrak ', '183/HK-PG/KCJ/VI/2015', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (45, 6004012, 'AIR COMMPRESOR C2000L', 'Sarana - Suku Cadang', '', '', 'Un', 42716030, 'IDR ', 'SAP ', '', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (46, 6000033, 'air compresor JR 205', 'Sarana - Suku Cadang', '', '', 'Un', 14536800, 'JPY ', 'Kontrak ', 'SKNo.028/DU-LOG/KCJ/V/2017tgl.26-5-2017KONTRAKNO.165/HK-PG/KCJ/VI/2017Tgl.15-06-2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (47, 6004704, 'Air compressor C2000  KIT 26 ITEM', 'Sarana - Suku Cadang', '', '', 'SET', 7843900, 'JPY ', 'Kontrak ', '056/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (48, 6004687, 'Air compressor C2000 KIT 27 ITEM', 'Sarana - Suku Cadang', '', '', 'SET', 7935900, 'JPY ', 'Kontrak ', '281/HK-PG/KCI/X/2019Tanggal10Oktober2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (49, 6005559, 'Air Compressor C2000LA Main KIT 21 Item', 'Sarana - Suku Cadang', '', '', 'SET', 33962000, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (50, 6004508, 'Air Compressor C2000LA Main KIT 22 Kit', 'Sarana - Suku Cadang', '', '', 'SET', 34249400, 'JPY ', 'Kontrak ', '056.1/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (51, 6004507, 'Air Compressor C2000M Main KIT 25 Item', 'Sarana - Suku Cadang', '', '', 'SET', 32891300, 'JPY ', 'Kontrak ', '056.1/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (52, 6005558, 'Air Compressor C2000M Maintenance KIT 24', 'Sarana - Suku Cadang', '', '', 'SET', 32571600, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (53, 6004512, 'AIR COMPRESSOR C2500LB MAINT KIT 24 ITEM', 'Sarana - Suku Cadang', '', '', 'SET', 289364, 'JPY ', 'Kontrak ', '362.1/HK-PG/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (54, 6004506, 'Air Compressor Common Main KIT 15 Item', 'Sarana - Suku Cadang', '', '', 'SET', 39727100, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (55, 6004116, 'Air conditioner AU722 for 6 doorscar KIT', 'Sarana - Suku Cadang', '', '', 'SET', 5320200, 'JPY ', 'Kontrak ', '056/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (56, 6004117, 'Air conditioner AU75G for 4 doorscar KIT', 'Sarana - Suku Cadang', '', '', 'SET', 786, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (57, 6000038, 'AIR CONDITIONER COIL CLEANER', 'Sarana - Suku Cadang', '', '', 'PC', 110000, 'IDR ', 'SAP ', '', '', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (58, 6002395, 'Air Conditioner distribution box', 'Sarana - Suku Cadang', '', '', 'PC', 6530, 'JPY ', 'Kontrak ', '165/HK-PG/KCJ/VI/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (59, 6000039, 'Air conditioner for 4 door car  JR 205', 'Sarana - Suku Cadang', '', '', 'Un', 148606512, 'IDR ', 'Kontrak ', '190/HK-PG/KCJ/VI/2015 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (60, 6000040, 'Air conditioner for 6 door car JR 205', 'Sarana - Suku Cadang', '', '', 'Un', 859909, 'JPY ', 'Kontrak ', 'SKNo.028/DU-LOG/KCJ/V/2017tgl.26-5-2017KONTRAKNO.165/HK-PG/KCJ/VI/2017Tgl.15-06-2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (61, 6005547, 'Air Conditioner Main KIT (RPU11007)', 'Sarana - Suku Cadang', '', '', 'SET', 1223000, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (62, 6005546, 'Air Conditioner Maintenance KIT (CU769)', 'Sarana - Suku Cadang', '', '', 'SET', 925100, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (63, 6004574, 'Air conditioner(CU763,RPU1102) Maint Kit', 'Sarana - Suku Cadang', '', '', 'SET', 994200, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (64, 6003372, 'Air Filter', 'Sarana - Suku Cadang', '', '', 'PC', 71971, 'JPY ', 'Kontrak ', '183/HK-PG/KCI/VII/2018,TGL.19-07-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (65, 6000041, 'AIR FILTER AC 540X260MM', 'Sarana - Suku Cadang', '', '', 'PC', 300000, 'IDR ', 'SAP ', '', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (66, 6005179, 'Air Filter; 1080-3075605-04', 'Sarana - Suku Cadang', '', '', 'PC', 6187500, 'JPY ', 'Kontrak ', '136/HK-PG/KCI/V/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (67, 0, 'Air gun; Meiji Air Dusters DS-3TK', 'Sarana - Fasilitas', '', '', 'PC', 440000, 'IDR ', 'Kontrak ', '235/HK-PG/KCI/VIII/2019,Tanggal20Agustus2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (68, 6004534, 'Air hose LV Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 1255800, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (69, 6004532, 'Air hose MR1 Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 1095200, 'JPY ', 'Kontrak ', '056.1/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (70, 6005563, 'Air hose MR2 Main KIT 3 ITEM', 'Sarana - Suku Cadang', '', '', 'SET', 1641100, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (71, 6004533, 'Air hose MR2 Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 16003, 'JPY ', 'Kontrak ', '362.1/HK-PG/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (72, 0, 'Air Hose Reel; Hybrid Polimer', 'Sarana - Fasilitas', '', '', 'PC', 1240000, 'IDR ', 'Kontrak ', '235/HK-PG/KCI/VIII/2019,Tanggal20Agustus2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (73, 0, 'Air Impact SQ 1 Inch', 'Sarana - Fasilitas', '', '', 'PC', 7750000, 'IDR ', 'SPB ', 'SPB23/SPB/CE/KCI/XI/201801.11.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (74, 0, 'Air Impact SQ 1/2 Inch', 'Sarana - Fasilitas', '', '', 'PC', 2450000, 'IDR ', 'SPB ', 'SPB23/SPB/CE/KCI/XI/201801.11.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (75, 0, 'Air Impact SQ 3/4 Inch', 'Sarana - Fasilitas', '', '', 'PC', 4900000, 'IDR ', 'SPB ', 'SPB23/SPB/CE/KCI/XI/201801.11.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (76, 5000074, 'Air spring Body KRL seri 8000 uk.155mm x', 'Sarana - Suku Cadang', '', '', 'SET', 14450000, 'IDR ', 'Kontrak ', '058/HK-PG/KCI/II/2018TGL.26-02-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (77, 6004910, 'Air Spring KRL Seri 05', 'Sarana - Suku Cadang', '', '', 'PC', 17200000, 'IDR ', 'Kontrak ', 'KONTRAKNO.291/HK-PG/KCI/XI/2018TGL.05-11-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (78, 6002488, 'AIR SPRING KRL SERI 8000 160X100MM', 'Sarana - Suku Cadang', '', '160X100MM ', 'PC', 7480000, 'IDR ', 'Kontrak ', 'PENGALIHAN DARI BY MRI ', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (79, 6004011, 'Air Spring Pengereman Seri 8000', 'Sarana - Suku Cadang', '', '', 'PC', 6900000, 'IDR ', 'Kontrak ', '058/HK-PG/KCI/II/2018TGL.26-02-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (80, 6004563, 'Air spring relay valve Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 31351, 'JPY ', 'Kontrak ', '362.1/HK-PG/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (81, 2000003, 'AIR SULING', 'Sarana - Barang Umum', '', '', 'L', 4082, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (82, 0, 'Alarm Crane', 'Sarana - Fasilitas', '', 'Standart', 'pcs', 1750000, 'IDR ', 'SPK ', '08 / SPK- FAS/ CE / KCI / V/ 2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (83, 0, 'Alat Angkat As Gandar', 'Sarana - Fasilitas', '', '', 'UN', 4800000, 'IDR ', 'SPB ', 'SPB11/SPB-FAS/CE/KCI/IX/201927.09.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (84, 0, 'Alat Angkat Keping Roda Horizontal', 'Sarana - Fasilitas', '', '', 'UN', 10600000, 'IDR ', 'SPB ', 'SPB11/SPB-FAS/CE/KCI/IX/201927.09.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (85, 0, 'Alat Angkat Keping Roda Vertical', 'Sarana - Fasilitas', '', '', 'UN', 9500000, 'IDR ', 'SPB ', 'SPB11/SPB-FAS/CE/KCI/IX/201927.09.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (86, 0, 'Alat pelepas bearing ( heater bearing )', 'Sarana - Fasilitas', '', '', 'PC', 680813100, 'IDR ', 'Kontrak ', 'KONTRAKNo.184.1/HK-PG/KCI/VII/2018tgl.20-07-2018.  ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (87, 0, 'Alat pneumatik test bench', 'Sarana - Fasilitas', '', '', 'Un', 3395591820, 'IDR ', 'Kontrak ', '166/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (88, 0, 'Alat test coil spring', 'Sarana - Fasilitas', '', '', 'Un', 3365000000, 'IDR ', 'Kontrak ', '145/HK-PG/KCI/V/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (89, 0, 'Alat test shock absorber', 'Sarana - Fasilitas', '', '', 'Un', 1340000000, 'IDR ', 'Kontrak ', '127/HK-PG/V/KCI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (90, 0, 'Alat timbang kereta manual', 'Sarana - Fasilitas', '', '', 'PC', 680000000, 'IDR ', 'Kontrak ', '040/HK-PG/KCI/II/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (91, 0, 'Alat uji shock absorber', 'Sarana - Fasilitas', '', '', 'PC', 1220000000, 'IDR ', 'Kontrak ', 'SK.037/DU-LOG/KCI/VIII/2019 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (92, 0, 'Alat ukur diameter roda', 'Sarana - Fasilitas', '', '', 'Un', 101650000, 'IDR ', 'Kontrak ', 'SPB14/SPB-FAS/CTP/KCI/XI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (93, 3000013, 'Alat ukur flange roda', 'Sarana - Fasilitas', '', 'Uk. 760-920 mm', 'bh', 140500000, 'IDR ', 'Kontrak ', '222/HK-PG/KCJ/VII/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (94, 0, 'Alat ukur flens roda', 'Sarana - Fasilitas', '', '', 'Un', 186700000, 'IDR ', 'Kontrak ', 'SPB14/SPB-FAS/CTP/KCI/XI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (95, 5000000, 'ALVANIA GREASE EP 2', 'Sarana - Barang Umum', '', '', 'KG', 54050, 'IDR ', 'SAP ', '', '2753', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (96, 2001050, 'Amplas air No. 1000', 'Sarana - Barang Umum', '', '', 'PC', 19176, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (97, 2001263, 'AMPLAS AIR P60', 'Sarana - Barang Umum', '', '', 'PC', 5896, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (98, 2000005, 'AMPLAS AIR P60, P80', 'Sarana - Barang Umum', '', '', 'PC', 5203, 'IDR ', 'Kontrak ', '224.1/HK-PG/KCI/VIII/2019,Tanggal09Agustus2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (99, 2001060, 'Amplas air P80', 'Sarana - Suku Cadang', '', '', 'PC', 5400, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (100, 2000006, 'AMPLAS BESI NO. 1', 'Sarana - Barang Umum', '', '', 'PC', 3900, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (101, 2000007, 'AMPLAS BESI NO. 2', 'Sarana - Barang Umum', '', '', 'PC', 3900, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (102, 2000905, 'Amplas Halus No 1', 'Sarana - Barang Umum', '', '', 'PC', 2860, 'IDR ', 'SAP ', '', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (103, 2000579, 'AMPLAS NO. 120', 'Sarana - Barang Umum', '', '', 'PC', 5280, 'IDR ', 'SAP ', '', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (104, 0, 'Angle Beam Transducer 5 Mhz', 'Sarana - Fasilitas', '', '', 'PC', 6555000, 'IDR ', 'SPB ', 'SPB12/SPB-FAS/CE/KCI/X/201902.10.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (105, 6005164, 'Anti Finger Stuck Rubber (D113-08694-1);', 'Sarana - Suku Cadang', '', '', 'PC', 792000, 'JPY ', 'Kontrak ', '136/HK-PG/KCI/V/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (106, 2001112, 'Anti Seize Coumpound Drathon 290', 'Sarana - Barang Umum', '', '', 'PC', 605000, 'IDR ', 'SPB ', 'SPB11/SPB/CE/VIII/201921.08.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (107, 6005160, 'Anti-derail Roller (φ25,26,27,28,29); TK', 'Sarana - Suku Cadang', '', '', 'PC', 79200, 'JPY ', 'Kontrak ', '136/HK-PG/KCI/V/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (108, 6004785, 'Anti-derail Roller Door Wheel', 'Sarana - Suku Cadang', '', '', 'PC', 800, 'JPY ', 'Kontrak ', '183/HK-PG/KCI/VII/2018,TGL.19-07-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (109, 6004756, 'Anti-skid valve Kit', 'Sarana - Suku Cadang', '', '', 'SET', 188102, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (110, 6003468, 'Antivibration Rubber', 'Sarana - Suku Cadang', '', '', 'PC', 1656000, 'IDR ', 'Kontrak ', '247/HK-PG/KCI/VIII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (111, 6003404, 'Apolloil gear (20L pail)', 'Sarana - Suku Cadang', '', '', 'PC', 6993, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (112, 2000014, 'APPLID (PEMBERSIH) (@20L)', 'Sarana - Barang Umum', '', '', 'L', 52250, 'IDR ', 'Kontrak ', 'SPRNO.0107.2/SPR/LOG/KCJ/IV/2016,TGL.18APRIL2016KONTRAKNO.136.1/HK-PG/KCJ/V/2016,Tgl.9-05-2016 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (113, 2000625, 'AQUAPROOF', 'Sarana - Barang Umum', '', '', 'KG', 200200, 'IDR ', 'SPPH ', '47 / GE / SPPH / KCJ / VI / 2016 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (114, 6003405, 'Arapen RB 320 (16kg pail)', 'Sarana - Suku Cadang', '', '', 'PC', 2278235, 'IDR ', 'Kontrak ', 'SPB15/SPB/CTP/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (115, 6002441, 'Arc chute', 'Sarana - Suku Cadang', '', '', 'PC', 506, 'JPY ', 'Kontrak ', '165/HK-PG/KCJ/VI/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (116, 6004591, 'Arc Tip HY30692-1', 'Sarana - Suku Cadang', '', '', 'PC', 8164, 'JPY ', 'Kontrak ', 'KONTRAKNO.136/HK-PG/KCI/V/2018tgl.15-5-2018.  ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (117, 6002338, 'Armaflek 120x90 x5 cm', 'Sarana - Barang Umum', '', '120x90 x5 cm', 'PC', 110000, 'IDR ', 'SPB ', '17/SPH/VIII/2015122Oktober2015 ', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (118, 6000050, 'ARMAFLEX 5X137X30000MM', 'Sarana - Suku Cadang', '', '', 'M', 877000, 'IDR ', 'Kontrak ', '231/HK-PG/KCI/VIII/2019,Tanggal16Agustus2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (119, 1000310, 'ARMAFLEX DIA 3/4 IN', 'Sarana - Suku Cadang', '', '', 'PC', 56300, 'IDR ', 'Kontrak ', '231/HK-PG/KCI/VIII/2019,Tanggal16Agustus2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (120, 2001157, 'Armaflex lembaran 10 mm', 'Sarana - Suku Cadang', '', '', 'PC', 96320, 'IDR ', 'Kontrak ', '301/HK-PG/KCI/XI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (121, 6006491, 'ARMORED HOSE 19×35×800 FS-112B/012 COMMO', 'Sarana - Suku Cadang', '', '', 'PC', 13529, 'JPY ', 'Kontrak ', '362.1/HK-PG/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (122, 6002886, 'Armored hose TB', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 157360, 'JPY ', 'Kontrak ', '159/HK-PG/KCJ/V/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (123, 6003168, 'Armored hose tr246e', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 1216809, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (124, 6002400, 'aster controller', 'Sarana - Suku Cadang', '', '', 'PC', 12434, 'JPY ', 'Kontrak ', '165/HK-PG/KCJ/VI/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (125, 0, 'ASTM E164 Metric IIW', 'Sarana - Fasilitas', '', '', 'PC', 10550000, 'IDR ', 'SPB ', 'SPB12/SPB-FAS/CE/KCI/X/201902.10.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (126, 5000001, 'ATF 220', 'Sarana - Barang Umum', '', '', 'L', 33025, 'IDR ', 'SAP ', '', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (127, 0, 'ATF VISCOSITY GRADE 32 (Pelumas Fan Hidr', 'Sarana - Fasilitas', '', '', 'L', 60400, 'IDR ', 'Kontrak ', 'SPB15/SPB/CTP/KCI/XI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (128, 6000068, 'Automatic Announcer', 'Sarana - Barang Umum', '', '', 'SET', 24200000, 'IDR ', 'SPK ', '54/ GE / SPK/ KCJ / VIII / 2016  ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (129, 6004037, 'Automatic drain valve D-1 ADV KIT', 'Sarana - Suku Cadang', '', '', 'SET', 1504600, 'JPY ', 'Kontrak ', '056.1/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (130, 6004564, 'Automatic drain valve D-1 ADV Maint Kit', 'Sarana - Suku Cadang', '', '', 'SET', 1907300, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (131, 6000071, 'Automatic Voltage Regulator (AVR) JR 205', 'Sarana - Suku Cadang', '', '', 'Un', 160233828, 'IDR ', 'Kontrak ', '373/HK-PG/IX/KCJ/2015 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (132, 6003292, 'Auxiliary main collector pantograph', 'Sarana - Suku Cadang', '', '', 'PC', 160000, 'IDR ', 'SPB ', '31/GE/SPB/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (133, 0, 'Avo Meter; Fluke 87V', 'Sarana - Fasilitas', '', '', 'PC', 9550000, 'IDR ', 'Kontrak ', '224/HK-PG/KCI/VIII/2019TANGGAL09AGUSTUS2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (134, 0, 'Axel Roll Carrier', 'Sarana - Fasilitas', '', 'K410', 'Pcs', 27300000, 'IDR ', 'SPK ', '11/ SPK - FAS/ CE / KCI / IX/ 2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (135, 6004699, 'Axle Bearing (JC32) KIT 4 ITEM', 'Sarana - Suku Cadang', '', '', 'SET', 3509800, 'JPY ', 'Kontrak ', '056/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (136, 6004700, 'Axle Bearing (JT27) KIT 3 ITEM', 'Sarana - Suku Cadang', '', '', 'SET', 516400, 'JPY ', 'Kontrak ', '281/HK-PG/KCI/X/2019Tanggal10Oktober2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (137, 6005591, 'AXLE BEARING FOR M-CAR-BOGIE', 'Sarana - Suku Cadang', '', '', 'SET', 45937500, 'JPY ', 'Kontrak ', '322/HK-PG/KCI/XI/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (138, 6005590, 'AXLE BEARING FOR T-CAR-BOGIE', 'Sarana - Suku Cadang', '', '', 'SET', 40475000, 'JPY ', 'Kontrak ', '322/HK-PG/KCI/XI/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (139, 6005575, 'AXLE BEARING FOR T-CAR-BOGIE FOR HUSLER', 'Sarana - Suku Cadang', '', '', 'SET', 40475000, 'JPY ', 'Kontrak ', '322/HK-PG/KCI/XI/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (140, 6002406, 'Axle boX body (for general part use)', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 12684, 'JPY ', 'Kontrak ', '165/HK-PG/KCJ/VI/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (141, 6005598, 'AXLE BOX WEAR PLATE', 'Sarana - Suku Cadang', '', '', 'PC', 3670300, 'JPY ', 'Kontrak ', '322/HK-PG/KCI/XI/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (142, 6002820, 'Axle spring conical rubber', 'Sarana - Suku Cadang', '', '', 'PC', 45957, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (143, 6003894, 'Axle spring conical rubber for (TR241B)', 'Sarana - Suku Cadang', '', '', 'PC', 44446, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (144, 6006332, 'AXLE SPRING CONICAL RUBBER FOR DT70', 'Sarana - Suku Cadang', '', '', 'PC', 47227, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (145, 6005544, 'Axle spring conical rubber TB', 'Sarana - Suku Cadang', '', '', 'PC', 44446, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (146, 6006336, 'AXLE SPRING CONICAL RUBBER TB (FRONT)', 'Sarana - Suku Cadang', '', '', 'PC', 45674, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (147, 6004995, 'Axle-beam rubber for Trailing bogie', 'Sarana - Suku Cadang', '', '', 'PC', 2708600, 'JPY ', 'Kontrak ', '056/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (148, 6002982, 'Axle-beam rubber tr246e', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 3051227, 'JPY ', 'Kontrak ', '360/HK-PG/KCJ/XII/2016 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (149, 0, 'b. Loose rib press-in jig', 'Sarana - Fasilitas', '', 'JIG-M1-C-JC32B-KCS', 'bh', 63167200, 'IDR ', 'Kontrak ', '068/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (150, 6004070, 'B7 Pressure regulating valve KIT', 'Sarana - Suku Cadang', '', '', 'SET', 6229, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (151, 6003065, 'Back cover', 'Sarana - Suku Cadang', '', '', 'PC', 22591, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (152, 6003052, 'Back cover (JT14)', 'Sarana - Suku Cadang', '', '', 'PC', 2473500, 'JPY ', 'Kontrak ', '281/HK-PG/KCI/X/2019Tanggal10Oktober2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (153, 6005620, 'Back cover JC32', 'Sarana - Suku Cadang', '', '', 'PC', 2245200, 'JPY ', 'Kontrak ', '281/HK-PG/KCI/X/2019Tanggal10Oktober2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (154, 2001158, 'Bahan packing karet 0,5 mm', 'Sarana - Suku Cadang', '', '', 'PC', 17100, 'IDR ', 'Kontrak ', '231/HK-PG/KCI/VIII/2019,Tanggal16Agustus2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (155, 2001159, 'Bahan packing karet 2 mm', 'Sarana - Suku Cadang', '', '', 'PC', 33000, 'IDR ', 'Kontrak ', '231/HK-PG/KCI/VIII/2019,Tanggal16Agustus2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (156, 6002341, 'BAHAN PACKING TEBAL 0,6 MM', 'Sarana - Barang Umum', '', 'TEBAL 0,6 MM', 'M', 220000, 'IDR ', 'SPB ', '78 / CE / SPB / KCJ / XI / 2016 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (157, 6002761, 'Balance spring ps21', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 366104, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (158, 6005790, 'Balancer assembly for side window', 'Sarana - Suku Cadang', '', '', 'PC', 7833, 'JPY ', 'Kontrak ', '233/HK-PG/KCI/VIII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (159, 0, 'BALAST LAMPU MERCURY 250 WATT', 'Sarana - Barang Umum', '', '', 'PC', 159000, 'IDR ', 'SPB ', 'SPB12/SPB-FAS/CE/KCI/IX/201826.09.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (160, 0, 'BALAST LAMPU MERCURY 400 WATT', 'Sarana - Barang Umum', '', '', 'PC', 190000, 'IDR ', 'SPB ', 'SPB12/SPB-FAS/CE/KCI/IX/201826.09.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (161, 6000083, 'BALL BEARING (FLEXIBLE) 2303', 'Sarana - Barang Umum', '', '', 'PC', 193500, 'IDR ', 'SAP ', '', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (162, 6000088, 'BALL BEARING 6020 C4', 'Sarana - Barang Umum', '', '', 'PC', 2090620, 'IDR ', 'SAP ', '', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (163, 6000090, 'BALL BEARING 6206ZZ', 'Sarana - Suku Cadang', '', '6206ZZ ', 'PC', 71500, 'IDR ', 'Kontrak ', '502/HK-PG/KCJ/X/2015 ', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (164, 6005734, 'BALL BEARING 6302 ; Tutup Besi 2 Sisi', 'Sarana - Suku Cadang', '', '', 'PC', 24090, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (165, 6000091, 'BALL BEARING 6302ZZ', 'Sarana - Suku Cadang', '', '', 'PC', 20900, 'IDR ', 'Kontrak ', '066/SPR/LOG/KCI/III/201826-Feb-18087.1/HK-PG/KCI/III/2018Tgl.26-03-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (166, 6000092, 'BALL BEARING 6305ZZ', 'Sarana - Suku Cadang', '', '6305ZZ ', 'PC', 72930, 'IDR ', 'Kontrak ', '502/HK-PG/KCJ/X/2015 ', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (167, 6000093, 'BALL BEARING 6306ZZ', 'Sarana - Suku Cadang', '', '6306ZZ ', 'PC', 95095, 'IDR ', 'Kontrak ', '502/HK-PG/KCJ/X/2015 ', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (168, 6006209, 'BALL BEARING 6311C4P6 FOR MT74 TM', 'Sarana - Suku Cadang', '', '', 'PC', 19300, 'JPY ', 'Kontrak ', '085/HK-PG/KCI/III/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (169, 6000096, 'BALL BEARING 6312', 'Sarana - Suku Cadang', '', '6312 ', 'PC', 1186000, 'IDR ', 'Kontrak ', '504/HK-PG/KCJ/X/2015 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (170, 6000097, 'BALL BEARING 6312M2 C4 P6', 'Sarana - Barang Umum', '', '', 'PC', 1255000, 'IDR ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (171, 6004806, 'Ball Bearing 6313-C4-0 Crank Shaft', 'Sarana - Suku Cadang', '', '', 'PC', 7000, 'JPY ', 'Kontrak ', '183/HK-PG/KCI/VII/2018,TGL.19-07-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (172, 6005175, 'Ball Bearing 6313-C4-0; 1087-4111817-92', 'Sarana - Suku Cadang', '', '', 'PC', 693000, 'JPY ', 'Kontrak ', '136/HK-PG/KCI/V/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (173, 6000100, 'BALL BEARING HITACHI 2TS2 6310M2 C4P6', 'Sarana - Suku Cadang', '', 'HITACHI 2TS2 6310M2 C4P6 ', 'PC', 1337408, 'IDR ', 'Kontrak ', '341/HK-PG/KCJ/VIII/2015 ', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (174, 6005713, 'BALL BEARING TM 6219M8 C4P6', 'Sarana - Suku Cadang', '', '', 'PC', 1152109, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (175, 6000102, 'BALL BEARING TM 6219M8 C4P6 S20', 'Sarana - Suku Cadang', '', '', 'PC', 1282000, 'IDR ', 'SPB ', 'SPB20/SPB/CE/KCI/VIII/201802.08.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (176, 6000103, 'BALL BEARING TM 6311 C4P6', 'Sarana - Barang Umum', '', '', 'PC', 2020000, 'IDR ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (177, 6005714, 'BALL BEARING TM 6312 C4', 'Sarana - Suku Cadang', '', '', 'PC', 460844, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (178, 6005470, 'Ball Bearing; 6219 C4P6', 'Sarana - Suku Cadang', '', '', 'PC', 1582000, 'IDR ', 'SPB ', 'SPB12/SPB/CE/KCI/IX/201912.09.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (179, 6002752, 'Ball valve', 'Sarana - Suku Cadang', '', '', 'PC', 119, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (180, 6002549, 'Ball valve 1/2 d20', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 263975, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (181, 6005578, 'Ball valve for door engine TK4', 'Sarana - Suku Cadang', '', '', 'PC', 11800, 'JPY ', 'Kontrak ', '281/HK-PG/KCI/X/2019Tanggal10Oktober2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (182, 6003082, 'Ball valve spring Door engine', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 18294, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (183, 6000107, 'BALLAS ELEKTRIK EB.36 TLD.220-230V', 'Sarana - Barang Umum', '', '', 'PC', 85000, 'IDR ', 'SPB ', 'SPB22/SPB/CE/KCI/IX/201826.09.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (184, 6005310, 'Ballas Elektrik EB-C 136 TLD 220-240 V', 'Sarana - Barang Umum', '', '', 'PC', 76300, 'IDR ', 'Kontrak ', '123/HK-PG/KCI/IV/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (185, 6004193, 'Ballast electric Philips EB-C Eco 1x36 W', 'Sarana - Barang Umum', '', '', 'PC', 51700, 'IDR ', 'SPB ', 'SPB15/SPB/CE/KCJ/III/201730.03.2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (186, 0, 'Ban belakang (solid) 5.00-8/3.00', 'Sarana - Fasilitas', '', '', 'PC', 3115900, 'IDR ', 'Kontrak ', '266/HK-PG/KCI/IX/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (187, 0, 'Ban belakang (solid) 6.00-9/4.00', 'Sarana - Fasilitas', '', '', 'PC', 3774500, 'IDR ', 'Kontrak ', '266/HK-PG/KCI/IX/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (188, 0, 'Ban belakang 200/75-9 (21x8-9/6.00)', 'Sarana - Fasilitas', '', '', 'PC', 4763660, 'IDR ', 'Kontrak ', '266/HK-PG/KCI/IX/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (189, 0, 'Ban depan (solid) 7.00-12/5.00', 'Sarana - Fasilitas', '', '', 'PC', 6117700, 'IDR ', 'Kontrak ', '266/HK-PG/KCI/IX/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (190, 0, 'Ban depan 355/45-15 (9.75-15)', 'Sarana - Fasilitas', '', '', 'PC', 4700000, 'IDR ', 'Kontrak ', '266/HK-PG/KCI/IX/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (191, 0, 'Ban fokrlift solid BS uk.700-12/500', 'Sarana - Fasilitas', '', '', 'PC', 5900000, 'IDR ', 'SPB ', 'SPB04/SPB-FAS/CE/KCI/III/201822.03.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (192, 0, 'Ban forklift solid aichi uk.300-15/800', 'Sarana - Fasilitas', '', '', 'PC', 14274000, 'IDR ', 'SPB ', 'SPB04/SPB-FAS/CE/KCI/III/201822.03.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (193, 0, 'Ban forklift solid BS uk.200.75.9/600', 'Sarana - Fasilitas', '', '', 'PC', 6100000, 'IDR ', 'SPB ', 'SPB04/SPB-FAS/CE/KCI/III/201822.03.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (194, 0, 'Ban forklift solid BS uk.500-8/300', 'Sarana - Fasilitas', '', '', 'PC', 3400000, 'IDR ', 'SPB ', 'SPB04/SPB-FAS/CE/KCI/III/201822.03.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (195, 0, 'Ban forklift solid BS uk.650-10/500', 'Sarana - Fasilitas', '', '', 'PC', 4400000, 'IDR ', 'SPB ', 'SPB04/SPB-FAS/CE/KCI/III/201822.03.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (196, 0, 'Ban forklift solid Continental uk.355/45', 'Sarana - Fasilitas', '', '', 'PC', 15311000, 'IDR ', 'SPB ', 'SPB04/SPB-FAS/CE/KCI/III/201822.03.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (197, 0, 'Ban forkllift solid BS uk.600-9/400', 'Sarana - Fasilitas', '', '', 'PC', 3200000, 'IDR ', 'SPB ', 'SPB04/SPB-FAS/CE/KCI/III/201822.03.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (198, 6003398, 'Band', 'Sarana - Suku Cadang', '', '', 'PC', 1106, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (199, 6002918, 'Banding band', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 43358, 'JPY ', 'Kontrak ', '360/HK-PG/KCJ/XII/2016 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (200, 0, 'Baterai 12 Vdc/ 100 Ah', 'Sarana - Fasilitas', '', '', 'PC', 2700000, 'IDR ', 'SPB ', 'SPB06/SPB-FAS/CE/KCI/IV/201816.04.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (201, 0, 'Baterai 12 Vdc/ 200 Ah', 'Sarana - Fasilitas', '', '', 'PC', 5360000, 'IDR ', 'SPB ', 'SPB06/SPB-FAS/CE/KCI/IV/201816.04.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (202, 0, 'Baterai 12 Vdc/ 65 Ah', 'Sarana - Fasilitas', '', '', 'PC', 2050000, 'IDR ', 'SPB ', 'SPB06/SPB-FAS/CE/KCI/IV/201816.04.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (203, 0, 'Baterai 12 Vdc/ 80 Ah', 'Sarana - Fasilitas', '', '', 'PC', 2600000, 'IDR ', 'SPB ', 'SPB06/SPB-FAS/CE/KCI/IV/201816.04.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (204, 0, 'Baterai 80 Vdc/465Ah/40 Cell', 'Sarana - Fasilitas', '', '', 'SET', 172000000, 'IDR ', 'SPB ', 'SPB06/SPB-FAS/CE/KCI/IV/201816.04.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (205, 6005300, 'Battery 6M20A - 12', 'Sarana - Suku Cadang', '', '', 'SET', 93258000, 'JPY ', 'Kontrak ', '194/HK-PG/KCI/VII/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (206, 6004201, 'Battery 6M20A-12', 'Sarana - Suku Cadang', '', '', 'UN', 109994833, 'JPY ', 'Kontrak ', '166/HK-PG/KCJ/VI/2017 ', '3033', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (207, 6004592, 'Battery 6M40B-12 + 5M40B-4', 'Sarana - Suku Cadang', '', '', 'SET', 1670000, 'JPY ', 'Kontrak ', 'SK.024/DU-LOG/KCI/IV/2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (208, 6004593, 'Battery 6M50B-12 + 5M50B-4', 'Sarana - Suku Cadang', '', '', 'SET', 180180000, 'JPY ', 'Kontrak ', '194/HK-PG/KCI/VII/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (209, 2001074, 'Battery AA 3,6 VDC', 'Sarana - Suku Cadang', '', '', 'PC', 155000, 'IDR ', 'Kontrak ', 'SPB18/SPB/CTP/KCI/XII/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (210, 6002365, 'Battery KRL seri 103, 203, 205 Type AB20', 'Sarana - Suku Cadang', '', '', 'SET', 100442270, 'JPY ', 'Kontrak ', '121/hk-pg/kcj/iv/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (211, 6002367, 'Battery KRL Seri 205 Saikyo Type 6M30A-1', 'Sarana - Suku Cadang', '', '', 'SET', 131493017, 'JPY ', 'Kontrak ', '121/hk-pg/kcj/iv/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (212, 6002366, 'Battery KRL seri Tokyu 8500 Type 6M40B-1', 'Sarana - Suku Cadang', '', '', 'SET', 151338375, 'JPY ', 'Kontrak ', '121/hk-pg/kcj/iv/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (213, 0, 'Battery liquid', 'Sarana - Fasilitas', '', '', 'PC', 20000, 'IDR ', 'Kontrak ', 'SPB19/SPB-FAS/CTP/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (214, 2000022, 'BATU GERINDA 100X16X2MM', 'Sarana - Barang Umum', '', '', 'PC', 12245, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (215, 2000023, 'BATU GERINDA 100X16X6MM', 'Sarana - Barang Umum', '', '', 'PC', 12698, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (216, 2001170, 'BATU GERINDA 105X2X16MM', 'Sarana - Barang Umum', '', '', 'PC', 13605, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (217, 2000025, 'BATU GERINDA 180X22X6MM', 'Sarana - Suku Cadang', '', '', 'PC', 30850, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (218, 2000026, 'BATU GERINDA 205X25.4X3MM', 'Sarana - Suku Cadang', '', '', 'PC', 37550, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (219, 2000027, 'BATU GERINDA 305 X 3 X 25-2/5MM', 'Sarana - Barang Umum', '', '', 'PC', 52606, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (220, 2000030, 'BATU GERINDA AMPLAS', 'Sarana - Barang Umum', '', '', 'PC', 8798, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (221, 2000581, 'BATU GERINDA POTONG 100X2X16MM', 'Sarana - Barang Umum', '', '100X2X16MM', 'PC', 11000, 'IDR ', 'Kontrak ', 'NO.136.1/HK-PG/KCJ/V/2016,Tgl.9-05-2016 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (222, 20001082, 'Baut + Ringplat + Ring Per M12 x 20', 'Sarana - Barang Umum', '', '', 'PC', 2100, 'IDR ', 'SPB ', '14/ SPB / CE / KCI / VI/ 2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (223, 2001082, 'Baut + RingPlat + Ring Per M12X20', 'Sarana - Barang Umum', '', '', 'PC', 2100, 'IDR ', 'SPB ', 'SPB14/SPB/CE/KCI/VI/201826.06.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (224, 2001370, 'BAUT BAJA HARDEN M16x80 MM', 'Sarana - Suku Cadang', '', '', 'PC', 42000, 'IDR ', 'Kontrak ', 'SPB07/SPB/CTP/KCI/VII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (225, 2001373, 'BAUT DOUBLE MUR BAJA HARDEN M20x80 MM', 'Sarana - Suku Cadang', '', '', 'PC', 72500, 'IDR ', 'Kontrak ', 'SPB07/SPB/CTP/KCI/VII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (226, 6003279, 'BAUT FULL DRAT UK. 13X30CM', 'Sarana - Barang Umum', '', '13X30CM', 'PC', 6490, 'IDR ', 'Kontrak ', 'NO.136.1/HK-PG/KCJ/V/2016,Tgl.9-05-2016 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (227, 6005660, 'Baut M12 x 15 mm + Ring Stainless', 'Sarana - Barang Umum', '', '', 'PC', 5347, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (228, 6005679, 'Baut M3 x 10 mm Kepala Bulat (+)', 'Sarana - Barang Umum', '', '', 'PC', 100, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (229, 6005678, 'Baut M4 x 10 mm Kepala Bulat (+)', 'Sarana - Barang Umum', '', '', 'PC', 118, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (230, 6005673, 'Baut M4 x 10 mm Kepala JF/Perseng (+)', 'Sarana - Barang Umum', '', '', 'PC', 109, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (231, 6005677, 'Baut M4 x 12 mm Kepala Bulat (+)', 'Sarana - Barang Umum', '', '', 'PC', 136, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (232, 6005672, 'Baut M4 x 12 mm Kepala JF/Perseng (+)', 'Sarana - Barang Umum', '', '', 'PC', 136, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (233, 6005676, 'Baut M4 x 15 mm Kepala Bulat (+)', 'Sarana - Suku Cadang', '', '', 'PC', 130, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (234, 6005671, 'Baut M4 x 20 mm Kepala JF/Perseng (+)', 'Sarana - Barang Umum', '', '', 'PC', 163, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (235, 6005675, 'Baut M5 x 12 mm Kepala Bulat (+)', 'Sarana - Suku Cadang', '', '', 'PC', 160, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (236, 6005670, 'Baut M5 x 12 mm Kepala JF/Perseng (+)', 'Sarana - Suku Cadang', '', '', 'PC', 260, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (237, 2001081, 'Baut M6 TZP', 'Sarana - Barang Umum', '', '', 'PC', 11000, 'IDR ', 'SPB ', 'SPB14/SPB/CE/KCI/VI/201826.06.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (238, 6005662, 'Baut M6 x 15 mm + Ring Stainless', 'Sarana - Barang Umum', '', '', 'PC', 2358, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (239, 6005649, 'Baut M6 x 15 mm Kepala JF/Perseng (+)', 'Sarana - Barang Umum', '', '', 'PC', 463, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (240, 6005674, 'Baut M6 x 35 mm Kepala Bulat (+)', 'Sarana - Suku Cadang', '', '', 'PC', 315, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (241, 6005661, 'Baut M8 x 15 mm + Ring Stainless', 'Sarana - Barang Umum', '', '', 'PC', 4535, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (242, 6000118, 'BAUT MUR 10.9  M 12X50MM', 'Sarana - Barang Umum', '', '', 'PC', 2300, 'IDR ', 'SAP ', '', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (243, 2001371, 'BAUT MUR BAJA HARDEN M22x200 MM', 'Sarana - Suku Cadang', '', '', 'PC', 137000, 'IDR ', 'Kontrak ', 'SPB07/SPB/CTP/KCI/VII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (244, 2001372, 'BAUT MUR BAJA HARDEN M22x70 MM', 'Sarana - Suku Cadang', '', '', 'PC', 65000, 'IDR ', 'Kontrak ', 'SPB07/SPB/CTP/KCI/VII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (245, 6003280, 'BAUT MUR M 6X25 CM', 'Sarana - Barang Umum', '', 'M 6X25 CM', 'PC', 1650, 'IDR ', 'Kontrak ', 'SPRNO.0107.2/SPR/LOG/KCJ/IV/2016,TGL.18APRIL2016KONTRAKNO.136.1/HK-PG/KCJ/V/2016,Tgl.9-05-2016 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (246, 6005657, 'Baut Mur M10 x 25 mm + Ring Stainless', 'Sarana - Barang Umum', '', '', 'PC', 7528, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (247, 6005659, 'Baut Mur M6 x 20 mm + Ring Stainless', 'Sarana - Barang Umum', '', '', 'PC', 2258, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (248, 6005658, 'Baut Mur M6 x 30 mm + Ring Stainless', 'Sarana - Barang Umum', '', '', 'PC', 2358, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (249, 6005656, 'Baut Mur M6 x 45 mm + Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 844, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (250, 6005655, 'Baut Mur M8 x 45 mm + Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 1361, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (251, 6005648, 'Baut Mur SS M10 x 25 mm + Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 7573, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (252, 6006397, 'Baut Mur SS M10 X 35MM Plus Ring Plat Pe', 'Sarana - Barang Umum', '', '', 'PC', 10158, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (253, 6005647, 'Baut Mur SS M12 x 15 mm + Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 11655, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (254, 6005646, 'Baut Mur SS M12 x 40 mm + Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 13913, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (255, 6006390, 'Baut Mur SS M4 X 20MM Plus Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 1905, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (256, 6006391, 'Baut Mur SS M5 X 30MM Plus Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 2458, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (257, 6005654, 'Baut Mur SS M6 x 10 mm + Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 1923, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (258, 6006392, 'Baut Mur SS M6 X 15MM Plus Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 2531, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (259, 2001080, 'Baut Mur SS M6 X 20 mm + Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 2721, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (260, 6006393, 'Baut Mur SS M6 X 30MM Plus Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 3011, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (261, 6005653, 'Baut Mur SS M6 x 35 mm + Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 4082, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (262, 6005652, 'Baut Mur SS M6 x 40 mm + Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 4716, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (263, 6006394, 'Baut Mur SS M8 X 15MM Plus Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 3673, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (264, 6005651, 'Baut Mur SS M8 x 20 mm + Ring Plat Per', 'Sarana - Suku Cadang', '', '', 'PC', 4020, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (265, 6006395, 'Baut Mur SS M8 X 25MM Plus Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 5170, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (266, 6005650, 'Baut Mur SS M8 x 35 mm + Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 5424, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (267, 6006396, 'Baut Mur SS M8 X 40MM Plus Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 5669, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (268, 2000152, 'BAUT MUR STAINLESS STEEL M 6X15MM', 'Sarana - Suku Cadang', '', '', 'PC', 2175, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (269, 2000154, 'BAUT MUR STAINLESS STEEL M 8X15MM', 'Sarana - Suku Cadang', '', '', 'PC', 3180, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (270, 2000155, 'BAUT MUR STAINLESS STEEL M 8X25MM', 'Sarana - Suku Cadang', '', '', 'PC', 4350, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (271, 2000156, 'BAUT MUR STAINLESS STEEL M 8X40MM', 'Sarana - Suku Cadang', '', '', 'PC', 4930, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (272, 2001015, 'BAUT MUR STAINLESS STEEL M10 X 35MM', 'Sarana - Suku Cadang', '', '', 'PC', 8800, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (273, 2001011, 'BAUT MUR STAINLESS STEEL M4 X 20MM', 'Sarana - Suku Cadang', '', '', 'PC', 1600, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (274, 2001012, 'BAUT MUR STAINLESS STEEL M5 X 30MM', 'Sarana - Suku Cadang', '', '', 'PC', 2090, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (275, 2001013, 'BAUT MUR STAINLESS STEEL M6 X 30MM', 'Sarana - Suku Cadang', '', '', 'PC', 2560, 'IDR ', 'Kontrak ', '122/HK-PG/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (276, 2001014, 'BAUT MUR STAINLESS STEEL M8 X 50MM', 'Sarana - Suku Cadang', '', '', 'PC', 4666, 'IDR ', 'Kontrak ', '301/HK-PG/KCI/XI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (277, 2000157, 'BAUT MUR TM KRL SERI 6000', 'Sarana - Suku Cadang', '', '', 'PC', 49800, 'IDR ', 'SAP ', '', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (278, 2000159, 'BAUT MUR UK.36 x 110 MM', 'Sarana - Barang Umum', '', '', 'PC', 6000, 'IDR ', 'SPB ', 'SPB04/SPB/CE/KCI/III/201814.03.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (279, 2001322, 'BAUT NEPEL OLI GEARBOX UK 1 1/2 INCH', 'Sarana - Suku Cadang', '', '', 'PC', 370000, 'IDR ', 'Kontrak ', '301/HK-PG/KCI/XI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (280, 2001323, 'BAUT NEPEL OLI GEARBOX UK 1 1/4 INCH', 'Sarana - Suku Cadang', '', '', 'PC', 342000, 'IDR ', 'Kontrak ', '301/HK-PG/KCI/XI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (281, 6005645, 'Baut SS M6 x 15 mm + Ring Plat Per (+)', 'Sarana - Barang Umum', '', '', 'PC', 2349, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (282, 6005644, 'Baut SS M8 x 50 mm + Ring Plat Per', 'Sarana - Barang Umum', '', '', 'PC', 5968, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (283, 2000153, 'Baut ST. Steel', 'Sarana - Barang Umum', '', '', 'PC', 6000, 'IDR ', 'SPB ', 'SPB04/SPB/CE/KCI/III/201814.03.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (284, 2000997, 'BAUT STAINLESS M6 x 25mm', 'Sarana - Barang Umum', '', '', 'PC', 8200, 'IDR ', 'SPB ', 'SPB29/SPB/CE/KCI/I/201803.01.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (285, 3000252, 'BAUT TOOL HOLDER R175.32-3223-19', 'Sarana - Suku Cadang', '', '', 'PC', 37000, 'IDR ', 'Kontrak ', 'SPB04/SPB-FAS/CTP/KCI/VII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (286, 6002423, 'Bearing  (for cam motor) 6203ZZE', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 1190, 'JPY ', 'Kontrak ', '165/HK-PG/KCJ/VI/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (287, 6002424, 'Bearing  (for cam motor) 6205ZZE', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 1190, 'JPY ', 'Kontrak ', '165/HK-PG/KCJ/VI/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (288, 6002714, 'Bearing (fan-side)', 'Sarana - Suku Cadang', '', '(fan-side) Seri JR 205', 'PC', 1052936, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (289, 6002715, 'Bearing (gear-side)', 'Sarana - Suku Cadang', '', '(gear-side) Seri JR 205', 'PC', 1316911, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (290, 0, 'Bearing ; 6201LU', 'Sarana - Fasilitas', '', '', 'PC', 56000, 'IDR ', 'Kontrak ', '266/HK-PG/KCI/IX/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (291, 0, 'Bearing ; 6205LU', 'Sarana - Fasilitas', '', '', 'PC', 58000, 'IDR ', 'Kontrak ', '266/HK-PG/KCI/IX/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (292, 0, 'Bearing ; 6308LU', 'Sarana - Fasilitas', '', '', 'PC', 287000, 'IDR ', 'Kontrak ', '266/HK-PG/KCI/IX/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (293, 6004195, 'Bearing 1203', 'Sarana - Suku Cadang', '', '', 'PC', 33350, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (294, 6002773, 'Bearing 1203 ps21', 'Sarana - Suku Cadang', '', '1203 ps21 Seri JR 205', 'PC', 96525, 'JPY ', 'SPB ', '51/ GE / SPB / KCJ / VII / 2016  ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (295, 6005732, 'Bearing 1208', 'Sarana - Suku Cadang', '', '', 'PC', 99950, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (296, 6002775, 'Bearing 1208 ps21', 'Sarana - Suku Cadang', '', '1208 ps21 Seri JR 205', 'PC', 124332, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (297, 6005733, 'Bearing 2303', 'Sarana - Suku Cadang', '', '', 'PC', 82100, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (298, 6002774, 'Bearing 2303 ps21', 'Sarana - Suku Cadang', '', '2303 ps21 Seri JR 205', 'PC', 184800, 'JPY ', 'SPB ', '51/ GE / SPB / KCJ / VII / 2016  ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (299, 6004196, 'Bearing 2305', 'Sarana - Suku Cadang', '', '', 'PC', 144014, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (300, 6005726, 'Bearing 6002 ; Tutup Karet 2 Sisi', 'Sarana - Suku Cadang', '', '', 'PC', 17500, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (301, 6004860, 'Bearing 6002-2RS', 'Sarana - Suku Cadang', '', '', 'PC', 17600, 'IDR ', 'SPB ', 'SPB12/SPB/CE/KCI/IX/201912.09.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (302, 6002347, 'BEARING 6002ZZ', 'Sarana - Suku Cadang', '', '6002ZZ', 'PC', 18095, 'IDR ', 'SPB ', '35 / GE / SPB / KCJ / V / 2016  ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (303, 6006402, 'BEARING 6004 Tutup Karet 2 Sisi', 'Sarana - Suku Cadang', '', '', 'PC', 24800, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (304, 6004861, 'Bearing 608 - 2RS', 'Sarana - Suku Cadang', '', '', 'PC', 12500, 'IDR ', 'SPB ', 'SPB12/SPB/CE/KCI/IX/201912.09.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (305, 6005727, 'Bearing 608 ; Tutup Karet 2 Sisi', 'Sarana - Suku Cadang', '', '', 'PC', 11100, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (306, 6002345, 'BEARING 608ZZ', 'Sarana - Suku Cadang', '', '608ZZ', 'PC', 11000, 'IDR ', 'SPB ', '35 / GE / SPB / KCJ / V / 2016  ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (307, 6004863, 'Bearing 6200 - 2RS', 'Sarana - Suku Cadang', '', '', 'PC', 15100, 'IDR ', 'SPB ', 'SPB12/SPB/CE/KCI/IX/201912.09.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (308, 6005728, 'Bearing 6200 ; Tutup Karet 2 Sisi', 'Sarana - Suku Cadang', '', '', 'PC', 15550, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (309, 6002346, 'BEARING 6200ZZ', 'Sarana - Suku Cadang', '', '', 'PC', 13000, 'IDR ', 'SPB ', 'SPB29/SPB/CE/KCI/I/201803.01.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (310, 6003182, 'Bearing　6200ZZCM AU717', 'Sarana - Suku Cadang', '', '6200ZZCM AU717 Seri JR 205', 'PC', 24573, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (311, 6005725, 'Bearing 6202 ; Non Contact Rubber Seal', 'Sarana - Suku Cadang', '', '', 'PC', 16600, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (312, 6004194, 'Bearing 6202LLU', 'Sarana - Suku Cadang', '', '', 'PC', 22990, 'IDR ', 'SPB ', 'SPB15/SPB/CE/KCJ/III/201730.03.2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (313, 6005724, 'Bearing 6203 ; Non Contact Rubber Seal', 'Sarana - Suku Cadang', '', '', 'PC', 22500, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (314, 6005712, 'Bearing 6204 Non Contact Rubber Seal', 'Sarana - Suku Cadang', '', '', 'PC', 30300, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (315, 6005723, 'BEARING 6206 ; Non Contact Rubber Seal', 'Sarana - Suku Cadang', '', '', 'PC', 51000, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (316, 6004199, 'Bearing 6206 LLU', 'Sarana - Suku Cadang', '', '', 'PC', 44770, 'IDR ', 'SPB ', 'SPB15/SPB/CE/KCJ/III/201730.03.2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (317, 6005731, 'Bearing 625 ; Tutup Besi 1 Sisi', 'Sarana - Suku Cadang', '', '', 'PC', 10750, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (318, 6000121, 'BEARING 625Z', 'Sarana - Suku Cadang', '', '', 'PC', 35000, 'IDR ', 'SAP ', '', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (319, 6004862, 'Bearing 626 - 2RS', 'Sarana - Suku Cadang', '', '', 'PC', 16300, 'IDR ', 'SPB ', 'SPB12/SPB/CE/KCI/IX/201912.09.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (320, 6005729, 'Bearing 626 ; Tutup Karet 2 Sisi', 'Sarana - Suku Cadang', '', '', 'PC', 10750, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (321, 6002348, 'BEARING 626ZZ', 'Sarana - Suku Cadang', '', '626ZZ ', 'PC', 3905, 'IDR ', 'SPB ', '78 / CE / SPB / KCJ / XI / 2016 ', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (322, 6002467, 'BEARING 6302Z', 'Sarana - Suku Cadang', '', '6302Z ', 'PC', 19250, 'IDR ', 'Kontrak ', '529/HK-PG/KCJ/X/2015 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (323, 6002343, 'BEARING 6303', 'Sarana - Suku Cadang', '', '', 'PC', 28000, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (324, 6002770, 'Bearing 6303ZZ ps21', 'Sarana - Suku Cadang', '', '', 'PC', 22660, 'JPY ', 'SPB ', 'SPB15/SPB/CE/KCJ/III/201730.03.2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (325, 6004197, 'Bearing 6304', 'Sarana - Suku Cadang', '', '', 'PC', 18150, 'IDR ', 'SPB ', 'SPB15/SPB/CE/KCJ/III/201730.03.2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (326, 6005722, 'BEARING 6305 ; Non Contact Rubber Seal', 'Sarana - Suku Cadang', '', '', 'PC', 62400, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (327, 6003831, 'BEARING 6305 LL', 'Sarana - Suku Cadang', '', '6305 LL ', 'PC', 60500, 'IDR ', 'SPB ', '52/ GE / SPB/ KCJ / VIII/ 2016  ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (328, 6002795, 'Bearing　6305LLB', 'Sarana - Suku Cadang', '', '', 'PC', 80200, 'JPY ', 'Kontrak ', '056/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (329, 6003181, 'Bearing　6305LLB AU717', 'Sarana - Suku Cadang', '', '6305LLB AU717 Seri JR 205', 'PC', 72054, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (330, 6002342, 'BEARING 6305ZZC3', 'Sarana - Suku Cadang', '', '6305ZZC3 ', 'PC', 40150, 'IDR ', 'SPB ', '78 / CE / SPB / KCJ / XI / 2016 ', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (331, 6004198, 'Bearing 6306 LLU', 'Sarana - Suku Cadang', '', '', 'PC', 67210, 'IDR ', 'SPB ', 'SPB15/SPB/CE/KCJ/III/201730.03.2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (332, 6006415, 'BEARING 6306 Non Contact Rubber Seal', 'Sarana - Suku Cadang', '', '', 'PC', 68000, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (333, 6006416, 'BEARING 6307 Tutup Karet 2 Sisi', 'Sarana - Suku Cadang', '', '', 'PC', 109000, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (334, 6005716, 'Bearing 6308 C3', 'Sarana - Suku Cadang', '', '', 'PC', 87340, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (335, 6002503, 'BEARING 6308 ZZ C3', 'Sarana - Suku Cadang', '', '', 'PC', 74000, 'IDR ', 'SPB ', 'SPB20/SPB/CE/KCI/VIII/201802.08.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (336, 6005715, 'Bearing 6309 C3 ; Tutup Besi 1 Sisi', 'Sarana - Suku Cadang', '', '', 'PC', 133650, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (337, 6002507, 'BEARING 6309 ZZ C30', 'Sarana - Suku Cadang', '', '', 'PC', 117300, 'IDR ', 'SPR ', '066/SPR/LOG/KCI/III/201826-Feb-18087.1/HK-PG/KCI/III/2018Tgl.26-03-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (338, 6002506, 'BEARING 6311 C3', 'Sarana - Suku Cadang', '', '', 'PC', 325000, 'IDR ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (339, 6005717, 'Bearing 6311 C3 ; Tutup Besi 2 Sisi', 'Sarana - Suku Cadang', '', '', 'PC', 307670, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (340, 6004190, 'Bearing 6311ZZC3', 'Sarana - Suku Cadang', '', '', 'PC', 807800, 'JPY ', 'Kontrak ', '136/HK-PG/KCI/V/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (341, 6004811, 'Bearing 6311ZZC3 Motor', 'Sarana - Suku Cadang', '', '', 'PC', 8160, 'JPY ', 'Kontrak ', '183/HK-PG/KCI/VII/2018,TGL.19-07-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (342, 6003973, 'Bearing 6312 C3', 'Sarana - Suku Cadang', '', '', 'PC', 267410, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (343, 6005721, 'Bearing 6313 C4', 'Sarana - Suku Cadang', '', '', 'PC', 576055, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (344, 6002911, 'Bearing 6319 C3', 'Sarana - Suku Cadang', '', '', 'PC', 1035000, 'IDR ', 'SPB ', 'SPB12/SPB/CE/KCI/IX/201912.09.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (345, 6005730, 'Bearing 635 ; Tutup Karet 2 Sisi', 'Sarana - Suku Cadang', '', '', 'PC', 11850, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (346, 6000122, 'BEARING 635Z', 'Sarana - Suku Cadang', '', '', 'PC', 42000, 'IDR ', 'SAP ', '', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (347, 6003337, 'Bearing Cover Gasket', 'Sarana - Suku Cadang', '', '', 'PC', 139500, 'JPY ', 'Kontrak ', '136/HK-PG/KCI/V/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (348, 6005718, 'Bearing CP-C NU412MC3', 'Sarana - Suku Cadang', '', '', 'PC', 1632155, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (349, 6005719, 'Bearing CP-G NH218MC3', 'Sarana - Suku Cadang', '', '', 'PC', 960091, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (350, 6005162, 'Bearing for Door Wheel ( TK-003 ); TK-00', 'Sarana - Suku Cadang', '', '', 'PC', 91000, 'JPY ', 'Kontrak ', '136/HK-PG/KCI/V/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (351, 0, 'Bearing guide roller ; SKF 31312 J2/Q', 'Sarana - Fasilitas', '', '', 'PC', 1200000, 'IDR ', 'Kontrak ', 'SPB18//SPB-FAS/CTP/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (352, 6006403, 'BEARING NA 4904', 'Sarana - Suku Cadang', '', '', 'PC', 59700, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (353, 6006404, 'BEARING NA 6903R', 'Sarana - Suku Cadang', '', '', 'PC', 19100, 'IDR ', 'Kontrak ', 'SPB05/SPB/CTP/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (354, 6002693, 'Bearing NH (motor side)', 'Sarana - Suku Cadang', '', '', 'PC', 3207500, 'JPY ', 'Kontrak ', '281/HK-PG/KCI/X/2019Tanggal10Oktober2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (355, 6003717, 'Bearing NH218 MC3', 'Sarana - Suku Cadang', '', 'NH218 MC3 ', 'PC', 8741311, 'JPY ', 'Kontrak ', '143/HK-PG/KCJ/V/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (356, 6005720, 'Bearing NH412 C3', 'Sarana - Suku Cadang', '', '', 'PC', 1968187, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (357, 6000126, 'BEARING NJ 318', 'Sarana - Suku Cadang', '', 'NJ 318 ', 'PC', 1100000, 'IDR ', 'Kontrak ', '504/HK-PG/KCJ/X/2015 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (358, 6004644, 'BEARING NSK RUW 309 UU C3', 'Sarana - Suku Cadang', '', '', 'PC', 2400000, 'IDR ', 'Kontrak ', '066/SPR/LOG/KCI/III/201826-Feb-18087.1/HK-PG/KCI/III/2018Tgl.26-03-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (359, 6004491, 'Bearing NTN 6201 ZZ', 'Sarana - Suku Cadang', '', '', 'PC', 14300, 'IDR ', 'Kontrak ', '066/SPR/LOG/KCI/III/201826-Feb-18087.1/HK-PG/KCI/III/2018Tgl.26-03-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (360, 6003829, 'BEARING NTN 6202 ZZ', 'Sarana - Suku Cadang', '', 'NTN 6202 ZZ ', 'PC', 24200, 'IDR ', 'SPB ', '52/ GE / SPB/ KCJ / VIII/ 2016  ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (453, 6003991, 'Blade Wiper Seri 05', 'Sarana - Suku Cadang', '', '', 'PC', 168500, 'IDR ', 'Kontrak ', 'SPB14/SPB/CTP/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (361, 6004642, 'BEARING NTN 6206 LLB', 'Sarana - Suku Cadang', '', '', 'PC', 37835, 'IDR ', 'Kontrak ', '066/SPR/LOG/KCI/III/201826-Feb-18087.1/HK-PG/KCI/III/2018Tgl.26-03-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (362, 6003832, 'BEARING NTN 626 ZZ', 'Sarana - Suku Cadang', '', '', 'PC', 22000, 'IDR ', 'SPB ', 'SPB15/SPB/CE/KCJ/III/201730.03.2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (363, 6004641, 'BEARING NTN 6305 LLB', 'Sarana - Suku Cadang', '', '', 'PC', 42205, 'IDR ', 'Kontrak ', '066/SPR/LOG/KCI/III/201826-Feb-18087.1/HK-PG/KCI/III/2018Tgl.26-03-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (364, 6003830, 'BEARING NTN 6305 ZZ', 'Sarana - Suku Cadang', '', 'NTN 6305 ZZ ', 'PC', 50600, 'IDR ', 'SPB ', '52/ GE / SPB/ KCJ / VIII/ 2016  ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (365, 6004643, 'BEARING NTN 6306 LLB', 'Sarana - Suku Cadang', '', '', 'PC', 110610, 'IDR ', 'Kontrak ', '301/HK-PG/KCI/XI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (366, 6005311, 'Bearing NTN 6906 ZZ', 'Sarana - Suku Cadang', '', '', 'PC', 47000, 'IDR ', 'Kontrak ', 'SPB06/SPB/CE/KCI/V/201927.05.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (367, 6002689, 'Bearing NU', 'Sarana - Suku Cadang', '', '', 'PC', 2672900, 'JPY ', 'Kontrak ', '056/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (368, 6002504, 'BEARING NU 309 C3', 'Sarana - Suku Cadang', '', '', 'PC', 432041, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (369, 6002505, 'BEARING NU 311 C3', 'Sarana - Suku Cadang', '', '', 'PC', 576055, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (370, 6002500, 'BEARING NU 312 C3', 'Sarana - Suku Cadang', '', '', 'PC', 768073, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (371, 6005735, 'Bearing NU 313', 'Sarana - Suku Cadang', '', '', 'PC', 864082, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (372, 6005621, 'Bearing NU for air compressor C2000', 'Sarana - Suku Cadang', '', '', 'PC', 2672900, 'JPY ', 'Kontrak ', '281/HK-PG/KCI/X/2019Tanggal10Oktober2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (373, 6004808, 'Bearing NU313 Crank Shaft', 'Sarana - Suku Cadang', '', '', 'PC', 13967, 'JPY ', 'Kontrak ', '183/HK-PG/KCI/VII/2018,TGL.19-07-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (374, 6005177, 'Bearing NU313; 1087-4082310-31', 'Sarana - Suku Cadang', '', '', 'PC', 1287000, 'JPY ', 'Kontrak ', '136/HK-PG/KCI/V/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (375, 6000127, 'BEARING NU318 C3', 'Sarana - Suku Cadang', '', '', 'PC', 1920182, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (376, 6002910, 'Bearing NU319 C3', 'Sarana - Suku Cadang', '', '', 'PC', 2745000, 'IDR ', 'SPB ', 'SPB12/SPB/CE/KCI/IX/201912.09.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (377, 6002939, 'Bearing nut stopper(large)', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 6986, 'JPY ', 'Kontrak ', '360/HK-PG/KCJ/XII/2016 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (378, 6002938, 'Bearing nut stopper(medium)', 'Sarana - Suku Cadang', '', '', 'PC', 46, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (379, 6002941, 'Bearing nut stopper(small)', 'Sarana - Suku Cadang', '', '', 'PC', 46, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (380, 6003244, 'Bearing PS33E No 1', 'Sarana - Suku Cadang', '', 'PS33E No 1 Seri JR 205', 'PC', 252127, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (381, 6003246, 'Bearing PS33E No 2', 'Sarana - Suku Cadang', '', 'PS33E No 2 Seri JR 205', 'PC', 82549, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (382, 6003247, 'Bearing PS33E No 3', 'Sarana - Suku Cadang', '', 'PS33E No 3 Seri JR 205', 'PC', 781080, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (383, 6003248, 'Bearing PS33E No 4', 'Sarana - Suku Cadang', '', 'PS33E No 4 Seri JR 205', 'PC', 441797, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (384, 0, 'Bearing Puller', 'Sarana - Fasilitas', '', '', 'UN', 699000000, 'IDR ', 'SPR ', '141/SPR/LOG/KCI/VI/2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (385, 0, 'Bearing removal devices', 'Sarana - Fasilitas', '', 'APF-4T', 'bh', 424072300, 'IDR ', 'Kontrak ', '068/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (386, 0, 'Bearing Roda', 'Sarana - Fasilitas', '', 'Koyo', 'pcs', 675000, 'IDR ', 'SPK ', '08 / SPK- FAS/ CE / KCI / V/ 2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (387, 0, 'Bearing roller carrier; SKF 24124 CC/W33', 'Sarana - Fasilitas', '', '', 'PC', 10800000, 'IDR ', 'Kontrak ', 'SPB18//SPB-FAS/CTP/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (388, 6002501, 'BEARING RTW 319', 'Sarana - Suku Cadang', '', 'RTW 319 ', 'PC', 10733000, 'IDR ', 'Kontrak ', '504/HK-PG/KCJ/X/2015 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (389, 6002502, 'BEARING RUW 319', 'Sarana - Suku Cadang', '', 'RUW 319 ', 'PC', 6645000, 'IDR ', 'Kontrak ', '504/HK-PG/KCJ/X/2015 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (390, 6003688, 'Bearing wahser(lower)', 'Sarana - Suku Cadang', '', '', 'PC', 258156, 'JPY ', 'Kontrak ', '159/HK-PG/KCJ/V/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (391, 6003687, 'Bearing wahser(Upper)', 'Sarana - Suku Cadang', '', '', 'PC', 258156, 'JPY ', 'Kontrak ', '159/HK-PG/KCJ/V/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (392, 6005471, 'Bearing; 6305 LLB', 'Sarana - Suku Cadang', '', '', 'PC', 48500, 'IDR ', 'SPB ', 'SPB12/SPB/CE/KCI/IX/201912.09.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (393, 0, 'Bearing; HR30310', 'Sarana - Fasilitas', '', '', 'PC', 675000, 'IDR ', 'SPB ', 'SPB10/SPB-FAS/CE/KCI/IX/201927.09.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (394, 6005342, 'Bearing; NJ 318 C3', 'Sarana - Suku Cadang', '', '', 'PC', 1760000, 'IDR ', 'Kontrak ', '161/HK-PG/KCI/VI/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (395, 6004787, 'Bearingfor Door Wheel', 'Sarana - Suku Cadang', '', '', 'PC', 920, 'JPY ', 'Kontrak ', '183/HK-PG/KCI/VII/2018,TGL.19-07-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (396, 5000002, 'BECHEM ALUTHERM B2', 'Sarana - Barang Umum', '', '', 'KG', 258097, 'IDR ', 'SAP ', '', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (397, 0, 'Bell buzer ', 'Sarana - Suku Cadang', '', '100 VDC', 'bh', 407000, 'IDR ', 'SPK ', '02/SPK/ CE /KCI / III / 2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (398, 6003502, 'Bellofragm', 'Sarana - Suku Cadang', '', '', 'PC', 262300, 'JPY ', 'Kontrak ', '136/HK-PG/KCI/V/2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (399, 6002585, 'Bellowphragm', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 941443, 'JPY ', 'Kontrak ', '064.1/HK-PG/KCJ/III/2016 ', '2016', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (400, 6005539, 'Bellows （for air spring)', 'Sarana - Suku Cadang', '', '', 'PC', 10122900, 'JPY ', 'Kontrak ', '281/HK-PG/KCI/X/2019Tanggal10Oktober2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (401, 6002976, 'Bellows bogie', 'Sarana - Suku Cadang', '', '', 'PC', 87816, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (402, 6006338, 'BELLOWS（FOR AIR SPRING) (TR241B)', 'Sarana - Suku Cadang', '', '', 'PC', 104671, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (403, 6003019, 'Bellows（for air spring) tr246e', 'Sarana - Suku Cadang', '', '', 'PC', 121103, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (404, 6006481, 'BEND WASHER 01-58418-01 C2500LB', 'Sarana - Suku Cadang', '', '', 'PC', 1450, 'JPY ', 'Kontrak ', '362.1/HK-PG/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (405, 6006485, 'BEND WASHER AW-07 C2500LB', 'Sarana - Suku Cadang', '', '', 'PC', 83, 'JPY ', 'Kontrak ', '362.1/HK-PG/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (406, 6004551, 'Bend washer AW-5003 Coupling assembly', 'Sarana - Suku Cadang', '', '', 'PC', 343, 'JPY ', 'Kontrak ', 'KONTRAKNO.136/HK-PG/KCI/V/2018tgl.15-5-2018.  ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (407, 6005774, 'BEND WASHER AXEL BOX', 'Sarana - Suku Cadang', '', '', 'PC', 145000, 'IDR ', 'Kontrak ', '09/SPB/CE/KCI/V/202015.05.2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (408, 6006192, 'BEND WASHER AXEL BOX Tokyu 8000/8500', 'Sarana - Suku Cadang', '', '', 'PC', 139000, 'IDR ', 'Kontrak ', '116/HK-PG/KCI/IV/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (409, 6006194, 'Bend Washer Axle Box Seri 05 Metro', 'Sarana - Suku Cadang', '', '', 'PC', 41616, 'IDR ', 'Kontrak ', '116/HK-PG/KCI/IV/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (410, 6006193, 'Bend Washer Center Pivot Seri 05 Metro', 'Sarana - Suku Cadang', '', '', 'PC', 82494, 'IDR ', 'Kontrak ', '116/HK-PG/KCI/IV/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (411, 6004953, 'Bend washer for spring plat metro 378', 'Sarana - Suku Cadang', '', '', 'PC', 105000, 'IDR ', 'Kontrak ', '09/SPB/CE/KCI/V/202015.05.2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (412, 6004954, 'Bend washer for spring plat metro ss 012', 'Sarana - Suku Cadang', '', '', 'PC', 102000, 'IDR ', 'Kontrak ', '09/SPB/CE/KCI/V/202015.05.2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (413, 6004950, 'Bend washer JC32', 'Sarana - Suku Cadang', '', '', 'PC', 146000, 'IDR ', 'Kontrak ', '09/SPB/CE/KCI/V/202015.05.2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (414, 6004951, 'Bend washer JC32 tacho generator/hasler', 'Sarana - Suku Cadang', '', '', 'PC', 108500, 'IDR ', 'Kontrak ', '116/HK-PG/KCI/IV/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (415, 6005771, 'Bend washer JT27', 'Sarana - Suku Cadang', '', '', 'PC', 96200, 'IDR ', 'Kontrak ', '09/SPB/CE/KCI/V/202015.05.2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (416, 6005772, 'Bend washer JT27 Hasler', 'Sarana - Suku Cadang', '', '', 'PC', 101000, 'IDR ', 'Kontrak ', '09/SPB/CE/KCI/V/202015.05.2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (417, 6003946, 'Bendera Kuning', 'Sarana - Suku Cadang', '', '', 'PC', 32000, 'IDR ', 'Kontrak ', 'SPB14/SPB/CTP/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (418, 6003945, 'Bendera Merah', 'Sarana - Suku Cadang', '', '', 'PC', 32000, 'IDR ', 'Kontrak ', 'SPB14/SPB/CTP/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (419, 0, 'Bending Machine Listrik Pipa Ac; Rothenb', 'Sarana - Fasilitas', '', '', 'PC', 32700000, 'IDR ', 'Kontrak ', '235/HK-PG/KCI/VIII/2019,Tanggal20Agustus2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (420, 6002832, 'Bent washer', 'Sarana - Suku Cadang', '', '', 'PC', 43, 'JPY ', 'Kontrak ', '025/HK-PG/KCI/I/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (421, 0, 'Besi Baja S 45C', 'Sarana - Fasilitas', '', 'Uk. 105 x 160 x 165', 'kg', 67000, 'IDR ', 'SPK ', '08 / SPK- FAS/ CE / KCI / V/ 2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (422, 0, 'Besi Baja S45C', 'Sarana - Fasilitas', '', 'Uk. 435 x 120 x 65', 'kg', 64500, 'IDR ', 'SPK ', '08 / SPK- FAS/ CE / KCI / V/ 2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (423, 0, 'Besi Baja S45C', 'Sarana - Fasilitas', '', 'Uk. 105 x 170 x 165', 'kg', 65000, 'IDR ', 'SPK ', '08 / SPK- FAS/ CE / KCI / V/ 2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (424, 0, 'Besi Baja S45C', 'Sarana - Fasilitas', '', 'Uk. 367 x 80 x 80', 'kg', 67000, 'IDR ', 'SPK ', '08 / SPK- FAS/ CE / KCI / V/ 2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (425, 0, 'Besi Baja SS 400', 'Sarana - Fasilitas', '', 'Uk. 380 x 380 x 20', 'kg', 31000, 'IDR ', 'SPK ', '08 / SPK- FAS/ CE / KCI / V/ 2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (426, 0, 'Besi Baja SS 400', 'Sarana - Fasilitas', '', 'Uk. 160 x 160 x 20', 'kg', 31000, 'IDR ', 'SPK ', '08 / SPK- FAS/ CE / KCI / V/ 2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (427, 2000888, 'Besi Full Drat Uk. 13 P 30 cm', 'Sarana - Barang Umum', '', '', 'PC', 32000, 'IDR ', 'Kontrak ', '184/HK-PG/KCI/VI/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (428, 1000311, 'BESI HOLOW UK 50X50X3MM', 'Sarana - Suku Cadang', '', '', 'PC', 355000, 'IDR ', 'Kontrak ', 'SPB07/SPB/CE/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (429, 1000361, 'Besi Kanal UNP 140 (140x55x7 mm)', 'Sarana - Suku Cadang', '', '', 'PC', 944000, 'IDR ', 'Kontrak ', 'SPB07/SPB/CE/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (430, 6006463, 'Besi Kanal UNP 65 ( 65x42x5.5 )', 'Sarana - Suku Cadang', '', '', 'PC', 360000, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (431, 1000360, 'Besi Kanal UNP 65 (65x42x5 mm)', 'Sarana - Suku Cadang', '', '', 'PC', 255000, 'IDR ', 'Kontrak ', 'SPB07/SPB/CE/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (432, 6006464, 'Besi Nako ( 15x15x5800 mm )', 'Sarana - Suku Cadang', '', '', 'PC', 450000, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (433, 1000410, 'Besi Nako (15x15x5800MM)', 'Sarana - Suku Cadang', '', '', 'PC', 160000, 'IDR ', 'Kontrak ', 'SPB07/SPB/CE/KCI/IV/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (434, 1000052, 'BESI PLAT 2400X1200X10MM', 'Sarana - Suku Cadang', '', '', 'PC', 4622400, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (435, 1000053, 'BESI PLAT 2400X1200X3MM', 'Sarana - Suku Cadang', '', '', 'PC', 1491000, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (436, 1000054, 'BESI PLAT 2400X1200X4MM', 'Sarana - Suku Cadang', '', '', 'PC', 1858200, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (437, 6006450, 'Besi Plat 2400x1200x5 mm', 'Sarana - Suku Cadang', '', '', 'PC', 2317200, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (438, 1000055, 'BESI PLAT 2400X1200X6MM', 'Sarana - Suku Cadang', '', '', 'PC', 2780400, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (439, 6006451, 'Besi Plat 2400x1200x8 mm', 'Sarana - Suku Cadang', '', '', 'PC', 3704400, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (440, 1000289, 'BESI SIKU 3X30X30X6000MM', 'Sarana - Suku Cadang', '', '', 'PC', 96000, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (441, 1000061, 'BESI SIKU 40X40X4MM', 'Sarana - Suku Cadang', '', '', 'PC', 210000, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (442, 1000062, 'BESI SIKU 60X60X6MM', 'Sarana - Suku Cadang', '', '', 'PC', 364800, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (443, 6006453, 'Besi Siku 50x50x4 mm', 'Sarana - Suku Cadang', '', '', 'PC', 258000, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (444, 6002350, 'BESI ULIR DIA 8 MM @ 1METER', 'Sarana - Barang Umum', '', 'DIA 8 MM @ 1METER', 'PC', 66000, 'IDR ', 'SPB ', '78 / CE / SPB / KCJ / XI / 2016 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (445, 6006461, 'Besi Hollow UK 40x40x3 mm', 'Sarana - Suku Cadang', '', '', 'PC', 444000, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (446, 6006449, 'Besi Hollow UK 50x50x3 mm', 'Sarana - Suku Cadang', '', '', 'PC', 558000, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (447, 6002669, 'Bias Shim（middle)', 'Sarana - Suku Cadang', '', 'Seri JR 205', 'PC', 46972, 'JPY ', 'Kontrak ', '360/HK-PG/KCJ/XII/2016 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (448, 6003294, 'BLADE WIPER 5000/1000', 'Sarana - Suku Cadang', '', '', 'PC', 150000, 'IDR ', 'SPB ', 'SPB02/SPB/CE/KCI/III/201906.03.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (449, 6003295, 'BLADE WIPER 6000M', 'Sarana - Suku Cadang', '', '', 'PC', 169500, 'IDR ', 'Kontrak ', 'SPB14/SPB/CTP/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (450, 6003992, 'Blade Wiper JR 203', 'Sarana - Suku Cadang', '', '', 'PC', 160000, 'IDR ', 'Kontrak ', 'SPB10/SPB/CE/KCI/V/2020 ', '2020', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (451, 6003291, 'BLADE WIPER JR 205', 'Sarana - Suku Cadang', '', '', 'PC', 161200, 'IDR ', 'Kontrak ', 'SPB14/SPB/CTP/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (452, 6004511, 'Blade wiper KFW', 'Sarana - Suku Cadang', '', '', 'PC', 150000, 'IDR ', 'SPB ', 'SPB02/SPB/CE/KCI/II/201819.02.2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (454, 6005093, 'Blade Wiper Seri 7000 Metro', 'Sarana - Suku Cadang', '', '', 'PC', 162000, 'IDR ', 'Kontrak ', 'SPB14/SPB/CTP/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (455, 6005092, 'Blade Wiper Seri 8000/8500', 'Sarana - Suku Cadang', '', '', 'PC', 162000, 'IDR ', 'Kontrak ', 'SPB14/SPB/CTP/KCI/X/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (456, 0, 'BNC to Microdot 6 ft; RG-174', 'Sarana - Fasilitas', '', '', 'PC', 1085000, 'IDR ', 'SPB ', 'SPB12/SPB-FAS/CE/KCI/X/201902.10.2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (457, 6002438, 'BOD (Brake operating device assembly)', 'Sarana - Suku Cadang', '', '', 'PC', 3387, 'JPY ', 'Kontrak ', '165/HK-PG/KCJ/VI/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (458, 6002439, 'BOD2B (Brake operating device assembly)', 'Sarana - Suku Cadang', '', '', 'PC', 3387, 'JPY ', 'Kontrak ', '165/HK-PG/KCJ/VI/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (459, 6004694, 'Bogie Common Parts KIT 6 ITEM', 'Sarana - Suku Cadang', '', '', 'SET', 12012, 'JPY ', 'Kontrak ', 'KONTRAKNO.236/HK-PG/KCI/IX/2018TGL.10-09-2018 ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (460, 6004519, 'Bogie FS-112B CTCar Maint KIT 10 Item', 'Sarana - Suku Cadang', '', '', 'SET', 86782, 'JPY ', 'Kontrak ', '362.1/HK-PG/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (461, 6004518, 'Bogie FS-112B Mcar Maint KIT 15 Item', 'Sarana - Suku Cadang', '', '', 'SET', 91102, 'JPY ', 'Kontrak ', '362.1/HK-PG/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (462, 6004517, 'Bogie FS-112B/012 Common Maint KIT 6Item', 'Sarana - Suku Cadang', '', '', 'SET', 12708, 'JPY ', 'Kontrak ', '362.1/HK-PG/KCI/XII/2021 ', '2021', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (463, 6005560, 'Bogie FS-378 Common Main KIT 19 ITEM', 'Sarana - Suku Cadang', '', '', 'SET', 110156200, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (464, 6004521, 'Bogie FS-378 Common Maint KIT 20 Item', 'Sarana - Suku Cadang', '', '', 'SET', 107734800, 'JPY ', 'Kontrak ', '056.1/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (465, 6004046, 'Bogie FS-378 Common Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 112657266, 'JPY ', 'Kontrak ', '057/HK-PG/KCJ/II/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (466, 6004523, 'Bogie FS-378 Ctcar Maint KIT 9 Item', 'Sarana - Suku Cadang', '', '', 'SET', 3952500, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (467, 6004522, 'Bogie FS-378 Mcar Maint KIT 12 Item', 'Sarana - Suku Cadang', '', '', 'SET', 42109700, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (468, 6004047, 'Bogie FS-378 Mcar Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 209328287, 'JPY ', 'Kontrak ', '057/HK-PG/KCJ/II/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (469, 6004048, 'Bogie FS-378 Tcar Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 37363800, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (470, 6005561, 'Bogie FS-378B Common Main KIT 20 ITEM', 'Sarana - Suku Cadang', '', '', 'SET', 110207700, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (471, 6004524, 'Bogie FS-378B Common Maint KIT 19 Item', 'Sarana - Suku Cadang', '', '', 'SET', 107537200, 'JPY ', 'Kontrak ', '056.1/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (472, 6004050, 'Bogie FS-378B Common Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 112438031, 'JPY ', 'Kontrak ', '057/HK-PG/KCJ/II/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (473, 6004526, 'Bogie FS-378B CTcar Maint KIT 10 Item', 'Sarana - Suku Cadang', '', '', 'SET', 3860800, 'JPY ', 'Kontrak ', '056.1/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (474, 6004053, 'Bogie FS-378B CTcar Maint KIT 9 item', 'Sarana - Suku Cadang', '', '', 'SET', 3952500, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (475, 6004525, 'Bogie FS-378B Mcar Maint KIT 13 Item', 'Sarana - Suku Cadang', '', '', 'SET', 50933300, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (476, 6004051, 'Bogie FS-378B Mcar Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 209328287, 'JPY ', 'Kontrak ', '057/HK-PG/KCJ/II/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (477, 6004052, 'Bogie FS-378B Tcar Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 37363800, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (478, 6004062, 'Bogie FS-388 Common Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 127749796, 'JPY ', 'Kontrak ', '057/HK-PG/KCJ/II/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (479, 6004063, 'Bogie FS-388 Mcar Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 213411106, 'JPY ', 'Kontrak ', '057/HK-PG/KCJ/II/2017 ', '2017', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (480, 6004058, 'Bogie FS-515 Common Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 128693800, 'JPY ', 'Kontrak ', '056.1/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (481, 6004061, 'Bogie FS-515 CTcar Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 8031700, 'JPY ', 'Kontrak ', '056.1/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (482, 6004059, 'Bogie FS-515 Mcar Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 52269600, 'JPY ', 'Kontrak ', '056.1/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (483, 6004060, 'Bogie FS-515 Tcar Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 36500200, 'JPY ', 'Kontrak ', '056.1/HK-PG/KCI/II/2019Tanggal26Februari2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (484, 6004527, 'Bogie FS-523 Common Maint KIT 20 Item', 'Sarana - Suku Cadang', '', '', 'SET', 1132714, 'JPY ', 'Kontrak ', 'KONTRAKNO.136/HK-PG/KCI/V/2018tgl.15-5-2018.  ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (485, 6004054, 'Bogie FS-523 Common Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 116264300, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (486, 6004529, 'Bogie FS-523 CTcar Maint KIT 10 Item', 'Sarana - Suku Cadang', '', '', 'SET', 55334, 'JPY ', 'Kontrak ', 'KONTRAKNO.136/HK-PG/KCI/V/2018tgl.15-5-2018.  ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (487, 6004057, 'Bogie FS-523 CTcar Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 3913500, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (488, 6004528, 'Bogie FS-523 Mcar Maint KIT 14 Item', 'Sarana - Suku Cadang', '', '', 'SET', 491426, 'JPY ', 'Kontrak ', 'KONTRAKNO.136/HK-PG/KCI/V/2018tgl.15-5-2018.  ', '2018', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (489, 6004055, 'Bogie FS-523 Mcar Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 50933300, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (490, 6004056, 'Bogie FS-523 Tcar Maintenance KIT', 'Sarana - Suku Cadang', '', '', 'SET', 18067600, 'JPY ', 'Kontrak ', '200/HK-PG/KCI/VII/2019Tgl.16Juli2019 ', '2019', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (491, 6002229, 'Bogie Maintenance Kit For JR 205', 'Sarana - Suku Cadang', '', '', 'SET', 258545999, 'IDR ', 'Kontrak ', '183/HK-PG/KCJ/VI/2015 ', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (492, 6000176, 'Boll Bearing TM 05', 'Sarana - Suku Cadang', '', '', 'PC', 479377, 'IDR ', 'SAP ', '', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (493, 6000177, 'Boll Bearing TM 1000/5000', 'Sarana - Suku Cadang', '', '', 'PC', 479377, 'IDR ', 'SAP ', '', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (494, 6000179, 'Boll bearing TM 7000', 'Sarana - Suku Cadang', '', '', 'PC', 479377, 'IDR ', 'SAP ', '', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (495, 6000180, 'Boll Bearing TM 8000/8500', 'Sarana - Suku Cadang', '', '', 'PC', 1210426, 'IDR ', 'SAP ', '', '2015', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (496, 1, 'Mandor', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 194274, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (497, 1, 'Kepala Tukang Kayu', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 182676, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (498, 1, 'Kepala Tukang Cat', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 166729, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (499, 1, 'Kepala Tukang Batu', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 182676, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (500, 1, 'Kepala Tukang Besi', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 182676, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (501, 1, 'Kepala Tukang Pipa', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 166729, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (502, 1, 'Kepala Mekanik', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 225000, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (503, 1, 'Tukang Kayu', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 166729, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (504, 1, 'Tukang Cat', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 166729, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (505, 1, 'Tukang Batu', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 166729, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (506, 1, 'Tukang Besi', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 166729, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (507, 1, 'Tukang Pipa', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 157643, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (508, 1, 'Tukang Gali', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 166729, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (509, 1, 'Tukang Las', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 166729, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (510, 1, 'Tukang Listrik', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 138077, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (511, 1, 'Tukang Potong Pohon', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 138077, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (512, 1, 'Mekanik Alat Berat', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 200000, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (513, 1, 'Pekerja (buruh tidak terampil)', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 157643, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (514, 1, 'Operator Alat Berat', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 194274, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (515, 1, 'Pembantu Operator Alat Berat', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 166729, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (516, 1, 'Supir Dump Truck', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 185023, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (517, 1, 'Instalator', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 182676, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (518, 1, 'Pembantu Instalator', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 166729, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (519, 1, 'Juru Ukur', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 210883, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (520, 1, 'Operator Pompa', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 157901, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (521, 1, 'Driller', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 139500, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (522, 1, 'Asisten Driller', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 121200, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (523, 1, 'Mekanik', 'Jasa Konstruksi', '', 'DKI Jakarta', 'Upah/Hari', 121200, 'IDR ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta ', 'Keputusan Gubernur Daerah Khusus Ibukota Jakarta Nomor 1619 Tahun 2021 tentang Standar Satuan Harga ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (524, 1, 'Pekerja', 'Jasa Konstruksi', '', 'Kota Depok', 'Upah/Hari', 125000, 'IDR ', 'Peraturan Wali Kota Depok ', 'Peraturan Wali Kota Depok nomor 38 Tahun 2021 tentang Standar Biaya Umum Di Lingkungan Pemerintah Daerah Kota Depok Tahun Anggaran 2022 ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (525, 1, 'Tukang', 'Jasa Konstruksi', '', 'Kota Depok', 'Upah/Hari', 150000, 'IDR ', 'Peraturan Wali Kota Depok ', 'Peraturan Wali Kota Depok nomor 38 Tahun 2021 tentang Standar Biaya Umum Di Lingkungan Pemerintah Daerah Kota Depok Tahun Anggaran 2022 ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (526, 1, 'Kepala Tukang', 'Jasa Konstruksi', '', 'Kota Depok', 'Upah/Hari', 160000, 'IDR ', 'Peraturan Wali Kota Depok ', 'Peraturan Wali Kota Depok nomor 38 Tahun 2021 tentang Standar Biaya Umum Di Lingkungan Pemerintah Daerah Kota Depok Tahun Anggaran 2022 ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (527, 1, 'Mandor', 'Jasa Konstruksi', '', 'Kota Depok', 'Upah/Hari', 180000, 'IDR ', 'Peraturan Wali Kota Depok ', 'Peraturan Wali Kota Depok nomor 38 Tahun 2021 tentang Standar Biaya Umum Di Lingkungan Pemerintah Daerah Kota Depok Tahun Anggaran 2022 ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (528, 1, 'Mekanik', 'Jasa Konstruksi', '', 'Kota Depok', 'Upah/Hari', 180000, 'IDR ', 'Peraturan Wali Kota Depok ', 'Peraturan Wali Kota Depok nomor 38 Tahun 2021 tentang Standar Biaya Umum Di Lingkungan Pemerintah Daerah Kota Depok Tahun Anggaran 2022 ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (529, 1, 'Operator', 'Jasa Konstruksi', '', 'Kota Depok', 'Upah/Hari', 180000, 'IDR ', 'Peraturan Wali Kota Depok ', 'Peraturan Wali Kota Depok nomor 38 Tahun 2021 tentang Standar Biaya Umum Di Lingkungan Pemerintah Daerah Kota Depok Tahun Anggaran 2022 ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (530, 1, 'Pembantu Operator', 'Jasa Konstruksi', '', 'Kota Depok', 'Upah/Hari', 125000, 'IDR ', 'Peraturan Wali Kota Depok ', 'Peraturan Wali Kota Depok nomor 38 Tahun 2021 tentang Standar Biaya Umum Di Lingkungan Pemerintah Daerah Kota Depok Tahun Anggaran 2022 ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (531, 1, 'Supir Truk', 'Jasa Konstruksi', '', 'Kota Depok', 'Upah/Hari', 160000, 'IDR ', 'Peraturan Wali Kota Depok ', 'Peraturan Wali Kota Depok nomor 38 Tahun 2021 tentang Standar Biaya Umum Di Lingkungan Pemerintah Daerah Kota Depok Tahun Anggaran 2022 ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');
INSERT INTO "public"."trx_harga_satuan" VALUES (532, 1, 'Kenek Truk', 'Jasa Konstruksi', '', 'Kota Depok', 'Upah/Hari', 125000, 'IDR ', 'Peraturan Wali Kota Depok ', 'Peraturan Wali Kota Depok nomor 38 Tahun 2021 tentang Standar Biaya Umum Di Lingkungan Pemerintah Daerah Kota Depok Tahun Anggaran 2022 ', '2022', '2022-08-04 18:39:00', '2022-08-04 18:39:00', '', '');

-- ----------------------------
-- Table structure for trx_jadwal_pelaksanaan
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_jadwal_pelaksanaan";
CREATE TABLE "public"."trx_jadwal_pelaksanaan" (
  "pelaksanaan_id" int8 NOT NULL DEFAULT nextval('trx_jadwal_pelaksanaan_pelaksanaan_id_seq'::regclass),
  "sp3_id" int4,
  "penjelasan_start_date" date,
  "penjelasan_end_date" date,
  "pemasukan_start_date" date,
  "pemasukan_end_date" date,
  "penawaran_start_date" date,
  "penawaran_end_date" date,
  "evaluasi_start_date" date,
  "evaluasi_end_date" date,
  "pengumuman_start_date" date,
  "pengumuman_end_date" date,
  "tandatangan_start_date" date,
  "tandatangan_end_date" date,
  "created_by" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "updated_by" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of trx_jadwal_pelaksanaan
-- ----------------------------

-- ----------------------------
-- Table structure for trx_klasifikasi_konfirmasi_negosiasi
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_klasifikasi_konfirmasi_negosiasi";
CREATE TABLE "public"."trx_klasifikasi_konfirmasi_negosiasi" (
  "klasifikasi_id" int8 NOT NULL DEFAULT nextval('trx_klasifikasi_konfirmasi_negosiasi_klasifikasi_id_seq'::regclass),
  "tanggal_kkn" date,
  "hps_pagu" varchar(255) COLLATE "pg_catalog"."default",
  "harga_negosiasi" varchar(255) COLLATE "pg_catalog"."default",
  "file_berita_acara" varchar(255) COLLATE "pg_catalog"."default",
  "file_memo_internal" varchar(255) COLLATE "pg_catalog"."default",
  "keterangan" varchar(255) COLLATE "pg_catalog"."default",
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "sp3_id" int8,
  "vendor_code" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of trx_klasifikasi_konfirmasi_negosiasi
-- ----------------------------
INSERT INTO "public"."trx_klasifikasi_konfirmasi_negosiasi" VALUES (19, '2022-08-08', '12000000', '1200000', NULL, NULL, '-', '6', NULL, '2022-08-08 13:46:16', '2022-08-08 13:46:16', 39, 'RK10047');
INSERT INTO "public"."trx_klasifikasi_konfirmasi_negosiasi" VALUES (20, '2022-08-08', '130000000', '20000000', NULL, NULL, '-', '6', NULL, '2022-08-08 13:46:16', '2022-08-08 13:46:16', 39, 'RK10003');
INSERT INTO "public"."trx_klasifikasi_konfirmasi_negosiasi" VALUES (21, '2022-08-08', '1200000', '1000000', NULL, NULL, '-', '6', NULL, '2022-08-08 13:46:16', '2022-08-08 13:46:16', 39, 'RK10003');

-- ----------------------------
-- Table structure for trx_npp
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_npp";
CREATE TABLE "public"."trx_npp" (
  "npp_id" int8 NOT NULL DEFAULT nextval('trx_npp_npp_id_seq'::regclass),
  "sp3_id" int4,
  "no_pr" varchar(255) COLLATE "pg_catalog"."default",
  "no_rab" varchar(255) COLLATE "pg_catalog"."default",
  "no_justifikasi" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_pr" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_rab" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_justifikasi" varchar(255) COLLATE "pg_catalog"."default",
  "file_pr" varchar(255) COLLATE "pg_catalog"."default",
  "file_rab" varchar(255) COLLATE "pg_catalog"."default",
  "file_justifikasi" varchar(255) COLLATE "pg_catalog"."default",
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of trx_npp
-- ----------------------------
INSERT INTO "public"."trx_npp" VALUES (6, 49, '123', '2', '3', '2022-08-08', '2022-08-08', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-08 15:20:57', '2022-08-08 15:20:57');
INSERT INTO "public"."trx_npp" VALUES (7, 49, '1', '31', '23', '2022-08-08', '2022-08-08', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-08 15:20:57', '2022-08-08 15:20:57');
INSERT INTO "public"."trx_npp" VALUES (8, 52, '2', '1', '3', '2022-08-08', '2022-08-23', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-08 16:06:03', '2022-08-08 16:06:03');
INSERT INTO "public"."trx_npp" VALUES (9, 52, '12', '13', '14', '2022-12-07', '2022-08-02', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-08 16:06:03', '2022-08-08 16:06:03');
INSERT INTO "public"."trx_npp" VALUES (10, 53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-08 16:19:11', '2022-08-08 16:19:11');

-- ----------------------------
-- Table structure for trx_pbj_contract_report
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_pbj_contract_report";
CREATE TABLE "public"."trx_pbj_contract_report" (
  "report_pbj_contract_id" int8 NOT NULL DEFAULT nextval('report_pbj_contract_id_seq'::regclass),
  "sp3_id" int4,
  "directorate_cd" varchar(20) COLLATE "pg_catalog"."default",
  "division_cd" varchar(20) COLLATE "pg_catalog"."default",
  "department_cd" varchar(20) COLLATE "pg_catalog"."default",
  "beban_biaya" varchar(20) COLLATE "pg_catalog"."default",
  "pbj" varchar(20) COLLATE "pg_catalog"."default",
  "judul_pengadaan" varchar(300) COLLATE "pg_catalog"."default",
  "nilai_rkap" int8,
  "proc_id" int4,
  "sp3_no" varchar(50) COLLATE "pg_catalog"."default",
  "tanggal_sp3" timestamp(0),
  "metode" varchar(50) COLLATE "pg_catalog"."default",
  "npd_no" varchar(50) COLLATE "pg_catalog"."default",
  "tanggal_npd" timestamp(0),
  "nilai_npd" int8,
  "vendor" varchar(100) COLLATE "pg_catalog"."default",
  "pbj_status" varchar(100) COLLATE "pg_catalog"."default",
  "lokal_impor" varchar(100) COLLATE "pg_catalog"."default",
  "total_hari_kalender_pbj" int4,
  "total_hari_kerja_pbj" int4,
  "uncontrolled_pbj" int4,
  "keterangan_pbj" varchar(200) COLLATE "pg_catalog"."default",
  "total_hari_pbj" int4,
  "nilai_contract" int8,
  "spk_spr_spb_no" varchar(50) COLLATE "pg_catalog"."default",
  "tanggal_terima_dok" timestamp(0),
  "jamlak_no" varchar(50) COLLATE "pg_catalog"."default",
  "tanggal_terima_jamlak" timestamp(0),
  "verifikasi" varchar(50) COLLATE "pg_catalog"."default",
  "tanggal_contract" timestamp(0),
  "contract_no" varchar(50) COLLATE "pg_catalog"."default",
  "contract_status" varchar(50) COLLATE "pg_catalog"."default",
  "total_hari_kalender_contract" int4,
  "total_hari_kerja_contract" int4,
  "uncontrolled_contract" int4,
  "keterangan_contract" varchar(200) COLLATE "pg_catalog"."default",
  "total_hari_contract" int4,
  "created_by" int4,
  "updated_by" int4,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of trx_pbj_contract_report
-- ----------------------------
INSERT INTO "public"."trx_pbj_contract_report" VALUES (1, 1, 'CU', 'CUS', 'CUSG', 'OPEX', 'SARANA', 'Pengadaan ATK Tahun 2022', 2400000000, 1532, '003/REN-LOG/KCI/I/2022', '2022-01-27 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 166/DK-AB/KCI/IX/2021 ', '2022-08-03 08:45:00', 2365000000, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 9, 7, 0, '', 7, 2365000000, 'SK.231/SPR/LOG/KCI/X/2021', '2022-08-03 08:45:00', 'KK.403/X/12/RMU-2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-06-30 00:00:00', '179/AL.101/KCI/VII/2022', 'SELESAI', 49, 24, 3, '', 21, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (2, 2, 'CU', 'CUS', 'CUSG', 'OPEX', 'SARANA', 'Barang Inventaris (AC)', 550000000, 1533, '004/REN-LOG/KCI/I/2022', '2022-01-28 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 166/DK-AB/KCI/IX/2021', '2022-08-03 08:45:00', 515000000, 'PT Jasuindo Tiga Perkasa', 'SELESAI', 'LOKAL', 39, 28, 0, '', 28, 515000000, 'SK.069/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', 'BG18421052150', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-01 00:00:00', '177/AL.101/KCI/VII/2022', 'SELESAI', 27, 19, 0, '', 19, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (3, 3, 'CU', 'CUS', 'CUSG', 'OPEX', 'SARANA', 'Barang Inventaris ( Meubeleer )', 550000000, 1536, '007/REN-LOG/KCI/II/2022', '2022-01-29 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 166/DK-AB/KCI/IX/2021', '2022-08-03 08:45:00', 515000000, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 19, 14, 0, '', 14, 515000000, 'SK.057/DU-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'KK.403/X/22/RMU-2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-02 00:00:00', '352.1/HK-PG/KCI/XII/2021', 'SELESAI', 27, 19, 0, '', 19, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (4, 4, 'CU', 'CUS', 'CUSG', 'CAPEX', 'SARANA', 'Barang Inventaris WILAYAH 2', 550000000, 1538, '009/REN-LOG/KCI/II/2022', '2022-01-30 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 166/DK-AB/KCI/IX/2021', '2022-08-03 08:45:00', 515000000, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 19, 14, 0, '', 14, 515000000, 'SK.057/DU-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'KK.403/IV/19/RMU/ 2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-03 00:00:00', '362.1/HK-PG/KCI/XII/2021', 'SELESAI', 23, 15, 0, '', 15, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (5, 5, 'CU', 'CUS', 'CUSG', 'CAPEX', 'NON SARANA', 'Barang Inventaris WILAYAH 8', 550000000, 1540, '011/REN-LOG/KCI/II/2022', '2022-01-31 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 166/DK-AB/KCI/IX/2021', '2022-08-03 08:45:00', 515000000, 'PT Reska Multi Usaha', 'GAGAL LELANG', 'LOKAL', 0, 0, 0, '', 0, 0, '0', '2022-08-03 08:45:00', '0', '2022-08-03 08:45:00', '0', '2022-07-04 00:00:00', '0', '0', 0, 0, 0, '', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (6, 6, 'CU', 'CUS', 'CUSG', 'CAPEX', 'NON SARANA', 'Pakaian Dinas Pegawai', 4170374243, 1545, '017/REN-LOG/KCI/III/2022', '2022-02-01 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 166/DK-AB/KCI/IX/2021', '2022-08-03 08:45:00', 4135374243, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 29, 22, 0, '', 22, 4135374243, 'SK.057/DU-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'KK.403/X/22/RMU-2024', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-05 00:00:00', '358.1/HK-PG/KCI/XII/2021', 'SELESAI', 16, 12, 0, '', 12, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (7, 7, 'CU', 'CUS', 'CUSG', 'CAPEX', 'NON SARANA', 'Barang Inventaris (Exclude Laptop / PC)', 550000000, 1549, '023/REN-LOG/KCI/III/2022', '2022-02-02 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 167/DK-AB/KCI/IX/2021', '2022-08-03 08:45:00', 515000000, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 9, 8, 0, '', 8, 515000000, 'SK.057/DU-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'KK.403/X/22/RMU-2025', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-06 00:00:00', '340/HK-PG/KCI/XI/2021', 'SELESAI', 30, 20, 0, '', 20, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (8, 8, 'CT ', 'CTI ', 'CTIO', 'OPEX', 'SARANA ', 'Pengadaan Manage Service Security Operation Center ', 465465465, 1578, '053/REN-LOG/KCI/IV/2022', '2022-02-12 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 185/DK-AB/KCI/IX/2021', '2022-08-03 08:45:00', 430465465, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 30, 23, 0, '', 23, 430465465, 'SK.057/DU-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'KK.403/X/22/RMU-2026', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-07 00:00:00', '337/HK-PG/KCI/XI/2021', 'SELESAI', 36, 24, 5, '', 19, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (9, 9, 'CT ', 'CTP ', 'CTPP ', 'OPEX', 'SARANA ', 'Pengadaan GTO KRL, Dll', 4317346000, 1579, '054/REN-LOG/KCI/IV/2022', '2022-02-13 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 178/DK-AB/KCI/IX/2021', '2022-08-03 08:45:00', 4282346000, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 14, 11, 0, '', 11, 4282346000, 'SK.057/DU-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'KK.403/X/22/RMU-2027', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-08 00:00:00', '366/HK-PG/KCI/XII/2021', 'SELESAI', 36, 24, 12, '', 12, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (10, 10, 'CF', 'CFH', 'CFHH', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Asuransi Kesehatan Pegawai Tahun 2022', 25786596312, 1580, '055/REN-LOG/KCI/IV/2022', '2022-02-14 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 186/DK-AB/KCI/IX/2021', '2022-08-03 08:45:00', 25751596312, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 14, 11, 0, '', 11, 25751596312, 'SK.057/DU-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'KK.403/X/22/RMU-2028', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-09 00:00:00', '373/HK-PG/KCI/XII/2021', 'SELESAI', 39, 27, 10, '', 17, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (11, 11, 'CF', 'CFH', 'CFHH', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Ahli Daya Petugas Poskes / Posrikes', 1623009726, 1584, '061/REN-LOG/KCI/V/2022', '2022-02-15 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 196.1/DK-AB/KCI/IX/2021', '2022-08-03 08:45:00', 1588009726, 'PT Reska Multi Usaha', 'GAGAL LELANG', 'LOKAL', 0, 0, 0, '', 0, 0, '0', '2022-08-03 08:45:00', '0', '2022-08-03 08:45:00', '0', '2022-07-10 00:00:00', '0', '0', 0, 0, 0, '', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (12, 12, 'CF', 'CFH', 'CFHH', 'OPEX', 'NON SARANA', 'Jasa Pemeliharaan Kesehatan Pegawai (MCU) Tahun 2022', 2244776850, 1585, '062/REN-LOG/KCI/V/2022', '2022-02-16 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 179/DK-AB/KCI/IX/2021', '2022-08-03 08:45:00', 2209776850, 'PT Asuransi Jiwa Inhealth Indonesia', 'SELESAI', 'LOKAL', 10, 9, 0, '', 9, 2209776850, 'SK.057/DU-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'BG77421110645', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-11 00:00:00', '022/AL.101/KCI/III/2022', 'SELESAI', 87, 61, 39, '', 22, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (13, 13, 'CF', 'CFH', 'CFHH', 'OPEX', 'NON SARANA', 'Asuransi Tahun 2023', 25786596312, 1586, '063/REN-LOG/KCI/V/2022', '2022-02-17 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 180/DK-AB/KCI/IX/2021', '2022-08-03 08:45:00', 25751596312, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 38, 29, 0, '', 29, 25751596312, 'SK.056/DU-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'KK.403/X/14/RMU-2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-12 00:00:00', '013/AL.101/KCI/III/2022', 'SELESAI', 90, 63, 41, '', 22, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (14, 14, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Software Jaaringan CCR', 2542083522, 1588, '065/REN-LOG/KCI/V/2022', '2022-02-18 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 225/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 2507083522, 'PT Sigma Cipta Caraka', 'SELESAI', 'LOKAL', 41, 30, 0, '', 30, 2507083522, 'SK.088/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', '21/OJR/029/5083/SENIN', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-13 00:00:00', '012/AL.101/KCI/III/2022', 'DRAFT CONTRACT', 90, 63, 41, '', 22, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (15, 15, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Guiding Block', 4542300000, 1590, '067/REN-LOG/KCI/V/2022', '2022-02-19 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 225/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 4507300000, 'PT Indonesia Comnets Plus', 'SELESAI', 'LOKAL', 12, 9, 0, '', 9, 4507300000, 'SK.244SPR/LOG/KCI/X/2021', '2022-08-03 08:45:00', 'BG13121097281', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-14 00:00:00', '070/AL.101/KCI/IV/2022', 'DRAFT CONTRACT', 28, 20, 0, '', 20, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (16, 16, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Railing Stainless', 911594963, 1591, '068/REN-LOG/KCI/V/2022', '2022-02-20 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 230/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 876594963, 'PT Kawisata', 'SELESAI', 'LOKAL', 14, 11, 0, '', 11, 876594963, 'SK.247/DU-LOG/KCI/X/2021', '2022-08-03 08:45:00', '055/KAWISTA/WU/XI/2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-15 00:00:00', '017/AL.101/KCI/III/2022', 'DRAFT CONTRACT', 64, 44, 22, '', 22, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (17, 17, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan CCTV Peron Lengkung', 939648511, 1593, '071/REN-LOG/KCI/V/2022', '2022-02-21 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 230/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 904648511, 'PT Kawisata', 'SELESAI', 'LOKAL', 12, 9, 0, '', 9, 904648511, 'SK.058/DU-LOG/KCI/X/2021', '2022-08-03 08:45:00', '0106/KAWISTA/WU/XI/2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-16 00:00:00', '044/AL.101/KCI/IV/2022', 'DRAFT CONTRACT', 53, 39, 18, '', 21, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (18, 18, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaaan Standarisasi Signage', 3034939600, 1594, '072/REN-LOG/KCI/V/2022', '2022-02-22 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 230/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 2999939600, 'PT Pusaka Nusantara', 'GAGAL LELANG', 'LOKAL', 0, 0, 0, '', 0, 0, '0', '2022-08-03 08:45:00', '0', '2022-08-03 08:45:00', '0', '2022-07-17 00:00:00', '0', '0', 0, 0, 0, '', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (19, 19, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Informasi Digital Stasiun', 1260032598, 1595, '073/REN-LOG/KCI/V/2022', '2022-02-23 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 230/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 1225032598, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 30, 23, 0, '', 23, 1225032598, 'SK.062/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', 'BG11921112187', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-18 00:00:00', '087/AL.101/KCI/IV/2022', 'SELESAI', 58, 42, 23, '', 19, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (20, 20, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Tombol Bantuan ', 937554750, 1596, '074/REN-LOG/KCI/V/2022', '2022-02-24 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 230/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 902554750, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 52, 39, 0, '', 39, 902554750, 'SK.063/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', 'BG11921111917', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-19 00:00:00', '096/AL.101/KCI/IV/2022', 'SELESAI', 16, 12, 0, '', 12, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (21, 21, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Kipas HLVS', 1302069890, 1597, '075/REN-LOG/KCI/V/2022', '2022-02-25 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 230/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 1267069890, 'PT Jakadara Aircraft Services', 'SELESAI', 'LOKAL', 41, 30, 0, '', 30, 1267069890, 'SK.089/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', '22/OJR/060/7912/KAMIS', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-20 00:00:00', '120/AL.101/KCI/V/2022', 'SELESAI', 30, 20, 0, '', 20, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (22, 22, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Peremajaan Sound System', 2124993543, 1599, '077/REN-LOG/KCI/V/2022', '2022-02-26 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 218/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 2089993543, 'PT Swadharma Griyasatya', 'SELESAI', 'LOKAL', 52, 39, 0, '', 39, 2089993543, 'SK.090/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', '21/JPU/092/9752/KAMIS', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-21 00:00:00', '125/AL.101/KCI/VI/2022', 'SELESAI', 36, 24, 5, '', 19, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (23, 23, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Instalasi Cuci KRL', 676610000, 1602, '082/REN-LOG/KCI/VI/2022', '2022-02-27 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 201/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 641610000, 'PT Dapensi Trio Usaha', 'SELESAI', 'LOKAL', 32, 23, 0, '', 23, 641610000, 'SK.091/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', 'BG13121112225', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-22 00:00:00', '097/AL.101/KCI/IV/2022', 'SELESAI', 36, 24, 12, '', 12, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (24, 24, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Mesin Pompa Air', 791662500, 1603, '083/REN-LOG/KCI/VI/2022', '2022-02-28 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 243/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 756662500, 'PT Spektra Solusindo', 'SELESAI', 'LOKAL', 25, 20, 0, '', 20, 756662500, 'SK.092/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', '0121122010400001', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-23 00:00:00', '108/AL.101/KCI/V/2022', 'SELESAI', 20, 13, 0, '', 13, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (25, 25, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Kursi Tunggu Stasiun', 941424000, 1604, '085/REN-LOG/KCI/VI/2022', '2022-03-01 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 229/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 906424000, 'PT Pusaka Nusantara', 'SELESAI', 'LOKAL', 24, 19, 0, '', 19, 906424000, 'SK.093/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', '0038922010500002', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-24 00:00:00', '101/AL.101/KCI/IV/2022', 'SELESAI', 12, 8, 0, '', 8, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (26, 26, 'CO', 'COS', 'COSA', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun dan Aset Wilayah 1 PT Kereta Commuter Indonesia Tahun 2022', 39327907741, 1607, '086/REN-LOG/KCI/VI/2022', '2022-03-02 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 229/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 39292907741, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 15, 12, 0, '', 12, 39292907741, 'SK.094/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', 'KK.403/XI/36/RMU-2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-25 00:00:00', '135/AL.101/KCI/VI/2022', 'SELESAI', 16, 11, 0, '', 11, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (27, 32, 'CO', 'COS', 'COST', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan di atas KA Lintas 2  PT Kereta Commuter Indonesia Tahun 2022', 24047702017, 1543, '014/REN-LOG/KCI/II/2022', '2022-03-08 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 232/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 24012702017, 'PT Telekomunikasi Indonesia', 'SELESAI', 'LOKAL', 33, 24, 0, '', 24, 24012702017, 'SK.095/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', '0028621120800004', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-26 00:00:00', '118/AL.101/KCI/V/2022', 'SELESAI', 36, 18, 0, '', 18, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (28, 33, 'CO', 'COS', 'COST', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan di atas KA Lintas 3  PT Kereta Commuter Indonesia Tahun 2022', 28107703656, 1546, '018/REN-LOG/KCI/III/2022', '2022-03-09 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 247/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 28072703656, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 14, 11, 0, '', 11, 28072703656, 'SK.096/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', 'KK.403/XI/38/RMU-2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-27 00:00:00', '139/AL.101/KCI/VI/2022', 'SELESAI', 43, 23, 5, '', 18, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (29, 34, 'CT', 'CTI', 'CTIO ', 'CAPEX', 'NON SARANA', 'Pembangunan Disaster Recovery Centre (DRC)', 22939066886, 1548, '020/REN-LOG/KCI/III/2022', '2022-03-10 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 232/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 22904066886, 'PT Kereta Api Pariwisata', 'SELESAI', 'LOKAL', 19, 14, 0, '', 14, 22904066886, 'SK.064/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', '0102/KAWISATA/WU/XI/2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-28 00:00:00', '122/AL.101/KCI/V/2022', 'SELESAI', 39, 24, 5, '', 19, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (30, 35, 'CT', 'CTI', 'CTIO ', 'CAPEX', 'NON SARANA', 'Pengadaan Video Analytic Tahap 2', 13137802776, 1551, '025/REN-LOG/KCI/III/2022', '2022-03-11 00:00:00', 'PELELANGAN TERBUKA', 'IJIN PRINSIP 241/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 13102802776, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 15, 12, 0, '', 12, 13102802776, 'SK.071/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', 'KK.403/XI/39/RMU-2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-29 00:00:00', '136/AL.101/KCI/VI/2022', 'SELESAI', 25, 15, 0, '', 15, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (31, 36, 'CT', 'CTI', 'CTI SPC.1', 'CAPEX', 'NON SARANA', 'Pengembangan Ticketing HSM Top Up Online (Penegmbangan Sistem Penerbitan Kartu E-money) ', 26059000000, 1553, '027/REN-LOG/KCI/III/2022', '2022-03-12 00:00:00', 'PELELANGAN TERBUKA', 'IJIN PRINSIP 240/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 26024000000, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 34, 25, 0, '', 25, 26024000000, 'SK.070/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', 'KK.403/XI/31/RMU-2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-30 00:00:00', '128/AL.101/KCI/VI/2022', 'SELESAI', 40, 20, 0, '', 20, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (32, 37, 'CT', 'CTI', 'CTIO ', 'CAPEX', 'NON SARANA', 'Pengembangan Infrastruktur IT Stasiun', 16356400000, 1556, '030/REN-LOG/KCI/IV/2022', '2022-03-13 00:00:00', 'PELELANGAN TERBUKA', 'IJIN PRINSIP 238/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 16321400000, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 17, 14, 0, '', 14, 16321400000, 'SK.075/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', 'KK.403/XII/77/RMU-2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-07-31 00:00:00', '138/AL.101/KCI/VI/2022', 'SELESAI', 38, 18, 0, '', 18, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (33, 38, 'CT', 'CTI', 'CTI SPC.1', 'CAPEX', 'NON SARANA', 'Pengadaan Pekerjaan Pengembangan QR Ticketing System (Pengadaan Pengembangan QR E-Ticketing PT KCI)', 2700703500, 1555, '029/REN-LOG/KCI/IV/2022', '2022-03-14 00:00:00', 'PELELANGAN TERBUKA', '229/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 2665703500, 'PT Kereta Api Pariwisata', 'SELESAI', 'LOKAL', 17, 14, 0, '', 14, 2665703500, 'SK.072/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', '0108/KAWISATA/WU/XI/2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-01 00:00:00', '143/AL.101/KCI/VI/2022', 'SELESAI', 35, 18, 0, '', 18, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (34, 39, 'CT', 'CTI', 'CTIP ', 'CAPEX', 'NON SARANA', 'Pengadaan Software PBJ', 1000000000, 1558, '032/REN-LOG/KCI/IV/2022', '2022-03-15 00:00:00', 'PELELANGAN TERBUKA', '229/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 965000000, 'PT Reska Multi Usaha', 'SELESAI', 'LOKAL', 18, 15, 0, '', 15, 965000000, 'SK.283/SPR/LOG/KCI/XI/2021', '2022-08-03 08:45:00', 'KK.403/XI/41/RMU-2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-02 00:00:00', '174/AL.101/KCI/VII/2022', 'SELESAI', 25, 17, 0, '', 17, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (35, 40, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Pengadaan Alat Test Getaran KRL', 698333300, 1564, '039/REN-LOG/KCI/IV/2022', '2022-03-16 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 261/DK-AB/KCI/XI/2021', '2022-08-03 08:45:00', 663333300, 'PT Kereta Api Pariwisata', 'SELESAI', 'LOKAL', 22, 17, 0, '', 17, 663333300, 'SK.082/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', '0107/KAWISATA/WU/XI/2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-03 00:00:00', '142/AL.101/KCI/VI/2022', 'SELESAI', 29, 19, 0, '', 19, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (36, 41, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'PCB Diagnostic System', 1089475000, 1567, '042/REN-LOG/KCI/IV/2022', '2022-03-17 00:00:00', 'PENUNJUKAN LANGSUNG', 'IJIN PRINSIP 260/DK-AB/KCI/XI/2021', '2022-08-03 08:45:00', 1054475000, 'PT Telekomunikasi Indonesia', 'SELESAI', 'LOKAL', 15, 12, 0, '', 12, 1054475000, 'SK.074/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', '21/OJR/054/10872/SENIN', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-04 00:00:00', '154/AL.101/KCI/VI/2022', 'SELESAI', 19, 13, 0, '', 13, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (37, 42, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Peremajaan Atap & Coating Lantai By KRL Mri', 5759413276, 1571, '046/REN-LOG/KCI/IV/2022', '2022-03-18 00:00:00', 'PENUNJUKAN LANGSUNG', '270/DK-AB/KCI/XI/2021', '2022-08-03 08:45:00', 5724413276, 'PT Biosis Multi Jaya', 'SELESAI', 'LOKAL', 33, 24, 0, '', 24, 5724413276, 'SK.083/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', '0038622010500009', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-05 00:00:00', '153/AL.101/KCI/VI/2022', 'SELESAI', 21, 13, 0, '', 13, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (38, 43, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Pengadaan dan pemasangan JIB/Swing Crane 1 Ton', 1585000000, 1570, '045/REN-LOG/KCI/IV/2022', '2022-03-19 00:00:00', 'PENUNJUKAN LANGSUNG', '287/DK-AB/KCI/XII/2021', '2022-08-03 08:45:00', 1550000000, 'PT Insekta Fokustama', 'BAHP', 'LOKAL', 14, 11, 0, '', 11, 1550000000, 'SK.073/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', 'BG12721112279', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-06 00:00:00', '173/AL.101/KCI/VII/2022', 'SELESAI', 17, 11, 0, '', 11, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (39, 44, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'On Floor Overhaul Mri', 40500000000, 1572, '047/REN-LOG/KCI/IV/2022', '2022-03-20 00:00:00', 'PENUNJUKAN LANGSUNG', '288/DK-AB/KCI/XII/2021', '2022-08-03 08:45:00', 40465000000, 'PT Reska Multi Usaha', 'SPR', 'LOKAL', 19, 14, 0, '', 14, 40465000000, 'SK.066/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', 'KK.403/XI/19/RMU-2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-07 00:00:00', '161/AL.101/KCI/VI/2022', 'SELESAI', 21, 13, 0, '', 13, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (40, 45, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Pengadaan dan Pemasangan Load Test Bogie', 6429500000, 1569, '044/REN-LOG/KCI/IV/2022', '2022-03-21 00:00:00', 'PEMILIHAN LANGSUNG', 'IJIN PRINSIP 28/AA.102/CF/KCI/II/2022', '2022-08-03 08:45:00', 6394500000, 'PT Reska Multi Usaha', 'NEGOISASI', 'LOKAL', 15, 12, 0, '', 12, 6394500000, 'SK.097/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', 'KK.403/XII/78/RMU-2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-08 00:00:00', '164/AL.101/KCI/VI/2022', 'SELESAI', 19, 13, 0, '', 13, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (41, 46, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Mesin Under Cutting/Bubut Komutator', 8789000000, 1568, '043/REN-LOG/KCI/IV/2022', '2022-03-22 00:00:00', 'PEMILIHAN LANGSUNG', 'IJIN PRINSIP 154/DK-AB/KCI/VIII/2021', '2022-08-03 08:45:00', 8754000000, 'PT Kereta Api Pariwisata', 'PDP', 'IMPOR-PERUSAHAAN INTERNASIONAL', 34, 25, 0, '', 25, 8754000000, 'SK.294/SPR/LOG/KCI/XI/2021', '2022-08-03 08:45:00', '112/KAWISATA/WU/XII/2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-09 00:00:00', '158/AL.101/KCI/VI/2022', 'SELESAI', 20, 14, 0, '', 14, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (42, 47, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Konsultan Pengadaan dan Pemasangan Hydran Dipo dan Overhaul', 3213123133, 1573, '048/REN-LOG/KCI/IV/2022', '2022-03-23 00:00:00', 'PEMILIHAN LANGSUNG', 'IJIN PRINSIP 221/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 3178123133, 'PT Telekomunikasi Indonesia', 'RKS', 'IMPOR-PERUSAHAAN INTERNASIONAL', 17, 14, 0, '', 14, 3178123133, 'SK.084/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', '0028621122800072', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-10 00:00:00', '159/AL.101/KCI/VI/2022', 'SELESAI', 22, 16, 0, '', 16, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (43, 48, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Pengadaan dan Pemasangan Hydran Dipo dan Overhaul', 25000000000, 1581, '056/REN-LOG/KCI/IV/2022', '2022-03-24 00:00:00', 'PEMILIHAN LANGSUNG', 'IJIN PRINSIP 219/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 24965000000, 'PT Reska Multi Usaha', 'RKS', 'IMPOR-PERUSAHAAN INTERNASIONAL', 17, 14, 0, '', 14, 24965000000, 'SK.086/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', 'KK.403/XII/215/RMU-2021', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-11 00:00:00', '021/AL.101/III/2022', 'SELESAI', 40, 28, 0, '', 28, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (44, 49, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Alat Ukur Ovality Rotor Motor Motor Listrik', 224000000, 1600, '078/REN-LOG/KCI/V/2022', '2022-03-25 00:00:00', 'PEMILIHAN LANGSUNG', 'IJIN PRINSIP 223/DK-AB/KCI/X/2021', '2022-08-03 08:45:00', 189000000, 'PT KA Properti Manajemen', 'RKS', 'IMPOR-PERUSAHAAN INTERNASIONAL', 18, 15, 0, '', 15, 189000000, 'SK.087/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', '006/PL-JPL/KAPM/III/2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-12 00:00:00', '041/AL.101/KCI/IV/2022', 'SELESAI', 27, 17, 0, '', 17, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (45, 50, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Alat Test Ac', 365000000, 1598, '076/REN-LOG/KCI/V/2022', '2022-03-26 00:00:00', 'PEMILIHAN LANGSUNG', 'IJIN PRINSIP 253/DK-AB/KCI/XI/2021', '2022-08-03 08:45:00', 330000000, 'PT Surveyor Indonesia', 'NEGOISASI', 'IMPOR-PERUSAHAAN INTERNASIONAL', 22, 17, 0, '', 17, 330000000, 'SK.098/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', '0039022032303434', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-13 00:00:00', '024/AL.101/III/2022', 'SELESAI', 20, 14, 0, '', 14, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (46, 51, 'CT', 'CTS', 'CTSC', 'CAPEX', 'NON SARANA', 'Jasa Konsultan Pengawas (Judul time line awal: Pembuatan Ruang KUPT Crew Depok)', 11000000000, 1601, '080/REN-LOG/KCI/VI/2022', '2022-03-27 00:00:00', 'PEMILIHAN LANGSUNG', 'IJIN PRINSIP 269/DK-AB/KCI/XI/2021', '2022-08-03 08:45:00', 10965000000, 'PT Reska Multi Usaha', 'NEGOISASI', 'IMPOR-PERUSAHAAN INTERNASIONAL', 10, 9, 0, '', 9, 10965000000, 'SK.01/SPR/LOG/KCI/III/2022', '2022-08-03 08:45:00', 'KK.403/II/51/RMU/2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-14 00:00:00', '039/AL.101/KCI/IV/2022', 'SELESAI', 14, 10, 0, '', 10, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (47, 52, 'CT', 'CTS', 'CTSC', 'CAPEX', 'NON SARANA', 'Konstruksi Bangunan (Judul time line awal: Pembuatan Ruang KUPT Crew Depok)', 3232132323, 1604, '084/REN-LOG/KCI/VI/2022', '2022-03-28 00:00:00', 'PEMILIHAN LANGSUNG', 'IJIN PRINSIP 308/DK-AB/KCI/XII/2021', '2022-08-03 08:45:00', 3197132323, 'PT Deltasindo Raya Sejahtera', 'NEGOISASI', 'IMPOR-PERUSAHAAN INTERNASIONAL', 38, 29, 0, '', 29, 3197132323, 'SK.01/SPR/LOG/KCI/II/2022', '2022-08-03 08:45:00', '0033822032203341', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-15 00:00:00', '065/AL.101/KCI/IV/2022', 'TTD_CONTRACT', 33, 23, 0, '', 23, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (48, 53, 'CT', 'CTS', 'CTSM ', 'CAPEX', 'NON SARANA', 'Pekerjaan DED (Pemasangan Lift di Underpass Stasiun PT KCI)', 5400000000, 1605, '085/REN-LOG/KCI/VI/2022', '2022-03-29 00:00:00', 'PEMILIHAN LANGSUNG', '2100069706', '2022-08-03 08:45:00', 5365000000, 'PT Global Integrasi Telematika', 'BAHP', 'IMPOR-PERUSAHAAN INTERNASIONAL', 41, 30, 0, '', 30, 5365000000, 'SK.02/SPR/LOG/KCI/III/2022', '2022-08-03 08:45:00', 'BG12122129225', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-16 00:00:00', '063/AL.101/KCI/IV/2022', 'TTD_CONTRACT', 38, 28, 0, '', 28, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (49, 54, 'CT', 'CTS', 'CTSM ', 'CAPEX', 'NON SARANA', 'Pemasangan Lift (Pemasangan Lift di Underpass Stasiun PT KCI)', 435667676, 1477, '085/REN-LOG/KCI/IX/2021', '2022-03-30 00:00:00', 'PEMILIHAN LANGSUNG', '2100069678', '2022-08-03 08:45:00', 400667676, 'PT Sujutama Dwikarya Sukses', 'BAHP', 'IMPOR-PERUSAHAAN INTERNASIONAL', 12, 9, 0, '', 9, 400667676, 'SK. 078/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', 'BG1662218330', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-17 00:00:00', '064/AL.101/KCI/IV/2022', 'TTD_CONTRACT', 11, 7, 0, '', 7, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (50, 55, 'CT', 'CTS', 'CTSC', 'CAPEX', 'NON SARANA', 'Jasa Konsultan Pengawas (Pengadaan Lobby dan Ruang Direksi)', 1800000000, 1478, '086/REN-LOG/KCI/IX/2021', '2022-03-31 00:00:00', 'PEMILIHAN LANGSUNG', '2100069707', '2022-08-03 08:45:00', 1765000000, 'PT KA Properti Manajemen', 'BAHP', 'IMPOR-PERUSAHAAN INTERNASIONAL', 14, 11, 0, '', 11, 1765000000, 'SK. 077/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', '015/PL.606-JPL/KAPM/III/2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-18 00:00:00', '092/AL.101/KCI/IV/2022', 'TTD_CONTRACT', 7, 5, 0, '', 5, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (51, 56, 'CT', 'CTS', 'CTSC', 'CAPEX', 'NON SARANA', 'Konstruksi Bangunan (Pengadaan Lobby dan Ruang Direksi)', 1540328960, 1479, '088/REN-LOG/KCI/IX/2021', '2022-03-22 00:00:00', 'PEMILIHAN LANGSUNG', '2100069742', '2022-08-03 08:45:00', 1505328960, 'PT Telekomunikasi Indonesia', 'SPR', 'IMPOR-PERUSAHAAN INTERNASIONAL', 12, 9, 0, '', 9, 1505328960, 'SK.076/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', '22/OJR/065/5744/JUMAT', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-19 00:00:00', '040/AL.101/KCI/IV/2022', 'TTD_CONTRACT', 31, 19, 0, '', 19, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (52, 63, 'CO', 'COS', '', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Di Atas KA Wilayah Lokal 2 Bandung PT Kereta Commuter Indonesia Tahun 2022', 5505442686, 1490, '101/REN-LOG/KCI/X/2021', '2022-03-29 00:00:00', 'PEMILIHAN LANGSUNG', '2100069742', '2022-08-03 08:45:00', 5470442686, 'PT Telekomunikasi Indonesia', 'SPR', 'IMPOR-PERUSAHAAN INTERNASIONAL', 15, 12, 0, '', 12, 5470442686, 'SK.081/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', '22/OJR/044/7097/SENIN', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-20 00:00:00', '105/AL.101/KCI/V/2022', 'TTD_CONTRACT', 54, 44, 0, '', 44, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (53, 64, 'CO', 'COS', '', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Di Atas KA Wilayah Lokal 8 Surabaya PT Kereta Commuter Indonesia Tahun 2022', 735042687, 1532, '003/REN-LOG/KCI/I/2022', '2022-03-30 00:00:00', 'PEMILIHAN LANGSUNG', '2100069869', '2022-08-03 08:45:00', 700042687, 'PT Indonesia Comnets Plus', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN INTERNASIONAL', 34, 25, 0, '', 25, 700042687, 'SK. 061/DU-LOG/KCI/XI/2021', '2022-08-03 08:45:00', 'BG13122131404', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-21 00:00:00', '137/AL.101/KCI/V/2022', 'TTD_CONTRACT', 42, 15, 0, '', 15, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (54, 65, 'CT', 'CTP', '', 'OPEX', 'SARANA', 'Pengadaan Freon', 4761829414, 1533, '004/REN-LOG/KCI/I/2022', '2022-03-31 00:00:00', 'PEMILIHAN LANGSUNG', '2100069931', '2022-08-03 08:45:00', 4726829414, 'PT Datascrip', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN INTERNASIONAL', 17, 14, 0, '', 14, 4726829414, 'SK.085/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', 'BG11922137950', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-22 00:00:00', '037/AL.101/KCI/III/2022', 'TTD_CONTRACT', 15, 10, 0, '', 10, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (55, 66, 'CO', 'COC', '', 'CAPEX', 'NON SARANA', 'Pengadaan Jasa Pemborongan Petugas Loket KA Lokal di Stasiun Wilayah 8 PT KCI Tahun 2022', 1185545895, 1536, '007/REN-LOG/KCI/II/2022', '2022-04-01 00:00:00', 'PEMILIHAN LANGSUNG', '2100071984', '2022-08-03 08:45:00', 1150545895, 'PT Reska Multi Usaha', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN INTERNASIONAL', 17, 14, 0, '', 14, 1150545895, 'SK.089/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', 'KK.403/IV/31/RMU-2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-23 00:00:00', '038/AL.101/KCI/III/2022', 'SELESAI', 14, 9, 0, '', 9, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (56, 67, 'CT', 'CTP', '', 'CAPEX', 'SARANA', 'Pengadaan Wiper KRL', 3915802500, 1538, '009/REN-LOG/KCI/II/2022', '2022-04-02 00:00:00', 'PEMILIHAN LANGSUNG', '2100071109', '2022-08-03 08:45:00', 3880802500, 'PT Reska Multi Usaha', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN INTERNASIONAL', 18, 15, 0, '', 15, 3880802500, 'SK. 099/DU-LOG/KCI/XII/2021', '2022-08-03 08:45:00', 'KK.403/IV/18/RMU-2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-24 00:00:00', '110/AL.101/KCI/V/2022', 'SELESAI', 35, 20, 0, '', 20, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (57, 68, 'CT', 'CTI', '', 'CAPEX', 'NON SARANA', 'Pengadaan Pekerjaan Modifikasi Gate Untuk Support QRCode System', 670397895, 1540, '011/REN-LOG/KCI/II/2022', '2022-04-03 00:00:00', 'PEMILIHAN LANGSUNG', '2100071758', '2022-08-03 08:45:00', 635397895, 'PT Bintang Nusantara Utama', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN INTERNASIONAL', 22, 17, 0, '', 17, 635397895, '021/AG.200/KCI/V/2022', '2022-08-03 08:45:00', '22/OJR/074/8654/JUMAT', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-25 00:00:00', '119/AL.101/KCI/IV/2022', 'SELESAI', 31, 20, 0, '', 20, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (58, 69, 'CT', 'CTI', '', 'CAPEX', 'NON SARANA', 'Pengadaan Pekerjaan Perbaikan MHTM Gate E-Ticketing', 936326292, 1545, '017/REN-LOG/KCI/III/2022', '2022-04-04 00:00:00', 'PEMILIHAN LANGSUNG', '2100072057', '2022-08-03 08:45:00', 901326292, 'PT KA Properti Manajemen', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN INTERNASIONAL', 15, 12, 0, '', 12, 901326292, '022/AG.200/KCI/V/2022', '2022-08-03 08:45:00', '010/PL.606-JPL/KAPM/V?2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-26 00:00:00', '126/AL.101/KCI/V/2022', 'SELESAI', 35, 20, 2, '', 18, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (59, 70, 'CT', 'CTI', '', 'CAPEX', 'NON SARANA', 'Pengadaan Perangkat Untuk Monitoring CCTV Stasiun', 1189897892, 1549, '023/REN-LOG/KCI/III/2022', '2022-04-05 00:00:00', 'PEMILIHAN LANGSUNG', '2100071462', '2022-08-03 08:45:00', 1154897892, 'PT KA Properti Manajemen', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN INTERNASIONAL', 33, 24, 0, '', 24, 1154897892, '015/AG.200/KCI/IV/2022', '2022-08-03 08:45:00', '014/PL.606-JPL/KAPM/V?2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-27 00:00:00', '123/AL.101/KCI/IV/2022', 'SELESAI', 18, 12, 0, '', 12, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (60, 71, 'CT', 'CTI', '', 'CAPEX', 'NON SARANA', 'Pengadaan Renewal Lisensi IT Security', 1265577720, 1550, '024/REN-LOG/KCI/III/2022', '2022-04-06 00:00:00', 'PEMILIHAN LANGSUNG', '2100072054', '2022-08-03 08:45:00', 1230577720, 'PT Sarana Usaha Sejahtera Insanpalapa', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN NASIONAL', 14, 11, 0, '', 11, 1230577720, '017/AG.200/KCI/IV/2022', '2022-08-03 08:45:00', 'BG13122132791', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-28 00:00:00', '099/AL.101/KCI/IV/2022', 'SELESAI', 41, 20, 0, '', 20, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (61, 72, 'CT', 'CTP', '', 'CAPEX', 'SARANA', 'Pengadaan Adaptor Pantograph KRL, Dll', 748501310, 1557, '031/REN-LOG/KCI/IV/2022', '2022-04-07 00:00:00', 'PEMILIHAN LANGSUNG', '2100072272', '2022-08-03 08:45:00', 713501310, 'PT Kawisata', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN NASIONAL', 19, 14, 0, '', 14, 713501310, '014/AG.200/KCI/IV/2022', '2022-08-03 08:45:00', '038/KAWISATA/WU/ IV/ 2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-29 00:00:00', '132/AL.101/KCI/V/2022', 'SELESAI', 49, 24, 3, '', 21, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (62, 73, 'CT', 'CTS', '', 'OPEX', 'NON SARANA', 'Penataan Area Masuk dan Keluar Hall Selatan Stasiun Kiaracondong', 5089475662, 1560, '035/REN-LOG/KCI/IV/2022', '2022-04-08 00:00:00', 'PEMILIHAN LANGSUNG', '2100072911', '2022-08-03 08:45:00', 5054475662, 'PT Bintang Nusantara Utama', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN NASIONAL', 15, 12, 0, '', 12, 5054475662, '001/SPR/LOG/VI/2022', '2022-08-03 08:45:00', '22/OJR/006/6784/SENIN', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-30 00:00:00', '131/AL.101/KCI/V/2022', 'SELESAI', 39, 27, 10, '', 17, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (63, 74, 'CO', 'COS', '', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun Dan Aset Wilayah Lokal 8 Surabaya PT Kereta Commuter Indonesia Tahun 2022', 7109660819, 1562, '037/REN-LOG/KCI/IV/2022', '2022-04-09 00:00:00', 'PELELANGAN TERBUKA', '2100072502', '2022-08-03 08:45:00', 7074660819, 'PT Ahli Karya Nusantara', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN NASIONAL', 34, 25, 0, '', 25, 7074660819, '04/SPR/LOG/KCI/V/2022', '2022-08-03 08:45:00', '0001922060708052', '2022-08-03 08:45:00', 'CONFIRMED', '2022-08-31 00:00:00', '134/AL.101/KCI/IV/2022', 'SELESAI', 87, 61, 39, '', 22, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (64, 75, 'CO', 'COS', '', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun Dan Aset Wilayah Lokal 2 Bandung PT Kereta Commuter Indonesia Tahun 2022', 760069102, 1574, '049/REN-LOG/KCI/IV/2022', '2022-04-10 00:00:00', 'PELELANGAN TERBUKA', '2100073064', '2022-08-03 08:45:00', 725069102, 'PT KA Properti Manajemen', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN NASIONAL', 17, 14, 0, '', 14, 725069102, '027/AG.200/KCI/VI/2022', '2022-08-03 08:45:00', '009/PL.606-JPL/KAPM/V?2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-09-01 00:00:00', '111/AL.101/KCI/IV/2022', 'SELESAI', 90, 63, 41, '', 22, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (65, 76, 'CO', 'COLA', '', 'OPEX', 'NON SARANA', 'Pekerjaan Peningkatan Pelayanan Penumpang - Pekerjaan Pembuatan Bangunan Fasilitas Pendukung Operasional - Area Stabling KRL Solo Balapan , Pekerjaan Parkiran Motor Purwosari dan Renovasi Ruang GK Solobalapan Guna Pendukung Operasional Kerja', 4413311349, 1575, '050/REN-LOG/KCI/IV/2022', '2022-04-11 00:00:00', 'PELELANGAN TERBUKA', '2100073062', '2022-08-03 08:45:00', 4378311349, 'PT Telekomunikasi Indonesia', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN NASIONAL', 17, 14, 0, '', 14, 4378311349, '025/AG.200/KCI/V/2022', '2022-08-03 08:45:00', '22/OJR/024/7434/SELASA', '2022-08-03 08:45:00', 'CONFIRMED', '2022-09-02 00:00:00', '113/AL.101/KCI/V/2022', 'SELESAI', 40, 28, 8, '', 20, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (66, 77, 'CO', 'COC', '', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Pemborongan Petugas Loket KA Lokal Di Stasiun Wilayah 2 PT KCI Tahun 2022', 563713500, 1576, '051/REN-LOG/KCI/IV/2022', '2022-04-12 00:00:00', 'PELELANGAN TERBUKA', '2100073063', '2022-08-03 08:45:00', 528713500, 'PT Telekomunikasi Indonesia', 'PDP', 'IMPOR-PERUSAHAAN NASIONAL', 18, 15, 0, '', 15, 528713500, '028/AG.200/KCI/VI/2022', '2022-08-03 08:45:00', '22/OJR/025/8051/KAMIS', '2022-08-03 08:45:00', 'CONFIRMED', '2022-09-03 00:00:00', '114/AL.101/KCI/V/2022', 'SELESAI', 64, 44, 22, '', 22, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (67, 78, 'CU', 'CUP', '', 'OPEX', 'SARANA', 'Pengadaan Jasa Konsultan Studi Kelayakan Bisnis Kajian Pengadaan Sarana KRL Baru Dari PT INKA', 1338105006, 1577, '052/REN-LOG/KCI/IV/2022', '2022-04-13 00:00:00', 'PELELANGAN TERBUKA', '2100073065', '2022-08-03 08:45:00', 1303105006, 'PT Telekomunikasi Indonesia', 'PDP', 'IMPOR-PERUSAHAAN NASIONAL', 22, 17, 0, '', 17, 1303105006, '006/SPR-LOG/KCI/V/2022', '2022-08-03 08:45:00', '22/OJR/095/5610/KAMIS', '2022-08-03 08:45:00', 'CONFIRMED', '2022-09-04 00:00:00', '150/AL.101/KCI/V/2022', 'SELESAI', 53, 39, 18, '', 21, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (68, 79, 'CT', 'CTI', '', 'OPEX', 'NON SARANA', 'Pengadaan Manage Service Security Operation Center', 4317346000, 1582, '057/REN-LOG/KCI/IV/2022', '2022-04-14 00:00:00', 'PELELANGAN TERBUKA', '2100073066', '2022-08-03 08:45:00', 4282346000, 'PT Datasystem Komputindo', 'PDP', 'IMPOR-PERUSAHAAN NASIONAL', 10, 9, 0, '', 9, 4282346000, '002/SPR/LOG/KCI/VI/2022', '2022-08-03 08:45:00', '22/KRM/052/8210/JUMAT', '2022-08-03 08:45:00', 'CONFIRMED', '2022-09-05 00:00:00', '095/AL.101/KCI/IV/2022', 'SELESAI', 28, 20, 0, '', 20, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (69, 80, 'CT', 'CTP', '', 'OPEX', 'SARANA', 'Pengadaan GTO KRL, Dll', 8168625000, 1578, '053/REN-LOG/KCI/IV/2022', '2022-04-15 00:00:00', 'PELELANGAN TERBUKA', '2100071758', '2022-08-03 08:45:00', 8133625000, 'PT Reska Multi Usaha', 'PDP', 'IMPOR-PERUSAHAAN NASIONAL', 38, 29, 0, '', 29, 8133625000, '030/AG.200/KCI/VI/2022', '2022-08-03 08:45:00', 'KK/403/IV/18/RMU/ 2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-09-06 00:00:00', '094/AL.101/KCI/IV/2022', 'SELESAI', 58, 42, 23, '', 19, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (70, 81, 'CT', 'CTP', '', 'OPEX', 'SARANA', 'Pengadaan Integrated Contact Strip', 699755433, 1579, '054/REN-LOG/KCI/IV/2022', '2022-04-16 00:00:00', 'PELELANGAN TERBUKA', '2100073064', '2022-08-03 08:45:00', 664755433, 'PT Reska Multi Usaha', 'PDP', 'IMPOR-PERUSAHAAN NASIONAL', 41, 30, 0, '', 30, 664755433, '039/AG.200/KCI/VI/2022', '2022-08-03 08:45:00', 'KK/403/IV/19/RMU/ 2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-09-07 00:00:00', '155/AL.101/KCI/V/2022', 'SELESAI', 16, 12, 0, '', 12, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (71, 82, 'CT', 'CTS', '', 'OPEX', 'NON SARANA', 'Pekerjaan Renovasi Kantor PT KCI Wilayah 8', 1288737672, 1580, '055/REN-LOG/KCI/IV/2022', '2022-04-17 00:00:00', 'PELELANGAN TERBUKA', '2100074167', '2022-08-03 08:45:00', 1253737672, 'PT KA Properti Manajemen', 'PDP', 'IMPOR-PERUSAHAAN NASIONAL', 12, 9, 0, '', 9, 1253737672, '031/AG.200/KCI/VI/2022', '2022-08-03 08:45:00', '021/PL.606-JPL/KAPM/VI/2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-09-08 00:00:00', '156/AL.101/KCI/V/2022', 'SELESAI', 30, 20, 0, '', 20, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (72, 83, 'CT', 'CTP', '', 'OPEX', 'SARANA', 'Pengadaan Kebutuhan Umum Unit Fasilitas Tahun 2022', 2444928000, 1584, '061/REN-LOG/KCI/V/2022', '2022-04-18 00:00:00', 'PELELANGAN TERBUKA', '2100073941', '2022-08-03 08:45:00', 2409928000, 'PT KA Properti Manajemen', 'PDP', 'IMPOR-PERUSAHAAN NASIONAL', 14, 11, 0, '', 11, 2409928000, '033/AG.200/KCI/VI/2022', '2022-08-03 08:45:00', '020/PL.606-JPL/KAPM/VI/2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-09-09 00:00:00', '117/AL.101/KCI/V/2022', 'SELESAI', 36, 24, 5, '', 19, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (73, 84, 'CT', 'CTP', '', 'CAPEX', 'SARANA', 'Pengadaan Pantograph KRL Single Arm Metro', 7920322000, 1585, '062/REN-LOG/KCI/V/2022', '2022-04-19 00:00:00', 'PELELANGAN TERBUKA', '2100073929', '2022-08-03 08:45:00', 7885322000, 'PT Kawisata', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN NASIONAL', 12, 9, 0, '', 9, 7885322000, '034/AG.200/KCI/VI/2022', '2022-08-03 08:45:00', '025/KAWISTA/WU/V/ 2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-09-10 00:00:00', '170/AL.101/KCI/V/2022', 'SELESAI', 36, 24, 12, '', 12, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (74, 85, 'CT', 'CTP', '', 'CAPEX', 'SARANA', 'Pengadaan AS Roda dan Selang Udara', 11856000000, 1586, '063/REN-LOG/KCI/V/2022', '2022-04-20 00:00:00', 'PELELANGAN TERBUKA', '2100073067', '2022-08-03 08:45:00', 11821000000, 'PT Defender Nusa Semesta', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN NASIONAL', 15, 12, 0, '', 12, 11821000000, '006/SPR/LOG/KCI/VI/2022', '2022-08-03 08:45:00', 'BGPSDM2201175', '2022-08-03 08:45:00', 'CONFIRMED', '2022-09-11 00:00:00', '180/AL.101/KCI/VII/2022', 'SELESAI', 20, 13, 0, '', 13, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (75, 86, 'CT', 'CTP', '', 'CAPEX', 'SARANA', 'Pengadaan Unit AC KRL Seri 8000 ', 15458600000, 1588, '065/REN-LOG/KCI/V/2022', '2022-04-21 00:00:00', 'PELELANGAN TERBUKA', '2100073735', '2022-08-03 08:45:00', 15423600000, 'PT KA Properti Manajemen', 'SURAT PENGANTAR PEMBUATAN JAMLAK', 'IMPOR-PERUSAHAAN NASIONAL', 34, 25, 0, '', 25, 15423600000, '035/AG.200/KCI/VI/2022', '2022-08-03 08:45:00', '005/PL.606-JPL/KAPM/VII/2022', '2022-08-03 08:45:00', 'CONFIRMED', '2022-09-12 00:00:00', '175/AL.101/KCI/V/2022', 'SELESAI', 12, 8, 0, '', 8, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_pbj_contract_report" VALUES (76, 87, 'CT', 'CTP', '', 'CAPEX', 'SARANA', 'Pengadaan SIV 20 KVA & SIV 250 KVA', 541507180, 1590, '067/REN-LOG/KCI/V/2022', '2022-04-22 00:00:00', 'PELELANGAN TERBUKA', '2100074132', '2022-08-03 08:45:00', 506507180, 'PT Transmikon Brahmakudra', 'BAHP', 'IMPOR-PERUSAHAAN NASIONAL', 17, 14, 0, '', 14, 506507180, '036/AG.200/KCI/VI/2022', '2022-08-03 08:45:00', 'BG13122140406', '2022-08-03 08:45:00', 'CONFIRMED', '2022-09-13 00:00:00', '169/AL.101/KCI/VI/2022', 'SELESAI', 43, 23, 5, '', 18, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');

-- ----------------------------
-- Table structure for trx_penetapan_pemenang
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_penetapan_pemenang";
CREATE TABLE "public"."trx_penetapan_pemenang" (
  "pemenang_id" int8 NOT NULL DEFAULT nextval('trx_penetapan_pemenang_pemenang_id_seq'::regclass),
  "sp3_id" int4,
  "vendor_code" varchar(255) COLLATE "pg_catalog"."default",
  "file_berita_acara" varchar(255) COLLATE "pg_catalog"."default",
  "catatan" text COLLATE "pg_catalog"."default",
  "created_by" varchar(255) COLLATE "pg_catalog"."default",
  "updated_by" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of trx_penetapan_pemenang
-- ----------------------------
INSERT INTO "public"."trx_penetapan_pemenang" VALUES (6, 39, 'RK10047', NULL, 'Sangat appreciate', NULL, NULL, '2022-08-08 13:49:53', '2022-08-08 13:49:53');

-- ----------------------------
-- Table structure for trx_peserta_tender
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_peserta_tender";
CREATE TABLE "public"."trx_peserta_tender" (
  "peserta_tender_id" int8 NOT NULL DEFAULT nextval('trx_peserta_tender_peserta_tender_id_seq'::regclass),
  "sp3_id" int4,
  "vendor_code" varchar(255) COLLATE "pg_catalog"."default",
  "phone_number" varchar(255) COLLATE "pg_catalog"."default",
  "pic_name" varchar(255) COLLATE "pg_catalog"."default",
  "email_corporate" varchar(255) COLLATE "pg_catalog"."default",
  "address" text COLLATE "pg_catalog"."default",
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of trx_peserta_tender
-- ----------------------------
INSERT INTO "public"."trx_peserta_tender" VALUES (26, 39, 'RK10047', '08190012001', 'Wawan Hendrawan', 'mail@mail.com', 'Jakarta', '6', NULL, '2022-08-08 13:28:10', '2022-08-08 13:28:10');
INSERT INTO "public"."trx_peserta_tender" VALUES (27, 39, 'RK10003', '08190012002', 'Heriawan', 'mail@mail.com', 'Jakarta', '6', NULL, '2022-08-08 13:28:10', '2022-08-08 13:28:10');
INSERT INTO "public"."trx_peserta_tender" VALUES (28, 39, 'RK10003', '08190012004', 'Xmadestone age', 'mail@mail.com', 'Jakarta', '6', NULL, '2022-08-08 13:28:10', '2022-08-08 13:28:10');

-- ----------------------------
-- Table structure for trx_realisasi_report
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_realisasi_report";
CREATE TABLE "public"."trx_realisasi_report" (
  "report_realisasi_id" int8 NOT NULL DEFAULT nextval('report_realisasi_id_seq'::regclass),
  "sp3_id" int4,
  "timeline_id" int4,
  "directorate_cd" varchar(20) COLLATE "pg_catalog"."default",
  "division_cd" varchar(20) COLLATE "pg_catalog"."default",
  "department_cd" varchar(20) COLLATE "pg_catalog"."default",
  "beban_biaya" varchar(20) COLLATE "pg_catalog"."default",
  "pbj" varchar(20) COLLATE "pg_catalog"."default",
  "judul_pengadaan" varchar(300) COLLATE "pg_catalog"."default",
  "nilai_rkap" int8,
  "proc_id" int4,
  "sp3_no" varchar(30) COLLATE "pg_catalog"."default",
  "tanggal_sp3" timestamp(0),
  "metode" varchar(20) COLLATE "pg_catalog"."default",
  "proses_st" varchar(20) COLLATE "pg_catalog"."default",
  "created_by" int4,
  "updated_by" int4,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of trx_realisasi_report
-- ----------------------------
INSERT INTO "public"."trx_realisasi_report" VALUES (1, 1, 5, 'CU', 'CUS', 'CUSG', 'OPEX', 'SARANA', 'Pengadaan ATK Tahun 2022', 2400000000, 1532, '003/REN-LOG/KCI/I/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (2, 2, 6, 'CU', 'CUS', 'CUSG', 'OPEX', 'SARANA', 'Barang Inventaris (AC)', 550000000, 1533, '004/REN-LOG/KCI/I/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (3, 3, 7, 'CU', 'CUS', 'CUSG', 'OPEX', 'SARANA', 'Barang Inventaris ( Meubeleer )', 550000000, 1536, '007/REN-LOG/KCI/II/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (4, 4, 8, 'CU', 'CUS', 'CUSG', 'CAPEX', 'SARANA', 'Barang Inventaris WILAYAH 2', 550000000, 1538, '009/REN-LOG/KCI/II/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (5, 5, 9, 'CU', 'CUS', 'CUSG', 'CAPEX', 'NON SARANA', 'Barang Inventaris WILAYAH 8', 550000000, 1540, '011/REN-LOG/KCI/II/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (6, 6, 10, 'CU', 'CUS', 'CUSG', 'CAPEX', 'NON SARANA', 'Pakaian Dinas Pegawai', 4170374243, 1545, '017/REN-LOG/KCI/III/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (7, 7, 11, 'CU', 'CUS', 'CUSG', 'CAPEX', 'NON SARANA', 'Barang Inventaris (Exclude Laptop / PC)', 550000000, 1549, '023/REN-LOG/KCI/III/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (8, 8, 40, 'CT ', 'CTI ', 'CTIO', 'OPEX', 'SARANA ', 'Pengadaan Manage Service Security Operation Center ', 465465465, 1578, '053/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (9, 9, 41, 'CT ', 'CTP ', 'CTPP ', 'OPEX', 'SARANA ', 'Pengadaan GTO KRL, Dll', 4317346000, 1579, '054/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (10, 10, 55, 'CF', 'CFH', 'CFHH', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Asuransi Kesehatan Pegawai Tahun 2022', 25786596312, 1580, '055/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (11, 11, 56, 'CF', 'CFH', 'CFHH', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Ahli Daya Petugas Poskes / Posrikes', 1623009726, 1584, '061/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (12, 12, 57, 'CF', 'CFH', 'CFHH', 'OPEX', 'NON SARANA', 'Jasa Pemeliharaan Kesehatan Pegawai (MCU) Tahun 2022', 2244776850, 1585, '062/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (13, 13, 58, 'CF', 'CFH', 'CFHH', 'OPEX', 'NON SARANA', 'Asuransi Tahun 2023', 25786596312, 1586, '063/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (14, 14, 59, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Software Jaaringan CCR', 2542083522, 1588, '065/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (15, 15, 60, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Guiding Block', 4542300000, 1590, '067/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (16, 16, 61, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Railing Stainless', 911594963, 1591, '068/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (17, 17, 62, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan CCTV Peron Lengkung', 939648511, 1593, '071/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (18, 18, 63, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaaan Standarisasi Signage', 3034939600, 1594, '072/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (19, 19, 64, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Informasi Digital Stasiun', 1260032598, 1595, '073/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (20, 20, 65, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Tombol Bantuan ', 937554750, 1596, '074/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (21, 21, 66, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Kipas HLVS', 1302069890, 1597, '075/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (22, 22, 67, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Peremajaan Sound System', 2124993543, 1599, '077/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (23, 23, 68, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Instalasi Cuci KRL', 676610000, 1602, '082/REN-LOG/KCI/VI/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (24, 24, 69, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Mesin Pompa Air', 791662500, 1603, '083/REN-LOG/KCI/VI/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (25, 25, 70, 'CO', 'COH', 'COHP', 'OPEX', 'NON SARANA', 'Pengadaan Kursi Tunggu Stasiun', 941424000, 1604, '085/REN-LOG/KCI/VI/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (26, 26, 71, 'CO', 'COS', 'COSA', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun dan Aset Wilayah 1 PT Kereta Commuter Indonesia Tahun 2022', 39327907741, 1607, '086/REN-LOG/KCI/VI/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (27, 27, 72, 'CO', 'COS', 'COSA', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun dan Aset Wilayah 2 PT Kereta Commuter Indonesia Tahun 2022', 38804246436, 1408, '015/REN-LOG/KCI/III/2021', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (28, 28, 73, 'CO', 'COS', 'COSA', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun Wilayah 3 PT Kereta Commuter Indonesia Tahun 2022', 35874372988, 1410, '017/REN-LOG/KCI/III/2021', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (29, 29, 74, 'CO', 'COS', 'COSA', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun Wilayah 4 PT Kereta Commuter Indonesia Tahun 2022', 33378057516, 1421, '030/REN-LOG/KCI/IV/2021', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (30, 30, 75, 'CO', 'COS', 'COSA', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun Wilayah 5 PT Kereta Commuter Indonesia Tahun 2022', 33504383711, 1442, '052/REN-LOG/KCI/VI/2021', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (31, 31, 76, 'CO', 'COS', 'COST', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan di atas KA Lintas 1  PT Kereta Commuter Indonesia Tahun 2022', 44660018031, 1531, '002/REN-LOG/KCI/I/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (32, 32, 77, 'CO', 'COS', 'COST', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan di atas KA Lintas 2  PT Kereta Commuter Indonesia Tahun 2022', 24047702017, 1543, '014/REN-LOG/KCI/II/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (33, 33, 78, 'CO', 'COS', 'COST', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan di atas KA Lintas 3  PT Kereta Commuter Indonesia Tahun 2022', 28107703656, 1546, '018/REN-LOG/KCI/III/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (34, 34, 79, 'CT', 'CTI', 'CTIO ', 'CAPEX', 'NON SARANA', 'Pembangunan Disaster Recovery Centre (DRC)', 22939066886, 1548, '020/REN-LOG/KCI/III/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (35, 35, 80, 'CT', 'CTI', 'CTIO ', 'CAPEX', 'NON SARANA', 'Pengadaan Video Analytic Tahap 2', 13137802776, 1551, '025/REN-LOG/KCI/III/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (71, 71, 0, 'CT', 'CTI', '', 'CAPEX', 'NON SARANA', 'Pengadaan Renewal Lisensi IT Security', 1265577720, 1550, '024/REN-LOG/KCI/III/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (36, 36, 81, 'CT', 'CTI', 'CTI SPC.1', 'CAPEX', 'NON SARANA', 'Pengembangan Ticketing HSM Top Up Online (Penegmbangan Sistem Penerbitan Kartu E-money) ', 26059000000, 1553, '027/REN-LOG/KCI/III/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (37, 37, 82, 'CT', 'CTI', 'CTIO ', 'CAPEX', 'NON SARANA', 'Pengembangan Infrastruktur IT Stasiun', 16356400000, 1556, '030/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (38, 38, 83, 'CT', 'CTI', 'CTI SPC.1', 'CAPEX', 'NON SARANA', 'Pengadaan Pekerjaan Pengembangan QR Ticketing System (Pengadaan Pengembangan QR E-Ticketing PT KCI)', 2700703500, 1555, '029/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (39, 39, 84, 'CT', 'CTI', 'CTIP ', 'CAPEX', 'NON SARANA', 'Pengadaan Software PBJ', 1000000000, 1558, '032/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (40, 40, 85, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Pengadaan Alat Test Getaran KRL', 698333300, 1564, '039/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (41, 41, 86, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'PCB Diagnostic System', 1089475000, 1567, '042/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (42, 42, 87, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Peremajaan Atap & Coating Lantai By KRL Mri', 5759413276, 1571, '046/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (43, 43, 88, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Pengadaan dan pemasangan JIB/Swing Crane 1 Ton', 1585000000, 1570, '045/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (44, 44, 89, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'On Floor Overhaul Mri', 40500000000, 1572, '047/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PENUNJUKAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (45, 45, 90, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Pengadaan dan Pemasangan Load Test Bogie', 6429500000, 1569, '044/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (46, 46, 91, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Mesin Under Cutting/Bubut Komutator', 8789000000, 1568, '043/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (47, 47, 92, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Konsultan Pengadaan dan Pemasangan Hydran Dipo dan Overhaul', 3213123133, 1573, '048/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (48, 48, 93, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Pengadaan dan Pemasangan Hydran Dipo dan Overhaul', 25000000000, 1581, '056/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (49, 49, 94, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Alat Ukur Ovality Rotor Motor Motor Listrik', 224000000, 1600, '078/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (50, 50, 95, 'CT', 'CTP', 'CTPP', 'CAPEX', 'SARANA', 'Alat Test Ac', 365000000, 1598, '076/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (51, 51, 96, 'CT', 'CTS', 'CTSC', 'CAPEX', 'NON SARANA', 'Jasa Konsultan Pengawas (Judul time line awal: Pembuatan Ruang KUPT Crew Depok)', 11000000000, 1601, '080/REN-LOG/KCI/VI/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (52, 52, 97, 'CT', 'CTS', 'CTSC', 'CAPEX', 'NON SARANA', 'Konstruksi Bangunan (Judul time line awal: Pembuatan Ruang KUPT Crew Depok)', 3232132323, 1604, '084/REN-LOG/KCI/VI/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (53, 53, 98, 'CT', 'CTS', 'CTSM ', 'CAPEX', 'NON SARANA', 'Pekerjaan DED (Pemasangan Lift di Underpass Stasiun PT KCI)', 5400000000, 1605, '085/REN-LOG/KCI/VI/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (54, 54, 99, 'CT', 'CTS', 'CTSM ', 'CAPEX', 'NON SARANA', 'Pemasangan Lift (Pemasangan Lift di Underpass Stasiun PT KCI)', 435667676, 1477, '085/REN-LOG/KCI/IX/2021', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (55, 55, 100, 'CT', 'CTS', 'CTSC', 'CAPEX', 'NON SARANA', 'Jasa Konsultan Pengawas (Pengadaan Lobby dan Ruang Direksi)', 1800000000, 1478, '086/REN-LOG/KCI/IX/2021', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (56, 56, 101, 'CT', 'CTS', 'CTSC', 'CAPEX', 'NON SARANA', 'Konstruksi Bangunan (Pengadaan Lobby dan Ruang Direksi)', 1540328960, 1479, '088/REN-LOG/KCI/IX/2021', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (57, 57, 0, 'CT', 'CTP', '', 'OPEX', 'SARANA', 'Pengadaan Lampu LED Ruang Penumpang KRL', 973090822, 1480, '089/REN-LOG/KCI/IX/2021', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (58, 58, 0, 'CT', 'CTP', '', 'OPEX', 'SARANA', 'Pengadaan Pelumas Rored HAD 90, Dll', 843955100, 1483, '093/REN-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (59, 59, 0, 'CT', 'CTI', '', 'OPEX', 'NON SARANA', 'Pengadaan Pekerjaan Perawatan dan Perbaikan UPS E-Ticketing', 2324887, 1482, '092/REN-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (60, 60, 0, 'CF', 'CFH', '', 'OPEX', 'SARANA', 'Online Training For Heavy Maintenance EMU JR 205 VVVF PT Kereta Commuter Indonesia', 1959940873, 1485, '095/REN-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (61, 61, 0, 'CT', 'CTI', '', 'OPEX', 'NON SARANA', 'Pengadaan Renewal Lisensi dan ATS VMWare', 1618237203, 1486, '097/REN-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (62, 62, 0, 'CT', 'CTI', '', 'OPEX', 'NON SARANA', 'Pengadaan Pekerjaan Relokasi Pemasangan Perangkat E-Ticketing', 3463509652, 1487, '098/REN-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (63, 63, 0, 'CO', 'COS', '', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Di Atas KA Wilayah Lokal 2 Bandung PT Kereta Commuter Indonesia Tahun 2022', 5505442686, 1490, '101/REN-LOG/KCI/X/2021', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (64, 64, 0, 'CO', 'COS', '', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Di Atas KA Wilayah Lokal 8 Surabaya PT Kereta Commuter Indonesia Tahun 2022', 735042687, 1532, '003/REN-LOG/KCI/I/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (65, 65, 0, 'CT', 'CTP', '', 'OPEX', 'SARANA', 'Pengadaan Freon', 4761829414, 1533, '004/REN-LOG/KCI/I/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (66, 66, 0, 'CO', 'COC', '', 'CAPEX', 'NON SARANA', 'Pengadaan Jasa Pemborongan Petugas Loket KA Lokal di Stasiun Wilayah 8 PT KCI Tahun 2022', 1185545895, 1536, '007/REN-LOG/KCI/II/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (67, 67, 0, 'CT', 'CTP', '', 'CAPEX', 'SARANA', 'Pengadaan Wiper KRL', 3915802500, 1538, '009/REN-LOG/KCI/II/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (68, 68, 0, 'CT', 'CTI', '', 'CAPEX', 'NON SARANA', 'Pengadaan Pekerjaan Modifikasi Gate Untuk Support QRCode System', 670397895, 1540, '011/REN-LOG/KCI/II/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (69, 69, 0, 'CT', 'CTI', '', 'CAPEX', 'NON SARANA', 'Pengadaan Pekerjaan Perbaikan MHTM Gate E-Ticketing', 936326292, 1545, '017/REN-LOG/KCI/III/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (70, 70, 0, 'CT', 'CTI', '', 'CAPEX', 'NON SARANA', 'Pengadaan Perangkat Untuk Monitoring CCTV Stasiun', 1189897892, 1549, '023/REN-LOG/KCI/III/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (72, 72, 0, 'CT', 'CTP', '', 'CAPEX', 'SARANA', 'Pengadaan Adaptor Pantograph KRL, Dll', 748501310, 1557, '031/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (73, 73, 0, 'CT', 'CTS', '', 'OPEX', 'NON SARANA', 'Penataan Area Masuk dan Keluar Hall Selatan Stasiun Kiaracondong', 5089475662, 1560, '035/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PEMILIHAN LANGSUNG', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (74, 74, 0, 'CO', 'COS', '', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun Dan Aset Wilayah Lokal 8 Surabaya PT Kereta Commuter Indonesia Tahun 2022', 7109660819, 1562, '037/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (75, 75, 0, 'CO', 'COS', '', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun Dan Aset Wilayah Lokal 2 Bandung PT Kereta Commuter Indonesia Tahun 2022', 760069102, 1574, '049/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (76, 76, 0, 'CO', 'COLA', '', 'OPEX', 'NON SARANA', 'Pekerjaan Peningkatan Pelayanan Penumpang - Pekerjaan Pembuatan Bangunan Fasilitas Pendukung Operasional - Area Stabling KRL Solo Balapan , Pekerjaan Parkiran Motor Purwosari dan Renovasi Ruang GK Solobalapan Guna Pendukung Operasional Kerja', 4413311349, 1575, '050/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (77, 77, 0, 'CO', 'COC', '', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Pemborongan Petugas Loket KA Lokal Di Stasiun Wilayah 2 PT KCI Tahun 2022', 563713500, 1576, '051/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (78, 78, 0, 'CU', 'CUP', '', 'OPEX', 'SARANA', 'Pengadaan Jasa Konsultan Studi Kelayakan Bisnis Kajian Pengadaan Sarana KRL Baru Dari PT INKA', 1338105006, 1577, '052/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (79, 79, 0, 'CT', 'CTI', '', 'OPEX', 'NON SARANA', 'Pengadaan Manage Service Security Operation Center', 4317346000, 1582, '057/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (80, 80, 0, 'CT', 'CTP', '', 'OPEX', 'SARANA', 'Pengadaan GTO KRL, Dll', 8168625000, 1578, '053/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (81, 81, 0, 'CT', 'CTP', '', 'OPEX', 'SARANA', 'Pengadaan Integrated Contact Strip', 699755433, 1579, '054/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (82, 82, 0, 'CT', 'CTS', '', 'OPEX', 'NON SARANA', 'Pekerjaan Renovasi Kantor PT KCI Wilayah 8', 1288737672, 1580, '055/REN-LOG/KCI/IV/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (83, 83, 0, 'CT', 'CTP', '', 'OPEX', 'SARANA', 'Pengadaan Kebutuhan Umum Unit Fasilitas Tahun 2022', 2444928000, 1584, '061/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (84, 84, 0, 'CT', 'CTP', '', 'CAPEX', 'SARANA', 'Pengadaan Pantograph KRL Single Arm Metro', 7920322000, 1585, '062/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (85, 85, 0, 'CT', 'CTP', '', 'CAPEX', 'SARANA', 'Pengadaan AS Roda dan Selang Udara', 11856000000, 1586, '063/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (86, 86, 0, 'CT', 'CTP', '', 'CAPEX', 'SARANA', 'Pengadaan Unit AC KRL Seri 8000 ', 15458600000, 1588, '065/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_realisasi_report" VALUES (87, 87, 0, 'CT', 'CTP', '', 'CAPEX', 'SARANA', 'Pengadaan SIV 20 KVA & SIV 250 KVA', 541507180, 1590, '067/REN-LOG/KCI/V/2022', '2022-08-03 08:45:00', 'PELELANGAN TERBUKA', 'Approve', 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');

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
  "no_mi" varchar(20) COLLATE "pg_catalog"."default",
  "tanggal_justifikasi" timestamp(0),
  "no_rab" varchar(20) COLLATE "pg_catalog"."default",
  "tanggal_rab" timestamp(0),
  "no_kak" varchar(20) COLLATE "pg_catalog"."default",
  "tanggal_kak" timestamp(0) NOT NULL,
  "proses_st" varchar(50) COLLATE "pg_catalog"."default",
  "type_metode" int4 NOT NULL,
  "nama_vendor" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "keterangan" text COLLATE "pg_catalog"."default" NOT NULL,
  "created_by" int4 NOT NULL,
  "updated_by" int4,
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "no_justifikasi" varchar(255) COLLATE "pg_catalog"."default",
  "coa" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of trx_sp3
-- ----------------------------
INSERT INTO "public"."trx_sp3" VALUES (53, NULL, 'CT', 'CTI', 'CTIO', 'PENGANDAAN REL', 'OP/CTI/2022/53', NULL, NULL, NULL, 1200100010, 1, 1320110011, NULL, NULL, NULL, NULL, NULL, '2022-08-08 16:19:11', 'PROSES_SSP3', 1, 'PT PERTAMINA', 'KETERANGAN', 6, 6, '2022-08-08 16:19:11', '2022-08-08 16:19:11', NULL, '["default-1","default-2"]');
INSERT INTO "public"."trx_sp3" VALUES (39, 34, 'CU', 'CUG', 'CUGP', 'Pengadaan Besi B', 'OP/CTI/2022/39', '990902010', '2022-08-08 13:24:35', NULL, 230000000, 2, 25300000, '990902010', '2022-08-08 13:24:35', '990902010', '2022-08-08 13:24:35', '990902010', '2022-08-08 13:24:35', 'PROSES_PCP', 2, 'PT PERTAMINA', 'KETERANGAN', 6, NULL, '2022-08-08 13:24:35', '2022-08-08 13:49:53', '990902010', NULL);
INSERT INTO "public"."trx_sp3" VALUES (48, 33, 'CU', 'CUG', 'CUGP', 'Pengandaan Besi A', 'OP/CTI/2022/48', NULL, NULL, NULL, 150000000, 2, 16500000, NULL, NULL, NULL, NULL, NULL, '2022-08-08 15:18:10', 'PROSES_SSP3', 1, 'PT PERTAMINA', 'KETERANGAN', 6, NULL, '2022-08-08 15:18:10', '2022-08-08 15:18:10', NULL, NULL);
INSERT INTO "public"."trx_sp3" VALUES (49, 33, 'CU', 'CUG', 'CUGP', 'Pengandaan Besi A', 'OP/CTI/2022/49', NULL, NULL, NULL, 150000000, 2, 16500000, NULL, NULL, NULL, NULL, NULL, '2022-08-08 15:20:57', 'PROSES_SSP3', 1, 'PT PERTAMINA', 'KETERANGAN', 6, NULL, '2022-08-08 15:20:57', '2022-08-08 15:20:57', NULL, NULL);
INSERT INTO "public"."trx_sp3" VALUES (52, NULL, 'CT', 'CTI', 'CTIO', 'Permohonaan Barang AbX', 'OP/CTI/2022/52', NULL, NULL, NULL, 10000000, 1, 1000, NULL, NULL, NULL, NULL, NULL, '2022-08-08 16:06:03', 'PROSES_SSP3', 1, 'PT PERTAMINA', 'KETERANGAN', 6, 6, '2022-08-08 16:06:03', '2022-08-08 16:06:03', NULL, '["default-1","default-2"]');

-- ----------------------------
-- Table structure for trx_timeline
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_timeline";
CREATE TABLE "public"."trx_timeline" (
  "timeline_id" int8 NOT NULL DEFAULT nextval('trx_timeline_timeline_id_seq'::regclass),
  "directorate_cd" varchar(20) COLLATE "pg_catalog"."default",
  "division_cd" varchar(20) COLLATE "pg_catalog"."default",
  "department_cd" varchar(20) COLLATE "pg_catalog"."default",
  "judul_pengadaan" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "no_pengadaan" varchar(20) COLLATE "pg_catalog"."default",
  "sumber_dana" varchar(20) COLLATE "pg_catalog"."default",
  "jenis_kontrak" varchar(20) COLLATE "pg_catalog"."default",
  "beban_biaya" varchar(20) COLLATE "pg_catalog"."default",
  "pbj" varchar(20) COLLATE "pg_catalog"."default",
  "nilai_pr" int4 NOT NULL,
  "type_tax" int4 NOT NULL,
  "nilai_tax" int4 NOT NULL,
  "start_date_pengadaan" timestamp(0),
  "end_date_pengadaan" timestamp(0),
  "proses_st" varchar(50) COLLATE "pg_catalog"."default",
  "created_by" int4 NOT NULL,
  "updated_by" int4,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of trx_timeline
-- ----------------------------
INSERT INTO "public"."trx_timeline" VALUES (33, 'CU', 'CUG', 'CUGP', 'Pengandaan Besi A', 'OP/CUG/2022/33', 'RKAP 2022', 'multi_year', 'CAPEX', 'Sarana', 150000000, 2, 16500000, '2022-08-08 00:00:00', '2022-08-12 00:00:00', 'PROSES_AT', 4, NULL, '2022-08-08 13:05:35', '2022-08-08 13:11:56');
INSERT INTO "public"."trx_timeline" VALUES (34, 'CU', 'CUG', 'CUGP', 'Pengadaan Besi B', 'OP/CUG/2022/34', 'RKAP 2022', 'single_year', 'CAPEX', 'Sarana', 230000000, 2, 25300000, '2022-08-08 00:00:00', '2022-08-12 00:00:00', 'PROSES_AT', 4, NULL, '2022-08-08 13:07:07', '2022-08-08 13:12:04');

-- ----------------------------
-- Table structure for trx_timeline_report
-- ----------------------------
DROP TABLE IF EXISTS "public"."trx_timeline_report";
CREATE TABLE "public"."trx_timeline_report" (
  "report_timeline_id" int8 NOT NULL DEFAULT nextval('report_timeline_id_seq'::regclass),
  "timeline_id" int8,
  "directorate_cd" varchar(20) COLLATE "pg_catalog"."default",
  "division_cd" varchar(20) COLLATE "pg_catalog"."default",
  "department_cd" varchar(20) COLLATE "pg_catalog"."default",
  "sumber_dana" varchar(20) COLLATE "pg_catalog"."default",
  "tahun_sumber_dana" int4,
  "jenis_kontrak" varchar(50) COLLATE "pg_catalog"."default",
  "beban_biaya" varchar(20) COLLATE "pg_catalog"."default",
  "pbj" varchar(20) COLLATE "pg_catalog"."default",
  "judul_pengadaan" varchar(300) COLLATE "pg_catalog"."default",
  "nilai_rkap" int8,
  "mulai_timeline" varchar(20) COLLATE "pg_catalog"."default",
  "start_bulan" varchar(20) COLLATE "pg_catalog"."default",
  "start_tahun" int4,
  "end_bulan" varchar(20) COLLATE "pg_catalog"."default",
  "end_tahun" int4,
  "maximal_sp3_bulan" varchar(20) COLLATE "pg_catalog"."default",
  "maximal_sp3_tahun" int4,
  "proses_st" varchar(20) COLLATE "pg_catalog"."default",
  "sp3_id" int8,
  "created_by" int4,
  "updated_by" int4,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of trx_timeline_report
-- ----------------------------
INSERT INTO "public"."trx_timeline_report" VALUES (3, 3, 'CU', 'CUS', 'CUSG', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Seragam Branding dan agenda perusahaan', 618351152, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (4, 4, 'CU', 'CUS', 'CUSG', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'SARANA', 'Pengadaan Seat Manajemen Laptop (BoD-VP-Manager)', 2896740000, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (5, 5, 'CU', 'CUS', 'CUSG', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'SARANA', 'Pengadaan ATK Tahun 2022', 2400000000, 'TW 1', 'Maret', 2022, 'Desember', 2022, 'Juni', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (6, 6, 'CU', 'CUS', 'CUSG', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'SARANA', 'Barang Inventaris (AC)', 550000000, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (7, 7, 'CU', 'CUS', 'CUSG', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'SARANA', 'Barang Inventaris ( Meubeleer )', 550000000, 'TW 1', 'Maret', 2022, 'Agustus', 2022, 'Juni', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (8, 8, 'CU', 'CUS', 'CUSG', 'RKAP', 2022, 'SINGLE YEAR', 'CAPEX', 'SARANA', 'Barang Inventaris WILAYAH 2', 550000000, 'TW 1', 'Januari', 2022, 'Agustus', 2022, 'April', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (9, 9, 'CU', 'CUS', 'CUSG', 'RKAP', 2022, 'SINGLE YEAR', 'CAPEX', 'NON SARANA', 'Barang Inventaris WILAYAH 8', 550000000, 'TW 2', 'April', 2022, 'Desember', 2022, 'Juli', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (10, 10, 'CU', 'CUS', 'CUSG', 'RKAP', 2022, 'MULTI YEAR', 'CAPEX', 'NON SARANA', 'Pakaian Dinas Pegawai', 4170374243, 'TW 2', 'Mei', 2022, 'Desember', 2022, 'Agustus', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (11, 11, 'CU', 'CUS', 'CUSG', 'RKAP', 2022, 'MULTI YEAR', 'CAPEX', 'NON SARANA', 'Barang Inventaris (Exclude Laptop / PC)', 550000000, 'TW 2', 'Juni', 2022, 'Desember', 2022, 'September', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (12, 12, 'CU', 'CUS', 'CUSG', 'RKAP', 2022, 'MULTI YEAR', 'CAPEX', 'SARANA', 'Sewa Kendaraan Operasional Direksi', 2504700000, 'TW 3', 'Juli', 2022, 'November', 2022, 'Oktober', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (13, 13, 'CU', 'CUS', 'CUSE', 'RKAP', 2022, 'MULTI YEAR', 'CAPEX', 'NON SARANA', 'Pengadaan Jasa Manajemen Media Sosial Resmi Perusahaan', 549866214, 'TW 3', 'Agustus', 2022, 'Desember', 2022, 'November', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (14, 14, 'CU', 'CUS', 'CUSE', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Manajemen Media Sosial Eksternal', 1132618557, 'TW 3', 'September', 2022, 'Desember', 2022, 'Desember', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (15, 15, 'CU', 'CUS', 'CUSE', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA', 'Event Layanan KRL', 992799206, 'TW 3', 'September', 2022, 'Januari', 2023, 'Desember', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (16, 16, 'CU', 'CUS', 'CUS', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Biaya Outsourcing Pengemudi dan Receptionist Kantor Tahun 2023', 2021278124, 'TW 4', 'Oktober', 2022, 'Februari', 2023, 'Januari', 2023, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (17, 17, 'CU', 'CUS', 'CUS', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Jasa Kebersihan (Managed Service) Kantor, Griya Karya dan UPT Tahun 2023 (Include Alat dan Bahan Kebersihan)', 1170832324, 'TW 4', 'Oktober', 2022, 'Januari', 2023, 'Januari', 2023, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (18, 18, 'CF ', 'CFH ', 'CFHR ', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Online Training For Heavy Maintenance EMU JR205 VVVF PT Kereta Commuter Indonesia ', 321764361, 'TW 1', 'Januari', 2022, 'Desember', 2022, 'April', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (19, 19, 'CT ', 'CTI ', 'CTIO', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Renewal Lisensi dan ATS VMWare ', 1959940873, 'TW 1', 'Januari', 2022, 'Desember', 2022, 'April', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (20, 20, 'CT ', 'CTI ', 'CTIO', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Pekerjaan Relokasi Pemasangan Perangkat E-ticketing', 1618237203, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (21, 21, 'CT ', 'CTI ', 'CTIO', 'RKAP', 2022, 'MULTI YEAR', 'OPEX ', 'SARANA ', 'Pengadaan Pekerjaan Perawatan dan Perbaikan UPS E-ticketing', 843955100, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (22, 22, 'CT ', 'CTP ', 'CTPP', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'SARANA ', 'Pengadaan Lampu LED Ruang Penumpang KRL ', 1540328960, 'TW 1', 'Maret', 2022, 'Desember', 2022, 'Juni', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (23, 23, 'CT ', 'CTP ', 'CTPP', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'SARANA ', 'Pengadaan Pelumas Rored HAD 90, Dll ', 971525308, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (24, 24, 'CT ', 'CTP ', 'CTPP', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Adaptor Pantograph KRL, Dll', 1265577720, 'TW 1', 'Maret', 2022, 'Agustus', 2022, 'Juni', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (25, 25, 'CO ', 'COS ', '', 'RKAP', 2022, 'MULTI YEAR', 'OPEX ', 'NON SARANA ', 'Pengadaan Jasa Satuan Pengamanan di Atas KA Wilayah Lokal 2 Bandung PT ', 3463509652, 'TW 1', 'Januari', 2022, 'Agustus', 2022, 'April', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (26, 26, 'CO ', 'COS ', '', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'SARANA ', 'Pengadaan Jasa Satuan Pengamanan di Atas KA Wilayah Lokal 8 Surabaya  PT Kereta Commuter Indonesia Tahun 2022', 5505442686, 'TW 2', 'April', 2022, 'Desember', 2022, 'Juli', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (27, 27, 'CT', 'CTP ', 'CTPP', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Freon ', 735042687, 'TW 2', 'Mei', 2022, 'Desember', 2022, 'Agustus', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (28, 28, 'CO ', 'COS ', 'COCP', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'SARANA ', 'Pengadaan Jasa Pemborongan Petugas Loket KA Lokal di Stasiun Wilayah 8 PT KCI Tahun 2022 ', 4761829414, 'TW 2', 'Juni', 2022, 'Desember', 2022, 'September', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (29, 29, 'CT', 'CTP ', 'CTPP', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Wiper KRL ', 1185545895, 'TW 3', 'Juli', 2022, 'November', 2022, 'Oktober', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (30, 30, 'CT', 'CTI ', 'CTIP ', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Pekerjaan Modifikasi Gate Untuk Support QR Code System ', 3915802500, 'TW 3', 'Agustus', 2022, 'Desember', 2022, 'November', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (31, 31, 'CT', 'CTI ', 'CTIP ', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Pekerjaan Perbaikan MHTM Gate E-Ticketing', 4232131231, 'TW 3', 'September', 2022, 'Desember', 2022, 'Desember', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (32, 32, 'CT', 'CTI ', 'CTIP ', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Perangkat Untuk Monitoring CCTV Stasiun', 45354354, 'TW 3', 'September', 2022, 'Januari', 2023, 'Desember', 2022, 'Approved', 1, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (1, 1, 'CU', 'CUS', 'CUSG', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Penyedia Jasa Pengemudi Kendaraan Operasional dan Receptionist Tahun 2022', 2177635904, 'TW 1', 'Januari', 2022, 'Desember', 2022, 'April', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:59', '2022-08-03 08:46:36');
INSERT INTO "public"."trx_timeline_report" VALUES (33, 33, 'CT', 'CTI ', 'CTIP ', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Renewal Lisensi IT Security', 54353434, 'TW 4', 'Oktober', 2022, 'Februari', 2023, 'Januari', 2023, 'Approved', 2, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (65, 65, 'CO', 'COH', 'COHP', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Tombol Bantuan ', 937554750, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 23, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (34, 34, 'CO ', 'COS ', '', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Jasa Satuan Pengamanan Stasiun dan Aset Wilayah Lokal 8 Surabaya PT Kereta Commuter Indonesia Tahun 2022', 5089475662, 'TW 4', 'Oktober', 2022, 'Januari', 2023, 'Januari', 2023, 'Approved', 3, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (35, 35, 'CT', 'CTI ', 'CTIP ', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Jasa Satuan Pengamanan Stasiun dan Aset Wilayah Lokal 2 Bandung PT Kereta Commuter Indonesia Tahun 2022', 54354655, 'TW 2', 'April', 2022, 'Desember', 2022, 'Juli', 2022, 'Approved', 4, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (36, 36, 'CT', 'CTI ', 'CTIP ', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'SARANA ', 'Pekerjaan Peningkatan Pelayanan Penumpang - Pekerjaan Pembuatan Bagunan Fasilitas Pendukung Operasional - Area Stabling KRL Solo Balapan, Pekerjaan Parkiran Motor Purwosari dan Renovasi Ruang GK Solobalapan Guna Operasional Kerja', 34242243, 'TW 2', 'Mei', 2022, 'Desember', 2022, 'Agustus', 2022, 'Approved', 5, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (37, 37, 'CT', 'CTI ', 'CTIP ', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA ', 'Penataan Area Masuk dan Keluar Hall Selatan Stasiun Kiaracondong', 545435465, 'TW 2', 'Juni', 2022, 'Desember', 2022, 'September', 2022, 'Approved', 6, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (38, 38, 'CO ', 'COC ', 'COCP', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'SARANA ', 'Pengadaan Jasa Pemborongan Petugas Loket KA Lokal Di Stasiun Wilayah 2 PT KCI Tahun 2022', 4413311349, 'TW 3', 'Juli', 2022, 'November', 2022, 'Oktober', 2022, 'Approved', 7, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (39, 39, 'CU ', 'CUP ', 'CUP.1', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Jasa Konsultan Studi Kelayakan Bisnis Kajian Pengadaan Sarana KRL Baru dari PT INKA', 563713500, 'TW 3', 'Agustus', 2022, 'Desember', 2022, 'November', 2022, 'Approved', 8, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (40, 40, 'CT ', 'CTI ', 'CTIO', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'SARANA ', 'Pengadaan Manage Service Security Operation Center ', 465465465, 'TW 3', 'September', 2022, 'Desember', 2022, 'Desember', 2022, 'Approved', 9, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (41, 41, 'CT ', 'CTP ', 'CTPP ', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'SARANA ', 'Pengadaan GTO KRL, Dll', 4317346000, 'TW 3', 'September', 2022, 'Januari', 2023, 'Desember', 2022, 'Approved', 10, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (42, 42, 'CT ', 'CTP ', 'CTPP ', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Integrated Contact Strip', 8168625000, 'TW 4', 'Oktober', 2022, 'Februari', 2023, 'Januari', 2023, 'Approved', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (43, 43, 'CT ', 'CTS ', '', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'SARANA ', 'Pekerjaan Renovasi Kantor PT KCI Wilayah 8', 465655454, 'TW 4', 'Oktober', 2022, 'Januari', 2023, 'Januari', 2023, 'Approved', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (44, 44, 'CT ', 'CTP ', 'CTPP ', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'SARANA ', 'Pengadaan AS Roda dan Selang Udara ', 7920322000, 'TW 3', 'Agustus', 2022, 'Desember', 2022, 'November', 2022, 'Approved', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (45, 45, 'CT ', 'CTP ', 'CTPP ', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'SARANA ', 'Pengadaan Kebutuhan Umum Unit Fasilitas Tahun 2022 ', 1288737672, 'TW 3', 'September', 2022, 'Desember', 2022, 'Desember', 2022, 'Approved', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (46, 46, 'CT ', 'CTP ', 'CTPP ', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'SARANA ', 'Pengadaan Pantograph KRL Single Arm Metro ', 2444928000, 'TW 3', 'September', 2022, 'Januari', 2023, 'Desember', 2022, 'Approved', 11, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (47, 47, 'CT ', 'CTP ', 'CTPP ', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'SARANA ', 'Pengadaan Unit AC KRL Seri 8000', 11856000000, 'TW 4', 'Oktober', 2022, 'Februari', 2023, 'Januari', 2023, 'Approved', 12, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (48, 48, 'CT ', 'CTP ', 'CTPP ', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan SIV 20 KVA & SIV 250 KVA ', 15458600000, 'TW 4', 'Oktober', 2022, 'Januari', 2023, 'Januari', 2023, 'Approved', 13, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (49, 49, 'CT ', 'CTS ', 'CTSC ', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA ', 'Pendukung Pelayanan Penumpamng - Renovasi Toilet dan Mushalla Stasiun Pasar Minggu ', 541507180, 'TW 1', 'Januari', 2022, 'Desember', 2022, 'April', 2022, 'Approved', 14, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (50, 50, 'CT ', 'CTI ', 'CTIP ', 'RKAP', 2022, 'MULTI YEAR', 'OPEX ', 'NON SARANA ', 'Pengadaan Sofware Pendukung Berlisensi ', 1415986036, 'TW 1', 'Januari', 2022, 'Desember', 2022, 'April', 2022, 'Approved', 15, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (51, 51, 'CT ', 'CTI ', 'CTIP ', 'RKAP', 2022, 'MULTI YEAR', 'OPEX ', 'NON SARANA ', 'Pengadaan Annual Technical Support (ATS) SAP License Tahun 2022', 1105390869, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 16, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (52, 52, 'CO ', 'COLA', 'COLA', 'RKAP', 2022, 'MULTI YEAR', 'OPEX ', 'NON SARANA ', 'Pekerjaan Infrastruktur E-Ticketing Stasiun Solo Jebres dan Palur PT Kereta Commuter Indonesia (KCI)', 648665130, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 17, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (53, 53, 'CF ', 'CFH ', 'CFHH', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA ', 'Pengadaan Alat Kesehatan Untuk Pemenuhan Fasilitas Kesehatan Stasiun Wilayah Jabodetabek dan Wilayah 1', 606949898, 'TW 1', 'Maret', 2022, 'Desember', 2022, 'Juni', 2022, 'Approved', 18, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (54, 54, 'CU ', 'CUS', '', 'RKAP', 2022, 'SINGLE YEAR', 'CAPEX', 'SARANA', 'Pengadaan Kegiatan Sosialisasi dan Edukasi Terkait Vandalisme BersamaWarga Sekitar Jalur Rel ', 67564322, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 19, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (55, 55, 'CF', 'CFH', 'CFHH', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Asuransi Kesehatan Pegawai Tahun 2022', 25786596312, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 20, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (56, 56, 'CF', 'CFH', 'CFHH', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Ahli Daya Petugas Poskes / Posrikes', 1623009726, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (57, 57, 'CF', 'CFH', 'CFHH', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Jasa Pemeliharaan Kesehatan Pegawai (MCU) Tahun 2022', 2244776850, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (58, 58, 'CF', 'CFH', 'CFHH', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Asuransi Tahun 2023', 25786596312, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (59, 59, 'CO', 'COH', 'COHP', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Software Jaaringan CCR', 2542083522, 'TW 3', 'September', 2022, 'Desember', 2022, 'Desember', 2022, 'Approved', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (60, 60, 'CO', 'COH', 'COHP', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Guiding Block', 4542300000, 'TW 3', 'September', 2022, 'Januari', 2023, 'Desember', 2022, 'Approved', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (61, 61, 'CO', 'COH', 'COHP', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Railing Stainless', 911594963, 'TW 4', 'Oktober', 2022, 'Februari', 2023, 'Januari', 2023, 'Approved', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (62, 62, 'CO', 'COH', 'COHP', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan CCTV Peron Lengkung', 939648511, 'TW 4', 'Oktober', 2022, 'Januari', 2023, 'Januari', 2023, 'Approved', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (63, 63, 'CO', 'COH', 'COHP', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaaan Standarisasi Signage', 3034939600, 'TW 1', 'Januari', 2022, 'Desember', 2022, 'April', 2022, 'Approved', 21, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (64, 64, 'CO', 'COH', 'COHP', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Informasi Digital Stasiun', 1260032598, 'TW 1', 'Januari', 2022, 'Desember', 2022, 'April', 2022, 'Approved', 22, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (66, 66, 'CO', 'COH', 'COHP', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Kipas HLVS', 1302069890, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 24, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (67, 67, 'CO', 'COH', 'COHP', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Peremajaan Sound System', 2124993543, 'TW 1', 'Maret', 2022, 'Desember', 2022, 'Juni', 2022, 'Approved', 25, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (68, 68, 'CO', 'COH', 'COHP', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Instalasi Cuci KRL', 676610000, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 26, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (69, 69, 'CO', 'COH', 'COHP', 'RKAP', 2022, 'MULTI YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Mesin Pompa Air', 791662500, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 27, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (70, 70, 'CO', 'COH', 'COHP', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Kursi Tunggu Stasiun', 941424000, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 28, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (71, 71, 'CO', 'COS', 'COSA', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun dan Aset Wilayah 1 PT Kereta Commuter Indonesia Tahun 2022', 39327907741, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 29, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (72, 72, 'CO', 'COS', 'COSA', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun dan Aset Wilayah 2 PT Kereta Commuter Indonesia Tahun 2022', 38804246436, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 30, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (73, 73, 'CO', 'COS', 'COSA', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun Wilayah 3 PT Kereta Commuter Indonesia Tahun 2022', 35874372988, 'TW 3', 'Agustus', 2022, 'Desember', 2022, 'November', 2022, 'Approved', 31, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (74, 74, 'CO', 'COS', 'COSA', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun Wilayah 4 PT Kereta Commuter Indonesia Tahun 2022', 33378057516, 'TW 3', 'September', 2022, 'Desember', 2022, 'Desember', 2022, 'Approved', 32, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (75, 75, 'CO', 'COS', 'COSA', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan Stasiun Wilayah 5 PT Kereta Commuter Indonesia Tahun 2022', 33504383711, 'TW 3', 'September', 2022, 'Januari', 2023, 'Desember', 2022, 'Approved', 33, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (76, 76, 'CO', 'COS', 'COST', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan di atas KA Lintas 1  PT Kereta Commuter Indonesia Tahun 2022', 44660018031, 'TW 4', 'Oktober', 2022, 'Februari', 2023, 'Januari', 2023, 'Approved', 34, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (77, 77, 'CO', 'COS', 'COST', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan di atas KA Lintas 2  PT Kereta Commuter Indonesia Tahun 2022', 24047702017, 'TW 3', 'Agustus', 2022, 'Desember', 2022, 'November', 2022, 'Approved', 35, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (78, 78, 'CO', 'COS', 'COST', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Pengadaan Jasa Satuan Pengamanan di atas KA Lintas 3  PT Kereta Commuter Indonesia Tahun 2022', 28107703656, 'TW 3', 'September', 2022, 'Desember', 2022, 'Desember', 2022, 'Approved', 36, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (79, 79, 'CT', 'CTI', 'CTIO ', 'LUNCURAN', 2022, 'SINGLE YEAR', 'CAPEX', 'NON SARANA', 'Pembangunan Disaster Recovery Centre (DRC)', 22939066886, 'TW 1', 'Januari', 2022, 'Desember', 2022, 'April', 2022, 'Approved', 37, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (80, 80, 'CT', 'CTI', 'CTIO ', 'LUNCURAN', 2022, 'MULTI YEAR', 'CAPEX', 'NON SARANA', 'Pengadaan Video Analytic Tahap 2', 13137802776, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 38, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (81, 81, 'CT', 'CTI', 'CTI SPC.1', 'LUNCURAN', 2022, 'MULTI YEAR', 'CAPEX', 'NON SARANA', 'Pengembangan Ticketing HSM Top Up Online (Penegmbangan Sistem Penerbitan Kartu E-money) ', 26059000000, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 39, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (82, 82, 'CT', 'CTI', 'CTIO ', 'LUNCURAN', 2022, 'MULTI YEAR', 'CAPEX', 'NON SARANA', 'Pengembangan Infrastruktur IT Stasiun', 16356400000, 'TW 1', 'Maret', 2022, 'Desember', 2022, 'Juni', 2022, 'Approved', 40, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (83, 83, 'CT', 'CTI', 'CTI SPC.1', 'LUNCURAN', 2022, 'MULTI YEAR', 'CAPEX', 'NON SARANA', 'Pengadaan Pekerjaan Pengembangan QR Ticketing System (Pengadaan Pengembangan QR E-Ticketing PT KCI)', 2700703500, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 41, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (84, 84, 'CT', 'CTI', 'CTIP ', 'LUNCURAN', 2022, 'MULTI YEAR', 'CAPEX', 'NON SARANA', 'Pengadaan Software PBJ', 1000000000, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 42, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (85, 85, 'CT', 'CTP', 'CTPP', 'LUNCURAN', 2022, 'MULTI YEAR', 'CAPEX', 'SARANA', 'Pengadaan Alat Test Getaran KRL', 698333300, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 43, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (86, 86, 'CT', 'CTP', 'CTPP', 'LUNCURAN', 2022, 'SINGLE YEAR', 'CAPEX', 'SARANA', 'PCB Diagnostic System', 1089475000, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 44, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (87, 87, 'CT', 'CTP', 'CTPP', 'LUNCURAN', 2022, 'SINGLE YEAR', 'CAPEX', 'SARANA', 'Peremajaan Atap & Coating Lantai By KRL Mri', 5759413276, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 45, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (88, 88, 'CT', 'CTP', 'CTPP', 'LUNCURAN', 2022, 'SINGLE YEAR', 'CAPEX', 'SARANA', 'Pengadaan dan pemasangan JIB/Swing Crane 1 Ton', 1585000000, 'TW 3', 'Agustus', 2022, 'Desember', 2022, 'November', 2022, 'Approved', 46, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (89, 89, 'CT', 'CTP', 'CTPP', 'LUNCURAN', 2022, 'SINGLE YEAR', 'CAPEX', 'SARANA', 'On Floor Overhaul Mri', 40500000000, 'TW 3', 'September', 2022, 'Desember', 2022, 'Desember', 2022, 'Approved', 47, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (90, 90, 'CT', 'CTP', 'CTPP', 'LUNCURAN', 2022, 'SINGLE YEAR', 'CAPEX', 'SARANA', 'Pengadaan dan Pemasangan Load Test Bogie', 6429500000, 'TW 3', 'September', 2022, 'Januari', 2023, 'Desember', 2022, 'Approved', 48, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (91, 91, 'CT', 'CTP', 'CTPP', 'LUNCURAN', 2022, 'SINGLE YEAR', 'CAPEX', 'SARANA', 'Mesin Under Cutting/Bubut Komutator', 8789000000, 'TW 4', 'Oktober', 2022, 'Februari', 2023, 'Januari', 2023, 'Approved', 49, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (92, 92, 'CT', 'CTP', 'CTPP', 'LUNCURAN', 2022, 'SINGLE YEAR', 'CAPEX', 'SARANA', 'Konsultan Pengadaan dan Pemasangan Hydran Dipo dan Overhaul', 3213123133, 'TW 3', 'Agustus', 2022, 'Desember', 2022, 'November', 2022, 'Approved', 50, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (93, 93, 'CT', 'CTP', 'CTPP', 'LUNCURAN', 2022, 'SINGLE YEAR', 'CAPEX', 'SARANA', 'Pengadaan dan Pemasangan Hydran Dipo dan Overhaul', 25000000000, 'TW 3', 'September', 2022, 'Desember', 2022, 'Desember', 2022, 'Approved', 51, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (94, 94, 'CT', 'CTP', 'CTPP', 'LUNCURAN', 2022, 'SINGLE YEAR', 'CAPEX', 'SARANA', 'Alat Ukur Ovality Rotor Motor Motor Listrik', 224000000, 'TW 1', 'Januari', 2022, 'Desember', 2022, 'April', 2022, 'Approved', 52, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (95, 95, 'CT', 'CTP', 'CTPP', 'LUNCURAN', 2022, 'SINGLE YEAR', 'CAPEX', 'SARANA', 'Alat Test Ac', 365000000, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 53, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (96, 96, 'CT', 'CTS', 'CTSC', 'LUNCURAN', 2022, 'MULTI YEAR', 'CAPEX', 'NON SARANA', 'Jasa Konsultan Pengawas (Judul time line awal: Pembuatan Ruang KUPT Crew Depok)', 11000000000, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 54, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (97, 97, 'CT', 'CTS', 'CTSC', 'LUNCURAN', 2022, 'MULTI YEAR', 'CAPEX', 'NON SARANA', 'Konstruksi Bangunan (Judul time line awal: Pembuatan Ruang KUPT Crew Depok)', 3232132323, 'TW 1', 'Maret', 2022, 'Desember', 2022, 'Juni', 2022, 'Approved', 55, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (98, 98, 'CT', 'CTS', 'CTSM ', 'LUNCURAN', 2022, 'MULTI YEAR', 'CAPEX', 'NON SARANA', 'Pekerjaan DED (Pemasangan Lift di Underpass Stasiun PT KCI)', 5400000000, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 56, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (99, 99, 'CT', 'CTS', 'CTSM ', 'LUNCURAN', 2022, 'MULTI YEAR', 'CAPEX', 'NON SARANA', 'Pemasangan Lift (Pemasangan Lift di Underpass Stasiun PT KCI)', 435667676, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 57, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (100, 100, 'CT', 'CTS', 'CTSC', 'LUNCURAN', 2022, 'MULTI YEAR', 'CAPEX', 'NON SARANA', 'Jasa Konsultan Pengawas (Pengadaan Lobby dan Ruang Direksi)', 1800000000, 'TW 1', 'Februari', 2022, 'Desember', 2022, 'Mei', 2022, 'Approved', 58, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');
INSERT INTO "public"."trx_timeline_report" VALUES (2, 2, 'CU', 'CUS', 'CUSG', 'RKAP', 2022, 'SINGLE YEAR', 'OPEX', 'NON SARANA', 'Managed service kantor pusat Juanda, Crew KRL, OPSAR, UPT Crew dan Griya Karya', 11390232500, 'TW 1', 'Januari', 2022, 'Desember', 2022, 'April', 2022, 'Submiited', 0, 1, 0, '2022-08-03 08:45:00', '2022-08-03 08:45:00');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS "public"."users";
CREATE TABLE "public"."users" (
  "id" int8 NOT NULL DEFAULT nextval('users_id_seq'::regclass),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "email" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "email_verified_at" timestamp(0),
  "password" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "remember_token" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "username" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "level_cd" varchar(20) COLLATE "pg_catalog"."default",
  "users_cd" varchar(20) COLLATE "pg_catalog"."default",
  "department_cd" varchar(20) COLLATE "pg_catalog"."default",
  "division_cd" varchar(20) COLLATE "pg_catalog"."default",
  "directorate_cd" varchar(20) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO "public"."users" VALUES (14, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', NULL, '2022-07-12 04:11:20', '2022-07-12 04:11:20', 'admin', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."users" VALUES (16, 'USERS X', 'userx@mail.com', NULL, '$2y$10$.wpFRn/kW846dI58eUVbBufkgXKgYWtrndBBv1ODiJYCvUxF9XGEO', NULL, '2022-07-12 04:14:54', '2022-07-12 04:14:54', 'userx', NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."users" VALUES (2, 'presdir', 'presdir@gmail.com', '2022-07-16 22:49:34', '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', '', '2022-07-16 22:49:34', NULL, 'presdir', 'DIR', NULL, NULL, NULL, 'CU');
INSERT INTO "public"."users" VALUES (3, 'vp_logistic', 'vp.logistic@gmail.com', '2022-07-16 22:49:34', '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', '', '2022-07-16 22:49:34', NULL, 'vp_logistic', 'VP', NULL, NULL, 'CUG', 'CU');
INSERT INTO "public"."users" VALUES (4, 'mgr_logistic', 'mgr.logistic@gmail.com', '2022-07-16 22:49:34', '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', '', '2022-07-16 22:49:34', NULL, 'mgr_logistic', 'MGR', NULL, 'CUGP', 'CUG', 'CU');
INSERT INTO "public"."users" VALUES (5, 'eval_logistic', 'eval.logistic@gmail.com', '2022-07-16 22:49:34', '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', '', '2022-07-16 22:49:34', NULL, 'eval_logistic', 'LEV7', 'CUGP.7', 'CUGP', 'CUG', 'CU');
INSERT INTO "public"."users" VALUES (6, 'mgr_it', 'mgr.it@gmail.com', '2022-07-16 22:49:34', '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', '', '2022-07-16 22:49:34', NULL, 'mgr_it', 'MGR', NULL, 'CTIO', 'CTI', 'CT');
INSERT INTO "public"."users" VALUES (7, 'asman_it', 'asman.it@gmail.com', '2022-07-16 22:49:34', '$2y$10$UMQxG.pVvKJ92TbL4FnuIu3kLR1InUgsLlC6kPVSp.gxvOwbFqQFy', '', '2022-07-16 22:49:34', NULL, 'asman_it', 'AMGR', 'CTIO.1', 'CTIO', 'CTI', 'CT');
INSERT INTO "public"."users" VALUES (17, 'test', 'test@mail.com', NULL, '123456', NULL, '2022-07-31 15:18:39', '2022-07-31 15:18:39', 'test', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for vendor
-- ----------------------------
DROP TABLE IF EXISTS "public"."vendor";
CREATE TABLE "public"."vendor" (
  "vendor_id" int8 NOT NULL DEFAULT nextval('vendor_vendor_id_seq'::regclass),
  "vendor_code" varchar(255) COLLATE "pg_catalog"."default",
  "vendor_name" varchar(255) COLLATE "pg_catalog"."default",
  "street" varchar(255) COLLATE "pg_catalog"."default",
  "country" varchar(255) COLLATE "pg_catalog"."default",
  "postal_code" varchar(255) COLLATE "pg_catalog"."default",
  "city" varchar(255) COLLATE "pg_catalog"."default",
  "account_group" varchar(255) COLLATE "pg_catalog"."default",
  "search_term" varchar(255) COLLATE "pg_catalog"."default",
  "central_deletion_flag" varchar(255) COLLATE "pg_catalog"."default",
  "purch_org" varchar(255) COLLATE "pg_catalog"."default",
  "purch_org_descr" varchar(255) COLLATE "pg_catalog"."default",
  "term_of_payment" varchar(255) COLLATE "pg_catalog"."default",
  "delete_flag_for_purchasing_org" varchar(255) COLLATE "pg_catalog"."default",
  "order_currency" varchar(255) COLLATE "pg_catalog"."default",
  "created_by" varchar(255) COLLATE "pg_catalog"."default",
  "updated_by" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of vendor
-- ----------------------------
INSERT INTO "public"."vendor" VALUES (2, '1000360', 'PT POINTERA AKTUARIAL STRATEGIS', '8B Jl. Bungur II', 'ID', '12240', 'DKI JAKARTA', 'GV01', 'POINTERA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (3, 'HI0001', 'RAILINK, PT', 'Lt2 Gd Stasiun Kereta Api Bandara S', 'ID', '10230', 'JAKARTA', 'IV02', 'RAILINK, P', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (4, 'HI0003', 'KA PROPERTI MANAJEMEN, PT', 'Jl. Samanhudi Stasiun Sawah Besar L', 'ID', '', 'JAKARTA', 'IV02', 'KA PROPERT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (5, 'HI0004', 'RESKA MULTI USAHA, PT', 'JL. Karang Anyar No. 1 Karang Anyar', 'ID', '', 'Jakarta Pusat', 'IV02', 'RESKA MULT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (6, 'HI0005', 'KERETA API PARIWISATA, PT', '1 STASIUN GONDANGDIA, PINTU SELATAN', 'ID', '10110', 'JAKARTA PUSAT', 'IV02', 'KERETA API', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (7, 'HI0006', 'KERETA API LOGISTIK, PT', 'JL. KH WAHID HASYIM NO.11A KEBON SI', 'ID', '', 'JAKARTA', 'IV02', 'KERETA API', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (8, 'HI0007', 'PT Kereta Api Indonesia', 'No.1 Jl. Perintis Kemerdekaan', 'ID', '40117', 'Bandung', 'IV02', 'KAI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (9, 'HI0010', 'PT. RESKA MULTI USAHA', 'Stasiun Mangga Besar Lt 1 Jl. Karan', 'ID', '10740', 'Jakata Pusat', 'IV02', 'RESKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (10, 'HI0017', 'BANK MANDIRI', 'JL. GATOT SUBROTO KAV. 36-38', 'ID', '12190', 'JAKARTA', 'IV02', 'BANK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (11, 'HI0018', 'BANK MANDIRI', 'JL. GATOT SUBROTO KAV. 36-38', 'ID', '12190', 'Jakarta', 'IV02', 'BANK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (12, 'PE0701', 'HASYIM', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'HASYIM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (13, 'PE0702', 'KARINA AMANDA', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'KARINA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (14, 'PE0703', 'DEVRI BAWINTO', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'DEVRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (15, 'PE0704', 'MEGA RUSIANDI', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'MEGA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (16, 'PE0705', 'IDA RETNOWATI', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'IDA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (17, 'PE0706', 'ARTI WINARNI', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'ARTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (18, 'PE0707', 'EVA CHAIRUNISA', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'EVA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (19, 'PE0708', 'ELLA HERLIA', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'ELLA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (20, 'PE0709', 'RISDYANTI PURI HARAHAP', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'RISDYANTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (21, 'PE0729', 'GUN GUN NUGRAHA', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'GUN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (22, 'PE0735', 'ADE SUMIARSA', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'ADE', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZV30', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (23, 'PE0742', 'AGUNG SURANTO', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'AGUNG', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZV30', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (24, 'PE0745', 'INDRA UTAMA', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'INDRA', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (25, 'PE0750', 'CHRISTOFFEL MARANTO', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'CHRISTOFFE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (26, 'PE0756', 'PHILIPPUS SURJANTO HARTANTO', 'I Jl.Ir.H. Juanda', 'ID', '10120', 'JAKARTA', 'IV03', 'PHILIPPUS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z030', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (27, 'PE0759', 'TRI YUWONO', 'PRA SARANA', 'ID', '', 'JAKARTA', 'IV03', 'TRI YUWONO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (28, 'PE0764', 'BUDIYANTO', 'Jl. Ir H Juanda I', 'ID', '10120', 'JAKARTA', 'IV03', 'BUDIYANTO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (29, 'PE0783', 'LAURENTIUS WIRAGNI SANJAYA', 'Jl. St. Juanda', 'ID', '', 'JAKARTA', 'IV03', 'LAURENTIUS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (30, 'PE0787', 'Christoffel Maranto', 'juanda', 'ID', '', 'JAKARTA', 'IV03', 'CHRISTOFFE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (31, 'PE0799', 'HEPJON PAKPAHAAN', 'juanda', 'ID', '', 'JAKARTA', 'IV03', 'PBJ NON SA', 'X', 'C100', 'PT. KCI-Kantor Pusat', 'ZG00', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (32, 'PE0800', 'HEPJON PAKPAHAN', 'JUANDA', 'ID', '', 'JAKARTA', 'IV03', 'PAKPAHAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (33, 'PE0803', 'MARA HASAN RITONGA', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'MARA', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (34, 'PE0804', '(PLT) ADLI HAKIM NASUTION', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'ADLI', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (35, 'PE0822', 'PYMT RACHMAD ZAINI', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'Jakarta Pusat', 'IV03', 'RACHMAD', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (36, 'PE0824', 'Yogi Dwianandono Rizkiadi', 'PT Kereta Commuter Indonesia', 'ID', '10120', 'Jakarta Pusat', 'IV03', 'YOGI', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (37, 'PE0828', 'TRISMAN', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'TRISMAN', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (38, 'PE0830', 'Septedi Alimudin', 'PT Kereta Commuter Indonesia', 'ID', '10120', 'Jakarta Pusat', 'IV03', 'SEPTEDI', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (39, 'PE0831', 'KEMAS ERWIN GAUTHAMA', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA PUSAT', 'IV03', 'KEMAS', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (40, 'PE0832', 'AHMAD SOFI', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA PUSAT', 'IV03', 'AHMAD', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (41, 'PE0834', 'BROER RIZAL', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA', 'IV03', 'BROER', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (42, 'PE0835', 'MOHAMAD BASYIR', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA', 'IV03', 'MOHAMAD', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (43, 'PE0836', 'MIFTAH FARIZD', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'Jakarta', 'IV03', 'MIFTAH', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (44, 'PE0837', 'GATUT SUTIYATMOKO', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'Jakarta', 'IV03', 'GATUT', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (45, 'PE0839', 'SARMAN NADEAK', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'Jakarta', 'IV03', 'SARMAN', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (46, 'PE0840', 'SARMAN NADEAK', 'JL. Ir. H JUANDA I', 'ID', '10120', 'JAKARTA PUSAT', 'IV03', 'SARMAN NAD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (47, 'PE0846', 'PYMT CTI ROPPIQ LUTZFI A.', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'Jakarta Pusat', 'IV03', 'ALBERTUS', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (48, 'PE0847', 'IRVAN BUDI IRAWAN', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'Jakarta Pusat', 'IV03', 'IRVAN', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (49, 'PE0848', 'ARJO PAMANTJAR', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'Jakarta Pusat', 'IV03', 'ARJO', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (50, 'PE0849', 'ERNI SYLVIANE PURBA', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA PUSAT', 'IV03', 'ERNI SYLVI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (51, 'PE0850', 'DIAH BREMANY SANJAYA', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA PUSAT', 'IV03', 'DIAH', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (52, 'PE0851', 'BUDI HERYANTO', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA', 'IV03', 'BUDI', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (53, 'PE0852', 'DICKY ARRIE KUSUMA', 'JAKARTA', 'ID', '10120', 'JAKARTA', 'IV03', 'DICKY', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (54, 'PE0854', 'RACHMAD ZAINI KURNIAWAN', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA', 'IV03', 'RACHMAD', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (55, 'PE0859', 'WIWIK WIDAYANTI (PYMT)', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA', 'IV03', 'WIWIK', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (56, 'PE0863', '(PYMT CTP) ROPPIQ LUTZFI A.', 'Jl Ir H Juanda IA', 'ID', '10120', 'JAKARTA', 'IV03', 'ROPPIQ', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (57, 'PE0865', 'YUDANTO ADHI CAHYONO', 'PT. Kereta Commuter Indonesia, Wil.', 'ID', '', 'SOLO', 'IV03', 'YUDANTO', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (58, 'PE0866', 'SIGIT TRIHARSO', 'PT. Kereta Commuter Indonesia, Wil.', 'ID', '', 'SOLO', 'IV03', 'SIGIT', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (59, 'PE0867', 'BAGUS WARTONO', 'PT. Kereta Commuter Indonesia, Wil.', 'ID', '', 'SOLO', 'IV03', 'BAGUS', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (60, 'PE0868', 'DEDY SETIAWAN', 'PT. Kereta Commuter Indonesia, Wil.', 'ID', '', 'SOLO', 'IV03', 'DEDY', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (61, 'PE0869', 'ADANG SUJANA', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA PUSAT', 'IV03', 'ADANG', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (62, 'PE0870', 'ARJO PAMANTJAR', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA PUSAT', 'IV03', 'ARJO', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (63, 'PE0871', 'BAMBANG HERMANTO', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA PUSAT', 'IV03', 'BAMBANG', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (64, 'PE0872', 'ANDI GUMILAR', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA PUSAT', 'IV03', 'ANDI', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (65, 'PE0873', 'SOEGITO', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA PUSAT', 'IV03', 'SOEGITO', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (66, 'PE0874', 'SITINDAON SATAR TUARA ONDRAT', 'l. 2 PT. Kereta Commuter Indonesia,', 'ID', '', 'Bandung', 'IV03', 'SITINDAON', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (67, 'PE0876', 'ADRIAN AHMAD', 'PT. Kereta Commuter Indonesia', 'ID', '', 'Jakarta', 'IV03', 'ADRIAN', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (68, 'PE0877', 'TEGUH TRIYONO', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA PUSAT', 'IV03', 'TEGUH TRIY', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (69, 'PE0878', 'SUBAGYO', 'PT KERETA COMMUTER INDONESIA', 'ID', '10120', 'JAKARTA PUSAT', 'IV03', 'SUBAGYO', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (70, 'PE0879', 'AGUS PRIATNA', 'Kantor Wilayah VIII', 'ID', '', 'Surabaya', 'IV03', 'AGUS PRIAT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (71, 'RK0116', 'DINAMIKA TRIMITRA SEJAHTERA, PT', 'BOTANIC Junction Blok H9 No7 RT7/1', 'ID', '', 'JAKARTA', 'IV01', 'DINAMIKA T', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (72, 'RK0120', 'DUMA MAJU NIAGA, PT.', 'Jl. Kayu Agung I No. C58 Lengkong', 'ID', '', 'Bandung', 'IV01', 'DUMA MAJU', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (73, 'RK0190', 'INKA  (PERSERO), PT', 'JL. LAKSAMANA YOS SUDARSO NO. 71 MA', 'ID', '', 'MADIUN', 'IV01', 'INKA  (PER', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (74, 'RK0221', 'KAWAN LAMA SEJAHTERA, PT', 'KOMP PERTOKOAN THD BLOK D3-4,JL.H.A', 'ID', '', 'SEMARANG', 'IV01', 'KAWAN LAMA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (75, 'RK0243', 'LAPI DIVUSI, PT', 'Jl. Kyai Gede Uama No. 12', 'ID', '40132', 'BANDUNG', 'IV01', 'LAPI DIVUS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (76, 'RK0260', 'MARKPLUS INDONESIA, PT', 'Lt. 8, Jl. Casablanca Kav. 88 Mente', 'ID', '', 'JAKARTA', 'IV01', 'MARKPLUS I', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (77, 'RK0267', 'MEGATEKNIK UTAMA, CV', 'Jl.CIKUTRA NO.205.BANDUNG', 'ID', '', 'BANDUNG', 'IV01', 'MEGA TEKNI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (78, 'RK0314', 'PINDAD (PERSERO), PT', 'JL. JEND. GATOT SUBROTO NO. 517', 'ID', '', 'BANDUNG', 'IV01', 'PINDAD (PE', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (79, 'RK0359', 'SAPARIO, CV', '40284 Jl. PSM (Pindan Utara) No. 38', 'ID', '', 'BANDUNG', 'IV01', 'SAPARIO, C', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (80, 'RK0364', 'SARANA SOLUSINDO INFORMATIKA, PT', '50 Jl. Panjang Kebon Jeruk', 'ID', '12120', 'Jakarta', 'IV01', 'SARANA SOL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (81, 'RK0376', 'SIMOCO INDONESIA, PT', 'Jl. Dr. Sahardjo No. 242', 'ID', '10121', 'JAKARTA', 'IV01', 'SIMOCO IND', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (82, 'RK0404', 'TEGUH FATTAH SUASNO INDAH HARA, PT', 'Jl.PANTAI INDAH SELATAN I NO.DB-6 J', 'ID', '', 'JAKARTA', 'IV01', 'TEGUH FATT', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (83, 'RK0450', 'ADITYA PUTRA, CV', 'JL. CIPINANG TENGAH NO.47 JAK', 'ID', '', 'JAKARTA', 'IV01', 'ADITYA PUT', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (84, 'RK0451', 'AETRA AIR JAKARTA, PT', 'JL. JEND. SUDIRMAN KAV. 4546 12930', 'ID', '', 'JAKARTA', 'IV01', 'AETRA AIR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (85, 'RK0467', '"ASTRA GRAPHIA, PT', 'JL. WASTUKENCANA NO. 25', 'ID', '', 'BANDUNG', 'IV01', '"ASTRA GRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (86, 'RK0476', 'BHAWATA NUSA SURYA PERDANA, PT', 'JL. PROF. Dr. SOEPOMO, SH NO. 55B', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'BHAWATA NU', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (87, 'RK0504', 'FORTA LARESE, PT', 'Jl.MUSI NO.16 CIDENG JAKARTA PUSAT', 'ID', '', 'JAKARTA', 'IV01', 'FORTA LARE', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (88, 'RK0515', 'HOSANA JAYA RAYA, PT', 'JL.CIBUBUR INDAH BLOK L. 2', 'ID', '', 'JAKARTA', 'IV01', 'HOSANA JAY', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (89, 'RK0525', 'JAYA MAKMUR INDONESIA, PT', 'JL. MOH. MANSYUR NO. 15 E1', 'ID', '', 'JAKARTA', 'IV01', 'JAYA MAKMU', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (90, 'RK0541', 'LIBRA JAYA, CV', 'JL. MINANGKABAU NO. 38 JAKARTA', 'ID', '', 'JAKARTA', 'IV01', 'LIBRA JAYA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (91, 'RK0557', 'MUARA PASOGIT REGAR, PT', 'JL. Kayu  Putih  Utara VI D No. 53A', 'ID', '', 'JAKARTA', 'IV01', 'MUARA PASO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (92, 'RK0570', 'PRAHASTA CITATAMA, PT', 'JL.SAYUTI NO.32 KP. MARGA MEKAR II', 'ID', '', 'BOGOR', 'IV01', 'PRAHASTA C', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (93, 'RK0576', 'PUSAKA NUSANTARA, PT.', 'Jl. Kinanti No. 14A Turangga, Lengk', 'ID', '', 'BANDUNG', 'IV01', 'PUSAKA NUS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (94, 'RK0578', 'PUTRATAMA SATYA BHAKTI, PT', 'Jl. Kemakmuran Raya No. 60 Margajay', 'ID', '', 'Bekasi', 'IV01', 'PUTRATAMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (95, 'RK0585', 'SALI LUBINDO INDONUSA, PT', 'JL.Raya  PKP No. 41. Ciracas Jakart', 'ID', '', 'JAKARTA', 'IV01', 'SALI LUBIN', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (96, 'RK0590', 'SENTOSA PUTRA PRATAMA, PT', 'JL. Manunggal Pratama No8 Kel Cipin', 'ID', '', 'JAKARTA', 'IV01', 'PT SENTOSA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (97, 'RK0598', 'TEKNIK ABADI, CV', 'JL. SODONG RAYA NO. 3A JAKARTA  TIM', 'ID', '', 'JAKARTA', 'IV01', 'TEKNIK ABA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (98, 'RK0761', 'BIMA PRATAMA, CV', 'JL. LANGGENG BIRU RAYA BI/19 BABAKA', 'ID', '', 'CIREBON', 'IV01', 'BIMA PRATA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (99, 'RK0780', 'DELAPAN SUMBER CEMERLANG, CV', 'JL. DAAN MOGOT KM. 21 KOMP. BATU CE', 'ID', '', 'TANGERANG', 'IV01', 'DELAPAN', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (100, 'RK08041', 'Kas Negara Pph 21', 'Jakarta', 'ID', '', 'Jakarta', 'IV01', 'KAS NEGARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z030', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (101, 'RK08042', 'Kas Negara Pph 4.2', 'Jakarta', 'ID', '', 'Jakarta', 'IV01', 'KAS NEGARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (102, 'RK08043', 'Kas Negara Pph 23', 'Jakarta', 'ID', '', 'Jakarta', 'IV01', 'KAS NEGARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (103, 'RK08044', 'Kas Negara Pph 22', 'Jakarta', 'ID', '', 'Jakarta', 'IV01', 'KAS NEGARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (104, 'RK08045', 'Kas Negara Pph 25', 'Jakarta', 'ID', '', 'Jakarta', 'IV01', 'KAS NEGARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (105, 'RK08046', 'Kas Negara Pph 29', 'Jakarta', 'ID', '', 'Jakarta', 'IV01', 'KAS NEGARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (106, 'RK08047', 'Kas Negara PPN', 'Jakarta', 'ID', '', 'Jakarta', 'IV01', 'KAS NEGARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (107, 'RK08049', 'Kas Negara PIB', 'Jakarta', 'ID', '', 'Jakarta', 'IV01', 'KAS NEGARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (108, 'RK0827', 'MITRA SEJAHTERA, CV', 'Jl. Tanjungsari Asri Barat I/1, Ant', 'ID', '40291', 'BANDUNG', 'IV01', 'MITRA SEJA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (109, 'RK0961', 'SENTINEL GARDA SEMESTA, PT', 'Rukan Exclusive Radin Inten, Kav 24', 'ID', '13440', 'Jakarta Timur', 'IV01', 'SENTINEL G', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (110, 'RK10000', 'PT. DAYASAKTI SUKSESMANDIRI', '43 Jl.Pangeran Jayakarta', 'ID', '10730', 'Jakarta', 'IV01', 'DS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (111, 'RK100002', 'PT. SARANA MULTI CORPORA', 'Jl. Tipar Tengah No. 16 C Mekarsari', 'ID', '16452', 'Depok', 'IV01', 'SMC', 'X', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', 'X', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (112, 'RK10001', 'PT Global Dinamika Informatika', '22 Jl. Kalibata Raya', 'ID', '11111', 'Jakarta', 'IV01', 'GDI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (113, 'RK10002', 'PT. SARANA MULTI CORPORA', 'Jl. Tipar Tengah No. 16 C Mekarsari', 'ID', '16452', 'Depok', 'IV01', 'SMC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (114, 'RK10003', 'PT. TRIINTI INTERNATIONAL', '19 Jl. Karya Barat', 'ID', '11111', 'Jakarta', 'IV01', 'TI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (115, 'RK10004', 'PT. RANCANG MEGAH SEJAHTERA', '21 Ruko Sentra Niaga', 'ID', '11111', 'Jakarta', 'IV01', 'RMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (116, 'RK10005', 'PT.SINERGI CITRA SELARAS', '118 M Jl. Raya Srengseng', 'ID', '11111', 'Jakarta', 'IV01', 'SCS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (117, 'RK10006', 'PT. ECOM MULTI SOLUTION', '3 Jl. Kemang Raya', 'ID', '11111', 'Jakarta', 'IV01', 'EMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (118, 'RK10007', 'Libra Jaya Sakti', 'SCBD Gedung One Pacific Place Level', 'ID', '12820', 'Jakarta', 'IV01', 'LIBRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (119, 'RK10008', 'CV. SURYA ABADI', 'JL. PARAKAN WAAS NO.14', 'ID', '', 'BANDUNG', 'IV01', 'SURYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (120, 'RK10009', 'PT.MITRASOFT INFONET', '8A-D Jl. Tanjung Selor', 'ID', '11111', 'Jakarta', 'IV01', 'MI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (121, 'RK10010', 'PT.TIRTARAYA MEDIATAMA INTERNET', '1-9 Jl. Suryopranoto', 'ID', '10160', 'Jakarta', 'IV01', 'TIT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (122, 'RK100100', 'PT. TUV SUD Indonesia', '51-52 Dipo Tower 9th floor suite C-', 'ID', '10260', 'Jakarta', 'IV01', 'TSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (123, 'RK100101', 'PT Cipta Esa Unggul', '295 Jl. Dewi Sartika Cawang', 'ID', '11111', 'Jakarta', 'IV01', 'CEU', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (124, 'RK10011', 'PT. PASIFIK CIPTA MANDIRI', 'M 8 Jl. Puri Kencana', 'ID', '11610', 'Jakarta', 'IV01', 'PCM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (125, 'RK10012', 'PT. ELANG CAKRA SECURINDO', '31 Jalan Adhyaksa Lebak Bulus Cilan', 'ID', '12440', 'Jakarta Selatan', 'IV01', 'ECS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (126, 'RK10013', 'PT. BIMA BANGUN SENTANA', '34 Bellezza Office Tower Lantai 16/', 'ID', '12210', 'Jakarta Selatan', 'IV01', 'BBS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (127, 'RK10014', 'PT. CENTRAL CIPTA SECURINDO', 'Jl Raya Hankam Ujung Aspal, Jati Ra', 'ID', '17432', 'Bekasi', 'IV01', 'CCS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (128, 'RK10015', 'PT.Trisinar Indopratama', '1 A jl. kebon jeruk raya', 'ID', '11530', 'Jakarta', 'IV01', 'TI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (129, 'RK10016', 'CV. TRIJAYA MANUNGGAL', 'JL. KAYU GEDE 1 NO. 10 RT003/004 KE', 'ID', '', 'TANGGERANG', 'IV01', 'TRIJAYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (130, 'RK10017', 'DAZ & REKAN', '34 Jl. Pasar Minggu', 'ID', '12780', 'Jakarta', 'IV01', 'D N R', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (131, 'RK10018', 'FEBRIMAN SIREGAR DAN REKAN', '36 Jl. Kebayoran Baru', 'ID', '12160', 'Jakarta Selatan', 'IV01', 'FSDR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (132, 'RK10019', 'KJJP PUNG''S ZULKARNAIN DAN REKAN', '12-14 Jl. Gondangdia Kecil', 'ID', '10350', 'Jakarta', 'IV01', 'KPZDR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (133, 'RK10020', 'KJPP Anas Karim Rivai & Rekan', 'Jl. Raya Kebayoran Lama No. 225 -', 'ID', '12220', 'Jakarta Selatan', 'IV01', 'KJPP ANAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (134, 'RK10021', 'PT. TOTAL CLOUD SOLUTIONS', '164 03/04 Gd. Menara Standard Chart', 'ID', '12930', 'Jakarta', 'IV01', 'TCS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (135, 'RK10022', 'PT. CAHAYA PRATAMA MEGAH', 'at.118 Jl. Gunumg Sahari III Jakart', 'ID', '', 'Jakarta', 'IV01', 'CPM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (136, 'RK10023', 'PT Daya Mega Cakrawala', 'Ruko Redwood B-17 Kota Delta Mas He', 'ID', '', 'Cikarang', 'IV01', 'DMC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (137, 'RK10024', 'PT. ENTITAS SYSTEM INDONESIA', 'No.26 Perkantoran Golden Centrum, J', 'ID', '10160', 'Jakarta', 'IV01', 'ESI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (138, 'RK10025', 'PT. INDONESIA MEGA FINILOG', 'Kav.94 Gedung SME Tower Lt 10 Jl.Ga', 'ID', '12780', 'Jakarta', 'IV01', 'IMF', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (139, 'RK10026', 'PT. HASTA BANGUN IMAJI', 'No.27 Ruko Permata Legenda Blok L D', 'ID', '', 'Bekasi', 'IV01', 'HBI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (140, 'RK10027', 'PT. HUTAMA MANGGALA PERSADA', 'No. 10 Komp. Mutiara Duta Blok B Su', 'ID', '', 'Depok', 'IV01', 'HMP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (141, 'RK10028', 'PT. KHARISMA MAKMUR JAYA', 'No. 5 Taman Kebon Jeruk Blok A.4 Jl', 'ID', '11650', 'Jakarta', 'IV01', 'KMJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (142, 'RK10029', 'PT. BANYU MILI MANDIRI', 'No. 39 Jl. Margonda Raya Ruko Salad', 'ID', '16431', 'Depok', 'IV01', 'BMM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (143, 'RK10030', 'PT. SABDA LAKSANA AMERTA', 'No.9 Jl.Bukti RT013/001 Kel.Makasar', 'ID', '13570', 'Jakarta', 'IV01', 'SLA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (144, 'RK10031', 'PT. KIMIA FARMA DIAGNOSTIKA', 'No.1 Jl. Budi Utomo Jakarta Pusat', 'ID', '10710', 'Jakarta', 'IV01', 'KFD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (145, 'RK10032', 'PT. JAYA MARTA SENTOSA', 'No. 52 Jl Raden inten II Rt/Rw 09/0', 'ID', '', 'Jakarta', 'IV01', 'JMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (146, 'RK10033', 'PT. DINAMIKA PUBLIK INDONESIA', 'No.121 Cityloft Sudirman 8th Floor', 'ID', '', 'Jakarta', 'IV01', 'DPI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (147, 'RK10034', 'LIRA RAJA UTAMA, CV.', 'GD GRAHA SARTIKA Lt3 JL Dewi Sartik', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'LRU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (148, 'RK10035', 'PT. GRANADA INDO SPEKTA', 'No.88 Ruko Grand Palm Puri Blok G3', 'ID', '', 'Jakarta', 'IV01', 'GIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (149, 'RK10036', 'PT. INRELT', 'JL. FUTSAL II NO. D1 RT.07/13 KEL.S', 'ID', '40293', 'Bandung', 'IV01', 'INRELT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (150, 'RK10037', 'CV. SURYA TIMUR', 'No.51 Pada suka Cicahem', 'ID', '', 'Bandung', 'IV01', 'ST', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (151, 'RK10038', 'CV WIRA UTAMA', 'No.D1 Jl. Futsal II RT.07/13 Kel.Su', 'ID', '40293', 'Bandung', 'IV01', 'WU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (152, 'RK10039', 'PT. SOZO SUCCESS MEDICAL', 'Menara Imoerium Lt.22 Suite C Jl.HR', 'ID', '12980', 'Jakarta', 'IV01', 'SSM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (153, 'RK10040', 'PT. PELANGI BARA MULIA', 'No.46 Jl. Pacuan Kuda Arcamanik', 'ID', '', 'Bandung', 'IV01', 'PBM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (154, 'RK10041', 'PT. BUDHI BAHTERA DINAMIKA', 'No.46 Jalan Pacuan Kuda Arcamanik', 'ID', '', 'Bandung', 'IV01', 'BBD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (155, 'RK10042', 'PT. ASURANSI CENTRAL ASIA', 'No. 60D-E Jl.CIkini Raya Jakarta Pu', 'ID', '10330', 'Jakarta', 'IV01', 'ACA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (156, 'RK10043', 'PT PILLAR UTAMA INTERNATIONAL', 'No. 23 Jl. Kayu Putih Raya kel.Kayu', 'ID', '', 'Jakarta', 'IV01', 'PUI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (157, 'RK10044', 'PT NAGAYASHA RAHARDJA', 'No.73 Grand Supomo Kav.G Lt3 Jl.Dr.', 'ID', '', 'Jakarta', 'IV01', 'NR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (158, 'RK10045', 'PT TERRA TEKNO SOLUSI', 'No.101 Kindo Square Blok C2 Jl Raya', 'ID', '', 'Jakarta', 'IV01', 'TTS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (159, 'RK10046', 'PT. FAJAR BERKAT INDOJAYA', 'No.18 Jl.Raya Kebayoran Lama Kel.Su', 'ID', '', 'Jakarta', 'IV01', 'FBI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (160, 'RK10047', 'PT. TEKNOKRAT MITRA DATA', 'Lt. 2 Mediterania Garden Residence', 'ID', '', 'Jakarta', 'IV01', 'TMD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (161, 'RK10048', 'PT. GATEWAY INTERNUSA', 'No. 1 Ruko Sutera Renata Blok 3B Al', 'ID', '', 'Banten', 'IV01', 'GI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (162, 'RK10049', 'PT. GALIH CIPTA SEJAHTERA', 'No.42 Jl.Gunung Sahari I Senen Jaka', 'ID', '', 'Jakarta', 'IV01', 'GCS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (163, 'RK10050', 'CV. PUTRA PRIMA', 'No.26 Jl. Akses UI Gedung Golden St', 'ID', '', 'Depok', 'IV01', 'PP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (164, 'RK10051', 'PT. PUJI LESTARI PURNAMA', 'AA 11/25 Jl. Festival Boelevard Gra', 'ID', '', 'Kab. Bekasi', 'IV01', 'PLP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (165, 'RK10067', 'CV. MAJUNDO KARYA SEJAHTERA', 'R.312 Gd. Graha Sartika Lt.3 Jl Dew', 'ID', '13630', 'Jakarta', 'IV01', 'MKS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (166, 'RK10071', 'PT LEVERATE SERVICES INDONESIA', 'Kav 28-30 The Plaza Office Tower Lv', 'ID', '', 'Jakarta', 'IV01', 'LSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (167, 'RK10078', 'CV. ANINDYATRANS', 'Kp.Pabuaran RT.05/10 Jatimurni Pond', 'ID', '17431', 'Bekasi', 'IV01', 'ANINDYATRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (168, 'RK10083', 'PT. INDOTEK ENGINEERING JAYA', 'Jl. Tebet Raya No.17 Jakarta Selata', 'ID', '12810', 'Jakarta', 'IV01', 'IEJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (169, 'RK10092', 'RADITHYA KARYA MANDIRI, PT', 'Jl. Kramat Jaya Gg7 Blok F No1 Rt14', 'ID', '', 'Jakarta Utara', 'IV01', 'RADITHYA K', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (170, 'RK10095', 'PT. MARATAMA CIPTA MANDIRI', 'No. 26-28 Jl. Tulip Raya surapati C', 'ID', '', 'Bandung', 'IV01', 'MCM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (171, 'RK10096', 'CV Multi Persada', '1 Villa Pasir Mas Blok', 'ID', '16119', 'Bogor', 'IV01', 'MP', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (172, 'RK10099', 'PT Hini Daiki', 'Jl. Raya Ciawi Kp. Kebon Bencoy', 'ID', '46153', 'Tasik Malaya', 'IV01', 'HD', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (173, 'RK10100', 'PT. OFFICE AND SECURITY SOLUTION', 'Blok 3l Jl. Rajawali Selatan Komp.', 'ID', '14410', 'Jakarta', 'IV01', 'OSS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (174, 'RK10101', 'PT. TASBLOCK INDUSTRY INDONESIA', 'Kav-1 Rukan Mitra Bahari 2 Blok F J', 'ID', '', 'Jakarta', 'IV01', 'TII', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (175, 'RK10102', 'PT. KENCANA SARANA SOLUSINDO', 'No.1-9 Jl Suryopranoto Wisma Cormic', 'ID', '10150', 'Jakarta', 'IV01', 'KSS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (176, 'RK10103', 'PT. NET SISTEM INFOTAMA', 'Lt.15 Graha Surveyor Indonesia Jl J', 'ID', '12950', 'Jakarta', 'IV01', 'NSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (177, 'RK10111', 'SARI SARANA KIMIATAMA, PT', 'Wisma SSK Jl Daan Mogot 11 Rt.4/4 K', 'ID', '', 'Jakarta', 'IV01', 'SSK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (178, 'RK10112', 'PT. GLOBAL MAKARYA SEJAHTERA', 'No. 27 Jl Palem Bukit Indah Surabay', 'ID', '', 'Surabaya', 'IV01', 'GMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (179, 'RK10113', 'PT. ALPHA LINE INTERNATIONAL', 'BlokF10/27 Ruko Gading Kirana Utara', 'ID', '14240', 'Jakarta', 'IV01', 'ALI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (180, 'RK10115', 'KHALIFA INTERNATIONAL BUSINESS, PT', 'Jl. Basuki Rahmat No.25', 'ID', '13350', 'Jakarta Tmur', 'IV01', 'KHALIFA IN', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (181, 'RK10123', 'CV. CHARLES MARPA PRIMA', 'No.14 Jl Gusti Ngurah Rai RT.08/06', 'ID', '', 'Jakarta', 'IV01', 'CMP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (182, 'RK10133', 'PT. KHIND ENVIRONMENTAL SOLUTIONS', 'Blok B1-6 Jl Boulevard Kelapa Gadin', 'ID', '', 'Jakarta', 'IV01', 'KES', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (183, 'RK10138', 'PT Lifestyle On Display', 'Lt.31 Menara BTPN CBD Mega Kuningan', 'ID', '', 'Jakarta', 'IV01', 'LOD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (184, 'RK10150', 'PT Duta Pratama Makmur Sejahtera', 'No.2 Jl. Raya Perjuangan Kebon Jeru', 'ID', '11530', 'Jakarta', 'IV01', 'DPMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (185, 'RK10151', 'CV. YUFAIS JAYA MANDIRI', 'AB/11 Jl. Menteng PJMI RT12/07 Jura', 'ID', '', 'Tanggerang Selatan', 'IV01', 'YJM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (186, 'RK10166', 'PT. TRI PUTRA REVITAMA MANDIRI', 'Lt.5A Sona Topas Tower Jl Jenderal', 'ID', '', 'Jakarta', 'IV01', 'TPRM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (187, 'RK10173', 'CV. PRABU HOLIDAY', 'JL. Terusan Kopo Sayati Belakang No', 'ID', '40226', 'JAWA BARAT', 'IV01', 'PRABU', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (188, 'RK10176', 'PT. SATU MEDIA KREASI', 'Jl. Tomang Raya No. 5D Jakarta', 'ID', '', 'Jakarta', 'IV01', 'SMK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (189, 'RK10177', 'PT. ANDALAS MEDIA INFORMATIKA', 'No.8 Gedung Cyber 1 Lt 3A Jl Kuning', 'ID', '', 'Jakarta', 'IV01', 'AMI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (190, 'RK10178', 'PUSDIKHUB KODIKLATAD', 'Jalan Gatot Subroto No.5 Cimahi', 'ID', '', 'Cimahi', 'IV01', 'PUSDIKHUB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (191, 'RK10214', 'PT. NUSANTARA SURYA SAKTI', 'No.5 JL.Bigjen Katamso RT/RW 04/08', 'ID', '11420', 'Jakarta', 'IV01', 'NSS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (192, 'RK10219', 'CV. Anugrah Berkah Mandiri Print', 'No. 22 Jl. Al Islamiyah Kebon Jeruk', 'ID', '', 'Jakarta', 'IV01', 'ABMP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (193, 'RK10228', 'NOTARIS & PPAT JULISETYANTI  EWOWAT', 'No. 15 Jl. Proklamasi Ruko Blok A', 'ID', '', 'Depok', 'IV01', 'NOTARIS &', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (194, 'RK10229', 'PT. CAHAYA BERKAT SEMPURNA', 'No. 44 Jl. Dr. Muwardi I Grogol, Ja', 'ID', '', 'Jakarta', 'IV01', 'CGS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (195, 'RK10251', 'PT. TECHNOLAND ARYA UTAMA', 'Perkantoran Tomang Tol Raya A-1/50', 'ID', '', 'Jakarta', 'IV01', 'TAU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (196, 'RK10252', 'PT. TUNAS BOLA', 'no.33-37 Jl. Palmerah Barat Lt 4-5', 'ID', '10270', 'Jakarta', 'IV01', 'TB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (197, 'RK10253', 'CV. ARYAMALIA CERIA MANDIRI', 'Ruko Griya Aviva R.8 Pondok Ranji T', 'ID', '', 'Tangerang Selatan', 'IV01', 'ACM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (198, 'RK10257', 'PT. RAMDAYS CENDANI PRIMA', 'No.11 Gedung Nastiti Jl. Supriyadi', 'ID', '', 'Jakarta', 'IV01', 'RCP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (199, 'RK10258', 'PT. VIAEIGHT INDONESIA', 'Gedung Cosa Lt.3 Jl Tomang Raya 70', 'ID', '', 'Jakarta', 'IV01', 'VIAINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (200, 'RK10261', 'PT. ARMADIAN PERKASA', 'Ruko Rajawali center Blok B 11 Jl R', 'ID', '', 'Jakarta', 'IV01', 'ARMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (201, 'RK10262', 'PT. TIARA RIFKI FIRANTI', 'No.11 Ruko Rajawali center blok B R', 'ID', '', 'Jakarta', 'IV01', 'TRF', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (202, 'RK10263', 'PT. LOTUS AMRETA PERKASA', 'No.3a Jl Raya Serpong Rukan Tumarit', 'ID', '', 'Tangerang Selatan', 'IV01', 'LAP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (203, 'RK10275', 'Toko Singapore / Tatang Halim', 'Jl. Pinangsia Raya 78 Jakarta', 'ID', '', 'Jakarta', 'IV01', 'TOKO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (204, 'RK10276', 'PT. SAUDARA SABANDA SARIKSA', 'Lt.5 Gd Epicentrum Walk Jl. HR. Ras', 'ID', '', 'Jakarta', 'IV01', 'SSS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (205, 'RK10278', 'CV Mustika Alam', '26 Jl. Kadipaten VII', 'ID', '11111', 'Bandung', 'IV01', 'MA', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (206, 'RK10279', 'Kas Negara PNBP', 'No.1 Gedung Sutikno Slamet, Jalan D', 'ID', '', 'Jakarta', 'IV01', 'PNBP', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (207, 'RK10280', 'KOKO CATERING', '181 K Jl.Manggarai Selatan II', 'ID', '12850', 'Jakarta Selatan', 'IV01', 'KC', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (208, 'RK10282', 'PT. MULTI INDO MANDIRI', 'Jl. Tipar Cakung Kav. F5-7 Cakung B', 'ID', '', 'Jakarta', 'IV01', 'MIM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (209, 'RK10284', 'PT. INDO BINTANG MANDIRI', 'No.8B-5 Jl. Soka Blok F Delta Silic', 'ID', '', 'Bekasi', 'IV01', 'IBM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (210, 'RK10291', 'CV. ANDRE PERMATA CEMERLANG', 'No.357 Gd. Graha Santika Lt.3 R312', 'ID', '13630', 'Jakarta', 'IV01', 'APC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (211, 'RK10298', 'PT. OTANI PREMIUM PAPER INDUSTRY', 'No.6A Jl. Industri Raya I Blok A4/A', 'ID', '15136', 'Tangerang', 'IV01', 'OPPI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (212, 'RK10306', 'PT. ASURANSI BRI LIFE', 'Blok X-1 Graha Irama, Jl. H.R. Rasu', 'ID', '12950', 'Jakarta', 'IV01', 'ABL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (213, 'RK10318', 'ABNR', 'Kav. 58 Graha CIMB Niaga Lt24 Jend', 'ID', '12190', 'Jakarta', 'IV01', 'ABNR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (214, 'RK10320', 'PT. IDRIS SUKSES', 'x Jl. H. M. Alif', 'ID', '16425', 'Jakarta', 'IV01', 'IS', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (215, 'RK10321', 'PT. VIRGOZ HUTAMA INDONESIA', '390 Jl. Otto Iskandardinata', 'ID', '13330', 'Jakarta', 'IV01', 'VHI', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (216, 'RK10329', 'PT. JAYA POWER MAKMUR', 'Komplek Galeri Niaga Mediterania 2', 'ID', '14460', 'Jakarta', 'IV01', 'JPM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (217, 'RK10330', 'PT. TARGET MEDIA INDONESIA', 'Lt 17 Menara Sudirman, Jl. Jend. Su', 'ID', '', 'Jakarta', 'IV01', 'TMI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (218, 'RK10335', 'P2M Departemen Teknik Mesin FTUI', 'Jl Salemba Raya 4 Kel Kenari Kec Se', 'ID', '', 'JAKARTA PUSAT', 'IV01', 'P2M DEPART', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (219, 'RK10340', 'FARLAN CIPTA MANDIRI, CV', 'Jalan Garuda No.29 C Lt.3 RT 009 RW', 'ID', '', 'Jakarta Pusat', 'IV01', 'FARLAN CIP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (220, 'RK10342', 'PT. KELAPA MEDIA INDONESIA', 'Lt.4 Ruko Galeri Niaga Mediterania', 'ID', '', 'Jakarta', 'IV01', 'KMI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (221, 'RK10343', 'PT. BINTANG KARYA PARIWARA', 'Blok IX Jl. Perintis Kemerdekaan Ko', 'ID', '', 'Jakarta', 'IV01', 'BKP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (222, 'RK10347', 'PERUM PERCETAKAN NEGARA RI', 'Jalan Percetakan Negara No. 21, Joh', 'ID', '', 'Jakarta Pusat', 'IV01', 'PNRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (223, 'RK10356', 'PT. RAMADATU UTAMA', 'Ruang 35 Gedung STC Senayan,Lt.2 Jl', 'ID', '', 'Jakarta', 'IV01', 'RU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (224, 'RK10369', 'THE LUXTON HOTEL', 'JL. IR. H. JUANDA NO. 18', 'ID', '40115', 'BANDUNG', 'IV01', 'THE LUXTON', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (225, 'RK10375', 'PT. PLATINUM NETWORK INDONESIA', 'No.88i Jl. Wolter Monginsidi Kel. P', 'ID', '12170', 'Jakarta', 'IV01', 'PNI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (226, 'RK10391', 'PT. ALTERNATIVE DIGITAL MEDIA GROUP', 'Kav.73 Gedung The Capitol Lt.1 Jl.', 'ID', '', 'Jakarta', 'IV01', 'ADMG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (227, 'RK10405', 'INOVASI INFORMATIKA INDONESIA, PT', 'Graha BIP Lt.7 Jl Jend Gatot Subrot', 'ID', '12930', 'Jakarta', 'IV01', 'INOVASI IN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (228, 'RK10456', 'KENCANA JAYASAKTI, PT', 'Jl Bambu Kuning Selatan No 109 Kp S', 'ID', '', 'Bekasi', 'IV01', 'KENCANA JA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (229, 'RK10459', 'PT. CITRA MANDIRI NEGARA', 'No. 17A Jl. Kebon Kosong Raya, Kebo', 'ID', '', 'Jakarta', 'IV01', 'CMN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (230, 'RK10471', 'PT. MITRA SOLUSI INFOKOM', 'Lt.41 Grand Slipi Tower Jl. S. Parm', 'ID', '11480', 'Jakarta', 'IV01', 'MSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (231, 'RK10472', 'PT. BRITZ INDONESIA', 'No.2 Jl. Dr Ide Anak Agung Gunung G', 'ID', '', 'Jakarta', 'IV01', 'BI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (232, 'RK10476', 'CV. ADHI CREATIVE', 'No.26 Gedung Golden Stick Blok C Ka', 'ID', '', 'Depok', 'IV01', 'ADHI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (233, 'RK10477', 'PT. INDOTEKNIK DOTCOM GEMILANG', 'No. 48 Maisonette Regency Kebon Jer', 'ID', '', 'Jakarta', 'IV01', 'IDG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (234, 'RK10478', 'PT. SENTRA KOMPUTER ABADI', 'The Manhattan Square Mid Tower Lt.', 'ID', '', 'Jakarta', 'IV01', 'SKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (235, 'RK10485', 'PT.TESTINDO', 'No.61B Jl. Raden Inten II Rt 006 Rw', 'ID', '', 'Jakarta', 'IV01', 'TESTINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (236, 'RK10495', 'PT. ALVARIS CIPTA MANDIRI', 'No.1 Jl. Raya Pondok Duta Blok AA I', 'ID', '16418', 'Depok', 'IV01', 'ACM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (237, 'RK10497', 'PT. PRATITA PRANA CITRA', 'Jl. Tegal Rotan No. 28 Tangerang Se', 'ID', '', 'Tangerang Selatan', 'IV01', 'PPC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (238, 'RK10517', 'PT. IDI KAJANG CONSULTANS', 'Lt.1 Office Tower Graha Simatupang,', 'ID', '', 'Jakarta', 'IV01', 'IKC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (239, 'RK10518', 'PT. BANGUNINDO TEKNUSA JAYA', 'Blok BR1/6 Ruko Galaxy Residence Jl', 'ID', '', 'Bekasi', 'IV01', 'BTJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (240, 'RK10519', 'PT. MULTIMEDIA SOLUSI PRIMA', 'No.7 Jl. Tubagus Ismail XVI, Bandun', 'ID', '40134', 'Bandung', 'IV01', 'MSP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (241, 'RK10520', 'PT. KRIDALARAS KONSULINDO', 'No.3 JL. Jati Padang V Pasar Minggu', 'ID', '12540', 'Jakarta', 'IV01', 'KK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (242, 'RK10521', 'PT. TUKANG BERSIH INDONESIA', 'Lt.36 Gd Grand Slipi Tower Jl Latje', 'ID', '', 'Jakarta', 'IV01', 'TBI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (243, 'RK10522', 'PT. NORLEC TELEKOMUNIKASI INDONESIA', 'No.4 Jl. Ciputat Raya Kel Kebayoran', 'ID', '', 'Jakarta', 'IV01', 'NTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (244, 'RK10530', 'PT. DIGITAL INISIATIF', 'No. 8A Jl. Panjang', 'ID', '', 'Jakarta', 'IV01', 'DI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (245, 'RK10531', 'PT. MEDIATAMA CIPTA CAKRAWALA', 'No.6 Jl. Warung Buncit Raya', 'ID', '', 'Jakarta', 'IV01', 'MCC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (246, 'RK10547', 'PT. PORTAL ANUGERAH SEJAHTERA', '1 Jl. Raya pasar Minggu Km 18.', 'ID', '11111', 'Jakarta', 'IV01', 'PAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (247, 'RK10548', 'PT. PERTANI SEJAHTERA', '1  Jl. Raya Pasar Minggu', 'ID', '11111', 'Jakarta', 'IV01', 'PS', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (248, 'RK10549', 'PT INDOTARA PERSADA', 'Jl. Millennium 22 Blok R3 No. 01 Ka', 'ID', '', 'TANGGERANG', 'IV01', 'INDOTARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (249, 'RK10550', 'PT. BINA SENTRA SARANA', '12 18 Office Park Floor', 'ID', '11111', 'Jakarta', 'IV01', 'BSS', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (250, 'RK10555', 'ARTHA SOERAYASA, CV.', 'Jl. Perum ITS Blok T-91', 'ID', '60111', 'Surabaya', 'IV01', 'AS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (251, 'RK10561', 'AZKA TEKNIK, CV.', 'Babakan Tarikolot RT.08/08 Kel Nang', 'ID', '', 'Bogor', 'IV01', 'AT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (252, 'RK10565', 'COLUMBINDO CITRA INDAH, PT', 'No.81 Komplek THR Lokasari Blok C-1', 'ID', '', 'Jakarta', 'IV01', 'CCI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (253, 'RK10572', 'BALAI PUSTAKA (PERSERO), PT', 'JL. BUNGA NO. 8-8A RT 004 RW 009, M', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'BP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (254, 'RK10574', 'KUNDALINI SAKTISEJATI, PT', 'No.2F Central Green Ville Jl Tanjun', 'ID', '11510', 'Jakarta', 'IV01', 'KS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (255, 'RK10576', 'PT. JAYA TEKNIK INDONESIA', 'Jl. Johar 10, jakarta', 'ID', '', 'Jakarta', 'IV01', 'JTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (256, 'RK10578', 'CYBER NETWORK INDONESIA, PT', 'No.8 Gedung Cyber Lt 9 Jl Kuningan', 'ID', '12710', 'Jakarta', 'IV01', 'CNI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (257, 'RK10588', 'ISENTIA JAKARTA, PT', 'Jl. Gajah Mada no. 19-26 Jakarta', 'ID', '10130', 'Jakarta', 'IV01', 'IS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (258, 'RK10597', 'MUTIARA REZEKIFRIMA, PT.', 'Jl. Tanjung V Blok O-III No 24 Tama', 'ID', '', 'Bogor', 'IV01', 'MR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (259, 'RK10611', 'SARANA KARYA SEJATI, CV', 'Puri Sentra Niaga Blok A-4, Cipinan', 'ID', '13620', 'Jakarta', 'IV01', 'CKS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (260, 'RK10615', 'BALI TOWERINDO SENTRA Tbk, PT', 'Wisma KEIAI Lt. 22 Jl. Jend. Sudirm', 'ID', '10220', 'Jakarta', 'IV01', 'BTS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (261, 'RK10623', 'ASMARAYA CIPTA ANUGRAH, PT', 'Mahogany Residen Blok E30 Jl. Alter', 'ID', '16954', 'Depok', 'IV01', 'ACN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (262, 'RK10626', 'SISARTI BAKSYA ASASTA, PT', 'No.26 Jl. Ekologi RT.01 RW.07 Kel.', 'ID', '40191', 'Bandung', 'IV01', 'SBA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (263, 'RK10630', 'PT. SAM INDONESIA', '52-53 JL. JEND. SUDIRMAN', 'ID', '12190', 'Jakarta Selatan', 'IV01', 'SI', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (264, 'RK10631', 'ENERGI TRANSMEDIA, PT', 'No.36B Jl.Raya Pasar Kecapi Kel.Jat', 'ID', '17414', 'Bekasi', 'IV01', 'ET', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (265, 'RK10635', 'Ametis Institut, PT', 'Tetra Park Building Ground Floor Ka', 'ID', '', 'Jakarta Selatan', 'IV01', 'AMETIS INS', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (266, 'RK10637', 'ANUGRAH MITRA TEKNOLOGI, PT', 'Jl. Grand Galaxi City, RRG 5 No.102', 'ID', '', 'Bekasi', 'IV01', 'AMT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (267, 'RK10638', 'OPTIMA TREN TELEMATIKA, PT', 'Jl. Raya Kecapi No.22A Pondok Gede', 'ID', '', 'Jakarta', 'IV01', 'OTT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (268, 'RK10641', 'ORION CYBER INTERNET, PT', 'Cyber Building Lt.1 Jl. Kuningan Ba', 'ID', '12710', 'Jakarta', 'IV01', 'OCI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (269, 'RK10642', 'IFORTE GLOBAL INTERNET, PT', 'Menara BCA Lt.41 Grand Indonesia Sh', 'ID', '', 'Jakarta', 'IV01', 'IGI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (270, 'RK10644', 'ANUGRAH MAHA TUNGGAL, PT', 'Ruko Enggano Blok B5/Lt.3 Jl. Engga', 'ID', '', 'Jakarta', 'IV01', 'AMT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (271, 'RK10645', 'MEGA KONTRUKSI PERKASA, PT', 'Jl. Narogong KM 16,5 No.88 Limusnun', 'ID', '16820', 'Jakarta', 'IV01', 'MKP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (272, 'RK10659', 'HAFRI MULTI MANDIRI, PT', 'Jl Raya Bekasi KM18 Pulogadung RT01', 'ID', '13920', 'Jakarta', 'IV01', 'HMM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (273, 'RK10668', 'NEVIIM MAGEN TEKNOLOGI, PT', 'Rukan Great Wall Blok A17-19, Jl Bo', 'ID', '', 'Tangerang', 'IV01', 'NMT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (274, 'RK10672', 'TRI DAYA MAKMUR, PT', 'Jl Industri III Komplek Facto Blok', 'ID', '', 'Tangerang', 'IV01', 'TDM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (275, 'RK10673', 'TENNO OPTIMA PERSADA, PT', 'Jl Salemba Raya, Pasar Kenari Lama', 'ID', '10430', 'Jakarta', 'IV01', 'TOP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (276, 'RK10678', 'KARYA PUTRA PRIMATAMA, PT.', 'Jl. H.M. Ashari No. 13 Cibinong', 'ID', '', 'kab. Bogor', 'IV01', 'KPP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (277, 'RK10688', 'TRIVALI UTAMA INDONESIA, PT', 'Grand Slipi Tower lt42 Unit G-H Jl', 'ID', '', 'Jakarta', 'IV01', 'TUI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (278, 'RK10696', 'KOMUNIKA MANDIRI TOGA, PT', 'Jl. Kemanggisan Raya Blok 0 No.101,', 'ID', '', 'Jakarta', 'IV01', 'KMT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (279, 'RK10697', 'MAXIMA CIPTA MILIIARDARTHA, PT', 'Jl Pahlawan Seribu 1A-2B RT09 RW04', 'ID', '15321', 'Tangerang Selatan', 'IV01', 'MCM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (280, 'RK10699', 'YAOF TRUS LANCAR, PT', 'Gedung Yarnati Lt.3 Ruang 306 Jl, P', 'ID', '', 'JAKARTA', 'IV01', 'YAOF TRUS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (281, 'RK10700', 'BANGUN TRANS PUSAKA, PT', 'JL Sultan Tirtayasa No4 Rt04 Rw03 K', 'ID', '', 'Bandung', 'IV01', 'BTP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (282, 'RK10701', 'KARYA SHINTA MANARITO, PT', 'NoA4 Komplek The Beige Cilangkap Jl', 'ID', '13870', 'Jakarta', 'IV01', 'KSM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (283, 'RK10702', 'SARANA KARYA MEDIKA, PT', 'No.15 Ubud Village Blok KintamaniC1', 'ID', '15151', 'Tangerang', 'IV01', 'SKM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (284, 'RK10704', 'AMARIS HOTEL JUANDA', 'JL. IR H. JUANDA NO. 3 RT14 RW4', 'ID', '10120', 'JAKARTA PUSAT', 'IV01', 'AMARIS HOT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (285, 'RK10709', 'METRO KARYA INDOTAMA, PT', 'No80 Rukan Exclusive Raden Inten Ka', 'ID', '', 'Jakarta', 'IV01', 'MKI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (286, 'RK10715', 'BERCA HARDAYAPERKASA, PT', 'Jl Abdul Muis No62 Kel Petojo Selat', 'ID', '', 'Jakarta', 'IV01', 'BH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (287, 'RK10716', 'MITRA INFOTECH PRIMA, PT', 'No 12A Wisma Bisnis Indonesia Lt2 Z', 'ID', '', 'Jakarta', 'IV01', 'MIP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (288, 'RK10717', 'GLOBAL INTEGRASI TELEMATIKA, PT', 'Jl Tanah Abang III No14 Kel Petojo', 'ID', '', 'Jakarta', 'IV01', 'GIT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (289, 'RK10718', 'ASAFA MULYA, CV', 'No7 Rukan Tomal Tol Raya Jl Agave R', 'ID', '', 'Jakarta', 'IV01', 'AM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (290, 'RK10719', 'PRODATA SISTEM TEKNOLOGI, PT', 'Gd Grand Slipi Tower Lt16 Jl Letjen', 'ID', '11480', 'Jakarta', 'IV01', 'PST', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (291, 'RK10722', 'EPIC VISI INTERNATIONAL, PT', 'Ruko Cibubur Indah BlokA/28 Jl Lapa', 'ID', '', 'Jakarta', 'IV01', 'EVI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (292, 'RK10730', 'HERSHEL MANDIRI UTAMA, PT', 'Jl. Ir.H. Juanda No. 253, Bekasi Ti', 'ID', '', 'Bekasi', 'IV01', 'HMU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (293, 'RK10735', 'FIRMUSINDO INFOTAMA, PT', 'Gd Thamrin City Lt3A Blok A11 No5 J', 'ID', '10230', 'Jakarta', 'IV01', 'FI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (294, 'RK10743', 'Sentral Tehnologi Managemen, PT', 'MT Haryono Square Lt.3A No.2 Jl. MT', 'ID', '13330', 'JAKARTA TIMUR', 'IV01', 'SENTRAL TE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (295, 'RK10748', 'PETRA HAGANTA, CV', 'Jl Swadaya 8 No 29 RT06/12 Kp Jembl', 'ID', '', 'Depok', 'IV01', 'PH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (296, 'RK10749', 'INDOTRADE JAYA MANDIRI, PT', 'Gd Graha 96 Jl Dr Saharjo No96 BCD', 'ID', '12960', 'Jakarta', 'IV01', 'IJM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (297, 'RK10757', 'NANO, CV', 'RAWAGENI 01/01 KEL RATU JAYA KEC CI', 'ID', '', 'DEPOK', 'IV01', 'NANO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (298, 'RK10761', 'ESTITINA TEKNASINDO, PT', 'Jl Sentosa Raya No7A Kel Mekarjaya', 'ID', '', 'Depok', 'IV01', 'ET', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (299, 'RK10763', 'MAV ARRIZKI, CV', 'Jl Palem Putri III No30 Taman Yasmi', 'ID', '16113', 'Bogor', 'IV01', 'MAV', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (300, 'RK10770', 'NITOSABA JAYA KONSULTAN, PT.', 'No.26 JL Tulip Raya Komplek Surapat', 'ID', '', 'Bandung', 'IV01', 'NJK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (301, 'RK10797', 'ELITE PROXY SISTEM, PT.', 'Blok A/15 Rukan Sudirman Park Apart', 'ID', '10220', 'Jakarta', 'IV01', 'EPS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (302, 'RK10798', 'HAMPARAN KARYA KREASI INDONESIA, CV', 'Ruko City Garden Boulevard Blok C3', 'ID', '', 'Jakarta', 'IV01', 'HKKI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (303, 'RK10799', 'BERKAH MITRA SAIYO, PT.', 'Jl Letjen Suprapto No.55C RT.015 RW', 'ID', '', 'Jakarta', 'IV01', 'BMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (304, 'RK10800', 'AMOROJO PUTRA PEWARIS, PT', 'Jl Kana Mas I Blok G4 No3 Villa Pam', 'ID', '', 'Tangerang Selatan', 'IV01', 'APP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (305, 'RK10801', 'WIDEBAND MEDIA INDONESIA, PT', 'Jl Jakarta No.25A Bandung', 'ID', '40272', 'Bandung', 'IV01', 'WMI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (306, 'RK10802', 'KRISANDO SAUTADA, PT', 'Jl Pondasi No.27C, Kayu Putih, Pulo', 'ID', '', 'Jakarta', 'IV01', 'KS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (307, 'RK10804', 'ARKANANTA PRADIPA, PT', 'Jl Pakis Raya No88M Lt2 RT09/06 Kel', 'ID', '', 'Jakarta', 'IV01', 'AP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (308, 'RK10807', 'SKILL NUSA INFOTAMA, PT', 'Jl Gajah No21 Buah Batu Bandung', 'ID', '', 'Bandung', 'IV01', 'SNI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (309, 'RK10809', 'CV. MULTI KARYA INDONESIA', '3A Jl. Asirot', 'ID', '11560', 'Sukabumi Selatan', 'IV01', 'MTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (310, 'RK10810', 'CV SANJAYA TEKNIK', 'Perumahan Griya Waringin Blok D12 N', 'ID', '', 'bogor', 'IV01', 'SANJAYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (311, 'RK10811', 'PT MULTI CIPTA PERDANA', '127 Lindeteves Trade Center Lt. UG', 'ID', '', 'JAKARTA BARAT', 'IV01', 'MULTI CP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (312, 'RK108120', 'PT.INTERLINK TECHNOLOGY', '8 Jl.Kuningan Barat', 'ID', '12710', 'Jakarta', 'IV01', 'IT', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (313, 'RK108121', 'PT.ESTU ADIARTA', 'A16 Jl.Ahmad Yani', 'ID', '17144', 'Bekasi', 'IV01', 'EA', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (314, 'RK108128', 'FIKAWAN UTAMA, PT', 'Jl. Perumnas Bumi Teluk Jambe – Blo', 'ID', '', 'Karawang', 'IV01', 'FIKAWAN UT', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (315, 'RK108130', 'PT Bintang Emas Eldora', '88 Jl. Wolter Monginsidi', 'ID', '12170', 'Jakarta', 'IV01', 'BEE', 'X', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', 'X', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (316, 'RK108131', 'PT.', 'PT PT', 'ID', '12170', 'Jakarta', 'IV01', 'PT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (317, 'RK10816', 'JAYA PERSADA SEHAT, PT', 'Jalan Boulevard Raya  Blok QJ 7 No', 'ID', '', 'Jakarta', 'IV01', 'JPS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (318, 'RK10826', 'MEDIATAMA CIPTACITRA, PT', 'Jl. Warung Buncit Raya No. 6 Jakart', 'ID', '12740', 'Jakarta', 'IV01', 'MC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (319, 'RK10829', 'HENNY EKA PRATAMA, PT', 'RT07/03 Wisma Marks 88B R2 Jl Masji', 'ID', '', 'Jakarta', 'IV01', 'HEP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (320, 'RK10835', 'BINTANG EMAS ELDORA, PT', 'Jl Wolter Monginsidi No88A Lt2 Keba', 'ID', '12170', 'Jakarta', 'IV01', 'BEE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (321, 'RK10867', 'SUBURMITRA GRAFISTAMA, PT', '70-72 Jl. Woltermonginsidi', 'ID', '12170', 'Jakarta', 'IV01', 'SG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (322, 'RK10872', 'GLOBAL ADVINDO PRATAMA, PT.', 'Ruko Alicante BlokA No6 Garding Ser', 'ID', '', 'Tangerang', 'IV01', 'GAP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (323, 'RK10880', 'ANUGERAH GLOBAL SEJAHTERA, CV.', 'Komp Depnaker Blok B2/97 RT5/5 Kel', 'ID', '', 'Bekasi', 'IV01', 'AGS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (324, 'RK10884', 'KRIYASA ABDI NUSANTARA, PT', 'Jl Sanggar Kencana XXIII No. 23 Ban', 'ID', '', 'Bandung', 'IV01', 'KRIYASA AB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (325, 'RK10887', 'DIGIVLA INDONESIA, PT', 'The Manhattan Square Lt. 15, Jl. TB', 'ID', '', 'Jakarta', 'IV01', 'DIGIVLA IN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (326, 'RK10903', 'SIGAP PRIMA ASTREA, PT.', 'JL GAYA MOTOR II NO1 SUNTER II', 'ID', '14330', 'Jakarta', 'IV01', 'SIGAP PRIM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (327, 'RK10912', 'SUKUCADANG KERETA INDONESIA, PT.', 'Jl. RE Martadinata 10 Blok C No.D-E', 'ID', '14430', 'Jakarta', 'IV01', 'SUKUCADANG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (328, 'RK10922', 'PT.CAHAYAINTI MITRA KREASINDO', '71-73 Gedung Bidakara 2 Lt.9', 'ID', '12870', 'Jakarta', 'IV01', 'CMK', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (329, 'RK10932', 'GEGER BERKARYA, PT.', 'Jl. Pengukiran Raya No. 55A – 59A', 'ID', '', 'Jakarta', 'IV01', 'GEGER', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (330, 'RK10940', 'SATRIA INTERNUSA PERKASA, PT', 'Poin Mas Raya No 42B RT03/10 Kel Ma', 'ID', '', 'Depok', 'IV01', 'SIP', 'X', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (331, 'RK10950', 'INDONESIA APPLICAD, PT.', 'Ruko Kirana Boutique Office Blok F1', 'ID', '14240', 'Jakarta', 'IV01', 'IA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (332, 'RK10965', 'KREASI INDO GEMILANG, PT.', 'Jl Angkasa I Blok N No34 RT2/10 Gun', 'ID', '10610', 'Jakarta', 'IV01', 'KIG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (333, 'RK10967', 'MULIA JAYA REJEKI, PT.', 'Jl Terusan I Gusti Ngurah Rai No14', 'ID', '', 'Jakarta', 'IV01', 'MJR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (334, 'RK10969', 'UNITRONIC JAYA, PT', 'JL. Batununggal Indah IV No. 75 Men', 'ID', '', 'Bandung', 'IV01', 'UNITRONIC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (335, 'RK10970', 'BAGUS HARAPAN TRITUNGGAL, PT.', 'Wisma sarinah Lt2 Jl Majapahit No8', 'ID', '', 'Jakarta', 'IV01', 'BHT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (336, 'RK10971', 'LINGGA PUTRA PRASETYA, CV.', 'Jl Mantarena No9 Kel Panaragan Kec', 'ID', '', 'Bogor', 'IV01', 'LPP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (337, 'RK10979', 'CV. ARTOUR JAYA MANDIRI', 'Jl. Walisongo Perumahan Green Oase', 'ID', '', 'Semarang', 'IV01', 'MANDIRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (338, 'RK10986', 'SAKTI MAJU BERSAMA, PT.', 'Jl H Ten 1 No1 RT2/1 Rawamangun, Pu', 'ID', '13220', 'Jakarta', 'IV01', 'SMB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (339, 'RK10988', 'SUJUTAMA DWIKARYA SUKSES, PT.', 'Ruko Cibubur Indah Blok F/13 Jl Lap', 'ID', '', 'Jakarta', 'IV01', 'SDS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (340, 'RK10999', 'FAVE HOTEL MARGONDA DEPOK', 'MARGONDA RAYA NO.166 BEIJI', 'ID', '', 'Depok', 'IV01', 'FAVE HOTEL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (341, 'RK11000', 'LUMINOR HOTEL', 'PECENONGAN NO.35 RT.008 RW.003 KEBO', 'ID', '', 'Jakarta Pusat', 'IV01', 'LUMINOR HO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (342, 'RK11012', 'Pindad Enjiniring Indonesia, PT', 'Jl Jendral Gatot Subroto No517 Kel', 'ID', '40285', 'Bandung', 'IV01', 'PINDAD ENJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (343, 'RK11038', 'INTEGRA PRATAMA, PT', 'Komp. Graha Mas Kebon Jeruk Blok B1', 'ID', '11530', 'Jakarta', 'IV01', 'INTEGRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (344, 'RK11039', 'MERCATURA INDONESIA, PT', 'GrahaMampang 3rd Fl. Suite306 Jl Ma', 'ID', '12760', 'Jakarta', 'IV01', 'MERCATURA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (345, 'RK11043', 'PT. ELEKTRIKA REKAYASA ENERGI', '38 E Ruko Prominence Alam Sutra', 'ID', '15144', 'Tangerang - Banten', 'IV01', 'ERE', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (346, 'RK11055', 'VARDA LUMBUNG BERKAT, PT.', 'Jl Cikunir Raya No149 RT2/2 Jakamul', 'ID', '', 'Jakarta', 'IV01', 'VLB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (347, 'RK11061', 'ENDURA PAWITRA UTAMA, CV.', 'Jl Warung Sillah RT 03/05 Ciganjur', 'ID', '12630', 'Jakarta', 'IV01', 'EPU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (348, 'RK11095', 'AHLI KARYA NUSANTARA, PT.', 'Jl Pakin1 Rukan Mitra BahariII Blok', 'ID', '', 'Jakarta', 'IV01', 'AKN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (349, 'RK11133', 'BIAR BERKAH, CV', 'Parung Bingung Jl Raya Sawangan RT/', 'ID', '', 'Depok', 'IV01', 'BIAR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (350, 'RK11134', 'PILAR GAPURA NUSA, PT.', 'Jl JORR Jatiwarna RT06 RW06, Kel Ja', 'ID', '', 'Bekasi', 'IV01', 'PILAR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (351, 'RK11137', 'HARRIS VERTU HOTEL', 'Jl. Hayam Wuruk No.6', 'ID', '10120', 'Jakarta Pusat', 'IV01', 'HARRIS VER', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (352, 'RK11138', 'INNOFAST SOLUSI PRIMA, PT.', '88 Kasablanka Office Tower Lt10, Un', 'ID', '', 'Jakarta', 'IV01', 'ISP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (353, 'RK11141', 'CITRA MULTIMEDIA INDONESIA, PT', 'Jl. Pilar Mas Raya Kav A-D, Kedoya-', 'ID', '11520', 'Jakarta', 'IV01', 'CITRA MULT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (354, 'RK11155', 'IKI ANUGERAH ESA, PT.', 'Jl Gunung Sahari Raya No39 RT05/RW0', 'ID', '', 'Jakarta', 'IV01', 'IKI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (355, 'RK11166', 'BINTANG ANUGRAH SEHATI, PT', 'Jl Jembatan Batu No 82-83 Pinangsia', 'ID', '11110', 'Jakarta', 'IV01', 'BAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (356, 'RK11167', 'PT.WAHANA MAKMUR SEJATI', '32 Gedung Wahana Artha', 'ID', '10720', 'Jakarta', 'IV01', 'WMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (357, 'RK11174', 'BANGUN TIARA TEKNIK, PT.', 'Jl H Ten I RT02/RW01 Rawamangun Pul', 'ID', '13220', 'Jakarta', 'IV01', 'BTT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (358, 'RK11177', 'TRIMARRA EKA MANUNGGAL, PT.', 'Rukan Taman Pondok Kelapa Blok B Lt', 'ID', '', 'Jakarta', 'IV01', 'TEM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (359, 'RK11181', 'WIJAYA UTAMA TEKNINDO, PT.', 'Jl Rokan Raya No273 Rt6/5 Kel Bakti', 'ID', '16418', 'Depok', 'IV01', 'WUT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (360, 'RK11198', 'BANTEN PURNAMA, CV.', 'Jl. Multatuli No 46 Rangkasbitung,', 'ID', '', 'Banten', 'IV01', 'BP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (361, 'RK11211', 'INDOHARCO CEMERLANG, PT.', 'PIK Avenue Mall Lv6 Jl Pantai Indah', 'ID', '', 'Jakarta', 'IV01', 'IC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (362, 'RK11212', 'PANDAWA PASIFIK INDONESIA, PT.', 'Komplek Citra Grand City Blok G7 No', 'ID', '', 'Palembang', 'IV01', 'PPI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (363, 'RK11221', 'TAWADA GRAHA, PT.', 'BlokA20-21 Permata Senayan Jl Tenta', 'ID', '', 'Jakarta', 'IV01', 'TG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (364, 'RK11222', 'PESONA DESAIN STUDIO, PT.', 'Menara Kuningan Lt30 Unit B-C Jl H', 'ID', '', 'Jakarta', 'IV01', 'PDS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (365, 'RK11229', 'KEMALA INTI SOLUSI, PT.', 'Jl Falatehan No1a Kebayoran Baru Ja', 'ID', '', 'Jakarta', 'IV01', 'KIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (366, 'RK11230', 'KREASI UTAMA MANDIRI, PT.', 'Menara Rajawali Lv7-1 Kawasan Mega', 'ID', '12950', 'Jakarta', 'IV01', 'KUM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (367, 'RK11231', 'MGM INTEGRA TEKNOLOGI, PT.', 'Ruko Cordoba Blok F No23 PIK', 'ID', '', 'Jakarta', 'IV01', 'MGM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (368, 'RK11233', 'MITRA INTI BERSAMA, PT.', 'Kav.4 Palma One Building 5th Fl Sui', 'ID', '', 'Jakarta', 'IV01', 'MIB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (369, 'RK11235', 'DWI PRIMA CEMERLANG, PT.', 'Jl Bedugul 5B-17 Daan Mogot Baru Ja', 'ID', '11840', 'Jakarta', 'IV01', 'DPC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (370, 'RK11236', 'AYU NALURI INDAH, CV.', 'Jl Raya Banten Lama No160 Link. Lop', 'ID', '40100', 'Banten', 'IV01', 'ANI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (371, 'RK11292', 'MAHKOTA SELATAN MEKARWANGI, PT', 'Jl. I Gusti Ngurah Rai Ruko Mall Kl', 'ID', '', 'Jakarta', 'IV01', 'MSM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (372, 'RK11295', 'INKA MULTI SOLUSI, PT', 'JL. RAYA SURABAYA-MADIUN KM SBAYA', 'ID', '63151', 'Madiun', 'IV01', 'INKA MULTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (373, 'RK11304', 'MACRO TREND TECHNOLOGY, PT.', 'Jl. RE Martadinata Ruko Mahkota Anc', 'ID', '', 'Jakarta', 'IV01', 'MTT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (374, 'RK11308', 'UNGGUL KARYA WIRARAJA, PT.', 'Komp. Rukan Taman Pondok Kelapa Blo', 'ID', '', 'Jakarta', 'IV01', 'UKW', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (375, 'RK11318', 'SAKTI MAJU BERSAMA, PT.', 'Jl H TEN I NO1 RT2/RW1 Kel Rawamang', 'ID', '', 'Jakarta', 'IV01', 'SMB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (376, 'RK11327', 'Grand Zuri Hotels Yogyakarta', 'Jl. P. Mangkubumi No.18, Malioboro', 'ID', '', 'Yogyakarta', 'IV01', 'GRAND ZURI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (377, 'RK11329', 'MANORIAN ENGINEERING PRAKARSA, PT', 'No8 Jl. Mekarjaya Raya II Komplek K', 'ID', '', 'Tangerang', 'IV01', 'MANORIAN E', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (378, 'RK11338', 'DNR GLOBALTAMA SUPPLY, CV.', 'Grand Depok City Anggrek3 BlokC1 No', 'ID', '', 'Depok', 'IV01', 'DNR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (379, 'RK11366', 'HAFIZ ENERGI TAMA, PT', 'No.1 Graha komando Lt3 Suite B1 Jl', 'ID', '13420', 'Jakarta', 'IV01', 'HET', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (380, 'RK11368', 'DAMAYANTI TEHNIK, PT', 'Jl Kramat Kwitang I RT2/RW3 No50C K', 'ID', '', 'Jakarta', 'IV01', 'DT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (381, 'RK11392', 'Harper Hotel By Aston Yogyakarta', 'Jl. Mangkubumi No 52', 'ID', '55232', 'Yogyakarta', 'IV01', 'HARPER MAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (382, 'RK11417', 'Novotel Hotel & Resort Bogor', 'Golf Estate Bogor Raya', 'ID', '16710', 'Bogor', 'IV01', 'NOVOTEL HO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (383, 'RK11423', 'JEDI GLOBAL TEKNOLOGI, PT.', 'Lt.12 Centennial Tower Jl Jend Gato', 'ID', '12930', 'Jakarta', 'IV01', 'JEDI GLOBA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (384, 'RK11440', 'PT Fintek Karya Nusantara', '21 GEDUNG TREASURY TOWER 31', 'ID', '12190', 'Jakarta Selatan', 'IV01', 'PT FINTEK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (385, 'RK11448', 'LINTAS CITRA ABADI, PT.', 'Jl Babakan Madang No99 RT1/4 Ds. Ba', 'ID', '', 'Kab. Bogor', 'IV01', 'LCA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (386, 'RK11449', 'SINAR NIRWANA INDONESIA, PT.', 'Jl Teuku Umar Raya No8 RT1/2 Kel Ga', 'ID', '', 'Kab. Bekasi', 'IV01', 'SNI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (387, 'RK114501', 'PT Fajar Mitra Hutama', '214 Jl Raya Narogong', 'ID', '17116', 'Jawa Barat', 'IV01', 'FMH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (388, 'RK114502', 'PT UTAMA KARYA SENTOSA', 'E.3/11 Taman Tekno BSD Sektor XI', 'ID', '15314', 'Tangerang-Banten', 'IV01', 'UKS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (389, 'RK11462', 'PRIMA TEKNOLOGI INTERMEDIA, PT.', 'Jl Letjen Soepono No34 Arteri Perma', 'ID', '12210', 'Jakarta', 'IV01', 'PTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (390, 'RK11466', 'Yello Hotel Paskal Bandung', 'Jl. Pasar Kaliki No.25 Komplek Pask', 'ID', '40181', 'Bandung', 'IV01', 'YELLO HOTE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (391, 'RK11467', 'SUPER SUKSES MAKMUR, PT.', 'Jl Bouelevard No8 Kp Parung Serab S', 'ID', '', 'Depok', 'IV01', 'SSM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (392, 'RK11475', 'AMERTA TEKNOLOGI MEDIA, PT', 'Jl Telekomunikasi No1 Kab bandung', 'ID', '', 'Kab. Bandung', 'IV01', 'ATM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (393, 'RK11512', 'MITRA TIGA UTAMA, PT.', 'Bona Indah Bisnis Cinere No9V B11 N', 'ID', '12440', 'Jakarta', 'IV01', 'MTT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (394, 'RK11513', 'TAMIANG MULTI TRADA, PT.', 'Jakarta Garden City Rukan Avenue Bl', 'ID', '', 'Jakarta', 'IV01', 'TMT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (395, 'RK11514', 'MEGA AKSES PERSADA, PT.', 'Menara Kadin Indonesia Lt6 Jl HR Ra', 'ID', '12950', 'Jakarta', 'IV01', 'MAP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (396, 'RK11515', 'TRIKOMTEK SOLUSI, CV.', 'JL. MELONG RAYA BLOK 20 NO', 'ID', '', 'Bandung', 'IV01', 'TRIKOMTEK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (397, 'RK11534', 'BINAREKA TATAMANDIRI, PT', 'Jl. Tanah Abang IV No32 Jakarta', 'ID', '10160', 'Jakarta', 'IV01', 'BT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (398, 'RK11535', 'SATU ANUGRAH SOLUSINDO, PT.', 'Jl Kramat Sentiong No53A RT11/6 Kra', 'ID', '', 'Jakarta', 'IV01', 'SAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (399, 'RK11536', 'MARVA ABYAKTA KARYA, PT.', 'Jl Pemuda No11A RT5/8 Kel Sunyaragi', 'ID', '', 'Cirebon', 'IV01', 'MAK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (400, 'RK11545', 'PT PELITA WIJAYA KARYA', '168 JL. KH. MOH. Mansyur', 'ID', '', 'Jakarta Barat', 'IV01', 'PWK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (401, 'RK11575', 'SUGISON SENADA, PT.', 'Jl Pinangsia III No 26A RT6/RW5 Kel', 'ID', '', 'Jakarta', 'IV01', 'SS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (402, 'RK11584', 'BARA BENTALA INDONESIA, PT.', 'Jl Kebun Jeruk Raya No126 RT10/5 Ke', 'ID', '11530', 'Jakarta', 'IV01', 'BBI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (403, 'RK11595', 'POWER SISTEM INTEGRASI, PT.', 'Ruko Sudirman Park BlokA12 Lt1 Jl K', 'ID', '10220', 'Jakarta', 'IV01', 'PSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (404, 'RK1162', 'GUNUNG INTAN, CV', 'PERUMNAS SIDOREJO 040/V WUNGU', 'ID', '', 'MADIUN', 'IV01', 'GUNUNG INT', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (405, 'RK11631', 'Hotel Neo Malioboro', 'Jl. Pasar Kembang, No.21', 'ID', '', 'Yogyakarta', 'IV01', 'HOTEL NEO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (406, 'RK11665', 'MIRKA LANGGENG GLOBAL, PT.', 'Jl Tekno Widya Ruko Boulevard Tekno', 'ID', '15412', 'Tangerang Selatan', 'IV01', 'MLG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (407, 'RK11677', 'PT. Gemma Paramitra', '5A Jalan Balikpapan I', 'ID', '10130', 'Jakarta Pusat', 'IV01', 'GP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (408, 'RK11691', 'DASA APRILINDO SENTOSA, PT.', 'Jl Muara No 111 Tanjung Barat, Jaga', 'ID', '12530', 'Jakarta', 'IV01', 'DAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (409, 'RK11730', 'ASSYIFA BERKAT SENTOSA, PT.', 'Griya Bintara Indah G4/3 Bekasi Jaw', 'ID', '', 'Bekasi', 'IV01', 'ABS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (410, 'RK11735', 'SUPIANSYAH', 'Harvest City, Kluster Edelweiss B,', 'ID', '16820', 'Bogor', 'IV01', 'SUPIANSYAH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (411, 'RK11849', 'ARKAREGA KARYA INDONESIA, PT', '18 OFFICE PARK LT. 22 UNIT E,F,G Jl', 'ID', '', 'Jakarta Selatan', 'IV01', 'ARKAREGA K', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (412, 'RK11876', 'MAGA INTI SOLUSI, PT.', 'Cyber Building Jl Kuningan Barat No', 'ID', '', 'Jakarta', 'IV01', 'MIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (413, 'RK11877', 'NUSANTARA TRIDAYA INOVASI, PT.', 'Ruko CBD Palm A28 Palm Paradise Jl', 'ID', '11830', 'Jakarta', 'IV01', 'NTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (414, 'RK11878', 'MEDITEL NUSA UTAMA, PT.', 'Perumahan Jati Endah Regency No B7', 'ID', '40615', 'Bandung', 'IV01', 'MNU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (415, 'RK11890', 'KJPP Dasa’at, Yudistira dan Rekan', 'The Manhattan Square - Mid Tower Lt', 'ID', '', 'Jakarta Selatan', 'IV01', 'KJPP DASA’', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (416, 'RK11898', 'ASURANSI TOTAL BERSAMA, PT', 'Springhill Office Tower 20th Floor,', 'ID', '14410', 'Jakarta', 'IV01', 'ATB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (417, 'RK11914', 'PT. Lamtiar Putra Mandiri', '17-18 Jl. Raya Bogor KM 21', 'ID', '11111', 'Jakarta Timur', 'IV01', 'LPM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (418, 'RK11920', 'Notaris Julius', 'No.139A Tegal Parang, Jl. Tegal Par', 'ID', '12790', 'Jakarta Selatan', 'IV01', 'NOTARIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (419, 'RK11928', 'Pungki Purnadi & Partners, CV', 'Eightyeight @Kasablanka Office Towe', 'ID', '', 'Jakarta Selatan', 'IV01', 'PUNGKI PUR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (420, 'RK11933', 'AFTECH INDONESIA, CV.', 'Komp Nata Endah Blok B No35 RT 7 RW', 'ID', '', 'Kab. Bandung', 'IV01', 'AFTECH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (421, 'RK11952', 'LINTAS BUANA, PT.', 'Villa Mutiara Gading 2 Blok X-12 No', 'ID', '', 'Bekasi', 'IV01', 'LINTAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (422, 'RK11979', 'BANK NEGARA INDONESIA, PT. (PERSERO', 'Jl. Jendral Sudirman Kv.1', 'ID', '10220', 'Jakarta', 'IV01', 'BNI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (423, 'RK11982', 'GEOCHEM SURVEI INTERNATIONAL, PT', 'Komp Ruko Cikawao Permai Kav B-19 K', 'ID', '40261', 'Bnadung', 'IV01', 'GSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (424, 'RK11994', 'PRIMA BUANA PERSADA, CV.', 'Jl Prof Dr Soepomo SH Crown Palace', 'ID', '', 'JAKARTA', 'IV01', 'PBP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (425, 'RK12002', 'ADYAWINSA TELECOMMUNICATION &ELEKTR', 'Jl Raya Pegangsaan Dua Km2 No64 RT5', 'ID', '17530', 'Jakarta', 'IV01', 'AT&E', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (426, 'RK12013', 'WAHYU RADITA SETIADI', 'Jl Cemara No10 Tegal Sepur RT2/2 Ke', 'ID', '', 'Kab. Klaten', 'IV01', 'WAHYU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (427, 'RK12026', 'ELEMENT MEGA WAHANA, PT', 'Pondok Indah Office Tower Jl Sultan', 'ID', '12310', 'Jakarta', 'IV01', 'EMW', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (428, 'RK12029', 'Synergi Lestari Pratama, PT', 'JL Pluit Indah Raya No168 B-G', 'ID', '', 'Jakarta', 'IV01', 'SYNERGI LE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (429, 'RK12031', 'GLOBAL PERKASA CIPTA SARANA, PT', 'Ruko Bukit Rivaria A Blok A/9 RT3/1', 'ID', '', 'Depok', 'IV01', 'GPCS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (430, 'RK12039', 'DRS H. SOLIHIN', 'No 37 Bumi Pakusarakan BlokA1 RT7/1', 'ID', '', 'Kab. Bandung Barat', 'IV01', 'SOLIHIN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (431, 'RK12045', 'KARANGGO CEMERLANG ABADI, PT', 'Jl BangauII No32 RT5/9 Harapan Jaya', 'ID', '', 'Kota Bekasi', 'IV01', 'KCA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (432, 'RK12046', 'MITRA TEKNIK ABADI, CV', 'Kp Sompok RT2/21 Sangkan Hurip Kata', 'ID', '', 'Kab Bandung', 'IV01', 'MTA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (433, 'RK12047', 'KOMUNIKA MITRA MANDIRI, PT.', 'Perum Kendal Persada Asri IA 14 Rt', 'ID', '', 'Kab. Kendal', 'IV01', 'KMM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (434, 'RK12048', 'HUDA RACHMA GRUPINDO, PT.', 'Jl. Permata Pamulang Raya Kav.9, Ke', 'ID', '15316', 'Kota Tangerang Selatan', 'IV01', 'HRG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (435, 'RK12060', 'ANDI SYAFRANI', 'Jl Legoso Raya Grand Puri Laras Blo', 'ID', '', 'Kota Tangerang Selatan', 'IV01', 'ANDI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (436, 'RK12061', 'M. NURBADRUDDIN', 'Perum Puri Arsana Blok E5 RT1/7 Boj', 'ID', '', 'Kota Depok', 'IV01', 'NURBADRUDD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (437, 'RK12062', 'BNI Jakartakota', 'Jakartakota', 'ID', '', 'Jakarta', 'IV01', 'BNI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (438, 'RK12067', 'MILLENIA ARTHA SUKSES, PT.', 'Jl Damar 15 Blok D No159 RT4/5 Peka', 'ID', '17148', 'Kota Bekasi', 'IV01', 'MAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (439, 'RK12068', 'WIDJAJA KSUMA BHUMI, PT.', 'Jl Letjend Ibrahim Adjie Grande No1', 'ID', '16117', 'Kota Bogor', 'IV01', 'WKB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (440, 'RK12069', 'LACAK CIPTA AKTUAL, PT.', 'Menara BCA Grand Indonesia Lt50 Jl', 'ID', '', 'Jakarta', 'IV01', 'LCA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (441, 'RK12071', 'SANGIANG KARYA MANDIRI, PT.', 'Jl Hos Cokroaminoto Ubud Village Bl', 'ID', '', 'Kota Tangerang', 'IV01', 'SKM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (442, 'RK12083', 'PERKASA MULTINDO SEJAHTERA, PT.', 'Ruko Cendana No15A Kel Bencongan In', 'ID', '', 'Kab Tangerang', 'IV01', 'PMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (443, 'RK12084', 'RADIO KOMUNIKASI INDONESIA, PT.', 'KOMP PERTAMINA PATRA II NO24 JL AHM', 'ID', '', 'Jakarta', 'IV01', 'RKI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (444, 'RK12086', 'ARLINE PRIMA MANDIRI, PT.', 'No2 Ruko Smart Market BlokI RT3/2 K', 'ID', '', 'Kota Tangerang', 'IV01', 'APM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (445, 'RK12097', 'BIRO KLASIFIKASI INDONESIA (PERSERO', 'Graha BKI, Jl. Yos Sudarso Kav. 5,', 'ID', '29451', 'Kota Batam', 'IV01', 'BKI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (446, 'RK12105', 'PT Bintangnusantara Utama', 'Jl Pagesangan Baru VIII No5', 'ID', '', 'Surabaya', 'IV01', 'PT BINTANG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (447, 'RK12114', 'SUTMARINDO JAYA MANDIRI, PT', 'Jl Peta Selatan Ruko Citi Square Bl', 'ID', '', 'Jakarta', 'IV01', 'SJM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (448, 'RK12123', 'MARGO AGUNG LESTARI, PT', 'Gedung Linggar Jati Jl Kayu Putih I', 'ID', '', 'Jakarta', 'IV01', 'MAL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (449, 'RK12147', 'PT. Pecenongan Prima Pratama', '35 Jl. Pecenongan', 'ID', '10120', 'Jakarta Pusat', 'IV01', 'PPP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (450, 'RK12148', 'TRI SUKSES PERMATA, PT', 'Jl. Sunter II No 27, Rawa Badak, Ko', 'ID', '', 'Jakarta', 'IV01', 'TSP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (451, 'RK12149', 'RAGINA JAYA UTAMA, PT', 'NoA112 Apartemen Square Garden Towe', 'ID', '', 'Jakarta', 'IV01', 'RJU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (452, 'RK12153', 'SAFANA NABILA WISATA, PT', 'Ruko Graha Mas BlokH No1 Lt1 Jl Pem', 'ID', '', 'Jakarta', 'IV01', 'SNW', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (453, 'RK12154', 'PROKON BANGUN MITRA SUKSES, PT', 'Ruko H1 No17 Jl Sunter Mas Utara RT', 'ID', '', 'Jakarta', 'IV01', 'PBMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (454, 'RK12155', 'PT PUTRA SUMBER WISATA JAYA', 'JL. MANGKUBUMI NO.52-55232', 'ID', '', 'YOGYAKARTA', 'IV01', 'PT PUTRA S', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (455, 'RK12159', 'YUDHATAMA RIZQI SEJAHTERA, PT', 'no. 6 Kios Taman Pondok Labu Jl RS', 'ID', '', 'Jakarta', 'IV01', 'YRS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (456, 'RK12160', 'PT SENTUL CITY TBK', 'JL. Ir. H JUANDA NO. 76 SENTUL CITY', 'ID', '', 'BOGOR', 'IV01', 'SENTUL CIT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (457, 'RK12168', 'AMIRA MEDIKA, PT', 'Jl. Lembaga Atas No13A RT2/8 Sudima', 'ID', '', 'Kota Tangerang', 'IV01', 'AMIRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (458, 'RK12179', 'CITRA METAL ABADI, PT', 'Komp. Perdagangan Jl Niaga V C9 Kel', 'ID', '', 'Tanggerang', 'IV01', 'CMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (459, 'RK12185', 'PUTRA INA KARYA, PT', 'Graha Iman Jl Tembus Kalimalang No1', 'ID', '', 'Bekasi', 'IV01', 'PIK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (460, 'RK12199', 'ARDA ASTAR, CV', 'Jl Utan Kayu Raya No63 Desa Kel Uta', 'ID', '', 'Jakarta', 'IV01', 'ARDA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (461, 'RK12204', 'MODERN INTI DINAMIKA, PT', 'Dusun Rawaindah RT5/1 Desa Seragen', 'ID', '', 'Kab. Karawang', 'IV01', 'MID', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (462, 'RK12205', 'BERSAMA INTI SEJAHTERA, CV', 'Jl Pulo Mangga No66 RT3/4 Kel Grogo', 'ID', '', 'Kota Depok', 'IV01', 'BIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (463, 'RK12214', 'ADVIS CAHAYA KOMUNIKA, PT', 'Epicentrum Walk Lt.5 Unit A-540, Se', 'ID', '', 'Jakarta', 'IV01', 'ADVIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (464, 'RK12216', 'KKA AZWIR ARIFIN DAN REKAN', 'Jl Brigif No39 B Jagakarsa', 'ID', '12630', 'Jakarta', 'IV01', 'AZWIR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (465, 'RK12218', 'ARDANA HARTANA KONSULTAN, PT', 'Bumi Mandiri Tower 2 lv 12 jalan pa', 'ID', '', 'Jakarta', 'IV01', 'AHK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (466, 'RK12232', 'ASTON SOLO HOTEL', 'Jl Slamet Riyadi Purwosari Kec Lawe', 'ID', '', 'Kota Surakarta', 'IV01', 'ASTON SOLO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (467, 'RK12233', 'IBIS STYLES BOGOR RAYA', 'Golf Estatte Bogor Raya', 'ID', '', 'Kota Bogor', 'IV01', 'IBIS STYLE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (650, 'RK12716', 'Lembaga P3IP', 'Jl.Rawa Pule V.89 Kukusan Depok', 'ID', '', 'Depok', 'IV01', 'P3IP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (468, 'RK12234', 'SAVERO STYLE HOTEL BOGOR', 'Jl Pajajaran No38 Bogor', 'ID', '16128', 'Kota Bogor', 'IV01', 'SAVERO STY', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (469, 'RK12235', 'CV Global Grafika', '399 A Jl. Margonda Raya', 'ID', '11111', 'Jawa Barat', 'IV01', 'GG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (470, 'RK12236', 'PT. GAJAH MAS PERKASA', '103 Jl. Margoutomo', 'ID', '55232', 'Yogyakarta', 'IV01', 'GMP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (471, 'RK12237', 'LUMINTU INSAN MANDIRI, PT', 'No15 Ruko Palais De Europa Jl Troca', 'ID', '15139', 'Kota Tangerang', 'IV01', 'LIM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (472, 'RK12244', 'PT DUTA MITRA PROPERTINDO', '373 Jl. Slamet Riyadi', 'ID', '57147', 'Surakarta', 'IV01', 'DMP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (473, 'RK12246', 'Guest House Joy Of Sopalan', '3/A Ring Road Utara', 'ID', '55282', 'Yogyakarta', 'IV01', 'GHJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (474, 'RK12251', 'INFOKOM ELEKTRINDO, PT.', 'MNC Tower Lt25 Jl Kebon Sirih No17-', 'ID', '10340', 'Jakarta', 'IV01', 'INFOKOM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (475, 'RK12252', 'LINK NET TBK., PT.', 'Gedung Berita Satu Plaza Lt5 Jl Jen', 'ID', '12950', 'Jakarta', 'IV01', 'LINK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (476, 'RK12253', 'SMARTFREN TELECOM TBK., PT.', 'Jl Agus Salim No45 Menteng Jakarta', 'ID', '10340', 'Jakarta', 'IV01', 'SMARTFREN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (477, 'RK12254', 'JALA LINTAS MEDIA, PT.', 'Jl Mayor Oking KM2 No89 Ciriung, Ci', 'ID', '16918', 'Jakarta', 'IV01', 'JLM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (478, 'RK12255', 'SUMBER DATA INDONESIA, PT.', 'Jl Raya Pondok Gede No48B Lubang Bu', 'ID', '13810', 'Jakarta', 'IV01', 'SDI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (479, 'RK12256', 'NAP INFO LINTAS NUSA, PT.', 'Plaza Kuningan Annex Building Suite', 'ID', '', 'Jakarta', 'IV01', 'NAP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (480, 'RK12260', 'SWISS BEL-HOTEL SOLO', 'Jl A Yani No45 RT2 RW6 GILINGAN KEC', 'ID', '57134', 'KOTA SURAKARTA', 'IV01', 'SWISS BEL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (481, 'RK12261', 'PT Emer Sapta Agung', '34 Jl. Gowongan Kidul', 'ID', '00000', 'Yogyakarta', 'IV01', 'ESA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (482, 'RK12263', 'AGUNAN PAULUS SAMOSIR', 'Jl. Kebagusan Raya No. 117, Kebagu', 'ID', '12520', 'Jakarta', 'IV01', 'AGUNAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (483, 'RK12266', 'TRIMITRA SISTEM SOLUSINDO, PT.', 'SOHO Podomoro City Unit 3106 Jl Let', 'ID', '11470', 'Jakarta', 'IV01', 'TSS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (484, 'RK12271', 'KENTARA WIRAKARSA INDONESIA, PT.', 'Grand Galaxy City Rukan Sentra Bisn', 'ID', '', 'Bekasi', 'IV01', 'KWI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (485, 'RK12276', 'LEMBAGA INFORMASI KEBIJAKAN NASIONA', 'Jl. Walang Barat No. 8-C Jakarta', 'ID', '14260', 'Jakarta', 'IV01', 'LEMIKNAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (486, 'RK12285', 'CIPTA PROPERTI AGUNG, PT.', 'Jl.  Slamet Riyadi No. 464,Purwosar', 'ID', '57147', 'SURAKARTA', 'IV01', 'POP HOTEL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (487, 'RK12286', 'BUITENZORG INNOVATION, CV.', 'Jl Ciomas Harapan No 25, Bogor', 'ID', '', 'Bogor', 'IV01', 'BUITENZORG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (488, 'RK12287', 'HISWARA BUNJAMIN &  TANDJUNG', 'KAV 7.8 GEDUNG SUDIRMAN NO. 7.8 MEN', 'ID', '10220', 'JAKARTA', 'IV01', 'HISWARA BU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (489, 'RK12295', 'TAB SOLUTIONS, PT.', 'No 22D Jl Kpt. Tendean Kel Pela Mam', 'ID', '12730', 'Jakarta', 'IV01', 'TAB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (490, 'RK12296', 'LPPP INFORMASI PUBLIK', 'Jl. Rawa Pule V No. 89 RT 003/RW 00', 'ID', '', 'DEPOK', 'IV01', 'LEMBAGA PU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (491, 'RK12308', 'PT. JAK GLOBAL', 'PURI SENTRA NIAGA BLOK C NO56 Jl Se', 'ID', '', 'Jakarta Timur', 'IV01', 'PT. JAK GL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (492, 'RK12310', 'NOTARIS TRI MULYAHATI, SH, MKn', 'Jl Chairil Anwar Blok J/07 Bekasi C', 'ID', '17113', 'BEKASI', 'IV01', 'NOTARIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (493, 'RK12312', 'BANK CENTRAL ASIA TBK., PT.', 'Menara BCA Grand Indonesia Jl MH Th', 'ID', '', 'Jakarta', 'IV01', 'BCA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (494, 'RK12313', 'LAGUNA INTI NIAGA ENERGI, PT.', 'Nirwana Golden Park Blok D8 No6 Pak', 'ID', '', 'Kab Bogor', 'IV01', 'LAGUNA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (495, 'RK12314', 'HARRIS HOTEL SOLO', 'Jl. Slamet Riyadi No. 464 Purwosari', 'ID', '', 'SURAKARTA', 'IV01', 'HARRIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (496, 'RK12316', 'AKTIF DIGITAL LIRATAMA, PT.', 'Jl. Pisangan Baru Timur No. 1 Matra', 'ID', '', 'Jakarta', 'IV01', 'AKTIF', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (497, 'RK12317', 'SPORA CIPTA PARAMEDIA, PT.', 'Jl. Taman Margasatwa No. 22 RT. 01/', 'ID', '', 'Jakarta', 'IV01', 'SPORA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (498, 'RK12318', 'LANGIT TEKNOLOGY, PT.', 'Jl. Nusa Indah No. 24 Rt 004/002 Ke', 'ID', '', 'Jakarta', 'IV01', 'LANGIT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (499, 'RK12319', 'KALANI PHALA PERSADA, PT.', 'Gd Office8 Lt 18A Jl Jend Sudirman', 'ID', '', 'Jakarta', 'IV01', 'KPP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (500, 'RK12320', 'HANYTECH JAYA MAKMUR, CV.', 'Villa Tomang Baru C2 No15 Rt1/Rw13', 'ID', '', 'Kab. Tangerang', 'IV01', 'HJM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (501, 'RK12322', 'MAHA KARYA MADUHUTU, PT', 'Komplek perkantoran Ruko Boulevard', 'ID', '', 'Tangerang Selatan', 'IV01', 'MAHA KARYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (502, 'RK12326', 'KREASI INDONESIA MAKMUR, PT.', 'Rukan Grand Aries Niaga Blok A1-1N,', 'ID', '11620', 'Jakarta', 'IV01', 'KIM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (503, 'RK12327', 'MULTIPOLAR INTITAMA, PT.', 'Jl Kendangsari YKP Blok K23 Kel Ken', 'ID', '60292', 'Surabaya', 'IV01', 'MULTIPOLAR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (504, 'RK12328', 'JAYA MAKMUR GLOBALINDO, PT.', 'Jl AH Nasution No91 Kel Jatihandap', 'ID', '', 'Bandung', 'IV01', 'JMG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (505, 'RK12332', 'USULAN BAIK INDONESIA, PT.', 'No13-17 Vinilon Building Lt5 Unit8', 'ID', '', 'Jakarta', 'IV01', 'UBSULAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (506, 'RK12334', 'BANGUN MATARAM JAYA, PT.', 'No. 107 Jl Otto Iskandardinata III', 'ID', '13340', 'Jakarta', 'IV01', 'BMJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (507, 'RK12335', 'NUSANTARA SATRIA AGUNG, PT.', 'Jl Setrasari Tengah No18', 'ID', '40152', 'Bandung', 'IV01', 'NSA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (508, 'RK12338', 'HOTEL ROYAL TULIP GUNUNG GEULIS', 'Pasir Angin Gadog', 'ID', '', 'Bogor', 'IV01', 'ROYAL TULI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (509, 'RK12339', 'IKATAN AHLI PENGADAAN INDONESIA (IA', 'No 194 Safwah Bintaro Jl H SOM Pond', 'ID', '', 'Tangerang Selatan', 'IV01', 'IAPI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (510, 'RK12341', 'PT Len Rekaprima Semesta', '442 Jl Soekarno', 'ID', '40254', 'Bandung', 'IV01', 'LPS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (511, 'RK12349', 'FORMASI BISNIS INDONESIA, PT.', 'Graha Simatupang Tower 2B Lt4 Jl TB', 'ID', '12540', 'Jakarta', 'IV01', 'FBI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (512, 'RK12353', 'MENIK PRILIANTI', 'Jagakarsa Perum Mutiara RT5/2 Kel.', 'ID', '', 'Jakarta', 'IV01', 'MENIK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (513, 'RK12355', 'SENTRA PARAMITRA, PT.', 'Jl Sultan Iskandar Muda Kebayoran L', 'ID', '12240', 'Jakarta', 'IV01', 'SENTRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (514, 'RK12357', 'HOTEL GRAND MERCURE JAKARTA KEMAYOR', 'Jl H Benyamin Sueb KavB6 Superblok', 'ID', '10610', 'Jakarta', 'IV01', 'HOTEL GRAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (515, 'RK12358', 'SINAR MAKMUR SENTOSA, CV.', 'RUKO GREEN GARDEN BLOKA14 NO36 Kel', 'ID', '', 'Jakarta', 'IV01', 'SMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (516, 'RK12362', 'EQUINE GLOBAL, PT.', 'The City Center Batavia Lt33 Jl KH', 'ID', '10220', 'Jakarta', 'IV01', 'EQUINE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (517, 'RK12364', 'LEMBAGA PENGEMBAGAN KONSULTASI NASI', 'Gd Linggar Jati Lt2 Jl Kayu Putih I', 'ID', '', 'Jakarta', 'IV01', 'LPKN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (518, 'RK12365', 'ENVIROLAB NUSANTARA, PT.', 'Jl Raya Kodau No. 1B RT 005 RW 003,', 'ID', '', 'Bekasi', 'IV01', 'ENVIROLAB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (519, 'RK12381', 'BASWARA ADI REKA, PT', 'No. 8A Jl Pangeran Jayakarta Kel Ma', 'ID', '', 'Jakarta', 'IV01', 'BASWARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (520, 'RK12382', 'MAKMUR META GRAHA DINAMIKA, PT.', 'Wisma77 Tower2 Lt25 Jl Letjend S Pa', 'ID', '11410', 'Jakarta', 'IV01', 'MMGD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (521, 'RK12383', 'BERSAMA TAMI SEJAHTERA, PT.', 'Gd 18 Office Park Lt25 Suite A2 Jl', 'ID', '', 'Jakarta', 'IV01', 'BTS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (522, 'RK12391', 'GRHA PRIMA AGUNG, PT.', 'Menara Centennial Lt29 Kav24-25 Uni', 'ID', '', 'Jakarta', 'IV01', 'GPA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (523, 'RK12392', 'ZIZAF MEGANTARA UTAMA, PT.', 'Gd Pondok Pinang Center Jl Ciputat', 'ID', '12310', 'Jakarta', 'IV01', 'ZMU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (524, 'RK12397', 'YAYASAN PENDIDIKAN', 'Lt17F L''Avenue Office Tower Jl Raya', 'ID', '12780', 'Jakarta', 'IV01', 'YPIA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (525, 'RK12408', 'YAYASAN PB NAHDLATUL ULAMA', 'Jl. Kramat Raya No. 164, Kenari, Se', 'ID', '', 'Jakarta', 'IV01', 'YAYASAN PB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (526, 'RK12409', 'CIPTA INTI SEJAHTERA, PT', 'Villa Mutiara Gading 3 Blok G11 No1', 'ID', '17610', 'Bekasi', 'IV01', 'CIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (527, 'RK12427', 'TARADITA INSAN MULIA, PT', 'Jl Pinang Ranti II No1A RT6/1 Pinan', 'ID', '13560', 'Jakarta', 'IV01', 'TARADITA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (528, 'RK12432', 'CIPTA KARYA TATA MANDIRI, PT', 'Gd Akil DKI No36H GD DPD Akil Jl KH', 'ID', '', 'Jakarta', 'IV01', 'CIKATAMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (529, 'RK12433', 'PUTRA BUKIT BANTI, PT', 'Lt29 Kav24 Jl Otto Iskandardinata I', 'ID', '13340', 'Jakarta', 'IV01', 'PBB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (530, 'RK12434', 'LUMINA KAYA INDONESIA, PT.', 'Lt.28C Treasury Tower SCBD Lot 28 J', 'ID', '', 'Jakarta', 'IV01', 'LUMINA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (531, 'RK12470', 'PUNGKI PUNARDI ACADEMY', 'Semolowaru Tengah 3B/22 Sukolilo Ko', 'ID', '60119', 'Surabaya', 'IV01', 'PUNGKI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (532, 'RK12477', 'PT TRIDAYA PIRANTI SELARAS', 'RUKO CBD TAMAN SURYA 5 BLOK A NO 28', 'ID', '', 'JAKARTA BARAT', 'IV01', 'PT TRIDAYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (533, 'RK12483', 'HOTEL HORISON BEKASI', 'JL KH NOER ALIE', 'ID', '17148', 'BEKASI', 'IV01', 'HOTEL HORI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (534, 'RK12484', 'PT RAJA BEARINDO ADITAMA', 'JL. PURI KENCANA RUKAN PURI NIAGA B', 'ID', '', 'JAKARTA BARAT', 'IV01', 'RAJA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (535, 'RK12485', 'PT RADIO SWARA GADJAH MADA', 'No. 5 Gedung Gama Multi Usaha Mandi', 'ID', '', 'Jogjakarta', 'IV01', 'RADIO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (536, 'RK12486', 'CV SURYA', 'JL. PARANG TRITIS BLOK C NO. 118 RT', 'ID', '17114', 'Bekasi', 'IV01', 'CV', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (537, 'RK12489', 'YAYASAN LEMBAGA KONSUMEN INDONESIA', 'JL. PANCORAN BARAT VII NO.1 DUREN T', 'ID', '12760', 'JAKARTA SELATAN', 'IV01', 'YLK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (538, 'RK12492', 'PT. TIRTA INVESTAMA', 'Jl. Indronoto RT 04/03 DS Wirogunan', 'ID', '', 'jawa tengah', 'IV01', 'TIRTA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (539, 'RK12496', 'PT RAP INDONESIA', 'Kav.88 Pakuwon Tower Lt 26A, Jl Cas', 'ID', '12870', 'Jakarta Selatan', 'IV01', 'RAP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (540, 'RK12499', 'PT MAHAKA MEDIA.Tbk', 'Sahid Office Boutique  Unit6, Jl. J', 'ID', '10220', 'Jakarta Pusat', 'IV01', 'MAHAKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (541, 'RK12502', 'FAST MEDIKA UTAMA, PT', 'Jl Raya Serang KM19 Ruko Kp Dadap K', 'ID', '', 'Kab. Serang', 'IV01', 'FAST MEDIK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (542, 'RK12505', 'PT MITRA ENVIRO HOLISTIK', 'JL. RAYA KODAU NO.9 Rt.001 Rw. 003', 'ID', '', 'Bekasi', 'IV01', 'MITRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (543, 'RK12507', 'DINAMIKA ANUGERAH LESTARI, PT', 'Jl. Kemang Utara IX No. 48 Rt 002 R', 'ID', '', 'Jakarta', 'IV01', 'DINAMIKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (544, 'RK12509', 'SAFA ANUGRAH KARYA, PT', 'No12 Lt2 Jl Taman Malaka Selatan Rt', 'ID', '', 'Jakarta', 'IV01', 'SAFA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (545, 'RK12510', 'INDO HUSADA UTAMA, PT', 'Jl. Salemba Tengah No24-28 Jakarta', 'ID', '', 'Jakarta', 'IV01', 'RS DR. ABD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (546, 'RK12519', 'RAJAWALI NUSINDO, PT', 'RD.Madukismo No 21, Bantul, Yogyaka', 'ID', '', 'YOGYAKARTA', 'IV01', 'RAJAWALI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (547, 'RK12522', 'HOTEL SANTIKA BOGOR', 'Botani Square Jl. Raya Padjajaran', 'ID', '', 'Bogor', 'IV01', 'HOTEL SANT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (548, 'RK12526', 'DINASTI ARTHA MAKMUR, PT', 'Jl Permata Pamulang No25B Kp pondoo', 'ID', '', 'TANGERANG SELATAN', 'IV01', 'DINASTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (549, 'RK12527', 'PLN WILAYAH 6', 'Jl. Trunojoyo Blok M I/135, Melawai', 'ID', '', 'WILAYAH 6', 'IV01', 'PLN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (550, 'RK12530', 'SENSOR HAUSTAMA JAYA, PT', 'Komp. Patra II/37 Jl Jend Ahmad Yan', 'ID', '', 'Jakarta', 'IV01', 'SENSOR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (551, 'RK12539', 'PUSDIKLAT PEMENDAGRI', 'Jl. Cemara Ujung Blok 11 No.2 Lanta', 'ID', '', 'Jakarta', 'IV01', 'PUSDIKLAT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (552, 'RK12547', 'SAHID SAHIRMAN MEMORIAL HOSPITAL, P', 'Jl. Jend. Sudirman No. 86, Jakarta', 'ID', '10220', 'Jakarta', 'IV01', 'SAHID SAHI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (553, 'RK12559', 'AWANN SEWU BOUTIQUE HOTEL & SUITE', 'Jl Simpang No 11 Sekayu Kec Semaran', 'ID', '50132', 'SEMARANG', 'IV01', 'AWANN SEWU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (554, 'RK12561', 'Grand Dafam Braga Bandung', 'Braga City Walk, Jl Braga 99-101 Su', 'ID', '', 'BANDUNG', 'IV01', 'GRAND DAFA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (555, 'RK12566', 'KILAU CAHAYA MAEZURRA, PT', 'No80 Rukan Raden Inten Kav18 Jl Rad', 'ID', '', 'Jakarta', 'IV01', 'KILAU CAHA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (556, 'RK12567', 'Nabtesco Service Southeast Asia Co.', '18th fl. 50 GMM Gramy Place, room18', 'TH', '10110', 'Vadhana, Bangkok', 'IV01', 'NABTESCO S', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (557, 'RK12568', 'De Paviljoen Bandung', 'Jl R.E Martadinata 68', 'ID', '40115', 'Bandung', 'IV01', 'DE PAVILJO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (558, 'RK12571', 'KAIROS RUAH PRATAMA, PT', 'Jl Kincir VI No3 Rt6 RW10 Kel Jati', 'ID', '', 'Jakarta', 'IV01', 'KAIROS RUA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (559, 'RK12572', 'TUNGGAL KARYA SEJAHTERA, PT', 'Rt1/Rw6 Jl Bengkong Mustikasari Kel', 'ID', '', 'Bekasi', 'IV01', 'TUNGGAL KA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (560, 'RK12573', 'DENKINO SARANA MANDIRI, PT', 'Ruko Cluster Karawang Green Village', 'ID', '', 'Kab. Karawang', 'IV01', 'DENKINO SA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (561, 'RK12574', 'CELEBES KONTRUKSINDO, PT', 'Blok B/6 Jl Tupai Komp Permata Hija', 'ID', '', 'Palu', 'IV01', 'CELEBES', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (562, 'RK12575', 'Jakarta Lingko Indonesia, PT', 'Wisma Nusantara Lantai 23, Jalan M.', 'ID', '10350', 'Jakarta', 'IV01', 'JAK LINGKO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (563, 'RK12577', 'FUKOKU TOKAI RUBBER INDONESIA, PT', 'Jl Industri Selatan 6A BlokGG 6A-F', 'ID', '', 'Cikarang', 'IV01', 'FUKOKU TOK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (564, 'RK12578', 'HOTEL SALAK THE HERITAGE', 'Jl Ir. H Juanda No.8 Bogor', 'ID', '11612', 'Bogor', 'IV01', 'HOTEL SALA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (565, 'RK12579', 'ARI UTAMA, CV', 'Jl Matraman Raya No67 RT5 RW4 Kel P', 'ID', '13140', 'Jakarta', 'IV01', 'ARI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (566, 'RK12580', 'Artha Mulia Exisindo Indonesia, CV', 'No9-11 Wisma Griya Kemayoran Jl Ind', 'ID', '', 'Jakarta', 'IV01', 'ARTHA MULI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (567, 'RK12584', 'INDOTRANS DATA, PT', 'Lt3 Gd Masindo Jl Mampang Prapatan', 'ID', '', 'Jakarta', 'IV01', 'INDOTRANS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (568, 'RK12588', 'BERLIAN SEJAHTERA TEKNIK, PT', 'No8B/9 Bukit Serpong Mas F2 RT5/7 P', 'ID', '', 'TANGERANG SELATAN', 'IV01', 'BERLIAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (569, 'RK12596', 'SARI WISATA UTAMA, PT', 'No72 Jl Tamansari RT5/5 Kel Lebak S', 'ID', '40131', 'Bandung', 'IV01', 'SARI WISAT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (570, 'RK12607', 'MANDIRI INDO JAYA, PT', 'No53 Jl Raden Inten II RT6/14 Duren', 'ID', '', 'Jakarta', 'IV01', 'MANDIRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (571, 'RK12608', 'MANTAP MAJUMAPAN SEJAHTERA, PT', 'No 22 Jl LETJEND Suprapto RT10/5 Ke', 'ID', '', 'Jakarta', 'IV01', 'MANTAP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (572, 'RK12609', 'MOSYA KARYA MANDIRI, PT', 'No32A Jl Pahlawan Revolusi Kel Klen', 'ID', '', 'Jakarta', 'IV01', 'MOSYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (573, 'RK12610', 'ABIR KREASI UTAMA, PT.', 'No32 Jl Swadaya Raya RT3/1 Duren Sa', 'ID', '13440', 'Jakarta', 'IV01', 'ABIR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (574, 'RK12611', 'BADIARI MITRA SARANA, PT', 'No22 Jl Letjen Suprapto Raya Kel Ce', 'ID', '', 'Jakarta', 'IV01', 'BADIARI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (575, 'RK12612', 'BUKILLA MANDIRI, PT', 'BlokF5No23 Taman Alamanda RT3/19 De', 'ID', '', 'Kab. Bekasi', 'IV01', 'BUKILLA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (576, 'RK12613', 'LEGATO GLOBAL ANEXTAMA, PT', 'No1 Gd Cocotown Lt6 Jl DR Ide Anak', 'ID', '12950', 'Jakarta', 'IV01', 'LEGATO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (577, 'RK12614', 'TENAGA KERJA PEMUDA MANDIRI PRO. GR', 'No22 Perumahan Parakan Mas Jl Parak', 'ID', '40293', 'Bandung', 'IV01', 'TENAGA KER', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (578, 'RK12615', 'FAMED CALIBRATION, PT', 'No11 Jl Radar AURI Ruko Pondok Cibu', 'ID', '16452', 'Depok', 'IV01', 'FAMED', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (579, 'RK12616', 'ERM Akademi Indonesia, PT', 'Jl Batununggal Indah IV No97', 'ID', '', 'BANDUNG', 'IV01', 'ERM AKADEM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (580, 'RK12617', 'MENARA KARYA INDONESIA, PT', 'LG 03/OFF Sahid Sudirman Residence', 'ID', '10220', 'Jakarta', 'IV01', 'MENARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (581, 'RK12618', 'HOTEL ALILA SOLO', 'Jl Slamet Riyadi No.562', 'ID', '57144', 'SURAKARTA', 'IV01', 'HOTEL ALIL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (582, 'RK12619', 'PARLINDUNGAN MARPAUNG', 'No. 10 Jl Jatayu Dlm V RT2/RW10, Hu', 'ID', '', 'BANDUNG', 'IV01', 'PARLINDUNG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (583, 'RK12620', 'SUMBER BERKAT SEMPURNA, PT', 'Lt17 Gd. Soho Pancoran Jl MT Haryon', 'ID', '', 'Jakarta', 'IV01', 'SUMBER', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (584, 'RK12621', 'YUAN GARDEN PASAR BARU', 'Jl Pintu Air V no53', 'ID', '', 'Jakarta', 'IV01', 'YUAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (585, 'RK12622', 'PUNDARIKA ATMA SEMESTA, PT', 'No22A-22B Jl Letjend Suprapto RT1/R', 'ID', '10520', 'Jakarta', 'IV01', 'PUNDARIKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (586, 'RK12623', 'REKAN SUKSES SEJAHTERA, PT', 'No1 Jl Cengkeh Dalam 22 Blok A RT07', 'ID', '', 'Jakarta', 'IV01', 'REKAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (587, 'RK12624', 'ASTON BOGOR HOTEL & RESORT', 'Jl Dreded Pahlawan Rangga Mekar', 'ID', '16132', 'Bogor', 'IV01', 'ASTON HOTE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (588, 'RK12625', 'Kas Negara PBB', 'Jl', 'ID', '', 'Jakarta', 'IV01', 'KAS NEGARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (589, 'RK12626', 'ARTHA KENCANA MANDIRI, PT', 'Gd Roxy Square LtUG Block B2 No5 To', 'ID', '', 'Jakarta', 'IV01', 'ARTHA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (590, 'RK12627', 'BINA MUDA SEJAHTERA, PT', 'Jl Raya Sawangan No3 Kel Rangkap Ja', 'ID', '', 'Depok', 'IV01', 'BINA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (591, 'RK12628', 'SINERGI BERSAMA KAWAN, PT', 'Jl Setiadarma II RT4/3 Kel Setiadar', 'ID', '', 'Kab. Bekasi', 'IV01', 'SINERGI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (592, 'RK12629', 'ICE BSD', 'Jl BSD Grand Boulevard Raya No1 BSD', 'ID', '15339', 'Tangerang', 'IV01', 'ICE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (593, 'RK12630', 'EDENSOR HILL & RESTO', 'Jl. Air Terjun No 11, Bojong Koneng', 'ID', '', 'Bogor', 'IV01', 'EDENSOR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (594, 'RK12631', 'MEDIA PIAR INDONESIA, PT', 'Gd. Dewan Pers Lt6 Jl Kebon Sirih N', 'ID', '', 'Jakarta', 'IV01', 'MEDIA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (595, 'RK12632', 'Hotel Santika Premiere ICE BSD City', 'l. BSD Grand Boulevard Raya No. 1,', 'ID', '15339', 'Tangerang', 'IV01', 'HOTEL SANT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (596, 'RK12633', 'BAYU BERKAH PERKASA, PT', 'Jl. Raya Bekasi KM 23 Cakung', 'ID', '', 'Jakarta', 'IV01', 'BAYU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (597, 'RK12634', 'NAMARA KARYA INDONESIA, CV', 'Jl Cemara VI/29 RT4RW2 Kel Ketami K', 'ID', '', 'KEDIRI', 'IV01', 'NAMARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (598, 'RK12635', 'KOKEK, PT', 'Jl. Prapen Indah J-12a', 'ID', '60292', 'SURABAYA', 'IV01', 'KOKEK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (599, 'RK12636', 'MAHKOTA MEDIA SEMESTA, CV', 'No42 B Jl Kebayoran Lama RT12/09 Ke', 'ID', '', 'Jakarta', 'IV01', 'MAHKOTA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (600, 'RK12637', 'LE DIAN HOTEL', 'No.88 Jl Jend Sudirman RT1/RW7 Kel', 'ID', '', 'Serang', 'IV01', 'LE DIAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (601, 'RK12638', 'Lembaga Pengembangan Perbankan Indo', 'Jl Kemang Raya Nomor 35', 'ID', '', 'JAKARTA', 'IV01', 'LPPI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (602, 'RK12639', 'BADAN PENDAPATAN DAERAH DKI JAKARTA', 'Jl. Abdul Muis No 66', 'ID', '', 'Jakarta', 'IV01', 'BAPENDA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (603, 'RK12640', 'MORRISSEY HOTEL', 'Jl. KH Wahid Hasyim No 70', 'ID', '', 'Jakarta', 'IV01', 'MORRISSEY', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (604, 'RK12641', 'INKA MULTI SOLUSI CONSULTING, PT', 'Jl Salak No23 Kel Taman Kec Taman K', 'ID', '', 'Madiun', 'IV01', 'INKA MULTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (605, 'RK12642', 'REKAINDO GLOBAL JASA, PT', 'Jl Candi Sewu No30 RT11/RW3 Kel Mad', 'ID', '63122', 'Madiun', 'IV01', 'REKAINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (606, 'RK12643', 'SINAR MEMOSSA PRATAMA, PT', 'Jl Waluku Raya No15 Babakan Sari, K', 'ID', '', 'Bandung', 'IV01', 'SINAR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (607, 'RK12644', 'KJPP TOBING PANUTURI DAN REKAN', 'The Walk No.38 (Jakarta Garden City', 'ID', '13910', 'Jakarta', 'IV01', 'KJPP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (608, 'RK12645', 'MITRA NIAGA RAYA, PT', 'Vila Mutiara Gading BlokB6 No6 Kel', 'ID', '', 'Kab. Bekasi', 'IV01', 'MITRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (609, 'RK12646', 'LINTAS DATA INDONESIA, PT', 'Lt28 Gd Menara Karya JL HR Rasuna S', 'ID', '', 'Jakarta', 'IV01', 'LINTAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (610, 'RK12647', 'CAHAYA DAYA SEJAHTERA, PT', 'No1/9 KO Citra Ruko Education Cente', 'ID', '', 'Kab. Tangerang', 'IV01', 'CAHAYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (611, 'RK12648', 'PERUMDA PALJAYA', 'Jl. Sultan Agung No. 1 Setiabudi', 'ID', '', 'Jakarta', 'IV01', 'PERUMDA PA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (612, 'RK12649', 'Lembaga Man. FE & Bisnis Univ Indon', 'Jl. Salemba Raya No. IV', 'ID', '', 'Jakarta Pusat', 'IV01', 'UNIVERSITA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (613, 'RK12650', 'PRIMACOM INTERBUANA, PT', 'Intl. Financial Centre II lt19 Jl J', 'ID', '12929', 'Jakarta', 'IV01', 'PRIMACOM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (614, 'RK12651', 'WAGON INDAH PERDANA, PT', 'Jl Raden Inten II no60 Kel Duren Sa', 'ID', '13440', 'Jakarta', 'IV01', 'WAGON', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (615, 'RK12652', 'CENTRAL MANDIRI UTAMA, CV', 'Jl Waliwis No1 Ds Kel Tanah Sareal', 'ID', '16161', 'Bogor', 'IV01', 'CENTRAL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (616, 'RK12656', 'HAYRAYHAN JUARA GLOBAL, PT', 'Lt2 Suite6 Graha DLA Jl Otto Iskand', 'ID', '', 'Bandung', 'IV01', 'HAYRAYHAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (617, 'RK12657', 'CAYAPATA GLOBAL SOLUSI, PT', 'Lt. 2 Kinanti Building Jl Epicentru', 'ID', '12940', 'JAKARTA', 'IV01', 'CAYAPATA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (618, 'RK12658', 'SEMBILAN SEMBILAN INTERAKSI, PT', 'Lt4 Virtual Business Office Gedung', 'ID', '12560', 'Jakarta', 'IV01', 'SEMBILAN S', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (619, 'RK12659', 'Fianis Florist', 'Pusat Bunga Ps. Radio Dalam Jl Ps I', 'ID', '', 'Jakarta', 'IV01', 'FIANIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (620, 'RK12660', 'NTT DATA BUSINESS SOLUTIONS, PT', 'Lt PH Wisma BCA Wing A Zona I Jl Ka', 'ID', '', 'Tangerang Selatan', 'IV01', 'NTT DATA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (621, 'RK12661', 'AKSARA SOLOPOS, PT', 'Griya Solopos Jl Adisucipto 190', 'ID', '57145', 'SOLO', 'IV01', 'SOLOPOS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (622, 'RK12662', 'UANG MUKA', 'Juanda Jakarta Pusat', 'ID', '', 'JAKARTA', 'IV01', 'UANG MUKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (623, 'RK12664', 'PRIMA TUNGGAL JAVALAND, PT', 'No 23-25 Komp Ruko Mutiara Blok A6', 'ID', '11730', 'Jakarta', 'IV01', 'PRIMA TUNG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (624, 'RK12665', 'BIOSIS MULTI JAYA, PT', 'Ruko Menteng Niaga J7-10 Jl Menteng', 'ID', '', 'Jakarta', 'IV01', 'BIOSIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (625, 'RK12666', 'GANDAR CAKRA UTAMA, PT', 'No8 Jl Raya Susukan Kel Penarusan K', 'ID', '53475', 'Jawa Tengah', 'IV01', 'GANDAR CAK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (626, 'RK12667', 'INDOSTORAGE SOLUSI TEKNOLOGI, PT', 'Level 12 The CEO Building Jl TB Sim', 'ID', '12430', 'Jakarta', 'IV01', 'INDOSTORAG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (627, 'RK12668', 'ZANUGA ARSA PANGESTU, PT', 'No.18L Ruko Lubang Buaya Jl Raya Po', 'ID', '13810', 'Jakarta', 'IV01', 'ZANUGA ARS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (628, 'RK12669', 'ASURANSI JIWA IFG, PT', 'LT.21 GRAHA CIMB NIAGA JL. LETJEN S', 'ID', '', 'Jakarta', 'IV01', 'IFG LIFE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (629, 'RK12670', 'EL HOTEL ROYALE', 'Jl. Merdeka No 2', 'ID', '40111', 'Bandung', 'IV01', 'EL HOTEL R', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (630, 'RK12673', 'KRIYA REKA KOMUNIKA, PT', 'No. 56 Jl Bendungan Hilir Raya Kel', 'ID', '', 'Jakarta', 'IV01', 'KRIYA REKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (631, 'RK12674', 'ASRI ADVERTISING', 'Jl Utan Panjang Barat no6 Kemayoran', 'ID', '', 'Jakarta', 'IV01', 'ASRI ADVER', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (632, 'RK12675', 'AKSELERASI EKSELENSIA BERDAYA, PT', 'The 18th Office Park 10th A Floor J', 'ID', '12520', 'Jakarta', 'IV01', 'AKSELERASI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (633, 'RK12676', 'SINERGI ELANG TANGGUH, PT', 'No37 RT1/6 Infiniti Office Ruko Per', 'ID', '11630', 'Jakarta', 'IV01', 'SINERGI EL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (634, 'RK12700', 'BPD DAERAH ISTIMEWA YOGYAKARTA', 'Jl Tentara Pelajar No7 RT36/RW8 Bum', 'ID', '55233', 'Yogyakarta', 'IV01', 'BPD DIY', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (635, 'RK12701', 'ASA MULIA, PT', 'Klodran RT 01, RW 04, Colomadu, Kar', 'ID', '', 'Karanganyar', 'IV01', 'ASA MULIA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (636, 'RK12702', 'HARRIS HOTEL', 'Jl Jend Sudirman No1 Sentul City', 'ID', '16810', 'Bogor', 'IV01', 'HARRIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (637, 'RK12703', 'PRISINDO PRIMA UTAMA, PT', 'Blk PE no7 Jl Raya Kelapa Hybrida K', 'ID', '', 'JAKARTA', 'IV01', 'PRISINDO P', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (638, 'RK12704', 'CHRIS JAYA PRATAMA, PT', 'No.1 Jl Raya Narogong KM 22,5 Kp Ci', 'ID', '16820', 'Kab. Bogor', 'IV01', 'CHRIS JAYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (639, 'RK12705', 'INSTRAN', 'Jl Rawajati Barat V No33 RT5/4 Panc', 'ID', '', 'Jakarta', 'IV01', 'INSTRAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (640, 'RK12706', 'BONAFIT MULTI SUKSES, PT', 'No. 34-36  SENTRA SALEMBA MAS Blok.', 'ID', '', 'Jakarta', 'IV01', 'BONAFIT MU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (641, 'RK12707', 'NITA JAYA PRATAMA, PT', 'No 20 Rukan Puri Botanic Residence', 'ID', '', 'Jakarta', 'IV01', 'NITA JAYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (642, 'RK12708', 'BANK BNI', 'BANK BNI', 'ID', '', 'JAKARTA', 'IV01', 'BANK BNI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (643, 'RK12709', 'Ban​k MANDIRI', 'Ban​k MANDIRI', 'ID', '', 'Jakarta', 'IV01', 'BAN​K MAND', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (644, 'RK12710', 'Bank BRI', 'Bank BRI', 'ID', '', 'Jakarta', 'IV01', 'BANK BRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (645, 'RK12711', 'Bank BCA', 'Bank BCA', 'ID', '', 'Jakarta', 'IV01', 'BANK BCA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (646, 'RK12712', 'ASHLEY HOTEL', 'No 73-75 Jl KH Wahid Hasyim Menteng', 'ID', '10250', 'Jakarta', 'IV01', 'ASHLEY HOT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (647, 'RK12713', 'BITRI INDONESIA, PT', 'NO.14A RUKO GRAND PASAR MINGGU JL R', 'ID', '', 'Jakarta', 'IV01', 'BITRI INDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (648, 'RK12714', 'PULLMAN CIAWI HOTEL & RESORT', 'Jl. Raya Puncak Gadog, Gadog, Kec.', 'ID', '16770', 'Kab. Bogor', 'IV01', 'PULLMAN CI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (649, 'RK12715', 'DUNIA SAFTINDO, PT', 'HWI Lindeteves Blok. A Loo Utk. 011', 'ID', '11180', 'Jakarta', 'IV01', 'DUNIA SAFT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (651, 'RK12717', 'Desa Alamanis Ressort Vila Cirebon', 'Jl. Raya Cirebon Kuningan, Beber', 'ID', '45172', 'Cirebon', 'IV01', 'DESA ALAMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (652, 'RK12718', 'KITA BAGUS SEJAHTERA, PT', 'Ruko Daan Mogot Arcadia Blok H5/23', 'ID', '15122', 'Tangerang', 'IV01', 'KITA BAGUS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (653, 'RK12719', 'Ikatan Apoteker Indonesia', 'Jl. Wijaya Kusuma No. 17, Jatipulo,', 'ID', '11430', 'Jakarta', 'IV01', 'IKATAN APO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (654, 'RK12720', 'Santika Gubeng Hotel', 'Jl. Raya Gubeng No. 54, Gubeng', 'ID', '60281', 'Surabaya', 'IV01', 'SANTIKA PR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (655, 'RK12721', 'Mitra Kalyana Sejahtera, PT', 'Jl Batununggal Jelita V no.15', 'ID', '40267', 'Bandung', 'IV01', 'MITRA KALY', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (656, 'RK12722', 'ORIENTAMA LINTAS BUANA, PT', 'No. 1-2 Kantor Mega Glodok Kemayora', 'ID', '10610', 'Jakarta', 'IV01', 'ORIENTAMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (657, 'RK12723', 'CARBEK NUSANTARA, PT', 'No 54 Jl Mujair Raya Rt/Rw 01/08 Ke', 'ID', '', 'Jakarta', 'IV01', 'CARBEK NUS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (658, 'RK12724', 'LENTERA BAHARI PUTRA MAS, PT', 'No 3 Rukan Centra Niaga Blok H Gree', 'ID', '', 'Jakarta', 'IV01', 'LENTERA BA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (659, 'RK12725', 'CBC INDONESIA, PT', 'Secure Building Blok C. Jl. Protoko', 'ID', '13610', 'JAKARTA', 'IV01', 'CBC INDONE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (660, 'RK12726', 'ASTA BUMI CIPTA, PT', 'Lt7 Lippo Thamrin Unit 001 Jl. M.H.', 'ID', '', 'JAKARTA', 'IV01', 'ASTA BUMI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (661, 'RK12727', 'HOLIAWISATA INDAH, PT', 'Lt8 iNws CenterMNCCenter Complex,Jl', 'ID', '', 'JAKARTA', 'IV01', 'HOLIAWISAT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (662, 'RK12728', 'INDO RENTAL MEDIA, PT', 'no31 Ruko Metro Indah Mall Blok I K', 'ID', '', 'Bandung', 'IV01', 'INDO RENTA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (663, 'RK12729', 'YAKASPI', 'Jl KH Abdullah Syafei A17, Kebon Ba', 'ID', '', 'Jakarta', 'IV01', 'YAKASPI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (664, 'RK12730', 'R HOTEL RANCAMAYA', 'Jl. Rancamaya Utama Bogor', 'ID', '16720', 'Bogor', 'IV01', 'R HOTEL RA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (665, 'RK12731', 'GRAHA PRATAMA SERVICE', 'Jl. Kyai Tapa, Mall Roxy Square Lt.', 'ID', '10620', 'Jakarta', 'IV01', 'GRAHA PRAT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (666, 'RK12732', 'ELECTRONIC DATA INTERCHANGE INDONES', 'Wisma SMR Lt10 & 3 Jl Yos Sudarso K', 'ID', '14350', 'Jakarta', 'IV01', 'EDI INDONE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (667, 'RK12733', 'RAFF MITRA SOLUSINDO, PT', 'no. 180 Jl Kumbang Raya RT6/7 Pegad', 'ID', '11830', 'Jakarta', 'IV01', 'RAFF MITRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (668, 'RK12734', 'ASURANSI UMUM MEGA, PT', 'Lt. 18  Menara Bank Mega Jl. Kapten', 'ID', '12790', 'Jakarta', 'IV01', 'ASURANSI U', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (669, 'RK12735', 'PUNGKI PURNADI ASSOCIATES', 'Kp. Kecil, Sukabumi Selatan, Kebon', 'ID', '11560', 'Jakarta', 'IV01', 'PUNGKI PUR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (670, 'RK12736', 'ARCS HOUSE, PT', 'Jl Peteran III Tapos No.63 Desa Jam', 'ID', '', 'Kab. Bogor', 'IV01', 'ARCS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (671, 'RK13188', 'Anugerah Karya Pesona, PT', 'no.79 Komplek Pergudangan Green Sed', 'ID', '', 'Jakarta', 'IV01', 'ANUGERAH K', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (672, 'RK1575', 'Barata Indonesia (Persero), PT', 'JL. VETERAN No. 241', 'ID', '', 'GRESIK', 'IV01', 'BARATA IN', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (673, 'RK1609', 'MUKTI SARANA, CV', 'Jl.KENONGO SARI II/IA,PEPELIGI WARU', 'ID', '', 'JAKARTA', 'IV01', 'MUKTI SARA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (674, 'RK1845', 'CHANDRA JAYA LESTARI, PT', 'JL. SATURNUS RAYA NO. 48', 'ID', '', 'BANDUNG', 'IV01', 'CHANDRA JA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (675, 'RK1916', 'NATRACO TUNAS CITRA, PT.', 'JL. BANCEUY NO. 2/7 KEL.BRAGA KEC.S', 'ID', '', 'BANDUNG', 'IV01', 'NATRACO TU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (676, 'RK1963', 'SUKSES CITRA INDOTAMA, CV', 'Jl.DR.M.ISA NO.135/3B', 'ID', '', 'PALEMBANG', 'IV01', 'SUKSES CIT', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (677, 'RK1988', 'ADHIRA NUSA PERSADA, CV', 'Jl.CIPINANG CAMPEDAK IV/38 JAKARTA', 'ID', '', 'JAKARTA', 'IV01', 'ADHIRA NUS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (678, 'RK1995', 'BHINNEKA KARYA PUTRA MANDIRI, PT', 'RAYA BOGOR NO. 109B RT.5 RW.10 KRAM', 'ID', '', 'JAKARTA', 'IV01', 'BHINNEKA K', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (679, 'RK1997', 'BRINNATAMA MITRA RAYA, PT', 'Jl.CEMPAKA SARI III NO.1 RT.010/RW.', 'ID', '', 'JAKARTA', 'IV01', 'BRINNATAMA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (680, 'RK1998', 'BUDI SETIA, CV', 'Jl.KRAMAT RAYA BARU E9/259 JAKARTA', 'ID', '', 'JAKARTA', 'IV01', 'BUDI SETIA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (681, 'RK1999', 'CAHAYA BERKAT SEJAHTERA UTAMA, PT', 'Jl.TAMAN CIBODAS C 15 NO.4', 'ID', '', 'TANGERANG', 'IV01', 'CAHAYA BER', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (682, 'RK2000', 'CARBON & ELECTRIC, PT', 'Jl Raya Rungkut No 30 Kel Kalirungk', 'ID', '60293', 'SURABAYA', 'IV01', 'CARBON & E', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (683, 'RK2001', 'CITRA ELEKTROTEHNIKA NUSANTARA, PT', 'Jl.RAYA BOGOR NO 28 KRAMAT JATI', 'ID', '', 'JAKARTA', 'IV01', 'CITRA ELEK', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (684, 'RK2002', 'DADI MAKMUR, PT.', 'JL. JAMBORE CIBUBUR INDAH VILLA BLO', 'ID', '', 'JAKARTA', 'IV01', 'DADI MAKMU', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (685, 'RK2003', 'DANA DRIYAH SEJAHTERA, PT', 'JL.DR.SAHARDJO GG.BODONG NO.14', 'ID', '', 'JAKARTA', 'IV01', 'DANA DRIYA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (686, 'RK2005', 'DIAN PRATAMA, CV', 'Jl.CIPINANG MELAYU NO.36', 'ID', '', 'JAKARTA', 'IV01', 'DIAN PRATA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (687, 'RK2006', 'DIAN TEKNIK, CV', 'JL. RAWAMANGUN MUKA BARAT NO. D/4', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'DIAN TEKNI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (688, 'RK2011', 'GHEMACO, CV', 'Jl.CIDODOL RAYA NO.9 KEL.GROGOL JAK', 'ID', '', 'JAKARTA', 'IV01', 'GHEMACO, C', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (689, 'RK2012', 'HASTA PRIMA, CV', 'Jl.BALIMATRAMAN NO.14 JAK', 'ID', '', 'JAKARTA', 'IV01', 'HASTA PRIM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (690, 'RK2018', 'KARUNIA PUTRA SEKAWAN, PT', 'JL. Dr. SUSILO III No.29 Grogol Jak', 'ID', '', 'JAKARTA', 'IV01', 'KARUNIA PU', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (691, 'RK2020', 'KELANA MANDIRI TEKNIK, PT', 'Jl. RAYA KARANGTENGAH CIBADAK', 'ID', '', 'SUKABUMI', 'IV01', 'KELANA MAN', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (692, 'RK2022', 'KEVINDO PRATAMA, CV', 'JL. MINANGKABAU NO. 38 PASAR MANGGI', 'ID', '', 'JAKARTA', 'IV01', 'KEVINDO PR', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (693, 'RK2023', 'KOKARYASA, CV', 'Jl.JAMBORE RAYA BLOK V2 NO.26 CIBUB', 'ID', '', 'JAKARTA', 'IV01', 'KOKARYASA,', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (694, 'RK2024', 'KOPERASI KARYASA', 'Jl.BUKIT DURI UTARA NO.1 JAKARTA SE', 'ID', '', 'JAKARTA', 'IV01', 'KOPERASI K', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (695, 'RK2025', 'KOPKAR PEKERTI', 'Jl.BUKIT DURI TANJAKAN NO.1 SELAT', 'ID', '', 'JAKARTA', 'IV01', 'KOPKAR PEK', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (696, 'RK2026', 'KOPKAR SEJATI', 'Jl.MA SALMUN NO.2 KEL.CIBOGOR-BOGOR', 'ID', '', 'BOGOR', 'IV01', 'KOPKAR SEJ', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (697, 'RK2027', 'KUTILANG PAKSI MAS, PT', 'JL. MAHAKAM I NO 11 B KERAMAT PELA', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'KUTILANG P', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (698, 'RK2035', 'MERKAH JAYA UTAMA, CV', 'Jl.PEDATI RAYA 12 A', 'ID', '', 'JAKARTA', 'IV01', 'MERKAH JAY', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (699, 'RK2036', 'MIA AULIA, PT.', 'JL. H SULAIMAN NO. 47', 'ID', '', 'JAKARTA', 'IV01', 'MIA AULIA,', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (700, 'RK2038', 'MISGA TALENTA KARYA, CV', 'Jl.KARET PASAR BARU TIMUR RT.014/00', 'ID', '', 'JAKARTA', 'IV01', 'MISGA TALE', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (701, 'RK2040', 'MITRA USAHA LESTARI, CV', 'JL. KH.HASYIM ASHARI NO.25-B Jakart', 'ID', '', 'JAKARTA', 'IV01', 'MITRA USAH', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (702, 'RK2042', 'MAJA SUMBER KEMENANGAN, CV', 'Jl.JATI V D NO 12A JAKARTA', 'ID', '', 'JAKARTA', 'IV01', 'MUSINAGA M', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (703, 'RK2043', 'NUR SAHARA PRATAMA, PT', 'Jl.KOMPLEK TNI AL USMAN HARUN I CAW', 'ID', '', 'JAKARTA', 'IV01', 'NUR SAHARA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (704, 'RK2044', 'NUSA JAYA SEJAHTERA, CV', 'JL. OTISTA RAYA NO.141 JAKARTA', 'ID', '', 'JAKARTA', 'IV01', 'NUSA JAYA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (705, 'RK2045', 'PANDANARAN BANGKIT, PT', 'RUKO PERMATA DEPOK TOKO A NO.A01 RT', 'ID', '', 'DEPOK, JAWA BARAT', 'IV01', 'PANDANARAN', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (706, 'RK2046', 'PATROMAN, CV', 'Jl. Sadar Raya No.12A Ciganjur Jaga', 'ID', '', 'JAKARTA', 'IV01', 'PATROMAN,', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (707, 'RK2047', 'ANUGERAH AGUNG SUKSESINDO, PT.', 'JL. JOMAS 7 RT 007/05  MARUYA UTARA', 'ID', '', 'JAKARTA', 'IV01', 'ANUGERAH A', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (708, 'RK2048', 'PERDANA MANDIRI MEKANINDO, PT', 'JL.Dr Saharjo No.115 BX RT.002 RW.0', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'PERDANA MA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (709, 'RK2049', 'PRIMA PERKASA, CV', 'JL.KS .TUBUN II A NO.4A JAKARTA', 'ID', '', 'JAKARTA', 'IV01', 'PRIMA PERK', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (710, 'RK2050', 'PT. PUTRA PERKASA SAKTI', 'JL.MINANGKABAU NO.38 JAK-SEL', 'ID', '', 'JAKARTA', 'IV01', 'PUTRA PERK', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (711, 'RK2051', 'CV. RAJAWALI MUDA PERKASA', 'JL. JOHAR BARU V NO. 5 JAKARTA PUSA', 'ID', '', 'JAKARTA', 'IV01', 'RAJAWALI M', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (712, 'RK2052', 'RENI PUTRI SEJATI, PT', 'JL. SENEN RAYA NO. 50', 'ID', '', 'JAKARTA', 'IV01', 'RENI PUTRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (713, 'RK2054', 'DIRI SENDIRI RS.ISLAM JAKARTA TIMUR', 'JL.RAYA PONDOK KOPI JAKARTA TIMUR', 'ID', '', 'JAKARTA', 'IV01', 'R U E, CV', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (714, 'RK2060', 'SUMBER SEJAHTERA, CV', 'JL. Dr. SUSILO III/29 GROGOL', 'ID', '', 'JAKARTA BARAT', 'IV01', 'SUMBER SEJ', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (715, 'RK2061', 'SURYA MAS, CV', 'JL. KEMUKUS NO. 32 BLOK B 6', 'ID', '', 'JAKARTA BARAT', 'IV01', 'SURYA MAS,', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (716, 'RK2063', 'TIDAR JAYA, CV', 'Jl.HALIM GOLF GG.BUNGA NO 16C JAKTI', 'ID', '', 'JAKARTA', 'IV01', 'TIDAR JAYA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (717, 'RK2067', 'WINESTI CITRA PERDANA, CV', 'Jl.RAWASARI TENGAH RT.002/06', 'ID', '', 'JAKARTA', 'IV01', 'WINESTI CI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (718, 'RK2068', 'YATIFA TEKNIK, CV', 'Jl.HARPA I/AA NO.26 KELAPA GADING', 'ID', '', 'JAKARTA', 'IV01', 'YATIFA TEK', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (719, 'RK2069', 'CAKRABUANA PESONA, PT', 'Jl Komplek Permata Arcamanik NoB6 R', 'ID', '', 'BANDUNG', 'IV01', 'CAKRABUANA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (720, 'RK2116', 'KARYA GEMILANG MANDIRI, CV', 'Taman Gejayan ASRI KAV 15 Dabag, Rt', 'ID', '', 'Yogyakarta', 'IV01', 'KARYA GEMI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (721, 'RK2167', 'PROXSIS GLOBAL SOLUSI, PT.', 'Gd Permata Kuningan Lt17 Unit07 Jl', 'ID', '', 'JAKARTA', 'IV01', 'PROXSIS GL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (722, 'RK2232', 'ASIAMAJU SELARAS, PT', 'Jl. Letjen MT. Haryono Kav. 17, RT', 'ID', '', 'Jakarta', 'IV01', 'ASIAMAJU S', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (723, 'RK2255', 'HARAPAN BARU, CV', 'Jl. Kulintang /Harpa I Blok RA KAV', 'ID', '', 'JAKARTA', 'IV01', 'HARAPAN BA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (724, 'RK2405', 'BANK NEGARA INDONESIA (Persero), PT', 'JL. JEND. SUDIRMAN KAV. 1', 'ID', '10220', 'JAKARTA', 'IV01', 'BANK NEGAR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (725, 'RK2448', 'BINTANG TIMUR, CV', 'JL. BATU API I NO. 3', 'ID', '', 'BANDUNG', 'IV01', 'BINTANG TI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (726, 'RK2791', 'KA PARIWISATA, PT', 'JRC Building GF, Jl. Ir. H. Juanda', 'ID', '', 'JAKARTA', 'IV01', 'KA PARIWIS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (727, 'RK2999', 'LAKSANA BINTANG JAKARTA, PT', 'GEDUNG GRAND MENTENG LT. 2 JL. MATR', 'ID', '', 'JAKARTA', 'IV01', 'LAKSANA BI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (728, 'RK30156', 'TIM UPZ KAI ZAKAT', 'KANTOR PUSAT', 'ID', '', 'BANDUNG', 'IV01', 'TIM UPZ KA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (729, 'RK3061', 'MEDIA TELEVISI INDONESIA, PT', 'JL. Pilar Mas Raya Kav. A-D Kedoya,', 'ID', '11520', 'JAKARTA', 'IV01', 'MEDIA TELE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (730, 'RK3062', 'MEDIASUARA SHAKTI, PT', 'JL. MH. THAMRIN 11', 'ID', '10530', 'JAKARTA', 'IV01', 'MEDIASUARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (731, 'RK3076', 'MERCU BUANA, CV', 'JL. JEND. A. YANI NO. 238', 'ID', '', 'BANDUNG', 'IV01', 'MERCU BUAN', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (732, 'RK3257', 'PLN DISTRIBUSI JAK & TANGERANG, PT', 'JL. MOHAMMAD IKHWAN RIDWAN RAIS NO.', 'ID', '', 'JAKARTA', 'IV01', 'PLN DISTRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (733, 'RK3302', 'PPM MANAJEMEN', 'JL. MENTENG RAYA 9 KEBON SIRIH', 'ID', '10340', 'JAKARTA', 'IV01', 'PPM MANAJE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (734, 'RK3320', 'PRO LESTARI, PT', 'JL. AWILIGAR RAYA NO. 246', 'ID', '', 'BANDUNG', 'IV01', 'PRO LESTAR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (735, 'RK3333', 'PURA BARUTAMA, PT.', 'JL. AKBP R AGIL KUSUMADYA 203 - KUD', 'ID', '', 'KUDUS', 'IV01', 'PURA BARUT', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (736, 'RK3342', 'BINAMAN UTAMA, PT', 'Jl. Menteng Raya No. 9, Kebon Sirih', 'ID', '10340', 'Jakarta Pusat', 'IV01', 'BINAMAN UT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (737, 'RK3367', 'RESKA MULTI USAHA, PT.', 'No.1 Stasiun Mangga Besar Jl. Karan', 'ID', '', 'Jakarta', 'IV01', 'RMU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (738, 'RK3462', 'SHERATON HOTEL BANDUNG', 'JL. IR. H. JUANDA NO. 390 Dago,', 'ID', '40135', 'BANDUNG', 'IV01', 'SHERATON H', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (739, 'RK3523', 'TELEKOMUNIKASI SELULAR, PT', 'Gd Telkom Landmark Tower Menara 1 L', 'ID', '', 'JAKARTA', 'IV01', 'TELEKOMUNI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (740, 'RK3545', 'TRANSITO ADIMAN JATI, PT', 'JL. KERAJINAN RAYA NO. 3', 'ID', '', 'JAKARTA', 'IV01', 'TRANSITO A', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (741, 'RK3613', 'YAYASAN PENDIDIKAN INTERNAL AUDIT', '12780 L’Avenue Office Tower, Lt. 17', 'ID', '', 'Jakarta', 'IV01', 'YAYASAN PE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (742, 'RK3625', 'SUMBER USAHA RADIATOR, PT', 'Jl. Pilar Sukatani No.189,  Kp. Kan', 'ID', '', 'Bekasi', 'IV01', 'SUMBER USA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (743, 'RK3663', 'PRABA SAPUTRA JAYA, CV', 'Jl. Jangkang Babadan Rt.03/10 Wedom', 'ID', '', 'SLEMAN', 'IV01', 'PRABA SAPU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (744, 'RK3666', '"INDOSAT, PT, TBK', 'Jl. Medan Merdeka Barat No.21', 'ID', '10110', 'Jakarta', 'IV01', 'INDOSAT, P', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (745, 'RK3709', 'PILAR SEMBILAN ABADI, PT', 'Jl Palapa VI No.56 RT/RW.01/05 Labu', 'ID', '', 'BANDAR LAMPUNG', 'IV01', 'PILAR SEMB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (746, 'RK3801', 'SUKSES CITRA SEJAHTERA, PT', 'Jl. Perintis Kemerdekaan No. 07 RT.', 'ID', '', 'PALEMBANG', 'IV01', 'SUKSES CIT', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (747, 'RK3822', 'HEKSA GARDA UTAMA, PT', 'JL. KENCANA WANGI UTARA NO.1 RT.010', 'ID', '', 'BANDUNG', 'IV01', 'HEKSA GARD', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (748, 'RK3832', 'MUSINAGA FIBERGLASS, CV', '', 'ID', '', 'JAKARTA', 'IV01', 'MUSINAGA F', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (749, 'RK3833', 'PT PRIMA RAYA DINAMIKA', 'NO.20 JL. RE MARTADINATA ANCOL RUKO', 'ID', '14420', 'JAKARTA', 'IV01', 'PRIMA RD', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (750, 'RK3847', 'PT. ADRIANO DWITAMA', 'JL. MINAGKABAU NO.38 RT.001/001 JAK', 'ID', '', 'JAKARTA', 'IV01', 'ADRIANO DW', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (751, 'RK3850', 'GLOBAL SARANA KARYA, PT', 'Jl.PASAR PAGI BINTARA BLOK C KAV.1-', 'ID', '', 'BEKASI', 'IV01', 'GLOBAL SAR', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (752, 'RK3851', 'INDO GIAT KREASINDO, PT', 'JL. KH. HASYIM ASHARI NO.25 PETOJO', 'ID', '', 'JAKARTA', 'IV01', 'INDO GIAT', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (753, 'RK3853', 'MEGA PRIMA MULIA, PT', 'Jl. Administrasi Negara I No. 12A K', 'ID', '', 'JAKARTA', 'IV01', 'MEGA PRIMA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (754, 'RK3855', 'MITRA WAHANA KARUNIA, PT', 'JL. PURI KENCANA, RUKAN PURI KENCAN', 'ID', '', 'JAKARTA BARAT', 'IV01', 'MITRA WAHA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (755, 'RK3861', 'SINAR KASIH ANUGRAH, PT', 'Jl. Pesanggrahan Raya No. 10 D Kemb', 'ID', '', 'JAKARTA', 'IV01', 'SINAR KASI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (756, 'RK3862', 'INDUSTRI KERETA API (PERSERO), PT.', 'JL. YOS SUDARSO NO.71 MADIUN 63122', 'ID', '', 'MADIUN', 'IV01', 'INDUSTRI K', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (757, 'RK3863', 'VAZIL BERSAUDARA, PT', 'JL.RAYA CIDODOL NO.8 GROGOL SELATAN', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'VAZIL BERS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (758, 'RK3902', 'MULTIPRIMA INDOSEJAHTERA, PT', 'KOMPLEK RUKO HARMONI MAS BLOK D NO.', 'ID', '', 'JAKARTA', 'IV01', 'MULTIPRIMA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (759, 'RK3912', 'CITRA SELARAS MITRA RAYA, PT', 'JL. SLAMET NO. 25 TW.08 RW.01', 'ID', '', 'TEGAL', 'IV01', 'CITRA SELA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (760, 'RK3950', 'OSHA ASIA, PT', 'KMO Building Lt 9, Kyai Maja No. 2', 'ID', '', 'Jakarta Selatan', 'IV01', 'OSHA ASIA,', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (761, 'RK3966', 'RATNA ARSA NUGRAHA, PT', 'Jl Merak No 50 Banjarsari Kel Nglor', 'ID', '57215', 'Jawa Tengah', 'IV01', 'RATNA ARSA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (762, 'RK4025', 'MAFIR SENTOSA LESTARI, PT', 'Jl. Pahlawan Revolusi No. 24a RT. 0', 'ID', '', 'JAKARTA', 'IV01', 'MAFIR SENT', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (763, 'RK4054', 'PUTRA MIRA SEJAHTERA, PT', 'Jl.KH.ABDULLAH SYAFEI,KEBON BARU', 'ID', '', 'JAKARTA', 'IV01', 'PUTRA MIRA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (764, 'RK4165', 'DELTA SAMITRA UTAMA, PT', 'Gedung perkantoran gandaria 8 LT 8', 'ID', '', 'JAKARTA', 'IV01', 'DELTA SAMI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (765, 'RK4201', 'SUMBER KARUNIA GUNA, PT', '43 Komp Ruko Daan Mogot Baru', 'ID', '', 'JAKARTA', 'IV01', 'SUMBER KAR', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (766, 'RK4237', 'JUSTIKA SIAR PUBLIKA, PT', 'Puri Imperium Office Plaza, Unit G-', 'ID', '', 'JAKARTA', 'IV01', 'JUSTIKA SI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (767, 'RK4281', 'TITIAN KARYA MANDIRI, PT', 'JLN.KH ABDULAH SAFE''I BLOK A NO.29', 'ID', '', 'JAKARTA', 'IV01', 'TITIAN KAR', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (768, 'RK4324', 'BSI GROUP INDONESIA, PT', 'lt20 Talavera Office Suite Jl TB Si', 'ID', '12430', 'JAKARTA', 'IV01', 'BSI GROUP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (769, 'RK4327', 'ULIH SABAR, PT', 'Graha Komando Lt.3, Jl. Cipinang In', 'ID', '', 'Jakarta Timur', 'IV01', 'ULIH SABAR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (770, 'RK4357', 'ESSA INTEGRATOR, PT', 'JL. CBC SLT RUKO PMP Tematik N/12 D', 'ID', '', 'TANGERANG', 'IV01', 'ESSA INTEG', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (771, 'RK4389', 'PANCARAN AIR  HIDUP, PT', 'JL. DR. MEKALIWE  RAYA NO. 43A GROG', 'ID', '', 'JAKARTA', 'IV01', 'PANCARAN A', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (772, 'RK4432', 'HERDIAN  NURITA, CV', 'JL. NUSA  INDAH  VII  BLOK N7/5 BEK', 'ID', '', 'BEKASI', 'IV01', 'HERDIAN  N', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (773, 'RK4439', 'INDO MATRA FUMIGA, PT', 'JL. MURADI 1 NO.18 KALIBANTENG KULO', 'ID', '', 'SEMARANG', 'IV01', 'INDO MATRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (774, 'RK4474', 'ISMALAB PASUTRI MANDIRI, PT.', 'Jl. Tebet Timur Dalam Raya No. 69,', 'ID', '', 'Jakarta', 'IV01', 'ISMALAB PA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (775, 'RK4495', 'ALPHA MANUNGGAL SEJATI. PT', 'Jl. HOS. Cokroaminoto No.74 Kel.Pan', 'ID', '', 'MADIUN', 'IV01', 'ALPHA MANU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (776, 'RK4574', 'LUSAVINDRA JAYAMADYA, PT.', 'Komp. Duta Harapan Indah Blok H/40', 'ID', '14460', 'JAKARTA UTARA', 'IV01', 'LUSAVINDRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (777, 'RK4611', 'NOA JAYA, PT.', 'OTISTA RAYA NO. 141 RT.006 RW 008 B', 'ID', '13330', 'JAKARTA', 'IV01', 'NOA JAYA,', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (778, 'RK4711', 'LEUSER TRI SAKATAMA, PT.', 'Jl. Raya Kebayoran Lama No.194 A Bl', 'ID', '', 'Jakarta Selatan', 'IV01', 'LEUSER TRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (779, 'RK4740', 'COMPAREX INDONESIA, PT.', 'Sona Topas Tower Lt.06, Jl. Jend. S', 'ID', '', 'Jakarta Selatan', 'IV01', 'COMPAREX I', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (780, 'RK4753', 'NUTECH INTEGRASI, PT.', 'Jl. Tanjung Barat Raya No. 17 Pasar', 'ID', '12510', 'Jakarta Selatan', 'IV01', 'NUTECH INT', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (781, 'RK4756', 'GENTA BUANA MULIA, PT.', 'Kav.18 AXA tower lt. 45, Jl. Prof.', 'ID', '12940', 'Jakarta', 'IV01', 'GENTA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (782, 'RK4759', 'YOSNAEL PUTRA SEJATI, PT.', 'Jalan Cikajang Raya no.67A Antapani', 'ID', '', 'Bandung', 'IV01', 'YOSNAEL PU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (783, 'RK4789', 'GJ INTERNATIONAL, PT', 'Jl.JEND SUDIRMAN KAV.7-8 WISMA NUGR', 'ID', '', 'JAKARTA', 'IV01', 'GJ INTERNA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (784, 'RK4834', 'YAYASAN PUSAKA', 'JL.PERINTIS KEMERDEKAAN NO 1 BANDUN', 'ID', '', '', 'IV01', 'YAYASAN PU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (785, 'RK4838', 'KURNIA RIZKI JAYA LESTARI, PT', 'JL. PADAT KARYA PERUM VINA SEJAHTER', 'ID', '', 'PRABUMULIH', 'IV01', 'KURNIA RIZ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (786, 'RK4854', 'KOBAYASA, PT', 'Jl. DR SAHARJO NO.115BX MANGGARAI,', 'ID', '', 'JAKARTA', 'IV01', 'KOBAYASA,', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (787, 'RK4855', 'PERSADA TEKNIK, CV', 'Jl.LAUT SULAWESI B4/4 DUREN SAWIT J', 'ID', '', 'JAKARTA', 'IV01', 'PERSADA TE', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (788, 'RK4856', 'ITQON INTI PERKASA, PT', 'Jl.DR.SAHARJO NO.104/3 KEL.MENTENG', 'ID', '', 'JAKARTA', 'IV01', 'ITQON INTI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (789, 'RK4857', 'MECHATRONICS INTERNASIONAL,PT', 'JL.JEND SUDIRMAN KAV 7-8 KARET TENG', 'ID', '', 'JAKARTA', 'IV01', 'MECHATRONI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (790, 'RK4862', 'TELEKOMUNIKASI INDONESIA Tbk, PT.', 'Menara Multimedia Jl. Kebon Sirih N', 'ID', '10110', 'Jakarta', 'IV01', 'TELKOM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (791, 'RK4897', 'KARUNIA ABADI UTAMA, PT', 'JL. PLOSO TIMUR BUNTU NO. 4 TAMBAKS', 'ID', '60133', 'SURABAYA', 'IV01', 'KARUNIA AB', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (792, 'RK4901', 'PAM JAYA / PALYJA', 'JAKARTA', 'ID', '', 'JAKARTA', 'IV01', 'PAM JAYA /', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (793, 'RK4914', 'PT. MALIBU LANCAR ABADI', 'JL. PEGANGSAAN TIMUR NO.1,PEGANGSAA', 'ID', '', 'Jakarta', 'IV01', 'PT. MALIBU', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (794, 'RK4929', 'SHELLINDO JAYA, PT.', '15313 TAMAN TEKNO SEK.XI BLOK E1/26', 'ID', '', 'TANGERANG', 'IV01', 'SHELLINDO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (795, 'RK4933', 'HERMON PANCAKARSA LIBRATAMA, PT.', 'Puri Anjasmoro H 5/7, Tawangsari', 'ID', '', 'SEMARANG', 'IV01', 'HERMON PAN', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (796, 'RK4976', 'PP ARGHAJATA CONSULTING', 'Gedung Bursa Efek Indonesia, Menara', 'ID', '12190', 'Jakarta', 'IV01', 'ARGHAJATA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (797, 'RK5045', 'SARI NUR JAYA, CV.', 'Jl. Slamet I/8 RT.001/003 Pepelegi,', 'ID', '', 'Sidoarjo', 'IV01', 'SARI NUR J', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (798, 'RK5055', 'FIZTA KARYA MEGAH, PT.', '12610 JL. H. ICANG NO.73 LENTENG AG', 'ID', '', 'Jakarta Selatan', 'IV01', 'FIZTA KARY', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (799, 'RK5072', 'INDOPASMA MERDORA, PT.', 'TL. TAMAN SUNTER INDAH BLOK HJ 2 NO', 'ID', '', 'Jakarta Utara', 'IV01', 'INDOPASMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (800, 'RK5111', 'TUV NORD INDONESIA, PT.', 'Arcadia Green Park Tower F Lt.6  Jl', 'ID', '', 'Jakarta', 'IV01', 'TUV NORD I', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (801, 'RK5114', 'PUTRA ANJASMORO MANDIRI, PT', 'Jl. Wijaya Kusuma No.13-A', 'ID', '', 'Jember', 'IV01', 'PUTRA ANJA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (802, 'RK5123', 'CIPTA RAYA MEKAR SAHITYA, PT.', 'Jl. Batununggal Indah IV No. 97', 'ID', '40267', 'BANDUNG', 'IV01', 'CIPTA RAYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (803, 'RK5151', 'DUTA GLOBAL JAYA, PT.', 'KEBON MIRING RT.003/007 PANGKALAN T', 'ID', '', 'BANTEN', 'IV01', 'DUTA GLOBA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (804, 'RK5165', 'LUMBUNG KARUNIA, PT.', 'Jl BUKIT TUNGGUL RAYA BLOK BB NO265', 'ID', '', 'BEKASI', 'IV01', 'LUMBUNG KA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (805, 'RK5180', 'NIAGA MAKMUR JAYA, CV', 'JL JOMAS NO.7 RT 007/RW 005 MARUYA', 'ID', '11620', 'JAKARTA BARAT', 'IV01', 'NIAGA MAKM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (806, 'RK5193', 'PT. SUMBER REZEKI SEJAHTERA UTAMA', '141 JL. OTISTA RAYA', 'ID', '13330', 'Jakarta', 'IV01', 'SRS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (807, 'RK5212', 'EASTERN INDOTECH MULTITAMA, PT', 'GRAND WISATA MARKET PLACE PR 6 NO.2', 'ID', '', 'BEKASI', 'IV01', 'EASTERN IN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (808, 'RK5238', 'GML PERFORMANCE CONSULTING, PT.', 'No.24-25 Artha Graha Niaga Blok B,', 'ID', '14240', 'JAKARTA UTARA', 'IV01', 'GML PERFOR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (809, 'RK5264', 'BANYU BENING KENCANA, PT', 'JL. TAMAN APEL MERAH II BLOK A7 NO', 'ID', '', 'BEKASI', 'IV01', 'BANYU BENI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (810, 'RK5270', 'FAJAR MAS MURNI, PT', 'Jl. Raya Norogong No. 214 RT 002/04', 'ID', '', 'Bekasi', 'IV01', 'FAJAR MAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (811, 'RK5284', 'FAJAR HARAPAN, PT', 'JL. MERDEKA NO. 53 KARAWACI, TANGER', 'ID', '', 'Tangerang', 'IV01', 'FAJAR HARA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (812, 'RK5294', 'MANDIRI SATRIA LESTARI, PT', 'JL. SATURNUS RAYA BLOK K-33 NO. 48', 'ID', '', 'BANDUNG', 'IV01', 'MANDIRI SA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (813, 'RK5303', 'KARYA SEJATI MANDIRI, PT', 'Jl. Ciwaringin Kaum No.13 RT.03 RW.', 'ID', '', 'Bogor', 'IV01', 'KARYA SEJA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (814, 'RK5318', 'MILLER WELDINDO, PT', 'Jl. Puri Kencana No.1 GD.Kawan Lama', 'ID', '', 'Jakarta', 'IV01', 'MILLER WEL', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (815, 'RK5319', 'PEKERTI JAHTERA, PT', 'Jl. Kampung Baru RT.12 RW.02 Kelapa', 'ID', '', 'Jakarta', 'IV01', 'PEKERTI JA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (816, 'RK5357', 'CV. MULTI OIL INDONESIA', 'JL. RAYA JUANDA KM 45', 'ID', '', 'SIDOARJO', 'IV01', 'CV. MULTI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (817, 'RK5529', 'PT. INTIPESAN PARIWARA', 'Jl. Baung IV No. 36A (TB Simatupang', 'ID', '', 'Jakarta', 'IV01', 'PT. INTIPE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (818, 'RK5535', 'GRAMEDIA, PT.', 'Gedung Kompas Gamedia Jl Palmerah S', 'ID', '', 'Jakarta', 'IV01', 'GRAMEDIA,', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (819, 'RK5546', 'TRIHASMANA INTERNASIONAL, PT.', 'KL.KRAMAT RAYA NO.8 RT.006/001 KEBA', 'ID', '', 'Jakarta', 'IV01', 'TRIHASMANA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (820, 'RK5549', 'PT. SURVEYOR INDONESIA (Persero)', 'Lt4-11 Graha Surveyor Indonesia, Jl', 'ID', '12950', 'JAKARTA', 'IV01', 'PT. SURVEY', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (821, 'RK5551', 'PERTAMINA (PERSERO), PT', 'JALAN MEDAN MERDEKA TIMUR NO. 1A G', 'ID', '', 'Jakarta', 'IV01', 'PERTAMINA', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (822, 'RK5559', 'ANUGRAH VINDO ABADI, PT', 'No.2 Jl.Raya Sultan Agung KM 28 Kam', 'ID', '', 'Bekasi', 'IV01', 'VINDO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (823, 'RK5620', 'ASURANSI JIWA INHEALTH INDONESIA, P', 'Plaza Setiabudi, Gedung Setiabudi 2', 'ID', '', 'Jakarta', 'IV01', 'ASURANSI J', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (824, 'RK5672', 'APINDO KARYA LESTARI, PT', 'JL. RAYA SERPONG KM.15 KAV.17 NO 17', 'ID', '', 'Tanggerang Selatan', 'IV01', 'APINDO KAR', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (825, 'RK5714', 'PT.  DATASYSTEM SOLUSINDO', 'Komp. Ruko Cempaka Mas blok C no.9', 'ID', '', 'Jakarta Pusat', 'IV01', 'PT.  DATAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (826, 'RK5735', 'RAJAWALI TRAININDO PERKASA, PT', 'JL JOHAR BARU V NO 5 RT001/011 KEL', 'ID', '', 'Jakarta', 'IV01', 'RAJAWALI T', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (827, 'RK5739', 'RODA TEKNINDO PRATAMA, PT', 'Jl.Hayam Wuruk No.127 Tamansari Jak', 'ID', '', 'Jakarta', 'IV01', 'RODA TEKNI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (828, 'RK5872', 'NIAGA MAKMUR JAYA ABADI, PT', 'JL. MOH TOHA NO 19 RT 005 RW 001', 'ID', '', 'Bogor', 'IV01', 'NIAGA MAKM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (829, 'RK5982', 'INDONESIA COMNETS PLUS, PT', 'Gedung Wisma Mulia Lt.50-51 Jl.Gato', 'ID', '', 'Jakarta', 'IV01', 'INDONESIA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (830, 'RK6314', 'VISUALINDO PRESENTAPRIMA. PT', 'RUKAN MULTIGUNA KEMAYORAN BLOK 2A J', 'ID', '', 'JAKARTA', 'IV01', 'VISUALINDO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (831, 'RK6338', 'SUCOFINDO (Persero), PT', '12780 Graha Sucofindo Jl. Raya Pasa', 'ID', '', 'JAKARTA', 'IV01', 'SUCOFINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (832, 'RK6343', 'ABO MADALEX INDONESIA, PT', 'JL RAYA MERUYA ILIR NO88 Kel Meruya', 'ID', '11620', 'Jakarta Barat', 'IV01', 'ABO MADALE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (833, 'RK6428', 'SINAR SURYA TEKNOLOGI, PT.', 'Menara Global Lt5 Jl Jend Gatot Sub', 'ID', '12950', 'Jakarta', 'IV01', 'SINAR SURY', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (834, 'RK6532', 'JIMLY SCHOOL LAW AND GOVERNMENT', 'Gd Sarinah Lt.9, Jl. M.H. Thamrin N', 'ID', '10350', 'Jakarta', 'IV01', 'JIMLY SCHO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (835, 'RK6687', 'LATIVI MEDIAKARYA, PT.', 'JL. RAWA TERATE II NO.2, KIP JATINE', 'ID', '', 'Jakarta Timur', 'IV01', 'LATIVI MED', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (836, 'RK6746', 'DATASCRIP, PT.', 'Jl. Selaparang Blok B 15 Kav9 Gunun', 'ID', '10610', 'Jakarta', 'IV01', 'DATASCRIP,', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (837, 'RK6832', 'ZURI HOTEL MANAJEMEN, PT', 'JL. MANGKUBUMI NO. 18 MALIOBORO', 'ID', '', 'YOGYAKARTA', 'IV01', 'ZURI HOTEL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (838, 'RK6849', 'ASURANSI JIWA TASPEN, PT', 'Jl. Jend. Sudirman Kav 2', 'ID', '10220', 'Jakarta', 'IV01', 'ASURANSI J', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (839, 'RK6885', 'WAHANA KENDALI MUTU, PT.', 'Jl. Ciputat Raya No. 8 Kebayoran La', 'ID', '', 'Jakarta Selatan', 'IV01', 'WAHANA KEN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (840, 'RK6926', 'THE INSTITUTE OF INTERNAL AUDITORS', 'Suite 103 Bina Sentra Bidakara Bld', 'ID', '12950', 'Jakarta', 'IV01', 'IIA INDONE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (841, 'RK6930', 'DOS NI ROHA, PT.', 'WISMA INDOVISION', 'ID', '', 'JAKARTA', 'IV01', 'DOS NI ROH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (842, 'RK6940', 'IKATAN AKUNTAN INDONESIA', 'Grha Akuntan Jl. Sindanglaya No. 1', 'ID', '', 'Jakarta', 'IV01', 'IKATAN AKU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (843, 'RK6961', 'FORUM HUMAN CAPITAL INDONESIA', 'Gd Plaza Mandiri Lt28 Jl. Jenderal', 'ID', '12190', 'Jakarta', 'IV01', 'FORUM HUMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (844, 'RK6982', 'YAYASAN BHAKTI LIMADAYA', 'jl. Kalibata Tengah No. 35D', 'ID', '12740', 'Jakarta', 'IV01', 'YAYASAN BH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (845, 'RK7060', 'PT. ARTHA PANEL PERKASA', '7 Jl.Kecapi', 'ID', '11111', 'Depok', 'IV01', 'APP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (846, 'RK7061', 'PT. ISPA MANDIRI', '20 Jl.Paseban Raya', 'ID', '10440', 'Jakarta Pusat', 'IV01', 'IM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (847, 'RK7062', 'CV.SUKET TEKI', 'I Komp Cimindi Raya Jl.Kembang I', 'ID', '40513', 'CIMAHI', 'IV01', 'ST', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (848, 'RK7063', 'PT.TUJUH MITRA PERKASA', '5E Jl. PEJATEN RAYA', 'ID', '12510', 'Jakarta', 'IV01', 'TMP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (849, 'RK7064', 'PT PUSPA KENARI', '14 JL. MARDANI RAYA NO', 'ID', '', 'JAKARTA PUSAT', 'IV01', 'PUSPA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (850, 'RK7065', 'PT. SUMUR SINABA', '0 JL.Masjid Alchoir Rt.007 /03', 'ID', '13870', 'Jakarta Timur', 'IV01', 'SS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (851, 'RK7068', 'ANDALAN TEKNOLOGI MANDIRI, PT', 'Jl. Engkol No. 12', 'ID', '40263', 'Bandung', 'IV01', 'ANDALAN TE', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (852, 'RK7115', 'PHITAGORAS GLOBAL DUTA, PT', 'no.19 Ruko Golden Boulevard Blok Q', 'ID', '15322', 'Tangerang Selatan', 'IV01', 'PHITAGORAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (853, 'RK7377', 'DIMAS AQNI PUTRA, PT', 'KP. KELAPA DUA NO. 90 RT 02/RW 09 P', 'ID', '', 'BEKASI', 'IV01', 'DIMAS AQNI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (854, 'RK7430', 'INKA MULTI SOLUSI TRADING, PT', 'L. RING ROAD BARAT RT. 011 RW. 004', 'ID', '', 'JAWA TIMUR', 'IV01', 'INKA MULTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (855, 'RK7442', 'SIGMA METRASYS SOLUTION, PT', 'DeaTower II 2nd Floor Suite 202 jl.', 'ID', '12950', 'JAKARTA SELATAN', 'IV01', 'SIGMA METR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (856, 'RK7468', 'SOFTWAREONE INDONESIA, PT', 'Menara Rajawali Jl. DR. Ide', 'ID', '12950', 'Jakarta', 'IV01', 'SOFTWAREON', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (857, 'RK7590', 'HOBASHITA TAKETAMA, PT', 'Komp. Ruko Buaran Persada No.2 RT.0', 'ID', '13440', 'Jakarta', 'IV01', 'HOBASHITA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (858, 'RK7720', 'MORA TELEMATIKA INDONESIA, PT', 'Graha 9 Jl Penataran No9 Jl Proklam', 'ID', '10320', 'Jakarta', 'IV01', 'MORA TELEM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (859, 'RK7777', 'Advance AUC', 'Juanda', 'ID', '', 'Jakarta', 'IV01', 'ADVANCE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (860, 'RK7799', 'ASK MULTI USAHA DINAMIKA, CV', 'Jl. Overste Isdiman No. 22 RT. 08/0', 'ID', '', 'Purwokerto', 'IV01', 'ASK MULTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (861, 'RK7859', 'HILMAN PUTRA, CV', 'Jl. Subang IV No. 08 Antapani Tenga', 'ID', '', 'Bandung', 'IV01', 'HILMAN PUT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (862, 'RK8001', 'CIPTA KARYA MANDIRI INSANI, PT', 'JL. CELEBRATION BOULEVARD BLOK AA.5', 'ID', '17510', 'BEKASI', 'IV01', 'CIPTA KARY', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (863, 'RK8002', 'PT.SOMAGEDE INDONESIA', 'No.3 Ruko Komp.Griya Inti Sentosa', 'ID', '13450', 'Kelurahan Sunter Agung Kec.Tanjung', 'IV01', 'SOMAGEDE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (864, 'RK8003', 'WAHYU KARTUMASINDO INTERNATIONAL', 'Jl. Beringin Blok F 12 No.3 , Delta', 'ID', '12333', 'Jakarta', 'IV01', 'WAHYU KART', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (865, 'RK8005', 'TRISAKTI MUSTIKA GRAPHIKA, PT', 'Jl. Prof. Dr.Hamka No.9 Purwoyoso,', 'ID', '50184', 'Semarang', 'IV01', 'TRISAKTI M', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (866, 'RK8008', 'RICHARDO JAYA, CV', 'Ruko Pulo Gebang Permai Blok F1/F P', 'ID', '13950', 'Jakarta', 'IV01', 'RICHARDO J', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (867, 'RK8009', 'PATRA KIUMBARA PERDANA, PT', 'Jl. Kemanggisan Raya, Jakarta Barat', 'ID', '12333', 'Jakarta', 'IV01', 'PATRA KIUM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (868, 'RK8010', 'PT. Telesindo Citra Sejahtera', 'JL Daan Moogot KM 11 No.45', 'ID', '12333', 'Jakarta', 'IV01', 'PT. TELESI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (869, 'RK8011', 'PT. TISA DIAMANTA KUSUMA', 'Komplek Harco Mangga Dua Blok K No.', 'ID', '10730', 'Jakarta', 'IV01', 'PT. TISA D', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (870, 'RK8012', 'PT. AMARCON JAYA UTAMA', 'jl.', 'ID', '12333', 'Jakarta', 'IV01', 'PT. AMARCO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (871, 'RK8013', 'PT. GAPURA KARYA MANDIRI', 'jl.', 'ID', '12333', 'Jakarta', 'IV01', 'PT. GAPURA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (872, 'RK8018', 'Nabtesco Service Co., Ltd', '2-14-20,Higashigotanda, Shinagawa-k', 'JP', '1233333', 'Tokyo', 'IV01', 'NABTESCO S', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'JPY', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (873, 'RK8019', 'YASHIMA & Co., Ltd', 'KDX Nihinbashi Kabutocho Building,', 'JP', '1233333', 'Tokyo', 'IV01', 'YASHIMA &', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'JPY', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (874, 'RK8020', 'PT. BERLIAN UTAMA SUKSES', 'Jl.Buaran Raya No.39', 'ID', '12333', 'Jakarta', 'IV01', 'PT. BERLIA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (875, 'RK8023', 'PT. MENARA ASIA GLOBAL', 'Jl Palmerah Utara I/No.28 C Jakarta', 'ID', '11480', 'Jakarta', 'IV01', 'PT. MENARA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (876, 'RK8024', 'PT. NEWSTAR JAYA PERKASA', 'Jl Raya Peta Selatan Komp. Ruko Meg', 'ID', '11480', 'Jakarta', 'IV01', 'PT. NEWSTA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (877, 'RK8027', 'PT. IRC INOAC INDONESIA', 'Jl. Hayam Wuruk No.8', 'ID', '12333', 'Jakarta', 'IV01', 'PT. IRC IN', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (878, 'RK8028', 'ANUGRAH ELEKTRIC, CV', 'Jl. Raya Serang, KM. 27 Balaraja', 'ID', '12333', 'Tangerang', 'IV01', 'ANUGRAH EL', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (879, 'RK8029', 'HEMEL ELECTRIC, PT', 'Jl.Gunung sahari  Raya Kav.18', 'ID', '12333', 'Jakarta', 'IV01', 'HEMEL ELEC', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (880, 'RK8030', 'LIMA BINTANG INDONESIA, PT', 'Mangga Dua Square-mangga Dua Square', 'ID', '12333', 'Jakarta', 'IV01', 'LIMA BINTA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (881, 'RK8032', 'IMERATA MANDIRI, PT', 'Jl. Kresek Raya No. 88 D, Duri Kosa', 'ID', '11750', 'Jakarta', 'IV01', 'IMERATA MA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (882, 'RK8034', 'MUKTI SARANA JAYA, PT', 'Jl. Kenongosari II/1 Rt :01/001 Des', 'ID', '12333', 'Jakarta', 'IV01', 'MUKTI SARA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (883, 'RK8038', 'NACHI INDONESIA,PT', 'Tempo Pavilion I,Jl HR Rasuna Sais', 'ID', '12950', 'Jakarta', 'IV01', 'NACHI INDO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (884, 'RK8040', 'SEFAS KELIANTAMA, PT', 'JL.Cideng Barat No. 87', 'ID', '12333', 'Jakarta', 'IV01', 'SEFAS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (885, 'RK8095', 'BARKA CAHAYA MEDIATAMA, PT', 'Jalan Sebret 9 A Jatipadang', 'ID', '12540', 'Jakarta', 'IV01', 'BARKA CAHA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (886, 'RK8258', 'KRYSNA ADIWIJAYA SEJAHTERA, PT', 'JL. MATRAMAN RAYA GED. ASCOM NO. 67', 'ID', '', 'JAKARTA', 'IV01', 'KRYSNA ADI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (887, 'RK8339', 'USAHA MANDIRI NIAGA, PT', 'PESONA CIWASTRA VILLAGE CLUSTER AZA', 'ID', '', 'Bandung', 'IV01', 'UMN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (888, 'RK8389', 'MITRA INTEGRASI INFORMATIKA, PT', 'APL Tower 37th Floor Suite 1-8, Jl.', 'ID', '', 'Jakarta Barat', 'IV01', 'MITRA INTE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (889, 'RK8392', 'DIREKTORAT JENDRAL BEA DAN CUKAI', 'Tanjung Priok', 'ID', '', 'Jakarta', 'IV01', 'DIRJEN BEA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (890, 'RK8461', 'INTERCONTINENTAL BANDUNG DAGO PAKAR', 'JALAN RESOR DAGO PAKAR RAYA 2B, RES', 'ID', '', 'BANDUNG', 'IV01', 'INTERCONTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (891, 'RK8573', 'GLOBAL EXPO MANAGEMENT, PT', 'Mutiara Taman Palem, Blok C-5/28-29', 'ID', '11730', 'Jakarta', 'IV01', 'GLOBAL EXP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (892, 'RK8640', 'MCKUADRAT INDONESIA, PT', 'Jl Puspitek Raya No147 RT14/4 Kel S', 'ID', '', 'Tangerang Selatan', 'IV01', 'MCKUADRAT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (893, 'RK871', 'PT.ABDHIKA KREASI MANDIRI', '17 Jl. Bina Warga', 'ID', '11111', 'Jakarta Selatan', 'IV01', 'AKM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', 'X', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (894, 'RK8711', 'PT. Kasih Koi Indonesia', '45-46 Jln Jendral Sudirman', 'ID', '12930', 'Jakarta', 'IV01', 'KASIH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (895, 'RK8712', 'PT. Kontindo Panca Mannungal', '37 Jl. Tebet timur dalam raya', 'ID', '12820', 'Jakarta Selatan', 'IV01', 'KPM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (896, 'RK8713', 'PT. INDOREKTRA KARUNIA ABADI', '29-31 GD. WISMA METROPOLITAN I LT.3', 'ID', '12920', 'JAKARTA SELATAN', 'IV01', 'IKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (897, 'RK8714', 'PT.MULTI MAJU SEJAHTERA', '20 Jl.Petek No.20 Purwosari', 'ID', '50172', 'Semarang', 'IV01', 'MMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (898, 'RK8715', 'PT. ANUGERAH DATANUSA VISITAMA', '41 Jl.Mangga Dua', 'ID', '10730', 'JAKARTA PUSAT', 'IV01', 'ADV', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (899, 'RK8716', 'PT. GIS Teknologi Prasasta', '00 Jl.xxx', 'ID', '11111', 'Jakarta', 'IV01', 'GTP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (900, 'RK8717', 'PT. CHITOSE INTERNASIONAL Tbk', '5 JL.Industri III', 'ID', '40533', 'Jawa Barat', 'IV01', 'CHITOSE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (901, 'RK8718', 'PT. MEGOEPAK SEJAHTERA INDONESIA', '15 Jl. Raya Kalibata Rt : 002/007', 'ID', '13640', 'Jakarta Timur', 'IV01', 'MEGOEPAK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (902, 'RK8719', 'PT. KARTIKA CIPTA INDONESIA', '20 Jl. Tebet Barat', 'ID', '11111', 'Jakarta Selatan', 'IV01', 'KARTIKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (903, 'RK8720', 'PT. PAMELARIA PERSADA', '55A Jl. Rajawali, Labuh Baru', 'ID', '11111', 'Sumatra Selatan', 'IV01', 'PAMELARIA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (904, 'RK8721', 'PT. CATURPILAR PERKASATANGGUH', '27 Jl. Karang Tengah Raya, Lebak Bu', 'ID', '11111', 'Jakarta Selatan', 'IV01', 'CATURPILAR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (905, 'RK8723', 'PT. CHRISTALENTA PRATAMA', '15 Jl. CEMPAKA Bintaro, Pesanggraha', 'ID', '11111', 'Jakarta Selatan', 'IV01', 'CHRISTALEN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (906, 'RK8724', 'PT. Bumiputera Wisata', 'xx Jl. Margonda Raya – Depok', 'ID', '15423', 'Depok', 'IV01', 'BUMIPUTERA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (907, 'RK8725', 'PT. NEXCOM INDONESIA', '15 Komplek Golden Plaza Blok J-5', 'ID', '12420', 'Jakarta Selatan', 'IV01', 'NEXCOM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (908, 'RK8726', 'PT. PROTON GUMILANG', '2 Jl. Sulaiman Rt.001/04', 'ID', '11111', 'Jakarta Barat', 'IV01', 'PROTON', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (909, 'RK8727', 'PT. PURIASRI BHAKTIKARYA', '160 Jl. Darmawangsa X No.', 'ID', '12150', 'Jakarta', 'IV01', 'PURIASRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (910, 'RK8728', 'PT. PERSONA PRIMA UTAMA', '60 Jl. Dr. Saharjo No.', 'ID', '12970', 'Jakarta', 'IV01', 'PERSONA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (911, 'RK8729', 'PT. ERA PERMATA SEJAHTERA', '9 Jl. Cipinang Jaya Raya Blok AA no', 'ID', '11111', 'Jakarta Timur', 'IV01', 'ERA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (912, 'RK8730', 'PT. FIRST SECURITY', '16 Jl. Raya Pasar Minggu No.', 'ID', '12780', 'Jakarta', 'IV01', 'FIRST', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (913, 'RK8731', 'PT. BNI Life', '1 BNI Life Tower 21 st Floor', 'ID', '12910', 'Jakarta', 'IV01', 'BNI LIFE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (914, 'RK8732', 'PT. ANDHIKA ADRIAN', '51 Jl. Seulawah Raya No.', 'ID', '11111', 'Jakarta Timur', 'IV01', 'ANDHIKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (915, 'RK8733', 'PT. PROVICES INDONESIA', '80 Jl. H.R Rasuna Said  Lt.80', 'ID', '12940', 'Jakarta', 'IV01', 'PROVICES', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (916, 'RK8734', 'PT. Besta Media Mandiri', '35 Jl. H. Som/Pdk Pucung Raya No.', 'ID', '15229', 'Tanggerang', 'IV01', 'BESTA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (917, 'RK8754', 'ANDALAN NUSANTARA TEKNOLOGI, PT', 'Intiland Tower, 11th Floor, Jl. Jen', 'ID', '10220', 'Jakarta', 'IV01', 'ANDALAN NU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (918, 'RK8810', 'ALKOMINDO TRIJAYA ABADI, CV', 'E43 Komp. Babakan Loa Permai Blok', 'ID', '11111', 'Bandung', 'IV01', 'ALKOMINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (919, 'RK8863', 'DELTASINDO RAYA SEJAHTERA, PT', 'No36 Ruko Niaga Roxy Mas blok E2 Jl', 'ID', '10150', 'Jakarta Pusat', 'IV01', 'DELTASINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (920, 'RK88715', 'PT. GIS Teknologi Prasasta', 'xx Jl.', 'ID', '11111', 'Jakarta', 'IV01', 'GTP', 'X', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', 'X', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (921, 'RK8888', 'DWIKHARISMA METROTAMA, PT', 'Jl Tampomas Ds 02 Tengah RT 002 RW', 'ID', '', 'Cirebon', 'IV01', 'DWIKHARISM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (922, 'RK8889', 'LAMP, CV', 'Gg. Silih Asih III No. 182A/97 Cige', 'ID', '', 'Bandung', 'IV01', 'LAMP, CV', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (923, 'RK8897', 'KENCANA ELEKTRINDO, PT', 'Batununggal Indah I No.2A', 'ID', '', 'Bandung', 'IV01', 'KENCANA EL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (924, 'RK9000', 'PT. Halmahera Mitra Utama', 'Jl. Samali No. 24 Pejaten - Jaksel', 'ID', '12333', 'Jakarta', 'IV01', 'HALMAHERA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (925, 'RK9001', 'CV.Empat Dimensi', 'Jl.Puspita VII/16 Mekarmurti', 'ID', '12333', 'Cikarang', 'IV01', 'EMPAT', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (926, 'RK9002', 'Bhineka Mentari Dimensi', 'Jl.Mangga Dua Mangga Dua Mall Lt.3', 'ID', '12333', 'Jakarta', 'IV01', 'BHINEKA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (927, 'RK9003', 'PT.Bangun Rejeki Jaya Lestari', 'Jl.Jankes AD No.44 Cipayung', 'ID', '12333', 'Jakarta', 'IV01', 'REJEKI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (928, 'RK9004', 'PT. SOLUSINDA JAYA', 'JL. PERSADA ANTARA NO.1', 'ID', '44456', 'JAKARTA SELATAN', 'IV01', 'JAYA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (929, 'RK9005', 'CV Multi Oil', 'Jl. Bowling Raya Blok E-13 Rt002/00', 'ID', '12333', 'Depok', 'IV01', 'MULTI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (930, 'RK9006', 'CV. DELAPAN SUMBER CEMERLANG', 'No36 Jl Perum Bukit Asri Gg Rukun K', 'ID', '12333', 'Kab. Bogor', 'IV01', 'DELAPAN SU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (931, 'RK9007', 'CV. Inti Guna Karya', 'Jl.Mutiara Baru Blok K No.16 Rawa L', 'ID', '12333', 'Jakarta', 'IV01', 'INTI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (932, 'RK9008', 'CV. TIKA UTAMA', '122 Jl. Asem Baris Raya No. 122 Rt.', 'ID', '12333', 'Jakarta', 'IV01', 'TIKA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (933, 'RK9009', 'CV.Aneka Trading Karyaguna', 'Jl.Petojo VIY IV No.28 Rt.10 RW 6', 'ID', '12333', 'Jakarta', 'IV01', 'ANEKA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (934, 'RK9010', 'Global Sarana Sukses, PT', 'Jl. Iskandar Muda, Kebayoran Lama', 'ID', '12333', 'Jakarta', 'IV01', 'GLOBAL SAR', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (935, 'RK9011', 'APOTIK RAKYAT RITAM', '63 Jl. GANG BANTEN JATINEGARA', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'RITAM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (936, 'RK9012', 'CV.Mitra wahana', 'Jl.Pesanggrahan Raya No.10D', 'ID', '12333', 'Jakarta', 'IV01', 'MITRA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (937, 'RK9013', 'CV.Mercu Buana', 'JL.Jend A Yana 238, Bandung 40271', 'ID', '12333', 'Jakarta', 'IV01', 'MERCU', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (938, 'RK9014', 'PT. Kolam Intan Prima', '160 Komp. Perkantoran Cempaka Putih', 'ID', '10640', 'Kemayoran, Jakarta', 'IV01', 'INTAN', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (939, 'RK9015', 'CV.Surya Cipta Gemilang', 'LTC LT.UG BL, B1 No. 9 Mangga Besar', 'ID', '12333', 'Jakarta', 'IV01', 'SURYA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (940, 'RK9016', 'Deugro (Japan) Co., Ltd', 'Shinagawa Canal Building 5F 12097 K', 'ID', '12333', 'Japan', 'IV01', 'DEUGRO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'JPY', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (941, 'RK9017', 'Hegenscheidt-MFD GmbH & Co.KG', '41812 RKELENZ/Germany', 'ID', '12333', 'Germany', 'IV01', 'HEGENSCHEI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'EUR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (942, 'RK9018', 'I Box Plaza Atrium', 'Plaza Atrium', 'ID', '12333', 'Jakarta', 'IV01', 'IBOX', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (943, 'RK9019', 'Jagro Trans Co LTD', 'Parais Royal Sanno Ootaku - ku Toky', 'ID', '12333', 'Japan', 'IV01', 'JAGRO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (944, 'RK9020', 'JSM Consultant', 'Paramount Sparks C12', 'ID', '15180', 'Tangerang', 'IV01', 'JSM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (945, 'RK9021', 'Koperasi Industri Pengecoran Logam', 'DK. Batur, DS Tegalrejo Ceper klate', 'ID', '12333', 'Jawa Tengah', 'IV01', 'KOPERASI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (946, 'RK9022', 'CV.Jaya Indo Transforma', '104 jl. sindangbarang', 'ID', '12333', 'Bogor', 'IV01', 'TRANSFORMA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (947, 'RK9023', 'Newstar Jaya Perkasa', 'Jl.Raya Peta Selatan Komplek Ruko M', 'ID', '12333', 'Jakarta', 'IV01', 'NEWSTAR', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (948, 'RK9024', 'PATRA KIUMBARA PERDANA, P', '1 Jl. Kemanggisan Raya', 'ID', '12333', 'Jakarta Barat', 'IV01', 'PATRA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (949, 'RK9025', 'PT AEROCOMM', 'JL Aeromodelling IV No.5 Arcamanik', 'ID', '12333', 'Bandung', 'IV01', 'AEROCOMM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (950, 'RK9026', 'PT. CITRA SELARAS MANDIRI LOGISTICS', 'JL. MARGASATWA RAYA NO.88, PONDOK L', 'ID', '12450', 'Jakarta', 'IV01', 'CITRA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (951, 'RK9027', 'PT.Martelindo solusi', '44 Jl.Tanjung Duren Utara 3F', 'ID', '12333', 'Jakarta', 'IV01', 'SOLUSI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (952, 'RK9028', 'PT FS Power Control', 'Jl. Kelapa Dua Wetan', 'ID', '12333', 'Jakarta', 'IV01', 'FS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (953, 'RK9029', 'PT GMF AERO ASIA', 'Gd Manajemen Garuda Lt.3', 'ID', '12333', 'Tangerang', 'IV01', 'GMF', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (954, 'RK9030', 'PT KARBON MUSTIKA RAJAWALI', 'Gedung Mustika Lt.3', 'ID', '12333', 'Jakarta', 'IV01', 'KARBON', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (955, 'RK9031', 'PT Modul Sinergi Technology', 'Jl TMP Kalimulya Rt 004/001', 'ID', '12333', 'Depok', 'IV01', 'MODUL', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (956, 'RK9032', 'PT Nusa Jaya Komputindo', 'Jl.Pusat Elektronik Harco Mangga Du', 'ID', '12333', 'Jakarta', 'IV01', 'NUSA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (957, 'RK9033', 'PT PEKERTI SEJAHTERA', 'Kp.Baru Rt.012.02 Kel. Kelapa Dua W', 'ID', '12333', 'Jakarta', 'IV01', 'PEKERTI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (958, 'RK9034', 'PT Santanu Gangga Buana', 'Kedaung Atas No.56 Tanggerang', 'ID', '12333', 'Tangerang', 'IV01', 'SANTANU', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (959, 'RK9035', 'PT Takari Sumber Mulia', 'Jl.Gelong Baru No.35', 'ID', '12333', 'Jakarta', 'IV01', 'TAKARI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (960, 'RK9036', 'PT Volger Jaya Makmur Indonesia', 'Jl Ampera II No.30A', 'ID', '12333', 'Jakarta', 'IV01', 'VOLGER', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (961, 'RK9037', 'PT. AJ Adisarana Wanaartha', 'Jl. Mampang Raya No. 76', 'ID', '12333', 'Jakarta', 'IV01', 'AJ', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (962, 'RK9038', 'JR EAST RAILCAR TECH.&MAINTENANCE C', '1-11-1 Nishiikebukuro, Toshima-ku', 'JP', '1233388', 'Tokyo', 'IV01', 'EAST', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'JPY', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (963, 'RK9039', 'PT.Bravo Sekuriti Indonesia', '39 Ruko Duta Mas Blok B2 No.20-21', 'ID', '12333', 'IT Fatmawati Jakarta', 'IV01', 'BRAVO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (964, 'RK9040', 'PT. BHINNEKA MENTARI DIMENSI', 'Jl. Gunung Sahari Raya 73 C / 42130', 'ID', '12333', 'Jakarta', 'IV01', 'BHINNEKA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (965, 'RK9041', 'PT. DH Creative Tech', 'Jl Jababeka II G Blok CC no.20 Kawa', 'ID', '12333', 'Jakarta', 'IV01', 'DH', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (966, 'RK9042', 'PT. Indo Kompresigma', 'Jl.Outter Ringroad No. 65', 'ID', '12333', 'Jakarta', 'IV01', 'INDO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (967, 'RK9043', 'PT. PROGRESS ADVERTISING', 'JL. TANAH SERATUS RT.001/001 NO.23', 'ID', '15151', 'Jakarta', 'IV01', 'PROGRESS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (968, 'RK9044', 'PT. KA PROPERTI MANAJEMEN', 'Stasiun Sawah Besar Lt.dasar', 'ID', '12333', 'Jakarta', 'IV01', 'KAPM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (969, 'RK9045', 'PT. Elsiscom Prima Karya', '27 Jl.hayam Wuruk', 'ID', '12333', 'Jakarta', 'IV01', 'ELSISCOM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (970, 'RK9046', 'PT. Maban Kreatindo', 'Jl. Mangga I No.42', 'ID', '12333', 'Jakarta', 'IV01', 'MABAN', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (971, 'RK9047', 'PT. ASURANSI JIWA ADISARANA WANAART', 'GRHA WANAARTHA JL. MAMPANG PRAPATAN', 'ID', '12333', 'Jakarta', 'IV01', 'ASURANSI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (972, 'RK9048', 'PT. ASIA UTAMA KONSULTAN', 'WISMA 76 LT.18, JL. LETJEND S. PARM', 'ID', '12333', 'Jakarta', 'IV01', 'ASIA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (973, 'RK9049', 'PT. Mitra Data Utama', 'Jl.Kemang Timur Raya No.56', 'ID', '12333', 'Jakarta', 'IV01', 'MITRA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (974, 'RK9050', 'PT. PURINDA KARYA JAYA', 'Jl. Raya Kapin No.9 Rt 0 Rw. 8', 'ID', '13450', 'Jakarta', 'IV01', 'PURINDA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (975, 'RK9051', 'PT. IRMA PERTIWI', '7 Gd.Linggarjati Jl.Kayu Putih II P', 'ID', '', 'Jakarta Timur', 'IV01', 'IRMA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (976, 'RK9052', 'PT. SILBERS INDONESIA MAN', '6 Ruko Pulo Gebang Permai F1', 'ID', '12333', 'Jakarta Timur', 'IV01', 'SILBERS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (977, 'RK9053', 'JASUINDO TIGA PERKASA Tbk, PT', 'Gd Office 8 Lt31 Unit B-E SCBD Lot2', 'ID', '12190', 'Jakarta', 'IV01', 'JASUINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (978, 'RK9054', 'PT. TDS Technology', 'Jl. Seni Budaya VI No.2A', 'ID', '11460', 'Jakarta', 'IV01', 'TDS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (979, 'RK9055', 'PT. TELESINDO CITRA SEJAHTERA', 'Jl Daan Mogot KM 11 No.45 Jakarta', 'ID', '11180', 'Jakarta Barat DKI Jakarta Raya', 'IV01', 'TELESINDO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (980, 'RK9056', 'PT. Telkom Indonesia', 'Jl. Kebon Sirih No.12', 'ID', '12333', 'Jakarta', 'IV01', 'TELKOM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (981, 'RK9057', 'PT. PRESTI AUDINA', '71-2 Jl.Pramuka Sari I', 'ID', '', 'Jakarta Pusat', 'IV01', 'AUDINA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (982, 'RK9058', 'PT.ACE HARDWARE INDONESIA', 'jl.Puri Kencana No.1 Kembangan Jaka', 'ID', '11610', 'Jakarta', 'IV01', 'ACE', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (983, 'RK9059', 'PT.Adonara Bakti Bangsa', 'Jl.Bungur Besar 17 No. 7A 42006', 'ID', '12333', 'Jakarta', 'IV01', 'ADONARA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (984, 'RK9060', 'PT.Ananta Bangun Graha', 'Graha Anugerah Lt.8', 'ID', '12333', 'Jakarta', 'IV01', 'ANANTA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (985, 'RK9061', 'PT.Andalan Terampil Multisiss KSO P', 'Wisma Korindo Lt.3', 'ID', '12333', 'Jakarta', 'IV01', 'ANDALAN', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (986, 'RK9062', 'PT.Anugerah Raya Karya Mandiri', 'JL.Cluster Green Village Blok V3 No', 'ID', '12333', 'Bekasi', 'IV01', 'ANUGERAH', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (987, 'RK9063', 'Hamzah Fansyuri Law Officce', 'Menara Rajawali Lantai 7-1', 'ID', '12950', 'Jakarta', 'IV01', 'HAMZAH', 'X', 'C100', 'PT. KCI-Kantor Pusat', '0001', 'X', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (988, 'RK9066', 'PT.Berkah Usaha Sharia', 'Jl.kalimalang Raya Blok G.9 kav.8B', 'ID', '12333', 'Jakarta', 'IV01', 'BERKAH', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (989, 'RK9067', 'PT.Bhinneka Mentari Dimensi', 'Jl.Mangga Dua , Mangga Dua Mall', 'ID', '12333', 'Jakarta', 'IV01', 'BHINNEKA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (990, 'RK9068', 'PT.Bimaschi Indojala Sutera', 'Jl.kayu Putih Utara III D No.19', 'ID', '12333', 'Jakarta', 'IV01', 'BIMASCHI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (991, 'RK9071', 'PT.Caturkarya Gemaswadaya', 'JL.Kyai Caringin No.16 A -', 'ID', '12333', 'Jakarta', 'IV01', 'CATURKARYA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (992, 'RK9072', 'Infinitum Law Office', 'Blok A-9 Grand Wijaya Centre Jl. W', 'ID', '12160', 'Jakarta', 'IV01', 'INFINITUM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (993, 'RK9074', 'PT.Data System Komputindo', 'Komplek Ruko Mega Grosir Cempaka Ma', 'ID', '12333', 'Jakarta', 'IV01', 'DATA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (994, 'RK9075', 'PT.CSM Corporatama', 'Wisma Indomobil 1 Lt.10', 'ID', '13330', 'Jakarta', 'IV01', 'CSM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (995, 'RK9077', 'PT.DH Creative Tech', 'Jl.Panglima Polim 1 No.95', 'ID', '12333', 'Jakarta', 'IV01', 'DH', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (996, 'RK9078', 'PT.Dimension Data Indonesia', 'Menara Imperium 19th fl', 'ID', '12333', 'Jakarta', 'IV01', 'DIMENSION', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (997, 'RK9079', 'PT.FS Power Control', 'Jl. Kelapa Dua Wetan', 'ID', '12333', 'Jakarta', 'IV01', 'FS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (998, 'RK9080', 'PT.Fulcomas Jaya', 'JL.Glodok Plaza Blok.14 No.21', 'ID', '12333', 'Jakarta', 'IV01', 'FULCOMAS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (999, 'RK9082', 'PT.Halmahera Mitra Utama', 'Jl.Samali No.24 Pejaten', 'ID', '12333', 'Jakarta', 'IV01', 'HALMAHERA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1000, 'RK9083', 'PT.HEMEL ELEKTRIK', 'Jl.Gunung sahari  Raya Kav.18', 'ID', '12333', 'Jakarta', 'IV01', 'HEMEL', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1001, 'RK9086', 'PT.Imerata Mandiri', 'Jl Kresek Raya No.88 D Duri Kosambi', 'ID', '11750', 'Jakarta', 'IV01', 'IMERATA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1002, 'RK9087', 'INDONESIA COMNET PLUS, PT.', 'Gd. PLN Jl KH Abdul Rochim Kuningan', 'ID', '12710', 'Jakarta', 'IV01', 'ICON+', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1003, 'RK9088', 'PT.Intipratama Mulya Santika', 'Jl. Mayjend Sutoyo No 47 RT 42', 'ID', '76113', 'Balikpapan', 'IV01', 'INTIPRATAM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1004, 'RK9089', 'PT. SINERGI SOLUSI INDONESIA', 'Unit 1702 Gd Patra Office Tower Lt1', 'ID', '12950', 'Jakarta', 'IV01', 'SSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1005, 'RK9090', 'PT.Jasa Aktuaria Praptasentosa Guna', 'Jl. Cikini Raya No.97', 'ID', '10330', 'Jakarta', 'IV01', 'JASA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1006, 'RK9091', 'Jasatama Sinergi Manajemen, PT', 'NO1 Jl. Kelapa Puan XV AG 10 Gading', 'ID', '15180', 'Kab. Tangerang', 'IV01', 'JASATAMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1007, 'RK9092', 'PT.KA Logistik', 'KH. Wahid Hasyim No.11A', 'ID', '12333', 'Jakarta', 'IV01', 'KA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1008, 'RK9093', 'PT.KAPM', 'Stasiun Sawah Besar', 'ID', '12333', 'Jakarta', 'IV01', 'KAPM', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1009, 'RK9094', 'PT. BANDAR METROPOLITAN JAYA', 'G.09 Pertokoan Pondok Gede', 'ID', '11111', 'Bekasi', 'IV01', 'BMJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1010, 'RK9095', 'PT.Sandi Jasa Estika', 'jl.Pati No.26 Menteng', 'ID', '12333', 'Jakarta', 'IV01', 'SANDI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1011, 'RK9096', 'PT.Kensign Jaya Mandiri', 'Jl.Kaji Raya No.33-K Petojo Utara', 'ID', '12333', 'Jakarta', 'IV01', 'KENSIGN', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1012, 'RK9097', 'PT.Kensiun Jaya Mandiri', 'Pesing Poglar No.11', 'ID', '12333', 'Jakarta', 'IV01', 'KENSIUN', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1013, 'RK9098', 'PT. KARYA BHINEKA JAYA', '74 Jl. Tanah Abang II', 'ID', '11111', 'Jakarta', 'IV01', 'KBJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1014, 'RK9099', 'PT.Verdori Inti Prima', 'G.19 Jl.Kelapa Hijau 167 Pdk Kelapa', 'ID', '12333', 'Jakarta', 'IV01', 'VERDORI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1015, 'RK9100', 'KJPP PUNG''S ZULKARNAIN DAN REKAN', 'JL. GONDANGDIA KECIL NO. 12-14', 'ID', '10330', 'JAKARTA PUSAT', 'IV01', 'KJPP PUNG''', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1016, 'RK9101', 'CV.Mulya Lestari (Kaos)', 'Jl.Penggilingnan Raya', 'ID', '12333', 'Jakarta', 'IV01', 'MULYA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1017, 'RK9102', 'PT.Mahasuri Utama (Medali)', 'Cakung jakarta Timur', 'ID', '12333', 'Jakarta', 'IV01', 'MAHASURI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1018, 'RK9106', 'PT. BERKAT JAYA KOMPUTINDO', 'Blok 19E Jl. Pangeran Jayakarta/Gat', 'ID', '', 'Jakarta', 'IV01', 'BJK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1019, 'RK9107', 'PT.Mitra Daya Utama', 'Jl.Kemang Raya No. 56 RT 6 RW 3', 'ID', '12333', 'Jakarta', 'IV01', 'MITRA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1020, 'RK9108', 'PT KENCANA SEJUKABADI', 'NO. 25 LT2 JL. DANAU SUNTER BARAK B', 'ID', '', 'JAKARTA UTARA', 'IV01', 'KCS', '', 'C100', 'PT. KCI-Kantor Pusat', 'ZG14', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1021, 'RK9109', 'PT. MULTIDAYA PRIMA LESTARI', 'No.1 Jl. Pribumi Raya Blok B Kel. S', 'ID', '', 'Tangerang', 'IV01', 'MPL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1022, 'RK9110', 'PT.Nachi Indonesia', 'Gd.Tempo pavilion I', 'ID', '12333', 'Jakarta', 'IV01', 'NACHI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1023, 'RK9111', 'PT.KALYANA INSAN ANUGRAH', '12 Jl Taman Malaka Selatan', 'ID', '11111', 'Jakarta', 'IV01', 'KIN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1024, 'RK9112', 'PT. JARINGAN JASA SUKSES BERSAMA', '11 Jl. Taman Aries', 'ID', '11620', 'Jakarta', 'IV01', 'JJSB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1025, 'RK9113', 'PT.OJI PRINTECH INDONESIA', 'Jl. Agung Perkasa IX Blok K2 No.32', 'ID', '12333', 'Jakarta', 'IV01', 'OJI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1026, 'RK9114', 'PT. FORMASI SISTEM INTERNASIONAL', 'Lt.1 Graha Simatupang Tower IIB Jl.', 'ID', '12540', 'Jakarta', 'IV01', 'FSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1027, 'RK9115', 'PT.Panglima siaga Bangsa', 'Permata Niaga I No.11', 'ID', '12333', 'Tangerang', 'IV01', 'PANGLIMA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1028, 'RK9116', 'PT.PATRA KIUMBARA PERDANA', 'Jl.kemanggisan Raya No.1', 'ID', '12333', 'Jakarta', 'IV01', 'PATRA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1029, 'RK9117', 'PT.Pekerti Sejahtera', 'Jl.kampung Baru Rt.012/02', 'ID', '12333', 'Jakarta', 'IV01', 'PEKERTI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1030, 'RK9118', 'PT. PRIMA TELEKOM INTERMEDIA', 'Komp. Daan MogotBaru Blok KJ-E /43', 'ID', '12333', 'Jakarta', 'IV01', 'PRIMA TELE', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1031, 'RK9119', 'CV MALOHO JAYA ABADI', '20 B Jl. Raya Jatiwaringin', 'ID', '11111', 'Jakarta Timur', 'IV01', 'MJA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1032, 'RK9120', 'PT.PURINDA KARYA JAYA', 'Jl.Duren Tiga Rt.008/07', 'ID', '12333', 'Jakarta', 'IV01', 'PURINDA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', 'X', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1033, 'RK9121', 'PT. Pusaka Nusantara', 'Jl.Kinanti No.14A Bandung 40264', 'ID', '12333', 'Bandung', 'IV01', 'PUSAKA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1034, 'RK9122', 'PT JAKADARA AIR CRAFT SERVICES', 'Jl Condet Raya No.8 Batu Ampar-Kra', 'ID', '12333', 'Jakarta', 'IV01', 'JAKADARA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1035, 'RK9123', 'PT ART GALLERY KREASI', '11 Bandung', 'ID', '11111', 'Jakarta', 'IV01', 'AGK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1036, 'RK9124', 'PT.Resik Mandiri', 'Gd.Menara Palma Lt.12', 'ID', '12333', 'Jakarta', 'IV01', 'RESIK', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1037, 'RK9125', 'PT.KA Propeti Manajemen', 'Sta.Sawah Besar Lt. Dasar', 'ID', '12333', 'Jakarta', 'IV01', 'PROPERTI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1038, 'RK9126', 'PT.RIZKI PUTRA DINAMIKA', 'Jl. Jatinegara Barat IV No.11 Rt:00', 'ID', '12333', 'Jakarta', 'IV01', 'RIZKI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1039, 'RK9127', 'CV UPRINDO TRADING COMPANY', '7 Jl.Venus Timur XIII No.7', 'ID', '11111', 'Jawa Barat', 'IV01', 'UTC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1040, 'RK9128', 'PT.SANTAU GANGGA BUANA', 'Kedaung Atas No. 56', 'ID', '12333', 'Tangerang', 'IV01', 'SANTAU', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1041, 'RK9129', 'PT. POPO Electronic', 'Glodok Plaza Blok B 14-16', 'ID', '12333', 'Jakarta', 'IV01', 'POPO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1042, 'RK9130', 'PT.SGS INDONESIA', 'Jl. Raya Cilandak KKO', 'ID', '12560', 'Jakarta', 'IV01', 'SGS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1043, 'RK9131', 'PT.Silbers Indonesai Mandiri', 'Jl.Raya Pulo Gebang RT.006 RW 12', 'ID', '12333', 'Jakarta', 'IV01', 'SILBERS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', 'X', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1044, 'RK9132', 'LPK LPIA MARGONDA', 'No. 91-C Jl. Raya Margonda Kel. Dep', 'ID', '', 'Depok', 'IV01', 'LPK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1045, 'RK9133', 'PT.Sisnet Mitra Sejahtera', 'Jl.Rempoa Raya No. 11 RT.001/010', 'ID', '12333', 'Tangerang', 'IV01', 'SISNET', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1046, 'RK9134', 'PT.Solusi Corporindo Teknologi', 'Jl.Kapuk Kamal Raya No.62E', 'ID', '14470', 'Jakarta', 'IV01', 'SOLUSI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1047, 'RK9136', 'PT.SUMBER INSTRUMINDO', 'JL.Gatot Subroto No.59  Bandung', 'ID', '40262', 'Bandung', 'IV01', 'SUMBER', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1048, 'RK9137', 'PT.Sumber Mandiri', 'Lindeteves Trade Centre Lt. GF1 Blo', 'ID', '12333', 'Jakarta', 'IV01', 'SUMBER', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1049, 'RK9138', 'SURFINDO NETWORK, PT', 'NO.31B Graha Samali lt.6 R.6003, Jl', 'ID', '12333', 'Jakarta', 'IV01', 'SURFINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1050, 'RK9139', 'PT.TDS Technology', 'Jl Seni Budaya IV No. 2A Kel. Jelam', 'ID', '12333', 'Bekasi', 'IV01', 'TDS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1051, 'RK9140', 'PT.Thamtama Kota Sejahtera Masyur', 'Ruko Glodok Plaza Blok F 51-52', 'ID', '12333', 'Jakarta', 'IV01', 'THAMTAMA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1052, 'RK9141', 'CV.Patara Sidijima', 'Kompleks Glodok Plaza Blok F/51-52', 'ID', '12333', 'Jakarta', 'IV01', 'PATARA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1053, 'RK9142', 'PT.Trihasmana International', 'Jl. Kramat gang yahya No.8', 'ID', '12240', 'Jakarta', 'IV01', 'TRIHASMANA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1054, 'RK9144', 'PT.Mitra Wahana Kusuma', '10 D Jl.Pesanggarahan Raya', 'ID', '12333', 'Jakarta Barat', 'IV01', 'MITRA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1055, 'RK9145', 'PT.WIDJOYO MITRA ABADI', 'Ruko mail mangga dua No.45', 'ID', '12333', 'Jakarta', 'IV01', 'WIDJOYO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1056, 'RK9147', 'TOYO TANSO CO. LTD', '41036 Takeshima, Nishiyodogawa-ku,', 'ID', '12333', 'Japan', 'IV01', 'TOYO', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'USD', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1057, 'RK9148', 'CV.Mitra Multi Sarana', 'Jl.Nurul Hidayah No.27', 'ID', '12333', 'Jakarta', 'IV01', 'MULTI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1058, 'RK9149', 'WINCORE', 'Jl Mangga Dua Mall Lt.4', 'ID', '12333', 'Jakarta', 'IV01', 'WINCORE', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1059, 'RK9150', 'CV.Mandala Wangi', 'No.6 Jl.A yani (By Pass) Utan Kayu', 'ID', '12333', 'Jakarta', 'IV01', 'WANGI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1060, 'RK9151', 'Pioneer Electric', 'JL. Kenari Mas Lt.Dasar Blok C No.3', 'ID', '12333', 'Jakarta', 'IV01', 'PIONEER', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1061, 'RK9154', 'PT.TRANS DANA PROFITRI', 'Jl. Pahlawan Revolusi Ruko Hexa Gre', 'ID', '12333', 'Jakarta', 'IV01', 'TRANS', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1062, 'RK9155', 'PT.Cikaniti Kso', 'no.6 Jl.A yani (By Pass) Utan Kayu', 'ID', '12333', 'Jakarta', 'IV01', 'CINAKITI', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1063, 'RK9156', 'PT. CC INTERNATIONAL SECURITY', 'Palma One Lt 3 Jl.Rasuna Said Kav X', 'ID', '12333', 'Jakarta', 'IV01', 'CC', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1064, 'RK9157', 'PT. TISA DIAMANTA KUSUMA', 'Kelurahan Mangga Dua Selatan, Kecam', 'ID', '12333', 'Jakarta', 'IV01', 'TISA', '', 'C100', 'PT. KCI-Kantor Pusat', '0001', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1065, 'RK9158', 'BNI', 'Kav I Jl. Jendral Sudirman', 'ID', '10220', 'Jakarta', 'IV01', 'BNI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1066, 'RK9159', 'SINDIKAT', 'Jl.', 'ID', '', 'Jakarta', 'IV01', 'SINDIKAT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1067, 'RK9160', 'PT DWI ARYA UNGGUL MANUNGGAL', 'JL. ENDE NO.34', 'ID', '', 'JAKARTA', 'IV01', 'DWI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1068, 'RK9161', 'PT INDOINTERNET', '11 JL REMPOA RAYA', 'ID', '15412', 'TANGGERANG SELATAN', 'IV01', 'INDONET', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1069, 'RK9162', 'BPJS KETENAGAKERJAAN', '12 JL IR H JUANDA', 'ID', '10120', 'JAKARTA', 'IV01', 'BPJSK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1070, 'RK9163', 'SPKA (DPP)', '1 JL PERINTIS KEMERDEKAAN', 'ID', '40117', 'BANDUNG', 'IV01', 'SPKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1071, 'RK9164', 'SPKA (DPD)', '1 JL IR H JUANDA', 'ID', '10120', 'Jakarta', 'IV01', 'SPKAD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1072, 'RK9165', 'BAITUL RIDHO', 'JL KEBON JUKUT', 'ID', '', 'BANDUNG', 'IV01', 'BAITUL RID', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1073, 'RK9166', 'BKRKA', 'BKRKA', 'ID', '', 'Jakarta', 'IV01', 'BKRKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1074, 'RK9167', 'BPJS KESEHATAN', 'JAKARTA', 'ID', '', 'JAKARTA', 'IV01', 'BPJSKES', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1075, 'RK9168', 'PT SANDI JASA ESTIKA', 'JL. MARTAPURA 8A KEBON MELATI', 'ID', '', 'JAKARTA PUSAT', 'IV01', 'SJE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', 'X', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1076, 'RK9169', 'PT. DUTA MUTIARA CITRA', '18B Jl. Ampera Raya Kemang NKF', 'ID', '', 'Jakarta', 'IV01', 'CITRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1077, 'RK9170', 'PT TRIMEGAH MITRA SEJATI', '6M JL DAAN MOGOT KM 14 NO', 'ID', '', 'JAKARTA BARAT', 'IV01', 'PT TMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1078, 'RK9171', 'PT JANNAH REZEKI', 'C 21 GRAHA CEMPAKA MAS BLOK', 'ID', '', 'JAKARTA', 'IV01', 'PT JR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1079, 'RK9173', 'PT TEGUH SEKAWAN', '01 JL TEBET RAYA NO', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'PT TS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1080, 'RK9174', 'PT. Sigma Visualindo', '11/18 jl festival boulevard AA', 'ID', '', 'Bekasi', 'IV01', 'PT SV', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1081, 'RK9175', 'PT MAKTEKINDO', '2 VIlla Mutiara Gading', 'ID', '', 'Bekasi', 'IV01', 'PT MAKTEK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1082, 'RK9176', 'PT JAYA AGUNG PERSADA', '1A JL. SERSAN H.HAMBALI NO', 'ID', '', 'BEKASI', 'IV01', 'PT JAP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1083, 'RK9177', 'PT INFOMEDIA NUSANTARA', '77-81 JL. RS FATMAWATI  CIPETE NO.', 'ID', '', 'jakarta selatan', 'IV01', 'PT IN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1084, 'RK9178', 'PT. Makmur Sukses Untung', '3-4 Jl Jendral Sudirman Kav', 'ID', '', 'Jakarta', 'IV01', 'PT MSU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1085, 'RK9179', 'Jagro Trans.,CO LTD', 'Palais Royal Sanno Tokyo 3-31-10', 'JP', '1430023', 'Tokyo, Japan', 'IV01', 'JAGRO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'JPY', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1086, 'RK9180', 'PT. TELKOMSEL', '42 Wisma Mulia m-19', 'ID', '', 'Jakarta', 'IV01', 'TLKM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1087, 'RK9181', 'PT TELKOMSEL', '42 JL JEND GATOT SUBROTO KAV', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'PT TEL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1088, 'RK9182', 'PT. RUENTA JAYA', '17 Jl. Pendidikan Raya', 'ID', '12345', 'Jakarta Timur', 'IV01', 'RJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1089, 'RK9183', 'PT KONECRANES', 'FF3C JL. PUPO AYANG RAYA', 'ID', '13930', 'JAKARTA TIMUR', 'IV01', 'KONECRANES', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1090, 'RK9185', 'PT ASIAMAJU SELARAS', '17 JL. LET. JEN HARYONO MT KAV', 'ID', '12810', 'JAKARTA', 'IV01', 'PT ASIA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1091, 'RK9186', 'PT. Pustaka Binaman Pressindo', '9 Jl. Menteng Raya', 'ID', '10340', 'Jakarta', 'IV01', 'PPM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1092, 'RK9187', 'PT MASTERSYSTEM INFOTAMA', '7-8 JL. JEND. SUDIRMAN KAV', 'ID', '', 'JAKARTA', 'IV01', 'MASTERSY I', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1093, 'RK9188', 'PT.SoftwareOne Indonesia', '4 Jl. HR Rasuna Said Kav X-2', 'ID', '12950', 'Jakarta', 'IV01', 'SOI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1094, 'RK9189', 'PT Ariiq Al-Wafi', '8  Jl. Raya Bouelevard Grand City E', 'ID', '', 'DEPOK', 'IV01', 'ARIIQ AL-W', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1095, 'RK9190', 'PT. KOMPUTAMA NUSANTARA', '5-6 Jl. Kuningan Madya Kav.', 'ID', '12980', 'JAKARTA', 'IV01', 'PT KN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1096, 'RK9191', 'PT. DATAGRID INDONESIA (DG)', '41 Jl. Let Jend TB Simatupang No.', 'ID', '12550', 'JAKARTA SELATAN', 'IV01', 'DATAGRID', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1097, 'RK9192', 'PT. ASTRA GRAPHIA INFORMATION TECHN', '33A JL. JEND SUDIRMAN KAV', 'ID', '10220', 'JAKARTA', 'IV01', 'ASTRA GRAP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1098, 'RK9195', 'PT. PUTRI SRI DANTY', '148-149 Jl. Kramat Bunder', 'ID', '10410', 'Jakarta Pusat', 'IV01', 'PSD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1099, 'RK9196', 'PT. SUCOFINDO', '1 Jl. ARTERI', 'ID', '17520', 'BEKASI', 'IV01', 'SCF', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1100, 'RK9197', 'PT. DENDO SARANA INDONESIA', '6-8 Graha YKPP', 'ID', '11111', 'SURABAYA', 'IV01', 'DSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1101, 'RK9199', 'PT MAHARUPA GATRA', '46-47 : Jl. Danau Sunter Selatan, B', 'ID', '14350', 'Jakarta', 'IV01', 'MG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1102, 'RK9200', 'PT. IP NETWORK SOLUSINDO', '26P JL. MAJAPAHIT NO.', 'ID', '10160', 'JAKARTA PUSAT', 'IV01', 'PI NET', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1103, 'RK9201', 'PT UPRINDO JAYA', '102 JL. PELAJAR PERJUANGAN NO.', 'ID', '', 'BANDUNG', 'IV01', 'UPRINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1104, 'RK9202', 'PT. CATUR SIWI LANGGENG', '60 JL. SAWAH BARAT II RT 018 RW 006', 'ID', '13430', 'JAKARTA TIMUR', 'IV01', 'CATUR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1105, 'RK9203', 'PT. CATUR SIWI LANGGENG', '60 Jl. SAWAH BARAT II', 'ID', '13430', 'Jakarta', 'IV01', 'CSL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1106, 'RK9204', 'PT.Dos Ni Roha', 'No.1 Jl.Raya Panjang', 'ID', '11520', 'Jakarta', 'IV01', 'DNR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1107, 'RK9205', 'PT.Resik Mandiri', 'X-2 Jl. HR. Rasuna Said Kav. 6', 'ID', '12950', 'Jakarta', 'IV01', 'REMAPEST', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1108, 'RK9206', 'PT WINESTI CITRA PERDANA', '261 JL.KRAMAT RAYA BARU BLOK E4 NO.', 'ID', '10560', 'JAKARTA PUSAT', 'IV01', 'WINESTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1109, 'RK9207', 'PT ALTRAK 1978', '32 JL. TERUSAN BUAHBATU NO.', 'ID', '', 'BANDUNG', 'IV01', 'ALTRAK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1110, 'RK9208', 'PT TERRADATA BERKAH SINERGI', 'JL.', 'ID', '', 'JAKARTA', 'IV01', 'TERRADATA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1111, 'RK9209', 'PT MAKTEKINDO', 'JL.', 'ID', '', 'JAKARTA', 'IV01', 'MAKTEKINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', 'X', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1112, 'RK9210', 'PT GIWANGKARA DAKSHATAMA', '62 JL. PUSDIKLAT DEPNAKER NO', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'GIWANG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1113, 'RK9211', 'PT PUJI LESTARI PRATAMA', 'JL.ARTERI PERMATA HIJAU', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'PUJI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1114, 'RK9212', 'PT UTAMI SELARAS', '8 JL. BANCEUY NO.', 'ID', '', 'BANDUNG', 'IV01', 'UTAMI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1115, 'RK9213', 'BCA', 'Menara BCA Grand Indonesia, Jl. MH', 'ID', '', 'JAKARTA', 'IV01', 'BCA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1116, 'RK9214', 'BANK MANDIRI', 'JL.', 'ID', '', 'JAKARTA', 'IV01', 'BANK MANDI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1117, 'RK9215', 'BRI', 'JL', 'ID', '', 'JAKARTA', 'IV01', 'BRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1118, 'RK9216', 'PT NUSA JAYA MAKMUR', '1 Jl Gunung Shari Raya', 'ID', '11111', 'Jakarta', 'IV01', 'NJM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1119, 'RK9217', 'PT CURSATIMA PURNACIPTA', 'Jl Raya Pasarminggu', 'ID', '12760', 'Jakarta Selatan', 'IV01', 'CP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1120, 'RK9218', 'PT WIN PUTRA MANDIRI', 'XX Ruko Kranggan permai', 'ID', '11111', 'Bekasi', 'IV01', 'WPM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1121, 'RK9219', 'PT. ANGGADA PERKASA TEKNIK', '18B Jl Kembang Raya', 'ID', '11111', 'Jakarta Timur', 'IV01', 'APT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1122, 'RK9220', 'PT. PRIMA INDO PASIFIK', '12 Komplek Harco Mangga Dua', 'ID', '10730', 'Jakarta', 'IV01', 'PRIMA INDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1123, 'RK9223', 'PT. BERKAT KARUNIA METALINDO', '51 Jl. Kebon Manggis', 'ID', '30125', 'Palembang', 'IV01', 'BKM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1124, 'RK9224', 'PT.BUMA KUMAWA JAYA', '44 jl durian raya', 'ID', '11111', 'Jakarta', 'IV01', 'BKJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1125, 'RK9225', 'PT Prima SH Indonesia', '1 B Jl. Pangkalan', 'ID', '17130', 'Bekasi', 'IV01', 'PSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1126, 'RK9226', 'PT Creativity Makmur Sejahterah', '7E Jl.Pasar Baru Timur lt.2', 'ID', '10220', 'Jakarta', 'IV01', 'CMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1127, 'RK9227', 'CV Tirta Utama Madani', '15 E Jl. Sudirman', 'ID', '16121', 'BOGOR', 'IV01', 'TUM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1128, 'RK9228', 'CV Baretta Cemerlang', '10 Jl. Lanbau (Lio Baru)', 'ID', '16810', 'Bogor', 'IV01', 'BC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1129, 'RK9229', 'PT Srikandi Pitaloka Dinamika', '34 Kesehatan Bawah', 'ID', '12330', 'Jakarta', 'IV01', 'SPD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1130, 'RK9230', 'PT. Asuransi Jiwasraya', '66 Jl. Kebayoran Baru', 'ID', '12240', 'Jakarta', 'IV01', 'AJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1131, 'RK9231', 'PT.DWIKARYA UNGGUL MANUNGGAL', '34 Jl.Ende, Tanjung Priok', 'ID', '14310', 'Jakarta', 'IV01', 'DUM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1132, 'RK9232', 'PT KOKARYASA', '23A JL. KH ABDULLAH SYAFEI NO.', 'ID', '', 'jakarta selatan', 'IV01', 'KOKARYASA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1133, 'RK9233', 'PT PULAU PULAU MEDIA', 'Kantor Fatmawati Mas Blok III No. 3', 'ID', '12430', 'JAKARTA SELATAN', 'IV01', 'PULAU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1134, 'RK9234', 'PT Chandra Plastindo Makmur', '15 Jl. KH. Hasyim Ashari', 'ID', '15148', 'Jakarta', 'IV01', 'CPM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1135, 'RK9235', 'PT. PANORAMA WISATA INDONESIA', '79 Jl. Ancol Selatan', 'ID', '11111', 'Jakarta', 'IV01', 'PWI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1136, 'RK9236', 'PT. YAGO MEDIA KREATIF', '21 JL. RAYA PENGASINAN', 'ID', '16518', 'Depok', 'IV01', 'YMK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1137, 'RK9237', 'CV ICON GLOBAL INDONESIA', '8 JL. TATAWINATA', 'ID', '11111', 'Bogor', 'IV01', 'IGI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1138, 'RK9238', 'PT. AZMI ANUGRAH PERDANA', '67 Jl. Matraman Raya', 'ID', '11111', 'Jakarta', 'IV01', 'ANP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1139, 'RK9239', 'PT. VIACOM MANDIRI', '3 A Jl.Bintaro', 'ID', '15225', 'Jakarta', 'IV01', 'VM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1140, 'RK9240', 'PT. Sineka Satuindo', 'G7/12 Manglayang', 'ID', '11111', 'bandung', 'IV01', 'SS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1141, 'RK9241', 'PT Bank Mandiri (Persero) Tbk', '36-38 Jl. Jend Gatot Subroto', 'ID', '12190', 'Jakarta', 'IV01', 'MANDIRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1142, 'RK9242', 'PT AGUNG DHARMA SENTOSA', '27 Jl.M Nurul Hidayah', 'ID', '13730', 'Jakarta', 'IV01', 'ADS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1143, 'RK9243', 'PT GJ INTERNASIONAL', '7-8 JL. JENDRAL SUDIRMAN KAV', 'ID', '', 'JAKARTA PUSAT', 'IV01', 'GJI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1144, 'RK9244', 'PT. ANUGERAH RAYA KARYA MANDIRI', '30-31 Cluster Green VIllage Blok V3', 'ID', '13450', 'karawang', 'IV01', 'ARKM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1145, 'RK9245', 'PT ELINDO GRAND', '13 JL. RAYA PENGILINGAN BLOK A3 NO', 'ID', '13940', 'JAKARTA', 'IV01', 'ELINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1146, 'RK9246', 'PT PERMATA KASIH KARUNIA', 'NO.38 JL. LETJEN SUPRAPTO ,CEMPAKA', 'ID', '10640', 'JAKARTA PUSAT', 'IV01', 'PERMATA KK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1147, 'RK9247', 'PT SUMBER SETIAWAN SEJAHTERA', '9A JL. TANJUNG DUREN RAYA NO.', 'ID', '', 'JAKARTA BARAT', 'IV01', 'SSS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', 'X', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1148, 'RK9248', 'PT LUBUK TEGAR PERKASA', 'J-136 JL. CIPINANG JAYA WISMA ELOK', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'LUBUK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1149, 'RK9249', 'PT MODERN SURYA JAYA', '53 JL. GATOT SUBROTA KAV.', 'ID', '10260', 'JAKARTA', 'IV01', 'MODERN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1150, 'RK9250', 'PT MITRA WAHANA KARUNIA', '10 JL. PESANGGRAHAN RAYA NO.', 'ID', '11610', 'JAKARTA', 'IV01', 'MITRA WK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1151, 'RK9251', 'PT MEGA DAYA', 'Jl. Pulo Kambing 32, Kawasan Indust', 'ID', '13930', 'JAKARTA', 'IV01', 'MEGA D', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1152, 'RK9252', 'PT AGRICON PUTRA CITRA OPTIMA', '68 JL. SILIWANGI NO', 'ID', '', 'BOGOR', 'IV01', 'AGRICON', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1153, 'RK9253', 'PT. TRIPUTRA NUSAMANDALA', 'PA 9 Jl. Boulevard Raya Blok', 'ID', '14240', 'Jakarta', 'IV01', 'TN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1154, 'RK9254', 'CV. Kemuning', '49A Jl. Kebon Pedes', 'ID', '11111', 'Bogor', 'IV01', 'KEMUNING', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1155, 'RK9255', 'PT. STRATEGIC CONSULTING INDONESIA', '16 Jl. Ciputat Raya', 'ID', '12310', 'Jakarta Selatan', 'IV01', 'SCI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1156, 'RK9256', 'PT NGERUMAT JARING INFORMA', 'LOT 5-1 MENARA RAJAWALI LEVEL 7-1', 'ID', '12950', 'Jakarta Selatan', 'IV01', 'NGERUMAT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1157, 'RK9257', 'PT PUNAKAWAN ALAM SEJAHTERA', 'KAV 74-75 JALAN GATOT SUBROTO', 'ID', '11111', 'Jakarta Selatan', 'IV01', 'PUNAKAWAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1158, 'RK9258', 'PT. SOFTBLESS SOLUTIONS', 'No.148 Jl.Matraman Raya', 'ID', '13150', 'Jakarta Timur', 'IV01', 'SS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1159, 'RK9259', 'PT HARUNI CITRA GEMILANG', '15D Jln Pramuka raya', 'ID', '13120', 'Jakarta Timur', 'IV01', 'HARUNI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1160, 'RK9260', 'PT. BINTANGTERANG ARGAPERSADA', '42 Jl Lancar II', 'ID', '11111', 'Jakarta Pusat', 'IV01', 'BINTANG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1161, 'RK9261', 'PT. PRAMITAMULIA MITRAKARYA', 'Jl. Kampus Pramita', 'ID', '15810', 'Tanggerang', 'IV01', 'PM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1162, 'RK9262', 'PT. CAHAYA INTAN ENGINEERING', '6 JL. KH Sanip', 'ID', '11111', 'Bogor', 'IV01', 'CIE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1163, 'RK9263', 'PT. LUXINDO PUTRA MANDIRI', '17 Jl.Cicalengka', 'ID', '11111', 'Bandung', 'IV01', 'LPM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1164, 'RK9264', 'PT. Biolaborindo Makmur Sejahtera', '48 : Jl. Sumatra', 'ID', '11111', 'Jakarta Pusat', 'IV01', 'BMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1165, 'RK9265', 'PT CAHAYA INTAN ENGINEERING', '6 Jl KH Sanip', 'ID', '16969', 'BOGOR', 'IV01', 'CIE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1166, 'RK9266', 'PT. HARRISMA INFORMATIKA JAYA', '6 Komp. Perkantoran Taman', 'ID', '11650', 'Jakarta', 'IV01', 'HIJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1167, 'RK9267', 'PT. TRIMITRA DATA TEKNOLOGI', 'Menara Standard Chartered Jl. Prof', 'ID', '12930', 'Jakarta', 'IV01', 'TDT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1168, 'RK9268', 'PT. CIPTA INOVASI TEKNOLOGI', '1 Menara BCA Lt 50 JL MH Thamrin No', 'ID', '10310', 'Jakarta', 'IV01', 'CIT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1169, 'RK9269', 'PT. ASURANSI WAHANA TATA', 'C-4 Jl. HR Rasuna Said Kav', 'ID', '12920', 'Jakarta', 'IV01', 'AWT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1170, 'RK9270', 'PT. ASURANSI JASA INDONESIA', '61 Jl. Letjend. MT.Haryono Kav.', 'ID', '11110', 'Jakarta', 'IV01', 'AJI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1171, 'RK9271', 'PT. Aplikanusa Lintasarta', '3 Jl. MH Thamrin', 'ID', '10250', 'Jakarta', 'IV01', 'AL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1172, 'RK9272', 'PT. ASURANSI JIWASRAYA (PERSERO)', '34 Kantor Pusat, Jl. Ir. H. Juanda', 'ID', '10120', 'Jakarta', 'IV01', 'AJS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1173, 'RK9273', 'PT. Infometro Mediatama', '8 A Jl. Panjang', 'ID', '11530', 'JAKARTA BARAT', 'IV01', 'IM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1174, 'RK9274', 'PT. RASICIPTA CONSULTAMA', 'No.1 Jl.Bhineka Raya RT/RW. 10/09 K', 'ID', '13340', 'Jakarta', 'IV01', 'RC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1175, 'RK9275', 'PT. Sarana Maju Lestari', 'Lt.18-A Gedung Office 8,Jl Jend Sud', 'ID', '11111', 'Jakarta', 'IV01', 'SML', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1176, 'RK9276', 'PT. GAPURA NIRWANA AGUNG KONSULTAN', '1 Jl. Tebet Barat, Rumah Susun Haru', 'ID', '12810', 'Jakarta Selatan', 'IV01', 'GNAK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1177, 'RK9277', 'PT. KOMPAKAR INDONESIA', '62 Jl.Ciputat Raya', 'ID', '12130', 'Jakarta', 'IV01', 'KI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1178, 'RK9278', 'PT. DINAMIKA PRAKARSA', 'No.23 Jl. H.M Ashyari', 'ID', '11111', 'Bogor', 'IV01', 'DP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1179, 'RK9281', 'HJ. Siti Umayah', '01 Karang Asih, Cikarang Utara', 'ID', '17530', 'Jawa Barat', 'IV01', 'SU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1180, 'RK9282', 'PT. DILA ORGANISASI ABADI', 'no. 8B Perum Acropolis', 'ID', '11111', 'Bogor', 'IV01', 'DOA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1181, 'RK9283', 'PT. Duta Katiga Mandiri', '24 M Komp. Ruko Jatiwaringin Juncti', 'ID', '13620', 'Jakarta', 'IV01', 'DKM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1182, 'RK9284', 'PT. KREATIF DINAMIKA INTEGRASI', '504 A Jl. H.R Said Kuningan', 'ID', '12920', 'Jakarta', 'IV01', 'KDI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1183, 'RK9285', 'PT. HALCO GLOBAL INDONESIA', '25 Metlan Transyogi Ruko', 'ID', '11111', 'Bogor', 'IV01', 'HGI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1184, 'RK92890', 'PT Tata Kelola Komunika', '16 Jl. Ciputat Raya', 'ID', '12310', 'Jakarta', 'IV01', 'TKK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1185, 'RK92891', 'Lembaga Psikologi Terapan', '4 Jl. Salemba Raya', 'ID', '10430', 'Jakarta', 'IV01', 'LPTUI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1186, 'RK9311', 'PT.Purinda Karya Jaya', '9 Jl.Raya Kapin', 'ID', '13450', 'Jakarta', 'IV01', 'PRJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1187, 'RK9312', 'PT. TOSI GEMILANG SOLUSINDO (TGS)', '09 Ruko Festival Boelevard Blok AA.', 'ID', '17510', 'Bekasi', 'IV01', '17510', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1188, 'RK9313', 'PT.DUTA KARYA', '188 A Jl. Mangga Besar V', 'ID', '11180', 'Jakarta', 'IV01', 'DK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1189, 'RK9314', 'PT. SUMBER SETIAWAN SEJAHTERA', '9A Jl. Tanjung Duren Raya', 'ID', '11470', 'Jakarta BARAT', 'IV01', 'SUMBER SS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1190, 'RK9315', 'PT. BINA INDEX CONSULT', '46 Jl. Cisangkuy', 'ID', '40115', 'Bandung', 'IV01', 'BIC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1191, 'RK9316', 'PT. MUNASA KREASI NUSANTARA', '17 Jl. Mars Selatan', 'ID', '40286', 'Bandung', 'IV01', 'MKN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1192, 'RK9317', 'PT.ANUGRAH KARYA PERKASA', 'Jl. Kalibata Raya25', 'ID', '13630', 'Jakarta', 'IV01', 'AKP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1193, 'RK9318', 'PT. GEMILANG JAYA ARTELINDO', '1 Jl.Pramuka Raya', 'ID', '13140', 'Jakarta', 'IV01', 'GJA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1194, 'RK9319', 'PT MECHATRONIC INTERNASIONAL', '7-8 JL. JEND. SUDIRMAN KAV.', 'ID', '10220', 'JAKARTA', 'IV01', 'MECHATRONI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1195, 'RK9320', 'CV. DIMENSI LOGAM TEHNIKTAMA', '16 RUKO SENTRA ANEKA NIAGA BLOK', 'ID', '11111', 'Bekasi', 'IV01', 'DLT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1196, 'RK9321', 'CV. VARINDO JAYA', '164 JL.GAGA BLOK H BAYAR', 'ID', '11850', 'Jakarta', 'IV01', 'VJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1197, 'RK9322', 'PT INDOFASHION CIPTAKREASI BUSANA', 'JL.', 'ID', '', 'JAKARTA', 'IV01', 'INDOFASHIO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1198, 'RK9323', 'PT PILAR GLOBAL SOLUSI', '7-8 JL. JEND. SUDIRMAN KAV.', 'ID', '10220', 'JAKARTA PUSAT', 'IV01', 'PILAR GS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1199, 'RK9324', 'PT RAFA TRANS INDO', 'JL. MARZUKI 8 KP. JEMBATAN', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'R TRANS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1200, 'RK9325', 'PT MUHTOMAS', '20-21 JL.JABABEKA II NO', 'ID', '', 'BEKASI', 'IV01', 'MUHTOMAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1201, 'RK9326', 'PT MENARA MEGA MANDIRI', '149.C JL. OTTO ISKANDARDINATA NO.', 'ID', '13330', 'JAKARTA', 'IV01', 'MENARA MM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1202, 'RK9330', 'PT.Multi Utama Indojasa', '15 JL.TB Simatupang', 'ID', '12345', 'Jakarta', 'IV01', 'MUI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1203, 'RK9331', 'PT.Pratama Indomitra Konsultan', '57 JL.TB Simatupang', 'ID', '11111', 'Jakarta', 'IV01', 'PIKK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1204, 'RK9332', 'PT Kharisma Integrasi Manajemen', '529 A Jl.H.R Rasuna Said Kuningan', 'ID', '11111', 'Jakarta', 'IV01', 'KIM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1205, 'RK9333', 'PT MULTIDAYA DINAMIKA', 'B1 JL. HR RASUNA SAID KAV', 'ID', '12920', 'JAKARTA', 'IV01', 'MULTIDAYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1206, 'RK9334', 'PT WARINGIN JATI', '9 JL. GARUDA N0', 'ID', '50174', 'SEMARANG', 'IV01', 'WARINGIN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1207, 'RK9335', 'infinitum Law Office', 'A-9 jl. Wijaya II Grand Centert Blo', 'ID', '', 'JAKARTA', 'IV01', 'LAW', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1208, 'RK9336', 'INTEGRA DATA STRATEGI, PT', '4 Rukan The Walk No23 Jakarta Garde', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'IDS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1209, 'RK9337', 'PT SWASEMBADA MEDIA BISNIS', 'JL. TAMAN TANAH ABANG III/23', 'ID', '', 'JAKARTA PUSAT', 'IV01', 'SMB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1210, 'RK9338', 'PT MEGA GLOBAL METAMORFOSA', '141-149 JL. ASIA AFRIKA WISMA BUMIP', 'ID', '', 'BANDUNG', 'IV01', 'MGM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1211, 'RK9339', 'ABDHIKA KREASI MANDIRI, PT', 'No 37 Gd DPD AKLI Jakarta I Jl Abdu', 'ID', '', 'JAKARTA', 'IV01', 'AKM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1212, 'RK9340', 'PT GAMAWINDO UTAMA', '275 JL. CIPARAY TENGAH NO', 'ID', '', 'BANDUNG', 'IV01', 'GAMAWINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1213, 'RK9341', 'PT DIAN AYU PRIMANTARA', '43 JL. TEBET TIMUR RAYA NO.', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'DIAN AYU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1214, 'RK9342', 'PT BRALINK INTERTRADE', '20 JL. RAYA PASO  JAGAKARSA NO.', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'BRAILINK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1215, 'RK9343', 'PT ARTHA PANEL PERKASA', 'B-5 JL. RAYA BEKASI KM 25 CAKUNG BL', 'ID', '13960', 'JAKARTA TIMUR', 'IV01', 'PANEL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1216, 'RK9344', 'PT MULTI GRAHA TEKNIKA', '27 JL. JEND. GATOT SUBROTO KAV.', 'ID', '', 'JAKARTA', 'IV01', 'MULTI GRAH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1217, 'RK9345', 'PT HASTA UTAMA PRAKARSA', 'NO.2 JL. TROWULAN V BLOK V2 Pharmin', 'ID', '', 'Bandung', 'IV01', 'HUP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1218, 'RK9346', 'PT KONECRANES', 'FF3C JL. PULO AYANG RAYA PULO GADUN', 'ID', '', 'JAKARTA', 'IV01', 'KONECRANES', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1219, 'RK9347', 'PT CENTRAL BEARINDO INTERNASIONAL', '21 M JL. H. SAMANHUDI NO.', 'ID', '10710', 'JAKARTA', 'IV01', 'BEARINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1220, 'RK9348', 'CV LUX ETERNA', '10 JL. RAYACIRACAS RT.004/07 NO.', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'LUX', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1221, 'RK9349', 'PT HUDON PRATAMA SUKSES', '357 JL. GRAHA SARTIKA Lt. 3 R302 DE', 'ID', '13630', 'JAKARTA TIMUR', 'IV01', 'HUDON', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1222, 'RK9350', 'PT RAHMAT SEJAHTERA', '9-11 JL. Industri Raya No.', 'ID', '10720', 'JAKARTA TIMUR', 'IV01', 'RS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1223, 'RK9351', 'KEMENTRIAN PERHUBUNGAN DIRJENKA', '8 JL. MEDAN MERDEKA NO.', 'ID', '10110', 'JAKARTA', 'IV01', 'DIRJENKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1224, 'RK9352', 'PT KRISBOW INDONESIA', '1 JL. PURI KENCAANA NO.', 'ID', '11610', 'JAKARTA BARAT', 'IV01', 'KRISBOW', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1225, 'RK9353', 'PT ERA PERMATA SEJAHTERA', '9 JL. CIPINANG JAYA RAYA BLOK AA NO', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'ERA PS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1226, 'RK9354', 'PT FRESHKLINDO GRAHA SOLUSI', 'E.20 KEBON JERUK PLAZA JL. PERJUANG', 'ID', '', 'JAKARTA BARAT', 'IV01', 'FRESHKLIND', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1227, 'RK9355', 'PT BERKAT BERSAMA DAYAMU', '15.AA JL. CITY RESORT RESIDENCE BLO', 'ID', '', 'JAKARTA BARAT', 'IV01', 'BERKAT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1228, 'RK9356', 'PT GOE-TECH INDONESIA', 'NO.367 JL.  PERUM BUMI TELUKJAMBE B', 'ID', '', 'JAWA BARAT', 'IV01', 'GOE-TECH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1229, 'RK9358', 'SUMITOMO CORPORATION', '1-8-11 HARUMI, CHUO-KU', 'JP', '1048610', 'TOKYO', 'IV01', 'SUMITOMO', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'JPY', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1230, 'RK9359', 'INDUK KOPERASI KARYAWAN KERETA API', 'Jl. Bekasi Barat No 1 Jatinegara,', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'INKOPKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1231, 'RK9360', 'PT. ALDY MUARA RIZKY', '9 Jl. Jend Ahmad Yani', 'ID', '13120', 'Jakarta', 'IV01', 'AMR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1232, 'RK9361', 'CV. TRIBUSINDO MITRA', '- KO Jati Cempaka Bekasi', 'ID', '11111', 'Bekasi', 'IV01', 'TM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1233, 'RK9362', 'CV.INDORAYA JAYA', '1 Jl. Raya Kalimalang', 'ID', '11111', 'Jakarta', 'IV01', 'IJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1234, 'RK9363', 'PT. BINTANG INOVASI SELARAS', '38 A Jl.Timah', 'ID', '11111', 'Jakarta', 'IV01', 'BIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1235, 'RK9364', 'PT. KECIL SEDANG BESAR', '1 Jl. Pondok Kelapa Blok G9', 'ID', '11111', 'Jakarta', 'IV01', 'KSB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1236, 'RK9365', 'PT. DUTA GALANG SOLUSI', '- Tavalera Office Suite', 'ID', '11111', 'Jakarta', 'IV01', 'DGS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1237, 'RK9366', 'PT. GLOBAL SMART TECHNOLGY', 'Jl. Prof Joko Sutono', 'ID', '11111', 'Jakarta', 'IV01', 'GST', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1238, 'RK9367', 'PT. Adwa Kreatif Media', '7 C : Jl. Melawai Raya C', 'ID', '12160', 'Jakarta', 'IV01', 'AKM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1239, 'RK9368', 'CV TALA JALAINDO', 'I Jl. Perintis Kemerdekaan', 'ID', '11111', 'Jakarta', 'IV01', 'TJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1240, 'RK9382', 'SMARTINDO INTEGRASI SYSTEM, PT', 'Komp. Perkantoran Agung Sedayu Harc', 'ID', '10730', 'Jakarta', 'IV01', 'SMARTINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1241, 'RK9383', 'INKA MULTI SOLUSI SERVICE, PT', 'Jl. Salak No 59 RT 007 RW 012 Kel T', 'ID', '', 'Madiun', 'IV01', 'INKA MULTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1242, 'RK9389', 'SMART TECHNOLOGIES, PT', 'Sudirman Plaza-Plaza Marien Lt12 Jl', 'ID', '12910', 'Jakarta', 'IV01', 'SMART TECH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1243, 'RK9411', 'PT. DELTA SAMITRA UTAMA', '5 Jl Kramat Raya', 'ID', '12240', 'Jakarta Selatan', 'IV01', 'DSU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1244, 'RK9412', 'PT. TERRADATA BERKAH SINERGI', '123 Jl. xxx', 'ID', '11111', 'Jakarta', 'IV01', 'TBS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1245, 'RK9413', 'CV. BETA KARYA', 'xx JL. CIPACUR RT 025 RW 06 PADAAS', 'ID', '11111', 'Jawa Barat', 'IV01', 'BK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1246, 'RK9414', 'PT TITAN CIPTA SINERGY', 'NO.19 JL. RAYA JAKARTA -BOGOR KM 43', 'ID', '', 'CIBINONG', 'IV01', 'TITAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1247, 'RK9415', 'ADJ ALFACOM TEHNIK JAYA', '16 JL. CEMPAKA PUTIH BARAT XXI NO.', 'ID', '', 'JAKARTA', 'IV01', 'ALFACOM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1248, 'RK9416', 'PT MITRA LINTAS TECHNOLOGY', '165-16 JL. MATRAMAN RAYA NO.', 'ID', '13140', 'JAKARTA TIMUR', 'IV01', 'MITRA LT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1249, 'RK9419', 'PT. MEDINA ENGINEERING', '99B JL. RAYA NAROGONG PANGKALAN 2', 'ID', '11111', 'Bekasi', 'IV01', 'ME', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1250, 'RK9421', 'PT. NUSA CIPTA SOLUSI', '1 Jl.Gunung Sahari Raya', 'ID', '14420', 'Jakarta Utara', 'IV01', 'NCS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1251, 'RK9422', 'PT. DATA INTEGRASI INTERNUSA', 'L6 Thamrin City', 'ID', '11111', 'Jakarta', 'IV01', 'DII', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1252, 'RK9423', 'PT. MITRA MANDIRI INFORMATIKA', '7 SME Tower 16th Floor', 'ID', '12790', 'Jakarta', 'IV01', 'MMI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1253, 'RK9424', 'PT ANKAIDO SARANA SEJAHTERA', '5 JL. DANAU SUNTER UTARA BLOK.', 'ID', '14350', 'JAKARTA UTARA', 'IV01', 'ANKAIDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1254, 'RK9425', 'PT NUSA KARYA INDONESIA', 'Jl. RS Fatmawati No. 16, Gandari Se', 'ID', '12420', 'JAKARTA SELATAN', 'IV01', 'NUSA KI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1255, 'RK9426', 'PT DATAKOMINDO MITRA MANDIRI', 'JL. RAYA KECAPI JATI RAHAYU', 'ID', '', 'BEKASI', 'IV01', 'DATAKOMIND', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1256, 'RK9427', 'CV TERMSKOM IN MEDIA', 'DA 48 JL. ANGGUR RAYA PURI NIRWANA', 'ID', '16913', 'BOGOR', 'IV01', 'TERMSKOM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1257, 'RK9430', 'PT. SIGMA CIPTA CARAKA', '5th Jl. Kapt. Subijanto Dj. Bumi', 'ID', '15321', 'Tangerang', 'IV01', 'SIGMA CIPT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1258, 'RK9431', 'PT GLOBAL DATA TEKNOLOGI', '7 JL. BINALOKA I BLOK A1 NO.', 'ID', '', 'BEKASI', 'IV01', 'GDT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1259, 'RK9432', 'PT NALIQA TOTAL SOLUSI', '20 JL. TEBET BARAT IV RTOO8/002 NO', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'NALIQA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1260, 'RK9433', 'PT MULIA VISITAMA INDONESIA', '17A JL. BUKIT INDAH BLOK Q NO.', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'MVI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1261, 'RK9434', 'PT ASTRA GRAPHIA INFORMATION TECHNO', '43 JL. KRAMAT RAYA NO.', 'ID', '10450', 'JAKARTA', 'IV01', 'ASTRA GIT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1262, 'RK9435', 'PT GIS TEKNOLOGI PRASASTA', 'JL.', 'ID', '', 'JAKARTA', 'IV01', 'GIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1263, 'RK9436', 'PT ANUGRAH DATANUSA JABODETABEK', '41 JL. MANGGA DUA RAYA BLOK I NO.', 'ID', '10730', 'JAKARTA', 'IV01', 'ADJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1264, 'RK9437', 'PT JARINGAN INTECH INDONESIA', '137 JL. SENEN RAYA NO. 135', 'ID', '10410', 'JAKARTA PUSAT', 'IV01', 'INTECH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1265, 'RK9438', 'PT IMPERO NUSA PRATAMA', '47 RY POLYMER RT 002/ 005 NO', 'ID', '', 'BEKASI', 'IV01', 'IMPERO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1266, 'RK9439', 'KOPERASI BATUR JAYA', 'BATUR, TEGALREJO, CEPEN KLATEN', 'ID', '57465', 'JAWA TENGAH', 'IV01', 'BATUR JAYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1267, 'RK9440', 'HAMZAH FANSYURI LAW OFFICE', 'JL.DR IDE ANAK AGUNG GDE AGUNG Gd.', 'ID', '12950', 'JAKARTA SELATAN', 'IV01', 'HAMZAH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1268, 'RK9441', 'PT BESTA MEDIA MANDIRI', '138 JL. PUSKESMAS PONDOK AREN NO.', 'ID', '', 'TANGGERANG SELATAN', 'IV01', 'BESTA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1269, 'RK9442', 'PT STRATEGIC CONSULTING INDONESIA', '16 JL. CIPUTAT RAYA NO.', 'ID', '', 'JAKARTA', 'IV01', 'SCI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1270, 'RK9443', 'PT PESONA PRIMA UTAMA', '60E-G JL. Dr. SUHARJO N0.', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'PESONA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1271, 'RK9444', 'PT TRITUNGGAL SEJAHTERA MARGAWI', 'III/7 JL. PERINTIS KEMERDEKAAN BLOK', 'ID', '13260', 'JAKARTA', 'IV01', 'TRITUNG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1272, 'RK9445', 'CV MARS JOYA PERKASA', 'NO.1 Lt.1 JL. RAYA PONDOK KELAPA KE', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'MARS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1273, 'RK9446', 'PT JAVA DWIPA NUSANTARA', 'JL. MT HARYONO KAV.23  TEBET', 'ID', '12820', 'JAKARTA', 'IV01', 'JAVA DWIPA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1274, 'RK9447', 'PT SPEKTRA SOLUSINDO', 'JL. CISANGGIRI I NO. 8', 'ID', '', 'JAKARTA', 'IV01', 'SPEKTRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1275, 'RK9448', 'PT REZEKI SURYA INTIMAKMUR', '37 F JL. RS FATMAWATI RAYA N0.', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'RSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1276, 'RK9449', 'PT. SRIKANDI DIAMOND MOTORS', '23 Jl.Mampang Prapatan Raya', 'ID', '12790', 'Jakarta Selatan', 'IV01', 'SRIKANDI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1277, 'RK9450', 'PT. BINTARA KARYA JAYA', 'RW 008 JL. BINTARA JAYA II NO. 14', 'ID', '', 'BEKASI', 'IV01', 'BKJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1278, 'RK9451', 'PT DOSMARISA NUR DESIMA', '40 JL. KEBON SIRH KEL GAMBIR NO.', 'ID', '', 'JAKARTA', 'IV01', 'DOSMARISA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1279, 'RK9452', 'PT. BOSWELL MAHAKARYA INDONESIA', 'Jl. Raya Bekasi KM. 21 Pulogadun', 'ID', '', 'JAKARTA', 'IV01', 'BOSWELL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1280, 'RK9453', 'PT. DUA DAYA SINERGI', 'JL. ASIA AFRIKA PINTU IX GELORA', 'ID', '10270', 'JAKARTA', 'IV01', 'DUA DAYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1281, 'RK9454', 'PT. CITRA INTI SEMESTA', 'Jl. Fajar Baru Utara No. 57  RT 05', 'ID', '11730', 'JAKARTA BARAT', 'IV01', 'CITRA INTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1282, 'RK9455', 'CV. VARIAN FAJAR PRATAMA', '55 Jl.Surapati No', 'ID', '40122', 'BANDUNG', 'IV01', 'VARIAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1283, 'RK9456', 'PT TARUNA JAYA INTERNASIONAL', 'NO.6 JL. RE. MARTADINATA ANCOL BLOK', 'ID', '14420', 'JAKARTA', 'IV01', 'TARUNA JI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1284, 'RK9457', 'PT ASIAPACIFIC TRUE TRUST', 'NO.37 JL. KAMAL MUARA VII BLOK E1', 'ID', '14470', 'JAKARTA', 'IV01', 'ASIAPACIFI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1285, 'RK9458', 'PT MURNI SOLUSINDO NUSANTARA', 'NO.41-43A RUKAN TAMAN MERUYA BLOK M', 'ID', '11620', 'JAKARTA', 'IV01', 'MSN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1286, 'RK9459', 'PT SATYA WIRA MANGGALA', 'NO.A2 Jl. Kalibata Selatan II  RT00', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'SWM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1287, 'RK9460', 'CV. NOVALINA SEJAHTERA', 'Jl. Manunggal Bhakti No. 24 RT 008/', 'ID', '13790', 'JAKARTA TIMUR', 'IV01', 'NOVALINA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1288, 'RK9461', 'PT RAY MULTIMEDIA INDONESIA', 'Jl. Asia Afrika Pintu IX Tanah Aban', 'ID', '', 'JAKARTA PUSAT', 'IV01', 'RAY', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1289, 'RK9462', 'PT NEWSTAR JAYA PERKASA', 'Blok A 49 Jl. Raya Peta Selatan, Ko', 'ID', '11840', 'JAKARTA BARAT', 'IV01', 'NEWSTAR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1290, 'RK9463', 'CV. TOGUS KARUNIA', 'NO.24A JL. PAHLAWAN REVOLUSI RT.003', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'TOGUS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1291, 'RK9464', 'PT MHE-DEMAG INDONESIA', 'NO.22 JL.WARUNG BUNCIT RAYA', 'ID', '12510', 'JAKARTA SELATAN', 'IV01', 'MHE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1292, 'RK9465', 'PT BACH MULTI GLOBAL', 'NO.27 JL. CIDENG BARAT', 'ID', '10150', 'JAKARTA PUSAT', 'IV01', 'BACH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1293, 'RK9467', 'PT CITO PUTRA UTAMA', 'JL. INDRAPRASTA NO.81-83', 'ID', '', 'SEMARANG', 'IV01', 'CITO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1294, 'RK9468', 'PT PRAMITA', '21 Jl. KH. Samanhudi', 'ID', '11111', 'JAKARTA PUSAT', 'IV01', 'PRAMITA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1295, 'RK9469', 'PT MUTIARA INDAH PURNAMA', ': Jl. Pariwisata I No. 2 RT. 006/00', 'ID', '', 'BEKASI', 'IV01', 'MIP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1296, 'RK9470', 'PT KAFFAH PASIFIK INDONESIA', 'Lt. 7-1 Jl. Dr. Ide anak Agung Gd.', 'ID', '12950', 'JAKARTA SELATAN', 'IV01', 'KAFFAH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1297, 'RK9471', 'PT PANCAMAS COMPUTER', 'NO.11 LTC GLODOK GF2 B1 PLAZA PINAN', 'ID', '', 'JAKARTA BARAT', 'IV01', 'PANCAMAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1298, 'RK9472', 'PT RAI RAKHA UTAMA', 'No.14  Jl. Terusan I gusti Ngurah r', 'ID', '', 'JAKARTA', 'IV01', 'RRU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1299, 'RK9473', 'PT TRIMEGA CITRA KARYA', 'JL. KEMPO NO. 10 LT.2', 'ID', '40221', 'BANDUNG', 'IV01', 'TRIMEGA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1300, 'RK9474', 'PT INDAH LESTARI BANDUNG', 'JL. PERINTIS KEMERDEKAAN N0.5', 'ID', '30114', 'PELEMBANG', 'IV01', 'ILB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1301, 'RK9475', 'PT FBI', 'Griya Sukmajaya Blok B no. 3, DEPOK', 'ID', '', 'DEPOK', 'IV01', 'FBI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1302, 'RK9476', 'CV. NOVALINA SEJAHTERA', 'Jl. Penyengat 2 No. 19 RT. 007 /003', 'ID', '14240', 'JAKARTA', 'IV01', 'NOVALINA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1303, 'RK9477', 'PT EZ SOLUTION INDONESIA', 'LT.2 NO.A9 JL.PINANGSIA RAYA MANGGA', 'ID', '', 'JAKARTA', 'IV01', 'EZ SOLUTIO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1304, 'RK9478', 'CV. BANDUNG GLOBALINDO', 'no.220 Jl. Gunung Kencana I No. 220', 'ID', '', 'JAKARTA', 'IV01', 'GLOBALINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1305, 'RK9479', 'PT TRESSA LESTARI', 'Jln Cibogo Atas No 142 Bandung 4016', 'ID', '40164', 'BANDUNG', 'IV01', 'TRESSA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1306, 'RK9480', 'PT. ELENBEE DWI PANATA', 'Jl Cilandak tengah IV No.9 Rt 003/0', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'ELENBEE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1307, 'RK9481', 'PT BUMI MATARITAMA', 'NO.22B JL. PAHLAWAN REVALUSI', 'ID', '13430', 'JAKARTA', 'IV01', 'MATARITAMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1308, 'RK9483', 'PT SEIKI WIJAYA TEKNOLOGI', 'NO.1 JL. CIHERANG TIMUR BLOK HH RT0', 'ID', '', 'BEKASI', 'IV01', 'SEIKI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1309, 'RK9484', 'LEMBAGA MANAGEMENT FAKULTAS EKONOMI', 'JL. SALEMBA RAYA NO.4', 'ID', '10430', 'JAKARTA', 'IV01', 'LMFEUI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1310, 'RK9485', 'SEFT Corp ( LOGOS Institute )', 'NO. 2 JL RADIN INTEN II', 'ID', '13430', 'JAKARTA TIMUR', 'IV01', 'SEFT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1311, 'RK9486', 'PT LIMAS SINERGI INDONESIA', 'JL. OTTO ISKANDARDINATA 149C RT 007', 'ID', '13330', 'JAKARTA TIMUR', 'IV01', 'LIMAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1312, 'RK9487', 'PT BOSTONPRICE ASIA', 'NO.33 JL. Sumatera I Blok G-2 BSD S', 'ID', '', 'TANGGERANG', 'IV01', 'BOSTONPRIC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1313, 'RK9489', 'CV PRISMA DATA ABADI', 'JL. pejuang raya blok b no.6', 'ID', '', 'BEKASI', 'IV01', 'PRISMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1314, 'RK9490', 'PT PILAR PERMATA BUANA', 'NO.35 Jl Let Jen Suprapto Graha cem', 'ID', '', 'JAKARTA', 'IV01', 'PILAR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1315, 'RK9491', 'PT BENTARA DIRGAMUDA', 'NO.11 Jl Otto Iskandardinata III', 'ID', '13340', 'JAKARTA TIMUR', 'IV01', 'BENTARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1316, 'RK9492', 'PT JAC CONSULTING INDONESIA', 'NO.9 JL.MH THAMRIN MENARA CAKRAWALA', 'ID', '', 'JAKARTA PUSAT', 'IV01', 'JAC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1317, 'RK9493', 'PT AMANAH KARYA TEHNIK', 'JL. PERUMAHAN GRIYA SERPONG SERUA C', 'ID', '', 'TANGGERANG SELATAN', 'IV01', 'AMANAH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1318, 'RK9495', 'S & S Partnership Attoneys at Law', 'Lt.2Est Jl. H.R Rasuna Said Kav.62,', 'ID', '12920', 'JAKARTA SELATAN', 'IV01', 'PARTNERSHI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1319, 'RK9496', 'PT. SMARTEK NUSA SOLUSI', 'Bumi anggrek Blok U No. 356 RT.03/0', 'ID', '', 'BEKASI', 'IV01', 'SMARTEK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1320, 'RK9497', 'PT. ROSDIAN ANUGERAH', 'No. 12 Jl. I Gusti Ngurah Rai Ruko', 'ID', '13470', 'JAKARTA TIMUR', 'IV01', 'ROSDIAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1321, 'RK9498', 'PT. CNC DISAIN NUSANTARA', 'No.8B Jl. Pulo Buaran V Pulogadung', 'ID', '13920', 'JAKARTA TIMUR', 'IV01', 'CNC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1322, 'RK9499', 'CV. TOGUS KARUNIA', 'NO.13b Jl. PLN No. 13B Cipinang Mua', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'TOGUS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1323, 'RK9500', 'PT ERA DATA PERSADA', 'JL. H.R RASUNA SAID KUNINGAN', 'ID', '12940', 'JAKARTA SELATAN', 'IV01', 'ERA DATA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1324, 'RK9501', 'PT MEDIA LINTAS DATA', 'KAV.38 JL JEND. GATOT SUBROTO', 'ID', '12710', 'JAKARTA', 'IV01', 'MEDIA LD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1325, 'RK9502', 'PT PUNAKAWAN ALAM SEJAHTERA', 'LT.7 KAV74 JL. JEND GATOT SUBROTO G', 'ID', '', 'JAKARTA', 'IV01', 'PAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1326, 'RK9503', 'PT OSHA ASIA', 'NO.7 JL. RAYA KARANGAN GUNUNG PUTRI', 'ID', '16963', 'BOGOR', 'IV01', 'OSHA ASIA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1327, 'RK9504', 'CV. FRANS JAYA ABADI', 'JL.Raya Komarudin No. 53 B RT 002/0', 'ID', '13620', 'JAKARTA TIMUR', 'IV01', 'FRANS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1328, 'RK9505', 'MARISHA TRI MANUNGGAL AIRSINDO, PT.', 'NO.14 Jl. Kalibata Selatan No. 14 A', 'ID', '12740', 'JAKARTA SELATAN', 'IV01', 'MARISHA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1329, 'RK9506', 'PT.REKA KARYA PERSADA', 'Jl Margonda raya kav. 525A pondok c', 'ID', '16424', 'DEPOK', 'IV01', 'RKP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1330, 'RK9507', 'PT.KARYA DWI PUTRA KONTRUKSI', 'Jl. Setia Darma II Rt 003/Rw 002 Ta', 'ID', '', 'BEKASI', 'IV01', 'KDPK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1331, 'RK9508', 'PT. INTERPRIMA INDOCOM', 'No.55 Jl Kaji  kel petojo utara, Ke', 'ID', '', 'JAKARTA PUSAT', 'IV01', 'INTERPRIMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1332, 'RK9509', 'PT.STAL TEKNIKA', 'kav 1-3   Jl HR Rasuna Said X-5 Gd', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'STAL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1333, 'RK9510', 'PT . TERACOM PRIMA', 'Jl. Peta Selatan City Square Busine', 'ID', '', 'JAKARTA', 'IV01', 'TERACOM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1334, 'RK9511', 'PT INARIS CIPTA UTAMA', 'NO.3 VILA INTI PERSADA JL BALI BLOK', 'ID', '', 'TANGGERANG SELATAN', 'IV01', 'INARIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1335, 'RK9512', 'PT TRIKARSA SINERGI', 'JL. CILIWUNG 1/13 RT 02/04 SIDOSARI', 'ID', '', 'SEMARANG', 'IV01', 'TRIKARSA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1336, 'RK9513', 'PT ALAM MANDIRI INDOKAYA', 'RT.04/08 JL. BUNCIT RAYA NO.19A MAM', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'INDOKAYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1337, 'RK9514', 'PT LUHUNG KARYA DHARMA', 'JL.', 'ID', '', 'JAKARTA', 'IV01', 'LUHUNG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1338, 'RK9515', 'PT LAUTAN LUAS PERSADA', 'NO.34 JL. AMPERA VI PADEMANGAN', 'ID', '', 'JAKARTA UTARA', 'IV01', 'LAUTAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1339, 'RK9516', 'PT. PRICEWATERHOUSECOOPERS INDONESI', 'LT.9  JL. HR RASUNA SAID KAV. X-7 N', 'ID', '12940', 'Jakarta Selatan', 'IV01', 'PWC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1340, 'RK9517', 'PT. Naura Jasafalindo', '79 Jl. tebet Timur Dalam Raya', 'ID', '12820', 'Jakarta Selatan', 'IV01', 'NJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1341, 'RK9518', 'PT INDONESIA COMNET PLUS', 'LT.50-51 JL.Jend Gatot Subroto No.', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'COMNET PLU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1342, 'RK9519', 'PT AIR SURYA RADIATOR', 'JL.MAWAR NO.88 RT04/02 PADURENAN', 'ID', '17166', 'BEKASI', 'IV01', 'AS RADIATO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1343, 'RK9520', 'PT. DHARMA WAHANA TATA', 'B1-44 Jl. Raya Lenteng Agung', 'ID', '12530', 'Jakarta Selatan', 'IV01', 'DWT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1344, 'RK9521', 'PT ARTHA MULIA TRIJAYA', 'Kav 22-23 Jl. Letjend S Parman Gran', 'ID', '11480', 'JAKARTA BARAT', 'IV01', 'AMT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1345, 'RK9522', 'AFJ Counselors at Law', 'Lt.2 s 207 Jl. H.R Rasuna Said Kav.', 'ID', '12920', 'JAKARTA SELATAN', 'IV01', 'AFJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1346, 'RK9523', 'PT. SUKSES JAYA ABADI', 'Jl. Jombang No. 29 – Ciputat', 'ID', '15414', 'JAKARTA SELATAN', 'IV01', 'SJA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1347, 'RK9524', 'PT. UNIBLESS INDOMULTI', 'Apt. Kebagusan City Unit KA: 30', 'ID', '12520', 'JAKARTA', 'IV01', 'UIM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1348, 'RK9525', 'PT. AVANT SOLUSI SERVISPRO', 'NO.4 Jl. Raden Saleh Raya No. 53', 'ID', '10330', 'JAKARTA PUSAT', 'IV01', 'ASPRO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1349, 'RK9526', 'PT ASRI FARIZ JAYA', 'Jl Samratulangi Gg Mawar 1 Gedon Ai', 'ID', '', 'BANDAR LAMPUNG', 'IV01', 'AFJ', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1350, 'RK9527', 'Lembaga Bahasa Internasional, FIB U', 'FIB UI Gedung X Lantai 1 Universita', 'ID', '11111', 'Depok', 'IV01', 'LBI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1351, 'RK9528', 'PT BHINNEKA MENTARIDIMENSI', 'NO.5-6 JL. GUNUNG SAHARI RAYA 73C', 'ID', '', 'JAKARTA PUSAT', 'IV01', 'BHINNEKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1352, 'RK9529', 'CV LESTARI BERKAT COMPUTER', 'GLODOK PLAZA LT.2 NO. A9', 'ID', '', 'JAKARTA', 'IV01', 'LBC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1353, 'RK9530', 'PT FOX HOUND', 'MALL MANGGA DUA LT.3 NO.24', 'ID', '', 'JAKARTA', 'IV01', 'FOX HOUND', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1354, 'RK9531', 'PT NUSANTARA TAMAWARA SEMESTA', 'E.3.3 JL. MENARA ANUGRAH KANTOR TAM', 'ID', '', 'JAKARTA', 'IV01', 'NTS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1355, 'RK9532', 'PT SINERGI ASIA SEJAHTERA', 'JL. PULO SIRIH BARAT RGM 20', 'ID', '17147', 'BEKASI', 'IV01', 'ASIACOM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1356, 'RK9533', 'PT SALAKA PRANATA ADICARA', 'NO.69 JL. TANGGERANG SELATAN RUKO R', 'ID', '', 'TANGGERANG', 'IV01', 'SALAKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1357, 'RK9534', 'PT. KARAGA INDONUSA PRATAMA', 'JL. AMPERA VI NO. 34 PADEMANGAN', 'ID', '', 'JAKARTA PUSAT', 'IV01', 'KARAGA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1358, 'RK9535', 'PT. KINVIODELA GUMILANG', 'DUREN SAWI Ruko Radin Inten Centre', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'KINVIODELA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1359, 'RK9536', 'PT. BRI (VENDOR)', 'Jl. Jendral Sudirman', 'ID', '', 'Jakarta', 'IV01', 'BRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1360, 'RK9537', 'PT. INNOVASI SARANA GRAFINDO', 'Jl. Raya Lenteng Agung no.15', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'INNOVASI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1361, 'RK9538', 'FOXIMAS MANDIRI, PT', 'Jl. Leuwipanjang No. 80, Caringin', 'ID', '40234', 'Bandung', 'IV01', 'FOXIMAS MA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1362, 'RK9539', 'PT Kompas Media Nusantara', '26-28 PT Kompas Media Nusantara', 'ID', '10270', 'Jakarta Selatan', 'IV01', 'KMN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1363, 'RK9540', 'PT. Universal Maju Makmur', '3 A Jl. Musi', 'ID', '11111', 'Jakarta', 'IV01', 'UMM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1364, 'RK9541', 'PT. ACCESS LINTAS SOLUSI', 'JL. palmerah Utara no. 14', 'ID', '14480', 'JAKARTA', 'IV01', 'ACCESS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1365, 'RK9542', 'PT. VIRGO MAJU BERSAMA', 'NO.357 Gd Graha Sartika Lt.3 R. 303', 'ID', '13630', 'JAKARTA', 'IV01', 'VIRGO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1366, 'RK9543', 'CV.SAGITARIUS Offset Printing', 'No.4a JL. Bandengan Selatan GANG Yu', 'ID', '14440', 'JAKARTA', 'IV01', 'SAGITARIUS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1367, 'RK9544', 'PT CHIKAL BAKAL MANDIRI', 'Blok XII N Jl Perntis kemerdekaan K', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'CHIKAL BM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1368, 'RK9545', 'CV.BONAFIDE MULTI SUKSES', 'Jl Gas Alam No 103 Rt 04/05 Kel.Cur', 'ID', '', 'DEPOK', 'IV01', 'BONAFIDE M', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1369, 'RK9546', 'PT PASKINDO DJAYA', 'no.8 lt 1 Jl Raya Pondok Kelapa Ru', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'PASKINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1370, 'RK9547', 'PUNAKAWAN ALAM SEJAHTERA', 'Jl. Jend. Gatot Subroto Kav. 74-75', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'PUNAKAWAN', '', 'C100', 'PT. KCI-Kantor Pusat', '', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1371, 'RK9548', 'PT ANUGERAH BINTANG MEDITAMA', 'Blok A22 JL.Pahlawan Seribu BSD', 'ID', '', 'TANGGERANG', 'IV01', 'ABM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1372, 'RK9549', 'PT. RITRO GANI PERSADA', 'NO.37 JL. Raya Bekasi KM.23 RT 02/0', 'ID', '13910', 'JAKARTA TIMUR', 'IV01', 'RITRO GP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1373, 'RK9550', 'PT TIK MEDIA', 'JL. WR SUPRATMAN NO. 69 BEKASI', 'ID', '', 'BEKASI', 'IV01', 'TIK MEDIA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1374, 'RK9551', 'PT RAJABUNGSU PILAR PERKASA', 'JL. JL. SARUA RAYA NO. 26 CIPUTAT', 'ID', '', 'TANGGERANG', 'IV01', 'RAJABUNGSU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1375, 'RK9557', 'ASTRA GRAPHIA, TBK. PT', 'Jl Kramat Raya No 43 Kel Kramat Kec', 'ID', '', 'Jakarta Pusat', 'IV01', 'ASTRA GRAP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1376, 'RK9560', 'PT. TRICA DAYA', '2 Jl. Kav.Kabel', 'ID', '11111', 'bekasi', 'IV01', 'TD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1377, 'RK9561', 'PT.DAIICHI ELEVATOR INDONESIA', 'Kav 5 Jalur sutera timur Kav.10A No', 'ID', '11111', 'Tangerang', 'IV01', 'DEI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1378, 'RK9562', 'PT TOSI KARYA UTAMA', '9 Ruko Festival boulvard', 'ID', '11111', 'bekasi', 'IV01', 'TKU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1379, 'RK9563', 'PT BUMI BANGUN PERKASA', 'JL. GOLDEN ROAD BLOK C 28 ITC BSD S', 'ID', '', 'TANGGERANG', 'IV01', 'BBP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1380, 'RK9564', 'PT NOSIONAL MAKMUR SEJAHTERA', 'No. 68 JL. HAYAM WURUK Komp. Glodok', 'ID', '11180', 'JAKARTA', 'IV01', 'NMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1381, 'RK9565', 'PT ARIMBI AYU', 'JL.Suryopranoto No. 91 Kel. Petojo', 'ID', '10160', 'JAKARTA PUSAT', 'IV01', 'ARIMBI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1382, 'RK9570', 'MARKPLUS INDONESIA, PT.', '88 EightyEight @Kasablanka Lantai 8', 'ID', '12870', 'Jakarta Selatan', 'IV01', 'MI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1383, 'RK9572', 'PT. LAPI ITB', '15 B Jl. Ganesha', 'ID', '40132', 'Bandung', 'IV01', 'LI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1384, 'RK9573', 'PT. ALTARINDO DURYA KASTARA', 'JL KELAPA GADING V/IA KRAMAT JATI', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'ALTARINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1385, 'RK9574', 'PT. SRIAYU MULTI KREASI', 'Blok D lt Jl. Raya Pondok Kelapa', 'ID', '13450', 'JAKARTA TIMUR', 'IV01', 'SRIAYU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1386, 'RK9575', 'PT. MARISI PRATAMA JAYA', 'Blok A no. Jl. Sultan Hamengkubuwon', 'ID', '13960', 'JAKARTA TIMUR', 'IV01', 'MARISI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1387, 'RK9576', 'PT LESTARI DINI TUNGGAL', 'JL. ANGGREK NO. 46 JAGAKARSA', 'ID', '12620', 'JAKARTA SELATAN', 'IV01', 'LESTARI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1388, 'RK9577', 'MAGNETIC CONTROL SYSTEMS Shd Bhd', 'JL. ANGGERIK MAKARA 31/45 KOTA KEMU', 'MY', '40460', 'SELANGOR', 'IV01', 'MAGNETIC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1389, 'RK9578', 'ORSYINDO UTAMA CIPTA ABADI, PT', 'Tower 7th Jl. Letjen Soepeno No. 34', 'ID', '12210', 'JAKARTA', 'IV01', 'ORSYINDO U', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1390, 'RK9579', 'PT CITRA GEMILANG APIK', 'JL. KUBUR ISLAM NO 1', 'ID', '12210', 'JAKARTA', 'IV01', 'GEMILANG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1391, 'RK9580', 'PT PRAWIRAMAS PURIPRIMA', 'JL. MH THAMRIN 106', 'ID', '', 'SEMARANG', 'IV01', 'PRAWIRAMAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1392, 'RK9581', 'PT. Home Center Indonesia', 'NO.1 Jl. Puri Kencana No.1.Kembanga', 'ID', '', 'JAKARTA', 'IV01', 'PT. HOME C', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1393, 'RK9582', 'PT DWI SINERGI', 'Jl. Melati Torta II Taman melati BL', 'ID', '16518', 'DEPOK', 'IV01', 'DWI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1394, 'RK9583', 'CV FERRY PRATAMA TUNGGAL', 'Kamp. Sukamenak Indah Blok H no 1 r', 'ID', '', 'BANDUNG', 'IV01', 'FERRY', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1395, 'RK9584', 'PT. Bintang Usaha Sejahtera', 'Jl Bentengan IV No. 45 Rt. 008/05 K', 'ID', '14350', 'JAKARTA UTARA', 'IV01', 'BUS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1396, 'RK9585', 'PT. T&E Simulation', 'Jl. Lemah Neundeut No. 8 Kel. Sukaw', 'ID', '40164', 'BANDUNG', 'IV01', 'T&E', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1397, 'RK9587', 'PT. Prabaswara Arjaya Lestari', 'Jl. Raya Cipinang No. 1 RT 001 /013', 'ID', '13420', 'JAKARTA TIMUR', 'IV01', 'PAL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1398, 'RK9589', 'PT RITRO GANI PERSADA', 'JL. RAYA BEKASI KM 23', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'RGP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1399, 'RK9591', 'PT KINVIODELA GUMILANG', 'JL. RUKO RADIN INTEN CENTER NO.8G', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'KINVIODELA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1400, 'RK9592', 'PT NUHA MEDIA KOMUNIKATA', 'JL. BALI BLOK E NO.3', 'ID', '', 'TANGGERANG', 'IV01', 'NUHA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1401, 'RK9594', 'MULTI WAHANA MUDA, PT', '11 B Jl. Ciledug Timur', 'ID', '11111', 'JAKARTA', 'IV01', 'MWM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1402, 'RK9595', 'PT. MAKSWELL MANDIRI', '48C Jl. Keutamaan Dalam', 'ID', '11111', 'Jakarta Barat', 'IV01', 'MM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1403, 'RK9596', 'PT. SAMBOON PRATAMA SEJATI', '5 D Jl. Sadar II', 'ID', '11111', 'Jakarta', 'IV01', 'SPS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1404, 'RK9597', 'CV LARISA HARAPAN UTAMA', 'JL. JAWA NO.151 RT.04/08 KEL. BEJI', 'ID', '', 'DEPOK', 'IV01', 'LARISA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1405, 'RK9598', 'PT.CURSATIMA PURNACIPTA', '49 Jl Raya Pasar Minggu', 'ID', '11111', 'Jakarta Selatan', 'IV01', 'CTP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1406, 'RK9599', 'PT PETRO ENERGI SAMUDRA', 'RUKO GREEN LAND C NO. 11 TELUK TERI', 'ID', '', 'BATAM', 'IV01', 'PETRO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1407, 'RK9600', 'PT CITRA JELAJAH INFORMATIKA', '236 JL. PALEDANG', 'ID', '11111', 'JAKARTA', 'IV01', 'CJI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1408, 'RK9601', 'PRI INDONESIA', 'NO 71 JL. HANG TUAH RAYA', 'ID', '12120', 'JAKARTA', 'IV01', 'PRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1409, 'RK9602', 'HELGA PRIMA, PT', 'JL DASA DHARMA V Blok B2No51 Lt3 RT', 'ID', '17115', 'BEKASI', 'IV01', 'HELGA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1410, 'RK9603', 'CV. ABDI MUTIARA', 'WISMA MARK No.88A JL MASJID Al- Kho', 'ID', '13870', 'Cipayung JAKARTA TIMUR', 'IV01', 'ABDI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1411, 'RK9604', 'MERANTAU MANDIRI', 'JL RAYA BAMBU APUS NO 33B', 'ID', '13890', 'JAKARTA TIMUR', 'IV01', 'MERANTAU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1412, 'RK9605', 'CV. DWI KARYA', 'JL. PISANGAN LAMA NO. 24 PULOGADUNG', 'ID', '13230', 'JAKARTA TIMUR', 'IV01', 'DWI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1413, 'RK9606', 'CV ALIF PUTRAGUNA', 'WISMA MARKS JL.MASJID AL KHOIR CILA', 'ID', '13870', 'JAKARTA TIMUR', 'IV01', 'ALIF', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1414, 'RK9607', 'PT. ITPRO CITRA INDONESIA', 'KOMPLEK GRAHA KENCANA KEBON JERUK', 'ID', '11530', 'JAKARTA BARAT', 'IV01', 'ITPRO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1415, 'RK9608', 'BIG DATA INDONESIA', 'BELLANOVA COUNTRY MALL JL. MH THAMR', 'ID', '16810', 'BOGOR', 'IV01', 'BIG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1416, 'RK9609', 'PT MUVI', 'KOMP. LEMBAH PERMAI HANJUANG', 'ID', '', 'BANDUNG', 'IV01', 'MUVI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1417, 'RK9610', 'PT DARMAWANGSA KARYA PERSADA', 'RUKO HUK BUANDA NO 2C PONDOK PINANG', 'ID', '12310', 'JAKARTA SELATAN', 'IV01', 'DARMAWANGS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1418, 'RK9611', 'SINERGY INFORMASI PRATAMA', 'JL PURI KENCANA BLOK K6 KEMBANGAN', 'ID', '11610', 'JAKARTA BARAT', 'IV01', 'SINERGY', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1419, 'RK9612', 'ERAKOMP INFONUSA', 'OFFICE TOWER 88 KOTA KASABLANKA JL.', 'ID', '12870', 'JAKARTA SELATAN', 'IV01', 'ERAKOMP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1420, 'RK9613', 'TRI KARSA SINERGI', 'JL CILIWUNG IV/9 SIDOSARI UNGARAN', 'ID', '17148', 'BEKASI', 'IV01', 'TRI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1421, 'RK9614', 'CV SIGNAL ABADI', 'KOMPL. PURISANTIKA JL. CENDANA', 'ID', '45611', 'CIREBON', 'IV01', 'SIGNAL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1422, 'RK9615', 'BANYU ASIH PUTRA', 'LINGKUNGAN PARIGI KEC SUMEDANG SELA', 'ID', '', 'SUMEDANG', 'IV01', 'BANYU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1423, 'RK9616', 'CV GRAHA MUKTI RAHAYU', 'JL PAGER BETIS KM 3 KEC SUMEDANG SE', 'ID', '45351', 'SUMEDANG', 'IV01', 'GRAHA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1424, 'RK9617', 'PT GARUDA TECHNOLOGY', 'JL. PERSADA RAYA NO 70G TEBET', 'ID', '12870', 'JAKARTA SELATAN', 'IV01', 'GARUDA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1425, 'RK9618', 'PT SEJAHTERA MITRA LESTARI', 'KAV M-20 JL. RAYA INDUSTRI MODERN V', 'ID', '', 'SERANG BANTEN', 'IV01', 'SML', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1426, 'RK9619', 'RADHIYA RIFALFIZA, CV.', 'JL. Kembangan Barat No39A RT1/12 Ke', 'ID', '', 'BANDUNG', 'IV01', 'RADHIYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1427, 'RK9620', 'NAURA JASAFALINDO', 'NO 79 JL. TEBET TIMUR DALAM RAYA', 'ID', '12820', 'JAKARTA SELATAN', 'IV01', 'NAURA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1428, 'RK9622', 'BARAKAS MEDIA SYSTEM', 'GD. WISMA BUMI PUTERA LJL. JEND SUD', 'ID', '12820', 'JAKARTA SELATAN', 'IV01', 'BARAKAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1429, 'RK9623', 'GEOTAMA SYSTEM PERSADA', 'JL JEND SUDIRMAN KAV.28 JKT', 'ID', '12920', 'JAKARTA', 'IV01', 'GEOTAMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1430, 'RK9692', 'TRI KARYA ABISATYA, PT', 'JL. SURYALAYA XII NO12 Rt04/08 CIJA', 'ID', '', 'BANDUNG', 'IV01', 'TRI KARYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1431, 'RK9731', 'MITRA INDO INVESTAMA SEJAHTERA, PT', 'Ali Tailor Building 2nd Floor Jl. P', 'ID', '', 'Jaktim', 'IV01', 'MIIS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1432, 'RK9741', 'PT.  TRIMEGA  PRIMA  TEKNOLOGI', '20 JL. SCIENTIA  BOULEVARD DLNT', 'ID', '15180', 'Tangerang', 'IV01', 'TPT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1433, 'RK9742', 'PT. EVENTUS SOLUTION', '3 Gedung Mega Glodok', 'ID', '11111', 'Jakarta', 'IV01', 'ES', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1434, 'RK9743', 'PT. LEONINDO MEGA BERLIAN', '1 Komplek Metro Permata', 'ID', '11111', 'Tangerang', 'IV01', 'LMB', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1435, 'RK9744', 'PT. DIANSA SOLUTION', '39 Graha MDS', 'ID', '12510', 'Jakarta', 'IV01', 'DS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1436, 'RK9745', 'PT. DINAMIKA MULIA', 'Kav. 56 Jl. Jend Gatot Sabroto', 'ID', '12950', 'Jakarta Selatan', 'IV01', 'DM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1437, 'RK9746', 'EMPAT SIMPUL TEKNOLOGI', 'No.27 Jl. Salak III', 'ID', '11111', 'Madiun', 'IV01', 'EST', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1438, 'RK9747', 'PT. SISI CIPTA DIMENSI', 'No. 281 Jl. Krakatau VI', 'ID', '11111', 'Depok', 'IV01', 'SCD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1439, 'RK9748', 'PT. Widya Bhakti Inti', 'No. 77 Jl. Moch Toha', 'ID', '40255', 'Bandung', 'IV01', 'WBI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1440, 'RK9749', 'PT. Asaba Computer Centre', '1 Jl Setiabudi Selatan', 'ID', '12920', 'Jakarta', 'IV01', 'ACC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1441, 'RK9750', 'HASTACACITRA PASTIKA, PT', 'Sudairman Park Blok C 51-52 Jl. K.H', 'ID', '10220', 'Jakarta', 'IV01', 'HP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1442, 'RK9751', 'PT. Visitelecom Indonesia', 'Kav 52-53 Jl. Jend Sudirman', 'ID', '11111', 'Jakarta', 'IV01', 'VI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1443, 'RK9752', 'PT.Redmen Energi Danica', '8 Jl.Manunggal Pratama', 'ID', '11111', 'Jakarta', 'IV01', 'RED', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1444, 'RK9753', 'PT. DAYA ADICIPTA WIHAYA', '6B & 6C Jl. Kembangan Raya', 'ID', '11610', 'Jakarta Barat', 'IV01', 'DAW', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1445, 'RK9754', 'PT. DATANET SISTEM INTEGRASI', '2 Jl. Suryo Pranoto', 'ID', '10130', 'Jakarta', 'IV01', 'DSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1446, 'RK9755', 'PT Pramesta Baja Utama', '5 PT Pramesta Baja Utama', 'ID', '11111', 'Tangerang', 'IV01', 'PBU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1447, 'RK9756', 'PT. Indorama Mandiri', 'No. 056 Rukan Great Wall Blok B Gre', 'ID', '', 'Tangerang', 'IV01', 'IM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1448, 'RK9757', 'PT. SURFINDO MITRA SOLUSI', '55 A Jl. BDB', 'ID', '11111', 'Depok', 'IV01', 'SMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1449, 'RK9758', 'PT. PYGMALION NIAGA INDONESIA', '31-32 Jl. Imam Bonjol', 'ID', '11111', 'Jakarta', 'IV01', 'PNI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1450, 'RK9759', 'CV. PANCARAN SINAR PERMATA', 'Permata Hijau Permai Blok C No.43 K', 'ID', '17125', 'BEKASI', 'IV01', 'PSP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1451, 'RK9760', 'PT. JAYADIPA MANDIRI', '5E Jl. Baru', 'ID', '11111', 'Kebayoran Lama', 'IV01', 'JM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1452, 'RK9761', 'PT. ALTROS TEKNOLOGI', '43 Jl. Bandengan Selatan', 'ID', '11111', 'Jakarta', 'IV01', 'AT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1453, 'RK9762', 'PT. HOTBINSON JUNIOR TAMA', '148 Jl. Matraman Raya', 'ID', '11111', 'Jakarta', 'IV01', 'HJT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1454, 'RK9763', 'PT. FITRI UTAMA MANDIRI', '14 JL. TERUSAN I GUSTI NGURAH RAI', 'ID', '11111', 'Jakarta', 'IV01', 'FUM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1455, 'RK9764', 'PT GLOBAL INTEGRASI DATA', 'N0. 15 JL. K H HASYIM ASHARI ROXY M', 'ID', '10150', 'JAKARTA', 'IV01', 'GID', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1456, 'RK9765', 'PT. CIPTA SATRIA INFORMATIKA', '8 Jl. Keuangan I', 'ID', '12430', 'Jakarta', 'IV01', 'CSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1457, 'RK9766', 'PT. PRIMASOLUSINDO INFORMATIKA', '86 Jl. Kemang Timur Raya', 'ID', '12730', 'Jakarta', 'IV01', 'PIN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1458, 'RK9767', 'PT. EndaProsindo', '76 Jl. Bendungan Hilir Raya', 'ID', '10210', 'Jakarta', 'IV01', 'EP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1459, 'RK9769', 'KJPP FEBRIMAN SIREGAR DAN REKAN', '36 B WIJAYA GRAND CENTER BLOK F', 'ID', '11111', 'Jakarta Selatan', 'IV01', 'KJPP FSDR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1460, 'RK9770', 'PT. DATA MEGA SOLUSI', 'No.26 Jl.Jendral Sudirman', 'ID', '12920', 'Jakarta', 'IV01', 'DMS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1461, 'RK9771', 'PT RENE ASIA PUBLIKA', '74-75 Jl. Jend. Gatot Subroto Kav', 'ID', '12870', 'Jakarta', 'IV01', 'RAP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1462, 'RK9772', 'CV. GUNUNG SELAMAT', '56-64 Jl. SK WIRYOPRANOTO', 'ID', '50617', 'Jakarta', 'IV01', 'GS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1463, 'RK9776', 'PUSTRAL UGM', 'Jl. Kemuning M-3, Sekip, Sleman', 'ID', '', 'Yogayakarta', 'IV01', 'PUSTRAL UG', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1464, 'RK9878', 'PT. KOKARYASA BALAI YASA MRI', '23A KH ABDULLAH SYAFE''I', 'ID', '11111', 'Jakarta Selatan', 'IV01', 'PT. KBYM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1465, 'RK9879', 'PT. ROFIS JAYA PERKASA', 'B 5 Perum Puri Surya', 'ID', '11111', 'Sidoarjo', 'IV01', 'RJP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1466, 'RK9880', 'PT.BINA SUKSES MEDIKA', '9 RUKO AMARHA RESIDENCE', 'ID', '11111', 'Tangerang', 'IV01', 'BSM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1467, 'RK9881', 'PT. CIPTA SATRIA INFORMATIKA', '11 Jl. Keuangan I', 'ID', '12430', 'Jakarta Selatan', 'IV01', 'CSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1468, 'RK9882', 'CV. ABDI PRATAMA', '1 Jl. Masjid Al-Khoir', 'ID', '13870', 'Jakarta', 'IV01', 'AP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1469, 'RK9883', 'PT ENGGAL BERSAUDARA JAYA', 'JL. RADIN INTEN NO.8 G Rt. 003/002', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'ENGGAL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1470, 'RK9884', 'PT. PARALOGIX CIPTAREKA WYASATAMA', '22-26 JL. TB. Simatupang Kav 22-26', 'ID', '12430', 'Jakarta Selatan', 'IV01', 'PARALOGIX', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1471, 'RK9886', 'PT. LINKADATA CITRA MANDIRI', '16 Jl. CIputat Raya', 'ID', '12130', 'Jakarta', 'IV01', 'LCM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1472, 'RK9887', 'CV KREASI LESTARI', 'JL. Kh. HASYIM ASHARI NO.117 KEL. C', 'ID', '', 'JAKARTA PUSAT', 'IV01', 'KREASI L', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1473, 'RK9888', 'PT HATOMO DINAMIKA MAKMUR', 'JL. WARINGIN NO. 8 MATRAMAN', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'HDM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1474, 'RK9889', 'PT MUTIARA CIPTA SELARAS', 'JL. RAYA KEBAYORAN LAMA N0.242', 'ID', '', 'JAKARTA BARAT', 'IV01', 'MCS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1475, 'RK9890', 'PT INTI BUMI PERKASA', 'JL. M TOHA N0.77', 'ID', '', 'BANDUNG', 'IV01', 'IBP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1476, 'RK9891', 'PT DAPENSI TRIO USAHA', 'JL. PHH. MUSTOFA NO.72', 'ID', '40124', 'BANDUNG', 'IV01', 'DTU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1477, 'RK9892', 'PT ARMADA AUTO TARA', 'JL. MARGONDA RAYA RT 001/012 KEL. K', 'ID', '', 'DEPOK', 'IV01', 'AAT', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1478, 'RK9893', 'PT ASTRA INTERNASIONAL TBK', 'JL. KH SAMANHUDI NO.7', 'ID', '10710', 'JAKARTA', 'IV01', 'ASTRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1479, 'RK9894', 'PT DAYA ADICIPTA SANDIKA', 'JL. RAYA BEKASI KM 26,5 RT 007/005', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'DAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1480, 'RK9895', 'PT SETIAJAYA MOBILINDO', 'JL. MARGONDA RAYA 348', 'ID', '', 'DEPOK', 'IV01', 'MOBILINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1481, 'RK9896', 'PT ASTRA INTERNASIONAL TBK Daihatsu', 'JL. RAYA BOGOR- JAKARTA KM. 43', 'ID', '', 'BOGOR', 'IV01', 'ASTRA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1482, 'RK9897', 'PT PLAZA AUTO PRIMA', 'JL. Karangan N0.85 gunung putri', 'ID', '', 'BOGOR', 'IV01', 'PLAZA AP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1483, 'RK9898', 'DIREKTERORAT JENDRAL BEA DAN CUKAI', 'Kantor : 050100-KPU Suekarno-Hatta', 'ID', '', 'JAKARTA', 'IV01', 'DIR JEN BE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1484, 'RK9899', 'PT JAGA NUSANTARA', 'JL. DUREN TIGA NO.53 PANCORAN', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'JAGA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1485, 'RK9900', 'PT INTI BUMI PERKASA', 'JL. MOCH TOHA NO.77', 'ID', '', 'BANDUNG', 'IV01', 'IBP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1486, 'RK9901', 'KSO PT TELKOM, TELKOMSIGMA, NUTECH', 'Jl. Kebon Sirih No.12', 'ID', '12333', 'JAKARTA', 'IV01', 'KSO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1487, 'RK9902', 'KSO PT LINKDATA CITRA MANDIRI', 'Jl. CIputat Raya', 'ID', '12130', 'JAKARTA', 'IV01', 'KSO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1488, 'RK9903', 'PT KARYA TEKNIK ABADI', 'JL. Pinangsia Timur No. 4 rt.004/00', 'ID', '', 'JAKARTA BARAT', 'IV01', 'KTA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1489, 'RK9904', 'DAYA CIPTA MANDIRI SOLUSI, PT', 'Graha Utaka 26A Jl Utan Kayu Raya N', 'ID', '13130', 'JAKARTA', 'IV01', 'DAYA CIPTA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1490, 'RK9905', 'PT SENTRALINDO SOLUSI UTAMA', 'jl. prof Dr. Latumetan no.33', 'ID', '11320', 'JAKARTA', 'IV01', 'SENTRALIND', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1491, 'RK9906', 'PT APLIKANUSA LINTASARTA', 'JL. MA THAMRIN KAV.3', 'ID', '10250', 'JAKARTA', 'IV01', 'APLIKANUSA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1492, 'RK9907', 'PT DWI SAKTI INDOTECH', '1 LT.1-2 JL. RAYA INDUSTRI LIPPO CI', 'ID', '', 'BEKASI', 'IV01', 'DWI SAKTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1493, 'RK9908', 'PT SAPTA SARANA SEJAHTERA', 'Lt.6-626 jl. Thamrin Boulevard Tana', 'ID', '', 'JAKARTA', 'IV01', 'SAPTA SS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1494, 'RK9909', 'PT SINERGI INTEGRA SERVICES', 'JL. PROF LATUMETEN RAYA NO.16 GROGO', 'ID', '11460', 'JAKARTA', 'IV01', 'SINERGI IS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1495, 'RK9910', 'PT. MANDIRI AXA GENERAL INSURANCE', 'Lt. 16 Jl. Prof. Dr. Satrio Kav. 18', 'ID', '12940', 'Jakarta Selatan', 'IV01', 'MANDIRI AX', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1496, 'RK9911', 'PT. Asuransi Astra Buana', 'Kav. 15 Jl. TB. Simatupang RT004/RW', 'ID', '12440', 'Jakarta Selatan', 'IV01', 'ASURANSI A', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1497, 'RK9912', 'CV PROCOMP', 'NO. 30 JL. TAMAN EDELWEIS BARAT BLO', 'ID', '17147', 'BEKASI', 'IV01', 'PROCOMP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1498, 'RK9913', 'PT SATRIO PROPERTINDO PERSADA', 'NO.42 JL. JEND GATOT SUBROTO', 'ID', '12710', 'JAKARTA', 'IV01', 'SATRIO PP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1499, 'RK9914', 'PT ASURANSI JIWA INHEALTH INDONESIA', 'KAV.6 JL. HR RASUNA SAID BLOK X2', 'ID', '12920', 'JAKARTA SELATAN', 'IV01', 'INHEALTH', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1500, 'RK9915', 'MAE.', 'Steinhof 65', 'DE', '40699', 'GERMANI', 'IV01', 'MEA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'EUR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1501, 'RK9916', 'CV. Irawan Sakti', 'Jl. Rajawali V No.01 RT.008/002', 'ID', '17144', 'BEKASI', 'IV01', 'IRAWAN SAK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1502, 'RK9917', 'PT CIKAMI PRATAMA', 'AA.5/20 JL.CELEBRATION BOULEVARD BL', 'ID', '', 'BEKASI', 'IV01', 'CIKAMI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1503, 'RK9918', 'PT. Calmic Indonesia', 'Jl. RA Kartini Kav.8 RT/RW 010/04 C', 'ID', '12430', 'JAKARTA SELATAN', 'IV01', 'CALMIC IND', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1504, 'RK9919', 'PT. Insekta Fokustama', 'Tower2bt.1 Jl. TB. Simatupang Tower', 'ID', '12540', 'JAKARTA SELATAN', 'IV01', 'INSEKTA FO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1505, 'RK9920', 'PT ADI SARANA ARMADA TBK', 'JL. TIPAR CAKUNG N0.8 KEC. SUKAPURA', 'ID', '', 'JAKARTA UTARA', 'IV01', 'ADI SAR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1506, 'RK9921', 'EAST JAPAN RAILWAY COMPANY', '2-2,2-Chome, Yoyogi, Shibuya-ku, To', 'JP', '1518578', 'JAPAN', 'IV01', 'EAST JR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'JPY', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1507, 'RK9922', 'PT JAYA RAYA SENTOSA TEHNIK', 'Jl. Rawa Selatan V No.13 Kel. Kp Ra', 'ID', '12420', 'JAKARTA SELATAN', 'IV01', 'JAYA RAYA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1508, 'RK9923', 'PT INKONEKSI IZI KONSULTAN', 'JL. Lenteng Agung Timur  No. 9', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'INKONEKSI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1509, 'RK9924', 'PT LAWU ALAM', 'JL. RAYA PASAR MINGGU PANCORAN', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'LAWU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1510, 'RK9925', 'PT PRESTASI MULTI KREASI', 'JL. H SAMLI NO 79A RT 017/01 PEJATE', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'PMK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1511, 'RK9926', 'PT TECHNOLOGY & ENGINEERING SIMULAT', 'JL. LEMAH NEUNDEUT NO.8', 'ID', '40164', 'BANDUNG', 'IV01', 'SIMULATION', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1512, 'RK9927', 'PT GIENDA PUTRA', 'JL. PANDANWANGI NO.07 CIBIRU', 'ID', '40625', 'BANDUNG', 'IV01', 'GIENDA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1513, 'RK9928', 'PT BANGUN SOLUSI MANDIRI', 'SURAPATI CORE BLOK M 22 JL. PHH MUS', 'ID', '40192', 'BANDUNG', 'IV01', 'BSM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1514, 'RK9929', 'CV BAYU SAMUDRA', 'Jl. H Ten No. 1 Rawamangun', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'BAYU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1515, 'RK9931', 'PT. TEKNOLOGIKA', 'Jl. Mangga dua dalam', 'ID', '10730', 'JAKARTA PUSAT', 'IV01', 'TEKNOLOGIK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1516, 'RK9932', 'PT. MANDIRI SENTOSA SINERGI', 'No.39 Rukan Tanjung Mas Raya Blok B', 'ID', '', 'JAKARTA', 'IV01', 'MSS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1517, 'RK9933', 'PT GLOBAL MULTI SOLUSINDO', 'No.71 A JL. Manoreh Raya Simpangan', 'ID', '', 'SEMARANG', 'IV01', 'GLOBAL', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1518, 'RK9934', 'PT SURTI KARYA PERDANA', 'JL. CIMALAKA N0.14 CISADEA SUKAMAJU', 'ID', '', 'BANDUNG', 'IV01', 'SURTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1519, 'RK9935', 'PT Samuan Rumah Kreasi', 'No. 33 Jl. Tentara Pelajar Rukan Pe', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'SAMUAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1520, 'RK9936', 'PT Sarana Cipta Karya', 'Jl. Raya Lenteng Agung No. 36', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'SARANA CK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1521, 'RK9937', 'PT. GAVINDO GEMILANG SEJAHTERA', 'No. 18 Kota Wisata Pesona Montreal', 'ID', '', 'BOGOR', 'IV01', 'GAVINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1522, 'RK9938', 'PT. Himar Raya Sejahtera', 'Jl. Dukuh Raya Bintara Jaya', 'ID', '17136', 'BEKASI', 'IV01', 'HIMAR', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1523, 'RK9940', 'PT MAJU MAKMUR INDAH', ': Jl. Musi No. 3B Jakarta Pusat', 'ID', '', 'JAKARTA PUSAT', 'IV01', 'MMI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1524, 'RK9941', 'PT SURTI KARYA PERDANA', 'JL. CIMALAKA NO.14 Cisadea Sukamaju', 'ID', '', 'BANDUNG', 'IV01', 'SURTI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1525, 'RK9942', 'PT SATRIA ANDALAN BERBUDI', 'JL. KH HASIM WAHID SLI NO.02 RT O54', 'ID', '', 'SAMARINDA', 'IV01', 'SATRIA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1526, 'RK9943', 'PT FOCUSTAMA SENTRALINDO', 'RUKAAN GRAND ORCHARD SQUARE UNIT', 'ID', '14140', 'JAKARTA UTARA', 'IV01', 'FOCUSTAMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1527, 'RK9945', 'PT. WIJAYANUSA INTIKARYA', 'JL RAYA Bekasi Timur KM. 17 No. 17', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'WIJAYANUSA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1528, 'RK9946', 'PT MIKA TRIKARYA INDONESIA', 'LT.4 JL. KP TENDEAN NO.7 WISMA TEND', 'ID', '12790', 'JAKARTA SELATAN', 'IV01', 'MIKA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1529, 'RK9947', 'PT DYNAMICS POWER SOLUTION', 'KOMPLEKS DUTA MERLIN BLOK E NO.32', 'ID', '', 'JAKARTA PUSAT', 'IV01', 'DPS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1530, 'RK9948', 'PT INTI NUSANTARA CONNECTION', '6512 Jl. Bukit Cinere No. 121,', 'ID', '16512', 'DEPOK', 'IV01', 'INC', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1531, 'RK9949', 'CV ICON GLOBAL INDONESIA', 'JL. TATAWINATA NO.8 RT.04/02 KEDUNG', 'ID', '', 'BOGOR', 'IV01', 'ICON GLOBA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1532, 'RK9950', 'PT PRADATA INTEGRA MEDIA', 'LT.3 JL. CASABLANGKA kV. 18 MENTENG', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'PRADATA IM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1533, 'RK9951', 'PT INRANEGRY CENDIKIA TEKNOKOM', 'LT.1 JL SIMPANG DUKUH NO.38-40 GENT', 'ID', '', 'SURABAYA', 'IV01', 'INTRANEGRY', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1534, 'RK9952', 'PT. VOLGER JAYA MAKMUR INDONESIA', 'Jl Ampera II No. 30 A Rt 003/009 KE', 'ID', '', 'JAKARTA UTARA', 'IV01', 'VOLGER', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1535, 'RK9953', 'Perkumpulan Gerakan Untuk Kesejahte', 'TAJUNG BAR Jln.Ranco Indah Dalam No', 'ID', '12530', 'JAKARTA SELATAN', 'IV01', 'TUNA RUNGU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1536, 'RK9954', 'PT GALAXI DATA INDONESIA', 'JL. ROSELA 1 BLOK FF NO.11', 'ID', '11460', 'BEKASI', 'IV01', 'GDI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1537, 'RK9955', 'PT ROSDIAN ANUGRAH', 'NO.12 JL. I GUSTI NGURAH RAI BLOK B', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'ROSDIAN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1538, 'RK9956', 'PT ACCESS MICRO SISTEM', 'LT.1 JL. PALMERAH UTARA N0.14 GD CE', 'ID', '11480', 'JAKARTA BARAT', 'IV01', 'ACCES MS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1539, 'RK9957', 'PT BINTORO SINERGI KORPORA', 'KAV.4 JL. HR RASUNA SAID BLOK X-2 k', 'ID', '', 'JAKARTA', 'IV01', 'BS KORPORA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1540, 'RK9958', 'PT. GARDA INTEGRA SOLUSINDO', 'Jl. Daan Mogot KM. 18 Kel. Kalidere', 'ID', '11840', 'JAKARTA BARAT', 'IV01', 'GARDA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1541, 'RK9959', 'PT PERMATA BUSANA MAS', 'NO.3 JL. BOULEVARD RAYA BLOK K4 KEL', 'ID', '14240', 'JAKARTA UTARA', 'IV01', 'PERMATA BU', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1542, 'RK9960', 'PT UPRINDO TRANDING COMPANY', 'JL. VENUS TIMUR VIII NO.7  KEC SEKE', 'ID', '', 'JAKARTA', 'IV01', 'UPRINDO', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1543, 'RK9961', 'PT Jasmine Cahaya Utama', 'NO.11 Jl. Pejaten Raya Ps Minggu Gr', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'JASMINE', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1544, 'RK9962', 'CV PAYU ABADI', 'JL. PERSATUAN 1 NO.120 CIMANGGIS', 'ID', '16951', 'DEPOK', 'IV01', 'PAYU ABADI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1545, 'RK9963', 'TOKYU CONSTRUCTION CO., LTD.', 'Shibuya ,Shibuya-ku 150-8340', 'JP', '8340', 'TOKYO', 'IV01', 'TOKYU CNST', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'JPY', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1546, 'RK9964', 'PT ANUGRAH KARYA FORTUNA', 'JL. UJUNG HARAPAN NO.41 KP. IRIAN,', 'ID', '17121', 'BEKASI', 'IV01', 'AKF', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1547, 'RK9965', 'PT. SMART PRINT', 'JL. KEBAGUSAN WATES NO.3 RT 03/04', 'ID', '12520', 'JAKARTA', 'IV01', 'SMART PRIN', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1548, 'RK9966', 'PT. DIGITAL OPEN HOUSE', 'SENTRAL BAZAAR CINERE BLOK KBE 3-32', 'ID', '', 'DEPOK', 'IV01', 'DIGITAL OP', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1549, 'RK9967', 'PT TRIMAS EKATAMA NUSANTARA', 'JL.RADEN SALEH NO. 18Q KEL. KENARI', 'ID', '10430', 'JAKARTA PUSAT', 'IV01', 'TRIMAS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1550, 'RK9968', 'PT PRESTASI MULTI KREASI', 'JL. H. SAMALI N0. 79A RT.017/001 PE', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'PMK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1551, 'RK9969', 'PT LAWU ALAM', 'JL. RAYA PASAR MINGGU N0. 99 D RT.', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'LAWU A', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1552, 'RK9970', 'PT LANA RATIFA', 'JL. RAYA MALAKA N0. 35', 'ID', '', 'JAKARTA TIMUR', 'IV01', 'LANA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1553, 'RK9971', 'PT KREASI INSPIRASI SAHABAT', 'CILENGGANG 1 RT.03/02 SERPONG', 'ID', '', 'TANGGERANG', 'IV01', 'KREASI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1554, 'RK9976', 'PT POSTIGA SEJAHTERA', 'KOMP. PERKANTORAN PRAMUKASARI I NO.', 'ID', '', 'JAKARTA', 'IV01', 'POSTIGA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1555, 'RK9977', 'PT. GAMA MULTI USAHA MANDIRI', 'BULAK SUMUR BLOK H-5', 'ID', '55281', 'YOGYAKARTA', 'IV01', 'GAMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1556, 'RK9983', 'PT KARSA ASRI MULYA', 'JL. H SAMALI NO.79 A LT. 3 PEJATEN', 'ID', '', 'JAKARTA SELATAN', 'IV01', 'KARSA A M', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1557, 'RK9984', 'PT. DANA PURNA INVESTAMA', 'JL. Tanah Abang I No. 27A. Jakarta', 'ID', '10160', 'Jakarta', 'IV01', 'DPI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1558, 'RK9985', 'PT. SENTRA SUPPORT SERVICE', 'Jl. Jemur Andayani XIX/2, RT.1 RW.4', 'ID', '', 'Surabaya', 'IV01', 'SSS', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1559, 'RK9986', 'PT. DWI MANUNGGAL MANDIRI', 'Kemayoran Ruko Lt.4 Jl. Utan Panjan', 'ID', '10650', 'Jakarta', 'IV01', 'DMM', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1560, 'RK9987', 'PT. AGRICON PUTRA CITRA OPTIMA', 'No.68 Jl. Siliwangi', 'ID', '16134', 'Bogor', 'IV01', 'APCO', 'X', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1561, 'RK9988', 'PT. SPEKTRA SOLUSINDO', 'Jl. Cisanggiri I No.8 Kebayoran Bar', 'ID', '12170', 'Jakarta', 'IV01', 'SS', 'X', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', 'X', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1562, 'RK9989', 'PT. SWADHARMA GRIYASATYA', 'Gedung BNI Lt. 25 Jl. Jend. Sudirma', 'ID', '10220', 'Jakarta', 'IV01', 'SWADHARMA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1563, 'RK9990', 'PT. ASURANSI ADIRA DINAMIKA', 'Jl. Mt. Haryono Kav. 42 Gedung Grah', 'ID', '12770', 'Jakarta', 'IV01', 'ADD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1564, 'RK9991', 'PT. Veda Praxis', 'Kav. 45-46 Sampoerna StrategicmSqua', 'ID', '12930', 'Jakarta', 'IV01', 'VEDAPRAX', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1565, 'RK9992', 'Perum PPD', '1 Mayjend D.I Panjaitan', 'ID', '11111', 'Jakarta', 'IV01', 'PPD', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1566, 'RK9993', 'PT. DUA BERLIAN', 'Jatinegara Jl. Rawa Sumur II KAv. B', 'ID', '', 'Jakarta', 'IV01', 'DUABERLI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1567, 'RK9994', 'PT Moeszaffir Estetika Indonesia', '9 Jl. Raya Pasar Minggu', 'ID', '12510', 'Jakarta', 'IV01', 'MEI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1568, 'RK9995', 'PT Lentera Berkat Abadi', '100 Jalan Pluit Karang Timur', 'ID', '11330', 'Jakarta', 'IV01', 'LBA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1569, 'RK9996', 'PT SETARA MANGGALA CIPTA', 'G NO. 5 JL. ir. H JUANDA DEPOK RUKA', 'ID', '16411', 'DEPOK', 'IV01', 'SETARA', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1570, 'RK9997', 'PT PIKAT ENERGI KREATIF', '9 Jl. Teratai Putih Raya', 'ID', '13460', 'Jakarta', 'IV01', 'PEK', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);
INSERT INTO "public"."vendor" VALUES (1571, 'RK9998', 'PT Tren Data Indonesia', '35  Jl. Kemang Utara IX', 'ID', '12760', 'Jakarta', 'IV01', 'TDI', '', 'C100', 'PT. KCI-Kantor Pusat', 'Z014', '', 'IDR', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."draft_rks_file_rks_id_seq"
OWNED BY "public"."draft_rks_file"."rks_id";
SELECT setval('"public"."draft_rks_file_rks_id_seq"', 14, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."failed_jobs_id_seq"
OWNED BY "public"."failed_jobs"."id";
SELECT setval('"public"."failed_jobs_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."migrations_id_seq"
OWNED BY "public"."migrations"."id";
SELECT setval('"public"."migrations_id_seq"', 39, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."permissions_id_seq"
OWNED BY "public"."permissions"."id";
SELECT setval('"public"."permissions_id_seq"', 57, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."report_pbj_contract_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."report_realisasi_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."report_timeline_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."roles_id_seq"
OWNED BY "public"."roles"."id";
SELECT setval('"public"."roles_id_seq"', 14, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."sp3_file_sp3_file_id_seq"
OWNED BY "public"."sp3_file"."sp3_file_id";
SELECT setval('"public"."sp3_file_sp3_file_id_seq"', 15, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_aanwidjzing_aanwidjzing_id_seq"
OWNED BY "public"."trx_aanwidjzing"."aanwidjzing_id";
SELECT setval('"public"."trx_aanwidjzing_aanwidjzing_id_seq"', 48, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_berita_acara_hasil_pelelangan_berita_acara_id_seq"
OWNED BY "public"."trx_berita_acara_hasil_pelelangan"."berita_acara_id";
SELECT setval('"public"."trx_berita_acara_hasil_pelelangan_berita_acara_id_seq"', 6, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_document_penawaran_document_penawaran_id_seq"
OWNED BY "public"."trx_document_penawaran"."document_penawaran_id";
SELECT setval('"public"."trx_document_penawaran_document_penawaran_id_seq"', 27, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_eval_sp3_eval_sp3_id_seq"
OWNED BY "public"."trx_eval_sp3"."eval_sp3_id";
SELECT setval('"public"."trx_eval_sp3_eval_sp3_id_seq"', 80, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_evaluasi_dokumen_penawaran_document_penawaran_id_seq"
OWNED BY "public"."trx_evaluasi_dokumen_penawaran"."document_evaluasi_id";
SELECT setval('"public"."trx_evaluasi_dokumen_penawaran_document_penawaran_id_seq"', 23, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_file_berita_acara_aanwidjzing_berita_acara_id_seq"
OWNED BY "public"."trx_file_berita_acara_aanwidjzing"."berita_acara_id";
SELECT setval('"public"."trx_file_berita_acara_aanwidjzing_berita_acara_id_seq"', 9, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_jadwal_pelaksanaan_pelaksanaan_id_seq"
OWNED BY "public"."trx_jadwal_pelaksanaan"."pelaksanaan_id";
SELECT setval('"public"."trx_jadwal_pelaksanaan_pelaksanaan_id_seq"', 1, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_klasifikasi_konfirmasi_negosiasi_klasifikasi_id_seq"
OWNED BY "public"."trx_klasifikasi_konfirmasi_negosiasi"."klasifikasi_id";
SELECT setval('"public"."trx_klasifikasi_konfirmasi_negosiasi_klasifikasi_id_seq"', 21, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_npp_npp_id_seq"
OWNED BY "public"."trx_npp"."npp_id";
SELECT setval('"public"."trx_npp_npp_id_seq"', 10, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_penetapan_pemenang_pemenang_id_seq"
OWNED BY "public"."trx_penetapan_pemenang"."pemenang_id";
SELECT setval('"public"."trx_penetapan_pemenang_pemenang_id_seq"', 6, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_peserta_tender_peserta_tender_id_seq"
OWNED BY "public"."trx_peserta_tender"."peserta_tender_id";
SELECT setval('"public"."trx_peserta_tender_peserta_tender_id_seq"', 28, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_sp3_sp3_id_seq"
OWNED BY "public"."trx_sp3"."sp3_id";
SELECT setval('"public"."trx_sp3_sp3_id_seq"', 53, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_timeline_timeline_id_seq"
OWNED BY "public"."trx_timeline"."timeline_id";
SELECT setval('"public"."trx_timeline_timeline_id_seq"', 34, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."users_id_seq"
OWNED BY "public"."users"."id";
SELECT setval('"public"."users_id_seq"', 17, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."vendor_vendor_id_seq"
OWNED BY "public"."vendor"."vendor_id";
SELECT setval('"public"."vendor_vendor_id_seq"', 1571, true);

-- ----------------------------
-- Primary Key structure for table draft_rks_file
-- ----------------------------
ALTER TABLE "public"."draft_rks_file" ADD CONSTRAINT "draft_rks_file_pkey" PRIMARY KEY ("rks_id");

-- ----------------------------
-- Primary Key structure for table failed_jobs
-- ----------------------------
ALTER TABLE "public"."failed_jobs" ADD CONSTRAINT "failed_jobs_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table migrations
-- ----------------------------
ALTER TABLE "public"."migrations" ADD CONSTRAINT "migrations_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table model_has_permissions
-- ----------------------------
CREATE INDEX "model_has_permissions_model_id_model_type_index" ON "public"."model_has_permissions" USING btree (
  "model_id" "pg_catalog"."int8_ops" ASC NULLS LAST,
  "model_type" COLLATE "pg_catalog"."default" "pg_catalog"."text_ops" ASC NULLS LAST
);

-- ----------------------------
-- Primary Key structure for table model_has_permissions
-- ----------------------------
ALTER TABLE "public"."model_has_permissions" ADD CONSTRAINT "model_has_permissions_pkey" PRIMARY KEY ("permission_id", "model_id", "model_type");

-- ----------------------------
-- Indexes structure for table model_has_roles
-- ----------------------------
CREATE INDEX "model_has_roles_model_id_model_type_index" ON "public"."model_has_roles" USING btree (
  "model_id" "pg_catalog"."int8_ops" ASC NULLS LAST,
  "model_type" COLLATE "pg_catalog"."default" "pg_catalog"."text_ops" ASC NULLS LAST
);

-- ----------------------------
-- Primary Key structure for table model_has_roles
-- ----------------------------
ALTER TABLE "public"."model_has_roles" ADD CONSTRAINT "model_has_roles_pkey" PRIMARY KEY ("role_id", "model_id", "model_type");

-- ----------------------------
-- Indexes structure for table password_resets
-- ----------------------------
CREATE INDEX "password_resets_email_index" ON "public"."password_resets" USING btree (
  "email" COLLATE "pg_catalog"."default" "pg_catalog"."text_ops" ASC NULLS LAST
);

-- ----------------------------
-- Uniques structure for table permissions
-- ----------------------------
ALTER TABLE "public"."permissions" ADD CONSTRAINT "permissions_name_guard_name_unique" UNIQUE ("name", "guard_name");

-- ----------------------------
-- Primary Key structure for table permissions
-- ----------------------------
ALTER TABLE "public"."permissions" ADD CONSTRAINT "permissions_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table role_has_permissions
-- ----------------------------
ALTER TABLE "public"."role_has_permissions" ADD CONSTRAINT "role_has_permissions_pkey" PRIMARY KEY ("permission_id", "role_id");

-- ----------------------------
-- Uniques structure for table roles
-- ----------------------------
ALTER TABLE "public"."roles" ADD CONSTRAINT "roles_name_guard_name_unique" UNIQUE ("name", "guard_name");

-- ----------------------------
-- Primary Key structure for table roles
-- ----------------------------
ALTER TABLE "public"."roles" ADD CONSTRAINT "roles_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table sp3_file
-- ----------------------------
ALTER TABLE "public"."sp3_file" ADD CONSTRAINT "sp3_file_pkey" PRIMARY KEY ("sp3_file_id");

-- ----------------------------
-- Primary Key structure for table trx_aanwidjzing
-- ----------------------------
ALTER TABLE "public"."trx_aanwidjzing" ADD CONSTRAINT "trx_aanwidjzing_pkey" PRIMARY KEY ("aanwidjzing_id");

-- ----------------------------
-- Primary Key structure for table trx_berita_acara_hasil_pelelangan
-- ----------------------------
ALTER TABLE "public"."trx_berita_acara_hasil_pelelangan" ADD CONSTRAINT "trx_berita_acara_hasil_pelelangan_pkey" PRIMARY KEY ("berita_acara_id");

-- ----------------------------
-- Primary Key structure for table trx_document_penawaran
-- ----------------------------
ALTER TABLE "public"."trx_document_penawaran" ADD CONSTRAINT "trx_document_penawaran_pkey" PRIMARY KEY ("document_penawaran_id");

-- ----------------------------
-- Primary Key structure for table trx_eval_sp3
-- ----------------------------
ALTER TABLE "public"."trx_eval_sp3" ADD CONSTRAINT "trx_eval_sp3_pkey" PRIMARY KEY ("eval_sp3_id");

-- ----------------------------
-- Primary Key structure for table trx_evaluasi_dokumen_penawaran
-- ----------------------------
ALTER TABLE "public"."trx_evaluasi_dokumen_penawaran" ADD CONSTRAINT "trx_evaluasi_dokumen_penawaran_pkey" PRIMARY KEY ("document_evaluasi_id");

-- ----------------------------
-- Primary Key structure for table trx_file_berita_acara_aanwidjzing
-- ----------------------------
ALTER TABLE "public"."trx_file_berita_acara_aanwidjzing" ADD CONSTRAINT "trx_file_berita_acara_aanwidjzing_pkey" PRIMARY KEY ("berita_acara_id");

-- ----------------------------
-- Primary Key structure for table trx_jadwal_pelaksanaan
-- ----------------------------
ALTER TABLE "public"."trx_jadwal_pelaksanaan" ADD CONSTRAINT "trx_jadwal_pelaksanaan_pkey" PRIMARY KEY ("pelaksanaan_id");

-- ----------------------------
-- Primary Key structure for table trx_klasifikasi_konfirmasi_negosiasi
-- ----------------------------
ALTER TABLE "public"."trx_klasifikasi_konfirmasi_negosiasi" ADD CONSTRAINT "trx_klasifikasi_konfirmasi_negosiasi_pkey" PRIMARY KEY ("klasifikasi_id");

-- ----------------------------
-- Primary Key structure for table trx_npp
-- ----------------------------
ALTER TABLE "public"."trx_npp" ADD CONSTRAINT "trx_npp_pkey" PRIMARY KEY ("npp_id");

-- ----------------------------
-- Primary Key structure for table trx_penetapan_pemenang
-- ----------------------------
ALTER TABLE "public"."trx_penetapan_pemenang" ADD CONSTRAINT "trx_penetapan_pemenang_pkey" PRIMARY KEY ("pemenang_id");

-- ----------------------------
-- Primary Key structure for table trx_peserta_tender
-- ----------------------------
ALTER TABLE "public"."trx_peserta_tender" ADD CONSTRAINT "trx_peserta_tender_pkey" PRIMARY KEY ("peserta_tender_id");

-- ----------------------------
-- Primary Key structure for table trx_sp3
-- ----------------------------
ALTER TABLE "public"."trx_sp3" ADD CONSTRAINT "trx_sp3_pkey" PRIMARY KEY ("sp3_id");

-- ----------------------------
-- Primary Key structure for table trx_timeline
-- ----------------------------
ALTER TABLE "public"."trx_timeline" ADD CONSTRAINT "trx_timeline_pkey" PRIMARY KEY ("timeline_id");

-- ----------------------------
-- Uniques structure for table users
-- ----------------------------
ALTER TABLE "public"."users" ADD CONSTRAINT "users_email_unique" UNIQUE ("email");

-- ----------------------------
-- Primary Key structure for table users
-- ----------------------------
ALTER TABLE "public"."users" ADD CONSTRAINT "users_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table vendor
-- ----------------------------
ALTER TABLE "public"."vendor" ADD CONSTRAINT "vendor_pkey" PRIMARY KEY ("vendor_id");

-- ----------------------------
-- Foreign Keys structure for table model_has_permissions
-- ----------------------------
ALTER TABLE "public"."model_has_permissions" ADD CONSTRAINT "model_has_permissions_permission_id_foreign" FOREIGN KEY ("permission_id") REFERENCES "public"."permissions" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table model_has_roles
-- ----------------------------
ALTER TABLE "public"."model_has_roles" ADD CONSTRAINT "model_has_roles_role_id_foreign" FOREIGN KEY ("role_id") REFERENCES "public"."roles" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table role_has_permissions
-- ----------------------------
ALTER TABLE "public"."role_has_permissions" ADD CONSTRAINT "role_has_permissions_permission_id_foreign" FOREIGN KEY ("permission_id") REFERENCES "public"."permissions" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;
ALTER TABLE "public"."role_has_permissions" ADD CONSTRAINT "role_has_permissions_role_id_foreign" FOREIGN KEY ("role_id") REFERENCES "public"."roles" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;
