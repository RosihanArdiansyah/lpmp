<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.12&appId=494791587577814&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="categories-2" class="widget widget_categories">
				<h2 class="section-title">Profil LPMP</h2>
				<ul>

					<?php
					$queryMenu = mysql_query("SELECT *FROM boot_halamanstatis ORDER BY id_halaman ASC");

					while ($r = mysql_fetch_array($queryMenu))
					{
						?>
							<li class="cat-item"><a href="profil-<?=$r[id_halaman]?>-<?=$r[judul_seo]?>.html"><?php echo $r['judul'];?></a></li>
						
						<?php
					}
					?>
					
				</ul>
			</div>

		
		    <div class="widget arqam_counter-widget" id="arqam_counter-widget-2">
				<h3 class="widget-title">Link Eksternal</h3>
				
				<?php
				
				if ($_GET['module'] == 'pengaduan') {
				    ?>
				        <a href="http://posko-pengaduan.itjen.kemdikbud.go.id/index.php" target="_blank" title="Form Pengaduan ITJEN KEMDUKBUD "><img src="<?php echo $alamat_website;?>images/stories/form_pengaduan.jpg" width="90%" style="margin-left: auto;margin-right:auto; display:block;" /></a><hr />
        				<a href="https://wbs.kemdikbud.go.id/" target="_blank" title="Whistleblowing System "><img src="<?php echo $alamat_website;?>images/stories/form_pengaduan_wistleblowing.jpg" width="90%" style="margin-left: auto;margin-right:auto; display:block;" /></a><hr />
				    <?php
				}
				
				else
				{
				  ?>
				<a href="http://kemdikbud.go.id/main/?lang=id" target="_blank" title="Kementerian Pendidikan dan Kebudayaan"><img src="<?php echo $alamat_website;?>images/stories/kemendikbud.jpg" width="90%" style="margin-left: auto;margin-right:auto; display:block;" /></a><hr />
				<a href="http://dikdasmen.kemdikbud.go.id/" target="_blank" title="Direktorat Jenderal Pendidikan Dasar dan Menengah"><img src="<?php echo $alamat_website;?>images/stories/dirjen.jpg" width="90%" style="margin-left: auto;margin-right:auto; display:block;" /></a><hr />
				<a href="http://dapo.dikdasmen.kemdikbud.go.id/" target="_blank" title="Data Pokok Pendidikan Dasar dan Menengah"><img src="<?php echo $alamat_website;?>images/stories/dapodik.jpg" width="90%" style="margin-left: auto;margin-right:auto; display:block;" /></a>
				<hr />

                <a href="http://skp.sdm.kemdikbud.go.id/skp/site/login.jsp" target="_blank" title="Sistem Informasi Kinerja Pegawai"><img src="<?php echo $alamat_website;?>images/stories/sikp.jpg" width="90%" style="margin-left: auto;margin-right:auto; display:block;" /></a>
				<hr />
				<a href="http://pmp.dikdasmen.kemdikbud.go.id/" target="_blank" title="Penjaminan Mutu Pendidikan"><img src="<?php echo $alamat_website;?>images/stories/dikdasmen.jpg" width="90%" style="margin-left: auto;margin-right:auto; display:block;" /></a>
				<hr />
				<a href="https://lpse.kemdikbud.go.id/" target="_blank" title="LPSE Kemdikbud"><img src="<?php echo $alamat_website;?>images/stories/lpse-kemdikbud.png" width="90%" style="margin-left: auto;margin-right:auto; display:block;" /></a>
				<hr />
				<a href="http://114.7.201.110/" target="_blank" title="Data Pokok Pendidikan Sulsel"><img src="<?php echo $alamat_website;?>images/stories/dapodik_sulsel.png" width="90%" style="margin-left: auto;margin-right:auto; display:block;" /></a>
				<hr />
				  <?php
				}
				    
				?>
				
			</div>


			

			<div class="widget arqam_counter-widget" id="arqam_counter-widget-2">
				<h3 class="widget-title">Media Publikasi</h3>

				<a href="https://lpmpsulsel.kemdikbud.go.id/semua-buletin.html"><img src="<?php echo $alamat_website;?>/images/stories/90jurnal_ilmu_kependidikan_vol_12.png" width="80%" height="50px" style="margin-left: auto;margin-right:auto; display:block;" /></a>
			</div>
			
			
			<div class="widget arqam_counter-widget" id="arqam_counter-widget-2">
				<h3 class="widget-title">Jumlah Kunjungan</h3>
                <?php
                    $queryVisitorKemarin = mysql_query("SELECT count(waktu_akses)as kunjungan FROM `jos_visitors` WHERE UNIX_TIMESTAMP(waktu_akses) >= UNIX_TIMESTAMP(CAST(NOW() - INTERVAL 1 DAY AS DATE)) AND UNIX_TIMESTAMP(waktu_akses) <= UNIX_TIMESTAMP(CAST(NOW() AS DATE))");
                    $r_kemarin = mysql_fetch_array($queryVisitorKemarin);
                    $jumlahKemarin = $r_kemarin['kunjungan'];
                
                    $queryVisitorToday = mysql_query("SELECT count(waktu_akses)as kunjungan FROM `jos_visitors` WHERE waktu_akses >= CURDATE()");
                    $r_today = mysql_fetch_array($queryVisitorToday);
                    $jumlahToday = $r_today['kunjungan'];
                
                ?>
				<ul>
				    <li>Kunjungan Hari Ini : <strong><?php echo $jumlahToday;?></strong></li>
				    <li>Kunjungan Kemarin  : <strong><?php echo $jumlahKemarin;?></strong></li>
				</ul>
			</div>
			<!--<div class="widget arqam_counter-widget" id="arqam_counter-widget-2">-->
			<!--	<h3 class="widget-title">Statistik Pengunjung</h3>-->
   <!--             <ul>-->
   <!--                 <li>Online Users : 4</li>-->
   <!--                 <li>Today's Visitors : 109</li>-->
   <!--                 <li>Yesterday's Visitors : 177</li>-->
   <!--             </ul>-->
				
			<!--</div>-->
			
			<div class="widget arqam_counter-widget" id="arqam_counter-widget-2">
				<h3 class="widget-title">Halaman Facebook</h3>

				<div class="fb-page" data-href="https://www.facebook.com/medialpmpsulsel/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/lpmp.prov.sulsel/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lpmp.prov.sulsel/">Lembaga Penjaminan Mutu Pendidikan - LPMP Sulsel</a></blockquote></div>
			</div>

			
			