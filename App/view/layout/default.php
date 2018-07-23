<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo isset($title_for_layout)?$title_for_layout : 'Blog Alaska' ; ?></title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by ONANA Sinclaire | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
   <link href="<?= 'http://'.BASE_URL ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	&nbsp;
  <link href="<?= 'http://'.BASE_URL ?>/vendor/bootstrap2/css/bootstrap.min.css" rel="stylesheet">
		  
	 <!-- Custom fonts for this template -->
	 <link href="<?= 'http://'.BASE_URL ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	 <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	 <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

&nbsp;<link rel="stylesheet" href="<?= 'http://'.BASE_URL ?>/css3/zerogrid.css">

	<link rel="stylesheet" href="<?= 'http://'.BASE_URL ?>/css3/style.css">
    <link rel="stylesheet" href="<?= 'http://'.BASE_URL ?>/css3/responsive.css">
	<link rel="stylesheet" href="<?= 'http://'.BASE_URL ?>/css3/responsiveslides.css" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images3/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="./js3/html5../js3"></script>
		<script src="./js3/css3-mediaqueries../js3"></script>
	<![endif]-->
	
	<link href="<?= 'http://'.BASE_URL ?>/images3/favicon.png" rel='icon' type='image/x-icon'/>
	
 <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.tipsy.js"></script>
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.tweetable.js"></script>        
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.nivo.slider.pack.js"></script>  
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.flexslider.min.js"></script>
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.cycle.min.js"></script>  
        

	<script src="<?= 'http://'.BASE_URL ?>/js3/jquery.min.js"></script>
	<script src="<?= 'http://'.BASE_URL ?>/js3/responsiveslides.js"></script>
	<script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        maxwidth: 962,
        namespace: "centered-btns"
      });
    });
  </script>
    
</head>
<body>
<!--------------Header--------------->
<header> 
	<div id="logo"><a href=""><img src="<?= 'http://'.BASE_URL ?>/images3/logo.png"/></a></div>
	
	<nav>
		<ul>
			<li><a href="<?php echo Router::link('billets')?>">ACCUEIL</a></li>
			<li><a href="<?php echo Router::link('billets/liste') ?>">EPISODES</a></li>
			<li><a href="<?php echo Router::link('users/login') ?>">CONNEXION</a></li>
		</ul>
	</nav>
</header>

			
<!--------------Content--------------->
<section id="content">
	<div class="zerogrid block">	
		
		
		<div class="row block01">
			<div id="main-content" class="col-3-3">
				
				<p>
					    <?php  echo  $this->session->flash();?>
					</p>
                   
                    
                    	   <?php    echo $content_for_layout; ?>
					    
			</div>
			
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>

	<div class="wrapfooter">
	<p style="color : #ffffff">Copyright © <a href="https://openclassrooms.com/projects/creez-un-blog-pour-un-ecrivain"><strong>PROJET 3</strong></a> 2018 - Powered by <strong>FERNAND SINCLAIR</strong></p>
	</div>
	
</footer>

<script src="<?= 'http://'.BASE_URL ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= 'http://'.BASE_URL ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
          <script src="<?= 'http://'.BASE_URL ?>/js/clean-blog.min.js"></script>

    
    <script>    
    $('#btn').on('click', function(e) {
      $('#panel-body2').toggle(1000); //you can list several class names 
      e.preventDefault();
    });

    
</script>
        
</body></html>