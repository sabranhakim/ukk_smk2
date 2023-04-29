<?php 
	include ("config.php");

	//cek apakah tombol daftar sudah diklik atau belum
	if (isset($_POST['daftar'])) {
		
		//ambil data dari formulir 
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
        $telp = $_POST['telp'];

		//buat query
		$sql = "INSERT INTO masyarakat (nik, nama, username, password, telp) VALUE ('$nik', '$nama', '$username', '$password', '$telp')";
		$query = mysqli_query($koneksi, $sql);

		//apakah query simpan berhasil?
		if ($query) {
			include "page/masyarakat/masyarakat.php";
		} else {
			header('location: index.php?page=masyarakat');
		}
		}
	
 ?>