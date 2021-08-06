-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2021 at 01:11 PM
-- Server version: 5.7.35-0ubuntu0.18.04.1
-- PHP Version: 5.6.40-47+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new_logistikmsal_2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `afd`
--

CREATE TABLE IF NOT EXISTS `afd` (
  `ID` int(11) DEFAULT NULL,
  `PT` varchar(100) DEFAULT NULL,
  `kode` int(11) DEFAULT NULL,
  `kodetxt` varchar(5) DEFAULT NULL,
  `AFD` varchar(100) DEFAULT NULL,
  `tanam` varchar(2) DEFAULT NULL,
  `coa_afd` double DEFAULT NULL,
  `tmtbm` varchar(50) DEFAULT NULL,
  `coa_tmtbm` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `afd`
--

INSERT INTO `afd` (`ID`, `PT`, `kode`, `kodetxt`, `AFD`, `tanam`, `coa_afd`, `tmtbm`, `coa_tmtbm`) VALUES
(411, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '01', NULL, 202401000000000, 'TBM', 202400000000000),
(412, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '02', NULL, 202402000000000, 'TBM', 202400000000000),
(413, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '03', NULL, 202403000000000, 'TBM', 202400000000000),
(414, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '04', NULL, 202404000000000, 'TBM', 202400000000000),
(415, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '05', NULL, 202405000000000, 'TBM', 202400000000000),
(416, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 6, '06', '01', NULL, 700501000000000, 'TM', 700500000000000),
(417, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '02', NULL, 700502000000000, 'TM', 700500000000000),
(418, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '03', NULL, 700503000000000, 'TM', 700500000000000),
(419, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 6, '06', '04', NULL, 700504000000000, 'TM', 700500000000000),
(420, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 6, '06', '05', NULL, 700505000000000, 'TM', 700500000000000),
(421, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '06', NULL, 700506000000000, 'TM', 700500000000000),
(422, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '06', NULL, 202406000000000, 'TBM', 202400000000000),
(433, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '09', NULL, 202409000000000, 'TBM', 202400000000000),
(434, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '14', NULL, 202414000000000, 'TBM', 202400000000000),
(436, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '16', NULL, 202416000000000, 'TBM', 202400000000000),
(437, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '17', NULL, 202417000000000, 'TBM', 202400000000000),
(438, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '99', NULL, 202499000000000, 'TBM', 202400000000000),
(439, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '07', NULL, 700507000000000, 'TM', 700500000000000),
(440, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '08', NULL, 700508000000000, 'TM', 700500000000000),
(441, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '09', NULL, 700509000000000, 'TM', 700500000000000),
(442, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '10', NULL, 700510000000000, 'TM', 700500000000000),
(443, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '11', NULL, 700511000000000, 'TM', 700500000000000),
(444, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '12', NULL, 700512000000000, 'TM', 700500000000000),
(445, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '99', NULL, 700599000000000, 'TM', 700500000000000),
(446, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '11', NULL, 202411000000000, 'TBM', 202400000000000),
(447, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '12', NULL, 202412000000000, 'TBM', 202400000000000),
(448, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '08', NULL, 202408000000000, 'TBM', 202400000000000),
(449, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '15', NULL, 202415000000000, 'TBM', 202400000000000),
(450, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '', NULL, 700515201400000, 'TM', 700515000000000),
(451, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '15', NULL, 700515000000000, 'TM', 700500000000000),
(452, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '14', NULL, 700514000000000, 'TM', 700500000000000),
(454, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '16', NULL, 700516000000000, 'TM', 700500000000000),
(455, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '17', NULL, 700517000000000, 'TM', 700500000000000);

-- --------------------------------------------------------

--
-- Table structure for table `approval_bkb`
--

CREATE TABLE IF NOT EXISTS `approval_bkb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_id_item_bkb` int(11) NOT NULL,
  `no_bkb` varchar(50) DEFAULT NULL,
  `no_ref_bkb` varchar(150) DEFAULT NULL,
  `kodebar` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `qty_diminta` int(11) DEFAULT NULL,
  `status_ktu` enum('0','1','2') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju',
  `tgl_ktu` datetime DEFAULT NULL,
  `ket_ktu` text,
  `status_kasie_gudang` enum('0','1','2') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju',
  `tgl_kasie_gudang` datetime DEFAULT NULL,
  `ket_kasie_gudang` text,
  `status_kasie_pembukuan` enum('0','1','2','3') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju, 3=Mengetahui',
  `tgl_kasie_pembukuan` datetime DEFAULT NULL,
  `ket_kasie_pembukuan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `approval_bpb`
--

CREATE TABLE IF NOT EXISTS `approval_bpb` (
  `id` int(11) NOT NULL,
  `id_bpbitem` int(11) NOT NULL,
  `no_bpb` varchar(50) DEFAULT NULL,
  `norefbpb` varchar(150) DEFAULT NULL,
  `kodebar` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `qty_diminta` double DEFAULT NULL,
  `qty_rev` double DEFAULT NULL,
  `status_asisten_afd` enum('0','1','2') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju',
  `tgl_asisten_afd` datetime DEFAULT NULL,
  `ket_asisten_afd` text,
  `status_kepala_kebun` enum('0','1','2') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju',
  `tgl_kepala_kebun` datetime DEFAULT NULL,
  `ket_kepala_kebun` text,
  `status_kasie_agronomi` enum('0','1','2','3') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju, 3=Mengetahui',
  `tgl_kasie_agronomi` datetime DEFAULT NULL,
  `ket_kasie_agronomi` text,
  `status_ktu` enum('0','1','2') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju',
  `tgl_ktu` datetime DEFAULT NULL,
  `ket_ktu` text,
  `status_gm` enum('0','1','2','3') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju, 3=Mengetahui',
  `tgl_gm` datetime DEFAULT NULL,
  `ket_gm` text,
  `status_kasie_gudang` enum('0','1','2','3') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju, 3=Mengetahui',
  `tgl_kasie_gudang` datetime DEFAULT NULL,
  `ket_kasie_gudang` text,
  `status_kasie_pembukuan` enum('0','1','2','3') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju, 3=Mengetahui',
  `tgl_kasie_pembukuan` datetime DEFAULT NULL,
  `ket_kasie_pembukuan` text,
  `flag_req_rev_qty` enum('0','1','2','3') DEFAULT '0' COMMENT '0=Default, 1=Menunggu Konfirmasi, 2=Setuju, 3=Tidak Setuju',
  `user_req_rev_qty` varchar(150) DEFAULT NULL,
  `tgl_appr_req_ktu` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approval_bpb`
--

INSERT INTO `approval_bpb` (`id`, `id_bpbitem`, `no_bpb`, `norefbpb`, `kodebar`, `nabar`, `qty_diminta`, `qty_rev`, `status_asisten_afd`, `tgl_asisten_afd`, `ket_asisten_afd`, `status_kepala_kebun`, `tgl_kepala_kebun`, `ket_kepala_kebun`, `status_kasie_agronomi`, `tgl_kasie_agronomi`, `ket_kasie_agronomi`, `status_ktu`, `tgl_ktu`, `ket_ktu`, `status_gm`, `tgl_gm`, `ket_gm`, `status_kasie_gudang`, `tgl_kasie_gudang`, `ket_kasie_gudang`, `status_kasie_pembukuan`, `tgl_kasie_pembukuan`, `ket_kasie_pembukuan`, `flag_req_rev_qty`, `user_req_rev_qty`, `tgl_appr_req_ktu`) VALUES
(1, 1, '6600001', 'EST-BPB/SWJ/08/2021/6600001', '102505760000087', 'CANGKUL AYAM STD', 10, NULL, '1', '2021-08-04 15:13:01', NULL, '1', '2021-08-04 15:13:01', NULL, '1', '2021-08-04 15:13:01', NULL, '1', '2021-08-04 15:13:01', NULL, '3', '2021-08-04 15:13:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `approval_lpb`
--

CREATE TABLE IF NOT EXISTS `approval_lpb` (
  `id` int(11) NOT NULL,
  `ttgtxt` varchar(50) DEFAULT NULL,
  `noref` varchar(150) DEFAULT NULL,
  `kodebar` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `qtyditerima` double DEFAULT NULL,
  `status_kasie_gudang` enum('0','1','2') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju',
  `tgl_kasie_gudang` datetime DEFAULT NULL,
  `ket_kasie_gudang` text,
  `status_ktu` enum('0','1','2') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju',
  `tgl_ktu` datetime DEFAULT NULL,
  `ket_ktu` text,
  `status_mandor` enum('0','1','2','3') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju, 3=Mengetahui',
  `tgl_mandor` datetime DEFAULT NULL,
  `ket_mandor` text,
  `status_vendor` enum('0','1','2','3') DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju',
  `tgl_vendor` datetime DEFAULT NULL,
  `ket_vendor` text,
  `user_req_rev_qty` varchar(150) DEFAULT NULL,
  `tgl_appr_req_ktu` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `approval_retur`
--

CREATE TABLE IF NOT EXISTS `approval_retur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ret_skbitem` int(11) NOT NULL,
  `noretur` varchar(50) NOT NULL,
  `norefretur` varchar(128) NOT NULL,
  `kodebar` varchar(128) NOT NULL,
  `nabar` varchar(128) NOT NULL,
  `qty` double NOT NULL,
  `status_kasie_gudang` tinyint(1) NOT NULL,
  `tgl_kasie_gudang` datetime NOT NULL,
  `ket_kasie_gudang` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `approval_spp`
--

CREATE TABLE IF NOT EXISTS `approval_spp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_id_item_ppo` int(11) NOT NULL,
  `noppotxt` varchar(7) NOT NULL,
  `tglppotxt` double NOT NULL,
  `noreftxt` varchar(30) NOT NULL,
  `kodebartxt` varchar(20) NOT NULL,
  `nabar` varchar(255) NOT NULL,
  `sat` varchar(30) NOT NULL,
  `qty` double NOT NULL,
  `stok` double NOT NULL,
  `ket` varchar(50) NOT NULL,
  `status` smallint(6) NOT NULL,
  `po` smallint(6) NOT NULL,
  `kodedept` double NOT NULL,
  `namadept` varchar(30) NOT NULL,
  `asisten_afd` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `tgl_asisten_afd` datetime NOT NULL,
  `kp_kebun` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `tgl_kp_kebun` datetime NOT NULL,
  `kasie_dept1` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `tgl_kasie_dept1` datetime NOT NULL,
  `kasie_dept2` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `tgl_kasie_dept2` datetime NOT NULL,
  `kasie_gudang` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `tgl_kasie_gudang` datetime NOT NULL,
  `mill_mgr` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `tgl_mill_mgr` datetime NOT NULL,
  `ktu` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `tgl_ktu` datetime NOT NULL,
  `gm` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `tgl_gm` datetime NOT NULL,
  `purchasing` enum('0','1','2','3') NOT NULL,
  `tgl_purchasing` datetime NOT NULL,
  `dept_head1` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `tgl_dept_head1` datetime NOT NULL,
  `dept_head2` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `tgl_dept_head2` datetime NOT NULL,
  `dept_head3` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `tgl_dept_head3` datetime NOT NULL,
  `dir_dept1` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `tgl_dir_dept1` datetime NOT NULL,
  `dir_dept2` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `tgl_dir_dept2` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `approval_spp`
--

INSERT INTO `approval_spp` (`id`, `no_id_item_ppo`, `noppotxt`, `tglppotxt`, `noreftxt`, `kodebartxt`, `nabar`, `sat`, `qty`, `stok`, `ket`, `status`, `po`, `kodedept`, `namadept`, `asisten_afd`, `tgl_asisten_afd`, `kp_kebun`, `tgl_kp_kebun`, `kasie_dept1`, `tgl_kasie_dept1`, `kasie_dept2`, `tgl_kasie_dept2`, `kasie_gudang`, `tgl_kasie_gudang`, `mill_mgr`, `tgl_mill_mgr`, `ktu`, `tgl_ktu`, `gm`, `tgl_gm`, `purchasing`, `tgl_purchasing`, `dept_head1`, `tgl_dept_head1`, `dept_head2`, `tgl_dept_head2`, `dept_head3`, `tgl_dept_head3`, `dir_dept1`, `tgl_dir_dept1`, `dir_dept2`, `tgl_dir_dept2`) VALUES
(53, 72, '6200001', 20210727, 'EST-SPPI/SWJ/07/21/6200001', '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 100, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 15:08:13', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(54, 73, '7200001', 20210727, 'EST-SPP/SWJ/07/21/7200001', '102505010100002', 'PUPUK CIRP', 'KG', 5.5, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 15:36:50', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(55, 75, '6200002', 20210727, 'EST-SPPA/SWJ/07/21/6200002', '102505790000151', 'PACKING TBA', 'ROL', 2, 0, '', 0, 0, 3, 'PABRIK', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 15:43:12', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(56, 78, '6200003', 20210727, 'EST-SPPK/SWJ/07/21/6200003', '102505820000036', 'VOLUMETRIC FLASK 1 LTR CLASS A', 'PCS', 5, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 15:59:37', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(57, 77, '6200003', 20210727, 'EST-SPPK/SWJ/07/21/6200003', '102505820000056', 'BEAKER GLASS 500ML', 'PCS', 5, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 15:59:37', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(58, 74, '6200002', 20210727, 'EST-SPPA/SWJ/07/21/6200002', '102505790000134', 'MOTOR SIEMENS 5,5 HP-4KW', 'PCS', 5, 0, '', 0, 0, 3, 'PABRIK', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 17:16:54', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(59, 80, '7200002', 20210727, 'EST-SPPI/SWJ/07/21/7200002', '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 1.8, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 17:20:21', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(60, 81, '6200004', 20210727, 'EST-SPPI/SWJ/07/21/6200004', '102505010100004', 'PUPUK MISTER MX', 'KG', 7.5, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 17:35:16', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(61, 84, '6200005', 20210727, 'EST-SPPI/SWJ/07/21/6200005', '102505010100010', 'PUPUK HI-KAY', 'KG', 7.2, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 18:04:10', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(62, 82, '6200005', 20210727, 'EST-SPPI/SWJ/07/21/6200005', '102505010100009', 'PUPUK DOLOMITE', 'KG', 5, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 18:04:10', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(63, 83, '6200005', 20210727, 'EST-SPPI/SWJ/07/21/6200005', '102505010100008', 'PUPUK CUSO4', 'KG', 5.5, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 18:04:11', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(64, 88, '6200006', 20210727, 'EST-SPPA/SWJ/07/21/6200006', '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 7.5, 0, '', 0, 0, 3, 'PABRIK', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 18:39:25', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(65, 87, '6200006', 20210727, 'EST-SPPA/SWJ/07/21/6200006', '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 5.5, 0, '', 0, 0, 3, 'PABRIK', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 18:39:25', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(66, 86, '6200006', 20210727, 'EST-SPPA/SWJ/07/21/6200006', '102505790000508', 'OBAT SKUR KLEP', 'BTL', 10, 0, '', 0, 0, 3, 'PABRIK', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 18:39:25', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(67, 85, '6200006', 20210727, 'EST-SPPA/SWJ/07/21/6200006', '102505790000151', 'PACKING TBA', 'ROL', 5, 0, '', 0, 0, 3, 'PABRIK', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-27 18:39:25', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(68, 89, '6200007', 20210727, 'EST-SPPA/SWJ/07/21/6200007', '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 10, 0, '', 0, 0, 4, 'FINANCE & ACCOUNTING', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-28 17:43:33', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(69, 76, '6200003', 20210727, 'EST-SPPK/SWJ/07/21/6200003', '102505820000050', 'GLASS ROD', 'PCS', 5, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-28 17:43:41', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(70, 79, '6200003', 20210727, 'EST-SPPK/SWJ/07/21/6200003', '102505360000036', 'GLASS BACK WINDOW UH62-63-930 B (KACA BELAKANG)', 'PCS', 5, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-28 17:43:51', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(71, 91, '7200003', 20210729, 'EST-SPPA/SWJ/07/21/7200003', '102505010100002', 'PUPUK CIRP', 'KG', 50, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-29 11:53:37', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(72, 90, '7200003', 20210729, 'EST-SPPA/SWJ/07/21/7200003', '102505010100010', 'PUPUK HI-KAY', 'KG', 100, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-29 11:53:37', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(73, 94, '6200008', 20210729, 'EST-SPPI/SWJ/07/21/6200008', '102505010100006', 'PUPUK NPK 15.15.6.4', 'KG', 15, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-29 16:13:18', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(74, 93, '6200008', 20210729, 'EST-SPPI/SWJ/07/21/6200008', '102505010100003', 'PUPUK HUMEGA CRUMLE', 'KG', 10, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-29 16:13:18', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(75, 92, '6200008', 20210729, 'EST-SPPI/SWJ/07/21/6200008', '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 1.5, 101.5, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-29 16:13:18', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(76, 95, '6200009', 20210729, 'EST-SPPA/SWJ/07/21/6200009', '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 10, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-29 17:50:20', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(77, 96, '6200010', 20210729, 'EST-SPPA/SWJ/07/21/6200010', '102505490000241', 'BEARING NS 6306', 'PCS', 10, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-29 18:32:29', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(78, 97, '6200011', 20210729, 'EST-SPPI/SWJ/07/21/6200011', '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 10, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-29 19:10:56', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(79, 98, '6200012', 20210729, 'EST-SPPI/SWJ/07/21/6200012', '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 12, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-29 19:54:54', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(80, 103, '6200015', 20210729, 'EST-SPPA/SWJ/07/21/6200015', '102505410000498', 'KABEL A/S TRANSMISI', 'PCS', 5, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-29 20:27:03', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(81, 105, '6200016', 20210729, 'EST-SPPI/SWJ/07/21/6200016', '102505360000035', 'BOX UH48-65-030 (BAK BELAKANG)', 'PCS', 2, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-29 20:29:45', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(82, 109, '7200006', 20210729, 'EST-SPPI/SWJ/07/21/7200006', '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 10, 5, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-29 20:45:13', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(83, 111, '6200018', 20210730, 'EST-SPPA/SWJ/07/21/6200018', '102505490000126', 'PACKING CATER (4D32)', 'PCS', 5, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-30 10:54:49', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(84, 112, '7200008', 20210730, 'EST-SPP/SWJ/07/21/7200008', '102505760000394', 'PAKU 5', 'KG', 10, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-30 11:00:21', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(85, 113, '7200009', 20210730, 'EST-SPPK/SWJ/07/21/7200009', '102505490000121', 'FUEL FILTER (4D32)', 'PCS', 5, 0, '', 0, 0, 7, 'HRD & UMUM', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-30 11:02:03', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(86, 114, '7200010', 20210730, 'EST-SPPI/SWJ/07/21/7200010', '102505760000093', 'BAUT & MUR 19 PANJANG 15 CM', 'PCS', 1300.89, 0, '', 0, 0, 10, 'GIS', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-30 13:26:10', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(87, 110, '7200007', 20210730, 'EST-SPPA/SWJ/07/21/7200007', '102505760000394', 'PAKU 5', 'KG', 5, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-30 13:33:41', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(88, 115, '7200011', 20210730, 'EST-SPPI/SWJ/07/21/7200011', '102505760000061', 'BESI COR 8MM', 'BTG', 10, 0, '', 0, 0, 3, 'PABRIK', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-30 13:41:44', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(89, 116, '6200019', 20210730, 'EST-SPPA/SWJ/07/21/6200019', '102505760000097', 'CAT HITAM SUZUKA', 'KLG', 5, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-07-30 14:09:46', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(90, 127, '6200020', 20210803, 'EST-SPPA/SWJ/08/21/6200020', '102505010100025', 'PUPUK ROCK PHOSPHATE (RP)', 'KG', 8.5, 0, '', 0, 0, 1, 'TANAMAN', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-08-03 15:49:10', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(91, 129, '6200021', 20210804, 'EST-SPPI/SWJ/08/21/6200021', '102505760000087', 'CANGKUL AYAM STD', 'BH', 50, 0, '', 0, 0, 11, 'MIS', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-08-04 15:07:17', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
(92, 128, '6200021', 20210804, 'EST-SPPI/SWJ/08/21/6200021', '102505760000088', 'CANGKUL AYAM ASLI', 'BH', 50, 0, '', 0, 0, 11, 'MIS', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '1', '2021-08-04 15:07:17', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bpb`
--

CREATE TABLE IF NOT EXISTS `bpb` (
  `id` int(11) DEFAULT NULL,
  `nobpb` int(10) DEFAULT NULL,
  `norefbpb` varchar(150) DEFAULT NULL,
  `nobkb_ro` varchar(50) DEFAULT NULL,
  `nopo_ro` varchar(50) DEFAULT NULL,
  `tglbpb` datetime DEFAULT NULL,
  `tglinput` date DEFAULT NULL,
  `jaminput` time DEFAULT NULL,
  `periode` varchar(6) DEFAULT NULL,
  `alokasi` varchar(15) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kode` varchar(5) DEFAULT NULL,
  `devisi` varchar(100) NOT NULL,
  `kode_dev` varchar(4) NOT NULL,
  `keperluan` text,
  `bag` varchar(200) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `user` varchar(100) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `approval` enum('0','1') DEFAULT '0',
  `req_rev_qty` enum('0','1') DEFAULT NULL,
  `flag_approval` enum('0','1') NOT NULL DEFAULT '0',
  `approval_afd` enum('0','1') DEFAULT '0',
  `approval_kpl_kbn` enum('0','1') DEFAULT '0',
  `approval_kasie` enum('0','1') DEFAULT '0',
  `approval_gm` enum('0','1') DEFAULT '0',
  `bhn_bakar` varchar(100) DEFAULT NULL,
  `jn_alat` varchar(100) DEFAULT NULL,
  `no_kode` varchar(100) DEFAULT NULL,
  `hm_km` varchar(100) DEFAULT NULL,
  `lok_kerja` varchar(100) DEFAULT NULL,
  `status_bkb` tinyint(1) NOT NULL,
  `jml_cetak` int(20) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bpb`
--

INSERT INTO `bpb` (`id`, `nobpb`, `norefbpb`, `nobkb_ro`, `nopo_ro`, `tglbpb`, `tglinput`, `jaminput`, `periode`, `alokasi`, `pt`, `kode`, `devisi`, `kode_dev`, `keperluan`, `bag`, `batal`, `alasan_batal`, `user`, `cetak`, `posting`, `approval`, `req_rev_qty`, `flag_approval`, `approval_afd`, `approval_kpl_kbn`, `approval_kasie`, `approval_gm`, `bhn_bakar`, `jn_alat`, `no_kode`, `hm_km`, `lok_kerja`, `status_bkb`, `jml_cetak`) VALUES
(1, 6600001, 'EST-BPB/SWJ/08/2021/6600001', '', '', '2021-08-04 15:12:46', '2021-08-04', '15:12:46', '202108', 'null', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', 'berharap kan baik baik saja', 'PABRIK', 0, NULL, 'User SITE', 0, 0, '1', '0', '0', '0', '0', '0', '0', 'null', '', '', '', '', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bpb dari bkb`
--

CREATE TABLE IF NOT EXISTS `bpb dari bkb` (
  `id` int(11) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `skb` double DEFAULT NULL,
  `SKBTXT` varchar(255) DEFAULT NULL,
  `NO_REF` varchar(150) DEFAULT NULL,
  `nobpb` varchar(255) DEFAULT NULL,
  `mutasi` smallint(6) DEFAULT NULL,
  `no_mutasi` double DEFAULT NULL,
  `tujuan_mutasi` varchar(200) DEFAULT NULL,
  `kode_pt_mutasi` varchar(5) DEFAULT NULL,
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
  `kpd` varchar(200) DEFAULT NULL,
  `keperluan` varchar(200) DEFAULT NULL,
  `bag` varchar(200) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `USER` varchar(100) DEFAULT NULL,
  `SUB` varchar(255) DEFAULT NULL,
  `USER1` varchar(255) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bpbitem`
--

CREATE TABLE IF NOT EXISTS `bpbitem` (
  `id` int(11) DEFAULT NULL,
  `kodebar` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(100) DEFAULT NULL,
  `alokasi` varchar(5) DEFAULT NULL,
  `kodept` varchar(5) DEFAULT NULL,
  `nobpb` double DEFAULT NULL,
  `norefbpb` varchar(150) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kode` varchar(4) NOT NULL,
  `devisi` varchar(128) NOT NULL,
  `kode_dev` varchar(4) NOT NULL,
  `qty` double DEFAULT NULL,
  `qty_disetujui` double DEFAULT NULL,
  `tglbpb` datetime DEFAULT NULL,
  `tglinput` date DEFAULT NULL,
  `jaminput` time DEFAULT NULL,
  `periode` varchar(6) DEFAULT NULL,
  `ket` text,
  `afd` varchar(50) DEFAULT NULL,
  `blok` varchar(10) DEFAULT NULL,
  `noadjust` double DEFAULT NULL,
  `kodebebantxt` varchar(50) DEFAULT NULL,
  `ketbeban` varchar(100) DEFAULT NULL,
  `kodesubtxt` varchar(50) DEFAULT NULL,
  `ketsub` varchar(100) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `user` varchar(100) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `norefbkb` varchar(150) DEFAULT NULL,
  `status_item_bkb` tinyint(1) DEFAULT NULL,
  `req_rev_qty_item` tinyint(1) DEFAULT NULL,
  `approval_item` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bpbitem`
--

INSERT INTO `bpbitem` (`id`, `kodebar`, `nabar`, `satuan`, `grp`, `alokasi`, `kodept`, `nobpb`, `norefbpb`, `pt`, `kode`, `devisi`, `kode_dev`, `qty`, `qty_disetujui`, `tglbpb`, `tglinput`, `jaminput`, `periode`, `ket`, `afd`, `blok`, `noadjust`, `kodebebantxt`, `ketbeban`, `kodesubtxt`, `ketsub`, `batal`, `alasan_batal`, `user`, `cetak`, `posting`, `norefbkb`, `status_item_bkb`, `req_rev_qty_item`, `approval_item`) VALUES
(1, '102505760000087', 'CANGKUL AYAM STD', 'BH', 'CONSTRUCTION MATERIAL', 'null', '06', 6600001, 'EST-BPB/SWJ/08/2021/6600001', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', 10, 0, '2021-08-04 15:12:46', '2021-08-04', '15:12:46', '202108', 'seng pangapuranmu', '-', '-', 0, '-', NULL, '102505100000375', 'GEAR 19 T2 AGC1BA00431 BY-0', 0, NULL, 'User SITE', 0, 0, NULL, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bpbitem dari bkb`
--

CREATE TABLE IF NOT EXISTS `bpbitem dari bkb` (
  `id` int(11) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(100) DEFAULT NULL,
  `alokasi` varchar(5) DEFAULT NULL,
  `kodept` varchar(5) DEFAULT NULL,
  `nobpb` double DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `afd` varchar(50) DEFAULT NULL,
  `blok` varchar(10) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `qty2` double DEFAULT NULL,
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
  `posting` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bpbitem_booking`
--

CREATE TABLE IF NOT EXISTS `bpbitem_booking` (
  `id` int(11) DEFAULT NULL,
  `kodebar` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(100) DEFAULT NULL,
  `alokasi` varchar(5) DEFAULT NULL,
  `kodept` varchar(5) DEFAULT NULL,
  `nobpb` double DEFAULT NULL,
  `norefbpb` varchar(150) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `qty_disetujui` double DEFAULT NULL,
  `tglbpb` datetime DEFAULT NULL,
  `tglinput` date DEFAULT NULL,
  `jaminput` time DEFAULT NULL,
  `periode` varchar(6) DEFAULT NULL,
  `ket` text,
  `afd` varchar(50) DEFAULT NULL,
  `blok` varchar(10) DEFAULT NULL,
  `noadjust` double DEFAULT NULL,
  `kodebebantxt` varchar(50) DEFAULT NULL,
  `ketbeban` varchar(100) DEFAULT NULL,
  `kodesubtxt` varchar(50) DEFAULT NULL,
  `ketsub` varchar(100) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `user` varchar(100) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `norefbkb` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bpbitem_copy1`
--

CREATE TABLE IF NOT EXISTS `bpbitem_copy1` (
  `id` int(11) DEFAULT NULL,
  `kodebar` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(100) DEFAULT NULL,
  `alokasi` varchar(5) DEFAULT NULL,
  `kodept` varchar(5) DEFAULT NULL,
  `nobpb` double DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `tglbpb` datetime DEFAULT NULL,
  `tglinput` date DEFAULT NULL,
  `jaminput` time DEFAULT NULL,
  `periode` int(6) DEFAULT NULL,
  `ket` text,
  `batal` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `user` varchar(100) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bpb_booking`
--

CREATE TABLE IF NOT EXISTS `bpb_booking` (
  `id` int(11) DEFAULT NULL,
  `nobpb` int(10) DEFAULT NULL,
  `norefbpb` varchar(150) DEFAULT NULL,
  `nobkb_ro` varchar(50) DEFAULT NULL,
  `nopo_ro` varchar(50) DEFAULT NULL,
  `tglbpb` datetime DEFAULT NULL,
  `tglinput` date DEFAULT NULL,
  `jaminput` time DEFAULT NULL,
  `periode` varchar(6) DEFAULT NULL,
  `alokasi` varchar(15) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kode` varchar(5) DEFAULT NULL,
  `keperluan` text,
  `bag` varchar(200) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `user` varchar(100) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `approval` enum('0','1') DEFAULT NULL,
  `flag_bkb` enum('0','1') DEFAULT NULL,
  `bhn_bakar` varchar(100) DEFAULT NULL,
  `jn_alat` varchar(100) DEFAULT NULL,
  `no_kode` varchar(100) DEFAULT NULL,
  `hm_km` varchar(100) DEFAULT NULL,
  `lok_kerja` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bpb_copy1`
--

CREATE TABLE IF NOT EXISTS `bpb_copy1` (
  `id` int(11) DEFAULT NULL,
  `nobpb` int(10) DEFAULT NULL,
  `nobkb_ro` varchar(50) DEFAULT NULL,
  `nopo_ro` varchar(50) DEFAULT NULL,
  `tglbpb` datetime(6) DEFAULT NULL,
  `tglinput` date DEFAULT NULL,
  `jaminput` time DEFAULT NULL,
  `periode` int(6) DEFAULT NULL,
  `alokasi` varchar(15) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kode` varchar(5) DEFAULT NULL,
  `keperluan` text,
  `batal` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `user` varchar(100) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `id` int(11) DEFAULT NULL,
  `kode` double DEFAULT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `singkat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `kode`, `nama`, `singkat`) VALUES
(12, 1, 'TANAMAN', 'TNM'),
(13, 3, 'PABRIK', 'PKS'),
(14, 4, 'FINANCE & ACCOUNTING', 'FAC'),
(15, 5, 'LEGAL DAN HUMAS', 'LHM'),
(16, 6, 'PURCHASING', 'PRC'),
(17, 7, 'HRD & UMUM', 'HRD'),
(18, 8, 'TEKNIK', 'TNK'),
(20, 10, 'GIS', 'GIS'),
(21, 11, 'MIS', 'MIS'),
(22, 12, 'HSE', 'HSE'),
(23, 13, 'BQC', 'BQC'),
(24, 2, 'TANAMAN UMUM', 'TNM'),
(25, 15, 'AUDIT', 'AUD');

-- --------------------------------------------------------

--
-- Table structure for table `item_po`
--

CREATE TABLE IF NOT EXISTS `item_po` (
  `id` int(11) NOT NULL,
  `nopo` double DEFAULT NULL,
  `nopotxt` varchar(15) DEFAULT NULL,
  `noppo` double DEFAULT NULL,
  `noppotxt` varchar(15) DEFAULT NULL,
  `refppo` varchar(255) DEFAULT NULL,
  `tglppo` datetime DEFAULT NULL,
  `tglppotxt` double DEFAULT NULL,
  `tglpo` datetime DEFAULT NULL,
  `tglpotxt` double DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(20) DEFAULT NULL,
  `nabar` varchar(255) DEFAULT NULL,
  `sat` varchar(30) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `jumharga` double DEFAULT NULL,
  `kodept` varchar(4) DEFAULT NULL COMMENT 'Untuk kode departemen di app logistik web',
  `namapt` varchar(100) DEFAULT NULL COMMENT 'Untuk nama departemen di app logistik web',
  `periode` datetime DEFAULT NULL,
  `periodetxt` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `merek` varchar(200) DEFAULT NULL,
  `tglisi` datetime DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `ket` text,
  `noref` varchar(255) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `hargasblm` double DEFAULT NULL,
  `disc` double DEFAULT NULL,
  `kurs` varchar(5) DEFAULT NULL,
  `kode_budget` double DEFAULT NULL,
  `grup` varchar(255) DEFAULT NULL,
  `main_acct` double DEFAULT NULL,
  `nama_main` varchar(255) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `cek_pp` smallint(6) DEFAULT NULL,
  `KODE_BPO` double DEFAULT NULL,
  `JUMLAHBPO` double DEFAULT NULL,
  `kode_bebanbpo` double DEFAULT NULL,
  `nama_bebanbpo` varchar(255) DEFAULT NULL,
  `konversi` double DEFAULT NULL,
  `status_item_lpb` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_po`
--

INSERT INTO `item_po` (`id`, `nopo`, `nopotxt`, `noppo`, `noppotxt`, `refppo`, `tglppo`, `tglppotxt`, `tglpo`, `tglpotxt`, `kodebar`, `kodebartxt`, `nabar`, `sat`, `qty`, `harga`, `jumharga`, `kodept`, `namapt`, `periode`, `periodetxt`, `thn`, `merek`, `tglisi`, `user`, `ket`, `noref`, `lokasi`, `hargasblm`, `disc`, `kurs`, `kode_budget`, `grup`, `main_acct`, `nama_main`, `batal`, `cek_pp`, `KODE_BPO`, `JUMLAHBPO`, `kode_bebanbpo`, `nama_bebanbpo`, `konversi`, `status_item_lpb`) VALUES
(2, 6200001, '6200001', 6200002, '6200002', 'EST-SPPA/SWJ/07/21/6200002', '2021-07-27 00:00:00', 20210727, '2021-07-27 00:00:00', 20210727, 102505790000151, '102505790000151', 'PACKING TBA', 'ROL', 2, 500000, 940000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 17:01:02', 202107, 2021, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup s', '2021-07-27 17:01:02', 'Gani SITE', 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200001', 'SITE', 500000, 7, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 10000, NULL, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', 0, 0),
(3, 6200002, '6200002', 7200002, '7200002', 'EST-SPPI/SWJ/07/21/7200002', '2021-07-27 00:00:00', 20210727, '2021-07-27 00:00:00', 20210727, 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 1.8, 10000, 18000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 17:23:52', 202107, 2021, 'test', '2021-07-27 17:23:52', 'Gani SITE', 'test qty', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200002', 'SITE', 10000, 0, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 0),
(4, 6200003, '6200003', 6200004, '6200004', 'EST-SPPI/SWJ/07/21/6200004', '2021-07-27 00:00:00', 20210727, '2021-07-27 00:00:00', 20210727, 102505010100004, '102505010100004', 'PUPUK MISTER MX', 'KG', 7.5, 1650, 12375, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 17:36:30', 202107, 2021, 'test kode', '2021-07-27 17:36:30', 'Gani SITE', 'test kode', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200003', 'SITE', 1650, 0, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 0),
(5, 6200004, '6200004', 6200005, '6200005', 'EST-SPPI/SWJ/07/21/6200005', '2021-07-27 00:00:00', 20210727, '2021-07-27 00:00:00', 20210727, 102505010100009, '102505010100009', 'PUPUK DOLOMITE', 'KG', 5, 1650, 8085, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 18:17:39', 202107, 2021, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup s', '2021-07-27 18:17:39', 'Gani SITE', 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200004', 'SITE', 1650, 2, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 0),
(6, 6200004, '6200004', 6200005, '6200005', 'EST-SPPI/SWJ/07/21/6200005', '2021-07-27 00:00:00', 20210727, '2021-07-27 00:00:00', 20210727, 102505010100008, '102505010100008', 'PUPUK CUSO4', 'KG', 5.5, 7543, 40241.905, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 18:17:41', 202107, 2021, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup s', '2021-07-27 18:17:41', 'Gani SITE', 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200004', 'SITE', 7543, 3, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 0),
(7, 6200004, '6200004', 6200005, '6200005', 'EST-SPPI/SWJ/07/21/6200005', '2021-07-27 00:00:00', 20210727, '2021-07-27 00:00:00', 20210727, 102505010100010, '102505010100010', 'PUPUK HI-KAY', 'KG', 7.2, 5329, 36834.048, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 18:17:42', 202107, 2021, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup s', '2021-07-27 18:17:42', 'Gani SITE', 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200004', 'SITE', 5329, 4, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 0),
(8, 6200005, '6200005', 6200006, '6200006', 'EST-SPPA/SWJ/07/21/6200006', '2021-07-27 00:00:00', 20210727, '2021-07-27 00:00:00', 20210727, 102505790000151, '102505790000151', 'PACKING TBA', 'ROL', 5, 20000, 92000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 19:09:13', 202107, 2021, 'test1', '2021-07-27 19:09:13', 'Gani SITE', 'test1', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 'SITE', 20000, 10, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 2000, NULL, 'test1', 0, 1),
(9, 6200005, '6200005', 6200006, '6200006', 'EST-SPPA/SWJ/07/21/6200006', '2021-07-27 00:00:00', 20210727, '2021-07-27 00:00:00', 20210727, 102505790000508, '102505790000508', 'OBAT SKUR KLEP', 'BTL', 10, 40000, 370000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 19:09:15', 202107, 2021, 'test2', '2021-07-27 19:09:15', 'Gani SITE', 'test2', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 'SITE', 40000, 10, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 10000, NULL, 'test2', 0, 0),
(10, 6200005, '6200005', 6200006, '6200006', 'EST-SPPA/SWJ/07/21/6200006', '2021-07-27 00:00:00', 20210727, '2021-07-27 00:00:00', 20210727, 102505760000067, '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 5.5, 5000, 25000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 19:09:16', 202107, 2021, 'test3', '2021-07-27 19:09:16', 'Gani SITE', 'test3', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 'SITE', 5000, 10, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 250, NULL, 'test3', 0, 1),
(11, 6200005, '6200005', 6200006, '6200006', 'EST-SPPA/SWJ/07/21/6200006', '2021-07-27 00:00:00', 20210727, '2021-07-27 00:00:00', 20210727, 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 7.5, 5000, 34000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 19:09:18', 202107, 2021, 'test4', '2021-07-27 19:09:18', 'Gani SITE', 'test4', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 'SITE', 5000, 10, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 250, NULL, 'test4', 0, 1),
(12, 6200006, '6200006', 6200002, '6200002', 'EST-SPPA/SWJ/07/21/6200002', '2021-07-27 00:00:00', 20210727, '2021-07-28 00:00:00', 20210728, 102505790000134, '102505790000134', 'MOTOR SIEMENS 5,5 HP-4KW', 'PCS', 5, 200000, 955000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-28 14:29:58', 202107, 2021, 'test', '2021-07-28 14:29:58', 'Gani SITE', 'test', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200006', 'SITE', 200000, 5, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 5000, NULL, 'test', 0, 0),
(13, 6200007, '6200007', 6200001, '6200001', 'EST-SPPI/SWJ/07/21/6200001', '2021-07-27 00:00:00', 20210727, '2021-07-29 00:00:00', 20210729, 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 100, 10000, 902000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 09:00:02', 202107, 2021, 'test', '2021-07-29 09:00:02', 'Gani SITE', 'test', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200007', 'SITE', 10000, 10, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 2000, NULL, 'test', 0, 0),
(14, 6200008, '6200008', 6200007, '6200007', 'EST-SPPA/SWJ/07/21/6200007', '2021-07-27 00:00:00', 20210727, '2021-07-29 00:00:00', 20210729, 102505410000476, '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 10, 10000, 100000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 10:27:14', 202107, 2021, 'test', '2021-07-29 10:27:14', 'Gani SITE', 'test', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200008', 'SITE', 10000, 0, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 0),
(15, 6200009, '6200009', 7200003, '7200003', 'EST-SPPA/SWJ/07/21/7200003', '2021-07-29 00:00:00', 20210729, '2021-07-29 00:00:00', 20210729, 102505010100010, '102505010100010', 'PUPUK HI-KAY', 'KG', 100, 10000, 902000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 13:37:41', 202107, 2021, 'test ', '2021-07-29 13:37:41', 'Gani SITE', 'test', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200009', 'SITE', 10000, 10, 'USD', 0, NULL, 0, NULL, 0, 0, 0, 2000, NULL, 'test', 0, 0),
(16, 6200009, '6200009', 7200003, '7200003', 'EST-SPPA/SWJ/07/21/7200003', '2021-07-29 00:00:00', 20210729, '2021-07-29 00:00:00', 20210729, 102505010100002, '102505010100002', 'PUPUK CIRP', 'KG', 50, 5000, 234999, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 13:37:44', 202107, 2021, 'test', '2021-07-29 13:37:44', 'Gani SITE', 'test', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200009', 'SITE', 5000, 10, 'USD', 0, NULL, 0, NULL, 0, 0, 0, 9999, NULL, 'test', 0, 0),
(17, 6200010, '6200010', 6200008, '6200008', 'EST-SPPI/SWJ/07/21/6200008', '2021-07-29 00:00:00', 20210729, '2021-07-29 00:00:00', 20210729, 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 1.5, 10000, 15000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 16:15:00', 202107, 2021, 'test', '2021-07-29 16:15:00', 'Gani SITE', 'test', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200010', 'SITE', 10000, 0, 'SGD', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 0),
(18, 6200010, '6200010', 6200008, '6200008', 'EST-SPPI/SWJ/07/21/6200008', '2021-07-29 00:00:00', 20210729, '2021-07-29 00:00:00', 20210729, 102505010100003, '102505010100003', 'PUPUK HUMEGA CRUMLE', 'KG', 10, 4000, 40000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 16:15:04', 202107, 2021, 'test', '2021-07-29 16:15:04', 'Gani SITE', 'test', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200010', 'SITE', 4000, 0, 'SGD', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 0),
(19, 6200010, '6200010', 6200008, '6200008', 'EST-SPPI/SWJ/07/21/6200008', '2021-07-29 00:00:00', 20210729, '2021-07-29 00:00:00', 20210729, 102505010100006, '102505010100006', 'PUPUK NPK 15.15.6.4', 'KG', 15, 7900, 118500, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 16:15:05', 202107, 2021, 'test', '2021-07-29 16:15:05', 'Gani SITE', 'test', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200010', 'SITE', 7900, 0, 'SGD', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 0),
(20, 6200011, '6200011', 6200009, '6200009', 'EST-SPPA/SWJ/07/21/6200009', '2021-07-29 00:00:00', 20210729, '2021-07-29 00:00:00', 20210729, 102505410000476, '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 10, 10000, 97000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 17:53:00', 202107, 2021, 'test_gani', '2021-07-29 17:53:00', 'Gani SITE', 'test_gani', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200011', 'SITE', 10000, 5, 'MYR', 0, NULL, 0, NULL, 0, 0, 0, 2000, NULL, 'test_gani', 0, 0),
(21, 6200012, '6200012', 6200010, '6200010', 'EST-SPPA/SWJ/07/21/6200010', '2021-07-29 00:00:00', 20210729, '2021-07-29 00:00:00', 20210729, 102505490000241, '102505490000241', 'BEARING NS 6306', 'PCS', 10, 10000, 95000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 18:49:30', 202107, 2021, 'test_1', '2021-07-29 18:49:30', 'Gani SITE', 'test_3', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200012', 'SITE', 10000, 10, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 5000, NULL, 'test_2', 0, 0),
(22, 6200013, '6200013', 6200018, '6200018', 'EST-SPPA/SWJ/07/21/6200018', '2021-07-30 00:00:00', 20210730, '2021-07-30 00:00:00', 20210730, 102505490000126, '102505490000126', 'PACKING CATER (4D32)', 'PCS', 5, 10000, 50000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-30 10:56:01', 202107, 2021, 'test', '2021-07-30 10:56:01', 'Gani SITE', 'test', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200013', 'SITE', 10000, 0, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 0),
(23, 6200014, '6200014', 7200010, '7200010', 'EST-SPPI/SWJ/07/21/7200010', '2021-07-30 00:00:00', 20210730, '2021-07-30 00:00:00', 20210730, 102505760000093, '102505760000093', 'BAUT & MUR 19 PANJANG 15 CM', 'PCS', 1300.89, 1000, 1300890, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-30 13:27:30', 202107, 2021, 'test', '2021-07-30 13:27:30', 'Gani SITE', '''QTY SPP harus sesuai apa adanya di PO..ini kondisinya di PO dibulatkan " di SPP qty 1300.89, input PO qty 1,301 "', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200014', 'SITE', 1000, 0, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 0),
(24, 6200015, '6200015', 7200006, '7200006', 'EST-SPPI/SWJ/07/21/7200006', '2021-07-29 00:00:00', 20210729, '2021-07-30 00:00:00', 20210730, 102505760000067, '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 10, 50000, 500000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-30 13:29:50', 202107, 2021, 'test', '2021-07-30 13:29:50', 'Gani SITE', 'ini spp ada 2 barang..tapi sewaktu input PO hanya 1 saja\n', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200015', 'SITE', 50000, 0, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 0),
(25, 6200016, '6200016', 7200007, '7200007', 'EST-SPPA/SWJ/07/21/7200007', '2021-07-30 00:00:00', 20210730, '2021-07-30 00:00:00', 20210730, 102505760000394, '102505760000394', 'PAKU 5', 'KG', 5, 100000, 500000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-30 13:35:14', 202107, 2021, 'test', '2021-07-30 13:35:14', 'Gani SITE', '<?php\n// memanggil library FPDF\nrequire(''fpdf.php'');\n// intance object dan memberikan pengaturan halaman PDF\n$pdf = new FPDF(''P'',''mm'',''A4'');\n// membuat halaman baru\n$pdf->AddPage();\n// setting jenis font yang akan digunakan\n$pdf->SetFont(''Arial'',''B'',', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200016', 'SITE', 100000, 0, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 0),
(26, 6200017, '6200017', 7200011, '7200011', 'EST-SPPI/SWJ/07/21/7200011', '2021-07-30 00:00:00', 20210730, '2021-07-30 00:00:00', 20210730, 102505760000061, '102505760000061', 'BESI COR 8MM', 'BTG', 10, 100000, 910000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-30 13:45:08', 202107, 2021, 'test', '2021-07-30 13:45:08', 'Gani SITE', '-Penomoran Devisi PO dengan SPP Devisi 07', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200017', 'SITE', 100000, 10, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 10000, NULL, 'test', 0, 1),
(27, 6200018, '6200018', 6200019, '6200019', 'EST-SPPA/SWJ/07/21/6200019', '2021-07-30 00:00:00', 20210730, '2021-07-30 00:00:00', 20210730, 102505760000097, '102505760000097', 'CAT HITAM SUZUKA', 'KLG', 5, 200000, 992000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-30 14:11:08', 202107, 2021, 'test', '2021-07-30 14:11:08', 'Gani SITE', 'Perhitungan PO', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200018', 'SITE', 200000, 1, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 2000, NULL, 'OJek', 0, 0),
(28, 6200019, '6200019', 6200011, '6200011', 'EST-SPPI/SWJ/07/21/6200011', '2021-07-29 00:00:00', 20210729, '2021-08-01 00:00:00', 20210801, 102505410000476, '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 10, 100000, 1000000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-08-01 22:49:30', 202108, 2021, 'test', '2021-08-01 22:49:30', 'Gani SITE', 'test', 'EST/SWJ/PO-LOKAL/JKT/08/21/6200019', 'SITE', 100000, 0, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, 'test', 0, 0),
(29, 6200020, '6200020', 6200015, '6200015', 'EST-SPPA/SWJ/07/21/6200015', '2021-07-29 00:00:00', 20210729, '2021-08-02 00:00:00', 20210802, 102505410000498, '102505410000498', 'KABEL A/S TRANSMISI', 'PCS', 5, 200000, 910000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-08-02 22:30:08', 202108, 2021, 'test', '2021-08-02 22:30:08', 'Gani SITE', 'test', 'EST/SWJ/PO-LOKAL/JKT/08/21/6200020', 'SITE', 200000, 10, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 10000, NULL, 'test', 0, 0),
(30, 6200021, '6200021', 6200021, '6200021', 'EST-SPPI/SWJ/08/21/6200021', '2021-08-04 00:00:00', 20210804, '2021-08-04 00:00:00', 20210804, 102505760000088, '102505760000088', 'CANGKUL AYAM ASLI', 'BH', 50, 1000, 50000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-08-04 15:09:08', 202108, 2021, 'welas', '2021-08-04 15:09:08', 'User SITE', 'godong', 'EST/SWJ/PO-LOKAL/JKT/08/21/6200021', 'SITE', 1000, 0, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 1),
(31, 6200021, '6200021', 6200021, '6200021', 'EST-SPPI/SWJ/08/21/6200021', '2021-08-04 00:00:00', 20210804, '2021-08-04 00:00:00', 20210804, 102505760000087, '102505760000087', 'CANGKUL AYAM STD', 'BH', 50, 1000, 50000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-08-04 15:09:09', 202108, 2021, 'teri', '2021-08-04 15:09:09', 'User SITE', 'telo', 'EST/SWJ/PO-LOKAL/JKT/08/21/6200021', 'SITE', 1000, 0, 'Rp', 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_po_history`
--

CREATE TABLE IF NOT EXISTS `item_po_history` (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `nopo` double DEFAULT NULL,
  `nopotxt` varchar(15) DEFAULT NULL,
  `noppo` double DEFAULT NULL,
  `noppotxt` varchar(15) DEFAULT NULL,
  `refppo` varchar(255) DEFAULT NULL,
  `tglppo` datetime DEFAULT NULL,
  `tglppotxt` double DEFAULT NULL,
  `tglpo` datetime DEFAULT NULL,
  `tglpotxt` double DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(20) DEFAULT NULL,
  `nabar` varchar(255) DEFAULT NULL,
  `sat` varchar(30) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `jumharga` double DEFAULT NULL,
  `kodept` varchar(4) DEFAULT NULL,
  `namapt` varchar(100) DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `periodetxt` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `merek` varchar(200) DEFAULT NULL,
  `tglisi` datetime DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `ket` mediumtext,
  `noref` varchar(255) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `hargasblm` double DEFAULT NULL,
  `disc` double DEFAULT NULL,
  `kurs` varchar(5) DEFAULT NULL,
  `kode_budget` double DEFAULT NULL,
  `grup` varchar(255) DEFAULT NULL,
  `main_acct` double DEFAULT NULL,
  `nama_main` varchar(255) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `cek_pp` smallint(6) DEFAULT NULL,
  `KODE_BPO` double DEFAULT NULL,
  `JUMLAHBPO` double DEFAULT NULL,
  `kode_bebanbpo` double DEFAULT NULL,
  `nama_bebanbpo` varchar(255) DEFAULT NULL,
  `konversi` double DEFAULT NULL,
  `keterangan_transaksi` text,
  `log` text,
  `tgl_transaksi` datetime DEFAULT NULL,
  `user_transaksi` varchar(50) DEFAULT NULL,
  `client_ip` varchar(50) DEFAULT NULL,
  `client_platform` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`no_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `item_ppo`
--

CREATE TABLE IF NOT EXISTS `item_ppo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noppo` double DEFAULT NULL,
  `noppotxt` varchar(7) DEFAULT NULL,
  `tglppo` datetime DEFAULT NULL,
  `tglppotxt` double DEFAULT NULL,
  `kodedept` double DEFAULT NULL,
  `namadept` varchar(30) DEFAULT NULL,
  `noref` double DEFAULT NULL,
  `noreftxt` varchar(30) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(20) DEFAULT NULL,
  `nabar` varchar(255) DEFAULT NULL,
  `sat` varchar(30) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `qty2` double DEFAULT NULL,
  `STOK` double DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `jumharga` double DEFAULT NULL,
  `kodept` varchar(4) DEFAULT NULL,
  `namapt` varchar(100) DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `periodetxt` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `ket` text,
  `tglisi` datetime DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `user` varchar(30) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `status2` smallint(6) DEFAULT NULL,
  `TGL_APPROVE` datetime DEFAULT NULL,
  `ada_penawar` bit(1) DEFAULT NULL,
  `LOKASI` varchar(100) DEFAULT NULL,
  `po` int(11) DEFAULT NULL,
  `saldo_po` double DEFAULT NULL,
  `kode_budget` double DEFAULT NULL,
  `grup` varchar(255) DEFAULT NULL,
  `main_acct` double DEFAULT NULL,
  `nama_main` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `item_ppo`
--

INSERT INTO `item_ppo` (`id`, `noppo`, `noppotxt`, `tglppo`, `tglppotxt`, `kodedept`, `namadept`, `noref`, `noreftxt`, `kodebar`, `kodebartxt`, `nabar`, `sat`, `qty`, `qty2`, `STOK`, `harga`, `jumharga`, `kodept`, `namapt`, `periode`, `periodetxt`, `thn`, `ket`, `tglisi`, `id_user`, `user`, `status`, `status2`, `TGL_APPROVE`, `ada_penawar`, `LOKASI`, `po`, `saldo_po`, `kode_budget`, `grup`, `main_acct`, `nama_main`) VALUES
(72, 6200001, '6200001', '2021-07-27 00:00:00', 20210727, 1, 'TANAMAN', 6200001, 'EST-SPPI/SWJ/07/21/6200001', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 100, 100, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'test gani', '2021-07-27 15:08:01', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 15:08:13', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(73, 7200001, '7200001', '2021-07-27 00:00:00', 20210727, 1, 'TANAMAN', 7200001, 'EST-SPP/SWJ/07/21/7200001', 102505010100002, '102505010100002', 'PUPUK CIRP', 'KG', 5.5, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'Test Pupuk 1', '2021-07-27 15:35:23', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 15:36:50', b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(74, 6200002, '6200002', '2021-07-27 00:00:00', 20210727, 3, 'PABRIK', 6200002, 'EST-SPPA/SWJ/07/21/6200002', 102505790000134, '102505790000134', 'MOTOR SIEMENS 5,5 HP-4KW', 'PCS', 5, 5, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'Test_gani_1', '2021-07-27 15:41:05', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 17:16:54', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(75, 6200002, '6200002', '2021-07-27 00:00:00', 20210727, 3, 'PABRIK', 6200002, 'EST-SPPA/SWJ/07/21/6200002', 102505790000151, '102505790000151', 'PACKING TBA', 'ROL', 2, 2, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'Test_gani_2', '2021-07-27 15:42:12', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 15:43:12', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(76, 6200003, '6200003', '2021-07-27 00:00:00', 20210727, 1, 'TANAMAN', 6200003, 'EST-SPPK/SWJ/07/21/6200003', 102505820000050, '102505820000050', 'GLASS ROD', 'PCS', 5, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'test Gani 1', '2021-07-27 15:58:04', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-28 17:43:41', b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(77, 6200003, '6200003', '2021-07-27 00:00:00', 20210727, 1, 'TANAMAN', 6200003, 'EST-SPPK/SWJ/07/21/6200003', 102505820000056, '102505820000056', 'BEAKER GLASS 500ML', 'PCS', 5, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'test Gani 2', '2021-07-27 15:58:41', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 15:59:37', b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(78, 6200003, '6200003', '2021-07-27 00:00:00', 20210727, 1, 'TANAMAN', 6200003, 'EST-SPPK/SWJ/07/21/6200003', 102505820000036, '102505820000036', 'VOLUMETRIC FLASK 1 LTR CLASS A', 'PCS', 5, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'test Gani 3', '2021-07-27 15:59:00', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 15:59:37', b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(79, 6200003, '6200003', '2021-07-27 00:00:00', 20210727, 1, 'TANAMAN', 6200003, 'EST-SPPK/SWJ/07/21/6200003', 102505360000036, '102505360000036', 'GLASS BACK WINDOW UH62-63-930 B (KACA BELAKANG)', 'PCS', 5, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'test Gani4', '2021-07-27 15:59:16', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-28 17:43:51', b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(80, 7200002, '7200002', '2021-07-27 00:00:00', 20210727, 1, 'TANAMAN', 7200002, 'EST-SPPI/SWJ/07/21/7200002', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 1.8, 1.8, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'test Qty', '2021-07-27 17:20:07', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 17:20:21', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(81, 6200004, '6200004', '2021-07-27 00:00:00', 20210727, 1, 'TANAMAN', 6200004, 'EST-SPPI/SWJ/07/21/6200004', 102505010100004, '102505010100004', 'PUPUK MISTER MX', 'KG', 7.5, 7.5, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'test kode', '2021-07-27 17:34:49', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 17:35:16', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(82, 6200005, '6200005', '2021-07-27 00:00:00', 20210727, 1, 'TANAMAN', 6200005, 'EST-SPPI/SWJ/07/21/6200005', 102505010100009, '102505010100009', 'PUPUK DOLOMITE', 'KG', 5, 5, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme atau organ hewan dan tumbuhan, sedangkan pupuk kimia dibuat melalui proses pengolahan oleh manusia dari bahan-bahan mineral. Pupuk kimia biasanya lebih "murni" daripada pupuk organik, dengan kandungan bahan yang dapat dikalkulasi. Pupuk organik sukar ditentukan isinya, tergantung dari sumbernya; keunggulannya adalah ia dapat memperbaiki kondisi fisik tanah karena membantu pengikatan air secara efektif.', '2021-07-27 18:03:13', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 18:04:10', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(83, 6200005, '6200005', '2021-07-27 00:00:00', 20210727, 1, 'TANAMAN', 6200005, 'EST-SPPI/SWJ/07/21/6200005', 102505010100008, '102505010100008', 'PUPUK CUSO4', 'KG', 5.5, 5.5, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme atau organ hewan dan tumbuhan, sedangkan pupuk kimia dibuat melalui proses pengolahan oleh manusia dari bahan-bahan mineral. Pupuk kimia biasanya lebih "murni" daripada pupuk organik, dengan kandungan bahan yang dapat dikalkulasi. Pupuk organik sukar ditentukan isinya, tergantung dari sumbernya; keunggulannya adalah ia dapat memperbaiki kondisi fisik tanah karena membantu pengikatan air secara efektif.', '2021-07-27 18:03:31', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 18:04:11', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(84, 6200005, '6200005', '2021-07-27 00:00:00', 20210727, 1, 'TANAMAN', 6200005, 'EST-SPPI/SWJ/07/21/6200005', 102505010100010, '102505010100010', 'PUPUK HI-KAY', 'KG', 7.2, 7.2, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme atau organ hewan dan tumbuhan, sedangkan pupuk kimia dibuat melalui proses pengolahan oleh manusia dari bahan-bahan mineral. Pupuk kimia biasanya lebih "murni" daripada pupuk organik, dengan kandungan bahan yang dapat dikalkulasi. Pupuk organik sukar ditentukan isinya, tergantung dari sumbernya; keunggulannya adalah ia dapat memperbaiki kondisi fisik tanah karena membantu pengikatan air secara efektif.', '2021-07-27 18:03:48', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 18:04:10', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(85, 6200006, '6200006', '2021-07-27 00:00:00', 20210727, 3, 'PABRIK', 6200006, 'EST-SPPA/SWJ/07/21/6200006', 102505790000151, '102505790000151', 'PACKING TBA', 'ROL', 5, 5, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'test 1', '2021-07-27 18:39:07', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 18:39:25', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(86, 6200006, '6200006', '2021-07-27 00:00:00', 20210727, 3, 'PABRIK', 6200006, 'EST-SPPA/SWJ/07/21/6200006', 102505790000508, '102505790000508', 'OBAT SKUR KLEP', 'BTL', 10, 10, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'test 2', '2021-07-27 18:39:08', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 18:39:25', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(87, 6200006, '6200006', '2021-07-27 00:00:00', 20210727, 3, 'PABRIK', 6200006, 'EST-SPPA/SWJ/07/21/6200006', 102505760000067, '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 5.5, 5.5, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'test 3', '2021-07-27 18:39:08', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 18:39:25', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(88, 6200006, '6200006', '2021-07-27 00:00:00', 20210727, 3, 'PABRIK', 6200006, 'EST-SPPA/SWJ/07/21/6200006', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 7.5, 7.5, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'test 4', '2021-07-27 18:39:09', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 18:39:25', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(89, 6200007, '6200007', '2021-07-27 00:00:00', 20210727, 4, 'FINANCE & ACCOUNTING', 6200007, 'EST-SPPA/SWJ/07/21/6200007', 102505410000476, '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 10, 10, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-27 00:00:00', 202108, 2021, 'test', '2021-07-27 19:19:31', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-28 17:43:33', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(90, 7200003, '7200003', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 7200003, 'EST-SPPA/SWJ/07/21/7200003', 102505010100010, '102505010100010', 'PUPUK HI-KAY', 'KG', 100, 100, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'test gani', '2021-07-29 11:53:04', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 11:53:37', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(91, 7200003, '7200003', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 7200003, 'EST-SPPA/SWJ/07/21/7200003', 102505010100002, '102505010100002', 'PUPUK CIRP', 'KG', 50, 50, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'test gani 2', '2021-07-29 11:53:21', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 11:53:37', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(92, 6200008, '6200008', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 6200008, 'EST-SPPI/SWJ/07/21/6200008', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 1.5, 1.5, 101.5, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'test', '2021-07-29 16:12:57', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 16:13:18', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(93, 6200008, '6200008', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 6200008, 'EST-SPPI/SWJ/07/21/6200008', 102505010100003, '102505010100003', 'PUPUK HUMEGA CRUMLE', 'KG', 10, 10, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'test', '2021-07-29 16:12:58', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 16:13:18', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(94, 6200008, '6200008', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 6200008, 'EST-SPPI/SWJ/07/21/6200008', 102505010100006, '102505010100006', 'PUPUK NPK 15.15.6.4', 'KG', 15, 15, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'test', '2021-07-29 16:12:59', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 16:13:18', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(95, 6200009, '6200009', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 6200009, 'EST-SPPA/SWJ/07/21/6200009', 102505410000476, '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 10, 10, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'test', '2021-07-29 17:49:28', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 17:50:20', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(96, 6200010, '6200010', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 6200010, 'EST-SPPA/SWJ/07/21/6200010', 102505490000241, '102505490000241', 'BEARING NS 6306', 'PCS', 10, 10, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'test_gani', '2021-07-29 18:32:15', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 18:32:29', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(97, 6200011, '6200011', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 6200011, 'EST-SPPI/SWJ/07/21/6200011', 102505410000476, '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 10, 10, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'test', '2021-07-29 19:10:43', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 19:10:56', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(98, 6200012, '6200012', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 6200012, 'EST-SPPI/SWJ/07/21/6200012', 102505410000476, '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 12, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'test_1', '2021-07-29 19:53:34', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 19:54:54', b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(99, 7200004, '7200004', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 7200004, 'EST-SPPA/SWJ/07/21/7200004', 102505490000241, '102505490000241', 'BEARING NS 6306', 'PCS', 5, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'max text 250', '2021-07-29 20:07:45', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(100, 6200013, '6200013', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 6200013, 'EST-SPPA/SWJ/07/21/6200013', 102505790000508, '102505790000508', 'OBAT SKUR KLEP', 'BTL', 6, NULL, 2, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'salah lagi tuh sdh benar tadi no spp...62,72,82,92...no depannya kebun yg dibelakangnya lokasi input Ho(1) site(2)...', '2021-07-29 20:09:52', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(101, 7200005, '7200005', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 7200005, 'EST-SPPI/SWJ/07/21/7200005', 102505730000121, '102505730000121', 'BRACKET ANTENA', 'SET', 12.78, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'misal 12.78 ', '2021-07-29 20:13:46', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(102, 6200014, '6200014', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 6200014, 'EST-SPPA/SWJ/07/21/6200014', 102505490000247, '102505490000247', 'SARINGAN NS', 'PCS', 10, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'saya sdh sampaikan tentang max character..apa yg diinput di textboxnya harusnya direport sama tapi ini terpotong....jika kesulitan thd max length turunkan lagi sesuai dgn kapasitas direportnya...', '2021-07-29 20:15:58', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(103, 6200015, '6200015', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 6200015, 'EST-SPPA/SWJ/07/21/6200015', 102505410000498, '102505410000498', 'KABEL A/S TRANSMISI', 'PCS', 5, 5, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'mana bisa "sudah diapproval masih bisa tambah barang"', '2021-07-29 20:26:22', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 20:27:03', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(105, 6200016, '6200016', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 6200016, 'EST-SPPI/SWJ/07/21/6200016', 102505360000035, '102505360000035', 'BOX UH48-65-030 (BAK BELAKANG)', 'PCS', 2, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'mana bisa "sudah diapproval masih bisa tambah barang"', '2021-07-29 20:28:55', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 20:29:45', b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(106, 6200017, '6200017', '2021-07-29 00:00:00', 20210729, 4, 'FINANCE & ACCOUNTING', 6200017, 'EST-SPPA/SWJ/07/21/6200017', 102505730000123, '102505730000123', 'ADAPTOR 10A', 'PCS', 3, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'harusnya jika tidak memilih barang dilist SPP diblokir dahulu...jika belum memilih pesannya data belum dipilih...ini human error terjadi jika lupa memilih\n', '2021-07-29 20:40:07', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(108, 7200006, '7200006', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 7200006, 'EST-SPPI/SWJ/07/21/7200006', 102505730000123, '102505730000123', 'ADAPTOR 10A', 'PCS', 1, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'utk aproval jika sebagian yg tampil statusnya harusnya tulisannya sebagian..', '2021-07-29 20:44:42', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(109, 7200006, '7200006', '2021-07-29 00:00:00', 20210729, 1, 'TANAMAN', 7200006, 'EST-SPPI/SWJ/07/21/7200006', 102505760000067, '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 10, 10, 5, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-29 00:00:00', 202108, 2021, 'atau tidak Full silahkan diatur', '2021-07-29 20:44:44', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 20:45:13', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(110, 7200007, '7200007', '2021-07-30 00:00:00', 20210730, 1, 'TANAMAN', 7200007, 'EST-SPPA/SWJ/07/21/7200007', 102505760000394, '102505760000394', 'PAKU 5', 'KG', 5, 5, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-30 00:00:00', 202108, 2021, 'keterangan dgn karakter unik tidak bisa tampil ditabel SPP tapi report tampil "gunakan preg_replace..." dicek dulu karakter mana yg dak dibaca di view tabel\n', '2021-07-30 10:50:42', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 13:33:41', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(111, 6200018, '6200018', '2021-07-30 00:00:00', 20210730, 1, 'TANAMAN', 6200018, 'EST-SPPA/SWJ/07/21/6200018', 102505490000126, '102505490000126', 'PACKING CATER (4D32)', 'PCS', 5, 5, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-30 00:00:00', 202108, 2021, 'Status PO di Data SPP', '2021-07-30 10:54:38', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 10:54:49', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(112, 7200008, '7200008', '2021-07-30 00:00:00', 20210730, 1, 'TANAMAN', 7200008, 'EST-SPP/SWJ/07/21/7200008', 102505760000394, '102505760000394', 'PAKU 5', 'KG', 10, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-30 00:00:00', 202108, 2021, 'SPP dan SPPK', '2021-07-30 11:00:10', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 11:00:21', b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(113, 7200009, '7200009', '2021-07-30 00:00:00', 20210730, 7, 'HRD & UMUM', 7200009, 'EST-SPPK/SWJ/07/21/7200009', 102505490000121, '102505490000121', 'FUEL FILTER (4D32)', 'PCS', 5, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-30 00:00:00', 202108, 2021, 'SPP dan SPPK', '2021-07-30 11:01:14', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 11:02:03', b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(114, 7200010, '7200010', '2021-07-30 00:00:00', 20210730, 10, 'GIS', 7200010, 'EST-SPPI/SWJ/07/21/7200010', 102505760000093, '102505760000093', 'BAUT & MUR 19 PANJANG 15 CM', 'PCS', 1300.89, 1300.89, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-30 00:00:00', 202108, 2021, 'di SPP qty 1300.89, input PO qty 1,301 "\n', '2021-07-30 13:25:56', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 13:26:10', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(115, 7200011, '7200011', '2021-07-30 00:00:00', 20210730, 3, 'PABRIK', 7200011, 'EST-SPPI/SWJ/07/21/7200011', 102505760000061, '102505760000061', 'BESI COR 8MM', 'BTG', 10, 10, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-30 00:00:00', 202108, 2021, 'Penomoeran Divisi 07 SSP', '2021-07-30 13:41:26', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 13:41:44', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(116, 6200019, '6200019', '2021-07-30 00:00:00', 20210730, 1, 'TANAMAN', 6200019, 'EST-SPPA/SWJ/07/21/6200019', 102505760000097, '102505760000097', 'CAT HITAM SUZUKA', 'KLG', 5, 5, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-07-30 00:00:00', 202108, 2021, 'Perhitungan PO', '2021-07-30 14:09:32', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 14:09:46', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(117, 7200012, '7200012', '2021-07-30 00:00:00', 20210730, 1, 'TANAMAN', 7200012, 'EST-SPPA/SWJ/08/21/7200012', 102505760000067, '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 3, NULL, 5, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-08-01 00:00:00', 202108, 2021, 'test', '2021-08-01 22:47:00', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(118, 7200013, '7200013', '2021-08-01 00:00:00', 20210801, 3, 'PABRIK', 7200013, 'EST-SPPI/SWJ/08/21/7200013', 102505490000241, '102505490000241', 'BEARING NS 6306', 'PCS', 5, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-08-01 00:00:00', 202108, 2021, 'test', '2021-08-01 23:20:28', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(119, 7200014, '7200014', '2021-08-02 00:00:00', 20210802, 1, 'TANAMAN', 7200014, 'EST-SPPA/SWJ/08/21/7200014', 102505010100017, '102505010100017', 'PUPUK ORGANIK', 'KG', 10, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-08-02 00:00:00', 202108, 2021, 'Test Gani', '2021-08-02 15:06:21', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(124, 7200015, '7200015', '2021-08-02 00:00:00', 20210802, 1, 'TANAMAN', 7200015, 'EST-SPPA/SWJ/08/21/7200015', 102505790000508, '102505790000508', 'OBAT SKUR KLEP', 'BTL', 5, NULL, 5, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-08-02 00:00:00', 202108, 2021, 'test', '2021-08-02 21:38:29', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(125, 7200016, '7200016', '2021-08-03 00:00:00', 20210803, 1, 'TANAMAN', 7200016, 'EST-SPP/SWJ/08/21/7200016', 102505010100019, '102505010100019', 'PUPUK ZINC COPPER', 'KG', 5.5, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-08-03 00:00:00', 202108, 2021, 'test_gani', '2021-08-03 15:31:42', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(126, 6200020, '6200020', '2021-08-03 00:00:00', 20210803, 1, 'TANAMAN', 6200020, 'EST-SPPA/SWJ/08/21/6200020', 102505010100023, '102505010100023', 'PUPUK ZA', 'KG', 10.7, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-08-03 00:00:00', 202108, 2021, 'test_gani', '2021-08-03 15:48:40', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(127, 6200020, '6200020', '2021-08-03 00:00:00', 20210803, 1, 'TANAMAN', 6200020, 'EST-SPPA/SWJ/08/21/6200020', 102505010100025, '102505010100025', 'PUPUK ROCK PHOSPHATE (RP)', 'KG', 8.5, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-08-03 00:00:00', 202108, 2021, 'test_gani', '2021-08-03 15:49:00', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-08-03 15:49:10', b'0', 'SITE', 0, 0, 0, '0', 0, ''),
(128, 6200021, '6200021', '2021-08-04 00:00:00', 20210804, 11, 'MIS', 6200021, 'EST-SPPI/SWJ/08/21/6200021', 102505760000088, '102505760000088', 'CANGKUL AYAM ASLI', 'BH', 50, 50, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-08-04 00:00:00', 202108, 2021, 'apa kabarmu', '2021-08-04 15:06:55', 13, 'User SITE', 'DISETUJUI', 1, '2021-08-04 15:07:17', b'0', 'SITE', 1, 0, 0, '0', 0, ''),
(129, 6200021, '6200021', '2021-08-04 00:00:00', 20210804, 11, 'MIS', 6200021, 'EST-SPPI/SWJ/08/21/6200021', 102505760000087, '102505760000087', 'CANGKUL AYAM STD', 'BH', 50, 50, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2021-08-04 00:00:00', 202108, 2021, 'berharap kau baik baik saja aaa', '2021-08-04 15:07:02', 13, 'User SITE', 'DISETUJUI', 1, '2021-08-04 15:07:17', b'0', 'SITE', 1, 0, 0, '0', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `item_ppo_approval`
--

CREATE TABLE IF NOT EXISTS `item_ppo_approval` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_id_item_ppo` int(11) DEFAULT NULL,
  `noppotxt` varchar(7) DEFAULT NULL,
  `noreftxt` varchar(255) DEFAULT NULL,
  `kodebartxt` varchar(20) DEFAULT NULL,
  `nabar` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `flag_waiting_ktu` enum('0','1') DEFAULT NULL,
  `nama_approval_ktu` varchar(100) DEFAULT NULL,
  `tgl_approval_ktu` datetime DEFAULT NULL,
  `status_ktu` varchar(100) DEFAULT NULL,
  `status2_ktu` varchar(100) DEFAULT NULL,
  `status_lokasi_ktu` varchar(100) DEFAULT NULL,
  `flag_waiting_kasie` enum('0','1') DEFAULT NULL,
  `nama_approval_kasie` varchar(100) DEFAULT NULL,
  `tgl_approval_kasie` datetime DEFAULT NULL,
  `status_kasie` varchar(100) DEFAULT NULL,
  `status2_kasie` varchar(100) DEFAULT NULL,
  `status_lokasi_kasie` varchar(100) DEFAULT NULL,
  `flag_waiting_gm` enum('0','1') DEFAULT NULL,
  `nama_approval_gm` varchar(100) DEFAULT NULL,
  `tgl_approval_gm` datetime DEFAULT NULL,
  `status_gm` varchar(100) DEFAULT NULL,
  `status2_gm` varchar(100) DEFAULT NULL,
  `status_lokasi_gm` varchar(100) DEFAULT NULL,
  `flag_waiting_mill_mgr` enum('0','1') DEFAULT NULL,
  `nama_approval_mill_mgr` varchar(100) DEFAULT NULL,
  `tgl_approval_mill_mgr` datetime DEFAULT NULL,
  `status_mill_mgr` varchar(100) DEFAULT NULL,
  `status2_mill_mgr` varchar(100) DEFAULT NULL,
  `status_lokasi_mill_mgr` varchar(100) DEFAULT NULL,
  `flag_waiting_dept_head` enum('0','1') DEFAULT NULL,
  `nama_approval_dept_head` varchar(100) DEFAULT NULL,
  `tgl_approval_dept_head` datetime DEFAULT NULL,
  `status_dept_head` varchar(100) DEFAULT NULL,
  `status2_dept_head` varchar(100) DEFAULT NULL,
  `status_lokasi_dept_head` varchar(100) DEFAULT NULL,
  `flag_waiting_dir_ops` enum('0','1') DEFAULT NULL,
  `nama_approval_dir_ops` varchar(100) DEFAULT NULL,
  `tgl_approval_dir_ops` datetime DEFAULT NULL,
  `status_dir_ops` varchar(100) DEFAULT NULL,
  `status2_dir_ops` varchar(100) DEFAULT NULL,
  `status_lokasi_dir_ops` varchar(100) DEFAULT NULL,
  `flag_waiting_dir_hrd` enum('0','1') DEFAULT NULL,
  `nama_approval_dir_hrd` varchar(100) DEFAULT NULL,
  `tgl_approval_dir_hrd` datetime DEFAULT NULL,
  `status_dir_hrd` varchar(100) DEFAULT NULL,
  `status2_dir_hrd` varchar(100) DEFAULT NULL,
  `status_lokasi_dir_hrd` varchar(100) DEFAULT NULL,
  `flag_waiting_dir_mis` enum('0','1') DEFAULT NULL,
  `nama_approval_dir_mis` varchar(100) DEFAULT NULL,
  `tgl_approval_dir_mis` datetime DEFAULT NULL,
  `status_dir_mis` varchar(100) DEFAULT NULL,
  `status2_dir_mis` varchar(100) DEFAULT NULL,
  `status_lokasi_dir_mis` varchar(100) DEFAULT NULL,
  `flag_waiting_dir_legal` enum('0','1') DEFAULT NULL,
  `nama_approval_dir_legal` varchar(100) DEFAULT NULL,
  `tgl_approval_dir_legal` datetime DEFAULT NULL,
  `status_dir_legal` varchar(100) DEFAULT NULL,
  `status2_dir_legal` varchar(100) DEFAULT NULL,
  `status_lokasi_dir_legal` varchar(100) DEFAULT NULL,
  `flag_waiting_dir_area` enum('0','1') DEFAULT NULL,
  `nama_approval_dir_area` varchar(100) DEFAULT NULL,
  `tgl_approval_dir_area` datetime DEFAULT NULL,
  `status_dir_area` varchar(100) DEFAULT NULL,
  `status2_dir_area` varchar(100) DEFAULT NULL,
  `status_lokasi_dir_area` varchar(100) DEFAULT NULL,
  `flag_waiting_kp` enum('0','1') DEFAULT NULL,
  `nama_approval_kp` varchar(100) DEFAULT NULL,
  `tgl_approval_kp` datetime DEFAULT NULL,
  `status_kp` varchar(100) DEFAULT NULL,
  `status2_kp` varchar(100) DEFAULT NULL,
  `status_lokasi_kp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `item_ppo_approval_history`
--

CREATE TABLE IF NOT EXISTS `item_ppo_approval_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_id_item_ppo` int(11) DEFAULT NULL,
  `noppotxt` varchar(7) DEFAULT NULL,
  `noreftxt` varchar(30) DEFAULT NULL,
  `kodebartxt` varchar(20) DEFAULT NULL,
  `nabar` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `nama_approval` varchar(100) DEFAULT NULL,
  `tgl_approval` datetime DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `status2` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `kode_level` int(11) DEFAULT NULL,
  `status_lokasi` varchar(100) DEFAULT NULL,
  `keterangan_transaksi` text,
  `log` text,
  `tgl_transaksi` datetime DEFAULT NULL,
  `user_transaksi` varchar(50) DEFAULT NULL,
  `client_ip` varchar(50) DEFAULT NULL,
  `client_platform` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `item_ppo_history`
--

CREATE TABLE IF NOT EXISTS `item_ppo_history` (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `noppo` double DEFAULT NULL,
  `noppotxt` varchar(7) DEFAULT NULL,
  `tglppo` datetime DEFAULT NULL,
  `tglppotxt` double DEFAULT NULL,
  `kodedept` double DEFAULT NULL,
  `namadept` varchar(30) DEFAULT NULL,
  `noref` double DEFAULT NULL,
  `noreftxt` varchar(30) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(20) DEFAULT NULL,
  `nabar` varchar(255) DEFAULT NULL,
  `sat` varchar(30) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `QTY2` double DEFAULT NULL,
  `STOK` double DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `jumharga` double DEFAULT NULL,
  `kodept` varchar(4) DEFAULT NULL,
  `namapt` varchar(100) DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `periodetxt` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL,
  `tglisi` datetime DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `status2` smallint(6) DEFAULT NULL,
  `TGL_APPROVE` datetime DEFAULT NULL,
  `ada_penawar` bit(1) DEFAULT NULL,
  `LOKASI` varchar(100) DEFAULT NULL,
  `po` smallint(6) DEFAULT NULL,
  `saldo_po` double DEFAULT NULL,
  `kode_budget` double DEFAULT NULL,
  `grup` varchar(255) DEFAULT NULL,
  `main_acct` double DEFAULT NULL,
  `nama_main` varchar(255) DEFAULT NULL,
  `keterangan_transaksi` text,
  `log` text,
  `tgl_transaksi` datetime DEFAULT NULL,
  `user_transaksi` varchar(50) DEFAULT NULL,
  `client_ip` varchar(50) DEFAULT NULL,
  `client_platform` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`no_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `keluarbrgitem`
--

CREATE TABLE IF NOT EXISTS `keluarbrgitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(100) DEFAULT NULL,
  `alokasi` varchar(5) DEFAULT NULL,
  `kodept` varchar(5) DEFAULT NULL,
  `nobpb` varchar(128) DEFAULT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `keluarbrgitem`
--

INSERT INTO `keluarbrgitem` (`id`, `kodebar`, `kodebartxt`, `nabar`, `satuan`, `grp`, `alokasi`, `kodept`, `nobpb`, `pt`, `kode_dev`, `devisi`, `afd`, `blok`, `qty`, `qty2`, `nilai_item`, `tgl`, `skb`, `SKBTXT`, `NO_REF`, `tglinput`, `txttgl`, `thn`, `periode`, `txtperiode`, `noadjust`, `ket`, `kodebeban`, `kodebebantxt`, `ketbeban`, `kodesub`, `kodesubtxt`, `ketsub`, `batal`, `alasan_batal`, `USER`, `cetak`, `posting`) VALUES
(1, 102505760000087, '102505760000087', 'CANGKUL AYAM STD', 'BH', 'CONSTRUCTION MATERIAL', 'null', '06', 'EST-BPB/SWJ/08/2021/6600001', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '-', '-', 10, 10, 10000, '2021-08-04 00:00:00', 6200001, '6200001', 'EST-BKB/SWJ/08/2021/6200001', '2021-08-04 15:13:59', 20210804, 2021, '2021-08-04 00:00:00', 202108, 0, 'seng pangapuranmu', 0, '-', '', 102505100000375, '102505100000375', 'GEAR 19 T2 AGC1BA00431 BY-0', 0, NULL, 'User SITE', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `keluarbrgitem_history`
--

CREATE TABLE IF NOT EXISTS `keluarbrgitem_history` (
  `id` int(11) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(100) DEFAULT NULL,
  `alokasi` varchar(5) DEFAULT NULL,
  `kodept` varchar(5) DEFAULT NULL,
  `nobpb` double DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `afd` varchar(50) DEFAULT NULL,
  `blok` varchar(10) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `qty2` double DEFAULT NULL,
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
  `keterangan_transaksi` text,
  `log` text,
  `tgl_transaksi` datetime DEFAULT NULL,
  `user_transaksi` varchar(50) DEFAULT NULL,
  `client_ip` varchar(50) DEFAULT NULL,
  `client_platform` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keluarbrgitem_mutasi`
--

CREATE TABLE IF NOT EXISTS `keluarbrgitem_mutasi` (
  `id` int(11) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(100) DEFAULT NULL,
  `alokasi` varchar(5) DEFAULT NULL,
  `kodept` varchar(5) DEFAULT NULL,
  `nobpb` double DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `afd` varchar(50) DEFAULT NULL,
  `blok` varchar(10) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `qty2` double DEFAULT NULL,
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
  `USER` varchar(100) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `flag_lpb` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `keluar_query`
--
CREATE TABLE IF NOT EXISTS `keluar_query` (
`id` int(11)
,`KODE` varchar(5)
,`kodebartxt` varchar(20)
,`nabar` varchar(250)
,`SumOfqty` double
,`txtperiode` int(11)
,`batal` smallint(6)
);
-- --------------------------------------------------------

--
-- Table structure for table `list_level_approval`
--

CREATE TABLE IF NOT EXISTS `list_level_approval` (
  `spp_appr_ktu` int(11) DEFAULT NULL,
  `spp_appr_kasie_agronomi` int(11) DEFAULT NULL,
  `spp_appr_kasie_hrd_ga` int(11) DEFAULT NULL,
  `spp_appr_gm` int(11) DEFAULT NULL,
  `spp_appr_mill_mgr` int(11) DEFAULT NULL,
  `spp_appr_dept_head` int(11) DEFAULT NULL,
  `spp_appr_dir_ops` int(11) DEFAULT NULL,
  `bpb_appr_asisten_afd` int(11) DEFAULT NULL,
  `bpb_appr_kepala_kebun` int(11) DEFAULT NULL,
  `bpb_appr_kasie_agronomi` int(11) DEFAULT NULL,
  `bpb_appr_ktu` int(11) DEFAULT NULL,
  `bpb_appr_gm` int(11) DEFAULT NULL,
  `bkb_appr_ktu` int(11) DEFAULT NULL,
  `bkb_appr_kasie_gudang` int(11) DEFAULT NULL,
  `bkb_appr_kasie_pembukuan` int(11) DEFAULT NULL,
  `lpb_appr_kasie_gudang` int(11) DEFAULT NULL,
  `lpb_appr_ktu` int(11) DEFAULT NULL,
  `lpb_appr_mandor` int(11) DEFAULT NULL,
  `lpb_appr_vendor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_level_approval`
--

INSERT INTO `list_level_approval` (`spp_appr_ktu`, `spp_appr_kasie_agronomi`, `spp_appr_kasie_hrd_ga`, `spp_appr_gm`, `spp_appr_mill_mgr`, `spp_appr_dept_head`, `spp_appr_dir_ops`, `bpb_appr_asisten_afd`, `bpb_appr_kepala_kebun`, `bpb_appr_kasie_agronomi`, `bpb_appr_ktu`, `bpb_appr_gm`, `bkb_appr_ktu`, `bkb_appr_kasie_gudang`, `bkb_appr_kasie_pembukuan`, `lpb_appr_kasie_gudang`, `lpb_appr_ktu`, `lpb_appr_mandor`, `lpb_appr_vendor`) VALUES
(11, 13, 12, 15, 16, 21, 22, 20, 10, 13, 11, 15, 11, 18, 19, 18, 11, 51, 52);

-- --------------------------------------------------------

--
-- Table structure for table `masukitem`
--

CREATE TABLE IF NOT EXISTS `masukitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdpt` varchar(5) DEFAULT NULL,
  `nopo` double DEFAULT NULL,
  `nopotxt` varchar(50) DEFAULT NULL,
  `LOKAL` smallint(6) DEFAULT NULL,
  `ASSET` smallint(6) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `devisi` varchar(100) NOT NULL,
  `kode_dev` varchar(4) NOT NULL,
  `afd` varchar(10) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(100) DEFAULT NULL,
  `qtypo` double DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `tglpo` datetime DEFAULT NULL,
  `ttg` double DEFAULT NULL,
  `ttgtxt` varchar(255) DEFAULT NULL,
  `tglinput` datetime DEFAULT NULL,
  `txttgl` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `txtperiode` double DEFAULT NULL,
  `noadjust` double DEFAULT NULL,
  `ket` varchar(250) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `norefppo` varchar(50) DEFAULT NULL,
  `refpo` varchar(255) DEFAULT NULL,
  `noref` varchar(255) DEFAULT NULL,
  `BATAL` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `kurs` varchar(10) DEFAULT NULL,
  `konversi` double DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `USER` varchar(50) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `qtyditerima` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `masukitem`
--

INSERT INTO `masukitem` (`id`, `kdpt`, `nopo`, `nopotxt`, `LOKAL`, `ASSET`, `pt`, `devisi`, `kode_dev`, `afd`, `kodebar`, `kodebartxt`, `nabar`, `satuan`, `grp`, `qtypo`, `qty`, `tgl`, `tglpo`, `ttg`, `ttgtxt`, `tglinput`, `txttgl`, `thn`, `periode`, `txtperiode`, `noadjust`, `ket`, `lokasi`, `norefppo`, `refpo`, `noref`, `BATAL`, `alasan_batal`, `kurs`, `konversi`, `id_user`, `USER`, `cetak`, `posting`, `qtyditerima`) VALUES
(11, '06', 6200005, '6200005', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505790000151, '102505790000151', 'PACKING TBA', 'ROL', 'TOOLS & WORKSHOP EQUIPMENT', 5, 5, '2021-07-27 00:00:00', '2021-07-27 19:09:13', 6200002, '6200002', '2021-07-27 19:58:10', 20210727, 2021, '2021-07-27', 202108, 0, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', 'SITE', 'EST-SPPA/SWJ/07/21/6200006', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 'EST-LPB/SWJ/07/21/6200002', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(12, '06', 6200005, '6200005', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505790000508, '102505790000508', 'OBAT SKUR KLEP', 'BTL', 'TOOLS & WORKSHOP EQUIPMENT', 10, 5, '2021-07-27 00:00:00', '2021-07-27 19:09:13', 6200002, '6200002', '2021-07-27 19:58:13', 20210727, 2021, '2021-07-27', 202108, 0, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', 'SITE', 'EST-SPPA/SWJ/07/21/6200006', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 'EST-LPB/SWJ/07/21/6200002', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(13, '06', 6200005, '6200005', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505760000067, '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 'CONSTRUCTION MATERIAL', 5.5, 5, '2021-07-27 00:00:00', '2021-07-27 19:09:13', 6200002, '6200002', '2021-07-27 19:58:15', 20210727, 2021, '2021-07-27', 202108, 0, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', 'SITE', 'EST-SPPA/SWJ/07/21/6200006', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 'EST-LPB/SWJ/07/21/6200002', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(14, '06', 6200005, '6200005', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 'PUPUK', 7.5, 6, '2021-07-27 00:00:00', '2021-07-27 19:09:13', 6200002, '6200002', '2021-07-27 19:58:17', 20210727, 2021, '2021-07-27', 202108, 0, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', 'SITE', 'EST-SPPA/SWJ/07/21/6200006', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 'EST-LPB/SWJ/07/21/6200002', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(15, '06', 6200004, '6200004', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100009, '102505010100009', 'PUPUK DOLOMITE', 'KG', 'PUPUK', 5, 2, '2021-07-27 00:00:00', '2021-07-27 18:17:39', 6200003, '6200003', '2021-07-27 20:17:07', 20210727, 2021, '2021-07-27', 202108, 0, 'test', 'SITE', 'EST-SPPI/SWJ/07/21/6200005', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200004', 'EST-LPB/SWJ/07/21/6200003', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(16, '06', 6200004, '6200004', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100008, '102505010100008', 'PUPUK CUSO4', 'KG', 'PUPUK', 5.5, 2, '2021-07-27 00:00:00', '2021-07-27 18:17:39', 6200003, '6200003', '2021-07-27 20:17:09', 20210727, 2021, '2021-07-27', 202108, 0, 'test 2', 'SITE', 'EST-SPPI/SWJ/07/21/6200005', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200004', 'EST-LPB/SWJ/07/21/6200003', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(17, '06', 6200004, '6200004', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100010, '102505010100010', 'PUPUK HI-KAY', 'KG', 'PUPUK', 7.2, 2, '2021-07-27 00:00:00', '2021-07-27 18:17:39', 6200003, '6200003', '2021-07-27 20:17:11', 20210727, 2021, '2021-07-27', 202108, 0, 'test 3', 'SITE', 'EST-SPPI/SWJ/07/21/6200005', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200004', 'EST-LPB/SWJ/07/21/6200003', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(19, '06', 6200005, '6200005', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505790000508, '102505790000508', 'OBAT SKUR KLEP', 'BTL', 'TOOLS & WORKSHOP EQUIPMENT', 10, 2, '2021-07-27 00:00:00', '2021-07-27 19:09:13', 6200004, '6200004', '2021-07-27 20:24:40', 20210727, 2021, '2021-07-27', 202108, 0, 'test2', 'SITE', 'EST-SPPA/SWJ/07/21/6200006', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 'EST-LPB/SWJ/07/21/6200004', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(20, '06', 6200005, '6200005', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505760000067, '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 'CONSTRUCTION MATERIAL', 5.5, 0.5, '2021-07-27 00:00:00', '2021-07-27 19:09:13', 6200004, '6200004', '2021-07-27 20:24:41', 20210727, 2021, '2021-07-27', 202108, 0, 'test3', 'SITE', 'EST-SPPA/SWJ/07/21/6200006', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 'EST-LPB/SWJ/07/21/6200004', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(21, '06', 6200005, '6200005', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 'PUPUK', 7.5, 1.5, '2021-07-27 00:00:00', '2021-07-27 19:09:13', 6200004, '6200004', '2021-07-27 20:24:43', 20210727, 2021, '2021-07-27', 202108, 0, 'test4', 'SITE', 'EST-SPPA/SWJ/07/21/6200006', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 'EST-LPB/SWJ/07/21/6200004', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(24, '06', 6200004, '6200004', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100009, '102505010100009', 'PUPUK DOLOMITE', 'KG', 'PUPUK', 5, 1, '2021-07-28 00:00:00', '2021-07-27 18:17:39', 6200005, '6200005', '2021-07-28 15:19:59', 20210728, 2021, '2021-07-28', 202108, 0, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', 'SITE', 'EST-SPPI/SWJ/07/21/6200005', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200004', 'EST-LPB/SWJ/07/21/6200005', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(25, '06', 6200004, '6200004', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100008, '102505010100008', 'PUPUK CUSO4', 'KG', 'PUPUK', 5.5, 1.5, '2021-07-28 00:00:00', '2021-07-27 18:17:39', 6200005, '6200005', '2021-07-28 15:20:10', 20210728, 2021, '2021-07-28', 202108, 0, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', 'SITE', 'EST-SPPI/SWJ/07/21/6200005', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200004', 'EST-LPB/SWJ/07/21/6200005', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(26, '06', 6200004, '6200004', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100010, '102505010100010', 'PUPUK HI-KAY', 'KG', 'PUPUK', 7.2, 1, '2021-07-28 00:00:00', '2021-07-27 18:17:39', 6200005, '6200005', '2021-07-28 15:20:11', 20210728, 2021, '2021-07-28', 202108, 0, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', 'SITE', 'EST-SPPI/SWJ/07/21/6200005', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200004', 'EST-LPB/SWJ/07/21/6200005', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(29, '06', 6200018, '6200018', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505760000097, '102505760000097', 'CAT HITAM SUZUKA', 'KLG', 'CONSTRUCTION MATERIAL', 5, 2, '2021-07-30 00:00:00', '2021-07-30 00:00:00', 6200006, '6200006', '2021-07-30 14:27:45', 20210730, 2021, '2021-07-30', 202108, 0, 'Perhitungan PO', 'SITE', 'EST-SPPA/SWJ/07/21/6200019', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200018', 'EST-LPB/SWJ/07/21/6200006', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(30, '06', 6200017, '6200017', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505760000061, '102505760000061', 'BESI COR 8MM', 'BTG', 'CONSTRUCTION MATERIAL', 10, 10, '2021-07-30 00:00:00', '2021-07-30 00:00:00', 6200007, '6200007', '2021-07-30 14:30:05', 20210730, 2021, '2021-07-30', 202108, 0, '-Penomoran Devisi PO dengan SPP Devisi 07', 'SITE', 'EST-SPPI/SWJ/07/21/7200011', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200017', 'EST-LPB/SWJ/07/21/6200007', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(31, '06', 6200012, '6200012', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505490000241, '102505490000241', 'BEARING NS 6306', 'PCS', 'SPARE PART UMUM MESIN MESIN NON PABRIK', 10, 2, '2021-08-01 00:00:00', '2021-07-29 00:00:00', 6200008, '6200008', '2021-08-01 22:47:48', 20210801, 2021, '2021-08-01', 202108, 0, 'test_3', 'SITE', 'EST-SPPA/SWJ/07/21/6200010', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200012', 'EST-LPB/SWJ/08/21/6200008', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(32, '06', 6200019, '6200019', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505410000476, '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 'SPARE PART TRUK', 10, 5, '2021-08-02 00:00:00', '2021-08-01 00:00:00', 6200009, '6200009', '2021-08-02 15:11:39', 20210802, 2021, '2021-08-02', 202108, 0, 'test_gani', 'SITE', 'EST-SPPI/SWJ/07/21/6200011', 'EST/SWJ/PO-LOKAL/JKT/08/21/6200019', 'EST-LPB/SWJ/08/21/6200009', 0, '0', 'Rp', 0, 40, 'Gani SITE', 0, 0, 0),
(36, '06', 6200021, '6200021', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505760000088, '102505760000088', 'CANGKUL AYAM ASLI', 'BH', 'CONSTRUCTION MATERIAL', 50, 50, '2021-08-04 00:00:00', '2021-08-04 00:00:00', 6200010, '6200010', '2021-08-04 15:10:37', 20210804, 2021, '2021-08-04', 202108, 0, 'godong', 'SITE', 'EST-SPPI/SWJ/08/21/6200021', 'EST/SWJ/PO-LOKAL/JKT/08/21/6200021', 'EST-LPB/SWJ/08/21/6200010', 0, '0', 'Rp', 0, 13, 'User SITE', 0, 0, 0),
(37, '06', 6200021, '6200021', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505760000087, '102505760000087', 'CANGKUL AYAM STD', 'BH', 'CONSTRUCTION MATERIAL', 50, 50, '2021-08-04 00:00:00', '2021-08-04 00:00:00', 6200010, '6200010', '2021-08-04 15:10:39', 20210804, 2021, '2021-08-04', 202108, 0, 'telo', 'SITE', 'EST-SPPI/SWJ/08/21/6200021', 'EST/SWJ/PO-LOKAL/JKT/08/21/6200021', 'EST-LPB/SWJ/08/21/6200010', 0, '0', 'Rp', 0, 13, 'User SITE', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `masukitem_history`
--

CREATE TABLE IF NOT EXISTS `masukitem_history` (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `kdpt` varchar(5) DEFAULT NULL,
  `nopo` double DEFAULT NULL,
  `nopotxt` varchar(50) DEFAULT NULL,
  `LOKAL` smallint(6) DEFAULT NULL,
  `ASSET` smallint(6) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `afd` varchar(10) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(100) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `ttg` double DEFAULT NULL,
  `ttgtxt` varchar(255) DEFAULT NULL,
  `tglinput` datetime DEFAULT NULL,
  `txttgl` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `txtperiode` double DEFAULT NULL,
  `noadjust` double DEFAULT NULL,
  `ket` varchar(250) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `refpo` varchar(255) DEFAULT NULL,
  `noref` varchar(255) DEFAULT NULL,
  `BATAL` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `kurs` varchar(10) DEFAULT NULL,
  `konversi` double DEFAULT NULL,
  `USER` varchar(50) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `keterangan_transaksi` text,
  `log` text,
  `tgl_transaksi` datetime DEFAULT NULL,
  `user_transaksi` varchar(50) DEFAULT NULL,
  `client_ip` varchar(50) DEFAULT NULL,
  `client_platform` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`no_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE IF NOT EXISTS `pemesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) DEFAULT NULL,
  `pemesan` varchar(50) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`id`, `kode`, `pemesan`, `status`) VALUES
(23, '02', 'AGUS P', 'A'),
(24, '01', 'RAYMOND', 'A'),
(25, '03', 'IRVAN', 'A'),
(26, '04', 'FERDINAND', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE IF NOT EXISTS `po` (
  `id` int(11) NOT NULL,
  `kd_dept` int(11) DEFAULT NULL,
  `ket_dept` varchar(100) DEFAULT NULL,
  `kode_dev` int(11) DEFAULT NULL,
  `devisi` varchar(50) DEFAULT NULL,
  `grup` varchar(255) DEFAULT NULL,
  `kode_budet` double DEFAULT NULL,
  `kd_subbudget` text,
  `ket_subbudget` text,
  `kode_supply` varchar(50) DEFAULT NULL,
  `nama_supply` varchar(100) DEFAULT NULL,
  `kode_pemesan` varchar(10) DEFAULT NULL,
  `pemesan` varchar(75) DEFAULT NULL,
  `nopo` double DEFAULT NULL,
  `nopotxt` varchar(15) DEFAULT NULL,
  `noppo` double DEFAULT NULL,
  `noppotxt` varchar(15) DEFAULT NULL COMMENT 'Flag 1 jika qty LPB = qty PO',
  `no_refppo` varchar(50) DEFAULT NULL,
  `tgl_refppo` datetime DEFAULT NULL,
  `tgl_reftxt` double DEFAULT NULL,
  `tglpo` datetime DEFAULT NULL,
  `tglpotxt` double DEFAULT NULL,
  `tglppo` datetime DEFAULT NULL,
  `tglppotxt` double DEFAULT NULL,
  `bayar` varchar(15) DEFAULT NULL,
  `tempo_bayar` double DEFAULT NULL,
  `lokasikirim` varchar(100) DEFAULT NULL,
  `tempo_kirim` double DEFAULT NULL,
  `lokasi_beli` varchar(50) DEFAULT NULL,
  `ket` text,
  `kodept` varchar(5) DEFAULT NULL,
  `namapt` varchar(100) DEFAULT NULL,
  `no_acc` double DEFAULT NULL COMMENT 'Di logistik web, ini untuk data input nilai pph',
  `ket_acc` varchar(100) DEFAULT NULL COMMENT 'Di logistik web, ini untuk data input no penawaran di menu PO',
  `periode` datetime DEFAULT NULL,
  `periodetxt` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `tglisi` datetime DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `pph` double DEFAULT NULL,
  `ppn` varchar(2) DEFAULT NULL,
  `totalbayar` double DEFAULT NULL,
  `ket_kirim` text,
  `lokasi` varchar(100) DEFAULT NULL,
  `noreftxt` varchar(255) DEFAULT NULL,
  `uangmuka` double DEFAULT NULL,
  `voucher` varchar(100) DEFAULT NULL,
  `terbayar` smallint(6) DEFAULT NULL,
  `nopp` varchar(255) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `kirim` smallint(6) DEFAULT NULL,
  `qr_code` varchar(100) DEFAULT NULL,
  `jml_cetak` int(20) DEFAULT NULL,
  `status_lpb` tinyint(1) NOT NULL,
  `sudah_lpb` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`id`, `kd_dept`, `ket_dept`, `kode_dev`, `devisi`, `grup`, `kode_budet`, `kd_subbudget`, `ket_subbudget`, `kode_supply`, `nama_supply`, `kode_pemesan`, `pemesan`, `nopo`, `nopotxt`, `noppo`, `noppotxt`, `no_refppo`, `tgl_refppo`, `tgl_reftxt`, `tglpo`, `tglpotxt`, `tglppo`, `tglppotxt`, `bayar`, `tempo_bayar`, `lokasikirim`, `tempo_kirim`, `lokasi_beli`, `ket`, `kodept`, `namapt`, `no_acc`, `ket_acc`, `periode`, `periodetxt`, `thn`, `tglisi`, `user`, `pph`, `ppn`, `totalbayar`, `ket_kirim`, `lokasi`, `noreftxt`, `uangmuka`, `voucher`, `terbayar`, `nopp`, `batal`, `kirim`, `qr_code`, `jml_cetak`, `status_lpb`, `sudah_lpb`) VALUES
(3, 3, 'PABRIK', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'KTU', 6200001, '6200001', 6200002, '6200002', 'EST-SPPA/SWJ/07/21/6200002', '2021-07-27 00:00:00', 20210727, '2021-07-27 17:01:02', 20210727, '2021-07-27 00:00:00', 20210727, 'Cash', 7, 'SITE', 1, 'SITE', 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '1234', '2021-07-27 17:01:02', 202107, 2021, '2021-07-27 17:01:02', 'Gani SITE', 2, '10', 1051600, '-Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200001', 0, '0', 0, NULL, 0, 0, '6200001_2021-07-27.png', 3, 0, 0),
(4, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'KTU', 6200002, '6200002', 7200002, '7200002', 'EST-SPPI/SWJ/07/21/7200002', '2021-07-27 00:00:00', 20210727, '2021-07-27 17:23:52', 20210727, '2021-07-27 00:00:00', 20210727, 'Cash', 1, 'SITE', 1, 'SITE', 'test', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '65432', '2021-07-27 17:23:52', 202107, 2021, '2021-07-27 17:23:52', 'Gani SITE', 0, '0', 18000, '-test', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200002', 0, '0', 0, NULL, 0, 0, '6200002_2021-07-27.png', 2, 0, 0),
(5, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'KTU', 6200003, '6200003', 6200004, '6200004', 'EST-SPPI/SWJ/07/21/6200004', '2021-07-27 00:00:00', 20210727, '2021-07-27 17:36:30', 20210727, '2021-07-27 00:00:00', 20210727, 'Cash', 10, 'SITE', 5, 'SITE', 'test kode', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '876543', '2021-07-27 17:36:30', 202107, 2021, '2021-07-27 17:36:30', 'Gani SITE', 0, '0', 12375, '-test kode', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200003', 0, '0', 0, NULL, 0, 0, '6200003_2021-07-27.png', NULL, 0, 0),
(6, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200004, '6200004', 6200005, '6200005', 'EST-SPPI/SWJ/07/21/6200005', '2021-07-27 00:00:00', 20210727, '2021-07-27 18:17:39', 20210727, '2021-07-27 00:00:00', 20210727, 'Cash', 3, 'SITE', 1, 'SITE', 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '87654', '2021-07-27 18:17:39', 202107, 2021, '2021-07-27 18:17:39', 'Gani SITE', 0, '0', 85160.953, 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme ', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200004', 0, '0', 0, NULL, 0, 0, '6200004_2021-07-27.png', 2, 0, 1),
(7, 3, 'PABRIK', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'KTU', 6200005, '6200005', 6200006, '6200006', 'EST-SPPA/SWJ/07/21/6200006', '2021-07-27 00:00:00', 20210727, '2021-07-27 19:09:13', 20210727, '2021-07-27 00:00:00', 20210727, 'Cash', 30, 'SITE', 7, 'SITE', 'test gani', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '7654', '2021-07-27 19:09:13', 202107, 2021, '2021-07-27 19:09:13', 'Gani SITE', 10, '10', 622700, '-test gani', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 0, '0', 0, NULL, 0, 0, '6200005_2021-07-27.png', 2, 0, 1),
(8, 3, 'PABRIK', 0, NULL, NULL, 0, '0', NULL, '0455', 'SUTINDO RAYA MULIA', NULL, 'GM', 6200006, '6200006', 6200002, '6200002', 'EST-SPPA/SWJ/07/21/6200002', '2021-07-27 00:00:00', 20210728, '2021-07-28 14:29:58', 20210728, '2021-07-27 00:00:00', 20210727, 'Kredit', 30, 'SITE', 7, 'SITE', 'test', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '53342', '2021-07-28 14:29:58', 202107, 2021, '2021-07-28 14:29:58', 'Gani SITE', 10, '0', 1050000, '-test', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200006', 0, '0', 0, NULL, 0, 0, '6200006_2021-07-28.png', 8, 0, 0),
(9, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200007, '6200007', 6200001, '6200001', 'EST-SPPI/SWJ/07/21/6200001', '2021-07-27 00:00:00', 20210729, '2021-07-29 09:00:02', 20210729, '2021-07-27 00:00:00', 20210727, 'Cash', 30, 'SITE', 7, 'SITE', 'test', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '12345', '2021-07-29 09:00:02', 202107, 2021, '2021-07-29 09:00:02', 'Gani SITE', 10, '10', 1082000, '-test', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200007', 0, '0', 0, NULL, 0, 0, '6200007_2021-07-29.png', 2, 0, 0),
(10, 4, 'FINANCE & ACCOUNTING', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200008, '6200008', 6200007, '6200007', 'EST-SPPA/SWJ/07/21/6200007', '2021-07-27 00:00:00', 20210729, '2021-07-29 10:27:14', 20210729, '2021-07-27 00:00:00', 20210727, 'Cash', 1, 'SITE', 1, 'RO', 'test', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '1235', '2021-07-29 10:27:14', 202107, 2021, '2021-07-29 10:27:14', 'Gani SITE', 10, '10', 120000, '-test', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200008', 0, '0', 0, NULL, 0, 0, '6200008_2021-07-29.png', 2, 0, 0),
(11, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200009, '6200009', 7200003, '7200003', 'EST-SPPA/SWJ/07/21/7200003', '2021-07-29 00:00:00', 20210729, '2021-07-29 13:37:41', 20210729, '2021-07-29 00:00:00', 20210729, 'Cash', 1, 'SITE', 1, 'SITE', 'test', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '65432', '2021-07-29 13:37:41', 202107, 2021, '2021-07-29 13:37:41', 'Gani SITE', 10, '10', 1361999, '-test', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200009', 0, '0', 0, NULL, 0, 0, '6200009_2021-07-29.png', 7, 0, 0),
(12, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'KTU', 6200010, '6200010', 6200008, '6200008', 'EST-SPPI/SWJ/07/21/6200008', '2021-07-29 00:00:00', 20210729, '2021-07-29 16:15:00', 20210729, '2021-07-29 00:00:00', 20210729, 'Cash', 1, 'SITE', 1, 'SITE', 'test', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '87654', '2021-07-29 16:15:00', 202107, 2021, '2021-07-29 16:15:00', 'Gani SITE', 0, '10', 190850, '-test', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200010', 0, '0', 0, NULL, 0, 0, '6200010_2021-07-29.png', 17, 0, 0),
(13, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200011, '6200011', 6200009, '6200009', 'EST-SPPA/SWJ/07/21/6200009', '2021-07-29 00:00:00', 20210729, '2021-07-29 17:53:00', 20210729, '2021-07-29 00:00:00', 20210729, 'Cash', 1, 'SITE', 1, 'SITE', 'test', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '543', '2021-07-29 17:53:00', 202107, 2021, '2021-07-29 17:53:00', 'Gani SITE', 10, '10', 116000, '-test', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200011', 0, '0', 0, NULL, 0, 0, '6200011_2021-07-29.png', 9, 0, 0),
(14, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200012, '6200012', 6200010, '6200010', 'EST-SPPA/SWJ/07/21/6200010', '2021-07-29 00:00:00', 20210729, '2021-07-29 18:49:30', 20210729, '2021-07-29 00:00:00', 20210729, 'Cash', 1, 'SITE', 1, 'SITE', 'test', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '76543', '2021-07-29 18:49:30', 202107, 2021, '2021-07-29 18:49:30', 'Gani SITE', 10, '10', 113000, '-test', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200012', 0, '0', 0, NULL, 0, 0, '6200012_2021-07-29.png', 9, 0, 1),
(15, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200013, '6200013', 6200018, '6200018', 'EST-SPPA/SWJ/07/21/6200018', '2021-07-30 00:00:00', 20210730, '2021-07-30 10:56:01', 20210730, '2021-07-30 00:00:00', 20210730, 'Cash', 1, 'SITE', 1, 'SITE', 'genza bisa dak ditambahkan di tabel SPP kolom PO...fungsinya utk ketahui bahwa SPP tsb sdh ada PO nya...judulnya status PO...isinya jika sdh PO tulisan PO kalau belum PO kosong saja\n', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '132435467', '2021-07-30 10:56:01', 202107, 2021, '2021-07-30 10:56:01', 'Gani SITE', 0, '0', 50000, 'genza bisa dak ditambahkan di tabel SPP kolom PO...fungsinya utk ketahui bahwa SPP tsb sdh ada PO nya...judulnya status PO...isinya jika sdh PO tulisan PO kalau belum PO kosong saja\n', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200013', 0, '0', 0, NULL, 0, 0, '6200013_2021-07-30.png', 3, 0, 0),
(16, 10, 'GIS', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200014, '6200014', 7200010, '7200010', 'EST-SPPI/SWJ/07/21/7200010', '2021-07-30 00:00:00', 20210730, '2021-07-30 13:27:30', 20210730, '2021-07-30 00:00:00', 20210730, 'Cash', 1, 'SITE', 1, 'SITE', '''QTY SPP harus sesuai apa adanya di PO..ini kondisinya di PO dibulatkan " di SPP qty 1300.89, input PO qty 1,301 "', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '1354678', '2021-07-30 13:27:30', 202107, 2021, '2021-07-30 13:27:30', 'Gani SITE', 0, '0', 1300890, '-''QTY SPP', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200014', 0, '0', 0, NULL, 0, 0, '6200014_2021-07-30.png', 1, 0, 0),
(17, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200015, '6200015', 7200006, '7200006', 'EST-SPPI/SWJ/07/21/7200006', '2021-07-29 00:00:00', 20210730, '2021-07-30 13:29:50', 20210730, '2021-07-29 00:00:00', 20210729, 'Cash', 1, 'SITE', 1, 'SITE', 'ini spp ada 2 barang..tapi sewaktu input PO hanya 1 saja\n', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '1234567', '2021-07-30 13:29:50', 202107, 2021, '2021-07-30 13:29:50', 'Gani SITE', 0, '0', 500000, '-ini spp ada 2 barang..tapi sewaktu input PO hanya 1 saja\n', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200015', 0, '0', 0, NULL, 0, 0, '6200015_2021-07-30.png', 1, 0, 0),
(18, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200016, '6200016', 7200007, '7200007', 'EST-SPPA/SWJ/07/21/7200007', '2021-07-30 00:00:00', 20210730, '2021-07-30 13:35:14', 20210730, '2021-07-30 00:00:00', 20210730, 'Cash', 5, 'SITE', 1, 'SITE', '<?php\n// memanggil library FPDF\nrequire(''fpdf.php'');\n// intance object dan memberikan pengaturan halaman PDF\n$pdf = new FPDF(''P'',''mm'',''A4'');\n// membuat halaman baru\n$pdf->AddPage();\n// setting jenis font yang akan digunakan\n$pdf->SetFont(''Arial'',''B'',', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '87654', '2021-07-30 13:35:14', 202107, 2021, '2021-07-30 13:35:14', 'Gani SITE', 0, '0', 500000, '-<?php\n// memanggil library FPDF\nrequire(''fpdf.php'');\n// intance object dan memberikan pengaturan halaman PDF\n$pdf = new FPDF(''P'',''mm'',''A4'');\n// membuat halaman baru\n$pdf->AddPage();\n// setting jenis font yang akan digunakan\n$pdf->SetFont(''Arial'',''B''', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200016', 0, '0', 0, NULL, 0, 0, '6200016_2021-07-30.png', 1, 0, 0),
(19, 3, 'PABRIK', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200017, '6200017', 7200011, '7200011', 'EST-SPPI/SWJ/07/21/7200011', '2021-07-30 00:00:00', 20210730, '2021-07-30 13:45:08', 20210730, '2021-07-30 00:00:00', 20210730, 'Cash', 1, 'SITE', 1, 'SITE', '-Penomoran Devisi PO dengan SPP Devisi 07', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '11657', '2021-07-30 13:45:08', 202107, 2021, '2021-07-30 13:45:08', 'Gani SITE', 10, '10', 1090000, '-Penomoran Devisi PO dengan SPP Devisi 07', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200017', 0, '0', 0, NULL, 0, 0, '6200017_2021-07-30.png', 1, 1, 1),
(20, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200018, '6200018', 6200019, '6200019', 'EST-SPPA/SWJ/07/21/6200019', '2021-07-30 00:00:00', 20210730, '2021-07-30 14:11:08', 20210730, '2021-07-30 00:00:00', 20210730, 'Cash', 1, 'SITE', 1, 'SITE', 'Perhitungan PO', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '87654', '2021-07-30 14:11:08', 202107, 2021, '2021-07-30 14:11:08', 'Gani SITE', 0, '0', 992000, '-Perhitungan PO', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200018', 0, '0', 0, NULL, 0, 0, '6200018_2021-07-30.png', 1, 0, 1),
(21, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200019, '6200019', 6200011, '6200011', 'EST-SPPI/SWJ/07/21/6200011', '2021-07-29 00:00:00', 20210801, '2021-08-01 22:49:30', 20210801, '2021-07-29 00:00:00', 20210729, 'Cash', 1, 'SITE', 1, 'SITE', 'test', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '4567', '2021-08-01 22:49:30', 202108, 2021, '2021-08-01 22:49:30', 'Gani SITE', 0, '0', 1000000, '-test', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/08/21/6200019', 0, '0', 0, NULL, 0, 0, '6200019_2021-08-01.png', 2, 0, 0),
(22, 1, 'TANAMAN', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200020, '6200020', 6200015, '6200015', 'EST-SPPA/SWJ/07/21/6200015', '2021-07-29 00:00:00', 20210802, '2021-08-02 22:30:08', 20210802, '2021-07-29 00:00:00', 20210729, 'Cash', 2, 'SITE', 1, 'SITE', 'test', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '8', '2021-08-02 22:30:08', 202108, 2021, '2021-08-02 22:30:08', 'Gani SITE', 10, '10', 1090000, '-test', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/08/21/6200020', 0, '0', 0, NULL, 0, 0, '6200020_2021-08-02.png', 1, 0, 0),
(23, 11, 'MIS', 0, NULL, NULL, 0, '0', NULL, '0475', 'TOKO ( KAS )', NULL, 'GM', 6200021, '6200021', 6200021, '6200021', 'EST-SPPI/SWJ/08/21/6200021', '2021-08-04 00:00:00', 20210804, '2021-08-04 15:09:08', 20210804, '2021-08-04 00:00:00', 20210804, 'Cash', 0, 'SITE', 0, 'SITE', 'mugo gusti ngejabani', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', NULL, '0', '2021-08-04 15:09:08', 202108, 2021, '2021-08-04 15:09:08', 'User SITE', 0, '0', 100000, '-', 'SITE', 'EST/SWJ/PO-LOKAL/JKT/08/21/6200021', 0, '0', 0, NULL, 0, 0, '6200021_2021-08-04.png', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `po_history`
--

CREATE TABLE IF NOT EXISTS `po_history` (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `kd_dept` int(11) DEFAULT NULL,
  `ket_dept` varchar(100) DEFAULT NULL,
  `grup` varchar(255) DEFAULT NULL,
  `kode_budet` double DEFAULT NULL,
  `kd_subbudget` varchar(20) DEFAULT NULL,
  `ket_subbudget` varchar(100) DEFAULT NULL,
  `kode_supply` varchar(50) DEFAULT NULL,
  `nama_supply` varchar(100) DEFAULT NULL,
  `kode_pemesan` varchar(10) DEFAULT NULL,
  `pemesan` varchar(75) DEFAULT NULL,
  `nopo` double DEFAULT NULL,
  `nopotxt` varchar(15) DEFAULT NULL,
  `noppo` double DEFAULT NULL,
  `noppotxt` varchar(15) DEFAULT NULL,
  `no_refppo` varchar(50) DEFAULT NULL,
  `tgl_refppo` datetime DEFAULT NULL,
  `tgl_reftxt` double DEFAULT NULL,
  `tglpo` datetime DEFAULT NULL,
  `tglpotxt` double DEFAULT NULL,
  `tglppo` datetime DEFAULT NULL,
  `tglppotxt` double DEFAULT NULL,
  `bayar` varchar(15) DEFAULT NULL,
  `tempo_bayar` double DEFAULT NULL,
  `lokasikirim` varchar(100) DEFAULT NULL,
  `tempo_kirim` double DEFAULT NULL,
  `lokasi_beli` varchar(50) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `kodept` varchar(5) DEFAULT NULL,
  `namapt` varchar(100) DEFAULT NULL,
  `no_acc` double DEFAULT NULL,
  `ket_acc` varchar(100) DEFAULT NULL COMMENT 'Di logistik web, ini untuk data input no penawaran di menu PO',
  `periode` datetime DEFAULT NULL,
  `periodetxt` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `tglisi` datetime DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `ppn` varchar(2) DEFAULT NULL,
  `totalbayar` double DEFAULT NULL,
  `ket_kirim` varchar(255) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `noreftxt` varchar(255) DEFAULT NULL,
  `uangmuka` double DEFAULT NULL,
  `voucher` varchar(100) DEFAULT NULL,
  `terbayar` smallint(6) DEFAULT NULL,
  `nopp` varchar(255) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `kirim` smallint(6) DEFAULT NULL,
  `keterangan_transaksi` text,
  `log` text,
  `tgl_transaksi` datetime DEFAULT NULL,
  `user_transaksi` varchar(50) DEFAULT NULL,
  `client_ip` varchar(50) DEFAULT NULL,
  `client_platform` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`no_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pp`
--

CREATE TABLE IF NOT EXISTS `pp` (
  `id` int(11) DEFAULT NULL,
  `nopp` double DEFAULT NULL,
  `nopptxt` varchar(7) DEFAULT NULL,
  `nopo` double DEFAULT NULL,
  `nopotxt` varchar(7) DEFAULT NULL,
  `tglpp` datetime DEFAULT NULL,
  `tglpptxt` double DEFAULT NULL,
  `tglpo` datetime DEFAULT NULL,
  `tglpotxt` double DEFAULT NULL,
  `ref_pp` varchar(50) DEFAULT NULL,
  `ref_po` varchar(255) DEFAULT NULL,
  `kode_supply` double DEFAULT NULL,
  `kode_supplytxt` varchar(7) DEFAULT NULL,
  `nama_supply` varchar(90) DEFAULT NULL,
  `kepada` varchar(60) DEFAULT NULL,
  `bayar` varchar(10) DEFAULT NULL,
  `KURS` varchar(5) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `pajak` double DEFAULT NULL,
  `jumlahpo` double DEFAULT NULL,
  `KODE_BPO` double DEFAULT NULL,
  `jumlah_bpo` double DEFAULT NULL,
  `total_po` double DEFAULT NULL,
  `terbilang` varchar(255) DEFAULT NULL,
  `ket` varchar(90) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kodept` varchar(5) DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `txtperiode` double DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `tglisi` datetime DEFAULT NULL,
  `status_vou` smallint(6) DEFAULT NULL,
  `no_vou` double DEFAULT NULL,
  `no_voutxt` varchar(20) DEFAULT NULL,
  `tgl_vou` datetime DEFAULT NULL,
  `tgl_voutxt` double DEFAULT NULL,
  `tgl_bayar_real` datetime DEFAULT NULL,
  `kasir_bayar` double DEFAULT NULL,
  `kode_budget` double DEFAULT NULL,
  `grup` varchar(255) DEFAULT NULL,
  `main_account` double DEFAULT NULL,
  `nama_account` varchar(255) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ppo`
--

CREATE TABLE IF NOT EXISTS `ppo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kpd` varchar(50) DEFAULT NULL,
  `noppo` double DEFAULT NULL,
  `noppotxt` varchar(10) DEFAULT NULL,
  `jenis` varchar(10) DEFAULT NULL,
  `tglppo` datetime DEFAULT NULL,
  `tglppotxt` double DEFAULT NULL,
  `tgltrm` datetime DEFAULT NULL,
  `kodedept` double DEFAULT NULL,
  `namadept` varchar(100) DEFAULT NULL,
  `kode_dev` varchar(4) NOT NULL,
  `devisi` varchar(50) NOT NULL,
  `noref` double DEFAULT NULL,
  `noreftxt` varchar(30) DEFAULT NULL,
  `tglref` datetime DEFAULT NULL,
  `ket` text,
  `no_acc` double DEFAULT NULL,
  `ket_acc` varchar(100) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kodept` varchar(4) DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `periodetxt` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `tglisi` datetime DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `user` varchar(30) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL COMMENT '0=DALAM PROSES, 1=DISETUJUI, 2=SEBAGIAN, 3=TIDAK DISETUJUI, 4=DIKETAHUI, 5=BATAL, 6=UBAH, 7=REQUEST UBAH, 8=TIDAK DISETUJUI SEBAGIAN',
  `status2` smallint(6) DEFAULT NULL COMMENT '0=DALAM PROSES, 1=DISETUJUI, 2=SEBAGIAN, 3=TIDAK DISETUJUI, 4=DIKETAHUI, 5=BATAL, 6=UBAH, 7=REQUEST UBAH, 8=TIDAK DISETUJUI SEBAGIAN',
  `TGL_APPROVE` datetime DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `po` smallint(6) DEFAULT NULL,
  `kode_budget` double DEFAULT NULL,
  `grup` varchar(255) DEFAULT NULL,
  `main_acct` double DEFAULT NULL,
  `nama_main` varchar(255) DEFAULT NULL COMMENT 'Di aplikasi logistik web untuk store data alasan batal spp/ubah spp/revisi quantity',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `ppo`
--

INSERT INTO `ppo` (`id`, `kpd`, `noppo`, `noppotxt`, `jenis`, `tglppo`, `tglppotxt`, `tgltrm`, `kodedept`, `namadept`, `kode_dev`, `devisi`, `noref`, `noreftxt`, `tglref`, `ket`, `no_acc`, `ket_acc`, `pt`, `kodept`, `periode`, `periodetxt`, `thn`, `tglisi`, `id_user`, `user`, `status`, `status2`, `TGL_APPROVE`, `lokasi`, `po`, `kode_budget`, `grup`, `main_acct`, `nama_main`) VALUES
(44, 'Bagian Purchasing', 6200001, '6200001', 'SPPI', '2021-07-27 00:00:00', 20210727, '2021-07-27 15:08:01', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200001, 'EST-SPPI/SWJ/07/21/6200001', '2021-07-27 00:00:00', 'test gani', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-27 00:00:00', 202108, 2021, '2021-07-27 15:08:01', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 15:08:13', 'SITE', 1, 0, '0', 0, '0'),
(45, 'Bagian Purchasing', 7200001, '7200001', 'SPP', '2021-07-27 00:00:00', 20210727, '2021-07-27 15:35:23', 1, 'TANAMAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200001, 'EST-SPP/SWJ/07/21/7200001', '2021-07-27 00:00:00', 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme atau organ hewan dan tumbuhan, sedangkan pupuk kimia dibuat melalui proses pengolahan oleh manusia dari bahan-bahan mineral. Pupuk kimia biasanya lebih "murni" daripada pupuk organik, dengan kandungan bahan yang dapat dikalkulasi. Pupuk organik sukar ditentukan isinya, tergantung dari sumbernya; keunggulannya adalah ia dapat memperbaiki kondisi fisik tanah karena membantu pengikatan air secara efektif.', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-27 00:00:00', 202108, 2021, '2021-07-27 15:35:23', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 15:36:50', 'SITE', 0, 0, '0', 4, '0'),
(46, 'Bagian Purchasing', 6200002, '6200002', 'SPPA', '2021-07-27 00:00:00', 20210727, '2021-07-27 15:41:05', 3, 'PABRIK', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200002, 'EST-SPPA/SWJ/07/21/6200002', '2021-07-27 00:00:00', 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme atau organ hewan dan tumbuhan, sedangkan pupuk kimia dibuat melalui proses pengolahan oleh manusia dari bahan-bahan mineral. Pupuk kimia biasanya lebih "murni" daripada pupuk organik, dengan kandungan bahan yang dapat dikalkulasi. Pupuk organik sukar ditentukan isinya, tergantung dari sumbernya; keunggulannya adalah ia dapat memperbaiki kondisi fisik tanah karena membantu pengikatan air secara efektif.', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-27 00:00:00', 202108, 2021, '2021-07-27 15:41:05', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 17:16:54', 'SITE', 1, 0, '0', 4, '0'),
(47, 'Bagian Purchasing', 6200003, '6200003', 'SPPK', '2021-07-27 00:00:00', 20210727, '2021-07-27 15:58:04', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200003, 'EST-SPPK/SWJ/07/21/6200003', '2021-07-27 00:00:00', 'test gani SPPK', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-27 00:00:00', 202108, 2021, '2021-07-27 15:58:04', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-28 17:43:51', 'SITE', 0, 0, '0', 0, '0'),
(48, 'Bagian Purchasing', 7200002, '7200002', 'SPPI', '2021-07-27 00:00:00', 20210727, '2021-07-27 17:20:07', 1, 'TANAMAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200002, 'EST-SPPI/SWJ/07/21/7200002', '2021-07-27 00:00:00', 'test Qty', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-27 00:00:00', 202108, 2021, '2021-07-27 17:20:07', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 17:20:21', 'SITE', 1, 0, '0', 0, '0'),
(49, 'Bagian Purchasing', 6200004, '6200004', 'SPPI', '2021-07-27 00:00:00', 20210727, '2021-07-27 17:34:49', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200004, 'EST-SPPI/SWJ/07/21/6200004', '2021-07-27 00:00:00', 'test kode', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-27 00:00:00', 202108, 2021, '2021-07-27 17:34:49', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 17:35:16', 'SITE', 1, 0, '0', 0, '0'),
(50, 'Bagian Purchasing', 6200005, '6200005', 'SPPI', '2021-07-27 00:00:00', 20210727, '2021-07-27 18:03:13', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200005, 'EST-SPPI/SWJ/07/21/6200005', '2021-07-27 00:00:00', 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup semua pupuk yang dibuat dari sisa-sisa metabolisme atau organ hewan dan tumbuhan, sedangkan pupuk kimia dibuat melalui proses pengolahan oleh manusia dari bahan-bahan mineral. Pupuk kimia biasanya lebih "murni" daripada pupuk organik, dengan kandungan bahan yang dapat dikalkulasi. Pupuk organik sukar ditentukan isinya, tergantung dari sumbernya; keunggulannya adalah ia dapat memperbaiki kondisi fisik tanah karena membantu pengikatan air secara efektif.', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-27 00:00:00', 202108, 2021, '2021-07-27 18:03:13', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 18:04:11', 'SITE', 1, 0, '0', 2, '0'),
(51, 'Bagian Purchasing', 6200006, '6200006', 'SPPA', '2021-07-27 00:00:00', 20210727, '2021-07-27 18:39:07', 3, 'PABRIK', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200006, 'EST-SPPA/SWJ/07/21/6200006', '2021-07-27 00:00:00', 'test', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-27 00:00:00', 202108, 2021, '2021-07-27 18:39:07', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-27 18:39:25', 'SITE', 1, 0, '0', 0, '0'),
(52, 'Bagian Purchasing', 6200007, '6200007', 'SPPA', '2021-07-27 00:00:00', 20210727, '2021-07-27 19:19:31', 4, 'FINANCE & ACCOUNTING', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200007, 'EST-SPPA/SWJ/07/21/6200007', '2021-07-27 00:00:00', 'test', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-27 00:00:00', 202108, 2021, '2021-07-27 19:19:31', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-28 17:43:33', 'SITE', 1, 0, '0', 7, '0'),
(53, 'Bagian Purchasing', 7200003, '7200003', 'SPPA', '2021-07-29 00:00:00', 20210729, '2021-07-29 11:53:04', 1, 'TANAMAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200003, 'EST-SPPA/SWJ/07/21/7200003', '2021-07-29 00:00:00', 'test gani', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 11:53:04', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 11:53:37', 'SITE', 1, 0, '0', 0, '0'),
(54, 'Bagian Purchasing', 6200008, '6200008', 'SPPI', '2021-07-29 00:00:00', 20210729, '2021-07-29 16:12:57', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200008, 'EST-SPPI/SWJ/07/21/6200008', '2021-07-29 00:00:00', 'test', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 16:12:57', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 16:13:18', 'SITE', 1, 0, '0', 0, '0'),
(55, 'Bagian Purchasing', 6200009, '6200009', 'SPPA', '2021-07-29 00:00:00', 20210729, '2021-07-29 17:49:28', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200009, 'EST-SPPA/SWJ/07/21/6200009', '2021-07-29 00:00:00', 'test', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 17:49:28', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 17:50:20', 'SITE', 1, 0, '0', 0, '0'),
(56, 'Bagian Purchasing', 6200010, '6200010', 'SPPA', '2021-07-29 00:00:00', 20210729, '2021-07-29 18:32:15', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200010, 'EST-SPPA/SWJ/07/21/6200010', '2021-07-29 00:00:00', 'test_gani', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 18:32:15', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 18:32:29', 'SITE', 1, 0, '0', 0, '0'),
(57, 'Bagian Purchasing', 6200011, '6200011', 'SPPI', '2021-07-29 00:00:00', 20210729, '2021-07-29 19:10:43', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200011, 'EST-SPPI/SWJ/07/21/6200011', '2021-07-29 00:00:00', 'test', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 19:10:43', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 19:10:56', 'SITE', 1, 0, '0', 0, '0'),
(58, 'Bagian Purchasing', 6200012, '6200012', 'SPPI', '2021-07-29 00:00:00', 20210729, '2021-07-29 19:53:34', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200012, 'EST-SPPI/SWJ/07/21/6200012', '2021-07-29 00:00:00', 'GENZA : perbaiki di SPP tombol cetak diform inputan itu tidak tampil walau belum di approval..logikanya user mau cetak utk ditandatangani KTUnya..', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 19:53:34', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 19:54:54', 'SITE', 0, 0, '0', 2, '0'),
(59, 'Bagian Purchasing', 7200004, '7200004', 'SPPA', '2021-07-29 00:00:00', 20210729, '2021-07-29 20:07:45', 1, 'TANAMAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200004, 'EST-SPPA/SWJ/07/21/7200004', '2021-07-29 00:00:00', 'Mengisahkan remaja bernama Ping yang tinggal bersama sang kakek di tepi Sungai Cijulang dan rumahnya yang penuh alat musik. Ia mempunyai bakat istimewa dalam bermusik. Namun, diam-diam Ping menyimpan kegelisahan tentang masa depannya yang buram. Hidupnya juga jungkir balik ketika ia harus pindah ke Jakarta dan tinggal bersama keluarga calon Gubernur.\n\nKisah lanjutan Ping akan segera kembali terbit dalam waktu dekat lho! Rapijali 2: Menjadi sudah bisa kamu ikuti pre order-nya di Gramedia.com yang lengkap dengan tanda tangan dan surat dari Dee Lestari. Yuk, pesan sekarang sebelum kehabisan!', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 20:07:45', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, 'SITE', 0, 0, '0', 1, '0'),
(60, 'Bagian Purchasing', 6200013, '6200013', 'SPPA', '2021-07-29 00:00:00', 20210729, '2021-07-29 20:09:52', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200013, 'EST-SPPA/SWJ/07/21/6200013', '2021-07-29 00:00:00', 'Genza....penomoran SPP ingat berdasarkan lokasi PT dan input nya...misal kalau user HO,SITE,PKS,RO...jangan jadi satu kode...ini sptnya pengkodean lupa lagi sdh saya tulis dipapan tulis...itu saya cek ada penambahan SPP ditabel PO nya tapi didata SPP tidak ada...', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 20:09:52', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, 'SITE', 0, 0, '0', 0, '0'),
(61, 'Bagian Purchasing', 7200005, '7200005', 'SPPI', '2021-07-29 00:00:00', 20210729, '2021-07-29 20:13:46', 1, 'TANAMAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200005, 'EST-SPPI/SWJ/07/21/7200005', '2021-07-29 00:00:00', 'spp : tidak bisa koma, di php titik apa koma utk bilang perak? misal 12.78 kg, hati2x jgn terbalik bisa kebaca ribu...', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 20:13:46', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, 'SITE', 0, 0, '0', 1, '0'),
(62, 'Bagian Purchasing', 6200014, '6200014', 'SPPA', '2021-07-29 00:00:00', 20210729, '2021-07-29 20:15:58', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200014, 'EST-SPPA/SWJ/07/21/6200014', '2021-07-29 00:00:00', 'Mengisahkan remaja bernama Ping yang tinggal bersama sang kakek di tepi Sungai Cijulang dan rumahnya yang penuh alat musik. Ia mempunyai bakat istimewa dalam bermusik. Namun, diam-diam Ping menyimpan kegelisahan tentang masa depannya yang buram. Hidupnya juga jungkir balik ketika ia harus pindah ke Jakarta dan tinggal bersama keluarga calon Gubernur.\n\nKisah lanjutan Ping akan segera kembali terbit dalam waktu dekat lho! Rapijali 2: Menjadi sudah bisa kamu ikuti pre order-nya di Gramedia.com yang lengkap dengan tanda tangan dan surat dari Dee Lestari. Yuk, pesan sekarang sebelum kehabisan!', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 20:15:58', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, 'SITE', 0, 0, '0', 1, '0'),
(63, 'Bagian Purchasing', 6200015, '6200015', 'SPPA', '2021-07-29 00:00:00', 20210729, '2021-07-29 20:26:22', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200015, 'EST-SPPA/SWJ/07/21/6200015', '2021-07-29 00:00:00', 'sebelum approval harusnya bisa ditambahkan barangnya...apakah ada?..jika sudah diapproval tidak bisa tambagkan barangnya..', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 20:26:22', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-29 20:27:03', 'SITE', 1, 0, '0', 0, '0'),
(64, 'Bagian Purchasing', 6200016, '6200016', 'SPPI', '2021-07-29 00:00:00', 20210729, '2021-07-29 20:28:54', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200016, 'EST-SPPI/SWJ/07/21/6200016', '2021-07-29 00:00:00', 'sebelum approval harusnya bisa ditambahkan barangnya...apakah ada?..jika sudah diapproval tidak bisa tambagkan barangnya..', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 20:28:54', 40, 'Gani SITE', 'SEBAGIAN', 1, '2021-07-29 20:29:45', 'SITE', 0, 0, '0', 0, '0'),
(65, 'Bagian Purchasing', 6200017, '6200017', 'SPPA', '2021-07-29 00:00:00', 20210729, '2021-07-29 20:40:07', 4, 'FINANCE & ACCOUNTING', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200017, 'EST-SPPA/SWJ/07/21/6200017', '2021-07-29 00:00:00', 'harusnya jika tidak memilih barang dilist SPP diblokir dahulu...jika belum memilih pesannya data belum dipilih...ini human error terjadi jika lupa memilih\n', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 20:40:07', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, 'SITE', 0, 0, '0', 0, '0'),
(67, 'Bagian Purchasing', 7200006, '7200006', 'SPPI', '2021-07-29 00:00:00', 20210729, '2021-07-29 20:44:42', 1, 'TANAMAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200006, 'EST-SPPI/SWJ/07/21/7200006', '2021-07-29 00:00:00', 'utk aproval jika sebagian yg tampil statusnya harusnya tulisannya sebagian..atau tidak Full silahkan diatur', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-29 00:00:00', 202108, 2021, '2021-07-29 20:44:42', 40, 'Gani SITE', 'SEBAGIAN', 2, '2021-07-29 20:45:13', 'SITE', 0, 0, '0', 1, '0'),
(68, 'Bagian Purchasing', 7200007, '7200007', 'SPPA', '2021-07-30 00:00:00', 20210730, '2021-07-30 10:50:42', 1, 'TANAMAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200007, 'EST-SPPA/SWJ/07/21/7200007', '2021-07-30 00:00:00', '132543647890-=!@#$%^&*()_+qwertyuiop[]\\asdfghjkl;''zxcvbnm,./{}|:"<>?', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-30 00:00:00', 202108, 2021, '2021-07-30 10:50:42', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 13:33:41', 'SITE', 1, 0, '0', 1, '0'),
(69, 'Bagian Purchasing', 6200018, '6200018', 'SPPA', '2021-07-30 00:00:00', 20210730, '2021-07-30 10:54:38', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200018, 'EST-SPPA/SWJ/07/21/6200018', '2021-07-30 00:00:00', 'genza bisa dak ditambahkan di tabel SPP kolom PO...fungsinya utk ketahui bahwa SPP tsb sdh ada PO nya...judulnya status PO...isinya jika sdh PO tulisan PO kalau belum PO kosong saja\n', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-30 00:00:00', 202108, 2021, '2021-07-30 10:54:38', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 10:54:49', 'SITE', 1, 0, '0', 1, '0'),
(70, 'Bagian Purchasing', 7200008, '7200008', 'SPP', '2021-07-30 00:00:00', 20210730, '2021-07-30 11:00:10', 1, 'TANAMAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200008, 'EST-SPP/SWJ/07/21/7200008', '2021-07-30 00:00:00', 'ini posisi user site ya...untuk pilihan SPP dikala input PO hanya ditampilkan SPPI saja..yg lain jangan ditampilkan kecuali SPPA bisa disite..\n', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-30 00:00:00', 202108, 2021, '2021-07-30 11:00:10', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 11:00:21', 'SITE', 0, 0, '0', 0, '0'),
(71, 'Bagian Purchasing', 7200009, '7200009', 'SPPK', '2021-07-30 00:00:00', 20210730, '2021-07-30 11:01:14', 7, 'HRD & UMUM', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200009, 'EST-SPPK/SWJ/07/21/7200009', '2021-07-30 00:00:00', 'ini posisi user site ya...untuk pilihan SPP dikala input PO hanya ditampilkan SPPI saja..yg lain jangan ditampilkan kecuali SPPA bisa disite..\n', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-30 00:00:00', 202108, 2021, '2021-07-30 11:01:14', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 11:02:03', 'SITE', 0, 0, '0', 1, '0'),
(72, 'Bagian Purchasing', 7200010, '7200010', 'SPPI', '2021-07-30 00:00:00', 20210730, '2021-07-30 13:25:56', 10, 'GIS', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200010, 'EST-SPPI/SWJ/07/21/7200010', '2021-07-30 00:00:00', 'QTY SPP harus sesuai apa adanya di PO..ini kondisinya di PO dibulatkan " di SPP qty 1300.89, input PO qty 1,301 "\n', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-30 00:00:00', 202108, 2021, '2021-07-30 13:25:56', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 13:26:10', 'SITE', 1, 0, '0', 1, '0'),
(73, 'Bagian Purchasing', 7200011, '7200011', 'SPPI', '2021-07-30 00:00:00', 20210730, '2021-07-30 13:41:26', 3, 'PABRIK', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200011, 'EST-SPPI/SWJ/07/21/7200011', '2021-07-30 00:00:00', 'Penomoeran Divisi 07 SSP', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-30 00:00:00', 202108, 2021, '2021-07-30 13:41:26', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 13:41:44', 'SITE', 1, 0, '0', 0, '0'),
(74, 'Bagian Purchasing', 6200019, '6200019', 'SPPA', '2021-07-30 00:00:00', 20210730, '2021-07-30 14:09:32', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200019, 'EST-SPPA/SWJ/07/21/6200019', '2021-07-30 00:00:00', 'Perhitungan PO', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-07-30 00:00:00', 202108, 2021, '2021-07-30 14:09:32', 40, 'Gani SITE', 'DISETUJUI', 1, '2021-07-30 14:09:46', 'SITE', 1, 0, '0', 1, '0'),
(75, 'Bagian Purchasing', 7200012, '7200012', 'SPPA', '2021-07-30 00:00:00', 20210730, '2021-07-30 22:47:00', 1, 'TANAMAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200012, 'EST-SPPA/SWJ/08/21/7200012', '2021-08-01 00:00:00', 'test', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-08-01 00:00:00', 202108, 2021, '2021-08-01 22:47:00', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, 'SITE', 0, 0, '0', 1, '0'),
(76, 'Bagian Purchasing', 7200013, '7200013', 'SPPI', '2021-08-01 00:00:00', 20210801, '2021-08-01 23:20:28', 3, 'PABRIK', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200013, 'EST-SPPI/SWJ/08/21/7200013', '2021-08-01 00:00:00', 'test', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-08-01 00:00:00', 202108, 2021, '2021-08-01 23:20:28', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, 'SITE', 0, 0, '0', 0, '0'),
(77, 'Bagian Purchasing', 7200014, '7200014', 'SPPA', '2021-08-02 00:00:00', 20210802, '2021-08-02 15:06:21', 1, 'TANAMAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200014, 'EST-SPPA/SWJ/08/21/7200014', '2021-08-02 00:00:00', 'Test Gani', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-08-02 00:00:00', 202108, 2021, '2021-08-02 15:06:21', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, 'SITE', 0, 0, '0', 1, '0'),
(81, 'Bagian Purchasing', 7200015, '7200015', 'SPPA', '2021-08-02 00:00:00', 20210802, '2021-08-02 21:38:29', 1, 'TANAMAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200015, 'EST-SPPA/SWJ/08/21/7200015', '2021-08-02 00:00:00', 'test_gani', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-08-02 00:00:00', 202108, 2021, '2021-08-02 21:38:29', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, 'SITE', 0, 0, '0', 0, '0'),
(82, 'Bagian Purchasing', 7200016, '7200016', 'SPP', '2021-08-03 00:00:00', 20210803, '2021-08-03 15:31:42', 1, 'TANAMAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 7200016, 'EST-SPP/SWJ/08/21/7200016', '2021-08-03 00:00:00', 'test_gani', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-08-03 00:00:00', 202108, 2021, '2021-08-03 15:31:42', 40, 'Gani SITE', 'DALAM PROSES', 0, NULL, 'SITE', 0, 0, '0', 1, '0'),
(83, 'Bagian Purchasing', 6200020, '6200020', 'SPPA', '2021-08-03 00:00:00', 20210803, '2021-08-03 15:48:40', 1, 'TANAMAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200020, 'EST-SPPA/SWJ/08/21/6200020', '2021-08-03 00:00:00', 'test_gani', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-08-03 00:00:00', 202108, 2021, '2021-08-03 15:48:40', 40, 'Gani SITE', 'SEBAGIAN', 2, '2021-08-03 15:49:11', 'SITE', 0, 0, '0', 1, '0'),
(84, 'Bagian Purchasing', 6200021, '6200021', 'SPPI', '2021-08-04 00:00:00', 20210804, '2021-08-08 15:06:55', 11, 'MIS', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6200021, 'EST-SPPI/SWJ/08/21/6200021', '2021-08-04 00:00:00', 'hai pujaan hati', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2021-08-04 00:00:00', 202108, 2021, '2021-08-04 15:06:55', 13, 'User SITE', 'DISETUJUI', 1, '2021-08-04 15:07:18', 'SITE', 1, 0, '0', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `ppo_history`
--

CREATE TABLE IF NOT EXISTS `ppo_history` (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `kpd` varchar(50) DEFAULT NULL,
  `noppo` double DEFAULT NULL,
  `noppotxt` varchar(10) DEFAULT NULL,
  `jenis` varchar(10) DEFAULT NULL,
  `tglppo` datetime DEFAULT NULL,
  `tglppotxt` double DEFAULT NULL,
  `tgltrm` datetime DEFAULT NULL,
  `kodedept` double DEFAULT NULL,
  `namadept` varchar(100) DEFAULT NULL,
  `noref` double DEFAULT NULL,
  `noreftxt` varchar(30) DEFAULT NULL,
  `tglref` datetime DEFAULT NULL,
  `ket` varchar(90) DEFAULT NULL,
  `no_acc` double DEFAULT NULL,
  `ket_acc` varchar(100) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kodept` varchar(4) DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `periodetxt` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `tglisi` datetime DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `status2` smallint(6) DEFAULT NULL,
  `TGL_APPROVE` datetime DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `po` smallint(6) DEFAULT NULL,
  `kode_budget` double DEFAULT NULL,
  `grup` varchar(255) DEFAULT NULL,
  `main_acct` double DEFAULT NULL,
  `nama_main` varchar(255) DEFAULT NULL,
  `keterangan_transaksi` text,
  `log` text,
  `tgl_transaksi` datetime DEFAULT NULL,
  `user_transaksi` varchar(50) DEFAULT NULL,
  `client_ip` varchar(50) DEFAULT NULL,
  `client_platform` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`no_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pp_history`
--

CREATE TABLE IF NOT EXISTS `pp_history` (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `nopp` double DEFAULT NULL,
  `nopptxt` varchar(7) DEFAULT NULL,
  `nopo` double DEFAULT NULL,
  `nopotxt` varchar(7) DEFAULT NULL,
  `tglpp` datetime DEFAULT NULL,
  `tglpptxt` double DEFAULT NULL,
  `tglpo` datetime DEFAULT NULL,
  `tglpotxt` double DEFAULT NULL,
  `ref_pp` varchar(50) DEFAULT NULL,
  `ref_po` varchar(255) DEFAULT NULL,
  `kode_supply` double DEFAULT NULL,
  `kode_supplytxt` varchar(7) DEFAULT NULL,
  `nama_supply` varchar(90) DEFAULT NULL,
  `kepada` varchar(60) DEFAULT NULL,
  `bayar` varchar(10) DEFAULT NULL,
  `KURS` varchar(5) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `pajak` double DEFAULT NULL,
  `jumlahpo` double DEFAULT NULL,
  `KODE_BPO` double DEFAULT NULL,
  `jumlah_bpo` double DEFAULT NULL,
  `total_po` double DEFAULT NULL,
  `terbilang` varchar(255) DEFAULT NULL,
  `ket` varchar(90) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kodept` varchar(5) DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `txtperiode` double DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `tglisi` datetime DEFAULT NULL,
  `status_vou` smallint(6) DEFAULT NULL,
  `no_vou` double DEFAULT NULL,
  `no_voutxt` varchar(20) DEFAULT NULL,
  `tgl_vou` datetime DEFAULT NULL,
  `tgl_voutxt` double DEFAULT NULL,
  `tgl_bayar_real` datetime DEFAULT NULL,
  `kasir_bayar` double DEFAULT NULL,
  `kode_budget` double DEFAULT NULL,
  `grup` varchar(255) DEFAULT NULL,
  `main_account` double DEFAULT NULL,
  `nama_account` varchar(255) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `keterangan_transaksi` text,
  `log` text,
  `tgl_transaksi` datetime DEFAULT NULL,
  `user_transaksi` varchar(50) DEFAULT NULL,
  `client_ip` varchar(50) DEFAULT NULL,
  `client_platform` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`no_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pt`
--

CREATE TABLE IF NOT EXISTS `pt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pt` varchar(4) NOT NULL,
  `kode` double DEFAULT NULL,
  `kodetxt` varchar(5) DEFAULT NULL,
  `PT` varchar(100) DEFAULT NULL,
  `namaalias` varchar(50) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `kode_kud` varchar(5) DEFAULT NULL,
  `kud` varchar(50) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `alamatnpwp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `pt`
--

INSERT INTO `pt` (`id`, `kode_pt`, `kode`, `kodetxt`, `PT`, `namaalias`, `lokasi`, `kode_kud`, `kud`, `npwp`, `alamatnpwp`) VALUES
(16, '01', 6, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MSAL (SITE)', 'SITE', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140'),
(17, '01', 1, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', 'PT.MSAL (HO)', 'HO', '-', '-', '02.380.716.7-019.000', 'Jl.Radio Dalam Raya No. 87A, RT.005/RW.014, Gandaria Utara, Kebayoran Baru, Jakarta Selatan, DKI Jakarta Raya-12140'),
(18, '01', 2, '02', 'PT.MULIA SAWIT AGRO LESTARI (RO)', 'PT.MSAL (RO)', 'RO', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140'),
(19, '01', 3, '03', 'PT.MULIA SAWIT AGRO LESTARI (PKS)', 'PT.MSAL (PKS)', 'PKS', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140');

-- --------------------------------------------------------

--
-- Table structure for table `pt_copy`
--

CREATE TABLE IF NOT EXISTS `pt_copy` (
  `id` int(11) NOT NULL DEFAULT '0',
  `kode` double DEFAULT NULL,
  `kodetxt` varchar(5) DEFAULT NULL,
  `PT` varchar(100) DEFAULT NULL,
  `namaalias` varchar(50) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `kode_kud` varchar(5) DEFAULT NULL,
  `kud` varchar(50) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `alamatnpwp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pt_copy`
--

INSERT INTO `pt_copy` (`id`, `kode`, `kodetxt`, `PT`, `namaalias`, `lokasi`, `kode_kud`, `kud`, `npwp`, `alamatnpwp`) VALUES
(16, 6, '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'PT.MSAL (ESTATE1)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140'),
(17, 1, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', 'PT.MSAL(HO)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140'),
(18, 2, '02', 'PT.MULIA SAWIT AGRO LESTARI (RO)', 'PT.MSAL (RO)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140'),
(19, 3, '03', 'PT.MULIA SAWIT AGRO LESTARI (PKS)', 'PT.MSAL (PKS)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140'),
(21, 7, '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'PT.MSAL (ESTATE2)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140');

-- --------------------------------------------------------

--
-- Table structure for table `register_stok`
--

CREATE TABLE IF NOT EXISTS `register_stok` (
  `id` int(11) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(50) DEFAULT NULL,
  `namabar` varchar(90) DEFAULT NULL,
  `grup` varchar(150) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `tgltxt` double DEFAULT NULL,
  `potxt` varchar(10) DEFAULT NULL,
  `ttgtxt` varchar(10) DEFAULT NULL,
  `skbtxt` varchar(10) DEFAULT NULL,
  `adjttgtxt` varchar(10) DEFAULT NULL,
  `adjskbtxt` varchar(10) DEFAULT NULL,
  `retttgtxt` varchar(50) DEFAULT NULL,
  `retskbtxt` varchar(50) DEFAULT NULL,
  `no_slrh` varchar(10) DEFAULT NULL,
  `ket` mediumtext,
  `qty` double DEFAULT NULL,
  `masuk_qty` double DEFAULT NULL,
  `keluar_qty` double DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `kodept` varchar(5) DEFAULT NULL,
  `namapt` varchar(250) DEFAULT NULL,
  `txtperiode` double DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `refpo` varchar(255) DEFAULT NULL,
  `noref` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retskb`
--

CREATE TABLE IF NOT EXISTS `retskb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noretur` double DEFAULT NULL,
  `norefretur` varchar(50) NOT NULL,
  `tgl` datetime DEFAULT NULL,
  `nobkb` double DEFAULT NULL,
  `norefbkb` varchar(50) NOT NULL,
  `tglinput` datetime DEFAULT NULL,
  `txttgl` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `periode1` datetime DEFAULT NULL,
  `periode2` datetime DEFAULT NULL,
  `txtperiode1` double DEFAULT NULL,
  `txtperiode2` double DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kode` double DEFAULT NULL,
  `devisi` varchar(100) NOT NULL,
  `kode_dev` varchar(4) NOT NULL,
  `no_ba` varchar(200) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `bag` varchar(200) DEFAULT NULL,
  `batal` smallint(6) DEFAULT '0',
  `alasan_batal` text,
  `id_user` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `cetak` int(5) DEFAULT NULL,
  `status_approval` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ret_masukitem`
--

CREATE TABLE IF NOT EXISTS `ret_masukitem` (
  `id` int(11) DEFAULT NULL,
  `no_ret` double DEFAULT NULL,
  `no_rettxt` varchar(50) DEFAULT NULL,
  `kdpt` double DEFAULT NULL,
  `nopo` double DEFAULT NULL,
  `nopotxt` varchar(50) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `afd` varchar(10) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(11) DEFAULT NULL,
  `nabar` varchar(50) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(50) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `tgl_ret` datetime DEFAULT NULL,
  `ttg` double DEFAULT NULL,
  `tglinput` datetime DEFAULT NULL,
  `txttgl` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `txtperiode` double DEFAULT NULL,
  `txttgl_ret` double DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ret_skbitem`
--

CREATE TABLE IF NOT EXISTS `ret_skbitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noretur` double DEFAULT NULL,
  `norefretur` varchar(50) NOT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(20) DEFAULT NULL,
  `nabar` varchar(200) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(200) DEFAULT NULL,
  `kodept` double DEFAULT NULL,
  `pt` varchar(200) DEFAULT NULL,
  `afd` varchar(50) DEFAULT NULL,
  `blok` varchar(10) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `nobkb` double DEFAULT NULL,
  `norefbkb` varchar(50) NOT NULL,
  `tglinput` datetime DEFAULT NULL,
  `txttgl` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `txtperiode` double DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `kodebeban` double DEFAULT NULL,
  `kodebebantxt` varchar(50) DEFAULT NULL,
  `ketbeban` varchar(150) DEFAULT NULL,
  `kodesub` double DEFAULT NULL,
  `kodesubtxt` varchar(50) DEFAULT NULL,
  `ketsub` varchar(100) DEFAULT NULL,
  `batal` smallint(6) DEFAULT '0',
  `alasan_batal` text,
  `id_user` int(4) NOT NULL,
  `user` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ret_stokmasuk`
--

CREATE TABLE IF NOT EXISTS `ret_stokmasuk` (
  `id` int(11) DEFAULT NULL,
  `no_ret` double DEFAULT NULL,
  `no_retTXT` varchar(50) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `tgl_ret` datetime DEFAULT NULL,
  `nopo` double DEFAULT NULL,
  `nopotxt` varchar(50) DEFAULT NULL,
  `kode_supply` varchar(50) DEFAULT NULL,
  `nama_supply` varchar(90) DEFAULT NULL,
  `ttg` double DEFAULT NULL,
  `no_pengtr` varchar(50) DEFAULT NULL,
  `lokasi_gudang` varchar(250) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `tglinput` datetime DEFAULT NULL,
  `txttgl` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `periode1` datetime DEFAULT NULL,
  `periode2` datetime DEFAULT NULL,
  `txtperiode1` double DEFAULT NULL,
  `txtperiode2` double DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kode` double DEFAULT NULL,
  `txttgl_ret` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stockawal`
--

CREATE TABLE IF NOT EXISTS `stockawal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pt` varchar(100) DEFAULT NULL,
  `KODE` varchar(5) DEFAULT NULL,
  `afd` varchar(10) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(20) DEFAULT NULL,
  `nabar` varchar(250) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(50) DEFAULT NULL,
  `saldoawal_qty` double DEFAULT NULL,
  `saldoawal_nilai` double DEFAULT NULL,
  `tglinput` datetime DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `saldoakhir_qty` double DEFAULT NULL,
  `saldoakhir_nilai` double DEFAULT NULL,
  `nilai_masuk` double DEFAULT NULL,
  `nilai_keluar` double DEFAULT NULL,
  `QTY_MASUK` double DEFAULT NULL,
  `QTY_KELUAR` double DEFAULT NULL,
  `QTY_ADJMASUK` double DEFAULT NULL,
  `QTY_ADJKELUAR` double DEFAULT NULL,
  `HARGARAT` double DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `txtperiode` int(11) DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL,
  `account` varchar(50) DEFAULT NULL,
  `ket_account` varchar(50) DEFAULT NULL,
  `minstok` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `stockawal`
--

INSERT INTO `stockawal` (`id`, `pt`, `KODE`, `afd`, `kodebar`, `kodebartxt`, `nabar`, `satuan`, `grp`, `saldoawal_qty`, `saldoawal_nilai`, `tglinput`, `thn`, `saldoakhir_qty`, `saldoakhir_nilai`, `nilai_masuk`, `nilai_keluar`, `QTY_MASUK`, `QTY_KELUAR`, `QTY_ADJMASUK`, `QTY_ADJKELUAR`, `HARGARAT`, `periode`, `txtperiode`, `ket`, `account`, `ket_account`, `minstok`) VALUES
(1, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 'PUPUK', 0, 0, '2021-07-27 19:56:44', 2021, 107.5, 202500, 202500, 0, 107.5, 0, NULL, NULL, 0, '2021-07-27 00:00:00', 202108, NULL, '-', '-', NULL),
(2, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505790000151, '102505790000151', 'PACKING TBA', 'ROL', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-27 19:58:10', 2021, 7, 1100000, 1100000, 0, 7, 0, NULL, NULL, 0, '2021-07-27 00:00:00', 202108, NULL, '-', '-', NULL),
(3, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505790000508, '102505790000508', 'OBAT SKUR KLEP', 'BTL', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-27 19:58:13', 2021, 7, 280000, 280000, 0, 7, 0, NULL, NULL, 0, '2021-07-27 00:00:00', 202108, NULL, '-', '-', NULL),
(4, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505760000067, '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 'CONSTRUCTION MATERIAL', 0, 0, '2021-07-27 19:58:15', 2021, 5.5, 27500, 27500, 0, 5.5, 0, NULL, NULL, 0, '2021-07-27 00:00:00', 202108, NULL, '-', '-', NULL),
(5, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100009, '102505010100009', 'PUPUK DOLOMITE', 'KG', 'PUPUK', 0, 0, '2021-07-27 20:17:07', 2021, 3, 4950, 4950, 0, 3, 0, NULL, NULL, 0, '2021-07-27 00:00:00', 202108, NULL, '-', '-', NULL),
(6, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100008, '102505010100008', 'PUPUK CUSO4', 'KG', 'PUPUK', 0, 0, '2021-07-27 20:17:09', 2021, 3.5, 26400.5, 26400.5, 0, 3.5, 0, NULL, NULL, 0, '2021-07-27 00:00:00', 202108, NULL, '-', '-', NULL),
(7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100010, '102505010100010', 'PUPUK HI-KAY', 'KG', 'PUPUK', 0, 0, '2021-07-27 20:17:11', 2021, 3, 15987, 15987, 0, 3, 0, NULL, NULL, 0, '2021-07-27 00:00:00', 202108, NULL, '-', '-', NULL),
(8, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505790000134, '102505790000134', 'MOTOR SIEMENS 5,5 HP-4KW', 'PCS', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-28 22:28:31', 2021, 10, 2000000, 2000000, 0, 10, 0, NULL, NULL, 0, '2021-07-28 00:00:00', 202108, NULL, '-', '-', NULL),
(9, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505760000097, '102505760000097', 'CAT HITAM SUZUKA', 'KLG', 'CONSTRUCTION MATERIAL', 0, 0, '2021-07-30 14:27:45', 2021, 2, 400000, 400000, 0, 2, 0, NULL, NULL, 0, '2021-07-30 00:00:00', 202108, NULL, '-', '-', NULL),
(10, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505760000061, '102505760000061', 'BESI COR 8MM', 'BTG', 'CONSTRUCTION MATERIAL', 0, 0, '2021-07-30 14:30:05', 2021, 10, 1000000, 1000000, 0, 10, 0, NULL, NULL, 0, '2021-07-30 00:00:00', 202108, NULL, '-', '-', NULL),
(11, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505490000241, '102505490000241', 'BEARING NS 6306', 'PCS', 'SPARE PART UMUM MESIN MESIN NON PABRIK', 0, 0, '2021-08-01 22:47:48', 2021, 2, 20000, 20000, 0, 2, 0, NULL, NULL, 0, '2021-08-01 00:00:00', 202108, NULL, '-', '-', NULL),
(12, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505410000476, '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 'SPARE PART TRUK', 0, 0, '2021-08-02 15:11:39', 2021, 7, 700000, 700000, 0, 7, 0, NULL, NULL, 0, '2021-08-02 00:00:00', 202108, NULL, '-', '-', NULL),
(13, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505760000088, '102505760000088', 'CANGKUL AYAM ASLI', 'BH', 'CONSTRUCTION MATERIAL', 0, 0, '2021-08-04 15:10:37', 2021, 50, 50000, 50000, 0, 50, 0, NULL, NULL, 0, '2021-08-04 00:00:00', 202108, NULL, '-', '-', NULL),
(14, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505760000087, '102505760000087', 'CANGKUL AYAM STD', 'BH', 'CONSTRUCTION MATERIAL', 0, 0, '2021-08-04 15:10:39', 2021, 40, 40000, 50000, 10000, 50, 10, NULL, NULL, 0, '2021-08-04 00:00:00', 202108, NULL, '-', '-', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stockawal_bulanan_devisi`
--

CREATE TABLE IF NOT EXISTS `stockawal_bulanan_devisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pt` varchar(100) DEFAULT NULL,
  `KODE` varchar(5) DEFAULT NULL,
  `devisi` varchar(100) NOT NULL,
  `kode_dev` varchar(4) NOT NULL,
  `afd` varchar(10) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(20) DEFAULT NULL,
  `nabar` varchar(250) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(50) DEFAULT NULL,
  `saldoawal_qty` double DEFAULT NULL,
  `saldoawal_nilai` double DEFAULT NULL,
  `tglinput` datetime DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `saldoakhir_qty` double DEFAULT NULL,
  `saldoakhir_nilai` double DEFAULT NULL,
  `nilai_masuk` double DEFAULT NULL,
  `nilai_keluar` double DEFAULT NULL,
  `QTY_MASUK` double DEFAULT NULL,
  `QTY_KELUAR` double DEFAULT NULL,
  `QTY_ADJMASUK` double DEFAULT NULL,
  `QTY_ADJKELUAR` double DEFAULT NULL,
  `HARGAPORAT` double DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `txtperiode` int(11) DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL,
  `account` varchar(50) DEFAULT NULL,
  `ket_account` varchar(50) DEFAULT NULL,
  `minstok` double DEFAULT NULL,
  `tgl_transaksi` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `stockawal_bulanan_devisi`
--

INSERT INTO `stockawal_bulanan_devisi` (`id`, `pt`, `KODE`, `devisi`, `kode_dev`, `afd`, `kodebar`, `kodebartxt`, `nabar`, `satuan`, `grp`, `saldoawal_qty`, `saldoawal_nilai`, `tglinput`, `thn`, `saldoakhir_qty`, `saldoakhir_nilai`, `nilai_masuk`, `nilai_keluar`, `QTY_MASUK`, `QTY_KELUAR`, `QTY_ADJMASUK`, `QTY_ADJKELUAR`, `HARGAPORAT`, `periode`, `txtperiode`, `ket`, `account`, `ket_account`, `minstok`, `tgl_transaksi`) VALUES
(1, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 'PUPUK', 0, 0, '2021-07-27 19:56:44', 2021, 101.5, NULL, NULL, NULL, 101.5, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 19:56:44'),
(2, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505790000151, '102505790000151', 'PACKING TBA', 'ROL', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-27 19:58:10', 2021, 5, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 19:58:10'),
(3, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505790000508, '102505790000508', 'OBAT SKUR KLEP', 'BTL', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-27 19:58:13', 2021, 5, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 19:58:13'),
(4, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505760000067, '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 'CONSTRUCTION MATERIAL', 0, 0, '2021-07-27 19:58:15', 2021, 5, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 19:58:15'),
(5, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 'PUPUK', 0, 0, '2021-07-27 19:58:17', 2021, 6, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 19:58:17'),
(6, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100009, '102505010100009', 'PUPUK DOLOMITE', 'KG', 'PUPUK', 0, 0, '2021-07-27 20:17:08', 2021, 3, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 20:17:08'),
(7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100008, '102505010100008', 'PUPUK CUSO4', 'KG', 'PUPUK', 0, 0, '2021-07-27 20:17:10', 2021, 3.5, NULL, NULL, NULL, 3.5, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 20:17:10'),
(8, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100010, '102505010100010', 'PUPUK HI-KAY', 'KG', 'PUPUK', 0, 0, '2021-07-27 20:17:11', 2021, 3, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 20:17:11'),
(9, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505760000067, '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 'CONSTRUCTION MATERIAL', 0, 0, '2021-07-27 20:21:59', 2021, 0.5, NULL, NULL, NULL, 0.5, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 20:21:59'),
(10, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505790000508, '102505790000508', 'OBAT SKUR KLEP', 'BTL', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-27 20:24:40', 2021, 2, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 20:24:40'),
(11, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505790000151, '102505790000151', 'PACKING TBA', 'ROL', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-27 21:54:17', 2021, 2, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 21:54:17'),
(12, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505790000134, '102505790000134', 'MOTOR SIEMENS 5,5 HP-4KW', 'PCS', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-28 22:28:31', 2021, 10, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, '2021-07-28 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-28 22:28:31'),
(13, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505760000097, '102505760000097', 'CAT HITAM SUZUKA', 'KLG', 'CONSTRUCTION MATERIAL', 0, 0, '2021-07-30 14:27:45', 2021, 2, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, '2021-07-30 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-30 14:27:45'),
(14, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505760000061, '102505760000061', 'BESI COR 8MM', 'BTG', 'CONSTRUCTION MATERIAL', 0, 0, '2021-07-30 14:30:05', 2021, 10, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, '2021-07-30 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-30 14:30:05'),
(15, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505490000241, '102505490000241', 'BEARING NS 6306', 'PCS', 'SPARE PART UMUM MESIN MESIN NON PABRIK', 0, 0, '2021-08-01 22:47:48', 2021, 2, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, '2021-08-01 00:00:00', 202108, '-', '-', '-', NULL, '2021-08-01 22:47:48'),
(16, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505410000476, '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 'SPARE PART TRUK', 0, 0, '2021-08-02 15:11:40', 2021, 5, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, '2021-08-02 00:00:00', 202108, '-', '-', '-', NULL, '2021-08-02 15:11:40'),
(17, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505410000476, '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 'SPARE PART TRUK', 0, 0, '2021-08-02 17:34:24', 2021, 2, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, '2021-08-02 00:00:00', 202108, '-', '-', '-', NULL, '2021-08-02 17:34:24'),
(18, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505760000088, '102505760000088', 'CANGKUL AYAM ASLI', 'BH', 'CONSTRUCTION MATERIAL', 0, 0, '2021-08-04 15:10:37', 2021, 50, NULL, NULL, NULL, 50, NULL, NULL, NULL, NULL, '2021-08-04 00:00:00', 202108, '-', '-', '-', NULL, '2021-08-04 15:10:37'),
(19, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505760000087, '102505760000087', 'CANGKUL AYAM STD', 'BH', 'CONSTRUCTION MATERIAL', 0, 0, '2021-08-04 15:10:39', 2021, 40, NULL, NULL, NULL, 50, 10, NULL, NULL, NULL, '2021-08-04 00:00:00', 202108, '-', '-', '-', NULL, '2021-08-04 15:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `stockawal_harian`
--

CREATE TABLE IF NOT EXISTS `stockawal_harian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pt` varchar(100) DEFAULT NULL,
  `KODE` varchar(5) DEFAULT NULL,
  `devisi` varchar(100) NOT NULL,
  `kode_dev` varchar(4) NOT NULL,
  `afd` varchar(10) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(20) DEFAULT NULL,
  `nabar` varchar(250) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(50) DEFAULT NULL,
  `saldoawal_qty` double DEFAULT NULL,
  `saldoawal_nilai` double DEFAULT NULL,
  `tglinput` datetime DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `saldoakhir_qty` double DEFAULT NULL,
  `saldoakhir_nilai` double DEFAULT NULL,
  `nilai_masuk` double DEFAULT NULL,
  `qty_masuk_per_tgl` double DEFAULT NULL,
  `QTY_MASUK` double DEFAULT NULL,
  `qty_keluar_per_tgl` double DEFAULT NULL,
  `QTY_KELUAR` double DEFAULT NULL,
  `QTY_ADJMASUK` double DEFAULT NULL,
  `QTY_ADJKELUAR` double DEFAULT NULL,
  `HARGAPORAT` double DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `txtperiode` int(11) DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL,
  `account` varchar(50) DEFAULT NULL,
  `ket_account` varchar(50) DEFAULT NULL,
  `minstok` double DEFAULT NULL,
  `tgl_transaksi` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `stockawal_harian`
--

INSERT INTO `stockawal_harian` (`id`, `pt`, `KODE`, `devisi`, `kode_dev`, `afd`, `kodebar`, `kodebartxt`, `nabar`, `satuan`, `grp`, `saldoawal_qty`, `saldoawal_nilai`, `tglinput`, `thn`, `saldoakhir_qty`, `saldoakhir_nilai`, `nilai_masuk`, `qty_masuk_per_tgl`, `QTY_MASUK`, `qty_keluar_per_tgl`, `QTY_KELUAR`, `QTY_ADJMASUK`, `QTY_ADJKELUAR`, `HARGAPORAT`, `periode`, `txtperiode`, `ket`, `account`, `ket_account`, `minstok`, `tgl_transaksi`) VALUES
(1, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 'PUPUK', 0, 0, '2021-07-27 19:56:44', 2021, 101.5, 172500, 172500, NULL, 101.5, NULL, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 19:56:44'),
(2, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505790000151, '102505790000151', 'PACKING TBA', 'ROL', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-27 19:58:10', 2021, 5, 100000, 100000, NULL, 5, NULL, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 19:58:10'),
(3, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505790000508, '102505790000508', 'OBAT SKUR KLEP', 'BTL', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-27 19:58:13', 2021, 5, 200000, 200000, NULL, 5, NULL, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 19:58:13'),
(4, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505760000067, '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 'CONSTRUCTION MATERIAL', 0, 0, '2021-07-27 19:58:15', 2021, 5, 25000, 25000, NULL, 5, NULL, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 19:58:15'),
(5, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 'PUPUK', 0, 0, '2021-07-27 19:58:17', 2021, 6, 30000, 30000, NULL, 6, NULL, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 19:58:17'),
(6, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100009, '102505010100009', 'PUPUK DOLOMITE', 'KG', 'PUPUK', 0, 0, '2021-07-27 20:17:08', 2021, 2, 3300, 3300, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 20:17:08'),
(7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100008, '102505010100008', 'PUPUK CUSO4', 'KG', 'PUPUK', 0, 0, '2021-07-27 20:17:10', 2021, 2, 15086, 15086, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 20:17:10'),
(8, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100010, '102505010100010', 'PUPUK HI-KAY', 'KG', 'PUPUK', 0, 0, '2021-07-27 20:17:11', 2021, 2, 10658, 10658, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 20:17:11'),
(9, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505760000067, '102505760000067', 'CAT MINYAK BIRU @ 1 KG', 'KG', 'CONSTRUCTION MATERIAL', 0, 0, '2021-07-27 20:21:59', 2021, 0.5, 2500, 2500, NULL, 0.5, NULL, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 20:21:59'),
(10, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505790000508, '102505790000508', 'OBAT SKUR KLEP', 'BTL', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-27 20:24:40', 2021, 2, 80000, 80000, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 20:24:40'),
(11, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505790000151, '102505790000151', 'PACKING TBA', 'ROL', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-27 21:54:16', 2021, 2, 1000000, 1000000, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-07-27 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-27 21:54:16'),
(12, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100009, '102505010100009', 'PUPUK DOLOMITE', 'KG', 'PUPUK', 0, 0, '2021-07-28 15:19:59', 2021, 1, 1650, 1650, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-28 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-28 15:19:59'),
(13, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100008, '102505010100008', 'PUPUK CUSO4', 'KG', 'PUPUK', 0, 0, '2021-07-28 15:20:10', 2021, 1.5, 11314.5, 11314.5, NULL, 1.5, NULL, NULL, NULL, NULL, NULL, '2021-07-28 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-28 15:20:10'),
(14, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505010100010, '102505010100010', 'PUPUK HI-KAY', 'KG', 'PUPUK', 0, 0, '2021-07-28 15:20:11', 2021, 1, 5329, 5329, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-28 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-28 15:20:11'),
(15, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505790000134, '102505790000134', 'MOTOR SIEMENS 5,5 HP-4KW', 'PCS', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-28 22:28:31', 2021, 5, 1000000, 1000000, NULL, 5, NULL, NULL, NULL, NULL, NULL, '2021-07-28 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-28 22:28:31'),
(16, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505790000134, '102505790000134', 'MOTOR SIEMENS 5,5 HP-4KW', 'PCS', 'TOOLS & WORKSHOP EQUIPMENT', 0, 0, '2021-07-29 08:41:32', 2021, 5, 1000000, 1000000, NULL, 5, NULL, NULL, NULL, NULL, NULL, '2021-07-29 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-29 08:41:32'),
(17, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505760000097, '102505760000097', 'CAT HITAM SUZUKA', 'KLG', 'CONSTRUCTION MATERIAL', 0, 0, '2021-07-30 14:27:45', 2021, 2, 400000, 400000, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-07-30 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-30 14:27:45'),
(18, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505760000061, '102505760000061', 'BESI COR 8MM', 'BTG', 'CONSTRUCTION MATERIAL', 0, 0, '2021-07-30 14:30:05', 2021, 10, 1000000, 1000000, NULL, 10, NULL, NULL, NULL, NULL, NULL, '2021-07-30 00:00:00', 202108, '-', '-', '-', NULL, '2021-07-30 14:30:05'),
(19, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505490000241, '102505490000241', 'BEARING NS 6306', 'PCS', 'SPARE PART UMUM MESIN MESIN NON PABRIK', 0, 0, '2021-08-01 22:47:48', 2021, 2, 20000, 20000, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-08-01 00:00:00', 202108, '-', '-', '-', NULL, '2021-08-01 22:47:48'),
(20, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', '-', 102505410000476, '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 'SPARE PART TRUK', 0, 0, '2021-08-02 15:11:40', 2021, 5, 500000, 500000, NULL, 5, NULL, NULL, NULL, NULL, NULL, '2021-08-02 00:00:00', 202108, '-', '-', '-', NULL, '2021-08-02 15:11:40'),
(21, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505410000476, '102505410000476', 'BEARING CRANKSHAFT 0.25, 11704-78010', 'SET', 'SPARE PART TRUK', 0, 0, '2021-08-02 17:34:24', 2021, 2, 200000, 200000, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-08-02 00:00:00', 202108, '-', '-', '-', NULL, '2021-08-02 17:34:24'),
(22, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505760000088, '102505760000088', 'CANGKUL AYAM ASLI', 'BH', 'CONSTRUCTION MATERIAL', 0, 0, '2021-08-04 15:10:37', 2021, 50, 50000, 50000, NULL, 50, NULL, NULL, NULL, NULL, NULL, '2021-08-04 00:00:00', 202108, '-', '-', '-', NULL, '2021-08-04 15:10:37'),
(23, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', '-', 102505760000087, '102505760000087', 'CANGKUL AYAM STD', 'BH', 'CONSTRUCTION MATERIAL', 0, 0, '2021-08-04 15:10:39', 2021, 50, 50000, 50000, NULL, 50, NULL, NULL, NULL, NULL, NULL, '2021-08-04 00:00:00', 202108, '-', '-', '-', NULL, '2021-08-04 15:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `stockawal_history`
--

CREATE TABLE IF NOT EXISTS `stockawal_history` (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `KODE` varchar(5) DEFAULT NULL,
  `afd` varchar(10) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(20) DEFAULT NULL,
  `nabar` varchar(250) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(50) DEFAULT NULL,
  `saldoawal_qty` double DEFAULT NULL,
  `saldoawal_nilai` double DEFAULT NULL,
  `tglinput` datetime DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `saldoakhir_qty` double DEFAULT NULL,
  `saldoakhir_nilai` double DEFAULT NULL,
  `nilai_masuk` double DEFAULT NULL,
  `QTY_MASUK` double DEFAULT NULL,
  `QTY_KELUAR` double DEFAULT NULL,
  `QTY_ADJMASUK` double DEFAULT NULL,
  `QTY_ADJKELUAR` double DEFAULT NULL,
  `HARGAPORAT` double DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `txtperiode` int(11) DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL,
  `account` varchar(50) DEFAULT NULL,
  `ket_account` varchar(50) DEFAULT NULL,
  `minstok` double DEFAULT NULL,
  `keterangan_transaksi` text,
  `log` text,
  `tgl_transaksi` datetime DEFAULT NULL,
  `user_transaksi` varchar(50) DEFAULT NULL,
  `client_ip` varchar(50) DEFAULT NULL,
  `client_platform` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`no_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stockkeluar`
--

CREATE TABLE IF NOT EXISTS `stockkeluar` (
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stockkeluar`
--

INSERT INTO `stockkeluar` (`id`, `tgl`, `skb`, `SKBTXT`, `NO_REF`, `nobpb`, `mutasi`, `no_mutasi`, `kode_devisi_mutasi`, `devisi_mutasi`, `kode_pt_mutasi`, `pt_mutasi`, `tglinput`, `txttgl`, `thn`, `periode1`, `periode2`, `txtperiode1`, `txtperiode2`, `alokasi`, `pt`, `kode`, `devisi`, `kode_dev`, `kpd`, `keperluan`, `bag`, `batal`, `alasan_batal`, `id_user`, `USER`, `SUB`, `USER1`, `cetak`, `bhn_bakar`, `jn_alat`, `no_kode`, `hm_km`, `lok_kerja`, `posting`, `approval`, `flag_approval`, `approval_kasie`) VALUES
(2, '2021-08-04 00:00:00', 6200001, '6200001', 'EST-BKB/SWJ/08/2021/6200001', 'EST-BPB/SWJ/08/2021/6600001', NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-04 15:13:59', 20210804, 2021, '2021-08-04 00:00:00', NULL, 202108, NULL, 'null', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', 'User SITE', 'berharap kan baik baik saja', 'PABRIK', 0, NULL, 13, 'User SITE', NULL, NULL, 3, '', '', '', '', '', 0, '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stockkeluar_copy1`
--

CREATE TABLE IF NOT EXISTS `stockkeluar_copy1` (
  `id` int(11) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `skb` double DEFAULT NULL,
  `SKBTXT` varchar(255) DEFAULT NULL,
  `NO_REF` varchar(150) DEFAULT NULL,
  `nobpb` varchar(255) DEFAULT NULL,
  `mutasi` smallint(6) DEFAULT NULL,
  `no_mutasi` double DEFAULT NULL,
  `tujuan_mutasi` varchar(200) DEFAULT NULL,
  `kode_pt_mutasi` varchar(5) DEFAULT NULL,
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
  `kpd` varchar(200) DEFAULT NULL,
  `keperluan` varchar(200) DEFAULT NULL,
  `bag` varchar(200) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `USER` varchar(100) DEFAULT NULL,
  `SUB` varchar(255) DEFAULT NULL,
  `USER1` varchar(255) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `approval` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stockkeluar_history`
--

CREATE TABLE IF NOT EXISTS `stockkeluar_history` (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `skb` double DEFAULT NULL,
  `SKBTXT` varchar(255) DEFAULT NULL,
  `NO_REF` varchar(150) DEFAULT NULL,
  `nobpb` varchar(255) DEFAULT NULL,
  `mutasi` smallint(6) DEFAULT NULL,
  `no_mutasi` double DEFAULT NULL,
  `tujuan_mutasi` varchar(200) DEFAULT NULL,
  `kode_pt_mutasi` varchar(5) DEFAULT NULL,
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
  `kpd` varchar(200) DEFAULT NULL,
  `keperluan` varchar(200) DEFAULT NULL,
  `bag` varchar(200) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `USER` varchar(100) DEFAULT NULL,
  `SUB` varchar(255) DEFAULT NULL,
  `USER1` varchar(255) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `approval` enum('0','1') DEFAULT NULL,
  `flag_approval` enum('0','1') DEFAULT '0',
  `approval_kasie` enum('0','1') DEFAULT '0',
  `keterangan_transaksi` text,
  `log` text,
  `tgl_transaksi` datetime DEFAULT NULL,
  `user_transaksi` varchar(50) DEFAULT NULL,
  `client_ip` varchar(50) DEFAULT NULL,
  `client_platform` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`no_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stockkeluar_mutasi`
--

CREATE TABLE IF NOT EXISTS `stockkeluar_mutasi` (
  `id` int(11) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `skb` double DEFAULT NULL,
  `SKBTXT` varchar(255) DEFAULT NULL,
  `NO_REF` varchar(150) DEFAULT NULL,
  `nobpb` varchar(255) DEFAULT NULL,
  `mutasi` smallint(6) DEFAULT NULL,
  `no_mutasi` double DEFAULT NULL,
  `tujuan_mutasi` varchar(200) DEFAULT NULL,
  `kode_pt_mutasi` varchar(5) DEFAULT NULL,
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
  `kpd` varchar(200) DEFAULT NULL,
  `keperluan` varchar(200) DEFAULT NULL,
  `bag` varchar(200) DEFAULT NULL,
  `batal` smallint(6) DEFAULT NULL,
  `USER` varchar(100) DEFAULT NULL,
  `SUB` varchar(255) DEFAULT NULL,
  `USER1` varchar(255) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `flag_lpb` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stokmasuk`
--

CREATE TABLE IF NOT EXISTS `stokmasuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` datetime DEFAULT NULL,
  `kd_dept` varchar(4) NOT NULL,
  `ket_dept` varchar(100) NOT NULL,
  `nopo` double DEFAULT NULL,
  `nopotxt` varchar(50) DEFAULT NULL,
  `LOKAL` smallint(6) DEFAULT NULL,
  `ASSET` smallint(6) DEFAULT NULL,
  `kode_supply` varchar(50) DEFAULT NULL,
  `nama_supply` varchar(90) DEFAULT NULL,
  `ttg` double DEFAULT NULL,
  `ttgtxt` varchar(255) DEFAULT NULL,
  `no_pengtr` varchar(50) DEFAULT NULL,
  `lokasi_gudang` varchar(250) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `tglinput` datetime DEFAULT NULL,
  `txttgl` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `periode1` datetime DEFAULT NULL,
  `periode2` datetime DEFAULT NULL,
  `txtperiode1` double DEFAULT NULL,
  `txtperiode2` double DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kode` varchar(5) DEFAULT NULL,
  `devisi` varchar(100) NOT NULL,
  `kode_dev` varchar(4) NOT NULL,
  `mutasi` int(11) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `tglppo` datetime DEFAULT NULL,
  `norefppo` varchar(50) NOT NULL,
  `tglpo` datetime DEFAULT NULL,
  `refpo` varchar(255) DEFAULT NULL,
  `noref` varchar(255) DEFAULT NULL,
  `BATAL` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `id_user` int(11) NOT NULL,
  `USER` varchar(100) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `approval` enum('0','1') DEFAULT '0',
  `approval_kasie` enum('0','1') DEFAULT '0',
  `approval_ktu` enum('0','1') DEFAULT '0',
  `flag_lpb` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `stokmasuk`
--

INSERT INTO `stokmasuk` (`id`, `tgl`, `kd_dept`, `ket_dept`, `nopo`, `nopotxt`, `LOKAL`, `ASSET`, `kode_supply`, `nama_supply`, `ttg`, `ttgtxt`, `no_pengtr`, `lokasi_gudang`, `ket`, `tglinput`, `txttgl`, `thn`, `periode1`, `periode2`, `txtperiode1`, `txtperiode2`, `pt`, `kode`, `devisi`, `kode_dev`, `mutasi`, `lokasi`, `tglppo`, `norefppo`, `tglpo`, `refpo`, `noref`, `BATAL`, `alasan_batal`, `id_user`, `USER`, `cetak`, `posting`, `approval`, `approval_kasie`, `approval_ktu`, `flag_lpb`) VALUES
(2, '2021-07-27 00:00:00', '3', 'PABRIK', 6200005, '6200005', 0, 0, '0475', 'TOKO ( KAS )', 6200002, '6200002', '12435467890-0986453421`23425367890-01246385798079-', 'A12', 'Dilihat dari sumber pembuatannya, terdapat dua kelompok besar pupuk: (1) pupuk organik atau pupuk alami (misal pupuk kandang dan kompos) dan (2) pupuk kimia atau pupuk buatan. Pupuk organik mencakup s', '2021-07-27 19:58:10', 20210727, 2021, '2021-07-27 00:00:00', NULL, 202108, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', 0, 'SITE', '2021-07-27 00:00:00', 'EST-SPPA/SWJ/07/21/6200006', '2021-07-27 19:09:13', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 'EST-LPB/SWJ/07/21/6200002', 0, '0', 40, 'Gani SITE', 4, 0, '1', '1', '1', '1'),
(3, '2021-07-27 00:00:00', '1', 'TANAMAN', 6200004, '6200004', 0, 0, '0475', 'TOKO ( KAS )', 6200003, '6200003', '123123', 'A12', 'test', '2021-07-27 20:17:07', 20210727, 2021, '2021-07-27 00:00:00', NULL, 202108, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', 0, 'SITE', '2021-07-27 00:00:00', 'EST-SPPI/SWJ/07/21/6200005', '2021-07-27 18:17:39', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200004', 'EST-LPB/SWJ/07/21/6200003', 0, '0', 40, 'Gani SITE', 2, 0, '1', '1', '1', '1'),
(5, '2021-07-27 00:00:00', '3', 'PABRIK', 6200005, '6200005', 0, 0, '0475', 'TOKO ( KAS )', 6200004, '6200004', '123123', 'A12', 'test', '2021-07-27 20:24:40', 20210727, 2021, '2021-07-27 00:00:00', NULL, 202108, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', 0, 'SITE', '2021-07-27 00:00:00', 'EST-SPPA/SWJ/07/21/6200006', '2021-07-27 19:09:13', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200005', 'EST-LPB/SWJ/07/21/6200004', 0, '0', 40, 'Gani SITE', 7, 0, '1', '1', '1', '1'),
(8, '2021-07-28 00:00:00', '1', 'TANAMAN', 6200004, '6200004', 0, 0, '0475', 'TOKO ( KAS )', 6200005, '6200005', '1234', 'test', 'test', '2021-07-28 15:19:59', 20210728, 2021, '2021-07-28 00:00:00', NULL, 202108, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', 0, 'SITE', '2021-07-27 00:00:00', 'EST-SPPI/SWJ/07/21/6200005', '2021-07-27 18:17:39', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200004', 'EST-LPB/SWJ/07/21/6200005', 0, '0', 40, 'Gani SITE', 10, 0, '1', '1', '1', '1'),
(11, '2021-07-30 00:00:00', '1', 'TANAMAN', 6200018, '6200018', 0, 0, '0475', 'TOKO ( KAS )', 6200006, '6200006', '124343', 'Kebun 1', 'no ref PO combo pilihannya diperbaiki\n', '2021-07-30 14:27:45', 20210730, 2021, '2021-07-30 00:00:00', NULL, 202108, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', 0, 'SITE', '2021-07-30 00:00:00', 'EST-SPPA/SWJ/07/21/6200019', '2021-07-30 00:00:00', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200018', 'EST-LPB/SWJ/07/21/6200006', 0, '0', 40, 'Gani SITE', 1, 0, '1', '1', '1', '1'),
(12, '2021-07-30 00:00:00', '3', 'PABRIK', 6200017, '6200017', 0, 0, '0475', 'TOKO ( KAS )', 6200007, '6200007', '13456', 'Kebun 2', 'jika sdh 0 tidak perlu ditampilkan...saya sdh review 6 bulan yg lalu ini\n', '2021-07-30 14:30:05', 20210730, 2021, '2021-07-30 00:00:00', NULL, 202108, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', 0, 'SITE', '2021-07-30 00:00:00', 'EST-SPPI/SWJ/07/21/7200011', '2021-07-30 00:00:00', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200017', 'EST-LPB/SWJ/07/21/6200007', 0, '0', 40, 'Gani SITE', 1, 0, '1', '1', '1', '1'),
(13, '2021-08-01 00:00:00', '1', 'TANAMAN', 6200012, '6200012', 0, 0, '0475', 'TOKO ( KAS )', 6200008, '6200008', '23456', 'Kebun 2', 'test', '2021-08-01 22:47:48', 20210801, 2021, '2021-08-01 00:00:00', NULL, 202108, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', 0, 'SITE', '2021-07-29 00:00:00', 'EST-SPPA/SWJ/07/21/6200010', '2021-07-29 00:00:00', 'EST/SWJ/PO-LOKAL/JKT/07/21/6200012', 'EST-LPB/SWJ/08/21/6200008', 0, '0', 40, 'Gani SITE', 1, 0, '1', '1', '1', '1'),
(14, '2021-08-02 00:00:00', '1', 'TANAMAN', 6200019, '6200019', 0, 0, '0475', 'TOKO ( KAS )', 6200009, '6200009', '5467', 'Kebun 1', 'test_gani', '2021-08-02 15:11:39', 20210802, 2021, '2021-08-02 00:00:00', NULL, 202108, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', '07', 0, 'SITE', '2021-07-29 00:00:00', 'EST-SPPI/SWJ/07/21/6200011', '2021-08-01 00:00:00', 'EST/SWJ/PO-LOKAL/JKT/08/21/6200019', 'EST-LPB/SWJ/08/21/6200009', 0, '0', 40, 'Gani SITE', 1, 0, '1', '1', '1', '1'),
(18, '2021-08-04 00:00:00', '11', 'MIS', 6200021, '6200021', 0, 0, '0475', 'TOKO ( KAS )', 6200010, '6200010', '1234', 'kebun1', 'munyerr', '2021-08-04 15:10:37', 20210804, 2021, '2021-08-04 00:00:00', NULL, 202108, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', '06', 0, 'SITE', '2021-08-04 00:00:00', 'EST-SPPI/SWJ/08/21/6200021', '2021-08-04 00:00:00', 'EST/SWJ/PO-LOKAL/JKT/08/21/6200021', 'EST-LPB/SWJ/08/21/6200010', 0, '0', 13, 'User SITE', 1, 0, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stokmasuk_history`
--

CREATE TABLE IF NOT EXISTS `stokmasuk_history` (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `nopo` double DEFAULT NULL,
  `nopotxt` varchar(50) DEFAULT NULL,
  `LOKAL` smallint(6) DEFAULT NULL,
  `ASSET` smallint(6) DEFAULT NULL,
  `kode_supply` varchar(50) DEFAULT NULL,
  `nama_supply` varchar(90) DEFAULT NULL,
  `ttg` double DEFAULT NULL,
  `ttgtxt` varchar(255) DEFAULT NULL,
  `no_pengtr` varchar(50) DEFAULT NULL,
  `lokasi_gudang` varchar(250) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `tglinput` datetime DEFAULT NULL,
  `txttgl` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `periode1` datetime DEFAULT NULL,
  `periode2` datetime DEFAULT NULL,
  `txtperiode1` double DEFAULT NULL,
  `txtperiode2` double DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `kode` varchar(5) DEFAULT NULL,
  `mutasi` int(11) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `refpo` varchar(255) DEFAULT NULL,
  `noref` varchar(255) DEFAULT NULL,
  `BATAL` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `USER` varchar(100) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL,
  `keterangan_transaksi` text,
  `log` text,
  `tgl_transaksi` datetime DEFAULT NULL,
  `user_transaksi` varchar(50) DEFAULT NULL,
  `client_ip` varchar(50) DEFAULT NULL,
  `client_platform` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`no_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) DEFAULT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `supplier` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tlp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `usaha` varchar(255) DEFAULT NULL,
  `sales` varchar(50) DEFAULT NULL,
  `lama` double DEFAULT NULL,
  `lamatxt` varchar(10) DEFAULT NULL,
  `npwp` varchar(100) DEFAULT NULL,
  `pkp` varchar(2) DEFAULT NULL,
  `norek` varchar(255) DEFAULT NULL,
  `namabank` varchar(255) DEFAULT NULL,
  `atasnama` varchar(255) DEFAULT NULL,
  `noac15` double DEFAULT NULL,
  `account` varchar(10) DEFAULT NULL,
  `nama_account` varchar(255) DEFAULT NULL,
  `pph` varchar(5) DEFAULT NULL,
  `pph_rule` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `kode`, `supplier`, `alamat`, `tlp`, `fax`, `usaha`, `sales`, `lama`, `lamatxt`, `npwp`, `pkp`, `norek`, `namabank`, `atasnama`, `noac15`, `account`, `nama_account`, `pph`, `pph_rule`) VALUES
(878, '0001', '999 BACKHOE, CV', 'JL. DIPONEGORO 68', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '0', '999 BACKHOE, CV', 'N', '-'),
(879, '0002', 'A YONG, BPK.', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'A YONG, BPK', 'N', '-'),
(880, '0003', 'ABADI JAYA, TOKO', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ABADI JAYA, TOKO', 'N', '-'),
(881, '0004', 'ABADI, PD', 'JL. TOKO TIGA NO.30, JAKARTA KOTA', '021-6904410', '021-6905326', '-', 'IBU.ETTY', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ABADI, PD', 'N', '-'),
(882, '0005', 'ABRAHAM, BPK.', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ABRAHAM, BPK', 'N', '-'),
(883, '0006', 'ACHMAD BAIJURI, BPK.', 'JLN GUNUNG SARI NO.20', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ACHMAD BAIJURI, BPK', 'N', '-'),
(884, '0007', 'ACRYLIC SIGN MATERIAL', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ACRYLIC SIGN MATERIAL', 'N', '-'),
(885, '0008', 'ADAM PERCETAKAN & SABLON', 'T A N G E R A N G', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ADAM PERCETAKAN & SABLON', 'N', '-'),
(886, '0009', 'ADS CARGO', 'PELABUHAN TJ PRIOK DEPO 104D', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ADS CARGO', 'N', '-'),
(887, '0010', 'AGRIMININDO TRACKTOR, PT', 'JLN CILIK RIWUT KM 2', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AGRIMININDO TRACKTOR, PT', 'N', '-'),
(888, '0011', 'AGRITAMA MULTI SARANA, PT', 'Jl. A.Yani, Km 12,360 No.168  Gambut Barat  - Kab.Banjar\nBanjarmasin - Kalimantan Selatan', '0511-4281876', '0511-4283717', '-', 'BP.AGUS', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AGRITAMA MULTI SARANA, PT', 'N', '-'),
(889, '0012', 'AGRO NATURAL, PT', 'JL. BANDENGAN UTARA NO.80 JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AGRO NATURAL, PT', 'N', '-'),
(890, '0013', 'AGRO TANI MANDIRI, UD', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AGRO TANI MANDIRI, UD', 'N', '-'),
(891, '0014', 'AGROMAS GEMILANG INDONESIA, PT', 'KOMP. DHI BLOK KK NO.63 KAPUK MUARA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AGROMAS GEMILANG INDONESIA, PT', 'N', '-'),
(892, '0015', 'AGROTANI UNGGUL LESTARI, PT', 'JL. LAPANGAN BOLA NO.1C KEBUN JERUK', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AGROTANI UNGGUL LESTARI, PT', 'N', '-'),
(893, '0016', 'AGUNG JAYA TEKNIK', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AGUNG JAYA TEKNIK', 'N', '-'),
(894, '0017', 'AGUNG JAYA, TOKO', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AGUNG JAYA, TOKO', 'N', '-'),
(895, '0018', 'AGUSTINI, IBU', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AGUSTINI, IBU', 'N', '-'),
(896, '0019', 'AHMAD BASRI, BPK.', 'PALANGKARAYA-KALTENG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AHMAD BASRI, BPK', 'N', '-'),
(897, '0020', 'AHMAD MAKRUFI, BPK.', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AHMAD MAKRUFI, BPK', 'N', '-'),
(898, '0021', 'AICOM KOMPUTER', 'JLN. KH SYAHDAN BINUS', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AICOM KOMPUTER', 'N', '-'),
(899, '0022', 'AKS JAKARTA, CV', 'JL.MUARA BARU NO.3 A-B-C', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AKS JAKARTA, CV', 'N', '-'),
(900, '0023', 'ALAM JAYA, UD', 'JL MANGGA DUA RAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ALAM JAYA, UD', 'N', '-'),
(901, '0024', 'ALCOM SERVICE CENTER', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ALCOM SERVICE CENTER', 'N', '-'),
(902, '0025', 'ALFA GAYA BAKTI PERTIWI, PT', 'JL.HASANUDDIN H.M NO.20, BANJARMASIN', '0511-335 2160', '0511-335 0809', NULL, 'IBU. SUSI', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ALFA GAYA BAKTI PERTIWI, PT', 'N', '-'),
(903, '0026', 'ALFA LAVAL (MALAYSIA) SDN.BHD', 'MALAYSIA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ALFA LAVAL (MALAYSIA) SDN.BHD', 'N', '-'),
(904, '0027', 'ALTRAK 1978, PT', 'Jl. S.PARMAN NO.17 SAMPIT', '0531-34008', '0531-34007', '-', 'BP. POLTAK MANALU', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ALTRAK 1978, PT', 'N', '-'),
(905, '0028', 'ALUNA BINA TRIBUMI', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ALUNA BINA TRIBUMI', 'N', '-'),
(906, '0029', 'AMAZON MOTOR', 'SUNTER', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AMAZON MOTOR', 'N', '-'),
(907, '0030', 'AMIN, TOKO', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AMIN, TOKO', 'N', '-'),
(908, '0031', 'ANEKA INDAH, FURNITURE SHOP', 'JL. RS.FATMAWATI 50', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ANEKA INDAH, FURNITURE SHOP', 'N', '-'),
(909, '0032', 'ANEKA TANI', 'JL HARYONO MT, KAW PLAZA SAMPIT NO.134', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ANEKA TANI', 'N', '-'),
(910, '0033', 'ANEKA TANI UNGGUL', 'Jln.Irian No.18 Palangkaraya', '0536 - 3235172', '0536 - 3235172', NULL, 'IBU.NAZARIPAH', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ANEKA TANI UNGGUL', 'N', '-'),
(911, '0034', 'ANGGREK, TOKO', 'PALANGKA RAYA - KALIMANTAN TENGAH', '0536-3237464 / 0821-53299775', '0536-3237464', NULL, NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ANGGREK, TOKO', 'N', '-'),
(912, '0035', 'ANGKASA, CV', 'GUDANG 218 TANJUNG PRIOK - PLYRN MERATUS', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ANGKASA, CV', 'N', '-'),
(913, '0036', 'ANGKUTAN BS, PT', 'MEDAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ANGKUTAN BS, PT', 'N', '-'),
(914, '0037', 'ANTAR NIAGA NUSANTARA, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ANTAR NIAGA NUSANTARA, PT', 'N', '-'),
(915, '0038', 'ANUGERAH AC', 'JL. ALTERNATIF CIBUBUR NO.12BB', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ANUGERAH AC', 'N', '-'),
(916, '0039', 'ANUGERAH MUSTIKA OSTINDO, PT', 'KOMP.BOJONG INDAH, JL.PAKIS RAYA 88 CB', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ANUGERAH MUSTIKA OSTINDO, PT', 'N', '-'),
(917, '0040', 'AREK SPORT, TOKO', 'JLN. DAAN MOGOT BARAT JEMBATAN PESING', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AREK SPORT, TOKO', 'N', '-'),
(918, '0041', 'ARMADA ACCESSORIES/BUMEN', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ARMADA ACCESSORIES/BUMEN', 'N', '-'),
(919, '0042', 'ARTHUR PRINTER', 'JL KAPT.P.TENDEAN NO.42 PONCOL JAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ARTHUR PRINTER', 'N', '-'),
(920, '0043', 'ASENG, BPK.', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ASENG, BPK', 'N', '-'),
(921, '0044', 'ASIA DIGITAL', 'STC SENAYAN LT.5 NO.177 JAKARTA', '021-57931916 /17', '021-57931915', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ASIA DIGITAL', 'N', '-'),
(922, '0045', 'ASIAN BEARINDO SEJAHTERA', 'JL LAUTZE 103-105', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ASIAN BEARINDO SEJAHTERA', 'N', '-'),
(923, '0046', 'ASTRA INTERNATIONAL, PT', 'JL. JEND SUDIRMAN KAV.5 JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ASTRA INTERNATIONAL, PT', 'N', '-'),
(924, '0047', 'ASTRIDO JAYA MOBILINDO, PT', 'JL.RS FATMAWATI NO.1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ASTRIDO JAYA MOBILINDO, PT', 'N', '-'),
(925, '0048', 'ASTRIDO TOYOTA', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ASTRIDO TOYOTA', 'N', '-'),
(926, '0049', 'ASURANSI CENTRAL ASIA, PT', 'WISMA ASIA LT.10, 12-15', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ASURANSI CENTRAL ASIA, PT', 'N', '-'),
(927, '0050', 'ASURANSI TAKAFUL UMUM, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ASURANSI TAKAFUL UMUM, PT', 'N', '-'),
(928, '0051', 'ATRISCO MUTIARA, PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'ATRISCO MUTIARA, PT', 'N', '-'),
(929, '0052', 'AUDIO PLAZA', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AUDIO PLAZA', 'N', '-'),
(930, '0053', 'AUTO 2000 - BEKASI TIMUR', 'JL DIPONEGORO NO.38 BEKASI 17510', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AUTO 2000 - BEKASI TIMUR', 'N', '-'),
(931, '0054', 'AUTO 2000 - JAKARTA', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AUTO 2000 - JAKARTA', 'N', '-'),
(932, '0055', 'AUTO 2000 - PURI KEMBANGAN', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AUTO 2000 - PURI KEMBANGAN', 'N', '-'),
(933, '0056', 'AW DIESEL, TOKO', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010100', 'AW DIESEL, TOKO', 'N', '-'),
(934, '0057', 'BAHAGIA TEKNIK, CV', 'JL.CICURUG RAYA NO.98 KM 2, TANGERANG', '021-7076 7704 / 5980072', '021-598 6154', '-', 'CI. ING', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BAHAGIA TEKNIK, CV', 'N', '-'),
(935, '0058', 'BAHARI BIMA ANFA UNNAS', 'TAMAN PONDOK LEGI III BLOK W NO.9A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BAHARI BIMA ANFA UNNAS', 'N', '-'),
(936, '0059', 'BAHLIAS RESEARCH STATION', 'JLN A.YANI NO.2 PO BOX 1154', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BAHLIAS RESEARCH STATION', 'N', '-'),
(937, '0060', 'BAJA SEJAHTERA MANDIRI', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BAJA SEJAHTERA MANDIRI', 'N', '-'),
(938, '0061', 'BALAI PENELITIAN GETAS', 'SALATIGA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BALAI PENELITIAN GETAS', 'N', '-'),
(939, '0062', 'BALAI PENELITIAN TANAH', 'JL.IR.H.JUANDA NO 98', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BALAI PENELITIAN TANAH', 'N', '-'),
(940, '0063', 'BANINDO RODA PERKASA, PT', 'JL.A.YANI KM 8,2 MANARAP LAMA, K.HANYAR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BANINDO RODA PERKASA, PT', 'N', '-'),
(941, '0064', 'BANJAR AGRO SEJAHTERA,PT', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BANJAR AGRO SEJAHTERA,PT', 'N', '-'),
(942, '0065', 'BANJARMASIN BIRAY UTAMA, PT', 'JLN GUNUNG SARI UJUNG NO.20', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BANJARMASIN BIRAY UTAMA, PT', 'N', '-'),
(943, '0066', 'BANUA PETRA PRIMA, PT', 'JL.H.HASAN BASRI', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BANUA PETRA PRIMA, PT', 'N', '-'),
(944, '0067', 'BANYUWANGI MOTOR, TOKO', 'JL SERAM 5 LANGKAI, PAHANDUT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BANYUWANGI MOTOR, TOKO', 'N', '-'),
(945, '0068', 'BAYUMAS JAYA MANDIRI, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BAYUMAS JAYA MANDIRI, PT', 'N', '-'),
(946, '0069', 'BBS KACA, TOKO', 'PALANGKA RAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BBS KACA, TOKO', 'N', '-'),
(947, '0070', 'BBS, TOKO', 'PASAR KAHAYAN BLOK L-5', '0536-3221997', '0536-3236423', '-', 'BP. IMRAN', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BBS, TOKO', 'N', '-'),
(948, '0071', 'BCS COMPUTER', 'JL. KH.SYAHDAN NO 18 KEMANGGISAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BCS COMPUTER', 'N', '-'),
(949, '0072', 'BEFINDO SEJAHTERA ELEKTRONICS', 'JL. PROF DR LATUMENTEN RAYA NO.2D', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BEFINDO SEJAHTERA ELEKTRONICS', 'N', '-'),
(950, '0073', 'BENGAWAN KARYA SAKTI, PT', 'KAWAN INDUSTRI AGARINDO NO.168, CIKUPA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BENGAWAN KARYA SAKTI, PT', 'N', '-'),
(951, '0074', 'BENGKEL AC & INTERIOR', 'APARTEMEN CITY PARK TOWER B1 NO.62', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BENGKEL AC & INTERIOR', 'N', '-'),
(952, '0075', 'BENGKEL KARYA, CV', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BENGKEL KARYA, CV', 'N', '-'),
(953, '0076', 'BENGKEL MOTOR SS', 'JL. CILIK RIWUT KM 1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BENGKEL MOTOR SS', 'N', '-'),
(954, '0077', 'BENUA MAKMUR PRINTING', 'JL. MUWARDI RAYA NO. 37 GROGOL', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BENUA MAKMUR PRINTING', 'N', '-'),
(955, '0078', 'BERCA CAKRA TEKNOLOGI', 'JL ISKANDAR MUDA 8D JAKARTA SELATAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BERCA CAKRA TEKNOLOGI', 'N', '-'),
(956, '0079', 'BERKAT HANDANY MOTOR', 'KOMP MEGA SPAREPART BLOK D NO.02 A-B', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BERKAT HANDANY MOTOR', 'N', '-'),
(957, '0080', 'BERKAT, UD', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BERKAT, UD', 'N', '-'),
(958, '0081', 'BERSAMA, PT', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BERSAMA, PT', 'N', '-'),
(959, '0082', 'BHINNEKA BAJANAS, PT', 'JL KARANG BOLONG RAYA NO.5 ANCOL', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BHINNEKA BAJANAS, PT', 'N', '-'),
(960, '0083', 'BILAH AGUNG PERKASA, CV', 'JL. A.YANI KM 7.7 NO.38 BANJARMASIN', '0511-4281839', '0511-3201007', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BILAH AGUNG PERKASA, CV', 'N', '-'),
(961, '0084', 'BILAH MAKMUR ABADI, UD', 'JL. A.YANI KM.7 BANJARMASIN', '0511-4281839', '0511-3201007', '-', 'BP. KURNIAWAN', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BILAH MAKMUR ABADI, UD', 'N', '-'),
(962, '0085', 'BIMA SAKTI, TOKO', 'JL. KEDUNGDORO 16C', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BIMA SAKTI, TOKO', 'N', '-'),
(963, '0086', 'BINA PERTIWI, PT', 'JL.RAYA BEKASI KM.22 CAKUNG', '0531-21145', '0531-24071', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BINA PERTIWI, PT', 'N', '-'),
(964, '0087', 'BINTANG MULIA TEKNIK, PT', 'JL.A.YANI KM16, GAMBUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BINTANG MULIA TEKNIK, PT', 'N', '-'),
(965, '0088', 'BINTANG MULIA, UD', 'JLN A.YANI KM.3,5 DEPAN POLTABES NO.7', '0511-4220026', '0511-4221598', '-', 'BP.RIDWAN', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BINTANG MULIA, UD', 'N', '-'),
(966, '0089', 'BINTANG SERVICE', 'JL.KEBAYORAN LAMA NO 24D', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BINTANG SERVICE', 'N', '-'),
(967, '0090', 'BINTANG TIMUR MULIA GEMILANG ,PT', 'KELAPA GADING PERMAI', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BINTANG TIMUR MULIA GEMILANG ,PT', 'N', '-'),
(968, '0091', 'BINTANG TIMUR, TOKO', 'JL. K.S TUBUN 36', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BINTANG TIMUR, TOKO', 'N', '-'),
(969, '0092', 'BIRO JASA', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BIRO JASA', 'N', '-'),
(970, '0093', 'BMW PRIMA', 'JL RS FATMAWATI NO.10', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BMW PRIMA', 'N', '-'),
(971, '0094', 'BOBBY, BPK.', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BOBBY, BPK.', 'N', '-'),
(972, '0095', 'BROQUETE INDONESIA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BROQUETE INDONESIA, PT', 'N', '-'),
(973, '0096', 'BUANA SURVEY', 'Jl. Ciledug Raya, Komplek Surya Buana Blok L 19,Kreo Cipadu', '021-7321129', '021-7302811', '-', 'BP. IRVAN', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BUANA SURVEY', 'N', '-'),
(974, '0097', 'BUDI BERKAH, TOKO', 'JL JAWA NO.1 PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BUDI BERKAH, TOKO', 'N', '-'),
(975, '0098', 'BUMEN REDJA ABADI, PT', 'JL.PROF.DR.LATUMENTEN I NO.5', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BUMEN REDJA ABADI, PT', 'N', '-'),
(976, '0099', 'BUMI TANI SUBUR, PT', 'JL PINANGSIA II NO. 8A JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010200', 'BUMI TANI SUBUR, PT', 'N', '-'),
(977, '0100', 'CAHAYA BERDIKARI, TOKO', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CAHAYA BERDIKARI, TOKO', 'N', '-'),
(978, '0101', 'CAHAYA BORNEO TRACTOR', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CAHAYA BORNEO TRACTOR', 'N', '-'),
(979, '0102', 'CAHAYA MAS, TOKO', 'JL K.S TUBUN NO. 35, PALANGKARAYA', '0536 - 3221628', '0536 - 3234383', '-', 'Bp. Ardian Ruslan', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CAHAYA MAS, TOKO', 'N', '-'),
(980, '0103', 'CAHAYA TERANG, TOKO', 'JL GEMBONG TEBASAN 29 SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CAHAYA TERANG, TOKO', 'N', '-'),
(981, '0104', 'CAHAYA TIMUR ABADI', 'PLAZA JAYAKARTA LT 1 SUITE 2090-2091', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CAHAYA TIMUR ABADI', 'N', '-'),
(982, '0105', 'CAHAYA UTAMA', 'JL HAYAM WURUK 108 PLAZA 2 BLOK B 1071', '021-34831483', '021-34831443', '-', 'BP. ANDRE', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CAHAYA UTAMA', 'N', '-'),
(983, '0106', 'CAHAYA YAKINDO', 'LTC GLODOK GF.2 BLOK A9 NO.5', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CAHAYA YAKINDO', 'N', '-'),
(984, '0107', 'CAKRA LIMA, PT', 'PINANGSIA INDAH BLOK 2-M', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CAKRA LIMA, PT', 'N', '-'),
(985, '0108', 'CAKRA PERKASA JAYA MULIA, PT', 'JL. A.YANI KM 13.5', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CAKRA PERKASA JAYA MULIA, PT', 'N', '-'),
(986, '0109', 'CAKRA PERKASA TEKNIK, CV', 'JL.NAGASARI 64, MAWAR, BANJARMASIN', '0511-', '0511-3354119', NULL, 'IBU. YOSEFIN', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CAKRA PERKASA TEKNIK, CV', 'N', '-'),
(987, '0110', 'CATUR INTI PARTINDO', 'JLN TAMAN SARI LT 1 AL.01 BKS', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CATUR INTI PARTINDO', 'N', '-'),
(988, '0111', 'CEMARA ENGINEERING, CV', 'KALIMANTAN TENGAH', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CEMARA ENGINEERING, CV', 'N', '-'),
(989, '0112', 'CEMERLANG PERKASA SURABAYA, PT', 'JL. KERTAJAYA 180', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CEMERLANG PERKASA SURABAYA, PT', 'N', '-'),
(990, '0113', 'CENTA BRASINDO ABADI, PT', 'JL CBD PARAMOUNT SERPONG KAV.6 GADING SERPONG KEC. KELAPA DUA TANGGERANG BANTEN 15811 ', '021-29324888', '021-29324777', 'CHEMICAL PESTISIDA ', 'BPK SUGIANTO', 30, 'Hari', '-', 'N', '353 165 4709', 'BANK DANAMON ', 'PT CENTA BRASINDO ABADI', 0, '3010010300', 'CENTA BRASINDO ABADI, PT', 'N', '-'),
(991, '0114', 'CENTRAL ASIA TEHNIK', 'LTC GLODOK GF 1 B19/8', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CENTRAL ASIA TEHNIK', 'N', '-'),
(992, '0115', 'CHINA INSURANCE INDONESIA, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CHINA INSURANCE INDONESIA, PT', 'N', '-'),
(993, '0116', 'CIDAR ENGINEERING, SDN BHD.', 'SUBANG JAYA, SELANGOR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CIDAR ENGINEERING, SDN BHD.', 'N', '-'),
(994, '0117', 'CIPTA BARU, TOKO', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CIPTA BARU, TOKO', 'N', '-'),
(995, '0118', 'CIPTA MAPAN LOGISTIK, PT', 'JL. TAMBANK LANGON 20', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CIPTA MAPAN LOGISTIK, PT', 'N', '-'),
(996, '0119', 'CIPTO, BPK.', 'S A M P I T', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CIPTO, BPK.', 'N', '-'),
(997, '0120', 'CITRA DIESEL, CV', 'JL. JEND. SUDIRMAN KM.4,2 SAMPIT', '0531-2035678', '0531-2035678', '-', 'BP. AGUS', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CITRA DIESEL, CV', 'N', '-'),
(998, '0121', 'CITRA JAYA, TOKO', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CITRA JAYA, TOKO', 'N', '-'),
(999, '0122', 'CITRA KOLEGA MANDIRI, CV', 'JL. LAUTZE RAYA NO.54,JAKARTA PUSAT', '021-3521610 / 3522134', '021-3521620', '-', 'BP. VINSEN', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CITRA KOLEGA MANDIRI, CV', 'N', '-'),
(1000, '0123', 'CONTINENTAL DUTA INTERNATIONAL, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CONTINENTAL DUTA INTERNATIONAL, PT', 'N', '-'),
(1001, '0124', 'CYAN KOMPUTER', 'PLAZA PINANGSIA LT.1 NO.30', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010300', 'CYAN KOMPUTER', 'N', '-'),
(1002, '0125', 'DALLY, BPK.', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DALLY, BPK', 'N', '-'),
(1003, '0126', 'DAMARUS PANEN UTAMA, PT', 'JL. KAJI NO.51', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DAMARUS PANEN UTAMA, PT', 'N', '-'),
(1004, '0127', 'DAMI MAS SEJAHTERA, PT', 'SINAR MAS LAND PLAZA MENARA 2 LT.30 ', '021-50338899', '021-50389999', '-', NULL, 0, 'Hari', '-', 'N', '2-003-044549', 'BANK INTERNATIONAL INDONESIA', 'PT DAMI MAS SEJAHTERA ', 0, '3010010400', 'DAMI MAS SEJAHTERA, PT', 'N', '-'),
(1005, '0128', 'DANACO, CV', 'SEMARANG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DANACO, CV', 'N', '-'),
(1006, '0129', 'DANI G, BPK.', 'P A L A N G K A R A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DANI G, BPK.', 'N', '-'),
(1007, '0130', 'DANSAS PAN SUKSESA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DANSAS PAN SUKSESA, PT', 'N', '-'),
(1008, '0131', 'DARMA MOTOR', 'JL BUNGUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DARMA MOTOR', 'N', '-'),
(1009, '0132', 'DAYA SANTOSA REKAYASA, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DAYA SANTOSA REKAYASA, PT', 'N', '-'),
(1010, '0133', 'DELI JAYA', 'JL JEMBATAN MERAH LOS 23-25', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DELI JAYA', 'N', '-'),
(1011, '0134', 'DELTA ABADI SENTOSA, PT', 'JL. R.SUPRAPTO NO.2', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DELTA ABADI SENTOSA, PT', 'N', '-'),
(1012, '0135', 'DELTA BUMI JAYA, PT', 'JLN. KH DEWANTORO NO. 88', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DELTA BUMI JAYA, PT', 'N', '-'),
(1013, '0136', 'DEWI SARTIKA, FURNITURE', 'JL. FATMAWATI 36 (CIPETE)', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DEWI SARTIKA, FURNITURE', 'N', '-'),
(1014, '0137', 'DEWI SRIRAMA, CV', 'PANDAAN - JAWA TIMUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DEWI SRIRAMA, CV', 'N', '-'),
(1015, '0138', 'DHARMA GUNA WIBAWA, PT', 'JLN DANAU SUNTER UTARA PERKANTORAN SUNTER PERMAI BI B/7, SUNTER AGUNG, TJ PRIUK', '(021) 652 0222', '(021) 652 0111', '-', 'ALINA', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DHARMA GUNA WIBAWA, PT', 'N', '-'),
(1016, '0139', 'DIDY, BPK.', 'P A L A N G K A R A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DIDY, BPK.', 'N', '-'),
(1017, '0140', 'DINAMIKA BERKAT SEJAHTERA, CV', 'JL. GELONG BARU BARAT V NO. 19', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DINAMIKA BERKAT SEJAHTERA, CV', 'N', '-'),
(1018, '0141', 'DINAMIKA NUSANTARA PRATANA, PT', 'JL.PANGERAN JAYAKARTA NO.44/22-24', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DINAMIKA NUSANTARA PRATANA, PT', 'N', '-'),
(1019, '0142', 'DIRJEN TANAMAN PANGAN', 'JL AUP PS MINGGU NO.3', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DIRJEN TANAMAN PANGAN', 'N', '-'),
(1020, '0143', 'DOKTER AC MOBIL', 'JL RADIO DALAM NO.1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DOKTER AC MOBIL', 'N', '-'),
(1021, '0144', 'DUNIA ALAT KANTOR.COM', 'JL.OTISTA RAYA NO.109', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DUNIA ALAT KANTOR.COM', 'N', '-'),
(1022, '0145', 'DUNIA BAN, TOKO', 'JL KEDUNGSARI 95', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DUNIA BAN, TOKO', 'N', '-'),
(1023, '0146', 'DUNIA KERAMIK, TOKO', 'JL. BALIWERTI 48D', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DUNIA KERAMIK, TOKO', 'N', '-'),
(1024, '0147', 'DUTA BANGUNAN, TOKO', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DUTA BANGUNAN, TOKO', 'N', '-'),
(1025, '0148', 'DWI PUTRA SUYAMTO, BPK.', 'P A L A N G K A R A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DWI PUTRA SUYAMTO, BPK.', 'N', '-'),
(1026, '0149', 'DWIKARSA SINERGI, PT', 'LTC LANTAI GF2 BLOK RA NO.70', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010400', 'DWIKARSA SINERGI, PT', 'N', '-'),
(1027, '0150', 'EATON INDUSTRIES PTE LTD.', 'SINGAPORE', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010500', 'EATON INDUSTRIES PTE LTD', 'N', '-'),
(1028, '0151', 'EDISON, TOKO', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010500', 'EDISON, TOKO', 'N', '-'),
(1029, '0152', 'EICOM INTERNATIONAL', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010500', 'EICOM INTERNATIONAL', 'N', '-'),
(1030, '0153', 'ELECTRONIC SOLUTION', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010500', 'ELECTRONIC SOLUTION', 'N', '-'),
(1031, '0154', 'ELEGANT INDONESIA, PT', 'JL. UTAMA SAKTI RAYA NO. 28A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010500', 'ELEGANT INDONESIA, PT', 'N', '-'),
(1032, '0155', 'EMMA FLORIST', 'JL. YUSUF NO 9 RAWABELONG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010500', 'EMMA FLORIST', 'N', '-'),
(1033, '0156', 'ERA MANDIRI DIESEL', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010500', 'ERA MANDIRI DIESEL', 'N', '-'),
(1034, '0157', 'ERLANGGA, PENERBIT', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010500', 'ERLANGGA, PENERBIT', 'N', '-'),
(1035, '0158', 'ERWIN, BPK.', 'TUMBANG TALAKEN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010500', 'ERWIN, BPK.', 'N', '-'),
(1036, '0159', 'EUROASIATIC JAYA, PT', 'JL.RAYA DAAN MOGOT NO.44', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010500', 'EUROASIATIC JAYA, PT', 'N', '-'),
(1037, '0160', 'EZRA BERKAT ANUGERAH, PT', 'MEDAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010500', 'EZRA BERKAT ANUGERAH, PT', 'N', '-'),
(1038, '0161', 'FACTORY OUTLET, FURNITURE', 'PLUIT VILLAGE 3RD FL #107', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010600', 'FACTORY OUTLET, FURNITURE', 'N', '-'),
(1039, '0162', 'FINGERSPOT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010600', 'FINGERSPOT', 'N', '-'),
(1040, '0163', 'FORD JAKARTA BARAT', 'JL. PANJANG NO.8 ARTERI KEDOYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010600', 'FORD JAKARTA BARAT', 'N', '-'),
(1041, '0164', 'FORD JAKARTA SELATAN', 'JL.TB.SIMATUPANG NO.14', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010600', 'FORD JAKARTA SELATAN', 'N', '-'),
(1042, '0165', 'FORD PALANGKARAYA', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010600', 'FORD PALANGKARAYA', 'N', '-'),
(1043, '0166', 'FREEMAN AIR CONDITIONER', 'JL GANDARIA II RT04/02 NO.52', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010600', 'FREEMAN AIR CONDITIONER', 'N', '-'),
(1044, '0167', 'GADING MAS INDAH, PT', 'JL JEND BASUKI RACHMAD NO.17 MALANG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GADING MAS INDAH, PT', 'N', '-'),
(1045, '0168', 'GAGAH SATRIA MANUNGGAL, PT', 'B A N J A R M A S I N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GAGAH SATRIA MANUNGGAL, PT', 'N', '-'),
(1046, '0169', 'GALATTA LESTARINDO, PT', 'JL.PUTRI HIJAU BARU NO.11', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GALATTA LESTARINDO, PT', 'N', '-'),
(1047, '0170', 'GARUDA TASCO INDONESIA, PT', 'JL. JEMBATAN TIGA NO. 8C', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GARUDA TASCO INDONESIA, PT', 'N', '-'),
(1048, '0171', 'GAYA LISTRIK, TOKO', 'JL. KEMBANG JEPUN NO.7, SURABAYA', '031-3526290', '031-3551365', '-', '-', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GAYA LISTRIK, TOKO', 'N', '-'),
(1049, '0172', 'GEMILANG MULIALESTARI, PT', 'KAWASAN INDUSTRI KM 19.8 BLOK F8 PORIS', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GEMILANG MULIALESTARI, PT', 'N', '-'),
(1050, '0173', 'GEMILANG, CV', 'JL GOTONG ROYONG NO.7 LARANGAN INDAH', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GEMILANG, CV', 'N', '-'),
(1051, '0174', 'GEMILANG, UD (CANON SP.PART)', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GEMILANG, UD (CANON SP.PART)', 'N', '-'),
(1052, '0175', 'GENTRAK, CV', 'JL MANGGA BESAR 4-P NO.50C JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GENTRAK, CV', 'N', '-'),
(1053, '0176', 'GERINDO SUPERTEKNIK', 'JL SUKARJO WIRYOPRANOTO 52 A.', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GERINDO SUPERTEKNIK', 'N', '-'),
(1054, '0177', 'GERRINDO SURYA MAKMUR, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GERRINDO SURYA MAKMUR, PT', 'N', '-'),
(1055, '0178', 'GK KOMPUTER, TOKO', 'HARCO MANGGA DUA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GK KOMPUTER, TOKO', 'N', '-'),
(1056, '0179', 'GLOBAL CITRA ANUGRAH', 'JL GATOT SUBROTO NO.177 KAV 64', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GLOBAL CITRA ANUGRAH', 'N', '-'),
(1057, '0180', 'GLOBAL MANDIRI TRAKTOR', 'KOMP MEGA SPAREPART BLOK D 22A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GLOBAL MANDIRI TRAKTOR', 'N', '-'),
(1058, '0181', 'GLOBAL MUARA NETINDO,PT', 'KOMP. MANGGA DUA ELOK BLOK A-10', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GLOBAL MUARA NETINDO,PT', 'N', '-'),
(1059, '0182', 'GLODOK ELEKTRONIK', 'JL SULTAN ISKANDAR MUDA KAV.77-78', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GLODOK ELEKTRONIK', 'N', '-'),
(1060, '0183', 'GOAUTAMA SINARBATUAH, PT', 'Jl. A Yani Km 11,200 No. 10 - BANJARMASIN', '0511-422 0370', '0511-422 0369', '-', '-', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GOAUTAMA SINARBATUAH, PT', 'N', '-'),
(1061, '0184', 'GOSYEN ANUGERAH, PT', 'JL. YON ZIKON 13 NO 26A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GOSYEN ANUGERAH, PT', 'N', '-'),
(1062, '0185', 'GRAFIKA KARYA INDAH LESTARI,PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GRAFIKA KARYA INDAH LESTARI,PT', 'N', '-'),
(1063, '0186', 'GRAHA SERVICE INDONESIA, PT', 'JL. SULTAN ISKANDAR MUDA NO.9 C-D', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GRAHA SERVICE INDONESIA, PT', 'N', '-'),
(1064, '0187', 'GRAND EXPRESS', 'JL JEMBATAN 3', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GRAND EXPRESS', 'N', '-'),
(1065, '0188', 'GREEN PLANET INDONESIA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GREEN PLANET INDONESIA, PT', 'N', '-'),
(1066, '0189', 'GUNAWAN PLASTIK', 'Jl. Industri No. 9, Betro-Sedati, Sidoarjo', '(031) 10240', '(031) 10241', NULL, NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GUNAWAN PLASTIK', 'N', '-'),
(1067, '0190', 'GUNTUR, BPK.', 'TUMBANG TALAKEN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010700', 'GUNTUR, BPK.', 'N', '-'),
(1068, '0191', 'H.SAMALI, BPK.', 'M E D A N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'H.SAMALI, BPK', 'N', '-'),
(1069, '0192', 'H.SARONI, BPK.', 'PANGKALAN BUN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'H.SARONI, BPK.', 'N', '-'),
(1070, '0193', 'HABETEC, TOKO', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HABETEC, TOKO', 'N', '-'),
(1071, '0194', 'HALAYUNG FARMA, TOKO', 'Jl Tjilik Riwut KM 1\nSeberang pasar kahayan', '0813-49005004', '-', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HALAYUNG FARMA, TOKO', 'N', '-'),
(1072, '0195', 'HAMBIT, BPK.', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HAMBIT, BPK.', 'N', '-'),
(1073, '0196', 'HANAMPI SEJAHTERA KAHURIPAN,PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HANAMPI SEJAHTERA KAHURIPAN,PT', 'N', '-'),
(1074, '0197', 'HANDIJAYA SUKATAMA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HANDIJAYA SUKATAMA, PT', 'N', '-'),
(1075, '0198', 'HANDOKO SUGIANTO, BPK.', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HANDOKO SUGIANTO, BPK.', 'N', '-'),
(1076, '0199', 'HARAPAN SAKTI UTAMA', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HARAPAN SAKTI UTAMA', 'N', '-'),
(1077, '0200', 'HARPINDO MULIA ARMADA MAJU, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HARPINDO MULIA ARMADA MAJU, PT', 'N', '-'),
(1078, '0201', 'HARRIS, BPK.', 'JL. RIAU PELABUHAN RAMBANG NO.68, RT.002, PALANGKARAYA, KALTENG', '0852-49178864', '-', '-', 'BP. HARIS', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HARRIS, BPK.', 'N', '-'),
(1079, '0202', 'HARVEST APOTIK', 'Jln Menganti kramat No.56 Citraland - Surabaya ', '031-7521800', '-', '-', 'IBU. VINA', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HARVEST APOTIK', 'N', '-'),
(1080, '0203', 'HAS SALON MOBIL', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HAS SALON MOBIL', 'N', '-'),
(1081, '0204', 'HASIL BUMI, UD', 'Jalan Veteran 3 RT 022, Kuripan, BANJARMASIN TIMUR', '0511-3255466', '0511-3267095', '-', 'IBU. BETSI', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HASIL BUMI, UD', 'N', '-'),
(1082, '0205', 'HELINDO DIRG.AUTO CENTER, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HELINDO DIRG.AUTO CENTER, PT', 'N', '-'),
(1083, '0206', 'HEXINDO ADIPERKASA, PT', 'JL PULO KAMBING II KAV.1-2 NO.33', '0531-31941 - Ext 104', '0531-31942', '-', 'Bp. Furkon', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HEXINDO ADIPERKASA, PT', 'N', '-'),
(1084, '0207', 'HIGH POINT CENTER-DUTAMAS', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HIGH POINT CENTER-DUTAMAS', 'N', '-'),
(1085, '0208', 'HJ HANJAYA, TOKO', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HJ HANJAYA, TOKO', 'N', '-'),
(1086, '0209', 'HNF CONCEPT', 'KEDUNGDORO 39', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HNF CONCEPT', 'N', '-'),
(1087, '0210', 'HOME CENTER INDONESIA,PT-INDEX', 'JL.R.S.FATMAWATI BLOK A NO.1-7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HOME CENTER INDONESIA,PT-INDEX', 'N', '-'),
(1088, '0211', 'HONDA AHASS SERVICE', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HONDA AHASS SERVICE', 'N', '-'),
(1089, '0212', 'HONGKONG ELECTRONIC, TOKO', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HONGKONG ELECTRONIC, TOKO', 'N', '-'),
(1090, '0213', 'HP CLINIC', 'JLN PINANGSIA RAYA NO.1 JAKARTA BARAT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010800', 'HP CLINIC', 'N', '-'),
(1091, '0214', 'ICA MGK', 'MEGA GLODOK KEMAYORAN LT.1 BLOK C02/7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'ICA MGK', 'N', '-'),
(1092, '0215', 'ICA SERVICE CENTER', 'JLN PINANGSIA 1 NO. 22-BB', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'ICA SERVICE CENTER', 'N', '-'),
(1093, '0216', 'ICOM, TOKO', 'GLODOK HARCO LT. II BLOK C II NO.174', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'ICOM, TOKO', 'N', '-'),
(1094, '0217', 'IDA BAGUS MAYUN W, BPK.', 'PEKANBARU', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'IDA BAGUS MAYUN W, BPK.', 'N', '-'),
(1095, '0218', 'IMAM SODIKIN, BPK.', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'IMAM SODIKIN, BPK.', 'N', '-'),
(1096, '0219', 'IMANNUEL SEJAHTERA, TOKO', 'PLAZA KENARI MAS, LG NO. B83', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'IMANNUEL SEJAHTERA, TOKO', 'N', '-'),
(1097, '0220', 'INDITANI, TOKO', 'PALANGKA RAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INDITANI, TOKO', 'N', '-'),
(1098, '0221', 'INDO DAYA, TOKO', 'RUKO GLODOK PLAZA BLOK B NO.11', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INDO DAYA, TOKO', 'N', '-'),
(1099, '0222', 'INDOBEARINGINDO LOGAMSARI', 'KOMP. KARANG ANYAR PERMAI BLOK B NO.12', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INDOBEARINGINDO LOGAMSARI', 'N', '-'),
(1100, '0223', 'INDOGEOTECH DARMA SOLUSI, CV', 'JL. H.MERIN NO.1B MERUYA SELATAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INDOGEOTECH DARMA SOLUSI, CV', 'N', '-'),
(1101, '0224', 'INDOHARDWARE SEMESTA, PT', 'KOMPLEK DAAN MOGOT BARU LN.12 JAKARTA', '021-50121005', '021-5444932', 'SALE DISTRIBUTOR SHM FLOWMETER', 'BPK RUSMA ', 0, 'Hari', '-', 'N', '1180005419063', 'BANK MANDIRI ', 'SISKA ASTRARIDEWI', 0, '3010010900', 'INDOHARDWARE SEMESTA, PT', 'N', '-'),
(1102, '0225', 'INDOKITA MAKMUR, PT', 'JL. GAJAH MADA NO.150ABC & 149G', '(021) 649 2518 / 649 3811', '(021) 649 6653', NULL, NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INDOKITA MAKMUR, PT', 'N', '-'),
(1103, '0226', 'INDOMAS EKAPUTRA, PT', 'KOMP. GLODOK JAYA NO.55', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INDOMAS EKAPUTRA, PT', 'N', '-'),
(1104, '0227', 'INDOPART DIESEL', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INDOPART DIESEL', 'N', '-'),
(1105, '0228', 'INDOPOWER', 'JL TAMAN SARI, KOMP 56 NO. 61C', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INDOPOWER', 'N', '-'),
(1106, '0229', 'INDOPUTRA MAS, PT', 'JL. KEMUKUS 32 BLOK A NO.11', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INDOPUTRA MAS, PT', 'N', '-'),
(1107, '0230', 'INDORHAMA MOTOR', 'JL CILIK RIWUT KM.9', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INDORHAMA MOTOR', 'N', '-'),
(1108, '0231', 'INJAYA POMPA AIR', 'JLN PANGLIMA POLIM 7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INJAYA POMPA AIR', 'N', '-'),
(1109, '0232', 'INTAN JAYA GLASS', 'JLN H.MENCONG NO.68 CILEDUG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INTAN JAYA GLASS', 'N', '-'),
(1110, '0233', 'INTI JAYA, TOKO', 'JL FATMAWATI NO.6 BLOK A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INTI JAYA, TOKO', 'N', '-'),
(1111, '0234', 'INTISARI BEARING, CV', 'Karang anyar permai Blok B No.12', '021-6008555', '021-6245659', '-', 'IBU. TANTI', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010010900', 'INTISARI BEARING, CV', 'N', '-'),
(1112, '0235', 'JASA ARSITEK TIARA WIDYA, PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011000', 'JASA ARSITEK TIARA WIDYA, PT', 'N', '-'),
(1113, '0236', 'JASA KARYA, EKSPEDISI', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011000', 'JASA KARYA, EKSPEDISI', 'N', '-'),
(1114, '0237', 'JASARAHARJA PUTERA ASURANSI', 'JL. TB SIMATUPANG KAV. 1 CILANDAK TIMUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011000', 'JASARAHARJA PUTERA ASURANSI', 'N', '-'),
(1115, '0238', 'JASTINDO RAYA, PT', 'SATELITE TOWN SQUARE A6', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011000', 'JASTINDO RAYA, PT', 'N', '-'),
(1116, '0239', 'JAYA ABADI, TB', 'Jln. Darmosugondo No 74 B-C, Palangkaraya', '0536-3305668', '0536-3234121', '-', 'BP. IRAWAN', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011000', 'JAYA ABADI, TB', 'N', '-'),
(1117, '0240', 'JAYA ABADI, TOKO', 'JLN KRAMAT BUNDER 15 SENEN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011000', 'JAYA ABADI, TOKO', 'N', '-'),
(1118, '0241', 'JAYA KURNIA PERKASA', 'PERTOKOAN GLODOK JAYA NO 6', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011000', 'JAYA KURNIA PERKASA', 'N', '-'),
(1119, '0242', 'JAYA MAKMUR DIESEL, CV', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011000', 'JAYA MAKMUR DIESEL, CV', 'N', '-'),
(1120, '0243', 'JAYA MAKMUR, TB', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011000', 'JAYA MAKMUR, TB', 'N', '-'),
(1121, '0244', 'JCC BAN', 'Jl. Sukarjowiryopranoto No.35B,JAKARTA', '021-70942390', '021-6254570', '-', 'BP. KOLIN', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011000', 'JCC BAN', 'N', '-'),
(1122, '0245', 'JOKO, BPK.', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011000', 'JOKO, BPK.', 'N', '-'),
(1123, '0246', 'JUPITER 4X4 ACCESORIES', 'KEMAYORAN - JAKARTA UTARA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011000', 'JUPITER 4X4 ACCESORIES', 'N', '-'),
(1124, '0247', 'KAI COMMUNICATION', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KAI COMMUNICATION', 'N', '-'),
(1125, '0248', 'KARUNIA BARU, TOKO MEUBEL', 'P A L A N G K A R A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KARYA JAYA ABADI', 'N', '-'),
(1126, '0249', 'KARYA JAYA ABADI', 'JL PELITA NO.107A RT.028/005 MENTAWA BR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KARYA JAYA ABADI', 'N', '-'),
(1127, '0250', 'KARYA JAYA LESTARI, CV', 'JL. RAJAWALI DESA CANDIMAS', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KARYA JAYA LESTARI, CV', 'N', '-'),
(1128, '0251', 'KARYA JAYA, TOKO', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KARYA JAYA, TOKO', 'N', '-'),
(1129, '0252', 'KARYA MULIA, TOKO', 'JL CILEDUG RAYA NO.106', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KARYA MULIA, TOKO', 'N', '-'),
(1130, '0253', 'KAUSAR, TOKO', 'JL DARMOSUGONDO NO.52', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KAUSAR, TOKO', 'N', '-'),
(1131, '0254', 'KAWAN LAMA SEJAHTERA, PT', 'JL. PURI KENCANA NO.1 MERUYA KEMBANGAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KAWAN LAMA SEJAHTERA, PT', 'N', '-'),
(1132, '0255', 'KEBAYORAN, TB', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KEBAYORAN, TB', 'N', '-'),
(1133, '0256', 'KJS LEATHER/AUTO CENTER', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KJS LEATHER/AUTO CENTER', 'N', '-'),
(1134, '0257', 'KREASI AUTO KENCANA, PT', 'JL KH. HASYIM ASHARI NO.45 JAKARA PUSAT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KREASI AUTO KENCANA, PT', 'N', '-'),
(1135, '0258', 'KUDA MAS, TOKO', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KUDA MAS, TOKO', 'N', '-'),
(1136, '0259', 'KUMALA MOTOR', 'P A L A N G K A R A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KUMALA MOTOR', 'N', '-'),
(1137, '0260', 'KUMALA MOTOR JAKARTA', 'KOMPLEK KREKOT JAYA BLOK C2 NO 3A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KUMALA MOTOR JAKARTA', 'N', '-'),
(1138, '0261', 'KUMALA PUTRA NUSANTARA', 'JL KAPTEN DULASIM RT 04 RW 05 GRESIK', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KUMALA PUTRA NUSANTARA', 'N', '-'),
(1139, '0262', 'KURUN MAKMUR JAYA, PT', 'JL.ANTANG II NO.45', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KURUN MAKMUR JAYA, PT', 'N', '-'),
(1140, '0263', 'LAHAN MAKMUR SENTOSA, CV', 'JL.ISKANDAR GG.BUMI DAYA NO.1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011200', 'LAHAN MAKMUR SENTOSA, CV', 'N', '-'),
(1141, '866', 'LOGOS STATIONERY,TOKO', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011200', 'LOGOS STATIONERY,TOKO', 'N', '-'),
(1142, '0265', 'LATIMOJONG SEJATI, PT', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011200', 'LATIMOJONG SEJATI, PT', 'N', '-'),
(1143, '0266', 'LAUTAN LUAS, PT', 'Graha Indramas \nJl. AIP II K. S. Tubun Raya No. 77 Jakarta 11410 Indonesia', '+62 21 8066 0777', '+62 21 8066 0020', 'PUPUK', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011200', 'LAUTAN LUAS, PT', 'N', '-'),
(1144, '0267', 'LAUTAN TRANS JAYA', 'JL ALUMINIUM RAYA 5, TANJUNG MULIA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011200', 'LAUTAN TRANS JAYA', 'N', '-'),
(1145, '0268', 'LG ELECTRONICS INDONESIA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011200', 'LG ELECTRONICS INDONESIA, PT', 'N', '-'),
(1146, '0269', 'LIA MOTOR', 'JL CILIK RIWUT NO. 127 KM 1,5', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011200', 'LIA MOTOR', 'N', '-'),
(1147, '0270', 'LIMA SAUDARA, UD', 'JL.TJILIK RIWUT KM 7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011200', 'LIMA SAUDARA, UD', 'N', '-'),
(1148, '0271', 'LIMA UTAMA WISESA, PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011200', 'LIMA UTAMA WISESA, PT', 'N', '-'),
(1149, '0272', 'LINTAS JAWA & SUMATRA, EKSPEDISI', 'JL KH MAS MANSUR NO. 38A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011200', 'LINTAS JAWA & SUMATRA, EKSPEDISI', 'N', '-'),
(1150, '0273', 'LOGAM JAYA ALUMUNIUM', 'JL.MANUNGGAL II NO.38', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011200', 'LOGAM JAYA ALUMUNIUM', 'N', '-'),
(1151, '0274', 'MADJU DJAJA, CV', 'JL. A.YANI KM.14.3, BANJARMASIN', '0511-4221625/26', '0511-4221627', '-', 'BP. YANTO', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MADJU DJAJA, CV', 'N', '-'),
(1152, '0275', 'MADY JAYA MOTOR', 'JL.RADIO DALAM RAYA 99A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MADY JAYA MOTOR', 'N', '-'),
(1153, '0276', 'MAHDUN, BPK.', 'JL. CILIK RIWUT KM 45 PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MAHDUN, BPK.', 'N', '-'),
(1154, '0277', 'MAHKOTA, TOKO', 'Jln. A.Yani 91, Palangkaraya 73111', '0536-3221671', '0536-3224221', '-', 'IBU. WATI', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MAHKOTA, TOKO', 'N', '-'),
(1155, '0278', 'MAIZA LUBRIKA, PT', 'JLN PERAK TIMUR 52 LT.2', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MAIZA LUBRIKA, PT', 'N', '-'),
(1156, '0279', 'MAJU JAYA, TB', 'JL DARMO SUGONDO', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MAJU JAYA, TB', 'N', '-');
INSERT INTO `supplier` (`id`, `kode`, `supplier`, `alamat`, `tlp`, `fax`, `usaha`, `sales`, `lama`, `lamatxt`, `npwp`, `pkp`, `norek`, `namabank`, `atasnama`, `noac15`, `account`, `nama_account`, `pph`, `pph_rule`) VALUES
(1157, '0280', 'MANDALA JAYA AC', 'JL SUKARJO WIRYOPRANOTO 90E', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MANDALA JAYA AC', 'N', '-'),
(1158, '0281', 'MANDIRI SEJAHTERA BUANA', 'JL LAUTZE RAYA NO.51 KARANG ANYAR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MANDIRI SEJAHTERA BUANA', 'N', '-'),
(1159, '0282', 'MANGGALA JATI, ALUMUNIUM', 'JL.ROBUSTA RAYA NO.7A, PONDOK KOPI', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MANGGALA JATI, ALUMUNIUM', 'N', '-'),
(1160, '0283', 'MANTAP, PD', 'HWI LINDETEVES LT DASAR NO.7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MANTAP, PD', 'N', '-'),
(1161, '0284', 'MARSONO, BPK.', 'TUMBANG TELAKEN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MARSONO, BPK.', 'N', '-'),
(1162, '0285', 'MASTEL SERVICE CENTER', 'JL ARTERI KELAPA DUA NO.1A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MASTEL SERVICE CENTER', 'N', '-'),
(1163, '0286', 'MEGA ELTRA, PT', 'BANJARMASIN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MEGA ELTRA, PT', 'N', '-'),
(1164, '0287', 'MEGA GLOBAL SOLUTION, PT', 'KOMP PERKANTORAN HARMONI PLAZA NO.2', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MEGA GLOBAL SOLUTION, PT', 'N', '-'),
(1165, '0288', 'MEGA SURYA, UD', 'JL. GARUDA NO.7D,KEL. SUKADAMAI,MEDAN', '061-77111773', '061-4537877', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MEGA SURYA, UD', 'N', '-'),
(1166, '0289', 'MEGA TRUKINDO UTAMA, PT', 'JL.LINGKAR SELATAN JATAKE JAHA NO.61', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MEGA TRUKINDO UTAMA, PT', 'N', '-'),
(1167, '0290', 'MEROKE TETAP JAYA, PT', 'KOMP MEGA GLODOK KEMAYORAN BLOK B-7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MEROKE TETAP JAYA, PT', 'N', '-'),
(1168, '0291', 'METRO TIGA BERLIAN, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'METRO TIGA BERLIAN, PT', 'N', '-'),
(1169, '0292', 'MEX BARLIAN DIRGANTARA, EKSPEDISI', 'JL P JAYAKARTA BLOK 24 NO.63-65', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MEX BARLIAN DIRGANTARA, EKSPEDISI', 'N', '-'),
(1170, '0293', 'MIRUSA GRAHA, PT', 'JL. GUNTUR NO.32', '021-8291900', '021-8291769', '-', 'BP.EFFENDI', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MIRUSA GRAHA, PT', 'N', '-'),
(1171, '0294', 'MITRA FARMA APOTIK', 'PS PRAMUKA', '021-8511948', '021-8511948', '-', 'BP. CHAIRUL', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MITRA FARMA APOTIK / CHAIRUL AMAL', 'N', '-'),
(1172, '0295', 'MITRA INFOPARAMA, PT', 'JL SULTAN ISKANDAR MUDA NO. 7D', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MITRA INFOPARAMA, PT', 'N', '-'),
(1173, '0296', 'MITRA JAYA, CV', 'JL KALIMAS BARU NO. 64', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MITRA JAYA, CV', 'N', '-'),
(1174, '0297', 'MITRA NIAGA ABADI', 'JLN LABU 1 LT.DASAR NO.1121', '021-62307277/78', '021-62307278', 'TOKO SPAREPART', 'BPK HENDRA', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MITRA NIAGA ABADI', 'N', '-'),
(1175, '0298', 'MITRA TIMUR LESTARI, PT', 'KOMPL.TAMAN DUTAMAS BLOK A6 NO.31-32', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MITRA TIMUR LESTARI, PT', 'N', '-'),
(1176, '0299', 'MITRA USAHA POWERINDO', 'JLN TAMAN SARI VIII NO. 14C,JAKARTA', '021-62317052', '021-62317054', '-', 'BP. DEDY', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MITRA USAHA POWERINDO', 'N', '-'),
(1177, '0300', 'MITSUI LEASING CAPITAL, PT', 'GEDUNG SATU LT.6 NO.609  - KELAPA GADING', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MITSUI LEASING CAPITAL, PT', 'N', '-'),
(1178, '0301', 'MORTEN.SA, TOKO', 'LINDETEVES TRADE CENTER LT UG BLOK B7/3', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MORTEN.SA, TOKO', 'N', '-'),
(1179, '0302', 'MUGI, PT', 'JL.PLN DUREN TIGA NO.99', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MUGI, PT', 'N', '-'),
(1180, '0303', 'MUHAMAD MANSYUR, BPK.', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MUHAMAD MANSYUR, BPK.', 'N', '-'),
(1181, '0304', 'MULIA JAYA KOMPUTER, TOKO', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MULIA JAYA KOMPUTER, TOKO', 'N', '-'),
(1182, '0305', 'MULIA JAYA, TB', 'JL PASAR KAHAYAN B1 L/18', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MULIA JAYA, TB', 'N', '-'),
(1183, '0306', 'MULIA MAKMUR ABADI, PT', 'JLN DAAN MOGOT RAYA KM 18,8', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MULIA MAKMUR ABADI, PT', 'N', '-'),
(1184, '0307', 'MULTI CHEMICAL, PD', 'JL PANGLIMA POLIM RAYA 125F', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MULTI CHEMICAL, PD', 'N', '-'),
(1185, '0308', 'MULTI MAS CHEMINDO, PT', 'JL. IMAM BONJOL NO.40 MEDAN 20152', '061-4550039 / 4563016', '061-4550151', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MULTI MAS CHEMINDO, PT', 'N', '-'),
(1186, '0309', 'MULYANA MANDIRI, TOKO', 'JL KELAPA DUA RAYA GG LANGGAR NO.7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MULYANA MANDIRI, TOKO', 'N', '-'),
(1187, '0310', 'MURNI BERLIAN MOTORS, PT', 'P A L A N G K A R A Y A', '0536-3234334 / 3234335', '0536-3234336', NULL, NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MURNI BERLIAN MOTORS, PT', 'N', '-'),
(1188, '0311', 'MUTUAGUNG LESTARI, PT', 'JL.RAYA BOGOR KM 33,5 NO.19', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011300', 'MUTUAGUNG LESTARI, PT', 'N', '-'),
(1189, '0312', 'NAGA MAS, TOKO', 'JL DARMOSUGONDO NO. 88', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NAGA MAS, TOKO', 'N', '-'),
(1190, '0313', 'NALCO INDONESIA, PT', 'GEDUNG BRI II - 1506, JL.SUDIRMAN 44-46', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NALCO INDONESIA, PT', 'N', '-'),
(1191, '0314', 'NAWILIS CAR CARE SPECIALIST', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NAWILIS CAR CARE SPECIALIST', 'N', '-'),
(1192, '0315', 'NEW SERDANG MOTOR', 'PASAR PALMERAH H3 BLOK A NO.12', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NEW SERDANG MOTOR', 'N', '-'),
(1193, '0316', 'NEW STAR SPORT', 'JL PETAK BARU NO.7 PASAR PAGI LAMA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NEW STAR SPORT', 'N', '-'),
(1194, '0317', 'NIAGA TANI NUSANTARA', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NIAGA TANI NUSANTARA', 'N', '-'),
(1195, '0318', 'NIAGARA, TOKO', 'JL. DHARMO SUGONDO, PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', 'N', '8600149777', 'BCA', 'HM SYAIRAZI', 0, '3010011400', 'NIAGARA, TOKO', 'N', '-'),
(1196, '0319', 'NIKYSAY, UD', 'JL.RADEN SALEH NO.7C', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NIKYSAY, UD', 'N', '-'),
(1197, '0320', 'NIPPON TEKNINDO, PT', 'JLN TRANSYOGI KM.6 CIBUBUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NIPPON TEKNINDO, PT', 'N', '-'),
(1198, '0321', 'NIRWANA TRANSPORT INDONESIA, EKSPEDISI', 'M E D A N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NIRWANA TRANSPORT INDONESIA, EKSPEDISI', 'N', '-'),
(1199, '0322', 'NOORHASAN, TOKO', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NOORHASAN, TOKO', 'N', '-'),
(1200, '0323', 'NUSA PUSAKA KECANA, PT', 'PO BOX 35 BAHLIANG ESTATE TEBING TINGGI', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NUSA PUSAKA KECANA, PT', 'N', '-'),
(1201, '0324', 'NUSANTARA AUTOSERVICE', 'JL.CILIK RIWUT KM 1,6 NO 67', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NUSANTARA AUTOSERVICE', 'N', '-'),
(1202, '0325', 'NUSANTARA BERLIAN MOTOR, PD', 'JL PALMERAH UTARA NO.107 JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NUSANTARA BERLIAN MOTOR, PD', 'N', '-'),
(1203, '0326', 'NUSANTARA EXPRESS MANDIRI', 'JLN DURI 1 NO.9 BLOK A-1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011400', 'NUSANTARA EXPRESS MANDIRI', 'N', '-'),
(1204, '0327', 'ONG ELECTRONIC', 'GLODOK HARCO LT 11 BLOK B2 NO.205A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011500', 'ONG ELECTRONIC', 'N', '-'),
(1205, '0328', 'ONNA INTERIOR', 'JL. RS FATMAWATI NO. 5B', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011500', 'ONNA INTERIOR', 'N', '-'),
(1206, '0329', 'ONNA PRIMA UTAMA,PT', 'JL KAPUK UTARA 1 NO.3 JAKARTA 14460', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011500', 'ONNA PRIMA UTAMA,PT', 'N', '-'),
(1207, '0330', 'PACIFIC COMMUNICATION', 'GLODOK HARCO LT.2 BLOC C NO.60', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PACIFIC COMMUNICATION', 'N', '-'),
(1208, '0331', 'PADI MAS MOTOR', 'JL.HADIAH 18, DAAN MOGOT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PADI MAS MOTOR', 'N', '-'),
(1209, '0332', 'PAN PACIFIC INSURANCE, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PAN PACIFIC INSURANCE, PT', 'N', '-'),
(1210, '0333', 'PANCA INDRATAMA, PT', 'JL.BENDUNGAN HILIR RAYA BLOK A/17', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PANCA INDRATAMA, PT', 'N', '-'),
(1211, '0334', 'PANDU COMMUNICATION', 'GLODOK HARCO BLOK C II NO. 278', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PANDU COMMUNICATION', 'N', '-'),
(1212, '0335', 'PARTIT KONDANG JAYA, CV', 'JL. JEND.SUDIRMAN KM 3', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PARTIT KONDANG JAYA, CV', 'N', '-'),
(1213, '0336', 'PASIFIC AUDIO', 'KOMP GLODOK PLAZA BLOK F NO.45', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PASIFIC AUDIO', 'N', '-'),
(1214, '0337', 'PELITA KARYA BAN, TOKO', 'JL. SAWAH BESAR 10 A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PELITA KARYA BAN, TOKO', 'N', '-'),
(1215, '0338', 'PEMUDA BAJA RAYA, PT', 'TAMAN MERUYA BLOK M NO.33', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PEMUDA BAJA RAYA, PT', 'N', '-'),
(1216, '0339', 'PERISAI INDONESIA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PERISAI INDONESIA, PT', 'N', '-'),
(1217, '0340', 'PERTAMINA PATRA NIAGA, PT', 'GRAHA ELNUSA 15TH FL, TB SIMATUPANG K.1B', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PERTAMINA PATRA NIAGA, PT', 'N', '-'),
(1218, '0341', 'PERTAMINA, PT', 'PULANG PISAU', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PERTAMINA, PT', 'N', '-'),
(1219, '0342', 'PERUSAHAAN PERDAGANGAN IND. PT', 'JL. LAKS.L.RE.MARTADINATA 19', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PERUSAHAAN PERDAGANGAN IND. PT', 'N', '-'),
(1220, '0343', 'PHONIXINDO @ M2', 'MANGGA DUA MAL LANTAI 4 NO. A-16', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PHONIXINDO @ M2', 'N', '-'),
(1221, '0344', 'PIA PRATAMA CARGO, PT', 'M E D A N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PIA PRATAMA CARGO, PT', 'N', '-'),
(1222, '0345', 'PIMSF PULOGADUNG, PT. (TJOKRO)', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PIMSF PULOGADUNG, PT. (TJOKRO)', 'N', '-'),
(1223, '0346', 'PLAZA AUTO PRIMA, PT', 'JL. PEMUDA RAYA 1 NO.6 JAKARTA TIMUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PLAZA AUTO PRIMA, PT', 'N', '-'),
(1224, '0347', 'PMT INDUSTRIES (LABUAN) LTD', 'MALAYSIA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PMT INDUSTRIES (LABUAN) LTD', 'N', '-'),
(1225, '0348', 'POLDA', 'K A L T E N G', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'POLDA', 'N', '-'),
(1226, '0349', 'POLOWIJO GOSARI, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'POLOWIJO GOSARI, PT', 'N', '-'),
(1227, '0350', 'POSITIVE FOAM INDUSTRY, PT', 'JL BETRO INDUSTRI 20', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'POSITIVE FOAM INDUSTRY, PT', 'N', '-'),
(1228, '0351', 'PPKS-MEDAN', 'JL. BRIGJEN KATAMSO NO.51, KP.BARU', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PPKS-MEDAN', 'N', '-'),
(1229, '0352', 'PRADIPTA NAYA GRIWA, PT', 'JL.PULOKAMBING II NO.26, PULOGADUNG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PRADIPTA NAYA GRIWA, PT', 'N', '-'),
(1230, '0353', 'PRAPTO, BPK.', 'GUNUNG MAS-KALTENG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PRAPTO, BPK.', 'N', '-'),
(1231, '0354', 'PRATAMA LISTRIK', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PRATAMA LISTRIK', 'N', '-'),
(1232, '0355', 'PRIMA JAYA KOMINDO', 'JL PANGERAN JAYAKARTA 24/12A,JAKARTA', '021-6284393', '021-6390527 / 6597944', '-', 'IBU. NINA', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PRIMA JAYA KOMINDO', 'N', '-'),
(1233, '0356', 'PRIMA MULIA ABADI, PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PRIMA MULIA ABADI, PT', 'N', '-'),
(1234, '0357', 'PRIMA SARANA TEKNIK', 'LTC GF2 BLOK A23 NO.3-7', '021-62303238', '021-62200848', '-', 'BP. ASEP', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PRIMA SARANA TEKNIK', 'N', '-'),
(1235, '0358', 'PRIMAJAYA KOMPUTER', 'MALL AMBASSADOR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PRIMAJAYA KOMPUTER', 'N', '-'),
(1236, '0359', 'PRIMANTARA SANDIESEL', 'JL BANDENGAN JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PRIMANTARA SANDIESEL', 'N', '-'),
(1237, '0360', 'PROMUDIA', 'MANGGA DUA MALL, LT.4, NO.3-4', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PROMUDIA', 'N', '-'),
(1238, '0361', 'AGRI HIKAY INDONESIA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'AGRI HIKAY INDONESIA, PT', 'N', '-'),
(1239, '0362', 'PURWO TEKNIK', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PURWO TEKNIK', 'N', '-'),
(1240, '0363', 'PURWO, BPK.', 'S I D O A R J O', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PURWO, BPK.', 'N', '-'),
(1241, '0364', 'PUTERA CORRY MAJU BERSAMA, PT', 'B A N J A R M A S I N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PUTERA CORRY MAJU BERSAMA, PT', 'N', '-'),
(1242, '0365', 'PUTRA BORNEO NUSANTARA INDAH, PT', 'FORD JAKARTA TIMUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PUTRA BORNEO NUSANTARA INDAH, PT', 'N', '-'),
(1243, '0366', 'PUTRA HADISURYA MAHESA, PT', 'RUKO PALMERAH NO.11I', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PUTRA HADISURYA MAHESA, PT', 'N', '-'),
(1244, '0367', 'PUTRA JAYA MOTOR', 'JL.PALMERAH BERAT NO.11I/J', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PUTRA JAYA MOTOR', 'N', '-'),
(1245, '0368', 'PUTRAGUNA TYRE SERVICE CENTER', 'JL. FATMAWATI NO.11', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PUTRAGUNA TYRE SERVICE CENTER', 'N', '-'),
(1246, '0369', 'QUANTUM - RAKITAN.NET', 'MANGGA DUA MALL, LV.5 BLOK D.26', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011700', 'QUANTUM - RAKITAN.NET', 'N', '-'),
(1247, '0370', 'RADIAN JAYA POWERINDO', 'HARCO MANGGA DUA LT3 BLOK B NO.58', '021-62203394', '021-62203394', '-', 'IBU. IRA', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RADIAN JAYA POWERINDO', 'N', '-'),
(1248, '0371', 'RADIO DALAM RAYA MOTOR', 'JLN RADIO DALAM RAYA NO.49A-B', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RADIO DALAM RAYA MOTOR', 'N', '-'),
(1249, '0372', 'RAFINDO OCEAN TRANS ABADI, PT', 'JL. YOS SUDARSO BLOK I LT.2 NO. 6', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RAFINDO OCEAN TRANS ABADI, PT', 'N', '-'),
(1250, '0373', 'RAHMAD MOTOR', 'JL DARMO SUGONDO NO.5', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RAHMAD MOTOR', 'N', '-'),
(1251, '0374', 'RAHMAT JAYA, MEUBEL', 'JL. BELIANG NO 007', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RAHMAT JAYA, MEUBEL', 'N', '-'),
(1252, '0375', 'RAJA KANTOR', 'JLN OTISTA RAYA NO.30 CAWANG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RAJA KANTOR', 'N', '-'),
(1253, '0376', 'RAJAWALI PENTA GRAFIKA, PT', 'JL.DR.MUWARDI RAYA NO.10-11', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RAJAWALI PENTA GRAFIKA, PT', 'N', '-'),
(1254, '0377', 'RAKSA INDO STEEL, PT', 'JLN RAYA SUMENGKO KM.30 WRINGINANOM', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RAKSA INDO STEEL, PT', 'N', '-'),
(1255, '0378', 'RAKSA PRATIKARA ASURANSI, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RAKSA PRATIKARA ASURANSI, PT', 'N', '-'),
(1256, '0379', 'RALON BAN', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RALON BAN', 'N', '-'),
(1257, '0380', 'RAMA JAYA, TOKO', 'JL RAJAWALI PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RAMA JAYA, TOKO', 'N', '-'),
(1258, '0381', 'REJEKI, TOKO OBAT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'REJEKI, TOKO OBAT', 'N', '-'),
(1259, '0382', 'REMAJA MOTOR', 'Jln Tanah Tinggi 1 No. 17B-C Jakarta pusat ', '021-4250175', '021-42800392', NULL, 'BP. DAVID', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'REMAJA MOTOR', 'N', '-'),
(1260, '0383', 'RESTU JAYA SENTOSA', 'JLN BANGKA BLOK DII NO.3', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RESTU JAYA SENTOSA', 'N', '-'),
(1261, '0384', 'RIDWAN ENGENEERING', 'JLN. KRAMAT 1 NO.10 JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RIDWAN ENGENEERING', 'N', '-'),
(1262, '0385', 'RIZAL COPY SERVICE', 'RUKAN MAHKOTA SIMPRUG BLOK A 10/7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'RIZAL COPY SERVICE', 'N', '-'),
(1263, '0386', 'ROBBY FURNITURE', 'JL PANGLIMA POLIM RAYA NO.7A BLOK A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'ROBBY FURNITURE', 'N', '-'),
(1264, '0387', 'ROLIMEX KIMIA NUSAMAS, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011800', 'ROLIMEX KIMIA NUSAMAS, PT', 'N', '-'),
(1265, '0388', 'SAGALA, BPK.', 'TB.TALAKEN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SAGALA, BPK', 'N', '-'),
(1266, '0389', 'SAHABAT, TOKO', 'JL. A.YANI KM.8 NO.7,BANJARMASIN', '0511-4281838', '0511-4283717', '-', 'BP.AGUS', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SAHABAT, TOKO', 'N', '-'),
(1267, '0390', 'SAHANA MOTOR, BENGKEL', 'JL.RADIO DALAM RAYA 99A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SAHANA MOTOR, BENGKEL', 'N', '-'),
(1268, '0391', 'SALAMAH, IBU', 'PALANGKARAYA-KALTENG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SALAMAH, IBU', 'N', '-'),
(1269, '0392', 'SAMAFITRO, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SAMAFITRO, PT', 'N', '-'),
(1270, '0393', 'SAMUDRA MAS, TOKO', 'JL P. ANTASARI NO.123 RUKO DEKAT PASAR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SAMUDRA MAS, TOKO', 'N', '-'),
(1271, '0394', 'SANJAYA TEHNIK, TOKO', 'PLAZA JAYAKARTA NO.1119 JL. LABU', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SANJAYA TEHNIK, TOKO', 'N', '-'),
(1272, '0395', 'SANJAYA, TOKO', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SANJAYA, TOKO', 'N', '-'),
(1273, '0396', 'SAPROTAN UTAMA, CV', 'KOMPLEKS KEDOYA ELOK PLAZA BLOK DB-34', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SAPROTAN UTAMA, CV', 'N', '-'),
(1274, '0397', 'SARANA INTI PRATAMA, PT', 'PEKANBARU', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SARANA INTI PRATAMA, PT', 'N', '-'),
(1275, '0398', 'SARANA PRIMA LESTARI, CV', 'JL.PRAMUKA NO.3 RT.16 BANJARMASIN', '0511-3269593', '0511-3272142 / 3252455', '-', 'BP. MUKLAS', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SARANA PRIMA LESTARI, CV', 'N', '-'),
(1276, '0399', 'SARI HIKMAH NUSANTARA, CV', 'JLN KECAPI NO.1 BEJI TIMUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SARI HIKMAH NUSANTARA, CV', 'N', '-'),
(1277, '0400', 'SARI MURAH, TOKO', 'Ps Palmerah lt dasar AK5 No.1', '021-53668699', '021-53668699', '-', 'IBU. ESTER HERMANTO', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SARI MURAH, TOKO / ESTER', 'N', '-'),
(1278, '0401', 'SATRIA BUANA TEHNIK', 'LTC LANTAI 2 BLOK B8 NO. 7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SATRIA BUANA TEHNIK', 'N', '-'),
(1279, '0402', 'SEDERHANA MOTOR', 'JL DARMOSUGONDO NO.55 ,PALANGKARAYA', '0536-3222718', '0536-3221498', '-', 'IBU. LUSY', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SEDERHANA MOTOR', 'N', '-'),
(1280, '0403', 'SEFAS KELIANTAMA, PT', 'JL.CIDENG BARAT NO.87, JAKARTA PUSAT', '021-3858756', '021-3866056', NULL, 'IBU.YENNE', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SEFAS KELIANTAMA, PT', 'N', '-'),
(1281, '0404', 'SEIRAMA, UD', 'KUALA KAPUAS', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SEIRAMA, UD', 'N', '-'),
(1282, '0405', 'SEJAHTERA RAYA, CV', 'BEKASI', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SEJAHTERA RAYA, CV', 'N', '-'),
(1283, '0406', 'SELARAS NUSA ABADI, PT', 'JL. TB. SIMATUPANG NO. 14', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SELARAS NUSA ABADI, PT', 'N', '-'),
(1284, '0407', 'SEMBADA GRAHA PERSADA, PT', 'JLPEJATEN BARAT II NO.80', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SEMBADA GRAHA PERSADA, PT', 'N', '-'),
(1285, '0408', 'SEMESTA MANDIRI INDONESIA, PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SEMESTA MANDIRI INDONESIA, PT', 'N', '-'),
(1286, '596', 'SENTANA ADIDAYA PRATAMA, PT', 'JL TEMBUS MENTUIL NO,90 RT 04 BANJARMASIN ', '08125048480', '-', 'SUPPLIER PUPUK ', 'BPK SETIO', 30, 'Hari', '01 907 041.6-092.000', 'Y', NULL, NULL, NULL, 0, '3010011900', 'SENTANA ADIDAYA PRATAMA, PT', 'N', '-'),
(1287, '0410', 'SENTRA TEKNIK', 'PERTOKOAN GLODOK JAYA NO.17', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SENTRA TEKNIK', 'N', '-'),
(1288, '0411', 'SENTRAL TEKNOLOGI RAKSA', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SENTRAL TEKNOLOGI RAKSA', 'N', '-'),
(1289, '0412', 'SENTRASARANA TIRTABENING, PT', 'MANGGA BESAR RAYA 81', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SENTRASARANA TIRTABENING, PT', 'N', '-'),
(1290, '0413', 'SERBA AGUNG TEHNIK', 'LTC Lt.2 Blok C43 No.2 Jakarta ', '021-62201560 / 62316988', '021-62201561', '-', 'BP. TEDDY', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SERBA AGUNG TEHNIK', 'N', '-'),
(1291, '0414', 'SETIA WIJAYA', 'JL PELITA 107A RT028/005 MENTAWA BARU', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SETIA WIJAYA', 'N', '-'),
(1292, '0415', 'SHOP AND DRIVE', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SHOP AND DRIVE', 'N', '-'),
(1293, '0416', 'SIMPRUG MOBIL', 'JL.SULTAN ISKANDAR MUDA NO.1, KEBAYORAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SIMPRUG MOBIL', 'N', '-'),
(1294, '0417', 'SINAR BARU, TOKO', 'JL DARMO SUGONDO NO.39', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SINAR BARU, TOKO', 'N', '-'),
(1295, '0418', 'SINAR BARU, UD', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SINAR BARU, UD', 'N', '-'),
(1296, '0419', 'SINAR BINTANG ABADI', 'LTC GLODOK LT. UG BLOK A2 NO.6', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SINAR BINTANG ABADI', 'N', '-'),
(1297, '0420', 'SINAR INTI TEKNOLOGI, PT', 'JL. MANYAR JAYA I NO.32', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SINAR INTI TEKNOLOGI, PT', 'N', '-'),
(1298, '0421', 'SINAR KAHAYAN, TOKO', 'JL DARMO SUGONDO NO.17 PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SINAR KAHAYAN, TOKO', 'N', '-'),
(1299, '0422', 'SINAR MANDIRI KREASINDO, CV', 'JL.TAMANSARI RAYA BLOK D28 NO.08-09', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SINAR MANDIRI KREASINDO, CV', 'N', '-'),
(1300, '0423', 'SINAR PLASTIK', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SINAR PLASTIK', 'N', '-'),
(1301, '0424', 'SINAR SELATAN, TOKO', 'JL PANGLIMA POLIM RAYA NO. 192', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SINAR SELATAN, TOKO', 'N', '-'),
(1302, '0425', 'SINAR TERANG (TIREZONE), UD', 'JL. UNDAAN KULON NO. 29 SURABAYA', '031-5328818', '031-5323698', '-', 'BP. HENDRA', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SINAR TERANG (TIREZONE), UD', 'N', '-'),
(1303, '0426', 'SINAR TERANG ABADI, TOKO', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SINAR TERANG ABADI, TOKO', 'N', '-'),
(1304, '0427', 'SINARALAM DUTAPERDANA II, PT', 'JL. KP TENDEAN NO.174 LT.II BANJARMASIN', '0511-3268280', '0511-3268174', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SINARALAM DUTAPERDANA II, PT', 'N', '-'),
(1305, '0428', 'SOCFIN INDONESIA, PT', 'MEDAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SOCFIN INDONESIA, PT', 'N', '-'),
(1306, '0429', 'SOLARTEK, PT', 'JL.TAMAN PENDIDIKAN NO.2', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SOLARTEK, PT', 'N', '-'),
(1307, '0430', 'SOLO TEHNIK', 'LTC HWI LT DASAR BLOK D NO.80', '021-6244641', '021-6244641', '-', 'IBU. ALVINA', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SOLO TEHNIK', 'N', '-'),
(1308, '0431', 'SUARA MAS, TOKO', 'JLN IR. H JUANDA NO.17 CIPUTAT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUARA MAS, TOKO', 'N', '-'),
(1309, '0432', 'SUBUR BAN MOTOR', 'JL DR MURJANI NO. 36 LANGKAI PAHANDUT,PALANGKARAYA', '0536-3225309 / 4212677', '0536-3225309', '-', 'IBU. YANA / SALSA', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUBUR BAN MOTOR', 'N', '-'),
(1310, '0433', 'SUCOFINDO, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUCOFINDO, PT', 'N', '-'),
(1311, '0434', 'SUKSES MOTOR', 'JL MANDALA RAYA NO.6 TOMANG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUKSES MOTOR', 'N', '-'),
(1312, '0435', 'SUKSES TUNGGAL MANDIRI, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUKSES TUNGGAL MANDIRI, PT', 'N', '-'),
(1313, '0436', 'SUMBER AGRINDO SEJAHTERA, PT', 'BANJARMASIN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUMBER AGRINDO SEJAHTERA, PT', 'N', '-'),
(1314, '0437', 'SUMBER BERLIAN MOTOR, PT', 'KM 10,300 KERTAK HANYAR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUMBER BERLIAN MOTOR, PT', 'N', '-'),
(1315, '0438', 'SUMBER KARYA, TOKO', 'JLN DARMOSUGONDO 72', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUMBER KARYA, TOKO', 'N', '-'),
(1316, '0439', 'SUMBER MAWAR MOTOR', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUMBER MAWAR MOTOR', 'N', '-'),
(1317, '0440', 'SUMBER MAWAR TEHNIK', 'JL NIAS 10, PALANGKARAYA', '-', NULL, NULL, NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUMBER MAWAR TEHNIK', 'N', '-'),
(1318, '0441', 'SUMBER MULIA', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUMBER MULIA', 'N', '-'),
(1319, '0442', 'SUMBER REZEKI, TOKO', 'LINDETEVES TRADE CENTER GF2 A25 N0.7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUMBER REZEKI, TOKO', 'N', '-'),
(1320, '0443', 'SUMBER UTAMA BEARING', 'Krekot Jaya Molek Blok C3/1 Jakarta Pusat 10710', '021-3440421, 3505008', '021-344 0425', NULL, NULL, 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUMBER UTAMA BEARING', 'N', '-'),
(1321, '0444', 'SUMBERPARTS BERINDO, PT', 'J A K A R T A', '021-3440421', '021-3440425', '-', NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUMBERPARTS BERINDO, PT', 'N', '-'),
(1322, '0445', 'SUN STAR PRIMA MOTOR, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUN STAR PRIMA MOTOR, PT', 'N', '-'),
(1323, '0446', 'SUNDA MOTOR, TOKO', 'J A K A R T A', '021-384 6970', '021-384 6970', '-', NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUNDA MOTOR, TOKO', 'N', '-'),
(1324, '0447', 'SUPER DIESEL', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUPER DIESEL', 'N', '-'),
(1325, '0448', 'SUPRIANTO, BPK.', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUPRIANTO, BPK.', 'N', '-'),
(1326, '0449', 'SURYA BORNEO TRACTOR, TOKO', 'B A N J A R M A S I N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SURYA BORNEO TRACTOR, TOKO', 'N', '-'),
(1327, '0450', 'SURYA CHANDRA, BPK.', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SURYA CHANDRA, BPK.', 'N', '-'),
(1328, '0451', 'SURYA KENCANA SS., BENGKEL', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SURYA KENCANA SS., BENGKEL', 'N', '-'),
(1329, '0452', 'SURYA MANUNGGAL AGRO SEJATI,PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SURYA MANUNGGAL AGRO SEJATI,PT', 'N', '-'),
(1330, '0453', 'SURYA NUSA AGRO MAKMUR, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SURYA NUSA AGRO MAKMUR, PT', 'N', '-'),
(1331, '0454', 'SURYA TANI, UD', 'M E D A N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SURYA TANI, UD', 'N', '-'),
(1332, '0455', 'SUTINDO RAYA MULIA', 'JL TANJUNG SARI 44I SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUTINDO RAYA MULIA', 'N', '-'),
(1333, '0456', 'SWEET CORNER STATIONERY', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SWEET CORNER STATIONERY', 'N', '-'),
(1334, '0457', 'TAIKO PERSADA INDOPRIMA, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TAIKO PERSADA INDOPRIMA, PT', 'N', '-'),
(1335, '0458', 'TAMARA, TOKO', 'P A L A N G K A R A Y A', NULL, NULL, NULL, NULL, 0, 'Hari', '-', 'N', '8600525787', 'BCA', 'NOOR KHALISH SHIDIQ', 0, '3010012000', 'TAMARA, TOKO', 'N', '-'),
(1336, '0459', 'TEDJO JAYA DIESEL, UD', 'JL HUSIN II / 1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TEDJO JAYA DIESEL, UD', 'N', '-'),
(1337, '0460', 'TEGUH ANUGERAH, TOKO', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TEGUH ANUGERAH, TOKO', 'N', '-'),
(1338, '0461', 'TEGUH ANUGRAH, UD', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TEGUH ANUGRAH, UD', 'N', '-'),
(1339, '0462', 'TEGUH, PD', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TEGUH, PD', 'N', '-'),
(1340, '0463', 'TEHNIK UTAMA, TOKO', 'JL HALMAHERA 15 LANGKAI, PAHADUT', '0536-3229682', '0536-3235575', '-', 'BU HUSNA / BU IMAR', 0, 'Hari', '-', 'N', '031 00989 58963', 'Bank Mandiri', 'Hj Misliyani', 0, '3010012000', 'TEHNIK UTAMA, TOKO', 'N', '-'),
(1341, '0464', 'TEKNIK BAN, TOKO', 'JL DR MURJANI 7, LANGKAI PAHANDUT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TEKNIK BAN, TOKO', 'N', '-'),
(1342, '0465', 'TELAGA MULYA, CV', 'JL FLAMBOYAN RAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TELAGA MULYA, CV', 'N', '-'),
(1343, '0466', 'TERBIT, PD', 'RUKO WISMA HARAPAN BLOK E-1 NO.34', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TERBIT, PD', 'N', '-'),
(1344, '0467', 'TERUS JAYA, TOKO', 'HWI LINDETEVES LT.DASAR BLOK DKS NO.111', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TERUS JAYA, TOKO', 'N', '-'),
(1345, '0468', 'THOMINDO MANDIRI SUKSES, PT', 'JL. HUSEIN S.NEGARA 22A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'THOMINDO MANDIRI SUKSES, PT', 'N', '-'),
(1346, '0469', 'TIGA DARA, TOKO', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TIGA DARA, TOKO', 'N', '-'),
(1347, '0470', 'TIMUR BARU, TB', 'JL. PANGLIMA POLIM RAYA NO.54', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TIMUR BARU, TB', 'N', '-'),
(1348, '0471', 'TIMUR JAYA, TOKO', 'PS.MOBIL KEMAYORAN BLOK 5/III-H', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TIMUR JAYA, TOKO', 'N', '-'),
(1349, '0472', 'TJANDI MAS, TOKO', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TJANDI MAS, TOKO', 'N', '-'),
(1350, '0473', 'TJOKRO BERSAUDARA BANJARINDO, PT', 'JL.A.YANI KM12.9 , BANJARMASIN', '0511-4220489', '0511-4220499', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TJOKRO BERSAUDARA BANJARINDO, PT', 'N', '-'),
(1351, '0474', 'TJOKRO PUTRA PERSADA, PT', 'JL. EROPA 1 KAV.G2 - KIEC - CILEGON', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TJOKRO PUTRA PERSADA, PT', 'N', '-'),
(1352, '0475', 'TOKO ( KAS )', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TOKO ( KAS )', 'N', '-'),
(1353, '0476', 'TRACLINK AUTO PART', 'RUKO GALAXY BLOK O NO.60 CENGKARENG', '021-55957434', '021-55957434', '-', 'BP.AGUS', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TRACLINK AUTO PART', 'N', '-'),
(1354, '0477', 'TRACLINKDO MAKMUR', 'RUKO GALAXY BLOK O NO.50 CENGKARENG', '021-5595 7434', '021-5595 7434', NULL, 'Bp.Agus', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TRACLINKDO MAKMUR', 'N', '-'),
(1355, '0478', 'TRAKTOR NUSANTARA, PT', 'JL PULOGADUNG NO. 32 KAWASAN INDUSTRI PULOGADUNG, JAKARTA 13930 - 1403/JAT (13014)', '4608836.4608840.4603657', '4508843. 45820763', 'ALAT BERAT ', 'FAHRI FAJRI ', 0, 'Hari', '-', 'Y', NULL, NULL, NULL, 0, '3010012000', 'TRAKTOR NUSANTARA, PT', 'N', '-'),
(1356, '0479', 'TRIMEGA POWER', 'KOMP.MEGA SPARE PART JL. TAMAN SARI RAYA BLOK.D1 NO.1A', '021-6262107', '021-6262723', '-', 'IBU. HUSNUL', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TRIMEGA POWER', 'N', '-'),
(1357, '0480', 'TRISULA INTI USAHA, PT', 'JL. CIPINANG JAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TRISULA INTI USAHA, PT', 'N', '-'),
(1358, '0481', 'TUNAS HARAPAN BARU, PT', 'JL.JEND SUDIRMAN NO.10/22', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TUNAS HARAPAN BARU, PT', 'N', '-'),
(1359, '0482', 'TUNAS RIDEAN TBK, PT', 'JLN RAYA KEBAYORAN LAMA NO.38 PALMERAH', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TUNAS RIDEAN TBK, PT', 'N', '-'),
(1360, '0483', 'TUNAS TOYOTA RADIN INTEN', 'JL.RADIN INTEN II NO.62', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012000', 'TUNAS TOYOTA RADIN INTEN', 'N', '-'),
(1361, '0484', 'UNGGUL JAYA DIESEL', 'JL. BEKASI I / 21C, JATINEGARA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012100', 'UNGGUL JAYA DIESEL', 'N', '-'),
(1362, '0485', 'UNI PARAMANDALA PATHYA, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012100', 'UNI PARAMANDALA PATHYA, PT', 'N', '-'),
(1363, '0486', 'UNITED MOBIL INTERNATIONAL, PT', 'JL.CILIK RIWUT KM.6', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012100', 'UNITED MOBIL INTERNATIONAL, PT', 'N', '-'),
(1364, '0487', 'UNITED TRACTORS, PT', 'JL. JEND.SUDIRMAN KM.7.2,SAMPIT, KALIMANTAN TENGAH', '0531-2035706/16/26', '0531-', 'SUPPLIER SPAREPART KOMATSU', 'BPK RIDHO', 0, 'Hari', '01.308.524.6-091.000', 'Y', '031-0004957703', 'BANK MANDIRI ', 'PT UNITED TRACTOR TBK', 0, '3010012100', 'UNITED TRACTORS, PT', 'N', '-'),
(1365, '0488', 'V21, TOKO', 'JLN SAWAH BESAR 1 NO.21 JAKARTA', '021-625 8496', '021-649 7372', '-', 'IBU. WIDIA', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010012200', 'V21, TOKO', 'N', '-'),
(1366, '0489', 'VENETA SYSTEM', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012200', 'VENETA SYSTEM', 'N', '-'),
(1367, '0490', 'VICENZA', 'JL. RADIO DALAM RAYA NO.14A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012200', 'VICENZA', 'N', '-'),
(1368, '0491', 'VITALI, TOKO', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012200', 'VITALI, TOKO', 'N', '-'),
(1369, '0492', 'WAHANA AUTO EKAMARGA, PT', 'JL LETJEN S PARMAN KAV N-1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012300', 'WAHANA AUTO EKAMARGA, PT', 'N', '-'),
(1370, '0493', 'WAREKON GEOPERTA UTAMA SEJATI, PT', 'B E K A S I', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012300', 'WAREKON GEOPERTA UTAMA SEJATI, PT', 'N', '-'),
(1371, '0494', 'WELLRACOM NUSANTARA, PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012300', 'WELLRACOM NUSANTARA, PT', 'N', '-'),
(1372, '0495', 'WELLY, TOKO LISTRIK', 'JL PALMERAH BARAT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012300', 'WELLY, TOKO LISTRIK', 'N', '-'),
(1373, '0496', 'WILLIAM JAYA MOTOR, TK', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012300', 'WILLIAM JAYA MOTOR, TK', 'N', '-'),
(1374, '0497', 'WIRA MEGAH PROFITAMAS, PT', 'JL.TJILIK RIWUT KM.5 NO.6', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012300', 'WIRA MEGAH PROFITAMAS, PT', 'N', '-'),
(1375, '0498', 'X-COM MEDIA', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012400', 'X-COM MEDIA', 'N', '-'),
(1376, '0499', 'YAMAICA', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012500', 'YAMAICA', 'N', '-'),
(1377, '0500', 'YANCHE JAYA, CV', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012500', 'YANCHE JAYA, CV', 'N', '-'),
(1378, '0501', 'YAYAN PUTRA BAHARINDO PT.', 'JL.ALIPANDI SARJEN NO 43 RT 09', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012500', 'YAYAN PUTRA BAHARINDO PT.', 'N', '-'),
(1379, '0502', 'YESTV INDONESIA, PT', 'JL RADIO DALAM RAYA NO.17A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012500', 'YESTV INDONESIA, PT', 'N', '-'),
(1380, '0503', 'ZOE MUSIC', 'JL A.YANI SEBELAH BANK BRI', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010012600', 'ZOE MUSIC', 'N', '-'),
(1381, '0504', 'ELCO ELEKTRONIK', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010010500', 'ELCO ELEKTRONIK', 'N', '-'),
(1382, '0505', 'SUMBER ARUM ABADI, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011900', 'SUMBER ARUM ABADI, PT', 'N', '-'),
(1383, '0506', 'LIMAS LABORATORY ABADI', 'JL.SERSAN ASWAN NO.70,RAWA SEMUT,BEKASI TIMUR', '021-98991439', '021-88347133', '-', 'BP. DEDI', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011200', 'LIMAS LABORATORY ABADI', 'N', '-'),
(1384, '0507', 'VICTORIA PRIMA PERKASA,PT', 'JL GARUDA NO.34-E KEMAYORAN JAKARTA UTARA 10610', '021-4207318', '021-4207317', 'PERALATAN LAB ', 'BU LENNA', 0, 'Hari', '-', 'N', '070 1960 475', 'BANK PERMATA ', 'PT VICTORIA PRIMA PERKASA', 0, '3010012200', 'VICTORIA PRIMA PERKASA,PT', 'N', '-'),
(1385, '0508', 'PRIMA SENTOSA PRATAMA PUTRA', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '3010011600', 'PRIMA SENTOSA PRATAMA PUTRA', 'N', '-'),
(1386, '0509', 'PANAMAS SEJAHTERA, PT', 'JL CEMPEDAK IV BLOK G9 NO.29 PAMULANG ESTATE, TANGSEL ', '021-236373359', '021-7413230', 'BORDIR ', 'BPK BENNY ', 0, 'Hari', '-', 'N', '1.127.01.000124.30-4', 'BANK BRI  KCP PAMULANG ', 'PT PANAMAS SEJAHTERA', 0, '3010011600', 'PANAMAS SEJAHTERA, PT', 'N', '-'),
(1387, '0510', 'BUANA SURVEY', 'JLN MUCHTAR RAYA NO.1D KREO', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010200', 'BUANA SURVEY', NULL, NULL),
(1388, '511', 'INDAH UTAMA,PD', '-', '021-6283831', '021-6248287', '-', 'BP. ARDIAN', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010200', 'BANJAR BEARING SENTOSA, PT', 'N', '-'),
(1389, '512', 'SEGELINDO PUTRA MANDIRI, CV ', 'JLN KAJI RAYA NO.221 JAKARTA PUSAT', '-', '-', '-', '-', 1, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SEGELINDO PUTRA MANDIRI', 'N', '-'),
(1390, '513', 'JNE EXPRESS', 'JL. RADIO DALAM RAYA', '021-', '021-', 'EKSPEDISI', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011400', 'NUSA JAYA', 'N', '-'),
(1391, '514', 'JAYATECH PALMINDO', 'KAWASAN INDUSTRI MEDAN 2 JL PULAU SOLOR NO.18 KEC. PERCUT SEI TUAN, DELI SERDANG 20371 SUMATERA UTARA', '061 6871988', '061-6871983', '-', 'SUSANTO MARGONO', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011000', 'JAYATECH PALMINDO, PT', 'N', '-'),
(1392, '515', 'TITIPAN INTERNAL', '-', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '0', NULL, 'N', '-'),
(1393, '516', 'NUSA JAYA', 'HARCO MANGGA DUA LT.2 BLOK.B2-77,99,100', '021-6013830 / 6121831', '021-6125485', 'COMPUTER', 'RINI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011400', 'NUSA JAYA', 'N', '-'),
(1394, '517', 'PUTRA BENGAWAN MANDIRI,CV', 'JL. GUB.SOEBARJO/LINGKAR SELATAN,BANJARBARU', '0511-7755597', '0511-', '-', 'BP. FRANS', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', 'PUTRA BENGAWAN MANDIRI, CV', 'N', '-'),
(1395, '518', 'DJUN ELECTRONIC', 'RUKO GLODOK MAKMUR NO.26 , JAKARTA', '021-6590104', '021-6590117', '-', 'IBU. ELLIS', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010400', 'DJUN ELECTRONIC', 'N', '-'),
(1396, '519', 'CENTURY COMPUTER', 'HARCO MANGGA DUA BLOK.A LT.1 NO. 20 JAK-UT', '021-62307455 / 6121484', '021-62307455 / 6121484', '-', 'IBU. ATRIA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010300', 'CENTURY COMPUTER', 'N', '-'),
(1397, '520', 'KARIMA MOTOR', 'BANJARMASIN', '0511-7759227', '0511', '-', '-', 0, 'Hari', '-', '-', '0310007116661', 'MANDIRI', 'UMI ASTI', 0, '3010011100', 'KARIMA MOTOR', 'N', '-'),
(1398, '521', 'ALAM JEMBAR BARU,PT', 'Komp.Perumahan Pembina No.75 Jl. HM.Arsyad/Jl.Pembina 1 Sampit', '0531-33311', '0531-33311', '-', 'IBU. SYARI LIANI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ALAM SEMBAR BAR, CV', 'N', '-'),
(1399, '522', 'MEGA JAYA MANDIRI', 'JL. BUNI BLOK.J NO.28-30,JAKARTA BARAT', '021-6241196', '021-6243285', '-', 'BP. RIO', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MEGA JAYA MANDIRI', 'N', '-'),
(1400, '523', 'JAYA TEKNIK,CV', 'Taman Sari Raya No.37A', '021-6296106', '021-6241678', NULL, 'Bp. Hambali', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011000', 'JAYA TEKNIK, CV', 'N', '-'),
(1401, '524', 'CIPTA SINERGI MANDIRI,CV', 'JL. RAYA TIPAR CAKUNG,GRIYA TIPAR CAKUNG NO.7,JAK-TIM', '021-90277133 / 49551076', '021-49551076', '-', 'IBU.ARINY', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010300', 'CIPTA SINERGI MANDIRI,PT', 'N', '-'),
(1402, '525', 'SENTRA MULIA MANDIRI,PT', 'JL.TAMAN SARI RAYA 10 NO.10,JAK-PUS', '021-6259802 / 6259716', '021-62309647', '-', 'BP. DAVID', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SENTRA MULIA MANDIRI,PT', 'N', '-'),
(1403, '526', 'SUKSES MANDIRI SENTOSA,CV', 'JL.A.YANI KM 15,5 NO.3 SAMPING KANTOR PLN BAMBUT,BANJARMASIN', '0511-4220026', '0511-4221598', '-', 'BP. RIDWAN', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SUKSES MANDIRI SENTOSA, CV', 'N', '-'),
(1404, '527', 'UNITED PRATAMA,UD', 'JL. A.YANI KM.3,5 NO.7 BANJARMASIN', '0511-3258066', '0511-3258066', '-', 'BP. VERNANDY', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012100', 'UNITED PRATAMA, UD', 'N', '-'),
(1405, '528', 'AGRINDO KALIMANTAN LESTARI ', 'JL PANGERAN SURIANSYAH NO.32 BANJARBARU - KAL SEL 70711', '0511 4777407 / 4871459', '0511 4773135', 'SUPPLIER PART PABRIK ', 'EDDY CHALIKDJEN', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'AGRINDO KALIMANTAN LESTARI,PT', 'N', '-'),
(1406, '529', 'LEGENDA FURNITURE', 'JL RAYA SERPONG KM.7 NO.88D-E-F SERPONG, TANGGERANG 15123', '021 53121132, 53125869', '021 53125869', 'FURNITURE', 'BU RINA', 0, 'Hari', '-', '-', '883 0520 555', 'BCA ', 'RICHAELD', 0, '3010011200', 'LEGENDA FURNITURE', 'N', '-'),
(1407, '530', 'MIRUSA GRAHA,PT', 'Jl. Guntur No.32 Manggarai', '021-8291900', '021-8291769', '-', 'BP. EFFENDI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MIRUSA GRAHA, PT', 'N', '-'),
(1408, '839', 'ECOLAB INTERNATIONAL INDONESIA, PT', 'PONDOK INDAH OFF. TOWER 3, 6TH FL. SUITE 602 JL. SULTAN ISKANDAR MUDA KAV. V-TA, PONDOK INDAH 12310 JAKARTA', '-', '-', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010500', 'ECOLAB INTERNATIONAL INDONESIA, PT', 'N', '-'),
(1409, '532', 'SUMBER JAYA ', 'JL. S. PARMAN\nPALANGKARAYA ', '0536-3290039 / 08125116639', '-', 'SUPPLIER BESI ', 'BPK HARIJONO / DICKY', 0, 'Hari', '-', '-', '8600.472.888', 'BCA ', 'HARIJONO TAUFIK', 0, '3010011900', 'SUMBER JAYA, TOKO', 'N', '-'),
(1410, '533', 'KEJURUTERAAN WANG YUEN SDN BHD', '11. JALAN TIGA. OOF JALAN CHAN SOW LIN, 55200 KUALA LUMPUR, MALAYSIA ', '603-922 10331', '603-922 11039', 'SPAREPART PABRIK ', 'DANIEL CHEONG', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3015011100', 'KEJURUTERAAN WANG YUEN SDN BHD', 'N', '-'),
(1411, '534', 'ARITA PRIMA INDONESIA,PT', 'JL. TJILIK RIWUT KM.2,5 RUKO NO.3 & 4 SAMPIT', '0531-32129', '0531-31262', '-', 'BP. DIDI AHMAD', 30, 'Hari', '-', '-', '428.167.8668', 'BANK BCA', 'PT ARITA PRIMA INDONESIA', 0, '3010010100', 'ARITA PRIMA INDONESIA TBK, PT', 'N', '-'),
(1412, '535', 'HARTA BAN INDONESIA,PT', 'Gd.Menara Satu Sentra Kelapa Gading Lt 0705 Jl.Boulevard Kelapa Gading LA3 No.1', '021- 2937 5677', '021- 2937 5795', '-', 'BP. AGUNG ANUGROHO', 30, 'Hari', '31.328.250.1-043.000', 'Y', NULL, NULL, NULL, 0, '3010010800', 'HARTA BAN INDONESIA, PT', 'N', '-'),
(1413, '536', 'KEN ELECTRIC', 'GLODOK MAKMUR LT.DASAR', '021-6009071', '021-6009071', '-', 'BP. BUDI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011100', 'KEN ELECTRICS', 'N', '-'),
(1414, '537', 'FORTUNA,TOKO', 'JL. MT.HARYONO NO.25, SAMPIT', '-', '-', '-', 'BP. ALIANUR', 0, 'Hari', '-', '-', '1590005538888', 'MANDIRI', 'Mohamad Alianur', 0, '3010010600', 'FORTUNA, TOKO', 'N', '-'),
(1415, '538', 'SPACE COMPUTER', 'Mangga Dua MALL Lt.5 Blok C No.20-24 | 021-6124560', '021 6124560 / 02193530752', NULL, NULL, 'Bp. Fadli', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SPACE COMPUTER, TOKO', 'N', '-'),
(1416, '539', 'AKR CORPORINDO TBK, PT ', 'WISMA AKR 8TH FLOOR JL PANJANG NO.5 KEBON JERUK, JAKARTA BARAT 11530', '021-5311110', '021-5311388', 'PEMASOK BBM SOLAR', 'EKO NIKO ', 0, 'Hari', '-', '-', '117-00-333-66667 ', 'BANK MANDIRI', 'PT. AKR Corporindo Tbk', 0, '3010010100', 'AKR CORPORINDO TBK, PT', 'N', '-'),
(1417, '540', 'GEMILANG AUDIO,TOKO', 'GLODOK PLAZA LT. DASAR BLOK. GF50', '021-62307250', '021-62307250', '-', 'KO ASAU', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010700', 'GEMILANG AUDIO, TOKO', 'N', '-'),
(1418, '541', 'NUSANTARA NURAGA. PT ', 'Jl.Jafry zam-zam no 4 Rt31 Rw 03, Kuin Cerucuk, Banjarmasin Barat,\nBanjarmasin, Kalimantan Selatan 70129', '0511 - 3367309', '0511 - 3367309', 'SUPPLIER BBM INDUSTRI', 'SURYO BASUKI', 0, 'Hari', '-', '-', '120.000.979.7916', 'BANK MANDIRI CAB.SUNTER PARADISE', 'PT NUSANTARA NURAGA', 0, '3010011400', 'NUSANTARA NURAGA, PT', 'N', '-'),
(1419, '542', 'KALIANDA GOLDEN BUNKER,PT', 'JL. K.P TENDEAN NO.174 RT.17 LT.II BANJARMASIN', '0511-3268280', '0511-3268174', NULL, 'IBU. HANDINDA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011100', 'KALIANDA GOLDEN BUNKER, PT', 'N', '-');
INSERT INTO `supplier` (`id`, `kode`, `supplier`, `alamat`, `tlp`, `fax`, `usaha`, `sales`, `lama`, `lamatxt`, `npwp`, `pkp`, `norek`, `namabank`, `atasnama`, `noac15`, `account`, `nama_account`, `pph`, `pph_rule`) VALUES
(1420, '543', 'CENTRAL CASTELINDO ABADI,CV', 'PERUM METRO 2 BLOK D5 NO.20,KARANG TENGAH,CILEDUG,TANGERANG', '082126250069', '-', '-', 'BP. ALDO PERMANA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010300', 'CENTRAL CASTELINDO ABADI, CV', 'N', '-'),
(1421, '544', 'AUTO 2000 SUDIRMAN', 'JL JEND. SUDIRMAN NO.5 JAKARTA PUSAT', '021-5303325', '021-5737027', 'DEALER TOYOTA', 'FERY FAIZAL', 0, 'Hari', NULL, '-', NULL, NULL, NULL, 0, '3010010100', 'AUTO 2000- SUDIRMAN', 'N', '-'),
(1422, '545', 'AUTO 2000 CILANDAK', 'JL TB.SIMATUPANG - LEBAK BULUS CILANDAK JAKARTA 12430', '021-7651025', '021-7505308', 'DEALER TOYOTA', 'YOGI YOGASWARA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'AUTO 2000-CILANDAK', 'N', '-'),
(1423, '546', 'TUNAS BAHANA SPARTA,PT', 'JL. MUNDU PESISIR NO.54A,CIREBON 45181,JAWA BARAT', '0231-510121', '0231-510394', '-', 'BP. TRI HARTAWANTO', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012000', 'TUNAS BAHANA SPARTA, PT', 'N', '-'),
(1424, '547', 'HASFINDO GLOBAL UTAMA,PT', 'JL. TANAH MERDEKA NO.96F,CIRACAS,JAKARTA TIMUR', '021-87795250', '021-87793990', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010800', 'HASFINDO GLOBAL UTAMA, PT', 'N', '-'),
(1425, '548', 'LABORINDO SARANA,PT', 'JL. ARTERI RAYA PONDOK INDAH NO.8A,JAKARTA SELATAN', '021-7255165', '021-7257226', '-', 'IBU. ICHA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011200', 'LABORINDO SARANA, PT', 'N', '-'),
(1426, '549', 'MULTIMAS,CV', 'JL. TEMBUS PRAMUKA KM.6 RUKO NO.83,BANJARMASIN', '0511-3268080', '0511-3201007', '-', 'IBU. MELA', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MULTIMAS, CV', 'N', '-'),
(1427, '599', 'PMT INDUSTRI,PT', 'JL.H.MISBAH (DALAM),KOMP.MULTATULI INDAH,BLOK A NO.15,MEDAN 20151', '061-4529822 / 4529833', '061-4529811', '-', 'IBU. JULIA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', 'PMT INDUSTRI, PT', 'N', '-'),
(1428, '551', 'GEMILANG EKA DHARMA,PT', 'PURI NIAGA BLOK.K7 NO.1-Q, JL. PURI KENCANA,KEMBANGAN,JAK-BAR', '021-58358098', '021-58357988', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010700', 'GEMILANG EKA DHARMA, PT', 'N', '-'),
(1429, '552', 'HEXTAR FERTILIZER INDONESIA, PT', 'JL BATU CEPER NO.87A JAKARTA 10120', '021-29614963', '021-29614963', 'DISTRIBUTOR PUPUK', 'BPK HERRY EKA ', 45, 'Hari', '-', '-', '902-030584-075', 'BANK EKONOMI CABANG KOPI', 'PT HEXTAR FERTILIZER INDONESIA', 0, '3010010800', 'HEXTAR FERTILIZER INDONESIA, PT', 'N', '-'),
(1430, '553', 'PART SOLUTION DIESEL ', 'JL GELONG BARU RAYA NO.31 TOMANG JAKARTA BARAT - INDONESIA 11440 ', '021-92701300 / 5669894', '021-5672283', 'ALAT LISTRIK ', 'PAK HENDRY', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', 'PART SOLUTION DIESEL', 'N', '-'),
(1431, '554', 'AURA MAKMUR', 'JL. PONCOL II/34 GANDARIA SELATAN, JAK-SEL', '021-94768838', '021', '-', 'BP. YUNUS', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'AURA MAKMUR / YUNUS', 'N', '-'),
(1432, '555', 'MIRUSA HAM ELEKTRONIK,PT', 'JL. GUNTUR NO.34, SETIABUDI,JAKARTA SELATAN', '021-8291900', '021-8291769', '-', 'BP. ADI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MIRUSA HAM ELEKTRONIK, PT', 'N', '-'),
(1433, '556', 'CEMERLANG AUDIO,TOKO/SAU KIONG', 'GLODOK PLAZA LT.DASAR GF-16,JL.PINANGSIA RAYA,JAKARTA', '021-32702985', '021-62307250', '-', 'BP. ASAU', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010300', 'CEMERLANG AUDIO / SAU KIONG', 'N', '-'),
(1434, '557', 'PRIMA MAKMUR,TOKO/EDDY ADYANTO', '-', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', 'PRIMA MAKMUR, TOKO / EDDY ADYONTO', 'N', '-'),
(1435, '558', 'MEGA ENGINEERING SYSTEM,PT', 'JL. AGATIS RAYA NO.11,SAMPIT,KALIMANTAN TENGAH', '0531-24558', '0531-23558', '-', 'BP. JOKO SUGIHARTO', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MEGA ENGINEERING SYSTEMS, PT', 'N', '-'),
(1436, '559', 'BLESSINDO PRIMA SARANA,PT', 'JL. TAMAN SARI RAYA,KOMP.RUKO 56 NO.61C,JAK-BAR 11150', '021-6220 2518', '021-624 8730 / 625 0779', '-', 'ibu. ayu', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010200', 'BLESSINDO PRIMA SARANA, PT', 'N', '-'),
(1437, '560', 'HOLINDO,CV', 'JL. A.YANI KM.3,5 NO.7 BANJARMASIN', '0511-3258066', '0511-3258066', '-', 'BP. VERNANDY', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010800', 'HOLINDO, CV', 'N', '-'),
(1438, '561', 'SUKSES MANDIRI SEJATI, PT', 'JL RAYA BAYUR NO.1 PRIUK JAYA - TANGGERANG ', '021-5521980, 55761622', '021-5521908', 'KAROSERIE ', 'PAK SUWITO SULAIMAN', 1, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SUKSES MANDIRI SEJATI, PT', 'N', '-'),
(1439, '562', 'VENUS COMPUTER / YUNITA TANWIN', 'MANGGA 2 MALL LT.5 ,BLOK K2, JAKARTA', '021-62301978', '021-62303999', '-', 'IBU. ANITA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012200', 'VENUS COMPUTER / YUNITA TANWIN', 'N', '-'),
(1440, '563', 'SELARAS UTAMA RAYA', 'RUKAN TAMAN RATU BLOK B4/18, JAKARTA BARAT 11510', '021-56972495 / 99', '021-5650947', '-', 'IBU. RAYAWATI ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SELARAS UTAMA RAYA, PT', 'N', '-'),
(1441, '564', 'MULIA ANDALAN GEMILANG,CV', 'KOMP. TAMAN KOTA BASMOL B4 NO.38, KEMBANGAN UTARA-JAKARTA BARAT', '021-5809155', '021-58354847', 'DISTRIBUTOR KABEL SUPREME', 'BU NURVENI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MULIA ANDALAN GEMILANG', 'N', '-'),
(1442, '565', 'PALMINDO PERSADA,PT', 'KOMP. KRAKATAU ASRI BLOK.C-12,MEDAN', '061-6634070 / 6634111', '061-6632579', '-', 'IBU. RIRIN', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', 'PALMINDO PERSADA, PT', 'N', '-'),
(1443, '634', 'REMAJA MOTOR BANJARMASIN', 'JL. A.YANI KM.6 NO.22, BANJARMASIN', '0511-7477304 / 7477305', '0511-4229522', '-', '-', 0, 'Hari', '-', '-', '0310006984564', 'MANDIRI', 'DIANA KUMALASARI', 0, '3010011800', 'REMAJA MOTOR BANJARMASIN', 'N', '-'),
(1444, '567', 'BANJAR BEARING SENTOSA,PT', 'JL. MT.HARYONO NO.68B, SAMPIT', '0531-22508', '0531-22509', '-', 'BP. ADE', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010200', 'BANJAR BEARING SENTOSA, PT', 'N', '-'),
(1445, '568', 'AUTO 2000 PLUIT ', 'JL RAYA PLUIT SELATAN NO.6 ', '021-6672000', '021-6603526', 'DEALER TOYOTA', '-', 0, 'Hari', '-', '-', '386 301 7200', 'BCA KCP PLUIT TIMUR', 'PT ASTRA INTERNATIONAL,TBK', 0, '3010010100', 'AUTO 2000 - PLUIT', 'N', '-'),
(1446, '569', 'HARAPAN RAYA JAYA SUKSES,CV', 'JL. A.YANI KM.9,2 NO.18 RT.004/RW.02,MANDAR SARI,KERTAK HANYAR,BANJARMASIN', '0511-3262619', '0511-3264974', '-', 'BP. TEDDY', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010800', 'HARAPAN RAYA JAYA SUKSES, CV', 'N', '-'),
(1447, '570', 'SINAR GEMILANG ELECTRIC,TOKO', 'PERTOKOAN HWI LT.DASAR BLOK.D NO.30, JAKARTA', '021-60424208 / 05', '021-6280917', '-', 'IBU. AKIM', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SINAR GEMILANG ELECTRIC, TOKO', 'N', '-'),
(1448, '571', 'BORNEO MAJUJAYA,PT', 'JL. KAHURIPAN NO.2A RT.05, BANJARMASIN', '0511-3257427', '0511-3258441', '-', 'IBU. FRANSISKA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010200', 'BORNEO MAJUJAYA, PT', 'N', '-'),
(1449, '572', 'ALTRAK 1978,PT - JAKARTA', 'JL. RSC.VETERAN NO.4 BINTARO,JAK-SEL', '021-7361978', '021-7361977', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ALTRAK 1978, PT - JAKARTA', 'N', '-'),
(1450, '573', 'KARYA TEHNIK MANDIRI', 'JL ANGKASA KOP CITRA RAYA ANGKASA BLOK L-31 LANDASAN ULIN. BANJARBARU. BANJARMASIN ', '0511-7402370', '0511-4708246', 'SPAREPART PKS ', 'PAK KARDIMAN', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011100', 'KARYA TEHNIK MANDIRI, CV', 'N', '-'),
(1451, '574', 'RAJAWALI AMARTA SEMESTA,PT', 'JL. RAYA LEUWINANGGUNG,BUKIT GOLF RIVERSIDE,BLOK.AR NO.109,CIMANGGIS,CIBUBUR', '021-84594994', '021-84594994', '-', 'BP. ARDYAN', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011800', 'RAJAWALI AMARTA SEMESTA, PT', 'N', '-'),
(1452, '575', 'NUSA INDAH MEGAH, PT ', 'JL MENGANTI RAYA NO.26 KERUDUS KARANG PILANG SURABAYA ', '031-7666846', '031-7662134', 'SUPPLIER WATER TREATMENT', 'BU CATHERINE ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011400', 'NUSA INDAH MEGAH, PT', 'N', '-'),
(1453, '576', 'PUTERA PUTERI TEHNIK MANDIR, PT', 'JL MARGAMULYA NO.48 KITA CIMAHI 40525', '022-88886962', '022-88886962', 'SUPPLIER PUMP', 'BPK SETIA BUDI UTARA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', 'PUTERA PUTERI TEKNIK MANDIRI, CV', 'N', '-'),
(1454, '577', 'PRIMASAWIT TEHNIK BERJAYA,PT', 'JL MARELAN RAYA NO.555 MEDAN 20245', '0261-6859911/33/55', '0261-6853085', 'SUPPLIER BAKTERI ', 'BU GUSTIANA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', 'PRIMA SAWIT TEKNIK BERJAYA, PT', 'N', '-'),
(1455, '578', 'ANEKA JAYA,CV', 'JL. HASANUDDIN NO.49, BANJARMASIN', '0511-3352569', '0511-4369957', '-', 'BP. SUKMADI ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ANEKA JAYA, CV', 'N', '-'),
(1456, '579', 'DAMAI SEJAHTERA ABADI,PT', 'JL. KERTAJAYA 149,AIRLANGGA,GUBENG,SURABAYA', '0511-4415262', '0511-4415264', '-', 'BP. HANDOKO', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010400', 'DAMAI SEJAHTERA ABADI, PT', 'N', '-'),
(1457, '580', 'PUTRA BORNEO NUSANTARA INDAH,PT', 'JL MT.HARYONO KAV.29-30 RT 011 RW 006 TEBET JAKARTA SELATAN DKI JAKARTA RAYA 12820', '081287866630', '-', '-', 'BPK CHAIRUL RIZA', 0, 'Hari', '01.741.174.5-015.000', '-', NULL, NULL, NULL, 0, '3010011600', 'PUTRA BORNEO NUSANTARA INDAH, PT', 'N', '-'),
(1458, '581', 'ASCO PRIMA MOBILINDO, PT / DAIHATSU FATMAWATI', 'JAKARTA SELATAN', '-', '-', 'DEALER MOBIL', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ASCO PRIMA MOBILINDO, PT / DAIHATSU FATMAWATI', 'N', '-'),
(1459, '582', 'INDOMOBIL TRADA NASIONAL, PT / NISSAN PONDOK INDAH', 'JL. SULTAN ISKANDARMUDA KAV.29, PONDOK INDAH\nJAKARTA SELATAN 12310', '(021) 729.3999', '(021) 729.2238', 'DEALER MOBIL', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010900', 'INDOMOBIL TRADA NASIONAL, PT / NISSAN PONDOK INDAH', 'N', '-'),
(1460, '583', 'KEBAYORAN JAYA INDAH UTAMA, PT / SUZUKI RADIO DALAM RAYA', 'JL. RADIO DALAM RAYA NO.125\nJAKARTA 12140', '021-739.8213', '021-720.4560', 'DEALER MOBIL', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011100', 'KEBAYORAN JAYA INDAH UTAMA, PT / SUZUKI RADIO DALAM RAYA', 'N', '-'),
(1461, '584', 'AUTO 2000 - RADIO DALAM RAYA / PT. ASTRA INTERNATIONAL TBK', 'JL. RADIO DALAM RAYA NO. 124 A-B\nKEBAYORAN BARU - JAKARTA 12140', '021-7252000', '021-7398887', 'DEALER MOBIL', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'AUTO 2000 - RADIO DALAM RAYA / PT. ASTRA INTERNATIONAL TBK', 'N', '-'),
(1462, '585', 'ISTANA KEBAYORAN RAYA MOTOR, PT / HONDA PONDOK INDAH', 'JL. SULTAN ISKANDAR MUDA KAV.8\nARTERI PONDOK INDAH KOSTRAD, JAKARTA SELATAN 12240', '-', '-', 'DEALER MOBIL', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010900', 'ISTANA KEBAYORAN RAYA MOTOR, PT / HONDA PONDOK INDAH', 'N', '-'),
(1463, '586', 'DWI JAYA EKAPRIMA,PT', 'JL. RAYA BELITUNG NO.6, GRESIK,JAWA TIMUR', '031-3957335', '031-3959715', '-', 'BP. KETUT SUKARTA', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010400', 'DWI JAYA EKAPRIMA,PT', 'N', '-'),
(1464, '587', 'VISUALDATA,TOKO', 'MALL AMBASSADOR,LT.2 NO.33,JAKARTA', '021-5762549', '021', '-', 'BP.ARIE', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012200', 'VISUALDATA, TOKO', 'N', '-'),
(1465, '588', 'TOKO 79 / AGUS', 'MGK LT.6 BLOK.D12 NO.1 JAKARTA', '0813-11011679', '-', '-', 'Bp. Agus', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012000', 'TOKO 79', 'N', '-'),
(1466, '589', 'MILA GORDEN, TOKO', 'JL JAWA, PALANGKARAYA', '-', '-', 'FURNITURE', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MILA GARDEN, TOKO', 'N', '-'),
(1467, '590', 'DHARMABHAKTI KAPUAS MENTAYA,PT', 'JL. SUDIMAMPIR NO.3, BANJARMASIN', '0511-3352160', '0511-3350809', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010400', 'DHARMA BHAKTI KAPUAS MENTAYA, PT', 'N', '-'),
(1468, '592', 'SURYA TERANG PRATAA, PT ', 'JL KEDOYA DURI RAYA NO.30A JAKARTA BARAT 11520', '021-58356915', '021-58356914', 'JUAL SPAREPART ', 'BU MARIA ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SURYA TERANG PRATAMA, PT', 'N', '-'),
(1469, '593', 'PC SMART / PATRICIA TEGUH', 'MANGGA DUA MALL LT.5 BLOK D-3A,JAKARTA', '021-6127709', '021-62304519', '-', '-', 0, 'Hari', '-', '-', '034601000717564', 'BRI', 'BILLY UTAMA', 0, '3010011600', 'PC SMART / PATRICIA TEGUH', 'N', '-'),
(1470, '594', 'ASKOTAMA INTI NUSANTARA,PT', 'KOMP.BUMI DIRGANTARA PERMAI,JL.HERCULES BLOK J1 NO.10,BEKASI', '021-84307981 / 84307982', '021-8449782', '-', 'IBU.WINA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ASKOTAMA INTI NUSANTARA,PT', 'N', '-'),
(1471, '595', 'CAHAYA METAL PERKASA,PT', 'JL. RAYA NAROGONG KM.15 PANGKALAN 6 NO.111,BANTARGEBANG,BEKASI', '021-82492111 / 29469222', '021-82495222', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010300', 'CAHAYA METAL PERKASA,PT', 'N', '-'),
(1472, '597', 'ALFA LAVAL INDONESIA,PT', 'GRAHA INTI FAUZI 4TH FLOOR,JAKARTA 12510', '021-7918 2288', '021-7918 2266', '-', '-', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ALFA LAVAL INDONESIA, PT', 'N', '-'),
(1473, '598', 'TUNAS AGUNG SEMESTA,CV', 'JL.KEADILAN 2C RT.01/04 NO.1L,JAKARTA BARAT', '021-6303774 / 6303786', '021-6303779', '-', 'BP. TEDDY LIM', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012000', 'TUNAS AGUNG SEMESTA, CV', 'N', '-'),
(1474, '600', 'JAYA MOTOR,TOKO', 'JL. DR.MURJANI NO. 134, PALANGKARAYA', '0823-10981684', '0536', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011000', 'JAYA MOTOR', 'N', '-'),
(1475, '601', 'ANEKA HYDRAULIC SYSTEM, CV', 'JL TOL TRIKORA SIMPANG SEI SALAK RT033/RW05 KEC. GUNTUNG MANGGIS KAB. LANDASAN ULIN - BANJARMASIN ', '0811 5127870', '-', 'DISTIBUTOR VICKERS', 'ALIMUDDIN ZAINAL ', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ANEKA HYDRAULIC SYSTEMS, CV', 'N', '-'),
(1476, '602', 'LINA,TOKO', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011200', 'LINA, TOKO', 'N', '-'),
(1477, '603', 'SUMBER LOGAM,TOKO', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SUMBER LOGAM, TOKO', 'N', '-'),
(1478, '604', 'JALI GORDEN,TOKO', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011000', 'JALI GORDEN, TOKO', 'N', '-'),
(1479, '605', 'RAHMAH,TOKO', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011800', 'RAHMAH, TOKO', 'N', '-'),
(1480, '606', 'MEGA ENGINEERING SERVICES,PT', 'JL. NEGARA NO.8/2 MEDAN 20233', '061-4519975', '061-4537606', '-', '-', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MEGA ENGINEERING SERVICES, PT', 'N', '-'),
(1481, '591', 'PANDAI BESI CAHAYA MULYA/KASNO', 'LADA MANDALA JAYA,RT 17/RW 04 GG. JALAK 1 KAB.KOTAWARINGIN BARAT,KAL-TENG', '0812-51035580 / 0822-54277799', '-', '-', 'BP. KASNO', 30, 'Hari', '-', '-', '1590000650787', 'MANDIRI', 'KASNO', 0, '3010011600', 'PANDAI BESI CAHAYA MULYA', 'N', '-'),
(1482, '607', 'SUBUR SUKSES MANDIRI,PT', 'JL.KH. HASYIM ASHARI NO.9,CIPONDOH,TANGERANG', '021-5543392', '021-5527115', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SUBUR SUKSES MANDIRI,PT', 'N', '-'),
(1483, '608', 'FORESTA TRANSTEK,PT', 'KAWASAN PANTAI INDAH DADAP,JL.PERANCIS NO.2 BLOK FF 12,DADAP,TANGERANG', '021-5555994', '021-55956062', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010600', 'FORESTA TRANSTEK, PT', 'N', '-'),
(1484, '609', 'MELAKIM INTI PERKASA,PT', 'JL. PROF. DR.LATUMENTEN,KOMP.GROGOL PERMAI BLOK.B NO.30,JAKARTA 11460', '021-56980459', '021-56982120', '-', '-', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MELAKIM INTI PERKASA, PT', 'N', '-'),
(1485, '610', 'SAINTIFIK INDONESIA,PT', 'JL. BUNGUR BESAR NO.82 RT.001/007,GN.SAHARI SELATAN,KEMAYORAN,JAKARTA PUSAT', '021-42802002', '021-42802003', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SAINTIFIK INDONESIA, PT', 'N', '-'),
(1486, '611', 'TUNGGAL JAYA STEEL, PT', 'DSN.TAMBAKKEMERAAN KM 29\nTAMBAKKEMERAKAN\nKRIAN - SIDOARJO 61262', '-', '-', '-', '-', 30, 'Hari', '02.102.665.3-641.000', 'Y', NULL, NULL, NULL, 0, '3010012000', 'TUNGGAL JAYA STEEL, PT', 'N', '-'),
(1487, '612', 'SINDO ELTAPRIMA,PT', 'JL. SUNTER MAS UTARA BLOK. H-1 NO.17Q, JAKARTA 14350', '021-6522117 / 6519279', '021-6500973', '-', 'BP. KELVIN SUTANDAR', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SINDO ELTAPRIMA,PT', 'N', '-'),
(1488, '613', 'AUTO DAYA AMARA, PT / HONDA PONDOK CABE', 'JL. CABE RAYA NO.88\nPONDOK CABE - TANGERANG - 15418', '021-741.0000', '021-744.2921', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'AUTO DAYA AMARA, PT', 'N', '-'),
(1489, '614', 'ARMINDO PERKASA, PT ', 'JL. DAAN MOGOT KM.20 NO.8 BETUCEPER KOTA TANGGERANG ', '021-55733253', '021-55733251', 'DEALER HINO', 'BPK ERWIN', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ARMINDO PERKASA, PT', 'N', '-'),
(1490, '615', 'RAHAYU SENTOSA, PT ', 'JL RAYA BOGOR KM.48 CIBINONG-BOGOR', '021-8752530', '021-8652451.52.53', 'KAROSERIE BUS ', 'BPK SAMUEL ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011800', 'RAHAYU SENTOSA, PT', 'N', '-'),
(1491, '616', 'INTERJAYA SURYA MEGAH, PT ', 'JL DAAN MOGOT KM 21.5 TANGGERANG KOMP PERGUDANGAN  ARCADIA BLOK G12 NO.10 ', '021-29006565', '021-29006547', 'SUPPLIER GENSET&PART', 'BPK HENDRADI ', 14, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010900', 'INTERJAYA SURYA MEGAH, PT', 'N', '-'),
(1492, '617', 'PRIMA JAYA AXINDO', 'JL. P. JAYAKARTA 24/12A,JAKARTA', '021-6284393', '021-6390527', '-', 'BP. PRIYO', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', 'PRIMA JAYA AXINDO', 'N', '-'),
(1493, '618', 'MEUBLE NAJWA,TOKO', 'JL. JAWA NO. 10D, PALANGKARAYA', '083150152128 / 081348908268', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MEUBEL NAJWA, TOKO', 'N', '-'),
(1494, '619', 'BATAVIA BINTANG BERLIAN,PT', 'JL. RAYA BEKASI KM.19,PULO GADUNG, JAKARTA TIMUR', '021-47863456', '021-4715012', '-', 'BP. ANDREAS', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010200', 'BATAVIA BINTANG BERLIAN, PT', 'N', '-'),
(1495, '620', 'AFE TUNAS ANDALAN ', 'JL RAYA LEWINANGGUNG, BUKIT GOLF RIVERSIDE BLOK AR NO.109 CIMANGGIS-CIBUBUR', '021-84594994', '-', '-', 'Bpk Ardyan ', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'AFE TUNAS ANDALAN', 'N', '-'),
(1496, '621', 'MTECH ENGINEERING NUSANTARA,PT', 'RUKAN GREEN GARDEN BLOK.Z2-78,JL.PANJANG,KEDOYA,JAKARTA 11520', '021-58352036-39', '021-58354027', '-', 'bu.Warni (081296287120)', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MTECH ENGINEERING NUSANTARA,PT', 'N', '-'),
(1497, '622', 'VICTORIA CEMERLANG,PT', 'JL. GAJAH MADA NO.156 EE,JAKARTA BARAT 11130', '021-6323228', '021-6323168', '-', 'IBU. LING LING', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012200', 'VICTORIA CEMERLANG, PT', 'N', '-'),
(1498, '623', 'SAWIT ABADI PERKASA,PT', 'JL. S.PARMAN NO.21, SAMPIT,KOTIM,KAL-TENG', '0531-22386', '0531-22386', '-', 'BP. JOKO', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SAWIT ABADI PERKASA,PT', 'N', '-'),
(1499, '624', 'EVERSEIKO INDONESIA, PT ', 'KAWASAN PUSAT NIAGA TERPADU JL DAAN MOGOT RAYA KM 19,6 BLOK E NO.8E-F BATU CEPER TANGGERANG ', '021-54377592', '021-54395736', 'DISTRIBUTOR BAN ', 'BP RUDDY ', 30, 'Hari', '02.648.296.8-415.000', 'Y', NULL, NULL, NULL, 0, '3010010500', 'EVERSEIKO INDONESIA, PT', 'N', '-'),
(1500, '625', 'SUMBER BERKAT ABADI, CV', 'JL PRAMUKA NO.63 RT 007/RW 001 PEMURUS LUAR, BANJARMASIN TIMUR, KALIMANTAN SELATAN ', '-', '-', 'SUPPLIER BAHAN BANGUNAN ', 'BPK RIDUAN ', 30, 'Hari', '73.520.799.5-731.000', 'Y', NULL, NULL, NULL, 0, '3010011900', 'SUMBER BERKAT ABADI, CV', 'N', '-'),
(1501, '626', 'TIGA SEKAWAN TEKNIK,TOKO', 'BUKIT GOLF RIVERSIDE BLOK.AR NO.109,CIMANGGIS-CIBUBUR', '021-84594994', '021', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012000', 'TIGA SEKAWAN TEKNIK, TOKO', 'N', '-'),
(1502, '627', 'VIRA JAYA COMPUTER,TOKO', 'MANGGA DUA MALL LT.5, JAKARTA', '021-62304049, 62303934, 62307480', '021', NULL, 'BU. RETNO', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012300', 'VIRA JAYA COMPUTER', 'N', '-'),
(1503, '628', 'TRIARGA JAYA MAKMUR,PT', 'JL. BUNGA RAMPAI RAYA NO.35A RT.017/009,MALAKA JAYA,DUREN SAWIT,JAKARTA TIMUR 13460', '021-80397234', '021-8014303', '-', '-', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012000', 'TRIARGA JAYA MAKMUR, PT', 'N', '-'),
(1504, '629', 'WILMAR CHEMICAL INDONESIA, PT', 'GEDUNG MULTIVISION TOWER LT.12 JL KUNINGAN MULIA BLOK.9B, SETIABUDI JAKARTA SELATAN - 12980', '08125048480', '-', '-', 'BPK ROWIS', 45, 'Hari', '21.003.099.5-056.000', '-', NULL, NULL, NULL, 0, '3010012300', 'WILMAR CHEMICAL INDONESIA, PT', 'N', '-'),
(1505, '630', 'CIPTA KARYA ANGGUN, CV', 'PONDOK JATIMURNI BLOK K/11\nRT.003/RW.007\nJATIMURNI, PONDOK MELATI\nBEKASI, JAWA BARAT', '-', '-', 'Perlengkapan Elektronik Rumah Tangga', '-', 0, 'Hari', '21.134.596.2-432.000', 'Y', NULL, NULL, NULL, 0, '3010010300', 'CIPTA KARYA ANGGUN, CV', 'N', '-'),
(1506, '631', 'MAULANA MEUBLE,TOKO', 'JL. A.YANI (SEBERANG BANK MANDIRI), PALANGKARAYA', '08115200511 / 081251612211', '-', '-', 'H. MAULANA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MAULANA MEUBLE, TOKO', 'N', '-'),
(1507, '632', 'AFE CITRA EXPRESS', 'JL LEUWINANGGUNG ARCADIA HOUSING BLOK AR NO.109 CIBUBUR', '021-84594994', '021-84594994', 'EKPEDISI PENGIRIMAN ', 'UP. BPK ARDYAN ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'AFE CITRA EXPRESS', 'Y', '-'),
(1508, '633', 'SARANA KARYA, CV - WWW.FOTOVIDEOUDARA.COM', 'JL. RAYA PLERET-JEJERAN KM2\nKANGGOTAN RT08, PLERET\nBANTUL, YOGYAKARTA 55791', '(0274) 4415237', '-', 'JASA FOTO UDARA GIS', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SARANA KARYA, CV', 'N', '-'),
(1509, '635', 'MANDIRI TEKNIK,CV', 'APL TOWER LT.6 JL. LETJEN S.PARMAN KAV.28, TJ.DUREN SELATAN,GROGOL,JAKARTA 11470', '021-5872361 / 50111117', '021-5872361', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MANDIRI TEKNIK, CV', 'N', '-'),
(1510, '636', 'CV ERA JAYA MOTOR', 'JL KAMPUNG MELAYU DARAT, GG AMAL RT9 NO.15 BANJARMASIN KALIMANTAN SELATAN ', '0511-3267175', '-', 'DISTRIBUTOR BAN ', 'BPK EFFENDY', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010500', 'ERA JAYA MOTOR, CV', 'N', '-'),
(1511, '637', 'PT KARYA GEMILANG INDONUSA ', 'KAWASAN PERGUDANGAN LIO BARU ASRI BLOK AA 3 & AA 5 JL BOURAQ NO.33 BATUSARI TANGGERANG ', '021-5581656', '021-5581666', 'PRODUSEN SEGEL ', 'BPK SOEDARMAN', 14, 'Hari', '-', 'Y', NULL, NULL, NULL, 0, '3010011100', 'KARYA GEMILANG INDONUSA, PT', 'N', '-'),
(1512, '638', 'KRISBOW INDONESIA,PT', 'GEDUNG KAWAN LAMA JL.PURI KENCANA NO.1, MERUYA,KEMBANGAN 11610', '021-5828282', '021-5826688', '-', 'BP. SOBARI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011100', 'KRISBOW INDONESIA, PT', 'N', '-'),
(1513, '639', 'REVINDO JAYA ABADI, UD', 'JL KUNINGAN NO.28 RT/RW 030/004. KEL KETAPANG KEC.MENTAWA BARU KETAPANG', '-', '-', 'DISTRIBUTOR SPAREPART HITACHI', 'BPK FURKON ', 30, 'Hari', '2.00001681.05.03', 'Y', NULL, NULL, NULL, 0, '3010011800', 'REVINDO JAYA ABADI, UD', 'N', '-'),
(1514, '640', 'INDONESIA PRIMA EQUIPMENT, PT ', 'JL A.YANI KM.8.9 RT.14 KERTAK HANYAR, BANJARMASIN', '081287335888', '-', 'DISTRIBUTOR JCB PART', 'BPK CAI ZULI', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010900', 'INDONESIA PRIMA EQUIPMENT, PT', 'N', '-'),
(1515, '641', 'ADY WATER,CV', 'JL. MANDE RAYA NO.26,CIKADUT,CICAHEUM,BANDUNG', '022-7238019', '022-7238019', '-', 'BP. RUSMAN', 0, 'Hari', '-', '-', '1310033314446', 'MANDIRI', 'CV.ADY WATER', 0, '3010010100', 'ADY WATER, CV', 'N', '-'),
(1516, '642', 'VISCO PRIMA INDONESIA,PT', 'KOMP. NORTHLAND NO.35,JL. R.E MARTADINATA,ANCOL,JAKARTA 14420', '021-26692908', '021-26692836', '-', 'BP. HERRY', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012200', 'VISCO PRIMA INDONESIA, PT', 'N', '-'),
(1517, '643', 'PANCA AGRO NIAGA LESTARI.PT', 'JL BANJAR GAWI BARAT NO.8B LIK LIANG ANGGANG LANDASAN ULIN SELATAN BANJAR BARU', '08119629067', '-', 'DISTRIBUTOR CHEMICAL ', 'BPK HENDRIK SUKAMTO', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', 'PANCA AGRO NIAGA LESTARI,PT', 'N', '-'),
(1518, '644', 'PANAJAYA SUKSES. CV', 'JL MELAYU DARAT GG III/AMAL NO.15 RT 009/001 MELAYU, BANJARMASIN TENGAH. KALIMANTAN SELATAN ', '-', '-', 'DISTRIBUTOR PANAOIL ', 'BPK EFFENDY ', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', NULL, 'N', '-'),
(1519, '645', 'KARYA BARU ABADI,PT', 'KOMP. DUTA HARAPAN INDAH, BLOK.OO NO.45.RT.008/002,KAPUK MUARA,PENJARINGAN,JAK-UT', '081514407531', '-', '-', 'bp. anthony', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011100', 'KARYA BARU ABADI, PT', 'N', '-'),
(1520, '646', 'TAUFIK,TOKO', 'JL. JAWA NO.26-27, PALANGKARAYA', '0536-3237494 / 0852-52070790', '0536', '-', 'BP. TAUFIK', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012000', 'TAUFIK, TOKO', 'N', '-'),
(1521, '647', 'REVOLUTION MULTIMEDIA SYSTEM,PT', 'KOMP.RUKO HARCO MANGGA DUA BLOK.H/33, JAKARTA', '021-6121393 EXT.109', '021', '-', 'IBU. SANTI', 0, 'Hari', '-', '-', '7460152997', 'BCA', 'PT.REVOLUTION MULTIMEDIA SYSTEM', 0, '3010011800', 'REVOLUTION MULTIMEDIA SYSTEM,PT', 'N', '-'),
(1522, '648', 'GVINDO GLOBAL GROUP, PT', 'JL.A.YANI KM.15,GAMBUT,BANJARMASIN,KAL-SEL', '0511-4221482', '-', 'SUPPLIER ALAT PANEN', 'BP. JUNAIDI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010700', 'GVINDO GLOBAL GROUP, PT', 'N', '-'),
(1523, '649', 'SLS BEARINDO,PT', 'JL.H.M.ARSYAD,KOMP.JERUK 1,NO.8,SAMPIT 74323,KAL-TENG', '0531-31288', '0531-31268', '-', 'BP. YUDHI', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SLS BEARINDO,PT', 'N', '-'),
(1524, '650', 'CAKRA BINTANG UNITAMA. PT ', 'JL KARANG ANYAR NO.55 BLOK B3 KEL.KARANG ANYAR KEC. SAWAH BESAR JAKARTA PUSAT ', '021-62300757.62313319', '021-62310853', 'SUPPLIER SPAREPART MOBIL', 'VERDI ', 30, 'Hari', '709499487075000', '-', NULL, NULL, NULL, 0, '3010010300', 'CAKRA BINTANG UNITAMA, PT', 'N', '-'),
(1525, '651', 'NUSA PERTIWI ABADI ', 'JL KARANG ANYAR RAYA KOMP RUKO 55 KARANG ANYAR PERMAI BLOK C NO.25 JAKARTA PUSAT 10740', '021-62306666', '021-6242881', 'SUPPLIER SPAREPART MOBIL', 'BPK WANDYANTO KAMBONG', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011400', 'NUSA PERTIWI ABADI, CV', 'N', '-'),
(1526, '652', 'KEMENANGAN JAYA FURNITURE', 'JLP.JAYAKARTA NO.22 C JAKARTA PUSAT 10730', '021-6243480.6246718', '021-6120469', 'TOKO MEBEL ', 'BU IWEY ', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KEMENANGAN JAYA FURNITURE', 'N', '-'),
(1527, '653', 'MITRA SUKSES BERSAMA', 'TAMAN RATU INDAH BLOK F10 NO.25', '021-60313171', '021-5651657', 'SPAREPART KENDARAAN ', 'BPK RUDI HARIANTO ', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MITRA SUKSES BERSAMA', 'N', '-'),
(1528, '654', 'MAKMUR WIJAYA SEJAHTERA,PT', 'OFFICE 8,LT.18-A,SCBD JL. JEND.SUDIRMAN KAV.52-53,JAKARTA 12190', '021-29490582 / 0511-3353916', '021', '-', 'BP. JUSEP', 14, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MAKMUR WIJAYA SEJAHTERA, PT', 'N', '-'),
(1529, '655', 'SERBA GUNA,CV', 'JL. CIPUTAT RAYA NO.1 PD.PINANG RT.005/01,KEB.LAMA,JAK-SEL 12310', '0813-19334666 / 0851-02625444', '-', '-', 'BP. RUSLI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SERBA GUNA, CV', 'N', '-'),
(1530, '656', 'SRIKANDI DIAMONDS MOTOR, PT ', 'Jl Mampang prapatan Raya No.21-23 Mampang Prapatan Jakarta selatan\n', '021-22530123  ext 207', '021-22530222', 'DEALER MITSUBISHI', 'BU SUSI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SRIKANDI DIAMOND MOTOR, PT', 'N', '-'),
(1531, '657', 'PADLOCK,TOKO', 'JL. PERINTIS RAYA, JAKARTA 11820', '085920657458', '-', '-', 'BP. THOMAS BAYU', 0, 'Hari', '-', '-', '4768040735', 'BCA', 'THOMAS BAYU PRAHASTOMO', 0, '3010011600', 'PADLOCK, TOKO', 'N', '-'),
(1532, '658', 'SUPER SUKSES MOTOR,PT', '-', '-', '-', '-', 'BU AYU SETIANI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SUPER SUKSES MOTOR, PT', 'N', '-'),
(1533, '659', 'MOHUSINDO,PT', 'JL. A.YANI KM.21.9 LANDASAN ULIN TENGAH,BANJARBARU', '0511-4705161 / 4705162', '0511-4705163', '-', 'BP. AGUS RUSNANDAR', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MOHUSINDO, PT', 'N', '-'),
(1534, '660', 'INDOTEHNIK TOKO', 'GEDUNG LTC GLODOK LT.1 BLOK C36 NO.3 JL HAYAM WURUK NO.127 JAKARTA', '021-26071342', '-', 'SUPPLIER ALAT TEHNIK ', 'BU NOVI ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010900', 'INDOTEKNIK, TOKO', 'N', '-'),
(1535, '661', 'RATU UNGGUL SAHABAT,PT', 'JL.DANAU DAMPLAS BLOK.E II/65 A,BENDUNGAN HILIR,JAKARTA 10210', '021-30296888/57906155', '021-57906156', '-', 'IBU. NIKE', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'RATU UNGGUL SAHABAT,PT', 'N', '-'),
(1536, '662', 'SINAR BARU 2, TB', 'JL. PANGLIMA POLIM RAYA NO.46B,KEB.BARU,JAKARTA SELATAN', '021-7220824/72789955', '021-72789114', '-', 'IBU. LANNY', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SINAR BARU 2,TB', 'N', '-'),
(1537, '663', 'PT SIWITEK ', 'JL GUNUNG SAHARI II NO.1/2/374 RT 012/007 KEMAYORAN JAKARTA PUSAT', '-', '-', 'DISTRIBUTOR PUPUK ', 'BU IKA', 30, 'Hari', '31.460.080.0-027.000', 'Y', NULL, NULL, NULL, 0, '3010011900', 'SIWITEK,PT', 'N', '-'),
(1538, '664', 'PT MERCK CHEMICAL AND LIFE SCIENCES', 'JL T.B.SIMATUPANG NO.8 PASAR REBO', '021-28565600', '-', 'CHEMICAL AND LABORAROTIUM ', 'BU SEFY WURI', 0, 'Hari', '-', 'Y', '0017871000', 'DEUTSCHE BANK ', 'PT MERCK CHEMICAL AND LIFE SCIENCES', 0, '3010011300', 'MERCK CHEMICALS AND LIFE SCIENCES (MCLS), PT', 'N', '-'),
(1539, '665', 'PALANGKA TRIO TIRTA SARI,PT', 'JL.A.YANI NO.47B,RT.01/11,TUMBANG RUNGAN-PAHANDUT, PALANGKARAYA 73111', '0536', '0536', '-', '-', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', 'PALANGKA TRIO TIRTA SARI, PT', 'N', '-'),
(1540, '667', 'MALINDO KARYA LESTARI,PT', 'JL. BANJAR GAWI BARAT NO.1H,LANDASAN ULIN SELATAN,KAL-SEL', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MALINDO KARYA LESTARI,PT', 'N', '-'),
(1541, '668', 'ENRICH SOLUTIONS, PT ', 'JL LAPANGAN BOLA RUKO NO.16 RT/RW 007/001 KEBON JERUK-JAKARTA BARAT ', '-', '-', 'DISTRIBUTOR BAN ', 'BPK RUDDY ', 30, 'Hari', '02.745.372.9-035.000', 'Y', NULL, NULL, NULL, 0, '3010010500', 'ENRICH SOLUTIONS, PT', 'N', '-'),
(1542, '669', 'KOKAI INDO ABADI,PT', 'JL. HM.RAFI''I NO.10 RT.16,MADUREJO,PANGKALAN BUN,KAL-TENG', '0532-2030865', '0532-2030865', '-', '-', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011100', 'KOKAI INDO ABADI,PT', 'N', '-'),
(1543, '670', 'EDULAB MEDIKA,TOKO', 'JL. RADEN SALEH 6 NO.4B,PALANGKARAYA,KAL-TENG', '085246880448', '-', '-', 'BP. SYAHRIAL', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010500', 'EDULAB MEDIKA, TOKO', 'N', '-'),
(1544, '671', 'MITRA CHEMINDO UTAMA,PT', 'JL.RAYA BOULEVARD HIJAU,SENTRA NIAGA 3 BARAT,BLOK.B6 NO.29,HARAPAN INDAH,BEKASI 17131', '021-88984445 ', '021-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MITRA CHEMINDO UTAMA,PT', 'N', '-'),
(1545, '672', 'WEARINASIA,TOKO', 'RUKO PARAMOUNT SERPONG BLOK.F NO.25 GADING SERPONG', '021-91764028', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012300', 'WEARINASIA,TOKO', 'N', '-'),
(1546, '673', 'ALNINDO ELECTRONICS,CV', 'JL. DR.MAKALIWE 1 NO.8A GROGOL,JAKARTA BARAT', '021-56942888/56968845', '021-56942888', '-', 'BP.ERIC', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ALNINDO ELECTRONICS, CV', 'N', '-'),
(1547, '674', 'CENTRAL FURNITURE', 'Jl. Wijaya Kusuma no 50 Tomang raya Jakarta Barat ', '085100308650', '-', '-', 'BP. MULYO', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010300', 'CENTRAL FURNITURE', 'N', '-'),
(1548, '675', 'LISINDO SINAR HARAPAN,PT', 'JL. KEDOYA DURI RAYA NO. 20B,JAKARTA BARAT', '021-58354531 / 98128974', '021-58354530', '-', 'IBU. SILVI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'LISINDO SINAR HARAPAN,PT', 'N', '-'),
(1549, '676', 'MILENIA MULTIVISI,PT', 'JL. KAJI NO.11D,JAKARTA 10130', '021-6322345 / 6308660', '021-6322347', '-', 'IBU. WATI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MILENIA MULTIVISI', 'N', '-'),
(1550, '677', 'ESA PROJECTOR,CV', 'MANGGA DUA MALL,LT.1 NO.26B JAKARTA', '021- 6006605', '021-', '-', 'BP. ARI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010500', 'ESA PROJECTOR,CV', 'N', '-'),
(1551, '678', 'ARNA PRO', 'JL. OTISTA RAYA NO.64A,JAKARTA', '082111731307', '-', '-', 'BP. ARI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ARNA PRO', 'N', '-'),
(1552, '679', 'KREASI INTERNUSA MANDIRI', 'KOMP.RUKAN MULTIGUNA BLOK 6S-R LT.3 JL. RAJAWALI SELATAN RAYA,JAK-PUS', '021-6412636', '021-6412504', '-', 'BP. ARIANTO', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011100', 'KREASI INTERNUSA MANDIRI', 'N', '-'),
(1553, '680', 'NUANSA MOTOR', 'JL. HIU PUTIH VIII, PALANGKARAYA', '086594744380 / 082352245223', '0536', '-', 'BP.', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011400', 'NUANSA MOTOR', 'N', '-'),
(1554, '681', 'DWI SURYA ABADI KHARISMA, PT ', 'JL TANAH ABANG 2 NO 121 JAKARTA ', '021-3442878', '-', 'DISTURBUTOR PROMINENT PUMP ', 'BPK ALDI ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010400', 'DWI SURYA ABADI KHARISMA , PT', 'N', '-'),
(1555, '682', 'DUNIA SAFTINDO,PT', 'MEGA KEMAYORAN TOWER A LT.5, JL.ANGKASA KAV.B6,JAKARTA 10610', '021-29371188', '021-65865614 / 087880877557', '-', 'IBU. RETNO', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010400', 'DUNIA SAFTINDO,PT', 'N', '-'),
(1556, '683', 'CAKRAWALA PUTRA MOTOR,PT', 'JL. JEND.SUDIRMAN KM.2,5, SAMPIT,KALIMANTAN TENGAH', '085250736067', '-', '-', 'BP. DJAUHHARI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010300', 'CAKRAWALA PUTRA MOTOR,PT', 'N', '-'),
(1557, '684', 'TRIKANDI METTA PRESISI,PT', 'KOMP.GOLDEN VILLE NO.88 BG,JL.DAAN MOGOT 2,DURI KEPA,JAKARTA BARAT 11510', '021-29336555', '021-29336999', '-', 'IBU. AMEL', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012000', 'TRIKANDI METTA PRESISI,PT', 'N', '-'),
(1558, '685', 'CEMARA SARINGAN, PT ', 'JL MANUNGGAL NO.148 MEDAN 20373', '061-50365669', '061-75015483', 'SUPPLIER SWECO ', 'BU IFNA', 30, 'Hari', '31.718.292.1-125.000', '-', NULL, NULL, NULL, 0, '3010010300', 'CEMARA SARINGAN, PT', 'N', '-'),
(1559, '686', 'SAWIT UNGGUL SAKTI, PT ', 'GD SARINAH LT 11 JL MH.THAMBRIN NO.11 GONDANGDIA  MENTENG, JAKARTA PUSAT, DKI JAKARTA', '08811232657', '-', 'KECAMBAH SAWIT ', 'PAK HANTARMAN TASLIM ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SAWIT UNGGUL SAKTI,PT', 'N', '-'),
(1560, '687', 'CENTRAL TEHNIK, CV ', 'JL MANGGIS II NO.4 SAMPIT KALIMANTAN TENGAH ', '0531-21305', '-', 'PERBAIKAN DINAMO', 'BPK SUGI SANTOSO', 0, 'Hari', '02.884.518.8-712.000', 'Y', '159*.00.0022284-3', 'BANK MANDIRI', 'CV.CENTRAL TEHNIK', 0, '3010010300', 'CENTRAL TEHNIK, CV', 'Y', '-'),
(1561, '688', 'SINAR MANDIRI,TOKO', 'LTC GLODOK,LT.1 BLOK C9 NO.8,JAKARTA', '021-62320339 / 081382121790', '021-62320339', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SINAR MANDIRI,TOKO', 'N', '-'),
(1562, '689', 'HASIL USAHA,CV', 'JL. KS.TUBUN NO.36, PALANGKARAYA', '0536-3229614', '0536-3229613', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010800', 'HASIL USAHA,CV', 'N', '-'),
(1563, '690', 'WEARINASIA', 'RUKO PARAMOUNT SERPONG BLOK F NO.25 GADING SERPONG - TANGGERANG ', '021-91764028', '-', 'SUPPLIER DRONE ', 'BPK ANDREW JASON ', 0, 'Hari', '-', '-', '8830255011', 'BANK BCA', 'ANDREW JASON GUNAWAN', 0, '3010012300', 'WEARINASIA,TOKO', 'N', '-'),
(1564, '691', 'ALAM PELITA TRISAKTI, PT ', 'Jl. Puri Kencana, Rukan Grand Puri Niaga Blok K6-3M Kembangan Selatan, Jakarta 11610', '021-58351597-98, 021-68768008', '-', 'SPAREPART PABRIK ', 'GHANI ', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ALAM PELITA TRISAKTI, PT', 'N', '-'),
(1565, '692', 'TOKO CCTV3S', 'MANGGA DUA MALL LANTAI DASAR NO.30 ', '021-62202696', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010300', 'CCTV3S, TOKO', 'N', '-'),
(1566, '693', 'INDOMULTI PRAKARSA MANDIRI,CV', 'KOMP. GRAND CITY BLOK.C1 NO.15,SEPATAN,TANGERANG 15520', '0812-93108967', '021-', '-', '-', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010900', 'INDOMULTI PRAKARSA MANDIRI, CV', 'N', '-'),
(1567, '694', 'PT LESTARI MAJU MOTOR', 'JL BANJAR GAWI RAYA D. NO.6 RT 07 RW 03 LANDASAN ULIN SELATAN, LIANG ANGGANG, KOTA BANJARBARU KALIMANTAN SELATAN', '-', '-', 'DISTIBUTOR BAN MRF', 'BPK RUDDY ', 0, 'Hari', '80.591.016.3-732.000', 'Y', NULL, NULL, NULL, 0, '3010011200', 'LESTARI MAJU MOTOR, PT', 'N', '-'),
(1568, '695', 'DUNIA NUTRISI RETAILINDO,PT', 'WISMA INDOVISION 2 LT.6,JL. RAYA PANJANG KOMP.GREEN GARDEN BLOK A-8 NO.1, KEDOYA UTARA,KB.JERUK,JAK-BAR', '021-5809859 / 58354682', '021', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010400', 'DUNIA NUTRISI RETAILINDO, PT', 'N', '-'),
(1569, '698', 'SARANA TOOLINDO PERKASA, PT ', 'MANGGA DUA PLAZA BLOK J NO.1 JAKARTA 10730', '021-6121352 / 6013880', '021-6013879', 'ALAT TEHNIK ', 'BPK AMIR ', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SARANA TOOLINDO PERKASA, PT', 'N', '-'),
(1570, '697', 'BENGARIS PERMAI,CV', 'Jl. Tjilik Riwut Km 1,5 Komplek Pertokoan CIMB Niaga ', '0536-4210412', '0536', '-', '-', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010200', 'BENGARIS PERMAI,CV', 'N', '-'),
(1571, '699', 'ET TEDEON, TK ', 'JL HAYAM WURUK NO.127 GEDUNG LTC LANTAI UG BLOK A12 NO.1 ', '08170977788', '-', '-', 'BPK PETER', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010500', 'ET TEDEON, TOKO', 'N', '-'),
(1572, '700', 'IMEX TAMA,CV', 'JL. KYAI TAMBAK DERES NO.287-291 SURABAYA', '031-51503390 / 51503500', '031-', '-', '-', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010900', 'IMEX TAMA,CV', 'N', '-'),
(1573, '701', 'CAHAYA PENGAJARAN ABADI, PT ', 'JL SAMPURNA NO.36 SAMPIT 74313', '0531-22423', '0531-22423', 'DISTRIBUTOR SHELL ', 'ROBBIAN NUR ', 30, 'Hari', '-', '-', '3510.728.110', 'DANAMON BALIKPAPAN ', 'PT. CAHAYA PENGAJARAN ABADI', 0, '3010010300', 'CAHAYA PENGAJARAN ABADI, PT', 'N', '-'),
(1574, '702', 'CAKRAWALA MULTINIAGA INTERNATIONAL,PT', 'HARCO MANGGA DUA RUKO BLOK.N NO.26 JAKARTA', '021-6000777', '021-6123020', '-', 'IBU. VIAN', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010300', 'CAKRAWALA MULTINIAGA INTERNATIONAL,PT', 'N', '-'),
(1575, '703', 'SYSMAX PRATAMA PERKASA, PT ', 'HARKOT MALL BLOK A2 NO.1 JLN MERDEKA NO.53-TANGGERANG ', '021-55768986', '-', 'PABRIKASI ', 'WARNI ', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SYSMAX PRATAMA PERKASA, PT', 'N', '-'),
(1576, '704', 'ALOHA,TOKO', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ALOHA, TOKO', 'N', '-'),
(1577, '705', 'PALMAS ENTRACO, PT ', 'JL K.H.SAMANHUDI 85 ', '3841681', '3802660', 'AGEN POMPA SHIBURA', 'ALVIN ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', 'PALMAS ENTRACO, PT', 'N', '-'),
(1578, '706', 'ANEKA SPORT, TOKO', 'KIOS PETAK BARU PASAR PAGI BLOK A NO.3B ', '021-6928749', '-', 'TOKO OLAH RAGA ', 'BU LINA CHEN / BU CAROLINE', 0, 'Hari', '-', '-', '5300099914', 'BCA', 'CAROLINE ', 0, '3010010100', 'ANEKA SPORT, TK', 'N', '-'),
(1579, '707', 'ALL SPORT, TK ', 'JLN PETAK PASAR PAGI LAMA BLOK B NO.25/37 JAKARTA BARAT ', '021-6912315', '-', 'TOKO OLAH RAGA ', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ALL SPORT, TK', 'N', '-'),
(1580, '708', 'JAYA MAKMUR SAMPIT, TOKO', 'SAMPIT KALIMANTAN TENGAH ', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011000', 'JAYA MAKMUR SAMPIT, TK', 'N', '-'),
(1581, '709', 'PONDOK TEKNIK,TOKO', 'JL. DARMOSUGONDO NO.10, PALANGKARAYA', '0822-50587339', '0536', '-', 'FAHMI ARIF', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', 'PONDOK TEKNIK PALANGKARAYA,TOKO', 'N', '-'),
(1582, '710', 'KARYAGUNA TIRTA MANDIRI, PT', 'JL. BINTARA IV NO. 26 RT.001/RW.015\nBEKASI BARAT, BEKASI 17136', '(021) 8660 7821', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011100', 'KARYAGUNA TIRTA MANDIRI, PT', 'N', '-'),
(1583, '711', 'KAPUAS KENCANA JAYA, PT', 'JL. H.M. ARSYAD NO. 68 SAMPIT KALTENG ', '053122955', '-', '-', 'MERRY AUGUSIINA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011100', 'KAPUAS KENCANA JAYA, PT', 'N', '-'),
(1584, '712', 'CAHAYA MAJU', 'LINDETEVES TRADE CENTRE (LTC) LANTAI GF2, BLOK C7, NO.1', '021-62200860', '-', '-', 'YUDI SYAHPUTRA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010300', 'CAHAYA MAJU', 'N', '-'),
(1585, '713', 'TAMPUNG PENYANG ,UD', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3015012000', 'TAMPUNG PENYANG ,UD', 'N', '-'),
(1586, '714', 'ANUGERAH SEJAHTERA MAKMUR,PT', 'JL.MOH.TOHA RUKO PONDOK ARUM BLOK A1 NO.7-8,TANGERANG,BANTEN', '021-55768986 / 081354563378', '-', '-', 'IBU WARNI', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ANUGERAH SEJAHTERA MAKMUR, PT', 'N', '-'),
(1587, '715', 'SUMBER BARU, CV - P.BUN', 'JL. PANGLIMA UTAR NO.70 RT.04 SEI TENDANG\nKEC. KUMAT, PANGKALAN BUN\nKALTENG 74181', '0532-61967, 61103', '0532-61967', '-', '-', 0, 'Hari', '-', 'Y', NULL, NULL, NULL, 0, '3010011900', 'SUMBER BARU,CV - P.BUN', 'N', '-'),
(1588, '716', 'RIYANI JAYA MANDIRI,PT', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011800', 'RIYANI JAYA MANDIRI,PT', 'N', '-'),
(1589, '717', 'ALWI MEDICINE,TOKO', 'JL. SISINGAMANGARAJA NO.8 (JALUR G.OBOS-RTA. MILONO) PALANGKARAYA', '082253700400', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ALWI MEDICINE,TOKO', 'N', '-'),
(1590, '718', 'TRIWIRA MANDIRI,UD', 'JL. KARANG ANYAR RAYA KOMP.PERMAI 53-54 BLOK A16 - JAKARTA', '021-62304955 / 081310638166', '021', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012000', 'TRIWIRA MANDIRI,UD', 'N', '-'),
(1591, '719', 'GRAHA HARAPAN AUTO SERVICE, PT ', 'JL BHAYANGKARA RAYA NO.46 SERPONG  ', '021-5396311', '021-53122603', 'modifikasi 4x4 truck ', 'BPK BUDI NUGRAHA ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010700', 'GRAHA HARAPAN AUTO SERVICE, PT', 'N', '-'),
(1592, '720', 'YOSCALE BORNEO BROTHERS,PT', 'JL. H.IMRAN NO.80A RT.13/06 KEL.KETAPANG,KEC. MB KETAPANG,SAMPIT ', '085249730499 / 085753816888', '-', '-', 'BP. YOHAN', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012500', 'YOSCALE BORNEO BROTHERS, PT', 'N', '-'),
(1593, '721', 'GRAHA SEMESTA JAYA, PT ', 'JL BHAYANGKARA 1 NO.9 RT 0005/001 PAKUJAYA, SERPONG UTARA, TANGGERANG SELATAN ', '021-5396311', '021-53122603', 'MODIFIKASI TRUCK ', 'BPK BUDI', 0, 'Hari', '31.607.104.2-411.000', 'Y', '547.510.8181', 'BCA - KCP GRAHA RAYA ', 'S BUDI NUGRAHA SE', 0, '3010010700', 'GRAHA SEMESTA JAYA, PT', 'N', '-'),
(1594, '722', 'SUMBER AGUNG JAYA, UD', '-', '-', '-', '-', 'HARTONO', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SUMBER AGUNG JAYA, UD', 'N', '-'),
(1595, '723', 'JAYA MANDIRI,CV', 'JL. CHRISTOPEL MIHING NO.39 SAMPIT', '0531-2035001 / 08125106897', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011000', 'JAYA MANDIRI, CV', 'N', '-'),
(1596, '724', 'MITRA LASER, TOKO', 'JL.CIPTO MANGUNKUSUMA, PERUMAHAN MAHKOTA SIMPRUG BLOK B-14/06\nTANGERANG SELATAN', '021-29040157', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MITRA LASER, TOKO', 'N', '-'),
(1597, '725', 'ATRIA RAYA DEANRO, PT', 'KOMP. RUKO DASANAH CENTER BLOK CD NO.57 TANGERANG-INDONESIA', '021-54204696', '-', '-', 'FENNY OLVIANITA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', NULL, 'N', '-'),
(1598, '726', 'PRABU PANDAWA MOTOR, PT ', 'JL GURU MUGHNI NO.8 JAKARTA SELATAN ', '021-5221201', '-', '-', 'AGUS THERESIAN', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011600', 'PRABU PANDAWA MOTOR, PT', 'N', '-'),
(1599, '727', 'FORTUNA ANEKAMULTI GEMILANG, PT ', 'Jl. Karang Anyar Raya 55 block B no 24\nJakarta Pusat - 10740', '6221-6591959 / 60', '6221-6595169 / 70', 'DISTRIBUTOR FAG ', 'FERRY ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010600', 'FORTUNA ANEKAMULTI GEMILANG, PT', 'N', '-'),
(1600, '728', 'BAGUS PERDANA,TOKO', 'PALANGKARAYA', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010200', 'BAGUS PERDANA, TOKO', 'N', '-'),
(1601, '729', 'BINTANG BANGUN KAHAYAN,PT', 'Jl. Tmg Tilung XVIII Blok A No 3 Palangka Raya', '08125064445', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010200', 'BINTANG BANGUN KAHAYAN, PT', 'N', '-'),
(1602, '730', 'MEGA MURNI KIMIA,CV', 'JL. A.YANI KM.7.8 KEC.KERTAKHANYAR,BANJARMASIN', '0511-6344777 / 0818375663', '-', '-', 'BP. HERRY', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MEGA MURNI KIMIA,CV', 'N', '-'),
(1603, '731', 'BINTANG PERSADA SATELIT, PT', 'JL. BRIDGEN HAMID, GG. LADANG - SUMUT', '061-7861158', '-', '-', 'EDI SUGIANTO, S.KOM', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010200', 'BINTANG PERSADA SATELIT, PT', 'N', '-'),
(1604, '732', 'UNITAMA MAKMUR ABADI, PT ', 'EQUITY TOWER 35TH FLOOR, JL JEND SUDIRMAN KAV.52-53, JAKARTA 12190', '021-29398919', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012100', 'UNITAMA MAKMUR ABADI, PT', 'N', '-'),
(1605, '733', 'ANUGRAH JAYA TRAKTOR ', 'JL CILIK RIWUT KM 2.5 NO.166B PALANGKARAYA KALTENG ', '0536-3222393', '-', 'TOKO SPAREPART', 'DPK ROHIANTO', 0, 'Hari', '-', '-', '0310007213344', 'BANK MANDIRI ', 'ROHIANTO ', 0, '3010010100', 'ANUGERAH JAYA TRAKTOR, TOKO', 'N', '-'),
(1606, '734', 'SEMUT GRUP INDONESIA, PT', 'KOMPLEK CENYTAL BISNIS DISTRIK POLONIA DD NO.63 SUKA DAMAI MEDAN POLONIA KOTA MEDAN SUMATERA UTARA', '08116082880', '-', '-', 'BENNY', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SEMUT GRUP INDONESIA, PT', 'N', '-'),
(1607, '735', 'HOLLY PERKASA, CV ', 'KOMP SUAKA INDAH PT KHARISMA JAYA BLOK C-5 BUNGU/INDRA SARI - MARTAPURA - BANJAR 70617', '-', '-', '-', '-', 0, 'Hari', '02.753.948.5-732.000', '-', NULL, NULL, NULL, 0, '3010010800', 'HOLLY PERKASA, CV', 'N', '-'),
(1608, '736', 'BENTENG MAS PERKASA, PT', 'Jl. Agung Perkasa 9, Blok K2. No 31.\nSunter - Jakarta Utara', '021-65836677', '021', '-', 'IBU. Kathrien Mandagi', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010010200', 'BENTENG MAS PERKASA, PT', 'N', '-'),
(1609, '737', 'SASCO INDONESIA,PT', 'Mayapada Tower 18th Floor Suite 07\nJl. Jend. Sudirman Kav.28\nJakarta 12920', '021-521-3668', '021-521-3670', '-', '-', 0, NULL, '-', 'Y', NULL, NULL, NULL, 0, '3010011900', 'SASCO INDONESIA,PT', 'N', '-'),
(1610, '738', 'ABB SAKTI INDUSTRI, PT ', '15TH FLOOR WTC 1 JL JEND SUDIRMAN KAV 29-31 JAKARTA 12920', '021-25515267', '-', '-', 'JAP LIH YUN ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010100', 'ABB SAKTI INDUSTRI, PT', 'N', '-'),
(1611, '739', 'SOLUSI SUKSES TEKNOLOGI,CV', 'PERUM GRIYA JAYA CIKEAS BLOK B1/NO.17,CICADAS,GUNUNG PUTRI,BOGOR', '021-29095414', '021', '-', '-', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011900', 'SOLUSI SUKSES TEKNOLOGI,CV', 'N', '-'),
(1612, '740', 'YAMAMOTO KEIKI INDONESIA,PT', 'JL. AKASIA I BLOK A5 NO.1B LIPPO CIKARANG,BEKASI,JAWA BARAT 17550', '021-8972124', '021-89907865', '-', 'BP. MASKUR', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010012500', 'YAMAMOTO KEIKI INDONESIA,PT', 'N', '-'),
(1613, '741', 'CATUR KENCANA MAKMUR,PT', 'KOTA CITRA GRHA CLUSTER ALAMANDA R.10 JL.A.YANI KM.17.5, BANJARMASIN', '0811-518208', '-', '-', 'BP. JOHANNIS', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010010300', 'CATUR KENCANA MAKMUR,PT', 'N', '-'),
(1614, '742', 'MAXIMAS, PD', 'KOMPLEK RUKO SUNTER MALL BLOK G-7I NO.19, JL, DANAU SUNTER UTARA, SUNTER AGUNG PODOMORO, JAKARTA UTARA', '021-6401854', '021-6400733', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MAXIMAS, PD', 'N', '-'),
(1615, '744', 'ANUGERAH SARANA HAYATI, PT ', 'JL RASAMALA NO.46 RT/RW 002/003 CURUG MEKAR, BOGOR BARAT, BOGOR-JAWA BARAT ', '-', '-', 'DISTIRBUTOR INSEKTISIDA', 'DERI ', 30, 'Hari', '31.490.919.3.404.000', 'Y', NULL, NULL, NULL, 0, '3010010100', 'ANUGERAH SARANA HAYATI, PT', 'N', '-'),
(1616, '745', 'JAYA MAKMUR BAN, TOKO', '-', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011000', 'JAYA MAKMUR BAN, TOKO', 'N', '-'),
(1617, '746', 'PUTERA AUTO KENCANA, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011600', 'PUTERA AUTO KENCANA, PT', 'N', '-'),
(1618, '747', 'BINTANG ANUGRAH SAMUELRENO, PT', 'JL. JEMBATAN BATU NO.82-83,PINANGSIA,TAMANSARI,JAKARTA BARAT 11110', '021-62308414', '021-6257179', '-', 'IBU. NELLIDA SIANIPAR', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010010200', 'BINTANG ANUGRAH SAMUELRENO, PT', 'N', '-'),
(1619, '748', 'KARUNIA BAJA PERSADA, PT', '-', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011100', 'KARUNIA BAJA PERSADA, PT', 'N', '-'),
(1620, '749', 'BAHTERA AGRITAMA JAYA ABADI,PT', 'JL. GAJAH MADA PASAR JAYA UPB PASAR GLODOK AL05 AKS 001,TAMANSARI', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010200', 'BAHTERA AGRITAMA JAYA ABADI,PT', 'N', '-'),
(1621, '750', 'JADIMAS, PT', 'JL AGUNG NIAGA BLOK G7A NO.8 SUNTER, JAKARTA UTARA', '021-6504624', '021-65302126', 'DISTRIBUTOR PUPUK ', 'BPK TEDY KOMALA', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011000', 'JADIMAS, PT', 'N', '-'),
(1622, '751', 'ELISA GORDEN,TOKO', 'JL. A.YANI SAMPING SANDY''S SWALAYAN', '081250841838', '0536', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010500', 'ELISA GORDEN,TOKO', 'N', '-'),
(1623, '752', 'CITY LED, TOKO', 'LTC GLODOK, JL HAYAM WURUK 127 LT.UG, BLOK B16 NO.9 JAKARTA', '021-62305554', '-', 'TOKO LAMPU LED', 'BPK STEVEN ', 0, 'Hari', '-', '-', '5770577855', 'BCA ', 'STEVEN NOGIDSON CHANDRA GAN ', 0, '3010010300', 'CITY LED, TOKO', 'N', '-'),
(1624, '753', 'SINAR ABADI, TK', 'SIDOARJO', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011900', 'SINAR ABADI, TK', 'N', '-'),
(1625, '754', 'SETIANITA MEGAH MOTOR, PT', 'Jl. Prof Dr. Soepomo No. 44\nJakarta Selatan, 12870', '021 - 8302060', '-', 'Dealer Mobil', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SETIANITA MEGAH MOTOR, PT', 'N', '-'),
(1626, '755', 'MAJU JAYA,TOKO', 'JL. DARMO SUGONDO NO.15-29, PALANGKARAYA 73111', '0536-3221753', '0536-3222475', '-', '-', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011300', 'MAJU JAYA,TOKO', 'N', '-');
INSERT INTO `supplier` (`id`, `kode`, `supplier`, `alamat`, `tlp`, `fax`, `usaha`, `sales`, `lama`, `lamatxt`, `npwp`, `pkp`, `norek`, `namabank`, `atasnama`, `noac15`, `account`, `nama_account`, `pph`, `pph_rule`) VALUES
(1627, '756', 'RESTU IBU PUSAKA, PT', 'JL RAYA CITEREUP KM.2.5 GUNUNG PUTRI, KAB.BOGOR JAWA BARAT ', '021-8754959', '021-8758117', 'KAROSERIE BUS ', 'BU RENY ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011800', 'RESTU IBU PUSAKA, PT', 'N', '-'),
(1628, '757', 'MITRA KELUARGA SEHAT,PT', 'JL.PRAMUKA KM.6 RUKO MITRA MAS NO.11/L BANJARMASIN TIMUR 70238', '0511-6743945 ', '0511- 6744608', '-', '-', 30, 'Hari', '-', NULL, NULL, NULL, NULL, 0, '3010011300', 'MITRA KELUARGA SEHAT,PT', 'N', '-'),
(1629, '758', 'LIMAS SUMBER ABADI, CV', 'JL. SESERAN ASWAN NO.70, RAWA SEMUT, BEKASI TIMUR', '-', '-', '-', 'INGE E', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011200', 'LIMAS SUMBER ABADI, CV', 'N', '-'),
(1630, '759', 'INVALTECH SYSTEM INDONESIA', 'RUKO METRO SUNTER BLOK B/29 JL DANAU SUNTER UTARA, JAKARTA 14340', '021-65300461', '021-65300970', 'DISTRIBUTOR FESTO ', 'BPK AGUS S', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010900', 'INVALTECH SYSTEM INDONESIA', 'N', '-'),
(1631, '760', 'INVALTECH SYSTEM INDONESIA, PT', 'RUKO METRO SUNTER BLOK B/29 JL. DANAU SUNTER UTARA, JAKARTA 14340', '021-65300461', '021-65300970', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010900', 'INVALTECH SYSTEM INDONESIA, PT', 'N', '-'),
(1632, '761', 'TUNAS HARAPAN UTAMA', 'LTC LT.2 BLOK C43 NO.12', '021-62320571', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010012000', 'TUNAS HARAPAN UTAMA', 'N', '-'),
(1633, '762', 'DUNIA MOTORINDO GEMILANG, PT', 'JL RAYA KEBAYORAN LAMA NO.556 RT 006/001 KEL GROGOL SELATAN, KEC KEBAYORAN LAMA, JAKARTA SELATAN, DKI JAKARTA', '081294731505', '-', 'DEALER HONDA', 'NOVI ', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010010400', 'DUNIA MOTORINDO GEMILANG, PT', 'N', '-'),
(1634, '763', 'ISMAIL, UD', 'JL. JUNJUNG BUIH NO.45 PALANGKARAYA', '0813-52895073', '-', NULL, NULL, 0, NULL, NULL, NULL, '216801001882500', 'BRI', 'TAMBERIN', 0, '3010010900', 'ISMAIL, UD', 'N', '-'),
(1635, '764', 'BANGKIT JAYA PACKING, TOKO', 'GLODOK JAYA LT.3 BLOK A NO.36 JAKARTA BARAT', '081356208548', '-', 'JUAL PACKING ', 'DAUS', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010200', 'BANGKIT JAYA PACKING, TOKO', 'N', '-'),
(1636, '765', 'TELAGA, TOKO', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010012000', 'TELAGA, TOKO', 'N', '-'),
(1637, '766', 'INTAN, TOKO', 'JL. Hiu Putih Palangkaraya', '081250809566', '-', '-', '-', 20, 'Hari', '-', NULL, '7903-01-004156-53-5', 'BRI', 'GUNTUR SETIAWAN', 0, '3010010900', 'INTAN, TOKO', 'N', '-'),
(1638, '767', 'MAXIMA SURYA ABADI,PT', 'GRAHA SA BUILDING FL.5TH, SUITE #505 JL. RAYA GUBENG 19-21, SURABAYA 60281', '031-5023500', '-', '-', 'BP. YOHANES SUBIYANTO', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011300', 'MAXIMA SURYA ABADI,PT', 'N', '-'),
(1639, '768', 'MANDIRI KARYA LESTARI', 'JL P.JAYAKARTA BUDI RAHAYU 3 NO.6 SAWAH BESAR - JAKARTA UTARA', '021-26075391', '-', 'SPAREPART ALAT BERAT', 'WANDYANTO KAMBONG ', 1, 'Bulan', '-', NULL, NULL, NULL, NULL, 0, '3010011300', 'MANDIRI KARYA LESTARI', 'N', '-'),
(1640, '769', 'MITRA SOLUSI INDUSTRI, CV', 'JL CIBUBUR COUNTRY BOULEVARD RUKO FRESH MARKET BLOK RFM2 NO.17 KEL.CIKEAS KEC.GUNUNG PUTRI KAB.BOGOR 16966', '021-21384224', '-', 'PART PABRIK ', 'ARINI ANDRIYANI ', 30, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011300', 'MITRA SOLUSI INDUSTRI, CV', 'N', '-'),
(1641, '770', 'TOTAL SARANA MANDIRI, PT', 'KOMPLEK DUTA INDAH KARYA BLOK A NO.10 JL DAAN MOGOT KM.13 JAKARTA BARAT 11740', '021-29675301', '021-29675302', 'GENERAL PART', 'JONATHAN ANDRE', 30, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010012000', 'TOTAL SARANA MANDIRI, PT', 'N', '-'),
(1642, '771', 'MOTOR SUKSES MANDIRI, PT', 'GRAND SLIPI TOWER, 5TH FLOOR JL. LETJEND S.PARMAN KAV 22 - 24 PALMERAH', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MOTOR SUKSES MANDIRI, PT', 'N', '-'),
(1643, '772', 'MOTAR SUKSES MANDIRI, PT', 'GRAND SLIPI TOWER, 5TH FLOOR JL. LETJEND S.PARMAN KAV 22 - 24 PALMERAH', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MOTAR SUKSES MANDIRI, PT', 'N', '-'),
(1644, '773', 'SERUMPUN INDAH LESTARI, PT', 'JL PULAU SOLOR, KAWASAN INDUSTRI MEDAN II, MEDAN 20252, INDONESIA', '061-6871221', '061-6871429', 'GENERAL PART PKS ', 'SANDY ', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011900', 'SERUMPUN INDAH LESTARI, PT', 'N', '-'),
(1645, '774', 'NORD INDONESIA, PT', 'JL MH.THAMRIN-KOMP.MULTI GUNA BLOK D NO.1, PAKULONAN, SERPONG UTARA, TANGGERANG SELATAN, BANTEN 15325', '021-5312222', '-', 'DISTRIBUTOR NORD ', 'BU CORY ', 0, 'Hari', '-02.005.601.6-056.000', '-', NULL, NULL, NULL, 0, '3010011400', 'NORD INDONESIA, PT', 'N', '-'),
(1646, '775', 'CAHAYA MAS PRINTING', 'JL KEPU TIMUR NO.1B, KEMAYORAN - JAKARTA PUSAT ', '021-4247397', '021-4248328', 'PERCETAKAN ', 'BU FELICIA ', 7, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010300', 'CAHAYA MAS PRINTING', 'N', '-'),
(1647, '776', 'BUDI TANTOSO', 'PONTIANAK - KALIMANTAN BARAT ', '-', '-', 'VENDOR ALAT BERAT ', 'BPK BUDI TANTOSO', 0, 'Hari', '-', '-', '146.000.414.368-6', 'BANK MANDIRI ', 'BUDI TANTOSO ', 0, '3010010200', 'BUDI TANTOSO', 'N', '-'),
(1648, '777', 'SAMATOR GAS INDUSTRI,PT', '-', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SAMATOR GAS INDUSTRI,PT', 'N', '-'),
(1649, '778', 'BALIMAS MOTOR, CV', 'JL PRAMUKA NO.2/3 SUNGAI LUHUT, BANJARMASIN TIMUR, KOTA BANJARMASIN, KALIMANTAN SELATAN ', '0511-3270853', '-', 'TOKO SPAREPART', 'BPK STEVEN ', 0, 'Hari', '-', '-', '2403000088', 'MAYBANK - CAB A.YANI BANJARMASIN ', 'CV BALIMAS MOTOR', 0, '3010010200', 'BALIMAS MOTOR, CV', 'N', '-'),
(1650, '779', 'SUMBER LOGAM UTAMA, CV', 'Jl. Pasar Baru No. 27 Banjarmasin', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SUMBER LOGAM UTAMA, CV', 'N', '-'),
(1651, '780', 'KARYA HIDUP SENTOSA, CV', 'JL MAGELANG NO.144 JOGJAKARTA 55241 INDONESIA', '0274-512095', '0274-563523', 'DISTRIBUTOR TRAKTOR ', 'M.NAUFAL ADDIFFA', 0, 'Hari', '-', '-', '060.002.0005', 'BANK BCA KCP PINGIT - YOGYAKARTA', 'CV.KARYA HIDUP SENTOSA', 0, '3010011100', 'KARYA HIDUP SENTOSA, CV', 'N', '-'),
(1652, '783', 'BERKAT PARTINDO ABADI, CV', 'GD. MEGA GLODOK KEMAYORAN LT UG BLOK A-18 NO.07 GUNUNG SAHARI SELATAN - KEMAYORAN JAKARTA PUSAT', '0858.11885599', '-', 'DISTRIBUTOR BAN ', 'BU ARY RAHAYU', 0, 'Hari', '03.317.467.3-027.000', '-', '419.303.5038', 'BANK BCA', 'CV. BERKAT PARTINDO ABADI ', 0, '3010010200', 'BERKAT PARTINDO ABADI, CV', 'N', '-'),
(1653, '782', 'FLOTECH CONTROLS INDONESIA, PT', 'KOMP RUKAN ARTHA GADING NIAGA, BLOK F/7 - JAKARTA 14240 ', '021-45850778', '-', 'DISTRIBUTOR FLOWMETER ISOLV', 'BU RISMA NARINDRA', 0, NULL, '02.115.853.0.059.000', NULL, NULL, NULL, NULL, 0, '3010010600', 'FLOTECH CONTROLS INDONESIA, PT', 'N', '-'),
(1654, '784', 'GEMAH RIPAH LOH JENAWE', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010700', 'GEMAH RIPAH LOH JENAWE', 'N', '-'),
(1655, '785', 'SURYA TEKNIK GEMILANG, CV', 'JL LINGKAR DALAM SELATAN RT 022 / RW 002 PEMURUS BARU, BANJARMASIN SELATAN', '0822 9878 6606', '-', 'AGEN ALAT PANEN ', 'APIK ISKANDAR', 0, 'Hari', '75.261.441.2-731.000', 'Y', NULL, NULL, NULL, 0, '3010011900', 'SURYA TEKNIK GEMILANG, CV', 'N', '-'),
(1656, '786', 'RADHWAA, TOKO', 'Jl. Widuri III No 12, G. Obos 12, Palangkaraya Kalimantan Tengah 73112', '081250958599', '-', '-', 'BP. KHOLIF', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011800', 'RADHWAA, TOKO', 'N', '-'),
(1657, '787', 'JAYA MACHINDO LESTARI, PT', 'Komplek Gading Bukit Indah Blok U20, 2nd Floor\nKelapa Gading, Jakarta 14240 - Indonesia', '+62-21-29574215', '+62-21-45846856', 'Alat Berat Second', '-', 0, NULL, NULL, 'Y', NULL, NULL, NULL, 0, '3010011000', 'JAYA MACHINDO LESTARI, PT', 'N', '-'),
(1658, '788', 'BPK S BUDI NUGRAHA SE - NON PPN', 'JL BHAYANGKARA 1 NO.9 PAKUJAYA SERPONG, TANGGERANG SELATAN', '021-5396311', '-', '-', '-', 0, NULL, '-', NULL, 'S BUDI NUGRAHA SE', 'BCA KCP GRAHA SAYA ', '547.510.8181', 0, '3010010200', 'BPK S BUDI NUGRAHA SE - NON PPN', 'N', '-'),
(1659, '789', 'DIGITAL AKURASI, PT', 'Jl. Puri Agung T5 No. 18\nSentra Niaga Puri Indah, Kembangan Selatan\nJakarta 11610', '(021) 58357596-98', '(021) 58350755', '-', '-', 0, NULL, '-', 'Y', NULL, NULL, NULL, 0, '3010010400', 'DIGITAL AKURASI, PT', 'N', '-'),
(1660, '790', 'POWERINDO PRIMA PERKASA,PT', 'JL. RAYA SILIWANGI RT.006/004\nKEL. ALAM JAYA,KEC.JATIUWUNG,TANGERANG', '021-5903801 / 59308111', '-', '-', '-', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011600', 'POWERINDO PRIMA PERKASA,PT', 'N', '-'),
(1661, '791', 'BANJAR BATTERINDO SENTOSA, PT', 'JL TJILIK RIWUT RT16./02 BAAMANG HULU, BAAMANG, KOTA WARINGIN TIMUR, KALIMANTAN TENGAH ', '0531-33481', '-', 'AGEN RESMI YUASA ', 'BPK FARHAD', 0, 'Hari', '02.090.429.8-712.001', '-', NULL, NULL, NULL, 0, '3010010200', 'BANJAR BATTERINDO SENTOSA, PT', 'N', '-'),
(1662, '792', 'TERPAL DIKA ALFARIZI , TOKO', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010012000', 'TERPAL DIKA ALFARIZI , TOKO', 'N', '-'),
(1663, '793', 'PUTRA AUTO KENCANA, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011600', 'PUTRA AUTO KENCANA, PT', 'N', '-'),
(1664, '794', 'SINAR MAS ELECTRINDO, PD', 'GEDUNG KENARI MAS LT GROUND NO.D31A DAN LT F2 NO.G57-G62 JAKARTA ', '021-23951058', '021-23951059', 'SUPPLIER LAMPU ', 'RICO ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SINAR MAS ELECTRINDO, PD', 'N', '-'),
(1665, '795', 'SEKAWAN, UD', 'Jalan pelita timur no75\nSAMPIT', '085252800915', '-', '-', 'Bp. AGUS', 0, 'Hari', '-', '-', '726601000029536', 'BRI', 'Rudiansyah', 0, '3010011900', 'SEKAWAN, UD', 'N', '-'),
(1666, '796', 'GUTRADO UTAMA TRAD & CO, PT', 'JL A.YANI NO.34-A/III BANJARMASIN ', '082151398555', '-', 'AGEN STHILL', 'BPK FENDI ', 0, NULL, '01.110.706.7-731.000', 'Y', NULL, NULL, NULL, 0, '3010010700', 'GUTRADO UTAMA TRAD & CO, PT', 'N', '-'),
(1667, '797', 'SINAR LAUT MANDIRI, PT', 'Jl. Mangga Besar 1 No 78, Jakarta Barat 1180 ', '(021) 625-3030, 626-5533 - Ext. : 171', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011900', 'SINAR LAUT MANDIRI, PT', 'N', '-'),
(1668, '798', 'WAHANA JAYA MAKMUR,CV', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010012300', 'WAHANA JAYA MAKMUR,CV', 'N', '-'),
(1669, '799', 'MAPA, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010051300', 'MAPA, PT', 'N', '-'),
(1670, '800', 'DUPAN ANUGERAH LESTARI, PT', 'AMG Tower 20th Floor\nJl. Dukuh Menanggal 1-A Gayungan, Surabaya 60234, Jawa Timur', '031-82516888', '031-82516555', 'PUPUK', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010010400', 'DUPAN ANUGERAH LESTARI, PT', 'Y', '-'),
(1671, '801', 'FESTO, PT', 'JL. TEKNO V BLOK A/1 SEKTOR XI KAWASAN INDUSTRI BSD SETU TANGERANG', '-', '-', '-', '-', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010010600', 'FESTO, PT', 'N', '-'),
(1672, '802', 'AGRO KIMIA ASIA, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010100', 'AGRO KIMIA ASIA, PT', 'N', '-'),
(1673, '803', 'MANDIRI SEJAHTERA BUANA, PT', 'JL KREKOT BUNDER III NO.1 PASAR BARU SAWAH BESAR, JAKARTA PUSAT, DKI JAKARTA 10710', '021-3520216/17', '021-3520219', 'AGEN ALAT BERAT ', 'MELLY ', 30, 'Hari', '31.217.304.0-075.000', 'Y', NULL, NULL, NULL, 0, '3010011300', 'MANDIRI SEJAHTERA BUANA, PT', 'N', '-'),
(1674, '804', 'POHON MAS SEJAHTERA, PT', 'Taman Pulo Indah Blok L26 \nPenggilingan, Jakarta Timur', '021.48703060', '021.48703044', 'PUMP', '-', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011600', 'POHON MAS SEJAHTERA, PT', 'N', '-'),
(1675, '805', 'PMT INDUSTRIES SDN BHD (MALAYSIA)', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011600', 'PMT INDUSTRIES SDN BHD (MALAYSIA)', 'N', '-'),
(1676, '806', 'MITRA BORNEO AGRINDO, PT', 'JL. A. YANI NO.6/6 KM.20.800\nLANDASAN ULIN SELATAN,BANJAR BARU', '-', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011300', 'MITRA BORNEO AGRINDO, PT', 'N', '-'),
(1677, '807', 'SENTRAL AVR, TK', 'LTC, Lantai 2, Blok C19, No. 2, JL. Hayam Wuruk, No. 127, RT.1/RW.6, Mangga Besar, Tamansari, Jakarta Barat,', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011900', 'SENTRAL AVR, TK', 'N', '-'),
(1678, '808', 'MITRAINDO RAYA SEJAHTERA, PT', 'JL HAYAM WURUK 127 LTC LT.UG BLOK A5 NO.5 RT 001/006 TAMAN SARI, JAKARTA BARAT', '021-62320508', '62320509', '-', 'Bpk Reyna Arief ', 14, 'Hari', '31.779.275.2-032.000', 'Y', NULL, NULL, NULL, 0, '3010011300', 'MITRAINDO RAYA SEJAHTERA, PT', 'N', '-'),
(1679, '809', 'ANDALAN GAYA BHAKTI PRATAMA, PT', 'JL. HASANUDDIN HM NO.4 - BANJARMASIN', '05113353589', '-', '-', '-', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010010100', 'ANDALAN GAYA BHAKTI PRATAMA, PT', 'N', '-'),
(1680, '810', 'INOAC, TOKO', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010900', 'INOAC, TOKO', 'N', '-'),
(1681, '815', 'MITRA WIRA PRATAMA,PT', 'Plaza Kebon Jeruk Blok B no. 1-2\nJl. Raya Pejuangan Kebon Jeruk\nJakarta 11530', '021-5321718 EXT.209', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MITRA WIRA PRATAMA,PT', 'N', '-'),
(1682, '812', 'KOPERASI BALAWANHAPAKAT ( MITRA 1)', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011100', 'KOPERASI BALAWANHAPAKAT ( MITRA 1)', 'N', '-'),
(1683, '813', 'KOPERASI MAANGKAT UTUS (MITRA 2)', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011100', 'KOPERASI MAANGKAT UTUS (MITRA 2)', 'N', '-'),
(1684, '814', 'KOPERASI TAKARAS HANDEP HAPAKAT (MITRA 3)', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011100', 'KOPERASI TAKARAS HANDEP HAPAKAT (MITRA 3)', 'N', '-'),
(1685, '811', 'MEUBEL MAWAR,TOKO', 'PALANGKARAYA', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011300', 'MEUBEL MAWAR,TOKO', 'N', '-'),
(1686, '816', 'RADIAN JAYA PRATAMA, PT', 'PLAZA HARCO MANGGA 2 LT.3 BLOK B NO.58 JAKARTA', '-', '-', '-', 'LIA', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011800', 'RADIAN JAYA PRATAMA, PT', 'N', '-'),
(1687, '817', 'BELIANG APOTEK', 'JL. BELIANG KOMP. PERTOKOAN KENARI KAV.7 PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010200', 'BELIANG APOTEK', 'N', '-'),
(1688, '818', 'BIOMETRIK CITRA SOLUSI, PT', 'JL MANGGA DUA RAYA MG.DUA MALL LT.4 BLOK B-11 MANGGA DUA SELATAN - SAWAH BESAR, JAKARTA PUSAT ', '56968516', '-', '-', 'SYAHRIL ADHADI ', 0, NULL, '02.670.161.5-026.001', 'Y', '69301.88580', 'BCA ', 'PT BIOMETRIK CITRA SOLUSI', 0, '3010010200', 'BIOMETRIK CITRA SOLUSI, PT', 'N', '-'),
(1689, '819', 'FORTA LARESE, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010600', 'FORTA LARESE, PT', 'N', '-'),
(1690, '820', 'JALY INDONESIA UTAMA, PT', 'Jl. H.M. Ashari no. 47 Cibinong 16911, Bogor. Jawa Barat - Indonesia', '(021) 875 4501', '-', 'PRODUSEN SEPATU SAFETY ', 'AGUS ', 30, 'Hari', '-', NULL, NULL, NULL, NULL, 0, '3010011000', 'JALY INDONESIA UTAMA, PT', 'N', '-'),
(1691, '821', 'SURYA SARANA DINAMIKA, PT', 'Perkantoran Mega Sunter B-40\nJl. Danau Sunter Selatan, Jakarta, 14350\nIndonesia ', '021.6583.5077-78', '021.6583.5079-80', '-', '-', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011900', 'SURYA SARANA DINAMIKA, PT', 'N', '-'),
(1692, '822', 'MEGA SUKSES CEMERLANG, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011300', 'MEGA SUKSES CEMERLANG, PT', 'N', '-'),
(1693, '823', 'GARUDA TASCO INTERNATIONAL, PT', 'JL JEMBATAN 3 NO.8C PENJARINGAN JAKARTA UTARA', '(021) 6618777', '-', 'distibutor tasco ', 'PAK ASYUNG ', 0, NULL, '02.681.744.5-041.000', 'Y', NULL, NULL, NULL, 0, '3010010700', 'GARUDA TASCO INTERNATIONAL, PT', 'N', '-'),
(1694, '824', 'YUAN WIRA PERDANA, PT', 'JL LAUTZE NO.14-K PASAR BARU-SAWAH BESAR, JAKARTA PUSAT DKI JAKARTA', '021-3809035', '-', 'distibutor bearing skf', 'BPK FERRY ', 30, 'Hari', '01.331.781.3-073.000', 'Y', NULL, NULL, NULL, 0, '3010012500', 'YUAN WIRA PERDANA, PT', 'N', '-'),
(1695, '825', 'PRIMA KARYA BERJAYA, PT', 'PERKANTORAN TAMAN MERUYA BLOK M/63 KEMBANGAN, JAKARTA BARAT 11620 INDONESIA', '021-5856073', '021-5841153', 'distributor pupuk ', 'Bpk Dixon ', 30, 'Hari', '01.955.865.9-086.000', 'Y', NULL, NULL, NULL, 0, '3010011600', 'PRIMA KARYA BERJAYA, PT', 'N', '-'),
(1696, '826', 'MITRA UTAMA MULTI KARYA, CV', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011300', 'MITRA UTAMA MULTI KARYA, CV', 'N', '-'),
(1697, '827', 'PSAM, PT', '-', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010051600', 'PSAM, PT', 'N', '-'),
(1698, '828', 'NORD DRIVESYSTEM INDONESIA, PT', 'JL. MH THAMRIN KOMPLEK MULTI GUNA BLOK A NO.6 PAKULONAN, SERPONG UTARA - KOTA TANGERANG SELATAN', '-', '-', '-', '-', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011400', 'NORD DRIVESYSTEM INDONESIA, PT', 'N', '-'),
(1699, '829', 'PELTECH FILTRATION INDONESIA, PT', 'JL MH THAMRIN RUKO MAHKOTA MAS BLOK H NO. 03 RT 003/09 CIKOKOL TANGGERANG, BANTEN ', '+62 878-9408-7353', '-', 'PRODUSEN VIBRATING SCREEN ', 'BU ESTER', 0, 'Hari', '76.160.033.7-416.001', 'Y', NULL, NULL, NULL, 0, '3010011600', 'PELTECH FILTRATION INDONESIA, PT', 'N', '-'),
(1700, '830', 'DORARETA INDO MAKMUR,PT', 'Ruko Villa Grand Tomang Blok R 03 No.10 Periuk. Pergudangan Bizlink Blok O.07 No. 17 Citra Raya Cikupa, TANGERANG', '082311339938', NULL, NULL, 'BP. INDRA', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010010400', 'DORARETA INDO MAKMUR,PT', 'N', '-'),
(1701, '831', 'BERKAH BERSAMA, UD', 'Jl. Cendrawasih No. 29 RT.012/006\nKel.Pesanggrahan, Kec.Pesanggrahan\nJakarta Selatan', '0813.1024.8184', '-', 'Supplier Burung Hantu', '-', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010200', 'BERKAH BERSAMA, UD', 'N', '-'),
(1702, '832', 'KARYA BARU, TOKO', 'jl dukuh 64 kel. nyamplungan kec. pabean cantian surabaya utara  ', '+62 812-3029-938', '-', 'agen pompa air ', 'JOSEF', 0, 'Hari', '-', NULL, NULL, NULL, NULL, 0, '3010011100', 'KARYA BARU, TOKO', 'N', '-'),
(1703, '835', 'FUTINDO UTAMAJAYA TEKNIK', 'JAYAKARTA PLAZA LANTAI 1 NO. 2057 & 2078 JL LABU NO.1 MANGGA BESAR, TAMAN SARI, JAKARTA BARAT, DKI JAKARTA', '+62 812-1044-6898', '-', 'AGEN SPAREPART', 'ANDRI', 30, 'Hari', '80.908.765.3-032.000', 'Y', '588-5130-108', 'BCA Cabang lindeteves trade center', 'Futindo utamajaya teknik pt.', 0, '3010010600', 'FUTINDO UTAMAJAYA TEKNIK', 'N', '-'),
(1704, '834', 'ANUGRA UTAMA MAKMUR, PT', 'KOMP RUKO 46 PANGERAN JAYAKARTA BLOK D NO.12 RT 009/07 MANGGA DUA SELATAN, SAWAH BESAR, JAKARTA PUSAT', '0856-6473-3166', '-', 'AGEN SPAREPART JCB ', 'VERDI ANUGRAH', 30, 'Hari', '-91.833.189.3-026.000', 'Y', NULL, NULL, NULL, 0, '3010010100', 'ANUGRA UTAMA MAKMUR, PT', 'N', '-'),
(1705, '836', 'DUTA LISTRIK NIAGA, PT', 'Jl. Raya Legok - Karawaci KM 5,5 No.66\nTangerang 15810', '021.384.0434', '021.352.1207 / 021.352.1208', 'INVERTER FUJI', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010400', 'DUTA LISTRIK NIAGA, PT', 'N', '-'),
(1706, '837', 'INTARAN PERMAI, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010900', 'INTARAN PERMAI, PT', 'N', '-'),
(1707, '838', 'BERKAH AMANAH, CV', 'JL RAYA KEDUNGBANTEN, KEDUNGBANTENG RT 1/3, KEC KEDUNGBANTENG PURWOKERTO BAYUMAS- JAWA TENGAH ', '081327548675', '-', 'PENJUAL ALAT TEST', 'DRAJAT KUAT AMINUDIN ', 0, 'Hari', '-', 'N', '0077-01-057312-50-0', 'BRI ', 'Drajat Kuat Aminudin', 0, '3010010200', 'BERKAH AMANAH, CV', 'N', '-'),
(1708, '840', 'PANDU SURYAMAS ABADI, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011600', 'PANDU SURYAMAS ABADI, PT', 'N', '-'),
(1709, '841', 'KHARISMA PANDORA, CV', 'PERUM WENGGA METROPOLITANNO.3-B, SAMPIT, KAL-TENG', '-', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011100', 'KHARISMA PANDORA, CV', 'N', '-'),
(1710, '842', 'SEJAHTERA BUANA TRADA, PT', 'Jl. Danau Sunter Blok O/3 No.49-50\nJakarta Utara 14350', NULL, NULL, 'DEALER PASSENGER CAR', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011900', 'SEJAHTERA BUANA TRADA, PT', 'N', '-'),
(1711, '843', 'MEGA FORTRIS INDONESIA,PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011300', 'MEGA FORTRIS INDONESIA,PT', 'N', '-'),
(1712, '844', 'PT SAGA JAYA MAKMUR', 'Komplek citra Garden Blok A2 no.11\nJl. A.Yani KM.7\nBanjarmasin - Kalimantan Selatan ', '-', '-', '-', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011900', 'PT SAGA JAYA MAKMUR', 'N', '-'),
(1713, '845', 'MANDIRI RST, UD', 'JL CILIK RIWUT KM.6 PALANGKARAYA', '0822-53543615', '-', 'TOKO ALAT TEHNIK DAN REPAIR ', '-', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011300', 'MANDIRI RST, UD', 'N', '-'),
(1714, '846', 'MEGA ABADI UTAMA, CV', 'JL. TJILIK RIWUT KM.1.5 PALANGKARAYA, KOMP.PERTOKOAN CIMB NIAGA', '0536-4210412', '0536', '-', 'HERMAN (EKS.BENGARIS PERMAI)', 30, 'Hari', '-', NULL, '216801000265307', 'BRI', 'CV.MEGA ABADI UTAMA', 0, '3010011300', 'MEGA ABADI UTAMA, CV', 'N', '-'),
(1715, '847', 'SUMBER CIPTA SEMESTA, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011900', 'SUMBER CIPTA SEMESTA, PT', 'N', '-'),
(1716, '848', 'PRIMA CITRA LAZUWARDI, PT', 'JL PETERNAKAN II/38A RT 003 /RW 007 KAPUK, CENGKARENG, JAKARTA BARAT ', '0813-1403-2841', '-', 'AGEN UPS ', 'BPK TORO ', 0, 'Hari', '01.368.306.5-034.000', 'Y', NULL, NULL, NULL, 0, '3010011600', 'PRIMA CITRA LAZUWARDI, PT', 'N', '-'),
(1717, '856', 'MITRA AGRO BORNEO, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011300', 'MITRA AGRO BORNEO, PT', 'N', '-'),
(1718, '850', 'ALUBI MITRA ANDALAN, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010100', 'ALUBI MITRA ANDALAN, PT', 'N', '-'),
(1719, '851', 'DELI JAYA INTI TEKNIK, PT', 'Jl. Bukitr Tempurung No.47 Tebing Tinggi \n20614, Sumatera Utara - Indonesia', '0621-2612445', NULL, 'SPAREPART PKS', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010400', 'DELI JAYA INTI TEKNIK, PT', 'N', '-'),
(1720, '852', 'TERMINAL BAN 1', 'JL TJILIK RIWUT KM.8 PALANGKARAYA - KALIMANTAN TENGAH ', '0536-3232897', '-', 'TOKO BAN DAN OLI ', 'JAHRI ', 0, 'Hari', '-', NULL, NULL, NULL, NULL, 0, '3010012000', 'TERMINAL BAN 1', 'N', '-'),
(1721, '853', 'TRIMITRA SEJATI TANNINDO, PT', 'LETJEN SUPRAPTO KOMP GRAHA CEMPAKA MAS BLOK B/18 KEMAYORAN JAKARTA PUSAT 10630', '+62 811-725-644', '-', 'AGEN RESIN PUROLITE ', 'AGUSJANTO', 0, 'Hari', '01.343.483.2-027.000', 'Y', NULL, NULL, NULL, 0, '3010012000', 'TRIMITRA SEJATI TANNINDO, PT', 'N', '-'),
(1722, '854', 'SAFANA MAKMUR ABADI ENGINEERING, CV', 'JL MARTOSARI/BANYU URIP LING.14 NO.163A KEL. RENGAS PULAU KEC. MEDAN MARELAN - SUMATRA UTARA', '061-88810157', '061-88810156', 'AGEN VALVE ', 'ADLAN YUWANDI ', 30, 'Hari', '70.593.424.8-112.000', 'Y', NULL, NULL, NULL, 0, '3010011900', 'SAFANA MAKMUR ABADI ENGINEERING, CV', 'N', '-'),
(1723, '855', 'BERKAH ACCESSORIES', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010200', 'BERKAH ACCESSORIES', 'N', '-'),
(1724, '857', 'KINGSTAR DWITAMA, PT', 'PERGUDANGAN DAAN MOGOT ARCADIA BLOK G10 NO.19 BATU CEPER, TANGGERANG ', '021-29006081-3', '021-29006182', 'CUSTOM TEHNIK ', 'HARDI PEBRIANTO ', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 0, '3010011100', 'KINGSTAR DWITAMA, PT', 'N', '-'),
(1725, '858', 'RAJAWALI BENUA SAMUDERA, PT', 'JL CLUSTER ISKANDAR MUDA BLOK A 12B RT 003 / RW 004 MEKARSAR, NEGLA SARI, TANGGERANG.', '021-55783184', '-', 'TOKO SPAREPART ', 'MEILIA THEODORA', 30, 'Hari', '94.069.250.2-402.000', 'Y', NULL, NULL, NULL, 0, '3010011800', 'RAJAWALI BENUA SAMUDERA, PT', 'N', '-'),
(1726, '859', 'PEAK, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010051600', 'PEAK, PT', 'N', '-'),
(1727, '860', 'AGROCHEM MEGA GLOBALINDO, PT', 'The bellezza office tower lt.7 unit. 1 jl letjen soepeno no.34 arteri permata hijau, kebayoran lama, jakarta selatan 12210', '021-25675688 ', '-', 'PRODUSEN INSEKTISIDA ', 'AHMAD HANIF FADIL ', 30, 'Hari', '-', NULL, NULL, NULL, NULL, 0, '3010010100', 'AGROCHEM MEGA GLOBALINDO, PT', 'N', '-'),
(1728, '861', 'PRIMA AGRO TECH, PT', 'Jl. Bojong Larang No.9 Karawaci Raya\nTangerang 15115 - Indonesia', '021-66607368', '021-66607369', 'INSEKTISIDA HAYATI', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011600', 'PRIMA AGRO TECH, PT', 'N', '-'),
(1729, '862', 'LOGOS STATIONERY,TOKO', 'JL.A.YANI,RUKO VIRGO MAS BLOK.A1-A2,PALANGKARAYA', '0536-3242849', '0536', '-', '-', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010011200', 'LOGOS STATIONERY,TOKO', 'N', '-'),
(1730, '863', 'GLOBAL TEKNINDO MAJU, PT', 'GEDUNG WTC MANGGA DUA LANTAI UG BLOK D NO.17 JL MANGGA DUA RAYA NO.8 ANCOL PADEMANGAN JAKARTA UTARA - DKI JAKARTA', '-', '-', 'TOKO SPAREPART ', 'YULIA ', 30, 'Hari', '72.056.238.8-044.000', 'Y', NULL, NULL, NULL, 0, '3010010700', 'GLOBAL TEKNINDO MAJU, PT', 'N', '-'),
(1731, '864', 'MITRA GUNAWAN, TOKO', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011300', 'MITRA GUNAWAN, TOKO', 'N', '-'),
(1732, '865', 'FORTUNA MAKMUR GEMILANG, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010600', 'FORTUNA MAKMUR GEMILANG, PT', 'N', '-'),
(1733, '867', 'FURUNO ELECTRIC INDONESIA, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010600', 'FURUNO ELECTRIC INDONESIA, PT', 'N', '-'),
(1734, '881', 'A.FAUZI / H.USMAN GORDEN, TOKO', 'PASAR BARU A JL. SUMATERA SAMPING BRI PALANGKARAYA', '0821-49482129', '-', '-', '-', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010010100', 'A.FAUZI / H.USMAN GORDEN, TOKO', 'N', '-'),
(1735, '869', 'CAHAYA NUSANTARA CIPTA, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010010300', 'CAHAYA NUSANTARA CIPTA, PT', 'N', '-'),
(1736, '870', 'MITRA JAYA MANDIRI, CV', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011300', 'MITRA JAYA MANDIRI, CV', 'N', '-'),
(1737, '873', 'SEKAFU VAMEN MULIA KENCANA, PT', 'JL. SUTOMO NO.142, MEDAN 20212. INDONESIA ', '+62 823-6432-7580', '-', 'AGEN VALVE ', 'BU ROSA ', 30, 'Hari', '-', '-', NULL, NULL, NULL, 0, '3010011900', 'SEKAFU VAMEN MULIA KENCANA, PT', 'N', '-'),
(1738, '874', 'TRIGUNA KARYA MANDIRI, CV', 'JL. MANGGIS III PERUM. SBB NO.C2-C3 SAMPIT,KAL-TENG', '0531-2067092', '0531', '-', 'AGUS', 0, NULL, '-', NULL, NULL, NULL, NULL, 0, '3010012000', 'TRIGUNA KARYA MANDIRI, CV', 'N', '-'),
(1739, '877', 'PROBESCO DISATAMA, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011600', 'PROBESCO DISATAMA, PT', 'N', '-'),
(1740, '876', 'WAHANA INTI SELARAS, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010012300', 'WAHANA INTI SELARAS, PT', 'N', '-'),
(1741, '875', 'PERINTIS PELAYANAN PARIPURNA, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011600', 'PERINTIS PELAYANAN PARIPURNA, PT', 'N', '-'),
(1742, '885', 'SYAFA BERDIKARI, UD', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011900', 'SYAFA BERDIKARI, UD', 'N', '-'),
(1743, '879', 'SYAFA BERDIKARI, UD', 'JL GUNUNG RINJANI NO.63 SAMPIT - KALIMANTAN TENGAH ', '0852-48497742', '-', 'toko sparepart alat berat ', 'BPK YONO TARYONO ', 0, 'Hari', '-', NULL, NULL, NULL, NULL, 0, '3010011900', 'SYAFA BERDIKARI, UD', 'N', '-'),
(1744, '880', 'PERSADA SEJAHTERA AGRO MAKMUR, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011600', 'PERSADA SEJAHTERA AGRO MAKMUR, PT', 'N', '-'),
(1745, '882', 'JOELCO DUNAMOS SOLUSINDO, PT', 'JL PLUIT RAYA KAV-19 BLOK A NO.6 RT 007/007  PENJARINGAN JAKARTA UTARA DKI JAKARTA 14440', '+62 812-9737-9321', '-', 'AGEN ELECTRICAL ', 'BPK MULYASIN ', 0, 'Hari', '80.856.479.3-041.000', 'Y', NULL, NULL, NULL, 0, '3010011000', 'JOELCO DUNAMOS SOLUSINDO, PT', 'N', '-'),
(1746, '883', 'SINAR SURYA KHARISMA,PT', 'Jl. Kebon Jeruk IV No. 4, Maphar\nTaman Sari, Jakarta Barat', '021- 62318535', '-', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011900', 'SINAR SURYA KHARISMA,PT', 'N', '-'),
(1747, '884', 'SUKSES BERKAT MITRA TEKNIK, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3010011900', 'SUKSES BERKAT MITRA TEKNIK, PT', 'N', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_tanam`
--

CREATE TABLE IF NOT EXISTS `tahun_tanam` (
  `id` int(11) DEFAULT NULL,
  `afd` varchar(10) DEFAULT NULL,
  `thn_tanam` varchar(150) DEFAULT NULL,
  `coa_thntanam` varchar(255) DEFAULT NULL,
  `coa_material` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `kode_pt` varchar(5) DEFAULT NULL,
  `pt` varchar(255) DEFAULT NULL,
  `tmtbm` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_tanam`
--

INSERT INTO `tahun_tanam` (`id`, `afd`, `thn_tanam`, `coa_thntanam`, `coa_material`, `ket`, `kode_pt`, `pt`, `tmtbm`) VALUES
(939, '04', '2009', '700504200900000', '700504200908100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(940, '04', '2010', '700504201000000', '700504201002100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(941, '04', '2010', '700504201000000', '700504201005100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(942, '04', '2010', '700504201000000', '700504201008100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(943, '04', '2011', '700504201100000', '700504201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(944, '04', '2011', '700504201100000', '700504201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(945, '04', '2011', '700504201100000', '700504201108100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(946, '05', '2008', '700505200800000', '700505200802100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(947, '05', '2008', '700505200800000', '700505200805100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(948, '05', '2008', '700505200800000', '700505200808100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(949, '05', '2009', '700505200900000', '700505200902100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(950, '05', '2009', '700505200900000', '700505200905100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(951, '05', '2009', '700505200900000', '700505200908100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(952, '05', '2010', '700505201000000', '700505201002100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(953, '05', '2010', '700505201000000', '700505201005100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(954, '05', '2010', '700505201000000', '700505201008100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(955, '05', '2011', '700505201100000', '700505201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(956, '05', '2011', '700505201100000', '700505201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(957, '05', '2011', '700505201100000', '700505201108100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(1059, '08', '2016', '202408201600000', '202408201602100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(1060, '08', '2016', '202408201600000', '202408201605100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(1, '11', '2016', '202411201600000', '202411201602100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(2, '11', '2016', '202411201600000', '202411201605100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(958, '06', '2008', '700506200800000', '700506200802100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(959, '06', '2008', '700506200800000', '700506200805100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(960, '06', '2008', '700506200800000', '700506200808100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(895, '03', '2015', '202403201500000', '202403201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(897, '03', '2016', '202403201600000', '202403201602100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(899, '03', '2016', '202403201600000', '202403201605100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(910, '04', '2014', '202404201400000', '202404201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(912, '04', '2014', '202404201400000', '202404201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(916, '09', '2011', '202409201100000', '202409201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(970, '08', '2011', '202408201100000', '202408201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 2)', 'TBM'),
(971, '08', '2011', '202408201100000', '202408201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 2)', 'TBM'),
(972, '08', '2013', '202408201300000', '202408201302100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 2)', 'TBM'),
(973, '08', '2013', '202408201300000', '202408201305100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 2)', 'TBM'),
(885, '02', '2015', '202402201500000', '202402201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(887, '02', '2015', '202402201500000', '202402201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(856, '01', '2014', '202401201400000', '202401201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(858, '01', '2014', '202401201400000', '202401201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(860, '01', '2015', '202401201500000', '202401201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(862, '01', '2015', '202401201500000', '202401201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(961, '06', '2009', '700506200900000', '700506200902100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(962, '06', '2009', '700506200900000', '700506200905100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(963, '06', '2009', '700506200900000', '700506200908100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(964, '06', '2010', '700506201000000', '700506201002100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(965, '06', '2010', '700506201000000', '700506201005100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(966, '06', '2010', '700506201000000', '700506201008100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(967, '06', '2011', '700506201100000', '700506201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(968, '06', '2011', '700506201100000', '700506201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(969, '06', '2011', '700506201100000', '700506201108100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(917, '09', '2011', '202409201100000', '202409201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(918, '09', '2012', '202409201200000', '202409201202100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(919, '09', '2012', '202409201200000', '202409201205100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(920, '09', '2013', '202409201300000', '202409201302100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(868, '01', '2008', '700501200800000', '700501200802100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(870, '01', '2008', '700501200800000', '700501200805100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(872, '01', '2008', '700501200800000', '700501200808100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(874, '01', '2009', '700501200900000', '700501200902100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(876, '01', '2009', '700501200900000', '700501200905100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(889, '03', '2011', '202403201100000', '202403201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(891, '03', '2011', '202403201100000', '202403201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(906, '04', '2011', '202404201100000', '202404201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(908, '04', '2011', '202404201100000', '202404201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(914, '05', '2011', '202405201100000', '202405201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(915, '05', '2011', '202405201100000', '202405201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(879, '01', '2010', '700501201000000', '700501201002100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(882, '01', '2009', '700501200900000', '700501200908100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(866, '06', '2011', '202406201100000', '202406201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TBM'),
(867, '06', '2011', '202406201100000', '202406201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TBM'),
(869, '06', '2015', '202406201500000', '202406201502100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TBM'),
(871, '06', '2015', '202406201500000', '202406201505100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TBM'),
(883, '06', '2016', '202406201600000', '202406201602100', 'Upkeep Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(881, '02', '2011', '202402201100000', '202402201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(854, '01', '2011', '202401201100000', '202401201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TBM'),
(855, '01', '2011', '202401201100000', '202401201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TBM'),
(884, '01', '2010', '700501201000000', '700501201005100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(887, '01', '2010', '700501201000000', '700501201008100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(889, '01', '2011', '700501201100000', '700501201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(891, '01', '2011', '700501201100000', '700501201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(893, '01', '2011', '700501201100000', '700501201108100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(893, '03', '2015', '202403201500000', '202403201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(886, '09', '2016', '202409201600000', '202409201602100', 'Upkeep Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(888, '09', '2016', '202409201600000', '202409201605100', 'Pemupukan Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(900, '16', '2016', '202416201600000', '202416201602100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(894, '14', '2016', '202414201600000', '202414201602100', 'Upkeep Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(896, '15', '2016', '202415201600000', '202415201602100', 'Upkeep Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(898, '15', '2016', '202415201600000', '202415201605100', 'Pemupukan Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(885, '06', '2016', '202406201600000', '202406201605100', 'Pemupukan Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(883, '02', '2011', '202402201100000', '202402201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(1050, '12', '2017', '202412201700000', '202412201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(897, '02', '2008', '700502200800000', '700502200802100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(899, '02', '2008', '700502200800000', '700502200805100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(901, '02', '2008', '700502200800000', '700502200808100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(903, '02', '2009', '700502200900000', '700502200902100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(905, '02', '2009', '700502200900000', '700502200905100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(907, '02', '2009', '700502200900000', '700502200908100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(908, '02', '2010', '700502201000000', '700502201002100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(909, '02', '2010', '700502201000000', '700502201005100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(910, '02', '2010', '700502201000000', '700502201008100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(911, '02', '2010', '700502201100000', '700502201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(931, '04', '2008', '700504200800000', '700504200802100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(932, '04', '2008', '700504200800000', '700504200805100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(933, '04', '2008', '700504200800000', '700504200808100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(1066, '3', '2008', '700503200800000', '700503200802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1067, '3', '2008', '700503200800000', '700503200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1068, '3', '2008', '700503200800000', '700503200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1069, '3', '2009', '700503200900000', '700503200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1070, '3', '2009', '700503200900000', '700503200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1071, '3', '2009', '700503200900000', '700503200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1072, '3', '2010', '700503201000000', '700503201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1073, '3', '2010', '700503201000000', '700503201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1074, '3', '2010', '700503201000000', '700503201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(934, '04', '2008', '700504200900000', '700504200902100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(935, '04', '2008', '700504200900000', '700504200905100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(904, '17', '2016', '202417201600000', '202417201602100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(906, '17', '2016', '202417201600000', '202417201605100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(912, '99', '2016', '202499201600000', '202499201602100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(914, '99', '2016', '202499201600000', '202499201605100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(1051, '12', '2017', '202412201700000', '202412201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(936, '04', '2008', '700504200900000', '700504200908100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(913, '02', '2010', '700502201100000', '700502201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(915, '02', '2010', '700502201100000', '700502201108100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(916, '02', '2011', '700502201100000', '700502201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(917, '02', '2011', '700502201100000', '700502201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(1050, '03', '2009', '700503200900000', '700503200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(937, '04', '2009', '700504200900000', '700504200902100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(938, '04', '2009', '700504200900000', '700504200905100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(921, '09', '2013', '202409201300000', '202409201305100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(922, '09', '2014', '202409201400000', '202409201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(923, '09', '2014', '202409201400000', '202409201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(924, '09', '2015', '202409201500000', '202409201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(925, '09', '2015', '202409201500000', '202409201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(938, '17', '2014', '202417201400000', '202417201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(939, '17', '2014', '202417201400000', '202417201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(940, '17', '2015', '202417201500000', '202417201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(941, '17', '2015', '202417201500000', '202417201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(902, '16', '2016', '202416201600000', '202416201605100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(934, '16', '2014', '202416201400000', '202416201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(935, '16', '2014', '202416201400000', '202416201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(895, '14', '2016', '202414201600000', '202414201605100', 'Pemupukan Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(926, '14', '2014', '202414201400000', '202414201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(927, '14', '2014', '202414201400000', '202414201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(942, '99', '2012', '202499201200000', '202499201202100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(943, '99', '2012', '202499201200000', '202499201205100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(944, '99', '2013', '202499201300000', '202499201302100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(945, '99', '2013', '202499201300000', '202499201305100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(946, '99', '2014', '202499201400000', '202499201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(947, '99', '2014', '202499201400000', '202499201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(951, '07', '2008', '700507200800000', '700507200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(952, '07', '2008', '700507200800000', '700507200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(953, '07', '2009', '700507200900000', '700507200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(954, '07', '2009', '700507200900000', '700507200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(955, '07', '2009', '700507200900000', '700507200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(956, '07', '2010', '700507201000000', '700507201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(957, '07', '2010', '700507201000000', '700507201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(958, '07', '2010', '700507201000000', '700507201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(959, '08', '2008', '700508200800000', '700508200802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(960, '08', '2008', '700508200800000', '700508200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(961, '08', '2008', '700508200800000', '700508200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(962, '08', '2009', '700508200900000', '700508200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(963, '08', '2009', '700508200900000', '700508200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(964, '08', '2009', '700508200900000', '700508200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(965, '08', '2010', '700508201000000', '700508201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(966, '08', '2010', '700508201000000', '700508201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(967, '08', '2010', '700508201000000', '700508201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(968, '08', '2011', '700508201100000', '700508201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(969, '08', '2011', '700508201100000', '700508201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(970, '08', '2011', '700508201100000', '700508201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(989, '10', '2008', '700510200800000', '700510200802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(990, '10', '2008', '700510200800000', '700510200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(18, '09', '2009', '700509200900000', '700509200902100', 'UPKEEP BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM'),
(19, '09', '2009', '700509200900000', '700509200905100', 'PEMUPUKAN BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM'),
(948, '99', '2015', '202499201500000', '202499201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(20, '09', '2009', '700509200900000', '700509200908100', 'PANEN BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM'),
(21, '09', '2010', '700509201000000', '700509201002100', 'UPKEEP BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM'),
(22, '09', '2010', '700509201000000', '700509201005100', 'PEMUPUKAN BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM'),
(23, '09', '2010', '700509201000000', '700509201008100', 'PANEN BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM'),
(24, '09', '2011', '700509201100000', '700509201102100', 'UPKEEP BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM'),
(25, '09', '2011', '700509201100000', '700509201106100', 'PEMUPUKAN UPAH', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM'),
(26, '09', '2011', '700509201100000', '700509201108100', 'PANEN BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM'),
(991, '10', '2008', '700510200800000', '700510200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(992, '10', '2009', '700510200900000', '700510200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(993, '10', '2009', '700510200900000', '700510200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(994, '10', '2009', '700510200900000', '700510200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(995, '10', '2010', '700510201000000', '700510201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(996, '10', '2010', '700510201000000', '700510201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(997, '10', '2010', '700510201000000', '700510201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(998, '10', '2011', '700510201100000', '700510201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(999, '10', '2011', '700510201100000', '700510201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1000, '10', '2011', '700510201100000', '700510201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1001, '11', '2008', '700511200800000', '700511200802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1002, '11', '2008', '700511200800000', '700511200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1003, '11', '2008', '700511200800000', '700511200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(12, '09', '2009', '700509200900000', '700509200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(13, '09', '2009', '700509200900000', '700509200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(14, '09', '2009', '700509200900000', '700509200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(15, '09', '2010', '700509201000000', '700509201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(16, '09', '2010', '700509201000000', '700509201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(17, '09', '2010', '700509201000000', '700509201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(27, '09', '2011', '700509201100000', '700509201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1004, '11', '2009', '700511200900000', '700511200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1005, '11', '2009', '700511200900000', '700511200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1006, '11', '2009', '700511200900000', '700511200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1007, '11', '2010', '700511201000000', '700511201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1008, '11', '2010', '700511201000000', '700511201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1009, '11', '2010', '700511201000000', '700511201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1010, '11', '2011', '700511201100000', '700511201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1011, '11', '2011', '700511201100000', '700511201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1012, '11', '2011', '700511201100000', '700511201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1013, '11', '2012', '700511201200000', '700511201202100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1014, '11', '2012', '700511201200000', '700511201205100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1015, '11', '2012', '700511201200000', '700511201208100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1031, '99', '2008', '700599200800000', '700599200802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1032, '99', '2008', '700599200800000', '700599200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1033, '99', '2008', '700599200800000', '700599200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1034, '99', '2009', '700599200900000', '700599200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1035, '99', '2009', '700599200900000', '700599200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1075, '3', '2011', '700503201100000', '700503201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1017, '12', '2008', '700512200800000', '700512200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1018, '12', '2008', '700512200800000', '700512200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1019, '12', '2009', '700512200900000', '700512200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1020, '12', '2009', '700512200900000', '700512200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1021, '12', '2009', '700512200900000', '700512200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1076, '3', '2011', '700503201100000', '700503201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(28, '09', '2011', '700509201100000', '700509201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1077, '3', '2011', '700503201100000', '700503201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1036, '99', '2009', '700599200900000', '700599200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1037, '99', '2010', '700599201000000', '700599201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1038, '99', '2010', '700599201000000', '700599201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1039, '99', '2010', '700599201000000', '700599201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1040, '99', '2011', '700599201100000', '700599201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1041, '99', '2011', '700599201100000', '700599201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1042, '99', '2011', '700599201100000', '700599201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1043, '99', '2012', '700599201200000', '700599201202100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1022, '12', '2010', '700512201000000', '700512201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1023, '12', '2010', '700512201000000', '700512201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1024, '12', '2010', '700512201000000', '700512201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1025, '12', '2011', '700512201100000', '700512201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1026, '12', '2011', '700512201100000', '700512201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1027, '12', '2011', '700512201100000', '700512201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1028, '12', '2012', '700512201200000', '700512201202100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1029, '12', '2012', '700512201200000', '700512201205100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1051, '03', '2009', '700503200900000', '700503200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1078, '03', '2009', '700503200900000', '700503200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1079, '03', '2008', '700503200800000', '700503200802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1080, '03', '2008', '700503200800000', '700503200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1081, '03', '2008', '700503200800000', '700503200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1082, '03', '2010', '700503201000000', '700503201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1088, '16', '2017', NULL, NULL, NULL, NULL, NULL, NULL),
(1047, '17', '2017', '202417201700000', '202417201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1048, '17', '2017', '202417201700000', '202417201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(936, '16', '2015', '202416201500000', '202416201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(937, '16', '2015', '202416201500000', '202416201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(928, '14', '2015', '202414201500000', '202414201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(929, '14', '2015', '202414201500000', '202414201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(1051, '14', '2017', '202414201700000', '202414201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1052, '14', '2017', '202414201700000', '202414201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(930, '15', '2014', '202415201400000', '202415201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(931, '15', '2014', '202415201400000', '202415201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(932, '15', '2015', '202415201500000', '202415201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(1044, '99', '2012', '700599201200000', '700599201205100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1046, '01', '2017', '202401201700000', '202401201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1053, '12', '2015', '202412201500000', '202412201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1054, '12', '2014', '202412201400000', '202412201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1061, '08', '2017', '202408201700000', '202408201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1030, '12', '2012', '700512201200000', '700512201208100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1031, '12', '2013', '700512201300000', '700512201302100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1049, '12', '2013', '700512201300000', '700512201305100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1052, '12', '2014', '700512201400000', '700512201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1083, '03', '2010', '700503201000000', '700503201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1084, '03', '2010', '700503201000000', '700503201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1085, '03', '2011', '700503201100000', '700503201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1086, '03', '2011', '700503201100000', '700503201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1062, '08', '2017', '202408201700000', '202408201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(952, '11', '2017', '202411201700000', '202411201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(953, '11', '2017', '202411201700000', '202411201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1057, '17', '2018', '202417201800000', '202417201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1058, '17', '2018', '202417201800000', '202417201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(933, '15', '2015', '202415201500000', '202415201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(1049, '15', '2017', '202415201700000', '202415201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1050, '15', '2017', '202415201700000', '202415201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1055, '15', '2015', '202415201400000', '202415201408000', 'UPKEEP PIHAK KETIGA-KONTRAKTOR', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1056, '15', '2014', '202415201400000', '202415201408000', 'UPKEEP PIHAK KETIGA-KONTRAKTOR', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(949, '99', '2015', '202499201500000', '202499201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM'),
(950, '99', '2017', '202499201700000', '202499201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(951, '99', '2017', '202499201700000', '202499201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1045, '99', '2012', '700599201200000', '700599201208100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM'),
(1046, '99', '2013', '700599201300000', '700599201302100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1047, '99', '2013', '700599201300000', '700599201305100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(886, '06', '2017', '202406201700000', '202406201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(887, '06', '2017', '202406201700000', '202406201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1063, '02', '2017', '202402201700000', '202402201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1055, '12', '2014', '202412201400000', '202412201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1056, '12', '2015', '202412201500000', '202412201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1086, '01', '2018', '202401201800000', '202401201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1087, '12', '2018', '202412201800000', '202412201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1088, '12', '2018', '202412201800000', '202412201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1046, '16', '2017', '202416201700000', '202416201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1059, '16', '2018', '202416201800000', '202416201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1060, '16', '2018', '202416201800000', '202416201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1061, '14', '2018', '202414201800000', '202414201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1062, '14', '2018', '202414201800000', '202414201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1063, '15', '2018', '202415201800000', '202415201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1064, '15', '2018', '202415201800000', '202415201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1066, '99', '2018', '202499201800000', '202499201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1067, '99', '2018', '202499201800000', '202499201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1048, '99', '2013', '700599201300000', '700599201308100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1068, '99', '2014', '700599201400000', '700599201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1069, '99', '2014', '700599201400000', '700599201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1070, '99', '2014', '700599201400000', '700599201408100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1071, '', '2014', '700515201408100', '700515201408102', 'ALAT PERKAKAS', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1080, '06', '2018', '202406201800000', '202406201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1081, '06', '2018', '202406201800000', '202406201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(5, '16', '2015', '700516201500000', '700516201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(6, '16', '2015', '700516201500000', '700516201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(7, '16', '2015', '700516201500000', '700516201508100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1082, '14', '2014', '700514201400000', '700514201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1083, '14', '2014', '700514201400000', '700514201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1077, '15', '2014', '700515201400000', '700515201408100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1078, '15', '2014', '700515201400000', '700515201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1079, '15', '2014', '700515201400000', '700515201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1065, '02', '2017', '202402201700000', '202402201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(1085, '02', '2018', '202402201800000', '202402201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM'),
(918, '02', '2011', '700502201100000', '700502201108100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM'),
(958, '02', '2015', '700502201500000', '700502201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(959, '02', '2015', '700502201500000', '700502201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(960, '02', '2015', '700502201500000', '700502201508100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1084, '14', '2014', '700514201400000', '700514201408100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1085, '14', '2015', '700514201500000', '700514201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1086, '14', '2015', '700514201500000', '700514201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1087, '14', '2015', '700514201500000', '700514201508100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1088, '15', '2015', '700515201500000', '700515201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1089, '15', '2015', '700515201500000', '700515201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1090, '15', '2015', '700515201500000', '700515201508100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1091, '17', '2015', '700517201500000', '700517201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1092, '17', '2015', '700517201500000', '700517201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1093, '17', '2015', '700517201500000', '700517201508100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1053, '12', '2014', '700512201400000', '700512201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1094, '12', '2015', '700512201500000', '700512201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1095, '12', '2015', '700512201500000', '700512201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1096, '12', '2015', '700512201500000', '700512201508100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1098, '06', '2008', '700506200800000', '700506200807100', 'PENGANGKUTAN PUPUK', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1087, '03', '2011', '700503201100000', '700503201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1099, '03', '2018', '700503200800000', '700503200807100', 'PENGANGKUTAN PUPUK', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(1100, '03', '2008', '700503200800000', '700503200807100', 'PENGANGKUTAN PUPUK', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(29, '09', '2011', '700509201100000', '700509201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(30, '09', '2013', '700509201300000', '700509201302100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(31, '09', '2013', '700509201300000', '700509201305100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM'),
(32, '09', '2013', '700509201300000', '700509201308100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_devisi`
--

CREATE TABLE IF NOT EXISTS `tb_devisi` (
  `id` int(11) NOT NULL,
  `kode_pt` varchar(4) NOT NULL,
  `kodetxt` varchar(5) DEFAULT NULL,
  `PT` varchar(100) DEFAULT NULL,
  `namaalias` varchar(50) DEFAULT NULL,
  `lokasi` text,
  `kode_kud` varchar(5) DEFAULT NULL,
  `kud` varchar(50) DEFAULT NULL,
  `npwp` varchar(125) DEFAULT NULL,
  `alamatnpwp` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_devisi`
--

INSERT INTO `tb_devisi` (`id`, `kode_pt`, `kodetxt`, `PT`, `namaalias`, `lokasi`, `kode_kud`, `kud`, `npwp`, `alamatnpwp`) VALUES
(1, '01', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'PT.MSAL (ESTATE1)', 'SITE', NULL, NULL, NULL, NULL),
(2, '01', '03', 'PT.MULIA SAWIT AGRO LESTARI (PKS)', 'PT.MSAL (PKS)', 'PKS', NULL, NULL, NULL, NULL),
(3, '01', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'PT.MSAL (ESTATE2)', 'SITE', NULL, NULL, NULL, NULL),
(4, '01', '11', 'RO SAMPIT', 'RO SAMPIT', 'RO', NULL, NULL, NULL, NULL),
(5, '01', '12', 'RO PALANGKARAYA', 'RO PALANGKARAYA', 'RO', NULL, NULL, NULL, NULL),
(6, '01', '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', 'PT. MSAL (HO)', 'HO', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_posting_keluarbrgitem`
--

CREATE TABLE IF NOT EXISTS `tmp_posting_keluarbrgitem` (
  `id` int(11) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(100) DEFAULT NULL,
  `alokasi` varchar(5) DEFAULT NULL,
  `kodept` varchar(5) DEFAULT NULL,
  `nobpb` double DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `afd` varchar(50) DEFAULT NULL,
  `blok` varchar(10) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `qty2` double DEFAULT NULL,
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
  `posting` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_posting_masukitem`
--

CREATE TABLE IF NOT EXISTS `tmp_posting_masukitem` (
  `id` int(11) DEFAULT NULL,
  `kdpt` varchar(5) DEFAULT NULL,
  `nopo` double DEFAULT NULL,
  `nopotxt` varchar(50) DEFAULT NULL,
  `LOKAL` smallint(6) DEFAULT NULL,
  `ASSET` smallint(6) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `afd` varchar(10) DEFAULT NULL,
  `kodebar` double DEFAULT NULL,
  `kodebartxt` varchar(50) DEFAULT NULL,
  `nabar` varchar(150) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `grp` varchar(100) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `ttg` double DEFAULT NULL,
  `ttgtxt` varchar(255) DEFAULT NULL,
  `tglinput` datetime DEFAULT NULL,
  `txttgl` double DEFAULT NULL,
  `thn` double DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `txtperiode` double DEFAULT NULL,
  `noadjust` double DEFAULT NULL,
  `ket` varchar(250) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `refpo` varchar(255) DEFAULT NULL,
  `noref` varchar(255) DEFAULT NULL,
  `BATAL` smallint(6) DEFAULT NULL,
  `alasan_batal` text,
  `kurs` varchar(10) DEFAULT NULL,
  `konversi` double DEFAULT NULL,
  `USER` varchar(50) DEFAULT NULL,
  `cetak` smallint(6) DEFAULT NULL,
  `posting` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status_lokasi` varchar(25) DEFAULT NULL,
  `kode_level` int(11) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `status_lokasi_pks` enum('0','1') DEFAULT '0',
  `status_lokasi_site` enum('0','1') DEFAULT '0',
  `status_lokasi_ro` enum('0','1') DEFAULT '0',
  `status_lokasi_ho` enum('0','1') DEFAULT '0',
  `level_ktu` enum('0','1') DEFAULT '0',
  `level_kasie` enum('0','1') DEFAULT '0',
  `level_gm` enum('0','1') DEFAULT '0',
  `level_mill_mgr` enum('0','1') DEFAULT '0',
  `level_dept_head` enum('0','1') DEFAULT '0',
  `level_dir_ops` enum('0','1') DEFAULT '0',
  `level_dept_head_purchasing` enum('0','1') DEFAULT '0',
  `level_dir_purchasing` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `nama`, `username`, `password`, `status_lokasi`, `kode_level`, `level`, `status_lokasi_pks`, `status_lokasi_site`, `status_lokasi_ro`, `status_lokasi_ho`, `level_ktu`, `level_kasie`, `level_gm`, `level_mill_mgr`, `level_dept_head`, `level_dir_ops`, `level_dept_head_purchasing`, `level_dir_purchasing`) VALUES
(1, 'KTU', 'ktu', '$2y$10$ebXXuw69ms0auERZeijTRe5pqgsKUOuzXsetdNG01wf7AdJ9OFJ3u', 'SITE', 11, 'KTU', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(2, 'Kasie HRD GA', 'kasie_hrd_ga', '$2y$10$C.ntbfdkEzLwOSxzZbEJLOrdaL3WIoJN6aCAe5pzry9WDq.lgiP.m', 'SITE', 12, 'Kasie HRD GA', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(3, 'Kasie Agronomi', 'kasie_agronomi', '$2y$10$7nHco4eqCd8ZxVKDW3ISF.dwa.l2XnQ/ADcz7183qvisGYDpi23Lu', 'SITE', 13, 'Kasie Agronomi', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(4, 'Kasie Pabrik', 'kasie_pabrik', '$2y$10$0M8q3sE/i7Jnusr2MTRLR.X8iqCO7ee2pRusoOGk79x75znPAusJ6', 'PKS', 14, 'Kasie Pabrik', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(5, 'GM', 'gm', '$2y$10$OW8gNCzfQK408s0GMNCpKOM8fKrBaAAZJwG/OLoPJ6BrhYocWct26', 'SITE', 15, 'GM', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, 'Mill Mgr', 'mill_mgr', '$2y$10$Jphbb58c1QiZV5RubzrtEOah925fYc9yI1F55FoLZ/rcfmwzsMPsC', 'PKS', 16, 'Mill Manager', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, 'Dept Head', 'dept_head', '$2y$10$CWths9iEaUIywTdvEWg4u.q4FvXFUYUe47B5m9CvBCq8DptF26/f.', 'HO', 21, 'Dept. Head', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(8, 'Dir Ops', 'dir_ops', '$2y$10$WwuFiFeYwk0pJOO8MygFiOgKNbwf8EKyBRTuu5iUSH2kj0RQiX466', 'HO', 22, 'Dir. Ops', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(9, 'Dept Head Purchasing', 'dept_head_purchasing', '$2y$10$j0BDiZhCn/EGDv.2F9eb0eSU385f8ZXdg5TStPHlZPDayX74czW3S', 'HO', 23, 'Dept. Head Purchasing', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(10, 'Dir Purchasing', 'dir_purchasing', '$2y$10$sMPWuGyRZrc2SxsgFZE2qOGmY2CeKYa81vyiysKXx71Z16gFmg20m', 'HO', 24, 'Dir. Keuangan', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(11, 'User HO', 'user_ho', '$2y$10$KdY70s02pOnMgDirqrl8Ge1dbYx/WjQJtio6Lav/U2DgsYGZEJzB.', 'HO', 31, 'User HO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(12, 'User RO', 'user_ro', '$2y$10$ZGW0sC1eULkirKpxGm.XJO1l27y7QPCo6KB7v05G9MRaRZdhW0iXu', 'RO', 32, 'User RO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(13, 'User SITE', 'user_site', '$2y$10$YMfk7a8.MGWN4.tshDEqcOXPSJtPYMhGAgFWT7vfiVHMN6qnNXsFC', 'SITE', 33, 'User SITE', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(14, 'User PKS', 'user_pks', '$2y$10$9AsK6ibFLWV971r6vfAhyOcxDSDf2T8D2PN2Kda5XVGCDdbANt/42', 'PKS', 34, 'User PKS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(15, 'Dir MIS', 'dir_mis', '$2y$10$rgJPPclJR3IpMvawrTrfFexAMZUwIovUacbxPTkZXyf2vcVAje6XG', 'HO', 25, 'Dir. MIS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(16, 'Dir HR GA', 'dir_hr_ga', '$2y$10$gU3Iiw.CvaFY6itXFoN8C.tbymtXupw/kJpgOSxrh/NHCiztbdh4G', 'HO', 26, 'Dir. HR GA', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(17, 'Dir Accounting', 'dir_accounting', '$2y$10$bdTWZST2v7yDKr5WA1sO4e6zYS07vV0Zq5gmXUHkBmmEI4Ai9bK2K', 'HO', 27, 'Dir. Accounting', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(18, 'Kepala Perwakilan', 'kp', '$2y$10$LIj8m0ze325hodJuwfBoPeQihmg5CAUVV3fitZ.0jXytO36fYYd7S', 'RO', 17, 'Kepala Perwakilan', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(19, 'Raymond HO', 'raymond_ho', '$2y$10$HT.4g3IhlT6z0gPaaC/ouOuvbGj35Zzq/dtv8jCVwlOmsI1loPgTK', 'HO', 31, 'User HO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(20, 'Raymond RO', 'raymond_ro', '$2y$10$HGOtqdNE2V5.9g2gpK8GNOTUtS/cGxTL14FfKZ/b2mnN7bJ2Xbg2W', 'RO', 32, 'User RO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(21, 'Raymond SITE', 'raymond_site', '$2y$10$BUFxhY8dXKTJBDzViTkG1OJO0yqEpKoHqfFVbug/lZN.OOg1pL6Fe', 'SITE', 33, 'User SITE', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(22, 'Raymond PKS', 'raymond_pks', '$2y$10$yztB9GnOfOg6KbmPqPVLwuoqsgFYAc.6udElv0t/mxaM4fo5h51o2', 'PKS', 34, 'User PKS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(23, 'Siswanta', 'siswanta', '$2y$10$KEpeeFgwvWwC509naZntqegxkcPN7Mi2JgyCnz25Qg9b/GpzxOPXC', 'HO', 41, 'Direktur HRD & Umum', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(24, 'Timotius Aucky Wusman', 'timoti', '$2y$10$9r81i/sINBV3vfbDQmE70ewOkU94wrT.IN84gLE9CMC0ZZ1qwJYTG', 'HO', 42, 'Direktur MIS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(25, 'Dwi Dharmawan', 'dwi_dharmawan', '$2y$10$0Gf69Jlh7ZCgezy.9DXcJO0EnrgwgkhdnRo7rCcYXjcqBsdBsjzra', 'HO', 43, 'Direktur Legal', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(26, 'Nurul Huda', 'nurul_huda', '$2y$10$KBV/uTxdFjc3Ue3boMIX4exzDNxDdB0ML9h1Zs0qcMc7mJYINpyI6', 'HO', 44, 'Direktur Area', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(27, 'Staff Purchasing', 'staff_purchasing', '$2y$10$AiCzBhWSx8pUy0EuDX3JYOEjfd3O55/8d6KllWGePji22f/YWQMjS', 'HO', 35, 'Staff Purchasing', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(28, 'User Gudang', 'user_gudang', '$2y$10$YW0zkH6vrFqbTf0BL8KYLun6euAIIhGA.xkjrZkh0NhpJgudu3G76', 'SITE', 36, 'User Gudang', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(29, 'Kasie Gudang', 'kasie_gudang', '$2y$10$SXvlP4rVZDI4z.v7ljbLGutWnZyUhVI1FGVudLTnpOCBkEmDtPWOS', 'SITE', 18, 'Kasie Gudang', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(30, 'Kasie Pembukuan', 'kasie_pembukuan', '$2y$10$Gl79xnzLIs/ekc9OXpR6NOXfakbIi9IypaBW.BdItwmCeg/GaSH0a', 'SITE', 19, 'Kasie Pembukuan', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(31, 'Asisten Afdeling', 'asisten_afdeling', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 20, 'Asisten Afdeling', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(32, 'Kepala Kebun', 'kepala_kebun', '$2y$10$ruopUrov9eRgwrQoiajEp.RmqimkH9nYCZYNulhJrcV9SU0paxG36', 'SITE', 10, 'Kepala Kebun', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(33, 'Super Admin', 'super_admin', '$2y$10$ruopUrov9eRgwrQoiajEp.RmqimkH9nYCZYNulhJrcV9SU0paxG36', 'HO', 50, 'Super Admin', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(34, 'mandor', 'mandor', '$2y$10$ruopUrov9eRgwrQoiajEp.RmqimkH9nYCZYNulhJrcV9SU0paxG36', 'SITE', 51, 'mandor', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(38, 'vendor', 'vendor', '$2y$10$JXl.Wp50BxEYOkEScinGVO.lmgSnUkLquW.hJR6zhSiqY.2W8nX2W', 'SITE', 52, 'vendor', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(39, 'Gani HO', 'gani_ho', '$2y$12$cKiQt6ZEAcu53VH1utd/7uTMi.HrnZtHLKyH.jx8V832Sm7UvPqFi', 'HO', 31, 'User HO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(40, 'Gani SITE', 'gani_site', '$2y$12$cKiQt6ZEAcu53VH1utd/7uTMi.HrnZtHLKyH.jx8V832Sm7UvPqFi', 'SITE', 33, 'User SITE', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(41, 'Ayyu HO', 'ayyu_ho', '$2y$12$cKiQt6ZEAcu53VH1utd/7uTMi.HrnZtHLKyH.jx8V832Sm7UvPqFi', 'HO', 31, 'User HO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(42, 'Ayyu SITE', 'ayyu_site', '$2y$12$cKiQt6ZEAcu53VH1utd/7uTMi.HrnZtHLKyH.jx8V832Sm7UvPqFi', 'SITE', 33, 'User SITE', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_copy1`
--

CREATE TABLE IF NOT EXISTS `user_copy1` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status_lokasi` varchar(25) DEFAULT NULL,
  `kode_level` int(11) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `status_lokasi_pks` enum('0','1') DEFAULT '0',
  `status_lokasi_site` enum('0','1') DEFAULT '0',
  `status_lokasi_ro` enum('0','1') DEFAULT '0',
  `status_lokasi_ho` enum('0','1') DEFAULT '0',
  `level_ktu` enum('0','1') DEFAULT '0',
  `level_kasie` enum('0','1') DEFAULT '0',
  `level_gm` enum('0','1') DEFAULT '0',
  `level_mill_mgr` enum('0','1') DEFAULT '0',
  `level_dept_head` enum('0','1') DEFAULT '0',
  `level_dir_ops` enum('0','1') DEFAULT '0',
  `level_dept_head_purchasing` enum('0','1') DEFAULT '0',
  `level_dir_purchasing` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `user_copy1`
--

INSERT INTO `user_copy1` (`no`, `nama`, `username`, `password`, `status_lokasi`, `kode_level`, `level`, `status_lokasi_pks`, `status_lokasi_site`, `status_lokasi_ro`, `status_lokasi_ho`, `level_ktu`, `level_kasie`, `level_gm`, `level_mill_mgr`, `level_dept_head`, `level_dir_ops`, `level_dept_head_purchasing`, `level_dir_purchasing`) VALUES
(1, 'KTU', 'ktu', NULL, 'SITE', 11, 'KTU', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(2, 'Kasie HRD GA', 'kasie_hrd_ga', NULL, 'SITE', 12, 'Kasie HRD GA', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(3, 'Kasie Agronomi', 'kasie_agronomi', NULL, 'SITE', 13, 'Kasie Agronomi', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(4, 'Kasie Pabrik', 'kasie_pabrik', NULL, 'PKS', 14, 'Kasie Pabrik', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(5, 'GM', 'gm', NULL, 'SITE', 15, 'GM', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, 'Mill Mgr', 'mill_mgr', NULL, 'PKS', 16, 'Mill Manager', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, 'Dept Head', 'dept_head', NULL, 'HO', 21, 'Dept. Head', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0'),
(8, 'Dir Ops', 'dir_ops', NULL, 'HO', 22, 'Dir. Ops', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0'),
(9, 'Dept Head Purchasing', 'dept_head_purchasing', NULL, 'HO', 23, 'Dept. Head Purchasing', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0'),
(10, 'Dir Purchasing', 'dir_purchasing', NULL, 'HO', 24, 'Dir. Keuangan', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0'),
(11, 'User HO', 'user_ho', NULL, 'HO', 31, 'User HO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(12, 'User RO', 'user_ro', NULL, 'RO', 32, 'User RO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(13, 'User SITE', 'user_site', NULL, 'SITE', 33, 'User SITE', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(14, 'User PKS', 'user_pks', NULL, 'PKS', 34, 'User PKS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(15, 'Dir MIS', 'dir_mis', NULL, 'HO', 25, 'Dir. MIS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(16, 'Dir HR GA', 'dir_hr_ga', NULL, 'HO', 26, 'Dir. HR GA', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(17, 'Dir Accounting', 'dir_accounting', NULL, 'HO', 27, 'Dir. Accounting', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(18, 'Kepala Perwakilan', 'kp', NULL, 'RO', 17, 'Kepala Perwakilan', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(19, 'Raymond HO', 'raymond_ho', NULL, 'HO', 31, 'User HO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(20, 'Raymond RO', 'raymond_ro', NULL, 'RO', 32, 'User RO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(21, 'Raymond SITE', 'raymond_site', NULL, 'SITE', 33, 'User SITE', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(22, 'Raymond PKS', 'raymond_pks', NULL, 'PKS', 34, 'User PKS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(23, 'Siswanta', 'siswanta', NULL, 'HO', 41, 'Direktur HRD & Umum', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(24, 'Timotius Aucky Wusman', 'timoti', NULL, 'HO', 42, 'Direktur MIS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(25, 'Dwi Dharmawan', 'dwi_dharmawan', NULL, 'HO', 43, 'Direktur Legal', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(26, 'Nurul Huda', 'nurul_huda', NULL, 'HO', 44, 'Direktur Area', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(27, 'Staff Purchasing', 'staff_purchasing', NULL, 'HO', 35, 'Staff Purchasing', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(28, 'User Gudang', 'user_gudang', NULL, 'SITE', 36, 'User Gudang', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(29, 'Kasie Gudang', 'kasie_gudang', NULL, 'SITE', 18, 'Kasie Gudang', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(30, 'Kasie Pembukuan', 'kasie_pembukuan', NULL, 'SITE', 19, 'Kasie Pembukuan', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(31, 'Asisten Afdeling', 'asisten_afdeling', NULL, 'SITE', 20, 'Asisten Afdeling', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(32, 'Kepala Kebun', 'kepala_kebun', NULL, 'SITE', 10, 'Kepala Kebun', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `usr`
--

CREATE TABLE IF NOT EXISTS `usr` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status_lokasi` varchar(25) NOT NULL,
  `id_dept` int(11) DEFAULT NULL,
  `dept` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `usr`
--

INSERT INTO `usr` (`no`, `nama`, `username`, `password`, `status_lokasi`, `id_dept`, `dept`) VALUES
(1, 'Asisten Afdeling', 'asisten_afdeling', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 1, 'Agronomi'),
(2, 'Kepala Kebun', 'kepala_kebun', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 1, 'Agronomi'),
(3, 'Dept Head Agronomi', 'dept_head_agronomi', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 1, 'Agronomi'),
(4, 'User Agronomi', 'user_agronomi', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 1, 'Agronomi'),
(5, 'User HSE', 'user_hse', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 12, 'HSE'),
(6, 'Dept Head HSE', 'dept_head_hse', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 12, 'HSE'),
(7, 'User BQC', 'user_bqc', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 13, 'BQC'),
(8, 'Dept Head BQC', 'dept_head_bqc', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 13, 'BQC'),
(9, 'User HRD GA', 'user_hrd_ga', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 7, 'HRD'),
(10, 'Kasie HRD GA', 'kasie_hrd_ga', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 7, 'HRD'),
(11, 'Dept Head HRD GA', 'dept_head_hrd_ga', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 7, 'HRD'),
(12, 'Dir HRD GA', 'dir_hrd_ga', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 7, 'HRD'),
(13, 'User GIS', 'user_gis', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 10, 'GIS'),
(14, 'Dept Head GIS', 'dept_head_gis', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 10, 'GIS'),
(15, 'User SITE', 'user_site', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 11, 'MIS'),
(16, 'Dept Head MIS', 'dept_head_mis', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 11, 'MIS'),
(17, 'Dir MIS', 'dir_mis', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 11, 'MIS'),
(18, 'User FA', 'user_fa', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 4, 'FA'),
(19, 'Dept Head FA', 'dept_head_fa', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 4, 'FA'),
(20, 'User Legal Humas', 'user_legal_humas', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 5, 'LegalHumas'),
(21, 'Dept Head Legal Humas', 'dept_head_legal_humas', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 5, 'LegalHumas'),
(22, 'Dir Legal Humas', 'dir_legal_humas', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 5, 'LegalHumas'),
(23, 'User Teknik', 'user_teknik', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 8, 'Teknik'),
(24, 'Dept Head Teknik', 'dept_head_teknik', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 8, 'Teknik'),
(25, 'Staff Purchasing', 'staff_purchasing', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 6, 'Purchasing'),
(26, 'Dept Head Purchasing', 'dept_head_purchasing', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 6, 'Purchasing'),
(27, 'Dir Purchasing', 'dir_purchasing', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 6, 'Purchasing'),
(28, 'User Audit', 'user_audit', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 15, 'Audit'),
(29, 'Dept Head Audit', 'dept_head_audit', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 15, 'Audit'),
(30, 'User PKS', 'user_pks', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'PKS', 2, 'Engineering'),
(31, 'Asisten Maintenance', 'asisten_maintenance', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'PKS', 2, 'Engineering'),
(32, 'Kasie Gudang', 'kasie_gudang', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 7, 'Umum'),
(33, 'Asisten Kepala', 'asisten_kepala', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'PKS', 2, 'Engineering'),
(34, 'KTU', 'ktu', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 7, 'Umum'),
(35, 'GM', 'gm', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 7, 'Umum'),
(36, 'Dept Head Engineering', 'dept_head_engineering', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 0, 'PKS'),
(37, 'Dir Operasional', 'dir_ops', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 7, 'Umum'),
(38, 'Mill Manager', 'mill_mgr', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'PKS', 2, 'Engineering'),
(39, 'User HO', 'user_ho', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'HO', 7, 'Umum'),
(40, 'User RO', 'user_ro', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'RO', 7, 'Umum'),
(41, 'Kasie Agronomi', 'kasie_agronomi', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 1, 'Agronomi'),
(42, 'Kasie Pembukuan', 'kasie_pembukuan', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 7, 'UMUM');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_list_item_approval`
--
CREATE TABLE IF NOT EXISTS `v_list_item_approval` (
`id` int(11)
,`no_id_item_ppo` int(11)
,`noppotxt` varchar(7)
,`tglppotxt` double
,`noreftxt` varchar(30)
,`kodebartxt` varchar(20)
,`nabar` varchar(255)
,`sat` varchar(30)
,`qty` double
,`STOK` double
,`ket` text
,`status` varchar(50)
,`status2` smallint(6)
,`po` int(11)
,`kodedept` double
,`namadept` varchar(30)
,`flag_waiting_ktu` enum('0','1')
,`nama_approval_ktu` varchar(100)
,`tgl_approval_ktu` datetime
,`status_ktu` varchar(100)
,`status2_ktu` varchar(100)
,`status_lokasi_ktu` varchar(100)
,`flag_waiting_kasie` enum('0','1')
,`nama_approval_kasie` varchar(100)
,`tgl_approval_kasie` datetime
,`status_kasie` varchar(100)
,`status2_kasie` varchar(100)
,`status_lokasi_kasie` varchar(100)
,`flag_waiting_gm` enum('0','1')
,`nama_approval_gm` varchar(100)
,`tgl_approval_gm` datetime
,`status_gm` varchar(100)
,`status2_gm` varchar(100)
,`status_lokasi_gm` varchar(100)
,`flag_waiting_mill_mgr` enum('0','1')
,`nama_approval_mill_mgr` varchar(100)
,`tgl_approval_mill_mgr` datetime
,`status_mill_mgr` varchar(100)
,`status2_mill_mgr` varchar(100)
,`status_lokasi_mill_mgr` varchar(100)
,`flag_waiting_dept_head` enum('0','1')
,`nama_approval_dept_head` varchar(100)
,`tgl_approval_dept_head` datetime
,`status_dept_head` varchar(100)
,`status2_dept_head` varchar(100)
,`status_lokasi_dept_head` varchar(100)
,`flag_waiting_dir_ops` enum('0','1')
,`nama_approval_dir_ops` varchar(100)
,`tgl_approval_dir_ops` datetime
,`status_dir_ops` varchar(100)
,`status2_dir_ops` varchar(100)
,`status_lokasi_dir_ops` varchar(100)
,`flag_waiting_dir_hrd` enum('0','1')
,`nama_approval_dir_hrd` varchar(100)
,`tgl_approval_dir_hrd` datetime
,`status_dir_hrd` varchar(100)
,`status2_dir_hrd` varchar(100)
,`status_lokasi_dir_hrd` varchar(100)
,`flag_waiting_dir_mis` enum('0','1')
,`nama_approval_dir_mis` varchar(100)
,`tgl_approval_dir_mis` datetime
,`status_dir_mis` varchar(100)
,`status2_dir_mis` varchar(100)
,`status_lokasi_dir_mis` varchar(100)
,`flag_waiting_dir_legal` enum('0','1')
,`nama_approval_dir_legal` varchar(100)
,`tgl_approval_dir_legal` datetime
,`status_dir_legal` varchar(100)
,`status2_dir_legal` varchar(100)
,`status_lokasi_dir_legal` varchar(100)
,`flag_waiting_dir_area` enum('0','1')
,`nama_approval_dir_area` varchar(100)
,`tgl_approval_dir_area` datetime
,`status_dir_area` varchar(100)
,`status2_dir_area` varchar(100)
,`status_lokasi_dir_area` varchar(100)
,`flag_waiting_kp` enum('0','1')
,`nama_approval_kp` varchar(100)
,`tgl_approval_kp` datetime
,`status_kp` varchar(100)
,`status2_kp` varchar(100)
,`status_lokasi_kp` varchar(100)
);
-- --------------------------------------------------------

--
-- Structure for view `keluar_query`
--
DROP TABLE IF EXISTS `keluar_query`;

CREATE ALGORITHM=UNDEFINED DEFINER=`mis`@`%` SQL SECURITY DEFINER VIEW `keluar_query` AS select `stockawal`.`id` AS `id`,`stockawal`.`KODE` AS `KODE`,`stockawal`.`kodebartxt` AS `kodebartxt`,`stockawal`.`nabar` AS `nabar`,sum(`keluarbrgitem`.`qty`) AS `SumOfqty`,`stockawal`.`txtperiode` AS `txtperiode`,`keluarbrgitem`.`batal` AS `batal` from (`stockawal` join `keluarbrgitem` on(((`stockawal`.`txtperiode` = `keluarbrgitem`.`txtperiode`) and (`stockawal`.`kodebartxt` = `keluarbrgitem`.`kodebartxt`)))) group by `stockawal`.`id`,`stockawal`.`KODE`,`stockawal`.`kodebartxt`,`stockawal`.`nabar`,`stockawal`.`txtperiode`,`keluarbrgitem`.`batal` having (`keluarbrgitem`.`batal` = 0);

-- --------------------------------------------------------

--
-- Structure for view `v_list_item_approval`
--
DROP TABLE IF EXISTS `v_list_item_approval`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_list_item_approval` AS select distinct `a`.`id` AS `id`,`b`.`no_id_item_ppo` AS `no_id_item_ppo`,`a`.`noppotxt` AS `noppotxt`,`a`.`tglppotxt` AS `tglppotxt`,`a`.`noreftxt` AS `noreftxt`,`a`.`kodebartxt` AS `kodebartxt`,`a`.`nabar` AS `nabar`,`a`.`sat` AS `sat`,`a`.`qty` AS `qty`,`a`.`STOK` AS `STOK`,`a`.`ket` AS `ket`,`a`.`status` AS `status`,`a`.`status2` AS `status2`,`a`.`po` AS `po`,`a`.`kodedept` AS `kodedept`,`a`.`namadept` AS `namadept`,`b`.`flag_waiting_ktu` AS `flag_waiting_ktu`,`b`.`nama_approval_ktu` AS `nama_approval_ktu`,`b`.`tgl_approval_ktu` AS `tgl_approval_ktu`,`b`.`status_ktu` AS `status_ktu`,`b`.`status2_ktu` AS `status2_ktu`,`b`.`status_lokasi_ktu` AS `status_lokasi_ktu`,`b`.`flag_waiting_kasie` AS `flag_waiting_kasie`,`b`.`nama_approval_kasie` AS `nama_approval_kasie`,`b`.`tgl_approval_kasie` AS `tgl_approval_kasie`,`b`.`status_kasie` AS `status_kasie`,`b`.`status2_kasie` AS `status2_kasie`,`b`.`status_lokasi_kasie` AS `status_lokasi_kasie`,`b`.`flag_waiting_gm` AS `flag_waiting_gm`,`b`.`nama_approval_gm` AS `nama_approval_gm`,`b`.`tgl_approval_gm` AS `tgl_approval_gm`,`b`.`status_gm` AS `status_gm`,`b`.`status2_gm` AS `status2_gm`,`b`.`status_lokasi_gm` AS `status_lokasi_gm`,`b`.`flag_waiting_mill_mgr` AS `flag_waiting_mill_mgr`,`b`.`nama_approval_mill_mgr` AS `nama_approval_mill_mgr`,`b`.`tgl_approval_mill_mgr` AS `tgl_approval_mill_mgr`,`b`.`status_mill_mgr` AS `status_mill_mgr`,`b`.`status2_mill_mgr` AS `status2_mill_mgr`,`b`.`status_lokasi_mill_mgr` AS `status_lokasi_mill_mgr`,`b`.`flag_waiting_dept_head` AS `flag_waiting_dept_head`,`b`.`nama_approval_dept_head` AS `nama_approval_dept_head`,`b`.`tgl_approval_dept_head` AS `tgl_approval_dept_head`,`b`.`status_dept_head` AS `status_dept_head`,`b`.`status2_dept_head` AS `status2_dept_head`,`b`.`status_lokasi_dept_head` AS `status_lokasi_dept_head`,`b`.`flag_waiting_dir_ops` AS `flag_waiting_dir_ops`,`b`.`nama_approval_dir_ops` AS `nama_approval_dir_ops`,`b`.`tgl_approval_dir_ops` AS `tgl_approval_dir_ops`,`b`.`status_dir_ops` AS `status_dir_ops`,`b`.`status2_dir_ops` AS `status2_dir_ops`,`b`.`status_lokasi_dir_ops` AS `status_lokasi_dir_ops`,`b`.`flag_waiting_dir_hrd` AS `flag_waiting_dir_hrd`,`b`.`nama_approval_dir_hrd` AS `nama_approval_dir_hrd`,`b`.`tgl_approval_dir_hrd` AS `tgl_approval_dir_hrd`,`b`.`status_dir_hrd` AS `status_dir_hrd`,`b`.`status2_dir_hrd` AS `status2_dir_hrd`,`b`.`status_lokasi_dir_hrd` AS `status_lokasi_dir_hrd`,`b`.`flag_waiting_dir_mis` AS `flag_waiting_dir_mis`,`b`.`nama_approval_dir_mis` AS `nama_approval_dir_mis`,`b`.`tgl_approval_dir_mis` AS `tgl_approval_dir_mis`,`b`.`status_dir_mis` AS `status_dir_mis`,`b`.`status2_dir_mis` AS `status2_dir_mis`,`b`.`status_lokasi_dir_mis` AS `status_lokasi_dir_mis`,`b`.`flag_waiting_dir_legal` AS `flag_waiting_dir_legal`,`b`.`nama_approval_dir_legal` AS `nama_approval_dir_legal`,`b`.`tgl_approval_dir_legal` AS `tgl_approval_dir_legal`,`b`.`status_dir_legal` AS `status_dir_legal`,`b`.`status2_dir_legal` AS `status2_dir_legal`,`b`.`status_lokasi_dir_legal` AS `status_lokasi_dir_legal`,`b`.`flag_waiting_dir_area` AS `flag_waiting_dir_area`,`b`.`nama_approval_dir_area` AS `nama_approval_dir_area`,`b`.`tgl_approval_dir_area` AS `tgl_approval_dir_area`,`b`.`status_dir_area` AS `status_dir_area`,`b`.`status2_dir_area` AS `status2_dir_area`,`b`.`status_lokasi_dir_area` AS `status_lokasi_dir_area`,`b`.`flag_waiting_kp` AS `flag_waiting_kp`,`b`.`nama_approval_kp` AS `nama_approval_kp`,`b`.`tgl_approval_kp` AS `tgl_approval_kp`,`b`.`status_kp` AS `status_kp`,`b`.`status2_kp` AS `status2_kp`,`b`.`status_lokasi_kp` AS `status_lokasi_kp` from (`item_ppo` `a` left join `item_ppo_approval` `b` on((`a`.`id` = `b`.`no_id_item_ppo`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
