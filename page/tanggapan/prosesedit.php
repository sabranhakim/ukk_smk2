<?php 
include ("config.php");

if (isset($_POST['daftar'])) {

    	$id = $_POST['id'];
		$id_pengaduan = $_POST['id_pengaduan'];
		$tgl_tanggapan = $_POST['tgl_tanggapan'];
		$tanggapan = $_POST['tanggapan'];
		$id_petugas = $_POST['id_petugas'];

 	$sql = "UPDATE tanggapan SET id_pengaduan='$id_pengaduan', tgl_tanggapan='$tgl_tanggapan', tanggapan='$tanggapan', id_petugas='$id_petugas' WHERE id_tanggapan=$id";
 	$query = mysqli_query($koneksi, $sql);

 	if ($query) {
 	 	include "page/tanggapan/tanggapan.php";
 	} else{
        die('location: index.php?status=gagal');
    }
 	} 
?>