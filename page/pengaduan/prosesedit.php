<?php 
include ("config.php");

if (isset($_POST['daftar'])) {

	$id = $_POST['id'];
	$tgl_pengaduan = $_POST['tgl_pengaduan'];
	$nik = $_POST['nik'];
	$isi_laporan = $_POST['isi_laporan'];
	$foto = $_POST['foto'];
	$status = $_POST['status'];


 	$sql = "UPDATE pengaduan SET tgl_pengaduan='$tgl_pengaduan', nik='$nik', isi_laporan='$isi_laporan', foto='$foto', status='$status' WHERE id_pengaduan=$id";
 	$query = mysqli_query($koneksi, $sql);

 	if ($query) {
 	 	include "page/pengaduan/pengaduan.php";
 	} else{
 	 	header('location: index.php?status=gagal');
 	}
 	} 
?>