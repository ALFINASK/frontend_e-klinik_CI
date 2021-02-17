<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" />

    <title>Klinik Pratama Karya Asih</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
</head>

<body>
    <!-- Header -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a href="<?= base_url() ?>"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" class="img-fluid"></a>
                </div>

                <!-- navbar -->
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto" href="#home">Beranda</a></li>
                        <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                        <li><a class="nav-link scrollto" href="#alur">Alur Pelayanan</a></li>
                        <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                        <li><a class="getstarted scrollto" href="<?= base_url('/login') ?>">Get Started</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>

    <!-- Home -->
    <section id="home" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1>Klinik Pratama "Karya Asih"</h1>
            <h2>Klinik Umum dan Gigi | Jadwal Praktek Senin s/d Sabtu</h2>
            <a href="<?= base_url('/login') ?>" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Layanan</h2>
                        <p>Layanan yang tersedia pada Klinik Pratama "Karya Asih"</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="col-md-12 d-flex align-items-stretch">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><img src="assets/img/pelayanan-umum.png" alt="" class="img-fluid"></div>
                            <h4>Pengobatan Umum</h4>
                            <p>Pengobatan untuk masalah kesehatan dan gejala umum yang dialami pasien.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="col-md-12 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><img src="assets/img/pelayanan-gigi.png" alt="" class="img-fluid"></div>
                            <h4>Pengobatan Gigi</h4>
                            <p>Pengobatan untuk masalah kesehatan gigi yang dialami pasien.</p>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Jadwal Praktek</th>
                                    <th scope="col">Pagi</th>
                                    <th scope="col">Siang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Senin - Jumat</td>
                                    <td>09.00 - 12.00</td>
                                    <td>16.00 - 18.30</td>
                                </tr>
                                <tr>
                                    <td>Sabtu</td>
                                    <td>09.00 - 12.00</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>

    <!-- Alur Pelayanan -->
    <section id="alur" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Alur</h2>
                        <p>Alur Pelayanan pada Klinik Pratama "Karya Asih"</p>
                        <img src="assets/img/alur.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="section-title">
                        <h2>Kontak</h2>
                        <p>Klinik Pratama "Karya Asih" terletak di Kota Bandung, Jawa Barat.</p>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7785765910703!2d107.58894301477297!3d-6.9170549950021565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTUnMDEuNCJTIDEwN8KwMzUnMjguMSJF!5e0!3m2!1sen!2sid!4v1613362522953!5m2!1sen!2sid" frameborder="0"></iframe>
                    <div class="info mt-4">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Jl. Waringin 51-54, Ciroyom, Kec. Andir, Kota Bandung, Jawa Barat 40182</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mt-4">
                            <div class="info">
                                <i class="bi bi-facebook"></i>
                                <h4>Facebook:</h4>
                                <p><a href="https://www.facebook.com/pages/Klinik%20Pratama%20Karya%20Asih/542501342823511/">Klinik Pratama Karya Asih</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info w-100 mt-4">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>(022) 6013223</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Alfina Sukma Kinanti</span></strong>
                </div>
                <div class="credits">
                    Referenced by Klinik Pratama "Karya Asih" & Bethany</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://www.facebook.com/alfina.s.kinanti" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/alfinask_/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/alfina-sukma-kinanti-36025b1ba" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/ALFINASK" class="github"><i class="bi bi-github"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>