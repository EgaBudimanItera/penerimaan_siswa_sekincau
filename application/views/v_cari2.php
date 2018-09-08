			<div class="col-md-9">
				<ol class="breadcrumb">
					<li><a href="index-2.html">Home</a></li>
					<li class="active">Cari : <?php echo $this->uri->segment(3);?></li>
				</ol>
				<h2 class="main-heading2">
					Cari Jenis Mobil : <?php echo $this->uri->segment(3);?>
				</h2>
			
				<div class="product-filter">
					<div class="row">
						<div class="col-md-4">
							<div class="display">
								<a href="<?php echo base_url()."cari/index/".$this->uri->segment(3);?>">
									<i class="fa fa-th-list" title="List View"></i>
								</a>
								<a href="<?php echo base_url()."cari2/index/".$this->uri->segment(3);?>" class="active">
									<i class="fa fa-th" title="Grid View"></i>
								</a>
							</div>
						 </div>
						
					</div>						 
				</div>
				<div class="row">
				<?php
				 if(empty($daftarmobil))
						{
							?>
                            <h1 align="center">data yang anda cari tidak ada</h1>
                            <?php
						}
						else
						{
					foreach($daftarmobil as $listmobil)
					{
					?>
					<div class="col-md-4 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="<?php echo base_url()."/fotomobil/".$listmobil->gambar;?>" alt="product" class="img-responsive" />
							</div>
							<div class="caption">
								<h4><a href="product.html"><?php echo $listmobil->jenismobil;?></a></h4>
								<div class="description">
									<?php echo $listmobil->deskripsi;?>
								</div>
								<div class="description">
									<span class="price-new">Merk :<?php echo $listmobil->namamerk;?></span> 
								</div>
								<div class="description">
									<span class="price-new">Kategori :<?php echo $listmobil->namakategori;?></span> 
								</div>
								<div class="description">
									<span class="price-new">Promo :<?php echo $listmobil->promo;?></span> 
								</div>
								<div class="price">
									<span class="price-new">Rp. <?php echo $listmobil->hargasewa;?></span> 
								</div>
								<div class="cart-button button-group">
<button type="button" class="btn btn-compare" onclick="location.href='<?php echo base_url()."produk/index/".$listmobil->kodemobil;?>'">
										<i class="fa fa-heart"></i> 
                                        Detail Produk
									</button>															
								</div>
							</div>
						</div>
					</div>
					<?php
					}
				}
				?>
				</div>
				<div class="row">
				</div>
				</div>