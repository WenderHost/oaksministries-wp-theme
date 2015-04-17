<?php get_header(); ?>

<!-- Container -->
<div class="container">

	<!-- Row -->
	<div class="row">
        
		<!-- Column -->
    	<div class="col-xs-12"> 
	
			<!-- Section -->
			<section>
			
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
				<!-- Article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<!-- Post Thumbnail
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</a>
					<?php endif; ?>
					/Post Thumbnail -->
					
					<!-- Post Title -->
					<h1>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<!-- /Post Title -->
					
					<!-- Seminar Date -->
					
					<p><?php if( get_field('date')): ?>
					
					Date: 
							
					<?php 
		 
					$date = get_field('date');
					// $date = 19881123 (23/11/1988)
					
					// 20131123
					 
					// extract Y,M,D
					$y = substr($date, 0, 4);
					$m = substr($date, 4, 2);
					$d = substr($date, 6, 2);
					 
					// create UNIX
					$time = strtotime("{$d}-{$m}-{$y}");
					 
					// format date (November 11th 1988)
					echo date('l, F d, Y', $time);
					 
					?>
					
					<?php endif; ?></p>
					
					<!-- Seminar Time -->
					
					<p><?php if( get_field( "time" ) ): ?>
					
					Time: <?php the_field( "time" ); ?>
					
					<?php endif; ?>	</p>
					
					<!-- Seminar Location -->
					
					<p><?php if( get_field( "location" ) ): ?>
					
					Location: <?php the_field( "location" ); ?>
					
					<?php endif; ?></p>
		
								
					<br class="clear">
								
					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
					
				</article>
				<!-- /Article -->
		
				
			<?php endwhile; ?>
			
			<?php else: ?>
			
				<!-- Article -->
				<article>
					
					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
					
				</article>
				<!-- /Article -->
			
			<?php endif; ?>
			
			</section>
			<!-- /Section -->

        </div>
    	<!-- /Column -->

    </div>
	<!-- /Row -->
    
</div>      
<!-- /Container --

<?php get_footer(); ?>