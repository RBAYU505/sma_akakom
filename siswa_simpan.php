<?php 
	$id = $_POST['id_daftar'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$tempat = $_POST['tempat_lahir'];
	$tgl = $_POST['tgl'];
    $bln = $_POST['bln'];
    $thn = $_POST['thn'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$asal_sek = $_POST['asal_sekolah'];
	$alamat_sek = $_POST['alamat_sekolah'];
	$nisn = $_POST['nisn'];
	$skhun = $_POST['skhun'];
	$nilai = $_POST['nilai'];
	$ayah = $_POST['ayah'];
	$ibu = $_POST['ibu'];
	$kerja_ayah = $_POST['kerja_ayah'];
	$kerja_ibu = $_POST['kerja_ibu'];
	$alamat_ortu = $_POST['alamat_ortu'];
	$telp_ortu = $_POST['telp_ortu'];
	
	$dataValid="YA";
		
	if (strlen(trim($id))==0){
		echo "ID harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($nama))==0){
		echo "Nama harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($jk))==0){
		echo "Jenis kelamin harus dipilih! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($tempat))==0){
		echo "Tempat lahir harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($agama))==0){
		echo "Agama harus dipilih! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($alamat))==0){
		echo "Alamat harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($telp))==0){
		echo "Nomor telepon harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($asal_sek))==0){
		echo "Asal sekolah harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($alamat_sek))==0){
		echo "Alamat sekolah harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($nisn))==0){
		echo "NISN harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($skhun))==0){
		echo "SKHUN harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($nilai))==0){
		echo "Nilai SKHUN harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($ayah))==0){
		echo "Nama ayah harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($ibu))==0){
		echo "Nama ibu harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($kerja_ayah))==0){
		echo "Pekerjaan ayah harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($kerja_ibu))==0){
		echo "Pekerjaan ibu harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($alamat_ortu))==0){
		echo "Alamat orang tua harus diisi! <br />";
		$dataValid = "TIDAK";}
	if (strlen(trim($telp_ortu))==0){
		echo "Nomor telepon orang tua harus diisi! <br />";
		$dataValid = "TIDAK";}
	
	if ($dataValid =="TIDAK"){
		echo "Masih ada kesalahan, silakan perbaiki <br />";
		echo "<input type='button' value='Kembali' 
				onClick='self.history.back()'>";
		exit;}
	include "koneksi.php";
	$sql = "insert into daftar
			(id_daftar, nama, jk, tempat_lahir, tanggal, agama, alamat, telp, asal_sekolah, alamat_sekolah, nisn, skhun, nilai, ayah, ibu, kerja_ayah, kerja_ibu, alamat_ortu, telp_ortu) 
			values ('$id','$nama','$jk','$tempat','$thn-$bln-$tgl','$agama','$alamat','$telp','$asal_sek','$alamat_sek','$nisn','$skhun','$nilai','$ayah','$ibu','$kerja_ayah','$kerja_ibu','$alamat_ortu','$telp_ortu')";
	$hasil = mysqli_query($kon, $sql);
	if(!$hasil){
		echo "Gagal Simpan, Silakan diulangi <br />";
		echo mysqli_error($kon);
		echo "<br/><input type='button' value='Kembali' 
				onClick='self.history.back()'>";
		exit;
	}else{
		echo "Data Berhasil Disimpan";}
 ?>
 <hr/>
 <a href="pendaftaran.html"/>Kembali</a>

 

