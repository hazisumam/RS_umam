<?php
require('../bb/config.php'); // pastikan file nama sama

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['username']) && !empty($_POST['pass']) && !empty($_POST['email'])) {

        $username  = $_POST['username'];
        $password  = $_POST['pass'];
        $email     = $_POST['email'];

        // Hash password
        $password2 = password_hash($password, PASSWORD_DEFAULT);

        // Query insert
        $query = "INSERT INTO pengguna (username, pass, email) VALUES ('$username', '$password2', '$email')";

        if ($koneksi->query($query) === TRUE) {
            header('Location: ../bb/register.php?pesan=✔️ Data berhasil disimpan');
            exit();
        } else {
            header('Location: ../bb/register.php?pesan=❌ Gagal menyimpan: ' . $koneksi->error);
            exit();
        }
    } else {
        header('Location: ../bb/register.php?pesan=⚠️ Form tidak boleh kosong!');
        exit();
    }
}

$koneksi->close();
?>
