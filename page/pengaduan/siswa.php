<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Siswa</title>
</head>
<body>

	<h3>Siswa Yang Sudah Terdaftar</h3>

	<nav>
		<a href="?page=inputsiswa">[+] NEW</a>
	</nav>
	<br>
	<table border="1">
		<thead>
			<tr>
				<th>NISN</th>
				<th>NAMA</th>
				<th>NO HP</th>
				<th>ALAMAT</th>
				<th>AKSES</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql = "SELECT * FROM kelas";
			$query = mysqli_query($koneksi, $sql);

			while ($siswa = mysqli_fetch_array($query)) {
				echo "<tr>";
				echo "<td>". $siswa['nisn']. "</td>";
				echo "<td>". $siswa['nama']. "</td>";
				echo "<td>". $siswa['nohp']. "</td>";
				echo "<td>". $siswa['alamat']. "</td>";
				echo "<td>";
				echo "<a href='?page=formedit&id=".$siswa['nisn']."'>Edit</a> | ";
				echo "<a href='?page=hapussiswa&id=".$siswa['nisn']."'>hapus</a>";
				echo "</td>";
				echo "</tr>";
			}
			 ?>
		</tbody>
		<table>
			<p>Total: <?php echo mysqli_num_rows($query) ?></p>
		</table>
	</table>
</body>
</html>