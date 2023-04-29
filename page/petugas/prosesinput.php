<?php 
	include ("config.php");

	//cek apakah tombol daftar sudah diklik atau belum
	if (isset($_POST['daftar'])) {
		
		//ambil data dari formulir 
		$id_petugas = $_POST['id_petugas'];
		$nama_petugas = $_POST['nama_petugas'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$telp = $_POST['telp'];
		$level = $_POST['level'];

		//buat query
		$sql = "INSERT INTO petugas (id_petugas, nama_petugas, username, password, telp, level) VALUE ('$id_petugas', '$nama_petugas', '$username', '$password', '$telp', '$level')";
		$query = mysqli_query($koneksi, $sql);

		//apakah query simpan berhasil?
		if ($query) {
			include "page/petugas/petugas.php";
		} else {
			header('location: index.php?page=petugas');
		}
		}
	
 ?>