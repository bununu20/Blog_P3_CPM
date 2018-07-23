<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="fr"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo isset($title_for_layout)?$title_for_layout : 'Blog Alaska' ; ?></title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?= 'http://'.BASE_URL ?>/css3/zerogrid.css">
	<link rel="stylesheet" href="<?= 'http://'.BASE_URL ?>/css3/style.css">
    <link rel="stylesheet" href="<?= 'http://'.BASE_URL ?>/css3/responsive.css">
	<link rel="stylesheet" href="<?= 'http://'.BASE_URL ?>/css3/responsiveslides.css" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/<?= 'http://'.BASE_URL ?>/images3/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="./js3/html5.js"></script>
		<script src="./js3/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href="<?= 'http://'.BASE_URL ?>/images3/favicon.png" rel='icon' type='image/x-icon'/>
	
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
			<li><a href="<?php echo Router::link('billets') ?>">ACCUEIL</a></li>
			<li><a href="<?php echo Router::link('billets/liste') ?>">EPISODES</a></li>
			<li><a href="<?php echo Router::link('users/login') ?>">CONNEXION</a></li>
			
		</ul>
	</nav>
</header>



<!--------------Slideshow--------------->

<section class="featured">
	<div class="rslides_container">
		<ul class="rslides" id="slider">
			<li><img src="<?= 'http://'.BASE_URL ?>/images3/slide1.jpg"/></li>
			<li><img src="<?= 'http://'.BASE_URL ?>/images3/slide2.jpg"/></li>
			<li><img src="<?= 'http://'.BASE_URL ?>/images3/slide3.jpg"/></li>
		</ul>
	</div>
</section>
			
<!--------------Content--------------->

<section id="content">
	<div class="zerogrid block">
<div class="row block02">
			<div class="col16">
				<section>
					<h1 style="color:#00afec;">LES DERNIERS EPISODES  <span></span></h1>
                        <h3 style="color : #2d9800">Un billet simple pour l'Alaska, <span>Un roman écrit par Jean F</span></h3>
				</section>
			</div>
		</div>
		<?php    
        			$dd = array();
        			foreach ($billets as $val) {
        				 $dd[] = $val;
        			}
        		
        		
        		?>
				

		<div class="row block01">
			<div class="col04">
				<section>
					<div class="heading">
						
						<h2><?= $dd[0]->title ?></h2>
					</div>
					<div class="content">
						<p><?= substr($dd[0]->content,0,150) ?></p>
						<p class="more"><a class="button" href="<?php echo Router::link('billets/view/'.$dd[0]->id);  ?>">Lire la suite</a></p>
					</div>
				</section>
			</div>
			<div class="col04">
				<section>
					<div class="heading">
						
						<h2><?= $dd[1]->title ?></h2>
					</div>
					<div class="content">
						<p><?= substr($dd[1]->content,0,150) ?></p>
						<p class="more"><a class="button" href="<?php echo Router::link('billets/view/'.$dd[1]->id);  ?>">Lire la suite</a></p>
					</div>
				</section>
			</div>
			<div class="col04">
				<section>
					<div class="heading">
						
						<h2><?= $dd[2]->title ?></h2>
					</div>
					<div class="content">
						<p><?= substr($dd[2]->content,0,150) ?></p>
						<p class="more"><a class="button" href="<?php echo Router::link('billets/view/'.$dd[2]->id);  ?>">Lire la suite</a></p>
					</div>
				</section>
			</div>
			<div class="col04">
				<section>
					<div class="heading">
						
						<h2><?= $dd[3]->title ?></h2>
					</div>
					<div class="content">
						<p><?= substr($dd[3]->content,0,150) ?></p>
						<p class="more"><a class="button" href="<?php echo Router::link('billets/view/'.$dd[3]->id);  ?>">Lire la suite</a></p>
					</div>
				</section>
			</div>
		</div>
		
		<!--<div class="row block02">
			<div class="col16">
				<section>
					<p>Free Html5 Templates created by <a href="https://www.zerotheme.com">ZEROTHEME</a>. You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files.</p>
				</section>
			</div>
		</div>-->
		
		<!--<div class="row block03">
			<div class="col-1-3">
				<section>
					<div class="heading">This is a heading</div>
					<div class="content">
						<img src="<?= 'http://'.BASE_URL ?>/images3/thumb1.jpg" />
						<p>Proin et lorem. Quisque odio. Ut gravida, pede sed convallis facilisis, magna dolor egestas dolor, non pulvinar metus magna in velit.
						<a class="more" href="single.html">Read more</a></p>
					</div>
				</section>
			</div>
			<div class="col-1-3">
				<section>
					<div class="heading">This is a heading</div>
					<div class="content">
						<img src="<?= 'http://'.BASE_URL ?>/images3/thumb2.jpg" />
						<p>Proin et lorem. Quisque odio. Ut gravida, pede sed convallis facilisis, magna dolor egestas dolor, non pulvinar metus magna in velit.
						<a class="more" href="single.html">Read more</a></p>
					</div>
				</section>
			</div>
			<div class="col-1-3">
				<section>
					<div class="heading">This is a heading</div>
					<div class="content">
						<img src="<?= 'http://'.BASE_URL ?>/images3/thumb3.jpg" />
						<p>Proin et lorem. Quisque odio. Ut gravida, pede sed convallis facilisis, magna dolor egestas dolor, non pulvinar metus magna in velit.
						<a class="more" href="single.html">Read more</a></p>
					</div>
				</section>
			</div>
		</div>-->
	</div>
</section>
<!--------------Footer--------------->


<footer>

	<div class="wrapfooter">
	<p style="color : #ffffff">Copyright © <a href="https://openclassrooms.com/projects/creez-un-blog-pour-un-ecrivain"><strong>PROJET 3</strong></a> 2018 - Powered by <strong>FERNAND SINCLAIR</strong></p>
	</div>
	<!--<div class="shareicons"><ul style="display: inline;">
				<li><a href="#"><img src="<?= 'http://'.BASE_URL ?>/images3/Active-RSS-icon.png" title="RSS"/></a></li>
				<li><a href="#"><img src="<?= 'http://'.BASE_URL ?>/images3/Active-Digg-icon.png" title="Digg"/></a></li>
				<li><a href="#"><img src="<?= 'http://'.BASE_URL ?>/images3/Active-Facebook-icon.png" title="Facebook"/></a></li>
				<li><a href="#"><img src="<?= 'http://'.BASE_URL ?>/images3/Active-Google-plus-icon.png" title="Google+"/></a></li>
				<li><a href="#"><img src="<?= 'http://'.BASE_URL ?>/images3/Active-Twitter-icon.png" title="Twitter"/></a></li>
				<li><a href="#"><img src="<?= 'http://'.BASE_URL ?>/images3/Active-Tumblr-icon.png" title="Tumblr"/></a></li>
				<li><a href="#"><img src="<?= 'http://'.BASE_URL ?>/images3/Active-StumbleUpon-icon.png" title="Stumb"/></a></li>
				<li><a href="#"><img src="<?= 'http://'.BASE_URL ?>/images3/Active-Pinterest-icon.png" title="Pinterest"/></a></li>
			</ul>
			</div>-->
</footer>

</body></html>