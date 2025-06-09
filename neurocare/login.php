<?php
include "database.php";
session_start();
$login_message = "";
if (isset($_SESSION["is_login"])){
 header ("location: dashboard.php");
}
// Proses login saat form disubmit
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE 
    username = '$username' AND password = '$password'
    ";
    $result = $db->query($sql);
    if($result->num_rows > 0) {
      $data = $result->fetch_assoc ();
      $_SESSION["username"] = $data["username"];
      $_SESSION["is_login"] = true;
      header ("location:dashboard.php");
    }else {
      $login_message =  "akun tidak ditemukan";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - NeuroCare</title>
  <link rel="stylesheet" href="lores.css">
</head>
<body>
<i><?= $login_message ?></i>
  <h2>Login</h2>
  <div class="container">
  <form action="login.php" method="POST">
    <input type="text" name="username" placeholder="username" required><br><br>
    <input type="password" name="password" placeholder="password" required><br><br>
    <button type="submit" name="login">Login</button>
  </form>

  <div class="divider"><span>atau login menggunakan</span></div>
        <div class="btn-google" onclick="loginWithGoogle()">
          <svg width="24" height="24" viewBox="0 0 24 24">
          <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
          </svg>
        </div>
        <div class="modal-footer">
        Belum punya akun? <a href="register.php">Registrasi Sekarang</a>
        </div>
        </div>

</body>
</html>
