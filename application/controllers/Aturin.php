<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aturin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!empty($this->session->userdata('ses_admin'))) {
            redirect(base_url('/atur'));
        }
    }

    public function index()
    {
        // $this->load->view('welcome_message');
        $this->load->view('vaturin');
    }

    public function proses()
    {
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');



        if ($user === 'admin' && $pass == '098765432123') {
            $this->session->set_userdata('ses_admin', TRUE);
            $this->session->set_userdata('username', 'admin');
            redirect(base_url('/admin'));
        }
        echo ("<script>alert('username atau password salah'); window.location.href = '" . base_url('/aturin')  . "'</script>");
        // echo $this->session->set_flashdata('pesangagal', 'username atau password salah ');
        // redirect(base_url('/aturin'));
    }
    public function keluar()
    {
        $this->session->sess_destroy();
    }
}
