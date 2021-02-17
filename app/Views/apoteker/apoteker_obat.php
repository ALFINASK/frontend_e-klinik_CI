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
                        <a class="btn btn-success" href="<?= base_url('/apoteker/obat/tambah') ?>" style="float:right;"><i class="bi bi-plus"></i> Tambah Data</a>
                        <br><br>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Obat</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <tr>
                                    <th scope="row">1</th>
                                    <td style="text-align: left;">Aspirin</td>
                                    <td style="text-align: left;">1300</td>
                                    <td>Rp.4000</td>
                                    <td style="text-align: left;">Pengencer darah</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/obat/edit') ?>"><i class="bi bi-pen"></i> Edit</a>
                                        <a class="btn btn-outline-success" data-bs-target="#exampleModal"><i class="bi bi-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td style="text-align: left;">Aspirin</td>
                                    <td style="text-align: left;">1300</td>
                                    <td>Rp.4000</td>
                                    <td style="text-align: left;">Pengencer darah</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/obat/edit') ?>"><i class="bi bi-pen"></i> Edit</a>
                                        <a class="btn btn-outline-success" href="<?= base_url('/apoteker/obat/edit') ?>"><i class="bi bi-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td style="text-align: left;">Aspirin</td>
                                    <td style="text-align: left;">1300</td>
                                    <td>Rp.4000</td>
                                    <td style="text-align: left;">Pengencer darah</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/obat/edit') ?>"><i class="bi bi-pen"></i> Edit</a>
                                        <a class="btn btn-outline-success" href="<?= base_url('/apoteker/obat/edit') ?>"><i class="bi bi-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td style="text-align: left;">Aspirin</td>
                                    <td style="text-align: left;">1300</td>
                                    <td>Rp.4000</td>
                                    <td style="text-align: left;">Pengencer darah</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/obat/edit') ?>"><i class="bi bi-pen"></i> Edit</a>
                                        <a class="btn btn-outline-success" href="<?= base_url('/apoteker/obat/edit') ?>"><i class="bi bi-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td style="text-align: left;">Aspirin</td>
                                    <td style="text-align: left;">1300</td>
                                    <td>Rp.4000</td>
                                    <td style="text-align: left;">Pengencer darah</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/obat/edit') ?>"><i class="bi bi-pen"></i> Edit</a>
                                        <a class="btn btn-outline-success" href="<?= base_url('/apoteker/obat/edit') ?>"><i class="bi bi-trash"></i> Hapus</a>
                                    </td>
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