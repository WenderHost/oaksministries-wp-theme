<?php /* Template Name: About */ get_header(); ?>

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

        	<?php $values = get_field('page_title'); if($values) { ?>
                <h1><?php the_field( "page_title" ); ?></h1>
            <?php } else { ?>
                <h1><?php the_title(); ?></h1>
            <?php } ?>

            <?php echo do_shortcode('[divider]'); ?>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- Article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php if( get_field( "video" ) ): ?>

                    	<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><?php the_field( "video" ); ?></div>

                        <?php echo do_shortcode('[clear]'); ?>

					<?php endif; ?>

                    <?php if( get_field( "headshot" ) ): ?>

						<img src="<?php the_field( "headshot" ); ?>" class="book-img" />

					<?php endif; ?>

                	<?php the_content(); ?>

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