<?php

require 'conn.php'; // koneksi database

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sajione Restorant</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet"/>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top" style="font-family: 'Gorditas', cursive;">Sajione Restaurant</a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link" href="#services">Services</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="#Menu-makanan">Menu Makanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#sejarah">Sejarah</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#team">Team</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="login.php">Admin</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="admin1.php">coba-coba</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="#founder">Founder</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang di Restoran Kami!</div>
                <div class="masthead-heading text-uppercase">hidangan dengan kaya rasa</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#Menu-makanan">Ayo Mulai Memesan!</a>
            </div>
        </header>
        <!-- Services-->
        <!-- <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Menu Makanan-->
        <section class="menu-makanan page-section bg-light" id="Menu-makanan">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Menu Makanan</h2>
                    <h3 class="section-subheading text-muted">Menu utama yang populer di Sajione.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Menu makanan item 1-->
                        <div class="Menu-makanan-item">
                            <a class="Menu-makanan-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="Menu-makanan-hover">
                                    <div class="Menu-makanan-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/nasi-goreng-biasa.jpg" alt="..." />
                            </a>
                            <div class="Menu-makanan-caption">
                                <div class="Menu-makanan-caption-heading">Nasi Goreng</div>
                                <div class="Menu-makanan-caption-subheading text-muted">Menu Favorit di Sajione</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Menu makanan item 2-->
                        <div class="Menu-makanan-item">
                            <a class="Menu-makanan-link" data-bs-toggle="modal" href="#Menu-makananModal2">
                                <div class="Menu-makanan-hover">
                                    <div class="Menu-makanan-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/chicken-katsu.jpg" alt="..." />
                            </a>
                            <div class="Menu-makanan-caption">
                                <div class="Menu-makanan-caption-heading">Chicken Katsu</div>
                                <div class="Menu-makanan-caption-subheading text-muted">Makanan khas jepang</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Menu Makanan item 3-->
                        <div class="Menu-makanan-item">
                            <a class="Menu-makanan-link" data-bs-toggle="modal" href="#Menu-makananModal3">
                                <div class="Menu-makanan-hover">
                                    <div class="Menu-makanan-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/chicken-karage.jpg" alt="..." />
                            </a>
                            <div class="Menu-makanan-caption">
                                <div class="Menu-makanan-caption-heading">Chicken Karage</div>
                                <div class="Menu-makanan-caption-subheading text-muted">Makanan khas jepang</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Menu makanan item 4-->
                        <div class="Menu-makanan-item">
                            <a class="Menu-makanan-link" data-bs-toggle="modal" href="#Menu-makananModal4">
                                <div class="Menu-makanan-hover">
                                    <div class="Menu-makanan-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/rawon.jpg" alt="..." />
                            </a>
                            <div class="Menu-makanan-caption">
                                <div class="Menu-makanan-caption-heading">Rawon</div>
                                <div class="Menu-makanan-caption-subheading text-muted">Sup Daging khas Jawa Timur</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Menu makanan item 5-->
                        <div class="Menu-makanan-item">
                            <a class="Menu-makanan-link" data-bs-toggle="modal" href="#Menu-makananModal5">
                                <div class="Menu-makanan-hover">
                                    <div class="Menu-makanan-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/lontong-sayur.jpg" alt="..." />
                            </a>
                            <div class="Menu-makanan-caption">
                                <div class="Menu-makanan-caption-heading">lontong Sayur</div>
                                <div class="Menu-makanan-caption-subheading text-muted">Lontong dengan kuah santan yang gurih</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Menu makanan item 6-->
                        <div class="Menu-makanan-item">
                            <a class="Menu-makanan-link" data-bs-toggle="modal" href="#Menu-makananModal6">
                                <div class="Menu-makanan-hover">
                                    <div class="Menu-makanan-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ayam-taliwang.jpg" alt="..." />
                            </a>
                            <div class="Menu-makanan-caption">
                                <div class="Menu-makanan-caption-heading">Ayam Taliwang</div>
                                <div class="Menu-makanan-caption-subheading text-muted">Ayam tebal dengan bumbu cabe merah yang segar.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a class="btn-menu btn btn-primary btn-xl text-uppercase text-center text-wrap" style="max-width: 320px;" href="menu_makanan.php">
                    Lihat lebih banyak untuk pesan
                </a>
            </div>
        </section>

        <!-- Sejarah-->
        <section class="page-section" id="sejarah">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sejarah</h2>
                    <br>
                    <br>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Juni 2025</h4>
                                <h4 class="subheading">Awal Mula Ide Sajione</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Gagasan besar lahir dari cinta terhadap cita rasa Nusantara. Di bulan ini, ide untuk menghadirkan restoran kuliner khas Indonesia dengan ribuan menu autentik mulai dikembangkan—sebuah konsep yang menggabungkan rasa tradisional dan visi modern.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>30 Juni 2025</h4>
                                <h4 class="subheading">Lahirnya Agensi Sajione</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Langkah awal diwujudkan dengan pembentukan agensi Sajione Restaurant. Kami mulai merancang identitas merek, menu andalan, dan fondasi operasional untuk membawa kelezatan Indonesia ke hati para pecinta kuliner.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>01 Juli 2025</h4>
                                <h4 class="subheading">Penentuan Target & Strategi Pemasaran</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Dengan fokus pada kualitas dan keragaman rasa, kami menetapkan target pasar utama dan strategi promosi. Sajione dibentuk untuk menjadi destinasi utama pecinta masakan Indonesia dari segala usia dan latar belakang.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>21 Juli 2025</h4>
                                <h4 class="subheading">Ekspansi ke Berbagai Outlet</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Hari yang bersejarah! Sajione resmi hadir dan membuka outlet pertama. Sambutan hangat dari masyarakat mendorong ekspansi cepat ke berbagai lokasi, memperkenalkan kekayaan rasa Indonesia dalam setiap sajian.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Lahirnya
                                <br />
                                Sajione
                                <br />
                                Restaurant!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- founder -->
        <section class="page-section" id="founder">
            <div class="container">
                <div class="text-center">
                <h2 class="section-heading text-uppercase">Founder SajiOne</h2>
                    <h3 class="section-subheading text-muted">fonder yang berkontribusi membangun Restoran ini.</h3>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/fahmi.jpg" alt="Fahmi" />
                    <h4>Saadilah Fahmi Husaini</h4>
                    <p class="text-muted">Leader Team</p>
                    <!-- <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/haikal.jpg" alt="Haikal" />
                    <h4>Muhamad Haikal</h4>
                    <p class="text-muted">UI/UX Designer</p>
                    <!-- <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/harlan.jpg" alt="Harlan" />
                    <h4>Muhammad Harlan Fadhilah</h4>
                    <p class="text-muted">Back End Programming</p>
                    <!-- <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-6">
                    <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/haafiz.jpg" alt="Haafiz" />
                    <h4>Haafiz Dauz Syahputra</h4>
                    <p class="text-muted">Front End Programming</p>
                    <!-- <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-member">
                <img class="mx-auto rounded-circle" src="assets/img/team/denim.jpg" alt="Denim" />
                <h4>Dionisius Deni Mardiansyah</h4>
                <p class="text-muted">Web Hosting Specialist</p>
                    <!-- <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul> -->
                </div>
            </div>
            </div>
            </div>
            </section>

        <!-- Team-->
        <!-- <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section> -->
        <!-- Clients-->
        <!-- <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Contact-->
        <!-- <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div> -->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <!-- <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group"> -->
                                <!-- Name input-->
                                <!-- <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group"> -->
                                <!-- Email address input-->
                                <!-- <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0"> -->
                                <!-- Phone number input-->
                                <!-- <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0"> -->
                                <!-- Message input-->
                                <!-- <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <!-- <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div> -->
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <!-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> -->
                    <!-- Submit Button-->
                    <!-- <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section> -->
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Sajione Restaurant 2025</div>
                    <!-- <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                    <!-- <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div> -->
                </div>
            </div>
        </footer>
        <!-- Menu Makanan Modals-->
        <!-- Menu makanan item 1 modal popup-->
        <div class="Menu-makanan-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Menu makanan details-->
                                    <h2 class="text-uppercase">Nasi Goreng</h2>
                                    <p class="item-intro text-muted">Menu Favorit di Sajione.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/nasi-goreng-biasa.jpg" alt="..." />
                                    <p>Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan dicampur dalam minyak goreng, 
                                        margarin, atau mentega. Biasanya ditambah dengan kecap manis, bawang merah, bawang putih, 
                                        asam jawa, lada, dan bahan yang lainnya; seperti telur, daging ayam, dan kerupuk. Ada pula 
                                        nasi goreng jenis lain yang dibuat bersama dengan ikan asin yang juga populer di seluruh wilayah 
                                        Indonesia.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Category:</strong>
                                            Makanan
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu makanan item 2 modal popup-->
        <div class="Menu-makanan-modal modal fade" id="Menu-makananModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Menu makanan details-->
                                    <h2 class="text-uppercase">Chicken Katsu</h2>
                                    <p class="item-intro text-muted">Makanan khas jepang.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/chicken-katsu.jpg" alt="..." />
                                    <p>Chikinkatsu (Jepang: チキンカツ), juga dikenal dengan pankochikin atau tori katsu (鶏カツ) 
                                        adalah hidangan Jepang, berupa ayam goreng yang dibuat dengan tepung roti panko. Hidangan 
                                        ini terkait dengan tonkatsu. Hidangan ini terkenal secara internasional dan menjadi makanan yang 
                                        umum diajikan di restoran Jepang dan restoran Asia Timur di seluruh dunia.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Category:</strong>
                                            Makanan
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu makanan item 3 modal popup-->
        <div class="Menu-makanan-modal modal fade" id="Menu-makananModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Menu makanan details-->
                                    <h2 class="text-uppercase">Chicken Karage</h2>
                                    <p class="item-intro text-muted">Makanan khas jepang.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/chicken-karage.jpg" alt="..." />
                                    <p>Karaage (唐揚げ atau 空揚げ atau から揚げ, [kaɾaaɡe]) (pengucapan kira-kira penggorengan), 
                                        adalah teknik memasak ala Jepang di mana berbagai jenis bahan makanan — lebih sering ayam, 
                                        juga daging, atau ikan — digoreng rendam dalam minyak yang banyak. Potongan daging ini dibumbui 
                                        dengan mirin atau saus rendaman asin yang dibuat dari campuran kecap asin, bawang putih, dan jahe, 
                                        kemudian dilapisi tepung terigu atau tepung kentang, lalu digoreng dalam minyak goreng yang banyak 
                                        — mirip dengan cara memasak tempura.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Category:</strong>
                                            Makanan
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu makanan item 4 modal popup-->
        <div class="Menu-makanan-modal modal fade" id="Menu-makananModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Menu makanan details-->
                                    <h2 class="text-uppercase">Rawon</h2>
                                    <p class="item-intro text-muted">Sup Daging khas Jawa Timur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/rawon.jpg" alt="..." />
                                    <p>Rawon adalah masakan khas Indonesia yang berasal dari Ponorogo, Jawa Timur, yang berupa sup 
                                        daging berkuah hitam dengan campuran bumbu khas yang menggunakan kluwek. Makanan ini telah 
                                        berusia lebih dari 1.000 tahun. Rawon dari Ponorogo menyebar ke penjuru Jawa Timur dan dikenal 
                                        sebagai masakan khas Jawa Timur.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Category:</strong>
                                            Makanan
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu makanan item 5 modal popup-->
        <div class="Menu-makanan-modal modal fade" id="Menu-makananModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Menu makanan details-->
                                    <h2 class="text-uppercase">Lontong Sayur</h2>
                                    <p class="item-intro text-muted">Lontong dengan kuah santan yang gurih.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/lontong-sayur.jpg" alt="..." />
                                    <p>Lontong sayur atau lontong gulai adalah makanan Indonesia berupa irisan lontong yang disajikan 
                                        dengan sayur-sayuran yang dimasak dalam kuah santan encer. Bahan sayuran ini diiris-iris dan 
                                        dicampurkan ke dalam kuah santan. Sayuran yang digunakan antara lain labu siam, buncis, nangka 
                                        muda, kemudian dapat ditambahkan pelengkap seperti tempe, tahu, telur rebus, sambal dan kerupuk.
                                        Hidangan ini dapat ditemukan dalam tradisi Betawi, dan Minang.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Category:</strong>
                                            Makanan
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu makanan item 6 modal popup-->
        <div class="Menu-makanan-modal modal fade" id="Menu-makananModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Menu makanan details-->
                                    <h2 class="text-uppercase">Ayam Taliwang</h2>
                                    <p class="item-intro text-muted">Ayam tebal dengan bumbu cabe merah yang segar.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ayam-taliwang.jpg" alt="..." />
                                    <p>Ayam Taliwang adalah makanan khas yang berasal dari Taliwang, Sumbawa Barat, Nusa Tenggara Barat. 
                                        Makanan ini berbahan dasar daging ayam. Daging ayam yang disajikan berasal dari ayam kampung 
                                        muda yang dibakar kemudian dibumbui dengan semacam saus yang bahannya antara lain cabai merah 
                                        kering, bawang merah, bawang putih, tomat, terasi goreng, kencur, gula merah, dan garam. 
                                        Makanan ini biasanya disajikan bersama makanan khas Lombok yang lain, misalnya plecing kangkung.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Category:</strong>
                                            Makanan
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
