<?php
$flag = "home"
?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Stella Valle</title>

  
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700" type="text/css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=GFS+Didot" type="text/css">
  <link rel="stylesheet" href="css/app.css" />
  <link rel="stylesheet" href="css/carousel.css" />
  <link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

  <script src="js/vendor/custom.modernizr.js"></script>
  
  <style type="text/css">
  	@media only screen and (min-width: 941px) {
  		.fancybox-wrap {
		  	top: 20% !important; 
		  	left: 2% !important; 
		} 
	}
	
	@media only screen and (min-width: 1290px) {
  		.fancybox-wrap {
		  	top: 20% !important; 
		  	left: 12% !important; 
		} 
	}
	
  </style>

</head>
<body>
	
  	
    <?php require_once('inc/header.php'); ?>

	<div class="row">
		<div class="large-12 columns" style="position:relative;">
			
            <div class="slideshow-wrapper">
  				<div class="preloader"></div>
                    <ul data-orbit>
                          <li><a href="#" ><img src="img/home_gallery/large/img-home-example.jpg" data-interchange="[img/home_gallery/small/img-home-example.jpg, (default)], [img/home_gallery/medium/img-home-example.jpg, (small)], [img/home_gallery/large/img-home-example.jpg, (medium)]"></a></li>
                          <li><a href="#" ><img src="img/home_gallery/large/img-home-example.jpg" data-interchange="[img/home_gallery/small/img-home-example.jpg, (default)], [img/home_gallery/medium/img-home-example.jpg, (small)], [img/home_gallery/large/img-home-example.jpg, (medium)]"></a></li>
                          <li><a href="#" ><img src="img/home_gallery/large/img-home-example.jpg" data-interchange="[img/home_gallery/small/img-home-example.jpg, (default)], [img/home_gallery/medium/img-home-example.jpg, (small)], [img/home_gallery/large/img-home-example.jpg, (medium)]"></a></li>
                    </ul>
            </div>
        
        </div>
	</div>
    
    
    <!-- Slider Modals -->
    <div id="Featured-Product" class="home-modal">
        <div class="row">
                
                <div class="small-12 large-5 columns featured-title">
                    <h1><strong>TREND</strong> REPORT</h1>
                </div>
                
                <div class="small-12 large-7 columns text-center">
                    <h2><i>Shark Tank Sale</i></h2>
                    <span class="show-for-dektop-only">ENDS MAY 24TH</span>
                </div>
                
                <div class="row collapse featured-descripcion show-for-mobile">
                    <a href="#" class="small-image-video"><img src="http://placehold.it/80x80"></a>
                    <span>ENDS MAY 24TH</span><br>
                    AS FEATURED ON<br>
                    abc's <strong>SHARK TANK</strong>
                </div>
  
                <div class="row collapse show-for-mobile">
                    <div class="small-6 columns">
                        <img src="http://placehold.it/80x80">
                    </div>
                    <div class="small-6 columns text-center">
                        <span class="big-price">$50</span><br>
                        <span class="small-price">$30</span><br>
                        <a href="#" class="buy-now">BUY NOW</a>
                    </div>
                </div>
                
                <div class="large-12 columns show-for-dektop-only text-center">
                    <a href="#"><img src="http://placehold.it/390x220" class="bigger-video"></a>
                </div>
                
                <div class="large-12 columns show-for-dektop-only text-center">
                    <ul id="Featured-Carousel"> 
                        <li><img src="http://placehold.it/160x90"></li>
                        <li><img src="http://placehold.it/160x90"></li>
                        <li><img src="http://placehold.it/160x90"></li>
                        <li><img src="http://placehold.it/160x90"></li>
                        <li><img src="http://placehold.it/160x90"></li>
                        <li><img src="http://placehold.it/160x90"></li>
                    </ul>
                </div>
                
                
        </div>
    </div>
    <!-- /Slider Modals -->

	
    <?php require_once('inc/footer.php'); ?>
    
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <script src="js/foundation/foundation.interchange.js"></script>
  <script src="js/foundation/foundation.orbit.js"></script>
  <script src="source/jquery.fancybox.pack.js?v=2.1.5"></script>
  <script src="js/jquery.flexisel.js"></script>
  
  <script>
  	$(document).foundation();
		
	/*** Comment this lines to disable the popup ***/
	$.fancybox.open({
		href : '#Featured-Product',
		type : 'inline',
		padding : 5
	});
	
	$(window).load(function() {
	$("#Featured-Carousel").flexisel({
        enableResponsiveBreakpoints: false,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 3
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 3
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });
	});
				
  </script>
</body>
</html>
