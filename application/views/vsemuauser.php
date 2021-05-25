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
                        User Yang Belum Konfirmasi
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Jurusan</th>
                                        <!-- <th>TTL</th> -->
                                        <th>Produk</th>
                                        <th>Kategrori</th>
                                        <th rowspan="">ok</th>
                                        <th rowspan="">edit</th>
                                        <th rowspan="">hapus</th>




                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($user as $mhs) : ?>
                                        <tr>
                                            <td><?= $mhs->nama; ?></td>
                                            <td><?= $mhs->email; ?></td>
                                            <td><?= $mhs->instansi; ?></td>
                                            <!-- <td><?= $mhs->tempat_lahir; ?>, <?= $mhs->tgl_lahir; ?></td> -->
                                            <td><?= $mhs->produk; ?></td>
                                            <td><?= $mhs->kat; ?></td>
                                            <td>
                                                <a class="btn " href="<?= base_url('admin/proseskonfirmasi/' . $mhs->id); ?>"> <i class="fas fa-check"></i> </a>
                                            </td>
                                            <td>
                                                <a alt="edit" class="btn " href="<?= base_url('admin/edituser/' . $mhs->id); ?>"> <i class="fas fa-pen"></i> </a>
                                            </td>
                                            <td>
                                                <a alt="edit" class="btn " href="<?= base_url('admin/hapus/' . $mhs->id); ?>"> <i class="fas fa-trash"></i> </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        User Yang Sudah Konfirmasi
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Jurusan</th>
                                        <!-- <th>TTL</th> -->
                                        <th>Produk</th>
                                        <th>Kategrori</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($userk as $mhs) : ?>
                                        <tr>
                                            <td><?= $mhs->nama; ?></td>
                                            <td><?= $mhs->email; ?></td>
                                            <td><?= $mhs->instansi; ?></td>
                                            <!-- <td><?= $mhs->tempat_lahir; ?>, <?= $mhs->tgl_lahir; ?></td> -->
                                            <td><?= $mhs->produk; ?></td>
                                            <td><?= $mhs->kat; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="<?= base_url('welcome/hapus/' . $mhs->id); ?>"> <i class="fas fa-trash"></i> </a>
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