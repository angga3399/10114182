<div id="page-wrapper">
    <div class ="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header" >Form Lihat Data Pemesanan</h1>
            </div>
            <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-primary">
            <div class="panel-heading">
            Hanya bisa di lihat
            </div>
            <div class="panel-body">
            <form action="<?php echo base_url();?>pesan/pesan" method="post">
            <div class="form-group">
            <table class="table" border=1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr class="info">
                            <th>No_KTP</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $pesan->no_ktp ?>" readonly></th>
                        </tr>
                        <tr >
                            <th>Nama Customer</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $pesan->nama_customer ?>" readonly></th>
                        </tr>
                        <tr class="info">
                            <th>Jenis Kelamin</th>
                            <th>:</th>
                            <?php
                                if ($pesan->jk_customer=='L') {
                                    # code...
                                    $jk='Laki-Laki';
                                }else{
                                    $jk='Perempuan';
                                }
                            ?>
                            <th><input style="background-color: #adada8" type="text" size=10 value="<?php echo $jk ?>" readolny></th>
                        </tr>
                        <tr >
                            <th>Usia</th>
                            <th>:</th>
                            <?php
                                $usia = date('Y/m/h') - $pesan->tgl_lahir;
                            ?>
                            <th><input style="background-color: #adada8" type="text" size=1  value="<?php echo $usia?>" readonly></th>
                        </tr>
                        <tr class="info">
                            <th>Alamat</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $pesan->alamat?>" readonly></th>
                        </tr>
                        <tr >
                            <th>No HP</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $pesan->no_hp?>" readonly></th>
                        </tr>
                        <tr class="info">
                            <th>email</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $pesan->email?>" readonly></th>
                        </tr>
                        <tr>
                            <th>Melawan</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $pesan->nama_pertandingan?>" readonly></th>
                        </tr>
                        <tr class="info">
                            <th>Stadion</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $pesan->stadion?>" readonly></th>
                        </tr>
                        <tr >
                            <th>Hari</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $pesan->hari. ", " .date('d F Y',strtotime($pesan->tgl_pertandingan))." ".$pesan->jam. " WIB" ?>" readonly></th>
                        </tr>
                        <tr class="info">
                            <th>Tribun</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $pesan->tipe_tiket?>" readonly></th>
                        </tr>
                        <tr >
                            <th>Harga</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="Rp <?php echo $pesan->harga?>" readonly></th>
                        </tr>
                        <tr class="info">
                            <th>Tanggal Memesan</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo date('d F Y',strtotime($pesan->tgl_pemesanan)) ?>" readonly></th>
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
    