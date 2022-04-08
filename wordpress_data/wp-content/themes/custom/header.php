<!doctype html>
<html>
    <head>
      <title><?php wp_title(); ?></title>
      <meta content="width=device-width, initial-scale=1" name="viewport" />

		<?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

      <header>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="Logo" class="logo">
          <h1><?php echo get_bloginfo( 'name' ); ?></h1>
      </header>