<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/') ?>favicon.png">
    <link href="<?= base_url('assets/css/') ?>style.css" rel="stylesheet">
    <script src="<?= base_url("assets/sweetalert2/dist/") ?>sweetalert2.all.min.js"></script>

</head>

<body class="vh-100"
    style="background-image: url('<?= base_url('assets/images/') ?>supermarket.png'); background-size: cover; background-position: center; background-repeat: no-repeat; overflow: hidden;">
    <div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;">
    </div>
    <div class="authincation h-100" style="position: relative; z-index: 2;">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-4">
                    <div class="authincation-content" style="border-radius: 1rem;">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <?= $this->session->flashdata('success') ?>
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="<?= base_url('assets/images/svg/') ?>walmart.svg"
                                                width="180px" alt=""></a>

                                    </div>
                                    <form method="post" action="<?= base_url('Auth/aksi') ?>">
                                        <div class="mb-3">
                                            <!-- <label class="mb-1"><strong>Name :</strong></label> -->
                                            <input type="name" name="username"
                                                class="form-control border-primary rounded-3" value=""
                                                placeholder="Name">
                                        </div>
                                        <div class="mb-3">
                                            <!-- <label class="mb-1"><strong>Password :</strong></label> -->
                                            <input type="password" name="password"
                                                class="form-control border-primary rounded-3" value=""
                                                placeholder="Password">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-block rounded-3"
                                                style="font-size: 20px; background-color: #0078BE; border-color: #0078BE; color: #fff;">Login</button>
                                        </div>
                                    </form>
                                    <!-- Tampilkan Alert dari Flashdata -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url('vendor/global/global.min.js'); ?>"></script>
    <script src="<?= base_url('js/custom.min.js'); ?>"></script>
    <script src="<?= base_url('js/dlabnav-init.js'); ?>"></script>
    <script src="<?= base_url('js/styleSwitcher.js'); ?>"></script>
</body>


</html>