<!-- Sidebar -->
<aside class="sidebar">

    <div class="word-wrap" style="background: <?php $values = get_field('featured_color'); if($values) { ?><?php the_field( "featured_color" ); ?><?php } else { ?>#BCAC5E<?php } ?>;">

<?php $values = get_field('verse_title'); if($values) { ?>
    <h2><?php the_field( "verse_title" ); ?></h2>
<?php } else { ?>
    <h2>PLANTING AND WATERING</h2>
<?php } ?>

    </div>

    <!-- verse-wrap -->
    <div class="verse-wrap">

		<?php $values = get_field('verse'); if($values) { ?>
            <p><?php the_field( "verse" ); ?></p>
        <?php } else { ?>
            <p>I planted, Apollos watered, but God was causing the growth. So then neither the one who plants nor the one who waters is anything, but God who causes growth.</p>
        <?php } ?>

        <?php $values = get_field('verse_reference'); if($values) { ?>
            <h3><?php the_field( "verse_reference" ); ?></h3>
        <?php } else { ?>
            <h3>I Corinthians 3:6</h3>
        <?php } ?>

    </div>
    <!-- verse-wrap -->

    <a href="https://twitter.com/oaksministries" target="_blank" class="twitter-link"><h3>Follow Laurie on Twitter</h3></a>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /Sidebar -->