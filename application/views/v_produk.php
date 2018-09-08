			<?php 
				foreach($dataproduk as $listproduk)
				{
				}
			?>
            <div class="col-md-9">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Produk</li>
				</ol>
				<div class="row product-info">
					<div class="col-sm-5 images-block">
						<p>
							<img src="<?php echo base_url()."/fotomobil/".$listproduk->gambar;?>" alt="Image" class="img-responsive thumbnail" />
						</p>
					</div>
					
					<div class="col-sm-7 product-details">
						<hr />
						<h2><?php echo $listproduk->jenismobil;?></h2>
						<ul class="list-unstyled manufacturer">
							<li>
								<span>Deskripsi:</span> <?php echo $listproduk->deskripsi;?>
							</li>
							<li>
								<span>Merk:</span> <?php echo $listproduk->namamerk;?>
							</li>
							<li>
								<span>Kategori:</span> <?php echo $listproduk->namakategori;?>
							</li>
							<li>
								<span>Promo:</span> <?php echo $listproduk->promo;?>
							</li>
						</ul>
						
						<hr />
						<div class="price">
							<span class="price-head">Harga :</span>
							<span class="price-new">Rp. <?php echo $listproduk->hargasewa;?></span> 
						</div>
						<hr />
						<div class="options">
							<div class="cart-button button-group">
                            <?php
								  if($this->session->userdata('status') == "login"){
								  ?>
                          			<form action="<?php echo base_url()."produk/sewa/".$listproduk->kodemobil;?>" method="post">
                                    <input type="hidden" name="biaya" value="<?php echo $listproduk->hargasewa;?>"/>
                                    <button type="submit" class="btn btn-compare">
										<i class="fa fa-shopping-cart"></i> 
                                        Sewa Mobil
									</button>
                                    </form>
                            <?php
								  }
							?>	
							</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="product-info-box">
					<h4 class="heading">Description</h4>
					<div class="content panel-smart">
						<p>
							<?php echo $listproduk->deskripsi;?>
						</p>
					</div>
				</div>
				
				<div class="product-info-box">
					<h4 class="heading">Other Products</h4>
					<div class="row">
						<?php 
						foreach($randmobil as $listrand)
						{
						?>
						<div class="col-md-4 col-sm-6">
							<div class="product-col">
								<div class="image">
									<img src="<?php echo base_url()."fotomobil/".$listrand->gambar;?>" alt="product" class="img-responsive" />
								</div>
								<div class="caption">
									<h4><a href="product-full.html"><?php echo $listrand->jenismobil;?></a></h4>
									<div class="price">
										<span class="price-new">Rp. <?php echo $listrand->hargasewa;?></span> 
									</div>
									<div class="cart-button button-group">
                                    <button type="button" class="btn btn-compare" onclick="location.href='<?php echo base_url()."produk/index/".$listrand->kodemobil;?>'">
										<i class="fa fa-heart"></i> 
                                        Detail Produk
									</button>										
									</div>
								</div>
							</div>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>