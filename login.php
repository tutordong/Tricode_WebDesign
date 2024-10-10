<?php 
session_start();

if( isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
include 'config/koneksi.php';


    if (isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if( mysqli_num_rows ($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            header("Location: admin/index");
            exit;
        }

    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kuliner Surabaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-container d-flex align-items-center justify-content-center vh-100">
    <div class="card p-4 shadow-lg" style="width: 22rem;">
        <div class="text-center mb-4">
            <h2 class="text-success">Login</h2>
            <p class="text-muted">Masuk ke akun Anda</p>
        </div>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger text-center" role="alert" style="font-size: 15px;">
                Username atau Password Salah
            </div>
        <?php endif; ?>

        <form  method="post">
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="Username" class="form-control" id="username" name="username" placeholder="Masukkan Username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
            </div>
            <button type="submit" name="login" class="btn btn-success w-100">Masuk</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
