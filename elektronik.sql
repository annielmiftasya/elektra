-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2021 pada 15.30
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elektronik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `level` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `username`, `password`, `level`) VALUES
(3, 'tasya', 'tasya', 'tasya', 'a208fb8e30446eb35afa20a299a94962', 'Admin'),
(4, 'irfandi', 'irfandi', 'irfandi', 'f5063ee3626f5281e4cc30670b60731d', 'Admin'),
(5, 'arhan', 'arhan', 'arhan', '25b4ac5ede847dfe174dab764159f1e4', 'superadmin'),
(6, 'aku', 'aku', 'aku', '89ccfac87d8d06db06bf3211cb2d69ed', 'superadmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 NOT NULL,
  `kode_merk` int(11) NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 NOT NULL,
  `deskripsi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama`, `kode_merk`, `foto`, `deskripsi`) VALUES
('1AS', 'ROG Phone 3', 7, '1AS.jpg', 'Desain keseluruhan ROG Phone 3 mirip dengan pendahulunya (ROG Phone 2) - sasis logam dan pelat belakang kaca. Ini mempertahankan logo RGB-illuminated di bagian belakang perangkat yang dapat disesuaikan pengguna untuk menunjukkan warna yang berbeda. Dua modul LED terletak di sebelah kamera, salah satunya berfungsi sebagai flash dan yang lainnya adalah LED RGB yang digunakan untuk menerangi casing Lighting Armor opsional. Bagian depan ponsel dilengkapi speaker stereo menghadap ke depan di kedua sisi layar, dan kamera terpasang di bezel atas. Layarnya memiliki refresh rate 144 Hz dibandingkan dengan refresh rate 120 Hz dari ROG Phone 2, yang dapat dikonfigurasi ke 60/90/120/144 Hz atau Auto di pengaturan ponsel. Layarnya sendiri adalah AMOLED 1080p 6,59 inciPanel dengan aspek rasio 19.5: 9 yang dilindungi oleh Corning Gorilla Glass 6 dan mendukung DCI-P3 dan HDR10 + dengan sensor sentuh 270 Hz. Perangkat tersebut menggunakan Qualcomm Snapdragon 865/865 + SoC dan Adreno650 GPU, dipasangkan dengan RAM 8, 12 atau 16 GB dan 128 GB, 256 GB, atau 512 GB penyimpanan UFS 3.1 yang tidak dapat diperluas. Daya disediakan oleh baterai 6000 mAh, dan pengisian cepat 30 W didukung bersama dengan pengisian balik 10 W. Fitur khas seperti teknologi pendingin \'vapor-chamber\' dan port USB-C ganda khusus di bagian samping ponsel juga telah dibawa. \'Pemicu udara\' ultrasonik sekarang memiliki kemampuan penginderaan gerakan, dan keduanya dapat dibagi menjadi dua sub-pemicu atau digunakan sebagai gerakan geser. Aksesoris gaming juga tersedia termasuk AeroActive Cooler 3, ROG Kunai Gamepad dan Twinview Dock 3.'),
('1L', 'macbook', 2, '1L.jpg', 'MacBook adalah seri komputer jinjing Macintosh yang dibuat oleh Apple Inc. dari awal tahun 2006 hingga akhir tahun 2011. MacBook diperkenalkan pada bulan Mei 2006, menggantikan seri iBook G4 dan PowerBook 12-inci, sekaligus sebagai bagian transisi Apple dari prosesor PowerPC ke Intel. MacBook adalah bagian dari keluarga MacBook sebagai komputer rendahan, dengan target pasar konsumen dan pendidikan.[3] MacBook adalah komputer Macintosh yang paling laris dalam sejarah.[4]\r\n\r\nHingga kini terdapat tiga model MacBook yang berbeda: model asli memiliki kerangka berbahan kombinasi polikarbonat dan kaca serat seperti pada iBook G4. Model kedua berbahan kerangka alumunium unibodi diluncurkan pada bulan Oktober 2008 bersama dengan MacBook Pro 15-inci. Model ketiga diperkenalkan pada bulan Oktober 2009, dengan kerangka berbahan polikarbonat unibodi. Pada tanggal 20 Juli 2011, penjualan MacBook ke konsumen dihentikan secara diam-diam untuk menggiring konsumen ke MacBook Air.[5] Apple tetap menjual MacBook ke institusi pendidikan hingga bulan Februari 2012.[1][2] Kini MacBook telah secara efektif digantikan oleh MacBook Air.'),
('1O', 'Find X2 Pro', 5, '1O.jpg', 'Find X2 dan Find X2 Pro dibuat menggunakan bingkai aluminium anodized dan Gorilla Glass 6 melengkung di bagian depan. Tombol volume terletak di sisi kiri berseberangan dengan tombol power yang memiliki aksen hijau. Oppo menawarkan dua pilihan bahan untuk panel belakang di kedua ponsel: Find X2 tersedia dengan kaca atau keramik, dan Find X2 tersedia dengan bahan keramik atau kulit buatan . Model kulit memiliki pelat metalik dengan logo Oppo yang diposisikan vertikal di sudut kiri bawah. Tidak seperti Find X, tidak ada mekanisme kamera pop-up; sebagai gantinya, keduanya memiliki guntingan melingkar untuk kamera depan. Modul kamera belakang memiliki susunan persegi panjang di atas lampu kilat LED, dan sedikit menonjol. Find X2 tahan percikan dengan IP54peringkat, sedangkan Find X2 Pro memiliki ketahanan air IP68 penuh. Find X2 memiliki lapisan Laut untuk model kaca dan lapisan Hitam untuk model keramik. Find X2 Pro juga memiliki lapisan hitam untuk model keramik, tetapi menerima pilihan warna Oranye, Abu-abu dan Hijau yang unik untuk model kulit.'),
('1S', 'Galaxy S20', 3, '1S.jpg', 'Samsung Galaxy S20 adalah garis Android berbasis smartphone dirancang, dikembangkan, dipasarkan, dan diproduksi oleh Samsung Electronics sebagai bagian dari seri Galaxy S . [2] [3] Mereka secara kolektif berfungsi sebagai penerus Galaxy S10 dan diluncurkan di acara Samsung Galaxy Unpacked pada 11 Februari 2020. [4] [5]\r\n\r\nLini S20 terdiri dari model unggulan Galaxy S20 dan Galaxy S20 + yang dibedakan berdasarkan ukuran layar, serta model yang berfokus pada kamera, Galaxy S20 Ultra . [6] Peningkatan kunci dari model sebelumnya, selain spesifikasi yang ditingkatkan, termasuk layar dengan kecepatan refresh 120 Hz , sistem kamera yang ditingkatkan yang mendukung perekaman video 8K (7680 × 4320) dan zoom resolusi super 30–100 × , tergantung modelnya'),
('1X', 'Mi 10', 6, '1X.jpg', 'Mi 10 dan Mi 10 Pro menggunakan bingkai aluminium dan Gorilla Glass 5 di bagian depan dan belakang. Layarnya melengkung dan lebih besar dari Mi 9; guntingan melingkar di sudut kiri atas untuk kamera depan menggantikan takik Mi 9. Modul kamera menyerupai Mi CC9 Pro / Mi Note 10 dengan aksen ring dari Mi 9 di sekitar sensor atas, meskipun flash berada di bawah menggantikan sensor makro. Sensor bawah juga terpisah dari jajaran kamera utama, dan keduanya sedikit menonjol. Mi 10 tersedia dalam Ice Blue, Peach Gold dan Titanium Silver, sedangkan Mi 10 Pro tersedia dalam Pearl White dan Starry Blue'),
('2A', 'Ipad Pro 2018', 2, '12.jpg', 'Keluarga iPad Pro adalah jajaran komputer tablet iPad yang dirancang, dikembangkan, dan dipasarkan oleh Apple Inc. dan pertama kali tersedia pada November 2015. Mereka menjalankan sistem operasi seluler iOS dan iPadOS . Generasi saat ini tersedia dalam dua ukuran layar, 11 inci (28 cm) dan 12.9 inci (33 cm), [12] masing-masing dengan empat opsi untuk kapasitas penyimpanan NVMe internal : 128 GB , 256 GB, 512 GB, dan 1 TB .'),
('3A', 'Oppo A92', 5, '5a.jpg', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `kode_jenis` int(11) NOT NULL,
  `jenis` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`kode_jenis`, `jenis`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` int(11) NOT NULL,
  `kategori` varchar(50) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `kategori`, `foto`) VALUES
(2, 'Televisi', 'tv.jpg'),
(3, 'Handphone', 'hp.jpg'),
(4, 'Laptop', 'laptop.jpg'),
(5, 'Tablet', 'tablet.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `kode_kategori_barang` int(11) NOT NULL,
  `kode_barang` varchar(20) CHARACTER SET latin1 NOT NULL,
  `kode_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_barang`
--

INSERT INTO `kategori_barang` (`kode_kategori_barang`, `kode_barang`, `kode_kategori`) VALUES
(8, '1AS', 3),
(6, '1L', 4),
(7, '1O', 3),
(10, '1S', 3),
(9, '1X', 3),
(4, '2A', 3),
(5, '3A', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `kode_merk` int(11) NOT NULL,
  `merk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`kode_merk`, `merk`, `foto`) VALUES
(2, 'Apple', 'apple.png'),
(3, 'Samsung', 'samsung.png'),
(4, 'LG', 'lg.png'),
(5, 'Oppo', 'oppo.png'),
(6, 'Xiaomi', 'xiaomi.png'),
(7, 'Asus', 'asus.png'),
(11, 'Sony', 'Sony.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE `sales` (
  `kode_sales` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sales_merk` varchar(50) NOT NULL,
  `kode_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`kode_sales`, `nama`, `sales_merk`, `kode_jenis`) VALUES
(1, 'tas', 'Apple', 2),
(2, 'ar', 'Samsung', 1),
(3, 'ir', 'LG', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `kode_merk` (`kode_merk`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`kode_jenis`) USING BTREE;

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indeks untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`kode_kategori_barang`),
  ADD KEY `kode_barang` (`kode_barang`,`kode_kategori`),
  ADD KEY `kategori_barang_ibfk_1` (`kode_kategori`);

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`kode_merk`);

--
-- Indeks untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`kode_sales`),
  ADD KEY `kode_jenis` (`kode_jenis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `kode_kategori_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `kode_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `kode_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kode_merk`) REFERENCES `merk` (`kode_merk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD CONSTRAINT `kategori_barang_ibfk_1` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori_barang_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`kode_jenis`) REFERENCES `jenis` (`kode_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
