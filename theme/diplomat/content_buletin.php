<div id="main" class="medium-8 large-8 columns">


<?php
			$id = (int)$_GET['id'];
			$query = mysql_query("SELECT 
					a.id as id_content,a.title as title_content, a.alias as alias_content, a.introtext as introtext_content, a.fulltext as fulltext_content, a.publish_up, a.created_by, a.images as gambar,
					b.id as id_category, b.title as title_category, b.alias as alias_category, c.name as namalengkap from jos_content a 
					left join jos_categories b on a.catid = b.id 
					left join jos_users c on a.created_by = c.id
					WHERE a.id = '$id'
					ORDER BY a.id DESC LIMIT 0,10");
			$numRows = mysql_num_rows($query);
			$c = mysql_fetch_array($query);
			

		?>




						<div class="page-title">

							<h1>Artikel</h1>

							<div class="breadcrumbs">
								<a href="#" title="LPMP Sulawesi Selatan">Halaman Depan</a>
								<a href="artikel.html" title="Kumpulan Buletin">Buletin</a>
								<?php echo $c['title_content'];?>	
							</div>
						</div>
		

		<?php
			

			     $gambar = $c['gambar'];
									$tanggalBerita = tgl_indo($c['publish_up']);
									if ($gambar == "")
									{
										$gambar = "banner-diknas.png";
									} 

				
				

						$isi = $c['introtext_content'];
						if ($isi == "")
							$isi = $c['fulltext_content'];
						?>

						<?php
if ($c['file_uploads'] != '')
{
?>
<a href="file_uploads/<?php echo $c['file_uploads'];?>" target="_blank" style="color:red;">Download Lampiran</a>
<?php

}
?>








						<div class="post full-width">
                            
							<a href="images/stories/<?php echo $c['gambar'];?>" class="image-post item-overlay single-image-link">
							</a>

							<header class="entry-header">
								<h2 class="entry-title">
									
									<?php echo $c['title_content'];?>
								

								</h2>
                                
								<div class="entry-meta">
									<span class="posted-on"><a href="#"><?php echo tgl_indo($c['publish_up']);?></a></span>
									<span class="byline"><a href="#"><?php echo $c['namalengkap'];?></a></span>
									
								</div>
							</header>

							<div class="entry-content">
                                <img src="images/stories/<?php echo $gambar;?>" />
								<?php echo $isi;?>

							</div>

							<footer class="entry-footer">
								

								
							</footer>

						</div>
						<!--/ .post-->

				

		
		<!--/ #main-->
		
		

</div>



		<aside id="sidebar" class="medium-4 large-4 columns">
			<?php
				include "content_kanan.php";
			?>
		</aside>
		<!--/ #sidebar-->

	</main>
	<!--/ #content-->