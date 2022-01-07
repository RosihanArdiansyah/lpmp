		
<!--<?php-->
<!--			$id = (int)$_GET['id'];-->

<!--			$query = mysql_query("SELECT -->
<!--					a.id as id_content,a.title as title_content, a.alias as alias_content, a.introtext as introtext_content, a.fulltext as fulltext_content, a.created, a.publish_up,a.created_by, a.images,-->
<!--					b.id as id_category, b.title as title_category, b.alias as alias_category, c.name as namalengkap from jos_content a -->
<!--					left join jos_categories b on a.catid = b.id -->
<!--					left join jos_users c on a.created_by = c.id-->
<!--					where a.id = '$id'");-->
<!--			$numRows = mysql_num_rows($query);-->

<!--			$c = mysql_fetch_array($query);-->


<!--		?>-->

<!--		<?php-->
			

<!--			if ($numRows > 0)-->
<!--			{-->

				//$c = mysql_fetch_array($queryContent);
			
				// Tampilkan hanya sebagian isi berita
<!--				$isi_content = $c['fulltext_content']; -->
				
<!--				?>-->
<!--					<div id="main" class="medium-8 large-8 columns">-->



<!--						<div class="relative">-->
<!--						<h2 class="section-title">Berita</h2>-->

<!--							<div class="breadcrumbs">-->
<!--								<a href="index.php" title="">LPPM</a>-->
<!--								<a href="#" title="Lihat Semua Konten untuk kategori <?php echo $c['title_category'];?>"><?php echo $c['title_category'];?></a>-->
<!--								<?php echo $c['title_content'];?>-->
<!--							</div>-->
<!--						</div>-->






<!--						<div class="post full-width">-->

<!--							<a href="images/stories/<?php echo $c['images'];?>" class="image-post item-overlay single-image-link">-->
<!--							</a>-->

<!--							<header class="entry-header">-->
<!--								<h2 class="entry-title"><?php echo $c['title'];?></h2>-->

<!--								<div class="entry-meta">-->
<!--									<span class="posted-on"><a href="#"><?php echo tgl_indo($c['publish_up']);?></a></span>-->
<!--									<span class="byline"><a href="#"><?php echo $c['namalengkap'];?></a></span>-->
<!--									<span class="tags-links"><a href="#" rel="tag">Headline</a>, -->
<!--										<a href="#" rel="tag">related</a></span>-->
<!--									<span class="comments-link"><a href="#">5</a></span>-->
<!--								</div>-->
<!--							</header>-->

<!--							<div class="entry-content">-->

<!--								<?php echo $isi_content;?>-->

<!--<?php-->
<!--if ($-->
<!--?>-->
<!--							</div>-->

<!--							<footer class="entry-footer">-->
								

<!--								<div class="right">-->
<!--									<a class="post-like like-qty voted" data-post_id="154" href="#">-->
<!--										<span class="vote-count">1</span>-->
<!--									</a>-->
<!--								</div>-->
<!--							</footer>-->

<!--						</div>-->
						<!--/ .post-->

			

<!--		</div>-->
		<!--/ #main-->
<!--				<?php-->
<!--			}-->

			
<!--		?>-->


		






<!--		<aside id="sidebar" class="medium-4 large-4 columns">-->
<!--			<?php-->
<!--				include "content_kanan.php";-->
<!--			?>-->
<!--		</aside>-->
		<!--/ #sidebar-->

<!--	</main>-->
	<!--/ #content-->