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

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

</html>

<?php
include "koneksi.php";  // Koneksi ke database

if (isset($_POST['data_hapus'])) {
    $id = $_POST['data_hapus'];  // Ambil ID gejala dari request

    // Pastikan ID adalah integer untuk keamanan
    $id = intval($id);

    // Buat query untuk menghapus gejala berdasarkan ID menggunakan prepared statement
    $stmt = $koneksi->prepare("DELETE FROM tb_gejala WHERE id = ?");
    $stmt->bind_param("i", $id);  // "i" berarti parameter adalah integer

    // Eksekusi query
    if ($stmt->execute()) {
        echo "sukses";  // Kirim respons sukses jika data berhasil dihapus
    } else {
        echo "gagal";  // Kirim respons gagal jika ada masalah
    }

    // Tutup statement
    $stmt->close();
}

// Tutup koneksi
$koneksi->close();
?>

