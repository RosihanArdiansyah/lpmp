<?php
    include "config/constant.php";
?>
<style>
	.label {margin: 2px 0;}
	.field {margin: 0 0 20px 0;}	
		h1, h2 {font-family:"Georgia", Times, serif;font-weight: normal;}
		div#central {margin: 40px 0px 100px 0px;}
		@media all and (min-width: 768px) and (max-width: 979px) {.content {width: 750px;}}
		@media all and (max-width: 767px) {
			body {margin: 0 auto;word-wrap:break-word}
			.content {width:auto;}
			div#central {	margin: 40px 20px 100px 20px;}
		}
		
		#message {  padding: 0px 40px 0px 0px; }
		#mail-status {
			padding: 12px 20px;
			width: 100%;
			display:none; 
			font-size: 1em;
			font-family: "Georgia", Times, serif;
			color: rgb(40, 40, 40);
		}
	  .error{background-color: #F7902D;  margin-bottom: 40px;}
	  .success{background-color: #48e0a4; }
		.g-recaptcha {margin: 0 0 25px 0;}	  
	</style>

<script>
	$(document).ready(function (e){
		$("#frmContact").on('submit',(function(e){
			e.preventDefault();
			$("#mail-status").hide();
			$('#send-message').hide();
			$('#loader-icon').show();
			$.ajax({
				url: "contact.php",
				type: "POST",
				dataType:'json',
				data: {
				"name":$('input[name="name"]').val(),
				"email":$('input[name="email"]').val(),
				"phone":$('input[name="phone"]').val(),
				"content":$('textarea[name="content"]').val(),
				"g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()},				
				success: function(response){
				    console.log(response);
				    
				$("#mail-status").show();
				$('#loader-icon').hide();
				if(response.type == "error") {
					$('#send-message').show();
					$("#mail-status").attr("class","error");				
				} else if(response.type == "message"){
					$('#send-message').hide();
					$("#mail-status").attr("class","success");							
				}
				$("#mail-status").html(response.text);	
				},
				error: function(){} 
			});
		}));
	});
	</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<div id="main" class="medium-7 large-7 columns">



						<div class="page-title">

							<h1>Pengaduan</h1>

							<div class="breadcrumbs">
								<a href="index.php" title="LPMP Sulawesi Selatan">Halaman Depan</a>
								Pengaduan
							</div>
						</div>
		






						
							
							<div id="central">
	<div class="content">
		<h2>Isi Aduan Anda</h2>
							Format aduan ini ditujukan bagi internal pegawai LPMP Sulawesi Selatan. Untuk pengaduan dari ekternal (guru, dinas pendidikan dan pemerhati pendidikan lainnya), silahkan masuk ke Unit Layanan Terpadu di sini
		<div id="message">
		<form id="frmContact" action="" method="POST" novalidate="novalidate">
		    
			<div class="label">Nama :</div>
			<div class="field">
				<input type="text" id="name" name="name" placeholder="Masukkan Nama Anda" title="Masukkan Nama Anda" class="required" aria-required="true" required>
			</div>
			<div class="label">Email :</div>
			<div class="field">			
				<input type="text" id="email" name="email" placeholder="Masukkan Email Anda" title="Masukkan Email Anda" class="required email" aria-required="true" required>
			</div>
			<div class="label">Nomor Handphone :</div>
			<div class="field">			
				<input type="text" id="phone" name="phone" placeholder="Masukkan Nomor Handphone Anda" title="Masukkan Nomor Handphone Anda" class="required phone" aria-required="true" required>
			</div>
			<div class="label">Isi Pengaduan:</div>
			<div class="field">			
				<textarea id="comment-content" name="content" placeholder="Masukkan Aduan Anda"></textarea>			
			</div>
			<div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>		
			<div id="mail-status"></div>			
			<button type="Submit" id="send-message" style="clear:both;">Kirim Aduan</button>
		</form>
		<div id="loader-icon" style="display:none;"><img src="images/loader.gif" /></div>
		</div>		
	</div><!-- content -->
</div><!-- central -->	


					

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