<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idpasien = $_POST['idpasien'];

    // Hapus data pasien dari database
    $sql = "DELETE FROM tbpasien WHERE idpasien='$idpasien'";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        // Jika berhasil, arahkan kembali ke halaman laporan
        header("Location: lapuser.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
