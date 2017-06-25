<div id="page-wrapper">
    <div class ="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header" >Tiket Pemesanan</h1>
            </div>
            <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-primary">
            <div class="panel-heading">
            Hanya bisa di lihat
            </div>
            <div class="panel-body">
            <form action="<?php echo base_url();?>awayday/jadwal/<?php echo $customer->no_ktp?>" method="post">
            <div class="form-group">
            <table class="table" border=1>
            <input type="hidden" name="id_pemesanan" value="<?php echo $kodeunik?>">
            <input type="hidden" name="no_ktp" value="<?php echo $customer->no_ktp ?>">
            <input type="hidden" name="id_jadwal" value="<?php echo $jadwal->id_jadwal ?>">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr class="info">
                            <th colspan="3" rowspan="2"><h1>TIKET PEMESANAN</h1></th>
                            <th>No Pesanan</th>
                            <th>:</th>
                            <th><?php echo $pesan->id_pemesanan ?></th>
                        </tr>
                        <tr class="info">
                            <th>Tgl Pesan</th>
                            <th>:</th>
                            <th><?php echo date('d F Y',strtotime($pesan->tgl_pemesanan)) ?></th>
                        </tr>
                        <tr >
                            <th>No KTP</th>
                            <th>:</th>
                            <th><?php echo $customer->no_ktp ?></th>
                            <th>Pertandingan</th>
                            <th>:</th>
                            <th><?php echo $pesan->nama_pertandingan ?></th>
                        </tr>
                        <tr >
                            <th>Nama</th>
                            <th>:</th>
                            <th><?php echo $customer->nama_customer ?></th>
                            <th>Stadion</th>
                            <th>:</th>
                            <th><?php echo $pesan->stadion ?></th>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <th>:</th>
                            <?php
                                if ($customer->jk_customer=='L') {
                                    # code...
                                    $jk='Laki-Laki';
                                }else{
                                    $jk='Perempuan';
                                }
                            ?>
                            <th><?php echo $jk ?></th>
                            <th>Tanggal</th>
                            <th>:</th>
                            <th><?php echo $pesan->hari. ", " .date('d F Y',strtotime($pesan->tgl_pertandingan))." ".$pesan->jam?></th>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <th>:</th>
                            <th><?php echo $customer->alamat?></th>
                            <th>Harga</th>
                            <th>:</th>
                            <th><?php echo "Rp ".number_format($pesan->harga,0,',','.')?></th>
                        </tr>
                        <tr>
                            <th>No HP</th>
                            <th>:</th>
                            <th><?php echo $customer->no_hp?></th>
                        	<th>Berangkat</th>
                            <th>:</th>
                            <th><?php echo $pesan->hari_brkt. ", " .date('d F Y',strtotime($pesan->tgl_brkt))." ".$pesan->jam_brkt. " WIB"?></th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th>:</th>
                            <th><?php echo $customer->email?></th>
                            <th>Tempat</th>
                            <th>:</th>
                            <th>Kantor Away Day Persib</th>
                        </tr>
                        </thead>
                    </table>
            </div><hr>
                     <input type="submit" class="btn btn-primary" value="Kembali"/>
            </div>
            </div>
            </div>   
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
    