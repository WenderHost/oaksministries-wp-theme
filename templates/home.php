<?php
/*
Template Name: Home Template
*/
get_header();

$verse = ( $verse = get_post_meta( $post->ID, 'verse', true ) )? $verse : 'So then, just as you received Christ Jesus as Lord, continue to live in Him, rooted and built up in him, strengthened in the faith as you were taught, and overflowing with thankfulness.';
$verse_reference = ( $verse_reference = get_post_meta( $post->ID, 'verse_reference', true ) )? $verse_reference : 'Colossians 2:6-7';
?>

<!-- featured -->
<div class="featured" style="background-image: url('<?php $values = get_field('background_image'); if($values) { ?><?php the_field( "background_image" ); ?><?php } else { ?><?php echo get_template_directory_uri(); ?>/img/featured.jpg<?php } ?>');">

    <!-- Container -->
    <div class="container">
        <div class="col-md-5">

            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo"></a>

        </div>
        <div class="col-md-6 col-md-push-1 intro"><?php
        echo apply_filters( 'the_content', $verse );
        if( ! empty( $verse_reference ) )
            echo '<p style="text-align: right;">' . $verse_reference . '</p>';
        ?></div>
    </div>
    <!-- /Container -->

</div>
<!-- featured -->
<!-- links -->
<section class="links">

    <div class="col-xs-12 col-md-4 link">
        <a href="<?php echo get_home_url(); ?>/resources/" class="footer-links">
            <div class="link-img link-img-1"></div>
            <h3>Purchase <em>Live ABOVE the Chaos</em></h3>
        </a>
    </div>
    <div class="col-xs-12 col-md-4 link">
        <a href="<?php echo get_home_url(); ?>/blog/" class="footer-links">
            <div class="link-img link-img-2"></div>
            <h3>Read the Blog</h3>
        </a>
    </div>
    <div class="col-xs-12 col-md-4 link">
        <a href="<?php echo get_home_url(); ?>/speaking-and-videos/" class="footer-links">
            <div class="link-img link-img-3"></div>
            <h3>Speaking</h3>
        </a>
    </div>

</section>
<!-- links -->

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