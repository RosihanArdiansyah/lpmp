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

    <div id="categories-2" class="widget widget_categories">
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
    </div>

<hr />
    <div class="widget arqam_counter-widget" id="arqam_counter-widget-2">
        <h3 class="widget-title">Kepala LPMP SULSEL</h3>
        <img src="<?=base_url()?>assets/images/profile.jpg" width="100%"
							style="max-height:250px;" class="ls-bg" alt="Dr. H. Abdul Halim Muharram" />
						<center><strong>Dr. H. Abdul Halim Muharram</strong></center>
    </div>


    <div class="widget arqam_counter-widget" id="arqam_counter-widget-2">
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

    </div>




    <div class="widget arqam_counter-widget" id="arqam_counter-widget-2">
        <h3 class="widget-title">Media Publikasi</h3>
        
        <a href="<?=site_url('buletin')?>">
        
        <?php
        $query_buletin_akhir = $this->db->query("SELECT *FROM tbl_posts WHERE post_category_id = '3' AND post_image != '' ORDER BY post_id DESC LIMIT 0,1");
        $row_buletin = $query_buletin_akhir->row();
        $image_buletin = $row_buletin->post_image;
        ?>
        <img
                src="<?=base_url()?>assets/images/<?=$image_buletin?>" width="80%" height="50px" style="margin-left: auto;margin-right:auto; display:block;" /></a>
    </div>


    <div class="widget arqam_counter-widget" id="arqam_counter-widget-2">
        <h3 class="widget-title">Halaman Facebook</h3>

        <div class="fb-page" data-href="https://www.facebook.com/medialpmpsulsel/" data-tabs="timeline"
            data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
            data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/lpmp.prov.sulsel/" class="fb-xfbml-parse-ignore"><a
                    href="https://www.facebook.com/lpmp.prov.sulsel/">Lembaga Penjaminan Mutu Pendidikan - LPMP
                    Sulsel</a></blockquote>
        </div>
    </div>

</aside>
<!-- akhir dari content kanan -->