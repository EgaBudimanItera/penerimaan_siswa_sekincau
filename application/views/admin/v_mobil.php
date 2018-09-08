<script>
function isdelete()
{
    var answer = confirm("Apakah anda ingin menghapus data ini ?")
    if (answer){
        document.messages.submit();
    }
    
    return false;  
}
</script>           
            <div class="block-header">
                <h2>
                    MOBIL
                    <small>
                    <a class="btn btn-primary" href="#fsimpan" data-toggle="modal">TAMBAH MOBIL</a>
                    </small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA MOBIL
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                    <td>No.</td>
                                    <td>Kode Mobil</td>
                                    <td>Jenis Mobil</td>
                                    <td>Gambar</td>
                                    <td>Harga Sewa</td>
                                    <td>Deskripsi</td>
                                    <td>Kode Kategori</td>
                                    <td>Promo</td>
                                    <td>Kode Merk</td>
                                    <td>Perintah</td>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php 
									$no=0;
									foreach($daftar as $list){
									$no++;
									?>
									<tr> 
                                    <td><?php echo $no;?></td>
									<td><?php echo $list->kodemobil;?></td>
									<td><?php echo $list->jenismobil;?></td>
									<td><img src="<?php echo base_url()."fotomobil/".$list->gambar;?>" width="100px" height="100px"/></td>
                                    <td><?php echo $list->hargasewa;?></td>
                                    <td><?php echo $list->deskripsi;?></td>
                                    <td><?php echo $list->namakategori;?></td>
                                    <td><?php echo $list->promo;?></td>
                                    <td><?php echo $list->namamerk;?></td>
                                    <td>
                                    <form action="<?php echo base_url()."admin/mobil/delete"?>" method="post">
									<a data-toggle="modal" href="#fedit" onClick="
                                  	document.getElementById('kodemobil').value='<?php echo $list->kodemobil;?>';
                                 	document.getElementById('kodemobilx').value='<?php echo $list->kodemobil;?>';
                                   	document.getElementById('jenismobil').value='<?php echo $list->jenismobil;?>';                
                                   	document.getElementById('hargasewa').value='<?php echo $list->hargasewa;?>';                
                                   	document.getElementById('deskripsi').value='<?php echo $list->deskripsi;?>';                
                                   	document.getElementById('kodekategori').value='<?php echo $list->kodekategori;?>';
                                   	document.getElementById('promo').value='<?php echo $list->promo;?>';                 document.getElementById('kodemerk').value='<?php echo $list->kodemerk;?>';
                                   	" class="btn btn-warning">
									EDIT
									</a>
									<input type="hidden" value="<?php echo $list->kodemobil;?>" name="kodemobil"/>
									<input type="submit" value="HAPUS" name="hapus" class="btn btn-danger" onclick="return isdelete();"/>
									</form>
                                    </td>
                                    </tr>
                                    <?php
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    <div class="modal fade" id="fsimpan" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Save Mobil</h4>
                        </div>
	<form method="post" action="<?php echo base_url()."admin/mobil/save"?>" enctype="multipart/form-data">
    <div class="modal-body">
        <label for="kodemobil">Kode Mobil</label>
		<input type="text" name="kodemobil" class="form-control">
		<label for="jenismobil">Jenis Mobil</label>
		<input type="text" name="jenismobil" class="form-control" >
		<label for="gambar">Gambar</label>
		<input name="gambar" type="file" class="form-control" id="gambar" />
		<label for="hargasewa">Harga Sewa</label>
		<input type="number" name="hargasewa" class="form-control" >
		<label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" name="deskripsi"></textarea>
		<label for="kodekategori">Kategori</label>
        <select name="kodekategori" class="form-control show-tick">
        <?php 
		$no=0;
		foreach($daftarkategori as $listkategori){
		$no++;
		?>
        <option value="<?php echo $listkategori->kodekategori;?>"><?php echo $listkategori->namakategori;?></option>
        <?php
		}
		?>
        </select>
        <br/>
        <br/>
        <br/>
		<label for="promo">Promo</label>
		<input type="text" name="promo" class="form-control" >
        <label for="kodemerk">Merk</label>
        <select name="kodemerk" class="form-control show-tick">
        <?php 
		$no=0;
		foreach($daftarmerk as $listmerk){
		$no++;
		?>
        <option value="<?php echo $listmerk->kodemerk;?>"><?php echo $listmerk->namamerk;?></option>
        <?php
		}
		?>
        </select>
        <br/>
        <br/>
        <br/>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn">Close</button>
        <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
    </div>
	</form>
	</div>
    </div>
                </div>

	 <div class="modal fade" id="fedit" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Mobil</h4>
                        </div>
	<form method="post" action="<?php echo base_url()."admin/mobil/update"?>" enctype="multipart/form-data">
    <div class="modal-body">
        <label for="kodemobil">Kode Mobil</label>
		<input type="text" name="kodemobilx" id="kodemobilx" disabled="disabled" class="form-control">
		<input type="hidden" name="kodemobil" id="kodemobil" class="form-control">
		<label for="jenismobil">Jenis Mobil</label>
		<input type="text" name="jenismobil" id="jenismobil" class="form-control" >
		<label for="gambar">Gambar</label>
		<input type="file" name="gambar" class="form-control" >
		<label for="hargasewa">Harga Sewa</label>
		<input type="number" name="hargasewa" id="hargasewa" class="form-control" >
		<label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
		<label for="kodekategori">Kategori</label>
        <select name="kodekategori" class="form-control" id="kodekategori">
        <?php 
		foreach($daftarkategori as $listkategori){
		?>
        <option value="<?php echo $listkategori->kodekategori;?>"><?php echo $listkategori->namakategori;?></option>
        <?php
		}
		?>
        </select>
        <br/>
        <br/>
        <br/>
		<label for="promo">Promo</label>
		<input type="text" name="promo" class="form-control" id="promo">
    	<label for="kodemerk">Merk</label>
        <select name="kodemerk" class="form-control" id="kodemerk">
        <?php 
		foreach($daftarmerk as $listmerk){
		?>
        <option value="<?php echo $listmerk->kodemerk;?>"><?php echo $listmerk->namamerk;?></option>
        <?php
		}
		?>
        </select>
        <br/>
        <br/>
        <br/>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn">Close</button>
		<input class="btn btn-primary" type="submit" name="edit" value="Edit">    
	</div>
	</form>
	</div>
    </div>
                </div>