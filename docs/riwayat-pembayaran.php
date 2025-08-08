  <?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
    <!--begin::Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>SajiOne Admin Dashboard</title>
        <!--begin::Accessibility Meta Tags-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
        <meta name="color-scheme" content="light dark" />
        <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
        <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
        <!--end::Accessibility Meta Tags-->
        <!--begin::Primary Meta Tags-->
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
        <!--end::Primary Meta Tags-->
        <!--begin::Accessibility Features-->
        <!-- Skip links will be dynamically added by accessibility.js -->
        <meta name="supported-color-schemes" content="light dark" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
        <link rel="preload" href="../css/adminlte.css" as="style" />
        <!--end::Accessibility Features-->
        <!--begin::Fonts-->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
        crossorigin="anonymous"
        media="print"
        onload="this.media='all'"
        />
        <!--end::Fonts-->
        <!--begin::Third Party Plugin(OverlayScrollbars)-->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
        crossorigin="anonymous"
        />
        <!--end::Third Party Plugin(OverlayScrollbars)-->
        <!--begin::Third Party Plugin(Bootstrap Icons)-->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous"
        />
        <!--end::Third Party Plugin(Bootstrap Icons)-->
        <!--begin::Required Plugin(AdminLTE)-->
        <link rel="stylesheet" href="../css/adminlte.css" />
        <!--end::Required Plugin(AdminLTE)-->
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
        <!--begin::App Wrapper-->
        <div class="app-wrapper">
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
                </li>
                <!-- <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li> -->
                <!-- <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li> -->
            </ul>
            <!--end::Start Navbar Links-->
            <!--begin::End Navbar Links-->
            <ul class="navbar-nav ms-auto">
                <!--begin::Navbar Search-->
                <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="bi bi-search"></i>
                </a>
                </li>
                <!--end::Navbar Search-->
                <!--begin::Messages Dropdown Menu-->
                <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-chat-text"></i>
                    <span class="navbar-badge badge text-bg-danger">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <a href="#" class="dropdown-item">
                    <!--begin::Message-->
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
                    <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <!--begin::Message-->
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
                    <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <!--begin::Message-->
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
                    <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
                </li>
                <!--end::Messages Dropdown Menu-->
                <!--begin::Notifications Dropdown Menu-->
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
                <!--end::Notifications Dropdown Menu-->
                <!--begin::Fullscreen Toggle-->
                <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                </a>
                </li>
                <!--end::Fullscreen Toggle-->
                <!--begin::User Menu Dropdown-->
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
                    <!--end::User Image-->
                    <!--begin::Menu Body-->
                    <!-- <li class="user-body"> -->
                    <!--begin::Row-->
                    <!-- <div class="row">
                        <div class="col-4 text-center"><a href="#">Followers</a></div>
                        <div class="col-4 text-center"><a href="#">Sales</a></div>
                        <div class="col-4 text-center"><a href="#">Friends</a></div>
                    </div> -->
                    <!--end::Row-->
                    </li>
                    <!--end::Menu Body-->
                    <!--begin::Menu Footer-->
                    <!-- <li class="user-footer"> -->
                    <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                    <!-- <a href="../profile-admin.php" class="btn btn-default btn-flat float-end">Profile</a> -->
                    <!-- </li> -->
                    <!--end::Menu Footer-->
                </ul>
                </li>
                <!--end::User Menu Dropdown-->
            </ul>
            <!--end::End Navbar Links-->
            </div>
            <!--end::Container-->
        </nav>
        <!--end::Header-->
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <!--begin::Sidebar Brand-->
            <div class="sidebar-brand">
            <!--begin::Brand Link-->
            <a href="../admin1.php" class="brand-link">
                <!--begin::Brand Image-->
                <img
                src="../assets/img/SajiOne.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"/>
                <!--end::Brand Image-->
                <!--begin::Brand Text-->
                <span class="brand-text fw-light">SajiOne Admin</span>
                <!--end::Brand Text-->
            </a>
            <!--end::Brand Link-->
            </div>
            <!--end::Sidebar Brand-->
            <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
            <nav class="mt-2">
                <!--begin::Sidebar Menu-->
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
                        <a href="../.php" class="nav-link active">
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
                <!-- <li class="nav-item">
                    <a href="./generate/theme.php" class="nav-link">
                    <i class="nav-icon bi bi-palette"></i>
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Theme Generate</p>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-box-seam-fill"></i>
                    <p>
                        Widgets
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="./widgets/small-box.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Small Box</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./widgets/info-box.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>info Box</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./widgets/cards.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Cards</p>
                        </a>
                    </li>
                    </ul>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-clipboard-fill"></i>
                    <p>
                        Layout Options
                        <span class="nav-badge badge text-bg-secondary me-3">6</span>
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../layout/unfixed-sidebar.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Default Sidebar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../layout/fixed-sidebar.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Fixed Sidebar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../layout/fixed-header.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Fixed Header</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../layout/fixed-footer.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Fixed Footer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../layout/fixed-complete.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Fixed Complete</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../layout/layout-custom-area.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Layout <small>+ Custom Area </small></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../layout/sidebar-mini.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Sidebar Mini</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../layout/collapsed-sidebar.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Sidebar Mini <small>+ Collapsed</small></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../layout/logo-switch.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Sidebar Mini <small>+ Logo Switch</small></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../layout/layout-rtl.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Layout RTL</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-tree-fill"></i>
                    <p>
                        UI Elements
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../UI/general.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>General</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../UI/icons.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Icons</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../UI/timeline.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Timeline</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-pencil-square"></i>
                    <p>
                        Forms
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../forms/general.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>General Elements</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-table"></i>
                    <p>
                        Tables
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../tables/simple.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Simple Tables</p>
                        </a>
                    </li>
                    </ul>
                </li> -->
                <!-- <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-box-arrow-in-right"></i>
                    <p>
                        Auth
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Version 1
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./examples/login.php" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./examples/register.php" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Register</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Version 2
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./examples/login-v2.php" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./examples/register-v2.php" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Register</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="./examples/lockscreen.php" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Lockscreen</p>
                        </a>
                    </li>
                    </ul>
                </li> -->
                <li class="nav-header">MENU MAKANAN</li>
                <li class="nav-item">
                    <a href="../docs/introduction.php" class="nav-link">
                    <i class="nav-icon bi bi-grip-horizontal"></i>
                    <!-- <i class="nav-icon bi bi-circle"></i>  -->
                    <p>Daftar Menu</p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="../docs/harga-promo.php" class="nav-link">
                    <i class="nav-icon bi bi-patch-check-fill"></i>
                    <p>Harga & Promo</p>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="../docs/stok-bahan-menu.php" class="nav-link">
                    <i class="nav-icon bi bi-star-half"></i>
                    <p>Stok Bahan Menu</p>
                    </a>
                </li> -->
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
                    <a href="../docs/jadwal-reservasi.php" class="nav-link">
                    <i class="nav-icon bi bi-clipboard-fill"></i>
                    <p>Jadwal Reservasi</p>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="../docs/status-meja.php" class="nav-link">
                    <i class="nav-icon bi bi-pencil-square"></i>
                    <p>Status Meja</p>
                    </a>
                </li> -->
                

                <!-- <li class="nav-header">TRANSAKSI</li> -->
                <!-- <li class="nav-item">
                    <a href="../docs/data-pelanggan.php" class="nav-link">
                    <i class="nav-icon bi bi-tree-fill"></i>
                    <p>Data Pelanggan</p>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="../docs/riwayat-transaksi.php" class="nav-link">
                    <i class="nav-icon bi bi-clipboard-fill"></i>
                    <p>Riwayat Transaksi</p>
                    </a>
                </li> -->


                <li class="nav-header">KARYAWAN</li>
                <li class="nav-item">
                    <a href="../docs/daftar-karyawan.php" class="nav-link">
                    <i class="nav-icon bi bi-tree-fill"></i>
                    <p>Data Karyawan</p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="../docs/jadwal-kerja.php" class="nav-link">
                    <i class="nav-icon bi bi-table"></i>
                    <p>Jadwal Kerja</p>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="../docs/presensi-kehadiran.php" class="nav-link">
                    <i class="nav-icon bi bi-pencil-square"></i>
                    <p>Presensi / Kehadiran</p>
                    </a>
                </li> -->


                <!-- <li class="nav-header">PEMBAYARAN</li> -->
                <!-- <li class="nav-item">
                    <a href="../docs/metode-pembayaran.php" class="nav-link">
                    <i class="nav-icon bi bi-question-circle-fill"></i>
                    <p>Metode Pembayaran</p>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="../docs/riwayat-pembayaran.php" class="nav-link">
                    <i class="nav-icon bi bi-table"></i>
                    <p>Riwayat Pembayaran</p>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="../docs/laporan-harian-bulanan.php" class="nav-link">
                    <i class="nav-icon bi bi-clipboard-fill"></i>
                    <p>Laporan Harian/bulanan</p>
                    </a>
                </li> -->
                

                <!-- <li class="nav-header">SUPPLIER</li>
                <li class="nav-item">
                    <a href="../docs/daftar-supplier.php" class="nav-link">
                    <i class="nav-icon bi bi-download"></i>
                    <p>Daftar Supplier</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../docs/stok-masuk.php" class="nav-link">
                    <i class="nav-icon bi bi-patch-check-fill"></i>
                    <p>Stok Masuk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../docs/riwayat-pembelian-barang.php" class="nav-link">
                    <i class="nav-icon bi bi-clipboard-fill"></i>
                    <p>Riwayat Pembelian Barang</p>
                    </a>
                </li> -->
                

                <!-- <li class="nav-header">LAPORAN</li>
                <li class="nav-item">
                    <a href="../docs/laporan-penjualan.php" class="nav-link">
                    <i class="nav-icon bi bi-clipboard-fill"></i>
                    <p>Laporan Penjualan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../docs/laporan-keuangan.php" class="nav-link">
                    <i class="nav-icon bi bi-clipboard-fill"></i>
                    <p>Laporan Keuangan</p>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="../docs/laporan-stock.php" class="nav-link">
                    <i class="nav-icon bi bi-clipboard-fill"></i>
                    <p>Laporan Stok</p>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="../docs/feedback-ulasan.php" class="nav-link">
                    <i class="nav-icon bi bi-star-half"></i>
                    <p>Feedback & Ulasan</p>
                    </a>
                </li> -->
                

                <!-- <li class="nav-header">PENGATURAN</li>
                <li class="nav-item">
                    <a href="../docs/profil-restoran.php" class="nav-link">
                    <i class="nav-icon bi bi-circle-fill"></i>
                    <p>Profil Restoran</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../docs/jam-operasional.php" class="nav-link">
                    <i class="nav-icon bi bi-circle-fill"></i>
                    <p>Jam Operasional</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../docs/admin-manajemen.php" class="nav-link">
                    <i class="nav-icon bi bi-circle-fill"></i>
                    <p>Admin Management</p>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="../docs/tampilan-tema.php" class="nav-link">
                    <i class="nav-icon bi bi-circle-fill"></i>
                    <p>Tampilan Tema</p>
                    </a>
                </li> -->
                <li class="nav-header">AKUN</li>
                <li class="nav-item">
                    <a href="../login.php" class="nav-link">
                    <i class="nav-icon bi bi-circle-fill"></i>
                    <p>LOG OUT</p>
                    </a>
                </li>
                </ul>
                <!--end::Sidebar Menu-->
            </nav>
            </div>
            <!--end::Sidebar Wrapper-->
        </aside>
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Riwayat Pembayaran</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">General Form</li>
                    </ol>
                </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <!-- <h2>Riwayat Pembayaran</h2> -->
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
            <!--end::Container-->
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->
        <footer class="app-footer">
            <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline">Anything you want</div>
            <!--end::To the end-->
            <!--begin::Copyright-->
            <strong>
            <strong>
            2025&nbsp;
            <a href="https://Sajione.resto" class="text-decoration-none">sajione.resto</a>
            </strong>
            
        </footer>
        
        <!--end::Footer-->
        </div>
        <!--end::App Wrapper-->
        <!--begin::Script-->
        <!--begin::Third Party Plugin(OverlayScrollbars)-->
        <script
        src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
        crossorigin="anonymous"
        ></script>
        <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
        <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        crossorigin="anonymous"
        ></script>
        <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        crossorigin="anonymous"
        ></script>
        <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
        <script src="../js/adminlte.js"></script>
        <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
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
        <!--end::OverlayScrollbars Configure-->
        <!--end::Script-->
    </body>
    <!--end::Body-->
</html>
