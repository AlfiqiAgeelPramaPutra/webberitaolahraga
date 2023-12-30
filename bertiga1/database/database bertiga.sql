CREATE TABLE IF NOT EXISTS `jadwal` (
  `id` char(5) not null PRIMARY key,
  `foto` varchar(999),
  `Kandang` varchar(50) NOT NULL,
  `foto2` varchar(999),
  `Tandang` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `liga` varchar(50) NOT NULL,
  `stadion` varchar(50) NOT NULL);
  
  
 CREATE TABLE IF NOT EXISTS `gambar` (
  `idgambar` int not null PRIMARY key,
  `lokasi` varchar(999));