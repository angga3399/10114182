<?php
class m_customer extends CI_Model{

   function selectAll()
   {
      	$this->db->order_by("nama_customer","desc"); 
      	return $this->db->get('customer')->result();
   }
   
   function input()
   {
         $no_ktp = $this->input->post('no_ktp');
         $nama = $this->input->post('nama_customer');
         $jk = $this->input->post('jk_customer');
         $tgl = $this->input->post('tgl_lahir');
         $alamat = $this->input->post('alamat');
         $email = $this->input->post('email');
         $no_hp = $this->input->post('no_hp');
         $username = $this->input->post('username');
         $password = md5($this->input->post('password'));

         $data = array(
                'no_ktp' => $no_ktp,
                'nama_customer' => $nama,
                'jk_customer' => $jk,
                'tgl_lahir' => $tgl,
                'alamat' => $alamat,
                'email' => $email,
                'no_hp' => $no_hp,
                'username' => $username,
                'password' => $password,
          );

      	$this->db->insert('customer',$data);	
   }


   function delete($no_ktp)
   {
        $this->db->delete('customer', array('no_ktp'=>$no_ktp));
   }


   function update($no_ktp)
   {
    if ($_POST['nama']=!NULL && $_POST['email']=!NULL && $_POST['sandi_customer']==NULL) {
      $nama      = $this->input->post('nama_customer');
      $jk        = $this->input->post('jk_customer');
      $tgl_lahir = $this->input->post('tgl_lahir');
      $alamat    = $this->input->post('alamat');
      $email     = $this->input->post('email_customer');
      $no_hp     = $this->input->post('no_hp');
      
      $data = array('nama_customer'=> $nama,'jk_customer'=>$jk,'tgl_lahir'=>$tgl_lahir,'alamat'=>$alamat,'email'=>$email,'no_hp'=>$no_hp);
    }elseif ($_POST['username']=!NULL && $_POST['sandi']=!NULL){
      $password_baru = $this->input->post('sandi_baru_customer');
      
      $data = array('password'=>md5($password_baru));
    }
      $this->db->set($data);
      $this->db->where('no_ktp', $no_ktp);
      $this->db->update('customer');
   }


   function select($no_ktp)
   {
        return $this->db->get_where('customer', array('no_ktp'=>$no_ktp))->row();
   }

   function count_all()
   {
        $this->db->select('no_ktp');
        $this->db->distinct();
        $this->db->from('customer');
        $query = $this->db->get();
        return $query->num_rows();
    }

}
?>