<?php /* Template Name: Blog Template */ get_header(); ?>
	
<!-- Section -->

<section>

	<h1><?php the_title(); ?></h1>

	<div class="grid-container blog-posts">
	
	<?php
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	$wp_query->query('posts_per_page=3'.'&paged='.$paged);
	while ($wp_query->have_posts()) : $wp_query->the_post();
	?>
		
		<a href="<?php the_permalink();?>"><h2 class="blog-title"><?php the_title(); ?></h2></a>
		
		<?php echo do_shortcode('[divider]'); ?>
		
		<!-- Post Details -->
		<span class="date"><?php the_time('l, F j Y'); ?></span>
		<!-- /Post Details -->
		
		<?php the_content(); ?>
		
		<div class="clear"></div>
		
	<?php endwhile; ?>

	<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
	<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
	<?php endif; ?>
	
	<?php $wp_query = null; $wp_query = $temp;?>
	
	</div>
	
</section>
	
<?php get_footer(); ?>
