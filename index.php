<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
    <div class="container-fluid px-4">

        <!-- BRAND -->
        <a class="navbar-brand fw-bold text-white" href="vdokter.php">
            <i class="bi bi-hospital-fill"></i> RS HUMA BB
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- MENU KIRI -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="vdokter.php">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="vdokter.php">
                        <i class="bi bi-person-lines-fill"></i> Dokter
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="dokter.php">
                        <i class="bi bi-plus-circle-dotted"></i> Tambah Dokter
                    </a>
                </li>
            </ul>

            <!-- ADMIN (CLICK = LOGOUT) -->
            <a href="login.php"
               class="ms-auto admin-info"
               onclick="return confirm('Keluar dari aplikasi?')">
                <i class="bi bi-person-circle"></i>
                <span>Admin</span>
            </a>

        </div>
    </div>
</nav>

