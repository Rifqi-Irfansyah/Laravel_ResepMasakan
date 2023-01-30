-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2023 pada 07.16
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resepmasakan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `level` varchar(50) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2022_07_23_142455_create_roles_table', 1),
(12, '2022_07_23_143728_create_role_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `level` varchar(191) NOT NULL,
  `gambar-profil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`level`, `gambar-profil`) VALUES
('admin', 'admin.jpg'),
('user', 'user.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bahan` varchar(1000) NOT NULL,
  `cara` varchar(1000) NOT NULL,
  `view` int(200) NOT NULL DEFAULT 0,
  `namagambar` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `kategori` enum('makanan-berat','makanan-ringan','minuman') NOT NULL DEFAULT 'makanan-berat'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id`, `nama`, `bahan`, `cara`, `view`, `namagambar`, `updated_at`, `created_at`, `kategori`) VALUES
(1, 'Telur Omelete', '1 butir telur \r\n¾ sendok teh maizena\r\nTomat secukupnya \r\nDaun bawang, iris\r\nGaram secukupnya\r\nPenyedap Rasa\r\nLada', '1. Langkah pertama, kocok bersama tomat, daun bawang, lada, penyedap rasa, lalu masukkan maizena.\n\n2. Setelah itu, masukkan kocokan telur ke wajan dengan api kecil, diamkan tunggu setengah matang.\n\n3. Lipat telur secara perlahan, diamkan, lalu angkat sesuai selera.\n\n4. Sajikan.', 82, 'omelete.jpg', '2023-01-11 07:51:50', '2022-07-30 09:17:13', 'makanan-berat'),
(2, 'Es Boba', 'Tepung tapioka sebanyak 100 gram.\r\nNutrijel coklat sebanyak satu bungkus.\r\nAir panas 75 ml untuk membuat adonan boba.\r\nGula aren lima sendok makan.\r\nSirup gula jawa secukupnya.\r\nSusu cair secukupnya.\r\nEs batu sesuai selera.\r\nAir secukupnya.', '1. Campur tepung tapioka, nutrijel, dan air panas. Uleni hingga tercampur rata lalu buat-bulatan kecil. Taburi dengan tepung tapioka agar tidak lengket.\r\n\r\n2. Didihkan air kemudian rebus boba hingga mengapung, lalu tiriskan.\r\n\r\n3. Masukkan boba dan gula air dalam 100 ml air, masak hingga mendidih.\r\n\r\n4. Masukkan es batu ke dalam gelas, tuangkan sirup gula merah sesuai selera, tambahkan boba, dan susu cair.\r\n\r\n5. Sajikan selagi masih dingin.', 50, 'boba.jpg', '2022-09-29 18:51:46', '2022-07-31 02:52:46', 'minuman'),
(3, 'Soto Ayam Lamongan', '500 gr ayam\r\n\r\nBumbu halus :\r\n8 siung bawang merah\r\n4 siung bawang putih\r\n4 butir kemiri\r\n1 sdm ketumbar\r\nSejumput jinten\r\n1 ruas jari kunyit\r\n1 ruas jari jahe\r\n\r\nBumbu pelengkap :\r\n1 jempol lengkuas (geprek)\r\n3 lembar daun jeruk\r\n1 batang serai (memarkan)\r\n1 sachet kaldu sapi\r\nsecukupnya Garam dan gula\r\n\r\nBahan koya :\r\n10 kerupuk udang (saya pakai kerupuk cumi)\r\n2 sdm bawang putih goreng\r\n\r\nSambal :\r\n4 butir kemiri (goreng)\r\n20 bh cabe rawit (rebus sampai lunak)\r\n\r\nPelengkap :\r\nMie soun (rendam dengan air hangat sebentar lalu tiriskan)\r\nTelur rebus\r\nJeruk nipis\r\nBawang goreng\r\nDaun Bawang (iris²)\r\nSeledri (iris kecil²)', '1. Cuci ayam,beri air perasan jeruk nipis diamkan 10 menit cuci sampai bersih,didihkan air masukkan ayam rebus selama 1 menit buang airnya\r\n\r\n2. Panaskan minyak goreng, Tumis bumbu halus dan bumbu pelengkap sampai harum, beri air,tunggu sampai mendidih dan masukkan Ayam rebus sampai ayam lunak,\r\n\r\n3. Angkat ayam dan goreng ayam, lalu suwir² ayam\r\n\r\n4.Untuk kuahnya test rasa beri taburan seledri dan bawang daun serta bawang goreng\r\n\r\n5. Untuk bikin koya remas² kerupuk haluskan dengan bawang putih goreng (saya pakai cooper)\r\n\r\n6. Untuk sambelnya jadikan satu kemiri yang sudah di goreng dan cabe yang sudah di rebus,blender semua tambahkan air panas bila terlalu kental\r\n\r\n7. Untuk penyajian ambil nasi beri kuah soto daiatasnya beri suwiran ayam,koya telur bawang daun,seledri dan bawang goreng,jangan lupa perasan jeruk nipis,nikmati soto selagi hangat.', 68, 'soto.jpeg', '2022-08-14 07:34:31', '2022-07-30 07:15:40', 'makanan-berat'),
(4, 'Corn Dog Mozarella', '5 bh sosis\r\nKeju mozarella\r\n250 gr tepung roti\r\n230 gr terigu serbaguna\r\n1/4 sdt garam\r\n30 gr gula pasir\r\n1 btr telur\r\n215 ml air\r\nMinyak goreng', 'Potong sosis menjadi 3 bagian. Potong keju seukuran 1 ruas jari. Tusuk pada tusukan sate. Sisihkan\r\nMasukkan terigu, garam, gula, dan air. Aduk rata menggunakan wisk.\r\nMasukkan telur. Aduk rata kembali.\r\nCelupkan isian pada adonan basah. Lalu gulingkan pada tepung roti.\r\nPanaskn minyak. Goreng hingga matang. Angkat. Beri toping saus dan mayonise\r\nMakanan siap dihidangkan', 27, 'corn-dog.jpg', '2022-10-11 22:50:39', '2022-07-30 19:40:12', 'makanan-ringan'),
(5, 'Telur Gulung', '3 telur\r\n100 ml air\r\nGaram secukupnya\r\nKaldu bubuk secukupnya\r\n1 keping bihun jagung\r\nTusukan sate secukupnya', '1. Rendam bihun pakai air biasa (bukan air panas) hingga bihun mengembang, kemudian tiriskan di atas tisu agar tidak lembab.\r\n\r\n2. Campur telur, air ,garam, kocok rata.\r\n\r\n3. Panaskan minyak (agak banyak), tunggu hingga minyak benar-benar panas.\r\n\r\n4. Ambil secukupnya bihun, masukkan ke minyak panas sebentar, langsung digulung dengan tusuk sate, padatkan di pinggiran wajan.\r\n\r\n5. Tuang telur (agak tinggi, agar telur tidak menggumpal).\r\n\r\n6. Kemudian gulung-gulung dengan bihun tadi, padatkan di pinggiran wajan agar tidak menyerap minyak juga. Sajikan.', 18, 'telur-gulung.jpg', '2022-08-13 03:27:50', '2022-07-30 09:43:43', 'makanan-ringan'),
(6, 'Ayam Rendang', '1 ekor ayam kampung, potong 4 bagian\r\n250 g kacang merah segar\r\n1200 ml air\r\n100 ml santan instan\r\n7 lembar daun jeruk\r\n3 batang serai, memarkan\r\n2 cm jahe, memarkan\r\n1 lembar daun kunyit\r\n3 cm kayu manis\r\n2 butir kapulaga, memarkan\r\n1 butir pekak\r\n2 butir cengkih\r\n1 butir asam kandis\r\n1 sdm gula merah sisir\r\n5 sdm Bango Kecap Manis\r\n1 sdt Royco Kaldu Ayam\r\n2 sdm minyak, untuk menumis\r\n\r\nBumbu Halus:\r\n50 g cabai merah keriting\r\n12 butir bawang merah\r\n5 cm lengkuas\r\n3 siung bawang putih\r\n2 cm kunyit\r\n½ sdm garam', '1. Bersihkan Daging ayam terlebih dahulu\r\n\r\n2. Panaskan minyak, tumis bumbu halus, daun jeruk, serai, dan jahe hingga harum.\r\n\r\n3. Masukkan air, daging ayam, kacang merah, 50 ml santan, dan daun kunyit. \r\n\r\n4. Masak sambil diaduk hingga mendidih. Kecilkan api.\r\n\r\n5. Tambahkan sisa bahan, kayu manis, cengkih, pekak, kapulaga, dan asam kandis. Masak sambil diaduk sesekali hingga airnya menyusut.\r\n\r\n6. Masukkan sisa santan, gula merah, Bango Kecap Manis, dan Royco Kaldu Ayam. Masak hingga airnya hampir terserap habis. Angkat. Sajikan.\r\n\r\n7. Makanan siap disajikan', 25, 'rendang-ayam.jpg', '2022-08-16 15:43:57', '2022-07-30 19:14:40', 'makanan-berat'),
(7, 'Flower Tea Latte', '40 kuntum bunga telang kering\r\n50 ml simple syrup\r\nes batu secukupnya\r\n200 ml air mendidih\r\n100 ml susu evaporasi / whipping cream', '1. Rendam bunga telang dengan air mendidih selama 15 menit sampai berubah warna menjadi warna biru gelap.\r\n\r\n2. Saring dan biarkan dingin.\r\n\r\n3. Tuang ke gelas simple syrup, air bunga telang, es batu bunga telang, dan es batu.\r\n\r\n4. Tuangkan susu evaporasi/whipping cream.\r\n\r\n5. Minuman siap disajikan', 8, 'flower-tea.jpg', '2022-08-12 10:16:26', '2022-07-31 03:03:13', 'minuman'),
(8, 'Rendang Sapi', '1 kg daging sapi\r\n3 butir kelapa, diambil santan kental dan santan encernya\r\n4 lembar daun jeruk\r\n3 batang serai, memarkan\r\n4 butir asam kandis\r\n100ml minyak goreng\r\n5 gram garam\r\n\r\nBumbu rendang daging sapi 1 Kg:\r\n60 gram bawang merah\r\n50 gram bawangputih\r\n250 gram cabai merah besar\r\n100 gram lengkuas\r\n50 gram kemiri\r\n2 gram cengkeh', '1. Bersihkan daging sapi\r\n\r\n2. Haluskan semua bahan Bumbu dengan diulek atau diblender.\r\n\r\n3. Tumis bumbu dengan sedikit minyak goreng hingga wangi.\r\n\r\n4. Masukkan batang serai, daun jeruk, asam kandis dan garam, aduk rata.\r\n\r\n5. Tuangi santan dan dididihkan, masukkan daging.\r\n\r\n6. Masak dengan api kecil selama beberapa jam sampai daging empuk dan bumbu kecoklatan sesuai selera.\r\n\r\n7. Matikan kompor dan makanan siap dihidangkan', 13, 'rendang-sapi.jpg', '2022-08-14 01:44:58', '2022-07-30 19:30:19', 'makanan-berat'),
(37, 'Onion Rings', '1 bh bawang bombai ukuran sedang.\r\n1 bungkus tepung instant super crispy\r\nAir dingin kulkas secukupnya\r\nMinyak untuk menggoreng', '1. Kupas kulit bawang lalu potong berbentuk cincin/ring\r\n\r\n2. Bagi 2 bagian tepung bumbu, yang 1 bagian diberi air dingin secukupnya\r\n\r\n3. Masukkan potongan bawang bombai ke tepung kering lalu celup ke tepung basah dan gulingkan lagi di tepung kering, tekan-tekan perlahan\r\n\r\n4. Panaskan minyak agak banyak, masukkan onion ring goreng hingga kuning keemasan dan krispi. Angkat dan tiriskan\r\n\r\n5. Sajikan dengan saus dan mayonaise.', 3, 'onion-rings.jpg', '2022-08-06 22:50:44', '2022-07-31 07:08:40', 'makanan-ringan'),
(38, 'Crepes', '250 ml air\r\n10 sdm tepung beras\r\n6 sdm gula halus\r\n4 sdm tepung maizena\r\n2 sdm tepung terigu protein sedang\r\n2 sdm susu bubuk putih\r\n1 butir telur\r\n1/2 sdt vanili bubuk\r\n1/2 sdt baking powder\r\nsejumput garam', '1. Campurkan semua bahan kering, aduk rata.\r\n\r\n2. Kocok telur, masukkan ke dalam tepung. Tuang air, aduk merata hingga menjadi adonan yang cair.\r\n\r\n3. Siapkan teflon anti lengket. Panaskan di atas api hingga benar-benar panas.\r\n\r\n4. Coba percikkan air pada teflon, jika sudah berbunyi ces atau air langsung menguap, berarti teflon sudah siap.\r\n\r\n5. Tuang satu sendok sayur atau secukupnya hingga menutupi semua permukaan teflon. Panggang dengan api kecil agar tidak gosong. Crepes yang krispi akan memiliki permukaan kulit yang halus.\r\n\r\n6. Tabur topping gula pasir, meses atau keju parut. \r\n\r\n7. Jika sudah terlihat kering, ambil satu sisi dan lipat crepes. Angkat. Lakukan hingga adonan habis.', 8, 'crepes.jpg', '2022-08-12 18:43:29', '2022-07-31 07:12:55', 'makanan-ringan'),
(39, 'Dalgona Cofee', '2 sdm kopi hitam instan\r\n2 sdm gula pasir\r\n2 sdm air panas\r\n500 ml susu cair\r\nes batu secukupnya', '1. Aduk rata kopi hitam, gula pasir, dan air panas. Kocok menggunakan ballon whisk atau mixer kecepatan tinggi hingga berbuih dan menjadi foam. Sisihkan.\r\n\r\n2. Masukkan es batu ke dalam dua buah gelas saji, tuangkan susu cair hingga ¾ penuh.\r\n\r\n3. Tambahkan foam kopi di atasnya. \r\n\r\n4. Sajikan segera.', 3, 'dalgona.jpg', '2022-08-13 23:03:02', '2022-07-31 07:28:25', 'minuman'),
(40, 'Salad Buah', '2 buah apel hijau\r\nAnggur (secukupnya)\r\n1/4 buah semangka\r\n1 bungkus nata de coco\r\n1/2 buah jeruk nipis\r\n125 ml yoghurt plain\r\n100 gr mayonnaise \r\n50 ml susu kental manis\r\n1/2 sdt garam\r\nKeju \r\nAir', '1. Menyiapkan saus atau dressing merupakan langkah awal yang diperlukan dalam cara membuat salad buah. Untuk Itu, Anda bisa campurkan yoghurt, susu kental manis, mayonnaise, serta garam ke dalam sebuah wadah. Aduk hingga semua bahan tercampur merata.\r\n\r\n2. Setelah bahan dressing (saus) sudah siap, Anda bisa masukan ke dalam lemari es untuk mendinginkannya sejenak\r\n\r\n3. Selanjutnya, siapkan buah. Pertama potong dadu buah apel dan rendam di dalam air yang telah dicampurkan jeruk nipis agar warna apel tidak berubah jadi kuning\r\n\r\n4.  Selanjutnya potong dadu semangka. \r\n\r\n5. Lalu siapkan mangkuk saji. Mulailah tata semua buah, seperti apel, semangka, anggur, dan nata de coco ke dalam mangkuk sai\r\n\r\n6. Tuang saus yang sudah disiapkan di atas salad buah lalu aduk secara perlahan hingga merata. Taburkan keju sesuai selera sebagai topping\r\n\r\n7. Salad buah yoghurt segar sudah bisa Anda nikmati jadi dessert sehat untuk Anda yang sedang diet', 10, 'salad-buah-yoghurt.jpg', '2022-08-23 21:48:28', '2022-07-31 07:51:50', 'makanan-ringan'),
(41, 'Ayam Kecap Saus Tiram', '500 gr daging ayam\r\n1/2 bh jeruk nipis\r\nminyak goreng untuk menumis\r\n1/2 bawang bombai\r\n50 ml saus tiram\r\n50 ml kecap manis\r\n100 ml air', '1. Langkah sederhana membuat ayam kecap saus tiram dimulai dengan mencuci bersih dan memotong daging ayam sesuai selera. Selanjutnya, keringkan terlebih dahulu\r\n\r\n2. Setelah daging ayam kering, goreng ayam sebentar hingga setengah matang lalu tiriskan\r\n\r\n3. Jangan ganti semua minyak bekas ayam goreng. Sisihkan sedikit untuk menumis bawang bombay yang dicampur dengan saus tiram, kecap manis. Setelah bawang bombay layu dan harum tambahkan air secukupnya\r\n\r\n4. Selanjutnya, masukan ayam daging ayam ke dalam wajan berisi bumbu. Aduk perlahan lalu tutup wajan agar panasnya merata dan membuat bumbu ayam kecap saus tiram merata sampai ke dalam\r\n\r\n5. Setelah bumbu atau kuah ayam kecap sudah mengental dan menyusut, peras air lemon secukupnya dan aduk perlahan lalu siap dihidangkan', 5, 'ayam-kecap.jpg', '2022-08-12 18:50:19', '2022-07-31 07:55:43', 'makanan-berat'),
(42, 'Es Cocktail', '200 gr buah nanas\r\n200 gr buah pepaya\r\n200 gr buah bengkuang\r\n2 sdm air kapur sirih\r\n500 ml air\r\n500 ml air\r\n120 gr gula pasir\r\n80 ml Frisian Flag Kental Manis Full Cream Gold yang Nikmat\r\n½ batang kayu manis\r\n3 sdm air jeruk nipis', '1. Bulatkan pepaya dengan cetakan. Campurkan air, pepaya, dan air kapur sirih sisihkan 15 menit\r\n\r\n2. Potong bengkuang, kotak kecil\r\n\r\n3. Potong nanas sesuai selera\r\n\r\n4. Masak air dengan gula dan kayu manis\r\n\r\n5. Tambahkan Frisian Flag Kental Manis Full Cream Gold yang Nikmat, aduk rata\r\n\r\n6. Campurkan bengkuang, nanas, pepaya, dan kuah susu\r\n\r\n7. Tuang es ke gelas, tambahkan campuran cocktail, beri air jeruk nipis', 4, 'Es-Cocktail.jpg', '2022-08-12 19:03:55', '2022-07-31 08:05:29', 'minuman'),
(43, 'Kue Lidah Kucing', '150 gr margarin\r\n70 gr gula halus\r\n½ sdt vanilla\r\n40 gr susu bubuk Frisian Flag Full Cream\r\n160 gr tepung terigu\r\n30 gr maizena\r\n125 gr putih telur', '1. Kocok margarin dan gula bubuk hingga lembut tambahkan vanilla\r\n\r\n2. Kocok putih telur di wadah terpisah, mixer hingga kaku\r\n\r\n3. Masukkan kocokan telur ke dalam margarin sedikit demi sedikit lalu tambahkan tepung maizena, tepung terigu, dan susu bubuk, aduk rata\r\n\r\n4. Cetak ke dalam loyang lidah kucing yang sudah diolesi mentega. Panggang dalam oven 175 C selama 15 menit', 9, 'kue.jpg', '2022-08-14 01:43:39', '2022-07-31 08:10:20', 'makanan-ringan'),
(44, 'Pisang Owol (Jawa Tengah)', '6 buah pisang raja\r\n2 sdm mentega\r\n2 sdm cokelat meses\r\n50 g keju cheddar, parut\r\n100 ml Susu Kental Manis Frisian Flag Cokelat', '1. Panaskan mentega, goreng pisang yang sudah dipipihkan hingga agak kering dibagian luarnya atau menjadi berwarna coklat.\r\n\r\n2. Angkat dan sajikan di piring saji,\r\n\r\n3. Siram dengan Susu Kental Manis Frisian Flag Cokelat.\r\n\r\n4. Taburi keju dan cokelat meses hingga merata.', 6, 'pisang-owol.jpg', '2022-08-12 15:33:34', '2022-07-31 08:21:44', 'makanan-ringan'),
(45, 'Lemon Tea', '1 kantung Teh Celup SariWangi\r\n2 sdt Gula Pasir\r\n2 potong Jeruk Lemon\r\n50 ml Air Panas\r\n150 ml Air Dingin\r\n​6 buah Es Batu', '1. Seduh Teh Celup SariWangi di dalam 50 ml air panas.\r\n\r\n2. Tambahkan gula pasir, lalu aduk hingga merata.\r\n\r\n3. Peras jeruk lemon. Kemudian, tuangkan air jeruk lemon ke dalam teh.\r\n\r\n4. Masukkan es batu dan tambahkan 150 ml air dingin.\r\n\r\n5. Aduk hingga sari lemon bercampur dengan teh.\r\n\r\n6. Tambahkan irisan lemon sebagai hiasan. SariWangi Ice Lemon Tea siap dihidangkan.', 2, 'lemontea.jpg', '2022-08-05 05:53:48', '2022-07-31 08:35:29', 'minuman'),
(46, 'Thai Tea', '2 sdt daun teh Thailand\r\n250 ml air putih\r\n2 sdm fibber creme\r\n5 sdm susu kental manis\r\nEs batu secukupnya', '1. Masak air dan daun teh hingga mendidih.\r\n\r\n2. Setelah mendidih, diamkan lebih kurang 15 menit.\r\n\r\n3. Saring teh ke dalam gelas, lalu masukkan fiber creme dan susu kental manis kemudian aduk merata (koreksi manisnya).\r\n\r\n4. Masukkan es batu secukupnya.\r\n\r\n5. Thai tea siap dinikmati.', 2, 'thaitea.jpg', '2022-07-31 22:59:43', '2022-07-31 08:46:35', 'minuman'),
(47, 'Ayam Katsu', '300 gr Ayam fillet\r\n100 gr Tepung Roti\r\n80 gr Tepung Terigu\r\nGaram secukupnya\r\n½ sdt Paprika bubuk\r\n1 butir Telur\r\n300 ml susu cair\r\nMinyak untuk menggoreng', '1. Masukkan tepung terigu 80 gr ke dalam mangkok, garam 1/2 sdt, paprika bubuk 1/2 sdt, telur 1 butir, susu cair Frisian Flag Purefarm Full Cream 300ml lalu aduk merata\r\n\r\n2. Siapkan tepung roti 100 gr, siapkan ayam fillet 300 gr, balut ayam tersebut dengan telur lalu tepung roti\r\n\r\n3. Masukkan ayam ke dalam wajan dengan api sedang dan minyak yang panas lalu goreng sampai berwarna kecoklatan, \r\n\r\n4. Chicken katsu siap untuk dihidangkan', 9, 'ayam.jpeg', '2022-08-14 01:43:56', '2022-08-01 00:45:05', 'makanan-berat'),
(48, 'Pudding Cokelat', '1200 ml Air\r\n30 gr Cokelat Bubuk\r\n50 gr Susu Bubuk\r\n200 gr Gula Pasir\r\n7 gr Agar-agar\r\n15 gr Jelly Bubuk\r\n250 gr Susu Kental Manis', '1. Campurkan bahan pudding dalam mangkuk\r\n\r\n2. Tambahkan Susu Kental Manis Cokelat \r\n\r\n3. Tuang ke dalam panci, aduk, masak hingga mendidih\r\n\r\n4. Tuang ke dalam cetakan, lalu dinginkan\r\n\r\n5. Dinginkan hingga mengeras\r\n\r\n6. Disarankan sajikan pudding dengan Vla', 3, 'puding.jpg', '2022-08-12 10:49:16', '2022-08-01 00:53:56', 'makanan-ringan'),
(49, 'Ayam Geprek', '2 potong ayam goreng tepung\r\n1 siung bawang putih\r\n5 bh cabai rawit merah atau sesuai selera\r\n80 gr keju mozzarella\r\n60 gr keju parut\r\n1 sdm bumbu tabur rasa keju\r\n200 ml susu cair Frisian Flag Purefarm Low Fat\r\nSecukupnya garam', '1. Goreng ayam yang sudah diungkep hingga matang merata. Setelah matang, sisihkan\r\n\r\n2. Untuk saus kejunya, masak 200 ml susu cair\r\n\r\n3. Purefarm Low Fat dengan 60 gr keju parut, 80 gr keju mozzarella, 1 sdm bumbu tabur rasa keju, ¼ sdt garam, masak hingga mengental\r\n\r\n4. Langkah pembuatan sambal geprek: Haluskan 1 siung bawang putih, cabai rawit dan garam sesuai selera\r\n\r\n5. Geprek 2 potong ayam goreng, siramkan saus keju di atasnya\r\n\r\n6. Hidangan dari resep ayam geprek Saus Keju siap disajikan', 4, 'geprek.jpg', '2022-08-14 01:44:21', '2022-08-04 19:20:42', 'makanan-berat'),
(50, 'Capcay', '50 gram jagung muda \r\n2 batang wortel\r\n2 batang daun bawang\r\n150 gram brokoli\r\nRebus matang 150 gram kembang kol\r\nRebus matang 12 ekor udang sedang \r\n1 sdt tepung maizena larutkan dengan sedikit air \r\n100 ml air 2 sdm minyak goreng\r\n\r\nBumbu:\r\n3 siung bawang putih\r\nMemarkan 3 cm jahe\r\nMemarkan 2 sdm saus tiram \r\n1 sdt garam \r\n1 sdt merica bubuk \r\n1 sdm minyak wijen', '1. Panaskan minyak goreng, tumis bawang putih dan jahe. Masukkan udang dan saus tiram, aduk rata. Tambahkan garam, merica, dan minyak wijen. Aduk rata. \r\n\r\n2. Masukkan air, masak hingga mendidih. Kentalkan dengan larutan tepung maizena. \r\n\r\n3. Masukkan jagung, wortel, daun bawang, brokoli, dan kembang kol. Masak sebentar. Angkat. Sajikan hangat.', 5, 'capcay.jpg', '2022-08-14 01:44:34', '2022-08-04 19:56:34', 'makanan-berat'),
(51, 'Cokelat Panas', '½ Cangkir kecil bubuk cokelat\r\n1 Sendok teh ekstrak vanila\r\nSusu kental manis\r\nSejumput garam\r\nAir panas', '1. Campurkan seluruh bahan tersebut. \r\n\r\n2. Jika kurang panas, kamu bisa memasaknya di dalam panci.\r\n\r\n3. Hindari memasak hingga minuman cokelat mendidih, ya agar rasanya tidak pahit\r\n\r\n4. Cokelat Panas siap disajikan', 4, 'cokelat.jpg', '2023-01-05 20:34:39', '2022-08-04 20:51:25', 'minuman'),
(52, 'Dessert Box', '10 potong wafer rasa cokelat atau apa saja\r\n250 ml susu cair\r\n3 sdm kental manis\r\n2 sdm keju parut \r\n1 sdm maizena, larutkan dengan air secukupnya\r\n1 sdt margarin', '1. Hancurkan wafer hingga halus, sisihkan.\r\n\r\n2. Untuk vla, panaskan susu cair dan kental manis. Aduk rata hingga larut. \r\n\r\n3. Masukkan keju dan margarin, aduk rata. Tuang maizena yang sudah dilarutkan dengan air secukupnya, aduk hingga matang mengental. Angkat. \r\n\r\n4. Siapkan wadah mika, tata wafer di dasar, tuang vla secukupnya, tabur wafer lagi, tutup lagi dengan vla. Beri sedikit tabura wafer halus di atasnya.\r\n\r\n5. Simpan di dalam kulkas, nikmati dessert box selagi dingin.', 3, 'dessert.jpg', '2022-08-12 17:18:13', '2022-08-04 20:59:37', 'makanan-ringan'),
(53, 'Wedang Jahe', '2 rimpang jahe, geprek\r\n1 batang serai, memarkan\r\n1 liter air\r\n7 – 10 cm kayu manis \r\nGula aren secukupnya\r\nMadu secukupnya', '1. Tuang air ke dalam panci rebus lalu panaskan dengan api sedang.\r\n\r\n2. Masukkan jahe, serai, gula aren, dan kayu manis ke dalam air. \r\n\r\n3. Masak hingga mendidih dan beraroma wangi.\r\n\r\n4. Jika sudah mendidih, masukkan madu sesuai selera. Aduk dan masak kembali hingga mendidih.\r\n\r\n5. Saring air wedang dan tuang ke dalam gelas saji.\r\n\r\n6. Sajikan dalam keadaan hangat atau beri es batu jika suka wedang dingin. Kamu juga bisa menambahkan irisan lemon jika suka.', 6, 'wedang-jahe.png', '2023-01-05 20:46:57', '2022-08-04 21:07:43', 'minuman'),
(54, 'Tom Yum Seafood', '8 udang kupas\r\n4 bakso ikan\r\n4 jamur kancing kupas\r\n8 lembar daun jeruk\r\n1 batang serai\r\n4 sdm air jeruk nipis\r\n4 cabai keriting merah dihaluskan\r\n2 sdt penyedap rasa\r\n1 sdm gula pasir\r\n1 sdt garam\r\n700 ml air\r\n2 sdm minyak goreng', '1. Keprek serai lalu potongi jamur kancing menjadi dua bagian.\r\n\r\n2. Potongi juga bakso ikan jadi 4 bagian lalu sisihkan.\r\n\r\n3. Panaskan minyak goreng lalu masukkan cabai keriting merah halus dan aduk merata.\r\n\r\n4. Masukkan air, daun jeruk, serai, bakso ikan, jamur kancing, dan air jeruk nipis.\r\n\r\n5. Tambahkan gula, garam, dan penyedap rasa secukupnya.\r\n\r\n6. Aduk merata lalu masukkan udang kupas, masak sampai matang, dan sajikan.', 10, 'tom-yam.jpg', '2023-01-05 20:15:44', '2022-08-04 21:13:07', 'makanan-berat'),
(55, 'Ice Lemonad', '2 liter air putih matang\r\n400 gram gula pasir\r\n400 ml perasan buah jeruk lemon\r\nEs batu secukupnya', '1. Campurkan gula dan segelas air ke dalam panci, masak dan didihkan gula sampai larut. Matikan kompor dan biarkan hingga mendingin.\r\n\r\n2. Tuang perasan lemon, gula pasir, serta air putih. Aduk seluruh bahan hingga merata.\r\n\r\n3. Campurkan es batu sesuai selera.\r\n\r\n4. Iced lemonade siap untuk dinikmati bersama teman.', 9, 'iced-lemonade.jpg', '2023-01-05 20:36:19', '2022-08-04 21:20:53', 'minuman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rifqi Irfansyah', 'admin', 'admin@gmail.com', NULL, '$2y$10$rmDhhCV1TPKxUflXOGUAxOx/q2SvItccuUMOyj0aerZlwhyY9JTru', 'JGEfKkYjZMovxYPOFd9DK3irFh57LjUbrw7gFgALv81ba7pUsurxsGWsBQJi', '2022-07-23 19:00:37', '2022-07-23 19:00:37');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD UNIQUE KEY `level` (`level`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
