-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 23 Jun 2020 pada 03.03
-- Versi server: 8.0.17
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomor_telepon` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `nomor_telepon`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '089661334816', '$2y$10$e5Cd42dPf3Ah1JIQSpNWsud0xeh0wW98yeogrizLV69lnIaULu75q'),
(2, 'zimmi', 'hersyazimmi@gmail.com', '089661333333', '$2y$10$mY6mGbDiioR0sXpV1dDLcOU9G.QSOtFXGEnM6kxqCAsIpuUmhG7jC'),
(11, '1', '1@1', '1', '$2y$10$gZtbzdlTpkOdWrdatIcbLO6sNHs3es63aGf.U5VSM0YXMj/Ve9c.e'),
(12, '11', '11@1', '11', '$2y$10$0f5/zR9Kb1qHmjL9OJkjjeEx884CGcLuW3ort3.LFy1iYcKFjRcH2'),
(13, '111', '111@1', '111', '$2y$10$PQOv/j6YlS5573b2osHIfOPAZa/mdj1mwIYliv540TZcoFWbelz7O'),
(14, '2', '2@2', '2', '$2y$10$pJbSkBu8wK9X5oIT0.q9qe9jNieAK0Ql4lmB4QuFFfNKoJx3HmgPW'),
(15, '22', '22@2', '22', '$2y$10$LLC6gzEv7uTe1l5ERDnxiuDE0ubmv4xdpEMAFOtwgeoV7cwAkJwHK'),
(16, '3', '3@3', '3', '$2y$10$5lbUZE3evvM1m8ASsteGReuOCVVwUc30haGZAEFOUq5GAunkZ6c0W'),
(17, '33', '33@3', '33', '$2y$10$HkKTdGYa7oqxb9B8uIcNG.D1PfZ9UYYCCJoJLxMRb2/mOB59kXbY2'),
(18, '4', '4@4', '44', '$2y$10$a9Qk0P6MtXh0c.32RlLVFuHD2Sk/EyCqeBYyliPelLAABfTqEEg9q');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookmark`
--

CREATE TABLE `bookmark` (
  `id_akun` varchar(50) NOT NULL,
  `id_jasa` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `bookmark`
--

INSERT INTO `bookmark` (`id_akun`, `id_jasa`, `id`) VALUES
('1ig5r5qg7zadm', '3mzzqdl7m88zgor', 4),
('1ig5r5qg7zadm', '4n383qrfkjmymar', 5),
('18egt6efar', '3mzzqdl7m88zgor', 21),
('18egt6efar', '4n383qrfkjmymar', 22),
('6z50xt72wfar', '21ojht1mof5hWeb', 23),
('1oxmu5j1i123', '4h76l0c5q0w6Dig', 24),
('1oxmu5j1i123', '21ojht1mof5hWeb', 25),
('bfzc8eh0jcru', '4yqr0wclegeqnam', 26),
('1p8h9l3md6cru', '4714fqbdj6oeRac', 27);

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id_jasa` varchar(50) NOT NULL,
  `nama_foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id_jasa`, `nama_foto`) VALUES
('2937yyvos9g5Pem', 'IMG_4184.jpg'),
('75ve5gr92tdv123', '89873019_2897447336982576_7808289959042875392_n.jpg'),
('4h76l0c5q0w6Dig', 'ferdi.jpg'),
('21ojht1mof5hWeb', 'faris.jpg'),
('2xew372ciborOpe', '72aa6e2b-f0d7-493f-97ec-04dfa868cd1c.jpg'),
('hhrxf3grzm2nam', '89873019_2897447336982576_7808289959042875392_n.jpg'),
('3kd5tt9qmtjfnam', 'elektronik.png'),
('5udnwpze54d7nam', 'bengkel.png'),
('4yqr0wclegeqnam', 'arsitek.png'),
('6vn4yhy5kzwgnam', 'tukang.png'),
('4ltbk9j2tbzinam', 'logoposterbanner.png'),
('603f9z95laawnam', 'WhatsApp Image 2020-04-17 at 14.29.31.jpeg'),
('6j5f8benhx63nam', 'lukisan.png'),
('7hx111gf3fr4dok', 'dokter.png'),
('5vjwxw63t0asnam', 'pijat.png'),
('2vz8jbxp95o1nam', 'terapi.png'),
('1kxy9ckj2pswnam', 'asistenrumahtangga.png'),
('3kgszcx9in3xnam', 'pengasuhbayidananak.png'),
('d5z558uj5wxnam', 'angkutanpindahrumah.png'),
('56ras3hwq2frnam', 'perawatantubuh.png'),
('6vgn0a4ua1a9nam', 'salon.png'),
('4rclc2dp51d9nam', 'pangkasrambut.png'),
('5xtts40dla3bnam', 'makeupacara.png'),
('1lj40ljhjfr1nam', 'layanankebersihanrumah.png'),
('6pyxy89ovk4jnam', 'cucikendaraan.png'),
('7irjj6ehabzgnam', 'supir.png'),
('15di5oy83stfnam', 'appsistemweb.png'),
('1e6cb22srko6nam', 'dataoriented.png'),
('40t2gnml5ehunam', 'gurules.png'),
('2lm7s2lh5cyenam', 'personaltrainer.png'),
('4714fqbdj6oeRac', 'mantap.png'),
('5n2f54jcpda1Pem', 'default.png'),
('2u6915slit2nWeb', 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `id_kategorijasa` varchar(50) NOT NULL,
  `id_jasa` varchar(50) NOT NULL,
  `id_akun` varchar(50) NOT NULL,
  `nama_jasa` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `alamat` text NOT NULL,
  `hargamin` varchar(50) NOT NULL,
  `hargamax` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `urutan` int(11) NOT NULL,
  `verifikasi_status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `jasa`
--

INSERT INTO `jasa` (`id_kategorijasa`, `id_jasa`, `id_akun`, `nama_jasa`, `keterangan`, `alamat`, `hargamin`, `hargamax`, `telepon`, `urutan`, `verifikasi_status`) VALUES
('0101', '3kd5tt9qmtjfnam', '1pn61uysycele', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 51, 0),
('0102', '5udnwpze54d7nam', 'gpwdfexz4pben', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 52, 0),
('0201', '4yqr0wclegeqnam', '1699tewmrmars', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 53, 0),
('0202', '6vn4yhy5kzwgnam', 'f3yptapysdtuk', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 54, 0),
('0301', '4ltbk9j2tbzinam', '6fo7p5kr3log', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 55, 0),
('0303', '6j5f8benhx63nam', '9nr75psh3luk', 'nama', '123', '123', 'Rp1.000', 'Rp20.000', '123', 57, 0),
('0403', '7hx111gf3fr4dok', '7foiykcju0dok', 'dokter', '123', '123', 'Rp1.000', 'Rp20.000', '123', 58, 0),
('0401', '5vjwxw63t0asnam', '4pwk9j8nypij', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 59, 0),
('0402', '2vz8jbxp95o1nam', 'a2gahntf2ter', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 60, 0),
('0601', '1kxy9ckj2pswnam', '42nz5rz6uasi', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 61, 0),
('0603', '3kgszcx9in3xnam', '7o4dri2qopen', 'nama', '123', '123', 'Rp1.000', 'Rp20.000', '123', 62, 0),
('0604', 'd5z558uj5wxnam', 'cpmqkfjfang', 'nama', '123', '123', 'Rp1.000', 'Rp20.000', '123', 63, 0),
('0503', '56ras3hwq2frnam', '5maw7kx6per', 'nama', '123', '123', 'Rp1.000', 'Rp20.000', '123', 64, 0),
('0501', '6vgn0a4ua1a9nam', '9ikqqkltlsal', 'nama', '123', '123', 'Rp1.000', 'Rp20.000', '123', 65, 0),
('0502', '4rclc2dp51d9nam', '4ukr92f0gpan', 'nama', '123', '123', 'Rp1.000', 'Rp20.000', '123', 66, 0),
('0504', '5xtts40dla3bnam', '8g8kma83pmak', 'nama', '123', '123', 'Rp1.000', 'Rp20.000', '123', 67, 0),
('0701', '1lj40ljhjfr1nam', 'qws8cl1ilay', 'nama', '123', '123', 'Rp1.000', 'Rp20.000', '123', 68, 0),
('0702', '6pyxy89ovk4jnam', '1wx5f6n4acuc', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 69, 0),
('0801', '7irjj6ehabzgnam', '111d4ck0qbsup', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 70, 0),
('0901', '15di5oy83stfnam', '4rpnvxjtqapp', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 71, 0),
('0902', '1e6cb22srko6nam', '3y49r55dat', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 72, 0),
('1001', '40t2gnml5ehunam', '1hzhhzovngur', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 73, 0),
('1002', '2lm7s2lh5cyenam', '5zk6ln01per', 'nama', 'keterangan', 'alamat', 'Rp1.000', 'Rp20.000', '123', 74, 0),
('0901', '2u6915slit2nWeb', 'bfzc8eh0jcru', 'Web Developer', 'Saya akan membuatkan web yang sesuai dari permintaan anda', 'Jl. Tabrani Ahmad Gg. Amanah No. 52B', 'Rp100.000', 'Rp1.000.000', '082252786633', 79, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori1` varchar(10) NOT NULL,
  `id_kategori2` varchar(10) NOT NULL,
  `id_kategori3` varchar(10) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori1`, `id_kategori2`, `id_kategori3`, `nama_kategori`) VALUES
('01', '0101', '', 'Reparasi Elektronik'),
('01', '0102', '', 'Bengkel'),
('02', '0201', '', 'Arsitek'),
('02', '0202', '', 'Tukang'),
('03', '0301', '', 'Logo, Poster, dan Banner'),
('03', '0302', '', 'Desain Pakaian'),
('03', '0303', '', 'Lukisan'),
('04', '0401', '', 'Pijat'),
('04', '0402', '', 'Terapi'),
('04', '0403', '', 'Dokter'),
('05', '0501', '', 'Salon'),
('05', '0502', '', 'Pangkas Rambut'),
('05', '0503', '', 'Perawatan Tubuh'),
('05', '0504', '', 'Make Up Acara'),
('06', '0601', '', 'Asisten Rumah Tangga'),
('06', '0602', '', 'Tukang Kebun'),
('06', '0603', '', 'Pengasuh Bayi dan Anak'),
('06', '0604', '', 'Angkutan Pindah Rumah'),
('07', '0701', '', 'Layanan Kebersihan Rumah'),
('07', '0702', '', 'Cuci Kendaraan'),
('08', '0801', '', 'Supir'),
('09', '0901', '', 'Apps, Sistem, dan Web'),
('09', '0902', '', 'Data Oriented'),
('10', '1001', '', 'Guru Les'),
('10', '1002', '', 'Personal Trainer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_jasa` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_jasa`, `lat`, `lng`) VALUES
('2937yyvos9g5Pem', 'lat', 'lng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ratingjasa`
--

CREATE TABLE `ratingjasa` (
  `id_jasa` varchar(50) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `ratingjasa`
--

INSERT INTO `ratingjasa` (`id_jasa`, `rating`) VALUES
('2937yyvos9g5Pem', 5),
('2u6915slit2nWeb', 5),
('4s5rzh6m8toePem', 5),
('4yqr0wclegeqnam', 4),
('5c8zhdyx9g7aPem', 5),
('5n2f54jcpda1Pem', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id_akun` varchar(50) NOT NULL,
  `id_jasa` varchar(50) NOT NULL,
  `jenis_laporan` varchar(250) NOT NULL,
  `laporan` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`id_akun`, `id_jasa`, `jenis_laporan`, `laporan`, `id`) VALUES
('6z50xt72wfar', '21ojht1mof5hWeb', 'Jasa mengandung SARA dan kata-kata tidak pantas', 'Mulut anda kotor', 9),
('1oxmu5j1i123', '21ojht1mof5hWeb', 'Lain-lain', 'Mulut anda kotor', 10),
('1oxmu5j1i123', '4h76l0c5q0w6Dig', 'Jasa melakukan pelayanan yang sangat buruk', 'Maaf gan, nyoba fitur', 11),
('bfzc8eh0jcru', 'hhrxf3grzm2nam', 'Jasa tidak sesuai keterangan di aplikasi', 'Penipu anda gan', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id_jasa` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `id_akun` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `rating` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `reviews`
--

INSERT INTO `reviews` (`id_jasa`, `id`, `id_akun`, `content`, `rating`) VALUES
('4yqr0wclegeqnam', 127, 'bfzc8eh0jcru', 'Ini Review Rating Arsitek Lagi', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_akun` varchar(50) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nomor_telepon` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_akun`, `nama`, `email`, `nomor_telepon`, `password`) VALUES
('10o8k1rt3egg@', 'ggg', 'gg@hh', '515', '$2y$10$VGlMANqXyeU0nLREwEqF9eYzFvpp7rslww0P/ZV0cEGO0ZfnuyiI2'),
('10tx85gxvaww', 'aw', 'aww@qw3', '213', '$2y$10$X9lq9EkSXYmHNDrr99tSJetJmIhCgp6NmN8nkuL/FSZ0G0hX.gcey'),
('111d4ck0qbsup', 'supir', 'supir@gmail.com', '123', '$2y$10$XEQAlR.bWq7k.UgMxG.VEOlsZ5C1xC5JiD1hqUnqeuGzxsZU836bi'),
('12glzul02www', 'www', 'www@www', '422', '$2y$10$B4wGF/Pr5BB.Xpq2lx/cEeUIaHCF93Gh4d30jVeXPyVCxW37iuGpC'),
('148954w4wast', 'nama', 'astaga@astaga', '555', '$2y$10$b0mi.InT0pYndQyy5QxpJOcSjID7wggaLzZHdjIGH.ZWWt/CS4boq'),
('14rzg9gmp515', '5515151', '5151515%@525215', '5152125', '$2y$10$L/dIdn1N9ykblZerU3Xp7.mOorXt9dNRkG0B5s0Z4YjCyhEahtEfu'),
('1699tewmrmars', 'arsitek', 'arsitek@gmail.com', '123', '$2y$10$usQX7xmbv976ZLXXKl7MCOtrKlVmzsnhK260XfVxm5pb7TR8OZIwq'),
('1bkna89qk66@', '66', '66@66', '222', '$2y$10$A5bH0SVHrQ9Xb4ukTE2x6OP5BgVloxyJZwKOIgYkKkoWyj77.NqhW'),
('1ck5u98uezzz', 'zzz', 'zzz@zzz', '777', '$2y$10$Nv4CexWOBBWuxpMOKobul.2SUGNvepL7JOPq0gB9ZyY8byYM4pp.K'),
('1hzhhzovngur', 'guru les', 'gurules@gmail.com', '123', '$2y$10$.bjGe8dT6M3qRGTcRkGHNuEFvaUcO5359kEgUMib5QvTJGWUzHrJi'),
('1oxmu5j1i123', '123', '123@123', '123', '$2y$10$26x/9gnEtiJSjfJl8CZwsO.KCvg8R/ACVH02oYL2qXn.UycDE5Tgq'),
('1pfby1knnpap', 'papa', 'papa@papa', '555', '$2y$10$U1m7r28odZmUBxP69luwdO.JkGm7U.0xOppug9nj2BZ6Los9p7ixK'),
('1pn61uysycele', 'elektronik', 'elektronik@gmail.com', '123', '$2y$10$QO.dgh6aAqT5JdouKo.L1ewc6aDH9UoRLFdxSEM8U.ryVcH3piYbC'),
('1wx5f6n4acuc', 'cucikendaraan', 'cucikendaraan@gmail.com', '123', '$2y$10$vwLjv6OniNk8dw/skLewtOeaNUMo5HSAyEOW5YKQop/fQwA34we2q'),
('2gk2684ss3pak', 'pakaian', 'pakaian@gmail.com', '123', '$2y$10$O6B/FAZq34s2Nit4VSFIRe.t9natfRk2Otuq/vsH6Pj0gUt32mqG6'),
('3f7hxnz20ss@', 'ss', 'ss@ss', '43', '$2y$10$4JeB.HTCZ.n/DKMJYQVANu1s9dekIufj5p.u0jusCidKEMo8qsIcO'),
('3xnffnw01ber', 'berhasil', 'berhasil@b', '666', '$2y$10$8NwweeW4.BMCelI/rbwUs.Kg39W3wMgbMqdsGx3fan5d4.jWcLxFa'),
('3y49r55dat', 'data', 'data@gmail.com', '123', '$2y$10$w5X77Es8rbDuGTAfIqiSm.Otzo.4l56qHCBT6hntO8lm19kB.pRqy'),
('3yxb3qyxfer', 'Ferdi Nanda Pratama', 'ferdi@gmail.com', '080808080808', '$2y$10$n.LkPZWiGzubmh/j2mjkEOTYs5CT8noomA/ALMF.vVIY4ehuy1hTG'),
('409axgdtmam', 'Maman', 'maman@gmail.com', '082252786633', '$2y$10$FrZn/FVO.JbMS.9QLXwxvun110hU4LizgIY6Aimv7s9u.M3Mfeuve'),
('42nz5rz6uasi', 'asistenrumahtangga', 'asistenrumahtangga@gmail.com', '123', '$2y$10$.SXSh6SkIDzyoqYKaFydaOEq4jqXmqoKhmAq9D39Db4DDM55uVgKq'),
('46y4a3kcru', 'Rachman Dwi Putra', 'cruzehr1st@gmail.com', '082252786633', '$2y$10$bodwYTyWLurf2lHH2AH.qOBNGxRtBV1v6SaOSz.hB2djqurzyvC2S'),
('4pwk9j8nypij', 'pijat', 'pijat@gmail.com', '123', '$2y$10$1YqTmBSy.4TqPmN6n3q34e/3VXPQ4nTeFC5Y0ViWfw4YDUw5G1tTa'),
('4rpnvxjtqapp', 'app', 'app@gmail.com', '123', '$2y$10$OmV0NVEhhx2WPbqmdGmkBu/1GgQ95lLXM4VcQM6e5A21ikLyFFKkG'),
('4tcwzg3y2dsd', 'aaaa', 'dsdsds', 'sdsdsd', '$2y$10$G7CtuxB1Hr/LEGLDQf1m3eu2Zv5fJL3n0votUQR9MZlEvUVb0V10e'),
('4ukr92f0gpan', 'pangkasrambut', 'pangkasrambut@gmail.com', '123', '$2y$10$Dm.TMtyCJl43rD2E0CVb6up1/6KJiXt.5HTAQXBkevLOfKWlMvoTq'),
('5eoe8gg3d23@', '1232', '23@11', '3', '$2y$10$Nq3VHylR0G7885DOx9/FCe81OjRoIaBRkUk4Tggh0f8ZAgCH7ug6a'),
('5maw7kx6per', 'perawatan tubuh', 'perawatantubuh@gmail.com', '123', '$2y$10$GbkEOxJE8waTsxHGyF1dtuXu4PQ9Z90sZojgD6rMLvUH6ff3rgluO'),
('5zk6ln01per', 'personal trainer', 'personaltrainer@gmail.com', '123', '$2y$10$j8BUUjfd65F1bR19lCF9AuaUC65vAk73gI46oiCgU/wkzwzO8Voga'),
('6bbojapj8aema', 'nama', 'email@email', '123', '$2y$10$xSB8cHp20exJf2ay91PhWumsm1ckC45JAWzedTDcSulF69fVOqIK2'),
('6drvb5333', '333', '333', '333', '$2y$10$CoVAF3.m58jWPenLk0CGLO7NpTbEz7dtc8TfXGbpc0.6rqDxAN/6m'),
('6fo7p5kr3log', 'logo', 'logo@gmail.com', '123', '$2y$10$O71Mck54KHE8bMKRZrL.VuQE7Wgbzr5dRkYPSG9dxgqJSdGLeT3m.'),
('6z50xt72wfar', 'Faris Ruswandi', 'faris@gmail.com', '081234567891', '$2y$10$lLkKMUuAYSLCkp9rr0hY6ODypitav7UahEX4YiW22PsiDYQqQWXri'),
('7foiykcju0dok', 'dokter', 'dokter@gmail.com', '123', '$2y$10$iBXBrEp4r6xeIKmh1iNB0eLN6MoR1uzBQFMCYMiNcQQlHhSbvZtJW'),
('7o4dri2qopen', 'pengasuhbayidananak', 'pengasuhbayidananak@gmail.com', '123', '$2y$10$EhIgNmevVhITk9A4jWGSmuYkC1/KQ8dSVh68PKnUevPgwaDuPdVHu'),
('857zt26q1444', '444', '444@444', '444', '$2y$10$4Lr5lgEhyKO1g0I8Ierb.uGMz0fbHn9vT2TQ.7zaTjUzfxbofWAT6'),
('8g8kma83pmak', 'makeupacara', 'makeupacara@gmail.com', '123', '$2y$10$AaomahO9ePJCcOAXgKOEd./jro8i8mKbXeLq4KDJXZgrCzOG69l3u'),
('8mf1cqeortuk', 'tukang kebuh', 'tukangkebun@gmail.com', '123', '$2y$10$6/FOi.4O8C7N2MbMwPQzWeHymHT4CEFX.3O0JuBwj9uoUTh1pKb5i'),
('90enzquqvsss', 'sss', 'sss@sss', '222', '$2y$10$pwumReWAG2ZHc.LUGuYm4uPa88485tKH/f1olYvVp.pngza2sUj46'),
('98tj8j9xgqqq', 'qqq', 'qqq@qqq', '222', '$2y$10$VMkjpd2z.OIprWUJ05bL4e1TswuN4ebM0O47b0QtEUC3jDd.HTU7S'),
('9ikqqkltlsal', 'salon', 'salon@gmail.com', '123', '$2y$10$0PodJWXBE7YaqYbFqS0qW.DcXd5R5Qimvjqd55MVg29yCmReq4nqC'),
('9nr75psh3luk', 'lukisan', 'lukisan@gmail.com', '123', '$2y$10$pueT8CYGwLr5lDbeg974o.t7D7mCfENqcs.kA01Ym1WInigUtFK7S'),
('a2gahntf2ter', 'terapi', 'terapi@gmail.com', '123', '$2y$10$lxHe5TexqE/G6.UhXwkqPO8WUXlk6yZ16AsEyCNUQZ0Y7yn.MKj5a'),
('bfzc8eh0jcru', 'Rachman Dwi Putra', 'cruzher1st@gmail.com', '082252786633', '$2y$10$.GP82K9mJLvibuke2p//4urylgG/e8vrw9hLojs1bmQkHkecWydKi'),
('cpmqkfjfang', 'angkutan pindah rumah', 'angkutanpindahrumah@gmail.com', '123', '$2y$10$9yjZGmc3w/Fsbvk68owNrOne4BCYNL5i5Mszai8gmyGAmi8kMUody'),
('czjozz7bvfdsa', 'dsa', 'dsa@dsa', '666', '$2y$10$DTamNQox7E.6rmK4zt7yGOU91Cga2m3LHbPN/dsA2ix6ll456eBYG'),
('e14daog1kik', 'kikiki', 'kikiki@kikiki', '555555', '$2y$10$nq6qVhgy437/mRHADrSItO7L/XhBclJqKa0KFQ9geZyEU4zCeWYEG'),
('f3yptapysdtuk', 'tukang', 'tukang@gmail.com', '123', '$2y$10$cNn81/i9OUW7iN8cbda9/uq/OVS7vavUcOcVPGLpG7iPkoJ632l3S'),
('fsayiavFar', 'Fariswew', 'Fariswew@gmail.com', '111', '$2y$10$v7Cx1.1bZMWBBSm2vweHS.zY0ShtLKisV1ZA73JlnA1dQwEBTEg8a'),
('gpwdfexz4pben', 'bengkel', 'bengkel@gmail.com', '123', '$2y$10$rdcYMtRIk1jq6AtP/WJY6.4Pa5pOT4mkEWcb.KGKmvOTRg6A.1fi6'),
('ic4f55v', '', '', '', '$2y$10$ebs1lw71ydIbL/CvYXTPbuHvh39X1Wbt4dIw5hQIT0RoPjECc1NRK'),
('prkfip8g8cob', 'coba', 'coba@cob', '555', '$2y$10$H2/L0P2g/21Q6lF4lG0zweERp2KRgWVMQwAI.Aa5vW6VJm9vRosLq'),
('qws8cl1ilay', 'layanankebersihanrumah', 'layanankebersihanrumah@gmail.com', '123', '$2y$10$MPdnRwktGrS8f/bafZg6POdpIiC1LpqYth8wMetEfrMukTcu9Owje'),
('qz90rg4qcob', 'Coba', 'coba@coba', '333', '$2y$10$ryZs6bdggyZ0g1KOE8dpCuTL0kp6MhmO0x5QNcaRkp9AEVEWmii6S'),
('sdmi4f3231', '321312', '2312@1232', '321', '$2y$10$Y6pJFrG.3i5MuyoX/9EOi.ZS2FB0PMtwMqTjOXMG.FqmF/14Q6uUi'),
('t75rtb68ema', 'namaprofil', 'email@profil', '000', '$2y$10$EYrVaL3abTcs9qJTPrDVWeymmGbhIxvz8104yuKWPdsbMiacUWPmS'),
('ud72x31ceema', 'admin', 'email@admin', '222', '$2y$10$WLcTVB9wwOIwI9T/xnwPTe0IvFirRUaFa8m55ZO7hapXihc/kqvjO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`urutan`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori2`);

--
-- Indeks untuk tabel `ratingjasa`
--
ALTER TABLE `ratingjasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_akun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `jasa`
--
ALTER TABLE `jasa`
  MODIFY `urutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
