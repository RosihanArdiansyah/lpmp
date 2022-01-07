<div id="main" class="medium-8 large-8 columns">



						<div class="page-title">

				<h1>Artikel</h1>

				<div class="breadcrumbs">
					<a href="#" title="">Home</a>
					Artikel
				</div>
			</div>
			<?php
			
			$p      = new PagingArtikel;
			$batas  = 3;
			 $posisi = $p->cariPosisi($batas);

			$query = mysql_query("SELECT 
					a.id as id_content,a.title as title_content, a.alias as alias_content, a.introtext as introtext_content, a.fulltext as fulltext_content, a.publish_up, a.created_by, a.images,
					b.id as id_category, b.title as title_category, b.alias as alias_category, c.name as namalengkap from jos_content a 
					left join jos_categories b on a.catid = b.id 
					left join jos_users c on a.created_by = c.id
					WHERE a.catid = '49'
					ORDER BY a.id DESC LIMIT $posisi, $batas");
			$numRows = mysql_num_rows($query);


		?>






		<?php
			

			

				//$c = mysql_fetch_array($queryContent);
				while ($c = mysql_fetch_array($query))
				{

					$isi_default = $c['introtext_content'];	
if ($isi_default != '')
{
    $isi_default = htmlentities(strip_tags($c[introtext_content]));
$isi = substr($isi_default,0,400); // ambil sebanyak 220 karakter
									$isi = substr($isi_default,0,strrpos($isi," "));
    
}
else
{
    $isi_artikel = htmlentities(strip_tags($c[fulltext_content])); // membuat paragraf pada isi berita dan mengabaikan tag html
									$isi = substr($isi_artikel,0,400); // ambil sebanyak 220 karakter
									$isi = substr($isi_artikel,0,strrpos($isi," "));
}



							

						?>

						<div class="post full-width">
							<a href="images/stories/<?php echo $c['images'];?>" class="image-post item-overlay single-image-link">
							</a>

							<header class="entry-header">
								<h2 class="entry-title">
									<a href="tulisan-<?=$c[id_content]?>-<?=$c[alias_content]?>.html" title="<?php echo $c['title_content'];?>">
									<?php echo $c['title_content'];?>
								</a>

								</h2>

								<div class="entry-meta">
									<span class="posted-on"><a href="#"><?php echo tgl_indo($c['publish_up']);?></a></span>
									<span class="byline"><a href="#"><?php echo $c['namalengkap'];?></a></span>
									
								</div>
							</header>

							<div class="entry-content">

								<?php echo $isi;?> ... <strong><a href="tulisan-<?=$c[id_content]?>-<?=$c[alias_content]?>.html" style='color:#000;'>Selengkapnya</a></strong>

							</div>

							

						</div>
						<!--/ .post-->

				

		
		<!--/ #main-->
		
			<?php
				}

				$jmldata     = mysql_num_rows(mysql_query("SELECT * FROM $berita WHERE catid = '49'"));
						  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
						  $linkHalaman = $p->navHalaman($_GET['halartikel'], $jmlhalaman);
							
							
							echo "<div class='pagenavbar'>
									<div class='pagenavi' data-posts=''>$linkHalaman</div></div>";
				
			
		?>


		


</div>












		<aside id="sidebar" class="medium-4 large-4 columns">
			<?php
				include "content_kanan.php";
			?>
		</aside>
		<!--/ #sidebar-->

	</main>
	<!--/ #content-->