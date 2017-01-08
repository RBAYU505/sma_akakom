<?php
	error_reporting(E_ALL^E_DEPRECATED);
		$host = "localhost";
		$user = "root";
		$pass = "";
		$dbName = "pendaftaran";
		$kon = mysqli_connect($host, $user, $pass);
		if(!$kon)
			die("Gagal Koneksi...");	
		$hasil = mysqli_select_db($kon, $dbName);
		if(!$hasil){
			$hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
				if(!$hasil)
					die("Gagal Buat Database...");
				else
					$hasil = mysqli_select_db($kon, $dbName);
					if(!$hasil) die("Gagal Konek Database");}
	$sql = "create table if not exists daftar(
		id_daftar int not null primary key,
		nama varchar(50) not null,
		jk char(1) not null,
		tempat_lahir varchar(100) not null,
		tanggal date default null,
		agama varchar(20) not null,
		alamat varchar(100) not null,
		telp varchar(12) not null,
		asal_sekolah varchar(50) not null,
		alamat_sekolah varchar(100) not null,
		nisn varchar(20) not null,
		skhun varchar(20) not null,
		nilai int(4) not null,
		ayah varchar(50) not null,
		ibu varchar(50) not null,
		kerja_ayah varchar(70) not null,
		kerja_ibu varchar(70) not null,
		alamat_ortu varchar(100) not null,
		telp_ortu varchar(12) not null)";	
	mysqli_query($kon, $sql) or die("Gagal Buat Tabel Daftar ");
?>
