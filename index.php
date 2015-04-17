<?php get_header(); ?>

<style>

.footer-links:hover {
	background: <?php $values = get_field('featured_color'); if($values) { ?><?php the_field( "featured_color" ); ?><?php } else { ?>#BCAC5E<?php } ?>;
}

#nav li.current-menu-item a {
	border-bottom: 20px solid <?php $values = get_field('featured_color'); if($values) { ?><?php the_field( "featured_color" ); ?><?php } else { ?>#BCAC5E<?php } ?>;
}

.verse-wrap {
	border: 4px solid <?php $values = get_field('featured_color'); if($values) { ?><?php the_field( "featured_color" ); ?><?php } else { ?>#BCAC5E<?php } ?>
}

</style>

<!-- Container -->
<div class="container">

    <!-- Column -->
    <div class="col-xs-12 col-md-7">

        <!-- Section -->
        <section class="page-wrap">

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