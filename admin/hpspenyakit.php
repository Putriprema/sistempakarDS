<?php
include "koneksi.php";

if (isset($_POST['data_hapus'])) {
    $id_penyakit = $_POST['data_hapus'];

    // Buat query untuk menghapus data berdasarkan ID
    $query = "DELETE FROM tb_penyakit WHERE id_penyakit = '$id_penyakit'";

    // Jalankan query
    if (mysqli_query($koneksi, $query)) {
        echo "sukses";  // Berhasil dihapus
    } else {
        echo "gagal";  // Gagal menghapus
    }
}
?>
