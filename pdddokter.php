<?php
require('konfig.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM dokter WHERE id_dktr = '$id'";
    if ($koneksi->query($query)) {
        header("Location: vdokter.php?pesan=Data Berhasil Dihapus");
    }
}
?>