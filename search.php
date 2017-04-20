<?php get_header(); ?>

	<!-- Container -->
    <div class="container">

		<!-- Column -->
    	<div class="col-xs-12 col-md-7">

	<!-- Section -->
	<section class="page-wrap">

		<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

		<?php get_template_part('loop'); ?>

		<!-- Pagination -->
		<div class="pagination">
			<?php html5wp_pagination(); ?>
		</div>
		<!-- /Pagination -->

	</section>
	<!-- /Section -->

        </div>
    	<!-- /Column -->

	    <!-- Column -->
	    <div class="col-xs-12 col-md-4 col-md-push-1 sidebar-wrap">

	        <?php get_sidebar(); ?>

	    </div>
	    <!-- /Column -->

	</div>
	<!-- /Container -->

<?php get_footer(); ?>