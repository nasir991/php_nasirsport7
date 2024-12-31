<?php
session_start(); // Mulai sesi
session_destroy(); // Hancurkan semua sesi
header("Location: login.php"); // Arahkan ke halaman login
exit; // Hentikan skrip setelah redirect
?>
