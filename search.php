<?php get_header(); ?>

	<!-- Container -->
    <div class="grid-container">
        
		<!-- Grid -->
    	<div class="grid-100">
	
	<!-- Section -->
	<section>
	
		<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
		
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
    	<!-- /Grid -->
        
	</div>      
	<!-- /Container -->

<?php get_footer(); ?>