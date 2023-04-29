<?php include("config.php"); ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            TANGGAPAN
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <form>
                        <a href="?page=inputtanggapan" type="submit" class="btn btn-primary">Tambah baru</a>
                    </form>
                    |
                    <form>
                        <a href="?page=cetaktanggapan" type="submit" class="btn btn-primary">Cetak</a>
                    </form>
                    <br>
                    <thead>
                        <br>
                        <tr>
                            <th>ID TANGGAPAN</th>
                            <th>ID PENGADUAN</th>
                            <th>TANGGAL TANGGAPAN</th>
                            <th>TANGGGAPAN</th>
                            <th>ID PETUGAS</th>
                            <th>AKSES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM tanggapan";
                            $query = mysqli_query($koneksi, $sql);

                            while ($tanggapan = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td>". $tanggapan['id_tanggapan']. "</td>";
                                echo "<td>". $tanggapan['id_pengaduan']. "</td>";
                                echo "<td>". $tanggapan['tgl_tanggapan']. "</td>";
                                echo "<td>". $tanggapan['tanggapan']. "</td>";
                                echo "<td>". $tanggapan['id_petugas']. "</td>";
                                echo "<td>";
                                echo "<a class='btn btn-warning' href='?page=formedittanggapan&id=".$tanggapan['id_tanggapan']."'>Edit</a> | ";
                                echo "<a class='btn btn-danger' href='?page=hapustanggapan&id=".$tanggapan['id_tanggapan']."'>hapus</a>";
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