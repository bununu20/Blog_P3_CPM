<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html  lang="fr-FR">
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        
        <title><?php echo isset($title_for_layout)?$title_for_layout : 'Blog Alaska' ; ?></title>
        
         <!-- Bootstrap core CSS -->
		    <link href="<?= 'http://'.BASE_URL ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		   
		    <!-- Bootstrap core CSS -->
		    <link href="<?= 'http://'.BASE_URL ?>/vendor/bootstrap2/css/bootstrap.min.css" rel="stylesheet">
		  
		    <!-- Custom fonts for this template -->
		    <link href="<?= 'http://'.BASE_URL ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    	<!-- Custom styles for this template -->
        
        
        
        
        <link rel="stylesheet" type="text/css" media="all" href="<?= 'http://'.BASE_URL ?>/style.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 960px)" href="<?= 'http://'.BASE_URL ?>/css/lessthen800.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="<?= 'http://'.BASE_URL ?>/css/lessthen600.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" href="<?= 'http://'.BASE_URL ?>/css/lessthen480.css" />
                                   
        <!-- CUSTOM STYLE -->                                                                        
        <link rel="stylesheet" type="text/css" media="all" href="<?= 'http://'.BASE_URL ?>/css/custom-style.css" />
        
        <!-- [favicon] begin -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= 'http://'.BASE_URL ?>/favicon.ico" />
        <link rel="icon" type="image/x-icon" href="<?= 'http://'.BASE_URL ?>/favicon.ico" />
        <!-- [favicon] end -->  
        
        <!-- MAIN FONT STYLE -->  
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz%3A400&amp;subset=latin%2Ccyrillic%2Cgreek" type="text/css" media="all" />      
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans" type="text/css" media="all" />    
	    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald" type="text/css" media="all" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz%3A200%2C400" type="text/css" media="all" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed%3A300%7CPlayfair+Display%3A400italic" type="text/css" media="all" />
        <!-- END MAIN FONT STYLE -->  
        
        <link rel="stylesheet" id="prettyPhoto-css" href="<?= 'http://'.BASE_URL ?>/css/prettyPhoto.css" type="text/css" media="all" />
        <link rel="stylesheet" id="jquery-tipsy-css" href="<?= 'http://'.BASE_URL ?>/css/tipsy.css" type="text/css" media="all" />
        
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.tipsy.js"></script>
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.tweetable.js"></script>        
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.nivo.slider.pack.js"></script>  
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.flexslider.min.js"></script>
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.cycle.min.js"></script>  
        
        <!-- for accordion slider in staff page -->
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.hrzAccordion.js"></script>  
        
        <!-- for filterable effect in gallery and portfolio filterable page -->
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.quicksand.js"></script>  
        
        <!-- for portfolio slider -->
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.jcarousel.min.js"></script> 
        
        <!-- for the contact page -->
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/contact.js"></script>  
        
        <!-- SLIDER ELASTIC -->                                                               
        <link rel="stylesheet" id="slider-elastic-css" href="<?= 'http://'.BASE_URL ?>/css/slider-elastic.css" type="text/css" media="all" />
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.eislideshow.js"></script>
        
        <!-- SLIDER CYCLE -->                                                               
        <link rel="stylesheet" id="slider-cycle-css" href="<?= 'http://'.BASE_URL ?>/css/slider-cycle.css" type="text/css" media="all" />
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.slides.min.js"></script>
        
        <!-- SLIDER THUMBNAILS -->                                                               
        <link rel="stylesheet" id="slider-thumbnails-css" href="<?= 'http://'.BASE_URL ?>/css/slider-thumbnails.css" type="text/css" media="all" />
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.aw-showcase.js"></script>
        
        <!-- SLIDER FLASH -->                                                               
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/swfobject.js"></script>      
        
        <!-- SLIDER ELEGANT -->                                                               
        <link rel="stylesheet" id="slider-elegant-css" href="<?= 'http://'.BASE_URL ?>/css/slider-elegant.css" type="text/css" media="all" />
        
        <!-- SLIDER NIVO -->                                                               
        <link rel="stylesheet" id="slider-nivo-css" href="<?= 'http://'.BASE_URL ?>/css/slider-nivo.css" type="text/css" media="all" />     
        
        <!-- CUSTOM JAVASCRIPT -->                           
        <script type="text/javascript" src="<?= 'http://'.BASE_URL ?>/js/jquery.custom.js"></script>
    </head>
    
    <body class="home image-sphere-style responsive">
    
        <!-- START SHADOW WRAPPER -->
        <div class="shadowBg group">
            
            <!-- START WRAPPER -->
            <div class="wrapper group">
                
               
                <!-- END TOPBAR -->    
                <!-- START HEADER -->
                <div id="header" class="group">
                
                    <!-- START LOGO -->
                      <div id="logo" class="group">
                        <a href="index.html" title="Diverso"> 
                        <img src="<?= 'http://'.BASE_URL ?>/images/logo.png" alt="Logo Diverso" />
                        </a>              
                    </div>
                    <!-- END LOGO -->   
                    
                    <!-- START NAV -->
                    <div id="nav" class="group">
                        <ul class="level-1 white">
                            <li class="home">
                                <a href="<?php echo '/'?>">ACCUEIL</a>
                                
                            </li>
                            <li class="folder">
                                <a href="<?php echo Router::link('billets/liste') ?>">Episodes</a>
                                
                            </li>
                            
                            <li class="burst">
                                <a href="<?php echo Router::link('users/login') ?>">CONNEXION</a>
                             </li>
                            
                            
                        </ul>
                    </div>
                    <!-- END NAV -->   
                </div>
                
               
                 
                <div id="content" class="gradient layout-sidebar-no group">
                     <p>
					    <?php  echo  $this->session->flash();?>
					</p>
                   
                    
                    <!-- START CONTENT -->
                    	   <?php    echo $content_for_layout; ?>
					    
                    <!-- END CONTENT -->
                    
                </div>
                <!-- END CONTENT -->
        

                <!-- START TWITTER -->
                <div id="twitter-slider" class="group">
                    <div class="tweets-list"></div>
                    <div class="bird"></div>
                </div>
                <!-- END TWITTER -->   
                
                <!-- START FOOTER -->
                
                <!-- END FOOTER -->
                           
                <!-- START COPYRIGHT -->
                <div id="copyright" class="group two-columns">
                    <div class="inner group">
                        <p class="left">Copyright <a href="#"><strong>PROJET 3</strong></a> 2018 - Powered by <a href="#"><strong>ONAS SINCLAIR</strong></a></p>
                        <p class="right">
                            <a href="#" class="socials facebook" title="Facebook">facebook</a>
                            <a href="#" class="socials twitter" title="Twitter">twitter</a>
                            <a href="#" class="socials linkedin" title="Linkedin">linkedin</a>
                            <a href="#" class="socials mail" title="Mail">mail</a>    
                        </p>
                    </div>
                    
                </div>
                <!-- END COPYRIGHT -->  
                   
            </div>
            <!-- END WRAPPER --> 
            	    
        </div>
        <!-- END SHADOW -->       
        
          <script src="<?= 'http://'.BASE_URL ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= 'http://'.BASE_URL ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
          <script src="<?= 'http://'.BASE_URL ?>/js/clean-blog.min.js"></script>

    
    <script>    
    $('#btn').on('click', function(e) {
      $('#panel-body2').toggle(1000); //you can list several class names 
      e.preventDefault();
    });

    
</script>
        
    </body>
</html>