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
        /* editing pada navbar */
        .navbar {
            background-color: #1D93B3; /* Warna latar belakang navbar */
            margin-bottom: 0; /* Menghilangkan margin bawah */
            border: none; /* Menghilangkan border */
            box-shadow: none; /* Menghilangkan shadow */
        }

        .navbar .navbar-brand, 
        .navbar .nav > li > a, 
        .navbar .btn {
            color: #000; /* Warna teks di navbar menjadi hitam */
            font-size: 12pt; /* Ukuran font di navbar */
            line-height: 20px; /* Menjaga agar teks berada di tengah navbar */
            font-weight: 600; /* Menjadikan teks bold */
        }

        .navbar .btn {
            border-radius: 12px; /* Corner radius button */
            border: none; /* Menghilangkan border pada tombol */
            box-shadow: none; /* Menghilangkan shadow pada tombol */
            background-color: #90B5BE; /* Latar belakang button */
        }

        .navbar .navbar-nav > li > a:hover {
            background-color: #6CBED2; /* Warna hover baru */
            color: #fff; /* Warna teks saat hover */
        }

        .navbar .navbar-nav > .active > a, 
        .navbar .navbar-nav > .active > a:hover {
            color: #fff; /* Warna teks item aktif */
            background-color: transparent; /* Menghapus latar belakang aktif */
            border: none; /* Menghilangkan border pada item aktif */
        }

        /* style form */
        .container-form {
            margin-top: 60px;
            max-width: 1000px; /* Set a max-width to limit the form size */
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px;
        }

        .mb-3 {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        /* Add shadow effect to form inputs */
        .form-control, .form-select {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow effect */
            transition: box-shadow 0.3s ease-in-out;
        }

        .form-control:focus, .form-select:focus {
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2); /* Stronger shadow on focus */
        }

        /* Pengaturan Flexbox untuk label dan select box */
        .form-group-flex {
            display: flex;
            align-items: center; /* Posisikan secara vertikal di tengah */
        }

        /* Pengaturan jarak label dari kiri */
        .form-group-flex label {
            margin-right: 70px; /* Jarak antara label dan select */
        }

        /* Select box berada di sebelah kanan label */
        .form-group-flex select {
            width: 200px; /* Lebar select box */
			height: 40px;
			border-radius: 10px;
        }

        /* Style for units (kg) */
        .input-group-text {
            background-color: #1D93B3;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 0px 4px 4px 0px;
        }

        /* Style for combined input field with unit */
        .input-group {
            display: flex;
            align-items: center;
        }

    </style>
</head>
<body>
    <!-- membuat menu navigasi -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
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
                    <li><a href="pasien_add_fm.php">Proses Diagnosa<span class="sr-only">(current)</span></a></li>
                    <li><a href="daftar_penyakit.php">Daftar Penyakit</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#modal-login">Login Administrator</button></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
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

    <div class="modal fade" id="modal-daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal Daftar</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control">
                        </div>
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
                    <button type="button" class="btn btn-primary">Daftar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir modal -->

    <div class="container-form">
        <!-- membuat jumbotron -->
        <div class="jumbotron">
            <center>
                <h2>Masukkan Data Diri Pemilik dan Anjing Anda</h2>
            </center>
            <form onSubmit="return validasi(this)" method="post" name="form1" target="_self" action="pasienaddsim.php">
                <div class="mb-3">
                    <label for="TxtNamaPemilik" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="TxtNamaPemilik" name="TxtNamaPemilik" maxlength="30" placeholder="Masukkan Nama lengkap Anda">
                </div>

                <div class="mb-3">
                    <label for="TxtTelpPemilik" class="form-label">No Telp Pemilik</label>
                    <input type="text" class="form-control" id="TxtTelpPemilik" name="TxtTelpPemilik" maxlength="60" placeholder="Masukkan No Telp Anda">
                </div>

                <div class="mb-3">
                    <label for="textnamaAnjing" class="form-label">Nama Anjing</label>
                    <input type="text" class="form-control" id="textnamaAnjing" name="textnamaAnjing" maxlength="25" placeholder="Masukkan Nama Anjing Anda">
                </div>

                <div class="mb-5">
                    <label for="disabledSelect" class="form-label">Jenis Kelamin Anjing</label>
                    <select id="cbojk" name="cbojk" class="form-select">
                        <option value="0" selected>Jenis Kelamin</option>
                        <option value="Jantan">Jantan</option>
                        <option value="Betina">Betina</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="TxtUmur" class="form-label">Umur Anjing</label>
                    <input type="text" class="form-control" id="TxtUmur" name="TxtUmur" maxlength="8" placeholder="Masukkan Umur Anjing Anda (contoh: 2 tahun atau 6 bulan)">
                </div>

                <!-- Penggunaan Flexbox untuk Jenis Anjing -->
                <div class="mb-3 form-group-flex">
                    <label for="TxtJenisAnjing" class="form-label">Jenis Anjing</label>
                    <select id="TxtJenisAnjing" name="TxtJenisAnjing" class="form-select">
                        <option value="" selected>Pilih Jenis Anjing</option>
                        <option value="Labrador Retriever">Labrador Retriever</option>
                        <option value="Golden Retriever">Golden Retriever</option>
                        <option value="Dachshund">Dachshund</option>
                        <option value="Beagle">Beagle</option>
                        <option value="German Shepherd">German Shepherd</option>
                        <option value="Pomeranian">Pomeranian</option>
                        <option value="Bulldog">Bulldog</option>
                        <option value="Shih Tzu">Shih Tzu</option>
                        <option value="Pekingese">Pekingese</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Anjing Kintamani">Anjing Kintamani</option>
                        <option value="Anjing Kedu">Anjing Kedu</option>
                        <option value="Anjing Bali">Anjing Bali</option>
                        <option value="Anjing Pekingese Bali">Anjing Pekingese Bali</option>
                        <option value="Anjing Tosa">Anjing Tosa</option>
                        <option value="Siberian Husky">Siberian Husky</option>
                        <option value="Rottweiler">Rottweiler</option>
                        <option value="Boxer">Boxer</option>
                        <option value="Cocker Spaniel">Cocker Spaniel</option>
                        <option value="Bichon Frise">Bichon Frise</option>
                        <option value="Welsh Corgi">Welsh Corgi</option>
                        <option value="Dalmatian">Dalmatian</option>
                        <option value="Keeshond">Keeshond</option>
                        <option value="Papillon">Papillon</option>
                        <option value="Bullmastiff">Bullmastiff</option>
                        <option value="Dobermann">Dobermann</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="TxtBeratBadanAnjing" class="form-label">Berat Badan Anjing</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="TxtBeratBadanAnjing" name="TxtBeratBadanAnjing" maxlength="60" placeholder="Masukkan Berat badan Anjing Anda">
                        <span class="input-group-text">kg</span>
                    </div>
                </div>

                <!-- Changed button colors -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success" name="Submit">Lanjut</button> <!-- Green for Lanjut -->
                    <button type="reset" class="btn btn-warning" name="Submit2">Reset</button> <!-- Yellow for Reset -->
                </div>
            </form>
        </div>
        <!-- akhir jumbotron -->

        <div class="col-sm-6 col-md-3"></div>
        <br><br><br><br><br><br>
    </div>
    <br>

    <!-- footer -->
    <footer class="bg-primary text-white text-center py-4" style="background-color: #1D93B3; margin-top: 100px;">
        <div class="container">
            <img class="paw-icon" src="assets/Paw.png" alt="Paw Icon">
            <p>&copy; 2024 Sistem Pakar Diagnosis Dini Penyakit Kulit Anjing Dengan Metode Dempster Shafer</p>
            <p>Developed by Putri Prema Paramitha</p>
        </div>
    </footer>
</body>
</html>
