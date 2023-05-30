<?php

session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


require 'koneksi.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM dbuser WHERE username = '$username'");

    $cek = mysqli_num_rows($result);

    if ($row = mysqli_fetch_array($result)) {
        if ($password == $row['password']) {

            // set session
            $_SESSION["login"] = true;

            session_start();
            $_SESSION["username"] = $username;

            header("Location: index.php");
            exit();
        }
    }

    $error = true;
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Transparent Login Form</title>
    <link rel="stylesheet" href="style1.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="login-box">
        <form method="post" action="">
            <h1>L O G I N</h1>
            <!-- Username -->
            <div class="textbox">
                <i class="fas fa-users"></i>
                <input type="text" name="username" placeholder="Username" value="">
            </div>
            <!-- Password -->
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" value="">
            </div>
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger">
                    <p style="color: red">username / password salah</p>
                </div>
            <?php endif; ?>
            <!-- Button -->
            <input class="btn" type="submit" name="login" value="L O G I N">
    </div>

</body>

</html>