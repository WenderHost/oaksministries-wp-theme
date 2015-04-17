<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="icon">

        <link href="https://fontastic.s3.amazonaws.com/npgBSEiyFCvJdvhcT2YzjE/icons.css" rel="stylesheet">

        <!-- google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

<!-- Header -->
<header id="header">

        <!-- Nav -->
        <nav id="nav-wrap">

            <div id="menu-icon">Menu</div>

            <?php html5blank_nav(); ?>

        </nav>
        <!-- /Nav -->

</header>
<!-- /Header -->

<!-- featured -->
<div class="featured" style="background-image: url('<?php $values = get_field('background_image'); if($values) { ?><?php the_field( "background_image" ); ?><?php } else { ?><?php echo get_template_directory_uri(); ?>/img/featured.jpg<?php } ?>');">

	<!-- Container -->
	<div class="container">

		<!-- Column -->
    	<div class="col-xs-12">

        	<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo"></a>

        </div>
    	<!-- /Column -->

    </div>
    <!-- /Container -->

</div>
<!-- featured -->