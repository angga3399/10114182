<?php
class m_jadwal_pertandingan extends CI_Model{

   function selectAll()
   {
    	$this->db->order_by("id_jadwal","desc"); 
    	return $this->db->get('jadwal')->result();
   }

   function input()
   {
      $id_jadwal         =  $this->input->post('id_jadwal');
    	$tim_lawan         = $this->input->post('tim_lawan');
      $stadion           = $this->input->post('stadion');
      $tgl_pertandingan  = $this->input->post('tgl_pertandingan');
      $jam_pertandingan  = $this->input->post('jam_pertandingan');
    	$tribun            = $this->input->post('tribun');
      $harga             = $this->input->post('harga');
    	$stok              = $this->input->post('stok');
      $tgl_berangkat     = $this->input->post('tgl_berangkat');
      $jam_berangkat     = $this->input->post('jam_berangkat');

      $hari = array ( 1 => 'Senin', 'Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
      
      $hari_pertandingan = date('N', strtotime($tgl_pertandingan)); 
      $hari_berangkat = date('N', strtotime($tgl_berangkat));

    	$data = array( 'id_jadwal'=>$id_jadwal, 'nama_pertandingan'=>$tim_lawan, 'stadion'=>$stadion, 'hari'=>$hari[$hari_pertandingan],'tgl_pertandingan'=>$tgl_pertandingan,'jam'=>$jam_pertandingan,'tipe_tiket'=>$tribun,'harga'=>$harga,'stok'=>$stok,'hari_brkt'=>$hari[$hari_berangkat],'tgl_brkt'=>$tgl_berangkat,'jam_brkt'=>$jam_berangkat);
    	$this->db->insert('jadwal',$data);	
   }

   function delete($id_jadwal)
   {
        $this->db->delete('jadwal', array('id_jadwal'=>$id_jadwal));
   }

   function update($idJadwal)
   {
      
      $tim_lawan         = $this->input->post('tim_lawan');
      $stadion           = $this->input->post('stadion');
      $tgl_pertandingan  = $this->input->post('tgl_pertandingan');
      $jam_pertandingan  = $this->input->post('jam_pertandingan');
      $tribun            = $this->input->post('tribun');
      $harga             = $this->input->post('harga');
      $stok              = $this->input->post('stok');
      $tgl_berangkat     = $this->input->post('tgl_berangkat');
      $jam_berangkat     = $this->input->post('jam_berangkat');

      $hari = array ( 1 => 'Senin', 'Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
      
      $hari_pertandingan = date('N', strtotime($tgl_pertandingan)); 
      $hari_berangkat = date('N', strtotime($tgl_berangkat));

      $data = array('nama_pertandingan'=>$tim_lawan, 'stadion'=>$stadion, 'hari'=>$hari[$hari_pertandingan],'tgl_pertandingan'=>$tgl_pertandingan,'jam'=>$jam_pertandingan,'tipe_tiket'=>$tribun,'harga'=>$harga,'stok'=>$stok,'hari_brkt'=>$hari[$hari_berangkat],'tgl_brkt'=>$tgl_berangkat,'jam_brkt'=>$jam_berangkat);
      
      $this->db->set($data);
      $this->db->where('id_jadwal', $idJadwal);
      $this->db->update('jadwal');
   }

   function select($id_jadwal)
   {
        return $this->db->get_where('jadwal', array('id_jadwal'=>$id_jadwal))->row();
   }

  public function data($jadwal){
        $this->db->select('*');
        $this->db->where('id_jadwal', $jadwal);
        $query = $this->db->get('jadwal');
        return $query->row();
  }

   function getkodeunik($kode) { 

        $q = $this->db->query("SELECT MAX(RIGHT(id_jadwal,2)) AS idmax FROM ".$kode);
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%02s",$tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "01";
        }
        $kar = "J"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   }


   function status($idJadwal)
   {
      $id = substr($idJadwal,0,3);
      $status = substr($idJadwal,3);
      if ($status=='aktif') {
        $this->db->set('status','non-aktif');
      }else{
        $this->db->set('status','aktif');
      }
        $this->db->where('id_jadwal', $id);
        $this->db->update('jadwal');
   }

   function count_all()
   {
        $this->db->select('id_jadwal');
        $this->db->distinct();
        $this->db->from('jadwal');
        $query = $this->db->get();
        return $query->num_rows();
    }
}
?>