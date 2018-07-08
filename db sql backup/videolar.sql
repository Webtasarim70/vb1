-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 07 Tem 2018, 10:40:11
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
-- Tablo için tablo yapısı `videolar`
--

CREATE TABLE `videolar` (
  `video_id` int(11) NOT NULL,
  `video_sahibi` varchar(300) NOT NULL,
  `video_baslik` varchar(300) NOT NULL,
  `video_sef_baslik` varchar(300) NOT NULL,
  `video_resim` varchar(300) NOT NULL,
  `video_url` varchar(300) NOT NULL,
  `video_aciklama` text NOT NULL,
  `video_eklemetarihi` varchar(200) NOT NULL,
  `video_goruntulenme` int(11) NOT NULL,
  `video_durum` int(2) NOT NULL,
  `video_etiketler` text NOT NULL,
  `video_sefetiketler` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `videolar`
--

INSERT INTO `videolar` (`video_id`, `video_sahibi`, `video_baslik`, `video_sef_baslik`, `video_resim`, `video_url`, `video_aciklama`, `video_eklemetarihi`, `video_goruntulenme`, `video_durum`, `video_etiketler`, `video_sefetiketler`) VALUES
(1, 'admin', 'deneme video', 'deneme-video', 'https://yt3.ggpht.com/-3DiCh6SdyOY/AAAAAAAAAAI/AAAAAAAAAAA/mjO-Mt88Z6E/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'ynFYqvnxZxY', 'deneme aciklama ', '01.11.2017-20:40', 0, 1, 'deneme video ', 'deneme-video');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `videolar`
--
ALTER TABLE `videolar`
  ADD PRIMARY KEY (`video_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `videolar`
--
ALTER TABLE `videolar`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
