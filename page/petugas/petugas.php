<?php include("config.php"); ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Berita
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <form>
                        <a href="?page=inputpetugas" type="submit" class="btn btn-primary">Tambah baru</a>
                    </form>
                    |
                    <form>
                        <a href="?page=cetakpetugas" type="submit" class="btn btn-primary">Cetak</a>
                    </form>
                    <br>
                    <thead>
                        <br>
                        <tr>
                            <th>ID PETUGAS</th>
                            <th>NAMA PETUGAS</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>TELP</th>
                            <th>LEVEL</th>
                            <th>AKSES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM petugas";
                            $query = mysqli_query($koneksi, $sql);

                            while ($petugas = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td>". $petugas['id_petugas']. "</td>";
                                echo "<td>". $petugas['nama_petugas']. "</td>";
                                echo "<td>". $petugas['username']. "</td>";
                                echo "<td>". $petugas['password']. "</td>";
                                echo "<td>". $petugas['telp']. "</td>";
                                echo "<td>". $petugas['level']. "</td>";
                                echo "<td>";
                                echo "<a class='btn btn-warning' href='?page=formeditpetugas&id=".$petugas['id_petugas']."'>Edit</a> | ";
                                echo "<a class='btn btn-danger' href='?page=hapuspetugas&id=".$petugas['id_petugas']."'>hapus</a>";
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