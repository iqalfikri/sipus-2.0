<?php
session_start();
require 'function.php';
if (isset($_SESSION["login"])) {
    header("location: index.php");
    exit;
}

if (isset($_POST["register"])) {

    if (register($_POST) > 0) {
        echo " <script>
                            alert('Hore kamu berhasil register, Silahkan masuk');
                            document.location.href = 'login.php';
                        </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="vendor/login/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    </style>


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="" method="post">
            <img class="mb-4" src="assets/img/perpus.png" alt="" width="72">
            <h1 class="h3 mb-3 fw-normal">Please Register !</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                    name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Confirmation Password"
                    name="password2">
                <label for="floatingPassword">Confirmation Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-danger mb-2" type="submit" name="register">Register</button>
            <a href="login.php" class="w-100 btn btn-lg btn-success">Login</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2022 – Miftah Khairiyah</p>
        </form>
    </main>



</body>

</html>
