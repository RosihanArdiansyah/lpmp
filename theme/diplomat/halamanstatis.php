<div id="main" class="medium-8 large-8 columns">



						
		<?php
			$id = (int)$_GET['id'];

			$query = mysql_query("SELECT *FROM $halamanstatis WHERE id_halaman = '$id'");
			$numRows = mysql_num_rows($query);
if ($numRows > 0)
{
$c = mysql_fetch_array($query);
	

		?>
		<div class="relative">
						

							<div class="breadcrumbs">
								
								<h2><?php echo $c['judul'];?></h2>
							</div>
						</div>





		<?php
			

			

				//$c = mysql_fetch_array($queryContent);
				
				
						$isi = $c['isi_halaman'];
						if ($isi == "")
							$isi = $c['fulltext_content'];
						?>

						








						<div class="post full-width">

							
							<header class="entry-header">
								<h2 class="entry-title">
									<a href="profil-<?php echo $c['id_halaman'];?>.html" title="<?php echo $c['judul'];?>">
									<?php echo $c['title_content'];?>
								</a>

								</h2>

								
							</header>

							<div class="entry-content">

								<?php echo $isi;?>

							</div>

							

						</div>
						<!--/ .post-->

				

		
		<!--/ #main-->
<?php
}

else
{
echo "Not Found";
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