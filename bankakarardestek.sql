-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 29 Ara 2023, 15:05:20
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bankakarardestek`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `altinfiyatlari`
--

DROP TABLE IF EXISTS `altinfiyatlari`;
CREATE TABLE IF NOT EXISTS `altinfiyatlari` (
  `id` int NOT NULL AUTO_INCREMENT,
  `altinFiyati` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `altinfiyatlari`
--

INSERT INTO `altinfiyatlari` (`id`, `altinFiyati`) VALUES
(1, 1300),
(2, 1400),
(3, 1450),
(4, 1250),
(5, 1300),
(6, 1500),
(7, 1500),
(8, 1600),
(9, 1400),
(10, 1350),
(11, 1500),
(12, 1600),
(13, 1600),
(14, 1700),
(15, 1550),
(16, 1450),
(17, 1300),
(18, 1650),
(19, 1900),
(20, 2000),
(21, 2100),
(22, 2200),
(23, 1900),
(24, 2000);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calisanlar`
--

DROP TABLE IF EXISTS `calisanlar`;
CREATE TABLE IF NOT EXISTS `calisanlar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adSoyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `unvanID` int NOT NULL,
  `sure` date NOT NULL,
  `maas` int NOT NULL,
  `calistigiSubeID` int NOT NULL,
  `hedefYuzde` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_calisanlar_unvanlar` (`unvanID`),
  KEY `calistigiSubeID` (`calistigiSubeID`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `calisanlar`
--

INSERT INTO `calisanlar` (`id`, `adSoyad`, `unvanID`, `sure`, `maas`, `calistigiSubeID`, `hedefYuzde`) VALUES
(1, 'Burak Tekin', 1, '2023-12-28', 13000, 1, 90),
(2, 'Orhan Ünal', 3, '2017-08-03', 11500, 1, 76),
(3, 'Arif Kurt', 2, '2020-11-10', 13000, 2, 73),
(4, 'Süleyman Ünal', 3, '2018-12-06', 14000, 1, 77),
(5, 'Yaşar Yalçın', 2, '2021-07-09', 12000, 2, 76),
(6, 'İsmail Bozkurt', 4, '2023-12-28', 12200, 2, 88),
(7, 'Gökhan Yüksel', 1, '2020-12-18', 13000, 3, 77),
(8, 'Mahmut Keskin', 4, '2022-04-13', 11000, 3, 79),
(9, 'Arif Şimşek', 1, '2022-12-27', 10500, 4, 65),
(10, 'Mehmet Çelik', 2, '2020-09-21', 15000, 1, 82),
(11, 'Ali Yılmaz', 1, '2022-11-15', 12000, 2, 85),
(12, 'Ayşe Kaya', 3, '2021-08-20', 11000, 1, 78),
(13, 'Cemal Demir', 2, '2023-02-10', 13000, 3, 90),
(14, 'Deniz Ertürk', 4, '2020-06-25', 12500, 4, 79),
(15, 'Emine Yıldız', 1, '2022-04-03', 13500, 2, 88),
(16, 'Furkan Doğan', 3, '2021-11-30', 11800, 3, 76),
(17, 'Gülşah Çelik', 2, '2023-01-05', 12200, 1, 80),
(18, 'Hakan Korkmaz', 4, '2020-09-10', 14000, 4, 92),
(19, 'Irmak Arslan', 1, '2022-06-15', 12800, 2, 87),
(20, 'Jale Aksoy', 3, '2021-05-12', 11500, 3, 75),
(21, 'Kaan Gür', 2, '2023-03-18', 13200, 1, 89),
(22, 'Leyla Demirci', 4, '2020-12-01', 13800, 4, 91),
(23, 'Mehmet Yılmaz', 1, '2022-08-22', 12300, 2, 86),
(24, 'Nalan Akbulut', 3, '2021-03-07', 11200, 1, 77),
(25, 'Oğuzhan Şahin', 2, '2023-05-25', 12600, 3, 83),
(26, 'Pınar Kaya', 4, '2020-10-30', 14200, 4, 94),
(27, 'Ramazan Çalışkan', 1, '2022-02-14', 13000, 2, 84),
(28, 'Sibel Özdemir', 3, '2021-09-08', 11700, 1, 79),
(29, 'Tolga Yıldız', 2, '2023-04-12', 12400, 3, 81),
(30, 'Umut Erdoğan', 4, '2020-07-18', 13600, 4, 93),
(31, 'Ahmet Demir', 1, '2023-06-10', 12500, 2, 88),
(32, 'Zeynep Çetin', 3, '2020-03-15', 11000, 1, 75),
(33, 'Mert Arıkan', 2, '2022-09-22', 13200, 3, 90),
(34, 'Elif Yaman', 4, '2021-04-27', 11800, 4, 78),
(35, 'Kaan Koç', 1, '2023-02-05', 13500, 2, 87),
(36, 'İrem Aktaş', 3, '2020-11-12', 11200, 3, 76),
(37, 'Mustafa Yıldız', 2, '2022-07-18', 12800, 1, 85),
(38, 'Ece Güler', 4, '2021-12-01', 14000, 4, 92),
(39, 'Berke Aydın', 1, '2022-05-15', 12200, 2, 83),
(40, 'Aylin Aslan', 3, '2021-01-10', 11500, 3, 79),
(41, 'Şahin Atmaca', 1, '2023-12-06', 12000, 0, 65),
(42, 'Gökhan Özcan', 1, '2023-12-12', 11000, 2, 76),
(43, 'Yılmaz Demir', 1, '2023-12-11', 22000, 2, 88);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanilanurunler`
--

DROP TABLE IF EXISTS `kullanilanurunler`;
CREATE TABLE IF NOT EXISTS `kullanilanurunler` (
  `urun_id` int NOT NULL,
  `musteri_id` int NOT NULL,
  `sube_id` int NOT NULL,
  `miktar` int NOT NULL,
  KEY `fk_urun` (`urun_id`),
  KEY `fk_sube` (`sube_id`),
  KEY `fk_musteri` (`musteri_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanilanurunler`
--

INSERT INTO `kullanilanurunler` (`urun_id`, `musteri_id`, `sube_id`, `miktar`) VALUES
(2, 3, 2, 33414),
(4, 20, 1, 27555),
(3, 10, 0, 11233),
(2, 2, 0, 22333),
(5, 5, 2, 10000),
(3, 6, 4, 20000);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

DROP TABLE IF EXISTS `musteriler`;
CREATE TABLE IF NOT EXISTS `musteriler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adSoyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `gelir` int NOT NULL,
  `para` int NOT NULL,
  `krediSkoru` int NOT NULL,
  `varlikSayisi` int NOT NULL,
  `subeID` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subeID` (`subeID`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`id`, `adSoyad`, `tarih`, `gelir`, `para`, `krediSkoru`, `varlikSayisi`, `subeID`) VALUES
(1, 'Salih Özcan', '2023-12-05', 25000, 210000, 1200, 7, 1),
(2, 'Ahmet Sapanca', '2023-12-07', 18000, 12000, 1500, 4, 0),
(3, 'Yiğit Efe Çerçi', '2023-12-13', 10000, 1000, 900, 2, 1),
(4, 'Halil Işık', '2023-12-06', 28000, 70000, 1400, 6, 4),
(5, 'Ayşe Demir', '2023-12-18', 22000, 180000, 1300, 5, 3),
(6, 'Murat Yılmaz', '2023-12-21', 15000, 8000, 1600, 2, 2),
(7, 'Elif Başkan', '2023-12-25', 12000, 1500, 1000, 3, 1),
(8, 'Selin Yıldız', '2023-12-19', 30000, 90000, 1200, 7, 4),
(9, 'Can Gürbüz', '2023-12-23', 20000, 25000, 1400, 5, 1),
(10, 'Merve Akbaş', '2023-12-14', 18000, 2000, 1100, 4, 2),
(11, 'Emirhan Kaya', '2023-12-22', 25000, 70000, 1300, 6, 3),
(12, 'Nihan Yıldız', '2023-12-16', 19000, 12000, 1500, 3, 4),
(13, 'Berkay Karaca', '2023-12-17', 17000, 3000, 1000, 2, 1),
(14, 'Zeynep Çetin', '2023-12-20', 28000, 50000, 1400, 4, 2),
(15, 'Ayşe Demir', '2023-12-18', 22000, 180000, 1300, 5, 3),
(16, 'Mehmet Yılmaz', '2023-12-21', 15000, 8000, 1600, 2, 2),
(17, 'Zehra Başkan', '2023-12-25', 12000, 1500, 1000, 3, 1),
(18, 'Osman Yıldız', '2023-12-19', 30000, 90000, 1200, 7, 4),
(19, 'Ayşe Gürbüz', '2023-12-23', 20000, 25000, 1400, 5, 1),
(20, 'Ahmet Akbaş', '2023-12-14', 18000, 2000, 1100, 4, 2),
(21, 'Zeliha Kaya', '2023-12-22', 25000, 70000, 1300, 6, 3),
(22, 'Süleyman Yıldız', '2023-12-16', 19000, 12000, 1500, 3, 4),
(23, 'Esra Karaca', '2023-12-17', 17000, 3000, 1000, 2, 1),
(24, 'Cemil Çetin', '2023-12-20', 28000, 50000, 1400, 4, 2),
(25, 'Deniz Yılmaz', '2023-12-05', 25000, 210000, 1200, 7, 1),
(26, 'Erdem Sapanca', '2023-12-07', 18000, 12000, 1500, 4, 0),
(27, 'Zeynep Çerçi', '2023-12-13', 10000, 1000, 900, 2, 1),
(28, 'Hüseyin Işık', '2023-12-06', 28000, 70000, 1400, 6, 4),
(29, 'Nur Yıldız', '2023-12-05', 25000, 210000, 1200, 7, 1),
(30, 'Emre Sapanca', '2023-12-07', 18000, 12000, 1500, 4, 0),
(31, 'Elif Çerçi', '2023-12-13', 10000, 1000, 900, 2, 1),
(32, 'Mustafa Işık', '2023-12-06', 28000, 70000, 1400, 6, 4),
(33, 'Sevil Yıldız', '2023-12-05', 25000, 210000, 1200, 7, 1),
(34, 'Gökhan Sapanca', '2023-12-07', 18000, 12000, 1500, 4, 0),
(35, 'Pelin Çerçi', '2023-12-13', 10000, 1000, 900, 2, 1),
(36, 'Can Işık', '2023-12-06', 28000, 70000, 1400, 6, 4),
(37, 'Nalan Yıldız', '2023-12-05', 25000, 210000, 1200, 7, 1),
(38, 'Tolga Sapanca', '2023-12-07', 18000, 12000, 1500, 4, 0),
(39, 'Emir Çerçi', '2023-12-13', 10000, 1000, 900, 2, 1),
(40, 'Sibel Işık', '2023-12-06', 28000, 70000, 1400, 6, 4),
(41, 'Ece Güler', '2023-12-10', 24000, 5000, 1100, 3, 2),
(42, 'Kaan Yılmaz', '2023-12-09', 17000, 15000, 1200, 4, 1),
(43, 'Buse Toprak', '2023-12-12', 20000, 1000, 1300, 2, 3),
(44, 'Oğuzhan Özdemir', '2023-12-15', 26000, 60000, 1400, 5, 4),
(45, 'Gizem Taş', '2023-12-08', 19000, 8000, 1200, 3, 2),
(46, 'Serhat Demirtaş', '2023-12-11', 21000, 30000, 1500, 6, 3),
(47, 'Dilan Aydın', '2023-12-24', 28000, 12000, 1300, 4, 1),
(48, 'Yasin Şahin', '2023-12-26', 22000, 4000, 1000, 2, 2),
(49, 'Ezgi Ünlü', '2023-12-28', 19000, 20000, 1100, 5, 3),
(50, 'Umut Yılmaz', '2023-12-30', 25000, 90000, 1400, 7, 4),
(51, 'Merve Aslan', '2023-12-29', 23000, 25000, 1200, 6, 2),
(52, 'Okan Kaya', '2023-12-27', 20000, 12000, 1300, 3, 1),
(53, 'Gökhan Özcan', '2023-12-23', 22000, 0, 1600, 6, 0),
(54, 'Emre Keskin', '2023-12-04', 10000, 0, 1700, 6, 0),
(55, 'Mustafa Sarı', '2023-12-16', 11000, 10000, 1100, 6, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `subehacmi`
--

DROP TABLE IF EXISTS `subehacmi`;
CREATE TABLE IF NOT EXISTS `subehacmi` (
  `subeID` int NOT NULL,
  `hacim` int NOT NULL,
  KEY `subeID` (`subeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `subehacmi`
--

INSERT INTO `subehacmi` (`subeID`, `hacim`) VALUES
(1, 260000),
(2, 350000),
(3, 220000),
(0, 500000),
(4, 450000);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `subeler`
--

DROP TABLE IF EXISTS `subeler`;
CREATE TABLE IF NOT EXISTS `subeler` (
  `id` int NOT NULL,
  `adi` varchar(40) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `subeler`
--

INSERT INTO `subeler` (`id`, `adi`) VALUES
(0, 'Konak'),
(1, 'Buca'),
(2, 'Gaziemir'),
(3, 'Manisa'),
(4, 'Kuşadası');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `unvanlar`
--

DROP TABLE IF EXISTS `unvanlar`;
CREATE TABLE IF NOT EXISTS `unvanlar` (
  `unvanID` int NOT NULL,
  `unvanAD` varchar(40) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`unvanID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `unvanlar`
--

INSERT INTO `unvanlar` (`unvanID`, `unvanAD`) VALUES
(1, 'Yeni Başlayan'),
(2, 'Orta Düzey Yönetici'),
(3, 'Üst Düzey Yönetici'),
(4, 'Müdür');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `id` int NOT NULL,
  `ad` varchar(40) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `ad`) VALUES
(1, 'Faiz'),
(2, 'Bono'),
(3, 'Döviz'),
(4, 'Altın'),
(5, 'Tahvil');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

DROP TABLE IF EXISTS `yoneticiler`;
CREATE TABLE IF NOT EXISTS `yoneticiler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `k_adi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`id`, `k_adi`, `sifre`) VALUES
(1, 'merhaba', '123');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `calisanlar`
--
ALTER TABLE `calisanlar`
  ADD CONSTRAINT `calisanlar_ibfk_1` FOREIGN KEY (`calistigiSubeID`) REFERENCES `subeler` (`id`),
  ADD CONSTRAINT `fk_calisanlar_unvanlar` FOREIGN KEY (`unvanID`) REFERENCES `unvanlar` (`unvanID`);

--
-- Tablo kısıtlamaları `kullanilanurunler`
--
ALTER TABLE `kullanilanurunler`
  ADD CONSTRAINT `fk_musteri` FOREIGN KEY (`musteri_id`) REFERENCES `musteriler` (`id`),
  ADD CONSTRAINT `fk_sube` FOREIGN KEY (`sube_id`) REFERENCES `subeler` (`id`),
  ADD CONSTRAINT `fk_urun` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`id`);

--
-- Tablo kısıtlamaları `musteriler`
--
ALTER TABLE `musteriler`
  ADD CONSTRAINT `musteriler_ibfk_1` FOREIGN KEY (`subeID`) REFERENCES `subeler` (`id`);

--
-- Tablo kısıtlamaları `subehacmi`
--
ALTER TABLE `subehacmi`
  ADD CONSTRAINT `subehacmi_ibfk_1` FOREIGN KEY (`subeID`) REFERENCES `subeler` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
