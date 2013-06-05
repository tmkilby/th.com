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
        <link rel="stylesheet" href="css/main.css">
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
        	<div id="myName">Tracey Heckler</div>
        	<ul>
        		<li><a href="#Home" onclick="$('.hide').removeClass('show'); $('#Home').addClass('show');">Home</a></li>
        		<li><a href="#About" onclick="$('.hide').removeClass('show'); $('#About').addClass('show');">About</a></li>
        		<li><a href="#Contact" onclick="$('.hide').removeClass('show'); $('#Contact').addClass('show');">Contact</a></li>
        		<li><a href="#Portfolio" onclick="$('.hide').removeClass('show'); $('#Portfolio').addClass('show');">Portfolio</a></li>
        	</ul>
        </div>
 		<div class="hide show" id="Home">
	 		<?php require('pages/home.php') ?>
	 	</div>
	 	<div class="hide" id="About">
	 		<?php require('pages/about.php') ?>
	 	</div>
	 	<div class="hide" id="Contact">
	 		<?php require('pages/contact.php') ?>
	 	</div>
	 	<div class="hide" id="Portfolio">
	 		<?php require('pages/portfolio.php') ?>
	 	</div>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
<!-- This HTML works with the current main.css and alt1.css -->