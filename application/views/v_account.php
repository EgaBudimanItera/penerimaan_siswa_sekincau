<?php 
foreach($datauser as $listuser){
}
?>
    <div class="col-md-9">
		<ol class="breadcrumb">
			<li><a href="index-2.html">Home</a></li>
			<li class="active">Account</li>
		</ol>
		<h2 class="main-heading text-center">
			MY ACCOUNT <br />
			<span>THIS IS YOUR PROFILE</span>
		</h2>
		<section class="registration-area">
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">Personal Information</h3>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" role="form" method="post" action="<?php echo base_url()."account/edit"?>">
								<div class="form-group">
									<label for="inputFname" class="col-sm-3 control-label">Nama Awal :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="nama_awal" value="<?php echo $listuser->nama_awal;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputLname" class="col-sm-3 control-label">Nama Akhir :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="nama_akhir" value="<?php echo $listuser->nama_akhir;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-sm-3 control-label">Email :</label>
									<div class="col-sm-9">
										<input type="email" class="form-control" name="email" value="<?php echo $listuser->email;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" value="<?php echo $listuser->phone;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputFax" class="col-sm-3 control-label">Fax :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="fax" value="<?php echo $listuser->fax;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputAddress1" class="col-sm-3 control-label">Alamat :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="alamat" value="<?php echo $listuser->alamat;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputCity" class="col-sm-3 control-label">Kota :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="kota" value="<?php echo $listuser->kota;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPostCode" class="col-sm-3 control-label">Kode Pos :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="kode_pos" value="<?php echo $listuser->kode_pos;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputCountry" class="col-sm-3 control-label">Negara :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="negara" value="<?php echo $listuser->negara;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputRegion" class="col-sm-3 control-label">Provinsi :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="provinsi" value="<?php echo $listuser->provinsi;?>">
									</div>
								</div>
								<h3 class="panel-heading inner">
									Password
								</h3>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-3 control-label">Username :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="username" value="<?php echo $listuser->username;?>">

									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-3 control-label">Password :</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" name="password" value="<?php echo $listuser->password;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputRePassword" class="col-sm-3 control-label">Konfirmasi Password :</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" name="konfirmasi_password" value="<?php echo $listuser->password;?>">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<input type="submit" class="btn btn-black" name="simpan" value="Edit">
									</div>
								</div>
							</form>
						</div>							
					</div>
				</div>
			</div>
		</section>
		</div>