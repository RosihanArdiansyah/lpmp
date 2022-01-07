<div class="header-bottom">

			<div class="row">

				<div class="large-12 columns">

					<nav id="navigation" class="navigation top-bar" data-topbar>

						<div class="menu-primary-menu-container">

							<ul id="menu-primary-menu" class="menu">
								<li><a href="<?=$alamat_website?>">Halaman Depan</a></li>
								<li><a>Profil LPMP</a>
									<ul class="sub-menu">

										<?php
										$queryMenu = mysql_query("SELECT *FROM $halamanstatis ORDER BY id_halaman ASC");
										while ($s = mysql_fetch_array($queryMenu))
										{
											?>
												<li><a href="profil-<?=$s[id_halaman]?>-<?=$s[judul_seo]?>.html"><?php echo $s['judul'];?></a></li>
											
											<?php
										}
										?>
										
									</ul>
								</li>
								<li><a>Informasi</a>
									<ul class="sub-menu">
										
										<li><a href="semua-berita.html" target="_blank">Berita</a></li>
										<li><a href="semua-tulisan.html" target="_blank">Artikel</a></li>
                                        <li><a href="semua-pengumuman.html">Pengumuman</a></li>

									</ul>
								</li>
								
								<li><a>Survey</a>
									<ul class="sub-menu">
										
										<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfP0KvjOcwXCOxT9sJc5nEfE3N2dl7v5V0067fjhaHLB5NSVQ/viewform" target="_blank">Survei Layanan Informasi Laman</a></li>
									    <li><a href="https://docs.google.com/forms/d/1Ik1Ogt1TLUzYe5rDa6ZG0VCqzZ6YHOfBCSiT1FpEuq0/viewform?edit_requested=true">Survey Integritas Jabatan</a></li>
									</ul>
								</li>
								
								<li><a>Layanan Publik</a>
									<ul class="sub-menu">
										<li><a href="http://ult.kemdikbud.go.id" target="_blank">ULT</a></li>
										<li><a href="https://lpmpsulsel.kemdikbud.go.id/file_uploads/Form_02_permohonan_info _sulsel.pdf" target="_blank">Form 02 Permohonan Info Sulsel</a></li>
										<li><a href="https://lpmpsulsel.kemdikbud.go.id/file_uploads/form_05_pernyataan_pemohon_informasi_sulsel.pdf" target="_blank">Form 05 Permohonan Informasi Sulsel</a></li>
                                        <li><a href="https://lpmpsulsel.kemdikbud.go.id/file_uploads/POS-ULT-SULSEL-2018.pdf" target="_blank">POS ULT SULSEL 2018</a></li>
                                        <li><a href="https://lpmpsulsel.kemdikbud.go.id/file_uploads/Kuesioner-Tingkat-Kepuasan-Pengunjung-sulsel.pdf" target="_blank">Kuesioner Tingkat Kepuasan Pengunjung</a></li>


									</ul>
								</li>
                                <li><a href="https://lpmpsulsel.kemdikbud.go.id/kataloglpmpsulsel" target="_blank">Katalog</a></li>
                                <li><a>Galeri</a>
									<ul class="sub-menu">
										
										<li><a href="https://lpmpsulsel.kemdikbud.go.id/galeri.html">Foto</a></li>
										<li><a href="https://lpmpsulsel.kemdikbud.go.id/video.html">Video</a></li>
                                        

									</ul>
								</li>
								
								<li><a href="kontak.html">Kontak</a></li>
								
								<li><a>Pengaduan</a>
									<ul class="sub-menu">
										<li><a href="pengaduan.html" target="_blank">Internal</a></li>
										<li><a>Eksternal</a>
									        <ul class="sub-menu">
									            <li><a href="http://posko-pengaduan.itjen.kemdikbud.go.id/index.php" target="_blank">ITJEN KEMENDIKBUD</a></li>
									            <li><a href="https://wbs.kemdikbud.go.id/" target="_blank">WHISTLEBLOWING SYSTEM</a></li>
									        </ul>
                                        </li>
									</ul>
								</li>
							</ul>
					
						</div>
						<!--<div class="search-form-nav">-->
						<!--	<form method="get" action="#">-->
						<!--		<fieldset>-->
						<!--			<input placeholder="Search" type="text" name="s" autocomplete="off" value=""-->
						<!--				   class="advanced_search"/>-->
						<!--			<button type="submit" class="submit-search">Search</button>-->
						<!--		</fieldset>-->
						<!--	</form>-->
						<!--</div>-->


					</nav>
					<!--/ .navigation-->
				</div>

			</div>
			<!--/ .row-->

		</div>
		<!--/ .header-bottom-->