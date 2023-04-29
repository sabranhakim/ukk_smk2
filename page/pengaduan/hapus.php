<?php 

include ("config.php");

if (isset($_GET['id'])) {

 	$id = $_GET['id'];

 	$sql = "DELETE FROM pengaduan WHERE id_pengaduan=$id";
 	$query = mysqli_query($koneksi, $sql);

 	if ($query) {
 	 	include "page/pengaduan/pengaduan.php";
 	} else{
 	 	die("gagal menghapus");
 	}
 	} else{
 		die("akses dilarang");
 	}
?>