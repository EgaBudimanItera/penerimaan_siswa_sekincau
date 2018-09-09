<body class="bg ltr blue clearfix">

    <div id="wrapper" style="margin-bottom: 152px;">
        <div id="topbgr" class="clearfix">
            <div class="mx-base clearfix">
                <div id="mx-top-header" class="clearfix">
                    <div class="clearfix"></div>
                    <span class="mx_date">
	Saturday, 08 September 2018</span></div>
            </div>
        </div>

        <header id="header" style="height: 70px;">
            <div id="trueHeader">
                <div class="mx-base">
                    <a id="logo-text" style="width:400px;height:60px" href="<?=base_url()?>" title="Sistem Penerimaan Mahasiswa Baru"><img src="<?=base_url()?>assets/logo.png" style="border:0;" alt=""></a>
                    <div id="mx-mmenu" style="display: none;">
                        <select class="select-menu" onchange="window.location.href=this.value">
                            <option value="<?=base_url()?>">&nbsp;Home</option>
                            <!-- <option value="<?=base_url()?>informasi-pendaftaran">&nbsp;Informasi Pendaftaran</option>
                            <option value="<?=base_url()?>informasi-program-studi">&nbsp;Informasi Program Studi</option> -->
                        </select>
                    </div>

                    <div id="hormenu" class="clearfix">
                        <ul class="mx-menu level-0">
                            <li class="menu-item first"><a href="<?=base_url()?>" class="menu-item first"><span class="menu"><span class="menu-title">Home</span></span></a></li>
                            <!-- <li class="menu-item"><a href="<?=base_url()?>informasi-pendaftaran" class="menu-item"><span class="menu"><span class="menu-title">Informasi Pendaftaran</span></span></a></li>
                            <li class="menu-item last"><a href="<?=base_url()?>informasi-program-studi" class="menu-item last"><span class="menu"><span class="menu-title">Informasi Program Studi</span></span></a></li> -->
                        </ul>
                    </div>
                    <script type="text/javascript">
                        //<![CDATA[
                        window.addEvent('domready', function() {
                            var limits = $(document.body);
                            items_v = [], items_h = [];
                            $$('div.submenu').each(function(el) {
                                if (el.getParent().getParent().hasClass('level-0')) {
                                    items_v.push(el);
                                } else {
                                    items_h.push(el);
                                }
                            });
                            new MXMenu(items_v, {
                                direction: 'LTR',
                                bound: limits,
                                fxOptions: {
                                    transition: Fx.Transitions.linear,
                                    duration: 300
                                },
                                animation: 'slidefade',
                                mode: 'vertical',
                                offset: {
                                    x: 0,
                                    y: 0
                                }
                            });
                            new MXMenu(items_h, {
                                direction: 'LTR',
                                bound: limits,
                                fxOptions: {
                                    transition: Fx.Transitions.linear,
                                    duration: 300
                                },
                                animation: 'slidefade',
                                mode: 'horizontal',
                                offset: {
                                    x: -10,
                                    y: 5
                                }
                            });
                        });
                        //]]>
                    </script>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>