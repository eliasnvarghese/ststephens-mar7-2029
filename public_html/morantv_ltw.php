<?php ob_start(); ?>
<?php session_start() ?>
<?php 
include("includes/usercredentials.php");
?>
<!DOCTYPE html>
<head>
<title>St. Stephen's Jacobite Syriac Orthodox Church, San Jose (San Francisco -  Bay Area), California</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="St. Stephen's Jacobite Syriac Orthodox Church, San Jose (San Francisco -  Bay Area), California" />
<meta name="abstract" content="St. Stephen's Jacobite Syriac Orthodox Church, San Jose (San Francisco -  Bay Area), California"/>
<meta name="key-phrases" content="Syriac Orthodox Church,"/>
<meta name="Classification" content="Church"/>
<meta name="subject" content="Syriac Orthodox Church"/>
<meta name="language" content="english"/>
<meta name="distribution" content="global"/>
<meta name="audience" content="All"/>
<meta property="og:locale" content="es_ES" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Moran TV - Live the Word - Rev Fr. Paul Thotakat " />
<meta property="og:description" content="MORAN TV is the official TV channel of the Malankara Archdiocese of the Syriac Orthodox Church in North America." />
<meta property="og:url" content="https://www.ststephenssanjose.org/morantv_ltw.php" />
<meta property="og:image" content="https://www.ststephenssanjose.org/images/morantv/ltw.png" />
<meta property="og:site_name" content="Las Recetas De Angy" />
<meta name="page-topic" content="St. Stephen's Syriac Orthodox Church,San Jose (San Francisco - Bay Area) - Moran TV"/>

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!-- Styles -->
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/owl-carousel.css" type="text/css" />
<link rel="stylesheet" href="css/mediaelementplayer.min.css" />
<link href="css/revolution.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="alternate stylesheet" type="text/css" href="css/colors/red.css" title="color1" />
<link rel="alternate stylesheet" type="text/css" href="css/colors/wedgewood.css" title="color2" />
<link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="color3" />
<link rel="alternate stylesheet" type="text/css" href="css/colors/green.css" title="color4" />
<link rel="alternate stylesheet" type="text/css" href="css/colors/darkgreen.css" title="color5" />
<style>
.member-detail {
 position: relative;
	}
.logo img{
	width:auto;
	
}
.video-container {
	position:relative;
	padding-bottom:56.25%;
	padding-top:30px;
	height:0;
	overflow:hidden;
}
.video-container iframe, .video-container object, .video-container embed {
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
}
</style>
</head>
<body>
<div class="theme-layout">
<?php include("includes/pageheader.php");?>


<section>
	<div class="block remove-gap">
		<div class="container">
			<div class="row">
				<div class="title2">
					<span></span>
					<span></span>
					
				</div>
				<div class="col-md-12 column">
					<div class="remove-ext">
						<div class="video-container">
							<iframe src="https://www.youtube.com/embed/QK1lGkt28w4?start=53" 
							frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include("includes/pagefooter.php");?>

</div>
	<!-- SCRIPTS-->
	<script type="text/javascript" src="js/modernizr.custom.17475.js"></script>
	<script src="js/jquery.1.10.2.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.poptrox.min.js" type="text/javascript"></script>
	<script src="js/enscroll-0.5.2.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
	<script src="js/mediaelement-and-player.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/styleswitcher.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.minimalect.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.downCount.js"></script> 
	<script>
	$(window).load(function(){
		$(function(){
			var $portfolio = $('.mas-gallery');
			$portfolio.isotope({
			masonry: {
			  columnWidth: 1
			}
			});
		});
	});
	</script>
	<script>
    $(document).ready(function() {
		$("#select1").minimalect({ theme: "bubble", placeholder: "Select Gender" });
		$("#select2").minimalect({ theme: "bubble", placeholder: "Select Age" });
		$("#select3").minimalect({ theme: "bubble", placeholder: "Select Your Area" });
		$(".tweets-slides").owlCarousel({
			autoPlay: 5000,
			slideSpeed:1000,
			singleItem : true,
			transitionStyle : "fadeUp",		
			navigation : false
		}); /*** TWEETS CAROUSEL ***/
		$(".team-carousel").owlCarousel({
			autoPlay: 8000,
			rewindSpeed : 3000,
			slideSpeed:2000,
			items : 4,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,2],
			itemsTablet : [768,2],
			itemsMobile : [479,1],
			navigation : false,
		}); /*** TEAM CAROUSEL ***/
	});	
	$('audio,video').mediaelementplayer();
	</script>
	<!-- SLIDER REVOLUTION -->
    <script type="text/javascript" src="js/revolution/jquery.themepunch.tools.min.js"></script>   
    <script type="text/javascript" src="js/revolution/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="js/revolution/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() { 
		   jQuery("#slider1").revolution({
		      sliderType:"standard",
		      sliderLayout:"fullwidth",
		      delay:9000,
		      navigation: {
		          arrows:{enable:true} 
		      }, 
		      gridwidth:1100,
		      gridheight:500
		    }); 
		}); 
	</script>
</body>