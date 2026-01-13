<?php
require('konfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_dokter = $_POST['id_dokter'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kd_spsls = $_POST['kd_spesialis'];

    $query = "UPDATE dokter SET nama='$nama', alamat='$alamat', kd_spsls='$kd_spsls' WHERE id_dktr='$id_dokter'";

    if ($koneksi->query($query) === TRUE) {
        header("Location: vdokter.php?pesan=Data berhasil diupdate");
    } else {
        header("Location: vdokter.php?pesan=Gagal update data");
    }
}
?>