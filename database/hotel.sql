-- phpMyAdmin SQL Dump

-- version 5.1.1

-- https://www.phpmyadmin.net/

--

-- Host: localhost:3306

-- Waktu pembuatan: 10 Jun 2022 pada 21.01

-- Versi server: 5.7.33

-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Database: `hotel`

--

-- --------------------------------------------------------

--

-- Struktur dari tabel `check_in`

--

CREATE TABLE `check_in` (
    `no_checkin` varchar(200) NOT NULL,
    `no_kamar` varchar(30) NOT NULL,
    `tipe` varchar(100) NOT NULL,
    `id_tamu` int(11) NOT NULL,
    `biaya_kamar` int(11) NOT NULL,
    `biaya_extrabed` int(11) NOT NULL,
    `tgl_checkin` date NOT NULL,
    `tgl_checkout` date NOT NULL,
    `lama_inap` int(11) NOT NULL,
    `total_bayar` bigint(20) NOT NULL,
    `status` char(5) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data untuk tabel `check_in`

--

INSERT INTO
    `check_in` (
        `no_checkin`,
        `no_kamar`,
        `tipe`,
        `id_tamu`,
        `biaya_kamar`,
        `biaya_extrabed`,
        `tgl_checkin`,
        `tgl_checkout`,
        `lama_inap`,
        `total_bayar`,
        `status`
    )
VALUES
    (
        '0122',
        'C.01',
        'Deluxe Room',
        3,
        2000000,
        200000,
        '2022-05-12',
        '2022-05-12',
        2,
        2200000,
        'OUT'
    ),
    (
        '0123',
        'A.01',
        'Standar Room',
        1,
        1200000,
        50000,
        '2022-06-10',
        '2022-06-13',
        3,
        1250000,
        'OUT'
    ),
    (
        '0124',
        'B.02',
        'Superior Room',
        2,
        1500000,
        0,
        '2022-07-12',
        '2022-07-13',
        2,
        1500000,
        'IN'
    ),
    (
        '0125',
        'A.01',
        'Standar Room',
        3,
        800000,
        300000,
        '2022-05-17',
        '2022-05-19',
        2,
        1100000,
        'OUT'
    ),
    (
        '0126',
        'A.01',
        'Standar Room',
        2,
        400000,
        0,
        '2022-06-29',
        '2022-06-30',
        1,
        400000,
        'IN'
    );

--

-- Trigger `check_in`

--

DELIMITER $$

CREATE TRIGGER `trigger_statuskamar` AFTER INSERT ON 
`check_in` FOR EACH ROW 
BEGIN 
	UPDATE
	    kamar
	set
	    status = 1
	WHERE
	    no_kamar = NEW.no_kamar;
	EN 
END 
$$ 

DELIMITER ;

-- --------------------------------------------------------

--

-- Struktur dari tabel `kamar`

--

CREATE TABLE `kamar` (
    `no_kamar` varchar(20) NOT NULL,
    `tipe` varchar(100) NOT NULL,
    `fasilitas` text NOT NULL,
    `harga` int(11) NOT NULL,
    `status` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data untuk tabel `kamar`

--

INSERT INTO
    `kamar` (
        `no_kamar`,
        `tipe`,
        `fasilitas`,
        `harga`,
        `status`
    )
VALUES
    ('A.01', 'Standar Room', 'Wifi, TV', 400000, 1),
    ('A.02', 'Standar Room', 'Wifi, TV', 400000, 0),
    (
        'B.01',
        'Superior Room',
        'Wifi, TV, Bathtub',
        750000,
        0
    ),
    (
        'B.02',
        'Superior Room',
        'Wifi, TV, Bathtub',
        750000,
        0
    ),
    (
        'C.01',
        'Deluxe Room',
        'Wifi, TV, Bathtub, Kulkas, Balcon',
        1000000,
        0
    );

-- --------------------------------------------------------

--

-- Struktur dari tabel `tamu`

--

CREATE TABLE `tamu` (
    `id_tamu` int(11) NOT NULL,
    `nama` varchar(256) NOT NULL,
    `alamat` text NOT NULL,
    `no_ktp` bigint(16) NOT NULL,
    `telp` varchar(25) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data untuk tabel `tamu`

--

INSERT INTO
    `tamu` (`id_tamu`, `nama`, `alamat`, `no_ktp`, `telp`)
VALUES
    (
        1,
        'Andi',
        'Semarang, Jawa Tengah',
        2147483647,
        '0852323232999'
    ),
    (
        2,
        'Danang',
        'Kudus, Jawa Tengah',
        2147483647,
        '0821232323232'
    ),
    (
        3,
        'Yandi',
        'Demak, Jawa Tengah',
        332222222,
        '082172323'
    );

-- --------------------------------------------------------

--

-- Struktur dari tabel `user`

--

CREATE TABLE `user` (
    `id_user` int(11) NOT NULL,
    `username` varchar(80) NOT NULL,
    `password` varchar(128) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data untuk tabel `user`

--

INSERT INTO
    `user` (`id_user`, `username`, `password`)
VALUES
    (
        1,
        'admin',
        '$2y$10$XR7Af0DLt0g30dvp8rmX6u05LdrlfeS7TmRbqFzR/fdvqRL0SXHeO'
    );

--

-- Indexes for dumped tables

--

--

-- Indeks untuk tabel `check_in`

--

ALTER TABLE `check_in` ADD PRIMARY KEY (`no_checkin`);

--

-- Indeks untuk tabel `kamar`

--

ALTER TABLE `kamar` ADD PRIMARY KEY (`no_kamar`);

--

-- Indeks untuk tabel `tamu`

--

ALTER TABLE `tamu` ADD PRIMARY KEY (`id_tamu`);

--

-- Indeks untuk tabel `user`

--

ALTER TABLE `user` ADD PRIMARY KEY (`id_user`);

--

-- AUTO_INCREMENT untuk tabel yang dibuang

--

--

-- AUTO_INCREMENT untuk tabel `tamu`

--

ALTER TABLE
    `tamu`
MODIFY
    `id_tamu` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;

--

-- AUTO_INCREMENT untuk tabel `user`

--

ALTER TABLE
    `user`
MODIFY
    `id_user` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;