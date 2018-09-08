			<?php
			foreach($count as $ada)
			{	
			}
			$jumlahdata = $ada->jumlah;
			
			foreach($kategori as $kategorinya)
			{
			}
			
			?>
            <div class="col-md-9">
				<ol class="breadcrumb">
					<li><a href="index-2.html">Home</a></li>
					<li class="active">Kategori : <?php echo $kategorinya->namakategori;?></li>
				</ol>
				<h2 class="main-heading2">
					Kategori : <?php echo $kategorinya->namakategori;?>
				</h2>
			
				<div class="product-filter">
					<div class="row">
						<div class="col-md-4">
							<div class="display">
								<a href="<?php echo base_url()."kategori/index/".$this->uri->segment(3)."/0";?>" class="active">
									<i class="fa fa-th-list" title="List View"></i>
								</a>
								<a href="<?php echo base_url()."kategori2/index/".$this->uri->segment(3)."/0";?>">
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
					<div class="col-xs-12">
						<div class="product-col list clearfix">
							<div class="image">
								<img src="<?php echo base_url()."/fotomobil/".$listmobil->gambar;?>" alt="product" width="250px" height="250px" class="img-responsive" />
							</div>
							<div class="caption">
								<h4><a href="product-full.html"><?php echo $listmobil->jenismobil;?></a></h4>
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
				
				<?php
				if(empty($daftarmobil))
						{
						}
						else
						{
					$JmlHalaman = ceil($jumlahdata/3); 
					
					$nmr = '';
					$angka = 0;
					for ( $i = 1; $i<= $JmlHalaman; $i++ ){
					$nmr .= "<li><a href=".base_url()."kategori/index/".$this->uri->segment(3)."/".$angka.">$i</a></li>";
					$angka = $angka + 3;
					}
					
					//Tampilkan navigasi
				?>
				
					<div class="col-sm-6 pagination-block">
						<ul class="pagination">
						  <?php echo $nmr?>
						</ul>
					</div>
					
					<div class="col-sm-6 results">
						Showing 
						<?php
							echo $this->uri->segment(4)+1;
						?>
						to 
						<?php
							echo $this->uri->segment(4)+3;
						?> of <?php echo $jumlahdata;?> (<?php echo $JmlHalaman;?> Pages)
					</div>
				<?php
						}
				?>	
				
				</div>
				</div>