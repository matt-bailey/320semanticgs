<?php get_header(); ?>
	
	<div class="content clearfix">
	
		<div id="main" class="clearfix" role="main">
		
			<?php if (is_category()) { ?>
				<h1 class="archive_title h2">
					<span><?php _e("Posts Categorized:", "320semanticgs"); ?></span> <?php single_cat_title(); ?>
				</h1>
			<?php } elseif (is_tag()) { ?> 
				<h1 class="archive_title h2">
					<span><?php _e("Posts Tagged:", "320semanticgs"); ?></span> <?php single_tag_title(); ?>
				</h1>
			<?php } elseif (is_author()) { ?>
				<h1 class="archive_title h2">
					<span><?php _e("Posts By:", "320semanticgs"); ?></span> <?php get_the_author_meta('display_name'); ?>
				</h1>
			<?php } elseif (is_day()) { ?>
				<h1 class="archive_title h2">
					<span><?php _e("Daily Archives:", "320semanticgs"); ?></span> <?php the_time('l, F j, Y'); ?>
				</h1>
			<?php } elseif (is_month()) { ?>
				<h1 class="archive_title h2">
					<span><?php _e("Monthly Archives:", "320semanticgs"); ?>:</span> <?php the_time('F Y'); ?>
				</h1>
			<?php } elseif (is_year()) { ?>
				<h1 class="archive_title h2">
					<span><?php _e("Yearly Archives:", "320semanticgs"); ?>:</span> <?php the_time('Y'); ?>
				</h1>
			<?php } ?>
		
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			
				<header>
				
					<h2 class="h3" itemprop="headline"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					
					<p class="meta"><?php _e('Filed under&#58;' , "320semanticgs"); ?> <?php the_category(', ') ?> <?php _e('by', "320semanticgs"); ?> <?php  the_author(); ?><br />
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?></p>
				
				</header><!-- / header -->
				
				<section class="post_content clearfix" itemprop="articleBody">
				
					<?php the_post_thumbnail(); ?>
					
					<?php the_excerpt(); ?>
				
				</section><!-- / section -->
				
				<footer></footer><!-- / footer -->
				
			</article><!-- / article -->
			
			<?php comments_template(); ?>
			
			<?php endwhile; ?>
			
			<div class="navigation">
				<?php previous_post_link('< %link') ?> <?php next_post_link(' %link >') ?>
			</div>
			
			<?php endif; ?>
		
		</div><!-- / main -->
		
		<?php get_sidebar(); ?>
		
	</div><!-- / content -->

<?php get_footer(); ?>