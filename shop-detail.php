<?php
$flag = "shop"
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
  
  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	
    <?php require_once('inc/header.php'); ?>
	
    
    <div class="row collapse our-story spacing-fix">
          <div class="large-12 columns">
              <h1>SHOP  Necklaces</h1>
          </div>
    </div>
    
	<div class="row shop-detail">
		
        <div class="small-12 large-6 columns">
                
                <div class="row collapse">
                
					<div class="small-12 large-8 columns">
                    	<div id="exposure"></div>
                    </div>
                    
                    <div class="small-12 large-4 columns">
                        <ul id="images-shop-detail">
                            <li><a href="http://placehold.it/360x360"><img src="http://placehold.it/110x110"></a></li>
							<li><a href="http://placehold.it/360x360"><img src="http://placehold.it/110x110"></a></li>
                            <li><a href="http://placehold.it/360x360"><img src="http://placehold.it/110x110"></a></li>
                        </ul>
                    </div>
                    
                </div>
        </div>
        
        <div class="small-12 large-6 columns shop-detail-padding">
                
                <div class="row collapse row-price show-for-small">
                	<div class="small-8 large-8 columns">CONQUER</div>
                    <div class="small-4 large-4 columns text-right"><span>$125</span></div>
                </div>
                
                <div class="product-description">
                	
                    <!-- Only for Desktop -->
                	<h1>PEACHY KEEN QUEEN NECKLACE WITH FRINGE</h1>
					<h2>*PURSUIT OF NATURAL HAPPINESS COLLECTION</h2>
                    <!-- /Only for Desktop -->
                    
                    <p>EFFORTLESS SHINE.<br>
                    14k Gold or Rhodium Plated<br>
                    26” Box Chain with Clasp<br>
                    Square Pendant is approximately 1.3” x 1.3”<br>
                    Swarovski Crystal zigzag pattern</p>
                    
                    <span>$125</span>
                    
                </div>
                
                <form class="custom">
                      <div class="row collapse">
                      	<div class="small-12 large-8 columns shop-forms-spacing">
                          <select id="customDropdown1" class="medium choose">
                            <option selected>CHOOSE FINISH</option>
                            <option>This is another option</option>
                            <option>This is another option too</option>
                            <option>Look, a third option</option>
                          </select>
                      	</div>
                      	
                        <div class="small-12 large-4 columns">
                          <select id="customDropdown1" class="medium quantity">
                            <option selected>Qty.</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                          </select>
                      	</div>
                      </div>
                      
                      <a href="#" class="large button expand add-cart">ADD TO CART</a>                    
                      
                      <div class="row collapse show-for-dektop-only">
                      	  
                          <div class="large-12 columns">
                          		<p><strong><em>Review it, Love it, Share it!</em></strong></p>
                          </div>
                      	  	
                          <div class="small-12 large-6 columns">	
                              <a href="#" class="read-reviews">Read Reviews</a>
                          </div>
                          
                          <div class="small-12 large-6 columns">
                          		<ul class="social-links">
                                  <li><a href="#" class="facebook">Facebook</a></li>
                                  <li><a href="#" class="instagram">Instagram</a></li>
                                  <li><a href="#" class="pinterest">Pinterest</a></li>
                                  <li><a href="#" class="twitter">Twitter</a></li>
                              	</ul>
                          </div>
                      </div>
                </form>


        </div>
        
	</div>
    

	<?php require_once('inc/footer.php'); ?>
    

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script> 
  <script src="js/jquery.exposure.js"></script> 
  
  <script>
  	$(document).foundation();
	
	/*** Carousel ***/
	$(function(){
		var gallery = $('#images-shop-detail');
		gallery.exposure({carouselControls : true,
			imageControls : true,
			pageSize : 5,
			slideshowControlsTarget : '#slideshow',
			onThumb : function(thumb) {
				var li = thumb.parents('li');				
				var fadeTo = li.hasClass($.exposure.activeLinkClass) ? 1 : 0.3;
				
				thumb.css({display : 'none', opacity : fadeTo}).stop().fadeIn(200);
				
				thumb.hover(function() { 
					thumb.fadeTo('fast',1); 
				}, function() { 
					li.not('.' + $.exposure.activeLinkClass).children('img').fadeTo('fast', 0.3);
				});
			},
			onImage : function(image, imageData, thumb) {
				// Fade out the previous image.
				image.siblings('.' + $.exposure.lastImageClass).stop().fadeOut(50, function() {
					$(this).remove();
				});
				
				// Fade in the current image.
				image.hide().stop().fadeIn(1000);
				
				if (gallery.showThumbs && thumb && thumb.length) {
					thumb.fadeTo('fast', 1).addClass($.exposure.selectedImageClass);
				}
			},
			onCarousel : function(firstImage, lastImage) {
				$('.' + $.exposure.thumbsClass + ' li').hide().children('img.' + $.exposure.selectedImageClass).stop().css('opacity', 0.3).removeClass($.exposure.selectedImageClass);
			},
			onSlideshowPlayed : function() {
				$('.' + $.exposure.pauseSlideshowClass).css('display','inline');
			}
		});
		
	});
  </script>
  
</body>
</html>
