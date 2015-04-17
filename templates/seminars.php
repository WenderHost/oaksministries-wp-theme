<?php /* Template Name: Seminars */ get_header(); ?>

<!-- Container -->
<div class="container">

	<!-- Row -->
	<div class="row">
        
		<!-- Column -->
    	<div class="col-xs-12">
    
		    <!-- Order Posts by Date/Expire Post After Date Has Passed -->
		    
		    	<?php
				$currentdate = date("Y-m-d",mktime(0,0,0,date("m"),date("d"),date("Y")));
		
				$event = get_posts(array(
				    'post_type' => 'seminars',
				    'meta_query'=> array(
				        array(
				          'key' => 'date',
				          'compare' => '>=',
				          'value' => $currentdate,
				          'type' => 'DATE',
				        )),
				    'meta_key' => 'date',
				    'orderby' => 'meta_value',
				    'order' => 'ASC',
					'posts_per_page' => 12,
					'paged' => $paged,
				    ));
				if ($event) {
				foreach ($event as $post) {
				setup_postdata($post); ?>  
				
				
				
					<!-- Seminar Title -->
					<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<!-- /Seminar Title -->
					
					<!-- Seminar Date -->
					
					<?php if( get_field('date')): ?>
					
					<p>Date: 
					
					<?php 
		 
					$date = get_field('date');
					// $date = 19881123 (23/11/1988)
					 
					// extract Y,M,D
					$y = substr($date, 0, 4);
					$m = substr($date, 4, 2);
					$d = substr($date, 6, 2);
					 
					// create UNIX
					$time = strtotime("{$d}-{$m}-{$y}");
					 
					// format date (November 11th 1988)
					echo date('l, F d, Y', $time);
					 
					?></p>
					
					<?php endif; ?>			
					<!-- Seminar Time -->
					
					<?php if( get_field( "time" ) ): ?>
					
					<p>Time: <?php the_field( "time" ); ?></p>
					
					<?php endif; ?>
		
				<?php
				}
				wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
				}
				?>        
					

		</div>
    	<!-- /Column -->

    </div>
	<!-- /Row -->
    
</div>      
<!-- /Container -->

<?php get_footer(); ?>