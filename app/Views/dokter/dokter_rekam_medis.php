<?= $this->extend('layout/templateDokter'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Rekam Medis</h2>
                        <p>Daftar rekam medis pasien Rika selama di Klinik Pratama "Karya Asih"</p>
                        <br>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Resep</th>
                                </tr>
                            </thead>
                            <tbody style="text-align:center">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>12-04-2020</td>
                                    <td style="text-align:left">Radang Tenggorokan</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/dokter/hasil-pemeriksaan') ?>"><i class="bi bi-clipboard-check"></i> Hasil Pemeriksaan</a></td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/dokter/resep') ?>"><i class="bi bi-pencil-square"></i> Resep</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>23-09-2020</td>
                                    <td style="text-align:left">Maag</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/dokter/hasil-pemeriksaan') ?>"><i class="bi bi-clipboard-check"></i> Hasil Pemeriksaan</a></td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/dokter/resep') ?>"><i class="bi bi-pencil-square"></i> Resep</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>11-01-2021</td>
                                    <td style="text-align:left">Asam Lambung</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/dokter/hasil-pemeriksaan') ?>"><i class="bi bi-clipboard-check"></i> Hasil Pemeriksaan</a></td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/dokter/resep') ?>"><i class="bi bi-pencil-square"></i> Resep</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a class="btn btn-success" href="<?= base_url('/dokter/pemeriksaan') ?>" style="float: right;">Back</a>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>