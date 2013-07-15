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
                    	<div id="big-image">
                        	<img src="http://placehold.it/410x390">
                        </div>
                    </div>
                    
                    <div class="small-12 large-4 columns">
                        <ul id="images-shop-thumbails">
                            <li><img src="http://placehold.it/410x390"></li>
							<li><img src="http://placehold.it/410x390"></li>
                            <li><img src="http://placehold.it/410x390"></li>
                        </ul>
                    </div>
                    
                </div>
        </div>
        
        <div class="small-12 large-6 columns shop-detail-padding">
                
                <div class="row collapse row-price show-for-mobile">
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
                
                <form id="shop" class="custom">
                      <div class="row collapse">
                      	<div class="small-12 large-8 columns shop-forms-spacing">
                          <select class="medium choose">
                            <option selected>CHOOSE FINISH</option>
                            <option value="0">This is another option</option>
                            <option value="0">This is another option too</option>
                            <option value="0">Look, a third option</option>
                          </select>
                      	</div>
                      	
                        <div class="small-12 large-4 columns">
                          <select class="medium quantity">
                            <option selected>Qty.</option>
                            <option value="0">1</option>
                            <option value="0">2</option>
                            <option value="0">3</option>
                          </select>
                      	</div>
                      </div>
                      
                      <a href="#" class="large button expand add-cart">ADD TO CART</a>                    
                      
                      <div class="row collapse">
                      	  
                          <div class="large-12 columns">
                          		<strong><em>Review it, Love it, Share it!</em></strong>
                          </div>
                      	  	
                          <div class="large-12 columns">	
                              <a href="#" class="read-reviews">Read Reviews</a>

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
    
  
  <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
  
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>

  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script> 
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script>
  	$(document).foundation();
	
	$(document).ready(function () {
            $("#images-shop-thumbails img").click(function () {
                var changeSrc = $(this).attr("src");
                var changeAlt = $(this).attr("alt");
				$("#big-image img").fadeOut("fast");
                $("#big-image img").attr("src", changeSrc);
				$("#big-image img").fadeIn("fast");
                var changeAlt = $(this).attr("alt");
            });
	}); 
  </script>
  
</body>
</html>