<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jadwal extends CI_Controller {
  
  public function __construct() 
  {
     parent::__construct();
     $this->load->model(array('m_login','m_jadwal_pertandingan'));
     $this->load->database();
     $this->load->helper(array('form', 'url'));

  }

  //membuat fungsi crud tabel jadwal
    function jadwal()
    {
          $jadwal['jadwal'] = $this->m_jadwal_pertandingan->selectAll();

          $user = $this->session->userdata('username');
          
          $this->data['admin'] = $this->m_login->data_admin($user);
          $this->load->view('admin/header',$this->data);
          $this->load->view('admin/jadwal', $jadwal);
          $this->load->view('admin/footer');
          
    }  

    function tambahJadwal()
    {
          $user = $this->session->userdata('username');
          $this->data['admin'] = $this->m_login->data_admin($user);
          
        if($_POST==NULL) {    
          $kode = 'jadwal';  

          $jadwal['kodeunik'] = $this->m_jadwal_pertandingan->getkodeunik($kode);

          $this->load->view('admin/header',$this->data);
          $this->load->view('admin/tambahJadwal',$jadwal);
          $this->load->view('admin/footer');
        }else{
          $this->m_jadwal_pertandingan->input(); 

          $jadwal['pesan'] ='Berhasil di Tambah';
          $jadwal['jadwal'] = $this->m_jadwal_pertandingan->selectAll();

          $this->load->view('admin/header',$this->data);
          $this->load->view('admin/jadwal',$jadwal);
          $this->load->view('admin/footer');     
        }
    }
    
    function deleteJadwal($id_jadwal)
    {
          $user = $this->session->userdata('username');
          $this->data['admin'] = $this->m_login->data_admin($user);
          
          $this->m_jadwal_pertandingan->delete($id_jadwal);
          
          $jadwal['pesan'] ='Berhasil di Hapus';
          $jadwal['jadwal'] = $this->m_jadwal_pertandingan->selectAll();
          
          $this->load->view('admin/header',$this->data);
          $this->load->view('admin/jadwal',$jadwal);
          $this->load->view('admin/footer');
    }

    function editJadwal($id_jadwal) 
    {
                $user = $this->session->userdata('username');
                $this->data['admin'] = $this->m_login->data_admin($user);
                
            if($_POST==NULL) {
                $data['jadwal'] = $this->m_jadwal_pertandingan->select($id_jadwal);
                
                $this->load->view('admin/header',$this->data);
                $this->load->view('admin/editjadwal',$data);
                $this->load->view('admin/footer');
            }else {
                $this->m_jadwal_pertandingan->update($id_jadwal);
                
                $jadwal['pesan'] ='Berhasil di Edit';
                $jadwal['jadwal'] = $this->m_jadwal_pertandingan->selectAll();

                $this->load->view('admin/header',$this->data);
                $this->load->view('admin/jadwal',$jadwal);
                $this->load->view('admin/footer');
            }
    }

    function lihatJadwal($id_jadwal) 
    {
                $user = $this->session->userdata('username');
                $this->data['admin'] = $this->m_login->data_admin($user);
                
                $data['jadwal'] = $this->m_jadwal_pertandingan->select($id_jadwal);
                
                $this->load->view('admin/header',$this->data);
                $this->load->view('admin/lihatJadwal',$data);
                $this->load->view('admin/footer');
    }


    function status($id_jadwal)
    {
            $this->m_jadwal_pertandingan->status($id_jadwal);
            redirect('jadwal/jadwal');
    }
}
?>