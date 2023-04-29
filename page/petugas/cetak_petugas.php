<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laporan Data</title>
</head>
<body>
	 <center>
	 	<h2>Data Laporan Petugas</h2>
	 </center>

	 <?php 
	 	include 'config.php';
	  ?>

	  <table border="2" style="width: 100%">
	  	<tr>
	  		<th width="1%">No</th>
	  		<th>ID PETUGAS</th>
            <th>NAMA PETUGAS</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>TELP</th>
            <th>LEVEL</th>
	  	</tr>

	  	<?php 
	  		$no = 1;
	  		$sql = mysqli_query($koneksi, "select * from petugas");
	  		while($data = mysqli_fetch_array($sql)){
	  	 ?>
	  	 <tr>
	  	 	<td><?php echo $no++; ?></td>
	  	 	<td><?php echo $data['id_petugas']; ?></td>
	  	 	<td><?php echo $data['nama_petugas']; ?></td>
	  	 	<td><?php echo $data['username']; ?></td>
	  	 	<td><?php echo $data['password']; ?></td>
	  	 	<td><?php echo $data['telp']; ?></td>
	  	 	<td><?php echo $data['level']; ?></td>
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