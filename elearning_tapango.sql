-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 08 Agu 2025 pada 14.01
-- Versi server: 8.0.31
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning_tapango`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `mapel_id` int NOT NULL,
  `guru_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mapel_id` (`mapel_id`),
  KEY `guru_id` (`guru_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `forum`
--

INSERT INTO `forum` (`id`, `judul`, `konten`, `tanggal`, `mapel_id`, `guru_id`) VALUES
(1, 'fmdklmslkms', 'dflmsl;mlsfamla;s', '2025-08-04 22:30:34', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

DROP TABLE IF EXISTS `guru`;
CREATE TABLE IF NOT EXISTS `guru` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `mapel_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `mapel_id` (`mapel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `user_id`, `nip`, `mapel_id`) VALUES
(1, 4, '198001', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_tugas`
--

DROP TABLE IF EXISTS `jawaban_tugas`;
CREATE TABLE IF NOT EXISTS `jawaban_tugas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `siswa_id` int NOT NULL,
  `tugas_id` int NOT NULL,
  `file_jawaban` varchar(255) DEFAULT NULL,
  `tanggal_kumpul` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `siswa_id` (`siswa_id`),
  KEY `tugas_id` (`tugas_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`) VALUES
(1, 'X TKJ 1'),
(2, 'XI TKJ 1'),
(3, 'XII TKJ 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

DROP TABLE IF EXISTS `mapel`;
CREATE TABLE IF NOT EXISTS `mapel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`) VALUES
(1, 'Pemrograman Dasar'),
(2, 'Jaringan Komputer'),
(3, 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

DROP TABLE IF EXISTS `materi`;
CREATE TABLE IF NOT EXISTS `materi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `guru_id` int NOT NULL,
  `judul` varchar(150) NOT NULL,
  `deskripsi` text,
  `file` varchar(255) DEFAULT NULL,
  `tanggal_upload` datetime DEFAULT CURRENT_TIMESTAMP,
  `mapel_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `guru_id` (`guru_id`),
  KEY `fk_mapel_id` (`mapel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

DROP TABLE IF EXISTS `nilai`;
CREATE TABLE IF NOT EXISTS `nilai` (
  `id` int NOT NULL AUTO_INCREMENT,
  `siswa_id` int NOT NULL,
  `tugas_id` int NOT NULL,
  `nilai` int DEFAULT NULL,
  `komentar` text,
  `tanggal_dinilai` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `siswa_id` (`siswa_id`),
  KEY `tugas_id` (`tugas_id`)
) ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `kelas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `kelas_id` (`kelas_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `user_id`, `kelas_id`) VALUES
(1, 2, 1),
(2, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

DROP TABLE IF EXISTS `tugas`;
CREATE TABLE IF NOT EXISTS `tugas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `guru_id` int NOT NULL,
  `judul` varchar(150) NOT NULL,
  `deskripsi` text,
  `file` varchar(255) DEFAULT NULL,
  `mapel_id` int DEFAULT NULL,
  `tanggal_upload` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `guru_id` (`guru_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `guru_id`, `judul`, `deskripsi`, `file`, `mapel_id`, `tanggal_upload`, `deadline`) VALUES
(2, 1, 'dsfsaf', 'fafffffe', 'WhatsApp Image 2025-08-04 at 21.27.42.jpeg', 3, '2025-08-04', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','guru','siswa') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `role`) VALUES
(1, 'Admin Utama', 'admin@tapango.sch.id', 'admin', 'admin123', 'admin'),
(2, 'Budi Santoso', 'budi@tapango.sch.id', '123456', '123456', 'siswa'),
(3, 'Siti Aminah', 'siti@tapango.sch.id', '123457', '123457', 'siswa'),
(4, 'Pak Dedi', 'dedi@tapango.sch.id', '198001', '198001', 'guru');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
