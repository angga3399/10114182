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
            <form action="<?php echo base_url();?>admin/setting/<?php echo $admin->id_admin; ?>" method="post">
            <div class="form-group">
            <table class="table" border=1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                     <p><font color="green"><?php echo $pesan1; ?></font></p>
                        <tr class="info">
                            <th>Nama</th>
                            <th>:</th>
                            <th><input size=50 type="text" size=50 name="nama_admin" value="<?php echo $admin->nama_admin;?>"></th>
                        </tr>
                        <tr >
                            <th>Email</th>
                            <th>:</th>
                            <th><input type="text" size=50 name="email_admin" value="<?php echo $admin->email;?>" required></th>
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
            <form action="<?php echo base_url();?>admin/setting/<?php echo $admin->id_admin;?>" method="post">
            <div class="form-group">
            <table class="table" border=1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead> 
                    <p><font color="green"><?php echo $pesan; ?></font></p>
                        <input size=50 type="hidden" name="password_admin" value="<?php echo $admin->password;?>" required>
                        <tr class="info">
                            <th>username</th>
                            <th>:</th>
                            <th><input type="text" size=50 name="username_admin" value="<?php echo $admin->username;?>" required></th>
                        </tr>
                        <tr >
                            <th>Password Lama</th>
                            <th>:</th>
                            <th><input type="password" size=30 name="sandi_admin"></th>
                        </tr>
                        <tr>
                            <th>Password Baru</th>
                            <th>:</th>
                            <th><input type="password" size=30 name="sandi_baru_admin"></th>
                        </tr>
                        <tr>
                            <th>Konfirmasi Password</th>
                            <th>:</th>
                            <th><input type="password" size=30 name="konf_sandi_admin"></th>
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
    