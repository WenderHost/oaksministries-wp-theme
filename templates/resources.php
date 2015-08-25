<?php
/*
Template Name: Resources
*/
get_header(); ?>

<style>

.footer-links:hover {
	background: <?php $values = get_field('featured_color'); if($values) { ?><?php the_field( "featured_color" ); ?><?php } else { ?>#BCACphp5E<?php } ?>;
}

#nav li.current-menu-item a {
	border-bottom: 20px solid <?php $values = get_field('featured_color'); if($values) { ?><?php the_field( "featured_color" ); ?><?php } else { ?>#BCACphp5E<?php } ?>;
}

.verse-wrap {
	border: 4px solid <?php $values = get_field('featured_color'); if($values) { ?><?php the_field( "featured_color" ); ?><?php } else { ?>#BCACphp5E<?php } ?>
}

</style>

<!-- Container -->
<div class="container">

    <!-- Column -->
    <div class="col-xs-12 col-md-7">

        <!-- Section -->
        <section class="page-wrap">

        	<?php
            $values = get_field('page_title');
            if( $values ){ ?>
                <h1><?php the_field( "page_title" ); ?></h1>
            <?php } else { ?>
                <h1><?php the_title(); ?></h1>
            <?php } ?>

            <?php echo do_shortcode('[divider]'); ?>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- Article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                	<?php if( get_field( "featured_book" ) ): ?>

						<img src="<?php the_field( "featured_book" ); ?>" class="book-img" />

					<?php endif; ?>

                	<?php the_content(); ?>

                    <?php
                    // ACF Sections
                    $acf_sections = array(
                        'Other Great Books' => array( 'name' => 'books', 'link_text' => 'Read More' ),
                        'Blogs' => array( 'name' => 'blogs', 'link_text' => 'Visit Blog' ),
                        'Websites' => array( 'name' => 'websites', 'link_text' => 'Visit Site' ),
                        'Videos' => array( 'name' => 'videos', 'link_text' => 'View Video' ),
                        'Bible Studies' => array( 'name' => 'bible_studies', 'link_text' => 'Read More' ),
                    );
                    $divider = do_shortcode( '[divider]' );

                    foreach( $acf_sections as $title => $section ){
                        if( have_rows( $section['name'] ) ){
                            $format = '<div class="toggle"><h2>%1$s</h2></div><div class="toggle-box">%2$s%3$s</div>';

                            $rows = array();
                            while( have_rows( $section['name'] ) ) : the_row();
                                $author = ( get_sub_field( 'author' ) )? ' / ' . get_sub_field( 'author' ) : '';
                                $link = ( ! empty( get_sub_field( 'link' ) ) )? '<p><a href="' . get_sub_field( 'link' ) . '" target="_blank">' . $section['link_text'] . ' &rarr;</a></p>' : '';
                                $rows[] = '<div class="resource-wrap"><h4><strong>' . get_sub_field( 'title' ) . '</strong>' . $author . '</h4><p>' . get_sub_field( 'description' ) . '</p>' . $link . '</div>';
                            endwhile;

                            echo sprintf( $format, $title, $divider, implode( "\n", $rows ) );
                        }
                    }
                    ?>

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