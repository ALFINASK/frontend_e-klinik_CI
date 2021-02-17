<?= $this->extend('layout/templatePasien'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <section style="padding-top: 120px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title" data-aos="fade-right">
                    <h2>Pendaftaran berhasil</h2>
                    <p>Mohon tunggu, pendaftaran anda akan segera diproses oleh petugas pendaftaran.<br>
                        Setelah pendaftaran telah selesai diproses, pasien akan mendapat nomor urut untuk dilakukan pemeriksaan oleh Dokter yang bertugas.
                    </p>
                </div>
            </div>
        </div>
        <a class="btn btn-success" href="<?= base_url('/pasien/antrian') ?>">Lihat Antrian</a>
    </section>
</div>
<?= $this->endSection(); ?>