<?php
class awayday extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model(array('m_login','m_jadwal_pertandingan'));
  	 	$this->load->database();
	}

	public function index()
	{
    $user = $this->session->userdata('username_customer');
    $this->data['customer'] = $this->m_login->data($user);
		$this->load->view('header',$this->data);
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function jadwal()
	{
    	$this->load->model('m_pesan');
    	$user = $this->session->userdata('username_customer');
   		$this->data['customer'] = $this->m_login->data($user);
   		$this->load->model('m_jadwal_pertandingan');
    	$jadwal['jadwal'] = $this->m_jadwal_pertandingan->selectAll();
    	$this->load->view('header',$this->data);
    	$this->load->view('jadwal', $jadwal);
    	$this->load->view('footer');
	}

	public function bonjoming()
	{
        $user = $this->session->userdata('username_customer');
        $this->data['customer'] = $this->m_login->data($user);
        $this->load->view('header',$this->data);
        $this->load->view('bonjoming');
        $this->load->view('footer');
	}

	public function tiket_gratis()
	{
        $user = $this->session->userdata('username_customer');
        $this->data['customer'] = $this->m_login->data($user);
        $this->load->view('header',$this->data);
        $this->load->view('tiket_gratis');
        $this->load->view('footer');
	}

	public function tentang()
	{
        $user = $this->session->userdata('username_customer');
        $this->data['customer'] = $this->m_login->data($user);
        $this->load->view('header',$this->data);
        $this->load->view('tentang');
        $this->load->view('footer');
	}

	public function bantuan()
	{
        $user = $this->session->userdata('username_customer');
        $this->data['customer'] = $this->m_login->data($user);
        $this->load->view('header',$this->data);
        $this->load->view('bantuan');
        $this->load->view('footer');
	}

    public function pembayaran($no_ktp)
  	{
  		$this->load->model('m_bayar');
    	$user = $this->session->userdata('username_customer');
    	$this->data['customer'] = $this->m_login->data($user);
    	$bayar['bayar'] = $this->m_bayar->pembayaran($no_ktp);
    	$this->load->view('header',$this->data);
    	$this->load->view('pembayaran', $bayar);
    	$this->load->view('footer');
  	}
}
?>
