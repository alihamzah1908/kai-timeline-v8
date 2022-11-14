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

 Date: 03/08/2022 23:22:04
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
INSERT INTO "public"."draft_rks_file" VALUES (9, 23, 'SP3-2022-08-01-11-27-53.pdf', NULL, '6', NULL, '2022-08-01 11:27:53', '2022-08-01 11:27:53', 'SP3-2022-08-01-11-27-53.pdf', '1_sampul', 'TEST');
INSERT INTO "public"."draft_rks_file" VALUES (11, 32, 'SP3-2022-08-03-16-02-38.pdf', NULL, '6', NULL, '2022-08-03 16:02:38', '2022-08-03 16:02:38', 'SP3-2022-08-03-16-02-38.pdf', '1_sampul', 'OK');

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
INSERT INTO "public"."trx_document_penawaran" VALUES (10, 23, 'RK100002', NULL, '2022-08-02', '2022-08-02', '2_sampul', NULL, 'dokumen-penawaran-2022-08-02-14-02-30.pdf', 'dokumen-penawaran-2022-08-02-14-02-30.pdf', NULL, NULL, NULL, NULL, '6', NULL, '1970-01-01 00:00:06', '2022-08-02 14:02:30');
INSERT INTO "public"."trx_document_penawaran" VALUES (11, 23, 'RK100002', NULL, '2022-08-02', '2022-08-02', '2_sampul', NULL, 'dokumen-penawaran-2022-08-02-14-02-30.pdf', 'dokumen-penawaran-2022-08-02-14-02-30.pdf', NULL, NULL, NULL, NULL, '6', NULL, '1970-01-01 00:00:06', '2022-08-02 14:02:30');
INSERT INTO "public"."trx_document_penawaran" VALUES (12, 23, 'RK100002', NULL, '2022-08-02', '2022-08-02', '2_sampul', NULL, 'dokumen-penawaran-2022-08-02-14-02-30.pdf', 'dokumen-penawaran-2022-08-02-14-02-30.pdf', NULL, NULL, NULL, NULL, '6', NULL, '1970-01-01 00:00:06', '2022-08-02 14:02:30');
INSERT INTO "public"."trx_document_penawaran" VALUES (16, 32, 'RK10047', '2022-08-03', NULL, NULL, '1_sampul', 'dokumen-penawaran-2022-08-03-16-07-35.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '6', NULL, '2022-08-03 16:07:35', '2022-08-03 16:07:35');
INSERT INTO "public"."trx_document_penawaran" VALUES (17, 32, 'RK10003', '2022-08-03', NULL, NULL, '1_sampul', 'dokumen-penawaran-2022-08-03-16-07-35.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '6', NULL, '2022-08-03 16:07:35', '2022-08-03 16:07:35');
INSERT INTO "public"."trx_document_penawaran" VALUES (18, 32, 'RK100002', '2022-08-03', NULL, NULL, '1_sampul', 'dokumen-penawaran-2022-08-03-16-07-35.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '6', NULL, '2022-08-03 16:07:35', '2022-08-03 16:07:35');

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
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (1, 23, 'RK100002', '1_sampul', '1', NULL, NULL, '2022-08-02', NULL, NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, '6', NULL, '2022-08-02 15:58:51', '2022-08-02 15:58:51');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (2, 23, 'RK100002', '1_sampul', '1', NULL, NULL, '2022-08-02', NULL, NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, '6', NULL, '2022-08-02 15:58:51', '2022-08-02 15:58:51');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (3, 23, 'RK100002', '1_sampul', '1', NULL, NULL, '2022-08-02', NULL, NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, '6', NULL, '2022-08-02 15:58:51', '2022-08-02 15:58:51');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (4, 23, 'RK100002', '2_sampul', NULL, '0', '1', NULL, '2022-08-02', NULL, NULL, NULL, NULL, NULL, NULL, 'TEST', '6', NULL, '2022-08-02 16:21:46', '2022-08-02 16:21:46');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (5, 23, 'RK100002', '2_sampul', NULL, '0', '1', NULL, '2022-08-02', NULL, NULL, NULL, NULL, NULL, NULL, 'TEST', '6', NULL, '2022-08-02 16:21:46', '2022-08-02 16:21:46');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (6, 23, 'RK100002', '2_sampul', NULL, '0', '1', NULL, '2022-08-02', NULL, NULL, NULL, NULL, NULL, NULL, 'TEST', '6', NULL, '2022-08-02 16:21:46', '2022-08-02 16:21:46');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (7, 23, 'RK100002', '2_sampul', NULL, '1', '1', NULL, '2022-08-02', '2022-08-02', NULL, NULL, NULL, NULL, 'TEST', 'TEST', '6', NULL, '2022-08-02 16:22:56', '2022-08-02 16:22:56');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (8, 23, 'RK100002', '2_sampul', NULL, '1', '0', NULL, '2022-08-02', '2022-08-02', NULL, NULL, NULL, NULL, 'TEST', 'TEST', '6', NULL, '2022-08-02 16:22:56', '2022-08-02 16:22:56');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (9, 23, 'RK100002', '2_sampul', NULL, '1', '1', NULL, '2022-08-02', '2022-08-02', NULL, NULL, NULL, NULL, 'TEST', 'TEST', '6', NULL, '2022-08-02 16:22:56', '2022-08-02 16:22:56');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (10, 32, 'RK10047', '1_sampul', '1', NULL, NULL, '2022-08-03', NULL, NULL, NULL, NULL, NULL, 'OK', NULL, NULL, '6', NULL, '2022-08-03 16:13:15', '2022-08-03 16:13:15');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (11, 32, 'RK10003', '1_sampul', '1', NULL, NULL, '2022-08-03', NULL, NULL, NULL, NULL, NULL, 'OK', NULL, NULL, '6', NULL, '2022-08-03 16:13:15', '2022-08-03 16:13:15');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (12, 32, 'RK10047', '1_sampul', '1', NULL, NULL, '2022-08-03', NULL, NULL, NULL, NULL, NULL, 'OK', NULL, NULL, '6', NULL, '2022-08-03 16:13:35', '2022-08-03 16:13:35');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (13, 32, 'RK10003', '1_sampul', '1', NULL, NULL, '2022-08-03', NULL, NULL, NULL, NULL, NULL, 'OK', NULL, NULL, '6', NULL, '2022-08-03 16:13:35', '2022-08-03 16:13:35');
INSERT INTO "public"."trx_evaluasi_dokumen_penawaran" VALUES (14, 32, 'RK100002', '1_sampul', '1', NULL, NULL, '2022-08-03', NULL, NULL, NULL, NULL, NULL, 'OK', NULL, NULL, '6', NULL, '2022-08-03 16:13:35', '2022-08-03 16:13:35');

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
INSERT INTO "public"."trx_file_berita_acara_aanwidjzing" VALUES (5, 30, 'berita-acara-aanwidjzing-2022-08-01-15-49-26.pdf', NULL, NULL, '1970-01-01 00:00:06', '2022-08-01 15:49:26');
INSERT INTO "public"."trx_file_berita_acara_aanwidjzing" VALUES (6, 33, 'berita-acara-aanwidjzing-2022-08-03-14-53-33.pdf', NULL, NULL, '1970-01-01 00:00:04', '2022-08-03 14:53:33');
INSERT INTO "public"."trx_file_berita_acara_aanwidjzing" VALUES (7, 39, 'berita-acara-aanwidjzing-2022-08-03-16-04-33.pdf', NULL, NULL, '1970-01-01 00:00:06', '2022-08-03 16:04:33');

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
INSERT INTO "public"."trx_klasifikasi_konfirmasi_negosiasi" VALUES (1, '2022-08-09', '1200000', '1200000', NULL, NULL, 'TEST', '6', NULL, '2022-08-03 13:26:06', '2022-08-03 13:26:06', 23, 'RK100002');
INSERT INTO "public"."trx_klasifikasi_konfirmasi_negosiasi" VALUES (2, '2022-08-24', '1300000', '1200000', NULL, NULL, 'TEST', '6', NULL, '2022-08-03 13:26:06', '2022-08-03 13:26:06', 23, 'RK100002');
INSERT INTO "public"."trx_klasifikasi_konfirmasi_negosiasi" VALUES (3, '2022-08-10', '1400000', '1200000', NULL, NULL, 'TEST', '6', NULL, '2022-08-03 13:26:06', '2022-08-03 13:26:06', 23, 'RK100002');
INSERT INTO "public"."trx_klasifikasi_konfirmasi_negosiasi" VALUES (4, '2022-08-03', '1323131231', '32132131', NULL, NULL, 'OK', '6', NULL, '2022-08-03 16:16:37', '2022-08-03 16:16:37', 32, 'RK10047');
INSERT INTO "public"."trx_klasifikasi_konfirmasi_negosiasi" VALUES (5, '2022-08-03', '321321321', '3123231', NULL, NULL, 'OK', '6', NULL, '2022-08-03 16:16:37', '2022-08-03 16:16:37', 32, 'RK10003');
INSERT INTO "public"."trx_klasifikasi_konfirmasi_negosiasi" VALUES (6, '2022-08-03', '312312312312', '3213123', NULL, NULL, 'OK', '6', NULL, '2022-08-03 16:16:37', '2022-08-03 16:16:37', 32, 'RK100002');

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
INSERT INTO "public"."trx_penetapan_pemenang" VALUES (2, 23, 'RK100002', 'dokumen-pemenang-2022-08-03-13-58-03.pdf', 'TESTE', NULL, NULL, '2022-08-03 13:58:03', '2022-08-03 13:58:03');
INSERT INTO "public"."trx_penetapan_pemenang" VALUES (3, 32, 'RK100002', 'dokumen-pemenang-2022-08-03-16-16-51.pdf', 'ok', NULL, NULL, '2022-08-03 16:16:51', '2022-08-03 16:16:51');

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
INSERT INTO "public"."trx_peserta_tender" VALUES (2, 23, 'RK100002', '0819020101', 'NAZIA', 'mai@com', 'ciamis', '6', NULL, '2022-08-01 13:34:00', '2022-08-01 13:34:00');
INSERT INTO "public"."trx_peserta_tender" VALUES (12, 23, 'RK100002', '0819020101', 'NAZIA', 'mai@com', 'ciamis', '6', NULL, '2022-08-01 13:51:02', '2022-08-01 13:51:02');
INSERT INTO "public"."trx_peserta_tender" VALUES (13, 23, 'RK100002', '0819020101', 'DEDE', 'mai@com', 'JETAK', '6', NULL, '2022-08-01 13:51:02', '2022-08-01 13:51:02');
INSERT INTO "public"."trx_peserta_tender" VALUES (17, 32, 'RK10047', '021902010', 'Dendi', 'mail.com', 'Jakarta', '6', NULL, '2022-08-03 16:04:09', '2022-08-03 16:04:09');
INSERT INTO "public"."trx_peserta_tender" VALUES (18, 32, 'RK10003', '0219020101', 'Erwin', 'mail.com', 'Jakarta', '6', NULL, '2022-08-03 16:04:09', '2022-08-03 16:04:09');
INSERT INTO "public"."trx_peserta_tender" VALUES (19, 32, 'RK100002', '0219021001', 'Wendi', 'mail.com', 'Jakarta', '6', NULL, '2022-08-03 16:04:09', '2022-08-03 16:04:09');

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
  "tanggal_pr" timestamp(0) NOT NULL,
  "pr_sign_by" varchar(20) COLLATE "pg_catalog"."default",
  "nilai_pr" int4 NOT NULL,
  "type_tax" int4 NOT NULL,
  "nilai_tax" int4 NOT NULL,
  "no_mi" varchar(20) COLLATE "pg_catalog"."default",
  "tanggal_justifikasi" timestamp(0) NOT NULL,
  "no_rab" varchar(20) COLLATE "pg_catalog"."default",
  "tanggal_rab" timestamp(0) NOT NULL,
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
  "no_justifikasi" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of trx_sp3
-- ----------------------------
INSERT INTO "public"."trx_sp3" VALUES (23, 32, 'CU', 'CUG', 'CUGP', 'PEGANDAAN BARANG INTERNAL', 'OP/CUG/2022/23', '21231', '2022-07-30 17:02:11', NULL, 200000, 1, 0, '1230', '2022-07-30 17:02:11', '1230', '2022-07-30 17:02:11', '12312', '2022-07-30 17:02:11', 'PROSES_PCP', 1, 'PT CFD', 'KETERANGAN', 4, 4, '2022-07-30 17:02:11', '2022-08-03 14:53:33', '1213');
INSERT INTO "public"."trx_sp3" VALUES (31, 32, 'CU', 'CUG', 'CUGP', 'PEGANDAAN BARANG INTERNAL', 'OP/CUG/2022/32', NULL, '2022-07-31 16:41:54', NULL, 200000, 1, 0, NULL, '2022-07-31 16:41:54', NULL, '2022-07-31 16:41:54', NULL, '2022-07-31 16:41:54', 'PROSES_SSP3', 1, 'PT PERTAMINA', 'KETERANGAN', 4, 4, '2022-07-31 16:41:54', '2022-07-31 16:41:54', NULL);
INSERT INTO "public"."trx_sp3" VALUES (32, 32, 'CU', 'CUG', 'CUGP', 'PEGANDAAN BARANG INTERNAL', 'OP/CUG/2022/32', NULL, '2022-07-31 16:41:54', NULL, 200000, 1, 0, NULL, '2022-07-31 16:41:54', NULL, '2022-07-31 16:41:54', NULL, '2022-07-31 16:41:54', 'PROSES_PCP', 1, 'PT PERTAMINA', 'KETERANGAN', 4, 4, '2022-07-31 16:41:54', '2022-08-03 16:16:51', NULL);
INSERT INTO "public"."trx_sp3" VALUES (36, 32, 'CU', 'CUG', 'CUGP', 'PEGANDAAN BARANG INTERNAL', 'OP/CUG/2022/36', '21', '2022-08-03 09:32:54', NULL, 200000, 1, 0, '12', '2022-08-03 09:32:54', '12', '2022-08-03 09:32:54', '21', '2022-08-03 09:32:54', 'PROSES_SSP3', 1, 'Vendor C', 'KETERANGAN', 4, NULL, '2022-08-03 09:32:54', '2022-08-03 09:32:54', '21');
INSERT INTO "public"."trx_sp3" VALUES (37, 32, 'CU', 'CUG', 'CUGP', 'PEGANDAAN BARANG INTERNAL', 'OP/CUG/2022/37', '1231', '2022-08-03 09:45:41', NULL, 200000, 1, 0, '1230', '2022-08-03 09:45:41', '1230', '2022-08-03 09:45:41', '1231', '2022-08-03 09:45:41', 'PROSES_SSP3', 3, 'TEST', 'KETERANGAN', 4, NULL, '2022-08-03 09:45:41', '2022-08-03 09:45:41', '1231');

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
INSERT INTO "public"."trx_timeline" VALUES (32, 'CU', 'CUG', 'CUGP', 'PEGANDAAN BARANG INTERNAL', 'OP/CUG/2022/32', 'RKAP 2023', 'single_year', 'CAPEX', 'Sarana', 200000, 1, 0, '2022-07-12 00:00:00', '2022-08-01 00:00:00', 'PROSES_AT', 4, NULL, '2022-07-30 15:44:28', '2022-07-30 15:54:41');

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
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."draft_rks_file_rks_id_seq"
OWNED BY "public"."draft_rks_file"."rks_id";
SELECT setval('"public"."draft_rks_file_rks_id_seq"', 11, true);

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
SELECT setval('"public"."migrations_id_seq"', 36, true);

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
SELECT setval('"public"."trx_aanwidjzing_aanwidjzing_id_seq"', 39, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_document_penawaran_document_penawaran_id_seq"
OWNED BY "public"."trx_document_penawaran"."document_penawaran_id";
SELECT setval('"public"."trx_document_penawaran_document_penawaran_id_seq"', 18, true);

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
SELECT setval('"public"."trx_evaluasi_dokumen_penawaran_document_penawaran_id_seq"', 14, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_file_berita_acara_aanwidjzing_berita_acara_id_seq"
OWNED BY "public"."trx_file_berita_acara_aanwidjzing"."berita_acara_id";
SELECT setval('"public"."trx_file_berita_acara_aanwidjzing_berita_acara_id_seq"', 7, true);

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
SELECT setval('"public"."trx_klasifikasi_konfirmasi_negosiasi_klasifikasi_id_seq"', 6, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_penetapan_pemenang_pemenang_id_seq"
OWNED BY "public"."trx_penetapan_pemenang"."pemenang_id";
SELECT setval('"public"."trx_penetapan_pemenang_pemenang_id_seq"', 3, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_peserta_tender_peserta_tender_id_seq"
OWNED BY "public"."trx_peserta_tender"."peserta_tender_id";
SELECT setval('"public"."trx_peserta_tender_peserta_tender_id_seq"', 19, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_sp3_sp3_id_seq"
OWNED BY "public"."trx_sp3"."sp3_id";
SELECT setval('"public"."trx_sp3_sp3_id_seq"', 37, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."trx_timeline_timeline_id_seq"
OWNED BY "public"."trx_timeline"."timeline_id";
SELECT setval('"public"."trx_timeline_timeline_id_seq"', 32, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."users_id_seq"
OWNED BY "public"."users"."id";
SELECT setval('"public"."users_id_seq"', 17, true);

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
