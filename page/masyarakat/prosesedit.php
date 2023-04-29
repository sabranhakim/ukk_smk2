<?php 
include ("config.php");

if (isset($_POST['daftar'])) {

    $nik = $_POST['id'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
    $telp = $_POST['telp'];


 	$sql = "UPDATE masyarakat SET nama='$nama', username='$username', password='$password', telp='$telp' WHERE nik=$nik";
 	$query = mysqli_query($koneksi, $sql);

 	if ($query) {
 	 	include "page/masyarakat/masyarakat.php";
 	} else{
        header('location: index.php?status=gagal');
    }
 	} 
?>