<?php 
include ("config.php");

if (!isset($_GET['id'])) {
		header('location: index.php');
	}
 	$id = $_GET['id'];


 	$sql = "SELECT * FROM kelas WHERE nisn=$id";
 	$query = mysqli_query($koneksi, $sql);
 	$siswa = mysqli_fetch_assoc($query);

 	if (mysqli_num_rows($query) > 1) {
 	 	die('data tidak ditemukan');
 	} 
 ?> 

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Edit Data</title>
</head>
<body>
	<h3>Edit Data Kelas XI RPl 1</h3>
	<fieldset>
	<form action="?page=prosesedit" method="POST">
		<input type="hidden" name="id" value="<?php echo $siswa['nisn'] ?>">

		<br>
		<br>

		<label for="nama">NAMA :</label>
		<input type="text" name="nama" value="<?php echo $siswa['nama'] ?>">

		<br>
		<br>

		<label for="nohp">NO HP :</label>
		<input type="text" name="nohp" value="<?php echo $siswa['nohp'] ?>">

		<br>
		<br>

		<label for="alamat">ALAMAT :</label>
		<textarea name="alamat" ><?php echo $siswa['alamat'] ?></textarea>

		<br>
		<br>

		<input type="submit" name="daftar" value="simpan">
	</form>
	</fieldset>
</body>
</html>