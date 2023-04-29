<?php 
	include ("config.php");

	//cek apakah tombol daftar sudah diklik atau belum
	if (isset($_POST['daftar'])) {
		
		//ambil data dari formulir 
		$id_pengaduan = $_POST['id_pengaduan'];
		$tgl_pengaduan = $_POST['tgl_pengaduan'];
		$nik = $_POST['nik'];
		$isi_laporan = $_POST['isi_laporan'];
		$foto = $_POST['foto'];
		$status = $_POST['status'];

		//buat query
		$sql = "INSERT INTO pengaduan (id_pengaduan, tgl_pengaduan, nik, isi_laporan, foto,status) VALUE ('$id_pengaduan', '$tgl_pengaduan', '$nik', '$isi_laporan', '$foto', '$status')";
		$query = mysqli_query($koneksi, $sql);

		//apakah query simpan berhasil?
		if ($query) {
			include "page/pengaduan/pengaduan.php";
		}
		}
	
 ?>