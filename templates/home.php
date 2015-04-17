<?php
/*
Template Name: Home Template
*/
get_header(); ?>
<style>

.footer-links:hover {
    background: <?php $values = get_field('featured_color'); if($values) { the_field( "featured_color" ); } else { ?>#BCAC5E<?php } ?>;
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

        <?php $values = get_field('page_title');
        if($values) { ?>
            <h1><?php the_field( "page_title" ); ?></h1>
        <?php } else { ?>
            <h1><?php the_title(); ?></h1>
        <?php } ?>

        <?php echo do_shortcode('[divider]'); ?>

        <!-- questions -->
        <?php if( have_rows('questions') ): ?>

            <ul class="questions">

            <?php while ( have_rows('questions') ) : the_row(); ?>

                <li><span class="icon-question"></span><?php the_sub_field('question'); ?></li>

            <?php endwhile; ?>

            </ul>

        <?php //else : ?>

        <?php endif;?>
        <!-- questions -->

        <!-- blockquote -->
        <?php if( get_field( "blockquote" ) ): ?>

            <!-- blockquote -->
            <div class="blockquote">

                <div class="icon-quote blockquote-icon"></div><p>"<?php the_field( "blockquote" ); ?>"</p>

            </div>
            <!-- blockquote -->

        <?php endif; ?>
        <!-- blockquote -->

        <?php echo do_shortcode('[clear]'); ?>

        <!-- second_headline -->
        <?php if( get_field( "second_headline" ) ): ?>

                <h2><?php the_field( "second_headline" ); ?></h2>

        <?php endif; ?>
        <!-- second_headline -->

        <?php echo do_shortcode('[divider]'); ?>

        <!-- second_headline -->
        <?php if( get_field( "content_area" ) ): ?>

                <?php the_field( "content_area" ); ?>

        <?php endif; ?>
        <!-- second_headline -->

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