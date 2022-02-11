<div id="main" class="medium-7 large-7 columns">
    <div class="page-title">
        <h1>Album</h1>
        <div class="breadcrumbs">
            <a href="<?=site_url()?>" title="">Halaman Depan</a>
            Semua Album
        </div>
    </div>
   
    <section id="portfolio_items_5e436ae780eff" class="portfolio-items popup-gallery col-2" data-display="cover" style="width: 500%;">

    <?php foreach ($data->result() as $row):?>
        <article id="post-0" class="mix 2012" style="display: inline-block; width:100%;">

        <div class="work-item">

            <a href="<?=site_url('album/'.$row->album_slug)?>" class="gallery popup-link">
                <div class="item-overlay gallery">
                    <img src="<?=base_url()?>assets/images/album/<?=$row->album_image?>" alt="<?=$row->album_nama?>">
                </div>
            </a>
                            <h4 class="caption"><a class="" href="<?=site_url('album/'.$row->album_slug)?>"><?=$row->album_nama?></a></h4>
            
        </div><!--/ .work-item-->

    </article><!--/ .project-item-->
        <?php endforeach;?>
			
    

	
    

	
		</section>
    <?php echo $page;?>
    
</div>

