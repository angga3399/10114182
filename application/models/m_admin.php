<?php
class m_admin extends CI_Model{

   function selectAll()
   {
      	$this->db->order_by("nama_admin","desc"); 
      	return $this->db->get('admin')->result();
   }
   
   function input()
   {
      $id_admin         = $this->input->post('id_admin');
      $nama_admin       = $this->input->post('nama_admin');
      $email            = $this->input->post('email');
      $username         = $this->input->post('username');
      $password         = $this->input->post('password');
      $status           = $this->input->post('status');
      
      $admin=array('id_admin'=>$id_admin,'nama_admin'=>$nama_admin,'email'=>$email, 'username'=>$username, 'password'=>md5($password),'status'=>$status);

      $this->db->insert('admin',$admin);	
   }


   function delete($idPegawai)
   {
        $this->db->delete('pegawai', array('idPegawai'=>$idPegawai));
   }

   function edit($id_admin){
    if ($_POST['nama']=!NULL && $_POST['email']=!NULL && $_POST['sandi_admin']==NULL) {
      $nama  = $this->input->post('nama_admin');
      $email = $this->input->post('email_admin');
      
      $data = array('nama_admin'=> $nama, 'email'=>$email);
    }elseif ($_POST['username']=!NULL && $_POST['sandi']=!NULL){
      $username      = $this->input->post('username_admin');
      $password_baru = $this->input->post('sandi_baru_admin');
      
      $data = array('username'=> $username, 'password'=>md5($password_baru));
    }
      $this->db->set($data);
      $this->db->where('id_admin', $id_admin);
      $this->db->update('admin');

   }

   function select($id_admin)
   {
        return $this->db->get_where('admin', array('id_admin'=>$id_admin))->row();
   }

   function count_all()
   {
        $this->db->select('no_ktp');
        $this->db->distinct();
        $this->db->from('customer');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function getkodeunik($kode) { 

        $q = $this->db->query("SELECT MAX(RIGHT(id_admin,2)) AS idmax FROM ".$kode);
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%02s",$tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "01";
        }
        $kar = "A"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   }


}
?>