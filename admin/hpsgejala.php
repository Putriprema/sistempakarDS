<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>HapusData</title>
<link href="/image/mimi.JPG" rel='shortcut icon'>
<style>
body {
    background-image: url(/image/background.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>
</head>
<body>
</body>
</html>

<?php
include "koneksi.php";

// Memastikan variabel $_GET['kdhapus'] ada sebelum diakses
if (isset($_GET['kdhapus'])) {
    $kdhapus = $_GET['kdhapus'];

    // Debugging untuk memeriksa nilai $kdhapus
    echo "<center>ID yang akan dihapus: $kdhapus</center><br>";
    
    // Mengecek apakah $kdhapus tidak kosong
    if (!empty($kdhapus)) {
        // Query untuk menghapus data berdasarkan ID penyakit
        $sql = "DELETE FROM tb_gejala WHERE kdgejala='$kdhapus'";
        if (mysqli_query($koneksi, $sql)) {
            echo "<center><b>Data berhasil dihapus</b></center>";
            echo "<center><a href='gejala.php'><b>OK</b></a></center>";
        } else {
            // Jika ada kesalahan dalam query SQL, tampilkan error
            echo "<center>Error: " . mysqli_error($koneksi) . "</center>";
        }
    } else {
        // Jika ID kosong, tampilkan pesan error
        echo "<center>Data belum berhasil dihapus karena ID kosong</center>";
        echo "<center><a href='penyakit.php'><b>Kembali</b></a></center>";
    }
} else {
    // Jika parameter kdhapus tidak ditemukan di URL
    echo "<center>ID penyakit untuk dihapus tidak ditemukan</center>";
    echo "<center><a href='penyakit.php'><b>Kembali</b></a></center>";
}
?>
