<?php
session_start();
if (isset($_POST['Login'])) {
    // Validasi jika username dan password kosong
    if (empty($_POST['nama']) || empty($_POST['pass'])) {
        echo "Username dan Password masih kosong";
        session_destroy();
    } else {
        // Cek username dan password
        if ($_POST['nama'] == "johan" && $_POST['pass'] == "bengbeng123") {
            $_SESSION['login'] = 1;
            $_SESSION['username'] = $_POST['nama'];
            header("Location: dashboard.php"); // Redirect ke dashboard
            exit();
        } else {
            echo "Username atau Password salah!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form method="POST" action="">
    <h2>Form Login</h2>
    <p>Username: <input type="text" name="nama" /></p>
    <p>Password: <input type="password" name="pass" /></p>
    <p><input type="submit" name="Login" value="Login" /></p>
</form>
</body>
</html>
