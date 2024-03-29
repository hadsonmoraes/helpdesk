<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <base href="<?= base_url(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?> - <?= $site_name; ?></title>
    <!-- Favicon-->
    <?php if ($site_favicon != NULL) { ?>
        <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>uploads/site/<?= $site_favicon; ?>">
    <?php } else { ?>
        <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.png">
    <?php } ?>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/bootstrap/css/bootstrap.min.css">
    <!-- LineIcons-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/LineIcons/LineIcons.css">
    <!-- Feather Font-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/feather-font/css/iconfont.css">
    <!-- Ladda Loader-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/ladda/ladda-themeless.min.css">
    <!-- Toast-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/toast/jquery.toast.min.css">
    <!-- Style-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashboard.css">
</head>

<body class="app app-login">
    <!-- *****LOGIN***** -->
    <!-- Section Starts-->
    <section class="login-holder">
        <!-- Container Starts-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-5 mx-auto">
                    <!-- Login Card Starts-->
                    <div class="card card-signin mt20 mb20">
                        <div class="card-body">
                            <div class="text-center mb20 app-logo">
                                <?php if ($site_logo != NULL) { ?>
                                    <img src="<?= base_url(); ?>uploads/site/<?= $site_logo ?>" alt="<?= $site_name ?>">
                                <?php } else { ?>
                                    <img src="<?= base_url(); ?>assets/images/admin-logo.png" alt="<?= $site_name ?>">
                                <?php } ?>
                            </div>
                            <h5 class="card-title text-center"><b><?= $this->lang->line("text_signin_title"); ?></b></h5>
                            <form id="loginForm" method="POST" class="form-signin">
                                <div class="form-group">
                                    <input class="form-control" id="inputEmail" type="email" name="email" placeholder="<?= $this->lang->line("text_enter_email"); ?>" maxlength="256" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="inputPassword" type="password" placeholder="<?= $this->lang->line("text_enter_password"); ?>" name="password" maxlength="20">
                                </div>
                                <div class="form-group">
                                    <input class="checkradios" type="checkbox" name="remember"><span class="list-label"><?= $this->lang->line("text_remember_password"); ?></span>
                                </div>
                                <button id="loginButton" class="btn btn-lg btn-oval btn-theme-primary btn-block text-uppercase ladda-button" data-style="zoom-in" data-size="l" type="submit"><span class="ladda-label"><?= $this->lang->line("text_signin"); ?></span></button>
                            </form>
                        </div>
                        <div class="card-footer p15 text-center">
                            <p><?= $this->lang->line("text_helpme"); ?> <a class="text-theme-secondary" href="<?= base_url(); ?>admin/forgot-password"><?= $this->lang->line("text_i_forgot_password"); ?></a></p>
                        </div>
                    </div>
                    <!-- Login Card Ends-->
                </div>
            </div>
        </div>
        <!--Container Ends-->
    </section>

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/vendors/jquery/jquery.min.js"></script>
    <!--Popper-->
    <script src="<?= base_url(); ?>assets/vendors/popper.js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="<?= base_url(); ?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <!-- Jquery Validation-->
    <script src="<?= base_url(); ?>assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <!--Toast-->
    <script src="<?= base_url(); ?>assets/vendors/toast/jquery.toast.min.js"></script>
    <!--Ladda Loader-->
    <script src="<?= base_url(); ?>assets/vendors/ladda/spin.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/ladda/ladda.min.js"></script>
    <!-- Auth Js-->
    <script src="<?= base_url(); ?>assets/js/admin/auth.js"></script>
</body>

</html>