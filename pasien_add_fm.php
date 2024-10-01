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

body {
        font-family: 'Poppins', sans-serif;
    }

        /* Navbar styling */
        .navbar {
            background-color: #1D93B3;
            margin-bottom: 0;
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

        /* Form styling */
        .container-form {
            margin-top: 50px;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 4px;
        }

        .mb-3 {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        /* Dropdown styling */
        .mb-5 select#cbojk {
            margin-left: 20px;
            width: 200px;
            height: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        .mb-5 select#cbojk:focus {
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }

        .mb-5 select#cbojk {
            max-height: 200px;
            overflow-y: auto;
        }

        /* Input and select box shadow effects */
        .form-control, .form-select {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        .form-control:focus, .form-select:focus {
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Flexbox for form layout */
        .form-group-flex {
            display: flex;
            align-items: center;
        }

        .form-group-flex label {
            margin-right: 85px;
        }

        .form-group-flex select {
            width: 200px;
            height: 40px;
            border-radius: 10px;
        }

        /* Input group styling */
        .input-group-text {
            background-color: #1D93B3;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 0px 4px 4px 0px;
        }

        .input-group {
            display: flex;
            align-items: center;
        }

        /* Custom select styling */
        .custom-select {
            width: 220px;
            height: 40px;
            border-radius: 10px;
            background-color: #fff;
            color: #747474;
            padding: 5px;
            border: none;
            font-size: 14px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        .custom-select option {
            background-color: #4A4A4A;
            color: white;
        }

        .custom-select option:hover {
            background-color: #747474;
        }

        .custom-select:hover {
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);
        }
    </style>

    <script>

        // Validasi agar hanya angka yang boleh diisi di input no telp pemilik
        document.getElementById('TxtTelpPemilik').addEventListener('input', function (e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        // Validasi agar hanya angka yang boleh diisi di input berat badan anjing
        document.getElementById('TxtBeratBadanAnjing').addEventListener('input', function (e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>
</script>

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

    <!-- Modal for login -->
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

    <!-- Modal for registration -->
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

    <!-- Form container -->
    <div class="container-form">
        <div class="jumbotron">
            <center>
                <h2>Masukkan Data Diri Pemilik dan Anjing Anda</h2>
            </center>
            <form method="post" name="form1" target="_self" action="pasienaddsim.php">
                <div class="mb-3">
                    <label for="TxtNamaPemilik" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="TxtNamaPemilik" name="TxtNamaPemilik" maxlength="30" placeholder="Masukkan Nama lengkap Anda" autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="TxtTelpPemilik" class="form-label">No Telp Pemilik</label>
                    <input type="tel" class="form-control" id="TxtTelpPemilik" name="TxtTelpPemilik" maxlength="15" placeholder="Masukkan No Telp Anda" autocomplete="off" pattern="[0-9]+" title="Masukkan hanya angka">
                </div>

                <div class="mb-3">
                    <label for="textnamaAnjing" class="form-label">Nama Anjing</label>
                    <input type="text" class="form-control" id="textnamaAnjing" name="textnamaAnjing" maxlength="25" placeholder="Masukkan Nama Anjing Anda" autocomplete="off">
                </div>

                <div class="mb-3 form-group-flex">
                    <label for="TxtJenisAnjing" class="form-label">Jenis Anjing</label>
                    <input list="daftarJenisAnjing" id="TxtJenisAnjing" name="TxtJenisAnjing" class="form-control" placeholder="Pilih atau ketik jenis anjing" autocomplete="off">
                    <datalist id="daftarJenisAnjing">
                        <option value="Labrador Retriever">
                        <option value="Golden Retriever">
                        <option value="Dachshund">
                        <option value="Beagle">
                        <option value="German Shepherd">
                        <option value="Pomeranian">
                        <option value="Bulldog">
                        <option value="Shih Tzu">
                        <option value="Poodle">
                        <option value="Pekingese">
                        <option value="Chihuahua">
                        <option value="Anjing Kintamani">
                        <option value="Anjing Kedu">
                        <option value="Anjing Bali">
                        <option value="Anjing Pekingese Bali">
                        <option value="Anjing Tosa">
                        <option value="Siberian Husky">
                        <option value="Rottweiler">
                        <option value="Boxer">
                        <option value="Cocker Spaniel">
                        <option value="Bichon Frise">
                        <option value="Welsh Corgi">
                        <option value="Dalmatian">
                        <option value="Keeshond">
                        <option value="Papillon">
                        <option value="Bullmastiff">
                        <option value="Dobermann">
                    </datalist>
                </div>

                <div class="mb-5">
                    <label for="cbojk" class="form-label">Jenis Kelamin Anjing</label>
                    <select id="cbojk" name="cbojk" class="custom-select">
                        <option value="0" selected>Pilih Jenis Kelamin Anjing</option>
                        <option value="Jantan">Jantan</option>
                        <option value="Betina">Betina</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="TxtUmur" class="form-label">Umur Anjing</label>
                    <input type="text" class="form-control" id="TxtUmur" name="TxtUmur" maxlength="20" placeholder="Masukkan Umur Anjing Anda (contoh: 2 tahun atau 6 bulan)" autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="TxtBeratBadanAnjing" class="form-label">Berat Badan Anjing</label>
                    <div class="input-group">
                    <input type="number" class="form-control" id="TxtBeratBadanAnjing" name="TxtBeratBadanAnjing" maxlength="60" placeholder="Masukkan Berat badan Anjing Anda" pattern="[0-9]+" autocomplete="off">  
                    <span class="input-group-text">kg</span>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success" name="Submit">Lanjut</button>
                    <button type="reset" class="btn btn-warning" name="Submit2">Reset</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-4" style="background-color: #1D93B3; margin-top: 100px;">
        <div class="container">
            <img class="paw-icon" src="assets/Paw.png" alt="Paw Icon">
            <p>&copy; 2024 Sistem Pakar Diagnosis Dini Penyakit Kulit Anjing Dengan Metode Dempster Shafer</p>
            <p>Developed by Putri Prema Paramitha | putriprema14@gmail.com</p>
        </div>
    </footer>
</body>
</html>