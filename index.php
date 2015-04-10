<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DRNK|MXR: Bartenderes on Demand</title>
		<meta name="description" content="A free HTML5/CSS3 template made exclusively for Codrops by Peter Finlan" />
		<meta name="keywords" content="html5 template, css3, one page, animations, agency, portfolio, web design" />
		<meta name="author" content="Peter Finlan" />
		<!-- Bootstrap -->
		<script src="js/modernizr.custom.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/jquery.fancybox.css" rel="stylesheet">
		<link href="css/flickity.css" rel="stylesheet" >
		<link href="css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="css/default.css" >
		<link rel="stylesheet" href="css/component.css" >
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/queries.css" rel="stylesheet">
		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- open/close -->
		<header>
			<section class="hero">
				<div class="texture-overlay"></div>
				<div class="container">
					<div class="row nav-wrapper">
						<div class="col-md-6 col-sm-6 col-xs-6 text-left">
						</div>
					</div>
					<div class="row hero-content">
						<div class="col-md-12">
							<h1 class="animated fadeInDown"><a href="#"><img src="img/drnkmxr-translucent.png" alt="DRNKMXR Logo"></a></h1>
							 <a href="#features" class="learn-btn animated fadeInUp"> <i class="fa fa-arrow-down"></i></a>
						</div>
					</div>
				</div>
			</section>
		</header>
        
		<section class="features-list" id="features">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="col-md-4 feature-1 wp2">
							<div class="feature-icon">
								
							</div>
							<div class="feature-content">
								<h1>BROWSE</h1>
								<p>Built using HTML5/CSS3 and jQuery, and built using one of the world's most powerful CSS frameworks available, Bootstrap.</p>
							</div>
						</div>
						<div class="col-md-4 feature-2 wp2 delay-05s">
							<div class="feature-icon">
							</div>
							<div class="feature-content">
								<h1>BOOK</h1>
								<p>Perfect if you run your own start-up, product or service. Boxify can showcase your business converting your visits to income.</p>
							</div>
						</div>
						<div class="col-md-4 feature-3 wp2 delay-1s">
							<div class="feature-icon">
							</div>
							<div class="feature-content">
								<h1>BOOZE</h1>
								<p>As aways, download Boxify for free exclusively from Codrops. If you love Boxify and want to thank me, simply buy me a beer</a>. </p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<section class="showcase">
			<div class="showcase-wrap">
				<div class="texture-overlay"></div>
				<div class="container">
							<h1>WE LOVE A PARTY</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>		
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="download" id="download">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                        <div class="container demo-1">	
							<div class="main clearfix">
								<?php if (!$_GET['submitted']) : ?>
								<form id="nl-form" class="nl-form" action="form-to-email.php" method="post">
									I want to know when you're up! I am a                  
									<select name="type">
										<option value="1" selected>Bartender</option>
										<option value="2">Host</option>
									</select>
									and my email is <input type="text" name="email" value="" placeholder="test@example.com" />
									<div class="nl-submit-wrap">  
				                        <button class="nl-submit" type="submit" value="send">Let me know!</button>
									</div>
									<div class="nl-overlay"></div>
								</form>
								<?php else: ?>
								<div class="success-message">Thanks for the submission!  We'll get back to you with more info!</div>
								<?php endif; ?>
							</div>
						</div><!-- /container -->
						<script src="js/nlform.js"></script>
						<script>
							var nlform = new NLForm( document.getElementById( 'nl-form' ) );
						</script>
					</div>                    
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						
						<p>© DRNK|MXR 2015, All Rights Reserved — Made in NYC. Please Drink Responsibly.</p>
					</div>
					<div class="col-md-3">
						<p>        <a href="/terms">Terms of Service</a> | <a href="/privacy">Privacy Policy</a>
</p>
					</div>
				</div>
			</div>
		</footer>
		<div class="overlay overlay-boxify">
			<nav>
				<ul>
					<li><a href="#features"><i class="fa fa-flash"></i>Features</a></li>
				</ul>
				<ul>
					<li><a href="#screenshots"><i class="fa fa-desktop"></i>Screenshots</a></li>
					<li><a href="#download"><i class="fa fa-download"></i>Download</a></li>
				</ul>
			</nav>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/min/toucheffects-min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/flickity.pkgd.min.js"></script>
		<script src="js/jquery.fancybox.pack.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/retina.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/min/scripts-min.js"></script>
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-61751713-1');ga('send','pageview');
		</script>
	</body>
</html>
