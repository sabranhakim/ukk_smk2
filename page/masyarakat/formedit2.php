<?php 
    include ("config.php");

    if (!isset($_GET['id'])) {
            header('location: index.php');
        }   
        
        $id = $_GET['id'];

            $sql = "SELECT * FROM masyarakat WHERE nik=$id";
            $query = mysqli_query($koneksi, $sql);
            $masyarakat = mysqli_fetch_assoc($query);

        if (mysqli_num_rows($query) > 1) {
            die('data tidak ditemukan');
        } 
 ?>

<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            NGEDIT DATA MASYARAKAT
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <form action="?page=proseseditmasyarakat" method="POST" role="form">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $masyarakat['nik'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">NAMA</label>
                            <input class="form-control" placeholder="NAMA" name="nama"
                                value="<?php echo $masyarakat['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="username">USERNAME</label>
                            <input class="form-control" placeholder="USERNAME" name="username"
                                value="<?php echo $masyarakat['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">PASSWORD</label>
                            <input class="form-control" placeholder="PASSWORD" name="password"
                                value="<?php echo $masyarakat['password'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="telp">TELP</label>
                            <input class="form-control" placeholder="TELP" name="telp"
                                value="<?php echo $masyarakat['telp'] ?>">
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