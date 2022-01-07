<div id="main" class="medium-7 large-7 columns">
    <div class="page-title" style="margin-bottom: 0;">
        <h1>Kegiatan</h1>
        <div class="breadcrumbs">
            <a href="<?=site_url()?>" title="">Halaman Depan</a>
            Semua Kegiatan
        </div>
    </div>
   

    <?php foreach ($data->result() as $row):?>
    <?php
        $isi_kegiatan = htmlentities(strip_tags($row->kegiatan_contents)); // membuat paragraf pada isi Artikel dan mengabaikan tag html
        $isi = substr($isi_kegiatan,0,200); // ambil sebanyak 220 karakter
        $isi = substr($isi_kegiatan,0,strrpos($isi," "));
    ?>
    <div class="post post-classic" style="margin-bottom: 0;">
        <a title="<?php echo $row->kegiatan_title;?>" href="<?php echo site_url('agenda/'.$row->kegiatan_slug);?>"
            class="image-post item-overlay ">
            
        </a>
        <header class="entry-header">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <h3 class="entry-title" style="color:#11547B"><a
                    href="<?php echo site_url('agenda/'.$row->kegiatan_slug);?>"><?php echo $row->kegiatan_title;?></a>
            </h3>
        </header>
        <div class="entry-content">
             <?php echo $row->kegiatan_label_jadwal;?><br>
             <a title="<?php echo $row->kegiatan_title;?>" href="<?php echo site_url('agenda/'.$row->kegiatan_slug);?>">Selengkapnya...</a>
        </div>
    </div>
    <hr />
    <?php endforeach;?>
    <?php echo $page;?>
    
</div>

