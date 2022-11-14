/*
 Navicat Premium Data Transfer

 Source Server         : kci-log
 Source Server Type    : PostgreSQL
 Source Server Version : 140005
 Source Host           : 10.20.12.81:5432
 Source Catalog        : postgres
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 140005
 File Encoding         : 65001

 Date: 04/10/2022 18:20:15
*/


-- ----------------------------
-- Table structure for bank_master
-- ----------------------------
DROP TABLE IF EXISTS "public"."bank_master";
CREATE TABLE "public"."bank_master" (
  "id" int4 NOT NULL,
  "bank_name" varchar(255) COLLATE "pg_catalog"."default",
  "bank_address" varchar(500) COLLATE "pg_catalog"."default",
  "telp" varchar(255) COLLATE "pg_catalog"."default",
  "fax" varchar(255) COLLATE "pg_catalog"."default",
  "website" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of bank_master
-- ----------------------------
INSERT INTO "public"."bank_master" VALUES (1, 'PT BANK RAKYAT INDONESIA (PERSERO) Tbk', 'Jl. Jend. Sudirman Kav. 44-46, Jakarta 10210', '(021) 2510244, 2510254, 2510269-264', '(021) 2500077, 2500065', 'www.bri.co.id');
INSERT INTO "public"."bank_master" VALUES (2, 'PT BANK MANDIRI (PERSERO) Tbk', 'Plaza Mandiri, Jl. Gatot Subroto Kav. 36-38, Jakarta 12190', '(021) 5245006, 5245858, 5245849, 52997777', '(021) 5263459, 5263460, 5268246, 52997735', 'www.bankmandiri.co.id');
INSERT INTO "public"."bank_master" VALUES (3, 'PT BANK NEGARA INDONESIA (PERSERO) Tbk', 'Jl. Jend. Sudirman Kav. 1, Jakarta 10220', '(021) 2511218-19-20-22-24-25-26-29', '(021) 2511221, 5709506', 'www.bni.co.id');
INSERT INTO "public"."bank_master" VALUES (4, 'PT BANK TABUNGAN NEGARA (PERSERO) Tbk', 'Gedung Menara BTN, Jl. Gajah Mada No. 1, Jakarta 10130', '(021) 2310490, 6336789, 26533555', '(021) 6346704', 'www.btn.co.id');
INSERT INTO "public"."bank_master" VALUES (5, 'PT BANK DANAMON INDONESIA Tbk', 'Menara Bank Danamon, Jl. HR. Rasuna Said Blok C No. 10, Karet Setiabudi, Jakarta Selatan 12940', '(021) 80645000', '(021) 80645033', 'www.danamon.co.id');
INSERT INTO "public"."bank_master" VALUES (6, 'PT BANK PERMATA Tbk', 'Gedung World Trade Center (WTC) II, Jl. Jend. Sudirman Kav. 29-31 Jakarta 12920', '(021) 5237788', '(021) 5237253', 'www.permatabank.com');
INSERT INTO "public"."bank_master" VALUES (7, 'PT BANK CENTRAL ASIA Tbk', 'Menara BCA, Grand Indonesia Jl. M.H Thamrin No. 1, Jakarta 10310', '(021) 2358-8000', '(021) 2358-8300', 'www.bca.co.id');
INSERT INTO "public"."bank_master" VALUES (8, 'PT BANK MAYBANK  INDONESIA Tbk', 'Gedung Sentral Senayan 3, Lt. 26, Jl. Asia Afrika No. 8, Gelora Bung Karno - Senayan, Jakarta Pusat 10270', '(021) 29228888', '(021) 29228914', 'www.maybank.co.id');
INSERT INTO "public"."bank_master" VALUES (9, 'PT PAN INDONESIA BANK Tbk', 'Panin Bank Centre, Jl. Jend. Sudirman Kav. 1 (Senayan), Jakarta 10270', '(021) 2700545 ', '(021) 2700340, 2700391', 'www.panin.co.id');
INSERT INTO "public"."bank_master" VALUES (10, 'PT BANK CIMB NIAGA Tbk', 'Graha Niaga / Niaga Tower Jl. Jend. Sudirman Kav. 58, Jakarta 12190', '(021) 2505151, 2505252, 2505353', '(021) 2505202, 2505205', 'www.cimbniaga.com');
INSERT INTO "public"."bank_master" VALUES (11, 'PT BANK UOB INDONESIA', 'Gedung UOB Plaza, Jl. M.H. Thamrin No. 10 Jakarta 10230', '(021) 23506000', '(021) 29936632', 'www.uob.co.id');
INSERT INTO "public"."bank_master" VALUES (12, 'PT BANK OCBC NISP Tbk', 'OCBC NISP Tower, Jl. Prof.Dr. Satrio Kav. 25, Jakarta Selatan 12950', '(021) 25533888', '(021) 57944000', 'www.ocbcnisp.com');
INSERT INTO "public"."bank_master" VALUES (13, 'PT BANK ARTHA GRAHA INTERNASIONAL Tbk', 'Gedung Arha Graha, Lt. 5, Jl. Sudirman Kav. 52-53, Senayan, Jakarta 12190', '(021) 5711095, 5152168', '(021) 5711084', 'www.arthagraha.com');
INSERT INTO "public"."bank_master" VALUES (14, 'PT BANK BUMI ARTA Tbk', 'Jl. KH. Wahid Hasyim No. 234, Jakarta 10250', '(021) 2300893, 2300455', '(021) 3102632, 325291, 2303624', 'www.bankbba.co.id');
INSERT INTO "public"."bank_master" VALUES (15, 'PT BANK HSBC INDONESIA', 'Gedung WTC 1, Lt. 3 Jl. Jendral Sudirman Kav.29-31, Jakarta 12920', '(021) 25514777', '(021) 529-61015', 'www.hsbc.co.id');
INSERT INTO "public"."bank_master" VALUES (16, 'PT BANK JTRUST INDONESIA Tbk', 'Gedung Sahid Sudirman Center Lt. 33 Jl. Sudirman No. 86, Jakarta Pusat 10220', '(021) 29261111', '(021) 5224670', 'www.jtrustbank.co.id');
INSERT INTO "public"."bank_master" VALUES (17, 'PT BANK MAYAPADA INTERNATIONAL Tbk', 'Mayapada Tower - 2nd Floor, Jl. Jend. Sudirman Kav. 28, Jakarta 12920', '(021) 5212288, 5212300', '(021) 5211995-965-539-985', 'www.bankmayapada.com');
INSERT INTO "public"."bank_master" VALUES (18, 'PT BANK OF INDIA INDONESIA Tbk', 'Jl. H. Samanhudi No. 37, Jakarta 10710', '(021) 3808178, 3500007 ', '(021) 3808178', 'www.boiindonesia.co.id');
INSERT INTO "public"."bank_master" VALUES (19, 'PT BANK MUAMALAT INDONESIA Tbk', 'Gedung Muamalat Tower,  Jl. Prof. Dr. Satrio Kav. 18, Jakarta 10220', '(021) 80666000', '(021) 2511465, 2511453', 'www.muamalatbank.com');
INSERT INTO "public"."bank_master" VALUES (20, 'PT BANK MESTIKA DHARMA Tbk', 'Jl. Zainul Arifin 118, Medan 20153', '(061) 4525800, 4560991-5500', '(061) 4525800, 4560991-5500', 'www.bankmestika.co.id');
INSERT INTO "public"."bank_master" VALUES (21, 'PT BANK SHINHAN INDONESIA', 'Ged. International Financial Centre (IFC) Tower 2 Lt. Dasar, Mezzanine, 30 dan 31 Jl. Jend. Sudirman Kav. 22-23 Jakarta Selatan', '(021) 29751500', '(021) 2311522, 2310159', 'www.shinhan.co.id');
INSERT INTO "public"."bank_master" VALUES (22, 'PT BANK SINARMAS Tbk', 'Sinarmas Land Plaza, Menara I, Lt. 1 &2 Jl. MH. Thamrin Kav. 51, Jakarta 10350', '(021) 31990101', '(021) 31990405', 'www.banksinarmas.co.id');
INSERT INTO "public"."bank_master" VALUES (23, 'PT BANK MASPION INDONESIA Tbk', 'Jl. Basuki Rahmat No. 50 - 54, Surabaya', '(031) 5319818, 5456334, 5356123', '(031) 3536839', 'www.bankmaspion.co.id');
INSERT INTO "public"."bank_master" VALUES (24, 'PT BANK GANESHA Tbk', 'Wisma Hayam Wuruk Lt.1 & 2, Jl. Hayam Wuruk No. 8, Jakarta Pusat', '(021) 29109900', '(021) 29109992', 'www.bankganesha.co.id');
INSERT INTO "public"."bank_master" VALUES (25, 'PT BANK ICBC INDONESIA', 'ICBC Tower Lt. 32, Jl. M.H. Thamrin No. 81, Jakarta Pusat', '021-23556000', '(021) 31996016', 'www.icbcindo.com');
INSERT INTO "public"."bank_master" VALUES (26, 'PT BANK QNB INDONESIA Tbk', 'Revenue Tower District 8 Lt.8 Jl. Jend. Sudirman Kav. 52-53 Jakarta 12190', '(021) 5155155', '(021) 5155155', 'www.qnb.co.id');
INSERT INTO "public"."bank_master" VALUES (27, 'PT BANK WOORI SAUDARA INDONESIA 1906 Tbk', 'Gedung Treasury Tower Lt.26 dan 27 District 8, SCBC Lt.28 Jl. Jend. Sudirman Kav.52 - 53 Jakarta 12190', '(021) 50871906', '(021) 50871900', 'www.banksaudara.com');
INSERT INTO "public"."bank_master" VALUES (28, 'PT BANK MEGA Tbk', 'Menara Bank Mega Lt.15, Jl. Kapten Tendean Kav. 12-14 A, Jakarta 12790', '(021) 7917500', '(021) 79187100', 'www.bankmega.com');
INSERT INTO "public"."bank_master" VALUES (29, 'PT BANK SYARIAH INDONESIA Tbk *)', 'Gedung The Tower, Jl. Gatot Subroto No.27 Kel. Karet Semanggi, Kec. Setiabudi, Jakarta Selatan 12930', '(021) 3450226, 3450227', '(021) 3924517, 3805272', 'www.bankbsi.co.id');
INSERT INTO "public"."bank_master" VALUES (30, 'PT BANK KB BUKOPIN Tbk', 'Jl. MT. Haryono Kav. 50-51, Jakarta 12770', '(021) 7989837, 7988266', '(021) 7980625, 7980238, 7980244', 'www.bukopin.co.id');
INSERT INTO "public"."bank_master" VALUES (31, 'PT BANK KEB HANA INDONESIA', 'Mangkuluhur City Tower One, Jl. Jend. Gatot Subroto Kav. 1-3 Kel. Karet Semanggi, Jakarta Selatan', '(021) 5220222, 5220223, 50811111', 'Fax: (021) 50811123', 'www.hanabank.co.id');
INSERT INTO "public"."bank_master" VALUES (32, 'PT BANK MNC INTERNASIONAL Tbk', 'Gedung MNC Financial Center, Lt. 6,7,8 Jl. Kebon Sirih Raya No. 27, Jakarta Pusat 10340', '(021) 3919898', '(021) 5701635', 'www.mncbank.co.id');
INSERT INTO "public"."bank_master" VALUES (33, 'PT BANK RAYA INDONESIA Tbk', 'Gedung BRI Agro Lt. 1-7 Jl. Warung Jati Barat No. 139 RT.010 RW.009 Kel Kalibata, Pancoran Jakarta Selatan 12740', '(021) 79199980', '(021) 79199950', 'www.bankagro.co.id');
INSERT INTO "public"."bank_master" VALUES (34, 'PT BANK SBI INDONESIA', 'Graha Mandiri, Jl. Imam Bonjol No.61 Lt. 1, Jakarta Pusat 10310', '(021) 39838747, 3805080', '(021) 3854491, 3864075', 'www.sbiindo.com');
INSERT INTO "public"."bank_master" VALUES (35, 'PT BANK MEGA SYARIAH', 'Menara Mega Syariah, Jl. HR Rasuna Said Kav. 19A, Jakarta 12950', '(021) 29852000', '(021) 29852100', 'www.megasyariah.co.id');
INSERT INTO "public"."bank_master" VALUES (36, 'PT BANK INDEX SELINDO', 'Plaza Bank Index Lt. 8 Jl. M. H. Thamrin No. 57 Jakarta Pusat', '(021) 3922328', '(021) 3922336', 'www.bankindex.co.id');
INSERT INTO "public"."bank_master" VALUES (37, 'PT BANK MAYORA', 'Gedung Mayora, Jl. Tomang Raya Kav. 21-23, Jakarta 11440', '(021) 5655287-88', '(021) 565 5277', 'www.bankmayora.com');
INSERT INTO "public"."bank_master" VALUES (38, 'PT BANK CHINA CONSTRUCTION BANK INDONESIA Tbk', 'Gedung Perkantoran sahid Sudirman Center Lt. 15, Jl. Jenderal Sudirman Kav. 86, Jakarta Pusat 10220', '(021) 50821000', '(021) 50821010', 'www.idn.ccb.com');
INSERT INTO "public"."bank_master" VALUES (39, 'PT BANK DBS INDONESIA', 'DBS Bank Tower, Lobby Level Lt 33-37 Ciputra World 1, Jl. Prof. Dr. Satrio Kav 3-5 Jakarta 12940', '(021) 29885000', '-', 'www.dbs.com');
INSERT INTO "public"."bank_master" VALUES (40, 'PT BANK RESONA PERDANIA', 'Menara Mulia Lt. 5 & 6, Suite 501 & 601 Jl. Gatot Subroto Kav. 9-11, Jakarta', '(021) 5701958', '(021) 5701950, 5701936, 5701939', 'www.perdania.co.id');
INSERT INTO "public"."bank_master" VALUES (41, 'PT BANK MIZUHO INDONESIA', 'Menara Astra, Lantai 53, Jl. Jend. Sudirman Kav. 5-6, Jakarta', '(021) 50910888', '(021) 3926354', 'www.mizuhocbk.co.id');
INSERT INTO "public"."bank_master" VALUES (42, 'PT BANK CAPITAL INDONESIA Tbk', 'Gedung Menara Jamsostek Lt. 1 & 6, Jl. Gatot Subroto No. 38 Jakarta Selatan 12710', '(021) 27938989', '(021) 27938900', 'www.bankcapital.co.id');
INSERT INTO "public"."bank_master" VALUES (43, 'PT BANK BNP PARIBAS INDONESIA', 'Sequis Tower Lt.28, SCBD Lot 11B Jl. Jenderal Sudirman Kav.71 Jakarta 12190', '(021) 50814789', '(021) 50814790', 'www.bnpparibas.co.id');
INSERT INTO "public"."bank_master" VALUES (44, 'PT BANK ANZ INDONESIA', 'World Trade Centre 3, Lt.30-31 Jl. Jend. Sudirman Kav.29-31, Karet Kuningan, Setiabudi, Jakarta Selatan 12920', '(021) 5750300', '(021) 5727447', 'www.anz.com');
INSERT INTO "public"."bank_master" VALUES (45, 'PT BANK IBK INDONESIA Tbk', 'Wisma GKBI Suites-UG01 Jl. Jendral Sudirman No. 29, Jakarta', '021-57908888', '-', 'www.bankagris.co.id');
INSERT INTO "public"."bank_master" VALUES (46, 'PT BANK ALADIN SYARIAH Tbk **)', 'Millennium Centennial Center Lt 7 Jl. Jendral Sudirman Kav. 25 Jakarta 12920', '(021) 2506446', '(021) 2506445', 'www.aladinbank.id');
INSERT INTO "public"."bank_master" VALUES (47, 'PT BANK CTBC INDONESIA', 'Tamara Center Lt. 15-17, Jl. Jend. Sudirman Kav. 24, Jakarta 12920', '(021) 25578787', '(021) 5206767', 'www.chinatrust.co.id');
INSERT INTO "public"."bank_master" VALUES (48, 'PT BANK COMMONWEALTH', 'Treasury Tower Lt. 65 Lot 28 SCBD, Jl. Jendral Sudirman Kav 52-45, Jakarta Selatan', '(021) 50960000', '(021) 60960140', 'www.commbank.co.id');
INSERT INTO "public"."bank_master" VALUES (49, 'PT BANK BTPN Tbk', 'Menara BTPN - CBD Mega Kuningan, Jl. Dr. Ide Anak Agung Gde Agung Kav. 5,5 - 5,6 Jakarta Selatan 12950', '(021) 30026200', '(021) 30026308', 'www.btpn.com');
INSERT INTO "public"."bank_master" VALUES (50, 'PT BANK VICTORIA SYARIAH', 'Gd Graha BIP lantai 5 Jl.Gatot Subroto Kav.23 Karet Semanggi Setiabudi Jakarta Selatan', '(021) 5600467', '(021) 57940941', 'www.bankvictoriasyariah.co.id');
INSERT INTO "public"."bank_master" VALUES (51, 'PT BANK JABAR BANTEN SYARIAH', 'Jl. Braga No. 135 Bandung', '022-4202599', '(022) 4212550/4212524', 'www.bjbsyariah.co.id');
INSERT INTO "public"."bank_master" VALUES (52, 'PT BANK BISNIS INTERNASIONAL', 'Jl. Ir. H. Djuanda No. 137, Bandung', '(022) 2501787, 2511900, 4233458', '(022) 4235741', 'www.bankbisnis.com');
INSERT INTO "public"."bank_master" VALUES (53, 'PT BANK JASA JAKARTA', 'Jl. Tiang Bendera III No. 26-28-30, Jakarta 11230', '(021) 6902611, 6906950', '(021) 6902619, 6910270, 6902031', 'www.bjj.co.id');
INSERT INTO "public"."bank_master" VALUES (54, 'PT BANK NEO COMMERCE Tbk', 'Treasury Tower Lt.60, District 8 SCBD Lot 28, Jl Jendral Sudirman Kav 52-53, Jakarta Selatan', '(021) 3517523, 3517533', '(021) 3517530, 3517535', 'www.bankneocommerce.co.id');
INSERT INTO "public"."bank_master" VALUES (55, 'PT BANK DIGITAL BCA', 'Gedung The City Tower (TCT) Lt.11 Jl. MH. Thamrin No.81 Kel. Dukuh Atas, Kec. Menteng Jakarta Pusat', '(021) 63864472,73,75', '(021) 63864476-63864474', 'www.bcadigital.co.id');
INSERT INTO "public"."bank_master" VALUES (56, 'PT BANK NATIONALNOBU Tbk', 'Plaza Semanggi Lt. 9, Jl. Jendral Sudirman Kav. 50 Jakarta', '(021) 25535128', '(021) 6310517', 'www.nobubank.com');
INSERT INTO "public"."bank_master" VALUES (57, 'PT BANK INA PERDANA Tbk', 'Wisma BSG, Jl. Abdul Muis No. 40, Jakarta Pusat', '(021) 3859050', '(021) 3859041', 'www.bankina.co.id');
INSERT INTO "public"."bank_master" VALUES (58, 'PT BANK PANIN DUBAI SYARIAH Tbk', 'Gd.Panin Life Centre Lt. 3, Jl. Letjend S. Parman Kav 91 Jakarta 11420', '(021) 56956100', '(021) 56956105', 'www.paninbanksyariah.co.id');
INSERT INTO "public"."bank_master" VALUES (59, 'PT PRIMA MASTER BANK', 'Jl. Jembatan Merah No. 15-17, Surabaya 60175', '(031) 3531253 ', '(031) 3520437', 'www.primamasterbank.co.id');
INSERT INTO "public"."bank_master" VALUES (60, 'PT BANK KB BUKOPIN SYARIAH ****)', 'Jl. Salemba Raya No. 55, Jakarta', '(021) 2300912', '(021) 3148401', 'wwww.syariahbukopin.co.id');
INSERT INTO "public"."bank_master" VALUES (61, 'PT BANK SAHABAT SAMPOERNA', 'Gedung Sampoerna Strategic Square Menara Utara, Lt. Mezzanine Jl. Jend. Sudirman Kav 45 Jakarta', '(021) 57951515', '(021) 57950624', 'www.banksampoerna.com');
INSERT INTO "public"."bank_master" VALUES (62, 'PT BANK OKE INDONESIA Tbk', 'Jl. Ir. H. Juanda No. 12, Jakarta 10120', '(021) 2312633', '(021) 2313749', 'www.bankdinar.co.id');
INSERT INTO "public"."bank_master" VALUES (63, 'PT BANK AMAR INDONESIA', 'Jl. Basuki Rahmad No. 109, Surabaya', '(031) 99015959', '(031) 3536839', 'www.amarbank.co.id');
INSERT INTO "public"."bank_master" VALUES (64, 'PT BANK SEABANK INDONESIA', 'Gedung IKP RI, Jl. R.P. Suroso No. 21, Jakarta 10330', '(021) 3100422, 3100448', '(021) 3102970, 3100959', 'www.bankkesejahteraan.co.id');
INSERT INTO "public"."bank_master" VALUES (65, 'PT BANK BCA SYARIAH', 'Jl. Jatinegara Timur No. 72, Jakarta 13310', '(021) 8190072, 8505030, 8505035', '(021) 8190826, 85901568', 'www.bcasyariah.co.id');
INSERT INTO "public"."bank_master" VALUES (66, 'PT BANK JAGO TBK', 'Menara BTPN Lt 43,45 dan 46 Jl. Dr. Ide Anak Agung Gde Agung Kav.5,5-5,6 Jakarta Selatan', '(021) 50927460', '-', 'www.jago.com');
INSERT INTO "public"."bank_master" VALUES (67, 'PT BANK TABUNGAN PENSIUNAN NASIONAL SYARIAH Tbk', 'Menara BTPN, Lt. 12 CBD Mega Kuningan, Jl. Dr. Ide Anak Agung Gde Agung Kav. 5.5-5.6 Kel. Kuningan Timur, Jakarta Selatan', '(021) 30026400', '(021) 29021699', 'www.btpnsyariah.com');
INSERT INTO "public"."bank_master" VALUES (68, 'PT BANK MULTIARTA SENTOSA', 'Graha Bank MAS Lt. 3, Jl. Setiabudi Selatan Kav. 7-8, Jakarta Selatan', '(021) 5790 6006', '(021) 5790 6005', 'www.bankmas.co.id');
INSERT INTO "public"."bank_master" VALUES (69, 'PT BANK FAMA INTERNASIONAL', 'Jl. Asia Afrika No. 115, Bandung', '(022) 4200808', '(022) 4200277', 'www.bankfama.co.id');
INSERT INTO "public"."bank_master" VALUES (70, 'PT BANK MANDIRI TASPEN', 'Graha Mantap Jalan Proklamasi No. 31  Kel. Pegangsaan, Kec. Menteng, Jakarta Pusat 10320', '(021) 21231772', '(021) 21231984', 'www.bankmantap.co.id');
INSERT INTO "public"."bank_master" VALUES (71, 'PT BANK VICTORIA INTERNATIONAL Tbk', 'Gedung Graha BIP Lt.10 Jl. Gatot Subroto Kav. 23 Karet Semanggi, Setiabudi Jakarta Selatan 12930', '(021) 5228888', '(021) 5228777', 'www.victoriabank.co.id');
INSERT INTO "public"."bank_master" VALUES (72, 'PT ALLO BANK INDONESIA ***)', 'Menara Bank Mega Lt.15, Jl. Kapten Tendean Kav. 12-14 A, Jakarta 12790', '(021) 3841178, 3841022-23', '(021) 6123959-7023', 'www.allobank.com');
INSERT INTO "public"."bank_master" VALUES (73, 'PT BPD JAWA BARAT DAN BANTEN Tbk', 'Jl. Naripan No. 12 - 14, Bandung 40111', '(022) 4234868, 4230223', '(022) 4210391, 4232153, 4206944-3934', 'www.bankjabar.co.id');
INSERT INTO "public"."bank_master" VALUES (74, 'PT BPD DKI', 'Gd. Prasada Sasana Karya Jl. Suryopranoto No. 8, Jakarta Pusat', '(021) 2314567 ', '(021) 3517660, 2310194, 2312884', 'www.bankdki.co.id');
INSERT INTO "public"."bank_master" VALUES (75, 'PT BPD DAERAH ISTIMEWA YOGYAKARTA', 'Jl. Tentara Pelajar No. 7, Yogyakarta', '(0274) 561614', '(0274) 562303, 520955', 'www.bpddiy.co.id');
INSERT INTO "public"."bank_master" VALUES (76, 'PT BPD JAWA TENGAH', 'Gedung Grinatha Jl. Pemuda No. 142, Semarang, Jawa Tengah 50132', '(024) 3547541, 3554025', '(024) 3540170, 3520186, 3556529', 'www.bankjateng.co.id');
INSERT INTO "public"."bank_master" VALUES (77, 'PT BPD JAWA TIMUR Tbk', 'Jl. Basuki Rakhmat No. 98-104, Surabaya', '(031) 5310090-99', '(031) 5311055', 'www.bankjatim.co.id');
INSERT INTO "public"."bank_master" VALUES (78, 'PT BPD JAMBI', 'Jl. Jend. A. Yani No. 18, Telanaipura, Jambi', '(0741) 60416, 60665, 62790, 64628', '(0741) 64882', 'www.bankjambi.co.id');
INSERT INTO "public"."bank_master" VALUES (79, 'PT BANK ACEH SYARIAH', 'Jl. Mr. H. T. Mohd. Hasan Gampong Lancot No. 89 Batoh, Banda Aceh', '(0651) 22966', '(0651) 33565', 'www.bankaceh.co.id');
INSERT INTO "public"."bank_master" VALUES (80, 'PT BPD SUMATERA UTARA', 'Jl. Imam Bonjol No. 18, Medan 20152', '(061) 4155100, 4515100', '(061) 4574153, 4574145, 4512652', 'www.banksumut.com');
INSERT INTO "public"."bank_master" VALUES (81, 'PT BANK NAGARI', 'Jl. Pemuda No. 21, Padang 25117', '(0751) 25055, 31577, 31578', '(0751) 37749, 31491', 'www.banknagari.co.id');
INSERT INTO "public"."bank_master" VALUES (82, 'PT BPD RIAU KEPRI SYARIAH *****)', 'Menara Dang Merdu BRK,  Jl. Jend. Sudirman No. 462, Kota Pekanbaru', '(0761) 47070', '(0761) 33397, 21195, 40134, 40135', 'www.brksyariah.co.id');
INSERT INTO "public"."bank_master" VALUES (83, 'PT BPD SUMATERA SELATAN DAN BANGKA BELITUNG', 'Jl. Gubernur H. Ahmad Bastari No. 07 Kel. Silaberanti Kec. Seberang Ulu I Jakabaring Palembang', '(0711) 5228080', '(0711) 5228107', 'www.banksumselbabel.com');
INSERT INTO "public"."bank_master" VALUES (84, 'PT BPD LAMPUNG', 'Jl. Wolter Monginsidi No. 182, Teluk Betung, Bandar Lampung 35215', '(0721) 487175, 482237', '(0721) 485530', 'www.banklampung.co.id');
INSERT INTO "public"."bank_master" VALUES (85, 'PT BPD KALIMANTAN SELATAN', 'Jl. Lambung Mangkurat No. 7, Banjarmasin 70111', '(0511) 3350726-28', '(0511) 57330, 50722', 'www.bankbpdkalsel.co.id');
INSERT INTO "public"."bank_master" VALUES (86, 'PT BPD KALIMANTAN BARAT', 'Jl. Rahadi Oesman No. 10, Pontianak 78117', '(0561) 732148, 734713, 736723', '(0561) 734351, 745148, 745149', 'www.bankkalbar.co.id');
INSERT INTO "public"."bank_master" VALUES (87, 'PT BPD KALIMANTAN TIMUR DAN KALIMANTAN UTARA', 'Jl. Jend. Sudirman No. 33, Samarinda', '(0541) 735500, 739563 - 567', '(0541) 735580, 748362', 'www.bankkaltim.com');
INSERT INTO "public"."bank_master" VALUES (88, 'PT BPD KALIMANTAN TENGAH', 'Jl. RTA Milono No. 12, Palangka Raya 73111', '(0536) 3226812', '(0536) 3242470', 'www.bp-kalteng.com');
INSERT INTO "public"."bank_master" VALUES (89, 'PT BPD SULAWESI SELATAN DAN SULAWESI BARAT', 'Jl. Dr. Sam Ratulangi No. 16, Makassar 90125', '(0411) 859171-72-73-74, 859176-181', '(0411) 854611, 859178', 'www.banksulsel.co.id');
INSERT INTO "public"."bank_master" VALUES (90, 'PT BPD SULAWESI UTARA DAN  GORONTALO', 'Jl. Sam Ratulangi No. 9, Manado 95111', '(0431) 861759, 851451', '(0431) 846515, 854522, 852430', 'www.banksulutgo.co.id');
INSERT INTO "public"."bank_master" VALUES (91, 'PT BANK NTB SYARIAH', 'Jl. Pejanggik No. 30, Mataram', '(0370) 632177, 636331, 635332', '(0370) 623527, 623526, 648766', 'www.bankntb.co.id');
INSERT INTO "public"."bank_master" VALUES (92, 'PT BPD BALI', 'Jl. Raya Puputan Niti Mandala, Renon, Denpasar', '(0361) 223301 - 05', '(0361) 229439, 235806, 237691', 'www.bpdbali.co.id');
INSERT INTO "public"."bank_master" VALUES (93, 'PT BPD NUSA TENGGARA TIMUR', 'Jl. W.J. Lalamentik No. 102, Kupang, Nusa Tenggara Timur, 85000', '(0380) 840555', '(0380) 840567', 'www.bpdntt.co.id');
INSERT INTO "public"."bank_master" VALUES (94, 'PT BPD MALUKU DAN MALUKU UTARA', 'Jl. Raya Pattimura 9, Ambon 97124', '(0911) 354214, 353144, 354229, 310696', '(0911) 353144, 354997, 354229, 345719, 342029', 'www.bankmaluku.co.id');
INSERT INTO "public"."bank_master" VALUES (95, 'PT BPD PAPUA', 'Jl. Ahmad Yani 5-7, Jayapura 99111, Kotak Pos 1536', '(0967) 532011 ', '(0967) 533019', 'www.bankpapua.com');
INSERT INTO "public"."bank_master" VALUES (96, 'PT BPD BENGKULU', 'Jl. Basuki Rachmat 6, Bengkulu', '(0736) 22144, 341170', '(0736) 21178', 'www.bankbengkulu.co.id');
INSERT INTO "public"."bank_master" VALUES (97, 'PT BPD SULAWESI TENGAH', 'Jl. St. Hasanuddin No. 20, Palu', '(0451) 421780', '(0451) 424405', 'www.sulteng.go.id');
INSERT INTO "public"."bank_master" VALUES (98, 'PT BPD SULAWESI TENGGARA', 'Jl. May. Jend. Sutoyo No. 95, Kendari, Sulawesi Tenggara', '(0401) 3121526, 3122104-194-551, 3123163', '(0401) 321568', 'www.banksultra.co.id');
INSERT INTO "public"."bank_master" VALUES (99, 'PT BPD BANTEN Tbk', 'Ruko Sembilan No. 8B-9A Jalan Jendral Sudirman, Lingkungan Kemang RT 04 RW 23, Kelurahan Sumur Pecung, Kecamatan Serang, Banten ', '(0254) 7917346', '(021) 79199950', 'www.bankbanten.co.id');
INSERT INTO "public"."bank_master" VALUES (100, 'CITIBANK, N.A.', 'Citibank Tower Lt. 8-11 Pacific Century Place SCBD Lot. 10 Jl. Jend. Sudirman No.52-53 Jakarta 12190', '(021) 80862500', '-', 'www.citibank.co.id');
INSERT INTO "public"."bank_master" VALUES (101, 'JP MORGAN CHASE BANK, NA', 'Gedung The Energy Lt. 5 & 6, SCBD Lot 11A, JL. Jend. Sudirman Kav 52-53, Jakarta 12190', '(021) 52918000, 52918750, 52918233', '(021) 52918211, 52918233, 5710958', 'www.jpmorganchase.com');
INSERT INTO "public"."bank_master" VALUES (102, 'BANK OF AMERICA, N.A', 'Gedung Bursa Efek Jakarta, Tower 2, Lt 23, Jl. Sudirman Kav. 52-53, Jakarta', '(021) 29553700', '(021) 5151407-5158088', 'www.bankofamerica.com');
INSERT INTO "public"."bank_master" VALUES (103, 'BANGKOK BANK PCL', 'Jl. MH. Thamrin No. 3, Jakarta', '(021) 2311008', '(021) 377842, 2310070, 3853881', 'www.bangkokbank.co.id');
INSERT INTO "public"."bank_master" VALUES (104, 'MUFG BANK, LTD', 'Gedung Mid Plaza Lt.1-3, Jl. Jend Sudirman Kav. 10-11, Jakarta 10220', '(021) 5706185, 5705177, 5703955', '(021) 5704149-7625, 5731927-6565', 'www.mufg.co.id');
INSERT INTO "public"."bank_master" VALUES (105, 'STANDARD CHARTERED BANK', 'Menara Standard Chartered Bank, Jl. Prof. Dr. Satrio No. 164, Jakarta 12950', '(021) 2550000, 579 99988', '(021) 5722280, 5721234', 'www.standardchartered.com');
INSERT INTO "public"."bank_master" VALUES (106, 'DEUTSCHE BANK AG', 'Deutsche Bank Building, Jl. Imam Bonjol No. 80, Jakarta', '(021) 29644401', '(021) 31935252', 'www.deutsche-bank.co.id/indonesia');
INSERT INTO "public"."bank_master" VALUES (107, 'BANK OF CHINA (HONG KONG) LIMITED', 'Wisma Tamara, Suite 101-201, Jl. Jend. Sudirman Kav. 24, Jakarta', '(021) 5205502', '(021) 5201113, 5207572', 'www.bankofchina.co.id');

-- ----------------------------
-- Primary Key structure for table bank_master
-- ----------------------------
ALTER TABLE "public"."bank_master" ADD CONSTRAINT "bank_master_pkey" PRIMARY KEY ("id");
