<?php
session_start();

// Daftar user yang diizinkan
$users = [
    'Ali' => 'password1',
    'Bona' => 'password2',
    'Charlie' => 'password3',
    'Dede' => 'password4',
    'Emon' => 'password5'
];

// Proses login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        // Simpan informasi user di session
        $_SESSION['username'] = $username;
        $_SESSION['login'] = 1;
        header('Location: dashboard.php'); // Redirect ke dashboard
        exit();
    } else {
        $error = "Username atau Password salah!";
    }
}

// Proses logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit();
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
<?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>
<form method="POST" action="">
    <h2>Form Login</h2>
    <p>Username: <input type="text" name="username" required /></p>
    <p>Password: <input type="password" name="password" required /></p>
    <p><input type="submit" name="login" value="Login" /></p>
</form>
</body>
</html>
