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
              /* edit foto background disini */
    .background-container {
        position: relative; /* Pastikan konten overlay berada di atas background */
        background-image: url('assets/homepict.png');
        background-size: cover; /* Membuat gambar memenuhi layar */
        background-position: center; /* Menjaga posisi gambar di tengah */
        background-repeat: no-repeat; /* Menghindari pengulangan gambar */
        height: 100vh; /* Memastikan gambar memenuhi seluruh tinggi viewport */
        min-height: 600px; /* Menetapkan tinggi minimum untuk responsivitas */
        display: flex;
        justify-content: center;
        align-items: center;
        color: white; /* Sesuaikan warna teks agar kontras dengan gambar */
        flex-direction: column; /* Mengatur layout menjadi kolom */
        margin-top: 0; /* Hapus jarak atas */
        padding-top: 0; /* Hapus padding atas */
    }

    .background-container::before {
        content: ''; /* Membuat pseudo-element */
        position: absolute; /* Posisi absolute untuk overlay */
        top: 0; /* Menutupi seluruh bagian atas */
        left: 0; /* Menutupi seluruh bagian kiri */
        width: 100%; /* Lebar 100% dari container */
        height: 100%; /* Tinggi 100% dari container */
        background: rgba(0, 0, 0, 0.5); /* Overlay gelap dengan transparansi 0.5 */
        z-index: 1; /* Pastikan overlay berada di atas background */
    }
  
      /* Tambahkan media query untuk responsivitas lebih lanjut */
      @media (max-width: 768px) {
        .background-container {
            height: auto; /* Atur tinggi otomatis pada layar kecil */
            min-height: 400px; /* Menetapkan tinggi minimum lebih kecil pada layar kecil */
        }

        h1, h2, h3, p1, .custom-btn {
            font-size: 1.8rem; /* Menyesuaikan ukuran font di layar kecil */
            margin: 10px 0; /* Jarak lebih kecil di layar kecil */
        }

        .custom-btn {
            width: 10%; /* Lebar tombol lebih responsif */
            height: auto; /* Tinggi tombol otomatis */
            font-size: 12pt; /* Ukuran font tombol di layar kecil */
            padding: 10px; /* Jarak padding yang lebih kecil */
        }
    }

        .background-container::before {
            content: ''; /* Membuat pseudo-element */
            position: absolute; /* Posisi absolute untuk overlay */
            top: 0; /* Menutupi seluruh bagian atas */
            left: 0; /* Menutupi seluruh bagian kiri */
            width: 100%; /* Lebar 100% dari container */
            height: 100%; /* Tinggi 100% dari container */
            background: rgba(0, 0, 0, 0.10); /* Overlay gelap dengan transparansi 0.5 */
            z-index: 1; /* Pastikan overlay berada di atas background */
        }

        .content {
            position: relative; /* Konten berada di atas overlay */
            z-index: 2; /* Konten berada di atas overlay */
        }

        h1, h2, h3, p1, .custom-btn {
            margin: 25px 0; /* Jarak 10px di atas dan bawah elemen */
            color: #000; /* Warna teks default */
            font-weight: 600; /* Menjadikan teks bold */
        }
    
        h3 {
            color: #E4E5E6; /* Warna teks untuk <h3> */
            font-size: 35px; /* Ukuran font */
        }

        p1 {
            color: #1F2020; /* Warna teks untuk <p1> */
            font-size: 13.5pt; /* Ukuran font */
            font-style: normal;
        }

        .custom-btn {
    background-color: #90B5BE; /* Latar belakang button */
    color: #fff; /* Warna teks button */
    padding: 1.5vw 3vw; /* Padding responsif */
    text-decoration: none; /* Hapus garis bawah */
    border-radius: 30px; /* Corner radius button */
    width: 20vw; /* Lebar button responsif berdasarkan viewport */
    max-width: 290px; /* Lebar maksimal button */
    height: 7vh; /* Tinggi button responsif berdasarkan viewport */
    max-height: 70px; /* Tinggi maksimal button */
    font-size: 2vw; /* Ukuran font responsif berdasarkan viewport */
    max-font-size: 20px; /* Ukuran maksimal font */
    font-family: 'Poppins', sans-serif; /* Menggunakan font Poppins */
    font-weight: 600; /* Menjadikan teks bold */
    margin-top: 20px; /* Jarak atas button */
    display: inline-flex; /* Gunakan flex untuk menyelaraskan icon dan teks */
    align-items: center; /* Vertikal center icon dan teks */
    justify-content: center; /* Horizontal center icon dan teks */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Bayangan button */
}

.custom-btn:hover {
    background-color: #6CBED2; /* Warna latar belakang saat hover */
    text-decoration: none; /* Hilangkan garis bawah saat hover */
}

/* Media queries untuk layar besar */
@media (min-width: 1200px) {
    .custom-btn {
        width: 290px;
        height: 70px;
        font-size: 20px;
        padding: 10px 20px;
    }
}

/* Media queries untuk tablet */
@media (max-width: 992px) {
    .custom-btn {
        width: 30vw;
        height: 6vh;
        font-size: 2.5vw;
    }
}

/* Media queries untuk smartphone */
@media (max-width: 576px) {
    .custom-btn {
        width: 40vw;
        height: 9vh;
        font-size: 3vw;
    }
}

/* Media queries untuk layar sangat kecil */
@media (max-width: 400px) {
    .custom-btn {
        width: 50vw;
        height: 10vh;
        font-size: 4vw;
    }
}


        /* Menghilangkan bingkai pada navbar */
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

        /* Styling untuk judul bagian "Apa Itu Sistem Pakar?" */
        .section-title {
            font-size: 22pt; /* Mengatur ukuran font */
            color: #000; /* Warna teks hitam */
            font-weight: 600; /* Mengatur ketebalan teks */
            text-align: center; /* Teks berada di tengah */
            margin-bottom: 40px; /* Jarak bawah antara judul dan paragraf */
            margin-top: 50px; /* Jarak atas antara judul dan elemen di atasnya */
        }

        .centered-paragraph {
            font-size: 18pt;
            color: #333;
            line-height: 1.6;
            text-align: center; /* Teks akan berada di tengah */
            margin: 0 auto; /* Memastikan ada margin otomatis untuk posisi tengah */
            max-width: 800px; /* Maksimum lebar teks */
            margin-top: 70px;
        }

        /* Styling headline h3 dan paragraf fungsi sistem pakar */
        .icon-description {
            font-size: 18pt; /* Ukuran font untuk deskripsi ikon */
            color: #333; /* Warna teks deskripsi */
            margin-top: 50px; /* Jarak atas untuk paragraf di bawah ikon */
            max-width: 300px; /* Maksimum lebar teks */
            margin: 0 auto; /* Teks berada di tengah */
        }

        .img-fluid {
            max-width: 150px; /* Membatasi ukuran gambar */
            margin-bottom: 50px; /* Jarak bawah gambar dengan paragraf */
            margin-top: 70px;
        }

        .mt-4 {
            margin-top: 80px; /* Margin top untuk memberi jarak atas */
        }

        .mt-5 {
            margin-top: 100px; /* Margin top lebih besar untuk bagian headline */
        }

        /* Styling untuk paragraf di sebelah kiri gambar anjing */
        .section-paragraph {
            font-size: 18pt; /* Ukuran font sebelah kiri */
            color: #333;
            line-height: 1.6;
            text-align: justify;
            margin-left: 20px;
            margin-top: 70px;
        }

        /* Styling untuk menyelaraskan teks dan gambar secara vertikal */
        .row.align-items-center {
            display: flex;
            align-items: center;
        }

        /* Styling untuk headline "Tentang Metode Dempster Shafer" */
        .section-title {
            font-size: 22pt;
            color: #000;
            font-weight: 600;
            text-align: center;
            margin-top: 70px;
            margin-bottom: 20px;
        }

        /* Styling untuk gambar icon4.png */
        .image-center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 200px; /* Ukuran gambar icon4 bisa disesuaikan */
            margin-bottom: 30px;
            margin-top: 70px;
        }

        /* Styling untuk paragraf di bawah gambar */
        .paragrafDS {
            font-size: 18pt; /* Ukuran font */
            color: #333; /* Warna teks */
            line-height: 1.6; /* Jarak antar baris */
            text-align: justify; /* Teks di tengah */
            max-width: 800px; /* Maksimum lebar teks */
            margin: 0 auto; /* Margin otomatis untuk teks berada di tengah */
            margin-top: 30px; /* Jarak atas paragraf */
            margin-bottom: 150px; /* Jarak bawah paragraf */
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
                    <li><a href="daftar_penyakit.php">Daftar Penyakit dan Solusi</a></li>
                </ul>
				
                <ul class="nav navbar-nav navbar-right">					 
    <li><a href="halaman_loginadmin.php" class="btn btn-primary navbar-btn" style="border-radius: 12px; font-size: 11.1pt; width: 200px; height: 35px; display: inline-flex; justify-content: center; align-items: center;">Login Sebagai Admin</a></li>
</ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>	

   
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
 

    <!-- tampilan home utama -->
    <div class="background-container">
        <div class="container">
            <div class="content">
                <h1>Selamat Datang di</h1>
                <h2>Sistem Pakar Diagnosa Dini Penyakit Kulit Anjing</h2>
                <h3>Dengan Metode Dempster Shafer</h3>
                <p1>Temukan solusi cepat dan akurat untuk kesehatan kulit anjing Anda di sini</p1>
                <p>
                    <a class="custom-btn" href="pasien_add_fm.php" role="button">
                        Mulai Diagnosa    
                        <img class="paw-icon" src="assets/Paw.png" alt="Paw Icon">
                    </a>
                </p>
            </div>
        </div>
    </div>

    <div class="container text-center mt-5">
        <h2 class="section-title">Apa Itu Sistem Pakar Untuk Diagnosis Penyakit Kulit Anjing?</h2>
        <p class="centered-paragraph">
            Pengembangan sistem pakar adalah salah satu perkembangan teknologi yang dapat digunakan untuk menyelesaikan permasalahan penyakit kulit pada anjing. Sistem pakar ini dapat membantu pemilik anjing untuk mengetahui penyakit kulit pada anjing mereka serta memberikan panduan dalam penanganan awal penyakit kulit tersebut.
        </p>
    </div>

    <!-- Tambahkan bagian Fungsi Sistem Pakar -->
    <div class="container text-center mt-5">
        <h3 class="section-title">Fungsi Sistem Pakar Untuk Diagnosis Penyakit Kulit Anjing</h3>
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="assets/icon1.png" alt="Icon Diagnosa Cepat" class="img-fluid" style="max-width: 300px;">
                <p class="icon-description">Menyediakan diagnosa awal yang cepat dan tepat untuk penyakit kulit pada anjing.</p>
            </div>
            <div class="col-md-6">
                <img src="assets/icon2.png" alt="Icon Kesembuhan" class="img-fluid" style="max-width: 300px;">
                <p class="icon-description">Meningkatkan peluang kesembuhan dan pencegahan penyakit kulit dini.</p>
            </div>
        </div>
    </div>

    <!-- Bagian baru: Apa Itu Penyakit Kulit Pada Anjing -->
    <div class="container mt-5">
        <h4 class="section-title">Apa Itu Penyakit Kulit Pada Anjing?</h4>
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="section-paragraph">Penyakit Kulit Pada Anjing adalah penyakit kulit dengan kasus angka kejadian cukup tinggi yang dapat disebabkan oleh beberapa agen seperti bakteri, virus, jamur, ektoparasit, dan juga kondisi perolehan dari lingkungan.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="assets/icon3.png" alt="Gambar Anjing" class="img-fluid" style="max-width: 350px;">
            </div>
        </div>
    </div>
	
    <!-- bagian penjelasan metode DS -->
    <div class="container mt-5">
        <h5 class="section-title">Tentang Metode Dempster Shafer Pada Sistem Pakar Diagnosa Penyakit Kulit Anjing</h5>
        <div class="row align-items-center">
            <div class="col-md-12 text-center">
                <img src="assets/icon4.png" alt="Icon Metode Dempster Shafer" class="img-fluid" style="max-width: 320px;">
            </div>
            <div class="col-md-12 text-center mt-4">
                <p class="paragrafDS">Metode Dempster Shafer mendiagnosis penyakit kulit pada anjing dengan menilai tingkat bobot keparahan gejalanya. Metode ini menggunakan penggabungan berbagai sumber bukti untuk menghasilkan tingkat kepercayaan yang akurat, mengukur probabilitas serta keyakinan, sehingga memberikan gambaran lengkap tentang kondisi penyakit kulit yang diderita oleh anjing tersebut.</p>
            </div>
        </div>
    </div>

    <!-- footer  -->
    <footer class="bg-primary text-white text-center py-4" style="background-color: #1D93B3;">
        <div class="container">
            <img class="paw-icon" src="assets/Paw.png" alt="Paw Icon">
            <p>&copy; 2024 Sistem Pakar Diagnosis Dini Penyakit Kulit Anjing Dengan Metode Dempster Shafer</p>
            <p>Developed by Putri Prema Paramitha | putriprema14@gmail.com</p>
        </div>
    </footer>
</body>
</html>
