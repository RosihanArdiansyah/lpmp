<?php
			$id = (int)$_GET['id'];

			$query = mysql_query("SELECT 
					a.id as id_content,a.title as title_content, a.file_uploads, a.alias as alias_content, a.introtext as introtext_content, 
					a.fulltext as fulltext_content, a.created, a.created_by, a.publish_up,a.images,
					b.id as id_category, b.title as title_category, b.alias as alias_category, c.name as namalengkap from jos_content a 
					left join jos_categories b on a.catid = b.id 
					left join jos_users c on a.created_by = c.id 
					WHERE a.id = $id");
			$numRows = mysql_num_rows($query);

			$c = mysql_fetch_array($query);

		?>


<div id="main" class="medium-8 large-8 columns">



						<div class="page-title">

							<h1>Berita</h1>

							<div class="breadcrumbs">
								<a href="index.php" title="">Home</a>
								<a href="semua-berita.html">Berita</a>
								<?php echo $c['title_content'];?>
							</div>
						</div>
		






		<?php
			

			

				

						$isi = $c['introtext_content'];
						if ($isi == "")
							$isi = $c['fulltext_content'];
						?>

						


						<div class="post full-width">

							<img src="images/stories/<?php echo $c['images'];?>" href="images/stories/<?php echo $c['images'];?>" class="image-post item-overlay single-image-link" />
						

							<header class="entry-header">
								<h2 class="entry-title">
									<a href="berita-<?=$c[id_content]?>-<?=$c[alias_content]?>.html" title="<?php echo $c['title_content'];?>">
									<?php echo $c['title_content'];?>
								</a>

								</h2>

								<div class="entry-meta">
									<span class="posted-on"><?php echo tgl_indo($c['publish_up']);?></span>
									<span class="byline"><?=$c['namalengkap']?></span>
									<?php
									    if ($c['penulis'] != '')
									    {
									        ?>
									        <span class="byline">
									    <?php echo $c['penulis'];?></span>
									        <?php
									    }
									?>
									
									
								</div>
							</header>

							<div class="entry-content">
                                
								<?php echo $isi;?>
<?php
if ($c['file_uploads'] != '')
{
?>
<a href="file_uploads/<?php echo $c['file_uploads'];?>" target="_blank" style="color:red;">Download Lampiran</a>
<?php
}
?>

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