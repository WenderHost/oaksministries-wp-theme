<?php get_header(); ?>
	
<!-- Container -->
<div class="container">

	<!-- Row -->
	<div class="row">
        
		<!-- Column -->
    	<div class="col-xs-12">     

			<!-- Section -->
			<section>
			
				<h1><?php _e( 'Categories for', 'html5blank' ); the_category(); ?></h1>
			
				<?php get_template_part('loop'); ?>
				
				<!-- Pagination -->
				<div class="pagination">
					<?php html5wp_pagination(); ?>
				</div>
				<!-- /Pagination -->
			
			</section>
			<!-- /Section -->
			
			<?php get_sidebar(); ?>

        </div>
    	<!-- /Column -->

    </div>
	<!-- /Row -->
    
</div>      
<!-- /Container -->

<?php get_footer(); ?>