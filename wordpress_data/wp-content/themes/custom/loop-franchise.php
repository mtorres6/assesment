<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( array( 350, 260 ) ); ?>
            </a>
        <?php endif; ?>
        
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        
        <p>Author: <?php the_author_posts_link(); ?></p>

    </article>
    

<?php endwhile; ?>

<?php else : ?>

    <article>
        <h2>Sorry, we don't have anything to show.</h2>
    </article>

<?php endif; ?>