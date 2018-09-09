<h4>Upload bukti bayar</h4><hr/>
<?php 
if($data->num_rows() == 0){
	$aksi = 'tambah';
}else{
	$aksi = 'edit';
}
?>
<form method="POST" action="<?=base_url()?>profil/proses_upload_bukti_bayar" enctype="multipart/form-data">
	<table class="table table-striped">
		<tr>
			<td>Bukti Bayar</td>
			<td>
				<input type="hidden" name="aksi" value="<?=$aksi?>">
				<input type="hidden" name="idpendaftar" id="idpendaftar" value="<?=$idpendaftar?>">
				<input type="file" name="bukti_bayar" class="form-control" required />
			</td>
		</tr>
		<tr>
			<td>Jumlah Bayar</td>
			<td>
				<input type="number" name="jumlah_bayar" class="form-control" value="<?=@$data->row()->jumlah?>" required/>
			</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>
				<textarea name="keterangan" class="form-control" required><?=@$data->row()->keterangan?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
			<td>
				<button class="btn btn-primary" type="submit" required>Upload</button>
			</td>
		</tr>
	</table>
</form>