<?php
// Mulai sesi
session_start();

// Mengecek apakah pengguna telah mengirimkan form login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gantilah ini dengan konfigurasi koneksi ke database Anda
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "webabsen";

    // Membuat koneksi ke database
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Memeriksa apakah koneksi berhasil
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Mengambil data dari form
    $username = $_POST["user"];
    $password = $_POST["pass"];

    // Menghindari SQL injection (sebaiknya gunakan prepared statement)
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query untuk mencari pengguna dengan username yang cocok
    $query = "SELECT * FROM login WHERE user = '$username' LIMIT 1";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Pengguna ditemukan, periksa password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["pass"])) {
            // Password cocok, masukkan pengguna ke dalam sesi
            $_SESSION["user"] = $row["user"];
            header("Location: index.php"); // Redirect ke halaman dashboard setelah login sukses
            exit();
        } else {
            $error = "Password salah. Coba lagi.";
        }
    } else {
        $error = "Username tidak ditemukan.";
    }

    // Tutup koneksi ke database
    $conn->close();
}

// Jika login gagal, kembali ke halaman login dengan pesan kesalahan
$_SESSION["error"] = $error;
header("Location: login.php"); // Ganti "login.php" dengan nama file halaman login Anda
exit();
?>
