<?php 
session_start();
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        $result2 = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '$username'");

        // cek username
        if(mysqli_num_rows($result) === 1) {
            // cek password
            $row = mysqli_fetch_assoc($result);
            $row2 = mysqli_fetch_assoc($result2);
            if (password_verify($password, $row["password"])) {
                // set session
                if ($username == "admin") {
                    $_SESSION["login"] = true;

                    $_SESSION["pengguna"] = $row["username"];

    
                    header("Location: index.php");
                    exit;
                } else {
                    $_SESSION["login"] = true;

                    $_SESSION["pengguna"] = $row2["nama"];

    
                    header("Location: mahasiswa.php");
                    exit;
                }
            }; 
        }

        $error = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        label {
            display: block;
            color: white;
        }
        input {
            width: 235px;
            height: 40px;
            border-radius: 5px;
            border: 1px solid black;
            padding: 10px;
        }
        .navbar-brand{
            letter-spacing: 1px;
        }
        .nav-item {
            letter-spacing: 1px;
        }

        .login-section {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translateX(-50%);
            backdrop-filter: blur(3px);
        }
        
        .login-contents {
            border: 1px solid ;
            border-radius: 5px;
            padding: 4rem;
            display: flex;
            flex-direction: column;
            color: var(--black);
            top: 25%;
        }
        h1{
            font-weight: 600;
        }
        
        .login-contents h1{
            font-weight: 600;
            color: white;
            
        }

        .login-contents .login-btn {
            padding: .5rem 95px;
        }
        .regist{
            color: green;
        }
        .login-form span {
            color: white;
        }
        
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg mx-auto">
        <div class="container">
            <a class="navbar-brand text-white" href="#">UNIVERSITAS</a>
        </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="registrasi.php">SignUp</a>
                </li>
            </ul>
        </div>
    </nav>   


<section class="login-section">
    <div class="login-contents">
        <h1>Login</h1>

        <?php if(isset($error)) : ?>
            <p style="color: red; font-style: italic;">Username / Password Salah!</p>
        <?php endif; ?>    

        <div class="login-form">
            <form action="" method="post">
                <label for="Username">Username : </label>
                <br>
                <input type="text" name="username" id="username" placeholder="Ex.H0xxxxxxxxx" autocomplete="off">
                <br><br>
                <label for="password">Password : </label>
                <br>
                <input type="password" name="password" id="password">
                <br><br>
                <button type="submit" name="login" class="btn btn-success login-btn">Login</button>
            </form><br>
            <span>Belum ada akun? </span><a class="regist" href="registrasi.php">Regist Now!</a>
        </div>
    </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>