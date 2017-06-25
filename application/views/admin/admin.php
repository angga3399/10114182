<?php
  error_reporting(E_ALL^(E_NOTICE | E_WARNING));
?>
<div id="page-wrapper">
  <div class ="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <h1 align="center">Daftar Admin</h1>
      <p><font color="green"><?php echo $pesan; ?></font></p>
<table class="table" border=1>
<div class="table-responsive">
  <table class="table table-striped table-bordered table-hover">
<thead>
  <tr class="progress-bar-info">
     <th>No</th>
     <th>Nama Admin</th>
     <th>Email</th>
     <th>Status</th>
     <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
  <?php 
  $no=1;
  foreach ($mimin as $po): ?>
  <tr>  
  <td><?php echo $no++?></td>
  <td><?php echo $po->nama_admin ?></td>
  <td><?php echo $po->email ?></td>
  <td><?php echo $po->status ?></td>
  <td>
      <a title="hapus" href="<?php echo base_url();?>bayar/delete/<?php echo $po->id_pembayaran;?>" onClick="return checkMe()" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
  </td>
  </tr>
  <?php endforeach?>
  </tbody>
  </table>

  </div>
  </div>
</div>