<?php include("config.php"); ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            DATA PENGADUAN MASYARAKAT
        </div>

        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <form>
                        <a href="?page=inputpengaduan" type="submit" class="btn btn-primary">Tambah baru</a>
                    </form>
                    |
                    <form>
                        <a href="?page=cetakpengaduan" type="submit" class="btn btn-primary">Cetak</a>
                    </form>
                    <br>
                    <thead>
                        <br>
                        <tr>
                            <th>ID PENGADUAN</th>
                            <th>TANGGAL PENGADUAN</th>
                            <th>NIK</th>
                            <th>ISI LAPORAN</th>
                            <th>FOTO</th>
                            <th>STATUS</th>
                            <th>AKSES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM pengaduan";
                            $query = mysqli_query($koneksi, $sql);

                            while ($pengaduan = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td>". $pengaduan['id_pengaduan']. "</td>";
                                echo "<td>". $pengaduan['tgl_pengaduan']. "</td>";
                                echo "<td>". $pengaduan['nik']. "</td>";
                                echo "<td>". $pengaduan['isi_laporan']. "</td>";
                                echo "<td>". $pengaduan['foto']. "</td>";
                                echo "<td>". $pengaduan['status']. "</td>";
                                echo "<td>";
                                echo "<a class='btn btn-warning' href='?page=formedit&id=".$pengaduan['id_pengaduan']."' >Edit</a> | ";
                                echo "<a class='btn btn-danger' href='?page=hapuspengaduan&id=".$pengaduan['id_pengaduan']."'>Hapus</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
		                ?>
                    </tbody>
                    <table>
                        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
                    </table>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>