<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" />

    <title>Klinik Pratama Karya Asih</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style_login.css') ?>" />
</head>

<body>
    <div class="wrapper fadeInDown zero-raduis">
        <div id="formContent">
            <!-- Icon -->
            <div class="fadeIn first">
                <div class="logo">
                    <a href="<?= base_url() ?>"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" class="img-fluid"></a>
                </div>
                <h2 class="my-5">Sign In</h2>
            </div>

            <!-- Login Form -->
            <form>
                <h3>Username</h3><br>
                <input type="email" id="email" class="fadeIn second zero-raduis" name="email"><br>
                <h3>Password</h3><br>
                <input type="text" id="password" class="fadeIn third zero-raduis" name="password"><br>
                <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div>
                <input type="submit" class="fadeIn fourth zero-raduis" value="login">
                <h3>You don't have a account ?</h3>
                <a type="button" class="fadeIn fourth zero-raduis pc" href="<?= base_url('/register') ?>">Register</a>
                <br> <br>
            </form>
        </div>
        <br>
        <p>Karena tombol login belum dapat digunakan, gunakan link di bawah untuk halaman selanjutnya:</p>
        <div class="row">
            <div class="col">
                <a class="underlineHover" href="<?= base_url('/pasien/home') ?>">Pasien</a>
            </div>
            <div class="col">
                <a class="underlineHover" href="<?= base_url('/administrasi/home') ?>">Petugas Pendaftaran</a>
            </div>
            <div class="col">
                <a class="underlineHover" href="<?= base_url('/dokter/home') ?>">Dokter</a>
            </div>
            <div class="col">
                <a class="underlineHover" href="<?= base_url('/apoteker/home') ?>">Apoteker</a>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>