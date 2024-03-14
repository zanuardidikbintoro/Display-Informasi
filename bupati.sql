-- phpMyAdmin SQL Dump
-- version 2.11.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2017 at 11:47 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `bupati`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(5) NOT NULL auto_increment,
  `hari` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `hari`, `judul`, `keterangan`, `lokasi`, `waktu`) VALUES
(1, 'Kamis, 16 Juni 2017', 'Tarawih Keliling Bersama sama', 'Tarawih keliling bersama Wakil Bupati dalam rangka Ramadhan 1437 H', 'Masjid As-Syakur Kecamatan Purworejo', '19.00 - 23.00 WIB'),
(2, 'Jumat, 20 Juni 2017', 'Sahur bersama', 'Sahur bersama dalam rangka', 'Panti Asuhan Mulyo, Desa Jenar', '02.00 - 04.00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `anggaran`
--

CREATE TABLE `anggaran` (
  `id` int(20) NOT NULL auto_increment,
  `kegiatan` text NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `pelaksanaan` varchar(255) NOT NULL,
  `output` varchar(255) NOT NULL,
  `realisasi` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `anggaran`
--

INSERT INTO `anggaran` (`id`, `kegiatan`, `jumlah`, `pelaksanaan`, `output`, `realisasi`) VALUES
(1, 'Pelatihan berbasis kompetensi', 'Rp. 40.000.000,-', 'Januari 2018', 'Terlaksananya PBK', '25%'),
(2, 'Sanitasi rumah Tangga', 'Rp.60.000.000,-', 'Januari 2018', 'Mantap', '35%'),
(3, 'Fasilitasi air bersih', 'Rp.67.000.000', 'Oktober 2018', 'Bersih-bersih', '45%');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idberita` int(11) NOT NULL default '0',
  `judul` varchar(255) collate latin1_general_ci NOT NULL default '',
  `isi` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`idberita`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `berita`
--


-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL auto_increment,
  `judul` varchar(255) collate latin1_general_ci NOT NULL default '',
  `gambar` varchar(255) collate latin1_general_ci NOT NULL default '',
  `size` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `judul`, `gambar`, `size`) VALUES
(18, 'Kartukuning', 'ak1.jpg', 41762),
(32, '', 'COP SCHOOL batch 4.jpg', 703343);

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id` int(11) NOT NULL auto_increment,
  `kategori` varchar(255) collate latin1_general_ci NOT NULL default '',
  `perusahaan` varchar(255) collate latin1_general_ci NOT NULL default '',
  `pekerjaan` varchar(255) collate latin1_general_ci NOT NULL default '',
  `syarat` text collate latin1_general_ci NOT NULL,
  `kontak` varchar(255) collate latin1_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id`, `kategori`, `perusahaan`, `pekerjaan`, `syarat`, `kontak`) VALUES
(21, '', 'Pemerintah kota Morowali menerbitkan Perda terbaru tahun 2017 tentang SOTK Dinkes', '', '', ''),
(20, '', 'Selamat Menunaikan Ibadah Puasa bagi yang menjalankan', '', '', ''),
(23, '', 'Rakor Pemkab dalam Rangka Kegiatan Posyandu', 'Senin, 20 Oktober 2017 di Ruang Setda', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL auto_increment,
  `pengumuman` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `pengumuman`) VALUES
(1, 'Bupati dan Wakil Bupati Purworejo mengucapkan Selamat Menunaikan Ibadah Puasa Ramadhan 2016 M, semoga amal ibadah kita diterima Allah SWT');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL auto_increment,
  `judul` varchar(255) collate latin1_general_ci NOT NULL default '',
  `video` varchar(255) collate latin1_general_ci NOT NULL default '',
  `durasi` bigint(255) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `judul`, `video`, `durasi`) VALUES
(14, 'undian', 'undian-31.flv', 31),
(15, 'peterpan', 'peterpan-268.flv', 268),
(13, 'ksa', 'ksa31.flv', 31),
(12, 'dep', 'dep.flv', 31),
(11, 'psmensos', 'psmensos.flv', 36),
(16, 'siagabencana', 'siagabencana-31.flv', 31),
(17, 'k3', 'k3-319.flv', 319),
(18, 'trans', 'trans.flv', 120);

-- --------------------------------------------------------

--
-- Table structure for table `warnabg`
--

CREATE TABLE `warnabg` (
  `id` int(11) NOT NULL,
  `warna` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warnabg`
--

INSERT INTO `warnabg` (`id`, `warna`) VALUES
(1, '942F7C'),
(2, '10247.jpg');
