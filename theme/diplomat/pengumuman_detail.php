<?php
			$id = (int)$_GET['id'];

			$query = mysql_query("SELECT *FROM ashari_pengumuman 
					WHERE pengumuman_id = $id");
			$numRows = mysql_num_rows($query);

			$c = mysql_fetch_array($query);

		?>


<div id="main" class="medium-8 large-8 columns">



						<div class="page-title">

							<h1>Pengumuman</h1>

							<div class="breadcrumbs">
								<a href="index.php" title="">Home</a>
								<a href="semua-pengumuman.html">Pengumuman</a>
								<?php echo $c['pengumuman_judul'];?>
							</div>
						</div>
		






		<?php
			

			


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
									<span class="byline"><a href="#"><?php echo $c['pengumuman_user'];?></a></span>
									
								</div>
							</header>

							<div class="entry-content">

								<?php echo $isi;?>
<?php
if ($c['pengumuman_file'] != '')
{
?><p>
<a href="file_uploads/<?php echo $c['pengumuman_file'];?>" target="_blank" style="color:red;">Download Lampiran</a></p>
<?php
}
?>

							</div>

							<footer class="entry-footer">
								

							
							</footer>

						</div>
						<!--/ .post-->

				

		
		<!--/ #main-->
		
		

</div>



		<aside id="sidebar" class="medium-4 large-4 columns">
			<?php
				include "content_kanan.php";
			?>
		</aside>
		<!--/ #sidebar-->

	</main>
	<!--/ #content-->