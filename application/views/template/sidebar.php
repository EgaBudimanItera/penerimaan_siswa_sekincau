<div id="tophead">
            <div class="mx-base clearfix">
            </div>
        </div>
        <div id="mx-basebody">
            <div class="mx-base main-bg clearfix">
                <div class="clearfix">
                    <div id="mx-leftcol" class="clearfix">
                        <div id="mx-left" class="clearfix">
                            <div class="mx-inner clearfix">
                                <div class="module ">
                                    <div class="mod-wrapper clearfix">
                                        <div class="mod-content clearfix">
                                            <ul class="nav menu">
                                                <?php if(!$this->session->userdata('is_login')){?>
                                                <li class="item-213 current <?php if(!isset($link) || $link == 'dashboard'){ echo 'active'; }?>">
                                                    <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/register.png" alt="Buat Akun Pendaftaran"><span class="image-title">Pendaftaran</span></a>
                                                </li>
                                                <li class="item-214 <?php if($link == 'dashboard_login'){ echo 'active'; }?>">
                                                    <a href="<?=base_url()?>dashboard/dasboard_login"><img src="<?=base_url()?>assets/login.png" alt="Daftar/Login"><span class="image-title">Login</span></a>
                                                </li>
                                                <?php }else{?>
                                                <li class="item-213 current <?php if(!isset($link) || $link == 'profil_siswa'){ echo 'active'; }?>">
                                                    <a href="<?=base_url()?>profil"><img src="<?=base_url()?>assets/login.png" alt="Buat Akun Pendaftaran"><span class="image-title">Profil</span></a>
                                                </li>
                                                <li class="item-213 current <?php if(!isset($link) || $link == 'pendaftaran'){ echo 'active'; }?>">
                                                    <a href="<?=base_url()?>profil/pendaftaran"><img src="<?=base_url()?>assets/register.png" alt="Buat Akun Pendaftaran"><span class="image-title">Pendaftaran </span></a>
                                                </li>
                                                <li class="item-213 current <?php if(!isset($link) || $link == 'pendaftaran_anda'){ echo 'active'; }?>">
                                                    <a href="<?=base_url()?>profil/pendaftaran_anda"><img src="<?=base_url()?>assets/pampleticon.png" alt="Buat Akun Pendaftaran"><span class="image-title">Data Pendaftaran Anda </span></a>
                                                </li>
                                                <?php }?>
                                                <!-- <li class="item-216">
                                                    <a href="<?=base_url()?>informasi-biaya-kuliah"><img src="<?=base_url()?>assets/biayaicon.png" alt="Informasi Biaya Kuliah"><span class="image-title">Informasi Biaya Kuliah</span></a>
                                                </li>
                                                <li class="item-217">
                                                    <a href="<?=base_url()?>pamplet"><img src="<?=base_url()?>assets/pampleticon.png" alt="Pamplet (Brosur)"><span class="image-title">Pamplet (Brosur)</span></a>
                                                </li>
                                                <li class="item-218">
                                                    <a href="<?=base_url()?>catatan-prestasi-mahasiswa"><img src="<?=base_url()?>assets/prestasi.png" alt="Catatan Prestasi Mahasiswa"><span class="image-title">Catatan Prestasi Mahasiswa</span></a>
                                                </li>
                                                <li class="item-220">
                                                    <a href="<?=base_url()?>chat"><img src="<?=base_url()?>assets/LiveChat-icon.png" alt="Chat"></a>
                                                </li>
                                                <li class="item-223">
                                                    <a href="<?=base_url()?>bidikmisi"><img src="<?=base_url()?>assets/bidikmisiicon.png" alt="Bidikmisi"></a>
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                    </div>