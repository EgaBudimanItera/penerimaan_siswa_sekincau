	<div class="col-md-9">
		<ol class="breadcrumb">
			<li><a href="index-2.html">Home</a></li>
			<li class="active">Register</li>
		</ol>
		<h2 class="main-heading text-center">
			Login or create new account
		</h2>
		<section class="login-area">
			<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">Login</h3>
						</div>
						<div class="panel-body">
							<p>
								Silahkan login menggunakan akun milikmu yang sudah terdaftar
							</p>
							<form class="form-inline" role="form" action="<?php echo base_url()."login/aksi_login"?>" method="post">
								<div class="form-group">
									<label class="sr-only" for="username">Username</label>
									<input type="text" class="form-control" placeholder="Username" name="username">
								</div>
								<div class="form-group">
									<label class="sr-only" for="password">Password</label>
									<input type="password" class="form-control" placeholder="Password" name="password">
								</div>
								<input type="submit" class="btn btn-black" value="Login">
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Buat akun baru
							</h3>
						</div>
						<div class="panel-body">
							<p>
								Pendaftaran memungkinkan Anda menghindari pengisian formulir penagihan dan pengiriman setiap kali Anda melakukan checkout di situs ini
							</p>
							<a href="<?php echo base_url()."register/index"?>" class="btn btn-black">
								Register
							</a>
						</div>
					</div>
				
				</div>
			</div>
		</section>
	</div>