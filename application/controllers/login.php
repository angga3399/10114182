<?php 
    class login extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('m_login');
            $this->load->library(array('form_validation','session'));
            $this->load->database();
            $this->load->helper('url');
        }

        public function index(){
            $session = $this->session->userdata('Login');
            if($session !='berhasil'){
                $this->load->view('header');
                $this->load->view('home');
                $this->load->view('footer');
            }else{
                redirect('awayday');
            }
        }
        
        public function login_customer(){
            if ($this->session->userdata('Login')== 'berhasil') {
                redirect('awayday');
            }
            $this->form_validation->set_rules('password', 'Password', 'required|trim|md5');
            $this->form_validation->set_rules('username', 'Username', 'required|trim');
            $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
            if($this->form_validation->run()==FALSE){
                $this->load->view('header');
                $this->load->view('home');
                $this->load->view('footer');
            }else{
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $cek= $this->m_login->getPengguna($username, $password,1);

                if($cek->num_rows() == 1) {

                    foreach ($cek->result() as $c) {
                            $data_user['login_customer']       = 'berhasil';
                            $data_user['username_customer']    = $c->username;
                            $data_user['nama_customer']        = $c->nama_customer;
                            $data_user['email_customer']        = $c->email;
                        
                            $this->session->set_userdata($data_user);
                            redirect('awayday');
                    }
                    
                }else{
                    echo " <script>
                            alert('Gagal Login: Cek username dan password anda!');
                            history.go(-1);
                        </script>";
                }
            }
        }

        public function login_admin(){
            if ($this->session->userdata('Login')== 'berhasil') {
                redirect('admin/home');
            }
            $this->form_validation->set_rules('password', 'Password', 'required|trim|md5');
            $this->form_validation->set_rules('username', 'Username', 'required|trim');
            $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
            if($this->form_validation->run()==FALSE){
                $this->load->view('admin/index');
            }else{
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $cek= $this->m_login->getAdmin($username, $password,1);

                if($cek->num_rows() == 1) {

                    foreach ($cek->result() as $c) {
                            $data_user['Login']       = 'berhasil';
                            $data_user['username']    = $c->username;
                            $data_user['nama']        = $c->nama_admin;
                            $data_user['email']        = $c->email;
                        
                            $this->session->set_userdata($data_user);
                            redirect('admin/home');
                    }
                    
                }else{
                    $pesan['pesan'] = 'Username atau Password salah';
                    $this->load->view('admin/index',$pesan);
                }
            }
        }
    }
?>