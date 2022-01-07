<?php
$id = (int)$_GET['id'];
$arrayAlbum = mysql_query("SELECT *FROM boot_album WHERE id_album = '$id'");
$numsAlbum = mysql_num_rows($arrayAlbum);
if ($numsAlbum)
{

$alb = mysql_fetch_array($arrayAlbum);

?>

<main id="content" class="row">

		<div class="large-12 columns">
			<div class="page-title">

				<h1>Galeri Album </h1>
				<div class="breadcrumbs">
					<a href="https://lpmpsulsel.kemdikbud.go.id" title="LPMP Sulsel">Home</a>
<a href="https://lpmpsulsel.kemdikbud.go.id/galeri.html">Album Kegiatan</a>
					Album (<?php echo $alb['jdl_album'];?>)

				</div>
			</div>
		</div>

		<div id="main" class="medium-8 large-8 columns">



			<div id="portfolio-items" class="portfolio-items col-3 popup-gallery">

				<?php
					$queryGallery = mysql_query("SELECT *FROM boot_gallery WHERE id_album = '$id'");
					while ($a = mysql_fetch_array($queryGallery))
					{
						?>




							<article class="mix">
								<div class="work-item">
									<a href="https://lpmpsulsel.kemdikbud.go.id/img_galeri/<?php echo $a['gbr_gallery'];?>" class="gallery popup-link">
										<div class="item-overlay gallery">
											<img src="https://lpmpsulsel.kemdikbud.go.id/img_galeri/<?php echo $a['gbr_gallery'];?>" width="100px" alt="">
										</div>
										<h4 class="caption"><?php echo $a['jdl_gallery'];?></h4>
									</a>
								</div>
								<!--/ .work-item-->
							</article>
							<?php
					}
					?>
				

				
			</div>

		</div>

<?php
}
?>



		<!--/ #main-->
		<aside id="sidebar" class="medium-4 large-4 columns">
			<?php
				include "content_kanan.php";
			?>
		</aside>

	</main>
