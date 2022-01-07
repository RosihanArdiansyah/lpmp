<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
     
    </style>

    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU42u_6LhKNUFVtvP92Hs-ppEG-RC6jpg&callback=initMap"
    async defer></script>


<div id="main" class="medium-7 large-7 columns">



						<div class="page-title">

							<h1>Kontak</h1>

							<div class="breadcrumbs">
								<a href="index.php" title="LPMP Sulawesi Selatan">Halaman Depan</a>
								Kontak
							</div>
						</div>
		<?php
			

		 $query = mysql_query("SELECT *FROM jos_identity ORDER BY id_identitas DESC LIMIT 0,1");
			$numRows = mysql_num_rows($query);
            $r = mysql_fetch_array($query);
		

		?>






						

						

						<div class="entry-content">
							<p>
								<?php echo $r['hubungi'];?>
							</p>
						</div>
						
						
							<!--<h2>Isi Aduan Anda</h2>-->
							<!--<form method="POST" action="kirim_aduan.php">-->
							<!--	<p class="tmmFormStyling form-input-text">-->
							<!--		<input id="name" name="nama" required="" type="text" name="textinput" value="" placeholder="Your Name *">-->
							<!--	</p>-->
								
							<!--	<p class="tmmFormStyling form-textarea">-->
							<!--		<textarea id="message" required="" name="isi_aduan" placeholder="Aduan Anda"></textarea>-->
							<!--	</p>-->

       <!--                         <p class="tmmFormStyling form-captcha">-->
								

       <!--                             <input class="button middle default-blue" type="submit">-->
                                       
       <!--                         </p>-->

							<!--</form>-->


					

<hr />
				
						

						
		
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