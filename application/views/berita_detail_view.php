<div id="main" class="medium-8 large-8 columns">
			    <div class="page-title">
			        <h1>Berita</h1>
			        <div class="breadcrumbs">
			            <a href="<?=site_url()?>" title="">Home</a>
			            <a href="<?=site_url()?>berita">Berita</a>
			            <?=$title?>
                    </div>
			    </div>
			    <div class="post full-width">
                    <?php
                    if ($image != "") {
                        ?>
                        <a href="<?=base_url()?>assets/images/<?=$image?>"><img src="<?=base_url()?>assets/images/<?=$image?>"
			            href="<?=base_url()?>assets/images/<?=$image?>"
			            class="image-post item-overlay single-image-link" /></a>
                        <?php
                    }
                    ?>
			        
			        <header class="entry-header">
			            <h2 class="entry-title">
			                <a href="<?php echo site_url('berita/'.$slug);?>"
			                    title="<?=$title?>">
			                    <?=$title?></a>
			            </h2>
			            <div class="entry-meta">
			                <span class="posted-on"><?=date('d M Y', strtotime($tanggal))?></span>
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