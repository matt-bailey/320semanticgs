	<nav role="navigation" id="navigation" class="clearfix">
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>
	</nav>
	
	<footer role="contentinfo">
		<small>&copy; <?php bloginfo('name'); ?> <?php _e("is powered by", "320semanticgs"); ?> <a href="http://wordpress.org/" title="WordPress">WordPress</a>.</small>
		<small>Built on <a href="http://semantic.gs" title="The Semantic Grid System">The Semantic Grid System</a> by <a href="http://twitter.com/tylertate">Tyler Tate</a> and 320 and Up, a Fashionably Flexible &#169; responsive web design boilerplate by <a href="http://stuffandnonsense.co.uk">Andy Clarke</a>.</small>
		<small>&#8216;320 and Up&#8217; wouldn&#8217;t be possible without <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>, <a href="http://framelessgrid.com/">Frameless grid</a> and <a href="http://twitter.github.com/bootstrap/">Bootstrap</a>. Licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License, Version 2.0</a>. The Font Awesome webfont, CSS, and LESS files are licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</small>
	</footer>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
	
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>
	<script src="js/helper.js"></script>
	
	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
	<script>
	var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
	s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>
	
	<?php wp_footer(); ?>
	
</body>

</html>