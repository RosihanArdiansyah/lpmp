<!-- kontent kanan -->
<aside id="sidebar" class="medium-3 large-3 columns">

    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src =
                'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.12&appId=494791587577814&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- <div id="categories-2" class="widget widget_categories">
        <h2 class="section-title"><a href="https://lpmpsulsel.kemdikbud.go.id">Profil LPMP</a></h2>
        <ul>
            <?php
                $query_profile = $this->db->query("SELECT *FROM tbl_navbar WHERE navbar_parent_id = '2'");
                foreach($query_profile->result() as $profile)
                {
                    ?>
                    <li class="cat-item"><a href="<?=site_url($profile->navbar_slug)?>"><?=$profile->navbar_name?></a></li>
                    <?php
                }
            ?>
        </ul>
    </div> -->

<!-- <hr /> -->
    <div class="widget arqam_counter-widget" id="arqam_counter-widget-2" >
        <h3 class="widget-title" style="border-radius: 8px;">KEGIATAN</h3>
        <!-- <img src="<?=base_url()?>assets/images/profile.jpg" width="100%"
							style="max-height:250px; border-radius: 8px;" class="ls-bg" alt="Dr. H. Abdul Halim Muharram" />
						<center><strong>Dr. H. Abdul Halim Muharram</strong></center> -->
        
            <div class="tmm_row">
					<div class="relative">
						<div style="width:100%;height:auto;margin:0 auto;margin-bottom: 0px;">
							<ul style="padding-left:10px; ">

							<?php foreach($post_kegiatan->result() as $kegiatan):?>
								<?php $tanggalKegiatan = date('d M Y',strtotime($kegiatan->kegiatan_mulai_tanggal)); ?>
									<li style="list-style:circle;padding-top:16px;"><a style="color: #11547B"
											href="<?php echo site_url('agenda/'.$kegiatan->kegiatan_slug);?>"><?php echo $kegiatan->kegiatan_title;?><br /><span style="color: #333;">(<?=$tanggalKegiatan?>)</span></a>
									</li>
							<?php endforeach;?>

							</ul>
						</div>
					</div>
			</div>
    </div>


    <!-- <div class="widget arqam_counter-widget" id="arqam_counter-widget-2">
        <h3 class="widget-title">Link Eksternal</h3>

        <a href="http://kemdikbud.go.id/main/?lang=id" target="_blank"
            title="Kementerian Pendidikan dan Kebudayaan"><img
                src="<?=base_url()?>assets/images/kemendikbud.jpg" width="90%"
                style="margin-left: auto;margin-right:auto; display:block;" /></a>
        <hr />
        <a href="http://dikdasmen.kemdikbud.go.id/" target="_blank"
            title="Direktorat Jenderal Pendidikan Dasar dan Menengah"><img
                src="<?=base_url()?>assets/images/dirjen.jpg" width="90%"
                style="margin-left: auto;margin-right:auto; display:block;" /></a>
        <hr />
        <a href="http://dapo.kemdikbud.go.id/" target="_blank"
            title="Data Pokok Pendidikan Dasar dan Menengah"><img
                src="<?=base_url()?>assets/images/dapodik.jpg" width="90%"
                style="margin-left: auto;margin-right:auto; display:block;" /></a>
        <hr />

        <a href="http://skp.sdm.kemdikbud.go.id/skp/site/login.jsp" target="_blank"
            title="Sistem Informasi Kinerja Pegawai"><img
                src="<?=base_url()?>assets/images/sikp.jpg" width="90%"
                style="margin-left: auto;margin-right:auto; display:block;" /></a>
        <hr />
        <a href="http://pmp.kemdikbud.go.id/" target="_blank" title="Penjaminan Mutu Pendidikan"><img
                src="<?=base_url()?>assets/images/dikdasmen.jpg" width="90%"
                style="margin-left: auto;margin-right:auto; display:block;" /></a>
        <hr />
        <a href="https://lpse.kemdikbud.go.id/" target="_blank" title="LPSE Kemdikbud"><img
                src="<?=base_url()?>assets/images/lpse-kemdikbud.png" width="90%"
                style="margin-left: auto;margin-right:auto; display:block;" /></a>
        <hr />
        <a href="http://112.78.46.84/" target="_blank" title="Data Pokok Pendidikan Sulsel"><img
                src="<?=base_url()?>assets/images/dapodik_sulsel.png" width="90%"
                style="margin-left: auto;margin-right:auto; display:block;" /></a>
        <hr />

    </div> -->




    <div class="widget arqam_counter-widget" id="arqam_counter-widget-2">
        <h3 class="widget-title" style="border-radius: 8px;">Media Publikasi</h3>
        
        <a href="<?=site_url('buletin')?>" >
        
        <?php
        $query_buletin_akhir = $this->db->query("SELECT *FROM tbl_posts WHERE post_category_id = '3' AND post_image != '' ORDER BY post_id DESC LIMIT 0,1");
        $row_buletin = $query_buletin_akhir->row();
        $image_buletin = $row_buletin->post_image;
        ?>
        <img
                src="<?=base_url()?>assets/images/<?=$image_buletin?>" width="80%" height="50px" style="margin-left: auto;margin-right:auto; display:block;border-radius: 8px;" /></a>
    </div>


    <div class="widget arqam_counter-widget" id="arqam_counter-widget-3">
        <h3 class="widget-title" style="border-radius: 8px;">Lokasi LPMP</h3>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.6080342338028!2d119.43092431520675!3d-5.16658479625081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2917212fc07%3A0x9f4c7626bc35b0bd!2sLPMP%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1641794354850!5m2!1sid!2sid" 
            width="260" height="450" style="border:0;border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="widget arqam_counter-widget" id="arqam_counter-widget-2">
        <h3 class="widget-title" style="border-radius: 8px;">Halaman Facebook</h3>

        <div class="fb-page" data-href="https://www.facebook.com/medialpmpsulsel/" data-tabs="timeline"
            data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
            data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/lpmp.prov.sulsel/" class="fb-xfbml-parse-ignore"><a
                    href="https://www.facebook.com/lpmp.prov.sulsel/" >Lembaga Penjaminan Mutu Pendidikan - LPMP
                    Sulsel</a></blockquote>
        </div>
    </div>

</aside>
<!-- akhir dari content kanan -->