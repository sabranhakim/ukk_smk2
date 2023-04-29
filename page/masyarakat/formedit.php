<?php 
include ("config.php");

if (!isset($_GET['id'])) {
		header('location: index.php');
	}
 	$id = $_GET['id'];


 	$sql = "SELECT * FROM guru WHERE nip=$id";
 	$query = mysqli_query($koneksi, $sql);
 	$guru = mysqli_fetch_assoc($query);

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
	<h3>Edit Data Guru</h3>
	<fieldset>
	<form action="?page=proseseditguru" method="POST">
		<input type="hidden" name="id" value="<?php echo $guru['nip'] ?>">

		<br>
		<br>

		<label for="nama">NAMA :</label>
		<input type="text" name="nama" value="<?php echo $guru['nama'] ?>">

		<br>
		<br>

		<label for="mapel">Mapel :</label>
		<input type="text" name="mapel" value="<?php echo $guru['mapel'] ?>">

		<br>
		<br>

		<label for="no_hp">NO HP :</label>
		<input type="text" name="no_hp" value="<?php echo $guru['no_hp'] ?>">

		<br>
		<br>

		<label for="email">Email :</label>
		<input type="text" name="email" value="<?php echo $guru['email'] ?>">

        <br>
		<br>

		<label for="jurusan">Jurusan :</label>
		<input type="text" name="jurusan" value="<?php echo $guru['jurusan'] ?>">

        <br>
        <br>

		<input type="submit" name="daftar" value="simpan">
	</form>
	</fieldset>
</body>
</html>