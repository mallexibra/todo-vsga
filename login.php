<?php

include_once "src/connDB.php";
session_start();
$error = "";

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];

        // Redirect to todo.php
        echo "<script>alert('Login anda berhasil')</script>";
        echo "<script>window.location.href = 'todo.php'</script>";
        exit();
    } else {
        $error = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | To-do List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/style/login.css">
</head>

<body>
    <div class="img-left">
        <div>
            <h1>ADVANTURE START HERE!</h1>
            <p>Join our community</p>
        </div>
    </div>
    <main>
        <form action="" method="post">
            <h1>LOGIN PAGE</h1>
            <p>Hello, Welcome back!</p>
            <label for="email">
                <span>Email</span>
                <div>
                    <img src="src/img/email.png" alt="Password">
                    <input type="email" placeholder="Enter your email address" required name="email" id="email">
                </div>
            </label>
            <label for="password">
                <span>Password</span>
                <div>
                    <img src="src/img/password.png" alt="Password">
                    <input type="password" placeholder="Enter your password" required name="password" id="password">
                </div>
            </label>
            <label for="remember" class="remember">
                <input type="checkbox" name="remember" id="remember">
                <span>Remember me</span>
            </label>
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                <label class="<?php if ($error == "error") {
                                    echo "error";
                                } else {
                                    echo "valid";
                                } ?>" for="" id="validasi">
                    <?php if ($error == "error") : ?>
                        Email/Password anda salah!
                    <?php else : ?>
                        Login berhasil
                    <?php endif; ?>
                </label>
            <?php endif; ?>
            <button type="submit" name="submit" id="button">Login</button>
            <p>Don't have an account? <a href="#">Create account</a></p>
        </form>
    </main>
    <script src="src/style/script.js"></script>
    <!-- <script src="src/style/validateForm.js"></script> -->
</body>

</html>