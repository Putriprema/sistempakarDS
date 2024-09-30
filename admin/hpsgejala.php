<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

</html>

<?php
include 'koneksi.php'; // Pastikan koneksi ke database sudah benar

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Periksa apakah id_hapus dikirimkan
    if (isset($_POST['id_hapus'])) {
        $id_hapus = $_POST['id_hapus'];

        // Query untuk menghapus data
        $sql = "DELETE FROM tb_gejala WHERE id = ?";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param('i', $id_hapus);

        if ($stmt->execute()) {
            // Jika berhasil, arahkan kembali ke halaman data gejala
            header("Location: gejala.php?status=sukses");
            exit;
        } else {
            // Jika gagal, tampilkan pesan kesalahan
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "ID tidak ditemukan!";
    }
} else {
    echo "Metode permintaan tidak valid!";
}
?>

