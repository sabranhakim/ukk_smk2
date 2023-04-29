<?php 
include ("config.php");

if (isset($_POST['daftar'])) {

    $id = $_POST['id'];
		$nama_petugas = $_POST['nama_petugas'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$telp = $_POST['telp'];
		$level = $_POST['level'];

 	$sql = "UPDATE petugas SET nama_petugas='$nama_petugas', username='$username', password='$password', telp='$telp', level='$level' WHERE id_petugas=$id";
 	$query = mysqli_query($koneksi, $sql);

 	if ($query) {
 	 	include "page/petugas/petugas.php";
 	} else{
        header('location: index.php?status=gagal');
    }
 	} 
?>