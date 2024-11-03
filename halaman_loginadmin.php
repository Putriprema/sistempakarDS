<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Diagnosis Dini Penyakit Kulit Anjing</title>
    <link rel="icon" type="image/png" href="assets/logo.png">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .login-container {
                padding: 20px;
            }
            h2 {
                font-size: 24px;
            }
        }

        @media (max-width: 576px) {
            h2 {
                font-size: 18px;
            }
            .login-container {
                padding: 15px;
            }
        }
        /* CSS untuk animasi fade-in */
@keyframes fadeIn {
    from {
        opacity: 0; /* Mulai dari tidak terlihat */
    }
    to {
        opacity: 1; /* Berakhir dengan sepenuhnya terlihat */
    }
}

/* Terapkan animasi fade-in pada seluruh elemen dalam halaman login */
body, 
.login-container, 
h2, 
.form-group, 
.form-control, 
.input-group, 
.btn, 
.text-center {
    animation: fadeIn 2s ease-out forwards;
    opacity: 0; /* Set awalnya tidak terlihat */
}

    </style>
    <script type="text/javascript">
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            // Cek apakah username dan password diisi
            if (username == "" || password == "") {
                alert("Username dan password harus diisi!");
                return false;
            }

            return true;
        }

        // Tampilkan pesan kesalahan jika ada
        function showErrorMessage(message) {
            alert(message);
        }

        // Fungsi untuk menampilkan/menyembunyikan password
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var eyeIcon = document.getElementById("togglePassword");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("glyphicon-eye-open");
                eyeIcon.classList.add("glyphicon-eye-close");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("glyphicon-eye-close");
                eyeIcon.classList.add("glyphicon-eye-open");
            }
        }

        // Fungsi untuk menangani tombol "kembali" (back button)
        window.onpopstate = function(event) {
            // Ketika tombol back ditekan, arahkan pengguna ke halaman index.php
            window.location.href = "index.php";
        };
    </script>
</head>
<body>
    <div class="container login-container">
        <h2 class="text-center">Admin Login</h2>

        <!-- Form login -->
        <form action="" method="post" onsubmit="return validateForm()" autocomplete="off">
            <div class="form-group">
                <label for="username">Masukkan Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Masukkan Password:</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" autocomplete="new-password">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onclick="togglePasswordVisibility()">
                            <span id="togglePassword" class="glyphicon glyphicon-eye-open"></span>
                        </button>
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" style="background-color: #90B5BE; border-color: #90B5BE;">Login</button>
        </form>

        <!-- Tambahkan link kembali ke halaman index -->
        <div class="text-center" style="margin-top: 10px;">
            <a href="index.php" class="btn btn-link">Kembali ke Halaman Utama</a>
        </div>

        <?php
        // Proses login setelah form dikirim
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Ambil data dari form
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validasi username dan password
            if ($username == "admin") {
                if ($password == "admin123") {
                    // Jika username dan password benar, redirect ke halaman admin
                    echo "<script>window.location.href = 'admin/index.php';</script>";
                } else {
                    // Jika password salah, tampilkan pesan
                    echo "<script>showErrorMessage('Password salah');</script>";
                }
            } else {
                // Jika username salah, tampilkan pesan
                echo "<script>showErrorMessage('Username salah');</script>";
            }
        }
        ?>
    </div>

    <!-- Tambahkan Bootstrap dan Glyphicons (untuk ikon mata) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
