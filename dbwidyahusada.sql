-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 21 Des 2020 pada 07.58
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `dbwidyahusada`
--
CREATE DATABASE IF NOT EXISTS `dbwidyahusada` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbwidyahusada`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulan`
--

CREATE TABLE IF NOT EXISTS `bulan` (
  `idbulan` int(2) NOT NULL AUTO_INCREMENT,
  `nmbulan` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idbulan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `bulan`
--

INSERT INTO `bulan` (`idbulan`, `nmbulan`) VALUES
(1, 'Januari'),
(2, 'Pebruari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'Nopember'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `norm` varchar(10) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `tmplhr` varchar(30) DEFAULT NULL,
  `tgllhr` date DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`norm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`norm`, `nama`, `alamat`, `agama`, `pekerjaan`, `tmplhr`, `tgllhr`, `telepon`) VALUES
('RM19070001', 'Grabiela Roberta Doop', 'Wisma Sehati', 'Katholik', 'Mahasiswi', 'Jakarta', '1999-01-15', ''),
('RM19080001', 'Hartini Rahardjo', 'Jl. MT Haryono 189 RT003/RW007', 'Kristen', 'Pensiun', '', '1994-07-26', ''),
('RM19080002', 'Joan Putri Callista', 'Wisma Sehati (Sahabat)', 'Kristen', 'Mahasiswa', 'Tanggerang', '2001-07-20', ''),
('RM19080003', 'Bernardha Herdina Dwi', 'Jl. Karonsih Timur V', 'Katholik', 'BUMN', 'Semarang', '1989-05-02', ''),
('RM19090001', 'Widi Kurniawan', 'Jl. Somopuro RT 10 RW 7 Bebengan, Boja. Kendal', 'Islam', 'Post. Security', 'Kendal', '1994-03-13', ''),
('RM19090002', 'Anggi Oktaviani', 'Jl. Sugriwo Dalam , Krapyak. Semarang Barat', 'Islam', 'Mahasiswi', 'Semarang', '0000-11-30', ''),
('RM19090003', 'Mas Andy Muhammad Raishabibi', 'Jl. Gondang timur 3 No. 4 Bulusan, Tembalang', 'Islam', 'Mahasiswa', 'Bontang', '1999-07-08', ''),
('RM19090004', 'Yusuf Ridwan', 'Jl. Mulawarman 2 No.11C Banyumanik. Semarang', 'Islam', 'Swasta', 'Mojokerto', '0000-00-00', '10-05-1986'),
('RM19090005', 'Akhmad Khoiri', 'Jl. Sumberejo , Mranggen. Demak', 'Islam', 'Pensiun Karyawan Swa', '', '1993-01-09', ''),
('RM19090006', 'Naufal Arif Baskara', 'Jl. Menoreh Tengah IX Gajahmungkur', 'Islam', 'pelajar', 'Semarang', '2004-12-16', ''),
('RM19090007', 'Nafisah', 'Jl. Ahmad Yani 40, Rembang', 'Islam', 'Guru', 'Rembang', '0000-00-00', '14-4-1977'),
('RM19090008', 'Edwin Gunawan Aji', 'Jl. Puri Anjasmoror Blok J 3 No.6 , Karangayu', 'Kristen', 'Swasta', 'Semarang', '0000-00-00', '25-9-1972'),
('RM19090009', 'Haryanto', 'Jl. Cendana 1263 Plamongan Indah. Semarang Timur', 'Kristen', 'Pegawai Swasta', 'Purworejo', '0000-00-00', '29-11-1967'),
('RM19090010', 'Havid Nuril Ardiansyah', 'Puspowarno', 'Islam', 'Mahasiswa', 'Semarang', '0000-00-00', '27-12-1995'),
('RM19090011', 'Muhammad Rayhan Oktaviansyah', 'Jl. Pasir Mas Raya No. 1 Semarang Utara', 'Islam', 'Pelajar', 'Semarang', '0000-00-00', '3-10-2001'),
('RM19090012', 'Aliansyah Hussayn Kamal', 'Jl. Raya Gombel Lama No 12. Banyumanik', 'Islam', 'Pelajar', 'Jakarta', '0000-00-00', '8-1-2006'),
('RM19090013', 'Taufik Dwinaffebri', 'Jl. Gondang Timur 4 No 54 Tembalang', 'Islam', 'Mahasiswa', 'Kambang', '0000-00-00', '22-02-1998'),
('RM19090014', 'Mochammad Nabizar Attila Taqwa', 'Jl. Pasir Mas Raya No 1', 'Islam', 'Pelajar', 'Pemalang', '0000-00-00', '31-1-2004'),
('RM19100001', 'Qiflan Ovalino', 'Jl. Tentara Pelajar Undaris', 'Islam', 'Mahasiswa', 'Semarang', '1999-01-25', '08112411177'),
('RM19100002', 'Melinda Novitasari', 'Jl. Timoho Timur 3 No.43 Bulusan Tembalang', 'Islam', 'Mahasiswi', 'Cirebon', '0000-00-00', '19-05-1999'),
('RM19100003', 'M Islakhudin', 'Jl. Kuwasen Rejo , Pongangan. Gunung Pati', 'Islam', 'Swasta Grab', 'Rembang', '0000-00-00', '4-12-1992'),
('RM19100004', 'Hartati Gondowardono', 'Jl. Citarum Raya 43', 'Kristen', 'Ibu Rumah Tangga', 'Semarang', '1969-01-28', '08156550752'),
('RM19100005', 'Afif Audric Putra Jaya', 'Jl. Sawah Besar 9', 'Islam', 'Pelajar', 'Semarang', '2002-09-17', '082136858529'),
('RM19100006', 'Reza Pahlevi', 'Ds. Pegandon RT 1 RW 3, Kec. Pegandon Kab. Kendal', 'Islam', 'Apoteker', 'Kendal', '1990-10-22', '089656463000'),
('RM19100007', 'Muhammad Zaqi Apriadi', 'Mess Masehi', 'Islam', 'Pelajar', 'Pemalang', '2001-04-27', '082324515867'),
('RM19100008', 'Nur Aifi', 'Taman Bringin No 8 Ngaliyan', 'Islam', 'konsultan expor impo', 'Bogor', '1969-05-24', '081390389007'),
('RM19100009', 'Dinda Rafi Malikul Afuw', 'Mess Masehi', 'Islam', 'Pelajar', 'Tegal', '2002-05-03', '08563239079'),
('RM19100010', 'Rathana Bagus Tri Wardani', 'Mess Masehi', 'Islam', 'Pelajar', 'Boyolali', '2003-04-03', '081225551086'),
('RM19100011', 'Yefta Ofeliano Christiawan', 'Jl. Mandasia 3 No.373 Krapyak', 'Kristen', 'Pelajar', 'Semarang', '2005-07-02', '081225267780'),
('RM19100012', 'Marsudi Sukarno', 'Jl. Watugunung II No143 Krapyak', 'Islam', 'Pensiunan PNS', 'Kebumen', '1950-02-17', '081226010025'),
('RM19100013', 'Liestya Putri Ramadhani ', 'Jl. Kanguru Utara , Gayamsari', 'Islam', 'Mahasiswi', 'Demak', '1997-01-16', '089626002206'),
('RM19100014', 'Harsono', 'Jl. Griya Lestari B6 1A Ngaliyan', 'Islam', 'Swasta', 'Semarang', '1977-09-02', '081390417089'),
('RM19110001', 'Adi Irhandi Hidayat', 'Jl. Galungan Raya No. 43 krapyak', 'Islam', 'Mahasiswa', 'Ciamis', '1997-08-29', '082225982031'),
('RM19110002', 'Suprihatin', 'Jl. Pandan Lamper 2 No 314', 'Islam', 'Karyawan Swasta', 'Lampung', '1975-11-19', '08118817285'),
('RM19110003', 'Anton Fahrizal', 'Perumahan Bank Niaga Blok D4 Ngaliyan', 'Islam', 'Mahasiswa', 'Banyumas', '1999-08-05', '088213873507'),
('RM19110004', 'Dedi Setiawan', 'Kintelan', 'Islam', 'Karyawan Widya Husad', 'Semarang', '0000-00-00', ''),
('RM19110005', 'Farhan Bintang Firmansyah', 'Jl. Karangayu RT02 RW02 Cepiring, Kendal', 'Islam', 'Mahasiswa', 'Kendal', '1999-03-18', '08989663678'),
('RM19110006', 'Setyoko', 'Ds. Gendangan RT06 RW06 Boja, Kendal', 'Islam', 'Swasta (Garment)', 'Kendal', '1985-11-24', '085641744700'),
('RM19120001', 'Kristiani Budi Lestari', 'Jl. Ketileng Asri I Blok E No. 38 Semarang', 'Kristen', 'Swasta', 'Jakarta', '1991-05-27', '082138968846'),
('RM19120002', 'Sad Surya Angga', 'Perumahan Taman Marina No B3/13 Semarang Barat', 'Katholik', 'Pelajar', 'Yogyakarta', '2003-11-06', '081995060306'),
('RM19120003', 'Retno Indarsih', 'Jl. Subali Raya No.9 Semarang Barat', 'Islam', 'Ibu Rumah Tangga', 'Cilacap', '1967-09-25', '085842929293'),
('RM19120004', 'Harry Soedibyo', 'Jl. Hanoman Raya No. 28 Perumnas Krapyak', 'Islam', 'Pensiunan/maitenance', 'Jepara', '1952-07-27', '081381332349'),
('RM19120005', 'Maulana Rafi Ramadhan Fajar', 'Ds. Karangayu RT03 RW 03 Kec. Cepiring Kendal', 'Islam', 'Atlet', 'Kendal', '2000-12-09', '08980831365'),
('RM19120006', 'Natalina Harjanti', 'Jl. Welerang 1 No.52 Kec. Gajah Mungkur', 'Kristen', 'Administrasi Kampus', 'Surakarta', '1969-12-27', '0812282918'),
('RM19120007', 'Heri Martono', 'Jl. Plamongan Abadi No. A152 Pedurungan Kidul', 'Islam', 'Wiraswasta', 'Semarang', '1975-01-18', '081222399929'),
('RM19120008', 'Juneri', 'Jl. Stonen Timur Dalam 1 No 17 Gajahmungkur', 'Islam', 'Ibu Rumah Tangga', '', '1961-07-27', ''),
('RM19120009', 'Fransiscus Agustinus Mujiono', 'Perumahan Banyumanik Residence B2', 'Katholik', 'Aktivtas Pensiunan', 'Purwokerto', '1955-07-25', '085640102303'),
('RM19120010', 'Diar Krisdi Rosa', 'Griya Lestari Blok E4 No.9', 'Islam', 'PNS Puskesmas Krobok', 'Semarang', '1977-01-18', '081325001943'),
('RM19120011', 'Emelia Olva', 'Perum Sang Ratu Resident B07 Ungaran', 'Islam', 'Swasta', 'Semarang', '1971-08-27', '08112931777'),
('RM19120012', 'Denny Yusron', 'Perumahan Sang Ratu Residen', 'Islam', 'Karyawan Swasta', 'Palembang', '1974-06-22', '08112880602'),
('RM20010001', 'Charles De Hoog', 'Jl.Taman Adenia Raya N1-N2 Semarang Barat Tambakha', 'Kristen', 'Karyawan Swasta', 'Kupang', '1980-12-31', '081325474677'),
('RM20010002', 'Kusyati', 'Graha Padma L5 No 1 Taman Anyelir', 'Kristen', 'Ibu Rumah Tangga', 'Blora', '1951-04-08', '08122809949'),
('RM20010003', 'Ratnawati Widjaja', 'Anggrek 1 No.14 Semarang', 'Katholik', 'Wirausaha', 'Semarang', '1952-11-07', '085726672909'),
('RM20010004', 'Sigit Sugiharto', 'Jl. Kecipir Raya No. 6 Tambakaji', 'Islam', 'Karyawan Swasta', 'Purwokerto', '1978-11-19', '081215000213'),
('RM20010005', 'Bettania Heni Indriawati', 'Jl. Karonsih Selatan No 887 ngaliyan Semarang ', 'Katholik', 'Guru TK', 'Purworejo', '1984-08-17', '081802487861'),
('RM20010006', 'Sigit Priyo Nugroho', 'Perum Griya Wastu Kencana No. A3 Dewi Sartika Timu', 'Islam', 'Pensiunan Personalia', 'Semarang', '1974-08-08', '082136622900'),
('RM20010007', 'Oei Jonathan Christiano Putra', 'Plamongan Indah Blok H11 No.7', '', 'Pelajar', 'Semarang', '2005-12-15', '08886446484'),
('RM20010008', 'Imam Agus Prasetyo', 'Desa Telogo RT1 RW3 Kelurahan Jatibarang, Mijen', 'Islam', 'TNI AD', 'Semarang', '1991-08-25', '08562734558'),
('RM20010009', 'Isnaini Falupi', 'Jl. Sugriwo 7 No.15 Krapyak', 'Islam', 'Mahasiswi', 'Aceh Timur', '1999-02-24', '082268056449'),
('RM20010010', 'Farhan Rahman Permana', 'Jl. Bukit dingin 2 C6 No.5 Permata Puri, Ngaliyan', 'Islam', 'Pelajar', 'Semarang', '2004-08-22', '081298791807'),
('RM20010011', 'Suripto', 'RT1 RW1 Krajan Margosari Kec. Limbangan Kendal', 'Islam', 'Guru Matematika', 'Boyolali', '1977-02-01', '081325547713'),
('RM20010012', 'Ida Riwayati', 'Desa Mulyorejo, RT1 RW2 Kec.Demak', 'Islam', 'Ibu Rumah Tangga', 'Demak', '1974-06-06', '087831519233'),
('RM20020001', 'Aini zulaikah', 'Perum Graha Sapta Warokka', 'Islam', 'Guru/Ibu rumah tangg', 'Grobogan', '1992-04-28', '085740230404'),
('RM20020002', 'Sigit Lestaryana', 'Perum Jatisari Regency 2 Blok A 24 Mijen', 'Islam', 'TNI AD', 'Kulonprogo', '1992-08-27', '081390068093'),
('RM20020003', 'Yudhy Setiawan', 'Jl. Sugriwo 12 RT 4 RW 03 krapyak', 'Islam', 'PNS Dinsos', 'Semarang', '1977-07-26', '081228484869'),
('RM20020004', 'Laksamana Maulana Anugrah Putr', 'Jl. Permata Puri Blok D9 no. 5  Ngaliyan', 'Islam', 'Pelajar', 'Semarang', '2005-04-16', '08112723837'),
('RM20020005', 'Priharyanti Wulandari', 'Demak Wiku 2', 'Islam', '', 'Demak', '1985-02-16', '085712947004'),
('RM20020006', 'Elizabeth Wibawa', 'Kuala Mas 2 No. 68 Semarang Utara', 'Kristen', 'Karyawati Bank Panin', 'kendal', '1983-01-23', '089510877275'),
('RM20020007', 'Marsob', 'Jl. Bandungsari RT 04 RW 03 Bandungrejo Mranggen', 'Islam', 'PNS BK', 'Demak', '1965-05-12', '08152202077'),
('RM20020008', 'Lilik Hariyanto', 'Jl. Kintelan No 94', 'Islam', 'Swasta', 'Semarang', '1971-10-09', ''),
('RM20020009', 'Soehardi', 'Jl. Kenconowungu Tengah 5 No.36 RT 07 RW 04', 'Islam', 'Bapak Rumah Tangga /', 'Semarang', '1950-07-06', '081326257357'),
('RM20020010', 'MHAMMAD MUKHLISIN', 'Kos di daerah banyumanik', 'Islam', 'Mahasiswa', 'Pati', '2000-01-09', '082236445439'),
('RM20020011', 'Wahyu Budi Prasetyo', 'Krajan RT 1 RW 1 Ds. Margosari Limbangan Kendal', 'Islam', 'Wiraswasta', 'Kendal', '1991-04-05', '08562688876'),
('RM20030001', 'Bambang Pujianto', 'Graha Padma Blok Adenia no17', 'Kristen', 'Wiraswasta', 'Semarang', '1977-03-18', '081901722111'),
('RM20030002', 'Tien Indrayani', 'Bukit Dingin D1 A/16 Bringin Ngaliyan', 'Kristen', 'Ibu Rumah Tangga', 'Semarang', '1949-04-19', '085930319645'),
('RM20030003', 'Karlina Widyawardani ', 'Pandana Merdeka Blok S No.7 Ngaliyan', 'Islam', 'Freelance', 'Semarang', '1994-03-29', '089678001695'),
('RM20030005', 'Yosep Dwi Kristianto', 'Jalan grafika Barat dalam 1', 'Kristen', 'Karyawan Swasta', 'Pati', '1990-12-17', '085641888880'),
('RM20030006', 'David Priyanto', 'Jl. Parang Kembang V No.11 Semarang', 'Kristen', 'Karyawan Swasta Toyo', 'Semarang', '1987-06-08', '08170566420'),
('RM20060001', 'Agus Susanto', 'Semarang Indah Blok C 18 Nomor 6', 'Kristen', 'Wiraswasta', 'Demak', '1964-10-06', '082137739788'),
('RM20070001', 'Juned Tunggal Satriyo Mukti ', 'Parang barong VI no. 21 Tlogosari Semarang ', 'Islam', 'Pelaut', 'Blitar 13/06/1990', '0000-00-00', '082226560304'),
('RM20070002', 'Muh Azhar Fuadi ', 'Ds Babadan Kec Limpung Kab Batang', 'Islam', 'Pelajar', 'Batang', '2001-04-20', '082322377259 '),
('RM20070003', 'Blidex', 'Jl sugriwo Rt07 rw 03 krapyak semarang', 'Islam', 'Swasta', 'Semarang', '1998-05-06', '082250004483'),
('RM20070004', 'Dypta Angilino', 'Desa ketanggi RT 05 RW 02 kec rembang kab rembang', 'Islam', 'Wiraswasta', 'Rembang', '1999-12-08', '081229538660'),
('RM20070005', 'Tommy Mudiyantomo', 'Bukit Raya 43 Semarang', 'Islam', 'Pensiun', 'Semarang', '1958-01-22', '081914632001'),
('RM20070006', 'Muhamad Laili Rosid', 'Podorejo Rt 3/2 Ngaliyan Kota Semarang', 'Islam', 'Sabhara', 'Semarang', '1998-07-30', '082313714515'),
('RM20070007', 'Soemargono', 'Mijen Harmony Blok F No.11 Mijen Semarang Barat', 'Islam', 'Pensiun', 'Blora', '1946-08-03', '081325759333'),
('RM20080001', 'EmilyEliora', 'Jalan Seroja selatan 21 kota semarang', 'Kristen', 'Pelajar', 'Semarang', '2008-09-05', '0816666081'),
('RM20080002', 'Nur Muhammad', 'Jl. Wahyu Asri E105 RT 03 RW 06 Ngaliyan', 'Islam', 'Wiraswasta', 'Jakarta', '1985-07-11', '085696270127'),
('RM20080003', 'Alexander Christian', 'Ambarawa, Kabupaten Semarang', 'Katholik', 'Wiraswasta', 'Ambarawa', '1992-12-21', '087721020500'),
('RM20090001', 'Asnawi', 'Mijen Harmoni Blok B01 RT 04 RW 04 Mijen', 'Islam', 'Purnapensiun', 'Magelang', '1955-05-05', '081225580042'),
('RM20090002', 'Hasan Asyari', 'Ds. Margosari Limbangan Kendal', 'Islam', 'Satpam', 'Kendal', '1990-02-26', '087831134698'),
('RM20090003', 'Wahyu Widi Lestari', 'Perumahan Wahyu Utomo Jl. Wahyu Asri 13 No.1', 'Katholik', 'Ibu Rumah Tangga', 'Cilegon', '1985-05-29', '089678797494'),
('RM20100001', 'Eriana Dwikorahaju', '', 'Islam', 'Wirausaha', 'Semarang', '1964-10-31', ''),
('RM20110001', 'Lukmanto', 'Komplek Penerbad PudakPayung, Banyumanik', 'Islam', 'TNI', 'Wonosobo', '1994-05-10', '085291154321'),
('RM20110002', 'Daniel Adi Wicaksono', 'PR. Patah Blok H 2/8', 'Kristen', 'Karyawan Swasta', 'Pasuruan', '1988-06-30', '0822255900907'),
('RM20110003', 'Ahmat Roby', 'Jl. Sugriwo 2 Krapyak', 'Islam', 'Mahasiswa', 'Duka 2', '2000-06-30', '085758393787'),
('RM20120001', 'Rimal Herdianto', 'Jl. Subali 9 Krapyak Semarang Barat', 'Islam', 'Mahasiswa', 'Demak', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`username`, `pass`, `nama`) VALUES
('admin', '123', 'Yordhan'),
('Yordhan', '050696', 'Yordhan Dimas Yudhanta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa`
--

CREATE TABLE IF NOT EXISTS `periksa` (
  `noperiksa` varchar(12) NOT NULL,
  `norm` varchar(10) DEFAULT NULL,
  `kdterapis` varchar(10) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `keluhan` text,
  `sekarang` text,
  `dahulu` text,
  `pribadi` text,
  `td` double DEFAULT NULL,
  `hr` double DEFAULT NULL,
  `suhu` double DEFAULT NULL,
  `rr` double DEFAULT NULL,
  `skor` double DEFAULT NULL,
  `sistemik` text,
  `khusus` text,
  `radiologi` text,
  `emg` text,
  `lab` text,
  `lain` text,
  `fisioterapi` text,
  `terapi` text,
  `evaluasi` text,
  PRIMARY KEY (`noperiksa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `periksa`
--

INSERT INTO `periksa` (`noperiksa`, `norm`, `kdterapis`, `tgl`, `jam`, `keluhan`, `sekarang`, `dahulu`, `pribadi`, `td`, `hr`, `suhu`, `rr`, `skor`, `sistemik`, `khusus`, `radiologi`, `emg`, `lab`, `lain`, `fisioterapi`, `terapi`, `evaluasi`) VALUES
('1906-PR/0001', 'RM19070001', 'TR0102', '2019-06-05', '08:15:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1907-PR/0001', 'RM19070001', 'TR0102', '2019-07-09', '17:00:00', 'Sakit pinggang', 'Sakit pinggang', 'Sakit pinggang', 'Tidak Ada', 100, 80, 37, 10, 5, 'Sakit pinggang', 'Sakit pinggang', 'Sakit pinggang', 'Sakit pinggang', 'Sakit pinggang', 'Sakit pinggang', 'Sakit pinggang', 'Sakit pinggang', 'Sakit pinggang'),
('1907-PR/0002', 'RM19070001', 'TR0102', '2019-07-05', '08:15:00', 'Rematik', 'Rematik', 'Rematik', 'Rematik', 100, 100, 35, 100, 5, 'Rematik', 'Rematik', 'Rematik', 'Rematik', 'Rematik', 'Rematik', 'Rematik', 'Rematik', 'Rematik'),
('1907-PR/0003', 'RM19070001', '01', '2019-07-29', '10:15:00', 'Back Pain', '1 tahun yang lalu ada jatuh saat bertanding dan seketika sakit pinggang  sempat dipijat setelah itu aman. Mulai terasa belakangan ini setelah berbenturan dalam game basket, perawatan sekarang ini sudah sering penguatan sendiri namun masih sering terasa kaku saat pagi hari dan mulai nyaman ketika digerakkan perlahan.', 'Pernah ada overweight, BB sekarang sudah 75Kg dari tinggi 172cm', 'Atlet bola basket putri club sahabat semarang', 0, 0, 0, 0, 0, '', 'Ada tightness back muscle\r\nWeakness abdominal mucle\r\nTightness fleksor hip', '-', '-', '-', '-', 'Trigger Pain on Back muscle => Imbalance Core Muscles', 'Pain Management\r\nActive Core muscles\r\nRealese & Stretching Tight muscles\r\nCompress Ice', 'Penurunan nyeri dan keluasan lingkup gerak sendi trunk'),
('1908-PR/0001', 'RM19080001', '02', '2019-08-07', '13:00:00', 'Sering kesemutan pada tangan kanan sampai jari jari tangan, juga lutut sering terasa nyeri ketika untuk aktivitas dan sering bengkak pada lutut bawah', 'Ketika aktivitas sehari hari sering terasa sakit lutut dan bengkak, namun ketika sudah tidur dan tidak beraktivitas lutut kembali nyaman setiap harinya.\r\nUntuk Tangan kanan sudah berlangsung 1 tahun sering kesemutan dan mulai susah ketika aktivitas seperti memakai bra, menaikkan tangan kanan.', 'Operasi THR sudah 10 tahun lalu di Singapura\r\nPernah jatuh dan treatment THR dan ORIF pada paha kanan di Semarang', 'Pensiunan aktivitas rumah tangga', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1908-PR/0002', 'RM19080002', '02', '2019-08-27', '15:00:00', 'Kaki masih bengkak jadi kalau mau nekuk msh rasa ganjel. Jalannya terganggu', '13 Agustus 2019 ada operasi ACL dan Maniscus lutut sisi kiri. Dengan Graft Peroneus, sudah untuk Fisio di Esa Unggul Jakarta.', 'Ada Cedera lutut saat Game Basket (Prapon) di 5 Juli 2019', 'Hobi : Basket (Tim basket putri UNIKA)', 0, 0, 0, 0, 0, '', 'Memakai 2 Kruk dan Brace Post Op. Ligament\r\nROM aktif Knee 0-0-90 derajat', 'terlampir Joan 001', '-', '-', '-', 'Post Op. ACL dan Meniscus Sinistra', 'Mengikuti protokol post Op. ACL with peroneus graft', ''),
('1908-PR/0003', 'RM19080003', '01', '2019-08-29', '09:15:00', 'Perut bergelambir setelah melahirkan (Post natal 9 bulan)', '9 bulan lalu ada melahirkan anak kedua, lalu ibu merasa perutnya melebar setelah melahirkan', '-', 'Pekerjaan BUMN', 0, 0, 0, 0, 0, '', 'Inspeksi : Otot perut terlihat menggelambir', '-', '-', '-', '-', 'Diastesis Recti', 'Aktivasi otot rectus abdominis, exercise core muscles', ''),
('1909-PR/0001', 'RM19090001', '01', '2019-09-02', '17:00:00', 'Post Op. ACL', 'Operasi ACL 17 Agustus 2019 di RS. Kariyadi. Belum ada penanganan rehabilitasi. Sekarang 30 derajat fleksi dan belum full ROM', 'Aktivitas Sepak bola ada cedera twisting pada 4 Januari 2019 dan diindikasi cedera ACL', 'Hobi : Sepak Bola', 0, 0, 0, 0, 0, '', '', '', '-', '-', '-', 'Post. Op. ACL', 'Protokol Post. Op. ACL', ''),
('1909-PR/0002', 'RM19090002', '01', '2019-09-04', '13:15:00', 'Nyeri Pinggang dan Punggung Belakang', 'sudah 2 bulan lalu terasa sakit pinggang ketika duduk lama dan bungkuk', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', 'Back Pain miogenik', '', ''),
('1909-PR/0003', 'RM19090007', '01', '2019-09-17', '14:45:00', 'Pinggang belakang kurang nyaman', 'Jatuh dengan tumpuan kaki kanan, sehingga kaki sebelah kiri terasa kurang nyaman hingga ke pinggang. Belum ada penanganan apapun, sudah ke konsultasi ke dokter dengan hasil pegal/kencang saja diotot punggung beakang', '1 november 2018 Post Op ACL sinistra', 'Aktivitas mengajar / Guru', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1909-PR/0004', 'RM19090009', '01', '2019-09-21', '08:30:00', 'Nyeri pada lutut kiri, susah nekuk lututnya', '3 hari yang lalu, setelah turun dari motor ada rasa yg tidak nyaman pada lutut. Belum ada penanganan berlebih hanya konsumsi bubuk kolagen.', '8 tahun lalu pernah didiagnosa oleh dokter jika menderita Ostoathritis Sendi Lutut', 'Hobi : Badminton, Masih sering dilakukan penguatan otot paha.', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1909-PR/0005', 'RM19090010', '01', '2019-09-25', '08:15:00', 'samping lutut kaki sisi kanan merasa tidak nyaman, lebih ke ngilu', 'Sudah 1 bulan lalu pernah accident benturan di area lutut ketika sepak bola dan seketika bengkak. Pernah dibawa ke dokter dgn diagnosa tendonnya luka pada bagian medial dan diberikan terapi terapi medicine saja. Sampai saat ini blm konsul dokter lagi dan datang ke fisioterapi', '', 'Hobi : Pesepak Bola (Tim UMS)', 0, 0, 0, 0, 0, '', '', 'Hasil rontgen kaki kanan saja : tidak menunjukkan kelainan berlebih', '', '', '', 'Fracture Medial Femur / Meniscus medial injured', '', ''),
('1909-PR/0006', 'RM19090013', '01', '2019-09-26', '12:15:00', 'Ga nyaman pada lutut sisi kanan, ketika diluruskan lutut terasa ganjal pada persendian', '2017 akhir ada cedera ketika main futsal, ketika deselerasi dan lutut terkunci di fleksi. Selama ini sudah ke dokter didiagnosa ligamentnnya bermasalah dan diberikan medicine saja. Pernah di pijat tahun 2018 dan nyaman jg menurunkan bengkak.\r\nSekarang ini tidak nyaman, untuk aktivitas pun jg sakit seketika', 'pernah kecelakaan dan bengkak pada lutut', 'Hobi : Futsal, Basket, Home Exercises', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1910-PR/0001', 'RM19100001', '02', '2019-10-04', '13:15:00', '1.lutut kanan-kiri nyeri ketika menekuk sakit, terkadang locking pada lutut,terutama aktifitas ringan pada kaki kanan, \r\n2.wrist kiri Dislokasi pada thumb kiri kerah medial.\r\n3. tumit kanan terasa nyeri setelah aktifitas berat.', '', 'wrist kiri Dislokasi pada thumb kiri kerah medial 2 minggu lalu\r\nlutut kiri 1 tahun\r\nlutut kanan 3 bulan lalu keduanya indikasi meniscus\r\nkiri meniscus lateral dan kanan meniscus medial', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1910-PR/0002', 'RM19100002', '01', '2019-10-05', '09:30:00', 'Ga nyaman lutut kiri, masih kaku untuk di tekuk. Ketika malam hari lutut terasa linu', '21 sept 2019 malam terpeleset dari motor, tidak bisa dilurusin dan berdiri setelah itu. 25/9/2019 dibawa ke rumah sakit dan didiagnosa Ruptur ACL sinistra dan Suspect Sprain PCL sinistra', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1910-PR/0003', 'RM19100003', '01', '2019-10-10', '09:30:00', 'Ankle kiri merasa ga nyaman, untuk pijakan pertama suka sakit', '1 bulan lalu ada jatuh pas maen bola, ketika landing surface tidak datar dan jatuh. sudah pijat dan diberi obat oles. Ketika jalan masih tidak nyaman', 'Sering cedera ankle kanan kiri', 'Hobi : Sepak bola', 0, 0, 0, 0, 0, '', '', '-', '-', '-', '-', '', '', ''),
('1910-PR/0004', 'RM19100004', '02', '2019-10-11', '10:00:00', 'Nyeri gerak Knee kanan-kiri\r\nLGS Knee terbatas kanan :120 Kiri : 78\r\nKelemahan otot Quadriceps, Hamstring, Gluteal, dan gastrocnemius', 'Osteoathritis Knee Kanan Kiri\r\nPost TKR 30 September 2019', 'Osteoathritis Grade 4 Kanan dan grade 3 Kiri', 'Hipertensi dan rutin minum obat Amodipin 5mg sehari 1x', 0, 0, 0, 0, 0, 'Odema knee dextra dan sinistra\r\nNyeri kaki kanan, kiri', '', '', '', '', '', '', 'Strenthening exercise for daili living', ''),
('1910-PR/0005', 'RM19100006', '01', '2019-10-12', '08:30:00', 'Pinggang belakang tidak nyaman untuk gerakan rukuk. Lutut bagian belakang terasa tertarik', 'Seminggu lalu sesering nongkrong, mulai terasa ga nyaman. 2 hari yang lalu ada aktivitas mengangkat papan/kayu. setelah itu terasa ga nyaman sekali. Sudah penanganan dari dokter yaitu medica mentosa dan sekali fisioterapi', 'Sudah berlangsung cukup lama utk sakit pinggangnya', 'Hobi : Nongkrong', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1910-PR/0006', 'RM19100007', '01', '2019-10-16', '14:30:00', 'ga nyaman di lutut, posisi duduk diantara 2 sujud. Untuk lari unstabil', 'pertama jatuh 28 Sept 2019 saat landing diganggu musuh dan lutut kanan seperti mau rotasi keluar. Sempat bengkak sudah dikompress dan di pijat, masih nyaman untuk main basket. Ketika posisi start up di game tiba tiba lututnya ngunci di fleksi. seketika stop main.', 'Pernah ada cedera lutut kanan', 'Hobi : Basket ball', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1910-PR/0007', 'RM19100008', '01', '2019-10-17', '16:45:00', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1910-PR/0008', 'RM19100009', '01', '2019-10-17', '15:30:00', 'Ankle kiri ada rasa tidak nyaman', '4 bulan lalu ada accident habis mendarat ketika landing ankle kiri tidak seimbang dan twisting.\r\nSudah pernah dipijat. Sekarang ini kalau untuk bermain basket tidak lincah', '-', 'hobi : basketball', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1910-PR/0009', 'RM19100010', '01', '2019-10-17', '15:45:00', 'Ankle kanan tidak nyaman, dorsi fleksi terbatas dan untuk lompat sakit anklenya', 'sudah berlangsung setengah tahun lalu, waktu landing menabrak spon posisi kaki dorsi fleksi. sekarang masih terasa sakit pada ankle belakang. pernah dibawa pijat namun sama saja', '-', 'Hobi : Basketball', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1910-PR/0010', 'RM19100012', '01', '2019-10-24', '16:00:00', 'Sekarang ini susah untuk jalan pakai tongkat 1', 'serangan stroke pertama 2011 masih bisa jalan fase rehabilitasi 10 hari, stroke kedua ditahun 2015 rehabilitasi 23 hari. Ada penanganan fisioterapi lanjutan dirumah dan bisa jalan tanpa tongkat walau tidak cepat.\r\n6 bulan lalu pernah jatuh dikamar mandi dan menjadi lebih susah sampai sekarang bisa jalan menggunakan tongkat', '', 'aktivitas fungsional bisa mandiri. sebulan sekali ke penyakit dalam di colombia\r\nmedica mentosa : kandesartan, norfas, glimeperid, glubose\r\nhipertensi (+) terkontrol\r\ndiabetes (+) terkontrol', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1911-PR/0001', 'RM19110001', '01', '2019-11-04', '13:45:00', 'Merasa postur tidak simetris, depresi bahu kanan terlihat.\r\nLutut kiri tidak nyaman jika untuk lebih dari 45 menit', '11 bulan kemarin baru mulai untuk aktivitas fisik lari, sudah sering terasa ga nyaman. begitu pula kedua ankle\r\npernah daftar TNI dan lihat untuk bahu tidak simetris, dari situ tidak ada penanganan apapun sampai sekarang', '', '- Kuliah\r\n- Lari, Renang', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1911-PR/0002', 'RM19110005', '01', '2019-11-28', '09:45:00', 'Ankle ga nyaman sakit, lutut bagian luar masih terasa sakit, paha atasnya terasa ga nyaman area kaki sisi kanan', '1 bulan lalu ankle pernah kena pool sepatu bola diarea tulang kering distal sisi dalam, 2 minggu lalu sebelum turnament sering latihan untuk fisik termasuk sprint, 1 minggu ketika decelerasi bawa bola dilapangan terasa lutut kanan ganjal, hanya merasa tidak nyaman sampai sekarang.\r\nBelum pernah berobat ke dokter, hanya sering pijat', '', 'Hobi : Sepak bola dan futsal. Kuliah di UNIS Kendal', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1912-PR/0001', 'RM19120001', '01', '2019-12-02', '14:15:00', 'Rasa tidak nyaman area leher dan bahu, sering merasa sakit kepala seperti pusing kedua sisi kepala.', 'Sudah bertahun tahun merasa tidak nyaman di', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1912-PR/0002', 'RM19120002', '01', '2019-12-04', '18:45:00', 'Nyeri pada Ankle kiri', 'Kemarin jatuh saat latihan basket, lalu nyeri dan sempat dikompress air hangat dan minum obat cataflam', 'Sering cedera pada ankle kiri dan kanan', 'Beasiswa Basket : SMA Terang Bangsa Semarang', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1912-PR/0003', 'RM19120003', '04', '2019-12-09', '09:00:00', 'Jari tengah terasa kaku ketika ditekuk dan susah untuk dikembalikan/luruskan. Pas genggam terasa sakit menjalar ke leher. Sempat mengeluh leher juga berat', 'Februari pertama terasa sakit jika untuk aktivitas, ke dokter sempat diberikan terapi medicine, sempat fisio di Rumah Sakit dan klinik Fisio, dengan hasil membaik namun kembali lagi sakit sampai sekarang ini', '-', 'Ibu rumah tangga', 125, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1912-PR/0004', 'RM19120004', '01', '2019-12-09', '10:00:00', 'Nyeri Pinggang kiri sampai ke paha', 'tanggal 7 pagi habis angkat barang berat, malamnya tidak nyaman/sakit. sudah ke dokter dan diberikan obat', '5 bulan yang lalu terasa sakit dipinggang, Berobat ke hermina jakarta dan sembuh', 'hobi : Renang tidak rutin, treadmill/jalan 1 minggu sekali', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1912-PR/0005', 'RM19120005', '01', '2019-12-10', '09:45:00', 'Senut-senut diarea paha depan bagian atas kaki sisi kiri', '2 minggu lalu waktu pertandingan bola dalam 80 menit pertandingan setelah counter ada lari seketika terasa tidak nyaman pada paha depan. Setelah game sudah dikompress ice enakan, dan mulai membaik tidak dengan penanganan apapun. 5 hari yang lalu ada main lagi dan terasa senut sampai sekarang. Ketika jalan sering terasa masih senut, ketika duduk terasa nyaman', '-', 'atlet sepak bola\r\nsampingan tidak rutin latihan pelari sprint : terakhir lari November', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1912-PR/0006', 'RM19120006', '01', '2019-12-16', '15:15:00', 'Tidak nyaman pada jari telunjuk kanan bagian MIP', '3 Minggu lalu terasa sakit, paginya habis memakai jari telunjuk kanan menahan benda dapur dan siangnya mulai hangat dan sakit. diberi minyak kayu putih dan belum ada penanganan lain', '', 'Karyawati Stikes bagian Administrasi', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1912-PR/0007', 'RM19120007', '01', '2019-12-19', '13:30:00', 'Bahu tidak nyaman terasa kaku dan sakit sampai ke leher', '4 tahun lalu, ketika main badminton terasa sakit ketika overhead dan masih dilanjut main, setelah itu tidak dilakukan penanganan apapun dan masih dilanjut bermain badminton. Senin kemarin habis main badminton terasa sakit sekali dan stop main. Sering pijat dan merasa lebih enak', '-', 'Hobi : Badminton (1 minggu sekali)', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1912-PR/0008', 'RM19120008', '01', '2019-12-26', '09:30:00', 'bahu kanan tidak nyaman dan sakit', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1912-PR/0009', 'RM19120009', '01', '2019-12-27', '09:30:00', 'Masih susah untuk jalan, ankle susah untuk digerakkan atau lemas. tungkai bawah terasa kesemutan', '2,5 tahun lalu kaki kiri sakit, terus periksa ke dokter saraf dan masih bisa jalan dengan kruk satu. Sering jatuh ketika pakai satu kruk. Pertengahan Januari 2018 tiba tiba lumpuh di kedua kaki 2 bulan mulai membaik, setelah dipijat, tusuk jarum dan kontrol dokter saraf. Perkembangan mulai membaik walau ankle blm terlalu bisa dorsi fleksi.', 'glukosanya tinggi', 'Pensiunan Dinas Pekerjaan Umum (bagian lapangan) dan konsultan 2017', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('1912-PR/0010', 'RM19120010', '01', '2019-12-27', '12:15:00', '3 bulan lalu, pertama kalinya bangun tidur terasa sakit dan tidak bisa digerakkan bagian bahu. Mulai kemarin terasa sakit di kedua bahu.', '3 bulan lalu mulai terasa sakit, penanganan sempat sekali fisio dan diberikan home exercise area bahu.', 'Kolesterol tidak terkontrol', 'Pekerjaan Bidan di Puskesmas (aktivitas seharian bermotor laju ngaliyan-krobokan 30 menit) kuantitas kerja seharian duduk.', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2001-PR/0001', 'RM20010001', '01', '2020-01-03', '08:15:00', 'Telapak Kaki tidak nyaman yang menjalar ke pantat, bagian bahu terasa tebal dan sering sakit yang menjalar kebagian tangan, hanya tubuh sisi kanan', 'sudah 1 tahun lalu terasa sakit dibagian jempol, tidak dilakukan penanganan apapun dan skrng ini merasa sakit menjalar dari telapak kaki sampai ke pantat. Mengikuti area bahu yang sering pegal dan sakit yang menjalar ke tangan. tidak nyaman ketika dipakai jalan dan nyaman ketika istirahat tidak menumpu berat badan', '', 'pegawai cafe : casier dan customer service', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2001-PR/0002', 'RM20010002', '01', '2020-01-07', '15:00:00', 'Pinggang sakit menjalar ke kedua kaki', 'sudah setengah tahun lalu merasa sakit dipinggang belakang menjalar sampai kaki dan merasa sakit jika jalan. Periksa ke dokter saraf dan didiagnosa LBP at. Spondylosis T12-L1, juga kesan Rontgen Oktober 2019 osteoporosis minimal area T8-12.', '', 'Ibu Rumah Tangga, Aktivitas fisik nihil', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2001-PR/0003', 'RM20010003', '02', '2020-01-08', '08:45:00', 'nyeri dan kterbatasan lgs,', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2001-PR/0004', 'RM20010005', '01', '2020-01-11', '12:00:00', 'Pinggang belakang sakit', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2001-PR/0005', 'RM20010006', '01', '2020-01-14', '11:45:00', 'Drop Foot, rasanya keram semua belakang kaki', '2014 jatuh terduduk dan beberapa hari hilang sakitnya. 2017 kaki bawah terasa tidak nyaman kelamaan makin kencang dan diagnosa Spasme otot dan dirujuk fisio sempat nyaman, setelah beberapa bulan terasa lagi dan ganti dokter jg di diagnosa tumor di bagian pantat. Dilakukan operasai pengangkatan tumor 16 Sept 2019, sempat mulai fisio di Kariyadi 4 pertemuan.', 'Ketika kerja sering terasa pegal di pinggang sampai sekarang, futsal badminton', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2001-PR/0006', 'RM20010008', '01', '2020-01-23', '09:45:00', 'Post Op. ACL + lateral Meniscus : Nyeri lutut, nekuk lutut belum full', 'Pertama kali cedera 7 Agustus 2019, sudah dilakukan pre operasi program di RS. Kariyadi dan 15 Oktober 2019 telah dioperasi Rekonstruksi  ACL Autograft patellar tendon + meniscus. Sudah dilanjut fisioterapi/program rehabilitasi di RS. Kariyadi', '', 'aktivitas fisik : lari\r\nhobi : sepak bola, voli, bulu tangkis', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2001-PR/0007', 'RM20010010', '01', '2020-01-24', '14:30:00', 'Ankle kiri bengkak dan dipakai jalan sakit', '22/1/2020 Ketika main voli ada lompat dan mendarat yang salah seketika ankle berputar dan sakit. diberi penanganan pijat dan membuat ankle membengkak. Diminumin obat antalgin.', 'Sering terkena ankle nya kanan dan kiri , penanganannya sering dipijat', 'Pelajar SMA N 6 Semarang', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2001-PR/0008', 'RM20010011', '01', '2020-01-28', '15:00:00', 'Sakit di ankle kiri dan bengkak, lemah sisi AGB kiri, AGA lebih baik', '2 tahun terkena serangan stroke dan kecelakaan motor.', 'Hipertensi (terkontrol)\r\ntrakeatomy\r\npatah tulang panggul', 'Fisioterapis&Occupational Therapy juga Dokter Saraf\r\nPijat', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2001-PR/0009', 'RM20010012', '01', '2020-01-30', '14:00:00', 'Nyeri di pipi kiri,', 'November 2018 kecalakaan', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2001-PR/0010', 'aknar fird', '02', '2020-01-30', '14:30:00', 'ada nyeri ketika menengok kanan dan kiri, sudah 3 sd 4 bulan.', 'sakit di leher bagian kiri, awalnya di bahu, akibat latihan pull up. beberapa bulan yang lalu', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2002-PR/0001', 'RM20020002', '01', '2020-02-12', '11:30:00', 'Nyeri di paha belakang, sisi kanan. Kalo untuk lari terasa nyeri juga', '10/2/2020 terasa bengkak seketika setelah duduk lama 7 jam perjalanan. sekarang ini masih nyeri, sudah sempat kompress ice, rendam air putih panas + garam, tapping. balsem dan koyo pernah dipake. nyaman disemprot pake metanol dan kompress ice.', 'Desember 2019 pernah nyeri paha belakang dikompress ice hari ketiga sembuh, selang 2 minggu main dan sprint ada sakit lagi dipaha belakang.', 'Latihan fisik (selasa & rabu)\r\nLari 5KM terakhir desember : Ketika lari mulai terasa sakit sampai akhir finish', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2002-PR/0002', 'RM20020004', '02', '2020-02-18', '16:15:00', 'Lutut kiri nov saat landing terasa sakit,saat aktivitas sedang masih ada nyeri, dan saat squat sakit, saat naik turun tangga sakit.', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2002-PR/0003', 'RM20020009', '01', '2020-02-28', '10:00:00', 'Nyeri belikat sampai lengan atas, Kaki kanan mulai dari pantat terasa sakit ketika duduk lama', 'sudah 3 minggu lalu saat bangunkan istri terasa sakit di bahu, penanganan yang sudah dilakukan diberi GPU, pijat sendiri hasilnya menurun sesaat sakitnya.\r\nKetika diangkat bahunya terasa sakit dan semakin lama lebih sakit.', '', 'Merawat ibu dirumah', 0, 0, 0, 0, 0, '', '', 'foto rontgen lengan atas baik', '', '', '', '', '', ''),
('2002-PR/0004', 'Muhammad M', '02', '2020-02-28', '13:00:00', 'lutut kanan dan kiri sakit, lari, jumping sakit, naik tangga sakit,squat sakit', '', '', '', 0, 0, 0, 0, 6, '', '-', '-', '-', '-', '-', '-', 'exercises, dan us tens', ''),
('2002-PR/0005', 'RM20020010', '02', '2020-02-28', '13:15:00', 'lutut kanan dan kiri sakit, lari, jumping sakit, naik tangga sakit,squat sakit', '', '', '', 0, 0, 0, 0, 0, '', '', '-', '-', '-', '-', 'PFPS', 'exercises, US dan TENS', ''),
('2002-PR/0006', 'RM20020011', '01', '2020-02-29', '08:15:00', 'Post Op. ACL + Meniscus', 'Ketika Desember 2019 tumpuan squat pasien ditabrak badan dari belakang dan jauh dengan lutut memutar kedalam. Pertama Konsultasi 17 Januari 2020, 7 Februari 2020 dilakukan operasi rekontruksi ACL dan meniscus lutut kiri. Setelah 3 minggu baru pertama kali Fisioterapi.', 'Cedera Ankle, Pinggang pernah cedera dan nyeri ketika bangun tidur.', 'Sepak bola 1-2 kali per minggu, tergantung intensitas tournament', 0, 0, 0, 0, 0, '', '', 'terlampir', '', '', '', '', '', ''),
('2003-PR/0001', 'RM20030001', '02', '2020-03-02', '18:30:00', 'Pinggang sakit, sempat tidak bisa jalan dan sekarang sudah membaik hanya terasa sakit kadang2.', '', 'sakit pinggang sudah lima tahun hobi olahraga gym', 'pernah jatruh saat backup.', 110, 68, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2003-PR/0002', 'RM20030002', '01', '2020-03-06', '10:30:00', 'Sakit di area mata kaki, kaki sisi kiri', '1 minggu lalu seketika mau jalan sakit dan terlihat bengkak. diberi penanganan obat oles sampai hari ini belum ada penurunan rasa sakit dan bengkak msh terlihat', '', 'melakukan Pelayanan Gereja dan pekerjaan rumah tangga', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2003-PR/0003', 'RM20030003', '01', '2020-03-10', '13:15:00', 'PInggang Belakang terasa sakit, tidak menjalar sampai kaki', '5 hari lalu terasa sakit seketika untuk mengangkat benda 6kg. dan terasa nyeri di pinggang hingga hari ini. sudah dicoba untuk diberi kerokin, koyo belum membaik sampai saat ini.', 'Punggung atas terasa sakit 1 tahun lalu.', 'memasak, mencuci', 132, 108, 0, 0, 8, '', '', '', '', '', '', '', '', ''),
('2003-PR/0004', 'RM20030004', '03', '2020-03-10', '13:45:00', 'cb', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2003-PR/0006', 'RM20030005', '02', '2020-03-12', '15:30:00', 'lutut kiri saat futsal tdk nyaman, saat sprint searasa tidak ada tumpuan, tidak ada bengkak, namun masih tearsa tidak nyaman sampai saat ini dan saat aktifitas rngan seperti menekuk lutut seperti ada yang ganjel.', '', '', 'futsal 8bulanan jatuh pada lutut dan sempat pijat dan rest tidak olahraga berat  selama beberapa bulan', 146, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2006-PR/0001', 'RM20060001', '01', '2020-06-30', '08:00:00', 'lengan dan bahu tidak nyaman, leher terasa kaku.', 'terasa kaku dileher sudah lama, 3 bulan', '', 'Usaha Transportasi\r\ndiabetes (terkontrol)', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2007-PR/0001', 'RM20070001', '01', '2020-07-02', '12:45:00', 'Bahu ada sakit\r\nPunggung atas juga terasa kencang', '6 bulan lalu waktu bench press waktu positif setengah gerakan ada rasa sakit, hanya diberikan counterpain selama ini dan tetap lanjut gym dengan beban yg diturunkan', '', 'Personal Gym, kerja di pelaut', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2007-PR/0002', 'RM20070002', '01', '2020-07-14', '07:30:00', 'Post Re-Rekontruksi ACL Sinistra', 'Sudah 2018 lalu cedera lutut waktu bermain futsal, awal dimulai periksa ke dokter 2019, diputuskan untuk MRI dgn kesan tear meniscus medial setelah operasi selang 10 hari dioperasi ulang 1 untuk penggantian ligament ACL. Operasi ACL 7 Juli 2020', '', 'Pemain Amatir Futasl\r\nMahasiswa di Semarang', 0, 0, 0, 0, 0, '', '', 'terlampir', '', '', '', 'Rehablititasi Post Op. ACL', 'Mengikuti protokol Rehabilitasi ACL + Meniscus', ''),
('2007-PR/0003', 'RM20070005', '01', '2020-07-22', '11:00:00', 'Pegal di pundak, sering terasa kesemutan menjalar ke lengan di pagi hari', 'sudah 2 tahun lalu di nyatakan spondylosis cervical 4&5, dgn c5 spur. didokter dianjurkan untuk melakukan medika mentosa\r\npernah menjalani fisioterapi dan hidroterapi sebelumnya', '', 'Seorang pensiun\r\nterakhir gym 4 tahun lalu', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2008-PR/0001', 'RM20080001', '02', '2020-08-05', '15:30:00', 'Ankle kiri, sudah dirasakan sejak setahun yang lalu dan mengalami kekambuhan dalam beberapa hari ini.', '', 'riwayat landing yang salah, benturan saat olahraga taekondo, dan pernah terkilir saat lomba.', '', 0, 0, 0, 0, 0, '', '', 'MRI tidak terlihat ada masalah pada jaringan lunak pada desember 2019', '', '', '', '', '', ''),
('2008-PR/0002', 'RM20080002', '01', '2020-08-31', '14:00:00', 'Nyeri lutut depan', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
('2008-PR/0003', 'RM20080003', '02', '2020-08-31', '14:45:00', 'post op meniscus 19 Agustus 2020 sisi Kanan (R) Odem, Nyeri Gerak.', 'Benturan saat bermain sepak bola 2 bulan lalu, dan sekarang sudah melakukan operasi meniscus lateral R', '', '', 0, 0, 0, 0, 0, '-', '-', 'ada, hasil Meniscus tear lateral dextra.', '-', '-', '-', 'post OP meniscus Lateral R', 'Exc, pain manaemen. rom excs', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `nourut` int(11) DEFAULT NULL,
  `noperiksa` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `terapis`
--

CREATE TABLE IF NOT EXISTS `terapis` (
  `kdterapis` varchar(10) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `tmplhr` varchar(20) DEFAULT NULL,
  `tgllhr` date DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`kdterapis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `terapis`
--

INSERT INTO `terapis` (`kdterapis`, `nama`, `tmplhr`, `tgllhr`, `alamat`, `telp`) VALUES
('01', 'Yordhan Dimas Yudhanta', 'Grobogan', '1996-06-05', '', '089532427478'),
('02', 'Akhmad Alfajri Amin', '', '0000-00-00', '', ''),
('03', 'Zainal Abidin', '', '0000-00-00', '', ''),
('04', 'Ovika Dyah Wulandari', '', '0000-00-00', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
