-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2019 pada 11.12
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pernikahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pencarian`
--

CREATE TABLE `tb_pencarian` (
  `idpencarian` int(11) NOT NULL,
  `nikcari` varchar(40) DEFAULT NULL,
  `tglcari` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pencarian`
--

INSERT INTO `tb_pencarian` (`idpencarian`, `nikcari`, `tglcari`) VALUES
(28, '242424242442', '2019-10-24 09:23:39'),
(29, '34343434', '2019-10-24 09:27:54'),
(30, '34343434', '2019-10-24 09:30:39'),
(31, '5353535', '2019-10-24 09:31:30'),
(32, '557575', '2019-10-28 14:13:11'),
(33, '1871030701840002', '2019-10-31 04:16:07'),
(34, '1871032911970002', '2019-10-31 04:16:23'),
(35, '1802152802860002', '2019-10-31 04:16:39'),
(36, '1802152802860002', '2019-10-31 04:17:12'),
(37, '1810041408910006', '2019-10-31 04:17:59'),
(38, '1810041408910006', '2019-10-31 04:18:03'),
(39, '1871080203880005', '2019-10-31 04:19:24'),
(40, '1810041408910006', '2019-10-31 04:19:49'),
(41, '1806110203960006', '2019-10-31 04:20:00'),
(42, '1871080203880005', '2019-10-31 04:31:24'),
(43, '1871080203880005', '2019-10-31 05:10:14'),
(44, '1871036507920003', '2019-10-31 05:10:22'),
(45, '1810041408910006', '2019-10-31 05:44:54'),
(46, '1871030210970001', '2019-10-31 05:45:22'),
(47, '1871034501970003', '2019-10-31 06:09:21'),
(48, '1801130709530014', '2019-10-31 06:10:17'),
(49, '1871032704870003', '2019-10-31 07:05:08'),
(50, '1871031302930003', '2019-10-31 07:07:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pernikahan`
--

CREATE TABLE `tb_pernikahan` (
  `idnikah` int(11) NOT NULL,
  `niksuami` varchar(40) DEFAULT NULL,
  `nikistri` varchar(40) DEFAULT NULL,
  `tglnikah` date DEFAULT NULL,
  `penghulu` varchar(30) DEFAULT NULL,
  `statusnikah` varchar(40) DEFAULT NULL,
  `lokasinikah` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pernikahan`
--

INSERT INTO `tb_pernikahan` (`idnikah`, `niksuami`, `nikistri`, `tglnikah`, `penghulu`, `statusnikah`, `lokasinikah`) VALUES
(25, '1871080203880005', '1871036507920003', '2019-08-29', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SEGALA MIDER'),
(26, '1810041408910006', '1871034908930003', '2019-08-25', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SEGALA MIDER'),
(27, '1806110203960006', '1871034103980003', '2019-08-26', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SEGALA MIDER\r\n'),
(28, '1871032911970002', '1871154202970001', '2019-08-25', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SEGALA MIDER , tanjung karang barat'),
(29, '1871062410920002', '1871064708970004', '2019-08-25', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SEGALA MIDER , tanjung karang banda'),
(30, '1871030210970001', '1871014610960001', '2019-08-25', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SEGALA MIDER'),
(31, '1871011412930004', '1871066004960006', '2019-08-25', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KELAPA TIGA PERMAI , tanjung karang band'),
(32, '1802152802860002', '1871036308910002', '2019-08-25', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. GEDONG AIR , tanjun karang barat ba'),
(33, '1871050201870002', '1871036308910002', '2019-08-25', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SEGALA MIDER'),
(34, '1871030701840002', '1871036006950007', '2019-08-23', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SEGALA MIDER'),
(35, '1871030607950004', '1871065708950007', '2019-08-25', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. GEDONG AIR , tanjung karang barat b'),
(36, '1306150907930002', '1871036701930003', '2019-08-25', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SUKADANA HAM , bandar lampung\r\n'),
(37, '1801130709530014', '1871034501970003', '2019-08-18', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SUKADANA HAM'),
(38, '1809012505930003', '1871034708930001', '2019-08-18', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SUSUNAN BARU , Tanjung Karang Barat'),
(39, '1871112002930003', '1871036407930006', '2019-08-18', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SUSUNAN BARU , tanjung karang barat'),
(40, '1871111911890006', '1871034812950007', '2019-08-18', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SUKADANA HAM , Tanjung Karang Barat'),
(41, '1871092305850004', '1805085006790005', '2019-08-18', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SEGALA MIDER'),
(42, '1871012408950003', '1871035210970004', '2019-08-25', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SUSUNAN BARU'),
(43, '1871081904960006', '1871034411970003', '2019-08-25', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. KOTAKARANG RAYA\r\n'),
(44, '1871032704870003', '1871065304980003', '2019-08-25', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. GEDONG AIR , TANJUNG KARANG BARAT B'),
(45, '1871031302930003', '1871034910930001', '2019-08-18', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SEGALA MIDER'),
(46, '1871090502910002', '1871036110910005', '2019-08-24', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. GEDONG AIR, TANJUNG KARANG BARAT BA'),
(47, '1871034612960032', '1871036411940005', '2019-08-24', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SUKADANA HAM'),
(48, '1871032107780008', '1871035301870002', '2019-08-22', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SUKAJAWA\r\n'),
(49, '1810020806940001', '1871035609930002', '2019-08-21', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SUKAJAWA , TKB , BANDAR LAMPUNG'),
(50, '1809012403950002', '1871035702960004', '2019-08-17', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL.SUKAJAWA'),
(51, '1871031002930003', '1801066302930004', '2019-08-18', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SEGALA MIDER'),
(52, '1809051509950007', '1871034510960004', '2019-08-18', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SUKAJAWA BARU'),
(53, '1871010201940006', '1871037112970004', '2019-08-18', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KEL. SUKADANA HAM , Tanjung Karang Barat'),
(54, '1805305010950002', '1871064802980004', '2019-08-18', 'H. HAFIZULLAH, S.Ag, M.E.Sy.', '2', 'KELAPA TIGA PERMAI , Bandar Lampung\r\n\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_statusnikah`
--

CREATE TABLE `tb_statusnikah` (
  `idstatus` int(11) NOT NULL,
  `namastatus` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_statusnikah`
--

INSERT INTO `tb_statusnikah` (`idstatus`, `namastatus`) VALUES
(1, 'Belum Menikah'),
(2, 'Menikah'),
(3, 'Janda'),
(4, 'Duda'),
(5, 'Cerai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tanggapan`
--

CREATE TABLE `tb_tanggapan` (
  `idtanggapan` int(11) NOT NULL,
  `nik` varchar(40) DEFAULT NULL,
  `namalengkap` varchar(40) DEFAULT NULL,
  `isitanggapan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `iduser` int(11) NOT NULL,
  `namauser` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `namalengkap` varchar(40) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`iduser`, `namauser`, `password`, `namalengkap`, `lastlogin`) VALUES
(1, 'admin', 'admin', 'Administrator', '2019-10-17 22:37:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_warga`
--

CREATE TABLE `tb_warga` (
  `nik` varchar(40) NOT NULL,
  `namalengkap` varchar(40) DEFAULT NULL,
  `alamat` text,
  `jk` varchar(20) DEFAULT NULL,
  `statusnikah` varchar(30) DEFAULT NULL,
  `statuslain` varchar(40) DEFAULT NULL,
  `foto` text,
  `tanggallahir` date DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_warga`
--

INSERT INTO `tb_warga` (`nik`, `namalengkap`, `alamat`, `jk`, `statusnikah`, `statuslain`, `foto`, `tanggallahir`, `pekerjaan`, `pendidikan`) VALUES
('1306150907930002', 'DEFRYANDIKA KUSNANDAR', 'KEL. SUKADANA HAM\r\n', 'Laki-Laki', '1', NULL, 'man-46.png', '1993-07-09', 'WIRASWASTA', '-'),
('1801066302930004', 'FITRINA', 'KEL. SEGALA MIDER\r\n', 'Perempuan', '1', NULL, 'girl21.png', '1993-02-23', 'SWASTA', '-'),
('1801130709530014', 'SEPRI YADI KURNIAWAN', 'KEL. SUKADANA HAM\r\n', 'Laki-Laki', '1', NULL, 'man7.png', '1993-09-07', 'WIRASWASTA', '-'),
('1802152802860002', 'WASIS', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'man5.png', '1985-09-27', 'WIRASWASTA', '-'),
('1805085006790005', 'YENI ZATDALINA', 'KEL. SEGALA MIDER', 'Perempuan', '1', NULL, 'girl15.png', '1979-06-10', 'PNS', '-'),
('1805305010950002', 'FIRSTA MUNAFRI', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'boy-110.png', '1995-10-16', 'WIRASWASTA', '-'),
('1806110203960006', 'ARI PIRMANSYAH', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'boy-14.png', '1996-03-02', 'BELUM BEKERJA', '-'),
('1809012403950002', 'REVANDRA NOMA PUTRA', 'KEL.SUKAJAWA', 'Laki-Laki', '1', NULL, 'man-26.png', '1995-03-24', 'WIRASWASTA', '-'),
('1809012505930003', 'YOGI PRAKOSO', 'KEL. SUKADANA HAM\r\n', 'Laki-Laki', '4', NULL, 'man-15.png', '1993-05-25', 'PERAWAT', '-'),
('1809051509950007', 'IPUNG PAHROBI PUTRA', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'man11.png', '1995-09-15', 'KARYAWAN SWASTA', '-'),
('1810020806940001', 'ANTON SUJARWO', 'KEL. SUKA JAWA', 'Laki-Laki', '1', NULL, 'boy-18.png', '1994-06-08', 'SWASTA', '-'),
('1810041408910006', 'IFAN AFANDI', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'boy-13.png', '1991-08-14', 'PERAWAT', '-'),
('1871010201940006', 'MUFA\'ILIN', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'man-19.png', '1994-01-02', 'KARYAWAN SWASTA', '-'),
('1871011412930004', 'ANDRE JODIKA RUDI', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'man-14.png', '1993-12-14', 'KARYAWAN SWASTA', '-'),
('1871012408950003', 'SUNANDAR ARIF PRAMONO', 'KEL. SUKADANA HAM\r\n', 'Laki-Laki', '1', NULL, 'man9.png', '1993-07-09', 'KARYAWAN SWASTA', '-'),
('1871014610960001', 'NUR CAYANI PUTRI', 'KEL. SEGALA MIDER\r\n', 'Perempuan', '1', NULL, 'girl10.png', '1996-10-06', 'WIRASWASTA', '-'),
('1871030210970001', 'BAGUS PRABOWO', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'man-23.png', '1997-02-10', 'WIRASWASTA', '-'),
('1871030607950004', 'ROMDHAN', 'KEL. SUKADANA HAM\r\n', 'Laki-Laki', '1', NULL, 'man-24.png', '1996-12-02', 'BURUH', '-'),
('1871030701840002', 'H. AHMAD DLUHA KASIM, SH.,MH.', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'man6.png', '1984-01-07', 'PNS', '-'),
('1871031002930003', 'FEBRIAN IHSAN SUNTALA', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'boy-19.png', '1993-02-10', 'WIRASWASTA', '-'),
('1871031302930003', 'JOKO RUDIANTO', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'boy-16.png', '1993-02-13', 'WIRASWASTA-', '-'),
('1871032107780008', 'SYAIFUDDIN', 'KEL. SUKAJAWA\r\n', 'Laki-Laki', '1', NULL, 'man-47.png', '1978-07-21', 'BURUH', '-'),
('1871032704870003', 'ARIS SAPUTRA', 'KEL. GEDONG AIR\r\n', 'Laki-Laki', '1', NULL, 'man10.png', '1997-04-27', 'KARYAWAN SWASTA', '-'),
('1871032911970002', 'NICO ADITYA SAPUTRA', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'boy2.png', '1997-10-29', 'WIRASWASTA', '-'),
('1871034103980003', 'SITI RATNA SARI', 'KEL. SEGALA MIDER\r\n', 'Perempuan', '1', NULL, 'girl-14.png', '1998-03-01', 'PELAJAR/MAHASISWA', '-'),
('1871034411970003', 'NOVA JAYANTI', 'KEL. SUKADANA HAM\r\n', 'Perempuan', '1', NULL, 'girl-112.png', '1997-11-04', 'BELUM BEKERJA', '-'),
('1871034501970003', 'SULISTIA NINGRUM', 'KEL. SEGALA MIDER\r\n', 'Perempuan', '1', NULL, 'girl-18.png', '1997-01-05', 'KARYAWAN SWASTA', '-'),
('1871034510960004', 'SOPI SOPIYAH', 'KEL. SUKAJAWA BARU\r\n', 'Perempuan', '1', NULL, 'girl22.png', '1996-10-05', 'KARYAWAN SWASTA', '-'),
('1871034612960032', 'DESTA PRATAMA', 'KEL. SUKADANA HAM\r\n', 'Laki-Laki', '1', NULL, 'boy-17.png', '1996-12-06', 'BURUH HARIAN LEPAS', '-'),
('1871034708930001', 'RITA MULYANI', 'KEL. SUSUNAN BARU\r\n', 'Perempuan', '1', NULL, 'girl-19.png', '1995-08-07', 'PERAWAT', '-'),
('1871034812950007', 'WULAN DESTI PANGESTU', 'KEL. SUSUNAN BARU\r\n', 'Perempuan', '1', NULL, 'girl14.png', '1995-12-08', 'BELUM BEKERJA', '-'),
('1871034908930003', 'DEWI KURNIAWATI HAJIJAH', 'KEL. SEGALA MIDER\r\n', 'Perempuan', '1', NULL, 'girl-13.png', '1993-08-08', 'PERAWAT', '-'),
('1871034910930001', 'AYU OKTAVIANI', 'KEL. SEGALA MIDER\r\n', 'Perempuan', '1', NULL, 'girl17.png', '1993-10-09', 'KARYAWAN SWASTA', '-'),
('1871035210970004', 'WILLYANT DEVI', 'KEL. SUSUNAN BARU\r\n', 'Perempuan', '1', NULL, 'girl-111.png', '1997-10-12', 'KARYAWATI', '-'),
('1871035301870002', 'SITI CHOERIYAH', 'KEL.SUKA JAWA', 'Perempuan', '1', NULL, 'girl19.png', '1987-01-12', 'BURUH', '-'),
('1871035609930002', 'DWI RYAN ANJANI', 'KEL. SUKAJAWA\r\n', 'Perempuan', '1', NULL, 'girl20.png', '1993-09-16', 'KARYAWAN SWASTA', '-'),
('1871035702960004', 'WULAN PUTRI ANGGRAINI', 'KEL. SEGALA MIDER\r\n', 'Perempuan', '1', NULL, 'girl-114.png', '1996-02-17', 'WIRASWASTA', '-'),
('1871036006950007', 'dr. BELLA YANITA', 'KEL. SEGALA MIDER\r\n', 'Perempuan', '1', NULL, 'girl12.png', '1995-06-20', 'DOKTER', '-'),
('1871036110910005', 'DARA INDA SORAYA, S.E.Ak., M.Ak.', 'KEL. SEGALA MIDER\r\n', 'Perempuan', '1', NULL, 'girl18.png', '1991-10-21', 'DOSEN', '-'),
('1871036308910002', 'MUSTANIA KUSUMA WARDANI', 'KEL. GEDONG AIR\r\n', 'Perempuan', '1', NULL, 'girl-16.png', '1991-08-23', 'PEGAWAI HONORER', '-'),
('1871036407930006', 'SRI WIJAT NIKA', 'KEL. SUSUNAN BARU\r\n', 'Perempuan', '3', NULL, 'girl-110.png', '1993-06-24', 'KARYAWAN SWASTA', '-'),
('1871036411940005', 'SRI PURNAMA SARI', 'KEL. SUKADANA HAM\r\n', 'Perempuan', '1', NULL, 'girl-113.png', '1994-11-24', 'PELAJAR/MAHASISWA', '-'),
('1871036507920003', 'YULI RAHMAWATI', 'KEL. SUKADANA HAM\r\n', 'Perempuan', '1', NULL, 'girl8.png', '1992-07-25', 'KARYAWAN SWASTA', '-'),
('1871036701930003', 'NARMI YANTI', 'KEL. SUKADANA HAM\r\n', 'Perempuan', '1', NULL, 'girl-17.png', '1993-01-27', 'BELUM BEKERJA', '-'),
('1871037112970004', 'DEWI YULIA SARI', 'KEL. SUKADANA HAM\r\n', 'Perempuan', '1', NULL, 'girl-115.png', '1997-12-31', 'PELAJAR/MAHASISWA', '-'),
('1871050201870002', 'ARIS SETYAWAN', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'boy-15.png', '1987-01-02', 'PNS', '-'),
('1871062410920002', 'TENGKU OKI FERNANDO', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'man-13.png', '1994-10-24', 'WIRASWASTA', '-'),
('1871064708970004', 'NANA MU\'AWANAH', 'KELAPA TIGA PERMAI\r\n', 'Perempuan', '1', NULL, 'girl9.png', '1997-08-07', 'BELUM BEKERJA', '-'),
('1871064802980004', 'NUR INDAH SAFITRI', 'KELAPA TIGA PERMAI\r\n', 'Perempuan', '1', NULL, 'girl23.png', '1998-03-08', 'WIRASWASTA', '-'),
('1871065304980003', 'APRILIA LESTARI', 'KEL. GEDONG AIR\r\n', 'Perempuan', '1', NULL, 'girl16.png', '1998-04-14', 'SWASTA', '-'),
('1871065708950007', 'AGUSTINA', 'KEL. GEDONG AIR\r\n', 'Perempuan', '1', NULL, 'girl13.png', '1995-08-17', '-', 'WIRASWASTA'),
('1871066004960006', 'SARAH APRIANI', 'KELAPA TIGA PERMAI\r\n', 'Perempuan', '1', NULL, 'girl-15.png', '1996-04-20', 'WIRASWASTA', '-'),
('1871080203880005', 'SERDIAWAN', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'man4.png', '1988-03-02', 'KARYAWAN SWASTA', '-'),
('1871081904960006', 'ADE SOPYAN EMAN SUBARYA', 'KEL. KOTAKARANG RAYA\r\n', 'Laki-Laki', '4', NULL, 'man-17.png', '1996-04-18', 'BURUH HARIAN LEPAS', '-'),
('1871090502910002', 'FEBRIANSYAH, S.E.', 'KEL. GEDONG AIR\r\n', 'Laki-Laki', '1', NULL, 'man-18.png', '1991-02-05', 'PEGAWAI BUMN', '-'),
('1871092305850004', 'DEDI SOFIANSYAH', 'KEL. SEGALA MIDER\r\n', 'Laki-Laki', '1', NULL, 'man-16.png', '1984-07-14', 'PNS', '-'),
('1871106807910002', 'SISKA YULIANA', 'KEL. GEDONG AIR\r\n', 'Perempuan', '1', NULL, 'girl11.png', '1991-07-28', 'KARYAWAN BANK MANDIRI', '-'),
('1871111911890006', 'AGUS PRASTIO', 'KEL. SUKADANA HAM\r\n', 'Laki-Laki', '1', NULL, 'man-25.png', '1989-12-19', 'WIRASWASTA', '-'),
('1871112002930003', 'RAHMAT KURNIAWAN', 'KEL. SUKADANA HAM\r\n', 'Laki-Laki', '4', NULL, 'man8.png', '1993-02-20', 'KARYAWAN SWASTA', '-'),
('1871154202970001', 'DHEANTY NANDA IFRIADY', 'KEL. SEGALA MIDER\r\n', 'Perempuan', '1', NULL, 'man-45.png', '1997-02-02', 'PERAWAT', '-');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pencarian`
--
ALTER TABLE `tb_pencarian`
  ADD PRIMARY KEY (`idpencarian`);

--
-- Indeks untuk tabel `tb_pernikahan`
--
ALTER TABLE `tb_pernikahan`
  ADD PRIMARY KEY (`idnikah`);

--
-- Indeks untuk tabel `tb_statusnikah`
--
ALTER TABLE `tb_statusnikah`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indeks untuk tabel `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  ADD PRIMARY KEY (`idtanggapan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `tb_warga`
--
ALTER TABLE `tb_warga`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pencarian`
--
ALTER TABLE `tb_pencarian`
  MODIFY `idpencarian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `tb_pernikahan`
--
ALTER TABLE `tb_pernikahan`
  MODIFY `idnikah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `tb_statusnikah`
--
ALTER TABLE `tb_statusnikah`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  MODIFY `idtanggapan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
