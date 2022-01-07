<div id="main" class="medium-7 large-7 columns">
    <div class="page-title">
        <h1>Album</h1>
        <div class="breadcrumbs">
			            <a href="<?=site_url()?>" title="LPMP Sulawesi Selatan">Halaman Depan</a>
			            <a href="<?=site_url()?>album">Album</a>
			            <?=$title?>
                    </div>
    </div>
   
    <section id="portfolio_items_5e436ae780eff" class="portfolio-items popup-gallery col-2" data-display="cover">

    <?php foreach ($data->result() as $row):?>
        <article id="post-0" class="mix 2012" style="display: inline-block;">

        <div class="work-item">

            <a href="#" class="gallery popup-link">
                <div class="item-overlay gallery">
                    <img src="<?=base_url()?>assets/images/galeri/<?=$row->galeri_image?>" alt="<?=$row->galeri_nama?>">
                </div>
            </a>
                            <h4 class="caption"><a class="" href="<?=site_url('galeri/'.$row->galeri_slug)?>">
                            <?=$row->galeri_nama?></a></h4>
            
        </div><!--/ .work-item-->

    </article><!--/ .project-item-->
        <?php endforeach;?>
			
    

	
    

	
		</section>
    
</div>

