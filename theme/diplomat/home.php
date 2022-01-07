<section id="main" class="medium-8 large-8 columns">

			<!--/ .section -->

			<div class="section margin-bottom-10 columns medium-12 large-12 background-color-off">

				<div class="tmm_row row">

					<div class="relative">
						<h2 class="section-title">Home</h2>

						<div class="row post-list two-cols">




							<?php
								$queryHome = mysql_query("SELECT *FROM $berita WHERE catid = '37' ORDER BY id DESC LIMIT 0,20");
								while ($home = mysql_fetch_array($queryHome))
								{
									// Tampilkan hanya sebagian isi berita
									$isi_berita = htmlentities(strip_tags($home[fulltext])); // membuat paragraf pada isi berita dan mengabaikan tag html
									$isi = substr($isi_berita,0,100); // ambil sebanyak 220 karakter
									$isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat
									$gambar = $home['images'];
									$tanggalBerita = tgl_indo($home['publish_up']);
									if ($gambar == "")
									{
										$gambar = "no_picture.jpg";
									}
									?>
										<article class="medium-6 large-6 columns">

											<div class="post border post-classic slideUp" data-os-animation="slideUpRun"
												 data-os-animation-delay="0s">

												<a href="?module=detailcontent&id=<?php echo $home['id'];?>" title="<?php echo $home['title'];?>" class="image-post item-overlay ">
													<img src="http://localhost/ashari/images/stories/<?php echo $gambar;?>" alt="" height="100px"/>
												</a>

												<header class="entry-header">
													<h3 class="entry-title"><a href="?module=detailcontent&id=<?php echo $home['id'];?>"><?php echo $home['title'];?></a></h3>
												</header>

												<div class="entry-content">
													<?php echo $isi; ?>
												</div>

												<footer class="entry-footer">

													<div class="left">
														<span class="cat-links"><a href="#" rel="category tag">Economics</a></span>
													</div>

													<div class="right">
														<span class="posted-on"><a href="#"><?php echo $tanggalBerita;?></a></span>
														
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
						<h2 class="section-title">Tulisans</h2>

						

						<div class="row post-list two-cols">

							<?php
								$queryArtikel = mysql_query("SELECT *FROM $berita WHERE catid = '42' ORDER BY id DESC LIMIT 0,8");

								while ($artikel = mysql_fetch_array($queryArtikel))
								{

									?>

											<article class="medium-6 large-6 columns">

												<div class="post border post-alternate-2 slideUp">

													<div class="entry-media">

														<a href="single-post.html" class="image-post item-overlay ">
															<img src="images/sidebar/siber.png" alt=""/>
														</a>

													</div>

													<div class="entry-content">

														<header class="entry-header">
				                                            <span class="cat-links"><a href="#" rel="category tag">Political
																News</a>, <a href="#" rel="category tag">World</a></span>
															<h4 class="entry-title"><a href="single-post.html"><?php echo $artikel['title'];?></a></h4>
														</header>

														<footer class="entry-footer">
															<span class="posted-on"><a href="#">22.03.2015</a></span>
															<span class="comments-link"><a href="#">1</a></span>
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

			<div class="section padding-off background-color-off">

				<div class="row">

					<div class="columns  medium-8 large-8">
						<div class="row post-list full-width">

							<article class="medium-12 large-12 columns">

								<div class="post border post-classic slideUp">

									<a href="single-post.html" class="image-post item-overlay ">
										<img src="images/blog/01_blog.jpg" alt=""/>
									</a>

									<header class="entry-header">
										<h3 class="entry-title"><a href="single-post.html">Abassador: Italy ready
											fo </a></h3>
									</header>

									<div class="entry-content">
										<p>Porta est iaculis, minim consequatur. Cubilia venenatis! Congue iure
											curabitur incididunt consequat, volutpat </p>
									</div>

									<footer class="entry-footer">

										<div class="left">
											<span class="cat-links"><a href="#" rel="category tag">Economics</a></span>
										</div>

										<div class="right">
											<span class="posted-on"><a href="#">19.03.2015</a></span>
											<span class="byline"><a href="#">Alex TM</a></span>
											<span class="comments-link"><a href="#">4</a></span>
											<a class="post-like like-qty" data-post_id="111" href="#"><span
													class="vote-count">1</span></a>
										</div>

									</footer>

								</div>
								<!--/ .post-classic-->

							</article>

						</div>
						<!--/ .post-area-->

					</div>

					<div class="medium-4 large-4 columns">
						<div class="row post-list full-width">

							<article class="medium-12 large-12 columns">

								<div class="post post-type-gallery border post-alternate-4 slideUp">

									<div class="image-post owl-carousel">

										<a href="single-post.html" class="item-overlay item">
											<img src="images/blog/04_blog.jpg" alt="">
										</a>

										<a href="single-post.html" class="item-overlay item">
											<img src="images/blog/18_blog.jpg" alt="">
										</a>

										<a href="single-post.html" class="item-overlay item ">
											<img src="images/blog/20_blog.jpg" alt="">
										</a>

										<a href="single-post.html" class="item-overlay item">
											<img src="images/blog/21_blog.jpg" alt="">
										</a>

									</div>

									<header class="entry-header">
										<h4 class="entry-title"><a href="single-post.html">Cyclone Pam slams Vanuatu</a>
										</h4>
									</header>
								</div>
								<!--/ .post-alternate-4-->

							</article>

							<article class="medium-12 large-12 columns">

								<div class="post border post-alternate-4 slideUp">

									<a href="single-post.html" class="image-post item-overlay ">
										<img src="images/blog/02_blog.jpg" alt=""/>
									</a>

									<header class="entry-header">
										<h4 class="entry-title"><a href="single-post.html">Polar bear injures sleeping
											tourist in Norway's Arctic </a></h4>
									</header>
								</div>
								<!--/ .post-extra-->

							</article>

						</div>
						<!--/ .post-alternate-4-->

					</div>

				</div>
				<!--/ .row-->

			</div>
			<!--/ .section -->

		</section>