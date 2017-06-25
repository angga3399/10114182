<div id="page-wrapper">
    <div class ="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header" >Form Pembayaran Pertandingan <?php echo $bayar->nama_pertandingan ?> VS Persib</h1>
            </div>
            <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-primary">
            <div class="panel-heading">
            Silahkan isi dan upload file bukti pembayaran dengan format .jpg
            </div>
            <div class="panel-body">
            <form action="<?php echo base_url();?>bayar/bukti_pembayaran/<?php echo $bayar->id_pemesanan; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <table class="table">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <input type="hidden" name="no_ktp" value="<?php echo $customer->no_ktp; ?>">
                    <input type="hidden" name="id_pembayaran" value="<?php echo $bayar->id_pembayaran; ?>">
                    <thead>
                        <tr class="info">
                            <th colspan="3"><center><h1>Harga Yang Di Bayar <?php echo "Rp ".number_format($bayar->harga,0,',','.')?></h1><h4>Transfer ke Bank Persib : 1403193314032017 a.n. Away Day Persib</h4></center></th>  
                        </tr>
                        <tr>
                            <th>Tanggal Pembayaran</th>
                            <th>:</th>
                            <th><?php echo date('d-m-Y');?></th>
                        </tr>
                        <tr>
                            <th>BANK Transfer</th>
                            <th>:</th>
                            <th><input type="text" class="form-control" name="bank" size="10" placeholder="BRI/BNI/BJB/dll" required></th>
                        </tr>
                        <tr>
                            <th>Nama Rekening</th>
                            <th>:</th>
                            <th><input type="text" class="form-control" name="nama_rek" size="40" required></th>
                        </tr>
                        <tr>
                            <th>No Rekening</th>
                            <th>:</th>
                            <th><input type="text" class="form-control" name="no_rek" size="40" required></th>
                        </tr>
                        <tr>
                            <th>Upload Bukti Pembayaran</th>
                            <th>:</th>
                           <td><input name="filefoto" class="form-control" type="file" required></td>
                        </tr>
                        </thead>
                    </table>
            </div><hr>
                     <input type="submit" class="btn btn-primary" value="Pesan"/>
            </div>
            </div>
            </div>   
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
    