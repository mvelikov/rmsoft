<?php 
define('BASE', 'http://rm-software.net');

 ?><!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7 oldie"><![endif]-->
<!--[if IE 8 ]><html class="ie8 oldie"><![endif]-->
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="RM Software is a start-up software company that develop great software systems and awesome mobile applications">
    <meta name="author" content="RM Software">
    <title>RM Software - Web Development and Mobile Applications</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" type="text/css" />
    <!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.6.1.min.js"><\/script>')</script>
    <script src="js/jquery.smoothscroll.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script src="js/jquery.easing-1.3.pack.js"></script>
    <script src="js/jquery.fancybox-1.3.4.pack.js"></script>
    <script src="js/init.js"></script>
</head>
<body>
<!-- header-wrap -->
<div id="header-wrap">
    <header>
        <hgroup>
            <h1><a href="<?php echo BASE; ?>">RM Software</a></h1>
            <h3>Web Development and Mobile Solutions</h3>
        </hgroup>
        <nav>
            <ul>
                <li><a href="<?php echo BASE; ?>#main" title="RM Software | Software Development">Home</a></li>
                <li><a href="<?php echo BASE; ?>#technologies" title="RM Software Technologies">Technologies</a></li>
                <!-- <li><a href="<?php echo BASE; ?>#portfolio">Our Works</a></li> -->
                <li><a href="<?php echo BASE; ?>#about-us" title="About RM Software">About Us</a></li>
                <li><a href="<?php echo BASE; ?>#contact" title="Contact RM Software">Contact Us</a></li>
            </ul>
        </nav>
    </header>
</div>
<!-- content-wrap -->
<div class="content-wrap">
    <!-- main -->
    <section id="main">
        <div class="intro-box">
           <h1>RM Software Page Not Found</h1>
           <p class="intro">The page that you are looking for is nowhere to be found. Please contact us if you need some assistance.</p>
           
           <p class="intro">Learn more <a href="<?php echo BASE; ?>#about-us" title="About RM Software">about RM Software</a>  or <a href="<?php echo BASE; ?>#contact" title="RM Software Contacts">get in touch</a> if you want to hire us on your next project.</p>
        </div>
        <div class="slider-wrapper">
            <div id="slider" class="nivoSlider">
                <img src="images/slides/slide1.jpg" width="383" height="198" alt="RM Software Solutions" />
                <img src="images/slides/slide2.jpg" width="383" height="198" alt="RM Software Web Development" />
                <img src="images/slides/slide3.jpg" width="383" height="198" alt="RM Software Mobile Development" />
                <img src="images/slides/slide4.jpg" width="383" height="198" alt="RM Software Solutions - Custom Business Solutions" />
                <img src="images/slides/slide5.jpg" width="383" height="198" alt="RM Software Solutions - CRM &amp; CRM" />
                <img src="images/slides/slide6.jpg" width="383" height="198" alt="RM Software Solutions" />
                <img src="images/slides/slide7.jpg" width="383" height="198" alt="RM Software Solutions - Apple iOS, Android, BlackBerry 10" />
            </div>
            <!-- <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div> -->
        </div>
        <div class="row no-bottom-margin"></div>
    </section>
</div>
<!-- footer -->
<footer>
    <div class="footer-content">
        <ul class="footer-menu">
            <li><a href="<?php echo BASE; ?>#main" title="RM Software">Home</a></li>
            <li><a href="<?php echo BASE; ?>#technologies" title="RM Software Technologies">Technologies</a></li>
            <!-- <li><a href="<?php echo BASE; ?>#portfolio">Portfolio</a></li> -->
            <li><a href="<?php echo BASE; ?>#about-us" title="About RM Software">About</a></li>
            <li><a href="<?php echo BASE; ?>#contact" title="Contact RM Software">Contact</a></li>
            <!-- <li class="rss-feed"><a href="<?php echo BASE; ?>#">RSS Feed</a></li> -->
        </ul>
        <p class="footer-text">Copyright 2013 RM Software. &nbsp;&nbsp;&nbsp; Designed by <a href="http://www.styleshout.com/">Styleshout</a></p>
    </div>
</footer>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25633365-8']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
