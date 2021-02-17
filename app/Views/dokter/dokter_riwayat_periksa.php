<?= $this->extend('layout/templateDokter'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Riwayat Periksa</h2>
                        <p>Riwayat pemeriksaan yang ditangani oleh dr. Hermawan di Klinik Pratama "Karya Asih"</p><br>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Pasien</th>
                                    <th scope="col">Tanggal Periksa</th>
                                    <th scope="col">No. Urut</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiara</td>
                                    <td>21-09-2020</td>
                                    <td>1</td>
                                    <td>Radang Tenggorokan</td>
                                </tr>
                                <tr>
                                    <td>Januar</td>
                                    <td>21-09-2020</td>
                                    <td>2</td>
                                    <td>Asam Lambung</td>
                                </tr>
                                <tr>
                                    <td>Lani</td>
                                    <td>02-11-2020</td>
                                    <td>2</td>
                                    <td>Maag</td>
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