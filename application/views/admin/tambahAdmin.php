<div id="page-wrapper">
    <div class ="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header" >Tambah Data</h1>
            </div>
            <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-primary">
            <div class="panel-heading">
            Silahkan mengisi Rute baru
            </div>
            <div class="panel-body">
            <form action="<?php echo base_url().'admin/tambah' ?>" method="post">
            <div class="form-group">
            <table class="table" border=1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr class="info">
                            <th>Id Admin</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=10 name="id_admin" value="<?=$kode?>" readonly></th>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <th>:</th>
                            <th><input type="text" size=30 name="nama_admin" required></th>
                        </tr>
                        <tr class="info">
                            <th>email</th>
                            <th>:</th>
                            <th><input type="text" size=30 name="email" required></th>
                        </tr>
                        <tr >
                            <th>status</th>
                            <th>:</th>
                            <th><select name='status'>
                                <option value="tidak sepenuhnya">Tidak Sepenuhnya</option>
                                <option value="sepenuhnya">Sepenuhnya</option>
                            </select></th>
                        </tr>
                        </tr>
                        <tr class="info">
                            <th>username</th>
                            <th>:</th>
                            <th><input type="text" size=30 name="username" required></th>
                        <tr>
                            <th>password</th>
                            <th>:</th>
                            <th><input type="password" size=30 name="password"></th>
                        </tr>
                        </thead>
                    </table>
            </div><hr>
                     <input type="submit" class="btn btn-primary" value="Simpan" name="submit"/>
            </div>
            </div>
            </div>   
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
    