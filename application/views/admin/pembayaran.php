<?php
  error_reporting(E_ALL^(E_NOTICE | E_WARNING));
?>
<div id="page-wrapper">
  <div class ="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <h1 align="center">Daftar Pembayaran</h1>
      <p><font color="green"><?php echo $pesan; ?></font></p>
<table class="table" border=1>
<div class="table-responsive">
  <table class="table table-striped table-bordered table-hover">
<thead>
  <tr class="progress-bar-info">
     <th>No</th>
     <th>No KTP</th>
     <th>Nama</th>
     <th>Pertandingan</th>
     <th>Harga</th>
     <th>Tgl Pesan</th>
     <th>Nama Rekening</th> 
     <th>No Rekening</th> 
     <th>Tgl Pembayaran</th> 
     <th>Upload</th>
     <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
  <?php 
  $no=1;
  foreach ($bayar->result() as $po): ?>
  <tr>  
  <td><?php echo $no++?></td>
  <td><?php echo $po->no_ktp ?></td>
  <td><?php echo $po->nama_customer ?></td>
  <td><?php echo $po->nama_pertandingan?></td>
  <td><?php echo $po->harga?></td>
  <td><?php echo date('d F Y',strtotime($po->tgl_pemesanan)) ?></td>
  <td><?php echo $po->nama_tf ?></td>
  <td><?php echo $po->no_rek ?></td>
  <td><?php echo date('d F Y',strtotime($po->tgl_pembayaran)) ?></td>
  <td><a href="../assets/gambar/<?php echo $po->bukti_pembayaran ?>"><img width="100px" height="100px" src="../assets/gambar/<?php echo $po->bukti_pembayaran ?>"></a></td>
  <td>
      
      <a title="hapus" href="<?php echo base_url();?>bayar/delete/<?php echo $po->id_pembayaran;?>" onClick="return checkMe()" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
      <br>
      <?php
        if ($po->status_bayar=='no-acc') {
      ?>
        <a title="kirim pesan email" href="<?php echo base_url();?>bayar/email/<?php echo $po->id_pembayaran,$admin->id_admin;?>" onClick="return checkMe()" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-envelope"></span></a>
        <br>
        <a title="Belum di acc" href="<?php echo base_url();?>bayar/status/<?php echo $po->id_pembayaran,$admin->id_admin,$po->status_bayar;?>" onClick="return checkMe()" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-remove"></span></a>
      <?php
        }else{
      ?>
      <a title="Sudah di acc" href="<?php echo base_url();?>bayar/status/<?php echo $po->id_pembayaran,$admin->id_admin,$po->status_bayar;?>" onClick="return checkMe()" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-ok"></span></a>
      <?php
        }
      ?>
  </td>
  </tr>
  <?php endforeach?>
  </tbody>
  </table>

  </div>
  </div>
</div>