<?php
session_start();
// Cek apakah pengguna sudah login, jika tidak, arahkan ke halaman login
if (!isset($_SESSION["Login"]) || $_SESSION["Login"] !== true) {
    header("Location: loginKelas.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Dashboard</title>

        <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.title {
    text-align: center;
    font-size: 40px;
    font-weight: bold;
    margin-top: 30px;
}

.container {
    width: 400px;
    margin: 60px auto;
    background-color: #FFE6D1;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    text-align: center;
}

.container p {
    font-size: 25px;
}

.logout-btn {
    position: absolute;
    top: 25px;
    left: 25px;
    
    background-color: #D66D6D;
    color: white;
    padding: 15px 25px;
    border-radius: 10px;
    text-decoration: none;
    font-size: 16px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}

.logout-btn:hover {
    opacity: 0.9;
}

        </style>
    </head>
    
    <body>

<div class="title">Dashboard</div>

<div class="container">
    <p>Halo, Selamat datang <b><?php echo $_SESSION["username"]; ?></b> 👋</p>

    <a href="logout.php" class="logout-btn">Logout</a>
</div>
    </body>
</html> 
