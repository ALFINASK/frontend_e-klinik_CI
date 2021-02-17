<?= $this->extend('layout/templateAdministrasi'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>pembayaran</h2>
                        <form>
                            <!-- data diri -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example1">Nama Pasien</label>
                                        <input type="text" id="form6Example1" class="form-control" placeholder="Budi" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example2">No. KTP</label>
                                        <input type="text" id="form6Example2" class="form-control" placeholder="325672954266299" />
                                    </div>
                                </div>
                                <div class="col">
                                    <label class="form-label" for="form6Example7">Alamat</label>
                                    <input type="text" id="form6Example2" class="form-control" placeholder="Jln. Rajawali Timur, Kota Bandung" />
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
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Pengobatan Umum</td>
                                    <td>Rp. 50.000</td>
                                    <td>1</td>
                                    <td>Rp.50.000</td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="font-weight: bold;">Total</td>
                                    <td>Rp. 50.000</td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-success" href="<?= base_url('/administrasi') ?>" role="button">Selesai</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>