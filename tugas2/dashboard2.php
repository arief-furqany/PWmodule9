<!-- dashboard.php -->
<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
    header('Location: login.php');
    exit();
}
$username = $_SESSION['username'];
?>

<?php include 'header.php'; ?>
    <div>
        <h2>Selamat Datang, <?php echo htmlspecialchars($username); ?></h2>
        <nav>
            <a href="menu.php">Menu 1</a> |
            <a href="menu2.php">Menu 2</a> |
            <a href="menu3.php">Menu 3</a> |
            <a href="logout.php">Logout</a>
        </nav>
        <p>Anda telah berhasil login</p>
    </div>
<?php include 'footer.php'; ?>
