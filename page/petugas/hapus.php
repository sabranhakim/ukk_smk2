<?php 
include ("config.php");

if (isset($_GET['id'])) {

 	$id = $_GET['id'];

 	$sql = "DELETE FROM petugas WHERE id_petugas=$id";
 	$query = mysqli_query($koneksi, $sql);

 	if ($query) {
 	 	include "page/petugas/petugas.php";
 	} else{
 	 	die("gagal menghapus");
 	}
 	} else{
 		die("akses dilarang");
 	}
?>