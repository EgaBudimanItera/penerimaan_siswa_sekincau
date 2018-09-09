<h4>Periode Pendaftaran</h4><hr/>
<table class="table table-striped table-bordered" id="table_pendaftar">
	<thead>
		<tr>
			<th>No</th>
			<th>Tahun AJaran</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no =1;foreach($data->result() as $row){?>
		<tr>
			<td><?=$no++?></td>
			<td><?=$row->ta?></td>
			<td><?=$row->ket?></td>
			<td>
				<?php 
					$cek = $this->db->get_where('pendaftaran', array('email' => $this->session->userdata('username')));
					if($cek->num_rows() != 0){
				?>
					Anda sudah terdaftar di periode ini
				<?php
					}else{
				?>
					<a href="<?=base_url()?>profil/proses_daftar/<?=$row->idperiode?>" class="btn btn-danger btn_daftar" onclick="return confirm('Apakah anda yakin akan mendaftar pada periode ini?')">Daftar</a>
				<?php
					}
				?>
				
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>