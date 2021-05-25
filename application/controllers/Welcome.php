<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
		// if (empty($this->session->userdata('ses_admin'))) {
		//     echo ('kamu tidak ada akses, KELUAR !!!');
		//     redirect(base_url());
		// }
		$this->load->model('daftar_model');
	}

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->view('vhome');
	}

	public function login()
	{
		$this->load->view('vlogin');
	}
	public function prosesdaftar()
	{
		$this->load->model('daftar_model');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$instansi = $this->input->post('instansi');
		$produk = $this->input->post('produk');
		$kat = $this->input->post('kat');

		// $pass = $this->input->post('pass');
		// $pass = password_hash($pass, PASSWORD_DEFAULT);
		$ref  = $this->input->post('ref');
		//tgl
		// date_default_timezone_set("Asia/Jakarta");
		// $tgl = date("Y-m-d H:i:s");
		//proses
		$this->daftar_model->proses($nama, $email, $instansi, $produk, $kat);
		//log
		echo ('<script>alert("terimakasih telah mendaftar, tunggu dihubungi tim kami");</script>');
		redirect(base_url() . 'welcome/ok');
	}
	public function ok()
	{
		echo ('<script>alert("terimakasih telah mendaftar, tunggu dihubungi tim kami");</script>');
		echo ('<script>window.location = "http://localhost/keke-daftarai";</script>');
	}

	// public function konfirmasiusr()
	// {
	// 	$data['user'] = $this->daftar_model->getallu()->result();
	// 	$data['userk'] = $this->daftar_model->getalluk()->result();
	// 	$this->load->view('vsemuauser', $data);
	// }


	public function adminlogin()
	{
		// $this->load->view('welcome_message');
		$this->load->view('vaturin');
	}


	public function prosesadminlogin()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');



		if ($user === 'admin' && $pass == '12345') {
			$this->session->set_userdata('ses_admin', TRUE);
			$this->session->set_userdata('username', 'admin');
			redirect(base_url('/admin'));
		}
		echo ("<script>alert('username atau password salah'); window.location.href = '" . base_url('welcome/adminlogin')  . "'</script>");
		// echo $this->session->set_flashdata('pesangagal', 'username atau password salah ');
		// redirect(base_url('/aturin'));
	}

	// public function proseskonfirmasi($user)
	// {
	// 	$this->daftar_model->updateket($user);
	// 	redirect(base_url() . 'welcome/konfirmasiusr');
	// }

	public function hapus($user)
	{
		$this->daftar_model->updateket($user);
		redirect(base_url() . 'welcome/konfirmasiusr');
	}
}
