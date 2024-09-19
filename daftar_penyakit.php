<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Diagnosa Dini Penyakit Kulit Anjing</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        .navbar {
            background-color: #1D93B3;
            margin-bottom: 60px;
            border: none;
            box-shadow: none;
        }

        .navbar .navbar-brand,
        .navbar .nav > li > a,
        .navbar .btn {
            color: #000;
            font-size: 12pt;
            line-height: 20px;
            font-weight: 600;
        }

        .navbar .btn {
            border-radius: 12px;
            border: none;
            background-color: #90B5BE;
        }

        .navbar .navbar-nav > li > a:hover {
            background-color: #6CBED2;
            color: #fff;
        }

        .navbar .navbar-nav > .active > a,
        .navbar .navbar-nav > .active > a:hover {
            color: #fff;
            background-color: transparent;
            border: none;
        }

        .mb-3 {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .img-thumbnail {
            width: 1900px;
            height: 220px;
			margin-top: 30px;
			border-color: gray;
			box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Custom table header style */
        .table th {
            background-color: #1D93B3; /* Blue background */
            color: black; /* Black text */
            border: 2px solid black; /* Black border */
            font-size: 18pt; /* Font size for table headers */
        }

        .table td {
            border: 1px solid black; /* Black border for table cells */
            font-size: 18pt; /* Font size for table data */
        }

        /* Custom spacing for the table */
        .custom-table {
            margin-top: 50px; /* 30px margin above the table */
        }

        /* Font size adjustment for specific table elements */
        .custom-table ul li label,
        .custom-table th,
        .custom-table td {
            font-size: 18pt; /* Font size for No, Foto Penyakit, Deskripsi Penyakit, etc. */
        }

		.custom-table ul li p{
			font-size: 16pt;
			text-align: justify; 
			margin-right: 10px;
		}
    </style>
</head>
<body>  
    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><?php include("header.php"); ?></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pasien_add_fm.php">Proses Diagnosa</a></li>
                    <li><a href="daftar_penyakit.php">Daftar Penyakit</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#modal-login">Login Administrator</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal Login</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div>                      
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Container -->
    <div class="container">            
        <!-- membuat jumbotron -->
        <div class="jumbotron">
            <center>          
                <h2>Daftar Penyakit Yang Terdapat Dalam Sistem</h2>
                <!-- Tabel dengan Bootstrap dan custom margin -->
                <table class="table table-bordered custom-table">
                    <thead>
                        <tr>
                            <th style="border: 2px solid black;">No</th>
                            <th style="border: 2px solid black;">Foto Penyakit</th>
                            <th style="border: 2px solid black;">Deskripsi Penyakit</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php   
                        include "admin/koneksi.php";
                        $sql = "SELECT * FROM tb_penyakit ORDER BY kdpenyakit";
                        $qry = mysqli_query($koneksi,$sql) or die ("SQL Error".mysqli_error($koneksi));
                        $no=0;
                        while ($data=mysqli_fetch_array($qry)) {
                            $no++;
                    ?>
                    <tr>
                        <td style="border: 1px solid black;"><div align="center"><?php echo $no; ?></div></td>
                        <td style="border: 1px solid black;">
                            <img src="assets/penyakitKulit/<?php echo $data['foto_penyakit']; ?>" alt="Foto Penyakit" class="img-thumbnail">
                        </td>
                        <td style="border: 1px solid black;">
                            <div align="left">
                                <h3><em><?php echo $data['nama_penyakit']; ?></em></h3>
                                <ul>
                                    <li><label>Definisi Penyakit :</label><p class="text-info"><?php echo $data['definisi']; ?></p></li>
                                    <li><label>Solusi :</label><p class="text-warning"><?php echo $data['solusi']; ?></p></li>
                                    <li><label>Gejala :</label><p class="text-success"><?php echo $data['Gejala']; ?></p></li> <!-- Tambahkan bagian gejala -->
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </center>
        </div>
        <!-- akhir jumbotron -->
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-4" style="background-color: #1D93B3;">
        <div class="container">
            <img class="paw-icon" src="assets/Paw.png" alt="Paw Icon">
            <p>&copy; 2024 Sistem Pakar Diagnosis Dini Penyakit Kulit Anjing Dengan Metode Dempster Shafer</p>
            <p>Developed by Putri Prema Paramitha | putriprema14@gmail.com</p>
        </div>
    </footer>
</body>
</html>
