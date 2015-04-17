<?php
/*
Template Name: Groundbreakers
*/
get_header(); ?>

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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
        <a class="close" data-dismiss="modal" aria-hidden="true">CLOSE [X]</a>

		<!-- Section -->
        <section class="page-wrap">

<h2>Dear Lord,</h2>

<p>Now that I understand better that … </p>

<ul>
    <li>I did nothing to deserve hearing about Jesus (Romans 10:14).</li>
    <li>I have nothing without Jesus and am on level ground with every human being at the foot of the cross (Ephesians 1:5, 2:4–5, 8–9; Colossians 1:13–14).</li>
    <li>The chaos I experience is contained in a dot of time so brief that the last blink of my eye represents its brevity (Psalm 39:5)</li>
    <li>Eternity is safe and You are guarding it with cherubim and a flaming sword as I read this (Genesis 2:9, 16-17; 3:6-7, 22-24).</li>
    <li>Satan's power is limited and short (Revelation 12:12; Mark 1:34; Job 1:12, 2:6; James 4:7).</li>
    <li>I can spend my time in heaven doing many things except for telling more people about Jesus (2 Peter 3:8-10; Thessalonians 4:16-18).</li>
    <li>"Tomorrow" all of this is over and I will truly live happily ever after (Revelation 21, 22:1–5).</li>
</ul>

<p>I give you the dot of my life.</p>
<p>To the God Who asked me to exchange my dot for the string,</p>
<p>I surrender my life today in order to be used for Your purposes instead of mine.</p>

        	<?php echo do_shortcode('[ninja_forms_display_form id=1] '); ?>

        </section>
        <!-- Section -->

  </div>
</div>
<!-- Modal -->

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

                	<?php the_content(); ?>

					<?php if( have_rows('toggle_boxes') ): ?>

                        <?php while ( have_rows('toggle_boxes') ) : the_row(); ?>

                            <!-- toggle -->
                            <div class="toggle">

                                <h2 class="no-caps"><?php the_sub_field('toggle_title'); ?></h2>

                            </div>
                            <!-- toggle -->

                            <!-- toggle-box -->
                            <div class="toggle-box">

                                <?php echo do_shortcode('[divider]'); ?>

                                <?php the_sub_field('toggle_content'); ?>

                            </div>
                            <!-- toggle-box -->

                        <?php endwhile; ?>

                    <?php else : ?>

                    <?php endif; ?>

					<div class="groundbreaker-button" data-toggle="modal" data-target="#myModal">Become a Groundbreaker</div>

                    <?php if( have_rows('groundbreakers') ): ?>

                    <?php echo do_shortcode('[clear][clear][clear]'); ?>

                    <h2>Other Groundbreakers</h2>

                    <?php echo do_shortcode('[divider]'); ?>

                    <!-- bxslider -->
                    <ul class="bxslider">

                        <?php while ( have_rows('groundbreakers') ) : the_row(); ?>
                     		<li>
                              <h2 class="no-caps"><span calss="groundbreaker_name"><?php the_sub_field('name'); ?></span>
                                <span class="city-state"><?php $values = get_sub_field('city_state'); if($values) { ?> - <?php the_sub_field( "city_state" ); ?><?php } else { ?><?php } ?></span></h2>
                        	</li>
                        <?php endwhile; ?>

                    </ul>
                    <!-- bxslider -->

                    <?php else : ?>

                    <?php endif; ?>


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