<?= $this->extend('layout/templateAdministrasi'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Daftar Pasien</h2>
                        <p>Daftar pasien yang akan melakukan pemeriksaan pada hari ini</p>
                        <br>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Jenis Pengobatan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Budi</td>
                                    <td>Gigi</td>
                                    <td>
                                        <a class="btn btn-outline-success" href="<?= base_url('/administrasi/pendaftaran') ?>" role="button">Proses Pendaftaran</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Rani</td>
                                    <td>Umum</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/administrasi/pendaftaran') ?>" role="button">Proses Pendaftaran</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Juna</td>
                                    <td>Umum</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/administrasi/pendaftaran') ?>" role="button">Proses Pendaftaran</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Tiara</td>
                                    <td>Gigi</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/administrasi/pendaftaran') ?>" role="button">Proses Pendaftaran</a></td>
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