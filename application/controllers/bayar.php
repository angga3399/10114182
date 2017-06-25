<?php
class bayar extends CI_Controller {
    //pembayaran

    public function __construct() 
     {
        parent::__construct();
        $this->load->model(array('m_login','m_bayar'));
        $this->load->database();
        $this->load->helper(array('form', 'url'));
    }

    public function pembayaran()
    {
        $user = $this->session->userdata('username');
        $this->data['admin'] = $this->m_login->data_admin($user);
          
        $bayar['bayar'] = $this->m_bayar->selectAll();
        $this->load->view('admin/header',$this->data);
        $this->load->view('admin/pembayaran', $bayar);
        $this->load->view('admin/footer');
    }

  function bukti_pembayaran($id_pesan) 
  {
    if($_POST==NULL) {
        $user = $this->session->userdata('username_customer');
        $this->data['customer'] = $this->m_login->data($user);
        
        $this->load->model('m_bayar');
        $bayar['bayar'] = $this->m_bayar->select($id_pesan);
        
        $this->load->view('header',$this->data);
        $this->load->view('bukti_bayar',$bayar);
        $this->load->view('footer');
    }else{
        $this->m_bayar->insert();
    }
  }

    function status($id_pembayaran)
    {
          $this->m_bayar->status($id_pembayaran);
          redirect('bayar/pembayaran');
    }

    function delete($id_pembayaran)
    {
          $user = $this->session->userdata('username');
          $this->data['admin'] = $this->m_login->data_admin($user);
          
          $hapusfoto= $this->m_bayar->getBayar($id_pembayaran);

          unlink("./assets/gambar/".$hapusfoto->bukti_pembayaran);
          $this->m_bayar->delete($id_pembayaran);
          
          $bayar['pesan'] ='Berhasil di Hapus';
          $bayar['bayar'] = $this->m_bayar->selectAll();
          
          $this->load->view('admin/header',$this->data);
          $this->load->view('admin/pembayaran',$bayar);
          $this->load->view('admin/footer');
    }
}

?>
