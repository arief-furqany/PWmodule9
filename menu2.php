<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
    header('Location: login.php'); // Redirect ke Login jika belum Login
    exit();
}
echo "<center>";
echo "<h1>Halaman Menu 2</h1>";
echo "<p>Anda sedang berada di <b>Menu 2</b>.</p>";
echo "<p>Berikut adalah menu lainnya:</p>";
echo "<p><a href='menu1.php'>Menu 1</a>&nbsp;<a href='menu3.php'>Menu 3</a></p>";
echo "<p><a href='dashboard.php'>Kembali ke Dashboard</a></p>";
echo "<br>";
echo "<p><a href='logout.php'>Logout</a></p>"; // Tombol Logout
echo "</center>";
?>
