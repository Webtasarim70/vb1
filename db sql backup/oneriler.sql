-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 13 Tem 2018, 13:12:25
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `videoscripti`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oneriler`
--

CREATE TABLE `oneriler` (
  `oneri_id` int(11) NOT NULL,
  `oneri_isim` varchar(300) NOT NULL,
  `oneri_posta` varchar(300) NOT NULL,
  `oneri_video` varchar(300) NOT NULL,
  `oneri_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `oneriler`
--

INSERT INTO `oneriler` (`oneri_id`, `oneri_isim`, `oneri_posta`, `oneri_video`, `oneri_tarih`) VALUES
(1, 'deneme', 'deneme@deneme.com', 'https://www.youtube.com/watch?v=wRVekDWb47I', '2018-07-13 13:10:51');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `oneriler`
--
ALTER TABLE `oneriler`
  ADD PRIMARY KEY (`oneri_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `oneriler`
--
ALTER TABLE `oneriler`
  MODIFY `oneri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
