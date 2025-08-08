<?php
// PHP LOGIC DI BAGIAN ATAS
// Pastikan file koneksi ada di jalur yang benar
include '../conn.php'; 

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}


// Memastikan koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Inisialisasi variabel filter
$filter_meja = isset($_GET['meja']) ? $_GET['meja'] : '';
$filter_tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : '';

// Query dasar untuk mengambil semua data pesanan
$query = "SELECT * FROM pesanan";

// Array untuk menyimpan kondisi WHERE
$conditions = [];

// Menambahkan filter jika nomor meja dipilih
if (!empty($filter_meja)) {
    $conditions[] = "id_meja = '" . mysqli_real_escape_string($conn, $filter_meja) . "'";
}

// Menambahkan filter jika tanggal dipilih
if (!empty($filter_tanggal)) {
    $conditions[] = "DATE(tanggal) = '" . mysqli_real_escape_string($conn, $filter_tanggal) . "'";
}

// Gabungkan kondisi ke dalam query
if (!empty($conditions)) {
    $query .= " WHERE " . implode(' AND ', $conditions);
}

// Jalankan query
$result = mysqli_query($conn, $query);

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
                      src="./assets/img/profile.jpg"
                      class="rounded-circle shadow"
                      alt="User Image"
                    />
                    <p>
                      <?php echo $_SESSION['nama_lengkap']; ?> - Admin 1
                      <small>Admin Sejak Juli 01 2025</small>
                    </p>
                  </li>
                </ul>
            </div>
            </nav>
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <div class="sidebar-brand">
            <a href="../admin1.php" class="brand-link">
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
                <li class="nav-header">RESERVASI MEJA</li>
                <li class="nav-item">
                    <a href="../docs/daftar-meja.php" class="nav-link">
                    <i class="nav-icon bi bi-grip-horizontal"></i>
                    <p>Daftar Meja</p>
                    </a>
                </li>
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
                    <h2>📦 Dashboard Pesanan Masuk</h2>
                    <a href="../admin1.php" class="btn btn-outline-primary">← Kembali ke Dashboard</a>
                </div>

                <form class="row g-3 mb-4" method="get">
                    <!-- <div class="col-md-3">
                        <label for="tanggal" class="form-label">Filter Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= htmlspecialchars($filter_tanggal) ?>">
                    </div> -->
                    <div class="col-md-3">
                        <label for="meja" class="form-label">Filter ID Meja</label>
                        <input type="text" class="form-control" name="meja" id="meja" value="<?= htmlspecialchars($filter_meja) ?>">
                    </div>
                    <div class="col-md-3 align-self-end">
                        <button type="submit" class="btn btn-primary">Terapkan Filter</button>
                        <a href="pesanan-masuk.php" class="btn btn-secondary">Reset</a>
                    </div>
                </form>

                <div class="card shadow">
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID Pesanan</th>
                                    <th>Nama Menu</th>
                                    <th>No Meja</th>
                                    <th>No Menu</th>
                                    <th>Jumlah</th>
                                    <th>Catatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (mysqli_num_rows($result) > 0) : ?>
                                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row['id_pesanan']) ?></td>
                                             <td><?= htmlspecialchars($row['nama_menu']) ?></td>
                                            <td><?= htmlspecialchars($row['no_meja']) ?></td>
                                            <td><?= htmlspecialchars($row['no_menu']) ?></td>
                                            <td><?= htmlspecialchars($row['jumlah']) ?></td>
                                            <td><?= htmlspecialchars($row['catatan']) ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="5" class="text-center">Tidak ada pesanan yang sesuai filter.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
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
        });
        </script>
        </body>
    </html>
<?php
// PHP LOGIC DI BAGIAN BAWAH
// Pastikan semua operasi database selesai sebelum menutup koneksi.
mysqli_close($conn);
?>