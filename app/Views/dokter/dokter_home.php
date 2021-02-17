<?= $this->extend('layout/templateDokter'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Daftar Pasien</h2>
                        <p>Daftar pasien yang akan melakukan pemeriksaan pada hari ini</p>
                        <br>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Keluhan</th>
                                    <th scope="col">Tekanan Darah</th>
                                    <th scope="col">Suhu Tubuh</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Rika</td>
                                    <td>Pusing, panas, sakit tenggorokan, hidung tersumbat</td>
                                    <td>90/60 mmHg</td>
                                    <td>37.5°C</td>
                                    <td>
                                        <a class="btn btn-outline-success" href="<?= base_url('/dokter/pemeriksaan') ?>" role="button"><i class="bi bi-clipboard-plus"></i> Proses</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Agus</td>
                                    <td>Demam, sakit kepala, batuk kering, kehilangan nafsu makan, sakit perut</td>
                                    <td>110/60 mmHg</td>
                                    <td>39°C</td>
                                    <td>
                                        <a class="btn btn-outline-success" href="<?= base_url('/dokter/pemeriksaan') ?>" role="button"><i class="bi bi-clipboard-plus"></i> Proses</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Lina</td>
                                    <td>Kesulitan menelan, batuk kering, asam dan pahit di kerongkongan dan mulut</td>
                                    <td>120/70 mmHg</td>
                                    <td>36.5°C</td>
                                    <td>
                                        <a class="btn btn-outline-success" href="<?= base_url('/dokter/pemeriksaan') ?>" role="button"><i class="bi bi-clipboard-plus"></i> Proses</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Bayu</td>
                                    <td>Nyeri sendi, bengkak, lunak, berwarna kemerahan, terasa panas, dan kaku</td>
                                    <td>120/70 mmHg</td>
                                    <td>36°C</td>
                                    <td>
                                        <a class="btn btn-outline-success" href="<?= base_url('/dokter/pemeriksaan') ?>" role="button"><i class="bi bi-clipboard-plus"></i> Proses</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">...</th>
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