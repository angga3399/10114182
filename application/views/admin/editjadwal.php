<div id="page-wrapper">
    <div class ="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header" >Form Edit Jadwal</h1>
            </div>
            <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-primary">
            <div class="panel-heading">
            Silahkan mengisi jadwal yang di edit
            </div>
            <div class="panel-body">
            <form action="" method="post">
            <div class="form-group">
            <table class="table" border=1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr class="info">
                            <th>Id Jadwal</th>
                            <th>:</th>
                            <th><input size=10 style="background-color: #adada8" type="text" size=50 name="idJadwal" value="<?php echo $jadwal->id_jadwal ?>" readonly></th>
                        </tr>
                        <tr>
                            <th>TIM Lawan</th>
                            <th>:</th>
                            <th>
                            <input type="text" size=50 name="tim_lawan" value="<?php echo $jadwal->nama_pertandingan ?>" required>
                            </th>
                        </tr>
                        <tr class="info">
                            <th>Stadion</th>
                            <th>:</th>
                            <th>
                            <input type="text" size=50 name="stadion" value="<?php echo $jadwal->stadion ?>" required>
                            </th>
                        </tr>
                        <tr>
                            <th>Tanggal Pertandingan</th>
                            <th>:</th>
                            <th><input type="date" name="tgl_pertandingan" value="<?php echo $jadwal->tgl_pertandingan?>" required></th>
                        </tr>
                        <tr class="info">
                            <th>Jam</th>
                            <th>:</th>
                            <th><input type="text" size=5 name="jam_pertandingan" placeholder="hh:mm" value="<?php echo $jadwal->jam ?>" required> WIB</th>
                        </tr>
                        <tr>
                            <th>Tribun</th>
                            <th>:</th>
                            <th>
                            <input type="text" size=15 name="tribun" value="<?php echo $jadwal->tipe_tiket ?>" required>
                            </th>
                        </tr>
                        <tr class="info">
                            <th>Harga</th>
                            <th>:</th>
                            <th><input type="text" size=15 name="harga" placeholder="999999999" value="<?php echo $jadwal->harga ?>" required></th>
                        </tr>
                        <tr >
                            <th>Stok</th>
                            <th>:</th>
                            <th><input type="text" size=2 name="stok" value="<?php echo $jadwal->stok ?>" required></th>
                        </tr>
                         <tr class="info">
                            <th>Tgl Berangkat</th>
                            <th>:</th>
                            <th><input type="date" size=30 name="tgl_berangkat" value="<?php echo $jadwal->tgl_brkt ?>" required></th>
                        </tr>
                        <tr>
                            <th>Jam Berangkat</th>
                            <th>:</th>
                            <th><input type="text" size=5 name="jam_berangkat" value="<?php echo $jadwal->jam_brkt ?>" required> WIB</th>
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
    