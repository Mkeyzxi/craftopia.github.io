-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2024 pada 16.54
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `craftopia_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `craft`
--

CREATE TABLE `craft` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `difficulty` tinyint(4) NOT NULL,
  `description` varchar(255) NOT NULL,
  `steps` longtext NOT NULL,
  `video` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `estimate` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `craft`
--

INSERT INTO `craft` (`id`, `title`, `difficulty`, `description`, `steps`, `video`, `thumbnail`, `estimate`, `source`) VALUES
(10, 'Perahu Rak Telur', 3, 'Kerajinan ini memanfaatkan rak telur, tusuk sate, cat, dan kertas karton untuk membuat perahu mainan. Rak telur dijadikan sebagai dasar perahu. Tusuk sate sebagai tiang perahu. Karton kertas untuk layar perahu.', '<ol>\r\n<li>Potong rak telur sesuai dengan panjang dan lebar yang diinginkan.</li>\r\n<li>Warnai rak telur dengan cat yang disediakan.</li>\r\n<li>Buat 2 titik pada karton segiempat kemudian tusukkan tusuk sate.</li>\r\n<li>Perahu pun jadi.</li>\r\n</ol>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/fGtHddaMbfE\" frameborder=\"0\" allowfullscreen></iframe>', 'kerajinan-4.webp', '15 menit', 'leena'),
(11, 'Jam Pembagi Waktu', 2, 'Kerajinan ini membuat jam dinding sebagai pembagi waktu dari kardus, botol plastik, lem, dan spidol. Kardus sebagai alas dari jam dinding yang akan dibuat. Tutup botol plastik digunakan sebagai alat untuk menulis angka dari jamnya.', '<ol>\r\n<li>Potong kardus sesuai bentuk yang diinginkan</li>\r\n<li>Potong botol plastik dan ambil bagian kepalanya saja</li>\r\n<li>Tempel kepala botol plastik ke kardus sesuai dengan urutan pada jam umumnya</li>\r\n<li>Tulis angka-angka pada botol dengan angka 1-12</li>\r\n<li>Buat jarum jam dari kardus dan tusuk dengan jarum pentul</li>\r\n</ol>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/iAxQxiuL0qc\" frameborder=\"0\" allowfullscreen></iframe>', 'kerajinan-14.webp', '10 menit', 'Faris n Sofi Diary'),
(12, 'Sabun Kura-Kura', 1, 'Kerajinan ini membuat kura-kura mainan dari sabun. Dimana sabunnya nanti diukir sedemikian rupa agar membentuk kura-kura. Ini sangat statisfying ketika membuatnya namun tetap harus hati-hati.', '<ol>\r\n<li>Siapkan alat dan bahan</li>\r\n<li>Haluskan bagian atas sabun dan datarkan bagiannya menggunakan cutter</li>\r\n<li>Kemudian, ukir sabun dengan pisau pahat dengan hati-hati agar tidak cedera</li>\r\n<li>Bentuk semenarik mungkin sesuai dengan bentuk kura-kura yang diinginkan</li>\r\n</ol>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XopP25MVFwo\" frameborder=\"0\" allowfullscreen></iframe>', 'kerajinan-19.webp', '20 menit', 'Sinani Art'),
(13, 'Hiasan Rak Bunga', 3, 'Kerajinan ini menggunakan kayu untuk membuat hiasan rak bunga dinding. Kayu yang nantinya dibungkus dengan stiker dinding dan dipasang hingga dapat menyimpan tanaman yang terdapat dalam gelas ataupun pot.', '<ol>\r\n<li>Siapkan alat dan bahan</li>\r\n<li>Potong kayu sesuai yang diinginkan atau mengikuti pada video</li>\r\n<li>Pasang stiker dinding pada kayu yang telah dipotong</li>\r\n<li>Kemudian, satukan kayu-kayu yang dipoyong sehingga dapat dan kuat penyimpan tanaman yang nantinya akan dimasukkan ke dalam gelas</li>\r\n<li>Ketika memasukkan tanaman ke gelas atau pot, jangan lupa untuk memasukkan air agar lebih estetik.&nbsp;</li>\r\n</ol>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/W7HHGOdVY0c\" frameborder=\"0\" allowfullscreen></iframe>', 'kerajinan-5.webp', '25 menit', 'Teras Kayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `craft_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tools`
--

INSERT INTO `tools` (`id`, `craft_id`, `image`) VALUES
(16, 10, 'cat-karton.webp'),
(17, 10, 'rak-telur.webp'),
(18, 11, 'botol-plastik.webp'),
(19, 11, 'Kardus.webp'),
(20, 11, 'lem.webp'),
(21, 12, 'cutter.webp'),
(22, 12, 'pisau-pahat.webp'),
(23, 12, 'sabun.webp'),
(24, 13, 'gelas-tanaman.webp'),
(25, 13, 'kayu.webp'),
(26, 13, 'stiker-dinding.webp');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `craft`
--
ALTER TABLE `craft`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_id` (`craft_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `craft`
--
ALTER TABLE `craft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tools`
--
ALTER TABLE `tools`
  ADD CONSTRAINT `tools_ibfk_1` FOREIGN KEY (`craft_id`) REFERENCES `craft` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
