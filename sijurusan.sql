-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Sep 2021 pada 05.54
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sijurusan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asistensi`
--

CREATE TABLE `asistensi` (
  `asistensi_id` int(20) NOT NULL,
  `asistensi_waktu` datetime(6) NOT NULL,
  `mhs_nrp` int(20) NOT NULL,
  `dosen_id` int(20) NOT NULL,
  `mhs_judulproposal` int(50) NOT NULL,
  `asistensi_note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bim_lainnya`
--

CREATE TABLE `bim_lainnya` (
  `mhs_nrp` int(20) NOT NULL,
  `keperluan` text NOT NULL,
  `Judul_proposal` text NOT NULL,
  `dsn_nip` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bim_magang`
--

CREATE TABLE `bim_magang` (
  `id_magang` int(20) NOT NULL,
  `mhs_nrp` int(20) NOT NULL,
  `judul_magang` text NOT NULL,
  `dsn_nip` int(20) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bim_tugasakhir`
--

CREATE TABLE `bim_tugasakhir` (
  `id_tugasakhir` int(20) NOT NULL,
  `mhs_nrp` bigint(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `dsn_nip` bigint(20) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `dsn_nip` bigint(20) NOT NULL,
  `dsn_nama` text NOT NULL,
  `dsn_alamat` text NOT NULL,
  `dsn_thn_masuk` int(11) NOT NULL,
  `dsn_status` int(11) NOT NULL,
  `Jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`dsn_nip`, `dsn_nama`, `dsn_alamat`, `dsn_thn_masuk`, `dsn_status`, `Jabatan`) VALUES
(0, 'wewe', 'ewrwe', 2222, 1, 0),
(4444, 'bary', 'baru', 2222, 1, 0),
(123123, 'wewe', 'ewrwe', 2222, 1, 0),
(1990201711060, 'Ciptian Wiried P', 'Blitar', 2017, 1, 0),
(1992202011021, 'Joko Priambodo', 'Jl Kertajaya no 5 Jombang', 2020, 1, 0),
(1995202011025, 'Dwiky Fajri Syahbana', 'Surabaya', 2020, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Kadep'),
(2, 'Administrasi Persuratan'),
(3, 'Administrasi Keuangan'),
(4, 'Administrasi Inventaris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mhs_nrp` bigint(15) NOT NULL,
  `mhs_nama` varchar(50) NOT NULL,
  `mhs_alamat` varchar(50) NOT NULL,
  `mhs_angkatan` int(10) NOT NULL,
  `mhs_status` int(3) NOT NULL,
  `mhs_nohp` int(20) NOT NULL,
  `mhs_email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`mhs_nrp`, `mhs_nama`, `mhs_alamat`, `mhs_angkatan`, `mhs_status`, `mhs_nohp`, `mhs_email`) VALUES
(10311710000001, 'FERRY IRAWAN', 'Surabaya', 2017, 1, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE `masuk` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masuk`
--

INSERT INTO `masuk` (`user`, `pass`, `status`) VALUES
('0000', '1234', 2),
('10311710000001', '1234', 3),
('121331000000000', '1234', 4),
('123', '123', 1),
('123123', '1234', 4),
('197410262009101001', '1234', 4),
('1992202011021', '1234', 2),
('2211', '1234', 3),
('4444', '1234', 2),
('dosen', 'dosen', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `persuratan`
--

CREATE TABLE `persuratan` (
  `ID` int(11) NOT NULL,
  `Pemohon` bigint(20) NOT NULL,
  `Keperluan` text NOT NULL,
  `Status` int(11) NOT NULL,
  `No_Surat` varchar(20) NOT NULL,
  `File_Surat` varchar(20) NOT NULL,
  `Data` varchar(255) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `persuratan`
--

INSERT INTO `persuratan` (`ID`, `Pemohon`, `Keperluan`, `Status`, `No_Surat`, `File_Surat`, `Data`, `Created_at`, `Updated_at`) VALUES
(1, 123123, 'Magang', 10, '', '', '', '2021-04-21 01:18:13', '2021-04-21 01:18:34'),
(3, 1992202011021, 'Permohonan Surat Pengajuan Magang', 0, '', '', '', '2021-04-21 03:53:09', '2021-04-21 03:53:09'),
(26, 0, '12121wewew', 0, '', '1598440281407769-0.j', '', '2021-05-18 08:24:47', '2021-05-18 08:24:47'),
(27, 12121, '12121wewew', 0, '', '1598440281407769-0.j', '', '2021-05-18 08:25:23', '2021-05-18 08:25:23'),
(28, 0, 'FARHAN', 0, '', '901285-1000xauto-lim', '', '2021-05-18 08:27:26', '2021-05-18 08:27:26'),
(29, 0, 'FARHAN', 0, '', '901285-1000xauto-lim', '', '2021-05-18 08:28:46', '2021-05-18 08:28:46'),
(30, 0, 'hhhhhhhhhh', 0, '', 'Capture.PNG', '', '2021-05-18 08:30:28', '2021-05-18 08:30:28'),
(31, 0, 'percobaan89898', 0, '', '901285-1000xauto-lim', '', '2021-05-19 03:29:51', '2021-05-19 03:29:51'),
(32, 0, 'percobaan4', 0, '', '423998_620.jpg', '', '2021-05-19 03:30:56', '2021-05-19 03:30:56'),
(33, 0, 'percobaan4', 0, '', '423998_620.jpg', '', '2021-05-19 03:33:43', '2021-05-19 03:33:43'),
(34, 0, 'percobaan123', 0, '', 'hqdefault.jpg', '', '2021-05-19 03:34:39', '2021-05-19 03:34:39'),
(35, 0, 'percobaan123', 0, '', '901285-1000xauto-lim', '1', '2021-05-19 04:02:55', '2021-05-19 04:02:55'),
(36, 0, 'percobaan123', 0, '', '901285-1000xauto-lim', '1', '2021-05-19 04:18:40', '2021-05-19 04:18:40'),
(37, 0, 'percobaan123', 0, '', 'Coba 2d.jpg', '', '2021-05-19 04:23:37', '2021-05-19 04:23:37'),
(38, 0, '9999996', 0, '', '901285-1000xauto-lim', '', '2021-05-19 04:26:12', '2021-05-19 04:26:12'),
(39, 0, 'mn', 0, '', 'Kartu Ucapan Idul Fi', '', '2021-05-19 06:54:11', '2021-05-19 06:54:11'),
(40, 0, 'percobaan5', 0, '', '901285-1000xauto-lim', '', '2021-05-19 07:15:14', '2021-05-19 07:15:14'),
(41, 0, 'percobaan123123', 0, '', 'Capture.PNG', '', '2021-05-19 07:16:54', '2021-05-19 07:16:54'),
(42, 0, 'percobaan000', 0, '', '1598440281407769-0.j', 'C:xampp	mpphpF7F4.tmp', '2021-05-19 07:20:48', '2021-05-19 07:20:48'),
(43, 0, 'percobaan14.22', 0, '', 'hqdefault.jpg', 'C:xampp	mpphp2555.tmp', '2021-05-19 07:23:11', '2021-05-19 07:23:11'),
(44, 0, 'percobaan10000101', 0, '', 'Capture.PNG', 'C:xampp	mpphp2F5E.tmp', '2021-05-19 07:25:24', '2021-05-19 07:25:24'),
(45, 0, 'percobaan4', 0, '', '1598440281407769-0.j', 'C:xampp	mpphpB31.tmp', '2021-05-19 07:58:01', '2021-05-19 07:58:01'),
(46, 0, 'sss', 0, '', '2549Capture.PNG', 'C:xampp	mpphp1744.tmp', '2021-05-19 08:14:27', '2021-05-19 08:14:27'),
(47, 0, 'percobaan123', 0, '', '3742Capture.PNG', 'C:xampp	mpphpAD18.tmp', '2021-05-19 08:16:11', '2021-05-19 08:16:11'),
(48, 0, 'percobaan123', 0, '', '951901285-1000xauto-', 'C:xampp	mpphpBE6F.tmp', '2021-05-19 08:19:32', '2021-05-19 08:19:32'),
(49, 0, 'percobaan123', 0, '', '1992Kartu Ucapan Idu', 'C:xampp	mpphp9CBF.tmp', '2021-05-19 08:30:19', '2021-05-19 08:30:19'),
(50, 0, 'percobaan15.40', 0, '', '6090901285-1000xauto', 'C:xampp	mpphpB3B9.tmp', '2021-05-19 08:40:15', '2021-05-19 08:40:15'),
(51, 0, 'percobaan15.57', 0, '', '3091423998_620.jpg', 'C:xampp	mpphp41F7.tmp', '2021-05-19 08:57:14', '2021-05-19 08:57:14'),
(52, 0, 'percobaan16.01', 0, '', '6205Coba 2d.jpg', 'C:xampp	mpphpF4C.tmp', '2021-05-19 09:01:23', '2021-05-19 09:01:23'),
(53, 0, 'percobaan123', 0, '', 'uinsa.png', '', '2021-05-20 08:31:40', '2021-05-20 08:31:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'admin'),
(2, 'dosen'),
(3, 'mahasiswa'),
(4, 'tendik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tendik`
--

CREATE TABLE `tendik` (
  `tendik_nim` bigint(15) NOT NULL,
  `tendik_nama` text NOT NULL,
  `tendik_alamat` text NOT NULL,
  `tendik_thn_masuk` int(5) NOT NULL,
  `tendik_status` int(11) NOT NULL,
  `Jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tendik`
--

INSERT INTO `tendik` (`tendik_nim`, `tendik_nama`, `tendik_alamat`, `tendik_thn_masuk`, `tendik_status`, `Jabatan`) VALUES
(1211, 'soko', 'qweqwe', 2019, 1, 0),
(123123, '123123', '12312', 12123, 1, 0),
(121331000000000, 'baru', 'baru', 12012, 1, 0),
(197410262009101001, 'Hadi Noviono', 'Sidoarjo', 2009, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `asistensi`
--
ALTER TABLE `asistensi`
  ADD PRIMARY KEY (`asistensi_id`),
  ADD UNIQUE KEY `mhs_nrp` (`mhs_nrp`),
  ADD UNIQUE KEY `dosen_id` (`dosen_id`),
  ADD UNIQUE KEY `mhs_judulproposal` (`mhs_judulproposal`);

--
-- Indeks untuk tabel `bim_magang`
--
ALTER TABLE `bim_magang`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indeks untuk tabel `bim_tugasakhir`
--
ALTER TABLE `bim_tugasakhir`
  ADD PRIMARY KEY (`id_tugasakhir`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`dsn_nip`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mhs_nrp`);

--
-- Indeks untuk tabel `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`user`);

--
-- Indeks untuk tabel `persuratan`
--
ALTER TABLE `persuratan`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tendik`
--
ALTER TABLE `tendik`
  ADD PRIMARY KEY (`tendik_nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bim_magang`
--
ALTER TABLE `bim_magang`
  MODIFY `id_magang` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `persuratan`
--
ALTER TABLE `persuratan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
