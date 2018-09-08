<?php
if($this->session->userdata('status') != "login"){
	redirect("admin/login");
}
?>
<?php 
foreach($dataadmin as $listadmin){
}
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>TSAMANIA</title>
    <!-- Favicon-->
    <link rel="icon" href='<?php echo base_url()."/asset/favicon.ico";?>' type="image/x-icon">

    <!-- Google Fonts -->
    <link href='<?php echo base_url()."/asset/materialicons.css";?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url()."/asset/family.css";?>' rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href='<?php echo base_url()."/asset/plugins/bootstrap/css/bootstrap.css";?>' rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href='<?php echo base_url()."/asset/plugins/node-waves/waves.css";?>' rel="stylesheet" />

    <!-- Animation Css -->
    <link href='<?php echo base_url()."/asset/plugins/animate-css/animate.css";?>' rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href='<?php echo base_url()."/asset/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css";?>' rel="stylesheet">

    <!-- Custom Css -->
    <link href='<?php echo base_url()."/asset/css/style.css";?>' rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href='<?php echo base_url()."/asset/css/themes/all-themes.css";?>' rel="stylesheet" />
</head>

<body class="theme-red">

    <!-- Page Loader -->
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <nav class="navbar">
        <div class="container-fluid">
        
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url()."admin/home"?>">TSAMANIA</a>
            </div>
         
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                <a href="#ffoto" data-toggle="modal"><img src="<?php echo base_url()."fotoprofil/".$listadmin->fotoadmin;?>" width="50px" height="50px"/> </a>   
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $listadmin->namaadmin;?></div>
                    <div class="email"><?php echo $listadmin->alamatadmin;?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#fprofile" data-toggle="modal"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="#fpassword" data-toggle="modal"><i class="material-icons">favorite</i>Password</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="<?php echo base_url()."admin/login/logout"?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="active header">MAIN NAVIGATION</li>
                    <li><a href="<?php echo base_url()."admin/home"?>"><i class="material-icons">home</i><span>Home</span></a></li>
                    <li><a href="<?php echo base_url()."admin/kategori"?>"><i class="material-icons">text_fields</i><span>Kategori</span></a></li>
                    <li><a href="<?php echo base_url()."admin/mobil"?>"><i class="material-icons">layers</i><span>Mobil</span></a></li>
                    <li><a href="<?php echo base_url()."admin/laporanmobil"?>"><i class="material-icons">widgets</i><span>Laporan Mobil</span></a></li>
                    <li><a href="<?php echo base_url()."admin/laporanpemesanan"?>"><i class="material-icons">swap_calls</i><span>Laporan Pemesanan</span></a></li>
                    
                    <li><a href="<?php echo base_url()."admin/merk"?>"><i class="material-icons">assignment</i><span>Merk</span></a></li>
                    <!--<li><a href=""><i class="material-icons">view_list</i><span>Tables</span></a></li>
                    <li><a href=""><i class="material-icons">perm_media</i><span>Medias</span></a></li>
                    <li><a href=""><i class="material-icons">pie_chart</i><span>Charts</span></a></li>
                    <li><a href=""><i class="material-icons">content_copy</i><span>Example Pages</span></a></li>
                    <li><a href=""><i class="material-icons">map</i><span>Maps</span></a></li>
                    <li><a href=""><i class="material-icons">trending_down</i><span>Multi Level Menu</span></a></li>
                    <li><a href=""><i class="material-icons">update</i><span>Changelogs</span></a></li>
                    -->
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">TSAMANIA</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
    </section>
    <section class="content">
        <div class="container-fluid">
<img src="<?php echo base_url()."asset/header.png";?>" width="100%" height="100px"/>
<br/>
<br/>
    <?php
	include("v_content.php");
	?>
    
    <div class="modal fade" id="fprofile" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Change Profile</h4>
                        </div>
	<form method="post" action="<?php echo base_url()."admin/kategori/updateprofile"?>">
    <div class="modal-body">
        <label for="namaadmin">NAMA</label>
                        	<input type="text" name="namaadmin" value="<?php echo $listadmin->namaadmin;?>" class="form-control"/>
							<br/>
							<label for="alamatadmin">ALAMAT</label>
                        	<textarea name="alamatadmin" class="form-control"><?php echo $listadmin->alamatadmin;?></textarea>
							<br/>
                        	<label for="jkadmin">JENIS KELAMIN</label>
                        	<select name="jkadmin" class="form-control">
                            	<option selected value="<?php echo $listadmin->jkadmin;?>"><?php echo $listadmin->jkadmin;?></option>
                            	<option value="Laki-laki">Laki-laki</option>
                            	<option value="Perempuan">Perempuan</option>
                            </select>
							<br/>
							<br/>
							<br/>
                            <label for="teleponadmin">TELEPON</label>
                        	<input type="text" name="teleponadmin" value="<?php echo $listadmin->teleponadmin;?>" class="form-control"/>
                            <br/>
                        	<label for="agamaadmin">AGAMA</label>
                            <select name="agamaadmin" class="form-control">
                            	<option selected value="<?php echo $listadmin->agamaadmin;?>"><?php echo $listadmin->agamaadmin;?></option>
                            	<option value="Islam">Islam</option>
                            	<option value="Kristen">Kristen</option>
                            	<option value="Katholik">Katholik</option>
                            	<option value="Hindu">Hindu</option>
                            	<option value="Buddha">Buddha</option>
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

	 <div class="modal fade" id="fpassword" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Change Password</h4>
                        </div>
	<form method="post" action="<?php echo base_url()."admin/kategori/updatepassword"?>">
    <div class="modal-body">
<label for="passwordlama">PASSWORD LAMA</label>
                        	<input type="password" class="form-control" name="passwordlama"/>
                        	<label for="passwordbaru">PASSWORD BARU</label>
                        	<input type="password" class="form-control" name="passwordbaru"/>
                        	<label for="konfirmasipassword">KONFIRMASI PASSWORD</label>
                        	<input type="password" class="form-control" name="konfirmasipassword"/>    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn">Close</button>
		<input class="btn btn-primary" type="submit" name="edit" value="Edit">    
	</div>
	</form>
	</div>
    </div>
                </div>
 
 <div class="modal fade" id="ffoto" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Change Foto</h4>
                        </div>
	<form method="post" action="<?php echo base_url()."admin/kategori/updatefoto"?>" enctype="multipart/form-data">
    <div class="modal-body">
 	<label>FOTO SEBELUMNYA</label>
                        	<img src="<?php echo base_url()."fotoprofil/".$listadmin->fotoadmin;?>" width="100px" height="100px"/>
                            <br/>
                        	<label for="foto">FOTO</label>
                        	<input type="file" name="foto" class="form-control"/>
                       </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn">Close</button>
		<input class="btn btn-primary" type="submit" name="edit" value="Edit">    
	</div>
	</form>
	</div>
    </div>
                </div>
                   
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src='<?php echo base_url()."/asset/plugins/jquery/jquery.min.js";?>'></script>

    <!-- Bootstrap Core Js -->
    <script src='<?php echo base_url()."/asset/plugins/bootstrap/js/bootstrap.js";?>'></script>

    <!-- Select Plugin Js -->
    <script src='<?php echo base_url()."/asset/plugins/bootstrap-select/js/bootstrap-select.js";?>'></script>

    <!-- Slimscroll Plugin Js -->
    <script src='<?php echo base_url()."/asset/plugins/jquery-slimscroll/jquery.slimscroll.js";?>'></script>

    <!-- Waves Effect Plugin Js -->
    <script src='<?php echo base_url()."/asset/plugins/node-waves/waves.js";?>'></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src='<?php echo base_url()."/asset/plugins/jquery-datatable/jquery.dataTables.js";?>'></script>
    <script src='<?php echo base_url()."/asset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js";?>'></script>
    <script src='<?php echo base_url()."/asset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js";?>'></script>
    <script src='<?php echo base_url()."/asset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js";?>'></script>
    <script src='<?php echo base_url()."/asset/plugins/jquery-datatable/extensions/export/jszip.min.js";?>'></script>
    <script src='<?php echo base_url()."/asset/plugins/jquery-datatable/extensions/export/pdfmake.min.js";?>'></script>
    <script src='<?php echo base_url()."/asset/plugins/jquery-datatable/extensions/export/vfs_fonts.js";?>'></script>
    <script src='<?php echo base_url()."/asset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js";?>'></script>
    <script src='<?php echo base_url()."/asset/plugins/jquery-datatable/extensions/export/buttons.print.min.js";?>'></script>

    <!-- Custom Js -->
    <script src='<?php echo base_url()."/asset/js/admin.js";?>'></script>
    <script src='<?php echo base_url()."/asset/js/pages/tables/jquery-datatable.js";?>'></script>

    <!-- Demo Js -->
    <script src='<?php echo base_url()."/asset/js/demo.js";?>'>
    </script>
    
    <!-- Bootstrap Notify Plugin Js -->
    <script src='<?php echo base_url()."/asset/plugins/bootstrap-notify/bootstrap-notify.js";?>'></script>
    
    <script src='<?php echo base_url()."/asset/js/pages/ui/modals.js";?>'></script>
</body>

</html>