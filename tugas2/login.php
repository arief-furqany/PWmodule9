<!-- login.php -->
<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    header('Location: dashboard2.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'password') {
        $_SESSION['login'] = 1;
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<?php include 'header.php'; ?>
    <div>
        <h2>Silakan Login</h2>
        <form method="POST" action="">
            <p>Username: <input type="text" name="username"></p>
            <p>Password: <input type="password" name="password"></p>
            <p><input type="submit" value="SUBMIT"></p>
        </form>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    </div>
<?php include 'footer.php'; ?>
