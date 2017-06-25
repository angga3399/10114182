<?php
class m_bayar extends CI_Model{

   
   function selectAll()
   {
      $query = ('SELECT pembayaran.*,pemesanan.*,jadwal.*,customer.no_ktp,customer.nama_customer FROM pembayaran,pemesanan,jadwal,customer where pembayaran.id_pemesanan = pemesanan.id_pemesanan and pemesanan.no_ktp = customer.no_ktp and pemesanan.id_jadwal = jadwal.id_jadwal ORDER BY pembayaran.id_pembayaran desc');
      return $this->db->query($query);
   }

  function pembayaran($no_ktp)
   {
      $query = ('SELECT pembayaran.*,pemesanan.*,jadwal.*,customer.no_ktp,customer.nama_customer FROM pembayaran,pemesanan,jadwal,customer where pembayaran.id_pemesanan = pemesanan.id_pemesanan and pemesanan.no_ktp = customer.no_ktp and pemesanan.id_jadwal = jadwal.id_jadwal and pemesanan.no_ktp="'.$no_ktp.'"');
      return $this->db->query($query);
   }   

   function select($id_pesan)
   {

        $query = ('SELECT pembayaran.*,jadwal.*,customer.no_ktp,customer.nama_customer FROM pembayaran,pemesanan,jadwal,customer where pembayaran.id_pemesanan = pemesanan.id_pemesanan and pemesanan.no_ktp = customer.no_ktp and pemesanan.id_jadwal = jadwal.id_jadwal and  pembayaran.id_pemesanan="'.$id_pesan.'"');
      return $this->db->query($query)->row();
   }

  function insert(){
        $id_pembayaran=$this->input->post('id_pembayaran');
        $no_ktp       =$this->input->post('no_ktp');
        $bank         =$this->input->post('bank');
        $nama_rek     =$this->input->post('nama_rek');
        $no_rek       =$this->input->post('no_rek');
        $tanggal      =date('Y/m/d');
        $nmfile       =$no_ktp."-".$id_pembayaran; //nama file saya beri nama langsung dan diikuti fungsi time
        $this->load->library('upload');
        $config['upload_path'] = './assets/gambar/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        $this->upload->initialize($config);
  
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                 $data = array(
                  'bukti_pembayaran' =>$gbr['file_name'],
                  'tgl_pembayaran' => $tanggal,
                  'bank' => $bank,
                  'nama_tf' => $nama_rek,
                  'no_rek' => $no_rek
                );

                $this->db->set($data);
                $this->db->where('id_pembayaran', $id_pembayaran);
                $this->db->update('pembayaran');
      //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('awayday'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('awayday'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }

    function count_all()
   {
        $this->db->select('bukti_pembayaran');
        $this->db->distinct();
        $this->db->from('pembayaran');
        $query = $this->db->get();
        return $query->num_rows();
    }


  function status($id_pembayaran)
   {
      $id = substr($id_pembayaran,0,3);
      $admin = substr($id_pembayaran,3,3);
      $status = substr($id_pembayaran,6);
      if ($status=='acc') {
        $bayar = array('status_bayar' => 'no-acc', 'id_admin'=> $admin, 'status_pelakukan'=>'no-acc kan');
        $this->db->set($bayar);
      }else{
        $bayar = array('status_bayar' => 'acc', 'id_admin'=> $admin, 'status_pelakukan'=>'acc kan');
        $this->db->set($bayar);
      }
        $this->db->where('id_pembayaran', $id);
        $this->db->update('pembayaran');
   }

   function getBayar($id_pembayaran)
   {

        $query = ('SELECT pembayaran.* FROM pembayaran WHERE pembayaran.id_pembayaran="'.$id_pembayaran.'"');
        return $this->db->query($query)->row();
   }

   function delete($id_pembayaran)
   {    
        $this->db->delete('pembayaran', array('id_pembayaran'=>$id_pembayaran));
   }
}
?>