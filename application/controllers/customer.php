<?php
class customer extends CI_Controller {

    public function __construct() 
    {
     parent::__construct();
     $this->load->model(array('m_login','m_customer'));
     $this->load->database();
     $this->load->helper(array('form', 'url'));
    }

    //kelola sama admin
    function customer()
    {
      if ($this->session->userdata('username')==NULL) {
        $this->load->view('admin/index');             
      }else{  
        $customer['customer'] = $this->m_customer->selectAll();

        $user = $this->session->userdata('username');
        
        $this->data['admin'] = $this->m_login->data_admin($user);
        $this->load->view('admin/header',$this->data);
        $this->load->view('admin/customer', $customer);
        $this->load->view('admin/footer');
      }
    }  	

    function lihat($no_ktp)
    {
     if ($this->session->userdata('username')==NULL) {
        $this->load->view('admin/index');             
      }else{
        $customer['customer'] = $this->m_customer->select($no_ktp);

        $user = $this->session->userdata('username');
          
        $this->data['admin'] = $this->m_login->data_admin($user);
        $this->load->view('admin/header',$this->data);
        $this->load->view('admin/lihatCustomer', $customer);
        $this->load->view('admin/footer');
      }
    } 

    function delete($no_ktp)
    {
      if ($this->session->userdata('username')==NULL) {
        $this->load->view('admin/index');             
      }else{
          $user = $this->session->userdata('username');
          $this->data['admin'] = $this->m_login->data_admin($user);
          
          $this->m_customer->delete($no_ktp);
          
          $customer['customer'] = $this->m_customer->selectAll();
          $customer['pesan'] ='Berhasil di Hapus';
          
          $this->load->view('admin/header',$this->data);
          $this->load->view('admin/customer',$customer);
          $this->load->view('admin/footer');
      }
    }

    //kelola sama customer
    function setting($no_ktp)
    {
      if ($this->session->userdata('username_customer')==NULL) {
        $this->load->view('awayday');             
      }else{
        if($_POST==NULL){
          $user = $this->session->userdata('username_customer');
          $this->data['customer'] = $this->m_login->data($user);

          $this->load->view('header',$this->data);
          $this->load->view('edit');
          $this->load->view('footer');
        }elseif ($_POST['nama']=!NULL && $_POST['email']=!NULL && $_POST['sandi_customer']==NULL) {
        
          $customer['pesan1'] ='Berhasil di edit';
          $this->m_customer->update($no_ktp);
        
          $user = $this->session->userdata('username_customer');
          $this->data['customer'] = $this->m_login->data($user);
        
          $this->load->view('header',$this->data);
          $this->load->view('edit',$customer);
          $this->load->view('footer');
      }elseif ($_POST['username']=!NULL && $_POST['sandi']=!NULL){
        $password = $this->input->post('password_customer');
        $password_lama = $this->input->post('sandi_customer');
        $password_baru = $this->input->post('sandi_baru_customer');
        $password_konf = $this->input->post('konf_sandi_customer');
       
        if ($password == md5($password_lama)) {
          if (md5($password_baru) == md5($password_konf)) {
            $this->m_customer->update($no_ktp);
            redirect('customer/logout');
          }else{
            $admin['pesan'] = 'Password baru tidak sesuai dengan Konfirmasi password';  
          }//validasi password baru dengan konfirmasi password
                
        }else{
          $admin['pesan'] = 'password lama salah';
        }//validasi password lama
          $user = $this->session->userdata('username_customer');
          $this->data['customer'] = $this->m_login->data($user);
        
          $this->load->view('header',$this->data);
          $this->load->view('edit',$admin);
          $this->load->view('footer');
      }//validsi password baru

    }//validsi login
  }

  	//daftar customer
  	function tambah() 
  	{  
        if ($_POST==NULL) {
        $this->load->view('header');
        $this->load->view('daftar');
        $this->load->view('footer');
      }else{
        $this->m_customer->input(); 
        $pesan['pesan']='<h3>Berhasil Menambah Silahkan Login</h3>';    
        $this->load->view('header');
        $this->load->view('daftar',$pesan);
        $this->load->view('footer');   
      }
  	}

  	function logout()
  	{
    	$this->session->sess_destroy();
    	redirect('awayday','refresh');
  	}
}
?>
