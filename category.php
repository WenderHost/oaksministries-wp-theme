<?php get_header(); ?>

<style>

.footer-links:hover {
    background: <?php $values = get_field('featured_color'); if ($values) {
?><?php the_field("featured_color"); ?><?php
} else {
?>#BCAC5E<?php
} ?>;
}

#nav li.current-menu-item a {
    border-bottom: 20px solid <?php $values = get_field('featured_color'); if ($values) {
?><?php the_field("featured_color"); ?><?php
} else {
?>#BCAC5E<?php
} ?>;
}

.verse-wrap {
    border: 4px solid <?php $values = get_field('featured_color'); if ($values) {
?><?php the_field("featured_color"); ?><?php
} else {
?>#BCAC5E<?php
} ?>
}

</style>

<!-- Container -->
<div class="container">

    <!-- Column -->
    <div class="col-xs-12 col-md-7">

        <!-- Section -->
        <section class="page-wrap">

            <h1>Category: <?php single_cat_title(); ?></h1>

            <?php echo do_shortcode('[divider]'); ?>

            <?php if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>

                <!-- Article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                    <p><?php the_excerpt(); ?></p>

                </article>
                <!-- /Article -->

                <?php                                                                                                                                                                                                                                                                                                                                                                                                                                 endwhile; ?>
                <!-- pagination -->
                <div class="pagination">
                    <?php html5wp_pagination(); ?>
                </div>
                <!-- /pagination -->
            <?php else : ?>

                <!-- Article -->
                <article>

                    <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

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