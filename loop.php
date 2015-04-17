<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- Article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<!-- Post Title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /Post Title -->
		
		<!-- Post Details -->
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<!-- /Post Details -->
		
		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		
		<br class="clear">
		
	</article>
	<!-- /Article -->
	
<?php endwhile; ?>

<?php else: ?>

	<!-- Article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /Article -->

<?php endif; ?>