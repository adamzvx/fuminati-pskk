<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('ses_admin'))) {
            echo ('kamu tidak ada akses, KELUAR !!!');
            redirect(base_url());
        }
        $this->load->model('daftar_model');
    }

    public function index()
    {
        // $this->load->view('welcome_message');
        // $this->load->view('vhome');
        $data['user'] = $this->daftar_model->getallu()->result();
        $data['userk'] = $this->daftar_model->getalluk()->result();
        $this->load->view('vsemuauser', $data);
    }

    public function konfirmasiusr()
    {
        $data['user'] = $this->daftar_model->getallu()->result();
        $data['userk'] = $this->daftar_model->getalluk()->result();
        $this->load->view('vsemuauser', $data);
    }
    public function proseskonfirmasi($user)
    {
        $this->daftar_model->updateket($user);
        redirect(base_url() . 'admin');
    }

    public function hapus($user)
    {
        $this->daftar_model->hapus($user);
        redirect(base_url() . 'admin');
    }

    public function edituser($user)
    {
        $data['user'] = $this->daftar_model->getuser($user)->row();
        $this->load->view('vedituser', $data);
    }


    public function prosesedit($user)
    {

        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $instansi = $this->input->post('instansi');
        $produk = $this->input->post('produk');
        $kat = $this->input->post('kat');
        $id = $this->input->post('id');

        $this->daftar_model->edituser($id, $nama,  $email, $instansi, $produk, $kat);
        redirect(base_url() . 'admin');
    }


    public function keluar()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
