<?= $this->extend('layout/templateAdministrasi'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Keluhan Pasien</h2>
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
                            </div>

                            <!-- keluhan -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example7">Keluhan yang Dialami</label>
                                <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Tekanan Darah</label>
                                <input type="text" id="form6Example3" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example5">Suhu Tubuh</label>
                                <input type="text" id="form6Example5" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example4">Berat Badan</label>
                                <input type="text" id="form6Example4" class="form-control" />
                            </div>

                            <a class="btn btn-success" href="<?= base_url('/administrasi/pembayaran') ?>" role="button">Konfirmasi Pembayaran</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>