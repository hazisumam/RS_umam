<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include('navbar.php'); ?>

<div class="container container-custom">
    <div class="p-4 bg-light border rounded mb-4">
        <h5 class="text-primary">Identitas Mahasiswa:</h5>
        <p class="mb-0">Nama: Hazis Umamullah | Kelas: Informatika 5B | NIM: 230602040</p>
    </div>

    <h2>Form Tambah Data Dokter</h2>
    <form action="pdokter.php" method="post">
        <div class="mb-3">
            <label class="form-label">Nama Dokter</label>
            <input type="text" class="form-control" name="nmdokter" placeholder="Masukkan Nama Lengkap" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="almdokter" placeholder="Masukkan Alamat" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Spesialis</label>
            <select class="form-select" name="kd_spesialis" required>
                <option value="">-- Pilih Spesialis --</option>
                <option value="ANK">Anak</option>
                <option value="SBDH">Bedah</option>
                <option value="DLM">Penyakit Dalam</option>
                <option value="KDG">Kandungan</option>
                <option value="UMM">Umum</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">Simpan Data</button>
    </form>
</div>
</body>
</html>