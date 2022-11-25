-- create database
CREATE DATABASE IF NOT EXISTS modul3;

-- select database
USE modul3;

-- create showroom table
CREATE TABLE IF NOT EXISTS showroom_rayhan_table (
	id_mobil int(255) NOT NULL PRIMARY KEY,
    nama_mobil varchar(255) NOT NULL,
    pemilik_mobil varchar(255) NOT NULL,
    merk_mobil varchar(255) NOT NULL,
    tanggal_beli date NOT NULL,
    deskripsi text NOT NULL,
    foto_mobil varchar(255) NOT NULL,
    status_pembayaran varchar(255) NOT NULL
);