	<div class="col-md-9">
		<ol class="breadcrumb">
			<li><a href="index-2.html">Home</a></li>
			<li class="active">Register</li>
		</ol>
		<h2 class="main-heading text-center">
			Register <br />
			<span>Create New Account</span>
		</h2>
		<section class="registration-area">
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">Personal Information</h3>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" role="form" method="post" action="<?php echo base_url()."register/add"?>">
								<div class="form-group">
									<label for="inputFname" class="col-sm-3 control-label">Nama Awal :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="nama_awal" placeholder="Nama Awal">
									</div>
								</div>
								<div class="form-group">
									<label for="inputLname" class="col-sm-3 control-label">Nama Akhir :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="nama_akhir" placeholder="Nama Akhir">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-sm-3 control-label">Email :</label>
									<div class="col-sm-9">
										<input type="email" class="form-control" name="email" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-3 control-label">Username :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="username" placeholder="Username">

									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-3 control-label">Password :</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" name="password" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label for="inputRePassword" class="col-sm-3 control-label">Konfirmasi Password :</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<input type="submit" class="btn btn-black" name="simpan" value="Register">
									</div>
								</div>
							</form>
						</div>							
					</div>
				</div>
			</div>
		</section>
		</div>