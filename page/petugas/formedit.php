<?php 
include ("config.php");

if (!isset($_GET['id'])) {
		header('location: index.php');
	}
 	$id = $_GET['id'];


 	$sql = "SELECT * FROM petugas WHERE id_petugas=$id";
 	$query = mysqli_query($koneksi, $sql);
 	$petugas = mysqli_fetch_assoc($query);

 	if (mysqli_num_rows($query) > 1) {
 	 	die('data tidak ditemukan');
 	} 
 ?>

<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            NGEDIT DATA PETUGAS
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <form action="?page=proseseditpetugas" method="POST" role="form">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $petugas['id_petugas'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_petugas">NAMA PETUGAS</label>
                            <input class="form-control" placeholder="" name="nama_petugas"
                                value="<?php echo $petugas['nama_petugas'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="username">USERNAME</label>
                            <input class="form-control" placeholder="" name="username"
                                value="<?php echo $petugas['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">PASSWORD</label>
                            <input class="form-control" placeholder="" name="password"
                                value="<?php echo $petugas['password'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="telp">TELP</label>
                            <input class="form-control" placeholder="" name="telp"
                                value="<?php echo $petugas['telp'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="level">LEVEL</label>
                            <input class="form-control" placeholder="" name="level"
                                value="<?php echo $petugas['level'] ?>">
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