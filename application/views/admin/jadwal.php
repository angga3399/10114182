<?php
  error_reporting(E_ALL^(E_NOTICE | E_WARNING));
?>
<div id="page-wrapper">
  <div class ="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <h1 align="center">Data Jadwal</h1>
      <p><font color="green"><?php echo $pesan; ?></font></p>
<table class="table" border=1>
<div class="table-responsive">
  <table class="table table-striped table-bordered table-hover">
<thead>
  <tr class="progress-bar-info">
  <th>No</th>
  <th>Pertandingan</th>
  <th>Stadion</th>
  <th>Tgl Pertandingan</th>
  <th>Tipe Tiket</th>
  <th>Harga</th>
  <th>Stok</th>
  <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
  <?php $no=1; foreach ($jadwal as $p): ?> <tr>  
  <td><?php echo $no++?></td>
  <td><?php echo $p->nama_pertandingan ?></td>
  <td><?php echo $p->stadion ?></td>
  <td><?php echo $p->hari. ", " .date('d F Y',strtotime($p->tgl_pertandingan))." ".$p->jam. " WIB" ?></td>
  <td><?php echo $p->tipe_tiket ?></td>
  <td>Rp <?php echo $p->harga ?></td>
  <td><?php echo $p->stok ?></td>
  <td>
      <a title="lihat detail" href="<?php echo base_url();?>jadwal/lihatJadwal/<?php echo $p->id_jadwal;?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-eye-open"></span></a>
      <a title="edit jadwal" href="<?php echo base_url();?>jadwal/editJadwal/<?php echo $p->id_jadwal;?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-edit"></span></a>
      <a title="hapus jadwal" href="<?php echo base_url();?>jadwal/deleteJadwal/<?php echo $p->id_jadwal;?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
      <?php  
        if ($p->status=='aktif') {
      ?>
        <a title="Non Aktifkan" href="<?php echo base_url();?>jadwal/status/<?php echo $p->id_jadwal,$p->status?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-ok"></span></a>
      <?php
        }else{
      ?>
        <a title="Aktifkan" href="<?php echo base_url();?>jadwal/status/<?php echo $p->id_jadwal,$p->status;?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-remove"></span></a>
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