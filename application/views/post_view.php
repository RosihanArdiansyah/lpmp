<div id="main" class="medium-7 large-7 columns">
    <div class="page-title">
        <h1>Berita</h1>
        <div class="breadcrumbs">
            <a href="<?=$alamat_website?>" title="">Halaman Depan</a>
            Semua Berita
        </div>
    </div>
   

    <?php foreach ($data->result() as $row):?>
    <?php
        $isi_berita = htmlentities(strip_tags($row->post_contents)); // membuat paragraf pada isi berita dan mengabaikan tag html
        $isi = substr($isi_berita,0,200); // ambil sebanyak 220 karakter
        $isi = substr($isi_berita,0,strrpos($isi," "));
    ?>
    <div class="post post-classic slideUpRun">
        <a title="<?php echo $row->post_title;?>" href="<?php echo site_url('blog/'.$row->post_slug);?>"
            class="image-post item-overlay ">
            <img src="<?php echo base_url().'assets/images/'.$row->post_image;?>" alt="">
        </a>
        <header class="entry-header">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <h3 class="entry-title"><a
                    href="<?php echo site_url('blog/'.$row->post_slug);?>"><?php echo $row->post_title;?></a>
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

