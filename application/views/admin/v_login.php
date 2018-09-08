<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>TSAMANIA</title>
    <!-- Favicon-->
    <link rel="icon" href='<?php echo base_url()."/asset/favicon.ico";?>' type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

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
    <section class="content">
        <div class="container-fluid">
            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LOGIN
                            </h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url()."admin/login/aksi_login"?>" method="post">
                                <label for="username">Username</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" placeholder="Enter your username">
                                    </div>
                                </div>
                                <label for="password">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                                    </div>
                                </div>
                                <input type="submit" name="btnsubmit" value="LOGIN" class="btn btn-primary"/>
                            </form>
                        </div>
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