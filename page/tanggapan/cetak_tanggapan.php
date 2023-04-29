<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laporan Data</title>
</head>
<body>
	 <center>
	 	<h2>Data Laporan Tanggapan</h2>
	 </center>

	 <?php 
	 	include 'config.php';
	  ?>

	  <table border="2" style="width: 100%">
	  	<tr>
	  		<th width="1%">No</th>
	  		<th>ID TANGGAPAN</th>
            <th>ID PENGADUAN</th>
            <th>TANGGAL TANGGAPAN</th>
            <th>TANGGGAPAN</th>
            <th>ID PETUGAS</th>
	  	</tr>

	  	<?php 
	  		$no = 1;
	  		$sql = mysqli_query($koneksi, "select * from tanggapan");
	  		while($data = mysqli_fetch_array($sql)){
	  	 ?>
	  	 <tr>
	  	 	<td><?php echo $no++; ?></td>
	  	 	<td><?php echo $data['id_tanggapan']; ?></td>
	  	 	<td><?php echo $data['id_pengaduan']; ?></td>
	  	 	<td><?php echo $data['tgl_tanggapan']; ?></td>
	  	 	<td><?php echo $data['tanggapan']; ?></td>
	  	 	<td><?php echo $data['id_petugas']; ?></td>
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