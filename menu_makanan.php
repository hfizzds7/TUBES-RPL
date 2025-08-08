<!-- <?php

require 'conn.php'; // koneksi database

?> -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/modal.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="page-more-menu">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php" style="font-family: 'Gorditas', cursive;">Sajione Restaurant</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Main Page</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!-- <li><a class="dropdown-item" href="#!">Semua Menu</a></li>
                                <li><hr class="dropdown-divider" /></li> -->
                                <li><a class="dropdown-item" href="#menu-makanan">Menu Makanan</a></li>
                                <li><a class="dropdown-item" href="#menu-minuman">Menu Minuman</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="cart.php">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class=" head-menu py-5" id="head-menu-makanan">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Daftar Menu</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Menu makanan dengan berbagai macam pilihan</p>
                </div>
            </div>
        </header>
        <!-- makanan-->
        <section class="py-5" id="menu-makanan">
            <div class="container px-4 px-lg-5 mt-5">
                <a class="keterangan" id="keterangan-menu">Makanan</a>
                <p></p>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="assets/img/nasi-goreng-biasa.jpg" alt="Nasi Goreng Spesial" />
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
                                    <span class="original-price" data-price="10000">Rp.10.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Nasi Goreng Spesial" data-price="10000" data-image="assets/img/nasi-goreng-biasa.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/nasi-goreng-ati.jpg" alt="Nasi Goreng Ati" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Nasi Goreng Ati</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="15000">Rp.15.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Nasi Goreng Ati" data-price="15000" data-image="assets/img/nasi-goreng-ati.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/nasi-goreng-sosis.jpg" alt="Nasi Goreng Sosis" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Nasi Goreng Sosis</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="12000">Rp.12.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Nasi Goreng Sosis" data-price="12000" data-image="assets/img/nasi-goreng-sosis.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="assets/img/nasi-goreng-seafood.jpg" alt="Nasi Goreng Seafood" />
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
                                    <span class="original-price" data-price="16000">Rp.16.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Nasi Goreng Seafood" data-price="16000" data-image="assets/img/nasi-goreng-seafood.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/nasi-goreng-kornet.jpg" alt="Nasi Goreng Kornet" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Nasi Goreng Kornet</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="14000">Rp.14.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Nasi Goreng Kornet" data-price="14000" data-image="assets/img/nasi-goreng-kornet.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="assets/img/chicken-katsu.jpg" alt="Chicken Katsu" />
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
                                    <span class="original-price" data-price="18000">Rp.18.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Chicken Katsu" data-price="18000" data-image="assets/img/chicken-katsu.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="assets/img/chicken-karage.jpg" alt="Chicken Karage" />
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
                                    <span class="original-price" data-price="20000">Rp.20.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Chicken Karage" data-price="20000" data-image="assets/img/chicken-karage.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/rawon.jpg" alt="Rawon" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Rawon</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="15000">Rp.15.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Rawon" data-price="15000" data-image="assets/img/rawon.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/ayam-serundeng.jpg" alt="Ayam Serundeng" />
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
                                    <span class="original-price" data-price="21000">Rp.21.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Ayam Serundeng" data-price="21000" data-image="assets/img/ayam-serundeng.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="assets/img/ayam-taliwang.jpg" alt="Ayam Taliwang" />
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
                                    <span class="original-price" data-price="25000">Rp.25.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Ayam Taliwang" data-price="25000" data-image="assets/img/ayam-taliwang.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/bebek-bakar.jpg" alt="Bebek Bakar" />
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
                                    <span class="original-price" data-price="22000">Rp.22.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Bebek Bakar" data-price="22000" data-image="assets/img/bebek-bakar.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/kwetiau.jpg" alt="Kwetiau" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Kwetiau</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="16000">Rp.16.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Kwetiau" data-price="16000" data-image="assets/img/kwetiau.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/kwetiau-kuah.jpg" alt="Kwetiau Kuah" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Kwetiau Kuah</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="18000">Rp.18.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Kwetiau Kuah" data-price="18000" data-image="assets/img/kwetiau-kuah.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/lontong-sayur.jpg" alt="Lontong Sayur" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Lontong Sayur</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="20000">Rp.20.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Lontong Sayur" data-price="20000" data-image="assets/img/lontong-sayur.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/omlet.jpg" alt="Omlet" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Omlet</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="17000">Rp.17.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Omlet" data-price="17000" data-image="assets/img/omlet.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="assets/img/semur-sapi.jpg" alt="Semur Sapi" />
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
                                    <span class="original-price" data-price="22000">Rp.22.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Semur Sapi" data-price="22000" data-image="assets/img/semur-sapi.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5" id="menu-minuman">
            <div class="container px-4 px-lg-5 mt-5">
                <a class="keterangan" id="keterangan-menu">Minuman</a>
                <p></p>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/cappuccino.jpg" alt="Cappuccino" />
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
                                    <span class="original-price" data-price="22000">Rp.22.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Cappuccino" data-price="22000" data-image="assets/img/cappuccino.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="assets/img/coffee-latte.jpg" alt="Coffee Latte" />
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
                                    <span class="original-price" data-price="23000">Rp.23.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Coffee Latte" data-price="23000" data-image="assets/img/coffee-latte.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/es-cendol.jpg" alt="Es Cendol" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Es Cendol</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="16000">Rp.16.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Es Cendol" data-price="16000" data-image="assets/img/es-cendol.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/es-cincau.jpg" alt="Es Cincau" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Es Cincau</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="14000">Rp.14.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Es Cincau" data-price="14000" data-image="assets/img/es-cincau.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/es-doger.jpg" alt="Es Doger" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Es Doger</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="18000">Rp.18.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Es Doger" data-price="18000" data-image="assets/img/es-doger.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/es-goyobod.jpg" alt="Es Goyobod" />
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
                                    <span class="original-price" data-price="15000">Rp.15.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Es Goyobod" data-price="15000" data-image="assets/img/es-goyobod.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="assets/img/es-teler.jpg" alt="Es Teler" />
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
                                    <span class="original-price" data-price="19000">Rp.19.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Es Teler" data-price="19000" data-image="assets/img/es-teler.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="assets/img/jus-alpukat.jpg" alt="Jus Alpukat" />
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
                                    <span class="original-price" data-price="18000">Rp.18.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Jus Alpukat" data-price="18000" data-image="assets/img/jus-alpukat.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/jus-mangga.jpg" alt="Jus Mangga" />
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
                                    <span class="original-price" data-price="17000">Rp.17.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Jus Mangga" data-price="17000" data-image="assets/img/jus-mangga.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/jus-pisang.jpg" alt="Jus Pisang" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Jus Pisang</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="15000">Rp.15.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Jus Pisang" data-price="15000" data-image="assets/img/jus-pisang.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="assets/img/jus-stroberi.jpg" alt="jus Strawberry" />
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
                                    <span class="original-price" data-price="19000">Rp.19.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Jus Strawberry" data-price="19000" data-image="assets/img/jus-stroberi.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Terfavorit</div>
                            <img class="card-img-top" src="assets/img/milkshake.jpg" alt="Milkshake Cream" />
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
                                    <span class="original-price" data-price="22000">Rp.22.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Milkshake Cream" data-price="22000" data-image="assets/img/milkshake.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/susu-cokelat.jpg" alt="Susu Cokelat" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Susu Cokelat</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="16000">Rp.16.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Susu Cokelat" data-price="16000" data-image="assets/img/susu-cokelat.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/teh-tarik.jpg" alt="Teh Tarik" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Teh Tarik</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="18000">Rp.18.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Teh Tarik" data-price="18000" data-image="assets/img/teh-tarik.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/teh.jpg" alt="Teh Manis" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Teh Manis</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="original-price" data-price="14000">Rp.14.000</span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#orderModal" data-menu="Teh Manis" data-price="14000" data-image="assets/img/teh.jpg">PESAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5" style="background-color: #ffc800;">
            <div class="container"><p class="m-0 text-center text-brown">Sajione Restaurant 2025</p></div>
        </footer>
        <!-- Order Modal -->
        <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabel">Tambah ke Keranjang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                <div class="col-md-6">
                    <img id="modal-image" class="img-fluid" src="" alt="Menu Image" />
                </div>

                <div class="col-md-6">
                    <form id="orderForm">
                    <input type="hidden" id="menuId" name="id_menu">

                    <div class="mb-3">
                        <label for="menuName" class="form-label">Menu</label>
                        <input type="text" class="form-control" id="menuName" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="menuPrice" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="menuPrice" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="orderQuantity" class="form-label">Jumlah Pesanan</label>
                        <input type="number" class="form-control" id="orderQuantity" value="1" min="1" required>
                    </div>

                    <div class="mb-3">
                        <label for="orderNotes" class="form-label">Catatan</label>
                        <textarea class="form-control" id="orderNotes" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="tableSelect" class="form-label">Pilih Meja</label>
                        <select class="form-select" id="tableSelect" required>
                        <option value="" disabled selected>Pilih...</option>
                        <option value="1">Meja 1</option>
                        <option value="2">Meja 2</option>
                        <option value="3">Meja 3</option>
                        <option value="4">Meja 4</option>
                        </select>
                    </div>
                    </form>

                    <div class="alert alert-danger d-none" id="alertMessage" role="alert">
                    Anda belum mengisi semua data pesanan!
                    </div>
                </div>
                </div>
            </div>

            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="addOrderButton">Tambah</button>
            </div>
            </div>
        </div>
        </div>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast text-bg-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
            <strong class="me-auto">Pemberitahuan</strong>
            <small>Sekarang</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
            Pesanan berhasil ditambahkan ke keranjang!
            </div>
        </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/modal.js"></script> 
        <script>// Kode ini harus berada di halaman menu_makanan.php atau file JS yang terhubung
        document.addEventListener('DOMContentLoaded', function () {
            const addOrderButton = document.getElementById('addOrderButton');
            const orderModal = new bootstrap.Modal(document.getElementById('orderModal'));

            // Asumsi ada event listener untuk membuka modal, misalnya dari tombol "Beli" di setiap menu.
            // Contoh:
            // document.querySelectorAll('.add-to-cart-btn').forEach(button => {
            //     button.addEventListener('click', function() {
            //         // Mengisi data modal dari data menu yang diklik
            //         const menuElement = this.closest('.card');
            //         document.getElementById('menuName').value = menuElement.dataset.name;
            //         document.getElementById('menuPrice').value = menuElement.dataset.price;
            //         document.getElementById('modal-image').src = menuElement.dataset.image;
            //         orderModal.show();
            //     });
            // });

            addOrderButton.addEventListener('click', function () {
                const menuName = document.getElementById('menuName').value;
                const menuPrice = parseFloat(document.getElementById('menuPrice').value.replace(/[^0-9,-]+/g,"").replace(",","."));
                const orderQuantity = parseInt(document.getElementById('orderQuantity').value);
                const orderNotes = document.getElementById('orderNotes').value;
                const modalImage = document.getElementById('modal-image').src;
                const tableSelect = document.getElementById('tableSelect').value;

                // Validasi sederhana
                if (orderQuantity < 1) {
                    document.getElementById('alertMessage').classList.remove('d-none');
                    document.getElementById('alertMessage').textContent = 'Jumlah pesanan tidak boleh kosong atau kurang dari 1.';
                    return;
                }

                if (tableSelect === 'Pilih...') {
                    document.getElementById('alertMessage').classList.remove('d-none');
                    document.getElementById('alertMessage').textContent = 'Silakan pilih nomor meja.';
                    return;
                }

                // Sembunyikan alert jika validasi berhasil
                document.getElementById('alertMessage').classList.add('d-none');

                // Buat objek item baru
                const newItem = {
                    name: menuName,
                    price: menuPrice,
                    quantity: orderQuantity,
                    totalPrice: menuPrice * orderQuantity,
                    image: modalImage,
                    notes: orderNotes,
                    tableNumber: tableSelect // Ini yang penting: simpan nilai dari dropdown
                };

                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                cart.push(newItem);
                localStorage.setItem('cart', JSON.stringify(cart));
                
                updateCartCount(); // Panggil fungsi ini untuk meng-update badge cart
                orderModal.hide(); // Tutup modal setelah item ditambahkan
            });

            function updateCartCount() {
                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                document.getElementById('cart-count').textContent = cart.length;
            }
        });

        document.addEventListener("DOMContentLoaded", function () {
        const addOrderButton = document.getElementById("addOrderButton");
        const orderForm = document.getElementById("orderForm");
        const tableSelect = document.getElementById("tableSelect");
        const alertMessage = document.getElementById("alertMessage");
        const liveToast = document.getElementById("liveToast");

        addOrderButton.addEventListener("click", function (event) {
            // Mencegah pengiriman formulir default
            event.preventDefault();

            // Validasi sederhana: Cek apakah meja sudah dipilih
            if (tableSelect.value === "") {
            alertMessage.classList.remove("d-none");
            alertMessage.textContent = "Anda belum memilih meja!";
            return;
            } else {
            alertMessage.classList.add("d-none");
            }

            // --- Di sini Anda bisa menambahkan logika untuk menambahkan pesanan ke keranjang ---
            // Contoh: Mengumpulkan data dari form
            const orderData = {
            menuId: document.getElementById("menuId").value,
            menuName: document.getElementById("menuName").value,
            price: document.getElementById("menuPrice").value,
            quantity: document.getElementById("orderQuantity").value,
            notes: document.getElementById("orderNotes").value,
            table: tableSelect.options[tableSelect.selectedIndex].text,
            };

            console.log("Pesanan ditambahkan:", orderData);
            
            // Asumsi pesanan berhasil ditambahkan, kita tampilkan toast
            const toast = new bootstrap.Toast(liveToast);
            toast.show();

            // Setelah menampilkan toast, Anda bisa mereset form jika perlu
            orderForm.reset();
            tableSelect.value = "";
            document.getElementById("orderQuantity").value = 1;
            
            // Dan menutup modal
            const modal = bootstrap.Modal.getInstance(document.querySelector('.modal'));
            if (modal) {
                // Beri sedikit jeda agar user melihat toast sebelum modal ditutup
                setTimeout(() => {
                    modal.hide();
                }, 1500); 
            }
        });
        });
        document.addEventListener('DOMContentLoaded', function () {
        const cartItemsContainer = document.getElementById('cart-items');
        const cartTotalElement = document.getElementById('cart-total');
        const cartCountElement = document.getElementById('cart-count');
        const checkoutButton = document.getElementById('checkout-button');

        function renderCart() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let total = 0;
            cartItemsContainer.innerHTML = '';

            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<p class="text-center text-muted">Keranjang Anda kosong.</p>';
                checkoutButton.disabled = true;
            } else {
                cart.forEach((item, index) => {
                    total += item.totalPrice;
                    const cartItemElement = document.createElement('div');
                    cartItemElement.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center', 'cart-item');
                    
                    // --- INI BAGIAN PENTING UNTUK MENAMPILKAN NOMOR MEJA ---
                    // Periksa apakah item memiliki properti 'tableNumber' yang telah disimpan dari menu_makanan.php
                    const tableInfo = item.tableNumber ? `<small class="d-block text-muted">Nomor Meja: ${item.tableNumber}</small>` : '';

                    cartItemElement.innerHTML = `
                        <div class="d-flex align-items-center">
                            <img src="${item.image}" alt="${item.name}">
                            <div>
                                <h5 class="mb-1">${item.name}</h5>
                                <p class="mb-1">Jumlah: ${item.quantity}</p>
                                <small class="d-block text-muted">Keterangan: ${item.notes || '-'}</small>
                                ${tableInfo}
                            </div>
                        </div>
                        <div class="text-end">
                            <span>Rp. ${item.totalPrice.toLocaleString('id-ID')}</span>
                        </div>
                    `;
                    cartItemsContainer.appendChild(cartItemElement);
                });
                checkoutButton.disabled = false;
            }
            cartTotalElement.textContent = `Total: Rp. ${total.toLocaleString('id-ID')}`;
            cartCountElement.textContent = cart.length;
            localStorage.setItem('cart-total', total); 
        }

        checkoutButton.addEventListener('click', function() {
            window.location.href = 'transaksi.php';
        });

        renderCart();
    });
        </script>
    </body>
</html>
