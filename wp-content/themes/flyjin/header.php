<!doctype html>

<html <?php language_attributes(); ?> class="no-js">

	<head>
    
		<meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
		<title>
			<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>
		</title>
		
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//www.google-analytics.com" rel="dns-prefetch">
       
       
       <!-- Pour créer le favicon et touchicon (remplacer les images) -->
        <link href="<?php bloginfo('template_url'); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php bloginfo('template_url'); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

       <!-- Pour récupérer les feuilles de styles et scripts injectés par function.php -->
        <?php wp_head(); ?>
        
	</head>
    
	<body class="overHide">
	<section class="content" id="fullpage">
	<?php if(is_home() ) { ?>
	<section class="hero section">
			<div class="content-window" >
				<div data-type="background" data-speed="2">
					<div class="videoContainer"> <iframe id="bg" src="//www.youtube.com/embed/mDkB5Fel9FE?autoplay=1&amp;controls=0&amp;loop=1&amp;showinfo=0&amp;modestbranding=1&amp;disablekb=1&amp;enablejsapi=1&amp;playlist=mDkB5Fel9FE" width='1920' height='1080' frameborder="0"></iframe>

					</div>
				</div>
			</div>
		
		</section>
			<?php } ?>
		<section class="page-1 bgBlanc section" >
			
			<div class="headerContainer">
				<header class="header">
					<div class='bgRouge'><a href='<?php echo home_url(); ?>'> <img src='<?php bloginfo("template_url"); ?>/img/logoHead.png' alt='logo' id='logoMenu'/></a></div>
					<nav id='menuNav'>
						<ul>
							<li><a class='menuA' href='contact.html'>Contact</a></li>
							<li><a class='menuA' href='videos.html'>Videos</a></li>
							<li><a class='menuA' href='photos.html'>Photos</a></li>
							<li><a class='menuA' href='events.html'>Events</a></li>
							<li><a class='menuA' href='menu.html'>Menu</a></li>
						</ul>
					</nav>
				</header>
	</div>



        