<?php

    // include "config/koneksi.php";
    // include "config/library.php";
    
error_reporting(0);
	include "../../config/koneksi.php";
	include "../../config/library.php";
	include "../../config/fungsi_indotgl.php";
	
	setCounterVisitor();
	   // mysql_query("INSERT INTO jos_visitors SET page_location = 'testing', ip_address = '127.0.0.1'");
?>

<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie8 no-js" lang="en-US"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en-US"><![endif]-->
<!--[if !(IE)]><!--><html class="not-ie no-js" lang="en-US"><!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Basic Page Needs
	  ================================================== -->
	
	<title><?php include "boot_titel.php"; ?></title>
    <?php 
        include "boot_image.php";
    ?>
	
    
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
	<link rel="shortcut icon" href="<?php echo "$f[folder]";?>/images/favicon.ico" type="image/x-icon"/>

	<!-- Google Web Fonts
	================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700,500,400%7cCourgette%7cRoboto:400,500,700%7CIndie+Flower:regular%7COswald:300,regular,700&amp;subset=latin%2Clatin-ext'
		  rel='stylesheet' type='text/css'>

	<!-- Theme CSS
	================================================== -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css"/>
	<link rel="stylesheet" href="<?php echo $alamat_website.$f[folder];?>/css/styles.css"/>
	<link rel="stylesheet" href="<?php echo $alamat_website.$f[folder];?>/css/layout.css"/>
	
	<!-- owl carousel
	================================================= -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

	<!-- Vendor CSS
	================================================== -->
	<link rel="stylesheet" href="<?php echo $alamat_website.$f[folder];?>/css/vendor.css"/>
	<link rel="stylesheet" href="<?php echo $alamat_website.$f[folder];?>/css/fontello.css"/>
	
<!-- slider -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slider-pro/1.5.0/css/slider-pro.min.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $alamat_website.$f[folder];?>/css/slider-examples.css" media="screen"/>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.css" media="screen"/>
	<!-- Modernizr
	================================================== -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slider-pro/1.3.0/js/jquery.sliderPro.min.js" type="text/javascript" ></script>
	<script type="text/javascript">
	$( document ).ready(function( $ ) {
		$( '#example1' ).sliderPro({
			width: 960,
			height: 500,
			arrows: true,
			buttons: false,
			waitForLayers: true,
			thumbnailWidth: 200,
			thumbnailHeight: 100,
			thumbnailPointer: true,
			autoplay: true,
			autoScaleLayers: false,
			breakpoints: {
				500: {
					thumbnailWidth: 120,
					thumbnailHeight: 50
				}
			}
		});
	});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.min.js" type="text/javascript" ></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 800,
        speed: 800
      });

      

    });
  </script>
</head>
<body class="animated">
<div class="tmm_loader">

	<div class="logo">
		<span class="tmm_logo">
			<a title="LPMP Sulawesi Selatan" href="index.php"><b>LPMP</b> Sulawesi Selatan</a>
        
	


	</div>
	

	<div class="loader">
		<div id="spinningSquaresG">
			<div id="spinningSquaresG_1" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_2" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_3" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_4" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_5" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_6" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_7" class="spinningSquaresG"></div>
			<div id="spinningSquaresG_8" class="spinningSquaresG"></div>
		</div>
	</div>
</div>

<!-- - - - - - - - WRAPPER - - - - - - - -->
<div id="wrapper">

	<!-- - - - - - - - MOBILE MENU - - - - - - - -->

	<nav id="mobile-advanced" class="mobile-advanced"></nav>

	<!-- - - - - - - - END MOBILE MENU - - - - - - - -->


	<!-- - - - - - - - HEADER - - - - - - - -->

	<header id="header" class="header type-3">

		<div class="header-top">

			<div class="row">

				
			</div>
			<!--/ .row-->

		</div>
		<!--/ .header-top-->

		<div class="header-middle">

			<div class="row">

				<div class="large-7 columns">
					<div class="header-middle-entry">

						<div class="logo">
							<span class="tmm_logo">
								<a title="Lembaga Penjaminan Mutu Pendidikan Sulawesi Selatan" href="<?=$alamat_website?>"><b>LPMP</b> Sulawesi Selatan</a>
							</span>
						</div>

						<div class="account">

							<ul>
								<li data-login="loginDialog"><a href="#"></a></li>
								<li data-account="accountDialog"><a href="#"></a></li>
							</ul>

						

						</div>
					</div>

				</div>
				
				<div class="large-5 columns">
					
					<div class="owl-carousel owl-theme">
          
          <?php
            
            $querySlideImage = mysql_query("SELECT *FROM jos_headline WHERE title_headline = '' AND tipe_slider='headline'  ORDER BY id_headline ASC LIMIT 0,8");
            while ($sli = mysql_fetch_array($querySlideImage)) {
                
                $gambar = "https://lpmpsulsel.kemdikbud.go.id/".$sli['gambar_headline'];
                ?>
                    <div class="item">
                    <img src="<?=$gambar?>" height="100px" width="100px" />
                    </div>
                <?php
            }
          ?>
          
          
            
          </div>
          
          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 4,
                dots: false,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1500,
                autoplayHoverPause: true
              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1500])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            })
          </script>
				</div>

			</div>
			<!--/ .row-->

		</div>
		<!--/ .header-middle-->

		<!-- menu navigation -->
		<?php
			include "content_menu.php";
		?>
		<!--/ .menu navigation -->

	</header>
	<!--/ #header-->

	<!-- - - - - - - -  END HEADER  - - - - - - - -->


	<!-- - - - - - - - MAIN  - - - - - - - -->

	<main id="content" class="row sbr">
		


				<?php
					if ($_GET['module'] == "home") {
						include "default_page.php";
					}
					else {
						include "content_kiri.php";
					}
					
				?>



		


	</main>
	<!--/ #content -->









	<!-- Dialog Login/Register Widnows -->

	<div id="accountDialog" class="dialog">
		<div class="dialog-overlay"></div>
		<div class="dialog-content">
			<div class="morph-shape">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
					<rect x="3" y="3" fill="none" width="556" height="276"/>
				</svg>
			</div>
			<div class="dialog-inner">
				<form action="/">
					<fieldset class="login">

						<p><input type="text" name="user_name" id="user_name" placeholder="Username*" required="" autocomplete="off"/></p>

						<p><input type="email" name="user_email" id="user_email" placeholder="E-mail*" required="" autocomplete="off"/></p>

						<p>
							<button class="button middle" type="submit">Register</button>
							&nbsp;
							<a href="#" class="button middle dialog-login-button">Log In</a>
						</p>

					</fieldset>
				</form>
				<i class="action-close" data-dialog-close>Close</i>
			</div>
		</div>
	</div>

	<div id="loginDialog" class="dialog">
		<div class="dialog-overlay"></div>
		<div class="dialog-content">
			<div class="morph-shape">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
					<rect x="3" y="3" fill="none" width="556" height="276"/>
				</svg>
			</div>
			<div class="dialog-inner">
				<form action="/" method="post" class="account">
					<fieldset>

						<p><input type="text" name="log" id="user_login" placeholder="Username*" required="" autocomplete="off"/></p>

						<p><input type="password" name="pwd" id="user_pass" placeholder="Password*" required="" autocomplete="off"/></p>

						<p>
							<input type="checkbox" id="rememberme" class="tmm-checkbox" name="rememberme" value="forever">

							<label for="rememberme">Remember Me</label>

							<button class="button middle right" type="submit">Log In</button>

							<a href="#" class="reset-pass">Reset password</a>
						</p>

					</fieldset>
				</form>

				<i class="action-close" data-dialog-close>Close</i>
			</div>

		</div>
	</div>

	<!-- End Dialog Login/Register Widnows -->

	<!-- - - - - - - - END MAIN - - - - - - - -->


	<!-- - - - - - - - FOOTER - - - - - - - -->

	<footer id="footer">

		

		<div class="footer-bottom">

			<div class="row">

				<div class="large-6 columns">
					<div class="copyright">
						Copyright &copy 2016. LPMP SULSEL All rights reserved
					</div>
				</div>

				<div class="large-3 large-offset-3 columns">
					<div class="developed">
						Developed by <a target="_blank" href="http://lpmpsulse.net">LPMP SULSEL</a>
					</div>
				</div>

			</div>
			<!--/ .row-->

		</div>
		<!--/ .footer-bottom-->

	</footer>
	<!--/ #footer-->

	<!-- - - - - - - - END FOOTER - - - - - - - -->

</div>
<!--/ #wrapper-->

<!-- - - - - - - - END WRAPPER - - - - - - - -->


<!-- Vendor
================================================== -->

<!--[if lt IE 9]>
<script src="js/vendor/respond.min.js"></script>
<script src="js/vendor/jquery.selectivizr.min.js"></script>
<![endif]-->




<script src="<?php echo $alamat_website.$f[folder];?>/js/vendor/plugins.js"></script>
<script src="<?php echo $alamat_website.$f[folder];?>/js/vendor/modals.js"></script>



<!-- Theme Base, Components and Settings
================================================== -->
<script src="<?php echo $alamat_website.$f[folder];?>/js/config.js"></script>
<script src="<?php echo $alamat_website.$f[folder];?>/js/theme.js"></script>
</body>
</html>