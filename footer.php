<!-- footer -->
<footer class="footer">

    <!-- promo -->
    <section class="promo">

        <!-- Container -->
        <div class="container">

            <!-- Column -->
            <div class="col-xs-12">

            	<div class="promo-wrap">

					<?php
                      query_posts( array( 'post_type' => 'quotes', 'posts_per_page' => '1', 'orderby' => 'rand' ) );
                      if ( have_posts() ) : while ( have_posts() ) : the_post();
                    ?>

						<?php if( get_field( "quote" ) ): ?>
                            <h2>"<?php the_field( "quote" ); ?>"</h2>
                        <?php endif; ?>

                        <?php if( get_field( "quote_author" ) ): ?>
                            <p class="quote-author"><?php the_field( "quote_author" ); ?></p>
                        <?php endif; ?>

                    <?php endwhile; endif; wp_reset_query(); ?>

                </div>

            </div>
            <!-- /Column -->

        </div>
        <!-- /Container -->

    </section>
    <!-- promo -->
<?php if ( ! is_front_page() ){ ?>
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
<?php } ?>
    <!-- copyright -->
    <section class="copyright">

        <!-- Container -->
        <div class="container">

            <!-- Column -->
            <div class="col-xs-12">

                <div class="copyright-wrap">
                &copy; Copyright 2014 &ndash; <?= date('Y') ?> <?= bloginfo( 'name' ); ?>. All rights reserved.
                </div>

            </div>

        </div>

    </section>

</footer>
<!-- /Footer -->

		<?php wp_footer(); ?>


	</body>

</html>
