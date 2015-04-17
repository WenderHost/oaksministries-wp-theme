<?php /* Template Name: Resources */ get_header(); ?>

<style>

.footer-links:hover {
	background: <?php $values = get_field('featured_color'); if($values) { ?><?php the_field( "featured_color" ); ?><?php } else { ?>#BCACphp5E<? } ?>;
}

#nav li.current-menu-item a {
	border-bottom: 20px solid <?php $values = get_field('featured_color'); if($values) { ?><?php the_field( "featured_color" ); ?><?php } else { ?>#BCACphp5E<? } ?>;
}

.verse-wrap {
	border: 4px solid <?php $values = get_field('featured_color'); if($values) { ?><?php the_field( "featured_color" ); ?><?php } else { ?>#BCACphp5E<? } ?>
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
            <? }php else { ?>
                <h1><?php the_title(); ?></h1>
            <? }php ?>

            <?php echo do_shortcode('[divider]'); ?>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- Article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                	<?php if( get_field( "featured_book" ) ): ?>

						<img src="<?php the_field( "featured_book" ); ?>" class="book-img" />

					<?php endif; ?>

                	<?php the_content(); ?>

                	<!-- BOOKS -->
					<?php if( have_rows('books') ): ?>

                    <!-- toggle -->
                    <div class="toggle">

                        <h2>Other Great Books</h2>

                    </div>
                    <!-- toggle -->

                    <!-- toggle-box -->
                    <div class="toggle-box">

                    	<?php echo do_shortcode('[divider]'); ?>

						<?php while ( have_rows('books') ) : the_row(); ?>

                            <!-- resource-wrap -->
                            <div class="resource-wrap">

                               <h4><strong><?php the_sub_field('title'); ?></strong>

                               <?php if( get_sub_field( "author" ) ): ?> / <?php the_sub_field( "author" ); ?><?php endif; ?></h4>

                               <p><?php the_sub_field('description'); ?></p>

                            </div>
                            <!-- resource-wrap -->

                        <?php endwhile; else : ?>

                        <?php endif;?>
                    	<!-- BOOKS -->

                    </div>
                    <!-- toggle-box -->

                    <!-- LINKS -->
					<?php if( have_rows('books') ): ?>

                    <!-- toggle -->
                    <div class="toggle">

                        <h2>Links I recommend</h2>

                    </div>
                    <!-- toggle -->

                    <!-- toggle-box -->
                    <div class="toggle-box">

                    	<?php echo do_shortcode('[divider]'); ?>

						<?php while ( have_rows('links') ) : the_row(); ?>

                            <!-- resource-wrap -->
                            <div class="resource-wrap">

                               <h4><strong><?php the_sub_field('title'); ?></strong>

                               <?php if( get_sub_field( "author" ) ): ?> / <?php the_sub_field( "author" ); ?><?php endif; ?></h4>

                               <p><?php the_sub_field('description'); ?></p>

                               <p><a href="<?php the_sub_field( "link" ); ?>" target="_blank">Read More >></a></p>

                            </div>
                            <!-- resource-wrap -->

                        <?php endwhile; else : ?>

                        <?php endif;?>
                        <!-- Links -->

                  	</div>
                    <!-- toggle-box -->

                    <!-- VIDEOS -->
					<?php if( have_rows('videos') ): ?>

                    <!-- toggle -->
                    <div class="toggle">

                        <h2>Videos</h2>

                    </div>
                    <!-- toggle -->

                    <!-- toggle-box -->
                    <div class="toggle-box">

                    	<?php echo do_shortcode('[divider]'); ?>

						<?php while ( have_rows('videos') ) : the_row(); ?>

                            <!-- resource-wrap -->
                            <div class="resource-wrap">

                               <h4><strong><?php the_sub_field('title'); ?></strong>

                               <?php if( get_sub_field( "author" ) ): ?> / <?php the_sub_field( "author" ); ?><?php endif; ?></h4>

                               <p><?php the_sub_field('description'); ?></p>

                               <p><a href="<?php the_sub_field( "link" ); ?>" target="_blank">View Video >></a></p>

                            </div>
                            <!-- resource-wrap -->

                        <?php endwhile; else : ?>

                        <?php endif;?>
                        <!-- VIDEOS -->

                    </div>
                    <!-- toggle-box -->

                    <!-- BIBLE STUDIES -->
					<?php if( have_rows('bible_studies') ): ?>

                    <!-- toggle -->
                    <div class="toggle">

                        <h2>Bible Studies</h2>

                    </div>
                    <!-- toggle -->

                    <!-- toggle-box -->
                    <div class="toggle-box">

                    	<?php echo do_shortcode('[divider]'); ?>

						<?php while ( have_rows('bible_studies') ) : the_row(); ?>

                            <!-- resource-wrap -->
                            <div class="resource-wrap">

                               <h4><strong><?php the_sub_field('title'); ?></strong>

                               <?php if( get_sub_field( "author" ) ): ?> / <?php the_sub_field( "author" ); ?><?php endif; ?></h4>

                               <p><?php the_sub_field('description'); ?></p>

                               <?php if( get_sub_field( "link" ) ): ?>

                               <p><a href="<?php the_sub_field( "link" ); ?>" target="_blank">Read More >></a></p>

                               <?php endif; ?>

                            </div>
                            <!-- resource-wrap -->

                        <?php endwhile; else : ?>

                        <?php endif;?>
                        <!-- BIBLE STUDIES -->

                    </div>
                    <!-- toggle-box -->

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