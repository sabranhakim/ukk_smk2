<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           INPUT DATA PENGADUAN MASYARAKAT
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="?page=prosesinput" method="POST" role="form">
                                        <div class="form-group">
                                            <label for="id_pengaduan">ID PENNGADUAN</label>
                                            <input class="form-control" placeholder="Id Pengaduan" name="id_pengaduan" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_pengaduan">TANGGAL PENGADUAN</label>
                                            <input class="form-control" type="date" placeholder="TANGGAL PENGADUAN" name="tgl_pengaduan">
                                        </div>
                                        <div class="form-group">
                                            <label for="nik">NIK</label> 
                                            <input class="form-control" placeholder="NIK" name="nik" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="isi_laporan">ISI LAPORAN</label>
                                            <input class="form-control" placeholder="ISI LAPORAN" name="isi_laporan" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="foto">FOTO</label>
                                            <input class="form-control" placeholder="FOTO" name="foto" type="file">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control form-select form-select-lg mb-3" name="status" aria-label=".form-select-lg example">
                                            <option selected>--- Pilih Status ---</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Non Aktif">Non Aktif</option>
                                            </select>
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