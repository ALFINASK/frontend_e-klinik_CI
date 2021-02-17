<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Klinik Pratama Karya Asih</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style_login.css') ?>" />
</head>

<body>
    <div class="wrapper fadeInDown zero-raduis">
        <div id="formContentRegister">
            <!-- Icon -->
            <div class="fadeIn first">
                <div class="logo">
                    <a href="<?= base_url() ?>"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" class="img-fluid"></a>
                </div>
                <h2 class="my-5">Sign Up</h2>
            </div>

            <!-- Login Form -->
            <form>
                <!-- <form> -->
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
                <!-- </form> -->
                <!-- <div class="form-group row">
                    <div class="col md-2">
                        <h3>Nama Lengkap</h3>
                    </div>
                    <div class="col md-10">
                        <input type="email" id="email" class="fadeIn second zero-raduis" name="email">
                    </div>
                </div>
                <h3>Tempat Tanggal Lahir</h3><br>
                <input type="text" id="password" class="fadeIn third zero-raduis" name="login"><br>
                <h3>Nomor KTP</h3><br>
                <input type="text" id="password" class="fadeIn third zero-raduis" name="login"><br>
                <h3>Username</h3><br>
                <input type="email" id="email" class="fadeIn second zero-raduis" name="email"><br>
                <h3>Password</h3><br>
                <input type="text" id="password" class="fadeIn third zero-raduis" name="login"><br>
                <h3>Role</h3><br>
                <select class="form-select fadeIn third zero-raduis" type="text" aria-label="Default select example">
                    <option selected>Pasien</option>
                    <option value="1">Administrasi</option>
                    <option value="2">Dokter</option>
                    <option value="3">Apoteker</option>
                </select> -->
                <div class="row">
                    <div class="col">
                        <a type="button" class="fadeIn fourth zero-raduis pc" href="<?= base_url('/login') ?>">Register</a>
                    </div>
                    <div class="col">
                        <a type="button" class="fadeIn fourth zero-raduis pc" href="<?= base_url('/login') ?>">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>