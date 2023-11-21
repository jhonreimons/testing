-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 06:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himatek`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(5000) NOT NULL,
  `file_lampiran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama_kegiatan`, `tanggal`, `deskripsi`, `file_lampiran`) VALUES
(1, 'Pemilihan ketua dan Wakil Ketua HIMATEK', '2021-07-09', '                                                                Salam sejahtera untuk kita semua.\r\nMelalui email ini diberitahukan bahwa sehubungan dengan berakhirnya masa kepengurusan HIMATEK 2020/2021, maka kami dari pengurus membuka pendaftaran untuk calon ketua dan wakil ketua HIMATEK 2021/2022.\r\n\r\nAdapun syaratnya adalah sebagai berikut :\r\n1. Calon ketua HIMATEK merupakan angkatan 2019\r\n2. Calon wakil ketua HIMATEK merupakan angkatan 2020\r\n3. Satu calon hanya boleh mengambil 1 nomor\r\n\r\nSilahkan reply email ini dengan format sebagai berikut dan cc ke ce318024 dan ce319027.\r\n\r\nNama Calon Ketua :\r\nNama Calon Wakil Ketua :\r\nVisi :\r\nMisi :\r\n\r\nPendaftaran ini dibuka mulai 15 Juli 2021 - 29 Juli 2021. Segera daftarkan diri Anda untuk HIMATEK yang semakin jaya.\r\n\r\nBerikut kami lampirkan dokumen persyaratannya. Demikian email ini kami sampaikan, atas perhatiannya kami ucapkan terima kasih.\r\n\r\n--\r\nPutri Anjelia Pasaribu\r\nInstitut Teknologi Del\r\nLaguboti, Tobasa, Sumatera Utara\r\n+6281264575546                                                                ', 'Syarat calon ketua dan wakil ketua himpunan_D3TK_signed.pdf'),
(2, 'Kompetisi GEMASTIK XIV Tahun 2021', '2021-08-19', 'Dear Mahasiswa,\r\n\r\nPusat Prestasi Nasional, Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia akan menyelenggarakan kegiatan Pagelaran Mahasiswa Nasional Bidang Teknologi, Informasi, dan Komunikasi (Gemastik) XIV Tahun 2021. Kegiatan ini merupakan salah satu ajang kompetisi di bidang Teknologi, Informasi dan Komunikasi (TIK) untuk meningkatkan kemampuan mahasiswa dan implementasi kebijakan Kampus Merdeka. Kegiatan Gemastik tahun ini akan dilaksanakan secara daring.\r\n\r\nGEMASTIK atau Pagelaran Mahasiswa Nasional bidang Tekonologi Informasi dan Komunikasi, merupakan program Direktorat Kemahasiswaan, Direktorat Jenderal Pembelajaran dan Kemahasiswaan Kementerian Riset, Teknologi dan Pendidikan Tinggi, sebagai upaya untuk meningkatkan kualitas peserta didik sehingga mampu mengambil peran sebagai agen perubahan dalam memajukan TIK dan pemanfaatannya di Indonesia.\r\n\r\n\r\nBerikut ini adalah 11 cabang/divisi lomba GEMASTIK XIV, yaitu:\r\n\r\nDivisi I Pemrograman (Programming)\r\nDivisi II Keamanan Siber (Cyber Security)\r\nDivisi III Penambangan Data (Data Mining)\r\nDivisi IV Desain Pengalaman Pengguna (UX Design)\r\nDivisi V Animasi (Animation)\r\nDivisi VI Kota Cerdas (Smart City)\r\nDivisi VII Karya Tulis Ilmiah TIK (ICT Scientific Paper)\r\nDivisi VIII Pengembangan Perangkat Lunak (Software Development)\r\nDivisi IX Piranti Cerdas, Sistem Benam & IoT (Smart Device, Embedded System & IoT)\r\nDivisi X Pengembangan Aplikasi Permainan (Game Development)\r\nDivisi XI Pengembangan Bisnis TIK (ICT Business Development)\r\n*Pendaftaran TIM ke panitia kompetisi dilaksanakan pada tanggal 15 Juni - 15 Juli 2021.\r\n\r\n*Namun sebagai langkah awal untuk mengikuti kompetisi GEMASTIK XIV Tahun 2021 ini atau sebelum mendaftar ke website panitia kompetisi, dimohon kepada TIM yang akan dan/atau telah terbentuk untuk mengisi form berikut paling lambat tanggal 09 Juli 2021 pukul 17.00 : https://forms.gle/qGncT5nrEDQJhzFt6\r\n\r\nBagi Ketua Tim/Kelompok harap join ke grup WA link berikut ini : https://chat.whatsapp.com/GpehIEaZDAsEQdHRJYv4va\r\n\r\nSEGERA DAFTARKAN TIM ANDA DAN SEMANGAT BERKOMPETISI\r\n\r\n*Informasi lebih lanjut dapat dilihat pada pedoman pelaksanaan kompetisi link berikut ini: https://pusatprestasinasional.kemdikbud.go.id/2021/05/10/pedoman-kegiatan-pagelaran-mahasiswa-nasional-bidang-teknologi-informasi-dan-komunikasi-gemastik-tahun-2021/\r\n\r\nBerikut ini informasi yang dapat dilihat terkait SOSIALISASI GEMASTIK TAHUN 2021 pada tanggal 25 Mei 2021:\r\n\r\n(Part 1) Pembukaan dan Penjelasan Umum : https://youtu.be/9iomzoaHwx8\r\n(Part 2) Juknis Keamanan Siber, Karya Tulis Ilmiah TIK, dan Bisnis TIK : https://youtu.be/4y07kt9HAVk\r\n(Part 3) Juknis Pemograman, Penambangan Data & Perangkat Lunak : https://youtu.be/qB6yHdvTHcs\r\n(Part 4) Petunjuk Pelaksanaan Animasi, Aplikasi Permainan & Kota Cerdas : https://youtu.be/n0s56Eo40ag\r\n(Part 5) Juknis Piranti Cerdas, Sistem Benam, IOT & Tanya Jawab : https://youtu.be/J5pbKs2DCsY\r\nTerima kasih dan Salam.', 'Pedoman-GEMASTIK-2021.pdf'),
(3, 'Konfirmasi Mahasiswa Lulus pada Program MBKM oleh Kemdikbudristek', '2021-08-31', 'Dear Mahasiswa,\r\n\r\nSesuai informasi yang disampaikan pada Sosialisasi Administrasi MBKM pada hari Senin, 12 Juli 2021 yang lalu, Kami sampaikan kembali bagi mahasiswa yang mendaftar dan sudah diterima pada program MBKM oleh Kemdikbudristek pada platform Kampus Merdeka (https://kampusmerdeka.kemdikbud.go.id/) untuk periode Semester Gasal Tahun Ajaran 2021/2022 diharapkan mengkonfirmasi kepada BAA-I melalui tautan berikut: https://bit.ly/KonfirmasiLulusProgramMBKM-DitjenDi... sebelum tanggal 30 Juli 2021.\r\n\r\nDemikian kami sampaikan untuk ditindaklanjuti. Atas perhatiannya, kami ucapkan terima kasih.\r\n\r\n\r\nSalam', 'usecase amonng.jpg.jpg'),
(4, 'INTERNATIONAL VIRTUAL COURSES ITB in SUMMER 2021', '2021-09-29', ',Dear All Students.,Due to COVID-19 pandemic, the Summer Courses Program offered by ITB is replaced by the International Virtual Courses. As has been indicated by its name, the academic activities will be delivered virtually.\r\n\r\nMore than 40 Programs with 80 local and International Collaboration Partner and 200 Expert Lectures.\r\n\r\nList of International Virtual Courses 2021', 'profile-2092113_960_720.png.png.png'),
(5, 'Jadwal Sidang TA II Sistem Informasi T.A. 2020/2021', '2021-09-16', 'Dear Mahasiswa TA II S1SI,\r\n\r\nBerikut ini adalah Jadwal Sidang TA II tahun ajaran 2020/2021 dapat dicek pada link berikut: https://bit.ly/JadwalSidangS1SI\r\n\r\nDemikian informasi ini saya sampaikan. Terima Kasih\r\n\r\nSitoluama, 2021-07-12 17:20:14', '13320041_Jhon Reimon Siagian_D3TK_Pohon(Mindmap).pdf.pdf'),
(6, 'Pengumpulan Proposal Usulan Kegiatan Merdeka Belajar - Kampus Merdeka Semester Gasal 2021/2022', '2021-07-01', 'Dear Mahasiswa,\r\n\r\nSeperti yang sudah disampaikan dalam Sosialisasi Administrasi Merdeka Belajar - Kampus Merdeka (MBKM) pada hari Senin, tanggal 12 Juli 2021 bahwa skema Kegiatan MBKM pada Semester Gasal 2021 ada 3 yaitu :\r\n\r\nKegiatan MBKM oleh Kemendikbud Ristek\r\nKegiatan MBKM oleh Institut Teknologi Del bekerja sama dengan Mitra\r\nKegiatan MBKM oleh Usulan Mahasiswa', '');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id`, `nama`, `nim`, `jabatan`, `no_hp`, `email`, `foto`) VALUES
(1, 'Dedy SR Pardede', '133190041', 'Ketua', '08532321232132', 'dedy@gmail.com', 'ketua1.png'),
(2, 'Lando Marpaung', '13319052', 'Wakil Ketua', '0894334327684', 'jeremy@gmail.com', 'wakil.jpg'),
(3, 'Wati S.Junika H Tobing', '13318002', 'Sekretaris', '085323834953', 'watiw@gmail.com', 'sekretaris.jpg'),
(4, 'Yeremia W Tambunan\r\n\r\n', '13318001', 'Bendahara', '0896342686743', 'suriyanilia@gmail.com', 'bendahara.jpg'),
(5, ' Michael Sagala', '13320054', 'Divisi\r\nPendidikan', '085484581453867', 'hendirk@gmail.com', ''),
(6, 'Okaria Simanjuntak', '13320041', 'DivisiKoordinator tutorial', '0857357382934', 'rian@gmail.com', ''),
(7, 'Nico Ardi Panjaitan', '13319045', 'Ketuakoordinator workshop', '087546325689', 'sentia@gmail.com', ''),
(8, ' Lucky Siregar', '098321348693', 'Divisi Sosial', '0986434576854', 'siska@gmail.com', ''),
(9, 'Angreny N Silalahi', '13309983', 'HUMAS', '09684939490353', 'serin@gmail.com', ''),
(10, 'PitaDavid Tobing', '13394583', 'DIvisi KOMINFO', '08953843284u3', 'pita@gmail.com', ''),
(11, 'Abonando Simarmata', '133248324', 'Dvisi SARPRAS', '08583240402', 'junaidi@gmail.com', ''),
(12, 'Earth Chi', '13368439', 'Divisi Promosi', '08767435493', 'henson@gmail.com', ''),
(13, 'Ruben Siregar', '13302843', 'Dvisi Kompetisi', '09530950355', 'gabriel@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin123', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
