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
        <div class="small-12 large-9 large-centered columns hashtag">
				
			 <div id="social-stream"></div>

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
  
  	<link rel="stylesheet" type="text/css" href="css/dcsns_wall.css" media="all" />
	<script type="text/javascript" src="js/jquery.social.stream.wall.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.social.stream.1.5.2.js"></script>

  <script type="text/javascript">
  $(document).ready(function($){
	$('#social-stream').dcSocialStream({
		feeds: {
			twitter: {
				id: 'stellavallenyc'
			},
			facebook: {
				id: '113196925361707'
			},
			vimeo: {
				id: '14490516'
			},
			pinterest: {
				id: 'stellavalle'
			}
		},
		rotate: {
			delay: 0
		},
		twitterId: 'stellavallenyc',
		control: false,
		filter: true,
		wall: true,
		cache: false,
		max: 'limit',
		limit: 30,
		iconPath: 'images/dcsns-dark/',
		imagePath: 'images/dcsns-dark/'
	});
});
  </script>
  
  <script>
  	$(document).foundation();
  </script>
  
</body>
</html>
