
		<script type="text/javascript">
			$(document).ready(function ($) {
				$('#example1').sliderPro({
					width: '100%',
					forceSize: 'fullWidth',
					height: 500,
					arrows: true,
					buttons: true,
					waitForLayers: true,
					// thumbnailWidth: 360,
					// thumbnailHeight: 200,
					thumbnailPointer: true,
					autoplay: true,
					autoScaleLayers: false,
					breakpoints: {
						500: {
							thumbnailWidth: 120,
							thumbnailHeight: 50
						},
					},
					
				});
			});
		</script>
		<!-- - - - - - - - MAIN  - - - - - - - -->
		
			<div class="medium-8 large-8 ">
				<div class="item">

					<div id="example1" class="slider-pro" style="display: block;">
						<div class="sp-slides" >

							<?php foreach($post_headline_slider->result() as $headline):?>
							<?php 
									$isi_berita = htmlentities(strip_tags($headline->post_contents)); // membuat paragraf pada isi berita dan mengabaikan tag html
									$isi = substr($isi_berita,0,180); // ambil sebanyak 220 karakter
									$isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat
									$isi = str_replace("Jakarta, Kemendikbud&amp;nbsp;--- ", " ", $isi);
									if ($headline->post_image == "") 
									{
										$gambar_headline = "default_image.jpg";
									}
									else 
									{
										$gambar_headline = $headline->post_image;
									}
								?>
							<div class="sp-slide"> 
								<a href="#" target="_blank"><img class="sp-image" 
										src="<?php echo base_url();?>assets/images/blank.gif"
										data-src="<?php echo base_url();?>assets/images/<?php echo $gambar_headline;?>"
										data-retina="<?php echo base_url();?>assets/images/<?php echo $gambar_headline;?>" />
								</a>
								<p class="sp-layer sp-black sp-padding" style="font-size:16px;font-weight:bolder;text-align: center;"
									data-position="bottomLeft" data-vertical="10" data-horizontal="2%" data-width="96%"
									data-show-transition="up" data-show-delay="400" data-hide-transition="down">
									<a href="<?php echo site_url('berita/'.$headline->post_slug);?>"
										target="_blank"><?php echo $headline->post_title;?> </a>


								</p>

								<!-- <p class="sp-layer sp-white sp-padding hide-small-screen" data-position="bottomLeft"
									data-horizontal="2%" data-vertical="10" data-show-transition="up"
									data-show-delay="500" data-hide-transition="down">
									<?php echo $isi;?> ... <a
										href="<?php echo site_url('berita/'.$headline->post_slug);?>" style="color:#000;"
										target="_blank"><strong> more </strong></a>
								</p> -->
							</div>

							<?php endforeach;?>





						</div>


					</div>

				</div>
			</div>
			
		
			<div class="small-8 medium-12 large-12 columns" style="padding-top : 64px; width:100%;">
				<ul class="block-with-icons" >
					<li>
						<a href="<?=site_url('page/visi-dan-misi')?>">
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
						<a href="https://sites.google.com/view/rbilpmpsulsel/home" target="_blank">
							<i class="icon-group"></i>
							<h5>ZI-WBK</h5>
						</a>
					</li>
				</ul>
			</div>
			<!-- content left -->
			<section id="main" class="medium-9 large-9 columns">
				<div class="section margin-bottom-10 columns medium-12 large-12 background-color-off">
					<div class="tmm_row row" style="max-height:600px; border-radius: 8px;">
						<div class="relative">
							<h2 class="section-title"><a href="semua-berita.html">Kegiatan</a></h2>
							<div class="row post-list two-cols" style="border-radius: 8px;">
							<ul style="padding-left:10px; ">

							<?php foreach($post_kegiatan->result() as $kegiatan):?>
								<?php $tanggalKegiatan = date('d M Y',strtotime($kegiatan->kegiatan_mulai_tanggal)); ?>
									<li style="list-style:circle;padding-top:16px;"><a style="color: #11547B"
											href="<?php echo site_url('agenda/'.$kegiatan->kegiatan_slug);?>"><?php echo $kegiatan->kegiatan_title;?><br /><span style="color: #333;">(<?=$tanggalKegiatan?>)</span></a>
									</li>
							<?php endforeach;?>

							</ul>



							</div>
							<!--/ .post-area-->
						</div>
					</div>
				</div>

				<!-- Daftar Berita -->

				<div class="section margin-bottom-10 columns medium-12 large-12 background-color-off">
					<div class="tmm_row row" style="max-height:600px; border-radius: 8px;">
						<div class="relative">
							<h2 class="section-title"><a href="semua-berita.html">Daftar Berita</a></h2>
							<div class="row post-list two-cols" style="border-radius: 8px;">
								<?php foreach($post_berita->result() as $berita):?>
								<?php
									// Tampilkan hanya sebagian isi berita
									$isi_berita = htmlentities(strip_tags($berita->post_title)); // membuat paragraf pada isi berita dan mengabaikan tag html
									$isi = substr($isi_berita,0,100); // ambil sebanyak 220 karakter
									$isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat
									$isi = str_replace("Jakarta, Kemendikbud&amp;nbsp;--- ", " ", $isi);
									$gambar = $berita->post_image;
									$tanggalBerita = date('d M Y',strtotime($berita->post_date));
									if ($gambar == "")
									{
										$gambar = "default_image.jpg";
									}
									

									?>
								<article class="medium-6 large-6 columns">
									<div class="post post-alternate-1 elementFadeRun">
										<div class="entry-media">
											<a href="<?php echo site_url('berita/'.$berita->post_slug);?>"
												title="<?php echo $berita->post_title;?>"
												class="image-post item-overlay " style="border-radius: 8px;">
												<img src="<?php echo base_url();?>assets/images/<?php echo $gambar;?>"
													alt="" style="height:200px; border-radius: 8px;" />
											</a>
											<!-- <header class="entry-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
												
												<h3 class="entry-title">
													<a
														href="<?php echo site_url('berita/'.$berita->post_slug);?>"><?php echo $isi;?></a>
												</h3>
											</header> -->
										</div>
										<div class="entry-content">
											<!-- <?php echo $isi; ?>  -->
											<a
												href="<?php echo site_url('berita/'.$berita->post_slug);?>"><?php echo $isi; ?> <strong>
												...more</strong> </a>
										</div>
										<footer class="entry-footer">
											<div class="right">
												<span class="posted-on" style="font-weight: bold; color:black;"><a><?php echo $tanggalBerita;?></a></span>
											</div>
										</footer>
									</div>
									<!--/ .post-classic-->
								</article>

								<?php endforeach;?>



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
								<?php foreach($post_artikel->result() as $artikel):?>
								<article class="medium-6 large-6 columns" style="height:150px;">
									<div class="post border post-alternate-2 slideUp">
										<div class="entry-media">
											<img src="<?php echo base_url('theme/diplomat/images/note-icon.png')?>"
												alt="" />
										</div>
										<div class="entry-content">

											<header class="entry-header">

												<h4 class="entry-title"><a
														href="<?php echo site_url('artikel/'.$artikel->post_slug);?>"><?php echo $artikel->post_title;?></a>
												</h4>
											</header>

											<footer class="entry-footer">
												<span
													class="posted-on"><a><?php echo date('d M Y',strtotime($artikel->post_date));?></a></span>

											</footer>

										</div>
									</div>
									<!--/ .post-extra-->

								</article>

								<?php endforeach;?>

							</div>
							<!--/ .post-area-->
						</div>
					</div>
				</div>
				<!--untuk slider image -->
			</section>
			
		
		