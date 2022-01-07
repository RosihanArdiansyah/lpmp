<div id="main" class="medium-7 large-7 columns">
    <div class="page-title">
        <h1>Pengumuman</h1>
        <div class="breadcrumbs">
            <a href="<?=site_url()?>" title="">Halaman Depan</a>
            Semua Pengumuman
        </div>
    </div>
   

    <?php foreach ($data->result() as $row):?>
    <?php
        $isi_pengumuman = htmlentities(strip_tags($row->post_contents)); // membuat paragraf pada isi Artikel dan mengabaikan tag html
        $isi = substr($isi_pengumuman,0,200); // ambil sebanyak 220 karakter
        $isi = substr($isi_pengumuman,0,strrpos($isi," "));

       
    ?>
    <div class="post post-classic slideUpRun">
        <a title="<?php echo $row->post_title;?>" href="<?php echo site_url('pengumuman/'.$row->post_slug);?>"
            class="image-post item-overlay ">
            <?php
                if ($row->post_image != '')
                {
                    ?>
                    <img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="">
                    <?php
                }
            ?>
            
        </a>
        <header class="entry-header">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <h3 class="entry-title"><a
                    href="<?php echo site_url('pengumuman/'.$row->post_slug);?>"><?php echo $row->post_title;?></a>
            </h3>
        </header>
        <div class="entry-content">
            <p>
                <?php echo $isi;?>
            </p>
        </div>
        <footer class="entry-footer">
            <div class="right">
                <span class="posted-on"><a><?php echo date('d M Y',strtotime($row->post_date));?></a></span>
                <span class="byline"><a><?php echo $row->user_name;?></a></span>
            </div>
        </footer>
    </div>
    <hr />
    
    <?php endforeach;?>
    <?php echo $page;?>
    
</div>

