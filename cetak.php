
<?php
include "admin/koneksi.php";

// Ambil data pasien terbaru (yang baru saja didiagnosis)
$queryPasien = mysqli_query($koneksi, "SELECT * FROM tbpasien ORDER BY idpasien DESC LIMIT 1");
$dataPasien = mysqli_fetch_array($queryPasien);

// Data dari pasien
$namaPemilik = $dataPasien['nama_pemilik'];
$telpPemilik = $dataPasien['no_telp_pemilik'];
$namaAnjing = $dataPasien['nama_anjing'];
$jenisAnjing = $dataPasien['jenis_anjing'];
$jenisKelamin = $dataPasien['jenis_kelamin_anjing'];
$umurAnjing = $dataPasien['umur_anjing'];
$beratBadan = $dataPasien['berat_badan_anjing'];

// Ambil semua hasil diagnosa terbaru dari tb_hasil berdasarkan idpasien yang terbaru
$queryHasil = mysqli_query($koneksi, "SELECT tb_hasil.*, tb_penyakit.nama_penyakit, tb_penyakit.kdpenyakit 
                                      FROM tb_hasil 
                                      JOIN tb_penyakit ON tb_hasil.kdpenyakit = tb_penyakit.kdpenyakit
                                      WHERE idpasien = '{$dataPasien['idpasien']}'
                                      ORDER BY tb_hasil.persentase DESC");  // Tidak membatasi jumlah hasil

// Ambil tanggal dari hasil pertama (jika ada hasil)
$tanggalDiagnose = 'Data tidak tersedia';  // Nilai default jika tidak ada hasil
if ($firstHasil = mysqli_fetch_array($queryHasil)) {
    $tanggalDiagnose = $firstHasil['tanggal'];
    // Reset pointer query untuk bisa digunakan kembali di bawah ini
    mysqli_data_seek($queryHasil, 0);  // Mengembalikan ke awal hasil query
}

// Ambil semua hasil diagnosa
$hasilDiagnosa = [];
while ($dataHasil = mysqli_fetch_array($queryHasil)) {
    $hasilDiagnosa[] = $dataHasil['nama_penyakit'] . " (" . $dataHasil['persentase'] . "%)";
}

// Jika ada hasil diagnosa, gabungkan menjadi satu string, jika tidak ada tampilkan "Data tidak tersedia"
$hasilDiagnosis = !empty($hasilDiagnosa) ? implode("<br>", $hasilDiagnosa) : "Data tidak tersedia";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Diagnosis Dini Penyakit Kulit Anjing</title>
    <link rel="icon" type="image/png" href="assets/logo.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 4px;
        }
        .text-center {
            text-align: center;
        }
        .table {
            margin-top: 30px;
        }
        footer {
            margin-top: 50px;
            background-color: #1D93B3;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Hasil Diagnosis Penyakit Kulit Pada Anjing</h2>
        <hr>

        <table class="table table-bordered">
            <tr>
                <th>Nama Pemilik</th>
                <td><?php echo $namaPemilik; ?></td>
            </tr>
            <tr>
                <th>No Telp Pemilik</th>
                <td><?php echo $telpPemilik; ?></td>
            </tr>
            <tr>
                <th>Nama Anjing</th>
                <td><?php echo $namaAnjing; ?></td>
            </tr>
            <tr>
                <th>Jenis Anjing</th>
                <td><?php echo $jenisAnjing; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin Anjing</th>
                <td><?php echo $jenisKelamin; ?></td>
            </tr>
            <tr>
                <th>Umur Anjing</th>
                <td><?php echo $umurAnjing; ?></td>
            </tr>
            <tr>
                <th>Berat Badan Anjing</th>
                <td><?php echo $beratBadan; ?> kg</td>
            </tr>
            <tr>
                <th>Hasil Diagnosis</th>
                <td><?php echo $hasilDiagnosis; ?></td>
            </tr>
            <tr>
                <th>Tanggal/Waktu Diagnosis</th>
                <td><?php echo $tanggalDiagnose; ?></td>
            </tr>
        </table>

        <div class="text-center">
            <button onclick="window.print();" class="btn btn-primary" style="background-color: #90B5BE; border-color: #90B5BE;">Cetak Laporan</button>
        </div>
    </div>
</body>
</html>
