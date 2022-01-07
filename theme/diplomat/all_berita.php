<div id="main" class="medium-7 large-7 columns">
						<div class="page-title">

							<h1>Berita</h1>

							<div class="breadcrumbs">
								<a href="<?=$alamat_website?>" title="">Halaman Depan</a>
								Semua Berita
							</div>
						</div>
		<?php
			$id = (int)$_GET['id'];

			$p      = new Paging3;
			$batas  = 3;
			 $posisi = $p->cariPosisi($batas);


			$query = mysql_query("SELECT 
					a.id as id_content,a.title as title_content, a.alias as alias_content, a.introtext as introtext_content, a.fulltext as fulltext_content, a.created,a.publish_up, a.created_by, a.images,
					b.id as id_category, b.title as title_category, b.alias as alias_category, c.name as namalengkap from jos_content a 
					left join jos_categories b on a.catid = b.id 
					left join jos_users c on a.created_by = c.id
					WHERE a.catid = '37' OR a.catid='48' OR a.catid='34'
					ORDER BY a.publish_up DESC LIMIT $posisi, $batas");
			$numRows = mysql_num_rows($query);

//error_reporting(E_ALL);			

	
				while ($c = mysql_fetch_array($query))
				{
$isi_berita = htmlentities(strip_tags($c[fulltext_content])); // membuat paragraf pada isi berita dan mengabaikan tag html
					    $isi = substr($isi_berita,0,200); // ambil sebanyak 220 karakter
						$isi = substr($isi_berita,0,strrpos($isi," "));

						?>

						

						<div class="post post-classic slideUpRun">
				
						<a title="<?php echo $c['title_content'];?>" href="berita-<?=$c[id_content]?>-<?=$c[alias_content]?>.html" class="image-post item-overlay ">
							<img src="images/stories/<?php echo $c['images'];?>" alt="">
						</a>

						<header class="entry-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
							<h3 class="entry-title"><a href="berita-<?=$c[id_content]?>-<?=$c[alias_content]?>.html"><?php echo $c['title_content'];?></a></h3>
						</header>

						<div class="entry-content">
							<p>
								<?php echo $isi;?>
							</p>
						</div>

						<footer class="entry-footer">

							<div class="right">
									<span class="posted-on"><a><?php echo tgl_indo($c['publish_up']);?></a></span>
									<span class="byline"><a><?php echo $c['namalengkap'];?></a></span>
									
								</div>

							


						</footer>
					</div>

<hr />
				
						

						
		
		<!--/ #main-->
		
			<?php
				}



						
						 $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM $berita WHERE catid = '37'"));
						  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
						  $linkHalaman = $p->navHalaman($_GET['halberita'], $jmlhalaman);
							
							
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