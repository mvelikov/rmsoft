<?php 
define('BASE', 'http://rm-software.net');
if (strpos($_SERVER['REQUEST_URI'], 'index.php') !== false 
    || substr($_SERVER['SERVER_NAME'], 0, 4) == 'www.'
) {
    header ('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . BASE);
    exit();
}
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
                <li><a href="#main" title="RM Software | Software Development">Home</a></li>
                <li><a href="#technologies" title="RM Software Technologies">Technologies</a></li>
                <!-- <li><a href="#portfolio">Our Works</a></li> -->
                <li><a href="#about-us" title="About RM Software">About Us</a></li>
                <li><a href="#contact" title="Contact RM Software">Contact Us</a></li>
            </ul>
        </nav>
    </header>
</div>
<!-- content-wrap -->
<div class="content-wrap">
    <!-- main -->
    <section id="main">
        <div class="intro-box">
           <h1>Welcome at RM Software</h1>
           <p class="intro">RM Software is a small European software company. We create awesome web based systems (CRMs, CMSs), mobile applications - Android, iOS, Windows Phone 8 and BlackBerry 10. Our purpose is so help you increase your team's performance by creating useful and beautiful software tools.</p>
           
           <p class="intro">Learn more <a href="#about-us" title="About RM Software">about RM Software</a>  or <a href="#contact" title="RM Software Contacts">get in touch</a> if you want to hire us on your next project.</p>
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
        <div class="row no-bottom-margin">
            <section class="col">
                <h2>Cloud Software</h2>
                <p>RM Software aims to deliver to some of the most viable benefits that cloud provides. By reducing hosting expenses cloud software allows your company to focus and invest only in the important part of business.</p>
            </section>
            <section class="col mid">
                <h2>Mobile Applications</h2>
                <p>Mobile applications have developed big in past few years, today they are no just a way to spend your free time but a way to look at your customers from different point of view. RM Software will help you build your dream software.</p>
            </section>
            <section class="col">
                <h2>CMS Systems</h2>
                <p>Having a good CMS System is a must if you aim to turn your visitors into customers. All you need is an easy way to manage your company websites and see rich statictics of users behavioud.</p>
            </section>
        </div>
        <a class="back-to-top" href="#main">Back to Top</a>
      </section>
      <!-- services -->
      <section id="technologies" >
             <h1>RM Software Technologies.</h1>
             <div class="row no-bottom-margin">
                <section class="col">
                    <h2>PHP</h2>
                    <p><!-- <img class="align-left" alt="" src="images/services/webdesign.png" /> -->
                        PHP hold first place in world of web development because it is fast and reliable. The great community that stands around it makes it perfect both for simple and advanced projects.</p>
                </section>
                <section class="col mid">
                    <h2>MySQL</h2>
                    <p><!-- <img class="align-left" alt="" src="images/services/webdevelopment.png" /> -->
                        Using MySQL for your system garantees that your system will be scalable and flexible enough to guarantee great experience for you and your business customers today and in future.</p>
                </section>
                <section class="col">
                    <h2>Zend Framework</h2>
                    <p><!-- <img class="align-left" alt="" src="images/services/seo-services.png" /> -->
                        Zend has build the most advanced and popular PHP framework for PHP applications. Built as a modular, secure and extensible platform makes it best choice for an enterprice business application.</p>
                </section>
            </div>
            <div class="row">
                <section class="col">
                    <h2>Android API</h2>
                    <p>Built by Google as an open source project Android managed to build a great community that helps improve the system and each version that's release takes it to a great new level. Using the Android API is the most advanced way to develop for this platform - guaranteeing nice performance and backward compatibility.</p>
                </section>
                <section class="col mid">
                    <h2>Sencha Touch</h2>
                    <p>Sencha has proven with their framework for mobile applications that HTML5 is ready to take mobile development to the level where you develop an idea once and distribute it to the biggest mobile platforms - Android, iOS, BlackBerry 10 (and Windows 8 Phone in near future).</p>
                </section>
                <section class="col">
                    <h2>jQuery</h2>
                    <p>"Write less, do more" this is the moto of the most popular JavaScript library that is built to make HTML manipulation and Ajax handling much simpler. In the base of this success is an easy-to-use API supported by all modern browsers.</p>
                </section>
            </div>
            <a class="back-to-top" href="#main">Back to Top</a>
      </section>
      <!-- portfolio -->
      <!-- <section id="portfolio">
            <h1>Featured works.</h1>
            <ul class="folio-list clearfix">
                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/milk.jpg" title="Milk Splashes" ><img src="images/thumbs/milk.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Milk Splashes</h3>
                </li>
                <li class="folio-thumb last">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/hexagon.jpg" title="Hexagon Bokeh"><img src="images/thumbs/hexagon.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Hexagon Bokeh</h3>
                </li>
                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox-video" href="http://www.youtube.com/watch?v=EPXwP8D5C5c&feature=player_embedded"><img src="images/thumbs/hillsong-united-aftermath.jpg" alt="" /></a>
                    </div>
                    <h3 class="entry-title">Aftermath (Sample Video)</h3>
                </li>
                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/dandelion.jpg" title="Dandelion" ><img src="images/thumbs/dandelion.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Dandelion</h3>
                </li>
                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/eiffel.jpg" title="Eiffel Tower"><img src="images/thumbs/eiffel.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Eiffel Tower</h3>
                </li>
                 <li class="folio-thumb last">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/clouds-and-rainbow.jpg" title="Clouds &amp; Rainbow"><img src="images/thumbs/clouds-and-rainbow.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Clouds &amp; Rainbow</h3>
                </li>
                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/landscape.jpg" title="Rural Landscape"><img src="images/thumbs/landscape.jpg" alt=""  /> </a>
                    </div>
                    <h3 class="entry-title">Rural Landscape</h3>
                </li>
                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/sneakers.jpg" title="Cosmic Sneakers"><img src="images/thumbs/sneakers.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Cosmic Sneakers</h3>
                </li>
                 <li class="folio-thumb last">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/vector-flower-fullscreen.jpg" title="Abstract Vectors"><img src="images/thumbs/vector-flower-fullscreen.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Abstract Vector</h3>
                </li>
            </ul>
            <a class="back-to-top" href="#main">Back to Top</a>
      </section> -->
      <!-- about us -->
      <section id="about-us" class="clearfix">
            <h1>About RM Software.</h1>
            <div class="primary">
                <p class="intro">RM Software is a startup company that builds great products using best of modern software products and platforms. We are highly motivated to imrove our work and get in touch with other sofware company that march for the same cause - deliver great value for our products.
                </p>
                <p class="intro">All team members of RM Software are graduated engeneers and more than half of us have defended a master degree in computer science. The head of our software department has just got his Zend PHP Certification which makes all our team very happy and is a prove that we don't settle though our success.</p>
                <!-- <h2>Template License</h2>
                <p>This work is released and licensed under the <a href="http://creativecommons.org/licenses/by/2.5/" rel="license">
                Creative Commons Attribution 3.0 License</a>, which means that you are free to use and modify it for any
                personal or commercial purpose. All I ask is that you give me credit by including a link back to my
                <a href="http://www.styleshout.com">website</a></p>
                <div class="row no-bottom-margin">
                    <section class="col first">
                        <h2>Our Process</h2>
                        <p>Nascetur augue hac platea enim, egestas pulvinar vut. Pulvinar cum, ac eu, tristie
                        acus duis in dictumst non integer! Elit, sed scelerisque odio tortor, sed platea dis? Quis
                        cursus parturient ac amet odio in? Nunc Amet urna scelerisque eu lectus placerat.</p>
                    </section>
                    <section class="col">
                        <h2>Our Approach</h2>
                        <p>Pellentesque magna mi, iaculis pharetra eu, fermentum ullamcorper nisi.
                        Integer fringilla magna ut quam vulputate erat. Pulvinar cum, ac eu augue ut sit amet
                        gravida lacinia, eros massa condimentum sem, a fermentum ligula lorem non.
                        Phasellus vulputate.</p>
                    </section>
                </div> -->
                <h2>RM Software Team</h2>
                <ul class="the-team">
                    <li class="odd">
                        <div class="thumbnail">
                            <a href="http://mihailvelikov.eu/" target="_blank" title="Mihail Velikov - Managing Director"><img alt="thumbnail" src="images/mihail.jpg" width="83" height="78" ></a>
                        </div>
                        <p class="mname"><a href="#">Mihail Velikov</a></p>
                        <p>Co-founder &amp; Managing Director</p>
                    </li>
                    <li>
                        <div class="thumbnail">
                            <a href="http://www.luxbulgaria.net" target="_blank" title="Radoslav Borisov - Managing Directore"><img alt="thumbnail" src="images/radoslav.jpg" width="83" height="78"></a>
                        </div>
                        <p class="mname"><a href="#">Radoslav Borisov</a></p>
                        <p>Co-founder &amp; Managing Director</p>
                    </li>
                    <!-- <li class="odd">
                        <div class="thumbnail">
                            <a href="#"><img alt="thumbnail" src="images/thumb-pic.png" width="83" height="78"></a>
                        </div>
                        <p class="mname"><a href="#">Haruno Sakura</a></p>
                        <p>Graphic Designer</p>
                    </li>
                    <li>
                        <div class="thumbnail">
                            <a href="#"><img alt="thumbnail" src="images/thumb-pic.png" width="83" height="78"></a>
                        </div>
                        <p class="mname"><a href="#">Uchiha Sasuke</a></p>
                        <p>Web Developer</p>
                    </li> -->
                </ul>
            </div>
            <aside>
                    <!-- <h2>More about us</h2>
                    <p>Nascetur augue hac platea enim, egestas pulvinar vut. Pulvinar cum, ac eu, tristie
                    acus duis in dictumst non integer! Elit, sed scelerisque odio.</p>
                    <a href="#" class="download-btn">Download PDF</a>

                    <h2>Links</h2>

                    <ul class="link-list">
                        <li><a href="http://themeforest.net?ref=ealigam" title="Site Templates">Themeforest</a></li>
                        <li><a href="http://www.4templates.com/?go=228858961" title="Website Templates">4Templates</a></li>
                        <li><a href="http://www.dreamhost.com/r.cgi?287326|sshout" title="Webhosting">Dreamhost</a></li>
                        <li><a href="http://store.templatemonster.com?aff=ealigam" title="Web Templates">Templatemonster</a></li>
                    </ul> -->

                    <h2>RM Software Testimonials</h2>
                    <div class="testimonials">
                        <blockquote>
                            <p>Hey!! Great app!!<br />
                            One suggestion...<br />
                            A feature to compile a shopping list for the next week or two weeks..<br />
                            Thanks again for the app!!<br />
                            Just got it, and looking forward to using it!!</p>
                            <cite>&mdash; Chad Prohaszka</cite>
                        </blockquote>
                    </div>
            </aside>

            <a class="back-to-top" href="#main">Back to Top</a>
      </section>
      <!-- Styles -->
      <!-- <section id="styles" class="clearfix">
            <h1>Styles.</h1>
            <div class="primary">
                <p class="intro">Maecenas eu neque erat, auctor feugiat enim. Sed libero risus, pretium vel
                elementum id, lacinia vel purus. Mauris semper, orci vitae aliquam vestibul,
                lorem nulla auctor nulla, gravida fermentum urna libero eget sapien. Quisque
                cursus, urna quis vestibulum egestas, nibh sem semper erat, a feugiat justo
                dolor eget libero.
                </p>
                <h2>A paragraph</h2>
                <p>Maecenas eu neque erat, auctor feugiat enim. Sed libero risus, pretium vel
                elementum id, lacinia vel purus. Mauris semper, orci vitae aliquam vestibul,
                lorem nulla auctor nulla, gravida fermentum urna libero eget sapien. Quisque
                cursus, urna quis vestibulum egestas, nibh sem semper erat, a feugiat justo
                dolor eget libero. Urna quis vestibulum egestas, nibh sem
                semper erat, a feugiat justo dolor eget libero
                </p>
                <p>A <a href="#">link</a>,
				<abbr title="this really isn't a very good description">abbrebation</abbr>,
				<strong>strong text</strong>,
				<del>deleted text</del>, and
                <mark>this is a mark text.</mark>
        		</p>
                <h2>Example Lists</h2>
				<ol>
					<li>Here is an example</li>
					<li>of an ordered list</li>
				</ol>
				<ul>
					<li>Here is an example</li>
					<li>of an unordered list</li>
				</ul>
				<dl>
            	    <dt>Definition title</dt>
            	    <dd>Definition description</dd>
            	    <dt>Definition title</dt>
            	    <dd>Definition description</dd>
         	    </dl>
                <h2>Blockquote</h2>
				<blockquote>
				    <p>Every child is an artist. The challenge is to remain an artist after you grow up.</p>
				</blockquote>
                <h2>Headers</h2>
				<h1>H1 Heading</h1>
				<h2>H2 Heading</h2>
				<h3>H3 Heading</h3>
            </div>
            <aside>
                    <h2>Sidebar Heading</h2>
                    <p>Nascetur augue hac platea enim, egestas pulvinar vut. Pulvinar cum, ac eu, tristie
                    acus duis in dictumst non integer! Elit, sed scelerisque odio.</p>
                    <h2>Link List</h2>
                    <ul class="link-list">
                        <li><a href="#">Maecenas eu neque</a></li>
                        <li><a href="#">Dolor eget libero</a></li>
                        <li><a href="#">Lorem Ipsum</a></li>
                        <li><a href="#">Gravida fermentum urna</a></li>
                    </ul>
                    <h2>Testimonials</h2>
                    <div class="testimonials">
                        <blockquote>
                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue.
                            Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
                            <cite>&mdash; John Doe, XYZ Company</cite>
                        </blockquote>
                        <blockquote>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis
                            consectetur purus sit amet fermentum.</p>
                            <cite>&mdash; Jane Roe, ABC Corp</cite>
                        </blockquote>
                    </div>
            </aside>
            <a class="back-to-top" href="#main">Back to Top</a>
      </section> -->
      <!-- contact -->
      <section id="contact" class="clearfix">
            <h1>Get in touch with RM Software.</h1>
            <div class="primary">
                <p class="intro">
                It would be great pleasure for our teem to get in touch with you. We are open for your ideas - if you need to hire any of our developers or you have a project that you are willing to outsource we will always spend some time to help you.
                </p>
                <form method="post" action="#" id="contactform">
                    <div>
                    <p id="success-msg">Send us a message</p>
                    </div>
                    <div>
                    <label>Name <span class="required">*</span></label>
                    <input name="name" type="text" id="name" value="" required />
                    </div>
                    <div>
                    <label>Email <span class="required">*</span></label>
                    <input name="email" type="email" id="email" value="" required />
                    </div>
                    <!-- <div>
                    <label>Website</label>
                    <input name="website" type="text" id="website" value="" />
                    </div>
                    <div>
                    <label>Subject</label>
                    <input name="subject" type="text" id="subject"  value="" />
                    </div> -->
                    <div>
                    <label>Message <span class="required">*</span></label>
                    <textarea name="message" rows="10" cols="50"  id="message" required></textarea><br /><br />
                    </div>
                    <div>
					<input type="submit" id="submit-form" value="Submit" class="button">
         			<input type="reset" value="Reset" class="button">
					</div>

                </form>
            </div>
            <aside>
                    <h2>RM Software Contact Information</h2>

                    <p>
                    Email: info [@] rm-software.net
                    </p>

                    <h2>Follow RM Software </h2>
                    <ul class="link-list social">
                        <li class="facebook"><a href="https://www.facebook.com/rmsoftware" title="Like RM Software on Facebook" target="_blank">Facebook</a></li>
                        <li class="googleplus"><a href="https://plus.google.com/107531480442629886418" rel="publisher" target="_blank" title="Plus RM Software on Google+">Google+</a></li>
                        <li class="twitter"><a href="https://twitter.com/rm_software" title="Follow RM Software on Twitter" target="_blank">Twitter</a></li>
                    </ul>
            </aside>
            <a class="back-to-top" href="#main">Back to Top</a>
     </section>
</div>
<!-- footer -->
<footer>
    <div class="footer-content">
        <ul class="footer-menu">
            <li><a href="#main" title="RM Software">Home</a></li>
            <li><a href="#technologies" title="RM Software Technologies">Technologies</a></li>
            <!-- <li><a href="#portfolio">Portfolio</a></li> -->
            <li><a href="#about-us" title="About RM Software">About</a></li>
            <li><a href="#contact" title="Contact RM Software">Contact</a></li>
            <!-- <li class="rss-feed"><a href="#">RSS Feed</a></li> -->
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
