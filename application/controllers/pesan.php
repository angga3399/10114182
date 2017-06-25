<?php
class pesan extends CI_Controller {
	
     public function __construct() 
     {
     parent::__construct();
     $this->load->model(array('m_login','m_pesan','m_jadwal_pertandingan'));
     $this->load->database();
     $this->load->helper(array('form', 'url'));
    }
    //kelola customer
    function form_pemesanan($id_jadwal) 
  	{
      if ($this->session->userdata('username_customer')==NULL) {
        redirect('awayday');             
      }else{
        if ($_POST==NULL) {
        $kode = 'pemesanan';
        $pesan['kodeunik'] = $this->m_pesan->getkodeunik($kode);
        $pesan['jadwal'] = $this->m_jadwal_pertandingan->select($id_jadwal);
        $user = $this->session->userdata('username_customer');
        $this->data['customer'] = $this->m_login->data($user);
        $this->load->view('header',$this->data);
        $this->load->view('pemesanan',$pesan);
        $this->load->view('footer');
        }else{
          $this->m_pesan->input();     
          redirect('awayday');     
        }
      }
    }

    function lihatPesan($id_jadwal) 
    {
      if ($this->session->userdata('username_customer')==NULL) {
        redirect('awayday');             
      }else{
        if ($_POST==NULL) {
        $user = $this->session->userdata('username_customer');
        $this->data['customer'] = $this->m_login->data($user);
        
        $pesan['pesan'] = $this->m_pesan->lihat($id_jadwal);
        $this->load->view('header',$this->data);
        $this->load->view('lihatPesan',$pesan);
        $this->load->view('footer');
      }else{
        $this->m_pesan->input();     
        redirect('awayday');   
      }
    }
    }

    //kelola admin
    function pesan(){
          $user = $this->session->userdata('username');
          $this->data['admin'] = $this->m_login->data_admin($user);
          
          $pesan['pesan'] = $this->m_pesan->selectAll();

          $this->load->view('admin/header',$this->data);
          $this->load->view('admin/pesan', $pesan);
          $this->load->view('admin/footer');
    }

    function lihat($id_pesan){
          $user = $this->session->userdata('username');
          $this->data['admin'] = $this->m_login->data_admin($user);
          
          $pesan['pesan'] = $this->m_pesan->getPesan($id_pesan);

          $this->load->view('admin/header',$this->data);
          $this->load->view('admin/lihatPesan', $pesan);
          $this->load->view('admin/footer');
    }

    function delete($id_pesan){
          $user = $this->session->userdata('username');
          $this->data['admin'] = $this->m_login->data_admin($user);
          
          $this->m_pesan->delete($id_pesan);
          
          $pesan['pesannotif'] ='Berhasil di Hapus';
          $pesan['pesan'] = $this->m_pesan->selectAll();
          
          $this->load->view('admin/header',$this->data);
          $this->load->view('admin/pesan',$pesan);
          $this->load->view('admin/footer');
    }
}
?>
