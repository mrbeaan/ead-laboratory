-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 05:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ead-lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `asisten`
--

CREATE TABLE `asisten` (
  `id` int(100) NOT NULL,
  `divisi` varchar(200) NOT NULL,
  `posisi` varchar(200) NOT NULL,
  `nama_asisten` varchar(200) NOT NULL,
  `kode_asisten` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asisten`
--

INSERT INTO `asisten` (`id`, `divisi`, `posisi`, `nama_asisten`, `kode_asisten`, `gambar`) VALUES
(1, '', 'Assistant Coordinator', 'Adidharma Torutama', 'TOR', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/tor.jpg'),
(2, '', 'Treasurer', 'Chaerunnisa Vithaloka', 'VTH', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/vth.jpg'),
(3, '', 'Secretary', 'Retna Adiba', 'RTA', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/rta.jpg'),
(4, 'Logistic', 'Lead', 'Mohammad Aufar', 'MAF', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/maf.jpg'),
(5, 'Logistic', 'Procurement', 'Sang Putu Wiranatha', 'WIR', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/wir.jpg'),
(6, 'Logistic', 'Maintenance', 'Ghifari Akbar', 'GFR', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/gfr.jpg'),
(7, 'Project', 'Lead', 'Faathir Muhammad', 'FAT', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/fat.jpg'),
(8, 'Project', 'Product Development', 'Revandika Siahaan', 'RVD', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/rvd.jpg'),
(9, 'Project', 'Research', 'Azka Julda', 'AZK', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/azk.jpg'),
(10, 'Project', 'Community Service', 'Fico Redha', 'RED', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/red.jpg'),
(11, 'Content', 'Lead', 'Indra Fauzan', 'ZLN', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/zln.jpg'),
(12, 'Content', 'Design & Concept', 'Defny Yutama', 'DYL', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/dyl.jpg'),
(13, 'Event', 'Lead', 'Achmed Ganesha', 'GAG', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/gag.jpg'),
(14, 'Event', 'External Event', 'Syasya Sahira', 'SYA', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/sya.jpg'),
(15, 'Event', 'Internal Event', 'Haidar Alvinanda', 'HAI', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/hai.jpg'),
(16, 'Human Resource', 'Lead', 'Engla Raafi', 'ERF', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/erf.jpg'),
(17, 'Human Resource', 'Issue Solver', 'Anisa Agustina', 'ANS', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/ans.jpg'),
(18, 'Human Relation', 'Lead', 'Isye Adhiwi', 'SYE', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/sye.jpg'),
(19, 'Human Relation', 'Social Media Manager', 'Ayu Fitriani', 'AAR', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/aar.jpg'),
(20, 'Contest', 'Lead', 'Fikri Miftah', 'FMM', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fassistant/fmm.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(100) NOT NULL,
  `nama_event` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `link_event` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama_event`, `description`, `link_event`, `gambar`) VALUES
(1, 'Pelatihan Laravel', '', '', '/img/gallery/gallery-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(100) NOT NULL,
  `nama_event` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `nama_event`, `gambar`, `link`) VALUES
(1, 'Priority 2018', '/img/gallery/priority_2018.jpg', '/gallery/priority-2018'),
(2, 'Welcoming Party 2018', '/img/gallery/welcoming_party.jpg', '/gallery/welcoming-party\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_priority_2018`
--

CREATE TABLE `gallery_priority_2018` (
  `id` int(100) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_priority_2018`
--

INSERT INTO `gallery_priority_2018` (`id`, `gambar`) VALUES
(1, '/img/gallery/gallery-1.jpg'),
(2, '/img/gallery/gallery-2.jpg'),
(3, '/img/gallery/gallery-3.jpg'),
(4, '/img/gallery/gallery-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `praktikum`
--

CREATE TABLE `praktikum` (
  `id` int(100) NOT NULL,
  `nama_praktikum` varchar(200) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `praktikum`
--

INSERT INTO `praktikum` (`id`, `nama_praktikum`, `deskripsi`, `gambar`) VALUES
(1, 'Object Oriented Programming', 'A programming style which is associated with the concepts like class, object, Inheritance, Encapsulation, Abstraction, Polymorphism.', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fpraktikum/oop.png'),
(2, 'Web Application Development', 'A web application framework with expressive, elegant syntax.', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fpraktikum/laravel.png'),
(3, 'Mobile Application Development', 'An open platform that\'s freely available to you as an app developer.', 'https://cpanel.nganggur.id/cpsess5549995106/viewer/home%2fnganggu1%2fead-laboratory.nganggur.id%2fpublic_html%2fimg%2fpraktikum/android.png');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(100) NOT NULL,
  `nama_produk` varchar(225) NOT NULL,
  `link_produk` varchar(200) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `link_produk`, `deskripsi`, `gambar`) VALUES
(1, 'Nganggur.id', 'https://nganggur.id/', 'nganggur.id is a platform that will help you finish your job easily and safely. \r\nWe comes from the problem of brilliant ideas that never realized only because of the lack of experts who were able to.', 'https://nganggur.id/nganggurfull.png'),
(2, 'awfd', 'awg', 'ahwgha', ''),
(3, 'ahw', 'ahw', 'ahw', ''),
(4, 'awhr', 'awrh', 'arwh', '');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(100) NOT NULL,
  `nama_template` varchar(255) NOT NULL,
  `link_template` varchar(225) NOT NULL,
  `link_github` varchar(225) NOT NULL,
  `file` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `nama_template`, `link_template`, `link_github`, `file`, `gambar`) VALUES
(1, 'Dashboard', 'adwg', 'https://github.com/mrbeaan/git-intro', 'http://ead-laboratory.nganggur.id/public.zip', 'https://startbootstrap.com/assets/img/screenshots/themes/sb-admin-2.png'),
(2, 'Creative', '', '', '', 'https://startbootstrap.com/assets/img/screenshots/themes/creative.png'),
(3, 'Agency', '', '', '', 'https://startbootstrap.com/assets/img/screenshots/themes/agency.png'),
(4, 'Grayscale', '', '', '', 'https://startbootstrap.com/assets/img/screenshots/themes/grayscale.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asisten`
--
ALTER TABLE `asisten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_priority_2018`
--
ALTER TABLE `gallery_priority_2018`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `praktikum`
--
ALTER TABLE `praktikum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
