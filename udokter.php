<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container container-custom">
    <h2>Edit Data Dokter</h2>
    <?php
    require('konfig.php');
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM dokter WHERE id_dktr = $id";
        $result = $koneksi->query($query);
        $row = $result->fetch_assoc();
    ?>
    <form action="pudokter.php" method="post">
        <input type="hidden" name="id_dokter" value="<?= $row['id_dktr'] ?>">
        <div class="mb-3">
            <label class="form-label">Nama Dokter</label>
            <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?= $row['alamat'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Spesialis</label>
            <select class="form-select" name="kd_spesialis">
                <option value="ANK" <?= $row['kd_spsls'] == 'ANK' ? 'selected' : '' ?>>Anak</option>
                <option value="SBDH" <?= $row['kd_spsls'] == 'SBDH' ? 'selected' : '' ?>>Bedah</option>
                <option value="DLM" <?= $row['kd_spsls'] == 'DLM' ? 'selected' : '' ?>>Penyakit Dalam</option>
                <option value="KDG" <?= $row['kd_spsls'] == 'KDG' ? 'selected' : '' ?>>Kandungan</option>
                <option value="UMM" <?= $row['kd_spsls'] == 'UMM' ? 'selected' : '' ?>>Umum</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="vdokter.php" class="btn btn-secondary">Batal</a>
    </form>
    <?php } ?>
</div>
</body>
</html>