<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tracey Heckler</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/alt4.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="header">
        	<!--<div class="top-banner"></div>-->
        	<div class="navbar navbar-top container">
				<a onclick="showMobileNavbar();" class="btn-navbar btn-navbar-navtoggle btn-flyout-trigger" href="#">
					<span class="icon-bar btn-flyout-trigger"></span>
					<span class="icon-bar btn-flyout-trigger"></span>
					<span class="icon-bar btn-flyout-trigger"></span>
				</a>
				<h1 class="brand" id="logo" onclick="$('.hide').removeClass('show'); $('#Home').addClass('show');"><div>Tracey Heckler</div></h1>
			
				<nav id="nav-collapse-second" class="nav-collapse nav-collapse-top-nav hidden">
					<ul class="nav nav-pills top-nav hidden">
		        		<li><a href="#" onclick="$('.hide').removeClass('show'); $('#Home').addClass('show');">Home</a></li>
		        		<li><a href="#" onclick="$('.hide').removeClass('show'); $('#About').addClass('show');">About</a></li>
		        		<li><a href="#" onclick="$('.hide').removeClass('show'); $('#Contact').addClass('show');">Contact</a></li>
						<li><a href="#" onclick="$('.hide').removeClass('show'); $('#Portfolio').addClass('show');">Projects</a></li>
					</ul>
				</nav>
			</div>
        	<div class="codeImg"></div>
	 		<div class="homeText">I'm a software engineer. What does that mean? It means I design and develop efficient, bug-free applications
		that serve a purpose.</div>
        </div>
 		<div class="page hide show" id="Home">
	 		<?php require('pages/home.php') ?>
	 	</div>
	 	<div class="page hide" id="About">
	 		<?php require('pages/about.php') ?>
	 	</div>
	 	<div class="page hide" id="Contact">
	 		<?php require('pages/contact.php') ?>
	 	</div>
	 	<div class="page hide" id="Portfolio">
	 		<?php require('pages/portfolio.php') ?>
	 	</div>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        
        <script>
        	function showMobileNavbar() {
        		var navbar = $('#nav-collapse-second');
        		if (navbar.hasClass('hidden')) {
        			navbar.removeClass('hidden').addClass('showing');
        			$(".icon-bar").first().addClass("top-x menu-open").next().addClass("bottom-x menu-open");
        		} else {
        			navbar.removeClass('showing').addClass('hidden');
        			$(".icon-bar").first().removeClass("top-x menu-open").next().removeClass("bottom-x menu-open");
        		}
        	}
        </script>
    </body>
</html>
