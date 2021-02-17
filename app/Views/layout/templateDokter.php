<?= $this->extend('layout/layout'); ?>

<?= $this->section('header'); ?>
<!-- Header -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
        <div class="header-container d-flex align-items-center justify-content-between">
            <div class="logo">
                <a href="<?= base_url('/dokter/home') ?>"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" class="img-fluid"></a>
            </div>

            <!-- navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="<?= base_url('/dokter/home') ?>">Beranda</a></li>
                    <li><a class="nav-link" href="<?= base_url('/dokter/riwayat-periksa') ?>">Riwayat Periksa</a></li>
                    <li><a class="logout" href="<?= base_url('/login') ?>" style="text-decoration: none;">Logout</a></li>
                </ul>
            </nav>

        </div>
    </div>
</header>

<?= $this->renderSection('content') ?>
<?= $this->endSection(); ?>