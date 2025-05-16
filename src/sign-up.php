<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="../assets/css/auth.css">
    <link rel="stylesheet" href="../assets/css/font.css">
</head>

<body>
    <section class="row-sign-up">
        <div class="right-col">
            <h2>Micro<span>UMKM</span>.</h2>
        </div>
        <div class="left-col">
            <div class="circle-blur-first"></div>
            <div class="circle-blur-second"></div>
            <div class="header-auth">
                <h2>Welcome to Sign Up Micro<span>UMKM</span>.</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore veritatis qui suscipit iure beatae
                    id
                    quos alias quo vitae architecto.</p>
            </div>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input required autocomplete="off" type="text" name="name" id="name"
                        placeholder="Enter your full name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input required autocomplete="off" type="email" name="email" id="email"
                        placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="">No. Telepon</label>
                    <input required autocomplete="off" type="number" name="no_telp" id="no_telp"
                        placeholder="Enter your number phone">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input required autocomplete="off" type="text" name="password" id="password"
                        placeholder="Enter your password">
                </div>
                <button class="btn-sign">Sign In</button>
            </form>
            <p class="account-link">Your have already account? <a href="./sign-in.php">Sign In</a> now!</p>
        </div>
    </section>
</body>

</html>