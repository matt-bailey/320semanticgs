<?php get_header(); ?>
	
	<div class="content clearfix">
	
		<div id="main" class="clearfix" role="main">
		
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			
				<header>
				
					<h1 class="h2" itemprop="headline"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					
					<p class="meta"><?php _e('Filed under&#58;', "320semanticgs"); ?> <?php the_category(', ') ?> <?php _e('by', "320semanticgs"); ?> <?php  the_author(); ?><br />
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?></p>
				
				</header><!-- / header -->
				
				<section class="post_content clearfix" itemprop="articleBody">
				
					<?php the_post_thumbnail(); ?>
					
					<?php
					$more_link_text = '<span class="read-more">' . __('Read more on', '320semanticgs') . the_title(' "', '" &raquo;</span>', false) ;
					the_content( $more_link_text ); 
					?>
				
				</section><!-- / section -->
				
				<footer>
				
					<?php
					$posttags = get_the_tags(); $count = 0; if ($posttags) { foreach($posttags as $tag) { $count++; } };
					$before_tags_text = '<p class="tags"><span class="tags-title">' . _n('Tag', 'Tags', $count, '320semanticgs') . '</span>: ';
					the_tags( $before_tags_text, ', ', '</p>');
					?>
				
				</footer><!-- / footer -->
				
			</article><!-- / article -->
			
			<?php endwhile; ?>
			
			<div class="navigation">
			<?php previous_post_link('< %link') ?> <?php next_post_link(' %link >') ?>
			</div>
			
			<?php endif; ?>
		
		</div><!-- / main -->
		
		<?php get_sidebar(); ?>
		
	</div><!-- / content -->

<?php get_footer(); ?>