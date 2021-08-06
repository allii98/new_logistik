-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2021 at 01:10 PM
-- Server version: 5.7.35-0ubuntu0.18.04.1
-- PHP Version: 5.6.40-47+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_logistik_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mutasi`
--

CREATE TABLE IF NOT EXISTS `tb_mutasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` datetime DEFAULT NULL,
  `skb` double DEFAULT NULL,
  `SKBTXT` varchar(255) DEFAULT NULL,
  `NO_REF` varchar(150) DEFAULT NULL,
  `nobpb` varchar(255) DEFAULT NULL,
  `mutasi` tinyint(1) DEFAULT NULL,
  `no_mutasi` varchar(128) DEFAULT NULL,
  `kode_devisi_mutasi` varchar(4) DEFAULT NULL,
  `devisi_mutasi` varchar(128) DEFAULT NULL,
  `kode_pt_mutasi` varchar(5) DEFAULT NULL,
  `pt_mutasi` varchar(128) DEFAULT NULL,
  `tglinput` datetime DEFAULT NULL,
  `txttgl` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `periode1` datetime DEFAULT NULL,
  `periode2` datetime DEFAULT NULL,
  `txtperiode1` double DEFAULT NULL,
  `txtperiode2` double DEFAULT NULL,
  `alokasi` varchar(5) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kode` varchar(5) DEFAULT NULL,
  `devisi` varchar(100) NOT NULL,
  `kode_dev` varchar(4) NOT NULL,
  `kpd` varchar(200) DEFAULT NULL,
  `keperluan` varchar(200) DEFAULT NULL,
  `bag` varchar(200) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `id_user` int(11) NOT NULL,
  `USER` varchar(100) DEFAULT NULL,
  `SUB` varchar(255) DEFAULT NULL,
  `USER1` varchar(255) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `bhn_bakar` varchar(100) DEFAULT NULL,
  `jn_alat` varchar(100) DEFAULT NULL,
  `no_kode` varchar(100) DEFAULT NULL,
  `hm_km` varchar(100) DEFAULT NULL,
  `lok_kerja` varchar(100) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `approval` enum('0','1') DEFAULT '0',
  `flag_approval` enum('0','1') DEFAULT '0',
  `approval_kasie` enum('0','1') DEFAULT '0',
  `status_lpb` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mutasi_item`
--

CREATE TABLE IF NOT EXISTS `tb_mutasi_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(100) DEFAULT NULL,
  `alokasi` varchar(5) DEFAULT NULL,
  `kodept` varchar(5) DEFAULT NULL,
  `nobpb` double DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kode_dev` varchar(4) NOT NULL,
  `devisi` varchar(100) NOT NULL,
  `afd` varchar(50) DEFAULT NULL,
  `blok` varchar(10) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `qty2` double DEFAULT NULL,
  `nilai_item` double DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `skb` double DEFAULT NULL,
  `SKBTXT` varchar(255) DEFAULT NULL,
  `NO_REF` varchar(150) DEFAULT NULL,
  `tglinput` datetime DEFAULT NULL,
  `txttgl` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `txtperiode` double DEFAULT NULL,
  `noadjust` double DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `kodebeban` double DEFAULT NULL,
  `kodebebantxt` varchar(50) DEFAULT NULL,
  `ketbeban` varchar(100) DEFAULT NULL,
  `kodesub` double DEFAULT NULL,
  `kodesubtxt` varchar(50) DEFAULT NULL,
  `ketsub` varchar(100) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `USER` varchar(100) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `status_item_lpb` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pt`
--

CREATE TABLE IF NOT EXISTS `tb_pt` (
  `id_pt` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pt` varchar(4) NOT NULL,
  `nama_pt` varchar(50) NOT NULL,
  `singkatan` varchar(20) NOT NULL,
  `alias` varchar(20) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `is_created` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_pt`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tb_pt`
--

INSERT INTO `tb_pt` (`id_pt`, `kode_pt`, `nama_pt`, `singkatan`, `alias`, `logo`, `deskripsi`, `is_created`, `is_active`) VALUES
(1, '01', 'PT MULIA SAWIT AGRO LESTARI', 'PT MSAL', 'MSAL', '', '-', '2021-04-27 00:00:00', 1),
(4, '02', 'PT PERSADA SEJAHTERA AGRO MAKMUR', 'PT PSAM', 'PSAM', '', '', '2021-04-25 11:46:04', 1),
(7, '03', 'PT PERSADA ERA AGRO KENCANA', 'PT PEAK', 'PEAK', '', '', '2021-04-25 11:50:04', 1),
(11, '04', 'PT. MITRA AGRO PERSADA ABADI', 'PT. MAPA', 'MAPA', '', '', '2021-06-23 00:00:00', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
