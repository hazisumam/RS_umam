<!DOCTYPE html>
<html lang="id">
<head>
    <title>Daftar Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <?php include('navbar.php'); ?>
    <div class="container container-main">
        <h2>Daftar Dokter Aktif</h2>
        
        <?php if (isset($_GET['pesan'])) { ?>
            <div class="alert alert-success alert-dismissible fade show">
                <i class="bi bi-check-circle-fill"></i> <?php echo $_GET['pesan']; ?>
            </div>
        <?php } ?>

        <table class="table table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>ID</th><th>Nama Dokter</th><th>Alamat</th><th>Spesialis</th><th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('konfig.php');
                $limit = 5;
                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $start = ($page - 1) * $limit;

                $query = "SELECT d.id_dktr, d.nama, d.alamat, s.nmspesialis 
                          FROM dokter d LEFT JOIN spesialis s ON d.kd_spsls = s.kd_spsls 
                          LIMIT $start, $limit";
                $result = $koneksi->query($query);

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id_dktr']}</td>
                        <td class='fw-bold'>{$row['nama']}</td>
                        <td>{$row['alamat']}</td>
                        <td><span class='badge bg-info text-dark'>{$row['nmspesialis']}</span></td>
                        <td class='text-center'>
                            <a href='udokter.php?id={$row['id_dktr']}' class='btn btn-warning btn-sm'><i class='bi bi-pencil'></i></a>
                            <a href='pdddokter.php?id={$row['id_dktr']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Hapus data ini?\")'><i class='bi bi-trash'></i></a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
        <?php include('halaman.php'); ?>
    </div>
    
    <script>
        $(document).ready(function(){
            setTimeout(function() { $(".alert").fadeOut(); }, 3000);
        });
    </script>
</body>
</html>