<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/auth.css">
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/tailwindcss/">
</head>

<body>
    <section class="row-sign-in">
        <div class="right-col">
            <h2>Micro<span>UMKM</span>.</h2>
        </div>
        <div class="left-col">
            <div class="circle-blur-first"></div>
            <div class="circle-blur-second"></div>
            <div class="header-auth">
                <h2>Welcome to Sign In Micro<span>UMKM</span>.</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore veritatis qui suscipit iure beatae
                    id
                    quos alias quo vitae architecto.</p>
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
            <p class="account-link">Your haven't already account? <a href="./sign-up.php">Sign Up</a> now!</p>
        </div>
    </section>

    <script src="../assets/js/auth.js"></script>

</body>

</html>



<?php

include "./connection/config.php";

if (isset($_POST['signIn'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $check = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($check) > 0) {
        $data = mysqli_fetch_array($check);
        if (password_verify($password, $data['password'])) {
            $_SESSION['signIn'] = 1;
            $_SESSION['email'] = $data['email'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['email'] = $data['email'];
        }
    }
}


?>