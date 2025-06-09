<?php
include "database.php";
session_start();

$register_message = "";

if (isset($_SESSION["is_login"])) {
    header("Location: dashboard.php");
    exit();
}

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Cek username/email sudah ada atau belum
    $duplicate = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Username atau Email sudah digunakan');</script>";
    } else {
        if ($password === $confirm_password) {
            // Simpan password apa adanya tanpa hashing
            $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            if (mysqli_query($db, $query)) {
                echo "<script>alert('Pendaftaran berhasil'); window.location='login.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan saat menyimpan ke database');</script>";
            }
        } else {
            echo "<script>alert('Password dan Konfirmasi Password tidak cocok');</script>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Sign Up - NeuroCare</title>
  <link rel="stylesheet" href="lores.css">
</head>
<body>
<i><?= $register_message ?></i>
<div class="container">
  <h2>Register</h2>
  <form action="register.php" method="POST">
    <input type="text" name="username" placeholder="username" required><br><br>
    <input type="email" name="email" placeholder="email" required><br><br>
    <input type="password" name="password" placeholder="password" required><br><br>
    <input type="password" name="confirm_password" placeholder="confirmation password" required><br><br>
    <button type="submit" name="register">Register</button>
  </form>
  <div class="modal-footer">
        Sudah punya akun? <a href="login.php">Login Sekarang</a>
        </div>
</body>
</html>
