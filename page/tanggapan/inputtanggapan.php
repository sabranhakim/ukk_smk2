<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            INPUT TANGGAPAN
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <form action="?page=prosesinputtanggapan" method="POST" role="form">
                        <div class="form-group">
                            <label for="id_tanggapan">ID TANGGAPAN</label>
                            <input class="form-control" placeholder="ID TANGGAPAN" name="id_tanggapan">
                        </div>
                        <div class="form-group">
                            <label for="id_pengaduan">ID PENGADUAN</label>
                            <input class="form-control" placeholder="ID PENGADUAN" name="id_pengaduan">
                        </div>
                        <div class="form-group">
                            <label for="tgl_tanggapan">TANGGAL TANGGAPAN</label>
                            <input class="form-control" placeholder="TANGGAL TANGGAPAN" name="tgl_tanggapan" type="date">
                        </div>
                        <div class="form-group">
                            <label for="tanggapan">TANGGAPAN</label>
                            <input class="form-control" placeholder="TANGGAPAN" name="tanggapan">
                        </div>
                        <div class="form-group">
                            <label for="id_petugas">ID PETUGAS</label>
                            <input class="form-control" placeholder="ID PETUGAS" name="id_petugas">
                        </div>
                        
                        <input type="submit" class="btn btn-default" name="daftar" value="simpan">
                        <input type="reset" class="btn btn-default" name="reset" value="batal">
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