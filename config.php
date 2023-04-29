<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "pengaduan";
 
$koneksi = mysqli_connect($server, $user, $pass, $database);
 
if (!$koneksi) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>