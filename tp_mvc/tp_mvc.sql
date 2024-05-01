/*
Navicat MySQL Data Transfer

Source Server         : Kashidota
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : tp_mvc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-05-01 10:59:34
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `members`
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id_member` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `tanggal_masuk` varchar(255) DEFAULT NULL,
  `jumlah_checkin` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('1', 'Arul', 'arul@gmail.com', '0812345678', '2024-05-01', '5');
INSERT INTO `members` VALUES ('5', 'Imam', 'imam@gmail.com', '098223121', '2024-05-01', '2');

-- ----------------------------
-- Table structure for `transaksi`
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,
  `deskripsi_transaksi` varchar(255) DEFAULT '',
  `total_harga` varchar(255) DEFAULT '',
  `tanggal_transaksi` varchar(255) DEFAULT '',
  `status_bayar` varchar(255) DEFAULT '',
  `id_member` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `fk_transaksimembers` (`id_member`),
  CONSTRAINT `fk_transaksimembers` FOREIGN KEY (`id_member`) REFERENCES `members` (`id_member`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES ('1', 'Pembayaran keanggotaan bulan', '50.00', 'test', 'Sudah Bayar', '1');
INSERT INTO `transaksi` VALUES ('3', 'Pembelian merchandise', '30.00', '2024-05-01', 'Belum Bayar', '1');
