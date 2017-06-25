<?php
if($_SESSION['Login'])
{
?>
<div class="kursus">
<h2>Pembayaran Away Day Persib Bandung</h2>
<table id="example" class="table table-striped table-bordered table-condensed " cellspacing="0" width="85%">
   <thead>
            <tr class="danger" align="center!importent">
                <th>No</th>
                <th>Pertandingan</th>
                <th>Stadion</th>
                <th>Tgl Pertandingan</th>
                <th>Tipe Tiket</th>
                <th>Harga</th>
                <th>Bukti</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($bayar->result() as $p):
                error_reporting(E_ALL^(E_NOTICE | E_WARNING));
            ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $p->nama_pertandingan ?></td>
                <td><?php echo $p->stadion ?></td>
                <td><?php echo $p->hari. ", " .date('d F Y',strtotime($p->tgl_pertandingan))." ".$p->jam. " WIB" ;?></td>
                <td><?php echo $p->tipe_tiket ?></td>
                <td><?php echo "Rp ".number_format($p->harga,0,',','.')?></td>
                
            <?php
                if ($p->status_bayar=="no-acc" && $p->bukti_pembayaran!=NULL && $p->no_ktp==$customer->no_ktp) 
                {
                ?>
                    <td><a href="../../assets/gambar/<?php echo $p->bukti_pembayaran ?>"><img width="100px" heigt="100px" src="../../assets/gambar/<?php echo $p->bukti_pembayaran ?>"></td>
                    <td>Tunggu Konfirmasi dari Admin</td>
                <?php 
                }
                elseif($p->bukti_pembayaran==NULL && $p->no_ktp==$customer->no_ktp)
                {    
            ?>
              <td><a href="<?php echo base_url();?>bayar/bukti_pembayaran/<?php echo $p->id_pemesanan;?>"><span class="glyphicon glyphicon-dollar"></span> Bayar</a></td>
              <td>Belum Bayar</td>
            
            <?php 
                }
                elseif($p->bukti_pembayaran=!NULL && $p->bukti_pembayaran=!NULL && $p->no_ktp==$customer->no_ktp)
                {
                ?>
                    <td><a href="../../assets/gambar/<?php echo $customer->no_ktp."-".$p->id_pembayaran.".jpg" ?>"><img width="100px" heigt="100px" src="../../assets/gambar/<?php echo $customer->no_ktp."-".$p->id_pembayaran.".jpg" ?>"></td>
                    <td>Sudah Di Bayar</td>
                <?php
                }
                ?>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<?php
}
?>