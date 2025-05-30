<?php
session_start();
if (!empty($_SESSION['signIn'])) {
    header("Location: ./sign-in.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Nasi Kebuli Ajb</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/auth/auth.css">
    <link rel="stylesheet" href="../libs/font/font.css">
</head>

<body>
    <section class="row-sign-in">
        <div class="right-col">
            <img src="../assets/images/ruko/ruko-3.jpg" alt="Gambar Ruko 3">
            <h2>Nasi Kebuli <span>AJB</span>.</h2>
        </div>
        <div class="left-col">
            <div class="circle-blur-first"></div>
            <div class="circle-blur-second"></div>
            <div class="header-auth">
                <img src="../assets/images/logo.png" alt="">
                <h2>Selamat datang di Nasi Kebuli<span>AJB</span>.</h2>
                <p>Masukkan data username dan password anda</p>
            </div>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Email</label>
                    <input required autocomplete="off" type="email" name="email" id="email"
                        placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input required autocomplete="off" type="password" name="password" id="password_field"
                        placeholder="Enter your password">
                    <span class="eye-icon"><i class="fas fa-eye-slash"></i></span>
                </div>
                <button name="signIn" class="btn-sign">Sign In</button>
            </form>
        </div>
    </section>

    <script src="../assets/js/auth.js"></script>

</body>

</html>


<?php

include "../connection/config.php";

if (isset($_POST['signIn'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $cek_login = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($cek_login) > 0) {
        $data = mysqli_fetch_array($cek_login);
        if (password_verify($password, $data['password'])) {
            $_SESSION['signIn'] = 1;
            $_SESSION['email'] = $data['email'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['alamat'] = $data['alamat'];
            $_SESSION['id_users'] = $data['id_users'];
            header("Location: ../admin/dashboard.php");
        } else {
            echo "
            <script>alert('Password anda salah');
            window.location.href = './sign-in.php'</script>
            ";
        }
    } else {
        echo "
            <script>alert('Email dan Password anda salah');
            window.location.href = './sign-in.php'</script>
            ";
    }
}


?>