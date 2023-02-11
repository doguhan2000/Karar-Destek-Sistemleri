-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Ara 2022, 18:31:45
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ilyas`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abonelik`
--

CREATE TABLE `abonelik` (
  `abo_id` int(255) NOT NULL,
  `abo_ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `üye_id` int(6) NOT NULL,
  `aboücret` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `abonelik`
--

INSERT INTO `abonelik` (`abo_id`, `abo_ad`, `üye_id`, `aboücret`) VALUES
(1, 'A', 1, 200),
(2, 'B', 2, 180),
(3, 'C', 3, 150),
(4, 'N', 4, 300),
(5, 'K', 5, 525),
(6, 'H', 6, 320),
(7, 'L', 7, 360),
(8, 'S', 8, 200),
(9, 'İ', 9, 250);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Eposta` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `Şifre` varchar(10) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`ID`, `Eposta`, `Şifre`) VALUES
(0, 'ilyas@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cinsiyet`
--

CREATE TABLE `cinsiyet` (
  `cins_id` int(255) NOT NULL,
  `cinsad` varchar(6) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `cinsiyet`
--

INSERT INTO `cinsiyet` (`cins_id`, `cinsad`) VALUES
(1, 'E'),
(2, 'K');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilçe`
--

CREATE TABLE `ilçe` (
  `ilçe_id` int(255) NOT NULL,
  `şube_id` int(255) NOT NULL,
  `ilçeadı` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `şubesayısı` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `ilçe`
--

INSERT INTO `ilçe` (`ilçe_id`, `şube_id`, `ilçeadı`, `şubesayısı`) VALUES
(1, 1, 'Buca Şubesi', 1),
(2, 2, 'Balçova Şubesi', 1),
(3, 3, 'Konak Şubesi', 1),
(4, 4, 'Bornova Şubesi', 1),
(5, 5, 'Çeşme Şubesi', 1),
(6, 6, 'Çiğli Şubesi', 1),
(7, 7, 'Urla Şubesi', 1),
(8, 8, 'Karşıyaka Şubesi', 1),
(9, 9, 'Güzelbahçe Şubesi', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `çalışan`
--

CREATE TABLE `çalışan` (
  `cal_id` int(255) NOT NULL,
  `cins_id` int(255) DEFAULT NULL,
  `şube_id` int(255) DEFAULT NULL,
  `cal_ad` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `cal_soyad` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `cal_tel` int(255) DEFAULT NULL,
  `şubeadı` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `cinsad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `çalışan`
--

INSERT INTO `çalışan` (`cal_id`, `cins_id`, `şube_id`, `cal_ad`, `cal_soyad`, `cal_tel`, `şubeadı`, `cinsad`) VALUES
(0, 0, 0, '0', '0', 0, NULL, NULL),
(1, 1, 1, 'METE', 'AYDIN', 2147483647, 'Buca Şubesi', 'E'),
(2, 1, 1, 'İLYAS', 'DEMİR', 2147483647, 'Buca Şubesi', 'E'),
(3, 2, 2, 'AYLEGÜL', 'AK', 2147483647, 'Balçova Şubesi', 'K'),
(4, 2, 3, 'EZGİ', 'AY', 2147483647, 'Konak Şubesi', 'K'),
(5, 1, 4, 'DOĞUHAN', 'DEMİRELLİ', 2147483647, 'Bornova Şubesi', 'E'),
(6, 1, 5, 'AYBERK', 'TOK', 2147483647, 'Çeşme Şubesi', 'E'),
(7, 2, 6, 'SALİME', 'ÇAN', 2147483647, 'Çiğli Şubesi', 'K'),
(8, 2, 7, 'AYCAN', 'ARSIZ', 2147483647, 'Urla Şubesi', 'K'),
(9, 1, 8, 'FARUK', 'GAMSIZ', 2147483647, 'Karşıyaka Şubesi', 'E'),
(10, 2, 9, 'PEMBE', 'ALLAHKERİM', 2147483647, 'Güzelbahçe Şubesi', 'K');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `üye`
--

CREATE TABLE `üye` (
  `üye_id` int(255) NOT NULL,
  `şube_id` int(255) DEFAULT NULL,
  `abo_id` int(255) NOT NULL,
  `cins_id` varchar(1) NOT NULL,
  `ad` text DEFAULT NULL,
  `soyad` text DEFAULT NULL,
  `şubeadı` varchar(255) DEFAULT NULL,
  `aboad` varchar(255) DEFAULT NULL,
  `cinsad` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `üye`
--

INSERT INTO `üye` (`üye_id`, `şube_id`, `abo_id`, `cins_id`, `ad`, `soyad`, `şubeadı`, `aboad`, `cinsad`) VALUES
(0, 0, 0, '[', '[value-5]', '[value-6]', NULL, NULL, NULL),
(1, 1, 1, '1', 'ALİ', 'VELİ', 'Buca Şubesi', 'A', 'E'),
(2, 2, 2, '1', 'ATA', 'VALİ', 'Balçova Şubesi', 'K', 'E'),
(3, 3, 3, '2', 'AYŞE', 'VELİ', 'Konak Şubesi', 'A', 'K'),
(4, 4, 4, '2', 'AYBERK', 'SÜTEN', 'Bornova Şubesi', 'İ', 'E'),
(5, 5, 5, '2', 'ÖZGE', 'CADI', 'Çeşme Şubesi', 'S', 'K'),
(6, 6, 6, '1', 'BERK', 'ŞAHPAZ', 'Çiğli Şubesi', 'B', 'E'),
(7, 7, 7, '2', 'MÜLKİYET', 'NAZ', 'Urla Şubesi', 'K', 'K'),
(8, 8, 8, '1', 'ABDÜLMUTTALİP', 'SÜTÖÇÜ', 'Karşıyaka Şubesi', 'H', 'E'),
(9, 9, 9, '1', 'AHADİ', 'KOÇKOPARAN', 'Güzelbahçe Şubesi', 'İ', 'E');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `şubeler`
--

CREATE TABLE `şubeler` (
  `şube_id` int(255) NOT NULL,
  `ilçe_id` int(255) NOT NULL,
  `şubeadı` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `şubesayısı` int(255) NOT NULL,
  `üye_say` int(10) DEFAULT NULL,
  `ciro` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `şubeler`
--

INSERT INTO `şubeler` (`şube_id`, `ilçe_id`, `şubeadı`, `şubesayısı`, `üye_say`, `ciro`) VALUES
(1, 1, 'Buca Şubesi', 1, 13, 20000),
(2, 2, 'Balçova Şubesi ', 1, 11, 15000),
(3, 3, 'Konak Şubesi', 1, 8, 18000),
(4, 4, 'Bornova Şubesi', 1, 10, 30000),
(5, 5, 'Çeşme Şubesi', 1, 12, 52500),
(6, 6, 'Çiğli Şubesi ', 1, 14, 32000),
(7, 7, 'Urla Şubesi ', 1, 11, 36000),
(8, 8, 'Karşıyaka Şubesi ', 1, 15, 20000),
(9, 9, 'Güzelbahçe Şubesi', 1, 17, 25000),
(0, 0, '', 0, NULL, NULL),
(0, 0, '', 0, NULL, NULL),
(0, 0, '', 0, NULL, NULL),
(0, 0, '', 0, NULL, NULL),
(0, 0, 'hey', 0, NULL, NULL),
(0, 0, '', 0, NULL, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abonelik`
--
ALTER TABLE `abonelik`
  ADD PRIMARY KEY (`abo_id`);

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `cinsiyet`
--
ALTER TABLE `cinsiyet`
  ADD PRIMARY KEY (`cins_id`);

--
-- Tablo için indeksler `ilçe`
--
ALTER TABLE `ilçe`
  ADD PRIMARY KEY (`ilçe_id`);

--
-- Tablo için indeksler `çalışan`
--
ALTER TABLE `çalışan`
  ADD PRIMARY KEY (`cal_id`);

--
-- Tablo için indeksler `üye`
--
ALTER TABLE `üye`
  ADD PRIMARY KEY (`üye_id`);

--
-- Tablo için indeksler `şubeler`
--
ALTER TABLE `şubeler`
  ADD KEY `ID` (`şube_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
