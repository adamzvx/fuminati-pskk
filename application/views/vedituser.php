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





    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Edit Peserta AI</h2>
                    <!-- <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p> -->
                    <form action="<?= base_url('admin/prosesedit/') . $user->id ?>" method="POST">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input value="<?= $user->email ?>" required name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input value="<?= $user->nama ?>" required name="nama" type="text" class="form-control" id="inputnama" placeholder="Nama Lengkap">
                                <input name="id" type="hidden" value="<?= $user->id ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputinstansi" class="col-sm-2 col-form-label">Instansi</label>
                            <div class="col-sm-10">
                                <input value="<?= $user->instansi ?>" required name="instansi" type="text" class="form-control" id="inputinstansi" placeholder="Asal Instansi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputproduk" class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-10">
                                <input value="<?= $user->produk ?>" required name="produk" type="text" class="form-control" id="inputproduk" placeholder="Robot Cerdas XX, Aplikasi Deteksi XX, dll">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input required type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div> -->
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
                        <!-- <div class="form-group row">
                            <div class="col-sm-2">Checkbox</div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Example checkbox
                                    </label>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


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