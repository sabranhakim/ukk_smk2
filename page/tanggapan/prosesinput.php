<?php 
	include ("config.php");

	//cek apakah tombol daftar sudah diklik atau belum
	if (isset($_POST['daftar'])) {
		
		//ambil data dari formulir 
		$id_tanggapan = $_POST['id_tanggapan'];
		$id_pengaduan = $_POST['id_pengaduan'];
		$tgl_tanggapan = $_POST['tgl_tanggapan'];
		$tanggapan = $_POST['tanggapan'];
		$id_petugas = $_POST['id_petugas'];

		//buat query
		$sql = "INSERT INTO tanggapan (id_tanggapan, id_pengaduan, tgl_tanggapan, tanggapan, id_petugas) VALUE ('$id_tanggapan', '$id_pengaduan', '$tgl_tanggapan', '$tanggapan', '$id_petugas')";
		$query = mysqli_query($koneksi, $sql);

		//apakah query simpan berhasil?
		if ($query) {
			include "page/tanggapan/tanggapan.php";
		} else {
			die('location: index2.php?page=tanggapan');
		}
		}
	
 ?>