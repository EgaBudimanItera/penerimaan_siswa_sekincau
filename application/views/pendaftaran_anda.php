<h4>Pendaftaran Anda</h4><hr/>
<table class="table table-striped table-bordered" id="table_pendaftar">
	<thead>
		<tr>
			<th>No</th>
			<th>Tahun AJaran</th>
			<th>Keterangan</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no =1;foreach($data->result() as $row){?>
		<tr>
			<td><?=$no++?></td>
			<td><?=$row->ta?></td>
			<td><?=$row->ket?></td>
			<th>
				<?php 
				if($row->statusdaftar == 0){
					echo 'Menunggu Verifikasi';
				}else if($row->statusdaftar == 1){
					echo 'Ter-Verifikasi';
				}else if($row->statusdaftar == 2){
					echo 'Diterima';
				}else if($row->statusdaftar == 3){
					echo 'Ditolak';
				}
				?>
			</th>
			<td>
				<a href="<?=base_url()?>profil/upload_bukti_bayar/<?=$row->nodaftar?>" class="btn btn-success">Upload Bukti Bayar</a>			
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>