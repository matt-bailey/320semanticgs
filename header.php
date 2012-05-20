<!doctype html>

<!-- 
320 and Up by Andy Clarke
Version: 3.0
URL: http://stuffandnonsense.co.uk/projects/320andup/
Apache License: v2.0. http://www.apache.org/licenses/LICENSE-2.0
-->

<!-- HTML5 Mobile Boilerplate -->
<!--[if IEMobile 7]><html class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
	<title><?php wp_title ( '|', true,'right' ); ?></title>
	
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- http://t.co/dKP3o1e -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!-- For all browsers -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="js/selectivizr-min.js"></script>
	<![endif]-->
	
	<!-- JavaScript -->
	<script src="js/modernizr-2.5.3-min.js"></script>
	
	<!-- For iPhone 4 -->
	<!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/h/apple-touch-icon.png"> -->
	<!-- For iPad 1-->
	<!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/m/apple-touch-icon.png"> -->
	<!-- For the new iPad -->
	<!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/h/apple-touch-icon-144x144-precomposed.png">
	<!-- For iPhone 3G, iPod Touch and Android -->
	<!-- <link rel="apple-touch-icon-precomposed" href="images/l/apple-touch-icon-precomposed.png"> -->
	<!-- For Nokia -->
	<!-- <link rel="shortcut icon" href="images/l/apple-touch-icon.png"> -->
	<!-- For everything else -->
	<link rel="shortcut icon" href="/favicon.ico">
	
	<!--iOS -->
	<!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
	<!-- <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->
	<!-- <link rel="apple-touch-startup-image" href="images/splash.png"> -->
	
	<!-- <script>(function(){var p,l,r=window.devicePixelRatio;if(navigator.platform==="iPad"){p=r===2?"images/startup/startup-tablet-portrait-retina.png":"images/startup/startup-tablet-portrait.png";l=r===2?"images/startup/startup-tablet-landscape-retina.png":"images/startup/startup-tablet-landscape.png";document.write('<link rel="apple-touch-startup-image" href="'+l+'" media="screen and (orientation: landscape)"/><link rel="apple-touch-startup-image" href="'+p+'" media="screen and (orientation: portrait)"/>');}else{p=r===2?"images/startup/startup-retina.png":"images/startup/startup.png";document.write('<link rel="apple-touch-startup-image" href="'+p+'"/>');}})()</script> -->
	<!--Microsoft -->
	
	<!-- Prevents links from opening in mobile Safari -->
	<!-- <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script> -->
	<meta http-equiv="cleartype" content="on">
	
	<?php
	// Threaded comment support
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
	wp_get_archives('type=monthly&format=link');
	?>

</head>

<body class="clearfix">

	<header role="banner" class="clearfix">
		<div class="header-inner">
			<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			<a href="#navigation" title="Jump to navigation"><i class="icon-chevron-down"></i></a>
		</div>
	</header>
