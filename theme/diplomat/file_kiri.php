<?php


	


	if ($_GET['module'] == "home") {

	}



	elseif ($_GET['module'] == "detailcontent") {
		?>
			<main id="content" class="row">

		<div class="large-12 columns">

			<div class="page-title">
				<h1>News</h1>

				<div class="breadcrumbs">
					<a href="home.html" title="">LPPM</a>
					<a href="#" title="View all posts in Economics">EBuletin</a>
					Judul Buletin
				</div>
			</div>

		</div>


		<?php
			$id = $_GET['id'];
			$id = (int)$id;
			$queryContent = mysql_query("SELECT *FROM jos_content WHERE id = '$id'");
			$queryNumContent = mysql_num_rows($queryContent);
			

			if ($queryNumContent > 0)
			{

				$c = mysql_fetch_array($queryContent);
			
				// Tampilkan hanya sebagian isi berita
				$isi_content = htmlentities(strip_tags($c['fulltexts'])); 
				


				?>
					<div id="main" class="medium-8 large-8 columns">

						<div class="post full-width">

							<a href="images/blog/20_blog.jpg" class="image-post item-overlay single-image-link">
							</a>

							<header class="entry-header">
								<h2 class="entry-title"><?php echo $c['title'];?></h2>

								<div class="entry-meta">
									<span class="posted-on"><a href="#">01.04.2015</a></span>
									<span class="byline"><a href="#">Alex TM</a></span>
									<span class="tags-links"><a href="#" rel="tag">Headline</a>, <a href="#"
																									rel="tag">related</a></span>
									<span class="comments-link"><a href="#">5</a></span>
								</div>
							</header>

							<div class="entry-content">

								<?php echo $c['introtext'];?>

							</div>

							<footer class="entry-footer">
								<div class="left">
									<span class="cat-links">
										<a href="#" rel="category tag">Economics</a>
									</span>
								</div>

								<div class="right">
									<a class="post-like like-qty voted" data-post_id="154" href="#">
										<span class="vote-count">1</span>
									</a>
								</div>
							</footer>

						</div>
						<!--/ .post-->

			<div class="social-shares">
				<ul class="social-icons">
					<li class="twitter">
						<a href="http://twitter.com/" target="_blank" title="Twitter">Twitter</a>
					</li>
					<li class="facebook">
						<a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a>
					</li>
					<li class="pinterest">
						<a href="//pinterest.com/" target="_blank" title="Pinterest">Pinterest</a>
					</li>
					<li class="gplus">
						<a href="http://plus.google.com/" target="_blank" title="Google+">Google+</a>
					</li>
					<li class="rss">
						<a href="http://diplomat.webtemplatemasters.com/feed/" target="_blank" title="RSS">RSS</a>
					</li>
				</ul>
			</div>

			<div class="single-nav clearfix">
				<a title="Previous post" href="#" class="prev">
					Previous article<b>Around the world on solar power</b>
				</a>
			</div>

			<div class="author-holder clearfix">
				<div class="author-thumb">
					<div class="avatar">
						<img alt=""
							 src="http://1.gravatar.com/avatar/f7b924620556687f7c795aab0c319b60?s=100&amp;d=&amp;r=G"
							 class="avatar avatar-100 photo" height="100" width="100">
					</div>
				</div>

				<div class="author-about">
					<h4 class="author-title">Alex TM</h4>

					<p>Voluptatem! Consequuntur, commodo numquam! Quia, placeat, sem, magni aenean habitasse dolor
						hendrerit reiciendis iste, wisi quae, feugiat lobortis aptent bibendum penatibus inceptos.</p>

					<div class="author-contacts">
						<ul class="social-icons">
							<li class="twitter"><a target="_blank" href="#">Twitter</a></li>
							<li class="facebook"><a target="_blank" href="#">Facebook</a></li>
							<li class="pinterest"><a target="_blank" href="#">Pinterest</a></li>
							<li class="rss"><a target="_blank" href="#">Rss</a></li>
							<li class="gplus"><a target="_blank" href="#">Google Plus</a></li>
						</ul>
						<!--/ .social-icons-->
					</div>
				</div>
				<!--/ .author-about-->
			</div>

			<div class="related-article-area">
				<h2 class="section-title">Tulisan Yang Berkaitan</h2>

				<div class="row">

					<?php
						$queryRelatedArticle = mysql_query("SELECT *FROM jos_content WHERE catid = '42' AND id != '$id' ORDER BY id DESC LIMIT 0,4 ");
						while ($related = mysql_fetch_array($queryRelatedArticle))
						{
							?>
								<div class="large-3 columns">

									<article class="post related">
										<a href="images/blog/07_blog.jpg" class="image-post item-overlay single-image-link">
											<img src="images/blog/07_blog.jpg" alt="">
										</a>

										<header class="entry-header">
											<h4 class="entry-title">
												<a href="#"><?php echo $related['title'];?></a>
											</h4>
										</header>

										<footer class="entry-footer">
											<span class="posted-on"><a href="#">Mar 20, 2015</a></span>
											<span class="comments-link"><a href="#">3</a></span>
										</footer>
									</article>

								</div>
							<?php
						}
					?>



				</div>
				<!--/ .row-->

			</div>
			<!--/ .related-article-area-->



		</div>
		<!--/ #main-->
				<?php
			}

			else {

				echo "Tidak ada Data";
			}
		?>


		





	</main>
		<?php
	}
?>




