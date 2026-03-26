<?php
session_start();
session_destroy(); // Menghancurkan semua data sesi

header("Location: loginKelas.php"); // Arahkan kembali ke halaman login
exit();
?>