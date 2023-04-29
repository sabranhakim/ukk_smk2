<?php 
include ("config.php");

if (!isset($_GET['id'])) {
		header('location: pengaduan.php');
	}
 	$id = $_GET['id'];


 	$sql = "SELECT * FROM pengaduan WHERE id_pengaduan=$id";
 	$query = mysqli_query($koneksi, $sql);
 	$pengaduan = mysqli_fetch_assoc($query);

 	if (mysqli_num_rows($query) > 1) {
 	 	die('data tidak ditemukan');
 	} 
 ?>

<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            NGEDIT DATA PENGADUAN
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <form action="?page=prosesedit" method="POST" role="form">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $pengaduan['id_pengaduan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl_pengaduan">TANGGAL PENGADUAN</label>
                            <input class="form-control" placeholder="TANGGAL PENGADUAN" name="tgl_pengaduan"
                                value="<?php echo $pengaduan['tgl_pengaduan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input class="form-control" placeholder="NIK LOE" name="nik"
                                value="<?php echo $pengaduan['nik'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="isi_laporan">ISI LAPORAN</label>
                            <input class="form-control" placeholder="ISI LAPORAN" name="isi_laporan"
                                value="<?php echo $pengaduan['isi_laporan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="foto">FOTO</label>
                            <input class="form-control" placeholder="FOTO" name="foto" type="file"
                                value="<?php echo $pengaduan['foto'] ?>">
                        </div>
                        <div class="form-group">
                            <select class="form-control form-select form-select-lg mb-3"name="status" aria-label=".form-select-lg example"
                            value="<?php echo $pengaduan['status'] ?>">
                            <option selected>--- Pilih Status ---</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Non Aktif">Non Aktif</option>
                            </select>
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