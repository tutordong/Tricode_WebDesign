-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2024 pada 15.11
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(50) NOT NULL,
  `uuid` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `menu` varchar(255) NOT NULL,
  `buka` text NOT NULL,
  `tlp` text NOT NULL,
  `harga` text NOT NULL,
  `lokasi` text NOT NULL,
  `data_name` varchar(255) NOT NULL,
  `instagram` text NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_edit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `uuid`, `foto`, `nama`, `deskripsi`, `menu`, `buka`, `tlp`, `harga`, `lokasi`, `data_name`, `instagram`, `dibuat`, `last_edit`) VALUES
(15, '670523e7d14b3', '670523e7d0e95.jpg', 'Restoran Bebek Tepi Sawah Surabaya', 'Bagi pencinta kuliner Bali pasti sudah tidak asing dengan Bebek Tepi Sawah. Tidak perlu jauh-jauh ke Bali, Bebek Tepi Sawah ada di Surabaya. Jadi, bisa sedikit mengobati kerinduan terhadap Pulau Dewata.', 'Bebek bumbu kuning, gurami telur asin, soup gurami khas beduqul', '10.00-20.45', '(031) 5632855', '40.000-50.000/orang', 'https://maps.app.goo.gl/ZZSqjNPcTRzPF55j8', 'Restoran Bebek Tepi Sawah Surabaya', 'https://www.instagram.com/bebektepisawahsurabaya/', '2024-10-08 12:21:59', '2024-10-09 01:27:12'),
(16, '670524b22638f', '670524b225d52.jpg', 'Carpentier Kitchen', 'Makanan rumahan dan kopi internasional di kafe santai di dalam toko pakaian trendi.', 'Baked BBQ Chicken, Ultimate Burger, All Time Breakfast', '09.00-22.00', '0811-3488-383', '75.000-125.000/orang', 'https://maps.app.goo.gl/HzHjp9jpEH2rpEFN8', 'Carpentier Kitchen', 'https://www.instagram.com/carpentierkitchen/', '2024-10-08 12:25:22', '2024-10-09 01:33:31'),
(17, '670525e9eee4f', '670525e9ee8a3.jpg', 'Warung Bu Kris', 'Resto surabaya warung bu kris yang memiliki nuansa jawa dan makanan jawa yang khas ', 'Kuah rawon, Nasi Pecel Bu Kris, Sambel Pencit Babat Penyet, Es Cao susu', '10.00–21.30', '(031) 5611010', '25.000–50.000 per orang', 'https://maps.app.goo.gl/ZRiuvP7DWjBeicMcA', 'Warung Bu Kris', 'https://www.instagram.com/warungbukris/', '2024-10-08 12:30:33', '2024-10-09 01:30:57'),
(18, '6705270d1cc19', '6705270d1c530.jpg', 'Pavilion Restaurant at JW Marriott', 'Open for breakfast, lunch and dinner, this vibrant restaurant offers both buffet dining and a la carte fare. Feast on your favorite international dishes, and be sure to visit the barbecue station.', 'All You Can Eat, Barbeque Beef, Kopi Mochacino', '12.00-22.00', '0811-3529-279', '250.000+/orang', 'https://maps.app.goo.gl/RzBT9ZRczr1Kd6hF7', 'Pavilion Restaurant at JW Marriott', 'https://www.instagram.com/pavilionatjw/', '2024-10-08 12:35:25', '2024-10-09 01:30:18'),
(19, '670528a7ce977', '670528a7cde0c.jpg', 'Sky 36 Rooftop Dining', 'Tempat makan nyaman &amp; elegan dengan pemandangan kota Surabaya, menyajikan menu lezat &amp; unik.', 'Sirloin Steak, Authentic Cheese Cake, Lasagna &amp; Seafood Platter', '16.00–22.00', '0821-4197-3636', '100.000+/orang', 'https://maps.app.goo.gl/em1eZ96A7nmHEo5r9', 'Sky 36 Rooftop Dining', 'https://www.instagram.com/steakhut_resto/?hl=id', '2024-10-08 12:42:15', '2024-10-09 01:34:53'),
(20, '6705296d9c2c2', '6705296d9bc57.jpg', 'Arumanis Restaurant', 'Menawarkan pilihan makan sepuasnya · Menyediakan tempat duduk di area terbuka · Ada menu anak', 'Miso Soup, Bakmie Nyemek, Teppanyaki', '06.00–22.00', '(031) 5326301', '75.000-100.000/orang', 'https://maps.app.goo.gl/A9NaNi8HzGHd4XVH9', 'Arumanis Restaurant', 'https://www.instagram.com/foodmaxsby/p/2x5ODaJXIt/', '2024-10-08 12:45:33', '2024-10-09 01:32:55'),
(21, '67052a286f8c8', '67052a286eb8c.jpg', 'Kafe Bromo', 'Restoran luas di Sheraton Surabaya yang menyajikan beragam hidangan global termasuk susyi, salad &amp; sate.', 'Sheraton Wagyu Burger, Traditional Java Food, Caesar Salad with Smoked Salmon, Cakes', '06.00–23.00', '(031) 5468000', '250.000+/orang', 'https://maps.app.goo.gl/bw8xdPVuAUKQ6QiH8', 'Kafe Bromo', 'https://www.instagram.com/kafebromo/', '2024-10-08 12:48:40', '2024-10-09 01:35:38'),
(22, '67052aec38961', '67052aec383b4.jpg', 'Steak Hut - Manyar Kertoarjo', 'Resto kontemporer ramai yang menyajikan steak, menu pendamping klasik &amp; kreasi makanan penutup di tempat luas.', 'Steak Hut Salad, Beef Cordon Bleu, Persian Kebab', '07.00–22.00', '(031) 5951888', '75.000–125.000/orang', 'https://maps.app.goo.gl/t22GWjosfinMkyVk7', 'Steak Hut - Manyar Kertoarjo', 'https://www.instagram.com/steakhut_resto/?hl=id', '2024-10-08 12:51:56', '2024-10-09 01:34:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `id` int(50) NOT NULL,
  `uuid` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `menu` varchar(255) NOT NULL,
  `buka` text NOT NULL,
  `tlp` text NOT NULL,
  `harga` text NOT NULL,
  `lokasi` text NOT NULL,
  `data_name` varchar(255) NOT NULL,
  `instagram` text NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_edit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `minuman`
--

INSERT INTO `minuman` (`id`, `uuid`, `foto`, `nama`, `deskripsi`, `menu`, `buka`, `tlp`, `harga`, `lokasi`, `data_name`, `instagram`, `dibuat`, `last_edit`) VALUES
(15, '67053073cd57a', '67053073ccd99.jpg', 'BARA CAFE', 'Tempat luas berdinding bata yang menawarkan nasi, spageti, ayam mentai, dan makanan penutup es krim.', 'Affogato, Cafeelatte, Lychee Tea', '09.00–22.00', '0821-1595-3377', '25.000–50.000/orang', 'https://maps.app.goo.gl/w2g8U4ToaDXUGfpX7', 'BARA CAFE', 'https://www.instagram.com/baracafe.sub/', '2024-10-08 13:15:31', '2024-10-09 01:41:21'),
(16, '6705328310086', '670532830fa5c.jpg', 'Historica', '-', 'Cappuccino Latte, Chicken Parmigiana, Pizza Mozarla', '09.00–22.00', '(031) 5033003', '25.000–75.000/orang', 'https://maps.app.goo.gl/15yKQKEW18pQZRUr6', 'Historica', 'https://www.instagram.com/historicacoffee/', '2024-10-08 13:24:19', '2024-10-09 01:40:24'),
(17, '6705339a205b7', '6705339a1fe4f.jpg', 'Carpentier Kitchen', 'Makanan rumahan dan kopi internasional di kafe santai di dalam toko pakaian trendi.', 'Baked BBQ Chicken, Chocolate Pancake, Spaghetti Aglio Olio', '09.00–22.00', '0811-3488-383', '75.000–125.000/orang', 'https://maps.app.goo.gl/HzHjp9jpEH2rpEFN8', 'Carpentier Kitchen', 'https://www.instagram.com/carpentierkitchen/', '2024-10-08 13:28:58', '2024-10-09 01:39:57'),
(18, '670534e82cc04', '670534e82bd99.jpeg', 'Rolag Kopi Karah', 'Kafe luas dengan tempat duduk outdoor, musik live, menu makanan rumahan yang terkenal, camilan &amp; kopi.', 'Kopi Hitam, Kopi Susu, Chocolate Chip Cookie', '10.00–23.00', '0822-3311-7117', '25.000–50.000/orang', 'https://maps.app.goo.gl/j4tBSP9r2J6ACt3YA', 'Rolag Kopi Karah', 'https://www.instagram.com/rolag_kopi/', '2024-10-08 13:34:32', '2024-10-09 01:43:27'),
(19, '67053585c0a62', '67053585c0352.jpeg', 'Redback Specialty Coffee', '-', 'Cincau Latte, Country Roast Chicken, Strawberry Short Cake', '06.00–22.00', '0813-3572-7369', '40.000-70.000/orang', 'https://maps.app.goo.gl/j4tBSP9r2J6ACt3YA', 'Redback Specialty Coffee', 'https://www.instagram.com/redbackcoffee_indo/', '2024-10-08 13:37:09', '2024-10-09 01:40:52'),
(20, '6705364bf14bc', '6705364bf0e79.jpg', 'BOBER cafe &amp; ruang komunitas', '-', 'Chicken Honey Lemon, Fettuccine Alfredo, Jus Jambu', '10.00–23.00', '0818-370-703', '25.000–50.000/orang', 'https://maps.app.goo.gl/vBKwN5NHGLbkhpYCA', 'BOBER cafe &amp; ruang komunitas', 'https://www.instagram.com/bobersurabaya/', '2024-10-08 13:40:27', '2024-10-09 01:42:31'),
(21, '670536dca618f', '670536dca568b.jpeg', 'Artap Cafe &amp; Art Gallery', '-', 'Ice Coffee Artap, Artap Chicken Steak, Chicken Wings', '12.00–22.00', '0819-1330-4555', '50.000-75.000/orang', 'https://maps.app.goo.gl/8yCYfe7TiztzDLji6', 'Artap Cafe &amp; Art Gallery', 'https://www.instagram.com/artap.id/', '2024-10-08 13:42:52', '2024-10-09 01:41:53'),
(22, '6705378f243e7', '6705378f23bd9.jpeg', 'Communal Coffee &amp; Eatery', '-', 'Es Coklat Susu Hazelnut, Chiken Parmigiana, Carbonara', '09.00–22.00', '(031) 5945301', '50.000–75.000/orang', 'https://maps.app.goo.gl/gFH7qS1pRHqyz6r16', 'Communal Coffee & Eatery', 'https://www.instagram.com/communal.sby/', '2024-10-08 13:45:51', '2024-10-09 01:42:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `streetfood`
--

CREATE TABLE `streetfood` (
  `id` int(50) NOT NULL,
  `uuid` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `menu` varchar(255) NOT NULL,
  `buka` text NOT NULL,
  `tlp` text NOT NULL,
  `harga` text NOT NULL,
  `lokasi` text NOT NULL,
  `data_name` varchar(255) NOT NULL,
  `instagram` text NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_edit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `streetfood`
--

INSERT INTO `streetfood` (`id`, `uuid`, `foto`, `nama`, `deskripsi`, `menu`, `buka`, `tlp`, `harga`, `lokasi`, `data_name`, `instagram`, `dibuat`, `last_edit`) VALUES
(15, '670538c743ac5', '670538c743567.jpeg', 'Sentra Wisata Kuliner Bratang Binangun', '-', 'Nasi Bebek, Kopi Jantan, Es Teler', '08.00–22.00', '-', '25.000–50.000/orang', 'https://maps.app.goo.gl/ZMttMGFp7WNmdFzw9', 'Sentra Wisata Kuliner Bratang Binangun', '', '2024-10-08 13:51:03', '2024-10-08 13:54:46'),
(16, '6705398d8288b', '6705398d821bb.jpeg', 'Pasar Malam Kodam Brawijaya', '', 'Nasi Pecel, Seafood Bakar, Frozen Food bakar', '18.00–22.00', '-', '10.000-50.000/orang', 'https://maps.app.goo.gl/3Z4PZv3HFLVzu4Tb6', 'Pasar Malam Kodam Brawijaya', '', '2024-10-08 13:54:21', '2024-10-08 13:54:21'),
(17, '67053a2d95f06', '67053a2d957b6.jpeg', 'Food Festival', 'Tempat untuk menikmati aneka pilihan menu makanan dan minuman outdoor atau pun indoor, tersedia wahana.', 'Hoytod Oyster Original, Siomay, Nasi Campur Hong Kong', '17.00–22.00', '(031) 58208800', '25.000–50.000/orang', 'https://maps.app.goo.gl/MWR3oUT7zpv5buNH7', 'Food Festival', '', '2024-10-08 13:57:01', '2024-10-08 13:57:01'),
(18, '67053ab264532', '67053ab263f81.jpeg', 'Sego Sambel Mak Yeye', 'Hanya tunai · Menyediakan tempat duduk di area terbuka · Tidak menerima reservasi', 'Sego Sambel Iwak Pe Telor, Tempe Telur Dadar, Sambil Mak Yeye', '15.00–00.00', '-', '1–25.000/orang', 'https://maps.app.goo.gl/WvCeuCGTZaB2LdQ3A', 'Sego Sambel Mak Yeye', '', '2024-10-08 13:59:14', '2024-10-08 13:59:14'),
(19, '67053ba11f232', '67053ba11eb7b.jpeg', 'Rawon Kalkulator', 'Hanya tunai · Tidak menerima reservasi', 'Paru Dan Usus Goreng, Soto Daging, Sate Kambing Muda', '09.00–03.00', '(031) 5661784', '25.000–50.000/orang', 'https://maps.app.goo.gl/6JbVY9mWVfSvNGJa9', 'Rawon Kalkulator', '', '2024-10-08 14:03:13', '2024-10-08 14:03:13'),
(20, '67053c2cc9ab0', '67053c2cc9327.jpg', 'Loop - Graha Famili', '-', 'Pork Satay, Mie Viral, The Caramelized Butter Crab', '08.00–00.00', '(031) 7380067', '25.000–50.000/orang', 'https://maps.app.goo.gl/eM9ArfcFPLrjgwuq6', 'Loop - Graha Famili', '', '2024-10-08 14:05:32', '2024-10-08 14:05:32'),
(21, '67053d16b1fb0', '67053d16b197c.jpeg', 'Nasi Bebek Tugu Pahlawan Asli', '-', 'Nasi Bebek Biasa, Bebek SinjayNasi, Bebek Super Tugu Pahlawan', '11.00–22.30', '0812-1600-0505', 'Rp 25.000–50.000/orang', 'https://maps.app.goo.gl/5pGXVQ23MnKLaLu59', 'Nasi Bebek Tugu Pahlawan Asli', '', '2024-10-08 14:09:26', '2024-10-08 14:09:26'),
(22, '67053d9da2f34', '67053d9da2886.jpg', 'Wisata Kuliner Embong Blimbing', '-', 'Nasi Sayur, Kikil Sumsum Cak Ratno, Lalapan Mujaer', '09.00–23.00', '-', '25.000–50.000/orang', 'https://maps.app.goo.gl/BKXCzzC2ASVZpuMy8', 'Wisata Kuliner Embong Blimbing', '', '2024-10-08 14:11:41', '2024-10-08 14:11:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$eE/pJ2wLdo1H1kzS597m0.wMyp8p7oYYIkyc8Bxj3qb5qWYUDjZe.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `streetfood`
--
ALTER TABLE `streetfood`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `streetfood`
--
ALTER TABLE `streetfood`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
