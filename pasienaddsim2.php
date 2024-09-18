<?php
include "admin/koneksi.php"; // Koneksi ke database

# Baca variabel dari form menggunakan POST
$TextNamaAnjing = $_POST['textnamaAnjing'];
$CboKelamin = $_POST['cbojk']; // Jenis kelamin anjing
$TxtUmurAnjing = $_POST['TxtUmur'];
$TxtJenisAnjing = $_POST['TxtJenisAnjing'];
$TxtBeratBadanAnjing = $_POST['TxtBeratBadanAnjing'];

# Dapatkan IP pengguna
$NOIP = $_SERVER['REMOTE_ADDR'];

# Validasi Form Input
if (trim($TextNamaAnjing) == "") {
    include "pasien_add_fm.php";
    echo "<script>alert('Masukkan nama anjing!');</script>";
    exit;
} elseif (trim($CboKelamin) == "0") {
    include "pasien_add_fm.php";
    echo "<script>alert('Pilih jenis kelamin anjing!');</script>";
    exit;
} elseif (trim($TxtUmurAnjing) == "") {
    include "pasien_add_fm.php";
    echo "<script>alert('Masukkan umur anjing!');</script>";
    exit;
} elseif (trim($TxtJenisAnjing) == "") {
    include "pasien_add_fm.php";
    echo "<script>alert('Masukkan jenis anjing!');</script>";
    exit;
} elseif (trim($TxtBeratBadanAnjing) == "") {
    include "pasien_add_fm.php";
    echo "<script>alert('Masukkan berat badan anjing!');</script>";
    exit;
} else {
    # Jika validasi berhasil, masukkan data ke database (tanpa menyimpan data pribadi)
    $sql = "INSERT INTO tbpasien (
                nama_anjing, 
                jenis_kelamin_anjing, 
                umur_anjing, 
                jenis_anjing, 
                berat_badan_anjing, 
                noip, 
                tanggal
            ) VALUES (
                '$TextNamaAnjing',
                '$CboKelamin',
                '$TxtUmurAnjing',
                '$TxtJenisAnjing',
                '$TxtBeratBadanAnjing',
                '$NOIP',
                NOW()
            )";

    # Jalankan query dan cek apakah ada error
    if (mysqli_query($koneksi, $sql)) {
        echo "<meta http-equiv='refresh' content='0; url=konsultasifm2.php'>";
    } else {
        echo "SQL Error: " . mysqli_error($koneksi);
    }
}
?>
