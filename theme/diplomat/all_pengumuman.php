<div id="main" class="medium-8 large-8 columns">



						<div class="page-title">

							<h1>Pengumuman</h1>

							<div class="breadcrumbs">
								<a href="index.php" title="">Home</a>
								Pengumuman
							</div>
						</div>
		<?php
			$id = (int)$_GET['id'];


			$p      = new Paging3;
			$batas  = 3;
			 $posisi = $p->cariPosisi($batas);


			$query = mysql_query("SELECT *FROM ashari_pengumuman ORDER BY pengumuman_id DESC");
			$numRows = mysql_num_rows($query);


		?>






		<?php
			

			

				//$c = mysql_fetch_array($queryContent);
				while ($c = mysql_fetch_array($query))
				{

						
							$isi = $c['pengumuman_isi'];
						?>

						

						<div class="post full-width">

							
							<header class="entry-header">
								<h2 class="entry-title">
									<a href="pengumuman-<?=$c[pengumuman_id]?>-<?=$c[pengumuman_alias]?>.html" title="<?php echo $c['pengumuman_judul'];?>">
									<?php echo $c['pengumuman_judul'];?>
								</a>

								</h2>

								<div class="entry-meta">
									<span class="posted-on"><a href="#"><?php echo tgl_indo($c['pengumuman_tanggal']);?></a></span>
									
																										</div>
							</header>

							<div class="entry-content">

								<?php echo $isi;


if ($c['pengumuman_file'] != '')
{
?><p></p>
<a href="file_uploads/<?php echo $c['pengumuman_file'];?>" target="_blank" style="color:red;">Download Lampiran</a>
<?php
}

?>


							</div>

							

						</div>
						<!--/ .post-->

				
						

						
		
		<!--/ #main-->
		
			<?php
				}


			
		?>


		


</div>












		<aside id="sidebar" class="medium-4 large-4 columns">
			<?php
				include "content_kanan.php";
			?>
		</aside>
		<!--/ #sidebar-->

	</main>
	<!--/ #content-->