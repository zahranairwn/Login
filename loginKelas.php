<?php
session_start();

$user_benar = "admin";
$password_benar = "1234";
$pesan = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username == $user_benar && $password == $password_benar) {
        $_SESSION["Login"] = true; // Menandakan bahwa pengguna sudah login
        $_SESSION["username"] = $username; // Menyimpan username dalam sesi

        header("Location: dashboard.php");
        exit();
    } else {
        $pesan = "Login Gagal! Periksa username dan password Anda.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

/* judul atas */
.title {
    text-align: center;
    font-size: 40px;
    font-weight: bold;
    margin-top: 30px;
}

/* card tengah */
.container {
    width: 400px;
    margin: 60px auto;
    background-color: #FFE6D1;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    text-align: center;
}

/* judul login */
.container h2 {
    margin-bottom: 10px;
}

/* error */
.error {
    color: red;
    margin-bottom: 15px;
}

/* label */
label {
    display: block;
    text-align: left;
    margin-top: 15px;
    color: #888;
}

/* input */
input {
    width: 100%;
    padding: 12px;
    margin-top: 5px;
    border-radius: 10px;
    border: 1px solid #ccc;
    background-color: #F9F6EF;
}

/* tombol */
button {
    width: 100%;
    padding: 12px;
    margin-top: 20px;
    border: none;
    border-radius: 10px;
    background-color: #D66D6D;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    opacity: 0.9;
}
</style>

</head>
<body>

    <div class="title">halaman login</div>

<div class="container">
    <h2>LOGIN</h2>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($pesan)) { ?>
    <p class="error"><?php echo $pesan; ?></p>
<?php } ?>

    <form method="POST">
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password" required>

        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>