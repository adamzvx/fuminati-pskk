<?php
defined('BASEPATH') or exit('No direct script access allowed');
$bases = "http://localhost/ciakad3/as/atur/dist/"
?>
<?php $this->load->view('layout/aturhead')  ?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <?php $this->load->view('layout/aturnav') ?>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <!-- <h1 class="mt-4">Data Semua Mahasiswa</h1> -->

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Semua Mahasiswa Institut Teknologi Bisnis Indonesia Kampus Milenial
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Nim</th>
                                        <th>Jurusan</th>
                                        <!-- <th>TTL</th> -->
                                        <th>No Hp</th>
                                        <th>Kampus</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($mhs as $mhs) : ?>
                                        <tr>
                                            <td><?= $mhs->nama; ?></td>
                                            <td><?= $mhs->nim; ?></td>
                                            <td><?= $mhs->jurusan; ?></td>
                                            <!-- <td><?= $mhs->tempat_lahir; ?>, <?= $mhs->tgl_lahir; ?></td> -->
                                            <td><?= $mhs->nohp; ?></td>
                                            <td><?= $mhs->kampus; ?></td>
                                            <td>
                                                <a class="btn btn-primary" href="<?= base_url('atur/detailmhs/' . $mhs->id); ?>"> <i class="fas fa-pen"></i> </a>
                                                <a class="btn btn-danger" href="<?= base_url('atur/hapusmhs/' . $mhs->id); ?>"> <i class="fas fa-trash"></i> </a>
                                                <a class="btn btn-warning" href="<?= base_url('atur/cetakmhs/' . $mhs->id); ?>"> <i class="fas fa-print"></i> </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
</div>
<?php $this->load->view('layout/aturfoot'); ?>