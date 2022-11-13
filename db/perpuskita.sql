-- drop table user
DROP TABLE IF EXISTS perpuskita.users;

-- create table users
CREATE TABLE 'users' (
'id' INT(6) AUTO_INCREMENT PRIMARY KEY NOT NULL,
'nama' VARCHAR(30) NOT NULL,
'pass' VARCHAR(30) NOT NULL,
'username' VARCHAR(30) NOT NULL,
'ttl' VARCHAR(50),
'gender' VARCHAR(50),
'kelas' VARCHAR(50),
'alamat' VARCHAR(50),
'noTelp' INT(50),
'role' VARCHAR(50)
);

CREATE TABLE 'buku'(
'id_buku' INT(6) AUTO_INCREMENT PRIMARY KEY NOT NULL,
'judul' VARCHAR(250),
'jumlah' INT(50),
'jenisBuku' VARCHAR(20),
'status' TINYINT(1),
'pengarang' VARCHAR(50),
'tahun_terbit' DATE(50),
'penerbit' VARCHAR(50),
'kode_buku' INT(50)
);