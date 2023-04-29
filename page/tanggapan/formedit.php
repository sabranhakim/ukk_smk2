<?php 
include ("config.php");

if (!isset($_GET['id'])) {
		header('location: index.php');
	}
 	$id = $_GET['id'];


 	$sql = "SELECT * FROM tanggapan WHERE id_tanggapan=$id";
 	$query = mysqli_query($koneksi, $sql);
 	$tanggapan = mysqli_fetch_assoc($query);

 	if (mysqli_num_rows($query) > 1) {
 	 	die('data tidak ditemukan');
 	} 
 ?>

<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            NGEDIT DATA tanggapan
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <form action="?page=prosesedittanggapan" method="POST" role="form">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $tanggapan['id_tanggapan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="id_pengaduan">ID PENGADUAN</label>
                            <input class="form-control" placeholder="" name="id_pengaduan"
                                value="<?php echo $tanggapan['id_pengaduan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl_tanggapan">TANGGAL TANGGAPAN</label>
                            <input class="form-control" placeholder="" type="date" name="tgl_tanggapan"
                                value="<?php echo $tanggapan['tgl_tanggapan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="tanggapan">TANGGAPAN</label>
                            <input class="form-control" placeholder="" name="tanggapan"
                                value="<?php echo $tanggapan['tanggapan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="id_petugas">ID PETUGAS</label>
                            <input class="form-control" placeholder="" name="id_petugas"
                                value="<?php echo $tanggapan['id_petugas'] ?>">
                        </div>
                        <input type="submit" class="btn btn-default" name="daftar" value="simpan">
                    </form>
                </div>
                <!-- /.col-lg-6 (nested) -->

                <!-- /.col-lg-6 (nested) -->
            </div>
            <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>