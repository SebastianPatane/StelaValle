<?php
$flag = "stellavalle"
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
	
    <div class="row collapse our-story">
          <div class="large-12 columns">
              <h1>#STELLAVALLE Social</h1>
          </div>
    </div>
    
	<div class="row spacing-fix">
        <div class="small-12 large-11 large-centered columns hashtag">
				
				<div id="content" ><!-- Start Content -->
				
				<div id="cloud-masonry-wrapper" class="cloud-masonry-361">
					<div id="cloud-header">
						<div id="cloud-title">#StellaValle</div>
					</div>
					<div id="cloud-container">
						<div id="cloud-content"></div>
					</div>
				</div>
				
				</div><!-- End Content -->

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
  
  <script src='http://storesdev.zindigo.com/js/76/jquery.social.stream.1.5.1.js'></script>
  <link href="http://storesdev.zindigo.com/css/76/dcsns_wall.css" rel="stylesheet" />
  <script src='http://storesdev.zindigo.com/js/76/jquery.social.stream.wall.1.3.js'></script>
  <script type="text/javascript">
  $(document).ready(function () {
      //rsContainer('cloud');
      $('#cloud-content').dcSocialStream({
          feeds: {
              twitter: { id: 'nicoleromanonyc' },
              facebook: { id: '101534458200',
              out: 'intro,thumb,text,user,share' },
              pinterest: { id: 'nicoleromanonyc' },
              instagram: { id: '!193019709', 
              clientId: '2c0d6f9599634fc4a116b7b581cc05d6',
              accessToken: '295249637.2c0d6f9.a51f8ca14d504234b8d718e9aa72cd14',
              redirectUrl: 'https://zindigo.com' }
              }, 		
              
              rotate: { delay: 0 },
              twitterId: 'nicoleromanonyc',
              control: false,
              filter: true,
              wall: true,
              cache: false,
              max: 'limit',
              limit: 10,
              iconPath: 'http://storesdev.zindigo.com/images/page/76/dcsns-dark/',
              imagePath: 'http://storesdev.zindigo.com/images/page/76/dcsns-dark/'});
  });
  </script>
  
  <script>
  	$(document).foundation();
  </script>
  
</body>
</html>
