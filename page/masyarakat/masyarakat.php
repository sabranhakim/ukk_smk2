<?php include("config.php"); ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            INPUT DATA GURU
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <form>
                        <a href="?page=inputmasyarakat" type="submit" class="btn btn-primary">Tambah baru</a>
                    </form>
                    |
                    <form>
                        <a href="?page=cetakmasyarakat" type="submit" class="btn btn-primary">Cetak</a>
                    </form>
                    <br>
                    <thead>
                        <br>
                        <tr>
                            <th>NIK</th>
                            <th>NAMA</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>TELP</th>
                            <th>AKSES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM masyarakat";
                            $query = mysqli_query($koneksi, $sql);

                            while ($masyarakat = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td>". $masyarakat['nik']. "</td>";
                                echo "<td>". $masyarakat['nama']. "</td>";
                                echo "<td>". $masyarakat['username']. "</td>";
                                echo "<td>". $masyarakat['password']. "</td>";
                                echo "<td>". $masyarakat['telp']. "</td>";
                                echo "<td>";
                                echo "<a class='btn btn-warning' href='?page=formeditmasyarakat&id=".$masyarakat['nik']."'>Edit</a> | ";
                                echo "<a class='btn btn-danger' href='?page=hapusmasyarakat&id=".$masyarakat['nik']."'>hapus</a>";
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