<form method="POST" action="<?=base_url()?>profil/update_siswa" enctype="multipart/form-data">
	<table class="table table-striped">
		<tr>
			<td>NISN</td>
			<td>
				<input type="number" class="form-control" name="nisn" value="<?=@$data->row()->nis?>" />
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" class="form-control" name="nama" value="<?=@$data->row()->namasiswa?>"/>
			</td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>
				<input type="text" class="form-control" name="tempat_lahir" value="<?=@$data->row()->tempatlahir?>"/>
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>
				<input type="date" class="form-control" name="tanggal_lahir" value="<?=@$data->row()->tgllahir?>"/>
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select class="form-control" name="jk" >
					<option value="">--pilih--</option>
					<option value="Laki-Laki" <?=@$data->row()->jk == 'Laki-laki' ? 'selected' : ''?>>Laki-Laki</option>
					<option value="Perempuan" <?=@$data->row()->jk == 'Perempuan' ? 'selected' : ''?>>Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>agama</td>
			<td>
				<select class="form-control" name="agama">
					<option value="">--pilih--</option>
					<option value="Islam" <?=@$data->row()->agama == 'Islam' ? 'selected' : ''?>>Islam</option>
					<option value="Kristen" <?=@$data->row()->agama == 'Kristen' ? 'selected' : ''?>>Kristen</option>
					<option value="Katolik" <?=@$data->row()->agama == 'Katolik' ? 'selected' : ''?>>Katolik</option>
					<option value="Hindu" <?=@$data->row()->agama == 'Hindu' ? 'selected' : ''?>>Hindu</option>
					<option value="Budha" <?=@$data->row()->agama == 'Budha' ? 'selected' : ''?>>Budha</option>
					<option value="Kongucu" <?=@$data->row()->agama == 'Kongucu' ? 'selected' : ''?>>Kongucu</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="email" class="form-control" name="email" value="<?=@$data->row()->email?>" readonly/>
			</td>
		</tr>
		<tr>
			<td>No HP</td>
			<td>
				<input type="text" class="form-control" name="no_hp" value="<?=@$data->row()->notelp?>"/>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>
				<textarea class="form-control" name="alamat"><?=@$data->row()->alamat?></textarea>
			</td>
		</tr>
		<tr>
			<td>Asal SMP</td>
			<td>
				<input type="text" class="form-control" name="asal_smp" value="<?=@$data->row()->asalsmp?>"/>
			</td>
		</tr>
		<tr>
			<td>Alamat SMP</td>
			<td>
				<textarea class="form-control" name="alamat_smp"><?=@$data->row()->alamatsmp?></textarea>
			</td>
		</tr>
		<tr>
			<td>Nilai UN</td>
			<td>
				<input type="text" class="form-control" name="nilai_un" value="<?=@$data->row()->nilaiun?>"/>
			</td>
		</tr>
		<tr>
			<td>Nama Ayah</td>
			<td>
				<input type="text" class="form-control" name="nama_ayah" value="<?=@$data->row()->namaayah?>"/>
			</td>
		</tr>
		<tr>
			<td>Penghasilan Ayah</td>
			<td>
				<input type="text" class="form-control" name="penghasilan_ayah" value="<?=@$data->row()->penghasilanayah?>"/>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan Ayah</td>
			<td>
				<input type="text" class="form-control" name="pekerjaan_ayah" value="<?=@$data->row()->pekerjaanayah?>"/>
			</td>
		</tr>
		<tr>
			<td>Pendidikan Ayah</td>
			<td>
				<input type="text" class="form-control" name="pendidikan_ayah" value="<?=@$data->row()->pendidikanayah?>"/>
			</td>
		</tr>
		<tr>
			<td>Nama Ibu</td>
			<td>
				<input type="text" class="form-control" name="nama_ibu" value="<?=@$data->row()->namaibu?>"/>
			</td>
		</tr>
		<tr>
			<td>Penghasilan Ibu</td>
			<td>
				<input type="text" class="form-control" name="penghasilan_ibu" value="<?=@$data->row()->penghasilanibu?>"/>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan Ibu</td>
			<td>
				<input type="text" class="form-control" name="pekerjaan_ibu" value="<?=@$data->row()->pekerjaanibu?>"/>
			</td>
		</tr>
		<tr>
			<td>Pendidikan Ibu</td>
			<td>
				<input type="text" class="form-control" name="pendidikan_ibu" value="<?=@$data->row()->pendidikanibu?>"/>
			</td>
		</tr>
		<tr>
			<td>Pas Photo</td>
			<td>
				<input type="file" class="form-control" name="pas_photo"/>
			</td>
		</tr>
		<tr>
			<td>Ijazah</td>
			<td>
				<input type="file" class="form-control" name="ijazah"/>
			</td>
		</tr>
		<tr>
			<td>SKHU</td>
			<td>
				<input type="file" class="form-control" name="skhu"/>
			</td>
		</tr>
		<tr>
			<td>SKL</td>
			<td>
				<input type="file" class="form-control" name="skl"/>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</td>
		</tr>
	</table>
</form>