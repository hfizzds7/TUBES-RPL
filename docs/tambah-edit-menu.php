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
    <title>Daftar Menu</title>
    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->
    <!--begin::Primary Meta Tags-->
    <meta name="title" content="Daftar Menu" />
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
    <link href="../css/styles.css" rel="stylesheet" />
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
            <!-- <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li> -->
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
                        Angga Setiawan
                        <span class="float-end fs-7 text-danger"
                          ><i class="bi bi-star-fill"></i
                        ></span>
                      </h3>
                      <p class="fs-7">Saya Pesan Chicken Karage nya 1 Porsi</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 30 Minutes Ago
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
                        Lukman Sardi
                        <span class="float-end fs-7 text-secondary">
                          <i class="bi bi-star-fill"></i>
                        </span>
                      </h3>
                      <p class="fs-7">Mas, Saya Pesan Kwetiau dan Nasgor Seafood di Takeway ya!</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 30 Minutes Ago
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
                        Indah Sulistiawati
                        <span class="float-end fs-7 text-warning">
                          <i class="bi bi-star-fill"></i>
                        </span>
                      </h3>
                      <p class="fs-7">Mas saya pengen Ayam Taliwang nya 1 sama Es Doger di take way!</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 15 Minutes Ago
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
                <!--end::Menu Body-->
                <!--begin::Menu Footer-->
                <!-- <li class="user-footer"> -->
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
              <div class="col-sm-6"><h3 class="mb-0">Daftar Menu</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="../admin1.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Menu</li>
                </ol>
              </div>
            </div>
            <!-- makanan-->
            <section class="py-5" id="menu-makanan">
            <div class="container px-4 px-lg-5 mt-5">
                <p></p>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                    <div class="col mb-5" id="menu-item-1">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="../assets/img/nasi-goreng-biasa.jpg" alt="Nasi Goreng Spesial" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Nasi Goreng Spesial</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">Rp.17.000</span>
                                    <span class="menu-price">Rp.10.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="1" data-menu-nama="Nasi Goreng Spesial" data-menu-harga="10000" data-menu-status="tersedia" data-menu-image="../assets/img/nasi-goreng-biasa.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-2">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/nasi-goreng-ati.jpg" alt="Nasi Goreng Ati" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Nasi Goreng Ati</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.15.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="2" data-menu-nama="Nasi Goreng Ati" data-menu-harga="15000" data-menu-status="tersedia" data-menu-image="../assets/img/nasi-goreng-ati.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/nasi-goreng-sosis.jpg" alt="Nasi Goreng Sosis" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Nasi Goreng Sosis</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.12.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="3" data-menu-nama="Nasi Goreng Sosis" data-menu-harga="12000" data-menu-status="tersedia" data-menu-image="../assets/img/nasi-goreng-sosis.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-4">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="../assets/img/nasi-goreng-seafood.jpg" alt="Nasi Goreng Seafood" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Nasi Goreng Seafood</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">Rp.18.000</span>
                                    <span class="menu-price">Rp.16.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="4" data-menu-nama="Nasi Goreng Seafood" data-menu-harga="16000" data-menu-status="tersedia" data-menu-image="../assets/img/nasi-goreng-seafood.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/nasi-goreng-kornet.jpg" alt="Nasi Goreng Kornet" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Nasi Goreng Kornet</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.14.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="5" data-menu-nama="Nasi Goreng Kornet" data-menu-harga="14000" data-menu-status="tersedia" data-menu-image="../assets/img/nasi-goreng-kornet.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-6">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="../assets/img/chicken-katsu.jpg" alt="Chicken Katsu" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Chicken Katsu</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">Rp.22.000</span>
                                    <span class="menu-price">Rp.18.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="6" data-menu-nama="Chicken Katsu" data-menu-harga="18000" data-menu-status="tersedia" data-menu-image="../assets/img/chicken-katsu.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-7">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="../assets/img/chicken-karage.jpg" alt="Chicken Karage" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Chicken Karage</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.20.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="7" data-menu-nama="Chicken Karage" data-menu-harga="20000" data-menu-status="tersedia" data-menu-image="../assets/img/chicken-karage.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-8">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/rawon.jpg" alt="Rawon" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Rawon</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.15.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="8" data-menu-nama="Rawon" data-menu-harga="15000" data-menu-status="tersedia" data-menu-image="../assets/img/rawon.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-9">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/ayam-serundeng.jpg" alt="Ayam Serundeng" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Ayam Serundeng</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">Rp.25.000</span>
                                    <span class="menu-price">Rp.21.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="9" data-menu-nama="Ayam Serundeng" data-menu-harga="21000" data-menu-status="tersedia" data-menu-image="../assets/img/ayam-serundeng.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-10">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="../assets/img/ayam-taliwang.jpg" alt="Ayam Taliwang" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Ayam Taliwang</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.25.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="10" data-menu-nama="Ayam Taliwang" data-menu-harga="25000" data-menu-status="tersedia" data-menu-image="../assets/img/ayam-taliwang.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-11">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/bebek-bakar.jpg" alt="Bebek Bakar" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Bebek Bakar</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.22.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="11" data-menu-nama="Bebek Bakar" data-menu-harga="22000" data-menu-status="tersedia" data-menu-image="../assets/img/bebek-bakar.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-12">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/kwetiau.jpg" alt="Kwetiau" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Kwetiau</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.16.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="12" data-menu-nama="Kwetiau" data-menu-harga="16000" data-menu-status="tersedia" data-menu-image="../assets/img/kwetiau.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-13">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/kwetiau-kuah.jpg" alt="Kwetiau Kuah" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Kwetiau Kuah</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.18.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="13" data-menu-nama="Kwetiau Kuah" data-menu-harga="18000" data-menu-status="tersedia" data-menu-image="../assets/img/kwetiau-kuah.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-14">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/lontong-sayur.jpg" alt="Lontong Sayur" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Lontong Sayur</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.20.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="14" data-menu-nama="Lontong Sayur" data-menu-harga="20000" data-menu-status="tersedia" data-menu-image="../assets/img/lontong-sayur.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-15">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/omlet.jpg" alt="Omlet" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Omlet</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.17.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="15" data-menu-nama="Omlet" data-menu-harga="17000" data-menu-status="tersedia" data-menu-image="../assets/img/omlet.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-16">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="../assets/img/semur-sapi.jpg" alt="Semur Sapi" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Semur Sapi</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">Rp.25.000</span>
                                    <span class="menu-price">Rp.22.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="16" data-menu-nama="Semur Sapi" data-menu-harga="22000" data-menu-status="tersedia" data-menu-image="../assets/img/semur-sapi.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-17">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/cappuccino.jpg" alt="Cappuccino" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Cappuccino</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.22.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="17" data-menu-nama="Cappuccino" data-menu-harga="22000" data-menu-status="tersedia" data-menu-image="../assets/img/cappuccino.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-18">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="../assets/img/coffee-latte.jpg" alt="Coffee Latte" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Coffee Latte</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">Rp.25.000</span>
                                    <span class="menu-price">Rp.23.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="18" data-menu-nama="Coffee Latte" data-menu-harga="23000" data-menu-status="tersedia" data-menu-image="../assets/img/coffee-latte.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-19">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/es-cendol.jpg" alt="Es Cendol" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Es Cendol</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.16.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="19" data-menu-nama="Es Cendol" data-menu-harga="16000" data-menu-status="tersedia" data-menu-image="../assets/img/es-cendol.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-20">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/es-cincau.jpg" alt="Es Cincau" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Es Cincau</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.14.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="20" data-menu-nama="Es Cincau" data-menu-harga="14000" data-menu-status="tersedia" data-menu-image="../assets/img/es-cincau.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-21">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/es-doger.jpg" alt="Es Doger" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Es Doger</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.18.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="21" data-menu-nama="Es Doger" data-menu-harga="18000" data-menu-status="tersedia" data-menu-image="../assets/img/es-doger.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-22">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/es-goyobod.jpg" alt="Es Goyobod" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Es Goyobod</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.15.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="22" data-menu-nama="Es Goyobod" data-menu-harga="15000" data-menu-status="tersedia" data-menu-image="../assets/img/es-goyobod.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-23">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="../assets/img/es-teler.jpg" alt="Es Teler" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Es Teler</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.19.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="23" data-menu-nama="Es Teler" data-menu-harga="19000" data-menu-status="tersedia" data-menu-image="../assets/img/es-teler.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-24">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="../assets/img/jus-alpukat.jpg" alt="Jus Alpukat" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Jus Alpukat</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.18.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="24" data-menu-nama="Jus Alpukat" data-menu-harga="18000" data-menu-status="tersedia" data-menu-image="../assets/img/jus-alpukat.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-25">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/jus-mangga.jpg" alt="Jus Mangga" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Jus Mangga</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.17.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="25" data-menu-nama="Jus Mangga" data-menu-harga="17000" data-menu-status="tersedia" data-menu-image="../assets/img/jus-mangga.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-26">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/jus-pisang.jpg" alt="Jus Pisang" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Jus Pisang</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.15.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="26" data-menu-nama="Jus Pisang" data-menu-harga="15000" data-menu-status="tersedia" data-menu-image="../assets/img/jus-pisang.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-27">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="../assets/img/jus-stroberi.jpg" alt="Jus Strawberry" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">jus Strawberry</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.19.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="27" data-menu-nama="Jus Strawberry" data-menu-harga="19000" data-menu-status="tersedia" data-menu-image="../assets/img/jus-stroberi.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-28">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="../assets/img/milkshake.jpg" alt="Milkshake Cream" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Milkshake Cream</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.22.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="28" data-menu-nama="Milkshake Cream" data-menu-harga="22000" data-menu-status="tersedia" data-menu-image="../assets/img/milkshake.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-29">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/susu-cokelat.jpg" alt="Susu Cokelat" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Susu Cokelat</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.16.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="29" data-menu-nama="Susu Cokelat" data-menu-harga="16000" data-menu-status="tersedia" data-menu-image="../assets/img/susu-cokelat.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-30">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/teh-tarik.jpg" alt="Teh Tarik" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Teh Tarik</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.18.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="30" data-menu-nama="Teh Tarik" data-menu-harga="18000" data-menu-status="tersedia" data-menu-image="../assets/img/teh-tarik.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-5" id="menu-item-31">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/teh.jpg" alt="Teh Manis" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Teh Manis</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="menu-price">Rp.14.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalEditMenu" 
                                data-menu-id="31" data-menu-nama="Teh Manis" data-menu-harga="14000" data-menu-status="tersedia" data-menu-image="../assets/img/teh.jpg">Edit Menu</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

            <!-- MODAL TAMBAH MENU -->
            <div class="modal fade" id="modalTambahMenu" tabindex="-1" aria-labelledby="modalTambahMenuLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <form>
                          <div class="modal-header">
                              <h5 class="modal-title" id="modalTambahMenuLabel">Tambah Menu Baru</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <div class="mb-3">
                                  <label for="namaMenu" class="form-label">Nama Menu</label>
                                  <input type="text" class="form-control" id="namaMenu" required>
                              </div>
                              <div class="mb-3">
                                  <label for="hargaMenu" class="form-label">Harga</label>
                                  <input type="number" class="form-control" id="hargaMenu" required>
                              </div>
                              <div class="mb-3">
                                  <label for="gambarMenu" class="form-label">Gambar</label>
                                  <input type="file" class="form-control" id="gambarMenu">
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Simpan Menu</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>

          <div class="modal fade" id="modalEditMenu" tabindex="-1" aria-labelledby="modalEditMenuLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header bg-primary text-white">
                          <h5 class="modal-title" id="modalEditMenuLabel"><i class="bi bi-pencil-square me-2"></i>Edit Menu</h5>
                          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form id="editMenuForm">
                          <div class="modal-body">
                              <input type="hidden" id="editMenuId" name="id_menu">
                              
                              <div class="mb-3 text-center">
                                  <label class="form-label d-block fw-bold mb-2">Pratinjau Gambar</label>
                                  <img id="editImagePreview" src="" class="img-fluid rounded border p-2" style="max-height: 150px;" alt="Pratinjau gambar">
                              </div>

                              <div class="mb-3">
                                  <label for="editNamaMenu" class="form-label fw-bold">Nama Menu</label>
                                  <input type="text" class="form-control" id="editNamaMenu" required>
                              </div>
                              <div class="mb-3">
                                  <label for="editHargaMenu" class="form-label fw-bold">Harga (Rp)</label>
                                  <input type="number" class="form-control" id="editHargaMenu" required>
                              </div>
                              <div class="mb-3">
                                  <label for="editStatusMenu" class="form-label fw-bold">Status Ketersediaan</label>
                                  <select class="form-select" id="editStatusMenu" required>
                                      <option value="tersedia">Tersedia</option>
                                      <option value="tidak-tersedia">Tidak Tersedia</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                  <label for="editGambarMenu" class="form-label fw-bold">Ganti Gambar</label>
                                  <input type="file" class="form-control" id="editGambarMenu" accept="image/*">
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                              <button type="submit" class="btn btn-success"><i class="bi bi-save me-2"></i>Simpan Perubahan</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <!-- <div class="float-end d-none d-sm-inline">Anything you want</div> -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

      document.addEventListener('DOMContentLoaded', function () {
        var modalEditMenu = document.getElementById('modalEditMenu');
        modalEditMenu.addEventListener('show.bs.modal', function (event) {
            // Tombol yang memicu modal
            var button = event.relatedTarget;
            
            // Ambil data dari atribut data-*
            var menuId = button.getAttribute('data-menu-id');
            var menuNama = button.getAttribute('data-menu-nama');
            var menuHarga = button.getAttribute('data-menu-harga');
            var menuStatus = button.getAttribute('data-menu-status');
            
            // Isi input modal dengan data yang diambil
            var modalInputId = modalEditMenu.querySelector('#editMenuId');
            var modalInputNama = modalEditMenu.querySelector('#editNamaMenu');
            var modalInputHarga = modalEditMenu.querySelector('#editHargaMenu');
            var modalInputStatus = modalEditMenu.querySelector('#editStatusMenu');
            
            modalInputId.value = menuId;
            modalInputNama.value = menuNama;
            modalInputHarga.value = menuHarga;
            modalInputStatus.value = menuStatus;
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        // Ambil elemen modal
        var modalEditMenu = document.getElementById('modalEditMenu');
        var editMenuForm = document.getElementById('editMenuForm');

        // Mendengarkan event saat modal terbuka
        modalEditMenu.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var menuId = button.getAttribute('data-menu-id');
            var menuNama = button.getAttribute('data-menu-nama');
            var menuHarga = button.getAttribute('data-menu-harga');
            var menuStatus = button.getAttribute('data-menu-status');
            var menuImage = button.getAttribute('data-menu-image');
            
            var modalInputId = modalEditMenu.querySelector('#editMenuId');
            var modalInputNama = modalEditMenu.querySelector('#editNamaMenu');
            var modalInputHarga = modalEditMenu.querySelector('#editHargaMenu');
            var modalInputStatus = modalEditMenu.querySelector('#editStatusMenu');
            var modalImagePreview = modalEditMenu.querySelector('#editImagePreview');
            
            modalInputId.value = menuId;
            modalInputNama.value = menuNama;
            modalInputHarga.value = menuHarga;
            modalInputStatus.value = menuStatus;
            modalImagePreview.src = menuImage;
        });

        // Mendengarkan event saat formulir disubmit
        editMenuForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Mencegah form untuk refresh halaman

            // Ambil data yang diubah dari form
            const menuId = document.getElementById('editMenuId').value;
            const newNama = document.getElementById('editNamaMenu').value;
            const newHarga = document.getElementById('editHargaMenu').value;
            const newStatus = document.getElementById('editStatusMenu').value;
            const newImageFile = document.getElementById('editGambarMenu').files[0];

            // Dapatkan elemen kartu menu yang akan diperbarui
            const menuItem = document.getElementById('menu-item-' + menuId);

            if (menuItem) {
                // Perbarui nama menu
                menuItem.querySelector('.fw-bolder').textContent = newNama;

                // Perbarui harga menu
                const priceElement = menuItem.querySelector('.menu-price');
                priceElement.textContent = 'Rp.' + newHarga.toLocaleString('id-ID');

                // Perbarui data-atribut pada tombol edit agar modal selanjutnya menampilkan data terbaru
                const editButton = menuItem.querySelector('button[data-bs-target="#modalEditMenu"]');
                editButton.setAttribute('data-menu-nama', newNama);
                editButton.setAttribute('data-menu-harga', newHarga);
                editButton.setAttribute('data-menu-status', newStatus);

                // Perbarui gambar jika ada file baru yang diunggah
                if (newImageFile) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        menuItem.querySelector('.card-img-top').src = e.target.result;
                        editButton.setAttribute('data-menu-image', e.target.result);
                    };
                    reader.readAsDataURL(newImageFile);
                }

                // Perbarui status ketersediaan (jika diperlukan)
                // Ini bisa disesuaikan dengan logika bisnis Anda (misal: tampilkan badge "Tidak Tersedia")
                if (newStatus === 'tidak-tersedia') {
                    // Tambahkan indikator tidak tersedia, contoh:
                    menuItem.classList.add('bg-secondary', 'text-muted');
                } else {
                    menuItem.classList.remove('bg-secondary', 'text-muted');
                }
            }

            // Tutup modal setelah perubahan disimpan
            const modalInstance = bootstrap.Modal.getInstance(modalEditMenu);
            modalInstance.hide();
        });
    });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
