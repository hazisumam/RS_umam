<?php
require('konfig.php'); // Pastikan konfig.php di folder yang sama

if (isset($_POST['nmdokter']) && isset($_POST['almdokter'])) {
    $nama = $_POST['nmdokter'];
    $alamat = $_POST['almdokter'];
    $sps = $_POST['kd_spesialis'];

    // Query simpan
    $query = "INSERT INTO dokter (nama, alamat, kd_spsls) VALUES ('$nama', '$alamat', '$sps')";

    if ($koneksi->query($query) === TRUE) {
        header('Location: vdokter.php?pesan=Data Dokter ' . $nama . ' Berhasil Disimpan');
    } else {
        header('Location: dokter.php?pesan=Gagal Simpan: ' . $koneksi->error);
    }
}
$koneksi->close();
?>