<?php 
include ("config.php");

if (isset($_GET['id'])) {

 	$id = $_GET['id'];

 	$sql = "DELETE FROM tanggapan WHERE id_tanggapan=$id";
 	$query = mysqli_query($koneksi, $sql);

 	if ($query) {
 	 	include "page/tanggapan/tanggapan.php";
 	} else{
 	 	die("gagal menghapus");
 	}
 	} else{
 		die("akses dilarang");
 	}
?>