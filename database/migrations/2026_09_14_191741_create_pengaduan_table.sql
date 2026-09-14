-- create_pengaduan_table

CREATE TABLE IF NOT EXISTS `pengaduan` (
  `id_pengaduan` int NOT NULL AUTO_INCREMENT,
  `id_kategori` int NOT NULL,
  `isi_pengaduan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pengaduan`),
  KEY `fk_pengaduan_id_kategori_d1c0ac` (`id_kategori`),
  CONSTRAINT `fk_pengaduan_id_kategori_d1c0ac` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
