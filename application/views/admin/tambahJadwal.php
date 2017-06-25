<div id="page-wrapper">
    <div class ="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header" >Form Data Jadwal</h1>
            </div>
            <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-primary">
            <div class="panel-heading">
            Silahkan mengisi Jadwal baru
            </div>
            <div class="panel-body">
            <form action="<?php echo base_url().'jadwal/tambahJadwal' ?>" method="post">
            <div class="form-group">
            <table class="table" border=1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr class="info">
                            <th>Id Jadwal</th>
                            <th>:</th>
                            <th><input style="background-color: #adada8" type="text" size=5 name="id_jadwal" value="<?=$kodeunik?>" readonly></th>
                        </tr>
                        <tr class="info">
                            <th>TIM Lawan</th>
                            <th>:</th>
                            <th>
                            <input type="text" size=50 name="tim_lawan" required>
                            </th>
                        </tr>
                        <tr class="info">
                            <th>Stadion</th>
                            <th>:</th>
                            <th>
                            <input type="text" size=50 name="stadion" required>
                            </th>
                        </tr>
                        <tr>
                            <th>Tanggal Pertandingan</th>
                            <th>:</th>
                            <th><input type="date" name="tgl_pertandingan" required></th>
                        </tr>
                        <tr>
                            <th>Jam</th>
                            <th>:</th>
                            <th><input type="text" size=5 name="jam_pertandingan" placeholder="hh:mm" required> WIB</th>
                        </tr>
                        <tr class="info">
                            <th>Tribun</th>
                            <th>:</th>
                            <th>
                            <input type="text" size=15 name="tribun" required>
                            </th>
                        </tr>
                        <tr >
                            <th>Harga</th>
                            <th>:</th>
                            <th><input type="text" size=15 name="harga" placeholder="999999999" required></th>
                        </tr>
                        <tr >
                            <th>Stok</th>
                            <th>:</th>
                            <th><input type="text" size=30 name="stok" required></th>
                        </tr>
                         <tr >
                            <th>Tgl Berangkat</th>
                            <th>:</th>
                            <th><input type="date" size=30 name="tgl_berangkat" required></th>
                        </tr>
                        <tr>
                            <th>Jam Berangkat</th>
                            <th>:</th>
                            <th><input type="text" size=30 name="jam_berangkat" required> WIB</th>
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



    