			<div id="main" class="medium-8 large-8 columns">
			    <div class="page-title">
			        <h1>Berita</h1>
			        <div class="breadcrumbs">
			            <a href="index.php" title="">Home</a>
			            <a href="semua-berita.html">Berita</a>
			            Rapat Pemantapan Program Kerja LPMP Sulawesi Selatan Tahun 2020 
                    </div>
			    </div>
			    <div class="post full-width">
                    <?php
                    if ($image != "") {
                        ?>
                        <a href="#"><img src="<?=base_url()?>assets/images/<?=$image?>"
			            href="<?=base_url()?>assets/images/<?=$image?>"
			            class="image-post item-overlay single-image-link" /></a>
                        <?php
                    }
                    ?>
			        
			        <header class="entry-header">
			            <h2 class="entry-title">
			                <a href="<?=$slug?>"
			                    title="<?=$title?>">
			                    <?=$title?></a>
			            </h2>
			            <div class="entry-meta">
			                <span class="posted-on"><?=$date?></span>
			                <span class="byline"><?=$author?></span>
			            </div>
			        </header>
			        <div class="entry-content">
			            <?=$content?>
			        </div>
			        <footer class="entry-footer">
			        </footer>
			    </div>
			    <!--/ .post-->
			    <!--/ #main-->
			</div>