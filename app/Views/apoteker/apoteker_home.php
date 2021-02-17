<?= $this->extend('layout/templateApoteker'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Daftar Pasien</h2>
                        <p>Daftar pasien yang telah melakukan pemeriksaan pada hari ini</p>
                        <br>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No. Urut</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Resep Obat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <tr>
                                    <th scope="row">1</th>
                                    <td style="text-align: left;">Rika</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/resep') ?>" role="button"><i class="bi bi-eye"></i> Detail Resep</a></td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/tebus-obat') ?>" role="button"><i class="bi bi-pencil-square"></i> Tebus Obat</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td style="text-align: left;">Kirana</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/resep') ?>" role="button"><i class="bi bi-eye"></i> Detail Resep</a></td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/tebus-obat') ?>" role="button"><i class="bi bi-pencil-square"></i> Tebus Obat</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td style="text-align: left;">Beni</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/resep') ?>" role="button"><i class="bi bi-eye"></i> Detail Resep</a></td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/tebus-obat') ?>" role="button"><i class="bi bi-pencil-square"></i> Tebus Obat</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td style="text-align: left;">Fadal</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/resep') ?>" role="button"><i class="bi bi-eye"></i> Detail Resep</a></td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/tebus-obat') ?>" role="button"><i class="bi bi-pencil-square"></i> Tebus Obat</a></td>
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