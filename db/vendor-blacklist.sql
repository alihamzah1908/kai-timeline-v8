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

 Date: 08/09/2022 20:29:14
*/


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
-- Primary Key structure for table vendor
-- ----------------------------
ALTER TABLE "public"."vendor" ADD CONSTRAINT "vendor_pkey" PRIMARY KEY ("vendor_id");
