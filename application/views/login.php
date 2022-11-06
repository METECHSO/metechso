<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Aplikasi Stok Barang</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.ico'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <style>
        body {
            font-family: Roboto;
            color: #4d4d4d;
            background: #1d1919;
        }

        .jumbotron {
            background: rgba(100%, 100%, 100%, 0.1);
            color: #555;
        }

        .jumbotron label {
            color: #fff;
        }

        .login {
            width: 242px;
            height: 121px;
        }

        .btn-warning {
            background: #b307b3;
            border-color: #b307b3;
        }

        .btn-warning:hover {
            background: #cf1ecf;
            border-color: #cf1ecf;
        }

        .error-message {
            font-size: 13px;
        }
    </style>
</head>

<body class="img js-fullheight" style="background-image: url(<?php echo base_url() ?>/assets/img/bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center mt-5 mb-3">
                <script type="text/javascript">
                    document.write("<center><font size=+3 style='color: white;'>");
                    var day = new Date();
                    var hr = day.getHours();
                    if (hr >= 0 && hr < 12) {
                        document.write("Good Morning!");
                    } else if (hr == 12) {
                        document.write("Good Noon!");
                    } else if (hr >= 12 && hr <= 17) {
                        document.write("Good Afternoon!");
                    } else {
                        document.write("Good Evening!");
                    }
                    document.write("</font></center>");
                </script>
                <br>
                <img src="<?= base_url('assets/img/logo.png'); ?>" class="login" />
                <h3 class="text-white mt-2">Aplikasi Stok Barang</h3>
                <br>
                <h3 class="text-white mt-2">silahkan login</h3>
                <?php
                if ($this->session->flashdata('alert')) {
                    echo '<div class="col-md-4 offset-md-4 mt-2"><div class="alert alert-danger" role="alert">
                    ' . $this->session->flashdata('alert') . '
                </div></div>';
                }
                ?>

            </div>
            <div class="col-md-4 col-sm-12 offset-md-4">
                <div class="jumbotron py-3 pt-4">
                    <?= form_open(); ?>

                    <div class="form-group">
                        <label for="username"><i class="fa fa-user"></i> Username</label>
                        <input type="text" class="form-control form-control-user <?= (form_error('username')) ? 'is-invalid' : ''; ?>" name="username" id="username" placeholder="Username" autocomplete="off" value="<?= set_value('username'); ?>">
                        <div class="invalid-feedback">
                            <?= form_error('username', '<p class="error-message">', '</p>'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password"><i class="fa fa-lock"></i> Password</label>
                        <input type="password" class="form-control form-control-user <?= (form_error('password')) ? 'is-invalid' : ''; ?>" id="password" placeholder="Password" autocomplete="off" name="password">
                        <div class="invalid-feedback">
                            <?= form_error('password', '<p class="error-message">', '</p>'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" value="submit" class="btn btn-success btn-user btn-block">Sign In <i class="fa fa-sign-in"></i></button>
                    </div>

                    <div class="clearfix"></div>
                    <?= form_close(); ?>
                </div>
                <p class="text-white text-center">METECHSO &copy; <script>
                        document.write(new Date().getFullYear());
                    </script> All Rights Reserved
                </p>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>