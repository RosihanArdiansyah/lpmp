

<div class="medium-8 large-8 columns">

<div class="item col-xs-12 col-sm-12" style="">

			<div id="example1" class="slider-pro">
		<div class="sp-slides">
		    
		   
		    
		    
		    
		<?php
						 	$querySlider = mysql_query("SELECT *FROM jos_content WHERE headline = 'Y' ORDER BY id DESC LIMIT 0,5");
						 	while ($s = mysql_fetch_array($querySlider))
						 	{
$isi_berita = htmlentities(strip_tags($s['fulltext'])); // membuat paragraf pada isi berita dan mengabaikan tag html
									$isi = substr($isi_berita,0,180); // ambil sebanyak 220 karakter
									$isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat
$isi = str_replace("Jakarta, Kemendikbud&amp;nbsp;--- ", " ", $isi);

						 		?>
						 		<div class="sp-slide">
								
										<a href="#" target="_blank"><img class="sp-image" src="<?php echo $alamat_website.$f[folder];?>/css/images/blank.gif"
										data-src="<?php echo $alamat_website;?>images/stories/<?php echo $s['images'];?>"
										data-retina="<?php echo $alamat_website;?>images/stories/<?php echo $s['images'];?>"/>
</a>
									<p class="sp-layer sp-black sp-padding" style="font-size:16px;font-weight:bolder;"
										data-position="bottomLeft" data-vertical="65" data-horizontal="2%" data-width="96%" 
										data-show-transition="up" data-show-delay="400" data-hide-transition="down">
											<a href="berita-<?=$s[id]?>-<?=$s[alias]?>.html" target="_blank"><?php echo $s['title'];?> </a>

										
									</p>

<p class="sp-layer sp-white sp-padding hide-small-screen" 
					data-position="bottomLeft" data-horizontal="2%" data-vertical="10"
					data-show-transition="up" data-show-delay="500" data-hide-transition="down">
					<?php echo $isi;?> ... <a href="berita-<?=$s[id]?>-<?=$s[alias]?>.html" style="color:#000;" target="_blank"><strong> more </strong></a>
				</p>
										


								</div>
						 		<?php
						 	}
						 ?>
								
							

		</div>

		
    </div>
	</div>
		</div>
		

		



<section id="categories-2 sidebar" class="widget widget_categories medium-2 large-2 columns" style="padding:0;">
			<div class="tmm_row">
				<div class="relative">
					<!-- LayerSlider -->
					<div style="width:100%;max-height:200px;margin:0 auto;margin-bottom: 0px;">
							<h4 style="font-size:13px;background-color: #11547b;color: #fff;padding: 0.9375rem 1.00rem;">Arsip</h4>
							<ul style="padding-left:10px;">

<?php
$queryPengumuman = mysql_query("SELECT *FROM ashari_pengumuman ORDER BY pengumuman_id DESC LIMIT 0,3");
while ($p = mysql_fetch_array($queryPengumuman)) {
?>
<li style="list-style:circle;"><a href="pengumuman-<?=$p['pengumuman_id']?>-<?=$p[pengumuman_alias]?>.html""><?php echo $p['pengumuman_judul'];?></a></li>

<?php
}
?>



</ul>					</div>

					<!-- End LayerSlider -->

				</div>
			</div>
			</section>


<section id="categories-2 sidebar" class="widget widget_categories medium-2 large-2 columns" style=""  >
				
			<div class="tmm_row">
				<div class="relative">
					<!-- LayerSlider -->

												
<h4 style="background-color: #11547b;font-size:13px;color: #fff;padding: 0.9375rem 1.25rem;">KEPALA LPMP SULSEL</h4>
							<img src="https://lpmpsulsel.kemdikbud.go.id/images/profile.jpg" width="100%" style="max-height:215px;" class="ls-bg" alt="Dr. H. Abdul Halim Muharram"/>

							<center><strong>Dr. H. Abdul Halim Muharram</strong></center>

						
			
					<!-- End LayerSlider -->

				</div>
			</div>
			</section>


<p></p><p></p>
		<div class="medium-12 large-12 columns">
			<ul class="block-with-icons">				
				
				<li>
					<a href="profil-2-visi-dan-misi.html">
						<i class="icon-calendar-inv"></i>
						<h5>Visi - Misi</h5>
					</a>
				</li>
				
				<li>
					<a href="http://ult.kemdikbud.go.id/" target="_blank">
						<i class="icon-clock"></i>
						<h5>ULT</h5>
					</a>
				</li>
				
<li>
					<a href="#">
						<i class="icon-group"></i>
						<h5>ZI-WBK</h5>
					</a>
				</li>
			</ul>

		</div>




<!-- content left -->
<section id="main" class="medium-9 large-9 columns">


<div class="section margin-bottom-10 columns medium-12 large-12 background-color-off">

				<div class="tmm_row row" style="max-height:600px;">

					<div class="relative">
						<a href="semua-berita.html"><h2 class="section-title">Daftar Berita</h2></a>
						<div class="row post-list two-cols">


							<?php
								$queryHome = mysql_query("SELECT *FROM $berita WHERE (catid = '37' OR catid = '34' OR catid='48')ORDER BY publish_up DESC LIMIT 0,6");
								while ($home = mysql_fetch_array($queryHome))
								{
									// Tampilkan hanya sebagian isi berita
									$isi_berita = htmlentities(strip_tags($home[fulltext])); // membuat paragraf pada isi berita dan mengabaikan tag html
									$isi = substr($isi_berita,0,130); // ambil sebanyak 220 karakter
									$isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat
$isi = str_replace("Jakarta, Kemendikbud&amp;nbsp;--- ", " ", $isi);
									$gambar = $home['images'];
									$tanggalBerita = tgl_indo($home['publish_up']);
									if ($gambar == "")
									{
										$gambar = "banner-diknas.png";
									} 
									?>
										<article class="medium-6 large-6 columns">




											<div class="post post-alternate-1 elementFadeRun">
												<div class="entry-media">
												<a href="berita-<?=$home[id]?>-<?=$home[alias]?>.html" title="<?php echo $home['title'];?>" class="image-post item-overlay ">
													<img src="<?php echo $alamat_website;?>images/stories/<?php echo $gambar;?>" alt="" style="height:200px;" />
												</a>

												<header class="entry-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
													<h3 class="entry-title">
														<a href="berita-<?=$home[id]?>-<?=$home[alias]?>.html"><?php echo $home['title'];?></a></h3>
												</header>
											</div>
												<div class="entry-content">
													<?php echo $isi; ?> <a href="berita-<?=$home[id]?>-<?=$home[alias]?>.html"> <strong> ...more</strong> </a>
												</div>

												<footer class="entry-footer">


													<div class="right">
														<span class="posted-on"><a><?php echo $tanggalBerita;?></a></span>
														
													</div>

												</footer>
											</div>
											<!--/ .post-classic-->

										</article>
									<?php
								}

							?>





							















						</div>
						<!--/ .post-area-->

					</div>

				</div>

			</div>
			<!--/ .section -->
			<div class="section padding-off columns medium-12 large-12 background-color-off">

				<div class="row">

					<div class="relative">
						<h2 class="section-title"><a href="semua-tulisan.html">Tulisan</a></h2>

						<div class="row post-list two-cols">

							<?php
								$queryArtikel = mysql_query("SELECT *FROM $berita WHERE catid = '49' ORDER BY publish_up DESC LIMIT 0,6");

								while ($artikel = mysql_fetch_array($queryArtikel))
								{

									?>

											<article class="medium-6 large-6 columns" style="height:150px;">

												<div class="post border post-alternate-2 slideUp">

													<div class="entry-media">
															<img src="images/note-icon.png" alt=""/>
													</div>

													<div class="entry-content">

														<header class="entry-header">
				                                            
															<h4 class="entry-title"><a href="tulisan-<?=$artikel[id]?>-<?=$artikel[alias]?>.html"><?php echo $artikel['title'];?></a></h4>
														</header>

														<footer class="entry-footer">
															<span class="posted-on"><a><?php echo tgl_indo($artikel['publish_up']);?></a></span>
															
														</footer>

													</div>
												</div>
												<!--/ .post-extra-->

											</article>
									<?php

								}
							?>




							

							

						</div>
						<!--/ .post-area-->

					</div>

				</div>

			</div>
            
            
            
            
            
            
            <!--untuk slider image -->
    
            
            
            
		
		</section>

        
        
	
		<!-- content kanan -->
		<aside id="sidebar" class="medium-3 large-3 columns">

			<?php
				include "content_kanan.php";
			?>


		</aside>
		<!-- akhir dari content kanan -->