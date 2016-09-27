<?php get_header(); ?>

<!-- Container -->
<div class="container">

    <!-- Column -->
    <div class="col-xs-12 col-md-7">

        <!-- Section -->
        <section class="page-wrap">

    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>

                <!-- Article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <!-- Post Thumbnail -->
            <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                </a>
            <?php endif; ?>
            <!-- /Post Thumbnail -->

            <!-- Post Title -->
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2 class="blogtitle">
                <?php the_title(); ?>
            </h2></a>
            <!-- /Post Title -->

            <!-- Post Details -->
            <div class="date">
                <?php the_time('F j, Y'); ?> &bull; Filed under: <?php the_category(', ');
                the_tags(' &bull; Tagged: ', ', '); ?>
            </div>
            <!-- /Post Details -->

            <?php the_content(); // Dynamic Content ?>

            <?php comments_template('', true); // Remove if you don't want comments ?>

                </article>
                <!-- /Article -->

            <?php                                                                                                                                                                                                                                                                                                                                                                                                                         endwhile; ?>

    <?php else : ?>

        <!-- Article -->
        <article>

            <h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>

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