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
  <link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
  
  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	
    <?php require_once('inc/header.php'); ?>
	
    
    <div class="row collapse our-story">
          <div class="large-12 columns">
              <h1>SHOP Necklaces</h1>
          </div>
    </div>
    
    <div class="row shop collapse spacing-fix show-for-dektop-only">
          <div class="large-12 columns text-center">
              <h1>NECKLACES</h1>
          </div>
    </div>
    
	<div class="row">
		<div class="large-11 large-centered columns">
                
                <div id="products">                      
                      <div class="item text-center"><a href="shop-detail.php"><img src="img/shop/example01.jpg" onmouseover="this.src='img/shop/example01-hover.jpg'" onmouseout="this.src='img/shop/example01.jpg'"><br>CONQUER $65</a></div>
                      <div class="item text-center"><a href="shop-detail.php"><img src="img/shop/example02.jpg" onmouseover="this.src='img/shop/example02-hover.jpg'" onmouseout="this.src='img/shop/example02.jpg'"><br>CONQUER $65</a></div>
                      <div class="item text-center"><a href="shop-detail.php"><img src="img/shop/example03.jpg" onmouseover="this.src='img/shop/example03-hover.jpg'" onmouseout="this.src='img/shop/example03.jpg'"><br>CONQUER $65</a></div>
                      <div class="item text-center"><a href="shop-detail.php"><img src="img/shop/example04.jpg" onmouseover="this.src='img/shop/example04-hover.jpg'" onmouseout="this.src='img/shop/example04.jpg'"><br>CONQUER $65</a></div>
                      <div class="item text-center"><a href="shop-detail.php"><img src="img/shop/example01.jpg" onmouseover="this.src='img/shop/example01-hover.jpg'" onmouseout="this.src='img/shop/example01.jpg'"><br>CONQUER $65</a></div>
                      <div class="item text-center"><a href="shop-detail.php"><img src="img/shop/example02.jpg" onmouseover="this.src='img/shop/example02-hover.jpg'" onmouseout="this.src='img/shop/example02.jpg'"><br>CONQUER $65</a></div>
                      <div class="item text-center"><a href="shop-detail.php"><img src="img/shop/example03.jpg" onmouseover="this.src='img/shop/example03-hover.jpg'" onmouseout="this.src='img/shop/example03.jpg'"><br>CONQUER $65</a></div>
                      <div class="item text-center"><a href="shop-detail.php"><img src="img/shop/example04.jpg" onmouseover="this.src='img/shop/example04-hover.jpg'" onmouseout="this.src='img/shop/example04.jpg'"><br>CONQUER $65</a></div>
                      <div class="item text-center"><a href="shop-detail.php"><img src="img/shop/example01.jpg" onmouseover="this.src='img/shop/example01-hover.jpg'" onmouseout="this.src='img/shop/example01.jpg'"><br>CONQUER $65</a></div>
                      <div class="item text-center"><a href="shop-detail.php"><img src="img/shop/example02.jpg" onmouseover="this.src='img/shop/example02-hover.jpg'" onmouseout="this.src='img/shop/example02.jpg'"><br>CONQUER $65</a></div>
                      <div class="item text-center"><a href="shop-detail.php"><img src="img/shop/example03.jpg" onmouseover="this.src='img/shop/example03-hover.jpg'" onmouseout="this.src='img/shop/example03.jpg'"><br>CONQUER $65</a></div>
                      <div class="item text-center"><a href="shop-detail.php"><img src="img/shop/example04.jpg" onmouseover="this.src='img/shop/example04-hover.jpg'" onmouseout="this.src='img/shop/example04.jpg'"><br>CONQUER $65</a></div>
                </div>
        
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
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  
  
  <script>
  	$(document).foundation();
	
	/*** Masonry ***/
	$(document).ready( function() {
		var container = document.querySelector('#products');
		var msnry;
		// initialize Masonry after all images have loaded
		imagesLoaded( container, function() {
		  msnry = new Masonry( container, {
			  // options
			  itemSelector: '.item',
			  "gutter": 30
			});
		});
	});

	/*var container = document.querySelector('#products');
	var msnry = new Masonry( container, {
	  // options
	  columnWidth: 160,
	  itemSelector: '.item'
	});*/

  </script>
  
</body>
</html>
