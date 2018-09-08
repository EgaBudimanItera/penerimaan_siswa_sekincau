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
                    MERK
                    <small><a class="btn btn-primary" href="#fsimpan" data-toggle="modal">TAMBAH MERK</a></small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA MERK
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                    <td>No.</td>
                                    <td>Kode Merk</td>
                                    <td>Nama Merk</td>
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
									<td><?php echo $list->kodemerk;?></td>
									<td><?php echo $list->namamerk;?></td>
									<td>
                                    <form action="<?php echo base_url()."admin/merk/delete"?>" method="post">
									<a data-toggle="modal" href="#fedit" onClick="
                                  	document.getElementById('kodemerk').value='<?php echo $list->kodemerk;?>';
                                 	document.getElementById('kodemerkx').value='<?php echo $list->kodemerk;?>';
                                   	document.getElementById('namamerk').value='<?php echo $list->namamerk;?>';              
                                   	" class="btn btn-warning">
									EDIT
									</a>
									<input type="hidden" value="<?php echo $list->kodemerk;?>" name="kodemerk"/>
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
                            <h4 class="modal-title" id="defaultModalLabel">Save Merk</h4>
                        </div>
	<form method="post" action="<?php echo base_url()."admin/merk/save"?>">
    <div class="modal-body">
        <label for="kodemerk">Kode Merk</label>
		<input type="text" name="kodemerk" class="form-control">
		<label for="namamerk">Nama Merk</label>
		<input type="text" name="namamerk" class="form-control" >
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
                            <h4 class="modal-title" id="defaultModalLabel">Edit Merk</h4>
                        </div>
	<form method="post" action="<?php echo base_url()."admin/merk/update"?>">
    <div class="modal-body">
        <label for="kodemerk">Kode Merk</label>
		<input type="text" name="kodemerkx" id="kodemerkx" disabled="disabled" class="form-control">
		<input type="hidden" name="kodemerk" id="kodemerk" class="form-control">
		<label for="namamerk">Nama Merk</label>
		<input type="text" name="namamerk" id="namamerk" class="form-control" >	
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn">Close</button>
		<input class="btn btn-primary" type="submit" name="edit" value="Edit">    
	</div>
	</form>
	</div>
    </div>
                </div>