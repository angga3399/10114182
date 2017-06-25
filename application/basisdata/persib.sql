DROP DATABASE persib;

CREATE DATABASE persib;

USE persib;

CREATE TABLE admin(
	id_admin char(5),
	nama_admin varchar(25) NOT NULL,
	email varchar(25) NOT NULL,
	username varchar(25) NOT NULL,
	password varchar(35) NOT NULL,
	status varchar(35) NOT NULL,
	PRIMARY KEY (id_admin, username)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO admin 
VALUES ('A01','Angga sang Admin','angga3399@gmail.com','angga', '1fd5cd9766249f170035b7251e2c6b61','sepenuhnya');

CREATE TABLE customer(
	no_ktp char(15) PRIMARY KEY,
	nama_customer varchar(25) NOT NULL,
	jk_customer ENUM('L','P') NOT NULL,
	tgl_lahir DATE NOT NULL,
	alamat varchar(25) NOT NULL,
	email varchar(25) NOT NULL,
	no_hp char(13) NOT NULL,
	username varchar(25) NOT NULL,
	password varchar(35) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO customer 
VALUES ('10114182','Angga Sang Customer','L','1996/01/25', 'kiaracondong','angga3399@gmail.com','089611525997','angga', '1fd5cd9766249f170035b7251e2c6b61');

CREATE TABLE jadwal(
	id_jadwal char(5) PRIMARY KEY,
	nama_pertandingan varchar(50) NOT NULL,
	stadion varchar(25) NOT NULL,
	hari varchar(10) NOT NULL,
	tgl_pertandingan DATE NOT NULL,
	jam varchar(25) NOT NULL,
	tipe_tiket varchar(10) NOT NULL,
	harga int(12) NOT NULL,
	stok smallint(2) NOT NULL,
	hari_brkt varchar(10) NOT NULL,
	tgl_brkt DATE NOT NULL,
	jam_brkt varchar(6) NOT NULL,
	status varchar(10) DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO jadwal VALUES
('J01','AC Milan','San Siro','Jumat','2017/05/06','18:30','Barat','1000000','9','Jumat','2017/05/06','18:30','non-aktif'),
('J02','Brazil','brazil','sabtu','2017/05/06','18:30','Barat','1000000','0','Jumat','2017/05/06','18:30','aktif'),
('J03','Persebaya','Bima','Kamis','2017/05/05','18:30','Barat','200000','9','Jumat','2017/05/06','18:30','aktif');

CREATE TABLE pemesanan(
	id_pemesanan char(5) NOT NULL PRIMARY KEY,
	no_ktp char(15) NOT NULL,
	id_jadwal char(5) NOT NULL,
	tgl_pemesanan DATE NOT NULL,
	CONSTRAINT fk_noktp FOREIGN KEY (no_ktp) REFERENCES customer(no_ktp) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT fk_jadwal FOREIGN KEY (id_jadwal) REFERENCES jadwal(id_jadwal) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO pemesanan VALUES
('P01','10114182','J01','2017/05/06');

CREATE TABLE pembayaran(
	id_pembayaran char(5) PRIMARY KEY,
	id_pemesanan char(5) NOT NULL,
	id_admin char(5),
	status_pelakukan varchar(10),
	bank varchar(25),
	nama_tf varchar(25),
	no_rek char(20),
	tgl_pembayaran DATE,
	bukti_pembayaran varchar(25),
	status_bayar varchar(25) DEFAULT 'no-acc',
	CONSTRAINT fk_pemesanan FOREIGN KEY (id_pemesanan) REFERENCES pemesanan(id_pemesanan) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT fk_admin FOREIGN KEY (id_admin) REFERENCES admin(id_admin) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO pembayaran (id_pembayaran,id_pemesanan,bank,nama_tf,no_rek,tgl_pembayaran,bukti_pembayaran) VALUES
('B01','P01','BRI','angga','1021312312','2017/05/06','10114182-B01.jpg'); 