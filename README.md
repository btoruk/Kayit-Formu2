> "Mysql.php" içindeki dbname hariç verileri güncelleyin.

> Aşağıdaki kodları mysql'de query açıp çalıştırın.
CREATE SCHEMA `regform` ;
CREATE TABLE regform.regform (
  id INT AUTO_INCREMENT PRIMARY KEY,
  isim VARCHAR(255) NOT NULL,
  soyisim VARCHAR(255) NOT NULL,
  eposta VARCHAR(255) UNIQUE NOT NULL,
  sifre VARCHAR(255) NOT NULL,
  dogum_tarihi DATE NOT NULL,
  cinsiyet ENUM('erkek', 'kadin') NOT NULL,
  kayit_tarihi DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL
);

> Devserver ya da xampp ile sunucuyu çalıştırın.
