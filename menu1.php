<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
    header('Location: login.php'); // Redirect ke Login jika belum Login
    exit();
}
echo "<center>";
echo "<h1>Halaman Menu 1</h1>";
echo "<p>Anda sedang berada di <b>Menu 1</b>.</p>";
echo "<p>Berikut adalah menu lainnya:</p>";
echo "<p><a href='menu2.php'>Menu 2</a>&nbsp;<a href='menu3.php'>Menu 3</a></p>";
echo "<p><a href='dashboard.php'>Kembali ke Dashboard</a></p>";
echo "<br>";
echo "<p><a href='logout.php'>Logout</a></p>"; // Tombol Logout
echo "</center>";
?>
