<?php
  error_reporting(E_ALL^(E_NOTICE | E_WARNING));
?>
<div id="page-wrapper">
  <div class ="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <h1 align="center">Daftar Pesanan</h1>
      <p><font color="green"><?php echo $pesannotif; ?></font></p>
<table class="table" border=1>
<div class="table-responsive">
  <table class="table table-striped table-bordered table-hover">
<thead>
  <tr class="progress-bar-info">
     <th>No</th>
     <th>No KTP</th>
     <th>Nama Customer</th>
     <th>Pertandingan</th>
     <th>Tgl Pesan</th>
     <th>Aksi</th> 
  </tr>
  </thead>
  <tbody>
  <?php 
  $no=1;
  foreach ($pesan->result() as $po): ?>
  <tr>  
  <td><?php echo $no++?></td>
  <td><?php echo $po->no_ktp ?></td>
  <td><?php echo $po->nama_customer ?></td>
  <td><?php echo $po->nama_pertandingan?></td>
  <td><?php echo date('d F Y',strtotime($po->tgl_pemesanan)) ?></td>
  <td>
      <a title="lihat detail" href="<?php echo base_url();?>pesan/lihat/<?php echo $po->id_pemesanan;?>" onClick="return checkMe()" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-eye-open"></span></a>
  
      <a title="hapus" href="<?php echo base_url();?>pesan/delete/<?php echo $po->id_pemesanan;?>" onClick="return checkMe()" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
  </td>
  </tr>
  <?php endforeach?>
  </tbody>
  </table>

  </div>
  </div>
</div>