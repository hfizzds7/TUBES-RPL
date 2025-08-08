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
    <meta name="title" content="SajiOne | Dashboard" />
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
    <link rel="preload" href="./css/adminlte.css" as="style" />
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css" crossorigin="anonymous"
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
    <link rel="stylesheet" href="./css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />
    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    />
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
                        src="./assets/img/user1-128x128.jpg"
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
                        src="./assets/img/user8-128x128.jpg"
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
                        src="./assets/img/user3-128x128.jpg"
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
                  src="./assets/img/profile.jpg"
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
                  <!-- <a href="profile-admin.php" class="btn btn-default btn-flat float-end">Profile</a> -->
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
          <a href="./admin1.php" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="./assets/img/SajiOne.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"/>
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
                    <a href="./admin1.php" class="nav-link active">
                      <i class="nav-icon bi bi-clipboard-fill"></i>
                      <p>Ringkasan Penjualan</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./statistik-kunjungan.php" class="nav-link active">
                      <i class="nav-icon bi bi-table"></i>
                      <p>Statistik Kunjungan</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./UI/timeline.php" class="nav-link active">
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
                    <a href="./layout/unfixed-sidebar.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Default Sidebar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./layout/fixed-sidebar.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Fixed Sidebar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./layout/fixed-header.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Fixed Header</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./layout/fixed-footer.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Fixed Footer</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./layout/fixed-complete.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Fixed Complete</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./layout/layout-custom-area.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Layout <small>+ Custom Area </small></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./layout/sidebar-mini.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Sidebar Mini</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./layout/collapsed-sidebar.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Sidebar Mini <small>+ Collapsed</small></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./layout/logo-switch.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Sidebar Mini <small>+ Logo Switch</small></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./layout/layout-rtl.php" class="nav-link">
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
                    <a href="./UI/general.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>General</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./UI/icons.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Icons</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./UI/timeline.php" class="nav-link">
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
                    <a href="./forms/general.php" class="nav-link">
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
                    <a href="./tables/simple.php" class="nav-link">
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
                <a href="./docs/introduction.php" class="nav-link">
                  <i class="nav-icon bi bi-grip-horizontal"></i>
                  <!-- <i class="nav-icon bi bi-circle"></i>  -->
                  <p>Daftar Menu</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="./docs/harga-promo.php" class="nav-link">
                  <i class="nav-icon bi bi-patch-check-fill"></i>
                  <p>Harga & Promo</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="./docs/stok-bahan-menu.php" class="nav-link">
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
                    <a href="./docs/makanan.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Makanan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./docs/minuman.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Minuman</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="./docs/tambah-edit-menu.php" class="nav-link">
                  <i class="nav-icon bi bi-download"></i>
                  <p>Edit Menu</p>
                </a>
              </li>             


              <li class="nav-header">PESANAN</li>
              <li class="nav-item">
                <a href="./docs/pesanan-masuk.php" class="nav-link">
                  <i class="nav-icon bi bi-download"></i>
                  <p>Pesanan Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./docs/riwayat-pesanan.php" class="nav-link">
                  <i class="nav-icon bi bi-clipboard-fill"></i>
                  <p>Riwayat Pesanan</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="./docs/status-pesanan.php" class="nav-link">
                  <i class="nav-icon bi bi-pencil-square"></i>
                  <p>Status Pemesanan</p>
                </a>
              </li> -->
              

              <li class="nav-header">RESERVASI MEJA</li>
              <li class="nav-item">
                <a href="./docs/daftar-meja.php" class="nav-link">
                  <i class="nav-icon bi bi-grip-horizontal"></i>
                  <p>Daftar Meja</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="./docs/jadwal-reservasi.php" class="nav-link">
                  <i class="nav-icon bi bi-clipboard-fill"></i>
                  <p>Jadwal Reservasi</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="./docs/status-meja.php" class="nav-link">
                  <i class="nav-icon bi bi-pencil-square"></i>
                  <p>Status Meja</p>
                </a>
              </li> -->
              

              <!-- <li class="nav-header">TRANSAKSI</li> -->
              <!-- <li class="nav-item">
                <a href="./docs/data-pelanggan.php" class="nav-link">
                  <i class="nav-icon bi bi-tree-fill"></i>
                  <p>Data Pelanggan</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="./docs/riwayat-transaksi.php" class="nav-link">
                  <i class="nav-icon bi bi-clipboard-fill"></i>
                  <p>Riwayat Transaksi</p>
                </a>
              </li> -->


              <li class="nav-header">KARYAWAN</li>
              <li class="nav-item">
                <a href="./docs/daftar-karyawan.php" class="nav-link">
                  <i class="nav-icon bi bi-tree-fill"></i>
                  <p>Data Karyawan</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="./docs/jadwal-kerja.php" class="nav-link">
                  <i class="nav-icon bi bi-table"></i>
                  <p>Jadwal Kerja</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="./docs/presensi-kehadiran.php" class="nav-link">
                  <i class="nav-icon bi bi-pencil-square"></i>
                  <p>Presensi / Kehadiran</p>
                </a>
              </li> -->


              <!-- <li class="nav-header">PEMBAYARAN</li> -->
              <!-- <li class="nav-item">
                <a href="./docs/metode-pembayaran.php" class="nav-link">
                  <i class="nav-icon bi bi-question-circle-fill"></i>
                  <p>Metode Pembayaran</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="./docs/riwayat-pembayaran.php" class="nav-link">
                  <i class="nav-icon bi bi-table"></i>
                  <p>Riwayat Pembayaran</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="./docs/laporan-harian-bulanan.php" class="nav-link">
                  <i class="nav-icon bi bi-clipboard-fill"></i>
                  <p>Laporan Harian/bulanan</p>
                </a>
              </li> -->
              

              <!-- <li class="nav-header">SUPPLIER</li>
              <li class="nav-item">
                <a href="./docs/daftar-supplier.php" class="nav-link">
                  <i class="nav-icon bi bi-download"></i>
                  <p>Daftar Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./docs/stok-masuk.php" class="nav-link">
                  <i class="nav-icon bi bi-patch-check-fill"></i>
                  <p>Stok Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./docs/riwayat-pembelian-barang.php" class="nav-link">
                  <i class="nav-icon bi bi-clipboard-fill"></i>
                  <p>Riwayat Pembelian Barang</p>
                </a>
              </li> -->
              

              <!-- <li class="nav-header">LAPORAN</li>
              <li class="nav-item">
                <a href="./docs/laporan-penjualan.php" class="nav-link">
                  <i class="nav-icon bi bi-clipboard-fill"></i>
                  <p>Laporan Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./docs/laporan-keuangan.php" class="nav-link">
                  <i class="nav-icon bi bi-clipboard-fill"></i>
                  <p>Laporan Keuangan</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="./docs/laporan-stock.php" class="nav-link">
                  <i class="nav-icon bi bi-clipboard-fill"></i>
                  <p>Laporan Stok</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./docs/feedback-ulasan.php" class="nav-link">
                  <i class="nav-icon bi bi-star-half"></i>
                  <p>Feedback & Ulasan</p>
                </a>
              </li> -->
              

              <!-- <li class="nav-header">PENGATURAN</li>
              <li class="nav-item">
                <a href="./docs/profil-restoran.php" class="nav-link">
                  <i class="nav-icon bi bi-circle-fill"></i>
                  <p>Profil Restoran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./docs/jam-operasional.php" class="nav-link">
                  <i class="nav-icon bi bi-circle-fill"></i>
                  <p>Jam Operasional</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./docs/admin-manajemen.php" class="nav-link">
                  <i class="nav-icon bi bi-circle-fill"></i>
                  <p>Admin Management</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="./docs/tampilan-tema.php" class="nav-link">
                  <i class="nav-icon bi bi-circle-fill"></i>
                  <p>Tampilan Tema</p>
                </a>
              </li> -->
              <li class="nav-header">AKUN</li>
              <li class="nav-item">
                <a href="login.php" class="nav-link">
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
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 1-->
                <div class="small-box text-bg-primary">
                  <div class="inner">
                    <h3>150</h3>
                    <p>Ringkasan Penjualan</p>
                  </div>
                  <svg
                    class="small-box-icon"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
                    <path
                      d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
                    ></path>
                  </svg>
                  <a
                    href="#"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 1-->
              </div>
              <!--end::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 2-->
                <div class="small-box text-bg-success">
                  <div class="inner">
                    <h3>53<sup class="fs-5">%</sup></h3>
                    <p>Statistik Kunjungan</p>
                  </div>
                  <svg
                    class="small-box-icon"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
                    <path
                      d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"
                    ></path>
                  </svg>
                  <a
                    href="#"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 2-->
              </div>
              <!--end::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 3-->
                <div class="small-box text-bg-warning">
                  <div class="inner">
                    <h3>44</h3>
                    <p>Review & Rating Pelanggan</p>
                  </div>
                  <svg
                    class="small-box-icon"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
                    <path
                      d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"
                    ></path>
                  </svg>
                  <a
                    href="#"
                    class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 3-->
              </div>
              <!--end::Col-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
            <div class="col-12">
                <div class="card mb-4 border-0 shadow-sm" style="height: 100%;">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="card-title m-0">📊 Statistik Kunjungan Pelanggan</h3>
                </div>
                <div class="card-body p-0" style="height: 80vh;">
                    <div id="revenue-chart" style="width: 100%; height: 100%;"></div>
                </div>
                </div>
            </div>
            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          2025&nbsp;
          <a href="https://Sajione.resto" class="text-decoration-none">sajione.resto</a>
        </strong>
        
        <!--end::Copyright-->
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
    <script src="./js/adminlte.js"></script>
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
    <!-- OPTIONAL SCRIPTS -->
    <!-- sortablejs -->
    <script
      src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
      crossorigin="anonymous"
    ></script>
    <!-- sortablejs -->
    <script>
      new Sortable(document.querySelector('.connectedSortable'), {
        group: 'shared',
        handle: '.card-header',
      });

      const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
      cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = 'move';
      });
    </script>
    <!-- apexcharts -->
    <script
    src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
    integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
    crossorigin="anonymous"
    ></script>

    <!-- ChartJS -->
    <script>
    // Chart kunjungan pelanggan (30 Juli - 5 Agustus)
    const sales_chart_options = {
        series: [
        {
            name: 'Jumlah Kunjungan',
            data: [45, 60, 75, 50, 80, 90, 65], // nilai kunjungan tiap hari
        }
        ],
        chart: {
        height: 300,
        type: 'area',
        toolbar: {
            show: false,
        },
        },
        legend: {
        show: false,
        },
        colors: ['#0d6efd'],
        dataLabels: {
        enabled: false,
        },
        stroke: {
        curve: 'smooth',
        },
        xaxis: {
        type: 'datetime',
        categories: [
            '2025-07-30',
            '2025-07-31',
            '2025-08-01',
            '2025-08-02',
            '2025-08-03',
            '2025-08-04',
            '2025-08-05'
        ],
        },
        tooltip: {
        x: {
            format: 'dd MMM yyyy',
        },
        y: {
            formatter: function (val) {
            return val + " orang";
            }
        }
        },
        yaxis: {
        min: 0,
        max: 100,
        tickAmount: 5
        }
    };

    const sales_chart = new ApexCharts(
        document.querySelector('#revenue-chart'),
        sales_chart_options
    );
    sales_chart.render();
    </script>
    <!-- jsvectormap -->
    <script>
      // World map by jsVectorMap
      new jsVectorMap({
        selector: '#world-map',
        map: 'world',
      });

      // Sparkline charts
      const option_sparkline1 = {
        series: [
          {
            data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
          },
        ],
        chart: {
          type: 'area',
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: 'straight',
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ['#DCE6EC'],
      };

      const sparkline1 = new ApexCharts(document.querySelector('#sparkline-1'), option_sparkline1);
      sparkline1.render();

      const option_sparkline2 = {
        series: [
          {
            data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
          },
        ],
        chart: {
          type: 'area',
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: 'straight',
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ['#DCE6EC'],
      };

      const sparkline2 = new ApexCharts(document.querySelector('#sparkline-2'), option_sparkline2);
      sparkline2.render();

      const option_sparkline3 = {
        series: [
          {
            data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
          },
        ],
        chart: {
          type: 'area',
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: 'straight',
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ['#DCE6EC'],
      };

      const sparkline3 = new ApexCharts(document.querySelector('#sparkline-3'), option_sparkline3);
      sparkline3.render();
    </script>
    <!--end::Script-->
  </body>
  <!--end::Body-->
    </html>
