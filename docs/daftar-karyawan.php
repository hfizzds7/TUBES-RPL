<?php
// File: docs/daftar-karyawan.php

include '../conn.php';

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// === Logika HAPUS Karyawan ===
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["hapus_user"])) {
    $id_user_to_delete = $_POST["id_user_to_delete"];
    $query_delete = "DELETE FROM users WHERE id_user = ?";
    $stmt = mysqli_prepare($conn, $query_delete);
    mysqli_stmt_bind_param($stmt, "i", $id_user_to_delete);
    
    if (mysqli_stmt_execute($stmt)) {
        header("Location: daftar-karyawan.php?status=deleted");
        exit();
    } else {
        echo "<script>alert('Gagal menghapus data karyawan.');</script>";
    }
    mysqli_stmt_close($stmt);
}

// === Logika EDIT Karyawan ===
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["edit_user"])) {
    $id_user = $_POST["editUserId"];
    $nama_lengkap = $_POST["editNamaLengkap"];
    $role = $_POST["editRole"];

    $query_update = "UPDATE users SET nama_lengkap = ?, role = ? WHERE id_user = ?";
    $stmt = mysqli_prepare($conn, $query_update);
    mysqli_stmt_bind_param($stmt, "ssi", $nama_lengkap, $role, $id_user);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: daftar-karyawan.php?status=updated");
        exit();
    } else {
        echo "<script>alert('Gagal memperbarui data karyawan.');</script>";
    }
    mysqli_stmt_close($stmt);
}

// Mengambil data karyawan dari tabel 'users'
$query_users = "SELECT id_user, nama_lengkap, role FROM users";
$result_users = mysqli_query($conn, $query_users);
?>


<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SajiOne Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <meta name="title" content="AdminLTE 4 | General Form Elements" />
    <meta name="author" content="ColorlibHQ" />
    <meta
        name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS. Fully accessible with WCAG 2.1 AA compliance."
    />
    <meta
        name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant"
    />
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <link rel="preload" href="../css/adminlte.css" as="style" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
        crossorigin="anonymous"
        media="print"
        onload="this.media='all'"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/adminlte.css" />
    </head>
<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <div class="app-wrapper">
        <nav class="app-header navbar navbar-expand bg-body">
            <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="bi bi-search"></i>
                </a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-chat-text"></i>
                    <span class="navbar-badge badge text-bg-danger">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <a href="#" class="dropdown-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                        <img
                            src="../assets/img/user1-128x128.jpg"
                            alt="User Avatar"
                            class="img-size-50 rounded-circle me-3"
                        />
                        </div>
                        <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-end fs-7 text-danger"
                            ><i class="bi bi-star-fill"></i
                            ></span>
                        </h3>
                        <p class="fs-7">Call me whenever you can...</p>
                        <p class="fs-7 text-secondary">
                            <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                        </p>
                        </div>
                    </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                        <img
                            src="../assets/img/user8-128x128.jpg"
                            alt="User Avatar"
                            class="img-size-50 rounded-circle me-3"
                        />
                        </div>
                        <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                            John Pierce
                            <span class="float-end fs-7 text-secondary">
                            <i class="bi bi-star-fill"></i>
                            </span>
                        </h3>
                        <p class="fs-7">I got your message bro</p>
                        <p class="fs-7 text-secondary">
                            <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                        </p>
                        </div>
                    </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                        <img
                            src="../assets/img/user3-128x128.jpg"
                            alt="User Avatar"
                            class="img-size-50 rounded-circle me-3"
                        />
                        </div>
                        <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-end fs-7 text-warning">
                            <i class="bi bi-star-fill"></i>
                            </span>
                        </h3>
                        <p class="fs-7">The subject goes here</p>
                        <p class="fs-7 text-secondary">
                            <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                        </p>
                        </div>
                    </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-bell-fill"></i>
                    <span class="navbar-badge badge text-bg-warning">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <i class="bi bi-envelope me-2"></i> 4 new messages
                    <span class="float-end text-secondary fs-7">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <i class="bi bi-people-fill me-2"></i> 8 friend requests
                    <span class="float-end text-secondary fs-7">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                    <span class="float-end text-secondary fs-7">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                </a>
                </li>
                <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img
                    src="../assets/img/profile.jpg"
                    class="user-image rounded-circle shadow"
                    alt="User Image"
                    />
                    <span class="d-none d-md-inline"><?php echo $_SESSION['nama_lengkap']; ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <!--begin::User Image-->
                    <li class="user-header text-bg-primary">
                    <img
                        src="../assets/img/profile.jpg"
                        class="rounded-circle shadow"
                        alt="User Image"
                    />
                    <p>
                        <?php echo $_SESSION['nama_lengkap']; ?> - <?php echo ucfirst($_SESSION['role']); ?>
                        <small>Admin Sejak Juli 01 2025</small>
                    </p>

                    </li>
                </ul>
            </div>
            </nav>
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <div class="sidebar-brand">
            <a href="./admin1.php" class="brand-link">
                <img
                src="../assets/img/SajiOne.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"/>
                <span class="brand-text fw-light">SajiOne Admin</span>
                </a>
            </div>
            <div class="sidebar-wrapper">
            <nav class="mt-2">
                <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Main navigation"
                data-accordion="false"
                id="navigation"
                >
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                    <i class="nav-icon bi bi-speedometer"></i>
                    <p>
                        Dashboard
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../admin1.php" class="nav-link active">
                        <i class="nav-icon bi bi-clipboard-fill"></i>
                        <p>Ringkasan Penjualan</p>
                        </a>
                    </li>
                    </ul>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../statistik-kunjungan.php" class="nav-link active">
                        <i class="nav-icon bi bi-table"></i>
                        <p>Statistik Kunjungan</p>
                        </a>
                    </li>
                    </ul>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../UI/timeline.php" class="nav-link active">
                        <i class="nav-icon bi bi-star-half"></i>
                        <p>Review & Rating Pelanggan</p>
                        </a>
                    </li>
                    </ul>
                </li>
                
                <li class="nav-header">MENU MAKANAN</li>
                <li class="nav-item">
                    <a href="../docs/introduction.php" class="nav-link">
                    <i class="nav-icon bi bi-grip-horizontal"></i>
                    <p>Daftar Menu</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-ui-checks-grid"></i>
                    <p>
                        Kategori Menu
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../docs/makanan.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Makanan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../docs/minuman.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Minuman</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="../docs/tambah-edit-menu.php" class="nav-link">
                    <i class="nav-icon bi bi-download"></i>
                    <p>Edit Menu</p>
                    </a>
                </li>
                
                <li class="nav-header">PESANAN</li>
                <li class="nav-item">
                    <a href="../docs/pesanan-masuk.php" class="nav-link">
                    <i class="nav-icon bi bi-download"></i>
                    <p>Pesanan Masuk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../docs/riwayat-pesanan.php" class="nav-link">
                    <i class="nav-icon bi bi-clipboard-fill"></i>
                    <p>Riwayat Pesanan</p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="../docs/status-pesanan.php" class="nav-link">
                    <i class="nav-icon bi bi-pencil-square"></i>
                    <p>Status Pemesanan</p>
                    </a>
                </li> -->
                
                <li class="nav-header">RESERVASI MEJA</li>
                <li class="nav-item">
                    <a href="../docs/daftar-meja.php" class="nav-link">
                    <i class="nav-icon bi bi-grip-horizontal"></i>
                    <p>Daftar Meja</p>
                    </a>
                </li>
                
                <!-- <li class="nav-item">
                    <a href="../docs/status-meja.php" class="nav-link">
                    <i class="nav-icon bi bi-pencil-square"></i>
                    <p>Status Meja</p>
                    </a>
                </li> -->
                
                <!-- <li class="nav-header">TRANSAKSI</li> -->
                <li class="nav-header">KARYAWAN</li>
                <li class="nav-item">
                    <a href="../docs/daftar-karyawan.php" class="nav-link">
                    <i class="nav-icon bi bi-tree-fill"></i>
                    <p>Data Karyawan</p>
                    </a>
                </li>
                
                <li class="nav-header">AKUN</li>
                <li class="nav-item">
                    <a href="../login.php" class="nav-link">
                    <i class="nav-icon bi bi-circle-fill"></i>
                    <p>LOG OUT</p>
                    </a>
                </li>
                </ul>
                </nav>
            </div>
            </aside>
        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2>👤 Daftar Karyawan</h2>
                        <a href="../admin1.php" class="btn btn-outline-primary">← Kembali ke Dashboard</a>
                    </div>
                    
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>ID User</th>
                                            <th>Nama Lengkap</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if (mysqli_num_rows($result_users) > 0) {
                                            while ($row_user = mysqli_fetch_assoc($result_users)) {
                                        ?>
                                            <tr>
                                                <td><?= htmlspecialchars($row_user['id_user']) ?></td>
                                                <td><?= htmlspecialchars($row_user['nama_lengkap']) ?></td>
                                                <td><span class="badge bg-secondary"><?= htmlspecialchars($row_user['role']) ?></span></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-info text-white me-2" 
                                                            data-bs-toggle="modal" data-bs-target="#modalEditKaryawan"
                                                            data-id="<?= htmlspecialchars($row_user['id_user']) ?>"
                                                            data-nama="<?= htmlspecialchars($row_user['nama_lengkap']) ?>"
                                                            data-role="<?= htmlspecialchars($row_user['role']) ?>">
                                                        <i class="bi bi-pencil-square"></i> Edit
                                                    </button>
                                                    
                                                    <button type="button" class="btn btn-sm btn-danger" 
                                                            data-bs-toggle="modal" data-bs-target="#modalHapusKaryawan"
                                                            data-id="<?= htmlspecialchars($row_user['id_user']) ?>"
                                                            data-nama="<?= htmlspecialchars($row_user['nama_lengkap']) ?>">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php 
                                            }
                                        } else {
                                        ?>
                                            <tr>
                                                <td colspan="4" class="text-center">Tidak ada data karyawan.</td>
                                            </tr>
                                        <?php 
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </main>
        <footer class="app-footer">
            <div class="float-end d-none d-sm-inline">Anything you want</div>
            <strong>
            <strong>
            2025&nbsp;
            <a href="https://Sajione.resto" class="text-decoration-none">sajione.resto</a>
            </strong>
            
        </footer>
        </div>
    <div class="modal fade" id="modalEditKaryawan" tabindex="-1" aria-labelledby="modalEditKaryawanLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="daftar-karyawan.php" method="POST">
                    <input type="hidden" name="edit_user" value="1">
                    <input type="hidden" id="editUserId" name="editUserId">
                    <div class="modal-header bg-info text-white">
                        <h5 class="modal-title" id="modalEditKaryawanLabel">Edit Data Karyawan</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="editNamaLengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="editNamaLengkap" name="editNamaLengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="editRole" class="form-label">Role</label>
                            <select class="form-select" id="editRole" name="editRole" required>
                                <option value="admin">Admin</option>
                                <option value="kasir">Kasir</option>
                                <option value="koki">Koki</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-info text-white">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalHapusKaryawan" tabindex="-1" aria-labelledby="modalHapusKaryawanLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="daftar-karyawan.php" method="POST">
                    <input type="hidden" name="hapus_user" value="1">
                    <input type="hidden" id="id_user_to_delete" name="id_user_to_delete">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="modalHapusKaryawanLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus karyawan **<span id="nama_user_to_delete"></span>**?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        crossorigin="anonymous"
    ></script>
    <script src="../js/adminlte.js"></script>
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }

            // JavaScript untuk Modal Edit
            var modalEditKaryawan = document.getElementById('modalEditKaryawan');
            modalEditKaryawan.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget;
                var id = button.getAttribute('data-id');
                var nama = button.getAttribute('data-nama');
                var role = button.getAttribute('data-role');

                var modalBodyInputId = modalEditKaryawan.querySelector('#editUserId');
                var modalBodyInputNama = modalEditKaryawan.querySelector('#editNamaLengkap');
                var modalBodyInputRole = modalEditKaryawan.querySelector('#editRole');

                modalBodyInputId.value = id;
                modalBodyInputNama.value = nama;
                modalBodyInputRole.value = role;
            });

            // JavaScript untuk Modal Hapus
            var modalHapusKaryawan = document.getElementById('modalHapusKaryawan');
            modalHapusKaryawan.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget;
                var id = button.getAttribute('data-id');
                var nama = button.getAttribute('data-nama');

                var modalBodyInputId = modalHapusKaryawan.querySelector('#id_user_to_delete');
                var modalBodySpanNama = modalHapusKaryawan.querySelector('#nama_user_to_delete');

                modalBodyInputId.value = id;
                modalBodySpanNama.textContent = nama;
            });
        });
    </script>
    </body>
</html>