<main id="content" class="row">

		<div class="large-12 columns">
			<div class="page-title">

				<h1>Album</h1>
				<div class="breadcrumbs">
					<a href="#" title="">Home</a>
					Album Kegiatan
				</div>
			</div>
		</div>

		<div id="main" class="medium-8 large-8 columns">



			<div id="portfolio-items" class="portfolio-items col-3 popup-gallery">

				<?php
					$queryGallery = mysql_query("SELECT *FROM boot_album ORDER BY tgl_posting DESC");
					while ($a = mysql_fetch_array($queryGallery))
					{
						?>
							<article class="mix">
								<div class="work-item">
									<a href="foto-<?=$a[id_album]?>-<?=$a[album_seo]?>.html" class="gallery">
										<div class="item-overlay gallery">
											<img src="https://lpmpsulsel.kemdikbud.go.id/img_album/<?php echo $a['gbr_album'];?>" width="100px" alt="">
										</div>
										<h4 class="caption"><?php echo $a['jdl_album'];?></h4>
									</a>
								</div>
								<!--/ .work-item-->
							</article>
							<?php
					}
					?>
				

				
			</div>

		</div>





		<!--/ #main-->
		<aside id="sidebar" class="medium-4 large-4 columns">
			<?php
				include "content_kanan.php";
			?>
		</aside>

	</main>