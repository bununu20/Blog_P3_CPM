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
        
        <link rel="stylesheet" type="text/css" media="all" href="<?= 'http://'.BASE_URL ?>/style.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 960px)" href="<?= 'http://'.BASE_URL ?>/css/lessthen800.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="<?= 'http://'.BASE_URL ?>/css/lessthen600.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" href="<?= 'http://'.BASE_URL ?>/css/lessthen480.css" />
                                   
        <!-- CUSTOM STYLE -->                                                                        
        <link rel="stylesheet" type="text/css" media="all" href="<?= 'http://'.BASE_URL ?>/css/custom-style.css" />
        
        <!-- [favicon] begin -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
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
                        <a href="#" title="Diverso"> 
                        <img src="<?= 'http://'.BASE_URL ?>/images/logo.png" alt="Logo Diverso" />
                        </a>              
                    </div>
                    <!-- END LOGO -->   
                    
                    <!-- START NAV -->
                    <div id="nav" class="group">
                        <ul class="level-1 white">
                            <li class="home">
                                <a href="<?php echo Router::link('billets')?>">ACCUEIL</a>
                                
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
                <!-- END HEADER -->        
        <?php    
                    $dd = array();
                    foreach ($billets as $val) {
                         $dd[] = $val;
                    }
                
                
                ?>
                <!-- START SLIDER -->
                <div id="slider" class="elegant group inner">
                    <ul class="group">
                        <li class="first slide-1 group image-content-type">
                            <div class="slider-featured group"><img src="<?= 'http://'.BASE_URL ?>/images/slider/elegant/001.jpg" width="960" height="338" alt="interior design" /></div>
                            <div class="slider-caption caption-right">
                                <div class="text">
                                    <!-- TITLE -->
                                    <h2><?= $dd[0]->title ?> </h2>
                                    <!-- TEXT -->
                                    <p> <?= substr($dd[0]->content,0,150) ?> </p>
                                    <p><span class="special-font" style="font-size:24px;">
                                </div>
                            </div>
                        </li>
                        <li class="slide-2 group image-content-type">
                            <div class="slider-featured group"><img src="<?= 'http://'.BASE_URL ?>/images/slider/elegant/002.jpg" width="960" height="338" alt="Luxury gold" /></div>
                            <div class="slider-caption caption-right">
                                <div class="text">
                                    <!-- TITLE -->
                                    <h2> <?= $dd[1]->title ?> </h2>
                                    <!-- TEXT -->
                                    <p> <?= substr($dd[1]->content,0,150) ?> </p>
                                </div>
                            </div>
                        </li>
                        <li class="slide-3 group image-content-type">
                            <div class="slider-featured group"><img src="<?= 'http://'.BASE_URL ?>/images/slider/elegant/003.jpg" width="960" height="338" alt="Beauty SPA" /></div>
                            <div class="slider-caption caption-right">
                                <div class="text">
                                    <!-- TITLE -->
                                    <h2><?= $dd[2]->title ?></h2>
                                    <!-- TEXT -->
                                    <p> <?= substr($dd[2]->content,0,150) ?> </p>
                                   
                                </div>
                            </div>
                        </li>
                        <li class="last slide-4 group imageimage-content-type">
                            <div class="slider-featured group"><img src="<?= 'http://'.BASE_URL ?>/images/slider/elegant/004.jpg" width="960" height="338" alt="Healthy Food" /></div>
                            <div class="slider-caption caption-right">
                                <div class="text">
                                    <!-- TITLE -->
                                    <h2><?= $dd[3]->title ?></h2>
                                    <!-- TEXT -->
                                    <p><?= substr($dd[3]->content,0,150) ?>  </p>
                                    
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>                       
                
                <!-- JS SCRIPT --> 
                <script type="text/javascript">  
                    // edit here
                    var     slider_elegant_easing = null,
                            slider_elegant_fx = 'fade',
                            slider_elegant_speed = 500,
                            slider_elegant_timeout = 5000,
                            slider_elegant_caption_speed = 500; 
                    // end editing    
                            
                    $("#slider ul").cycle({                                                    
                        easing  : slider_elegant_easing,
                        fx      : slider_elegant_fx,
                        speed   : slider_elegant_speed,
                        timeout : slider_elegant_timeout,
                        before  : function(currSlideElement, nextSlideElement, options, forwardFlag) {
                            var width = parseInt( $('.slider-caption', currSlideElement).outerWidth() );
                            var height = parseInt( $('.slider-caption', currSlideElement).outerHeight() );
                            
                            $('.caption-top', currSlideElement).animate({top:height*-1}, slider_elegant_caption_speed);
                            $('.caption-bottom', currSlideElement).animate({bottom:height*-1}, slider_elegant_caption_speed);
                            $('.caption-left', currSlideElement).animate({left:width*-1}, slider_elegant_caption_speed);
                            $('.caption-right', currSlideElement).animate({right:width*-1}, slider_elegant_caption_speed);
                        },
                        after   : function(currSlideElement, nextSlideElement, options, forwardFlag) {
                            $('.caption-top', nextSlideElement).animate({top:0}, slider_elegant_caption_speed);
                            $('.caption-bottom', nextSlideElement).animate({bottom:0}, slider_elegant_caption_speed);
                            $('.caption-left', nextSlideElement).animate({left:0}, slider_elegant_caption_speed);
                            $('.caption-right', nextSlideElement).animate({right:0}, slider_elegant_caption_speed);
                        }
                    });   
                </script>
                <!-- END #slider -->    
                 
                <div id="content" class="gradient layout-sidebar-no group">
                    
                    <!-- START SLOGAN -->
                    <div id="slogan" class="inner">
                        <h1 style="color:#4bafec;">UN BILLET SIMPLE POUR L'ALASKA</h1>
                        <h3>Un roman écrit par Jean Forteroche</h3><br />
                        <h2 style="color: #cc9e5c;">LES DERNIERS EPISODES MIS EN LIGNE</h2>
                    </div>    
                    <!-- END SLOGAN -->
                    
                    <!-- START CONTENT -->
                         <div id="primary" class="hentry group wrapper-content" role="main">
                            <?php foreach ($billets as $k => $v) {?>
                                <div class="one-fourth">
                                  <a href=" <?php echo Router::link('billets/view/'.$v->id);  ?>">  
                                      <h3><?php echo $v->title ?></h3></a>
                                         <p>
                                         <?php echo substr( $v->content, 0 ,50).'...' ?>
                                   <a href=" <?php echo Router::link('billets/view/'.$v->id);  ?>"> lire la suite  &rarr;</a>
                                         </p>
                                         
                                </div>
                                <?php } ?>
                            </div>
                        
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
                        <p class="left">Copyright <a href="https://openclassrooms.com/projects/creez-un-blog-pour-un-ecrivain"><strong>PROJET 3</strong></a> 2018 - Powered by <strong>FERNAND SINCLAIR</strong></p>
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
        
    </body>
</html>