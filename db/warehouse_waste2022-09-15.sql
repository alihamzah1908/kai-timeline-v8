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

 Date: 15/09/2022 22:00:35
*/


-- ----------------------------
-- Table structure for warehouse_waste
-- ----------------------------
DROP TABLE IF EXISTS "public"."warehouse_waste";
CREATE TABLE "public"."warehouse_waste" (
  "warehouse_waste_id" int8 NOT NULL DEFAULT nextval('warehouse_waste_warehouse_waste_id_seq'::regclass),
  "tanggal" date,
  "uraian" text COLLATE "pg_catalog"."default",
  "proses_pengangkutan" varchar(255) COLLATE "pg_catalog"."default",
  "harga_kontrak" int8,
  "realisasi_qty" int8,
  "realisasi_penjualan" int8,
  "total_penjualan" varchar(100) COLLATE "pg_catalog"."default",
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "estimasi_user" int8
)
;

-- ----------------------------
-- Records of warehouse_waste
-- ----------------------------
INSERT INTO "public"."warehouse_waste" VALUES (1, '2022-03-16', 'Gram Bubutan', 'Gram Bubutan Ke 1', 6025, 5735, 34555785, '355.121.877 ', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (2, '2022-03-17', 'Gram Bubutan', 'Gram Bubutan Ke 2', 6025, 4945, 29795433, '- ', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (3, '2022-03-21', 'Gram Bubutan', 'Gram Bubutan Ke 3', 6025, 6791, 40913968, '- ', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (4, '2022-03-23', 'Gram Bubutan', 'Gram Bubutan Ke 4', 6025, 5705, 34372023, '- ', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (5, '2022-03-23', 'Gram Bubutan', 'Gram Bubutan Ke 5', 6025, 5586, 33654445, '- ', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (6, '2022-03-31', 'Gram Bubutan', 'Gram Bubutan Ke 6', 6025, 6922, 41702640, '- ', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (7, '2022-05-20', 'Gram Bubutan', 'Gram Bubutan Ke 7', 6080, 6450, 39214176, '- ', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (8, '2022-05-31', 'Gram Bubutan', 'Gram Bubutan Ke 8', 6080, 5783, 35163072, '', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (9, '2022-06-14', 'Gram Bubutan', 'Gram Bubutan Ke 9', 6080, 4598, 27958272, '', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (10, '2022-06-17', 'Gram Bubutan', 'Gram Bubutan Ke 10', 6080, 6216, 37792064, '', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (11, '2022-04-27', 'Limbah Pelumas', 'Pelumas Bekas Ke 1', 1887, 6453, 12176811, '81.213.461 ', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (12, '2022-05-12', 'Limbah Pelumas', 'Pelumas Bekas Ke 2', 1887, 6648, 12545153, '- ', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (13, '2022-05-13', 'Limbah Pelumas', 'Pelumas Bekas Ke 3', 1887, 6567, 12392495, '- ', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (14, '2022-06-03', 'Limbah Pelumas', 'Pelumas Bekas Ke 4', 1887, 6516, 12295503, '', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (15, '2022-06-03', 'Limbah Pelumas', 'Pelumas Bekas Ke 5', 1887, 2771, 5228688, '', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (16, '2022-06-10', 'Limbah Pelumas', 'Pelumas Bekas Ke 6', 1887, 5289, 9980154, '', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (17, '2022-06-10', 'Limbah Pelumas', 'Pelumas Bekas Ke 7', 1887, 5140, 9698803, '', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (18, '2022-06-21', 'Limbah Pelumas', 'Pelumas Bekas Ke 8', 1887, 3654, 6895853, '', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);
INSERT INTO "public"."warehouse_waste" VALUES (19, '2022-06-14', 'Potongan Logam', 'Potongan Logam Ke 1', 6660, 2146, 14289696, '14.289.696 ', NULL, NULL, '2022-08-27 17:11:04', NULL, 6698);

-- ----------------------------
-- Primary Key structure for table warehouse_waste
-- ----------------------------
ALTER TABLE "public"."warehouse_waste" ADD CONSTRAINT "warehouse_waste_pkey" PRIMARY KEY ("warehouse_waste_id");
