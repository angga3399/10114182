<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
  
  public function __construct() 
  {
     parent::__construct();
     $this->load->model(array('m_login','m_customer','m_pesan','m_jadwal_pertandingan','m_bayar','m_admin'));
     $this->load->database();
     $this->load->helper(array('form', 'url'));

  }

   public function index()
  {
      if ($this->session->userdata('username')==NULL) {
        $this->load->view('admin/index');             
      }else{
        redirect('admin/home');
      }
  }

  public function home()
  {
    if ($this->session->userdata('username')==NULL) {
      $this->load->view('admin/index');             
    }else{
        $user = $this->session->userdata('username');
        $total['total'] = $this->m_customer->count_all();
        $total['totalPesan'] = $this->m_pesan->count_all();
        $total['jadwal'] = $this->m_jadwal_pertandingan->count_all();
        $total['bayar'] = $this->m_bayar->count_all();
      
        $this->data['admin'] = $this->m_login->data_admin($user);
        $this->load->view('admin/header',$this->data);
        $this->load->view('admin/home',$total);
        $this->load->view('admin/footer');
    }
  }

  function admin()
    {
      if ($this->session->userdata('username')==NULL) {
        $this->load->view('admin/index');             
      }else{
        $user = $this->session->userdata('username');
        $this->data['admin'] = $this->m_login->data_admin($user);
          
        $admin['mimin'] = $this->m_admin->selectAll();
        $this->load->view('admin/header',$this->data);
        $this->load->view('admin/admin', $admin);
        $this->load->view('admin/footer');
      }
    }

  function tambah()
  {
    if ($this->session->userdata('username')==NULL) {
      $this->load->view('admin/index');             
    }else{ 
        $kode = 'admin';
        $user = $this->session->userdata('username');
        $this->data['admin'] = $this->m_login->data_admin($user);
      
        if($_POST==NULL) { 
          
        $admin['kode'] = $this->m_admin->getkodeunik($kode);
        $this->load->view('admin/header',$this->data);
        $this->load->view('admin/tambahAdmin', $admin);
        $this->load->view('admin/footer');
        }else{
          $this->m_admin->input(); 

          $admin['pesan'] ='Berhasil di Tambah';
          $admin['mimin'] = $this->m_admin->selectAll();

          $this->load->view('admin/header',$this->data);
          $this->load->view('admin/admin',$admin);
          $this->load->view('admin/footer');     
        }
      }
    }

  function setting($id_admin)
  {
    if ($this->session->userdata('username')==NULL) {
      $this->load->view('admin/index');             
    }else{
      if($_POST==NULL){
        $user = $this->session->userdata('username');
        $this->data['admin'] = $this->m_login->data_admin($user);

        $this->load->view('admin/header',$this->data);
        $this->load->view('admin/setting');
        $this->load->view('admin/footer');
      }elseif ($_POST['nama']=!NULL && $_POST['email']=!NULL && $_POST['sandi_admin']==NULL) {
        
        $admin['pesan1'] ='Berhasil di edit';
        $this->m_admin->edit($id_admin);
        
        $user = $this->session->userdata('username');
        $this->data['admin'] = $this->m_login->data_admin($user);
        
        $this->load->view('admin/header',$this->data);
        $this->load->view('admin/setting',$admin);
        $this->load->view('admin/footer');
      }elseif ($_POST['username']=!NULL && $_POST['sandi']=!NULL){
        $password = $this->input->post('password_admin');
        $password_lama = $this->input->post('sandi_admin');
        $password_baru = $this->input->post('sandi_baru_admin');
        $password_konf = $this->input->post('konf_sandi_admin');
       
        if ($password == md5($password_lama)) {
          if (md5($password_baru) == md5($password_konf)) {
            $this->m_admin->edit($id_admin);
            redirect('admin/logout');
          }else{
            $admin['pesan'] = 'Password baru tidak sesuai dengan Konfirmasi password';  
          }//validasi password baru dengan konfirmasi password
                
        }else{
          $admin['pesan'] = 'password lama salah';
        }//validasi password lama
          $user = $this->session->userdata('username');
          $this->data['admin'] = $this->m_login->data_admin($user);
        
          $this->load->view('admin/header',$this->data);
          $this->load->view('admin/setting',$admin);
          $this->load->view('admin/footer');
      }//validsi password baru

    }//validsi login
  }

  function logout()
  {
        $this->session->sess_destroy();         
        redirect('admin','refresh');
  }
  
}
?>