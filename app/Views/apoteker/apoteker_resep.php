<?= $this->extend('layout/templateApoteker'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Resep Obat</h2>
                        <p>Resep obat pada saat melakukan pemeriksaan tanggal 12 April 2020</p>
                        <br>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Obat</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aturan</th>
                                </tr>
                            </thead>
                            <tbody style="text-align:center">
                                <tr>
                                    <th scope="row">1</th>
                                    <td style="text-align:left">Degirol</td>
                                    <td>3 x 1 hari</td>
                                    <td>Sesudah Makan</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td style="text-align:left">Vitamin</td>
                                    <td>1 x 1 hari</td>
                                    <td>Sesudah Makan</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td style="text-align:left">Antibiotik</td>
                                    <td>3 x 1 hari</td>
                                    <td>Sesudah Makan</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td style="text-align:left">Paracetamol</td>
                                    <td>3 x 1 hari</td>
                                    <td>Sesudah Makan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a class="btn btn-success" href="<?= base_url('/apoteker/home') ?>" style="float: right;">Selesai</a>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>