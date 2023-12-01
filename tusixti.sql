-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2023 pada 00.56
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tusixti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama barang` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `tanggal`, `nama barang`, `total`, `keterangan`, `jumlah`) VALUES
(9, '2023-08-14', 'skm', '1 box', 'masuk', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `resep_id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `bahan` varchar(250) NOT NULL,
  `proses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`resep_id`, `nama`, `foto`, `bahan`, `proses`) VALUES
(1, 'americano', '16.jpg', 'esspresso single shot, air 180mg, es batu (ice).', 'takar biji kopi yang sudah di haluskan sebanyak 18gram, kemudian tamp kopi yang sudah ditambahkan ke dalam portafilter dengan menggunakan tamp, masukan kopi yang sudah di tamp ke mesin espresso kemudian mesin akan memulai pembuatan espresso kurang lebih selama 25detik, setelah jadi espresso mekudian tambahkan air panas sebanyak 200mg, tambahkan es batu untuk americano ice.'),
(2, 'espresso', '15.jpg', 'esspresso single shot/double shot. ', 'takar biji kopi yang sudah di haluskan sebanyak 18gram, kemudian tamp kopi yang sudah ditambahkan ke dalam portafilter dengan menggunakan tamp, masukan kopi yang sudah di tamp ke mesin espresso kemudian mesin akan memulai pembuatan espresso kurang lebih selama 25detik.'),
(3, 'es kopi 260', '../img/3.jpg', '\r\n esspresso single shot, gula aren 20mg, es bstu, fresh milk 140mg.\r\n', 'masukan gula aren 20mg pada gelas/cup, tambahkan es batu secukupnya, tambahkan juga fresh milk sebanyak 140mg, kemudian masuka espresso single shot.'),
(4, 'latte', '../img/14.jpg', 'esspresso single shot, fresh milk 140mg, es batu (ice).', 'siapkan espresso single shot pada cangkir, kemudian takar fresh milk sebanyak 140mg, steam fresh milk sampai panas dan berbusa, setelah fresh milk di steam, tuangkan fresh milk pada espresso yang sudah di siapkan dan bentuk latte art sesuai keinginan. tambahkan es batu untuk latte ice.'),
(5, 'cappucino', '../img/10.jpg', 'esspresso single shot, fresh milk 14mg, es batu (ice).', 'siapkan espresso single shot pada cangkir, kemudian takar fresh milk sebanyak 140mg, steam fresh milk sampai panas dan berbusa/busa lebih tebal untuk cappucino, setelah fresh milk di steam, tuangkan fresh milk pada espresso yang sudah di siapkan dan busa lebih tebal dari pada latte, taburkan bubuk coklat pada busa fresh milk, tambahkan es batu untuk cappucino ice.'),
(6, 'vanilla latte', '../img/11.jpg', ' esspresso single shot, sirup 25mg, fresh milk 140mg, es bstu (ice).', 'siapkan espresso single shot pada cangkir, tuangkan sirup vanilla sebanyak 25mg pada espresso, kemudian takar fresh milk sebanyak 140mg, steam fresh milk sampai panas dan berbusa, setelah fresh milk di steam, tuangkan fresh milk pada espresso yang sudah di siapkan dan bentuk latte art sesuai keinginan. tambahkan es batu untuk vanilla latte ice.'),
(7, 'hazelnut latte', '../img/12.jpg', 'esspresso single shot, sirup hazelnut 25mg, fresh milk 140mg, es bstu (ice).', 'siapkan espresso single shot pada cangkir, tuangkan sirup hazelnut sebanyak 25mg pada espresso, kemudian takar fresh milk sebanyak 140mg, steam fresh milk sampai panas dan berbusa, setelah fresh milk di steam, tuangkan fresh milk pada espresso yang sudah di siapkan dan bentuk latte art sesuai keinginan. tambahkan es batu untuk hazelnut latte ice.'),
(8, 'caramel latte', '../img/13.jpg', ' esspresso single shot, sirup caramel 25mg, fresh milk 140mg es bstu (ice).', 'siapkan espresso single shot pada cangkir, tuangkan sirup caramel sebanyak 25mg pada espresso, kemudian takar fresh milk sebanyak 140mg, steam fresh milk sampai panas dan berbusa, setelah fresh milk di steam, tuangkan fresh milk pada espresso yang sudah di siapkan dan bentuk latte art sesuai keinginan. tambahkan es batu untuk hazelnut caramel ice.'),
(9, 'vietnam drip', '../img/7.jpg', 'beans 12gr, susu kental manis 20mg, air panas 150mg.', 'haluskan beans sebanyak 12gram, panaskan air kurang lebih sampai 90 drajat, masukan skm sebanyak 20mg pada gelas, kemudian masukan beans yang sudah di haluskan pada cangkir filter, taruh cangkir filter pada atas gelas yang sudah dimasukan skm, tuangkan air panas pada cangkir filter sebanyak 150mg, kemudian air hasil filter kopi akan menetes kedalam gelas yang berisi skm.'),
(10, 'v60', '../img/6.jpg', '\r\nbeans 15gr, air panas 230mg.', 'haluskan beans sebanyak 15gram, panaskan air sampai 90 drajat, Siapkan gelas dengan V60 dripper dan filter di atasnya, basahi filter dengan air panas, dan buang air bekasnya, masukkan bubuk kopi pada dripper, seduh dengan gerakan memutar secara konstan dan perlahan, tuangan pertama untuk blooming, proses mengeluarkan karbondioksida, tuang hingga timbangan menunjukkan 30 ml, tunggu 45 detik, tuangan kedua untuk mendapatkan keasaman, tuang hingga 80 ml, tunggu 45 detik, tuangan ketiga tuang hingga 150 ml, tunggu 30 detik, tuangan terakhir, hingga 195 ml, sebelum tetesan berhenti, angkat agar seduhan yang terakhir tidak ikut tercampur.\r\n'),
(11, 'japanese iced coffe', '../img/4.jpg', 'beans 15gr, air panas 230mg, es batu.', 'haluskan beans sebanyak 15gram, panaskan air sampai 90 drajat, Siapkan gelas dengan V60 dripper dan filter di atasnya, basahi filter dengan air panas, dan buang air bekasnya, masukan es batu secukupnya pada gelas, masukkan bubuk kopi pada dripper, seduh dengan gerakan memutar secara konstan dan perlahan, tuangan pertama untuk blooming, proses mengeluarkan karbondioksida, tuang hingga timbangan menunjukkan 30 ml, tunggu 45 detik, tuangan kedua untuk mendapatkan keasaman, tuang hingga 80 ml, tunggu 45 detik, tuangan ketiga tuang hingga 150 ml, tunggu 30 detik, tuangan terakhir, hingga 195 ml, sebelum tetesan berhenti, angkat agar seduhan yang terakhir tidak ikut tercampur.'),
(12, 'matcha', '../img/9.jpg', ' bubuk matcha 25gr, gula cair 10mg, air panas 150mg, fresh milk 140mg, es batu (ice).', 'takar pada gelas bubuk matcha sebanyak 25gram, masukan gula cair sebanyak 10mg, masukan air panas sebanyak 150mg aduk sampai merata, kemudian steam fresh milk sebanyak 140mg, tuangkan fres milk pada gelas matcha, tambahkan es batu secukupnya untuk matcha ice.'),
(13, 'chocolate', '../img/8.jpg', 'bubuk chocolate 25gr, air panas 70mg, susu kental manis 20mg, fresh milk 100mg, es batu (ice).', 'takar pada gelas bubuk choclate sebanyak 25gram, masukan skm sebanyak 30mg, masukan air panas sebanyak 150mg aduk sampai merata, kemudian steam fresh milk sebanyak 140mg, tuangkan fres milk pada gelas chocolate, tambahkan es batu secukupnya untuk chocolate ice.'),
(14, 'kopi tubruk', '../img/5.jpg', 'beans 15gram, air panas.', 'haluskan beans sebanyak 15gram, masukan beans ke cangkir, kemudian tambahkan air panas secukupnya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'tusixti', '$2y$10$kxKAQMHFRA9Yu5yFw.ZeXu6DTsr8cFoDI3L38aZuCqxABxwrK4BIC'),
(4, 'admin', '12345'),
(5, 'pujianto', '$2y$10$x5lomHHIEQDEeO6dkCcQsOyRjV.EQC1.7BpoSoIwv5OqlrkX03eDO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`resep_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `resep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
