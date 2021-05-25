<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Atur extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('ses_admin'))) {
            echo ('kamu tidak ada akses, KELUAR !!!');
            redirect(base_url());
        }
        $this->load->model('atur_model');
    }

    public function index()
    {
        echo ('KE HALAMAN ADMIN' . $this->session->userdata('ses_admin'));
        $this->load->view('vatur');
    }

    public function proses()
    {
    }

    public function semuamahasiswa()
    {
        echo ('ambil semua mahasiswa');
        $data['mhs'] = $this->atur_model->getsemuamahasiswa()->result();

        $this->load->view('vsemuamahasiswa', $data);
    }

    public function detailmhs($id)
    {
        echo ('Halaman detail mahasiswa dengan id ' . $id . '<br>');
        echo ($id + 5);
    }

    public function hapusmhs($id)
    {
        echo ('Hapus mahasiswa dengan id ' . $id . '<br>');
        echo ('<script>alert("hapus mhs id $id ")</script>');
    }

    public function cetakmhs($id)
    {
        echo ('Print out mahasiswa dengan id ' . $id . '<br>');
        // echo ('<script>alert("hapus mhs id $id ")</script>');
    }

    public function keluar()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
