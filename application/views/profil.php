<div class="workshop">
			<table border="2" align="center">
				<tr>
					<td>No KTP</td>
					<td>:</td>
					<td><font color="red"><input name="no_ktp" type="text" readonly value="<?php echo $customer->no_ktp; ?>"></font></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><font color="red"><input name="nama_customer" type="text" readonly value="<?php echo $customer->nama_customer; ?>"></font></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<?php
						if ($customer->jk_customer=="L"){
							$jk="Laki-Laki";
						}else{
							$jk="Perempuan";
						}
					?>
					<td><font color="red"><input name="username" type="text" readonly value="<?php echo $jk;?>"></font></td>
				</tr>
				<tr>
					<td>Usia</td>
					<td>:</td>
					<?php
						$usia=date('Y/m/d') - $customer->tgl_lahir;
					?>
					<td><font color="red"><input name="stadion" type="text" readonly value="<?php echo $usia; ?> tahun"></font></td>
				</tr>
				<tr>
					<td>alamat</td>
					<td>:</td>
					<td><font color="red"><input name="tanggal" type="text" size="25" readonly value="<?php echo $customer->alamat; ?>"></font></td>
				<tr>
					<td>No Hp</td>
					<td>:</td>
					<td><font color="red"><input name="harga" type="text" readonly value="<?php echo $customer->no_hp; ?>"></font></td>
				</tr>
				</tr>
				<tr>
					<td>email</td>
					<td>:</td>
					<td><font color="red"><input name="tipe_tiket" type="text" readonly value="<?php echo $customer->email; ?>"></font></td>
				</tr>
				<tr>
					<td>username</td>
					<td>:</td>
					<td><font color="red"><input name="tipe_tiket" type="text" readonly value="<?php echo $customer->username; ?>"></font></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><font color="red"><input name="tipe_tiket" type="password" readonly value="<?php echo $customer->password; ?>"></font></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><a href="<?php echo base_url();?>user/welcome/edit/<?php echo $customer->no_ktp;?>"><input type="button" value="Edit"></input></a>
				</tr>
			</table>
   		
</div>
