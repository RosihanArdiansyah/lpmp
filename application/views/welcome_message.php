<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Page Title -->
	<title><?php echo $site_title;?></title>
	<!-- Page header -->
	
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
	
	
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url('theme/css/bootstrap.min.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('theme/css/style.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('theme/css/padding-margin.css')?>"/>
	<!-- Google Web Fonts
	================================================== -->
	<link
		href='http://fonts.googleapis.com/css?family=Roboto+Slab:700,500,400%7cCourgette%7cRoboto:400,500,700%7CIndie+Flower:regular%7COswald:300,regular,700&amp;subset=latin%2Clatin-ext'
		rel='stylesheet' type='text/css'>
	<!-- Theme CSS
	================================================== -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" />
	<link rel="stylesheet" href="<?php echo base_url('theme/diplomat/css/styles.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('theme/diplomat/css/layout.css')?>" />
	<!-- owl carousel
	================================================= -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<!-- Vendor CSS
	================================================== -->
	<link rel="stylesheet" href="<?php echo base_url('theme/diplomat/css/vendor.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('theme/diplomat/css/fontello.css')?>" />
	<!-- slider -->
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/slider-pro/1.5.0/css/slider-pro.min.css" media="screen" />
	<link rel="stylesheet" type="text/css"
		href="https://lpmpsulsel.kemdikbud.go.id/layout/diplomat/css/slider-examples.css" media="screen" />
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.css" media="screen" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/slider-pro/1.3.0/js/jquery.sliderPro.min.js"
		type="text/javascript"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.min.js"
		type="text/javascript"></script>
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url('theme/diplomat/images/'.$icon);?>">
	<!-- SEO Tag -->
	
	
	
		<meta name="description" content="<?php echo $description;?>"/>
		<link rel="canonical" href="<?php echo $link_cannonical;?>" />
		<meta property="og:locale" content="id_ID" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="<?php echo $title;?>" />
		<meta property="og:description" content="<?php echo $description;?>" />
		<meta property="og:url" content="<?php echo $url;?>" />
		<meta property="og:site_name" content="<?php echo $site_name;?>" />
		<meta property="article:publisher" content="<?php echo $site_facebook;?>" />
		<meta property="article:section" content="<?php echo $category;?>" />
		<meta property="og:image" content="<?php echo base_url().'assets/images/'.$image;?>" />
		<meta property="og:image:width" content="900" />
 <meta property="og:image:height" content="560" />
		<meta property="og:image:secure_url" content="<?php echo base_url().'assets/images/'.$image;?>" />
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:description" content="<?php echo $description;?>" />
		<meta name="twitter:title" content="<?php echo $title;?>" />
		<meta name="twitter:site" content="<?php echo $site_twitter;?>" />
		<meta name="twitter:image" content="<?php echo base_url().'assets/images/'.$image;?>" />
	 <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>"/> 
	<!-- End SEO Tag. -->
</head>

<body>
	<div class="tmm_loader">

		<div class="logo">
			<span class="tmm_logo">
				<a title="LPMP Sulawesi Selatan" href="<?=site_url()?>"><b>LPMP</b> Sulawesi Selatan</a>
			</span>
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
	<main class="cd-main-content">

				<!-- HOME SECTION
				================================================== -->
				<section id="homepage" class="home page-section parallax-2 overlay-light-alpha-10" style="padding-top: 512px ;">
				<video autoplay muted loop id="myVideo" style="position:fixed;right:0;bottom:0;min-width:100%;min-height:100%;">
  							<source src="rickroll.mp4" type="video/mp4">
					</video>		
					<div class="table-content columns">	
						<div class="table-center-text">
							<div class="container">		

								<div class="local-scroll" style="padding-top: 8px;">
									<a href="<?php echo site_url('home');?>" class="btn bg-black white-color" style="margin-bottom: 16px;">Halaman Depan</a>
									<span class="btn_seperator"></span>
									<a href="<?php echo site_url('home');?>" class="btn bg-black white-color" style="margin-bottom: 16px;">Halaman Depan</a>
									<span class="btn_seperator"></span>
									<a href="<?php echo site_url('home');?>" class="btn bg-black white-color" style="margin-bottom: 16px;">Halaman Depan</a>
									<span class="btn_seperator"></span>
									<br>
									<a href="<?php echo site_url('home');?>" class="btn bg-black white-color">Halaman Depan</a>
									<span class="btn_seperator"></span>
									<a href="<?php echo site_url('halamaninputnya');?>" class="btn bg-black white-color hidden-xs">Admin</a>
								</div>
							</div>	
						</div>
					</div>
				</section>	
				
				
								
					
				
	</main>
	<!--/ #wrapper-->
	<!-- - - - - - - - END WRAPPER - - - - - - - -->
	<!-- Vendor
================================================== -->
	<!--[if lt IE 9]>
<script src="js/vendor/respond.min.js"></script>
<script src="js/vendor/jquery.selectivizr.min.js"></script>
<![endif]-->
	<script src="<?php echo base_url('theme/diplomat/js/vendor/plugins.js')?>"></script>
	<script src="<?php echo base_url('theme/diplomat/js/vendor/modals.js')?>"></script>
	<!-- Theme Base, Components and Settings
================================================== -->
	<script src="<?php echo base_url('theme/diplomat/js/config.js')?>"></script>
	<script src="<?php echo base_url('theme/diplomat/js/theme.js')?>"></script>
</body>

</html>