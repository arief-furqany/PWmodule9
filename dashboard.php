<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
    header('Location: login.php'); // Redirect ke login jika belum login
    exit();
}

$nama = $_SESSION['username'];
echo "<center>";
echo "<h1>Ini Halaman Pertama</h1>";
echo "<p>Anda Login Sebagai <b>" . htmlspecialchars($nama) . "</b></p>";
echo "<p>Berikut ini menu navigasi Anda:</p>";
echo "<p><a href='menu1.php'>Menu 1</a>&nbsp;<a href='menu2.php'>Menu 2</a>&nbsp;<a href='menu3.php'>Menu 3</a></p>";
echo "<p><a href='logout.php'>Logout</a></p>";
echo "</center>";
?>
