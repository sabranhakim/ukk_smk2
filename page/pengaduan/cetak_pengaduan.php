<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laporan Data</title>
</head>
<body>
	 <center>
	 	<h2>Data Laporan Pengaduan</h2>
	 </center>

	 <?php 
	 	include 'config.php';
	  ?>

	  <table border="2" style="width: 100%">
	  	<tr>
	  		<th width="1%">No</th>
	  		<th>ID PENGADUAN</th>
            <th>TANGGAL PENGADUAN</th>
            <th>NIK</th>
            <th>ISI LAPORAN</th>
            <th>FOTO</th>
            <th>STATUS</th>
	  	</tr>

	  	<?php 
	  		$no = 1;
	  		$sql = mysqli_query($koneksi, "select * from pengaduan");
	  		while($data = mysqli_fetch_array($sql)){
	  	 ?>
	  	 <tr>
	  	 	<td><?php echo $no++; ?></td>
	  	 	<td><?php echo $data['id_pengaduan']; ?></td>
	  	 	<td><?php echo $data['tgl_pengaduan']; ?></td>
	  	 	<td><?php echo $data['nik']; ?></td>
	  	 	<td><?php echo $data['isi_laporan']; ?></td>
	  	 	<td><?php echo $data['foto']; ?></td>
	  	 	<td><?php echo $data['status']; ?></td>
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