<div class="kursus">
<h2>Pemesanan Away Day Persib Bandung</h2>
<table id="example" class="table table-striped table-bordered table-condensed " cellspacing="0" width="85%">
   <thead>
            <tr class="danger">
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
            <?php $no=1; foreach ($jadwal as $p): ?>
            
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $p->nama_pertandingan ?></td>
                <td><?php echo $p->stadion ?></td>
                <td><?php echo $p->hari. ", " .date('d F Y',strtotime($p->tgl_pertandingan))." ".$p->jam. " WIB" ?></td>
                <td><?php echo $p->tipe_tiket ?></td>
                <td><?php echo "Rp ".number_format($p->harga,0,',','.') ?></td>
                <td><?php echo $p->stok ?></td>
                <?php 
                //login
                if (empty($_SESSION['Login'])) { 
                ?>
                <td><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span> Pesan!!!</a></td>
                <?php
                }
                else
                {
                    $pesan=$this->data['pesan'] = $this->m_pesan->select($p->id_jadwal,$customer->no_ktp);
                    
                    if ($p->status=="aktif" && $p->stok>=0 && $pesan->id_jadwal==$p->id_jadwal && $pesan->no_ktp==$customer->no_ktp) 
                    {
                    ?>
                        <td><a title="lihat detail" href="<?php echo base_url();?>pesan/lihatPesan/<?php echo $p->id_jadwal;?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-eye-open"></span></a>
                        | Sudah Dipesan</td>
                    <?php 
                    }
                    elseif($p->status=="aktif" && $p->stok>0)
                    {
                ?>
                    <td><a href="<?php echo base_url(); ?>pesan/form_pemesanan/<?php echo $p->id_jadwal?>"><span class="glyphicon glyphicon-shopping-cart"></span> Pesan</a></td>
                <?php
                    }
                    else
                    {
                        echo '<td>Di Tutup</td>';
                    }
                }
                ?>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>