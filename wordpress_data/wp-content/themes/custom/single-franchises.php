<?php
/*
 * Template Name: Franchise single template
 * Template Post Type: franchises
 */
?>

<?php get_header(); ?>

    <div class="container-single">
        <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            </article>
            

        <?php endwhile; ?>

        <?php else : ?>

            
            <article>

                <h1>Sorry, we don't have anything to show.</h1>

            </article>

        <?php endif; ?>
    </div>

<?php get_footer(); ?>