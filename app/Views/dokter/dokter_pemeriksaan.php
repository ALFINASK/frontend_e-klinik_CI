<?= $this->extend('layout/templateDokter'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Pemeriksaan Pasien Rika</h2>
                        <a class="btn btn-success" href="<?= base_url('/dokter/rekam-medis') ?>" style="float: right;"><i class="bi bi-eye"></i> Rekam Medis</a><br><br>
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
                            </div>

                            <!-- keluhan -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example7">Keluhan yang Dialami</label>
                                <textarea class="form-control" id="form6Example7" rows="4" placeholder="Pusing, panas, sakit tenggorokan, hidung tersumbat" readonly></textarea>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Tekanan Darah</label>
                                <input type="text" id="form6Example3" class="form-control" placeholder="90/60 mmHg" readonly />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example5">Suhu Tubuh</label>
                                <input type="text" id="form6Example5" class="form-control" placeholder="37.5°C" readonly />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example4">Berat Badan</label>
                                <input type="text" id="form6Example4" class="form-control" placeholder="55 kg" readonly />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example7">Hasil Pemeriksaan / Analisis Penyakit yang dialami Pasien</label>
                                <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example4">Resep Obat</label>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label" for="form6Example1">Nama Obat</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Nama Obat</option>
                                                <option value="1">Acarbose</option>
                                                <option value="2">Famotidine</option>
                                                <option value="3">Kalsium Asetat</option>
                                                <option value="4">...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-outline">
                                            <label class="form-label" for="form6Example2">Waktu</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Waktu</option>
                                                <option value="1">1 x 1 hari</option>
                                                <option value="2">2 x 1 hari</option>
                                                <option value="3">3 x 1 hari</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-outline">
                                            <label class="form-label" for="form6Example2">Aturan</label><select class="form-select" aria-label="Default select example">
                                                <option selected>Sesudah / sebelum makan</option>
                                                <option value="1">Sesudah Makan</option>
                                                <option value="2">sebelum Makan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <br><i class="bi bi-plus-square" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-success" href="<?= base_url('/dokter/home') ?>">Selesai</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>