<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PENGADUAN MASYARAKAT</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >PENGADUAN MASYARAKAT</a>
            </div>
            <!-- /.navbar-header -->
                    
            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li>
                    <ul>
                        <h4>Selamat Datang <?php echo $_SESSION['username']; ?></h4>
                    </ul>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                    
                </li>
                
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index2.php">HOME</a>
                        </li>
                        <li>
                            <a href="?page=pengaduan"> PENGADUAN MASYARAKAT</a>
                        </li>
                        <li>
                            <a href="?page=masyarakat"> MASYARAKAT</a>
                        </li>
                        <li>
                            <a href="?page=petugas"> PETUGAS</a>
                        </li>
                        <li>
                            <a href="?page=tanggapan"> TANGGAPAN</a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Selamat Datang</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php
                error_reporting(error_reporting() &~E_NOTICE);
                $page = $_GET["page"];
                $aksi = $_GET["aksi"];

                if ($page == "pengaduan") {
                    if ($aksi == "") {
                        include "page/pengaduan/pengaduan.php";
                    }
                } elseif ($page == "masyarakat") {
                    if ($aksi == "") {
                        include "page/masyarakat/masyarakat.php";
                    }
                } elseif ($page == "petugas") {
                    if ($aksi == "") {
                        include "page/petugas/petugas.php";
                    }
                }elseif ($page == "tanggapan") {
                    if ($aksi == "") {
                        include "page/tanggapan/tanggapan.php";
                    }
                }
                //pengaduan 
                elseif ($page == "inputpengaduan") {
                    if ($aksi == "") {
                        include "page/pengaduan/inputpengaduan.php";
                    }
                } elseif ($page == "prosesinput") {
                    if ($aksi == "") {
                        include "page/pengaduan/prosesinput.php";
                    }
                } elseif ($page == "hapuspengaduan") {
                    if ($aksi == "") {
                        include "page/pengaduan/hapus.php";
                    }
                } elseif ($page == "formedit") {
                    if ($aksi == "") {
                        include "page/pengaduan/formedit2.php";
                    }
                } elseif ($page == "prosesedit") {
                    if ($aksi == "") {
                        include "page/pengaduan/prosesedit.php";
                    }
                } elseif ($page == "cetakpengaduan") {
                    if ($aksi == "") {
                        include "page/pengaduan/cetak_pengaduan.php";
                    }
                }
                 //masyarakat 
                elseif ($page == "inputmasyarakat") {
                    if ($aksi == "") {
                        include "page/masyarakat/input.php";
                    }
                } elseif ($page == "prosesinputmasyarakat") {
                    if ($aksi == "") {
                        include "page/masyarakat/prosesinput.php";
                    }
                } elseif ($page == "hapusmasyarakat") {
                    if ($aksi == "") {
                        include "page/masyarakat/hapus.php";
                    }
                } elseif ($page == "formeditmasyarakat") {
                    if ($aksi == "") {
                        include "page/masyarakat/formedit2.php";
                    }
                } elseif ($page == "proseseditmasyarakat") {
                    if ($aksi == "") {
                        include "page/masyarakat/prosesedit.php";
                    }
                } elseif ($page == "cetakmasyarakat") {
                    if ($aksi == "") {
                        include "page/masyarakat/cetak_masyarakat.php";
                    }
                }
                //petugas 
                elseif ($page == "inputpetugas") {
                    if ($aksi == "") {
                        include "page/petugas/inputpetugas.php";
                    }
                } elseif ($page == "prosesinputpetugas") {
                    if ($aksi == "") {
                        include "page/petugas/prosesinput.php";
                    }
                } elseif ($page == "formeditpetugas") {
                    if ($aksi == "") {
                        include "page/petugas/formedit.php";
                    }
                } elseif ($page == "proseseditpetugas") {
                    if ($aksi == "") {
                        include "page/petugas/prosesedit.php";
                    }
                } elseif ($page == "hapuspetugas") {
                    if ($aksi == "") {
                        include "page/petugas/hapus.php";
                    }
                } elseif ($page == "cetakpetugas") {
                    if ($aksi == "") {
                        include "page/petugas/cetak_petugas.php";
                    }
                }
                //tanggapan
                elseif ($page == "inputtanggapan") {
                    if ($aksi == "") {
                        include "page/tanggapan/inputtanggapan.php";
                    }
                } elseif ($page == "prosesinputtanggapan") {
                    if ($aksi == "") {
                        include "page/tanggapan/prosesinput.php";
                    }
                } elseif ($page == "formedittanggapan") {
                    if ($aksi == "") {
                        include "page/tanggapan/formedit.php";
                    }
                } elseif ($page == "prosesedittanggapan") {
                    if ($aksi == "") {
                        include "page/tanggapan/prosesedit.php";
                    }
                } elseif ($page == "hapustanggapan") {
                    if ($aksi == "") {
                        include "page/tanggapan/hapus.php";
                    }
                } elseif ($page == "cetaktanggapan") {
                    if ($aksi == "") {
                        include "page/tanggapan/cetak_tanggapan.php";
                    }
                }
            ?>

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="js/demo/dashboard-demo.js"></script>

</body>

</html>
