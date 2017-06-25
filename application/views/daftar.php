<?php
  error_reporting(E_ALL^(E_NOTICE | E_WARNING));
?>
<div id="page-wrapper">
    <div class ="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header" >Form Tambah Customer</h1>
        <p><font color="green"><?php echo $pesan; ?></font></p>
        </div>
            <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-primary">
            <div class="panel-heading">
            Silahkan mengisi data terbaru
            </div>
            <div class="panel-body">
            <form action="<?php echo base_url(); ?>customer/tambah" method="post">
            <div class="form-group">
            <table class="table" border=1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr class="info">
                            <th>No KTP</th>
                            <th>:</th>
                            <th><input type="text" size=20 name="no_ktp" required></th>
                        </tr>
                        <tr>
                            <th>Nama Customer</th>
                            <th>:</th>
                            <th><input type="text" size=50 name="nama_customer" required></th>
                        </tr>
                        <tr class="info">
                            <th>Jenis Kelamin</th>
                            <th>:</th>
                            <th>
                                <input type="radio" name="jk_customer" size=50 value="L" checked>Laki-laki &nbsp
                                <input type="radio" name="jk_customer" size=50 value="P">Perempuan'
                            </th>
                        </tr>
                        <tr class="info">
                            <th>Tgl Lahir</th>
                            <th>:</th>
                            <th><input type="date" name="tgl_lahir" required required></th>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <th>:</th>
                            <th><input type="text" name="alamat" size=70 required required></th>
                        </tr>
                        <tr class="info">
                            <th>Email</th>
                            <th>:</th>
                            <th><input type="text" name="email" size=50 required required></th>
                        </tr>
                        <tr>
                            <th>No HP</th>
                            <th>:</th>
                            <th><input type="text" name="no_hp" size=50 required required></th>
                        </tr>
                        <tr class="info">
                            <th>Username</th>
                            <th>:</th>
                            <th><input type="text" name="username" size=50 required class="from-control" required></th>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <th>:</th>
                            <th><input type="password" size=50 name="password" required class="from-control" required></th>
                        </tr>
                        </thead>
                    </table>
            </div><hr>
                     <input type="submit" class="btn btn-primary" value="Simpan"/>
            </div>
            </div>
            </div>   
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
    