<?= $this->extend('layout/templateApoteker'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Tebus Obat</h2>
                        <form>
                            <!-- data diri -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example1">Nama Pasien</label>
                                        <input type="text" id="form6Example1" class="form-control" placeholder="Rika" readonly />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example2">No. KTP</label>
                                        <input type="text" id="form6Example2" class="form-control" placeholder="325672954266299" readonly />
                                    </div>
                                </div>
                                <div class="col">
                                    <label class="form-label" for="form6Example7">Alamat</label>
                                    <input type="text" id="form6Example2" class="form-control" placeholder="Jln. Rajawali Timur, Kota Bandung" readonly />
                                </div>
                            </div>
                        </form>
                        <br>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <tr>
                                    <th scope="row">1</th>
                                    <td style="text-align: left;">Degirol</td>
                                    <td>Rp.2.500</td>
                                    <td>9</td>
                                    <td>Rp.22.500</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td style="text-align: left;">Vitamin</td>
                                    <td>Rp.1.500</td>
                                    <td>5</td>
                                    <td>Rp.7.500</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td style="text-align: left;">Antibiotik</td>
                                    <td>Rp.500</td>
                                    <td>16</td>
                                    <td>Rp.8.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td style="text-align: left;">Paracetamol</td>
                                    <td>Rp.2.000</td>
                                    <td>6</td>
                                    <td>Rp.12.000</td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="font-weight: bold; text-align: right;">Total</td>
                                    <td>Rp.50.000</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <tr>
                                    <th scope="row">1</th>
                                    <td style="text-align: left;">Biaya Pemeriksaan</td>
                                    <td>Rp.20.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td style="text-align: left;">Biaya Obat</td>
                                    <td>Rp.50.000</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="font-weight: bold; text-align: right;">Total</td>
                                    <td>Rp.70.000</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="font-weight: bold; text-align: right;">Total biaya tambahan yang harus dibayar pasien</td>
                                    <td>Rp.20.000</td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-success" href="<?= base_url('/apoteker/home') ?>" role="button">Selesai</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>