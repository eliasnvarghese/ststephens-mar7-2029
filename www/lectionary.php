<?php ob_start(); ?>
<?php session_start() ?>
<?php 
include("includes/usercredentials.php");
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lectionary - St. Stephen's Jacobite Syriac Orthodox Church, San Jose (San Francisco - Bay Area), California</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
.title:before {
    content: "\f005";
}
.image > img {
    width: initial;
}
.sermon p {
    margin-top: 5px;
   font-size:14px;
}

.sermon h3 a {
    color: #0dafa9;
}
 .sermon h4 {
	 color: #b96969;
}
</style>
</head>
<body>
<div class="theme-layout">
<?php include "includes/pageheader.php";?>
<div class="page-top">
	<div class="parallax" style="background:url(images/parallax8.jpg);"></div>	
	<div class="container"> 
		<h1><span>Lectionary</span></h1>
	</div>
</div><!--- PAGE TOP -->
<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-8 column">
					<div class="latest-sermons remove-ext">
                        <div class="sermon">
                            <div class="row">
                                <div class="col-md-7">
                                        <iframe width="370" height="241" src="https://www.youtube.com/embed/Xh1hHl3TPwg" 
                                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                        </iframe>
                                </div>
                                <div class="col-md-4">
                                    <h3><i class="fa fa-calendar-o"></i> 05-July-2020</h3>
                                    <p>Fifth Sunday after Pentecost</p>
                                    <h4><a href="http://www.biblegateway.com/passage/?search=.Luke%209:10-17&version=KJV">St.Luke 9:10-17</a></h4>
                                </div>
                            </div>
                        </div><!-- SERMON -->
                        <div class="sermon">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="image">
                                        <img src="images/resource/sermon1.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h3><a href="#" title=""><i class="fa fa-calendar-o"></i>12-July-2020</a></h3>
                                    <p>Sixth Sunday after Pentecost</p>
                                    <h4><a href="https://www.biblegateway.com/passage/?search=.Matthew%2015:32-39&version=KJV">St.Matthew 15:32-39</a></h4>
                                </div>
                            </div>
                        </div><!-- SERMON -->
                        
					</div><!-- LATEST SERMONS -->
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