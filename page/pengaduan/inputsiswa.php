<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Input Data</title>
</head>
<body>
	<h3>Input Data Kelas XI RPl 1</h3>
	<fieldset>
	<form action="?page=prosesinput" method="POST">
		<label for="nisn">NISN :</label>
		<input type="text" name="nisn">

		<br>
		<br>

		<label for="nama">NAMA :</label>
		<input type="text" name="nama">

		<br>
		<br>

		<label for="nohp">NO HP :</label>
		<input type="text" name="nohp">

		<br>
		<br>

		<label for="alamat">ALAMAT :</label>
		<textarea name="alamat"></textarea>

		<br>
		<br>

		<input type="submit" name="daftar" value="simpan">
		<input type="reset" name="reset" value="batal"> 
	</form>
	</fieldset>
</body>
</html>