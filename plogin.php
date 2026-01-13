<?php
require('konfig.php');

if (isset($_POST['usrname']) && isset($_POST['pswd'])) {
    $username = $_POST['usrname'];
    $password = $_POST['pswd'];

    // Cek Akun Admin Statis
    if ($username === "hazisumam" && $password === "3726") {
        header("Location: vdokter.php?pesan=Selamat Datang Hazis Umamullah!");
        exit;
    }

    // Cek Akun dari Database
    $query = "SELECT * FROM pengguna WHERE username = '$username'";
    $result = $koneksi->query($query);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['pass'])) {
            header("Location: vdokter.php?pesan=Login Berhasil!");
            exit;
        }
    }
    header("Location: login.php?pesan=Username atau Password Salah");
}
?>