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
                    KATEGORI
                    <small><a class="btn btn-primary" href="#fsimpan" data-toggle="modal">TAMBAH KATEGORI</a></small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA KATEGORI
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                    <td>No.</td>
                                    <td>Kode Kategori</td>
                                    <td>Nama Kategori</td>
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
									<td><?php echo $list->kodekategori;?></td>
									<td><?php echo $list->namakategori;?></td>
									<td>
                                    <form action="<?php echo base_url()."admin/kategori/delete"?>" method="post">
									<a data-toggle="modal" href="#fedit" onClick="
                                  	document.getElementById('kodekategori').value='<?php echo $list->kodekategori;?>';
                                 	document.getElementById('kodekategorix').value='<?php echo $list->kodekategori;?>';
                                   	document.getElementById('namakategori').value='<?php echo $list->namakategori;?>';              
                                   	" class="btn btn-warning">
									EDIT
									</a>
									<input type="hidden" value="<?php echo $list->kodekategori;?>" name="kodekategori"/>
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
                            <h4 class="modal-title" id="defaultModalLabel">Save Kategori</h4>
                        </div>
	<form method="post" action="<?php echo base_url()."admin/kategori/save"?>">
    <div class="modal-body">
        <label for="kodekategori">Kode Kategori</label>
		<input type="text" name="kodekategori" class="form-control">
		<label for="namakategori">Nama Kategori</label>
		<input type="text" name="namakategori" class="form-control" >
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
                            <h4 class="modal-title" id="defaultModalLabel">Edit Kategori</h4>
                        </div>
	<form method="post" action="<?php echo base_url()."admin/kategori/update"?>">
    <div class="modal-body">
        <label for="kodekategori">Kode Kategori</label>
		<input type="text" name="kodekategorix" id="kodekategorix" disabled="disabled" class="form-control">
		<input type="hidden" name="kodekategori" id="kodekategori" class="form-control">
		<label for="namakategori">Nama Kategori</label>
		<input type="text" name="namakategori" id="namakategori" class="form-control" >	
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn">Close</button>
		<input class="btn btn-primary" type="submit" name="edit" value="Edit">    
	</div>
	</form>
	</div>
    </div>
                </div>