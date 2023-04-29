<?php 
include ("config.php");

if (isset($_GET['id'])) {

 	$id = $_GET['id'];

 	$sql = "DELETE FROM masyarakat WHERE nik=$id";
 	$query = mysqli_query($koneksi, $sql);

 	if ($query) {
 	 	include "page/masyarakat/masyarakat.php";
 	} else{
 	 	die("gagal menghapus");
 	}
 	} else{
 		die("akses dilarang");
 	}
?>