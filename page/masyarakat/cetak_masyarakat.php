<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laporan Data</title>
</head>
<body>
	 <center>
	 	<h2>Data Laporan Masyarakt</h2>
	 </center>

	 <?php 
	 	include 'config.php';
	  ?>

	  <table border="2" style="width: 100%">
	  	<tr>
	  		<th width="1%">No</th>
	  		<th>NIK</th>
            <th>NAMA</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>TELP</th>
	  	</tr>

	  	<?php 
	  		$no = 1;
	  		$sql = mysqli_query($koneksi, "select * from masyarakat");
	  		while($data = mysqli_fetch_array($sql)){
	  	 ?>
	  	 <tr>
	  	 	<td><?php echo $no++; ?></td>
	  	 	<td><?php echo $data['nik']; ?></td>
	  	 	<td><?php echo $data['nama']; ?></td>
	  	 	<td><?php echo $data['username']; ?></td>
	  	 	<td><?php echo $data['password']; ?></td>
	  	 	<td><?php echo $data['telp']; ?></td>
	  	 </tr>
	  	 <?php 
	  	 	}
	  	 ?>
	  </table>
	  <script>
	  	window.print();
	  </script>
</body>
</html>