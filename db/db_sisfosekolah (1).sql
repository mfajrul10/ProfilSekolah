-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2021 at 12:50 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sisfosekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

DROP TABLE IF EXISTS `tb_alumni`;
CREATE TABLE IF NOT EXISTS `tb_alumni` (
  `id_alumni` int(11) NOT NULL AUTO_INCREMENT,
  `nama_alumni` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tahun_masuk` varchar(50) NOT NULL,
  `tahun_lulus` varchar(50) NOT NULL,
  PRIMARY KEY (`id_alumni`)
) ENGINE=InnoDB AUTO_INCREMENT=260 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`id_alumni`, `nama_alumni`, `jk`, `nis`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `tahun_masuk`, `tahun_lulus`) VALUES
(14, 'AFRIDES RAMADHAN', 'lk', '14072', '9982492961', 'PULAI', '1998-12-17', '2014', '2017'),
(15, 'AGUS SETIAWAN', 'lk', '14105', '9952592477', 'BOJONEGORO', '1995-08-16', '2014', '2017'),
(16, 'AHMAD RIVAL', 'lk', '14001', '9975780326', 'TARATAK', '1997-11-23', '2014', '2017'),
(17, 'ALYU ZIAROVA', 'lk', '14002', '9992498502', 'TIMPEH', '1999-06-26', '2014', '2017'),
(18, 'ANANG SAFADRI', 'lk', '14025', '9982492368', 'MARGA MAKMUR', '1998-06-15', '2014', '2017'),
(19, 'ANDESTA PARSAULIAN', 'lk', '14026', '9968104797', 'TIMPEH', '1996-02-11', '2014', '2017'),
(20, 'ANDRE RAMA KURNIA', 'lk', '14075', '9973822332', 'BERINGIN SAKTI', '1997-01-20', '2014', '2017'),
(21, 'ANDRI MULLIADY', 'lk', '14028', '9987927548', 'TABEK PENYEBRANGAN', '1998-08-17', '2014', '2017'),
(22, 'ANGGID LUHUR PAMBUDI', 'lk', '14052', '9985924564', 'TANJUNG HARAPAN', '1998-09-21', '2014', '2017'),
(23, 'ANNISA', 'pr', '14053', '9995505578', 'PEMATANG DAMAR', '1999-12-29', '2014', '2017'),
(24, 'ARI SAPUTRA', 'lk', '14077', '9992498503', 'TIMPEH', '1999-03-27', '2014', '2017'),
(25, 'ARI TUMIATI', 'pr', '14054', '9972534395', 'MARGA MAKMUR', '1997-01-25', '2014', '2017'),
(26, 'ARIF SYAHPUTRA', 'lk', '14055', '9961646639', 'TIMPEH ABADI', '1996-10-13', '2014', '2017'),
(27, 'AYU FITRIANI', 'pr', '14030', '9992579616', 'SAWAHLUNTO/SIJUNJUNG', '1999-02-27', '2014', '2017'),
(28, 'AYUB ANGGORO', 'lk', '14078', '9982492372', 'MARGA MAKMUR', '1998-03-11', '2014', '2017'),
(29, 'BINTANG AGUS RIANTO', 'lk', '14079', '9992579618', 'PRABUMULIH', '1999-08-10', '2014', '2017'),
(30, 'DIKA ROZA LINDA', 'pr', '14003', '9992711755', 'KAMPUNG SURAU', '1999-04-09', '2014', '2017'),
(31, 'DIKI ALEX SANDER', 'lk', '14004', '9983309637', 'TABEK PENYEBRANGAN', '1998-09-05', '2014', '2017'),
(32, 'DWI SULATNO', 'lk', '14031', '9972614147', 'PINANG MAKMUR', '1997-05-20', '2014', '2017'),
(33, 'ELGI JULI SAPUTRA', 'lk', '14082', '9982492967', 'PULAI', '1998-07-13', '2014', '2017'),
(34, 'FANI FEBRIYALDO', 'lk', '14083', '9993017858', 'SAWAHLUNTO/SIJUNJUNG', '1999-02-21', '2014', '2017'),
(35, 'FAUZI LIZALDI', 'lk', '14084', '9942513290', 'TARATAK', '1999-08-17', '2014', '2017'),
(36, 'FEBRI TRIFANDA', 'lk', '14033', '0009080548', 'PANTAI', '2000-02-03', '2014', '2017'),
(37, 'FLORENSI RAFFLESIANDA NOVRITA', 'pr', '14034', '9975137147', 'MUARO TIMPEH', '1998-12-12', '2014', '2017'),
(38, 'GIAL HERMANTO', 'lk', '14035', '9972533687', 'TIMPEH', '1997-06-10', '2014', '2017'),
(39, 'GUSTI RANDA', 'lk', '14005', '9982570914', 'SAWAHLUNTO/SIJUNJUNG', '1998-02-15', '2014', '2017'),
(40, 'HARRY ANGGARA SAPUTRA', 'lk', '14086', '9962618630', 'SAWAHLUNTO/SIJUNJUNG', '1997-08-15', '2014', '2017'),
(41, 'HARRY KEBASTIAN', 'lk', '14087', '9972309156', 'BATU SANGKAR', '1997-10-01', '2014', '2017'),
(42, 'HARRYAN DHIKA LENARDO', 'lk', '14036', '9993017861', 'SAWAHLUNTO/SIJUNJUNG', '1999-05-03', '2014', '2017'),
(43, 'HENDRI FAUZI', 'lk', '14037', '9972534285', 'SAWAHLUNTO/SIJUNJUNG', '1997-05-30', '2014', '2017'),
(44, 'HENDRI GUNAWAN', 'lk', '14006', '9983481095', 'SAWAHLUNTO/SIJUNJUNG', '1998-07-09', '2014', '2017'),
(45, 'IKHSAN RAHMADI', 'lk', '14038', '9987569375', 'SAWAHLUNTO/SIJUNJUNG', '1998-10-12', '2014', '2017'),
(46, 'ILHAM SUWANDI', 'lk', '14059', '9992510017', 'PINANG MAKMUR', '1999-05-31', '2014', '2017'),
(47, 'IMAM RIZKI', 'lk', '14060', '9952592420', 'BERINGIN SAKTI', '1997-07-27', '2014', '2017'),
(48, 'JANURIYONO', 'lk', '14088', '9967192173', 'MARGA MAKMUR', '1996-01-17', '2014', '2017'),
(49, 'JEKI HANDRA', 'lk', '14007', '9972534406', 'MARGA MAKMUR', '1997-06-01', '2014', '2017'),
(50, 'KEVIN SUSANTO', 'lk', '14061', '9993199842', 'KUMBAYAU', '1999-06-02', '2014', '2017'),
(51, 'KHOLIFATUL MARLIKAH', 'lk', '14008', '9992499218', 'MARGA MAKMUR', '1999-05-19', '2014', '2017'),
(52, 'KRISMON DWI PAMUNGKAS', 'lk', '14039', '9992499220', 'MARGA MAKMUR', '1999-03-03', '2014', '2017'),
(53, 'LEGIN RAM AUDHIEFFA', 'lk', '14089', '9982570915', 'KOTO CENGAR', '1998-12-28', '2014', '2017'),
(54, 'M. FERI SETIAWAN', 'lk', '14009', '9982570918', 'SAWAHLUNTO/SIJUNJUNG', '1998-05-05', '2014', '2017'),
(55, 'MAULANA SUBHI', 'lk', '14010', '9977534582', 'PISANG REBUS', '1997-07-16', '2014', '2017'),
(56, 'MEUTHIA RAHMA CYNTHIA SEPTIANI', 'pr', '14011', '9982493093', 'SAWAHLUNTO/SIJUNJUNG', '1998-09-30', '2014', '2017'),
(57, 'MIMI SUSANTI', 'lk', '14062', '9953160863', 'MARGA MAKMUR', '1996-05-02', '2014', '2017'),
(58, 'MUHAMMAD DARAJAT', 'lk', '14012', '9972534410', 'MARGA MAKMUR', '1997-01-17', '2014', '2017'),
(59, 'MUHAMMAD HUSEN', 'lk', '14013', '9989848295', 'TRIMULYA', '1998-12-28', '2014', '2017'),
(60, 'MUHAMMAD JOHAN', 'lk', '14063', '9992579639', 'SWL / SJJ', '1999-05-03', '2014', '2017'),
(61, 'MUSLIM', 'lk', '14064', '9953098898', 'BERINGIN SAKTI', '1995-02-28', '2014', '2017'),
(62, 'NAFISYAH', 'pr', '14014', '9986584221', 'PEMATANG DAMAR', '1998-10-14', '2014', '2017'),
(63, 'NINING SITI RAHAYU WINASIS', 'pr', '14040', '9992579643', 'PINANG MAKMUR', '1999-02-28', '2014', '2017'),
(64, 'NOAN NOVRIJAL', 'lk', '14090', '9963151423', 'PULAU MAINAN', '1996-11-01', '2014', '2017'),
(65, 'NOSA PURNAMA SARI', 'lk', '14015', '9968001194', 'MARGA MAKMUR', '1996-03-12', '2014', '2017'),
(66, 'NOVIA HARIANI', 'pr', '14065', '9971414721', 'TIMPEH', '1997-10-23', '2014', '2017'),
(67, 'NOVRI YANTI', 'pr', '14041', '9992498514', 'TIMPEH', '1999-07-27', '2014', '2017'),
(68, 'PANJI NUGROHO', 'lk', '14091', '9982492384', 'MARGA MAKMUR', '1998-08-22', '2014', '2017'),
(69, 'PRAYOGA SAMIRA', 'lk', '14016', '9972735623', 'SILULUK', '1997-12-19', '2014', '2017'),
(70, 'PUJI DIAH ASTUTI', 'pr', '14042', '9988638634', 'PINANG MAKMUR', '1998-07-09', '2014', '2017'),
(71, 'RAFLI YENDI', 'lk', '14092', '9992499228', 'SAWAHLUNTO/SIJUNJUNG', '1999-01-13', '2014', '2017'),
(72, 'RAHMAT RIFAI', 'lk', '14017', '9982066338', 'KOTO AGUNG', '1998-03-11', '2014', '2017'),
(73, 'REDYAN HARISMON', 'lk', '14043', '9982690283', 'SITIUNG', '1998-03-01', '2014', '2017'),
(74, 'RIKA JULIA', 'lk', '14045', '9962618732', 'MARGA MAKMUR', '1998-07-19', '2014', '2017'),
(75, 'RIKI APRIYANDRA PUTRA', 'lk', '14095', '9992498739', 'SUNGAI RUMBAI', '1999-04-23', '2014', '2017'),
(76, 'RIMA SHOLIKHA', 'pr', '14018', '9982570927', 'PINANG MAKMUR', '1998-08-31', '2014', '2017'),
(77, 'SEFTIANDY ADE SAPUTRA', 'lk', '14099', '9962618650', 'BERINGIN SAKTI', '1996-09-12', '2014', '2017'),
(78, 'SEPTIONO', 'lk', '14047', '9982492390', 'MARGA MAKMUR', '1998-09-01', '2014', '2017'),
(79, 'SESMAWATI', 'pr', '14066', '9972533699', 'TIMPEH', '1997-02-23', '2014', '2017'),
(80, 'SISKA YUSMA YENTI', 'pr', '14021', '9972534423', 'TALANG', '1997-01-01', '2014', '2017'),
(81, 'SITI NUR ROHAYATI', 'pr', '14106', '9972534424', 'MARGA MAKMUR', '1997-06-11', '2014', '2017'),
(82, 'TAUFIT HIDAYAT', 'lk', '14069', '9975884670', 'PEKANBARU', '1997-11-11', '2014', '2017'),
(83, 'TRISNA KAMELIA', 'pr', '14022', '9982492391', 'SOLOK', '1998-11-20', '2014', '2017'),
(84, 'TURANGGA PRATAMA', 'lk', '14100', '9972535080', 'PINANG MAKMUR', '1997-06-25', '2014', '2017'),
(85, 'WAHYU SAPUTRA', 'lk', '14023', '9982570932', 'PINANG MAKMUR', '1998-10-10', '2014', '2017'),
(86, 'YULIANA UTAMI', 'pr', '14024', '9982690456', 'SAWAHLUNTO/SIJUNJUNG', '1999-07-01', '2014', '2017'),
(87, 'ZALDI ELKO ISMA SAPUTRA', 'lk', '14048', '9982492398', 'MARGA MAKMUR', '1998-03-14', '2014', '2017'),
(125, 'ADE FRANSISCA DURI', 'lk', '15107', '9992499210', 'SAWAHLUNTO SIJUNJUNG', '1999-06-16', '2015', '2018'),
(126, 'AFRINAL BERRY PRATAMA', 'lk', '15108', '9992499211', 'MARGA MAKMUR', '1999-03-31', '2015', '2018'),
(127, 'ALVIGA NOPIANDRI', 'lk', '15109', '9972534391', 'MARGA MAKMUR', '1997-07-07', '2015', '2018'),
(128, 'ANANG RIZKY ERICO', 'lk', '15139', '0006184131', 'LIPAT KAIN', '2000-05-05', '2015', '2018'),
(129, 'ANDI KURNIA', 'lk', '15110', '9982570906', 'PINANG MAKMUR', '1998-08-05', '2015', '2018'),
(130, 'ANDRES SULDIANTO', 'lk', '15140', '9982492370', 'MARGA MAKMUR', '1998-03-09', '2015', '2018'),
(131, 'ARI YUDISTIRA', 'lk', '15111', '9992499213', 'BUKIT TINGGI', '1999-10-11', '2015', '2018'),
(132, 'ARIF RAHMAD', 'lk', '15141', '9982992121', 'SAWAHLUNTO SIJUNJUNG', '1997-10-31', '2015', '2018'),
(133, 'ASEP SAPUTRA', 'lk', '15113', '9992510003', 'PINANG MAKMUR', '1999-05-15', '2015', '2018'),
(134, 'BENY ADRYANTO', 'lk', '14142', '0005062776', 'SUNGAI JERNIH', '2000-07-08', '2015', '2018'),
(135, 'DESMITA ALFIRA', 'lk', '15114', '9992579620', 'PINANG MAKMUR', '1999-12-31', '2015', '2018'),
(136, 'DIAN WIDIATI', 'lk', '15116', '9992579622', 'SIJUNJUNG', '1999-11-27', '2015', '2018'),
(137, 'DIKA FEBRA ANDILA', 'lk', '15117', '9992736914', 'SALIMPAT', '1999-09-24', '2015', '2018'),
(138, 'IDEAL PARAMATO INTAN', 'lk', '15119', '9992499216', 'MARGA MAKMUR', '1999-09-15', '2015', '2018'),
(139, 'ISKA JUNAIDI', 'lk', '15143', '9992498525', 'LUBUK LABU', '2001-04-16', '2015', '2018'),
(140, 'JULNAIDI', 'lk', '15120', '9982492399', 'MARGA JAYA', '1998-07-20', '2015', '2018'),
(141, 'LENNY SYOPHIANA', 'lk', '15121', '0001737825', 'PINANG MAKMUR', '2000-03-31', '2015', '2018'),
(142, 'MARIYOS SEFLI', 'lk', '15144', '9999993315', 'PINANG MAKMUR', '1999-03-14', '2015', '2018'),
(143, 'MELANNI APLIANA', 'lk', '15123', '9995809529', 'SAWAHLUNTO SIJUNJUNG', '1999-04-04', '2015', '2018'),
(144, 'MUHAMAD SIDIQ HENDARDI', 'lk', '15125', '0007564628', 'GUNUNG KIDUL', '2000-04-03', '2015', '2018'),
(145, 'MUHAMMAD FAUZI', 'lk', '15124', '9999540386', 'SOLOK', '1999-03-01', '2015', '2018'),
(146, 'MUHAMMAD IQBAL', 'lk', '15145', '9992499334', 'SAWAHLUNTO SIJUNJUNG', '1999-09-10', '2015', '2018'),
(147, 'OKTIKA SAPUTRI', 'pr', '15147', '9992499226', 'MARGA MAKMUR', '1999-10-25', '2015', '2018'),
(148, 'PINDO PUTRA PRATAMA', 'lk', '15128', '9989537038', 'SUMPUR KUDUS', '1998-03-09', '2015', '2018'),
(149, 'RANDA', 'lk', '15148', '0005903910', 'SAWAHLUNTO SIJUNJUNG', '2000-03-11', '2015', '2018'),
(150, 'RATNA SARI', 'pr', '15130', '9992499230', 'MARGA MAKMUR', '1999-03-25', '2015', '2018'),
(151, 'RISKA MARLINDA LESTARI', 'pr', '15131', '0002118762', 'MARGO MULYO', '2000-03-20', '2015', '2018'),
(152, 'RIZKI RAHMA PRIADI', 'lk', '15151', '0001799327', '', '2000-02-06', '2015', '2018'),
(153, 'ROMI ANGGRA', 'lk', '15150', '9982492310', 'SAWAHLUNTO SIJUNJUNG', '1998-09-14', '2015', '2018'),
(154, 'SELVIA HERMAYANTI', 'pr', '15133', '9992499235', 'MARGA MAKMUR', '1999-05-30', '2015', '2018'),
(155, 'TIA VERONIKA', 'pr', '15134', '9992499239', 'MARGA MAKMUR', '1999-07-02', '2015', '2018'),
(156, 'TRI MARTANTO', 'lk', '15152', '9998068938', 'MARGA MAKMUR', '1999-03-13', '2015', '2018'),
(157, 'UNTUNG SURYA DARMA', 'lk', '15136', '9984947742', 'KOTO AGUNG', '1998-12-08', '2015', '2018'),
(158, 'WIDYA NOVITA SARI', 'pr', '15137', '9992498519', 'TIMPEH', '1999-11-22', '2015', '2018'),
(159, 'YOS HENDRA', 'lk', '14071', '9979616208', 'MARGA JAYA', '1997-08-11', '2015', '2018'),
(160, 'ZAINAL SEFRIADI', 'lk', '15154', '9982492397', 'MARGA MAKMUR', '1998-09-07', '2015', '2018'),
(161, 'ZANDI DWINANDA PUTRA', 'lk', '15155', '0024239138', 'MUNGKA', '2000-02-14', '2015', '2018'),
(162, 'ADE FRANSISCA DURI', 'lk', '15107', '9992499210', 'SAWAHLUNTO SIJUNJUNG', '1999-06-16', '2015', '2018'),
(163, 'AFRINAL BERRY PRATAMA', 'lk', '15108', '9992499211', 'MARGA MAKMUR', '1999-03-31', '2015', '2018'),
(164, 'ALVIGA NOPIANDRI', 'lk', '15109', '9972534391', 'MARGA MAKMUR', '1997-07-07', '2015', '2018'),
(165, 'ANANG RIZKY ERICO', 'lk', '15139', '0006184131', 'LIPAT KAIN', '2000-05-05', '2015', '2018'),
(166, 'ANDI KURNIA', 'lk', '15110', '9982570906', 'PINANG MAKMUR', '1998-08-05', '2015', '2018'),
(167, 'ANDRES SULDIANTO', 'lk', '15140', '9982492370', 'MARGA MAKMUR', '1998-03-09', '2015', '2018'),
(168, 'ARI YUDISTIRA', 'lk', '15111', '9992499213', 'BUKIT TINGGI', '1999-10-11', '2015', '2018'),
(169, 'ARIF RAHMAD', 'lk', '15141', '9982992121', 'SAWAHLUNTO SIJUNJUNG', '1997-10-31', '2015', '2018'),
(170, 'ASEP SAPUTRA', 'lk', '15113', '9992510003', 'PINANG MAKMUR', '1999-05-15', '2015', '2018'),
(171, 'BENY ADRYANTO', 'lk', '14142', '0005062776', 'SUNGAI JERNIH', '2000-07-08', '2015', '2018'),
(172, 'DESMITA ALFIRA', 'lk', '15114', '9992579620', 'PINANG MAKMUR', '1999-12-31', '2015', '2018'),
(173, 'DIAN WIDIATI', 'lk', '15116', '9992579622', 'SIJUNJUNG', '1999-11-27', '2015', '2018'),
(174, 'DIKA FEBRA ANDILA', 'lk', '15117', '9992736914', 'SALIMPAT', '1999-09-24', '2015', '2018'),
(175, 'IDEAL PARAMATO INTAN', 'lk', '15119', '9992499216', 'MARGA MAKMUR', '1999-09-15', '2015', '2018'),
(176, 'ISKA JUNAIDI', 'lk', '15143', '9992498525', 'LUBUK LABU', '2001-04-16', '2015', '2018'),
(177, 'JULNAIDI', 'lk', '15120', '9982492399', 'MARGA JAYA', '1998-07-20', '2015', '2018'),
(178, 'LENNY SYOPHIANA', 'lk', '15121', '0001737825', 'PINANG MAKMUR', '2000-03-31', '2015', '2018'),
(179, 'MARIYOS SEFLI', 'lk', '15144', '9999993315', 'PINANG MAKMUR', '1999-03-14', '2015', '2018'),
(180, 'MELANNI APLIANA', 'lk', '15123', '9995809529', 'SAWAHLUNTO SIJUNJUNG', '1999-04-04', '2015', '2018'),
(181, 'MUHAMAD SIDIQ HENDARDI', 'lk', '15125', '0007564628', 'GUNUNG KIDUL', '2000-04-03', '2015', '2018'),
(182, 'MUHAMMAD FAUZI', 'lk', '15124', '9999540386', 'SOLOK', '1999-03-01', '2015', '2018'),
(183, 'MUHAMMAD IQBAL', 'lk', '15145', '9992499334', 'SAWAHLUNTO SIJUNJUNG', '1999-09-10', '2015', '2018'),
(184, 'OKTIKA SAPUTRI', 'pr', '15147', '9992499226', 'MARGA MAKMUR', '1999-10-25', '2015', '2018'),
(185, 'PINDO PUTRA PRATAMA', 'lk', '15128', '9989537038', 'SUMPUR KUDUS', '1998-03-09', '2015', '2018'),
(186, 'RANDA', 'lk', '15148', '0005903910', 'SAWAHLUNTO SIJUNJUNG', '2000-03-11', '2015', '2018'),
(187, 'RATNA SARI', 'pr', '15130', '9992499230', 'MARGA MAKMUR', '1999-03-25', '2015', '2018'),
(188, 'RISKA MARLINDA LESTARI', 'pr', '15131', '0002118762', 'MARGO MULYO', '2000-03-20', '2015', '2018'),
(189, 'RIZKI RAHMA PRIADI', 'lk', '15151', '0001799327', '', '2000-02-06', '2015', '2018'),
(190, 'ROMI ANGGRA', 'lk', '15150', '9982492310', 'SAWAHLUNTO SIJUNJUNG', '1998-09-14', '2015', '2018'),
(191, 'SELVIA HERMAYANTI', 'pr', '15133', '9992499235', 'MARGA MAKMUR', '1999-05-30', '2015', '2018'),
(192, 'TIA VERONIKA', 'pr', '15134', '9992499239', 'MARGA MAKMUR', '1999-07-02', '2015', '2018'),
(193, 'TRI MARTANTO', 'lk', '15152', '9998068938', 'MARGA MAKMUR', '1999-03-13', '2015', '2018'),
(194, 'UNTUNG SURYA DARMA', 'lk', '15136', '9984947742', 'KOTO AGUNG', '1998-12-08', '2015', '2018'),
(195, 'WIDYA NOVITA SARI', 'pr', '15137', '9992498519', 'TIMPEH', '1999-11-22', '2015', '2018'),
(196, 'YOS HENDRA', 'lk', '14071', '9979616208', 'MARGA JAYA', '1997-08-11', '2015', '2018'),
(197, 'ZAINAL SEFRIADI', 'lk', '15154', '9982492397', 'MARGA MAKMUR', '1998-09-07', '2015', '2018'),
(198, 'ZANDI DWINANDA PUTRA', 'lk', '15155', '0024239138', 'MUNGKA', '2000-02-14', '2015', '2018'),
(199, 'Achmad Fajrih', 'lk', '16158', '0008972580', 'Jakarta', '2000-07-13', '2016', '2019'),
(200, 'Aditya Julian', 'lk', '16159', '0014498668', 'Solok', '2001-07-11', '2016', '2019'),
(201, 'Agus Juwandra Solta', 'lk', '16160', '0003046806', 'KUMBAYAU', '2000-08-30', '2016', '2019'),
(202, 'Akmal Fauzi', 'lk', '16161', '0000820002', 'Timpeh', '2000-10-24', '2016', '2019'),
(203, 'Azizah Seprianti', 'pr', '16162', '0000788259', 'SAWAHLUNTO SIJUNJUNG', '2000-09-13', '2016', '2019'),
(204, 'Bagus Abdul Muhyi', 'lk', '16163', '0027967541', 'Lampung', '2002-05-29', '2016', '2019'),
(205, 'Danang Susilo', 'lk', '16164', '0014532191', 'SAWAHLUNTO SIJUNJUNG', '2000-04-28', '2016', '2019'),
(206, 'Defri Riski Anggara', 'lk', '16165', '0009641263', 'Sawahlunto SJJ', '2000-08-23', '2016', '2019'),
(207, 'Delvi Yona', 'pr', '16166', '9992848930', 'ANAU KADOK', '1999-07-29', '2016', '2019'),
(208, 'Dese Romadoni', 'lk', '16167', '9992847520', 'Sawahlunto Sijunjung', '1999-12-30', '2016', '2019'),
(209, 'Fajri Julianda', 'lk', '16169', '9992498508', 'Tanjung Ampalu', '1999-07-31', '2016', '2019'),
(210, 'Ganda Alamsyah', 'lk', '16201', '9992597273', 'TABEK PENYEBERANGAN', '1999-06-14', '2016', '2019'),
(211, 'Ilhamdi Hakima Syahrul Sidiq', 'lk', '16170', '0002586662', 'MARGA MAKMUR', '2000-04-17', '2016', '2019'),
(212, 'Kervan Evandel', 'lk', '16171', '0002586680', 'MARGA MAKMUR', '2000-09-07', '2016', '2019'),
(213, 'Megey Jayasva', 'lk', '16172', '9988889870', 'PADANG', '1998-06-19', '2016', '2019'),
(214, 'Melda Fransiska', 'pr', '16173', '9982491692', 'Solok', '1998-12-25', '2016', '2019'),
(215, 'Miftahul Saputra', 'lk', '16174', '9992847654', 'Pinang Makmur', '1999-08-07', '2016', '2019'),
(216, 'Monica Oktaria', 'pr', '16175', '0002586692', 'SAWAHLUNTO SIJUNJUNG', '2000-10-19', '2016', '2019'),
(217, 'Muhamad Herjuno Darmawan', 'lk', '16176', '0012682770', 'Pinang Makmur', '2001-07-19', '2016', '2019'),
(218, 'Novita Sari', 'pr', '16177', '9982571043', 'SAWAHLUNTO SIJUNJUNG', '1999-12-21', '2016', '2019'),
(219, 'Okse Kurnia Yulda', 'pr', '16178', '9982492383', 'MARGA MAKMUR', '1998-10-09', '2016', '2019'),
(220, 'Pega Novera Ningsih', 'pr', '16179', '9992499227', 'MARGA MAKMUR', '1999-11-29', '2016', '2019'),
(221, 'Rahma Wahyu Karlian', 'lk', '16180', '0014548143', 'Sungai Gading', '2001-11-21', '2016', '2019'),
(222, 'Redi Rizki Anto', 'lk', '16181', '0017832255', 'MARGA MAKMUR', '2001-03-30', '2016', '2019'),
(223, 'Rian Januar Arif', 'lk', '16182', '9982066335', 'MARGA MAKMUR', '1998-01-25', '2016', '2019'),
(224, 'Riko Sandika', 'lk', '16183', '0017832244', 'MARGA MAKMUR', '2000-10-09', '2016', '2019'),
(225, 'Rio Saputra', 'lk', '16199', '0006789437', 'Sawahlunto Sijunjung', '2000-06-24', '2016', '2019'),
(226, 'Rival Dwi Saputra', 'lk', '16184', '0008754612', 'Sawahlunto SJJ', '2000-10-03', '2016', '2019'),
(227, 'Rudi Saputra', 'lk', '16186', '0007723997', 'Pinang Makmur', '2000-09-19', '2016', '2019'),
(228, 'Sabrina Roselini', 'pr', '16187', '9992499234', 'MARGA MAKMUR', '1999-02-24', '2016', '2019'),
(229, 'Setyo Saputra', 'lk', '16188', '0008754567', 'DHARMASRAYA', '2000-07-02', '2016', '2019'),
(230, 'Siska Elvia Nora', 'pr', '16189', '9992499238', 'MARGA MAKMUR', '1999-06-20', '2016', '2019'),
(231, 'Siska Nilam Sari', 'pr', '16190', '9993017866', 'Taratak', '1999-11-13', '2016', '2019'),
(232, 'Syafri Yanto', 'lk', '16191', '9982492311', 'SWL/SJJ', '1998-10-12', '2016', '2019'),
(233, 'Syahfikri Nur Hidayat', 'lk', '16192', '0014498611', 'SIJUNJUNG', '2001-02-11', '2016', '2019'),
(234, 'TONY ALWARIS HASYIM', 'lk', '16193', '9993198371', 'Pekanbaru', '1999-10-22', '2016', '2019'),
(235, 'Varis Dwi Isnanto', 'lk', '16194', '0002586673', 'BANTUL', '2000-06-22', '2016', '2019'),
(236, 'Yoga Aldi Pratama', 'lk', '16200', '0014532541', 'PINANG MAKMUR', '2001-04-14', '2016', '2019'),
(237, 'Yon Feri Widia Putra', 'lk', '16195', '0001737503', 'MARGA MAKMUR', '2000-02-02', '2016', '2019'),
(238, 'Yulia Depi Saputra', 'lk', '16196', '9992499244', 'Marga Makmur', '1999-07-26', '2016', '2019'),
(239, 'Ady Herwansyah', 'L', '17231', '0014694044', 'Timpeh', '2001-11-14', '2017', '2020'),
(240, 'AZRI AMRIZAL', 'L', '17237', '0002586664', 'MARGA MAKMUR', '2000-10-05', '2017', '2020'),
(241, 'BAYU RESKI', 'L', '17238', '0017832239', 'MARGA MAKMUR', '2001-02-13', '2017', '2020'),
(242, 'Dandi Pratama', 'L', '17240', '9992703113', 'Surau Gading', '1999-07-02', '2017', '2020'),
(243, 'DEKI SETIAWAN SAPUTRA', 'L', '17241', '0017832242', 'Sawahlunto Sijunjung', '2001-01-16', '2017', '2020'),
(244, 'Deni Atam Rifai', 'L', '17242', '0000907241', 'Timpeh', '2000-11-30', '2017', '2020'),
(245, 'Diki Nafri', 'L', '17243', '0002564737', 'Beringin Sakti', '2000-06-13', '2017', '2020'),
(246, 'DWI NANDA YUNIANTO', 'L', '17244', '0017832267', 'MARGA MAKMUR', '2001-06-23', '2017', '2020'),
(247, 'FEBRINA TASYA', 'P', '17245', '0001737501', 'SAWAHLUNTO SIJUNJUNG', '2000-02-21', '2017', '2020'),
(248, 'Hendri Yusuf', 'L', '17247', '9991720321', 'SIJUNJUNG', '2000-06-12', '2017', '2020'),
(249, 'Irfan Noor Hidayat', 'L', '17249', '0024239143', 'Solok', '2002-01-09', '2017', '2020'),
(250, 'LIHANDOKO', 'L', '17251', '0017832282', 'MARGA MAKMUR', '2001-11-19', '2017', '2020'),
(251, 'M IBNU SUMARNA', 'L', '17252', '0009078542', 'SAWAHLUNTO', '2000-09-07', '2017', '2020'),
(252, 'M. YUKI', 'L', '17253', '0005144873', 'LUBUK KAMBING', '2000-12-18', '2017', '2020'),
(253, 'MUHAMMAD ADE PUTRA', 'L', '17255', '0020438701', 'MUARO SIJUNJUNG', '2002-05-22', '2017', '2020'),
(254, 'PAJRI', 'L', '17256', '0017819315', 'Sawahlunto Sijunjung', '2001-08-16', '2017', '2020'),
(255, 'RIFKI ILLAHI', 'L', '17257', '9992499231', 'SOLOK', '1999-06-14', '2017', '2020'),
(256, 'SISWANDI', 'L', '17259', '0002586697', 'MARGA MAKMUR', '2000-10-12', '2017', '2020'),
(257, 'Siti Aisa', 'P', '17260', '0012577374', 'Pekan Sabtu', '2001-05-23', '2017', '2020'),
(258, 'TRIOHADI PRAMUDHITO', 'L', '17261', '0016046514', 'MARGA MAKMUR', '2001-10-30', '2017', '2020'),
(259, 'VINGKY ANDRIKA SAPUTRA', 'L', '17262', '9992847504', 'SAWAHLUNTO SIJUNJUNG', '1999-09-16', '2017', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bukutamu`
--

DROP TABLE IF EXISTS `tb_bukutamu`;
CREATE TABLE IF NOT EXISTS `tb_bukutamu` (
  `id_bukutamu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tamu` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `komentar` longtext NOT NULL,
  PRIMARY KEY (`id_bukutamu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bukutamu`
--

INSERT INTO `tb_bukutamu` (`id_bukutamu`, `nama_tamu`, `email`, `alamat`, `komentar`) VALUES
(1, 'gfhfghf', 'gdfgdfgdfg@gmail.com', 'Gunung Pangilun', 'assssssssssssssssssssss'),
(2, 'sdasdsa', 'dsadas@gmail.com', 'dsfsdf', 'sdfds');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ekstrakurikuler`
--

DROP TABLE IF EXISTS `tb_ekstrakurikuler`;
CREATE TABLE IF NOT EXISTS `tb_ekstrakurikuler` (
  `id_ekstrakurikuler` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ekstrakurikuler` varchar(50) NOT NULL,
  `keterangan` longtext NOT NULL,
  PRIMARY KEY (`id_ekstrakurikuler`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ekstrakurikuler`
--

INSERT INTO `tb_ekstrakurikuler` (`id_ekstrakurikuler`, `nama_ekstrakurikuler`, `keterangan`) VALUES
(2, 'Pramuka', 'proses'),
(3, 'Drumband', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ekstrakurikuler_siswa`
--

DROP TABLE IF EXISTS `tb_ekstrakurikuler_siswa`;
CREATE TABLE IF NOT EXISTS `tb_ekstrakurikuler_siswa` (
  `id_ekstrakurikuler_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `id_ekstrakurikuler` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  PRIMARY KEY (`id_ekstrakurikuler_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ekstrakurikuler_siswa`
--

INSERT INTO `tb_ekstrakurikuler_siswa` (`id_ekstrakurikuler_siswa`, `id_ekstrakurikuler`, `id_siswa`) VALUES
(6, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

DROP TABLE IF EXISTS `tb_fasilitas`;
CREATE TABLE IF NOT EXISTS `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_fasilitas` varchar(128) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_fasilitas`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `jenis_fasilitas`, `foto`) VALUES
(9, 'ruangan', 'IMG-20210611-WA0017.jpg'),
(11, 'pustaka', 'IMG-20210611-WA0014.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

DROP TABLE IF EXISTS `tb_gallery`;
CREATE TABLE IF NOT EXISTS `tb_gallery` (
  `id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(50) NOT NULL,
  `jenis` varchar(10) NOT NULL COMMENT '1 untuk foto,\r\n2 untuk video',
  `foto` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`id_gallery`, `keterangan`, `jenis`, `foto`, `video`) VALUES
(15, 'Pramuka', '1', 'IMG-20210611-WA0038.jpg', '0'),
(16, 'Olahraga', '1', 'IMG-20210611-WA0040.jpg', '0'),
(17, 'Drumband', '1', 'IMG-20210611-WA0048.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

DROP TABLE IF EXISTS `tb_guru`;
CREATE TABLE IF NOT EXISTS `tb_guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `nuptk` varchar(50) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `foto`, `tgl_lahir`, `tempat_lahir`, `jk`, `nohp`, `email`, `jabatan`, `golongan`, `nuptk`) VALUES
(28, '199207142019031006', 'AHMAD SABARSYAH PUTRA Z', 'ahmad sabarsyah putra z, spd.jpg', '1992-07-14', 'PADANG', 'lk', '082284961106', 'ahmadspz140792@gmail.com', 'Guru Piket', 'III/a', '2046770671130103'),
(29, '199208312019031008', 'Bayu Permana', '', '1992-08-31', 'KASANG', 'lk', '081277753514', 'bayukasangcity@gmail.com', 'Guru Piket', 'III/a', '6163770671130103'),
(30, '198801102011011007', 'Dion Saputra, S.pd', 'dion saputra, spd.jpg', '1988-01-10', 'PADANG', 'lk', '085376694623', 'sdion72@yahoo.com', 'Guru Piket', 'III/b', '7442766667120002'),
(31, '198210032009022005', 'Eva Prasetyawati, M.Pd', 'eva prasetyawati, m.pd.jpg', '1982-10-03', 'SAWAHLUNTO SJJ', 'pr', '081318298582', 'prasetyaeva04@gmail.com', 'Wakil Kepala Sekolah', 'III/d', '0335760662300093'),
(32, '198810032014021001', 'Fauzan Davis', '', '1988-10-03', 'PADANG', 'lk', '085274700088', 'fauzand3@gmail.com', 'Kepala Program Keahlian', 'III/b', '5335766667120003'),
(33, '198707212019032003', 'Juliyas Firnanda', 'juliyas firnanda, s.pd.jpg', '1987-07-21', 'Sijunjung', 'pr', '082373066756', 'juliyasfirnanda@gmail.com', '', 'III/a', '6053765666130183'),
(34, '199609062019032008', 'LINA', 'lina, spd.jpg', '1996-09-06', 'MALAYSIA', 'pr', '081277750609', 'antarilina69@gmail.com', 'Pelaksana PBJ', 'III/a', '8238774675130003'),
(35, '199406122019031006', 'RASDINO WINATA', 'rasdino winata, st.jpg', '1994-06-12', 'ANAKAN', 'lk', '081267480147', 'rasdinowinata@gmail.com', 'Kepala Program Keahlian', 'III/a', '1944772673130062'),
(36, '198808182020122007', 'Amelia Gustina', 'amelia gustina, s.pd.jpg', '1988-08-18', 'Pasar Baru', 'pr', '085271697318', 'ameliagustina72936@gmail.com', 'Guru Piket', 'III/a', '7150766667230283'),
(37, '199112282020121008', 'Ari Wicaksono', 'ari wicaksono, spd.jpg', '1991-12-28', 'Madiun', 'lk', '082288413722', 'ariw2020Icaksno@gmail.com', 'Guru Piket', 'III/a', ''),
(38, '199512052020121000', 'Arief Rahman', 'arief rahman, s.pd.jpg', '1995-12-05', 'Sungai Dareh', 'lk', '085275391075', 'arief05des@gmail.com', 'Guru Mapel', 'III/a', '9537773674130053'),
(39, '199209172020122011', 'Hester Admas', 'hester admas, s.pd.jpg', '1992-09-17', 'Painan', 'pr', '085278840687', 'hesteradmas2020@gmail.com', 'Guru Piket', 'III/a', '0249770671230133'),
(40, '198811272020122006', 'Yanni Nurmisari', 'yanni nurmisari, s.pdi.jpg', '1988-11-27', 'Saruaso', 'pr', '085272983800', 'yanninurmisari83@gmail.com', '', 'III/a', '1459766667220013'),
(41, '', 'Budianto', 'budianto, s.kom.jpg', '1988-01-21', 'MARGA MAKMUR', 'lk', '085228770855', '21.budianto@gmail.com', 'Kepala Program Keahlian', '', ''),
(42, '', 'Buyung Suri', 'buyung suri, s.pd.jpg', '1985-12-02', 'Timpeh', 'lk', '081374178527', 'buyungsuri1285@gmail.com', '', '', ''),
(43, '', 'Era Vika Indra Swari, S.pd', '', '1990-06-16', 'MARGA MAKMUR', 'pr', '081266577708', 'vika.swari90@gmail.com', '', '', ''),
(44, '', 'Fitriya', 'fitriya,s.pd.jpg', '1990-01-11', 'SUNGAI LANSAT', 'pr', '082387739876', 'F43053697@gmail.com', '', '', ''),
(45, '', 'Neno Yahsanta Kumala', 'neno yahsanta kumala, s.pd.jpg', '1987-11-25', 'KOTO GAEK TALANG', 'pr', '082288789471', 'nenoyahsanta@gmail.com', '', '', '7457765666230183'),
(46, '', 'Nomi Silvia Gusna', 'novi silvia gusna, s.pd.jpg', '1987-08-16', 'Al.Panjang', 'pr', '081378219891', 'nomisilvi@yahoo.com', '', '', '2148765667210053'),
(47, '', 'Nopali Chandra', 'nopalli chandra, st.jpg', '1989-02-28', 'PULAU PUNJUNG', 'lk', '082174670758', 'nopalichandra@gmail.com', 'Kepala Program Keahlian', '', '8560767668130192'),
(48, '', 'Siti Arlida Ferliana', 'siti arlida ferliana, st.jpg', '1996-09-22', 'Timpeh', 'pr', '082388146370', 'sitiaf220996@gmail.com', '', '', ''),
(49, '', 'ZAINAN', '', '1977-12-03', 'SITIUNG', 'lk', '081374086405', 'zainan475@gmail.com', '', '', '4535755659200003');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

DROP TABLE IF EXISTS `tb_informasi`;
CREATE TABLE IF NOT EXISTS `tb_informasi` (
  `id_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `judul_informasi` varchar(100) NOT NULL,
  `tgl_informasi` date NOT NULL,
  `isi_informasi` longtext NOT NULL,
  `jenis_informasi` varchar(10) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_informasi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `judul_informasi`, `tgl_informasi`, `isi_informasi`, `jenis_informasi`, `foto`) VALUES
(4, 'WORKSHOP PENYUSUNAN DOKUMEN KTSP TAHUN PELAJARAN 2021/2022', '2021-06-15', '<p>Menyongsong&nbsp; Tahun Pelajaran 2021/2022 yang akan dimulai bulan juli mendatang, SMKN 1 Timpeh mempersiapkan para guru untuk menyusun perangkat pembelajaran. Salah satunya adalah dokumen Kurikulum Tingkat Satuan Pendidikan (KTSP). KTSP merupakan kurikulum yang disusun dan ditetapkan oleh satuan pendidikan yang menjadi pedoman bagi warga sekolah dalam melaksanakan aktivitas pembelajaran.</p>\r\n\r\n<p>SMKN 1 Timpeh mengadakan kegiatan Workshop Penyusunan Dokumen KTSP Tahun Pelajaran 2021/2022 pada tanggal 27 Mei 2021 s/d 31 Mei 2021 bersama Narasumber Wilmafatra, M.Pd sebagai Tim IPK Disdik Provinsi Sumatera Barat. Tujuan dari kegiatan ini adalah mempersiapkan perangkat pembelajaran yang akan digunakan oleh guru pada pembelajaran Tahun Pelajaran 2021/2022 sekaligus untuk penyusunan KTSP SMKN 1 Timpeh Tahun Pelajaran 2021/2022. Kegiatan ini dihadiri oleh Pengawas,Kepala Sekolah,seluruh guru dan staf SMKN 1 Timpeh.</p>\r\n', 'berita', 'berita.jpg'),
(5, 'PENERIMAAN PESERTA DIDIK BARU TAHUN PELAJARAN 2021/2022', '2021-06-21', '<p>Lulus SMP/MTS masih bingung mau lanjut kemana ???</p>\r\n\r\n<p>Kenapa harus bingung ??? Ayo buruan daftar di SMKN 1 Timpeh !</p>\r\n\r\n<p>Pendaftaran PPDB Online <a href=\"https://ppdb.sumbarprov.go.id/\">https://ppdb.sumbarprov.go.id/</a></p>\r\n\r\n<p>Buat kalian calon peserta didik baru SMKN 1 Timpeh, silahkan pahami dan perhatikan baik-baik dengan mengunjungi situs link PPDB <a href=\"https://ppdb.sumbarprov.go.id/\">https://ppdb.sumbarprov.go.id/</a> untuk pengecekan data siswa. Bagi siswa yang tamat atau lulus tahun 2021 dan bersekolah didalam provinsi Sumatera Barat dapat melihat kelengkapan data selanjutnya mengkonfirmasi data yang telah diinputkan oleh operator sekolah dengan memasukkan nik/nisn. Kemudian pada laman Web tersebut tertera penjelasan mengenai peraturan menentukan pilihan jalur dan sekolah yang dipilih sesuai dengan aturan yang ada. Pemilihan jalur dengan memahami aturan dan syarat apa saja yang ada pada setiap jalur PPDB.</p>\r\n\r\n<p>SMK : Jalur zonasi, Jalur afirmasi, perpindahan orang tua/wali/anak guru, dan prestasi.</p>\r\n\r\n<p>Jangan lupa, follow seluruh media sosial dan website resmi SMKN 1 Timpeh biar kalian tidak ketinggalan informasi PPDB 2021 lainnya, oke!?</p>\r\n\r\n<p>Untuk informasi lebih lanjut dapat menghubungi :</p>\r\n\r\n<ol>\r\n	<li>Eva Prasetyawati, M.Pd (0813 1829 8582)</li>\r\n	<li>Bayu Permana, S.Pd (0812 7775 3514)</li>\r\n	<li>Juliyas Firnanda, S.Pd (0823 7306 6756)</li>\r\n</ol>\r\n\r\n<p>PPDB 2021 &ldquo;Sekolah di Mana Saja Sama&rdquo;</p>\r\n', 'berita', 'ppdb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

DROP TABLE IF EXISTS `tb_kelas`;
CREATE TABLE IF NOT EXISTS `tb_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(11) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(1, 'X');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendukungsekolah`
--

DROP TABLE IF EXISTS `tb_pendukungsekolah`;
CREATE TABLE IF NOT EXISTS `tb_pendukungsekolah` (
  `id_pendukungsekolah` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_file` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `file` varchar(128) NOT NULL,
  PRIMARY KEY (`id_pendukungsekolah`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendukungsekolah`
--

INSERT INTO `tb_pendukungsekolah` (`id_pendukungsekolah`, `jenis_file`, `name`, `file`) VALUES
(65, 'akreditasi', 'Akreditasi Sekolah', '../assets/sumber/file/Akreditasi Sekolah.pdf'),
(53, 'kalender', 'KALENDER PENDIDIKAN', '../assets/sumber/file/KALENDER PENDIDIKAN.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi_siswa`
--

DROP TABLE IF EXISTS `tb_prestasi_siswa`;
CREATE TABLE IF NOT EXISTS `tb_prestasi_siswa` (
  `id_prestasi` int(11) NOT NULL AUTO_INCREMENT,
  `judul_prestasi` varchar(50) NOT NULL,
  `keterangan` longtext NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_prestasi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prestasi_siswa`
--

INSERT INTO `tb_prestasi_siswa` (`id_prestasi`, `judul_prestasi`, `keterangan`, `foto`) VALUES
(1, 'dsfsdfsd', '<p>fsdfsdf</p>\r\n', 'IMG-20210611-WA0024.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_programkeahlian`
--

DROP TABLE IF EXISTS `tb_programkeahlian`;
CREATE TABLE IF NOT EXISTS `tb_programkeahlian` (
  `id_programkeahlian` int(11) NOT NULL AUTO_INCREMENT,
  `nama_programkeahlian` varchar(50) NOT NULL,
  `lama_belajar` varchar(50) NOT NULL,
  `dasar_bidangkeahlian` longtext NOT NULL,
  `dasar_programkeahlian` longtext NOT NULL,
  `kompetensi_keahlian` longtext NOT NULL,
  `url` varchar(50) NOT NULL,
  PRIMARY KEY (`id_programkeahlian`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_programkeahlian`
--

INSERT INTO `tb_programkeahlian` (`id_programkeahlian`, `nama_programkeahlian`, `lama_belajar`, `dasar_bidangkeahlian`, `dasar_programkeahlian`, `kompetensi_keahlian`, `url`) VALUES
(1, 'GEOLOGI PERTAMBANGAN', '4 Tahun', '<ol>\r\n	<li>Simulasi dan Komunikasi Digital</li>\r\n	<li>Fisika</li>\r\n	<li>Kimia</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Gambar Teknik</li>\r\n	<li>Dasar-dasar Geologi</li>\r\n	<li>Kesehatan, Keselmatan Kerja dan Lingkungan Hidup</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Pemetaan Topografi dan Pemetaan Geologi</li>\r\n	<li>Teknik Eksplorasi dan Teknik Penambangan</li>\r\n	<li>Teknik Peledakan dan Pemboran</li>\r\n	<li>Bahan Galian</li>\r\n	<li>Geologi Teknik</li>\r\n	<li>Geologi Terapan</li>\r\n	<li>Tambang Terapan</li>\r\n	<li>Produk Kreatif dan Kewirausahaan</li>\r\n</ol>\r\n', '?page=programkeahlian'),
(2, 'TEKNIK ALAT BERAT', '3 Tahun', '<ol>\r\n	<li>Simulasi dan Komunikasi Digital</li>\r\n	<li>Fisika</li>\r\n	<li>Kimia</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Gambar Teknik Otomotif</li>\r\n	<li>Teknologi Dasar Otomotif</li>\r\n	<li>Pekerjaan Dasar Teknik Otomotif</li>\r\n</ol>\r\n', '<ol>\r\n	<li><em>Engine </em>dan Unit Alat Berat</li>\r\n	<li>Kelistrikan dan Sistim Kontrol Alat Berat</li>\r\n	<li>Hidrolik Alat Berat</li>\r\n	<li><em>Powertrain</em> dan <em>Undercarriage</em> Alat Berat</li>\r\n	<li>Produk Kreatif dan Kewirausahaan</li>\r\n</ol>\r\n', '?page=programkeahlian'),
(3, 'TEKNIK KOMPUTER DAN JARINGAN', '3 Tahun', '<ol>\r\n	<li>Simulasi dan Komunikasi Digital</li>\r\n	<li>Fisika</li>\r\n	<li>Kimia</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Sistem Komputer</li>\r\n	<li>Komputer dan Jaringan Dasar</li>\r\n	<li>Pemrograman Dasar</li>\r\n	<li>Dasar Desain Grafis</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Teknologi Jaringan Berbasis Berbasis Luas (WAN)</li>\r\n	<li>Administrasi Infrastruktur Jaringan</li>\r\n	<li>Administrasi Sistem Jaringan</li>\r\n	<li>Teknologi Layanan Jaringan</li>\r\n	<li>Produk Kreatif dan Kewirausahaan</li>\r\n</ol>\r\n', '?page=programkeahlian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_saranaprasarana`
--

DROP TABLE IF EXISTS `tb_saranaprasarana`;
CREATE TABLE IF NOT EXISTS `tb_saranaprasarana` (
  `id_saranaprasarana` int(11) NOT NULL AUTO_INCREMENT,
  `nama_saranaprasarana` varchar(50) NOT NULL,
  `jenis_saranaprasarana` varchar(50) NOT NULL,
  `jumlah_saranaprasarana` int(10) NOT NULL,
  PRIMARY KEY (`id_saranaprasarana`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_saranaprasarana`
--

INSERT INTO `tb_saranaprasarana` (`id_saranaprasarana`, `nama_saranaprasarana`, `jenis_saranaprasarana`, `jumlah_saranaprasarana`) VALUES
(4, 'AC ( Air Conditioning)', 'sarana', 1),
(5, 'Konstruksi Pagar', 'prasarana', 0),
(6, 'Bengkel', 'prasarana', 0),
(7, 'Camera Conference', 'sarana', 73),
(8, 'Globe', 'sarana', 2),
(9, 'Kit Matematika', 'sarana', 1),
(10, 'Kompas', 'sarana', 1),
(11, 'Kompas Geologi', 'sarana', 1),
(12, 'Laptop', 'sarana', 1),
(13, 'LCD Proyektor/Infocus', 'sarana', 4),
(14, 'Lemari Kayu', 'sarana', 39),
(15, 'Labor Sains', 'prasarana', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

DROP TABLE IF EXISTS `tb_sekolah`;
CREATE TABLE IF NOT EXISTS `tb_sekolah` (
  `id_sekolah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(50) NOT NULL,
  `visi` longtext NOT NULL,
  `misi` longtext NOT NULL,
  `sejarah_sekolah` longtext NOT NULL,
  `kata_sambutan` longtext NOT NULL,
  `foto_logo` varchar(255) NOT NULL,
  `foto_struktur` varchar(255) NOT NULL,
  `peta_sekolah` varchar(255) NOT NULL,
  `lokasi_sekolah` varchar(255) NOT NULL,
  `foto_utama` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sekolah`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id_sekolah`, `nama_sekolah`, `visi`, `misi`, `sejarah_sekolah`, `kata_sambutan`, `foto_logo`, `foto_struktur`, `peta_sekolah`, `lokasi_sekolah`, `foto_utama`) VALUES
(5, 'SMK Negeri 1 Timpeh', 'Terdidik dan terampil berdasarkan imtaq', '<ol>\r\n	<li>Meningkatkan kedisiplinan siswa</li>\r\n	<li>Meningkatkan Kebersihan dan kenyamanan lingkungan sekolah</li>\r\n	<li>Meningkatkan kualitas pembelajaran</li>\r\n	<li>Meningkatkan keprofesionalan guru</li>\r\n	<li>Meningkatkan pembelajaran praktik kejuruan</li>\r\n	<li>Meningkatkan hubungan kerjasama dengan dunia usaha dan dengan dunia industri</li>\r\n	<li>Membudayakan senyum, salam, sapa, sopan, santun, di lingkungan sekolah dan masyarakat</li>\r\n	<li>Meningkatkan kesadaran dalam beribadah</li>\r\n</ol>\r\n', '<p>SMK N 1 Timpeh terletak di Jalan Poros Marga Makmur III, Kenagarian Taratak Tinggi, Kecamatan Timpeh, Kabupaten Dharmasraya. Sekolah ini didirikan pada tahun 2014 dan mulai beroperasi pada tahun pelajaran 2014/2015.SMK N 1 Timpeh terbilang sekolah masih mudah. Secara geografis SMK N 1 Timpeh berada ditengah pemukiman penduduk sehingga mudah dijangkau karena posisinya cukup strategis. SMK N 1 Timpeh menempati posisi pertama sebagai sekolah kejuruan di kecamatan Timpeh. Sekolah ini berdiri di atas tanah pemerintah, memiliki bangunan yang kokoh dan luas dilengkapi berbagai fasilitas yang menunjang proses belajar mengajar. Posisi sekolah berdiri diatas tanah seluas 10.795 m&sup2;. Status kepemilikan lahan merupakan hak milik yang dilengkapi dengan bukti kepemilikan yang sah (sertipikat). Pada tahun pelajaran 2020/2021 siswa-siswi SMKN 1 Timpeh berjumlah 130 orang yang terbagi dalam 8 rombongan belajar. Tenaga Pendidik dan Tenaga Kependidikan berjumlah 29 orang yang terdiri atas 1 orang Kepala Sekolah, 13 orang Guru berstatus PNS, 9 orang Guru berstatus Guru Honor Sekolah, 5 orang Tenaga Honor sekolah dan 1 orang Petugas Keamanan. SMKN 1 Timpeh adalah salah satu sekolah yang masih memerlukan pembenahan-pembenahan untuk meningkatkan mutu, baik mutu pembelajaran maupun mutu siswa dan meningkatkan mutu fisik gedung dan sarana prasarananya. Dengan demikian untuk menuju sekolah yang berkualitas memerlukan perencanaan matang yang dilaksanakan secara transparan, akuntabel dan berkesinambungan.</p>\r\n', '<p>Assalamualaikum Wr.Wb</p>\r\n\r\n<p>Puji Syukur kita ucapkan kehadirat Allah Swt. Yang telah memberikan rahmat dan karunia-Nya kepada kita semua. Shalawat beserta salam kita haturkan kepada junjungan kita Nabi Besar Muhammad SAW, kepada sahabat, kerabat dan pengikut beliau sampai akhir zaman.</p>\r\n\r\n<p>Kami mengucapkan selamat datang di website kami Sekolah Menengah Kejuruan Negeri (SMKN) 1 Timpeh. Website (smkn1.timpeh.sch.id) diharapkan bisa memberikan informasi tentang profil, aktivitas/kegiatan serta fasilitas sekolah kepada masyarakat luas yang ingin menempuh pendidikan di sekolah ini, kepada pemerintah pusat, pemerintah daerah, tenaga pendidik dan kependidikan dan juga kepada para alumni yang rindu akan sekolah ini, serta para stakeholder yang terkait dengan dunia pendidikan. Dan juga dengan adanya website ini dapat dijadikan sarana interaksi yang positif antar warga sekolah dan masyarakat pada umumnya sehingga informasi dapat tersampaikan dengan baik. Semoga Allah Swt. Memberikan kekuatan bagi kita semua untuk mencerdaskan anak-anak bangsa.</p>\r\n\r\n<p>Kami selaku pimpinan Kepala Sekolah mengucapkan terimakasih kepada pembuat website ini yang telah berusaha untuk dapat lebih memperkenalkan segala perihal yang dimiliki oleh&nbsp; sekolah. Adapun website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan website ini bisa lebih baik lagi kedepannya.</p>\r\n\r\n<p><strong>&ldquo;S M K &nbsp;B I S A &ndash; S M K &nbsp;H E B A T&rdquo;</strong></p>\r\n\r\n<p>Akhir kata, kami mengucapkan terimakasih atas kunjungan dan apresiasi dan masukan dari semua pihak terhadap website SMKN 1 Timpeh.</p>\r\n\r\n<p>Wassalamualaikum Wr.Wb</p>\r\n', 'LOGO SMKN 1 TIMPEH.png', 'E14B9447-F60C-45DE-96CB-7C26A1D9E80E.jpeg', 'SITE PLANE SMK NEGERI 1 TIMPEH-1.jpg', 'IMG_20200816_204431.jpg', 'IMG-20210527-WA0002.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

DROP TABLE IF EXISTS `tb_siswa`;
CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(50) NOT NULL,
  `nisn` varchar(16) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_kelas` int(50) NOT NULL,
  `id_programkeahlian` int(50) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nisn`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `id_kelas`, `id_programkeahlian`) VALUES
(8, '678678', '68768', 'hgjhghkgjh', 'khjkhjk', '2021-06-22', 'pr', 'Komplek Perumahan ITP Blok A-2, Kelurahan Gurun Laweh,  Kecamatan Nanggalo Kota Padang.', 1, 3),
(9, '9888', '8888', 'hhhh', 'PADANG', '2021-06-22', 'lk', 'ghfghfg', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tendik`
--

DROP TABLE IF EXISTS `tb_tendik`;
CREATE TABLE IF NOT EXISTS `tb_tendik` (
  `id_tendik` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tendik` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nuptk` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_pegawai` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `jenis_ptk` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tendik`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tendik`
--

INSERT INTO `tb_tendik` (`id_tendik`, `nama_tendik`, `nip`, `nuptk`, `jk`, `tempat_lahir`, `tanggal_lahir`, `status_pegawai`, `golongan`, `jenis_ptk`, `nohp`, `email`, `foto`) VALUES
(6, 'Erna Susanti', '', '', 'pr', 'SIKALANG', '1976-04-19', 'Tenaga Honor Sekolah', '', 'Tenaga Administrasi Sekolah', '082174538535', 'citye1051@gmail.com', ''),
(5, 'Sugiyono, M.pd', '197208202005011003', '8152750652300053', 'lk', 'WONOGIRI', '1972-08-20', 'PNS', 'IV/a', 'Kepala Sekolah', '081374362557', 'sugiyonosn701@gmail.com', ''),
(7, 'FENI PETRIA', '', '9554774675230032', 'pr', 'TALANG', '1996-02-22', 'Tenaga Honor Sekolah', '', 'Tenaga Administrasi Sekolah', '081261150553', 'feni.petria96@gmail.com', ''),
(8, 'LILIANA', '', '', 'pr', 'Pinang Makmur', '1993-12-06', 'Tenaga Honor Sekolah', '', 'Tenaga Perpustakaan', '', 'lemotaja657@gmail.com', ''),
(9, 'Lilis Eviliana Sari', '', '', 'pr', 'SITIUNG', '1991-02-22', '', '', 'Tenaga Administrasi Sekolah', '082287124271', 'lilisevilianasari@gmail.com', ''),
(10, 'Mairino', '', '', 'lk', 'CENGAR', '1980-05-01', '', '', 'Petugas Keamanan', '081372987384', 'ujungtanjunga@gmail.com', ''),
(11, 'Wahyu Dwi Suryanti', '', '5933773674230072', 'pr', 'MARGA MAKMUR', '1995-06-01', '', '', 'Tenaga Administrasi Sekolah', '082383426667', 'wahyudwisuryanti.95@gmail.com', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
