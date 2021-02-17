<?= $this->extend('layout/templatePasien'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Pendaftaran</h2>
                        <p>Lakukan pendaftaran pengobatan yang akan dilakukan. Berikut merupakan jadwal praktek yang tersedia pada saat ini.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <a href="<?= base_url('/pasien/pendaftaran') ?>" style="text-decoration: none;">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="col-md-12 d-flex align-items-stretch">
                                <div class="col-md-4 d-flex align-items-stretch">
                                    <div class="icon"><img src="<?= base_url('assets/img/dokter1.png') ?>" alt="" class="img-fluid"></div>
                                </div>
                                <div class="col-md-8 d-flex align-items-stretch">
                                    <div class="row">
                                        <h4>dr. Hartono Seno</h4>
                                        <p>Pengobatan Umum</p>
                                        <p>Jumlah Antrian: 6</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-5">
                    <a href="<?= base_url('/pasien/pendaftaran') ?>" style="text-decoration: none;">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="col-md-12 d-flex align-items-stretch">
                                <div class="col-md-4 d-flex align-items-stretch">
                                    <div class="icon"><img src="<?= base_url('assets/img/dokter2.png') ?>" alt="" class="img-fluid"></div>
                                </div>
                                <div class="col-md-8 d-flex align-items-stretch">
                                    <div class="row">
                                        <h4>drg. Riana Lia</h4>
                                        <p>Pengobatan Gigi</p>
                                        <p>Jumlah Antrian: 4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div><br><br><br>

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Jadwal Praktek</h2>
                        <p>Jadwal praktek dan dokter pada Klinik Pratama "Karya Asih"</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <table class="table">
                            <thead class="thead-services" style="text-align: center;">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Hari</th>
                                    <th scope="col">Jam Praktek</th>
                                    <th scope="col">Dokter</th>
                                    <th scope="col">Pengobatan</th>
                                </tr>
                            </thead>
                            <tbody class="tbody-services" style="text-align: center;">
                                <tr>
                                    <td>1</td>
                                    <td>Senin</td>
                                    <td>09.00 - 12.00</td>
                                    <td>dr. Hartono Seno</td>
                                    <td>Umum</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Senin</td>
                                    <td>09.00 - 12.00</td>
                                    <td>drg. Riana Lia</td>
                                    <td>Gigi</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Senin</td>
                                    <td>16.00 - 18.30</td>
                                    <td>dr. Hermawan Darma</td>
                                    <td>Umum</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Senin</td>
                                    <td>16.00 - 18.30</td>
                                    <td>drg. Risa Karina</td>
                                    <td>Gigi</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Selasa</td>
                                    <td>09.00 - 12.00</td>
                                    <td>dr. Bagas Kenan</td>
                                    <td>Umum</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Selasa</td>
                                    <td>09.00 - 12.00</td>
                                    <td>drg. Niko Putra</td>
                                    <td>Gigi</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Selasa</td>
                                    <td>16.00 - 18.30</td>
                                    <td>dr. Rona Sina</td>
                                    <td>Umum</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Selasa</td>
                                    <td>16.00 - 18.30</td>
                                    <td>drg. Selly Ratu</td>
                                    <td>Gigi</td>
                                </tr>
                                <tr>
                                    <td>...</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<?= $this->endSection(); ?>