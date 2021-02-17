<?= $this->extend('layout/templateApoteker'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Edit Data Obat</h2>
                        <form>
                            <!-- data diri -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example1">Nama Obat</label>
                                        <input type="text" id="form6Example1" class="form-control" value="Aspirin" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example2">Stok</label>
                                        <input type="text" id="form6Example2" class="form-control" value="1300" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example2">Harga</label>
                                        <input type="text" id="form6Example2" class="form-control" value="Rp. 4000" />
                                    </div>
                                </div>
                            </div>

                            <!-- keluhan -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example7">Keterangan</label>
                                <textarea class="form-control" id="form6Example7" rows="4">Pengencer darah</textarea>
                            </div>
                            <a class="btn btn-success" href="<?= base_url('/apoteker/obat') ?>" role="button">Simpan</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>