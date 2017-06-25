<div id="page-wrapper">
    <div class ="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header" >Form Lihat Data Customer</h1>
            </div>
            <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-primary">
            <div class="panel-heading">
            Hanya bisa di lihat
            </div>
            <div class="panel-body">
            <form action="<?php echo base_url();?>customer/customer" method="post">
            <div class="form-group">
            <table class="table" border=1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr class="info">
                            <th>No_KTP</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $customer->no_ktp ?>" readonly></th>
                        </tr>
                        <tr >
                            <th>Nama Customer</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $customer->nama_customer ?>" readonly></th>
                        </tr>
                        <tr class="info">
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
                            <th><input style="background-color: #adada8" type="text" size=10 value="<?php echo $jk ?>" readolny></th>
                        </tr>
                        <tr >
                            <th>Usia</th>
                            <th>:</th>
                            <?php
                                $usia = date('Y/m/h') - $customer->tgl_lahir;
                            ?>
                            <th><input style="background-color: #adada8" type="text" size=1  value="<?php echo $usia?>" readonly></th>
                        </tr>
                        <tr class="info">
                            <th>Alamat</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $customer->alamat?>" readonly></th>
                        </tr>
                        <tr >
                            <th>No HP</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $customer->no_hp?>" readonly></th>
                        </tr>
                        <tr class="info">
                            <th>email</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=50 value="<?php echo $customer->email?>" readonly></th>
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
    