<?php
defined('BASEPATH') or exit('No direct script access allowed');
// xxxx
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pendaftaran Perlombaan AI</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= "http://localhost/keke-daftarai/" ?>/as/ai/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= "http://localhost/keke-daftarai/" ?>/as/ai/css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">KekeAI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="welcome/adminlogin">admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <header class="bg-primary text-white">
        <div class="container text-center">
            <h1>Sudah Siapkah Dirimu ?</h1>
            <p class="lead">Ikuti perlombaan Arttificial Intellegence Teerbesar di Jawa Tengah</p>
        </div>
    </header> -->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="font-weight-light">Sudah Siapkah Dirimu ?</h1>
                    <p class="lead">Ikuti perlombaan Arttificial Intellegence Teerbesar di Jawa Tengah</p>
                </div>
            </div>
        </div>
    </header>
    <style>
        .masthead {
            height: 20vh;
            min-height: 500px;
            background-image: url('https://images.unsplash.com/photo-1531747118685-ca8fa6e08806?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTJ8fGFydGlmaWNpYWwlMjBpbnRlbGxpZ2VuY2UlMjByb2JvdHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Pendaftaran AI</h2>

                    <form action="welcome/prosesdaftar" method="POST">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input required name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input required name="nama" type="text" class="form-control" id="inputnama" placeholder="Nama Lengkap">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputinstansi" class="col-sm-2 col-form-label">Instansi</label>
                            <div class="col-sm-10">
                                <input required name="instansi" type="text" class="form-control" id="inputinstansi" placeholder="Asal Instansi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputproduk" class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-10">
                                <input required name="produk" type="text" class="form-control" id="inputproduk" placeholder="Robot Cerdas XX, Aplikasi Deteksi XX, dll">
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Kategrori</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input name="kat" class="form-check-input" type="radio" id="gridRadios1" value="bigdata" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Big Data
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="kat" class="form-check-input" type="radio" id="gridRadios2" value="iot">
                                        <label class="form-check-label" for="gridRadios2">
                                            Internet Of Things
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kat" id="gridRadios3" value="ml">
                                        <label class="form-check-label" for="gridRadios3">
                                            Machine Learning
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Meriah Setiap Tahun</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li> Illo eaque, laborum cupiditate consectetur molestiae rerum, at vel reiciendis sapiente a, ducimus culpa </li>
                        <li>magnam incidunt saepe! Nam nobis tempora corporis vitae.</li>
                        <li>Minimal custom magnam incidunt saepe! Nam nobis tempora corporis vitae.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Contact us</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Keke AI 2021</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= "http://localhost/keke-daftarai/" ?>/as/ai/vendor/jquery/jquery.min.js"></script>
    <script src=" <?= "http://localhost/keke-daftarai/" ?>/as/ai/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src=" <?= "http://localhost/keke-daftarai/" ?>/as/ai/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src=" <?= "http://localhost/keke-daftarai/" ?>/as/ai/js/scrolling-nav.js"></script>

</body>