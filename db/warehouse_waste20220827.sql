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

 Date: 27/08/2022 22:18:11
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
  "harga_kontrak" varchar(100) COLLATE "pg_catalog"."default",
  "realisasi_qty" varchar(100) COLLATE "pg_catalog"."default",
  "realisasi_penjualan" varchar(100) COLLATE "pg_catalog"."default",
  "total_penjualan" varchar(100) COLLATE "pg_catalog"."default",
  "created_by" varchar(100) COLLATE "pg_catalog"."default",
  "updated_by" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of warehouse_waste
-- ----------------------------
INSERT INTO "public"."warehouse_waste" VALUES (1, '2022-03-16', 'Gram Bubutan', 'Gram Bubutan Ke 1', '6.025 ', '5.735,4', '34.555.785 ', '355.121.877 ', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (2, '2022-03-17', 'Gram Bubutan', 'Gram Bubutan Ke 2', '6.025 ', '4.945,3', '29.795.433 ', '- ', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (3, '2022-03-21', 'Gram Bubutan', 'Gram Bubutan Ke 3', '6.025 ', '6.790,7', '40.913.968 ', '- ', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (4, '2022-03-23', 'Gram Bubutan', 'Gram Bubutan Ke 4', '6.025 ', '5.704,9', '34.372.023 ', '- ', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (5, '2022-03-23', 'Gram Bubutan', 'Gram Bubutan Ke 5', '6.025 ', '5.585,8', '33.654.445 ', '- ', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (6, '2022-03-31', 'Gram Bubutan', 'Gram Bubutan Ke 6', '6.025 ', '6.921,6', '41.702.640 ', '- ', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (7, '2022-05-20', 'Gram Bubutan', 'Gram Bubutan Ke 7', '6.080 ', '6.449,7', '39.214.176 ', '- ', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (8, '2022-05-31', 'Gram Bubutan', 'Gram Bubutan Ke 8', '6.080 ', '5.783,4', '35.163.072 ', '', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (9, '2022-06-14', 'Gram Bubutan', 'Gram Bubutan Ke 9', '6.080 ', '4.598,4', '27.958.272 ', '', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (10, '2022-06-17', 'Gram Bubutan', 'Gram Bubutan Ke 10', '6.080 ', '6.215,8', '37.792.064 ', '', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (11, '2022-04-27', 'Limbah Pelumas', 'Pelumas Bekas Ke 1', '1.887 ', '6.453 ', '12.176.811 ', '81.213.461 ', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (12, '2022-05-12', 'Limbah Pelumas', 'Pelumas Bekas Ke 2', '1.887 ', '6.648,2 ', '12.545.153 ', '- ', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (13, '2022-05-13', 'Limbah Pelumas', 'Pelumas Bekas Ke 3', '1.887 ', '6.567,3 ', '12.392.495 ', '- ', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (14, '2022-06-03', 'Limbah Pelumas', 'Pelumas Bekas Ke 4', '1.887 ', '6.515,9 ', '12.295.503 ', '', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (15, '2022-06-03', 'Limbah Pelumas', 'Pelumas Bekas Ke 5', '1.887 ', '2.770,9 ', '5.228.688 ', '', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (16, '2022-06-10', 'Limbah Pelumas', 'Pelumas Bekas Ke 6', '1.887 ', '5.288,9 ', '9.980.154 ', '', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (17, '2022-06-10', 'Limbah Pelumas', 'Pelumas Bekas Ke 7', '1.887 ', '5.139,8 ', '9.698.803 ', '', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (18, '2022-06-21', 'Limbah Pelumas', 'Pelumas Bekas Ke 8', '1.887 ', '3.654,4 ', '6.895.853 ', '', NULL, NULL, '2022-08-27 17:11:04', NULL);
INSERT INTO "public"."warehouse_waste" VALUES (19, '2022-06-14', 'Potongan Logam', 'Potongan Logam Ke 1', '6.660 ', '2.145,6', '14.289.696 ', '14.289.696 ', NULL, NULL, '2022-08-27 17:11:04', NULL);

-- ----------------------------
-- Primary Key structure for table warehouse_waste
-- ----------------------------
ALTER TABLE "public"."warehouse_waste" ADD CONSTRAINT "warehouse_waste_pkey" PRIMARY KEY ("warehouse_waste_id");
