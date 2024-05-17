<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List Dosen</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url('tampilan/') ?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url('tampilan/') ?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?= base_url('tampilan/') ?>assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-cls-top {
            background-color: #ff8c00;
            border-bottom: none;
        }

        .navbar-brand {
            color: white !important;
        }

        .navbar-brand:hover {
            color: #f8f9fa !important;
        }

        .navbar-default .navbar-side {
            background-color: #ff8c00;
        }

        .sidebar-collapse {
            background-color: #ffffff;
        }

        #main-menu>li>a {
            color: #ff8c00 !important;
            padding: 10px 15px;
            border-radius: 5px;
            margin: 5px 0;
            display: block;
            transition: all 0.3s ease;
        }

        #main-menu>li>a:hover {
            background-color: #ff8c00 !important;
            color: white !important;
            transform: scale(1.05);
        }

        .square-btn-adjust {
            background-color: #ff8c00;
            color: white;
        }

        .square-btn-adjust:hover {
            background-color: #ff6700;
            color: white;
        }

        #page-wrapper {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
        }

        .panel {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .panel-heading {
            background-color: #ff8c00;
            color: white;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .panel-body {
            padding: 15px;
        }

        .table thead {
            background-color: #f8f9fa;
        }

        .btn-danger {
            color: white;
            background-color: #dc3545;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-danger:hover {
            background-color: #c82333;
            color: white;
        }

        .btn-sm {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Universitas Akan Sukses</a>
            </div>
            <div style="color: white; float: right; font-size: 16px;">
                &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Login</a>
                <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="" class="user-image img-responsive" />
                    </li>
                    <li>
                        <a href="/mahasiswa"><i class="fa fa-user "></i> Mahasiswa</a>
                    </li>
                    <li>
                        <a href="/dosen"><i class="fa fa-user "></i> Dosen</a>
                    </li>
                    <li>
                        <a href="/pegawai"><i class="fa fa-user "></i> Pegawai </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Universitas Akan Sukses</h2>
                        <h5>Web Civitas Academica</h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <?= $this->renderSection('isi_content') ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url('tampilan/') ?>assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url('tampilan/') ?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url('tampilan/') ?>assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url('tampilan/') ?>assets/js/custom.js"></script>
</body>

</html>