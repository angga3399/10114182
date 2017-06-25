<?php
  error_reporting(E_ALL^(E_NOTICE | E_WARNING));
?>
<div id="page-wrapper">
    <!-- akun -->
    <div class ="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header" >Setting Akun</h1>
            </div>
            <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-primary">
            <div class="panel-heading">
            Akun
            </div>
            <div class="panel-body">
            <form action="<?php echo base_url();?>customer/setting/<?php echo $customer->no_ktp; ?>" method="post">
            <div class="form-group">
            <table class="table" border=1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                     <p><font color="green"><?php echo $pesan1; ?></font></p>
                        <tr>
                            <th>No_KTP</th>
                            <th>:</th>
                            <th><?php echo $customer->no_ktp;?></th>
                        </tr>
                        <tr class="info">
                            <th>Nama</th>
                            <th>:</th>
                            <th><input size=50 type="text" size=50 name="nama_customer" value="<?php echo $customer->nama_customer;?>"></th>
                        </tr>
                        <tr >
                            <th>Jenis Kelamin</th>
                            <th>:</th>
                            <th>
                            <?php if ($customer->jk_customer=='L') {
                                echo '<input type="radio" name="jk_customer" size=50 value="L" checked>Laki-laki &nbsp
                                      <input type="radio" name="jk_customer" size=50 value="P">Perempuan';
                            }else{
                                echo '<input type="radio" name="jk_customer" size=50 value="L">Laki-laki &nbsp
                                      <input type="radio" name="jk_customer" size=50 value="P" checked>Perempuan';
                            } ?>
                            </th>
                        </tr>
                        <tr class="info">
                            <th>Tgl Lahir</th>
                            <th>:</th>
                            <th><input type="date" name="tgl_lahir" value="<?php echo $customer->tgl_lahir ?>" required></th>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <th>:</th>
                            <th><input type="text" name="alamat" size=70 value="<?php echo $customer->alamat ?>" required></th>
                        </tr>
                        <tr class="info">
                            <th>Email</th>
                            <th>:</th>
                            <th><input type="text" name="email_customer" size=50 value="<?php echo $customer->email ?>" required></th>
                        </tr>
                        <tr>
                            <th>No HP</th>
                            <th>:</th>
                            <th><input type="text" name="no_hp" size=50 value="<?php echo $customer->no_hp ?>" required></th>
                        </tr>
                        </tr>
                        </thead>
                    </table>
            </div><hr>
                     <input type="submit" class="btn btn-primary" value="Edit"/>
            </div>
            </div>
            </div>   
            </div>
            </div>
        </div>
        <!-- password -->
        <div class ="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            </div>
            <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-primary">
            <div class="panel-heading">
            Keamanan
            </div>
            <div class="panel-body">
            <form action="<?php echo base_url();?>customer/setting/<?php echo $customer->no_ktp;?>" method="post">
            <div class="form-group">
            <table class="table" border=1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead> 
                    <p><font color="green"><?php echo $pesan; ?></font></p>
                        <input size=50 type="hidden" name="password_customer" value="<?php echo $customer->password;?>" required>
                        <tr class="info">
                            <th>username</th>
                            <th>:</th>
                            <th><?php echo $customer->username;?></th>
                        </tr>
                        <tr >
                            <th>Password Lama</th>
                            <th>:</th>
                            <th><input type="password" size=30 name="sandi_customer"></th>
                        </tr>
                        <tr>
                            <th>Password Baru</th>
                            <th>:</th>
                            <th><input type="password" size=30 name="sandi_baru_customer"></th>
                        </tr>
                        <tr>
                            <th>Konfirmasi Password</th>
                            <th>:</th>
                            <th><input type="password" size=30 name="konf_sandi_customer"></th>
                        </tr>
                        </thead>
                    </table>
            </div><hr>
                     <input type="submit" class="btn btn-primary" value="Edit"/>
            </div>
            </div>
            </div>   
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
    