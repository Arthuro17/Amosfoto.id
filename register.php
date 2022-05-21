<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, password)
     VALUES ('$username', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Username Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Register</title>
</head>

<body class="register-bg">
    <h1 class="text-light text-center display-2 py-5">Amosfoto.id</h1>
    <div class="container-fluid register-con">
        <form action="" method="POST" class="login-username col-lg-8 offset-lg-2 mt-3">
            <h2 class="login-text text-center text-light mb-4">Register</h2>
            <div class="input-group mb-3">
                <input type="text" class="form-control" style="width: 500px; border-radius: 7px;" placeholder=" Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" style="width: 500px; border-radius: 7px;" placeholder=" Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" style="width: 500px; border-radius: 7px;" placeholder=" Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group mb-3">
                <button name="submit" style="background-color: #1a1e22; width: 500px; border-radius: 7px;" class="btn text-light">Register</button>
            </div>
            <p class="login-register-text text-light mb-3">Anda sudah punya akun? <a style="text-decoration:none" class="text-warning" href="index.php">Login </a></p>
        </form>
    </div>
</body>

</html>