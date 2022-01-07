<main id="content" class="row">

		<div class="large-12 columns">
			<div class="page-title">

				<h1>Video</h1>
				<div class="breadcrumbs">
					<a href="#" title="">Home</a>
					Daftar Video
				</div>
			</div>
		</div>

		<div id="main" class="medium-8 large-8 columns">



			<div id="portfolio-items" class="portfolio-items col-2 popup-gallery">

				<?php
					$queryVideo = mysql_query("SELECT *FROM $video ORDER BY id_video DESC");
					while ($a = mysql_fetch_array($queryVideo))
					{
						?>
							<article class="mix">
								<div class="work-item">
									
											<iframe src="<?=$a['youtube']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
											    
											</iframe>
										
										<h4 class="caption"><?php echo $a['jdl_video'];?></h4>
									
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