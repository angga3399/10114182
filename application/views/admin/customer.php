<?php
  error_reporting(E_ALL^(E_NOTICE | E_WARNING));
?>
<div id="page-wrapper">
  <div class ="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <h1 align="center">Data Customer</h1>
       <p><font color="green"><?php echo $pesan; ?></font></p>
<table class="table" border=1>
<div class="table-responsive">
  <table class="table table-striped table-bordered table-hover">
<thead>
  <tr class="progress-bar-info">
     <th>No</th>
     <th>No KTP</th>
     <th>Nama</th>
     <th>Alamat</th>
     <th>No HP</th> 
     <th>email</th> 
     <th>Aksi</th> 
  </tr>
  </thead>
  <tbody>
  <?php 
  $no=1;
  foreach ($customer as $p): ?>
  <tr>  
  <td><?php echo $no++?></td>
  <td><?php echo $p->no_ktp ?></td>
  <td><?php echo $p->nama_customer ?></td>
  <td><?php echo $p->alamat ?></td>
  <td><?php echo $p->no_hp ?></td>
  <td><?php echo $p->email ?></td>
  <td><a href="<?php echo base_url();?>customer/lihat/<?php echo $p->no_ktp;?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-eye-open"></span></a>
      <a href="<?php echo base_url();?>customer/delete/<?php echo $p->no_ktp;?>" onClick="return checkMe()" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
  </tr>
  <?php endforeach?>
  </tbody>
  </table>
  </div>
  </div>
</div>