-- Pertemuan 3: Administrator dan Login
-- Jalankan di phpMyAdmin pada database "dbpwb" (tab SQL / Impor)

CREATE TABLE IF NOT EXISTS `administrator` (
  `id_admin`  int(11)      NOT NULL AUTO_INCREMENT,
  `full_name` varchar(40)  NOT NULL,
  `username`  varchar(30)  NOT NULL,
  `password`  varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 1 record: username "admin", password "admin" (disimpan dengan MD5)
INSERT INTO `administrator` (`full_name`, `username`, `password`)
VALUES ('Delpiah Wahyuningsih', 'admin', MD5('admin'));
