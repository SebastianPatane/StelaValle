	<!-- Header -->
 	 <header>
     
     <div class="container">
     	<div class="position-fixed">

  	<!-- Shopping Cart -->
	<div class="row">
   	  	<!-- div class="small-12 large-7 columns free-shipping">
        		<strong><i>Free Shipping on orders over $100</i></strong>
        </div -->
        
      	<div class="small-12 large-12 columns hide">
            	<a href="#" class="shopping-cart view-cart">View Cart</a>  
            	<!-- a href="#" class="shopping-cart">Customer Service</a --> 
        </div>
    </div>
	<!-- /Shopping Cart -->
    
    
	<div class="row collapse">
		<div class="large-12 columns">

				<nav class="top-bar">
				  <ul class="title-area show-for-mobile">
				    <!-- Title Area -->
				    <li class="name">
				      <h1><a href="index.php"><img src="img/logo.gif" alt="Stella Valle"></a></h1>
				    </li>
				    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
				  </ul>

				  <section class="top-bar-section">
				    <!-- Left Nav Section -->
				    <ul class="left">
				      <li><a href="index.php" <?php if ($flag == "home"): echo 'class="current-section"'; endif; ?>>HOME</a></li>
                      <li class="divider"></li>
				      <li><a href="our-story.php" <?php if ($flag == "our-story"): echo 'class="current-section"'; endif; ?>>OUR STORY</a></li>
                      <li class="divider"></li>
				      <li class="has-dropdown"><a href="collections.php" <?php if ($flag == "collections"): echo 'class="current-section"'; endif; ?>>COLLECTIONS</a>
				        <ul class="dropdown" id="collections-menu">
				          <li><a href="collections.php">STELLA VALLE STRONG</a></li>
                          <li class="divider"></li>
				          <li><a href="collections.php">CELEBRATE SEASIDE</a></li>
                          <li class="divider"></li>
				          <li><a href="collections.php">CREATE YOURSELF</a></li>
                          <li class="divider"></li>
				          <li><a href="collections.php">PURSUIT OF NATURAL HAPPINESS</a></li>
				          <li class="divider"></li>
                          <li><a href="collections.php">NONNINA DECO</a></li>
				        </ul>
				      </li>
                      <li class="divider"></li>
                      <li class="has-dropdown"><a href="#" <?php if ($flag == "shop"): echo 'class="current-section"'; endif; ?>>SHOP</a>
				        <ul class="dropdown">
				          <li><a href="shop.php">ALL PRODUCTS</a></li>
                          <li class="divider"></li>
				          <li><a href="shop.php">NECKLACES</a></li>
                          <li class="divider"></li>
				          <li><a href="shop.php">BRACELETS</a></li>
				          <li class="divider"></li>
                          <li><a href="shop.php">EARRINGS</a></li>
				          <li class="divider"></li>
                          <li><a href="shop.php">RINGS</a></li>
                          <li class="divider"></li>
                          <li><a href="shop.php">SCREWS</a></li>
				        </ul>
				      </li>
                      
                      <li class="divider show-for-dektop-only"></li>
                      <li class="show-for-dektop-only desktop-logo"><a href="index.php"><img src="img/logo-desktop.png" alt="Stella Valle"></a></li>
                      
                      <li class="divider"></li>
                      <li><a href="create.php" <?php if ($flag == "create"): echo 'class="current-section"'; endif; ?>>CREATE</a> </li>
                      <li class="divider"></li>
                      <li class="has-dropdown"><a href="#" <?php if ($flag == "stellavalle"): echo 'class="current-section"'; endif; ?>>#STELLAVALLE</a>
                      	<ul class="dropdown">
				          <li><a href="hashtag.php">SOCIAL</a></li>
                          <li class="divider"></li>
				          <li><a href="blog.php">BLOG</a></li>
				        </ul>
                      </li>
                      <li class="divider"></li>
                      <li><a href="press.php" <?php if ($flag == "press"): echo 'class="current-section"'; endif; ?>>PRESS</a></li>
                      <li class="divider"></li>
                      <li><a href="stockist.php" <?php if ($flag == "stockist"): echo 'class="current-section"'; endif; ?>>STOCKISTS</a></li>
				    </ul>
				  </section>
				</nav>
    
      </div>
    </div>
    
    
    
    	</div>
    </div>
    </header>