<?php
class m_pesan extends CI_Model{

   function selectAll()
   {  
      $query = ('SELECT pemesanan.*,jadwal.*,customer.no_ktp,customer.nama_customer FROM pemesanan INNER JOIN jadwal ON pemesanan.id_jadwal = jadwal.id_jadwal JOIN customer ON pemesanan.no_ktp=customer.no_ktp');
    	return $this->db->query($query);
   }

  function getPesan($pesan)
   {
      $query = ('SELECT pemesanan.*,jadwal.*,customer.* FROM pemesanan INNER JOIN jadwal ON pemesanan.id_jadwal = jadwal.id_jadwal JOIN customer ON pemesanan.no_ktp=customer.no_ktp where pemesanan.id_pemesanan="'.$pesan.'"');
      return $this->db->query($query)->row();
   }    

   function select($id_jadwal,$no_ktp)
   {
        $this->db->select("*");
        $this->db->FROM("pemesanan");
        $this->db->join("jadwal","pemesanan.id_jadwal=jadwal.id_jadwal");
        $this->db->where('pemesanan.id_jadwal', $id_jadwal);
        $this->db->where('pemesanan.no_ktp', $no_ktp);
        return $this->db->get()->row();
   }
   
  function lihat($id_jadwal)
   {
        $this->db->select("*");
        $this->db->FROM("pemesanan");
        $this->db->join("jadwal","pemesanan.id_jadwal=jadwal.id_jadwal");
        $this->db->where('pemesanan.id_jadwal', $id_jadwal);
        return $this->db->get()->row();
   }

  function input()
   {
      $this->db->trans_begin();
      $tanggal      = date('Y/m/d');
      $id_pemesanan = $this->input->post('id_pemesanan');
      $no_ktp       = $this->input->post('no_ktp');
      $id_jadwal    = $this->input->post('id_jadwal');
      $data         = array( 'id_pemesanan'=>$id_pemesanan, 'no_ktp'=>$no_ktp, 'id_jadwal'=>$id_jadwal, 'tgl_pemesanan'=>$tanggal );

      $this->db->insert('pemesanan',$data);


      $q = $this->db->query("SELECT MAX(RIGHT(id_pembayaran,2)) AS idmax FROM pembayaran");
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%02s",$tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "01";
        }
        $kar = "B"; //karakter depan kodenya
        
      
      $data1 = array( 'id_pembayaran'=>$kar.$kd, 'id_pemesanan'=>$id_pemesanan);
      $this->db->insert('pembayaran',$data1);
      
      $this->db->set('stok', 'stok-1', FALSE);
      $this->db->where('id_jadwal', $id_jadwal);
      $this->db->update('jadwal');
      $this->db->trans_commit();  
   }


   function delete($idPesan)
   {
        $this->db->trans_begin();
        $this->db->delete('pemesanan', array('id_pemesanan'=>$idPesan));
        $this->db->trans_commit();
   }

   function getkodeunik($kode) { 

        $q = $this->db->query("SELECT MAX(RIGHT(id_pemesanan,2)) AS idmax FROM ".$kode);
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%02s",$tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "01";
        }
        $kar = "P"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   }

  function count_all()
   {
        $this->db->select('id_pemesanan');
        $this->db->distinct();
        $this->db->from('pemesanan');
        $query = $this->db->get();
        return $query->num_rows();
    }
}
?>