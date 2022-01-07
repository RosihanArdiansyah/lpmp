<div id="main" class="medium-8 large-8 columns">
			    <div class="page-title" style="margin-bottom: 10px;">
			        <h1>Kegiatan</h1>
			        <div class="breadcrumbs">
			            <a href="<?=site_url()?>" title="">Halaman Depan</a>
			            <a href="<?=site_url()?>agenda">Kegiatan</a>
			            <?=$title?>
                    </div>
			    </div>
			    <br />
			    <div class="post full-width post-classic">
                    
			        <header class="entry-header">
			            <h3 class="entry-title" style="color:#11547B">
			                <a href="<?php echo site_url('agenda/'.$slug);?>"
			                    title="<?=$title?>">
			                    <?=$title?></a>
			            </h3>
			            <div class="entry-meta">
			                <span class="posted-on"><?=$date?></span>
			                <span class="byline"><?=$author?></span>
			            </div>
			        </header>
			        <div class="entry-content">
			            
					<?=$content?>
                        <br />
                        <?php
							if ($link_download != '')
							{
								?>
								<a href="<?=base_url()?>assets/document/<?=$link_download?>">Download File</a>
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