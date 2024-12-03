<!-- menu1.php -->
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
        <h2>Menu 1</h2>
        <p>Anda sedang berada di <b>Menu 1</b>.</p>
        <nav>
            <a href="menu2.php">Menu 2</a> |
            <a href="menu3.php">Menu 3</a> |
            <a href="dashboard.php">Kembali ke Dashboard</a> |
            <a href="logout.php">Logout</a>
        </nav>
    </div>
<?php include 'footer.php'; ?>
