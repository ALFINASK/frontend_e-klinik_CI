<?= $this->extend('layout/templateAdministrasi'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Daftar Antrian</h2>
                        <p>Daftar antrian pasien yang melakukan pemeriksaan pada hari ini</p>
                        <br>
                        <div id="antrian-berlangsung">
                            <form>
                                <fieldset disabled>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="disabledTextInput" class="col-sm-2 col-form-label">Dokter</label>
                                                <div class="col-sm-4">
                                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Hermawan">
                                                </div>
                                                <label for="disabledTextInput" class="col-sm-1 col-form-label">Poli</label>
                                                <div class="col-sm-5">
                                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Umum">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="disabledTextInput" class="col-sm-7 col-form-label">No. Urut yang sedang ditangani</label>
                                                <div class="col-sm-5">
                                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label for="disabledTextInput" class="col-sm-2 col-form-label">Dokter</label>
                                                <div class="col-sm-4">
                                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Riana">
                                                </div>
                                                <label for="disabledTextInput" class="col-sm-1 col-form-label">Poli</label>
                                                <div class="col-sm-5">
                                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Gigi">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="disabledTextInput" class="col-sm-7 col-form-label">No. Urut yang sedang ditangani</label>
                                                <div class="col-sm-5">
                                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>
                        <br>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No. Urut</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Jenis Pengobatan</th>
                                    <th scope="col">Dokter</th>
                                    <th scope="col">Petugas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Sintia</td>
                                    <td>Gigi</td>
                                    <td>Riana</td>
                                    <td>Fitri</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Bagas</td>
                                    <td>Umum</td>
                                    <td>Riana</td>
                                    <td>Fitri</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Rania</td>
                                    <td>Umum</td>
                                    <td>Hermawan</td>
                                    <td>Fitri</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Bima</td>
                                    <td>Gigi</td>
                                    <td>Riana</td>
                                    <td>Fitri</td>
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