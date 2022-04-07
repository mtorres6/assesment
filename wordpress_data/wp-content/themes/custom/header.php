<!doctype html>
<html>
    <head>
		<title><?php wp_title(); ?></title>

		<?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <header>
            <h1><?php echo get_bloginfo( 'name' ); ?></h1>
        </header>